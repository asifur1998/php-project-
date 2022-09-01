<html>
<head>
<title> edit </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<div class="header">
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
	  
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>

<div class="edited">



<?php 
include("connection.php");
if (isset($_GET["id"])){
	$editId = $_GET["id"];
	$sql = "SELECT * FROM students WHERE id = $editId";
	$runQuery = mysqli_query($connect,$sql);
	while($row = mysqli_fetch_array($runQuery)){
		?>
<div class="form">
<h3> Edit this form  </h3>
<form action="edit_core.php"method="POST">
  <div class="mb-3">
    <label for="name" >Name</label>
    <input type="text"class="form-control" name="name" value="<?php echo $row["name"];?>">
  </div>
  <div class="mb-3">
    <label for="roll">Roll</label>
    <input type="text" class="form-control" name ="roll"value="<?php echo $row["roll"];?>">
  </div>
   <div class="mb-3">
      <label for="class">Class</label>
      <input type="text" name="class"class="form-control" value="<?php echo $row["class"];?>">
    </div>
		<div class="mb-3">
	  <label for="image">Select image:</label>
  <input type="file" id="image"class="form-control" name="image" accept="image/*">
	</div>
	
	 <div class="mb-3">
    <input type="hidden"  name ="editingId"value="<?php echo $editId?>" >
  </div>
  <input type="submit"name="submit">
</form>
</div>
		<?php
	}
}
?>
</div>
</body>
</html>