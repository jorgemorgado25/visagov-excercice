<nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Visagov</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a
                        class="nav-link"                        
                        href="{{ route('books.index') }}"
                    >
                    {{ __('app.books.title') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="{{ route('contact.index') }}"
                    >
                        {{ __('app.contact.title') }}
                    </a>
                </li>
                <div class="dropdown">
                    <a
                        class="btn dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        {{ __('app.language.title') }}
                    </a>
                  
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="/es">
                                Español
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/en">
                                English
                            </a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
</nav>