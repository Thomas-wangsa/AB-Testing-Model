@extends('layouts.main')

@section('content')

<style type="text/css">
	.a_options {margin-top :15px;visibility: hidden} 
</style>

<div style="margin: 10px auto">
    <a href="{{route('job.index')}}">
      <button type="button" class="btn btn-md btn-warning">
        <span class="glyphicon glyphicon-chevron-left "></span>
        Back
      </button>
    </a>
</div>

<form class="form-inline">
	<div class="form-group">
  		<label for="sel1" id="helper_score_title">Select score type :</label>
	  	<select class="form-control" id="score_type" onchange="show_details()">
		  	<option> Select Score Type </option>
		    <option value="a"> A Score</option>
		    <option value="b"> B Score</option>
		    <option value="c"> C Score</option>
		    <option value="general"> General Score</option>
	  </select>
	</div>

	<div class="form-group" id="helper_score_type">
	    <a href="{{route('job.create')}}">
	      <button type="button" class="btn btn-md">
	        Clear Score Type
	      </button>
    	</a>
	</div>
</form>
    

<div class="a_options" id="a_options">

	<form class="form-inline">
	  	<div class="form-group">
	  		<label> Please select the app_type & source : </label>
		    <select class="form-control" id="a_app_type" onchange="a_populate_engine_name()">
		    	<option value=""> Select Application Type </option>
		    	@if(isset($data['application_type']) && count($data['application_type']) > 0)
		    		@foreach($data['application_type'] as $key=>$val)
		    		<option value="{{$val}}"> {{$val}} </option> 
		    		@endforeach
		    	@endif
		    </select>
	  	</div>
	  	&nbsp;
	  	<div class="form-group">
		    <select class="form-control" id="a_source" onchange="a_populate_engine_name()">
		    	<option value=""> Select Source </option>
		    	@if(isset($data['source_of_registration']) && count($data['source_of_registration']) > 0)
		    		@foreach($data['source_of_registration'] as $key=>$val)
		    		<option value="{{$val}}"> {{$val}} </option> 
		    		@endforeach
		    	@endif
		    </select>
	  	</div>
	  	&nbsp;

	  	<br/> <br/> 

	  	<div class="form-group last_options" >
		    <select class="form-control">
		    	<option> Select Quantity </option>
		    	<option value="3"> 3 </option>
		    	<option value="10"> 10 </option>
		    	<option value="20"> 20 </option>
		    	<option value="50"> 50 </option>
		    	<option value="100"> 100 </option>
		    	<option value="200"> 200 </option>
		    </select>
	  	</div>
	  	&nbsp;
	  	
	  	<div class="form-group last_options">
		    <select class="form-control">
		    	<option> Select User Distribution </option>
		    	<option value="asc"> Ascending </option>
		    	<option value="desc"> Descending/Newest </option>
		    	<option value="rand"> Random </option>
		    </select>
	  	</div>
	  	&nbsp;

	  	<div class="form-group last_options">
		    <select class="form-control">
		    	<option> Select Runner </option>
		    	<option value="asc"> Direct Runner </option>
		    	<option value="desc"> Schedule </option>
		    </select>
	  	</div>


	  	<div class="checkbox last_options">
	    	<label><input type="checkbox"> Notify me </label>
	  	</div>
	</form>

	<table class="table table-striped table-bordered table-responsive adjust_last_options">
		<thead>
	      <tr>
	        <th> No </th>
	        <th> Engine Name </th>
	        <th> Engine ID </th>
	        <th> Model Decider </th>
	        <th> Action </th>
	      </tr>
    	</thead>
    	<tbody id="tbody_a_engine_name">
    		<tr class="disable">
    			<td colspan="10">
    			</td>
    		</tr>
    	</tbody>
	</table>

	<div class="btn btn-block btn-primary last_options">
		Submit Job 
	</div>
</div>


<script type="text/javascript">
	$('#helper_score_type').hide();
	$(".last_options").hide();
	$.ajaxSetup({
    	headers: {
      		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    	}
 	});

	function show_details() {
		$(".a_options").css({ 'visibility' : 'hidden' });
		score_type = $('#score_type').val();
		if(score_type == "a") {
			$(".a_options").css({ 'visibility' : 'visible' });
		} else {

		}
	}


	function a_populate_engine_name() {
		a_app_type = $('#a_app_type').val();
		a_source = $('#a_source').val();

		if(a_app_type == "") {
			// alert("App type null");
			return
		} else if (a_source == "") {
			// alert("A Source is null");
			return
		} 

		$('#tbody_a_engine_name').empty();
		var payload = {"a_app_type":a_app_type,"a_source":a_source};

		$.ajax({
			type : "POST",
			url: " {{ route('getEngineNameByDataForA') }}",
			contentType: "application/json",
			data : JSON.stringify(payload),
			success: function(result) {
				response = JSON.parse(result);
				if(response.error != true) {
					$.each(response.data, function (key,val) {
						append_rows = "<tr>"+
									"<td>" +
									(key+1) +
									"</td>" +
									"<td>" +
									val.engine_name +
									"</td>" +
									"<td>" +
									val.engine_id +
									"</td>" +
									"<td>" +
									val.model_decider +
									"</td>" +
									"<td>" +
									"<button class='btn btn-success btn-block'> pick engine "+ val.engine_id +" </button>" +
									"</td>" +
									"</tr>";
						$('#score_type').attr('disabled',true);
						$('#helper_score_type').show();
						$('#helper_score_title').hide();
						$('.last_options').show();
						$('.adjust_last_options').css('margin-top','10px');
						$('#tbody_a_engine_name').append(append_rows);
					});
				} else {
					append_rows = "<tr> <td colspan=10 class='text-danger'>"+response.messages+"</td> </tr>";
					$('#tbody_a_engine_name').append(append_rows);
					$(".last_options").hide();
				}
			},
			error: function( jqXhr, textStatus, errorThrown ){
				console.log( errorThrown );
				alert(errorThrown);
			}
		})

	}
</script>


@endsection
