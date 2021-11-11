@extends('layouts.master')

@section('title', $namecity)

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
            justify-content: space-between;
        }
        .MuiBox-root-item{
            color: #1A202C;
            cursor: pointer;
            margin-right: 35px;
        }
        .MuiBox-root-item:hover, .MuiBox-root-item:active, .active, .MuiBox-root-item>a:hover {
             color: #f38e11;
             border-bottom: solid 1px #f38e11;
            text-decoration: none;
        }
        .MuiBox-root-item>a{
             padding-bottom: 17px;
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
        .datehidden{
            display: none;
        }
        .list_price li{
            list-style: none;
        }
        .list_price li a{
            text-decoration: none;
        }
        .list_price li a:hover{
            text-decoration: none;
            color: #f38e11;
        }
        .list_price li a::before {
            content: " ";
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50px;
            background-color: #f38e11;
            margin-right: 5px;
        }
        .show{
            display: flex;
        }
        .activept{
            background-color: #f38e11;
        }
        .defau{
            background-color: #00B6F3;
        }
        .defau:hover{
            background-color: #1c6780;
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
                                    <div class="cta"><a href="#" style="color: black" data-toggle="modal" data-target="#login">Sign In</a></div>
                                    <div class="cta active"><a style="color: white" href="{{ route('home.register')}}" data-toggle="modal" data-target="#register">Register</a></div> 
                                    @endif
                                </div>
                            </div>
                        </nav>
                    </header>

                    <div class="hotel_content" style="margin-top: 80px; width:100%">
                        <div class="booking_info PC">

                            <form class="booking_details tab__content" style="width: 1111px" id="Hotels" action="{{ route('search.hotel') }}" method="GET" >
                            <div class="item">
                                <p style="margin: 0px;">Địa điểm:</p>
                                <i class="fa fa-search"></i>
                                <input  class="timkiem" type="text" name="city" placeholder="Enter a destination" value="{{ $namecity }}" style="border: none;padding-left: 4px;">
                            </div>

                            <div class="item" style="border-right: 1px solid #f38e11;">
                                <p style="margin: 0px;">Thời gian đến:</p>
                                <input type="date"  name="startDate" value="{{ $startDate }}">
                                
                            </div>
                            <div class="item" style="border: none;">
                                <span class="" style="font-weight:600;font-family:-apple-system;">{{ $days}}</span>
                                <svg width="10" height="9" fill="none"><path d="M4.982.504h.173A3.319 3.319 0 008.66 6.01 3.982 3.982 0 114.982.5v.004z" stroke="#718096" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div class="item">
                                <p style="margin: 0px;">Thời điểm đi:</p>
                                <input type="date" name="endDate" value="{{ $endDate }}">
                              
                            </div>

                            {{-- <div class="item">
                                <div class="people">2 adults, 0 children <i class="fa fa-angle-down"></i></div>
                            </div> --}}

                            <div class="item">
                                <div class="cta active">
                                    <input type="hidden" name="page" value="1">
                                <input type="hidden" name="orderBy" value="DEFAULT">
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
                        
                        <div class="booking_info mobile">

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

                        </div> 

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
                    <div  style="width: 100%;min-height: 400px;">
                        <div class="fillter"  style="    min-height: 400px;float: left;width: 25%;">
                            <div class="filter" style="border-radius: 8px;background-color: white;margin-right: 10px;padding-left: 20px;padding-right: 20px;">
                                <div class="MuiBox-root jss139 jss133" style="font-size: 16px;">Bộ lọc
                                    <a href="{{ route('searchwithcity', $city) }}?startDate={{ $startDate }}&endDate={{ $endDate }}&city={{ $namecity }}&orderBy=DEFAULT&price=0&page=1" style="text-decoration: none;">
                                        <p class="" style="">Xóa tất cả lọc</p>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div style="border-bottom: 1px solid #c2c3c4;">
                                    <p class="">Khoảng giá (1 đêm)</p>
                                    <ul class="list_price">
                                            <li><a class="{{ Request::get('price') == 0 || Request::get('price') == '' ? 'active' : ''}}" href="{{ request()->fullUrlWithQuery(['price' => 0]) }}" >Tất cả</a></li>  
                                            <li><a class="{{ Request::get('price') == 1 ? 'active' : ''}}" href="{{ request()->fullUrlWithQuery(['price' => 1]) }}">Dưới 500.000</a></li>
                                            <li><a class="{{ Request::get('price') == 2 ? 'active' : ''}}" href="{{ request()->fullUrlWithQuery(['price' => 2]) }}">500.000 - 1.000.000</a></li>
                                            <li><a class="{{ Request::get('price') == 3 ? 'active' : ''}}" href="{{ request()->fullUrlWithQuery(['price' => 3]) }}">1.000.000 - 3.000.000</a></li>
                                            <li><a class="{{ Request::get('price') == 4 ? 'active' : ''}}" href="{{ request()->fullUrlWithQuery(['price' => 4]) }}">3.000.000 - 5.000.000</a></li>
                                            <li><a class="{{ Request::get('price') == 5 ? 'active' : ''}}" href="{{ request()->fullUrlWithQuery(['price' => 5]) }}">5.000.000 - 7.000.000</a></li>
                                            <li><a class="{{ Request::get('price') == 6 ? 'active' : ''}}" href="{{ request()->fullUrlWithQuery(['price' => 6]) }}">7.000.000 - 10.000.000</a></li>
                                            <li><a class="{{ Request::get('price') == 7 ? 'active' : ''}}" href="{{ request()->fullUrlWithQuery(['price' => 7]) }}">>10.000.000</a></li>
                                    </ul>
                                </div>
                                
                                {{-- <form action="{{ route('searchwithcity', $city) }}" id="form_price" method="get"> --}}
                                    <div class="" style="margin-top: 20px;">
                                        <div class="" style="display: flex;align-items: center;justify-content: space-between;">
                                            <p class="" style="font-size: 14px;font-weight: 600;line-height: 17px;">Hạng khách sạn</p>
                                        </div>
                                        <div class="container__star">
                                            
                                            <div class="form-check" style="display: flex;align-items: center;margin-top: 5px;">
                                                {{-- <a class="{{ Request::get('star') == 5 ? 'active' : ''}}" href="{{ request()->fullUrlWithQuery(['star' => 5]) }}"> --}}
                                                    <input class="form-check-input" {{ Request::get('star') == 5 ? 'checked' : ''}} type="checkbox" value="5" id="star" name="star[]" style="width: 16px; height: 16px;">
                                                    <div class="form-check-label" for="star">
                                                        @for ($i=0; $i < 5; $i++)
                                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" viewBox="0 0 576 512" style="height: 12px;"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" style="color: #f38e11;"/></svg>
                                                        @endfor
                                                    </div>
                                                {{-- </a> --}}
                                            </div>
                                            
                                            <div class="form-check" style="display: flex;align-items: center;margin-top: 5px;">
                                                <input class="form-check-input" {{ Request::get('star') == 4 ? 'checked' : ''}} type="checkbox" value="4" id="star" name="star[]" style="width: 16px; height: 16px;">
                                                <label class="form-check-label" for="star">
                                                     @for ($i=0; $i < 4; $i++)
                                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" viewBox="0 0 576 512" style="height: 12px;"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" style="color: #f38e11;"/></svg>
                                                    @endfor
                                                </label>
                                            </div>
                                            <div class="form-check" style="display: flex;align-items: center;margin-top: 5px;">
                                                <input class="form-check-input" {{ Request::get('star') == 3 ? 'checked' : ''}} type="checkbox" value="3" id="star" name="star[]" style="width: 16px; height: 16px;">
                                                <label class="form-check-label" for="star">
                                                    @for ($i=0; $i < 3; $i++)
                                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" viewBox="0 0 576 512" style="height: 12px;"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" style="color: #f38e11;"/></svg>
                                                    @endfor
                                                </label>
                                            </div>
                                            <div class="form-check" style="display: flex;align-items: center;margin-top: 5px;">
                                                <input class="form-check-input" type="checkbox" value="2" id="star" name="star" style="width: 16px; height: 16px;">
                                                <label class="form-check-label" for="star">
                                                    @for ($i=0; $i < 2; $i++)
                                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" viewBox="0 0 576 512" style="height: 12px;"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" style="color: #f38e11;"/></svg>
                                                    @endfor
                                                </label>
                                            </div>
                                            <div class="form-check" style="display: flex;align-items: center;margin-top: 5px;">
                                                <input class="form-check-input" type="checkbox" value="1" id="star" name="star" style="width: 16px; height: 16px;">
                                                <label class="form-check-label" for="star">
                                                
                                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" viewBox="0 0 576 512" style="height: 12px;"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" style="color: #f38e11;"/></svg>
                                                   
                                                </label>
                                            </div>
                                             {{-- <input type="button" id="btn" value="Xem kết quả"/> --}}
                                        </div>
                                    </div>   
                                           
                                        
                                       
                                {{-- </form> --}}
                            </div>
                        </div>
                        <div class="hotels"  style="width: 75%;float: right;min-height: 400px;">
                            @if($sohotels != 0)
                            <div class="title" style="width: 100%;height: 50px; margin-bottom: 10px; font-family: sans-serif;">
                                <div class="MuiBox-root">
                                    <div class="MuiBox-root-item">
                                        <a  class="{{ Request::get('orderBy') == 'DEFAULT' ? 'active' : ''}}" href="{{ route('searchwithcity', $city) }}?startDate={{ $startDate }}&endDate={{ $endDate }}&city={{ $namecity }}&condition=price&orderBy=DEFAULT&price=0&page=1">BKHT đề xuất</a>
                                    </div>
                                    <div class="MuiBox-root-item">
                                        <a class="{{ Request::get('orderBy') == 'ASC' ? 'active' : ''}}" href="{{ route('searchwithcity', $city) }}?startDate={{ $startDate }}&endDate={{ $endDate }}&city={{ $namecity }}&condition=price&orderBy=ASC&price=0&page=1">Giá tăng dần</a>
                                    </div>
                                    <div class="MuiBox-root-item">
                                        <a class="{{ Request::get('orderBy') == 'DESC' ? 'active' : ''}}" href="{{ route('searchwithcity', $city) }}?startDate={{ $startDate }}&endDate={{ $endDate }}&city={{ $namecity }}&condition=price&orderBy=DESC&price=0&page=1">Giá giảm dần</a>
                                    </div>
                                    <div class="MuiBox-root-item">
                                        <a class="{{ Request::get('orderBy') == 'STARDEFAULT' ? 'active' : ''}}" href="{{ route('searchwithcity', $city ) }}?startDate={{ $startDate }}&endDate={{ $endDate }}&city={{ $namecity }}&condition=star&orderBy=STARDEFAULT&price=0&page=1">Sao khách sạn</a>
                                    </div>
                                    <div class="MuiBox" style="width:25%">                                        
                                        {{-- <a class="{{ Request::get('orderBy') == 'DEFAULT' ? 'active' : ''}}" href="{{ route('searchrate', $city ) }}?startDate={{ $startDate }}&endDate={{ $endDate }}&city={{ $namecity }}&orderBy=DEFAULT&price=0&page=1">Đánh giá cao nhất</a> --}}
                                    </div>
                                </div>
                            </div>
                            @foreach($hotels as $hotel)
                            <div class="ht" style="border-radius: 8px;width: 100%;height: 200px;display: flex;flex-direction: row;justify-content: flex-end;align-content: space-around; padding: 10px;margin-bottom: 10px; background-color: white;">
                                <div class="image" style="width: 30%; float:left;">
                                    <img src="{{ Request::get('price') != null  ? '../' : ''}}../resources/images/hotels/{{$hotel['image']}}" class="" style="border-radius: 8px;width: 100%;height: 100%;">
                                </div>
                                <div class="name"  style="width: 40%; float:left;margin-left: 10px;">
                                    <div style="font-weight: 600;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;font-size: 18px;line-height: 21px;">
                                        <a href="{{ route('hotel.detail', $hotel["hotel_id"]) }}?startDate={{ $startDate }}&endDate={{ $endDate }}">{{ $hotel["name"] }}</a>
                                    </div>
                                    <div title="Số sao đánh giá này do bạn Dũng tự điền, phản ánh sự hư cấu cũng như sự không có thật của các hotel.">
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
                                        <p>{{ $hotel['room_type']['type'] }}</p>
                                    </div>
                                </div>
                                <div class="price"  style="width: 30%; float:right; display: flex; justify-content: flex-end;align-items: flex-end;">
                                    <div class="" style="color: #1a202c;width: 100%;display: flex;padding: 15px 15px 0 0;font-size: 12px;align-items: flex-end; padding-left: 16px;flex-direction: column;">
                                            <div class="" style="color: #ffffff;width: 42px;display: flex;position: relative;font-size: 12px;background: #f38e11;margin-top: 12px;min-height: 18px;align-items: center;font-weight: 600;line-height: 14px;border-radius: 3px 3px 0px 3px;justify-content: center;">
                                                <div style="    padding: 2px 4px;font-size: 14px;font-weight: 600;line-height: 16px;">-{{$hotel['discount']}}%</div>
                                                <div style="right: 0; width: 0;bottom: -4px;height: 0;position: absolute;border-color: transparent #f38e11 transparent transparent;border-style: solid;border-width: 0px 5px 5px 0;"></div>
                                            </div>
                                            <span class="" style="color: #4A5568;margin: 6px 0 0 0;font-size: 14px;line-height: 16px;text-decoration-line: line-through;">{{number_format($hotel['price'])}}đ /đêm</span>
                                            
                                            <span class="" style="font-size: 20px;margin-top: 2px;font-weight: 600;line-height: 23px;">{{  number_format($hotel['price']-($hotel["price"]*$hotel["discount"]/100)) }}
                                                <span class="" style="font-size: 14px; line-height: 16px; font-weight: 400;"> /đêm</span>
                                            </span>
                                            <div style="border: 1px dashed #cbd5e0;display: flex;margin-top: 8px;align-items: center;border-radius: 8px;padding: 10px;flex-direction: column;">
                                                <div  style="align-items: center;">
                                                    <p style="font-weight: 400; display: flex; font-size: 14px; align-items: center; line-height: 16px;">
                                                        <span style="white-space: nowrap;">Nhập mã:&nbsp;</span>
                                                        {{-- @foreach ($codes as $code) --}}
                                                            <span class="" style="color: #00B6F3;display: flex;font-size: 14px;align-items: center;font-weight: 600;line-height: 16px;">{{$codes->first()-> code}}</span>
                                                        {{-- @endforeach --}}
                                                        <span class="" style="color: #ffffff;display: flex;padding: 1px 3px;font-size: 14px;background: #00B6F3;align-items: center;font-weight: 600;line-height: 16px;margin-left: 4px;border-radius: 3px;">
                                                            <span style="padding-right: 4px;">-</span>{{$codes->first()->reduction}}%
                                                        </span>
                                                        
                                                    </p>
                                                    <p class="" style="width: 100%;font-size: 20px;margin-top: 3px;text-align: right;word-break: break-word;font-weight: 600;line-height: 23px;color: #f38e11;">{{  number_format(($hotel['price']-($hotel["price"]*$hotel["discount"]/100))-(($hotel["price"]*$hotel["discount"]/100)-(($hotel["price"]*$hotel["discount"]/100)*$codes->first()-> reduction/100))) }}đ
                                                        <span class="" style="font-size: 14px;font-weight: 400;line-height: 16px;margin-left: 2px;">/đêm</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            @endforeach
                            
                            <div class="phantrang" style="width: 100%;height: 150px;display: flex;justify-content: center;align-items: center;">
                                <div class="phantrang_container" style="width: 100%;">
                                    @if($sohotels/2 != null)
                                    <ul style="display: flex; justify-content: center;">
                                        <div><a href="{{ request()->fullUrlWithQuery(['page' => 1]) }}"><svg style="stroke: #1A202C;transform: rotate(90deg);" width="14" height="8" fill="none" class="svgFillAll jss11675"><path d="M13 1L7 7 1 1" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></div>
                                         @for ($i=0; $i < $sohotels/2; $i++)
                                        <li class="{{ Request::get('page') == ($i+1) ? 'activept' : 'defau'}}" style="list-style: none;color: #FFF;width: 32px;height: 32px;font-size: 14px;font-weight: 600;display: flex;line-height: 16px;border-radius: 100px;margin: 0px 10px;align-items: center;justify-content: center;;"><a style="color: white;text-decoration: none;" href="{{ request()->fullUrlWithQuery(['page' => ($i+1)]) }}">{{ ($i+1) }}</a></li>
                                         @endfor
                                         <div><a href="{{ request()->fullUrlWithQuery(['page' =>round($sohotels/2) ]) }}"><svg style="stroke: #1A202C;transform: rotate(270deg);" width="14" height="8" fill="none" class="svgFillAll jss11675"><path d="M13 1L7 7 1 1" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></div>
                                    </ul>
                                    {{-- @else --}}
                                    
                                    @endif
                                </div>
                            </div>
                            @else
                                <div style="display: flex;margin-top: 155px;align-items: center;flex-direction: column;justify-content: center;">
                                    <div class="MuiBox-root jss7352">
                                        <div class="jss124 jss7350">
                                            <div class="jss125 jss128" style="border-radius: 0px;"></div>
                                            <div class="lazyload-wrapper ">
                                                <img style="background: #f38e11;border-radius: 100%;" src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_no_result_search_listing.svg" class="jss127 jss7350" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p style="font-size: 14px;margin-top: 16px;font-weight: 400;line-height: 19px;font-family: cursive;">Không tìm thấy kết quả nào với các tiêu chí tìm kiếm của bạn.</p>
                                    <p style="font-family: serif;">Vui lòng thay đổi tiêu chí tìm kiếm</p>
                                    
                                </div>
                            @endif
                        </div>
                        
                    </div>
                </div>
                
                
            
            
            <div class="clearfix"></div>
            
        </div>
        <div class="clearfix"></div>
        <div class="themchoco" style="width: 100%;min-height: 100px;background-color: white;margin: 20px 0px;padding: 20px 0px">
            <div class="near container {{ $sohotels != 0 ? 'datehidden' : ''}}" >
                 {{-- @if($sohotels != 0) --}}
                <div style="font-size: 20px;font-family: sans-serif;font-weight: bold;">Một số khách sạn ở {{$namecity}}</div>
                <div style="display: flex;flex-direction: row;justify-content: space-between;margin-top: 20px;">
                    @foreach($hotelsnear as $hotel)
                            <div class="" style="display: flex;width: 18%;flex-direction: column;justify-content: space-between;">
                                <div class="image" style="height: 140px;">
                                    <img src="../../resources/images/hotels/{{$hotel['image']}}" class="" style="border-radius: 8px;width: 100%;height: 100%;">
                                </div>
                                <div class="name"  style="">
                                    <div style="    font-size: 14px;font-family: -apple-system,BlinkMacSystemFont,sans-serif;font-weight: 600;line-height: 16px;margin-top: 10px;">
                                        <a style="color: #0d96ff;" href="{{ route('hotel.detail', $hotel["id"]) }}?startDate={{ $startDate }}&endDate={{ $endDate }}">{{ $hotel["name"] }}</a>
                                    </div>
                                    <div title="Số sao đánh giá này do bạn Dũng tự điền, phản ánh sự hư cấu cũng như sự không có thật của các hotel.">
                                        @for ($i=0; $i < $hotel["star"]; $i++)
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" viewBox="0 0 576 512" style="height: 12px;"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" style="color: #f38e11;"/></svg>
                                        @endfor
                                    </div>
                                    
                                </div>
                                
                            </div>
                            @endforeach
                </div>
            </div>
        </div>
        <footer class="footer">
    <div class="container_footer" style="margin: 0 auto; padding-inline: 100px; margin-top: 20px; background-color: #e7e7e7;">
      <div class="footer__middle">
        <div class="footer__nav">
          <a href="/ve-vntrip">Về Bookinghotel.vn</a>
          <a href="/lien-he">Liên hệ</a>
          <a href="/dieu-khoan-su-dung">Điều khoản sử dụng</a>
          <a href="/quy-che-hoat-dong">Quy chế hoạt động</a>
          <a href="/chinh-sach-bao-mat">Chính sách bảo mật</a>
          <a target="_blank" href="https://www.vntrip.vn/cam-nang" rel="noopener noreferrer">Blog du lịch</a>
          <a target="_blank" href="http://hr.vntrip.vn/" rel="noopener noreferrer">Tuyển dụng</a>
          <a target="_blank" href="https://policy.vntrip.vn/loyalty-vntrip" rel="noopener noreferrer">Hoàn tiền thành viên</a>
          <a target="_blank" href="https://partner.vntrip.vn/" rel="noopener noreferrer">Hợp tác đại lý</a>
        </div>
        <div class="footer__contact">
          <p class="semibold">CÔNG TY TNHH BOOKINGHOTEL.VN</p>
          <p class="semibold">Tầng 1001 Tòa nhà chiến thắng</p>
          <p>Số 92 Quang Trunh, Hải Châu, Đà Nẵng</p>
          <p>Số tài khoản: 100120010000</p>
          <p>Ngân hàng: demo</p>
          <p>Chi nhánh: Thăng Long</p>
          <p>Ngày cấp ĐKKD: 9/5/2016</p>
          <p>Email:&nbsp;<a href="mailto:cs@vntrip.vn" class="semibold">cskh@vnbookinghotel.vn</a></p>
          <p>Hotline:&nbsp;<span class="green-1 semibold"><a href="tel:096 326 6688" class="green-1">0123456789</a></span></p>
        </div>
        <div class="footer__form">
          <p class="mb15"><strong>Du lịch thông minh!&nbsp;</strong>Đăng ký nhận tin để lên kế hoạch cho kỳ nghỉ tới ngay từ bây giờ:</p>
          <form class="ant-form ant-form-horizontal d-flex mb15">
            <div class="ant-row ant-form-item mb0 flex1 ant-form-item-has-success" style="row-gap: 0px;">
              <div class="ant-col ant-form-item-control">
                <div class="ant-form-item-control-input">
                  <div class="ant-form-item-control-input-content">
                    <input type="text" class="ant-input form-control" placeholder="Email của bạn" value="">
                  </div>
                </div>
                <div class="ant-form-item-explain ant-form-item-explain-success">
                  <div role="alert">
                    </div>
                  </div>
                </div>
              </div>
              <button type="button" class="ant-btn ant-btn-primary" style="border: 1px solid #f38e11;color: #f38e11;">
                <span>Đăng ký</span>
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="footer__bottom">
        <div class="" style="margin: 0 auto;padding-inline: 100px;margin-top: 20px;background-color: #f38e11;display: flex;height: 50px;align-items: center;justify-content: space-between;">
          <p class="footer__copyright" style="float: left;width: 50%;margin: 0; color: black">Web bookinghotel © 2021 Bookinghotel.vn</p>
          <div class="footer__social" style="float: right;">
            <a href="https://www.facebook.com/nguyendoun1001" target="_blank" rel="noopener noreferrer">
              <svg width="18" height="18" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                <path d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h151v-181h-60v-90h60v-61c0-49.628906 40.371094-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm0 0"></path>
              </svg>
              <span style="color: black">Facebook</span>
            </a>
            <a href="https://www.instagram.com/nguyendoun1001/" target="_blank" rel="noopener noreferrer">
              <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="m12.004 5.838c-3.403 0-6.158 2.758-6.158 6.158 0 3.403 2.758 6.158 6.158 6.158 3.403 0 6.158-2.758 6.158-6.158 0-3.403-2.758-6.158-6.158-6.158zm0 10.155c-2.209 0-3.997-1.789-3.997-3.997s1.789-3.997 3.997-3.997 3.997 1.789 3.997 3.997c.001 2.208-1.788 3.997-3.997 3.997z"></path>
                <path d="m16.948.076c-2.208-.103-7.677-.098-9.887 0-1.942.091-3.655.56-5.036 1.941-2.308 2.308-2.013 5.418-2.013 9.979 0 4.668-.26 7.706 2.013 9.979 2.317 2.316 5.472 2.013 9.979 2.013 4.624 0 6.22.003 7.855-.63 2.223-.863 3.901-2.85 4.065-6.419.104-2.209.098-7.677 0-9.887-.198-4.213-2.459-6.768-6.976-6.976zm3.495 20.372c-1.513 1.513-3.612 1.378-8.468 1.378-5 0-7.005.074-8.468-1.393-1.685-1.677-1.38-4.37-1.38-8.453 0-5.525-.567-9.504 4.978-9.788 1.274-.045 1.649-.06 4.856-.06l.045.03c5.329 0 9.51-.558 9.761 4.986.057 1.265.07 1.645.07 4.847-.001 4.942.093 6.959-1.394 8.453z"></path>
                <circle cx="18.406" cy="5.595" r="1.439"></circle>
              </svg>
              <span style="color: black">Instagram</span>
            </a>
          </div>
        </div>
      </div>
  </footer>
    </div>
    
    <!-- //modal login -->
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #ff7b0a;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Đăng nhập</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form dialog-book-quick">
                      <form action="{{ route('home.login')}}" method="post">
                        @csrf
                        @if(session()->has('error'))
                          <p style="color:red">{{session()->get('error')}}</p>
                        @endif
                       
                        <div class="form-group">
                          <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Email</label>
                          <input type="email"  name="email" class="form-control" id="txtEmail_divBookQuick" value="{{ old('email', '') }}" required>
                          @if($errors->has('email'))
                            <p style="color:red">{{$errors->first('email')}}</p>
                          @endif
                        </div>
                        <div class="form-group">
                          <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Password</label>
                          <input type="password" name="password" class="form-control" id="txtMobile_divBookQuick" required>
                          @if($errors->has('password'))
                            <p style="color:red">{{$errors->first('password')}}</p>
                          @endif
                        </div>
                        <div class="form-group">
                          <input type="checkbox" id="brand1" value="">
                          <label for="brand1"><span></span>Remember me</label>
                          <a href="#">Forgot password?</a><br>              
                        </div>
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary" style="background-color: #ff7b0a;padding: left 40px;" value="Đăng nhập" ></input>
                        </div>
                      </form>
                    </div>
                </div>
                <div class="modal-footer ">
                    <p>Nếu chưa có tài khoản hãy đăng ký tại đây<span>→</span> <a class="w3_play_icon1" href="#" data-toggle="modal" data-target="#register">Đăng ký</a></p>
                    <div class="clear"></div>
                </div>
              </div>
          </div>
        </div>

       
        <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #ff7b0a;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Đăng ký</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form dialog-book-quick">
                      <form action="{{ route('home.register')}}" method="post">
                        @csrf
                        <div class="form-group">
                          <p class="quote" style=" border: solid 1px #e4e2e2;padding: 10px;font-size: .8em;background-color: #edf9d2;font-style: italic;line-height: 18px;">
                          Đăng ký tài khoản để được nhiều ưu đãi hơn khi đặt phòng<br>
                          Hãy đăng ký ở dưới !!!.<br>
                          </p  
                        </div>
                        <div class="form-group">
                          <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Tên<i style="color:red">*</i></label>
                          <input type="text"  name="name" class="form-control" id="txtEmail_divBookQuick" value="{{ old('name', '') }}" required>
                          @if($errors->has('name'))
                            <p style="color:red">{{$errors->first('name')}}</p>
                          @endif
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Email<i style="color:red">*</i></label>
                            <input type="email"  name="email" class="form-control" id="txtEmail_divBookQuick" value="{{ old('email', '') }}" required>
                              @if($errors->has('email'))
                                <p style="color:red">{{$errors->first('email')}}</p>
                              @endif
                          </div>
                          <div class="form-group col-md-6">
                            <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Mật khẩu<i style="color:red">*</i></label>
                            <input type="password" name="password" class="form-control" id="txtMobile_divBookQuick" required>
                            @if($errors->has('password'))
                              <p style="color:red">{{$errors->first('password')}}</p>
                            @endif
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Điện thoại<i style="color:red">*</i></label>
                            <input type="text"  name="phone" class="form-control" id="txtEmail_divBookQuick" value="{{ old('phone', '') }}" required>
                            @if($errors->has('phone'))
                              <p style="color:red">{{$errors->first('phone')}}</p>
                            @endif
                          </div>
                          <div class="form-group col-md-6">
                            <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Địa chỉ<i style="color:red">*</i></label>
                            <input type="text" name="address" class="form-control" id="txtMobile_divBookQuick" value="{{ old('address', '') }}" required>
                            @if($errors->has('address'))
                              <p style="color:red">{{$errors->first('address')}}</p>
                            @endif
                          </div>
                        </div>
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary" style="background-color: #ff7b0a;padding: left 40px;" value="Đăng ký" >
                        </div>
                      </form>
                    </div>
                </div>
                <div class="modal-footer ">
                    <p>Bạn đã có tài khoản hãy đăng nhập tại đây<span>→</span> <a class="w3_play_icon1" href="#" data-toggle="modal" data-target="#login">Đăng nhập</a></p>
                    <div class="clear"></div>
                </div>
              </div>
          </div>
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
        $(function(){
            $('.container__star').change(function(){
                $("#form_price").submit();
            })
        })
    </script>

    
    <script>
  @if( $errors->has('email')|| $errors->has('password') || $errors->has('phone'))
    $('#register').modal('show');
  @endif
</script> 
<script >
  @if(session()->has('error'))
    $('#login').modal('show');
  @endif
</script>          
           


<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
<script>
    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 5
    });
</script>

    <!-- <script>
        $('#category-filter').click(function(){
            var category = [], tempArray = [];
            $.each($("[data-filters = 'category']:checked"),function(){
                tempArray.push($(this).val());               
            });
            tempArray.reverse();
            if(tempArray.length !== 0){
                category+= '?cate=' +tempArray.toString();
            }
            window.location.href = category
        })
    </script> -->

     <!-- login -->
     <script>
        @if( $errors->has('email')|| $errors->has('password') || $errors->has('phone'))
            $('#register').modal('show');
        @endif
    </script> 
    <!-- register -->
    <script >
        @if(session()->has('error'))
            $('#login').modal('show');
        @endif
    </script>
@stop

    

