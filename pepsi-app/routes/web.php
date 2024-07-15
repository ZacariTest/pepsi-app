<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\NovedadesController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\SobreNosotrosController;
use App\Http\Controllers\OtrosProductosController;
use App\Http\Controllers\AyudaController;
use App\Http\Controllers\RegistroController;


Route::get('/', [InicioController::class, 'index']);
Route::get('/contacto', [ContactoController::class, 'index']);
Route::get('/tienda', [TiendaController::class, 'index']);
Route::get('/signin', [AutenticacionController::class, 'signin']);
Route::get('/welcome', [InicioController::class, 'welcome']);
Route::get('/novedades', [NovedadesController::class, 'index']);
Route::get('/carrito', [CarritoController::class, 'index']);
Route::get('/sobre_nosotros', [SobreNosotrosController::class, 'index']);
Route::get('/otros', [OtrosProductosController::class, 'index']);
Route::get('/ayuda', [AyudaController::class, 'index']);

// Ruta para la página de registro
Route::get('/register', [RegistroController::class, 'index']);

use App\Http\Controllers\Auth\LoginController;

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Ruta para procesar el inicio de sesión
Route::post('/login', [LoginController::class, 'login']);

Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// login

use App\Http\Controllers\AuthController;

Route::get('/signin', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/signin', [AuthController::class, 'login'])->name('login');

// Ruta para cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Registro

use App\Http\Controllers\Auth\RegisterController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

