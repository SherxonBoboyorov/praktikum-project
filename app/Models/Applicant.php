<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Applicant extends Model
{
    use HasFactory;

    protected $table = 'applicants';

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
                    public_path() . '/upload/applicant/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/applicant/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $applicant): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $applicant->image)) {
                File::delete(public_path() . $applicant->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/applicant/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/applicant/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $applicant->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/applicant/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/applicant/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
