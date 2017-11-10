<html>
<head>
    <title>Xaviers College</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/view_status.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9CIiUxwau0dS8VzAc1X_bTv7kLRDP0mk&callback=myMap"></script>

    <!--<style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>-->
</head>
<body>
<?php include "header.php";
require_once 'connect.inc.php';

if($_SESSION['user_role'] == 'admin'){
    echo "<script>window.location.href='admin/admin_view.php';</script>";
}
$username = $_SESSION['user_name'];
$query = "SELECT * FROM student_data WHERE username='".$username."'";
$query_run = mysqli_query($conn,$query);

//$Middle_Name = mysqli_fetch_assoc($query_run);
//$_SESSION['middle_name'] = $Middle_Name['middle_name'];

$query_rows = mysqli_fetch_assoc($query_run);
?>

<div class="container-fluid">
    <div class="row">
        <div class="profile-head">
            <div class="profiles col-xs-8 col-xs-push-2  col-sm-10 col-sm-push-1 thumbnail">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="row">
                        <img src="<?php echo $query_rows['photo']; ?>" class="img-responsive" />
                    </div>
                </div>
                <div class="col-md-9 visible-lg">
                    <div class="row">
                        <span class="col-sm-12"><h2><strong><?php echo "$query_rows[first_name] $query_rows[middle_name] $query_rows[last_name]"; ?></strong></h2></span>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <p><strong>Profile:</strong></p>
                            <ul>
                                <li><span><strong>Name:</strong></span></li>
                                <li><span><strong>Sex:</strong></span></li>
                                <li><span><strong>Date of Birth</strong></span></li>
                                <li><span><strong>Personal Contact</strong></span></li>
                                <li><span><strong>Father Name</strong></span></li>
                                <li><span><strong>Mother Name</strong></span></li>
                                <li><span><strong>Father Contact</strong></span></li>
                                <li><span><strong>Mother Contact</strong></span></li>
                                <li><span><strong>Branch</strong></span></li>
                                <li><span><strong>Stream</strong></span></li>
                                <li><span><strong>10th School</strong></span></li>
                                <li><span><strong>12th School</strong></span></li>
                                <li><span><strong>10th Board</strong></span></li>
                                <li><span><strong>12th Board</strong></span></li>
                                <li><span><strong>10th Percentage</strong></span></li>
                                <li><span><strong>12th Percentage</strong></span></li>
                                <li><span><strong>Current House No.</strong></span></li>
                                <li><span><strong>Current Col.</strong></span></li>
                                <li><span><strong>Current City</strong></span></li>
                                <li><span><strong>Current State</strong></span></li>
                                <li><span><strong>Current Pin</strong></span></li>
                                <li><span><strong>Permanent House No.</strong></span></li>
                                <li><span><strong>Permanent Col.</strong></span></li>
                                <li><span><strong>Permanent City</strong></span></li>
                                <li><span><strong>Permanent State</strong></span></li>
                                <li><span><strong>Permanent Pin</strong></span><li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <p>Student</p>
                            <?php
                            echo "
                                <ul>
                                <li><span>$query_rows[first_name] $query_rows[middle_name] $query_rows[last_name]</span></li>
                                <li><span>$query_rows[sex]</span></li>
                                <li><span>$query_rows[dob]</span></li>
                                <li><span>$query_rows[personal_contact]</span></li>
                                <li><span>$query_rows[father_name]</span></li>
                                <li><span>$query_rows[mother_name]</span></li>
                                <li><span>$query_rows[father_contact]</span></li>
                                <li><span>$query_rows[mother_contact]</span></li>
                                <li><span>$query_rows[branch]</span></li>
                                <li><span>$query_rows[stream]</span></li>
                                <li><span>$query_rows[_10th_school]</span></li>
                                <li><span>$query_rows[_12th_school]</span></li>
                                <li><span>$query_rows[_10th_board]</span></li>
                                <li><span>$query_rows[_12th_board]</span></li>
                                <li><span>$query_rows[_10th_percentage]</span></li>
                                <li><span>$query_rows[_12th_percentage]</span></li>
                                <li><span>$query_rows[cur_hno_street]</span></li>
                                <li><span>$query_rows[cur_col_area]</span></li>
                                <li><span>$query_rows[cur_city]</span></li>
                                <li><span>$query_rows[cur_state]</span></li>
                                <li><span>$query_rows[cur_pin]</span></li>
                                <li><span>$query_rows[per_hno_street]</span></li>
                                <li><span>$query_rows[per_col_area]</span></li>
                                <li><span>$query_rows[per_state]</span><li>
                                <li><span>$query_rows[per_pin]</span></li>
                            </ul>";
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--<table>
                <tr>
                    <th>Name</th>
                    <th>Sex</th>
                </tr>
     /*while($query_rows = mysqli_fetch_assoc($query_run)){
        echo "<tr>
                <td>$query_rows[first_name]</td>
                <td>$query_rows[first_name]</td>
              </tr>";
        }
             </table>-->

<?php   require_once 'modal.php';
        require_once 'footer.php';
?>
</body>
</html>

<!--
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            Bhaumik Patel</h4>
                        <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                                </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>email@example.com
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                        //button
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Social</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Github</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
