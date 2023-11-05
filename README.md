# Laravel AdminLTE - Bootstrap 4 Admin Dashboard

**Laravel AdminLTE** very easy to use, AdminLte is a Bootstrap Admin Panel.
We use This to Make Laravel Admin Panel, And added RTL Support, exist Light  and dark Theme.
also easy to use, for add sidebar menu you can use array list, also use config file to set dark or use RTL

**Preview:**

!["AdminLTE Presentation"](https://github.com/mhk67/LaravelAdminLTE/blob/main/preview_light.png?raw=true "AdminLTE Presentation")

!["AdminLTE Presentation"](https://github.com/mhk67/LaravelAdminLTE/blob/main/preview_rtl_light.png?raw=true "AdminLTE Presentation")

!["AdminLTE Presentation"](https://github.com/mhk67/LaravelAdminLTE/blob/main/preview_dark.png?raw=true "AdminLTE Presentation")


### Install: 

#### Via Composer
```bash
composer require mhk67/adminlte:dev-main
```

after install use this command:
```bash
php artisan vendor:publish --provider=Mhk67\AdminLte\AdminLteServiceProvider
```

## config file: 
you can set config on this location:
```bash
config/AdminLte.php
```

```bash
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
            'text'=>'Layout Option',
            'link'=>'#',
            'icon'=>'fas fa-copy',
            'badge'=>['info'=>'6'],
            'sub-menu'=>[
                [
                    'text'=>'Top Navigation',
                    'link'=>'AdminLte.blank',
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
```

