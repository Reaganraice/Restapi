@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center p-4 m-4">
        <!-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="container">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    You are Logged In
                </div>
            </div>
        </div> -->
      
        <div class="p-4 container"> 
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Device</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">SNR</th>
                    <th scope="col">Station</th>
                    <th scope="col">Data</th>
                    <th scope="col">AvgSnr</th>
                    <th scope="col">Lat</th>
                    <th scope="col">Lng</th>
                    <th scope="col">RSSI</th>
                    <th scope="col">SeqNumber</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($x as $prod)
                    <tr>
                    <th scope="row">{{$prod->id}}</th>
                    <td>{{$prod->device}}</td>
                    <td>{{$prod->Created_at}}</td>
                    <td>{{$prod->snr}}</td>
                    <td>{{$prod->station}}</td>
                    <td>{{$prod->data}}</td>
                    <td>{{$prod->lat}}</td>
                    <td>{{$prod->avgSnr}}</td>
                    <td>{{$prod->lat}}</td>
                    <td>{{$prod->lng}}</td>
                    <td>{{$prod->seqNumber}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>    
        </div>
    </div>
</div>
@endsection