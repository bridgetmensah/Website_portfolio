<?php
defined('CIPATH') OR exit('No direct script access allowed');

use Base\Route\Route;
/*
| -------------------------------------------------------------------------
| CONSOLE URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions
| that controls cli/console activities. Please make sure route names don't conflict 
| in all the other route files
|
| $route['route-pattern'] = 'controller/method/segment1/segment2/segment3';
|
| A new way to add routes also come in this form
| Route::get('route-pattern', 'module/controller/method/segment1/segment2/segment3');
*/

Route::any('create:jsondb', 'SylynderDb/Console::create_db');

Route::any('add:framework/{name}', 'SylynderDb/Console/add_framework/$1');
