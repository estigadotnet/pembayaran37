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
$v103_daf_kelas_siswa_iuran_list = new v103_daf_kelas_siswa_iuran_list();

// Run the page
$v103_daf_kelas_siswa_iuran_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$v103_daf_kelas_siswa_iuran_list->Page_Render();
?>
<?php include_once "header.php"; ?>
<?php if (!$v103_daf_kelas_siswa_iuran_list->isExport()) { ?>
<script>
var fv103_daf_kelas_siswa_iuranlist, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "list";
	fv103_daf_kelas_siswa_iuranlist = currentForm = new ew.Form("fv103_daf_kelas_siswa_iuranlist", "list");
	fv103_daf_kelas_siswa_iuranlist.formKeyCountName = '<?php echo $v103_daf_kelas_siswa_iuran_list->FormKeyCountName ?>';
	loadjs.done("fv103_daf_kelas_siswa_iuranlist");
});
var fv103_daf_kelas_siswa_iuranlistsrch;
loadjs.ready("head", function() {

	// Form object for search
	fv103_daf_kelas_siswa_iuranlistsrch = currentSearchForm = new ew.Form("fv103_daf_kelas_siswa_iuranlistsrch");

	// Validate function for search
	fv103_daf_kelas_siswa_iuranlistsrch.validate = function(fobj) {
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
	fv103_daf_kelas_siswa_iuranlistsrch.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	fv103_daf_kelas_siswa_iuranlistsrch.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	// Filters

	fv103_daf_kelas_siswa_iuranlistsrch.filterList = <?php echo $v103_daf_kelas_siswa_iuran_list->getFilterList() ?>;
	loadjs.done("fv103_daf_kelas_siswa_iuranlistsrch");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php } ?>
<?php if (!$v103_daf_kelas_siswa_iuran_list->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($v103_daf_kelas_siswa_iuran_list->TotalRecords > 0 && $v103_daf_kelas_siswa_iuran_list->ExportOptions->visible()) { ?>
<?php $v103_daf_kelas_siswa_iuran_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($v103_daf_kelas_siswa_iuran_list->ImportOptions->visible()) { ?>
<?php $v103_daf_kelas_siswa_iuran_list->ImportOptions->render("body") ?>
<?php } ?>
<?php if ($v103_daf_kelas_siswa_iuran_list->SearchOptions->visible()) { ?>
<?php $v103_daf_kelas_siswa_iuran_list->SearchOptions->render("body") ?>
<?php } ?>
<?php if ($v103_daf_kelas_siswa_iuran_list->FilterOptions->visible()) { ?>
<?php $v103_daf_kelas_siswa_iuran_list->FilterOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$v103_daf_kelas_siswa_iuran_list->renderOtherOptions();
?>
<?php if ($Security->CanSearch()) { ?>
<?php if (!$v103_daf_kelas_siswa_iuran_list->isExport() && !$v103_daf_kelas_siswa_iuran->CurrentAction) { ?>
<form name="fv103_daf_kelas_siswa_iuranlistsrch" id="fv103_daf_kelas_siswa_iuranlistsrch" class="form-inline ew-form ew-ext-search-form" action="<?php echo CurrentPageName() ?>">
<div id="fv103_daf_kelas_siswa_iuranlistsrch-search-panel" class="<?php echo $v103_daf_kelas_siswa_iuran_list->SearchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<input type="hidden" name="t" value="v103_daf_kelas_siswa_iuran">
	<div class="ew-extended-search">
<?php

// Render search row
$v103_daf_kelas_siswa_iuran->RowType = ROWTYPE_SEARCH;
$v103_daf_kelas_siswa_iuran->resetAttributes();
$v103_daf_kelas_siswa_iuran_list->renderRow();
?>
<?php if ($v103_daf_kelas_siswa_iuran_list->NomorInduk->Visible) { // NomorInduk ?>
	<?php
		$v103_daf_kelas_siswa_iuran_list->SearchColumnCount++;
		if (($v103_daf_kelas_siswa_iuran_list->SearchColumnCount - 1) % $v103_daf_kelas_siswa_iuran_list->SearchFieldsPerRow == 0) {
			$v103_daf_kelas_siswa_iuran_list->SearchRowCount++;
	?>
<div id="xsr_<?php echo $v103_daf_kelas_siswa_iuran_list->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_NomorInduk" class="ew-cell form-group">
		<label for="x_NomorInduk" class="ew-search-caption ew-label"><?php echo $v103_daf_kelas_siswa_iuran_list->NomorInduk->caption() ?></label>
		<span class="ew-search-operator">
<?php echo $Language->phrase("LIKE") ?>
<input type="hidden" name="z_NomorInduk" id="z_NomorInduk" value="LIKE">
</span>
		<span id="el_v103_daf_kelas_siswa_iuran_NomorInduk" class="ew-search-field">
<input type="text" data-table="v103_daf_kelas_siswa_iuran" data-field="x_NomorInduk" name="x_NomorInduk" id="x_NomorInduk" size="30" maxlength="25" placeholder="<?php echo HtmlEncode($v103_daf_kelas_siswa_iuran_list->NomorInduk->getPlaceHolder()) ?>" value="<?php echo $v103_daf_kelas_siswa_iuran_list->NomorInduk->EditValue ?>"<?php echo $v103_daf_kelas_siswa_iuran_list->NomorInduk->editAttributes() ?>>
</span>
	</div>
	<?php if ($v103_daf_kelas_siswa_iuran_list->SearchColumnCount % $v103_daf_kelas_siswa_iuran_list->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($v103_daf_kelas_siswa_iuran_list->Nama->Visible) { // Nama ?>
	<?php
		$v103_daf_kelas_siswa_iuran_list->SearchColumnCount++;
		if (($v103_daf_kelas_siswa_iuran_list->SearchColumnCount - 1) % $v103_daf_kelas_siswa_iuran_list->SearchFieldsPerRow == 0) {
			$v103_daf_kelas_siswa_iuran_list->SearchRowCount++;
	?>
<div id="xsr_<?php echo $v103_daf_kelas_siswa_iuran_list->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_Nama" class="ew-cell form-group">
		<label for="x_Nama" class="ew-search-caption ew-label"><?php echo $v103_daf_kelas_siswa_iuran_list->Nama->caption() ?></label>
		<span class="ew-search-operator">
<?php echo $Language->phrase("LIKE") ?>
<input type="hidden" name="z_Nama" id="z_Nama" value="LIKE">
</span>
		<span id="el_v103_daf_kelas_siswa_iuran_Nama" class="ew-search-field">
<input type="text" data-table="v103_daf_kelas_siswa_iuran" data-field="x_Nama" name="x_Nama" id="x_Nama" size="30" maxlength="50" placeholder="<?php echo HtmlEncode($v103_daf_kelas_siswa_iuran_list->Nama->getPlaceHolder()) ?>" value="<?php echo $v103_daf_kelas_siswa_iuran_list->Nama->EditValue ?>"<?php echo $v103_daf_kelas_siswa_iuran_list->Nama->editAttributes() ?>>
</span>
	</div>
	<?php if ($v103_daf_kelas_siswa_iuran_list->SearchColumnCount % $v103_daf_kelas_siswa_iuran_list->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
	<?php if ($v103_daf_kelas_siswa_iuran_list->SearchColumnCount % $v103_daf_kelas_siswa_iuran_list->SearchFieldsPerRow > 0) { ?>
</div>
	<?php } ?>
<div id="xsr_<?php echo $v103_daf_kelas_siswa_iuran_list->SearchRowCount + 1 ?>" class="ew-row d-sm-flex">
	<button class="btn btn-primary" name="btn-submit" id="btn-submit" type="submit"><?php echo $Language->phrase("SearchBtn") ?></button>
</div>
	</div><!-- /.ew-extended-search -->
</div><!-- /.ew-search-panel -->
</form>
<?php } ?>
<?php } ?>
<?php $v103_daf_kelas_siswa_iuran_list->showPageHeader(); ?>
<?php
$v103_daf_kelas_siswa_iuran_list->showMessage();
?>
<?php if ($v103_daf_kelas_siswa_iuran_list->TotalRecords > 0 || $v103_daf_kelas_siswa_iuran->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($v103_daf_kelas_siswa_iuran_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> v103_daf_kelas_siswa_iuran">
<?php if (!$v103_daf_kelas_siswa_iuran_list->isExport()) { ?>
<div class="card-header ew-grid-upper-panel">
<?php if (!$v103_daf_kelas_siswa_iuran_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $v103_daf_kelas_siswa_iuran_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $v103_daf_kelas_siswa_iuran_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
<form name="fv103_daf_kelas_siswa_iuranlist" id="fv103_daf_kelas_siswa_iuranlist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="v103_daf_kelas_siswa_iuran">
<div id="gmp_v103_daf_kelas_siswa_iuran" class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<?php if ($v103_daf_kelas_siswa_iuran_list->TotalRecords > 0 || $v103_daf_kelas_siswa_iuran_list->isGridEdit()) { ?>
<table id="tbl_v103_daf_kelas_siswa_iuranlist" class="table ew-table"><!-- .ew-table -->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$v103_daf_kelas_siswa_iuran->RowType = ROWTYPE_HEADER;

// Render list options
$v103_daf_kelas_siswa_iuran_list->renderListOptions();

// Render list options (header, left)
$v103_daf_kelas_siswa_iuran_list->ListOptions->render("header", "left");
?>
<?php if ($v103_daf_kelas_siswa_iuran_list->NomorInduk->Visible) { // NomorInduk ?>
	<?php if ($v103_daf_kelas_siswa_iuran_list->SortUrl($v103_daf_kelas_siswa_iuran_list->NomorInduk) == "") { ?>
		<th data-name="NomorInduk" class="<?php echo $v103_daf_kelas_siswa_iuran_list->NomorInduk->headerCellClass() ?>"><div id="elh_v103_daf_kelas_siswa_iuran_NomorInduk" class="v103_daf_kelas_siswa_iuran_NomorInduk"><div class="ew-table-header-caption"><?php echo $v103_daf_kelas_siswa_iuran_list->NomorInduk->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="NomorInduk" class="<?php echo $v103_daf_kelas_siswa_iuran_list->NomorInduk->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $v103_daf_kelas_siswa_iuran_list->SortUrl($v103_daf_kelas_siswa_iuran_list->NomorInduk) ?>', 2);"><div id="elh_v103_daf_kelas_siswa_iuran_NomorInduk" class="v103_daf_kelas_siswa_iuran_NomorInduk">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v103_daf_kelas_siswa_iuran_list->NomorInduk->caption() ?></span><span class="ew-table-header-sort"><?php if ($v103_daf_kelas_siswa_iuran_list->NomorInduk->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($v103_daf_kelas_siswa_iuran_list->NomorInduk->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v103_daf_kelas_siswa_iuran_list->Nama->Visible) { // Nama ?>
	<?php if ($v103_daf_kelas_siswa_iuran_list->SortUrl($v103_daf_kelas_siswa_iuran_list->Nama) == "") { ?>
		<th data-name="Nama" class="<?php echo $v103_daf_kelas_siswa_iuran_list->Nama->headerCellClass() ?>"><div id="elh_v103_daf_kelas_siswa_iuran_Nama" class="v103_daf_kelas_siswa_iuran_Nama"><div class="ew-table-header-caption"><?php echo $v103_daf_kelas_siswa_iuran_list->Nama->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Nama" class="<?php echo $v103_daf_kelas_siswa_iuran_list->Nama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $v103_daf_kelas_siswa_iuran_list->SortUrl($v103_daf_kelas_siswa_iuran_list->Nama) ?>', 2);"><div id="elh_v103_daf_kelas_siswa_iuran_Nama" class="v103_daf_kelas_siswa_iuran_Nama">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v103_daf_kelas_siswa_iuran_list->Nama->caption() ?></span><span class="ew-table-header-sort"><?php if ($v103_daf_kelas_siswa_iuran_list->Nama->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($v103_daf_kelas_siswa_iuran_list->Nama->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$v103_daf_kelas_siswa_iuran_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($v103_daf_kelas_siswa_iuran_list->ExportAll && $v103_daf_kelas_siswa_iuran_list->isExport()) {
	$v103_daf_kelas_siswa_iuran_list->StopRecord = $v103_daf_kelas_siswa_iuran_list->TotalRecords;
} else {

	// Set the last record to display
	if ($v103_daf_kelas_siswa_iuran_list->TotalRecords > $v103_daf_kelas_siswa_iuran_list->StartRecord + $v103_daf_kelas_siswa_iuran_list->DisplayRecords - 1)
		$v103_daf_kelas_siswa_iuran_list->StopRecord = $v103_daf_kelas_siswa_iuran_list->StartRecord + $v103_daf_kelas_siswa_iuran_list->DisplayRecords - 1;
	else
		$v103_daf_kelas_siswa_iuran_list->StopRecord = $v103_daf_kelas_siswa_iuran_list->TotalRecords;
}
$v103_daf_kelas_siswa_iuran_list->RecordCount = $v103_daf_kelas_siswa_iuran_list->StartRecord - 1;
if ($v103_daf_kelas_siswa_iuran_list->Recordset && !$v103_daf_kelas_siswa_iuran_list->Recordset->EOF) {
	$v103_daf_kelas_siswa_iuran_list->Recordset->moveFirst();
	$selectLimit = $v103_daf_kelas_siswa_iuran_list->UseSelectLimit;
	if (!$selectLimit && $v103_daf_kelas_siswa_iuran_list->StartRecord > 1)
		$v103_daf_kelas_siswa_iuran_list->Recordset->move($v103_daf_kelas_siswa_iuran_list->StartRecord - 1);
} elseif (!$v103_daf_kelas_siswa_iuran->AllowAddDeleteRow && $v103_daf_kelas_siswa_iuran_list->StopRecord == 0) {
	$v103_daf_kelas_siswa_iuran_list->StopRecord = $v103_daf_kelas_siswa_iuran->GridAddRowCount;
}

// Initialize aggregate
$v103_daf_kelas_siswa_iuran->RowType = ROWTYPE_AGGREGATEINIT;
$v103_daf_kelas_siswa_iuran->resetAttributes();
$v103_daf_kelas_siswa_iuran_list->renderRow();
while ($v103_daf_kelas_siswa_iuran_list->RecordCount < $v103_daf_kelas_siswa_iuran_list->StopRecord) {
	$v103_daf_kelas_siswa_iuran_list->RecordCount++;
	if ($v103_daf_kelas_siswa_iuran_list->RecordCount >= $v103_daf_kelas_siswa_iuran_list->StartRecord) {
		$v103_daf_kelas_siswa_iuran_list->RowCount++;

		// Set up key count
		$v103_daf_kelas_siswa_iuran_list->KeyCount = $v103_daf_kelas_siswa_iuran_list->RowIndex;

		// Init row class and style
		$v103_daf_kelas_siswa_iuran->resetAttributes();
		$v103_daf_kelas_siswa_iuran->CssClass = "";
		if ($v103_daf_kelas_siswa_iuran_list->isGridAdd()) {
		} else {
			$v103_daf_kelas_siswa_iuran_list->loadRowValues($v103_daf_kelas_siswa_iuran_list->Recordset); // Load row values
		}
		$v103_daf_kelas_siswa_iuran->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$v103_daf_kelas_siswa_iuran->RowAttrs->merge(["data-rowindex" => $v103_daf_kelas_siswa_iuran_list->RowCount, "id" => "r" . $v103_daf_kelas_siswa_iuran_list->RowCount . "_v103_daf_kelas_siswa_iuran", "data-rowtype" => $v103_daf_kelas_siswa_iuran->RowType]);

		// Render row
		$v103_daf_kelas_siswa_iuran_list->renderRow();

		// Render list options
		$v103_daf_kelas_siswa_iuran_list->renderListOptions();
?>
	<tr <?php echo $v103_daf_kelas_siswa_iuran->rowAttributes() ?>>
<?php

// Render list options (body, left)
$v103_daf_kelas_siswa_iuran_list->ListOptions->render("body", "left", $v103_daf_kelas_siswa_iuran_list->RowCount);
?>
	<?php if ($v103_daf_kelas_siswa_iuran_list->NomorInduk->Visible) { // NomorInduk ?>
		<td data-name="NomorInduk" <?php echo $v103_daf_kelas_siswa_iuran_list->NomorInduk->cellAttributes() ?>>
<span id="el<?php echo $v103_daf_kelas_siswa_iuran_list->RowCount ?>_v103_daf_kelas_siswa_iuran_NomorInduk">
<span<?php echo $v103_daf_kelas_siswa_iuran_list->NomorInduk->viewAttributes() ?>><?php echo $v103_daf_kelas_siswa_iuran_list->NomorInduk->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v103_daf_kelas_siswa_iuran_list->Nama->Visible) { // Nama ?>
		<td data-name="Nama" <?php echo $v103_daf_kelas_siswa_iuran_list->Nama->cellAttributes() ?>>
<span id="el<?php echo $v103_daf_kelas_siswa_iuran_list->RowCount ?>_v103_daf_kelas_siswa_iuran_Nama">
<span<?php echo $v103_daf_kelas_siswa_iuran_list->Nama->viewAttributes() ?>><?php echo $v103_daf_kelas_siswa_iuran_list->Nama->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$v103_daf_kelas_siswa_iuran_list->ListOptions->render("body", "right", $v103_daf_kelas_siswa_iuran_list->RowCount);
?>
	</tr>
<?php
	}
	if (!$v103_daf_kelas_siswa_iuran_list->isGridAdd())
		$v103_daf_kelas_siswa_iuran_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
<?php if (!$v103_daf_kelas_siswa_iuran->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($v103_daf_kelas_siswa_iuran_list->Recordset)
	$v103_daf_kelas_siswa_iuran_list->Recordset->Close();
?>
<?php if (!$v103_daf_kelas_siswa_iuran_list->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$v103_daf_kelas_siswa_iuran_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $v103_daf_kelas_siswa_iuran_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $v103_daf_kelas_siswa_iuran_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($v103_daf_kelas_siswa_iuran_list->TotalRecords == 0 && !$v103_daf_kelas_siswa_iuran->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $v103_daf_kelas_siswa_iuran_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$v103_daf_kelas_siswa_iuran_list->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<?php if (!$v103_daf_kelas_siswa_iuran_list->isExport()) { ?>
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
$v103_daf_kelas_siswa_iuran_list->terminate();
?>