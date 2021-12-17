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
        array(
          'nombre'=> 'Galletas de Cordero y Arroz Laika By Raush',
          'precio_antes'=> 5.942,
          'precio_ahora'=> 5.732,
          'star' => 'yes'
        ),
        array(
          'nombre'=> 'Salvaje Snacks Efecto Calmante',
          'precio_antes'=> 5.653,
          'precio_ahora'=> 5.453,
          'star' => 'yes'
        ),
        array(
          'nombre'=> 'Salvaje Snacks Pollo, Cordero y Salmon',
          'precio_antes'=> 4.803,
          'precio_ahora'=> 4.633,
          'star' => 'no'
        ),
        array(
          'nombre'=> 'Cazy Hug Comodisimos',
          'precio_antes'=> 238.000,
          'precio_ahora'=> 29.600,
          'star' => 'no'
        ),
        array(
          'nombre'=> 'Bocaditos Con Amor',
          'precio_antes'=> 3.900,
          'precio_ahora'=> 3.315,
          'star' => 'yes'
        ),
        array(
          'nombre'=> 'Hills Canine Treats Chicken',
          'precio_antes'=> 15.120,
          'precio_ahora'=> 14.280,
          'star' => 'yes'
        ),
        array(
          'nombre'=> 'Smartbones',
          'precio_antes'=> 3.311,
          'precio_ahora'=> 3.127,
          'star' => 'no'
        ),
        array(
          'nombre'=> 'Pedigree Mini Biscuit',
          'precio_antes'=> 4.089,
          'precio_ahora'=> 3.854,
          'star' => 'yes'
        ),

      );

    return view('home')
    ->with('products', $products);
})->name('home');

