<div id="sidebar" class="navbar-collapse collapse">

    <div id="sidebar-collapse" class="">


        <i class="fa fa-angle-double-left"></i>


    </div>

    <ul class="nav nav-list">
        <?php if (is_admin()) { ?>
            <!--<li class="active"> HIGHLIGHTS MENU-->
            <li class="<?php echo is_active_menu('admin/index'); ?>">
                <a href="<?php echo site_url('admin/index'); ?>">
                    <i class="fa fa-dashboard"></i>
                    <span><?php echo lang_key("dashboard"); ?></span>
                </a>
            </li>
            <li class="<?php echo is_active_menu('admin/themes'); ?>">
                <a href="<?php echo site_url('admin/themes'); ?>">
                    <i class="fa fa-desktop"></i>
                    <span><?php echo lang_key("themes"); ?></span>
                </a>
            </li>
        <?php } ?>

        <?php if(is_admin()){?>

        <li class="<?php echo is_active_menu('admin/slider'); ?>">


            <a href="#" class="dropdown-toggle">


                <i class="fa fa-file-o"></i>


                <span><?php echo lang_key('parallax_slider'); ?></span>


                <b class="arrow fa fa-angle-right"></b>


            </a>


            <ul class="submenu">


                <!--<li class="active"> HIGHLIGHTS SUBMENU-->


                <li class="<?php echo is_active_menu('admin/slider/all'); ?>"><a
                        href="<?php echo site_url('admin/slider/all'); ?>"><?php echo lang_key('all'); ?></a></li>


                <li class="<?php echo is_active_menu('admin/slider/manage'); ?>"><a
                        href="<?php echo site_url('admin/slider/manage'); ?>"><?php echo lang_key('add_new'); ?></a></li>


            </ul>

        </li>


        <?php }?>

        <li class="<?php echo is_active_menu('admin/content/'); ?>">
            <a href="#" class="dropdown-toggle">
                <i class="fa fa-car"></i>
                <span><?php echo lang_key("product_name"); ?></span>
                <b class="arrow fa fa-angle-right"></b>
            </a>

            <ul class="submenu">

                <li class="<?php echo is_active_menu('admin/content/allposts'); ?>">
                    <a href="<?php echo site_url('admin/content/allposts'); ?>">
                        <?php echo lang_key('all_cars'); ?>
                    </a>
                </li>

                

                <li class="<?php echo is_active_menu('post-ad'); ?>">
                    <a href="<?php echo site_url('post-ad'); ?>">
                        <?php echo lang_key('new_car'); ?>
                    </a>
                </li>


                <?php if (is_admin()) { ?>

                <li class="<?php echo is_active_menu('admin/content/reportedpost'); ?>">
                    <a href="<?php echo site_url('admin/content/reportedpost'); ?>">
                        <?php echo lang_key('reported_cars'); ?>
                    </a>
                </li>


                <li class="<?php echo is_active_menu('admin/content/locations'); ?>">
                    <a href="<?php echo site_url('admin/content/locations'); ?>">
                        <?php echo lang_key('locations'); ?>
                    </a>
                </li>

                <li class="<?php echo is_active_menu('admin/content/paypalsettings'); ?>">
                    <a href="<?php echo site_url('admin/content/paypalsettings'); ?>">
                        <?php echo lang_key('paypal_settings'); ?>
                    </a>
                </li>

                <li class="<?php echo is_active_menu('admin/content/payments'); ?>">
                    <a href="<?php echo site_url('admin/content/payments'); ?>">
                        <?php echo lang_key('payment_history'); ?>
                    </a>
                </li>

                <li class="<?php echo is_active_menu('admin/content/contentsettings'); ?>">
                    <a href="<?php echo site_url('admin/content/contentsettings'); ?>">
                        <?php echo lang_key('site_settings'); ?>
                    </a>
                </li>

                <li class="<?php echo is_active_menu('admin/content/bannersettings'); ?>">
                    <a href="<?php echo site_url('admin/content/bannersettings'); ?>">
                        <?php echo lang_key('banner_settings'); ?>
                    </a>
                </li>

                <li class="<?php echo is_active_menu('admin/content/sendnewsletter'); ?>">
                    <a href="<?php echo site_url('admin/content/sendnewsletter'); ?>">
                        <?php echo lang_key('send_newsletter'); ?>
                    </a>
                </li>

                <li class="<?php echo is_active_menu('admin/content/emailtracker'); ?>">
                    <a href="<?php echo site_url('admin/content/emailtracker'); ?>">
                        <?php echo lang_key('email_tracker'); ?>
                    </a>
                </li>

                <li class="<?php echo is_active_menu('admin/content/bulkemailform'); ?>">
                    <a href="<?php echo site_url('admin/content/bulkemailform'); ?>">
                        <?php echo lang_key('bulk_email'); ?>
                    </a>
                </li>

                <?php } ?>

            </ul>
        </li>

        <?php if (is_admin()) { ?>

        <li class="<?php echo is_active_menu(array('admin/category','admin/caroptions','admin/customfields','admin/brandmodels')); ?>">
            <a href="#" class="dropdown-toggle">
                <i class="fa fa-bars"></i>
                <span><?php echo lang_key('car_options'); ?></span>
                <b class="arrow fa fa-angle-right"></b>
            </a>

            <ul class="submenu">
                <li class="<?php echo is_active_menu('admin/category/all'); ?>">
                    <a href="<?php echo site_url('admin/category/all'); ?>">
                        <?php echo lang_key('all_categories'); ?>
                    </a>
                </li>

                <li class="<?php echo is_active_menu('admin/brandmodels'); ?>">
                    <a href="<?php echo site_url('admin/brandmodels'); ?>">
                        <span><?php echo lang_key('brandmodels'); ?></span>
                    </a>
                </li>

                <li class="<?php echo is_active_menu('admin/caroptions/all/conditions'); ?>">
                    <a href="<?php echo site_url('admin/caroptions/all/conditions'); ?>">
                        <span><?php echo lang_key('carconditions'); ?></span>
                    </a>
                </li>

                <li class="<?php echo is_active_menu('admin/caroptions/all/transmissions'); ?>">
                    <a href="<?php echo site_url('admin/caroptions/all/transmissions'); ?>">
                        <span><?php echo lang_key('transmissions'); ?></span>
                    </a>
                </li>

                <li class="<?php echo is_active_menu('admin/caroptions/all/fueltypes'); ?>">
                    <a href="<?php echo site_url('admin/caroptions/all/fueltypes'); ?>">
                        <span><?php echo lang_key('fueltypes'); ?></span>
                    </a>
                </li>

                <li class="<?php echo is_active_menu('admin/customfields/all'); ?>">
                    <a href="<?php echo site_url('admin/customfields/all'); ?>">
                        <span><?php echo lang_key('customfields'); ?></span>
                    </a>
                </li>


            </ul>
        </li>



        <?php } ?>

        <li class="<?php echo is_active_menu('admin/editprofile'); ?>">


            <a href="<?php echo site_url('admin/editprofile'); ?>">


                <i class="fa fa-user"></i>


                <span><?php echo lang_key('profile'); ?></span>


            </a>


        </li>

        <?php if (is_admin()) { ?>



            <li class="<?php echo is_active_menu('admin/package/'); ?>">
                <a href="#" class="dropdown-toggle">
                    <i class="fa fa-bars"></i>
                    <span><?php echo lang_key('packages'); ?></span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>


                <ul class="submenu">
                    <li class="<?php echo is_active_menu('admin/package/all'); ?>">
                        <a href="<?php echo site_url('admin/package/all'); ?>">
                            <?php echo lang_key('all_packages'); ?>
                        </a>
                    </li>

                    <?php $urls = array('admin/package/addpackage', 'admin/package/newpackage'); ?>
                    <li class="<?php echo is_active_menu($urls); ?>">
                        <a href="<?php echo site_url('admin/package/newpackage'); ?>">
                            <?php echo lang_key('create_new_package'); ?>
                        </a>
                    </li>

                    <li class="<?php echo is_active_menu('admin/package/settings'); ?>">
                        <a href="<?php echo site_url('admin/package/settings'); ?>">
                            <?php echo lang_key('package_settings'); ?>
                        </a>
                    </li>


                </ul>

            </li>
            <li class="<?php echo is_active_menu(array('admin/users','admin/edituser')); ?>">


                <a href="<?php echo site_url('admin/users'); ?>">


                    <i class="fa fa-users"></i>


                    <span><?php echo lang_key('users'); ?></span>


                </a>


            </li>
            <li class="<?php echo is_active_menu('admin/widgets/'); ?>">


                <a href="#" class="dropdown-toggle">


                    <i class="fa fa-bars"></i>


                    <span><?php echo lang_key('widgets'); ?></span>


                    <b class="arrow fa fa-angle-right"></b>


                </a>


                <ul class="submenu">


                    <li class="<?php echo is_active_menu('admin/widgets/all'); ?>"><a
                            href="<?php echo site_url('admin/widgets/all'); ?>">


                            <?php echo lang_key('all_widgets'); ?>


                        </a>


                    </li>


                    <li class="<?php echo is_active_menu('admin/widgets/widgetpositions'); ?>"><a
                            href="<?php echo site_url('admin/widgets/widgetpositions'); ?>">


                            <?php echo lang_key('widget_positions'); ?>


                        </a>


                    </li>


                </ul>


            </li>
            
            <li class="<?php echo is_active_menu('admin/plugins/index'); ?>">


                <a href="<?php echo site_url('admin/plugins/index'); ?>">


                    <i class="fa fa-cloud-upload"></i>


                    <span><?php echo lang_key('upload'); ?></span>


                </a>


            </li>





            <li class="<?php echo is_active_menu('admin/blog/'); ?>">


                <a href="#" class="dropdown-toggle">


                    <i class="fa fa-file-o"></i>


                    <span><?php echo lang_key('blog_news_article'); ?></span>


                    <b class="arrow fa fa-angle-right"></b>


                </a>


                <ul class="submenu">

                    <li class="<?php echo is_active_menu('admin/blog/all'); ?>"><a
                            href="<?php echo site_url('admin/blog/all'); ?>"><?php echo lang_key('all_posts'); ?></a></li>


                    <li class="<?php echo is_active_menu('admin/blog/manage'); ?>"><a
                            href="<?php echo site_url('admin/blog/manage'); ?>"><?php echo lang_key('new_post'); ?></a></li>


                </ul>


            </li>
            <li class="<?php echo is_active_menu('admin/page/'); ?>">


                <a href="#" class="dropdown-toggle">


                    <i class="fa fa-file-o"></i>


                    <span><?php echo lang_key('pages_and_menu'); ?></span>


                    <b class="arrow fa fa-angle-right"></b>


                </a>


                <ul class="submenu">


                    <!--<li class="active"> HIGHLIGHTS SUBMENU-->


                    <li class="<?php echo is_active_menu('admin/page/all'); ?>"><a
                            href="<?php echo site_url('admin/page/all'); ?>"><?php echo lang_key('all_pages'); ?></a></li>


                    <li class="<?php echo is_active_menu('admin/page/index'); ?>"><a
                            href="<?php echo site_url('admin/page/index'); ?>"><?php echo lang_key('new_page'); ?></a></li>


                    <li class="<?php echo is_active_menu('admin/page/menu'); ?>"><a
                            href="<?php echo site_url('admin/page/menu'); ?>"><?php echo lang_key('menu'); ?></a></li>


                </ul>


            </li>

            <li class="<?php echo is_active_menu('admin/system'); ?>">


                <a href="#" class="dropdown-toggle">


                    <i class="fa fa-cog"></i>


                    <span><?php echo lang_key('system'); ?></span>


                    <b class="arrow fa fa-angle-right"></b>


                </a>


                <ul class="submenu">

                    <li class="<?php echo is_active_menu('admin/system/allbackups'); ?>"><a
                            href="<?php echo site_url('admin/system/allbackups'); ?>"><?php echo lang_key('manage_backups'); ?></a></li>

                    <li class="<?php echo is_active_menu('admin/system/smtpemailsettings'); ?>"><a
                            href="<?php echo site_url('admin/system/smtpemailsettings'); ?>"><?php echo lang_key('smtp_email_settings'); ?></a>
                    </li>

                    <li class="<?php echo is_active_menu('admin/system/emailtmpl'); ?>"><a
                            href="<?php echo site_url('admin/system/emailtmpl'); ?>"><?php echo lang_key('edit_email_text'); ?></a></li>

                    <li class="<?php echo is_active_menu('admin/system/debugemail'); ?>"><a
                            href="<?php echo site_url('admin/system/debugemail'); ?>"><?php echo lang_key('debug_email'); ?></a></li>


                    <li class="<?php echo is_active_menu('admin/system/sitesettings'); ?>"><a
                            href="<?php echo site_url('admin/system/sitesettings'); ?>"><?php echo lang_key('default_site_settings'); ?></a></li>


                    <li class="<?php echo is_active_menu('admin/system/settings'); ?>"><a
                            href="<?php echo site_url('admin/system/settings'); ?>"><?php echo lang_key('admin_settings'); ?></a></li>


                    <li class="<?php echo is_active_menu('admin/system/generatesitemap'); ?>"><a
                            href="<?php echo site_url('admin/system/generatesitemap'); ?>"><?php echo lang_key('sitemap'); ?></a></li>

                    <!-- added on version 1.5 -->
                    <li class="<?php echo is_active_menu('admin/system/clearunusedimg'); ?>">
                        <a href="<?php echo site_url('admin/system/clearunusedimg'); ?>">
                            <?php echo lang_key('clear_unused_img'); ?>
                        </a>
                    </li>
                    <!-- end -->



                </ul>


            </li>



        <?php } ?>


    </ul>





</div>