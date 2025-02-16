<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $search = $request->input('cari');
        if(!empty($search)){
            // Jika kolom pencarian tidak kosong tampilkan data 
            $data = User::where('username','like','%'.$search.'%')->orWhere('nip','like','%' . $search . '%')->orWhere('name','like','%' . $search . '%')->paginate(1);
        }else{
        //jika kolom pencarian kosong tampilkan data
        $data = User::orderBy('id_user','desc')->paginate(5);
        }
        
        return view('guru.index',['title'=>'Kelola Guru','halaman'=>'Data Guru'])->with('data',$data);

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
     
        $request->validate([
            'namaguru'=>'required',
            'nomorguru'=>'required|numeric|min:3',
            'jkguru'=>'required',
            'alamatguru'=>'required',
            'telponguru'=>'required|numeric|min:3',
            'username'=>'nullable',
            'passguru'=>'required',
            'tempat'=>'required',
            'tanggal'=>'required',
            'agamaguru'=>'required',
            'emailguru'=>'required',
            'fotoguru'=>'required',
            'level'=>'required',
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
            'fotoguru.required'=>'Foto Harus di isi',
            'level.required'=>'Pilih Level',
            'username.required'=>'Username Wajib diisi',
            'passguru.required'=>'Password Wajib diisi'

             
        ]
        );
        // Upload foto kedalam sebuah Folder didalam Public bernama foto
        $foto = $request->file('fotoguru');
        $foto_ekstensi = $foto->extension();
        $fotoNama = date('Ymhs') . ".". $foto_ekstensi;
        $foto->move(public_path('foto') , $fotoNama);
        // Hashing password
        $password = $request->input('passguru');
        $hashedPassword = Hash::make($password);
        // MENGIRIM SEBUAH DATA YG TELAH SUDAH TERVALIDASI KEDALAM DATABASE
       $data = 
       [
        'name' => $request->input('namaguru'),
        'nip' => $request->input('nomorguru'),
        'kelamin' => $request->input('jkguru'),
        'alamat'=>$request->input('alamatguru'),
        'telp'=>$request->input('telponguru'),
        'username'=> $request->input('username'),
        'password'=>$hashedPassword,
        'tempat'=>$request->input('tempat'),
        'tgl'=>$request->input('tanggal'),
        'agama'=> $request->input('agamaguru'),
        'email'=> $request->input('emailguru'),
        'level'=> $request->input('level'),
        'foto' => $fotoNama,
       ];
    //  fungsi insert pada laravel
       User::create($data);
    // Redirect ke sebuah halaman utama guru yaitu pada pada folder guru di file index
       return redirect('guru')->with('success','Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    
    public function edit(string $id)
    {
        $data = User::where('id_user',$id)->first();
        return view('guru.edit',['title'=>'Kelola Guru','halaman'=>'Edit Guru'])->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
    

        $request->validate([
            'namaguru'=>'required',
            'nomorguru'=>'required|numeric|min:3',
            'jkguru'=>'required',
            'alamatguru'=>'required',
            'telponguru'=>'required|numeric|min:3',
            'username'=>'required',
            'passguru'=>'nullable|min:6',
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
        

             
        ]
        );

    $d = User::findOrFail($id);

    // Cek apakah ada file foto yang diunggah
    if($request->file('fotoguru')){
        // Hapus foto lama jika ada
        if ($d->foto && file_exists(public_path('foto/' . $d->foto))) {
            unlink(public_path('foto/' . $d->foto));
        }

        // Simpan foto baru
        $file = $request->file('fotoguru');
        $fileName =date('Ymhs') .".". $file->extension();
        $file->move(public_path('foto'),$fileName);

        // Update nama foto di database
        $d->foto = $fileName;
    }
        // Hashing password
        $d->password = $request->input('passguru') 
        ? Hash::make($request->input('passguru')) 
        : $d->password;
        // MENGIRIM SEBUAH DATA YG TELAH SUDAH TERVALIDASI KEDALAM DATABASE
        $d->name =  $request->input('namaguru');
        $d->nip = $request->input('nomorguru');
        $d->kelamin = $request->input('jkguru');
        $d->alamat = $request->input('alamatguru');
        $d->username = $request->input('username');
        $d->tempat = $request->input('tempat');
        $d->tgl = $request->input('tanggal');
        $d->agama = $request->input('agamaguru');
        $d->email = $request->input('emailguru');
        $d->level = $request->input('level');
        $d->save();
  
  
       return redirect('guru')->with('success','Berhasil Diubah');
  
    }

        


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::where('id_user' , $id)->first();
        File::delete(public_path('foto').'/'.$data->foto);
        User::where('id_user' , $id)->delete();
        return redirect('guru')->with('success','Nama '.$data->name.'Berhasil Dihapus');
    }
}
   