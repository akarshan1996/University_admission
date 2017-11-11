<?php
require_once 'connect.inc.php';

//echo "this is branch: $_REQUEST[branch] and this is stream: $_REQUEST[stream] ";

$branch = $_REQUEST[branch];
$stream = $_REQUEST[stream];

$query = "SELECT * FROM student_data WHERE branch = '$branch' AND stream ='$stream'";

$count = "SELECT count(*) FROM student_data WHERE branch = '$branch' AND stream =' $stream'";

$query_run1 = mysqli_query($conn,$count);

if($query_run = mysqli_query($conn,$query)){
    echo "<table style='border: solid 1px black;'>
            <tr>
            <th>Name</th>
            <th>Sex</th>            
            <th>Date Of Birth</th>            
            <th>Personal Contact</th>        
            <th>Email</th>    
            <th>Father Name</th>            
            <th>10th Percentage</th>            
            <th>12th Percentage</th>            
            <th>Current City</th>            
            <th>Permanent City</th>                        
</tr>";
    while($query_num = mysqli_fetch_assoc($query_run)){
        echo "<tr>
                <td>$query_num[first_name] $query_num[middle_name] $query_num[last_name]</td>
                <td>$query_num[sex]</td>
                <td>$query_num[dob]</td>
                <td>$query_num[personal_contact]</td>
                <td>$query_num[username]</td>
                <td>$query_num[father_name]</td>
                <td>$query_num[_10th_percentage]</td>
                <td>$query_num[_12th_percentage]</td>
                <td>$query_num[cur_city]</td>
                <td>$query_num[per_city]</td>
              </tr>
          </table>";
    }
}else{

}

echo "Total Count is ".$query_run1.'<br>'; ?>