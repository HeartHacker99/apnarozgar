@extends('layouts.base')

@section('content')
    <div class="d-flex py-3 bg-white shadow-sm border-bottom " style=" align-content: center; ">
        <h1>Send Requests</h1>

    </div>

    <div class="panel panel-default">
        <table class="table table-bordered table-striped">
            <thead class="bg-success">
            <tr>
                <th>Price ($)</th>
                <th>Days</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($send as $send)
                <tr>
                    <td>{{ $send->price }}</td>
                    <td>{{ $send->days }}</td>
                    <td>{{ $send->description }}</td>
                    <td>

                        <div class="d-flex">
                           {{-- <form method="post" action="{{url('/edit_bid')}}/{{$send->id}}">
                                @csrf
                                <input type="hidden" name="_method" value="put">
                                <button type="submit" class="btn btn-success" id="gig_space">Edit</button>
                            </form>--}}

                            <form method="post" action="{{url('/my_bids')}}/{{$send->id}}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
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
