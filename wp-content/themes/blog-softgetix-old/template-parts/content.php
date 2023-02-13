<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog-softgetix
 */

?>
<br><br>
<style>
    h3 {
        font-size: 25px;
        margin: 25px 0;
        font-weight: 700;
    }
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="grid lg:grid-cols-3 lg:px-20 px-4 lg:gap-8  dark:bg-gray-900">
			<!-- post col 1 -->
		<div class="md:col-span-0 col-span-2 px-4 md:px-6 sm:px-6 bg-white dark:bg-gray-800 py-12 mb-8">
			<div class="max-w-3xl mb-10 rounded overflow-hidden flex flex-col mx-auto">
				<?php
					if ( is_singular() ) :
						the_title( '<h1 class="text-left max-w-3xl text-3xl sm:text-4xl font-black inline-block hover:text-sOrange-800 inline-block mb-2 dark:text-white">', '</h1>' );
					else :
						the_title( '<h2 class="text-left max-w-3xl text-3xl sm:text-4xl font-black inline-block hover:text-sOrange-800 inline-block mb-2 dark:text-white"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
				?>
				<p class="text-sBlue-800"><?php blog_softgetix_posted_on(); ?></p>
				<a href="#" class="w-full my-4">
				<?php blog_softgetix_post_thumbnail(); ?>
				</a>
				<p class="text-gray-700 text-base leading-8 max-w-2xl mx-auto dark:text-white">
					<?php
					blog_softgetix_posted_on();
					blog_softgetix_posted_by();
					?>
				</p>
				<p class="text-gray-700 text-base leading-8 max-w-2xl mx-auto dark:text-white">
				<?php blog_softgetix_entry_footer(); ?>
				</p>
			</div>
			<div class="mt-3 rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal lg:px-20">
				<?php
						// if ( is_singular() ) :
						// 	the_title( '<h3 class="text-2xl font-bold my-5 dark:text-white">', '</h1>' );
						// else :
						// 	the_title( '<h3 class="text-2xl font-bold my-5 dark:text-white"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						// endif;
					?>
					<div class="text-base leading-8 my-5 dark:text-white">
						<?php the_content(); ?>
					</div>
					
					<?php 
					// If comments are open or we have at least one comment, load up the comment template.

					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>
			</div>
		</div>
	<!-- post col 2 -->
  	<div class="px-6 col-span-4 lg:col-span-1">
	<h1 class="font-black text-3xl dark:text-white pb-12">Related <span class="text-sOrange-800">Posts</span></h1>
	<?php $related = get_posts( 
		array( 
			'category__in' => wp_get_post_categories( $post->ID ), 
			'numberposts'  => 5, 
			'post__not_in' => array( $post->ID ) 
		) 
	);

	if( $related ) { 
		foreach( $related as $post ) {
			setup_postdata($post);
			?><a href="<?php the_permalink(); ?>">
			<div class="dark:bg-gray-800 dark:text-white recent-post-row cursor-pointer w-full shadow-lg hover:shadow-xl rounded-lg
				bg-white relative xl:flex xl:flex-row-reverse xl:items-center xl:px-6 xl:py-8 mb-6">
				<span id="recent-ping-2" class="animate-ping absolute w-16 h-16 border-2 rounded-2xl border-red-500 opacity-75 hidden lg:inline-flex"></span>
			  <img src="<?php the_post_thumbnail_url(); ?>" class="w-full h-48 bg-cover rounded-t-lg xl:w-24 xl:h-20 xl:rounded-lg xl:ml-2">
			  <div class="p-6 xl:p-0">
					<div class="text-sm font-bold"><?php the_title(); ?></div>
					<div class="mt-2 text-gray-900 text-sm dark:text-white xl:hidden">
					<?php $content = get_the_content(); echo wp_trim_words( $content , '17' ); ?>
					</div>
				  </div>
			</div>
			</a><?php
		
		}
		wp_reset_postdata();
	} 
	?>
		<div class="pt-8">
	<h1 class="font-black text-3xl dark:text-white pb-8">Popular <span class="text-sOrange-800">Categories</span></h1>
					<ul>
					    <?php $categories = get_categories();
							foreach($categories as $category) {
							   echo '<li class="text-md font-bold pb-1.5 hover:text-sOrange-800 dark:text-white"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li><hr class="blog-divider">';
							} 
						?> 
					</ul>
	</div>
	</div>

 
</div>

</article>
