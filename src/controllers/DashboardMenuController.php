<?php

namespace Mhk67\AdminLte\controllers;

use Illuminate\Routing\Route;
use Illuminate\Http\Request;

class DashboardMenuController
{
    private function menu_list()
    {
        return config('AdminLte.sidebar_menu');
    }
    private function check_menu_open($menu)
    {
        $active=false;
        foreach ($menu as $key=>$item) {
            $current_route_name=\Request::route()->getName();
            if (count($item['sub-menu'])){
                $result = $this->check_menu_open($item['sub-menu']);
                $menu[$key]['sub-menu']=$result['menu'];
                $menu[$key]['active']=$result['active'];
            }else{
                if ($item['link']==$current_route_name){
                    $menu[$key]['active']=true;
                    $active=true;
                }else{
                    $menu[$key]['active']=false;
                }
            }
        }
        return ['menu'=>$menu,'active'=>$active];

    }
    public function get_menu()
    {
        $menu=$this->menu_list();
        $result = $this->check_menu_open($menu);
        return $result['menu'];
    }

}
