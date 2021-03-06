@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>
        
                        <div class="panel-body">
                                {!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
                                {{ Form::bsText('name','',['placeholder' => 'Company Name']) }}
                                {{ Form::bsText('website', '', ['placeholder' => 'company website']) }}
                                {{ Form::bsText('email', '', ['placeholder' => 'Contact Email']) }}
                                {{ Form::bsText('phone', '', ['placeholder' => 'Contact phone']) }}
                                {{ Form::bsText('address', '', ['placeholder' => 'Business Address']) }}
                                {{ Form::bsTextArea('bio', '', ['placeholder' => 'About this business']) }}
                                {{ Form::bsSubmit('Submit',['class'=> 'btn btn-primary']) }}
                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>


</div>
    
@endsection