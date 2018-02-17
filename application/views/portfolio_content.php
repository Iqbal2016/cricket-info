 <div class="kode-subheader subheader-height">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1>Portfolio</h1>
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
<div class="kode-content">
		
		
		 <!--// Page Content //-->
        <section class="kode-pagesection margin-bottom-40">
          <div class="container">
            <div class="row">
				
				<div class="col-md-12">                  
				  <div class="heading heading-12 margin-top10-bottom30-flat">
					<p>Devoted to</p>
					<h2><span class="left"></span>OUR TEAM FORWARDS<span class="right"></span></h2>
				</div>
                  <div class="kode-team-list">
                    <ul class="row">
                     <?php foreach ($view_biography as $v_biography)
                         {
                            
                        ?>   
                        
                      <li class="col-md-4 col-sm-6">
                          <figure><a href="#" class="kode-team-thumb"><img src="<?php echo $v_biography->player_Image; ?>" alt="" height="355"></a>
                          <figcaption>
                            <ul class="kode-team-network">
                              <li><a href="#" class="fa fa-facebook"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-linkedin"></a></li>
                            </ul>
                            <div class="clearfix"></div>
                            <h2><a href="<?php echo base_url();?>welcome/player_details/<?php echo $v_biography->player_Id;?>"><?php echo $v_biography->player_Name; ?></a></h2>
                            <a href="<?php echo base_url();?>welcome/player_details/<?php echo $v_biography->player_Id;?>" class="kode-modren-btn thbg-colortwo">Vew Detail</a>
                          </figcaption>
                        </figure>
                      </li>
                         <?php }?>
                      
                     
                      
                    </ul>
                  </div>
                </div>         

              </div>
            </div>
        </section>
        <!--// Page Content //-->		

      </div>