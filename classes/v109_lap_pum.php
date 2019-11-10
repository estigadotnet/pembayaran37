<?php namespace PHPMaker2020\project1; ?>
<?php

/**
 * Table class for v109_lap_pum
 */
class v109_lap_pum extends DbTable
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
	public $tahunajaran;
	public $sekolahnama;
	public $kelasnama;
	public $iuran_id;
	public $iurannama;
	public $nomorinduk;
	public $siswanama;
	public $periode;
	public $jumlah_total;

	// Constructor
	public function __construct()
	{
		global $Language, $CurrentLanguage;
		parent::__construct();

		// Language object
		if (!isset($Language))
			$Language = new Language();
		$this->TableVar = 'v109_lap_pum';
		$this->TableName = 'v109_lap_pum';
		$this->TableType = 'VIEW';

		// Update Table
		$this->UpdateTable = "`v109_lap_pum`";
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

		// tahunajaran
		$this->tahunajaran = new DbField('v109_lap_pum', 'v109_lap_pum', 'x_tahunajaran', 'tahunajaran', '`tahunajaran`', '`tahunajaran`', 200, 9, -1, FALSE, '`tahunajaran`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tahunajaran->Sortable = TRUE; // Allow sort
		$this->fields['tahunajaran'] = &$this->tahunajaran;

		// sekolahnama
		$this->sekolahnama = new DbField('v109_lap_pum', 'v109_lap_pum', 'x_sekolahnama', 'sekolahnama', '`sekolahnama`', '`sekolahnama`', 200, 50, -1, FALSE, '`sekolahnama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->sekolahnama->Sortable = TRUE; // Allow sort
		$this->fields['sekolahnama'] = &$this->sekolahnama;

		// kelasnama
		$this->kelasnama = new DbField('v109_lap_pum', 'v109_lap_pum', 'x_kelasnama', 'kelasnama', '`kelasnama`', '`kelasnama`', 200, 50, -1, FALSE, '`kelasnama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->kelasnama->Sortable = TRUE; // Allow sort
		$this->fields['kelasnama'] = &$this->kelasnama;

		// iuran_id
		$this->iuran_id = new DbField('v109_lap_pum', 'v109_lap_pum', 'x_iuran_id', 'iuran_id', '`iuran_id`', '`iuran_id`', 3, 11, -1, FALSE, '`iuran_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->iuran_id->Nullable = FALSE; // NOT NULL field
		$this->iuran_id->Required = TRUE; // Required field
		$this->iuran_id->Sortable = TRUE; // Allow sort
		$this->iuran_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['iuran_id'] = &$this->iuran_id;

		// iurannama
		$this->iurannama = new DbField('v109_lap_pum', 'v109_lap_pum', 'x_iurannama', 'iurannama', '`iurannama`', '`iurannama`', 200, 25, -1, FALSE, '`iurannama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->iurannama->Sortable = TRUE; // Allow sort
		$this->fields['iurannama'] = &$this->iurannama;

		// nomorinduk
		$this->nomorinduk = new DbField('v109_lap_pum', 'v109_lap_pum', 'x_nomorinduk', 'nomorinduk', '`nomorinduk`', '`nomorinduk`', 200, 25, -1, FALSE, '`nomorinduk`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->nomorinduk->Sortable = TRUE; // Allow sort
		$this->fields['nomorinduk'] = &$this->nomorinduk;

		// siswanama
		$this->siswanama = new DbField('v109_lap_pum', 'v109_lap_pum', 'x_siswanama', 'siswanama', '`siswanama`', '`siswanama`', 200, 50, -1, FALSE, '`siswanama`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->siswanama->Sortable = TRUE; // Allow sort
		$this->fields['siswanama'] = &$this->siswanama;

		// periode
		$this->periode = new DbField('v109_lap_pum', 'v109_lap_pum', 'x_periode', 'periode', '`periode`', '`periode`', 3, 2, -1, FALSE, '`periode`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->periode->Nullable = FALSE; // NOT NULL field
		$this->periode->Required = TRUE; // Required field
		$this->periode->Sortable = TRUE; // Allow sort
		$this->periode->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['periode'] = &$this->periode;

		// jumlah_total
		$this->jumlah_total = new DbField('v109_lap_pum', 'v109_lap_pum', 'x_jumlah_total', 'jumlah_total', '`jumlah_total`', '`jumlah_total`', 5, 19, -1, FALSE, '`jumlah_total`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->jumlah_total->Sortable = TRUE; // Allow sort
		$this->jumlah_total->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['jumlah_total'] = &$this->jumlah_total;
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
		$this->tahunajaran->DbValue = $row['tahunajaran'];
		$this->sekolahnama->DbValue = $row['sekolahnama'];
		$this->kelasnama->DbValue = $row['kelasnama'];
		$this->iuran_id->DbValue = $row['iuran_id'];
		$this->iurannama->DbValue = $row['iurannama'];
		$this->nomorinduk->DbValue = $row['nomorinduk'];
		$this->siswanama->DbValue = $row['siswanama'];
		$this->periode->DbValue = $row['periode'];
		$this->jumlah_total->DbValue = $row['jumlah_total'];
	}

	// Delete uploaded files
	public function deleteUploadedFiles($row)
	{
		$this->loadDbValues($row);
	}

	// Record filter WHERE clause
	protected function sqlKeyFilter()
	{
		return "";
	}

	// Get record filter
	public function getRecordFilter($row = NULL)
	{
		$keyFilter = $this->sqlKeyFilter();
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
			return "v109_lap_pumlist.php";
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
		if ($pageName == "v109_lap_pumview.php")
			return $Language->phrase("View");
		elseif ($pageName == "v109_lap_pumedit.php")
			return $Language->phrase("Edit");
		elseif ($pageName == "v109_lap_pumadd.php")
			return $Language->phrase("Add");
		else
			return "";
	}

	// List URL
	public function getListUrl()
	{
		return "v109_lap_pumlist.php";
	}

	// View URL
	public function getViewUrl($parm = "")
	{
		if ($parm != "")
			$url = $this->keyUrl("v109_lap_pumview.php", $this->getUrlParm($parm));
		else
			$url = $this->keyUrl("v109_lap_pumview.php", $this->getUrlParm(Config("TABLE_SHOW_DETAIL") . "="));
		return $this->addMasterUrl($url);
	}

	// Add URL
	public function getAddUrl($parm = "")
	{
		if ($parm != "")
			$url = "v109_lap_pumadd.php?" . $this->getUrlParm($parm);
		else
			$url = "v109_lap_pumadd.php";
		return $this->addMasterUrl($url);
	}

	// Edit URL
	public function getEditUrl($parm = "")
	{
		$url = $this->keyUrl("v109_lap_pumedit.php", $this->getUrlParm($parm));
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
		$url = $this->keyUrl("v109_lap_pumadd.php", $this->getUrlParm($parm));
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
		return $this->keyUrl("v109_lap_pumdelete.php", $this->getUrlParm());
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

	// Load row values from recordset
	public function loadListRowValues(&$rs)
	{
		$this->tahunajaran->setDbValue($rs->fields('tahunajaran'));
		$this->sekolahnama->setDbValue($rs->fields('sekolahnama'));
		$this->kelasnama->setDbValue($rs->fields('kelasnama'));
		$this->iuran_id->setDbValue($rs->fields('iuran_id'));
		$this->iurannama->setDbValue($rs->fields('iurannama'));
		$this->nomorinduk->setDbValue($rs->fields('nomorinduk'));
		$this->siswanama->setDbValue($rs->fields('siswanama'));
		$this->periode->setDbValue($rs->fields('periode'));
		$this->jumlah_total->setDbValue($rs->fields('jumlah_total'));
	}

	// Render list row values
	public function renderListRow()
	{
		global $Security, $CurrentLanguage, $Language;

		// Call Row Rendering event
		$this->Row_Rendering();

		// Common render codes
		// tahunajaran
		// sekolahnama
		// kelasnama
		// iuran_id
		// iurannama
		// nomorinduk
		// siswanama
		// periode
		// jumlah_total
		// tahunajaran

		$this->tahunajaran->ViewValue = $this->tahunajaran->CurrentValue;
		$this->tahunajaran->ViewCustomAttributes = "";

		// sekolahnama
		$this->sekolahnama->ViewValue = $this->sekolahnama->CurrentValue;
		$this->sekolahnama->ViewCustomAttributes = "";

		// kelasnama
		$this->kelasnama->ViewValue = $this->kelasnama->CurrentValue;
		$this->kelasnama->ViewCustomAttributes = "";

		// iuran_id
		$this->iuran_id->ViewValue = $this->iuran_id->CurrentValue;
		$this->iuran_id->ViewValue = FormatNumber($this->iuran_id->ViewValue, 0, -2, -2, -2);
		$this->iuran_id->ViewCustomAttributes = "";

		// iurannama
		$this->iurannama->ViewValue = $this->iurannama->CurrentValue;
		$this->iurannama->ViewCustomAttributes = "";

		// nomorinduk
		$this->nomorinduk->ViewValue = $this->nomorinduk->CurrentValue;
		$this->nomorinduk->ViewCustomAttributes = "";

		// siswanama
		$this->siswanama->ViewValue = $this->siswanama->CurrentValue;
		$this->siswanama->ViewCustomAttributes = "";

		// periode
		$this->periode->ViewValue = $this->periode->CurrentValue;
		$this->periode->ViewValue = FormatNumber($this->periode->ViewValue, 0, -2, -2, -2);
		$this->periode->ViewCustomAttributes = "";

		// jumlah_total
		$this->jumlah_total->ViewValue = $this->jumlah_total->CurrentValue;
		$this->jumlah_total->ViewValue = FormatNumber($this->jumlah_total->ViewValue, 2, -2, -2, -2);
		$this->jumlah_total->ViewCustomAttributes = "";

		// tahunajaran
		$this->tahunajaran->LinkCustomAttributes = "";
		$this->tahunajaran->HrefValue = "";
		$this->tahunajaran->TooltipValue = "";

		// sekolahnama
		$this->sekolahnama->LinkCustomAttributes = "";
		$this->sekolahnama->HrefValue = "";
		$this->sekolahnama->TooltipValue = "";

		// kelasnama
		$this->kelasnama->LinkCustomAttributes = "";
		$this->kelasnama->HrefValue = "";
		$this->kelasnama->TooltipValue = "";

		// iuran_id
		$this->iuran_id->LinkCustomAttributes = "";
		$this->iuran_id->HrefValue = "";
		$this->iuran_id->TooltipValue = "";

		// iurannama
		$this->iurannama->LinkCustomAttributes = "";
		$this->iurannama->HrefValue = "";
		$this->iurannama->TooltipValue = "";

		// nomorinduk
		$this->nomorinduk->LinkCustomAttributes = "";
		$this->nomorinduk->HrefValue = "";
		$this->nomorinduk->TooltipValue = "";

		// siswanama
		$this->siswanama->LinkCustomAttributes = "";
		$this->siswanama->HrefValue = "";
		$this->siswanama->TooltipValue = "";

		// periode
		$this->periode->LinkCustomAttributes = "";
		$this->periode->HrefValue = "";
		$this->periode->TooltipValue = "";

		// jumlah_total
		$this->jumlah_total->LinkCustomAttributes = "";
		$this->jumlah_total->HrefValue = "";
		$this->jumlah_total->TooltipValue = "";

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

		// tahunajaran
		$this->tahunajaran->EditAttrs["class"] = "form-control";
		$this->tahunajaran->EditCustomAttributes = "";
		if (!$this->tahunajaran->Raw)
			$this->tahunajaran->CurrentValue = HtmlDecode($this->tahunajaran->CurrentValue);
		$this->tahunajaran->EditValue = $this->tahunajaran->CurrentValue;
		$this->tahunajaran->PlaceHolder = RemoveHtml($this->tahunajaran->caption());

		// sekolahnama
		$this->sekolahnama->EditAttrs["class"] = "form-control";
		$this->sekolahnama->EditCustomAttributes = "";
		if (!$this->sekolahnama->Raw)
			$this->sekolahnama->CurrentValue = HtmlDecode($this->sekolahnama->CurrentValue);
		$this->sekolahnama->EditValue = $this->sekolahnama->CurrentValue;
		$this->sekolahnama->PlaceHolder = RemoveHtml($this->sekolahnama->caption());

		// kelasnama
		$this->kelasnama->EditAttrs["class"] = "form-control";
		$this->kelasnama->EditCustomAttributes = "";
		if (!$this->kelasnama->Raw)
			$this->kelasnama->CurrentValue = HtmlDecode($this->kelasnama->CurrentValue);
		$this->kelasnama->EditValue = $this->kelasnama->CurrentValue;
		$this->kelasnama->PlaceHolder = RemoveHtml($this->kelasnama->caption());

		// iuran_id
		$this->iuran_id->EditAttrs["class"] = "form-control";
		$this->iuran_id->EditCustomAttributes = "";
		$this->iuran_id->EditValue = $this->iuran_id->CurrentValue;
		$this->iuran_id->PlaceHolder = RemoveHtml($this->iuran_id->caption());

		// iurannama
		$this->iurannama->EditAttrs["class"] = "form-control";
		$this->iurannama->EditCustomAttributes = "";
		if (!$this->iurannama->Raw)
			$this->iurannama->CurrentValue = HtmlDecode($this->iurannama->CurrentValue);
		$this->iurannama->EditValue = $this->iurannama->CurrentValue;
		$this->iurannama->PlaceHolder = RemoveHtml($this->iurannama->caption());

		// nomorinduk
		$this->nomorinduk->EditAttrs["class"] = "form-control";
		$this->nomorinduk->EditCustomAttributes = "";
		if (!$this->nomorinduk->Raw)
			$this->nomorinduk->CurrentValue = HtmlDecode($this->nomorinduk->CurrentValue);
		$this->nomorinduk->EditValue = $this->nomorinduk->CurrentValue;
		$this->nomorinduk->PlaceHolder = RemoveHtml($this->nomorinduk->caption());

		// siswanama
		$this->siswanama->EditAttrs["class"] = "form-control";
		$this->siswanama->EditCustomAttributes = "";
		if (!$this->siswanama->Raw)
			$this->siswanama->CurrentValue = HtmlDecode($this->siswanama->CurrentValue);
		$this->siswanama->EditValue = $this->siswanama->CurrentValue;
		$this->siswanama->PlaceHolder = RemoveHtml($this->siswanama->caption());

		// periode
		$this->periode->EditAttrs["class"] = "form-control";
		$this->periode->EditCustomAttributes = "";
		$this->periode->EditValue = $this->periode->CurrentValue;
		$this->periode->PlaceHolder = RemoveHtml($this->periode->caption());

		// jumlah_total
		$this->jumlah_total->EditAttrs["class"] = "form-control";
		$this->jumlah_total->EditCustomAttributes = "";
		$this->jumlah_total->EditValue = $this->jumlah_total->CurrentValue;
		$this->jumlah_total->PlaceHolder = RemoveHtml($this->jumlah_total->caption());
		if (strval($this->jumlah_total->EditValue) != "" && is_numeric($this->jumlah_total->EditValue))
			$this->jumlah_total->EditValue = FormatNumber($this->jumlah_total->EditValue, -2, -2, -2, -2);
		

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
					$doc->exportCaption($this->tahunajaran);
					$doc->exportCaption($this->sekolahnama);
					$doc->exportCaption($this->kelasnama);
					$doc->exportCaption($this->iuran_id);
					$doc->exportCaption($this->iurannama);
					$doc->exportCaption($this->nomorinduk);
					$doc->exportCaption($this->siswanama);
					$doc->exportCaption($this->periode);
					$doc->exportCaption($this->jumlah_total);
				} else {
					$doc->exportCaption($this->tahunajaran);
					$doc->exportCaption($this->sekolahnama);
					$doc->exportCaption($this->kelasnama);
					$doc->exportCaption($this->iuran_id);
					$doc->exportCaption($this->iurannama);
					$doc->exportCaption($this->nomorinduk);
					$doc->exportCaption($this->siswanama);
					$doc->exportCaption($this->periode);
					$doc->exportCaption($this->jumlah_total);
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
						$doc->exportField($this->tahunajaran);
						$doc->exportField($this->sekolahnama);
						$doc->exportField($this->kelasnama);
						$doc->exportField($this->iuran_id);
						$doc->exportField($this->iurannama);
						$doc->exportField($this->nomorinduk);
						$doc->exportField($this->siswanama);
						$doc->exportField($this->periode);
						$doc->exportField($this->jumlah_total);
					} else {
						$doc->exportField($this->tahunajaran);
						$doc->exportField($this->sekolahnama);
						$doc->exportField($this->kelasnama);
						$doc->exportField($this->iuran_id);
						$doc->exportField($this->iurannama);
						$doc->exportField($this->nomorinduk);
						$doc->exportField($this->siswanama);
						$doc->exportField($this->periode);
						$doc->exportField($this->jumlah_total);
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