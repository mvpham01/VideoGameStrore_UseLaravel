@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <style>
        .bodycard {
            font-size: 20px;
            color: black;
        }
        .bodycard .titlecard {
            margin: 15px;
            font-size: 50px;
            text-align: center;
        }

        .bodycard .price {
            margin: 15px 0px;

            font-size: 40px;
        }

        .bodycard .descriptioncard {
            margin: 5px;
            font-size: 25px;
        }

    </style>
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('/img/' . $viewData['product']->getImage()) }}" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="bodycard">
                    <p class="titlecard">
                        {{ $viewData['product']->getName() }}
                    </p>
                    <p class="descriptioncard">{{ $viewData['product']->getDescription() }}</p>
                    <p class="price">Price : {{ $viewData['product']->getPrice() }}$</p>
                    <a href="{{ url('products/add/' . $viewData['product']->getId()) }}">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $viewData['product']->getId() }}">
                        <button type="submit" class="btn btn-primary">Add to Cart </button>
                    </a>
                </div>
            </div>
        </div>

    @endsection
