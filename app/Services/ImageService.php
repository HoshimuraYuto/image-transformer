<?php

namespace App\Services;

use App\Repositories\ImageRepository;

class ImageService {
    protected $imageRepository;

    public function __construct(ImageRepository $imageRepository) {
        $this->imageRepository = $imageRepository;
    }

    public function getAllImages() {
        return $this->imageRepository->getAllImages();
    }

    public function storeImage($image) {
        $path = $this->saveImage($image);
        return $this->imageRepository->createImage(["path" => $path]);
    }

    public function saveImage($image) {
        return $image->store("images", "public");
    }
}
