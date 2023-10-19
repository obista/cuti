<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Karyawan extends Model
{
    protected $table = 'table_karyawan';
    protected $fillable = ['id_user', 'nama', 'alamat', 'no_telp', 'jabatan'];
// public $timestamps = false;
    public function nama(){
        return $this->hasOne('App\Models\Cuti', 'id_user');
    }
}