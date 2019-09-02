<section class="content-section">
  <div class="container-fluid wraper">
        <div class="row">
            <div class="container">
                <?php print $sidebar_left; ?>
                <div class="col-md-8">

                    <div class="row">
                    <div class="col-md-12">
                        <h1><?php print $page_details->page_title; ?></h1>
                        <p><?php print $page_details->page_description; ?></p>
                        <hr  />
                        <h2><?php print $page_details->page_title; ?> List</h2>
                        <div class="results">
                        <ul class="notice">
                		<?php 
                        if (is_array($records)) {
                        foreach($records as $row) {
                		?>
                        <li><i class="fa fa-angle-right"></i> <a href="<?php print $dwn_path.$row->file; ?>"><?php print $row->title; ?></a></li>
                        <?php } } else { print $records; } ?>
                        </ul>
                        </div>
                        <p class="paginate"><?php print $pagination; ?></p>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>