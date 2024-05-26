<!DOCTYPE html>
<html>
<head>
    <title>Update Shoe</title>
    <!-- For Success alert that appears after deletion -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            padding: 20px;
        }
        
        h2 {
            border: 1px solid black;
            background-color: DodgerBlue;
            text-align: center;
            padding: 10px;
            color: white;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            background-color: DodgerBlue;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        
        input[type="submit"]:hover {
            background-color: RoyalBlue;
        }
    </style>
</head>
<body>
    <h2>Update Shoe Record</h2>
    <form action="{{ route('shoe.update', $shoes->shoeId) }}" method="post">
        @csrf
        <label for="shoeId">ShoeID:</label>
        <input type="text" id="shoeId" name="shoeId" value="{{$shoes->shoeId}}">
        
        <label for="brand">Brand:</label>
        <input type="text" id="brand" name="brand" value="{{$shoes->name}}">
        
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{$shoes->price}}">
        
        <label for="size">Size:</label>
        <input type="text" id="size" name="size" value="{{$shoes->size}}">
        
        <label for="colour">Colour:</label>
        <input type="text" id="colour" name="colour" value="{{$shoes->colour}}">
        
        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity" value="{{$shoes->quantity}}">
        
        <input type="submit" value="Update">
    </form>
</body>
</html>
