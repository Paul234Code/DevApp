<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
   <title>Formulaire contact</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h1 class="text-center mb-lg-5 mt-lg-5">Informations du client</h1>
<form action="../php/contact.php" method="post" class="container border mb-3 pb-lg-5">
   <div class="container">
   <div class="mb-3 mt-3">
      <label for="prenom" class="form-label"><strong>Prenom:</strong></label>
      <input type="text" class="form-control" id="prenom" placeholder="Enter prenom" name="prenom" required>
   </div>
   <div class="mb-3">
      <label for="nom" class="form-label"><strong>Nom:</strong></label>
      <input type="text" class="form-control" id="nom" placeholder="Enter nom" name="nom" required>
   </div>
   <div class="mb-3">
      <label for="email" class="form-label"><strong>Email:</strong></label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
   </div>
   <div class="mb-3">
      <label for="commentaire" class="form-label"><strong>Commentaire:</strong></label>
      <textarea class="form-control" rows="5" placeholder="Enter commentaire" id="commentaire" name="commentaire"></textarea>
   </div>
   <div class="mb-3">
      <label for="date" class="form-label"><strong>Date:</strong></label>
      <input type="text" class="form-control mb-5" id="date" placeholder="Enter date" name="date">
   </div>
   </div>
   <div class="row text-center">
      <div class="col">
         <input type="reset" class="btn btn-primary btn-lg ms-lg-5" name="effacer" value="effacer">
         <input type="submit" class="btn btn-light btn-lg ms-lg-5" name="envoyer" value="Envoyer">
      </div>
   </div>
</form>
</body>
</html>