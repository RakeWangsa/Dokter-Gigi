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
    




















    public function homeAdmin()
    {
        $pesanan = DB::table('pesanan')
        ->where('status','Belum Diproses')
        ->select('*')
        ->get();
        $pesanan2 = DB::table('pesanan')
        ->whereNot('status','Belum Diproses')
        ->select('*')
        ->get();
        return view('admin.home', [
            'title' => 'Sewa Supir - Home (Admin)',
            'active' => 'home',
            'pesanan' => $pesanan,
            'pesanan2' => $pesanan2,
        ]);
    }

    public function logActivity()
    {
        $logActivity = DB::table('logActivity')
        ->select('*')
        ->get();
        return view('admin.logActivity', [
            'title' => 'Sewa Supir - Log Activity',
            'active' => 'home',
            'logActivity' => $logActivity,
        ]);
    }

    public function sewa()
    {
        return view('user.sewa', [
            'title' => 'Sewa Supir - Buat Pesanan',
            'active' => 'pesanan',
        ]);
    }

    public function pesananSaya()
    {
        $email=session('email');
        $id = DB::table('users')
        ->where('email',$email)
        ->pluck('id')
        ->first();
        $pesanan = DB::table('pesanan')
        ->where('id_pemesan',$id)
        ->where('status','Belum Diproses')
        ->select('*')
        ->get();
        $pesanan2 = DB::table('pesanan')
        ->where('id_pemesan',$id)
        ->whereNot('status','Belum Diproses')
        ->select('*')
        ->get();
        return view('user.pesananSaya', [
            'title' => 'Sewa Supir - Pesanan Saya',
            'active' => 'pesanan',
            'pesanan' => $pesanan,
            'pesanan2' => $pesanan2,
        ]);
    }

    public function sewaSubmit(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi ',
            'kendaraan.required' => 'Pilih Jenis Kendaraan!',
            'kendaraan.not_in' => 'Pilih Jenis Kendaraan!',
            'jenis.required' => 'Pilih Jenis Jasa!',
            'jenis.not_in' => 'Pilih Jenis Jasa!',
        ];
        $this->validate($request, [
        'kendaraan' => ['required', Rule::notIn(['Pilih Jenis Kendaraan!'])],
        'jenis' => ['required', Rule::notIn(['Pilih Jenis Jasa!'])],
        ], $messages);

        $skrg = Carbon::now()->addHours(7);
        $email=session('email');
        $id = DB::table('users')
        ->where('email',$email)
        ->pluck('id')
        ->first();
        $waktu = date('Y-m-d H:i:s', strtotime($request->waktu));
        $tanggal_pulang = date('Y-m-d H:i:s', strtotime($request->tanggal_pulang));
        
        if($request->jenis=='Pulang-Pergi'){
            Pesanan::insert([
                'nama' => $request->nama,
                'id_pemesan' => $id,
                'kontak' => $request->kontak,
                'lokasi' => $request->lokasi,
                'tujuan' => $request->tujuan,
                'waktu' => $waktu,
                'kendaraan' => $request->kendaraan,
                'jenis' => $request->jenis,
                'tanggal_pulang' => $tanggal_pulang,
                'keterangan' => $request->keterangan,
                'status' => 'Belum Diproses',
            ]);
        }else{
            Pesanan::insert([
                'nama' => $request->nama,
                'id_pemesan' => $id,
                'kontak' => $request->kontak,
                'lokasi' => $request->lokasi,
                'tujuan' => $request->tujuan,
                'waktu' => $waktu,
                'kendaraan' => $request->kendaraan,
                'jenis' => $request->jenis,
                'keterangan' => $request->keterangan,
                'status' => 'Belum Diproses',
            ]);
        }
        $id_pesanan = DB::table('pesanan')
        ->where('id_pemesan',$id)
        ->orderBy('id','desc')
        ->pluck('id')
        ->first();
        LogActivity::insert([
            'id_pesanan' => $id_pesanan,
            'activity' => 'Membuat Pesanan',
            'nama' => $request->nama,
            'id_pemesan' => $id,
            'kontak' => $request->kontak,
            'lokasi' => $request->lokasi,
            'tujuan' => $request->tujuan,
            'waktu' => $waktu,
            'kendaraan' => $request->kendaraan,
            'jenis' => $request->jenis,
            'tanggal_pulang' => $tanggal_pulang,
            'keterangan' => $request->keterangan,
            'status' => 'Belum Diproses',
            'waktusubmit' => $skrg
        ]);
        
        return redirect('/pesananSaya')->with('success','Berhasil melakukan pemesanan');
    }

    public function editPesanan($id)
    {
        $id = base64_decode($id);
        $pesanan = DB::table('pesanan')
        ->where('id',$id)
        ->select('*')
        ->get();

        return view('user.sewa', [
            'title' => 'Sewa Supir - Edit Pesanan',
            'active' => 'pesanan',
            'pesanan' => $pesanan,
            'id' => $id,
        ]);
    }

    public function editPesananSubmit($id, Request $request)
    {
        $skrg = Carbon::now()->addHours(7);
        $id = base64_decode($id);
        $email=session('email');
        $id_pemesan = DB::table('users')
        ->where('email',$email)
        ->pluck('id')
        ->first();
        $waktu = date('Y-m-d H:i:s', strtotime($request->waktu));
        $tanggal_pulang = date('Y-m-d H:i:s', strtotime($request->tanggal_pulang));
        $pesananSebelum = DB::table('pesanan')
        ->where('id',$id)
        ->select('*')
        ->get();
        $pesanan = Pesanan::findOrFail($id);
        
        if($request->jenis=='Pulang-Pergi'){
            $pesanan->nama = $request->nama;
            $pesanan->kontak = $request->kontak;
            $pesanan->lokasi = $request->lokasi;
            $pesanan->tujuan = $request->tujuan;
            $pesanan->waktu = $waktu;
            $pesanan->kendaraan = $request->kendaraan;
            $pesanan->jenis = $request->jenis;
            $pesanan->tanggal_pulang = $tanggal_pulang;
            $pesanan->keterangan = $request->keterangan;
            $pesanan->update();
        }else{
            $pesanan->nama = $request->nama;
            $pesanan->kontak = $request->kontak;
            $pesanan->lokasi = $request->lokasi;
            $pesanan->tujuan = $request->tujuan;
            $pesanan->waktu = $waktu;
            $pesanan->kendaraan = $request->kendaraan;
            $pesanan->jenis = $request->jenis;
            $pesanan->tanggal_pulang = NULL;
            $pesanan->keterangan = $request->keterangan;
            $pesanan->update();
        }
        
        LogActivity::insert([
            'id_pesanan' => $id,
            'waktusubmit' => $skrg,
            'activity' => 'Mengedit Pesanan',
            'nama' => $pesananSebelum[0]->nama,
            'id_pemesan' => $id_pemesan,
            'kontak' => $pesananSebelum[0]->kontak,
            'lokasi' => $pesananSebelum[0]->lokasi,
            'tujuan' => $pesananSebelum[0]->tujuan,
            'waktu' => $pesananSebelum[0]->waktu,
            'kendaraan' => $pesananSebelum[0]->kendaraan,
            'jenis' => $pesananSebelum[0]->jenis,
            'tanggal_pulang' => $pesananSebelum[0]->tanggal_pulang,
            'keterangan' => $pesananSebelum[0]->keterangan,
            'status' => 'Belum Diproses',

            'nama2' => $request->nama,
            'kontak2' => $request->kontak,
            'lokasi2' => $request->lokasi,
            'tujuan2' => $request->tujuan,
            'waktu2' => $waktu,
            'kendaraan2' => $request->kendaraan,
            'jenis2' => $request->jenis,
            'tanggal_pulang2' => $tanggal_pulang,
            'keterangan2' => $request->keterangan,
            'status2' => 'Belum Diproses',
        ]);
        return redirect('/pesananSaya')->with('success','Berhasil mengedit pemesanan');
    }

    public function hapusPesanan($id)
    {
        $skrg = Carbon::now()->addHours(7);
        $email=session('email');
        $role = DB::table('users')
        ->where('email', $email)
        ->pluck('role')
        ->first();
        $id = base64_decode($id);

        $pesanan = DB::table('pesanan')
        ->where('id',$id)
        ->select('*')
        ->get();

        LogActivity::insert([
            'id_pesanan' => $id,
            'activity' => 'Menghapus Pesanan',
            'nama' => $pesanan[0]->nama,
            'id_pemesan' => $id,
            'kontak' => $pesanan[0]->kontak,
            'lokasi' => $pesanan[0]->lokasi,
            'tujuan' => $pesanan[0]->tujuan,
            'waktu' => $pesanan[0]->waktu,
            'kendaraan' => $pesanan[0]->kendaraan,
            'jenis' => $pesanan[0]->jenis,
            'tanggal_pulang' => $pesanan[0]->tanggal_pulang,
            'keterangan' => $pesanan[0]->keterangan,
            'status' => 'Belum Diproses',
            'waktusubmit' => $skrg
        ]);
        Pesanan::where('id', $id)->delete();

        if($role=="admin"){
            return redirect('/home/admin')->with('success','Berhasil menghapus pesanan');
        }else{
            return redirect('/pesananSaya')->with('success','Berhasil menghapus pesanan');
        }
    }

    public function prosesPesanan($id)
    {
        $id = base64_decode($id);
        $pesanan = DB::table('pesanan')
        ->where('id',$id)
        ->select('*')
        ->get();
        return view('admin.prosesPesanan', [
            'title' => 'Sewa Supir - Proses Pesanan',
            'active' => 'home',
            'pesanan' => $pesanan,
            'id' => $id,
        ]);
    }

    public function prosesPesananSubmit($id, Request $request)
    {
        $messages = [
                'required' => ':attribute wajib diisi ',
                'status.required' => 'Pilih Jenis status!',
                'status.not_in' => 'Pilih Jenis status!',
            ];
        $this->validate($request, [
        'status' => ['required', Rule::notIn(['Pilih Status!'])],
        ], $messages);

        $id = base64_decode($id);
        $pesanan = Pesanan::find($id);
        $pesanan->status = $request->status;
        $pesanan->supir = $request->supir;
        $pesanan->kontaksupir = $request->kontaksupir;
        $pesanan->harga = $request->harga;
        $pesanan->keterangan2 = $request->keterangan2;
        $pesanan->save();
        return redirect('/home/admin')->with('success','Berhasil memproses pesanan');
    }

    public function statusDiterima($id)
    {
        $id = base64_decode($id);
        $pesanan = Pesanan::find($id);
        $pesanan->status = 'Diterima';
        $pesanan->save();
        return redirect('/home/admin')->with('success','Berhasil mengupdate status');
    }

    public function statusDitolak($id)
    {
        $id = base64_decode($id);
        $pesanan = Pesanan::find($id);
        $pesanan->status = 'Ditolak';
        $pesanan->save();
        return redirect('/home/admin')->with('success','Berhasil mengupdate status');
    }
}
