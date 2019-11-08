<?php
namespace PHPMaker2020\project1;

// Session
if (session_status() !== PHP_SESSION_ACTIVE)
	session_start(); // Init session data

// Output buffering
ob_start();
?>
<?php include_once "autoload.php"; ?>
<?php

// Write header
WriteHeader(FALSE);

// Create page object
$c303_import = new c303_import();

// Run the page
$c303_import->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();
?>
<?php include_once "header.php"; ?>
<?php
if (isset($_GET["ok"]) and $_GET["ok"] == 1) {
?>
	<div class="ewContentColumn">
	<p>&nbsp;</p>
	<button class="btn btn-primary" name="btn-submit" id="btn-submit" type="submit" onclick="window.location.href='.'">Selesai</button>
	</div>
<?php
}
else {
?>
<form method="post" enctype="multipart/form-data" action="c305_import_aksi2.php">
	Pilih File: 
	<input name="fileiuransiswa" type="file" required="required"><br/><br/> 
	<input name="upload" type="submit" value="Import">
</form>
<?php
	}
?>

<?php if (Config("DEBUG")) echo GetDebugMessage(); ?>
<?php include_once "footer.php"; ?>
<?php
$c303_import->terminate();
?>