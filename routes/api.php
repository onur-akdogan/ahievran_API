<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//YemekControllerdaki listele fonksiyonu ile çalışıyoruz
Route::get('/yemek-listele', 'YemekController@listele');

//YemekControllerdaki bugununyemeği fonksiyonu ile çalışıyoruz
Route::get('/bugunun-yemegi', 'YemekController@bugununyemeği');

//DuyuruControllerdaki duyurular fonksiyonu ile çalışıyoruz
Route::get('/duyurular/{id}', 'DuyuruController@duyurular');

//EtkinlikControllerdaki etkinlikler fonksiyonu ile çalışıyoruz
Route::get('/etkinlikler/{id}', 'EtkinlikController@etkinlikler');

//BirimControllerdaki listele fonksiyonu ile çalışıyoruz
Route::get('/birim-listele', 'BirimController@listele');

//ToplulukControllerdaki listele fonksiyonu ile çalışıyoruz
Route::get('/topluluk-listele', 'ToplulukController@listele');

//OtobusSaatleriControllerdaki listele fonksiyonu ile çalışıyoruz
Route::get('/otobus-saatleri-listele', 'OtobusSaatleriController@listele');

//OtobusSaatleriControllerdaki otobusSaatleri fonksiyonu ile çalışıyoruz
Route::get('/en-yakin-otobus', 'OtobusSaatleriController@enyakinOtobus');

//KaliteBildirimControllerdaki listele fonksiyonu ile çalışıyoruz
Route::get('/kalite-bildirim-listele', 'KaliteBildirimController@listele');

//KaliteGondericiControllerdaki kalitebildirim fonksiyonu ile çalışıyoruz
Route::get('/kalite-gonderici-listele', 'KaliteGondericiController@listele');

//KaliteController store fonksiyonu ile çalışıyoruz
//POST
Route::post('/kalite-bildirim-kaydet', 'KaliteController@store');
