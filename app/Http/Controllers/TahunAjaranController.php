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
            'nama'=>'required',
            'status'=>'required'
        ],
        [
            'nama.required'=>'Field Tidak Boleh Kosong',
            'status.required'=>'Field Tidak Boleh Kosong'
        ]
    );

    $data = [
        'ajaran'=>$request->input('nama'),
        'status'=>$request->input('status')
        ];

    TahunAjaran::create($data);
    return redirect('tahun_ajaran')->with('success','Tahun Ajaran Berhasil Ditambahkan');
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
                'nama'=>'required',
                'status'=>'required'
            ],
            [
                'nama.required'=>'nama tidak boleh kosong',
                'status.required'=>'status tidak boleh kosong'
               
            ]);
    
            $data = [
            'ajaran'=>$request->input('nama'),
            'status'=>$request->input('status')
            ];
    
            TahunAjaran::where('id_ajaran' , $id )->update($data);
            return redirect('tahun_ajaran')->with('success','Tahun ajaran Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //
         $data = TahunAjaran::where('id_ajaran' , $id)->first();
         TahunAjaran::where('id_ajaran' , $id)->delete();
         return redirect('tahun_ajaran')->with('success','Tahun Ajaran '.$data->ajaran .' Berhasil Dihapus');
    }
}
