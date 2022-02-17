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
<form action="<?php  echo $_SERVER['PHP_SELF']?>" method="post" class="border container mb-3 pb-lg-5" >
   <div class="container">
      <div class="mb-3 mt-3">
         <label for="code" class="form-label "><strong>Code:</strong></label>
         <input type="text" class="form-control" id="code" placeholder="Enter code" name="code">
      </div>
   </div>
</form>
<!-- Code PHP---->
<?php
// inclusion du fichier de connection
include_once ("../php/Connection.php")

?>

</body>
</html>