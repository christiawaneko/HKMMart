@extends('Admin.Includes.master')
@section('content')
	  	<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-user">
                            <div class="image" >
                                <img src="{{ asset($article->image) }}" alt="..."/>
                            </div>

                            <div class="content">
                                <div class="container-fluid">
                                    <nav class="pull-left">
                                        @if ($article->approval == 'active')
                                            {{ Form::label($article->approval, null, ['class' => 'btn  btn-sm btn-primary disabled']) }} &nbsp
                                        @else
                                            {{ Form::label($article->approval, null, ['class' => 'btn  btn-sm btn-danger disabled']) }} &nbsp
                                        @endif
                                    </nav>
                                    <p class="copyright pull-right">
                                        @foreach ($article->category as $data)
                                            {{ Form::label($data['category'], null, ['class' => 'btn  btn-sm disabled']) }} &nbsp
                                        @endforeach
                                    </p>
                                </div>

                                <p class="typo-line text-center">

                                    <h1>{!! $article->title !!}</h1>
                                    <p> {!! $article->article !!} </p>
                                </p>
                            </div>
                            <div class="footer">
                               <hr>
                               <div class="stats">
                                   <i class="fa fa-user"></i> {{ $article->datauser->name }}
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
