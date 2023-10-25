@if (Session::has('books.feedback-message.updated.success'))
    <div class="alert alert-info text-center">
        {{ __('app.books.feedback-message.updated.success') }}
    </div>
@endif

@if (Session::has('books.feedback-message.deleted.success'))
    <div class="alert alert-info text-center">
        {{ __('app.books.feedback-message.deleted.success') }}
    </div>
@endif

@if (Session::has('books.feedback-message.created.success'))
    <div class="alert alert-info text-center">
        {{ __('app.books.feedback-message.created.success') }}
    </div>
@endif

@if (Session::has('error-message'))
    <div class="alert alert-info text-center">
        {{ Session::get('error-message') }}
    </div>
@endif