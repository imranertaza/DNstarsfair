
<section class="content-section">
  <div class="container-fluid wraper">
        <div class="row">
            <div class="container">
                <link rel="stylesheet" href="<?php print base_url(); ?>assets/css/lightbox.css">
                <?php print $sidebar_left; ?>
                <div class="col-md-8">
                		
                        <div class="row">
                        <div class="col-md-12">
                    	<h1><?php print $title; ?></h1>
                        <hr />
                        </div>
                        </div>
                        
                        
                        <?php if (is_array($list_slider)) { ?>
                        <div class="row">
                        <div class="col-md-12">
                			<?php foreach ($list_gallery as $gallery) {?>
                            <div class="each_gallery_image" style="float:left; padding:3px; border:1px solid #ccc; margin:5px;">
                              <a class="example-image-link" href="<?php echo base_url(); ?>uploads/gallery/<?php print $gallery->image; ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img src="<?php echo base_url(); ?>assets/timthumb.php?src=<?php echo base_url(); ?>uploads/gallery/<?php print $gallery->image; ?>&amp;w=169&amp;h=169&amp;zc=1" /></a>
                            </div>
                            <?php } ?>
                        </div>
                        </div>
                        <?php } ?>
                        
                        <p><?php print $pagination; ?></p>
                        
                 	</div>

                <script src="<?php print base_url(); ?>assets/js/lightbox-plus-jquery.js"></script>
            </div>
        </div>
    </div>
</section>

