<?php

$nav = [
    "General" => [
        [
            "title" => "Master Data",
            "icon" => '<i class="menu-icon tf-icons bx bx-briefcase"></i>',
            "submenus" => [
                [
                    'title' => '',
                    'route' => '',
                    'permissions' => ['']
                ],
            ],
        ],
        
    ],
    "Misc" => [
        [
            "title" => "Manajemen Users",
            "icon" => '<i class="menu-icon tf-icons bx bx-lock-open-alt"></i>',
            "submenus" => [
                [
                    'title' => 'Users',
                    'route' => 'users.index',
                    'permissions' => ['user view']
                ],
                [
                    'title' => 'Roles',
                    'route' => 'roles.index',
                    'permissions' => ['role & permission view']
                ],
            ],
        ],
    ]
];

return $nav;
