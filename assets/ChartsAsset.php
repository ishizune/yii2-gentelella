<?php
/**
 * Created by PhpStorm.
 * User: godson
 * Date: 3/19/18
 * Time: 10:17
 */

namespace yiister\gentelella\assets;


use yii\web\AssetBundle;

class ChartsAsset extends AssetBundle {
	public $sourcePath = '@bower/gentelella/vendors/';

	public $css = [

	];
	public $js = [
		'Chart.js/dist/Chart.min.js',
		'Chart.js/dist/Chart.bundle.min.js',
	];
}
