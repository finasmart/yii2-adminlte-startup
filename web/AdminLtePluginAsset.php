<?php
namespace finasmart\web;

use dmstr\web;
/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminLtePluginAsset extends AdminLteAsset
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
}
