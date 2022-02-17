
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="container col-md-5">
<form action="/users" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" value="" name="name" class="form-control" id="exampleInputName">
  </div>
  <div class="mb-3">
    <label for="exampleInputbody" class="form-label">Email</label>
    <input type="email" value="" name="email" class="form-control" id="exampleInputbody">
  </div>
  <div class="mb-3">
    <label for="exampleInputbody" class="form-label">Paswword</label>
    <input type="password" value="" name="password" class="form-control" id="exampleInputbody">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>