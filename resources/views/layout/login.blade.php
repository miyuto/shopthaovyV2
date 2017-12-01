@extends('master')
@section('content')
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->

                    @if(count($errors->loginErrors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->loginErrors->all() as $er)
                                {{$er}}
                                <br>
                            @endforeach
                        </div>
                    @endif
                    @if(Session::has('login-failed') && count($errors->loginErrors)<=0)
                        <div class="alert alert-danger">{{Session::get('login-failed')}} </div>
                    @endif
                    <h2>Đăng nhập</h2>
                    <form action="{{route('post-login')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" placeholder="Email hoặc Tài khoản" name="email"/>
                        <input type="password" placeholder="Nhập mật khẩu" name="password"/>
                        <span>
								<input type="checkbox" class="checkbox" name="holdinglogin">
								Duy trì đăng nhập
							</span>
                        <button type="submit" class="btn btn-default">Đăng nhập</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">Hoặc</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    @if(count($errors->signupErrors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->signupErrors->all() as $er)
                                {{$er}}
                                <br>
                            @endforeach
                        </div>
                    @endif
                    <h2>Đăng ký tài khoản mới</h2>
                    <form action="{{route('post-signup')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" placeholder="Tài khoản" name="namesignup"/>
                        <input type="email" placeholder="Email" name="emailsignup"/>
                        <input type="password" placeholder="Nhập mật khẩu" name="passsignup"/>
                        <input type="password" placeholder="Nhập lại mật khẩu" name="repasssignup"/>
                        <button type="submit" class="btn btn-default" >Đăng ký</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->
    @endsection