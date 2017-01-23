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
                            {!!  Form::model($kategori, ['method' => 'PATCH','route' => ['admin.kategori.update', $kategori->id],'files' => true]) !!}

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Nama Category</label>
											{!! Form::text('nama', null,array('class' => 'form-control'),'') !!}
											{{ ($errors->has('nama')) ? $errors->first('nama') : ''}}
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
