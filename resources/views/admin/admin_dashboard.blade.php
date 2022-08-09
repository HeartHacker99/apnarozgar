@extends('admin.layout')
@section('content')

<div class="container mx-auto">
    <h1 class="text-3xl text-center my-10">Dashboard</h1>
</div>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Buyer</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{route('sellers')}}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Sellers</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{route('buyers')}}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-area me-1"></i>
                Users Joined This Year
            </div>
            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-bar me-1"></i>
                Registeration per Month
            </div>
            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
</div>

<hr>

@livewireStyles
<div class="container mx-auto">
    <h1 class="text-3xl text-center my-10">Users</h1>
    <livewire:users-table></livewire:users-table>
</div>

@livewireScripts


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    var _ydata=JSON.parse('{!! json_encode($months) !!}');
    var _xdata=JSON.parse('{!! json_encode($monthCount) !!}');
</script>

<script src="{{asset('assets/charts/chart-area.js')}}"></script>
<script src="{{asset('assets/charts/chart-bar.js')}}"></script>
{{--
<script src="{{asset('assets/charts/chart-pie.js')}}"></script>
<script src="{{asset('assets/charts/chart-datatables.js')}}"></script>
--}}
@endsection
