<?php

Yii::import('zii.widgets.CMenu', true);

class SecondMenu extends CMenu
{
    public function init()
    {
        echo $this->menu_rek(0,$h="");
        parent::init();
    }

    public function menu_rek($parent=0,$hasil)
    {
        $criteria = new CDbCriteria;
        $criteria->condition = 'id_parent = '.$parent.' and posisi="bawah" ';
        $items = MenuModel::model()->findAll($criteria);

        if(MenuModel::model()->count($criteria)>0){$hasil .= "<ul id='treemenu1'>";}

        foreach ($items as $item)
        {
            $mark = "";
        
            $criteria2 = new CDbCriteria;
            $criteria2->condition = 'id_parent = '.$item->id_menu.' ';
            $items = MenuModel::model()->findAll($criteria2);
            
            if($item->id_menu=="18" && !Yii::app()->user->isGuest)
            {
                $hasil .= "<li><a href='".Yii::app()->baseUrl."/".Yii::app()->user->route_admin."'>Dashboard ".$mark."</a></li>";
                $hasil .= "<li><a href='".Yii::app()->baseUrl."/site/logout'>Log Out ".$mark."</a></li>";
            }
            else
            {
                $hasil .= "<li><a href='".Yii::app()->baseUrl."/".$item->url_route."'>".$item->menu." ".$mark."</a>";
                
                $hasil = $this->menu_rek($item->id_menu,$hasil);
                $hasil .= "</li>";
            }
        }
        if(MenuModel::model()->count($criteria)>0)
        {
            $hasil .= "</ul>";
        }
        return $hasil;
    }
}