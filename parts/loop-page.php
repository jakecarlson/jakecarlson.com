<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php if (is_page('resume')) { ?>
            <a href="/wp-content/uploads/2019/05/Jake-Carlson-Resume.pdf" target="_blank" class="resume-pdf"><?php _e('PDF', 'jointswp'); ?></a>
        <?php } ?>
	</header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->
						    
	<?php comments_template(); ?>
					
</article> <!-- end article -->