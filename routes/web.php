<?php

use App\Livewire\AboutUs;
use App\Livewire\Careers;
use App\Livewire\Dashboard;
use App\Livewire\Markets;
use App\Livewire\Projects;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('/who-we-are', function () {
//     return view('about-us');
// });

// Route::get('/projects', function () {
//     return view('projects');
// });

// Route::get('/markets', function () {
//     return view('markets');
// });

// Route::get('/careers', function () {
//     return view('careers');
// });

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/who-we-are', AboutUs::class)->name('about-us');
Route::get('/projects', Projects::class)->name('projects');
Route::get('/markets', Markets::class)->name('markets');
Route::get('/careers', Careers::class)->name('careers');

//

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Route::get('/login', \App\Livewire\Login::class)->name('login'); // Use your Livewire component for login

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
