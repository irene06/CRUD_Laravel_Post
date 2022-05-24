<table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Title</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
    </tr>
  </thead>
  <tbody> 
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->updated_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>