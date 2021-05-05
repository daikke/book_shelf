<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Genre;

class BookController extends Controller
{

    /**
     * @var Genre $genre
     */
    private Genre $genre;

    /**
     * @param \App\Models\Genre $genre
     */
    public function __construct(Genre $genre)
    {
        $this->genre = $genre;
    }

    /**
     * 新規作成画面
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $genres = $this->genre->all();
        return view('book.create', compact('genres'));
    }
}
