<?php
namespace finasmart\startup;

use Yii;
use yii\bootstrap\BootstrapAsset;
use yii\bootstrap\BootstrapPluginAsset;
use yii\helpers\ArrayHelper;
/**
 * Description of Module
 *
 * @author Henry
 */
class Module extends \yii\base\Module implements \yii\base\BootstrapInterface
{	
    public function init()
    {
        parent::init();
    }
    /**
     * 
     * @param \yii\web\Application $app
     */
    public function bootstrap($app)
    {	
		$view = $app->getView();
		AdminLtePluginAsset::register($view);	
		
    }
}