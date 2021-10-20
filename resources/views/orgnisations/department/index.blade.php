@extends('layouts.master')
@section('title', 'Department')
@section('style')
@endsection
@section('content')
<div class="card">
    <div class="card-header border-bottom pb-2">
        Total Department :
    <a href="{{ route('department.create') }}" class="btn btn-primary btn-sm float-right">Add New</a>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Department Name</th>
                    {{-- <th>Locations</th> --}}
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $x=1;
                @endphp
                @foreach ($departments as $item)
                <tr>
                    <td>{{ $x++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
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
