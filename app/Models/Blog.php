<?php

namespace App\Models;

use App\Models\Blogsection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'img',
        'title',
        'name',
        'categor_id',
        'image',

    ];
    public function category()
    {
        return $this->hasOne(Category::class,'id','categor_id');
    } 
}
