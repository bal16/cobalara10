@extends('layouts.main')

@section('container')
<div class="row align-items-md-stretch bg-body-tertiary rounded-3" x-data="{open:false}">
    <div class="col-sm-12 col-md-5 col-lg-4 text-center">
      <div class="h-100 p-5  ">
      <img src="img/{{$image}}" alt="{{ $name }}" class="img-thumbnail rounded-circle w-full" width="200">
      </div>
    </div>
    <div class="col-sm-12 col-md-7 col-lg-8 ">
      <div class="h-100 p-5 pt-md-5  pt-0">
        <h2>Me, {{ $name }}</h2>
        <p x-show="open" x-transition.duration.500ms class="text-md-small" >{{ $email }}</p>
        <button @click="open = !open" x-transition.delay.1000ms :class="open || 'mt-4'" class="btn btn-outline-secondary" type="button">About me</button>
      </div>
    </div>
  </div>

@endsection


