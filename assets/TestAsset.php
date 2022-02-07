<?php

namespace app\assets;

use yii\web\AssetBundle;

class TestAsset extends AssetBundle
{
   public $sourcePath = '@app/components/';

   public $css = [
      'css/style.css',
   ];

   public $js = [
      'script.js',
   ];
}
