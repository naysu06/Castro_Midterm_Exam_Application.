<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Method to return an array of movies
    public function index()
    {
        $movies = [
            [
                'title' => 'Inception',
                'genre' => 'Sci-Fi',
                'release_year' => 2010,
                'director' => 'Christopher Nolan',
                'price' => 12.99
            ],
            [
                'title' => 'The Dark Knight',
                'genre' => 'Action',
                'release_year' => 2008,
                'director' => 'Christopher Nolan',
                'price' => 10.99
            ],
            [
                'title' => 'Interstellar',
                'genre' => 'Sci-Fi',
                'release_year' => 2014,
                'director' => 'Christopher Nolan',
                'price' => 14.99
            ],
            [
                'title' => 'Parasite',
                'genre' => 'Thriller',
                'release_year' => 2019,
                'director' => 'Bong Joon-ho',
                'price' => 9.99
            ],
            [
                'title' => 'The Godfather',
                'genre' => 'Crime',
                'release_year' => 1972,
                'director' => 'Francis Ford Coppola',
                'price' => 11.99
            ],
            [
                'title' => 'Pulp Fiction',
                'genre' => 'Crime',
                'release_year' => 1994,
                'director' => 'Quentin Tarantino',
                'price' => 10.49
            ]
        ];

        return view('products', compact('movies'));
    }
}
