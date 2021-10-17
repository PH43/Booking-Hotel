@extends('layouts.header')
@section('main')
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

  <div class="topdiemden" style="margin: 0 auto; padding-inline: 100px; margin-top: 20px; background-color: white;">
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
                    <div  class="thumb-info-wrapper zoom" style="background:url(../resources/images/rooms/{{$room->images->first()->path}})" onmousemove="zoom(event)" ontouchmove="zoom(event)">
                    @if($room->images != NULL)
                    <img class="img" with="170" height="170" title=" " src="../resources/images/rooms/{{$room->images->first()->path}}">
                    @endif
                  </div>                     
                    <span class="table-see-all" >
                      <!-- <a href="{{route('room.detail',$room->id)}}" class="btn btn-xs btn-primary">Xem chi tiết</a> -->
                    <input type="button"  value="xem chi tiết" >
                    </span>
                  </span>
                </a>
                <p>Loại phòng: {{ $room->roomType->name }}</p>
                <h3 class="mrgt1x mrgb05 padl1x padr1x">
                  <a class="title-promotion " href="//khachsan.chudu24.com/ks.5921.melia-ho-tram-beach-resort.html" target="_blank" hotelname=" {{ $room->hotel->name }}" hotelidint=" {{ $room->hotel->id }}" roomtypeidint=" {{ $room->roomType->id }}">{{ $room->hotel->name }}</a>
                </h3>
                <div class="padb1x padl1x padr1x">
                  <span class="summary">Giá đặc biệt chỉ từ <span><b>{{ number_format($room->price)}}đ</b></span>/đêm</span>
                </div>
              </div>
            </div>
        @endforeach
      </div>

    </div> 
  </div>

  <div class="roomtype" style="margin: 0 auto; padding-inline: 100px; margin-top: 20px; background-color: #e7e7e7;">
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
                <a  title=" {{ $city->city }}" class="mihawk-list-hotel popup_detail" >
                  <span class="thumb-info">
                    <div  class="thumb-info-wrapper">
                      <img class="img"  title="  {{ $city->city }} " src="https://du-lich.chudu24.com/f/m/1907/30/melia-ho-tram-6701-1632578.jpg?w=266&amp;h=232">
                    </div>
                  </span>
                </a>
                <h3 class="mrgt1x mrgb05 padl1x padr1x" style="padding: 30px 0 30px 10px;">
                  <a class="title-promotion " href="//khachsan.chudu24.com/ks.5921.melia-ho-tram-beach-resort.html" target="_blank" hotelname=" {{ $city->city }}" hotelidint=" {{ $city->city }}" roomtypeidint=" {{ $city->city }}" style="font-weight: 500;">{{ $city->city }}</a>
                </h3>
              </div>
            </div>
        @endforeach
      </div>

    </div> 
  </div>

  <div class="topdiemden" style="margin: 0 auto; padding-inline: 100px; margin-top: 20px; background-color: white; padding-bottom: 50px;border-bottom: 5px solid #f38e11;">
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
@endsection
        
        




