@extends('Master.master')

@section('title', 'publisher')

@section('content')

<div class="alert" role="alert" style="background-color: grey">
    <h3 class="text-light">Publisher</h3>
</div>

<div style="display: flex;">
    @foreach ($publishers as $publisher)
        <div class="card mb-3" style="margin: auto; max-width: 25%">
            <img src="{{ asset('/storage/image/'.$publisher->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $publisher->name }}</h5>
            <p class="card-text">{{ $publisher->address }}</p>
            {{-- <a href="../publisherDetail/{{ $publisher->id }}" class="btn btn-primary">Detail</a> --}}

            <a href="../pubD/{{ $publisher->id }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    @endforeach
</div>

<div class="pagination justify-content-center" style="margin-top: 15px; margin-bottom: 15px">
    {{$publishers->links()}}
</div>

@endsection
