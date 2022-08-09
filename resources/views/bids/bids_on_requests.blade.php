@extends('layouts.base')

@section('content')
    <div class="d-flex py-3 bg-white shadow-sm border-bottom " style=" align-content: center; ">
        <h1>Bids</h1>
    </div>
    @if(Auth::check())
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #1b6d85; color: white">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Order</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('purchases.store')}}">
                            {{csrf_field()}}

                            <input name="gig_id" value="{{ $gig->id }}" hidden>
                            <input name="to_user_id" value="{{ $gig->user->id }}" hidden>
                            <div class="form-group">
                                <label for="email">Price:</label>
                                <input type="number" required name="price"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Total days:</label>
                                <input type="number" required name="days" min="1" max="30" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success btn-block">
                                Order Now
                            </button>
                        </form>
                    </div>
                    {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close--}}
                    {{--</button>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>

    @else
        You need to login to order this gig!
    @endif

    <div class="panel panel-default">
        <table class="table table-bordered table-striped">
            <thead class="bg-success">
            <tr>
                <th>Gig Title</th>
                <th>Request Description</th>
                <th>Price (Pkr)</th>
                <th>Days</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($bids as $bids)
                <tr>
                    <td><a href="#">{{$gig->title}}</a></td>
                    <td>{{$bids->description}}</td>
                    <td>{{ $bids->price }}</td>
                    <td>{{ $bids->days }}</td>

                    <td>

                        <div class="d-flex">
                            <form method="post"  id="gig_space" action="{{url('/my_bids')}}/{{$bids->id}}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>

                            <a href="{{url('chatify')}}/{{$bids->user_id}}" class="btn btn-success" id="gig_space" >
                                Contact Seller <i class="fas fa-comments"></i>
                            </a>


                            <button type="submit" data-toggle="modal" data-target="#myModal" class="btn btn-info">Order Now</button>


                        </div>
                        {{--/gig/status/{status}/{id}--}}

                        {{--{{url('admin/brand/delete/')}}/{{$list->id}}--}}

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
