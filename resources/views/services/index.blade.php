@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Showing Services</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('services.create') }}"> Create New Service</a>
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
            <th>Amount</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($services as $val)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $val->name }}</td>
            <td>{{ $val->type }}</td>
            <td>{{ $val->amount }}</td>
            <td>
                <form action="{{ route('services.destroy',$val->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('services.show',$val->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('services.edit',$val->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $services->links() !!}

@endsection
