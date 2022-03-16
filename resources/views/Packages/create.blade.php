@extends('layouts.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Book This Package</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('packages.index') }}"> Back</a>
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
     
<form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <strong>Price:</strong>
                <input type ="text" class="form-control"  name="price" placeholder="Price">
        </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <strong>Availability:</strong>
                <input type ="text" class="form-control"  name="availability" placeholder="Availability">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <strong>Duration:</strong>
                <input type ="text" class="form-control"  name="duration" placeholder="Duration">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <strong>Guides:</strong>
                <select class="form-control"  name="guides_id" placeholder="Guides_id">
                @foreach($ids as $guides)
                    <option value="{{$guides->id}}" >{{$guides->name}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <strong>Vehicles:</strong>
                <select class="form-control"  name="vehicles_id" placeholder="Vehicles_id">
                @foreach($lists as $vehicles)
                    <option value="{{$vehicles->id}}" >{{$vehicles->vehicleno}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                <textarea class="form-control" style="height:150px" name="details" placeholder="Details"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </div>
     
</form>
@endsection