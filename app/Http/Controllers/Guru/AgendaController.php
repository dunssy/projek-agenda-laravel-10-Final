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

       return view('client.agenda_pengajaran.create',['title'=>'Buat Jurnal']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $g_mapel = G_mapel::where('id');
        $request->validate([
            ''
        ],[

            'id_g_mapel'=>$g_mapel->id,
            'id_user'=>Auth::user()->id_user,
            'id_mapel'=>$g_mapel->id_mapel,
            'id_kelas'=>$g_mapel->kelas,
            'id_jurusan'=>$g_mapel->jurusan,
        ]);
    

       Agenda::create();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $mapel = Mapel::all();
        // $kelas = kelas::all();
        // $jurusan = Jurusan::all();
        $data = [G_mapel::where('id',$id)->with('mapel','jurusan','kelas')];
        return $data;
        // return view('client.agenda_pengajaran.view',['title'=>'Jurnal Ajar'],compact('data','mapel','kelas','jurusan'));
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
