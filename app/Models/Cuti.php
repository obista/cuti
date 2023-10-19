<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Cuti extends Model
{
    protected $table = 'table_cuti';
    protected $fillable = ['id_user', 'awal_cuti', 'akhir_cuti', 'keterangan', 'status_1', 'status_2'];
// public $timestamps = false;
}