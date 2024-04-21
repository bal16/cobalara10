@extends('layouts.main')

@section('container')
    <div class="p-5 mb-4 bg-body-tertiary rounded-3" x-data="{open:false}">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Welcome to my blog</h1>
          <p x-show="open" x-transition.duration.500ms class="col-md-8 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus harum, quasi saepe in maiores iusto atque modi consequatur sunt laborum culpa qui, corporis voluptatum vitae, cupiditate sed illum quos. Dolore.</p>
          <button @click="open = !open" :class="open || 'mt-4'" x-transition.delay.500ms class="btn btn-primary btn-lg" type="button">Click me!</button>
        </div>
      </div>
@endsection

