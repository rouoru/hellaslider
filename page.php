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
              
 
              
                	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       					<div class="post">
                        
                                                
                                                
                                                <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                                           
                                                    <p>
                                                        <?php the_content(); ?>
                                                    </p>
                         </div><!--post-->
				
                <?php endwhile; else: ?>
				<p>not found.</p>
				<?php endif; ?>


					<div id="pager"><?php alphaforte_pagination(); ?>
                    </div>
				</div><!--/content-->

           	</div><!--/col-->
           
           				
                        
                    
       
       
                                    
		</div>          
	</div> <!-- /.row -->
</div>

 <?php get_footer(); ?>