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
$v110_bukti_master_list = new v110_bukti_master_list();

// Run the page
$v110_bukti_master_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$v110_bukti_master_list->Page_Render();
?>
<?php include_once "header.php"; ?>
<?php if (!$v110_bukti_master_list->isExport()) { ?>
<script>
var fv110_bukti_masterlist, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "list";
	fv110_bukti_masterlist = currentForm = new ew.Form("fv110_bukti_masterlist", "list");
	fv110_bukti_masterlist.formKeyCountName = '<?php echo $v110_bukti_master_list->FormKeyCountName ?>';
	loadjs.done("fv110_bukti_masterlist");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php } ?>
<?php if (!$v110_bukti_master_list->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($v110_bukti_master_list->TotalRecords > 0 && $v110_bukti_master_list->ExportOptions->visible()) { ?>
<?php $v110_bukti_master_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($v110_bukti_master_list->ImportOptions->visible()) { ?>
<?php $v110_bukti_master_list->ImportOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if (!$v110_bukti_master_list->isExport() || Config("EXPORT_MASTER_RECORD") && $v110_bukti_master_list->isExport("print")) { ?>
<?php
if ($v110_bukti_master_list->DbMasterFilter != "" && $v110_bukti_master->getCurrentMasterTable() == "v102_daf_kelas_siswa") {
	if ($v110_bukti_master_list->MasterRecordExists) {
		include_once "v102_daf_kelas_siswamaster.php";
	}
}
?>
<?php } ?>
<?php
$v110_bukti_master_list->renderOtherOptions();
?>
<?php $v110_bukti_master_list->showPageHeader(); ?>
<?php
$v110_bukti_master_list->showMessage();
?>
<?php if ($v110_bukti_master_list->TotalRecords > 0 || $v110_bukti_master->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($v110_bukti_master_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> v110_bukti_master">
<?php if (!$v110_bukti_master_list->isExport()) { ?>
<div class="card-header ew-grid-upper-panel">
<?php if (!$v110_bukti_master_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $v110_bukti_master_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $v110_bukti_master_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
<form name="fv110_bukti_masterlist" id="fv110_bukti_masterlist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="v110_bukti_master">
<?php if ($v110_bukti_master->getCurrentMasterTable() == "v102_daf_kelas_siswa" && $v110_bukti_master->CurrentAction) { ?>
<input type="hidden" name="<?php echo Config("TABLE_SHOW_MASTER") ?>" value="v102_daf_kelas_siswa">
<input type="hidden" name="fk_id" value="<?php echo $v110_bukti_master_list->daf_kelas_siswa_id->getSessionValue() ?>">
<?php } ?>
<div id="gmp_v110_bukti_master" class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<?php if ($v110_bukti_master_list->TotalRecords > 0 || $v110_bukti_master_list->isGridEdit()) { ?>
<table id="tbl_v110_bukti_masterlist" class="table ew-table"><!-- .ew-table -->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$v110_bukti_master->RowType = ROWTYPE_HEADER;

// Render list options
$v110_bukti_master_list->renderListOptions();

// Render list options (header, left)
$v110_bukti_master_list->ListOptions->render("header", "left");
?>
<?php if ($v110_bukti_master_list->periodebulan->Visible) { // periodebulan ?>
	<?php if ($v110_bukti_master_list->SortUrl($v110_bukti_master_list->periodebulan) == "") { ?>
		<th data-name="periodebulan" class="<?php echo $v110_bukti_master_list->periodebulan->headerCellClass() ?>"><div id="elh_v110_bukti_master_periodebulan" class="v110_bukti_master_periodebulan"><div class="ew-table-header-caption"><?php echo $v110_bukti_master_list->periodebulan->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="periodebulan" class="<?php echo $v110_bukti_master_list->periodebulan->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $v110_bukti_master_list->SortUrl($v110_bukti_master_list->periodebulan) ?>', 2);"><div id="elh_v110_bukti_master_periodebulan" class="v110_bukti_master_periodebulan">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v110_bukti_master_list->periodebulan->caption() ?></span><span class="ew-table-header-sort"><?php if ($v110_bukti_master_list->periodebulan->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($v110_bukti_master_list->periodebulan->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v110_bukti_master_list->tglbayar->Visible) { // tglbayar ?>
	<?php if ($v110_bukti_master_list->SortUrl($v110_bukti_master_list->tglbayar) == "") { ?>
		<th data-name="tglbayar" class="<?php echo $v110_bukti_master_list->tglbayar->headerCellClass() ?>"><div id="elh_v110_bukti_master_tglbayar" class="v110_bukti_master_tglbayar"><div class="ew-table-header-caption"><?php echo $v110_bukti_master_list->tglbayar->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tglbayar" class="<?php echo $v110_bukti_master_list->tglbayar->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $v110_bukti_master_list->SortUrl($v110_bukti_master_list->tglbayar) ?>', 2);"><div id="elh_v110_bukti_master_tglbayar" class="v110_bukti_master_tglbayar">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v110_bukti_master_list->tglbayar->caption() ?></span><span class="ew-table-header-sort"><?php if ($v110_bukti_master_list->tglbayar->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($v110_bukti_master_list->tglbayar->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v110_bukti_master_list->totalbayar->Visible) { // totalbayar ?>
	<?php if ($v110_bukti_master_list->SortUrl($v110_bukti_master_list->totalbayar) == "") { ?>
		<th data-name="totalbayar" class="<?php echo $v110_bukti_master_list->totalbayar->headerCellClass() ?>"><div id="elh_v110_bukti_master_totalbayar" class="v110_bukti_master_totalbayar"><div class="ew-table-header-caption"><?php echo $v110_bukti_master_list->totalbayar->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="totalbayar" class="<?php echo $v110_bukti_master_list->totalbayar->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $v110_bukti_master_list->SortUrl($v110_bukti_master_list->totalbayar) ?>', 2);"><div id="elh_v110_bukti_master_totalbayar" class="v110_bukti_master_totalbayar">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v110_bukti_master_list->totalbayar->caption() ?></span><span class="ew-table-header-sort"><?php if ($v110_bukti_master_list->totalbayar->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($v110_bukti_master_list->totalbayar->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$v110_bukti_master_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($v110_bukti_master_list->ExportAll && $v110_bukti_master_list->isExport()) {
	$v110_bukti_master_list->StopRecord = $v110_bukti_master_list->TotalRecords;
} else {

	// Set the last record to display
	if ($v110_bukti_master_list->TotalRecords > $v110_bukti_master_list->StartRecord + $v110_bukti_master_list->DisplayRecords - 1)
		$v110_bukti_master_list->StopRecord = $v110_bukti_master_list->StartRecord + $v110_bukti_master_list->DisplayRecords - 1;
	else
		$v110_bukti_master_list->StopRecord = $v110_bukti_master_list->TotalRecords;
}
$v110_bukti_master_list->RecordCount = $v110_bukti_master_list->StartRecord - 1;
if ($v110_bukti_master_list->Recordset && !$v110_bukti_master_list->Recordset->EOF) {
	$v110_bukti_master_list->Recordset->moveFirst();
	$selectLimit = $v110_bukti_master_list->UseSelectLimit;
	if (!$selectLimit && $v110_bukti_master_list->StartRecord > 1)
		$v110_bukti_master_list->Recordset->move($v110_bukti_master_list->StartRecord - 1);
} elseif (!$v110_bukti_master->AllowAddDeleteRow && $v110_bukti_master_list->StopRecord == 0) {
	$v110_bukti_master_list->StopRecord = $v110_bukti_master->GridAddRowCount;
}

// Initialize aggregate
$v110_bukti_master->RowType = ROWTYPE_AGGREGATEINIT;
$v110_bukti_master->resetAttributes();
$v110_bukti_master_list->renderRow();
while ($v110_bukti_master_list->RecordCount < $v110_bukti_master_list->StopRecord) {
	$v110_bukti_master_list->RecordCount++;
	if ($v110_bukti_master_list->RecordCount >= $v110_bukti_master_list->StartRecord) {
		$v110_bukti_master_list->RowCount++;

		// Set up key count
		$v110_bukti_master_list->KeyCount = $v110_bukti_master_list->RowIndex;

		// Init row class and style
		$v110_bukti_master->resetAttributes();
		$v110_bukti_master->CssClass = "";
		if ($v110_bukti_master_list->isGridAdd()) {
		} else {
			$v110_bukti_master_list->loadRowValues($v110_bukti_master_list->Recordset); // Load row values
		}
		$v110_bukti_master->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$v110_bukti_master->RowAttrs->merge(["data-rowindex" => $v110_bukti_master_list->RowCount, "id" => "r" . $v110_bukti_master_list->RowCount . "_v110_bukti_master", "data-rowtype" => $v110_bukti_master->RowType]);

		// Render row
		$v110_bukti_master_list->renderRow();

		// Render list options
		$v110_bukti_master_list->renderListOptions();
?>
	<tr <?php echo $v110_bukti_master->rowAttributes() ?>>
<?php

// Render list options (body, left)
$v110_bukti_master_list->ListOptions->render("body", "left", $v110_bukti_master_list->RowCount);
?>
	<?php if ($v110_bukti_master_list->periodebulan->Visible) { // periodebulan ?>
		<td data-name="periodebulan" <?php echo $v110_bukti_master_list->periodebulan->cellAttributes() ?>>
<span id="el<?php echo $v110_bukti_master_list->RowCount ?>_v110_bukti_master_periodebulan">
<span<?php echo $v110_bukti_master_list->periodebulan->viewAttributes() ?>><?php echo $v110_bukti_master_list->periodebulan->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v110_bukti_master_list->tglbayar->Visible) { // tglbayar ?>
		<td data-name="tglbayar" <?php echo $v110_bukti_master_list->tglbayar->cellAttributes() ?>>
<span id="el<?php echo $v110_bukti_master_list->RowCount ?>_v110_bukti_master_tglbayar">
<span<?php echo $v110_bukti_master_list->tglbayar->viewAttributes() ?>><?php echo $v110_bukti_master_list->tglbayar->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v110_bukti_master_list->totalbayar->Visible) { // totalbayar ?>
		<td data-name="totalbayar" <?php echo $v110_bukti_master_list->totalbayar->cellAttributes() ?>>
<span id="el<?php echo $v110_bukti_master_list->RowCount ?>_v110_bukti_master_totalbayar">
<span<?php echo $v110_bukti_master_list->totalbayar->viewAttributes() ?>><?php echo $v110_bukti_master_list->totalbayar->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$v110_bukti_master_list->ListOptions->render("body", "right", $v110_bukti_master_list->RowCount);
?>
	</tr>
<?php
	}
	if (!$v110_bukti_master_list->isGridAdd())
		$v110_bukti_master_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
<?php if (!$v110_bukti_master->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($v110_bukti_master_list->Recordset)
	$v110_bukti_master_list->Recordset->Close();
?>
<?php if (!$v110_bukti_master_list->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$v110_bukti_master_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $v110_bukti_master_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $v110_bukti_master_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($v110_bukti_master_list->TotalRecords == 0 && !$v110_bukti_master->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $v110_bukti_master_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$v110_bukti_master_list->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<?php if (!$v110_bukti_master_list->isExport()) { ?>
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
$v110_bukti_master_list->terminate();
?>