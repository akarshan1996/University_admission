<?php

require_once 'connect.inc.php';
require_once 'core.inc.php';

if(!logged()){
    if(isset($_POST['First_Name'])          && isset($_POST['Middle_Name'])      && isset($_POST['Last_Name'])

        && isset($_POST['Image'])           && isset($_POST['Sex'])              && isset($_POST['Dob'])

        && isset($_POST['Personal_Contact'])&& isset($_POST['Father_Name'])      && isset($_POST['Mother_Name'])

        && isset($_POST['Father_Contact'])  && isset($_POST['Mother_Contact'])   && isset($_POST['Branch'])

        && isset($_POST['Stream'])          && isset($_POST['10th_Board'])       && isset($_POST['12th_Board'])

        && isset($_POST['10th_School'])     && isset($_POST['12th_School'])      && isset($_POST['10th_Percent'])

        && isset($_POST['12th_Percent'])    && isset($_POST['Username'])            && isset($_POST['Password'])

        && isset($_POST['Confirm_Password'])&& isset($_POST['Cur_Address'])      && isset($_POST['Cur_Area_Colony'])

        && isset($_POST['Cur_City'])        && isset($_POST['Cur_State'])        && isset($_POST['Cur_Zip'])

        && isset($_POST['Same_As_Cur_Address']))    {

        $First_Name = $_POST['First_Name'];

        $Middle_Name = $_POST['Middle_Name'];

        $Last_Name = $_POST['Last_Name'];

        $Image = $_POST['Image'];

        $Sex = $_POST['Sex'];

        $Dob = $_POST['Dob'];

        $Personal_Contact = $_POST['Personal_Contact'];

        $Father_Name = $_POST['Father_Name'];

        $Mother_Name = $_POST['Mother_Name'];

        $Father_Contact = $_POST['Father_Contact'];

        $Mother_Contact = $_POST['Mother_Contact'];

        $Branch = $_POST['Branch'];

        $Stream = $_POST['Stream'];

        $_10th_Board = $_POST['10th_Board'];

        $_12th_Board = $_POST['12th_Board'];

        $_10th_School = $_POST['10th_School'];

        $_12th_School = $_POST['12th_School'];

        $_10th_Percent = $_POST['10th_Percent'];

        $_12th_Percent = $_POST['12th_Percent'];

        $Username = $_POST['Username'];

        $Password = $_POST['Password'];

        $Confirm_Password = $_POST['Confirm_Password'];
        $Confirm_Password_Hash= NULL;

        $Cur_Address = $_POST['Cur_Address'];

        $Cur_Area_Colony = $_POST['Cur_Area_Colony'];

        $Cur_City = $_POST['Cur_City'];

        $Cur_State = $_POST['Cur_State'];

        $Cur_Zip = $_POST['Cur_Zip'];

        $Submit = $_POST['Submit'];

        $Same_As_Cur_Address = $_POST['Same_As_Cur_Address'];

        if(!empty($First_Name)         && !empty($Middle_Name)      && !empty($Last_Name)        && !empty($Image)

            && !empty($Sex)            && !empty($Dob)              && !empty($Personal_Contact) && !empty($Father_Name)

            && !empty($Mother_Name)    && !empty($Father_Contact)   && !empty($Mother_Contact)   && !empty($Branch)

            && !empty($Stream)         && !empty($_10th_Board)      && !empty($_12th_Board)      && !empty($_10th_School)

            && !empty($_12th_School)   && !empty($_10th_Percent)    && !empty($_12th_Percent)    && !empty($Username)

            && !empty($Password)       && !empty($Confirm_Password) && !empty($Cur_Address)      && !empty($Cur_Area_Colony)

            && !empty($Cur_City)       && !empty($Cur_State)        && !empty($Cur_Zip)          && !empty($Submit))    {

            if($Password != $Confirm_Password){
                echo 'Passwords do not match';
            }
            else{
                $Confirm_Password_Hash = md5($Confirm_Password);

                $query = "SELECT username FROM student_data WHERE username='".$Username."'";

                if($query_run = mysqli_query($conn,$query)){

                    $query_rows = mysqli_num_rows($query_run);

                    if($query_rows >= 1){
                        echo 'Username'.$Username.'already exists.';
                    }
                    else{
                        $query = "INSERT INTO student_details VALUES (''      ,'".mysqli_real_escape_string($conn,$First_Name)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Middle_Name)."'    ,'".mysqli_real_escape_string($conn,$Last_Name)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Image)."','".mysqli_real_escape_string($conn,$Sex)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Dob)."','".mysqli_real_escape_string($conn,$Personal_Contact)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Father_Name)."','".mysqli_real_escape_string($conn,$Mother_Name)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Father_Contact)."','".mysqli_real_escape_string($conn,$Mother_Contact)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Branch)."','".mysqli_real_escape_string($conn,$Stream)."'
                        
                        ,'".mysqli_real_escape_string($conn,$_10th_Board)."','".mysqli_real_escape_string($conn,$_12th_Board)."'
                        
                        ,'".mysqli_real_escape_string($conn,$_10th_School)."','".mysqli_real_escape_string($conn,$_12th_School)."'
                        
                        ,'".mysqli_real_escape_string($conn,$_10th_Percent)."','".mysqli_real_escape_string($conn,$_12th_Percent)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Username)."','".mysqli_real_escape_string($conn,$Confirm_Password_Hash)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Cur_Address)."','".mysqli_real_escape_string($conn,$Cur_Area_Colony)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Cur_City)."','".mysqli_real_escape_string($conn,$Cur_State)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Cur_Zip)."','".mysqli_real_escape_string($conn,$Cur_Address)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Cur_Area_Colony)."','".mysqli_real_escape_string($conn,$Cur_City)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Cur_State)."','".mysqli_real_escape_string($conn,$Cur_Zip)."')";

                        

                    }       //else over

                }      //if over

            }

        }else echo 'Something is empty.';
    }elseif (isset($_POST['First_Name'])          && isset($_POST['Middle_Name'])      && isset($_POST['Last_Name'])

        && isset($_POST['Image'])           && isset($_POST['Sex'])              && isset($_POST['Dob'])

        && isset($_POST['Personal_Contact'])&& isset($_POST['Father_Name'])      && isset($_POST['Mother_Name'])

        && isset($_POST['Father_Contact'])  && isset($_POST['Mother_Contact'])   && isset($_POST['Branch'])

        && isset($_POST['Stream'])          && isset($_POST['10th_Board'])       && isset($_POST['12th_Board'])

        && isset($_POST['10th_School'])     && isset($_POST['12th_School'])      && isset($_POST['10th_Percent'])

        && isset($_POST['12th_Percent'])    && isset($_POST['Username'])            && isset($_POST['Password'])

        && isset($_POST['Confirm_Password'])&& isset($_POST['Cur_Address'])      && isset($_POST['Cur_Area_Colony'])

        && isset($_POST['Cur_City'])        && isset($_POST['Cur_State'])        && isset($_POST['Cur_Zip'])

        && isset($_POST['Per_Address'])     && isset($_POST['Per_Area_Colony'])  && isset($_POST['Per_City'])

        && isset($_POST['Per_State'])       && isset($_POST['Per_Zip'])          && isset($_POST['Submit']))    {

        $First_Name = $_POST['First_Name'];

        $Middle_Name = $_POST['Middle_Name'];

        $Last_Name = $_POST['Last_Name'];

        $Image = $_POST['Image'];

        $Sex = $_POST['Sex'];

        $Dob = $_POST['Dob'];

        $Personal_Contact = $_POST['Personal_Contact'];

        $Father_Name = $_POST['Father_Name'];

        $Mother_Name = $_POST['Mother_Name'];

        $Father_Contact = $_POST['Father_Contact'];

        $Mother_Contact = $_POST['Mother_Contact'];

        $Branch = $_POST['Branch'];

        $Stream = $_POST['Stream'];

        $_10th_Board = $_POST['10th_Board'];

        $_12th_Board = $_POST['12th_Board'];

        $_10th_School = $_POST['10th_School'];

        $_12th_School = $_POST['12th_School'];

        $_10th_Percent = $_POST['10th_Percent'];

        $_12th_Percent = $_POST['12th_Percent'];

        $Username = $_POST['Username'];

        $Password = $_POST['Password'];

        $Confirm_Password = $_POST['Confirm_Password'];
        $Confirm_Password_Hash= NULL;

        $Cur_Address = $_POST['Cur_Address'];

        $Cur_Area_Colony = $_POST['Cur_Area_Colony'];

        $Cur_City = $_POST['Cur_City'];

        $Cur_State = $_POST['Cur_State'];

        $Cur_Zip = $_POST['Cur_Zip'];

        $Per_Address = $_POST['Per_Address'];

        $Per_Area_Colony = $_POST['Per_Area_Colony'];

        $Per_City = $_POST['Per_City'];

        $Per_State = $_POST['Per_State'];

        $Per_Zip = $_POST['Per_Zip'];

        $Submit = $_POST['Submit'];

        $Same_As_Cur_Address = $_POST['Same_As_Cur_Address'];

        if(!empty($First_Name)         && !empty($Middle_Name)      && !empty($Last_Name)        && !empty($Image)

            && !empty($Sex)            && !empty($Dob)              && !empty($Personal_Contact) && !empty($Father_Name)

            && !empty($Mother_Name)    && !empty($Father_Contact)   && !empty($Mother_Contact)   && !empty($Branch)

            && !empty($Stream)         && !empty($_10th_Board)      && !empty($_12th_Board)      && !empty($_10th_School)

            && !empty($_12th_School)   && !empty($_10th_Percent)    && !empty($_12th_Percent)    && !empty($Username)

            && !empty($Password)       && !empty($Confirm_Password) && !empty($Cur_Address)      && !empty($Cur_Area_Colony)

            && !empty($Cur_City)       && !empty($Cur_State)        && !empty($Cur_Zip)          && !empty($Per_Address)

            && !empty($Per_Area_Colony)&& !empty($Per_City)         && !empty($Per_State)        && !empty($Per_Zip)

            && !empty($Submit)){

            if($Password != $Confirm_Password){
                echo 'Passwords do not match';
            }      //if over
            else{
                $Confirm_Password_Hash = md5($Confirm_Password);

                $query = "SELECT username FROM student_data WHERE username='".$Username."'";

                if($query_run = mysqli_query($conn,$query)){

                    $query_rows = mysqli_num_rows($query_run);

                    if($query_rows >= 1){
                        echo 'Username'.$Username.'already exists.';
                    }
                    else{
                        $query = "INSERT INTO student_details VALUES (''      ,'".mysqli_real_escape_string($conn,$First_Name)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Middle_Name)."'    ,'".mysqli_real_escape_string($conn,$Last_Name)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Image)."','".mysqli_real_escape_string($conn,$Sex)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Dob)."','".mysqli_real_escape_string($conn,$Personal_Contact)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Father_Name)."','".mysqli_real_escape_string($conn,$Mother_Name)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Father_Contact)."','".mysqli_real_escape_string($conn,$Mother_Contact)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Branch)."','".mysqli_real_escape_string($conn,$Stream)."'
                        
                        ,'".mysqli_real_escape_string($conn,$_10th_Board)."','".mysqli_real_escape_string($conn,$_12th_Board)."'
                        
                        ,'".mysqli_real_escape_string($conn,$_10th_School)."','".mysqli_real_escape_string($conn,$_12th_School)."'
                        
                        ,'".mysqli_real_escape_string($conn,$_10th_Percent)."','".mysqli_real_escape_string($conn,$_12th_Percent)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Username)."','".mysqli_real_escape_string($conn,$Confirm_Password_Hash)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Cur_Address)."','".mysqli_real_escape_string($conn,$Cur_Area_Colony)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Cur_City)."','".mysqli_real_escape_string($conn,$Cur_State)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Cur_Zip)."','".mysqli_real_escape_string($conn,$Per_Address)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Per_Area_Colony)."','".mysqli_real_escape_string($conn,$Per_City)."'
                        
                        ,'".mysqli_real_escape_string($conn,$Per_State)."','".mysqli_real_escape_string($conn,$Per_Zip)."')";



                    }       //else over
                }      //if over
            }       //else over

        }else
            echo 'Something is empty.';

    }else
        echo 'Enter data into all fields.';

} else echo 'You\'re Logged In';

?>