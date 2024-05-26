<!doctype html>
<html>
<head>
    <title>View Shoe Data</title>
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
    <!-- For Success alert that appears after deletion -->
    <meta charset="utf-8">
    <meta brand="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
</head>
<body>
    <div class="card">
        <div class="card-body">
            <h2>View Shoe</h2>
            @if (session('status'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('status') }}
            </div>
            @endif
            <table>
                <thead>
                    <tr>
                        <th>ShoeId</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Size</th>
                        <th>Colour</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <p id="forDeleteCode"></p>
                    @foreach ($shoes ?? '' as $shoe)
                    <tr>
                        <td>{{$shoe->shoeId}}</td>
                        <td>{{$shoe->brand}}</td>
                        <td>{{$shoe->price}}</td>
                        <td>{{$shoe->size}}</td>
                        <td>{{$shoe->colour}}</td>
                        <td>{{$shoe->quantity}}</td>
                        <td>
                            <a class="btn btn-primary btn-md" href="{{URL::to('shoe/edit', $shoe->shoeId)}}" title="Edit -> {{$shoe->shoeId}}"><i class="fa fa-edit"></i> Edit</a>
                            <a class="btn btn-success btn-md" href="{{URL::to('shoe/delete', $shoe->shoeId)}}" onclick="return confirm('Are you sure to delete the shoe {{$shoe->brand}} having shoeId {{$shoe->shoeId}}?')" title="Delete -> {{$shoe->shoeId}}"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </body>
    </html>
