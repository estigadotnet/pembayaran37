<?php
namespace PHPMaker2020\project1;

// Write header
WriteHeader(FALSE);

// Create page object
if (!isset($t103_daf_kelas_siswa_iuran_grid))
	$t103_daf_kelas_siswa_iuran_grid = new t103_daf_kelas_siswa_iuran_grid();

// Run the page
$t103_daf_kelas_siswa_iuran_grid->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t103_daf_kelas_siswa_iuran_grid->Page_Render();
?>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->isExport()) { ?>
<script>
var ft103_daf_kelas_siswa_iurangrid, currentPageID;
loadjs.ready("head", function() {

	// Form object
	ft103_daf_kelas_siswa_iurangrid = new ew.Form("ft103_daf_kelas_siswa_iurangrid", "grid");
	ft103_daf_kelas_siswa_iurangrid.formKeyCountName = '<?php echo $t103_daf_kelas_siswa_iuran_grid->FormKeyCountName ?>';

	// Validate form
	ft103_daf_kelas_siswa_iurangrid.validate = function() {
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
			var checkrow = (gridinsert) ? !this.emptyRow(infix) : true;
			if (checkrow) {
				addcnt++;
			<?php if ($t103_daf_kelas_siswa_iuran_grid->iuran_id->Required) { ?>
				elm = this.getElements("x" + infix + "_iuran_id");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->iuran_id->caption(), $t103_daf_kelas_siswa_iuran_grid->iuran_id->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_grid->Jumlah->Required) { ?>
				elm = this.getElements("x" + infix + "_Jumlah");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->Jumlah->caption(), $t103_daf_kelas_siswa_iuran_grid->Jumlah->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_Jumlah");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->Jumlah->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->byr01->Required) { ?>
				elm = this.getElements("x" + infix + "_byr01[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->byr01->caption(), $t103_daf_kelas_siswa_iuran_grid->byr01->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_grid->jml01->Required) { ?>
				elm = this.getElements("x" + infix + "_jml01");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->jml01->caption(), $t103_daf_kelas_siswa_iuran_grid->jml01->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml01");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->jml01->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl01->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl01");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->tgl01->caption(), $t103_daf_kelas_siswa_iuran_grid->tgl01->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl01");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->tgl01->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->byr02->Required) { ?>
				elm = this.getElements("x" + infix + "_byr02[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->byr02->caption(), $t103_daf_kelas_siswa_iuran_grid->byr02->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_grid->jml02->Required) { ?>
				elm = this.getElements("x" + infix + "_jml02");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->jml02->caption(), $t103_daf_kelas_siswa_iuran_grid->jml02->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml02");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->jml02->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl02->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl02");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->tgl02->caption(), $t103_daf_kelas_siswa_iuran_grid->tgl02->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl02");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->tgl02->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->byr03->Required) { ?>
				elm = this.getElements("x" + infix + "_byr03[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->byr03->caption(), $t103_daf_kelas_siswa_iuran_grid->byr03->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_grid->jml03->Required) { ?>
				elm = this.getElements("x" + infix + "_jml03");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->jml03->caption(), $t103_daf_kelas_siswa_iuran_grid->jml03->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml03");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->jml03->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl03->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl03");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->tgl03->caption(), $t103_daf_kelas_siswa_iuran_grid->tgl03->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl03");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->tgl03->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->byr04->Required) { ?>
				elm = this.getElements("x" + infix + "_byr04[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->byr04->caption(), $t103_daf_kelas_siswa_iuran_grid->byr04->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_grid->jml04->Required) { ?>
				elm = this.getElements("x" + infix + "_jml04");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->jml04->caption(), $t103_daf_kelas_siswa_iuran_grid->jml04->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml04");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->jml04->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl04->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl04");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->tgl04->caption(), $t103_daf_kelas_siswa_iuran_grid->tgl04->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl04");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->tgl04->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->byr05->Required) { ?>
				elm = this.getElements("x" + infix + "_byr05[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->byr05->caption(), $t103_daf_kelas_siswa_iuran_grid->byr05->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_grid->jml05->Required) { ?>
				elm = this.getElements("x" + infix + "_jml05");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->jml05->caption(), $t103_daf_kelas_siswa_iuran_grid->jml05->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml05");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->jml05->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl05->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl05");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->tgl05->caption(), $t103_daf_kelas_siswa_iuran_grid->tgl05->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl05");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->tgl05->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->byr06->Required) { ?>
				elm = this.getElements("x" + infix + "_byr06[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->byr06->caption(), $t103_daf_kelas_siswa_iuran_grid->byr06->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_grid->jml06->Required) { ?>
				elm = this.getElements("x" + infix + "_jml06");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->jml06->caption(), $t103_daf_kelas_siswa_iuran_grid->jml06->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml06");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->jml06->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl06->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl06");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->tgl06->caption(), $t103_daf_kelas_siswa_iuran_grid->tgl06->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl06");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->tgl06->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->byr07->Required) { ?>
				elm = this.getElements("x" + infix + "_byr07[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->byr07->caption(), $t103_daf_kelas_siswa_iuran_grid->byr07->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_grid->jml07->Required) { ?>
				elm = this.getElements("x" + infix + "_jml07");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->jml07->caption(), $t103_daf_kelas_siswa_iuran_grid->jml07->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml07");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->jml07->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl07->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl07");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->tgl07->caption(), $t103_daf_kelas_siswa_iuran_grid->tgl07->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl07");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->tgl07->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->byr08->Required) { ?>
				elm = this.getElements("x" + infix + "_byr08[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->byr08->caption(), $t103_daf_kelas_siswa_iuran_grid->byr08->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_grid->jml08->Required) { ?>
				elm = this.getElements("x" + infix + "_jml08");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->jml08->caption(), $t103_daf_kelas_siswa_iuran_grid->jml08->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml08");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->jml08->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl08->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl08");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->tgl08->caption(), $t103_daf_kelas_siswa_iuran_grid->tgl08->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl08");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->tgl08->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->byr09->Required) { ?>
				elm = this.getElements("x" + infix + "_byr09[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->byr09->caption(), $t103_daf_kelas_siswa_iuran_grid->byr09->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_grid->jml09->Required) { ?>
				elm = this.getElements("x" + infix + "_jml09");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->jml09->caption(), $t103_daf_kelas_siswa_iuran_grid->jml09->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml09");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->jml09->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl09->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl09");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->tgl09->caption(), $t103_daf_kelas_siswa_iuran_grid->tgl09->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl09");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->tgl09->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->byr10->Required) { ?>
				elm = this.getElements("x" + infix + "_byr10[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->byr10->caption(), $t103_daf_kelas_siswa_iuran_grid->byr10->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_grid->jml10->Required) { ?>
				elm = this.getElements("x" + infix + "_jml10");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->jml10->caption(), $t103_daf_kelas_siswa_iuran_grid->jml10->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml10");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->jml10->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl10->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl10");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->tgl10->caption(), $t103_daf_kelas_siswa_iuran_grid->tgl10->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl10");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->tgl10->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->byr11->Required) { ?>
				elm = this.getElements("x" + infix + "_byr11[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->byr11->caption(), $t103_daf_kelas_siswa_iuran_grid->byr11->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_grid->jml11->Required) { ?>
				elm = this.getElements("x" + infix + "_jml11");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->jml11->caption(), $t103_daf_kelas_siswa_iuran_grid->jml11->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml11");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->jml11->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl11->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl11");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->tgl11->caption(), $t103_daf_kelas_siswa_iuran_grid->tgl11->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl11");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->tgl11->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->byr12->Required) { ?>
				elm = this.getElements("x" + infix + "_byr12[]");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->byr12->caption(), $t103_daf_kelas_siswa_iuran_grid->byr12->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t103_daf_kelas_siswa_iuran_grid->jml12->Required) { ?>
				elm = this.getElements("x" + infix + "_jml12");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->jml12->caption(), $t103_daf_kelas_siswa_iuran_grid->jml12->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_jml12");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->jml12->errorMessage()) ?>");
			<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl12->Required) { ?>
				elm = this.getElements("x" + infix + "_tgl12");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran_grid->tgl12->caption(), $t103_daf_kelas_siswa_iuran_grid->tgl12->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_tgl12");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran_grid->tgl12->errorMessage()) ?>");

				// Call Form_CustomValidate event
				if (!this.Form_CustomValidate(fobj))
					return false;
			} // End Grid Add checking
		}
		return true;
	}

	// Check empty row
	ft103_daf_kelas_siswa_iurangrid.emptyRow = function(infix) {
		var fobj = this._form;
		if (ew.valueChanged(fobj, infix, "iuran_id", false)) return false;
		if (ew.valueChanged(fobj, infix, "Jumlah", false)) return false;
		if (ew.valueChanged(fobj, infix, "byr01[]", true)) return false;
		if (ew.valueChanged(fobj, infix, "jml01", false)) return false;
		if (ew.valueChanged(fobj, infix, "tgl01", false)) return false;
		if (ew.valueChanged(fobj, infix, "byr02[]", true)) return false;
		if (ew.valueChanged(fobj, infix, "jml02", false)) return false;
		if (ew.valueChanged(fobj, infix, "tgl02", false)) return false;
		if (ew.valueChanged(fobj, infix, "byr03[]", true)) return false;
		if (ew.valueChanged(fobj, infix, "jml03", false)) return false;
		if (ew.valueChanged(fobj, infix, "tgl03", false)) return false;
		if (ew.valueChanged(fobj, infix, "byr04[]", true)) return false;
		if (ew.valueChanged(fobj, infix, "jml04", false)) return false;
		if (ew.valueChanged(fobj, infix, "tgl04", false)) return false;
		if (ew.valueChanged(fobj, infix, "byr05[]", true)) return false;
		if (ew.valueChanged(fobj, infix, "jml05", false)) return false;
		if (ew.valueChanged(fobj, infix, "tgl05", false)) return false;
		if (ew.valueChanged(fobj, infix, "byr06[]", true)) return false;
		if (ew.valueChanged(fobj, infix, "jml06", false)) return false;
		if (ew.valueChanged(fobj, infix, "tgl06", false)) return false;
		if (ew.valueChanged(fobj, infix, "byr07[]", true)) return false;
		if (ew.valueChanged(fobj, infix, "jml07", false)) return false;
		if (ew.valueChanged(fobj, infix, "tgl07", false)) return false;
		if (ew.valueChanged(fobj, infix, "byr08[]", true)) return false;
		if (ew.valueChanged(fobj, infix, "jml08", false)) return false;
		if (ew.valueChanged(fobj, infix, "tgl08", false)) return false;
		if (ew.valueChanged(fobj, infix, "byr09[]", true)) return false;
		if (ew.valueChanged(fobj, infix, "jml09", false)) return false;
		if (ew.valueChanged(fobj, infix, "tgl09", false)) return false;
		if (ew.valueChanged(fobj, infix, "byr10[]", true)) return false;
		if (ew.valueChanged(fobj, infix, "jml10", false)) return false;
		if (ew.valueChanged(fobj, infix, "tgl10", false)) return false;
		if (ew.valueChanged(fobj, infix, "byr11[]", true)) return false;
		if (ew.valueChanged(fobj, infix, "jml11", false)) return false;
		if (ew.valueChanged(fobj, infix, "tgl11", false)) return false;
		if (ew.valueChanged(fobj, infix, "byr12[]", true)) return false;
		if (ew.valueChanged(fobj, infix, "jml12", false)) return false;
		if (ew.valueChanged(fobj, infix, "tgl12", false)) return false;
		return true;
	}

	// Form_CustomValidate
	ft103_daf_kelas_siswa_iurangrid.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	ft103_daf_kelas_siswa_iurangrid.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	ft103_daf_kelas_siswa_iurangrid.lists["x_iuran_id"] = <?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->Lookup->toClientList($t103_daf_kelas_siswa_iuran_grid) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_iuran_id"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_grid->iuran_id->lookupOptions()) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr01[]"] = <?php echo $t103_daf_kelas_siswa_iuran_grid->byr01->Lookup->toClientList($t103_daf_kelas_siswa_iuran_grid) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr01[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_grid->byr01->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr02[]"] = <?php echo $t103_daf_kelas_siswa_iuran_grid->byr02->Lookup->toClientList($t103_daf_kelas_siswa_iuran_grid) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr02[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_grid->byr02->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr03[]"] = <?php echo $t103_daf_kelas_siswa_iuran_grid->byr03->Lookup->toClientList($t103_daf_kelas_siswa_iuran_grid) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr03[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_grid->byr03->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr04[]"] = <?php echo $t103_daf_kelas_siswa_iuran_grid->byr04->Lookup->toClientList($t103_daf_kelas_siswa_iuran_grid) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr04[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_grid->byr04->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr05[]"] = <?php echo $t103_daf_kelas_siswa_iuran_grid->byr05->Lookup->toClientList($t103_daf_kelas_siswa_iuran_grid) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr05[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_grid->byr05->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr06[]"] = <?php echo $t103_daf_kelas_siswa_iuran_grid->byr06->Lookup->toClientList($t103_daf_kelas_siswa_iuran_grid) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr06[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_grid->byr06->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr07[]"] = <?php echo $t103_daf_kelas_siswa_iuran_grid->byr07->Lookup->toClientList($t103_daf_kelas_siswa_iuran_grid) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr07[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_grid->byr07->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr08[]"] = <?php echo $t103_daf_kelas_siswa_iuran_grid->byr08->Lookup->toClientList($t103_daf_kelas_siswa_iuran_grid) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr08[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_grid->byr08->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr09[]"] = <?php echo $t103_daf_kelas_siswa_iuran_grid->byr09->Lookup->toClientList($t103_daf_kelas_siswa_iuran_grid) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr09[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_grid->byr09->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr10[]"] = <?php echo $t103_daf_kelas_siswa_iuran_grid->byr10->Lookup->toClientList($t103_daf_kelas_siswa_iuran_grid) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr10[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_grid->byr10->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr11[]"] = <?php echo $t103_daf_kelas_siswa_iuran_grid->byr11->Lookup->toClientList($t103_daf_kelas_siswa_iuran_grid) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr11[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_grid->byr11->options(FALSE, TRUE)) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr12[]"] = <?php echo $t103_daf_kelas_siswa_iuran_grid->byr12->Lookup->toClientList($t103_daf_kelas_siswa_iuran_grid) ?>;
	ft103_daf_kelas_siswa_iurangrid.lists["x_byr12[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_grid->byr12->options(FALSE, TRUE)) ?>;
	loadjs.done("ft103_daf_kelas_siswa_iurangrid");
});
</script>
<?php } ?>
<?php
$t103_daf_kelas_siswa_iuran_grid->renderOtherOptions();
?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->TotalRecords > 0 || $t103_daf_kelas_siswa_iuran->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t103_daf_kelas_siswa_iuran_grid->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t103_daf_kelas_siswa_iuran">
<?php if ($t103_daf_kelas_siswa_iuran_grid->ShowOtherOptions) { ?>
<div class="card-header ew-grid-upper-panel">
<?php $t103_daf_kelas_siswa_iuran_grid->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<div id="ft103_daf_kelas_siswa_iurangrid" class="ew-form ew-list-form form-inline">
<div id="gmp_t103_daf_kelas_siswa_iuran" class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<table id="tbl_t103_daf_kelas_siswa_iurangrid" class="table ew-table"><!-- .ew-table -->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_HEADER;

// Render list options
$t103_daf_kelas_siswa_iuran_grid->renderListOptions();

// Render list options (header, left)
$t103_daf_kelas_siswa_iuran_grid->ListOptions->render("header", "left");
?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->iuran_id->Visible) { // iuran_id ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->iuran_id) == "") { ?>
		<th data-name="iuran_id" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_iuran_id" class="t103_daf_kelas_siswa_iuran_iuran_id"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="iuran_id" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_iuran_id" class="t103_daf_kelas_siswa_iuran_iuran_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->iuran_id->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->iuran_id->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->Jumlah->Visible) { // Jumlah ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->Jumlah) == "") { ?>
		<th data-name="Jumlah" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->Jumlah->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_Jumlah" class="t103_daf_kelas_siswa_iuran_Jumlah"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->Jumlah->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Jumlah" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->Jumlah->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_Jumlah" class="t103_daf_kelas_siswa_iuran_Jumlah">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->Jumlah->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->Jumlah->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->Jumlah->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->byr01->Visible) { // byr01 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->byr01) == "") { ?>
		<th data-name="byr01" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr01->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr01" class="t103_daf_kelas_siswa_iuran_byr01"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr01->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr01" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr01->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_byr01" class="t103_daf_kelas_siswa_iuran_byr01">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr01->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->byr01->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->byr01->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->jml01->Visible) { // jml01 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->jml01) == "") { ?>
		<th data-name="jml01" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml01->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml01" class="t103_daf_kelas_siswa_iuran_jml01"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml01->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml01" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml01->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_jml01" class="t103_daf_kelas_siswa_iuran_jml01">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml01->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->jml01->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->jml01->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl01->Visible) { // tgl01 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->tgl01) == "") { ?>
		<th data-name="tgl01" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl01->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl01" class="t103_daf_kelas_siswa_iuran_tgl01"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl01->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl01" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl01->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_tgl01" class="t103_daf_kelas_siswa_iuran_tgl01">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl01->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->tgl01->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->tgl01->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->byr02->Visible) { // byr02 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->byr02) == "") { ?>
		<th data-name="byr02" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr02->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr02" class="t103_daf_kelas_siswa_iuran_byr02"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr02->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr02" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr02->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_byr02" class="t103_daf_kelas_siswa_iuran_byr02">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr02->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->byr02->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->byr02->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->jml02->Visible) { // jml02 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->jml02) == "") { ?>
		<th data-name="jml02" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml02->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml02" class="t103_daf_kelas_siswa_iuran_jml02"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml02->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml02" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml02->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_jml02" class="t103_daf_kelas_siswa_iuran_jml02">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml02->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->jml02->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->jml02->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl02->Visible) { // tgl02 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->tgl02) == "") { ?>
		<th data-name="tgl02" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl02->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl02" class="t103_daf_kelas_siswa_iuran_tgl02"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl02->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl02" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl02->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_tgl02" class="t103_daf_kelas_siswa_iuran_tgl02">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl02->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->tgl02->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->tgl02->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->byr03->Visible) { // byr03 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->byr03) == "") { ?>
		<th data-name="byr03" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr03->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr03" class="t103_daf_kelas_siswa_iuran_byr03"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr03->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr03" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr03->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_byr03" class="t103_daf_kelas_siswa_iuran_byr03">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr03->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->byr03->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->byr03->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->jml03->Visible) { // jml03 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->jml03) == "") { ?>
		<th data-name="jml03" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml03->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml03" class="t103_daf_kelas_siswa_iuran_jml03"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml03->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml03" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml03->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_jml03" class="t103_daf_kelas_siswa_iuran_jml03">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml03->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->jml03->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->jml03->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl03->Visible) { // tgl03 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->tgl03) == "") { ?>
		<th data-name="tgl03" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl03->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl03" class="t103_daf_kelas_siswa_iuran_tgl03"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl03->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl03" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl03->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_tgl03" class="t103_daf_kelas_siswa_iuran_tgl03">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl03->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->tgl03->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->tgl03->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->byr04->Visible) { // byr04 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->byr04) == "") { ?>
		<th data-name="byr04" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr04->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr04" class="t103_daf_kelas_siswa_iuran_byr04"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr04->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr04" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr04->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_byr04" class="t103_daf_kelas_siswa_iuran_byr04">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr04->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->byr04->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->byr04->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->jml04->Visible) { // jml04 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->jml04) == "") { ?>
		<th data-name="jml04" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml04->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml04" class="t103_daf_kelas_siswa_iuran_jml04"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml04->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml04" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml04->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_jml04" class="t103_daf_kelas_siswa_iuran_jml04">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml04->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->jml04->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->jml04->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl04->Visible) { // tgl04 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->tgl04) == "") { ?>
		<th data-name="tgl04" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl04->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl04" class="t103_daf_kelas_siswa_iuran_tgl04"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl04->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl04" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl04->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_tgl04" class="t103_daf_kelas_siswa_iuran_tgl04">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl04->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->tgl04->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->tgl04->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->byr05->Visible) { // byr05 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->byr05) == "") { ?>
		<th data-name="byr05" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr05->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr05" class="t103_daf_kelas_siswa_iuran_byr05"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr05->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr05" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr05->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_byr05" class="t103_daf_kelas_siswa_iuran_byr05">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr05->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->byr05->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->byr05->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->jml05->Visible) { // jml05 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->jml05) == "") { ?>
		<th data-name="jml05" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml05->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml05" class="t103_daf_kelas_siswa_iuran_jml05"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml05->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml05" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml05->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_jml05" class="t103_daf_kelas_siswa_iuran_jml05">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml05->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->jml05->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->jml05->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl05->Visible) { // tgl05 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->tgl05) == "") { ?>
		<th data-name="tgl05" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl05->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl05" class="t103_daf_kelas_siswa_iuran_tgl05"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl05->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl05" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl05->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_tgl05" class="t103_daf_kelas_siswa_iuran_tgl05">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl05->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->tgl05->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->tgl05->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->byr06->Visible) { // byr06 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->byr06) == "") { ?>
		<th data-name="byr06" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr06->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr06" class="t103_daf_kelas_siswa_iuran_byr06"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr06->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr06" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr06->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_byr06" class="t103_daf_kelas_siswa_iuran_byr06">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr06->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->byr06->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->byr06->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->jml06->Visible) { // jml06 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->jml06) == "") { ?>
		<th data-name="jml06" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml06->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml06" class="t103_daf_kelas_siswa_iuran_jml06"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml06->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml06" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml06->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_jml06" class="t103_daf_kelas_siswa_iuran_jml06">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml06->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->jml06->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->jml06->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl06->Visible) { // tgl06 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->tgl06) == "") { ?>
		<th data-name="tgl06" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl06->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl06" class="t103_daf_kelas_siswa_iuran_tgl06"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl06->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl06" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl06->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_tgl06" class="t103_daf_kelas_siswa_iuran_tgl06">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl06->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->tgl06->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->tgl06->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->byr07->Visible) { // byr07 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->byr07) == "") { ?>
		<th data-name="byr07" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr07->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr07" class="t103_daf_kelas_siswa_iuran_byr07"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr07->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr07" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr07->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_byr07" class="t103_daf_kelas_siswa_iuran_byr07">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr07->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->byr07->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->byr07->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->jml07->Visible) { // jml07 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->jml07) == "") { ?>
		<th data-name="jml07" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml07->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml07" class="t103_daf_kelas_siswa_iuran_jml07"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml07->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml07" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml07->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_jml07" class="t103_daf_kelas_siswa_iuran_jml07">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml07->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->jml07->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->jml07->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl07->Visible) { // tgl07 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->tgl07) == "") { ?>
		<th data-name="tgl07" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl07->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl07" class="t103_daf_kelas_siswa_iuran_tgl07"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl07->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl07" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl07->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_tgl07" class="t103_daf_kelas_siswa_iuran_tgl07">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl07->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->tgl07->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->tgl07->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->byr08->Visible) { // byr08 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->byr08) == "") { ?>
		<th data-name="byr08" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr08->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr08" class="t103_daf_kelas_siswa_iuran_byr08"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr08->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr08" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr08->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_byr08" class="t103_daf_kelas_siswa_iuran_byr08">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr08->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->byr08->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->byr08->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->jml08->Visible) { // jml08 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->jml08) == "") { ?>
		<th data-name="jml08" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml08->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml08" class="t103_daf_kelas_siswa_iuran_jml08"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml08->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml08" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml08->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_jml08" class="t103_daf_kelas_siswa_iuran_jml08">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml08->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->jml08->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->jml08->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl08->Visible) { // tgl08 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->tgl08) == "") { ?>
		<th data-name="tgl08" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl08->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl08" class="t103_daf_kelas_siswa_iuran_tgl08"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl08->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl08" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl08->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_tgl08" class="t103_daf_kelas_siswa_iuran_tgl08">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl08->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->tgl08->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->tgl08->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->byr09->Visible) { // byr09 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->byr09) == "") { ?>
		<th data-name="byr09" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr09->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr09" class="t103_daf_kelas_siswa_iuran_byr09"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr09->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr09" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr09->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_byr09" class="t103_daf_kelas_siswa_iuran_byr09">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr09->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->byr09->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->byr09->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->jml09->Visible) { // jml09 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->jml09) == "") { ?>
		<th data-name="jml09" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml09->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml09" class="t103_daf_kelas_siswa_iuran_jml09"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml09->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml09" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml09->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_jml09" class="t103_daf_kelas_siswa_iuran_jml09">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml09->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->jml09->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->jml09->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl09->Visible) { // tgl09 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->tgl09) == "") { ?>
		<th data-name="tgl09" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl09->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl09" class="t103_daf_kelas_siswa_iuran_tgl09"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl09->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl09" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl09->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_tgl09" class="t103_daf_kelas_siswa_iuran_tgl09">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl09->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->tgl09->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->tgl09->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->byr10->Visible) { // byr10 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->byr10) == "") { ?>
		<th data-name="byr10" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr10->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr10" class="t103_daf_kelas_siswa_iuran_byr10"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr10->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr10" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr10->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_byr10" class="t103_daf_kelas_siswa_iuran_byr10">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr10->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->byr10->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->byr10->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->jml10->Visible) { // jml10 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->jml10) == "") { ?>
		<th data-name="jml10" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml10->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml10" class="t103_daf_kelas_siswa_iuran_jml10"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml10->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml10" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml10->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_jml10" class="t103_daf_kelas_siswa_iuran_jml10">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml10->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->jml10->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->jml10->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl10->Visible) { // tgl10 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->tgl10) == "") { ?>
		<th data-name="tgl10" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl10->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl10" class="t103_daf_kelas_siswa_iuran_tgl10"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl10->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl10" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl10->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_tgl10" class="t103_daf_kelas_siswa_iuran_tgl10">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl10->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->tgl10->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->tgl10->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->byr11->Visible) { // byr11 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->byr11) == "") { ?>
		<th data-name="byr11" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr11->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr11" class="t103_daf_kelas_siswa_iuran_byr11"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr11->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr11" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr11->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_byr11" class="t103_daf_kelas_siswa_iuran_byr11">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr11->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->byr11->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->byr11->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->jml11->Visible) { // jml11 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->jml11) == "") { ?>
		<th data-name="jml11" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml11->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml11" class="t103_daf_kelas_siswa_iuran_jml11"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml11->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml11" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml11->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_jml11" class="t103_daf_kelas_siswa_iuran_jml11">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml11->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->jml11->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->jml11->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl11->Visible) { // tgl11 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->tgl11) == "") { ?>
		<th data-name="tgl11" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl11->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl11" class="t103_daf_kelas_siswa_iuran_tgl11"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl11->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl11" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl11->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_tgl11" class="t103_daf_kelas_siswa_iuran_tgl11">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl11->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->tgl11->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->tgl11->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->byr12->Visible) { // byr12 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->byr12) == "") { ?>
		<th data-name="byr12" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr12->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr12" class="t103_daf_kelas_siswa_iuran_byr12"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr12->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr12" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr12->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_byr12" class="t103_daf_kelas_siswa_iuran_byr12">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->byr12->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->byr12->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->byr12->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->jml12->Visible) { // jml12 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->jml12) == "") { ?>
		<th data-name="jml12" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml12->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml12" class="t103_daf_kelas_siswa_iuran_jml12"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml12->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml12" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml12->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_jml12" class="t103_daf_kelas_siswa_iuran_jml12">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->jml12->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->jml12->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->jml12->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl12->Visible) { // tgl12 ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->SortUrl($t103_daf_kelas_siswa_iuran_grid->tgl12) == "") { ?>
		<th data-name="tgl12" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl12->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl12" class="t103_daf_kelas_siswa_iuran_tgl12"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl12->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl12" class="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl12->headerCellClass() ?>"><div><div id="elh_t103_daf_kelas_siswa_iuran_tgl12" class="t103_daf_kelas_siswa_iuran_tgl12">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl12->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_grid->tgl12->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran_grid->tgl12->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t103_daf_kelas_siswa_iuran_grid->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
$t103_daf_kelas_siswa_iuran_grid->StartRecord = 1;
$t103_daf_kelas_siswa_iuran_grid->StopRecord = $t103_daf_kelas_siswa_iuran_grid->TotalRecords; // Show all records

// Restore number of post back records
if ($CurrentForm && ($t103_daf_kelas_siswa_iuran->isConfirm() || $t103_daf_kelas_siswa_iuran_grid->EventCancelled)) {
	$CurrentForm->Index = -1;
	if ($CurrentForm->hasValue($t103_daf_kelas_siswa_iuran_grid->FormKeyCountName) && ($t103_daf_kelas_siswa_iuran_grid->isGridAdd() || $t103_daf_kelas_siswa_iuran_grid->isGridEdit() || $t103_daf_kelas_siswa_iuran->isConfirm())) {
		$t103_daf_kelas_siswa_iuran_grid->KeyCount = $CurrentForm->getValue($t103_daf_kelas_siswa_iuran_grid->FormKeyCountName);
		$t103_daf_kelas_siswa_iuran_grid->StopRecord = $t103_daf_kelas_siswa_iuran_grid->StartRecord + $t103_daf_kelas_siswa_iuran_grid->KeyCount - 1;
	}
}
$t103_daf_kelas_siswa_iuran_grid->RecordCount = $t103_daf_kelas_siswa_iuran_grid->StartRecord - 1;
if ($t103_daf_kelas_siswa_iuran_grid->Recordset && !$t103_daf_kelas_siswa_iuran_grid->Recordset->EOF) {
	$t103_daf_kelas_siswa_iuran_grid->Recordset->moveFirst();
	$selectLimit = $t103_daf_kelas_siswa_iuran_grid->UseSelectLimit;
	if (!$selectLimit && $t103_daf_kelas_siswa_iuran_grid->StartRecord > 1)
		$t103_daf_kelas_siswa_iuran_grid->Recordset->move($t103_daf_kelas_siswa_iuran_grid->StartRecord - 1);
} elseif (!$t103_daf_kelas_siswa_iuran->AllowAddDeleteRow && $t103_daf_kelas_siswa_iuran_grid->StopRecord == 0) {
	$t103_daf_kelas_siswa_iuran_grid->StopRecord = $t103_daf_kelas_siswa_iuran->GridAddRowCount;
}

// Initialize aggregate
$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_AGGREGATEINIT;
$t103_daf_kelas_siswa_iuran->resetAttributes();
$t103_daf_kelas_siswa_iuran_grid->renderRow();
if ($t103_daf_kelas_siswa_iuran_grid->isGridAdd())
	$t103_daf_kelas_siswa_iuran_grid->RowIndex = 0;
if ($t103_daf_kelas_siswa_iuran_grid->isGridEdit())
	$t103_daf_kelas_siswa_iuran_grid->RowIndex = 0;
while ($t103_daf_kelas_siswa_iuran_grid->RecordCount < $t103_daf_kelas_siswa_iuran_grid->StopRecord) {
	$t103_daf_kelas_siswa_iuran_grid->RecordCount++;
	if ($t103_daf_kelas_siswa_iuran_grid->RecordCount >= $t103_daf_kelas_siswa_iuran_grid->StartRecord) {
		$t103_daf_kelas_siswa_iuran_grid->RowCount++;
		if ($t103_daf_kelas_siswa_iuran_grid->isGridAdd() || $t103_daf_kelas_siswa_iuran_grid->isGridEdit() || $t103_daf_kelas_siswa_iuran->isConfirm()) {
			$t103_daf_kelas_siswa_iuran_grid->RowIndex++;
			$CurrentForm->Index = $t103_daf_kelas_siswa_iuran_grid->RowIndex;
			if ($CurrentForm->hasValue($t103_daf_kelas_siswa_iuran_grid->FormActionName) && ($t103_daf_kelas_siswa_iuran->isConfirm() || $t103_daf_kelas_siswa_iuran_grid->EventCancelled))
				$t103_daf_kelas_siswa_iuran_grid->RowAction = strval($CurrentForm->getValue($t103_daf_kelas_siswa_iuran_grid->FormActionName));
			elseif ($t103_daf_kelas_siswa_iuran_grid->isGridAdd())
				$t103_daf_kelas_siswa_iuran_grid->RowAction = "insert";
			else
				$t103_daf_kelas_siswa_iuran_grid->RowAction = "";
		}

		// Set up key count
		$t103_daf_kelas_siswa_iuran_grid->KeyCount = $t103_daf_kelas_siswa_iuran_grid->RowIndex;

		// Init row class and style
		$t103_daf_kelas_siswa_iuran->resetAttributes();
		$t103_daf_kelas_siswa_iuran->CssClass = "";
		if ($t103_daf_kelas_siswa_iuran_grid->isGridAdd()) {
			if ($t103_daf_kelas_siswa_iuran->CurrentMode == "copy") {
				$t103_daf_kelas_siswa_iuran_grid->loadRowValues($t103_daf_kelas_siswa_iuran_grid->Recordset); // Load row values
				$t103_daf_kelas_siswa_iuran_grid->setRecordKey($t103_daf_kelas_siswa_iuran_grid->RowOldKey, $t103_daf_kelas_siswa_iuran_grid->Recordset); // Set old record key
			} else {
				$t103_daf_kelas_siswa_iuran_grid->loadRowValues(); // Load default values
				$t103_daf_kelas_siswa_iuran_grid->RowOldKey = ""; // Clear old key value
			}
		} else {
			$t103_daf_kelas_siswa_iuran_grid->loadRowValues($t103_daf_kelas_siswa_iuran_grid->Recordset); // Load row values
		}
		$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_VIEW; // Render view
		if ($t103_daf_kelas_siswa_iuran_grid->isGridAdd()) // Grid add
			$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_ADD; // Render add
		if ($t103_daf_kelas_siswa_iuran_grid->isGridAdd() && $t103_daf_kelas_siswa_iuran->EventCancelled && !$CurrentForm->hasValue("k_blankrow")) // Insert failed
			$t103_daf_kelas_siswa_iuran_grid->restoreCurrentRowFormValues($t103_daf_kelas_siswa_iuran_grid->RowIndex); // Restore form values
		if ($t103_daf_kelas_siswa_iuran_grid->isGridEdit()) { // Grid edit
			if ($t103_daf_kelas_siswa_iuran->EventCancelled)
				$t103_daf_kelas_siswa_iuran_grid->restoreCurrentRowFormValues($t103_daf_kelas_siswa_iuran_grid->RowIndex); // Restore form values
			if ($t103_daf_kelas_siswa_iuran_grid->RowAction == "insert")
				$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_ADD; // Render add
			else
				$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_EDIT; // Render edit
		}
		if ($t103_daf_kelas_siswa_iuran_grid->isGridEdit() && ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT || $t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) && $t103_daf_kelas_siswa_iuran->EventCancelled) // Update failed
			$t103_daf_kelas_siswa_iuran_grid->restoreCurrentRowFormValues($t103_daf_kelas_siswa_iuran_grid->RowIndex); // Restore form values
		if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) // Edit row
			$t103_daf_kelas_siswa_iuran_grid->EditRowCount++;
		if ($t103_daf_kelas_siswa_iuran->isConfirm()) // Confirm row
			$t103_daf_kelas_siswa_iuran_grid->restoreCurrentRowFormValues($t103_daf_kelas_siswa_iuran_grid->RowIndex); // Restore form values

		// Set up row id / data-rowindex
		$t103_daf_kelas_siswa_iuran->RowAttrs->merge(["data-rowindex" => $t103_daf_kelas_siswa_iuran_grid->RowCount, "id" => "r" . $t103_daf_kelas_siswa_iuran_grid->RowCount . "_t103_daf_kelas_siswa_iuran", "data-rowtype" => $t103_daf_kelas_siswa_iuran->RowType]);

		// Render row
		$t103_daf_kelas_siswa_iuran_grid->renderRow();

		// Render list options
		$t103_daf_kelas_siswa_iuran_grid->renderListOptions();

		// Skip delete row / empty row for confirm page
		if ($t103_daf_kelas_siswa_iuran_grid->RowAction != "delete" && $t103_daf_kelas_siswa_iuran_grid->RowAction != "insertdelete" && !($t103_daf_kelas_siswa_iuran_grid->RowAction == "insert" && $t103_daf_kelas_siswa_iuran->isConfirm() && $t103_daf_kelas_siswa_iuran_grid->emptyRow())) {
?>
	<tr <?php echo $t103_daf_kelas_siswa_iuran->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t103_daf_kelas_siswa_iuran_grid->ListOptions->render("body", "left", $t103_daf_kelas_siswa_iuran_grid->RowCount);
?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->iuran_id->Visible) { // iuran_id ?>
		<td data-name="iuran_id" <?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_iuran_id" class="form-group">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id"><?php echo EmptyValue(strval($t103_daf_kelas_siswa_iuran_grid->iuran_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t103_daf_kelas_siswa_iuran_grid->iuran_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t103_daf_kelas_siswa_iuran_grid->iuran_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t103_daf_kelas_siswa_iuran_grid->iuran_id->ReadOnly || $t103_daf_kelas_siswa_iuran_grid->iuran_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->Lookup->getParamTag($t103_daf_kelas_siswa_iuran_grid, "p_x" . $t103_daf_kelas_siswa_iuran_grid->RowIndex . "_iuran_id") ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->displayValueSeparatorAttribute() ?>" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->CurrentValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->iuran_id->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_iuran_id" class="form-group">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id"><?php echo EmptyValue(strval($t103_daf_kelas_siswa_iuran_grid->iuran_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t103_daf_kelas_siswa_iuran_grid->iuran_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t103_daf_kelas_siswa_iuran_grid->iuran_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t103_daf_kelas_siswa_iuran_grid->iuran_id->ReadOnly || $t103_daf_kelas_siswa_iuran_grid->iuran_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->Lookup->getParamTag($t103_daf_kelas_siswa_iuran_grid, "p_x" . $t103_daf_kelas_siswa_iuran_grid->RowIndex . "_iuran_id") ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->displayValueSeparatorAttribute() ?>" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->CurrentValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_iuran_id">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->iuran_id->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->iuran_id->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->iuran_id->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->iuran_id->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->id->CurrentValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_id" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_id" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->id->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT || $t103_daf_kelas_siswa_iuran->CurrentMode == "edit") { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->id->CurrentValue) ?>">
<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->Jumlah->Visible) { // Jumlah ?>
		<td data-name="Jumlah" <?php echo $t103_daf_kelas_siswa_iuran_grid->Jumlah->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_Jumlah" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->Jumlah->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->Jumlah->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->Jumlah->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->Jumlah->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_Jumlah" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->Jumlah->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->Jumlah->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->Jumlah->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_Jumlah">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->Jumlah->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->Jumlah->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->Jumlah->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->Jumlah->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->Jumlah->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->Jumlah->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr01->Visible) { // byr01 ?>
		<td data-name="byr01" <?php echo $t103_daf_kelas_siswa_iuran_grid->byr01->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr01" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr01->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr01->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]"></label>
</div>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr01->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr01" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr01->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr01->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]"></label>
</div>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr01">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr01->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr01" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr01->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr01->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr01"></label></div></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr01->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr01->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr01->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr01->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml01->Visible) { // jml01 ?>
		<td data-name="jml01" <?php echo $t103_daf_kelas_siswa_iuran_grid->jml01->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml01" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml01->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml01->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml01" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml01->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml01">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml01->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->jml01->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml01->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml01->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml01->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml01->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl01->Visible) { // tgl01 ?>
		<td data-name="tgl01" <?php echo $t103_daf_kelas_siswa_iuran_grid->tgl01->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl01" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl01->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl01->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl01->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl01->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl01->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl01->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl01" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl01->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl01->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl01->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl01->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl01->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl01">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl01->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl01->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl01->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl01->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl01->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl01->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr02->Visible) { // byr02 ?>
		<td data-name="byr02" <?php echo $t103_daf_kelas_siswa_iuran_grid->byr02->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr02" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr02->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr02->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]"></label>
</div>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr02->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr02" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr02->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr02->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]"></label>
</div>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr02">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr02->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr02" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr02->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr02->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr02"></label></div></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr02->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr02->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr02->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr02->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml02->Visible) { // jml02 ?>
		<td data-name="jml02" <?php echo $t103_daf_kelas_siswa_iuran_grid->jml02->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml02" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml02->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml02->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml02" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml02->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml02">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml02->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->jml02->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml02->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml02->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml02->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml02->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl02->Visible) { // tgl02 ?>
		<td data-name="tgl02" <?php echo $t103_daf_kelas_siswa_iuran_grid->tgl02->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl02" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl02->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl02->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl02->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl02->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl02->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl02->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl02" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl02->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl02->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl02->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl02->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl02->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl02">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl02->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl02->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl02->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl02->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl02->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl02->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr03->Visible) { // byr03 ?>
		<td data-name="byr03" <?php echo $t103_daf_kelas_siswa_iuran_grid->byr03->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr03" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr03->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr03->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]"></label>
</div>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr03->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr03" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr03->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr03->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]"></label>
</div>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr03">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr03->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr03" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr03->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr03->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr03"></label></div></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr03->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr03->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr03->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr03->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml03->Visible) { // jml03 ?>
		<td data-name="jml03" <?php echo $t103_daf_kelas_siswa_iuran_grid->jml03->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml03" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml03->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml03->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml03" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml03->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml03">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml03->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->jml03->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml03->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml03->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml03->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml03->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl03->Visible) { // tgl03 ?>
		<td data-name="tgl03" <?php echo $t103_daf_kelas_siswa_iuran_grid->tgl03->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl03" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl03->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl03->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl03->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl03->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl03->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl03->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl03" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl03->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl03->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl03->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl03->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl03->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl03">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl03->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl03->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl03->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl03->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl03->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl03->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr04->Visible) { // byr04 ?>
		<td data-name="byr04" <?php echo $t103_daf_kelas_siswa_iuran_grid->byr04->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr04" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr04->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr04->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]"></label>
</div>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr04->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr04" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr04->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr04->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]"></label>
</div>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr04">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr04->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr04" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr04->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr04->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr04"></label></div></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr04->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr04->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr04->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr04->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml04->Visible) { // jml04 ?>
		<td data-name="jml04" <?php echo $t103_daf_kelas_siswa_iuran_grid->jml04->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml04" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml04->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml04->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml04" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml04->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml04">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml04->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->jml04->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml04->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml04->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml04->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml04->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl04->Visible) { // tgl04 ?>
		<td data-name="tgl04" <?php echo $t103_daf_kelas_siswa_iuran_grid->tgl04->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl04" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl04->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl04->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl04->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl04->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl04->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl04->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl04" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl04->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl04->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl04->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl04->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl04->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl04">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl04->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl04->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl04->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl04->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl04->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl04->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr05->Visible) { // byr05 ?>
		<td data-name="byr05" <?php echo $t103_daf_kelas_siswa_iuran_grid->byr05->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr05" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr05->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr05->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]"></label>
</div>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr05->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr05" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr05->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr05->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]"></label>
</div>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr05">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr05->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr05" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr05->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr05->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr05"></label></div></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr05->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr05->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr05->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr05->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml05->Visible) { // jml05 ?>
		<td data-name="jml05" <?php echo $t103_daf_kelas_siswa_iuran_grid->jml05->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml05" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml05->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml05->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml05" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml05->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml05">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml05->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->jml05->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml05->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml05->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml05->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml05->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl05->Visible) { // tgl05 ?>
		<td data-name="tgl05" <?php echo $t103_daf_kelas_siswa_iuran_grid->tgl05->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl05" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl05->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl05->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl05->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl05->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl05->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl05->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl05" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl05->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl05->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl05->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl05->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl05->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl05">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl05->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl05->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl05->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl05->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl05->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl05->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr06->Visible) { // byr06 ?>
		<td data-name="byr06" <?php echo $t103_daf_kelas_siswa_iuran_grid->byr06->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr06" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr06->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr06->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]"></label>
</div>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr06->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr06" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr06->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr06->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]"></label>
</div>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr06">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr06->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr06" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr06->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr06->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr06"></label></div></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr06->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr06->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr06->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr06->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml06->Visible) { // jml06 ?>
		<td data-name="jml06" <?php echo $t103_daf_kelas_siswa_iuran_grid->jml06->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml06" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml06->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml06->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml06" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml06->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml06">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml06->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->jml06->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml06->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml06->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml06->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml06->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl06->Visible) { // tgl06 ?>
		<td data-name="tgl06" <?php echo $t103_daf_kelas_siswa_iuran_grid->tgl06->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl06" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl06->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl06->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl06->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl06->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl06->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl06->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl06" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl06->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl06->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl06->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl06->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl06->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl06">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl06->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl06->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl06->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl06->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl06->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl06->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr07->Visible) { // byr07 ?>
		<td data-name="byr07" <?php echo $t103_daf_kelas_siswa_iuran_grid->byr07->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr07" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr07->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr07->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]"></label>
</div>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr07->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr07" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr07->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr07->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]"></label>
</div>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr07">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr07->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr07" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr07->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr07->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr07"></label></div></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr07->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr07->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr07->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr07->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml07->Visible) { // jml07 ?>
		<td data-name="jml07" <?php echo $t103_daf_kelas_siswa_iuran_grid->jml07->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml07" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml07->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml07->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml07" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml07->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml07">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml07->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->jml07->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml07->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml07->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml07->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml07->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl07->Visible) { // tgl07 ?>
		<td data-name="tgl07" <?php echo $t103_daf_kelas_siswa_iuran_grid->tgl07->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl07" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl07->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl07->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl07->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl07->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl07->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl07->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl07" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl07->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl07->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl07->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl07->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl07->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl07">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl07->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl07->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl07->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl07->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl07->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl07->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr08->Visible) { // byr08 ?>
		<td data-name="byr08" <?php echo $t103_daf_kelas_siswa_iuran_grid->byr08->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr08" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr08->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr08->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]"></label>
</div>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr08->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr08" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr08->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr08->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]"></label>
</div>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr08">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr08->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr08" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr08->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr08->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr08"></label></div></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr08->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr08->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr08->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr08->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml08->Visible) { // jml08 ?>
		<td data-name="jml08" <?php echo $t103_daf_kelas_siswa_iuran_grid->jml08->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml08" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml08->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml08->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml08" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml08->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml08">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml08->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->jml08->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml08->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml08->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml08->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml08->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl08->Visible) { // tgl08 ?>
		<td data-name="tgl08" <?php echo $t103_daf_kelas_siswa_iuran_grid->tgl08->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl08" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl08->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl08->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl08->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl08->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl08->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl08->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl08" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl08->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl08->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl08->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl08->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl08->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl08">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl08->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl08->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl08->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl08->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl08->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl08->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr09->Visible) { // byr09 ?>
		<td data-name="byr09" <?php echo $t103_daf_kelas_siswa_iuran_grid->byr09->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr09" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr09->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr09->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]"></label>
</div>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr09->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr09" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr09->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr09->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]"></label>
</div>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr09">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr09->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr09" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr09->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr09->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr09"></label></div></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr09->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr09->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr09->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr09->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml09->Visible) { // jml09 ?>
		<td data-name="jml09" <?php echo $t103_daf_kelas_siswa_iuran_grid->jml09->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml09" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml09->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml09->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml09" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml09->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml09">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml09->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->jml09->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml09->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml09->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml09->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml09->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl09->Visible) { // tgl09 ?>
		<td data-name="tgl09" <?php echo $t103_daf_kelas_siswa_iuran_grid->tgl09->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl09" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl09->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl09->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl09->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl09->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl09->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl09->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl09" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl09->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl09->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl09->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl09->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl09->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl09">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl09->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl09->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl09->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl09->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl09->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl09->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr10->Visible) { // byr10 ?>
		<td data-name="byr10" <?php echo $t103_daf_kelas_siswa_iuran_grid->byr10->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr10" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr10->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr10->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]"></label>
</div>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr10->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr10" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr10->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr10->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]"></label>
</div>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr10">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr10->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr10" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr10->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr10->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr10"></label></div></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr10->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr10->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr10->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr10->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml10->Visible) { // jml10 ?>
		<td data-name="jml10" <?php echo $t103_daf_kelas_siswa_iuran_grid->jml10->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml10" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml10->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml10->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml10" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml10->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml10">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml10->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->jml10->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml10->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml10->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml10->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml10->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl10->Visible) { // tgl10 ?>
		<td data-name="tgl10" <?php echo $t103_daf_kelas_siswa_iuran_grid->tgl10->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl10" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl10->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl10->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl10->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl10->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl10->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl10->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl10" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl10->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl10->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl10->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl10->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl10->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl10">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl10->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl10->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl10->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl10->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl10->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl10->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr11->Visible) { // byr11 ?>
		<td data-name="byr11" <?php echo $t103_daf_kelas_siswa_iuran_grid->byr11->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr11" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr11->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr11->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]"></label>
</div>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr11->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr11" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr11->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr11->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]"></label>
</div>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr11">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr11->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr11" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr11->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr11->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr11"></label></div></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr11->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr11->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr11->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr11->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml11->Visible) { // jml11 ?>
		<td data-name="jml11" <?php echo $t103_daf_kelas_siswa_iuran_grid->jml11->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml11" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml11->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml11->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml11" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml11->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml11">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml11->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->jml11->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml11->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml11->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml11->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml11->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl11->Visible) { // tgl11 ?>
		<td data-name="tgl11" <?php echo $t103_daf_kelas_siswa_iuran_grid->tgl11->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl11" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl11->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl11->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl11->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl11->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl11->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl11->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl11" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl11->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl11->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl11->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl11->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl11->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl11">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl11->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl11->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl11->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl11->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl11->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl11->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr12->Visible) { // byr12 ?>
		<td data-name="byr12" <?php echo $t103_daf_kelas_siswa_iuran_grid->byr12->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr12" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr12->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr12->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]"></label>
</div>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr12->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr12" class="form-group">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr12->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr12->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]"></label>
</div>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_byr12">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr12->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr12" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr12->getViewValue() ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr12->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr12"></label></div></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr12->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr12->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr12->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr12->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml12->Visible) { // jml12 ?>
		<td data-name="jml12" <?php echo $t103_daf_kelas_siswa_iuran_grid->jml12->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml12" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml12->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml12->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml12" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml12->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_jml12">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml12->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->jml12->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml12->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml12->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml12->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml12->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl12->Visible) { // tgl12 ?>
		<td data-name="tgl12" <?php echo $t103_daf_kelas_siswa_iuran_grid->tgl12->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl12" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl12->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl12->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl12->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl12->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl12->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl12->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl12" class="form-group">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl12->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl12->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl12->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl12->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl12->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_grid->RowCount ?>_t103_daf_kelas_siswa_iuran_tgl12">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl12->viewAttributes() ?>><?php echo $t103_daf_kelas_siswa_iuran_grid->tgl12->getViewValue() ?></span>
</span>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl12->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl12->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" name="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" id="ft103_daf_kelas_siswa_iurangrid$x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl12->FormValue) ?>">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" name="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" id="ft103_daf_kelas_siswa_iurangrid$o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl12->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t103_daf_kelas_siswa_iuran_grid->ListOptions->render("body", "right", $t103_daf_kelas_siswa_iuran_grid->RowCount);
?>
	</tr>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD || $t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "load"], function() {
	ft103_daf_kelas_siswa_iurangrid.updateLists(<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>);
});
</script>
<?php } ?>
<?php
	}
	} // End delete row checking
	if (!$t103_daf_kelas_siswa_iuran_grid->isGridAdd() || $t103_daf_kelas_siswa_iuran->CurrentMode == "copy")
		if (!$t103_daf_kelas_siswa_iuran_grid->Recordset->EOF)
			$t103_daf_kelas_siswa_iuran_grid->Recordset->moveNext();
}
?>
<?php
	if ($t103_daf_kelas_siswa_iuran->CurrentMode == "add" || $t103_daf_kelas_siswa_iuran->CurrentMode == "copy" || $t103_daf_kelas_siswa_iuran->CurrentMode == "edit") {
		$t103_daf_kelas_siswa_iuran_grid->RowIndex = '$rowindex$';
		$t103_daf_kelas_siswa_iuran_grid->loadRowValues();

		// Set row properties
		$t103_daf_kelas_siswa_iuran->resetAttributes();
		$t103_daf_kelas_siswa_iuran->RowAttrs->merge(["data-rowindex" => $t103_daf_kelas_siswa_iuran_grid->RowIndex, "id" => "r0_t103_daf_kelas_siswa_iuran", "data-rowtype" => ROWTYPE_ADD]);
		$t103_daf_kelas_siswa_iuran->RowAttrs->appendClass("ew-template");
		$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_ADD;

		// Render row
		$t103_daf_kelas_siswa_iuran_grid->renderRow();

		// Render list options
		$t103_daf_kelas_siswa_iuran_grid->renderListOptions();
		$t103_daf_kelas_siswa_iuran_grid->StartRowCount = 0;
?>
	<tr <?php echo $t103_daf_kelas_siswa_iuran->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t103_daf_kelas_siswa_iuran_grid->ListOptions->render("body", "left", $t103_daf_kelas_siswa_iuran_grid->RowIndex);
?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->iuran_id->Visible) { // iuran_id ?>
		<td data-name="iuran_id">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_iuran_id" class="form-group t103_daf_kelas_siswa_iuran_iuran_id">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id"><?php echo EmptyValue(strval($t103_daf_kelas_siswa_iuran_grid->iuran_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t103_daf_kelas_siswa_iuran_grid->iuran_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t103_daf_kelas_siswa_iuran_grid->iuran_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t103_daf_kelas_siswa_iuran_grid->iuran_id->ReadOnly || $t103_daf_kelas_siswa_iuran_grid->iuran_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->Lookup->getParamTag($t103_daf_kelas_siswa_iuran_grid, "p_x" . $t103_daf_kelas_siswa_iuran_grid->RowIndex . "_iuran_id") ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->displayValueSeparatorAttribute() ?>" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->CurrentValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_iuran_id" class="form-group t103_daf_kelas_siswa_iuran_iuran_id">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->iuran_id->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->iuran_id->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->iuran_id->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_iuran_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->iuran_id->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->Jumlah->Visible) { // Jumlah ?>
		<td data-name="Jumlah">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_Jumlah" class="form-group t103_daf_kelas_siswa_iuran_Jumlah">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->Jumlah->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->Jumlah->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->Jumlah->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_Jumlah" class="form-group t103_daf_kelas_siswa_iuran_Jumlah">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->Jumlah->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->Jumlah->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->Jumlah->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_Jumlah" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->Jumlah->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr01->Visible) { // byr01 ?>
		<td data-name="byr01">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr01" class="form-group t103_daf_kelas_siswa_iuran_byr01">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr01->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr01->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]"></label>
</div>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr01" class="form-group t103_daf_kelas_siswa_iuran_byr01">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr01->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr01" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr01->ViewValue ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr01->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr01"></label></div></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr01->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr01[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr01->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml01->Visible) { // jml01 ?>
		<td data-name="jml01">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml01" class="form-group t103_daf_kelas_siswa_iuran_jml01">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml01->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml01" class="form-group t103_daf_kelas_siswa_iuran_jml01">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml01->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->jml01->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml01->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml01->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl01->Visible) { // tgl01 ?>
		<td data-name="tgl01">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl01" class="form-group t103_daf_kelas_siswa_iuran_tgl01">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl01->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl01->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl01->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl01->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl01->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl01" class="form-group t103_daf_kelas_siswa_iuran_tgl01">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl01->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->tgl01->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl01->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl01->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr02->Visible) { // byr02 ?>
		<td data-name="byr02">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr02" class="form-group t103_daf_kelas_siswa_iuran_byr02">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr02->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr02->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]"></label>
</div>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr02" class="form-group t103_daf_kelas_siswa_iuran_byr02">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr02->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr02" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr02->ViewValue ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr02->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr02"></label></div></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr02->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr02[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr02->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml02->Visible) { // jml02 ?>
		<td data-name="jml02">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml02" class="form-group t103_daf_kelas_siswa_iuran_jml02">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml02->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml02" class="form-group t103_daf_kelas_siswa_iuran_jml02">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml02->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->jml02->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml02->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml02->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl02->Visible) { // tgl02 ?>
		<td data-name="tgl02">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl02" class="form-group t103_daf_kelas_siswa_iuran_tgl02">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl02->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl02->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl02->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl02->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl02->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl02" class="form-group t103_daf_kelas_siswa_iuran_tgl02">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl02->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->tgl02->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl02->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl02->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr03->Visible) { // byr03 ?>
		<td data-name="byr03">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr03" class="form-group t103_daf_kelas_siswa_iuran_byr03">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr03->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr03->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]"></label>
</div>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr03" class="form-group t103_daf_kelas_siswa_iuran_byr03">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr03->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr03" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr03->ViewValue ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr03->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr03"></label></div></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr03->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr03[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr03->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml03->Visible) { // jml03 ?>
		<td data-name="jml03">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml03" class="form-group t103_daf_kelas_siswa_iuran_jml03">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml03->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml03" class="form-group t103_daf_kelas_siswa_iuran_jml03">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml03->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->jml03->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml03->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml03->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl03->Visible) { // tgl03 ?>
		<td data-name="tgl03">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl03" class="form-group t103_daf_kelas_siswa_iuran_tgl03">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl03->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl03->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl03->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl03->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl03->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl03" class="form-group t103_daf_kelas_siswa_iuran_tgl03">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl03->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->tgl03->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl03->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl03->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr04->Visible) { // byr04 ?>
		<td data-name="byr04">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr04" class="form-group t103_daf_kelas_siswa_iuran_byr04">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr04->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr04->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]"></label>
</div>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr04" class="form-group t103_daf_kelas_siswa_iuran_byr04">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr04->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr04" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr04->ViewValue ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr04->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr04"></label></div></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr04->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr04[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr04->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml04->Visible) { // jml04 ?>
		<td data-name="jml04">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml04" class="form-group t103_daf_kelas_siswa_iuran_jml04">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml04->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml04" class="form-group t103_daf_kelas_siswa_iuran_jml04">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml04->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->jml04->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml04->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml04->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl04->Visible) { // tgl04 ?>
		<td data-name="tgl04">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl04" class="form-group t103_daf_kelas_siswa_iuran_tgl04">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl04->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl04->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl04->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl04->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl04->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl04" class="form-group t103_daf_kelas_siswa_iuran_tgl04">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl04->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->tgl04->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl04->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl04->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr05->Visible) { // byr05 ?>
		<td data-name="byr05">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr05" class="form-group t103_daf_kelas_siswa_iuran_byr05">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr05->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr05->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]"></label>
</div>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr05" class="form-group t103_daf_kelas_siswa_iuran_byr05">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr05->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr05" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr05->ViewValue ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr05->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr05"></label></div></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr05->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr05[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr05->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml05->Visible) { // jml05 ?>
		<td data-name="jml05">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml05" class="form-group t103_daf_kelas_siswa_iuran_jml05">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml05->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml05" class="form-group t103_daf_kelas_siswa_iuran_jml05">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml05->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->jml05->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml05->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml05->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl05->Visible) { // tgl05 ?>
		<td data-name="tgl05">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl05" class="form-group t103_daf_kelas_siswa_iuran_tgl05">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl05->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl05->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl05->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl05->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl05->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl05" class="form-group t103_daf_kelas_siswa_iuran_tgl05">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl05->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->tgl05->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl05->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl05->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr06->Visible) { // byr06 ?>
		<td data-name="byr06">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr06" class="form-group t103_daf_kelas_siswa_iuran_byr06">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr06->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr06->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]"></label>
</div>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr06" class="form-group t103_daf_kelas_siswa_iuran_byr06">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr06->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr06" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr06->ViewValue ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr06->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr06"></label></div></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr06->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr06[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr06->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml06->Visible) { // jml06 ?>
		<td data-name="jml06">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml06" class="form-group t103_daf_kelas_siswa_iuran_jml06">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml06->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml06" class="form-group t103_daf_kelas_siswa_iuran_jml06">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml06->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->jml06->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml06->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml06->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl06->Visible) { // tgl06 ?>
		<td data-name="tgl06">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl06" class="form-group t103_daf_kelas_siswa_iuran_tgl06">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl06->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl06->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl06->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl06->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl06->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl06" class="form-group t103_daf_kelas_siswa_iuran_tgl06">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl06->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->tgl06->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl06->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl06->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr07->Visible) { // byr07 ?>
		<td data-name="byr07">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr07" class="form-group t103_daf_kelas_siswa_iuran_byr07">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr07->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr07->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]"></label>
</div>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr07" class="form-group t103_daf_kelas_siswa_iuran_byr07">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr07->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr07" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr07->ViewValue ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr07->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr07"></label></div></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr07->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr07[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr07->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml07->Visible) { // jml07 ?>
		<td data-name="jml07">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml07" class="form-group t103_daf_kelas_siswa_iuran_jml07">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml07->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml07" class="form-group t103_daf_kelas_siswa_iuran_jml07">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml07->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->jml07->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml07->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml07->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl07->Visible) { // tgl07 ?>
		<td data-name="tgl07">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl07" class="form-group t103_daf_kelas_siswa_iuran_tgl07">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl07->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl07->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl07->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl07->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl07->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl07" class="form-group t103_daf_kelas_siswa_iuran_tgl07">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl07->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->tgl07->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl07->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl07->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr08->Visible) { // byr08 ?>
		<td data-name="byr08">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr08" class="form-group t103_daf_kelas_siswa_iuran_byr08">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr08->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr08->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]"></label>
</div>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr08" class="form-group t103_daf_kelas_siswa_iuran_byr08">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr08->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr08" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr08->ViewValue ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr08->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr08"></label></div></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr08->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr08[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr08->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml08->Visible) { // jml08 ?>
		<td data-name="jml08">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml08" class="form-group t103_daf_kelas_siswa_iuran_jml08">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml08->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml08" class="form-group t103_daf_kelas_siswa_iuran_jml08">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml08->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->jml08->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml08->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml08->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl08->Visible) { // tgl08 ?>
		<td data-name="tgl08">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl08" class="form-group t103_daf_kelas_siswa_iuran_tgl08">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl08->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl08->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl08->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl08->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl08->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl08" class="form-group t103_daf_kelas_siswa_iuran_tgl08">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl08->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->tgl08->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl08->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl08->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr09->Visible) { // byr09 ?>
		<td data-name="byr09">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr09" class="form-group t103_daf_kelas_siswa_iuran_byr09">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr09->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr09->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]"></label>
</div>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr09" class="form-group t103_daf_kelas_siswa_iuran_byr09">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr09->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr09" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr09->ViewValue ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr09->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr09"></label></div></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr09->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr09[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr09->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml09->Visible) { // jml09 ?>
		<td data-name="jml09">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml09" class="form-group t103_daf_kelas_siswa_iuran_jml09">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml09->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml09" class="form-group t103_daf_kelas_siswa_iuran_jml09">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml09->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->jml09->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml09->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml09->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl09->Visible) { // tgl09 ?>
		<td data-name="tgl09">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl09" class="form-group t103_daf_kelas_siswa_iuran_tgl09">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl09->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl09->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl09->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl09->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl09->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl09" class="form-group t103_daf_kelas_siswa_iuran_tgl09">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl09->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->tgl09->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl09->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl09->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr10->Visible) { // byr10 ?>
		<td data-name="byr10">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr10" class="form-group t103_daf_kelas_siswa_iuran_byr10">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr10->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr10->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]"></label>
</div>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr10" class="form-group t103_daf_kelas_siswa_iuran_byr10">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr10->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr10" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr10->ViewValue ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr10->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr10"></label></div></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr10->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr10[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr10->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml10->Visible) { // jml10 ?>
		<td data-name="jml10">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml10" class="form-group t103_daf_kelas_siswa_iuran_jml10">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml10->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml10" class="form-group t103_daf_kelas_siswa_iuran_jml10">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml10->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->jml10->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml10->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml10->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl10->Visible) { // tgl10 ?>
		<td data-name="tgl10">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl10" class="form-group t103_daf_kelas_siswa_iuran_tgl10">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl10->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl10->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl10->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl10->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl10->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl10" class="form-group t103_daf_kelas_siswa_iuran_tgl10">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl10->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->tgl10->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl10->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl10->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr11->Visible) { // byr11 ?>
		<td data-name="byr11">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr11" class="form-group t103_daf_kelas_siswa_iuran_byr11">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr11->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr11->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]"></label>
</div>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr11" class="form-group t103_daf_kelas_siswa_iuran_byr11">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr11->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr11" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr11->ViewValue ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr11->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr11"></label></div></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr11->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr11[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr11->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml11->Visible) { // jml11 ?>
		<td data-name="jml11">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml11" class="form-group t103_daf_kelas_siswa_iuran_jml11">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml11->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml11" class="form-group t103_daf_kelas_siswa_iuran_jml11">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml11->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->jml11->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml11->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml11->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl11->Visible) { // tgl11 ?>
		<td data-name="tgl11">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl11" class="form-group t103_daf_kelas_siswa_iuran_tgl11">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl11->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl11->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl11->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl11->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl11->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl11" class="form-group t103_daf_kelas_siswa_iuran_tgl11">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl11->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->tgl11->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl11->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl11->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->byr12->Visible) { // byr12 ?>
		<td data-name="byr12">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr12" class="form-group t103_daf_kelas_siswa_iuran_byr12">
<?php
$selwrk = ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr12->CurrentValue) ? " checked" : "";
?>
<div class="custom-control custom-checkbox d-inline-block">
	<input type="checkbox" class="custom-control-input" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran_grid->byr12->editAttributes() ?>>
	<label class="custom-control-label" for="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]"></label>
</div>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr12" class="form-group t103_daf_kelas_siswa_iuran_byr12">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->byr12->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_byr12" class="custom-control-input" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->byr12->ViewValue ?>" disabled<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran_grid->byr12->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_byr12"></label></div></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr12->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_byr12[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->byr12->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->jml12->Visible) { // jml12 ?>
		<td data-name="jml12">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml12" class="form-group t103_daf_kelas_siswa_iuran_jml12">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->jml12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->jml12->editAttributes() ?>>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml12" class="form-group t103_daf_kelas_siswa_iuran_jml12">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->jml12->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->jml12->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml12->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_jml12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->jml12->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran_grid->tgl12->Visible) { // tgl12 ?>
		<td data-name="tgl12">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl12" class="form-group t103_daf_kelas_siswa_iuran_tgl12">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" data-format="7" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl12->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->tgl12->ReadOnly && !$t103_daf_kelas_siswa_iuran_grid->tgl12->Disabled && !isset($t103_daf_kelas_siswa_iuran_grid->tgl12->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran_grid->tgl12->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "datetimepicker"], function() {
	ew.createDateTimePicker("ft103_daf_kelas_siswa_iurangrid", "x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl12" class="form-group t103_daf_kelas_siswa_iuran_tgl12">
<span<?php echo $t103_daf_kelas_siswa_iuran_grid->tgl12->viewAttributes() ?>><input type="text" readonly class="form-control-plaintext" value="<?php echo HtmlEncode(RemoveHtml($t103_daf_kelas_siswa_iuran_grid->tgl12->ViewValue)) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" name="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" id="x<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl12->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" name="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" id="o<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>_tgl12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran_grid->tgl12->OldValue) ?>">
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t103_daf_kelas_siswa_iuran_grid->ListOptions->render("body", "right", $t103_daf_kelas_siswa_iuran_grid->RowIndex);
?>
<script>
loadjs.ready(["ft103_daf_kelas_siswa_iurangrid", "load"], function() {
	ft103_daf_kelas_siswa_iurangrid.updateLists(<?php echo $t103_daf_kelas_siswa_iuran_grid->RowIndex ?>);
});
</script>
	</tr>
<?php
	}
?>
</tbody>
</table><!-- /.ew-table -->
</div><!-- /.ew-grid-middle-panel -->
<?php if ($t103_daf_kelas_siswa_iuran->CurrentMode == "add" || $t103_daf_kelas_siswa_iuran->CurrentMode == "copy") { ?>
<input type="hidden" name="<?php echo $t103_daf_kelas_siswa_iuran_grid->FormKeyCountName ?>" id="<?php echo $t103_daf_kelas_siswa_iuran_grid->FormKeyCountName ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->KeyCount ?>">
<?php echo $t103_daf_kelas_siswa_iuran_grid->MultiSelectKey ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->CurrentMode == "edit") { ?>
<input type="hidden" name="<?php echo $t103_daf_kelas_siswa_iuran_grid->FormKeyCountName ?>" id="<?php echo $t103_daf_kelas_siswa_iuran_grid->FormKeyCountName ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_grid->KeyCount ?>">
<?php echo $t103_daf_kelas_siswa_iuran_grid->MultiSelectKey ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->CurrentMode == "") { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
<input type="hidden" name="detailpage" value="ft103_daf_kelas_siswa_iurangrid">
</div><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t103_daf_kelas_siswa_iuran_grid->Recordset)
	$t103_daf_kelas_siswa_iuran_grid->Recordset->Close();
?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->ShowOtherOptions) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php $t103_daf_kelas_siswa_iuran_grid->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_grid->TotalRecords == 0 && !$t103_daf_kelas_siswa_iuran->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t103_daf_kelas_siswa_iuran_grid->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php if (!$t103_daf_kelas_siswa_iuran_grid->isExport()) { ?>
<script>
loadjs.ready("load", function() {

	// Startup script
	// Write your table-specific startup script here
	// console.log("page loaded");

});
</script>
<?php } ?>
<?php
$t103_daf_kelas_siswa_iuran_grid->terminate();
?>