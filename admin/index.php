<?php

include(dirname(__FILE__)."/includes/header.php");

?>

<main class="form-signin">
  <form class="mx-auto text-center" action="./login.php" method="POST">
    <a class="text-decoration-none text-uppercase fs-2 fw-semibold text-body" href="/cvresume/admin">arnold</a>
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name="username" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">Sign in</button>
  </form>
</main>

<?php include(dirname(__FILE__)."/includes/footer.php"); ?>