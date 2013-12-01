<?php

class Kepala_dinas_info_padController extends Controller
{
	public $layout = "main_cms_kepala_dinas";

	public function init()
	{
		if (Yii::app()->user->isGuest) 
		{
			$this->redirect(array("site/index"));
		}
		else if(Yii::app()->user->level!="kepala_dinas")
		{
			$this->redirect(array("site/index"));
		}
	}

	public function actionIndex()
	{
		if(empty(Yii::app()->session['filter_pad']))
		{
			Yii::app()->session['display_tahun'] = "display:none;";
			Yii::app()->session['display_bulan'] = "display:none;";
			Yii::app()->session['display_hari'] = "display:none;";
			Yii::app()->session['display_bulan_to_bulan'] = "display:none;";
		}
		$p = array();
		if(Yii::app()->session['filter_pad']=="tahun")
		{
			$p['data'] = Yii::app()->db->createCommand("SELECT b.no_rekening, b.rekening, b.target, b.tahun, sum(jumlah_diterima) as total, (sum(jumlah_diterima)-b.target) as presentasi, if(sum(jumlah_diterima)>target,'Terpenuhi','Belum Terpenuhi') as status FROM `tbl_penerimaan` a join tbl_target b on substring(a.tanggal,7,4)=b.tahun where substring(a.tanggal,7,4)='".Yii::app()->session['filter_pad_tahun']."'")->query();
		}
		else if(Yii::app()->session['filter_pad']=="bulan")
		{
			$param = 0;
			for($i=1;$i<Yii::app()->session['filter_pad_bulan'];$i++)
			{
				if($param==0)
				{
					$param = $i;
				}
				else
				{
					$param .= ",".$i;
				}
			}

			$p['data'] = Yii::app()->db->createCommand("SELECT b.no_rekening, b.rekening, b.target, b.tahun, sum(jumlah_diterima) as total, (sum(jumlah_diterima)-b.target) as presentasi, if(sum(jumlah_diterima)>target,'Terpenuhi','Belum Terpenuhi') as status, (select sum(jumlah_diterima) as total from tbl_penerimaan where substring(a.tanggal,7,4)='".Yii::app()->session['filter_pad_tahun']."' and substring(tanggal,4,2) IN (".$param.")) as hasil_sebelum FROM `tbl_penerimaan` a join tbl_target b on substring(a.tanggal,7,4)=b.tahun where substring(tanggal,4,2)='".Yii::app()->session['filter_pad_bulan']."' and substring(a.tanggal,7,4)='".Yii::app()->session['filter_pad_tahun']."'")->query();
		}
		else if(Yii::app()->session['filter_pad']=="hari")
		{
			$param = 0;
			for($i=1;$i<Yii::app()->session['filter_pad_bulan'];$i++)
			{
				if($param==0)
				{
					$param = $i;
				}
				else
				{
					$param .= ",".$i;
				}
			}

			$param_tanggal = 0;
			for($i=1;$i<Yii::app()->session['filter_pad_tanggal'];$i++)
			{
				if($param_tanggal==0)
				{
					$param_tanggal = $i;
				}
				else
				{
					$param_tanggal .= ",".$i;
				}
			}

			$p['data'] = Yii::app()->db->createCommand("SELECT b.no_rekening, b.rekening, b.target, b.tahun, sum(jumlah_diterima) as total, (sum(jumlah_diterima)-b.target) as presentasi, if(sum(jumlah_diterima)>target,'Terpenuhi','Belum Terpenuhi') as status, (select sum(jumlah_diterima) as total from tbl_penerimaan where substring(a.tanggal,7,4)='".Yii::app()->session['filter_pad_tahun']."' and substring(tanggal,4,2) IN (".$param.")) as hasil_sebelum, (select sum(jumlah_diterima) as total from tbl_penerimaan where substring(a.tanggal,7,4)='".Yii::app()->session['filter_pad_tahun']."' and substring(tanggal,1,2) IN (".$param_tanggal.")) as hasil_hari_sebelum FROM `tbl_penerimaan` a join tbl_target b on substring(a.tanggal,7,4)=b.tahun where substring(tanggal,4,2)='".Yii::app()->session['filter_pad_bulan']."' and substring(a.tanggal,7,4)='".Yii::app()->session['filter_pad_tahun']."'")->query();
		}
		else if(Yii::app()->session['filter_pad']=="bulan_to_bulan")
		{
			$p['data'] = Yii::app()->db->createCommand("SELECT b.no_rekening, b.rekening, b.target, b.tahun, sum(jumlah_diterima) as total, (sum(jumlah_diterima)-b.target) as presentasi, if(sum(jumlah_diterima)>target,'Terpenuhi','Belum Terpenuhi') as status FROM `tbl_penerimaan` a join tbl_target b on substring(a.tanggal,7,4)=b.tahun where substring(tanggal,4,2) IN (".Yii::app()->session['filter_pad_bulan_to_bulan'].") and substring(a.tanggal,7,4)='".Yii::app()->session['filter_pad_tahun']."'")->query();
		}
		$this->render('index',$p);
	}

	public function actionSet()
	{
		$st = $_POST['filter_select'];
		if($st=="tahun")
		{
			Yii::app()->session['filter_pad'] = $st;
			Yii::app()->session['filter_pad_tahun'] = $_POST['tahun_tahun'];

			Yii::app()->session['display_tahun'] = "";
			Yii::app()->session['display_bulan'] = "display:none;";
			Yii::app()->session['display_hari'] = "display:none;";
			Yii::app()->session['display_bulan_to_bulan'] = "display:none;";

		}
		else if($st=="bulan")
		{
			Yii::app()->session['filter_pad'] = $st;
			Yii::app()->session['filter_pad_bulan'] = $_POST['bulan_bulan'];
			Yii::app()->session['filter_pad_tahun'] = $_POST['tahun_bulan'];

			Yii::app()->session['display_tahun'] = "display:none;";
			Yii::app()->session['display_bulan'] = "";
			Yii::app()->session['display_hari'] = "display:none;";
			Yii::app()->session['display_bulan_to_bulan'] = "display:none;";

		}
		else if($st=="hari")
		{
			Yii::app()->session['filter_pad'] = $st;
			Yii::app()->session['filter_pad_tanggal'] = $_POST['tanggal_hari'];
			Yii::app()->session['filter_pad_bulan'] = $_POST['bulan_hari'];
			Yii::app()->session['filter_pad_tahun'] = $_POST['tahun_hari'];
			Yii::app()->session['filter_pad_hari'] = Yii::app()->session['filter_pad_tanggal']."-".Yii::app()->session['filter_pad_bulan']."-".Yii::app()->session['filter_pad_tahun'];

			Yii::app()->session['display_tahun'] = "display:none;";
			Yii::app()->session['display_bulan'] = "display:none;";
			Yii::app()->session['display_hari'] = "";
			Yii::app()->session['display_bulan_to_bulan'] = "display:none;";

		}
		else if($st=="bulan_to_bulan")
		{
			Yii::app()->session['filter_pad'] = $st;
			Yii::app()->session['filter_pad_bulan1'] = $_POST['bulan1_to_bulan'];
			Yii::app()->session['filter_pad_bulan2'] = $_POST['bulan2_to_bulan'];
			Yii::app()->session['filter_pad_tahun'] = $_POST['tahun_to_bulan'];

			$param = 0;
			for($i=Yii::app()->session['filter_pad_bulan1'];$i<=Yii::app()->session['filter_pad_bulan2'];$i++)
			{
				if($param==0)
				{
					$param = $i;
				}
				else
				{
					$param .= ",".$i;
				}
			}
			Yii::app()->session['filter_pad_bulan_to_bulan'] = $param;
			

			Yii::app()->session['display_tahun'] = "display:none;";
			Yii::app()->session['display_bulan'] = "display:none;";
			Yii::app()->session['display_hari'] = "display:none;";
			Yii::app()->session['display_bulan_to_bulan'] = "";

		}
		$this->redirect("index");
	}

}