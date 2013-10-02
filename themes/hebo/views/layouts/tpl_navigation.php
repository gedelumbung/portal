<section id="navigation-main">  
<div class="navbar">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
  
          <div class="nav-collapse">
			<?php 

            $items = MenuModel::model()->findAll();
            $arr = array();
            foreach($items as $m)
            {
                array_push($arr,"label",$m->menu);
                array_push($arr,"url",array('/site/page'));
            }
            print_r($arr);

            $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
						
						array('label'=>'Features <span class="caret"></span>', 'url'=>array('/site/page'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'Columns', 'url'=>array('/site/page')),
							array('label'=>'Pricing tables', 'url'=>array('/site/page')),
							array('label'=>'UI Elements', 'url'=>array('/site/page')),
                        )),

                        $arr,
                       
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>
</section><!-- /#navigation-main -->