<?php get_header();?>
<div class="container mt-5">
<div class="row category">
    <div class="col-md-8 text-justify">
        <h1 class="archive-title p-2"><?php single_cat_title();?></h1>
        <?php get_template_part('loop');?>
    </div>
    <!-- .col-md-8 -->
    <div class="col-md-4">
        <?php get_sidebar();?>
    </div>
</div>
</div>
<!-- .row -->
<?php get_footer();?>