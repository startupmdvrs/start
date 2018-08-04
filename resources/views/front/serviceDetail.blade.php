@extends('layouts.app')

@section('content')

<section class="main-banner inner-page-slider"> 
    <div class="banner-outer">
           <img src="{{ asset('/public/front/images/inner-banner.jpg') }}" alt="banner" class="img-responsive"/>
           <div class="brand-detail-outer">
            <div class="container">
                <div class="media">
                    <div class="media-left media-middle">
                        <div class="brand-logo"><img src="{{ asset('/public/front/images/car_brands_logos2.png') }}"></div>
                    </div>
                    <div class="media-body media-middle">
                        <div class="header-typ1">volkswagen</div>
                        <div class="header-typ3">polo</div>
                    </div>
            </div>
        </div>
    </div>
</section>
<div class="list-tabs">
    <div class="container">
        <div class="tab-init">
            <div class="row serv-links">

                @foreach ($maintenance_types as $maintenance_type)
                    
                        @if ($loop->first)
                        <div class="col-xs-4">
                            <a href="javascript:;" title="" class="active">
                        @else
                        <div class="col-xs-2">
                            <a href="javascript:;" title="">
                        @endif

                            <i class="fa fa-cog"></i>
                            {{ $maintenance_type->name }}
                        </a>
                    </div>
                    <!-- <div class="col-xs-4">
                        <a href="javascript:;" title=""><i class="fa fa-wrench"></i>Repair Your Ride</a>
                    </div>
                    <div class="col-xs-4">
                        <a href="javascript:;" title=""><i class="fa fa-paint-brush"></i>Paint Your Ride</a>
                    </div> -->
                @endforeach
            </div> 
        </div>
    </div>
</div>
<div class="container">
    <div class="data-wrapper row">                                                
        <div class="col-sm-9">
            <div class="main-data-ajax">
                <div class="service-bx">
                    <div class="header-typ4">
                        <span>Standard Service</span>
                        <div class="actions">
                            <a href="javascript:;" class="btn btn-primary"> More Info</a>
                            <a href="javascript:;" class="btn btn-secondary"><input type="radio" name="service_type"> Add to Quote</a>
                        </div>
                    </div>
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat. Donec sollicitudin molestie malesuada.</p>
                        <ul>
                            <li>Nulla quis lorem ut libero malesuada feugiat.</li>
                            <li>Donec rutrum congue leo eget malesuada.</li>
                            <li>Quisque velit nisi, pretium ut lacinia in, elementum id enim.</li>
                            <li>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</li>
                        </ul>
                    </div>
                    <div class="timeprice">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="time">Time: 6H</div>
                            </div>
                            <div class="col-xs-6 text-right">
                                <div class="price">Price: Rs.3250</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-bx">
                    <div class="header-typ4">
                        <span>Standard Service</span>
                        <div class="actions">
                            <a href="javascript:;" class="btn btn-primary"> More Info</a>
                            <a href="javascript:;" class="btn btn-secondary"><input type="radio" name="service_type"> Add to Quote</a>
                        </div>
                    </div>
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat. Donec sollicitudin molestie malesuada.</p>
                        <ul>
                            <li>Nulla quis lorem ut libero malesuada feugiat.</li>
                            <li>Donec rutrum congue leo eget malesuada.</li>
                            <li>Quisque velit nisi, pretium ut lacinia in, elementum id enim.</li>
                            <li>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</li>
                        </ul>
                    </div>
                    <div class="timeprice">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="time">Time: 6H</div>
                            </div>
                            <div class="col-xs-6 text-right">
                                <div class="price">Price: Rs.3250</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-bx">
                    <div class="header-typ4">
                        <span>Standard Service</span>
                        <div class="actions">
                            <a href="javascript:;" class="btn btn-primary"> More Info</a>
                            <a href="javascript:;" class="btn btn-secondary"><input type="radio" name="service_type"> Add to Quote</a>
                        </div>
                    </div>
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat. Donec sollicitudin molestie malesuada.</p>
                        <ul>
                            <li>Nulla quis lorem ut libero malesuada feugiat.</li>
                            <li>Donec rutrum congue leo eget malesuada.</li>
                            <li>Quisque velit nisi, pretium ut lacinia in, elementum id enim.</li>
                            <li>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</li>
                        </ul>
                    </div>
                    <div class="timeprice">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="time">Time: 6H</div>
                            </div>
                            <div class="col-xs-6 text-right">
                                <div class="price">Price: Rs.3250</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="sticky checkout">
                <div class="header-typ5">Your Quote</div>
                <div class="vehicleandservice">
                    <div class="vehicle-detail">Volkswagen Polo</div>
                    <div class="mini-service-bx">
                        <div class="row">
                            <div class="col-xs-2"><a href="javascript:;"><i class="fa fa-times"></i></a></div>
                            <div class="col-xs-6"><div class="header-typ6">Standard Service</div></div>
                            <div class="col-xs-4 text-right"><div class="price">Rs.3250</div></div>
                        </div>
                    </div>
                    <div class="vehicle-detail">Hundai I10</div>
                    <div class="mini-service-bx">
                        <div class="row">
                            <div class="col-xs-2"><a href="javascript:;"><i class="fa fa-times"></i></a></div>
                            <div class="col-xs-6"><div class="header-typ6">Standard Service</div></div>
                            <div class="col-xs-4 text-right"><div class="price">Rs.3250</div></div>
                        </div>
                    </div>
                </div>
                <div class="grand-total">
                    <div class="row">
                        <div class="col-xs-7">Price:</div>
                        <div class="col-xs-5 text-right">Rs.6000</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7">Tax:</div>
                        <div class="col-xs-5 text-right">Rs.500</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7">Discount (Launch Offer):</div>
                        <div class="col-xs-5 text-right">Rs.1000</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7">Grand Total:</div>
                        <div class="col-xs-5 text-right"><strong>Rs.5500</strong></div>
                    </div>
                </div>
                <div class="row text-center">
                    <a href="javascript:;" class="link-typ1">Have a Coupon?</a>
                    <div><a href="javascript:;" class="btn btn-secondary chk-btn">checkout</a></div>
                </div>

            </div>
        </div>
     </div>    
</div>

@endsection

@push('scripts')
    <!-- $("input[name='vehicle_type']").each(function(){ 
        alert("call");
    }); -->
    alert("call");
@endpush