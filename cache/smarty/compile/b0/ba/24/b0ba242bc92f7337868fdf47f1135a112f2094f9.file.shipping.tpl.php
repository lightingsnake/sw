<?php /* Smarty version Smarty-3.1.14, created on 2014-04-07 14:55:40
         compiled from "/var/www/html/swm.com.co/laravel/public/sw/admin/themes/default/template/controllers/products/shipping.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18098673525342bc6c08cf54-25004503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0ba242bc92f7337868fdf47f1135a112f2094f9' => 
    array (
      0 => '/var/www/html/swm.com.co/laravel/public/sw/admin/themes/default/template/controllers/products/shipping.tpl',
      1 => 1395083864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18098673525342bc6c08cf54-25004503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_common_field' => 0,
    'bullet_common_field' => 0,
    'ps_dimension_unit' => 0,
    'product' => 0,
    'ps_weight_unit' => 0,
    'currency' => 0,
    'country_display_tax_label' => 0,
    'carrier_list' => 0,
    'carrier' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5342bc6c41c5e7_60390678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342bc6c41c5e7_60390678')) {function content_5342bc6c41c5e7_60390678($_smarty_tpl) {?>
<div id="product-shipping" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Shipping" />
	<h3><?php echo smartyTranslate(array('s'=>'Shipping'),$_smarty_tpl);?>
</h3>

	<?php if (isset($_smarty_tpl->tpl_vars['display_common_field']->value)&&$_smarty_tpl->tpl_vars['display_common_field']->value){?>
		<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Warning, if you change the value of fields with an orange bullet %s, the value will be changed for all other shops for this product','sprintf'=>$_smarty_tpl->tpl_vars['bullet_common_field']->value),$_smarty_tpl);?>
</div>
	<?php }?>

	<div class="form-group">
		<label class="control-label col-lg-3" for="width"><?php echo $_smarty_tpl->tpl_vars['bullet_common_field']->value;?>
 <?php echo smartyTranslate(array('s'=>'Package width'),$_smarty_tpl);?>
</label>
		<div class="input-group col-lg-2">
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['ps_dimension_unit']->value;?>
</span>
			<input maxlength="14" id="width" name="width" type="text" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->width;?>
" onKeyUp="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" />			
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-3" for="height"><?php echo $_smarty_tpl->tpl_vars['bullet_common_field']->value;?>
 <?php echo smartyTranslate(array('s'=>'Package height'),$_smarty_tpl);?>
</label>
		<div class="input-group col-lg-2">
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['ps_dimension_unit']->value;?>
</span>
			<input maxlength="14" id="height" name="height" type="text" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->height;?>
" onKeyUp="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" />
		</div>
	</div>
	
	<div class="form-group">
		<label class="control-label col-lg-3" for="depth"><?php echo $_smarty_tpl->tpl_vars['bullet_common_field']->value;?>
 <?php echo smartyTranslate(array('s'=>'Package depth'),$_smarty_tpl);?>
</label>
		<div class="input-group col-lg-2">
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['ps_dimension_unit']->value;?>
</span>
			<input maxlength="14" id="depth" name="depth" type="text" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->depth;?>
" onKeyUp="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" />
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-3" for="weight"><?php echo $_smarty_tpl->tpl_vars['bullet_common_field']->value;?>
 <?php echo smartyTranslate(array('s'=>'Package weight'),$_smarty_tpl);?>
</label>
		<div class="input-group col-lg-2">
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['ps_weight_unit']->value;?>
</span>
			<input maxlength="14" id="weight" name="weight" type="text" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->weight;?>
" onKeyUp="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" />
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-3" for="additional_shipping_cost">
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'If a carrier has a tax, it will be added to the shipping fees.'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Additional shipping fees (for a single item)'),$_smarty_tpl);?>

			</span>
			
		</label>
		<div class="input-group col-lg-2">
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;?>
<?php echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
 <?php if ($_smarty_tpl->tpl_vars['country_display_tax_label']->value){?>(<?php echo smartyTranslate(array('s'=>'tax excl.'),$_smarty_tpl);?>
)<?php }?></span>
			<input type="text" id="additional_shipping_cost" name="additional_shipping_cost" onchange="this.value = this.value.replace(/,/g, '.');" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['product']->value->additional_shipping_cost);?>
" />
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-3" for="availableCarriers"><?php echo smartyTranslate(array('s'=>'Carriers'),$_smarty_tpl);?>
</label>
		<div class="col-lg-9">
			<div class="form-control-static row">
				<div class="col-xs-6">
					<p><?php echo smartyTranslate(array('s'=>'Available carriers'),$_smarty_tpl);?>
</p>
					<select multiple id="availableCarriers" name="availableCarriers">
						<?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carrier_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value){
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
?>
							<?php if (!isset($_smarty_tpl->tpl_vars['carrier']->value['selected'])||!$_smarty_tpl->tpl_vars['carrier']->value['selected']){?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['id_reference'];?>
"><?php echo $_smarty_tpl->tpl_vars['carrier']->value['name'];?>
</option>
							<?php }?>
						<?php } ?>
					</select>
					<a href="#" id="addCarrier" class="btn btn-default btn-block"><?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
 <i class="icon-arrow-right"></i></a>
				</div>
				<div class="col-xs-6">
					<p><?php echo smartyTranslate(array('s'=>'Selected carriers'),$_smarty_tpl);?>
</p>
					<select multiple id="selectedCarriers" name="selectedCarriers[]">
						<?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carrier_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value){
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
?>
							<?php if (isset($_smarty_tpl->tpl_vars['carrier']->value['selected'])&&$_smarty_tpl->tpl_vars['carrier']->value['selected']){?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['id_reference'];?>
"><?php echo $_smarty_tpl->tpl_vars['carrier']->value['name'];?>
</option>
							<?php }?>
						<?php } ?>
					</select>
					<a href="#" id="removeCarrier" class="btn btn-default btn-block"><i class="icon-arrow-left"></i> <?php echo smartyTranslate(array('s'=>'Remove'),$_smarty_tpl);?>
</a>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group" id="no-selected-carries-alert">
		<div class="col-lg-offset-3">
			<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'If no carrier is selected then all the carriers will be available for customers orders.'),$_smarty_tpl);?>
</div>
		</div>
	</div>
	<div class="panel-footer">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts');?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>
</button>
	</div>
</div><?php }} ?>