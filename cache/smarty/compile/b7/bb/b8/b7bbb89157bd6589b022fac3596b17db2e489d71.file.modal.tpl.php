<?php /* Smarty version Smarty-3.1.14, created on 2014-04-07 17:00:10
         compiled from "/var/www/html/swm.com.co/laravel/public/sw/admin6233/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8985216985342bd7a409ea4-08842144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7bbb89157bd6589b022fac3596b17db2e489d71' => 
    array (
      0 => '/var/www/html/swm.com.co/laravel/public/sw/admin6233/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1395083864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8985216985342bd7a409ea4-08842144',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5342bd7a40db55_24102020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342bd7a40db55_24102020')) {function content_5342bd7a40db55_24102020($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>