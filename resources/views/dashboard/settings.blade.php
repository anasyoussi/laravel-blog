@extends('dashboard.layouts.layout')
@section('content')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">خانه</li>
        <li class="breadcrumb-item"><a href="#">مدیریت</a>
        </li>
        <li class="breadcrumb-item active">داشبرد</li>

        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
                <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp;داشبرد</a>
                <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;تنظیمات</a>
            </div>
        </li>
    </ol>

    <!-- Container-fluid -->
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="" method="" enctype="multipart/form-data">
                <div class="row"><!-- Row -->
                    <div class="card"><!-- card -->
                        <div class="card-header">
                            <strong>{{__('words.settings')}}</strong>
                        </div>
                        <div class="card-block"><!-- card-block --> 
                            <div class="form-group col-md-6">
                                <label>logo</label>
                                <input type="file" name="logo" class="form-control" placeholder="Enter Email..">
                            </div>
                            <div class="form-group col-md-6">
                                <label>favicon</label>
                                <input type="file" name="favicon" class="form-control"
                                    placeholder="favicon" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>facebook</label>
                                <input  type="text" name="facebook" class="form-control"
                                    placeholder="facebook" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>instagram</label>
                                <input  type="text" name="instagram" class="form-control"
                                    placeholder="instagram" value="instagram">
                            </div>
                            <div class="form-group col-md-6">
                                <label>phone</label>
                                <input type="text" name="phone" class="form-control"
                                    placeholder="phone" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>email</label>
                                <input type="text" name="email" class="form-control"
                                    placeholder="email" value="">
                            </div>
                        </div><!-- ./card-block -->
                    </div><!-- ./card -->

                    <!-- Translations -->
                    <div class="card"><!-- card -->
                        <div class="card-header">
                            <strong>{{__('words.translations')}}</strong>
                        </div>
                        <div class="card-block"><!-- card-block -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a href="" class="nav-link active" id="ar-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">Arab</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link" id="en-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">English</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link" id="fr-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">French</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane mt-3 fadeshow active in" id="" role="tabpanel" aria-labelledby="ar-tab"><br>
                                        <div class="form-group mt-3 col-md-12">
                                            <label for="">ar</label>
                                            <input type="text" name="" class="form-control" placeholder="" value="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">en</label>
                                            <textarea name="" class="form-control" cols="30" rows="10"></textarea>
                                        </div>

                                        <div class="form-group col-md-12">
                                                <label>fr</label>
                                                <input type="text"name=" " class="form-control"   value=" ">
                                        </div>

                                    </div>
                                </div>
                        </div><!-- ./card-block -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
                         </div>
                    </div><!-- ./card --> 
                    <!-- ./Translations -->
                </div><!-- ./row -->
            </form>
        </div>
    </div>
    <!-- Container-fluid -->
@endsection