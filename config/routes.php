<?php
// ROUTE: Association entre
    // chemin
    // controller+fonction
$routes = [
    [
        "path" => "home",
        "controller" => "HomeCtrl::index"
    ],
    [
        "path" => "about",
        "controller" => "AboutCtrl::about"
    ],
    [
        "path" => "dashboard",
        "controller" => "HomeCtrl::dashboard"
    ],
];