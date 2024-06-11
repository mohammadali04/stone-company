<?php

use App\Http\Controllers\back\AdminUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\back\AdminBanerController;
use App\Http\Controllers\back\AdminCategoryController;
use App\Http\Controllers\back\AdminExhibitionController;
use App\Http\Controllers\back\AdminHistoryController;
use App\Http\Controllers\back\AdminProductController;
use App\Http\Controllers\back\AdminProjectController;
use App\Http\Controllers\back\BioManagerController;
use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\CategoryController;
use App\Http\Controllers\front\ExhibitionsController;
use App\Http\Controllers\front\IndexController;
use App\Http\Controllers\front\ProductController;
use App\Http\Controllers\front\ProjectsController;
use App\Http\Controllers\front\SearchController;
use App\Http\Controllers\ProfileController;
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
//     return view('welcome');
// });
Route::prefix('/index')->group(function(){
    Route::get('/index',[IndexController::class,'index'])->name('index.index');
    Route::get('/about-us',[IndexController::class,'aboutUs'])->name('index.about');
});

Route::prefix('search')->group(function(){
    Route::get('do-search',[SearchController::class,'doSearch'])->name('do.search');
    Route::get('display-search',[SearchController::class,'displaySearch'])->name('display.search');
});

Route::prefix('/category')->group(function(){
    Route::get('/index',[CategoryController::class,'index'])->name('category.index');
    Route::get('/show/{category}',[CategoryController::class,'show'])->name('category.show');
});
Route::prefix('/products')->group(function(){
    Route::get('/index',[ProductController::class,'index'])->name('product.index');
    Route::get('/show/{product}',[ProductController::class,'show'])->name('product.show');//برای این دو متد باید تصمیم گیری شود که آیا انجام شود یا نه
});
Route::prefix('/projects')->group(function(){
    Route::get('/index',[ProjectsController::class,'index'])->name('project.index');
    Route::get('/show/{project}',[ProjectsController::class,'show'])->name('project.show');
});
Route::prefix('/exhibitions')->group(function(){
    Route::get('/index',[ExhibitionsController::class,'index'])->name('exhibition.index');
    Route::get('/show/{exhibition}',[ExhibitionsController::class,'show'])->name('exhibition.show');
});
Route::get('admin-home',function(){
    return view('back.content');
})->name('admin.home')->middleware('checkStatus');

Route::prefix('/admincategories')->group(function(){
    Route::get('/index',[AdminCategoryController::class,'index'])->name('admin.category.index');
    Route::get('/create',[AdminCategoryController::class,'create'])->name('admin.category.create');
    Route::get('/edit/{category}',[AdminCategoryController::class,'edit'])->name('admin.category.edit');
    Route::post('/store',[AdminCategoryController::class,'store'])->name('admin.category.store');
    Route::post('/update/{category}',[AdminCategoryController::class,'update'])->name('admin.category.update');
    Route::get('/destroy',[AdminCategoryController::class,'destroy'])->name('admin.category.destroy');
})->middleware('checkStatus');

Route::prefix('/adminproducts')->group(function(){
    Route::get('/index',[AdminProductController::class,'index'])->name('admin.product.index');
    Route::get('/create',[AdminProductController::class,'create'])->name('admin.product.create');
    Route::get('/edit/{product}',[AdminProductController::class,'edit'])->name('admin.product.edit');
    Route::post('/store',[AdminProductController::class,'store'])->name('admin.product.store');
    Route::get('/add_image/{product}',[AdminProductController::class,'addImages'])->name('admin.product.add.image');
    Route::post('/store_image/{product}',[AdminProductController::class,'storeImages'])->name('admin.product.store.image');
    Route::post('/update/{product}',[AdminProductController::class,'update'])->name('admin.product.update');
    Route::get('/destroy',[AdminProductController::class,'destroy'])->name('admin.product.destroy');
})->middleware('checkStatus');

Route::prefix('/adminexhibitions')->group(function(){
    Route::get('/index',[AdminExhibitionController::class,'index'])->name('admin.exhibition.index');
    Route::get('/create',[AdminExhibitionController::class,'create'])->name('admin.exhibition.create');
    Route::get('/edit/{exhibition}',[AdminExhibitionController::class,'edit'])->name('admin.exhibition.edit');
    Route::post('/store',[AdminExhibitionController::class,'store'])->name('admin.exhibition.store');
    Route::get('/add_image/{exhibition}',[AdminExhibitionController::class,'addImages'])->name('admin.exhibition.add.image');
    Route::post('/store_image/{exhibition}',[AdminExhibitionController::class,'storeImages'])->name('admin.exhibition.store.image');
    Route::post('/update/{exhibition}',[AdminExhibitionController::class,'update'])->name('admin.exhibition.update');
    Route::get('/destroy',[AdminExhibitionController::class,'destroy'])->name('admin.exhibition.destroy');
})->middleware('checkStatus');

Route::prefix('/adminprojects')->group(function(){
    Route::get('/index',[AdminProjectController::class,'index'])->name('admin.project.index');
    Route::get('/create',[AdminProjectController::class,'create'])->name('admin.project.create');
    Route::get('/edit/{project}',[AdminProjectController::class,'edit'])->name('admin.project.edit');
    Route::post('/store',[AdminProjectController::class,'store'])->name('admin.project.store');
    Route::get('/add_image/{project}',[AdminProjectController::class,'addImages'])->name('admin.project.add.image');
    Route::post('/store_image/{project}',[AdminProjectController::class,'storeImages'])->name('admin.project.store.image');
    Route::post('/update/{project}',[AdminProjectController::class,'update'])->name('admin.project.update');
    Route::get('/destroy',[AdminProjectController::class,'destroy'])->name('admin.project.destroy');
})->middleware('checkStatus');

Route::prefix('/adminbaners')->group(function(){
    Route::get('/index',[AdminBanerController::class,'index'])->name('admin.baner.index');
    Route::get('/create',[AdminBanerController::class,'create'])->name('admin.baner.create');
    Route::get('/edit/{baner}',[AdminBanerController::class,'edit'])->name('admin.baner.edit');
    Route::post('/store',[AdminBanerController::class,'store'])->name('admin.baner.store');
    Route::post('/update/{baner}',[AdminBanerController::class,'update'])->name('admin.baner.update');
    Route::get('/destroy',[AdminBanerController::class,'destroy'])->name('admin.baner.destroy');
})->middleware('checkStatus');

Route::prefix('/admin/bio-manager')->group(function(){
    Route::get('/edit/{about}',[BioManagerController::class,'edit'])->name('admin.bio.edit');
    Route::post('/update/{about}',[BioManagerController::class,'update'])->name('admin.bio.update');
    Route::get('/managers',[BioManagerController::class,'showManagers'])->name('admin.show.manager');
    Route::get('/add-manager',[BioManagerController::class,'addManager'])->name('admin.create.manager');
    Route::post('/store-manager',[BioManagerController::class,'storeManager'])->name('admin.store.manager');
    Route::get('/edit-manager/{manager}',[BioManagerController::class,'editManager'])->name('admin.edit.manager');
    Route::post('/update-manager/{manager}',[BioManagerController::class,'updateManager'])->name('admin.update.manager');
    Route::get('/destroy-manager',[BioManagerController::class,'destroyManager'])->name('admin.destroy.manager');
})->middleware('checkStatus');

Route::prefix('/admin/history')->group(function (){
    Route::get('/index',[AdminHistoryController::class,'index'])->name('admin.history.index');
    Route::get('/create',[AdminHistoryController::class,'create'])->name('admin.history.create');
    Route::post('/store',[AdminHistoryController::class,'store'])->name('admin.history.store');
    Route::get('/edit/{history}',[AdminHistoryController::class,'edit'])->name('admin.history.edit');
    Route::post('/update/{history}',[AdminHistoryController::class,'update'])->name('admin.history.update');
    Route::get('/destory',[AdminHistoryController::class,'destroy'])->name('admin.history.destroy');
})->middleware('checkStatus');

Route::prefix('admin-user')->group(function(){
    Route::get('/index',[AdminUserController::class,'index'])->name('admin.user.index');
    Route::get('/index/{user}',[AdminUserController::class,'changeStatus'])->name('admin.user.status');
    Route::get('/destroy',[AdminUserController::class,'destroy'])->name('admin.user.destroy');
})->middleware('checkStatus');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web','auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
