 <!--// Main Banner //-->
      <div id="mainbanner">
        <div class="flexslider">
          <ul class="slides">
           <?php 
            foreach ($all_slider as $v_slider){
           ?>
            <li>
              <img src="<?php echo $v_slider->slide_image; ?>" alt="" />
              <div class="container">
                <div class="kode-caption">       
                	<h2><?php echo $v_slider->slide_title; ?></h2>
                    <div class="clearfix"></div>        
                    <p style="width: 450px;"><?php echo $v_slider->slide_short_description; ?></p>
                  <div class="clearfix"></div>
                  <a class="kode-modren-btn thbg-colortwo" href="<?php echo base_url();?>welcome/slider_details/<?php echo $v_slider->slide_id;?>">Read More</a>
                </div>
              </div>
            </li>
           <?php }?>
            
          </ul>
        </div>
      </div>
<div class="kode-subheader subheader-height">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1>Blog Page</h1>
            </div>
            <div class="col-md-6">
              <ul class="kode-breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
 
      <!--// SubHeader //-->

      <!--// Main Content //-->
      <div class="kode-content">

        <!--// Page Content //-->
        <section class="kode-pagesection">
          <div class="container">
            <div class="row">

                <div class="kode-pagecontent col-md-9">

                  <div class="kode-blog-list kode-fullwidth-blog">
                    <ul class="row">
					
		 <?php
		foreach ($all_blog as $v_blog)
			{
			?>

                      <li class="col-md-12">
                        <div class="kode-time-zoon">
                          <time datetime="2008-02-14 20:00"></span></time>
                          <h5><a href="#"><?php echo $v_blog->blog_title; ?></a></h5>
                        </div>
                         <figure><a href="#"><img src="<?php echo $v_blog->blog_images; ?>" alt="" height="300"></a></figure>
                        <div class="kode-blog-info">
                          <ul class="kode-blog-options">
                            <li><a href="#"><i class="fa fa-user"></i> <?php echo $v_blog->author_name; ?></a></li>
                            <li><a href="#"><i class="fa fa-comment"></i> 3 Comments</a></li>
                            <li><a href="#"><i class="fa fa-share-alt"></i> 12 Share</a></li>
                          </ul>
                          <ul class="kode-team-network">
                            <li><a class="fa fa-facebook" href="#"></a></li>
                            <li><a class="fa fa-twitter" href="#"></a></li>
                            <li><a class="fa fa-linkedin" href="#"></a></li>
                          </ul>
                          <p><?php echo $v_blog->blog_short_description; ?></p>
                          <a href="<?php echo base_url();?>welcome/blog_details/<?php echo $v_blog->blog_id;?>" class="kode-modrenbtn thbg-colorhover">Read More</a>

                        </div>
                      </li>
					  
		<?php } ?>  
                    </ul>
                    
                    <!--// Pagination //-->
                    <div class="pagination">
                      <a href="#"><i class="fa fa-angle-double-left"></i></a>
                      <a href="#">1</a>
                      <a href="#">2</a>
                      <span>3</span>
                      <a href="#">4</a>
                      <a href="#"><i class="fa fa-angle-double-right"></i></a>
                    </div>
                    <!--// Pagination //-->

                  </div>

                </div>

                <aside class="kode-pagesidebar col-md-3">
                  
                  <div class="widget tab-widget">

                    <!-- Nav tabs -->
                    <ul class="widget-tabnav" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Live</a></li>
                      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Result</a></li>
                      <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Fixture</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="home">
                        <ul class="match-widget">
                          <li>
                            <div class="kode-cell">
                              <span>Valenciaca <small>2</small></span>
                            </div>
                            <div class="kode-cell">
                              <span class="kode-vs">vs</span>
                              <small>(91)</small>
                            </div>
                            <div class="kode-cell">
                              <span>Real Madrid <small>1</small></span>
                            </div>
                          </li>
                          <li>
                            <div class="kode-cell">
                              <span>Bristol City <small>2</small></span>
                            </div>
                            <div class="kode-cell">
                              <span class="kode-vs">vs</span>
                              <small>(91)</small>
                            </div>
                            <div class="kode-cell">
                              <span>Real Soccer <small>1</small></span>
                            </div>
                          </li>
                          <li>
                            <div class="kode-cell">
                              <span>Valenciaca <small>2</small></span>
                            </div>
                            <div class="kode-cell">
                              <span class="kode-vs">vs</span>
                              <small>(91)</small>
                            </div>
                            <div class="kode-cell">
                              <span>Real Madrid <small>1</small></span>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="profile">
                        <ul class="match-widget">
                          <li>
                            <div class="kode-cell">
                              <span>Bristol City <small>2</small></span>
                            </div>
                            <div class="kode-cell">
                              <span class="kode-vs">vs</span>
                              <small>(91)</small>
                            </div>
                            <div class="kode-cell">
                              <span>Real Soccer <small>1</small></span>
                            </div>
                          </li>
                          <li>
                            <div class="kode-cell">
                              <span>Valenciaca <small>2</small></span>
                            </div>
                            <div class="kode-cell">
                              <span class="kode-vs">vs</span>
                              <small>(91)</small>
                            </div>
                            <div class="kode-cell">
                              <span>Real Madrid <small>1</small></span>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="messages">
                        <ul class="match-widget">
                          <li>
                            <div class="kode-cell">
                              <span>Balenciaca <small>2</small></span>
                            </div>
                            <div class="kode-cell">
                              <span class="kode-vs">vs</span>
                              <small>(91)</small>
                            </div>
                            <div class="kode-cell">
                              <span>Real Madrid <small>1</small></span>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                  </div>

                  <div class="widget kode-recent-blog">
                    <div class="kode-widget-title"> <h2>Recent Blog Post</h2> </div>
                    <ul>
                      <li>
                        <figure><a class="kode-recent-thumb" href="#"><img src="extra-images/recentblog-widget1.jpg" alt=""></a>
                          <figcaption>
                            <h6><a href="#">Never Give Up On Yourself</a></h6>
                            <ul>
                              <li>05 May 2015</li>
                              <li>by <a href="#">John</a></li>
                            </ul>
                          </figcaption>
                        </figure>
                      </li>
                      <li>
                        <figure><a class="kode-recent-thumb" href="#"><img src="extra-images/recentblog-widget2.jpg" alt=""></a>
                          <figcaption>
                            <h6><a href="#">Hopefull Players Always</a></h6>
                            <ul>
                              <li>05 May 2015</li>
                              <li>by <a href="#">John</a></li>
                            </ul>
                          </figcaption>
                        </figure>
                      </li>
                      <li>
                        <figure><a class="kode-recent-thumb" href="#"><img src="extra-images/recentblog-widget3.jpg" alt=""></a>
                          <figcaption>
                            <h6><a href="#">Standalone Quality Shoes</a></h6>
                            <ul>
                              <li>05 May 2015</li>
                              <li>by <a href="#">John</a></li>
                            </ul>
                          </figcaption>
                        </figure>
                      </li>
                    </ul>
                  </div>

                  <div class="widget widget-recent-news">
                    <div class="kode-widget-title"> <h2>Recent News</h2> </div>
                    <ul>
                      <li>
                        <div class="medium-info">
                          <time datetime="2008-02-14 20:00">25</time>
                          <div class="medium-title">
                            <h6><a href="#">Sed ut perspiciatis unde omnis iste</a></h6>
                            <ul class="kode-blog-options">
                              <li><a href="#"><i class="fa fa-heart"></i> 305</a></li>
                              <li><a href="#"><i class="fa fa-comment"></i> 8</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="medium-info">
                          <time datetime="2008-02-14 20:00">30</time>
                          <div class="medium-title">
                            <h6><a href="#">Sed ut perspiciatis unde omnis iste</a></h6>
                            <ul class="kode-blog-options">
                              <li><a href="#"><i class="fa fa-heart"></i> 305</a></li>
                              <li><a href="#"><i class="fa fa-comment"></i> 8</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="medium-info">
                          <time datetime="2008-02-14 20:00">15</time>
                          <div class="medium-title">
                            <h6><a href="#">Sed ut perspiciatis unde omnis iste</a></h6>
                            <ul class="kode-blog-options">
                              <li><a href="#"><i class="fa fa-heart"></i> 305</a></li>
                              <li><a href="#"><i class="fa fa-comment"></i> 8</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="widget widget_categories">
                    <div class="kode-widget-title"> <h2>CATEGORIES</h2> </div>
                    <ul>
                      <li><a href="#">Premier League</a> (18)</li>
                      <li><a href="#">FA Cup</a> (11)</li>
                      <li><a href="#">Europe League</a> (07)</li>
                      <li><a href="#">C. Shields</a> (04)</li>
                    </ul>
                  </div>

                  <div class="widget kode-twitter-widget">
                    
                    <div class="twitter-info">
                      <h6>Sporty League On Twiter</h6>
                      <span>Tweets for list by Sportyleague</span>
                      <i class="fa fa-twitter"></i>
                    </div>
                    <ul>
                      <li>
                        <a href="#" class="tweet-thumb"><img src="extra-images/twitter-1.jpg" alt=""></a>
                        <div class="tweet-list">
                          <a href="#"><strong class="thcolor">upthemes</strong> Check out Day 321 - Tweet tweet </a>
                          <span>12 minutes ago</span>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="tweet-thumb"><img src="extra-images/twitter-1.jpg" alt=""></a>
                        <div class="tweet-list">
                          <a href="#"><strong class="thcolor">upthemes</strong> Check out Day 321 - Tweet tweet </a>
                          <span>12 minutes ago</span>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="tweet-thumb"><img src="extra-images/twitter-1.jpg" alt=""></a>
                        <div class="tweet-list">
                          <a href="#"><strong class="thcolor">upthemes</strong> Check out Day 321 - Tweet tweet </a>
                          <span>12 minutes ago</span>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="tweet-thumb"><img src="extra-images/twitter-1.jpg" alt=""></a>
                        <div class="tweet-list">
                          <a href="#"><strong class="thcolor">upthemes</strong> Check out Day 321 - Tweet tweet </a>
                          <span>12 minutes ago</span>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="tweet-thumb"><img src="extra-images/twitter-1.jpg" alt=""></a>
                        <div class="tweet-list">
                          <a href="#"><strong class="thcolor">upthemes</strong> Check out Day 321 - Tweet tweet </a>
                          <span>12 minutes ago</span>
                        </div>
                      </li>
                    </ul>

                  </div>

                  <div class="widget widget-gallery">
                    <div class="kode-widget-title"> <h2>Gallery</h2> </div>
                    <ul>
                      <li><a href="#"><img src="extra-images/widgetgallery-1.jpg" alt=""></a></li>
                      <li><a href="#"><img src="extra-images/widgetgallery-2.jpg" alt=""></a></li>
                      <li><a href="#"><img src="extra-images/widgetgallery-3.jpg" alt=""></a></li>
                      <li><a href="#"><img src="extra-images/widgetgallery-2.jpg" alt=""></a></li>
                      <li><a href="#"><img src="extra-images/widgetgallery-3.jpg" alt=""></a></li>
                      <li><a href="#"><img src="extra-images/widgetgallery-2.jpg" alt=""></a></li>
                    </ul>
                  </div>

                </aside>

              </div>
            </div>
        </section>
        <!--// Page Content //-->

      </div>