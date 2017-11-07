<?php
echo "<div class='modal' id='myModal' role='dialog'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        Log In
      </div>
      <div class='modal-body'>
        <form>
          <div class='form-group'>
            <label for='name'>Name:</label>
            <input type='text' class='form-control' id='name'></input>
          </div>
          <div class='form-group'>
            <label for='email'>Email:</label>
            <input type='text' class='form-control' id='email'></input>
          </div>
          <div class='form-group form-inline'>
            <label><input type='checkbox'> Remember Me</input></label>
          </div>
          <div class='form-group'>
            <button type='submit' class='btn btn-success'>Submit</button>
          </div>
        </form>
      </div>
      <div class='modal-footer'>
      </div>
    </div>
  </div>
</div>";
?>
