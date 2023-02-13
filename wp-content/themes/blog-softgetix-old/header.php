<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog-softgetix
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blog-softgetix' ); ?></a>

	<header id="masthead" class="site-header card dark:bg-gray-900">
		<nav class="relative lg:px-20 px-4 py-4">
		
		<div class="flex justify-between items-center">
		<div class="object-cover w-48 dark:fill-white">
		<a href="https://softgetix.com/">
		<img src="<?php echo get_template_directory_uri() . '/img/logo.svg' ?>" alt="Company Name" />
		</a>
		</div>
		

			<ul class="hidden md:flex space-x-6">
				<li><a href="https://softgetix.com/about" class="dark:text-white text-sBlue-800 font-semibold hover:text-sOrange-800">ABOUT US</a></li>
				<li><a href="https://softgetix.com/it-staff-augmentation-services" class="dark:text-white text-sBlue-800 font-semibold hover:text-sOrange-800">STAFFING</a></li>
				<li class="flex relative group">
				<a href="#" class="dark:text-white mr-1 text-sBlue-800 font-semibold hover:text-sOrange-800">SERVICES</a> 
				<i class="dark:text-white fa-solid fa-chevron-down fa-2xs pt-3"></i>
				<!-- Submenu starts -->
				<ul id="nav-sub-menu" class="z-50 absolute bg-white p-3 w-60 top-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg">
					<li class="text-sm hover:bg-slate-100 leading-8"><a href="https://softgetix.com/dedicated-team">Dedicated Development Team</a></li>
					<li class="text-sm hover:bg-slate-100 leading-8"><a href="https://softgetix.com/it-staff-augmentation">IT Staff Augmentation</a></li>
					<li class="text-sm hover:bg-slate-100 leading-8"><a href="https://softgetix.com/backend-development-services">Back End Development Services</a></li>
					<li class="text-sm hover:bg-slate-100 leading-8"><a href="https://softgetix.com/frontend-development-services">Front End Development Services</a></li>
					<li class="text-sm hover:bg-slate-100 leading-8"><a href="https://softgetix.com/web-development-services">Web Development Services</a></li>
				</ul>
				<!-- Submenu ends -->
				</li>
				<li><a href="https://softgetix.com/career" class="text-sOrange-800 font-semibold">CAREERS</a></li>

			</ul>

			
			<button id="nav-btn" class="hidden lg:inline-flex bg-transparent hover:bg-sOrange-800 text-sOrange-800 font-semibold hover:text-white py-2 px-12 border-2 border-sOrange-800 hover:border-transparent rounded">
			Contact Us
			</button>
			<button id="theme-toggle" type="button" class="text-sOrange-800 dark:text-sOrange-800 hover:bg-gray-100 dark:hover:bg-gray-100 focus:outline-none rounded-lg text-sm p-2.5">
			<svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
			<svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
			</button>
			<!-- Mobile menu icon -->
			<button id="mobile-icon" class="md:hidden">
			<i onclick="changeIcon(this)" class="fa-solid fa-bars"></i>
			</button>
			
			</div>
		
		<!-- Mobile menu -->
		<div class="md:hidden flex justify-center mt-3 w-full">
			<div id="mobile-menu" class="mobile-menu absolute top-23 w-full"> <!-- add hidden here later -->
			<ul class="bg-gray-100 shadow-lg leading-9 font-bold h-screen">
				<li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4"><a href="https://google.com" class="block pl-7">Home</a></li>
				<li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4"><a href="#" class="block pl-7">News</a></li>
				<li class="border-b-2 border-white hover:bg-red-400 hover:text-white">
				<a href="#" class="block pl-11">Services <i class="fa-solid fa-chevron-down fa-2xs pt-4"></i></a> 
				
				<!-- Submenu starts -->
				<ul class="bg-white text-gray-800 w-full">
					<li class="text-sm leading-8 font-normal hover:bg-slate-200"><a class="block pl-16" href="#">Webdesign</a></li>
					<li class="text-sm leading-8 font-normal hover:bg-slate-200"><a class="block pl-16" href="#">Digital marketing</a></li>
					<li class="text-sm leading-8 font-normal hover:bg-slate-200"><a class="block pl-16" href="#">SEO</a></li>
					<li class="text-sm leading-8 font-normal hover:bg-slate-200"><a class="block pl-16" href="#">Ad campaigns</a></li>
					<li class="text-sm leading-8 font-normal hover:bg-slate-200"><a class="block pl-16" href="#">UX Design</a></li>
				</ul>
				<!-- Submenu ends -->
				</li>
				<li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4"><a href="#" class="block pl-7">About</a></li>
				<li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4"><a href="#" class="block pl-7">Contact</a></li>
			</ul>
			</div>
		</div>
		
		</nav>
	</header><!-- #masthead -->



	
