<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lokers extends Model
{
    public $timestamps = false;
    use HasFactory;
    public $primaryKey = 'id_locers';
    protected $table = 'locers';
    protected $fillable = [
        'nama_perusahaan','pendidikan','alamat_perusahaan','desc_perusahaan','id_category','penanggung_jawab','email_perusahaan'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'id_category','id_category');
    }
}
