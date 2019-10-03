@extends('sayfalar.main')
@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Submenu <small>Add</small></h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <form class="form-horizontal form-label-left" action="{{route('name_create_sub_menu')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <h2>Menu Name</h2>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <select name="menu_id" class="form-control">
                                    <!-- option'un value değerini $menu->id yaparak seçilen menunu id'isini almış olduk
                                     ama kullanıcının gördüğü kısım ise $menu->title kısmı
                                     +Tarihe bir not düşün.-Tarih: ne bu tantana kardeşim :D-->
                                    @foreach($menuler as $menu)
                                            <option value="{{$menu->id}}">{{$menu->title}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Menu Title</h2>
                            <div class="col-sm-12">
                                <input id="title" name="title" type="text" class="form-control" placeholder="Menu Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Menu Content</h2>
                            <div class="col-sm-12">
                                <textarea id="summernote" name="content" class="summernote"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Menu Order</h2>
                            <div class="col-sm-12">
                                <input id="order" name="order" type="number" class="form-control" placeholder="New Order">
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

@endsection
