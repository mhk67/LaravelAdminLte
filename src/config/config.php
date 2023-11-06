<?php

return [
    'brandName' => 'AdminLTE3',
    'brandLink' => 'AdminLte.dashboard', #route name
    'theme' => 'light', #light or dark
    'rtl' => false, #false or true
    'sidebar_menu'=>[
        [
            'text'=>'Dashboard',
            'link'=>'#',
            'icon'=>'fas fa-tachometer-alt',
            'badge'=>[],
            'sub-menu'=>[
                [
                    'text'=>'Dashboard v1',
                    'link'=>'AdminLte.dashboard',
                    'icon'=>'far fa-circle',
                    'badge'=>[],
                    'sub-menu'=>[],
                ],
                [
                    'text'=>'Dashboard v2',
                    'link'=>'AdminLte.dashboard2',
                    'icon'=>'far fa-circle',
                    'badge'=>[],
                    'sub-menu'=>[],
                ],
            ],
        ],
        [
            'text'=>'Widgets',
            'link'=>'#',
            'icon'=>'fas fa-th',
            'badge'=>['danger'=>'New'],
            'sub-menu'=>[],
        ],
        [
            'text'=>'Tables',
            'link'=>'#',
            'icon'=>'fas fa-table',
            'badge'=>['info'=>'6'],
            'sub-menu'=>[
                [
                    'text'=>'Simple Tables',
                    'link'=>'AdminLte.table.simple',
                    'icon'=>'far fa-circle',
                    'badge'=>[],
                    'sub-menu'=>[],
                ],

            ],
        ],
        [
            'text'=>'Important',
            'link'=>'#',
            'icon'=>'far fa-circle text-danger',
            'badge'=>[],
            'sub-menu'=>[],
        ],
        [
            'text'=>'Warning',
            'link'=>'#',
            'icon'=>'far fa-circle text-warning',
            'badge'=>[],
            'sub-menu'=>[],
        ],

    ]
];
