@extends('Customer.customerLayout2')
@section('content')
<div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
       <ul class="short_ls">
          <li>
             <a href="index.html">Home</a>
             <span>/ /</span>
          </li>
          <li>Checkout</li>
       </ul>
    </div>
 </div>

 <section>
	 <!-- MultiStep Form -->
<div class="container-fluid" >
    <div class="row justify-content-center mt-0">
        <div class="col-12 text-center ">
            <div class="card ">
                <h2><strong>Đăng ký</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" action="{{route('customer.register')}}" method="POST" enctype="multipart/form-data">
							@csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Account</strong></li>
                                <li id="personal"><strong>Personal</strong></li>
                                <li id="payment"><strong>Payment</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Account Information</h2> 
									<input type="text" name="customer_name" placeholder="Name" /> 
									<input type="email" name="customer_email" placeholder="Email " /> 
									
									<input type="password" name="customer_password" placeholder="Password" /> 
									<input type="password" name="customer_password_confirm" placeholder="Confirm Password" />
                                </div> 
								<input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Personal Information</h2> 
									<input type="text" name="customer_phone" placeholder="Phone" /> 
									<div class="form-check">
										<input class="form-check-input" type="radio" name="customer_gender" id="exampleRadios1" value="0" checked>
										<label class="form-check-label" for="exampleRadios1">
										  	Nữ
										</label>
									  </div>
									  <div class="form-check">
										<input class="form-check-input" type="radio" name="customer_gender" id="exampleRadios2" value="1">
										<label class="form-check-label" for="exampleRadios2">
										  	Nam
										</label>
									  </div>
									<input type="date" name="customer_birthday" placeholder="Birth" /> 
									
                                </div> 
								<input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
								<input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Payment Information</h2>
                                    <input type="text" name="customer_address" placeholder="Address" /> 
                                    
                                </div> 
								<input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
								<input type="submit" name="make_payment" class="next action-button" value="Confirm" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div> 
										
                                    </div>
									<hr>
									<div class="row justify-content-center">
										<button class="btn btn-success float-right md-6">Login</button>
                                    </div>
									
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 </section>

@endsection