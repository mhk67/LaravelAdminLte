<?php

namespace Mhk67\AdminLte\controllers;

use Illuminate\Routing\Route;
use Illuminate\Http\Request;

class DashboardMenuController
{
    private function menu_list()
    {
        return [
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
                        'link'=>'index',
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

        ];
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

    public function get_route()
    {
        dd($this->get_menu());
    }

}
