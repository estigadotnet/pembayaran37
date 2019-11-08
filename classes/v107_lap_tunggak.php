<?php namespace PHPMaker2020\project1; ?>
<?php

/**
 * Table class for v107_lap_tunggak
 */
class v107_lap_tunggak extends DbTable
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

	// Export
	public $ExportDoc;

	// Fields
	public $daf_kelas_siswa_id;
	public $iuran_id;
	public $Jumlah;
	public $Periode;
	public $PeriodeBulan;
	public $StatusBayar;
	public $JumlahBayar;
	public $TglBayar;
	public $siswa_id;
	public $NomorInduk;
	public $SiswaNama;
	public $dk_id;
	public $kelas_id;
	public $KelasNama;
	public $sekolah_id;
	public $SekolahNama;
	public $tahun_ajaran_id;
	public $TahunAjaran;
	public $IuranNama;
	public $PeriodeNow;
	public $keterangan;
	public $IuranNama2;

	// Constructor
	public function __construct()
	{
		global $Language, $CurrentLanguage;
		parent::__construct();

		// Language object
		if (!isset($Language))
			$Language = new Language();
		$this->TableVar = 'v107_lap_tunggak';
		$this->TableName = 'v107_lap_tunggak';
		$this->TableType = 'VIEW';

		// Update Table
		$this->UpdateTable = "`v107_lap_tunggak`";
		$this->Dbid = 'DB';
		$this->ExportAll = TRUE;
		$this->ExportPageBreakCount = 0; // Page break per every n record (PDF only)
		$this->ExportPageOrientation = "portrait"; // Page orientation (PDF only)
		$this->ExportPageSize = "a4"; // Page size (PDF only)
		$this->ExportExcelPageOrientation = ""; // Page orientation (PhpSpreadsheet only)
		$this->ExportExcelPageSize = ""; // Page size (PhpSpreadsheet only)
		$this->ExportWordPageOrientation = "portrait"; // Page orientation (PHPWord only)
		$this->ExportWordColumnWidth = NULL; // Cell width (PHPWord only)
		$this->DetailAdd = FALSE; // Allow detail add
		$this->DetailEdit = FALSE; // Allow detail edit
		$this->DetailView = FALSE; // Allow detail view
		$this->ShowMultipleDetails = FALSE; // Show multiple details
		$this->GridAddRowCount = 1;
		$this->AllowAddDeleteRow = TRUE; // Allow add/delete row
		$this->UserIDAllowSecurity = 0; // User ID Allow
		$this->BasicSearch = new BasicSearch($this->TableVar);

		// daf_kelas_siswa_id
		$this->daf_kelas_siswa_id = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_daf_kelas_siswa_id', 'daf_kelas_siswa_id', '`daf_kelas_siswa_id`', '`daf_kelas_siswa_id`', 3, 11, -1, FALSE, '`daf_kelas_siswa_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->daf_kelas_siswa_id->Nullable = FALSE; // NOT NULL field
		$this->daf_kelas_siswa_id->Required = TRUE; // Required field
		$this->daf_kelas_siswa_id->Sortable = TRUE; // Allow sort
		$this->daf_kelas_siswa_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['daf_kelas_siswa_id'] = &$this->daf_kelas_siswa_id;

		// iuran_id
		$this->iuran_id = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_iuran_id', 'iuran_id', '`iuran_id`', '`iuran_id`', 3, 11, -1, FALSE, '`iuran_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->iuran_id->Nullable = FALSE; // NOT NULL field
		$this->iuran_id->Required = TRUE; // Required field
		$this->iuran_id->Sortable = TRUE; // Allow sort
		$this->iuran_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['iuran_id'] = &$this->iuran_id;

		// Jumlah
		$this->Jumlah = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_Jumlah', 'Jumlah', '`Jumlah`', '`Jumlah`', 4, 14, -1, FALSE, '`Jumlah`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->Jumlah->Nullable = FALSE; // NOT NULL field
		$this->Jumlah->Required = TRUE; // Required field
		$this->Jumlah->Sortable = TRUE; // Allow sort
		$this->Jumlah->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['Jumlah'] = &$this->Jumlah;

		// Periode
		$this->Periode = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_Periode', 'Periode', '`Periode`', '`Periode`', 3, 2, -1, FALSE, '`Periode`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->Periode->Nullable = FALSE; // NOT NULL field
		$this->Periode->Required = TRUE; // Required field
		$this->Periode->Sortable = TRUE; // Allow sort
		$this->Periode->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['Periode'] = &$this->Periode;

		// PeriodeBulan
		$this->PeriodeBulan = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_PeriodeBulan', 'PeriodeBulan', '`PeriodeBulan`', '`PeriodeBulan`', 200, 9, -1, FALSE, '`PeriodeBulan`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->PeriodeBulan->Nullable = FALSE; // NOT NULL field
		$this->PeriodeBulan->Required = TRUE; // Required field
		$this->PeriodeBulan->Sortable = TRUE; // Allow sort
		$this->fields['PeriodeBulan'] = &$this->PeriodeBulan;

		// StatusBayar
		$this->StatusBayar = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_StatusBayar', 'StatusBayar', '`StatusBayar`', '`StatusBayar`', 200, 1, -1, FALSE, '`StatusBayar`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->StatusBayar->Nullable = FALSE; // NOT NULL field
		$this->StatusBayar->Required = TRUE; // Required field
		$this->StatusBayar->Sortable = TRUE; // Allow sort
		$this->fields['StatusBayar'] = &$this->StatusBayar;

		// JumlahBayar
		$this->JumlahBayar = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_JumlahBayar', 'JumlahBayar', '`JumlahBayar`', '`JumlahBayar`', 5, 19, -1, FALSE, '`JumlahBayar`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->JumlahBayar->Sortable = TRUE; // Allow sort
		$this->JumlahBayar->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['JumlahBayar'] = &$this->JumlahBayar;

		// TglBayar
		$this->TglBayar = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_TglBayar', 'TglBayar', '`TglBayar`', CastDateFieldForLike("`TglBayar`", 0, "DB"), 133, 10, 0, FALSE, '`TglBayar`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->TglBayar->Sortable = TRUE; // Allow sort
		$this->TglBayar->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_FORMAT"], $Language->phrase("IncorrectDate"));
		$this->fields['TglBayar'] = &$this->TglBayar;

		// siswa_id
		$this->siswa_id = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_siswa_id', 'siswa_id', '`siswa_id`', '`siswa_id`', 3, 11, -1, FALSE, '`siswa_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->siswa_id->Sortable = TRUE; // Allow sort
		$this->siswa_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['siswa_id'] = &$this->siswa_id;

		// NomorInduk
		$this->NomorInduk = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_NomorInduk', 'NomorInduk', '`NomorInduk`', '`NomorInduk`', 200, 25, -1, FALSE, '`NomorInduk`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->NomorInduk->Sortable = TRUE; // Allow sort
		$this->fields['NomorInduk'] = &$this->NomorInduk;

		// SiswaNama
		$this->SiswaNama = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_SiswaNama', 'SiswaNama', '`SiswaNama`', '`SiswaNama`', 200, 50, -1, FALSE, '`SiswaNama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->SiswaNama->Sortable = TRUE; // Allow sort
		$this->fields['SiswaNama'] = &$this->SiswaNama;

		// dk_id
		$this->dk_id = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_dk_id', 'dk_id', '`dk_id`', '`dk_id`', 3, 11, -1, FALSE, '`dk_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'NO');
		$this->dk_id->IsAutoIncrement = TRUE; // Autoincrement field
		$this->dk_id->IsPrimaryKey = TRUE; // Primary key field
		$this->dk_id->Sortable = TRUE; // Allow sort
		$this->dk_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['dk_id'] = &$this->dk_id;

		// kelas_id
		$this->kelas_id = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_kelas_id', 'kelas_id', '`kelas_id`', '`kelas_id`', 3, 11, -1, FALSE, '`kelas_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->kelas_id->Sortable = TRUE; // Allow sort
		$this->kelas_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['kelas_id'] = &$this->kelas_id;

		// KelasNama
		$this->KelasNama = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_KelasNama', 'KelasNama', '`KelasNama`', '`KelasNama`', 200, 50, -1, FALSE, '`KelasNama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->KelasNama->Sortable = TRUE; // Allow sort
		$this->fields['KelasNama'] = &$this->KelasNama;

		// sekolah_id
		$this->sekolah_id = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_sekolah_id', 'sekolah_id', '`sekolah_id`', '`sekolah_id`', 3, 11, -1, FALSE, '`sekolah_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->sekolah_id->Sortable = TRUE; // Allow sort
		$this->sekolah_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['sekolah_id'] = &$this->sekolah_id;

		// SekolahNama
		$this->SekolahNama = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_SekolahNama', 'SekolahNama', '`SekolahNama`', '`SekolahNama`', 200, 50, -1, FALSE, '`SekolahNama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->SekolahNama->Sortable = TRUE; // Allow sort
		$this->fields['SekolahNama'] = &$this->SekolahNama;

		// tahun_ajaran_id
		$this->tahun_ajaran_id = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_tahun_ajaran_id', 'tahun_ajaran_id', '`tahun_ajaran_id`', '`tahun_ajaran_id`', 3, 11, -1, FALSE, '`tahun_ajaran_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tahun_ajaran_id->Sortable = TRUE; // Allow sort
		$this->tahun_ajaran_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['tahun_ajaran_id'] = &$this->tahun_ajaran_id;

		// TahunAjaran
		$this->TahunAjaran = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_TahunAjaran', 'TahunAjaran', '`TahunAjaran`', '`TahunAjaran`', 200, 9, -1, FALSE, '`TahunAjaran`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->TahunAjaran->Sortable = TRUE; // Allow sort
		$this->fields['TahunAjaran'] = &$this->TahunAjaran;

		// IuranNama
		$this->IuranNama = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_IuranNama', 'IuranNama', '`IuranNama`', '`IuranNama`', 200, 25, -1, FALSE, '`IuranNama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->IuranNama->Sortable = TRUE; // Allow sort
		$this->fields['IuranNama'] = &$this->IuranNama;

		// PeriodeNow
		$this->PeriodeNow = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_PeriodeNow', 'PeriodeNow', '`PeriodeNow`', '`PeriodeNow`', 3, 2, -1, FALSE, '`PeriodeNow`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->PeriodeNow->Sortable = TRUE; // Allow sort
		$this->PeriodeNow->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['PeriodeNow'] = &$this->PeriodeNow;

		// keterangan
		$this->keterangan = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_keterangan', 'keterangan', '`keterangan`', '`keterangan`', 200, 193, -1, FALSE, '`keterangan`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->keterangan->Sortable = TRUE; // Allow sort
		$this->fields['keterangan'] = &$this->keterangan;

		// IuranNama2
		$this->IuranNama2 = new DbField('v107_lap_tunggak', 'v107_lap_tunggak', 'x_IuranNama2', 'IuranNama2', '`IuranNama2`', '`IuranNama2`', 200, 39, -1, FALSE, '`IuranNama2`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->IuranNama2->Sortable = TRUE; // Allow sort
		$this->fields['IuranNama2'] = &$this->IuranNama2;
	}

	// Field Visibility
	public function getFieldVisibility($fldParm)
	{
		global $Security;
		return $this->$fldParm->Visible; // Returns original value
	}

	// Set left column class (must be predefined col-*-* classes of Bootstrap grid system)
	function setLeftColumnClass($class)
	{
		if (preg_match('/^col\-(\w+)\-(\d+)$/', $class, $match)) {
			$this->LeftColumnClass = $class . " col-form-label ew-label";
			$this->RightColumnClass = "col-" . $match[1] . "-" . strval(12 - (int)$match[2]);
			$this->OffsetColumnClass = $this->RightColumnClass . " " . str_replace("col-", "offset-", $class);
			$this->TableLeftColumnClass = preg_replace('/^col-\w+-(\d+)$/', "w-col-$1", $class); // Change to w-col-*
		}
	}

	// Multiple column sort
	public function updateSort(&$fld, $ctrl)
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
			if ($ctrl) {
				$orderBy = $this->getSessionOrderBy();
				if (ContainsString($orderBy, $sortField . " " . $lastSort)) {
					$orderBy = str_replace($sortField . " " . $lastSort, $sortField . " " . $thisSort, $orderBy);
				} else {
					if ($orderBy != "")
						$orderBy .= ", ";
					$orderBy .= $sortField . " " . $thisSort;
				}
				$this->setSessionOrderBy($orderBy); // Save to Session
			} else {
				$this->setSessionOrderBy($sortField . " " . $thisSort); // Save to Session
			}
		} else {
			if (!$ctrl)
				$fld->setSort("");
		}
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
		return ($this->SqlSelect != "") ? $this->SqlSelect : "SELECT * FROM " . $this->getSqlFrom();
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
		return ($this->SqlOrderBy != "") ? $this->SqlOrderBy : "";
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

	// Get SQL
	public function getSql($where, $orderBy = "")
	{
		return BuildSelectSql($this->getSqlSelect(), $this->getSqlWhere(),
			$this->getSqlGroupBy(), $this->getSqlHaving(), $this->getSqlOrderBy(),
			$where, $orderBy);
	}

	// Table SQL
	public function getCurrentSql()
	{
		$filter = $this->CurrentFilter;
		$filter = $this->applyUserIDFilters($filter);
		$sort = $this->getSessionOrderBy();
		return $this->getSql($filter, $sort);
	}

	// Table SQL with List page filter
	public function getListSql()
	{
		$filter = $this->UseSessionForListSql ? $this->getSessionWhere() : "";
		AddFilter($filter, $this->CurrentFilter);
		$filter = $this->applyUserIDFilters($filter);
		$this->Recordset_Selecting($filter);
		$select = $this->getSqlSelect();
		$sort = $this->UseSessionForListSql ? $this->getSessionOrderBy() : "";
		return BuildSelectSql($select, $this->getSqlWhere(), $this->getSqlGroupBy(),
			$this->getSqlHaving(), $this->getSqlOrderBy(), $filter, $sort);
	}

	// Get ORDER BY clause
	public function getOrderBy()
	{
		$sort = $this->getSessionOrderBy();
		return BuildSelectSql("", "", "", "", $this->getSqlOrderBy(), "", $sort);
	}

	// Get record count based on filter (for detail record count in master table pages)
	public function loadRecordCount($filter)
	{
		$origFilter = $this->CurrentFilter;
		$this->CurrentFilter = $filter;
		$this->Recordset_Selecting($this->CurrentFilter);
		$select = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlSelect() : "SELECT * FROM " . $this->getSqlFrom();
		$groupBy = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlGroupBy() : "";
		$having = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlHaving() : "";
		$sql = BuildSelectSql($select, $this->getSqlWhere(), $groupBy, $having, "", $this->CurrentFilter, "");
		$cnt = $this->getRecordCount($sql);
		$this->CurrentFilter = $origFilter;
		return $cnt;
	}

	// Get record count (for current List page)
	public function listRecordCount()
	{
		$filter = $this->getSessionWhere();
		AddFilter($filter, $this->CurrentFilter);
		$filter = $this->applyUserIDFilters($filter);
		$this->Recordset_Selecting($filter);
		$select = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlSelect() : "SELECT * FROM " . $this->getSqlFrom();
		$groupBy = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlGroupBy() : "";
		$having = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlHaving() : "";
		$sql = BuildSelectSql($select, $this->getSqlWhere(), $groupBy, $having, "", $filter, "");
		$cnt = $this->getRecordCount($sql);
		return $cnt;
	}

	// INSERT statement
	protected function insertSql(&$rs)
	{
		$names = "";
		$values = "";
		foreach ($rs as $name => $value) {
			if (!isset($this->fields[$name]) || $this->fields[$name]->IsCustom)
				continue;
			$names .= $this->fields[$name]->Expression . ",";
			$values .= QuotedValue($value, $this->fields[$name]->DataType, $this->Dbid) . ",";
		}
		$names = preg_replace('/,+$/', "", $names);
		$values = preg_replace('/,+$/', "", $values);
		return "INSERT INTO " . $this->UpdateTable . " ($names) VALUES ($values)";
	}

	// Insert
	public function insert(&$rs)
	{
		$conn = $this->getConnection();
		$success = $conn->execute($this->insertSql($rs));
		if ($success) {

			// Get insert id if necessary
			$this->dk_id->setDbValue($conn->insert_ID());
			$rs['dk_id'] = $this->dk_id->DbValue;
		}
		return $success;
	}

	// UPDATE statement
	protected function updateSql(&$rs, $where = "", $curfilter = TRUE)
	{
		$sql = "UPDATE " . $this->UpdateTable . " SET ";
		foreach ($rs as $name => $value) {
			if (!isset($this->fields[$name]) || $this->fields[$name]->IsCustom || $this->fields[$name]->IsAutoIncrement)
				continue;
			$sql .= $this->fields[$name]->Expression . "=";
			$sql .= QuotedValue($value, $this->fields[$name]->DataType, $this->Dbid) . ",";
		}
		$sql = preg_replace('/,+$/', "", $sql);
		$filter = ($curfilter) ? $this->CurrentFilter : "";
		if (is_array($where))
			$where = $this->arrayToFilter($where);
		AddFilter($filter, $where);
		if ($filter != "")
			$sql .= " WHERE " . $filter;
		return $sql;
	}

	// Update
	public function update(&$rs, $where = "", $rsold = NULL, $curfilter = TRUE)
	{
		$conn = $this->getConnection();
		$success = $conn->execute($this->updateSql($rs, $where, $curfilter));
		return $success;
	}

	// DELETE statement
	protected function deleteSql(&$rs, $where = "", $curfilter = TRUE)
	{
		$sql = "DELETE FROM " . $this->UpdateTable . " WHERE ";
		if (is_array($where))
			$where = $this->arrayToFilter($where);
		if ($rs) {
			if (array_key_exists('dk_id', $rs))
				AddFilter($where, QuotedName('dk_id', $this->Dbid) . '=' . QuotedValue($rs['dk_id'], $this->dk_id->DataType, $this->Dbid));
		}
		$filter = ($curfilter) ? $this->CurrentFilter : "";
		AddFilter($filter, $where);
		if ($filter != "")
			$sql .= $filter;
		else
			$sql .= "0=1"; // Avoid delete
		return $sql;
	}

	// Delete
	public function delete(&$rs, $where = "", $curfilter = FALSE)
	{
		$success = TRUE;
		$conn = $this->getConnection();
		if ($success)
			$success = $conn->execute($this->deleteSql($rs, $where, $curfilter));
		return $success;
	}

	// Load DbValue from recordset or array
	protected function loadDbValues(&$rs)
	{
		if (!$rs || !is_array($rs) && $rs->EOF)
			return;
		$row = is_array($rs) ? $rs : $rs->fields;
		$this->daf_kelas_siswa_id->DbValue = $row['daf_kelas_siswa_id'];
		$this->iuran_id->DbValue = $row['iuran_id'];
		$this->Jumlah->DbValue = $row['Jumlah'];
		$this->Periode->DbValue = $row['Periode'];
		$this->PeriodeBulan->DbValue = $row['PeriodeBulan'];
		$this->StatusBayar->DbValue = $row['StatusBayar'];
		$this->JumlahBayar->DbValue = $row['JumlahBayar'];
		$this->TglBayar->DbValue = $row['TglBayar'];
		$this->siswa_id->DbValue = $row['siswa_id'];
		$this->NomorInduk->DbValue = $row['NomorInduk'];
		$this->SiswaNama->DbValue = $row['SiswaNama'];
		$this->dk_id->DbValue = $row['dk_id'];
		$this->kelas_id->DbValue = $row['kelas_id'];
		$this->KelasNama->DbValue = $row['KelasNama'];
		$this->sekolah_id->DbValue = $row['sekolah_id'];
		$this->SekolahNama->DbValue = $row['SekolahNama'];
		$this->tahun_ajaran_id->DbValue = $row['tahun_ajaran_id'];
		$this->TahunAjaran->DbValue = $row['TahunAjaran'];
		$this->IuranNama->DbValue = $row['IuranNama'];
		$this->PeriodeNow->DbValue = $row['PeriodeNow'];
		$this->keterangan->DbValue = $row['keterangan'];
		$this->IuranNama2->DbValue = $row['IuranNama2'];
	}

	// Delete uploaded files
	public function deleteUploadedFiles($row)
	{
		$this->loadDbValues($row);
	}

	// Record filter WHERE clause
	protected function sqlKeyFilter()
	{
		return "`dk_id` = @dk_id@";
	}

	// Get record filter
	public function getRecordFilter($row = NULL)
	{
		$keyFilter = $this->sqlKeyFilter();
		if (is_array($row))
			$val = array_key_exists('dk_id', $row) ? $row['dk_id'] : NULL;
		else
			$val = $this->dk_id->OldValue !== NULL ? $this->dk_id->OldValue : $this->dk_id->CurrentValue;
		if (!is_numeric($val))
			return "0=1"; // Invalid key
		if ($val == NULL)
			return "0=1"; // Invalid key
		else
			$keyFilter = str_replace("@dk_id@", AdjustSql($val, $this->Dbid), $keyFilter); // Replace key value
		return $keyFilter;
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
			return "v107_lap_tunggaklist.php";
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
		if ($pageName == "v107_lap_tunggakview.php")
			return $Language->phrase("View");
		elseif ($pageName == "v107_lap_tunggakedit.php")
			return $Language->phrase("Edit");
		elseif ($pageName == "v107_lap_tunggakadd.php")
			return $Language->phrase("Add");
		else
			return "";
	}

	// List URL
	public function getListUrl()
	{
		return "v107_lap_tunggaklist.php";
	}

	// View URL
	public function getViewUrl($parm = "")
	{
		if ($parm != "")
			$url = $this->keyUrl("v107_lap_tunggakview.php", $this->getUrlParm($parm));
		else
			$url = $this->keyUrl("v107_lap_tunggakview.php", $this->getUrlParm(Config("TABLE_SHOW_DETAIL") . "="));
		return $this->addMasterUrl($url);
	}

	// Add URL
	public function getAddUrl($parm = "")
	{
		if ($parm != "")
			$url = "v107_lap_tunggakadd.php?" . $this->getUrlParm($parm);
		else
			$url = "v107_lap_tunggakadd.php";
		return $this->addMasterUrl($url);
	}

	// Edit URL
	public function getEditUrl($parm = "")
	{
		$url = $this->keyUrl("v107_lap_tunggakedit.php", $this->getUrlParm($parm));
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
		$url = $this->keyUrl("v107_lap_tunggakadd.php", $this->getUrlParm($parm));
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
		return $this->keyUrl("v107_lap_tunggakdelete.php", $this->getUrlParm());
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
		if ($this->CurrentAction || $this->isExport() ||
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

	// Load row values from recordset
	public function loadListRowValues(&$rs)
	{
		$this->daf_kelas_siswa_id->setDbValue($rs->fields('daf_kelas_siswa_id'));
		$this->iuran_id->setDbValue($rs->fields('iuran_id'));
		$this->Jumlah->setDbValue($rs->fields('Jumlah'));
		$this->Periode->setDbValue($rs->fields('Periode'));
		$this->PeriodeBulan->setDbValue($rs->fields('PeriodeBulan'));
		$this->StatusBayar->setDbValue($rs->fields('StatusBayar'));
		$this->JumlahBayar->setDbValue($rs->fields('JumlahBayar'));
		$this->TglBayar->setDbValue($rs->fields('TglBayar'));
		$this->siswa_id->setDbValue($rs->fields('siswa_id'));
		$this->NomorInduk->setDbValue($rs->fields('NomorInduk'));
		$this->SiswaNama->setDbValue($rs->fields('SiswaNama'));
		$this->dk_id->setDbValue($rs->fields('dk_id'));
		$this->kelas_id->setDbValue($rs->fields('kelas_id'));
		$this->KelasNama->setDbValue($rs->fields('KelasNama'));
		$this->sekolah_id->setDbValue($rs->fields('sekolah_id'));
		$this->SekolahNama->setDbValue($rs->fields('SekolahNama'));
		$this->tahun_ajaran_id->setDbValue($rs->fields('tahun_ajaran_id'));
		$this->TahunAjaran->setDbValue($rs->fields('TahunAjaran'));
		$this->IuranNama->setDbValue($rs->fields('IuranNama'));
		$this->PeriodeNow->setDbValue($rs->fields('PeriodeNow'));
		$this->keterangan->setDbValue($rs->fields('keterangan'));
		$this->IuranNama2->setDbValue($rs->fields('IuranNama2'));
	}

	// Render list row values
	public function renderListRow()
	{
		global $Security, $CurrentLanguage, $Language;

		// Call Row Rendering event
		$this->Row_Rendering();

		// Common render codes
		// daf_kelas_siswa_id
		// iuran_id
		// Jumlah
		// Periode
		// PeriodeBulan
		// StatusBayar
		// JumlahBayar
		// TglBayar
		// siswa_id
		// NomorInduk
		// SiswaNama
		// dk_id
		// kelas_id
		// KelasNama
		// sekolah_id
		// SekolahNama
		// tahun_ajaran_id
		// TahunAjaran
		// IuranNama
		// PeriodeNow
		// keterangan
		// IuranNama2
		// daf_kelas_siswa_id

		$this->daf_kelas_siswa_id->ViewValue = $this->daf_kelas_siswa_id->CurrentValue;
		$this->daf_kelas_siswa_id->ViewValue = FormatNumber($this->daf_kelas_siswa_id->ViewValue, 0, -2, -2, -2);
		$this->daf_kelas_siswa_id->ViewCustomAttributes = "";

		// iuran_id
		$this->iuran_id->ViewValue = $this->iuran_id->CurrentValue;
		$this->iuran_id->ViewValue = FormatNumber($this->iuran_id->ViewValue, 0, -2, -2, -2);
		$this->iuran_id->ViewCustomAttributes = "";

		// Jumlah
		$this->Jumlah->ViewValue = $this->Jumlah->CurrentValue;
		$this->Jumlah->ViewValue = FormatNumber($this->Jumlah->ViewValue, 2, -2, -2, -2);
		$this->Jumlah->ViewCustomAttributes = "";

		// Periode
		$this->Periode->ViewValue = $this->Periode->CurrentValue;
		$this->Periode->ViewValue = FormatNumber($this->Periode->ViewValue, 0, -2, -2, -2);
		$this->Periode->ViewCustomAttributes = "";

		// PeriodeBulan
		$this->PeriodeBulan->ViewValue = $this->PeriodeBulan->CurrentValue;
		$this->PeriodeBulan->ViewCustomAttributes = "";

		// StatusBayar
		$this->StatusBayar->ViewValue = $this->StatusBayar->CurrentValue;
		$this->StatusBayar->ViewCustomAttributes = "";

		// JumlahBayar
		$this->JumlahBayar->ViewValue = $this->JumlahBayar->CurrentValue;
		$this->JumlahBayar->ViewValue = FormatNumber($this->JumlahBayar->ViewValue, 2, -2, -2, -2);
		$this->JumlahBayar->ViewCustomAttributes = "";

		// TglBayar
		$this->TglBayar->ViewValue = $this->TglBayar->CurrentValue;
		$this->TglBayar->ViewValue = FormatDateTime($this->TglBayar->ViewValue, 0);
		$this->TglBayar->ViewCustomAttributes = "";

		// siswa_id
		$this->siswa_id->ViewValue = $this->siswa_id->CurrentValue;
		$this->siswa_id->ViewValue = FormatNumber($this->siswa_id->ViewValue, 0, -2, -2, -2);
		$this->siswa_id->ViewCustomAttributes = "";

		// NomorInduk
		$this->NomorInduk->ViewValue = $this->NomorInduk->CurrentValue;
		$this->NomorInduk->ViewCustomAttributes = "";

		// SiswaNama
		$this->SiswaNama->ViewValue = $this->SiswaNama->CurrentValue;
		$this->SiswaNama->ViewCustomAttributes = "";

		// dk_id
		$this->dk_id->ViewValue = $this->dk_id->CurrentValue;
		$this->dk_id->ViewCustomAttributes = "";

		// kelas_id
		$this->kelas_id->ViewValue = $this->kelas_id->CurrentValue;
		$this->kelas_id->ViewValue = FormatNumber($this->kelas_id->ViewValue, 0, -2, -2, -2);
		$this->kelas_id->ViewCustomAttributes = "";

		// KelasNama
		$this->KelasNama->ViewValue = $this->KelasNama->CurrentValue;
		$this->KelasNama->ViewCustomAttributes = "";

		// sekolah_id
		$this->sekolah_id->ViewValue = $this->sekolah_id->CurrentValue;
		$this->sekolah_id->ViewValue = FormatNumber($this->sekolah_id->ViewValue, 0, -2, -2, -2);
		$this->sekolah_id->ViewCustomAttributes = "";

		// SekolahNama
		$this->SekolahNama->ViewValue = $this->SekolahNama->CurrentValue;
		$this->SekolahNama->ViewCustomAttributes = "";

		// tahun_ajaran_id
		$this->tahun_ajaran_id->ViewValue = $this->tahun_ajaran_id->CurrentValue;
		$this->tahun_ajaran_id->ViewValue = FormatNumber($this->tahun_ajaran_id->ViewValue, 0, -2, -2, -2);
		$this->tahun_ajaran_id->ViewCustomAttributes = "";

		// TahunAjaran
		$this->TahunAjaran->ViewValue = $this->TahunAjaran->CurrentValue;
		$this->TahunAjaran->ViewCustomAttributes = "";

		// IuranNama
		$this->IuranNama->ViewValue = $this->IuranNama->CurrentValue;
		$this->IuranNama->ViewCustomAttributes = "";

		// PeriodeNow
		$this->PeriodeNow->ViewValue = $this->PeriodeNow->CurrentValue;
		$this->PeriodeNow->ViewValue = FormatNumber($this->PeriodeNow->ViewValue, 0, -2, -2, -2);
		$this->PeriodeNow->ViewCustomAttributes = "";

		// keterangan
		$this->keterangan->ViewValue = $this->keterangan->CurrentValue;
		$this->keterangan->ViewCustomAttributes = "";

		// IuranNama2
		$this->IuranNama2->ViewValue = $this->IuranNama2->CurrentValue;
		$this->IuranNama2->ViewCustomAttributes = "";

		// daf_kelas_siswa_id
		$this->daf_kelas_siswa_id->LinkCustomAttributes = "";
		$this->daf_kelas_siswa_id->HrefValue = "";
		$this->daf_kelas_siswa_id->TooltipValue = "";

		// iuran_id
		$this->iuran_id->LinkCustomAttributes = "";
		$this->iuran_id->HrefValue = "";
		$this->iuran_id->TooltipValue = "";

		// Jumlah
		$this->Jumlah->LinkCustomAttributes = "";
		$this->Jumlah->HrefValue = "";
		$this->Jumlah->TooltipValue = "";

		// Periode
		$this->Periode->LinkCustomAttributes = "";
		$this->Periode->HrefValue = "";
		$this->Periode->TooltipValue = "";

		// PeriodeBulan
		$this->PeriodeBulan->LinkCustomAttributes = "";
		$this->PeriodeBulan->HrefValue = "";
		$this->PeriodeBulan->TooltipValue = "";

		// StatusBayar
		$this->StatusBayar->LinkCustomAttributes = "";
		$this->StatusBayar->HrefValue = "";
		$this->StatusBayar->TooltipValue = "";

		// JumlahBayar
		$this->JumlahBayar->LinkCustomAttributes = "";
		$this->JumlahBayar->HrefValue = "";
		$this->JumlahBayar->TooltipValue = "";

		// TglBayar
		$this->TglBayar->LinkCustomAttributes = "";
		$this->TglBayar->HrefValue = "";
		$this->TglBayar->TooltipValue = "";

		// siswa_id
		$this->siswa_id->LinkCustomAttributes = "";
		$this->siswa_id->HrefValue = "";
		$this->siswa_id->TooltipValue = "";

		// NomorInduk
		$this->NomorInduk->LinkCustomAttributes = "";
		$this->NomorInduk->HrefValue = "";
		$this->NomorInduk->TooltipValue = "";

		// SiswaNama
		$this->SiswaNama->LinkCustomAttributes = "";
		$this->SiswaNama->HrefValue = "";
		$this->SiswaNama->TooltipValue = "";

		// dk_id
		$this->dk_id->LinkCustomAttributes = "";
		$this->dk_id->HrefValue = "";
		$this->dk_id->TooltipValue = "";

		// kelas_id
		$this->kelas_id->LinkCustomAttributes = "";
		$this->kelas_id->HrefValue = "";
		$this->kelas_id->TooltipValue = "";

		// KelasNama
		$this->KelasNama->LinkCustomAttributes = "";
		$this->KelasNama->HrefValue = "";
		$this->KelasNama->TooltipValue = "";

		// sekolah_id
		$this->sekolah_id->LinkCustomAttributes = "";
		$this->sekolah_id->HrefValue = "";
		$this->sekolah_id->TooltipValue = "";

		// SekolahNama
		$this->SekolahNama->LinkCustomAttributes = "";
		$this->SekolahNama->HrefValue = "";
		$this->SekolahNama->TooltipValue = "";

		// tahun_ajaran_id
		$this->tahun_ajaran_id->LinkCustomAttributes = "";
		$this->tahun_ajaran_id->HrefValue = "";
		$this->tahun_ajaran_id->TooltipValue = "";

		// TahunAjaran
		$this->TahunAjaran->LinkCustomAttributes = "";
		$this->TahunAjaran->HrefValue = "";
		$this->TahunAjaran->TooltipValue = "";

		// IuranNama
		$this->IuranNama->LinkCustomAttributes = "";
		$this->IuranNama->HrefValue = "";
		$this->IuranNama->TooltipValue = "";

		// PeriodeNow
		$this->PeriodeNow->LinkCustomAttributes = "";
		$this->PeriodeNow->HrefValue = "";
		$this->PeriodeNow->TooltipValue = "";

		// keterangan
		$this->keterangan->LinkCustomAttributes = "";
		$this->keterangan->HrefValue = "";
		$this->keterangan->TooltipValue = "";

		// IuranNama2
		$this->IuranNama2->LinkCustomAttributes = "";
		$this->IuranNama2->HrefValue = "";
		$this->IuranNama2->TooltipValue = "";

		// Call Row Rendered event
		$this->Row_Rendered();

		// Save data for Custom Template
		$this->Rows[] = $this->customTemplateFieldValues();
	}

	// Render edit row values
	public function renderEditRow()
	{
		global $Security, $CurrentLanguage, $Language;

		// Call Row Rendering event
		$this->Row_Rendering();

		// daf_kelas_siswa_id
		$this->daf_kelas_siswa_id->EditAttrs["class"] = "form-control";
		$this->daf_kelas_siswa_id->EditCustomAttributes = "";
		$this->daf_kelas_siswa_id->EditValue = $this->daf_kelas_siswa_id->CurrentValue;
		$this->daf_kelas_siswa_id->PlaceHolder = RemoveHtml($this->daf_kelas_siswa_id->caption());

		// iuran_id
		$this->iuran_id->EditAttrs["class"] = "form-control";
		$this->iuran_id->EditCustomAttributes = "";
		$this->iuran_id->EditValue = $this->iuran_id->CurrentValue;
		$this->iuran_id->PlaceHolder = RemoveHtml($this->iuran_id->caption());

		// Jumlah
		$this->Jumlah->EditAttrs["class"] = "form-control";
		$this->Jumlah->EditCustomAttributes = "";
		$this->Jumlah->EditValue = $this->Jumlah->CurrentValue;
		$this->Jumlah->PlaceHolder = RemoveHtml($this->Jumlah->caption());
		if (strval($this->Jumlah->EditValue) != "" && is_numeric($this->Jumlah->EditValue))
			$this->Jumlah->EditValue = FormatNumber($this->Jumlah->EditValue, -2, -2, -2, -2);
		

		// Periode
		$this->Periode->EditAttrs["class"] = "form-control";
		$this->Periode->EditCustomAttributes = "";
		$this->Periode->EditValue = $this->Periode->CurrentValue;
		$this->Periode->PlaceHolder = RemoveHtml($this->Periode->caption());

		// PeriodeBulan
		$this->PeriodeBulan->EditAttrs["class"] = "form-control";
		$this->PeriodeBulan->EditCustomAttributes = "";
		if (!$this->PeriodeBulan->Raw)
			$this->PeriodeBulan->CurrentValue = HtmlDecode($this->PeriodeBulan->CurrentValue);
		$this->PeriodeBulan->EditValue = $this->PeriodeBulan->CurrentValue;
		$this->PeriodeBulan->PlaceHolder = RemoveHtml($this->PeriodeBulan->caption());

		// StatusBayar
		$this->StatusBayar->EditAttrs["class"] = "form-control";
		$this->StatusBayar->EditCustomAttributes = "";
		if (!$this->StatusBayar->Raw)
			$this->StatusBayar->CurrentValue = HtmlDecode($this->StatusBayar->CurrentValue);
		$this->StatusBayar->EditValue = $this->StatusBayar->CurrentValue;
		$this->StatusBayar->PlaceHolder = RemoveHtml($this->StatusBayar->caption());

		// JumlahBayar
		$this->JumlahBayar->EditAttrs["class"] = "form-control";
		$this->JumlahBayar->EditCustomAttributes = "";
		$this->JumlahBayar->EditValue = $this->JumlahBayar->CurrentValue;
		$this->JumlahBayar->PlaceHolder = RemoveHtml($this->JumlahBayar->caption());
		if (strval($this->JumlahBayar->EditValue) != "" && is_numeric($this->JumlahBayar->EditValue))
			$this->JumlahBayar->EditValue = FormatNumber($this->JumlahBayar->EditValue, -2, -2, -2, -2);
		

		// TglBayar
		$this->TglBayar->EditAttrs["class"] = "form-control";
		$this->TglBayar->EditCustomAttributes = "";
		$this->TglBayar->EditValue = FormatDateTime($this->TglBayar->CurrentValue, 8);
		$this->TglBayar->PlaceHolder = RemoveHtml($this->TglBayar->caption());

		// siswa_id
		$this->siswa_id->EditAttrs["class"] = "form-control";
		$this->siswa_id->EditCustomAttributes = "";
		$this->siswa_id->EditValue = $this->siswa_id->CurrentValue;
		$this->siswa_id->PlaceHolder = RemoveHtml($this->siswa_id->caption());

		// NomorInduk
		$this->NomorInduk->EditAttrs["class"] = "form-control";
		$this->NomorInduk->EditCustomAttributes = "";
		if (!$this->NomorInduk->Raw)
			$this->NomorInduk->CurrentValue = HtmlDecode($this->NomorInduk->CurrentValue);
		$this->NomorInduk->EditValue = $this->NomorInduk->CurrentValue;
		$this->NomorInduk->PlaceHolder = RemoveHtml($this->NomorInduk->caption());

		// SiswaNama
		$this->SiswaNama->EditAttrs["class"] = "form-control";
		$this->SiswaNama->EditCustomAttributes = "";
		if (!$this->SiswaNama->Raw)
			$this->SiswaNama->CurrentValue = HtmlDecode($this->SiswaNama->CurrentValue);
		$this->SiswaNama->EditValue = $this->SiswaNama->CurrentValue;
		$this->SiswaNama->PlaceHolder = RemoveHtml($this->SiswaNama->caption());

		// dk_id
		$this->dk_id->EditAttrs["class"] = "form-control";
		$this->dk_id->EditCustomAttributes = "";
		$this->dk_id->EditValue = $this->dk_id->CurrentValue;
		$this->dk_id->ViewCustomAttributes = "";

		// kelas_id
		$this->kelas_id->EditAttrs["class"] = "form-control";
		$this->kelas_id->EditCustomAttributes = "";
		$this->kelas_id->EditValue = $this->kelas_id->CurrentValue;
		$this->kelas_id->PlaceHolder = RemoveHtml($this->kelas_id->caption());

		// KelasNama
		$this->KelasNama->EditAttrs["class"] = "form-control";
		$this->KelasNama->EditCustomAttributes = "";
		if (!$this->KelasNama->Raw)
			$this->KelasNama->CurrentValue = HtmlDecode($this->KelasNama->CurrentValue);
		$this->KelasNama->EditValue = $this->KelasNama->CurrentValue;
		$this->KelasNama->PlaceHolder = RemoveHtml($this->KelasNama->caption());

		// sekolah_id
		$this->sekolah_id->EditAttrs["class"] = "form-control";
		$this->sekolah_id->EditCustomAttributes = "";
		$this->sekolah_id->EditValue = $this->sekolah_id->CurrentValue;
		$this->sekolah_id->PlaceHolder = RemoveHtml($this->sekolah_id->caption());

		// SekolahNama
		$this->SekolahNama->EditAttrs["class"] = "form-control";
		$this->SekolahNama->EditCustomAttributes = "";
		if (!$this->SekolahNama->Raw)
			$this->SekolahNama->CurrentValue = HtmlDecode($this->SekolahNama->CurrentValue);
		$this->SekolahNama->EditValue = $this->SekolahNama->CurrentValue;
		$this->SekolahNama->PlaceHolder = RemoveHtml($this->SekolahNama->caption());

		// tahun_ajaran_id
		$this->tahun_ajaran_id->EditAttrs["class"] = "form-control";
		$this->tahun_ajaran_id->EditCustomAttributes = "";
		$this->tahun_ajaran_id->EditValue = $this->tahun_ajaran_id->CurrentValue;
		$this->tahun_ajaran_id->PlaceHolder = RemoveHtml($this->tahun_ajaran_id->caption());

		// TahunAjaran
		$this->TahunAjaran->EditAttrs["class"] = "form-control";
		$this->TahunAjaran->EditCustomAttributes = "";
		if (!$this->TahunAjaran->Raw)
			$this->TahunAjaran->CurrentValue = HtmlDecode($this->TahunAjaran->CurrentValue);
		$this->TahunAjaran->EditValue = $this->TahunAjaran->CurrentValue;
		$this->TahunAjaran->PlaceHolder = RemoveHtml($this->TahunAjaran->caption());

		// IuranNama
		$this->IuranNama->EditAttrs["class"] = "form-control";
		$this->IuranNama->EditCustomAttributes = "";
		if (!$this->IuranNama->Raw)
			$this->IuranNama->CurrentValue = HtmlDecode($this->IuranNama->CurrentValue);
		$this->IuranNama->EditValue = $this->IuranNama->CurrentValue;
		$this->IuranNama->PlaceHolder = RemoveHtml($this->IuranNama->caption());

		// PeriodeNow
		$this->PeriodeNow->EditAttrs["class"] = "form-control";
		$this->PeriodeNow->EditCustomAttributes = "";
		$this->PeriodeNow->EditValue = $this->PeriodeNow->CurrentValue;
		$this->PeriodeNow->PlaceHolder = RemoveHtml($this->PeriodeNow->caption());

		// keterangan
		$this->keterangan->EditAttrs["class"] = "form-control";
		$this->keterangan->EditCustomAttributes = "";
		if (!$this->keterangan->Raw)
			$this->keterangan->CurrentValue = HtmlDecode($this->keterangan->CurrentValue);
		$this->keterangan->EditValue = $this->keterangan->CurrentValue;
		$this->keterangan->PlaceHolder = RemoveHtml($this->keterangan->caption());

		// IuranNama2
		$this->IuranNama2->EditAttrs["class"] = "form-control";
		$this->IuranNama2->EditCustomAttributes = "";
		if (!$this->IuranNama2->Raw)
			$this->IuranNama2->CurrentValue = HtmlDecode($this->IuranNama2->CurrentValue);
		$this->IuranNama2->EditValue = $this->IuranNama2->CurrentValue;
		$this->IuranNama2->PlaceHolder = RemoveHtml($this->IuranNama2->caption());

		// Call Row Rendered event
		$this->Row_Rendered();
	}

	// Aggregate list row values
	public function aggregateListRowValues()
	{
	}

	// Aggregate list row (for rendering)
	public function aggregateListRow()
	{

		// Call Row Rendered event
		$this->Row_Rendered();
	}

	// Export data in HTML/CSV/Word/Excel/Email/PDF format
	public function exportDocument($doc, $recordset, $startRec = 1, $stopRec = 1, $exportPageType = "")
	{
		if (!$recordset || !$doc)
			return;
		if (!$doc->ExportCustom) {

			// Write header
			$doc->exportTableHeader();
			if ($doc->Horizontal) { // Horizontal format, write header
				$doc->beginExportRow();
				if ($exportPageType == "view") {
					$doc->exportCaption($this->daf_kelas_siswa_id);
					$doc->exportCaption($this->iuran_id);
					$doc->exportCaption($this->Jumlah);
					$doc->exportCaption($this->Periode);
					$doc->exportCaption($this->PeriodeBulan);
					$doc->exportCaption($this->StatusBayar);
					$doc->exportCaption($this->JumlahBayar);
					$doc->exportCaption($this->TglBayar);
					$doc->exportCaption($this->siswa_id);
					$doc->exportCaption($this->NomorInduk);
					$doc->exportCaption($this->SiswaNama);
					$doc->exportCaption($this->dk_id);
					$doc->exportCaption($this->kelas_id);
					$doc->exportCaption($this->KelasNama);
					$doc->exportCaption($this->sekolah_id);
					$doc->exportCaption($this->SekolahNama);
					$doc->exportCaption($this->tahun_ajaran_id);
					$doc->exportCaption($this->TahunAjaran);
					$doc->exportCaption($this->IuranNama);
					$doc->exportCaption($this->PeriodeNow);
					$doc->exportCaption($this->keterangan);
					$doc->exportCaption($this->IuranNama2);
				} else {
					$doc->exportCaption($this->daf_kelas_siswa_id);
					$doc->exportCaption($this->iuran_id);
					$doc->exportCaption($this->Jumlah);
					$doc->exportCaption($this->Periode);
					$doc->exportCaption($this->PeriodeBulan);
					$doc->exportCaption($this->StatusBayar);
					$doc->exportCaption($this->JumlahBayar);
					$doc->exportCaption($this->TglBayar);
					$doc->exportCaption($this->siswa_id);
					$doc->exportCaption($this->NomorInduk);
					$doc->exportCaption($this->SiswaNama);
					$doc->exportCaption($this->dk_id);
					$doc->exportCaption($this->kelas_id);
					$doc->exportCaption($this->KelasNama);
					$doc->exportCaption($this->sekolah_id);
					$doc->exportCaption($this->SekolahNama);
					$doc->exportCaption($this->tahun_ajaran_id);
					$doc->exportCaption($this->TahunAjaran);
					$doc->exportCaption($this->IuranNama);
					$doc->exportCaption($this->PeriodeNow);
					$doc->exportCaption($this->keterangan);
					$doc->exportCaption($this->IuranNama2);
				}
				$doc->endExportRow();
			}
		}

		// Move to first record
		$recCnt = $startRec - 1;
		if (!$recordset->EOF) {
			$recordset->moveFirst();
			if ($startRec > 1)
				$recordset->move($startRec - 1);
		}
		while (!$recordset->EOF && $recCnt < $stopRec) {
			$recCnt++;
			if ($recCnt >= $startRec) {
				$rowCnt = $recCnt - $startRec + 1;

				// Page break
				if ($this->ExportPageBreakCount > 0) {
					if ($rowCnt > 1 && ($rowCnt - 1) % $this->ExportPageBreakCount == 0)
						$doc->exportPageBreak();
				}
				$this->loadListRowValues($recordset);

				// Render row
				$this->RowType = ROWTYPE_VIEW; // Render view
				$this->resetAttributes();
				$this->renderListRow();
				if (!$doc->ExportCustom) {
					$doc->beginExportRow($rowCnt); // Allow CSS styles if enabled
					if ($exportPageType == "view") {
						$doc->exportField($this->daf_kelas_siswa_id);
						$doc->exportField($this->iuran_id);
						$doc->exportField($this->Jumlah);
						$doc->exportField($this->Periode);
						$doc->exportField($this->PeriodeBulan);
						$doc->exportField($this->StatusBayar);
						$doc->exportField($this->JumlahBayar);
						$doc->exportField($this->TglBayar);
						$doc->exportField($this->siswa_id);
						$doc->exportField($this->NomorInduk);
						$doc->exportField($this->SiswaNama);
						$doc->exportField($this->dk_id);
						$doc->exportField($this->kelas_id);
						$doc->exportField($this->KelasNama);
						$doc->exportField($this->sekolah_id);
						$doc->exportField($this->SekolahNama);
						$doc->exportField($this->tahun_ajaran_id);
						$doc->exportField($this->TahunAjaran);
						$doc->exportField($this->IuranNama);
						$doc->exportField($this->PeriodeNow);
						$doc->exportField($this->keterangan);
						$doc->exportField($this->IuranNama2);
					} else {
						$doc->exportField($this->daf_kelas_siswa_id);
						$doc->exportField($this->iuran_id);
						$doc->exportField($this->Jumlah);
						$doc->exportField($this->Periode);
						$doc->exportField($this->PeriodeBulan);
						$doc->exportField($this->StatusBayar);
						$doc->exportField($this->JumlahBayar);
						$doc->exportField($this->TglBayar);
						$doc->exportField($this->siswa_id);
						$doc->exportField($this->NomorInduk);
						$doc->exportField($this->SiswaNama);
						$doc->exportField($this->dk_id);
						$doc->exportField($this->kelas_id);
						$doc->exportField($this->KelasNama);
						$doc->exportField($this->sekolah_id);
						$doc->exportField($this->SekolahNama);
						$doc->exportField($this->tahun_ajaran_id);
						$doc->exportField($this->TahunAjaran);
						$doc->exportField($this->IuranNama);
						$doc->exportField($this->PeriodeNow);
						$doc->exportField($this->keterangan);
						$doc->exportField($this->IuranNama2);
					}
					$doc->endExportRow($rowCnt);
				}
			}

			// Call Row Export server event
			if ($doc->ExportCustom)
				$this->Row_Export($recordset->fields);
			$recordset->moveNext();
		}
		if (!$doc->ExportCustom) {
			$doc->exportTableFooter();
		}
	}

	// Get file data
	public function getFileData($fldparm, $key, $resize, $width = 0, $height = 0)
	{

		// No binary fields
		return FALSE;
	}

	// Table level events
	// Recordset Selecting event
	function Recordset_Selecting(&$filter) {

		// Enter your code here
	}

	// Recordset Selected event
	function Recordset_Selected(&$rs) {

		//echo "Recordset Selected";
	}

	// Recordset Search Validated event
	function Recordset_SearchValidated() {

		// Example:
		//$this->MyField1->AdvancedSearch->SearchValue = "your search criteria"; // Search value

	}

	// Recordset Searching event
	function Recordset_Searching(&$filter) {

		// Enter your code here
	}

	// Row_Selecting event
	function Row_Selecting(&$filter) {

		// Enter your code here
	}

	// Row Selected event
	function Row_Selected(&$rs) {

		//echo "Row Selected";
	}

	// Row Inserting event
	function Row_Inserting($rsold, &$rsnew) {

		// Enter your code here
		// To cancel, set return value to FALSE

		return TRUE;
	}

	// Row Inserted event
	function Row_Inserted($rsold, &$rsnew) {

		//echo "Row Inserted"
	}

	// Row Updating event
	function Row_Updating($rsold, &$rsnew) {

		// Enter your code here
		// To cancel, set return value to FALSE

		return TRUE;
	}

	// Row Updated event
	function Row_Updated($rsold, &$rsnew) {

		//echo "Row Updated";
	}

	// Row Update Conflict event
	function Row_UpdateConflict($rsold, &$rsnew) {

		// Enter your code here
		// To ignore conflict, set return value to FALSE

		return TRUE;
	}

	// Grid Inserting event
	function Grid_Inserting() {

		// Enter your code here
		// To reject grid insert, set return value to FALSE

		return TRUE;
	}

	// Grid Inserted event
	function Grid_Inserted($rsnew) {

		//echo "Grid Inserted";
	}

	// Grid Updating event
	function Grid_Updating($rsold) {

		// Enter your code here
		// To reject grid update, set return value to FALSE

		return TRUE;
	}

	// Grid Updated event
	function Grid_Updated($rsold, $rsnew) {

		//echo "Grid Updated";
	}

	// Row Deleting event
	function Row_Deleting(&$rs) {

		// Enter your code here
		// To cancel, set return value to False

		return TRUE;
	}

	// Row Deleted event
	function Row_Deleted(&$rs) {

		//echo "Row Deleted";
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