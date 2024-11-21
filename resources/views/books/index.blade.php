@extends('layout')

@section('page-content')
<title>Book List</title>
<h1>Book List</h1>

<div class="row mt 2">
    <div class="col-lg-10">
        search functionality
    </div>

<div class="col-lg-2">
   <p class=" text-end">
    <a href="{{route('books.create')}}" class="btn btn-primary">Add Book</a>
   </p>
</div>
</div>

    
    <style>
        /* General styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Table styling */
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #d1e7dd;
        }

        /* Responsive design */
        @media (max-width: 600px) {
            table {
                width: 100%;
            }
            th, td {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
   
    
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->price }}</td>
            <td><a href="{{url('books/'.$book->id.'\show')}}">View</a></td>
        </tr>
        @endforeach
    </table>
    {{$books->links()}}
@endsection
