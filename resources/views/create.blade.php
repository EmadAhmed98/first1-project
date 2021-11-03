<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">Student Management | Add</h2>
  <br>
  <form action = "/store" method = "post" class="form-group" style="width:70%; margin-left:15%;" >
      @csrf
    <label class="form-group">titil	</label>
    <input type="text" class="form-control" placeholder="titil	" name="titil	">
    <label>content</label>
    <input type="text" class="form-control" placeholder="content" name="content">
    <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
