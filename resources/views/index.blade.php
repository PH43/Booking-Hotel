<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Booking Landing Page</title>
  <link rel="stylesheet" href="../resources/css/font.css" />
  <link rel="stylesheet" href="../resources/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../resources/css/style.css" />
</head>

<body>
  <div class="container" style="heigh: 80vh"> 

    <header>
      <nav>
        <div class="menu nav__pc">
          <div class="logo">Travel <span>Agency</span> Name</div>
          <ul class="nav__list">
            <li>Room</li>
            <li>Flight</li>
            <li>Today's Deal</li>
          </ul>
        </div>

        <div class="menu__mobile">
          <div class="logo">Travel <span>Agency</span> Name</div>
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
              <b>Xin chào:&nbsp;</b> <p class="nav__mobile-link"> {{ Auth::user()->name}}</p>
              <p><a href="{{ route('home.logout')}}" style="text-decoration:none">&nbsp;| Đăng xuất</a></p>
            @else
              <div class="cta"><a href="{{ route('home.login')}}"><i class="fa fa-sign-in-alt"></i>Sign In</a></div>
              <div class="cta active">Register</div>
            @endif
          </div>
        </div>
      </nav>
    </header>

    <div class="hotel_content">

      <div class="info PC">
        <h2>Book hotels online</h2>
        <p>Lorem ipsum dolor sit.</p>
      </div>

      <div class="booking_info PC">

        <div class="opt">
          <span class="tab__link active">Hotels</span>
          <span class="tab__link">Homes</span>
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
    <img src="../resources/images/dog.gif" class="dog_1">
    <img src="../resources/images/cloud.png" class="cloud">
    <img src="../resources/images/cloud.png" class="cloud_2">
    <img src="../resources/images/cloud.png" class="cloud_3">
    <img src="../resources/images/cloud.png" class="cloud_4">

  </div>

  <main>
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
              <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_payment.svg" alt="logo_payment" style="width: 52px; height: 52px;">
          </span>
          <span class="title-main" style="margin-top: 24px; white-space: nowrap;">Thanh toán dễ dàng, đa dạng</span>
          <span class="title-sub">Bao gồm thêm chuyển khoản ngân hàng và tiền mặt tại cửa hàng.</span>
      </div>

      <div class="nobody">
          <span class="photo">
          <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_total_hotel.svg" alt="logo_total_hotel" style="width:52px;height:52px">
          </span>
          <span class="title-main" style="margin-top:24px;white-space:nowrap">Hơn 8000+ khách sạn dọc Việt Nam</span>
          <span class="title-sub">Hàng nghìn khách sạn, đặc biệt là 4 sao và 5 sao, cho phép bạn thoải mái lựa chọn, giá cạnh tranh, phong phú.</span>
      </div>

    </div>   
    
    <div class="typerooms">
            <div class="">
            <div class="">
              <h3>
                <a href="//www.chudu24.com/khach-san/khuyen-mai.html" target="">Các loại phòng</a>
              </h3>
              <span class="deals" style="padding-bottom:0px;margin-top:-5px;">&nbsp;</span>
            </div>
          </div>

          <div class="">
            <div id="702" iddanhmuc="97" class="">
              <div class="">
                <a title="" class="">
                  <span class="">
                    <span id="" class="">
                      <img title="MELIA HỒ TRÀM BEACH RESORT" src="https://du-lich.chudu24.com/f/m/1907/30/melia-ho-tram-6701-1632578.jpg?w=266&amp;h=232">
                    </span>
                    <span class="">
                      <span class="">Xem chi tiết</span>
                    </span>
                  </span>
                </a>
                <h3 class="">
                  <a class="" href="//khachsan.chudu24.com/ks.5921.melia-ho-tram-beach-resort.html" target="" hotelname="Melia Hồ Tràm Beach Resort" hotelidint="5921" roomtypeidint="354632">MELIA HỒ TRÀM BEACH RESORT</a>
                </h3>
                <div class="">
                  <span class="">Giá đặc biệt chỉ từ 1.320k/khách</span>
                </div>
              </div>
            </div>
          </div>
          </div>

  </main>



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


</html>