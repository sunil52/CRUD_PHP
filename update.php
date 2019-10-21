<?php
    
include("connection.php");

if(isset($_POST["update"])){
    
    $id = $_GET["id"];
    $email = $_POST["lemail"];
    $name = $_POST["fname"];
    $number = $_POST["number"];
    $password = md5($_POST["lpassword"]);
    $gender = $_POST["gender"];
    $comment = $_POST["comment"];
    
    
    $sql = "update company_new set id=$id, email='$email', name='$name', number='$number', password='$password', gender='$gender', comment='$comment' where id=$id";
    
        $result = mysqli_query($link, $sql);
    
    header('location:list.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Update</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">


    <script>
    function updateValidate() {
        var email = document.form.lemail.value;
        var name = document.form.fname.value;
        var number = document.form.number.value;
        var password = document.form.lpassword.value;
        var comment = document.form.comment.value;

        if (email == null || email == "") {
            alert("Email can't be empty");
            return false;
        }

        if (name == null || name == "") {
            alert("Name can't be empty");
            return false;
        }

        if (number == null || number == "") {
            alert("Number can't be empty");
            return false;
        }

        if (comment == null || comment == "") {
            alert("Comment can't be empty");
            return false;
        }

        if (password == null || password == "") {
            alert("Password can't be empty");
            return false;

        } else if (password.length <= 6) {

            alert("Password must be at least 6 characters long.");
            return false;

        }

    }
    </script>

</head>

<body>

    <div class="container">
        <div class="d-flex justify-content-center h-auto">
            <div class="card custom-card-upd">
                <div class="card-header">
                    <h3>Update Data</h3>
                </div>

                <div class="card-body">
                    <form method="POST" name="form" onsubmit="return updateValidate()">
                        <div class="input-group form-group">
                            <input type="email" class="form-control" placeholder="Email" name="lemail">
                        </div>

                        <div class="input-group form-group">
                            <input type="text" class="form-control" placeholder="Full Name" name="fname" maxlength="15">
                        </div>

                        <div class="input-group form-group">
                            <input type="number" name="number" class="form-control" id="number"
                                placeholder="Phone Number" maxlength="12" minlength="10">
                        </div>

                        <div class="input-group form-group">
                            <input type="password" class="form-control" placeholder="Password" name="lpassword">
                        </div>

                        <div class="input-group form-group">
                            <select class="form-control" name="gender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="comment"
                                placeholder="Please enter minimum 10 and maximum 50 character" minlength="10"
                                maxlength="50" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success" name="update" type="submit">Update</button>
                            <button class="btn btn-success"><a href="list.php">Back</a></button>
                        </div>


                    </form>

                </div>

            </div>
        </div>
    </div>

</body>

</html>