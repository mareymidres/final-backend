<?php

namespace App\Models;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfoliocat extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
}
