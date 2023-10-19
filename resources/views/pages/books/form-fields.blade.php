<div class="mb-3">
    <label for="title" class="form-label">
        {{ __('app.books.field.title') }}
    </label>
    <input
        type="text"
        id="title"
        name="title"
        placeholder="{{ __('app.contact.placeholder.email') }}"
        maxlength="150"
        value="{{ $book->title ?? '' }}"
        class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
    >
    @if ($errors->has('title'))
        <div class="invalid-feedback">
            {{ $errors->first('title') }}
        </div>
    @endif
</div>

<div class="mb-3">
    <label for="author" class="form-label">
        {{ __('app.books.field.author') }}
    </label>
    <input
        type="text"
        id="author"
        name="author"
        placeholder="{{ __('app.contact.placeholder.message')}}"
        maxlength="150"
        value="{{ $book->author ?? '' }}"
        class="form-control {{ $errors->has('author') ? 'is-invalid' : '' }}"
    >
    @if ($errors->has('author'))
        <div class="invalid-feedback">
            {{ $errors->first('author') }}
        </div>
    @endif
</div>