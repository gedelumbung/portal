<?php

/**
 * This is the model class for table "tbl_penerimaan".
 *
 * The followings are the available columns in table 'tbl_penerimaan':
 * @property integer $no_penerimaan
 * @property string $tanggal
 * @property string $jam
 * @property string $no_rekening
 * @property string $uraian_rekening
 * @property integer $jumlah_diterima
 * @property integer $id_bidang
 * @property string $nama_penyetor
 * @property string $penerima
 * @property string $memo
 */
class PenerimaanModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PenerimaanModel the static model class
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
		return 'tbl_penerimaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal, jam, no_rekening, uraian_rekening, jumlah_diterima, id_bidang, nama_penyetor, penerima, memo', 'required'),
			array('jumlah_diterima, id_bidang', 'numerical', 'integerOnly'=>true),
			array('tanggal, jam', 'length', 'max'=>20),
			array('no_rekening', 'length', 'max'=>30),
			array('nama_penyetor, penerima', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('no_penerimaan, tanggal, jam, no_rekening, uraian_rekening, jumlah_diterima, id_bidang, nama_penyetor, penerima, memo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'Bidang'=>array(self::BELONGS_TO,'Bidang','id_bidang'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'no_penerimaan' => 'No Penerimaan',
			'tanggal' => 'Tanggal',
			'jam' => 'Jam',
			'no_rekening' => 'No Rekening',
			'uraian_rekening' => 'Uraian Rekening',
			'jumlah_diterima' => 'Jumlah Diterima',
			'id_bidang' => 'Id Bidang',
			'nama_penyetor' => 'Nama Penyetor',
			'penerima' => 'Penerima',
			'memo' => 'Memo',
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

		$criteria->compare('no_penerimaan',$this->no_penerimaan);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('jam',$this->jam,true);
		$criteria->compare('no_rekening',$this->no_rekening,true);
		$criteria->compare('uraian_rekening',$this->uraian_rekening,true);
		$criteria->compare('jumlah_diterima',$this->jumlah_diterima);
		$criteria->compare('id_bidang',$this->id_bidang);
		$criteria->compare('nama_penyetor',$this->nama_penyetor,true);
		$criteria->compare('penerima',$this->penerima,true);
		$criteria->compare('memo',$this->memo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}