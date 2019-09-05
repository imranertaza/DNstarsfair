
<section class="content-section">
    <div class="container-fluid wraper">
        <div class="row">
            <div class="container" id="area_pad">
                <link rel="stylesheet" href="<?php print base_url(); ?>assets/css/lightbox.css">
                <?php print $sidebar_left; ?>
                    <div class="col-md-9">

                        <h1><b><?php print $title; ?></b></h1>
                        <p class="border"></p> 
                        
                        <h4><b><i class="fa fa-list" aria-hidden="true"></i> <?php print $title; ?> List</b></h4>
                        
                        <?php if (is_array($list_slider)) { ?>                        
                        
                			<?php foreach ($list_gallery as $gallery) {?>
                            <div class="each_gallery_image" style="float:left; padding:3px; border:1px solid #ccc; margin:5px;">
                              <a class="example-image-link" href="<?php echo base_url(); ?>uploads/gallery/<?php print $gallery->image; ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img src="<?php echo base_url(); ?>assets/timthumb.php?src=<?php echo base_url(); ?>uploads/gallery/<?php print $gallery->image; ?>&amp;w=169&amp;h=169&amp;zc=1" /></a>
                            </div>
                            <?php } ?>
                            
                        <?php } ?>
                        
                        <p><?php print $pagination; ?></p>
                        
                 	</div>

                <script src="<?php print base_url(); ?>assets/js/lightbox-plus-jquery.js"></script>
            </div>
        </div>
    </div>
</section>

