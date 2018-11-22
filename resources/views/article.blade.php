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
                <div class="col-md-9 main-wrap">
                    <div class="main-content">
                        <article class="hentry">
                            <div class="hentry-wrap">
                                <div class="entry-featured">
                                    <img width="700" height="450" src="{{URL::to('/img/blog-photo/' . $article['short_name']. '/' . $article['img_path'])}}" alt="{{$article['title']}}" alt="Blog-1"/>
                                </div>
                                <div class="entry-header">
                                    <h1 class="entry-title">{{$article->title}}</h1>
                                </div>
                                <div class="entry-content">
                                    <p class="text1">
                                        {{htmlspecialchars_decode($article->text)}}
                                    </p>
                                    @foreach($resources as $resource)
                                        @if($resource->blog_id == $article->id)
                                            <p style="text-align: center;">
                                                <img src="{{URL::to('/img/blog-photo/' . $article['short_name']. '/article-photo/' . $resource['img_path'])}}" alt="{{$article['title']}}" alt="blog-13" width="500" height="500"/>
                                            </p>
                                        @endif
                                    @endforeach
                                    <div class="entry-meta icon-meta">
												<span class="meta-date">
													Дата публикаци:
													<time datetime="2015-08-11T06:27:49+00:00">{{$article->created_at}}</time>
												</span>
                                        <span class="meta-author">
													Автор:
													<a href="#">{{$article->user->name}}</a>
												</span>
                                        <span class="meta-category">
													Category:
													<a href="#">Aliquam</a>, <a href="#">Nunc</a>
												</span>
                                        <span class="meta-comment">
													<a href="#">0 Комментари</a>
												</span>
                                    </div>
                                </div>
                                <div class="entry-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="entry-tags">
                                                <a href="#">Dolor</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="share-links">
                                                <div class="share-icons">
															<span class="facebook-share">
																<a href="#" title="Share on Facebook">
																	<i class="fa fa-facebook"></i>
																</a>
															</span>
                                                    <span class="twitter-share">
																<a href="#" title="Share on Twitter">
																	<i class="fa fa-twitter"></i>
																</a>
															</span>
                                                    <span class="google-plus-share">
																<a href="#" title="Share on Google +">
																	<i class="fa fa-google-plus"></i>
																</a>
															</span>
                                                    <span class="linkedin-share">
																<a href="#" title="Share on Linked In">
																	<i class="fa fa-linkedin"></i>
																</a>
															</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <nav class="post-navigation">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="prev-post">
                                        <span>Previous article </span>
                                        <a href="#">Summer Classics in Positano</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="next-post">
                                        <span>Next article </span>
                                        <a href="#">Monogrammed Speedy in Tow</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <div id="comments" class="comments-area">
                            <div class="title-sep-wrap commentst-title">
                                <h3 class="title-sep-text">2 Comments </h3>
                            </div>
                            <ol class="comment-list">
                                <li class="comment">
                                    <div class="comment-wrap">
                                        <div class="comment-img">
                                            <img alt="" src="http://placehold.it/60x60" height="60" width="60"/>
                                        </div>
                                        <article class="comment-block">
                                            <header class="comment-header">
														<span class="comment-author">admin
															<span class="ispostauthor">Author </span>
														</span>
                                                <span class="pull-right">
															<a class="comment-reply" href="#">Reply</a>
														</span>
                                                <div class="comment-meta">
                                                    <time datetime="2014-09-14T13:14:27+00:00">
                                                        September 14, 2014 at 1:14 pm
                                                    </time>
                                                </div>
                                            </header>
                                            <div class="comment-content">
                                                Nam turpis purus, tristique quis magna ac, imperdiet semper eros. Vivamus rutrum sapien leo, at venenatis risus lacinia sed.
                                            </div>
                                        </article>
                                    </div>
                                    <ol class="children">
                                        <li class="comment">
                                            <div class="comment-wrap">
                                                <div class="comment-img">
                                                    <img alt="" src="http://placehold.it/60x60" height="60" width="60"/>
                                                </div>
                                                <article class="comment-block">
                                                    <header class="comment-header">
																<span class="comment-author">admin
																	<span class="ispostauthor">Author </span>
																</span>
                                                        <span class="pull-right">
																	<a class="comment-reply" href="#">Reply</a>
																</span>
                                                        <div class="comment-meta">
                                                            <time datetime="2014-09-14T13:15:01+00:00">
                                                                September 14, 2014 at 1:15 pm
                                                            </time>
                                                        </div>
                                                    </header>
                                                    <div class="comment-content">
                                                        Nam turpis purus, tristique quis magna ac, imperdiet semper eros. Vivamus rutrum sapien leo, at venenatis risus lacinia sed.
                                                    </div>
                                                </article>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="comment">
                                    <div class="comment-wrap">
                                        <div class="comment-img">
                                            <img alt="" src="http://placehold.it/60x60" height="60" width="60"/>
                                        </div>
                                        <article class="comment-block">
                                            <header class="comment-header">
														<span class="comment-author">admin
															<span class="ispostauthor">Author </span>
														</span>
                                                <span class="pull-right">
															<a class="comment-reply" href="#">Reply</a>
														</span>
                                                <div class="comment-meta">
                                                    <time datetime="2014-09-14T13:14:27+00:00">
                                                        September 14, 2014 at 1:14 pm
                                                    </time>
                                                </div>
                                            </header>
                                            <div class="comment-content">
                                                Nam turpis purus, tristique quis magna ac, imperdiet semper eros. Vivamus rutrum sapien leo, at venenatis risus lacinia sed.
                                            </div>
                                        </article>
                                    </div>
                                </li>
                            </ol>
                            <div id="respond-wrap">
                                <div id="respond" class="comment-respond">
                                    <h3 class="comment-reply-title">
                                        <span>Leave a reply</span>
                                    </h3>
                                    <form class="comment-form">
                                        <div class="comment-notes">
													<span id="email-notes">
														Your email address will not be published.
													</span>
                                            Required fields are marked
                                            <span class="required">*</span>
                                        </div>
                                        <div class="row">
                                            <div class="comment-form-author col-sm-12">
                                                <input placeholder="Name *" id="author" name="author" type="text" class="form-control" value="" size="30"/>
                                            </div>
                                            <div class="comment-form-email col-sm-12">
                                                <input id="email" placeholder="Email *" name="email" type="text" class="form-control" value="" size="30"/>
                                            </div>
                                            <div class="comment-form-url col-sm-12">
                                                <input id="url" placeholder="Website" name="url" type="text" class="form-control" value="" size="30"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="comment-form-comment col-sm-12">
                                                <textarea placeholder="Comment" class="form-control" id="comment" name="comment" cols="45" rows="8"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-submit col-sm-12">
                                                <button name="submit" type="submit" id="submit" class="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sidebar-wrap">
                    <div class="main-sidebar">
                        <div class="widget widget-post-thumbnail">
                            <h4 class="widget-title"><span>Последние статьиt</span></h4>
                            <ul class="posts-thumbnail-list">
                                @foreach($articles as $article)
                                <li>
                                    <div class="posts-thumbnail-image">
                                        <a href="{{action('BlogController@detail', $article['short_name'])}}" title="{{$article['title']}}">

                                            <img width="300" height="300" src="{{URL::to('/img/blog-photo/' . $article['short_name']. '/' . $article['img_path'])}}" alt="{{$article['title']}}" alt="Blog-1"/>
                                        </a>
                                    </div>
                                    <div class="posts-thumbnail-content">
                                        <h4><a href="{{action('BlogController@detail', $article['short_name'])}}">{{$article->title}}</a></h4>
                                        <div class="posts-thumbnail-meta">
                                            <time datetime="2015-08-11T06:27:49+00:00">{{$article->created_at}}5</time>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop