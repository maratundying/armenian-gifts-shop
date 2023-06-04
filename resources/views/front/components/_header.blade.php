<header>
    <div class="menu">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>
        <div id="main">
            <button onclick="openNav()">
                <div class="vector">
                    <svg class="arrow__svg">
                        <use href="#hamburger__svg"></use>
                    </svg>
                </div>
            </button>
        </div>
        <div class="logo">
            <a href="{{route('home')}}">
                <h1>HANDMADE SOUVENIRS</h1>
            </a>
        </div>
        <div class="menu__punct">
            <ul class="menu__ul">
                <li><a href="#recomend_gift">Recomended for you</a></li>
                <li><a href="#">Gifts settings</a></li>
                <li><a href="#">Handmade boardgames</a></li>
                <li><a href="#help">Help</a></li>
            </ul>
        </div>


        <div class="search__basket">
            <div class="container">
                <input type="text" name="search" placeholder="Search..." class="input"/>
                <a href="#" class="btn">
                    <svg class="search__svg svg--width">
                        <use href="#search__svg"></use>
                    </svg>
                </a>
            </div>
            <!-- <div class="search">
                <svg class="search__svg svg--width">
                    <use href="#search__svg"></use>
                </svg>
            </div> -->
            <div class="search">
                <a href="{{route('basket')}}">
                    <svg class="basket__svg svg--width">
                        <use href="#basket__svg"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>
