
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Booking Landing Page</title>
  <link rel="stylesheet" href="../resources/css/font.css" />
  <link rel="stylesheet" href="../resources/css/btr.css" />
  <link rel="stylesheet" href="../resources/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../resources/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../resources/css/style.css" />
  <link rel="stylesheet" href="../resources/js/bootstrap.bundle.min.js" />


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="../resources/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script>
        function zoom(e) {
          var zoomer = e.currentTarget;
          e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
          e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
          x = (offsetX / zoomer.offsetWidth) * 100
          y = (offsetY / zoomer.offsetHeight) * 100
          zoomer.style.backgroundPosition = x + "% " + y + "%";
        }
    </script>
</head>

<body>
  <div class="containerr" style="heigh: 80vh"> 

    <header>
      <nav>
        <div class="wrapper">
          <div class="menu nav__pc">
            <div class="logo">Booking<span>Hotel</span>.vn</div>
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

    <div class="hotel_content">

      <div class="info PC">
        <h2>Book hotels online</h2>
      </div>

      <div class="booking_info PC">

        <div class="opt">
          <span class="tab__link active">Hotels</span>
          <span class="tab__link">Homes</span>
        </div>

        <form class="booking_details tab__content" id="Hotels" action="{{ route('search.hotel') }}" method="POST" >
          <div class="item">
             <i class="fa fa-search"></i>
             <input class="timkiem" type="text" name="city" placeholder="Enter a destination" style="border: none;padding-left: 4px;">
          </div>

          <div class="item">
            <p style="margin: 0px;">Thời gian đến:</p>
            <input type="date"  name="startDate" value="{{ $dtnow }}">
          </div>

          <div class="item">
            <p style="margin: 0px;">Thời điểm đi:</p>
            <input type="date" name="endDate" value="{{ $dt }}">
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

    <img src="../resources/images/hotel.png" class="hotel">
    <img src="../resources/images/car1.png" class="car1">
    <img src="../resources/images/car2.png" class="car2">
    <img src="../resources/images/car3.png" class="car3">
    <img src="../resources/images/car4.png" class="car4">
    {{-- <img src="../resources/images/dog.gif" class="dog_1"> --}}
    <img src="../resources/images/cloud.png" class="cloud">
    <img src="../resources/images/cloud.png" class="cloud_2">
    <img src="../resources/images/cloud.png" class="cloud_3">
    <img src="../resources/images/cloud.png" class="cloud_4">

  </div>

  <main style="margin-top: 20px; margin-inline: 80px;">
      <div class="qcao">
        <div class="nobody">
            <span class="photo">
              <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_support_247.svg" alt="logo_support_247" style="width: 52px; height: 52px;">
            </span>
            <span class="title-main" style="margin-top: 24px; white-space: nowrap;">Hỗ trợ khách hàng 24/7</span>
            <span class="title-sub">Chat là có, gọi là nghe, không quản đêm hôm, ngày nghỉ và ngày lễ.</span>
        </div>

        <div class="nobody">
            <span class="photo">
              <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_best_price.svg" alt="logo_best_price" style="width: 52px; height: 52px;">
            </span>
            <span class="title-main" style="margin-top: 24px; white-space: nowrap;">Giá tốt sát ngày</span>
            <span class="title-sub">Cam kết giá tốt nhất khi đặt gần ngày cho chuyến đi của bạn.</span>
        </div>

        <div class="nobody">
            <span class="photo">
            <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_total_hotel.svg" alt="logo_total_hotel" style="width:52px;height:52px">
            </span>
            <span class="title-main" style="margin-top:24px;white-space:nowrap">Hơn 8000+ khách sạn dọc Việt Nam</span>
            <span class="title-sub">Hàng nghìn khách sạn, đặc biệt là 4 và 5 sao, cho phép bạn thoải mái lựa chọn.</span>
        </div>


        <div class="nobody">
            <span class="photo">
                <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_payment.svg" alt="logo_payment" style="width: 52px; height: 52px;">
            </span>
            <span class="title-main" style="margin-top: 24px; white-space: nowrap;">Thanh toán dễ dàng, đa dạng</span>
            <span class="title-sub">Bao gồm thêm chuyển khoản ngân hàng và tiền mặt tại cửa hàng.</span>
        </div>
      </div> 

  </main>

  <div class="roomtype" style="margin: 0 auto; padding-inline: 100px; margin-top: 20px; background-color: white;">
    <div class="roww mrgl0 mrgr0">
      <div class="deals-title mrgb1x">
        <h3>
          <a href="">TOP PHÒNG KHUYẾN MÃI</a>
        </h3>
        <span class="deals" style="padding-bottom:0px;margin-top:-5px;">&nbsp;</span>
      </div>
      <div class="rowư flexboxx">


        @foreach($rooms as $key => $room)
            <div id="{{ $room->id }}" class=" flexitem flexitem_4" style="border: 1px solid #e8e8e8;">
              <div class="popluar-category" style="background-color: white;">
                <a  title=" {{ $room->hotel->name }}" class="mihawk-list-hotel popup_detail" >
                  <span class="thumb-info">
                    <div  class="thumb-info-wrapper zoom" style="background:url(https://du-lich.chudu24.com/f/m/1907/30/melia-ho-tram-6701-1632578.jpg?)" onmousemove="zoom(event)" ontouchmove="zoom(event)">
                      <img class="img"  title="  {{ $room->hotel->name }} " src="https://du-lich.chudu24.com/f/m/1907/30/melia-ho-tram-6701-1632578.jpg?w=266&amp;h=232">
                    </div>
                    <span class="table-see-all" >
                      <input type="button" value="xem chi tiết" data-toggle="modal" data-target="#phongdoan">
                    </span>
                  </span>
                </a>
                <p>Loại phòng: {{ $room->roomType->name }}</p>
                <h3 class="mrgt1x mrgb05 padl1x padr1x">
                  <a class="title-promotion " href="//khachsan.chudu24.com/ks.5921.melia-ho-tram-beach-resort.html" target="_blank" hotelname=" {{ $room->hotel->name }}" hotelidint=" {{ $room->hotel->id }}" roomtypeidint=" {{ $room->roomType->id }}">{{ $room->hotel->name }}</a>
                </h3>
                    @for ($i=0; $i < $room->hotel->star; $i++)
                      <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" viewBox="0 0 576 512" style="height: 12px;"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" style="color: #f38e11;"/></svg>
                    @endfor
                <div class="padb1x padl1x padr1x">
                  <span class="summary">Giá đặc biệt chỉ từ <span>{{ $room->price}}</span>/đêm</span>
                </div>
              </div>
            </div>
        @endforeach
      </div>

    </div> 
  </div>

  <div class="topdiemden" style="margin: 0 auto; padding-inline: 100px; margin-top: 20px; background-color: #e7e7e7;">
    <div class="roww mrgl0 mrgr0">
      <div class="deals-title mrgb1x">
        <h3>
          <a href="">TOP ĐIỂM ĐẾN</a>
        </h3>
        <span class="deals" style="padding-bottom:0px;margin-top:-5px;">&nbsp;</span>
      </div>
      <div class="rowư flexboxx">


        @foreach($cities as $key => $city)
            <div id="" iddanhmuc="97" class=" flexitem flexitem_4">
              <div class="popluar-category" style="background-color: white;">
                <a  title=" {{ $city->city }}" class="mihawk-list-hotel popup_detail" >
                  <span class="thumb-info">
                    <div  class="thumb-info-wrapper">
                      <img class="img"  title="" src="https://du-lich.chudu24.com/f/m/1907/30/melia-ho-tram-6701-1632578.jpg?w=266&amp;h=232">
                    </div>
                  </span>
                </a>
                <h3 class="mrgt1x mrgb05 padl1x padr1x" style="padding: 30px 0 30px 10px;">
                  <a class="title-promotion " href="//khachsan.chudu24.com/ks.5921.melia-ho-tram-beach-resort.html" target="_blank" hotelname=" " hotelidint="" roomtypeidint="" style="font-weight: 500;">{{ $city->city }}</a>
                </h3>
              </div>
            </div>
        @endforeach
      </div>

    </div> 
  </div>

  <div class="chancang" style="margin: 0 auto; padding-inline: 100px; margin-top: 20px; background-color: white; padding-bottom: 50px;border-bottom: 5px solid #f38e11;">
    <div class="roww mrgl0 mrgr0">
      <div class="deals-title mrgb1x">
        <h3>
          <a href="">KHÁCH SẠN THEO THÀNH PHỐ</a>
        </h3>
        <span class="deals" style="padding-bottom:0px;margin-top:-5px;">&nbsp;</span>
      </div>
      <div class="rowư flexboxx">
        <div class="col" style="background-color: #e7e7e7;margin-right: 20px">
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.an-giang.html" title="Khách sạn An Giang">Khách sạn An Giang</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bac-lieu.html" title="Khách sạn Bạc Liêu">Khách sạn Bạc Liêu</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bao-loc.html" title="Khách sạn Bảo Lộc">Khách sạn Bảo Lộc</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ben-tre.html" title="Khách sạn Bến Tre">Khách sạn Bến Tre</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bien-hoa.html" title="Khách sạn Biên Hòa">Khách sạn Biên Hòa</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.buon-me-thuot.html" title="Khách sạn Buôn Ma Thuột">Khách sạn Buôn Ma Thuột</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ca-mau.html" title="Khách sạn Cà Mau">Khách sạn Cà Mau</a>
          </div>
          <div class="HotelNames">
          <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.can-tho.html" title="Khách sạn Cần Thơ">Khách sạn Cần Thơ</a>
          </div>
          <div class="HotelNames">
          <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.con-dao.html" title="Khách sạn Côn Đảo">Khách sạn Côn Đảo</a>
          </div>
          <div class="HotelNames">
          <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.dalat.html" title="Khách sạn Đà Lạt">Khách sạn Đà Lạt</a>
          </div>
        </div>
        <div class="col"  style="background-color: #e7e7e7; margin-right: 20px">
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.an-giang.html" title="Khách sạn An Giang">Khách sạn An Giang</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bac-lieu.html" title="Khách sạn Bạc Liêu">Khách sạn Bạc Liêu</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bao-loc.html" title="Khách sạn Bảo Lộc">Khách sạn Bảo Lộc</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ben-tre.html" title="Khách sạn Bến Tre">Khách sạn Bến Tre</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bien-hoa.html" title="Khách sạn Biên Hòa">Khách sạn Biên Hòa</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.buon-me-thuot.html" title="Khách sạn Buôn Ma Thuột">Khách sạn Buôn Ma Thuột</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ca-mau.html" title="Khách sạn Cà Mau">Khách sạn Cà Mau</a>
          </div>
          <div class="HotelNames">
          <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.can-tho.html" title="Khách sạn Cần Thơ">Khách sạn Cần Thơ</a>
          </div>
          <div class="HotelNames">
          <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.con-dao.html" title="Khách sạn Côn Đảo">Khách sạn Côn Đảo</a>
          </div>
          <div class="HotelNames">
          <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.dalat.html" title="Khách sạn Đà Lạt">Khách sạn Đà Lạt</a>
          </div>
        </div>
        <div class="col"  style="background-color: #e7e7e7; margin-right: 20px">
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.an-giang.html" title="Khách sạn An Giang">Khách sạn An Giang</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bac-lieu.html" title="Khách sạn Bạc Liêu">Khách sạn Bạc Liêu</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bao-loc.html" title="Khách sạn Bảo Lộc">Khách sạn Bảo Lộc</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ben-tre.html" title="Khách sạn Bến Tre">Khách sạn Bến Tre</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bien-hoa.html" title="Khách sạn Biên Hòa">Khách sạn Biên Hòa</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.buon-me-thuot.html" title="Khách sạn Buôn Ma Thuột">Khách sạn Buôn Ma Thuột</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ca-mau.html" title="Khách sạn Cà Mau">Khách sạn Cà Mau</a>
          </div>
          <div class="HotelNames">
          <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.can-tho.html" title="Khách sạn Cần Thơ">Khách sạn Cần Thơ</a>
          </div>
          <div class="HotelNames">
          <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.con-dao.html" title="Khách sạn Côn Đảo">Khách sạn Côn Đảo</a>
          </div>
          <div class="HotelNames">
          <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.dalat.html" title="Khách sạn Đà Lạt">Khách sạn Đà Lạt</a>
          </div>
        </div>
        <div class="col" style="background-color: #e7e7e7; margin-right: 20px">
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.an-giang.html" title="Khách sạn An Giang">Khách sạn An Giang</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bac-lieu.html" title="Khách sạn Bạc Liêu">Khách sạn Bạc Liêu</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bao-loc.html" title="Khách sạn Bảo Lộc">Khách sạn Bảo Lộc</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ben-tre.html" title="Khách sạn Bến Tre">Khách sạn Bến Tre</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bien-hoa.html" title="Khách sạn Biên Hòa">Khách sạn Biên Hòa</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.buon-me-thuot.html" title="Khách sạn Buôn Ma Thuột">Khách sạn Buôn Ma Thuột</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ca-mau.html" title="Khách sạn Cà Mau">Khách sạn Cà Mau</a>
          </div>
          <div class="HotelNames">
          <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.can-tho.html" title="Khách sạn Cần Thơ">Khách sạn Cần Thơ</a>
          </div>
          <div class="HotelNames">
          <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.con-dao.html" title="Khách sạn Côn Đảo">Khách sạn Côn Đảo</a>
          </div>
          <div class="HotelNames">
          <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.dalat.html" title="Khách sạn Đà Lạt">Khách sạn Đà Lạt</a>
          </div>
        </div>
        <div class="col" style="background-color: #e7e7e7;">
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.an-giang.html" title="Khách sạn An Giang">Khách sạn An Giang</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bac-lieu.html" title="Khách sạn Bạc Liêu">Khách sạn Bạc Liêu</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bao-loc.html" title="Khách sạn Bảo Lộc">Khách sạn Bảo Lộc</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ben-tre.html" title="Khách sạn Bến Tre">Khách sạn Bến Tre</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bien-hoa.html" title="Khách sạn Biên Hòa">Khách sạn Biên Hòa</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.buon-me-thuot.html" title="Khách sạn Buôn Ma Thuột">Khách sạn Buôn Ma Thuột</a>
          </div>
          <div class="HotelNames">
          <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ca-mau.html" title="Khách sạn Cà Mau">Khách sạn Cà Mau</a>
          </div>
          <div class="HotelNames">
          <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.can-tho.html" title="Khách sạn Cần Thơ">Khách sạn Cần Thơ</a>
          </div>
          <div class="HotelNames">
          <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.con-dao.html" title="Khách sạn Côn Đảo">Khách sạn Côn Đảo</a>
          </div>
          <div class="HotelNames">
          <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.dalat.html" title="Khách sạn Đà Lạt">Khách sạn Đà Lạt</a>
          </div>
        </div>
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

    


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #ff7b0a;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Đặt Phòng Cá Nhân</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form dialog-book-quick">
                      <div class="form-group">
                        <p class="quote" style=" border: solid 1px #e4e2e2;padding: 10px;font-size: .8em;background-color: #edf9d2;font-style: italic;line-height: 18px;">
                        Không muốn mất thời gian tìm kiếm, lựa chọn?<br>
                        Hãy để lại yêu cầu đặt phòng và thông tin liên lạc của bạn tại đây.<br>
                        Chúng tôi sẽ liên hệ với bạn trong vòng 12 tiếng giờ hành chính.
                        </p>
                        <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Yêu cầu đặt phòng</label>
                        <textarea class="" id="txtBody" style="width: 100%;height: 100px;border: solid 1px #e4e2e2;font-size: small;font-family: none;padding: 0 5px;" placeholder="Xin vui lòng điền tóm tắt thông tin đặt phòng nhanh của bạn tại đây.Chúng tôi sẽ liên hệ bạn trong vòng 12 tiếng giờ hành chính."></textarea>
                      </div>
                      <div class="form-group">
                        <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Email</label>
                        <input type="email" class="form-control" id="txtEmail_divBookQuick">
                      </div>
                      <div class="form-group">
                        <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Số di động</label>
                        <input type="text" class="form-control" id="txtMobile_divBookQuick">
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" style="background-color: #ff7b0a;">Đặt Phòng Nhanh</button>
                </div>
              </div>
          </div>
        </div>

        <div class="modal fade" id="phongdoan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #ff7b0a;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Đặt Phòng Đoàn</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form dialog-book-quick">
                      <div class="form-group">
                        <p class="quote" style=" border: solid 1px #e4e2e2;padding: 10px;font-size: .8em;background-color: #edf9d2;font-style: italic;line-height: 18px;">
                          <b>Lợi ích khi đặt phòng cho đoàn với Bookinghotel.vn</b>
                          <br>Uy tín, trách nhiệm &amp; giá tốt.
                          <br>Giảm giá tối đa cho khách hàng cá nhân.
                          <br>Chiết khấu hấp dẫn cho khách hàng công ty.
                        </p>
                        <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Yêu cầu đặt phòng</label>
                        <textarea class="" id="txtBody" style="width: 100%;height: 100px;border: solid 1px #e4e2e2;font-size: small;font-family: none;padding: 0 5px;" placeholder="Không muốn mất thời gian tìm kiếm, lựa chọn? Hãy để lại yêu cầu đặt phòng và thông tin liên lạc của bạn tại đây. Chúng tôi sẽ liên hệ với bạn trong vòng 12 tiếng giờ hành chính."></textarea>
                      </div>
                      <div class="form-group">
                        <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Email</label>
                        <input type="text" class="form-control" id="txtEmail_divBookQuick">
                      </div>
                      <div class="form-group">
                        <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Số di động</label>
                        <input type="text" class="form-control" id="txtMobile_divBookQuick">
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" style="background-color: #ff7b0a;">Đặt Phòng Đoàn</button>
                </div>
              </div>
          </div>
        </div>

        
</body>



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
</html>