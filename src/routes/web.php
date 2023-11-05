<?php
use \Illuminate\Support\Facades\Route;
use Mhk67\AdminLte\controllers\DashboardController;

Route::name('AdminLte.')->group(function (){
    Route::get('admin',[DashboardController::class,'index'])->name('dashboard');
    Route::get('admin2',[DashboardController::class,'index'])->name('dashboard2');
    Route::get('blank',[DashboardController::class,'index'])->name('blank');
});
