<?php

/**
 * This is the model class for table "tbl_target".
 *
 * The followings are the available columns in table 'tbl_target':
 * @property integer $id_target
 * @property string $no_rekening
 * @property string $rekening
 * @property string $target
 * @property integer $tahun
 */
class Target extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Target the static model class
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
		return 'tbl_target';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_rekening, rekening, target, tahun', 'required'),
			array('tahun', 'numerical', 'integerOnly'=>true),
			array('no_rekening', 'length', 'max'=>50),
			array('rekening, target', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_target, no_rekening, rekening, target, tahun', 'safe', 'on'=>'search'),
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
			'id_target' => 'Id Target',
			'no_rekening' => 'No Rekening',
			'rekening' => 'Rekening',
			'target' => 'Target',
			'tahun' => 'Tahun',
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

		$criteria->compare('id_target',$this->id_target);
		$criteria->compare('no_rekening',$this->no_rekening,true);
		$criteria->compare('rekening',$this->rekening,true);
		$criteria->compare('target',$this->target,true);
		$criteria->compare('tahun',$this->tahun);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}