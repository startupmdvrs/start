@extends('layouts.app')

@section('content')
<section class="main-banner">
    <div class="slider-section">
        <div class="slide"><img src="{{ asset('/public/front/images/banner2.jpg') }}" alt="banner" class="img-responsive"/></div>
        <div class="slide"><img src="{{asset('public/front/images/banner1.jpg')}}" alt="banner" class="img-responsive"/></div>
    </div>
    <div class="service-form-outer">
        <div class="container">
            <!-- <form method="post" action="" class="service-form" id="serv_form"> -->
            {!! Form::open(['route' => 'service.store', 'class' => 'service-form', 'id' => 'serv_form' ]) !!}
                <!-- tabs -->
                <div class="tab-outer" id="serv_form_div">
                    <a href="javascript:;" id="two_wheel_a" data-tabId="wh2" class="active">
                        <label>
                            <input type="radio" name="vehicle_type" checked="checked" id="1" value="4" />
                            2 Wheelers
                        </label>
                    </a>
                    <a href="javascript:;" id="four_wheel_a" data-tabId="wh4">
                        <label>
                            <input type="radio" name="vehicle_type" id="2" value="4" />
                            4 Wheelers
                        </label>
                    </a>
                </div>

                <!-- <div class="tab-outer">
                    
                            <input type="radio" name="vehicle_type" id="two_wheel" value="two_wheel" />
                            2 Wheelers
                       
                            <input type="radio" name="vehicle_type" id="four_wheel" value="four_wheel" />
                            4 Wheelers
                       
                </div> -->
                <div class="tab-content">
                    <div class="content-inner">
                        <div class="form-group">
                            <label>Brand</label>
                            <select name="vehicle_company" id="vehicle_company" class="form-control">
                                <option>Select Brand Name</option>
                                <!-- <option>Hero</option>
                                <option>Honda</option>
                                <option>Bajaj</option> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Model</label>
                            <select name="vehicle_model" id="vehicle_model" class="form-control">
                                <option>Select Model</option>
                                <!-- <option>Avenger</option>
                                <option>Bajaj V</option>
                                <option>Discover</option> -->
                            </select>
                        </div>
                        <div class="text-right">
                            <input type="submit" name="submit" value="Get a Quote" class="btn btn-secondary">
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
            <!-- </form> -->
        </div>
    </div>
</section>
<!-- second section -->
<section class="home-section why-us">
    <div class="container">
        <h2 class="header-typ1">Why Cho<span>ose Us?</span></h2>
        <div class="section-small-desc">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>

        <div class="row">
            <div class="col-sm-4">
                <div class="box-typ1">
                    <div class="icon-wrap">
                        <div class="c-table">
                            <div class="c-tcell">
                                <img src="{{ asset('/public/front/images/whyus-1.svg') }}" alt="coms" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                    <div class="desc-wrap">
                        <h3 class="header-typ2">EVERY JOB <span>IS PERSONAL</span></h3>
                        <div class="desc">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box-typ1">
                    <div class="icon-wrap">
                        <div class="c-table">
                            <div class="c-tcell">
                                <img src="{{ asset('/public/front/images/whyus-2.svg') }}" alt="gear" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                    <div class="desc-wrap">
                        <h3 class="header-typ2"><span>BEST</span>  MATERIALS</h3>
                        <div class="desc">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box-typ1">
                    <div class="icon-wrap">
                        <div class="c-table">
                            <div class="c-tcell">
                                <img src="{{ asset('/public/front/images/whyus-3.svg') }}" alt="crane" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                    <div class="desc-wrap">
                        <h3 class="header-typ2">24/7 Roadside <span>Assistance</span></h3>
                        <div class="desc">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center section-link">
            <a href="javascript:;" class="btn btn-primary" title="Read More">Read More</a>
        </div>
    </div>
</section>
<!-- third section -->
<section class="home-section-typ2 service-vehicle">
    <div class="media">
        <div class="media-left" style="background-image: url({{ asset('/public/front/images/service.jpg') }} );"></div>
        <div class="media-body">
            <div class="right-fixer">
                <h2 class="header-typ1"><span>OUR</span> MISSION</h2>
                <div class="base-text">
                    eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisiMauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi
                </div>
                <div class="section-small-desc">
                    <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisiMauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi</p>
                    <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisiMauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisiMauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi</p>
                    <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisiMauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fourth section -->
<section class="home-section how-works">
    <div class="container">
        <h2 class="header-typ1">How it <span>Works?</span></h2>
        <div class="row">
            <div class="col-sm-3">
                <div class="box-typ2">
                    <div class="icon-wrap">
                        <div class="c-table">
                            <div class="c-tcell">
                                <img src="{{ asset('/public/front/images/how-it-works.jpg') }}" alt="coms" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                    <div class="desc-wrap">
                        <div class="number">1</div>
                        <h3 class="header-typ2">Select <span>Vehicle</span></h3>                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="box-typ2">
                    <div class="icon-wrap">
                        <div class="c-table">
                            <div class="c-tcell">
                                <img src="{{ asset('/public/front/images/how-it-works2.jpg') }}" alt="coms" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                    <div class="desc-wrap">
                        <div class="number">2</div>
                        <h3 class="header-typ2">Select <span>Service</span></h3>                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="box-typ2">
                    <div class="icon-wrap">
                        <div class="c-table">
                            <div class="c-tcell">
                                <img src="{{ asset('/public/front/images/how-it-works3.jpg') }}" alt="coms" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                    <div class="desc-wrap">
                        <div class="number">3</div>
                        <h3 class="header-typ2">Get <span>Estimation</span></h3>                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="box-typ2">
                    <div class="icon-wrap">
                        <div class="c-table">
                            <div class="c-tcell">
                                <img src="{{ asset('/public/front/images/how-it-works4.jpg') }}" alt="coms" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                    <div class="desc-wrap">
                        <div class="number">4</div>
                        <h3 class="header-typ2">Book &<span> Relax</span></h3>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fifth section -->
<section class="home-section testimonials" style="background-image:url({{ asset('/public/front/images/testimonialbg.jpg') }}); ">
    <div class="container">
        <h2 class="header-typ1">testim<span>onials</span></h2>
        <div class="testimon-slider">       
            <div class="testimonials-wrapp">
                <div class="data">
                    Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                </div>
                <div class="user">lorem ut libero</div>
            </div>
            <div class="testimonials-wrapp">
                <div class="data">
                    Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                </div>
                <div class="user">lorem ut libero</div>
            </div>
            <div class="testimonials-wrapp">
                <div class="data">
                    Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                </div>
                <div class="user">lorem ut libero</div>
            </div>
        </div>
    </div>
</section>
<!-- sixth section -->
<section class="home-section logos">
    <div class="container">
        <div class="brandlogos">
            <div class="box-typ3">
                <div class="icon-wrap">
                    <div class="c-table">
                        <div class="c-tcell">
                            <img src="{{ asset('/public/front/images/car_brands_logos1.png') }}" alt="logo1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-typ3">
                <div class="icon-wrap">
                    <div class="c-table">
                        <div class="c-tcell">
                            <img src="{{ asset('/public/front/images/car_brands_logos2.png') }}" alt="logo1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-typ3">
                <div class="icon-wrap">
                    <div class="c-table">
                        <div class="c-tcell">
                            <img src="{{ asset('/public/front/images/car_brands_logos3.png') }}" alt="logo1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-typ3">
                <div class="icon-wrap">
                    <div class="c-table">
                        <div class="c-tcell">
                            <img src="{{ asset('/public/front/images/car_brands_logos4.png') }}" alt="logo1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-typ3">
                <div class="icon-wrap">
                    <div class="c-table">
                        <div class="c-tcell">
                            <img src="{{ asset('/public/front/images/car_brands_logos5.png') }}" alt="logo1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-typ3">
                <div class="icon-wrap">
                    <div class="c-table">
                        <div class="c-tcell">
                            <img src="{{ asset('/public/front/images/car_brands_logos6.png') }}" alt="logo1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-typ3">
                <div class="icon-wrap">
                    <div class="c-table">
                        <div class="c-tcell">
                            <img src="{{ asset('/public/front/images/car_brands_logos7.png') }}" alt="logo1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- seventh section -->
<section class="home-section contact-faq">
    <div class="container">
        <h2 class="header-typ1">Have A <span>Question?</span></h2>
        <div class="section-small-desc">
            Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </div>
        <div class="row">
            <div class="col-sm-6 contact">
                <div class="contact-inner">
                    <h3 class="header-typ2">Contact Us</h3>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                                </div>                          
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                </div>
                            </div>                  
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="pnum">Contact Number</label>
                                    <input type="text" class="form-control" id="pnum" placeholder="Contact Number">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Email">Email address</label>
                                    <input type="email" class="form-control" id="Email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message"></textarea>
                                </div>                
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="faqs">
                    <h3 class="header-typ2"><span>FAQS</span></h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Should I consider using synthetic motor oil?
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              What parts should be replaced at what intervals?
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              How do I keep track of routine maintenance?
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <!-- $("input[name='vehicle_type']").each(function(){ 
        alert("call");
    }); -->
    alert("call");
@endpush