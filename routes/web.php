<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

//Show all listings
Route::get('/', [ListingController::class, 'index']);

//Show create listing form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware("auth");

//Store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware("auth");

//Show Edit Form
Route::get("/listings/{listing}/edit", [ListingController::class, "edit"])->middleware("auth");

// Update Listing
Route::put("/listings/{listing}", [ListingController::class, "update"])->middleware("auth");

// Delete Listing
Route::delete("/listings/{listing}", [ListingController::class, "destroy"])->middleware("auth");

// Manage Listings
Route::get("/listings/manage", [ListingController::class, "manage"])->middleware("auth");

//This has to be the last route
//if not it will take anything that looks like listings/..... to listings/{listing}
//'/listings/{listings} is the same thing as '/listings/{id}
//Show single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/Create Form
Route::get("/register", [UserController::class, "create"])->middleware("guest");

// Create New User
Route::post("/users", [UserController::class, "store"])->middleware("guest");

// Log User Out
Route::post("/logout", [UserController::class, "logout"])->middleware("auth");

// Show Login Form
Route::get("/login", [UserController::class, "login"])->name("login")->middleware("guest");

// Log In User
Route::post("/users/authenticate", [UserController::class, "authenticate"])->middleware("guest");