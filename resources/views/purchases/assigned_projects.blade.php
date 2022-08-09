@extends('layouts.base')

@section('content')
    <h1 style="margin-bottom: 30px">Assigned Projects</h1>
    <div class="panel panel-success">
        <table class="table table-bordered table-striped">
            <thead class="bg-success">
            <tr>
                {{--<th>Seller Name</th>--}}
                <th>Gig Title</th>
                <th>Price (PKR)</th>
                <th>Time</th>
                <th>Order Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    @if($order->gig != '')
                        <td><a href="{{ url('my_orders')}}/{{$order->id}}/{{$order->user_id}}/{{$order->to_user_id}}">{{ $order->gig['title'] }}</a></td>
                        <td>{{ $order->price}}</td>
                        <td>
                            <div id="timer">
                                <div class="timer-style" id="days"></div>
                                <div class="timer-style" id="hours"></div>
                                <div class="timer-style" id="minutes"></div>
                                <div class="timer-style" id="seconds"></div>
                            </div>
                            <script>
                                $(document).ready(function () {
                                    function makeTimer() {
                                        var endTime = new Date("29 December 2021 9:56:00");
                                        endTime = (Date.parse(endTime) / 1000);

                                        var now = new Date();
                                        now = (Date.parse(now) / 1000);

                                        var timeLeft = endTime - now;

                                        var days = Math.floor(timeLeft / 86400);
                                        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
                                        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
                                        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

                                        if (hours < "10") { hours = "0" + hours; }
                                        if (minutes < "10") { minutes = "0" + minutes; }
                                        if (seconds < "10") { seconds = "0" + seconds; }

                                        $("#days").html(days + "<span>D</span>");
                                        $("#hours").html(hours + "<span>H</span>");
                                        $("#minutes").html(minutes + "<span>M</span>");
                                        $("#seconds").html(seconds + "<span>S</span>");

                                    }

                                    setInterval(function() { makeTimer(); }, 1000);
                                });
                            </script>
                        </td>
                        <td>
                            @if($order->orderstatus == 1)
                                <a href="{{url('/my_order/0')}}/{{$order->id}}" id="gig_space"  >  <button type="button" class="btn btn-primary">Completed</button>  </a>
                            @elseif($order->orderstatus == 0)
                                <a href="{{url('/my_order/1')}}/{{$order->id}}" id="gig_space">  <button type="button" class="btn btn-secondary">Pending</button>  </a>
                            @endif

                            @if($order->orderstatus == 1)
                                <a href="{{url('transection')}}" class="btn btn-success">Payment</a>
                            @endif

                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection
