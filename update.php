<?php
    include 'conn.php';
   
    $id = $_GET['id'];
    
    if(isset($_POST['submit'])){
      
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        $q = " UPDATE info SET id=$id, fname='$fname', lname='$lname', email='$email', phone='$phone' WHERE id=$id ";
        
        $query = mysqli_query($con, $q);
         
         header('location:display.php');
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Insert Info</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Info</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="display.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="insert.php">Add</a>
        </li>
        </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="col-lg-6 m-auto my-4">
        <div class="card">
            <div class="card-header bg-dark text-white text-center">
                <h2>Update Info</h2>
            </div>
            <div class="card-body">
                <form  method="post" action="update.php">

                    <label for="fname" class="form-text">First Name</label>
                    <input type="text" class="form-control" name="fname">
                    <br>

                    <label for="lname" class="form-text">Last Name</label>
                    <input type="text" class="form-control" name="lname">
                    <br>

                    <label for="email" class="form-text">Email</label>
                    <input type="email" class="form-control" name="email">
                    <br>

                    <label for="phone" class="form-text">Phone</label>
                    <input type="text" class="form-control" name="phone">
                    <br>

                    <button class="btn btn-primary w-100" type="submit" name="submit">Submit</button>
                    <br>

                </form>
            </div>
        </div>
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>