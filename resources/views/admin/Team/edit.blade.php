@extends('admin.layouts.master')
@section('title')
    Edit teams
@endsection

@section('page-header')
    <section class="content-header">
        <h1>
            Edit teams
            <small></small>
        </h1>

    </section>
@endsection

@section('content')

    <section class="content">
        <div class="row">
            <!-- right column -->
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit news </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <form class="form-horizontal" method="post" enctype="multipart/form-data"  action="{{url(LaravelLocalization::setLocale().'/admin/team/'.$teams->first()->id)}}">
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="patch">
                    <div class="box-body">





                        <div class="form-group">

                            <label for="name" class="col-sm-4 control-label">Name</label>

                            <div class="col-sm-4">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Title News" value="{{ $teams->first()->name }}">
                            </div>

                        </div>




                        <div class="form-group">

                            <label for="name" class="col-sm-4 control-label">job name</label>

                            <div class="col-sm-4">
                                <input type="text" name="jobname" class="form-control" id="name" placeholder="Title News" value="{{ $teams->first()->name }}">
                            </div>

                        </div>








                        <div class="form-group">

                        <label for="username" class="col-sm-4 control-label">image</label>

                            <div class="col-sm-4 {{ $errors->has('username') ? ' has-error' : '' }}">
                                <input type="file" name="image" class="form-control" id="image" placeholder="image" value="{{ $teams->first()->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('image') }}</strong>
                        </span>
                                @endif
                            </div>

                        </div>




                                                <div class="form-group">

                                                    <label for="email" class="col-sm-4 control-label"> description </label>

                                                    <div class="col-sm-4 {{ $errors->has('email') ? ' has-error' : '' }}">

                              <textarea  name="description" class="form-control" id="description" placeholder="description" >{{ $teams->first()->description}}</textarea>

                                                        @if ($errors->has('description'))
                                                            <span class="help-block">
                                              <strong>{{ $errors->first('description') }}</strong>
                                              </span>
                                                        @endif
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
