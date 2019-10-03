@extends('Front.main')
@section('content')
    <section id="home-section" class="line">
        <div class="margin">
            <!-- ARTICLES -->
            <div class="s-12 l-12">
                <div class="slider-container">
                    <div class="flexbox-slider flexbox-slider-1">
                        @foreach($news as $new)
                        <div class="flexbox-slide">
                            <img src="{{asset('images/news/' . \App\NewsModel::find($new->id)->img_url)}}" alt="Slide Image">
                            <div class="text-block">
                                <h3>{{$new->title}}</h3>
                                <div class="text">
                                    <p>{{$new->content}}</p>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
                <!-- ARTICLE 1 -->

                <!-- ARTICLE 2 -->

                <!-- ARTICLE 3 -->

                <!-- ARTICLE 4 -->

                <!-- ARTICLE 5 -->
            </div>
            <!-- SIDEBAR -->
        </div>
    </section>
    @endsection
