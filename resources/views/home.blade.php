@extends('Master.master')

@section('title', 'home')

@section('content')

<div class="alert" role="alert" style="background-color: grey">
    <h3 class="text-light">Book List</h3>
</div>

<div style="display: flex; justify-content: space-around;">
    @foreach($books as $book)
        <div class="card" style="width: 18rem; margin: 15px">
            <img src="{{ asset('/storage/image/'.$book->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">{{ $book->author }}</p>
                <a href="bookDetail/{{ $book->id }}" class="btn btn-primary">Details</a>
            </div>
        </div>
    @endforeach
</div>

<div class="pagination justify-content-center" style="margin-top: 15px; margin-bottom: 15px">
    {{$books->links()}}
</div>

@endsection
