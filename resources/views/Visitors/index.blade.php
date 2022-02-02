@extends('layouts.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Let's Travel Together</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('visitors.create') }}"> Create New Visitor</a>
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
            <th>Address</th>
            <th>Primarycontact</th>
            <th>Secondarycontact</th>
            <th>guides_id</th>
            <th>vehicles_id</th>
            <th>packages_id</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($visitors as $key => $visitor)
        <tr>
            <td>{{$key+1  }}</td>
            
            <td>{{ $visitor->name }}</td>
            <td>{{ $visitor->address }}</td>
            <td>{{ $visitor->primarycontact }}</td>
            <td>{{ $visitor->secondarycontact }}</td>
            <td>{{ $visitor->guides_id }}</td>
            <td>{{ $visitor->vehicles_id }}</td>
            <td>{{ $visitor->packages_id }}</td>
            <td>
                <form action="{{ route('visitors.destroy',$visitor->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('visitors.show',$visitor->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('visitors.edit',$visitor->id) }}">Edit</a>
                    
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    
        
@endsection