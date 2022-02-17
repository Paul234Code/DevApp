<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Supprimer un produit</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h1 class="text-center mb-lg-5 mt-lg-5">Supprimer un produit</h1>
<form action="../php/supprimer.php" method="post" class="border container mb-3 pb-lg-5" >
   <div class="container">
      <div class="mb-3 mt-3">
         <label for="Id" class="form-label "><strong>Id:</strong></label>
         <input type="text" class="form-control" id="Id" placeholder="Enter Id" name="Id" required>
      </div>
      <div class="mb-3 mt-3">
         <label for="code" class="form-label "><strong>Code:</strong></label>
         <input type="text" class="form-control" id="code" placeholder="Enter code" name="code" required>
      </div>
   </div>
   <div class="row text-center">
      <div class="col">
         <input type="reset" class="btn btn-primary btn-lg me-lg-5" name="reset" value="effacer">
         <input type="submit" class="btn btn-light btn-lg ms-lg-5" name="supprimer" value="supprimer">
      </div>
   </div>
</form>
</body>
</html>