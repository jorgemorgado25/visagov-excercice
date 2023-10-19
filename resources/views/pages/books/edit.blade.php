@extends('layouts.home-layout')
@section('content')
    <div class="container">
        <h2>{{ __('app.books.title.update') }}</h2>
        <form
            action="{{ route('books.update', $book->id) }}"
            method="POST"
        >
            @include('pages.books.form-fields')
            <button class="btn btn-primary">
                {{ __('app.books.button.update') }}
            </button>
            @csrf
            @method('PUT')
        </form>
    </div>
@endsection