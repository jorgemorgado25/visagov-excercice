<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

use App\Visagov\Services\BooksService;
use App\Http\Requests\StoreBookRequest;
use App\Visagov\Dtos\Books\CreateBookDto;
use App\Visagov\Dtos\Books\UpdateBookDto;

class BooksController extends Controller
{
    public function __construct(
        private BooksService $booksService
    ){}

    public function index()
    {
        $books = $this->booksService->all();        
        return view('pages.books.index', compact('books'));
    }

    public function create()
    {
        return view('pages.books.create');
    }

    public function store(StoreBookRequest $request)
    {
        try {
            $createBookDto = new CreateBookDto($request->title, $request->author);
            $this->booksService->create($createBookDto);
            return Redirect::route('books.index')->with('books.feedback-message.created.success', '');
        } catch (\Exception $e) {
            return Redirect::route('books.index')->with('error-message', $e->getMessage());
        }
    }

    public function edit($bookId)
    {
        try {
            $book = $this->booksService->findOneById($bookId);
            return view('pages.books.edit', compact('book'));
        } catch (\Exception $e) {
            return Redirect::route('books.index')->with('error-message', $e->getMessage());
        }
    }

    public function update(StoreBookRequest $request, $bookId)
    {
        try {
            $updateBookDto = new UpdateBookDto($request->title, $request->author);
            $this->booksService->update($bookId, $updateBookDto);
            return Redirect::route('books.index')->with('books.feedback-message.updated.success', '');
        } catch (\Exception $e) {
            return Redirect::route('books.index')->with('error-message', $e->getMessage());
        }
    }

    public function destroy($bookId)
    {
        try {
            $this->booksService->delete($bookId);
            return Redirect::route('books.index')->with('books.feedback-message.deleted.success', '');
        } catch (\Exception $e) {
            return Redirect::route('books.index')->with('error-message', $e->getMessage());
        }
    }
}
