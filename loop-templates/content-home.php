<?php
/**
 * The template used for displaying Destaque Home
 *
 * @package understrap
 */

?>
<?php 
	// List View
    $url = get_the_permalink();
    $thumb = wp_get_attachment_url( get_post_thumbnail_id() );
    $title = get_the_title();
    $cats = get_the_category();
    $categoria =  $cats[0]->name;
    $promovido = get_metadata('post', get_the_ID(), 'por', true);
    $content = get_the_excerpt();

?>

<a href="<?php get_the_permalink() ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>" >
    <figure class="figure-gradient">
    <img src="<?php echo $thumb?>" class="fixed-img">
    </figure>
    <div class="destaque-textos">
        <h4><?php echo $categoria  ?></h4>
    </div>
    <div class="content">
         <h3><?php echo $title ?></h3>
         <p><?php echo $content; ?></p>
    </div>
</a>
