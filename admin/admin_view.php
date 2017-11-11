<?php
/**
 * Created by PhpStorm.
 * User: cube
 * Date: 7/11/17
 * Time: 3:44 PM
 */ require_once 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Xaviers College</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9CIiUxwau0dS8VzAc1X_bTv7kLRDP0mk&callback=myMap"></script>
    <script type="text/javascript">
        var x;
        function selectBranch(branch) {
            x = document.getElementById("inputBranch").options[document.getElementById("inputBranch").selectedIndex].value;
            //alert(x);
            var XMLhttp = new XMLHttpRequest();
            XMLhttp.onreadystatechange = function () {
               if(XMLhttp.readyState == 4 && XMLhttp.status == 200){
                   var element = document.getElementById('Streams');
                   element.innerHTML = XMLhttp.responseText;
                   var script = element.getElementsByTagName('script');
                   for (var n = 0; n < script.length; n++) {
                       eval(script[n].innerHTML);
                   }
                }
            }
            XMLhttp.open('GET','B.Tech_Streams.php?branch='+x,true);
            XMLhttp.send();
        }

        function selectStream(stream){
            var x1 = document.getElementById('inputStream').options[document.getElementById('inputStream').selectedIndex].value;
            x2 = document.getElementById("inputBranch").options[document.getElementById("inputBranch").selectedIndex].value;
            //alert('This is Stream ' + x1);
            var XMLhttp1 = new XMLHttpRequest();
            XMLhttp1.onreadystatechange = function () {
                if(XMLhttp1.readyState==4 && XMLhttp1.status==200){
                    var element = document.getElementById('table');
                    element.innerHTML = XMLhttp1.responseText;
                    var arr = element.getElementsByTagName('script')
                    for (var n = 0; n < arr.length; n++) {
                        eval(arr[n].innerHTML);
                    }
                }
            }
            XMLhttp1.open('GET','Stream_result.php?branch='+x2+'&stream='+x1,true);
            XMLhttp1.send();
        }
        /*function selectStream(stream){
            x1 = document.getElementById('inputStream').options[document.getElementById('inputStream').selectedIndex].value;
            alert(x1);
            var XMLhttp1 = new XMLHttpRequest();
            XMLhttp1.onreadystatechange = function () {
                if(XMLhttp1.readyState==4 && XMLhttp1.status==200){
                    document.getElementById('table').innerHTML=XMLhttp1.responseText;
                }
            }
            XMLhttp1.open('GET','Stream_result.php?branch='+x+'stream='+x,true);
            XMLhttp1.send();
        }


        var newsc = '<script id="sc1" type="text/javascript">' +
            'function selectStream(stream){' +
            'x1 = document.getElementById("inputStream").options[document.getElementById("inputStream").selectedIndex].value' +
            'alert(x1)' +
        'var XMLhttp1 = new XMLHttpRequest()' +
        'XMLhttp1.onreadystatechange = function () {' +
        'if(XMLhttp1.readyState==4 && XMLhttp1.status==200){' +
        'document.getElementById("table").innerHTML' +
        '=XMLhttp1.responseText' +
        '}' +
        '}' +
        'XMLhttp1.open("GET","Stream_result.php?branch="+x+"stream="+x,true)' +
        'XMLhttp1.send()' +
        '}' +
        '<\/script>';
        var e = document.getElementById('inputStream');
        e.innerHTML = newsc;
        eval(document.getElementById('sc1').innerHTML);*/
    </script>
</head>
<body>
<form style="margin-top:100px;" name="form1"  method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>Choose Branch & Stream</legend>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputBranch" class="col-form-label">Branch</label>
                    <select id="inputBranch" class="form-control" name="Branch" onchange="selectBranch(this);" required>
                        <option >Choose a Branch</option>
                        <option>B.Tech</option>
                        <option>M.Tech</option>
                        <option>B.A</option>
                        <option>B.Design</option>
                        <option>MBA</option>
                        <option>B.Sc</option>
                        <option>B.Com</option>
                    </select>
            </div>

            <div class="form-group col-md-6" id="Streams"></div>

    </fieldset>
</form>
<div class="container-fluid" id="table"></div>
</body>
</html>

<?php require_once 'footer.php'; ?>