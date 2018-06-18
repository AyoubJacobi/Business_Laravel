
@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Edite Listing <a href="/home" class="pull-right btn btn-default btn-xs">Go back</a></div>
        
                        <div class="panel-body">
                                {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) !!}
                                {{ Form::bsText('name',$listing->name,['placeholder' => 'Company Name']) }}
                                {{ Form::bsText('website', $listing->website, ['placeholder' => 'company website']) }}
                                {{ Form::bsText('email', $listing->email, ['placeholder' => 'Contact Email']) }}
                                {{ Form::bsText('phone', $listing->phone, ['placeholder' => 'Contact phone']) }}
                                {{ Form::bsText('address', $listing->address, ['placeholder' => 'Business Address']) }}
                                {{ Form::bsTextArea('bio', $listing->bio, ['placeholder' => 'About this business']) }}
                                {{Form::hidden('_method', 'PUT')}}
                                {{ Form::bsSubmit('Submit',['class'=> 'btn btn-primary']) }}
                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>


</div>
    
@endsection