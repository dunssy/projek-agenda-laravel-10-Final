<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Menampilkan sebuah data pada table guru dengan   pangination untuk swipe pada table guru di View
        $search = $request->input('search');
        $data = Guru::where('nip', 'like', '%' . $search . '%')->orWhere('nama', 'like', '%' . $search . '%')->get();
        $data = Guru::orderBy('nip','asc')->paginate(5);
        return view('guru.index', ['title'=>'Kelola Guru','halaman'=>'Data Guru'])->with('data',$data,'search',$search);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create',['title'=>'Kelola Guru','halaman'=>'Tambah Guru']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Tampilkan Beberapa Pesan untuk eror di inputan
        Session::flash('nomorguru',$request->nip); 
        Session::flash('namaguru',$request->nama); 
        Session::flash('jkguru',$request->jenis_kelamin); 
        Session::flash('agamaguru',$request->agama); 
        Session::flash('username',$request->username); 
        Session::flash('emailguru',$request->email); 
        Session::flash('level',$request->level); 
        // Membuat sebuah validasi untuk Inputan sebelum di esekusi ke dalam database
        $request->validate(
        [
        // Aturan pada validasi
          'nomorguru'=>'required|numeric',
          'namaguru'=>'required',
          'jkguru'=>'required|in:Pria,Wanita',
          'agamaguru'=>'required',
          'username'=>'required',
          'emailguru'=>'required',
          'level'=>'required|in:guru,admin',
          'fotoguru'=>'required|mimes:jpeg,png,jpg',
          'passguru'=>'required|max:10'
        ],
        [
        // Tampilkan pesan pada inputan eror
            'nomorguru.required'=>'nomor nip tidak boleh kosong',
            'nomorguru.numeric'=>'nomor induk harus menggunakan angka',
            'namaguru.required'=>'Nama tidak boleh kosong',
            'jkguru.required'=>'jenis kelamin tidak boleh kosong',
            'fotoguru.required'=>'Foto tidak boleh kosong',
            'fotoguru.mimes'=>'Format tidak di dukung',
            'passguru.required'=>'Password Tidak Boleh Kosong'
        ]
        );
        // Upload foto kedalam sebuah Folder didalam Public bernama foto
        $foto = $request->file('fotoguru');
        $foto_ekstensi = $foto->extension();
        $fotoNama = date('Ymdhis') . ".". $foto_ekstensi;
        $foto->move(public_path('foto') , $fotoNama);

        // Hashing password
        $password = $request->input('passguru');
        $hashedPassword = Hash::make($password);
        // MENGIRIM SEBUAH DATA YG TELAH SUDAH TERVALIDASI KEDALAM DATABASE
       $data = 
       [
        'nip' => $request->input('nomorguru'),
        'nama' => $request->input('namaguru'),
        'jenis_kelamin' => $request->input('jkguru'),
        'agama'=> $request->input('agamaguru'),
        'username'=> $request->input('username'),
        'email'=> $request->input('emailguru'),
        'level'=> $request->input('level'),
        'foto' => $fotoNama,
        'password'=>$hashedPassword
       ];
    //  fungsi insert pada laravel
       Guru::create($data);
    // Redirect ke sebuah halaman utama guru yaitu pada pada folder guru di file index
       return redirect('guru')->with('success','Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Guru::where('nip' , $id)->first();
        return view('guru.show')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Guru::where('nip',$id)->first();
        return view('guru.edit',['title'=>'Kelola Guru','halaman'=>'Edit Guru'])->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      

        $request->validate(
        [
        
         // Aturan pada validasi
         'nomorguru'=>'numeric',
         'fotoguru'=>'nullable|mimes:jpeg,png,jpg',
         'passguru'=>'max:10'
        ],
        [
          // Tampilkan pesan pada inputan eror
          'nomorguru.numeric'=>'nomor induk harus menggunakan angka',
          'jkguru.required'=>'jenis kelamin tidak boleh kosong',
          'foto.required'=>'Foto Harus di isi',
          'foto.mimes'=>'Format tidak Tersebut tidak di dukung'
         
        ]
        );
        // Hashing password
        $password = $request->input('passguru');
        $hashedPassword = Hash::make($password);

        $data = 
        [
            'nip' => $request->input('nomorguru'),
            'nama' => $request->input('namaguru'),
            'jenis_kelamin' => $request->input('jkguru'),
            'agama'=> $request->input('agamaguru'),
            'username'=> $request->input('username'),
            'email'=> $request->input('emailguru'),
            'level'=> $request->input('level'),
            'password'=>$hashedPassword
        ];

         if($request->hasFile('foto')){
           $request->validate([
           'fotoguru'=>'nullable|image|mimes:jpeg,png,jpg'
           ],
           [
            'fotoguru.mimes'=> 'Foto yang di perbolehkan hanya file JPEG, JPG, dan PNG'
           ]);     
       }

        $foto = $request->file('fotoguru');
        $foto_ekstensi = $foto->extension();
        $fotoNama = date('Ymdhis') . ".". $foto_ekstensi;
        $foto->move(public_path('foto') , $fotoNama);
        $data_foto = Guru::where('nip', $id)->first();
        File::delete(public_path('foto/') . '/' . $data_foto->foto);
    
        $fileFoto = [
            'foto' => $fotoNama
        ];

            Guru::where('nip' , $id )->update($fileFoto,$data);
            return redirect('guru')->with('info','Data berhasil ');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Guru::where('nip' , $id)->first();
        File::delete(public_path('foto').'/'.$data->foto);
        Guru::where('nip' , $id)->delete();
        return redirect('guru')->with('warning','Nama '.$data->nama);
    }
}
