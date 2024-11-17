<?php

namespace App\Http\Controllers\Guru;
use App\Models\G_mapel;
use App\Models\Agenda;
use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $data = G_mapel::with('mapel','kelas','jurusan')->where('id_user',Auth::id())->get();
        return view('client.agenda_pengajaran.index',['title'=>'agenda pengajaran'],compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 

       

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $user = Auth::user()->id_user;
        $request->validate([
          
        ],[
            'mapel.required'=>'Mapel Harap diisi',
            'kelas.required'=>'Kelas Harap diisi',
            'jurusan.required'=>'Jurusan Harap diisi'
        ]);

        $data = [
            'id_user'=>$user,
            'id_g_mapel'=>$request->input('id_g_mapel'),
            'id_mapel'=>$request->input('mapel'),
            'id_kelas'=>$request->input('kelas'),
            'id_jurusan'=>$request->input('jurusan'),
        ];

        Agenda::create($data);
        return redirect('agenda/pengajaran')->with('info', 'Data berhasil Ubah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

           // Menampilkan table dari Mapel
           $data = G_mapel::where($id,'id');
           $agenda = Agenda::with('mapel','jurusan','kelas')->where($id . 'id');
             return view('client.agenda_pengajaran.view' , ['title'=>'Penambahan Jurnal'],compact('data','agenda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
