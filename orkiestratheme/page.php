<?php get_header(); ?>
<div id="content">
    <?php 
            the_post(); ?>
            
                <div class="post">
                    <h1 class="title"> 
                        <a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h1>
                    <h2 class="info"></h2>
                    <div class="postcontent">
                        <?php /*
                        $side = $i % 2 ? "right" : "left";
                        switch($i % 3) 
                        {
                            case 0: ?>
                                <img src="<?php bloginfo('template_url'); ?>/static/flet.jpg" alt="flet" height="7%" width="7%" style="float: <?php echo $side ?>;"/>
                        <?php  break;
                            case 1: ?>
                                <img src="<?php bloginfo('template_url'); ?>/static/sax.jpg" alt="sax" height="10%" width="10%" style="float: <?php echo $side ?>;"/>  
                        <?php  break;        
                            case 2: ?>
                                <img src="<?php bloginfo('template_url'); ?>/static/trabka.jpg" alt="sax" height="15%" width="15%" style="float: <?php echo $side ?>;"/>
                        <?php  break;       
                        } */?>
                            
                        <?php the_content(); ?>
                        <br class="clearer" />
                    </div>
                </div>
                
                <div id="subpagination">
                    <?php wp_link_pages(); ?>    
                </div>
                
            </div>
            
            
            
            
<?php get_footer(); ?>
