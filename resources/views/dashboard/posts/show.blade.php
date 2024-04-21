@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <div class="my-3">
                    <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-box-arrow-left"></i> Back to my
                        posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i
                            class="bi bi-pencil-fill"></i> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                                class="bi bi-x-circle-fill"></i> Delete</button>
                    </form>
                </div>

                @if ($post->image)
                    <div style="max-height: 400px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->name }}" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-3 fs-5">
                    {{-- {{ $post->body }} --}}
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
