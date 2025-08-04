<?php

$nav = [  
    "Master Beranda" => [
        [
            "title" => "Atur Beranda",
            "icon" => '<i class="menu-icon tf-icons bx bx-home"></i>',
            "route" => 'sections.index',
            "permissions" => ['section view'],
        ],
    ],
    "General" => [
        [
            "title" => "Destinasi",
            "icon" => '<i class="menu-icon tf-icons bx bx-briefcase"></i>',
            "route" => 'destinations.index',
            "permissions" => ['destination view'],
        ],
        [
            "title" => "Paket Wisata",
            "icon" => '<i class="menu-icon tf-icons bx bx-package"></i>',
            "route" => 'packages.index',
            "permissions" => ['package view'],
        ],
        [
            "title" => "Galeri",
            "icon" => '<i class="menu-icon tf-icons bx bx-image"></i>',
            "route" => 'galeries.index',
            "permissions" => ['galery view'],
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
