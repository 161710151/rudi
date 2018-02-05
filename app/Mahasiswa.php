<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Dosen;
use App\Wali;
class Mahasiswa extends Model
{
     protected $table = 'mahasiswas';
    protected $fillable = array('nama','nis','guru_id','kelas_id');

    public function wali() {
		return $this->hasOne('App\Wali', 'siswa_id');
	}
}
