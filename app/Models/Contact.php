<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'image',
        'title_de',
        'title_em',
        'job_de',
        'job_en',
        'content_de',
        'content_en',
        'email',
        'number'
    ];


    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/contact/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/contact/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $contact): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $contact->image)) {
                File::delete(public_path() . $contact->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/contact/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/contact/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $contact->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/contact/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/contact/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }


}
