
    <!--Cards-->
    <div class="rounded overflow-hidden shadow-lg dark:bg-gray-800">
    <a href="<?php the_permalink(); ?>">
    <img src="<?php the_post_thumbnail_url(); ?>" class="post-col-image w-full h-56 bg-cover hover:scale-90 transition-all duration-500 cursor-pointer">
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
