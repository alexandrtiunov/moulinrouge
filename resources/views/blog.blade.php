@extends('layouts.main')

@section('title')
    <title>{{$title}}</title>
@stop

@section('slider')

@stop

@section('content')

    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 main-wrap">
                    <div class="main-content">
                        <div class="posts masonry">
                            <div class="posts-wrap masonry-wrap posts-layout-masonry row">
                                @foreach($articles as $article)
                                    @if($article->status == 1)
                                <article class="masonry-item col-md-4 col-sm-6 hentry">
                                    <div class="hentry-wrap">
                                        <div class="blog-img entry-featured">
                                            <a href="{{action('BlogController@detail', $article['short_name'])}}">
                                                <img src="{{URL::to('/img/blog-photo/' . $article['short_name']. '/' . $article['img_path'])}}" alt="{{$article['title']}}"/>
                                            </a>
                                        </div>
                                        <div class="entry-info">
                                            <div class="entry-header">
                                                <h2 class="entry-title">
                                                    <a href="{{action('BlogController@detail', $article['short_name'])}}" title="{{$article['title']}}">
                                                        {{mb_strimwidth($article['title'], 0, 30, '...')}} </a>
                                                </h2>
                                            </div>
                                            <div class="text entry-content">
                                                {{htmlspecialchars_decode(mb_strimwidth($article['text'], 0, 80, "..."), ENT_HTML5)}}
                                            </div>
                                            <div class="entry-meta icon-meta">
														<span class="meta-date">
															Дата:
															<time datetime="2015-08-11T06:27:49+00:00">
																{{$article['created_at']}}
															</time>
														</span>
                                                <span class="meta-author">
															Автор:
															<a href="#">{{$article->user->name}}</a>
														</span>
                                                <span class="meta-category">
															Category:
															<a href="#">Aliquam</a>, <a href="#">Nunc</a>
														</span>
                                            </div>
                                            <div class="readmore-link">
                                                <a href="{{action('BlogController@detail', $article['short_name'])}}">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop