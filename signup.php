<html>
<head>
<title> Sign up</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
<h3> signup  </h3>
<form action="signup.core.php"method="POST">
<div class="mb-3">
      <label for="name" >Name</label>
      <input type="text"class="form-control" name="name">
    </div>
	
	
	<div class="mb-3">
      <label for="email" >Email</label>
      <input type="email"class="form-control" name="email">
    </div>
	<div class="mb-3">
      <label for="phone" >Phone</label>
      <input type="number"class="form-control" name="phone"placeholder="+88">
    </div>
 
    <div class="mb-3">
      <label for="password" >Password</label>
    <input type="password"class="form-control" name="password">
   </div>
 
  <input type="submit"class="btn btn-primary" name="submit">
  
  </form>

</body>
</html>