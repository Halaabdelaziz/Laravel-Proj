<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<button class="btn btn-warning m-5"><a href="/posts/create" class="text-dark text-decoration-none">Create Post</a></button>
<div class="container">

<table class="table table-hover table-striped" >
    <thead>
    <tr>
        <th>ID</th>
        <th>Tilte</th>
        <th>Description</th>
        <th>Time Creation</th>
        <th>Time update</th>
        <th>View</th>
        <th>Modify</th>
        <th>Remove</th>
    </tr>
       
    </thead>
 
      <tbody>
      @foreach($data as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
            <td><a class="btn  btn-info" href="/posts/{{$post['id']}}">Show</a></td>
            <td><a class="btn btn-warning" href="/posts/{{$post['id']}}/edit">Edit</a></td>
           <td>
           <form action="/posts/{{$post->id}}" method="post">
              @csrf
              @method("DELETE")
                <input class=" btn btn-danger" type="submit" name="Delete" value="delete">
            </form>
           </td>
        </tr>
        @endforeach
   
      </tbody>
</table>
</div>