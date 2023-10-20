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