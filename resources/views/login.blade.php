@extends('master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">{{ trans('msg.login') }}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="{{ route('index') }}">{{ trans('msg.home') }}</a> / 
                <span>{{ trans('msg.login') }}</span>
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
                    <li>{{  $error  }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::open(array('route' => 'page.login', 'method' => 'POST')) !!}
            <div class="row">
                <div class="col-sm-3"></div>
                    @if(Session::has('flag'))
                        <div class="alert alert-{{ Session::get('flag')}}">
                            {{ Session::get('message')}} 
                        </div>
                    @endif   
                <div class="col-sm-6">
                    <div>
                        <h4>{{ trans('msg.login') }} </h4>
                        <div class="space20">&nbsp;</div>                       
                        <div>   
                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('msg.username')]) }}                        
                        </div>
                        <div >  
                            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => trans('msg.password')]) }}                  
                        </div>
                        <div class="text-center">
                            {{ Form::submit(trans('msg.login'), ['class' => 'btn btn-primary'])}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        {!! Form::close() !!}
    </div> 
</div>
@endsection
