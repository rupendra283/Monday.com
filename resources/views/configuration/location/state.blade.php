@extends('layouts.master')
@section('title', 'Configuation')
@section('style')
@endsection
@section('content')
<div class="card">
    <div class="card-header border-bottom pb-2">
       Total State : {{ count($states) }}
    {{-- <a href="{{ route('lineofbuisness.create') }}" class="btn btn-primary btn-sm float-right">Add New</a> --}}
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $x=1;
                @endphp
                @foreach ($states as $item)
                <tr>
                    <td>{{ $x++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->Country->name }}</td>
                    {{-- <td>{{ $item->created_at }}</td> --}}
                    {{-- <td>$320,800</td> --}}
                    <td>edit</td>
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
