@extends('layouts.app')x

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Service</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('services.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card-body">
    <form method="POST" action="{{ route('services.update', $services->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $services->name }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

            <div class="col-md-6">
                <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $services->type }}" required autocomplete="type" autofocus>

                @error('type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>

            <div class="col-md-6">
                <input id="amount" type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" min=0 step=0.01 value="{{ $services->amount }}" required autocomplete="amount" autofocus>

                @error('amount')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="booking_date" class="col-md-4 col-form-label text-md-right">{{ __('Date of Booking') }}</label>

            <div class="col-md-6">
                <input id="booking_date" type="date" class="form-control @error('booking_date') is-invalid @enderror" name="booking_date" value="{{ $services->booking_date }}" required autocomplete="booking_date">

                @error('booking_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Update Service') }}
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
