<?php

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    ChamadoController
};

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


Route::delete('/chamados/{id}', [ChamadoController::class, 'delete'])->name('chamados.delete');
Route::get('/chamados', [ChamadoController::class, 'index'])->name('chamados.index');
Route::get('/chamados/create', [ChamadoController::class, 'create'])->name('chamados.create');
Route::post('/chamados', [ChamadoController::class, 'store'])->name('chamados.store');
Route::get('/chamados/{id}', [ChamadoController::class, 'show'])->name('chamados.show');


Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
