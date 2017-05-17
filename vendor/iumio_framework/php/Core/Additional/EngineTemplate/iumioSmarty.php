<?php

namespace iumioFramework\Core\Additionnal\Template;
use iumioFramework\Core\Additionnal\Server\iumioServerManager;

try
{
    require_once ROOT_VENDOR_LIBS.'smarty/libs/Smarty.class.php';
}
catch (\Exception $exception)
{
    throw new \Exception("iumioSmarty Error : Cannot load Engine Template. No such file or directory");
}

/**
 * Class iumioSmarty
 * @package iumioFramework\Core\Additionnal\Template
 * @author RAFINA Dany <danyrafina@gmail.com>
 */

final class iumioSmarty
{
    private static $instance = NULL;
    private static $appCall = NULL;
    public static $viewExtention = ".tpl";

    /**
     * iumioMustache constructor.
     * @throws \Exception
     */
    private function __construct()
    {
        try
        {
            if (ENVIRONMENT == "DEV")
            {
                $envcache = CACHE_DEV;
                $compiled = COMPILED_DEV;
            }
            else if (ENVIRONMENT == "PROD")
            {
                $envcache = CACHE_PROD;
                $compiled = COMPILED_PROD;
            }
            else if (ENVIRONMENT == "PREPROD")
            {
                $envcache = CACHE_PREPROD;
                $compiled = COMPILED_PREPROD;
            }


            $dirapp = ((IS_IUMIO_COMPONENT)? BASE_APPS :  ROOT_APPS);

            iumioServerManager::create($dirapp . self::$appCall . '/Front/views', "directory");


            self::$instance = new \Smarty();

            self::$instance->setTemplateDir($dirapp.self::$appCall.'/Front/views');
            self::$instance->setCompileDir($compiled.'smarty_compiled/');
            self::$instance->setCacheDir($envcache.'smarty_cache/');
            self::$instance->setConfigDir(CONFIG_DIR.'smarty_config/');

            if (ENVIRONMENT != "PROD")
            {
                self::$instance->debugging = true;
                self::$instance->compile_check = true;
                self::$instance->setForceCompile(true);
                self::$instance->debug_tpl = 'file:' . ADDITIONALS . 'TaskBar/views/iumioTaskBar.tpl';
                self::enableSmartyDebug(false);
            }

            $this->registerBasePlugins();

        }
        catch(\Exception $exception)
        {
            self::$appCall = NULL;
            self::$instance = NULL;
            throw new \Exception("iumioTemplate Error : Cannot loading Smarty Engine Template => ".$exception->getMessage());
        }

    }

    /** Enable smarty debug tool
     * @param bool $status Debug status (true for 'on' or false for 'off')
     */
    final static public function enableSmartyDebug(bool $status)
    {
        if ($status == true)
            define ('DISPLAY_SMARTY_DEBUG', 'on');
        else if ($status == false)
            define ('DISPLAY_SMARTY_DEBUG', 'off');
    }

    /**
     * Register base plugin for smarty views
     */
    final protected function registerBasePlugins()
    {

        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'webassets', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "webassets"));

        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'jquery', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "jquery"));

        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'framework_info', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "f_info"));
        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'system_info', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "s_info"));

        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'bootstrap_js', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "btsp_js"));
        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'bootstrap_css', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "btsp_css"));

        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'css', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "css"));
        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'js', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "js"));

        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'css_libs', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "css_libs"));
        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'js_libs', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "js_libs"));

        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'css_manager', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "css_im"));
        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'js_manager', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "js_im"));
        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'img_manager', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "img_im"));

        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'css_iumio', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "css_iumio"));
        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'js_iumio', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "js_iumio"));
        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'img_iumio', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "img_iumio"));

        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'route', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "route"));
        self::$instance->registerPlugin(\Smarty::PLUGIN_FUNCTION, 'taskbar', array("iumioFramework\Core\Additionnal\Template\iumioViewBasePlugin", "taskbar"));


        /*$si->registerPlugin('function', 'f_info', function ($info) { return (iumioUltimaCore::getInfo($info)); });

        $si->registerPlugin('function', 's_info', function ($info) { return (iumioUltimaCore::getServerInfo($info)); });

        $si->registerPlugin('function', 'btsp_js', function ($min = null) { return ("<script type='text/javascript' src='".WEB_LIBS."bootstrap/js/bootstrap.".(($min != null)? $min."." : "")."js'></script>"); });
        $si->registerPlugin('function', 'btsp_css', function ($min = null) { return ("<link href='".WEB_LIBS."bootstrap/css/bootstrap.".(($min != null)? $min."." : "")."css' rel='stylesheet' />"); });

        $si->registerPlugin('function', 'jquery', function ($min = null) { return ("<script type='text/javascript' src='".WEB_LIBS."jquery/jquery.".(($min != null)? $min."." : "")."js'></script>"); });

        $si->registerPlugin('function', 'css', function ($assets) { return ("<link href='".WEB_ASSETS.strtolower(APP_CALL)."/".$assets.".css' rel='stylesheet' />"); });
        $si->registerPlugin('function', 'js', function ($assets) { return ("<script type='text/javascript' src='".WEB_ASSETS.strtolower(APP_CALL)."/".$assets.".js'></script>"); });

        $si->registerPlugin('function', 'css_libs', function ($assets) { return ("<link href='".WEB_COMPONENTS."libs/".$assets.".css' rel='stylesheet' />"); });
        $si->registerPlugin('function', 'js_libs', function ($assets) { return ("<script type='text/javascript' src='".WEB_COMPONENTS."libs/".$assets.".js'></script>"); });

        $si->registerPlugin('function', 'css_im', function ($assets) { return ("<link href='".WEB_COMPONENTS."libs/iumio_manager/css/".$assets.".css' rel='stylesheet' />"); });
        $si->registerPlugin('function', 'js_im', function ($assets) { return ("<script type='text/javascript' src='".WEB_COMPONENTS."libs/iumio_manager/js/".$assets.".js'></script>"); });
        $si->registerPlugin('function', 'img_im', function ($assets) { return (WEB_COMPONENTS."libs/iumio_manager/img/".$assets); });

        $si->registerPlugin('function', 'css_iumio', function ($assets) { return ("<link href='".WEB_COMPONENTS."libs/iumio_framework/css/".$assets.".css' rel='stylesheet' />"); });
        $si->registerPlugin('function', 'js_iumio', function ($assets) { return ("<script type='text/javascript' src='".WEB_COMPONENTS."libs/iumio_framework/js/".$assets.".js'></script>"); });
        $si->registerPlugin('function', 'img_iumio',  function ($assets) { return (WEB_COMPONENTS."libs/iumio_framework/img/".$assets); });

        $si->registerPlugin('function', 'route', function ($route) {  print_r(json_decode($route)); return ($this->generateRoute($route)); });

        $si->registerPlugin('function', 'taskbar', function (){ return(iumioTaskBar::getTaskBar()); });*/

    }

    /** Return an instance of iumioSmarty
     * @param string $appFullName
     * @return \Smarty Instance of Smarty
     */
    static public function getSmartyInstance(string $appFullName):\Smarty
    {
        if (self::$instance == NULL)
        {
            if (self::$appCall != $appFullName)
            {
                self::$appCall = $appFullName;
                new iumioSmarty();
            }
        }

        return (self::$instance);
    }

}