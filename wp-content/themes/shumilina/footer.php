					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<span class="copy">
			<?= (date('Y') != '2017') ? '2017-' . date('Y') : date('Y') ?> &copy; <?php bloginfo('title') ?>
		</span>
		<?php wp_nav_menu(array('theme_location' => 'footer_menu', 'menu_class' => 'footer-nav')); ?>
	</footer>
	<a href="#" class="back-to-top no-loading">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 256 256" height="50px" id="Layer_1" version="1.1" viewBox="0 0 256 256" width="50px" xml:space="preserve"><path d="M184.746,156.373c-1.639,0-3.275-0.625-4.525-1.875L128,102.278l-52.223,52.22c-2.497,2.5-6.55,2.5-9.05,0  c-2.5-2.498-2.5-6.551,0-9.05l56.749-56.747c1.2-1.2,2.828-1.875,4.525-1.875l0,0c1.697,0,3.325,0.675,4.525,1.875l56.745,56.747  c2.5,2.499,2.5,6.552,0,9.05C188.021,155.748,186.383,156.373,184.746,156.373z M256,128C256,57.42,198.58,0,128,0  C57.42,0,0,57.42,0,128c0,70.58,57.42,128,128,128C198.58,256,256,198.58,256,128z M243.2,128c0,63.521-51.679,115.2-115.2,115.2  c-63.522,0-115.2-51.679-115.2-115.2C12.8,64.478,64.478,12.8,128,12.8C191.521,12.8,243.2,64.478,243.2,128z"/></svg>
		<span>Наверх</span>
	</a>
	<?php get_template_part('template-parts/modals/modal'); ?>
<?php wp_footer(); ?>
</body>
</html>