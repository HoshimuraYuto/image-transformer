<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Services\ApiImageService;
use Illuminate\Http\Request;

class ImageController extends Controller {
    protected $apiImageService;

    public function __construct(ApiImageService $apiImageService) {
        $this->apiImageService = $apiImageService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Image $image) {
        $loadedImage = $this->apiImageService->loadImage($image);
        $transformedImage = $this->apiImageService->transformImage($loadedImage, $request);
        $mineType = $this->apiImageService->getImageMimeType($transformedImage);

        return
            response($transformedImage->encode())->header('Content-Type', $mineType);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image) {
        //
    }
}
