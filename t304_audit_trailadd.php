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
$t304_audit_trail_add = new t304_audit_trail_add();

// Run the page
$t304_audit_trail_add->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t304_audit_trail_add->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft304_audit_trailadd, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "add";
	ft304_audit_trailadd = currentForm = new ew.Form("ft304_audit_trailadd", "add");

	// Validate form
	ft304_audit_trailadd.validate = function() {
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
			<?php if ($t304_audit_trail_add->datetime->Required) { ?>
				elm = this.getElements("x" + infix + "_datetime");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t304_audit_trail_add->datetime->caption(), $t304_audit_trail_add->datetime->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_datetime");
				if (elm && !ew.checkDateDef(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t304_audit_trail_add->datetime->errorMessage()) ?>");
			<?php if ($t304_audit_trail_add->script->Required) { ?>
				elm = this.getElements("x" + infix + "_script");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t304_audit_trail_add->script->caption(), $t304_audit_trail_add->script->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t304_audit_trail_add->user->Required) { ?>
				elm = this.getElements("x" + infix + "_user");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t304_audit_trail_add->user->caption(), $t304_audit_trail_add->user->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t304_audit_trail_add->_action->Required) { ?>
				elm = this.getElements("x" + infix + "__action");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t304_audit_trail_add->_action->caption(), $t304_audit_trail_add->_action->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t304_audit_trail_add->_table->Required) { ?>
				elm = this.getElements("x" + infix + "__table");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t304_audit_trail_add->_table->caption(), $t304_audit_trail_add->_table->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t304_audit_trail_add->field->Required) { ?>
				elm = this.getElements("x" + infix + "_field");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t304_audit_trail_add->field->caption(), $t304_audit_trail_add->field->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t304_audit_trail_add->keyvalue->Required) { ?>
				elm = this.getElements("x" + infix + "_keyvalue");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t304_audit_trail_add->keyvalue->caption(), $t304_audit_trail_add->keyvalue->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t304_audit_trail_add->oldvalue->Required) { ?>
				elm = this.getElements("x" + infix + "_oldvalue");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t304_audit_trail_add->oldvalue->caption(), $t304_audit_trail_add->oldvalue->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t304_audit_trail_add->newvalue->Required) { ?>
				elm = this.getElements("x" + infix + "_newvalue");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t304_audit_trail_add->newvalue->caption(), $t304_audit_trail_add->newvalue->RequiredErrorMessage)) ?>");
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
	ft304_audit_trailadd.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	ft304_audit_trailadd.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	loadjs.done("ft304_audit_trailadd");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t304_audit_trail_add->showPageHeader(); ?>
<?php
$t304_audit_trail_add->showMessage();
?>
<form name="ft304_audit_trailadd" id="ft304_audit_trailadd" class="<?php echo $t304_audit_trail_add->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t304_audit_trail">
<input type="hidden" name="action" id="action" value="insert">
<input type="hidden" name="modal" value="<?php echo (int)$t304_audit_trail_add->IsModal ?>">
<div class="ew-add-div"><!-- page* -->
<?php if ($t304_audit_trail_add->datetime->Visible) { // datetime ?>
	<div id="r_datetime" class="form-group row">
		<label id="elh_t304_audit_trail_datetime" for="x_datetime" class="<?php echo $t304_audit_trail_add->LeftColumnClass ?>"><?php echo $t304_audit_trail_add->datetime->caption() ?><?php echo $t304_audit_trail_add->datetime->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t304_audit_trail_add->RightColumnClass ?>"><div <?php echo $t304_audit_trail_add->datetime->cellAttributes() ?>>
<span id="el_t304_audit_trail_datetime">
<input type="text" data-table="t304_audit_trail" data-field="x_datetime" name="x_datetime" id="x_datetime" maxlength="19" placeholder="<?php echo HtmlEncode($t304_audit_trail_add->datetime->getPlaceHolder()) ?>" value="<?php echo $t304_audit_trail_add->datetime->EditValue ?>"<?php echo $t304_audit_trail_add->datetime->editAttributes() ?>>
<?php if (!$t304_audit_trail_add->datetime->ReadOnly && !$t304_audit_trail_add->datetime->Disabled && !isset($t304_audit_trail_add->datetime->EditAttrs["readonly"]) && !isset($t304_audit_trail_add->datetime->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft304_audit_trailadd", "datetimepicker"], function() {
	ew.createDateTimePicker("ft304_audit_trailadd", "x_datetime", {"ignoreReadonly":true,"useCurrent":false,"format":0});
});
</script>
<?php } ?>
</span>
<?php echo $t304_audit_trail_add->datetime->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t304_audit_trail_add->script->Visible) { // script ?>
	<div id="r_script" class="form-group row">
		<label id="elh_t304_audit_trail_script" for="x_script" class="<?php echo $t304_audit_trail_add->LeftColumnClass ?>"><?php echo $t304_audit_trail_add->script->caption() ?><?php echo $t304_audit_trail_add->script->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t304_audit_trail_add->RightColumnClass ?>"><div <?php echo $t304_audit_trail_add->script->cellAttributes() ?>>
<span id="el_t304_audit_trail_script">
<input type="text" data-table="t304_audit_trail" data-field="x_script" name="x_script" id="x_script" size="30" maxlength="80" placeholder="<?php echo HtmlEncode($t304_audit_trail_add->script->getPlaceHolder()) ?>" value="<?php echo $t304_audit_trail_add->script->EditValue ?>"<?php echo $t304_audit_trail_add->script->editAttributes() ?>>
</span>
<?php echo $t304_audit_trail_add->script->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t304_audit_trail_add->user->Visible) { // user ?>
	<div id="r_user" class="form-group row">
		<label id="elh_t304_audit_trail_user" for="x_user" class="<?php echo $t304_audit_trail_add->LeftColumnClass ?>"><?php echo $t304_audit_trail_add->user->caption() ?><?php echo $t304_audit_trail_add->user->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t304_audit_trail_add->RightColumnClass ?>"><div <?php echo $t304_audit_trail_add->user->cellAttributes() ?>>
<span id="el_t304_audit_trail_user">
<input type="text" data-table="t304_audit_trail" data-field="x_user" name="x_user" id="x_user" size="30" maxlength="80" placeholder="<?php echo HtmlEncode($t304_audit_trail_add->user->getPlaceHolder()) ?>" value="<?php echo $t304_audit_trail_add->user->EditValue ?>"<?php echo $t304_audit_trail_add->user->editAttributes() ?>>
</span>
<?php echo $t304_audit_trail_add->user->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t304_audit_trail_add->_action->Visible) { // action ?>
	<div id="r__action" class="form-group row">
		<label id="elh_t304_audit_trail__action" for="x__action" class="<?php echo $t304_audit_trail_add->LeftColumnClass ?>"><?php echo $t304_audit_trail_add->_action->caption() ?><?php echo $t304_audit_trail_add->_action->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t304_audit_trail_add->RightColumnClass ?>"><div <?php echo $t304_audit_trail_add->_action->cellAttributes() ?>>
<span id="el_t304_audit_trail__action">
<input type="text" data-table="t304_audit_trail" data-field="x__action" name="x__action" id="x__action" size="30" maxlength="80" placeholder="<?php echo HtmlEncode($t304_audit_trail_add->_action->getPlaceHolder()) ?>" value="<?php echo $t304_audit_trail_add->_action->EditValue ?>"<?php echo $t304_audit_trail_add->_action->editAttributes() ?>>
</span>
<?php echo $t304_audit_trail_add->_action->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t304_audit_trail_add->_table->Visible) { // table ?>
	<div id="r__table" class="form-group row">
		<label id="elh_t304_audit_trail__table" for="x__table" class="<?php echo $t304_audit_trail_add->LeftColumnClass ?>"><?php echo $t304_audit_trail_add->_table->caption() ?><?php echo $t304_audit_trail_add->_table->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t304_audit_trail_add->RightColumnClass ?>"><div <?php echo $t304_audit_trail_add->_table->cellAttributes() ?>>
<span id="el_t304_audit_trail__table">
<input type="text" data-table="t304_audit_trail" data-field="x__table" name="x__table" id="x__table" size="30" maxlength="80" placeholder="<?php echo HtmlEncode($t304_audit_trail_add->_table->getPlaceHolder()) ?>" value="<?php echo $t304_audit_trail_add->_table->EditValue ?>"<?php echo $t304_audit_trail_add->_table->editAttributes() ?>>
</span>
<?php echo $t304_audit_trail_add->_table->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t304_audit_trail_add->field->Visible) { // field ?>
	<div id="r_field" class="form-group row">
		<label id="elh_t304_audit_trail_field" for="x_field" class="<?php echo $t304_audit_trail_add->LeftColumnClass ?>"><?php echo $t304_audit_trail_add->field->caption() ?><?php echo $t304_audit_trail_add->field->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t304_audit_trail_add->RightColumnClass ?>"><div <?php echo $t304_audit_trail_add->field->cellAttributes() ?>>
<span id="el_t304_audit_trail_field">
<input type="text" data-table="t304_audit_trail" data-field="x_field" name="x_field" id="x_field" size="30" maxlength="80" placeholder="<?php echo HtmlEncode($t304_audit_trail_add->field->getPlaceHolder()) ?>" value="<?php echo $t304_audit_trail_add->field->EditValue ?>"<?php echo $t304_audit_trail_add->field->editAttributes() ?>>
</span>
<?php echo $t304_audit_trail_add->field->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t304_audit_trail_add->keyvalue->Visible) { // keyvalue ?>
	<div id="r_keyvalue" class="form-group row">
		<label id="elh_t304_audit_trail_keyvalue" for="x_keyvalue" class="<?php echo $t304_audit_trail_add->LeftColumnClass ?>"><?php echo $t304_audit_trail_add->keyvalue->caption() ?><?php echo $t304_audit_trail_add->keyvalue->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t304_audit_trail_add->RightColumnClass ?>"><div <?php echo $t304_audit_trail_add->keyvalue->cellAttributes() ?>>
<span id="el_t304_audit_trail_keyvalue">
<textarea data-table="t304_audit_trail" data-field="x_keyvalue" name="x_keyvalue" id="x_keyvalue" cols="35" rows="4" placeholder="<?php echo HtmlEncode($t304_audit_trail_add->keyvalue->getPlaceHolder()) ?>"<?php echo $t304_audit_trail_add->keyvalue->editAttributes() ?>><?php echo $t304_audit_trail_add->keyvalue->EditValue ?></textarea>
</span>
<?php echo $t304_audit_trail_add->keyvalue->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t304_audit_trail_add->oldvalue->Visible) { // oldvalue ?>
	<div id="r_oldvalue" class="form-group row">
		<label id="elh_t304_audit_trail_oldvalue" for="x_oldvalue" class="<?php echo $t304_audit_trail_add->LeftColumnClass ?>"><?php echo $t304_audit_trail_add->oldvalue->caption() ?><?php echo $t304_audit_trail_add->oldvalue->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t304_audit_trail_add->RightColumnClass ?>"><div <?php echo $t304_audit_trail_add->oldvalue->cellAttributes() ?>>
<span id="el_t304_audit_trail_oldvalue">
<textarea data-table="t304_audit_trail" data-field="x_oldvalue" name="x_oldvalue" id="x_oldvalue" cols="35" rows="4" placeholder="<?php echo HtmlEncode($t304_audit_trail_add->oldvalue->getPlaceHolder()) ?>"<?php echo $t304_audit_trail_add->oldvalue->editAttributes() ?>><?php echo $t304_audit_trail_add->oldvalue->EditValue ?></textarea>
</span>
<?php echo $t304_audit_trail_add->oldvalue->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t304_audit_trail_add->newvalue->Visible) { // newvalue ?>
	<div id="r_newvalue" class="form-group row">
		<label id="elh_t304_audit_trail_newvalue" for="x_newvalue" class="<?php echo $t304_audit_trail_add->LeftColumnClass ?>"><?php echo $t304_audit_trail_add->newvalue->caption() ?><?php echo $t304_audit_trail_add->newvalue->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t304_audit_trail_add->RightColumnClass ?>"><div <?php echo $t304_audit_trail_add->newvalue->cellAttributes() ?>>
<span id="el_t304_audit_trail_newvalue">
<textarea data-table="t304_audit_trail" data-field="x_newvalue" name="x_newvalue" id="x_newvalue" cols="35" rows="4" placeholder="<?php echo HtmlEncode($t304_audit_trail_add->newvalue->getPlaceHolder()) ?>"<?php echo $t304_audit_trail_add->newvalue->editAttributes() ?>><?php echo $t304_audit_trail_add->newvalue->EditValue ?></textarea>
</span>
<?php echo $t304_audit_trail_add->newvalue->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
<?php if (!$t304_audit_trail_add->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $t304_audit_trail_add->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("AddBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t304_audit_trail_add->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$t304_audit_trail_add->showPageFooter();
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
$t304_audit_trail_add->terminate();
?>