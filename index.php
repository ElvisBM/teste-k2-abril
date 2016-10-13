<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>


    <?php
        if ( is_front_page() && is_home() ) {

            //Destaque home
            $args = array(
                'post_type' => 'post',
                'meta_query' => array(
                    array(
                        'key'     => 'destaque',
                        'value'   =>  'destaque',
                        'compare' => 'LIKE'
                    )
                ),
                'posts_per_page' => 3
            );
            $posts_destaques =  new WP_Query($args);

            //Promovido
            $args = array(
                'post_type' => 'post',

                'meta_query' => array(
                    array(
                        'key'     => 'promovido',
                        'value'   => 'promovido',
                        'compare' => 'LIKE'
                    )
                ),
                'posts_per_page' => 1
            );
            $posts_promovido =  new WP_Query($args);


            //Promovido
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 4
            );
            $posts_linha =  new WP_Query($args);

             //Promovido
            $args = array(
                'post_type'      => 'post',
                'category_name'  => 'carros',
                'posts_per_page' => 4
            );
            $posts_lista =  new WP_Query($args);

        }
    ?>

    <div class="wrapper" id="wrapper-index">
        
	   <div  class="container">

            <div id="destaque-home" class="row" >
                <!-- Destaque Home  -->
                <?php 
                    $cont = 1;
                    while ($posts_destaques->have_posts()) : $posts_destaques->the_post();

                        //Cont For col-md6
                        if($cont == 1){
                            echo '<div class="col col-md-6 full-destaque">';
                            get_template_part( 'loop-templates/content', 'destaque' );
                            echo "</div>";
                        }else if($cont == 2){
                            //Add div class col-md-3
                            echo '<div class="col col-md-3 medium-destaque">';
                            get_template_part( 'loop-templates/content', 'destaque' );
                        }else{
                            //Close div class col-md-3;
                            get_template_part( 'loop-templates/content', 'destaque' );
                            echo "</div>";
                        }//EndIF
                        
                    $cont ++;
                    endwhile;
                    wp_reset_query();
                ?>

                <!-- Promovido e publicidade -->
                <div class="col col-md-3">

                    <!-- Publicidade-->
                    <?php if ( is_active_sidebar( 'publicidade_destaque_home' ) ) : ?>
                       <div class="wrapper-fluid wrapper-navbar" id="wrapper-publicidade_destaque_home">
                            <?php dynamic_sidebar( 'publicidade_destaque_home' ); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Post Promovido -->
                    <div class="wrapper-promovido">
                    <?php
                        while ($posts_promovido->have_posts()) : $posts_promovido->the_post();
                                get_template_part( 'loop-templates/content', 'destaque' );
                        endwhile;
                        wp_reset_query();
                    ?>
                    </div>

                </div> <!-- Promovido e publicidade -->
                 
            </div><!-- .row destaque-home -->
            
            <div  id="content-home" class="row">
                <?php
                     while ($posts_linha->have_posts()) : $posts_linha->the_post();
                       
                        $destaque =  count(get_metadata('post', get_the_ID(), 'destaque', true));
                        $promovido = count(get_metadata('post', get_the_ID(), 'promovido', true));

                        //Array Count 2 yes field
                        if($destaque == 1 and $promovido == 1){
                            echo '<div class="col-md-3">';
                            get_template_part( 'loop-templates/content', 'home' );
                            echo "</div>";
                        }
    
                    endwhile;
                ?>
            </div><!-- .row content-home -->

             <div  id="content-lista" class="row">
                <?php
                    while ($posts_lista->have_posts()) : $posts_lista->the_post();
                ?>
                <div class="col col-md-3">
                    <a href="<?php echo  get_the_permalink()?>" alt="<?php  echo get_the_title()  ?>" />
                       + <?php echo  get_the_title(); ?>
                    </a>
                </div>
                <?php
                    endwhile;
                ?>
            </div><!-- .row content-home -->
        
       </div><!-- Container end -->
        
    </div><!-- Wrapper end -->

<?php get_footer(); ?>
