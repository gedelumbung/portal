<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpTanggal extends CMenu
{
    public $id_select;
    public function init()
    {
        for ($i=1;$i<=31;$i++)
        {
            if($i<=9)
            {
                if($i==$this->id_select)
                {
                    echo "<option value='0".$i."' selected>".$i."</option>";
                }
                else
                {
                    echo "<option value='0".$i."'>".$i."</option>";
                }
            }
            else
            {
                if($i==$this->id_select)
                {
                    echo "<option value='".$i."' selected>".$i."</option>";
                }
                else
                {
                    echo "<option value='".$i."'>".$i."</option>";
                }
            }
            
        }
        parent::init();
    }
}