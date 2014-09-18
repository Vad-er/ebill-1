<!-- NOTE
SINGLE PAGE FORM ALONG WITH VALIDATION
NO PHP LEAKS BACK TO THE INDEX 
 -->
<?php
  require_once("Includes/config.php");
  require_once("Includes/session.php");
  ?>
<form class="navbar-form navbar-right" role="form" method="post">
    <div class="form-group">
        <input type="text" placeholder="Email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <input type="password" placeholder="Password" name="pass" class="form-control">
    </div>
    <div class="btn-group  btn-group-sm">
        <button type="submit" class="btn btn-success">Sign in</button>
        <button type="button" class="btn">Forgot Password</button>
    </div>
</form>
