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
$t101_daf_kelas_list = new t101_daf_kelas_list();

// Run the page
$t101_daf_kelas_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t101_daf_kelas_list->Page_Render();
?>
<?php include_once "header.php"; ?>
<?php if (!$t101_daf_kelas_list->isExport()) { ?>
<script>
var ft101_daf_kelaslist, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "list";
	ft101_daf_kelaslist = currentForm = new ew.Form("ft101_daf_kelaslist", "list");
	ft101_daf_kelaslist.formKeyCountName = '<?php echo $t101_daf_kelas_list->FormKeyCountName ?>';
	loadjs.done("ft101_daf_kelaslist");
});
var ft101_daf_kelaslistsrch;
loadjs.ready("head", function() {

	// Form object for search
	ft101_daf_kelaslistsrch = currentSearchForm = new ew.Form("ft101_daf_kelaslistsrch");

	// Validate function for search
	ft101_daf_kelaslistsrch.validate = function(fobj) {
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
	ft101_daf_kelaslistsrch.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	ft101_daf_kelaslistsrch.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	ft101_daf_kelaslistsrch.lists["x_tahun_ajaran_id"] = <?php echo $t101_daf_kelas_list->tahun_ajaran_id->Lookup->toClientList($t101_daf_kelas_list) ?>;
	ft101_daf_kelaslistsrch.lists["x_tahun_ajaran_id"].options = <?php echo JsonEncode($t101_daf_kelas_list->tahun_ajaran_id->lookupOptions()) ?>;
	ft101_daf_kelaslistsrch.lists["x_sekolah_id"] = <?php echo $t101_daf_kelas_list->sekolah_id->Lookup->toClientList($t101_daf_kelas_list) ?>;
	ft101_daf_kelaslistsrch.lists["x_sekolah_id"].options = <?php echo JsonEncode($t101_daf_kelas_list->sekolah_id->lookupOptions()) ?>;
	ft101_daf_kelaslistsrch.lists["x_kelas_id"] = <?php echo $t101_daf_kelas_list->kelas_id->Lookup->toClientList($t101_daf_kelas_list) ?>;
	ft101_daf_kelaslistsrch.lists["x_kelas_id"].options = <?php echo JsonEncode($t101_daf_kelas_list->kelas_id->lookupOptions()) ?>;

	// Filters
	ft101_daf_kelaslistsrch.filterList = <?php echo $t101_daf_kelas_list->getFilterList() ?>;
	loadjs.done("ft101_daf_kelaslistsrch");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php } ?>
<?php if (!$t101_daf_kelas_list->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($t101_daf_kelas_list->TotalRecords > 0 && $t101_daf_kelas_list->ExportOptions->visible()) { ?>
<?php $t101_daf_kelas_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($t101_daf_kelas_list->ImportOptions->visible()) { ?>
<?php $t101_daf_kelas_list->ImportOptions->render("body") ?>
<?php } ?>
<?php if ($t101_daf_kelas_list->SearchOptions->visible()) { ?>
<?php $t101_daf_kelas_list->SearchOptions->render("body") ?>
<?php } ?>
<?php if ($t101_daf_kelas_list->FilterOptions->visible()) { ?>
<?php $t101_daf_kelas_list->FilterOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$t101_daf_kelas_list->renderOtherOptions();
?>
<?php if ($Security->CanSearch()) { ?>
<?php if (!$t101_daf_kelas_list->isExport() && !$t101_daf_kelas->CurrentAction) { ?>
<form name="ft101_daf_kelaslistsrch" id="ft101_daf_kelaslistsrch" class="form-inline ew-form ew-ext-search-form" action="<?php echo CurrentPageName() ?>">
<div id="ft101_daf_kelaslistsrch-search-panel" class="<?php echo $t101_daf_kelas_list->SearchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<input type="hidden" name="t" value="t101_daf_kelas">
	<div class="ew-extended-search">
<?php

// Render search row
$t101_daf_kelas->RowType = ROWTYPE_SEARCH;
$t101_daf_kelas->resetAttributes();
$t101_daf_kelas_list->renderRow();
?>
<?php if ($t101_daf_kelas_list->tahun_ajaran_id->Visible) { // tahun_ajaran_id ?>
	<?php
		$t101_daf_kelas_list->SearchColumnCount++;
		if (($t101_daf_kelas_list->SearchColumnCount - 1) % $t101_daf_kelas_list->SearchFieldsPerRow == 0) {
			$t101_daf_kelas_list->SearchRowCount++;
	?>
<div id="xsr_<?php echo $t101_daf_kelas_list->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_tahun_ajaran_id" class="ew-cell form-group">
		<label for="x_tahun_ajaran_id" class="ew-search-caption ew-label"><?php echo $t101_daf_kelas_list->tahun_ajaran_id->caption() ?></label>
		<span class="ew-search-operator">
<?php echo $Language->phrase("=") ?>
<input type="hidden" name="z_tahun_ajaran_id" id="z_tahun_ajaran_id" value="=">
</span>
		<span id="el_t101_daf_kelas_tahun_ajaran_id" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_tahun_ajaran_id"><?php echo EmptyValue(strval($t101_daf_kelas_list->tahun_ajaran_id->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $t101_daf_kelas_list->tahun_ajaran_id->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t101_daf_kelas_list->tahun_ajaran_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t101_daf_kelas_list->tahun_ajaran_id->ReadOnly || $t101_daf_kelas_list->tahun_ajaran_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_tahun_ajaran_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t101_daf_kelas_list->tahun_ajaran_id->Lookup->getParamTag($t101_daf_kelas_list, "p_x_tahun_ajaran_id") ?>
<input type="hidden" data-table="t101_daf_kelas" data-field="x_tahun_ajaran_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t101_daf_kelas_list->tahun_ajaran_id->displayValueSeparatorAttribute() ?>" name="x_tahun_ajaran_id" id="x_tahun_ajaran_id" value="<?php echo $t101_daf_kelas_list->tahun_ajaran_id->AdvancedSearch->SearchValue ?>"<?php echo $t101_daf_kelas_list->tahun_ajaran_id->editAttributes() ?>>
</span>
	</div>
	<?php if ($t101_daf_kelas_list->SearchColumnCount % $t101_daf_kelas_list->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($t101_daf_kelas_list->sekolah_id->Visible) { // sekolah_id ?>
	<?php
		$t101_daf_kelas_list->SearchColumnCount++;
		if (($t101_daf_kelas_list->SearchColumnCount - 1) % $t101_daf_kelas_list->SearchFieldsPerRow == 0) {
			$t101_daf_kelas_list->SearchRowCount++;
	?>
<div id="xsr_<?php echo $t101_daf_kelas_list->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_sekolah_id" class="ew-cell form-group">
		<label for="x_sekolah_id" class="ew-search-caption ew-label"><?php echo $t101_daf_kelas_list->sekolah_id->caption() ?></label>
		<span class="ew-search-operator">
<?php echo $Language->phrase("=") ?>
<input type="hidden" name="z_sekolah_id" id="z_sekolah_id" value="=">
</span>
		<span id="el_t101_daf_kelas_sekolah_id" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_sekolah_id"><?php echo EmptyValue(strval($t101_daf_kelas_list->sekolah_id->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $t101_daf_kelas_list->sekolah_id->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t101_daf_kelas_list->sekolah_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t101_daf_kelas_list->sekolah_id->ReadOnly || $t101_daf_kelas_list->sekolah_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_sekolah_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t101_daf_kelas_list->sekolah_id->Lookup->getParamTag($t101_daf_kelas_list, "p_x_sekolah_id") ?>
<input type="hidden" data-table="t101_daf_kelas" data-field="x_sekolah_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t101_daf_kelas_list->sekolah_id->displayValueSeparatorAttribute() ?>" name="x_sekolah_id" id="x_sekolah_id" value="<?php echo $t101_daf_kelas_list->sekolah_id->AdvancedSearch->SearchValue ?>"<?php echo $t101_daf_kelas_list->sekolah_id->editAttributes() ?>>
</span>
	</div>
	<?php if ($t101_daf_kelas_list->SearchColumnCount % $t101_daf_kelas_list->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($t101_daf_kelas_list->kelas_id->Visible) { // kelas_id ?>
	<?php
		$t101_daf_kelas_list->SearchColumnCount++;
		if (($t101_daf_kelas_list->SearchColumnCount - 1) % $t101_daf_kelas_list->SearchFieldsPerRow == 0) {
			$t101_daf_kelas_list->SearchRowCount++;
	?>
<div id="xsr_<?php echo $t101_daf_kelas_list->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_kelas_id" class="ew-cell form-group">
		<label for="x_kelas_id" class="ew-search-caption ew-label"><?php echo $t101_daf_kelas_list->kelas_id->caption() ?></label>
		<span class="ew-search-operator">
<?php echo $Language->phrase("=") ?>
<input type="hidden" name="z_kelas_id" id="z_kelas_id" value="=">
</span>
		<span id="el_t101_daf_kelas_kelas_id" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_kelas_id"><?php echo EmptyValue(strval($t101_daf_kelas_list->kelas_id->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $t101_daf_kelas_list->kelas_id->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t101_daf_kelas_list->kelas_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t101_daf_kelas_list->kelas_id->ReadOnly || $t101_daf_kelas_list->kelas_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_kelas_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t101_daf_kelas_list->kelas_id->Lookup->getParamTag($t101_daf_kelas_list, "p_x_kelas_id") ?>
<input type="hidden" data-table="t101_daf_kelas" data-field="x_kelas_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t101_daf_kelas_list->kelas_id->displayValueSeparatorAttribute() ?>" name="x_kelas_id" id="x_kelas_id" value="<?php echo $t101_daf_kelas_list->kelas_id->AdvancedSearch->SearchValue ?>"<?php echo $t101_daf_kelas_list->kelas_id->editAttributes() ?>>
</span>
	</div>
	<?php if ($t101_daf_kelas_list->SearchColumnCount % $t101_daf_kelas_list->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
	<?php if ($t101_daf_kelas_list->SearchColumnCount % $t101_daf_kelas_list->SearchFieldsPerRow > 0) { ?>
</div>
	<?php } ?>
<div id="xsr_<?php echo $t101_daf_kelas_list->SearchRowCount + 1 ?>" class="ew-row d-sm-flex">
	<button class="btn btn-primary" name="btn-submit" id="btn-submit" type="submit"><?php echo $Language->phrase("SearchBtn") ?></button>
</div>
	</div><!-- /.ew-extended-search -->
</div><!-- /.ew-search-panel -->
</form>
<?php } ?>
<?php } ?>
<?php $t101_daf_kelas_list->showPageHeader(); ?>
<?php
$t101_daf_kelas_list->showMessage();
?>
<?php if ($t101_daf_kelas_list->TotalRecords > 0 || $t101_daf_kelas->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t101_daf_kelas_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t101_daf_kelas">
<?php if (!$t101_daf_kelas_list->isExport()) { ?>
<div class="card-header ew-grid-upper-panel">
<?php if (!$t101_daf_kelas_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $t101_daf_kelas_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t101_daf_kelas_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
<form name="ft101_daf_kelaslist" id="ft101_daf_kelaslist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t101_daf_kelas">
<div id="gmp_t101_daf_kelas" class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<?php if ($t101_daf_kelas_list->TotalRecords > 0 || $t101_daf_kelas_list->isGridEdit()) { ?>
<table id="tbl_t101_daf_kelaslist" class="table ew-table"><!-- .ew-table -->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t101_daf_kelas->RowType = ROWTYPE_HEADER;

// Render list options
$t101_daf_kelas_list->renderListOptions();

// Render list options (header, left)
$t101_daf_kelas_list->ListOptions->render("header", "left");
?>
<?php if ($t101_daf_kelas_list->tahun_ajaran_id->Visible) { // tahun_ajaran_id ?>
	<?php if ($t101_daf_kelas_list->SortUrl($t101_daf_kelas_list->tahun_ajaran_id) == "") { ?>
		<th data-name="tahun_ajaran_id" class="<?php echo $t101_daf_kelas_list->tahun_ajaran_id->headerCellClass() ?>"><div id="elh_t101_daf_kelas_tahun_ajaran_id" class="t101_daf_kelas_tahun_ajaran_id"><div class="ew-table-header-caption"><?php echo $t101_daf_kelas_list->tahun_ajaran_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tahun_ajaran_id" class="<?php echo $t101_daf_kelas_list->tahun_ajaran_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t101_daf_kelas_list->SortUrl($t101_daf_kelas_list->tahun_ajaran_id) ?>', 2);"><div id="elh_t101_daf_kelas_tahun_ajaran_id" class="t101_daf_kelas_tahun_ajaran_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t101_daf_kelas_list->tahun_ajaran_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t101_daf_kelas_list->tahun_ajaran_id->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t101_daf_kelas_list->tahun_ajaran_id->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t101_daf_kelas_list->sekolah_id->Visible) { // sekolah_id ?>
	<?php if ($t101_daf_kelas_list->SortUrl($t101_daf_kelas_list->sekolah_id) == "") { ?>
		<th data-name="sekolah_id" class="<?php echo $t101_daf_kelas_list->sekolah_id->headerCellClass() ?>"><div id="elh_t101_daf_kelas_sekolah_id" class="t101_daf_kelas_sekolah_id"><div class="ew-table-header-caption"><?php echo $t101_daf_kelas_list->sekolah_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="sekolah_id" class="<?php echo $t101_daf_kelas_list->sekolah_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t101_daf_kelas_list->SortUrl($t101_daf_kelas_list->sekolah_id) ?>', 2);"><div id="elh_t101_daf_kelas_sekolah_id" class="t101_daf_kelas_sekolah_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t101_daf_kelas_list->sekolah_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t101_daf_kelas_list->sekolah_id->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t101_daf_kelas_list->sekolah_id->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t101_daf_kelas_list->kelas_id->Visible) { // kelas_id ?>
	<?php if ($t101_daf_kelas_list->SortUrl($t101_daf_kelas_list->kelas_id) == "") { ?>
		<th data-name="kelas_id" class="<?php echo $t101_daf_kelas_list->kelas_id->headerCellClass() ?>"><div id="elh_t101_daf_kelas_kelas_id" class="t101_daf_kelas_kelas_id"><div class="ew-table-header-caption"><?php echo $t101_daf_kelas_list->kelas_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="kelas_id" class="<?php echo $t101_daf_kelas_list->kelas_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t101_daf_kelas_list->SortUrl($t101_daf_kelas_list->kelas_id) ?>', 2);"><div id="elh_t101_daf_kelas_kelas_id" class="t101_daf_kelas_kelas_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t101_daf_kelas_list->kelas_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t101_daf_kelas_list->kelas_id->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t101_daf_kelas_list->kelas_id->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t101_daf_kelas_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($t101_daf_kelas_list->ExportAll && $t101_daf_kelas_list->isExport()) {
	$t101_daf_kelas_list->StopRecord = $t101_daf_kelas_list->TotalRecords;
} else {

	// Set the last record to display
	if ($t101_daf_kelas_list->TotalRecords > $t101_daf_kelas_list->StartRecord + $t101_daf_kelas_list->DisplayRecords - 1)
		$t101_daf_kelas_list->StopRecord = $t101_daf_kelas_list->StartRecord + $t101_daf_kelas_list->DisplayRecords - 1;
	else
		$t101_daf_kelas_list->StopRecord = $t101_daf_kelas_list->TotalRecords;
}
$t101_daf_kelas_list->RecordCount = $t101_daf_kelas_list->StartRecord - 1;
if ($t101_daf_kelas_list->Recordset && !$t101_daf_kelas_list->Recordset->EOF) {
	$t101_daf_kelas_list->Recordset->moveFirst();
	$selectLimit = $t101_daf_kelas_list->UseSelectLimit;
	if (!$selectLimit && $t101_daf_kelas_list->StartRecord > 1)
		$t101_daf_kelas_list->Recordset->move($t101_daf_kelas_list->StartRecord - 1);
} elseif (!$t101_daf_kelas->AllowAddDeleteRow && $t101_daf_kelas_list->StopRecord == 0) {
	$t101_daf_kelas_list->StopRecord = $t101_daf_kelas->GridAddRowCount;
}

// Initialize aggregate
$t101_daf_kelas->RowType = ROWTYPE_AGGREGATEINIT;
$t101_daf_kelas->resetAttributes();
$t101_daf_kelas_list->renderRow();
while ($t101_daf_kelas_list->RecordCount < $t101_daf_kelas_list->StopRecord) {
	$t101_daf_kelas_list->RecordCount++;
	if ($t101_daf_kelas_list->RecordCount >= $t101_daf_kelas_list->StartRecord) {
		$t101_daf_kelas_list->RowCount++;

		// Set up key count
		$t101_daf_kelas_list->KeyCount = $t101_daf_kelas_list->RowIndex;

		// Init row class and style
		$t101_daf_kelas->resetAttributes();
		$t101_daf_kelas->CssClass = "";
		if ($t101_daf_kelas_list->isGridAdd()) {
		} else {
			$t101_daf_kelas_list->loadRowValues($t101_daf_kelas_list->Recordset); // Load row values
		}
		$t101_daf_kelas->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$t101_daf_kelas->RowAttrs->merge(["data-rowindex" => $t101_daf_kelas_list->RowCount, "id" => "r" . $t101_daf_kelas_list->RowCount . "_t101_daf_kelas", "data-rowtype" => $t101_daf_kelas->RowType]);

		// Render row
		$t101_daf_kelas_list->renderRow();

		// Render list options
		$t101_daf_kelas_list->renderListOptions();
?>
	<tr <?php echo $t101_daf_kelas->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t101_daf_kelas_list->ListOptions->render("body", "left", $t101_daf_kelas_list->RowCount);
?>
	<?php if ($t101_daf_kelas_list->tahun_ajaran_id->Visible) { // tahun_ajaran_id ?>
		<td data-name="tahun_ajaran_id" <?php echo $t101_daf_kelas_list->tahun_ajaran_id->cellAttributes() ?>>
<span id="el<?php echo $t101_daf_kelas_list->RowCount ?>_t101_daf_kelas_tahun_ajaran_id">
<span<?php echo $t101_daf_kelas_list->tahun_ajaran_id->viewAttributes() ?>><?php echo $t101_daf_kelas_list->tahun_ajaran_id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t101_daf_kelas_list->sekolah_id->Visible) { // sekolah_id ?>
		<td data-name="sekolah_id" <?php echo $t101_daf_kelas_list->sekolah_id->cellAttributes() ?>>
<span id="el<?php echo $t101_daf_kelas_list->RowCount ?>_t101_daf_kelas_sekolah_id">
<span<?php echo $t101_daf_kelas_list->sekolah_id->viewAttributes() ?>><?php echo $t101_daf_kelas_list->sekolah_id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t101_daf_kelas_list->kelas_id->Visible) { // kelas_id ?>
		<td data-name="kelas_id" <?php echo $t101_daf_kelas_list->kelas_id->cellAttributes() ?>>
<span id="el<?php echo $t101_daf_kelas_list->RowCount ?>_t101_daf_kelas_kelas_id">
<span<?php echo $t101_daf_kelas_list->kelas_id->viewAttributes() ?>><?php echo $t101_daf_kelas_list->kelas_id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t101_daf_kelas_list->ListOptions->render("body", "right", $t101_daf_kelas_list->RowCount);
?>
	</tr>
<?php
	}
	if (!$t101_daf_kelas_list->isGridAdd())
		$t101_daf_kelas_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
<?php if (!$t101_daf_kelas->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t101_daf_kelas_list->Recordset)
	$t101_daf_kelas_list->Recordset->Close();
?>
<?php if (!$t101_daf_kelas_list->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$t101_daf_kelas_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $t101_daf_kelas_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t101_daf_kelas_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t101_daf_kelas_list->TotalRecords == 0 && !$t101_daf_kelas->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t101_daf_kelas_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t101_daf_kelas_list->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<?php if (!$t101_daf_kelas_list->isExport()) { ?>
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
$t101_daf_kelas_list->terminate();
?>