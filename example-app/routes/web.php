<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
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

//Client Routes

Route::prefix('categories')->group(function () {
    //Danh sách chuyên mục 
    Route::get('/', [CategoriesController::class, 'index']);

    //Lấy chi tiết 1 chuyên mục ( Áp dụng show form sửa chuyên mục)
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory']);
    //Xử lý update chuyên mục 
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory']);

    //Hiển thị form add dữ liệu  
    Route::get('/add', [CategoriesController::class, 'addCategory']);

    //Xử lý thêm chuyên mục  
    Route::get('/add',[CategoriesController::class, 'handleAddCategory']);

    //Xóa chuyên mục 
    Route::delete('/delete/{id}',[CategoriesController::class, 'deleteCategory']);
});