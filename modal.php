<?php
require_once 'connect.inc.php';

$_SESSION['username']=NULL;
if(isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_hash = md5($password);

        $query_username = "SELECT * FROM student_data where username='".mysqli_real_escape_string($conn,$username)."'";

        $query_password="SELECT * FROM student_data where password='".mysqli_real_escape_string($conn,$password_hash)."'";

        if ($query_run = mysqli_query($conn.$query_username)){

            $query_rows = mysqli_num_rows($query_run);

            if($query_rows >= 1){
                if($query_run1 = mysqli_query($conn,$query_password)) {

                    $query_rows1 = mysqli_num_rows($query_run1);
                    if ($query_rows1 >= 1) {
                        session_start();

                        $_SESSION['username'] = $username;
                    } else {
                        echo 'Password isn\'t correct';
                    }
                }
            }else{
                    echo 'Username doesn\'t exists';
            }
        }
    }
}

echo "<div class='modal' id='myModal' role='dialog'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        Log In
      </div>
      <div class='modal-body'>
        <form>
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
            <button type='submit' class='btn btn-success' name='submit'>Submit</button>
          </div>
        </form>
      </div>
      <div class='modal-footer'>
      </div>
    </div>
  </div>
  
</div>";

?>
