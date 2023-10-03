<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Employer extends Model
{
    use HasFactory;

    protected $table = 'employers';

    protected $fillable = [
        'image',
        'title_de',
        'title_en',
        'slug_de',
        'slug_en',
        'applicants_de',
        'applicants_en',
        'services_de',
        'services_en',
        'conditions_de',
        'conditions_en',
        'meta_title_de',
        'meta_title_en',
        'meta_description_de',
        'meta_description_en',
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/employer/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/employer/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $employer): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $employer->image)) {
                File::delete(public_path() . $employer->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/employer/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/employer/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $employer->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/employer/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/employer/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
