<?php

namespace App\Models;  

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class G_mapel extends Model
{
    use HasFactory;
    protected $primaryKey ='id';
    protected $table = 'g_mapel'; 
    protected $fillable = ['id_user','id_mapel','id_kelas','id_jurusan'];   


   
    public function mapel(){
        return $this->belongsTo(Mapel::class,'id_mapel');
    }
    
    
    public function kelas(){
        return $this->belongsTo(Kelas::class,'id_kelas');
    }
    
    public function jurusan(){
        return $this->belongsTo(Jurusan::class,'id_jurusan');
    }
    
}
