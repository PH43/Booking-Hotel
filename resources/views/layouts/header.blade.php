
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Booking Landing Page</title>
  <link rel="stylesheet" href="{{asset('../resources/css/font.css')}}" />
  <link rel="stylesheet" href="{{asset('../resources/css/btr.css')}}" />
  <link rel="stylesheet" href="{{asset('../resources/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('../resources/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('../resources/css/style.scss')}}" />
  <link rel="stylesheet" href="{{asset('../resources/css/detail.css')}}" />
  <link rel="stylesheet" href="{{asset('../resources/css/booking.css')}}" />

  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'>
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
              <b>Xin chào:&nbsp;</b> <p class="nav__mobile-link"> {{ Auth::user()->name}}</p>
              <p><a href="{{ route('home.logout')}}" style="text-decoration:none">&nbsp;| Đăng xuất</a></p>
            @else
              <div class="cta"><a href="{{ route('home.login')}}">Sign In</a></div>
              <div class="cta active"><a style="color: white" href="{{ route('home.register')}}">Register</a></div> 
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
             <i class="fa fa-search"></i><input class="timkiem" type="text" placeholder="Enter a destination" style="border: none;padding-left: 4px;">
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
      <img src="{{asset('../resources/images/hotel.png')}}" class="hotel">
      <img src="{{asset('../resources/images/car1.png')}}" class="car1">
      <img src="{{asset('../resources/images/car2.png')}}" class="car2">
      <img src="{{asset('../resources/images/car3.png')}}" class="car3">
      <img src="{{asset('../resources/images/car4.png')}}" class="car4">
      {{-- <img src="../resources/images/dog.gif" class="dog_1"> --}}
      <img src="{{asset('../resources/images/cloud.png')}}" class="cloud">
      <img src="{{asset('../resources/images/cloud.png')}}" class="cloud_2">
      <img src="{{asset('../resources/images/cloud.png')}}" class="cloud_3">
      <img src="{{asset('../resources/images/cloud.png')}}" class="cloud_4">
    </div>
    @yield('main')
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
            @if(session('messages'))
                <div class="alert alert-success">
                    {{session('messages')}}
                </div>
            @endif 
            <form  action="{{route('Store.advise')}}" method="POST">
              {{ csrf_field() }}
              <div class="modal-body">
                  <div class="form dialog-book-quick">                      
                    <div class="form-group">
                      <p class="quote" style=" border: solid 1px #e4e2e2;padding: 10px;font-size: .8em;background-color: #edf9d2;font-style: italic;line-height: 18px;">
                      Không muốn mất thời gian tìm kiếm, lựa chọn?<br>
                      Hãy để lại yêu cầu đặt phòng và thông tin liên lạc của bạn tại đây.<br>
                      Chúng tôi sẽ liên hệ với bạn trong vòng 12 tiếng giờ hành chính.
                      </p>
                      <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Yêu cầu đặt phòng<i style="color:red">*</i></label>
                      <textarea name="note" class="" id="txtBody" style="width: 100%;height: 100px;border: solid 1px #e4e2e2;font-size: small;font-family: none;padding: 0 5px;" placeholder="Xin vui lòng điền tóm tắt thông tin đặt phòng nhanh của bạn tại đây.Chúng tôi sẽ liên hệ bạn trong vòng 12 tiếng giờ hành chính." required></textarea>
                    </div>
                    <div class="form-group">
                      <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Email<i style="color:red">*</i></label>
                      <input type="email" class="form-control" id="txtEmail_divBookQuick" name="email" required>
                    </div>
                    <div class="form-group">
                      <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Số di động<i style="color:red">*</i></label>
                      <input type="text" class="form-control" id="txtMobile_divBookQuick" name="phone" required>
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="type_customer" value="cá nhân">
                    </div>                     
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                  <button type="submit" class="btn btn-primary" style="background-color:#ff7b0a;" >Đặt Phòng Nhanh</button>
              </div>
            </form>
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
            @if(session('messages'))
                <div class="alert alert-success">
                    {{session('messages')}}
                </div>
            @endif 
            <form  action="{{route('Store.advise')}}" method="POST">
              {{ csrf_field() }}
              <div class="modal-body">
                  <div class="form dialog-book-quick">
                    <div class="form-group">
                      <p class="quote" style=" border: solid 1px #e4e2e2;padding: 10px;font-size: .8em;background-color: #edf9d2;font-style: italic;line-height: 18px;">
                        <b>Lợi ích khi đặt phòng cho đoàn với Bookinghotel.vn</b>
                        <br>Uy tín, trách nhiệm &amp; giá tốt.
                        <br>Giảm giá tối đa cho khách hàng cá nhân.
                        <br>Chiết khấu hấp dẫn cho khách hàng công ty.
                      </p>
                      <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Yêu cầu đặt phòng<i style="color:red">*</i></label>
                      <textarea name="note" class="" id="txtBody" style="width: 100%;height: 100px;border: solid 1px #e4e2e2;font-size: small;font-family: none;padding: 0 5px;" placeholder="Không muốn mất thời gian tìm kiếm, lựa chọn? Hãy để lại yêu cầu đặt phòng và thông tin liên lạc của bạn tại đây. Chúng tôi sẽ liên hệ với bạn trong vòng 12 tiếng giờ hành chính." required></textarea>
                    </div>
                    <div class="form-group">
                      <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Email<i style="color:red">*</i></label>
                      <input type="text" class="form-control" id="txtEmail_divBookQuick" name="email" required>
                    </div>
                    <div class="form-group">
                      <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Số di động<i style="color:red">*</i></label>
                      <input type="text" class="form-control" id="txtMobile_divBookQuick" name="phone" required>
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="type_customer" value="tập thể">
                    </div>  
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                  <button type="submit" class="btn btn-primary" style="background-color: #ff7b0a;">Đặt Phòng Đoàn</button>
              </div>
            </form>
          </div>
      </div>
    </div>
    @include('layouts.footer')
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