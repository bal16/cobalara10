@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Posts</h1>
    </div>
    <div class="col-lg-5 mb-5">
        <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" onchange="makeSlug()" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}"
                    readonly>
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
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3 mt-3">
                <label for="body" class="mb-2">Body</label>
                <input class="mt-1" id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <p><small class="text-danger text-small">{{ $message }}</small></p>
                @enderror
            </div>
            {{-- <input type="hidden" name=""> --}}
            <button type="submit" class="btn btn-primary">Create Post</button>
            <a href="/dashboard/posts/" class="btn btn-secondary">Cancle</a>
        </form>
    </div>
    <script>
        function makeSlug() {
            const title = document.getElementById('title')
            const slug = document.getElementById('slug')
            if(title.value){
                fetch('/dashboard/makeSlug?title=' + title.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
                    // .then(data => slug.value = data.slug)
            } else slug.value = ''

        }

        document.addEventListener('trix-file-acccept', (e) => {
            e.preventDefault();
        })

        const previewImage = () => {
            const image = document.getElementById('image');
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
