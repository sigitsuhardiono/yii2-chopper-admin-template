<?php

namespace haqqi\chopper\assets;

use yii\web\AssetBundle;

class ChopperAsset extends AssetBundle
{
    public $sourcePath = '@haqqi/chopper/web';
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'mimicreative\assets\Html5ShivAsset',
        'mimicreative\assets\RespondAsset',
    ];
    
    public $css = [
        // default font
        'https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,700,700i',
        'https://fonts.googleapis.com/css?family=Oswald:300,400,700',
        
        'css/chopper-main.css'
    ];
    
    public $js = [
        
    ];
    
    public $publishOptions = [
        'forceCopy' => YII_ENV == YII_ENV_DEV ? true : false
    ];

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        
        $this->_setupStyle();
    }
    
    private function _setupStyle() {
        
    }
}