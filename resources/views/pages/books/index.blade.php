@extends('layouts.home-layout')
@section('content')
    <div class="container">

        <h2>{{ __('app.books.title') }}</h2>

        @include('pages.books.feedback-messages')
        
        <a class="btn btn-primary mb-4" href="{{ route('books.create') }}">
            {{ __('app.books.button.create') }}
        </a>

        @if ($books->count() > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('app.books.field.title') }}</th>
                        <th>{{ __('app.books.field.author') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td width="220px">
                                <div class="d-flex justify-content-around">
                                    <div class="mr-2">
                                        <a
                                            class="btn btn-primary"
                                            href="{{ route('books.edit', $book->id) }}"
                                        >
                                            {{ __('app.books.button.update') }}
                                        </a>
                                    </div>
                                    <form
                                        action="{{ route('books.destroy', $book->id) }}"
                                        method="POST"
                                    >
                                        <button class="btn btn-danger">
                                            {{ __('app.books.button.delete') }}
                                        </button>
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-info text-center">
                {{ __('app.books.message.no-books') }}
            </div>
        @endif
    </div>
@endsection