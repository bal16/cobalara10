@extends('dashboard.layouts.main')

@section('container')
<div
class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">My categories</h1>
</div>
@if (session()->has('success'))
<div class="alert alert-success col-md-10 col-lg-6" role="alert">
    {{ session('success') }}
  </div>
@endif
<div class="table-responsive small col-md-10 col-lg-6">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>

            <td>{{ $category->name }}</td>
            <td>
                {{-- <a href="/dashboard/categories/{{ $category->slug }}" class="badge text-bg-info" style="">
                    <i class="bi bi-eye-fill py-1"></i>
                </a> --}}
                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge text-bg-warning">
                    <i class="bi bi-pencil-fill py-1"></i>
                </a>
                <form action="/dashboard/categories/{{ $category->slug }}" method="category" class="d-inline">
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
