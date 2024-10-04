<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kadence
 */

namespace Kadence;

if (!defined('ABSPATH')) {
	exit;
}

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js" <?php kadence()->print_microdata('html'); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php
	/**
	 * Kadence before wrapper hook.
	 */
	do_action('kadence_before_wrapper');
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Drina</title>
		<link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link
			href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
			rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
			integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
			crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link
			href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
			rel="stylesheet">

		<script src="https://cdn.tailwindcss.com"></script>
		<script>
			tailwind.config = {
				theme: {
					extend: {
						colors: {
							bg: '#F0F5FC',
							primary: '#19334E',
							button: '#1061B6'
						},
						fontFamily: {
							heading: '"Lato", sans-serif',
							description: '"Poppins", sans-serif'
						},
						borderRadius: {
							common: "32px"
						},
						opacity: {
							bright: "0.99"
						},
						fontSize: {
							heading: "52px"
						},
						boxShadow: {
							common: "0px 4px 20px 0px rgba(177, 177, 177, 0.25)"
						}
					}
				}
			}
		</script>
		<style>
			body {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				font-family: "Poppins", sans-serif;
				scroll-behavior: smooth;
			}

			footer li {
				font-family: "Lato", sans-serif;
				font-size: 16px;
				font-weight: 400;
				color: #6C849E;
				line-height: 20px;
				padding-bottom: 12px;
			}

			.menu ul {
				display: flex !important;
				gap: 50px;
			}
		</style>
	</head>

	<body>
		<!-- Header -->
		<header class="flex justify-center">
			<nav class="absolute z-[999]  top-0 mx-auto bg-bg flex max-w-7xl items-center justify-between py-5 px-10 lg:px-[60px] md:rounded-b-common rounded-b-common"
				aria-label="Global">
				<div class="flex lg:flex-1 max-w-[200px]">
					<a href="#" class="-m-1.5 p-1.5">
						<span class="sr-only">Your Company</span>
						<?php the_custom_logo() ?>
					</a>
				</div>
				<div class="flex lg:hidden">
					<button type="button"
						class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
						aria-controls="mobile-menu">
						<span class="sr-only">Open main menu</span>
						<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
							aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round"
								d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
						</svg>
					</button>
				</div>
				<div class="hidden lg:flex lg:gap-x-12 pl-7">
					<!-- <div class="relative">
						<button type="button"
							class="flex items-center gap-x-1 text-lg font-normal font-heading leading-6 text-primary"
							aria-expanded="false" aria-controls="product-menu">
							About
							<svg class="h-6 w-6 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor"
								aria-hidden="true">
								<path fill-rule="evenodd"
									d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
									clip-rule="evenodd" />
							</svg>
						</button>
						<div class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-sm overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5 hidden"
							id="product-menu">
							<div class="p-4">
								<div
									class="group relative flex items-center gap-x-6 rounded-lg py-2 px-5 text-sm leading-6 hover:bg-gray-50">
									<div class="flex-auto">
										<a href="#" class="block font-normal font-description text-primary text-base">
											Drina as inpiration
											<span class="absolute inset-0"></span>
										</a>
									</div>
								</div>
								<div
									class="group relative flex items-center gap-x-6 rounded-lg py-2 px-5 text-sm leading-6 hover:bg-gray-50">
									<div class="flex-auto">
										<a href="#" class="block font-normal font-description text-primary text-base">
											Our Team
											<span class="absolute inset-0"></span>
										</a>
									</div>
								</div>
								<div
									class="group relative flex items-center gap-x-6 rounded-lg py-2 px-5 text-sm leading-6 hover:bg-gray-50">
									<div class="flex-auto">
										<a href="#" class="block font-normal font-description text-primary text-base">
											International Presence
											<span class="absolute inset-0"></span>
										</a>
									</div>
								</div>
								<div
									class="group relative flex items-center gap-x-6 rounded-lg py-2 px-5 text-sm leading-6 hover:bg-gray-50">
									<div class="flex-auto">
										<a href="#" class="block font-normal font-description text-primary text-base">
											Mission and Vision
											<span class="absolute inset-0"></span>
										</a>
									</div>
								</div>
								<div
									class="group relative flex items-center gap-x-6 rounded-lg px-5 py-2 text-sm leading-6 hover:bg-gray-50">
									<div class="flex-auto">
										<a href="#" class="block font-normal font-description text-primary text-base">
											Why DRINA Consulting?
											<span class="absolute inset-0"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="relative">
						<button type="button"
							class="flex items-center gap-x-1 text-lg font-normal font-heading leading-6 text-primary"
							aria-expanded="false" aria-controls="product-menu-two">
							Services
							<svg class="h-6 w-6 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor"
								aria-hidden="true">
								<path fill-rule="evenodd"
									d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
									clip-rule="evenodd" />
							</svg>
						</button>
						<div class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5 hidden"
							id="product-menu-two">
							<div class="p-4">
								<div
									class="group relative flex items-center gap-x-6 rounded-lg py-2 px-5 text-sm leading-6 hover:bg-gray-50">
									<div class="flex-auto">
										<a href="#" class="block font-normal font-description text-primary text-base">
											Projects
											<span class="absolute inset-0"></span>
										</a>
									</div>
								</div>
								<div
									class="group relative flex items-center gap-x-6 rounded-lg py-2 px-5 text-sm leading-6 hover:bg-gray-50">
									<div class="flex-auto">
										<a href="#" class="block font-normal font-description text-primary text-base">
											Compliance
											<span class="absolute inset-0"></span>
										</a>
									</div>
								</div>
								<div
									class="group relative flex items-center gap-x-6 rounded-lg py-2 px-5 text-sm leading-6 hover:bg-gray-50">
									<div class="flex-auto">
										<a href="#" class="block font-normal font-description text-primary text-base">
											Advisory Consulting Services
											<span class="absolute inset-0"></span>
										</a>
									</div>
								</div>
								<div
									class="group relative flex items-center gap-x-6 rounded-lg py-2 px-5 text-sm leading-6 hover:bg-gray-50">
									<div class="flex-auto">
										<a href="#" class="block font-normal font-description text-primary text-base">
											Customized Trainings
											<span class="absolute inset-0"></span>
										</a>
									</div>
								</div>
								<div
									class="group relative flex items-center gap-x-6 rounded-lg px-5 py-2 text-sm leading-6 hover:bg-gray-50">
									<div class="flex-auto">
										<a href="#" class="block font-normal font-description text-primary text-base">
											Other Services
											<span class="absolute inset-0"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<span class="text-lg font-normal font-heading leading-6 text-primary relative">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'header-Main-Menu'
							)
						)
							?>
					</span>
					<!-- <a href="#" class="text-lg font-normal font-heading leading-6 text-primary">Our Successful
						Stories</a>
					<a href="#" class="text-lg font-normal font-heading leading-6 text-primary">Blogs And
						Newsletters</a>
					<a href="#" class="text-lg font-normal font-heading leading-6 text-primary">Careers</a> -->
				</div>
				<div class="hidden lg:flex lg:flex-1 lg:justify-end max-w-[200px]">
					<?php
					if (is_active_sidebar('header-button')) {
						dynamic_sidebar('header-button');
					}
					?>
				</div>
			</nav>
			<!-- Mobile menu, show/hide based on menu open state. -->
			<div class="lg:hidden hidden" role="dialog" aria-modal="true" id="mobile-menu">
				<!-- Background backdrop, show/hide based on slide-over state. -->
				<div class="fixed inset-0 z-10"></div>
				<div
					class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
					<div class="flex items-center justify-between">
						<a href="#" class="-m-1.5 p-1.5">
							<span class="sr-only">Your Company</span>
							<img class="" src="/images/drina_logo.svg" alt="Mobile-logo">
						</a>
						<button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700"
							aria-controls="close-mobile-menu">
							<span class="sr-only">Close menu</span>
							<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
								stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>
						</button>
					</div>
					<div class="mt-6 flow-root">
						<div class="-my-6 divide-y divide-gray-500/10">
							<div class="space-y-2 py-6">
								<div class="-mx-3">
									<button type="button"
										class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-lg font-normal font-heading leading-6 text-primary hover:bg-gray-50"
										aria-expanded="false" aria-controls="product-mobile-menu">
										About
										<svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
											aria-hidden="true">
											<path fill-rule="evenodd"
												d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
												clip-rule="evenodd" />
										</svg>
									</button>
									<!-- 'Product' sub-menu, show/hide based on menu state. -->
									<div class="mt-2 space-y-2 hidden" id="product-mobile-menu">
										<a href="#"
											class="block rounded-lg py-2 pl-6 pr-3 text-lg font-light font-description text-primary hover:bg-gray-50">Drina
											as inpiration</a>
										<a href="#"
											class="block rounded-lg py-2 pl-6 pr-3 text-lg font-light font-description text-primary hover:bg-gray-50">Our
											Team</a>
										<a href="#"
											class="block rounded-lg py-2 pl-6 pr-3 text-lg font-light font-description text-primary hover:bg-gray-50">International
											Presence</a>
										<a href="#"
											class="block rounded-lg py-2 pl-6 pr-3 text-lg font-light font-description text-primary hover:bg-gray-50">Mission
											and Vision</a>
										<a href="#"
											class="block rounded-lg py-2 pl-6 pr-3 text-lg font-light font-description text-primary hover:bg-gray-50">Why
											DRINA Consulting?</a>
									</div>
								</div>
								<div class="-mx-3">
									<button type="button"
										class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-lg font-normal font-heading leading-6 text-primary hover:bg-gray-50"
										aria-expanded="false" aria-controls="product-mobile-menu-two">
										Services
										<svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
											aria-hidden="true">
											<path fill-rule="evenodd"
												d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
												clip-rule="evenodd" />
										</svg>
									</button>
									<!-- 'Product' sub-menu, show/hide based on menu state. -->
									<div class="mt-2 space-y-2 hidden" id="product-mobile-menu-two">
										<a href="#"
											class="block rounded-lg py-2 pl-6 pr-3 text-lg font-light font-description text-primary hover:bg-gray-50">Projects</a>
										<a href="#"
											class="block rounded-lg py-2 pl-6 pr-3 text-lg font-light font-description text-primary hover:bg-gray-50">Compliance</a>
										<a href="#"
											class="block rounded-lg py-2 pl-6 pr-3 text-lg font-light font-description text-primary hover:bg-gray-50">Advisory
											Consulting Services</a>
										<a href="#"
											class="block rounded-lg py-2 pl-6 pr-3 text-lg font-light font-description text-primary hover:bg-gray-50">Customized
											Trainings</a>
										<a href="#"
											class="block rounded-lg py-2 pl-6 pr-3 text-lg font-light font-description text-primary hover:bg-gray-50">Other
											Services</a>
									</div>
								</div>
								<a href="#"
									class="-mx-3 block rounded-lg px-3 py-2 text-lg font-normal font-heading leading-6 text-primary hover:bg-gray-50">Our
									Successful Stories</a>
								<a href="#"
									class="-mx-3 block rounded-lg px-3 py-2 text-lg font-normal font-heading leading-6 text-primary hover:bg-gray-50">Blogs</a>
								<a href="#"
									class="-mx-3 block rounded-lg px-3 py-2 text-lg font-normal font-heading leading-6 text-primary hover:bg-gray-50">Careers</a>
							</div>
							<div class="py-6">
								<button
									class="bg-button text-lg font-heading font-normal text-white px-7 py-2 rounded-2xl">Contact
									Us</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="inner-wrap" class="wrap hfeed kt-clear">
			<?php
			/**
			 * Hook for top of inner wrap.
			 */
			do_action('kadence_before_content');
			?>