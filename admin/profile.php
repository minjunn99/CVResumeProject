<?php
$user = $_SESSION['user'];
?>

<div class="dashboard">
  <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div>
                  <div class="card" style="width: 100%">
                      <div class="card-header">Profile</div>
                      <div class="card-body">
                          <div class="form-group mb-2">
                              <label class="d-block mb-1" for="image">Image</label>
                              <img src=".<?php echo $user['image']; ?>" style="width: 200px; aspect-ratio: 1; object-fit: cover;" alt="">
                          </div>
                          <div class="form-group mb-2">
                              <label for="full_name">Full Name</label>
                              <p class="form-control">
                                <?php echo $user['full_name']; ?>
                              </p>
                          </div>
                          <div class="form-group mb-2">
                              <label for="description">Description</label>
                              <p class="form-control">
                                <?php echo $user['description']; ?>
                              </p>
                          </div>
                          <div class="form-group mb-2 mt-3">
                              <button type="submit" class="btn btn-primary w-25" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="edit_profile.php?id=<?= $user['id'] ?>" method="POST">
            <div class="mb-3">
              <label for="image" class="col-form-label">Image</label>
              <input type="text" class="form-control" name="image" id="image" value="<?php echo $user['image'];?>">
            </div>
            <div class="mb-3">
              <label for="fullname" class="col-form-label">Full Name</label>
              <input type="text" class="form-control" name="full_name" id="fullname" value="<?php echo $user['full_name'];?>">
            </div>
            <div class="mb-3">
              <label for="message" class="col-form-label">Description</label>
              <textarea class="form-control" id="message" name="description"><?php echo $user['description']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>