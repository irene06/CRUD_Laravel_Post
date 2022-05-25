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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<a href="{{route('posts.create')}}" class="btn btn-success mb-2">Agregar</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Video</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
      <th>Editar</th>
      <th>Eliminar</th>
      
    </tr>
  </thead>
  <tbody> 
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->description}}</td>
      <td>{{$post->image}}</td>
      <td>{{$post->video}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->updated_at}}</td>
      <td>
        <a class="btn btn-warning" href="{{route('posts.edit',[$post])}}">
          <i class="fa fa-edit"></i>Editar
        </a>
      </td> 
      <td>
        <form action="{{route('posts.delete', [$post])}}" method="post">
            @method("delete")
            @csrf
            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i>Eliminar
            </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


</body>
</html>