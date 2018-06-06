<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style type="text/css">
html{
	background-color:#d2d2d2;
}
.papermargin{
	margin:1em;
}
body{
	height: 842px;
        width: 595px;
        /* to centre page on screen*/
        margin-left: auto;
        margin-right: auto;
font-size: 12px;
background-color:#fff;
}	
@media print{
	body{width: 100%;}
}
</style>
<img src="<?=base_url()?>assets/images/kopjasindo.jpg" style="width: 100%">
<div class="papermargin">
<div class="datehead">
Jakarta,&nbsp;<?=date("d M Y")?>
<div class="etahead" style="float:right;border:2px solid #000;padding:5px">
	<strong>ETA : <?=date('d M Y',strtotime($reportdet->load_eta));?></strong>
</div>
</div>
<div class="header" style="margin-top:1.2em">
	<table width="50%">
		<tr>
		<td width="25%">To</td>
		<td width="25%">: <?=$reportdet->cons_name;?></td>
		</tr>
		<tr>
		<td width="25%">Attn</td>
		<td width="25%">: Import Dept</td>
		</tr>
		<tr>
		<td width="25%">Fm</td>
		<td width="25%">: Jasindo Import</td>
		</tr>	
</table>
</div>

<div class="contents" style="margin-top:1.2em">
Dengan ini kami menginformasikan kepada saudara bahwa barang anda telah tiba dengan data sbb:
<table style="width: 100%;margin-top: 1.2em;margin-bottom: 1.2em">
		<tr>
		<td width="25%">Volume</td>
		<td width="50%">: <?=$reportdet->load_vol;?></td>
		</tr>
		<tr>
		<td width="25%">Port Of Loading</td>
		<td width="50%">: <?=$reportdet->load_pol;?></td>
		</tr>
		<tr>
		<td width="25%">Final Destination</td>
		<td width="50%">: <?=$reportdet->load_dest;?></td>
		</tr>
		<tr>
		<td width="25%">B/L No.</td>
		<td width="50%">: <?=$reportdet->load_hbl;?></td>
		</tr>
		<tr>
		<td width="25%">MBL No.</td>
		<td width="50%">: <?=$reportdet->load_mbl;?></td>
		</tr>
		<tr>
		<td width="25%">Carrier</td>
		<td width="50%">: <?=$reportdet->load_carrier;?></td>
		</tr>
		<tr>
		<td width="25%">Vessel</td>
		<td width="50%">: <?=$reportdet->load_vessel;?></td>
		</tr>
</table>
<img src="<?=base_url()?>assets/images/dn.jpg" style="width: 75%"><br>
Demikian informasi ini kami sampaikan, atas perhatiannya terimakasih.
</div>

</div>
</body>
</html>