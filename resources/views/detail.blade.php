@extends('Template.template')

@section('page_name', 'Detail')
@section('content')
    <div>
        <div class="index">
            <h1>Book List</h1>
        </div>
        <div class="row" style="padding:2rem">
            <div class="col-lg-4">
                <img src="{{ \Illuminate\Support\Facades\URL::asset('image/' . $book->image) }}" alt="Book Detail">
            </div>
            <div class="col-lg-6">
                <div class="ps-lg-5">
                    <h1 class="mb-3">{{ $book->title }}</strong></h1>
                    <p>Author : <b>{{ $book->author }}</b></p>
                    <p>Publisher : <b>{{ $book->publisher->name }}</b></p>
                    <p>Year : <b>{{ $book->year }}</b></p>
                    <p class="m-0">Sinopsis :</p>
                    <p>{{ $book->synopsis }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
