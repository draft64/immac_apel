<?php
if(isset($_POST['postsubmit'])) {
   if(!empty($_POST['username']) AND !empty($_POST['email']) AND !empty($_POST['message'])) {
      $header="MIME-Version: 1.0\r\n";
      $header.='From:"nom_d\'expediteur"<123@mail.com>'."\n";
      $header.='Content-Type:text/html; charset="UTF-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';
      $message='
      <html>
         <body>
            <div align="center">
               <br />
               <u>Nom de l\'expéditeur :</u>'.$_POST['username'].'<br />
               <u>Mail de l\'expéditeur :</u>'.$_POST['email'].'<br />
               <br />
               '.nl2br($_POST['message']).'
               <br />
            </div>
         </body>
      </html>
      ';
      mail("mail@destinataire.com", "Sujet du message", $message, $header);
      $msg="Votre message a bien été envoyé !";
   } else {
      $error="Tous les champs doivent être complétés !";
   }
}
?>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>APEL | Ensemble scolaire Immaculée Conception</title>
	<link rel="stylesheet" href="css/app.css">
	<link rel="icon" href="public/images/favicon.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,400&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script defer src="js/app.js"></script>
</head>
<body id="swup" class="transition-fade">
   <div id="background-opacity"></div>
	<?php include 'inc/header.php' ?>
	<div class="container">
      <div class="contact">
         <h1>Nous contacter</h1>
         <form method="POST">
            <div class="row">
               <div class="col">
                  <label for="name">Nom : <span style="color: red">*</span> </label>
                  <input type="text" name="username" class="field-input1">
               </div>
               <div class="col">
                  <label for="email">Adresse e-mail : <span style="color: red">*</span> </label>
                  <input type="email" name="email" class="field-input1">
               </div>
            </div><br>
               <div class="col">
                  <label for="message">Message  <span style="color: red">*</span> </label>
                  <textarea name="message" id="message" cols="40" rows="10" class="field-input"></textarea>
               </div><br>
               <div align="right"><button class="button_submit">Envoyer</button></div>
               <div class="coordon">
                  <p><strong>Adresse e-mail :</strong>   apel.bal.immac@gmail.com</p>
                  <p><strong>Adresse :</strong>   A.P.E.L Immaculée Conception Pau Bd Edouard Herriot</p>
               </div>
         </form>
      </div>
		<?php include 'inc/aside.php'; ?>
	</div>
</div>
	<?php include 'inc/footer.php'; ?>
</body>
</html>