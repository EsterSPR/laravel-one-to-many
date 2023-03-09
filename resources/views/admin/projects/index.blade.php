@extends('layouts.admin')

@section('content')
{{-- card template --}}

<div class="row row-cols-1 row-cols-md-3 g-4 p-5 m-0">
  @forelse ($projects as $item)
  <div class="col">
    <div class="card h-100">    

      <div class="card-img-top">
        <img src="{{ $item['cover_img'] }}" class="img-fluid rounded-top" alt="{{ $item['project_title'] }}">
      </div>

      <div class="card-body">
        <div class="card-title"><h5>{{ $item['project_title'] }}</h5></div>

        <div class="d-flex">
          <a class="btn btn-primary me-2" href="{{ route('admin.projects.show', ['project' => $item['id']]) }}"><i class="fa-solid fa-circle-info"></i></a>
          <a class="btn btn-success me-2" href="{{ route('admin.projects.edit', ['project' => $item['id']]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
            <form action="{{route('admin.projects.destroy', ['project' => $item['id']] )}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger confirm-delete-button"><i class="fa fa-trash"></i></button>
            </form>
        </div>
      </div>

    </div>
  </div>

    @empty
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <div class="alert alert-primary text-center" role="alert">
                        <h4 class="alert-heading mb-4">No projects added yet.</h4>
                    </div>
                </div>
            </div>
        </div>
      @endforelse

</div>

@endsection