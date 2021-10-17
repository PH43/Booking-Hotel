
@extends('layouts.header')
@section('main')
<div class="col-sm-12 col-md-12 col-lg-12">
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
                        @foreach ($room->images as $image)
                            <div class="carousel-item active">
                                <img src="../../resources/images/rooms/{{$image->path}}" class="d-block w-100" alt="...">
                            </div>
                        @endforeach

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
                    Hotel {{$room->hotel->name}} <i style='font-size:25px;color:#4fb0d1'> ({{$room->hotel->city->city}})</i>
                    <h6><i class="fa-fw fas fa fa-map-marker nav-icon" style='font-size:30px;color:blue'></i>{{$room->hotel->address}}</h6>
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
                    {{number_format($room->price)}}đ /đêm
                </h3>
                <p><i class="fas fa-bed" style='font-size:20px;'></i> {{$room->roomType->name}}</p>
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
                            <br />
                            <strong>Mô tả</strong>
                            <p>
                            {{$room->description}}
                            </p>
                            <b>Web:</b><a href="{{$room->hotel->website}}"> {{$room->hotel->website}}</a>
                            </p>
                            <p><b>Loại phòng:</b> {{$room->roomType->name}}</p>
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
                        <div class="tab-pane fade" id="reviews">
                            <br />
                           
                            @if(Auth::check())
                            <form method="post" action="{{route('room.comment',$room->id)}}" class="well padding-bottom-10" ">
                                @csrf
                                <textarea rows="2" class="form-control" placeholder="Write a review" name="content"></textarea>
                                <div class="margin-top-10">
                                    <input type="submit" class="btn btn-sm btn-primary pull-right" value="Review">
                                        Review
                                    </input>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Location"><i class="fa fa-location-arrow"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Voice"><i class="fa fa-microphone"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Photo"><i class="fa fa-camera"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add File"><i class="fa fa-file"></i></a>
                                </div>
                            </form>
                            @endif
                            <div class="chat-body no-padding profile-message">
                                <ul>
                                @if(isset($room->comments))              
                                    @foreach($comments as $comment)
                                        <hr>
                                        <li class="message">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="online" />
                                            <span class="message-text">
                                                <a href="javascript:void(0);" class="username">
                                                    {{$comment->user->name}}
                                                    <span class="badge">Đã booking</span>
                                                    <span class="pull-right">
                                                        <i class="fa fa-star fa-2x text-primary"></i>
                                                        <i class="fa fa-star fa-2x text-primary"></i>
                                                        <i class="fa fa-star fa-2x text-primary"></i>
                                                        <i class="fa fa-star fa-2x text-primary"></i>
                                                        <i class="fa fa-star fa-2x text-muted"></i>
                                                    </span>
                                                </a>
                                                {{$comment->content}}
                                            </span>
                                            <ul class="list-inline font-xs">
                                                <li>
                                                    <a href="javascript:void(0);" class="text-info"><i class="fa fa-thumbs-up"></i>like(22)</a>
                                                </li>
                                                <li class="pull-right">
                                                    <small class="text-muted pull-right ultra-light">{{$comment->created_at}}</small>
                                                </li>                                          
                                            </ul>
                                        </li>                                       
                                    @endforeach                                     
                                @endif   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <a href="javascript:void(0);" class="btn btn-success btn-lg">Booking</a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="btn-group pull-right">
                            <button class="btn btn-white btn-default"><i class="fa fa-star"></i>Yêu thích</button>
                            <button class="btn btn-white btn-default"><i class="fa fa-envelope"></i>Liên hệ với hotel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product -->
</div>


@endsection
         