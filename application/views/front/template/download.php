<section class="content-section">
  <div class="container-fluid wraper">
        <div class="row">
            <div class="container" id="area_pad">
                <?php print $sidebar_left; ?>
                
                <div class="col-md-9">
                                 
                    <h1><b><?php print $page_details->page_title; ?></b></h1>
                    <p class="border"></p>
                        
                        
                    <h4><b> <i class="fa fa-list" aria-hidden="true"></i> <?php print $page_details->page_title; ?> List</b></h4>
                        
                        
                    <ul class="notice">
                        <?php 
                            if (is_array($records)) {
                            foreach($records as $row) {
                    	?>
                        <li><i class="fa fa-angle-right"></i> <a href="<?php print $dwn_path.$row->file; ?>"><?php print $row->title; ?></a></li>
                        <?php } } else { print $records; } ?>
                    </ul>
                        
                        <p class="paginate"><?php print $pagination; ?></p>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>