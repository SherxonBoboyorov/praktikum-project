<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protection extends Model
{
    use HasFactory;

    protected $table = 'protections';

    protected $fillable = [
        'content_de',
        'content_en',
        'meta_title_de',
        'meta_title_en',
        'meta_description_de',
        'meta_description_en',
    ];
}
