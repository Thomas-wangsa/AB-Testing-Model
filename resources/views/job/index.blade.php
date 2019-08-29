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

    <tbody>
    	<tr>
    		<td> 1 </td>
    		<td> test-1 </td>
    		<td> analyst1@finaccel.co </td>
    		<td> Direct Runner </td>
    		<td class="text-warning"> Job-Pending </td>
    		<td> 
    			<button class="btn btn-block btn-primary">
    				approve
    			</button>
    		</td>
    	</tr>
    	<tr>
    		<td> 2 </td>
    		<td> test-2 </td>
    		<td> analyst2@finaccel.co </td>
    		<td> Direct Runner </td>
    		<td class="text-danger"> Job-Reject </td>
    		<td class="text-danger"> 
    			rejected by admin@finaccel.co <br/>
    			no need to compare, we don't use anymore
    		</td>
    	</tr>
    	<tr>
    		<td> 3 </td>
    		<td> test-3 </td>
    		<td> analyst3@finaccel.co </td>
    		<td> Direct Runner </td>
    		<td class="text-success"> Job-Active </td>
    		<td> 
    			<button class="btn btn-block btn-success">
    				execute job
    			</button>
    		</td>
    	</tr>
    	<tr>
    		<td> 4 </td>
    		<td> test-4 </td>
    		<td> analyst4@finaccel.co </td>
    		<td> Direct Runner </td>
    		<td class="text-warning"> Job-In-Progress </td>
    		<td> 
    			<button class="btn btn-block btn-warning">
    				view running ob
    			</button>
    		</td>
    	</tr>
    	<tr>
    		<td> 5 </td>
    		<td> test-5 </td>
    		<td> analyst5@finaccel.co </td>
    		<td> Direct Runner </td>
    		<td class="text-danger"> Job-Failed </td>
    		<td class="text-danger"> 
    			error messages :  <br/>
    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    			
    		</td>
    	</tr>
    	<tr>
    		<td> 6 </td>
    		<td> test-6 </td>
    		<td> analyst7@finaccel.co </td>
    		<td> Direct Runner </td>
    		<td class="text-primary"> Job-Done </td>
    		<td> 
    			<a href="{{route('job.show','$2y$10$8fZDzsLsUABqKRwf75VfUOKVHxxJLW3tgwqYOvmJaoqbmPHg.ou.q')}}">
	    			<button class="btn btn-block btn-info">
	    				view result job
	    			</button>
    			</a>
    			<button class="btn btn-block btn-info">
    				view chart mode
    			</button>
    			<button class="btn btn-block btn-primary">
    				update active model
    			</button>
    		</td>
    	</tr>
    	<tr>
    		<td> 7 </td>
    		<td> test-7 </td>
    		<td> analyst7@finaccel.co </td>
    		<td> BackGround Runner </td>
    		<td class="text-success"> Job-Active </td>
    		<td> 
    			job is still in waiting queue or in-progress
    		</td>
    	</tr>
    </tbody>
</table>

@endsection
