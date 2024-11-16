<?php require_once('./assets/layout/header.php'); ?>

<div class="container section-title">
         <h1><b>Login</b></h1>
        <form>
             <div class="form-group">
                 <label for="username">Benutzername:</label>
                 <input type="text" class="form-control" id="username" placeholder="Name eingeben">
             </div>
             <div class="form-group">
                 <label for="password">Passwort:</label>
                 <input type="password" class="form-control" id="password" placeholder="Passwort eigeben">
             </div>
             <button type="submit" class="btn-get-started animate__animated animate__fadeInUp scrollto">Einloggen</button>

         </form>
    </div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <br>

<?php require_once('./assets/layout/footer.php'); ?>