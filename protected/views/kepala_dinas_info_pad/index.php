<script type="text/javascript">
function filter(param)
{
	if(param=="hari")
	{
		$( "#hari" ).show( "fast", function() {
			$( "#bulan" ).hide();
			$( "#bulan_to_bulan" ).hide();
			$( "#tahun" ).hide();
		});
	}
	else if(param=="bulan")
	{
		$( "#bulan" ).show( "fast", function() {
			$( "#hari" ).hide();
			$( "#bulan_to_bulan" ).hide();
			$( "#tahun" ).hide();
		});
	}
	else if(param=="bulan_to_bulan")
	{
		$( "#bulan_to_bulan" ).show( "fast", function() {
			$( "#hari" ).hide();
			$( "#bulan" ).hide();
			$( "#tahun" ).hide();
		});
	}
	else if(param=="tahun")
	{
		$( "#tahun" ).show( "fast", function() {
			$( "#bulan" ).hide();
			$( "#bulan_to_bulan" ).hide();
			$( "#hari" ).hide();
		});
	}
	
}
</script>
<h2>Info Pendapatan Asli Daerah</h2>

<form method="post" action="<?php echo Yii::app()->baseUrl; ?>/kepala_dinas_info_pad/set">

<?php echo CHtml::dropDownList('filter_select',Yii::app()->session["filter_pad"],array("hari"=>"Hari / Tanggal","bulan"=>"Bulan","bulan_to_bulan"=>"Bulan ke Bulan","tahun"=>"Tahun"),array('empty'=>'-- Filter data --', 'onchange'=>'filter(this.value)')); ?>

<div style="<?php echo Yii::app()->session['display_hari']; ?>" id="hari">
	Pilih tanggal : 
	<select name="tanggal_hari">
		<?php $this->widget("SelectOpTanggal",array('id_select'=>Yii::app()->session['filter_pad_tanggal'])); ?>
	</select>
	<select name="bulan_hari">
		<?php $this->widget("SelectOpBulan",array('id_select'=>Yii::app()->session['filter_pad_bulan'])); ?>
	</select>
	<select name="tahun_hari">
		<?php $this->widget("SelectOpTahunTarget",array('id_select'=>Yii::app()->session['filter_pad_tahun'])); ?>
	</select>
</div>

<div style="<?php echo Yii::app()->session['display_bulan']; ?>" id="bulan">
	Pilih Bulan : 
	<select name="bulan_bulan">
		<?php $this->widget("SelectOpBulan",array('id_select'=>Yii::app()->session['filter_pad_bulan'])); ?>
	</select>
	<select name="tahun_bulan">
		<?php $this->widget("SelectOpTahunTarget",array('id_select'=>Yii::app()->session['filter_pad_tahun'])); ?>
	</select>
</div>

<div style="<?php echo Yii::app()->session['display_bulan_to_bulan']; ?>" id="bulan_to_bulan">
	Pilih Bulan : 
	<select name="bulan1_to_bulan">
		<?php $this->widget("SelectOpBulan",array('id_select'=>Yii::app()->session['filter_pad_bulan1'])); ?>
	</select>
	sampai dengan
	<select name="bulan2_to_bulan">
		<?php $this->widget("SelectOpBulan",array('id_select'=>Yii::app()->session['filter_pad_bulan2'])); ?>
	</select>
	<select name="tahun_to_bulan">
		<?php $this->widget("SelectOpTahunTarget",array('id_select'=>Yii::app()->session['filter_pad_tahun'])); ?>
	</select>
</div>

<div style="<?php echo Yii::app()->session['display_tahun']; ?>" id="tahun">
	Pilih Tahun : 
	<select name="tahun_tahun">
		<?php $this->widget("SelectOpTahunTarget",array('id_select'=>Yii::app()->session['filter_pad_tahun'])); ?>
	</select>
</div>
<input type="submit" value="Filter">
</form>

<?php
	//check if filter is empty
	if(!empty(Yii::app()->session['filter_pad']))
	{
		//check if filter==tahun
		if(Yii::app()->session['filter_pad']=="tahun")
		{
			echo "
			<table cellpadding='10' cellspacing='0' width='100%'>
				<tr style='background-color:#eee;'>
					<td>Nomor Rekening</td>
					<td>Rekening</td>
					<td>Target</td>
					<td>Tahun</td>
					<td>Total</td>
					<td>Presentasi</td>
					<td>Status</td>
				</tr>";
			foreach($data as $dt)
			{
				echo "
					<tr>
						<td>".$dt['no_rekening']."</td>
						<td>".$dt['rekening']."</td>
						<td>Rp. ".number_format($dt['target'],2,",",".")."</td>
						<td>".$dt['tahun']."</td>
						<td>Rp. ".number_format($dt['total'],2,",",".")."</td>
						<td>Rp. ".number_format($dt['presentasi'],2,",",".")."</td>
						<td>".$dt['status']."</td>
					</tr>";
			}
			echo "</table>";
		}
		//check if filter==bulan
		else if(Yii::app()->session['filter_pad']=="bulan")
		{
			echo "
			<table cellpadding='10' cellspacing='0' width='100%'>
				<tr style='background-color:#eee;'>
					<td>Nomor Rekening</td>
					<td>Rekening</td>
					<td>Target</td>
					<td>Tahun</td>
					<td>S/D Bulan Yang Lalu</td>
					<td>Bulan Ini</td>
					<td>Jumlah</td>
					<td>Presentasi</td>
					<td>Status</td>
				</tr>";
			foreach($data as $dt)
			{
				echo "
					<tr>
						<td>".$dt['no_rekening']."</td>
						<td>".$dt['rekening']."</td>
						<td>Rp. ".number_format($dt['target'],2,",",".")."</td>
						<td>".$dt['tahun']."</td>
						<td>Rp. ".number_format($dt['hasil_sebelum'],2,",",".")."</td>
						<td>Rp. ".number_format($dt['total'],2,",",".")."</td>
						<td>Rp. ".number_format($dt['total']+$dt['hasil_sebelum'],2,",",".")."</td>
						<td>Rp. ".number_format($dt['presentasi'],2,",",".")."</td>
						<td>".$dt['status']."</td>
					</tr>";
			}
			echo "</table>";
		}
		//check if filter==hari
		else if(Yii::app()->session['filter_pad']=="hari")
		{
			echo "
			<table cellpadding='10' cellspacing='0' width='100%'>
				<tr style='background-color:#eee;'>
					<td>Nomor Rekening</td>
					<td>Rekening</td>
					<td>Target</td>
					<td>Tahun</td>
					<td>S/D Hari Yang Lalu</td>
					<td>Bulan Ini</td>
					<td>Jumlah</td>
					<td>Presentasi</td>
					<td>Status</td>
				</tr>";
			foreach($data as $dt)
			{
				echo "
					<tr>
						<td>".$dt['no_rekening']."</td>
						<td>".$dt['rekening']."</td>
						<td>Rp. ".number_format($dt['target'],2,",",".")."</td>
						<td>".$dt['tahun']."</td>
						<td>Rp. ".number_format($dt['hasil_sebelum']+$dt['hasil_hari_sebelum'],2,",",".")."</td>
						<td>Rp. ".number_format($dt['total'],2,",",".")."</td>
						<td>Rp. ".number_format($dt['total']+$dt['hasil_sebelum'],2,",",".")."</td>
						<td>Rp. ".number_format($dt['presentasi'],2,",",".")."</td>
						<td>".$dt['status']."</td>
					</tr>";
			}
			echo "</table>";
		}
		//check if filter==bulan_to_bulan
		else if(Yii::app()->session['filter_pad']=="bulan_to_bulan")
		{
			echo "
			<table cellpadding='10' cellspacing='0' width='100%'>
				<tr style='background-color:#eee;'>
					<td>Nomor Rekening</td>
					<td>Rekening</td>
					<td>Target</td>
					<td>Tahun</td>
					<td>Total</td>
					<td>Presentasi</td>
					<td>Status</td>
				</tr>";
			foreach($data as $dt)
			{
				echo "
					<tr>
						<td>".$dt['no_rekening']."</td>
						<td>".$dt['rekening']."</td>
						<td>Rp. ".number_format($dt['target'],2,",",".")."</td>
						<td>".$dt['tahun']."</td>
						<td>Rp. ".number_format($dt['total'],2,",",".")."</td>
						<td>Rp. ".number_format($dt['presentasi'],2,",",".")."</td>
						<td>".$dt['status']."</td>
					</tr>";
			}
			echo "</table>";
		}
?>

<?php
	}
?>











