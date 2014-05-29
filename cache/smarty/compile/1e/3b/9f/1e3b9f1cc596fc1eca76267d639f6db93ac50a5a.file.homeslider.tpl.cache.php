<?php /* Smarty version Smarty-3.1.14, created on 2014-05-28 00:24:58
         compiled from "D:\xampp\htdocs\swm\sw\themes\default-bootstrap\modules\homeslider\homeslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17270538510bad93e07-52460971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e3b9f1cc596fc1eca76267d639f6db93ac50a5a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\swm\\sw\\themes\\default-bootstrap\\modules\\homeslider\\homeslider.tpl',
      1 => 1401210416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17270538510bad93e07-52460971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'homeslider_slides' => 0,
    'slide' => 0,
    'i' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_538510bae6ea32_13310715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538510bae6ea32_13310715')) {function content_538510bae6ea32_13310715($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?>
    <!-- Module HomeSlider -->
    <?php if (isset($_smarty_tpl->tpl_vars['homeslider_slides']->value)){?>
        <div id="slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['slide']->value['active']){?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></li>
                    <!--<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
-->
                 <?php }?>
                <?php } ?>
            </ol>

            <div class="carousel-inner">
                <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['slide']->value['active']){?>
                         <div class="item">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)@constant('_MODULE_DIR_'))."homeslider/images/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
"<?php if (isset($_smarty_tpl->tpl_vars['slide']->value['size'])&&$_smarty_tpl->tpl_vars['slide']->value['size']){?> <?php echo $_smarty_tpl->tpl_vars['slide']->value['size'];?>
<?php }else{ ?> width="100%" height="100%"<?php }?> alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
                            </a>
                        </div>
                    <?php }?>
                <?php } ?>
            </div>
        </div>
         <script>
            $('.carousel-inner .item').first().addClass('active')
            $('.carousel-indicators #carousel-example-generic').first().addClass('active')
            $('.carousel').carousel()
        </script>
    <?php }?>
    <!-- /Module HomeSlider -->
<?php }?><?php }} ?>