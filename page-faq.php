<?php get_header(); ?>

<br />
<br />
<br />
<br />

<div class="wrapper">


<?php
while ( have_posts() ) : the_post(); ?>
  <div class="entry-content-page">
    <?php
    $pergunta_resposta = explode(PHP_EOL, get_the_content());
    $pergunta = [];
    $resposta = [];
    ?>

    <?php
    $counter = 0;
    foreach ($pergunta_resposta as $key => $value) {

      if( substr(trim($value), -1) === '?' ){
      ?>
        <div id="tab-control" class="tab">

        <p id="label-tab" class="item-<?php echo $counter?> label-tab ui-icon-carat-d ui-btn-icon-right" onclick="accordion('<?php echo $counter?>')" ><?php echo $value?></p>
      <?php
      }else if( strlen($value) > 1 ){
        ?>
        <div class="tab-content tab-content-<?php echo $counter?>">
          <p><?php echo $value ?></p>
        </div>
        </div>
        <?php
        $counter++;
      }

    }
    ?>
  </div>

<?php
endwhile;
wp_reset_query();
?>

</div>

<?php get_footer();
