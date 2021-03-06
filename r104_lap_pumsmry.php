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
$r104_lap_pum_summary = new r104_lap_pum_summary();

// Run the page
$r104_lap_pum_summary->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$r104_lap_pum_summary->Page_Render();
?>
<?php if (!$DashboardReport) { ?>
<?php include_once "header.php"; ?>
<?php } ?>
<?php if (!$r104_lap_pum_summary->isExport() && !$r104_lap_pum_summary->DrillDown && !$DashboardReport) { ?>
<script>
var fsummary, currentPageID;
loadjs.ready("head", function() {

	// Form object for search
	fsummary = currentForm = new ew.Form("fsummary", "summary");
	currentPageID = ew.PAGE_ID = "summary";

	// Validate function for search
	fsummary.validate = function(fobj) {
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
	fsummary.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	fsummary.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	fsummary.lists["x_tahunajaran"] = <?php echo $r104_lap_pum_summary->tahunajaran->Lookup->toClientList($r104_lap_pum_summary) ?>;
	fsummary.lists["x_tahunajaran"].options = <?php echo JsonEncode($r104_lap_pum_summary->tahunajaran->lookupOptions()) ?>;
	fsummary.lists["x_sekolahnama"] = <?php echo $r104_lap_pum_summary->sekolahnama->Lookup->toClientList($r104_lap_pum_summary) ?>;
	fsummary.lists["x_sekolahnama"].options = <?php echo JsonEncode($r104_lap_pum_summary->sekolahnama->lookupOptions()) ?>;
	fsummary.lists["x_kelasnama"] = <?php echo $r104_lap_pum_summary->kelasnama->Lookup->toClientList($r104_lap_pum_summary) ?>;
	fsummary.lists["x_kelasnama"].options = <?php echo JsonEncode($r104_lap_pum_summary->kelasnama->lookupOptions()) ?>;
	fsummary.lists["x_nomorinduk"] = <?php echo $r104_lap_pum_summary->nomorinduk->Lookup->toClientList($r104_lap_pum_summary) ?>;
	fsummary.lists["x_nomorinduk"].options = <?php echo JsonEncode($r104_lap_pum_summary->nomorinduk->lookupOptions()) ?>;
	fsummary.lists["x_siswanama"] = <?php echo $r104_lap_pum_summary->siswanama->Lookup->toClientList($r104_lap_pum_summary) ?>;
	fsummary.lists["x_siswanama"].options = <?php echo JsonEncode($r104_lap_pum_summary->siswanama->lookupOptions()) ?>;
	fsummary.lists["x_iurannama"] = <?php echo $r104_lap_pum_summary->iurannama->Lookup->toClientList($r104_lap_pum_summary) ?>;
	fsummary.lists["x_iurannama"].options = <?php echo JsonEncode($r104_lap_pum_summary->iurannama->lookupOptions()) ?>;
	fsummary.lists["x_periode"] = <?php echo $r104_lap_pum_summary->periode->Lookup->toClientList($r104_lap_pum_summary) ?>;
	fsummary.lists["x_periode"].options = <?php echo JsonEncode($r104_lap_pum_summary->periode->lookupOptions()) ?>;

	// Filters
	fsummary.filterList = <?php echo $r104_lap_pum_summary->getFilterList() ?>;
	loadjs.done("fsummary");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php } ?>
<a id="top"></a>
<?php if ((!$r104_lap_pum_summary->isExport() || $r104_lap_pum_summary->isExport("print")) && !$DashboardReport) { ?>
<!-- Content Container -->
<div id="ew-report" class="ew-report container-fluid">
<?php } ?>
<?php if ($r104_lap_pum_summary->ShowCurrentFilter) { ?>
<?php $r104_lap_pum_summary->showFilterList() ?>
<?php } ?>
<div class="btn-toolbar ew-toolbar">
<?php
if (!$r104_lap_pum_summary->DrillDownInPanel) {
	$r104_lap_pum_summary->ExportOptions->render("body");
	$r104_lap_pum_summary->SearchOptions->render("body");
	$r104_lap_pum_summary->FilterOptions->render("body");
}
?>
</div>
<?php $r104_lap_pum_summary->showPageHeader(); ?>
<?php
$r104_lap_pum_summary->showMessage();
?>
<?php if ((!$r104_lap_pum_summary->isExport() || $r104_lap_pum_summary->isExport("print")) && !$DashboardReport) { ?>
<div class="row">
<?php } ?>
<?php if ((!$r104_lap_pum_summary->isExport() || $r104_lap_pum_summary->isExport("print")) && !$DashboardReport) { ?>
<!-- Center Container -->
<div id="ew-center" class="<?php echo $r104_lap_pum_summary->CenterContentClass ?>">
<?php } ?>
<!-- Summary report (begin) -->
<div id="report_summary">
<?php if (!$r104_lap_pum_summary->isExport() && !$r104_lap_pum_summary->DrillDown && !$DashboardReport) { ?>
<?php if ($Security->CanSearch()) { ?>
<?php if (!$r104_lap_pum_summary->isExport() && !$r104_lap_pum->CurrentAction) { ?>
<form name="fsummary" id="fsummary" class="form-inline ew-form ew-ext-search-form" action="<?php echo CurrentPageName() ?>">
<div id="fsummary-search-panel" class="<?php echo $r104_lap_pum_summary->SearchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<input type="hidden" name="t" value="r104_lap_pum">
	<div class="ew-extended-search">
<?php

// Render search row
$r104_lap_pum->RowType = ROWTYPE_SEARCH;
$r104_lap_pum->resetAttributes();
$r104_lap_pum_summary->renderRow();
?>
<?php if ($r104_lap_pum_summary->tahunajaran->Visible) { // tahunajaran ?>
	<?php
		$r104_lap_pum_summary->SearchColumnCount++;
		if (($r104_lap_pum_summary->SearchColumnCount - 1) % $r104_lap_pum_summary->SearchFieldsPerRow == 0) {
			$r104_lap_pum_summary->SearchRowCount++;
	?>
<div id="xsr_<?php echo $r104_lap_pum_summary->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_tahunajaran" class="ew-cell form-group">
		<label for="x_tahunajaran" class="ew-search-caption ew-label"><?php echo $r104_lap_pum_summary->tahunajaran->caption() ?></label>
		<span id="el_r104_lap_pum_tahunajaran" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_tahunajaran"><?php echo EmptyValue(strval($r104_lap_pum_summary->tahunajaran->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $r104_lap_pum_summary->tahunajaran->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($r104_lap_pum_summary->tahunajaran->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($r104_lap_pum_summary->tahunajaran->ReadOnly || $r104_lap_pum_summary->tahunajaran->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_tahunajaran',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $r104_lap_pum_summary->tahunajaran->Lookup->getParamTag($r104_lap_pum_summary, "p_x_tahunajaran") ?>
<input type="hidden" data-table="r104_lap_pum" data-field="x_tahunajaran" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $r104_lap_pum_summary->tahunajaran->displayValueSeparatorAttribute() ?>" name="x_tahunajaran" id="x_tahunajaran" value="<?php echo $r104_lap_pum_summary->tahunajaran->AdvancedSearch->SearchValue ?>"<?php echo $r104_lap_pum_summary->tahunajaran->editAttributes() ?>>
</span>
	</div>
	<?php if ($r104_lap_pum_summary->SearchColumnCount % $r104_lap_pum_summary->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($r104_lap_pum_summary->sekolahnama->Visible) { // sekolahnama ?>
	<?php
		$r104_lap_pum_summary->SearchColumnCount++;
		if (($r104_lap_pum_summary->SearchColumnCount - 1) % $r104_lap_pum_summary->SearchFieldsPerRow == 0) {
			$r104_lap_pum_summary->SearchRowCount++;
	?>
<div id="xsr_<?php echo $r104_lap_pum_summary->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_sekolahnama" class="ew-cell form-group">
		<label for="x_sekolahnama" class="ew-search-caption ew-label"><?php echo $r104_lap_pum_summary->sekolahnama->caption() ?></label>
		<span id="el_r104_lap_pum_sekolahnama" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_sekolahnama"><?php echo EmptyValue(strval($r104_lap_pum_summary->sekolahnama->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $r104_lap_pum_summary->sekolahnama->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($r104_lap_pum_summary->sekolahnama->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($r104_lap_pum_summary->sekolahnama->ReadOnly || $r104_lap_pum_summary->sekolahnama->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_sekolahnama',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $r104_lap_pum_summary->sekolahnama->Lookup->getParamTag($r104_lap_pum_summary, "p_x_sekolahnama") ?>
<input type="hidden" data-table="r104_lap_pum" data-field="x_sekolahnama" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $r104_lap_pum_summary->sekolahnama->displayValueSeparatorAttribute() ?>" name="x_sekolahnama" id="x_sekolahnama" value="<?php echo $r104_lap_pum_summary->sekolahnama->AdvancedSearch->SearchValue ?>"<?php echo $r104_lap_pum_summary->sekolahnama->editAttributes() ?>>
</span>
	</div>
	<?php if ($r104_lap_pum_summary->SearchColumnCount % $r104_lap_pum_summary->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($r104_lap_pum_summary->kelasnama->Visible) { // kelasnama ?>
	<?php
		$r104_lap_pum_summary->SearchColumnCount++;
		if (($r104_lap_pum_summary->SearchColumnCount - 1) % $r104_lap_pum_summary->SearchFieldsPerRow == 0) {
			$r104_lap_pum_summary->SearchRowCount++;
	?>
<div id="xsr_<?php echo $r104_lap_pum_summary->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_kelasnama" class="ew-cell form-group">
		<label for="x_kelasnama" class="ew-search-caption ew-label"><?php echo $r104_lap_pum_summary->kelasnama->caption() ?></label>
		<span id="el_r104_lap_pum_kelasnama" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_kelasnama"><?php echo EmptyValue(strval($r104_lap_pum_summary->kelasnama->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $r104_lap_pum_summary->kelasnama->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($r104_lap_pum_summary->kelasnama->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($r104_lap_pum_summary->kelasnama->ReadOnly || $r104_lap_pum_summary->kelasnama->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_kelasnama',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $r104_lap_pum_summary->kelasnama->Lookup->getParamTag($r104_lap_pum_summary, "p_x_kelasnama") ?>
<input type="hidden" data-table="r104_lap_pum" data-field="x_kelasnama" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $r104_lap_pum_summary->kelasnama->displayValueSeparatorAttribute() ?>" name="x_kelasnama" id="x_kelasnama" value="<?php echo $r104_lap_pum_summary->kelasnama->AdvancedSearch->SearchValue ?>"<?php echo $r104_lap_pum_summary->kelasnama->editAttributes() ?>>
</span>
	</div>
	<?php if ($r104_lap_pum_summary->SearchColumnCount % $r104_lap_pum_summary->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($r104_lap_pum_summary->nomorinduk->Visible) { // nomorinduk ?>
	<?php
		$r104_lap_pum_summary->SearchColumnCount++;
		if (($r104_lap_pum_summary->SearchColumnCount - 1) % $r104_lap_pum_summary->SearchFieldsPerRow == 0) {
			$r104_lap_pum_summary->SearchRowCount++;
	?>
<div id="xsr_<?php echo $r104_lap_pum_summary->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_nomorinduk" class="ew-cell form-group">
		<label for="x_nomorinduk" class="ew-search-caption ew-label"><?php echo $r104_lap_pum_summary->nomorinduk->caption() ?></label>
		<span id="el_r104_lap_pum_nomorinduk" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_nomorinduk"><?php echo EmptyValue(strval($r104_lap_pum_summary->nomorinduk->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $r104_lap_pum_summary->nomorinduk->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($r104_lap_pum_summary->nomorinduk->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($r104_lap_pum_summary->nomorinduk->ReadOnly || $r104_lap_pum_summary->nomorinduk->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_nomorinduk',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $r104_lap_pum_summary->nomorinduk->Lookup->getParamTag($r104_lap_pum_summary, "p_x_nomorinduk") ?>
<input type="hidden" data-table="r104_lap_pum" data-field="x_nomorinduk" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $r104_lap_pum_summary->nomorinduk->displayValueSeparatorAttribute() ?>" name="x_nomorinduk" id="x_nomorinduk" value="<?php echo $r104_lap_pum_summary->nomorinduk->AdvancedSearch->SearchValue ?>"<?php echo $r104_lap_pum_summary->nomorinduk->editAttributes() ?>>
</span>
	</div>
	<?php if ($r104_lap_pum_summary->SearchColumnCount % $r104_lap_pum_summary->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($r104_lap_pum_summary->siswanama->Visible) { // siswanama ?>
	<?php
		$r104_lap_pum_summary->SearchColumnCount++;
		if (($r104_lap_pum_summary->SearchColumnCount - 1) % $r104_lap_pum_summary->SearchFieldsPerRow == 0) {
			$r104_lap_pum_summary->SearchRowCount++;
	?>
<div id="xsr_<?php echo $r104_lap_pum_summary->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_siswanama" class="ew-cell form-group">
		<label for="x_siswanama" class="ew-search-caption ew-label"><?php echo $r104_lap_pum_summary->siswanama->caption() ?></label>
		<span id="el_r104_lap_pum_siswanama" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_siswanama"><?php echo EmptyValue(strval($r104_lap_pum_summary->siswanama->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $r104_lap_pum_summary->siswanama->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($r104_lap_pum_summary->siswanama->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($r104_lap_pum_summary->siswanama->ReadOnly || $r104_lap_pum_summary->siswanama->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_siswanama',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $r104_lap_pum_summary->siswanama->Lookup->getParamTag($r104_lap_pum_summary, "p_x_siswanama") ?>
<input type="hidden" data-table="r104_lap_pum" data-field="x_siswanama" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $r104_lap_pum_summary->siswanama->displayValueSeparatorAttribute() ?>" name="x_siswanama" id="x_siswanama" value="<?php echo $r104_lap_pum_summary->siswanama->AdvancedSearch->SearchValue ?>"<?php echo $r104_lap_pum_summary->siswanama->editAttributes() ?>>
</span>
	</div>
	<?php if ($r104_lap_pum_summary->SearchColumnCount % $r104_lap_pum_summary->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($r104_lap_pum_summary->iurannama->Visible) { // iurannama ?>
	<?php
		$r104_lap_pum_summary->SearchColumnCount++;
		if (($r104_lap_pum_summary->SearchColumnCount - 1) % $r104_lap_pum_summary->SearchFieldsPerRow == 0) {
			$r104_lap_pum_summary->SearchRowCount++;
	?>
<div id="xsr_<?php echo $r104_lap_pum_summary->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_iurannama" class="ew-cell form-group">
		<label for="x_iurannama" class="ew-search-caption ew-label"><?php echo $r104_lap_pum_summary->iurannama->caption() ?></label>
		<span id="el_r104_lap_pum_iurannama" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_iurannama"><?php echo EmptyValue(strval($r104_lap_pum_summary->iurannama->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $r104_lap_pum_summary->iurannama->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($r104_lap_pum_summary->iurannama->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($r104_lap_pum_summary->iurannama->ReadOnly || $r104_lap_pum_summary->iurannama->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_iurannama',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $r104_lap_pum_summary->iurannama->Lookup->getParamTag($r104_lap_pum_summary, "p_x_iurannama") ?>
<input type="hidden" data-table="r104_lap_pum" data-field="x_iurannama" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $r104_lap_pum_summary->iurannama->displayValueSeparatorAttribute() ?>" name="x_iurannama" id="x_iurannama" value="<?php echo $r104_lap_pum_summary->iurannama->AdvancedSearch->SearchValue ?>"<?php echo $r104_lap_pum_summary->iurannama->editAttributes() ?>>
</span>
	</div>
	<?php if ($r104_lap_pum_summary->SearchColumnCount % $r104_lap_pum_summary->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($r104_lap_pum_summary->periode->Visible) { // periode ?>
	<?php
		$r104_lap_pum_summary->SearchColumnCount++;
		if (($r104_lap_pum_summary->SearchColumnCount - 1) % $r104_lap_pum_summary->SearchFieldsPerRow == 0) {
			$r104_lap_pum_summary->SearchRowCount++;
	?>
<div id="xsr_<?php echo $r104_lap_pum_summary->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_periode" class="ew-cell form-group">
		<label for="x_periode" class="ew-search-caption ew-label"><?php echo $r104_lap_pum_summary->periode->caption() ?></label>
		<span id="el_r104_lap_pum_periode" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_periode"><?php echo EmptyValue(strval($r104_lap_pum_summary->periode->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $r104_lap_pum_summary->periode->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($r104_lap_pum_summary->periode->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($r104_lap_pum_summary->periode->ReadOnly || $r104_lap_pum_summary->periode->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_periode',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $r104_lap_pum_summary->periode->Lookup->getParamTag($r104_lap_pum_summary, "p_x_periode") ?>
<input type="hidden" data-table="r104_lap_pum" data-field="x_periode" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $r104_lap_pum_summary->periode->displayValueSeparatorAttribute() ?>" name="x_periode" id="x_periode" value="<?php echo $r104_lap_pum_summary->periode->AdvancedSearch->SearchValue ?>"<?php echo $r104_lap_pum_summary->periode->editAttributes() ?>>
</span>
	</div>
	<?php if ($r104_lap_pum_summary->SearchColumnCount % $r104_lap_pum_summary->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
	<?php if ($r104_lap_pum_summary->SearchColumnCount % $r104_lap_pum_summary->SearchFieldsPerRow > 0) { ?>
</div>
	<?php } ?>
<div id="xsr_<?php echo $r104_lap_pum_summary->SearchRowCount + 1 ?>" class="ew-row d-sm-flex">
	<button class="btn btn-primary" name="btn-submit" id="btn-submit" type="submit"><?php echo $Language->phrase("SearchBtn") ?></button>
</div>
	</div><!-- /.ew-extended-search -->
</div><!-- /.ew-search-panel -->
</form>
<?php } ?>
<?php } ?>
<?php } ?>
<?php
while ($r104_lap_pum_summary->RecordCount < count($r104_lap_pum_summary->DetailRecords) && $r104_lap_pum_summary->RecordCount < $r104_lap_pum_summary->DisplayGroups) {
?>
<?php

	// Show header
	if ($r104_lap_pum_summary->ShowHeader) {
?>
<div class="<?php if (!$r104_lap_pum_summary->isExport("word") && !$r104_lap_pum_summary->isExport("excel")) { ?>card ew-card <?php } ?>ew-grid"<?php echo $r104_lap_pum_summary->ReportTableStyle ?>>
<?php if (!$r104_lap_pum_summary->isExport() && !($r104_lap_pum_summary->DrillDown && $r104_lap_pum_summary->TotalGroups > 0)) { ?>
<!-- Top pager -->
<div class="card-header ew-grid-upper-panel">
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $r104_lap_pum_summary->Pager->render() ?>
</form>
<div class="clearfix"></div>
</div>
<?php } ?>
<!-- Report grid (begin) -->
<div id="gmp_r104_lap_pum" class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<table class="<?php echo $r104_lap_pum_summary->ReportTableClass ?>">
<thead>
	<!-- Table header -->
	<tr class="ew-table-header">
<?php if ($r104_lap_pum_summary->tahunajaran->Visible) { ?>
	<?php if ($r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->tahunajaran) == "") { ?>
	<th data-name="tahunajaran" class="<?php echo $r104_lap_pum_summary->tahunajaran->headerCellClass() ?>"><div class="r104_lap_pum_tahunajaran"><div class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->tahunajaran->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="tahunajaran" class="<?php echo $r104_lap_pum_summary->tahunajaran->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->tahunajaran) ?>', 2);"><div class="r104_lap_pum_tahunajaran">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->tahunajaran->caption() ?></span><span class="ew-table-header-sort"><?php if ($r104_lap_pum_summary->tahunajaran->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r104_lap_pum_summary->tahunajaran->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($r104_lap_pum_summary->sekolahnama->Visible) { ?>
	<?php if ($r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->sekolahnama) == "") { ?>
	<th data-name="sekolahnama" class="<?php echo $r104_lap_pum_summary->sekolahnama->headerCellClass() ?>"><div class="r104_lap_pum_sekolahnama"><div class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->sekolahnama->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="sekolahnama" class="<?php echo $r104_lap_pum_summary->sekolahnama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->sekolahnama) ?>', 2);"><div class="r104_lap_pum_sekolahnama">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->sekolahnama->caption() ?></span><span class="ew-table-header-sort"><?php if ($r104_lap_pum_summary->sekolahnama->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r104_lap_pum_summary->sekolahnama->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($r104_lap_pum_summary->kelasnama->Visible) { ?>
	<?php if ($r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->kelasnama) == "") { ?>
	<th data-name="kelasnama" class="<?php echo $r104_lap_pum_summary->kelasnama->headerCellClass() ?>"><div class="r104_lap_pum_kelasnama"><div class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->kelasnama->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="kelasnama" class="<?php echo $r104_lap_pum_summary->kelasnama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->kelasnama) ?>', 2);"><div class="r104_lap_pum_kelasnama">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->kelasnama->caption() ?></span><span class="ew-table-header-sort"><?php if ($r104_lap_pum_summary->kelasnama->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r104_lap_pum_summary->kelasnama->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($r104_lap_pum_summary->nomorinduk->Visible) { ?>
	<?php if ($r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->nomorinduk) == "") { ?>
	<th data-name="nomorinduk" class="<?php echo $r104_lap_pum_summary->nomorinduk->headerCellClass() ?>"><div class="r104_lap_pum_nomorinduk"><div class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->nomorinduk->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="nomorinduk" class="<?php echo $r104_lap_pum_summary->nomorinduk->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->nomorinduk) ?>', 2);"><div class="r104_lap_pum_nomorinduk">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->nomorinduk->caption() ?></span><span class="ew-table-header-sort"><?php if ($r104_lap_pum_summary->nomorinduk->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r104_lap_pum_summary->nomorinduk->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($r104_lap_pum_summary->siswanama->Visible) { ?>
	<?php if ($r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->siswanama) == "") { ?>
	<th data-name="siswanama" class="<?php echo $r104_lap_pum_summary->siswanama->headerCellClass() ?>"><div class="r104_lap_pum_siswanama"><div class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->siswanama->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="siswanama" class="<?php echo $r104_lap_pum_summary->siswanama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->siswanama) ?>', 2);"><div class="r104_lap_pum_siswanama">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->siswanama->caption() ?></span><span class="ew-table-header-sort"><?php if ($r104_lap_pum_summary->siswanama->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r104_lap_pum_summary->siswanama->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($r104_lap_pum_summary->iurannama->Visible) { ?>
	<?php if ($r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->iurannama) == "") { ?>
	<th data-name="iurannama" class="<?php echo $r104_lap_pum_summary->iurannama->headerCellClass() ?>"><div class="r104_lap_pum_iurannama"><div class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->iurannama->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="iurannama" class="<?php echo $r104_lap_pum_summary->iurannama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->iurannama) ?>', 2);"><div class="r104_lap_pum_iurannama">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->iurannama->caption() ?></span><span class="ew-table-header-sort"><?php if ($r104_lap_pum_summary->iurannama->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r104_lap_pum_summary->iurannama->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($r104_lap_pum_summary->periode->Visible) { ?>
	<?php if ($r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->periode) == "") { ?>
	<th data-name="periode" class="<?php echo $r104_lap_pum_summary->periode->headerCellClass() ?>"><div class="r104_lap_pum_periode"><div class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->periode->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="periode" class="<?php echo $r104_lap_pum_summary->periode->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->periode) ?>', 2);"><div class="r104_lap_pum_periode">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->periode->caption() ?></span><span class="ew-table-header-sort"><?php if ($r104_lap_pum_summary->periode->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r104_lap_pum_summary->periode->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($r104_lap_pum_summary->jumlah_total->Visible) { ?>
	<?php if ($r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->jumlah_total) == "") { ?>
	<th data-name="jumlah_total" class="<?php echo $r104_lap_pum_summary->jumlah_total->headerCellClass() ?>"><div class="r104_lap_pum_jumlah_total"><div class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->jumlah_total->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="jumlah_total" class="<?php echo $r104_lap_pum_summary->jumlah_total->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r104_lap_pum_summary->sortUrl($r104_lap_pum_summary->jumlah_total) ?>', 2);"><div class="r104_lap_pum_jumlah_total">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r104_lap_pum_summary->jumlah_total->caption() ?></span><span class="ew-table-header-sort"><?php if ($r104_lap_pum_summary->jumlah_total->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r104_lap_pum_summary->jumlah_total->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
	</tr>
</thead>
<tbody>
<?php
		if ($r104_lap_pum_summary->TotalGroups == 0)
			break; // Show header only
		$r104_lap_pum_summary->ShowHeader = FALSE;
	} // End show header
?>
<?php
	$r104_lap_pum_summary->loadRowValues($r104_lap_pum_summary->DetailRecords[$r104_lap_pum_summary->RecordCount]);
	$r104_lap_pum_summary->RecordCount++;
	$r104_lap_pum_summary->RecordIndex++;
?>
<?php

		// Render detail row
		$r104_lap_pum_summary->resetAttributes();
		$r104_lap_pum_summary->RowType = ROWTYPE_DETAIL;
		$r104_lap_pum_summary->renderRow();
?>
	<tr<?php echo $r104_lap_pum_summary->rowAttributes(); ?>>
<?php if ($r104_lap_pum_summary->tahunajaran->Visible) { ?>
		<td data-field="tahunajaran"<?php echo $r104_lap_pum_summary->tahunajaran->cellAttributes() ?>>
<span<?php echo $r104_lap_pum_summary->tahunajaran->viewAttributes() ?>><?php echo $r104_lap_pum_summary->tahunajaran->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($r104_lap_pum_summary->sekolahnama->Visible) { ?>
		<td data-field="sekolahnama"<?php echo $r104_lap_pum_summary->sekolahnama->cellAttributes() ?>>
<span<?php echo $r104_lap_pum_summary->sekolahnama->viewAttributes() ?>><?php echo $r104_lap_pum_summary->sekolahnama->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($r104_lap_pum_summary->kelasnama->Visible) { ?>
		<td data-field="kelasnama"<?php echo $r104_lap_pum_summary->kelasnama->cellAttributes() ?>>
<span<?php echo $r104_lap_pum_summary->kelasnama->viewAttributes() ?>><?php echo $r104_lap_pum_summary->kelasnama->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($r104_lap_pum_summary->nomorinduk->Visible) { ?>
		<td data-field="nomorinduk"<?php echo $r104_lap_pum_summary->nomorinduk->cellAttributes() ?>>
<span<?php echo $r104_lap_pum_summary->nomorinduk->viewAttributes() ?>><?php echo $r104_lap_pum_summary->nomorinduk->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($r104_lap_pum_summary->siswanama->Visible) { ?>
		<td data-field="siswanama"<?php echo $r104_lap_pum_summary->siswanama->cellAttributes() ?>>
<span<?php echo $r104_lap_pum_summary->siswanama->viewAttributes() ?>><?php echo $r104_lap_pum_summary->siswanama->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($r104_lap_pum_summary->iurannama->Visible) { ?>
		<td data-field="iurannama"<?php echo $r104_lap_pum_summary->iurannama->cellAttributes() ?>>
<span<?php echo $r104_lap_pum_summary->iurannama->viewAttributes() ?>><?php echo $r104_lap_pum_summary->iurannama->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($r104_lap_pum_summary->periode->Visible) { ?>
		<td data-field="periode"<?php echo $r104_lap_pum_summary->periode->cellAttributes() ?>>
<span<?php echo $r104_lap_pum_summary->periode->viewAttributes() ?>><?php echo $r104_lap_pum_summary->periode->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($r104_lap_pum_summary->jumlah_total->Visible) { ?>
		<td data-field="jumlah_total"<?php echo $r104_lap_pum_summary->jumlah_total->cellAttributes() ?>>
<span<?php echo $r104_lap_pum_summary->jumlah_total->viewAttributes() ?>><?php echo $r104_lap_pum_summary->jumlah_total->getViewValue() ?></span>
</td>
<?php } ?>
	</tr>
<?php
} // End while
?>
<?php if ($r104_lap_pum_summary->TotalGroups > 0) { ?>
</tbody>
<tfoot>
<?php
	$r104_lap_pum_summary->resetAttributes();
	$r104_lap_pum_summary->RowType = ROWTYPE_TOTAL;
	$r104_lap_pum_summary->RowTotalType = ROWTOTAL_GRAND;
	$r104_lap_pum_summary->RowTotalSubType = ROWTOTAL_FOOTER;
	$r104_lap_pum_summary->RowAttrs["class"] = "ew-rpt-grand-summary";
	$r104_lap_pum_summary->renderRow();
?>
<?php if ($r104_lap_pum_summary->ShowCompactSummaryFooter) { ?>
	<tr<?php echo $r104_lap_pum_summary->rowAttributes() ?>><td colspan="<?php echo ($r104_lap_pum_summary->GroupColumnCount + $r104_lap_pum_summary->DetailColumnCount) ?>"><?php echo $Language->phrase("RptGrandSummary") ?> <span class="ew-summary-count">(<span class="ew-aggregate-caption"><?php echo $Language->phrase("RptCnt") ?></span><?php echo $Language->phrase("AggregateEqual") ?><span class="ew-aggregate-value"><?php echo FormatNumber($r104_lap_pum_summary->TotalCount, 0); ?></span>)</span></td></tr>
	<tr<?php echo $r104_lap_pum_summary->rowAttributes() ?>>
<?php if ($r104_lap_pum_summary->GroupColumnCount > 0) { ?>
		<td colspan="<?php echo $r104_lap_pum_summary->GroupColumnCount ?>" class="ew-rpt-grp-aggregate">&nbsp;</td>
<?php } ?>
<?php if ($r104_lap_pum_summary->tahunajaran->Visible) { ?>
		<td data-field="tahunajaran"<?php echo $r104_lap_pum_summary->tahunajaran->cellAttributes() ?>></td>
<?php } ?>
<?php if ($r104_lap_pum_summary->sekolahnama->Visible) { ?>
		<td data-field="sekolahnama"<?php echo $r104_lap_pum_summary->sekolahnama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($r104_lap_pum_summary->kelasnama->Visible) { ?>
		<td data-field="kelasnama"<?php echo $r104_lap_pum_summary->kelasnama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($r104_lap_pum_summary->nomorinduk->Visible) { ?>
		<td data-field="nomorinduk"<?php echo $r104_lap_pum_summary->nomorinduk->cellAttributes() ?>></td>
<?php } ?>
<?php if ($r104_lap_pum_summary->siswanama->Visible) { ?>
		<td data-field="siswanama"<?php echo $r104_lap_pum_summary->siswanama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($r104_lap_pum_summary->iurannama->Visible) { ?>
		<td data-field="iurannama"<?php echo $r104_lap_pum_summary->iurannama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($r104_lap_pum_summary->periode->Visible) { ?>
		<td data-field="periode"<?php echo $r104_lap_pum_summary->periode->cellAttributes() ?>></td>
<?php } ?>
<?php if ($r104_lap_pum_summary->jumlah_total->Visible) { ?>
		<td data-field="jumlah_total"<?php echo $r104_lap_pum_summary->jumlah_total->cellAttributes() ?>><span class="ew-aggregate-caption"><?php echo $Language->phrase("RptSum") ?></span><?php echo $Language->phrase("AggregateEqual") ?><span class="ew-aggregate-value"><span<?php echo $r104_lap_pum_summary->jumlah_total->viewAttributes() ?>><?php echo $r104_lap_pum_summary->jumlah_total->SumViewValue ?></span></span></td>
<?php } ?>
	</tr>
<?php } else { ?>
	<tr<?php echo $r104_lap_pum_summary->rowAttributes() ?>><td colspan="<?php echo ($r104_lap_pum_summary->GroupColumnCount + $r104_lap_pum_summary->DetailColumnCount) ?>"><?php echo $Language->phrase("RptGrandSummary") ?> <span class="ew-summary-count">(<?php echo FormatNumber($r104_lap_pum_summary->TotalCount, 0); ?><?php echo $Language->phrase("RptDtlRec") ?>)</span></td></tr>
	<tr<?php echo $r104_lap_pum_summary->rowAttributes() ?>>
<?php if ($r104_lap_pum_summary->tahunajaran->Visible) { ?>
		<td data-field="tahunajaran"<?php echo $r104_lap_pum_summary->tahunajaran->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($r104_lap_pum_summary->sekolahnama->Visible) { ?>
		<td data-field="sekolahnama"<?php echo $r104_lap_pum_summary->sekolahnama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($r104_lap_pum_summary->kelasnama->Visible) { ?>
		<td data-field="kelasnama"<?php echo $r104_lap_pum_summary->kelasnama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($r104_lap_pum_summary->nomorinduk->Visible) { ?>
		<td data-field="nomorinduk"<?php echo $r104_lap_pum_summary->nomorinduk->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($r104_lap_pum_summary->siswanama->Visible) { ?>
		<td data-field="siswanama"<?php echo $r104_lap_pum_summary->siswanama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($r104_lap_pum_summary->iurannama->Visible) { ?>
		<td data-field="iurannama"<?php echo $r104_lap_pum_summary->iurannama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($r104_lap_pum_summary->periode->Visible) { ?>
		<td data-field="periode"<?php echo $r104_lap_pum_summary->periode->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($r104_lap_pum_summary->jumlah_total->Visible) { ?>
		<td data-field="jumlah_total"<?php echo $r104_lap_pum_summary->jumlah_total->cellAttributes() ?>><span class="ew-aggregate"><?php echo $Language->phrase("RptSum") ?></span><?php echo $Language->phrase("AggregateColon") ?>
<span<?php echo $r104_lap_pum_summary->jumlah_total->viewAttributes() ?>><?php echo $r104_lap_pum_summary->jumlah_total->SumViewValue ?></span>
</td>
<?php } ?>
	</tr>
<?php } ?>
</tfoot>
</table>
</div>
<!-- /.ew-grid-middle-panel -->
<!-- Report grid (end) -->
<?php if ($r104_lap_pum_summary->TotalGroups > 0) { ?>
<?php if (!$r104_lap_pum_summary->isExport() && !($r104_lap_pum_summary->DrillDown && $r104_lap_pum_summary->TotalGroups > 0)) { ?>
<!-- Bottom pager -->
<div class="card-footer ew-grid-lower-panel">
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $r104_lap_pum_summary->Pager->render() ?>
</form>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php } ?>
</div>
<!-- /.ew-grid -->
<?php } ?>
</div>
<!-- /#report-summary -->
<!-- Summary report (end) -->
<?php if ((!$r104_lap_pum_summary->isExport() || $r104_lap_pum_summary->isExport("print")) && !$DashboardReport) { ?>
</div>
<!-- /#ew-center -->
<?php } ?>
<?php if ((!$r104_lap_pum_summary->isExport() || $r104_lap_pum_summary->isExport("print")) && !$DashboardReport) { ?>
</div>
<!-- /.row -->
<?php } ?>
<?php if ((!$r104_lap_pum_summary->isExport() || $r104_lap_pum_summary->isExport("print")) && !$DashboardReport) { ?>
</div>
<!-- /.ew-report -->
<?php } ?>
<?php
$r104_lap_pum_summary->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<?php if (!$r104_lap_pum_summary->isExport() && !$r104_lap_pum_summary->DrillDown && !$DashboardReport) { ?>
<script>
loadjs.ready("load", function() {

	// Startup script
	// Write your table-specific startup script here
	// console.log("page loaded");

});
</script>
<?php } ?>
<?php if (!$DashboardReport) { ?>
<?php include_once "footer.php"; ?>
<?php } ?>
<?php
$r104_lap_pum_summary->terminate();
?>