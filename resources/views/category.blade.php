@extends('Template.template')

@section('page_name', 'Category')
@section('content')
    <div>
        <h1 class="index"><b style="background-color: #ab9e88">{{ $current->name }}</b> Category</h1>
        <div class="row" style="padding: 2rem">
            @foreach ($books as $book)
                <div class="col-lg-3 col-md-4">
                    <div class="card">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('image/' . $book->book->image) }}"
                            class="card-img-top" alt="Book">
                        <div class="card-body">
                            <h6 class="card-title">{{ $book->book->title }}</h6>
                            <p class="card-text author">By <span>{{ $book->book->author }}</span></p>
                            <a href="/book/{{ $book->book->id }}" class="btn btn-warning">Book Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
