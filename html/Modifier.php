<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
   <title>Modifier un produit</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h1 class="text-center mb-lg-5 mt-lg-5">Modifier un produit</h1>
<form action="<?php  echo $_SERVER['PHP_SELF']?>" method="post" class="border container mb-3 pb-lg-5" >
   <div class="container">
      <div class="mb-3 mt-3">
         <label for="code" class="form-label "><strong>Code:</strong></label>
         <input type="text" class="form-control" id="code" placeholder="Enter code" name="code">
      </div>
      <div class="mb-3">
         <label for="price" class="form-label"><strong>Price:</strong></label>
         <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
      </div>
   </div>
   <div class="row text-center">
      <div class="col">
         <button type="reset" class="btn btn-primary btn-lg me-lg-5" name="reset">effacer</button>
         <button type="submit" class="btn btn-light btn-lg ms-lg-5" name="submit">validation</button>
      </div>
   </div>

</form>
<!-- Code php --->
<?php
// inclusion du fichier de connection
include_once ("../php/Connection.php")

?>

</body>
</html>