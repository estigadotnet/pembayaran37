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
$t005_iuran_list = new t005_iuran_list();

// Run the page
$t005_iuran_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t005_iuran_list->Page_Render();
?>
<?php include_once "header.php"; ?>
<?php if (!$t005_iuran_list->isExport()) { ?>
<script>
var ft005_iuranlist, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "list";
	ft005_iuranlist = currentForm = new ew.Form("ft005_iuranlist", "list");
	ft005_iuranlist.formKeyCountName = '<?php echo $t005_iuran_list->FormKeyCountName ?>';
	loadjs.done("ft005_iuranlist");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php } ?>
<?php if (!$t005_iuran_list->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($t005_iuran_list->TotalRecords > 0 && $t005_iuran_list->ExportOptions->visible()) { ?>
<?php $t005_iuran_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($t005_iuran_list->ImportOptions->visible()) { ?>
<?php $t005_iuran_list->ImportOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$t005_iuran_list->renderOtherOptions();
?>
<?php $t005_iuran_list->showPageHeader(); ?>
<?php
$t005_iuran_list->showMessage();
?>
<?php if ($t005_iuran_list->TotalRecords > 0 || $t005_iuran->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t005_iuran_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t005_iuran">
<?php if (!$t005_iuran_list->isExport()) { ?>
<div class="card-header ew-grid-upper-panel">
<?php if (!$t005_iuran_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $t005_iuran_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t005_iuran_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
<form name="ft005_iuranlist" id="ft005_iuranlist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t005_iuran">
<div id="gmp_t005_iuran" class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<?php if ($t005_iuran_list->TotalRecords > 0 || $t005_iuran_list->isGridEdit()) { ?>
<table id="tbl_t005_iuranlist" class="table ew-table"><!-- .ew-table -->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t005_iuran->RowType = ROWTYPE_HEADER;

// Render list options
$t005_iuran_list->renderListOptions();

// Render list options (header, left)
$t005_iuran_list->ListOptions->render("header", "left");
?>
<?php if ($t005_iuran_list->Nama->Visible) { // Nama ?>
	<?php if ($t005_iuran_list->SortUrl($t005_iuran_list->Nama) == "") { ?>
		<th data-name="Nama" class="<?php echo $t005_iuran_list->Nama->headerCellClass() ?>"><div id="elh_t005_iuran_Nama" class="t005_iuran_Nama"><div class="ew-table-header-caption"><?php echo $t005_iuran_list->Nama->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Nama" class="<?php echo $t005_iuran_list->Nama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t005_iuran_list->SortUrl($t005_iuran_list->Nama) ?>', 2);"><div id="elh_t005_iuran_Nama" class="t005_iuran_Nama">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t005_iuran_list->Nama->caption() ?></span><span class="ew-table-header-sort"><?php if ($t005_iuran_list->Nama->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t005_iuran_list->Nama->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t005_iuran_list->Jenis->Visible) { // Jenis ?>
	<?php if ($t005_iuran_list->SortUrl($t005_iuran_list->Jenis) == "") { ?>
		<th data-name="Jenis" class="<?php echo $t005_iuran_list->Jenis->headerCellClass() ?>"><div id="elh_t005_iuran_Jenis" class="t005_iuran_Jenis"><div class="ew-table-header-caption"><?php echo $t005_iuran_list->Jenis->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Jenis" class="<?php echo $t005_iuran_list->Jenis->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t005_iuran_list->SortUrl($t005_iuran_list->Jenis) ?>', 2);"><div id="elh_t005_iuran_Jenis" class="t005_iuran_Jenis">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t005_iuran_list->Jenis->caption() ?></span><span class="ew-table-header-sort"><?php if ($t005_iuran_list->Jenis->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t005_iuran_list->Jenis->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t005_iuran_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($t005_iuran_list->ExportAll && $t005_iuran_list->isExport()) {
	$t005_iuran_list->StopRecord = $t005_iuran_list->TotalRecords;
} else {

	// Set the last record to display
	if ($t005_iuran_list->TotalRecords > $t005_iuran_list->StartRecord + $t005_iuran_list->DisplayRecords - 1)
		$t005_iuran_list->StopRecord = $t005_iuran_list->StartRecord + $t005_iuran_list->DisplayRecords - 1;
	else
		$t005_iuran_list->StopRecord = $t005_iuran_list->TotalRecords;
}
$t005_iuran_list->RecordCount = $t005_iuran_list->StartRecord - 1;
if ($t005_iuran_list->Recordset && !$t005_iuran_list->Recordset->EOF) {
	$t005_iuran_list->Recordset->moveFirst();
	$selectLimit = $t005_iuran_list->UseSelectLimit;
	if (!$selectLimit && $t005_iuran_list->StartRecord > 1)
		$t005_iuran_list->Recordset->move($t005_iuran_list->StartRecord - 1);
} elseif (!$t005_iuran->AllowAddDeleteRow && $t005_iuran_list->StopRecord == 0) {
	$t005_iuran_list->StopRecord = $t005_iuran->GridAddRowCount;
}

// Initialize aggregate
$t005_iuran->RowType = ROWTYPE_AGGREGATEINIT;
$t005_iuran->resetAttributes();
$t005_iuran_list->renderRow();
while ($t005_iuran_list->RecordCount < $t005_iuran_list->StopRecord) {
	$t005_iuran_list->RecordCount++;
	if ($t005_iuran_list->RecordCount >= $t005_iuran_list->StartRecord) {
		$t005_iuran_list->RowCount++;

		// Set up key count
		$t005_iuran_list->KeyCount = $t005_iuran_list->RowIndex;

		// Init row class and style
		$t005_iuran->resetAttributes();
		$t005_iuran->CssClass = "";
		if ($t005_iuran_list->isGridAdd()) {
		} else {
			$t005_iuran_list->loadRowValues($t005_iuran_list->Recordset); // Load row values
		}
		$t005_iuran->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$t005_iuran->RowAttrs->merge(["data-rowindex" => $t005_iuran_list->RowCount, "id" => "r" . $t005_iuran_list->RowCount . "_t005_iuran", "data-rowtype" => $t005_iuran->RowType]);

		// Render row
		$t005_iuran_list->renderRow();

		// Render list options
		$t005_iuran_list->renderListOptions();
?>
	<tr <?php echo $t005_iuran->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t005_iuran_list->ListOptions->render("body", "left", $t005_iuran_list->RowCount);
?>
	<?php if ($t005_iuran_list->Nama->Visible) { // Nama ?>
		<td data-name="Nama" <?php echo $t005_iuran_list->Nama->cellAttributes() ?>>
<span id="el<?php echo $t005_iuran_list->RowCount ?>_t005_iuran_Nama">
<span<?php echo $t005_iuran_list->Nama->viewAttributes() ?>><?php echo $t005_iuran_list->Nama->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t005_iuran_list->Jenis->Visible) { // Jenis ?>
		<td data-name="Jenis" <?php echo $t005_iuran_list->Jenis->cellAttributes() ?>>
<span id="el<?php echo $t005_iuran_list->RowCount ?>_t005_iuran_Jenis">
<span<?php echo $t005_iuran_list->Jenis->viewAttributes() ?>><?php echo $t005_iuran_list->Jenis->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t005_iuran_list->ListOptions->render("body", "right", $t005_iuran_list->RowCount);
?>
	</tr>
<?php
	}
	if (!$t005_iuran_list->isGridAdd())
		$t005_iuran_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
<?php if (!$t005_iuran->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t005_iuran_list->Recordset)
	$t005_iuran_list->Recordset->Close();
?>
<?php if (!$t005_iuran_list->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$t005_iuran_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $t005_iuran_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t005_iuran_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t005_iuran_list->TotalRecords == 0 && !$t005_iuran->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t005_iuran_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t005_iuran_list->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<?php if (!$t005_iuran_list->isExport()) { ?>
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
$t005_iuran_list->terminate();
?>