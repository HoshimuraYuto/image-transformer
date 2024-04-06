<?php

namespace App\Services;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image as InterventionImage;

class ApiImageService {
    public function loadImage(Image $image) {
        $imagePath = Storage::path("public/" .  $image->path);
        return InterventionImage::read($imagePath);
    }

    public function transformImage($image, Request $request) {
        $transformations = [
            'brightness',
            'contrast',
            'blur',
        ];

        foreach ($transformations as $key) {
            if ($request->query($key)) {
                $image->$key($request->query($key));
            }
        }

        return $image;
    }

    public function getImageMimeType($image) {
        return $image->exif()->get('FILE')["MimeType"];
    }
}
