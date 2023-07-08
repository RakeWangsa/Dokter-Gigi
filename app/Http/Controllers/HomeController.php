<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\LogActivity;
use App\Models\obat;
use App\Models\janjiTemu;
use App\Models\pembelianObat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home', [
            'title' => 'Dokter Gigi - Home',
            'active' => 'home',
        ]);
    }

    public function janjiTemu()
    {
        if(isset(auth()->user()->email)){
            $email=auth()->user()->email;
            $id_user = DB::table('Users')
                ->where('email', $email)
                ->pluck('id')
                ->first();
            $janjiku = DB::table('janji_temu')
                ->where('id_user', $id_user)
                ->select('*')
                ->get();
            $janji = DB::table('janji_temu')
                ->select('*')
                ->get();
            return view('user.janjiTemu', [
                'title' => 'Dokter Gigi - Janji Temu',
                'active' => 'janji temu',
                'janjiku' => $janjiku,
                'janji' => $janji,
            ]);
        }else{
            $janji = DB::table('janji_temu')
                ->select('*')
                ->get();
            return view('user.janjiTemu', [
                'title' => 'Dokter Gigi - Janji Temu',
                'active' => 'janji temu',
                'janji' => $janji,
            ]);  
        }
    }
    public function buatJanjiTemu()
    {
        $email=auth()->user()->email;
        $info = DB::table('Users')
            ->where('email', $email)
            ->select('*')
            ->get();
        $dokter = DB::table('Users')
            ->where('role', 'dokter')
            ->select('*')
            ->get();
        return view('user.buatJanjiTemu', [
            'title' => 'Dokter Gigi - Buat Janji Temu',
            'active' => 'janji temu',
            'info' => $info,
            'dokter' => $dokter,
        ]);
    }

    public function buatJanjiTemuSubmit(Request $request)
    {
        $email=auth()->user()->email;
        $id_user = DB::table('Users')
            ->where('email', $email)
            ->pluck('id')
            ->first();
        $waktu = Carbon::parse($request->waktu)->format('Y-m-d H:i');
        janjiTemu::insert([
            'id_user' => $id_user,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'nama_dokter' => $request->dokter,
            'waktu'=> $waktu,
        ]);
        return redirect('/JanjiTemu')->with('success','Berhasil membuat janji temu');
    }

    public function tokoObat()
    {
        $obat = DB::table('obat')
            ->select('*')
            ->get();
        return view('user.tokoObat', [
            'title' => 'Dokter Gigi - Toko Obat',
            'active' => 'toko obat',
            'obat' => $obat
        ]);
    }
    public function checkout(Request $request)
    {
        $skrg = Carbon::now()->addHours(7);
        $email=auth()->user()->email;
        $id_user = DB::table('Users')
            ->where('email', $email)
            ->pluck('id')
            ->first();
        $nama = DB::table('Users')
            ->where('email', $email)
            ->pluck('nama')
            ->first();
        $harga_obat = DB::table('obat')
            ->pluck('harga_obat');

        $total_harga_obat1=$harga_obat[0]*$request->obat1;
        $total_harga_obat2=$harga_obat[1]*$request->obat2;
        $total_harga_obat3=$harga_obat[2]*$request->obat3;
        $total_harga_obat4=$harga_obat[3]*$request->obat4;
        $total_harga_obat5=$harga_obat[4]*$request->obat5;
        $total_harga_obat6=$harga_obat[5]*$request->obat6;
        $total_harga_obat7=$harga_obat[6]*$request->obat7;
        $total_harga_obat8=$harga_obat[7]*$request->obat8;
        $total_harga_obat9=$harga_obat[8]*$request->obat9;
        $total_harga_obat10=$harga_obat[9]*$request->obat10;
        $total_harga_obat11=$harga_obat[10]*$request->obat11;
        $total_harga_obat12=$harga_obat[11]*$request->obat12;
        $total_harga=$total_harga_obat1+$total_harga_obat2+$total_harga_obat3+$total_harga_obat4+$total_harga_obat5+$total_harga_obat6+$total_harga_obat7+$total_harga_obat8+$total_harga_obat9+$total_harga_obat10+$total_harga_obat11+$total_harga_obat12;
        

        $nama_obat='';
        if($request->obat1>0){
            $nama_obat.=DB::table('obat')
            ->where('id','1')
            ->pluck('nama_obat')
            ->first().'('.$request->obat1.'), ';
        }
        if($request->obat2>0){
            $nama_obat.=DB::table('obat')
            ->where('id','2')
            ->pluck('nama_obat')
            ->first().'('.$request->obat2.'), ';
        }
        if($request->obat3>0){
            $nama_obat.=DB::table('obat')
            ->where('id','3')
            ->pluck('nama_obat')
            ->first().'('.$request->obat3.'), ';
        }
        if($request->obat4>0){
            $nama_obat.=DB::table('obat')
            ->where('id','4')
            ->pluck('nama_obat')
            ->first().'('.$request->obat4.'), ';
        }
        if($request->obat5>0){
            $nama_obat.=DB::table('obat')
            ->where('id','5')
            ->pluck('nama_obat')
            ->first().'('.$request->obat5.'), ';
        }
        if($request->obat6>0){
            $nama_obat.=DB::table('obat')
            ->where('id','6')
            ->pluck('nama_obat')
            ->first().'('.$request->obat6.'), ';
        }
        if($request->obat7>0){
            $nama_obat.=DB::table('obat')
            ->where('id','7')
            ->pluck('nama_obat')
            ->first().'('.$request->obat7.'), ';
        }
        if($request->obat8>0){
            $nama_obat.=DB::table('obat')
            ->where('id','8')
            ->pluck('nama_obat')
            ->first().'('.$request->obat8.'), ';
        }
        if($request->obat9>0){
            $nama_obat.=DB::table('obat')
            ->where('id','9')
            ->pluck('nama_obat')
            ->first().'('.$request->obat9.'), ';
        }
        if($request->obat10>0){
            $nama_obat.=DB::table('obat')
            ->where('id','10')
            ->pluck('nama_obat')
            ->first().'('.$request->obat10.'), ';
        }
        if($request->obat11>0){
            $nama_obat.=DB::table('obat')
            ->where('id','11')
            ->pluck('nama_obat')
            ->first().'('.$request->obat11.'), ';
        }
        if($request->obat12>0){
            $nama_obat.=DB::table('obat')
            ->where('id','12')
            ->pluck('nama_obat')
            ->first().'('.$request->obat12.'), ';
        }
        $nama_obat = substr($nama_obat, 0, -2);
        pembelianObat::insert([
            'id_user' => $id_user,
            'nama' => $nama,
            'nama_obat' => $nama_obat,
            'total_harga' => $total_harga,
            'waktu'=> $skrg,
        ]);

        $stok_obat1 = DB::table('obat')
        ->where('id', '1')
        ->pluck('stok_obat')
        ->first();
        $sisa_obat1 = $stok_obat1 - $request->obat1;
        obat::where('id', '1')->update([
            "stok_obat"=> $sisa_obat1,
        ]);
        $stok_obat2 = DB::table('obat')
        ->where('id', '2')
        ->pluck('stok_obat')
        ->first();
        $sisa_obat2 = $stok_obat2 - $request->obat2;
        obat::where('id', '2')->update([
            "stok_obat"=> $sisa_obat2,
        ]);
        $stok_obat3 = DB::table('obat')
        ->where('id', '3')
        ->pluck('stok_obat')
        ->first();
        $sisa_obat3 = $stok_obat3 - $request->obat3;
        obat::where('id', '3')->update([
            "stok_obat"=> $sisa_obat3,
        ]);
        $stok_obat4 = DB::table('obat')
        ->where('id', '4')
        ->pluck('stok_obat')
        ->first();
        $sisa_obat4 = $stok_obat4 - $request->obat4;
        obat::where('id', '4')->update([
            "stok_obat"=> $sisa_obat4,
        ]);
        $stok_obat5 = DB::table('obat')
        ->where('id', '5')
        ->pluck('stok_obat')
        ->first();
        $sisa_obat5 = $stok_obat5 - $request->obat5;
        obat::where('id', '5')->update([
            "stok_obat"=> $sisa_obat5,
        ]);
        $stok_obat6 = DB::table('obat')
        ->where('id', '6')
        ->pluck('stok_obat')
        ->first();
        $sisa_obat6 = $stok_obat6 - $request->obat6;
        obat::where('id', '6')->update([
            "stok_obat"=> $sisa_obat6,
        ]);
        $stok_obat7 = DB::table('obat')
        ->where('id', '7')
        ->pluck('stok_obat')
        ->first();
        $sisa_obat7 = $stok_obat7 - $request->obat7;
        obat::where('id', '7')->update([
            "stok_obat"=> $sisa_obat7,
        ]);
        $stok_obat8 = DB::table('obat')
        ->where('id', '8')
        ->pluck('stok_obat')
        ->first();
        $sisa_obat8 = $stok_obat8 - $request->obat8;
        obat::where('id', '8')->update([
            "stok_obat"=> $sisa_obat8,
        ]);
        $stok_obat9 = DB::table('obat')
        ->where('id', '9')
        ->pluck('stok_obat')
        ->first();
        $sisa_obat9 = $stok_obat9 - $request->obat9;
        obat::where('id', '9')->update([
            "stok_obat"=> $sisa_obat9,
        ]);
        $stok_obat10 = DB::table('obat')
        ->where('id', '10')
        ->pluck('stok_obat')
        ->first();
        $sisa_obat10 = $stok_obat10 - $request->obat10;
        obat::where('id', '10')->update([
            "stok_obat"=> $sisa_obat10,
        ]);
        $stok_obat11 = DB::table('obat')
        ->where('id', '11')
        ->pluck('stok_obat')
        ->first();
        $sisa_obat11 = $stok_obat11 - $request->obat11;
        obat::where('id', '11')->update([
            "stok_obat"=> $sisa_obat11,
        ]);
        $stok_obat12 = DB::table('obat')
        ->where('id', '12')
        ->pluck('stok_obat')
        ->first();
        $sisa_obat12 = $stok_obat12 - $request->obat12;
        obat::where('id', '12')->update([
            "stok_obat"=> $sisa_obat12,
        ]);
        return redirect('/History')->with('success','Berhasil membeli obat');
    }

    public function history()
    {
        $email=auth()->user()->email;
        $id_user = DB::table('Users')
            ->where('email', $email)
            ->pluck('id')
            ->first();
        $janjiku = DB::table('janji_temu')
            ->where('id_user', $id_user)
            ->select('*')
            ->get();
        $pembelianku = DB::table('pembelian_obat')
            ->where('id_user', $id_user)
            ->select('*')
            ->get();
        return view('user.history', [
            'title' => 'Dokter Gigi - History',
            'active' => 'history',
            'janjiku' => $janjiku,
            'pembelianku' => $pembelianku
        ]);
    }


    public function tokoObatDokter()
    {
        $obat = DB::table('obat')
            ->select('*')
            ->get();
        return view('dokter.tokoObatDokter', [
            'title' => 'Dokter Gigi - Toko Obat',
            'active' => 'toko obat',
            'obat' => $obat
        ]);
    }

    public function tokoObatEdit(Request $request)
    {
        for ($i = 1; $i <= 12; $i++) {
            obat::where('id', $i)->update([
                'nama_obat' => $request->input('nama' . $i),
                'harga_obat' => $request->input('harga' . $i),
            ]);
        }
    
        return redirect('/Dokter/TokoObat')->with('success', 'Berhasil mengupdate toko obat');
    }

    public function historyDokter()
    {
        $janji = DB::table('janji_temu')
            ->select('*')
            ->get();
        $pembelian = DB::table('pembelian_obat')
            ->select('*')
            ->get();
        return view('dokter.historyDokter', [
            'title' => 'Dokter Gigi - History',
            'active' => 'history',
            'janji' => $janji,
            'pembelian' => $pembelian
        ]);
    }
}
