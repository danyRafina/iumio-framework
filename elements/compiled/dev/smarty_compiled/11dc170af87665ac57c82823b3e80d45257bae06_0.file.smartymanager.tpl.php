<?php
/* Smarty version 3.1.31, created on 2018-01-02 13:17:06
  from "/Applications/MAMP/htdocs/iumio-framework/vendor/iumio_framework/php/BaseApps/ManagerApp/Front/views/smartymanager.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a4b78425b78a3_37753267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11dc170af87665ac57c82823b3e80d45257bae06' => 
    array (
      0 => '/Applications/MAMP/htdocs/iumio-framework/vendor/iumio_framework/php/BaseApps/ManagerApp/Front/views/smartymanager.tpl',
      1 => 1514579824,
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
function content_5a4b78425b78a3_37753267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13191287465a4b78414dc148_37644286', "principal");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'template.tpl');
}
/* {block "principal"} */
class Block_13191287465a4b78414dc148_37644286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'principal' => 
  array (
    0 => 'Block_13191287465a4b78414dc148_37644286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper">
        <?php $_smarty_tpl->_subTemplateRender('file:partials/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <?php $_smarty_tpl->_subTemplateRender('file:partials/toogle.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <a class="navbar-brand" href="#">Smarty Manager</a>
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
                                    <h4 class="title">List of smarty configurations</h4>
                                    <p class="category">Referer to smarty.json</p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                        <th>Config name</th>
                                        <th>Debug</th>
                                        <th>Cache</th>
                                        <th>Console</th>
                                        <th>Edit</th>
                                        </thead>
                                        <tbody class="smartyconfigs" attr-href="<?php echo iumioFramework\Core\Additionnal\Template\ViewBasePlugin::route(array('name'=>'iumio_manager_smarty_manager_get_all'),$_smarty_tpl);?>
">

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $_smarty_tpl->_subTemplateRender('file:partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        </div>
    </div>
<?php
}
}
/* {/block "principal"} */
}
