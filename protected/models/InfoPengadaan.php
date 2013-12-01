<?php

/**
 * This is the model class for table "tbl_pengadaan".
 *
 * The followings are the available columns in table 'tbl_pengadaan':
 * @property string $kode_lelang
 * @property string $tgl_pengumuman
 * @property string $nama_lelang
 * @property string $kategori
 * @property string $anggaran
 * @property integer $nilai_pagu
 * @property integer $nilai_hps
 * @property string $kualifikasi_usaha
 * @property string $Informasi_tambahan
 * @property string $stts
 */
class InfoPengadaan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InfoPengadaan the static model class
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
		return 'tbl_pengadaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_lelang, nama_lelang, kategori, anggaran, nilai_pagu, nilai_hps, kualifikasi_usaha, Informasi_tambahan', 'required'),
			array('nilai_pagu, nilai_hps', 'numerical', 'integerOnly'=>true),
			array('kode_lelang, tgl_pengumuman', 'length', 'max'=>30),
			array('nama_lelang, kategori, kualifikasi_usaha', 'length', 'max'=>100),
			array('anggaran', 'length', 'max'=>50),
			array('stts', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_lelang, tgl_pengumuman, nama_lelang, kategori, anggaran, nilai_pagu, nilai_hps, kualifikasi_usaha, Informasi_tambahan, stts', 'safe', 'on'=>'search'),
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
			'kode_lelang' => 'Kode Lelang',
			'tgl_pengumuman' => 'Tanggal Pengumuman',
			'nama_lelang' => 'Nama Lelang',
			'kategori' => 'Kategori',
			'anggaran' => 'Anggaran',
			'nilai_pagu' => 'Nilai Pagu',
			'nilai_hps' => 'Nilai Hps',
			'kualifikasi_usaha' => 'Kualifikasi Usaha',
			'Informasi_tambahan' => 'Informasi Tambahan',
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

		$criteria->compare('kode_lelang',$this->kode_lelang,true);
		$criteria->compare('tgl_pengumuman',$this->tgl_pengumuman,true);
		$criteria->compare('nama_lelang',$this->nama_lelang,true);
		$criteria->compare('kategori',$this->kategori,true);
		$criteria->compare('anggaran',$this->anggaran,true);
		$criteria->compare('nilai_pagu',$this->nilai_pagu);
		$criteria->compare('nilai_hps',$this->nilai_hps);
		$criteria->compare('kualifikasi_usaha',$this->kualifikasi_usaha,true);
		$criteria->compare('Informasi_tambahan',$this->Informasi_tambahan,true);
		$criteria->compare('stts',$this->stts,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}