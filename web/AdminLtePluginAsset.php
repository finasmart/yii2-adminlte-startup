<?php

namespace finasmart\web;

use \yii\web\AssetBundle;
/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminLtePluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $css = [
       'iCheck/all.css',
    ]; 
    public $js = [
		'slimScroll/jquery.slimscroll.min.js',
		'fastclick/fastclick.min.js',
		'iCheck/icheck.min.js',
    ];
	public $depends=[
        'yii\web\YiiAsset',
    ];
}
