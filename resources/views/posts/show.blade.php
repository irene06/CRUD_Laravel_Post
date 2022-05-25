@extends('layouts.app')
@section('title', 'Show post')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label class="label">Title</label>
            <label class="label">{{$post->title}}</label>
        </div>
        <div class="form-group">
            <label class="label">Description</label>
            <label class="label">{{$post->description}}</label>
        </div>
        
        <a class="btn btn-primary" href="{{route('posts.index')}}">Volver</a>
    </div>
</div>
    
@endsection