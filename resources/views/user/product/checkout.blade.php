@extends('user.layouts.main')
@section('usercontent')

    <!-- Cart view section -->
    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="checkout-area">
                        <form action="{{route('placeorder')}}" method='POST'>
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="checkout-left">
                                        <div class="panel-group" id="accordion">
                                            <!-- Coupon section -->
                                            <div class="panel panel-default aa-checkout-coupon">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        Have a Coupon?
                                                    </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                    <input type="text" placeholder="Coupon Code" class="aa-coupon-code">
                                                    <input type="submit" value="Apply Coupon" class="aa-browse-btn">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Login section -->
                                            {{-- <div class="panel panel-default aa-checkout-login">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        Client Login
                                                    </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat voluptatibus modi pariatur qui reprehenderit asperiores fugiat deleniti praesentium enim incidunt.</p>
                                                    <input type="text" placeholder="Username or email">
                                                    <input type="password" placeholder="Password">
                                                    <button type="submit" class="aa-browse-btn">Login</button>
                                                    <label for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                                                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <!-- Billing Details -->
                                            {{-- <div class="panel panel-default aa-checkout-billaddress">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                        Billing Details
                                                    </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                        <div class="aa-checkout-single-bill">
                                                            <input type="text" placeholder="First Name*">
                                                        </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="aa-checkout-single-bill">
                                                            <input type="text" placeholder="Last Name*">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                        <div class="aa-checkout-single-bill">
                                                            <input type="text" placeholder="Company name">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                        <div class="aa-checkout-single-bill">
                                                            <input type="email" placeholder="Email Address*">
                                                        </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="aa-checkout-single-bill">
                                                            <input type="tel" placeholder="Phone*">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                        <div class="aa-checkout-single-bill">
                                                            <textarea cols="8" rows="3">Address*</textarea>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                        <div class="aa-checkout-single-bill">
                                                            <select>
                                                            <option value="0">Select Your Country</option>
                                                            <option value="1">Australia</option>
                                                            <option value="2">Afganistan</option>
                                                            <option value="3">Bangladesh</option>
                                                            <option value="4">Belgium</option>
                                                            <option value="5">Brazil</option>
                                                            <option value="6">Canada</option>
                                                            <option value="7">China</option>
                                                            <option value="8">Denmark</option>
                                                            <option value="9">Egypt</option>
                                                            <option value="10">India</option>
                                                            <option value="11">Iran</option>
                                                            <option value="12">Israel</option>
                                                            <option value="13">Mexico</option>
                                                            <option value="14">UAE</option>
                                                            <option value="15">UK</option>
                                                            <option value="16">USA</option>
                                                            </select>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                        <div class="aa-checkout-single-bill">
                                                            <input type="text" placeholder="Appartment, Suite etc.">
                                                        </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="aa-checkout-single-bill">
                                                            <input type="text" placeholder="City / Town*">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                        <div class="aa-checkout-single-bill">
                                                            <input type="text" placeholder="District*">
                                                        </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="aa-checkout-single-bill">
                                                            <input type="text" placeholder="Postcode / ZIP*">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <!-- Shipping Address -->
                                            <div class="panel panel-default aa-checkout-billaddress">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                        Shippping Address
                                                    </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFour" class="panel-@if($errors->any())show show @else collapse collapse @endif">
                                                    <div class="panel-body">
                                                        {{-- <code class="text-danger">@if($errors->any()) {{$errors}} @endif</code> --}}
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" name="address[name]" value="{{old('address.name')}}" placeholder="Customer Name">
                                                                </div>
                                                                @error('address.name')<code class="text-danger"> {{$message}}</code>@enderror
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="email" value="{{Auth::user()->email}}" disabled placeholder="Email Address*">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="number" name="address[contact]" value="{{old('address.contact')}}" placeholder="Phone*">
                                                                </div>
                                                                @error('address.contact')<code class="text-danger"> {{$message}}</code>@enderror
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <textarea cols="8" rows="3" placeholder="Address*" name="address[address_line_1]">{{old('address.address_line_1')}}</textarea>
                                                                </div>
                                                                @error('address.address_line_1')<code class="text-danger"> {{$message}}</code>@enderror
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" name="address[landmark]" placeholder="Landmark">
                                                                </div>
                                                                @error('address.landmark')<code class="text-danger"> {{$message}}</code>@enderror
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <select name="state">
                                                                    <option value="">Select Your State</option>
                                                                    <option selected value="West Bengal">West Bengal</option>
                                                                    </select>
                                                                </div>
                                                                @error('state')<code class="text-danger"> {{$message}}</code>@enderror
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <select name="district">
                                                                        <option value="">Select Your District</option>
                                                                        <option  value="Alipurduar">Alipurduar</option>
                                                                        <option  value="Bankura">Bankura</option>
                                                                        <option  value="Birbhum">Birbhum</option>
                                                                        <option  value="Cooch Behar">Cooch Behar</option>
                                                                        <option  value="Dakshin Dinajpur (South Dinajpur)">Dakshin Dinajpur (South Dinajpur)</option>
                                                                        <option  value="Darjeeling">Darjeeling</option>
                                                                        <option  value="Hooghly">Hooghly</option>
                                                                        <option  value="Howrah">Howrah</option>
                                                                        <option  value="Jalpaiguri">Jalpaiguri</option>
                                                                        <option  value="Jhargram">Jhargram</option>
                                                                        <option  value="Kalimpong">Kalimpong</option>
                                                                        <option  value="Kolkata">Kolkata</option>
                                                                        <option  value="Malda">Malda</option>
                                                                        <option  value="Murshidabad">Murshidabad</option>
                                                                        <option  value="Nadia">Nadia</option>
                                                                        <option  value="North 24 Parganas">North 24 Parganas</option>
                                                                        <option  value="Paschim Medinipur (West Medinipur)">Paschim Medinipur (West Medinipur)</option>
                                                                        <option  value="Paschim (West) Burdwan (Bardhaman)">Paschim (West) Burdwan (Bardhaman)</option>
                                                                        <option  value="Purba Burdwan (Bardhaman)">Purba Burdwan (Bardhaman)</option>
                                                                        <option  value="Purba Medinipur (East Medinipur)">Purba Medinipur (East Medinipur)</option>
                                                                        <option  value="Purulia">Purulia</option>
                                                                        <option  value="South 24 Parganas">South 24 Parganas</option>
                                                                        <option  value="Uttar Dinajpur (North Dinajpur)">Uttar Dinajpur (North Dinajpur)</option>
                                                                    </select>
                                                                </div>
                                                                @error('district')<code class="text-danger"> {{$message}}</code>@enderror
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="number" name="pincode" value="{{old('pincode')}}" placeholder="Postcode / ZIP*">
                                                                </div>
                                                                @error('pincode')<code class="text-danger"> {{$message}}</code>@enderror
                                                            </div>
                                                        </div>

                                                        {{-- <div class="row">
                                                            <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <textarea cols="8" rows="3">Special Notes</textarea>
                                                            </div>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="checkout-right">
                                        <h4>Order Summary</h4>
                                        <div class="aa-order-summary-area">
                                            <table class="table table-responsive" id="ordersummary">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($carts as $cart)
                                                    <tr>
                                                        <input type="hidden" value={{$cart->id}} name="cart[]">
                                                        <td class="text-capitalize">{{$cart->products->product_name}}<strong> x  {{$cart->attribute['quantity']}}</strong></td>
                                                        <td class="price">₹ {{$cart->products->product_price*$cart->attribute['quantity']}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                    <th>Subtotal</th>
                                                    <td class="subtotal"></td>
                                                    </tr>
                                                    <tr>
                                                    <th>Tax</th>
                                                    <td class="tax">0</td>
                                                    </tr>
                                                    <tr>
                                                    <th>Total</th>
                                                    <td class="total"></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <h4>Payment Method</h4>
                                        <div class="aa-payment-method">
                                            <label for="cashdelivery"><input type="radio" id="cashdelivery" checked name="payment_method" value="COD"> Cash on Delivery </label>
                                            @error('payment_method')<code class="text-danger"> {{$message}}</code>@enderror
                                            {{-- <label for="paypal"><input type="radio" id="paypal" name="optionsRadios" checked> Via Paypal </label>
                                            <img style="margin-top: 0px" src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark"> --}}
                                            @if (!empty($carts))
                                                <input type="submit" value="Place Order" class="aa-browse-btn">
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
