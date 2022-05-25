@extends('layouts.app')
@section('title', 'Create a post')

@section('content')
<div class="row">
    <div class="col-12">
        <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
            <div class="form-group">
                <label class="label">Title</label>
                <input name="title" class="form-control" type="text" placeholder="Title">
            </div>
            <div class="form-group">
                <label class="label">Description</label>
                <input name="description" class="form-control" type="text" placeholder="Description">
            </div>
            @csrf
            <button class="btn btn-success">Guardar</button>
            <a class="btn btn-primary" href="{{route('posts.index')}}">Volver al listado</a>
        </form>
    </div>
</div>
@endsection