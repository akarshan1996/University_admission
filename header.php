<?php
session_start();
ob_start(); ?>
<script>
    var http_referrer = '<?php echo $_SERVER['HTTP_REFERER'] ?>';
    var request_uri = '<?php echo $_SERVER['REQUEST_URI'] ?>';
</script>
<?php
echo "<nav class='navbar navbar-default navbar-fixed-top'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <a class='navbar-brand' href='index.php'>Xaviers College</a>
      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
     </div>
   <div>
   <div class='collapse navbar-collapse' id='myNavbar'>
   <ul class='nav navbar-nav navbar-right'>";
        if(isset($_SESSION['user_role']) && ($_SESSION['user_role']=='admin')){
            echo "<li><a href='../index.php#myCarousel'><span class='glyphicon glyphicon-home'></span> Home</a></li>
                  <li><a href='../index.php#contact_us'><span class='glyphicon glyphicon-penci'></span> Contact Us</a></li>";

            if(isset($_SESSION['user_name'])){
                echo "<li><a href='../logout.php'><span class='glyphicon glyphicon-log-out'></span> Log Out, <b>".$_SESSION['first_name']. $_SESSION['last_name']."</b></a></li>
                      <li><a href='view_status.php'><span class='glyphicon glyphicon-stats'></span> View Status</a></li>";

                //echo " <script>window.alert(http_referrer+\"....\"+request_uri); </script>";
                //echo "<script> var x = $(location).attr('href'); if(x == 'index.php'){ window.alert('Yes'+'$x');} else { window.alert('No'+'$x');} </script>";

            }else {
              echo "<li><a href='#myModal' data-toggle='modal'><span class='glyphicon glyphicon-log-in'></span> Log In</a></li>
                    <li><a href='../register.php'><span class='glyphicon glyphicon-user'></span> Register</a></li>";
          }

        }elseif(http_referrer == "http://localhost/php/university_admission/index.php") {
            echo "<li><a href='index.php#myCarousel'><span class='glyphicon glyphicon-home'></span> Home</a></li>
                  <li><a href='index.php#contact_us'><span class='glyphicon glyphicon-penci'></span> Contact Us</a></li>";

            if (isset($_SESSION['user_name'])) {
                echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Log Out, <b>" . $_SESSION['first_name'] . "</b></a></li>
                    <li><a href='view_status.php'><span class='glyphicon glyphicon-stats'></span> View Status</a></li>";

            } else {
                echo "<li><a href='#myModal' data-toggle='modal'><span class='glyphicon glyphicon-log-in'></span> Log In</a></li>
                    <li><a href='register.php'><span class='glyphicon glyphicon-user'></span> Register</a></li>";
            }
        }

        echo"</ul>
      </div>
    </div>
  </div>
</nav>";

//this is not working why...why>>the html after php
?>
<html>
<head>
    <script>
        var http_referrer = '<?php echo $_SERVER['HTTP_REFERER'] ?>';
        var request_uri = '<?php echo $_SERVER['REQUEST_URI'] ?>';
    </script>
</head>
</html>
