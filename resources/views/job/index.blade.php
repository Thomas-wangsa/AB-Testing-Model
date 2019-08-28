@extends('layouts.main')

@section('content')

<div style="margin-top: 15px">
    <div class="pull-left">
      <a href="{{route('job.create')}}">
        <button type="button" class="btn btn-md btn-primary">
          <span class="glyphicon glyphicon-plus"></span>
          New Jobs
        </button>
      </a>
    </div>
    <div class="clearfix"> </div>
</div>

<div class="pull-left" style="margin: 10px auto">
    <form class="form-inline" action="">
      <input type="hidden" name="search" value="on"> </input>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-search">
            </i>
          </span>
          <input type="text" class="form-control" 
          name="search_nama" placeholder="Find Job..."
          value="{{Request::get('search_nama')}}">
        </div>
      </div>
      
      <div class="form-group">
        <select class="form-control" name="search_filter">
          <option value=""> Owner </option>
        </select>
      </div>

      <div class="form-group">
        <select class="form-control" name="search_filter">
          <option value=""> Runner </option>
        </select>
      </div>

      <div class="form-group">
        <select class="form-control" name="search_filter">
          <option value=""> Status </option>
        </select>
      </div>

      <div class="form-group">
          <select class="form-control" name="search_order">
            <option value=""> Sort By </option>
          </select>
      </div>
    
      <button type="submit" class="btn btn-info"> 
        Filter
      </button> 
    </form>
</div>
<div class="clearfix"> </div>


<table class="table table-striped table-bordered table-responsive">
	<thead>
      <tr>
        <th> No </th>
        <th> Job Name </th>
        <th> Owner </th>
        <th> Runner </th>
        <th> Job Status </th>
        <th> Action </th>
      </tr>
    </thead>
</table>

@endsection
