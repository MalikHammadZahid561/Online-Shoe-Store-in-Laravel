<!doctype html>
<head>
<title>View Customer Data</title>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
<!-- NOTE: -->
<!-- Below W3Schools link can be used to study different buttons -->
<!-- https://www.w3schools.com/howto/howto_css_icon_buttons.asp -->
<!-- For Success alert that appears after deletion -->
<meta charset="utf-8">
<meta address="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.c
ss">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<!-- Cascading Style Sheet applied to different parts of the table -->
<!-- START -->
<style>
        table,
        th,
        td {
            border: 1px solid black;
            text-align: center;
        }
        
        table {
            /* margin: 25px; */
            width:80%;
            margin:0 auto;
        }
        
        th,
        td {
            padding: 5px;
        }
        
        .card {
            padding: 20px;
            margin: 20px;
        }
        
        h2 {
            border: 1px solid black;
            background-color: DodgerBlue;
            text-align: center;
            padding: 10px;
            color: white;
        }
        
        .btn {
            border: 1px solid;
            margin-right: 5px;
        }
    </style>
<!-- END -->
<body>
<h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">
View Customer Details
</h2>

@if (session('status'))
<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
{{ session('status') }}
</div>
@endif
<!-- END -->
<table>
<thead>
<tr>
<th>Name</th>
<th>Address</th>
<th>Tel.No.</th>
<th>Email</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<p id="forDeleteCode"></p>
<!-- Using Blade Loop. -->
@foreach ($customers ?? '' as $customer)
<tr>
<td>{{$customer->name}}</td>
<td>{{$customer->address}}</td>
<td>{{$customer->telNo}}</td>
<td>{{$customer->email}}</td>


<td>{{$customer->city->city_id}}</td>

<!-- Buttons with Icons -->
<td>
    
<a class="btn btn-primary btn-md"  href="{{URL::to('customer/edit', $customer->name)}}" title="Edit -> {{$customer->name}}"> <i class="fa fa-edit"></i>Edit</a>
<a class="btn btn-success btn-md"  href="{{URL::to('customer/delete', $customer->name)}}" onclick="return confirm ('Are you sure to delete the customer {{$customer->address}} having name {{$customer->name}}?')" title="Delete -> {{$customer->name}}"> <i class="fa fa-trash"></i>Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>