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
$t005_iuran_delete = new t005_iuran_delete();

// Run the page
$t005_iuran_delete->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t005_iuran_delete->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft005_iurandelete, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "delete";
	ft005_iurandelete = currentForm = new ew.Form("ft005_iurandelete", "delete");
	loadjs.done("ft005_iurandelete");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t005_iuran_delete->showPageHeader(); ?>
<?php
$t005_iuran_delete->showMessage();
?>
<form name="ft005_iurandelete" id="ft005_iurandelete" class="form-inline ew-form ew-delete-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t005_iuran">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($t005_iuran_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode(Config("COMPOSITE_KEY_SEPARATOR"), $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<table class="table ew-table">
	<thead>
	<tr class="ew-table-header">
<?php if ($t005_iuran_delete->Nama->Visible) { // Nama ?>
		<th class="<?php echo $t005_iuran_delete->Nama->headerCellClass() ?>"><span id="elh_t005_iuran_Nama" class="t005_iuran_Nama"><?php echo $t005_iuran_delete->Nama->caption() ?></span></th>
<?php } ?>
<?php if ($t005_iuran_delete->Jenis->Visible) { // Jenis ?>
		<th class="<?php echo $t005_iuran_delete->Jenis->headerCellClass() ?>"><span id="elh_t005_iuran_Jenis" class="t005_iuran_Jenis"><?php echo $t005_iuran_delete->Jenis->caption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$t005_iuran_delete->RecordCount = 0;
$i = 0;
while (!$t005_iuran_delete->Recordset->EOF) {
	$t005_iuran_delete->RecordCount++;
	$t005_iuran_delete->RowCount++;

	// Set row properties
	$t005_iuran->resetAttributes();
	$t005_iuran->RowType = ROWTYPE_VIEW; // View

	// Get the field contents
	$t005_iuran_delete->loadRowValues($t005_iuran_delete->Recordset);

	// Render row
	$t005_iuran_delete->renderRow();
?>
	<tr <?php echo $t005_iuran->rowAttributes() ?>>
<?php if ($t005_iuran_delete->Nama->Visible) { // Nama ?>
		<td <?php echo $t005_iuran_delete->Nama->cellAttributes() ?>>
<span id="el<?php echo $t005_iuran_delete->RowCount ?>_t005_iuran_Nama" class="t005_iuran_Nama">
<span<?php echo $t005_iuran_delete->Nama->viewAttributes() ?>><?php echo $t005_iuran_delete->Nama->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t005_iuran_delete->Jenis->Visible) { // Jenis ?>
		<td <?php echo $t005_iuran_delete->Jenis->cellAttributes() ?>>
<span id="el<?php echo $t005_iuran_delete->RowCount ?>_t005_iuran_Jenis" class="t005_iuran_Jenis">
<span<?php echo $t005_iuran_delete->Jenis->viewAttributes() ?>><?php echo $t005_iuran_delete->Jenis->getViewValue() ?></span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$t005_iuran_delete->Recordset->moveNext();
}
$t005_iuran_delete->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t005_iuran_delete->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$t005_iuran_delete->showPageFooter();
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
$t005_iuran_delete->terminate();
?>