<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mahasiswa;
class Dosen extends Model
{
    protected $table = 'dosens';
    protected $fillable = array('nama','nidp','alamat','mata_kuliah');

    public function mahasiswa(){
    	return $this->hasmany('App\Mahasiswa','guru_id');
    }
}
