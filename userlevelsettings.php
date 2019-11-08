<?php

/**
 * PHPMaker 2020 user level settings
 */
namespace PHPMaker2020\project1;

// User level info
$USER_LEVELS = [["-2","Anonymous"],
	["0","Default"]];

// User level priv info
$USER_LEVEL_PRIVS = [["{E35313A1-BDC4-466C-B9BC-088D7A329967}t001_tahun_ajaran","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t001_tahun_ajaran","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t002_sekolah","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t002_sekolah","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t003_kelas","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t003_kelas","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t004_siswa","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t004_siswa","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t005_iuran","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t005_iuran","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t101_daf_kelas","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t101_daf_kelas","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t102_daf_kelas_siswa","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t102_daf_kelas_siswa","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t103_daf_kelas_siswa_iuran","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t103_daf_kelas_siswa_iuran","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t301_employees","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t301_employees","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t302_userlevels","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t302_userlevels","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t303_userlevelpermissions","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t303_userlevelpermissions","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t304_audit_trail","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}t304_audit_trail","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v101_daf_kelas","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v101_daf_kelas","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v102_daf_kelas_siswa","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v102_daf_kelas_siswa","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v103_daf_kelas_siswa_iuran","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v103_daf_kelas_siswa_iuran","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v104_pembayaran","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v104_pembayaran","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v105_lap_bayar","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v105_lap_bayar","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v106_tunggakan","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v106_tunggakan","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v107_lap_tunggak","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v107_lap_tunggak","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v108_lap_um","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v108_lap_um","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v109_lap_pum","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v109_lap_pum","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v110_bukti_master","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v110_bukti_master","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v111_daf_kelas_iuran","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v111_daf_kelas_iuran","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v112_daf_kelas_siswa_iuran","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v112_daf_kelas_siswa_iuran","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v113_export_siswa_iuran","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}v113_export_siswa_iuran","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}c301_home.php","-2","72"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}c301_home.php","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}c302_backup.php","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}c302_backup.php","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}c303_import.php","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}c303_import.php","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}c304_import_aksi.php","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}c304_import_aksi.php","0","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}c305_import_aksi2.php","-2","0"],
	["{E35313A1-BDC4-466C-B9BC-088D7A329967}c305_import_aksi2.php","0","0"]];

// User level table info
$USER_LEVEL_TABLES = [["t001_tahun_ajaran","t001_tahun_ajaran","Thn. Ajaran",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["t002_sekolah","t002_sekolah","Sekolah",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["t003_kelas","t003_kelas","Kelas",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["t004_siswa","t004_siswa","Siswa",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["t005_iuran","t005_iuran","Iuran",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["t101_daf_kelas","t101_daf_kelas","Kelas & Siswa",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["t102_daf_kelas_siswa","t102_daf_kelas_siswa","Siswa",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["t103_daf_kelas_siswa_iuran","t103_daf_kelas_siswa_iuran","Iuran",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["t301_employees","t301_employees","t 301 employees",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["t302_userlevels","t302_userlevels","t 302 userlevels",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["t303_userlevelpermissions","t303_userlevelpermissions","t 303 userlevelpermissions",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["t304_audit_trail","t304_audit_trail","t 304 audit trail",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["v101_daf_kelas","v101_daf_kelas","v 101 daf kelas",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["v102_daf_kelas_siswa","v102_daf_kelas_siswa","Siswa & Iuran",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["v103_daf_kelas_siswa_iuran","v103_daf_kelas_siswa_iuran","Pembayaran",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["v104_pembayaran","v104_pembayaran","v 104 pembayaran",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["v105_lap_bayar","v105_lap_bayar","v 105 lap bayar",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["v106_tunggakan","v106_tunggakan","v 106 tunggakan",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["v107_lap_tunggak","v107_lap_tunggak","v 107 lap tunggak",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["v108_lap_um","v108_lap_um","v 108 lap um",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["v109_lap_pum","v109_lap_pum","v 109 lap pum",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["v110_bukti_master","v110_bukti_master","Bukti Pembayaran",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["v111_daf_kelas_iuran","v111_daf_kelas_iuran","v 111 daf kelas iuran",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["v112_daf_kelas_siswa_iuran","v112_daf_kelas_siswa_iuran","v 112 daf kelas siswa iuran",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["v113_export_siswa_iuran","v113_export_siswa_iuran","v 113 export siswa iuran",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["c301_home.php","c301_home","Home",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["c302_backup.php","c302_backup","Backup",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["c303_import.php","c303_import","Import",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["c304_import_aksi.php","c304_import_aksi","Import Aksi",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"],
	["c305_import_aksi2.php","c305_import_aksi2","Proses Import",true,"{E35313A1-BDC4-466C-B9BC-088D7A329967}"]];