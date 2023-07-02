@extends('layouts.app')
@section('content')
    <style>
        #my-cart {
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

        #my-cart th {
            background-color: lightskyblue;
            color: #fff;
            font-weight: bold;
            padding: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-top: 1px solid #fff;
            border-bottom: 1px solid #ccc;

        }

        #my-cart tr:nth-child(even) td {
            background-color: #f2f2f2;
        }

        #my-cart tr:hover td {
            background-color: #cef5ff;
        }

        #my-cart td {
            background-color: #fff;
            padding: 10px;
            border-bottom: 1px solid #ccc;
            font-weight: bold;
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
    </style>
    @guest
   <div style="width: 100%;text-align: center;font-size: 100px;"> Please sign in first</div>
    @else
        <div class="cart">
            <table id="my-cart">
                @if (Session::has('Cart') != null)
                    <tbody>
                        <tr id="title-cart">
                            <th>Name</th>
                            <th>Price</th>
                            <th>Delete</th>
                        </tr>
                        <script>
                            var totalgame = "";
                        </script>
                        @foreach (Session::get('Cart')->products as $item)
                            <tr>
                                <td>{{ $item['productInfo']->name }}</td>
                                <td>{{ $item['productInfo']->price }}$</td>
                                <td>
                                    <div id="del-btn">
                                        <p><a href="{{ url('products/del/' . $item['productInfo']->id) }}"><i
                                                    class="bi bi-trash"></i>Delete</a></p>
                                    </div>
                                </td>
                            </tr>
                            <script>
                                totalgame += "{{ $item['productInfo']->name }},";
                            </script>
                        @endforeach
                        <tr>
                            <td>Total Money:</td>
                            <td>{{ optional(Session::get('Cart'))->totalPrice ?? 0 }}$</td>
                            <td>
                                <div id="addnew">
                                    <p><a href="#" onclick="addToCart()"><i class="bi bi-trash"></i>BUY</a></p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @else
                    <img style="width: 100%;" src="{{ asset('/img/cartempty.jpg') }}" alt="#" />
                @endif
            </table>
        </div>
        <script>
            function addToCart() {
                var totalPrice = {!! Session::has('Cart') && !is_null(Session::get('Cart')) ? Session::get('Cart')->totalPrice : 0 !!};
                var url = "{{ url('cart/add') }}/" + totalPrice + "/" + totalgame;
                window.location.href = url;
            }
        </script>
    @endguest
@endsection
