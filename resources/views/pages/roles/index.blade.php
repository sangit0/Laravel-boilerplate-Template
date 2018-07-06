@extends('layouts.admin-app')
@section('content')
    @component('components.box',["type"=>'primary'])
        @slot('title')
            <i class="fa fa-ravelry"> Role Management</i>
        @endslot
        @slot('body')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
        @can('role-create')
            <a class="btn btn-success" href="{{ route('roles.create') }}"> 
               <i class="fa fa-snowflake-o"></i> Create New Role
            </a>
        @endcan
        </div>
    </div>
</div>
<br>

@if ($message = Session::get('success'))
    @alert(['type' => 'success'])
        {{$message}} 
    @endalert
@endif



<table class="table table-hover">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn bg-olive btn-sm btn-flat" href="{{ route('roles.show',$role->id) }}">  <i class="fa fa-eye"></i> Show</a>
            @can('role-edit')
                <a class="btn btn-primary btn-sm btn-flat" href="{{ route('roles.edit',$role->id) }}">  <i class="fa fa-pencil-square"></i> Edit</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm btn-flat']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>


{!! $roles->render() !!}

        @endslot
    @endcomponent

@endsection