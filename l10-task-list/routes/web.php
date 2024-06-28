<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello World';
});
// einfaches Routing wie beim MVC Model
Route::get('/hello', function () {
    return 'Hello Mars';
});

//Personalisiertes Routing

/* das ist sehr nützlich wenn wir eine Page haben für einen Benutzer und Ihm eine Personalistierte seinte anbieten wollebn.
die Daten werden aus der Datenbank gehasht und hier übertragen. */
Route::get('/greet/{name}', function ($name){
    return "Hello {$name}! Du bist ein Grüner Herr!";
});