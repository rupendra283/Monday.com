@extends('layouts.master')
@section('title', 'Designation')
@section('style')
@endsection
@section('content')
<div class="card">
    <div class="card-header border-bottom pb-2">
        Total Designation : {{ count($designations) }}
    <a href="{{ route('designation.create') }}" class="btn btn-primary btn-sm float-right">Add New</a>
    </div>
    <div class="card-body">
        @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong>{{ Session::get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Designation Name</th>
                    {{-- <th>Locations</th> --}}
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $x=1;
                @endphp
                @foreach ($designations as $item)
                <tr>
                    <td>{{ $x++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ route('designation.edit',$item->id) }}">Edit</a>
                        <a href="{{ route('designation.delete',$item->id) }}" class="ml-2">Delete</a>
                    </td>
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
