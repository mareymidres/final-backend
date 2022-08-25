<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogsection extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'secondtitle',
        'thirdtitle',
        'description',
        'firstdescription',
        'seconddescription',
        'thirddescription',
        'fourthdescription',
        'fifthtdescription',
        'img',
       

    ];

}
