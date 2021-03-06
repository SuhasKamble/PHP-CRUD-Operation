<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
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
<br>
    <div class="container">
      <h1 class="text-center">Display User Info</h2>
      <br>
        <div class="col-md-12">
            <table class="table table-bordered text-center">
                <tr class="bg-dark text-white ">
                  <th>Id</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Delete</th>
                  <th>Update</th>
                </tr>

                <?php 
                    include 'conn.php';
                    
                    $q = "SELECT * FROM info";
                    
                    $query = mysqli_query($con, $q);

                    while ($res = mysqli_fetch_array($query)){

                ?>

                <tr>
                  <td><?php echo $res['id']; ?></td>
                  <td><?php echo $res['fname']; ?></td>
                  <td><?php echo $res['lname']; ?></td>
                  <td><?php echo $res['email']; ?></td>
                  <td><?php echo $res['phone']; ?></td>

                  <td><button class="btn btn-danger btn-sm">
                    <a  class="text-decoration-none text-white" href="delete.php?id=<?php echo $res['id']; ?>">Delete</a>
                  </button></td>
                  <td><button class="btn btn-primary btn-sm">
                    <a class="text-decoration-none text-white" href="update.php?id=<?php echo $res['id']; ?>">Update</a>
                  </button></td>

                </tr>

                <?php 
                    }
                ?>
            </table>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>