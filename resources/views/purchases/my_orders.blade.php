@extends('layouts.base')

@section('content')
    <h1 style="margin-bottom: 30px">My Orders</h1>
    <div class="panel panel-success">
        <table class="table table-bordered table-striped">
            <thead class="bg-success">
            <tr>
                <th>Gig Title</th>
                <th>Price (PKR)</th>
                <th>Date</th>
                <th>Order Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    @if($order->gig != '')
                        <td><a href="{{ url('my_orders')}}/{{$order->id}}/{{$order->user_id}}/{{$order->to_user_id}}">{{ $order->gig['title'] }}</a></td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->gig['created_at'] }}</td>
                        <td>

                        @if($order->orderstatus == 1)
                                <a id="gig_space" >  <button type="button" class="btn btn-primary">Completed</button>  </a>
                            @elseif($order->orderstatus == 0)
                                <a  id="gig_space">  <button type="button" class="btn btn-secondary">Pending</button>  </a>
                            @endif
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
