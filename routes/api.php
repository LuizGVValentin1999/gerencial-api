<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar rotas de API para seu aplicativo. Esses
| as rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| é atribuído ao grupo de middleware "api". Divirta-se construindo sua API!
|
*/
// rotal URLBASE/api/criarTokenTeste


// chamada para criar um token com o usuario de id 1 
Route::get('criarTokenTeste',function(){
    dd('laa'); 
    //criando  o objeto do usuario sem validar login 
    $user = User::find(1);
    $token = $user->createToken('login');
    dd($token->plainTextToken);
});

Route::get('/teste',function(){ 
    dd('vv2aa'); 
    return 'ola'; 
}); 
//chamada de user com necessidade do token 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Autenticação de usuario 
Route::post('auth',[UserController::class,'auth'])->name('auth.user'); 


Route::post('testee', function () {
    return 'aaa';
});