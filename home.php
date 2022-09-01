<html>
<head>
<title> home </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student_management</a>
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
      <form class="d-flex"method="POST">
        <input class="form-control me-2"name="search" type="text" placeholder="search class" aria-label="Search">
        <button class="btn btn-outline-success" type="text">search</button>
      </form>
    </div>
  </div>
</nav>
<div class="search">

<table class="table">
  <thead>
    <tr>
      <th scope="col"><center>Name</center></th>
      <th scope="col"><center>Roll</center></th>
      <th scope="col"><center>Class</center></th>
	  <th scope="col"><center>Image</center></th>
    </tr>
  </thead>
  <?php
  include("connection.php");
  $set = $_POST["search"];
  if($set){
	  $sql = "SELECT * FROM students WHERE class = '$set'";
	  $runQuery = mysqli_query($connect,$sql);
	  while ($row = mysqli_fetch_array($runQuery)){
		  ?>
		  <tbody>
    <tr>
      <td><center><?php echo $row["name"];?></center></td>
      <td><center><?php echo $row["roll"];?></center></td>
      <td><center><?php echo $row["class"];?></center></td>
	   <td><center><img height="80px"width="80px"src="images/<?php echo $row["image"];?>"</center></td>
    </tr>
  </tbody>
		  <?php
	  }
  }
  ?>
</table>
</div>
<h1> <center> Search Your Student Class </center> </h1>
</body>
</html>