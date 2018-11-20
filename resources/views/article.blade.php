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
                                    {{--<p>--}}
                                        {{--<img class="alignleft" src="images/blog/thumb/blog_300x300.jpg" alt="blog-7" width="300" height="300"/>--}}
                                    {{--</p>--}}
                                    {{--<p>--}}
                                        {{--The fashion set stayed true to their roots this week, whether that be swirling around the interior of a river boat in floor-length Giambattista Valli, à la Bianca Brandolini D’Adda, louchely leaning against the scenery in innately covetable summer classics in Positano, as Lisa Love did, or heading for the beach in Louis Vuitton resort denim hot pants and monogrammed Speedy in tow, as Marie-Amélie Sauvé did (oh, the access!).--}}
                                    {{--</p>--}}
                                    {{--<p>&nbsp;</p>--}}
                                    {{--<p>&nbsp;</p>--}}
                                    {{--<p>&nbsp;</p>--}}
                                    {{--<h3>Bianca Brandolini</h3>--}}
                                    {{--<p>--}}
                                        {{--<strong>Natasha Poly</strong> took in the ocean breeze in Formentera in a voluminous caftan, while Caroline Trentini’s white tee, Vuitton skirt, and Stan Smiths in Sao Paulo were a decidedly more city-friendly take on early August style (and will certainly transition more easily into fall). And while we treasure these lazy, late summer days, fall—and its sartorial demands—is just around the corner: For inspiration, look no further than little North West’s latest wardrobe addition, a clutch of pint-sized Balmain blazers that will have the tot segueing into the season sans problème.--}}
                                    {{--</p>--}}
                                    {{--<p>&nbsp;</p>--}}
                                    @foreach($resources as $resource)
                                        @if($resource->blog_id == $article->id)
                                            <p style="text-align: center;">
                                                <img src="{{URL::to('/img/blog-photo/' . $article['short_name']. '/article-photo/' . $resource['img_path'])}}" alt="{{$article['title']}}" alt="blog-13" width="500" height="500"/>
                                            </p>
                                        @endif
                                    @endforeach
                                    {{--<p style="text-align: center;">--}}
                                        {{--<img src="images/blog/thumb/blog_500x500.jpg" alt="blog-15" width="500" height="500"/>--}}
                                    {{--</p>--}}
                                    {{--<h3>Aenean a auctor mi.</h3>--}}
                                    {{--<p>--}}
                                        {{--Cras feugiat luctus nulla vitae posuere. Suspendisse potenti. Morbi dignissim, leo non mollis ultricies, risus ipsum vulputate leo, quis rhoncus libero orci quis ex. Donec molestie convallis dictum. Praesent at dapibus massa. Ut placerat enim vitae porta rutrum. Nullam faucibus volutpat nunc vitae cursus. Suspendisse diam ipsum, ultricies vel posuere at, sodales et lorem. Nulla non ornare nisi, sed condimentum lorem. Morbi sed vehicula magna. Donec vitae ultricies velit, sit amet sollicitudin ligula.--}}
                                    {{--</p>--}}
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
                        {{--<div class="related-post">--}}
                            {{--<div class="related-post-title">--}}
                                {{--<h3><span>Related News</span></h3>--}}
                            {{--</div>--}}
                            {{--<div class="row related-post-items">--}}
                                {{--<div class="related-post-item col-md-4 col-sm-6">--}}
                                    {{--<div class="entry-featured">--}}
                                        {{--<a href="#">--}}
                                            {{--<img width="700" height="450" src="images/blog/blog_270x174.jpg" alt="Blog-9"/>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<h4 class="post-title">--}}
                                        {{--<a href="#">Late Summer Days</a>--}}
                                    {{--</h4>--}}
                                    {{--<div class="entry-meta icon-meta">--}}
												{{--<span class="meta-date">--}}
													{{--Date:--}}
													{{--<time datetime="2015-04-27T03:07:02+00:00">April 27, 2015</time>--}}
												{{--</span>--}}
                                        {{--<span class="meta-separator"> </span>--}}
                                        {{--<span class="meta-category">--}}
													{{--Category:--}}
													{{--<a href="#">Aliquam</a>, <a href="#">Nunc</a>, <a href="#">Praesent</a>--}}
												{{--</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="excerpt">--}}
                                        {{--<p>--}}
                                            {{--The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light...--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="readmore-link">--}}
                                        {{--<a href="#">Read More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="related-post-item col-md-4 col-sm-6">--}}
                                    {{--<div class="entry-featured">--}}
                                        {{--<a href="#">--}}
                                            {{--<img width="700" height="450" src="images/blog/blog_270x174.jpg" alt="Blog-5"/>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<h4 class="post-title">--}}
                                        {{--<a href="#">Vuitton skirt</a>--}}
                                    {{--</h4>--}}
                                    {{--<div class="entry-meta icon-meta">--}}
												{{--<span class="meta-date">--}}
													{{--Date:--}}
													{{--<time datetime="2015-04-27T03:07:02+00:00">August 11, 2015</time>--}}
												{{--</span>--}}
                                        {{--<span class="meta-separator"> </span>--}}
                                        {{--<span class="meta-category">--}}
													{{--Category:--}}
													{{--<a href="#">Cras</a>, <a href="#">Nunc</a>, <a href="#">Praesent</a>--}}
												{{--</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="excerpt">--}}
                                        {{--<p>--}}
                                            {{--The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light...--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="readmore-link">--}}
                                        {{--<a href="#">Read More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="related-post-item col-md-4 col-sm-6">--}}
                                    {{--<div class="entry-featured">--}}
                                        {{--<a href="#">--}}
                                            {{--<img width="700" height="450" src="images/blog/blog_270x174.jpg" alt="Blog-4"/>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<h4 class="post-title">--}}
                                        {{--<a href="#">Giambattista Valli</a>--}}
                                    {{--</h4>--}}
                                    {{--<div class="entry-meta icon-meta">--}}
												{{--<span class="meta-date">--}}
													{{--Date:--}}
													{{--<time datetime="2015-04-27T03:07:02+00:00">August 11, 2015</time>--}}
												{{--</span>--}}
                                        {{--<span class="meta-separator"> </span>--}}
                                        {{--<span class="meta-category">--}}
													{{--Category:--}}
													{{--<a href="#">Aliquam</a>, <a href="#">Nunc</a>, <a href="#">Praesent</a>--}}
												{{--</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="excerpt">--}}
                                        {{--<p>--}}
                                            {{--The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light...--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="readmore-link">--}}
                                        {{--<a href="#">Read More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
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
                        <div class="widget widget_categories">
                            <h4 class="widget-title"><span>Categories</span></h4>
                            <ul>
                                <li><a href="#">Aliquam</a> (6)</li>
                                <li><a href="#">Cras</a> (2)</li>
                                <li><a href="#">Nunc</a> (10)</li>
                                <li><a href="#">Praesent</a> (4)</li>
                            </ul>
                        </div>
                        <div class="widget widget-post-thumbnail">
                            <h4 class="widget-title"><span>latest post</span></h4>
                            <ul class="posts-thumbnail-list">
                                <li>
                                    <div class="posts-thumbnail-image">
                                        <a href="blog-detail.html">
                                            <img width="300" height="300" src="images/blog/thumb/blog_70x70.jpg" alt="Blog-1"/>
                                        </a>
                                    </div>
                                    <div class="posts-thumbnail-content">
                                        <h4><a href="blog-detail.html">Monogrammed Speedy in Tow</a></h4>
                                        <div class="posts-thumbnail-meta">
                                            <time datetime="2015-08-11T06:27:49+00:00">August 11, 2015</time>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="posts-thumbnail-image">
                                        <a href="blog-detail.html">
                                            <img width="300" height="300" src="images/blog/thumb/blog_70x70.jpg" alt="Blog-2"/>
                                        </a>
                                    </div>
                                    <div class="posts-thumbnail-content">
                                        <h4><a href="blog-detail.html">Summer Classics in Positano</a></h4>
                                        <div class="posts-thumbnail-meta">
                                            <time datetime="2015-08-11T06:27:49+00:00">August 11, 2015</time>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="posts-thumbnail-image">
                                        <a href="blog-detail.html">
                                            <img width="300" height="300" src="images/blog/thumb/blog_70x70.jpg" alt="Blog-3"/>
                                        </a>
                                    </div>
                                    <div class="posts-thumbnail-content">
                                        <h4><a href="blog-detail.html">That Most Modern</a></h4>
                                        <div class="posts-thumbnail-meta">
                                            <time datetime="2015-08-11T06:27:49+00:00">August 11, 2015</time>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="posts-thumbnail-image">
                                        <a href="blog-detail.html">
                                            <img width="300" height="300" src="images/blog/thumb/blog_70x70.jpg" alt="Blog-4"/>
                                        </a>
                                    </div>
                                    <div class="posts-thumbnail-content">
                                        <h4><a href="blog-detail.html">Giambattista Valli</a></h4>
                                        <div class="posts-thumbnail-meta">
                                            <time datetime="2015-08-11T06:27:49+00:00">August 11, 2015</time>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h4 class="widget-title"><span>Tags</span></h4>
                            <div class="tagcloud">
                                <a href='#'>Deals</a>
                                <a href='#'>Dolor</a>
                                <a href='#'>Lacus</a>
                                <a href='#'>Praesent</a>
                                <a href='#'>Quam</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop