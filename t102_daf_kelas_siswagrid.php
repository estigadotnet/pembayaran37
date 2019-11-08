<?php
namespace PHPMaker2020\project1;

// Write header
WriteHeader(FALSE);

// Create page object
if (!isset($t102_daf_kelas_siswa_grid))
	$t102_daf_kelas_siswa_grid = new t102_daf_kelas_siswa_grid();

// Run the page
$t102_daf_kelas_siswa_grid->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t102_daf_kelas_siswa_grid->Page_Render();
?>
<?php if (!$t102_daf_kelas_siswa_grid->isExport()) { ?>
<script>
var ft102_daf_kelas_siswagrid, currentPageID;
loadjs.ready("head", function() {

	// Form object
	ft102_daf_kelas_siswagrid = new ew.Form("ft102_daf_kelas_siswagrid", "grid");
	ft102_daf_kelas_siswagrid.formKeyCountName = '<?php echo $t102_daf_kelas_siswa_grid->FormKeyCountName ?>';

	// Validate form
	ft102_daf_kelas_siswagrid.validate = function() {
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
			<?php if ($t102_daf_kelas_siswa_grid->siswa_id->Required) { ?>
				elm = this.getElements("x" + infix + "_siswa_id");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t102_daf_kelas_siswa_grid->siswa_id->caption(), $t102_daf_kelas_siswa_grid->siswa_id->RequiredErrorMessage)) ?>");
			<?php } ?>

				// Call Form_CustomValidate event
				if (!this.Form_CustomValidate(fobj))
					return false;
			} // End Grid Add checking
		}
		return true;
	}

	// Check empty row
	ft102_daf_kelas_siswagrid.emptyRow = function(infix) {
		var fobj = this._form;
		if (ew.valueChanged(fobj, infix, "siswa_id", false)) return false;
		return true;
	}

	// Form_CustomValidate
	ft102_daf_kelas_siswagrid.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	ft102_daf_kelas_siswagrid.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	ft102_daf_kelas_siswagrid.lists["x_siswa_id"] = <?php echo $t102_daf_kelas_siswa_grid->siswa_id->Lookup->toClientList($t102_daf_kelas_siswa_grid) ?>;
	ft102_daf_kelas_siswagrid.lists["x_siswa_id"].options = <?php echo JsonEncode($t102_daf_kelas_siswa_grid->siswa_id->lookupOptions()) ?>;
	loadjs.done("ft102_daf_kelas_siswagrid");
});
</script>
<?php } ?>
<?php
$t102_daf_kelas_siswa_grid->renderOtherOptions();
?>
<?php if ($t102_daf_kelas_siswa_grid->TotalRecords > 0 || $t102_daf_kelas_siswa->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t102_daf_kelas_siswa_grid->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t102_daf_kelas_siswa">
<?php if ($t102_daf_kelas_siswa_grid->ShowOtherOptions) { ?>
<div class="card-header ew-grid-upper-panel">
<?php $t102_daf_kelas_siswa_grid->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<div id="ft102_daf_kelas_siswagrid" class="ew-form ew-list-form form-inline">
<div id="gmp_t102_daf_kelas_siswa" class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<table id="tbl_t102_daf_kelas_siswagrid" class="table ew-table"><!-- .ew-table -->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t102_daf_kelas_siswa->RowType = ROWTYPE_HEADER;

// Render list options
$t102_daf_kelas_siswa_grid->renderListOptions();

// Render list options (header, left)
$t102_daf_kelas_siswa_grid->ListOptions->render("header", "left");
?>
<?php if ($t102_daf_kelas_siswa_grid->siswa_id->Visible) { // siswa_id ?>
	<?php if ($t102_daf_kelas_siswa_grid->SortUrl($t102_daf_kelas_siswa_grid->siswa_id) == "") { ?>
		<th data-name="siswa_id" class="<?php echo $t102_daf_kelas_siswa_grid->siswa_id->headerCellClass() ?>"><div id="elh_t102_daf_kelas_siswa_siswa_id" class="t102_daf_kelas_siswa_siswa_id"><div class="ew-table-header-caption"><?php echo $t102_daf_kelas_siswa_grid->siswa_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="siswa_id" class="<?php echo $t102_daf_kelas_siswa_grid->siswa_id->headerCellClass() ?>"><div><div id="elh_t102_daf_kelas_siswa_siswa_id" class="t102_daf_kelas_siswa_siswa_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t102_daf_kelas_siswa_grid->siswa_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t102_daf_kelas_siswa_grid->siswa_id->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t102_daf_kelas_siswa_grid->siswa_id->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t102_daf_kelas_siswa_grid->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
$t102_daf_kelas_siswa_grid->StartRecord = 1;
$t102_daf_kelas_siswa_grid->StopRecord = $t102_daf_kelas_siswa_grid->TotalRecords; // Show all records

// Restore number of post back records
if ($CurrentForm && ($t102_daf_kelas_siswa->isConfirm() || $t102_daf_kelas_siswa_grid->EventCancelled)) {
	$CurrentForm->Index = -1;
	if ($CurrentForm->hasValue($t102_daf_kelas_siswa_grid->FormKeyCountName) && ($t102_daf_kelas_siswa_grid->isGridAdd() || $t102_daf_kelas_siswa_grid->isGridEdit() || $t102_daf_kelas_siswa->isConfirm())) {
		$t102_daf_kelas_siswa_grid->KeyCount = $CurrentForm->getValue($t102_daf_kelas_siswa_grid->FormKeyCountName);
		$t102_daf_kelas_siswa_grid->StopRecord = $t102_daf_kelas_siswa_grid->StartRecord + $t102_daf_kelas_siswa_grid->KeyCount - 1;
	}
}
$t102_daf_kelas_siswa_grid->RecordCount = $t102_daf_kelas_siswa_grid->StartRecord - 1;
if ($t102_daf_kelas_siswa_grid->Recordset && !$t102_daf_kelas_siswa_grid->Recordset->EOF) {
	$t102_daf_kelas_siswa_grid->Recordset->moveFirst();
	$selectLimit = $t102_daf_kelas_siswa_grid->UseSelectLimit;
	if (!$selectLimit && $t102_daf_kelas_siswa_grid->StartRecord > 1)
		$t102_daf_kelas_siswa_grid->Recordset->move($t102_daf_kelas_siswa_grid->StartRecord - 1);
} elseif (!$t102_daf_kelas_siswa->AllowAddDeleteRow && $t102_daf_kelas_siswa_grid->StopRecord == 0) {
	$t102_daf_kelas_siswa_grid->StopRecord = $t102_daf_kelas_siswa->GridAddRowCount;
}

// Initialize aggregate
$t102_daf_kelas_siswa->RowType = ROWTYPE_AGGREGATEINIT;
$t102_daf_kelas_siswa->resetAttributes();
$t102_daf_kelas_siswa_grid->renderRow();
if ($t102_daf_kelas_siswa_grid->isGridAdd())
	$t102_daf_kelas_siswa_grid->RowIndex = 0;
if ($t102_daf_kelas_siswa_grid->isGridEdit())
	$t102_daf_kelas_siswa_grid->RowIndex = 0;
while ($t102_daf_kelas_siswa_grid->RecordCount < $t102_daf_kelas_siswa_grid->StopRecord) {
	$t102_daf_kelas_siswa_grid->RecordCount++;
	if ($t102_daf_kelas_siswa_grid->RecordCount >= $t102_daf_kelas_siswa_grid->StartRecord) {
		$t102_daf_kelas_siswa_grid->RowCount++;
		if ($t102_daf_kelas_siswa_grid->isGridAdd() || $t102_daf_kelas_siswa_grid->isGridEdit() || $t102_daf_kelas_siswa->isConfirm()) {
			$t102_daf_kelas_siswa_grid->RowIndex++;
			$CurrentForm->Index = $t102_daf_kelas_siswa_grid->RowIndex;
			if ($CurrentForm->hasValue($t102_daf_kelas_siswa_grid->FormActionName) && ($t102_daf_kelas_siswa->isConfirm() || $t102_daf_kelas_siswa_grid->EventCancelled))
				$t102_daf_kelas_siswa_grid->RowAction = strval($CurrentForm->getValue($t102_daf_kelas_siswa_grid->FormActionName));
			elseif ($t102_daf_kelas_siswa_grid->isGridAdd())
				$t102_daf_kelas_siswa_grid->RowAction = "insert";
			else
				$t102_daf_kelas_siswa_grid->RowAction = "";
		}

		// Set up key count
		$t102_daf_kelas_siswa_grid->KeyCount = $t102_daf_kelas_siswa_grid->RowIndex;

		// Init row class and style
		$t102_daf_kelas_siswa->resetAttributes();
		$t102_daf_kelas_siswa->CssClass = "";
		if ($t102_daf_kelas_siswa_grid->isGridAdd()) {
			if ($t102_daf_kelas_siswa->CurrentMode == "copy") {
				$t102_daf_kelas_siswa_grid->loadRowValues($t102_daf_kelas_siswa_grid->Recordset); // Load row values
				$t102_daf_kelas_siswa_grid->setRecordKey($t102_daf_kelas_siswa_grid->RowOldKey, $t102_daf_kelas_siswa_grid->Recordset); // Set old record key
			} else {
				$t102_daf_kelas_siswa_grid->loadRowValues(); // Load default values
				$t102_daf_kelas_siswa_grid->RowOldKey = ""; // Clear old key value
			}
		} else {
			$t102_daf_kelas_siswa_grid->loadRowValues($t102_daf_kelas_siswa_grid->Recordset); // Load row values
		}
		$t102_daf_kelas_siswa->RowType = ROWTYPE_VIEW; // Render view
		if ($t102_daf_kelas_siswa_grid->isGridAdd()) // Grid add
			$t102_daf_kelas_siswa->RowType = ROWTYPE_ADD; // Render add
		if ($t102_daf_kelas_siswa_grid->isGridAdd() && $t102_daf_kelas_siswa->EventCancelled && !$CurrentForm->hasValue("k_blankrow")) // Insert failed
			$t102_daf_kelas_siswa_grid->restoreCurrentRowFormValues($t102_daf_kelas_siswa_grid->RowIndex); // Restore form values
		if ($t102_daf_kelas_siswa_grid->isGridEdit()) { // Grid edit
			if ($t102_daf_kelas_siswa->EventCancelled)
				$t102_daf_kelas_siswa_grid->restoreCurrentRowFormValues($t102_daf_kelas_siswa_grid->RowIndex); // Restore form values
			if ($t102_daf_kelas_siswa_grid->RowAction == "insert")
				$t102_daf_kelas_siswa->RowType = ROWTYPE_ADD; // Render add
			else
				$t102_daf_kelas_siswa->RowType = ROWTYPE_EDIT; // Render edit
		}
		if ($t102_daf_kelas_siswa_grid->isGridEdit() && ($t102_daf_kelas_siswa->RowType == ROWTYPE_EDIT || $t102_daf_kelas_siswa->RowType == ROWTYPE_ADD) && $t102_daf_kelas_siswa->EventCancelled) // Update failed
			$t102_daf_kelas_siswa_grid->restoreCurrentRowFormValues($t102_daf_kelas_siswa_grid->RowIndex); // Restore form values
		if ($t102_daf_kelas_siswa->RowType == ROWTYPE_EDIT) // Edit row
			$t102_daf_kelas_siswa_grid->EditRowCount++;
		if ($t102_daf_kelas_siswa->isConfirm()) // Confirm row
			$t102_daf_kelas_siswa_grid->restoreCurrentRowFormValues($t102_daf_kelas_siswa_grid->RowIndex); // Restore form values

		// Set up row id / data-rowindex
		$t102_daf_kelas_siswa->RowAttrs->merge(["data-rowindex" => $t102_daf_kelas_siswa_grid->RowCount, "id" => "r" . $t102_daf_kelas_siswa_grid->RowCount . "_t102_daf_kelas_siswa", "data-rowtype" => $t102_daf_kelas_siswa->RowType]);

		// Render row
		$t102_daf_kelas_siswa_grid->renderRow();

		// Render list options
		$t102_daf_kelas_siswa_grid->renderListOptions();

		// Skip delete row / empty row for confirm page
		if ($t102_daf_kelas_siswa_grid->RowAction != "delete" && $t102_daf_kelas_siswa_grid->RowAction != "insertdelete" && !($t102_daf_kelas_siswa_grid->RowAction == "insert" && $t102_daf_kelas_siswa->isConfirm() && $t102_daf_kelas_siswa_grid->emptyRow())) {
?>
	<tr <?php echo $t102_daf_kelas_siswa->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t102_daf_kelas_siswa_grid->ListOptions->render("body", "left", $t102_daf_kelas_siswa_grid->RowCount);
?>
	<?php if ($t102_daf_kelas_siswa_grid->siswa_id->Visible) { // siswa_id ?>
		<td data-name="siswa_id" <?php echo $t102_daf_kelas_siswa_grid->siswa_id->cellAttributes() ?>>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t102_daf_kelas_siswa_grid->RowCount ?>_t102_daf_kelas_siswa_siswa_id" class="form-group">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id"><?php echo EmptyValue(strval($t102_daf_kelas_siswa_grid->siswa_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t102_daf_kelas_siswa_grid->siswa_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t102_daf_kelas_siswa_grid->siswa_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t102_daf_kelas_siswa_grid->siswa_id->ReadOnly || $t102_daf_kelas_siswa_grid->siswa_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t102_daf_kelas_siswa_grid->siswa_id->Lookup->getParamTag($t102_daf_kelas_siswa_grid, "p_x" . $t102_daf_kelas_siswa_grid->RowIndex . "_siswa_id") ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t102_daf_kelas_siswa_grid->siswa_id->displayValueSeparatorAttribute() ?>" name="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo $t102_daf_kelas_siswa_grid->siswa_id->CurrentValue ?>"<?php echo $t102_daf_kelas_siswa_grid->siswa_id->editAttributes() ?>>
</span>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa_grid->siswa_id->OldValue) ?>">
<?php } ?>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t102_daf_kelas_siswa_grid->RowCount ?>_t102_daf_kelas_siswa_siswa_id" class="form-group">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id"><?php echo EmptyValue(strval($t102_daf_kelas_siswa_grid->siswa_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t102_daf_kelas_siswa_grid->siswa_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t102_daf_kelas_siswa_grid->siswa_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t102_daf_kelas_siswa_grid->siswa_id->ReadOnly || $t102_daf_kelas_siswa_grid->siswa_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t102_daf_kelas_siswa_grid->siswa_id->Lookup->getParamTag($t102_daf_kelas_siswa_grid, "p_x" . $t102_daf_kelas_siswa_grid->RowIndex . "_siswa_id") ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t102_daf_kelas_siswa_grid->siswa_id->displayValueSeparatorAttribute() ?>" name="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo $t102_daf_kelas_siswa_grid->siswa_id->CurrentValue ?>"<?php echo $t102_daf_kelas_siswa_grid->siswa_id->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t102_daf_kelas_siswa_grid->RowCount ?>_t102_daf_kelas_siswa_siswa_id">
<span<?php echo $t102_daf_kelas_siswa_grid->siswa_id->viewAttributes() ?>><?php echo $t102_daf_kelas_siswa_grid->siswa_id->getViewValue() ?></span>
</span>
<?php if (!$t102_daf_kelas_siswa->isConfirm()) { ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa_grid->siswa_id->FormValue) ?>">
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa_grid->siswa_id->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="ft102_daf_kelas_siswagrid$x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="ft102_daf_kelas_siswagrid$x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa_grid->siswa_id->FormValue) ?>">
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="ft102_daf_kelas_siswagrid$o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="ft102_daf_kelas_siswagrid$o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa_grid->siswa_id->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_ADD) { // Add record ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_id" name="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_id" id="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa_grid->id->CurrentValue) ?>">
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_id" name="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_id" id="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa_grid->id->OldValue) ?>">
<?php } ?>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_EDIT || $t102_daf_kelas_siswa->CurrentMode == "edit") { ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_id" name="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_id" id="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa_grid->id->CurrentValue) ?>">
<?php } ?>
<?php

// Render list options (body, right)
$t102_daf_kelas_siswa_grid->ListOptions->render("body", "right", $t102_daf_kelas_siswa_grid->RowCount);
?>
	</tr>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_ADD || $t102_daf_kelas_siswa->RowType == ROWTYPE_EDIT) { ?>
<script>
loadjs.ready(["ft102_daf_kelas_siswagrid", "load"], function() {
	ft102_daf_kelas_siswagrid.updateLists(<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>);
});
</script>
<?php } ?>
<?php
	}
	} // End delete row checking
	if (!$t102_daf_kelas_siswa_grid->isGridAdd() || $t102_daf_kelas_siswa->CurrentMode == "copy")
		if (!$t102_daf_kelas_siswa_grid->Recordset->EOF)
			$t102_daf_kelas_siswa_grid->Recordset->moveNext();
}
?>
<?php
	if ($t102_daf_kelas_siswa->CurrentMode == "add" || $t102_daf_kelas_siswa->CurrentMode == "copy" || $t102_daf_kelas_siswa->CurrentMode == "edit") {
		$t102_daf_kelas_siswa_grid->RowIndex = '$rowindex$';
		$t102_daf_kelas_siswa_grid->loadRowValues();

		// Set row properties
		$t102_daf_kelas_siswa->resetAttributes();
		$t102_daf_kelas_siswa->RowAttrs->merge(["data-rowindex" => $t102_daf_kelas_siswa_grid->RowIndex, "id" => "r0_t102_daf_kelas_siswa", "data-rowtype" => ROWTYPE_ADD]);
		$t102_daf_kelas_siswa->RowAttrs->appendClass("ew-template");
		$t102_daf_kelas_siswa->RowType = ROWTYPE_ADD;

		// Render row
		$t102_daf_kelas_siswa_grid->renderRow();

		// Render list options
		$t102_daf_kelas_siswa_grid->renderListOptions();
		$t102_daf_kelas_siswa_grid->StartRowCount = 0;
?>
	<tr <?php echo $t102_daf_kelas_siswa->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t102_daf_kelas_siswa_grid->ListOptions->render("body", "left", $t102_daf_kelas_siswa_grid->RowIndex);
?>
	<?php if ($t102_daf_kelas_siswa_grid->siswa_id->Visible) { // siswa_id ?>
		<td data-name="siswa_id">
<?php if (!$t102_daf_kelas_siswa->isConfirm()) { ?>
<span id="el$rowindex$_t102_daf_kelas_siswa_siswa_id" class="form-group t102_daf_kelas_siswa_siswa_id">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id"><?php echo EmptyValue(strval($t102_daf_kelas_siswa_grid->siswa_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t102_daf_kelas_siswa_grid->siswa_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t102_daf_kelas_siswa_grid->siswa_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t102_daf_kelas_siswa_grid->siswa_id->ReadOnly || $t102_daf_kelas_siswa_grid->siswa_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t102_daf_kelas_siswa_grid->siswa_id->Lookup->getParamTag($t102_daf_kelas_siswa_grid, "p_x" . $t102_daf_kelas_siswa_grid->RowIndex . "_siswa_id") ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t102_daf_kelas_siswa_grid->siswa_id->displayValueSeparatorAttribute() ?>" name="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo $t102_daf_kelas_siswa_grid->siswa_id->CurrentValue ?>"<?php echo $t102_daf_kelas_siswa_grid->siswa_id->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_t102_daf_kelas_siswa_siswa_id" class="form-group t102_daf_kelas_siswa_siswa_id">
<span<?php echo $t102_daf_kelas_siswa_grid->siswa_id->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t102_daf_kelas_siswa_grid->siswa_id->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa_grid->siswa_id->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa_grid->siswa_id->OldValue) ?>">
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t102_daf_kelas_siswa_grid->ListOptions->render("body", "right", $t102_daf_kelas_siswa_grid->RowIndex);
?>
<script>
loadjs.ready(["ft102_daf_kelas_siswagrid", "load"], function() {
	ft102_daf_kelas_siswagrid.updateLists(<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>);
});
</script>
	</tr>
<?php
	}
?>
</tbody>
</table><!-- /.ew-table -->
</div><!-- /.ew-grid-middle-panel -->
<?php if ($t102_daf_kelas_siswa->CurrentMode == "add" || $t102_daf_kelas_siswa->CurrentMode == "copy") { ?>
<input type="hidden" name="<?php echo $t102_daf_kelas_siswa_grid->FormKeyCountName ?>" id="<?php echo $t102_daf_kelas_siswa_grid->FormKeyCountName ?>" value="<?php echo $t102_daf_kelas_siswa_grid->KeyCount ?>">
<?php echo $t102_daf_kelas_siswa_grid->MultiSelectKey ?>
<?php } ?>
<?php if ($t102_daf_kelas_siswa->CurrentMode == "edit") { ?>
<input type="hidden" name="<?php echo $t102_daf_kelas_siswa_grid->FormKeyCountName ?>" id="<?php echo $t102_daf_kelas_siswa_grid->FormKeyCountName ?>" value="<?php echo $t102_daf_kelas_siswa_grid->KeyCount ?>">
<?php echo $t102_daf_kelas_siswa_grid->MultiSelectKey ?>
<?php } ?>
<?php if ($t102_daf_kelas_siswa->CurrentMode == "") { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
<input type="hidden" name="detailpage" value="ft102_daf_kelas_siswagrid">
</div><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t102_daf_kelas_siswa_grid->Recordset)
	$t102_daf_kelas_siswa_grid->Recordset->Close();
?>
<?php if ($t102_daf_kelas_siswa_grid->ShowOtherOptions) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php $t102_daf_kelas_siswa_grid->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t102_daf_kelas_siswa_grid->TotalRecords == 0 && !$t102_daf_kelas_siswa->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t102_daf_kelas_siswa_grid->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php if (!$t102_daf_kelas_siswa_grid->isExport()) { ?>
<script>
loadjs.ready("load", function() {

	// Startup script
	// Write your table-specific startup script here
	// console.log("page loaded");

});
</script>
<?php } ?>
<?php
$t102_daf_kelas_siswa_grid->terminate();
?>