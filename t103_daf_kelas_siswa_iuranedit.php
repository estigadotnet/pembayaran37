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
$t103_daf_kelas_siswa_iuran_edit = new t103_daf_kelas_siswa_iuran_edit();

// Run the page
$t103_daf_kelas_siswa_iuran_edit->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t103_daf_kelas_siswa_iuran_edit->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft103_daf_kelas_siswa_iuranedit, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "edit";
	ft103_daf_kelas_siswa_iuranedit = currentForm = new ew.Form("ft103_daf_kelas_siswa_iuranedit", "edit");

	// Validate form
	ft103_daf_kelas_siswa_iuranedit.validate = function() {
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
			<?php if ($t103_daf_kelas_siswa_iuran_edit->iuran_id->Required) { ?>
				elm = this.getElements("x" + infix + "_iuran_id");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->iuran_id->caption(), $t103_daf_kelas_siswa_iuran_edit->iuran_id->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_edit->Jumlah->Required) { ?>
				elm = this.getElements("x" + infix + "_Jumlah");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->Jumlah->caption(), $t103_daf_kelas_siswa_iuran_edit->Jumlah->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_Jumlah");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->Jumlah->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->byr01->Required) { ?>
				elm = this.getElements("x" + infix + "_byr01[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->byr01->caption(), $t103_daf_kelas_siswa_iuran_edit->byr01->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_edit->jml01->Required) { ?>
				elm = this.getElements("x" + infix + "_jml01");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->jml01->caption(), $t103_daf_kelas_siswa_iuran_edit->jml01->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml01");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->jml01->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl01->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl01");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->tgl01->caption(), $t103_daf_kelas_siswa_iuran_edit->tgl01->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl01");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->tgl01->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->byr02->Required) { ?>
				elm = this.getElements("x" + infix + "_byr02[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->byr02->caption(), $t103_daf_kelas_siswa_iuran_edit->byr02->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_edit->jml02->Required) { ?>
				elm = this.getElements("x" + infix + "_jml02");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->jml02->caption(), $t103_daf_kelas_siswa_iuran_edit->jml02->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml02");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->jml02->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl02->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl02");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->tgl02->caption(), $t103_daf_kelas_siswa_iuran_edit->tgl02->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl02");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->tgl02->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->byr03->Required) { ?>
				elm = this.getElements("x" + infix + "_byr03[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->byr03->caption(), $t103_daf_kelas_siswa_iuran_edit->byr03->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_edit->jml03->Required) { ?>
				elm = this.getElements("x" + infix + "_jml03");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->jml03->caption(), $t103_daf_kelas_siswa_iuran_edit->jml03->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml03");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->jml03->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl03->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl03");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->tgl03->caption(), $t103_daf_kelas_siswa_iuran_edit->tgl03->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl03");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->tgl03->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->byr04->Required) { ?>
				elm = this.getElements("x" + infix + "_byr04[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->byr04->caption(), $t103_daf_kelas_siswa_iuran_edit->byr04->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_edit->jml04->Required) { ?>
				elm = this.getElements("x" + infix + "_jml04");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->jml04->caption(), $t103_daf_kelas_siswa_iuran_edit->jml04->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml04");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->jml04->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl04->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl04");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->tgl04->caption(), $t103_daf_kelas_siswa_iuran_edit->tgl04->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl04");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->tgl04->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->byr05->Required) { ?>
				elm = this.getElements("x" + infix + "_byr05[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->byr05->caption(), $t103_daf_kelas_siswa_iuran_edit->byr05->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_edit->jml05->Required) { ?>
				elm = this.getElements("x" + infix + "_jml05");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->jml05->caption(), $t103_daf_kelas_siswa_iuran_edit->jml05->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml05");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->jml05->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl05->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl05");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->tgl05->caption(), $t103_daf_kelas_siswa_iuran_edit->tgl05->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl05");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->tgl05->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->byr06->Required) { ?>
				elm = this.getElements("x" + infix + "_byr06[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->byr06->caption(), $t103_daf_kelas_siswa_iuran_edit->byr06->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_edit->jml06->Required) { ?>
				elm = this.getElements("x" + infix + "_jml06");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->jml06->caption(), $t103_daf_kelas_siswa_iuran_edit->jml06->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml06");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->jml06->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl06->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl06");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->tgl06->caption(), $t103_daf_kelas_siswa_iuran_edit->tgl06->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl06");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->tgl06->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->byr07->Required) { ?>
				elm = this.getElements("x" + infix + "_byr07[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->byr07->caption(), $t103_daf_kelas_siswa_iuran_edit->byr07->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_edit->jml07->Required) { ?>
				elm = this.getElements("x" + infix + "_jml07");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->jml07->caption(), $t103_daf_kelas_siswa_iuran_edit->jml07->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml07");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->jml07->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl07->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl07");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->tgl07->caption(), $t103_daf_kelas_siswa_iuran_edit->tgl07->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl07");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->tgl07->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->byr08->Required) { ?>
				elm = this.getElements("x" + infix + "_byr08[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->byr08->caption(), $t103_daf_kelas_siswa_iuran_edit->byr08->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_edit->jml08->Required) { ?>
				elm = this.getElements("x" + infix + "_jml08");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->jml08->caption(), $t103_daf_kelas_siswa_iuran_edit->jml08->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml08");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->jml08->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl08->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl08");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->tgl08->caption(), $t103_daf_kelas_siswa_iuran_edit->tgl08->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl08");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->tgl08->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->byr09->Required) { ?>
				elm = this.getElements("x" + infix + "_byr09[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->byr09->caption(), $t103_daf_kelas_siswa_iuran_edit->byr09->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_edit->jml09->Required) { ?>
				elm = this.getElements("x" + infix + "_jml09");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->jml09->caption(), $t103_daf_kelas_siswa_iuran_edit->jml09->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml09");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->jml09->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl09->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl09");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->tgl09->caption(), $t103_daf_kelas_siswa_iuran_edit->tgl09->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl09");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->tgl09->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->byr10->Required) { ?>
				elm = this.getElements("x" + infix + "_byr10[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->byr10->caption(), $t103_daf_kelas_siswa_iuran_edit->byr10->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_edit->jml10->Required) { ?>
				elm = this.getElements("x" + infix + "_jml10");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->jml10->caption(), $t103_daf_kelas_siswa_iuran_edit->jml10->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml10");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->jml10->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl10->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl10");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->tgl10->caption(), $t103_daf_kelas_siswa_iuran_edit->tgl10->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl10");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->tgl10->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->byr11->Required) { ?>
				elm = this.getElements("x" + infix + "_byr11[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->byr11->caption(), $t103_daf_kelas_siswa_iuran_edit->byr11->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_edit->jml11->Required) { ?>
				elm = this.getElements("x" + infix + "_jml11");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->jml11->caption(), $t103_daf_kelas_siswa_iuran_edit->jml11->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml11");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->jml11->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl11->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl11");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->tgl11->caption(), $t103_daf_kelas_siswa_iuran_edit->tgl11->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl11");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->tgl11->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->byr12->Required) { ?>
				elm = this.getElements("x" + infix + "_byr12[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->byr12->caption(), $t103_daf_kelas_siswa_iuran_edit->byr12->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_edit->jml12->Required) { ?>
				elm = this.getElements("x" + infix + "_jml12");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->jml12->caption(), $t103_daf_kelas_siswa_iuran_edit->jml12->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml12");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->jml12->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl12->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl12");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_edit->tgl12->caption(), $t103_daf_kelas_siswa_iuran_edit->tgl12->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl12");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_edit->tgl12->errorMessage()) ?>");

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
	ft103_daf_kelas_siswa_iuranedit.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	ft103_daf_kelas_siswa_iuranedit.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	ft103_daf_kelas_siswa_iuranedit.lists["x_iuran_id"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->iuran_id->Lookup->toClientList($t103_daf_kelas_siswa_iuran_edit) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_iuran_id"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->iuran_id->lookupOptions()) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr01[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr01->Lookup->toClientList($t103_daf_kelas_siswa_iuran_edit) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr01[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr01->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr02[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr02->Lookup->toClientList($t103_daf_kelas_siswa_iuran_edit) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr02[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr02->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr03[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr03->Lookup->toClientList($t103_daf_kelas_siswa_iuran_edit) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr03[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr03->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr04[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr04->Lookup->toClientList($t103_daf_kelas_siswa_iuran_edit) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr04[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr04->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr05[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr05->Lookup->toClientList($t103_daf_kelas_siswa_iuran_edit) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr05[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr05->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr06[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr06->Lookup->toClientList($t103_daf_kelas_siswa_iuran_edit) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr06[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr06->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr07[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr07->Lookup->toClientList($t103_daf_kelas_siswa_iuran_edit) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr07[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr07->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr08[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr08->Lookup->toClientList($t103_daf_kelas_siswa_iuran_edit) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr08[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr08->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr09[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr09->Lookup->toClientList($t103_daf_kelas_siswa_iuran_edit) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr09[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr09->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr10[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr10->Lookup->toClientList($t103_daf_kelas_siswa_iuran_edit) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr10[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr10->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr11[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr11->Lookup->toClientList($t103_daf_kelas_siswa_iuran_edit) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr11[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr11->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr12[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr12->Lookup->toClientList($t103_daf_kelas_siswa_iuran_edit) ?>;
	ft103_daf_kelas_siswa_iuranedit.lists["x_byr12[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr12->options(FALSE, TRUE)) ?>;
	loadjs.done("ft103_daf_kelas_siswa_iuranedit");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t103_daf_kelas_siswa_iuran_edit->showPageHeader(); ?>
<?php
$t103_daf_kelas_siswa_iuran_edit->showMessage();
?>
<form name="ft103_daf_kelas_siswa_iuranedit" id="ft103_daf_kelas_siswa_iuranedit" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t103_daf_kelas_siswa_iuran">
<input type="hidden" name="action" id="action" value="update">
<input type="hidden" name="modal" value="<?php echo (int)$t103_daf_kelas_siswa_iuran_edit->IsModal ?>">
<?php if ($t103_daf_kelas_siswa_iuran->getCurrentMasterTable() == "v102_daf_kelas_siswa") { ?>
<input type="hidden" name="<?php echo Config("TABLE_SHOW_MASTER") ?>" value="v102_daf_kelas_siswa">
<input type="hidden" name="fk_id" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->daf_kelas_siswa_id->getSessionValue() ?>">
<?php } ?>
<div class="ew-edit-div"><!-- page* -->
<?php if ($t103_daf_kelas_siswa_iuran_edit->iuran_id->Visible) { // iuran_id ?>
	<div id="r_iuran_id" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_iuran_id" for="x_iuran_id" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->iuran_id->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->iuran_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->iuran_id->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_iuran_id">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_iuran_id"><?php echo EmptyValue(strval($t103_daf_kelas_siswa_iuran_edit->iuran_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t103_daf_kelas_siswa_iuran_edit->iuran_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t103_daf_kelas_siswa_iuran_edit->iuran_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t103_daf_kelas_siswa_iuran_edit->iuran_id->ReadOnly || $t103_daf_kelas_siswa_iuran_edit->iuran_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_iuran_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t103_daf_kelas_siswa_iuran_edit->iuran_id->Lookup->getParamTag($t103_daf_kelas_siswa_iuran_edit, "p_x_iuran_id") ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t103_daf_kelas_siswa_iuran_edit->iuran_id->displayValueSeparatorAttribute() ?>" name="x_iuran_id" id="x_iuran_id" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->iuran_id->CurrentValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->iuran_id->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->iuran_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->Jumlah->Visible) { // Jumlah ?>
	<div id="r_Jumlah" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_Jumlah" for="x_Jumlah" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->Jumlah->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->Jumlah->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->Jumlah->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_Jumlah">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="x_Jumlah" id="x_Jumlah" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->Jumlah->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->Jumlah->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->Jumlah->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->Jumlah->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->byr01->Visible) { // byr01 ?>
	<div id="r_byr01" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr01" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->byr01->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr01->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->byr01->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr01">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_edit->byr01->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="x_byr01[]" id="x_byr01[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr01->editAttributes() ?>>
	<label class="custom-control-label" for="x_byr01[]"></label>
</div>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->byr01->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->jml01->Visible) { // jml01 ?>
	<div id="r_jml01" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml01" for="x_jml01" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->jml01->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->jml01->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->jml01->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml01">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="x_jml01" id="x_jml01" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->jml01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->jml01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->jml01->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->jml01->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl01->Visible) { // tgl01 ?>
	<div id="r_tgl01" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl01" for="x_tgl01" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl01->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl01->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->tgl01->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl01">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" data-format="7" name="x_tgl01" id="x_tgl01" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->tgl01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl01->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_edit->tgl01->ReadOnly && !$t103_daf_kelas_siswa_iuran_edit->tgl01->Disabled && !isset($t103_daf_kelas_siswa_iuran_edit->tgl01->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_edit->tgl01->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iuranedit", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl01", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl01->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->byr02->Visible) { // byr02 ?>
	<div id="r_byr02" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr02" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->byr02->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr02->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->byr02->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr02">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_edit->byr02->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="x_byr02[]" id="x_byr02[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr02->editAttributes() ?>>
	<label class="custom-control-label" for="x_byr02[]"></label>
</div>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->byr02->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->jml02->Visible) { // jml02 ?>
	<div id="r_jml02" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml02" for="x_jml02" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->jml02->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->jml02->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->jml02->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml02">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="x_jml02" id="x_jml02" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->jml02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->jml02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->jml02->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->jml02->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl02->Visible) { // tgl02 ?>
	<div id="r_tgl02" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl02" for="x_tgl02" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl02->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl02->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->tgl02->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl02">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" data-format="7" name="x_tgl02" id="x_tgl02" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->tgl02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl02->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_edit->tgl02->ReadOnly && !$t103_daf_kelas_siswa_iuran_edit->tgl02->Disabled && !isset($t103_daf_kelas_siswa_iuran_edit->tgl02->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_edit->tgl02->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iuranedit", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl02", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl02->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->byr03->Visible) { // byr03 ?>
	<div id="r_byr03" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr03" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->byr03->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr03->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->byr03->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr03">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_edit->byr03->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="x_byr03[]" id="x_byr03[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr03->editAttributes() ?>>
	<label class="custom-control-label" for="x_byr03[]"></label>
</div>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->byr03->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->jml03->Visible) { // jml03 ?>
	<div id="r_jml03" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml03" for="x_jml03" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->jml03->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->jml03->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->jml03->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml03">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="x_jml03" id="x_jml03" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->jml03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->jml03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->jml03->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->jml03->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl03->Visible) { // tgl03 ?>
	<div id="r_tgl03" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl03" for="x_tgl03" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl03->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl03->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->tgl03->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl03">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" data-format="7" name="x_tgl03" id="x_tgl03" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->tgl03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl03->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_edit->tgl03->ReadOnly && !$t103_daf_kelas_siswa_iuran_edit->tgl03->Disabled && !isset($t103_daf_kelas_siswa_iuran_edit->tgl03->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_edit->tgl03->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iuranedit", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl03", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl03->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->byr04->Visible) { // byr04 ?>
	<div id="r_byr04" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr04" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->byr04->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr04->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->byr04->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr04">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_edit->byr04->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="x_byr04[]" id="x_byr04[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr04->editAttributes() ?>>
	<label class="custom-control-label" for="x_byr04[]"></label>
</div>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->byr04->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->jml04->Visible) { // jml04 ?>
	<div id="r_jml04" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml04" for="x_jml04" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->jml04->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->jml04->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->jml04->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml04">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="x_jml04" id="x_jml04" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->jml04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->jml04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->jml04->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->jml04->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl04->Visible) { // tgl04 ?>
	<div id="r_tgl04" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl04" for="x_tgl04" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl04->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl04->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->tgl04->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl04">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" data-format="7" name="x_tgl04" id="x_tgl04" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->tgl04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl04->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_edit->tgl04->ReadOnly && !$t103_daf_kelas_siswa_iuran_edit->tgl04->Disabled && !isset($t103_daf_kelas_siswa_iuran_edit->tgl04->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_edit->tgl04->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iuranedit", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl04", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl04->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->byr05->Visible) { // byr05 ?>
	<div id="r_byr05" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr05" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->byr05->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr05->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->byr05->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr05">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_edit->byr05->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="x_byr05[]" id="x_byr05[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr05->editAttributes() ?>>
	<label class="custom-control-label" for="x_byr05[]"></label>
</div>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->byr05->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->jml05->Visible) { // jml05 ?>
	<div id="r_jml05" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml05" for="x_jml05" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->jml05->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->jml05->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->jml05->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml05">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="x_jml05" id="x_jml05" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->jml05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->jml05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->jml05->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->jml05->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl05->Visible) { // tgl05 ?>
	<div id="r_tgl05" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl05" for="x_tgl05" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl05->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl05->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->tgl05->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl05">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" data-format="7" name="x_tgl05" id="x_tgl05" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->tgl05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl05->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_edit->tgl05->ReadOnly && !$t103_daf_kelas_siswa_iuran_edit->tgl05->Disabled && !isset($t103_daf_kelas_siswa_iuran_edit->tgl05->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_edit->tgl05->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iuranedit", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl05", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl05->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->byr06->Visible) { // byr06 ?>
	<div id="r_byr06" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr06" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->byr06->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr06->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->byr06->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr06">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_edit->byr06->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="x_byr06[]" id="x_byr06[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr06->editAttributes() ?>>
	<label class="custom-control-label" for="x_byr06[]"></label>
</div>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->byr06->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->jml06->Visible) { // jml06 ?>
	<div id="r_jml06" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml06" for="x_jml06" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->jml06->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->jml06->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->jml06->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml06">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="x_jml06" id="x_jml06" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->jml06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->jml06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->jml06->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->jml06->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl06->Visible) { // tgl06 ?>
	<div id="r_tgl06" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl06" for="x_tgl06" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl06->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl06->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->tgl06->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl06">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" data-format="7" name="x_tgl06" id="x_tgl06" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->tgl06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl06->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_edit->tgl06->ReadOnly && !$t103_daf_kelas_siswa_iuran_edit->tgl06->Disabled && !isset($t103_daf_kelas_siswa_iuran_edit->tgl06->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_edit->tgl06->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iuranedit", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl06", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl06->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->byr07->Visible) { // byr07 ?>
	<div id="r_byr07" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr07" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->byr07->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr07->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->byr07->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr07">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_edit->byr07->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="x_byr07[]" id="x_byr07[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr07->editAttributes() ?>>
	<label class="custom-control-label" for="x_byr07[]"></label>
</div>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->byr07->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->jml07->Visible) { // jml07 ?>
	<div id="r_jml07" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml07" for="x_jml07" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->jml07->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->jml07->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->jml07->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml07">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="x_jml07" id="x_jml07" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->jml07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->jml07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->jml07->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->jml07->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl07->Visible) { // tgl07 ?>
	<div id="r_tgl07" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl07" for="x_tgl07" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl07->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl07->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->tgl07->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl07">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" data-format="7" name="x_tgl07" id="x_tgl07" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->tgl07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl07->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_edit->tgl07->ReadOnly && !$t103_daf_kelas_siswa_iuran_edit->tgl07->Disabled && !isset($t103_daf_kelas_siswa_iuran_edit->tgl07->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_edit->tgl07->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iuranedit", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl07", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl07->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->byr08->Visible) { // byr08 ?>
	<div id="r_byr08" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr08" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->byr08->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr08->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->byr08->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr08">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_edit->byr08->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="x_byr08[]" id="x_byr08[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr08->editAttributes() ?>>
	<label class="custom-control-label" for="x_byr08[]"></label>
</div>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->byr08->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->jml08->Visible) { // jml08 ?>
	<div id="r_jml08" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml08" for="x_jml08" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->jml08->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->jml08->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->jml08->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml08">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="x_jml08" id="x_jml08" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->jml08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->jml08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->jml08->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->jml08->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl08->Visible) { // tgl08 ?>
	<div id="r_tgl08" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl08" for="x_tgl08" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl08->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl08->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->tgl08->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl08">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" data-format="7" name="x_tgl08" id="x_tgl08" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->tgl08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl08->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_edit->tgl08->ReadOnly && !$t103_daf_kelas_siswa_iuran_edit->tgl08->Disabled && !isset($t103_daf_kelas_siswa_iuran_edit->tgl08->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_edit->tgl08->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iuranedit", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl08", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl08->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->byr09->Visible) { // byr09 ?>
	<div id="r_byr09" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr09" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->byr09->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr09->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->byr09->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr09">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_edit->byr09->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="x_byr09[]" id="x_byr09[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr09->editAttributes() ?>>
	<label class="custom-control-label" for="x_byr09[]"></label>
</div>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->byr09->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->jml09->Visible) { // jml09 ?>
	<div id="r_jml09" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml09" for="x_jml09" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->jml09->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->jml09->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->jml09->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml09">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="x_jml09" id="x_jml09" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->jml09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->jml09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->jml09->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->jml09->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl09->Visible) { // tgl09 ?>
	<div id="r_tgl09" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl09" for="x_tgl09" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl09->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl09->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->tgl09->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl09">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" data-format="7" name="x_tgl09" id="x_tgl09" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->tgl09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl09->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_edit->tgl09->ReadOnly && !$t103_daf_kelas_siswa_iuran_edit->tgl09->Disabled && !isset($t103_daf_kelas_siswa_iuran_edit->tgl09->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_edit->tgl09->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iuranedit", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl09", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl09->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->byr10->Visible) { // byr10 ?>
	<div id="r_byr10" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr10" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->byr10->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr10->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->byr10->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr10">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_edit->byr10->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="x_byr10[]" id="x_byr10[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr10->editAttributes() ?>>
	<label class="custom-control-label" for="x_byr10[]"></label>
</div>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->byr10->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->jml10->Visible) { // jml10 ?>
	<div id="r_jml10" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml10" for="x_jml10" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->jml10->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->jml10->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->jml10->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml10">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="x_jml10" id="x_jml10" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->jml10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->jml10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->jml10->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->jml10->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl10->Visible) { // tgl10 ?>
	<div id="r_tgl10" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl10" for="x_tgl10" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl10->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl10->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->tgl10->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl10">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" data-format="7" name="x_tgl10" id="x_tgl10" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->tgl10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl10->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_edit->tgl10->ReadOnly && !$t103_daf_kelas_siswa_iuran_edit->tgl10->Disabled && !isset($t103_daf_kelas_siswa_iuran_edit->tgl10->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_edit->tgl10->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iuranedit", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl10", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl10->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->byr11->Visible) { // byr11 ?>
	<div id="r_byr11" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr11" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->byr11->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr11->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->byr11->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr11">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_edit->byr11->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="x_byr11[]" id="x_byr11[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr11->editAttributes() ?>>
	<label class="custom-control-label" for="x_byr11[]"></label>
</div>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->byr11->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->jml11->Visible) { // jml11 ?>
	<div id="r_jml11" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml11" for="x_jml11" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->jml11->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->jml11->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->jml11->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml11">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="x_jml11" id="x_jml11" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->jml11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->jml11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->jml11->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->jml11->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl11->Visible) { // tgl11 ?>
	<div id="r_tgl11" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl11" for="x_tgl11" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl11->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl11->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->tgl11->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl11">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" data-format="7" name="x_tgl11" id="x_tgl11" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->tgl11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl11->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_edit->tgl11->ReadOnly && !$t103_daf_kelas_siswa_iuran_edit->tgl11->Disabled && !isset($t103_daf_kelas_siswa_iuran_edit->tgl11->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_edit->tgl11->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iuranedit", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl11", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl11->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->byr12->Visible) { // byr12 ?>
	<div id="r_byr12" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr12" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->byr12->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr12->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->byr12->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr12">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_edit->byr12->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="x_byr12[]" id="x_byr12[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_edit->byr12->editAttributes() ?>>
	<label class="custom-control-label" for="x_byr12[]"></label>
</div>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->byr12->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->jml12->Visible) { // jml12 ?>
	<div id="r_jml12" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml12" for="x_jml12" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->jml12->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->jml12->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->jml12->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml12">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="x_jml12" id="x_jml12" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->jml12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->jml12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->jml12->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->jml12->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl12->Visible) { // tgl12 ?>
	<div id="r_tgl12" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl12" for="x_tgl12" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl12->caption() ?><?php echo $t103_daf_kelas_siswa_iuran_edit->tgl12->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div <?php echo $t103_daf_kelas_siswa_iuran_edit->tgl12->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl12">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" data-format="7" name="x_tgl12" id="x_tgl12" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->tgl12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl12->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_edit->tgl12->ReadOnly && !$t103_daf_kelas_siswa_iuran_edit->tgl12->Disabled && !isset($t103_daf_kelas_siswa_iuran_edit->tgl12->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_edit->tgl12->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iuranedit", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl12", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran_edit->tgl12->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
	<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_id" name="x_id" id="x_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_edit->id->CurrentValue) ?>">
<?php if (!$t103_daf_kelas_siswa_iuran_edit->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("SaveBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t103_daf_kelas_siswa_iuran_edit->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$t103_daf_kelas_siswa_iuran_edit->showPageFooter();
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
$t103_daf_kelas_siswa_iuran_edit->terminate();
?>