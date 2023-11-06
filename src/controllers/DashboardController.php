<?php

namespace Mhk67\AdminLte\controllers;

use Mhk67\AdminLte\controllers\DashboardMenuController;

class DashboardController
{
    public function index()
    {

//        $menu=(new DashboardMenuController)->get_menu();
//        return view('AdminLte::pages.admin',compact('menu'));
        return view('AdminLte::pages.admin');
    }
    public function table()
    {
        return view('AdminLte::pages.table_simple');
    }

}
