<?php

Route::get('/', 'MyController@getHome')->name('home');

Route::get('boolean','MyController@getHome')->name('home');

Route::get('boolean/faq','MyController@getFaq')->name('faq');
