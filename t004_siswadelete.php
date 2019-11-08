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
$t004_siswa_delete = new t004_siswa_delete();

// Run the page
$t004_siswa_delete->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t004_siswa_delete->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft004_siswadelete, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "delete";
	ft004_siswadelete = currentForm = new ew.Form("ft004_siswadelete", "delete");
	loadjs.done("ft004_siswadelete");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t004_siswa_delete->showPageHeader(); ?>
<?php
$t004_siswa_delete->showMessage();
?>
<form name="ft004_siswadelete" id="ft004_siswadelete" class="form-inline ew-form ew-delete-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t004_siswa">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($t004_siswa_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode(Config("COMPOSITE_KEY_SEPARATOR"), $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<table class="table ew-table">
	<thead>
	<tr class="ew-table-header">
<?php if ($t004_siswa_delete->NomorInduk->Visible) { // NomorInduk ?>
		<th class="<?php echo $t004_siswa_delete->NomorInduk->headerCellClass() ?>"><span id="elh_t004_siswa_NomorInduk" class="t004_siswa_NomorInduk"><?php echo $t004_siswa_delete->NomorInduk->caption() ?></span></th>
<?php } ?>
<?php if ($t004_siswa_delete->Nama->Visible) { // Nama ?>
		<th class="<?php echo $t004_siswa_delete->Nama->headerCellClass() ?>"><span id="elh_t004_siswa_Nama" class="t004_siswa_Nama"><?php echo $t004_siswa_delete->Nama->caption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$t004_siswa_delete->RecordCount = 0;
$i = 0;
while (!$t004_siswa_delete->Recordset->EOF) {
	$t004_siswa_delete->RecordCount++;
	$t004_siswa_delete->RowCount++;

	// Set row properties
	$t004_siswa->resetAttributes();
	$t004_siswa->RowType = ROWTYPE_VIEW; // View

	// Get the field contents
	$t004_siswa_delete->loadRowValues($t004_siswa_delete->Recordset);

	// Render row
	$t004_siswa_delete->renderRow();
?>
	<tr <?php echo $t004_siswa->rowAttributes() ?>>
<?php if ($t004_siswa_delete->NomorInduk->Visible) { // NomorInduk ?>
		<td <?php echo $t004_siswa_delete->NomorInduk->cellAttributes() ?>>
<span id="el<?php echo $t004_siswa_delete->RowCount ?>_t004_siswa_NomorInduk" class="t004_siswa_NomorInduk">
<span<?php echo $t004_siswa_delete->NomorInduk->viewAttributes() ?>><?php echo $t004_siswa_delete->NomorInduk->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t004_siswa_delete->Nama->Visible) { // Nama ?>
		<td <?php echo $t004_siswa_delete->Nama->cellAttributes() ?>>
<span id="el<?php echo $t004_siswa_delete->RowCount ?>_t004_siswa_Nama" class="t004_siswa_Nama">
<span<?php echo $t004_siswa_delete->Nama->viewAttributes() ?>><?php echo $t004_siswa_delete->Nama->getViewValue() ?></span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$t004_siswa_delete->Recordset->moveNext();
}
$t004_siswa_delete->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t004_siswa_delete->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$t004_siswa_delete->showPageFooter();
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
$t004_siswa_delete->terminate();
?>