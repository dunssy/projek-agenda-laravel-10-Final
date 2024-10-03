<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Mapel::orderBy('id_mapel','asc')->paginate(4);
        return view('mapel.index',['title'=>"Kelola Mapel",'halaman'=>'Data Mapel'])->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view('mapel.create',['title'=>"Kelola Mapel",'halaman'=>"Tambah Mapel"]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
        [
            'nama'=>'required|max:200|min:3'
        ],
        [
            'nama.required'=>'nama tidak boleh kosong',
            'nama.max'=>'nama tidak boleh lebih',
            'nama.min'=>'nama tidak boleh kurang'
        ]);

        $data = [
        'mapel'=>$request->input('nama')
        ];

        Mapel::create($data);
        return redirect('mapel')->with('success','Mapel');
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
        //
        $data = Mapel::where('id_mapel',$id)->first();
        return view('mapel.edit',['title'=>'Kelola Mapel','halaman'=>'Edit Mapel'])->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        //
        //
        $request->validate(
            [
                'nama'=>'required|max:300|min:3'
            ],
            [
                'nama.required'=>'nama tidak boleh kosong',
                'nama.max'=>'nama tidak boleh lebih',
                'nama.min'=>'nama tidak boleh kurang'
            ]);
    
            $data = [
            'mapel'=>$request->input('nama')
            ];
    
            Mapel::where('id_mapel' , $id )->update($data);
            return redirect('mapel')->with('info','Mapel Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Mapel::where('id_mapel' , $id)->first();
        Mapel::where('id_mapel' , $id)->delete();
        return redirect('mapel')->with('warning','Mapel '.$data->mapel);
    }
}
