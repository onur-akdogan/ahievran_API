<?php

namespace App\Http\Controllers;

use App\Models\Yemek;
use Illuminate\Http\Request;

class YemekController extends Controller
{
    //index
    public function index()
    {
        //verilerin order by ile sıralanmasını ve 'silindi' bölümünün 0 olmasını istiyoruz
        $yemekler = Yemek::orderBy('id', 'DESC')->where('silindi', 0)->get();
        return view('pages.yemek.yemekler', compact('yemekler'));
    }
    //store
    public function store(Request $request)
    {
        //veriler formdata ile gelir
        $yemekler = new Yemek();
        $yemekler->yemek1 = $request->yemek1;
        $yemekler->yemek2 = $request->yemek2;
        $yemekler->yemek3 = $request->yemek3;
        $yemekler->yemek4 = $request->yemek4;
        $yemekler->tarih = $request->tarih;
        $yemekler->silindi = 0;
        $yemekler->save();
    }
    //destroy
    public function destroy($id)
    {
        //put ile veriyi alıyoruz
        $yemekler = Yemek::find($id);
        $yemekler->silindi = 1;
        $yemekler->save();
        //response ile veri döndereceğiz çünkü ajax ile çalışıyoruz sweatalert ile mesaj göstermek için
        return response()->json(['success' => 'Başarıyla Silindi']);
    }
    public function listele()
    {
        //verilerin order by ile sıralanmasıxnı ve 'silindi' bölümünün 0 olmasını istiyoruz ve bugünden sonraki yemekleri çekiyoruz
        $yemekler = Yemek::orderBy('tarih', 'DESC')->where('silindi', 0)->where('tarih', '>=', date('Y-m-d'))->get();
        return response()->json($yemekler);
    }

    public function bugununyemeği(){
        //bugünün yemeğini çekiyoruz
        $yemekler = Yemek::orderBy('id', 'DESC')->where('silindi', 0)->where('tarih', date('Y-m-d'))->get();
        //api.php deki route ile çalışıyoruz
        return response()->json($yemekler);
    }
}
