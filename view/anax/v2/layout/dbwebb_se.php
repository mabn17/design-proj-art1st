<?php

namespace Anax\View;

use Anax\StyleChooser\StyleChooserController;

/**
 * A layout rendering views in defined regions.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

$htmlClass = $htmlClass ?? [];
$lang = $lang ?? "sv";
$charset = $charset ?? "utf-8";
$title = ($title ?? "No title") . ($baseTitle ?? " | No base title defined");
$bodyClass = $bodyClass ?? null;

// Set active stylesheet
$request = $di->get("request");
$session = $di->get("session");
if ($request->getGet("style")) {
    $session->set("redirect", currentUrl());
    redirect("style/update/" . rawurlencode($_GET["style"]));
}

// Get the active stylesheet, if any.
$activeStyle = $session->get(StyleChooserController::getSessionKey(), null);
if ($activeStyle) {
    $stylesheets = [];
    $stylesheets[] = $activeStyle;
}

// Get hgrid & vgrid
if ($request->hasGet("hgrid")) {
    $htmlClass[] = "hgrid";
}
if ($request->hasGet("vgrid")) {
    $htmlClass[] = "vgrid";
}

// Show regions
if ($request->hasGet("regions")) {
    $htmlClass[] = "regions";
}

// Get flash message if any and add to region flash-message
$flashMessage = $session->getOnce("flashmessage");
if ($flashMessage) {
    $di->get("view")->add(__DIR__ . "/../flashmessage/default", ["message" => $flashMessage], "flash-message");
}

// Get current route to make as body class
$route = "route-" . str_replace("/", "-", $di->get("request")->getRoute());


?>
<!doctype html>
<html <?= classList($htmlClass) ?> lang="<?= $lang ?>">

<head>

    <meta charset="<?= $charset ?>">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption&display=swap" rel="stylesheet"> 
    <?php if (isset($favicon)) : ?>
    <link rel="icon" href="favicon.ico">
    <?php endif; ?>

    <?php if (isset($stylesheets)) : ?>
    <?php foreach ($stylesheets as $stylesheet) : ?>
    <link rel="stylesheet" type="text/css" href="<?= asset($stylesheet) ?>">
    <?php endforeach; ?>
    <?php endif; ?>

    <?php if (isset($style)) : ?>
    <style>
    <?=$style ?>
    </style>
    <?php endif; ?>

</head>

<body <?= classList($bodyClass, $route) ?> id="bg-img">

    <!-- wrapper around all items on page -->
    <div id="top"></div>

    <!-- siteheader with optional columns -->
    <?php if (regionHasContent("header") || regionHasContent("header-col-1")) : ?>
    <header role=" banner">
        <!-- NavBar -->
        <?php if (regionHasContent("header-col-2")) : ?>
        <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>
        <?php renderRegion("header-col-2") ?>
        <?php endif; ?>
    </header>
    <?php endif; ?>

    <!-- breadcrumb -->
    <?php if (regionHasContent("breadcrumb")) : ?>
    <div class="outer-wrap outer-wrap-breadcrumb">
        <div class="inner-wrap inner-wrap-breadcrumb">
            <div class="row">
                <div class="region-breadcrumb">
                    <?php renderRegion("breadcrumb") ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>



    <!-- flash message -->
    <?php if (regionHasContent("flash-message")) : ?>
    <div class="outer-wrap outer-wrap-flash-message">
        <div class="inner-wrap inner-wrap-flash-message">
            <div class="row">
                <div class="region-flash-message">
                    <?php renderRegion("flash-message") ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>



    <!-- columns-above -->
    <?php if (regionHasContent("columns-above")) : ?>
    <div class="outer-wrap outer-wrap-columns-above">
        <div class="inner-wrap inner-wrap-columns-above">
            <div class="row">
                <div class="region-columns-above">
                    <?php renderRegion("columns-above") ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- WRAPPER -->
    <div class="main-wrap" id="main-wrap">
        <div style="float:right;padding-top:0,5rem;">
            <div id="something" class="outer-wrap outer-wrap-flash" >
        </div>
    </div>
        <!-- main -->

        <?php
$sidebarLeft  = regionHasContent("sidebar-left");
$sidebarRight = regionHasContent("sidebar-right");
$class = "";
$class .= $sidebarLeft  ? "has-sidebar-left "  : "";
$class .= $sidebarRight ? "has-sidebar-right " : "";
$class .= empty($class) ? "" : "has-sidebar";
?>

        <?php if ($sidebarLeft) : ?>
        <div class="wrap-sidebar region-sidebar-left <?= $class ?>" role="complementary">
            <?php renderRegion("sidebar-left") ?>
        </div>
        <?php endif; ?>


        <!-- Main Content -->
        <?php if (regionHasContent("main")) : ?>
        <div class="outer-main-wrap">
            <?php renderRegion("main") ?>
        </div>
        <?php endif; ?>

        <!-- end of wrapper -->

        </main>
        <div class="outer-footer-wrap">
            <i id="toggle-footer" class="fas fa-angle-double-down"></i>
            <!-- footer -->
            <?php if (regionHasContent("footer")) : ?>
            <footer class="footer-distributed" id="footer">
                <div class="footer-left">
                    <h3 style="margin-top: 3px;">Bew<span>Gorp</span></h3>
                    <p class="footer-links">
                        <a href="./">Hem</a>
                        ·
                        <a href="om" >Om</a>
                        ·
                        <a href="blogg" class="break-me" >Projekt</a>
                        ·
                        <a href="style" class="break-me">Styleväljare</a>
                    </p>
                    <p class="footer-company-name" style="margin-top: 27px;">Martin Borg &copy; 2019</p>
                </div>
                <div class="footer-center">
                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a class="break-me" href="mailto:support@company.com">Bew@Gorp.com</a></p>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <p class="break-me">(555) 555-5555</p>
                    </div>
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p class="break-me"><span>Valhallavägen 1, 371 38</span> Karlskrona, Sverige</p>
                    </div>
                </div>
                <div class="footer-right">
                    <p class="footer-company-about">
                        <span style="margin-bottom: 26px; margin-top: 19px;">Om webbplatsen</span>
                        Detta är ett slutptojekt i kursen Design på Dbwebb, BTH.
                        Sidan är designad och gjord av Martin Borg, tekniker som används:
                        PHP (anax), Sass och ES6.
                    </p>
                </div>
            </footer>
        </div>
        <?php endif; ?>

        <!-- End of wrapper -->
    </div>

    <!-- render javascripts -->
    <?php if (isset($javascripts)) : ?>
    <?php foreach ($javascripts as $javascript) : ?>
    <script async src="<?= asset($javascript) ?>"></script>
    <?php endforeach; ?>
    <?php endif; ?>


    <!-- useful for inline javascripts such as google analytics-->
    <?php if (regionHasContent("body-end")) : ?>
    <?php renderRegion("body-end") ?>
    <?php endif; ?>

</body>

</html>