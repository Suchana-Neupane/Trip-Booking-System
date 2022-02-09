@extends('layouts.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Register New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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
     
<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-sm-6 form-group">
             <strong>Name:</strong>
             <input type="text" name="name" class="form-control"  placeholder="Name">
            
        </div>
        <div class="col-sm-6 form-group">
            <strong>Email:</strong>  
             <input type="email" class="form-control"  name="email" placeholder="Email">
            </div>
        <div class="col-sm-6 form-group">
                <strong>Password:</strong>
                <input type="password" class="form-control"  name="password" placeholder="Password">
            </div>
            <div class="col-sm-6 form-group">
                <strong>Usertypes:</strong>
                <select class="form-control" name="user_types_id"  placeholder="Choose User">
                @foreach($types as $usertypes)
                    <option value="{{$usertypes->id}}"> {{$usertypes->name}}</option>
                @endforeach
                 </select>
            </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection