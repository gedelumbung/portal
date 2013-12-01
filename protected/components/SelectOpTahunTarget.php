<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpTahunTarget extends CMenu
{
    public $id_parent;
    public $id_select;
    public function init()
    {
        echo $this->menu_rek($h="");
        parent::init();
    }

    public function menu_rek($hasil)
    {
        $items = Target::model()->findAll();

        foreach ($items as $item)
        {
            if($item->id_target==$this->id_select)
            {
                $hasil .= "<option value='".$item->tahun."' selected>".$item->tahun."</option>";
            }
            else
            {
                $hasil .= "<option value='".$item->tahun."'>".$item->tahun."</option>";
            }
        }

        return $hasil;
    }
}