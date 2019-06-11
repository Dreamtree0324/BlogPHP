@extends('layout/master')

@section('maincontent')
<div class="wrapper">
    <div class="login_content">
    <i class="fas fa-user-lock"></i>
    <h1>로그인</h1>
        <div class="login_box">
 
            <form action="/login" method="post">
                <div class="input_div">
                   <div class="text_input">
                        <input type="text" name="uid" placeholder="아이디"><br>
                        <input type="password" name="upwd" placeholder="비밀번호">
                    </div>
                    <div class="btn_input">
                        <input type="submit" class="submit_btn" value="로그인"><br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection