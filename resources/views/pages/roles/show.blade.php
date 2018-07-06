@extends('layouts.admin-app')
@section('content')
    @component('components.box',["type"=>'primary'])
        @slot('title')
            <i class="fa fa-ravelry">  Roles Permissions</i>
        @endslot
        @slot('body')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('roles.index') }}">
                        <i class="fa fa-arrow-left"></i> 
                        Back
                </a>
        </div>
    </div>
</div>
<br>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $role->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permissions:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="btn btn-flat bg-olive">{{ $v->name }}</label>
                @endforeach
            @endif
        </div>
    </div>
</div>
        @endslot
    @endcomponent

@endsection