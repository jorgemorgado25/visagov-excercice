@extends('layouts.home-layout')
@section('content')
    <div class="container">

        <h2>{{ __('app.books.title') }}</h2>

        @include('pages.books.partials.feedback-messages')
        
        <a class="btn btn-primary mb-4" href="{{ route('books.create') }}">
            {{ __('app.books.button.create') }}
        </a>

        @if ($books->count() > 0)
            @include('pages.books.partials.books-table')
        @else
            <div class="alert alert-info text-center">
                {{ __('app.books.message.no-books') }}
            </div>
        @endif
    </div>
@endsection