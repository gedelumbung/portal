<?php

/**
 * This is the model class for table "tbl_permohonan".
 *
 * The followings are the available columns in table 'tbl_permohonan':
 * @property integer $id_permohonan
 * @property integer $id_user
 * @property string $nama_perusahaan
 * @property string $alamat
 * @property string $nama_file
 */
class Permohonan extends CActiveRecord
{
	public $nama_user;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Permohonan the static model class
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
		return 'tbl_permohonan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, nama_perusahaan, alamat, nama_file, stts', 'required'),
			array('id_user', 'numerical', 'integerOnly'=>true),
			array('nama_perusahaan, nama_file', 'length', 'max'=>100),
            array('nama_file', 'file',
                    'allowEmpty' => true,
                    'types' => 'doc,docx,zip',
                 ),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_permohonan, id_user, nama_perusahaan, alamat, nama_file', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'UserPerusahaan'=>array(self::BELONGS_TO,'UserPerusahaanModel','id_user'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_permohonan' => 'Id Permohonan',
			'id_user' => 'Id User',
			'nama_perusahaan' => 'Nama Perusahaan',
			'alamat' => 'Alamat',
			'nama_file' => 'Nama File',
			'stts' => 'Status',
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

		$criteria->compare('id_permohonan',$this->id_permohonan);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('nama_perusahaan',$this->nama_perusahaan,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('nama_file',$this->nama_file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}