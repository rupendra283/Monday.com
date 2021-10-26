@extends('layouts.master')
@section('title', 'Orgnisations')
@section('style')
@endsection
@section('content')
<div class="card">
    <div class="card-header border-bottom pb-2">
      Employee
    </div>
    <div class="card-body">
        <div class="page-body">
            <div class="card">
                <div class="card-header card-info card-outline border-bottom"><h5>Add Employee Details</h5>
                            </div>
                <div class="card-body">
                <form action="{{ route('employee.store') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            Basic Information
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="first_name">First Name</label>
                                    <input id="first_name" class="form-control" type="text" name="first_name">
                                    @error('first_name')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="middle_name">Middle Name</label>
                                    <input id="middle_name" class="form-control" type="text" name="middle_name">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="last_name">Last Name</label>
                                    <input id="last_name" class="form-control" type="text" name="last_name">
                                    @error('last_name')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="text" name="email">
                                    @error('email')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                                </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="mobile">Mobile No</label>
                                        <input id="mobile" class="form-control" type="text" name="mobile">
                                        @error('mobile')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="bio_matric_id">bio_matric</label>
                                        <input id="bio_matric_id" class="form-control" type="text" name="bio_matric_id">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="profile_image">profile_image</label>
                                        <input id="profile_image" class="form-control" type="file" name="image">
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            <div class="card mt-4">
                                <div class="card-header">
                                    Work Details
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="roles">Roles</label>
                                            <select class="form-control" id="roles" name="roles">
                                                <option value=""> -- Select One --</option>
                                                <option value="Admin">Admin</option>
                                                <option value="User">User</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="system_id">system_id</label>
                                            <input id="system_id" class="form-control" type="text" name="system_id">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="fk_org_id">Orgnisation</label>
                                            <select class="form-control" id="fk_org_id" name="fk_org_id">
                                                <option value=""> -- Select One --</option>
                                                @foreach ($orgnisations as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                                <div class="form-group col-md-3">
                                                    <label for="fk_department_id">fk_department_id</label>
                                                    <select class="form-control" id="fk_department_id-dropdown" name="fk_department_id">
                                                        <option value=""> -- Select One --</option>
                                                        @foreach ($department as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label for="fk_designation_id">Designation</label>
                                                <select class="form-control" id="fk_designation_id" name="fk_designation_id">
                                                    <option value=""> -- Select One --</option>
                                                    @foreach ($designation as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="fk_source_of_hire_id">fk_source_of_hire_id</label>
                                                        <select class="form-control" id="fk_source_of_hire_id" name="fk_source_of_hire_id">
                                                            <option value=""> -- Select One --</option>
                                                            @foreach ($sourceOFHire as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="fk_salary_id">fk_salary_id</label>
                                                        <select class="form-control" id="fk_salary_id" name="fk_salary_id">
                                                        </select>
                                                    </div>
                                                </div>
                                             </div>
                                         </div>
                            <div class="card mt-4">
                                <div class="card-header">
                                    Personal Details
                                </div>
                                <div class="card-body">
                                 <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="father_name">father Name</label>
                                        <input id="father_name" class="form-control" type="text" name="father_name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="mother_name">Mother Name</label>
                                        <input id="mother_name" class="form-control" type="text" name="mother_name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="alt_mobile_no">ALternate Mobile No</label>
                                        <input id="alt_mobile_no" class="form-control" type="text" name="alt_mobile_no">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="alt_email_id">ALternate Email Id</label>
                                        <input id="alt_email_id" class="form-control" type="text" name="alt_email_id">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="date_of_birth">Date Of Birth </label>
                                        <input id="date_of_birth" class="form-control" type="text" name="date_of_birth">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="gender">Gender</label>
                                        <input id="gender" class="form-control" type="text" name="gender">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="marital_status">Martial Status</label>
                                        <input id="marital_status" class="form-control" type="text" name="marital_status">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="spouse_name">Spouse Name</label>
                                        <input id="spouse_name" class="form-control" type="text" name="spouse_name">
                                    </div>
                                 </div>
                                </div>
                            </div>
                            <div class="card mt-4">
                                <div class="card-header">
                                    Permanent Address
                                </div>
                                <div class="card-body">
                                   <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="permanent_addr1">Permanent Address 1 </label>
                                        <input id="permanent_addr1" class="form-control" type="text" name="permanent_addr1">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="permanent_addr2">Permanent Address 2 </label>
                                        <input id="permanent_addr2" class="form-control" type="text" name="permanent_addr2">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="country-dropdown">Select Country</label>
                                        <select class="form-control" id="country-dropdown" name="fk_country1_id">
                                            <option value=""> -- Select One --</option>
                                            @foreach ($countries as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="state">State</label>
                                        <select class="form-control" id="state-dropdown" name="state_id">
                                        </select>
                                    </div>
                                   </div>
                                   <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="city">City</label>
                                        <select class="form-control" id="city-dropdown" name="city_id">
                                       </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="pin_code">Pin Code</label>
                                        <input id="pin_code" class="form-control" type="text" name="pin_code">
                                        </select>
                                    </div>
                                   </div>
                                </div>
                            </div>

                            {{-- Work History --}}

                            <div class="card mt-4" id="work_history">
                                <div class="card-header">
                                  Work History
                                </div>
                                <div class="card-body form-main">
                                 <div class="row form-block">
                                        <div class="form-group col-md-2">
                                            <label for="company_name">Company Name</label>
                                            <input id="company_name" class="form-control" type="text" name="company_name">
                                            </select>
                                     </div>
                                     <div class="form-group col-md-2">
                                        <label for="company_name">Job Title</label>
                                        <input id="company_name" class="form-control" type="text" name="company_name">
                                        </select>
                                 </div>
                                 <div class="form-group col-md-2">
                                    <label for="from_date">From Date</label>
                                    <input id="from_date" class="form-control" type="text" name="from_date">
                                    </select>
                             </div>
                             <div class="form-group col-md-2">
                                <label for="to_date">To Date</label>
                                <input id="to_date" class="form-control" type="text" name="to_date">
                                </select>
                         </div>
                                <div class="form-group col-md-2">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" rows="1" id="description"></textarea>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="#" class="clone"><i class="fa fa-plus"></i></a>
                                            <a href="#" class="delete mx-2"><i class="fa fa-minus"></i></a>
                                        </div>
                                 </div>
                                </div>
                            </div>

                            <div class="card mt-4">
                                <div class="card-header">
                                   Bank Details
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="bank_name">Bank Name</label>
                                            <input id="bank_name" class="form-control" type="text" name="bank_name">

                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="account_no">Bank Account No</label>
                                        <input id="account_no" class="form-control" type="text" name="account_no">

                                </div>
                               <div class="form-group col-md-3">
                                        <label for="branch_name">Branch Name</label>
                                        <input id="branch_name" class="form-control" type="text" name="branch_name">

                                </div>
                                <div class="form-group col-md-3">
                                    <label for="ifsc_code">IFSC Code</label>
                                    <input id="ifsc_code" class="form-control" type="text" name="ifsc_code">
                                    </select>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="pan_no">Pan No</label>
                                            <input id="pan_no" class="form-control" type="text" name="pan_no">
                                            </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="adhar_no">Adhar No</label>
                                        <input id="adhar_no" class="form-control" type="text" name="adhar_no">
                                        </select>
                                     </div>
                                     </div>
                                 </div>
                            </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                                    <a href="" class="btn btn-secondary float-right m-r-5">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('scripts')
            <script>
        $(document).ready(function() {
        $('#country-dropdown').on('change', function() {
        var country_id = this.value;
        $("#state-dropdown").html('');
        $.ajax({
        url:"{{url('get-states-by-country')}}",
        type: "POST",
        data: {
        country_id: country_id,
        _token: '{{csrf_token()}}'
        },
        dataType : 'json',
        success: function(result){
        $('#state-dropdown').html('<option value="">Select State</option>');
        $.each(result.states,function(key,value){
        $("#state-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
        console.log(value.id);
        });
        $('#city-dropdown').html('<option value="">Select State First</option>');
        }
        });
        });
        $('#state-dropdown').on('change', function() {
        var state_id = this.value;
        $("#city-dropdown").html('');
        $.ajax({
        url:"{{url('get-cities-by-state')}}",
        type: "POST",
        data: {
        state_id: state_id,
        _token: '{{csrf_token()}}'
        },
        dataType : 'json',
        success: function(result){
        $('#city-dropdown').html('<option value="">Select City</option>');
        $.each(result.cities,function(key,value){
        $("#city-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
        });
        }
        });
        });
    });
    $(document).ready(function () {
          $('.clone').click(function (e) {
              e.preventDefault();
            var form = $('.form-block').clone();
            $('.form-main').append(form)
            // console.log(form);

        });
        $('.delete').click(function (e){
            e.preventDefault();
            $('.form-main').remove();
        })
    });
        </script>
    @endsection
