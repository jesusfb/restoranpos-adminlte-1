<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\PlatilloController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\SalaController;
 
Route::get('/', function () {
    return view('auth/login');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });
 
    Route::controller(CategoriasController::class)->prefix('categorias')->group(function () {
        Route::get('', 'index')->name('categorias');
        Route::get('create', 'create')->name('categorias.create');
        Route::post('store', 'store')->name('categorias.store');
        Route::get('show/{id}', 'show')->name('categorias.show');
        Route::get('edit/{id}', 'edit')->name('categorias.edit');
        Route::put('edit/{id}', 'update')->name('categorias.update');
        Route::delete('destroy/{id}', 'destroy')->name('categorias.destroy');
    });

    Route::controller(ClientesController::class)->prefix('clientes')->group(function () {
        Route::get('', 'index')->name('clientes');
        Route::get('imprimirpdf', 'imprimirpdf')->name('clientes.imprimirpdf');
        Route::get('imprimir', 'imprimir')->name('clientes.imprimir');
        Route::get('create', 'create')->name('clientes.create');
        Route::post('store', 'store')->name('clientes.store');
        Route::get('show/{id}', 'show')->name('clientes.show');
        Route::get('edit/{id}', 'edit')->name('clientes.edit');
        Route::put('edit/{id}', 'update')->name('clientes.update');
        Route::delete('destroy/{id}', 'destroy')->name('clientes.destroy');
    });

    Route::controller(PlatilloController::class)->prefix('platillos')->group(function () {
        Route::get('', 'index')->name('platillos');
        Route::get('index', 'index')->name('platillos.index');
        Route::get('imprimirpdf', 'imprimirpdf')->name('platillos.imprimirpdf');
        Route::get('imprimir', 'imprimir')->name('platillos.imprimir');
        Route::get('create', 'create')->name('platillos.create');
        Route::post('store', 'store')->name('platillos.store');
        Route::get('show/{id}', 'show')->name('platillos.show');
        Route::get('edit/{id}', 'edit')->name('platillos.edit');
        Route::put('edit/{id}', 'update')->name('platillos.update');
        Route::delete('destroy/{id}', 'destroy')->name('platillos.destroy');
    });

    Route::controller(SalaController::class)->prefix('salas')->group(function () {
        Route::get('', 'index')->name('salas');
        Route::get('index', 'index')->name('salas.index');
        Route::get('imprimirpdf', 'imprimirpdf')->name('salas.imprimirpdf');
        Route::get('imprimir', 'imprimir')->name('salas.imprimir');
        Route::get('create', 'create')->name('salas.create');
        Route::post('store', 'store')->name('salas.store');
        Route::get('show/{id}', 'show')->name('salas.show');
        Route::get('edit/{id}', 'edit')->name('salas.edit');
        Route::put('edit/{id}', 'update')->name('salas.update');
        Route::delete('destroy/{id}', 'destroy')->name('salas.destroy');
    });
    //Route::resource('platillos', PlatilloController::class);
    

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});