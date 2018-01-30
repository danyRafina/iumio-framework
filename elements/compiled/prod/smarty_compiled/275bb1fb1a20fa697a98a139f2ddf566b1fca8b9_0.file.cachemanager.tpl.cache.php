<?php
/* Smarty version 3.1.31, created on 2017-12-29 21:37:22
  from "/Applications/MAMP/htdocs/iumio-framework/vendor/iumio_framework/php/BaseApps/ManagerApp/Front/views/cachemanager.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a46a7828cbe54_45076415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '275bb1fb1a20fa697a98a139f2ddf566b1fca8b9' => 
    array (
      0 => '/Applications/MAMP/htdocs/iumio-framework/vendor/iumio_framework/php/BaseApps/ManagerApp/Front/views/cachemanager.tpl',
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
function content_5a46a7828cbe54_45076415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '9870464065a46a781a7fa67_88737071';
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19749980435a46a781b0fc55_87494490', "principal");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'template.tpl');
}
/* {block "principal"} */
class Block_19749980435a46a781b0fc55_87494490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'principal' => 
  array (
    0 => 'Block_19749980435a46a781b0fc55_87494490',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['9870464065a46a781a7fa67_88737071'] = true;
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

                        <a class="navbar-brand" href="#">Cache Manager</a>
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Options</h4>
                                </div>
                                <div class="content">
                                    <div class="row center-block text-center manager-options">
                                        <div class="col-md-12">
                                            <a class="btn-default btn clearcache"   attr-href="<?php echo '/*%%SmartyNocache:9870464065a46a781a7fa67_88737071%%*/<?php echo iumioFramework\\Core\\Additionnal\\Template\\ViewBasePlugin::route(array(\'name\'=>\'iumio_manager_cache_manager_remove_all\'),$_smarty_tpl);?>
/*/%%SmartyNocache:9870464065a46a781a7fa67_88737071%%*/';?>
">Clear all cache</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Cache list</h4>
                                    <p class="category">Referer to cache directory</p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                        <th>Directory name</th>
                                        <th>Path</th>
                                        <th>Size</th>
                                        <th>Permissions</th>
                                        <th>Status</th>
                                        <th>Clear</th>
                                        </thead>
                                        <tbody class="getAllEnvCache" attr-href="<?php echo '/*%%SmartyNocache:9870464065a46a781a7fa67_88737071%%*/<?php echo iumioFramework\\Core\\Additionnal\\Template\\ViewBasePlugin::route(array(\'name\'=>\'iumio_manager_cache_manager_get_all\'),$_smarty_tpl);?>
/*/%%SmartyNocache:9870464065a46a781a7fa67_88737071%%*/';?>
">
                                        </tbody>
                                    </table>

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