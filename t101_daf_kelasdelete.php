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
$t101_daf_kelas_delete = new t101_daf_kelas_delete();

// Run the page
$t101_daf_kelas_delete->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t101_daf_kelas_delete->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft101_daf_kelasdelete, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "delete";
	ft101_daf_kelasdelete = currentForm = new ew.Form("ft101_daf_kelasdelete", "delete");
	loadjs.done("ft101_daf_kelasdelete");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t101_daf_kelas_delete->showPageHeader(); ?>
<?php
$t101_daf_kelas_delete->showMessage();
?>
<form name="ft101_daf_kelasdelete" id="ft101_daf_kelasdelete" class="form-inline ew-form ew-delete-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t101_daf_kelas">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($t101_daf_kelas_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode(Config("COMPOSITE_KEY_SEPARATOR"), $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<table class="table ew-table">
	<thead>
	<tr class="ew-table-header">
<?php if ($t101_daf_kelas_delete->tahun_ajaran_id->Visible) { // tahun_ajaran_id ?>
		<th class="<?php echo $t101_daf_kelas_delete->tahun_ajaran_id->headerCellClass() ?>"><span id="elh_t101_daf_kelas_tahun_ajaran_id" class="t101_daf_kelas_tahun_ajaran_id"><?php echo $t101_daf_kelas_delete->tahun_ajaran_id->caption() ?></span></th>
<?php } ?>
<?php if ($t101_daf_kelas_delete->sekolah_id->Visible) { // sekolah_id ?>
		<th class="<?php echo $t101_daf_kelas_delete->sekolah_id->headerCellClass() ?>"><span id="elh_t101_daf_kelas_sekolah_id" class="t101_daf_kelas_sekolah_id"><?php echo $t101_daf_kelas_delete->sekolah_id->caption() ?></span></th>
<?php } ?>
<?php if ($t101_daf_kelas_delete->kelas_id->Visible) { // kelas_id ?>
		<th class="<?php echo $t101_daf_kelas_delete->kelas_id->headerCellClass() ?>"><span id="elh_t101_daf_kelas_kelas_id" class="t101_daf_kelas_kelas_id"><?php echo $t101_daf_kelas_delete->kelas_id->caption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$t101_daf_kelas_delete->RecordCount = 0;
$i = 0;
while (!$t101_daf_kelas_delete->Recordset->EOF) {
	$t101_daf_kelas_delete->RecordCount++;
	$t101_daf_kelas_delete->RowCount++;

	// Set row properties
	$t101_daf_kelas->resetAttributes();
	$t101_daf_kelas->RowType = ROWTYPE_VIEW; // View

	// Get the field contents
	$t101_daf_kelas_delete->loadRowValues($t101_daf_kelas_delete->Recordset);

	// Render row
	$t101_daf_kelas_delete->renderRow();
?>
	<tr <?php echo $t101_daf_kelas->rowAttributes() ?>>
<?php if ($t101_daf_kelas_delete->tahun_ajaran_id->Visible) { // tahun_ajaran_id ?>
		<td <?php echo $t101_daf_kelas_delete->tahun_ajaran_id->cellAttributes() ?>>
<span id="el<?php echo $t101_daf_kelas_delete->RowCount ?>_t101_daf_kelas_tahun_ajaran_id" class="t101_daf_kelas_tahun_ajaran_id">
<span<?php echo $t101_daf_kelas_delete->tahun_ajaran_id->viewAttributes() ?>><?php echo $t101_daf_kelas_delete->tahun_ajaran_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t101_daf_kelas_delete->sekolah_id->Visible) { // sekolah_id ?>
		<td <?php echo $t101_daf_kelas_delete->sekolah_id->cellAttributes() ?>>
<span id="el<?php echo $t101_daf_kelas_delete->RowCount ?>_t101_daf_kelas_sekolah_id" class="t101_daf_kelas_sekolah_id">
<span<?php echo $t101_daf_kelas_delete->sekolah_id->viewAttributes() ?>><?php echo $t101_daf_kelas_delete->sekolah_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t101_daf_kelas_delete->kelas_id->Visible) { // kelas_id ?>
		<td <?php echo $t101_daf_kelas_delete->kelas_id->cellAttributes() ?>>
<span id="el<?php echo $t101_daf_kelas_delete->RowCount ?>_t101_daf_kelas_kelas_id" class="t101_daf_kelas_kelas_id">
<span<?php echo $t101_daf_kelas_delete->kelas_id->viewAttributes() ?>><?php echo $t101_daf_kelas_delete->kelas_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$t101_daf_kelas_delete->Recordset->moveNext();
}
$t101_daf_kelas_delete->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t101_daf_kelas_delete->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$t101_daf_kelas_delete->showPageFooter();
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
$t101_daf_kelas_delete->terminate();
?>