# Laravel AdminLTE - Bootstrap 4 Admin Dashboard

**Laravel AdminLTE** very easy to use, AdminLte is a Bootstrap Admin Panel.
We use This to Make Laravel Admin Panel, And added RTL Support, exist Light and and dark Theme.
also easy to use, for add sidebar menu you can use array list, also use config file to set dark or use RTL

**Preview:**

!["AdminLTE Presentation"](https://github.com/mhk67/LaravelAdminLTE/blob/main/preview_light.png?raw=true "AdminLTE Presentation")

!["AdminLTE Presentation"](https://github.com/mhk67/LaravelAdminLTE/blob/main/preview_rtl_light.png?raw=true "AdminLTE Presentation")

!["AdminLTE Presentation"](https://github.com/mhk67/LaravelAdminLTE/blob/main/preview_dark.png?raw=true "AdminLTE Presentation")


### Install: 

#### Via Composer
```bash
composer require mhk67/admin-lte
```

after install use this command:
```bash
php artisan vendor:publish
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
    'rtl' => true, #false or true
];
```

