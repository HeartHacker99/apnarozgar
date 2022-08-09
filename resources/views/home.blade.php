@extends('layouts.landing_header')

@section('banner_Search')
    <!--Banner & Search Box Start -->

    <section id="hero_section" class="top_cont_outer">
        <div class="hero_wrapper">
            <div class="container">
                <div class="hero_section">
                    <div class="row">
                        <div class="col-lg-5 col-sm-7">
                            <div class="top_left_cont">
                                <h2>Find & Hire <br> <strong>Expert </strong> Freelancers</h2>
                                <p>Work with the best freelance talent from around the world on our secure, flexible and cost-effective platform.</p>
                            </div>
                        </div>
                        <div class="container content" style="margin-top: -100px; margin-left: -40px">
                            <div class="blazer clearfix">
                                <div  class="col-sm-12">
                                    <div class="col-sm-offset-2 col-sm-8">
                                        <form class="newsletter-signup" role="form" type="get" action="{{url('/search')}}">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="query" id="text" placeholder="Search" required>
                                                <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default btn-sand"> Search </button>
                                            </span>
                                            </div><!-- /input-group -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div>
                             <img src="{{asset('/admin_assets/img/mainImg.png')}}" class="bannerImg zoomIn wow animated" alt="" />
                         </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Banner & Search Box End-->
@endsection


@section('content')
    <!-- ==== About Section Start ==== -->
    <section class="service-section fix" id="service">
        <div class="container pt100 pb100">
            <div class="stitle mb70">
                <h2>Services</h2>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="serv-icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="serv-content">
                            <h4>Graphic</h4>
                            <p>Lorem ipsum dolor sit amet, augue theophrastus ex.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="serv-icon">
                            <i class="fa fa-camera"></i>
                        </div>
                        <div class="serv-content">
                            <h4>Photography</h4>
                            <p>Lorem ipsum dolor sit amet, augue theophrastus ex.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="serv-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="serv-content">
                            <h4>Development</h4>
                            <p>Lorem ipsum dolor sit amet, augue theophrastus ex.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">

                    <div class="service-item">
                        <div class="serv-icon">
                            <i class="fa fa-life-ring"></i>
                        </div>
                        <div class="serv-content">
                            <h4>Support</h4>
                            <p>Lorem ipsum dolor sit amet, augue theophrastus ex.</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row" style="padding: 25px 0 0 0 ">
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="serv-icon">
                        <i class="fas fa-gamepad"></i>
                    </div>

                    <div class="serv-content">
                        <h4>Game Development</h4>
                        <p>Lorem ipsum dolor sit amet, augue theophrastus ex.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="serv-icon">
                        <i class="far fa-edit"></i>
                    </div>
                    <div class="serv-content">
                        <h4>Engineering & Architecture</h4>
                        <p>Lorem ipsum dolor sit amet, augue theophrastus ex.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="serv-icon">
                        <i class="fas fa-magic"></i>
                    </div>
                    <div class="serv-content">
                        <h4>Management</h4>
                        <p>Lorem ipsum dolor sit amet, augue theophrastus ex.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">

                <div class="service-item">
                    <div class="serv-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="serv-content">
                        <h4>Business</h4>
                        <p>Lorem ipsum dolor sit amet, augue theophrastus ex.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- ==== About Section End ==== -->
@endsection


@section('Why_Us')


    <!-- Why Us Section -->
    <section class="why-us">
        <div class="container" id="why-us">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="mt-5 text-center">Why Choose Us</h2>
                    <p class="mb-5 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolore fugit laboriosam nisi quam quis vitae voluptate! Animi architecto, autem earum hic illum inventore molestiae, odit praesentium quidem saepe velit?</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="box">
                        <span>01</span>
                        <h4><a href="#">Why Lorem Ipsum</a></h4>
                        <p>There are many variations of passages of available, but the majority have suffered alteration in some form</p>
                        <img src="{{asset('/img/1.jpg')}}" alt="">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="box">
                        <span>02</span>
                        <h4><a href="#">Why do we use it</a></h4>
                        <p>There are many variations of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <img src="{{asset('/img/1.jpg')}}" alt="">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="box">
                        <span>03</span>
                        <h4><a href="#">Can I get some</a></h4>
                        <p>There are many variations of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <img src="{{asset('/img/1.jpg')}}" alt="">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="box">
                        <span>04</span>
                        <h4><a href="#">Why Lorem Ipsum</a></h4>
                        <p>There are many variations of passages of Lorem Ipsum available, the majority have suffered alteration in some form</p>
                        <img src="{{asset('/img/1.jpg')}}" alt="">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="box">
                        <span>05</span>
                        <h4><a href="#">Why do we use it</a></h4>
                        <p>There are many of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <img src="{{asset('/img/1.jpg')}}" alt="">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="box">
                        <span>06</span>
                        <h4><a href="#">Can I get some</a></h4>
                        <p>There are variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <img src="{{asset('/img/1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Us Section -->

@endsection

@section('workdone')

    <section id="services" class="page-section colord">
        <div class="container" id="how" style="padding-bottom: 50px">
            <h1 style="padding-left: 10%;">It's Easy to Get Work Done on Guru</h1>
            <div class="row">
                <!-- item -->
                <div class="col-md-3 text-center"><div class="b1"> <i class="circle"><img src="{{asset('/img/a1.jpg')}}" alt="" /></i>
                        <h3>Post a Job</h3>
                        <p>Nullam ac rhoncus sapien, non gravida purus.
                            Nullam ac rhoncus sapien, non gravida purus.
                            Alinon elit imperdiet congue. Integer elit imperdiet
                            congue.</p>
                    </div></div>
                <!-- end: -->

                <!-- item -->
                <div class="col-md-3 text-center"><div class="b1"><i class="circle"> <img src="{{asset('/img/a2.jpg')}}" alt="" /></i>
                        <h3>Hire Freelancers</h3>
                        <p>Nullam ac rhoncus sapien, non gravida purus.
                            Nullam ac rhoncus sapien, non gravida purus.
                            Alinon elit imperdiet congue.Integer elit
                            imperdiet congue.</p>
                    </div></div>
                <!-- end: -->

                <!-- item -->
                <div class="col-md-3 text-center"><div class="b1"><i class="circle"> <img src="{{asset('/img/a3.jpg')}}" alt="" /></i>
                        <h3>Get Work Done</h3>
                        <p>Nullam ac rhoncus sapien, non gravida purus.
                            Nullam ac rhoncus sapien, non gravida purus.
                            Alinon elit imperdiet congue. Integer ultricies
                            sed elit impe.</p>
                    </div></div>
                <!-- end: -->

                <!-- item -->
                <div class="col-md-3 text-center"><div class="b1"><i class="circle"> <img src="{{asset('/img/a4.jpg')}}" alt="" /></i>
                        <h4>Make Secure Payments</h4>
                        <p>Nullam ac rhoncus sapien, Nullam ac rhoncus
                            sapien Nullam ac rhoncus sapien non gravida
                            purus. Alinon elit imperdiet congue. Integer
                            elit imperdiet conempus.</p>
                    </div></div>
                <!-- end:-->
            </div>
        </div>
        <!--/.container-->
    </section>

@endsection

@section('about')
    <section id="about">
        <div class="">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">About Apnarozgar</h2>
                <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="{{asset('/admin_assets/images/about_img.jpg')}}" alt="">
                </div>
                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Apnarozgar.com</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam. Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam adipiscing elit. Praesent eget risus vitae massa.</p>
                    <ul class="listarrow">
                        <li><i class="fa fa-angle-double-right"></i>Android Developers</li>
                        <li><i class="fa fa-angle-double-right"></i>Web Developers</li>
                        <li><i class="fa fa-angle-double-right"></i>Stock Exchanges</li>
                        <li><i class="fa fa-angle-double-right"></i>Buy And Sell Goods</li>
                        <li><i class="fa fa-angle-double-right"></i>Have Secure Conversation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')

    <section class="btm-section secpadding">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><div class="title-box clearfix "><h3 class="title-box_primary">New Projects</h3></div>
                    <div class="list styled custom-list">
                        <ul>
                            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Singapore Township</a></li>
                            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Mega luxury Villas</a></li>
                            <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">RNT Commercial Shopping Mall</a></li>
                            <li><a title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci." href="#">SVN Independent & Duplex Houses</a></li>
                            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">World wide IT park</a></li>
                            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">North Arena SNT Township</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4"><div class="title-box clearfix "><h3 class="title-box_primary">Large Projects</h3></div>
                    <div class="list styled custom-list">
                        <ul>
                            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Singapore Township</a></li>
                            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Mega luxury Villas</a></li>
                            <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">RNT Commercial Shopping Mall</a></li>
                            <li><a title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci." href="#">SVN Independent & Duplex Houses</a></li>
                            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">World wide IT park</a></li>
                            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">North Arena SNT Township</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4"><div class="title-box clearfix "><h3 class="title-box_primary">Our Clients</h3></div>
                    <blockquote class="blockquote-1">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid</p>
                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </blockquote></div>

            </div>
        </div>
    </section>


    <footer id="footer" >
        <div class="footer2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 panel" style="background: #272727">
                        <div class="panel-body" >
                            <p class="simplenav">
                                <a href="{{url('/')}}">Home</a> |
                                <a href="{{url('/#about')}}">About</a> |
                                <a href="#">Services</a> |
                                <a href="#">Price</a> |
                                <a href="#">Projects</a> |
                                <a href="#">Contact</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 panel" style="background: #272727">
                        <div class="panel-body">
                            <p class="text-right">
                                Copyright © 2021,  <a href="http://webthemez.com/" rel="develop">apnarozgar.com</a>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- /row of panels -->
            </div>
        </div>
    </footer>

@endsection

