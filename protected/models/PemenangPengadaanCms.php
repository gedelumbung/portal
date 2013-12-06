<?php

/**
 * This is the model class for table "tbl_pemenang_pengadaan".
 *
 * The followings are the available columns in table 'tbl_pemenang_pengadaan':
 * @property integer $id_pemenang_pengadaan
 * @property string $judul
 * @property string $isi
 * @property string $tanggal
 * @property integer $id_user
 * @property integer $id_bidang
 * @property string $stts
 */
class PemenangPengadaanCms extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PemenangPengadaanCms the static model class
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
		return 'tbl_pemenang_pengadaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_reff, kode_lelang, nama_pemenang_1, nilai_penawaran_1, npwp_1, nama_pemenang_2, nilai_penawaran_2, npwp_2, nama_pemenang_3, nilai_penawaran_3, npwp_3', 'required'),
			array('no_reff, tgl_pengumuman, kode_lelang, nilai_penawaran_1, npwp_1, nilai_penawaran_2, npwp_2, nilai_penawaran_3, npwp_3', 'length', 'max'=>30),
			array('nama_pemenang_1, nama_pemenang_2, nama_pemenang_3', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_pemenang_pengadaan, no_reff, tgl_pengumuman, kode_lelang, nama_pemenang_1, nilai_penawaran_1, npwp_1, nama_pemenang_2, nilai_penawaran_2, npwp_2, nama_pemenang_3, nilai_penawaran_3, npwp_3', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'Pengadaan'=>array(self::BELONGS_TO,'InfoPengadaan','kode_lelang'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pemenang_pengadaan' => 'Id Pemenang Pengadaan',
			'no_reff' => 'No Reff',
			'tgl_pengumuman' => 'Tgl Pengumuman',
			'kode_lelang' => 'Kode Lelang',
			'nama_pemenang_1' => 'Nama Pemenang 1',
			'nilai_penawaran_1' => 'Nilai Penawaran 1',
			'npwp_1' => 'Npwp 1',
			'nama_pemenang_2' => 'Nama Pemenang 2',
			'nilai_penawaran_2' => 'Nilai Penawaran 2',
			'npwp_2' => 'Npwp 2',
			'nama_pemenang_3' => 'Nama Pemenang 3',
			'nilai_penawaran_3' => 'Nilai Penawaran 3',
			'npwp_3' => 'Npwp 3',
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

		$criteria->compare('id_pemenang_pengadaan',$this->id_pemenang_pengadaan);
		$criteria->compare('no_reff',$this->no_reff,true);
		$criteria->compare('tgl_pengumuman',$this->tgl_pengumuman,true);
		$criteria->compare('kode_lelang',$this->kode_lelang,true);
		$criteria->compare('nama_pemenang_1',$this->nama_pemenang_1,true);
		$criteria->compare('nilai_penawaran_1',$this->nilai_penawaran_1,true);
		$criteria->compare('npwp_1',$this->npwp_1,true);
		$criteria->compare('nama_pemenang_2',$this->nama_pemenang_2,true);
		$criteria->compare('nilai_penawaran_2',$this->nilai_penawaran_2,true);
		$criteria->compare('npwp_2',$this->npwp_2,true);
		$criteria->compare('nama_pemenang_3',$this->nama_pemenang_3,true);
		$criteria->compare('nilai_penawaran_3',$this->nilai_penawaran_3,true);
		$criteria->compare('npwp_3',$this->npwp_3,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}