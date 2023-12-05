<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etkinlik;
use App\Models\Topluluk;

class EtkinlikController extends Controller
{
    public function index()
    {
        $etkinlikler = Etkinlik::orderBy('adi', 'ASC')->where('silindi_mi', 0)->get();
        return view('pages.etkinlik.etkinlikler', compact('etkinlikler'));
    }
    public function topluluklar()
    {
        $topluluklar = Topluluk::orderBy('adi', 'ASC')->where('silindi_mi', 0)->get();
        return view('pages.etkinlik.etkinlikekle', compact('topluluklar'));
    }
    public function store(Request $request)
    {
        // Dosyayı kaydetme işlemi
        $imageName = time().'.'.$request->fotograf->extension();
        $request->fotograf->move(public_path('images/etkinlik'), $imageName);

        // Etkinlik modeli oluşturma ve veritabanına kaydetme işlemi
        $etkinlik = new Etkinlik();
        $etkinlik->adi = $request->adi;
        $etkinlik->icerik = $request->icerik;
        $etkinlik->fotograf = 'images/etkinlik/'.$imageName; // Yolu veritabanına ekliyoruz.
        $etkinlik->topluluk_id = $request->topluluk_id;
        $etkinlik->silindi_mi = 0;
        $etkinlik->save();
        return response()->json(['success' => 'Başarıyla Eklendi']);
    }
    public function destroy($id)
    {
        //put ile veriyi alıyoruz
        $etkinlikler = Etkinlik::find($id);

        $etkinlikler->silindi_mi = 1;
        $etkinlikler->save();
        return response()->json(['success' => 'Başarıyla Silindi']);
    }
    //seçilen topluluğun etkinliklerini çekiyoruz
    public function etkinlikler($id){
        $etkinlikler = Etkinlik::orderBy('id', 'DESC')->where('silindi_mi', 0)->where('topluluk_id', $id)->get();
        return response()->json($etkinlikler);
    }
}
