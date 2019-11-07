@extends('layouts.app')

@section('content')
<div class="card-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Showing Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Quality</th>
            <th>Cost</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $val)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $val->name }}</td>
            <td>{{ $val->type }}</td>
            <td>{{ $val->quality }}</td>
            <td>{{ $val->amount }}</td>
            <td>
                <form action="{{ route('products.destroy',$val->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$val->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('products.edit',$val->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}
</div>
@endsection
