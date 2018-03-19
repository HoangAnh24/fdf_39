@extends('master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">{{ trans('msg.signup') }}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="{{ route('index') }}">{{ trans('msg.home') }}</a> / 
                <span>{{ trans('msg.signup') }}</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>  
<div class="container">
    <div id="content">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
        @endif
        {!! Form::open(array('route' => 'page.signup', 'method' => 'POST')) !!}
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h4>{{ trans('msg.signup') }}</h4>
                    <div class="space20">&nbsp;</div>                       
                    <div>
                        {{ Form::text('name',null, ['class' => 'form-control', 'placeholder' => trans('msg.username')]) }}
                    </div>
                    <div>
                        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => trans('msg.email')]) }}
                    </div>
                    <div>
                        {{ Form::text('address',null, ['class' => 'form-control', 'placeholder' => trans('msg.address')]) }}
                    </div>
                    <div>
                        {{ Form::text('phone',null, ['class' => 'form-control', 'placeholder' => trans('msg.phone')]) }}
                    </div>
                    <div>
                        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => trans('msg.password')]) }}
                    </div>
                    <div>
                        {{ Form::password('password1', ['class' => ' form-control', 'placeholder' => trans('msg.resetpassword')]) }}
                    </div>
                    <div>
                        {{ Form::submit(trans('msg.signup'), ['class' => 'btn btn-primary','id' => 'btn-dk']) }}
                    </div>                       
                </div>
                <div class="col-sm-3"></div>
            </div>
        {!! Form::close() !!}
    </div> 
</div> 
@endsection
