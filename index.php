<?php get_header(); ?>
<?php get_sidebar('carousel');?>
<?php get_sidebar('nav');?>

   
<!-- Page Content -->
<div class="container">

	<div class="row">
 		<div class="col-md-3 portfolio-item">
        	<div class="sidebarit">
            	<?php dynamic_sidebar('sidebar2'); ?> 
            </div>
        </div><!--/col-->
        
		<div class="col-md-6">
        	<div class="content">   
            	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       				<div class="post">
                    	<div class="data">
                        	<p><span class="glyphicon glyphicon-time"> </span> <?php the_date(); ?> - <span class="glyphicon glyphicon-user"></span> <?php the_author(); ?> </p>
                       </div><!--/data-->   
                        
                        <h3><a href="<?php echo get_permalink(); ?>">
						<?php the_title(); ?></a></h3>
                                           
                             <p>
                             <?php the_content(); ?>
                             </p>
                                                    
                                                    
                             <div class="data2">
                             <p><span class="glyphicon glyphicon-tags">&nbsp;</span><?php the_category('<span class="cat"> / </cat>'); ?> </p>
                             </div><!--/data2-->
                                                    
                                                    
                                                    
                     </div><!--post-->
				
                <?php endwhile; else: ?>
				<p>not found.</p>
				<?php endif; ?>


					<div id="pager"><?php alphaforte_pagination(); ?>
                    </div><!--/pager-->
				</div><!--/content-->

           	</div><!--/col-->
            
            
            
            
            
                                      
                        <div class="col-md-3 hidden-xs portfolio-item">
                                    <div class="sidebarit">
                                <?php dynamic_sidebar('sidebar-1'); ?> 
                        </div><!--col-->
                                    
		</div>          
	</div> <!-- /.row -->
</div>

 <?php get_footer(); ?>