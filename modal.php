<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p id="modalHead">Add Students</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="submit.php" method="post">
          <div class="form-group">
            <label for="name">Name</label>
            <input required type="text" name="name" class="form-control">

            <label for="address">Address</label>
            <input required type="text" name="address" class="form-control">

            <label for="age">Age</label>
            <input required type="number" name="age" class="form-control">

            <label for="email">Email</label>
            <input required type="email" name="email" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="add">
      </div>
      </form>
    </div>
  </div>
</div>