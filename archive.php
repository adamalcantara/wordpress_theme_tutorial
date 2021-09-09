<!-- Get the header dynamically -->
<?php
		get_header();
	
	?>
    
        <!-- Article tag which contains the content -->
		<article class="content px-3 py-5 p-md-5">
	    
        <!-- PHP to get content from Wordpress -->
		<?php
		if( have_posts() ) {
			while( have_posts() ) {
				the_post();
				
                //1st parameter is url, 2nd parameter is the hyphenated parameter
                get_template_part( 'template-parts/content', 'archive' );
			}
		}
		
		?>

	    </article>
	    
    
    <!-- Get the footer dynamically -->
	<?php
		get_footer();
	?>