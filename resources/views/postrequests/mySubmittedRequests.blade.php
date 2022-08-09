@extends('layouts.base')

@section('content')
    <div class="d-flex py-3 bg-white shadow-sm border-bottom " style=" align-content: center; ">
        <h1>My Requests</h1>

    </div>

    <div class="panel panel-default">
        <table class="table table-bordered table-striped">
            <thead class="bg-success">
            <tr>
                <th>Request Title</th>
                <th>Price ($)</th>
                <th>Files</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($submitRequest as $submitRequest)
                <tr>
                    <td><a href="{{ url('my_requests')}}/{{$submitRequest->id}}">{{ $submitRequest->title }}</a></td>
                    <td>{{ $submitRequest->price }}</td>

                    <td>
                        @if($submitRequest->image != '')

                            <a href="{{asset('SubmitRequestFiles/'.$submitRequest->image)}}" data-lightbox="mygallery">
                                {{$submitRequest->image}}
                                <img src="{{asset('SubmitRequestFiles/'.$submitRequest->image)}}" alt="" width="100px"  id="gig_image">
                            </a>
                        @endif
                    </td>
                    <td>

                        <div class="d-flex">
                            <form method="post" action="{{url('/my_requests')}}/{{$submitRequest->id}}">
                                @csrf
                                <input type="hidden" name="_method" value="put">
                                <button type="submit" class="btn btn-success" id="gig_space">Edit</button>
                            </form>
                            @if($submitRequest->status == 1)
                                <a href="{{url('/my_requests/0')}}/{{$submitRequest->id}}" id="gig_space" >  <button type="button" class="btn btn-primary">Active</button>  </a>
                            @elseif($submitRequest->status == 0)
                                <a href="{{url('/my_requests/1')}}/{{$submitRequest->id}}" id="gig_space">  <button type="button" class="btn btn-secondary">Deactive</button>  </a>
                            @endif


                            <form method="post" action="{{url('/my_requests')}}/{{$submitRequest->id}}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">delete</button>
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
