@extends('Template.template')

@section('page_name', 'Publisher')
@section('content')
<div class="index">
    <h1>Publisher</h1>
</div>
    <div class="contain">
        @foreach ($publishers as $publisher)
            <div class="row" style="padding-top: 10px">
                <div class="col">
                    <img src="{{ \Illuminate\Support\Facades\URL::asset('image/' . $publisher->image) }}" alt="Publisher">
                    <h1 style="padding-top: 20px">{{ $publisher->name }}</h1>
                    <div class="row">
                        <p>Address: <b>{{ $publisher->address }}</b></p>
                        <p>Phone: <b>{{ $publisher->phone }}</b></p>
                        <p>Email: <b>{{ $publisher->email }}</b></p>
                    </div>
                </div>
            </div>
    <div>
        <div class="row" >
            @foreach ($publisher->books as $book)
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
        </div>
        @endforeach
    </div>
@endsection
