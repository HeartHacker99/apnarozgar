@extends('layouts.base')

@section('content')
    <h1 style="margin-bottom: 30px; ">My Selling</h1>
    <div class="panel panel-success">
        <table class="table table-bordered table-striped">
            <thead class="bg-success">
            <tr>
                <th>Name</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sellings as $sell)
                <tr>

                        <td><a href="#">{{ $sell->name }}</a></td>
                        <td>{{ $sell->amount }}</td>
                        <td>{{ $sell->status }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
