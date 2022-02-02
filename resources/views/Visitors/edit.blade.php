@extends('layouts.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Visitor Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('visitors.index') }}"> Back</a>
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
    
    <form action="{{ route('visitors.update',$visitor->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $visitor->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea class="form-control" style="height:150px" name="address" placeholder="Address"> {{ $visitor->address }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Primarycontact:</strong>
                <textarea class="form-control"  name="primarycontact" placeholder="Priarycontact"> {{ $visitor->primarycontact }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Secondarycontact:</strong>
                <textarea class="form-control"  name="secondarycontact" placeholder="Secondarycontact"> {{ $visitor->secondarycontact }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Guides_id:</strong>
                <select class="form-control"  name="guides_id" placeholder="Guides_id">
                @foreach($ids as $guides)
                    <option value="{{$guides->id}}" >{{$guides->name}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vehicles_id:</strong>
                <select class="form-control"  name="vehicles_id" placeholder="Vehicles_id">
                @foreach($lists as $vehicles)
                    <option value="{{$vehicles->id}}" >{{$vehicles->vehicleno}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Packages_id:</strong>
                <select class="form-control"  name="packages_id" placeholder="Packages_id">
                @foreach($datas as $packages)
                    <option value="{{$packages->id}}" >{{$packages->name}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection