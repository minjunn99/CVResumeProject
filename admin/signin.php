<div class="form-signin">
  <form class="mx-auto text-center" action="./signinaction.php" method="POST">
      <a class="text-decoration-none fs-2 text-uppercase fw-semibold text-body" href="./">cvresume</a>
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input type="text" class="form-control" name="username" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">Sign in</button>
  </form>
</div>