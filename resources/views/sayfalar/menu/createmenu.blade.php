@extends('sayfalar.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Menu <small>Add</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" action="#" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <h2>Menu Title</h2>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Menu Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <h2>Menu Content</h2>
                                <div class="col-sm-12">
                                    <textarea id="summernote" class="summernote"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <h2>Menu Order</h2>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" placeholder="New Order">
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
