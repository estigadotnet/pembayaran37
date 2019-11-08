<?php
namespace PHPMaker2020\project1;

// Session
if (session_status() !== PHP_SESSION_ACTIVE)
	session_start(); // Init session data

// Output buffering
ob_start();

// Autoload
include_once "autoload.php";
?>
<?php

// Write header
WriteHeader(FALSE);

// Create page object
$t103_daf_kelas_siswa_iuran_delete = new t103_daf_kelas_siswa_iuran_delete();

// Run the page
$t103_daf_kelas_siswa_iuran_delete->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t103_daf_kelas_siswa_iuran_delete->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft103_daf_kelas_siswa_iurandelete, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "delete";
	ft103_daf_kelas_siswa_iurandelete = currentForm = new ew.Form("ft103_daf_kelas_siswa_iurandelete", "delete");
	loadjs.done("ft103_daf_kelas_siswa_iurandelete");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t103_daf_kelas_siswa_iuran_delete->showPageHeader(); ?>
<?php
$t103_daf_kelas_siswa_iuran_delete->showMessage();
?>
<form name="ft103_daf_kelas_siswa_iurandelete" id="ft103_daf_kelas_siswa_iurandelete" class="form-inline ew-form ew-delete-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t103_daf_kelas_siswa_iuran">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($t103_daf_kelas_siswa_iuran_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode(Config("COMPOSITE_KEY_SEPARATOR"), $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<table class="table ew-table">
	<thead>
	<tr class="ew-table-header">
<?php if ($t103_daf_kelas_siswa_iuran_delete->iuran_id->Visible) { // iuran_id ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->iuran_id->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_iuran_id" class="t103_daf_kelas_siswa_iuran_iuran_id"><?php echo $t103_daf_kelas_siswa_iuran_delete->iuran_id->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->Jumlah->Visible) { // Jumlah ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->Jumlah->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_Jumlah" class="t103_daf_kelas_siswa_iuran_Jumlah"><?php echo $t103_daf_kelas_siswa_iuran_delete->Jumlah->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr01->Visible) { // byr01 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr01->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr01" class="t103_daf_kelas_siswa_iuran_byr01"><?php echo $t103_daf_kelas_siswa_iuran_delete->byr01->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml01->Visible) { // jml01 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->jml01->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml01" class="t103_daf_kelas_siswa_iuran_jml01"><?php echo $t103_daf_kelas_siswa_iuran_delete->jml01->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl01->Visible) { // tgl01 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl01->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl01" class="t103_daf_kelas_siswa_iuran_tgl01"><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl01->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr02->Visible) { // byr02 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr02->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr02" class="t103_daf_kelas_siswa_iuran_byr02"><?php echo $t103_daf_kelas_siswa_iuran_delete->byr02->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml02->Visible) { // jml02 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->jml02->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml02" class="t103_daf_kelas_siswa_iuran_jml02"><?php echo $t103_daf_kelas_siswa_iuran_delete->jml02->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl02->Visible) { // tgl02 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl02->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl02" class="t103_daf_kelas_siswa_iuran_tgl02"><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl02->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr03->Visible) { // byr03 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr03->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr03" class="t103_daf_kelas_siswa_iuran_byr03"><?php echo $t103_daf_kelas_siswa_iuran_delete->byr03->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml03->Visible) { // jml03 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->jml03->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml03" class="t103_daf_kelas_siswa_iuran_jml03"><?php echo $t103_daf_kelas_siswa_iuran_delete->jml03->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl03->Visible) { // tgl03 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl03->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl03" class="t103_daf_kelas_siswa_iuran_tgl03"><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl03->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr04->Visible) { // byr04 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr04->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr04" class="t103_daf_kelas_siswa_iuran_byr04"><?php echo $t103_daf_kelas_siswa_iuran_delete->byr04->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml04->Visible) { // jml04 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->jml04->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml04" class="t103_daf_kelas_siswa_iuran_jml04"><?php echo $t103_daf_kelas_siswa_iuran_delete->jml04->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl04->Visible) { // tgl04 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl04->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl04" class="t103_daf_kelas_siswa_iuran_tgl04"><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl04->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr05->Visible) { // byr05 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr05->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr05" class="t103_daf_kelas_siswa_iuran_byr05"><?php echo $t103_daf_kelas_siswa_iuran_delete->byr05->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml05->Visible) { // jml05 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->jml05->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml05" class="t103_daf_kelas_siswa_iuran_jml05"><?php echo $t103_daf_kelas_siswa_iuran_delete->jml05->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl05->Visible) { // tgl05 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl05->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl05" class="t103_daf_kelas_siswa_iuran_tgl05"><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl05->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr06->Visible) { // byr06 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr06->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr06" class="t103_daf_kelas_siswa_iuran_byr06"><?php echo $t103_daf_kelas_siswa_iuran_delete->byr06->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml06->Visible) { // jml06 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->jml06->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml06" class="t103_daf_kelas_siswa_iuran_jml06"><?php echo $t103_daf_kelas_siswa_iuran_delete->jml06->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl06->Visible) { // tgl06 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl06->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl06" class="t103_daf_kelas_siswa_iuran_tgl06"><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl06->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr07->Visible) { // byr07 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr07->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr07" class="t103_daf_kelas_siswa_iuran_byr07"><?php echo $t103_daf_kelas_siswa_iuran_delete->byr07->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml07->Visible) { // jml07 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->jml07->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml07" class="t103_daf_kelas_siswa_iuran_jml07"><?php echo $t103_daf_kelas_siswa_iuran_delete->jml07->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl07->Visible) { // tgl07 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl07->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl07" class="t103_daf_kelas_siswa_iuran_tgl07"><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl07->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr08->Visible) { // byr08 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr08->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr08" class="t103_daf_kelas_siswa_iuran_byr08"><?php echo $t103_daf_kelas_siswa_iuran_delete->byr08->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml08->Visible) { // jml08 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->jml08->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml08" class="t103_daf_kelas_siswa_iuran_jml08"><?php echo $t103_daf_kelas_siswa_iuran_delete->jml08->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl08->Visible) { // tgl08 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl08->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl08" class="t103_daf_kelas_siswa_iuran_tgl08"><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl08->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr09->Visible) { // byr09 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr09->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr09" class="t103_daf_kelas_siswa_iuran_byr09"><?php echo $t103_daf_kelas_siswa_iuran_delete->byr09->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml09->Visible) { // jml09 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->jml09->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml09" class="t103_daf_kelas_siswa_iuran_jml09"><?php echo $t103_daf_kelas_siswa_iuran_delete->jml09->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl09->Visible) { // tgl09 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl09->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl09" class="t103_daf_kelas_siswa_iuran_tgl09"><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl09->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr10->Visible) { // byr10 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr10->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr10" class="t103_daf_kelas_siswa_iuran_byr10"><?php echo $t103_daf_kelas_siswa_iuran_delete->byr10->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml10->Visible) { // jml10 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->jml10->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml10" class="t103_daf_kelas_siswa_iuran_jml10"><?php echo $t103_daf_kelas_siswa_iuran_delete->jml10->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl10->Visible) { // tgl10 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl10->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl10" class="t103_daf_kelas_siswa_iuran_tgl10"><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl10->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr11->Visible) { // byr11 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr11->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr11" class="t103_daf_kelas_siswa_iuran_byr11"><?php echo $t103_daf_kelas_siswa_iuran_delete->byr11->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml11->Visible) { // jml11 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->jml11->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml11" class="t103_daf_kelas_siswa_iuran_jml11"><?php echo $t103_daf_kelas_siswa_iuran_delete->jml11->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl11->Visible) { // tgl11 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl11->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl11" class="t103_daf_kelas_siswa_iuran_tgl11"><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl11->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr12->Visible) { // byr12 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr12->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr12" class="t103_daf_kelas_siswa_iuran_byr12"><?php echo $t103_daf_kelas_siswa_iuran_delete->byr12->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml12->Visible) { // jml12 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->jml12->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml12" class="t103_daf_kelas_siswa_iuran_jml12"><?php echo $t103_daf_kelas_siswa_iuran_delete->jml12->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl12->Visible) { // tgl12 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl12->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl12" class="t103_daf_kelas_siswa_iuran_tgl12"><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl12->caption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$t103_daf_kelas_siswa_iuran_delete->RecordCount = 0;
$i = 0;
while (!$t103_daf_kelas_siswa_iuran_delete->Recordset->EOF) {
	$t103_daf_kelas_siswa_iuran_delete->RecordCount++;
	$t103_daf_kelas_siswa_iuran_delete->RowCount++;

	// Set row properties
	$t103_daf_kelas_siswa_iuran->resetAttributes();
	$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_VIEW; // View

	// Get the field contents
	$t103_daf_kelas_siswa_iuran_delete->loadRowValues($t103_daf_kelas_siswa_iuran_delete->Recordset);

	// Render row
	$t103_daf_kelas_siswa_iuran_delete->renderRow();
?>
	<tr <?php echo $t103_daf_kelas_siswa_iuran->rowAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran_delete->iuran_id->Visible) { // iuran_id ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->iuran_id->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_iuran_id" class="t103_daf_kelas_siswa_iuran_iuran_id">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->iuran_id->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->iuran_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->Jumlah->Visible) { // Jumlah ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->Jumlah->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_Jumlah" class="t103_daf_kelas_siswa_iuran_Jumlah">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->Jumlah->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->Jumlah->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr01->Visible) { // byr01 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->byr01->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_byr01" class="t103_daf_kelas_siswa_iuran_byr01">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->byr01->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr01" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr01->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_delete->byr01->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr01"></label></div></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml01->Visible) { // jml01 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->jml01->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_jml01" class="t103_daf_kelas_siswa_iuran_jml01">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->jml01->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->jml01->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl01->Visible) { // tgl01 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->tgl01->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl01" class="t103_daf_kelas_siswa_iuran_tgl01">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl01->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl01->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr02->Visible) { // byr02 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->byr02->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_byr02" class="t103_daf_kelas_siswa_iuran_byr02">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->byr02->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr02" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr02->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_delete->byr02->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr02"></label></div></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml02->Visible) { // jml02 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->jml02->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_jml02" class="t103_daf_kelas_siswa_iuran_jml02">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->jml02->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->jml02->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl02->Visible) { // tgl02 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->tgl02->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl02" class="t103_daf_kelas_siswa_iuran_tgl02">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl02->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl02->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr03->Visible) { // byr03 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->byr03->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_byr03" class="t103_daf_kelas_siswa_iuran_byr03">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->byr03->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr03" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr03->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_delete->byr03->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr03"></label></div></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml03->Visible) { // jml03 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->jml03->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_jml03" class="t103_daf_kelas_siswa_iuran_jml03">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->jml03->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->jml03->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl03->Visible) { // tgl03 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->tgl03->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl03" class="t103_daf_kelas_siswa_iuran_tgl03">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl03->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl03->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr04->Visible) { // byr04 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->byr04->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_byr04" class="t103_daf_kelas_siswa_iuran_byr04">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->byr04->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr04" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr04->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_delete->byr04->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr04"></label></div></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml04->Visible) { // jml04 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->jml04->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_jml04" class="t103_daf_kelas_siswa_iuran_jml04">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->jml04->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->jml04->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl04->Visible) { // tgl04 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->tgl04->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl04" class="t103_daf_kelas_siswa_iuran_tgl04">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl04->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl04->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr05->Visible) { // byr05 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->byr05->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_byr05" class="t103_daf_kelas_siswa_iuran_byr05">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->byr05->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr05" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr05->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_delete->byr05->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr05"></label></div></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml05->Visible) { // jml05 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->jml05->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_jml05" class="t103_daf_kelas_siswa_iuran_jml05">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->jml05->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->jml05->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl05->Visible) { // tgl05 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->tgl05->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl05" class="t103_daf_kelas_siswa_iuran_tgl05">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl05->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl05->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr06->Visible) { // byr06 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->byr06->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_byr06" class="t103_daf_kelas_siswa_iuran_byr06">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->byr06->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr06" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr06->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_delete->byr06->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr06"></label></div></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml06->Visible) { // jml06 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->jml06->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_jml06" class="t103_daf_kelas_siswa_iuran_jml06">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->jml06->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->jml06->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl06->Visible) { // tgl06 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->tgl06->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl06" class="t103_daf_kelas_siswa_iuran_tgl06">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl06->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl06->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr07->Visible) { // byr07 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->byr07->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_byr07" class="t103_daf_kelas_siswa_iuran_byr07">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->byr07->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr07" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr07->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_delete->byr07->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr07"></label></div></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml07->Visible) { // jml07 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->jml07->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_jml07" class="t103_daf_kelas_siswa_iuran_jml07">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->jml07->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->jml07->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl07->Visible) { // tgl07 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->tgl07->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl07" class="t103_daf_kelas_siswa_iuran_tgl07">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl07->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl07->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr08->Visible) { // byr08 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->byr08->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_byr08" class="t103_daf_kelas_siswa_iuran_byr08">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->byr08->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr08" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr08->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_delete->byr08->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr08"></label></div></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml08->Visible) { // jml08 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->jml08->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_jml08" class="t103_daf_kelas_siswa_iuran_jml08">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->jml08->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->jml08->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl08->Visible) { // tgl08 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->tgl08->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl08" class="t103_daf_kelas_siswa_iuran_tgl08">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl08->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl08->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr09->Visible) { // byr09 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->byr09->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_byr09" class="t103_daf_kelas_siswa_iuran_byr09">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->byr09->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr09" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr09->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_delete->byr09->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr09"></label></div></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml09->Visible) { // jml09 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->jml09->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_jml09" class="t103_daf_kelas_siswa_iuran_jml09">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->jml09->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->jml09->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl09->Visible) { // tgl09 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->tgl09->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl09" class="t103_daf_kelas_siswa_iuran_tgl09">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl09->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl09->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr10->Visible) { // byr10 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->byr10->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_byr10" class="t103_daf_kelas_siswa_iuran_byr10">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->byr10->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr10" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr10->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_delete->byr10->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr10"></label></div></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml10->Visible) { // jml10 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->jml10->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_jml10" class="t103_daf_kelas_siswa_iuran_jml10">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->jml10->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->jml10->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl10->Visible) { // tgl10 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->tgl10->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl10" class="t103_daf_kelas_siswa_iuran_tgl10">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl10->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl10->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr11->Visible) { // byr11 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->byr11->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_byr11" class="t103_daf_kelas_siswa_iuran_byr11">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->byr11->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr11" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr11->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_delete->byr11->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr11"></label></div></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml11->Visible) { // jml11 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->jml11->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_jml11" class="t103_daf_kelas_siswa_iuran_jml11">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->jml11->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->jml11->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl11->Visible) { // tgl11 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->tgl11->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl11" class="t103_daf_kelas_siswa_iuran_tgl11">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl11->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl11->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->byr12->Visible) { // byr12 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->byr12->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_byr12" class="t103_daf_kelas_siswa_iuran_byr12">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->byr12->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr12" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_delete->byr12->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_delete->byr12->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr12"></label></div></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->jml12->Visible) { // jml12 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->jml12->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_jml12" class="t103_daf_kelas_siswa_iuran_jml12">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->jml12->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->jml12->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_delete->tgl12->Visible) { // tgl12 ?>
		<td <?php echo $t103_daf_kelas_siswa_iuran_delete->tgl12->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl12" class="t103_daf_kelas_siswa_iuran_tgl12">
<span<?php echo $t103_daf_kelas_siswa_iuran_delete->tgl12->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_delete->tgl12->getViewValue() ?></span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$t103_daf_kelas_siswa_iuran_delete->Recordset->moveNext();
}
$t103_daf_kelas_siswa_iuran_delete->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t103_daf_kelas_siswa_iuran_delete->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$t103_daf_kelas_siswa_iuran_delete->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<script>
loadjs.ready("load", function() {

	// Startup script
	// Write your table-specific startup script here
	// console.log("page loaded");

});
</script>
<?php include_once "footer.php"; ?>
<?php
$t103_daf_kelas_siswa_iuran_delete->terminate();
?>