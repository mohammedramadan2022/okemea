@extends('layouts.simple.master')
@section('title', 'devices Forms')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Devices</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Edit</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Device</h5>
                    </div>
                    <div class="card-body">

                           @include('Admin::devices.form')
                    </div>
                </div>
                <
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
@endsection
