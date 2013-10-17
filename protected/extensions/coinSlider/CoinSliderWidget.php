<?php

/**
 * CoinSliderWidget class file.
 *
 * @author Tofan Andrei <tofan.andrei@gmail.com>
 * @link http://workshop.rs/projects/coin-slider/
 * @copyright Copyright &copy; 2012 Tofan Andrei
 * @license MIT
 */

/**
 * CoinSliderWidget is  wrapper for coin slide jquery plugin.
 * 
 * The following example shows how to use CoinSliderWidget:
 * <pre>
 * 
</pre>
   $this->widget('ext.coinSlider.CoinSliderWidget', array(
        'items' => array(
            array('image' => 'http://workshop.rs/projects/coin-slider/games/prince_of_persia.jpg', 'alt' => 'Price of Persia', 'url' => 'http://www.princeofpersiagame.com/', 'info' => array(
                    'title' => 'Demo', 'text' => 'This is a demo.'
            )),
            array('image' => 'http://workshop.rs/projects/coin-slider/games/prince_of_persia.jpg', 'alt' => 'Price of Persia', 'url' => 'http://www.princeofpersiagame.com/', 'info' => array(
                    'title' => 'Demo', 'text' => 'This is a demo.'
            )),
            array('image' => 'http://workshop.rs/projects/coin-slider/games/prince_of_persia.jpg', 'alt' => 'Price of Persia', 'url' => 'http://www.princeofpersiagame.com/', 'info' => array(
                    'title' => 'Demo', 'text' => 'This is a demo.'
            ))
        )
    ));
 </pre>
 * 
 * 
 */

class CoinSliderWidget extends CWidget {
    
    /**
     * @var array holds the list of images 
     */
    public $items;
    
    /**
     * @var string holds the path to wiget assets
     */
    private $_assets;

    public function init() {

        if ($this->_assets === null) {
            $assetsPath = Yii::getPathOfAlias('ext.coinSlider.assets');
            $this->_assets = Yii::app()->getAssetManager()->publish($assetsPath);
        }

        Yii::app()->clientScript->registerCoreScript('jquery');

        Yii::app()->clientScript->registerScriptFile($this->_assets . '/' . $this->getScriptName(), CClientScript::POS_END);

        Yii::app()->clientScript->registerCssFile($this->_assets . '/coin-slider-styles.css');

        $script = sprintf('$("#%s").coinslider({ hoverPause: false });', $this->getId());
        $css = '.coin-slider-container{width: 960px;}';

        Yii::app()->clientScript->registerScript($this->getId(), $script, CClientScript::POS_READY);
        Yii::app()->clientScript->registerCss($this->getId() . "_container", $css);
    }

    public function run() {
        $this->render('coin_slider');
    }

    /**
     *
     * @return string  
     */
    private function getScriptName() {
        return YII_DEBUG ? 'coin-slider.js' : 'coin-slider.min.js';
    }

}

?>
