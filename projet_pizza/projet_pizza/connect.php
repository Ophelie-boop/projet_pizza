<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/connect.css">

  <script src="https://kit.fontawesome.com/a076d05399.js"> </script>

  <script src="js/connect.js" defer></script>

   <!-- #### js ##### -->
  

  <!-- <script type="text/javascript"> 
        function validate() { 
            var msg; 
            var str = document.getElementById("mdp").value; 
            var str1 = document.getElementById("confirm_mdp").value;
            var mot = new String(str);
            var mot1 = new String(str1);
            if (mot === mot1){
                msg = "<p style='color:green'>Mot de passe fort.</p>"; 
            }
            else{ 
                msg = "<p style='color:red'>Mot de passe faible.</p>"; 
            document.getElementById("msg").innerHTML= msg; 
            }
        } 
  </script>  -->
  <title>Connectez-vous</title>
</head>

<body>
  
  <div class="container">
    <div class="logo">
      <i class="fas fa-user"></i>
    </div>
   <!-- #### connexion ###### -->
    <div class="tab-body" data-id="connexion">
      <form method="post" action="includes/get_connexion.php">
        <div class="row">
          <i class="fas fa-envelope"></i>
          <input type="email" class="input" placeholder="Adresse Mail" name="email" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input placeholder="Mot de Passe" type="password" class="input" name="mdp" required>
        </div>
        <a href="#" class="link">Mot de passe oublié ?</a>
        <input type="submit" class="btn" value="Se connecter" name="connexion" >
      </form>
    </div>

    <!-- #### inscritption ###### -->
    <div class="tab-body" data-id="inscription">
      <form method="post" action="includes/get_inscription.php">
        <div class="row">
          <i class="far fa-user"></i>
          <input type="email" class="input" placeholder="Adresse Mail" name="email" required>
        </div>
        <div class="row">
          <i class='fa fa-phone'></i>
          <input type="text" class="input" placeholder="Numéro de téléphone" name="phone" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" class="input" placeholder="Mot de Passe" name="password" id="mdp" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" class="input" placeholder="Confirmer Mot de Passe" name="confirm_password" id="confirm_mdp" required>
          <span id="msg"></span>
        </div>
          <input type="submit" class="btn" value="s'inscrire" name="inscription" onclick="validate()">
      </form>
    </div>

    <div class="tab-footer">
      <a class="tab-link active" data-ref="connexion" href="javascript:void(0)">Connexion</a>
      <a class="tab-link" data-ref="inscription" href="javascript:void(0)">Inscription</a>
      <p>Pas encore membre?<a href="inscription.php">s'incrire</a></p>
    </div>
  </div>

 
</body>

</html>