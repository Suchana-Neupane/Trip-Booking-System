@extends('layouts.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Your Details</h2>
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
    
    <form action="{{ route('users.update',$user->id) }}" method="POST"> 
        @csrf
        @Method('PUT')
         <div class="row">
            <div class="col-sm-6 form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
            </div>
            <div class="col-sm-6 form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
            </div>
            <div class="col-sm-6 form-group">
                    <strong>Password:</strong>
                    <input type="password" name="password"  class="form-control" placeholder="Password" value={{ $user->password }}>
            </div>
            <div class="col-sm-6 form-group">
                    <strong>Usertypes:</strong>
                    <select type="text" name="user_types_id"  class="form-control" placeholder="Usertypes_id" value={{ $user->user_types_id }}>
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