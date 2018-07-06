@extends('layouts.admin-app')
@section('content')
    @component('components.box',["type"=>'primary'])
        @slot('title')
            <i class="fa fa-user">  Users Management</i>
        @endslot
        @slot('body')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <a class="btn bg-olive" href="{{ route('users.create') }}"> 
                <i class="fa fa-user-plus">
                </i>
                Create New User
            </a>
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
   <th>Email</th>
   <th>Active</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
            @if ($user->active==true)
            <label style="margin-bottom:0px;"class="switch"><a href="{{ route('users.active',$user->id) }}">
                    <input id="switchMenu" type="checkbox" checked><span class="slider round"></span></a>
                    </label>
            @else
            <label style="margin-bottom:0px;"class="switch"><a href="{{ route('users.active',$user->id) }}">
                    <input id="switchMenu" type="checkbox"><span class="slider round"></span></a>
                    </label>
            @endif
    </td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge label-warning">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn bg-olive btn-sm btn-flat" href="{{ route('users.show',$user->id) }}"> <i class="fa fa-eye"></i> Show</a>
       <a class="btn btn-primary btn-sm btn-flat" href="{{ route('users.edit',$user->id) }}"> <i class="fa fa-pencil"></i> Edit</a>

 
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm btn-flat']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>

{!! $data->render() !!}
        @endslot
    @endcomponent
@endsection