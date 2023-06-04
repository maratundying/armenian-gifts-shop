@extends('front.components._layout')

@section('styles')
    <style>
        .basket {
            padding: 70px;
        }

        h1 {
            font-weight: 400;
        }
    </style>
@endsection

@section('content')
    <div class="basket">
        <h1>Your basket</h1>

        <div class="products">
            <div class="gift__card product">
                <div class="gift__img">
                    <img src="{{asset('img/image.jpg')}}" alt="">
                </div>
                <div class="gift__description">
                    <p class="gift__name">My Beauty Tool Jellyfish Silicon </p>
                    <p class="gift__price">ETUDE HOUSE</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        jQuery(function($){
            $(document).ajaxSend(function() {
                $("#overlay").fadeIn(300);
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '/basket/get-data',
                dataType: 'json',
                data: {cart: localStorage.getItem('cart')},
                success: function(data){
                    console.log(data);
                }
            }).done(function() {
                setTimeout(function(){
                    $("#overlay").fadeOut(300);
                },500);
            });
        });
    </script>
@endsection
