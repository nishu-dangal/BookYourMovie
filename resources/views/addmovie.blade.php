<link rel="stylesheet" href="/app.css">
<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"/>
      
<div class="update">
<form action="{{route('savemovie')}}" method="POST" class="form-add" enctype="multipart/form-data">
    @csrf
 <label for="product_type">Movie:</label>
 <br />
 <br />

<label for="fname">Title:</label>
  <input type="text" id="fname" name="title" required><br />
 <label for="sname">Genre:</label>
  <input type="text" id="sname" name="genre" required>
  <br />
  <br />
<label for="title">Description:</label>
  <input type="text" id="title" name="desc" required>
  <br />
  <br />
  <label for="image">Status:</label>
  <input type="text" id="status" name="status" required>
  <br />
  <br /> 
  <label for="image">Image:</label>
  <input type="file" id="image" name="image" required>
  <br />
  <br /> 

  <input type="submit" value="Submit" class="button">
</form>
</div> 
