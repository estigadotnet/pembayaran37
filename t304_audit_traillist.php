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
$t304_audit_trail_list = new t304_audit_trail_list();

// Run the page
$t304_audit_trail_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t304_audit_trail_list->Page_Render();
?>
<?php include_once "header.php"; ?>
<?php if (!$t304_audit_trail_list->isExport()) { ?>
<script>
var ft304_audit_traillist, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "list";
	ft304_audit_traillist = currentForm = new ew.Form("ft304_audit_traillist", "list");
	ft304_audit_traillist.formKeyCountName = '<?php echo $t304_audit_trail_list->FormKeyCountName ?>';
	loadjs.done("ft304_audit_traillist");
});
var ft304_audit_traillistsrch;
loadjs.ready("head", function() {

	// Form object for search
	ft304_audit_traillistsrch = currentSearchForm = new ew.Form("ft304_audit_traillistsrch");

	// Dynamic selection lists
	// Filters

	ft304_audit_traillistsrch.filterList = <?php echo $t304_audit_trail_list->getFilterList() ?>;
	loadjs.done("ft304_audit_traillistsrch");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php } ?>
<?php if (!$t304_audit_trail_list->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($t304_audit_trail_list->TotalRecords > 0 && $t304_audit_trail_list->ExportOptions->visible()) { ?>
<?php $t304_audit_trail_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($t304_audit_trail_list->ImportOptions->visible()) { ?>
<?php $t304_audit_trail_list->ImportOptions->render("body") ?>
<?php } ?>
<?php if ($t304_audit_trail_list->SearchOptions->visible()) { ?>
<?php $t304_audit_trail_list->SearchOptions->render("body") ?>
<?php } ?>
<?php if ($t304_audit_trail_list->FilterOptions->visible()) { ?>
<?php $t304_audit_trail_list->FilterOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$t304_audit_trail_list->renderOtherOptions();
?>
<?php if ($Security->CanSearch()) { ?>
<?php if (!$t304_audit_trail_list->isExport() && !$t304_audit_trail->CurrentAction) { ?>
<form name="ft304_audit_traillistsrch" id="ft304_audit_traillistsrch" class="form-inline ew-form ew-ext-search-form" action="<?php echo CurrentPageName() ?>">
<div id="ft304_audit_traillistsrch-search-panel" class="<?php echo $t304_audit_trail_list->SearchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<input type="hidden" name="t" value="t304_audit_trail">
	<div class="ew-extended-search">
<div id="xsr_<?php echo $t304_audit_trail_list->SearchRowCount + 1 ?>" class="ew-row d-sm-flex">
	<div class="ew-quick-search input-group">
		<input type="text" name="<?php echo Config("TABLE_BASIC_SEARCH") ?>" id="<?php echo Config("TABLE_BASIC_SEARCH") ?>" class="form-control" value="<?php echo HtmlEncode($t304_audit_trail_list->BasicSearch->getKeyword()) ?>" placeholder="<?php echo HtmlEncode($Language->phrase("Search")) ?>">
		<input type="hidden" name="<?php echo Config("TABLE_BASIC_SEARCH_TYPE") ?>" id="<?php echo Config("TABLE_BASIC_SEARCH_TYPE") ?>" value="<?php echo HtmlEncode($t304_audit_trail_list->BasicSearch->getType()) ?>">
		<div class="input-group-append">
			<button class="btn btn-primary" name="btn-submit" id="btn-submit" type="submit"><?php echo $Language->phrase("SearchBtn") ?></button>
			<button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle dropdown-toggle-split" aria-haspopup="true" aria-expanded="false"><span id="searchtype"><?php echo $t304_audit_trail_list->BasicSearch->getTypeNameShort() ?></span></button>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item<?php if ($t304_audit_trail_list->BasicSearch->getType() == "") { ?> active<?php } ?>" href="#" onclick="return ew.setSearchType(this);"><?php echo $Language->phrase("QuickSearchAuto") ?></a>
				<a class="dropdown-item<?php if ($t304_audit_trail_list->BasicSearch->getType() == "=") { ?> active<?php } ?>" href="#" onclick="return ew.setSearchType(this, '=');"><?php echo $Language->phrase("QuickSearchExact") ?></a>
				<a class="dropdown-item<?php if ($t304_audit_trail_list->BasicSearch->getType() == "AND") { ?> active<?php } ?>" href="#" onclick="return ew.setSearchType(this, 'AND');"><?php echo $Language->phrase("QuickSearchAll") ?></a>
				<a class="dropdown-item<?php if ($t304_audit_trail_list->BasicSearch->getType() == "OR") { ?> active<?php } ?>" href="#" onclick="return ew.setSearchType(this, 'OR');"><?php echo $Language->phrase("QuickSearchAny") ?></a>
			</div>
		</div>
	</div>
</div>
	</div><!-- /.ew-extended-search -->
</div><!-- /.ew-search-panel -->
</form>
<?php } ?>
<?php } ?>
<?php $t304_audit_trail_list->showPageHeader(); ?>
<?php
$t304_audit_trail_list->showMessage();
?>
<?php if ($t304_audit_trail_list->TotalRecords > 0 || $t304_audit_trail->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t304_audit_trail_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t304_audit_trail">
<?php if (!$t304_audit_trail_list->isExport()) { ?>
<div class="card-header ew-grid-upper-panel">
<?php if (!$t304_audit_trail_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $t304_audit_trail_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t304_audit_trail_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
<form name="ft304_audit_traillist" id="ft304_audit_traillist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t304_audit_trail">
<div id="gmp_t304_audit_trail" class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<?php if ($t304_audit_trail_list->TotalRecords > 0 || $t304_audit_trail_list->isGridEdit()) { ?>
<table id="tbl_t304_audit_traillist" class="table ew-table"><!-- .ew-table -->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t304_audit_trail->RowType = ROWTYPE_HEADER;

// Render list options
$t304_audit_trail_list->renderListOptions();

// Render list options (header, left)
$t304_audit_trail_list->ListOptions->render("header", "left");
?>
<?php if ($t304_audit_trail_list->id->Visible) { // id ?>
	<?php if ($t304_audit_trail_list->SortUrl($t304_audit_trail_list->id) == "") { ?>
		<th data-name="id" class="<?php echo $t304_audit_trail_list->id->headerCellClass() ?>"><div id="elh_t304_audit_trail_id" class="t304_audit_trail_id"><div class="ew-table-header-caption"><?php echo $t304_audit_trail_list->id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="id" class="<?php echo $t304_audit_trail_list->id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t304_audit_trail_list->SortUrl($t304_audit_trail_list->id) ?>', 2);"><div id="elh_t304_audit_trail_id" class="t304_audit_trail_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t304_audit_trail_list->id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t304_audit_trail_list->id->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t304_audit_trail_list->id->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t304_audit_trail_list->datetime->Visible) { // datetime ?>
	<?php if ($t304_audit_trail_list->SortUrl($t304_audit_trail_list->datetime) == "") { ?>
		<th data-name="datetime" class="<?php echo $t304_audit_trail_list->datetime->headerCellClass() ?>"><div id="elh_t304_audit_trail_datetime" class="t304_audit_trail_datetime"><div class="ew-table-header-caption"><?php echo $t304_audit_trail_list->datetime->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="datetime" class="<?php echo $t304_audit_trail_list->datetime->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t304_audit_trail_list->SortUrl($t304_audit_trail_list->datetime) ?>', 2);"><div id="elh_t304_audit_trail_datetime" class="t304_audit_trail_datetime">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t304_audit_trail_list->datetime->caption() ?></span><span class="ew-table-header-sort"><?php if ($t304_audit_trail_list->datetime->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t304_audit_trail_list->datetime->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t304_audit_trail_list->script->Visible) { // script ?>
	<?php if ($t304_audit_trail_list->SortUrl($t304_audit_trail_list->script) == "") { ?>
		<th data-name="script" class="<?php echo $t304_audit_trail_list->script->headerCellClass() ?>"><div id="elh_t304_audit_trail_script" class="t304_audit_trail_script"><div class="ew-table-header-caption"><?php echo $t304_audit_trail_list->script->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="script" class="<?php echo $t304_audit_trail_list->script->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t304_audit_trail_list->SortUrl($t304_audit_trail_list->script) ?>', 2);"><div id="elh_t304_audit_trail_script" class="t304_audit_trail_script">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t304_audit_trail_list->script->caption() ?><?php echo $Language->phrase("SrchLegend") ?></span><span class="ew-table-header-sort"><?php if ($t304_audit_trail_list->script->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t304_audit_trail_list->script->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t304_audit_trail_list->user->Visible) { // user ?>
	<?php if ($t304_audit_trail_list->SortUrl($t304_audit_trail_list->user) == "") { ?>
		<th data-name="user" class="<?php echo $t304_audit_trail_list->user->headerCellClass() ?>"><div id="elh_t304_audit_trail_user" class="t304_audit_trail_user"><div class="ew-table-header-caption"><?php echo $t304_audit_trail_list->user->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="user" class="<?php echo $t304_audit_trail_list->user->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t304_audit_trail_list->SortUrl($t304_audit_trail_list->user) ?>', 2);"><div id="elh_t304_audit_trail_user" class="t304_audit_trail_user">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t304_audit_trail_list->user->caption() ?><?php echo $Language->phrase("SrchLegend") ?></span><span class="ew-table-header-sort"><?php if ($t304_audit_trail_list->user->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t304_audit_trail_list->user->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t304_audit_trail_list->_action->Visible) { // action ?>
	<?php if ($t304_audit_trail_list->SortUrl($t304_audit_trail_list->_action) == "") { ?>
		<th data-name="_action" class="<?php echo $t304_audit_trail_list->_action->headerCellClass() ?>"><div id="elh_t304_audit_trail__action" class="t304_audit_trail__action"><div class="ew-table-header-caption"><?php echo $t304_audit_trail_list->_action->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="_action" class="<?php echo $t304_audit_trail_list->_action->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t304_audit_trail_list->SortUrl($t304_audit_trail_list->_action) ?>', 2);"><div id="elh_t304_audit_trail__action" class="t304_audit_trail__action">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t304_audit_trail_list->_action->caption() ?><?php echo $Language->phrase("SrchLegend") ?></span><span class="ew-table-header-sort"><?php if ($t304_audit_trail_list->_action->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t304_audit_trail_list->_action->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t304_audit_trail_list->_table->Visible) { // table ?>
	<?php if ($t304_audit_trail_list->SortUrl($t304_audit_trail_list->_table) == "") { ?>
		<th data-name="_table" class="<?php echo $t304_audit_trail_list->_table->headerCellClass() ?>"><div id="elh_t304_audit_trail__table" class="t304_audit_trail__table"><div class="ew-table-header-caption"><?php echo $t304_audit_trail_list->_table->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="_table" class="<?php echo $t304_audit_trail_list->_table->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t304_audit_trail_list->SortUrl($t304_audit_trail_list->_table) ?>', 2);"><div id="elh_t304_audit_trail__table" class="t304_audit_trail__table">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t304_audit_trail_list->_table->caption() ?><?php echo $Language->phrase("SrchLegend") ?></span><span class="ew-table-header-sort"><?php if ($t304_audit_trail_list->_table->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t304_audit_trail_list->_table->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t304_audit_trail_list->field->Visible) { // field ?>
	<?php if ($t304_audit_trail_list->SortUrl($t304_audit_trail_list->field) == "") { ?>
		<th data-name="field" class="<?php echo $t304_audit_trail_list->field->headerCellClass() ?>"><div id="elh_t304_audit_trail_field" class="t304_audit_trail_field"><div class="ew-table-header-caption"><?php echo $t304_audit_trail_list->field->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="field" class="<?php echo $t304_audit_trail_list->field->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t304_audit_trail_list->SortUrl($t304_audit_trail_list->field) ?>', 2);"><div id="elh_t304_audit_trail_field" class="t304_audit_trail_field">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t304_audit_trail_list->field->caption() ?><?php echo $Language->phrase("SrchLegend") ?></span><span class="ew-table-header-sort"><?php if ($t304_audit_trail_list->field->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t304_audit_trail_list->field->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t304_audit_trail_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($t304_audit_trail_list->ExportAll && $t304_audit_trail_list->isExport()) {
	$t304_audit_trail_list->StopRecord = $t304_audit_trail_list->TotalRecords;
} else {

	// Set the last record to display
	if ($t304_audit_trail_list->TotalRecords > $t304_audit_trail_list->StartRecord + $t304_audit_trail_list->DisplayRecords - 1)
		$t304_audit_trail_list->StopRecord = $t304_audit_trail_list->StartRecord + $t304_audit_trail_list->DisplayRecords - 1;
	else
		$t304_audit_trail_list->StopRecord = $t304_audit_trail_list->TotalRecords;
}
$t304_audit_trail_list->RecordCount = $t304_audit_trail_list->StartRecord - 1;
if ($t304_audit_trail_list->Recordset && !$t304_audit_trail_list->Recordset->EOF) {
	$t304_audit_trail_list->Recordset->moveFirst();
	$selectLimit = $t304_audit_trail_list->UseSelectLimit;
	if (!$selectLimit && $t304_audit_trail_list->StartRecord > 1)
		$t304_audit_trail_list->Recordset->move($t304_audit_trail_list->StartRecord - 1);
} elseif (!$t304_audit_trail->AllowAddDeleteRow && $t304_audit_trail_list->StopRecord == 0) {
	$t304_audit_trail_list->StopRecord = $t304_audit_trail->GridAddRowCount;
}

// Initialize aggregate
$t304_audit_trail->RowType = ROWTYPE_AGGREGATEINIT;
$t304_audit_trail->resetAttributes();
$t304_audit_trail_list->renderRow();
while ($t304_audit_trail_list->RecordCount < $t304_audit_trail_list->StopRecord) {
	$t304_audit_trail_list->RecordCount++;
	if ($t304_audit_trail_list->RecordCount >= $t304_audit_trail_list->StartRecord) {
		$t304_audit_trail_list->RowCount++;

		// Set up key count
		$t304_audit_trail_list->KeyCount = $t304_audit_trail_list->RowIndex;

		// Init row class and style
		$t304_audit_trail->resetAttributes();
		$t304_audit_trail->CssClass = "";
		if ($t304_audit_trail_list->isGridAdd()) {
		} else {
			$t304_audit_trail_list->loadRowValues($t304_audit_trail_list->Recordset); // Load row values
		}
		$t304_audit_trail->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$t304_audit_trail->RowAttrs->merge(["data-rowindex" => $t304_audit_trail_list->RowCount, "id" => "r" . $t304_audit_trail_list->RowCount . "_t304_audit_trail", "data-rowtype" => $t304_audit_trail->RowType]);

		// Render row
		$t304_audit_trail_list->renderRow();

		// Render list options
		$t304_audit_trail_list->renderListOptions();
?>
	<tr <?php echo $t304_audit_trail->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t304_audit_trail_list->ListOptions->render("body", "left", $t304_audit_trail_list->RowCount);
?>
	<?php if ($t304_audit_trail_list->id->Visible) { // id ?>
		<td data-name="id" <?php echo $t304_audit_trail_list->id->cellAttributes() ?>>
<span id="el<?php echo $t304_audit_trail_list->RowCount ?>_t304_audit_trail_id">
<span<?php echo $t304_audit_trail_list->id->viewAttributes() ?>><?php echo $t304_audit_trail_list->id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t304_audit_trail_list->datetime->Visible) { // datetime ?>
		<td data-name="datetime" <?php echo $t304_audit_trail_list->datetime->cellAttributes() ?>>
<span id="el<?php echo $t304_audit_trail_list->RowCount ?>_t304_audit_trail_datetime">
<span<?php echo $t304_audit_trail_list->datetime->viewAttributes() ?>><?php echo $t304_audit_trail_list->datetime->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t304_audit_trail_list->script->Visible) { // script ?>
		<td data-name="script" <?php echo $t304_audit_trail_list->script->cellAttributes() ?>>
<span id="el<?php echo $t304_audit_trail_list->RowCount ?>_t304_audit_trail_script">
<span<?php echo $t304_audit_trail_list->script->viewAttributes() ?>><?php echo $t304_audit_trail_list->script->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t304_audit_trail_list->user->Visible) { // user ?>
		<td data-name="user" <?php echo $t304_audit_trail_list->user->cellAttributes() ?>>
<span id="el<?php echo $t304_audit_trail_list->RowCount ?>_t304_audit_trail_user">
<span<?php echo $t304_audit_trail_list->user->viewAttributes() ?>><?php echo $t304_audit_trail_list->user->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t304_audit_trail_list->_action->Visible) { // action ?>
		<td data-name="_action" <?php echo $t304_audit_trail_list->_action->cellAttributes() ?>>
<span id="el<?php echo $t304_audit_trail_list->RowCount ?>_t304_audit_trail__action">
<span<?php echo $t304_audit_trail_list->_action->viewAttributes() ?>><?php echo $t304_audit_trail_list->_action->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t304_audit_trail_list->_table->Visible) { // table ?>
		<td data-name="_table" <?php echo $t304_audit_trail_list->_table->cellAttributes() ?>>
<span id="el<?php echo $t304_audit_trail_list->RowCount ?>_t304_audit_trail__table">
<span<?php echo $t304_audit_trail_list->_table->viewAttributes() ?>><?php echo $t304_audit_trail_list->_table->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t304_audit_trail_list->field->Visible) { // field ?>
		<td data-name="field" <?php echo $t304_audit_trail_list->field->cellAttributes() ?>>
<span id="el<?php echo $t304_audit_trail_list->RowCount ?>_t304_audit_trail_field">
<span<?php echo $t304_audit_trail_list->field->viewAttributes() ?>><?php echo $t304_audit_trail_list->field->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t304_audit_trail_list->ListOptions->render("body", "right", $t304_audit_trail_list->RowCount);
?>
	</tr>
<?php
	}
	if (!$t304_audit_trail_list->isGridAdd())
		$t304_audit_trail_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
<?php if (!$t304_audit_trail->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t304_audit_trail_list->Recordset)
	$t304_audit_trail_list->Recordset->Close();
?>
<?php if (!$t304_audit_trail_list->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$t304_audit_trail_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $t304_audit_trail_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t304_audit_trail_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t304_audit_trail_list->TotalRecords == 0 && !$t304_audit_trail->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t304_audit_trail_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t304_audit_trail_list->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<?php if (!$t304_audit_trail_list->isExport()) { ?>
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
$t304_audit_trail_list->terminate();
?>