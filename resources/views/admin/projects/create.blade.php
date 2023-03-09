@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mt-5 mb-2">
            <h2 class="es_red">Add new project</h2>
        </div>
        <div class="col-12">
            <form action="{{route('admin.projects.store')}}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Project title
                </label>
                <input type="text" class="form-control es_yellowborder" placeholder="Project title" id="project_title" name="project_title">
                    @error('project_title')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
            </div>

            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Cover image url
                </label>
                <input type="text" class="form-control es_yellowborder" placeholder="Cover image url" id="cover_img" name="cover_img">
                    @error('cover_img')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
            </div>

            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Project slug
                </label>
                <input type="text" class="form-control es_yellowborder" placeholder="Project slug" id="slug" name ="slug">
                    @error('slug')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
            </div>

            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Project type
                </label>
                <select type="text" class="form-control es_yellowborder" placeholder="Type" id="type_id" name="type_id">
                    @foreach($types as $type)
                        <option value="{{ $type->id }}"> {{ $type->name }} </option>
                    @endforeach
                </select>
                @error('type_id')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Project description
                </label>
                <textarea name="project_desc" id="project_desc" placeholder="Project description" class="w-100 es_yellowborder rounded p-2"></textarea>
                    @error('project_desc')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
            </div>

            <div class="form-group mb-3">
                <button type="submit" class="btn es_button mt-2">Salva</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection