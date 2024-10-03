<?php

namespace App\Http\Controllers;

use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = TahunAjaran::orderBy('id_ajaran','asc')->paginate(4);
        return view('tahun_ajaran.index',['title'=>"Kelola Ajaran",'halaman'=>'Data Tahun Ajaran'])->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('tahun_ajaran.create',['title'=>"Kelola Ajaran",'halaman'=>"Tambah Tahun Ajaran"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama'=>'required|'
        ],
        [
            'nama.required'=>'Field Tidak Boleh Kosong',
        ]
    );

    $data = [
        'ajaran'=>$request->input('nama')
        ];

    TahunAjaran::create($data);
    return redirect('tahun_ajaran')->with('success','Tahun Ajaran');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
          //
          $data = TahunAjaran::where('id_ajaran',$id)->first();
          return view('tahun_ajaran.edit',['title'=>'Kelola Ajaran','halaman'=>'Edit Tahun Ajaran'])->with('data',$data);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama'=>'required|max:10|min:10'
            ],
            [
                'nama.required'=>'nama tidak boleh kosong',
                'nama.max'=>'nama tidak boleh lebih',
                'nama.min'=>'nama tidak boleh kurang'
            ]);
    
            $data = [
            'ajaran'=>$request->input('nama')
            ];
    
            TahunAjaran::where('id_ajaran' , $id )->update($data);
            return redirect('tahun_ajaran')->with('info','Tahun ajaran Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //
         $data = TahunAjaran::where('id_ajaran' , $id)->first();
         TahunAjaran::where('id_ajaran' , $id)->delete();
         return redirect('tahun_ajaran')->with('warning','Tahun Ajaran '.$data->ajaran);
    }
}
