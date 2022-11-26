@extends('Master.master')

@section('title', 'bookCategory')

@section('content')
<div class="alert" role="alert" style="background-color: grey">
    <h3 class="text-light">{{ $category->name }}</h3>
</div>

<div style="display: flex; justify-content: space-around;">
    @foreach($books as $book)
        <div class="card" style="width: 18rem; margin: 15px">
            <img src="{{ asset('/storage/image/'.$book->oneBook->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $book->oneBook->title }}</h5>
                <p class="card-text">{{ $book->oneBook->author }}</p>
                <a href="bookDetail/{{ $book->oneBook->id }}" class="btn btn-primary">Details</a>
            </div>
        </div>
    @endforeach
</div>

@endsection
