<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 100vh;">
    <a href="./dashboard.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <span class="fs-4">CVResume</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="./dashboard.php" class="nav-link <?php if($page=='education') echo 'active' ?>" aria-current="page">
          Education
        </a>
      </li>
      <li>
        <a href="./dashboard.php?page=employment" class="nav-link <?php if($page=='employment') echo 'active' ?>">
          Employment
        </a>
      </li>
      <li>
        <a href="./dashboard.php?page=project" class="nav-link <?php if($page=='project') echo 'active' ?>">
          Project
        </a>
      </li>
      <li>
        <a href="./dashboard.php?page=testimonial" class="nav-link <?php if($page=='testimonial') echo 'active' ?>">
          Testimonial
        </a>
      </li>
      <li>
        <a href="./dashboard.php?page=contact" class="nav-link <?php if($page=='contact') echo 'active' ?>">
          Contact
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src=".<?= $_SESSION['user']['image'] ?>" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong><?= $_SESSION['user']['username'] ?></strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item" href="./dashboard.php?page=profile">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="./signout.php">Sign out</a></li>
      </ul>
    </div>
  </div>