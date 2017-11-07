<?php get_header(); ?>
<div class="wrapper wrapper-desktop">
<h1 class="page-title">Perguntas Frequentes</h1>
<?php
$perguntas = [];
$respostas = [];
while ( have_posts() ) : the_post(); ?>
  <?php
  $pergunta_resposta = explode(PHP_EOL, get_the_content());
  ?>
  <?php
  foreach ($pergunta_resposta as $key => $value) {

    if( substr(trim($value), -1) === '?' ){
      array_push($perguntas, $value);
    }else if( strlen($value) > 1 ){
      array_push($respostas, $value);
    }
  }
  ?>
<?php
endwhile;
wp_reset_query();

foreach ($perguntas as $key => $value) {
  $icon_carat = "ui-icon-carat-u";
  if( wp_is_mobile()){
    $icon_carat = "ui-icon-carat-d";
  }
  ?>
  <div id="tab-control" class="tab">
    <p id="label-tab" class="item-<?php echo $key?> label-tab <?php echo $icon_carat?> ui-btn-icon-right" onclick="accordion('<?php echo $key?>')" ><?php echo ($key+1)."- ".$value?></p>
    <div class="tab-content tab-content-<?php echo $key?>">
      <p>
        <?php echo $respostas[$key] ?>
      </p>
    </div>
  </div>
  <?php
}
?>
</div>

<?php get_footer();
