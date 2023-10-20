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
    

<div class="container py-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Login Form
                </div>
                <div class="card-body">
                    <form action="./insert_data.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="">Username</label>
                            <input class="form-control" type="text" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Password</label>
                            <input class="form-control" type="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Email</label>
                            <input class="form-control" type="Email" name="Email" required>
                        </div> 
                        <div class="mb-3">
                            <label class="form-label" for="">Roll number</label>
                            <input class="form-control" type="number" name="Roll_number" required>
                        </div>
                         <div class="mb-3">
                            <label class="form-label" for="">Address</label>
                            <input class="form-control" type="Address" name="Address" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">IMAGE</label>
                            <input class="form-control" type="file" name="p-img" required>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary w-100" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>





<!-- js cdn  -->
</body>
</html>