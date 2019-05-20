<?php

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
    $listTable = [
                '1' => [
                        'title' => 'Bàn 1',
                        'schedule' => 
                                    [
                                        0 => ['start'=>'12:00','end' => '14:00'],
                                        1 => ['start' => '14:00','end' => '16:00'],
                                    ]
                    ],
                '2' => [
                    'title' => 'Bàn 2',
                    'schedule' => 
                                [
                                    0 => ['start'=>'08:00','end' => '10:00'],
                                    1 => ['start' => '10:00','end' => '12:00'],
                                ]
                    ],
                ];

    
    return view('welcome',compact('listTable'));
});
