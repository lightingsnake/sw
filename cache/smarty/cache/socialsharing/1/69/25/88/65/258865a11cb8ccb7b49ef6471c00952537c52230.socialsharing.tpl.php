<?php /*%%SmartyHeaderCode:13774538fc7b88fca55-14209640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '258865a11cb8ccb7b49ef6471c00952537c52230' => 
    array (
      0 => 'D:\\xampp\\htdocs\\swm\\sw\\modules\\socialsharing\\views\\templates\\hook\\socialsharing.tpl',
      1 => 1400798180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13774538fc7b88fca55-14209640',
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
    'product' => 0,
    'link' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_538fc7b89d3801_29543518',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538fc7b89d3801_29543518')) {function content_538fc7b89d3801_29543518($_smarty_tpl) {?>	<p class="socialsharing_product list-inline no-print">
					<button type="button" class="btn btn-default btn-twitter" onclick="socialsharing_twitter_click('BUSO PL CH 01 ROJO http://swm.com.co/sw/index.php?id_product=13&controller=product');">
				<i class="icon-twitter"></i> Tweet
				<!-- <img src="http://swm.com.co/sw/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
			</button>
							<button type="button" class="btn btn-default btn-facebook" onclick="socialsharing_facebook_click();">
				<i class="icon-facebook"></i> Share
				<!-- <img src="http://swm.com.co/sw/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
			</button>
							<button type="button" class="btn btn-default btn-google-plus" onclick="socialsharing_google_click();">
				<i class="icon-google-plus"></i> Google+
				<!-- <img src="http://swm.com.co/sw/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
			</button>
					</p>
<?php }} ?>