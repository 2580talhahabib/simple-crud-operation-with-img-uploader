<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">password</th>

      <th scope="col">Email</th>
      <th scope="col">Address</th>

      <th scope="col">Roll number</th>
      <th scope="col">IMAGE</th>
      <th scope="col">operation</th>
    >
    </tr>
  </thead>
  <tbody>
  <?php
  include("./db_conn.php");
                $sql = "SELECT * FROM crud";
                $result = mysqli_query($conn, $sql);
                $counter = 1;
                if (mysqli_num_rows($result) > 0) {
                  
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $counter; ?></th>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['password'] ?></td>
                            <td><?php echo $row['Email'] ?></td>
                            <td><?php echo $row['Address'] ?></td>
                            <td><?php echo $row['Roll_number'] ?></td>
                            <td><img src="<?php echo './images/' . $row['p-img']; ?>" width="100" height="100" alt="User Image"></td>


                            <td class="d-flex justify-content-center">
                                <a href="edit.php?u_id=<?php echo $row['id']; ?>" class="btn btn-primary me-3">Edit</a>
                                <a href="display.php?u_id=<?php echo $row['id']; ?>" class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>

                <?php
                $counter++;
                    }
                } else {
                    ?>
                        <tr>
                            <td colspan="4"><h3 class="text-center text-danger">No Record Found</h3></td>
                        </tr>
                    <?php
                }

                mysqli_close($conn);
                ?>


    
    
  </tbody>
</table>








<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>





<!-- js cdn  -->
</body>
</html>