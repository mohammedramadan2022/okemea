@extends('layouts.simple.master')
@section('title', 'Validation Forms')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Admins</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">create</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Create Admin</h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" method="post" action="{{route('admins.store')}}">
                            @csrf

                           @include('Admin::admins.form')
                        </form>
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
