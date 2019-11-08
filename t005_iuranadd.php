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
$t005_iuran_add = new t005_iuran_add();

// Run the page
$t005_iuran_add->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t005_iuran_add->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft005_iuranadd, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "add";
	ft005_iuranadd = currentForm = new ew.Form("ft005_iuranadd", "add");

	// Validate form
	ft005_iuranadd.validate = function() {
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
			<?php if ($t005_iuran_add->Nama->Required) { ?>
				elm = this.getElements("x" + infix + "_Nama");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t005_iuran_add->Nama->caption(), $t005_iuran_add->Nama->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t005_iuran_add->Jenis->Required) { ?>
				elm = this.getElements("x" + infix + "_Jenis");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t005_iuran_add->Jenis->caption(), $t005_iuran_add->Jenis->RequiredErrorMessage)) ?>");
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
	ft005_iuranadd.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	ft005_iuranadd.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	ft005_iuranadd.lists["x_Jenis"] = <?php echo $t005_iuran_add->Jenis->Lookup->toClientList($t005_iuran_add) ?>;
	ft005_iuranadd.lists["x_Jenis"].options = <?php echo JsonEncode($t005_iuran_add->Jenis->options(FALSE, TRUE)) ?>;
	loadjs.done("ft005_iuranadd");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t005_iuran_add->showPageHeader(); ?>
<?php
$t005_iuran_add->showMessage();
?>
<form name="ft005_iuranadd" id="ft005_iuranadd" class="<?php echo $t005_iuran_add->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t005_iuran">
<input type="hidden" name="action" id="action" value="insert">
<input type="hidden" name="modal" value="<?php echo (int)$t005_iuran_add->IsModal ?>">
<div class="ew-add-div"><!-- page* -->
<?php if ($t005_iuran_add->Nama->Visible) { // Nama ?>
	<div id="r_Nama" class="form-group row">
		<label id="elh_t005_iuran_Nama" for="x_Nama" class="<?php echo $t005_iuran_add->LeftColumnClass ?>"><?php echo $t005_iuran_add->Nama->caption() ?><?php echo $t005_iuran_add->Nama->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t005_iuran_add->RightColumnClass ?>"><div <?php echo $t005_iuran_add->Nama->cellAttributes() ?>>
<span id="el_t005_iuran_Nama">
<input type="text" data-table="t005_iuran" data-field="x_Nama" name="x_Nama" id="x_Nama" size="30" maxlength="25" placeholder="<?php echo HtmlEncode($t005_iuran_add->Nama->getPlaceHolder()) ?>" value="<?php echo $t005_iuran_add->Nama->EditValue ?>"<?php echo $t005_iuran_add->Nama->editAttributes() ?>>
</span>
<?php echo $t005_iuran_add->Nama->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t005_iuran_add->Jenis->Visible) { // Jenis ?>
	<div id="r_Jenis" class="form-group row">
		<label id="elh_t005_iuran_Jenis" class="<?php echo $t005_iuran_add->LeftColumnClass ?>"><?php echo $t005_iuran_add->Jenis->caption() ?><?php echo $t005_iuran_add->Jenis->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t005_iuran_add->RightColumnClass ?>"><div <?php echo $t005_iuran_add->Jenis->cellAttributes() ?>>
<span id="el_t005_iuran_Jenis">
<div id="tp_x_Jenis" class="ew-template"><input type="radio" class="custom-control-input" data-table="t005_iuran" data-field="x_Jenis" data-value-separator="<?php echo $t005_iuran_add->Jenis->displayValueSeparatorAttribute() ?>" name="x_Jenis" id="x_Jenis" value="{value}"<?php echo $t005_iuran_add->Jenis->editAttributes() ?>></div>
<div id="dsl_x_Jenis" data-repeatcolumn="5" class="ew-item-list d-none"><div>
<?php echo $t005_iuran_add->Jenis->radioButtonListHtml(FALSE, "x_Jenis") ?>
</div></div>
</span>
<?php echo $t005_iuran_add->Jenis->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
<?php if (!$t005_iuran_add->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $t005_iuran_add->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("AddBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t005_iuran_add->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$t005_iuran_add->showPageFooter();
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
$t005_iuran_add->terminate();
?>