@extends('layouts.home-layout')
@section('content')
    <div class="container">
        <h2>{{ __('app.books.title.create')}}</h2>
        <form
            action="{{ route('books.store') }}"
            method="POST"
        >
            @include('pages.books.partials.form-fields')
            <button class="btn btn-primary">
                {{ __('app.books.button.create')}}
            </button>
            @csrf
        </form>
    </div>
@endsection