<?php

namespace Anax\View;

use Anax\StyleChooser\StyleChooserController;

$session = $di->get("session");
$activeStyle = $session->get(StyleChooserController::getSessionKey());

echo !$activeStyle;
/**
 * Render a list of blog entries.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

// Prepare classes
$classes[] = "blog-list";
if (isset($class)) {
    $classes[] = $class;
}

// Labels
$readmoreLabel = isset($label["readmore"])
    ? $label["readmore"]
    : t("Read more »");

// Common date format
$dateFormat = isset($dateFormat) ? $dateFormat : "m/d/Y";

$numbers = 1;
$base = "img/projects/project";

?><main class="work">
    <h1 class="lg-heading" style="padding-top: 17px;">
        Mina
        <span class="text-secondary">Projekt</span>
    </h1>
    <h2 class="sm-heading">
        Hobbie projekt...
    </h2>
    
    
        <?php
        if(strpos($activeStyle, 'dark') !== false || !$activeStyle) { ?>
            <div class="projects">
        <?php } else { ?>
            <div class="carousel-wrapper">
            <div class="carousel">
        <?php  }
        ?>
<?php foreach ($toc as $route => $content) :
        $item = getContentForRoute($route);

        list($pubStr, $published) = getPublishedDate($item);
        $publishedFormatted = date($dateFormat, strtotime($published));

        
        $category = isset($item["category"]) ? $item["category"] : null;
        $catString = "";
        foreach ($category as $key => $value) {
            $catString .= $value['key'] . ", ";
        }
    
        $cats = substr_replace($catString, "", -2);

        // Format the content
        $urlToPost = url($route);
        $excerpt = $item["excerpt"];
        
        // Wrap h1 with link to article
        $excerpt = wrapElementContentWithStartEnd(
            $excerpt,
            "h1",
            "<a href=\"$urlToPost\">",
            "</a>",
            1
        );
        ?>
        
        <?php
            if (strpos($activeStyle, 'dark') !== false || !$activeStyle) {
        ?>
        <div class="item item-<?= $numbers ?>">
            <a href="<?= 'image/projects/project' . $numbers . '.jpg' ?>">
                <img src="<?= $base . $numbers . '.jpg' ?>" alt="Project">
            </a>
            <a href="<?= $urlToPost ?>" class="btn-light">
                <i class="fas fa-eye"></i> Läs mer
            </a>
            <a href="#" class="btn-dark">
                <i class="fab fa-github"></i> Github
            </a>
            <p></p>
        </div>
        <?php
        } else { ?>
        <a href="<?= $urlToPost ?>">
        <div class="item hvr carousel__photo <?= $numbers === 1 ? 'initial' : '' ?>">
            <img class="" src="<?= 'image/projects/project' . $numbers . '.jpg' ?>">
            <a href="<?= $urlToPost ?>" class="btn-light" style="margin-top:8px;">
                <i class="fas fa-eye"></i> Läs mer
            </a>
            <a href="#" class="btn-dark">
                <i class="fab fa-github"></i> Github
            </a>
        </div>
        </a>
        <?php } ?>

        <?php $numbers = $numbers + 1; ?>
    <?php endforeach; ?>
    </div>
    <?php if (strpos($activeStyle, 'dark') === false || !$activeStyle) { ?>
    <div class="mt-4">
        <div class="carousel__button--next"></div>
        <div class="carousel__button--prev"></div>
    </div>
</div>
<script>
!(function(d) {
    var itemClassName = "carousel__photo";
    var items = d.getElementsByClassName(itemClassName);
    var totalItems = items.length;
    var slide = 0;
    var moving = true;


    function setInitialClasses() {
        items[0].classList.add("active");
        items[1].classList.add("next");
    }

    function setEventListeners() {
        var next = d.getElementsByClassName('carousel__button--next')[0],
            prev = d.getElementsByClassName('carousel__button--prev')[0];

        next.addEventListener('click', moveNext);
        prev.addEventListener('click', movePrev);
    }

    function moveNext() {
        if (!moving) {
            if (slide === (totalItems - 1)) {
                slide = 0;
            } else {
                slide++;
            }

            moveCarouselTo(slide);
        }
    }

    function movePrev() {
        if (!moving) {
            if (slide === 0) {
                slide = (totalItems - 1);
            } else {
                slide--;
            }

            moveCarouselTo(slide);
        }
    }

    function disableInteraction() {
        moving = true;
        setTimeout(function() {
            moving = false;
        }, 500);
    }

    function moveCarouselTo(slide) {
        if (!moving) {
            disableInteraction();
            var newPrevious = slide - 1,
                newNext = slide + 1,
                oldPrevious = slide - 2,
                oldNext = slide + 2;

            if ((totalItems - 1) > 3) {
                if (newPrevious <= 0) {
                    oldPrevious = (totalItems - 1);
                } else if (newNext >= (totalItems - 1)) {
                    oldNext = 0;
                }
                if (slide === 0) {
                    newPrevious = (totalItems - 1);
                    oldPrevious = (totalItems - 2);
                    oldNext = (slide + 1);
                } else if (slide === (totalItems -1)) {
                    newPrevious = (slide - 1);
                    newNext = 0;
                    oldNext = 1;
                }
                items[oldPrevious].className = itemClassName;
                items[oldNext].className = itemClassName;
                items[newPrevious].className = itemClassName + " prev";
                items[slide].className = itemClassName + " active";
                items[newNext].className = itemClassName + " next";
            }
        }
    }
    function initCarousel() {
        setInitialClasses();
        setEventListeners();
        moving = false;
    }

    initCarousel();
}(document));
</script>
<?php } ?>