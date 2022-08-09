@extends('layouts.base')

@section('content')



    <div class="row justify-content-center ">
        <div class="col-xl-5">
            <div class="card shadow-lg ">
                <div class="row justify-content-around">
                    <div class="card border-0">
                        <div class="card-header pb-0">
                            <h2 class="card-title space ">Transection</h2>
                            <p class="card-text text-muted mt-4 space">PAYMENT DETAILS</p>
                            <hr class="my-0">
                        </div>
                        <div class="card-body">

                            <!-- ----------------------------------------------------------------------------------------- -->
                            <!-- payment form -->
                            <!-- ----------------------------------------------------------------------------------------- -->
                            <form action="{{url('/checkout')}}" method="POST" id="myCCForm">

                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <input type="hidden" name="product_id" value="1">

                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="fullname" class="small text-muted mb-1">
                                                <i class="fa fa-user"></i> Full Name</label>
                                            <input type="text" name="fullname" id="fullname" value="Salar" class="form-control form-control-sm" >
                                        </div></div>

                                    <div class="col-sm-6"><div class="form-group">
                                            <label for="email" class="small text-muted mb-1">
                                                <i class="fa fa-envelope"></i> Email</label>
                                            <input type="text" name="email" id="email" value="abc@gmail.com" class="form-control form-control-sm" >
                                        </div></div>

                                </div>

                                <div class="row">

                                    <div class="col-sm-6"><div class="form-group">
                                            <label for="address" class="small text-muted mb-1">
                                                <i class="fa fa-address-card-o"></i> Address</label>
                                            <input type="text" name="address" id="address" value="house no 245 street no 8 Lahore" class="form-control form-control-sm" >
                                        </div></div>

                                    <div class="col-sm-6"><div class="form-group">
                                            <label for="country" class="small text-muted mb-1">
                                                <i class="fa fa-address-card-o"></i> Country</label>
                                            <input type="text" name="country" id="country" value="Pakistan" class="form-control form-control-sm" >
                                        </div></div>

                                </div>

                                <div class="row">

                                    <div class="col-sm-4"><div class="form-group">
                                            <label for="city" class="small text-muted mb-1">
                                                <i class="fa fa-institution"></i> City</label>
                                            <input type="text" name="city" id="city" value="Islamabad" class="form-control form-control-sm" >
                                        </div></div>

                                    <div class="col-sm-4"><div class="form-group">
                                            <label for="state" class="small text-muted mb-1">State</label>
                                            <input type="text" name="state" id="state" value="punjab" class="form-control form-control-sm" >
                                        </div></div>

                                    <div class="col-sm-4"><div class="form-group">
                                            <label for="state" class="small text-muted mb-1">Price</label>
                                            <input type="text" name="price" id="price" value="500" class="form-control form-control-sm" >
                                        </div></div>

                                </div>

                                <div class="row mb-md-5">
                                    <div class="col">
                                        <button type="submit" name="" id="" class="btn btn-lg btn-block btn-primary">Proceed</button></div>
                                </div>
                            </form>
                            <!-- ----------------------------------------------------------------------------------------- -->
                            <!-- ./payment form -->
                            <!-- ----------------------------------------------------------------------------------------- -->

                        </div>
                    </div>
                </div>


                <!-- Cart -->

            </div>
        </div>
    </div>
</div>


@endsection
