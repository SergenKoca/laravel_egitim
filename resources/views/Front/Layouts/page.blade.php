@extends('Front.main')
@section('content')
    <section id="article-section" class="line">
        <div class="margin">
            <!-- ARTICLES -->
            <div class="s-12 l-12">
                <!-- ARTICLE 1 -->
                <article class="margin-bottom">
                    <div class="post-1 line">
                        <!-- image -->
                        <div class="s-12 l-11 post-image">
                            <img src="img/post1-big.jpg" alt="Fashion">
                        </div>
                        <!-- date -->
                        <div class="s-12 l-1 post-date">
                            <p class="date">07</p>
                            <p class="month">mar</p>
                        </div>
                    </div>
                    <!-- text -->
                    <div class="post-text">
                        <h1>{{$menu->title}}</h1>
                    </div>
                </article>
            </div>

            </div>
        </div>
    </section>
    @endsection

