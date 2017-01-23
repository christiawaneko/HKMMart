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
                            {!!  Form::model($article, ['method' => 'PATCH','route' => ['admin.article.update', $article->id],'files' => true]) !!}


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
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Category</label> <br>&nbsp &nbsp
                                                    <!-- <select id="multiselect" name="category[]" multiple="multiple">
                                                        @foreach($category as $data)
                                                            <option value="{{ $data->id }}">{{ $data->category }}</option>
                                                        @endforeach
                                                    </select> -->
                                                     {{ Form::select('category[]', array_pluck($category, 'category', 'id') ,
                                                      array_pluck($article->category,'id'),
                                                      array('id' => 'multiselect','multiple'=>'multiple')) }}
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Approval</label>
                                                    <!-- <select class="form-control" name="approval" >
                                                        <option value="active">Active</option>
                                                        <option value="inactive">InActive</option>
                                                    </select> -->
                                                    {{ Form::select('approval', ['active' => 'Active', 'inactive' => 'InActive'], $article->approval,array('class' => 'form-control')) }}
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                        <label>Creator</label> &nbsp &nbsp
                                                    {!! Form::text('creator_name', $article->datauser->name ,array('class' => 'form-control','readonly'=>'true'),'') !!}
                                                    {!! Form::hidden('creator', Auth::user()->id ,array('class' => 'form-control'),'') !!}
                                                    {{ ($errors->has('creator')) ? $errors->first('creator') : ''}}
                                                </div>
                                            </div>
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
