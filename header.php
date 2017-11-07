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
        <ul class='nav navbar-nav navbar-right'>
          <li><a href='index.php#myCarousel'><span class='glyphicon glyphicon-home'></span> Home</a></li>
          <li><a href='index.php#contact_us'><span class='glyphicon glyphicon-penci'></span> Contact Us</a></li>
          <li><a href='#myModal' data-toggle='modal' ><span class='glyphicon glyphicon-log-in'></span> Log In</a></li>
          <li><a href='register.php'><span class='glyphicon glyphicon-user'></span> Register</a></li>
          <li><a href='view_status.php'><span class='glyphicon glyphicon-stats'></span> View Status</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>";
?>
