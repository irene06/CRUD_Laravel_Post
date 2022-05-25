<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

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
    
</body>
</html>