@extends('layouts.master')
@section('title', 'Settings')
@section('style')
@endsection
@section('content')
<div class="card">
    <div class="card-header border-bottom pb-2">
        Total Employee :
    <a href="{{ route('employee.create') }}" class="btn btn-primary btn-sm float-right">Add New</a>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Full Name</th>
                    <th>Departmenet</th>
                    <th>Joining Date</th>
                    <th>Status</th>
                    {{-- <th>Locations</th> --}}
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $x=1;
                @endphp
                @foreach ($employees as $item)
                <tr>
                    <td>{{ $x++ }}</td>
                    <td>


                    <a href="#">
                        <div class="media">
                            <img class="align-self-left img-50" src="{{ asset('image/user.png') }}" alt="">
                            <div class="media-body ml-2">
                                @if ($item->first_name && $item->last_name)
                                <div class=""><strong> {{ucfirst(trans ($item->first_name))}} {{ucfirst(trans ($item->last_name)) }}</strong></div>
                                {{ $item->email }}

                                @else
                                <div class=""><strong> {{ucfirst(trans ($item->first_name))}}</strong></div>
                                {{ $item->email }}
                                @endif
                            </div>
                        </div>
                    </a>
                </td>
                 <td>{{ $item->department->name }}</td>
                    <td>{{ $item->date_of_joining }}</td>
                    <td>{{ $item->status }}</td>
                    {{-- <td><a href="">EDIT</a> --}}
                        <td>
                            <a href=""> <i class="fa fa-pencil-alt"></i></a>
                            <a href="" class="mx-2 " data-toggle="tooltip" data-placement="top" title=""><i class="fa  fa-lg  " ></i></a>
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
