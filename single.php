<?php get_header();?>
<body <?php body_class();?>>
<?php get_template_part('hero');?>
<div class="row">
    <div class="col-md-8">
    <div class="posts" <?php post_class(); ?>>
<?php while(have_posts()){
    the_post();?>
    <div class="post">

        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-1">
                    <h2 class="post-title">
                    <?php the_title();?>
                    </h2>
                    <p class="">
                        <strong><?php the_author();?></strong><br/>
                        <?php echo get_the_date();?>
                    </p>
                </div>
            </div>
            <div class="row">

                <div class="col-md-10 offset-md-1">
                    <p>

                <?php
                    if(has_post_thumbnail()){
                    the_post_thumbnail('large',['class'=>'img-fluid']);

                }?>

                <?php
                the_content();
                next_post_link();
                echo "<br/>";
                previous_post_link();
                ?>

                </p>
                <?php if (comments_open()):?>
                <div class="col-md-10 offset-md-1">
                    <?php comments_template();?>
                </div>
                <?php endif;?>
            </div>
            </div>

        </div>
    </div>
</div>
<?php
}?>
    </div>
    <div class="col-md-4">
    <?php if(is_active_sidebar('sidebar-1')){
        dynamic_sidebar('sidebar-1');
    }
    ?>
    </div>

</div>
<?php get_footer();?>