@extends('Front.main')
@section('content')
    <section id="article-section" class="line">
        <div class="margin">
            <!-- ARTICLES -->
            <div class="s-12 l-9">
                <!-- ARTICLE 1 -->
                <article class="margin-bottom">
                    <div class="post-1 line">
                        <!-- image -->
                        <div class="s-12 l-11 post-image">
                            <img src="{{asset('images/news/' . \App\NewsModel::find($news->id)->img_url)}}" alt="Fashion">
                        </div>
                        <!-- date -->
                        <div class="s-12 l-1 post-date">
                            <p class="date">07</p>
                            <p class="month">mar</p>
                        </div>
                    </div>
                    <!-- text -->
                    <div class="post-text">
                        <h1>{{$news->title}}</h1>
                        <p>{!! $news->content !!}</p>
                    </div>
                </article>
                <!-- AD REGION -->
            </div>
            <!-- SIDEBAR -->
            <div class="s-12 l-3">
                <aside>
                    <!-- NEWS 1 -->
                    <img src="img/news1.jpg" alt="News 1">
                    <div class="aside-block margin-bottom">
                        <h3>This is the first news on blog</h3>
                        <p>Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
                    </div>
                    <!-- AD REGION -->
                    <div class="advertising margin-bottom">
                        <img src="img/banner.jpg" alt="ad banner">
                    </div>
                    <!-- LATEST POSTS -->
                    <div class="aside-block margin-bottom">
                        <h3>Latest posts</h3>
                        <a class="latest-posts" href="post-1.html">
                            <h5>Free responsive template</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit...
                            </p>
                        </a>
                        <a class="latest-posts" href="post-2.html">
                            <h5>Amazing fashion blog</h5>
                            <p>
                                Ut wisi enim ad minim veniam, quis nostrud adipiscing...
                            </p>
                        </a>
                        <a class="latest-posts" href="post-3.html">
                            <h5>Nice minimalist design</h5>
                            <p>
                                Duis autem vemeu iriure dolor adipiscing elit, sed diam...
                            </p>
                        </a>
                        <a class="latest-posts" href="post-4.html">
                            <h5>With advertising regions</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit...
                            </p>
                        </a>
                        <a class="latest-posts" href="post-5.html">
                            <h5>And again - it's totally free!</h5>
                            <p>
                                Ut wisi enim ad minim veniam, quis nostrud adipiscing...
                            </p>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    @endsection
