@extends('layouts.layout')
@section('content')
<div class="container">
<div class="card">
  <div class="card-header">New Pet</div>
  <div class="card-body">
      
      <form action="store" method="post">
        {!! csrf_field() !!}
        <label>Pet</label></br>
        <input type="text" name="pet" id="pet" class="form-control"></br>
        <label>Type</label></br>
        <input type="text" name="type" id="type" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
</div>

