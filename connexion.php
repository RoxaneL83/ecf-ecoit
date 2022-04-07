<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <title>Ecoit</title>
    <style>
section {
  margin: 20px;
}
input {
  outline: none;
  padding: 6px 20px;
}
.input {
  margin-bottom: 20px;
}
input[type="submit"] {
  outline: none;
  padding: 10px 20px;
  border-radius: 6px;
  background-color: #48c;
  color: #fff;
  border: none;
  width: 300px;
  cursor: pointer;
}
input[type="submit"]:hover {
  background-color: #6ad;
}
#erreur {
  background-color: #8FB43A;
  color: white;
  padding: 10px;
  width: 60%;
  display: block;
    margin-left: auto;
    margin-right: auto 
} 
    </style>
</head>
<body>
    <header>
        <?php include('header.php'); ?>

    </header>

<?php
    @$email=$_POST["email"];
    @$password=$_POST["password"];
    @$valider=$_POST["valider"];
    $erreur='';

    if(isset($valider)){
        if(empty($email)) $erreur="<li>Veuillez saisir votre email</li>";
        if(empty($password)) $erreur.="<li>Veuillez saisir votre mot de passe</li>";
    };
?>             
        <h1 class="p-5 d-flex justify-content-center">Se connecter</h1>

        <section class="d-flex justify-content-center">
        <form class="row" name="form" method="post" action="">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" value="<?php echo $email?>">
            
            
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password1">
            </div>
            
            <button type="submit" class="btn btn-primary" name="valider" value="Me connecter">Me connecter</button>
        </form>
       
        
        
    </section>

      <div class="row d-inline justify-content-center">
          <!-- Condition d'affichage du message d'erreur -->
        <?php if(!empty($erreur)){ ?>
            <div id="erreur"><?php echo $erreur?></div>
        <?php } ?>
        </div>


    <footer>
      <?php include('footer.php'); ?>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>








       