@extends('layouts.master')
@section('title', 'Orgnisations')
@section('style')
@endsection
@section('content')
<div class="card">
    <div class="card-header border-bottom pb-2">
        Total Orgnisations :
    <a href="{{ route('orgnisations.create') }}" class="btn btn-primary btn-sm float-right">Add New</a>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Orgnisation Name</th>
                    {{-- <th>Locations</th> --}}
                    <th>Line Of Buisness</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $x=1;
                @endphp
                @foreach ($orgnisations as $item)
                <tr>
                    <td>{{ $x++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->lineOFBuisness->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->mobile_no }}</td>
                    <td><a href="{{ route('orgnisations.edit',$item->id) }}">EDIT</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection
