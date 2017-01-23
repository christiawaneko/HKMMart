@extends('Admin.Includes.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <nav class="pull-left">
                    <h4 class="title">Kategori </h4>
                    <p class="kategori">Untuk Posting Kategori ...</p>
                </nav>
                <nav class="pull-right"><br>
                    <a href="{{ route('admin.kategori.create') }}" class="btn btn-info btn-fill pull-right">Tambah Kategori Baru</a>
                </nav>
                <br>
            </div>

            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th width="1%" >No</th>
                        <th width="40%" >Nama Kategori</th>
                        <th width="30%" >Action</th>
                    </thead>
                      <?php $x = 1; ?>
                    <tbody>
                        @foreach($kategori as $data)
                          {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('admin.kategori.destroy', $data->id))) !!}
                        <tr>
                            <td>{{$x++}}</td>
                            <td>{{$data->nama}}</td>
                            <td>
                                <a href="{{ url('admin/kategori') }}/{{ $data->id }}/edit" class="btn" >
                                    <i class="ti-pencil " style="font-size: 20px; color:red;"></i>

                                </a>
                                {!! Form::submit("Delete", array('class' => 'btn')) !!}
                            </td>
                        </tr>
                         {!! Form::close() !!}
                        @endforeach
                    </tbody>
                </table>
                <nav class="pull-right">
                  {!! $kategori->links() !!}
                </nav>

            </div>
        </div>
    </div>
@stop
