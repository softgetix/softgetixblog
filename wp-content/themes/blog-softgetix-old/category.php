<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog-softgetix
 */

get_header();
?>

<button id="category-sticky-btn" onclick="toggleSlideover()" class="bg-white dark:bg-gray-900"><i class="fa-solid fa-angles-right text-gray-600 dark:text-white"></i></button>
<div>

  <div id="slideover-container" class="fixed inset-0 invisible z-50 ">
    <div onclick="toggleSlideover()" id="slideover-bg" class="w-full h-full duration-500 ease-out transition-all inset-0 absolute bg-gray-900 opacity-0"></div>
    <div onclick="toggleSlideover()" id="slideover" class="w-96 bg-white h-full absolute right-0 duration-300 ease-out transition-all translate-x-full dark:bg-gray-900">
    <h1 class="font-black text-3xl px-5 py-16 dark:text-white">Popular <span class="text-sOrange-800">Categories</span></h1>
          <ul>
					    <?php $categories = get_categories();
							foreach($categories as $category) {
							   echo '<li class="text-xl font-bold pb-1.5 hover:text-sOrange-800 dark:text-white"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li><hr class="blog-divider">';
							} 
						?> 
					</ul>
    <div class="absolute cursor-pointer text-gray-600 top-0 w-8 h-8 flex items-center justify-center right-0 mt-5 mr-5">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </div>
    </div>
  </div>
</div>
<main id="primary" class="site-main bg-white">
<div class="dark:bg-gray-900 bg-gray-100">
  
  <h1 class="font-black text-3xl px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8 dark:text-white">Popular <span class="text-sOrange-800">Posts</span></h1>
</div>
<div class="dark:bg-gray-900 px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8 bg-gray-100 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-8">
    <!--Cards-->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <div class="rounded overflow-hidden shadow-lg dark:bg-gray-800">
    <img src="<?php the_post_thumbnail_url(); ?>" class="w-full h-56 bg-cover hover:scale-90 transition-all duration-500 cursor-pointer">
      <div class="px-6 py-2 dark:bg-gray-800">
      <span class="blogs-cat text-sOrange-800"><i class="fa fa-tags text-gray-600"></i> <?php the_category(' '); ?></span>
      </div>
      
      <div class="px-6 py-2 dark:bg-gray-800 dark:text-white">
      <a href="<?php the_permalink(); ?>"><div class="text-lg font-bold"><?php the_title(); ?></div></a>
      </div>
      <div class="px-6 py-2 text-gray-900 text-sm dark:bg-gray-800 dark:text-white">
        <?php $content = get_the_content(); echo wp_trim_words( $content , '22' ); ?>
      </div>
      <div class="px-6 py-4 dark:bg-gray-800 dark:text-white">
      <!-- <a href="<?php the_permalink(); ?>">Learn More</a> -->
      <a href="<?php the_permalink(); ?>" class="mt-3 text-sBlue-800 inline-flex items-center dark:text-white">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 animate-ping  ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
    <?php endwhile; else: ?>
		<p><?php _e('Sorry, there are no posts.'); ?></p>
		<?php endif; ?>
</div>

			    <div class="pagination_bar col px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8 bg-gray-100 dark:bg-gray-900 dark:text-white">
        			<?php pagination(); ?>
        	</div>
	

</main><!-- #main -->

<div class="px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8 bg-gray-100 dark:bg-gray-900">

      <div class="max-w-screen-xl">
        <div class="xl:flex">
        <div class="dark:bg-gray-800 bg-gray-100">
          
        </div>
          <div> 
            <h1 class="font-black text-3xl dark:text-white">Popular <span class="text-sOrange-800">Posts</span></h1>

            <div class="flex flex-col items-center lg:flex-row lg:items-stretch lg:justify-around gap-2">
            <?php
                $args = array(
                    'orderby' => 'post_date',
                    'order' => 'ASC',
                    'posts_per_page' => 3,
                    'caller_get_posts' => 1
                  );
                $the_query = new WP_Query( $args );
                while ($the_query -> have_posts()) : $the_query -> the_post();
              ?>
              <div class="flex w-full max-w-sm mt-6 lg:mt-8 mb-25 ">
              <a href="<?php the_permalink(); ?>">
                <div class="dark:bg-gray-800 dark:text-white recent-post-row transition-all duration-300 cursor-pointer w-full shadow-lg hover:shadow-xl rounded-lg
                bg-gray-100 relative xl:flex xl:flex-row-reverse xl:items-center xl:px-6 xl:py-8">
                <span id="recent-ping-1" class="animate-ping absolute w-16 h-16 inline-flex border-2 rounded-2xl border-red-500 opacity-75 hidden lg:inline-flex"></span>
                  <img src="<?php the_post_thumbnail_url(); ?>" class="w-full h-48 bg-cover rounded-t-lg xl:w-24 xl:h-20 xl:rounded-lg xl:ml-2">
                  <div class="p-6 xl:p-0">
                    <div class="text-lg font-bold"><?php the_title(); ?></div>
                    <div class="mt-2 text-gray-900 text-sm xl:hidden">
                    <?php $content = get_the_content(); echo wp_trim_words( $content , '17' ); ?>
                    </div>
                  </div>
                </div>
                </div>
              </a>
              <?php
              endwhile;
              wp_reset_postdata();
              ?>
            </div>
          </div>
      </div>
    </div>
    
<?php
// get_sidebar();
get_footer();
