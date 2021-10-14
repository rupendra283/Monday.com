@extends('layouts.master')
@section('title', 'Configuation')
@section('style')
@endsection
@section('content')
<div class="card">
    <div class="card-header border-bottom pb-2">
      Education
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Add Educations</h3>
                            </div>
                            <form action="{{ route('education.store') }}" method="POST">
                                @csrf
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="education">Education Name</label>
                                  <input type="text" name="name" class="form-control" id="education" placeholder="Enter Education Name">
                                  @error('name')
                                  <small class="form-text text-danger">{{ $message }}</small>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="description">Description</label>
                                  <input type="text" name="descripton" class="form-control" id="description" placeholder="Description">
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                              </div>
                            </form>
                          </div>
                   </div>
                </div>
             </div>
        </div>
    @endsection
