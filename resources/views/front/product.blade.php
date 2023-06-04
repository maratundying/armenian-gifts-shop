<?php
/**
 * @var \App\Models\Product $product
 */
?>
@extends('front.components._layout')

@section('content')
    <main class="main">
        <div class="descript__text">
            <p class="descript__p">{{$product->short_description}}</p>
            <h2>{{$product->name}}</h2>
        </div>
        <div class="description_img">
            <div class="description__bacImg">
                <img src="{{asset('img/image.jpg')}}" alt="">
            </div>
            <div class="Description_img_text">
                <div class="Description_img_text_text">
                    <div class="text_textt">
                        <p class="all_cati">Description</p>
                        <p>{{$product->long_description}}</p>
                    </div>
                    <div class="text_text">
                        <p class="all_cati">Characteristics</p>
                        {{$product->characteristics}}
{{--                        <p class="all_cati">All characteristics</p>--}}
                    </div>
                </div>
                <div class="Description_img_text_card">
                    <div class="cardd">
                        <h1>Price $<string id="product_price">{{$product->price}}</string></h1>
                        <div class="plus_minus">
                            <button class="minus" onclick="subPrice({{$product->price}})">-</button>
                            <p id="product_count">1</p>
                            <button class="plus" onclick="addPrice({{$product->price}})">+</button>
                        </div>
                        <div class="Buy_Add">
                            <a href="">
                                <button class="Buy">Buy Now</button>
                            </a>
                            <button class="Add" onclick="addToBasket({{$product->id}})">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="{{asset('js/product.js')}}" type="module"></script>
    <script>
        function addPrice(price) {
            const currentPrice = $(document).find('#product_price').html();
            const currentCount = $(document).find('#product_count').html();
            $(document).find('#product_price').html(+currentPrice + price)
            $(document).find('#product_count').html(+currentCount + 1)
        }
        function subPrice(price) {
            const currentPrice = $(document).find('#product_price').html();
            const currentCount = $(document).find('#product_count').html();
            if(+currentCount > 1) {
                $(document).find('#product_count').html(+currentCount - 1)
                $(document).find('#product_price').html(+currentPrice - price)
            }
        }

        function addToBasket(id) {
            if(!checkLocalStorage()) {
                return setLocalStorage(id);
            }

            return addIntoLocalStorage(id);
        }

        function checkLocalStorage() {
            return localStorage.getItem('cart');
        }

        function setLocalStorage(id) {
            let product = {
                id: id,
                count: +$(document).find('#product_count').html()
            };
            return localStorage.setItem('cart', JSON.stringify([product]));
        }

        function getLocalStorage() {
            return localStorage.getItem('cart');
        }

        function addIntoLocalStorage(id) {
            let currentCart = JSON.parse(getLocalStorage())

            let wasFound = false;
            let obj = currentCart.find((o, i) => {
                if (o.id === id) {
                    currentCart[i].count += +$(document).find('#product_count').html();
                    wasFound = true;
                    return true; // stop searching
                }
            });
            if(!wasFound) {
                const newProduct = {
                    id: id,
                    count: +$(document).find('#product_count').html()
                }
                currentCart.push(newProduct);
            }
            return localStorage.setItem('cart', JSON.stringify(currentCart));
        }
    </script>
@endsection
