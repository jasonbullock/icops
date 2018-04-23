<?php
/**
 * The right sidebar.
 * 
 * @package bootstrap-basic4
 */


global $bootstrapbasic4_sidebar_right_size;
if ($bootstrapbasic4_sidebar_right_size == null || !is_numeric($bootstrapbasic4_sidebar_right_size)) {
    $bootstrapbasic4_sidebar_right_size = 3;
}

if (is_active_sidebar('sidebar-right')) {
?> 
                <div id="sidebar-right" class="col-md-<?php echo $bootstrapbasic4_sidebar_right_size; ?>">

                	<aside id="execphp-2" class="widget widget_execphp"><a href="<?php echo get_stylesheet_directory_uri()?>/assets/img/pdf/icops-legal-plan-application.pdf" target="_blank"><button type="button" class="btn btn-outline-primary btn-sm" style="width: 100%;"><i class="far fa-file-pdf" style="margin-right: 7px;"></i>Download an Application</button></a>
					</aside>
                	<?php do_action('before_sidebar'); ?> 
                	 
                    
                    <?php dynamic_sidebar('sidebar-right'); ?> 
                </div>
<?php
}


