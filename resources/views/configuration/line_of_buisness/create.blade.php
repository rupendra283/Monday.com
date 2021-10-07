@extends('layouts.master')
@section('title', 'Configuation')
@section('style')
@endsection
@section('content')
<div class="card">
    <div class="card-header border-bottom pb-2">
      Line Of Buisness
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Add Line Of Buisness</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('lineofbuisness.store') }}" method="POST">
                                @csrf
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="lineofBuisness">Line Of Buisness</label>
                                  <input type="text" name="name" class="form-control" id="lineofBuisness" placeholder="Enter line of buisness">
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
