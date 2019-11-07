@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Showing Service</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('services.index') }}"> Back </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Name:</strong>
          {{ $services->name }}
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Type:</strong>
          {{ $services->type }}
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Amount:</strong>
          {{ $services->amount }}
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Booking Date:</strong>
          {{ $services->booking_date }}
        </div>
      </div>

    </div>


@endsection
