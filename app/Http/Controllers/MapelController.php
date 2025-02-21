<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;
class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Cari data
        $search = $request->input('cari');
        // Jika kolom pencarian tidak kosong
        if(!empty($search)){
            // Cari data berdasarkan kolom pencarian
            $data = Mapel::where('mapel','like','%'.$search.'%')->paginate(1);
        }else{
            // Jika kolom pencarian kosong tampilkan semua data
            $data = Mapel::orderBy('id_mapel')->paginate(8);
        }
        // Tampilkan data ke halaman index
        return view('mapel.index',['title'=>"Kelola Mapel",'halaman'=>'Data Mapel'])->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tampilkan halaman tambah mapel 
     return view('mapel.create',['title'=>"Kelola Mapel",'halaman'=>"Tambah Mapel"]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data Berdasarkan inputan
        $request->validate(
        [
            'nama'=>'required|max:200|min:3'
        ],
        [
            
            'nama.required'=>'nama tidak boleh kosong',
            'nama.max'=>'nama tidak boleh lebih',
            'nama.min'=>'nama tidak boleh kurang'
        ]);
        // Menyimpan data yang di inputkan
        $data = [
        'mapel'=>$request->input('nama')
        ];
        // Menyimpan data ke database 
        Mapel::create($data);
        return redirect('mapel')->with('success','Berhasil Di Tambahkan ');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Menampilkan halaman edit mapel
        $data = Mapel::where('id_mapel',$id)->first();
        return view('mapel.edit',['title'=>'Kelola Mapel','halaman'=>'Edit Mapel'])->with('data',$data);
    }

    
    public function update(Request $request, string $id)
    {

        // Validasi data yang di inputkan
        $request->validate(
            [
            //  
                'nama'=>'required|max:300|min:3'
            ],
            [
                'nama.required'=>'nama tidak boleh kosong',
                'nama.max'=>'nama tidak boleh lebih',
                'nama.min'=>'nama tidak boleh kurang'
            ]);
        // Menyimpan data yang di inputkan
            $data = [
            'mapel'=>$request->input('nama')
            ];
        // Menyimpan data ke database
            Mapel::where('id_mapel' , $id )->update($data);
            return redirect('mapel')->with('success','Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Mapel::where('id_mapel' , $id)->first();
        Mapel::where('id_mapel' , $id)->delete();
        return redirect('mapel')->with('success','Berhasil Di Hapus');
    }
}
