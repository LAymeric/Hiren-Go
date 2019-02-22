<?php
include "head.php";
include "navbar.php";
?>
    <div class="wrapper" id="wrapper-login">
      <h1>Connexion</h1>
      <h2>En route !</h2>
    </div>

    <div class="container center_div register-form">

        <form method="POST" action="script/userLogin.php">

        <div class="form-group">
            <label for="email">EMAIL</label>
            <input type="email" class="form-control" placeholder="du@pont.fr" name="email" value="" required="required">
        </div>

        <div class="form-group">
            <label for="pwd">MOT DE PASSE</label>
            <input type="password" class="form-control" name="pwd" required="required">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-secondary">Se connecter</button>
        </div>

        <p class="font-weight-light">
            <a href="index.php" style="font-size: 14px; text-decoration: none; color: #000;">( Don’t have an account? )</a>
        </p>

        </form>

    </div>
    <div class="push"></div>



<?php
    include "footer.php";
?>