@extends('Master.master')

@section('title', 'Publisher detail')

@section('content')

<div class="alert" role="alert" style="background-color: grey">
    <h5 class="text-light">{{ $publisher->name }}</h5>
    <h5 class="text-light">Address: {{ $publisher->address }}</h5>
    <h5 class="text-light">Phone: {{ $publisher->phone }}</h5>
    <h5 class="text-light">Email: {{ $publisher->email }}</h5>
</div>

<div style="display: flex">
    @foreach ($books as $book)
        <div class="card" style="width: 18rem; margin: 15px">
            <img src="{{ asset('/storage/image/'.$book->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">{{ $book->author }}</p>
                {{-- <a href="../bookDetail/{{ $book->id }}" class="btn btn-primary">Details</a> --}}
                <a href="../bookDetail/{{ $book->id }}" class="btn btn-primary">Details</a>
            </div>
        </div>
    @endforeach
</div>

@endsection
