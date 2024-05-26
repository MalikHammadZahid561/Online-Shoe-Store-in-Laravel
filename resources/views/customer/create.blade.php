<!DOCTYPE html>
<html>
<head>
    <title>Add New Customer</title>
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
        
        .alert {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        
        .alert-success {
            background-color: #dff0d8;
            border-color: #d6e9c6;
            color: #3c763d;
        }
        
        .close {
            float: right;
            font-size: 20px;
            font-weight: bold;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .2;
        }
        
        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
            opacity: .5;
        }
    </style>
</head>
<body>
    <h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">
    Add New Customer
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
    <form action="{{ route ('customer.store') }}" method="post">
        @csrf
        
 <label for="name">Name: &nbsp;</label>
 <input type="text" id="name" name="name" value=""><br><br>
 <label for="address">Address: &nbsp;</label>
 <input type="text" id="address" name="address" value=""><br><br>
 <label for="telNo">Tel.No.: &nbsp;</label>
 <input type="text" id="telNo" name="telNo" value=""><br><br>
 <label for="email">Email: &nbsp;</label>
 <input type="text" id="email" name="email" value=""><br><br>
 <input type="submit" value="Submit">

 <!-- For the dropdown City-->
 <label for="city">City: &nbsp;</label>
 <select for="dropdown" name="city_id">
 @foreach($citys as $city)
 <option value="{{$city->id}}">
 {{$city->name}}
 </option>
 @endforeach
 </select>
 <br><br>
    </form>
</body>
</html>