<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('newcontent', function () {
    echo "Da vao";
});