<?php include 'layout/header.php'; ?>




<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form> 
  <div class="form-group">
    <label for="exampleInputEmail1">Username:</label>
    <input type="text" class="form-control" id="exampleInputEmail1">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Password:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" >
  </div>


  <button type="submit" class="btn btn-primary" name="submit">Login</button>
</form>
      </div>
    
    </div>
  </div>
</div>