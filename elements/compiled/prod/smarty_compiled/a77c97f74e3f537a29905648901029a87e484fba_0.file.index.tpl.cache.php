<?php
/* Smarty version 3.1.31, created on 2017-12-29 21:37:10
  from "/Applications/MAMP/htdocs/iumio-framework/vendor/iumio_framework/php/BaseApps/ManagerApp/Front/views/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a46a776ba2955_16979452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a77c97f74e3f537a29905648901029a87e484fba' => 
    array (
      0 => '/Applications/MAMP/htdocs/iumio-framework/vendor/iumio_framework/php/BaseApps/ManagerApp/Front/views/index.tpl',
      1 => 1514579732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/sidebar.tpl' => 1,
    'file:partials/toogle.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
),false)) {
function content_5a46a776ba2955_16979452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '7819967605a46a7740a1f19_86253693';
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20280488275a46a774137f79_28487563', "principal");
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'template.tpl');
}
/* {block "principal"} */
class Block_20280488275a46a774137f79_28487563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'principal' => 
  array (
    0 => 'Block_20280488275a46a774137f79_28487563',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['7819967605a46a7740a1f19_86253693'] = true;
?>

    <div class="wrapper">
        <?php $_smarty_tpl->_subTemplateRender('file:partials/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <?php $_smarty_tpl->_subTemplateRender('file:partials/toogle.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                        </ul>
                    </div>

                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="h350 card">
                                <div class="header">
                                    <h4 class="title">iumio Framework instance</h4>
                                    <p class="category">Informations about iumio Framework instance</p>
                                </div>
                                
                                <div class="content"  style="overflow: auto;padding-left: 40px;max-height: 220px;">
                                    <ul class="break-word col-md-12">
                                        <li><?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo iumioFramework\\Core\\Additionnal\\Template\\ViewBasePlugin::finfo(array(\'name\'=>\'VERSION_EDITION\'),$_smarty_tpl);?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
 </li>

                                        <li>Version : <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo iumioFramework\\Core\\Additionnal\\Template\\ViewBasePlugin::finfo(array(\'name\'=>\'VERSION_STAGE\'),$_smarty_tpl);?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
 <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo iumioFramework\\Core\\Additionnal\\Template\\ViewBasePlugin::finfo(array(\'name\'=>\'VERSION\'),$_smarty_tpl);?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
 </li>

                                        <li>Build number : <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo iumioFramework\\Core\\Additionnal\\Template\\ViewBasePlugin::finfo(array(\'name\'=>\'VERSION_ID\'),$_smarty_tpl);?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
 </li>

                                        <li>Installation date : <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo $_smarty_tpl->tpl_vars[\'fi\']->value->installation;?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
</li>

                                        <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'fi\']->value->deployment)) {?>/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
<li>Deployment date : <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo $_smarty_tpl->tpl_vars[\'fi\']->value->deployment;?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
</li><?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php }?>/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>


                                        <li>Main location installed : <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo $_smarty_tpl->tpl_vars[\'fi\']->value->location;?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
</li>

                                        <li>Default environment : <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo $_smarty_tpl->tpl_vars[\'fi\']->value->default_env;?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
</li>

                                    </ul>

                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h350">
                                <div class="header">
                                    <h4 class="title">Server Informations</h4>
                                    <p class="category">Informations about server instance</p>
                                </div>
                                <div class="content" style="overflow: auto;padding-left: 40px;max-height: 220px;">
                                    
                                    <ul class="col-md-12">
                                        <li>Server : <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo iumioFramework\\Core\\Additionnal\\Template\\ViewBasePlugin::sinfo(array(\'name\'=>\'SERVER_SOFTWARE\'),$_smarty_tpl);?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
</li>
                                        <li>PHP version : <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo iumioFramework\\Core\\Additionnal\\Template\\ViewBasePlugin::sinfo(array(\'name\'=>\'PHP_VERSION\'),$_smarty_tpl);?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
</li>
                                        <li>Domain : <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo iumioFramework\\Core\\Additionnal\\Template\\ViewBasePlugin::sinfo(array(\'name\'=>\'SERVER_NAME\'),$_smarty_tpl);?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
</li>
                                        <li>Protocol : <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo iumioFramework\\Core\\Additionnal\\Template\\ViewBasePlugin::sinfo(array(\'name\'=>\'SERVER_PROTOCOL\'),$_smarty_tpl);?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
</li>
                                        <li>Port : <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo iumioFramework\\Core\\Additionnal\\Template\\ViewBasePlugin::sinfo(array(\'name\'=>\'SERVER_PORT\'),$_smarty_tpl);?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
</li>
                                        <li>Use SSL : <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php if ($_smarty_tpl->tpl_vars[\'https\']->value) {?>/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
 Yes <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php } else { ?>/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
 No <?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php }?>/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
 </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h350">
                                <div class="header">
                                    <h4 class="title">Logs events</h4>
                                    <p class="category">Last events logs for <strong><?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo $_smarty_tpl->tpl_vars[\'env\']->value;?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
</strong> (10)</p>
                                </div>
                                <div class="content" style="overflow: auto;max-height: 220px">
                                    <ul class="lastlog elemcard" attr-href="<?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo iumioFramework\\Core\\Additionnal\\Template\\ViewBasePlugin::route(array(\'name\'=>\'iumio_manager_logs_get\'),$_smarty_tpl);?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
">

                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h350">
                                <div class="header">
                                    <h4 class="title">iumio Framework Statistics</h4>
                                    <p class="category">Statistics about iumio Framework instance</p>
                                </div>
                                <div class="content dashboardStats elemcard"  attr-href="<?php echo '/*%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/<?php echo iumioFramework\\Core\\Additionnal\\Template\\ViewBasePlugin::route(array(\'name\'=>\'iumio_manager_dashboard_get_statistics\'),$_smarty_tpl);?>
/*/%%SmartyNocache:7819967605a46a7740a1f19_86253693%%*/';?>
" style="overflow: auto;padding-left: 40px">
                                    <ul class="col-md-6">
                                        <li>Apps  : <span class="dashb-app">0</span> </li>
                                        <li>Apps enabled : <span class="dashb-appena">0</span></li>
                                        <li>Apps prefixed  : <span class="dashb-apppre">0</span></li>
                                        <li>Routes  : <span class="dashb-route">0</span></li>
                                        <li>Routes disabled : <span class="dashb-routedisa">0</span></li>
                                        <li>Routes with public visibility : <span class="dashb-routevisi">0</span></li>
                                        <li>Databases connected : <span class="dashb-dbco">0</span></li>

                                    </ul>
                                    <ul class="col-md-6">
                                        <li>
                                            <strong>Dev</strong>
                                            <ul>
                                                <li>Requests successful : <span class="dashb-reqsuc-dev">0</span></li>
                                                <li>Events : <span class="dashb-err-dev">0</span></li>
                                                <li>Critical events (500) : <span class="dashb-errcri-dev">0</span></li>
                                                <li>Others events : <span class="dashb-erroth-dev">0</span></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <strong>Prod</strong>
                                            <ul>
                                                <li>Requests successful : <span class="dashb-reqsuc-prod">0</span></li>
                                                <li>Events : <span class="dashb-err-prod">0</span></li>
                                                <li>Critical events (500) : <span class="dashb-errcri-prod">0</span></li>
                                                <li>Others events : <span class="dashb-erroth-prod">0</span></li>
                                            </ul>
                                        </li>


                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $_smarty_tpl->_subTemplateRender('file:partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        </div>
    </div>
<?php
}
}
/* {/block "principal"} */
}