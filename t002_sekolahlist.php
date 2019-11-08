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
$t002_sekolah_list = new t002_sekolah_list();

// Run the page
$t002_sekolah_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t002_sekolah_list->Page_Render();
?>
<?php include_once "header.php"; ?>
<?php if (!$t002_sekolah_list->isExport()) { ?>
<script>
var ft002_sekolahlist, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "list";
	ft002_sekolahlist = currentForm = new ew.Form("ft002_sekolahlist", "list");
	ft002_sekolahlist.formKeyCountName = '<?php echo $t002_sekolah_list->FormKeyCountName ?>';
	loadjs.done("ft002_sekolahlist");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php } ?>
<?php if (!$t002_sekolah_list->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($t002_sekolah_list->TotalRecords > 0 && $t002_sekolah_list->ExportOptions->visible()) { ?>
<?php $t002_sekolah_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($t002_sekolah_list->ImportOptions->visible()) { ?>
<?php $t002_sekolah_list->ImportOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$t002_sekolah_list->renderOtherOptions();
?>
<?php $t002_sekolah_list->showPageHeader(); ?>
<?php
$t002_sekolah_list->showMessage();
?>
<?php if ($t002_sekolah_list->TotalRecords > 0 || $t002_sekolah->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t002_sekolah_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t002_sekolah">
<?php if (!$t002_sekolah_list->isExport()) { ?>
<div class="card-header ew-grid-upper-panel">
<?php if (!$t002_sekolah_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $t002_sekolah_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t002_sekolah_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
<form name="ft002_sekolahlist" id="ft002_sekolahlist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t002_sekolah">
<div id="gmp_t002_sekolah" class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<?php if ($t002_sekolah_list->TotalRecords > 0 || $t002_sekolah_list->isGridEdit()) { ?>
<table id="tbl_t002_sekolahlist" class="table ew-table"><!-- .ew-table -->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t002_sekolah->RowType = ROWTYPE_HEADER;

// Render list options
$t002_sekolah_list->renderListOptions();

// Render list options (header, left)
$t002_sekolah_list->ListOptions->render("header", "left");
?>
<?php if ($t002_sekolah_list->Nama->Visible) { // Nama ?>
	<?php if ($t002_sekolah_list->SortUrl($t002_sekolah_list->Nama) == "") { ?>
		<th data-name="Nama" class="<?php echo $t002_sekolah_list->Nama->headerCellClass() ?>"><div id="elh_t002_sekolah_Nama" class="t002_sekolah_Nama"><div class="ew-table-header-caption"><?php echo $t002_sekolah_list->Nama->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Nama" class="<?php echo $t002_sekolah_list->Nama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t002_sekolah_list->SortUrl($t002_sekolah_list->Nama) ?>', 2);"><div id="elh_t002_sekolah_Nama" class="t002_sekolah_Nama">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t002_sekolah_list->Nama->caption() ?></span><span class="ew-table-header-sort"><?php if ($t002_sekolah_list->Nama->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t002_sekolah_list->Nama->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t002_sekolah_list->Alamat->Visible) { // Alamat ?>
	<?php if ($t002_sekolah_list->SortUrl($t002_sekolah_list->Alamat) == "") { ?>
		<th data-name="Alamat" class="<?php echo $t002_sekolah_list->Alamat->headerCellClass() ?>"><div id="elh_t002_sekolah_Alamat" class="t002_sekolah_Alamat"><div class="ew-table-header-caption"><?php echo $t002_sekolah_list->Alamat->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Alamat" class="<?php echo $t002_sekolah_list->Alamat->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t002_sekolah_list->SortUrl($t002_sekolah_list->Alamat) ?>', 2);"><div id="elh_t002_sekolah_Alamat" class="t002_sekolah_Alamat">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t002_sekolah_list->Alamat->caption() ?></span><span class="ew-table-header-sort"><?php if ($t002_sekolah_list->Alamat->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t002_sekolah_list->Alamat->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t002_sekolah_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($t002_sekolah_list->ExportAll && $t002_sekolah_list->isExport()) {
	$t002_sekolah_list->StopRecord = $t002_sekolah_list->TotalRecords;
} else {

	// Set the last record to display
	if ($t002_sekolah_list->TotalRecords > $t002_sekolah_list->StartRecord + $t002_sekolah_list->DisplayRecords - 1)
		$t002_sekolah_list->StopRecord = $t002_sekolah_list->StartRecord + $t002_sekolah_list->DisplayRecords - 1;
	else
		$t002_sekolah_list->StopRecord = $t002_sekolah_list->TotalRecords;
}
$t002_sekolah_list->RecordCount = $t002_sekolah_list->StartRecord - 1;
if ($t002_sekolah_list->Recordset && !$t002_sekolah_list->Recordset->EOF) {
	$t002_sekolah_list->Recordset->moveFirst();
	$selectLimit = $t002_sekolah_list->UseSelectLimit;
	if (!$selectLimit && $t002_sekolah_list->StartRecord > 1)
		$t002_sekolah_list->Recordset->move($t002_sekolah_list->StartRecord - 1);
} elseif (!$t002_sekolah->AllowAddDeleteRow && $t002_sekolah_list->StopRecord == 0) {
	$t002_sekolah_list->StopRecord = $t002_sekolah->GridAddRowCount;
}

// Initialize aggregate
$t002_sekolah->RowType = ROWTYPE_AGGREGATEINIT;
$t002_sekolah->resetAttributes();
$t002_sekolah_list->renderRow();
while ($t002_sekolah_list->RecordCount < $t002_sekolah_list->StopRecord) {
	$t002_sekolah_list->RecordCount++;
	if ($t002_sekolah_list->RecordCount >= $t002_sekolah_list->StartRecord) {
		$t002_sekolah_list->RowCount++;

		// Set up key count
		$t002_sekolah_list->KeyCount = $t002_sekolah_list->RowIndex;

		// Init row class and style
		$t002_sekolah->resetAttributes();
		$t002_sekolah->CssClass = "";
		if ($t002_sekolah_list->isGridAdd()) {
		} else {
			$t002_sekolah_list->loadRowValues($t002_sekolah_list->Recordset); // Load row values
		}
		$t002_sekolah->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$t002_sekolah->RowAttrs->merge(["data-rowindex" => $t002_sekolah_list->RowCount, "id" => "r" . $t002_sekolah_list->RowCount . "_t002_sekolah", "data-rowtype" => $t002_sekolah->RowType]);

		// Render row
		$t002_sekolah_list->renderRow();

		// Render list options
		$t002_sekolah_list->renderListOptions();
?>
	<tr <?php echo $t002_sekolah->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t002_sekolah_list->ListOptions->render("body", "left", $t002_sekolah_list->RowCount);
?>
	<?php if ($t002_sekolah_list->Nama->Visible) { // Nama ?>
		<td data-name="Nama" <?php echo $t002_sekolah_list->Nama->cellAttributes() ?>>
<span id="el<?php echo $t002_sekolah_list->RowCount ?>_t002_sekolah_Nama">
<span<?php echo $t002_sekolah_list->Nama->viewAttributes() ?>><?php echo $t002_sekolah_list->Nama->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t002_sekolah_list->Alamat->Visible) { // Alamat ?>
		<td data-name="Alamat" <?php echo $t002_sekolah_list->Alamat->cellAttributes() ?>>
<span id="el<?php echo $t002_sekolah_list->RowCount ?>_t002_sekolah_Alamat">
<span<?php echo $t002_sekolah_list->Alamat->viewAttributes() ?>><?php echo $t002_sekolah_list->Alamat->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t002_sekolah_list->ListOptions->render("body", "right", $t002_sekolah_list->RowCount);
?>
	</tr>
<?php
	}
	if (!$t002_sekolah_list->isGridAdd())
		$t002_sekolah_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
<?php if (!$t002_sekolah->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t002_sekolah_list->Recordset)
	$t002_sekolah_list->Recordset->Close();
?>
<?php if (!$t002_sekolah_list->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$t002_sekolah_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $t002_sekolah_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t002_sekolah_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t002_sekolah_list->TotalRecords == 0 && !$t002_sekolah->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t002_sekolah_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t002_sekolah_list->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<?php if (!$t002_sekolah_list->isExport()) { ?>
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
$t002_sekolah_list->terminate();
?>