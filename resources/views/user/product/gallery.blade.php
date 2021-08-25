@extends('user.layouts.main')
@section('usercontent')
<style>
    ul {
        padding:0 0 0 0;
        margin:0 0 0 0;
    }
    ul li {
        list-style:none;
        margin-bottom:25px;
    }
    ul li img {
        cursor: pointer;
    }
    .modal-body {
        padding:5px !important;
    }
    .modal-content {
        border-radius:0;
    }
    .modal-dialog img {
        text-align:center;
        margin:0 auto;
    }
  .controls{
      width:50px;
      display:block;
      font-size:11px;
      padding-top:8px;
      font-weight:bold;
  }
  .next {
      float:right;
      text-align:right;
  }
    /*override modal for demo only*/
    .modal-dialog {
        max-width:500px;
        padding-top: 90px;
    }
    @media screen and (min-width: 768px){
        .modal-dialog {
            width:500px;
            padding-top: 90px;
        }
    }
    @media screen and (max-width:1500px){
        #ads {
            display:none;
        }
    }
</style>
    <div class="container">
        <div class="row" style="text-align:center; border-bottom:1px dashed #ccc;  padding:0 0 20px 0; margin-bottom:40px;">
            <div class="jquery-script-ads" align="center">

            </div>
        </div>
        <ul class="row">
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-174908-rocking-the-night-away-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-287182-blah-blah-blah-yellow-road-sign-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-460760-colors-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-461673-retro-party-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-514834-touchscreen-technology-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-916206-legal-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-1062948-nature-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-1471528-insant-camera-kid-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-2255072-relaxed-man-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-2360379-colors-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-2360571-jump-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-2361384-culture-for-business-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-2441670-spaghetti-with-tuna-fish-and-parsley-s.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-2943363-budget-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-3444921-street-art-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-3552322-insurance-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-3807845-food-s.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-3835655-down-office-worker-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-4619216-ui-control-knob-regulators-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-5771958-health-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-268693-businesswoman-using-laptop-outdoors-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-352207-search-of-code-s.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-247190-secret-email-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-682990-online-search-xs.jpg">
            </li>
        </ul>
    </div> <!-- /container -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

      </script>
@endsection
@section('usercontent1')
    <div class="container mydiv">
        <div class="row">
            <div class="col-md-5">
                <!-- bbb_deals -->
                <div class="bbb_deals">
                    <div class="bbb_deals_title">Deals of the Week</div>
                    <div class="bbb_deals_slider_container">
                        <!-- bbb_deals Slider -->
                        <div class="owl-carousel owl-theme bbb_deals_slider">
                            <!-- bbb_deals Item -->
                            <div class="owl-item bbb_deals_item">
                                <div class="bbb_deals_image">
                                    <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562074043/234.png" alt="">
                                </div>
                                <div class="bbb_deals_content">
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="bbb_deals_item_category"><a href="#">Laptops</a> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bbb_deals_item_price_a ml-auto pull-right">₹30,000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="bbb_deals_item_name">Toshiba Notebook</div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bbb_deals_item_price pull-right">₹25,550</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="available">
                                        <div class="available_line d-flex flex-row justify-content-start">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="available_title">Available: <span>6</span> </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="sold_title ml-auto">Already sold: <span>28</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="available_bar"><span style="width:17%"></span> </div>
                                    </div>
                                    <div class="bbb_deals_timer d-flex flex-row align-items-center justify-content-start">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="bbb_deals_timer_title_container">
                                                    <div class="bbb_deals_timer_title">Hurry Up</div>
                                                    <div class="bbb_deals_timer_subtitle">Offer ends in:</div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="bbb_deals_timer_content pull-right">
                                                    <div class="bbb_deals_timer_box clearfix" data-target-time="">
                                                        <div class="bbb_deals_timer_unit">
                                                            <div id="bbb_deals_timer1_hr" class="bbb_deals_timer_hr"></div> <span>hours</span>
                                                        </div>
                                                        <div class="bbb_deals_timer_unit">
                                                            <div id="bbb_deals_timer1_min" class="bbb_deals_timer_min"></div> <span>mins</span>
                                                        </div>
                                                        <div class="bbb_deals_timer_unit">
                                                            <div id="bbb_deals_timer1_sec" class="bbb_deals_timer_sec"></div> <span>secs</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- bbb_deals Item -->
                            <div class="owl-item bbb_deals_item">
                                <div class="bbb_deals_image"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562074217/124896_preview.png" alt=""> </div>
                                <div class="bbb_deals_content">
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="bbb_deals_item_category"><a href="#">Laptops</a> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bbb_deals_item_price_a ml-auto pull-right">₹28,000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="bbb_deals_item_name">Samsung Laptop</div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bbb_deals_item_price pull-right">₹26,600</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="available">
                                        <div class="available_line d-flex flex-row justify-content-start">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="available_title">Available: <span>6</span> </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="sold_title ml-auto">Already sold: <span>28</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="available_bar"><span style="width:17%"></span> </div>
                                    </div>
                                    <div class="bbb_deals_timer d-flex flex-row align-items-center justify-content-start">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="bbb_deals_timer_title_container">
                                                    <div class="bbb_deals_timer_title">Hurry Up</div>
                                                    <div class="bbb_deals_timer_subtitle">Offer ends in:</div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="bbb_deals_timer_content pull-right">
                                                    <div class="bbb_deals_timer_box clearfix" data-target-time="">
                                                        <div class="bbb_deals_timer_unit">
                                                            <div id="bbb_deals_timer1_hr" class="bbb_deals_timer_hr"></div> <span>hours</span>
                                                        </div>
                                                        <div class="bbb_deals_timer_unit">
                                                            <div id="bbb_deals_timer1_min" class="bbb_deals_timer_min"></div> <span>mins</span>
                                                        </div>
                                                        <div class="bbb_deals_timer_unit">
                                                            <div id="bbb_deals_timer1_sec" class="bbb_deals_timer_sec"></div> <span>secs</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- bbb_deals Item -->
                            <div class="owl-item bbb_deals_item">
                                <div class="bbb_deals_image"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562074297/laptop_PNG5911_1.png" alt=""> </div>
                                <div class="bbb_deals_content">
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="bbb_deals_item_category"><a href="#">Laptops</a> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bbb_deals_item_price_a ml-auto pull-right">₹32,000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="bbb_deals_item_name">HP Notebook</div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bbb_deals_item_price pull-right">₹28,550</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="available">
                                        <div class="available_line d-flex flex-row justify-content-start">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="available_title">Available: <span>6</span> </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="sold_title ml-auto">Already sold: <span>28</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="available_bar"><span style="width:17%"></span> </div>
                                    </div>
                                    <div class="bbb_deals_timer d-flex flex-row align-items-center justify-content-start">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="bbb_deals_timer_title_container">
                                                    <div class="bbb_deals_timer_title">Hurry Up</div>
                                                    <div class="bbb_deals_timer_subtitle">Offer ends in:</div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="bbb_deals_timer_content pull-right">
                                                    <div class="bbb_deals_timer_box clearfix" data-target-time="">
                                                        <div class="bbb_deals_timer_unit">
                                                            <div id="bbb_deals_timer1_hr" class="bbb_deals_timer_hr"></div> <span>hours</span>
                                                        </div>
                                                        <div class="bbb_deals_timer_unit">
                                                            <div id="bbb_deals_timer1_min" class="bbb_deals_timer_min"></div> <span>mins</span>
                                                        </div>
                                                        <div class="bbb_deals_timer_unit">
                                                            <div id="bbb_deals_timer1_sec" class="bbb_deals_timer_sec"></div> <span>secs</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bbb_deals_slider_nav_container">
                        <div class="bbb_deals_slider_prev bbb_deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                        <div class="bbb_deals_slider_next bbb_deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                    </div>
                </div> <!-- Featured -->
            </div>
            <div class="col-md-7">
                <div class="container m-t-20"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562134756/Untitled_design_9.png" class="img-responsive img-style"> </div>
                <div class="container m-t-20">
                    <div class="row">
                        <div class="col-md-4 padding-0">
                            <div class="bbb_item is_new">
                                <div class="bbb_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924153/alcatel-smartphones-einsteiger-mittelklasse-neu-3m.jpg" alt=""></div>
                                <div class="bbb_content">
                                    <div class="bbb_category"><a href="#">Smart Phones</a></div>
                                    <div class="bbb_info clearfix">
                                        <div class="bbb_name"><a href="product.html">Alcatel Mobile</a></div>
                                        <div class="bbb_price">₹13790</div>
                                    </div>
                                </div>
                                <ul class="bbb_marks">
                                    <li class="bbb_mark bbb_discount">-25%</li>
                                    <li class="bbb_mark bbb_new">new</li>
                                </ul>
                                <div class="bbb_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>
                        <div class="col-md-4 padding-0">
                            <div class="bbb_item is_new">
                                <div class="bbb_image d-flex flex-column align-items-center justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924153/alcatel-smartphones-einsteiger-mittelklasse-neu-3m.jpg" alt=""></div>
                                <div class="bbb_content">
                                    <div class="bbb_category"><a href="#">Smart Phones</a></div>
                                    <div class="bbb_info clearfix">
                                        <div class="bbb_name"><a href="product.html">Alcatel Mobile</a></div>
                                        <div class="bbb_price">₹13790</div>
                                    </div>
                                </div>
                                <ul class="bbb_marks">
                                    <li class="bbb_mark bbb_discount">-25%</li>
                                    <li class="bbb_mark bbb_new">new</li>
                                </ul>
                                <div class="bbb_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>
                        <div class="col-md-4 padding-0">
                            <div class="bbb_item is_new">
                                <div class="bbb_image d-flex flex-column align-items-center justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924153/alcatel-smartphones-einsteiger-mittelklasse-neu-3m.jpg" alt=""></div>
                                <div class="bbb_content">
                                    <div class="bbb_category"><a href="#">Smart Phones</a></div>
                                    <div class="bbb_info clearfix">
                                        <div class="bbb_name"><a href="product.html">Alcatel Mobile</a></div>
                                        <div class="bbb_price">₹13790</div>
                                    </div>
                                </div>
                                <ul class="bbb_marks">
                                    <li class="bbb_mark bbb_discount">-25%</li>
                                    <li class="bbb_mark bbb_new">new</li>
                                </ul>
                                <div class="bbb_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
