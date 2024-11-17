<?php

namespace App\Http\Controllers\Guru;

use App\Models\User;
use App\Models\G_mapel;
use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MapelGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
    // Memmanggil data dari table relasii S
    $data = G_mapel::with('mapel','kelas','jurusan')->where('id_user', Auth::id())->get();

    return view('client.mata_pelajaran.index',['title'=>'Mapel Guru'],compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $mapel = Mapel::all();
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
       $data = G_mapel::with('mapel','kelas','jurusan')->where('id_user',Auth::id())->get();
        return view('client.mata_pelajaran.create',['title'=>'Jurnal Agenda'],compact('data','mapel','kelas','jurusan'));
    }   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $user = Auth::user()->id_user;
        $request->validate([
        // Memvalidasi Data Pada Form 
            'mapel'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required',
        ],[
        // Mengirim pesan Kepada user Jika User Tidak Mengisi
            'mapel.required'=>'Silahkan pilih Mapel',
            'kelas.required'=>'Silahkan pilih Kelas',
            'jurusan.required'=>'Silahkan pilih Jurusan'
        ]);
        // Memproses Data Yang Sudah Tervalidasi
        $data = [
            'id_user'=>$user,
            'id_mapel'=>$request->input('mapel'),
            'id_kelas'=>$request->input('kelas'),
            'id_jurusan'=>$request->input('jurusan'),
        ];

        G_mapel::create($data);
     
        return redirect('agenda/mapel')->with('success', 'Data berhasil');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {  
        // Menampilkan table dari Mapel
        $mapel = Mapel::all();
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
        $data = G_mapel::with('mapel','kelas','jurusan')->first();
        return view('client.mata_pelajaran.edit',['title'=>'Edit Mapel'],compact('data','mapel','kelas','jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::user()->id_user;
        $request->validate([
            'mapel'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required',
        ],[
            'mapel.required'=>'Mapel Harap diisi',
            'kelas.required'=>'Kelas Harap diisi',
            'jurusan.required'=>'Jurusan Harap diisi'
        ]);

        $data = [
            'id_user'=>$user,
            'id_mapel'=>$request->input('mapel'),
            'id_kelas'=>$request->input('kelas'),
            'id_jurusan'=>$request->input('jurusan'),
        ];

        G_mapel::where('id',$id)->update($data);
        return redirect('agenda/mapel')->with('info', 'Data berhasil');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        G_mapel::where('id' , $id)->delete();
        return redirect('agenda/mapel')->with('warning','Data Telah ');
    }
}
