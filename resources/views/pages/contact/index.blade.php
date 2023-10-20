@extends('layouts.home-layout')
@section('content')
    <div class="container">

        <h2>{{ __('app.contact.title') }}</h2>

        @if ( Session::has('contact.message.sent') )
            <div class="alert alert-info text-center">
                {{ __('app.contact.message.sent') }}
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">
                    {{ __('app.contact.field.email') }}
                </label>
                <input
                    type="text"
                    id="email"
                    name="email"
                    placeholder="{{ __('app.contact.placeholder.email') }}"
                    maxlength="150"
                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                    value="{{ old('email') }}"
                >
                @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
            
            <div class="mb-3">
                <label for="author" class="form-label">
                    {{ __('app.contact.field.message') }}
                </label>
                <textarea
                    type="text"
                    id="message"
                    name="message"
                    placeholder="{{ __('app.contact.placeholder.message')}}"
                    maxlength="150"
                    value="{{ $book->message ?? '' }}"
                    class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                    value="{{ old('message') }}"
                    rows="10"
                ></textarea>
                @if ($errors->has('message'))
                    <div class="invalid-feedback">
                        {{ $errors->first('message') }}
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">
                {{ __('app.contact.button.send') }}
            </button>
            @csrf
        </form>

    </div>
@endsection