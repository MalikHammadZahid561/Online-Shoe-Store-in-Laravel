<!DOCTYPE html>
<html>
<head>
<title>Update </title>
<!-- For Success alert that appears after deletion -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.c
ss">
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
<h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">
Update Customer Record
</h2>
<form action="{{ route ('customer.update', $customers->name) }}" method="post">
@csrf
<label for="name">Name: &nbsp;</label>
<input type="text" id="name" name="name" value="{{$customers->name}}"><br><br>
<label for="address">Address: &nbsp;</label>
<input type="text" id="address" name="address" value="{{$customers->name}}"><br><br>
<label for="telNo">Tel.No.: &nbsp;</label>
<input type="text" id="telNo" name="telNo" value="{{$customers->telNo}}"><br><br>
<label for="email">email: &nbsp;</label>
<input type="text" id="email" name="email" value="{{$customers->email}}"><br><br>

<input type="submit" value="Update">
</form>
</body>
</html>