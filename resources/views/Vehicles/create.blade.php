@extends('layouts.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Vehicle</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('vehicles.index') }}"> Back</a>
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
     
<form action="{{ route('vehicles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Vehicleno:</strong>
                    <input type="number" name="vehicleno" class="form-control" placeholder="Vehicleno">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Vehicletypes:</strong>
                    <input type="text" class="form-control" name="vehicletypes" placeholder="Vehicletypes">
                    
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Availability:</strong>
                    <input type="text" class="form-control"  name="availability" placeholder="Availabilty">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Capacity:</strong>
                    <input type="text" class="form-control" name="capacity" placeholder="Capacity">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Guides:</strong>
                    <select class="form-control" name="guides_id" placeholder="guides_id">
                    @foreach($ids as $guides)
                    <option value="{{$guides->id}}" >{{$guides->name}}</option>
                @endforeach
                </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
@endsection