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
$r102_lap_tunggak_summary = new r102_lap_tunggak_summary();

// Run the page
$r102_lap_tunggak_summary->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$r102_lap_tunggak_summary->Page_Render();
?>
<?php if (!$DashboardReport) { ?>
<?php include_once "header.php"; ?>
<?php } ?>
<?php if (!$r102_lap_tunggak_summary->isExport() && !$r102_lap_tunggak_summary->DrillDown && !$DashboardReport) { ?>
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
	fsummary.lists["x_TahunAjaran"] = <?php echo $r102_lap_tunggak_summary->TahunAjaran->Lookup->toClientList($r102_lap_tunggak_summary) ?>;
	fsummary.lists["x_TahunAjaran"].options = <?php echo JsonEncode($r102_lap_tunggak_summary->TahunAjaran->lookupOptions()) ?>;
	fsummary.lists["x_SekolahNama"] = <?php echo $r102_lap_tunggak_summary->SekolahNama->Lookup->toClientList($r102_lap_tunggak_summary) ?>;
	fsummary.lists["x_SekolahNama"].options = <?php echo JsonEncode($r102_lap_tunggak_summary->SekolahNama->lookupOptions()) ?>;
	fsummary.lists["x_KelasNama"] = <?php echo $r102_lap_tunggak_summary->KelasNama->Lookup->toClientList($r102_lap_tunggak_summary) ?>;
	fsummary.lists["x_KelasNama"].options = <?php echo JsonEncode($r102_lap_tunggak_summary->KelasNama->lookupOptions()) ?>;
	fsummary.lists["x_NomorInduk"] = <?php echo $r102_lap_tunggak_summary->NomorInduk->Lookup->toClientList($r102_lap_tunggak_summary) ?>;
	fsummary.lists["x_NomorInduk"].options = <?php echo JsonEncode($r102_lap_tunggak_summary->NomorInduk->lookupOptions()) ?>;
	fsummary.lists["x_SiswaNama"] = <?php echo $r102_lap_tunggak_summary->SiswaNama->Lookup->toClientList($r102_lap_tunggak_summary) ?>;
	fsummary.lists["x_SiswaNama"].options = <?php echo JsonEncode($r102_lap_tunggak_summary->SiswaNama->lookupOptions()) ?>;
	fsummary.lists["x_IuranNama[]"] = <?php echo $r102_lap_tunggak_summary->IuranNama->Lookup->toClientList($r102_lap_tunggak_summary) ?>;
	fsummary.lists["x_IuranNama[]"].options = <?php echo JsonEncode($r102_lap_tunggak_summary->IuranNama->lookupOptions()) ?>;
	fsummary.lists["x_Periode"] = <?php echo $r102_lap_tunggak_summary->Periode->Lookup->toClientList($r102_lap_tunggak_summary) ?>;
	fsummary.lists["x_Periode"].options = <?php echo JsonEncode($r102_lap_tunggak_summary->Periode->lookupOptions()) ?>;

	// Filters
	fsummary.filterList = <?php echo $r102_lap_tunggak_summary->getFilterList() ?>;
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
<?php if ((!$r102_lap_tunggak_summary->isExport() || $r102_lap_tunggak_summary->isExport("print")) && !$DashboardReport) { ?>
<!-- Content Container -->
<div id="ew-report" class="ew-report container-fluid">
<?php } ?>
<?php if ($r102_lap_tunggak_summary->ShowCurrentFilter) { ?>
<?php $r102_lap_tunggak_summary->showFilterList() ?>
<?php } ?>
<div class="btn-toolbar ew-toolbar">
<?php
if (!$r102_lap_tunggak_summary->DrillDownInPanel) {
	$r102_lap_tunggak_summary->ExportOptions->render("body");
	$r102_lap_tunggak_summary->SearchOptions->render("body");
	$r102_lap_tunggak_summary->FilterOptions->render("body");
}
?>
</div>
<?php $r102_lap_tunggak_summary->showPageHeader(); ?>
<?php
$r102_lap_tunggak_summary->showMessage();
?>
<?php if ((!$r102_lap_tunggak_summary->isExport() || $r102_lap_tunggak_summary->isExport("print")) && !$DashboardReport) { ?>
<div class="row">
<?php } ?>
<?php if ((!$r102_lap_tunggak_summary->isExport() || $r102_lap_tunggak_summary->isExport("print")) && !$DashboardReport) { ?>
<!-- Center Container -->
<div id="ew-center" class="<?php echo $r102_lap_tunggak_summary->CenterContentClass ?>">
<?php } ?>
<!-- Summary report (begin) -->
<div id="report_summary">
<?php if (!$r102_lap_tunggak_summary->isExport() && !$r102_lap_tunggak_summary->DrillDown && !$DashboardReport) { ?>
<?php if ($Security->CanSearch()) { ?>
<?php if (!$r102_lap_tunggak_summary->isExport() && !$r102_lap_tunggak->CurrentAction) { ?>
<form name="fsummary" id="fsummary" class="form-inline ew-form ew-ext-search-form" action="<?php echo CurrentPageName() ?>">
<div id="fsummary-search-panel" class="<?php echo $r102_lap_tunggak_summary->SearchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<input type="hidden" name="t" value="r102_lap_tunggak">
	<div class="ew-extended-search">
<?php

// Render search row
$r102_lap_tunggak->RowType = ROWTYPE_SEARCH;
$r102_lap_tunggak->resetAttributes();
$r102_lap_tunggak_summary->renderRow();
?>
<?php if ($r102_lap_tunggak_summary->TahunAjaran->Visible) { // TahunAjaran ?>
	<?php
		$r102_lap_tunggak_summary->SearchColumnCount++;
		if (($r102_lap_tunggak_summary->SearchColumnCount - 1) % $r102_lap_tunggak_summary->SearchFieldsPerRow == 0) {
			$r102_lap_tunggak_summary->SearchRowCount++;
	?>
<div id="xsr_<?php echo $r102_lap_tunggak_summary->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_TahunAjaran" class="ew-cell form-group">
		<label for="x_TahunAjaran" class="ew-search-caption ew-label"><?php echo $r102_lap_tunggak_summary->TahunAjaran->caption() ?></label>
		<span id="el_r102_lap_tunggak_TahunAjaran" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_TahunAjaran"><?php echo EmptyValue(strval($r102_lap_tunggak_summary->TahunAjaran->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $r102_lap_tunggak_summary->TahunAjaran->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($r102_lap_tunggak_summary->TahunAjaran->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($r102_lap_tunggak_summary->TahunAjaran->ReadOnly || $r102_lap_tunggak_summary->TahunAjaran->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_TahunAjaran',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $r102_lap_tunggak_summary->TahunAjaran->Lookup->getParamTag($r102_lap_tunggak_summary, "p_x_TahunAjaran") ?>
<input type="hidden" data-table="r102_lap_tunggak" data-field="x_TahunAjaran" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $r102_lap_tunggak_summary->TahunAjaran->displayValueSeparatorAttribute() ?>" name="x_TahunAjaran" id="x_TahunAjaran" value="<?php echo $r102_lap_tunggak_summary->TahunAjaran->AdvancedSearch->SearchValue ?>"<?php echo $r102_lap_tunggak_summary->TahunAjaran->editAttributes() ?>>
</span>
	</div>
	<?php if ($r102_lap_tunggak_summary->SearchColumnCount % $r102_lap_tunggak_summary->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->SekolahNama->Visible) { // SekolahNama ?>
	<?php
		$r102_lap_tunggak_summary->SearchColumnCount++;
		if (($r102_lap_tunggak_summary->SearchColumnCount - 1) % $r102_lap_tunggak_summary->SearchFieldsPerRow == 0) {
			$r102_lap_tunggak_summary->SearchRowCount++;
	?>
<div id="xsr_<?php echo $r102_lap_tunggak_summary->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_SekolahNama" class="ew-cell form-group">
		<label for="x_SekolahNama" class="ew-search-caption ew-label"><?php echo $r102_lap_tunggak_summary->SekolahNama->caption() ?></label>
		<span id="el_r102_lap_tunggak_SekolahNama" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_SekolahNama"><?php echo EmptyValue(strval($r102_lap_tunggak_summary->SekolahNama->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $r102_lap_tunggak_summary->SekolahNama->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($r102_lap_tunggak_summary->SekolahNama->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($r102_lap_tunggak_summary->SekolahNama->ReadOnly || $r102_lap_tunggak_summary->SekolahNama->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_SekolahNama',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $r102_lap_tunggak_summary->SekolahNama->Lookup->getParamTag($r102_lap_tunggak_summary, "p_x_SekolahNama") ?>
<input type="hidden" data-table="r102_lap_tunggak" data-field="x_SekolahNama" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $r102_lap_tunggak_summary->SekolahNama->displayValueSeparatorAttribute() ?>" name="x_SekolahNama" id="x_SekolahNama" value="<?php echo $r102_lap_tunggak_summary->SekolahNama->AdvancedSearch->SearchValue ?>"<?php echo $r102_lap_tunggak_summary->SekolahNama->editAttributes() ?>>
</span>
	</div>
	<?php if ($r102_lap_tunggak_summary->SearchColumnCount % $r102_lap_tunggak_summary->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->KelasNama->Visible) { // KelasNama ?>
	<?php
		$r102_lap_tunggak_summary->SearchColumnCount++;
		if (($r102_lap_tunggak_summary->SearchColumnCount - 1) % $r102_lap_tunggak_summary->SearchFieldsPerRow == 0) {
			$r102_lap_tunggak_summary->SearchRowCount++;
	?>
<div id="xsr_<?php echo $r102_lap_tunggak_summary->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_KelasNama" class="ew-cell form-group">
		<label for="x_KelasNama" class="ew-search-caption ew-label"><?php echo $r102_lap_tunggak_summary->KelasNama->caption() ?></label>
		<span id="el_r102_lap_tunggak_KelasNama" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_KelasNama"><?php echo EmptyValue(strval($r102_lap_tunggak_summary->KelasNama->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $r102_lap_tunggak_summary->KelasNama->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($r102_lap_tunggak_summary->KelasNama->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($r102_lap_tunggak_summary->KelasNama->ReadOnly || $r102_lap_tunggak_summary->KelasNama->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_KelasNama',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $r102_lap_tunggak_summary->KelasNama->Lookup->getParamTag($r102_lap_tunggak_summary, "p_x_KelasNama") ?>
<input type="hidden" data-table="r102_lap_tunggak" data-field="x_KelasNama" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $r102_lap_tunggak_summary->KelasNama->displayValueSeparatorAttribute() ?>" name="x_KelasNama" id="x_KelasNama" value="<?php echo $r102_lap_tunggak_summary->KelasNama->AdvancedSearch->SearchValue ?>"<?php echo $r102_lap_tunggak_summary->KelasNama->editAttributes() ?>>
</span>
	</div>
	<?php if ($r102_lap_tunggak_summary->SearchColumnCount % $r102_lap_tunggak_summary->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->NomorInduk->Visible) { // NomorInduk ?>
	<?php
		$r102_lap_tunggak_summary->SearchColumnCount++;
		if (($r102_lap_tunggak_summary->SearchColumnCount - 1) % $r102_lap_tunggak_summary->SearchFieldsPerRow == 0) {
			$r102_lap_tunggak_summary->SearchRowCount++;
	?>
<div id="xsr_<?php echo $r102_lap_tunggak_summary->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_NomorInduk" class="ew-cell form-group">
		<label for="x_NomorInduk" class="ew-search-caption ew-label"><?php echo $r102_lap_tunggak_summary->NomorInduk->caption() ?></label>
		<span id="el_r102_lap_tunggak_NomorInduk" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_NomorInduk"><?php echo EmptyValue(strval($r102_lap_tunggak_summary->NomorInduk->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $r102_lap_tunggak_summary->NomorInduk->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($r102_lap_tunggak_summary->NomorInduk->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($r102_lap_tunggak_summary->NomorInduk->ReadOnly || $r102_lap_tunggak_summary->NomorInduk->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_NomorInduk',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $r102_lap_tunggak_summary->NomorInduk->Lookup->getParamTag($r102_lap_tunggak_summary, "p_x_NomorInduk") ?>
<input type="hidden" data-table="r102_lap_tunggak" data-field="x_NomorInduk" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $r102_lap_tunggak_summary->NomorInduk->displayValueSeparatorAttribute() ?>" name="x_NomorInduk" id="x_NomorInduk" value="<?php echo $r102_lap_tunggak_summary->NomorInduk->AdvancedSearch->SearchValue ?>"<?php echo $r102_lap_tunggak_summary->NomorInduk->editAttributes() ?>>
</span>
	</div>
	<?php if ($r102_lap_tunggak_summary->SearchColumnCount % $r102_lap_tunggak_summary->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->SiswaNama->Visible) { // SiswaNama ?>
	<?php
		$r102_lap_tunggak_summary->SearchColumnCount++;
		if (($r102_lap_tunggak_summary->SearchColumnCount - 1) % $r102_lap_tunggak_summary->SearchFieldsPerRow == 0) {
			$r102_lap_tunggak_summary->SearchRowCount++;
	?>
<div id="xsr_<?php echo $r102_lap_tunggak_summary->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_SiswaNama" class="ew-cell form-group">
		<label for="x_SiswaNama" class="ew-search-caption ew-label"><?php echo $r102_lap_tunggak_summary->SiswaNama->caption() ?></label>
		<span id="el_r102_lap_tunggak_SiswaNama" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_SiswaNama"><?php echo EmptyValue(strval($r102_lap_tunggak_summary->SiswaNama->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $r102_lap_tunggak_summary->SiswaNama->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($r102_lap_tunggak_summary->SiswaNama->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($r102_lap_tunggak_summary->SiswaNama->ReadOnly || $r102_lap_tunggak_summary->SiswaNama->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_SiswaNama',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $r102_lap_tunggak_summary->SiswaNama->Lookup->getParamTag($r102_lap_tunggak_summary, "p_x_SiswaNama") ?>
<input type="hidden" data-table="r102_lap_tunggak" data-field="x_SiswaNama" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $r102_lap_tunggak_summary->SiswaNama->displayValueSeparatorAttribute() ?>" name="x_SiswaNama" id="x_SiswaNama" value="<?php echo $r102_lap_tunggak_summary->SiswaNama->AdvancedSearch->SearchValue ?>"<?php echo $r102_lap_tunggak_summary->SiswaNama->editAttributes() ?>>
</span>
	</div>
	<?php if ($r102_lap_tunggak_summary->SearchColumnCount % $r102_lap_tunggak_summary->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->IuranNama->Visible) { // IuranNama ?>
	<?php
		$r102_lap_tunggak_summary->SearchColumnCount++;
		if (($r102_lap_tunggak_summary->SearchColumnCount - 1) % $r102_lap_tunggak_summary->SearchFieldsPerRow == 0) {
			$r102_lap_tunggak_summary->SearchRowCount++;
	?>
<div id="xsr_<?php echo $r102_lap_tunggak_summary->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_IuranNama" class="ew-cell form-group">
		<label for="x_IuranNama" class="ew-search-caption ew-label"><?php echo $r102_lap_tunggak_summary->IuranNama->caption() ?></label>
		<span id="el_r102_lap_tunggak_IuranNama" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_IuranNama"><?php echo EmptyValue(strval($r102_lap_tunggak_summary->IuranNama->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $r102_lap_tunggak_summary->IuranNama->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($r102_lap_tunggak_summary->IuranNama->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($r102_lap_tunggak_summary->IuranNama->ReadOnly || $r102_lap_tunggak_summary->IuranNama->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_IuranNama[]',m:1,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $r102_lap_tunggak_summary->IuranNama->Lookup->getParamTag($r102_lap_tunggak_summary, "p_x_IuranNama") ?>
<input type="hidden" data-table="r102_lap_tunggak" data-field="x_IuranNama" data-multiple="1" data-lookup="1" data-value-separator="<?php echo $r102_lap_tunggak_summary->IuranNama->displayValueSeparatorAttribute() ?>" name="x_IuranNama[]" id="x_IuranNama[]" value="<?php echo $r102_lap_tunggak_summary->IuranNama->AdvancedSearch->SearchValue ?>"<?php echo $r102_lap_tunggak_summary->IuranNama->editAttributes() ?>>
</span>
	</div>
	<?php if ($r102_lap_tunggak_summary->SearchColumnCount % $r102_lap_tunggak_summary->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->Periode->Visible) { // Periode ?>
	<?php
		$r102_lap_tunggak_summary->SearchColumnCount++;
		if (($r102_lap_tunggak_summary->SearchColumnCount - 1) % $r102_lap_tunggak_summary->SearchFieldsPerRow == 0) {
			$r102_lap_tunggak_summary->SearchRowCount++;
	?>
<div id="xsr_<?php echo $r102_lap_tunggak_summary->SearchRowCount ?>" class="ew-row d-sm-flex">
	<?php
		}
	 ?>
	<div id="xsc_Periode" class="ew-cell form-group">
		<label for="x_Periode" class="ew-search-caption ew-label"><?php echo $r102_lap_tunggak_summary->Periode->caption() ?></label>
		<span id="el_r102_lap_tunggak_Periode" class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_Periode"><?php echo EmptyValue(strval($r102_lap_tunggak_summary->Periode->AdvancedSearch->ViewValue)) ? $Language->phrase("PleaseSelect") : $r102_lap_tunggak_summary->Periode->AdvancedSearch->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($r102_lap_tunggak_summary->Periode->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($r102_lap_tunggak_summary->Periode->ReadOnly || $r102_lap_tunggak_summary->Periode->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_Periode',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $r102_lap_tunggak_summary->Periode->Lookup->getParamTag($r102_lap_tunggak_summary, "p_x_Periode") ?>
<input type="hidden" data-table="r102_lap_tunggak" data-field="x_Periode" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $r102_lap_tunggak_summary->Periode->displayValueSeparatorAttribute() ?>" name="x_Periode" id="x_Periode" value="<?php echo $r102_lap_tunggak_summary->Periode->AdvancedSearch->SearchValue ?>"<?php echo $r102_lap_tunggak_summary->Periode->editAttributes() ?>>
</span>
	</div>
	<?php if ($r102_lap_tunggak_summary->SearchColumnCount % $r102_lap_tunggak_summary->SearchFieldsPerRow == 0) { ?>
</div>
	<?php } ?>
<?php } ?>
	<?php if ($r102_lap_tunggak_summary->SearchColumnCount % $r102_lap_tunggak_summary->SearchFieldsPerRow > 0) { ?>
</div>
	<?php } ?>
<div id="xsr_<?php echo $r102_lap_tunggak_summary->SearchRowCount + 1 ?>" class="ew-row d-sm-flex">
	<button class="btn btn-primary" name="btn-submit" id="btn-submit" type="submit"><?php echo $Language->phrase("SearchBtn") ?></button>
</div>
	</div><!-- /.ew-extended-search -->
</div><!-- /.ew-search-panel -->
</form>
<?php } ?>
<?php } ?>
<?php } ?>
<?php
while ($r102_lap_tunggak_summary->GroupCount <= count($r102_lap_tunggak_summary->GroupRecords) && $r102_lap_tunggak_summary->GroupCount <= $r102_lap_tunggak_summary->DisplayGroups) {
?>
<?php

	// Show header
	if ($r102_lap_tunggak_summary->ShowHeader) {
?>
<?php if ($r102_lap_tunggak_summary->GroupCount > 1) { ?>
</tbody>
</table>
</div>
<!-- /.ew-grid-middle-panel -->
<!-- Report grid (end) -->
<?php if ($r102_lap_tunggak_summary->TotalGroups > 0) { ?>
<?php if (!$r102_lap_tunggak_summary->isExport() && !($r102_lap_tunggak_summary->DrillDown && $r102_lap_tunggak_summary->TotalGroups > 0)) { ?>
<!-- Bottom pager -->
<div class="card-footer ew-grid-lower-panel">
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $r102_lap_tunggak_summary->Pager->render() ?>
</form>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php } ?>
</div>
<!-- /.ew-grid -->
<?php echo $r102_lap_tunggak_summary->PageBreakContent ?>
<?php } ?>
<div class="<?php if (!$r102_lap_tunggak_summary->isExport("word") && !$r102_lap_tunggak_summary->isExport("excel")) { ?>card ew-card <?php } ?>ew-grid"<?php echo $r102_lap_tunggak_summary->ReportTableStyle ?>>
<?php if (!$r102_lap_tunggak_summary->isExport() && !($r102_lap_tunggak_summary->DrillDown && $r102_lap_tunggak_summary->TotalGroups > 0)) { ?>
<!-- Top pager -->
<div class="card-header ew-grid-upper-panel">
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $r102_lap_tunggak_summary->Pager->render() ?>
</form>
<div class="clearfix"></div>
</div>
<?php } ?>
<!-- Report grid (begin) -->
<div id="gmp_r102_lap_tunggak" class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<table class="<?php echo $r102_lap_tunggak_summary->ReportTableClass ?>">
<thead>
	<!-- Table header -->
	<tr class="ew-table-header">
<?php if ($r102_lap_tunggak_summary->keterangan->Visible) { ?>
	<?php if ($r102_lap_tunggak_summary->keterangan->ShowGroupHeaderAsRow) { ?>
	<th data-name="keterangan">&nbsp;</th>
	<?php } else { ?>
		<?php if ($r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->keterangan) == "") { ?>
	<th data-name="keterangan" class="<?php echo $r102_lap_tunggak_summary->keterangan->headerCellClass() ?>"><div class="r102_lap_tunggak_keterangan"><div class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->keterangan->caption() ?></div></div></th>
		<?php } else { ?>
	<th data-name="keterangan" class="<?php echo $r102_lap_tunggak_summary->keterangan->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->keterangan) ?>', 2);"><div class="r102_lap_tunggak_keterangan">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->keterangan->caption() ?></span><span class="ew-table-header-sort"><?php if ($r102_lap_tunggak_summary->keterangan->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r102_lap_tunggak_summary->keterangan->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
		<?php } ?>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->IuranNama2->Visible) { ?>
	<?php if ($r102_lap_tunggak_summary->IuranNama2->ShowGroupHeaderAsRow) { ?>
	<th data-name="IuranNama2">&nbsp;</th>
	<?php } else { ?>
		<?php if ($r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->IuranNama2) == "") { ?>
	<th data-name="IuranNama2" class="<?php echo $r102_lap_tunggak_summary->IuranNama2->headerCellClass() ?>"><div class="r102_lap_tunggak_IuranNama2"><div class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->IuranNama2->caption() ?></div></div></th>
		<?php } else { ?>
	<th data-name="IuranNama2" class="<?php echo $r102_lap_tunggak_summary->IuranNama2->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->IuranNama2) ?>', 2);"><div class="r102_lap_tunggak_IuranNama2">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->IuranNama2->caption() ?></span><span class="ew-table-header-sort"><?php if ($r102_lap_tunggak_summary->IuranNama2->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r102_lap_tunggak_summary->IuranNama2->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
		<?php } ?>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->Jumlah->Visible) { ?>
	<?php if ($r102_lap_tunggak_summary->Jumlah->ShowGroupHeaderAsRow) { ?>
	<th data-name="Jumlah">&nbsp;</th>
	<?php } else { ?>
		<?php if ($r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->Jumlah) == "") { ?>
	<th data-name="Jumlah" class="<?php echo $r102_lap_tunggak_summary->Jumlah->headerCellClass() ?>"><div class="r102_lap_tunggak_Jumlah"><div class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->Jumlah->caption() ?></div></div></th>
		<?php } else { ?>
	<th data-name="Jumlah" class="<?php echo $r102_lap_tunggak_summary->Jumlah->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->Jumlah) ?>', 2);"><div class="r102_lap_tunggak_Jumlah">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->Jumlah->caption() ?></span><span class="ew-table-header-sort"><?php if ($r102_lap_tunggak_summary->Jumlah->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r102_lap_tunggak_summary->Jumlah->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
		<?php } ?>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->TahunAjaran->Visible) { ?>
	<?php if ($r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->TahunAjaran) == "") { ?>
	<th data-name="TahunAjaran" class="<?php echo $r102_lap_tunggak_summary->TahunAjaran->headerCellClass() ?>"><div class="r102_lap_tunggak_TahunAjaran"><div class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->TahunAjaran->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="TahunAjaran" class="<?php echo $r102_lap_tunggak_summary->TahunAjaran->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->TahunAjaran) ?>', 2);"><div class="r102_lap_tunggak_TahunAjaran">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->TahunAjaran->caption() ?></span><span class="ew-table-header-sort"><?php if ($r102_lap_tunggak_summary->TahunAjaran->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r102_lap_tunggak_summary->TahunAjaran->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->SekolahNama->Visible) { ?>
	<?php if ($r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->SekolahNama) == "") { ?>
	<th data-name="SekolahNama" class="<?php echo $r102_lap_tunggak_summary->SekolahNama->headerCellClass() ?>"><div class="r102_lap_tunggak_SekolahNama"><div class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->SekolahNama->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="SekolahNama" class="<?php echo $r102_lap_tunggak_summary->SekolahNama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->SekolahNama) ?>', 2);"><div class="r102_lap_tunggak_SekolahNama">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->SekolahNama->caption() ?></span><span class="ew-table-header-sort"><?php if ($r102_lap_tunggak_summary->SekolahNama->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r102_lap_tunggak_summary->SekolahNama->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->KelasNama->Visible) { ?>
	<?php if ($r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->KelasNama) == "") { ?>
	<th data-name="KelasNama" class="<?php echo $r102_lap_tunggak_summary->KelasNama->headerCellClass() ?>"><div class="r102_lap_tunggak_KelasNama"><div class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->KelasNama->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="KelasNama" class="<?php echo $r102_lap_tunggak_summary->KelasNama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->KelasNama) ?>', 2);"><div class="r102_lap_tunggak_KelasNama">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->KelasNama->caption() ?></span><span class="ew-table-header-sort"><?php if ($r102_lap_tunggak_summary->KelasNama->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r102_lap_tunggak_summary->KelasNama->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->NomorInduk->Visible) { ?>
	<?php if ($r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->NomorInduk) == "") { ?>
	<th data-name="NomorInduk" class="<?php echo $r102_lap_tunggak_summary->NomorInduk->headerCellClass() ?>"><div class="r102_lap_tunggak_NomorInduk"><div class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->NomorInduk->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="NomorInduk" class="<?php echo $r102_lap_tunggak_summary->NomorInduk->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->NomorInduk) ?>', 2);"><div class="r102_lap_tunggak_NomorInduk">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->NomorInduk->caption() ?></span><span class="ew-table-header-sort"><?php if ($r102_lap_tunggak_summary->NomorInduk->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r102_lap_tunggak_summary->NomorInduk->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->SiswaNama->Visible) { ?>
	<?php if ($r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->SiswaNama) == "") { ?>
	<th data-name="SiswaNama" class="<?php echo $r102_lap_tunggak_summary->SiswaNama->headerCellClass() ?>"><div class="r102_lap_tunggak_SiswaNama"><div class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->SiswaNama->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="SiswaNama" class="<?php echo $r102_lap_tunggak_summary->SiswaNama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->SiswaNama) ?>', 2);"><div class="r102_lap_tunggak_SiswaNama">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->SiswaNama->caption() ?></span><span class="ew-table-header-sort"><?php if ($r102_lap_tunggak_summary->SiswaNama->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r102_lap_tunggak_summary->SiswaNama->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->IuranNama->Visible) { ?>
	<?php if ($r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->IuranNama) == "") { ?>
	<th data-name="IuranNama" class="<?php echo $r102_lap_tunggak_summary->IuranNama->headerCellClass() ?>"><div class="r102_lap_tunggak_IuranNama"><div class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->IuranNama->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="IuranNama" class="<?php echo $r102_lap_tunggak_summary->IuranNama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->IuranNama) ?>', 2);"><div class="r102_lap_tunggak_IuranNama">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->IuranNama->caption() ?></span><span class="ew-table-header-sort"><?php if ($r102_lap_tunggak_summary->IuranNama->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r102_lap_tunggak_summary->IuranNama->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->Periode->Visible) { ?>
	<?php if ($r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->Periode) == "") { ?>
	<th data-name="Periode" class="<?php echo $r102_lap_tunggak_summary->Periode->headerCellClass() ?>"><div class="r102_lap_tunggak_Periode"><div class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->Periode->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="Periode" class="<?php echo $r102_lap_tunggak_summary->Periode->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->Periode) ?>', 2);"><div class="r102_lap_tunggak_Periode">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->Periode->caption() ?></span><span class="ew-table-header-sort"><?php if ($r102_lap_tunggak_summary->Periode->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r102_lap_tunggak_summary->Periode->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->PeriodeBulan->Visible) { ?>
	<?php if ($r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->PeriodeBulan) == "") { ?>
	<th data-name="PeriodeBulan" class="<?php echo $r102_lap_tunggak_summary->PeriodeBulan->headerCellClass() ?>"><div class="r102_lap_tunggak_PeriodeBulan"><div class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->PeriodeBulan->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="PeriodeBulan" class="<?php echo $r102_lap_tunggak_summary->PeriodeBulan->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->PeriodeBulan) ?>', 2);"><div class="r102_lap_tunggak_PeriodeBulan">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->PeriodeBulan->caption() ?></span><span class="ew-table-header-sort"><?php if ($r102_lap_tunggak_summary->PeriodeBulan->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r102_lap_tunggak_summary->PeriodeBulan->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->JumlahBayar->Visible) { ?>
	<?php if ($r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->JumlahBayar) == "") { ?>
	<th data-name="JumlahBayar" class="<?php echo $r102_lap_tunggak_summary->JumlahBayar->headerCellClass() ?>"><div class="r102_lap_tunggak_JumlahBayar"><div class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->JumlahBayar->caption() ?></div></div></th>
	<?php } else { ?>
	<th data-name="JumlahBayar" class="<?php echo $r102_lap_tunggak_summary->JumlahBayar->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->JumlahBayar) ?>', 2);"><div class="r102_lap_tunggak_JumlahBayar">
		<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->JumlahBayar->caption() ?></span><span class="ew-table-header-sort"><?php if ($r102_lap_tunggak_summary->JumlahBayar->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r102_lap_tunggak_summary->JumlahBayar->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
	</div></div></th>
	<?php } ?>
<?php } ?>
	</tr>
</thead>
<tbody>
<?php
		if ($r102_lap_tunggak_summary->TotalGroups == 0)
			break; // Show header only
		$r102_lap_tunggak_summary->ShowHeader = FALSE;
	} // End show header
?>
<?php

	// Build detail SQL
	$where = DetailFilterSql($r102_lap_tunggak_summary->keterangan, $r102_lap_tunggak_summary->getSqlFirstGroupField(), $r102_lap_tunggak_summary->keterangan->groupValue(), $r102_lap_tunggak_summary->Dbid);
	if ($r102_lap_tunggak_summary->PageFirstGroupFilter != "") $r102_lap_tunggak_summary->PageFirstGroupFilter .= " OR ";
	$r102_lap_tunggak_summary->PageFirstGroupFilter .= $where;
	if ($r102_lap_tunggak_summary->Filter != "")
		$where = "($r102_lap_tunggak_summary->Filter) AND ($where)";
	$sql = BuildReportSql($r102_lap_tunggak_summary->getSqlSelect(), $r102_lap_tunggak_summary->getSqlWhere(), $r102_lap_tunggak_summary->getSqlGroupBy(), $r102_lap_tunggak_summary->getSqlHaving(), $r102_lap_tunggak_summary->getSqlOrderBy(), $where, $r102_lap_tunggak_summary->Sort);
	$rs = $r102_lap_tunggak_summary->getRecordset($sql);
	$r102_lap_tunggak_summary->DetailRecords = $rs ? $rs->getRows() : [];
	$r102_lap_tunggak_summary->DetailRecordCount = count($r102_lap_tunggak_summary->DetailRecords);

	// Load detail records
	$r102_lap_tunggak_summary->keterangan->Records = &$r102_lap_tunggak_summary->DetailRecords;
	$r102_lap_tunggak_summary->keterangan->LevelBreak = TRUE; // Set field level break
		$r102_lap_tunggak_summary->GroupCounter[1] = $r102_lap_tunggak_summary->GroupCount;
		$r102_lap_tunggak_summary->keterangan->getCnt($r102_lap_tunggak_summary->keterangan->Records); // Get record count
?>
<?php if ($r102_lap_tunggak_summary->keterangan->Visible && $r102_lap_tunggak_summary->keterangan->ShowGroupHeaderAsRow) { ?>
<?php

		// Render header row
		$r102_lap_tunggak_summary->resetAttributes();
		$r102_lap_tunggak_summary->RowType = ROWTYPE_TOTAL;
		$r102_lap_tunggak_summary->RowTotalType = ROWTOTAL_GROUP;
		$r102_lap_tunggak_summary->RowTotalSubType = ROWTOTAL_HEADER;
		$r102_lap_tunggak_summary->RowGroupLevel = 1;
		$r102_lap_tunggak_summary->renderRow();
?>
	<tr<?php echo $r102_lap_tunggak_summary->rowAttributes(); ?>>
<?php if ($r102_lap_tunggak_summary->keterangan->Visible) { ?>
		<td data-field="keterangan"<?php echo $r102_lap_tunggak_summary->keterangan->cellAttributes(); ?>><span class="ew-group-toggle icon-collapse"></span></td>
<?php } ?>
		<td data-field="keterangan" colspan="<?php echo ($Page->GroupColumnCount + $Page->DetailColumnCount - 1) ?>"<?php echo $r102_lap_tunggak_summary->keterangan->cellAttributes() ?>>
<?php if ($r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->keterangan) == "") { ?>
		<span class="ew-summary-caption r102_lap_tunggak_keterangan"><span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->keterangan->caption() ?></span></span>
<?php } else { ?>
		<span class="ew-table-header-btn ew-pointer ew-summary-caption r102_lap_tunggak_keterangan" onclick="ew.sort(event, '<?php echo $r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->keterangan) ?>', 2);">
			<span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->keterangan->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($r102_lap_tunggak_summary->keterangan->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r102_lap_tunggak_summary->keterangan->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span>
		</span>
<?php } ?>
		<?php echo $Language->phrase("SummaryColon") ?><span<?php echo $r102_lap_tunggak_summary->keterangan->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->keterangan->GroupViewValue ?></span>
		<span class="ew-summary-count">(<span class="ew-aggregate-caption"><?php echo $Language->phrase("RptCnt") ?></span><?php echo $Language->phrase("AggregateEqual") ?><span class="ew-aggregate-value"><?php echo FormatNumber($r102_lap_tunggak_summary->keterangan->Count, 0); ?></span>)</span>
		</td>
	</tr>
<?php } ?>
<?php
	$r102_lap_tunggak_summary->IuranNama2->getDistinctValues($r102_lap_tunggak_summary->keterangan->Records);
	$r102_lap_tunggak_summary->setGroupCount(count($r102_lap_tunggak_summary->IuranNama2->DistinctValues), $r102_lap_tunggak_summary->GroupCounter[1]);
	$r102_lap_tunggak_summary->GroupCounter[2] = 0; // Init group count index
	foreach ($r102_lap_tunggak_summary->IuranNama2->DistinctValues as $IuranNama2) { // Load records for this distinct value
		$r102_lap_tunggak_summary->IuranNama2->setGroupValue($IuranNama2); // Set group value
		$r102_lap_tunggak_summary->IuranNama2->getDistinctRecords($r102_lap_tunggak_summary->keterangan->Records, $r102_lap_tunggak_summary->IuranNama2->groupValue());
		$r102_lap_tunggak_summary->IuranNama2->LevelBreak = TRUE; // Set field level break
		$r102_lap_tunggak_summary->GroupCounter[2]++;
		$r102_lap_tunggak_summary->IuranNama2->getCnt($r102_lap_tunggak_summary->IuranNama2->Records); // Get record count
?>
<?php if ($r102_lap_tunggak_summary->IuranNama2->Visible && $r102_lap_tunggak_summary->IuranNama2->ShowGroupHeaderAsRow) { ?>
<?php

		// Render header row
		$r102_lap_tunggak_summary->IuranNama2->setDbValue($IuranNama2); // Set current value for IuranNama2
		$r102_lap_tunggak_summary->resetAttributes();
		$r102_lap_tunggak_summary->RowType = ROWTYPE_TOTAL;
		$r102_lap_tunggak_summary->RowTotalType = ROWTOTAL_GROUP;
		$r102_lap_tunggak_summary->RowTotalSubType = ROWTOTAL_HEADER;
		$r102_lap_tunggak_summary->RowGroupLevel = 2;
		$r102_lap_tunggak_summary->renderRow();
?>
	<tr<?php echo $r102_lap_tunggak_summary->rowAttributes(); ?>>
<?php if ($r102_lap_tunggak_summary->keterangan->Visible) { ?>
		<td data-field="keterangan"<?php echo $r102_lap_tunggak_summary->keterangan->cellAttributes(); ?>></td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->IuranNama2->Visible) { ?>
		<td data-field="IuranNama2"<?php echo $r102_lap_tunggak_summary->IuranNama2->cellAttributes(); ?>><span class="ew-group-toggle icon-collapse"></span></td>
<?php } ?>
		<td data-field="IuranNama2" colspan="<?php echo ($Page->GroupColumnCount + $Page->DetailColumnCount - 2) ?>"<?php echo $r102_lap_tunggak_summary->IuranNama2->cellAttributes() ?>>
<?php if ($r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->IuranNama2) == "") { ?>
		<span class="ew-summary-caption r102_lap_tunggak_IuranNama2"><span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->IuranNama2->caption() ?></span></span>
<?php } else { ?>
		<span class="ew-table-header-btn ew-pointer ew-summary-caption r102_lap_tunggak_IuranNama2" onclick="ew.sort(event, '<?php echo $r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->IuranNama2) ?>', 2);">
			<span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->IuranNama2->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($r102_lap_tunggak_summary->IuranNama2->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r102_lap_tunggak_summary->IuranNama2->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span>
		</span>
<?php } ?>
		<?php echo $Language->phrase("SummaryColon") ?><span<?php echo $r102_lap_tunggak_summary->IuranNama2->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->IuranNama2->GroupViewValue ?></span>
		<span class="ew-summary-count">(<span class="ew-aggregate-caption"><?php echo $Language->phrase("RptCnt") ?></span><?php echo $Language->phrase("AggregateEqual") ?><span class="ew-aggregate-value"><?php echo FormatNumber($r102_lap_tunggak_summary->IuranNama2->Count, 0); ?></span>)</span>
		</td>
	</tr>
<?php } ?>
<?php
	$r102_lap_tunggak_summary->Jumlah->getDistinctValues($r102_lap_tunggak_summary->IuranNama2->Records);
	$r102_lap_tunggak_summary->setGroupCount(count($r102_lap_tunggak_summary->Jumlah->DistinctValues), $r102_lap_tunggak_summary->GroupCounter[1], $r102_lap_tunggak_summary->GroupCounter[2]);
	$r102_lap_tunggak_summary->GroupCounter[3] = 0; // Init group count index
	foreach ($r102_lap_tunggak_summary->Jumlah->DistinctValues as $Jumlah) { // Load records for this distinct value
		$r102_lap_tunggak_summary->Jumlah->setGroupValue($Jumlah); // Set group value
		$r102_lap_tunggak_summary->Jumlah->getDistinctRecords($r102_lap_tunggak_summary->IuranNama2->Records, $r102_lap_tunggak_summary->Jumlah->groupValue());
		$r102_lap_tunggak_summary->Jumlah->LevelBreak = TRUE; // Set field level break
		$r102_lap_tunggak_summary->GroupCounter[3]++;
		$r102_lap_tunggak_summary->Jumlah->getCnt($r102_lap_tunggak_summary->Jumlah->Records); // Get record count
		$r102_lap_tunggak_summary->setGroupCount($r102_lap_tunggak_summary->Jumlah->Count, $r102_lap_tunggak_summary->GroupCounter[1], $r102_lap_tunggak_summary->GroupCounter[2], $r102_lap_tunggak_summary->GroupCounter[3]);
?>
<?php if ($r102_lap_tunggak_summary->Jumlah->Visible && $r102_lap_tunggak_summary->Jumlah->ShowGroupHeaderAsRow) { ?>
<?php

		// Render header row
		$r102_lap_tunggak_summary->Jumlah->setDbValue($Jumlah); // Set current value for Jumlah
		$r102_lap_tunggak_summary->resetAttributes();
		$r102_lap_tunggak_summary->RowType = ROWTYPE_TOTAL;
		$r102_lap_tunggak_summary->RowTotalType = ROWTOTAL_GROUP;
		$r102_lap_tunggak_summary->RowTotalSubType = ROWTOTAL_HEADER;
		$r102_lap_tunggak_summary->RowGroupLevel = 3;
		$r102_lap_tunggak_summary->renderRow();
?>
	<tr<?php echo $r102_lap_tunggak_summary->rowAttributes(); ?>>
<?php if ($r102_lap_tunggak_summary->keterangan->Visible) { ?>
		<td data-field="keterangan"<?php echo $r102_lap_tunggak_summary->keterangan->cellAttributes(); ?>></td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->IuranNama2->Visible) { ?>
		<td data-field="IuranNama2"<?php echo $r102_lap_tunggak_summary->IuranNama2->cellAttributes(); ?>></td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->Jumlah->Visible) { ?>
		<td data-field="Jumlah"<?php echo $r102_lap_tunggak_summary->Jumlah->cellAttributes(); ?>><span class="ew-group-toggle icon-collapse"></span></td>
<?php } ?>
		<td data-field="Jumlah" colspan="<?php echo ($Page->GroupColumnCount + $Page->DetailColumnCount - 3) ?>"<?php echo $r102_lap_tunggak_summary->Jumlah->cellAttributes() ?>>
<?php if ($r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->Jumlah) == "") { ?>
		<span class="ew-summary-caption r102_lap_tunggak_Jumlah"><span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->Jumlah->caption() ?></span></span>
<?php } else { ?>
		<span class="ew-table-header-btn ew-pointer ew-summary-caption r102_lap_tunggak_Jumlah" onclick="ew.sort(event, '<?php echo $r102_lap_tunggak_summary->sortUrl($r102_lap_tunggak_summary->Jumlah) ?>', 2);">
			<span class="ew-table-header-caption"><?php echo $r102_lap_tunggak_summary->Jumlah->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($r102_lap_tunggak_summary->Jumlah->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($r102_lap_tunggak_summary->Jumlah->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span>
		</span>
<?php } ?>
		<?php echo $Language->phrase("SummaryColon") ?><span<?php echo $r102_lap_tunggak_summary->Jumlah->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->Jumlah->GroupViewValue ?></span>
		<span class="ew-summary-count">(<span class="ew-aggregate-caption"><?php echo $Language->phrase("RptCnt") ?></span><?php echo $Language->phrase("AggregateEqual") ?><span class="ew-aggregate-value"><?php echo FormatNumber($r102_lap_tunggak_summary->Jumlah->Count, 0); ?></span>)</span>
		</td>
	</tr>
<?php } ?>
<?php
	$r102_lap_tunggak_summary->RecordCount = 0; // Reset record count
	foreach ($r102_lap_tunggak_summary->Jumlah->Records as $record) {
		$r102_lap_tunggak_summary->RecordCount++;
		$r102_lap_tunggak_summary->RecordIndex++;
		$r102_lap_tunggak_summary->loadRowValues($record);
?>
<?php

		// Render detail row
		$r102_lap_tunggak_summary->resetAttributes();
		$r102_lap_tunggak_summary->RowType = ROWTYPE_DETAIL;
		$r102_lap_tunggak_summary->renderRow();
?>
	<tr<?php echo $r102_lap_tunggak_summary->rowAttributes(); ?>>
<?php if ($r102_lap_tunggak_summary->keterangan->Visible) { ?>
	<?php if ($r102_lap_tunggak_summary->keterangan->ShowGroupHeaderAsRow) { ?>
		<td data-field="keterangan"<?php echo $r102_lap_tunggak_summary->keterangan->cellAttributes(); ?>>&nbsp;</td>
	<?php } else { ?>
		<td data-field="keterangan"<?php echo $r102_lap_tunggak_summary->keterangan->cellAttributes(); ?>><span<?php echo $r102_lap_tunggak_summary->keterangan->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->keterangan->GroupViewValue ?></span></td>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->IuranNama2->Visible) { ?>
	<?php if ($r102_lap_tunggak_summary->IuranNama2->ShowGroupHeaderAsRow) { ?>
		<td data-field="IuranNama2"<?php echo $r102_lap_tunggak_summary->IuranNama2->cellAttributes(); ?>>&nbsp;</td>
	<?php } else { ?>
		<td data-field="IuranNama2"<?php echo $r102_lap_tunggak_summary->IuranNama2->cellAttributes(); ?>><span<?php echo $r102_lap_tunggak_summary->IuranNama2->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->IuranNama2->GroupViewValue ?></span></td>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->Jumlah->Visible) { ?>
	<?php if ($r102_lap_tunggak_summary->Jumlah->ShowGroupHeaderAsRow) { ?>
		<td data-field="Jumlah"<?php echo $r102_lap_tunggak_summary->Jumlah->cellAttributes(); ?>>&nbsp;</td>
	<?php } else { ?>
		<td data-field="Jumlah"<?php echo $r102_lap_tunggak_summary->Jumlah->cellAttributes(); ?>><span<?php echo $r102_lap_tunggak_summary->Jumlah->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->Jumlah->GroupViewValue ?></span></td>
	<?php } ?>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->TahunAjaran->Visible) { ?>
		<td data-field="TahunAjaran"<?php echo $r102_lap_tunggak_summary->TahunAjaran->cellAttributes() ?>>
<span<?php echo $r102_lap_tunggak_summary->TahunAjaran->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->TahunAjaran->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->SekolahNama->Visible) { ?>
		<td data-field="SekolahNama"<?php echo $r102_lap_tunggak_summary->SekolahNama->cellAttributes() ?>>
<span<?php echo $r102_lap_tunggak_summary->SekolahNama->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->SekolahNama->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->KelasNama->Visible) { ?>
		<td data-field="KelasNama"<?php echo $r102_lap_tunggak_summary->KelasNama->cellAttributes() ?>>
<span<?php echo $r102_lap_tunggak_summary->KelasNama->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->KelasNama->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->NomorInduk->Visible) { ?>
		<td data-field="NomorInduk"<?php echo $r102_lap_tunggak_summary->NomorInduk->cellAttributes() ?>>
<span<?php echo $r102_lap_tunggak_summary->NomorInduk->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->NomorInduk->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->SiswaNama->Visible) { ?>
		<td data-field="SiswaNama"<?php echo $r102_lap_tunggak_summary->SiswaNama->cellAttributes() ?>>
<span<?php echo $r102_lap_tunggak_summary->SiswaNama->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->SiswaNama->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->IuranNama->Visible) { ?>
		<td data-field="IuranNama"<?php echo $r102_lap_tunggak_summary->IuranNama->cellAttributes() ?>>
<span<?php echo $r102_lap_tunggak_summary->IuranNama->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->IuranNama->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->Periode->Visible) { ?>
		<td data-field="Periode"<?php echo $r102_lap_tunggak_summary->Periode->cellAttributes() ?>>
<span<?php echo $r102_lap_tunggak_summary->Periode->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->Periode->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->PeriodeBulan->Visible) { ?>
		<td data-field="PeriodeBulan"<?php echo $r102_lap_tunggak_summary->PeriodeBulan->cellAttributes() ?>>
<span<?php echo $r102_lap_tunggak_summary->PeriodeBulan->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->PeriodeBulan->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->JumlahBayar->Visible) { ?>
		<td data-field="JumlahBayar"<?php echo $r102_lap_tunggak_summary->JumlahBayar->cellAttributes() ?>>
<span<?php echo $r102_lap_tunggak_summary->JumlahBayar->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->JumlahBayar->getViewValue() ?></span>
</td>
<?php } ?>
	</tr>
<?php
	}
	} // End group level 2
	} // End group level 1
?>
<?php

	// Next group
	$r102_lap_tunggak_summary->loadGroupRowValues();

	// Show header if page break
	if ($r102_lap_tunggak_summary->isExport())
		$r102_lap_tunggak_summary->ShowHeader = ($r102_lap_tunggak_summary->ExportPageBreakCount == 0) ? FALSE : ($r102_lap_tunggak_summary->GroupCount % $r102_lap_tunggak_summary->ExportPageBreakCount == 0);

	// Page_Breaking server event
	if ($r102_lap_tunggak_summary->ShowHeader)
		$r102_lap_tunggak_summary->Page_Breaking($r102_lap_tunggak_summary->ShowHeader, $r102_lap_tunggak_summary->PageBreakContent);
	$r102_lap_tunggak_summary->GroupCount++;
} // End while
?>
<?php if ($r102_lap_tunggak_summary->TotalGroups > 0) { ?>
</tbody>
<tfoot>
<?php
	$r102_lap_tunggak_summary->resetAttributes();
	$r102_lap_tunggak_summary->RowType = ROWTYPE_TOTAL;
	$r102_lap_tunggak_summary->RowTotalType = ROWTOTAL_GRAND;
	$r102_lap_tunggak_summary->RowTotalSubType = ROWTOTAL_FOOTER;
	$r102_lap_tunggak_summary->RowAttrs["class"] = "ew-rpt-grand-summary";
	$r102_lap_tunggak_summary->renderRow();
?>
<?php if ($r102_lap_tunggak_summary->keterangan->ShowCompactSummaryFooter) { ?>
	<tr<?php echo $r102_lap_tunggak_summary->rowAttributes() ?>><td colspan="<?php echo ($r102_lap_tunggak_summary->GroupColumnCount + $r102_lap_tunggak_summary->DetailColumnCount) ?>"><?php echo $Language->phrase("RptGrandSummary") ?> <span class="ew-summary-count">(<span class="ew-aggregate-caption"><?php echo $Language->phrase("RptCnt") ?></span><?php echo $Language->phrase("AggregateEqual") ?><span class="ew-aggregate-value"><?php echo FormatNumber($r102_lap_tunggak_summary->TotalCount, 0); ?></span>)</span></td></tr>
	<tr<?php echo $r102_lap_tunggak_summary->rowAttributes() ?>>
<?php if ($r102_lap_tunggak_summary->GroupColumnCount > 0) { ?>
		<td colspan="<?php echo $r102_lap_tunggak_summary->GroupColumnCount ?>" class="ew-rpt-grp-aggregate">&nbsp;</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->TahunAjaran->Visible) { ?>
		<td data-field="TahunAjaran"<?php echo $r102_lap_tunggak_summary->TahunAjaran->cellAttributes() ?>></td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->SekolahNama->Visible) { ?>
		<td data-field="SekolahNama"<?php echo $r102_lap_tunggak_summary->SekolahNama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->KelasNama->Visible) { ?>
		<td data-field="KelasNama"<?php echo $r102_lap_tunggak_summary->KelasNama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->NomorInduk->Visible) { ?>
		<td data-field="NomorInduk"<?php echo $r102_lap_tunggak_summary->NomorInduk->cellAttributes() ?>></td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->SiswaNama->Visible) { ?>
		<td data-field="SiswaNama"<?php echo $r102_lap_tunggak_summary->SiswaNama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->IuranNama->Visible) { ?>
		<td data-field="IuranNama"<?php echo $r102_lap_tunggak_summary->IuranNama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->Periode->Visible) { ?>
		<td data-field="Periode"<?php echo $r102_lap_tunggak_summary->Periode->cellAttributes() ?>></td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->PeriodeBulan->Visible) { ?>
		<td data-field="PeriodeBulan"<?php echo $r102_lap_tunggak_summary->PeriodeBulan->cellAttributes() ?>></td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->JumlahBayar->Visible) { ?>
		<td data-field="JumlahBayar"<?php echo $r102_lap_tunggak_summary->JumlahBayar->cellAttributes() ?>><span class="ew-aggregate-caption"><?php echo $Language->phrase("RptSum") ?></span><?php echo $Language->phrase("AggregateEqual") ?><span class="ew-aggregate-value"><span<?php echo $r102_lap_tunggak_summary->JumlahBayar->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->JumlahBayar->SumViewValue ?></span></span></td>
<?php } ?>
	</tr>
<?php } else { ?>
	<tr<?php echo $r102_lap_tunggak_summary->rowAttributes() ?>><td colspan="<?php echo ($r102_lap_tunggak_summary->GroupColumnCount + $r102_lap_tunggak_summary->DetailColumnCount) ?>"><?php echo $Language->phrase("RptGrandSummary") ?> <span class="ew-summary-count">(<?php echo FormatNumber($r102_lap_tunggak_summary->TotalCount, 0); ?><?php echo $Language->phrase("RptDtlRec") ?>)</span></td></tr>
	<tr<?php echo $r102_lap_tunggak_summary->rowAttributes() ?>>
<?php if ($r102_lap_tunggak_summary->GroupColumnCount > 0) { ?>
		<td colspan="<?php echo $r102_lap_tunggak_summary->GroupColumnCount ?>" class="ew-rpt-grp-aggregate"><?php echo $Language->phrase("RptSum") ?></td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->TahunAjaran->Visible) { ?>
		<td data-field="TahunAjaran"<?php echo $r102_lap_tunggak_summary->TahunAjaran->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->SekolahNama->Visible) { ?>
		<td data-field="SekolahNama"<?php echo $r102_lap_tunggak_summary->SekolahNama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->KelasNama->Visible) { ?>
		<td data-field="KelasNama"<?php echo $r102_lap_tunggak_summary->KelasNama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->NomorInduk->Visible) { ?>
		<td data-field="NomorInduk"<?php echo $r102_lap_tunggak_summary->NomorInduk->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->SiswaNama->Visible) { ?>
		<td data-field="SiswaNama"<?php echo $r102_lap_tunggak_summary->SiswaNama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->IuranNama->Visible) { ?>
		<td data-field="IuranNama"<?php echo $r102_lap_tunggak_summary->IuranNama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->Periode->Visible) { ?>
		<td data-field="Periode"<?php echo $r102_lap_tunggak_summary->Periode->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->PeriodeBulan->Visible) { ?>
		<td data-field="PeriodeBulan"<?php echo $r102_lap_tunggak_summary->PeriodeBulan->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($r102_lap_tunggak_summary->JumlahBayar->Visible) { ?>
		<td data-field="JumlahBayar"<?php echo $r102_lap_tunggak_summary->JumlahBayar->cellAttributes() ?>>
<span<?php echo $r102_lap_tunggak_summary->JumlahBayar->viewAttributes() ?>><?php echo $r102_lap_tunggak_summary->JumlahBayar->SumViewValue ?></span>
</td>
<?php } ?>
	</tr>
<?php } ?>
</tfoot>
</table>
</div>
<!-- /.ew-grid-middle-panel -->
<!-- Report grid (end) -->
<?php if ($r102_lap_tunggak_summary->TotalGroups > 0) { ?>
<?php if (!$r102_lap_tunggak_summary->isExport() && !($r102_lap_tunggak_summary->DrillDown && $r102_lap_tunggak_summary->TotalGroups > 0)) { ?>
<!-- Bottom pager -->
<div class="card-footer ew-grid-lower-panel">
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $r102_lap_tunggak_summary->Pager->render() ?>
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
<?php if ((!$r102_lap_tunggak_summary->isExport() || $r102_lap_tunggak_summary->isExport("print")) && !$DashboardReport) { ?>
</div>
<!-- /#ew-center -->
<?php } ?>
<?php if ((!$r102_lap_tunggak_summary->isExport() || $r102_lap_tunggak_summary->isExport("print")) && !$DashboardReport) { ?>
</div>
<!-- /.row -->
<?php } ?>
<?php if ((!$r102_lap_tunggak_summary->isExport() || $r102_lap_tunggak_summary->isExport("print")) && !$DashboardReport) { ?>
</div>
<!-- /.ew-report -->
<?php } ?>
<?php
$r102_lap_tunggak_summary->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<?php if (!$r102_lap_tunggak_summary->isExport() && !$r102_lap_tunggak_summary->DrillDown && !$DashboardReport) { ?>
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
$r102_lap_tunggak_summary->terminate();
?>