@extends('layouts.app')
@section('title', 'Edit post')

@section('content')
<div class="row">
    <div class="col-12">
        <form method="POST" action="{{route('posts.update', [$post])}}" enctype="multipart/form-data">
            @method("PUT")
            <div class="form-group">
                <label class="label">Title</label>
                <input name="title" class="form-control" type="text" placeholder="Title" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label class="label">Description</label>
                <textarea name="description" class="form-control" placeholder="Description">{{$post->description}}</textarea>
            </div>
            @csrf
            <button class="btn btn-success">Guardar</button>
            <a class="btn btn-primary" href="{{route('posts.index')}}">Volver</a>
        </form>
    </div>
</div>
    
@endsection