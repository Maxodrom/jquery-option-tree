<?php
/**
 * JQuery option tree asset.
 *
 * @author Max Alexandrov <max@7u3.ru>
 * @link https://github.com/maxodrom/jquery-option-tree
 */

namespace maxodrom\assets;

use yii\web\AssetBundle;

/**
 * Class JqueryOptionTreeAsset
 *
 * @package common\assets
 */
class JqueryOptionTreeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/maxodrom/jquery-option-tree';
    public $js = [
        'jquery.optionTree.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}