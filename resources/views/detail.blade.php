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


    {{-- <div>
        <div class="index">
            <h1>Book List</h1>
        </div>
        <div class="row">
            @foreach ($books as $book)
                <div class="col-lg-3 col-md-4">
                    <div class="card">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('image/' . $book->image) }}" class="card-img-top"
                            alt="Book">
                        <div class="card-body">
                            <h6 class="card-title">{{ $book->title }}</h6>
                            <p class="card-text author">By <span>{{ $book->author }}</span></p>
                            <a href="/book/{{ $book->id }}" class="btn btn-warning">Book Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}
    {{-- </div> --}}




@endsection
