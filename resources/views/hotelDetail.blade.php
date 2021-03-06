@extends('layouts.master')

@section('title', $hotel->first()-> name)

@section('styles')
    <style>
        p{
            margin: 0;
        }
        .{
            display: flex;
            font-size: 14px;
            font-weight: 600;
            line-height: 50px;
            border-bottom: solid 1px #babbbc;
            margin-bottom: 16px;
        }
        .-item{
            color: #1A202C;
            cursor: pointer;
            margin-right: 35px;
        }
        .-item:hover, .-item:active, .active, .-item>a:hover {
             color: #f38e11;
             border-bottom: solid 1px #f38e11;
            text-decoration: none;
        }
        .-item>a{
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
        

        
        /*----- Ph???n menu -----*/

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
        /*----- css cho ph???n menu cha -----*/
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
            margin: 1px 0 10px;
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
            z-index: 1001;
            font-size: 16px;
            margin-left: -110px;
        }
        .footer{
            border-top: 5px solid #f38e11;
        }
        .datehidden{
            display: none;
        }
        .show{
            display: flex;
        //comment
        .no-box-shadow {
            box-shadow: none
        }

        .no-box-shadow:focus {
            box-shadow: none
        }
        .day {
            font-size: 15px;
        }
        .star {
            padding-left: 5px;
            padding-top:2px;
        }
        .star li{
            color:#ffcc00;
            font-size:20px;
            padding-right:5px
        }
        .heart {
            border: 1px soild green !important;
            border-color: green !important;
            border-radius: 22px
        }

        .heart-icon {
            color: green
        }

        .comment-text {
            font-size: 20px;
            padding-left:55px;
        }

        .delete {
            font-size: 13px;
            cursor: pointer
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            padding: 20px;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border-radius: 6px;
            -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1)
        }

        .comment-box {
            padding: 5px
        }

        .comment-area textarea {
            resize: none;
            border: 1px solid #ad9f9f
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #ffffff;
            outline: 0;
            box-shadow: 0 0 0 1px rgb(255, 0, 0) !important
        }

        .send {
            color: #fff;
            background-color: #ff0000;
            border-color: #ff0000
        }

        .send:hover {
            color: #fff;
            background-color: #f50202;
            border-color: #f50202
        }

        .rating {
            display: flex;
            margin-top: -10px;
            flex-direction: row-reverse;
            margin-left: -4px;
            float: left
        }

        .rating>input {
            display: none
        }

        .rating>label {
            position: relative;
            width: 19px;
            font-size: 25px;
            color: #ffcc00;
            cursor: pointer
        }

        .rating>label::before {
            content: "\2605";
            position: absolute;
            opacity: 0
        }

        .rating>label:hover:before,
        .rating>label:hover~label:before {
            opacity: 1 !important
        }

        .rating>input:checked~label:before {
            opacity: 1
        }

        .rating:hover>input:checked~label:before {
            opacity: 0.4
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
                                    <li>Khuy???n m??i</li>
                                    <li>Li??n h???</li>
                                    <li><a href="">?????t ph??ng nhanh</a>
                                        <ul class="sub-menu">
                                            <li style="margin: 0;" ><a style="padding: 15px 30px;" href="#" data-toggle="modal" data-target="#exampleModal">C?? nh??n</a></li>
                                            <li style="margin: 0;" ><a style="padding: 15px 33px;" href="#" data-toggle="modal" data-target="#phongdoan">T???p th???</a></li>
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
                                    <b>Xin ch??o:&nbsp;</b> <p class="nav__mobile-link" style="margin: 0px"> {{ Auth::user()->name}}</p>
                                    <p style="margin: 0px ;"><a href="{{ route('home.logout')}}" style="text-decoration:none">&nbsp;| ????ng xu???t</a></p>
                                    @else
                                    <div class="cta"><a href="#" style="color: black"  data-toggle="modal" data-target="#login">Sign In</a></div>
                                    <div class="cta active"><a style="color: white" href="#" data-toggle="modal" data-target="#register">Register</a></div> 
                                    @endif
                                </div>
                            </div>
                        </nav>
                    </header>

                    <div class="hotel_content" style="margin-top: 80px; width:100%">
                        <div class="booking_info PC">

                            <form class="booking_details tab__content" style="width: 1111px" id="Hotels" action="{{ route('search.hotel.form') }}" method="GET" >
                            <div class="item">
                                <p style="margin: 0px;">?????a ??i???m:</p>
                                <i class="fa fa-search"></i>
                                <input  class="timkiem" type="text" name="namehotel" placeholder="Enter a destination" value="{{ $hotel->first()->name }}" style="border: none;padding-left: 4px;">
                                <input hidden class="timkiem" type="text" name="idhotel" placeholder="Enter a destination" value="{{ $hotel->first()->id }}" style="border: none;padding-left: 4px;">
                            </div>

                            <div class="item" style="border-right: 1px solid #f38e11;">
                                <p style="margin: 0px;">Th???i gian ?????n:</p>
                                <input type="date"  name="startDate" value="{{ $startDate }}">
                                
                            </div>
                            <div class="item" style="border: none;">
                                <span class="" style="font-weight:600;font-family:-apple-system;">{{ $days}}</span>
                                <svg width="10" height="9" fill="none"><path d="M4.982.504h.173A3.319 3.319 0 008.66 6.01 3.982 3.982 0 114.982.5v.004z" stroke="#718096" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div class="item">
                                <p style="margin: 0px;">Th???i ??i???m ??i:</p>
                                <input type="date" name="endDate" value="{{ $endDate }}">
                              
                            </div>

                            {{-- <div class="item">
                                <div class="people">2 adults, 0 children <i class="fa fa-angle-down"></i></div>
                            </div> --}}

                            <div class="item">
                                <div class="cta active">
                                <input type="hidden" name="orderBy" value="DEFAULT">
                                <input class="cta active" type="submit" value="T??m">
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
                                <div class="people price">Gi??<i class="fa fa-angle-down"></i></div>
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
                                <div class="people price">Gi??<i class="fa fa-angle-down"></i></div>
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
                            <a href="">Kh??ch s???n</a>
                            <li aria-hidden="true" style="display: flex;margin-left: 8px;user-select: none;margin-right: 8px;"> ??? </li>
                            <p style="font-size: 12px;line-height: 14px;margin: 0;font-weight: 400;">
                                @foreach ($hotel as $ht)
                                    <div>{{ $ht->city->city }}</div>
                                @endforeach
                            </p>
                            <li aria-hidden="true" style="display: flex;margin-left: 8px;user-select: none;margin-right: 8px;"> ??? </li>
                            <p style="font-size: 12px;line-height: 14px;margin: 0;font-weight: 400;">
                                @foreach ($hotel as $ht)
                                    <div>{{ $ht->name }}</div>
                                @endforeach
                            </p>
                        </div>
                    </div>
                   <div style="width: 100%;min-height: 125px; ">
                        @foreach ($hotel as $ht)
                        <div class="infor__hotel__left" style="width: 70%;float: left;">
                            <div style="font-weight: 600;font-size: 25px;font-family: 'FontAwesome';">{{ $ht->name }}</div>
                            <div style="display: flex;align-items: center;margin: 5px 0px 5px 0px;">
                                <div title="S??? sao ????nh gi?? n??y do b???n D??ng t??? ??i???n, ph???n ??nh s??? h?? c???u c??ng nh?? s??? kh??ng c?? th???t c???a c??c hotel." style="display: flex;">
                                    @for ($i=0; $i < $ht->star; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" viewBox="0 0 576 512" style="height: 12px;"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" style="color: #f38e11;"/></svg>
                                    @endfor
                                </div>
                                <div style="color: #f38e11;border: 1px solid #f38e11;height: 22px;display: flex;padding: 2px 4px;font-size: 12px;align-items: center;
                                                    line-height: 14px;margin-left: 6px;white-space: nowrap;border-radius: 4px;justify-content: center;">
                                    <span>{{ $ht->category->category }}</span>
                                </div>
                            </div>
                            <div class="rate">
                                <p>
                                    <span class="avgrate" data-selected="true" data-label-id="0">{{$rating/$numbers_review}}</span>
                                        
                                             @if($rating/$numbers_review >=9 )
                                                        Tuy???t v???i
                                                        @elseif($rating/$numbers_review >=7 &&  $rating/$numbers_review <= 8)
                                                        T???t
                                                        @elseif($rating/$numbers_review >=5 && $rating/$numbers_review <= 7)
                                                        T???m
                                                        @else
                                                        T???
                                            @endif
                                        </span>
                                        <div style="width: 1px;height: 14px;margin: 0 8px;background: #cdc1c1;;"></div>
                                    <span class="" style="margin-left: 4px;">({{$numbers_review}} ????nh gi??)</span>
                                </p>
                            </div>
                            <div class="address">
                                        <svg width="16" height="16" fill="none"><path d="M8 9.333a2 2 0 100-4 2 2 0 000 4z" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.771 11.105l-2.828 2.828a1.333 1.333 0 01-1.885 0l-2.83-2.828a5.333 5.333 0 117.543 0v0z" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <p>{{ $ht->address }}</p>
                                        <div id="nutxembando" style="font-size: 17px;font-weight: 400;line-height: 16px;padding-inline: 5px;">                                        
                                            <a style="text-decoration: none;color: #00b6f3;" href="#bando">xem b???n ?????</a>
                                        </div>
                            </div>
                        </div>
                        <div class="infor__hotel__right" style="width: 30%;float: right;display: flex;align-items: center;justify-content: flex-end;padding-top: 10px;">
                            <div style="display: flex;align-items: flex-end;flex-direction: column;">
                                <div style="display: flex;">

                                    @if(isset($rooms->first()->discount))
                                     <div  style="font-size: 14px; line-height: 17px; text-decoration: line-through; margin-right: 5px; white-space: nowrap; font-weight: normal;">{{  number_format($rooms->first()->price) }}?? /????m</div>
                                    <span style="color: #ffffff;padding: 2px 4px;background: #f38e11;max-height: 19px;border-radius: 3px;font-size: 14px;font-family: -apple-system;font-weight: 600;line-height: 16px;">
                                        -{{ $rooms->first()->discount }}%
                                    </span>
                                    @else
                                        <div  style="font-size: 20px; line-height: 17px; margin-right: 5px; white-space: nowrap; font-weight: normal;">{{  number_format($rooms->first()->price) }}?? /????m</div>
                                    @endif
                                </div>
                                @if(isset( $rooms->first()->discount ))
                                <div style="font-size: 20px;margin-top: 3px;font-weight: 600;line-height: 23px;white-space: nowrap;">{{  number_format(($rooms->first()->price)-($rooms->first()->price*$rooms->first()->discount/100)) }}<span style="font-size: 14px;font-weight: 400;line-height: 16px;margin-left: 3px;">/????m</span></div>
                                @endif

                            </div>
                            <button id="nutchon" tabindex="0" type="button" style="margin-left: 16px; color: rgb(253, 253, 253);width: 156px;border: none;height: 44px;padding: 6px 8px;font-size: 16px;min-height: 20px;font-weight: 600;border-radius: 8px;text-transform: none;background-color: #f38e11;">
                                <span class="">
                                    <div class="">
                                        <div class="" opacity="1"><a style="color: white;text-decoration: none;" href="#chon">Ch???n ph??ng</a> </div>
                                    </div>
                                </span>
                                <span class=""></span>
                            </button>
                        </div>
                        
                         @endforeach
                        
                    </div>


                     {{-- ph???n h??nh ???nh --}}
                    <div class="" style="display: flex;">                                                    
                            <div class="" style="width:50%;padding-right: 5px;">                    
                                <img style="height: 100%;border-top-left-radius: 8px;border-bottom-left-radius: 8px;" src="{{ Request::get('idhotel') != null  ? '' : '../'}}../resources/images/hotels/{{$hotel->first()->image}}" class="d-block w-100" alt="?????y l?? ???nh">
                            </div> 
                            <div style="width:50%;">
                                 @foreach ($hotel as $ht)
                                
                                
                                     @foreach ($ht->img_nearloca as $image)
                                        
                                    <div style="padding-right: 5px;padding-bottom: 5px;float: left;  width: 50%;height: 50%;" class="item {{$image->id}}">
                                        <img src="{{ Request::get('idhotel') != null  ? '' : '../'}}../resources/images/hotels/{{$image->img}}" class="d-block w-100" alt="?????y l?? ???nh" style="height: 100%;">
                                    </div>  
                                       
                                    @endforeach 

                                    
                                    
                               
                                @endforeach 
                            </div>                                                
                    </div>


                    <div style="margin: 0 auto;display: flex;max-width: 1180px;align-items: center;justify-content: space-between;padding-bottom: 10px;">
                        <div style="font-size: 20px;margin-top: 32px;font-weight: 600;line-height: 23px;">Ch???n ph??ng</div>
                    </div>
                            {{-- ph??ng --}}
                            <div style="width:100%;" id="chon" data-spy="scroll" data-target="#nutchon" data-offset="0">
                            @foreach($rooms as $hotel)
                            <form action="{{ route('booking') }}" style="display: flex;" method="GET" >
                                 {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                                 <input class="datehidden" type="date"  name="startDate" value="{{ $startDate }}">
                                <input class="datehidden" type="text"  name="code" value="{{$codes->first()-> code}}">
                                 <input class="datehidden" type="date"  name="endDate" value="{{ $endDate }}">
                                  <input class="datehidden" type="text"  name="hotelid" value="{{ $hotel->first()-> id}}">
                                  <input class="datehidden" type="text" name="reduction" value="{{$codes->first()->reduction}}">
                                <div style="display: flex;width:100%; background: white; margin-bottom: 10px;border: 1px solid rgb(243 142 17);border-radius: 8px;">
                                    <div style="width:24%">
                                        <div style="position: unset; margin: 15px;">
                                            <div  class="" style="width: 100%;">
                                                 {{-- @foreach ($hotel->images as $image) --}}
                                                <img class="img"  style="width: 100%;border-radius: 8px;" title="" src="{{ Request::get('idhotel') != null  ? '' : '../'}}../resources/images/rooms/{{ $hotel->images->first()->path}}">
                                                {{-- @endforeach      --}}
                                            </div>
                                            <div class=""><a href="" data-toggle="modal" data-target="#chitiet{{$hotel->id}}">Xem chi ti???t</a></div>


                                            <div class="modal fade" id="chitiet{{$hotel->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                <div class="modal-content" style="    background-color: #f1f1f1;border-radius: 10px;">
                                                    
                                                    <div class="modal-body">
                                                    <div class="container-fluid mt-2 mb-3">
                                                        <div class="row no-gutters">
                                                            <div class="col-md-7 pr-2">
                                                                <div class="card" style="width: 80%;background-color: #f1f1f1;border: none;">
                                                                    <div class="demo">
                                                                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                                                        <div class="carousel-inner">
                                                                        <div class="carousel-item active">
                                                                            <img src="https://i.imgur.com/KZpuufK.jpg" class="d-block w-100" alt="..." style="border-radius:8px;">
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <img src="https://i.imgur.com/GwiUmQA.jpg" class="d-block w-100" alt="..." style="border-radius:8px;">
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <img src="https://i.imgur.com/DhKkTrG.jpg" class="d-block w-100" alt="..." style="border-radius:8px;">
                                                                        </div>
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                                                        <span class="carousel-control-prev-icon chuyen" aria-hidden="true" style="background: white;height: 40px;width: 40px;display: flex;align-items: center;justify-content: center;z-index: 2;border-radius: 100px;box-shadow: rgb(0 0 0 / 10%) 0px 8px 12px;cursor: pointer;position: absolute;top: 50%;transform: translate(-50%, -50%);left:0;">
                                                                            <svg width="10" height="6" fill="none" class="svgFillAll jss3732" style="transform: rotate(90deg);"><path d="M1 1l4 4 4-4" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                                        </span>
                                                                        <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                                                        <span class="carousel-control-next-icon chuyen" aria-hidden="true" style="background: white;height: 40px;width: 40px;display: flex;align-items: center;justify-content: center;z-index: 2;border-radius: 100px;box-shadow: rgb(0 0 0 / 10%) 0px 8px 12px;cursor: pointer;position: absolute;top: 50%;transform: translate(-50%, -50%);right: -38px;">
                                                                            <svg width="10" height="6" fill="none" class="svgFillAll jss3732" style="transform: rotate(-90deg);"><path d="M1 1l4 4 4-4" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                                        </span>
                                                                        <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                    
                                                                    {{-- <ul id="lightSlider">
                                                                        @foreach ($hotel->images as $image)
                                                                        <li data-thumb="../resources/images/rooms/{{$image->path}}"> <img src="../resources/images/rooms/{{$image->path}}" /> </li>
                                                                        @endforeach
                                                                    </ul> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div style="color: #1A202C;font-size: 18px;font-weight: 600;line-height: 21px;">{{$hotel->roomType->type}}</div>
                                                                <div style="min-height: 500px;">
                                                                    <div style="border-bottom: 1px solid #a4a2a2;padding-bottom: 10px;">
                                                                        <div style="display: flex;margin-top: 3px;align-items: center;">
                                                                            <div style="margin-right: 5px;margin-bottom: 5px;">
                                                                                <svg width="16" height="16" fill="none"><path d="M12 2H4a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2z" stroke="#4A5568" stroke-miterlimit="10" stroke-linecap="square"></path><path d="M11.333 11.333L5 5M11.334 8.333v3h-3M4.667 7.667v-3h3" stroke="#4A5568" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                                            </div>
                                                                            <div>{{$hotel->area}}m2</div>
                                                                            <div class="" style="margin-left: 24px;margin-right: 5px;margin-bottom: 5px;">
                                                                                <svg width="16" height="16" fill="none"><path d="M8 9.333a1.333 1.333 0 100-2.666 1.333 1.333 0 000 2.666z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.667 8c-1.778 3.111-4 4.667-6.667 4.667S3.11 11.11 1.333 8c1.778-3.111 4-4.667 6.667-4.667S12.889 4.89 14.667 8z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                                            </div>
                                                                            <div style="font-size: 14px; line-height: 16px; font-weight: 400;">{{$hotel->view}} </div>
                                                                        </div>
                                                                        @if($hotel->qty == "B???a s??ng mi???n ph??")
                                                                        <div class=" jss1993 jss1973" style="display: flex;margin-top: 2px;align-items: center;margin-left: 5px;margin-bottom: 5px;">
                                                                            <svg width="16" height="16" fill="none" class="svgFillAll jss1967"><path d="M13.444 6.111H5.667c-.86 0-1.556.696-1.556 1.556v4.666c0 .86.697 1.556 1.556 1.556h7.777c.86 0 1.556-.697 1.556-1.556V7.667c0-.86-.697-1.556-1.556-1.556z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.556 11.555a1.556 1.556 0 100-3.11 1.556 1.556 0 000 3.11zM11.889 6.111V4.556A1.556 1.556 0 0010.333 3H2.556A1.556 1.556 0 001 4.556v4.666a1.555 1.555 0 001.556 1.556H4.11" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                                            
                                                                            <p class=" jss1968 jss1979 ">{{$hotel->service}}</p>
                                                                        </div>
                                                                        @else
                                                                        <div class=" jss1992" style="display: flex; align-items: center; margin-top: 2px;">
                                                                            <svg width="16" height="16" fill="none"><path d="M11.31 11.976l1.862 1.862M3.241 3.908l4.966 4.965M4.483 2.667L7.586 5.77 5.103 8.253 2 5.149M3.241 13.838l10.552-10.55a5.036 5.036 0 01-1.242 4.965c-2.194 2.194-3.724 2.482-3.724 2.482" stroke="#48BB78" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                                            <p class=" jss1968 " style="color: rgb(72, 187, 120);margin-left: 5px;">{{$hotel->service}}</p>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                    <div class=" jss1994 jss1962" style="color: #1A202C;font-size: 18px;font-weight: 600;line-height: 21px;margin-top: 10px;">Ti???n nghi ph??ng</div>
                                                                    <div class=" jss1995">
                                                                        <div class=" jss1996 jss1976" style="    display: flex;overflow: auto;max-height: 380px;flex-direction: column;">
                                                                            <div class=" jss1997">
                                                                                <h6 class=" " style="line-height: 19px; font-size: 16px; margin: 8px 0px 16px;"></h6>
                                                                            </div>
                                                                            <div class=" jss1998" style="display: flex; flex-wrap: wrap;">
                                                                                <div class=" jss1999" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2000" style="width: 24px; height: 24px; margin-right: 12px;"><img src="https://storage.googleapis.com/tripi-assets/images/hotel/amenity/air_conditioner.png" alt="" style="width: 24px; height: 24px;"></div>
                                                                                    <p class=" jss1978 ">M??y ??i???u h??a </p>
                                                                                </div>
                                                                                <div class=" jss2001" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2002" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/base/modern-tv-wide.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">TV </p>
                                                                                </div>
                                                                                <div class=" jss2003" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2004" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/minibar/electric-kettle.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">???m ??i???n </p>
                                                                                </div>
                                                                                <div class=" jss2005" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2006" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/base/electric-banket.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">Cung c???p b??? tr???i gi?????ng </p>
                                                                                </div>
                                                                                <div class=" jss2007" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2008" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/base/slipper.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">D??p ??i trong nh?? </p>
                                                                                </div>
                                                                                <div class=" jss2009" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2010" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/tongquat/thu-vien.png" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">Khu l??m vi???c ph?? h???p d??ng laptop </p>
                                                                                </div>
                                                                                <div class=" jss2011" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2012" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/bathroom/bathrobe.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">??o cho??ng t???m </p>
                                                                                </div>
                                                                                <div class=" jss2013" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2014" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/business/desk.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">B??n </p>
                                                                                </div>
                                                                                <div class=" jss2015" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2016" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/base/soundproof-system.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">Ph??ng c??ch ??m </p>
                                                                                </div>
                                                                                <div class=" jss2017" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2018" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/vesinh/don-dep-hang-ngay.png" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">D???ch v??? ph??ng (gi???i h???n th???i gian) </p>
                                                                                </div>
                                                                                <div class=" jss2019" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2020" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/amenity/bar.png" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">Minibar </p>
                                                                                </div>
                                                                                <div class=" jss2021" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2022" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/vesinh/don-dep-hang-ngay.png" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">D???n ph??ng h??ng ng??y </p>
                                                                                </div>
                                                                                <div class=" jss2023" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2024" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/bathroom/hairdryer.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">M??y s???y t??c </p>
                                                                                </div>
                                                                                <div class=" jss2025" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2026" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/bathroom/free_toiletries.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">D???u g???i </p>
                                                                                </div>
                                                                                <div class=" jss2027" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2028" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/others/window.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">M??n/r??m c???n s??ng </p>
                                                                                </div>
                                                                                <div class=" jss2029" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2030" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/bathroom/free_toiletries.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">Gi???y v??? sinh </p>
                                                                                </div>
                                                                                <div class=" jss2031" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2032" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/amenity/smoking_room.png" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">Kh??ng h??t thu???c </p>
                                                                                </div>
                                                                                <div class=" jss2033" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2034" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/base/phone.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">??i???n tho???i </p>
                                                                                </div>
                                                                                <div class=" jss2035" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2036" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/bathroom/private_bathroom.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">Ph??ng t???m ri??ng </p>
                                                                                </div>
                                                                                <div class=" jss2037" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2038" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/base/modern-tv-wide.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">TV LCD </p>
                                                                                </div>
                                                                                <div class=" jss2039" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2040" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/bathroom/free_toiletries.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">????? d??ng nh?? t???m mi???n ph?? </p>
                                                                                </div>
                                                                                <div class=" jss2041" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2042" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/internet/Amenities_wifi.png" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">Wifi mi???n ph?? </p>
                                                                                </div>
                                                                                <div class=" jss2043" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class=" jss2044" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/tongquat/truyen-hinh-cap.png" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">D???ch v??? truy???n h??nh c??p </p>
                                                                                </div>
                                                                                <div class="" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class="" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/minibar/free-mineral-water.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class=" jss1978 ">N?????c ????ng chai mi???n ph?? </p>
                                                                                </div>
                                                                                <div class="" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class="" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/bathroom/free_toiletries.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class="">X?? b??ng </p>
                                                                                </div>
                                                                                <div class="" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class="" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/bathroom/towel.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class="">Cung c???p kh??n </p>
                                                                                </div>
                                                                                <div class="" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class="" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/hoboi/be-ngam.png" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class="">Ch??? c?? bu???ng t???m v??i sen </p>
                                                                                </div>
                                                                                <div class="" style="display: flex; width: 50%; align-items: center; margin-bottom: 16px;">
                                                                                    <div class="" style="width: 24px; height: 24px; margin-right: 12px;">
                                                                                        <img src="https://storage.googleapis.com/tripi-assets/images/hotel/room-amenity/base/safe-vault.svg" alt="" style="width: 24px; height: 24px;">
                                                                                    </div>
                                                                                    <p class="">K??t an to??n t???i ph??ng </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <button class="" tabindex="0" type="button" style="margin-top: 10px; color: rgb(253, 253, 253);width: 100%;border: none;height: 44px;padding: 6px 8px;font-size: 16px;min-height: 20px;font-weight: 600;border-radius: 8px;text-transform: none;background-color: #f38e11;">
                                                                    <span class="">
                                                                        <div >
                                                                            <div  opacity="1">Ch???n ph??ng</div>
                                                                        </div>
                                                                    </span>
                                                                    </button>
                                                                </div>


                                                                {{-- <div>
                                                                    <button type="button" class="btn btn-primary" style="background-color: #ff7b0a;">?????t</button>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                     
                                                </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div style="width:25%">
                                        <div class="typeroom_name" style="margin-top: 15px;">
                                            <div style="color: #1a202c;overflow: hidden;font-size: 18px;align-items: center;font-weight: 600;line-height: 21px;white-space: nowrap;padding-right: 10px;text-overflow: ellipsis;">{{$hotel->type}}</div>
                                        </div>
                                        <div class="typeroom__viewandS" style="margin: 8px 0 15px 0;display: flex;align-items: center;">
                                            <div style="width: 16px; height: 16px;">
                                                <svg fill="none"><path d="M12 2H4a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2z" stroke="#4A5568" stroke-miterlimit="10" stroke-linecap="square"></path><path d="M11.333 11.333L5 5M11.334 8.333v3h-3M4.667 7.667v-3h3" stroke="#4A5568" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </div>
                                            <div style="font-size: 14px; line-height: 16px; font-weight: 400; margin-right: 24px; margin-left: 8px;">{{$hotel->area}}m2</div>
                                            <div style="width: 16px; height: 16px;">
                                                <svg  fill="none"><path d="M8 9.333a1.333 1.333 0 100-2.666 1.333 1.333 0 000 2.666z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.667 8c-1.778 3.111-4 4.667-6.667 4.667S3.11 11.11 1.333 8c1.778-3.111 4-4.667 6.667-4.667S12.889 4.89 14.667 8z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </div>
                                            <div style="margin-left: 8px;font-size: 14px; line-height: 16px; font-weight: 400; cursor: pointer;">{{$hotel->view}}</div>
                                        </div>
                                        <div class="typeroom__dichvudikem">
                                            <div class="" style="display: flex;margin-top: 8px;align-items: center;color: rgb(72, 187, 120);">
                                                @if($hotel->qty == "B???a s??ng mi???n ph??")
                                                <svg width="16" height="16" fill="none"><path d="M11.31 11.976l1.862 1.862M3.241 3.908l4.966 4.965M4.483 2.667L7.586 5.77 5.103 8.253 2 5.149M3.241 13.838l10.552-10.55a5.036 5.036 0 01-1.242 4.965c-2.194 2.194-3.724 2.482-3.724 2.482" stroke="#48BB78" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                <p style="margin-left: 8px;">{{$hotel->service}}</p>
                                                 @else
                                                <svg width="16" height="16" fill="none" class="svgFillAll jss1539"><path d="M13.444 6.111H5.667c-.86 0-1.556.696-1.556 1.556v4.666c0 .86.697 1.556 1.556 1.556h7.777c.86 0 1.556-.697 1.556-1.556V7.667c0-.86-.697-1.556-1.556-1.556z"  stroke="#48BB78" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.556 11.555a1.556 1.556 0 100-3.11 1.556 1.556 0 000 3.11zM11.889 6.111V4.556A1.556 1.556 0 0010.333 3H2.556A1.556 1.556 0 001 4.556v4.666a1.555 1.555 0 001.556 1.556H4.11" stroke="#48BB78" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                <p style="margin-left: 8px;">{{$hotel->service}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="typeroom__sogiuong">
                                            <div class="" style="display: flex;margin-top: 8px;align-items: center;">
                                                <svg width="14" height="14" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.875 0H0V9.75H1.875H3V12H4.875V9.75H16.125V12H18V9.75H19.125V6.375H1.875V0Z" fill="#878787"></path><rect x="3" y="4" width="15" height="1.125" fill="#878787"></rect></svg>
                                                <p style="margin-left: 8px;">{{$hotel->roomType->bed}} gi?????ng {{$hotel->roomType->size}}</p>
                                                {{-- {{ $hotel->roomType->capactity / $hotel->roomType->bed == 1  ? 'gi?????ng ????n' : 'gi?????ng ????i'}} --}}
                                            </div>
                                        </div>
                                        <div class="typeroom__soluongconlai">
                                            @if($hotel->qty == 0)
                                            <div style="color: red;font-size: 16px;font-weight: bolder;">
                                                Lo???i ph??ng n??y ???? h???t, l??m ??n ch???n lo???i ph??ng kh??c ho???c ????nh v???n t??? "t??".
                                            </div>
                                            @else
                                            <div>
                                                Ch??? c??n {{$hotel->qty}} ph??ng!
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div style="width:10%;border-left: 1px solid rgba(224, 224, 224, 1);">
                                        <div class="" style="display: flex;padding: 24px 37px 0 27px;align-items: center;white-space: nowrap;flex-direction: column;">
                                            <svg width="24" height="24" fill="none"><path d="M12 12.25a4.75 4.75 0 100-9.5 4.75 4.75 0 000 9.5zM12 13.25a7.508 7.508 0 00-7.5 7.5.5.5 0 00.5.5h14a.5.5 0 00.5-.5 7.508 7.508 0 00-7.5-7.5z" fill="#718096"></path></svg>x{{$hotel->roomType->capactity}} ng?????i
                                        </div>
                                    </div>
                                    <div style="width:13%;border-left: 1px solid rgba(224, 224, 224, 1);">
                                        
                                        {{-- <div class="" style="align-items: center; padding: 24px 37px 0px 27px;display: flex;text-align: center;;flex-direction: column-reverse;">
                                            <span class="">1 gi?????ng King</span>
                                            <div class="">
                                                <div>
                                                    <svg width="24" height="24" fill="none" class="svgFillAll jss939"><g clip-path="url(#icon_bed_double_svg__clip0)" fill="#718096"><path d="M22.5 11.75h-21a1.5 1.5 0 00-1.5 1.5v4a1.5 1.5 0 001.125 1.45.5.5 0 01.375.483v1.067a1 1 0 102 0v-1a.5.5 0 01.5-.5h16a.5.5 0 01.5.5v1a1 1 0 002 0v-1.064a.5.5 0 01.375-.483A1.5 1.5 0 0024 17.25v-4a1.5 1.5 0 00-1.5-1.5zM2.5 10.25a.5.5 0 00.5.5h18a.5.5 0 00.5-.5v-5a2.5 2.5 0 00-2.5-2.5H5a2.5 2.5 0 00-2.5 2.5v5zm4-3h2a2.5 2.5 0 012.166 1.25.5.5 0 01-.433.75H4.767a.5.5 0 01-.433-.75A2.5 2.5 0 016.5 7.25zm9 0h2a2.5 2.5 0 012.166 1.25.5.5 0 01-.433.75h-5.466a.5.5 0 01-.433-.75A2.5 2.5 0 0115.5 7.25z"></path></g><defs><clipPath id="icon_bed_double_svg__clip0"><path fill="#fff" d="M0 0h24v24H0z"></path></clipPath></defs></svg>
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="" style="color: rgb(113, 128, 150);font-size: 14px;line-height: 17px;padding-top: 24px;text-align: center;"> --- ho???c ---</div> --}}
                                        <div class="" style="align-items: center; padding: 24px 37px 0px 27px;display: flex;text-align: center;;flex-direction: column-reverse;">
                                            <span class="">{{$hotel->roomType->bed}} gi?????ng {{$hotel->roomType->size}}</span>
                                            <div class="" style="display: flex;align-items: center;text-align: center;flex-wrap: wrap;justify-content: center;">
                                                @if($hotel->roomType->size =='????n')
                                                    @for ($i=0; $i < $hotel->roomType->bed; $i++)
                                                        <div><svg  width="24" height="24" fill="none" class="svgFillAll jss920"><path d="M21 11.75H3a1.5 1.5 0 00-1.5 1.5v4a1.5 1.5 0 001.125 1.45.5.5 0 01.375.483v1.067a1 1 0 102 0v-1a.5.5 0 01.5-.5h13a.5.5 0 01.5.5v1a1 1 0 002 0v-1.064a.5.5 0 01.375-.483A1.5 1.5 0 0022.5 17.25v-4a1.5 1.5 0 00-1.5-1.5zM4 10.25a.5.5 0 00.5.5h15a.5.5 0 00.5-.5v-5a2.5 2.5 0 00-2.5-2.5h-11A2.5 2.5 0 004 5.25v5zm7-3h2a2.5 2.5 0 012.166 1.25.5.5 0 01-.433.75H9.267a.5.5 0 01-.433-.75A2.5 2.5 0 0111 7.25z" fill="#A0AEC0"></path></svg></div>
                                                    @endfor
                                                @elseif($hotel->roomType->size =='king')
                                                <div>
                                                    @for ($i=0; $i < $hotel->roomType->bed; $i++)
                                                    <svg width="24" height="24" fill="none" class="svgFillAll jss939"><g clip-path="url(#icon_bed_double_svg__clip0)" fill="#718096"><path d="M22.5 11.75h-21a1.5 1.5 0 00-1.5 1.5v4a1.5 1.5 0 001.125 1.45.5.5 0 01.375.483v1.067a1 1 0 102 0v-1a.5.5 0 01.5-.5h16a.5.5 0 01.5.5v1a1 1 0 002 0v-1.064a.5.5 0 01.375-.483A1.5 1.5 0 0024 17.25v-4a1.5 1.5 0 00-1.5-1.5zM2.5 10.25a.5.5 0 00.5.5h18a.5.5 0 00.5-.5v-5a2.5 2.5 0 00-2.5-2.5H5a2.5 2.5 0 00-2.5 2.5v5zm4-3h2a2.5 2.5 0 012.166 1.25.5.5 0 01-.433.75H4.767a.5.5 0 01-.433-.75A2.5 2.5 0 016.5 7.25zm9 0h2a2.5 2.5 0 012.166 1.25.5.5 0 01-.433.75h-5.466a.5.5 0 01-.433-.75A2.5 2.5 0 0115.5 7.25z"></path></g><defs><clipPath id="icon_bed_double_svg__clip0"><path fill="#fff" d="M0 0h24v24H0z"></path></clipPath></defs></svg>
                                                    @endfor
                                                </div>
                                                @else
                                                    @for ($i=0; $i < $hotel->roomType->bed; $i++)
                                                    <svg width="24" height="24" fill="none" class="svgFillAll jss920"><g clip-path="url(#icon_bed_double_svg__clip0)" fill="#718096"><path d="M22.5 11.75h-21a1.5 1.5 0 00-1.5 1.5v4a1.5 1.5 0 001.125 1.45.5.5 0 01.375.483v1.067a1 1 0 102 0v-1a.5.5 0 01.5-.5h16a.5.5 0 01.5.5v1a1 1 0 002 0v-1.064a.5.5 0 01.375-.483A1.5 1.5 0 0024 17.25v-4a1.5 1.5 0 00-1.5-1.5zM2.5 10.25a.5.5 0 00.5.5h18a.5.5 0 00.5-.5v-5a2.5 2.5 0 00-2.5-2.5H5a2.5 2.5 0 00-2.5 2.5v5zm4-3h2a2.5 2.5 0 012.166 1.25.5.5 0 01-.433.75H4.767a.5.5 0 01-.433-.75A2.5 2.5 0 016.5 7.25zm9 0h2a2.5 2.5 0 012.166 1.25.5.5 0 01-.433.75h-5.466a.5.5 0 01-.433-.75A2.5 2.5 0 0115.5 7.25z"></path></g><defs><clipPath id="icon_bed_double_svg__clip0"><path fill="#fff" d="M0 0h24v24H0z"></path></clipPath></defs></svg>
                                                     @endfor
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div style="width:8%;border-left: 1px solid rgba(224, 224, 224, 1);">
                                        <div class="" style="display: flex;padding: 24px 37px 0 27px;align-items: center;white-space: nowrap;flex-direction: column;">
                                            <input type="hidden" name="roomid" value="{{$hotel->id}}">
                                            
                                            
                                            <label for="qty">S??? l?????ng</label>
                                            <select name="qty" id="" class="qty"> 
                                                @for ($i=0; $i <= $hotel["qty"]; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div style="width:20%;border-left: 1px solid rgba(224, 224, 224, 1);padding: 0;font-size: 14px;border-top: 1px solid rgba(224, 224, 224, 1);text-align: center;border-left: 1px solid rgba(224, 224, 224, 1);font-weight: 400;line-height: 16px;vertical-align: top;">
                                        <div class="" style="color: #1a202c;width: 100%;display: flex;padding: 15px 15px 0 0;font-size: 12px;align-items: flex-end; padding-left: 16px;flex-direction: column;">
                                            <div class="" style="color: #ffffff;width: 42px;display: flex;position: relative;font-size: 12px;background: #f38e11;margin-top: 12px;min-height: 18px;align-items: center;font-weight: 600;line-height: 14px;border-radius: 3px 3px 0px 3px;justify-content: center;">
                                                <div style="    padding: 2px 4px;font-size: 14px;font-weight: 600;line-height: 16px;">-{{$hotel->discount}}%</div>
                                                <div style="right: 0; width: 0;bottom: -4px;height: 0;position: absolute;border-color: transparent #f38e11 transparent transparent;border-style: solid;border-width: 0px 5px 5px 0;"></div>
                                            </div>
                                            <span class="" style="color: #4A5568;margin: 6px 0 0 0;font-size: 14px;line-height: 16px;text-decoration-line: line-through;">{{number_format($hotel->price)}}?? /????m</span>
                                            
                                            <span class="" style="font-size: 20px;margin-top: 2px;font-weight: 600;line-height: 23px;">{{  number_format($hotel->price-($hotel["price"]*$hotel["discount"]/100)) }}
                                                <span class="" style="font-size: 14px; line-height: 16px; font-weight: 400;"> /????m</span>
                                            </span>
                                            <div>
                                                <div  style="align-items: center;">
                                                    <p style="font-weight: 400; display: flex; font-size: 14px; align-items: center; line-height: 16px;">
                                                        <span style="white-space: nowrap;">Nh???p m??:&nbsp;</span>
                                                        {{-- @foreach ($codes as $code) --}}
                                                            <span class="" style="color: #00B6F3;display: flex;font-size: 14px;align-items: center;font-weight: 600;line-height: 16px;">{{$codes->first()-> code}}</span>
                                                        {{-- @endforeach --}}
                                                        <span class="" style="color: #ffffff;display: flex;padding: 1px 3px;font-size: 14px;background: #00B6F3;align-items: center;font-weight: 600;line-height: 16px;margin-left: 4px;border-radius: 3px;">
                                                            <span style="padding-right: 4px;">-</span>{{$codes->first()->reduction}}%

                                                        </span>
                                                        
                                                    </p>
                                                    <p class="" style="width: 100%;font-size: 20px;margin-top: 3px;text-align: right;word-break: break-word;font-weight: 600;line-height: 23px;color: #f38e11;">{{  number_format(($hotel->price-($hotel["price"]*$hotel["discount"]/100))-(($hotel["price"]*$hotel["discount"]/100)-(($hotel["price"]*$hotel["discount"]/100)*$codes->first()-> reduction/100))) }}??
                                                        <span class="" style="font-size: 14px;font-weight: 400;line-height: 16px;margin-left: 2px;">/????m</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div style="margin: 0px 10px 10px 10px;" class="{{ $hotel->qty == 0 ? 'datehidden' : ''}}">
                                                <input  class="req" style="    color: rgb(253, 253, 253);width: 100%;border: none;height: 44px;margin: 7px;padding: 6px 8px;font-size: 16px;min-height: 20px;font-weight: 600;border-radius: 8px;text-transform: none;background-color: rgb(243 142 17);" type="submit" value="?????t ph??ng">
                                            </div>
                                            <div class="chitietgia__hover">Chi ti???t gi??
                                                <div class="chitietgia" style="color: black">
                                                    <div class="" style="text-align: left;">
                                                        <div class="" style="margin: 10px;">1 ph??ng x 1 ????m</div>
                                                        <div class="" style="margin:10px;">Thu??? v?? ph?? d???ch v??? kh??ch s???n</div>
                                                        
                                                        <div class="" style="margin: 10px;font-weight: 600; padding-bottom: 12px;">T???ng gi??</div>
                                                    </div>
                                                    <div class="" style="text-align: right;">
                                                        <div class="" style="margin: 10px;">
                                                            <span class="">{{  number_format($hotel->price-($hotel["price"]*$hotel["discount"]/100)) }}??</span>
                                                        </div>
                                                        <div class="" style="margin: 10px;">{{  number_format(($hotel["price"]*$hotel["discount"]/100)*4/100 )}}</div>
                        
                                                        <div class="" style="padding-bottom: 12px;margin: 10px;">{{  number_format(($hotel->price-($hotel["price"]*$hotel["discount"]/100))-(($hotel["price"]*$hotel["discount"]/100)*4/100 )) }}??</div>
                                                        <input name="subtotal" type="number" class="datehidden" value="{{(($hotel->price-($hotel["price"]*$hotel["discount"]/100))-(($hotel["price"]*$hotel["discount"]/100)*4/100 )) }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @endforeach
                        </div>
                        <div class="border" style="width: 100%;height: 4px;margin: 24px 0;background: #a4a4a4;"></div>
                        <div style="font-size: 20px;margin-top: 32px;font-weight: 600;line-height: 23px;">?????a ??i???m n???i b???t g???n ????y</div>
                        <div style="margin: 0 auto;display: flex;max-width: 1180px;align-items: center;padding-bottom: 10px;justify-content: center;">
                            
                            <div class="" id="bando" data-spy="scroll" data-target="#nutxembando" data-offset="0">
                                {{-- <div>
                                    <div>
                                        <div class="MuiBox-root jss826 jss418">
                                            <div class="MuiBox-root jss827 jss419">
                                                <img src="https://storage.googleapis.com/tripi-assets/images/hotel/poi-icon/beach.png" alt="" style="width: 20px; height: 20px;">
                                            </div>
                                            <div class="MuiBox-root jss828" style="display: flex; flex-direction: column; margin-left: 16px;">
                                                <span style="font-size: 16px; line-height: 19px;">B??i B???c</span>
                                                <span style="font-size: 14px; line-height: 17px; color: rgb(74, 85, 104); margin-top: 2px;">B??i bi???n</span>
                                            </div>
                                        </div>
                                        <span style="font-size: 14px; line-height: 17px;">168 m</span>
                                    </div>
                                    <div class="MuiBox-root jss829 jss417">
                                        <div class="MuiBox-root jss830 jss418">
                                            <div class="MuiBox-root jss831 jss419">
                                                <img src="https://storage.googleapis.com/tripi-assets/images/hotel/poi-icon/beach.png" alt="" style="width: 20px; height: 20px;">
                                            </div>
                                            <div class="MuiBox-root jss832" style="display: flex; flex-direction: column; margin-left: 16px;">
                                                <span style="font-size: 16px; line-height: 19px;">Gh???nh B??ng</span>
                                                <span style="font-size: 14px; line-height: 17px; color: rgb(74, 85, 104); margin-top: 2px;">B??i bi???n</span>
                                            </div>
                                        </div>
                                        <span style="font-size: 14px; line-height: 17px;">1.23 km</span>
                                    </div>
                                    <div class="MuiBox-root jss833 jss417">
                                        <div class="MuiBox-root jss834 jss418">
                                            <div class="MuiBox-root jss835 jss419">
                                                <img src="https://storage.googleapis.com/tripi-assets/images/hotel/poi-icon/tourist_attraction.png" alt="" style="width: 20px; height: 20px;">
                                            </div>
                                            <div class="MuiBox-root jss836" style="display: flex; flex-direction: column; margin-left: 16px;">
                                                <span style="font-size: 16px; line-height: 19px;">H???i ????ng Ti??n Sa</span>
                                                <span style="font-size: 14px; line-height: 17px; color: rgb(74, 85, 104); margin-top: 2px;">Ng???m c???nh &amp; ?????a ??i???m n???i ti???ng</span>
                                            </div>
                                        </div>
                                        <span style="font-size: 14px; line-height: 17px;">2.46 km</span>
                                    </div>
                                    <div class="MuiBox-root jss837 jss417">
                                        <div class="MuiBox-root jss838 jss418">
                                            <div class="MuiBox-root jss839 jss419">
                                                <img src="https://storage.googleapis.com/tripi-assets/images/hotel/poi-icon/tourist_attraction.png" alt="" style="width: 20px; height: 20px;">
                                            </div>
                                            <div class="MuiBox-root jss840" style="display: flex; flex-direction: column; margin-left: 16px;">
                                                <span style="font-size: 16px; line-height: 19px;">B??i ????</span>
                                                <span style="font-size: 14px; line-height: 17px; color: rgb(74, 85, 104); margin-top: 2px;">Ng???m c???nh &amp; ?????a ??i???m n???i ti???ng</span>
                                            </div>
                                        </div>
                                        <span style="font-size: 14px; line-height: 17px;">2.688 km</span>
                                    </div>
                                    <div class="MuiBox-root jss841 jss417">
                                        <div class="MuiBox-root jss842 jss418">
                                            <div class="MuiBox-root jss843 jss419">
                                                <img src="https://storage.googleapis.com/tripi-assets/images/hotel/poi-icon/tourist_attraction.png" alt="" style="width: 20px; height: 20px;"></div><div class="MuiBox-root jss844" style="display: flex; flex-direction: column; margin-left: 16px;">
                                                    <span style="font-size: 16px; line-height: 19px;">?????nh B??n C???</span>
                                                    <span style="font-size: 14px; line-height: 17px; color: rgb(74, 85, 104); margin-top: 2px;">Ng???m c???nh &amp; ?????a ??i???m n???i ti???ng</span>
                                                </div>
                                            </div>
                                            <span style="font-size: 14px; line-height: 17px;">3.332 km</span>
                                        </div>
                                        <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss424 jss425" tabindex="0" type="button">
                                            <span class="MuiButton-label">
                                                <div class="MuiBox-root jss426">
                                                    <div class="MuiBox-root jss427" opacity="1">Xem th??m c??c ?????a ??i???m</div>
                                                </div>
                                            </span>
                                            <span class="MuiTouchRipple-root"></span>
                                        </button>
                                    
                                    </div>
                                </div> --}}
                                <div> 
                                    {{-- @foreach ($hotel as $ht) --}}
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.469725429416!2d106.59483921470536!3d17.532808987991594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314759407c5b9e15%3A0xf08afa12fa35582e!2sSeastar%20(Sao%20Bi%E1%BB%83n)!5e0!3m2!1svi!2s!4v1636141901589!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                             {{-- <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                                    {{-- <iframe src="{{$hotel ->first()->map}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                                    {{-- @endforeach --}}
                                </div>
                            </div>
                        </div>


                    </form>
                   <div class="clearfix">
                        <div class="container mt-5 mb-5">
                            <div class="MuiBox-root jss321 jss318" style="color: #1a202c;font-size: 20px;font-weight: 600;line-height: 23px;padding-bottom: 8px;">????nh gi??</div>
                            <div style="    display: flex;justify-content: center;background-color: white;margin-bottom: 10px;align-items: center;padding: 20px;border-radius: 8px;">
                                <div class="MuiBox-root jss612">
                                    <div class="MuiBox-root jss2342" style="position: relative; width: 169px; height: 169px;">
                                        <svg class="rc-progress-circle" viewBox="0 0 100 100" style="width: 169px;"><path class="rc-progress-circle-trail" d="M 50,50 m 0,-47a 47,47 0 1 1 0,94a 47,47 0 1 1 0,-94" stroke="#E2E8F0" stroke-linecap="round" stroke-width="6" fill-opacity="0" style="stroke: rgb(226, 232, 240); stroke-dasharray: 295.31px, 295.31px; stroke-dashoffset: 0px; transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s ease 0s, stroke-width 0.06s ease 0.3s, opacity 0.3s ease 0s;"></path><path class="rc-progress-circle-path" d="M 50,50 m 0,-47a 47,47 0 1 1 0,94 a 47,47 0 1 1 0,-94" stroke="" stroke-linecap="round" stroke-width="6" opacity="1" fill-opacity="0" style=" stroke-dasharray: 283.497px, 295.31px; stroke-dashoffset: 0px; transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s ease 0s, stroke-width 0.06s ease 0.3s, opacity ease 0s;"></path></svg>
                                        <div class="MuiBox-root jss2343" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                                            <div class="MuiTypography-root MuiTypography-caption" style="font-weight: 600; font-size: 52px; line-height: 62px; color: rgb(243 142 17);;">{{$rating/$numbers_review}}</div>
                                            <div class="MuiTypography-root MuiTypography-caption" style="font-size: 16px; line-height: 19px; color: rgb(26, 32, 44);">
                                                @if($rating/$numbers_review >=9 )
                                                        Tuy???t v???i
                                                        @elseif($rating/$numbers_review >=7 &&  $rating/$numbers_review <= 8)
                                                        T???t
                                                        @elseif($rating/$numbers_review >=5 && $rating/$numbers_review <= 7)
                                                        T???m
                                                        @else
                                                        T???
                                                        @endif
                                            </div>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(Auth::check())
                            <form method="post" action="{{route('hotel.comments',$hotel->first()->id)}}" class="well padding-bottom-10" >
                                @csrf
                                <div class="card">
                                    <div class="row" style="    margin: 20px;">
                                        <div class="Default" style="color: #00B6F3;width: 64px;height: 64px;display: flex;font-size: 24px;background: #E5F8FE;font-weight: 600;line-height: 28px;overflow: hidden;position: relative;font-size: 1.4285714285714286rem;align-items: center;flex-shrink: 0;font-family: -apple-system,BlinkMacSystemFont,sans-serif;line-height: 1;user-select: none;border-radius: 50%;justify-content: center;">
                                                <svg style="width: 75%; height: 75%;fill: currentColor; width: 1em;height: 1em;display: inline-block;font-size: 1.7142857142857142rem;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;flex-shrink: 0;user-select: none;" class="MuiSvgIcon-root MuiAvatar-fallback" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path></svg>
                                        </div>
                                        {{-- <div class="col-1"> <img src="https://i.imgur.com/xELPaag.jpg" width="50" class="rounded-circle mt-2"> </div> --}}
                                        <div class="col-11">
                                            <div class="comment-box ml-2">
                                                {{-- <h4>Vi???t ????nh gi?? c???a b???n</h4> --}}
                                                <div style="    font-size: 16px;
    font-family: -apple-system,BlinkMacSystemFont,sans-serif;
    font-weight: 600;
    line-height: 20px;    margin-bottom: 10px;">{{ Auth::user()->name}}</div>
                                                <div class="rating">  
                                                    @for ($i=1; $i <11;$i++)
                                                    <input type="radio" name="rating" value="{{$i}}" id="{{$i}}"><label for="{{$i}}">{{$i}}</label> 
                                                    @endfor
                                                </div>
                                                <!-- <ul class="list-inline rating">
                                                
                                                </ul> -->
                                                <div class="comment-area"> <textarea class="form-control" placeholder="what is your view?" rows="2" name="comment"></textarea> </div>
                                                <div class="comment-btns mt-2">
                                                    
                                                    <div class="pull-right"> 
                                                        <input type="submit" value="G???i" class="btn btn-primary">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>
                            </form>
                            @else
                                <div class="p-3 bg-white mt-2 rounded text-center">
                                        <h5>????ng nh???p ????? b??nh lu???n</h5>
                                        <a class="btn btn-success btn-sm px-3" href="" data-toggle="modal" data-target="#login">????ng nh???p</a>
                                </div>
                            @endif
                            <div class="p-3 bg-white mt-2 rounded" >
                            
                                @foreach($hotelRates as $rate)
                                    @if($rate->comment != null)
                                    <div class="" style="display: flex;">                                        
                                        <div class="" style="width: 30%;">
                                            <div class="" style="display: flex;">
                                                <div class="Default" style="color: #00B6F3;width: 64px;height: 64px;display: flex;font-size: 24px;background: #E5F8FE;font-weight: 600;line-height: 28px;overflow: hidden;position: relative;font-size: 1.4285714285714286rem;align-items: center;flex-shrink: 0;font-family: -apple-system,BlinkMacSystemFont,sans-serif;line-height: 1;user-select: none;border-radius: 50%;justify-content: center;">
                                                <svg style="width: 75%; height: 75%;fill: currentColor; width: 1em;height: 1em;display: inline-block;font-size: 1.7142857142857142rem;transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;flex-shrink: 0;user-select: none;" class="MuiSvgIcon-root MuiAvatar-fallback" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path></svg>
                                                </div>
                                                <div class="MuiBox-root jss693 jss673" style="    margin-left: 12px;">
                                                    <h6 style="font-size: 16px;font-family: -apple-system,BlinkMacSystemFont,sans-serif;font-weight: 600;line-height: 20px;">{{$rate->user->name}}</h6>
                                                    <div class="MuiBox-root jss694" style="    display: flex;flex-direction: column;">
                                                        <div class="MuiBox-root jss695 jss674" style="    color: #4A5568;display: flex;font-size: 12px;align-items: center;line-height: 14px;padding-top: 8px;">
                                                            <svg width="16" height="16" fill="none" style="margin-right: 8px;"><path d="M2.667 13.333h2.666l7-7a1.886 1.886 0 00-2.667-2.666l-7 7v2.666zM9 4.333L11.667 7" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                            <span class="MuiBox-root jss696">{{$rate->created_at}}</span>
                                                        </div>
                                                        {{-- <div class="MuiBox-root jss697 jss674"><svg width="16" height="16" fill="none" style="margin-right: 8px;"><path d="M12 3.333H4c-.737 0-1.333.597-1.333 1.334v8C2.667 13.403 3.263 14 4 14h8c.736 0 1.333-.597 1.333-1.333v-8c0-.737-.597-1.334-1.333-1.334zM10.666 2v2.667M5.333 2v2.667M2.667 7.333h10.666" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path></svg><span class="MuiBox-root jss698">1 ????m</span><svg width="3" height="3" fill="none" style="margin: 2px 4px 0px;"><rect width="3" height="3" rx="1.5" fill="#A0AEC0"></rect></svg><span class="MuiBox-root jss699">Th??ng 04/2021</span></div><div class="MuiBox-root jss700 jss674"><svg width="16" height="16" fill="none" style="margin-right: 8px;"><path d="M12.667 4.667H3.333C2.597 4.667 2 5.264 2 6v6c0 .736.597 1.333 1.333 1.333h9.334c.736 0 1.333-.597 1.333-1.333V6c0-.736-.597-1.333-1.333-1.333zM5.333 4.667V3.333A1.333 1.333 0 016.668 2h2.667a1.333 1.333 0 011.333 1.333v1.334M8 8v.007M2 8.667a13.333 13.333 0 0012 0" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path></svg><span class="MuiBox-root jss701">C???p ????i</span></div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       <div style="width: 70%;display: flex;justify-content: space-between;">
                                            <div class="MuiBox-root jss702 jss675">
                                                {{-- <h6 class="">V?????t ngo??i mong ?????i!</h6> --}}
                                                <div class="">
                                                    <div>{{$rate->comment}}. </div>
                                                </div>
                                                {{-- <div class="MuiBox-root jss704 jss680"><img src="https://tripi.vn/cdn-cgi/image/width=100,height=100/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2Fthumb_FIM1MC9MUP_photo0jpg%20(1).jpg?generation=1623320614581995&amp;alt=media" alt="" style="width: 96px; height: 96px; object-fit: cover; border-radius: 8px; margin: 0px 6px; cursor: pointer;"></div> --}}
                                                
                                            </div>          

                                            <div class="MuiBox-root jss709 jss690" style="padding-left: 30px;">
                                                <div class="MuiBox-root jss710 jss677" style="color: #00B6F3;width: 88px;font-size: 24px;background: #F2FBFE;text-align: center;font-weight: 600;line-height: 28px;margin-left: 30px;border-radius: 8px;">
                                                <div class="MuiBox-root jss711 jss678" style="width: fit-content; margin: 0 auto;display: flex;padding: 9px 0 0 0;align-items: center;">{{$rate["rate"]}}</div>
                                                    <div class="MuiBox-root jss712 jss679" style="color: #1a202c;font-size: 14px;font-weight: 400;line-height: 16px;white-space: nowrap;padding-bottom: 9px;">
                                                        @if($rate["rate"] >=9 )
                                                        Tuy???t v???i
                                                        @elseif($rate["rate"] >=7 &&  $rate["rate"] <= 8)
                                                        T???t
                                                        @elseif($rate["rate"] >=5 &&  $rate["rate"] <= 6)
                                                        T???m
                                                        @else
                                                        T???
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>  
                                       </div>

                                    </div>                                                           
                            
                                        
                                        
                                        
                                    <hr>                                   
                                    @else  
                                        <p>Ch??a c?? b??nh lu???n n??o</p>
                                    @endif
                                @endforeach
                            
                               
                            </div>   
                            <div class="MuiBox-root jss430 jss3" style="    width: 100%;
    height: 4px;
    margin: 24px 0;
    background: #EDF2F7;"></div>
                            <div style="    padding: 20px;
    background-color: white;">
                                <div class="MuiBox-root jss451" id="hotel_policy">
                                    <div class="MuiBox-root jss452 jss450" style=" margin-top: 12px;font-size: 20px;font-weight: 600;line-height: 24px;padding-bottom: 24px;">
                                        <div class="MuiBox-root jss453 jss441" >Ch??nh s??ch kh??ch s???n</div>
                                    </div>
                                    <div class="MuiBox-root jss454 jss431" style="display: flex;" >
                                        <div class="MuiBox-root jss455 jss432" style="color: #1a202c;width: 168px;display: flex;background: #EDF2F7;border-radius: 8px;margin-bottom: 12px;justify-content: space-around;">
                                            <div class="MuiBox-root jss456 jss434" style="    color: #4A5568;
    font-size: 14px;
    text-align: center;
    display: flex;
    font-weight: normal;
    line-height: 17px;
    flex-direction: column;
    justify-content: center;">
                                                <div class="MuiBox-root jss457 jss437">Nh???n ph??ng</div>
                                                <h6 style="color: #1a202c;
    font-size: 18px;
    font-weight: 600;
    line-height: 21px;
    padding-bottom: 16px;">T??? 14:00</h6>
                                            </div>
                                        </div>
                                        <div class="MuiBox-root jss458 jss432 jss433" style="margin-left: 10px;color: #1a202c;width: 168px;display: flex;background: #EDF2F7;border-radius: 8px;margin-bottom: 12px;justify-content: space-around;">
                                            <div class="MuiBox-root jss459 jss434">
                                                <div class="MuiBox-root jss460 jss437">Tr??? ph??ng</div>
                                                <h6 style="color: #1a202c;
    font-size: 18px;
    font-weight: 600;
    line-height: 21px;
    padding-bottom: 16px;">Tr?????c 12:00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="MuiBox-root jss461 jss438">
                                    <div class="MuiBox-root jss462">
                                        <span class="MuiBox-root jss463" style="font-size: 14px;font-weight: 600;padding-bottom: 8px;">Ch??nh s??ch chung</span>
                                        <div class="MuiBox-root jss464 jss449">
                                            <p>Kh??ng cho ph??p h??t thu???c</p>
                                            <p>Kh??ng cho ph??p th?? c??ng</p>
                                            <p>Cho ph??p t??? ch???c ti???c / s??? ki???n</p>
                                        </div>
                                    </div>
                                    <div class="MuiBox-root jss465">
                                        <span class="MuiBox-root jss466" style="font-size: 14px;font-weight: 600;padding-bottom: 8px;">Ch??nh s??ch tr??? em</span>
                                        <div class="MuiBox-root jss467 jss449">
                                            <p>Kh??ch l???n h??n 12 tu???i s??? ???????c xem nh?? ng?????i l???n</p>
                                            <p>Tr??? em t??? 0 tu???i ?????n 12 tu???i c?? th??? l??u tr?? mi???n ph??</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>                
                    </div>

                </div>
            </div>
                            
        </div>
        <footer class="footer">
    <div class="container_footer" style="margin: 0 auto; padding-inline: 100px; margin-top: 20px; background-color: #e7e7e7;">
      <div class="footer__middle">
        <div class="footer__nav">
          <a href="/ve-vntrip">V??? Bookinghotel.vn</a>
          <a href="/lien-he">Li??n h???</a>
          <a href="/dieu-khoan-su-dung">??i???u kho???n s??? d???ng</a>
          <a href="/quy-che-hoat-dong">Quy ch??? ho???t ?????ng</a>
          <a href="/chinh-sach-bao-mat">Ch??nh s??ch b???o m???t</a>
          <a target="_blank" href="https://www.vntrip.vn/cam-nang" rel="noopener noreferrer">Blog du l???ch</a>
          <a target="_blank" href="http://hr.vntrip.vn/" rel="noopener noreferrer">Tuy???n d???ng</a>
          <a target="_blank" href="https://policy.vntrip.vn/loyalty-vntrip" rel="noopener noreferrer">Ho??n ti???n th??nh vi??n</a>
          <a target="_blank" href="https://partner.vntrip.vn/" rel="noopener noreferrer">H???p t??c ?????i l??</a>
        </div>
        <div class="footer__contact">
          <p class="semibold">C??NG TY TNHH BOOKINGHOTEL.VN</p>
          <p class="semibold">T???ng 1001 T??a nh?? chi???n th???ng</p>
          <p>S??? 92 Quang Trunh, H???i Ch??u, ???? N???ng</p>
          <p>S??? t??i kho???n: 100120010000</p>
          <p>Ng??n h??ng: demo</p>
          <p>Chi nh??nh: Th??ng Long</p>
          <p>Ng??y c???p ??KKD: 9/5/2016</p>
          <p>Email:&nbsp;<a href="mailto:cs@vntrip.vn" class="semibold">cskh@vnbookinghotel.vn</a></p>
          <p>Hotline:&nbsp;<span class="green-1 semibold"><a href="tel:096 326 6688" class="green-1">0123456789</a></span></p>
        </div>
        <div class="footer__form">
          <p class="mb15"><strong>Du l???ch th??ng minh!&nbsp;</strong>????ng k?? nh???n tin ????? l??n k??? ho???ch cho k??? ngh??? t???i ngay t??? b??y gi???:</p>
          <form class="ant-form ant-form-horizontal d-flex mb15">
            <div class="ant-row ant-form-item mb0 flex1 ant-form-item-has-success" style="row-gap: 0px;">
              <div class="ant-col ant-form-item-control">
                <div class="ant-form-item-control-input">
                  <div class="ant-form-item-control-input-content">
                    <input type="text" class="ant-input form-control" placeholder="Email c???a b???n" value="">
                  </div>
                </div>
                <div class="ant-form-item-explain ant-form-item-explain-success">
                  <div role="alert">
                    </div>
                  </div>
                </div>
              </div>
              <button type="button" class="ant-btn ant-btn-primary" style="border: 1px solid #f38e11;color: #f38e11;">
                <span>????ng k??</span>
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="footer__bottom">
        <div class="" style="margin: 0 auto;padding-inline: 100px;margin-top: 20px;background-color: #f38e11;display: flex;height: 50px;align-items: center;justify-content: space-between;">
          <p class="footer__copyright" style="float: left;width: 50%;margin: 0; color: black">Web bookinghotel ?? 2021 Bookinghotel.vn</p>
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
    <!-- Modal cmt -->
    <div class="modal fade" id="cmt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:#fa9442">????nh gi?? hotel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    G???i b??nh lu???n th??nh c??ng !!!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    {{-- //register --}}
        <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #ff7b0a;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">????ng k??</h5>
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
                          ????ng k?? t??i kho???n ????? ???????c nhi???u ??u ????i h??n khi ?????t ph??ng<br>
                          H??y ????ng k?? ??? d?????i !!!.<br>
                          </p  
                        </div>
                        <div class="form-group">
                          <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">T??n<i style="color:red">*</i></label>
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
                            <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">M???t kh???u<i style="color:red">*</i></label>
                            <input type="password" name="password" class="form-control" id="txtMobile_divBookQuick" required>
                            @if($errors->has('password'))
                              <p style="color:red">{{$errors->first('password')}}</p>
                            @endif
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">??i???n tho???i<i style="color:red">*</i></label>
                            <input type="text"  name="phone" class="form-control" id="txtEmail_divBookQuick" value="{{ old('phone', '') }}" required>
                            @if($errors->has('phone'))
                              <p style="color:red">{{$errors->first('phone')}}</p>
                            @endif
                          </div>
                          <div class="form-group col-md-6">
                            <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">?????a ch???<i style="color:red">*</i></label>
                            <input type="text" name="address" class="form-control" id="txtMobile_divBookQuick" value="{{ old('address', '') }}" required>
                            @if($errors->has('address'))
                              <p style="color:red">{{$errors->first('address')}}</p>
                            @endif
                          </div>
                        </div>
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary" style="background-color: #ff7b0a;padding: left 40px;" value="????ng k??" ></input>
                        </div>
                      </form>
                    </div>
                </div>
                <div class="modal-footer ">
                    <p>B???n ???? c?? t??i kho???n h??y ????ng nh???p t???i ????y<span>???</span> <a class="w3_play_icon1" href="#" data-toggle="modal" data-target="#login">????ng nh???p</a></p>
                    <div class="clear"></div>
                </div>
              </div>
          </div>
          
        </div>
    <!-- //modal login -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #ff7b0a;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">????ng nh???p</h5>
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
                          <input type="submit" class="btn btn-primary" style="background-color: #ff7b0a;padding: left 40px;" value="????ng nh???p" ></input>
                        </div>
                      </form>
                    </div>
                </div>
                <div class="modal-footer ">
                    <p>N???u ch??a c?? t??i kho???n h??y ????ng k?? t???i ????y<span>???</span> <a class="w3_play_icon1" href="#" data-toggle="modal" data-target="#register">????ng k??</a></p>
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
           
    <!-- //Comment -->
    <script >
    @if(session()->has('message'))
        $('#cmt').modal('show');
    @endif
    </script>          
           
@stop

    


 
