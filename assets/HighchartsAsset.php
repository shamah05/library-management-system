<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

class HighchartsAsset extends AssetBundle
{
    public $sourcePath = '@bower/highcharts';
    public $css = [];
    public $js = [
        'highcharts.js',
        'modules/exporting.js',
        'modules/offline-exporting.js',
        'modules/no-data-to-display.js',
        'modules/drilldown.js',
    ];
}
