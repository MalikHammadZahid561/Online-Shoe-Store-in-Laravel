<!DOCTYPE html>
<html>
<head>
<title>Delete Details</title>
<!-- For Success alert that appears after deletion -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.
css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h2 style="border: 1px solid black; background-color:red; text-align:center;">
Delete Shoes Details
</h2>
<!-- For Redirecting With Flashed Session Data when 'Submit' button -->
<!-- is pressed in the 'create.blade.php' view which calls the relevant -->
<!-- function 'store' in the StudentController and then this -->
<!-- view, 'create.blade.php' is again called -->
<!-- START -->
@if (session('status'))
<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
{{ session('status') }}
</div>
@endif
<!-- END -->
<form action="{{ route ('shoe.store') }}" method="post">
@csrf
<label for="shoeId"> SHOEID: &nbsp;</label>
<input type="text" id="shoeId" name="shoeId" value="12101"><br><br>
<label for="brand">Brand: &nbsp;</label>
<input type="text" id="brand" name="brand" value="Nike"><br><br>
<label for="price">Price: &nbsp;</label>
<input type="text" id="price" name="price" value="1500"><br><br>
<label for="size">Size: &nbsp;</label>
<input type="text" id="size" name="size" value="43"><br><br>
<label for="colour">Colour: &nbsp;</label>
<input type="text" id="colour" name="colour" value="black"><br><br>
<label for="quantity">Quantity: &nbsp;</label>
<input type="text" id="quantity" name="quantity" value="18"><br><br>
<input type="submit" value="Delete">
</form>
</body>
</html>