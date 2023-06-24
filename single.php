<?php
  get_header();     // loads header template
?>
    
    <article class="content px-3 py-5 p-md-5">


	<?php
	  if(have_posts() ){
		while( have_posts()) {
			                      // The WordPress Loop
			the_post();              
			get_template_part('template-parts/content', 'article'); // it will look for content-article
		}
	  }
	?>
	    
	    </article>
	    

	<?php
	  get_footer();    // loads footer template
	?>