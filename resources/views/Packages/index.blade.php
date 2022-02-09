@extends('layouts.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Let's Travel Together</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('packages.create') }}"> Book New Package</a>
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
            <th>Details</th>
            <th>Price</th>
            <th>Availability</th>
            <th>Duration</th>
            <th>Guides</th>
            <th>Vehicles</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($packages as $package)
        <tr>
            <td>{{ ++$i }}</td>
            
            <td>{{ $package->name }}</td>
            <td>{{ $package->details }}</td>
            <td>{{ $package->price }}</td>
            <td>{{ $package->availability }}</td>
            <td>{{ $package->duration }}</td>
            <td>{{ $package->guides_id }}</td>
            <td>{{ $package->vehicles_id }}</td>
            <td>
                <form action="{{ route('packages.destroy',$package->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('packages.show',$package->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('packages.edit',$package->id) }}">Edit</a>
                    
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $packages->links() !!}
        
@endsection