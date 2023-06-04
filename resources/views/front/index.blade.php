@extends('.front.components._layout')
@section('title')
    <title>Home</title>
    <style>
        #overlay{
            position: fixed;
            top: 0;
            z-index: 100;
            width: 100%;
            height:100%;
            display: none;
            background: rgba(0,0,0,0.6);
        }
        .cv-spinner {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .spinner {
            width: 40px;
            height: 40px;
            border: 4px #ddd solid;
            border-top: 4px #2e93e6 solid;
            border-radius: 50%;
            animation: sp-anime 0.8s infinite linear;
        }
        @keyframes sp-anime {
            100% {
                transform: rotate(360deg);
            }
        }
        .is-hide{
            display:none;
        }
    </style>
@endsection('title')

@section('content')
    <div class="body">
        <div id="overlay">
            <div class="cv-spinner">
                <span class="spinner"></span>
            </div>
        </div>
        <div class="header__img"><img src="{{asset('/img/component.jpg')}}" alt=""></div>

        <div class="products__content d-flex">
            @include('.front/components/_home_filtration')
            <div class="categories__container">
                @include('.front//components/_category')
                @include('.front//components/_category')
            </div>
        </div>
        @include('.front//components/_products_settings')

        <div class="recommendations__div" style="padding-left: 100px;">
            @include('.front//components/_category')

            @include('.front//components/_recommended_content')
        </div>
    </div>
@endsection
