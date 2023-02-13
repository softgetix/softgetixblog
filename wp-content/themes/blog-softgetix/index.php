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
  <h1 id="popular-postId" class="font-black text-3xl px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8 dark:text-white">Popular <span class="text-sOrange-800">Posts</span></h1>
</div>

<div class="lg:flex lg:px-20 px-6 gap-8 bg-gray-100 dark:bg-gray-900">
  <div class="lg:w-1/2 w-full rounded overflow-hidden shadow-lg dark:bg-gray-900">
    <?php 
     $post = '1270';
        setup_postdata($post);
    ?>
     <a href="<?php the_permalink(); ?>">
      <img src="<?php the_post_thumbnail_url(); ?>" class="post-col-image w-full h-auto bg-cover hover:scale-90 transition-all duration-500 cursor-pointer">
      </a>
      <div class="px-6 py-2 dark:bg-gray-800">
      <span class="blogs-cat text-sOrange-800 text-sm font-medium"><i class="fa fa-tags text-gray-600"></i> <?php the_category(' '); ?></span>
      </div>
      <div class="px-6 py-2 dark:bg-gray-800 dark:text-white">
      <a href="<?php the_permalink(); ?>"><div class="text-lg font-bold"><?php the_title(); ?></div></a>
      </div>
      <div class="px-6 py-2 text-gray-900 text-sm dark:bg-gray-800 dark:text-white">
        <?php $content = get_the_content(); echo wp_trim_words( $content , '32' ); ?>
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
 <?php wp_reset_postdata(); ?>

  <div class="lg:w-1/2 w-full bg-[#f3f4f6] dark:bg-gray-900 mt-2" id="consultaion-form">
      <div class="ratings bg-[#f1f5f8] lg:w-[70%] w-full mx-auto rounded shadow-2xl">
          <ul class="flex justify-center p-6 py-16">
            <li>
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
              </svg>
            </li>
            <li>
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
              </svg>
            </li>
            <li>
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
              </svg>
            </li>
            <li>
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
              </svg>
            </li>
            <li>
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
              </svg>
            </li>
          </ul>
          <p class="px-10 text-center text-black text-xl pb-11">We have been rated 4.8/5 based on 150+ reviews</p>
          <p class="px-10 text-center text-black text-xl pb-20">We guide and help our clients to launch the most scalable websites and mobile apps. The first step is easy- Just reach out us and we will set up a free consultation!</p>
          <a href="https://softgetix.com/contact" class="block mx-auto bg-transparent hover:bg-sOrange-800 text-sOrange-800 font-semibold hover:text-white py-2 px-12 border-2 border-sOrange-800 hover:border-transparent rounded mb-11 text-center lg:w-96 w-[70%]">
          Yes! i'd like a free consultation
          </a>
        <br><br>
        </div>
  </div>
</div>

<div class="dark:bg-gray-900 px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8 bg-gray-100 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 xl:grid-cols-3 gap-8">
    <!--Cards-->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <div class="rounded overflow-hidden shadow-lg dark:bg-gray-800">
    <a href="<?php the_permalink(); ?>">
    <img src="<?php the_post_thumbnail_url(); ?>" class="post-col-image w-full h-auto bg-cover hover:scale-90 transition-all duration-500 cursor-pointer">
    </a>
      <div class="px-6 py-2 dark:bg-gray-800">
      <span class="blogs-cat text-sOrange-800 text-sm font-medium"><i class="fa fa-tags text-gray-600"></i> <?php the_category(' '); ?></span>
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

			    <!-- <div class="pagination_bar col px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8 bg-gray-100 dark:bg-gray-900 dark:text-white">
        			<?php pagination(); ?>
        	</div> -->
	
          <?php
          global $wp_query; // you can remove this line if everything works for you
          
          // don't display the button if there are not enough posts
          if (  $wp_query->max_num_pages > 1 ){
            echo '<div class="misha_loadmore col px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8
             bg-gray-100 dark:bg-gray-900 dark:text-white cursor-pointer text-center" hover:text-sOrange-800 >More posts</div>'; // you can use <a> as well
          }
          ?>

</main><!-- #main -->

<!-- Post Slider -->

<section class="relative lg:px-20 px-6 mx-auto py-10 bg-gray-100 dark:bg-gray-900" style="display:none">
  <?php
      $args = array(
        'orderby' => 'post_date',
        'order' => 'ASC',
        'posts_per_page' => 4,
        'caller_get_posts' => 1
      );
      $the_query = new WP_Query( $args );
      while ($the_query -> have_posts()) : $the_query -> the_post();
      ?>
  <div class="mySlider hidden fade overflow-hidden">
    <!-- left -->
    <div class="md:col-span-2 flex">
      <div class="w-full relative h-96 md:h-screen/2">
        <img class="w-full h-full img overflow-hidden object-cover" src="<?php the_post_thumbnail_url(); ?>" alt="">
      </div>
    </div>
    <!-- right -->
    <div class="flex flex-col md:justify-center justify-between bg-white dark:bg-gray-900">
      <span class="blogs-cat text-sOrange-800 text-sm font-medium lg:px-10 px-6 py-6"><i class="fa fa-tags text-gray-600"></i> <?php the_category(' '); ?></span>
      <h2 class="text-black dark:text-white text-base md:text-4xl zen-dots lg:text-2xl font-bold capitalize lg:px-10 px-6"><?php the_title() ?></h2>
      <h2 class="dark:text-white lg:px-10 px-6 py-2"><?php $content = get_the_content(); echo wp_trim_words( $content , '18' ); ?></h2>
      <a href="<?php the_permalink(); ?>" class="dark:text-white lg:px-10 px-6">Read More</a>
      <!-- main nav   -->
      <nav class="flex gap-11 lg:px-10 px-6 py-6">
      <a onclick="plusSlides(-1)" class="cursor-pointer main-nav prev transition duration-500 ease-in-out hover:text-sOrange-800 dark:text-white" data-nav="previous">
        <span class="lnr lnr-arrow-left text-3xl"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>
      </a>
      <a onclick="plusSlides(1)" class="cursor-pointer main-nav next transition duration-500 ease-in-out hover:text-sOrange-800 dark:text-white" data-nav="next">
        <span class="lnr lnr-arrow-right text-3xl"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
      </a>
      </nav>
    </div>
  </div>
  <?php
        endwhile;
        wp_reset_postdata();
        ?>
  <!-- dots -->
  <div class="absolute top-24">
    <div class="grid grid-rows-4 gap-4 p-2 place-items-center">
      <div class="index cursor-pointer w-2 py-3 text-xs flex items-center border justify-center  border-gray-200" onclick="currentSlide(1)"></div>
      <div class="index cursor-pointer w-2 py-3 text-xs flex items-center border justify-center  border-gray-200" onclick="currentSlide(2)"></div>
      <div class="index cursor-pointer w-2 py-3 text-xs flex items-center border justify-center  border-gray-200" onclick="currentSlide(3)"></div>
      <div class="index cursor-pointer w-2 py-3 text-xs flex items-center border justify-center  border-gray-200" onclick="currentSlide(4)"></div>
    </div>
  </div>

</section>
<!-- Recommended Post -->
    <div class="px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8 bg-gray-100 dark:bg-gray-900">
          <h1 class="font-black text-3xl dark:text-white">Recommended <span class="text-sOrange-800">Posts</span></h1>
    </div>  
    <div class="dark:bg-gray-900 px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8 bg-gray-100 grid grid-cols-2 xl:grid-cols-4 gap-4">
      
      <?php
      $args = array(
        'orderby' => 'post_date',
        'order' => 'ASC',
        'posts_per_page' => 8,
        'caller_get_posts' => 1
      );
      $the_query = new WP_Query( $args );
      while ($the_query -> have_posts()) : $the_query -> the_post();
      ?>
      <a href="<?php the_permalink(); ?>">
      <div class="dark:bg-gray-800 dark:text-white recent-post-row transition-all duration-300 cursor-pointer w-full shadow-lg hover:shadow-xl rounded-lg
          bg-gray-100 relative xl:flex xl:flex-row-reverse xl:items-center xl:px-6 xl:py-8">
          <span id="recent-ping-1" class="animate-ping absolute w-16 h-16 border-2 rounded-2xl border-red-500 opacity-75 hidden lg:inline-flex"></span>
        <img src="<?php the_post_thumbnail_url(); ?>" class="w-full h-48 bg-cover rounded-t-lg xl:w-24 xl:h-20 xl:rounded-lg xl:ml-2">
        <div class="p-6 xl:p-0">
              <div class="text-sm font-bold"><?php the_title(); ?></div>
              <div class="mt-2 text-gray-900 text-sm dark:text-white xl:hidden">
              <?php $content = get_the_content(); echo wp_trim_words( $content , '17' ); ?>
              </div>
            </div>
      </div>
      </a>
      <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>

<!-- Hubspot Calender -->
<div id="cal-container" class="dark:bg-gray-900 px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8 bg-[#e0f0fe] grid grid-cols-1 xl:grid-cols-2">
<div id="hubspot-cal"><iframe title="hubspot" src="https://meetings.hubspot.com/binod-kumar?embed=true" style="width: 100%; height: 680px; border: none; background: white;"></iframe></div>
<div id="contact-form"><?php echo do_shortcode('[contact-form-7 id="1457" title="Contact form 1"]') ?></div>
</div>


<?php
// get_sidebar();
get_footer();
