<?php

namespace App\Repositories;

use App\Models\Image;

class ImageRepository {
    protected $image;

    public function __construct(Image $image) {
        $this->image = $image;
    }

    public function getAllImages() {
        return Image::all();
    }

    public function createImage(array $attributes) {
        return Image::create($attributes);
    }
}
