<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index',[
        'name' => 'josef', //html wird sofort escapet oder javascript
    ]);
});
// einfaches Routing wie beim MVC Model
Route::get('/hello', function () {
    return 'Hello Mars';
})->name('hello'); // einen Rout einen namen geben geht so;

// Redirection on existing page
Route::get('/hallo', function () {
    return redirect()->route('hello'); // Redirection function wo dich direkt auf die richte Route schickt.
});



//Personalisiertes Routing

/* das ist sehr nützlich wenn wir eine Page haben für einen Benutzer und Ihm eine Personalistierte seinte anbieten wollebn.
die Daten werden aus der Datenbank gehasht und hier übertragen. */
Route::get('/greet/{name}', function ($name){
    return "Hello {$name}! Du bist ein Grüner Herr!";
});

//fallback route
Route::fallback(function () {
    return 'Hey das ist dein Persönlicher fallback.';
});