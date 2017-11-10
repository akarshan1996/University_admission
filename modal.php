<?php
require_once 'connect.inc.php';

if(isset($_POST['submit'])&&isset($_POST['username'])&& isset($_POST['password'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query_username = "SELECT * FROM student_data where username='".mysqli_real_escape_string($conn,$username)."'";
        $query_password="SELECT * FROM student_data where password='".mysqli_real_escape_string($conn,$password)."'";

        if ($query_run = mysqli_query($conn,$query_username)){

            $query_rows = mysqli_num_rows($query_run);

            if($query_rows >= 1){

                if($query_run1 = mysqli_query($conn,$query_password)) {


                    $query_rows1 = mysqli_num_rows($query_run1);
                    if ($query_rows1 >= 1) {

                        $firstname= mysqli_fetch_assoc($query_run1);
                        $userrole= mysqli_fetch_assoc($query_run);

                        session_start();
                        $_SESSION['user_name'] = $username;
                        $_SESSION['first_name'] = $firstname['first_name'];
                        $_SESSION['user_role'] = $userrole['user_role'];

                        //echo "<script>window.alert('{$_SESSION['user_role']}');</script>";
                        echo "<script>window.location.href='index.php';</script>";

                    } else {
                        echo 'Password is Incorrect';
                    }
                }
            }else{
                    echo 'Username doesn\'t exists';
            }
        }

}

?><div class='modal' id='myModal' role='dialog'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        Log In
      </div>
      <div class='modal-body'>
        <form method='post'>
          <div class='form-group'>
            <label for='email'>Email:</label>
            <input type='email'  class='form-control' id='email' name='username' required></input>
          </div>
          <div class='form-group'>
            <label for='password'>Password:</label>
            <input type='password' class='form-control' id='password' name='password' required></input>
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
