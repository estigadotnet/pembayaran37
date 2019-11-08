<?php namespace PHPMaker2020\project1; ?>
<?php

/**
 * Table class for r102_lap_tunggak
 */
class r102_lap_tunggak extends ReportTable
{
	protected $SqlFrom = "";
	protected $SqlSelect = "";
	protected $SqlSelectList = "";
	protected $SqlWhere = "";
	protected $SqlGroupBy = "";
	protected $SqlHaving = "";
	protected $SqlOrderBy = "";
	public $UseSessionForListSql = TRUE;

	// Column CSS classes
	public $LeftColumnClass = "col-sm-2 col-form-label ew-label";
	public $RightColumnClass = "col-sm-10";
	public $OffsetColumnClass = "col-sm-10 offset-sm-2";
	public $TableLeftColumnClass = "w-col-2";
	public $ShowGroupHeaderAsRow = FALSE;
	public $ShowCompactSummaryFooter = TRUE;

	// Export
	public $ExportDoc;

	// Fields
	public $keterangan;
	public $IuranNama2;
	public $Jumlah;
	public $TahunAjaran;
	public $SekolahNama;
	public $KelasNama;
	public $NomorInduk;
	public $SiswaNama;
	public $IuranNama;
	public $Periode;
	public $PeriodeBulan;
	public $JumlahBayar;
	public $daf_kelas_siswa_id;
	public $iuran_id;
	public $StatusBayar;
	public $TglBayar;
	public $siswa_id;
	public $dk_id;
	public $kelas_id;
	public $sekolah_id;
	public $tahun_ajaran_id;
	public $PeriodeNow;

	// Constructor
	public function __construct()
	{
		global $Language, $CurrentLanguage;
		parent::__construct();

		// Language object
		if (!isset($Language))
			$Language = new Language();
		$this->TableVar = 'r102_lap_tunggak';
		$this->TableName = 'r102_lap_tunggak';
		$this->TableType = 'REPORT';

		// Update Table
		$this->UpdateTable = "`v107_lap_tunggak`";
		$this->ReportSourceTable = 'v107_lap_tunggak'; // Report source table
		$this->Dbid = 'DB';
		$this->ExportAll = TRUE;
		$this->ExportPageBreakCount = 0; // Page break per every n record (report only)
		$this->ExportPageOrientation = "portrait"; // Page orientation (PDF only)
		$this->ExportPageSize = "a4"; // Page size (PDF only)
		$this->ExportExcelPageOrientation = ""; // Page orientation (PhpSpreadsheet only)
		$this->ExportExcelPageSize = ""; // Page size (PhpSpreadsheet only)
		$this->ExportWordPageOrientation = "portrait"; // Page orientation (PHPWord only)
		$this->ExportWordColumnWidth = NULL; // Cell width (PHPWord only)
		$this->UserIDAllowSecurity = 0; // User ID Allow

		// keterangan
		$this->keterangan = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_keterangan', 'keterangan', '`keterangan`', '`keterangan`', 200, 193, -1, FALSE, '`keterangan`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->keterangan->GroupingFieldId = 1;
		$this->keterangan->ShowGroupHeaderAsRow = $this->ShowGroupHeaderAsRow;
		$this->keterangan->ShowCompactSummaryFooter = $this->ShowCompactSummaryFooter;
		$this->keterangan->GroupByType = "";
		$this->keterangan->GroupInterval = "0";
		$this->keterangan->GroupSql = "";
		$this->keterangan->Sortable = TRUE; // Allow sort
		$this->keterangan->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['keterangan'] = &$this->keterangan;

		// IuranNama2
		$this->IuranNama2 = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_IuranNama2', 'IuranNama2', '`IuranNama2`', '`IuranNama2`', 200, 39, -1, FALSE, '`IuranNama2`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->IuranNama2->GroupingFieldId = 2;
		$this->IuranNama2->ShowGroupHeaderAsRow = $this->ShowGroupHeaderAsRow;
		$this->IuranNama2->ShowCompactSummaryFooter = $this->ShowCompactSummaryFooter;
		$this->IuranNama2->GroupByType = "";
		$this->IuranNama2->GroupInterval = "0";
		$this->IuranNama2->GroupSql = "";
		$this->IuranNama2->Sortable = TRUE; // Allow sort
		$this->IuranNama2->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['IuranNama2'] = &$this->IuranNama2;

		// Jumlah
		$this->Jumlah = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_Jumlah', 'Jumlah', '`Jumlah`', '`Jumlah`', 4, 14, -1, FALSE, '`Jumlah`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->Jumlah->GroupingFieldId = 3;
		$this->Jumlah->ShowGroupHeaderAsRow = $this->ShowGroupHeaderAsRow;
		$this->Jumlah->ShowCompactSummaryFooter = $this->ShowCompactSummaryFooter;
		$this->Jumlah->GroupByType = "";
		$this->Jumlah->GroupInterval = "0";
		$this->Jumlah->GroupSql = "";
		$this->Jumlah->Nullable = FALSE; // NOT NULL field
		$this->Jumlah->Required = TRUE; // Required field
		$this->Jumlah->Sortable = TRUE; // Allow sort
		$this->Jumlah->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->Jumlah->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['Jumlah'] = &$this->Jumlah;

		// TahunAjaran
		$this->TahunAjaran = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_TahunAjaran', 'TahunAjaran', '`TahunAjaran`', '`TahunAjaran`', 200, 9, -1, FALSE, '`TahunAjaran`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->TahunAjaran->Sortable = TRUE; // Allow sort
		$this->TahunAjaran->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->TahunAjaran->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->TahunAjaran->Lookup = new Lookup('TahunAjaran', 'v107_lap_tunggak', TRUE, 'TahunAjaran', ["TahunAjaran","","",""], [], [], [], [], [], [], '', '');
		$this->TahunAjaran->AdvancedSearch->SearchValueDefault = INIT_VALUE;
		$this->TahunAjaran->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['TahunAjaran'] = &$this->TahunAjaran;

		// SekolahNama
		$this->SekolahNama = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_SekolahNama', 'SekolahNama', '`SekolahNama`', '`SekolahNama`', 200, 50, -1, FALSE, '`SekolahNama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->SekolahNama->Sortable = TRUE; // Allow sort
		$this->SekolahNama->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->SekolahNama->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->SekolahNama->Lookup = new Lookup('SekolahNama', 'v107_lap_tunggak', TRUE, 'SekolahNama', ["SekolahNama","","",""], [], [], [], [], [], [], '', '');
		$this->SekolahNama->AdvancedSearch->SearchValueDefault = INIT_VALUE;
		$this->SekolahNama->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['SekolahNama'] = &$this->SekolahNama;

		// KelasNama
		$this->KelasNama = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_KelasNama', 'KelasNama', '`KelasNama`', '`KelasNama`', 200, 50, -1, FALSE, '`KelasNama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->KelasNama->Sortable = TRUE; // Allow sort
		$this->KelasNama->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->KelasNama->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->KelasNama->Lookup = new Lookup('KelasNama', 'v107_lap_tunggak', TRUE, 'KelasNama', ["KelasNama","","",""], [], [], [], [], [], [], '', '');
		$this->KelasNama->AdvancedSearch->SearchValueDefault = INIT_VALUE;
		$this->KelasNama->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['KelasNama'] = &$this->KelasNama;

		// NomorInduk
		$this->NomorInduk = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_NomorInduk', 'NomorInduk', '`NomorInduk`', '`NomorInduk`', 200, 25, -1, FALSE, '`NomorInduk`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->NomorInduk->Sortable = TRUE; // Allow sort
		$this->NomorInduk->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->NomorInduk->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->NomorInduk->Lookup = new Lookup('NomorInduk', 'v107_lap_tunggak', TRUE, 'NomorInduk', ["NomorInduk","SiswaNama","",""], [], [], [], [], [], [], '', '');
		$this->NomorInduk->AdvancedSearch->SearchValueDefault = INIT_VALUE;
		$this->NomorInduk->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['NomorInduk'] = &$this->NomorInduk;

		// SiswaNama
		$this->SiswaNama = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_SiswaNama', 'SiswaNama', '`SiswaNama`', '`SiswaNama`', 200, 50, -1, FALSE, '`SiswaNama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->SiswaNama->Sortable = TRUE; // Allow sort
		$this->SiswaNama->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->SiswaNama->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->SiswaNama->Lookup = new Lookup('SiswaNama', 'v107_lap_tunggak', TRUE, 'SiswaNama', ["NomorInduk","SiswaNama","",""], [], [], [], [], [], [], '', '');
		$this->SiswaNama->AdvancedSearch->SearchValueDefault = INIT_VALUE;
		$this->SiswaNama->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['SiswaNama'] = &$this->SiswaNama;

		// IuranNama
		$this->IuranNama = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_IuranNama', 'IuranNama', '`IuranNama`', '`IuranNama`', 200, 25, -1, FALSE, '`IuranNama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->IuranNama->Sortable = TRUE; // Allow sort
		$this->IuranNama->SelectMultiple = TRUE; // Multiple select
		$this->IuranNama->Lookup = new Lookup('IuranNama', 'v107_lap_tunggak', TRUE, 'IuranNama', ["IuranNama","","",""], [], [], [], [], [], [], '', '');
		$this->IuranNama->AdvancedSearch->SearchValueDefault = INIT_VALUE;
		$this->IuranNama->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['IuranNama'] = &$this->IuranNama;

		// Periode
		$this->Periode = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_Periode', 'Periode', '`Periode`', '`Periode`', 3, 2, -1, FALSE, '`Periode`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->Periode->Nullable = FALSE; // NOT NULL field
		$this->Periode->Required = TRUE; // Required field
		$this->Periode->Sortable = TRUE; // Allow sort
		$this->Periode->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->Periode->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->Periode->Lookup = new Lookup('Periode', 'v107_lap_tunggak', TRUE, 'Periode', ["Periode","","",""], [], [], [], [], [], [], '`Periode` ASC', '');
		$this->Periode->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->Periode->AdvancedSearch->SearchValueDefault = INIT_VALUE;
		$this->Periode->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['Periode'] = &$this->Periode;

		// PeriodeBulan
		$this->PeriodeBulan = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_PeriodeBulan', 'PeriodeBulan', '`PeriodeBulan`', '`PeriodeBulan`', 200, 9, -1, FALSE, '`PeriodeBulan`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->PeriodeBulan->Nullable = FALSE; // NOT NULL field
		$this->PeriodeBulan->Required = TRUE; // Required field
		$this->PeriodeBulan->Sortable = TRUE; // Allow sort
		$this->PeriodeBulan->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['PeriodeBulan'] = &$this->PeriodeBulan;

		// JumlahBayar
		$this->JumlahBayar = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_JumlahBayar', 'JumlahBayar', '`JumlahBayar`', '`JumlahBayar`', 5, 19, -1, FALSE, '`JumlahBayar`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->JumlahBayar->Sortable = TRUE; // Allow sort
		$this->JumlahBayar->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->JumlahBayar->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['JumlahBayar'] = &$this->JumlahBayar;

		// daf_kelas_siswa_id
		$this->daf_kelas_siswa_id = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_daf_kelas_siswa_id', 'daf_kelas_siswa_id', '`daf_kelas_siswa_id`', '`daf_kelas_siswa_id`', 3, 11, -1, FALSE, '`daf_kelas_siswa_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->daf_kelas_siswa_id->Nullable = FALSE; // NOT NULL field
		$this->daf_kelas_siswa_id->Required = TRUE; // Required field
		$this->daf_kelas_siswa_id->Sortable = TRUE; // Allow sort
		$this->daf_kelas_siswa_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->daf_kelas_siswa_id->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['daf_kelas_siswa_id'] = &$this->daf_kelas_siswa_id;

		// iuran_id
		$this->iuran_id = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_iuran_id', 'iuran_id', '`iuran_id`', '`iuran_id`', 3, 11, -1, FALSE, '`iuran_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->iuran_id->Nullable = FALSE; // NOT NULL field
		$this->iuran_id->Required = TRUE; // Required field
		$this->iuran_id->Sortable = TRUE; // Allow sort
		$this->iuran_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->iuran_id->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['iuran_id'] = &$this->iuran_id;

		// StatusBayar
		$this->StatusBayar = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_StatusBayar', 'StatusBayar', '`StatusBayar`', '`StatusBayar`', 200, 1, -1, FALSE, '`StatusBayar`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->StatusBayar->Nullable = FALSE; // NOT NULL field
		$this->StatusBayar->Required = TRUE; // Required field
		$this->StatusBayar->Sortable = TRUE; // Allow sort
		$this->StatusBayar->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['StatusBayar'] = &$this->StatusBayar;

		// TglBayar
		$this->TglBayar = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_TglBayar', 'TglBayar', '`TglBayar`', CastDateFieldForLike("`TglBayar`", 0, "DB"), 133, 10, 0, FALSE, '`TglBayar`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->TglBayar->Sortable = TRUE; // Allow sort
		$this->TglBayar->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_FORMAT"], $Language->phrase("IncorrectDate"));
		$this->TglBayar->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['TglBayar'] = &$this->TglBayar;

		// siswa_id
		$this->siswa_id = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_siswa_id', 'siswa_id', '`siswa_id`', '`siswa_id`', 3, 11, -1, FALSE, '`siswa_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->siswa_id->Sortable = TRUE; // Allow sort
		$this->siswa_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->siswa_id->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['siswa_id'] = &$this->siswa_id;

		// dk_id
		$this->dk_id = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_dk_id', 'dk_id', '`dk_id`', '`dk_id`', 3, 11, -1, FALSE, '`dk_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'NO');
		$this->dk_id->IsAutoIncrement = TRUE; // Autoincrement field
		$this->dk_id->IsPrimaryKey = TRUE; // Primary key field
		$this->dk_id->Sortable = TRUE; // Allow sort
		$this->dk_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->dk_id->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['dk_id'] = &$this->dk_id;

		// kelas_id
		$this->kelas_id = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_kelas_id', 'kelas_id', '`kelas_id`', '`kelas_id`', 3, 11, -1, FALSE, '`kelas_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->kelas_id->Sortable = TRUE; // Allow sort
		$this->kelas_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->kelas_id->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['kelas_id'] = &$this->kelas_id;

		// sekolah_id
		$this->sekolah_id = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_sekolah_id', 'sekolah_id', '`sekolah_id`', '`sekolah_id`', 3, 11, -1, FALSE, '`sekolah_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->sekolah_id->Sortable = TRUE; // Allow sort
		$this->sekolah_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->sekolah_id->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['sekolah_id'] = &$this->sekolah_id;

		// tahun_ajaran_id
		$this->tahun_ajaran_id = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_tahun_ajaran_id', 'tahun_ajaran_id', '`tahun_ajaran_id`', '`tahun_ajaran_id`', 3, 11, -1, FALSE, '`tahun_ajaran_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tahun_ajaran_id->Sortable = TRUE; // Allow sort
		$this->tahun_ajaran_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->tahun_ajaran_id->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['tahun_ajaran_id'] = &$this->tahun_ajaran_id;

		// PeriodeNow
		$this->PeriodeNow = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_PeriodeNow', 'PeriodeNow', '`PeriodeNow`', '`PeriodeNow`', 3, 2, -1, FALSE, '`PeriodeNow`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->PeriodeNow->Sortable = TRUE; // Allow sort
		$this->PeriodeNow->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->PeriodeNow->SourceTableVar = 'v107_lap_tunggak';
		$this->fields['PeriodeNow'] = &$this->PeriodeNow;
	}

	// Field Visibility
	public function getFieldVisibility($fldParm)
	{
		global $Security;
		return $this->$fldParm->Visible; // Returns original value
	}

	// Multiple column sort
	protected function updateSort(&$fld, $ctrl)
	{
		if ($this->CurrentOrder == $fld->Name) {
			$sortField = $fld->Expression;
			$lastSort = $fld->getSort();
			if ($this->CurrentOrderType == "ASC" || $this->CurrentOrderType == "DESC") {
				$thisSort = $this->CurrentOrderType;
			} else {
				$thisSort = ($lastSort == "ASC") ? "DESC" : "ASC";
			}
			$fld->setSort($thisSort);
			if ($fld->GroupingFieldId == 0) {
				if ($ctrl) {
					$orderBy = $this->getDetailOrderBy();
					if (strpos($orderBy, $sortField . " " . $lastSort) !== FALSE) {
						$orderBy = str_replace($sortField . " " . $lastSort, $sortField . " " . $thisSort, $orderBy);
					} else {
						if ($orderBy != "") $orderBy .= ", ";
						$orderBy .= $sortField . " " . $thisSort;
					}
					$this->setDetailOrderBy($orderBy); // Save to Session
				} else {
					$this->setDetailOrderBy($sortField . " " . $thisSort); // Save to Session
				}
			}
		} else {
			if ($fld->GroupingFieldId == 0 && !$ctrl) $fld->setSort("");
		}
	}

	// Get Sort SQL
	protected function sortSql()
	{
		$dtlSortSql = $this->getDetailOrderBy(); // Get ORDER BY for detail fields from session
		$argrps = [];
		foreach ($this->fields as $fld) {
			if ($fld->getSort() != "") {
				$fldsql = $fld->Expression;
				if ($fld->GroupingFieldId > 0) {
					if ($fld->GroupSql != "")
						$argrps[$fld->GroupingFieldId] = str_replace("%s", $fldsql, $fld->GroupSql) . " " . $fld->getSort();
					else
						$argrps[$fld->GroupingFieldId] = $fldsql . " " . $fld->getSort();
				}
			}
		}
		$sortSql = "";
		foreach ($argrps as $grp) {
			if ($sortSql != "") $sortSql .= ", ";
			$sortSql .= $grp;
		}
		if ($dtlSortSql != "") {
			if ($sortSql != "") $sortSql .= ", ";
			$sortSql .= $dtlSortSql;
		}
		return $sortSql;
	}

	// Table Level Group SQL
	private $_sqlFirstGroupField = "";
	private $_sqlSelectGroup = "";
	private $_sqlOrderByGroup = "";

	// First Group Field
	public function getSqlFirstGroupField($alias = FALSE)
	{
		if ($this->_sqlFirstGroupField != "")
			return $this->_sqlFirstGroupField;
		$firstGroupField = &$this->keterangan;
		$expr = $firstGroupField->Expression;
		if ($firstGroupField->GroupSql != "") {
			$expr = str_replace("%s", $firstGroupField->Expression, $firstGroupField->GroupSql);
			if ($alias)
				$expr .= " AS " . QuotedName($firstGroupField->getGroupName(), $this->Dbid);
		}
		return $expr;
	}
	public function setSqlFirstGroupField($v)
	{
		$this->_sqlFirstGroupField = $v;
	}

	// Select Group
	public function getSqlSelectGroup()
	{
		return ($this->_sqlSelectGroup != "") ? $this->_sqlSelectGroup : "SELECT DISTINCT " . $this->getSqlFirstGroupField(TRUE) . " FROM " . $this->getSqlFrom();
	}
	public function setSqlSelectGroup($v)
	{
		$this->_sqlSelectGroup = $v;
	}

	// Order By Group
	public function getSqlOrderByGroup()
	{
		if ($this->_sqlOrderByGroup != "")
			return $this->_sqlOrderByGroup;
		return $this->getSqlFirstGroupField() . " ASC";
	}
	public function setSqlOrderByGroup($v)
	{
		$this->_sqlOrderByGroup = $v;
	}

	// Summary properties
	private $_sqlSelectAggregate = "";
	private $_sqlAggregatePrefix = "";
	private $_sqlAggregateSuffix = "";
	private $_sqlSelectCount = "";

	// Select Aggregate
	public function getSqlSelectAggregate()
	{
		return ($this->_sqlSelectAggregate != "") ? $this->_sqlSelectAggregate : "SELECT SUM(`JumlahBayar`) AS `sum_jumlahbayar` FROM " . $this->getSqlFrom();
	}
	public function setSqlSelectAggregate($v)
	{
		$this->_sqlSelectAggregate = $v;
	}

	// Aggregate Prefix
	public function getSqlAggregatePrefix()
	{
		return ($this->_sqlAggregatePrefix != "") ? $this->_sqlAggregatePrefix : "";
	}
	public function setSqlAggregatePrefix($v)
	{
		$this->_sqlAggregatePrefix = $v;
	}

	// Aggregate Suffix
	public function getSqlAggregateSuffix()
	{
		return ($this->_sqlAggregateSuffix != "") ? $this->_sqlAggregateSuffix : "";
	}
	public function setSqlAggregateSuffix($v)
	{
		$this->_sqlAggregateSuffix = $v;
	}

	// Select Count
	public function getSqlSelectCount()
	{
		return ($this->_sqlSelectCount != "") ? $this->_sqlSelectCount : "SELECT COUNT(*) FROM " . $this->getSqlFrom();
	}
	public function setSqlSelectCount($v)
	{
		$this->_sqlSelectCount = $v;
	}

	// Render for lookup
	public function renderLookup()
	{
		$this->TahunAjaran->ViewValue = GetDropDownDisplayValue($this->TahunAjaran->CurrentValue, "", 0);
		$this->SekolahNama->ViewValue = GetDropDownDisplayValue($this->SekolahNama->CurrentValue, "", 0);
		$this->KelasNama->ViewValue = GetDropDownDisplayValue($this->KelasNama->CurrentValue, "", 0);
		$this->NomorInduk->ViewValue = GetDropDownDisplayValue($this->NomorInduk->CurrentValue, "", 0);
		$this->SiswaNama->ViewValue = GetDropDownDisplayValue($this->SiswaNama->CurrentValue, "", 0);
		$this->IuranNama->ViewValue = GetDropDownDisplayValue($this->IuranNama->CurrentValue, "", 0);
		$this->Periode->ViewValue = GetDropDownDisplayValue($this->Periode->CurrentValue, "", 0);
	}

	// Table level SQL
	public function getSqlFrom() // From
	{
		return ($this->SqlFrom != "") ? $this->SqlFrom : "`v107_lap_tunggak`";
	}
	public function sqlFrom() // For backward compatibility
	{
		return $this->getSqlFrom();
	}
	public function setSqlFrom($v)
	{
		$this->SqlFrom = $v;
	}
	public function getSqlSelect() // Select
	{
		if ($this->SqlSelect != "")
			return $this->SqlSelect;
		$select = "*";
		$groupField = &$this->keterangan;
		if ($groupField->GroupSql != "") {
			$expr = str_replace("%s", $groupField->Expression, $groupField->GroupSql) . " AS " . QuotedName($groupField->getGroupName(), $this->Dbid);
			$select .= ", " . $expr;
		}
		$groupField = &$this->IuranNama2;
		if ($groupField->GroupSql != "") {
			$expr = str_replace("%s", $groupField->Expression, $groupField->GroupSql) . " AS " . QuotedName($groupField->getGroupName(), $this->Dbid);
			$select .= ", " . $expr;
		}
		$groupField = &$this->Jumlah;
		if ($groupField->GroupSql != "") {
			$expr = str_replace("%s", $groupField->Expression, $groupField->GroupSql) . " AS " . QuotedName($groupField->getGroupName(), $this->Dbid);
			$select .= ", " . $expr;
		}
		return "SELECT " . $select . " FROM " . $this->getSqlFrom();
	}
	public function sqlSelect() // For backward compatibility
	{
		return $this->getSqlSelect();
	}
	public function setSqlSelect($v)
	{
		$this->SqlSelect = $v;
	}
	public function getSqlWhere() // Where
	{
		$where = ($this->SqlWhere != "") ? $this->SqlWhere : "";
		$this->TableFilter = "";
		AddFilter($where, $this->TableFilter);
		return $where;
	}
	public function sqlWhere() // For backward compatibility
	{
		return $this->getSqlWhere();
	}
	public function setSqlWhere($v)
	{
		$this->SqlWhere = $v;
	}
	public function getSqlGroupBy() // Group By
	{
		return ($this->SqlGroupBy != "") ? $this->SqlGroupBy : "";
	}
	public function sqlGroupBy() // For backward compatibility
	{
		return $this->getSqlGroupBy();
	}
	public function setSqlGroupBy($v)
	{
		$this->SqlGroupBy = $v;
	}
	public function getSqlHaving() // Having
	{
		return ($this->SqlHaving != "") ? $this->SqlHaving : "";
	}
	public function sqlHaving() // For backward compatibility
	{
		return $this->getSqlHaving();
	}
	public function setSqlHaving($v)
	{
		$this->SqlHaving = $v;
	}
	public function getSqlOrderBy() // Order By
	{
		return ($this->SqlOrderBy != "") ? $this->SqlOrderBy : "`Periode` ASC";
	}
	public function sqlOrderBy() // For backward compatibility
	{
		return $this->getSqlOrderBy();
	}
	public function setSqlOrderBy($v)
	{
		$this->SqlOrderBy = $v;
	}

	// Apply User ID filters
	public function applyUserIDFilters($filter)
	{
		return $filter;
	}

	// Check if User ID security allows view all
	public function userIDAllow($id = "")
	{
		$allow = Config("USER_ID_ALLOW");
		switch ($id) {
			case "add":
			case "copy":
			case "gridadd":
			case "register":
			case "addopt":
				return (($allow & 1) == 1);
			case "edit":
			case "gridedit":
			case "update":
			case "changepwd":
			case "forgotpwd":
				return (($allow & 4) == 4);
			case "delete":
				return (($allow & 2) == 2);
			case "view":
				return (($allow & 32) == 32);
			case "search":
				return (($allow & 64) == 64);
			default:
				return (($allow & 8) == 8);
		}
	}

	// Get recordset
	public function getRecordset($sql, $rowcnt = -1, $offset = -1)
	{
		$conn = $this->getConnection();
		$conn->raiseErrorFn = Config("ERROR_FUNC");
		$rs = $conn->selectLimit($sql, $rowcnt, $offset);
		$conn->raiseErrorFn = "";
		return $rs;
	}

	// Get record count
	public function getRecordCount($sql, $c = NULL)
	{
		$cnt = -1;
		$rs = NULL;
		$sql = preg_replace('/\/\*BeginOrderBy\*\/[\s\S]+\/\*EndOrderBy\*\//', "", $sql); // Remove ORDER BY clause (MSSQL)
		$pattern = '/^SELECT\s([\s\S]+)\sFROM\s/i';

		// Skip Custom View / SubQuery / SELECT DISTINCT / ORDER BY
		if (($this->TableType == 'TABLE' || $this->TableType == 'VIEW' || $this->TableType == 'LINKTABLE') &&
			preg_match($pattern, $sql) && !preg_match('/\(\s*(SELECT[^)]+)\)/i', $sql) &&
			!preg_match('/^\s*select\s+distinct\s+/i', $sql) && !preg_match('/\s+order\s+by\s+/i', $sql)) {
			$sqlwrk = "SELECT COUNT(*) FROM " . preg_replace($pattern, "", $sql);
		} else {
			$sqlwrk = "SELECT COUNT(*) FROM (" . $sql . ") COUNT_TABLE";
		}
		$conn = $c ?: $this->getConnection();
		if ($rs = $conn->execute($sqlwrk)) {
			if (!$rs->EOF && $rs->FieldCount() > 0) {
				$cnt = $rs->fields[0];
				$rs->close();
			}
			return (int)$cnt;
		}

		// Unable to get count, get record count directly
		if ($rs = $conn->execute($sql)) {
			$cnt = $rs->RecordCount();
			$rs->close();
			return (int)$cnt;
		}
		return $cnt;
	}

	// Return page URL
	public function getReturnUrl()
	{
		$name = PROJECT_NAME . "_" . $this->TableVar . "_" . Config("TABLE_RETURN_URL");

		// Get referer URL automatically
		if (ServerVar("HTTP_REFERER") != "" && ReferPageName() != CurrentPageName() && ReferPageName() != "login.php") // Referer not same page or login page
			$_SESSION[$name] = ServerVar("HTTP_REFERER"); // Save to Session
		if (@$_SESSION[$name] != "") {
			return $_SESSION[$name];
		} else {
			return "";
		}
	}
	public function setReturnUrl($v)
	{
		$_SESSION[PROJECT_NAME . "_" . $this->TableVar . "_" . Config("TABLE_RETURN_URL")] = $v;
	}

	// Get modal caption
	public function getModalCaption($pageName)
	{
		global $Language;
		if ($pageName == "")
			return $Language->phrase("View");
		elseif ($pageName == "")
			return $Language->phrase("Edit");
		elseif ($pageName == "")
			return $Language->phrase("Add");
		else
			return "";
	}

	// List URL
	public function getListUrl()
	{
		return "";
	}

	// View URL
	public function getViewUrl($parm = "")
	{
		if ($parm != "")
			$url = $this->keyUrl("", $this->getUrlParm($parm));
		else
			$url = $this->keyUrl("", $this->getUrlParm(Config("TABLE_SHOW_DETAIL") . "="));
		return $this->addMasterUrl($url);
	}

	// Add URL
	public function getAddUrl($parm = "")
	{
		if ($parm != "")
			$url = "?" . $this->getUrlParm($parm);
		else
			$url = "";
		return $this->addMasterUrl($url);
	}

	// Edit URL
	public function getEditUrl($parm = "")
	{
		$url = $this->keyUrl("", $this->getUrlParm($parm));
		return $this->addMasterUrl($url);
	}

	// Inline edit URL
	public function getInlineEditUrl()
	{
		$url = $this->keyUrl(CurrentPageName(), $this->getUrlParm("action=edit"));
		return $this->addMasterUrl($url);
	}

	// Copy URL
	public function getCopyUrl($parm = "")
	{
		$url = $this->keyUrl("", $this->getUrlParm($parm));
		return $this->addMasterUrl($url);
	}

	// Inline copy URL
	public function getInlineCopyUrl()
	{
		$url = $this->keyUrl(CurrentPageName(), $this->getUrlParm("action=copy"));
		return $this->addMasterUrl($url);
	}

	// Delete URL
	public function getDeleteUrl()
	{
		return $this->keyUrl("", $this->getUrlParm());
	}

	// Add master url
	public function addMasterUrl($url)
	{
		return $url;
	}
	public function keyToJson($htmlEncode = FALSE)
	{
		$json = "";
		$json .= "dk_id:" . JsonEncode($this->dk_id->CurrentValue, "number");
		$json = "{" . $json . "}";
		if ($htmlEncode)
			$json = HtmlEncode($json);
		return $json;
	}

	// Add key value to URL
	public function keyUrl($url, $parm = "")
	{
		$url = $url . "?";
		if ($parm != "")
			$url .= $parm . "&";
		if ($this->dk_id->CurrentValue != NULL) {
			$url .= "dk_id=" . urlencode($this->dk_id->CurrentValue);
		} else {
			return "javascript:ew.alert(ew.language.phrase('InvalidRecord'));";
		}
		return $url;
	}

	// Sort URL
	public function sortUrl(&$fld)
	{
		global $DashboardReport;
		if ($this->CurrentAction || $this->isExport() ||
			$this->DrillDown || $DashboardReport ||
			in_array($fld->Type, [128, 204, 205])) { // Unsortable data type
				return "";
		} elseif ($fld->Sortable) {
			$urlParm = $this->getUrlParm("order=" . urlencode($fld->Name) . "&amp;ordertype=" . $fld->reverseSort());
			return $this->addMasterUrl(CurrentPageName() . "?" . $urlParm);
		} else {
			return "";
		}
	}

	// Get record keys from Post/Get/Session
	public function getRecordKeys()
	{
		$arKeys = [];
		$arKey = [];
		if (Param("key_m") !== NULL) {
			$arKeys = Param("key_m");
			$cnt = count($arKeys);
		} else {
			if (Param("dk_id") !== NULL)
				$arKeys[] = Param("dk_id");
			elseif (IsApi() && Key(0) !== NULL)
				$arKeys[] = Key(0);
			elseif (IsApi() && Route(2) !== NULL)
				$arKeys[] = Route(2);
			else
				$arKeys = NULL; // Do not setup

			//return $arKeys; // Do not return yet, so the values will also be checked by the following code
		}

		// Check keys
		$ar = [];
		if (is_array($arKeys)) {
			foreach ($arKeys as $key) {
				if (!is_numeric($key))
					continue;
				$ar[] = $key;
			}
		}
		return $ar;
	}

	// Get filter from record keys
	public function getFilterFromRecordKeys($setCurrent = TRUE)
	{
		$arKeys = $this->getRecordKeys();
		$keyFilter = "";
		foreach ($arKeys as $key) {
			if ($keyFilter != "") $keyFilter .= " OR ";
			if ($setCurrent)
				$this->dk_id->CurrentValue = $key;
			else
				$this->dk_id->OldValue = $key;
			$keyFilter .= "(" . $this->getRecordFilter() . ")";
		}
		return $keyFilter;
	}

	// Load rows based on filter
	public function &loadRs($filter)
	{

		// Set up filter (WHERE Clause)
		$sql = $this->getSql($filter);
		$conn = $this->getConnection();
		$rs = $conn->execute($sql);
		return $rs;
	}

	// Get file data
	public function getFileData($fldparm, $key, $resize, $width = 0, $height = 0)
	{

		// No binary fields
		return FALSE;
	}

	// Email Sending event
	function Email_Sending($email, &$args) {

		//var_dump($email); var_dump($args); exit();
		return TRUE;
	}

	// Lookup Selecting event
	function Lookup_Selecting($fld, &$filter) {

		//var_dump($fld->Name, $fld->Lookup, $filter); // Uncomment to view the filter
		// Enter your code here

	}

	// Row Rendering event
	function Row_Rendering() {

		// Enter your code here
		// hilangkan value di PeriodeBulan untuk jenis iuran NON RUTIN

		if (f_check_jenis_iuran($this->iuran_id->CurrentValue) == "Non-Rutin") {
			$this->Periode->CurrentValue = "-";
			$this->PeriodeBulan->CurrentValue = "";
		}
	}

	// Row Rendered event
	function Row_Rendered() {

		// To view properties of field class, use:
		//var_dump($this-><FieldName>);

	}

	// User ID Filtering event
	function UserID_Filtering(&$filter) {

		// Enter your code here
	}
}
?>