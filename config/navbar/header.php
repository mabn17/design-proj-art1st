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
            "title" => "Hem",
            "class" => 'nav-item',
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om",
            "title" => "Om mig",
            "class" => 'nav-item',
        ],
        [
            "text" => "Projekt",
            "url" => "blogg",
            "title" => "Tidigare Projekt",
            "class" => 'nav-item',
        ],
        // [
        //     "text" => "Kontakta Mig",
        //     "url" => "contact",
        //     "title" => "Tidigare Project",
        //     "class" => 'nav-item',
        // ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
            "class" => 'nav-item',
        ],
    ],
];