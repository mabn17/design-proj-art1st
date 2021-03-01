<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "menu-nav",
 
    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Index",
            "class" => 'nav-item',
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om",
            "class" => 'nav-item',
        ],
        [
            "text" => "Project",
            "url" => "blogg",
            "title" => "Tidigare Project",
            "class" => 'nav-item',
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
            "class" => 'nav-item',
        ],
    ],
];