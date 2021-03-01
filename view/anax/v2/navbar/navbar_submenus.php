<?php

namespace Anax\View;

/**
 * Template file to render a view.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

$navbar = new \Anax\Navigation\Navbar();
$navbar->setDI($di);
$html = $navbar->createMenuWithSubMenus($navbarConfig);

$classes = "menu";



?>
<!-- menu wrapper -->
<nav <?= classList($classes) ?>>
    <div class="menu-branding">
        <div class="portrait"></div>
    </div>
    <!-- main menu -->
    <?= $html ?>
</nav>