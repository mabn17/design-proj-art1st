<?php

namespace Anax\View;

/**
 * Render a meta footer for the blog.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

// Prepare classes
$classes[] = "next-previous";
if (isset($class)) {
    $classes[] = $class;
}

// Prepare titles
$nextTitle = $next["title"];
$prevTitle = $previous["title"];

if (isset($nextPreviousTitle) && $nextPreviousTitle === false) {
    $nextTitle = t("Next");
    $prevTitle = t("Previous");
}

// Prepare classes
$classes[] = "article blog-post";
if (isset($class)) {
    $classes[] = $class;
}

// Defaults
$category = isset($category) ? $category : [];


// Get time for publish/update/create
list($pubStr, $published) = getPublishedDate(get_defined_vars());



// Get details on author.
$authorStr = "";
foreach ($author as $key => $who) {
    $part = isset($who["name"]) ? $who["name"] : $key;
    if (isset($who["url"])) {
        $authorUrl = url($who["url"]);
        $part = "<a rel=\"author\" href=\"$authorUrl\">$part</a>";
    }
    $authorStr .= $part . ", ";
}
$authorStr = substr($authorStr, 0, -2);
$authFirst = explode(" ", $authorStr)[0];
$authLast = explode(" ", $authorStr)[1];

$auth = $authFirst . " <span class='text-secondary'>" . $authLast . "</span>";
$byStr = t("By: !AUTHORS,", ["!AUTHORS" => $auth]);

// Add meta header to h1
$header = <<<EOD
<div class="blog-head"></div>
    <h1\$1 id="tit" class="lg-heading" style="padding-top: 5px;">\$2</h1>
    <i><p class="meta-header">
    <adress class="author">$byStr</adress>
    $pubStr <time pubdate datetime="$published"><span class="text-secondary">$published</span></time>
    </p></i>
</div>
EOD;

$content = preg_replace("#<h1(.*?)>(.*?)</h1>#", $header, $content, 1);



?><main <?= classList($classes) ?> itemscope itemtype="http://schema.org/Article">
    <div id="source">
        <?= $content ?>


        <!-- Categorier -->
        <?php
    renderView(__DIR__ . "/../blog-meta-footer/default", [
        "category" => $category,
    ]);
    ?>
        <!-- Prev/Next -->
        <hr />
        <div <?= classList($classes) ?>>
            <?php if (isset($next)) : ?>
            <div class="next"><a class="text-secondary hover" href="<?= url($next["route"]) ?>"><?= $nextTitle ?></a> »
            </div>
            <?php endif; ?>

            <?php if (isset($previous)) : ?>
            <div class="previous">« <a class="text-primary hover"
                    href="<?= url($previous["route"]) ?>"><?= $prevTitle ?></a></div>
            <?php endif; ?>
        </div>


        <script>
        var title = document.getElementById('tit');
        var arr = title.innerText.split(" ");
        var stri = "";
        var hasAdded = true;

        // footer.style.marginTop = "0px";

        for (let index = 0; index < arr.length; index++) {
            stri += hasAdded ? arr[index] : `<span class='text-secondary'>${arr[index]}</span>`;
            stri += " ";
            hasAdded = !hasAdded;
        }

        var checkExistTwo = setInterval(function() {
            if (document.querySelector('#toggle-footer')) {
                var fragment = document.createDocumentFragment();

                fragment.appendChild(document.querySelector('#toggle-footer'));
                document.getElementById("main-wrap").appendChild(fragment);
                clearInterval(checkExistTwo);
            } else {
                console.log("nope");
            }
        }, 100); // check every 100ms

        var checkExist = setInterval(function() {
            if (document.querySelector('#footer')) {
                var fragment = document.createDocumentFragment();

                fragment.appendChild(document.querySelector('#footer'));
                document.getElementById("main-wrap").appendChild(fragment);
                clearInterval(checkExist);
            } else {
                console.log("nope");
            }
        }, 100); // check every 100ms

        title.innerHTML = stri;
        </script>
    </div>