@extends('layouts.master')

@section('title', 'Khách sạn')

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
        .chitietgia__hover{
            cursor: pointer;
            margin: 12px 0 30px;
            font-size: 17px;
            font-weight: 400;
            line-height: 16px;
            color: #00b6f3;
        }
       
        .chitietgia__hover:hover .chitietgia{
            display: flex;
        }
        .chitietgia{
            position: absolute;
            display: none;
            background-color:#ffffff;
            border-color:#e2e8f0;
            border-radius:8px;
            border:1px solid;
            font-size: 14px;
            justify-content:space-between;
            line-height:16px;
            text-align:center;
            font-size: 16px;
            margin-left: -110px;
        }
        .footer{
            border-top: 5px solid #f38e11;
        }
    </style>
@stop

@section('content')
    <div class="body">
        <div class="container-fluid" style="background-color: #e7e7e7; margin: 0px; padding:0px;">
            <div class="container-fluid" style="background-color: white; margin: 0px; padding:0px;position: fixed;z-index: 1001;">
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

                            <form class="booking_details tab__content" style="width: 1111px" id="Hotels" action="{{ route('search.hotel') }}" method="GET" >
                            <div class="item">
                                <p style="margin: 0px;">Địa điểm:</p>
                                <i class="fa fa-search"></i>
                                <input  class="timkiem" type="text" name="city" placeholder="Enter a destination" value="" style="border: none;padding-left: 4px;">
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
                    <div style="width: 100%;min-height: 50px; ">
                        <div style="margin: 0;display: flex;padding: 0;flex-wrap: wrap;list-style: none;align-items: center; ">
                            <a href="">Khách sạn</a>
                            <li aria-hidden="true" style="display: flex;margin-left: 8px;user-select: none;margin-right: 8px;"> › </li>
                            <p style="font-size: 12px;line-height: 14px;margin: 0;font-weight: 400;">
                                @foreach ($hotels as $hotel)
                                    <div>{{ $hotel["city"] }}</div>
                                @endforeach
                            </p>
                            <li aria-hidden="true" style="display: flex;margin-left: 8px;user-select: none;margin-right: 8px;"> › </li>
                            <p style="font-size: 12px;line-height: 14px;margin: 0;font-weight: 400;">
                                @foreach ($hotels as $hotel)
                                    <div>{{ $hotel["name"] }}</div>
                                @endforeach
                            </p>
                        </div>
                    </div>
                   <div style="width: 100%;min-height: 125px; ">
                        @foreach ($hotels as $hotel)
                        <div class="infor__hotel__left" style="width: 70%;float: left;">
                            <div style="font-weight: 600;font-size: 25px;font-family: 'FontAwesome';">{{ $hotel["name"] }}</div>
                            <div style="display: flex;align-items: center;margin: 5px 0px 5px 0px;">
                                <div title="Số sao đánh giá này do bạn Dũng tự điền, phản ánh sự hư cấu cũng như sự không có thật của các hotel." style="display: flex;">
                                    @for ($i=0; $i < $hotel["star"]; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" viewBox="0 0 576 512" style="height: 12px;"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" style="color: #f38e11;"/></svg>
                                    @endfor
                                </div>
                                <div style="color: #f38e11;border: 1px solid #f38e11;height: 22px;display: flex;padding: 2px 4px;font-size: 12px;align-items: center;
                                                    line-height: 14px;margin-left: 6px;white-space: nowrap;border-radius: 4px;justify-content: center;">
                                    <span>{{ $hotel["category"] }}</span>
                                </div>
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
                                        <svg width="16" height="16" fill="none"><path d="M8 9.333a2 2 0 100-4 2 2 0 000 4z" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.771 11.105l-2.828 2.828a1.333 1.333 0 01-1.885 0l-2.83-2.828a5.333 5.333 0 117.543 0v0z" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <p>{{ $hotel["address"] }}</p>
                            </div>
                        </div>
                        <div class="infor__hotel__right" style="width: 30%;float: right;display: flex;align-items: center;justify-content: flex-end;padding-top: 10px;">
                            <div style="display: flex;align-items: flex-end;flex-direction: column;">
                                <div style="display: flex;">

                                    @if(isset($hotel["discount"]))
                                     <div  style="font-size: 14px; line-height: 17px; text-decoration: line-through; margin-right: 5px; white-space: nowrap; font-weight: normal;">{{  number_format($hotel["price"]) }}đ /đêm</div>
                                    <span style="color: #ffffff;padding: 2px 4px;background: #f38e11;max-height: 19px;border-radius: 3px;font-size: 14px;font-family: -apple-system;font-weight: 600;line-height: 16px;">
                                        -{{ $hotel["discount"] }}%
                                    </span>
                                    @else
                                        <div  style="font-size: 20px; line-height: 17px; margin-right: 5px; white-space: nowrap; font-weight: normal;">{{  number_format($hotel["price"]) }}đ /đêm</div>
                                    @endif
                                </div>
                                @if(isset($hotel["discount"]))
                                <div style="font-size: 20px;margin-top: 3px;font-weight: 600;line-height: 23px;white-space: nowrap;">{{  number_format($hotel["price"]*$hotel["discount"]/100) }}<span style="font-size: 14px;font-weight: 400;line-height: 16px;margin-left: 3px;">/đêm</span></div>
                                @endif

                            </div>
                            <button  tabindex="0" type="button" style="margin-left: 16px; color: rgb(253, 253, 253);width: 156px;border: none;height: 44px;padding: 6px 8px;font-size: 16px;min-height: 20px;font-weight: 600;border-radius: 8px;text-transform: none;background-color: #f38e11;">
                                <span class="">
                                    <div class="">
                                        <div class="" opacity="1">Chọn phòng</div>
                                    </div>
                                </span>
                                <span class=""></span>
                            </button>
                        </div>
                        {{-- phần hình ảnh --}}
                        <div class="carousel-inner">
                                                    
                            <div class="carousel-item active">
                    
                                <img src="https://du-lich.chudu24.com/f/m/1907/30/melia-ho-tram-6701-1632578.jpg?w=266&amp;h=232" class="d-block w-100" alt="Đầy là ảnh">
                            </div>
                                                    

                        </div>
                         @endforeach
                    </div>
                    <div style="margin: 0 auto;display: flex;max-width: 1180px;align-items: center;justify-content: space-between;">
                        <div style="font-size: 20px;margin-top: 32px;font-weight: 600;line-height: 23px;">Chọn phòng</div>
                    </div>
                    <form action="" style="display: flex;">
                        <div style="width:85%;">
                            @foreach($rooms as $hotel)
                                <div style="display: flex;width:100%; background: white; margin-bottom: 10px;border: 1px solid rgb(243 142 17);border-radius: 8px;">
                                    <div style="width:24%">
                                        <div style="position: unset; margin: 15px;">
                                            <div  class="" style="width: 100%;">
                                                <img class="img"  style="width: 100%;border-radius: 8px;" title="" src="https://du-lich.chudu24.com/f/m/1907/30/melia-ho-tram-6701-1632578.jpg?w=266&amp;h=232">
                                            </div>
                                            <div class=""><a href="">Xem chi tiết</a></div>
                                        </div>
                                    </div>
                                    <div style="width:25%">
                                        <div class="typeroom_name" style="margin-top: 15px;">
                                            <div style="color: #1a202c;overflow: hidden;font-size: 18px;align-items: center;font-weight: 600;line-height: 21px;white-space: nowrap;padding-right: 10px;text-overflow: ellipsis;">Phòng Superior</div>
                                        </div>
                                        <div class="typeroom__viewandS" style="margin: 8px 0 15px 0;display: flex;align-items: center;">
                                            <div style="width: 16px; height: 16px;">
                                                <svg fill="none"><path d="M12 2H4a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2z" stroke="#4A5568" stroke-miterlimit="10" stroke-linecap="square"></path><path d="M11.333 11.333L5 5M11.334 8.333v3h-3M4.667 7.667v-3h3" stroke="#4A5568" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </div>
                                            <div style="font-size: 14px; line-height: 16px; font-weight: 400; margin-right: 24px; margin-left: 8px;">32m2</div>
                                            <div style="width: 16px; height: 16px;">
                                                <svg  fill="none"><path d="M8 9.333a1.333 1.333 0 100-2.666 1.333 1.333 0 000 2.666z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.667 8c-1.778 3.111-4 4.667-6.667 4.667S3.11 11.11 1.333 8c1.778-3.111 4-4.667 6.667-4.667S12.889 4.89 14.667 8z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </div>
                                            <div style="margin-left: 8px;font-size: 14px; line-height: 16px; font-weight: 400; cursor: pointer;">Hướng Thành Phố</div>
                                        </div>
                                        <div class="typeroom__dichvudikem">
                                            <div class="" style="display: flex;margin-top: 8px;align-items: center;">
                                                <svg width="16" height="16" fill="none"><path d="M11.31 11.976l1.862 1.862M3.241 3.908l4.966 4.965M4.483 2.667L7.586 5.77 5.103 8.253 2 5.149M3.241 13.838l10.552-10.55a5.036 5.036 0 01-1.242 4.965c-2.194 2.194-3.724 2.482-3.724 2.482" stroke="#48BB78" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                <p style="margin-left: 8px;">Bữa sáng miễn phí</p>
                                            </div>
                                        </div>
                                        <div class="typeroom__sogiuong">
                                            <div class="" style="display: flex;margin-top: 8px;align-items: center;">
                                                <svg width="14" height="14" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.875 0H0V9.75H1.875H3V12H4.875V9.75H16.125V12H18V9.75H19.125V6.375H1.875V0Z" fill="#878787"></path><rect x="3" y="4" width="15" height="1.125" fill="#878787"></rect></svg>
                                                <p style="margin-left: 8px;">2 giường đơn</p>
                                            </div>
                                        </div>
                                        <div class="typeroom__soluongconlai">
                                            <div>
                                                Chỉ còn 3 phòng!
                                            </div>
                                        </div>
                                    </div>
                                    <div style="width:10%;border-left: 1px solid rgba(224, 224, 224, 1);">
                                        <div class="" style="display: flex;padding: 24px 37px 0 27px;align-items: center;white-space: nowrap;flex-direction: column;">
                                            <svg width="24" height="24" fill="none"><path d="M12 12.25a4.75 4.75 0 100-9.5 4.75 4.75 0 000 9.5zM12 13.25a7.508 7.508 0 00-7.5 7.5.5.5 0 00.5.5h14a.5.5 0 00.5-.5 7.508 7.508 0 00-7.5-7.5z" fill="#718096"></path></svg>x2 người
                                        </div>
                                    </div>
                                    <div style="width:13%;border-left: 1px solid rgba(224, 224, 224, 1);">
                                        <div class="" style="align-items: center; padding: 24px 37px 0px 27px;display: flex;text-align: center;;flex-direction: column-reverse;">
                                            <span class="">1 giường King</span>
                                            <div class="">
                                                <div>
                                                    <svg width="24" height="24" fill="none" class="svgFillAll jss939"><g clip-path="url(#icon_bed_double_svg__clip0)" fill="#718096"><path d="M22.5 11.75h-21a1.5 1.5 0 00-1.5 1.5v4a1.5 1.5 0 001.125 1.45.5.5 0 01.375.483v1.067a1 1 0 102 0v-1a.5.5 0 01.5-.5h16a.5.5 0 01.5.5v1a1 1 0 002 0v-1.064a.5.5 0 01.375-.483A1.5 1.5 0 0024 17.25v-4a1.5 1.5 0 00-1.5-1.5zM2.5 10.25a.5.5 0 00.5.5h18a.5.5 0 00.5-.5v-5a2.5 2.5 0 00-2.5-2.5H5a2.5 2.5 0 00-2.5 2.5v5zm4-3h2a2.5 2.5 0 012.166 1.25.5.5 0 01-.433.75H4.767a.5.5 0 01-.433-.75A2.5 2.5 0 016.5 7.25zm9 0h2a2.5 2.5 0 012.166 1.25.5.5 0 01-.433.75h-5.466a.5.5 0 01-.433-.75A2.5 2.5 0 0115.5 7.25z"></path></g><defs><clipPath id="icon_bed_double_svg__clip0"><path fill="#fff" d="M0 0h24v24H0z"></path></clipPath></defs></svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="color: rgb(113, 128, 150);font-size: 14px;line-height: 17px;padding-top: 24px;text-align: center;"> --- hoặc ---</div>
                                        <div class="" style="align-items: center; padding: 24px 37px 0px 27px;display: flex;text-align: center;;flex-direction: column-reverse;">
                                            <span class="">2 giường đơn</span>
                                            <div class="" style="display: flex;align-items: center;text-align: center;">
                                                <div class=""><svg width="24" height="24" fill="none" class="svgFillAll jss939"><path d="M21 11.75H3a1.5 1.5 0 00-1.5 1.5v4a1.5 1.5 0 001.125 1.45.5.5 0 01.375.483v1.067a1 1 0 102 0v-1a.5.5 0 01.5-.5h13a.5.5 0 01.5.5v1a1 1 0 002 0v-1.064a.5.5 0 01.375-.483A1.5 1.5 0 0022.5 17.25v-4a1.5 1.5 0 00-1.5-1.5zM4 10.25a.5.5 0 00.5.5h15a.5.5 0 00.5-.5v-5a2.5 2.5 0 00-2.5-2.5h-11A2.5 2.5 0 004 5.25v5zm7-3h2a2.5 2.5 0 012.166 1.25.5.5 0 01-.433.75H9.267a.5.5 0 01-.433-.75A2.5 2.5 0 0111 7.25z" fill="#A0AEC0"></path></svg></div>
                                                <div><svg width="24" height="24" fill="none" class="svgFillAll jss939"><path d="M21 11.75H3a1.5 1.5 0 00-1.5 1.5v4a1.5 1.5 0 001.125 1.45.5.5 0 01.375.483v1.067a1 1 0 102 0v-1a.5.5 0 01.5-.5h13a.5.5 0 01.5.5v1a1 1 0 002 0v-1.064a.5.5 0 01.375-.483A1.5 1.5 0 0022.5 17.25v-4a1.5 1.5 0 00-1.5-1.5zM4 10.25a.5.5 0 00.5.5h15a.5.5 0 00.5-.5v-5a2.5 2.5 0 00-2.5-2.5h-11A2.5 2.5 0 004 5.25v5zm7-3h2a2.5 2.5 0 012.166 1.25.5.5 0 01-.433.75H9.267a.5.5 0 01-.433-.75A2.5 2.5 0 0111 7.25z" fill="#A0AEC0"></path></svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="width:8%;border-left: 1px solid rgba(224, 224, 224, 1);">
                                        <div class="" style="display: flex;padding: 24px 37px 0 27px;align-items: center;white-space: nowrap;flex-direction: column;">
                                            <label for="qty">Số phòng</label>
                                            <select name="qty" id="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="width:20%;border-left: 1px solid rgba(224, 224, 224, 1);padding: 0;font-size: 14px;border-top: 1px solid rgba(224, 224, 224, 1);text-align: center;border-left: 1px solid rgba(224, 224, 224, 1);font-weight: 400;line-height: 16px;vertical-align: top;">
                                        <div class="" style="color: #1a202c;width: 100%;display: flex;padding: 15px 15px 0 0;font-size: 12px;align-items: flex-end; padding-left: 16px;flex-direction: column;">
                                            <div class="" style="color: #ffffff;width: 42px;display: flex;position: relative;font-size: 12px;background: #f38e11;margin-top: 12px;min-height: 18px;align-items: center;font-weight: 600;line-height: 14px;border-radius: 3px 3px 0px 3px;justify-content: center;">
                                                <div style="    padding: 2px 4px;font-size: 14px;font-weight: 600;line-height: 16px;">-5%</div>
                                                <div style="right: 0; width: 0;bottom: -4px;height: 0;position: absolute;border-color: transparent #f38e11 transparent transparent;border-style: solid;border-width: 0px 5px 5px 0;"></div>
                                            </div>
                                            <span class="" style="color: #4A5568;margin: 6px 0 0 0;font-size: 14px;line-height: 16px;text-decoration-line: line-through;">1.377.910đ /đêm</span>
                                            
                                            <span class="" style="font-size: 20px;margin-top: 2px;font-weight: 600;line-height: 23px;">1.312.512đ
                                                <span class="" style="font-size: 14px; line-height: 16px; font-weight: 400;"> /đêm</span>
                                            </span>
                                            <div>
                                                <div  style="align-items: center;">
                                                    <p style="font-weight: 400; display: flex; font-size: 14px; align-items: center; line-height: 16px;">
                                                        <span style="white-space: nowrap;">Nhập mã:&nbsp;</span>
                                                        <span class="" style="    color: #00B6F3;display: flex;font-size: 14px;align-items: center;font-weight: 600;line-height: 16px;">STAY</span>
                                                        <span class="" style="color: #ffffff;display: flex;padding: 1px 3px;font-size: 14px;background: #00B6F3;align-items: center;font-weight: 600;line-height: 16px;margin-left: 4px;border-radius: 3px;">
                                                            <span style="padding-right: 4px;">-</span>15%
                                                        </span>
                                                    </p>
                                                    <p class="" style="width: 100%;font-size: 20px;margin-top: 3px;text-align: right;word-break: break-word;font-weight: 600;line-height: 23px;color: #f38e11;">1.115.634đ
                                                        <span class="" style="font-size: 14px;font-weight: 400;line-height: 16px;margin-left: 2px;">/đêm</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="chitietgia__hover">Chi tiết giá
                                                <div class="chitietgia" style="color: black">
                                                    <div class="" style="text-align: left;">
                                                        <div class="" style="margin: 10px;">1 phòng x 1 đêm</div>
                                                        <div class="" style="margin:10px;">Thuế và phí dịch vụ khách sạn</div>
                                                        <div class="" style="margin: 10px;">Chúng tôi khớp giá, giảm thêm</div>
                                                        <div class="" style="margin: 10px;font-weight: 600; padding-bottom: 12px;">Tổng giá</div>
                                                    </div>
                                                    <div class="" style="text-align: right;">
                                                        <div class="" style="margin: 10px;">
                                                            <span class="">1.312.512đ</span>
                                                        </div>
                                                        <div class="" style="margin: 10px;">204.142đ</div>
                                                        <div class="">
                                                            <span class="" style="margin: 5px;">-71.654đ</span>
                                                        </div>
                                                        <div class="" style="padding-bottom: 12px;margin: 10px;">1.445.000đ</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div style="width:15%;background: white;margin: 0px 10px 10px 10px;border: 1px solid rgb(243 142 17);border-radius: 8px;">
                             <input style="    color: rgb(253, 253, 253);width: 90%;border: none;height: 44px;margin: 7px;padding: 6px 8px;font-size: 16px;min-height: 20px;font-weight: 600;border-radius: 8px;text-transform: none;background-color: rgb(243 142 17);" class="" type="submit" value="Đặt Phòng">
                        </div>
                    </form>
                   <div class="clearfix">
        kkkkkkkkkkkkk

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

@stop

    


 
