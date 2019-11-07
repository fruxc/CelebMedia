@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Services</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('services.index') }}"> View </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Products</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> View </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
