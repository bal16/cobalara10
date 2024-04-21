
@extends('layouts.main')

@section('container')
<h1 class="mb-5">Posts Categories</h1>

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            {{-- <a href="/categories/{{ $category->slug }}"> --}}
                <div class="d-block card text-white" style="cursor: pointer" onclick="location.href='/posts?category={{ $category->slug }}'">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.5)"><a href="/posts?category={{ $category->slug }}" class="text-decoration-none text-white">{{ $category->name }}</a></h5>
                    </div>
                </div>
            {{-- </a> --}}
        </div>
        @endforeach
        </div>
    </div>



@endsection

