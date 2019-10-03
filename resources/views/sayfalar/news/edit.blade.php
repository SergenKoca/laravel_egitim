@extends('sayfalar.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>News <small>Add</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <form role="form" class="form-horizontal form-label-left" action="{{route('name_edit_news',$news->id)}}" method="post" enctype="multipart/form-data">
                       {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%;" src="{{asset('images/news/'.\App\NewsModel::find($news->id)->img_url)}}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>New Image</h2>
                            <div class="col-sm-12">
                                <input type="file"   name="image" class="btn btn-default btn-sm" title="Upload New Image">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>New Title</h2>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="title" value="{{$news->title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>New Content</h2>
                            <div class="col-sm-12">
                                <textarea id="summernote" class="summernote" name="content" >
                                    {{$news->content}}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Edit/Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

