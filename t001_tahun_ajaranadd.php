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
$t001_tahun_ajaran_add = new t001_tahun_ajaran_add();

// Run the page
$t001_tahun_ajaran_add->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t001_tahun_ajaran_add->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft001_tahun_ajaranadd, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "add";
	ft001_tahun_ajaranadd = currentForm = new ew.Form("ft001_tahun_ajaranadd", "add");

	// Validate form
	ft001_tahun_ajaranadd.validate = function() {
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
			<?php if ($t001_tahun_ajaran_add->Mulai->Required) { ?>
				elm = this.getElements("x" + infix + "_Mulai");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t001_tahun_ajaran_add->Mulai->caption(), $t001_tahun_ajaran_add->Mulai->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t001_tahun_ajaran_add->Selesai->Required) { ?>
				elm = this.getElements("x" + infix + "_Selesai");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t001_tahun_ajaran_add->Selesai->caption(), $t001_tahun_ajaran_add->Selesai->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t001_tahun_ajaran_add->Aktif->Required) { ?>
				elm = this.getElements("x" + infix + "_Aktif[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t001_tahun_ajaran_add->Aktif->caption(), $t001_tahun_ajaran_add->Aktif->RequiredErrorMessage)) ?>");
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
	ft001_tahun_ajaranadd.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	ft001_tahun_ajaranadd.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	ft001_tahun_ajaranadd.lists["x_Aktif[]"] = <?php echo $t001_tahun_ajaran_add->Aktif->Lookup->toClientList($t001_tahun_ajaran_add) ?>;
	ft001_tahun_ajaranadd.lists["x_Aktif[]"].options = <?php echo JsonEncode($t001_tahun_ajaran_add->Aktif->options(FALSE, TRUE)) ?>;
	loadjs.done("ft001_tahun_ajaranadd");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t001_tahun_ajaran_add->showPageHeader(); ?>
<?php
$t001_tahun_ajaran_add->showMessage();
?>
<form name="ft001_tahun_ajaranadd" id="ft001_tahun_ajaranadd" class="<?php echo $t001_tahun_ajaran_add->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t001_tahun_ajaran">
<input type="hidden" name="action" id="action" value="insert">
<input type="hidden" name="modal" value="<?php echo (int)$t001_tahun_ajaran_add->IsModal ?>">
<div class="ew-add-div"><!-- page* -->
<?php if ($t001_tahun_ajaran_add->Mulai->Visible) { // Mulai ?>
	<div id="r_Mulai" class="form-group row">
		<label id="elh_t001_tahun_ajaran_Mulai" for="x_Mulai" class="<?php echo $t001_tahun_ajaran_add->LeftColumnClass ?>"><?php echo $t001_tahun_ajaran_add->Mulai->caption() ?><?php echo $t001_tahun_ajaran_add->Mulai->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t001_tahun_ajaran_add->RightColumnClass ?>"><div <?php echo $t001_tahun_ajaran_add->Mulai->cellAttributes() ?>>
<span id="el_t001_tahun_ajaran_Mulai">
<input type="text" data-table="t001_tahun_ajaran" data-field="x_Mulai" name="x_Mulai" id="x_Mulai" size="30" maxlength="4" placeholder="<?php echo HtmlEncode($t001_tahun_ajaran_add->Mulai->getPlaceHolder()) ?>" value="<?php echo $t001_tahun_ajaran_add->Mulai->EditValue ?>"<?php echo $t001_tahun_ajaran_add->Mulai->editAttributes() ?>>
</span>
<?php echo $t001_tahun_ajaran_add->Mulai->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t001_tahun_ajaran_add->Selesai->Visible) { // Selesai ?>
	<div id="r_Selesai" class="form-group row">
		<label id="elh_t001_tahun_ajaran_Selesai" for="x_Selesai" class="<?php echo $t001_tahun_ajaran_add->LeftColumnClass ?>"><?php echo $t001_tahun_ajaran_add->Selesai->caption() ?><?php echo $t001_tahun_ajaran_add->Selesai->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t001_tahun_ajaran_add->RightColumnClass ?>"><div <?php echo $t001_tahun_ajaran_add->Selesai->cellAttributes() ?>>
<span id="el_t001_tahun_ajaran_Selesai">
<input type="text" data-table="t001_tahun_ajaran" data-field="x_Selesai" name="x_Selesai" id="x_Selesai" size="30" maxlength="4" placeholder="<?php echo HtmlEncode($t001_tahun_ajaran_add->Selesai->getPlaceHolder()) ?>" value="<?php echo $t001_tahun_ajaran_add->Selesai->EditValue ?>"<?php echo $t001_tahun_ajaran_add->Selesai->editAttributes() ?>>
</span>
<?php echo $t001_tahun_ajaran_add->Selesai->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t001_tahun_ajaran_add->Aktif->Visible) { // Aktif ?>
	<div id="r_Aktif" class="form-group row">
		<label id="elh_t001_tahun_ajaran_Aktif" class="<?php echo $t001_tahun_ajaran_add->LeftColumnClass ?>"><?php echo $t001_tahun_ajaran_add->Aktif->caption() ?><?php echo $t001_tahun_ajaran_add->Aktif->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t001_tahun_ajaran_add->RightColumnClass ?>"><div <?php echo $t001_tahun_ajaran_add->Aktif->cellAttributes() ?>>
<span id="el_t001_tahun_ajaran_Aktif">
<?php
$selwrk = ConvertToBool($t001_tahun_ajaran_add->Aktif->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t001_tahun_ajaran" data-field="x_Aktif" name="x_Aktif[]" id="x_Aktif[]" value="1"<?php echo $selwrk ?><?php echo $t001_tahun_ajaran_add->Aktif->editAttributes() ?>>
	<label class="custom-control-label" for="x_Aktif[]"></label>
</div>
</span>
<?php echo $t001_tahun_ajaran_add->Aktif->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
<?php if (!$t001_tahun_ajaran_add->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $t001_tahun_ajaran_add->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("AddBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t001_tahun_ajaran_add->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$t001_tahun_ajaran_add->showPageFooter();
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
$t001_tahun_ajaran_add->terminate();
?>