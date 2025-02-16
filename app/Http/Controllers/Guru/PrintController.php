<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\G_mapel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Import DOMPDF facade;

class PrintController extends Controller
{
    public function generatePdf($id)
    {
        // Ambil user beserta post yang terkait
        $mapel = G_mapel::with('mapel','kelas','jurusan')->find($id);
        $agenda = Agenda::where('id_g_mapel', $id)->get();
        // Kirim data ke view untuk di-render
        $data = [
            'mapel' => $mapel,
            'agenda' => $agenda,
            'image'=>asset('img/logosmkncompreng.png')
            
        ];
        
        // Render view menjadi PDF
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('client.agenda_pengajaran.cetak', $data);
        $pdf->setOptions(['isRemoteEnabled' =>true]);
        // Atau tampilkan langsung di browser
        return $pdf->stream("user-{$id}.pdf");

    }

}
