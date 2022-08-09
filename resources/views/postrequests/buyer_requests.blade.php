@extends('layouts.base')

@section('content')
    <body>
    <div class="card">
        <div class="card-body">
            <h1>Buyer Requests</h1>

            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #1b6d85; color: white">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Order</h4>
                        </div>
                        <div class="modal-body">
                            @foreach($submitRequest as $submitRequesttt)
                            <form method="POST" action="{{url('create_bid/')}}/{{$submitRequesttt->id}}">
                                @endforeach
                                {{csrf_field()}}
                                <input name="user_id" value="{{ Auth::user()->id }}" hidden>
                                <div class="form-group">
                                    <label for="number">Price:</label>
                                    <input type="number" required name="price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="number">Total days:</label>
                                    <input type="number" required name="days" min="1" max="30" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea rows="5" class="form-control" name="description" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">
                                    Order Now
                                </button>
                            </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                        </button>
                        </div>
                    </div>
                </div>
            </div>
            <table id="keywords" cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <th><span>Time</span></th>
                    <th><span>REQUESTS</span></th>
                    <th><span>DURARION</span></th>
                    <th><span>BUDJET</span></th>
                    <th><span>Bids</span></th>
                </tr>
                </thead>
                <tbody>

                @foreach ($submitRequest as $submitRequest)
                    <tr>
                        <td class="lalign"> {{$submitRequest->created_at->diffForHumans()}} </td>
                        <td>{{$submitRequest->description}}</td>
                        <td>{{$submitRequest->duration}}</td>
                        <td>{{$submitRequest->price}}</td>
                        <td>
                            <a href="{{url('/create_bid')}}/{{$submitRequest->id}}" type="submit" data-toggle="modal" data-target="#myModal" class="btn btn-success">Send Bid</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
    </body>

@endsection
