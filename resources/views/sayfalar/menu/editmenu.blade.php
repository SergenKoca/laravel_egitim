@extends('sayfalar.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Menu <small>Edit</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" action="{{route('name_post_edit_name',['id'=>$menu->id])}}" method="post" enctype="multipart/form-data">
                           {{csrf_field()}}
                            <div class="form-group">
                                <h2>Menu Title</h2>
                                <div class="col-sm-12">
                                    <input value="{{$menu->title}}" id="title" name="title" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <h2>Menu Content</h2>
                                <div class="col-sm-12">
                                    <textarea name="content" id="summernote" class="summernote">
                                        {{$menu->content}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <h2>Menu Order</h2>
                                <div class="col-sm-12">
                                    <input value="{{$menu->order}}" id="order" name="order" type="number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

