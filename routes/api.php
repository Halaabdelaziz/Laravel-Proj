<?php
use App\Models\User;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\postController as ControllersPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);
 
    $user = User::where('email', $request->email)->first();
 
    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
 
    return $user->createToken($request->device_name)->plainTextToken;
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get posts
Route::get('/posts',[PostController::class,'index'])->middleware('auth:sanctum');
// get post by id
Route::get('/posts/{id}',[PostController::class,'show'])->middleware('auth:sanctum');
//delete post by id
Route::delete('/posts/{id}',[PostController::class,'destroy'])->middleware('auth:sanctum');
// update post
Route::put('/posts/{id}',[PostController::class,'update']);
// store post
Route::post('/posts',[PostController::class,'store'])->middleware('auth:sanctum');
// create post
Route::get('/posts/create',[PostController::class,'create']);

// edit posts
Route::get('/posts/{id}/edit',[PostController::class,'edit']);

// get users
Route::get('/users',[UserController::class,'index']);
// get user by id
Route::get('/users/{id}',[UserController::class,'show']);

//delete user by id
Route::delete('/users/{id}',[UserController::class,'destroy']);
// update user
Route::put('/users/{id}',[UserController::class,'update']);
// store user
Route::post('/users',[UserController::class,'store']);
// edit user
Route::get('/users/{id}/edit',[UserController::class,'edit']);

