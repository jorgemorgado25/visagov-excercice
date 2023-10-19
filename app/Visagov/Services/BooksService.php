<?php

namespace App\Visagov\Services;

use Exception;
use App\Models\Book;
use App\Visagov\Dtos\Books\CreateBookDto;
use App\Visagov\Dtos\Books\UpdateBookDto;

Class BooksService {

    public function all()
    {
        return Book::orderBy('id', 'desc')->get();
    }

    public function create(CreateBookDto $createBookDto)
    {
        Book::create([
            'title'  => $createBookDto->title(),
            'author' => $createBookDto->author(),
        ]);
    }

    public function findOneById(int $bookId)
    {
        $book = $this->findBook($bookId);

        if (!$book) {
            throw new Exception("Book id: {$bookId} not found");
        }

        return $book;
    }

    public function update(Int $bookId, UpdateBookDto $updateBookDto)
    {
        $book = $this->findBook($bookId);
        
        if (!$book) {
            throw new Exception("Book id: {$bookId} not found");
        }

        $book->title = $updateBookDto->title();
        $book->author = $updateBookDto->author();
        $book->save();
    }

    public function delete(Int $bookId)
    {
        $book = $this->findBook($bookId);
        
        if (!$book) {
            throw new Exception("Book id: {$bookId} not found");
        }

        $book->delete();
    }

    private function findBook(Int $bookId)
    {
        return Book::where('id', '=', $bookId)->first();
    }
}