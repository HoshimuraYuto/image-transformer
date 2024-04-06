<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Services\ImageService;
use Illuminate\Http\Request;

class ImageController extends Controller {
    protected $imageService;

    public function __construct(ImageService $imageService) {
        $this->imageService = $imageService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index() {
        $images = $this->imageService->getAllImages();

        return view("images.index", compact("images"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view("images.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $this->imageService->storeImage($request->file("image"));

        return redirect()->route('images.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image) {
        //
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
