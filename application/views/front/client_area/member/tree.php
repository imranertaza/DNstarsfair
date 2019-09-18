<div class="container-fluid wraper">
  <div class="row">
        <div class="container" id="area_pad">

              <?php print $sidebar_left; ?>

              <div class="col-md-9">
                <h1>My Tree</h1>
                <hr />
                <div class="row">
                  <div class="col-md-12">
                    <div class="tree">
                      <?php $u_id = empty($user_id) ? $ID : $user_id; ?>

                          <table class="table-bordered table-hover table">
                            <tbody>
                              <tr>
                                <td colspan="2"><strong><?php print $u_name;?></strong></td>
                              </tr>
                              <tr>
                                <td>Left LP</td>
                                <td><?php print $lpoint; ?></td>
                              </tr>
                              <tr>
                                <td>Right LP</td>
                                <td><?php print $rpoint; ?></td>
                              </tr>
                              <tr>
                                <td>Member Search</td>
                                <td>
                                <form method="post" action="">
                                <input type="text" id="user_tree_search" name="member_user">
                                <input type="submit" name="search_member" value="Search" />
                                </form>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        
                      <table width="520" height="273">
                      <?php if (!empty($p_id)) { ?>
                      <a href="<?php print base_url(); ?>member/general/tree/<?php print $p_id; ?>/">
                      <img style="width:20px; height:20px; margin:10px 0px 10px 410px;" src="<?php print base_url(); ?>/assets/images/arrow_up.png" /></a>
                      <?php } ?>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td colspan="3" align="right" valign="bottom"><img class="tree_arrow_left" src="<?php print base_url(); ?>assets/images/tree_arrow_left.png" /></td>
                          <td colspan="2" align="center"><a class="parent" href="<?php print base_url(); ?>member/general/tree/<?php print $u_id; ?>/"> <?php print view_user_image($u_id, 90, 90); ?> <?php print get_username_byID($u_id);
              						$p_left = get_hand_byID($u_id, 'l_t');
              						$p_right = get_hand_byID($u_id, 'r_t');
              						?> </a></td>
                          <td colspan="3" valign="bottom"><img class="tree_arrow_right" src="<?php print base_url(); ?>assets/images/tree_arrow.png" /></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td align="right" valign="bottom"><img class="tree_arrow_sort_l" src="<?php print base_url(); ?>assets/images/tree_arrow_left_short.png" /></td>
                          <td colspan="2" align="center" valign="top"><a href="<?php print base_url(); ?>member/general/tree/<?php print $p_left; ?>/"> <?php print view_user_image($p_left, 90, 90); ?>
                            <?php 
              						print get_username_byID($p_left);
              						$p_l_left = get_hand_byID($p_left, 'l_t');
              						$p_l_right = get_hand_byID($p_left, 'r_t');
              						?>
                            </a></td>
                          <td valign="bottom"><img class="tree_arrow_sort_r" src="<?php print base_url(); ?>assets/images/tree_arrow_right_short.png" /></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td align="right" valign="bottom"><img class="tree_arrow_sort_l" src="<?php print base_url(); ?>assets/images/tree_arrow_left_short.png" /></td>
                          <td colspan="2" width="54" height="70" align="center"><a href="<?php print base_url(); ?>member/general/tree/<?php print $p_right; ?>/"> <?php print view_user_image($p_right, 90, 90); ?>
                            <?php 
              						print get_username_byID($p_right);
              						$p_r_left = get_hand_byID($p_right, 'l_t');
              						$p_r_right = get_hand_byID($p_right, 'r_t');
              						?>
                            </a></td>
                          <td valign="bottom"><img class="tree_arrow_sort_r" src="<?php print base_url(); ?>assets/images/tree_arrow_right_short.png" /></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="right" valign="bottom"><img class="tree_arrow_sort_l" src="<?php print base_url(); ?>assets/images/tree_arrow_left_short.png" /></td>
                          <td width="54" height="70" align="center"><a href="<?php print base_url(); ?>member/general/tree/<?php print $p_l_left; ?>/"> <?php print view_user_image_leve2($p_l_left, 90, 90); ?>
                            <?php 
              						print get_username_byID($p_l_left);
              						$p_l_l_left = get_hand_byID($p_l_left, 'l_t');
              						$p_l_l_right = get_hand_byID($p_l_left, 'r_t');
              						?>
                            </a></td>
                          <td valign="bottom"><img class="tree_arrow_sort_r" src="<?php print base_url(); ?>assets/images/tree_arrow_right_short.png" /></td>
                          <td align="right" valign="bottom"><img class="tree_arrow_sort_l" src="<?php print base_url(); ?>assets/images/tree_arrow_left_short.png" /></td>
                          <td width="54" height="70" align="center"><a href="<?php print base_url(); ?>member/general/tree/<?php print $p_l_right; ?>/"> <?php print view_user_image_leve2($p_l_right, 90, 90); ?>
                            <?php 
              						print get_username_byID($p_l_right);
              						$p_l_r_left = get_hand_byID($p_l_right, 'l_t');
              						$p_l_r_right = get_hand_byID($p_l_right, 'r_t');
              						?>
                            </a></td>
                          <td valign="bottom"><img class="tree_arrow_sort_r" src="<?php print base_url(); ?>assets/images/tree_arrow_right_short.png" /></td>
                          <td align="right" valign="bottom"><img class="tree_arrow_sort_l" src="<?php print base_url(); ?>assets/images/tree_arrow_left_short.png" /></td>
                          <td width="54" height="70" align="center"><a href="<?php print base_url(); ?>member/general/tree/<?php print $p_r_left; ?>/"> <?php print view_user_image_leve2($p_r_left, 90, 90); ?>
                            <?php 
              						print get_username_byID($p_r_left);
              						$p_r_l_left = get_hand_byID($p_r_left, 'l_t');
              						$p_r_l_right = get_hand_byID($p_r_left, 'r_t');
              						?>
                            </a></td>
                          <td valign="bottom"><img class="tree_arrow_sort_r" src="<?php print base_url(); ?>assets/images/tree_arrow_right_short.png" /></td>
                          <td align="right" valign="bottom"><img class="tree_arrow_sort_l" src="<?php print base_url(); ?>assets/images/tree_arrow_left_short.png" /></td>
                          <td width="54" height="70" align="center"><a href="<?php print base_url(); ?>member/general/tree/<?php print $p_r_right; ?>/"> <?php print view_user_image_leve2($p_r_right, 90, 90); ?>
                            <?php 
              						print get_username_byID($p_r_right);
              						$p_r_r_left = get_hand_byID($p_r_right, 'l_t');
              						$p_r_r_right = get_hand_byID($p_r_right, 'r_t');
              						?>
                            </a></td>
                          <td valign="bottom"><img class="tree_arrow_sort_r" src="<?php print base_url(); ?>assets/images/tree_arrow_right_short.png" /></td>
                        </tr>
                        <tr>
                          <td width="54" height="70" align="center"><a href="<?php print base_url(); ?>member/general/tree/<?php print $p_l_l_left; ?>/"> <?php print view_user_image_leve3($p_l_l_left, 90, 90); ?>
                            <?php 
              						print get_username_byID($p_l_l_left);
              						//$p_l_l_left = get_hand_byID($p_l_left, 'l_t');
              						//$p_l_l_right = get_hand_byID($p_l_left, 'r_t');
              						?>
                            </a></td>
                          <td>&nbsp;</td>
                          <td width="54" height="70" align="center"><a href="<?php print base_url(); ?>member/general/tree/<?php print $p_l_l_right; ?>/"> <?php print view_user_image_leve3($p_l_l_right, 90, 90); ?>
                            <?php 
              						print get_username_byID($p_l_l_right);
              						//$p_l_l_left = get_hand_byID($p_l_left, 'l_t');
              						//$p_l_l_right = get_hand_byID($p_l_left, 'r_t');
              						?>
                            </a></td>
                          <td width="54" height="70" align="center"><a href="<?php print base_url(); ?>member/general/tree/<?php print $p_l_r_left; ?>/"> <?php print view_user_image_leve3($p_l_r_left, 90, 90); ?>
                            <?php 
              						print get_username_byID($p_l_r_left);
              						//$p_l_l_left = get_hand_byID($p_l_left, 'l_t');
              						//$p_l_l_right = get_hand_byID($p_l_left, 'r_t');
              						?>
                            </a></td>
                          <td>&nbsp;</td>
                          <td width="54" height="70" align="center"><a href="<?php print base_url(); ?>member/general/tree/<?php print $p_l_r_right; ?>/"> <?php print view_user_image_leve3($p_l_r_right, 90, 90); ?>
                            <?php 
              						print get_username_byID($p_l_r_right);
              						//$p_l_l_left = get_hand_byID($p_l_left, 'l_t');
              						//$p_l_l_right = get_hand_byID($p_l_left, 'r_t');
              						?>
                            </a></td>
                          <td width="54" height="70" align="center"><a href="<?php print base_url(); ?>member/general/tree/<?php print $p_r_l_left; ?>/"> <?php print view_user_image_leve3($p_r_l_left, 90, 90); ?>
                            <?php 
              						print get_username_byID($p_r_l_left);
              						//$p_l_l_left = get_hand_byID($p_l_left, 'l_t');
              						//$p_l_l_right = get_hand_byID($p_l_left, 'r_t');
              						?>
                            </a></td>
                          <td>&nbsp;</td>
                          <td width="54" height="70" align="center"><a href="<?php print base_url(); ?>member/general/tree/<?php print $p_r_l_right; ?>/"> <?php print view_user_image_leve3($p_r_l_right, 90, 90); ?>
                            <?php 
              						print get_username_byID($p_r_l_right);
              						//$p_l_l_left = get_hand_byID($p_l_left, 'l_t');
              						//$p_l_l_right = get_hand_byID($p_l_left, 'r_t');
              						?>
                            </a></td>
                          <td width="54" height="70" align="center"><a href="<?php print base_url(); ?>member/general/tree/<?php print $p_r_r_left; ?>/"> <?php print view_user_image_leve3($p_r_r_left, 90, 90); ?>
                            <?php 
              						print get_username_byID($p_r_r_left);
              						//$p_l_l_left = get_hand_byID($p_l_left, 'l_t');
              						//$p_l_l_right = get_hand_byID($p_l_left, 'r_t');
              						?>
                            </a></td>
                          <td>&nbsp;</td>
                          <td width="54" height="70" align="center"><a href="<?php print base_url(); ?>member/general/tree/<?php print $p_r_r_right; ?>/"> <?php print view_user_image_leve3($p_r_r_right, 90, 90); ?>
                            <?php 
              						print get_username_byID($p_r_r_right);
              						//$p_l_l_left = get_hand_byID($p_l_left, 'l_t');
              						//$p_l_l_right = get_hand_byID($p_l_left, 'r_t');
              						?>
                            </a></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

    </div>
  </div>
</div>
