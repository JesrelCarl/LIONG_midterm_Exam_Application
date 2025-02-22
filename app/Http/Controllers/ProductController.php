<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = [
            ["title" => "Inception", "director" => "Christopher Nolan", "year" => 2010],
            ["title" => "The Godfather", "director" => "Francis Ford Coppola", "year" => 1972],
            ["title" => "Interstellar", "director" => "Christopher Nolan", "year" => 2014],
            ["title" => "Parasite", "director" => "Bong Joon-ho", "year" => 2019],
            ["title" => "The Dark Knight", "director" => "Christopher Nolan", "year" => 2008],
        ];

        return view('products', compact('movies'));
    }
}
