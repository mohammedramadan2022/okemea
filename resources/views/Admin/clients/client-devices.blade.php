@extends('layouts.simple.master')
@section('title', 'Client Devices')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rating.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Client Devices</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Clients :: {{$client->name}}</li>
    <li class="breadcrumb-item">Client Devices</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">


                        <div class="card">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr class="double">
                                        <th>#</th>
                                        <th>client name</th>
                                        <th> mobile</th>
                                        <th>device name</th>
                                        <th>invoice image</th>
                                        <th>carton image</th>
                                        <th>device image</th>
                                        <th>purchase dat</th>
                                        <th>notes</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($devices as $device)

                                        <tr>
                                            <td>{{(($devices->currentpage() - 1) * $devices->perpage()) + $loop->iteration}}</td>
                                            <td>{{$device->user->name}}</td>
                                            <td>{{$device->user->mobile}}</td>
                                            <td>{{$device->device->name}}</td>
                                            <td class="py-3 bordered"><img  src="{{url($device->file_path.'/'.$device->image)}}" height="70px" class="of-contain" alt="" loading="lazy"></td>
                                            <td class="py-3 bordered"><img  src="{{url($device->file_path.'/'.$device->invoice_image)}}" height="70px" class="of-contain" alt="" loading="lazy"></td>
                                            <td class="py-3 bordered"><img src="{{url($device->file_path.'/'.$device->carton_image)}}" height="70px" class="of-contain" alt="" loading="lazy"></td>
                                            <td>{{$device->purchase_date}}</td>
                                            <td>{{$device->notes}}</td>
                                            <td style="display: inline-flex">
                                              @if($device->status ==1)
                                                  Active
                                                @else



                                                    <form action="{{route('devices.device-accept' , $device->id)}}"
                                                          method="post" class="m-1">
                                                        @csrf
                                                        <button
                                                            class="btn btn-info btn-xs"
                                                            type="submit"
                                                            data-original-title="btn btn-info btn-xs"
                                                            title="">Accept
                                                        </button>
                                                    </form>




                                                @endif




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
