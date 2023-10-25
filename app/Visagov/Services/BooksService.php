<?php

namespace App\Visagov\Services;

use Exception;
use App\Models\Book;
use App\Visagov\Dtos\Books\CreateBookDto;
use App\Visagov\Dtos\Books\UpdateBookDto;
use Illuminate\Database\Eloquent\Collection;

class BooksService {

    public function all(): Collection
    {
        return Book::orderBy('id', 'desc')->get();
    }

    public function create(CreateBookDto $createBookDto): void
    {
        Book::create([
            'title'  => $createBookDto->title(),
            'author' => $createBookDto->author(),
        ]);
    }

    public function findOneById(int $bookId): Book
    {
        $book = $this->findBook($bookId);

        if (!$book) {
            throw new Exception("Book id: {$bookId} not found");
        }

        return $book;
    }

    public function update(Int $bookId, UpdateBookDto $updateBookDto): void
    {
        $book = $this->findBook($bookId);
        
        if (!$book) {
            throw new Exception("Book id: {$bookId} not found");
        }

        $book->title = $updateBookDto->title();
        $book->author = $updateBookDto->author();
        $book->save();
    }

    public function delete(Int $bookId): void
    {
        $book = $this->findBook($bookId);
        
        if (!$book) {
            throw new Exception("Book id: {$bookId} not found");
        }

        $book->delete();
    }

    private function findBook(Int $bookId): Book | null
    {
        return Book::where('id', '=', $bookId)->first();
    }
}