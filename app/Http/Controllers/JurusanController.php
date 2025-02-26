<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('cari');
        if(!empty($search)){
            $data = Jurusan::where('jurusan','like','%'.$search.'%')->paginate(1);
        }else{
            $data =  Jurusan::orderBy('id_jurusan')->paginate(5);
        }

        return view('jurusan.index',['title'=>'Kelola Jurusan','halaman'=>'Data Jurusan'])->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurusan.create',['title'=>"Kelola Mapel",'halaman'=>"Tambah Jurusan"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|max:200|min:2|unique:jurusan,jurusan'
        ],
        [
            'unique'=>'data sudah ada',
            'nama.required'=>'nama tidak boleh kosong',
            'nama.max'=>'nama tidak boleh lebih',
            'nama.min'=>'nama tidak boleh kurang'
        ]
    );

    $data = [
        'jurusan'=>$request->input('nama')
        ];

    Jurusan::create($data);
    return redirect('jurusan')->with('success','Jurusan Berhasil Ditambahkan');
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
          $data = jurusan::where('id_jurusan',$id)->first();
          return view('jurusan.edit',['title'=>'Kelola Jurusan','halaman'=>'Edit Jurusan'])->with('data',$data);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate(
            [
                'nama'=>'required|max:300|min:2|unique:jurusan,jurusan'
            ],
            [
                'unique'=>'Jurusan sudah ada',
                'nama.required'=>'nama tidak boleh kosong',
                'nama.max'=>'nama tidak boleh lebih',
                'nama.min'=>'nama tidak boleh kurang'
            ]);
    
            $data = [
            'jurusan'=>$request->input('nama')
            ];
    
            Jurusan::where('id_jurusan' , $id )->update($data);
            return redirect('jurusan')->with('success','Jurusan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Jurusan::where('id_jurusan' , $id)->first();
        Jurusan::where('id_jurusan' , $id)->delete();
        return redirect('jurusan')->with('success','Jurusan '.$data->jurusan.' Berhasil Dihapus');

    }
}
