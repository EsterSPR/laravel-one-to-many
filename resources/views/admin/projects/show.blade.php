@extends('layouts.admin')
@section('content')
<!-- <div class="card" style="width: 18rem;">
  <img src="{{ $project->cover_img }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h2 class="card-title">{{$project->project_title}}</h2>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->

<div class="container p-5">
  <div class="row">
    <div class="col-5"> <img src="{{ $project->cover_img }}" alt="{{$project->project_title}}" class="img-fluid"> </div>
    <div class="col-7 fs-5 es_justify">
      <h2 class="card-title es_title es_yellow mb-3">{{$project->project_title}}</h2>
      <h4>Type: {{ $project->type->name }}</h4>
      {{ $project->project_desc }}
    </div>
  </div>
</div>

@endsection