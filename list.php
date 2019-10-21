<!DOCTYPE html>
<html>

<head>
    <title>List page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
    <div class="container-fluid">
        <div class="col-lg-12"><br><br>
            <h1 class="data">Display Data</h1><br><br>
            <table class="table table-hover table-bordered">
                <tr class="bg-dark text-white text-centre">
                    <th>Id</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>gender</th>
                    <th>Password</th>
                    <th>comment</th>
                    <th>Delete</th>
                    <th>Update</th>

                </tr>
                <?php  

                        include("connection.php");
    
                        $sql = "select * from company_new";
    
                        $result = mysqli_query($link,$sql);
                    
                    while($res = mysqli_fetch_array($result)){

            ?>
                <tr class="text-centre">
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['email']; ?></td>
                    <td><?php echo $res['name']; ?></td>
                    <td><?php echo $res['number']; ?></td>
                    <td><?php echo $res['gender']; ?></td>
                    <td><?php echo $res['password']; ?></td>
                    <td><?php echo $res['comment']; ?></td>

                    <td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id']; ?>"
                                class="text-white">Delete</a></button></td>

                    <td><button class="btn-success btn"><a href="update.php?id=<?php echo $res['id']; ?>"
                                class="text-white">Update</a></button></td>

                </tr>

                <?php
                    }
                    ?>

            </table>
        </div>
    </div>
</body>

</html>