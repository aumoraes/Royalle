<?php get_header(); ?>
<div class="demo-gallery">
<ul id="lightgallery" class="list-unstyled row">
<?php
global $post;

$gallery = get_post_gallery( $post, false );
$args = array(
    'post_type'      => 'attachment',
    'posts_per_page' => -1,
    'post_status'    => 'any',
    'post__in'       => explode( ',', $gallery['ids'] )
);
$attachments = get_posts( $args );
foreach ( $attachments as $attachment ) {
  $imagePath = substr($attachment->guid, 0, -5);
  $imageTitle = $attachment->post_title;
  $imageDescription = $attachment->post_excerpt;
  ?>
  <li class="col-xs-6 col-sm-4 col-md-3 imagem-galeria" data-responsive="<?php echo $imagePath?>" data-src="<?php echo $imagePath?>.jpeg" data-sub-html="<h4><?php echo $imageTitle?></h4><p><?php echo $imageDescription?></p>">
    <a href="">
      <img class="img-responsive" src="<?php echo $imagePath?>-350x350.jpeg">
    </a>
  </li>
<?php } ?>

</ul>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('#lightgallery').lightGallery();

});
</script>
<?php get_footer();
