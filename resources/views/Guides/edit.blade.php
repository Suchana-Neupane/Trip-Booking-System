@extends('layouts.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit guide Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('guides.index') }}"> Back</a>
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
    
    <form action="{{ route('guides.update',$guide->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $guide->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" class="form-control"  name="email" placeholder="Email" value="{{ $guide->email }}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" class="form-control"  name="password" placeholder="Password" value="{{ $guide->password }}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Primarycontact:</strong>
                    <input type="number" class="form-control"  name="primarycontact" placeholder="Primarycontact" value="{{ $guide->primarycontact }}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Secondarycontact:</strong>
                    <input type="number" class="form-control" name="secondarycontact" placeholder="Secondarycontact" value="{{ $guide->secondarycontact }}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="Image">
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
@endsection