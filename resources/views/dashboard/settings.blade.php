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
            <form action="{{ route('dashboard.settings.update', ['setting' => $setting]) }}" method="POST" enctype="multipart/form-data">
                @csrf 
                     <!-- Validation Error Msg -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <!-- Validation Error Msg --> 
                <div class="row"><!-- Row -->
                    <div class="card"><!-- card -->
                        <div class="card-header">
                            <strong>{{__('words.settings')}}</strong>
                        </div> 
                        <div class="card-block"><!-- card-block --> 

                            <div class="form-group col-md-6">
                                <label>logo</label>
                                <img src="{{ asset($setting->logo) }}" alt="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>favicon</label>
                                <img src="{{ asset($setting->favicon) }}" alt="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>logo</label>
                                <input type="file" name="logo" class="form-control" 
                                    placeholder="logo">
                            </div>

                            <div class="form-group col-md-6">
                                <label>favicon</label>
                                <input type="file" name="favicon" class="form-control"
                                    placeholder="favicon" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>facebook</label>
                                <input  type="text" name="facebook" class="form-control"
                                    placeholder="facebook" value="{{ $setting->facebook }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>instagram</label>
                                <input  type="text" name="instagram" class="form-control"
                                    placeholder="instagram" value="{{ $setting->instagram }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>phone</label>
                                <input type="phone" name="phone" class="form-control"
                                    placeholder="phone" value="{{ $setting->phone }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>email</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="email" value="{{ $setting->email }}">
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
                                    @foreach (config('app.languages') as $key=>$lang)
                                        <li class="nav-item">
                                            <a href="#{{$key}}" class="nav-link @if ($loop->index = 0)
                                                active
                                            @endif" id="ar-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">{{$lang}}</a>
                                        </li>
                                    @endforeach   
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                @foreach (config('app.languages') as $key=>$lang) 
                                    <div class="tab-pane mt-3 fadeshow @if ($loop->index = 0)
                                            active
                                    @endif in" id="{{$key}}" role="tabpanel" aria-labelledby="ar-tab"><br>
                                        <div class="form-group mt-3 col-md-12">
                                            <label for="">{{ __('words.title') }} - {{$lang}}</label>
                                            <input type="text" name="{{ $key }}[title]" class="form-control" placeholder="title" value="{{ $setting->translate($key)->title }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">{{ __('words.content') }}</label>
                                            <textarea name="{{ $key }}[content]" class="form-control" cols="30" rows="10">{{ $setting->content }}</textarea>
                                        </div>

                                        <div class="form-group col-md-12">
                                                <label>{{ __('words.address') }}</label>
                                                <input type="text" name="{{ $key }}[address]" class="form-control" value="{{ $setting->address }}">
                                        </div> 
                                    </div>
                                @endforeach
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