<!DOCTYPE html>
<html>
<head>
  <title>Xaviers College</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/blueimp-gallery.min.css">
  <link rel="stylesheet" href="css/register_style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9CIiUxwau0dS8VzAc1X_bTv7kLRDP0mk&callback=myMap"></script>-->
</head>

<?php require_once 'register_data.php'; ?>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<?php require_once 'header.php'; ?>

<form style="margin-top:100px;" name="form1"  method="POST">
  <fieldset>
    <legend>Personal Details</legend>
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputFirst_Name4" class="col-form-label">First Name</label>
        <input type="text" autocomplete="on" class="form-control" id="inputFirst_Name4" value="<?php echo isset($First_Name) ? $First_Name : '' ?>" placeholder="First Name" name="First_Name" maxlength="15" required>
      </div>
      <div class="form-group col-md-3">
        <label for="inputMiddle_Name4" class="col-form-label">Middle Name</label>
        <input type="text" autocomplete="on" class="form-control" id="inputMiddle_Name4" placeholder="Middle Name" name="Middle_Name" maxlength="15">
      </div>
      <div class="form-group col-md-3">
        <label for="inputLast_Name4" class="col-form-label">Last Name</label>
        <input type="text" autocomplete="on" class="form-control" id="inputLast_Name4" placeholder="Last Name" name="Last_Name" maxlength="15" required>
      </div>
      <div class="form-group col-md-3">
          <div style="margin-bottom:-20px; margin-left:80px; margin-top: -10px; width: 180px; height: 155px;">
              <input type="image" class="form-control-file" src="images/passport.jpeg" style="margin-bottom: 4px; width: 110px; height:120px;" name="Show_Image" alt="Submit">
              <input type="file" class="form-control-file"  accept="image/*" id="exampleFormControlFile1" name="Image_Chosen" value="fileupload" required></input>
          </div>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="exampleFormControlSex1" class="col-form-label">Sex</label>
        <select class="form-control" id="exampleFormControlSex1" name="Sex" value="0" required>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>
      </div>

      <div class="form-group col-md-4">
        <label for="inputDob4" class="col-form-label">Date of Birth</label>
        <input type="date" class="form-control" id="inputDob4" placeholder="DD-MM-YYYY" name="Dob" required>
      </div>
      <div class="form-group col-md-4">
        <label for="inputPersonal_Contact4" class="col-form-label">Personal Contact</label>
        <input type="number" class="form-control" id="inputPersonal_Contact4" placeholder="Personal_Contact" name="Personal_Contact" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputFather_Name4" class="col-form-label">Father Name</label>
        <input type="text" class="form-control" id="inputFather_Name4" placeholder="Father Name" name="Father_Name" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputMother_Name4" class="col-form-label">Mother Name</label>
        <input type="text" class="form-control" id="inputMother_Name4" placeholder="Mother Name" name="Mother_Name" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputFather_Contact4" class="col-form-label">Father Contact</label>
        <input type="number" class="form-control" id="inputFather_Contact4" placeholder="Father Contact" name="Father_Contact" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputMother_Contact4" class="col-form-label">Mother Contact</label>
        <input type="number" class="form-control" id="inputMother_Contact4" placeholder="Mother Contact" name="Mother_Contact" required>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>College Details</legend>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputBranch4" class="col-form-label">Branch</label>
        <input type="text" class="form-control" id="inputBranch4" placeholder="Branch" name="Branch" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputStream4" class="col-form-label">Stream</label>
        <input type="text" class="form-control" id="inputStream4" placeholder="Stream"name="Stream" required>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>School Details</legend>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="input10th_Board4" class="col-form-label">10<sup>th</sup> Board</label>
        <input type="text" class="form-control" id="input10th_Board4" placeholder="10th Board" name="10th_Board" required>
      </div>
      <div class="form-group col-md-6">
        <label for="input12th_Board4" class="col-form-label">12<sup>th</sup> Board</label>
        <input type="text" class="form-control" id="input12th_Board4" placeholder="12th Board" name="12th_Board" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="input10th_School4" class="col-form-label">10<sup>th</sup> School</label>
        <input type="text" class="form-control" id="input10th_School4" placeholder="10th School" name="10th_School" required>
      </div>
      <div class="form-group col-md-6">
        <label for="input12th_School4" class="col-form-label">12<sup>th</sup> School</label>
        <input type="text" class="form-control" id="input12th_School4" placeholder="12th School" name="12th_School" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="input10th_Percent4" class="col-form-label">10<sup>th</sup> Percentage</label>
        <input type="number" class="form-control" id="input10th_Percent4" placeholder="10th Percentage" name="10th_Percent" required>
      </div>
      <div class="form-group col-md-6">
        <label for="input12th_Percent4" class="col-form-label">12<sup>th</sup> Percentage</label>
        <input type="number" class="form-control" id="input12th_Percent4" placeholder="12th Percentage" name="12th_Percent" required>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>Account Details</legend>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="inputEmail4" class="col-form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="Username" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4" class="col-form-label">Password</label>
        <input type="password" class="form-control" id="inputEmail4" placeholder="Password" minlength="8" maxlength="20" name="Password" onkeyup="check_v_pass()" required>
        <small class="text-muted">
        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
        </small>
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4" class="col-form-label">Confirm Password</label>
        <input type="password" class="form-control" id="inputEmail4" placeholder="Confirm Password" minlength="8" maxlength="20" name="Confirm_Password" onkeyup="compare_valid('Password','Confirm_Password')" required>
        <small class="text-muted">
        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
        </small>
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend>Current Address</legend>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="inputCur_Address" class="col-form-label">Current Address</label>
        <input type="text" class="form-control" id="inputCur_Address" placeholder="#1234 Main St" name="Cur_Address" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="inputCur_Area_Colony2" class="col-form-label">Area/Colony</label>
        <input type="text" class="form-control" id="inputCur_Area_Colony2" placeholder="Area/Colony" name="Cur_Area_Colony" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCur_City" class="col-form-label">Current City</label>
        <input type="city" class="form-control" id="inputCur_City" name="Cur_City" required>
      </div>
      <div class="form-group col-md-4">
        <label for="inputCur_State" class="col-form-label">Current State</label>
        <select id="inputCur_State" class="form-control" name="Cur_State" required>
            <option disabled selected>Choose a State</option>
          <option>Andhra Pradesh</option>
          <option>Arunachal Pradesh</option>
          <option>Assam</option>
          <option>Bihar</option>
          <option>Chattisgarh</option>
          <option>Goa</option>
          <option>Gujarat</option>
          <option>Haryana</option>
          <option>Himachal Pradesh</option>
          <option>Jammu and Kashmir</option>
          <option>Jharkhand</option>
          <option>Karnataka</option>
          <option>Kerala</option>
          <option>Madhya Pradesh</option>
          <option>Maharashtra</option>
          <option>Manipur</option>
          <option>Meghalaya</option>
          <option>Mizoram</option>
          <option>Nagaland</option>
          <option>Orisha</option>
          <option>Punjab</option>
          <option>Rajasthan</option>
          <option>Sikkim</option>
          <option>Tamil Nadu</option>
          <option>Telangana</option>
          <option>Tripura</option>
          <option>Uttar Pradesh</option>
          <option>Uttarakhand</option>
          <option>West Bengal</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputCur_Zip" class="col-form-label">Current Zip</label>
        <input type="number" class="form-control" id="inputCur_Zip" name="Cur_Zip" required>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>Permanent Address</legend>

    <label><input type="checkbox" name="Same_As_Cur_Address"> Same as Current Address</input></label>

      <div class="form-row">
      <div class="form-group col-md-12">
        <label for="inputPer_Address" class="col-form-label">Permanent Address</label>
        <input type="text" class="form-control" id="inputPer_Address" placeholder="#1234 Main St" name="Per_Address">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="inputPer_Area_Colony2" class="col-form-label">Area/Colony</label>
        <input type="text" class="form-control" id="inputPer_Area_Colony2" placeholder="Area/Colony" name="Per_Area_Colony">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputPer_City" class="col-form-label">Permanent City</label>
        <input type="text" class="form-control" id="inputPer_City" name="Per_City">
      </div>
      <div class="form-group col-md-4">
        <label for="inputPer_State" class="col-form-label">Permanent State</label>
        <select id="inputState" class="form-control" name="Per_State">
            <option disabled selected>Choose a State</option>
            <option>Andhra Pradesh</option>
            <option>Arunachal Pradesh</option>
            <option>Assam</option>
            <option>Bihar</option>
            <option>Chattisgarh</option>
            <option>Goa</option>
            <option>Gujarat</option>
            <option>Haryana</option>
            <option>Himachal Pradesh</option>
            <option>Jammu and Kashmir</option>
            <option>Jharkhand</option>
            <option>Karnataka</option>
            <option>Kerala</option>
            <option>Madhya Pradesh</option>
            <option>Maharashtra</option>
            <option>Manipur</option>
            <option>Meghalaya</option>
            <option>Mizoram</option>
            <option>Nagaland</option>
            <option>Orisha</option>
            <option>Punjab</option>
            <option>Rajasthan</option>
            <option>Sikkim</option>
            <option>Tamil Nadu</option>
            <option>Telangana</option>
            <option>Tripura</option>
            <option>Uttar Pradesh</option>
            <option>Uttarakhand</option>
            <option>West Bengal</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputPer_Zip" class="col-form-label">Permanent Zip</label>
        <input type="number" class="form-control" id="inputPer_Zip" name="Per_Zip">
      </div>
    </div>
  </fieldset>

  <div class="form-group text-center">
    <button type="Submit" class="btn btn-info" style="padding:10px 20px;" name="Submit">Submit</button>
  </div>

</form>

<?php require_once 'modal.php'; ?>

<?php require_once 'footer.php'; ?>

<script>

    function check_v_pass(field, output) {
        pass_buf_value = document.getElementById('Password').value;
        pass_l evel = 0;
        if (pass_buf_value.match(/[a-z]/g)) {
            pass_level++;
        }
        if (pass_buf_value.match(/[A-Z]/g)) {
            pass_level++;
        }
        if (pass_buf_value.match(/[0-9]/g)) {
            pass_level++;
        }
        if (pass_buf_value.length < 5) {
            if(pass_level >= 1) pass_level--;
        } else if (pass_buf_value.length >= 20) {
            pass_level++;
        }
        output_val = '';
        switch (pass_level) {
            case 1: output_val='Weak'; break;
            case 2: output_val='Normal'; break;
            case 3: output_val='Strong'; break;
            case 4: output_val='Very strong'; break;

            default: output_val='Very weak'; break;
        }
        if (document.getElementById(output).value != pass_level) {
            document.getElementById(output).value = pass_level;
            document.getElementById(output).innerHTML = output_val;
        }
        return 1;
    }


    function compare_valid(field, field2) {
        var fld_val = document.getElementById(field).value;
        var fld2_val = document.getElementById(field2).value;
        var p_valid_r;
        if (fld_val == fld2_val) {
            update_css_class(field2, 2);
            p_valid_r = 1;
        } else {
            update_css_class(field2, 1);
            p_valid_r = 0;
        }
        return p_valid_r;
    }

    /*function validateDate(inputText) {
        var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
        // Match the date format through regular expression
        if(inputText.value.match(dateformat)) {
            document.form1.text1.focus();
            //Test which seperator is used '/' or '-'
            var opera1 = inputText.value.split('/');
            var opera2 = inputText.value.split('-');
            lopera1 = opera1.length;
            lopera2 = opera2.length;
            // Extract the string into month, date and year
            if (lopera1>1) {
                var pdate = inputText.value.split('/');
            }
            else if (lopera2>1) {
                var pdate = inputText.value.split('-');
            }
            var dd = parseInt(pdate[0]);
            var mm  = parseInt(pdate[1]);
            var yy = parseInt(pdate[2]);
            // Create list of days of a month [assume there is no leap year by default]
            var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];
            if (mm==1 || mm>2) {
                if (dd>ListofDays[mm-1]) {
                    alert('Invalid date format!');
                    return false;
                }
            }
            if (mm==2) {
                var lyear = false;
                if ( (!(yy % 4) && yy % 100) || !(yy % 400)) {
                    lyear = true;
                }
                if ((lyear==false) && (dd>=29)) {
                    alert('Invalid date format!');
                    return false;
                }
                if ((lyear==true) && (dd>29)) {
                    alert('Invalid date format!');
                    return false;
                }
            }
        }
        else {
            alert("Invalid date format!");
            document.form1.Dob.focus();
            return false;
        }
    }*/
</script>
</body>
</html>
