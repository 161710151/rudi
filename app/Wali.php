<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mahasiswa;
class Wali extends Model
{
     protected $table = 'walis';
    protected $fillable = array('nama','alamat','siswa_id');

    public function mahasiswa() {
		return $this->belongsTo('Mahasiswa', 'siswa_id');
	}
}
