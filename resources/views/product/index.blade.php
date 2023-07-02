@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <style>
        .game-contain {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            width: 75%;
            height: 100%;
            background-color: rgb(27, 40, 56);
            padding: 10px 50px;
            margin: 5px;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }

        .game-contain:hover {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            width: 75%;
            height: 100%;
            margin: 5px;
            background-color: rgb(27, 40, 56);
            padding: 10px 50px;
            border-radius: 5px;
            transform: translate(3px, -3px);
            box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.5);
        }

        .game-contain img {

            max-width: 95%;
            height: auto;
            border-radius: 5px;
            background-color: green;
        }

        .column-img {
            float: left;
            width: 35%;
        }


        .column-game-info {
            color: white;
            float: left;
            width: 45%;
            display: inline;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .column-game-info .game-name {
            text-align: center;
            margin-bottom: 3px;
            font-size: 20px;
        }

        .column-game-info .game-description {
            text-align: justify;
        }

        .column-btn {
            float: right;
            width: 25%;
        }

        .column-btn p {
            text-align: center;
            min-width: 35px;
        }

        .column-btn p a {
            height: 50px;
            color: black;
            text-decoration: none;
            background-color: wheat;
            padding: 10px;
            border-radius: 5px;
        }

        /* Clear floats after the columns */
        .game-contain:after {
            content: "";
            display: table;
            clear: both;
        }

        #pagination {
            text-align: center;
            margin:5px 20px;
            font-size: 20px;
        }

        @media screen and (max-width: 600px) {
            .column-img {
                width: 600px;
            }

            .column-game-info {
                display: none;
            }

            .column-btn {
                width: 400px;
            }

            .game-contain {
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
                width: 90%;
                height: 100%;
                background-color: rgb(27, 40, 56);
                padding: 10px 10px;
                margin: 5px;
                border-radius: 5px;
                transition: transform 0.3s ease;
            }

            .game-contain:hover {
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
                width: 90%;
                height: 100%;
                background-color: rgb(27, 40, 56);
                padding: 10px 10px;
                margin: 5px;
                border-radius: 5px;
                transform: translate(3px, -3px);
                box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.5);
            }
        }
    </style>
    <div class="row" style="display: flex;align-items: center;justify-content: center;">
        @php
            $start = ($viewData['currentPage'] - 1) * $viewData['itemsPerPage'];
            $end = min($start + $viewData['itemsPerPage'], count($viewData['products']));
        @endphp

        @for ($i = $start; $i < $end; $i++)
            @php
                $product = $viewData['products'][$i];
            @endphp
            <!-- hiển thị sản phẩm -->
            <div class="game-contain">
                <div class="column-img"><img src="{{ asset('/img/' . $product->getImage()) }}"></div>
                <div class="column-game-info">
                    <p><span class="game-name">{{ $product['name'] }}</span>
                        <br><span class="game-description">{{ $product['description'] }}</span>
                    </p>
                </div>
                <div class="column-btn">
                    <p> <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
                            class="btn bg-primary text-white">More Information</a></p>
                </div>
            </div>
        @endfor
        <br>

    </div>
    {{-- controll Page --}}
    <div id="pagination">
        @php
            $totalPages = ceil(count($viewData['products']) / $viewData['itemsPerPage']);
        @endphp
        @for ($page = 1; $page <= $totalPages; $page++)
            @if ($page == $viewData['currentPage'])
                <span class="current-page">{{ $page }}</span>
            @else
                <a href="{{ route('product.index.page', ['page' => $page]) }}">{{ $page }}</a>
            @endif
        @endfor
    </div>
@endsection
