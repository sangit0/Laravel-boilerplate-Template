@extends('layouts.admin-app')


@section('content')
<div class="row">
<div class="col-md-10">
    @role('Admin')
        <a class="btn btn-primary" href="{{ route('users.index') }}"> 
            <i class="fa fa-arrow-left"></i> Back
        </a>
    @endrole
    <br>
    <br>
<div class="box box-widget widget-user">
        <div class="widget-user-header bg-olive-active">
          <h3 class="widget-user-username"> {{ $user->name }}</h3>
          <h5 class="widget-user-desc">            
              {{ $user->email }}            
         </h5>
         <strong>Roles:</strong>
         @if(!empty($user->getRoleNames()))
             @foreach($user->getRoleNames() as $v)
                 <label class="badge label-info">{{ $v }}</label>
             @endforeach
         @endif
        </div>
        
        <div class="widget-user-image">
          <img class="img-circle" src="{{ asset('images/avatar.png')}}" alt="User Avatar">
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-4 border-right">
              <div class="description-block">
                    <span class="description-text">Created at</span>
                <h5 class="description-header">{{Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</h5>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4 border-right">
              <div class="description-block">
                    <span class="description-text">Updated at</span>
                    <h5 class="description-header">{{Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</h5>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4">
              <div class="description-block">
                <span class="description-text"> Active</span>
                <h5 class="description-header">
                    @if ($user->active==true)
                    <label style="margin-bottom:0px;"class="switch"><a href="{{ route('users.active',$user->id) }}">
                            <input id="switchMenu" type="checkbox" checked><span class="slider round"></span></a>
                            </label>
                    @else
                    <label style="margin-bottom:0px;"class="switch"><a href="{{ route('users.active',$user->id) }}">
                            <input id="switchMenu" type="checkbox"><span class="slider round"></span></a>
                            </label>
                    @endif
                </h5>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        @if(!empty($user->getPermissionsViaRoles()))
        <h3>Permissions</h3>
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Created at</td>
                </tr>
            </thead>
            <tbody>
             @foreach($user->getPermissionsViaRoles() as $v)
                <tr>
                    <td>{{ $v->name }}</td>
                    <td>{{ $v->created_at }}</td>
                </tr>
             @endforeach
            </tbody>
        </table>     
         @endif
        </div>

      </div>
    </div>
</div>

@endsection