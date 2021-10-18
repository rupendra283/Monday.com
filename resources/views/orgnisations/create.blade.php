@extends('layouts.master')
@section('title', 'Orgnisations')
@section('style')
@endsection
@section('content')
<div class="card">
    <div class="card-header border-bottom pb-2">
      Orgnisations
    </div>
    <div class="card-body">
        <div class="page-body">
            <div class="card">
                <div class="card-header card-info card-outline border-bottom"><h5>Add Organization Details</h5>
                            </div>
                <div class="card-body">
                <form action="{{ route('orgnisations.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name">Orgnisation Name</label>
                            <input id="name" class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="line_of_buisness">Line Of Buisness</label>
                            <select class="form-control" name="line_of_buisness">
                                <option value="">Select Buisness</option>
                                @foreach ($lineOfBuisness as $item)
                                <option value="{{$item->id}}">
                                {{$item->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="text" name="email">
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="mobile_no">Mobile No</label>
                                <input id="mobile_no" class="form-control" type="text" name="mobile_no">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="website">Website</label>
                                <input id="website" class="form-control" type="text" name="website">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="address_1">address_1</label>
                                <input id="address_1" class="form-control" type="text" name="address_1">
                            </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="address_2">Address 2</label>
                                    <input id="address_2" class="form-control" type="text" name="address_2">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Country <span class="text-danger">*</span> </label>
                                    <select class="form-control" id="country-dropdown" name="country_id">
                                        <option value="">Select Country</option>
                                        @foreach ($countryies as $country)
                                        <option value="{{$country->id}}">
                                        {{$country->name}}
                                        </option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="state">State</label>
                                        <select class="form-control" id="state-dropdown" name="state_id">
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="city">City</label>
                                         <select class="form-control" id="city-dropdown" name="city_id">
                                        </select>
                                   </div>
                                    <div class="form-group col-md-4">
                                      <label for="inputZip">Zip Code <span class="text-danger">*</span> </label>
                                      <input type="text" class="form-control" name="zip_code" id="inputZip" placeholder="Zip code" value="">
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
</script>
    @endsection
