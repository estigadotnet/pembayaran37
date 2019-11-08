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
$t102_daf_kelas_siswa_add = new t102_daf_kelas_siswa_add();

// Run the page
$t102_daf_kelas_siswa_add->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t102_daf_kelas_siswa_add->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft102_daf_kelas_siswaadd, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "add";
	ft102_daf_kelas_siswaadd = currentForm = new ew.Form("ft102_daf_kelas_siswaadd", "add");

	// Validate form
	ft102_daf_kelas_siswaadd.validate = function() {
		if (!this.validateRequired)
			return true; // Ignore validation
		var $ = jQuery, fobj = this.getForm(), $fobj = $(fobj);
		if ($fobj.find("#confirm").val() == "F")
			return true;
		var elm, felm, uelm, addcnt = 0;
		var $k = $fobj.find("#" + this.formKeyCountName); // Get key_count
		var rowcnt = ($k[0]) ? parseInt($k.val(), 10) : 1;
		var startcnt = (rowcnt == 0) ? 0 : 1; // Check rowcnt == 0 => Inline-Add
		var gridinsert = ["insert", "gridinsert"].includes($fobj.find("#action").val()) && $k[0];
		for (var i = startcnt; i <= rowcnt; i++) {
			var infix = ($k[0]) ? String(i) : "";
			$fobj.data("rowindex", infix);
			<?php if ($t102_daf_kelas_siswa_add->siswa_id->Required) { ?>
				elm = this.getElements("x" + infix + "_siswa_id");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t102_daf_kelas_siswa_add->siswa_id->caption(), $t102_daf_kelas_siswa_add->siswa_id->RequiredErrorMessage)) ?>");
			<?php } ?>

				// Call Form_CustomValidate event
				if (!this.Form_CustomValidate(fobj))
					return false;
		}

		// Process detail forms
		var dfs = $fobj.find("input[name='detailpage']").get();
		for (var i = 0; i < dfs.length; i++) {
			var df = dfs[i], val = df.value;
			if (val && ew.forms[val])
				if (!ew.forms[val].validate())
					return false;
		}
		return true;
	}

	// Form_CustomValidate
	ft102_daf_kelas_siswaadd.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	ft102_daf_kelas_siswaadd.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	ft102_daf_kelas_siswaadd.lists["x_siswa_id"] = <?php echo $t102_daf_kelas_siswa_add->siswa_id->Lookup->toClientList($t102_daf_kelas_siswa_add) ?>;
	ft102_daf_kelas_siswaadd.lists["x_siswa_id"].options = <?php echo JsonEncode($t102_daf_kelas_siswa_add->siswa_id->lookupOptions()) ?>;
	loadjs.done("ft102_daf_kelas_siswaadd");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t102_daf_kelas_siswa_add->showPageHeader(); ?>
<?php
$t102_daf_kelas_siswa_add->showMessage();
?>
<form name="ft102_daf_kelas_siswaadd" id="ft102_daf_kelas_siswaadd" class="<?php echo $t102_daf_kelas_siswa_add->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t102_daf_kelas_siswa">
<input type="hidden" name="action" id="action" value="insert">
<input type="hidden" name="modal" value="<?php echo (int)$t102_daf_kelas_siswa_add->IsModal ?>">
<?php if ($t102_daf_kelas_siswa->getCurrentMasterTable() == "t101_daf_kelas") { ?>
<input type="hidden" name="<?php echo Config("TABLE_SHOW_MASTER") ?>" value="t101_daf_kelas">
<input type="hidden" name="fk_id" value="<?php echo $t102_daf_kelas_siswa_add->daf_kelas_id->getSessionValue() ?>">
<?php } ?>
<div class="ew-add-div"><!-- page* -->
<?php if ($t102_daf_kelas_siswa_add->siswa_id->Visible) { // siswa_id ?>
	<div id="r_siswa_id" class="form-group row">
		<label id="elh_t102_daf_kelas_siswa_siswa_id" for="x_siswa_id" class="<?php echo $t102_daf_kelas_siswa_add->LeftColumnClass ?>"><?php echo $t102_daf_kelas_siswa_add->siswa_id->caption() ?><?php echo $t102_daf_kelas_siswa_add->siswa_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t102_daf_kelas_siswa_add->RightColumnClass ?>"><div <?php echo $t102_daf_kelas_siswa_add->siswa_id->cellAttributes() ?>>
<span id="el_t102_daf_kelas_siswa_siswa_id">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_siswa_id"><?php echo EmptyValue(strval($t102_daf_kelas_siswa_add->siswa_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t102_daf_kelas_siswa_add->siswa_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t102_daf_kelas_siswa_add->siswa_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t102_daf_kelas_siswa_add->siswa_id->ReadOnly || $t102_daf_kelas_siswa_add->siswa_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_siswa_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t102_daf_kelas_siswa_add->siswa_id->Lookup->getParamTag($t102_daf_kelas_siswa_add, "p_x_siswa_id") ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t102_daf_kelas_siswa_add->siswa_id->displayValueSeparatorAttribute() ?>" name="x_siswa_id" id="x_siswa_id" value="<?php echo $t102_daf_kelas_siswa_add->siswa_id->CurrentValue ?>"<?php echo $t102_daf_kelas_siswa_add->siswa_id->editAttributes() ?>>
</span>
<?php echo $t102_daf_kelas_siswa_add->siswa_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
	<?php if (strval($t102_daf_kelas_siswa_add->daf_kelas_id->getSessionValue()) != "") { ?>
	<input type="hidden" name="x_daf_kelas_id" id="x_daf_kelas_id" value="<?php echo HtmlEncode(strval($t102_daf_kelas_siswa_add->daf_kelas_id->getSessionValue())) ?>">
	<?php } ?>
<?php if (!$t102_daf_kelas_siswa_add->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $t102_daf_kelas_siswa_add->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("AddBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t102_daf_kelas_siswa_add->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$t102_daf_kelas_siswa_add->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<script>
loadjs.ready("load", function() {

	// Startup script
	// Write your table-specific startup script here
	// console.log("page loaded");

});
</script>
<?php include_once "footer.php"; ?>
<?php
$t102_daf_kelas_siswa_add->terminate();
?>