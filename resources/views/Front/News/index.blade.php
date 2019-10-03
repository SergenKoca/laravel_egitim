@extends('Front.main')
@section('content')
    <section id="article-section" class="line archive">
        <div class="margin">
            <!-- ARTICLES -->
            {{csrf_field()}}
            <div class="s-12 l-12">

               @foreach($news as $new)
                <article class="margin-bottom">
                    <div class="post-1 line">
                        <!-- image -->
                        <div class="s-12 l-11 post-image">
                            <a href="{{route('name_show_view',$new->id)}}"><img src="{{asset('images/news/' . \App\NewsModel::find($new->id)->img_url)}}" alt="Fashion"></a>
                        </div>
                        <!-- date -->
                        <div class="s-12 l-1 post-date">
                            @php
                                $mydate=new \Carbon\Carbon($new->created_at);
                                $day=$mydate->format('j');
                                $month =$mydate->format('M');
                            @endphp
                            <p class="date">{{$day}}</p>
                            <p class="month">{{$month}}</p>
                        </div>
                    </div>
                    <!-- text -->
                    <div class="post-text">
                        <a href="{{route('name_show_view',$new->id)}}">
                            <h2>{{$new->title}}</h2>
                        </a>
                        <p>
                           {{$new->content}}
                        </p>
                        <a class="continue-reading" href="{{route('name_show_view',$new->id)}}">Continue reading</a>
                    </div>
                </article>
                   @endforeach
            </div>
        </div>
    </section>
    @endsection
