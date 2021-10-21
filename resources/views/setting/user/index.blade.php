@extends('layouts.master')
@section('title', 'Settings')
@section('style')
@endsection
@section('content')
<div class="card">
    <div class="card-header border-bottom pb-2">
        Total Users :
    <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm float-right">Add New</a>
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
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Role</th>
                    <th>Status</th>
                    {{-- <th>Locations</th> --}}
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $x=1;
                @endphp
                @foreach ($users as $item)
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
                    {{-- <td>{{ucfirst(trans ($item->first_name))}} {{ucfirst(trans ($item->last_name)) }}</td> --}}
                    <td>{{ $item->mobile_no }}</td>
                    @if ($item->is_admin == 1)
                    <td>Admin</td>
                    @else
                    <td>Normal User</td>
                    @endif
                    @if ($item->status == 1)
                    <td><span class="badge badge-primary">Active</span></td>

                    @else
                    <td><span class="badge badge-danger">Deactive</span></td>
                    @endif
                    {{-- <td>{{ $item->status == 1 ? 'Enable': 'Disable'}}</td> --}}
                    <td>{{ $item->created_at }}</td>
                    {{-- <td><a href="">EDIT</a> --}}
                        <td>
                            <a href=""> <i class="fa fa-pencil-alt"></i></a>

                            <a href="{{ route('user.status',$item->id) }}" class="mx-2 " data-toggle="tooltip" data-placement="top" title="{{ ($item->status != 1)? 'Unlock Employee' : 'Lock Employee' }} "><i class="fa  fa-lg {{ ($item->status != 1)? 'fa-lock' : 'fa-unlock' }} " ></i></a>


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
