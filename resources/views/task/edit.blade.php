@extends('layouts.parent')
@section('title','this is create')

@section('sidebar') <!--disini section , di parent section maka fixed!-->
@parent
@endsection

@section('header') <!--disini section, di parent section maka fized!-->
@parent
@endsection

@section('content')

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Create Schedule</h5>
        <div class="card">
          <div class="card-body">
              <form method="POST" action="{{route('task.update')}}">
                  @csrf
              
            <div class="mb-3">
              <label for="image_id" class="form-label">Image Id</label>
              <input type="text" class="form-control" id="image_id" name="image_id" placeholder="Image Id" {{
                  old('image_id') ? 'value=' . old('image_id') : ''
      
              }}>
              @error('image_id')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
           </div>
          <div class="mb-3">
              <label for="status_id" class="form-label">Status Id</label>
              <input type="text" class="form-control" id="status_id" name="status_id" placeholder="Status id" {{
                  old('status_id') ? 'value=' . old('status_id') : ''
  
              }}>
              @error('status_id')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
    </div>
              <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title">
                <div id="title" class="form-text">What is your concern.</div>
                @error('title')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
              <div class="mb-3">
                  <label for="desc" class="form-label">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="3">{{ old('desc') ? old('desc') : '' }}</textarea>
                  @error('desc')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
              <div class="mb-3">
                  <label for="note" class="form-label">Note</label>
                  <input type="paragraph" class="form-control" id="note">
                  @error('note')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection