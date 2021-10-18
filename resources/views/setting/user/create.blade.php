@extends('layouts.master')
@section('title', 'Settings')
@section('style')
@endsection
@section('content')
<div class="card">
    <div class="card-header border-bottom pb-2">
      User
    </div>
    <div class="card-body">
        <div class="page-body">
            <div class="card">
                <div class="card-header card-info card-outline border-bottom"><h5>Add User Details</h5>
                            </div>
                <div class="card-body">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="first_name">First Name</label>
                            <input id="first_name" class="form-control" type="text" name="first_name">
                            @error('first_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="middle_name">Middle Name</label>
                            <input id="middle_name" class="form-control" type="text" name="middle_name">

                        </div>
                        <div class="form-group col-md-4">
                            <label for="last_name">Last Name</label>
                            <input id="last_name" class="form-control" type="text" name="last_name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="mobile_no">Mobile No</label>
                            <input id="mobile_no" class="form-control" type="text" name="mobile_no">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="text" name="email">
                            @error('email')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="password">Password(Default:password)</label>
                            <input id="password" class="form-control" type="password" value="password" name="password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select id="role" class="custom-select" name="role" multiple>
                                <option>User</option>
                                <option>Admin</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
