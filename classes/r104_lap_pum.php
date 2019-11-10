<?php namespace PHPMaker2020\project1; ?>
<?php

/**
 * Table class for r104_lap_pum
 */
class r104_lap_pum extends ReportTable
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
	public $tahunajaran;
	public $sekolahnama;
	public $kelasnama;
	public $nomorinduk;
	public $siswanama;
	public $iurannama;
	public $periode;
	public $jumlah_total;
	public $iuran_id;

	// Constructor
	public function __construct()
	{
		global $Language, $CurrentLanguage;
		parent::__construct();

		// Language object
		if (!isset($Language))
			$Language = new Language();
		$this->TableVar = 'r104_lap_pum';
		$this->TableName = 'r104_lap_pum';
		$this->TableType = 'REPORT';

		// Update Table
		$this->UpdateTable = "`v109_lap_pum`";
		$this->ReportSourceTable = 'v109_lap_pum'; // Report source table
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

		// tahunajaran
		$this->tahunajaran = new ReportField('r104_lap_pum', 'r104_lap_pum', 'x_tahunajaran', 'tahunajaran', '`tahunajaran`', '`tahunajaran`', 200, 9, -1, FALSE, '`tahunajaran`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->tahunajaran->Sortable = TRUE; // Allow sort
		$this->tahunajaran->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->tahunajaran->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->tahunajaran->Lookup = new Lookup('tahunajaran', 'v109_lap_pum', TRUE, 'tahunajaran', ["tahunajaran","","",""], [], [], [], [], [], [], '', '');
		$this->tahunajaran->AdvancedSearch->SearchValueDefault = INIT_VALUE;
		$this->tahunajaran->SourceTableVar = 'v109_lap_pum';
		$this->fields['tahunajaran'] = &$this->tahunajaran;

		// sekolahnama
		$this->sekolahnama = new ReportField('r104_lap_pum', 'r104_lap_pum', 'x_sekolahnama', 'sekolahnama', '`sekolahnama`', '`sekolahnama`', 200, 50, -1, FALSE, '`sekolahnama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->sekolahnama->Sortable = TRUE; // Allow sort
		$this->sekolahnama->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->sekolahnama->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->sekolahnama->Lookup = new Lookup('sekolahnama', 'v109_lap_pum', TRUE, 'sekolahnama', ["sekolahnama","","",""], [], [], [], [], [], [], '', '');
		$this->sekolahnama->AdvancedSearch->SearchValueDefault = INIT_VALUE;
		$this->sekolahnama->SourceTableVar = 'v109_lap_pum';
		$this->fields['sekolahnama'] = &$this->sekolahnama;

		// kelasnama
		$this->kelasnama = new ReportField('r104_lap_pum', 'r104_lap_pum', 'x_kelasnama', 'kelasnama', '`kelasnama`', '`kelasnama`', 200, 50, -1, FALSE, '`kelasnama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->kelasnama->Sortable = TRUE; // Allow sort
		$this->kelasnama->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->kelasnama->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->kelasnama->Lookup = new Lookup('kelasnama', 'v109_lap_pum', TRUE, 'kelasnama', ["kelasnama","","",""], [], [], [], [], [], [], '', '');
		$this->kelasnama->AdvancedSearch->SearchValueDefault = INIT_VALUE;
		$this->kelasnama->SourceTableVar = 'v109_lap_pum';
		$this->fields['kelasnama'] = &$this->kelasnama;

		// nomorinduk
		$this->nomorinduk = new ReportField('r104_lap_pum', 'r104_lap_pum', 'x_nomorinduk', 'nomorinduk', '`nomorinduk`', '`nomorinduk`', 200, 25, -1, FALSE, '`nomorinduk`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->nomorinduk->Sortable = TRUE; // Allow sort
		$this->nomorinduk->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->nomorinduk->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->nomorinduk->Lookup = new Lookup('nomorinduk', 'v109_lap_pum', TRUE, 'nomorinduk', ["nomorinduk","","",""], [], [], [], [], [], [], '', '');
		$this->nomorinduk->AdvancedSearch->SearchValueDefault = INIT_VALUE;
		$this->nomorinduk->SourceTableVar = 'v109_lap_pum';
		$this->fields['nomorinduk'] = &$this->nomorinduk;

		// siswanama
		$this->siswanama = new ReportField('r104_lap_pum', 'r104_lap_pum', 'x_siswanama', 'siswanama', '`siswanama`', '`siswanama`', 200, 50, -1, FALSE, '`siswanama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->siswanama->Sortable = TRUE; // Allow sort
		$this->siswanama->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->siswanama->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->siswanama->Lookup = new Lookup('siswanama', 'v109_lap_pum', TRUE, 'siswanama', ["siswanama","","",""], [], [], [], [], [], [], '', '');
		$this->siswanama->AdvancedSearch->SearchValueDefault = INIT_VALUE;
		$this->siswanama->SourceTableVar = 'v109_lap_pum';
		$this->fields['siswanama'] = &$this->siswanama;

		// iurannama
		$this->iurannama = new ReportField('r104_lap_pum', 'r104_lap_pum', 'x_iurannama', 'iurannama', '`iurannama`', '`iurannama`', 200, 25, -1, FALSE, '`iurannama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->iurannama->Sortable = TRUE; // Allow sort
		$this->iurannama->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->iurannama->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->iurannama->Lookup = new Lookup('iurannama', 'v109_lap_pum', TRUE, 'iurannama', ["iurannama","","",""], [], [], [], [], [], [], '', '');
		$this->iurannama->AdvancedSearch->SearchValueDefault = INIT_VALUE;
		$this->iurannama->SourceTableVar = 'v109_lap_pum';
		$this->fields['iurannama'] = &$this->iurannama;

		// periode
		$this->periode = new ReportField('r104_lap_pum', 'r104_lap_pum', 'x_periode', 'periode', '`periode`', '`periode`', 3, 2, -1, FALSE, '`periode`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->periode->Nullable = FALSE; // NOT NULL field
		$this->periode->Required = TRUE; // Required field
		$this->periode->Sortable = TRUE; // Allow sort
		$this->periode->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->periode->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->periode->Lookup = new Lookup('periode', 'v109_lap_pum', TRUE, 'periode', ["periode","","",""], [], [], [], [], [], [], '', '');
		$this->periode->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->periode->AdvancedSearch->SearchValueDefault = INIT_VALUE;
		$this->periode->SourceTableVar = 'v109_lap_pum';
		$this->fields['periode'] = &$this->periode;

		// jumlah_total
		$this->jumlah_total = new ReportField('r104_lap_pum', 'r104_lap_pum', 'x_jumlah_total', 'jumlah_total', '`jumlah_total`', '`jumlah_total`', 5, 19, -1, FALSE, '`jumlah_total`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->jumlah_total->Sortable = TRUE; // Allow sort
		$this->jumlah_total->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->jumlah_total->SourceTableVar = 'v109_lap_pum';
		$this->fields['jumlah_total'] = &$this->jumlah_total;

		// iuran_id
		$this->iuran_id = new ReportField('r104_lap_pum', 'r104_lap_pum', 'x_iuran_id', 'iuran_id', '`iuran_id`', '`iuran_id`', 3, 11, -1, FALSE, '`iuran_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->iuran_id->Nullable = FALSE; // NOT NULL field
		$this->iuran_id->Required = TRUE; // Required field
		$this->iuran_id->Sortable = TRUE; // Allow sort
		$this->iuran_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->iuran_id->SourceTableVar = 'v109_lap_pum';
		$this->fields['iuran_id'] = &$this->iuran_id;
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

	// Summary properties
	private $_sqlSelectAggregate = "";
	private $_sqlAggregatePrefix = "";
	private $_sqlAggregateSuffix = "";
	private $_sqlSelectCount = "";

	// Select Aggregate
	public function getSqlSelectAggregate()
	{
		return ($this->_sqlSelectAggregate != "") ? $this->_sqlSelectAggregate : "SELECT SUM(`jumlah_total`) AS `sum_jumlah_total` FROM " . $this->getSqlFrom();
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
		$this->tahunajaran->ViewValue = GetDropDownDisplayValue($this->tahunajaran->CurrentValue, "", 0);
		$this->sekolahnama->ViewValue = GetDropDownDisplayValue($this->sekolahnama->CurrentValue, "", 0);
		$this->kelasnama->ViewValue = GetDropDownDisplayValue($this->kelasnama->CurrentValue, "", 0);
		$this->nomorinduk->ViewValue = GetDropDownDisplayValue($this->nomorinduk->CurrentValue, "", 0);
		$this->siswanama->ViewValue = GetDropDownDisplayValue($this->siswanama->CurrentValue, "", 0);
		$this->iurannama->ViewValue = GetDropDownDisplayValue($this->iurannama->CurrentValue, "", 0);
		$this->periode->ViewValue = GetDropDownDisplayValue($this->periode->CurrentValue, "", 0);
	}

	// Table level SQL
	public function getSqlFrom() // From
	{
		return ($this->SqlFrom != "") ? $this->SqlFrom : "`v109_lap_pum`";
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
		return ($this->SqlOrderBy != "") ? $this->SqlOrderBy : "`kelasnama` ASC,`iurannama` ASC,`periode` ASC";
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

			//return $arKeys; // Do not return yet, so the values will also be checked by the following code
		}

		// Check keys
		$ar = [];
		if (is_array($arKeys)) {
			foreach ($arKeys as $key) {
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