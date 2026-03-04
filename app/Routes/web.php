<?php

Router::get('/', 'HomeController@index');
Router::get('/about', 'HomeController@about');
Router::get('/contact', 'HomeController@contact');


// Router::get('/mahasiswa', 'MahasiswaController@index');
// Router::get('/mahasiswa/show/{id}', 'MahasiswaController@show');
// Router::post('/mahasiswa/store', 'MahasiswaController@store');