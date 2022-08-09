@extends('layouts.base')

@section('content')
 <div class="container">
    <div class="status">
	<?php $post_data = Session::get('post_data');?>

        @if($response['pp_ResponseCode'] == '000')
		<!-- --------------------------------------------------------------------------- -->
		<!-- Payment successful -->
            <h1 class="success">Your Payment has been Successful</h1>
            <h4>Payment Information</h4>
        {{dd($response['pp_Amount'])}}
            <p><b>Reference Number:</b> {{ $response['pp_RetreivalReferenceNo'] }}</p>
            <p><b>Transaction ID:</b> {{ $response['pp_TxnRefNo'] }}</p>
            <p><b>Paid Amount:</b> {{ $response['pp_Amount'] / 100 }}</p>
            <p><b>Payment Status:</b> Success</p>
		<!-- --------------------------------------------------------------------------- -->


		<!-- --------------------------------------------------------------------------- -->
        <!-- Payment not successful -->
		@elseif($response['pp_ResponseCode'] == '124')
            <h1 class="error">Your Payment has been on Waiting satate</h1>
			<p><b>Message: </b>{{ $response['pp_ResponseMessage'] }}</p>
			<p><b>Voucher Number: </b>{{ $response['pp_RetreivalReferenceNo'] }}</p>
		<!-- --------------------------------------------------------------------------- -->


		<!-- --------------------------------------------------------------------------- -->
        <!-- Payment not successful -->
        @elseif($response['pp_ResponseCode'] == '199')
            {{--<h1 class="error">Jazzcash Account </h1>
            <p><b>Message: </b>{{ $response['pp_ResponseMessage'] }}</p>
            <p><b>Voucher Number: </b>{{ $response['pp_RetreivalReferenceNo'] }}</p>
            <p><b>Responce Code: </b>{{ $response['pp_ResponseCode'] }}</p>
            <p><b>Account Type: </b>{{ $response['pp_TxnType'] }}</p>--}}
            <h1 class="error">Your Payment has been on Waiting satate</h1>
                <h4>Payment Information</h4>
                <p><b>Reference Number:</b> {{ $response['pp_RetreivalReferenceNo'] }}</p>
                <p><b>Transaction ID:</b> {{ $response['pp_TxnRefNo'] }}</p>
                <p><b>Paid Amount:</b> {{ $response['pp_Amount'] / 100 }}</p>
                <p><b>Payment Status:</b> Pending</p>
            <p><b>Voucher Number: </b>{{ $response['pp_RetreivalReferenceNo'] }}</p>

            @else
            <h1 class="error">Your Payment has Failed</h1>
			<p><b>Message: </b>{{ $response['pp_ResponseMessage'] }}</p>
        @endif
		<!-- --------------------------------------------------------------------------- -->


    </div>
</div>

@endsection
