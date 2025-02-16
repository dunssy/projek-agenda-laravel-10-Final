<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $data = Kelas::orderBy('id_kelas')->paginate(5);
        return view('kelas.index',['title'=>'Kelola kelas','halaman'=>'Data kelas'])->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create',['title'=>"Kelola kelas",'halaman'=>"Tambah kelas"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|max:200|min:1'
        ],
        [
            'nama.required'=>'nama tidak boleh kosong',
            'nama.max'=>'nama tidak boleh lebih',
            'nama.min'=>'nama tidak boleh kurang'
        ]
    );

    $data = [
        'kelas'=>$request->input('nama')
    ];

    kelas::create($data);
    return redirect('kelas')->with('success','Kelas Berhasil Ditambahkan');
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
          $data = kelas::where('id_kelas',$id)->first();
          return view('kelas.edit',['title'=>'Kelola kelas','halaman'=>'Edit kelas'])->with('data',$data);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate(
            [
                'nama'=>'required|max:20|min:2'
            ],
            [
                'nama.required'=>'Kelastidak boleh kosong',
                'nama.max'=>'melebihi Karakter',
                'nama.min'=>'karakter Kurang'
            ]);
    
            $data = [
            'kelas'=>$request->input('nama')
            ];
    
            kelas::where('id_kelas' , $id )->update($data);
            return redirect('kelas')->with('success','Kelas Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = kelas::where('id_kelas' , $id)->first();
        kelas::where('id_kelas' , $id)->delete();
        return redirect('kelas')->with('success','kelas '.$data->kelas .'Berhasil Dihapus');

    }
}
