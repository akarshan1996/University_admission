<?php
require_once 'connect.inc.php';

if(isset($_POST['submit'])&&isset($_POST['username'])&& isset($_POST['password'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_hash = md5($password);

        //echo "<script>alert('$somevalue');</script>";

    $query_username = "SELECT * FROM student_data where username='".mysqli_real_escape_string($conn,$username)."'";
    $query_password_hash = "SELECT * FROM student_data where password='".mysqli_real_escape_string($conn,$password_hash)."'";
    $query_firrstname = "SELECT * FROM student_data where password='".mysqli_real_escape_string($conn,$password_hash)."'";

    $query_run2 = mysqli_query($conn,$query_firrstname);

    if ($query_run = mysqli_query($conn,$query_username)){

        $query_rows = mysqli_num_rows($query_run);

        if($query_rows >= 1){

            if($query_run1 = mysqli_query($conn,$query_password_hash)) {

                $query_rows1 = mysqli_num_rows($query_run1);

                if ($query_rows1 >= 1) {

                    $userrole = mysqli_fetch_assoc($query_run);
                    $lastname = mysqli_fetch_assoc($query_run1);
                    $firstname = mysqli_fetch_assoc($query_run2);

                    session_start();

                    $_SESSION['user_name'] = $username;
                    $_SESSION['user_role'] = $userrole['user_role'];
                    $_SESSION['last_name'] = $lastname['last_name'];
                    $_SESSION['first_name'] = $firstname['first_name'];


                    //echo "<script>window.alert('$_SESSION[last_name]');</script>";
                    echo "<script>window.location.href='index.php';</script>";

                } else {

                    echo "<script>window.alert('Password is Incorrect');</script>";

                }
            }
        }else{

            echo "<script>window.alert('Username doesn\'t exists');</script>";

        }
    }
}

?>
<div class='modal' id='myModal' role='dialog'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        Log In
      </div>
      <div class='modal-body'>
        <form method='post'>
          <div class='form-group'>
            <label for='email'>Email:</label>
            <input type='email'  class='form-control' name='username' placeholder="Email" id='email' required>
          </div>
          <div class='form-group'>
            <label for='password'>Password:</label>
            <input type='password' class='form-control' name='password' placeholder='Password' minlength='8' maxlength='20' id='password' required>
              <!--<small class="text-muted">
                  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
              </small>-->
          </div>
          <div class='form-group form-inline'>
            <label><input type='checkbox'> Remember Me</input></label>
          </div>
          <div class='form-group'>
            <button  class='btn btn-success' name='submit'>Submit</button>
          </div>
        </form>
      </div>
      <div class='modal-footer'>
      </div>
    </div>
  </div>
  
</div>
