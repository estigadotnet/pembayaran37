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
$t102_daf_kelas_siswa_list = new t102_daf_kelas_siswa_list();

// Run the page
$t102_daf_kelas_siswa_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t102_daf_kelas_siswa_list->Page_Render();
?>
<?php include_once "header.php"; ?>
<?php if (!$t102_daf_kelas_siswa_list->isExport()) { ?>
<script>
var ft102_daf_kelas_siswalist, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "list";
	ft102_daf_kelas_siswalist = currentForm = new ew.Form("ft102_daf_kelas_siswalist", "list");
	ft102_daf_kelas_siswalist.formKeyCountName = '<?php echo $t102_daf_kelas_siswa_list->FormKeyCountName ?>';

	// Validate form
	ft102_daf_kelas_siswalist.validate = function() {
		if (!this.validateRequired)
			return true; // Ignore validation
		var $ = jQuery, fobj = this.getForm(), $fobj = $(fobj);
		if ($fobj.find("#confirm").val() == "F")
			return true;
		var elm, felm, uelm, addcnt = 0;
		var $k = $fobj.find("#" + this.formKeyCountName); // Get key_count
		var rowcnt = ($k[0]) ? parseInt($k.val(), 10) : 1;
		var startcnt = (rowcnt == 0) ? 0 : 1; // Check rowcnt == 0 => Inline-Add
		var gridinsert = ["insert", "gridinsert"].includes($fobj.find("#action").val()) && $k[0];
		for (var i = startcnt; i <= rowcnt; i++) {
			var infix = ($k[0]) ? String(i) : "";
			$fobj.data("rowindex", infix);
			var checkrow = (gridinsert) ? !this.emptyRow(infix) : true;
			if (checkrow) {
				addcnt++;
			<?php if ($t102_daf_kelas_siswa_list->siswa_id->Required) { ?>
				elm = this.getElements("x" + infix + "_siswa_id");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t102_daf_kelas_siswa_list->siswa_id->caption(), $t102_daf_kelas_siswa_list->siswa_id->RequiredErrorMessage)) ?>");
			<?php } ?>

				// Call Form_CustomValidate event
				if (!this.Form_CustomValidate(fobj))
					return false;
			} // End Grid Add checking
		}
		if (gridinsert && addcnt == 0) { // No row added
			ew.alert(ew.language.phrase("NoAddRecord"));
			return false;
		}
		return true;
	}

	// Check empty row
	ft102_daf_kelas_siswalist.emptyRow = function(infix) {
		var fobj = this._form;
		if (ew.valueChanged(fobj, infix, "siswa_id", false)) return false;
		return true;
	}

	// Form_CustomValidate
	ft102_daf_kelas_siswalist.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	ft102_daf_kelas_siswalist.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	ft102_daf_kelas_siswalist.lists["x_siswa_id"] = <?php echo $t102_daf_kelas_siswa_list->siswa_id->Lookup->toClientList($t102_daf_kelas_siswa_list) ?>;
	ft102_daf_kelas_siswalist.lists["x_siswa_id"].options = <?php echo JsonEncode($t102_daf_kelas_siswa_list->siswa_id->lookupOptions()) ?>;
	loadjs.done("ft102_daf_kelas_siswalist");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php } ?>
<?php if (!$t102_daf_kelas_siswa_list->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($t102_daf_kelas_siswa_list->TotalRecords > 0 && $t102_daf_kelas_siswa_list->ExportOptions->visible()) { ?>
<?php $t102_daf_kelas_siswa_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($t102_daf_kelas_siswa_list->ImportOptions->visible()) { ?>
<?php $t102_daf_kelas_siswa_list->ImportOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if (!$t102_daf_kelas_siswa_list->isExport() || Config("EXPORT_MASTER_RECORD") && $t102_daf_kelas_siswa_list->isExport("print")) { ?>
<?php
if ($t102_daf_kelas_siswa_list->DbMasterFilter != "" && $t102_daf_kelas_siswa->getCurrentMasterTable() == "t101_daf_kelas") {
	if ($t102_daf_kelas_siswa_list->MasterRecordExists) {
		include_once "t101_daf_kelasmaster.php";
	}
}
?>
<?php } ?>
<?php
$t102_daf_kelas_siswa_list->renderOtherOptions();
?>
<?php $t102_daf_kelas_siswa_list->showPageHeader(); ?>
<?php
$t102_daf_kelas_siswa_list->showMessage();
?>
<?php if ($t102_daf_kelas_siswa_list->TotalRecords > 0 || $t102_daf_kelas_siswa->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t102_daf_kelas_siswa_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t102_daf_kelas_siswa">
<?php if (!$t102_daf_kelas_siswa_list->isExport()) { ?>
<div class="card-header ew-grid-upper-panel">
<?php if (!$t102_daf_kelas_siswa_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $t102_daf_kelas_siswa_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t102_daf_kelas_siswa_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
<form name="ft102_daf_kelas_siswalist" id="ft102_daf_kelas_siswalist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t102_daf_kelas_siswa">
<?php if ($t102_daf_kelas_siswa->getCurrentMasterTable() == "t101_daf_kelas" && $t102_daf_kelas_siswa->CurrentAction) { ?>
<input type="hidden" name="<?php echo Config("TABLE_SHOW_MASTER") ?>" value="t101_daf_kelas">
<input type="hidden" name="fk_id" value="<?php echo $t102_daf_kelas_siswa_list->daf_kelas_id->getSessionValue() ?>">
<?php } ?>
<div id="gmp_t102_daf_kelas_siswa" class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<?php if ($t102_daf_kelas_siswa_list->TotalRecords > 0 || $t102_daf_kelas_siswa_list->isGridEdit()) { ?>
<table id="tbl_t102_daf_kelas_siswalist" class="table ew-table"><!-- .ew-table -->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t102_daf_kelas_siswa->RowType = ROWTYPE_HEADER;

// Render list options
$t102_daf_kelas_siswa_list->renderListOptions();

// Render list options (header, left)
$t102_daf_kelas_siswa_list->ListOptions->render("header", "left");
?>
<?php if ($t102_daf_kelas_siswa_list->siswa_id->Visible) { // siswa_id ?>
	<?php if ($t102_daf_kelas_siswa_list->SortUrl($t102_daf_kelas_siswa_list->siswa_id) == "") { ?>
		<th data-name="siswa_id" class="<?php echo $t102_daf_kelas_siswa_list->siswa_id->headerCellClass() ?>"><div id="elh_t102_daf_kelas_siswa_siswa_id" class="t102_daf_kelas_siswa_siswa_id"><div class="ew-table-header-caption"><?php echo $t102_daf_kelas_siswa_list->siswa_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="siswa_id" class="<?php echo $t102_daf_kelas_siswa_list->siswa_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t102_daf_kelas_siswa_list->SortUrl($t102_daf_kelas_siswa_list->siswa_id) ?>', 2);"><div id="elh_t102_daf_kelas_siswa_siswa_id" class="t102_daf_kelas_siswa_siswa_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t102_daf_kelas_siswa_list->siswa_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t102_daf_kelas_siswa_list->siswa_id->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t102_daf_kelas_siswa_list->siswa_id->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t102_daf_kelas_siswa_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($t102_daf_kelas_siswa_list->ExportAll && $t102_daf_kelas_siswa_list->isExport()) {
	$t102_daf_kelas_siswa_list->StopRecord = $t102_daf_kelas_siswa_list->TotalRecords;
} else {

	// Set the last record to display
	if ($t102_daf_kelas_siswa_list->TotalRecords > $t102_daf_kelas_siswa_list->StartRecord + $t102_daf_kelas_siswa_list->DisplayRecords - 1)
		$t102_daf_kelas_siswa_list->StopRecord = $t102_daf_kelas_siswa_list->StartRecord + $t102_daf_kelas_siswa_list->DisplayRecords - 1;
	else
		$t102_daf_kelas_siswa_list->StopRecord = $t102_daf_kelas_siswa_list->TotalRecords;
}

// Restore number of post back records
if ($CurrentForm && ($t102_daf_kelas_siswa->isConfirm() || $t102_daf_kelas_siswa_list->EventCancelled)) {
	$CurrentForm->Index = -1;
	if ($CurrentForm->hasValue($t102_daf_kelas_siswa_list->FormKeyCountName) && ($t102_daf_kelas_siswa_list->isGridAdd() || $t102_daf_kelas_siswa_list->isGridEdit() || $t102_daf_kelas_siswa->isConfirm())) {
		$t102_daf_kelas_siswa_list->KeyCount = $CurrentForm->getValue($t102_daf_kelas_siswa_list->FormKeyCountName);
		$t102_daf_kelas_siswa_list->StopRecord = $t102_daf_kelas_siswa_list->StartRecord + $t102_daf_kelas_siswa_list->KeyCount - 1;
	}
}
$t102_daf_kelas_siswa_list->RecordCount = $t102_daf_kelas_siswa_list->StartRecord - 1;
if ($t102_daf_kelas_siswa_list->Recordset && !$t102_daf_kelas_siswa_list->Recordset->EOF) {
	$t102_daf_kelas_siswa_list->Recordset->moveFirst();
	$selectLimit = $t102_daf_kelas_siswa_list->UseSelectLimit;
	if (!$selectLimit && $t102_daf_kelas_siswa_list->StartRecord > 1)
		$t102_daf_kelas_siswa_list->Recordset->move($t102_daf_kelas_siswa_list->StartRecord - 1);
} elseif (!$t102_daf_kelas_siswa->AllowAddDeleteRow && $t102_daf_kelas_siswa_list->StopRecord == 0) {
	$t102_daf_kelas_siswa_list->StopRecord = $t102_daf_kelas_siswa->GridAddRowCount;
}

// Initialize aggregate
$t102_daf_kelas_siswa->RowType = ROWTYPE_AGGREGATEINIT;
$t102_daf_kelas_siswa->resetAttributes();
$t102_daf_kelas_siswa_list->renderRow();
if ($t102_daf_kelas_siswa_list->isGridAdd())
	$t102_daf_kelas_siswa_list->RowIndex = 0;
if ($t102_daf_kelas_siswa_list->isGridEdit())
	$t102_daf_kelas_siswa_list->RowIndex = 0;
while ($t102_daf_kelas_siswa_list->RecordCount < $t102_daf_kelas_siswa_list->StopRecord) {
	$t102_daf_kelas_siswa_list->RecordCount++;
	if ($t102_daf_kelas_siswa_list->RecordCount >= $t102_daf_kelas_siswa_list->StartRecord) {
		$t102_daf_kelas_siswa_list->RowCount++;
		if ($t102_daf_kelas_siswa_list->isGridAdd() || $t102_daf_kelas_siswa_list->isGridEdit() || $t102_daf_kelas_siswa->isConfirm()) {
			$t102_daf_kelas_siswa_list->RowIndex++;
			$CurrentForm->Index = $t102_daf_kelas_siswa_list->RowIndex;
			if ($CurrentForm->hasValue($t102_daf_kelas_siswa_list->FormActionName) && ($t102_daf_kelas_siswa->isConfirm() || $t102_daf_kelas_siswa_list->EventCancelled))
				$t102_daf_kelas_siswa_list->RowAction = strval($CurrentForm->getValue($t102_daf_kelas_siswa_list->FormActionName));
			elseif ($t102_daf_kelas_siswa_list->isGridAdd())
				$t102_daf_kelas_siswa_list->RowAction = "insert";
			else
				$t102_daf_kelas_siswa_list->RowAction = "";
		}

		// Set up key count
		$t102_daf_kelas_siswa_list->KeyCount = $t102_daf_kelas_siswa_list->RowIndex;

		// Init row class and style
		$t102_daf_kelas_siswa->resetAttributes();
		$t102_daf_kelas_siswa->CssClass = "";
		if ($t102_daf_kelas_siswa_list->isGridAdd()) {
			$t102_daf_kelas_siswa_list->loadRowValues(); // Load default values
		} else {
			$t102_daf_kelas_siswa_list->loadRowValues($t102_daf_kelas_siswa_list->Recordset); // Load row values
		}
		$t102_daf_kelas_siswa->RowType = ROWTYPE_VIEW; // Render view
		if ($t102_daf_kelas_siswa_list->isGridAdd()) // Grid add
			$t102_daf_kelas_siswa->RowType = ROWTYPE_ADD; // Render add
		if ($t102_daf_kelas_siswa_list->isGridAdd() && $t102_daf_kelas_siswa->EventCancelled && !$CurrentForm->hasValue("k_blankrow")) // Insert failed
			$t102_daf_kelas_siswa_list->restoreCurrentRowFormValues($t102_daf_kelas_siswa_list->RowIndex); // Restore form values
		if ($t102_daf_kelas_siswa_list->isGridEdit()) { // Grid edit
			if ($t102_daf_kelas_siswa->EventCancelled)
				$t102_daf_kelas_siswa_list->restoreCurrentRowFormValues($t102_daf_kelas_siswa_list->RowIndex); // Restore form values
			if ($t102_daf_kelas_siswa_list->RowAction == "insert")
				$t102_daf_kelas_siswa->RowType = ROWTYPE_ADD; // Render add
			else
				$t102_daf_kelas_siswa->RowType = ROWTYPE_EDIT; // Render edit
		}
		if ($t102_daf_kelas_siswa_list->isGridEdit() && ($t102_daf_kelas_siswa->RowType == ROWTYPE_EDIT || $t102_daf_kelas_siswa->RowType == ROWTYPE_ADD) && $t102_daf_kelas_siswa->EventCancelled) // Update failed
			$t102_daf_kelas_siswa_list->restoreCurrentRowFormValues($t102_daf_kelas_siswa_list->RowIndex); // Restore form values
		if ($t102_daf_kelas_siswa->RowType == ROWTYPE_EDIT) // Edit row
			$t102_daf_kelas_siswa_list->EditRowCount++;

		// Set up row id / data-rowindex
		$t102_daf_kelas_siswa->RowAttrs->merge(["data-rowindex" => $t102_daf_kelas_siswa_list->RowCount, "id" => "r" . $t102_daf_kelas_siswa_list->RowCount . "_t102_daf_kelas_siswa", "data-rowtype" => $t102_daf_kelas_siswa->RowType]);

		// Render row
		$t102_daf_kelas_siswa_list->renderRow();

		// Render list options
		$t102_daf_kelas_siswa_list->renderListOptions();

		// Skip delete row / empty row for confirm page
		if ($t102_daf_kelas_siswa_list->RowAction != "delete" && $t102_daf_kelas_siswa_list->RowAction != "insertdelete" && !($t102_daf_kelas_siswa_list->RowAction == "insert" && $t102_daf_kelas_siswa->isConfirm() && $t102_daf_kelas_siswa_list->emptyRow())) {
?>
	<tr <?php echo $t102_daf_kelas_siswa->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t102_daf_kelas_siswa_list->ListOptions->render("body", "left", $t102_daf_kelas_siswa_list->RowCount);
?>
	<?php if ($t102_daf_kelas_siswa_list->siswa_id->Visible) { // siswa_id ?>
		<td data-name="siswa_id" <?php echo $t102_daf_kelas_siswa_list->siswa_id->cellAttributes() ?>>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t102_daf_kelas_siswa_list->RowCount ?>_t102_daf_kelas_siswa_siswa_id" class="form-group">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id"><?php echo EmptyValue(strval($t102_daf_kelas_siswa_list->siswa_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t102_daf_kelas_siswa_list->siswa_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t102_daf_kelas_siswa_list->siswa_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t102_daf_kelas_siswa_list->siswa_id->ReadOnly || $t102_daf_kelas_siswa_list->siswa_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t102_daf_kelas_siswa_list->siswa_id->Lookup->getParamTag($t102_daf_kelas_siswa_list, "p_x" . $t102_daf_kelas_siswa_list->RowIndex . "_siswa_id") ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t102_daf_kelas_siswa_list->siswa_id->displayValueSeparatorAttribute() ?>" name="x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id" id="x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id" value="<?php echo $t102_daf_kelas_siswa_list->siswa_id->CurrentValue ?>"<?php echo $t102_daf_kelas_siswa_list->siswa_id->editAttributes() ?>>
</span>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="o<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id" id="o<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa_list->siswa_id->OldValue) ?>">
<?php } ?>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t102_daf_kelas_siswa_list->RowCount ?>_t102_daf_kelas_siswa_siswa_id" class="form-group">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id"><?php echo EmptyValue(strval($t102_daf_kelas_siswa_list->siswa_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t102_daf_kelas_siswa_list->siswa_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t102_daf_kelas_siswa_list->siswa_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t102_daf_kelas_siswa_list->siswa_id->ReadOnly || $t102_daf_kelas_siswa_list->siswa_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t102_daf_kelas_siswa_list->siswa_id->Lookup->getParamTag($t102_daf_kelas_siswa_list, "p_x" . $t102_daf_kelas_siswa_list->RowIndex . "_siswa_id") ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t102_daf_kelas_siswa_list->siswa_id->displayValueSeparatorAttribute() ?>" name="x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id" id="x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id" value="<?php echo $t102_daf_kelas_siswa_list->siswa_id->CurrentValue ?>"<?php echo $t102_daf_kelas_siswa_list->siswa_id->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t102_daf_kelas_siswa_list->RowCount ?>_t102_daf_kelas_siswa_siswa_id">
<span<?php echo $t102_daf_kelas_siswa_list->siswa_id->viewAttributes() ?>><?php echo $t102_daf_kelas_siswa_list->siswa_id->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_ADD) { // Add record ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_id" name="x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_id" id="x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa_list->id->CurrentValue) ?>">
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_id" name="o<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_id" id="o<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa_list->id->OldValue) ?>">
<?php } ?>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_EDIT || $t102_daf_kelas_siswa->CurrentMode == "edit") { ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_id" name="x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_id" id="x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa_list->id->CurrentValue) ?>">
<?php } ?>
<?php

// Render list options (body, right)
$t102_daf_kelas_siswa_list->ListOptions->render("body", "right", $t102_daf_kelas_siswa_list->RowCount);
?>
	</tr>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_ADD || $t102_daf_kelas_siswa->RowType == ROWTYPE_EDIT) { ?>
<script>
loadjs.ready(["ft102_daf_kelas_siswalist", "load"], function() {
	ft102_daf_kelas_siswalist.updateLists(<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>);
});
</script>
<?php } ?>
<?php
	}
	} // End delete row checking
	if (!$t102_daf_kelas_siswa_list->isGridAdd())
		if (!$t102_daf_kelas_siswa_list->Recordset->EOF)
			$t102_daf_kelas_siswa_list->Recordset->moveNext();
}
?>
<?php
	if ($t102_daf_kelas_siswa_list->isGridAdd() || $t102_daf_kelas_siswa_list->isGridEdit()) {
		$t102_daf_kelas_siswa_list->RowIndex = '$rowindex$';
		$t102_daf_kelas_siswa_list->loadRowValues();

		// Set row properties
		$t102_daf_kelas_siswa->resetAttributes();
		$t102_daf_kelas_siswa->RowAttrs->merge(["data-rowindex" => $t102_daf_kelas_siswa_list->RowIndex, "id" => "r0_t102_daf_kelas_siswa", "data-rowtype" => ROWTYPE_ADD]);
		$t102_daf_kelas_siswa->RowAttrs->appendClass("ew-template");
		$t102_daf_kelas_siswa->RowType = ROWTYPE_ADD;

		// Render row
		$t102_daf_kelas_siswa_list->renderRow();

		// Render list options
		$t102_daf_kelas_siswa_list->renderListOptions();
		$t102_daf_kelas_siswa_list->StartRowCount = 0;
?>
	<tr <?php echo $t102_daf_kelas_siswa->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t102_daf_kelas_siswa_list->ListOptions->render("body", "left", $t102_daf_kelas_siswa_list->RowIndex);
?>
	<?php if ($t102_daf_kelas_siswa_list->siswa_id->Visible) { // siswa_id ?>
		<td data-name="siswa_id">
<span id="el$rowindex$_t102_daf_kelas_siswa_siswa_id" class="form-group t102_daf_kelas_siswa_siswa_id">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id"><?php echo EmptyValue(strval($t102_daf_kelas_siswa_list->siswa_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t102_daf_kelas_siswa_list->siswa_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t102_daf_kelas_siswa_list->siswa_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t102_daf_kelas_siswa_list->siswa_id->ReadOnly || $t102_daf_kelas_siswa_list->siswa_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t102_daf_kelas_siswa_list->siswa_id->Lookup->getParamTag($t102_daf_kelas_siswa_list, "p_x" . $t102_daf_kelas_siswa_list->RowIndex . "_siswa_id") ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t102_daf_kelas_siswa_list->siswa_id->displayValueSeparatorAttribute() ?>" name="x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id" id="x<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id" value="<?php echo $t102_daf_kelas_siswa_list->siswa_id->CurrentValue ?>"<?php echo $t102_daf_kelas_siswa_list->siswa_id->editAttributes() ?>>
</span>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="o<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id" id="o<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa_list->siswa_id->OldValue) ?>">
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t102_daf_kelas_siswa_list->ListOptions->render("body", "right", $t102_daf_kelas_siswa_list->RowIndex);
?>
<script>
loadjs.ready(["ft102_daf_kelas_siswalist", "load"], function() {
	ft102_daf_kelas_siswalist.updateLists(<?php echo $t102_daf_kelas_siswa_list->RowIndex ?>);
});
</script>
	</tr>
<?php
	}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
<?php if ($t102_daf_kelas_siswa_list->isGridAdd()) { ?>
<input type="hidden" name="action" id="action" value="gridinsert">
<input type="hidden" name="<?php echo $t102_daf_kelas_siswa_list->FormKeyCountName ?>" id="<?php echo $t102_daf_kelas_siswa_list->FormKeyCountName ?>" value="<?php echo $t102_daf_kelas_siswa_list->KeyCount ?>">
<?php echo $t102_daf_kelas_siswa_list->MultiSelectKey ?>
<?php } ?>
<?php if ($t102_daf_kelas_siswa_list->isGridEdit()) { ?>
<input type="hidden" name="action" id="action" value="gridupdate">
<input type="hidden" name="<?php echo $t102_daf_kelas_siswa_list->FormKeyCountName ?>" id="<?php echo $t102_daf_kelas_siswa_list->FormKeyCountName ?>" value="<?php echo $t102_daf_kelas_siswa_list->KeyCount ?>">
<?php echo $t102_daf_kelas_siswa_list->MultiSelectKey ?>
<?php } ?>
<?php if (!$t102_daf_kelas_siswa->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t102_daf_kelas_siswa_list->Recordset)
	$t102_daf_kelas_siswa_list->Recordset->Close();
?>
<?php if (!$t102_daf_kelas_siswa_list->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$t102_daf_kelas_siswa_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $t102_daf_kelas_siswa_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t102_daf_kelas_siswa_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t102_daf_kelas_siswa_list->TotalRecords == 0 && !$t102_daf_kelas_siswa->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t102_daf_kelas_siswa_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t102_daf_kelas_siswa_list->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<?php if (!$t102_daf_kelas_siswa_list->isExport()) { ?>
<script>
loadjs.ready("load", function() {

	// Startup script
	// Write your table-specific startup script here
	// console.log("page loaded");

});
</script>
<?php } ?>
<?php include_once "footer.php"; ?>
<?php
$t102_daf_kelas_siswa_list->terminate();
?>