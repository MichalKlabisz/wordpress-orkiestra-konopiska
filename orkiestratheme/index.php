<?php get_header(); ?>
<div id="content">
    <?php /*if (have_posts())
          {*/
            $i = 0;
            while(have_posts())
            {
                the_post(); ?>
                
                    <div class="post">
                        <h1 class="title"> 
                            <a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h1>
                        <h2 class="info"> <?php the_time('l, d/m/Y, G:i');  echo ' | Autor: '; the_author_meta('user_firstname'); echo ' '; the_author_meta('user_lastname'); echo ' | '; comments_popup_link( 'Skomentuj', '1 komentarz', '% komentarzy', 'info', '');  ?> </h2>
                        <div class="postcontent">
                            <?php 
                            $side = $i % 2 ? "right" : "left";
                            switch($i % 3) 
                            {
                                case 0: ?>
                                    <img src="<?php bloginfo('template_url'); ?>/static/flet.jpg" alt="flet"  style="float: <?php echo $side ?>;"/>
                            <?php  break;
                                case 1: ?>
                                    <img src="<?php bloginfo('template_url'); ?>/static/sax.jpg" alt="sax"  style="float: <?php echo $side ?>;"/>  
                            <?php  break;        
                                case 2: ?>
                                    <img src="<?php bloginfo('template_url'); ?>/static/trabka.jpg" alt="sax"  style="float: <?php echo $side ?>;"/>
                            <?php  break;       
                            } ?>
                                
                            <?php the_content(); ?>
                            <br class="clearer" />
                        </div>
                    </div>
         <?php        
            //}
            ++$i;
          } ?>
                
                
                
                <div id="pagination">
                    <?php posts_nav_link(); ?>    
                </div>
                
            </div>
            
            
            
            
<?php get_footer(); ?>
