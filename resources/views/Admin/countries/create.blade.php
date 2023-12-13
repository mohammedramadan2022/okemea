@extends('layouts.simple.master')
@section('title', 'Validation Forms')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Countries</h3>
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
                        <h5>Create Countrty</h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" method="post" action="{{route('countries.store')}}">
                            @csrf

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" id="validationCustom01" name="name" type="text" placeholder="Name" required="">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="valid-feedback">Looks good!</div>
                                </div>

                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
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
