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
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_538fb8b96a89a8_16634981',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538fb8b96a89a8_16634981')) {function content_538fb8b96a89a8_16634981($_smarty_tpl) {?>    <!-- Module HomeSlider -->
            <div id="slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                                                                        <li data-target="#carousel-example-generic" data-slide-to="0"></li>
                    <!--0-->
                                                                         <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <!--1-->
                                                                         <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <!--2-->
                                             </ol>

            <div class="carousel-inner">
                                                             <div class="item">
                            <a href="http://www.prestashop.com/?utm_source=v16_homeslider" title="sample-1">
                                <img src="http://swm.com.co/sw/modules/homeslider/images/sample-1.jpg" width="779" height="448" alt="sample-1" />
                            </a>
                        </div>
                                                                                 <div class="item">
                            <a href="http://www.prestashop.com/?utm_source=v16_homeslider" title="sample-2">
                                <img src="http://swm.com.co/sw/modules/homeslider/images/sample-2.jpg" width="779" height="448" alt="sample-2" />
                            </a>
                        </div>
                                                                                 <div class="item">
                            <a href="http://www.prestashop.com/?utm_source=v16_homeslider" title="sample-3">
                                <img src="http://swm.com.co/sw/modules/homeslider/images/sample-3.jpg" width="779" height="448" alt="sample-3" />
                            </a>
                        </div>
                                                </div>
        </div>
         <script>
            $('.carousel-inner .item').first().addClass('active')
            $('.carousel-indicators #carousel-example-generic').first().addClass('active')
            $('.carousel').carousel()
        </script>
        <!-- /Module HomeSlider -->
<?php }} ?>