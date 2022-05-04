<script>
    jQuery(document).ready(function($) {
		$('.popup_container').click(function() {
			console.log("clicked");
            $('.popup-video__content').toggleClass('hide');
            $('.popup_container img').toggleClass('dropdown_active');
        });
	});
</script>
<div class="popup_section popup-video">
    <div class="popup_container">
		<div class="heading">
			<div>
				<img class="popup-icon" src="<?php echo get_template_directory_uri() . '/images/icons/plus_icon_white.png' ?>" alt="">
			</div>
			<div>
				<h4 class="popup-title"><?=get_field('popup_title','option'); ?></h4>
			</div>
		</div>
        
        <div class="popup-video__content hide">
            <div popup-video__content>
				<? $type = get_field( 'video_type', 'option' ); ?>
				<?php if($type == 'upload'): ?>
                 <video class="video_section_upload" style=" height:30%; width:100%" controls="true" loop autoplay="true">
                <source src="<?=get_field('video_link','option'); ?>">
            </video>
				<?php else : ?>
					<embed class="video_section_embed" src="<?=get_field('video_link','option'); ?>"autoplay=1>
				<? endif; ?>
            </div>
        </div>
    </div>
</div>