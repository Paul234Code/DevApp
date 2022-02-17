<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
   <title>Ajouter un produit</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h2 class="text-center">Ajouter un produit</h2>
<form action="../php/Validation.php" method="post" class="border container mb-3 pb-lg-5" >
   <div class="container">
      <div class="mb-3 mt-3">
         <label for="code" class="form-label "><strong>Code:</strong></label>
         <input type="text" class="form-control" id="code" placeholder="Enter code" name="code">
      </div>
      <div class="mb-3">
         <label for="nom" class="form-label"><strong>Nom:</strong></label>
         <input type="text" class="form-control" id="nom" placeholder="Enter nom" name="nom">
      </div>
      <div class="mb-3">
         <label for="price" class="form-label"><strong>Price:</strong></label>
         <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
      </div>
      <div class="mb-3">
         <label for="description" class="form-label"><strong>Description:</strong></label>
         <input type="text" class="form-control" id="description" placeholder="Description" name="description">
      </div>
      <div class="mb-3">
         <label for="date" class="form-label"><strong>Date:</strong></label>
         <input type="text" class="form-control" id="date" placeholder="Enter date" name="date">
      </div>
   <div class="row text-center">
      <div class="col">
         <button type="reset" class="btn btn-primary btn-lg me-lg-5" name="reset">effacer</button>
         <button type="submit" class="btn btn-light btn-lg" name="submit">validation</button>
      </div>
   </div>
   </div>
</form>

</body>
</html>