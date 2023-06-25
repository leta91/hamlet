<?php
  get_header();     // loads header template
?>
    
    <article class="content px-3 py-5 p-md-5">


	<?php
	  if(have_posts() ){
		while( have_posts()) {
			                      // The WordPress Loop
			the_post();              
			get_template_part('template-parts/content', 'archive'); // it will look for content-archive
		}
	  }
	?>
	    
	    </article>
	    

	<?php
	  get_footer();    // loads footer template
	?>