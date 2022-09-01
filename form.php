<html>
<head>
<title>form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<div class="form">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student_Management</a>
	    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
		
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dashboard
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		   <li><a class="dropdown-item" href="home.php">Home</a></li>
            <li><a class="dropdown-item" href="form.php">student</a></li>
            <li><a class="dropdown-item" href="view.php">show</a></li>
			<li><a class="dropdown-item" href="index.php">Logout</a></li>
          </ul>
        </li>
      </ul>
	  
      <form class="d-flex"action="home.php"method="POST">
        <input class="form-control me-2"name="search" type="search" placeholder="Search class" aria-label="Search">
        <button class="btn btn-outline-success" type="text">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>
<div class="form">
<?php
if(isset($_GET["inserted"])){
	echo "Data has been inserted";
}
?>
<h3> Fill Up this form  </h3>
<form action="form_core.php"method="POST"enctype="multipart/form-data">
  <div class="mb-3">
    <label for="name" >Name</label>
    <input type="text" class="form-control" name="name" >
  </div>
  <div class="mb-3">
    <label for="roll">Roll</label>
    <input type="text" class="form-control" name ="roll">
  </div>
   <div class="mb-3">
      <label for="class">Class</label>
      <select id="Class" name="class"class="form-control">
        <option>one</option>
		 <option>two</option>
		  <option>three</option>
		   <option>four</option> 
		   <option>five</option>
      </select>
    </div>
	<div class="mb-3">
	  <label for="image">Select image:</label>
  <input type="file" id="image"class="form-control" name="image" accept="image/*">
	</div>
	
  <input type="submit"class="btn btn-primary"name="submit">
</form>
</div>
</body>
</html>