@extends('layouts.master')
@section('title', 'Configuation')
@section('style')
@endsection
@section('content')
<div class="row">
  <div class="d-inline">
     <h4>Application Setup</h4>
     <p class="mt-3">Orgnisations Setup</p>
  </div>
</div>
<div class="row">
    <div class="col-md-3 col-sm-6 col-12">
        <a href="{{ route('lineofbuisness.index') }}">
      <div class="info-box">
        <span class="info-box-icon bg-info"><i class="fas fa-business-time"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Line Of Buisness</span>
          <span class="info-box-number">{{ count($lineOfBuisness) }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
        </a>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="{{ route('state.index') }}">
      <div class="info-box">
        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">State</span>
          <span class="info-box-number">{{ count($state) }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </a>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="{{ route('city.index') }}">
      <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="fas fa-city"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">City</span>
          <span class="info-box-number">{{ count($cities) }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </a>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-danger"><i class="fas fa-map-marker-alt"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Locations</span>
          <span class="info-box-number"></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <div class="row mt-3">
       <p>Employee Setup</p>
  </div>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <a href="{{ route('education.index') }}">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-user-graduate"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Education</span>
              <span class="info-box-number">{{ count($educations) }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
    </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-success"><i class="fas fa-atlas"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Source of Hire</span>
              <span class="info-box-number">410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-thermometer-three-quarters"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Employee Status</span>
              <span class="info-box-number">13,648</span>
            </div>
          </div>
        </div>
      </div>
     <div class="row mt-3">
         <p>Leave Setup</p>
     </div>
  </div>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-thermometer-three-quarters"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Leave</span>
              <span class="info-box-number">5</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-thermometer-three-quarters"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Leave Policy</span>
              <span class="info-box-number">13,648</span>
            </div>
          </div>
        </div>
      </div>
@endsection
