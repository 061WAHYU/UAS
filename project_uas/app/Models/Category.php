<?php

namespace App\Models;

use App\Models\Lokers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    public $primaryKey = 'id_category';
    protected $table = 'categories';
    protected $fillable = [
        'nama_cat'
    ];

    public function locer(){
        return $this->hasMany(Lokers::class, 'id_category','id_category');
    }
}
