<?php get_header(); ?>
<?php get_sidebar('carousel');?>
<?php get_sidebar('nav');?>

    <!-- Page Content -->
    <div class="container">
        <!-- Projects Row -->
        <div class="row">
        
             <div class="col-md-3 portfolio-item">
                                <div class="sidebarit">
                                 <?php dynamic_sidebar('sidebar2'); ?> 
                                </div>
                        </div><!--col-->
                        
                        
                        
            <div class="col-md-9">
             	<div class="content">   
              
 
              <?php while (have_posts()) : the_post(); ?>
						
        
        
       					<div class="post">
                        
                                           <div class="data"><!--kellonaika ja päivämäärä-->
                                           <p><span class="glyphicon glyphicon-time"> </span> <?php the_date(); ?> - <span class="glyphicon glyphicon-user"></span> <?php the_author(); ?> </p>
                                           </div>   
                                                
                                                
                                                <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                                         
                                                    <p>
                                                        <?php the_content(); ?><!--artikkeli-->
                                                    </p>
                                                    
                                                <div class="data2"><!--tagit-->
                                                <p><span class="glyphicon glyphicon-tags">&nbsp;</span><?php the_category('<span class="cat"> / </cat>'); ?> </p>
                                                </div>   
                                                
                                                
                         </div><!--post-->
				
                <div class="comment-post">
					<?php comments_template(); ?>
                </div>   
                <?php endwhile;?>


				</div><!--/content-->

           	</div><!--/col-->
           
           				
                        
                   
       
       
                                    
		</div>          
	</div> <!-- /.row -->
</div>

 <?php get_footer(); ?>