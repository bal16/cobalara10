@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Posts</h1>
    </div>
    <div class="col-lg-5 mb-5">
        <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $post->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug"
                    value="{{ old('slug', $post->slug) }}" readonly>
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id', $category->id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                @if ($post->image)
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-preview img-fluid mb-3 col-sm-5">

                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="body" class="mb-2">Body</label>
                <input class="mt-1" id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <p><small class="text-danger text-small">{{ $message }}</small></p>
                @enderror
            </div>
            {{-- <input type="hidden" name=""> --}}
            <button type="submit" class="btn btn-primary">Update Post</button>
            <a href="/dashboard/posts/" class="btn btn-secondary">Cancle</a>
        </form>
    </div>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');
        title.addEventListener('change', function() {
            fetch('/dashboard/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
            // .then(data => slug.value = data.slug)
        })

        document.addEventListener('trix-file-acccept', (e) => {
            e.preventDefault();
        })
        const previewImage = () => {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
