@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
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
    <form method="POST" action="{{ route('products.update', $products->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $products->name }}" required autocomplete="name" autofocus>

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
                <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $products->type }}" required autocomplete="type" autofocus>

                @error('type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="quality" class="col-md-4 col-form-label text-md-right">{{ __('Quality') }}</label>

            <div class="col-md-6">
                <input id="quality" type="text" class="form-control @error('quality') is-invalid @enderror" name="quality" value="{{ $products->quality }}" required autocomplete="name" autofocus>

                @error('quality')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="cost" class="col-md-4 col-form-label text-md-right">{{ __('Cost') }}</label>

            <div class="col-md-6">
                <input id="cost" type="number" class="form-control @error('cost') is-invalid @enderror" name="cost" min=0 step=0.01 value="{{ $products->cost }}" required autocomplete="cost" autofocus>

                @error('cost')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Update Product') }}
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
