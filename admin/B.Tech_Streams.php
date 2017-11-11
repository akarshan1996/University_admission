<?php

if(isset($_REQUEST['branch']) && $_REQUEST['branch'] == "B.Tech") {

    echo '<label for="inputStream" class="col-form-label">Stream</label>
                <select id="inputStream" class="form-control" name="Stream" placeholder="Stream" onchange="selectStream(this);" required>
                    <option>Choose a Stream</option>
                    <option>CSE</option>
                    <option>ECE</option>
                    <option>Civil</option>
                    <option>Mechanical</option>
                    <option>BioTech</option>
                    <option>CSE(L.Entry)</option>
                    <option>ECE(L.Entry)</option>
                    <option>Civil(L.Entry)</option>
                    <option>Mechanical(L.Entry)</option>
                </select>';
} elseif (isset($_REQUEST['branch']) && $_REQUEST['branch']=="M.Tech") {
    echo '<label for="inputStream" class="col-form-label">Stream</label>
                <select id="inputStream" class="form-control" name="Stream" placeholder="Stream" onchange="selectStream(this);" required>
                    <option>Choose a Stream</option>
                    <option>CSE</option>
                    <option>ECE</option>
                    <option>Civil</option>
                    <option>Mechanical</option>
                    <option>Aeronautical</option>
                </select>';
} elseif (isset($_REQUEST['branch']) && $_REQUEST['branch']=="B.A") {
    echo '<label for="inputStream" class="col-form-label">Stream</label>
                <select id="inputStream" class="form-control" name="Stream" placeholder="Stream" onchange="selectStream(this);" required>
                    <option>Choose a Stream</option>
                    <option>English</option>
                    <option>English(Honors)</option>
                    <option>Hindi</option>
                    <option>Hindi(Honors)</option>
                    <option>Punjabi</option>
                </select>';
} elseif (isset($_REQUEST['branch']) && $_REQUEST['branch']=="B.Design") {
    echo '<label for="inputStream" class="col-form-label">Stream</label>
                <select id="inputStream" class="form-control" name="Stream" placeholder="Stream" onchange="selectStream(this);" required>
                    <option>Choose a Stream</option>
                    <option>Interior & Furniture</option>
                    <option>Multimedia & Animation</option>
                    <option>Product & Industrial</option>
                    <option>Journalism & Film Production</option>
                    <option>Fashion</option>
                </select>';
} elseif (isset($_REQUEST['branch']) && $_REQUEST['branch']=="MBA") {
    echo '<label for="inputStream" class="col-form-label">Stream</label>
                <select id="inputStream" class="form-control" name="Stream" placeholder="Stream" onchange="selectStream(this);" required>
                    <option>Choose a Stream</option>
                    <option>English</option>
                    <option>English(Honors)</option>
                    <option>Hindi</option>
                    <option>Hindi(Honors)</option>
                </select>';
} elseif (isset($_REQUEST['branch']) && $_REQUEST['branch']=="B.Sc") {
    echo '<label for="inputStream" class="col-form-label">Stream</label>
                <select id="inputStream" class="form-control" name="Stream" placeholder="Stream" onchange="selectStream(this);" required>
                    <option>Choose a Stream</option>
                    <option>Food and Nutrition</option>
                    <option>Chemistry</option>
                    <option>Maths</option>
                    <option>Physics</option>
                </select>';
} elseif (isset($_REQUEST['branch']) && $_REQUEST['branch']=="B.Com") {
    echo '<label for="inputStream" class="col-form-label">Stream</label>
                <select id="inputStream" class="form-control" name="Stream" placeholder="Stream" onchange="selectStream(this);" required>
                    <option>Choose a Stream</option>
                    <option></option>
                    <option>Chemistry</option>
                    <option>Maths</option>
                    <option>Physics</option>
                </select>';
}
?>

