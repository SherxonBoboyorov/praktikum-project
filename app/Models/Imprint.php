<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imprint extends Model
{
    use HasFactory;

    protected $table = 'imprints';

    protected $fillable = [
        'content_de',
        'content_en',
        'meta_title_de',
        'meta_title_en',
        'meta_description_de',
        'meta_description_en',
    ];
}
