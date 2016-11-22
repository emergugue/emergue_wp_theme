<?php
$style = $_GET['style'];
if(!isset($style) && $style !== ''){
	header('?page=smile-slide_in-designer&style-view=new');
}
?>
<div class="edit-screen-overlay" style="overflow: hidden;background: #FCFCFC;position: fixed;width: 100%;height: 100%;top: 0;left: 0;z-index: 9999999;">
    <div class="smile-absolute-loader" style="visibility: visible;overflow: hidden;">
      <div class="smile-loader">
        <div class="smile-loading-bar"></div>
        <div class="smile-loading-bar"></div>
        <div class="smile-loading-bar"></div>
        <div class="smile-loading-bar"></div>
      </div>
    </div>
</div><!-- .edit-screen-overlay -->
<div class="wrap">
	<h2> <?php _e( "Edit SlideIn Style", "smile" ); ?>
    <a class="add-new-h2" href="?page=smile-slide_in-designer" title="<?php _e( "Go to main page", "smile" ); ?>"><?php _e( "Back to Main Page", "smile" ); ?></a>
    </h2>
    <div class="message"></div>
    <div class="smile-style-wrapper">
        <div id="smile-default-styles">
            <div class="smile-default-styles theme-browser rendered">
            	<div class="themes">
				<?php
                if(function_exists('Smile_Style_Dashboard')){
                    Smile_Style_Dashboard('Smile_Slide_Ins','smile_slide_in_styles','slide_in');
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>
