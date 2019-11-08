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
$t001_tahun_ajaran_list = new t001_tahun_ajaran_list();

// Run the page
$t001_tahun_ajaran_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t001_tahun_ajaran_list->Page_Render();
?>
<?php include_once "header.php"; ?>
<?php if (!$t001_tahun_ajaran_list->isExport()) { ?>
<script>
var ft001_tahun_ajaranlist, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "list";
	ft001_tahun_ajaranlist = currentForm = new ew.Form("ft001_tahun_ajaranlist", "list");
	ft001_tahun_ajaranlist.formKeyCountName = '<?php echo $t001_tahun_ajaran_list->FormKeyCountName ?>';
	loadjs.done("ft001_tahun_ajaranlist");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php } ?>
<?php if (!$t001_tahun_ajaran_list->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($t001_tahun_ajaran_list->TotalRecords > 0 && $t001_tahun_ajaran_list->ExportOptions->visible()) { ?>
<?php $t001_tahun_ajaran_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($t001_tahun_ajaran_list->ImportOptions->visible()) { ?>
<?php $t001_tahun_ajaran_list->ImportOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$t001_tahun_ajaran_list->renderOtherOptions();
?>
<?php $t001_tahun_ajaran_list->showPageHeader(); ?>
<?php
$t001_tahun_ajaran_list->showMessage();
?>
<?php if ($t001_tahun_ajaran_list->TotalRecords > 0 || $t001_tahun_ajaran->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t001_tahun_ajaran_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t001_tahun_ajaran">
<?php if (!$t001_tahun_ajaran_list->isExport()) { ?>
<div class="card-header ew-grid-upper-panel">
<?php if (!$t001_tahun_ajaran_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $t001_tahun_ajaran_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t001_tahun_ajaran_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
<form name="ft001_tahun_ajaranlist" id="ft001_tahun_ajaranlist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t001_tahun_ajaran">
<div id="gmp_t001_tahun_ajaran" class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<?php if ($t001_tahun_ajaran_list->TotalRecords > 0 || $t001_tahun_ajaran_list->isGridEdit()) { ?>
<table id="tbl_t001_tahun_ajaranlist" class="table ew-table"><!-- .ew-table -->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t001_tahun_ajaran->RowType = ROWTYPE_HEADER;

// Render list options
$t001_tahun_ajaran_list->renderListOptions();

// Render list options (header, left)
$t001_tahun_ajaran_list->ListOptions->render("header", "left");
?>
<?php if ($t001_tahun_ajaran_list->Mulai->Visible) { // Mulai ?>
	<?php if ($t001_tahun_ajaran_list->SortUrl($t001_tahun_ajaran_list->Mulai) == "") { ?>
		<th data-name="Mulai" class="<?php echo $t001_tahun_ajaran_list->Mulai->headerCellClass() ?>"><div id="elh_t001_tahun_ajaran_Mulai" class="t001_tahun_ajaran_Mulai"><div class="ew-table-header-caption"><?php echo $t001_tahun_ajaran_list->Mulai->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Mulai" class="<?php echo $t001_tahun_ajaran_list->Mulai->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t001_tahun_ajaran_list->SortUrl($t001_tahun_ajaran_list->Mulai) ?>', 2);"><div id="elh_t001_tahun_ajaran_Mulai" class="t001_tahun_ajaran_Mulai">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t001_tahun_ajaran_list->Mulai->caption() ?></span><span class="ew-table-header-sort"><?php if ($t001_tahun_ajaran_list->Mulai->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t001_tahun_ajaran_list->Mulai->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t001_tahun_ajaran_list->Selesai->Visible) { // Selesai ?>
	<?php if ($t001_tahun_ajaran_list->SortUrl($t001_tahun_ajaran_list->Selesai) == "") { ?>
		<th data-name="Selesai" class="<?php echo $t001_tahun_ajaran_list->Selesai->headerCellClass() ?>"><div id="elh_t001_tahun_ajaran_Selesai" class="t001_tahun_ajaran_Selesai"><div class="ew-table-header-caption"><?php echo $t001_tahun_ajaran_list->Selesai->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Selesai" class="<?php echo $t001_tahun_ajaran_list->Selesai->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t001_tahun_ajaran_list->SortUrl($t001_tahun_ajaran_list->Selesai) ?>', 2);"><div id="elh_t001_tahun_ajaran_Selesai" class="t001_tahun_ajaran_Selesai">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t001_tahun_ajaran_list->Selesai->caption() ?></span><span class="ew-table-header-sort"><?php if ($t001_tahun_ajaran_list->Selesai->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t001_tahun_ajaran_list->Selesai->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t001_tahun_ajaran_list->Aktif->Visible) { // Aktif ?>
	<?php if ($t001_tahun_ajaran_list->SortUrl($t001_tahun_ajaran_list->Aktif) == "") { ?>
		<th data-name="Aktif" class="<?php echo $t001_tahun_ajaran_list->Aktif->headerCellClass() ?>"><div id="elh_t001_tahun_ajaran_Aktif" class="t001_tahun_ajaran_Aktif"><div class="ew-table-header-caption"><?php echo $t001_tahun_ajaran_list->Aktif->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Aktif" class="<?php echo $t001_tahun_ajaran_list->Aktif->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t001_tahun_ajaran_list->SortUrl($t001_tahun_ajaran_list->Aktif) ?>', 2);"><div id="elh_t001_tahun_ajaran_Aktif" class="t001_tahun_ajaran_Aktif">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t001_tahun_ajaran_list->Aktif->caption() ?></span><span class="ew-table-header-sort"><?php if ($t001_tahun_ajaran_list->Aktif->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t001_tahun_ajaran_list->Aktif->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t001_tahun_ajaran_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($t001_tahun_ajaran_list->ExportAll && $t001_tahun_ajaran_list->isExport()) {
	$t001_tahun_ajaran_list->StopRecord = $t001_tahun_ajaran_list->TotalRecords;
} else {

	// Set the last record to display
	if ($t001_tahun_ajaran_list->TotalRecords > $t001_tahun_ajaran_list->StartRecord + $t001_tahun_ajaran_list->DisplayRecords - 1)
		$t001_tahun_ajaran_list->StopRecord = $t001_tahun_ajaran_list->StartRecord + $t001_tahun_ajaran_list->DisplayRecords - 1;
	else
		$t001_tahun_ajaran_list->StopRecord = $t001_tahun_ajaran_list->TotalRecords;
}
$t001_tahun_ajaran_list->RecordCount = $t001_tahun_ajaran_list->StartRecord - 1;
if ($t001_tahun_ajaran_list->Recordset && !$t001_tahun_ajaran_list->Recordset->EOF) {
	$t001_tahun_ajaran_list->Recordset->moveFirst();
	$selectLimit = $t001_tahun_ajaran_list->UseSelectLimit;
	if (!$selectLimit && $t001_tahun_ajaran_list->StartRecord > 1)
		$t001_tahun_ajaran_list->Recordset->move($t001_tahun_ajaran_list->StartRecord - 1);
} elseif (!$t001_tahun_ajaran->AllowAddDeleteRow && $t001_tahun_ajaran_list->StopRecord == 0) {
	$t001_tahun_ajaran_list->StopRecord = $t001_tahun_ajaran->GridAddRowCount;
}

// Initialize aggregate
$t001_tahun_ajaran->RowType = ROWTYPE_AGGREGATEINIT;
$t001_tahun_ajaran->resetAttributes();
$t001_tahun_ajaran_list->renderRow();
while ($t001_tahun_ajaran_list->RecordCount < $t001_tahun_ajaran_list->StopRecord) {
	$t001_tahun_ajaran_list->RecordCount++;
	if ($t001_tahun_ajaran_list->RecordCount >= $t001_tahun_ajaran_list->StartRecord) {
		$t001_tahun_ajaran_list->RowCount++;

		// Set up key count
		$t001_tahun_ajaran_list->KeyCount = $t001_tahun_ajaran_list->RowIndex;

		// Init row class and style
		$t001_tahun_ajaran->resetAttributes();
		$t001_tahun_ajaran->CssClass = "";
		if ($t001_tahun_ajaran_list->isGridAdd()) {
		} else {
			$t001_tahun_ajaran_list->loadRowValues($t001_tahun_ajaran_list->Recordset); // Load row values
		}
		$t001_tahun_ajaran->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$t001_tahun_ajaran->RowAttrs->merge(["data-rowindex" => $t001_tahun_ajaran_list->RowCount, "id" => "r" . $t001_tahun_ajaran_list->RowCount . "_t001_tahun_ajaran", "data-rowtype" => $t001_tahun_ajaran->RowType]);

		// Render row
		$t001_tahun_ajaran_list->renderRow();

		// Render list options
		$t001_tahun_ajaran_list->renderListOptions();
?>
	<tr <?php echo $t001_tahun_ajaran->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t001_tahun_ajaran_list->ListOptions->render("body", "left", $t001_tahun_ajaran_list->RowCount);
?>
	<?php if ($t001_tahun_ajaran_list->Mulai->Visible) { // Mulai ?>
		<td data-name="Mulai" <?php echo $t001_tahun_ajaran_list->Mulai->cellAttributes() ?>>
<span id="el<?php echo $t001_tahun_ajaran_list->RowCount ?>_t001_tahun_ajaran_Mulai">
<span<?php echo $t001_tahun_ajaran_list->Mulai->viewAttributes() ?>><?php echo $t001_tahun_ajaran_list->Mulai->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t001_tahun_ajaran_list->Selesai->Visible) { // Selesai ?>
		<td data-name="Selesai" <?php echo $t001_tahun_ajaran_list->Selesai->cellAttributes() ?>>
<span id="el<?php echo $t001_tahun_ajaran_list->RowCount ?>_t001_tahun_ajaran_Selesai">
<span<?php echo $t001_tahun_ajaran_list->Selesai->viewAttributes() ?>><?php echo $t001_tahun_ajaran_list->Selesai->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t001_tahun_ajaran_list->Aktif->Visible) { // Aktif ?>
		<td data-name="Aktif" <?php echo $t001_tahun_ajaran_list->Aktif->cellAttributes() ?>>
<span id="el<?php echo $t001_tahun_ajaran_list->RowCount ?>_t001_tahun_ajaran_Aktif">
<span<?php echo $t001_tahun_ajaran_list->Aktif->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_Aktif" class="custom-control-input" value="<?php echo $t001_tahun_ajaran_list->Aktif->getViewValue() ?>" disabled<?php if (ConvertToBool($t001_tahun_ajaran_list->Aktif->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_Aktif"></label></div></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t001_tahun_ajaran_list->ListOptions->render("body", "right", $t001_tahun_ajaran_list->RowCount);
?>
	</tr>
<?php
	}
	if (!$t001_tahun_ajaran_list->isGridAdd())
		$t001_tahun_ajaran_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
<?php if (!$t001_tahun_ajaran->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t001_tahun_ajaran_list->Recordset)
	$t001_tahun_ajaran_list->Recordset->Close();
?>
<?php if (!$t001_tahun_ajaran_list->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$t001_tahun_ajaran_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $t001_tahun_ajaran_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t001_tahun_ajaran_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t001_tahun_ajaran_list->TotalRecords == 0 && !$t001_tahun_ajaran->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t001_tahun_ajaran_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t001_tahun_ajaran_list->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<?php if (!$t001_tahun_ajaran_list->isExport()) { ?>
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
$t001_tahun_ajaran_list->terminate();
?>