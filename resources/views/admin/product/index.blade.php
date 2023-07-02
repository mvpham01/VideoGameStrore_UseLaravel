@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <style>
        #del-btn {
            float: right;
            width: 100%;
        }

        #del-btn p {
            text-align: center;
            min-width: 35px;
        }

        #del-btn p a {
            height: 100%;
            color: rgb(255, 255, 255);
            text-decoration: none;
            background-color: rgb(195, 67, 67);
            padding: 10px 75px 10px 75px;
            border-radius: 5px;
        }
        #addnew {
            float: right;
            width: 100%;
            margin-top: 10px;
        }
        #addnew p {
            text-align: center;
            min-width: 35px;
        }

        #addnew p a {
            height: 100%;
            color: rgb(255, 255, 255);
            text-decoration: none;
            background-color: rgb(38, 207, 0);
            padding: 10px 60px 10px 60px;
            border-radius: 5px;
        }


        #table-admin-content {
            border-collapse: collapse;
            width: 100%;
            color: #333;
            font-family: Arial, sans-serif;
            font-size: 14px;
            text-align: left;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin: auto;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        #table-admin-content th {
            background-color: lightskyblue;
            color: #fff;
            font-weight: bold;
            padding: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-top: 1px solid #fff;
            border-bottom: 1px solid #ccc;

        }

        #table-admin-content tr:nth-child(even) td {
            background-color: #f2f2f2;
        }

        #table-admin-content tr:hover td {
            background-color: #c6f7ff;
        }

        #table-admin-content td {
            background-color: #fff;
            padding: 10px;
            border-bottom: 1px solid #ccc;
            font-weight: bold;
        }
    </style>
    <div class="card">
        <div class="card-header">
            Manage Products
        </div>
        <div class="card-body" style="width:120px;">
            <table id="table-admin-content">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Img</th>
                        <th scope="col">Price</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col"><input type="text" id="getinputID"></td>
                        <td scope="col"><input type="text" id="getinputName"></td>
                        <td scope="col"><input type="text" id="getinputDep"></td>
                        <td scope="col"><input type="text" id="getinputImg"></td>
                        <td scope="col"><input type="text" id="getinputPrice"></td>
                        <td>
                            <div id="addnew">
                                <p><a href="#" onclick="addNew()" ><span class="glyphicon glyphicon-trash"></span>
                                       ADD NEW </a></p>
                            </div>
                        </td>
                    </tr>
                    @foreach ($viewData['products'] as $product)
                        <tr>
                            <td>{{ $product->getId() }}</td>
                            <td>{{ $product->getName() }}</td>
                            <td>{{ $product->getDescription() }}</td>
                            <td>{{ $product->getImage() }}</td>
                            <td>{{ $product->getPrice() }}</td>
                            <td>
                                <div id="del-btn">
                                    <p><a href="{{ url('admin/del/' . $product->getId()) }}"><span
                                                class="glyphicon glyphicon-trash"></span> Delete </a></p>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <script>
        function addNew() {
            var newId = document.getElementById('getinputID').value;
            var newName = document.getElementById('getinputName').value;
            var newDep = document.getElementById('getinputDep').value;
            var newImg = document.getElementById('getinputImg').value;
            var newPrice = document.getElementById('getinputPrice').value;
            if (newId && newName && newDep && newImg && newPrice) {
                var url = "{{ url('admin/add') }}/" + newId + "/" + newName + "/"+newDep+"/" + newImg + "/" + newPrice;
                window.location.href = url;
            } else {
                
                alert("Vui lòng nhập đầy đủ thông tin!");
            }
        }
    </script>
@endsection
