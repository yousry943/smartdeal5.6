@extends('admin.layouts.master')
@section('title')
Gallery
@endsection
@section('page-header')
    <section class="content-header">
        <h1>
Gallery      <small></small></h1>

    </section>
@endsection

@section('content')


    <section class="content">

      <div class="row">
      <div class="col-md-12">


              <a href="{{url('/admin/Gallery/create')}}" class="btn btn-primary pull-right margin-bottom">
                  <i class="fa fa-plus"></i>
Add Gallery                </a>


      </div>
      </div>


        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">
                        </h3>
                        {{--<div class="box-tools">--}}
                            {{--<div class="input-group input-group-sm" style="width: 150px;">--}}
                                {{--<input type="text" name="table_search" class="form-control pull-right"--}}
                                       {{--placeholder="Search">--}}

                                {{--<div class="input-group-btn">--}}
                                    {{--<button type="submit" class="btn btn-default">--}}
                                        {{--<i class="fa fa-search"></i></button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">


                            <tr>
                              <th>   name      </th>
                              <th>   image      </th>
                              <th>   language      </th>
                              <th>   categories      </th>






                            </tr>
                            @foreach($Gallerys as $Gallery)
                                <tr>

                                    <td>{{$Gallery->name}}</td>
                                    <td><a href="{{url($Gallery->image)}} ">  <img style="height:90px;max-width:200px;width:"  src="{{url('/uplodes/newsphoto/'.$Gallery->image)}}" alt="Italian Trulli"> {{$Gallery->image}}</a> </td>
                                      <td>{{$Gallery->get_language()->first()->name}}</td>
                                      <td>{{$Gallery->get_categories()->first()->name}}</td>




                                    <td>


                                            <a href="{{url('/admin/Gallery/'.$Gallery->id.'/edit')}}" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a>



                                                <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <p>You are about to delete one track, this procedure is irreversible.</p>
                                                                    <p>Do you want to proceed?</p>
                                                                    <p class="debug-url"></p>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                    <a class="btn btn-danger btn-ok">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




<button class="btn btn-danger" class="btn btn-danger btn-circle"   data-href="{{url('admin/Gallery/'.$Gallery->id.'/delete')}}" data-toggle="modal" data-target="#confirm-delete">
  <i class="fa fa-trash-o"></i>  Delete

</button>
                             </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">

                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>


        <br>

    </section>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/bower_components/lightbox2-master/lightbox.css')}}">
@endsection

@section('js')

    <script src="{{ asset('assets/bower_components/lightbox2-master/lightbox.js')}}"></script>

    <script>
          $('#confirm-delete').on('show.bs.modal', function(e) {
              $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

              $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
          });
      </script>
@endsection
