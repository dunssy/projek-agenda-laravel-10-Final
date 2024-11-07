<?php

namespace App\Http\Controllers\Guru;

use App\Models\User;
use App\Models\G_mapel;
use App\Http\Controllers\Controller;
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
    $data = G_mapel::with('mapel','kelas','jurusan')->paginate(2);
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
        return view('client.mata_pelajaran.create',['title'=>'Tambah Mapel'],compact('mapel','kelas','jurusan'));
    }   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $user = Auth::user()->id_user;
        $request->validate([
            'mapel'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required',
        ]);

        $data = [
            'id_user'=>$user,
            'id_mapel'=>$request->input('mapel'),
            'id_kelas'=>$request->input('kelas'),
            'id_jurusan'=>$request->input('jurusan'),
        ];

        G_mapel::create($data);
        return redirect('agenda/mapel')->with('success', 'Data berhasil ditambahkan!');

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
        $data = G_mapel::where('id',$id)->first();
        return view('client.mata_pelajaran.edit',['title'=>'Edit Mapel'],compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
