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
                            {!!  Form::model($category, ['method' => 'PATCH','route' => ['admin.category.update', $category->id],'files' => true]) !!}

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Nama Category</label>
											{!! Form::text('category', null,array('class' => 'form-control'),'') !!}
											{{ ($errors->has('category')) ? $errors->first('category') : ''}}
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Type</label>
                                            {{ Form::select('type', ['Article' => 'Article', 'Events' => 'Events'],$category->type,['class'=>'form-control']) }}

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group" style="margin-top:22px">
                                            {!! Form::submit('Submit', array('class'=>'btn btn-info btn-fill pull-right')) !!}
                                        </div>
                                    </div>
                                <div class="clearfix">
                                </div>

                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
