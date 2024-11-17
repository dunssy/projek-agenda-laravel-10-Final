<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminEditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        return view('admin.profile',['halaman'=>'Profile','title'=>'Profile']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $data = User::where('id_user',$id)->first();
        return view('admin.index',['title'=>'Profile','halaman'=>'Settings'])->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
     
        $request->validate([
            'namaguru'=>'required',
            'nomorguru'=>'required|numeric|min:3',
            'jkguru'=>'required',
            'alamatguru'=>'required',
            'telponguru'=>'required|numeric|min:3',
            'username'=>'required',
            'passguru'=>'required',
            'tempat'=>'required',
            'tanggal'=>'required',
            'agamaguru'=>'required',
            'emailguru'=>'required',
            'fotoguru'=>'nullable|mimes:jpg,jpeg,png',
            'level'=>'required'
        ],
        [
            'namaguru.required'=>'Nama tidak boleh kosong',
            'nomorguru.required'=>'Nip tidak boleh kosong',
            'jkguru.required'=>'Pilih jenis kelamin',
            'alamatguru.required'=>'Alamat tidak boleh kosong',
            'telponguru.required'=>'No telephone tidak boleh kosong',
            'teleponguru.numeric'=>'Masukan No Telephone Anda',
            'teleponguru.min'=>'Terlalu sedikit',
            'tempat.required'=>'Tempat tinggal tidak boleh kosong',
            'tanggal.required'=>'Tanggal Lahir tidak boleh kosong',
            'agamaguru.required'=>'Pilih Agama',
            'emailguru.required'=>'Email Harus di isi',
            'fotoguru.mimes'=>'yang anda upload bukan foto',
            'level.required'=>'Pilih Level',
            'username.required'=>'Username Wajib diisi',
            'passguru.required'=>'Password Wajib diisi'

             
        ]
        );

    $d = User::findOrFail($id);

    // Cek apakah ada file foto yang diunggah
    if($request->file('fotoguru')){
        // Hapus foto lama jika ada
        if ($d->foto && file_exists(public_path('foto' . $d->foto))) {
            unlink(public_path('foto' . $d->foto));
        }

        // Simpan foto baru
        $file = $request->file('fotoguru');
        $fileName =date('Ymhs') .'_'. $file->getClientOriginalName();
        $file->move(public_path('foto'),$fileName);

        // Update nama foto di database
        $d->foto = $fileName;
    }
        // Hashing password
            $password = $request->input('passguru');
            $hashedPassword = Hash::make($password);

        // MENGIRIM SEBUAH DATA YG TELAH SUDAH TERVALIDASI KEDALAM DATABASE
        $d->name =  $request->input('namaguru');
        $d->nip = $request->input('nomorguru');
        $d->kelamin = $request->input('jkguru');
        $d->alamat = $request->input('alamatguru');
        $d->username = $request->input('username');
        $d->password = $hashedPassword;
        $d->tempat = $request->input('tempat');
        $d->tgl = $request->input('tanggal');
        $d->agama = $request->input('agamaguru');
        $d->email = $request->input('emailguru');
        $d->level = $request->input('level');
        $d->save();
  
       return redirect('settings')->with('info','Berhasil di');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
