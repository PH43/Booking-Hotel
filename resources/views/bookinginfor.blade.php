<form action="{{ route('thanhtoan') }}" style="display: flex;" method="GET">
    
    @if(Auth::check())
        <div  style="margin-top:0">
            <label data-shrink="false">
                <span style="font-size:16px;font-weight:400;line-height:19px;color:#718096">Họ tên
                    <span style="color:red">*</span>
                </span>
            </label>
            <div class="">
            <input type="text" aria-invalid="" name="name" value="{{ $name }}" class="">
            </div>
        </div>
        <div  style="width:49%">
            <label  data-shrink="false">
                <span style="font-size:16px;font-weight:400;line-height:19px;color:#718096">Số điện thoại
                    <span style="color:red">*</span>
                </span>
            </label>
            <div class="">
                <input type="text" aria-invalid="" name="phoneNumber" value="{{ $phone }}" class="">
            </div>
        </div>
        <div style="width:49%;margin-left:2%">
            <label  data-shrink="false">
                <span style="font-size:16px;font-weight:400;line-height:19px;color:#718096">Email
                    <span style="color:red">*</span>
                </span>
            </label>
            <div class="">
                <input type="email" aria-invalid="" name="email" value="{{ $email }}" class="">
            </div>
        </div>
        <div>
        <label  data-shrink="false">
                <span style="font-size:16px;font-weight:400;line-height:19px;color:#718096">yêu cầu dặt biệt
            </label>
            <input type="text" value="yêu cầu đặt biệt hoặc lưu ý?">
        </div>
        <div>
        <label  data-shrink="false">
                <span style="font-size:16px;font-weight:400;line-height:19px;color:#718096">code
            </label>
            <input type="text" aria-invalid="" name="phoneNumber" value="{{ $code }}" class="">
        </div>
        <div>
            <input type="submit" value="Thanh Toán">
        </div>
    @else
        <div>
            <p class="">
                <svg width="20" height="20" fill="none" class="svgFillAll" style="stroke: rgb(0, 182, 243);"><path d="M3.63 15.374a12.905 12.905 0 016.37-1.67 12.9 12.9 0 016.37 1.67m-3.592-7.226a2.778 2.778 0 11-5.556 0 2.778 2.778 0 015.556 0zM18.333 10a8.333 8.333 0 11-16.665 0 8.333 8.333 0 0116.665 0z" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>&nbsp;
                <span style="color: rgb(0, 182, 243); cursor: pointer;">Đăng Nhập
                    {{-- <a href="{{ route('thanhtoan.login')}}">Đăng nhập</a> --}}
                </span>&nbsp;
                <span>để đặt phòng nhanh hơn, không cần nhập thông tin!</span>
            </p>
        </div>
        <div  style="margin-top:0">
            <label data-shrink="false">
                <span style="font-size:16px;font-weight:400;line-height:19px;color:#718096">Họ tên
                    <span style="color:red">*</span>
                </span>
            </label>
            <div class="">
            <input type="text" aria-invalid="" name="name" value="" class="">
            </div>
        </div>
        <div  style="width:49%">
            <label  data-shrink="false">
                <span style="font-size:16px;font-weight:400;line-height:19px;color:#718096">Số điện thoại
                    <span style="color:red">*</span>
                </span>
            </label>
            <div class="">
                <input type="text" aria-invalid="" name="phoneNumber" value="" class="">
            </div>
        </div>
        <div style="width:49%;margin-left:2%">
            <label  data-shrink="false">
                <span style="font-size:16px;font-weight:400;line-height:19px;color:#718096">Email
                    <span style="color:red">*</span>
                </span>
            </label>
            <div class="">
                <input type="email" aria-invalid="" name="email" value="" class="">
            </div>
        </div>
        <div>
        <label  data-shrink="false">
                <span style="font-size:16px;font-weight:400;line-height:19px;color:#718096">yêu cầu dặt biệt
            </label>
            <input type="text" value="yêu cầu đặt biệt hoặc lưu ý?">
        </div>
        <div>
        <label  data-shrink="false">
                <span style="font-size:16px;font-weight:400;line-height:19px;color:#718096">code
            </label>
            <input type="text" aria-invalid="" name="phoneNumber" value="{{ $code }}" class="">
        </div>
        <div>
            <input type="submit" value="Thanh Toán">
        </div>
    @endif
    
    
    

     

    
</form>