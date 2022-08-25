<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'img',
        'title',
        'name',
        'categor_id',

    ];
    public function portfoliocats()
    {
        return $this->hasOne(Portfoliocat::class,'id','categor_id');
    }
}
