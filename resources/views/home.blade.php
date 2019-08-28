@extends('layouts.main')

@section('content')
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="">
          <div class="icon_block">
                <span class="glyphicon glyphicon-user ">
                </span> &nbsp;
          </div>
          <div class="caption text-center">
            <p> Admin</p>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3">
      <div class="thumbnail">
        <a href="{{route('job.index')}}">

          <div class="icon_block">
                <span class="glyphicon glyphicon-file ">
                </span> &nbsp;
          </div>
          <div class="caption text-center">
            <p> Job </p>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3">
      <div class="thumbnail">
        <a href="">

          <div class="icon_block">
                <span class="glyphicon glyphicon-file ">
                </span> &nbsp;
          </div>
          <div class="caption text-center">
            <p> BackDate </p>
          </div>
        </a>
      </div>
    </div>


    



@endsection
