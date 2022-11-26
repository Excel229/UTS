<header>

    @php
        $categories = App\Models\Category::all();
    @endphp

    <div class="bg-warning" style="text-align: center; padding: 25px;">
        <h1 class="text-light">Giant Book Supplier</h1>
    </div>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-primary" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                            <li><a class="dropdown-item" href="../bookCategory/{{ $category->id }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="../publisher/">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="../contact/">Contact</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
