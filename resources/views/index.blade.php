
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
  <link rel="stylesheet" href="../resources/css/room.css" />
  <link rel="stylesheet" href="../resources/js/bootstrap.bundle.min.js" />
  <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>


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
              <div class="cta"><a href="#" style="color: black"  data-toggle="modal" data-target="#login">Sign In</a></div>
              <div class="cta active"><a style="color: white" href="#" data-toggle="modal" data-target="#register">Register</a></div> 
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

        <form class="booking_details tab__content" id="Hotels" action="{{ route('search.hotel') }}" method="GET" >
          
          <div class="item">
             <i class="fa fa-search"></i>
             <input required class="timkiem" type="text" name="city" placeholder="Enter a destination" style="border: none;padding-left: 4px;">
          </div>

          <div class="item">
            <p style="margin: 0px;">Thời gian đến:</p>
            <input type="date"  name="startDate" value="{{ $dtnow }}" min="{{$dtnow}}">
          </div>

          <div class="item">
            <p style="margin: 0px;">Thời điểm đi:</p>
            <input type="date" name="endDate" value="{{ $dt }}">
          </div>

           <!-- <div class="item">
            <div class="people">2 adults, 0 children <i class="fa fa-angle-down"></i></div>
          </div>  -->

          <div class="item">
            <div class="cta active">
              <input type="hidden" name="orderBy" value="DEFAULT">
              {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
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
                  <div  class="thumb-info-wrapper zoom" style="" onmousemove="zoom(event)" ontouchmove="zoom(event)">
                    {{-- background:url(../resources/images/rooms/{{$room->images->first()->path}}) --}}
                  @if($room->images != NULL)
                  <img class="img" width="266px" height="232px" title="" src="https://du-lich.chudu24.com/f/m/1907/30/melia-ho-tram-6701-1632578.jpg?w=266&amp;h=232">
                  @endif
                </div>                     
                  <span class="table-see-all" >
                  <input type="button"  value="xem chi tiết"  href="" data-toggle="modal" data-target="#xemchitiet{{$room->id}}">
                  </span>
                </span>
              </a>
              <p>Loại phòng: {{ $room->roomType->type }}</p>
              <h3 class="mrgt1x mrgb05 padl1x padr1x">
                <a class="title-promotion " href="//khachsan.chudu24.com/ks.5921.melia-ho-tram-beach-resort.html" target="_blank" hotelname=" {{ $room->hotel->name }}" hotelidint=" {{ $room->hotel->id }}" roomtypeidint=" {{ $room->roomType->id }}">{{ $room->hotel->name }}</a>
              </h3>
                  @for ($i=0; $i < $room->hotel->star; $i++)
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" viewBox="0 0 576 512" style="height: 12px;"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" style="color: #f38e11;"/></svg>
                  @endfor
              <div class="padb1x padl1x padr1x">
                <span class="summary">Giá đặc biệt chỉ từ <span><b>{{ number_format($room->price)}}đ</b></span>/đêm</span>
              </div>
            </div>
          </div>


          <div class="modal fade" id="xemchitiet{{$room->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #ff7b0a;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Chi tiết phòng {{ $room->roomType->type }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid mt-2 mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-5 pr-2">
                            <div class="card">
                                <div class="demo">
                                  <!-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img src="https://i.imgur.com/KZpuufK.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="https://i.imgur.com/GwiUmQA.jpg" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="https://i.imgur.com/DhKkTrG.jpg" class="d-block w-100" alt="...">
                                      </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                   -->
                                  <ul id="lightSlider">
                                      @foreach ($room->images as $image)
                                      <li data-thumb="../resources/images/rooms/{{$image->path}}"> <img src="../resources/images/rooms/{{$image->path}}" /> </li>
                                      @endforeach
                                  </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="p-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="ml-1">5.0</span>
                                </div>
                                <div class="about"> <span class="font-weight-bold">{{$room->hotel->name }}</span>
                                    <h4 class="font-weight-bold">{{ number_format($room->price)}}đ</h4>
                                </div>
                                <hr>
                                <div class="product-description">
                                    <div class="mt-2"> <span class="font-weight-bold">Description</span>
                                        <p>{{$room->description}}</p>
                                        <div class="bullets">
                                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Wifi</span> </div>
                                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Tivi</span> </div>
                                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Phục vụ bữa ăn sáng</span> </div>
                                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Không hút thuốc</span> </div>
                                        </div>
                                    </div>
                                    <div class="mt-2"> <span class="font-weight-bold">Store</span> </div>
                                    <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/N2fYgvD.png" class="rounded-circle store-image">
                                        <div class="d-flex flex-column ml-1 comment-profile">
                                            <div class="comment-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="username">Rare Boutique</span> <small class="followers">25K Followers</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                  <button type="button" class="btn btn-primary" style="background-color: #ff7b0a;">Đặt</button>
                </div> 
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
            <div id="{{ $city->id }}" iddanhmuc="97" class=" flexitem flexitem_4">
              <div class="popluar-category" style="background-color: white;">
                <a  title=" {{ $city->city }}" href=""  class="mihawk-list-hotel popup_detail" >
                  <span class="thumb-info">
                    <div  class="thumb-info-wrapper">
                      <img class="img"  title="  {{ $city->city }} " src="https://du-lich.chudu24.com/f/m/1907/30/melia-ho-tram-6701-1632578.jpg?w=266&amp;h=232">
                    </div>
                  </span>
                </a>
                <h3 class="mrgt1x mrgb05 padl1x padr1x" style="padding: 30px 0 30px 10px;">
                  <a class="title-promotion " href="{{ route('searchwithcity', $city->id) }}?city={{ $city->city }}&orderBy=DEFAULT"  style="font-weight: 500;">{{ $city->city }}</a>
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

        //login
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

        //register
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
                          <input type="submit" class="btn btn-primary" style="background-color: #ff7b0a;padding: left 40px;" value="Đăng ký" ></input>
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


//slider
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



</html>
