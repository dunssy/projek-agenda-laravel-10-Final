<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;




    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     */


    protected $primaryKey = 'id_user';

    protected $table = 'users';

    protected $guarded = ['id_user'];
    
    protected $fillable = [
        'name',
        'nip',
        'kelamin',
        'alamat',
        'telp',
        'username',
        'password',
        'tempat',
        'tgl',
        'agama',
        'email',
        'foto', 
        'level'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function mapel(){
        return $this->belongsTo(G_mapel::class,'id_mapel');
    }
    public function jurusan(){
        return $this->belongsTo(G_mapel::class,'id_kelas');
    }
    public function kelas(){
        return $this->belongsTo(G_mapel::class,'id_jurusan');
    }

}
