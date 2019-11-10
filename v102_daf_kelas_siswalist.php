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
$v102_daf_kelas_siswa_list = new v102_daf_kelas_siswa_list();

// Run the page
$v102_daf_kelas_siswa_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$v102_daf_kelas_siswa_list->Page_Render();
?>
<?php include_once "header.php"; ?>
<?php if (!$v102_daf_kelas_siswa_list->isExport()) { ?>
<script>
var fv102_daf_kelas_siswalist, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "list";
	fv102_daf_kelas_siswalist = currentForm = new ew.Form("fv102_daf_kelas_siswalist", "list");
	fv102_daf_kelas_siswalist.formKeyCountName = '<?php echo $v102_daf_kelas_siswa_list->FormKeyCountName ?>';
	loadjs.done("fv102_daf_kelas_siswalist");
});
var fv102_daf_kelas_siswalistsrch;
loadjs.ready("head", function() {

	// Form object for search
	fv102_daf_kelas_siswalistsrch = currentSearchForm = new ew.Form("fv102_daf_kelas_siswalistsrch");

	// Validate function for search
	fv102_daf_kelas_siswalistsrch.validate = function(fobj) {
		if (!this.validateRequired)
			return true; // Ignore validation
		fobj = fobj || this._form;
		var infix = "";

		// Call Form_CustomValidate event
		if (!this.Form_CustomValidate(fobj))
			return false;
		return true;
	}

	// Form_CustomValidate
	fv102_daf_kelas_siswalistsrch.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	fv102_daf_kelas_siswalistsrch.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	fv102_daf_kelas_siswalistsrch.lists["x_tsk"] = <?php echo $v102_daf_kelas_siswa_list->tsk->Lookup->toClientList($v102_daf_kelas_siswa_list) ?>;
	fv102_daf_kelas_siswalistsrch.lists["x_tsk"].options = <?php echo JsonEncode($v102_daf_kelas_siswa_list->tsk->lookupOptions()) ?>;
	fv102_daf_kelas_siswalistsrch.lists["x_siswa"] = <?php echo $v102_daf_kelas_siswa_list->siswa->Lookup->toClientList($v102_daf_kelas_siswa_list) ?>;
	fv102_daf_kelas_siswalistsrch.lists["x_siswa"].options = <?php echo JsonEncode($v102_daf_kelas_siswa_list->siswa->lookupOptions()) ?>;

	// Filters
	fv102_daf_kelas_siswalistsrch.filterList = <?php echo $v102_daf_kelas_siswa_list->getFilterList() ?>;
	loadjs.done("fv102_daf_kelas_siswalistsrch");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php } ?>
<?php if (!$v102_daf_kelas_siswa_list->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($v102_daf_kelas_siswa_list->TotalRecords > 0 && $v102_daf_kelas_siswa_list->ExportOptions->visible()) { ?>
<?php $v102_daf_kelas_siswa_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($v102_daf_kelas_siswa_list->ImportOptions->visible()) { ?>
<?php $v102_daf_kelas_siswa_list->ImportOptions->render("body") ?>
<?php } ?>
<?php if ($v102_daf_kelas_siswa_list->SearchOptions->visible()) { ?>
<?php $v102_daf_kelas_siswa_list->SearchOptions->render("body") ?>
<?php } ?>
<?php if ($v102_daf_kelas_siswa_list->FilterOptions->visible()) { ?>
<?php $v102_daf_kelas_siswa_list->FilterOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$v102_daf_kelas_siswa_list->renderOtherOptions();
?>
<?php if ($Security->CanSearch()) { ?>
<?php if (!$v102_daf_kelas_siswa_list->isExport() && !$v102_daf_kelas_siswa->CurrentAction) { ?>
<form name="fv102_daf_kelas_siswalistsrch" id="fv102_daf_kelas_siswalistsrch" class="form-inline ew-form ew-ext-search-form" action="<?php echo CurrentPageName() ?>">
<div id="fv102_daf_kelas_siswalistsrch-search-panel" class="<?php echo $v102_daf_kelas_siswa_list->SearchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<input type="hidden" name="t" value="v102_daf_kelas_siswa">
	<div class="ew-extended-search">
<?php

// Render search row
$v102_daf_kelas_siswa->RowType = ROWTYPE_SEARCH;
$v102_daf_kelas_siswa->resetAttributes();
$v102_daf_kelas_siswa_list->renderRow();
?>
<?php if ($v102_daf_kelas_siswa_list->tsk->Visible) { // tsk ?>
	<?php
		$v102_daf_kelas_siswa_list->SearchColumnCount++;
		if (($v102_daf_kelas_siswa_list->SearchColumnCount - 1) % $v102_daf_kelas_siswa_list->SearchFieldsPerRow == 0) {
			$v102_daf_kelas_siswa_list->SearchRowCount++;
	?>
<div id="xsr_<?php echo $v102_daf_kelas_siswa_list->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_tsk" class="ew-cell form-group">
		<label for="x_tsk" class="ew-search-caption ew-label"><?php echo $v102_daf_kelas_siswa_list->tsk->caption() ?></label>
		<span class="ew-search-operator">
<?php echo $Language->phrase("LIKE") ?>
<input type="hidden" name="z_tsk" id="z_tsk" value="LIKE">
</span>
		<span id="el_v102_daf_kelas_siswa_tsk" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_tsk"><?php echo EmptyValue(strval($v102_daf_kelas_siswa_list->tsk->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $v102_daf_kelas_siswa_list->tsk->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($v102_daf_kelas_siswa_list->tsk->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($v102_daf_kelas_siswa_list->tsk->ReadOnly || $v102_daf_kelas_siswa_list->tsk->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_tsk',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $v102_daf_kelas_siswa_list->tsk->Lookup->getParamTag($v102_daf_kelas_siswa_list, "p_x_tsk") ?>
<input type="hidden" data-table="v102_daf_kelas_siswa" data-field="x_tsk" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $v102_daf_kelas_siswa_list->tsk->displayValueSeparatorAttribute() ?>" name="x_tsk" id="x_tsk" value="<?php echo $v102_daf_kelas_siswa_list->tsk->AdvancedSearch->SearchValue ?>"<?php echo $v102_daf_kelas_siswa_list->tsk->editAttributes() ?>>
</span>
	</div>
	<?php if ($v102_daf_kelas_siswa_list->SearchColumnCount % $v102_daf_kelas_siswa_list->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($v102_daf_kelas_siswa_list->siswa->Visible) { // siswa ?>
	<?php
		$v102_daf_kelas_siswa_list->SearchColumnCount++;
		if (($v102_daf_kelas_siswa_list->SearchColumnCount - 1) % $v102_daf_kelas_siswa_list->SearchFieldsPerRow == 0) {
			$v102_daf_kelas_siswa_list->SearchRowCount++;
	?>
<div id="xsr_<?php echo $v102_daf_kelas_siswa_list->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_siswa" class="ew-cell form-group">
		<label for="x_siswa" class="ew-search-caption ew-label"><?php echo $v102_daf_kelas_siswa_list->siswa->caption() ?></label>
		<span class="ew-search-operator">
<?php echo $Language->phrase("LIKE") ?>
<input type="hidden" name="z_siswa" id="z_siswa" value="LIKE">
</span>
		<span id="el_v102_daf_kelas_siswa_siswa" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_siswa"><?php echo EmptyValue(strval($v102_daf_kelas_siswa_list->siswa->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $v102_daf_kelas_siswa_list->siswa->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($v102_daf_kelas_siswa_list->siswa->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($v102_daf_kelas_siswa_list->siswa->ReadOnly || $v102_daf_kelas_siswa_list->siswa->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_siswa',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $v102_daf_kelas_siswa_list->siswa->Lookup->getParamTag($v102_daf_kelas_siswa_list, "p_x_siswa") ?>
<input type="hidden" data-table="v102_daf_kelas_siswa" data-field="x_siswa" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $v102_daf_kelas_siswa_list->siswa->displayValueSeparatorAttribute() ?>" name="x_siswa" id="x_siswa" value="<?php echo $v102_daf_kelas_siswa_list->siswa->AdvancedSearch->SearchValue ?>"<?php echo $v102_daf_kelas_siswa_list->siswa->editAttributes() ?>>
</span>
	</div>
	<?php if ($v102_daf_kelas_siswa_list->SearchColumnCount % $v102_daf_kelas_siswa_list->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
	<?php if ($v102_daf_kelas_siswa_list->SearchColumnCount % $v102_daf_kelas_siswa_list->SearchFieldsPerRow > 0) { ?>
</div>
	<?php } ?>
<div id="xsr_<?php echo $v102_daf_kelas_siswa_list->SearchRowCount + 1 ?>" class="ew-row d-sm-flex">
	<button class="btn btn-primary" name="btn-submit" id="btn-submit" type="submit"><?php echo $Language->phrase("SearchBtn") ?></button>
</div>
	</div><!-- /.ew-extended-search -->
</div><!-- /.ew-search-panel -->
</form>
<?php } ?>
<?php } ?>
<?php $v102_daf_kelas_siswa_list->showPageHeader(); ?>
<?php
$v102_daf_kelas_siswa_list->showMessage();
?>
<?php if ($v102_daf_kelas_siswa_list->TotalRecords > 0 || $v102_daf_kelas_siswa->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($v102_daf_kelas_siswa_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> v102_daf_kelas_siswa">
<?php if (!$v102_daf_kelas_siswa_list->isExport()) { ?>
<div class="card-header ew-grid-upper-panel">
<?php if (!$v102_daf_kelas_siswa_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $v102_daf_kelas_siswa_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $v102_daf_kelas_siswa_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
<form name="fv102_daf_kelas_siswalist" id="fv102_daf_kelas_siswalist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="v102_daf_kelas_siswa">
<div id="gmp_v102_daf_kelas_siswa" class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<?php if ($v102_daf_kelas_siswa_list->TotalRecords > 0 || $v102_daf_kelas_siswa_list->isGridEdit()) { ?>
<table id="tbl_v102_daf_kelas_siswalist" class="table ew-table"><!-- .ew-table -->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$v102_daf_kelas_siswa->RowType = ROWTYPE_HEADER;

// Render list options
$v102_daf_kelas_siswa_list->renderListOptions();

// Render list options (header, left)
$v102_daf_kelas_siswa_list->ListOptions->render("header", "left");
?>
<?php if ($v102_daf_kelas_siswa_list->tsk->Visible) { // tsk ?>
	<?php if ($v102_daf_kelas_siswa_list->SortUrl($v102_daf_kelas_siswa_list->tsk) == "") { ?>
		<th data-name="tsk" class="<?php echo $v102_daf_kelas_siswa_list->tsk->headerCellClass() ?>"><div id="elh_v102_daf_kelas_siswa_tsk" class="v102_daf_kelas_siswa_tsk"><div class="ew-table-header-caption"><?php echo $v102_daf_kelas_siswa_list->tsk->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tsk" class="<?php echo $v102_daf_kelas_siswa_list->tsk->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $v102_daf_kelas_siswa_list->SortUrl($v102_daf_kelas_siswa_list->tsk) ?>', 2);"><div id="elh_v102_daf_kelas_siswa_tsk" class="v102_daf_kelas_siswa_tsk">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v102_daf_kelas_siswa_list->tsk->caption() ?></span><span class="ew-table-header-sort"><?php if ($v102_daf_kelas_siswa_list->tsk->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($v102_daf_kelas_siswa_list->tsk->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v102_daf_kelas_siswa_list->siswa->Visible) { // siswa ?>
	<?php if ($v102_daf_kelas_siswa_list->SortUrl($v102_daf_kelas_siswa_list->siswa) == "") { ?>
		<th data-name="siswa" class="<?php echo $v102_daf_kelas_siswa_list->siswa->headerCellClass() ?>"><div id="elh_v102_daf_kelas_siswa_siswa" class="v102_daf_kelas_siswa_siswa"><div class="ew-table-header-caption"><?php echo $v102_daf_kelas_siswa_list->siswa->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="siswa" class="<?php echo $v102_daf_kelas_siswa_list->siswa->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $v102_daf_kelas_siswa_list->SortUrl($v102_daf_kelas_siswa_list->siswa) ?>', 2);"><div id="elh_v102_daf_kelas_siswa_siswa" class="v102_daf_kelas_siswa_siswa">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v102_daf_kelas_siswa_list->siswa->caption() ?></span><span class="ew-table-header-sort"><?php if ($v102_daf_kelas_siswa_list->siswa->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($v102_daf_kelas_siswa_list->siswa->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$v102_daf_kelas_siswa_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($v102_daf_kelas_siswa_list->ExportAll && $v102_daf_kelas_siswa_list->isExport()) {
	$v102_daf_kelas_siswa_list->StopRecord = $v102_daf_kelas_siswa_list->TotalRecords;
} else {

	// Set the last record to display
	if ($v102_daf_kelas_siswa_list->TotalRecords > $v102_daf_kelas_siswa_list->StartRecord + $v102_daf_kelas_siswa_list->DisplayRecords - 1)
		$v102_daf_kelas_siswa_list->StopRecord = $v102_daf_kelas_siswa_list->StartRecord + $v102_daf_kelas_siswa_list->DisplayRecords - 1;
	else
		$v102_daf_kelas_siswa_list->StopRecord = $v102_daf_kelas_siswa_list->TotalRecords;
}
$v102_daf_kelas_siswa_list->RecordCount = $v102_daf_kelas_siswa_list->StartRecord - 1;
if ($v102_daf_kelas_siswa_list->Recordset && !$v102_daf_kelas_siswa_list->Recordset->EOF) {
	$v102_daf_kelas_siswa_list->Recordset->moveFirst();
	$selectLimit = $v102_daf_kelas_siswa_list->UseSelectLimit;
	if (!$selectLimit && $v102_daf_kelas_siswa_list->StartRecord > 1)
		$v102_daf_kelas_siswa_list->Recordset->move($v102_daf_kelas_siswa_list->StartRecord - 1);
} elseif (!$v102_daf_kelas_siswa->AllowAddDeleteRow && $v102_daf_kelas_siswa_list->StopRecord == 0) {
	$v102_daf_kelas_siswa_list->StopRecord = $v102_daf_kelas_siswa->GridAddRowCount;
}

// Initialize aggregate
$v102_daf_kelas_siswa->RowType = ROWTYPE_AGGREGATEINIT;
$v102_daf_kelas_siswa->resetAttributes();
$v102_daf_kelas_siswa_list->renderRow();
while ($v102_daf_kelas_siswa_list->RecordCount < $v102_daf_kelas_siswa_list->StopRecord) {
	$v102_daf_kelas_siswa_list->RecordCount++;
	if ($v102_daf_kelas_siswa_list->RecordCount >= $v102_daf_kelas_siswa_list->StartRecord) {
		$v102_daf_kelas_siswa_list->RowCount++;

		// Set up key count
		$v102_daf_kelas_siswa_list->KeyCount = $v102_daf_kelas_siswa_list->RowIndex;

		// Init row class and style
		$v102_daf_kelas_siswa->resetAttributes();
		$v102_daf_kelas_siswa->CssClass = "";
		if ($v102_daf_kelas_siswa_list->isGridAdd()) {
		} else {
			$v102_daf_kelas_siswa_list->loadRowValues($v102_daf_kelas_siswa_list->Recordset); // Load row values
		}
		$v102_daf_kelas_siswa->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$v102_daf_kelas_siswa->RowAttrs->merge(["data-rowindex" => $v102_daf_kelas_siswa_list->RowCount, "id" => "r" . $v102_daf_kelas_siswa_list->RowCount . "_v102_daf_kelas_siswa", "data-rowtype" => $v102_daf_kelas_siswa->RowType]);

		// Render row
		$v102_daf_kelas_siswa_list->renderRow();

		// Render list options
		$v102_daf_kelas_siswa_list->renderListOptions();
?>
	<tr <?php echo $v102_daf_kelas_siswa->rowAttributes() ?>>
<?php

// Render list options (body, left)
$v102_daf_kelas_siswa_list->ListOptions->render("body", "left", $v102_daf_kelas_siswa_list->RowCount);
?>
	<?php if ($v102_daf_kelas_siswa_list->tsk->Visible) { // tsk ?>
		<td data-name="tsk" <?php echo $v102_daf_kelas_siswa_list->tsk->cellAttributes() ?>>
<span id="el<?php echo $v102_daf_kelas_siswa_list->RowCount ?>_v102_daf_kelas_siswa_tsk">
<span<?php echo $v102_daf_kelas_siswa_list->tsk->viewAttributes() ?>><?php echo $v102_daf_kelas_siswa_list->tsk->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v102_daf_kelas_siswa_list->siswa->Visible) { // siswa ?>
		<td data-name="siswa" <?php echo $v102_daf_kelas_siswa_list->siswa->cellAttributes() ?>>
<span id="el<?php echo $v102_daf_kelas_siswa_list->RowCount ?>_v102_daf_kelas_siswa_siswa">
<span<?php echo $v102_daf_kelas_siswa_list->siswa->viewAttributes() ?>><?php echo $v102_daf_kelas_siswa_list->siswa->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$v102_daf_kelas_siswa_list->ListOptions->render("body", "right", $v102_daf_kelas_siswa_list->RowCount);
?>
	</tr>
<?php
	}
	if (!$v102_daf_kelas_siswa_list->isGridAdd())
		$v102_daf_kelas_siswa_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
<?php if (!$v102_daf_kelas_siswa->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($v102_daf_kelas_siswa_list->Recordset)
	$v102_daf_kelas_siswa_list->Recordset->Close();
?>
<?php if (!$v102_daf_kelas_siswa_list->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$v102_daf_kelas_siswa_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $v102_daf_kelas_siswa_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $v102_daf_kelas_siswa_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($v102_daf_kelas_siswa_list->TotalRecords == 0 && !$v102_daf_kelas_siswa->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $v102_daf_kelas_siswa_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$v102_daf_kelas_siswa_list->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<?php if (!$v102_daf_kelas_siswa_list->isExport()) { ?>
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
$v102_daf_kelas_siswa_list->terminate();
?>