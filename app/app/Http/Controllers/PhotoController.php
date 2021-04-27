<?php

namespace App\Http\Controllers;


use App\Http\Models\Photo;

class PhotoController extends Controller {

    public function getPhoto() {
        $photos = Photo::getPhoto();
        return response($photos)
            ->header('Content-Type','application/json');
    }


    public function photoDetail($albumId) {
        $photo = Photo::getPhoto($albumId);
        return response($photo)
            ->header('Content-Type', 'application/json');
    }

}
