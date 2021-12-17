<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $products = array (
        array("Galletas de Cordero y Arroz Laika By Raush",5.942,5.732),
        array("Salvaje Snacks Efecto Calmante",5.653,5.453),
        array("Salvaje Snacks Pollo, Cordero y Salmon",4.803,4.633),
        array("Cazy Hug Comodisimos",238.000,229.600),
        array("Bocaditos Con Amor",3.900,3.315),
        array("Hills Canine Treats Chicken",15.120,14.280),
        array("Smartbones",3.311,3.127),
        array("Pedigree Mini Biscuit",4.089,3.854)

      );

    return view('home')
    ->with('products', $products);
})->name('home');

