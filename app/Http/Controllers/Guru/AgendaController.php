<?php

namespace App\Http\Controllers\Guru;
use App\Models\G_mapel;
use App\Models\Agenda;
use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'title'=>'agenda pengajaran',
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
        'title' => 'Buat Jurnal',
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

            'tglan'=>'required',
            'jam'=>'required',
            'materiagenda'=>'required',
            'absensi'=>'required',
            'keterangansiswa'=>'required',
            'fileagenda'=>'required|mimes:pdf,doc,docx,pptx,ppt'
            
        ],
        [ 
            // Alert input
                'tglan.required' => 'Tanggal tidak boleh kosong',
                'jam.required' => 'Jam tidak boleh kosong',
                'materiagenda.required' => 'Materi agenda tidak boleh kosong',
                'absensi.required' => 'Absensi tidak boleh kosong',
                'keterangansiswa.required' => 'Keterangan siswa tidak boleh kosong',
                'fileagenda.required' => 'File agenda tidak boleh kosong',
                'fileagenda.mimes' => 'File agenda harus berupa pdf, doc, pptx, docx' 
        ]);


        $file = $request->file('fileagenda');
        $foto_ekstensi = $file->extension();
        $fileAgenda = date('Ymhs') . "." . $foto_ekstensi;
        $file->move(public_path('dokumen') , $fileAgenda);
        
        $data = [
           'id_g_mapel'=>$request->input('gmapel'),
           'id_user'=>$user,
           'tgl'=>$request->input('tglan'),
           'jam'=>$request->input('jam'),
           'materi'=>$request->input('materiagenda'),
           'absen'=>$request->input('absensi'),
           'keterangan'=>$request->input('keterangansiswa'),
           'file'=> $file
        ];
    
       Agenda::create($data);
       return redirect('agenda/pengajaran')->with('success','Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
   }   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {


        $agenda = Agenda::find($id);

        return view('client.agenda_pengajaran.edit',
         [
            'title' => 'Edit Jurnal',
         ],compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
