<?php
namespace App\Modules;
use File;
use Request;
class ModulesServiceProvider extends \Illuminate\Support\ServiceProvider{
	public function register()
	{
		
	}
    public function boot()
	{
        //Load cai array modules trong file module.php trong thu muc config
        $modules = config('module.modules');
        $mod = $modules['site'];
        //Detect xem co phai la Backend route hay khong
        if(Request::is('admin') || Request::is('admin/*')){
            $mod = $modules['admin'];
        }
		//List Module 
		$dir = __DIR__;
		$listModule = array_map('basename', File::directories($dir.'/'.$mod));
		$ctl = $dir.'/'.$mod;
		foreach ($listModule as $module) {
            if(file_exists($ctl.'/'.$module.'/routes.php')) {
                include $ctl.'/'.$module.'/routes.php';
            }
            if(is_dir($ctl .'/'.$module.'/Views')) {
                $this->loadViewsFrom($ctl.'/'.$module.'/Views', $module);
            }
        }
    }
}