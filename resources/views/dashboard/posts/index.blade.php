@extends('dashboard.layouts.main')

@section('container')
<div
class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">My Posts</h1>
</div>
@if (session()->has('success'))
<div class="alert alert-success col-md-12 col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif
<div class="table-responsive small col-md-12 col-lg-8">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
                <div class=" text-nowarp overflow-hidden">
                    {{ $post->title }}
                </div>
            </td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge text-bg-info" style="">
                    <i class="bi bi-eye-fill py-1"></i>
                </a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge text-bg-warning">
                    <i class="bi bi-pencil-fill py-1"></i>
                </a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    <button class="badge text-bg-danger border-0" onclick="return confirm('Are you sure?')">
                        <i class="bi bi-x-circle-fill py-1"></i>
                    </button>
                    @csrf

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
  </div>
@endsection
