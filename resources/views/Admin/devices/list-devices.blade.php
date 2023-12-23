@extends('layouts.simple.master')
@section('title', 'Devices list')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rating.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Devices list</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Devices</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">


                        <div class="card">
                            <div class="card-header">
                                <a href="{{route('devices.create')}}" class="btn btn-success btn-xs" type="button"
                                   data-original-title="btn btn-info btn-xs" title="">Add
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr class="double">
                                        <th>#</th>
                                        <th>name</th>
                                        <th>status</th>
                                        <th>warranty</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($devices as $device)

                                        <tr>
                                            <td>{{(($devices->currentpage() - 1) * $devices->perpage()) + $loop->iteration}}</td>
                                            <td>{{$device->name}}</td>
                                            <td>{{$device->status}}</td>
                                            <td>{{$device->warranty}} month</td>

                                            <td style="display: inline-flex">
                                                <form action="{{route('devices.device-active-toggle' , $device->id)}}" method="post" class="m-1">
                                                    @csrf
                                                    <button class="btn {{$device->status == 'active' ? 'btn-danger' : 'btn-info' }} btn-xs" type="submit"
                                                            data-original-title="btn {{$device->status == 'active' ? 'btn-danger' : 'btn-info' }} btn-xs" title="">{{$device->status == 'active' ? 'Deactivate' : 'Activate' }}
                                                    </button>
                                                </form>


                                                <a class="btn btn-success btn-xs m-1"
                                                   href="{{route('devices.edit' , $device->id)}}" type="button"
                                                   data-original-title="btn btn-danger btn-xs" title="">Edit
                                                </a>
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            
                                                    {!! $devices->appends(['sort' => 'id'])->onEachSide(5)->links() !!}

                        </div>
                    </div>
                </div>
                <!-- Individual column searching (text inputs) Ends-->
            </div>
        </div>
        @endsection

        @section('script')
            <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('assets/js/rating/jquery.barrating.js')}}"></script>
            <script src="{{asset('assets/js/rating/rating-script.js')}}"></script>
            <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
            <script src="{{asset('assets/js/ecommerce.js')}}"></script>
            <script src="{{asset('assets/js/product-list-custom.js')}}"></script>
@endsection
