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
$t002_sekolah_delete = new t002_sekolah_delete();

// Run the page
$t002_sekolah_delete->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t002_sekolah_delete->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft002_sekolahdelete, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "delete";
	ft002_sekolahdelete = currentForm = new ew.Form("ft002_sekolahdelete", "delete");
	loadjs.done("ft002_sekolahdelete");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t002_sekolah_delete->showPageHeader(); ?>
<?php
$t002_sekolah_delete->showMessage();
?>
<form name="ft002_sekolahdelete" id="ft002_sekolahdelete" class="form-inline ew-form ew-delete-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t002_sekolah">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($t002_sekolah_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode(Config("COMPOSITE_KEY_SEPARATOR"), $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<table class="table ew-table">
	<thead>
	<tr class="ew-table-header">
<?php if ($t002_sekolah_delete->Nama->Visible) { // Nama ?>
		<th class="<?php echo $t002_sekolah_delete->Nama->headerCellClass() ?>"><span id="elh_t002_sekolah_Nama" class="t002_sekolah_Nama"><?php echo $t002_sekolah_delete->Nama->caption() ?></span></th>
<?php } ?>
<?php if ($t002_sekolah_delete->Alamat->Visible) { // Alamat ?>
		<th class="<?php echo $t002_sekolah_delete->Alamat->headerCellClass() ?>"><span id="elh_t002_sekolah_Alamat" class="t002_sekolah_Alamat"><?php echo $t002_sekolah_delete->Alamat->caption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$t002_sekolah_delete->RecordCount = 0;
$i = 0;
while (!$t002_sekolah_delete->Recordset->EOF) {
	$t002_sekolah_delete->RecordCount++;
	$t002_sekolah_delete->RowCount++;

	// Set row properties
	$t002_sekolah->resetAttributes();
	$t002_sekolah->RowType = ROWTYPE_VIEW; // View

	// Get the field contents
	$t002_sekolah_delete->loadRowValues($t002_sekolah_delete->Recordset);

	// Render row
	$t002_sekolah_delete->renderRow();
?>
	<tr <?php echo $t002_sekolah->rowAttributes() ?>>
<?php if ($t002_sekolah_delete->Nama->Visible) { // Nama ?>
		<td <?php echo $t002_sekolah_delete->Nama->cellAttributes() ?>>
<span id="el<?php echo $t002_sekolah_delete->RowCount ?>_t002_sekolah_Nama" class="t002_sekolah_Nama">
<span<?php echo $t002_sekolah_delete->Nama->viewAttributes() ?>><?php echo $t002_sekolah_delete->Nama->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t002_sekolah_delete->Alamat->Visible) { // Alamat ?>
		<td <?php echo $t002_sekolah_delete->Alamat->cellAttributes() ?>>
<span id="el<?php echo $t002_sekolah_delete->RowCount ?>_t002_sekolah_Alamat" class="t002_sekolah_Alamat">
<span<?php echo $t002_sekolah_delete->Alamat->viewAttributes() ?>><?php echo $t002_sekolah_delete->Alamat->getViewValue() ?></span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$t002_sekolah_delete->Recordset->moveNext();
}
$t002_sekolah_delete->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t002_sekolah_delete->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$t002_sekolah_delete->showPageFooter();
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
$t002_sekolah_delete->terminate();
?>