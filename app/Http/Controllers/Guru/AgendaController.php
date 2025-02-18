<?php

namespace App\Http\Controllers\Guru;
use App\Models\G_mapel;
use App\Models\Agenda;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File as FacadesFile;
use PhpParser\Node\Expr\Cast\String_;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
       
        $data = G_mapel::with('mapel', 'kelas', 'jurusan')->where('id_user', Auth::id())->get();
        $agenda = Agenda::with('g_mapel')->where('id_user', Auth::id())->paginate(3);
        return view('client.agenda_pengajaran.view',[
            'title'=>'Agenda Pengajaran',
            'halaman'=>'Data Agenda',
            'data' => $data,
            'agenda' =>$agenda
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
    $data = G_mapel::with('mapel', 'kelas', 'jurusan')->where('id_user', Auth::id())->get();
    return view('client.agenda_pengajaran.create',
     [
        'title' => 'Agenda Pengajaran',
        'halaman' => 'Buat Agenda Pengajaran',
        'data' => $data
    ]);
    }

    /**
     * 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user()->id_user;
    
        $request->validate([
            'tglan' => 'required',
            'jam' => 'required',
            'materiagenda' => 'required',
            'absensi' => 'required',
            'keterangansiswa' => 'required',
            'fileagenda' => 'required|mimes:pdf'
        ], [
            // Alert input
            'tglan.required' => 'Tanggal tidak boleh kosong',
            'jam.required' => 'Jam tidak boleh kosong',
            'materiagenda.required' => 'Materi agenda tidak boleh kosong',
            'absensi.required' => 'Absensi tidak boleh kosong',
            'keterangansiswa.required' => 'Keterangan siswa tidak boleh kosong',
            'fileagenda.required' => 'File agenda tidak boleh kosong',
            'fileagenda.mimes' => 'File agenda harus berupa pdf'
        ]);
    
        // Handle file upload
        if ($request->hasFile('fileagenda')) {
            $file = $request->file('fileagenda');
            $foto_ekstensi = $file->extension();
            $fileAgenda = date('Ymhs') . "." . $foto_ekstensi;
            $file->move(public_path('dokumen'), $fileAgenda);
        } else {
            return redirect()->back()->with('error', 'File agenda tidak ditemukan.');
        }
    
        $data = [
            'id_g_mapel' => $request->input('gmapel'),
            'id_user' => $user,
            'tgl' => $request->input('tglan'),
            'jam' => $request->input('jam'),
            'materi' => $request->input('materiagenda'),
            'absen' => $request->input('absensi'),
            'keterangan' => $request->input('keterangansiswa'),
            'file' => $fileAgenda, // Simpan nama file ke database
        ];
    
        Agenda::create($data);
        return redirect('agenda/pengajaran')->with('success', 'Berhasil');
    }

  

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $agenda = Agenda::with('g_mapel')->where('id', $id)->first();
        $data = G_mapel::with('mapel', 'kelas', 'jurusan')->where('id_user', Auth::id())->get();

        return view('client.agenda_pengajaran.edit',
         [
            'title' => 'Agenda Pengajaran',
            'halaman' => 'Edit Agenda Pengajaran',
            'agenda'=>$agenda,'data'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tglan' => 'required',
            'jam' => 'required',
            'materiagenda' => 'required',
            'absensi' => 'required',
            'keterangansiswa' => 'required',
        ], [
            // Alert input
            'tglan.required' => 'Tanggal tidak boleh kosong',
            'jam.required' => 'Jam tidak boleh kosong',
            'materiagenda.required' => 'Materi agenda tidak boleh kosong',
            'absensi.required' => 'Absensi tidak boleh kosong',
            'keterangansiswa.required' => 'Keterangan siswa tidak boleh kosong',
        ]);
        //
        $d = Agenda::findOrFail($id);
            // Cek apakah ada file foto yang diunggah
        if($request->file('fileagenda')){
            // Hapus doumen lama jika ada
            if ($d->file && file_exists(public_path('dokumen/'.$d->file))) {
                unlink(public_path('dokumen/' . $d->file));
            }

            // Simpan dokumen baru
            $file = $request->file('fileagenda');
            $fileName = date('Ymhs') .".". $file->extension();
            $file->move(public_path('dokumen'),$fileName);
            // Update dokumen di database
            $d->file = $fileName;
        }
            $d->tgl = $request->input('tglan');
            $d->jam = $request->input('jam');
            $d->materi = $request->input('materiagenda');
            $d->absen = $request->input('absensi');
            $d->keterangan = $request->input('keterangansiswa');
            $d->save();

        return redirect('agenda/pengajaran/')->with('success','Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Agenda::where('id' , $id)->first();
        File::delete(public_path('dokumen').'/'.$data->file);
        Agenda::where('id' , $id)->delete();
        return redirect('agenda/pengajaran/')->with('success','Berhasil di Hapus');
    }
}
