<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppLoginAsset extends AssetBundle
{
    public function init()
    {
        parent::init();
        $this->jsOptions['position'] = View::POS_HEAD;
    }

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/css/icons/icomoon/styles.css',
        'assets/css/icons/icomoon/styles.css',
        'assets/css/minified/bootstrap.min.css',
        'assets/css/core.css',
        'assets/css/minified/components.min.css',
        'assets/css/minified/colors.min.css',
    ];
    public $js = [
        'assets/js/plugins/loaders/pace.min.js',
        'assets/js/core/libraries/jquery.min.js',
        'assets/js/core/libraries/bootstrap.min.js',
        'assets/js/plugins/loaders/blockui.min.js',
        'assets/js/core/app.js'
    ];
    public $depends = [
    ];
}