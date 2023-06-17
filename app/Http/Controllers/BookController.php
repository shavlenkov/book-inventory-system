<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    /**
     * Handle the incoming request
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke()
    {
        $booksQuery = request('search') ? Book::where('title', 'like', '%' . request('search') . '%') : Book::query();
        $books = $booksQuery->simplePaginate(config('app.paginate'), ['*'])->appends(['search' => request('search')]);

        return view('books.index')->with('books', $books);
    }
}
