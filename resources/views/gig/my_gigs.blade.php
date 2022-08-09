@extends('layouts.base')

@section('content')
    <div class="d-flex py-3 bg-white shadow-sm border-bottom " style=" align-content: center; ">
        <h1>My Gigs</h1>

    </div>

    <div class="panel panel-default">
        <table class="table table-bordered table-striped">
            <thead class="bg-success">
            <tr>
                <th>Gig Title</th>
                <th>Price ($)</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($gigs as $gig)
                <tr>
                    <td><a href="{{ url('gigs')}}/{{$gig->id}}">{{ $gig->title }}</a></td>
                    <td>{{ $gig->price }}</td>

                    <td>
                        @if($gig->image != '')
                            <a href="{{asset('/img/gigs/'.$gig->image)}}" data-lightbox="mygallery"><img src="{{asset('/img/gigs/'.$gig->image)}}" alt="" width="100px"  id="gig_image"></a>
                        @endif
                    </td>
                    <td>

                <div class="d-flex">
                    <form method="post" action="{{url('/gigs')}}/{{$gig->id}}">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <button type="submit" class="btn btn-success" id="gig_space">Edit</button>
                    </form>
                        @if($gig->status == 1)
                            <a href="{{url('/my_gigs/0')}}/{{$gig->id}}" id="gig_space" >  <button type="button" class="btn btn-primary">Active</button>  </a>
                        @elseif($gig->status == 0)
                            <a href="{{url('/my_gigs/1')}}/{{$gig->id}}" id="gig_space">  <button type="button" class="btn btn-secondary">Deactive</button>  </a>
                        @endif


                        <form method="post" action="{{url('/gigs')}}/{{$gig->id}}">
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
