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
$t004_siswa_add = new t004_siswa_add();

// Run the page
$t004_siswa_add->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t004_siswa_add->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft004_siswaadd, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "add";
	ft004_siswaadd = currentForm = new ew.Form("ft004_siswaadd", "add");

	// Validate form
	ft004_siswaadd.validate = function() {
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
			<?php if ($t004_siswa_add->NomorInduk->Required) { ?>
				elm = this.getElements("x" + infix + "_NomorInduk");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t004_siswa_add->NomorInduk->caption(), $t004_siswa_add->NomorInduk->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t004_siswa_add->Nama->Required) { ?>
				elm = this.getElements("x" + infix + "_Nama");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t004_siswa_add->Nama->caption(), $t004_siswa_add->Nama->RequiredErrorMessage)) ?>");
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
	ft004_siswaadd.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	ft004_siswaadd.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	loadjs.done("ft004_siswaadd");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t004_siswa_add->showPageHeader(); ?>
<?php
$t004_siswa_add->showMessage();
?>
<form name="ft004_siswaadd" id="ft004_siswaadd" class="<?php echo $t004_siswa_add->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t004_siswa">
<input type="hidden" name="action" id="action" value="insert">
<input type="hidden" name="modal" value="<?php echo (int)$t004_siswa_add->IsModal ?>">
<div class="ew-add-div"><!-- page* -->
<?php if ($t004_siswa_add->NomorInduk->Visible) { // NomorInduk ?>
	<div id="r_NomorInduk" class="form-group row">
		<label id="elh_t004_siswa_NomorInduk" for="x_NomorInduk" class="<?php echo $t004_siswa_add->LeftColumnClass ?>"><?php echo $t004_siswa_add->NomorInduk->caption() ?><?php echo $t004_siswa_add->NomorInduk->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t004_siswa_add->RightColumnClass ?>"><div <?php echo $t004_siswa_add->NomorInduk->cellAttributes() ?>>
<span id="el_t004_siswa_NomorInduk">
<input type="text" data-table="t004_siswa" data-field="x_NomorInduk" name="x_NomorInduk" id="x_NomorInduk" size="30" maxlength="25" placeholder="<?php echo HtmlEncode($t004_siswa_add->NomorInduk->getPlaceHolder()) ?>" value="<?php echo $t004_siswa_add->NomorInduk->EditValue ?>"<?php echo $t004_siswa_add->NomorInduk->editAttributes() ?>>
</span>
<?php echo $t004_siswa_add->NomorInduk->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t004_siswa_add->Nama->Visible) { // Nama ?>
	<div id="r_Nama" class="form-group row">
		<label id="elh_t004_siswa_Nama" for="x_Nama" class="<?php echo $t004_siswa_add->LeftColumnClass ?>"><?php echo $t004_siswa_add->Nama->caption() ?><?php echo $t004_siswa_add->Nama->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t004_siswa_add->RightColumnClass ?>"><div <?php echo $t004_siswa_add->Nama->cellAttributes() ?>>
<span id="el_t004_siswa_Nama">
<input type="text" data-table="t004_siswa" data-field="x_Nama" name="x_Nama" id="x_Nama" size="30" maxlength="50" placeholder="<?php echo HtmlEncode($t004_siswa_add->Nama->getPlaceHolder()) ?>" value="<?php echo $t004_siswa_add->Nama->EditValue ?>"<?php echo $t004_siswa_add->Nama->editAttributes() ?>>
</span>
<?php echo $t004_siswa_add->Nama->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
<?php if (!$t004_siswa_add->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $t004_siswa_add->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("AddBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t004_siswa_add->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$t004_siswa_add->showPageFooter();
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
$t004_siswa_add->terminate();
?>