@extends('layouts.simple.master')
@section('title', 'Clients')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rating.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Clients</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Clients</li>
    <li class="breadcrumb-item"></li>
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
                                        <th>email</th>
                                        <th>country</th>
                                        <th>city</th>
                                        <th>devices</th>
                                        <th>delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($clients as $client)

                                        <tr>
                                            <td>{{(($clients->currentpage() - 1) * $clients->perpage()) + $loop->iteration}}</td>
                                            <td>{{$client->name}}</td>
                                            <td>{{$client->mobile}}</td>
                                            <td>{{$client->email}}</td>


                                            <td>{{$client->city->country->name_ar ?? ''}}</td>
                                            <td>{{$client->city->name_ar ?? ''}}</td>
                                            <td><a class="btn btn-info"
                                                   href="{{route('client-devices' , $client->id)}}"> Devices</a></td>
                                            <td>
                                                <form action="{{route('client-delete' , $client->id)}}"
                                                      method="post" class="m-1">
                                                    @csrf
                                                    <button
                                                        class="btn btn-danger btn-xs"
                                                        type="submit"
                                                        data-original-title="btn btn-danger btn-xs"
                                                        title="">Delete
                                                    </button>
                                                </form>
                                            </td>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                            {!! $clients->appends(['sort' => 'id'])->onEachSide(5)->links() !!}

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
