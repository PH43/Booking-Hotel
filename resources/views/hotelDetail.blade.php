@extends('layouts.master')

@section('title', 'Khách sạn')

@section('styles')
    
@stop
<div>
    @foreach ($hotels as $hotel)
        <div>{{ $hotel["price"] }}</div>
    @endforeach
</div>
 @foreach($rooms as $hotel)
            <!-- product -->
            <div class="product-content product-wrap clearfix product-deatil">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="product-image">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                {{-- @foreach () --}}
                                    <div class="carousel-item active">
                                        {{-- ../../resources/images/rooms/{{}} --}}
                                        <img src="" class="d-block w-100" alt="...">
                                    </div>
                                {{-- @endforeach --}}

                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                        <h2 class="name">
                            Hotel  <i style='font-size:25px;color:#4fb0d1'> ({{$hotel->city}})</i>
                            <h6><i class="fa-fw fas fa fa-map-marker nav-icon" style='font-size:30px;color:blue'></i>{{$hotel->address}}</h6>
                            <i class="fa fa-star fa-2x text-primary"></i>
                            <i class="fa fa-star fa-2x text-primary"></i>
                            <i class="fa fa-star fa-2x text-primary"></i>
                            <i class="fa fa-star fa-2x text-primary"></i>
                            <i class="fa fa-star fa-2x text-muted"></i>
                            <span class="fa fa-2x"><h5>(109) Votes</h5></span>
                            <a href="javascript:void(0);">Xem bản đồ</a>
                        </h2>
                        <hr />
                        <h3 class="price-container">
                            {{number_format($hotel->price)}}đ /đêm
                        </h3>
                        <p><i class="fas fa-bed" style='font-size:20px;'></i> {{$hotel->type}}</p>
                        <div class="certified">
                            <ul>
                                <li>
                                    <i class="fas fa-wifi" style='font-size:20px;color:green'></i> Wifi
                                </li>
                                &nbsp;
                                <li>
                                    <i class="fas fa-smoking-ban" style='font-size:20px;color:red'></i> Không hút thuốc
                                </li>
                                &nbsp;
                                <li>
                                    <i class="fas fa-tv" style='font-size:20px;color:black'></i> Ti vi
                                </li>
                                &nbsp;
                                <li>
                                    <i class="fas fa-concierge-bell" style='font-size:20px;color:#ff7b0a'></i> Dịch vụ phòng
                                </li>
                            </ul>
                        </div>
                        <hr />
                        @if(session()->has('message'))
                            <div class="alert alert-success">{{session()->get('message')}}</div> 
                        @endif
                        <div class="description description-tabs">
                            <ul  class="nav nav-pills">
                                <li class="nav-item"><a href="#more-information" data-toggle="tab" class="nav-link active">Chi tiết phòng </a></li>
                                <li class="nav-item"><a href="#specifications" data-toggle="tab" class="nav-link">Dịch vụ</a></li>
                                <li class="nav-item"><a href="#reviews" data-toggle="tab" class="nav-link">Bình luận</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in" id="more-information">
                                    <p><b>Loại phòng:</b> </p>
                                </div>
                                <div class="tab-pane fade" id="specifications">
                                    <br />
                                    <dl class="">
                                        <dt>Có ti vi</dt>
                                        <dd>Có máy lạnh</dd>
                                        <dd>Có máy nước nóng</dd>
                                        <dd>Phục vụ ăn uống tận nơi</dd>
                                        <br/>

                                        <dt>Các khuyến mãi</dt>
                                        <dd>A description list is perfect for defining terms.</dd>
                                        <br />
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>
            <!-- end product -->
 @endforeach
 
