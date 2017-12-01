@extends('master')
@section('content')
    <div id="contact-page" class="container">
        <div class="bg">
            <div>
                <h2 class="title text-center">thông tin cá nhân</h2>
                <p class="customer_info_caution">(* Thông tin cá nhân được sử dụng để giao hàng)</p>
            </div>


            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                            <div class="form-group col-md-12">
                                {{--<p class="form-control"></p>--}}
                                <input type="text" name="name" class="form-control" required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div><!--/#contact-page-->
    @endsection