@extends('admin.layouts.master')
@section('title')
    add Gallery
@endsection

@section('page-header')
    <section class="content-header">
        <h1>
            add Gallery
            <small></small>
        </h1>

    </section>
@endsection
<script src="{{ asset('editor/build/jodit.js')}}"></script>
<script src="{{ asset('editor/js/sample.js')}}"></script>
<script src="{{ asset('editor/build/jodit.js')}}"></script>

	<link rel="stylesheet" type="text/css" href="{{ asset('editor/app.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('editor/build/jodit.min.css')}}" />

@section('content')

    <section class="content">
        <div class="row">
            <!-- right column -->
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">add Gallery </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <form class="form-horizontal" method="post" enctype="multipart/form-data"  action="{{url(LaravelLocalization::setLocale().'/admin/Gallery')}}">
                        {{csrf_field()}}
                    <div class="box-body">





                        <div class="form-group">

                            <label for="name" class="col-sm-4 control-label">name</label>

                            <div class="col-sm-4">
                                <input type="text" name="name" class="form-control" id="name" placeholder="name" value="{{ old('name') }}">
                            </div>

                        </div>





                                                <div class="form-group">

                                                <label for="username" class="col-sm-4 control-label">image</label>

                                                    <div class="col-sm-4 {{ $errors->has('username') ? ' has-error' : '' }}">
                                                        <input type="file"   name="image" class="form-control" id="image" placeholder="image" value="{{ old('image') }}">
                                                        @if ($errors->has('image'))
                                                            <span class="help-block">
                                                <strong>{{ $errors->first('image') }}</strong>
                                                </span>
                                                        @endif
                                                    </div>

                                                </div>






                                                <div class="form-group">
                                          <label for="category" class="col-sm-4 control-label">language</label>
                                          <div class="col-sm-4">
                                          <select name="language" id="language" class="select2 form-control " >

                                          @foreach($languages as $language)
                                                 <option value="{{$language->id}}">{{$language->name}}</option>
                                          @endforeach
                                          </select>
                                          </div>
                                          </div>




                                                                       <div class="form-group">
                                                        <label for="category" class="col-sm-4 control-label">Gallery categorys</label>
                                                        <div class="col-sm-4">
                                                            <select name="category" id="category" class="select2 form-control " >
                                                                @foreach($categorys as $category)
                                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>






































                    </div>




                    <div class="box-footer">
                    <button type="submit" class="btn btn-info center-block">save</button>
                    </div>

                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection

@section('css')

    <link rel="stylesheet" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('js')

    <script src="{{ asset('assets/bower_components/select2/dist/js/select2.min.js')}}"></script>


    <script>
        $('.select2').select2()
    </script>

    <script>
      const editor = Jodit.make('#editor' ,{
        uploader: {
          url: 'https://xdsoft.net/jodit/connector/index.php?action=fileUpload'
        },
        filebrowser: {
          ajax: {
            url: 'https://xdsoft.net/jodit/connector/index.php'
          }
        }
      });
    </script>
@endsection
