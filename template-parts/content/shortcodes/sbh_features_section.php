<section>
    <div class="row feature-wrapper">
		<div class="col-md-12">
			<h4 class="feature-section-subheadline"><?php echo get_field('sbh_features_section_subheadline','option') ?></h4>

			<h2 class="feature-heading"><?php echo get_field('sbh_features_section_headline','option') ?></h2>
			</div>
		</div>
        <div class="feature-containter">
            <?php
            if (have_rows('sbh_features_section_repeater', 'option')) :
                while (have_rows('sbh_features_section_repeater', 'option')) : the_row();
            ?>
                    <div class="feature-card-wrapper">
                        <div class="feature-card">
							<img src="<?php echo get_sub_field('feature_image')['url'] ?>" alt="">
                              
                       <h4 class="service-heading"><?php echo get_sub_field('service_name', 'option') ?></h4>
<!--                          <h5 class="service-subheading"><?php //echo get_sub_field('service_subheadline', 'option') ?></h5> -->
                            <p class="service-text"><?php echo get_sub_field('service_content', 'option') ?></p>
                            <p class="service-link">
								<a class="link-button" href="<?php echo get_sub_field('service_link', 'option') ?>" >Learn More</a>
							</p>
                        </div>
						</div>
              
<?php
                endwhile;
            endif;
            ?>
		</div>
      	<div class="col-md-12">
			<h4 class="feature-section-subheadline">	<?php echo get_field('home_video','option') ?></h4>
			</div>
</section>