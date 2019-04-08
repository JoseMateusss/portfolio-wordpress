
<?php get_header(); ?>

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">
          <?php bloginfo('name'); ?>
        </h1>
        <div class="subheading mb-5">
          <p><?php bloginfo('admin_email'); ?></p>
        </div>
        <p class="lead mb-5"><?php bloginfo('description'); ?></p>
		<div class="social-icons">
          <a href="#">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#">
            <i class="fab fa-github"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>

   <hr class="m-0"> 

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="sobre">
      <div class="w-100">
        

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <?php 
            	$args = array('post_type'=>'page', 'pagename'=>'sobre');
            	$my_page = get_posts($args);
			?>
			<?php if($my_page): foreach($my_page as $post): setup_postdata($post); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>">Ler mais</a>
			<?php endforeach; ?>
			<?php else: ?>
				<p>Nenhum conteúdo foi cadastrado</p>
			<?php endif; ?>	
          </div>
        </div>
	</section>
	

    

  <?php get_footer();?>