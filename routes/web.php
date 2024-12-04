<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  
    
    $contatti =[
       ['name' => "Francesco", 'mail' => 'francesco.gmail.com'],
       ['name' => "Giuseppe", 'mail' => 'francesco.gmail.com'],
       ['name' => "Nicola", 'mail' => 'francesco.gmail.com'],
    ];
    
    return view ('welcome' ,['contatti'=>$contatti ]);
})->name('welcome');

Route::get('/prodotti',function(){
    $contatti =[
        ['name' => "Francesco", 'mail' => 'francesco.gmail.com'],
        ['name' => "Giuseppe", 'mail' => 'francesco.gmail.com'],
        ['name' => "Nicola", 'mail' => 'francesco.gmail.com'],
     ];
    return view('prodotti', ['contatti'=>$contatti ]);
})->name('prodotti');
