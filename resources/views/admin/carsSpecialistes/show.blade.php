@extends('layouts.admin')
@section('title',' | عرض معلومات المشخصية ')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Style -->
    @include('partials._zoom')
    <!-- /.Style -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#child" data-toggle="tab">البيانات الشخصية</a></li>
                                </ul>
                                <div class="tab-content">

                                    <div class="active tab-pane" id="child">
                                        <div class="post">
                                            <div class="text-center">
                                                @if($carsspecialiste->image)
                                                    <input type="checkbox" id="zoomCheck">
                                                    <label for="zoomCheck">
                                                            <img src="{{ asset('storage/specialistes/'.$carsspecialiste->image) }}" class="profile-user-img img-fluid img-circle">
                                                    </label>
                                                @else
                                                        <img class="profile-user-img img-fluid img-circle"
                                                             src="{{ asset('dist/img/teacher.png')}}"
                                                             alt="صورة المشخص">
                                                    @endif
                                            </div>
                                              <br>
                                            <h3 class="profile-username text-center childname">{{$carsspecialiste->nom}} {{$carsspecialiste->prenom}}</h3>
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>العمر:</b> <a>{{$calculeAgeSpc}} {{"سنة"}}</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b> البريد الالكتروني:</b> <a>{{$carsspecialiste->numTel}}</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b> رقم الهاتف:</b> <a>{{$carsspecialiste->email}}</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b> التخصص:</b> <a>{{$carsspecialiste->specialite}}</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b> العنوان:</b> <a>{{$carsspecialiste->address}}</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b> رقم السري:</b> <a>{{$carsspecialiste->motpass}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                        <!-- /.card -->
                    </div>
                    <div class="col-md-4" >

                        <div class="col-md-12">
                            <div class=" card-primary">
                                <div class="card bg-light mb-3" style="max-width: 18rem;margin-right: 70px;">
                                    <div class="card-header">
                                        <div class="well">
                                            <div class="form-group" >
                                                <dl class="dl-horizontal" >
                                                    <dt >التاريخ :</dt>
                                                    <dd>{{ date('M j, Y h:ia', strtotime($carsspecialiste->created_at)) }}</dd>
                                                </dl>
                                            </div>

                                            <dl class="dl-horizontal" >
                                                <dt>اخر تعديل:</dt>
                                                <dd >{{ date('M j, Y h:ia', strtotime($carsspecialiste->updated_at)) }}</dd>
                                            </dl>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    {!! Html::linkRoute('admin.carsSpecialistes.edit', 'تعديل', array($carsspecialiste->id_carsspecialiste), array('class' => 'btn btn-primary btn-block')) !!}
                                                </div>
                                                <div class="col-sm-6">
                                                    {!! Html::linkRoute('admin.carsSpecialistes.destroy', 'حذف', array($carsspecialiste->id_carsspecialiste), array('class' => 'btn btn-danger btn-block')) !!}
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                {!! Html::linkRoute('admin.carsSpecialistes.index', 'رجوع>>',[], array('class' => 'btn btn-default btn-block btn-h1-spacing')) !!}
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div></div></div></section>


        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>

    </div>


@endsection
