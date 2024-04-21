@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3 text-center">
            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->name }}"
                        class="img-top">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p class="card-text"><small class="text-body-secondary">By. <a
                            href="/posts?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                            href="/posts/?category={{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a> |
                        {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>


        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 rounded" style="background-color: rgba(0, 0, 0, 0.7)"><a
                                    href="/posts?category={{ $post->category->slug }}"
                                    class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                            @if ($post->image)
                                <div style="max-height: 400px; overflow: hidden;">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->name }}"
                                        class="img-top">
                                </div>
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif
                            <div class="card-body">
                                <div class="overflow-hidden mb-1" style="height: 50px">
                                    <h5 class="card-title"><a href="/posts/{{ $post->slug }}"
                                            class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                                </div>
                                <div style="height: 50px">
                                    <p class="card-text"><small class="text-body-secondary">By. <a
                                                href="/posts?author={{ $post->author->username }}"
                                                class="text-decoration-none">{{ $post->author->name }}</a> |
                                            {{ $post->created_at->diffForHumans() }}</small></p>
                                </div>
                                <div class="card-text overflow-hidden" style="height: 100px">
                                    <p>{{ $post->excerpt }}</p>
                                </div>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary mt-2">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
        {{-- bakal error karena default pake tailwindcss solusi: harus ganti ke bootstrap (baca di dokumentasi laravel) --}}
    </div>
    {{-- <div class="text-nowrap bg-body-secondary border overflow-hidden" style="width: 8rem;">
    This text should overflow the parent.
  </div> --}}
@endsection
