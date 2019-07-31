<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace ishizune\gentelella\assets;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'ishizune\gentelella\assets\BootstrapProgressbar',
        'ishizune\gentelella\assets\ThemeBuildAsset',
        'ishizune\gentelella\assets\ThemeSrcAsset',
        'ishizune\gentelella\assets\ChartsAsset',
        'ishizune\gentelella\assets\BowerExtensionAsset',
    ];
}
