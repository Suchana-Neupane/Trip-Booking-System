@extends('layouts.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Choose your guide</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('guides.create') }}"> Create New guide</a>
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
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Primarycontact</th>
            <th>Secondarycontact</th>            
            <th width="280px">Action</th>
        </tr>
        
        @foreach($guides as $key => $guide)
        <tr>
            
            <td>{{ $key+1 }}</td>
            <td><img src="/image/{{ $guide->image }}" width="100px"></td>
            <td>{{ $guide->name }}</td>
            <td>{{ $guide->email }}</td>
            <td>{{$guide->primarycontact}}</td>
            <td>{{$guide->secondarycontact}}</td>
            <td>
                <form action="{{ route('guides.destroy',$guide->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('guides.show',$guide->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('guides.edit',$guide->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    
        
@endsection