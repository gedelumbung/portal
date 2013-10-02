<?php

/**
 * This is the model class for table "tbl_profil".
 *
 * The followings are the available columns in table 'tbl_profil':
 * @property integer $id_profil
 * @property integer $id_bidang
 * @property string $isi
 */
class Profil extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Profil the static model class
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
		return 'tbl_profil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_bidang, isi', 'required'),
			array('id_bidang', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_profil, id_bidang, isi', 'safe', 'on'=>'search'),
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
			'id_profil' => 'Id Profil',
			'id_bidang' => 'Id Bidang',
			'isi' => 'Isi',
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

		$criteria->compare('id_profil',$this->id_profil);
		$criteria->compare('id_bidang',$this->id_bidang);
		$criteria->compare('isi',$this->isi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}