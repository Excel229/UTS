@extends('Master.master')

@section('title', 'book detail')

@section('content')

<div class="alert" role="alert" style="background-color: grey">
    <h3 class="text-light">Book Detail</h3>
</div>

<div class="card" style="width: 30rem; margin: auto; margin-bottom: 30px">
    <img src="{{ asset('/storage/image/'.$book->image) }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Title: {{ $book->title }}</h5>
      <p class="card-text">Author: {{ $book->author }}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Publisher: {{ $book->onePublisher->name }}</li>
      <li class="list-group-item">Year: {{ $book->year }}</li>
      <li class="list-group-item">Synopsis:</li>
      <li class="list-group-item">{{ $book->synopsis }}</li>
    </ul>
</div>

@endsection
