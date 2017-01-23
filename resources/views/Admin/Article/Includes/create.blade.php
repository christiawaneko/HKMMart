@extends('Admin.Includes.master')
@section('content')
    <div class="col-md-12">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Create Post</h4>
                        </div>
                        <div class="content">
							{!! Form::open(array('url'=>'admin/article','method'=>'POST', 'files'=>true)) !!}
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Title</label>
											{!! Form::text('title', null,array('class' => 'form-control'),'') !!}
											{{ ($errors->has('title')) ? $errors->first('title') : ''}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Article</label>
                                            {{ Form::textarea('article',null, array('class' => 'form-control','id'=>'tinymce')) }}
                                            {{($errors->has('article')) ? $errors->first('article') : ''}}
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            {!! Form::file('image', array('class'=>'btn btn-info')) !!}
											{{($errors->has('image')) ? $errors->first('image') : ''}}
                                        </div>
                                    </div>
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                </div>
                                {!! Form::submit('Submit', array('class'=>'btn btn-info btn-fill pull-right')) !!}
                                <div class="clearfix">

                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
