@extends('admin.layout')
@section('content')

    @livewireStyles
    <div class="container mx-auto">
        <h1 class="text-3xl text-center my-10">Buyers</h1>
        <livewire:users-table></livewire:users-table>
    </div>

    @livewireScripts

@endsection
