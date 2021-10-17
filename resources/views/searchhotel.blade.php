@extends('layouts.master')

@section('title', 'Tìm kiếm')

@section('styles')
    <style>
        p{
            margin: 0;
        }
        .MuiBox-root{
            display: flex;
            font-size: 14px;
            font-weight: 600;
            line-height: 50px;
            border-bottom: solid 1px #babbbc;
            margin-bottom: 16px;
        }
        .MuiBox-root-item{
            color: #1A202C;
            cursor: pointer;
            margin-right: 35px;
        }
        .MuiBox-root-item:hover, .MuiBox-root-item:active, .active{
             color: #f38e11;
            border-bottom: solid 1px #f38e11;
        }
       
       .clearfix:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0;
        }
        .clearfix {
            clear: both;
            display: block;
        }

        header {
          width: 1111px;
          height: 80px;
          margin: 0 auto;
          padding: 0px;
          color: #241a71;
          -webkit-box-sizing: border-box;
                  box-sizing: border-box;
        }

        header nav {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-pack: justify;
              -ms-flex-pack: justify;
                  justify-content: space-between;
          -webkit-box-align: center;
              -ms-flex-align: center;
                  align-items: center;
          width: 100%;
          z-index: 1001;
        }

        header nav .menu .logo {
          font-size: 16px;
          font-weight: bold;
          margin-right: 50px;
          text-transform: uppercase;
          color: #241a71;
        }

        header nav .menu .logo span {
          color: #f38e11;
        }

        header nav .menu ul {
          margin: 0;
          padding: 0;
          list-style-type: none;
        }

        header nav .menu ul>li {
          font-size: 13px;
          font-weight: 500;
          cursor: pointer;
          text-transform: uppercase;
          margin-left: 15px;
        }


        header nav .myAccount .ctaGroup .cta {
          width: 135px;
          height: 35px;
          border: 1px solid #f38e11;
          font-size: 12px;
          font-weight: 500;
          border-radius: 35px;
          color: #f38e11;
          cursor: pointer;
        }

        header nav .myAccount .ctaGroup .cta + .cta {
          margin-left: 15px;
        }

        header nav .myAccount .ctaGroup .cta.active {
          background-color: #f38e11;
          color: #fff;
        }

        .clearfix:after {
            display:block;
            clear:both;          
        }
        

        
        /*----- Phần menu -----*/

        .menu li {
            margin:0px;
            list-style:none;
            font-family:'Ek Mukta';
        }
        .menu a {
            transition:all linear 0.15s;
            color:#000000;
            text-decoration:none;
        }
        .menu>li:hover > a{
            text-decoration:none;
            color: #c97833;
        } 
        .menu .arrow {
            font-size:11px;
            line-height:0%;
        } 
        /*----- css cho phần menu cha -----*/
        .menu > ul > li {
            float:left;
            display:inline-block;
            position:relative;
            font-size:19px;
        }
        .menu > ul > li > a {
            display: inline-block;
            color: #3c3984;
        }
        /*----css cho menu con----*/
        .menu>li:hover .sub-menu {
            z-index:1;
            opacity:1;
        }
        .sub-menu {
            width:100%;
            padding:5px 0px;
            position:absolute;
            top:100%;
            left:0px;
            z-index:-1;
            opacity:0;
            transition:opacity linear 0.15s;
            box-shadow:0px 2px 3px rgba(0,0,0,0.2);
            flex-wrap: wrap;
        }
        .sub-menu li {
            display:block;
            font-size:16px;
        
        }
        .sub-menu li a {
            padding:10px 30px;
            display:block;
        }
          .item>input{
            color:
        #1a202c;
        font-family:
        -apple-system;
        font-weight:
        600;
        line-height:
        19px;
          } 
          .hotel_content {
          display: block;
          text-align: center;
          margin: 0 auto;
          position: relative;
          z-index: 10;
          margin-top: 62px;
        }
        .rate{
            display: flex;
            align-items: center;
        }
        .avgrate{
            color: #ffffff;
            padding: 1px 4px;
            font-size: 14px;
            background: #f38e11;
            font-weight: 600;
            line-height: 16px;
            border-radius: 4px;
        }
        .address{
                color: #1a202c;
                display: flex;
                font-size: 12px;
                margin-top: 6px;
                line-height: 14px;
        }
        .address p{
                display: -webkit-box;
                overflow: hidden;
                font-size: 17px;
                font-weight: 400;
                line-height: 16px;
                -webkit-line-clamp: 2;
                margin-left: 5px;
        }
    </style>
@stop


@section('content')
    <div class="body">
        <div class="container-fluid" style="background-color: #e7e7e7; margin: 0px; padding:0px;">
            <div class="container-fluid" style="background-color: white; margin: 0px; padding:0px;position: fixed;">
                <div class="containerr" style="height: 130px;">
                    <header class="caidau">
                        <nav style=" width: 100%; height: 50px;">
                            <div class="wrapper">
                                <div class="menu nav__pc">
                                    <div class="logo">
                                        <a href="{{ route('home.index')}}" style="color: #241a71;">Booking<span>Hotel</span>.vn</a>
                                    </div>
                                    <ul class="nav__list clearfix">
                                    <li>Khuyến mãi</li>
                                    <li>Liên hệ</li>
                                    <li><a href="">Đặt phòng nhanh</a>
                                        <ul class="sub-menu">
                                            <li style="margin: 0;" ><a style="padding: 15px 30px;" href="#" data-toggle="modal" data-target="#exampleModal">Cá nhân</a></li>
                                            <li style="margin: 0;" ><a style="padding: 15px 33px;" href="#" data-toggle="modal" data-target="#phongdoan">Tập thể</a></li>
                                        </ul>
                                    </li>
                                    </ul>
                                </div>
                                </div>
                                

                                <div class="menu__mobile">
                                <div class="logo">Booking <span>Hotel</span>.vn</div>
                                </div>
                                


                                <label for="nav-mobile-input" class="nav__bars-btn">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
                                </label>
                                
                                <input type="checkbox" class="nav__input" name="" id="nav-mobile-input" hidden>

                                <label for="nav-mobile-input" class="nav__overlay"></label>

                                <div class="nav__mobile">
                                <label for="nav-mobile-input" class="nav__mobile-close">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
                                </label>
                                <ul class="nav__mobile-list">
                                    <li class="nav__mobile-link">Room</li>
                                    <li class="nav__mobile-link">Flight</li>
                                    <li class="nav__mobile-link">Today's Deal</li>
                                    <li class="nav__mobile-link">Sign In</li>
                                    <li class="nav__mobile-link">Create Account</li>
                                </ul>
                                </div>

                                <div class="myAccount nav__pc">
                                <div class="ctaGroup">
                                    @if(Auth::check())
                                    <b>Xin chào:&nbsp;</b> <p class="nav__mobile-link" style="margin: 0px"> {{ Auth::user()->name}}</p>
                                    <p style="margin: 0px ;"><a href="{{ route('home.logout')}}" style="text-decoration:none">&nbsp;| Đăng xuất</a></p>
                                    @else
                                    <div class="cta"><a href="{{ route('home.login')}}" style="color: black">Sign In</a></div>
                                    <div class="cta active"><a style="color: white" href="{{ route('home.register')}}">Register</a></div> 
                                    @endif
                                </div>
                            </div>
                        </nav>
                    </header>

                    <div class="hotel_content" style="margin-top: 80px; width:100%">
                        <div class="booking_info PC">

                            <form class="booking_details tab__content" style="width: 1111px" id="Hotels" action="{{ route('search.hotel') }}" method="POST" >
                            <div class="item">
                                <p style="margin: 0px;">Địa điểm:</p>
                                <i class="fa fa-search"></i>
                                <input class="timkiem" type="text" name="city" placeholder="Enter a destination" value="{{ $namecity }}" style="border: none;padding-left: 4px;">
                            </div>

                            <div class="item" style="border-right: 1px solid #f38e11;">
                                <p style="margin: 0px;">Thời gian đến:</p>
                                <input type="date"  name="startDate" value="{{ $startDate }}">
                                {{-- <date-picker format="MMMM DD (DDD), YYYY" name="startDate" ></date-picker> --}}
                            </div>
                            <div class="item" style="border: none;">
                                <span class="" style="font-weight:600;font-family:-apple-system;">{{ $days}}</span>
                                <svg width="10" height="9" fill="none"><path d="M4.982.504h.173A3.319 3.319 0 008.66 6.01 3.982 3.982 0 114.982.5v.004z" stroke="#718096" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div class="item">
                                {{-- <div class="date">31st Dec 2020 <i class="fa fa-angle-down"></i></div> --}}
                                <p style="margin: 0px;">Thời điểm đi:</p>
                                <input type="date" name="endDate" value="{{ $endDate }}">
                                {{-- <date-picker format="MMMM DD (DDD), YYYY " name="endDate" > --}}
                            </div>

                            {{-- <div class="item">
                                <div class="people">2 adults, 0 children <i class="fa fa-angle-down"></i></div>
                            </div> --}}

                            <div class="item">
                                <div class="cta active">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input class="cta active" type="submit" value="Tìm">
                                </div>
                            </div>
                            </form>

                            <div class="booking_details tab__content" id="Homes">
                            <div class="item">
                                <i class="fa fa-search"></i>
                                Enter a destination
                            </div>

                            <div class="item">
                                <div class="date">31st Dec 2020 <i class="fa fa-angle-down"></i></div>
                                <div class="days">Thursday</div>
                            </div>

                            <div class="item">
                                <div class="date">31st Dec 2020 <i class="fa fa-angle-down"></i></div>
                                <div class="days">Thursday</div>
                            </div>

                            <div class="item">
                                <div class="people price">Giá<i class="fa fa-angle-down"></i></div>
                            </div>

                            <div class="item">
                                <div class="cta active">Search</div>
                            </div>

                            </div>

                        </div>
                        
                        {{-- <div class="booking_info mobile">

                            <div class="opt">
                            <span class="tab__link_mobile active">Hotels</span>
                            <span class="tab__link_mobile">Homes</span>
                            </div>

                            <div class="booking_details tab__content" id="Hotels">
                            <div class="item">
                                <i class="fa fa-search"></i>
                                Enter a destination
                            </div>

                            <div class="item">
                                <div class="date">31st Dec 2020 <i class="fa fa-angle-down"></i></div>
                                <div class="days">Thursday</div>
                            </div>

                            <div class="item">
                                <div class="date">31st Dec 2020 <i class="fa fa-angle-down"></i></div>
                                <div class="days">Thursday</div>
                            </div>

                            <div class="item">
                                <div class="people">2 adults, 0 children <i class="fa fa-angle-down"></i></div>
                            </div>

                            <div class="item">
                                <div class="cta active">Search</div>
                            </div>
                            </div>

                            <div class="booking_details tab__content_mobile" id="Homes">
                            <div class="item">
                                <i class="fa fa-search"></i>
                                Enter a destination
                            </div>

                            <div class="item">
                                <div class="date">31st Dec 2020 <i class="fa fa-angle-down"></i></div>
                                <div class="days">Thursday</div>
                            </div>

                            <div class="item">
                                <div class="date">31st Dec 2020 <i class="fa fa-angle-down"></i></div>
                                <div class="days">Thursday</div>
                            </div>

                            <div class="item">
                                <div class="people price">Giá<i class="fa fa-angle-down"></i></div>
                            </div>

                            <div class="item">
                                <div class="cta active">Search</div>
                            </div>

                            </div>

                        </div> --}}

                    </div>

                </div>

            </div>
            <div class="clearfix"></div>
        
           
            <div class="main container" style="font-family:-apple-system;background-color: #e7e7e7;width: 100%;height: 100%;margin-top: 10px;margin-top:140px;">
                    <div style="width: 100%;min-height: 130px;display: grid; ">
                        <div style="margin: 0;display: flex;padding: 0;flex-wrap: wrap;list-style: none;align-items: center; ">
                            <a href="">Khách sạn</a>
                            <li aria-hidden="true" style="display: flex;margin-left: 8px;user-select: none;margin-right: 8px;"> › </li>
                            <p style="font-size: 12px;line-height: 14px;margin: 0;font-weight: 400;">{{ $namecity }}</p>
                        </div>
                        <div style="display: flex;align-items: center;justify-content: space-between;">
                            <h3 style="font-size: 20px;font-family: sans-serif;font-weight: bold;"> {{ $sohotels }} Khách sạn tại {{ $namecity }}</h3>
                        </div>
                    </div>
                    <div  style="width: 100%;min-height: 500px;">
                        <div class="fillter"  style="    min-height: 500px;float: left;width: 25%;">
                            <div class="filter" style="border-radius: 8px;background-color: white;margin-right: 10px;">
                                <div class="filter-title" style=" margin-right: 10px;display: flex;padding: 14px 16px;font-size: 16px;align-items: center;font-weight: 600;line-height: 19px;justify-content: space-between;">
                                    <div>Bộ lọc</div>
                                    <div>
                                        <a class="" href="">Xóa tất cả lọc</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="" style="width: 100%;height: 1px;background: #EDF2F7;"></div>
                                <div class=" ">
                                    <p class="">Khoảng giá (1 đêm)</p>
                                    <h6 class="" style="font-weight:normal;margin-top:8px">0đ - <!-- -->5.000.000+ đ</h6>
                                    <div class="" style="width:100%;padding-right:14px">
                                        <span class="MuiSlider-root jss143 MuiSlider-colorPrimary">
                                            <span class="MuiSlider-rail jss148"></span>
                                            <span class="MuiSlider-track jss147" style="left: 0%; width: 100%;"></span>
                                            <input type="hidden" value="0,5000000">
                                            <span class="" tabindex="0" role="slider" style="left:0%" data-index="0" aria-orientation="horizontal" aria-valuemax="5000000" aria-valuemin="0" aria-valuenow="0"></span>
                                            <span class="" tabindex="0" role="slider" style="left: 100%;" data-index="1" aria-orientation="horizontal" aria-valuemax="5000000" aria-valuemin="0" aria-valuenow="5000000"></span>
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="hotels"  style="width: 75%;float: right;min-height: 500px;">
                            <div class="title" style="width: 100%;height: 50px; margin-bottom: 10px; font-family: sans-serif;">
                                <div class="MuiBox-root">
                                    <div class="MuiBox-root-item">BKHT đề xuất</div>
                                    <div class="MuiBox-root-item">Giá tăng dần</div>
                                    <div class="MuiBox-root-item">Giá giảm dần</div>
                                    <div class="MuiBox-root-item">Xếp hạng sao</div>
                                    <div class="MuiBox-root-item">Đánh giá cao nhất</div>
                                </div>
                            </div>
                            @foreach($hotels as $hotel)
                            <div class="ht" style="border-radius: 8px;width: 100%;height: 200px;display: flex;flex-direction: row;justify-content: flex-end;align-content: space-around; padding: 10px;margin-bottom: 10px; background-color: white;">
                                <div class="image" style="width: 30%; float:left;">
                                    <img src="data:image/jpeg;base64,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" class="" style="border-radius: 8px;width: 240px;height: 180px;">
                                </div>
                                <div class="name"  style="width: 40%; float:left;margin-left: 100px;">
                                    <div style="font-weight: 600;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;font-size: 18px;line-height: 21px;">
                                        <a href="">{{ $hotel["name"] }}</a>
                                    </div>
                                    <div>
                                        @for ($i=0; $i < $hotel["star"]; $i++)
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" viewBox="0 0 576 512" style="height: 12px;"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" style="color: #f38e11;"/></svg>
                                        @endfor
                                    </div>
                                    <div class="rate">
                                        <p>
                                            <span class="avgrate" data-selected="true" data-label-id="0">8.4</span>
                                            <span>rất tốt</span>
                                            <div style="width: 1px;height: 14px;margin: 0 8px;background: #cdc1c1;;"></div>
                                            <span class="" style="margin-left: 4px;">(238 đánh giá)</span>
                                        </p>
                                    </div>
                                    <div class="address">
                                        <svg width="16" height="16" fill="none"><path d="M8.467 3.8V2a1 1 0 00-1-1h-.8a1 1 0 00-1 1v1.8" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 7.467a1 1 0 001 1h9.838a1 1 0 00.64-.232l1.6-1.333a1 1 0 000-1.537l-1.6-1.333a1 1 0 00-.64-.232H2a1 1 0 00-1 1v2.667zM5.667 10.333V14a1 1 0 001 1h.8a1 1 0 001-1v-3.667" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <p>{{ $hotel["address"] }}</p>
                                    </div>
                                    <div class="address">
                                        <svg width="16" height="16" fill="none"><path d="M8.467 3.8V2a1 1 0 00-1-1h-.8a1 1 0 00-1 1v1.8" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 7.467a1 1 0 001 1h9.838a1 1 0 00.64-.232l1.6-1.333a1 1 0 000-1.537l-1.6-1.333a1 1 0 00-.64-.232H2a1 1 0 00-1 1v2.667zM5.667 10.333V14a1 1 0 001 1h.8a1 1 0 001-1v-3.667" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <p>{{ $hotel["type"] }}</p>
                                    </div>
                                </div>
                                <div class="price"  style="width: 30%; float:right; display: flex; justify-content: flex-end;align-items: flex-end;">{{ $hotel["price"] }}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            
            
            <div class="clearfix"></div>
            
        </div>
        <div class="clearfix"></div>
    </div>
@stop


@section('scripts')
    <script type="text/javascript">
    var buttons = document.getElementsByClassName('tab__link');
    var contents = document.getElementsByClassName('tab__content');
    function showContent(id){
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
        }
        var content = document.getElementById(id);
        content.style.display = 'inline-flex';
    }
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function(){
            var id = this.textContent;
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("active");
            }
            this.className += " active";
            showContent(id);
        });
    }
    showContent('Hotels');
    </script>
    <script type="text/javascript">
        function getWeekNumber(date) {
        const firstDayOfTheYear = new Date(date.getFullYear(), 0, 1);
        const pastDaysOfYear = (date - firstDayOfTheYear) / 86400000;
        
        return Math.ceil((pastDaysOfYear + firstDayOfTheYear.getDay() + 1) / 7)
        }

        function isLeapYear(year) {
        return year % 100 === 0 ? year % 400 === 0 : year % 4 === 0;
        }

        class Day {
        constructor(date = null, lang = 'default') {
            date = date ?? new Date();
            
            this.Date = date;
            this.date = date.getDate();
            this.day = date.toLocaleString(lang, { weekday: 'long'});
            this.dayNumber = date.getDay() + 1;
            this.dayShort = date.toLocaleString(lang, { weekday: 'short'});
            this.year = date.getFullYear();
            this.yearShort = date.toLocaleString(lang, { year: '2-digit'});
            this.month = date.toLocaleString(lang, { month: 'long'});
            this.monthShort = date.toLocaleString(lang, { month: 'short'});
            this.monthNumber = date.getMonth() + 1;
            this.timestamp = date.getTime();
            this.week = getWeekNumber(date);
        }
    
        get isToday() {
            return this.isEqualTo(new Date());
        }
        
        isEqualTo(date) {
            date = date instanceof Day ? date.Date : date;
            
            return date.getDate() === this.date &&
            date.getMonth() === this.monthNumber - 1 &&
            date.getFullYear() === this.year;
        }
    
            format(formatStr) {
            return formatStr
                .replace(/\bYYYY\b/, this.year)
                .replace(/\bYYY\b/, this.yearShort)
                .replace(/\bWW\b/, this.week.toString().padStart(2, '0'))
                .replace(/\bW\b/, this.week)
                .replace(/\bDDDD\b/, this.day)
                .replace(/\bDDD\b/, this.dayShort)
                .replace(/\bDD\b/, this.date.toString().padStart(2, '0'))
                .replace(/\bD\b/, this.date)
                .replace(/\bMMMM\b/, this.month)
                .replace(/\bMMM\b/, this.monthShort)
                .replace(/\bMM\b/, this.monthNumber.toString().padStart(2, '0'))
                .replace(/\bM\b/, this.monthNumber)
            }
        }

        class Month {
            constructor(date = null, lang = 'default') {
            const day = new Day(date, lang);
            const monthsSize = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            this.lang = lang;
            
            this.name = day.month;
            this.number = day.monthNumber;
            this.year = day.year;
            this.numberOfDays = monthsSize[this.number - 1];
            
            if(this.number === 2) {
                this.numberOfDays += isLeapYear(day.year) ? 1 : 0;
            }
            
            this[Symbol.iterator] = function* () {
                let number = 1;
                yield this.getDay(number);
                while(number < this.numberOfDays) {
                ++number;
                yield this.getDay(number);
                }
            }
            }
            
            getDay(date) {
            return new Day(new Date(this.year, this.number - 1, date), this.lang);
            }
        }

        class Calendar {
            weekDays = Array.from({length: 7});
            
            constructor(year = null, monthNumber = null, lang = 'default') {
            this.today = new Day(null, lang);
            this.year = year ?? this.today.year;
            this.month = new Month(new Date(this.year, (monthNumber || this.today.monthNumber) - 1), lang);
            this.lang = lang;
            
            this[Symbol.iterator] = function* () {
                let number = 1;
                yield this.getMonth(number);
                while(number < 12) {
                ++number;
                yield this.getMonth(number);
                }
            }
            
            this.weekDays.forEach((_, i) => {
                const day = this.month.getDay(i + 1);
                if(!this.weekDays.includes(day.day)) {
                this.weekDays[day.dayNumber - 1] = day.day
                }
            })
            }
    
            get isLeapYear() {
            return isLeapYear(this.year);
            }
            
            getMonth(monthNumber) {
            return new Month(new Date(this.year, monthNumber - 1), this.lang);
            }
            
            getPreviousMonth() {
            if(this.month.number === 1) {
                return new Month(new Date(this.year - 1, 11), this.lang);
            }
            
            return new Month(new Date(this.year, this.month.number - 2), this.lang);
            }
            
            getNextMonth() {
            if(this.month.number === 12) {
                return new Month(new Date(this.year + 1, 0), this.lang);
            }
            
            return new Month(new Date(this.year, this.month.number + 2), this.lang);
            }
            
            goToDate(monthNumber, year) {
            this.month = new Month(new Date(year, monthNumber - 1), this.lang);
            this.year = year;
            }
            
            goToNextYear() {
            this.year += 1;
            this.month = new Month(new Date(this.year, 0), this.lang);
            }
            
            goToPreviousYear() {
            this.year -= 1;
            this.month = new Month(new Date(this.year, 11), this.lang);
            }
            
            goToNextMonth() {
            if(this.month.number === 12) {
                return this.goToNextYear();
            }
            
            this.month = new Month(new Date(this.year, (this.month.number + 1) - 1), this.lang);
            }
            
            goToPreviousMonth() {
            if(this.month.number === 1) {
                return this.goToPreviousYear();
            }
            
            this.month = new Month(new Date(this.year, (this.month.number - 1) - 1), this.lang);
            }
        }

        class DatePicker extends HTMLElement {
            format = 'MMM DD, YYYY';
            position = 'bottom';
            visible = false;
            date = null;
            mounted = false;
            // elements
            toggleButton = null;
            calendarDropDown = null;
            calendarDateElement = null;
            calendarDaysContainer = null;
            selectedDayElement = null;
            
            constructor() {
            super();
            
            const lang = window.navigator.language;
            const date = new Date(this.date ?? (this.getAttribute("date") || Date.now()));
            
            this.shadow = this.attachShadow({mode: "open"});
            this.date = new Day(date, lang);
            this.calendar = new Calendar(this.date.year, this.date.monthNumber, lang);
            
            this.format = this.getAttribute('format') || this.format;
            this.position = DatePicker.position.includes(this.getAttribute('position'))
                ? this.getAttribute('position')
                : this.position;
            this.visible = this.getAttribute('visible') === '' 
                || this.getAttribute('visible') === 'true'
                || this.visible;
            
            this.render();
            }
            
            connectedCallback() {
            this.mounted = true;
            
            this.toggleButton = this.shadow.querySelector('.date-toggle');
            this.calendarDropDown = this.shadow.querySelector('.calendar-dropdown');
            const [prevBtn, calendarDateElement, nextButton] = this.calendarDropDown
                .querySelector('.header').children;
            this.calendarDateElement = calendarDateElement;
            this.calendarDaysContainer = this.calendarDropDown.querySelector('.month-days');
            
            this.toggleButton.addEventListener('click', () => this.toggleCalendar());
            prevBtn.addEventListener('click', () => this.prevMonth());
            nextButton.addEventListener('click', () => this.nextMonth());
            document.addEventListener('click', (e) => this.handleClickOut(e));
            
            this.renderCalendarDays();
            }
            
            attributeChangedCallback(name, oldValue, newValue) {
            if(!this.mounted) return;
            
            switch(name) {
                case "date":
                this.date = new Day(new Date(newValue));
                this.calendar.goToDate(this.date.monthNumber, this.date.year);
                this.renderCalendarDays();
                this.updateToggleText();
                break;
                case "format":
                this.format = newValue;
                this.updateToggleText();
                break;
                case "visible":
                this.visible = ['', 'true', 'false'].includes(newValue) 
                    ? newValue === '' || newValue === 'true'
                    : this.visible;
                this.toggleCalendar(this.visible);
                break;
                case "position":
                this.position = DatePicker.position.includes(newValue)
                    ? newValue
                    : this.position;
                this.calendarDropDown.className = 
                    `calendar-dropdown ${this.visible ? 'visible' : ''} ${this.position}`;
                break;
            }
            }
            
            toggleCalendar(visible = null) {
            if(visible === null) {
                this.calendarDropDown.classList.toggle('visible');
            } else if(visible) {
                this.calendarDropDown.classList.add('visible');
            } else {
                this.calendarDropDown.classList.remove('visible');
            }
            
            this.visible = this.calendarDropDown.className.includes('visible');
            
            if(this.visible) {
                this.calendarDateElement.focus();
            } else {
                this.toggleButton.focus();
                
                if(!this.isCurrentCalendarMonth()) {
                this.calendar.goToDate(this.date.monthNumber, this.date.year);
                this.renderCalendarDays();
                }
            }
            }
            
            prevMonth() {
            this.calendar.goToPreviousMonth();
            this.renderCalendarDays();
            }
            
            nextMonth() {
            this.calendar.goToNextMonth();
            this.renderCalendarDays();
            }
            
            updateHeaderText() {
            this.calendarDateElement.textContent = 
                `${this.calendar.month.name}, ${this.calendar.year}`;
            const monthYear = `${this.calendar.month.name}, ${this.calendar.year}`
            this.calendarDateElement
                .setAttribute('aria-label', `current month ${monthYear}`);
            }
            
            isSelectedDate(date) {
            return date.date === this.date.date &&
                date.monthNumber === this.date.monthNumber &&
                date.year === this.date.year;
            }
            
            isCurrentCalendarMonth() {
            return this.calendar.month.number === this.date.monthNumber &&
                this.calendar.year === this.date.year;
            }
            
            selectDay(el, day) {
            if(day.isEqualTo(this.date)) return;
            
            this.date = day;
            
            if(day.monthNumber !== this.calendar.month.number) {
                this.prevMonth();
            } else {
                el.classList.add('selected');
                this.selectedDayElement.classList.remove('selected');
                this.selectedDayElement = el;
            }
            
            this.toggleCalendar();
            this.updateToggleText();
            }
            
            handleClickOut(e) {
            if(this.visible && (this !== e.target)) {
                this.toggleCalendar(false);
            }
            }
            
            getWeekDaysElementStrings() {
            return this.calendar.weekDays
                .map(weekDay => `<span>${weekDay.substring(0, 3)}</span>`)
                .join('');
            }
            
            getMonthDaysGrid() {
            const firstDayOfTheMonth = this.calendar.month.getDay(1);
            const prevMonth = this.calendar.getPreviousMonth();
            const totalLastMonthFinalDays = firstDayOfTheMonth.dayNumber - 1;
            const totalDays = this.calendar.month.numberOfDays + totalLastMonthFinalDays;
            const monthList = Array.from({length: totalDays});
            
            for(let i = totalLastMonthFinalDays; i < totalDays; i++) {
                monthList[i] = this.calendar.month.getDay(i + 1 - totalLastMonthFinalDays)
            }
            
            for(let i = 0; i < totalLastMonthFinalDays; i++) {
                const inverted = totalLastMonthFinalDays - (i + 1);
                monthList[i] = prevMonth.getDay(prevMonth.numberOfDays - inverted);
            }
            
            return monthList;
            }
            
            updateToggleText() {
            const date = this.date.format(this.format)
            this.toggleButton.textContent = date;
            }
            
            updateMonthDays() {
            this.calendarDaysContainer.innerHTML = '';
            
            this.getMonthDaysGrid().forEach(day => {
                const el = document.createElement('button');
                el.className = 'month-day';
                el.textContent = day.date;
                el.addEventListener('click', (e) => this.selectDay(el, day));
                el.setAttribute('aria-label', day.format(this.format));
                
                if(day.monthNumber === this.calendar.month.number) {
                el.classList.add('current');
                }

                if(this.isSelectedDate(day)) {
                el.classList.add('selected');
                this.selectedDayElement = el;
                }
                
                this.calendarDaysContainer.appendChild(el);
            })
            }
            
            renderCalendarDays() {
            this.updateHeaderText();
            this.updateMonthDays();
            this.calendarDateElement.focus();
            }
            
            static get observedAttributes() { 
            return ['date', 'format', 'visible', 'position']; 
            }
            
            static get position() {
            return ['top', 'left', 'bottom', 'right'];
            }
            
            get style() {
            return `
                :host {
                position: relative;
                font-family: sans-serif;
                }
                
                .date-toggle {
                // padding: 8px 15px;
                border: none;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                background: #eee;
                color: #333;
                border-radius: 6px;
                font-weight: bold;
                cursor: pointer;
                text-transform: capitalize;
                }
                
                .calendar-dropdown {
                display: none;
                width: 300px;
                height: 300px;
                position: absolute;
                top: 100%;
                left: 50%;
                transform: translate(-50%, 8px);
                padding: 20px;
                background: #fff;
                border-radius: 5px;
                box-shadow: 0 0 8px rgba(0,0,0,0.2);
                }
                
                .calendar-dropdown.top {
                top: auto;
                bottom: 100%;
                transform: translate(-50%, -8px);
                }
                
                .calendar-dropdown.left {
                top: 50%;
                left: 0;
                transform: translate(calc(-8px + -100%), -50%);
                }
                
                .calendar-dropdown.right {
                top: 50%;
                left: 100%;
                transform: translate(8px, -50%);
                }
                
                .calendar-dropdown.visible {
                display: block;
                }
                
                .header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 10px 0 30px;
                }
                
                .header h4 {
                margin: 0;
                text-transform: capitalize;
                font-size: 21px;
                font-weight: bold;
                }
                
                .header button {
                padding: 0;
                border: 8px solid transparent;
                width: 0;
                height: 0;
                border-radius: 2px;
                border-top-color: #222;
                transform: rotate(90deg);
                cursor: pointer;
                background: none;
                position: relative;
                }
                
                .header button::after {
                content: '';
                display: block;
                width: 25px;
                height: 25px;
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                }
                
                .header button:last-of-type {
                transform: rotate(-90deg);
                }
                
                .week-days {
                display: grid;
                grid-template-columns: repeat(7, 1fr);
                grid-gap: 5px;
                margin-bottom: 10px;
                }
                
                .week-days span {
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 10px;
                text-transform: capitalize;
                }
                
                .month-days {
                display: grid;
                grid-template-columns: repeat(7, 1fr);
                grid-gap: 5px;
                }
                
                .month-day {
                padding: 8px 5px;
                background: #c7c9d3;
                color: #fff;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 2px;
                cursor: pointer;
                border: none;
                }
                
                .month-day.current {
                background: #444857;
                }
                
                .month-day.selected {
                background: #28a5a7;
                color: #ffffff;
                }
                
                .month-day:hover {
                background: #34bd61;
                }
            `;
            }
            
            render() {
            const monthYear = `${this.calendar.month.name}, ${this.calendar.year}`;
            const date = this.date.format(this.format)
            this.shadow.innerHTML = `
                <style>${this.style}</style>
                <button type="button" class="date-toggle">${date}</button>
                <div class="calendar-dropdown ${this.visible ? 'visible' : ''} ${this.position}">
                <div class="header">
                    <button type="button" class="prev-month" aria-label="previous month"></button>
                    <h4 tabindex="0" aria-label="current month ${monthYear}">
                        ${monthYear}
                    </h4>
                    <button type="button" class="prev-month" aria-label="next month"></button>
                </div>
                <div class="week-days">${this.getWeekDaysElementStrings()}</div>
                <div class="month-days"></div>
                </div>
            `
            }
        }

        customElements.define("date-picker", DatePicker);
    </script>
@stop

    

