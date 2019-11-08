<?php
namespace PHPMaker2020\project1;

// Menu Language
if ($Language && function_exists(PROJECT_NAMESPACE . "Config") && $Language->LanguageFolder == Config("LANGUAGE_FOLDER")) {
	$MenuRelativePath = "";
	$MenuLanguage = &$Language;
} else { // Compat reports
	$LANGUAGE_FOLDER = "../lang/";
	$MenuRelativePath = "../";
	$MenuLanguage = new Language();
}

// Navbar menu
$topMenu = new Menu("navbar", TRUE, TRUE);
$topMenu->addMenuItem(26, "mi_c301_home", $MenuLanguage->MenuPhrase("26", "MenuText"), $MenuRelativePath . "c301_home.php", -1, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}c301_home.php'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(27, "mci_Setup", $MenuLanguage->MenuPhrase("27", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$topMenu->addMenuItem(1, "mi_t001_tahun_ajaran", $MenuLanguage->MenuPhrase("1", "MenuText"), $MenuRelativePath . "t001_tahun_ajaranlist.php", 27, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t001_tahun_ajaran'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(2, "mi_t002_sekolah", $MenuLanguage->MenuPhrase("2", "MenuText"), $MenuRelativePath . "t002_sekolahlist.php", 27, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t002_sekolah'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(3, "mi_t003_kelas", $MenuLanguage->MenuPhrase("3", "MenuText"), $MenuRelativePath . "t003_kelaslist.php", 27, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t003_kelas'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(4, "mi_t004_siswa", $MenuLanguage->MenuPhrase("4", "MenuText"), $MenuRelativePath . "t004_siswalist.php", 27, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t004_siswa'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(5, "mi_t005_iuran", $MenuLanguage->MenuPhrase("5", "MenuText"), $MenuRelativePath . "t005_iuranlist.php", 27, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t005_iuran'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(28, "mci_Daftar", $MenuLanguage->MenuPhrase("28", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$topMenu->addMenuItem(6, "mi_t101_daf_kelas", $MenuLanguage->MenuPhrase("6", "MenuText"), $MenuRelativePath . "t101_daf_kelaslist.php", 28, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t101_daf_kelas'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(14, "mi_v102_daf_kelas_siswa", $MenuLanguage->MenuPhrase("14", "MenuText"), $MenuRelativePath . "v102_daf_kelas_siswalist.php", 28, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}v102_daf_kelas_siswa'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(15, "mi_v103_daf_kelas_siswa_iuran", $MenuLanguage->MenuPhrase("15", "MenuText"), $MenuRelativePath . "v103_daf_kelas_siswa_iuranlist.php", -1, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}v103_daf_kelas_siswa_iuran'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(30, "mci_Laporan", $MenuLanguage->MenuPhrase("30", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$topMenu->addMenuItem(29, "mci_General", $MenuLanguage->MenuPhrase("29", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$topMenu->addMenuItem(9, "mi_t301_employees", $MenuLanguage->MenuPhrase("9", "MenuText"), $MenuRelativePath . "t301_employeeslist.php", 29, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t301_employees'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(10, "mi_t302_userlevels", $MenuLanguage->MenuPhrase("10", "MenuText"), $MenuRelativePath . "t302_userlevelslist.php", 29, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t302_userlevels'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(12, "mi_t304_audit_trail", $MenuLanguage->MenuPhrase("12", "MenuText"), $MenuRelativePath . "t304_audit_traillist.php", 29, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t304_audit_trail'), FALSE, FALSE, "", "", TRUE);
echo $topMenu->toScript();

// Sidebar menu
$sideMenu = new Menu("menu", TRUE, FALSE);
$sideMenu->addMenuItem(26, "mi_c301_home", $MenuLanguage->MenuPhrase("26", "MenuText"), $MenuRelativePath . "c301_home.php", -1, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}c301_home.php'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(27, "mci_Setup", $MenuLanguage->MenuPhrase("27", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$sideMenu->addMenuItem(1, "mi_t001_tahun_ajaran", $MenuLanguage->MenuPhrase("1", "MenuText"), $MenuRelativePath . "t001_tahun_ajaranlist.php", 27, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t001_tahun_ajaran'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(2, "mi_t002_sekolah", $MenuLanguage->MenuPhrase("2", "MenuText"), $MenuRelativePath . "t002_sekolahlist.php", 27, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t002_sekolah'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(3, "mi_t003_kelas", $MenuLanguage->MenuPhrase("3", "MenuText"), $MenuRelativePath . "t003_kelaslist.php", 27, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t003_kelas'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(4, "mi_t004_siswa", $MenuLanguage->MenuPhrase("4", "MenuText"), $MenuRelativePath . "t004_siswalist.php", 27, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t004_siswa'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(5, "mi_t005_iuran", $MenuLanguage->MenuPhrase("5", "MenuText"), $MenuRelativePath . "t005_iuranlist.php", 27, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t005_iuran'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(28, "mci_Daftar", $MenuLanguage->MenuPhrase("28", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$sideMenu->addMenuItem(6, "mi_t101_daf_kelas", $MenuLanguage->MenuPhrase("6", "MenuText"), $MenuRelativePath . "t101_daf_kelaslist.php", 28, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t101_daf_kelas'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(14, "mi_v102_daf_kelas_siswa", $MenuLanguage->MenuPhrase("14", "MenuText"), $MenuRelativePath . "v102_daf_kelas_siswalist.php", 28, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}v102_daf_kelas_siswa'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(15, "mi_v103_daf_kelas_siswa_iuran", $MenuLanguage->MenuPhrase("15", "MenuText"), $MenuRelativePath . "v103_daf_kelas_siswa_iuranlist.php", -1, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}v103_daf_kelas_siswa_iuran'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(30, "mci_Laporan", $MenuLanguage->MenuPhrase("30", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$sideMenu->addMenuItem(29, "mci_General", $MenuLanguage->MenuPhrase("29", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$sideMenu->addMenuItem(9, "mi_t301_employees", $MenuLanguage->MenuPhrase("9", "MenuText"), $MenuRelativePath . "t301_employeeslist.php", 29, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t301_employees'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(10, "mi_t302_userlevels", $MenuLanguage->MenuPhrase("10", "MenuText"), $MenuRelativePath . "t302_userlevelslist.php", 29, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t302_userlevels'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(12, "mi_t304_audit_trail", $MenuLanguage->MenuPhrase("12", "MenuText"), $MenuRelativePath . "t304_audit_traillist.php", 29, "", AllowListMenu('{E35313A1-BDC4-466C-B9BC-088D7A329967}t304_audit_trail'), FALSE, FALSE, "", "", TRUE);
echo $sideMenu->toScript();
?>