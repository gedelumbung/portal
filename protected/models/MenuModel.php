<?php

/**
 * This is the model class for table "tbl_menu".
 *
 * The followings are the available columns in table 'tbl_menu':
 * @property integer $id_menu
 * @property integer $id_parent
 * @property string $menu
 * @property string $url_route
 * @property string $content
 * @property string $jenis
 */
class MenuModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MenuModel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_menu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('menu, url_route, content, jenis', 'required'),
			array('id_parent', 'numerical', 'integerOnly'=>true),
			array('menu', 'length', 'max'=>50),
			array('url_route', 'length', 'max'=>100),
			array('jenis', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_menu, id_parent, menu, url_route, content, jenis', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_menu' => 'Id Menu',
			'id_parent' => 'Id Parent',
			'menu' => 'Menu',
			'url_route' => 'Url Route',
			'content' => 'Content',
			'jenis' => 'Jenis',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_menu',$this->id_menu);
		$criteria->compare('id_parent',$this->id_parent);
		$criteria->compare('menu',$this->menu,true);
		$criteria->compare('url_route',$this->url_route,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('jenis',$this->jenis,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}