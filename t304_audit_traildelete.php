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
$t304_audit_trail_delete = new t304_audit_trail_delete();

// Run the page
$t304_audit_trail_delete->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t304_audit_trail_delete->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft304_audit_traildelete, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "delete";
	ft304_audit_traildelete = currentForm = new ew.Form("ft304_audit_traildelete", "delete");
	loadjs.done("ft304_audit_traildelete");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t304_audit_trail_delete->showPageHeader(); ?>
<?php
$t304_audit_trail_delete->showMessage();
?>
<form name="ft304_audit_traildelete" id="ft304_audit_traildelete" class="form-inline ew-form ew-delete-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t304_audit_trail">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($t304_audit_trail_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode(Config("COMPOSITE_KEY_SEPARATOR"), $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<table class="table ew-table">
	<thead>
	<tr class="ew-table-header">
<?php if ($t304_audit_trail_delete->id->Visible) { // id ?>
		<th class="<?php echo $t304_audit_trail_delete->id->headerCellClass() ?>"><span id="elh_t304_audit_trail_id" class="t304_audit_trail_id"><?php echo $t304_audit_trail_delete->id->caption() ?></span></th>
<?php } ?>
<?php if ($t304_audit_trail_delete->datetime->Visible) { // datetime ?>
		<th class="<?php echo $t304_audit_trail_delete->datetime->headerCellClass() ?>"><span id="elh_t304_audit_trail_datetime" class="t304_audit_trail_datetime"><?php echo $t304_audit_trail_delete->datetime->caption() ?></span></th>
<?php } ?>
<?php if ($t304_audit_trail_delete->script->Visible) { // script ?>
		<th class="<?php echo $t304_audit_trail_delete->script->headerCellClass() ?>"><span id="elh_t304_audit_trail_script" class="t304_audit_trail_script"><?php echo $t304_audit_trail_delete->script->caption() ?></span></th>
<?php } ?>
<?php if ($t304_audit_trail_delete->user->Visible) { // user ?>
		<th class="<?php echo $t304_audit_trail_delete->user->headerCellClass() ?>"><span id="elh_t304_audit_trail_user" class="t304_audit_trail_user"><?php echo $t304_audit_trail_delete->user->caption() ?></span></th>
<?php } ?>
<?php if ($t304_audit_trail_delete->_action->Visible) { // action ?>
		<th class="<?php echo $t304_audit_trail_delete->_action->headerCellClass() ?>"><span id="elh_t304_audit_trail__action" class="t304_audit_trail__action"><?php echo $t304_audit_trail_delete->_action->caption() ?></span></th>
<?php } ?>
<?php if ($t304_audit_trail_delete->_table->Visible) { // table ?>
		<th class="<?php echo $t304_audit_trail_delete->_table->headerCellClass() ?>"><span id="elh_t304_audit_trail__table" class="t304_audit_trail__table"><?php echo $t304_audit_trail_delete->_table->caption() ?></span></th>
<?php } ?>
<?php if ($t304_audit_trail_delete->field->Visible) { // field ?>
		<th class="<?php echo $t304_audit_trail_delete->field->headerCellClass() ?>"><span id="elh_t304_audit_trail_field" class="t304_audit_trail_field"><?php echo $t304_audit_trail_delete->field->caption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$t304_audit_trail_delete->RecordCount = 0;
$i = 0;
while (!$t304_audit_trail_delete->Recordset->EOF) {
	$t304_audit_trail_delete->RecordCount++;
	$t304_audit_trail_delete->RowCount++;

	// Set row properties
	$t304_audit_trail->resetAttributes();
	$t304_audit_trail->RowType = ROWTYPE_VIEW; // View

	// Get the field contents
	$t304_audit_trail_delete->loadRowValues($t304_audit_trail_delete->Recordset);

	// Render row
	$t304_audit_trail_delete->renderRow();
?>
	<tr <?php echo $t304_audit_trail->rowAttributes() ?>>
<?php if ($t304_audit_trail_delete->id->Visible) { // id ?>
		<td <?php echo $t304_audit_trail_delete->id->cellAttributes() ?>>
<span id="el<?php echo $t304_audit_trail_delete->RowCount ?>_t304_audit_trail_id" class="t304_audit_trail_id">
<span<?php echo $t304_audit_trail_delete->id->viewAttributes() ?>><?php echo $t304_audit_trail_delete->id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t304_audit_trail_delete->datetime->Visible) { // datetime ?>
		<td <?php echo $t304_audit_trail_delete->datetime->cellAttributes() ?>>
<span id="el<?php echo $t304_audit_trail_delete->RowCount ?>_t304_audit_trail_datetime" class="t304_audit_trail_datetime">
<span<?php echo $t304_audit_trail_delete->datetime->viewAttributes() ?>><?php echo $t304_audit_trail_delete->datetime->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t304_audit_trail_delete->script->Visible) { // script ?>
		<td <?php echo $t304_audit_trail_delete->script->cellAttributes() ?>>
<span id="el<?php echo $t304_audit_trail_delete->RowCount ?>_t304_audit_trail_script" class="t304_audit_trail_script">
<span<?php echo $t304_audit_trail_delete->script->viewAttributes() ?>><?php echo $t304_audit_trail_delete->script->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t304_audit_trail_delete->user->Visible) { // user ?>
		<td <?php echo $t304_audit_trail_delete->user->cellAttributes() ?>>
<span id="el<?php echo $t304_audit_trail_delete->RowCount ?>_t304_audit_trail_user" class="t304_audit_trail_user">
<span<?php echo $t304_audit_trail_delete->user->viewAttributes() ?>><?php echo $t304_audit_trail_delete->user->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t304_audit_trail_delete->_action->Visible) { // action ?>
		<td <?php echo $t304_audit_trail_delete->_action->cellAttributes() ?>>
<span id="el<?php echo $t304_audit_trail_delete->RowCount ?>_t304_audit_trail__action" class="t304_audit_trail__action">
<span<?php echo $t304_audit_trail_delete->_action->viewAttributes() ?>><?php echo $t304_audit_trail_delete->_action->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t304_audit_trail_delete->_table->Visible) { // table ?>
		<td <?php echo $t304_audit_trail_delete->_table->cellAttributes() ?>>
<span id="el<?php echo $t304_audit_trail_delete->RowCount ?>_t304_audit_trail__table" class="t304_audit_trail__table">
<span<?php echo $t304_audit_trail_delete->_table->viewAttributes() ?>><?php echo $t304_audit_trail_delete->_table->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t304_audit_trail_delete->field->Visible) { // field ?>
		<td <?php echo $t304_audit_trail_delete->field->cellAttributes() ?>>
<span id="el<?php echo $t304_audit_trail_delete->RowCount ?>_t304_audit_trail_field" class="t304_audit_trail_field">
<span<?php echo $t304_audit_trail_delete->field->viewAttributes() ?>><?php echo $t304_audit_trail_delete->field->getViewValue() ?></span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$t304_audit_trail_delete->Recordset->moveNext();
}
$t304_audit_trail_delete->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t304_audit_trail_delete->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$t304_audit_trail_delete->showPageFooter();
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
$t304_audit_trail_delete->terminate();
?>