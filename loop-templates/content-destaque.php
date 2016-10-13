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

?>

<a href="<?php get_the_permalink() ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>" >
    <figure class="figure-gradient">
    <img src="<?php echo $thumb?>" class="fixed-img">
    </figure>
    <?php 
    	if( strlen($promovido[0]) > 0 ){
 			$titulo = "<h4 class='promovido'> Promovido por: " . $promovido . "</h4>" ;
    	}else{
    		$titulo = "<h4>" . $categoria . "</h4>";
    	}
    ?>
    <div class="destaque-textos">
        <?php echo $titulo ?>
        <h3><?php echo $title ?></h3>
    </div>
</a>
