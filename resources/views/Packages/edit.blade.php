@extends('layouts.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit package</h2>
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
    
    <form action="{{ route('packages.update',$package->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $package->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="text" class="form-control"  name="price" placeholder="Price" {{ $package->price }}>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Availabilty:</strong>
                    <input type="text" class="form-control"  name="availability" placeholder="Availability" {{ $package->availability }}>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Duration:</strong>
                    <input type ="text" class="form-control"  name="duration" placeholder="Duration" {{ $package->duration }}>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Guides:</strong>
                    <select class="form-control" name="guides_id" placeholder="guides_id">{{ $package->guides_id }}
                    @foreach($ids as $guides)
                    <option value="{{$guides->id}}" >{{$guides->name}}</option>
                @endforeach
                </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <strong>Vehicles:</strong>
                    <select class="form-control"  name="vehicles_id" placeholder="Vehicles_id">{{ $package->vehicles_id }}
                    @foreach($lists as $vehicles)
                    <option value="{{$vehicles->id}}" >{{$vehicles->vehicleno}}</option>
                @endforeach
                </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>
                    <textarea class="form-control" style="height:100px" name="details" placeholder="Detail">{{ $package->details }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
@endsection