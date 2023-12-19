@extends('layouts.simple.master')
@section('title', 'Countries list')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rating.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Country list</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Countries</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">


                        <div class="card">
                            <div class="card-header">
                                <a href="{{route('countries.create')}}" class="btn btn-success btn-xs" type="button"
                                   data-original-title="btn btn-info btn-xs" title="">Add
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr class="double">
                                        <th>#</th>
                                        <th>name</th>
                                        <th>Country Code</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($countries as $country)

                                        <tr>
                                            <td>{{(($countries->currentpage() - 1) * $countries->perpage()) + $loop->iteration}}</td>
                                            <td>{{$country->name}}</td>
                                            <td>{{$country->country_code}}</td>

                                            <td style="display: inline-flex">
                                                <form action="{{route('countries.destroy' , $country->id)}}" method="post" class="m-1">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-xs" type="submit"
                                                            data-original-title="btn btn-danger btn-xs" title="">Delete
                                                    </button>
                                                </form>


                                                <a class="btn btn-success btn-xs m-1"
                                                   href="{{route('countries.edit' , $country->id)}}" type="button"
                                                   data-original-title="btn btn-danger btn-xs" title="">Edit
                                                </a>
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
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
