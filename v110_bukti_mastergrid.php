<?php
namespace PHPMaker2020\project1;

// Write header
WriteHeader(FALSE);

// Create page object
if (!isset($v110_bukti_master_grid))
	$v110_bukti_master_grid = new v110_bukti_master_grid();

// Run the page
$v110_bukti_master_grid->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$v110_bukti_master_grid->Page_Render();
?>
<?php if (!$v110_bukti_master_grid->isExport()) { ?>
<script>
var fv110_bukti_mastergrid, currentPageID;
loadjs.ready("head", function() {

	// Form object
	fv110_bukti_mastergrid = new ew.Form("fv110_bukti_mastergrid", "grid");
	fv110_bukti_mastergrid.formKeyCountName = '<?php echo $v110_bukti_master_grid->FormKeyCountName ?>';

	// Validate form
	fv110_bukti_mastergrid.validate = function() {
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
			<?php if ($v110_bukti_master_grid->periodebulan->Required) { ?>
				elm = this.getElements("x" + infix + "_periodebulan");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $v110_bukti_master_grid->periodebulan->caption(), $v110_bukti_master_grid->periodebulan->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($v110_bukti_master_grid->tglbayar->Required) { ?>
				elm = this.getElements("x" + infix + "_tglbayar");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $v110_bukti_master_grid->tglbayar->caption(), $v110_bukti_master_grid->tglbayar->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tglbayar");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($v110_bukti_master_grid->tglbayar->errorMessage()) ?>");
			<?php if ($v110_bukti_master_grid->totalbayar->Required) { ?>
				elm = this.getElements("x" + infix + "_totalbayar");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $v110_bukti_master_grid->totalbayar->caption(), $v110_bukti_master_grid->totalbayar->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_totalbayar");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($v110_bukti_master_grid->totalbayar->errorMessage()) ?>");

				// Call Form_CustomValidate event
				if (!this.Form_CustomValidate(fobj))
					return false;
			} // End Grid Add checking
		}
		return true;
	}

	// Check empty row
	fv110_bukti_mastergrid.emptyRow = function(infix) {
		var fobj = this._form;
		if (ew.valueChanged(fobj, infix, "periodebulan", false)) return false;
		if (ew.valueChanged(fobj, infix, "tglbayar", false)) return false;
		if (ew.valueChanged(fobj, infix, "totalbayar", false)) return false;
		return true;
	}

	// Form_CustomValidate
	fv110_bukti_mastergrid.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	fv110_bukti_mastergrid.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	loadjs.done("fv110_bukti_mastergrid");
});
</script>
<?php } ?>
<?php
$v110_bukti_master_grid->renderOtherOptions();
?>
<?php if ($v110_bukti_master_grid->TotalRecords > 0 || $v110_bukti_master->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($v110_bukti_master_grid->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> v110_bukti_master">
<?php if ($v110_bukti_master_grid->ShowOtherOptions) { ?>
<div class="card-header ew-grid-upper-panel">
<?php $v110_bukti_master_grid->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<div id="fv110_bukti_mastergrid" class="ew-form ew-list-form form-inline">
<div id="gmp_v110_bukti_master" class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<table id="tbl_v110_bukti_mastergrid" class="table ew-table"><!-- .ew-table -->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$v110_bukti_master->RowType = ROWTYPE_HEADER;

// Render list options
$v110_bukti_master_grid->renderListOptions();

// Render list options (header, left)
$v110_bukti_master_grid->ListOptions->render("header", "left");
?>
<?php if ($v110_bukti_master_grid->periodebulan->Visible) { // periodebulan ?>
	<?php if ($v110_bukti_master_grid->SortUrl($v110_bukti_master_grid->periodebulan) == "") { ?>
		<th data-name="periodebulan" class="<?php echo $v110_bukti_master_grid->periodebulan->headerCellClass() ?>"><div id="elh_v110_bukti_master_periodebulan" class="v110_bukti_master_periodebulan"><div class="ew-table-header-caption"><?php echo $v110_bukti_master_grid->periodebulan->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="periodebulan" class="<?php echo $v110_bukti_master_grid->periodebulan->headerCellClass() ?>"><div><div id="elh_v110_bukti_master_periodebulan" class="v110_bukti_master_periodebulan">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v110_bukti_master_grid->periodebulan->caption() ?></span><span class="ew-table-header-sort"><?php if ($v110_bukti_master_grid->periodebulan->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($v110_bukti_master_grid->periodebulan->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v110_bukti_master_grid->tglbayar->Visible) { // tglbayar ?>
	<?php if ($v110_bukti_master_grid->SortUrl($v110_bukti_master_grid->tglbayar) == "") { ?>
		<th data-name="tglbayar" class="<?php echo $v110_bukti_master_grid->tglbayar->headerCellClass() ?>"><div id="elh_v110_bukti_master_tglbayar" class="v110_bukti_master_tglbayar"><div class="ew-table-header-caption"><?php echo $v110_bukti_master_grid->tglbayar->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tglbayar" class="<?php echo $v110_bukti_master_grid->tglbayar->headerCellClass() ?>"><div><div id="elh_v110_bukti_master_tglbayar" class="v110_bukti_master_tglbayar">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v110_bukti_master_grid->tglbayar->caption() ?></span><span class="ew-table-header-sort"><?php if ($v110_bukti_master_grid->tglbayar->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($v110_bukti_master_grid->tglbayar->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v110_bukti_master_grid->totalbayar->Visible) { // totalbayar ?>
	<?php if ($v110_bukti_master_grid->SortUrl($v110_bukti_master_grid->totalbayar) == "") { ?>
		<th data-name="totalbayar" class="<?php echo $v110_bukti_master_grid->totalbayar->headerCellClass() ?>"><div id="elh_v110_bukti_master_totalbayar" class="v110_bukti_master_totalbayar"><div class="ew-table-header-caption"><?php echo $v110_bukti_master_grid->totalbayar->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="totalbayar" class="<?php echo $v110_bukti_master_grid->totalbayar->headerCellClass() ?>"><div><div id="elh_v110_bukti_master_totalbayar" class="v110_bukti_master_totalbayar">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v110_bukti_master_grid->totalbayar->caption() ?></span><span class="ew-table-header-sort"><?php if ($v110_bukti_master_grid->totalbayar->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($v110_bukti_master_grid->totalbayar->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$v110_bukti_master_grid->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
$v110_bukti_master_grid->StartRecord = 1;
$v110_bukti_master_grid->StopRecord = $v110_bukti_master_grid->TotalRecords; // Show all records

// Restore number of post back records
if ($CurrentForm && ($v110_bukti_master->isConfirm() || $v110_bukti_master_grid->EventCancelled)) {
	$CurrentForm->Index = -1;
	if ($CurrentForm->hasValue($v110_bukti_master_grid->FormKeyCountName) && ($v110_bukti_master_grid->isGridAdd() || $v110_bukti_master_grid->isGridEdit() || $v110_bukti_master->isConfirm())) {
		$v110_bukti_master_grid->KeyCount = $CurrentForm->getValue($v110_bukti_master_grid->FormKeyCountName);
		$v110_bukti_master_grid->StopRecord = $v110_bukti_master_grid->StartRecord + $v110_bukti_master_grid->KeyCount - 1;
	}
}
$v110_bukti_master_grid->RecordCount = $v110_bukti_master_grid->StartRecord - 1;
if ($v110_bukti_master_grid->Recordset && !$v110_bukti_master_grid->Recordset->EOF) {
	$v110_bukti_master_grid->Recordset->moveFirst();
	$selectLimit = $v110_bukti_master_grid->UseSelectLimit;
	if (!$selectLimit && $v110_bukti_master_grid->StartRecord > 1)
		$v110_bukti_master_grid->Recordset->move($v110_bukti_master_grid->StartRecord - 1);
} elseif (!$v110_bukti_master->AllowAddDeleteRow && $v110_bukti_master_grid->StopRecord == 0) {
	$v110_bukti_master_grid->StopRecord = $v110_bukti_master->GridAddRowCount;
}

// Initialize aggregate
$v110_bukti_master->RowType = ROWTYPE_AGGREGATEINIT;
$v110_bukti_master->resetAttributes();
$v110_bukti_master_grid->renderRow();
if ($v110_bukti_master_grid->isGridAdd())
	$v110_bukti_master_grid->RowIndex = 0;
if ($v110_bukti_master_grid->isGridEdit())
	$v110_bukti_master_grid->RowIndex = 0;
while ($v110_bukti_master_grid->RecordCount < $v110_bukti_master_grid->StopRecord) {
	$v110_bukti_master_grid->RecordCount++;
	if ($v110_bukti_master_grid->RecordCount >= $v110_bukti_master_grid->StartRecord) {
		$v110_bukti_master_grid->RowCount++;
		if ($v110_bukti_master_grid->isGridAdd() || $v110_bukti_master_grid->isGridEdit() || $v110_bukti_master->isConfirm()) {
			$v110_bukti_master_grid->RowIndex++;
			$CurrentForm->Index = $v110_bukti_master_grid->RowIndex;
			if ($CurrentForm->hasValue($v110_bukti_master_grid->FormActionName) && ($v110_bukti_master->isConfirm() || $v110_bukti_master_grid->EventCancelled))
				$v110_bukti_master_grid->RowAction = strval($CurrentForm->getValue($v110_bukti_master_grid->FormActionName));
			elseif ($v110_bukti_master_grid->isGridAdd())
				$v110_bukti_master_grid->RowAction = "insert";
			else
				$v110_bukti_master_grid->RowAction = "";
		}

		// Set up key count
		$v110_bukti_master_grid->KeyCount = $v110_bukti_master_grid->RowIndex;

		// Init row class and style
		$v110_bukti_master->resetAttributes();
		$v110_bukti_master->CssClass = "";
		if ($v110_bukti_master_grid->isGridAdd()) {
			if ($v110_bukti_master->CurrentMode == "copy") {
				$v110_bukti_master_grid->loadRowValues($v110_bukti_master_grid->Recordset); // Load row values
				$v110_bukti_master_grid->setRecordKey($v110_bukti_master_grid->RowOldKey, $v110_bukti_master_grid->Recordset); // Set old record key
			} else {
				$v110_bukti_master_grid->loadRowValues(); // Load default values
				$v110_bukti_master_grid->RowOldKey = ""; // Clear old key value
			}
		} else {
			$v110_bukti_master_grid->loadRowValues($v110_bukti_master_grid->Recordset); // Load row values
		}
		$v110_bukti_master->RowType = ROWTYPE_VIEW; // Render view
		if ($v110_bukti_master_grid->isGridAdd()) // Grid add
			$v110_bukti_master->RowType = ROWTYPE_ADD; // Render add
		if ($v110_bukti_master_grid->isGridAdd() && $v110_bukti_master->EventCancelled && !$CurrentForm->hasValue("k_blankrow")) // Insert failed
			$v110_bukti_master_grid->restoreCurrentRowFormValues($v110_bukti_master_grid->RowIndex); // Restore form values
		if ($v110_bukti_master_grid->isGridEdit()) { // Grid edit
			if ($v110_bukti_master->EventCancelled)
				$v110_bukti_master_grid->restoreCurrentRowFormValues($v110_bukti_master_grid->RowIndex); // Restore form values
			if ($v110_bukti_master_grid->RowAction == "insert")
				$v110_bukti_master->RowType = ROWTYPE_ADD; // Render add
			else
				$v110_bukti_master->RowType = ROWTYPE_EDIT; // Render edit
		}
		if ($v110_bukti_master_grid->isGridEdit() && ($v110_bukti_master->RowType == ROWTYPE_EDIT || $v110_bukti_master->RowType == ROWTYPE_ADD) && $v110_bukti_master->EventCancelled) // Update failed
			$v110_bukti_master_grid->restoreCurrentRowFormValues($v110_bukti_master_grid->RowIndex); // Restore form values
		if ($v110_bukti_master->RowType == ROWTYPE_EDIT) // Edit row
			$v110_bukti_master_grid->EditRowCount++;
		if ($v110_bukti_master->isConfirm()) // Confirm row
			$v110_bukti_master_grid->restoreCurrentRowFormValues($v110_bukti_master_grid->RowIndex); // Restore form values

		// Set up row id / data-rowindex
		$v110_bukti_master->RowAttrs->merge(["data-rowindex" => $v110_bukti_master_grid->RowCount, "id" => "r" . $v110_bukti_master_grid->RowCount . "_v110_bukti_master", "data-rowtype" => $v110_bukti_master->RowType]);

		// Render row
		$v110_bukti_master_grid->renderRow();

		// Render list options
		$v110_bukti_master_grid->renderListOptions();

		// Skip delete row / empty row for confirm page
		if ($v110_bukti_master_grid->RowAction != "delete" && $v110_bukti_master_grid->RowAction != "insertdelete" && !($v110_bukti_master_grid->RowAction == "insert" && $v110_bukti_master->isConfirm() && $v110_bukti_master_grid->emptyRow())) {
?>
	<tr <?php echo $v110_bukti_master->rowAttributes() ?>>
<?php

// Render list options (body, left)
$v110_bukti_master_grid->ListOptions->render("body", "left", $v110_bukti_master_grid->RowCount);
?>
	<?php if ($v110_bukti_master_grid->periodebulan->Visible) { // periodebulan ?>
		<td data-name="periodebulan" <?php echo $v110_bukti_master_grid->periodebulan->cellAttributes() ?>>
<?php if ($v110_bukti_master->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $v110_bukti_master_grid->RowCount ?>_v110_bukti_master_periodebulan" class="form-group">
<input type="text" data-table="v110_bukti_master" data-field="x_periodebulan" name="x<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" id="x<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" size="30" maxlength="9" placeholder="<?php echo HtmlEncode($v110_bukti_master_grid->periodebulan->getPlaceHolder()) ?>" value="<?php echo $v110_bukti_master_grid->periodebulan->EditValue ?>"<?php echo $v110_bukti_master_grid->periodebulan->editAttributes() ?>>
</span>
<input type="hidden" data-table="v110_bukti_master" data-field="x_periodebulan" name="o<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" id="o<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" value="<?php echo HtmlEncode($v110_bukti_master_grid->periodebulan->OldValue) ?>">
<?php } ?>
<?php if ($v110_bukti_master->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $v110_bukti_master_grid->RowCount ?>_v110_bukti_master_periodebulan" class="form-group">
<input type="text" data-table="v110_bukti_master" data-field="x_periodebulan" name="x<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" id="x<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" size="30" maxlength="9" placeholder="<?php echo HtmlEncode($v110_bukti_master_grid->periodebulan->getPlaceHolder()) ?>" value="<?php echo $v110_bukti_master_grid->periodebulan->EditValue ?>"<?php echo $v110_bukti_master_grid->periodebulan->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($v110_bukti_master->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $v110_bukti_master_grid->RowCount ?>_v110_bukti_master_periodebulan">
<span<?php echo $v110_bukti_master_grid->periodebulan->viewAttributes() ?>><?php echo $v110_bukti_master_grid->periodebulan->getViewValue() ?></span>
</span>
<?php if (!$v110_bukti_master->isConfirm()) { ?>
<input type="hidden" data-table="v110_bukti_master" data-field="x_periodebulan" name="x<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" id="x<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" value="<?php echo HtmlEncode($v110_bukti_master_grid->periodebulan->FormValue) ?>">
<input type="hidden" data-table="v110_bukti_master" data-field="x_periodebulan" name="o<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" id="o<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" value="<?php echo HtmlEncode($v110_bukti_master_grid->periodebulan->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="v110_bukti_master" data-field="x_periodebulan" name="fv110_bukti_mastergrid$x<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" id="fv110_bukti_mastergrid$x<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" value="<?php echo HtmlEncode($v110_bukti_master_grid->periodebulan->FormValue) ?>">
<input type="hidden" data-table="v110_bukti_master" data-field="x_periodebulan" name="fv110_bukti_mastergrid$o<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" id="fv110_bukti_mastergrid$o<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" value="<?php echo HtmlEncode($v110_bukti_master_grid->periodebulan->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($v110_bukti_master_grid->tglbayar->Visible) { // tglbayar ?>
		<td data-name="tglbayar" <?php echo $v110_bukti_master_grid->tglbayar->cellAttributes() ?>>
<?php if ($v110_bukti_master->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $v110_bukti_master_grid->RowCount ?>_v110_bukti_master_tglbayar" class="form-group">
<input type="text" data-table="v110_bukti_master" data-field="x_tglbayar" data-format="7" name="x<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" id="x<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($v110_bukti_master_grid->tglbayar->getPlaceHolder()) ?>" value="<?php echo $v110_bukti_master_grid->tglbayar->EditValue ?>"<?php echo $v110_bukti_master_grid->tglbayar->editAttributes() ?>>
<?php if (!$v110_bukti_master_grid->tglbayar->ReadOnly && !$v110_bukti_master_grid->tglbayar->Disabled && !isset($v110_bukti_master_grid->tglbayar->EditAttrs["readonly"]) && !isset($v110_bukti_master_grid->tglbayar->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["fv110_bukti_mastergrid", "datetimepicker"], function() {
	ew.createDateTimePicker("fv110_bukti_mastergrid", "x<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="v110_bukti_master" data-field="x_tglbayar" name="o<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" id="o<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" value="<?php echo HtmlEncode($v110_bukti_master_grid->tglbayar->OldValue) ?>">
<?php } ?>
<?php if ($v110_bukti_master->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $v110_bukti_master_grid->RowCount ?>_v110_bukti_master_tglbayar" class="form-group">
<input type="text" data-table="v110_bukti_master" data-field="x_tglbayar" data-format="7" name="x<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" id="x<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($v110_bukti_master_grid->tglbayar->getPlaceHolder()) ?>" value="<?php echo $v110_bukti_master_grid->tglbayar->EditValue ?>"<?php echo $v110_bukti_master_grid->tglbayar->editAttributes() ?>>
<?php if (!$v110_bukti_master_grid->tglbayar->ReadOnly && !$v110_bukti_master_grid->tglbayar->Disabled && !isset($v110_bukti_master_grid->tglbayar->EditAttrs["readonly"]) && !isset($v110_bukti_master_grid->tglbayar->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["fv110_bukti_mastergrid", "datetimepicker"], function() {
	ew.createDateTimePicker("fv110_bukti_mastergrid", "x<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($v110_bukti_master->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $v110_bukti_master_grid->RowCount ?>_v110_bukti_master_tglbayar">
<span<?php echo $v110_bukti_master_grid->tglbayar->viewAttributes() ?>><?php echo $v110_bukti_master_grid->tglbayar->getViewValue() ?></span>
</span>
<?php if (!$v110_bukti_master->isConfirm()) { ?>
<input type="hidden" data-table="v110_bukti_master" data-field="x_tglbayar" name="x<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" id="x<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" value="<?php echo HtmlEncode($v110_bukti_master_grid->tglbayar->FormValue) ?>">
<input type="hidden" data-table="v110_bukti_master" data-field="x_tglbayar" name="o<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" id="o<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" value="<?php echo HtmlEncode($v110_bukti_master_grid->tglbayar->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="v110_bukti_master" data-field="x_tglbayar" name="fv110_bukti_mastergrid$x<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" id="fv110_bukti_mastergrid$x<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" value="<?php echo HtmlEncode($v110_bukti_master_grid->tglbayar->FormValue) ?>">
<input type="hidden" data-table="v110_bukti_master" data-field="x_tglbayar" name="fv110_bukti_mastergrid$o<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" id="fv110_bukti_mastergrid$o<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" value="<?php echo HtmlEncode($v110_bukti_master_grid->tglbayar->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($v110_bukti_master_grid->totalbayar->Visible) { // totalbayar ?>
		<td data-name="totalbayar" <?php echo $v110_bukti_master_grid->totalbayar->cellAttributes() ?>>
<?php if ($v110_bukti_master->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $v110_bukti_master_grid->RowCount ?>_v110_bukti_master_totalbayar" class="form-group">
<input type="text" data-table="v110_bukti_master" data-field="x_totalbayar" name="x<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" id="x<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" size="10" maxlength="19" placeholder="<?php echo HtmlEncode($v110_bukti_master_grid->totalbayar->getPlaceHolder()) ?>" value="<?php echo $v110_bukti_master_grid->totalbayar->EditValue ?>"<?php echo $v110_bukti_master_grid->totalbayar->editAttributes() ?>>
</span>
<input type="hidden" data-table="v110_bukti_master" data-field="x_totalbayar" name="o<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" id="o<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" value="<?php echo HtmlEncode($v110_bukti_master_grid->totalbayar->OldValue) ?>">
<?php } ?>
<?php if ($v110_bukti_master->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $v110_bukti_master_grid->RowCount ?>_v110_bukti_master_totalbayar" class="form-group">
<input type="text" data-table="v110_bukti_master" data-field="x_totalbayar" name="x<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" id="x<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" size="10" maxlength="19" placeholder="<?php echo HtmlEncode($v110_bukti_master_grid->totalbayar->getPlaceHolder()) ?>" value="<?php echo $v110_bukti_master_grid->totalbayar->EditValue ?>"<?php echo $v110_bukti_master_grid->totalbayar->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($v110_bukti_master->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $v110_bukti_master_grid->RowCount ?>_v110_bukti_master_totalbayar">
<span<?php echo $v110_bukti_master_grid->totalbayar->viewAttributes() ?>><?php echo $v110_bukti_master_grid->totalbayar->getViewValue() ?></span>
</span>
<?php if (!$v110_bukti_master->isConfirm()) { ?>
<input type="hidden" data-table="v110_bukti_master" data-field="x_totalbayar" name="x<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" id="x<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" value="<?php echo HtmlEncode($v110_bukti_master_grid->totalbayar->FormValue) ?>">
<input type="hidden" data-table="v110_bukti_master" data-field="x_totalbayar" name="o<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" id="o<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" value="<?php echo HtmlEncode($v110_bukti_master_grid->totalbayar->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="v110_bukti_master" data-field="x_totalbayar" name="fv110_bukti_mastergrid$x<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" id="fv110_bukti_mastergrid$x<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" value="<?php echo HtmlEncode($v110_bukti_master_grid->totalbayar->FormValue) ?>">
<input type="hidden" data-table="v110_bukti_master" data-field="x_totalbayar" name="fv110_bukti_mastergrid$o<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" id="fv110_bukti_mastergrid$o<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" value="<?php echo HtmlEncode($v110_bukti_master_grid->totalbayar->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$v110_bukti_master_grid->ListOptions->render("body", "right", $v110_bukti_master_grid->RowCount);
?>
	</tr>
<?php if ($v110_bukti_master->RowType == ROWTYPE_ADD || $v110_bukti_master->RowType == ROWTYPE_EDIT) { ?>
<script>
loadjs.ready(["fv110_bukti_mastergrid", "load"], function() {
	fv110_bukti_mastergrid.updateLists(<?php echo $v110_bukti_master_grid->RowIndex ?>);
});
</script>
<?php } ?>
<?php
	}
	} // End delete row checking
	if (!$v110_bukti_master_grid->isGridAdd() || $v110_bukti_master->CurrentMode == "copy")
		if (!$v110_bukti_master_grid->Recordset->EOF)
			$v110_bukti_master_grid->Recordset->moveNext();
}
?>
<?php
	if ($v110_bukti_master->CurrentMode == "add" || $v110_bukti_master->CurrentMode == "copy" || $v110_bukti_master->CurrentMode == "edit") {
		$v110_bukti_master_grid->RowIndex = '$rowindex$';
		$v110_bukti_master_grid->loadRowValues();

		// Set row properties
		$v110_bukti_master->resetAttributes();
		$v110_bukti_master->RowAttrs->merge(["data-rowindex" => $v110_bukti_master_grid->RowIndex, "id" => "r0_v110_bukti_master", "data-rowtype" => ROWTYPE_ADD]);
		$v110_bukti_master->RowAttrs->appendClass("ew-template");
		$v110_bukti_master->RowType = ROWTYPE_ADD;

		// Render row
		$v110_bukti_master_grid->renderRow();

		// Render list options
		$v110_bukti_master_grid->renderListOptions();
		$v110_bukti_master_grid->StartRowCount = 0;
?>
	<tr <?php echo $v110_bukti_master->rowAttributes() ?>>
<?php

// Render list options (body, left)
$v110_bukti_master_grid->ListOptions->render("body", "left", $v110_bukti_master_grid->RowIndex);
?>
	<?php if ($v110_bukti_master_grid->periodebulan->Visible) { // periodebulan ?>
		<td data-name="periodebulan">
<?php if (!$v110_bukti_master->isConfirm()) { ?>
<span id="el$rowindex$_v110_bukti_master_periodebulan" class="form-group v110_bukti_master_periodebulan">
<input type="text" data-table="v110_bukti_master" data-field="x_periodebulan" name="x<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" id="x<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" size="30" maxlength="9" placeholder="<?php echo HtmlEncode($v110_bukti_master_grid->periodebulan->getPlaceHolder()) ?>" value="<?php echo $v110_bukti_master_grid->periodebulan->EditValue ?>"<?php echo $v110_bukti_master_grid->periodebulan->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_v110_bukti_master_periodebulan" class="form-group v110_bukti_master_periodebulan">
<span<?php echo $v110_bukti_master_grid->periodebulan->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($v110_bukti_master_grid->periodebulan->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="v110_bukti_master" data-field="x_periodebulan" name="x<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" id="x<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" value="<?php echo HtmlEncode($v110_bukti_master_grid->periodebulan->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="v110_bukti_master" data-field="x_periodebulan" name="o<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" id="o<?php echo $v110_bukti_master_grid->RowIndex ?>_periodebulan" value="<?php echo HtmlEncode($v110_bukti_master_grid->periodebulan->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($v110_bukti_master_grid->tglbayar->Visible) { // tglbayar ?>
		<td data-name="tglbayar">
<?php if (!$v110_bukti_master->isConfirm()) { ?>
<span id="el$rowindex$_v110_bukti_master_tglbayar" class="form-group v110_bukti_master_tglbayar">
<input type="text" data-table="v110_bukti_master" data-field="x_tglbayar" data-format="7" name="x<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" id="x<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($v110_bukti_master_grid->tglbayar->getPlaceHolder()) ?>" value="<?php echo $v110_bukti_master_grid->tglbayar->EditValue ?>"<?php echo $v110_bukti_master_grid->tglbayar->editAttributes() ?>>
<?php if (!$v110_bukti_master_grid->tglbayar->ReadOnly && !$v110_bukti_master_grid->tglbayar->Disabled && !isset($v110_bukti_master_grid->tglbayar->EditAttrs["readonly"]) && !isset($v110_bukti_master_grid->tglbayar->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["fv110_bukti_mastergrid", "datetimepicker"], function() {
	ew.createDateTimePicker("fv110_bukti_mastergrid", "x<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } else { ?>
<span id="el$rowindex$_v110_bukti_master_tglbayar" class="form-group v110_bukti_master_tglbayar">
<span<?php echo $v110_bukti_master_grid->tglbayar->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($v110_bukti_master_grid->tglbayar->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="v110_bukti_master" data-field="x_tglbayar" name="x<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" id="x<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" value="<?php echo HtmlEncode($v110_bukti_master_grid->tglbayar->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="v110_bukti_master" data-field="x_tglbayar" name="o<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" id="o<?php echo $v110_bukti_master_grid->RowIndex ?>_tglbayar" value="<?php echo HtmlEncode($v110_bukti_master_grid->tglbayar->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($v110_bukti_master_grid->totalbayar->Visible) { // totalbayar ?>
		<td data-name="totalbayar">
<?php if (!$v110_bukti_master->isConfirm()) { ?>
<span id="el$rowindex$_v110_bukti_master_totalbayar" class="form-group v110_bukti_master_totalbayar">
<input type="text" data-table="v110_bukti_master" data-field="x_totalbayar" name="x<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" id="x<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" size="10" maxlength="19" placeholder="<?php echo HtmlEncode($v110_bukti_master_grid->totalbayar->getPlaceHolder()) ?>" value="<?php echo $v110_bukti_master_grid->totalbayar->EditValue ?>"<?php echo $v110_bukti_master_grid->totalbayar->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_v110_bukti_master_totalbayar" class="form-group v110_bukti_master_totalbayar">
<span<?php echo $v110_bukti_master_grid->totalbayar->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($v110_bukti_master_grid->totalbayar->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="v110_bukti_master" data-field="x_totalbayar" name="x<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" id="x<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" value="<?php echo HtmlEncode($v110_bukti_master_grid->totalbayar->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="v110_bukti_master" data-field="x_totalbayar" name="o<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" id="o<?php echo $v110_bukti_master_grid->RowIndex ?>_totalbayar" value="<?php echo HtmlEncode($v110_bukti_master_grid->totalbayar->OldValue) ?>">
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$v110_bukti_master_grid->ListOptions->render("body", "right", $v110_bukti_master_grid->RowIndex);
?>
<script>
loadjs.ready(["fv110_bukti_mastergrid", "load"], function() {
	fv110_bukti_mastergrid.updateLists(<?php echo $v110_bukti_master_grid->RowIndex ?>);
});
</script>
	</tr>
<?php
	}
?>
</tbody>
</table><!-- /.ew-table -->
</div><!-- /.ew-grid-middle-panel -->
<?php if ($v110_bukti_master->CurrentMode == "add" || $v110_bukti_master->CurrentMode == "copy") { ?>
<input type="hidden" name="<?php echo $v110_bukti_master_grid->FormKeyCountName ?>" id="<?php echo $v110_bukti_master_grid->FormKeyCountName ?>" value="<?php echo $v110_bukti_master_grid->KeyCount ?>">
<?php echo $v110_bukti_master_grid->MultiSelectKey ?>
<?php } ?>
<?php if ($v110_bukti_master->CurrentMode == "edit") { ?>
<input type="hidden" name="<?php echo $v110_bukti_master_grid->FormKeyCountName ?>" id="<?php echo $v110_bukti_master_grid->FormKeyCountName ?>" value="<?php echo $v110_bukti_master_grid->KeyCount ?>">
<?php echo $v110_bukti_master_grid->MultiSelectKey ?>
<?php } ?>
<?php if ($v110_bukti_master->CurrentMode == "") { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
<input type="hidden" name="detailpage" value="fv110_bukti_mastergrid">
</div><!-- /.ew-list-form -->
<?php

// Close recordset
if ($v110_bukti_master_grid->Recordset)
	$v110_bukti_master_grid->Recordset->Close();
?>
<?php if ($v110_bukti_master_grid->ShowOtherOptions) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php $v110_bukti_master_grid->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($v110_bukti_master_grid->TotalRecords == 0 && !$v110_bukti_master->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $v110_bukti_master_grid->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php if (!$v110_bukti_master_grid->isExport()) { ?>
<script>
loadjs.ready("load", function() {

	// Startup script
	// Write your table-specific startup script here
	// console.log("page loaded");

});
</script>
<?php } ?>
<?php
$v110_bukti_master_grid->terminate();
?>