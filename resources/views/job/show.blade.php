@extends('layouts.main')

@section('content')

<div style="margin: 10px auto">
    <a href="{{route('job.index')}}">
      <button type="button" class="btn btn-md btn-warning">
        <span class="glyphicon glyphicon-chevron-left "></span>
        Back
      </button>
    </a>
</div>
Job Name : test-6  
<br/>
Owner : analyst7@finaccel.co  
<br/>
Runner : Direct Runner
<br/> 
Quantiry : 5 Data 
<br/>
Metrics : raw-score
<br/>
<br/> 
<br/> 

<table class="table table-striped table-bordered table-responsive">
	<thead>
      <tr>
        <th> No </th>
        <th> User ID </th>
        <th> EngineID 35 </th>
        <th> EngineID 36 </th>
        <th> EngineID 50 </th>
      </tr>
    </thead>

    <tbody>
    	<tr>
    		<td> 1 </td>
    		<td> 8548100 </td>
    		<td> 0.0744614  </td>
    		<td> 0.00629004  </td>
    		<td> 0.0716265 </td>
    	</tr>
      <tr>
        <td> 2 </td>
        <td> 4317407 </td>
        <td> 0.0774614  </td>
        <td> 0.02629004  </td>
        <td> 0.1716265 </td>
      </tr>
      <tr>
        <td> 3 </td>
        <td> 4401723 </td>
        <td> 0.0874614  </td>
        <td> 0.01629004  </td>
        <td> 0.1516265 </td>
      </tr>
      <tr>
        <td> 4 </td>
        <td> 4401733 </td>
        <td> 0.0774614  </td>
        <td> 0.01629004  </td>
        <td> 0.1716265 </td>
      </tr>
      <tr>
        <td> 5 </td>
        <td> 4401256 </td>
        <td> -  </td>
        <td> 0.06629004  </td>
        <td> 0.1716865 </td>
      </tr>
    </tbody>
</table>

@endsection
