<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $table = 'agenda';
    protected $primaryKey = 'id';
    protected $fillable = ['id_g_mapel','id_user','tgl','jam','materi','absen','keterangan','file'];


    public function g_mapel(){
        return $this->belongsTo(G_mapel::class,'id_g_mapel');
    } 
    
}
