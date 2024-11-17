<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $table = 'agenda';
    protected $primaryKey = 'id';
    protected $fillable = ['id_g_mapel','id_user','id_mapel','id_kelas','id_jurusan','tgl','jam','materi','absen','keterangan'];


    public function g_mapel(){
        return $this->belongsTo(G_mapel::class,'id');
    }
    public function mapel(){
        return $this->belongsTo(G_mapel::class,'id_mapel');
    }
    
    public function kelas(){
        return $this->belongsTo(G_mapel::class,'id_kelas');
    }

    public function jurusan(){
        return $this->belongsTo(G_mapel::class,'id_jurusan');
    }
}
