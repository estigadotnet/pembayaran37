<?php
namespace PHPMaker2020\project1;

/**
 * Page class
 */
class r102_lap_tunggak_summary extends r102_lap_tunggak
{

	// Page ID
	public $PageID = "summary";

	// Project ID
	public $ProjectID = "{E35313A1-BDC4-466C-B9BC-088D7A329967}";

	// Table name
	public $TableName = 'r102_lap_tunggak';

	// Page object name
	public $PageObjName = "r102_lap_tunggak_summary";

	// CSS
	public $ReportTableClass = "";
	public $ReportTableStyle = "";

	// Page URLs
	public $AddUrl;
	public $EditUrl;
	public $CopyUrl;
	public $DeleteUrl;
	public $ViewUrl;
	public $ListUrl;

	// Export URLs
	public $ExportPrintUrl;
	public $ExportHtmlUrl;
	public $ExportExcelUrl;
	public $ExportWordUrl;
	public $ExportXmlUrl;
	public $ExportCsvUrl;
	public $ExportPdfUrl;

	// Custom export
	public $ExportExcelCustom = FALSE;
	public $ExportWordCustom = FALSE;
	public $ExportPdfCustom = FALSE;
	public $ExportEmailCustom = FALSE;

	// Update URLs
	public $InlineAddUrl;
	public $InlineCopyUrl;
	public $InlineEditUrl;
	public $GridAddUrl;
	public $GridEditUrl;
	public $MultiDeleteUrl;
	public $MultiUpdateUrl;

	// Page headings
	public $Heading = "";
	public $Subheading = "";
	public $PageHeader;
	public $PageFooter;

	// Token
	public $Token = "";
	public $TokenTimeout = 0;
	public $CheckToken;

	// Page heading
	public function pageHeading()
	{
		global $Language;
		if ($this->Heading != "")
			return $this->Heading;
		if (method_exists($this, "tableCaption"))
			return $this->tableCaption();
		return "";
	}

	// Page subheading
	public function pageSubheading()
	{
		global $Language;
		if ($this->Subheading != "")
			return $this->Subheading;
		return "";
	}

	// Page name
	public function pageName()
	{
		return CurrentPageName();
	}

	// Page URL
	public function pageUrl()
	{
		$url = CurrentPageName() . "?";
		return $url;
	}

	// Messages
	private $_message = "";
	private $_failureMessage = "";
	private $_successMessage = "";
	private $_warningMessage = "";

	// Get message
	public function getMessage()
	{
		return isset($_SESSION[SESSION_MESSAGE]) ? $_SESSION[SESSION_MESSAGE] : $this->_message;
	}

	// Set message
	public function setMessage($v)
	{
		AddMessage($this->_message, $v);
		$_SESSION[SESSION_MESSAGE] = $this->_message;
	}

	// Get failure message
	public function getFailureMessage()
	{
		return isset($_SESSION[SESSION_FAILURE_MESSAGE]) ? $_SESSION[SESSION_FAILURE_MESSAGE] : $this->_failureMessage;
	}

	// Set failure message
	public function setFailureMessage($v)
	{
		AddMessage($this->_failureMessage, $v);
		$_SESSION[SESSION_FAILURE_MESSAGE] = $this->_failureMessage;
	}

	// Get success message
	public function getSuccessMessage()
	{
		return isset($_SESSION[SESSION_SUCCESS_MESSAGE]) ? $_SESSION[SESSION_SUCCESS_MESSAGE] : $this->_successMessage;
	}

	// Set success message
	public function setSuccessMessage($v)
	{
		AddMessage($this->_successMessage, $v);
		$_SESSION[SESSION_SUCCESS_MESSAGE] = $this->_successMessage;
	}

	// Get warning message
	public function getWarningMessage()
	{
		return isset($_SESSION[SESSION_WARNING_MESSAGE]) ? $_SESSION[SESSION_WARNING_MESSAGE] : $this->_warningMessage;
	}

	// Set warning message
	public function setWarningMessage($v)
	{
		AddMessage($this->_warningMessage, $v);
		$_SESSION[SESSION_WARNING_MESSAGE] = $this->_warningMessage;
	}

	// Clear message
	public function clearMessage()
	{
		$this->_message = "";
		$_SESSION[SESSION_MESSAGE] = "";
	}

	// Clear failure message
	public function clearFailureMessage()
	{
		$this->_failureMessage = "";
		$_SESSION[SESSION_FAILURE_MESSAGE] = "";
	}

	// Clear success message
	public function clearSuccessMessage()
	{
		$this->_successMessage = "";
		$_SESSION[SESSION_SUCCESS_MESSAGE] = "";
	}

	// Clear warning message
	public function clearWarningMessage()
	{
		$this->_warningMessage = "";
		$_SESSION[SESSION_WARNING_MESSAGE] = "";
	}

	// Clear messages
	public function clearMessages()
	{
		$this->clearMessage();
		$this->clearFailureMessage();
		$this->clearSuccessMessage();
		$this->clearWarningMessage();
	}

	// Show message
	public function showMessage()
	{
		$hidden = TRUE;
		$html = "";

		// Message
		$message = $this->getMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($message, "");
		if ($message != "") { // Message in Session, display
			if (!$hidden)
				$message = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $message;
			$html .= '<div class="alert alert-info alert-dismissible ew-info"><i class="icon fas fa-info"></i>' . $message . '</div>';
			$_SESSION[SESSION_MESSAGE] = ""; // Clear message in Session
		}

		// Warning message
		$warningMessage = $this->getWarningMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($warningMessage, "warning");
		if ($warningMessage != "") { // Message in Session, display
			if (!$hidden)
				$warningMessage = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $warningMessage;
			$html .= '<div class="alert alert-warning alert-dismissible ew-warning"><i class="icon fas fa-exclamation"></i>' . $warningMessage . '</div>';
			$_SESSION[SESSION_WARNING_MESSAGE] = ""; // Clear message in Session
		}

		// Success message
		$successMessage = $this->getSuccessMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($successMessage, "success");
		if ($successMessage != "") { // Message in Session, display
			if (!$hidden)
				$successMessage = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $successMessage;
			$html .= '<div class="alert alert-success alert-dismissible ew-success"><i class="icon fas fa-check"></i>' . $successMessage . '</div>';
			$_SESSION[SESSION_SUCCESS_MESSAGE] = ""; // Clear message in Session
		}

		// Failure message
		$errorMessage = $this->getFailureMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($errorMessage, "failure");
		if ($errorMessage != "") { // Message in Session, display
			if (!$hidden)
				$errorMessage = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $errorMessage;
			$html .= '<div class="alert alert-danger alert-dismissible ew-error"><i class="icon fas fa-ban"></i>' . $errorMessage . '</div>';
			$_SESSION[SESSION_FAILURE_MESSAGE] = ""; // Clear message in Session
		}
		echo '<div class="ew-message-dialog' . (($hidden) ? ' d-none' : "") . '">' . $html . '</div>';
	}

	// Get message as array
	public function getMessages()
	{
		$ar = [];

		// Message
		$message = $this->getMessage();

		//if (method_exists($this, "Message_Showing"))
		//	$this->Message_Showing($message, "");

		if ($message != "") { // Message in Session, display
			$ar["message"] = $message;
			$_SESSION[SESSION_MESSAGE] = ""; // Clear message in Session
		}

		// Warning message
		$warningMessage = $this->getWarningMessage();

		//if (method_exists($this, "Message_Showing"))
		//	$this->Message_Showing($warningMessage, "warning");

		if ($warningMessage != "") { // Message in Session, display
			$ar["warningMessage"] = $warningMessage;
			$_SESSION[SESSION_WARNING_MESSAGE] = ""; // Clear message in Session
		}

		// Success message
		$successMessage = $this->getSuccessMessage();

		//if (method_exists($this, "Message_Showing"))
		//	$this->Message_Showing($successMessage, "success");

		if ($successMessage != "") { // Message in Session, display
			$ar["successMessage"] = $successMessage;
			$_SESSION[SESSION_SUCCESS_MESSAGE] = ""; // Clear message in Session
		}

		// Failure message
		$failureMessage = $this->getFailureMessage();

		//if (method_exists($this, "Message_Showing"))
		//	$this->Message_Showing($failureMessage, "failure");

		if ($failureMessage != "") { // Message in Session, display
			$ar["failureMessage"] = $failureMessage;
			$_SESSION[SESSION_FAILURE_MESSAGE] = ""; // Clear message in Session
		}
		return $ar;
	}

	// Show Page Header
	public function showPageHeader()
	{
		$header = $this->PageHeader;
		$this->Page_DataRendering($header);
		if ($header != "") { // Header exists, display
			echo '<p id="ew-page-header">' . $header . '</p>';
		}
	}

	// Show Page Footer
	public function showPageFooter()
	{
		$footer = $this->PageFooter;
		$this->Page_DataRendered($footer);
		if ($footer != "") { // Footer exists, display
			echo '<p id="ew-page-footer">' . $footer . '</p>';
		}
	}

	// Validate page request
	protected function isPageRequest()
	{
		return TRUE;
	}

	// Valid Post
	protected function validPost()
	{
		if (!$this->CheckToken || !IsPost() || IsApi())
			return TRUE;
		if (Post(Config("TOKEN_NAME")) === NULL)
			return FALSE;
		$fn = Config("CHECK_TOKEN_FUNC");
		if (is_callable($fn))
			return $fn(Post(Config("TOKEN_NAME")), $this->TokenTimeout);
		return FALSE;
	}

	// Create Token
	public function createToken()
	{
		global $CurrentToken;
		$fn = Config("CREATE_TOKEN_FUNC"); // Always create token, required by API file/lookup request
		if ($this->Token == "" && is_callable($fn)) // Create token
			$this->Token = $fn();
		$CurrentToken = $this->Token; // Save to global variable
	}

	// Constructor
	public function __construct()
	{
		global $Language, $DashboardReport;
		global $UserTable;

		// Check token
		$this->CheckToken = Config("CHECK_TOKEN");

		// Initialize
		$GLOBALS["Page"] = &$this;
		$this->TokenTimeout = SessionTimeoutTime();

		// Language object
		if (!isset($Language))
			$Language = new Language();

		// Parent constuctor
		parent::__construct();

		// Table object (r102_lap_tunggak)
		if (!isset($GLOBALS["r102_lap_tunggak"]) || get_class($GLOBALS["r102_lap_tunggak"]) == PROJECT_NAMESPACE . "r102_lap_tunggak") {
			$GLOBALS["r102_lap_tunggak"] = &$this;
			$GLOBALS["Table"] = &$GLOBALS["r102_lap_tunggak"];
		}

		// Initialize URLs
		$this->ExportPrintUrl = $this->pageUrl() . "export=print";
		$this->ExportExcelUrl = $this->pageUrl() . "export=excel";
		$this->ExportWordUrl = $this->pageUrl() . "export=word";
		$this->ExportPdfUrl = $this->pageUrl() . "export=pdf";

		// Table object (t301_employees)
		if (!isset($GLOBALS['t301_employees']))
			$GLOBALS['t301_employees'] = new t301_employees();

		// Page ID (for backward compatibility only)
		if (!defined(PROJECT_NAMESPACE . "PAGE_ID"))
			define(PROJECT_NAMESPACE . "PAGE_ID", 'summary');

		// Table name (for backward compatibility only)
		if (!defined(PROJECT_NAMESPACE . "TABLE_NAME"))
			define(PROJECT_NAMESPACE . "TABLE_NAME", 'r102_lap_tunggak');

		// Start timer
		if (!isset($GLOBALS["DebugTimer"]))
			$GLOBALS["DebugTimer"] = new Timer();

		// Debug message
		LoadDebugMessage();

		// Open connection
		if (!isset($GLOBALS["Conn"]))
			$GLOBALS["Conn"] = $this->getConnection();

		// User table object (t301_employees)
		$UserTable = $UserTable ?: new t301_employees();

		// Export options
		$this->ExportOptions = new ListOptions("div");
		$this->ExportOptions->TagClassName = "ew-export-option";

		// Filter options
		$this->FilterOptions = new ListOptions("div");
		$this->FilterOptions->TagClassName = "ew-filter-option fsummary";
	}

	// Terminate page
	public function terminate($url = "")
	{
		global $ExportFileName, $TempImages, $DashboardReport;

		// Page Unload event
		$this->Page_Unload();

		// Global Page Unloaded event (in userfn*.php)
		Page_Unloaded();

		// Export
		if ($this->isExport() && !$this->isExport("print") && $fn = Config("REPORT_EXPORT_FUNCTIONS." . $this->Export)) {
			$content = ob_get_clean();
			$this->$fn($content);
		}
		if (!IsApi())
			$this->Page_Redirecting($url);

		// Close connection if not in dashboard
		if (!$DashboardReport)
			CloseConnections();

		// Return for API
		if (IsApi()) {
			$res = $url === TRUE;
			if (!$res) // Show error
				WriteJson(array_merge(["success" => FALSE], $this->getMessages()));
			return;
		}

		// Go to URL if specified
		if ($url != "") {
			if (!Config("DEBUG") && ob_get_length())
				ob_end_clean();
			SaveDebugMessage();
			AddHeader("Location", $url);
		}

		// Exit if not in dashboard
		if (!$DashboardReport)
			exit();
	}

	// Lookup data
	public function lookup()
	{
		global $Language, $Security;
		if (!isset($Language))
			$Language = new Language(Config("LANGUAGE_FOLDER"), Post("language", ""));

		// Set up API request
		if (!$this->setupApiRequest())
			return FALSE;

		// Get lookup object
		$fieldName = Post("field");
		if (!array_key_exists($fieldName, $this->fields))
			return FALSE;
		$lookupField = $this->fields[$fieldName];
		$lookup = $lookupField->Lookup;
		if ($lookup === NULL)
			return FALSE;
		$tbl = $lookup->getTable();
		if (!$Security->allowLookup(Config("PROJECT_ID") . $tbl->TableName)) // Lookup permission
			return FALSE;
		if (in_array($lookup->LinkTable, [$this->ReportSourceTable, $this->TableVar]))
			$lookup->RenderViewFunc = "renderLookup"; // Set up view renderer
		$lookup->RenderEditFunc = ""; // Set up edit renderer

		// Get lookup parameters
		$lookupType = Post("ajax", "unknown");
		$pageSize = -1;
		$offset = -1;
		$searchValue = "";
		if (SameText($lookupType, "modal")) {
			$searchValue = Post("sv", "");
			$pageSize = Post("recperpage", 10);
			$offset = Post("start", 0);
		} elseif (SameText($lookupType, "autosuggest")) {
			$searchValue = Get("q", "");
			$pageSize = Param("n", -1);
			$pageSize = is_numeric($pageSize) ? (int)$pageSize : -1;
			if ($pageSize <= 0)
				$pageSize = Config("AUTO_SUGGEST_MAX_ENTRIES");
			$start = Param("start", -1);
			$start = is_numeric($start) ? (int)$start : -1;
			$page = Param("page", -1);
			$page = is_numeric($page) ? (int)$page : -1;
			$offset = $start >= 0 ? $start : ($page > 0 && $pageSize > 0 ? ($page - 1) * $pageSize : 0);
		}
		$userSelect = Decrypt(Post("s", ""));
		$userFilter = Decrypt(Post("f", ""));
		$userOrderBy = Decrypt(Post("o", ""));
		$keys = Post("keys");
		$lookup->LookupType = $lookupType; // Lookup type
		if ($keys !== NULL) { // Selected records from modal
			if (is_array($keys))
				$keys = implode(Config("MULTIPLE_OPTION_SEPARATOR"), $keys);
			$lookup->FilterFields = []; // Skip parent fields if any
			$lookup->FilterValues[] = $keys; // Lookup values
			$pageSize = -1; // Show all records
		} else { // Lookup values
			$lookup->FilterValues[] = Post("v0", Post("lookupValue", ""));
		}
		$cnt = is_array($lookup->FilterFields) ? count($lookup->FilterFields) : 0;
		for ($i = 1; $i <= $cnt; $i++)
			$lookup->FilterValues[] = Post("v" . $i, "");
		$lookup->SearchValue = $searchValue;
		$lookup->PageSize = $pageSize;
		$lookup->Offset = $offset;
		if ($userSelect != "")
			$lookup->UserSelect = $userSelect;
		if ($userFilter != "")
			$lookup->UserFilter = $userFilter;
		if ($userOrderBy != "")
			$lookup->UserOrderBy = $userOrderBy;
		$lookup->toJson($this); // Use settings from current page
	}

	// Set up API request
	public function setupApiRequest()
	{
		global $Security;

		// Check security for API request
		If (ValidApiRequest()) {
			if ($Security->isLoggedIn()) $Security->TablePermission_Loading();
			$Security->loadCurrentUserLevel(Config("PROJECT_ID") . $this->TableName);
			if ($Security->isLoggedIn()) $Security->TablePermission_Loaded();
			$Security->UserID_Loading();
			$Security->loadUserID();
			$Security->UserID_Loaded();
			return TRUE;
		}
		return FALSE;
	}

	// Initialize common variables
	public $HideOptions = FALSE;
	public $ExportOptions; // Export options
	public $SearchOptions; // Search options
	public $FilterOptions; // Filter options

	// Records
	public $GroupRecords = [];
	public $DetailRecords = [];
	public $DetailRecordCount = 0;

	// Paging variables
	public $RecordIndex = 0; // Record index
	public $RecordCount = 0; // Record count (start from 1 for each group)
	public $StartGroup = 0; // Start group
	public $StopGroup = 0; // Stop group
	public $TotalGroups = 0; // Total groups
	public $GroupCount = 0; // Group count
	public $GroupCounter = []; // Group counter
	public $DisplayGroups = 3; // Groups per page
	public $GroupRange = 10;
	public $PageSizes = "1,2,3,5,-1"; // Page sizes (comma separated)
	public $Sort = "";
	public $Filter = "";
	public $PageFirstGroupFilter = "";
	public $UserIDFilter = "";
	public $DefaultSearchWhere = ""; // Default search WHERE clause
	public $SearchWhere = "";
	public $SearchPanelClass = "ew-search-panel collapse show"; // Search Panel class
	public $SearchRowCount = 0; // For extended search
	public $SearchColumnCount = 0; // For extended search
	public $SearchFieldsPerRow = 1; // For extended search
	public $DrillDownList = "";
	public $SearchCommand = FALSE;
	public $ShowHeader;
	public $GroupColumnCount = 0;
	public $SubGroupColumnCount = 0;
	public $DetailColumnCount = 0;
	public $TotalCount;
	public $PageTotalCount;
	public $TopContentClass = "col-sm-12 ew-top";
	public $LeftContentClass = "ew-left";
	public $CenterContentClass = "col-sm-12 ew-center";
	public $RightContentClass = "ew-right";
	public $BottomContentClass = "col-sm-12 ew-bottom";

	//
	// Page run
	//

	public function run()
	{
		global $ExportType, $ExportFileName, $Language, $Security, $UserProfile,
			$Security, $FormError, $DrillDownInPanel, $Breadcrumb,
			$DashboardReport, $CustomExportType, $ReportExportType;

		// User profile
		$UserProfile = new UserProfile();

		// Security
		if (!$this->setupApiRequest()) {
			$Security = new AdvancedSecurity();
			if (!$Security->isLoggedIn())
				$Security->autoLogin();
			if ($Security->isLoggedIn())
				$Security->TablePermission_Loading();
			$Security->loadCurrentUserLevel($this->ProjectID . $this->TableName);
			if ($Security->isLoggedIn())
				$Security->TablePermission_Loaded();
			if (!$Security->canReport()) {
				$Security->saveLastUrl();
				$this->setFailureMessage(DeniedMessage()); // Set no permission
				$this->terminate(GetUrl("index.php"));
				return;
			}
			if ($Security->isLoggedIn()) {
				$Security->UserID_Loading();
				$Security->loadUserID();
				$Security->UserID_Loaded();
			}
		}

		// Get export parameters
		$custom = "";
		if (Param("export") !== NULL) {
			$this->Export = Param("export");
			$custom = Param("custom", "");
		}
		$ExportFileName = $this->TableVar; // Get export file, used in header

		// Get custom export parameters
		if ($this->isExport() && $custom != "") {
			$this->CustomExport = $this->Export;
			$this->Export = "print";
		}
		$CustomExportType = $this->CustomExport;
		$ExportType = $this->Export; // Get export parameter, used in header
		$ReportExportType = $ExportType; // Report export type, used in header

		// Update Export URLs
		if (Config("USE_PHPEXCEL"))
			$this->ExportExcelCustom = FALSE;
		if ($this->ExportExcelCustom)
			$this->ExportExcelUrl .= "&amp;custom=1";
		if (Config("USE_PHPWORD"))
			$this->ExportWordCustom = FALSE;
		if ($this->ExportWordCustom)
			$this->ExportWordUrl .= "&amp;custom=1";
		if ($this->ExportPdfCustom)
			$this->ExportPdfUrl .= "&amp;custom=1";
		$this->CurrentAction = Param("action"); // Set up current action

		// Setup export options
		$this->setupExportOptions();

		// Global Page Loading event (in userfn*.php)
		Page_Loading();

		// Page Load event
		$this->Page_Load();

		// Check token
		if (!$this->validPost()) {
			Write($Language->phrase("InvalidPostRequest"));
			$this->terminate();
		}

		// Create Token
		$this->createToken();

		// Setup other options
		$this->setupOtherOptions();

		// Set up table class
		if ($this->isExport("word") || $this->isExport("excel") || $this->isExport("pdf"))
			$this->ReportTableClass = "ew-table";
		else
			$this->ReportTableClass = "table ew-table";

		// Set field visibility for detail fields
		$this->TahunAjaran->setVisibility();
		$this->SekolahNama->setVisibility();
		$this->KelasNama->setVisibility();
		$this->NomorInduk->setVisibility();
		$this->SiswaNama->setVisibility();
		$this->IuranNama->setVisibility();
		$this->Periode->setVisibility();
		$this->PeriodeBulan->setVisibility();
		$this->JumlahBayar->setVisibility();

		// Set up groups per page dynamically
		$this->setupDisplayGroups();

		// Set up Breadcrumb
		if (!$this->isExport())
			$this->setupBreadcrumb();

		// Check if search command
		$this->SearchCommand = (Get("cmd", "") == "search");

		// Load custom filters
		$this->Page_FilterLoad();

		// Extended filter
		$extendedFilter = "";

		// Restore filter list
		$this->restoreFilterList();

		// Build extended filter
		$extendedFilter = $this->getExtendedFilter();
		AddFilter($this->SearchWhere, $extendedFilter);

		// Call Page Selecting event
		$this->Page_Selecting($this->SearchWhere);

		// Requires search criteria
		if (($this->SearchWhere == "") && !$this->DrillDown)
			$this->SearchWhere = "0=101";

		// Search options
		$this->setupSearchOptions();

		// Set up search panel class
		if ($this->SearchWhere != "")
			AppendClass($this->SearchPanelClass, "show");

		// Get sort
		$this->Sort = $this->getSort();

		// Update filter
		AddFilter($this->Filter, $this->SearchWhere);

		// Get total group count
		$sql = BuildReportSql($this->getSqlSelectGroup(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), "", $this->Filter, "");
		$this->TotalGroups = $this->getRecordCount($sql);
		if ($this->DisplayGroups <= 0 || $this->DrillDown || $DashboardReport) // Display all groups
			$this->DisplayGroups = $this->TotalGroups;
		$this->StartGroup = 1;

		// Show header
		$this->ShowHeader = ($this->TotalGroups > 0);

		// Set up start position if not export all
		if ($this->ExportAll && $this->isExport())
			$this->DisplayGroups = $this->TotalGroups;
		else
			$this->setupStartGroup();

		// Set no record found message
		if ($this->TotalGroups == 0) {
			if ($Security->canList()) {
				if ($this->SearchWhere == "0=101") {
					$this->setWarningMessage($Language->phrase("EnterSearchCriteria"));
				} else {
					$this->setWarningMessage($Language->phrase("NoRecord"));
				}
			} else {
				$this->setWarningMessage(DeniedMessage());
			}
		}

		// Hide export options if export/dashboard report/hide options
		if ($this->isExport() || $DashboardReport || $this->HideOptions)
			$this->ExportOptions->hideAllOptions();

		// Hide search/filter options if export/drilldown/dashboard report/hide options
		if ($this->isExport() || $this->DrillDown || $DashboardReport || $this->HideOptions) {
			$this->SearchOptions->hideAllOptions();
			$this->FilterOptions->hideAllOptions();
		}

		// Get group records
		if ($this->TotalGroups > 0) {
			$grpSort = UpdateSortFields($this->getSqlOrderByGroup(), $this->Sort, 2); // Get grouping field only
			$sql = BuildReportSql($this->getSqlSelectGroup(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), $this->getSqlOrderByGroup(), $this->Filter, $grpSort);
			$grpRs = $this->getRecordset($sql, $this->DisplayGroups, $this->StartGroup - 1);
			$this->GroupRecords = $grpRs->getRows(); // Get records of first grouping field
			$this->loadGroupRowValues();
			$this->GroupCount = 1;
		}

		// Init detail records
		$this->DetailRecords = [];
		$this->setupFieldCount();

		// Set the last group to display if not export all
		if ($this->ExportAll && $this->isExport()) {
			$this->StopGroup = $this->TotalGroups;
		} else {
			$this->StopGroup = $this->StartGroup + $this->DisplayGroups - 1;
		}

		// Stop group <= total number of groups
		if (intval($this->StopGroup) > intval($this->TotalGroups))
			$this->StopGroup = $this->TotalGroups;
		$this->RecordCount = 0;
		$this->RecordIndex = 0;

		// Set up pager
		$this->Pager = new PrevNextPager($this->StartGroup, $this->DisplayGroups, $this->TotalGroups, $this->PageSizes, $this->GroupRange, $this->AutoHidePager, $this->AutoHidePageSizeSelector);
	}

	// Load group row values
	public function loadGroupRowValues()
	{
		$cnt = count($this->GroupRecords); // Get record count
		if ($this->GroupCount < $cnt)
			$this->keterangan->setGroupValue($this->GroupRecords[$this->GroupCount][0]);
		else
			$this->keterangan->setGroupValue("");
	}

	// Load row values
	public function loadRowValues($record)
	{
		if ($this->RecordIndex == 1) { // Load first row data
			$data = [];
			$data["keterangan"] = $record['keterangan'];
			$data["IuranNama2"] = $record['IuranNama2'];
			$data["Jumlah"] = $record['Jumlah'];
			$data["TahunAjaran"] = $record['TahunAjaran'];
			$data["SekolahNama"] = $record['SekolahNama'];
			$data["KelasNama"] = $record['KelasNama'];
			$data["NomorInduk"] = $record['NomorInduk'];
			$data["SiswaNama"] = $record['SiswaNama'];
			$data["IuranNama"] = $record['IuranNama'];
			$data["Periode"] = $record['Periode'];
			$data["PeriodeBulan"] = $record['PeriodeBulan'];
			$data["JumlahBayar"] = $record['JumlahBayar'];
			$data["daf_kelas_siswa_id"] = $record['daf_kelas_siswa_id'];
			$data["iuran_id"] = $record['iuran_id'];
			$data["StatusBayar"] = $record['StatusBayar'];
			$data["TglBayar"] = $record['TglBayar'];
			$data["siswa_id"] = $record['siswa_id'];
			$data["dk_id"] = $record['dk_id'];
			$data["kelas_id"] = $record['kelas_id'];
			$data["sekolah_id"] = $record['sekolah_id'];
			$data["tahun_ajaran_id"] = $record['tahun_ajaran_id'];
			$data["PeriodeNow"] = $record['PeriodeNow'];
			$this->Rows[] = $data;
		}
		$this->keterangan->setDbValue(GroupValue($this->keterangan, $record['keterangan']));
		$this->IuranNama2->setDbValue($record['IuranNama2']);
		$this->Jumlah->setDbValue($record['Jumlah']);
		$this->TahunAjaran->setDbValue($record['TahunAjaran']);
		$this->SekolahNama->setDbValue($record['SekolahNama']);
		$this->KelasNama->setDbValue($record['KelasNama']);
		$this->NomorInduk->setDbValue($record['NomorInduk']);
		$this->SiswaNama->setDbValue($record['SiswaNama']);
		$this->IuranNama->setDbValue($record['IuranNama']);
		$this->Periode->setDbValue($record['Periode']);
		$this->PeriodeBulan->setDbValue($record['PeriodeBulan']);
		$this->JumlahBayar->setDbValue($record['JumlahBayar']);
		$this->daf_kelas_siswa_id->setDbValue($record['daf_kelas_siswa_id']);
		$this->iuran_id->setDbValue($record['iuran_id']);
		$this->StatusBayar->setDbValue($record['StatusBayar']);
		$this->TglBayar->setDbValue($record['TglBayar']);
		$this->siswa_id->setDbValue($record['siswa_id']);
		$this->dk_id->setDbValue($record['dk_id']);
		$this->kelas_id->setDbValue($record['kelas_id']);
		$this->sekolah_id->setDbValue($record['sekolah_id']);
		$this->tahun_ajaran_id->setDbValue($record['tahun_ajaran_id']);
		$this->PeriodeNow->setDbValue($record['PeriodeNow']);
	}

	// Render row
	public function renderRow()
	{
		global $Security, $Language, $Language;
		$conn = $this->getConnection();
		if ($this->RowType == ROWTYPE_TOTAL && $this->RowTotalSubType == ROWTOTAL_FOOTER && $this->RowTotalType == ROWTOTAL_PAGE) { // Get Page total

			// Build detail SQL
			$firstGrpFld = &$this->keterangan;
			$firstGrpFld->getDistinctValues($this->GroupRecords);
			$where = DetailFilterSql($firstGrpFld, $this->getSqlFirstGroupField(), $firstGrpFld->DistinctValues, $this->Dbid);
			if ($this->Filter != "")
				$where = "($this->Filter) AND ($where)";
			$sql = BuildReportSql($this->getSqlSelect(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), $this->getSqlOrderBy(), $where, $this->Sort);
			$rs = $this->getRecordset($sql);
			$records = $rs ? $rs->getRows() : [];
			$this->JumlahBayar->getSum($records);
			$this->PageTotalCount = count($records);
		} elseif ($this->RowType == ROWTYPE_TOTAL && $this->RowTotalSubType == ROWTOTAL_FOOTER && $this->RowTotalType == ROWTOTAL_GRAND) { // Get Grand total
			$hasCount = FALSE;
			$hasSummary = FALSE;

			// Get total count from SQL directly
			$sql = BuildReportSql($this->getSqlSelectCount(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), "", $this->Filter, "");
			$rstot = $conn->execute($sql);
			if ($rstot) {
				$cnt = ($rstot->recordCount() > 1) ? $rstot->recordCount() : $rstot->fields[0];
				$rstot->close();
				$hasCount = TRUE;
			} else {
				$cnt = 0;
			}
			$this->TotalCount = $cnt;

			// Get total from SQL directly
			$sql = BuildReportSql($this->getSqlSelectAggregate(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), "", $this->Filter, "");
			$sql = $this->getSqlAggregatePrefix() . $sql . $this->getSqlAggregateSuffix();
			$rsagg = $conn->execute($sql);
			if ($rsagg) {
				$this->TahunAjaran->Count = $this->TotalCount;
				$this->SekolahNama->Count = $this->TotalCount;
				$this->KelasNama->Count = $this->TotalCount;
				$this->NomorInduk->Count = $this->TotalCount;
				$this->SiswaNama->Count = $this->TotalCount;
				$this->IuranNama->Count = $this->TotalCount;
				$this->Periode->Count = $this->TotalCount;
				$this->PeriodeBulan->Count = $this->TotalCount;
				$this->JumlahBayar->Count = $this->TotalCount;
				$this->JumlahBayar->SumValue = $rsagg->fields("sum_jumlahbayar");
				$rsagg->close();
				$hasSummary = TRUE;
			}

			// Accumulate grand summary from detail records
			if (!$hasCount || !$hasSummary) {
				$sql = BuildReportSql($this->getSqlSelect(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), "", $this->Filter, "");
				$rs = $this->getRecordset($sql);
				$this->DetailRecords = $rs ? $rs->getRows() : [];
			$this->JumlahBayar->getSum($this->DetailRecords);
			}
		}

		// Call Row_Rendering event
		$this->Row_Rendering();

		// keterangan
		// IuranNama2
		// Jumlah
		// TahunAjaran
		// SekolahNama
		// KelasNama
		// NomorInduk
		// SiswaNama
		// IuranNama
		// Periode
		// PeriodeBulan
		// JumlahBayar

		if ($this->RowType == ROWTYPE_SEARCH) { // Search row

			// TahunAjaran
			$this->TahunAjaran->EditCustomAttributes = "";
			$curVal = trim(strval($this->TahunAjaran->AdvancedSearch->SearchValue));
			if ($curVal != "")
				$this->TahunAjaran->AdvancedSearch->ViewValue = $this->TahunAjaran->lookupCacheOption($curVal);
			else
				$this->TahunAjaran->AdvancedSearch->ViewValue = $this->TahunAjaran->Lookup !== NULL && is_array($this->TahunAjaran->Lookup->Options) ? $curVal : NULL;
			if ($this->TahunAjaran->AdvancedSearch->ViewValue !== NULL) { // Load from cache
				$this->TahunAjaran->EditValue = array_values($this->TahunAjaran->Lookup->Options);
				if ($this->TahunAjaran->AdvancedSearch->ViewValue == "")
					$this->TahunAjaran->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`TahunAjaran`" . SearchString("=", $this->TahunAjaran->AdvancedSearch->SearchValue, DATATYPE_STRING, "");
				}
				$sqlWrk = $this->TahunAjaran->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = HtmlEncode($rswrk->fields('df'));
					$this->TahunAjaran->AdvancedSearch->ViewValue = $this->TahunAjaran->displayValue($arwrk);
				} else {
					$this->TahunAjaran->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$this->TahunAjaran->EditValue = $arwrk;
			}

			// SekolahNama
			$this->SekolahNama->EditCustomAttributes = "";
			$curVal = trim(strval($this->SekolahNama->AdvancedSearch->SearchValue));
			if ($curVal != "")
				$this->SekolahNama->AdvancedSearch->ViewValue = $this->SekolahNama->lookupCacheOption($curVal);
			else
				$this->SekolahNama->AdvancedSearch->ViewValue = $this->SekolahNama->Lookup !== NULL && is_array($this->SekolahNama->Lookup->Options) ? $curVal : NULL;
			if ($this->SekolahNama->AdvancedSearch->ViewValue !== NULL) { // Load from cache
				$this->SekolahNama->EditValue = array_values($this->SekolahNama->Lookup->Options);
				if ($this->SekolahNama->AdvancedSearch->ViewValue == "")
					$this->SekolahNama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`SekolahNama`" . SearchString("=", $this->SekolahNama->AdvancedSearch->SearchValue, DATATYPE_STRING, "");
				}
				$sqlWrk = $this->SekolahNama->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = HtmlEncode($rswrk->fields('df'));
					$this->SekolahNama->AdvancedSearch->ViewValue = $this->SekolahNama->displayValue($arwrk);
				} else {
					$this->SekolahNama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$this->SekolahNama->EditValue = $arwrk;
			}

			// KelasNama
			$this->KelasNama->EditCustomAttributes = "";
			$curVal = trim(strval($this->KelasNama->AdvancedSearch->SearchValue));
			if ($curVal != "")
				$this->KelasNama->AdvancedSearch->ViewValue = $this->KelasNama->lookupCacheOption($curVal);
			else
				$this->KelasNama->AdvancedSearch->ViewValue = $this->KelasNama->Lookup !== NULL && is_array($this->KelasNama->Lookup->Options) ? $curVal : NULL;
			if ($this->KelasNama->AdvancedSearch->ViewValue !== NULL) { // Load from cache
				$this->KelasNama->EditValue = array_values($this->KelasNama->Lookup->Options);
				if ($this->KelasNama->AdvancedSearch->ViewValue == "")
					$this->KelasNama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`KelasNama`" . SearchString("=", $this->KelasNama->AdvancedSearch->SearchValue, DATATYPE_STRING, "");
				}
				$sqlWrk = $this->KelasNama->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = HtmlEncode($rswrk->fields('df'));
					$this->KelasNama->AdvancedSearch->ViewValue = $this->KelasNama->displayValue($arwrk);
				} else {
					$this->KelasNama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$this->KelasNama->EditValue = $arwrk;
			}

			// NomorInduk
			$this->NomorInduk->EditCustomAttributes = "";
			$curVal = trim(strval($this->NomorInduk->AdvancedSearch->SearchValue));
			if ($curVal != "")
				$this->NomorInduk->AdvancedSearch->ViewValue = $this->NomorInduk->lookupCacheOption($curVal);
			else
				$this->NomorInduk->AdvancedSearch->ViewValue = $this->NomorInduk->Lookup !== NULL && is_array($this->NomorInduk->Lookup->Options) ? $curVal : NULL;
			if ($this->NomorInduk->AdvancedSearch->ViewValue !== NULL) { // Load from cache
				$this->NomorInduk->EditValue = array_values($this->NomorInduk->Lookup->Options);
				if ($this->NomorInduk->AdvancedSearch->ViewValue == "")
					$this->NomorInduk->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`NomorInduk`" . SearchString("=", $this->NomorInduk->AdvancedSearch->SearchValue, DATATYPE_STRING, "");
				}
				$sqlWrk = $this->NomorInduk->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = HtmlEncode($rswrk->fields('df'));
					$arwrk[2] = HtmlEncode($rswrk->fields('df2'));
					$this->NomorInduk->AdvancedSearch->ViewValue = $this->NomorInduk->displayValue($arwrk);
				} else {
					$this->NomorInduk->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$this->NomorInduk->EditValue = $arwrk;
			}

			// SiswaNama
			$this->SiswaNama->EditCustomAttributes = "";
			$curVal = trim(strval($this->SiswaNama->AdvancedSearch->SearchValue));
			if ($curVal != "")
				$this->SiswaNama->AdvancedSearch->ViewValue = $this->SiswaNama->lookupCacheOption($curVal);
			else
				$this->SiswaNama->AdvancedSearch->ViewValue = $this->SiswaNama->Lookup !== NULL && is_array($this->SiswaNama->Lookup->Options) ? $curVal : NULL;
			if ($this->SiswaNama->AdvancedSearch->ViewValue !== NULL) { // Load from cache
				$this->SiswaNama->EditValue = array_values($this->SiswaNama->Lookup->Options);
				if ($this->SiswaNama->AdvancedSearch->ViewValue == "")
					$this->SiswaNama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`SiswaNama`" . SearchString("=", $this->SiswaNama->AdvancedSearch->SearchValue, DATATYPE_STRING, "");
				}
				$sqlWrk = $this->SiswaNama->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = HtmlEncode($rswrk->fields('df'));
					$arwrk[2] = HtmlEncode($rswrk->fields('df2'));
					$this->SiswaNama->AdvancedSearch->ViewValue = $this->SiswaNama->displayValue($arwrk);
				} else {
					$this->SiswaNama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$this->SiswaNama->EditValue = $arwrk;
			}

			// IuranNama
			$this->IuranNama->EditCustomAttributes = "";
			$curVal = trim(strval($this->IuranNama->AdvancedSearch->SearchValue));
			if ($curVal != "")
				$this->IuranNama->AdvancedSearch->ViewValue = $this->IuranNama->lookupCacheOption($curVal);
			else
				$this->IuranNama->AdvancedSearch->ViewValue = $this->IuranNama->Lookup !== NULL && is_array($this->IuranNama->Lookup->Options) ? $curVal : NULL;
			if ($this->IuranNama->AdvancedSearch->ViewValue !== NULL) { // Load from cache
				$this->IuranNama->EditValue = array_values($this->IuranNama->Lookup->Options);
				if ($this->IuranNama->AdvancedSearch->ViewValue == "")
					$this->IuranNama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$arwrk = explode(",", $curVal);
					$filterWrk = "";
					foreach ($arwrk as $wrk) {
						if ($filterWrk != "")
							$filterWrk .= " OR ";
						$filterWrk .= "`IuranNama`" . SearchString("=", trim($wrk), DATATYPE_STRING, "");
					}
				}
				$sqlWrk = $this->IuranNama->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$this->IuranNama->AdvancedSearch->ViewValue = new OptionValues();
					$ari = 0;
					while (!$rswrk->EOF) {
						$arwrk = [];
						$arwrk[1] = HtmlEncode($rswrk->fields('df'));
						$this->IuranNama->AdvancedSearch->ViewValue->add($this->IuranNama->displayValue($arwrk));
						$rswrk->MoveNext();
						$ari++;
					}
					$rswrk->MoveFirst();
				} else {
					$this->IuranNama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$this->IuranNama->EditValue = $arwrk;
			}

			// Periode
			$this->Periode->EditCustomAttributes = "";
			$curVal = trim(strval($this->Periode->AdvancedSearch->SearchValue));
			if ($curVal != "")
				$this->Periode->AdvancedSearch->ViewValue = $this->Periode->lookupCacheOption($curVal);
			else
				$this->Periode->AdvancedSearch->ViewValue = $this->Periode->Lookup !== NULL && is_array($this->Periode->Lookup->Options) ? $curVal : NULL;
			if ($this->Periode->AdvancedSearch->ViewValue !== NULL) { // Load from cache
				$this->Periode->EditValue = array_values($this->Periode->Lookup->Options);
				if ($this->Periode->AdvancedSearch->ViewValue == "")
					$this->Periode->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`Periode`" . SearchString("=", $this->Periode->AdvancedSearch->SearchValue, DATATYPE_NUMBER, "");
				}
				$lookupFilter = function() {
					return "`Periode` < `PeriodeNow`";
				};
				$lookupFilter = $lookupFilter->bindTo($this);
				$sqlWrk = $this->Periode->Lookup->getSql(TRUE, $filterWrk, $lookupFilter, $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = HtmlEncode(FormatNumber($rswrk->fields('df'), 0, -2, -2, -2));
					$this->Periode->AdvancedSearch->ViewValue = $this->Periode->displayValue($arwrk);
				} else {
					$this->Periode->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$rowcnt = count($arwrk);
				for ($i = 0; $i < $rowcnt; $i++) {
					$arwrk[$i][1] = FormatNumber($arwrk[$i][1], 0, -2, -2, -2);
				}
				$this->Periode->EditValue = $arwrk;
			}
		} elseif ($this->RowType == ROWTYPE_TOTAL && !($this->RowTotalType == ROWTOTAL_GROUP && $this->RowTotalSubType == ROWTOTAL_HEADER)) { // Summary row
			$this->RowAttrs->prependClass(($this->RowTotalType == ROWTOTAL_PAGE || $this->RowTotalType == ROWTOTAL_GRAND) ? "ew-rpt-grp-aggregate" : ""); // Set up row class
			if ($this->RowTotalType == ROWTOTAL_GROUP)
				$this->RowAttrs["data-group"] = $this->keterangan->groupValue(); // Set up group attribute
			if ($this->RowTotalType == ROWTOTAL_GROUP && $this->RowGroupLevel >= 2)
				$this->RowAttrs["data-group-2"] = $this->IuranNama2->groupValue(); // Set up group attribute 2
			if ($this->RowTotalType == ROWTOTAL_GROUP && $this->RowGroupLevel >= 3)
				$this->RowAttrs["data-group-3"] = $this->Jumlah->groupValue(); // Set up group attribute 3

			// keterangan
			$this->keterangan->GroupViewValue = $this->keterangan->groupValue();
			$this->keterangan->CellCssClass = ($this->RowGroupLevel == 1 ? "ew-rpt-grp-summary-1" : "ew-rpt-grp-field-1");
			$this->keterangan->ViewCustomAttributes = "";
			$this->keterangan->GroupViewValue = DisplayGroupValue($this->keterangan, $this->keterangan->GroupViewValue);

			// IuranNama2
			$this->IuranNama2->GroupViewValue = $this->IuranNama2->groupValue();
			$this->IuranNama2->CellCssClass = ($this->RowGroupLevel == 2 ? "ew-rpt-grp-summary-2" : "ew-rpt-grp-field-2");
			$this->IuranNama2->ViewCustomAttributes = "";
			$this->IuranNama2->GroupViewValue = DisplayGroupValue($this->IuranNama2, $this->IuranNama2->GroupViewValue);

			// Jumlah
			$this->Jumlah->GroupViewValue = $this->Jumlah->groupValue();
			$this->Jumlah->GroupViewValue = FormatNumber($this->Jumlah->GroupViewValue, 0, -2, -2, -2);
			$this->Jumlah->CellCssClass = ($this->RowGroupLevel == 3 ? "ew-rpt-grp-summary-3" : "ew-rpt-grp-field-3");
			$this->Jumlah->CellCssStyle .= "text-align: right;";
			$this->Jumlah->ViewCustomAttributes = "";
			$this->Jumlah->GroupViewValue = DisplayGroupValue($this->Jumlah, $this->Jumlah->GroupViewValue);

			// JumlahBayar
			$this->JumlahBayar->SumViewValue = $this->JumlahBayar->SumValue;
			$this->JumlahBayar->SumViewValue = FormatNumber($this->JumlahBayar->SumViewValue, 0, -2, -2, -2);
			$this->JumlahBayar->CellCssStyle .= "text-align: right;";
			$this->JumlahBayar->ViewCustomAttributes = "";
			$this->JumlahBayar->CellAttrs["class"] = ($this->RowTotalType == ROWTOTAL_PAGE || $this->RowTotalType == ROWTOTAL_GRAND) ? "ew-rpt-grp-aggregate" : "ew-rpt-grp-summary-" . $this->RowGroupLevel;

			// keterangan
			$this->keterangan->HrefValue = "";

			// IuranNama2
			$this->IuranNama2->HrefValue = "";

			// Jumlah
			$this->Jumlah->HrefValue = "";

			// TahunAjaran
			$this->TahunAjaran->HrefValue = "";

			// SekolahNama
			$this->SekolahNama->HrefValue = "";

			// KelasNama
			$this->KelasNama->HrefValue = "";

			// NomorInduk
			$this->NomorInduk->HrefValue = "";

			// SiswaNama
			$this->SiswaNama->HrefValue = "";

			// IuranNama
			$this->IuranNama->HrefValue = "";

			// Periode
			$this->Periode->HrefValue = "";

			// PeriodeBulan
			$this->PeriodeBulan->HrefValue = "";

			// JumlahBayar
			$this->JumlahBayar->HrefValue = "";
		} else {
			if ($this->RowTotalType == ROWTOTAL_GROUP && $this->RowTotalSubType == ROWTOTAL_HEADER) {
			$this->RowAttrs["data-group"] = $this->keterangan->groupValue(); // Set up group attribute
			if ($this->RowGroupLevel >= 2) $this->RowAttrs["data-group-2"] = $this->IuranNama2->groupValue(); // Set up group attribute 2
			if ($this->RowGroupLevel >= 3) $this->RowAttrs["data-group-3"] = $this->Jumlah->groupValue(); // Set up group attribute 3
			} else {
			$this->RowAttrs["data-group"] = $this->keterangan->groupValue(); // Set up group attribute
			$this->RowAttrs["data-group-2"] = $this->IuranNama2->groupValue(); // Set up group attribute 2
			$this->RowAttrs["data-group-3"] = $this->Jumlah->groupValue(); // Set up group attribute 3
			}

			// keterangan
			$this->keterangan->GroupViewValue = $this->keterangan->groupValue();
			$this->keterangan->CellCssClass = "ew-rpt-grp-field-1";
			$this->keterangan->ViewCustomAttributes = "";
			$this->keterangan->GroupViewValue = DisplayGroupValue($this->keterangan, $this->keterangan->GroupViewValue);
			if (!$this->keterangan->LevelBreak)
				$this->keterangan->GroupViewValue = "&nbsp;";
			else
				$this->keterangan->LevelBreak = FALSE;

			// IuranNama2
			$this->IuranNama2->GroupViewValue = $this->IuranNama2->groupValue();
			$this->IuranNama2->CellCssClass = "ew-rpt-grp-field-2";
			$this->IuranNama2->ViewCustomAttributes = "";
			$this->IuranNama2->GroupViewValue = DisplayGroupValue($this->IuranNama2, $this->IuranNama2->GroupViewValue);
			if (!$this->IuranNama2->LevelBreak)
				$this->IuranNama2->GroupViewValue = "&nbsp;";
			else
				$this->IuranNama2->LevelBreak = FALSE;

			// Jumlah
			$this->Jumlah->GroupViewValue = $this->Jumlah->groupValue();
			$this->Jumlah->GroupViewValue = FormatNumber($this->Jumlah->GroupViewValue, 0, -2, -2, -2);
			$this->Jumlah->CellCssClass = "ew-rpt-grp-field-3";
			$this->Jumlah->CellCssStyle .= "text-align: right;";
			$this->Jumlah->ViewCustomAttributes = "";
			$this->Jumlah->GroupViewValue = DisplayGroupValue($this->Jumlah, $this->Jumlah->GroupViewValue);
			if (!$this->Jumlah->LevelBreak)
				$this->Jumlah->GroupViewValue = "&nbsp;";
			else
				$this->Jumlah->LevelBreak = FALSE;

			// TahunAjaran
			$arwrk = [];
			$arwrk[1] = $this->TahunAjaran->CurrentValue;
			$this->TahunAjaran->ViewValue = $this->TahunAjaran->displayValue($arwrk);
			$this->TahunAjaran->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->TahunAjaran->ViewCustomAttributes = "";

			// SekolahNama
			$arwrk = [];
			$arwrk[1] = $this->SekolahNama->CurrentValue;
			$this->SekolahNama->ViewValue = $this->SekolahNama->displayValue($arwrk);
			$this->SekolahNama->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->SekolahNama->ViewCustomAttributes = "";

			// KelasNama
			$arwrk = [];
			$arwrk[1] = $this->KelasNama->CurrentValue;
			$this->KelasNama->ViewValue = $this->KelasNama->displayValue($arwrk);
			$this->KelasNama->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->KelasNama->ViewCustomAttributes = "";

			// NomorInduk
			$arwrk = [];
			$arwrk[1] = $this->NomorInduk->CurrentValue;
			$arwrk[2] = $this->SiswaNama->CurrentValue;
			$this->NomorInduk->ViewValue = $this->NomorInduk->displayValue($arwrk);
			$this->NomorInduk->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->NomorInduk->ViewCustomAttributes = "";

			// SiswaNama
			$arwrk = [];
			$arwrk[1] = $this->NomorInduk->CurrentValue;
			$arwrk[2] = $this->SiswaNama->CurrentValue;
			$this->SiswaNama->ViewValue = $this->SiswaNama->displayValue($arwrk);
			$this->SiswaNama->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->SiswaNama->ViewCustomAttributes = "";

			// IuranNama
			$curVal = strval($this->IuranNama->CurrentValue);
			if ($curVal != "") {
				$this->IuranNama->ViewValue = $this->IuranNama->lookupCacheOption($curVal);
				if ($this->IuranNama->ViewValue === NULL) { // Lookup from database
					$arwrk = explode(",", $curVal);
					$filterWrk = "";
					foreach ($arwrk as $wrk) {
						if ($filterWrk != "")
							$filterWrk .= " OR ";
						$filterWrk .= "`IuranNama`" . SearchString("=", trim($wrk), DATATYPE_STRING, "");
					}
					$sqlWrk = $this->IuranNama->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$this->IuranNama->ViewValue = new OptionValues();
						$ari = 0;
						while (!$rswrk->EOF) {
							$arwrk = [];
							$arwrk[1] = $rswrk->fields('df');
							$this->IuranNama->ViewValue->add($this->IuranNama->displayValue($arwrk));
							$rswrk->MoveNext();
							$ari++;
						}
						$rswrk->Close();
					} else {
						$this->IuranNama->ViewValue = $this->IuranNama->CurrentValue;
					}
				}
			} else {
				$this->IuranNama->ViewValue = NULL;
			}
			$this->IuranNama->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->IuranNama->ViewCustomAttributes = "";

			// Periode
			$arwrk = [];
			$arwrk[1] = FormatNumber($this->Periode->CurrentValue, 0, -2, -2, -2);
			$this->Periode->ViewValue = $this->Periode->displayValue($arwrk);
			$this->Periode->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->Periode->ViewCustomAttributes = "";

			// PeriodeBulan
			$this->PeriodeBulan->ViewValue = $this->PeriodeBulan->CurrentValue;
			$this->PeriodeBulan->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->PeriodeBulan->ViewCustomAttributes = "";

			// JumlahBayar
			$this->JumlahBayar->ViewValue = $this->JumlahBayar->CurrentValue;
			$this->JumlahBayar->ViewValue = FormatNumber($this->JumlahBayar->ViewValue, 0, -2, -2, -2);
			$this->JumlahBayar->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->JumlahBayar->CellCssStyle .= "text-align: right;";
			$this->JumlahBayar->ViewCustomAttributes = "";

			// keterangan
			$this->keterangan->LinkCustomAttributes = "";
			$this->keterangan->HrefValue = "";
			$this->keterangan->TooltipValue = "";

			// IuranNama2
			$this->IuranNama2->LinkCustomAttributes = "";
			$this->IuranNama2->HrefValue = "";
			$this->IuranNama2->TooltipValue = "";

			// Jumlah
			$this->Jumlah->LinkCustomAttributes = "";
			$this->Jumlah->HrefValue = "";
			$this->Jumlah->TooltipValue = "";

			// TahunAjaran
			$this->TahunAjaran->LinkCustomAttributes = "";
			$this->TahunAjaran->HrefValue = "";
			$this->TahunAjaran->TooltipValue = "";

			// SekolahNama
			$this->SekolahNama->LinkCustomAttributes = "";
			$this->SekolahNama->HrefValue = "";
			$this->SekolahNama->TooltipValue = "";

			// KelasNama
			$this->KelasNama->LinkCustomAttributes = "";
			$this->KelasNama->HrefValue = "";
			$this->KelasNama->TooltipValue = "";

			// NomorInduk
			$this->NomorInduk->LinkCustomAttributes = "";
			$this->NomorInduk->HrefValue = "";
			$this->NomorInduk->TooltipValue = "";

			// SiswaNama
			$this->SiswaNama->LinkCustomAttributes = "";
			$this->SiswaNama->HrefValue = "";
			$this->SiswaNama->TooltipValue = "";

			// IuranNama
			$this->IuranNama->LinkCustomAttributes = "";
			$this->IuranNama->HrefValue = "";
			$this->IuranNama->TooltipValue = "";

			// Periode
			$this->Periode->LinkCustomAttributes = "";
			$this->Periode->HrefValue = "";
			$this->Periode->TooltipValue = "";

			// PeriodeBulan
			$this->PeriodeBulan->LinkCustomAttributes = "";
			$this->PeriodeBulan->HrefValue = "";
			$this->PeriodeBulan->TooltipValue = "";

			// JumlahBayar
			$this->JumlahBayar->LinkCustomAttributes = "";
			$this->JumlahBayar->HrefValue = "";
			$this->JumlahBayar->TooltipValue = "";
		}

		// Call Cell_Rendered event
		if ($this->RowType == ROWTYPE_TOTAL) { // Summary row

			// keterangan
			$currentValue = $this->keterangan->GroupViewValue;
			$viewValue = &$this->keterangan->GroupViewValue;
			$viewAttrs = &$this->keterangan->ViewAttrs;
			$cellAttrs = &$this->keterangan->CellAttrs;
			$hrefValue = &$this->keterangan->HrefValue;
			$linkAttrs = &$this->keterangan->LinkAttrs;
			$this->Cell_Rendered($this->keterangan, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// IuranNama2
			$currentValue = $this->IuranNama2->GroupViewValue;
			$viewValue = &$this->IuranNama2->GroupViewValue;
			$viewAttrs = &$this->IuranNama2->ViewAttrs;
			$cellAttrs = &$this->IuranNama2->CellAttrs;
			$hrefValue = &$this->IuranNama2->HrefValue;
			$linkAttrs = &$this->IuranNama2->LinkAttrs;
			$this->Cell_Rendered($this->IuranNama2, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// Jumlah
			$currentValue = $this->Jumlah->GroupViewValue;
			$viewValue = &$this->Jumlah->GroupViewValue;
			$viewAttrs = &$this->Jumlah->ViewAttrs;
			$cellAttrs = &$this->Jumlah->CellAttrs;
			$hrefValue = &$this->Jumlah->HrefValue;
			$linkAttrs = &$this->Jumlah->LinkAttrs;
			$this->Cell_Rendered($this->Jumlah, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// JumlahBayar
			$currentValue = $this->JumlahBayar->SumValue;
			$viewValue = &$this->JumlahBayar->SumViewValue;
			$viewAttrs = &$this->JumlahBayar->ViewAttrs;
			$cellAttrs = &$this->JumlahBayar->CellAttrs;
			$hrefValue = &$this->JumlahBayar->HrefValue;
			$linkAttrs = &$this->JumlahBayar->LinkAttrs;
			$this->Cell_Rendered($this->JumlahBayar, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);
		} else {

			// keterangan
			$currentValue = $this->keterangan->groupValue();
			$viewValue = &$this->keterangan->GroupViewValue;
			$viewAttrs = &$this->keterangan->ViewAttrs;
			$cellAttrs = &$this->keterangan->CellAttrs;
			$hrefValue = &$this->keterangan->HrefValue;
			$linkAttrs = &$this->keterangan->LinkAttrs;
			$this->Cell_Rendered($this->keterangan, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// IuranNama2
			$currentValue = $this->IuranNama2->groupValue();
			$viewValue = &$this->IuranNama2->GroupViewValue;
			$viewAttrs = &$this->IuranNama2->ViewAttrs;
			$cellAttrs = &$this->IuranNama2->CellAttrs;
			$hrefValue = &$this->IuranNama2->HrefValue;
			$linkAttrs = &$this->IuranNama2->LinkAttrs;
			$this->Cell_Rendered($this->IuranNama2, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// Jumlah
			$currentValue = $this->Jumlah->groupValue();
			$viewValue = &$this->Jumlah->GroupViewValue;
			$viewAttrs = &$this->Jumlah->ViewAttrs;
			$cellAttrs = &$this->Jumlah->CellAttrs;
			$hrefValue = &$this->Jumlah->HrefValue;
			$linkAttrs = &$this->Jumlah->LinkAttrs;
			$this->Cell_Rendered($this->Jumlah, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// TahunAjaran
			$currentValue = $this->TahunAjaran->groupValue();
			$viewValue = &$this->TahunAjaran->GroupViewValue;
			$viewAttrs = &$this->TahunAjaran->ViewAttrs;
			$cellAttrs = &$this->TahunAjaran->CellAttrs;
			$hrefValue = &$this->TahunAjaran->HrefValue;
			$linkAttrs = &$this->TahunAjaran->LinkAttrs;
			$this->Cell_Rendered($this->TahunAjaran, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// SekolahNama
			$currentValue = $this->SekolahNama->groupValue();
			$viewValue = &$this->SekolahNama->GroupViewValue;
			$viewAttrs = &$this->SekolahNama->ViewAttrs;
			$cellAttrs = &$this->SekolahNama->CellAttrs;
			$hrefValue = &$this->SekolahNama->HrefValue;
			$linkAttrs = &$this->SekolahNama->LinkAttrs;
			$this->Cell_Rendered($this->SekolahNama, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// KelasNama
			$currentValue = $this->KelasNama->groupValue();
			$viewValue = &$this->KelasNama->GroupViewValue;
			$viewAttrs = &$this->KelasNama->ViewAttrs;
			$cellAttrs = &$this->KelasNama->CellAttrs;
			$hrefValue = &$this->KelasNama->HrefValue;
			$linkAttrs = &$this->KelasNama->LinkAttrs;
			$this->Cell_Rendered($this->KelasNama, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// NomorInduk
			$currentValue = $this->NomorInduk->groupValue();
			$viewValue = &$this->NomorInduk->GroupViewValue;
			$viewAttrs = &$this->NomorInduk->ViewAttrs;
			$cellAttrs = &$this->NomorInduk->CellAttrs;
			$hrefValue = &$this->NomorInduk->HrefValue;
			$linkAttrs = &$this->NomorInduk->LinkAttrs;
			$this->Cell_Rendered($this->NomorInduk, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// SiswaNama
			$currentValue = $this->SiswaNama->groupValue();
			$viewValue = &$this->SiswaNama->GroupViewValue;
			$viewAttrs = &$this->SiswaNama->ViewAttrs;
			$cellAttrs = &$this->SiswaNama->CellAttrs;
			$hrefValue = &$this->SiswaNama->HrefValue;
			$linkAttrs = &$this->SiswaNama->LinkAttrs;
			$this->Cell_Rendered($this->SiswaNama, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// IuranNama
			$currentValue = $this->IuranNama->groupValue();
			$viewValue = &$this->IuranNama->GroupViewValue;
			$viewAttrs = &$this->IuranNama->ViewAttrs;
			$cellAttrs = &$this->IuranNama->CellAttrs;
			$hrefValue = &$this->IuranNama->HrefValue;
			$linkAttrs = &$this->IuranNama->LinkAttrs;
			$this->Cell_Rendered($this->IuranNama, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// Periode
			$currentValue = $this->Periode->groupValue();
			$viewValue = &$this->Periode->GroupViewValue;
			$viewAttrs = &$this->Periode->ViewAttrs;
			$cellAttrs = &$this->Periode->CellAttrs;
			$hrefValue = &$this->Periode->HrefValue;
			$linkAttrs = &$this->Periode->LinkAttrs;
			$this->Cell_Rendered($this->Periode, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// PeriodeBulan
			$currentValue = $this->PeriodeBulan->groupValue();
			$viewValue = &$this->PeriodeBulan->GroupViewValue;
			$viewAttrs = &$this->PeriodeBulan->ViewAttrs;
			$cellAttrs = &$this->PeriodeBulan->CellAttrs;
			$hrefValue = &$this->PeriodeBulan->HrefValue;
			$linkAttrs = &$this->PeriodeBulan->LinkAttrs;
			$this->Cell_Rendered($this->PeriodeBulan, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// JumlahBayar
			$currentValue = $this->JumlahBayar->groupValue();
			$viewValue = &$this->JumlahBayar->GroupViewValue;
			$viewAttrs = &$this->JumlahBayar->ViewAttrs;
			$cellAttrs = &$this->JumlahBayar->CellAttrs;
			$hrefValue = &$this->JumlahBayar->HrefValue;
			$linkAttrs = &$this->JumlahBayar->LinkAttrs;
			$this->Cell_Rendered($this->JumlahBayar, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);
		}

		// Call Row_Rendered event
		$this->Row_Rendered();
		$this->setupFieldCount();
	}
	private $_groupCounts = [];

	// Get group count
	public function getGroupCount(...$args)
	{
		$key = "";
		foreach($args as $arg) {
			if ($key != "")
				$key .= "_";
			$key .= strval($arg);
		}
		if ($key == "") {
			return -1;
		} elseif ($key == "0") { // Number of first level groups
			$i = 1;
			while (isset($this->_groupCounts[strval($i)]))
				$i++;
			return $i - 1;
		}
		return isset($this->_groupCounts[$key]) ? $this->_groupCounts[$key] : -1;
	}

	// Set group count
	public function setGroupCount($value, ...$args)
	{
		$key = "";
		foreach($args as $arg) {
			if ($key != "")
				$key .= "_";
			$key .= strval($arg);
		}
		if ($key == "")
			return;
		$this->_groupCounts[$key] = $value;
	}

	// Setup field count
	protected function setupFieldCount()
	{
		$this->GroupColumnCount = 0;
		$this->SubGroupColumnCount = 0;
		$this->DetailColumnCount = 0;
		if ($this->keterangan->Visible)
			$this->GroupColumnCount += 1;
		if ($this->IuranNama2->Visible) {
			$this->GroupColumnCount += 1;
			$this->SubGroupColumnCount += 1;
		}
		if ($this->Jumlah->Visible) {
			$this->GroupColumnCount += 1;
			$this->SubGroupColumnCount += 1;
		}
		if ($this->TahunAjaran->Visible)
			$this->DetailColumnCount += 1;
		if ($this->SekolahNama->Visible)
			$this->DetailColumnCount += 1;
		if ($this->KelasNama->Visible)
			$this->DetailColumnCount += 1;
		if ($this->NomorInduk->Visible)
			$this->DetailColumnCount += 1;
		if ($this->SiswaNama->Visible)
			$this->DetailColumnCount += 1;
		if ($this->IuranNama->Visible)
			$this->DetailColumnCount += 1;
		if ($this->Periode->Visible)
			$this->DetailColumnCount += 1;
		if ($this->PeriodeBulan->Visible)
			$this->DetailColumnCount += 1;
		if ($this->JumlahBayar->Visible)
			$this->DetailColumnCount += 1;
	}

	// Get export HTML tag
	protected function getExportTag($type, $custom = FALSE)
	{
		global $Language;
		if (SameText($type, "excel")) {
			return '<a class="ew-export-link ew-excel" title="' . HtmlEncode($Language->phrase("ExportToExcel", TRUE)) . '" data-caption="' . HtmlEncode($Language->phrase("ExportToExcel", TRUE)) . '" href="#" onclick="return ew.exportWithCharts(event, \'' . $this->ExportExcelUrl . '\', \'' . session_id() . '\');">' . $Language->phrase("ExportToExcel") . '</a>';
		} elseif (SameText($type, "word")) {
			return '<a class="ew-export-link ew-word" title="' . HtmlEncode($Language->phrase("ExportToWord", TRUE)) . '" data-caption="' . HtmlEncode($Language->phrase("ExportToWord", TRUE)) . '" href="#" onclick="return ew.exportWithCharts(event, \'' . $this->ExportWordUrl . '\', \'' . session_id() . '\');">' . $Language->phrase("ExportToWord") . '</a>';
		} elseif (SameText($type, "pdf")) {
			return '<a class="ew-export-link ew-pdf" title="' . HtmlEncode($Language->phrase("ExportToPDF", TRUE)) . '" data-caption="' . HtmlEncode($Language->phrase("ExportToPDF", TRUE)) . '" href="#" onclick="return ew.exportWithCharts(event, \'' . $this->ExportPdfUrl . '\', \'' . session_id() . '\');">' . $Language->phrase("ExportToPDF") . '</a>';
		} elseif (SameText($type, "email")) {
			return '<a class="ew-export-link ew-email" title="' . HtmlEncode($Language->phrase("ExportToEmail", TRUE)) . '" data-caption="' . HtmlEncode($Language->phrase("ExportToEmail", TRUE)) . '" id="emf_r102_lap_tunggak" href="#" onclick="return ew.emailDialogShow({ lnk: \'emf_r102_lap_tunggak\', hdr: ew.language.phrase(\'ExportToEmailText\'), url: \'' . $this->pageUrl() . 'export=email\', exportid: \'' . session_id() . '\', el: this });">' . $Language->phrase("ExportToEmail") . '</a>';
		} elseif (SameText($type, "print")) {
			return "<a href=\"" . $this->ExportPrintUrl . "\" class=\"ew-export-link ew-print\" title=\"" . HtmlEncode($Language->phrase("PrinterFriendlyText")) . "\" data-caption=\"" . HtmlEncode($Language->phrase("PrinterFriendlyText")) . "\">" . $Language->phrase("PrinterFriendly") . "</a>";
		}
	}

	// Set up export options
	protected function setupExportOptions()
	{
		global $Language;

		// Printer friendly
		$item = &$this->ExportOptions->add("print");
		$item->Body = $this->getExportTag("print");
		$item->Visible = TRUE;

		// Export to Excel
		$item = &$this->ExportOptions->add("excel");
		$item->Body = $this->getExportTag("excel");
		$item->Visible = TRUE;

		// Export to Word
		$item = &$this->ExportOptions->add("word");
		$item->Body = $this->getExportTag("word");
		$item->Visible = FALSE;

		// Export to Pdf
		$item = &$this->ExportOptions->add("pdf");
		$item->Body = $this->getExportTag("pdf");
		$item->Visible = FALSE;

		// Export to Email
		$item = &$this->ExportOptions->add("email");
		$item->Body = $this->getExportTag("email");
		$item->Visible = FALSE;

		// Drop down button for export
		$this->ExportOptions->UseButtonGroup = TRUE;
		$this->ExportOptions->UseDropDownButton = FALSE;
		if ($this->ExportOptions->UseButtonGroup && IsMobile())
			$this->ExportOptions->UseDropDownButton = TRUE;
		$this->ExportOptions->DropDownButtonPhrase = $Language->phrase("ButtonExport");

		// Add group option item
		$item = &$this->ExportOptions->add($this->ExportOptions->GroupOptionName);
		$item->Body = "";
		$item->Visible = FALSE;

		// Hide options for export
		if ($this->isExport())
			$this->ExportOptions->hideAllOptions();
	}

	// Set up search options
	protected function setupSearchOptions()
	{
		global $Language;
		$this->SearchOptions = new ListOptions("div");
		$this->SearchOptions->TagClassName = "ew-search-option";

		// Search button
		$item = &$this->SearchOptions->add("searchtoggle");
		$searchToggleClass = ($this->SearchWhere != "") ? " active" : " active";
		$item->Body = "<a class=\"btn btn-default ew-search-toggle" . $searchToggleClass . "\" href=\"#\" role=\"button\" title=\"" . $Language->phrase("SearchPanel") . "\" data-caption=\"" . $Language->phrase("SearchPanel") . "\" data-toggle=\"button\" data-form=\"fsummary\">" . $Language->phrase("SearchLink") . "</a>";
		$item->Visible = TRUE;

		// Show all button
		$item = &$this->SearchOptions->add("showall");
		$item->Body = "<a class=\"btn btn-default ew-show-all\" title=\"" . $Language->phrase("ResetSearch") . "\" data-caption=\"" . $Language->phrase("ResetSearch") . "\" href=\"" . $this->pageUrl() . "cmd=reset\">" . $Language->phrase("ResetSearchBtn") . "</a>";
		$item->Visible = ($this->SearchWhere != $this->DefaultSearchWhere && $this->SearchWhere != "0=101");

		// Button group for search
		$this->SearchOptions->UseDropDownButton = FALSE;
		$this->SearchOptions->UseButtonGroup = TRUE;
		$this->SearchOptions->DropDownButtonPhrase = $Language->phrase("ButtonSearch");

		// Add group option item
		$item = &$this->SearchOptions->add($this->SearchOptions->GroupOptionName);
		$item->Body = "";
		$item->Visible = FALSE;

		// Hide search options
		if ($this->isExport() || $this->CurrentAction)
			$this->SearchOptions->hideAllOptions();
		global $Security;
		if (!$Security->canSearch()) {
			$this->SearchOptions->hideAllOptions();
			$this->FilterOptions->hideAllOptions();
		}
	}

	// Set up Breadcrumb
	protected function setupBreadcrumb()
	{
		global $Breadcrumb, $Language;
		$Breadcrumb = new Breadcrumb();
		$url = substr(CurrentUrl(), strrpos(CurrentUrl(), "/")+1);
		$url = preg_replace('/\?cmd=reset(all){0,1}$/i', '', $url); // Remove cmd=reset / cmd=resetall
		$Breadcrumb->add("summary", $this->TableVar, $url, "", $this->TableVar, TRUE);
	}

	// Setup lookup options
	public function setupLookupOptions($fld)
	{
		if ($fld->Lookup !== NULL && $fld->Lookup->Options === NULL) {

			// Get default connection and filter
			$conn = $this->getConnection();
			$lookupFilter = "";

			// No need to check any more
			$fld->Lookup->Options = [];

			// Set up lookup SQL and connection
			switch ($fld->FieldVar) {
				case "x_TahunAjaran":
					$conn = Conn("");
					break;
				case "x_SekolahNama":
					$conn = Conn("");
					break;
				case "x_KelasNama":
					$conn = Conn("");
					break;
				case "x_NomorInduk":
					$conn = Conn("");
					break;
				case "x_SiswaNama":
					$conn = Conn("");
					break;
				case "x_IuranNama":
					$conn = Conn("");
					break;
				case "x_Periode":
					$conn = Conn("");
					$lookupFilter = function() {
						return "`Periode` < `PeriodeNow`";
					};
					$lookupFilter = $lookupFilter->bindTo($this);
					break;
				default:
					$lookupFilter = "";
					break;
			}

			// Always call to Lookup->getSql so that user can setup Lookup->Options in Lookup_Selecting server event
			$sql = $fld->Lookup->getSql(FALSE, "", $lookupFilter, $this);

			// Set up lookup cache
			if ($fld->UseLookupCache && $sql != "" && count($fld->Lookup->Options) == 0) {
				$totalCnt = $this->getRecordCount($sql, $conn);
				if ($totalCnt > $fld->LookupCacheCount) // Total count > cache count, do not cache
					return;
				$rs = $conn->execute($sql);
				$ar = [];
				while ($rs && !$rs->EOF) {
					$row = &$rs->fields;

					// Format the field values
					switch ($fld->FieldVar) {
						case "x_TahunAjaran":
							break;
						case "x_SekolahNama":
							break;
						case "x_KelasNama":
							break;
						case "x_NomorInduk":
							break;
						case "x_SiswaNama":
							break;
						case "x_IuranNama":
							break;
						case "x_Periode":
							$row[1] = FormatNumber($row[1], 0, -2, -2, -2);
							$row['df'] = $row[1];
							break;
					}
					$ar[strval($row[0])] = $row;
					$rs->moveNext();
				}
				if ($rs)
					$rs->close();
				$fld->Lookup->Options = $ar;
			}
		}
	}

	// Set up other options
	protected function setupOtherOptions()
	{
		global $Language, $Security;

		// Filter button
		$item = &$this->FilterOptions->add("savecurrentfilter");
		$item->Body = "<a class=\"ew-save-filter\" data-form=\"fsummary\" href=\"#\" onclick=\"return false;\">" . $Language->phrase("SaveCurrentFilter") . "</a>";
		$item->Visible = TRUE;
		$item = &$this->FilterOptions->add("deletefilter");
		$item->Body = "<a class=\"ew-delete-filter\" data-form=\"fsummary\" href=\"#\" onclick=\"return false;\">" . $Language->phrase("DeleteFilter") . "</a>";
		$item->Visible = TRUE;
		$this->FilterOptions->UseDropDownButton = TRUE;
		$this->FilterOptions->UseButtonGroup = !$this->FilterOptions->UseDropDownButton;
		$this->FilterOptions->DropDownButtonPhrase = $Language->phrase("Filters");

		// Add group option item
		$item = &$this->FilterOptions->add($this->FilterOptions->GroupOptionName);
		$item->Body = "";
		$item->Visible = FALSE;
	}

	// Export report to Excel
	public function exportReportExcel($html)
	{
		global $ExportFileName;
		$charset = Config("PROJECT_CHARSET");
		AddHeader("Content-Type", "application/vnd.ms-excel" . ($charset ? "; charset=" . $charset : ""));
		AddHeader("Content-Disposition", "attachment; filename=" . $ExportFileName . ".xls");
		AddHeader("Set-Cookie", "fileDownload=true; path=/");
		Write($html);
	}

// Export PDF
	public function exportReportPdf($html)
	{
		global $ExportFileName;
		@ini_set("memory_limit", Config("PDF_MEMORY_LIMIT"));
		set_time_limit(Config("PDF_TIME_LIMIT"));
		$html = CheckHtml($html);
		if (Config("DEBUG")) // Add debug message
			$html = str_replace("</body>", GetDebugMessage() . "</body>", $html);
		$dompdf = new \Dompdf\Dompdf(["pdf_backend" => "Cpdf"]);
		$doc = new \DOMDocument("1.0", "utf-8");
		@$doc->loadHTML('<?xml encoding="uft-8">' . ConvertToUtf8($html)); // Convert to utf-8
		$spans = $doc->getElementsByTagName("span");
		foreach ($spans as $span) {
			$classNames = $span->getAttribute("class");
			if ($classNames == "ew-filter-caption") // Insert colon
				$span->parentNode->insertBefore($doc->createElement("span", ":&nbsp;"), $span->nextSibling);
			elseif (preg_match('/\bicon\-\w+\b/', $classNames)) // Remove icons
				$span->parentNode->removeChild($span);
		}
		$images = $doc->getElementsByTagName("img");
		$pageSize = $this->ExportPageSize;
		$pageOrientation = $this->ExportPageOrientation;
		$portrait = SameText($pageOrientation, "portrait");
		foreach ($images as $image) {
			$imagefn = $image->getAttribute("src");
			if (file_exists($imagefn)) {
				$imagefn = realpath($imagefn);
				$size = getimagesize($imagefn); // Get image size
				if ($size[0] != 0) {
					if (SameText($pageSize, "letter")) { // Letter paper (8.5 in. by 11 in.)
						$w = $portrait ? 216 : 279;
					} elseif (SameText($pageSize, "legal")) { // Legal paper (8.5 in. by 14 in.)
						$w = $portrait ? 216 : 356;
					} else {
						$w = $portrait ? 210 : 297; // A4 paper (210 mm by 297 mm)
					}
					$w = min($size[0], ($w - 20 * 2) / 25.4 * 72 * Config("PDF_IMAGE_SCALE_FACTOR")); // Resize image, adjust the scale factor if necessary
					$h = $w / $size[0] * $size[1];
					$image->setAttribute("width", $w);
					$image->setAttribute("height", $h);
				}
			}
		}
		$html = $doc->saveHTML();
		$html = ConvertFromUtf8($html);
		$dompdf->load_html($html);
		$dompdf->set_paper($pageSize, $pageOrientation);
		$dompdf->render();
		header('Set-Cookie: fileDownload=true; path=/');
		$exportFile = EndsText(".pdf", $ExportFileName) ? $ExportFileName : $ExportFileName . ".pdf";
		$dompdf->stream($exportFile, ["Attachment" => 1]); // 0 to open in browser, 1 to download
		DeleteTempImages();
		exit();
	}

	// Set up starting group
	protected function setupStartGroup()
	{

		// Exit if no groups
		if ($this->DisplayGroups == 0)
			return;
		$startGrp = Param(Config("TABLE_START_GROUP"), "");
		$pageNo = Param("pageno", "");

		// Check for a 'start' parameter
		if ($startGrp != "") {
			$this->StartGroup = $startGrp;
			$this->setStartGroup($this->StartGroup);
		} elseif ($pageNo != "") {
			if (is_numeric($pageNo)) {
				$this->StartGroup = ($pageNo - 1) * $this->DisplayGroups + 1;
				if ($this->StartGroup <= 0) {
					$this->StartGroup = 1;
				} elseif ($this->StartGroup >= intval(($this->TotalGroups - 1) / $this->DisplayGroups) * $this->DisplayGroups + 1) {
					$this->StartGroup = intval(($this->TotalGroups - 1) / $this->DisplayGroups) * $this->DisplayGroups + 1;
				}
				$this->setStartGroup($this->StartGroup);
			} else {
				$this->StartGroup = $this->getStartGroup();
			}
		} else {
			$this->StartGroup = $this->getStartGroup();
		}

		// Check if correct start group counter
		if (!is_numeric($this->StartGroup) || $this->StartGroup == "") { // Avoid invalid start group counter
			$this->StartGroup = 1; // Reset start group counter
			$this->setStartGroup($this->StartGroup);
		} elseif (intval($this->StartGroup) > intval($this->TotalGroups)) { // Avoid starting group > total groups
			$this->StartGroup = intval(($this->TotalGroups - 1) / $this->DisplayGroups) * $this->DisplayGroups + 1; // Point to last page first group
			$this->setStartGroup($this->StartGroup);
		} elseif (($this->StartGroup-1) % $this->DisplayGroups != 0) {
			$this->StartGroup = intval(($this->StartGroup - 1) / $this->DisplayGroups) * $this->DisplayGroups + 1; // Point to page boundary
			$this->setStartGroup($this->StartGroup);
		}
	}

	// Reset pager
	protected function resetPager()
	{

		// Reset start position (reset command)
		$this->StartGroup = 1;
		$this->setStartGroup($this->StartGroup);
	}

	// Set up number of groups displayed per page
	protected function setupDisplayGroups()
	{
		if (Param(Config("TABLE_GROUP_PER_PAGE")) !== NULL) {
			$wrk = Param(Config("TABLE_GROUP_PER_PAGE"));
			if (is_numeric($wrk)) {
				$this->DisplayGroups = intval($wrk);
			} else {
				if (strtoupper($wrk) == "ALL") { // Display all groups
					$this->DisplayGroups = -1;
				} else {
					$this->DisplayGroups = 3; // Non-numeric, load default
				}
			}
			$this->setGroupPerPage($this->DisplayGroups); // Save to session

			// Reset start position (reset command)
			$this->StartGroup = 1;
			$this->setStartGroup($this->StartGroup);
		} else {
			if ($this->getGroupPerPage() != "") {
				$this->DisplayGroups = $this->getGroupPerPage(); // Restore from session
			} else {
				$this->DisplayGroups = 3; // Load default
			}
		}
	}

	// Get sort parameters based on sort links clicked
	protected function getSort()
	{
		if ($this->DrillDown)
			return "`Periode` ASC";
		$resetSort = Param("cmd") === "resetsort";
		$orderBy = Param("order", "");
		$orderType = Param("ordertype", "");

		// Check for Ctrl pressed
		$ctrl = (Param("ctrl") !== NULL);

		// Check for a resetsort command
		if ($resetSort) {
			$this->setOrderBy("");
			$this->setStartGroup(1);
			$this->keterangan->setSort("");
			$this->IuranNama2->setSort("");
			$this->Jumlah->setSort("");
			$this->TahunAjaran->setSort("");
			$this->SekolahNama->setSort("");
			$this->KelasNama->setSort("");
			$this->NomorInduk->setSort("");
			$this->SiswaNama->setSort("");
			$this->IuranNama->setSort("");
			$this->Periode->setSort("");
			$this->PeriodeBulan->setSort("");
			$this->JumlahBayar->setSort("");

		// Check for an Order parameter
		} elseif ($orderBy != "") {
			$this->CurrentOrder = $orderBy;
			$this->CurrentOrderType = $orderType;
			$this->updateSort($this->keterangan, $ctrl); // keterangan
			$this->updateSort($this->IuranNama2, $ctrl); // IuranNama2
			$this->updateSort($this->Jumlah, $ctrl); // Jumlah
			$this->updateSort($this->TahunAjaran, $ctrl); // TahunAjaran
			$this->updateSort($this->SekolahNama, $ctrl); // SekolahNama
			$this->updateSort($this->KelasNama, $ctrl); // KelasNama
			$this->updateSort($this->NomorInduk, $ctrl); // NomorInduk
			$this->updateSort($this->SiswaNama, $ctrl); // SiswaNama
			$this->updateSort($this->IuranNama, $ctrl); // IuranNama
			$this->updateSort($this->Periode, $ctrl); // Periode
			$this->updateSort($this->PeriodeBulan, $ctrl); // PeriodeBulan
			$this->updateSort($this->JumlahBayar, $ctrl); // JumlahBayar
			$sortSql = $this->sortSql();
			$this->setOrderBy($sortSql);
			$this->setStartGroup(1);
		}

		// Set up default sort
		if ($this->getOrderBy() == "") {
			$this->setOrderBy("`Periode` ASC");
			$this->Periode->setSort("ASC");
		}
		return $this->getOrderBy();
	}

	// Return extended filter
	protected function getExtendedFilter()
	{
		global $FormError;
		$filter = "";
		if ($this->DrillDown)
			return "";
		$restoreSession = FALSE;
		$restoreDefault = FALSE;

		// Reset search command
		if (Get("cmd", "") == "reset") {

			// Set default values
			$this->TahunAjaran->AdvancedSearch->unsetSession();
			$this->SekolahNama->AdvancedSearch->unsetSession();
			$this->KelasNama->AdvancedSearch->unsetSession();
			$this->NomorInduk->AdvancedSearch->unsetSession();
			$this->SiswaNama->AdvancedSearch->unsetSession();
			$this->IuranNama->AdvancedSearch->unsetSession();
			$this->Periode->AdvancedSearch->unsetSession();
			$restoreDefault = TRUE;
		} else {
			$restoreSession = !$this->SearchCommand;

			// Field TahunAjaran
			$this->getDropDownValue($this->TahunAjaran);

			// Field SekolahNama
			$this->getDropDownValue($this->SekolahNama);

			// Field KelasNama
			$this->getDropDownValue($this->KelasNama);

			// Field NomorInduk
			$this->getDropDownValue($this->NomorInduk);

			// Field SiswaNama
			$this->getDropDownValue($this->SiswaNama);

			// Field IuranNama
			$this->getDropDownValue($this->IuranNama);

			// Field Periode
			$this->getDropDownValue($this->Periode);
			if (!$this->validateForm()) {
				$this->setFailureMessage($FormError);
				return $filter;
			}
		}

		// Restore session
		if ($restoreSession) {
			$restoreDefault = TRUE;
			if ($this->TahunAjaran->AdvancedSearch->issetSession()) { // Field TahunAjaran
				$this->TahunAjaran->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->SekolahNama->AdvancedSearch->issetSession()) { // Field SekolahNama
				$this->SekolahNama->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->KelasNama->AdvancedSearch->issetSession()) { // Field KelasNama
				$this->KelasNama->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->NomorInduk->AdvancedSearch->issetSession()) { // Field NomorInduk
				$this->NomorInduk->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->SiswaNama->AdvancedSearch->issetSession()) { // Field SiswaNama
				$this->SiswaNama->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->IuranNama->AdvancedSearch->issetSession()) { // Field IuranNama
				$this->IuranNama->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->Periode->AdvancedSearch->issetSession()) { // Field Periode
				$this->Periode->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
		}

		// Restore default
		if ($restoreDefault)
			$this->loadDefaultFilters();

		// Call page filter validated event
		$this->Page_FilterValidated();

		// Build SQL and save to session
		$this->buildDropDownFilter($this->TahunAjaran, $filter, $this->TahunAjaran->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field TahunAjaran
		$this->TahunAjaran->AdvancedSearch->save();
		$this->buildDropDownFilter($this->SekolahNama, $filter, $this->SekolahNama->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field SekolahNama
		$this->SekolahNama->AdvancedSearch->save();
		$this->buildDropDownFilter($this->KelasNama, $filter, $this->KelasNama->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field KelasNama
		$this->KelasNama->AdvancedSearch->save();
		$this->buildDropDownFilter($this->NomorInduk, $filter, $this->NomorInduk->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field NomorInduk
		$this->NomorInduk->AdvancedSearch->save();
		$this->buildDropDownFilter($this->SiswaNama, $filter, $this->SiswaNama->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field SiswaNama
		$this->SiswaNama->AdvancedSearch->save();
		$this->buildDropDownFilter($this->IuranNama, $filter, $this->IuranNama->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field IuranNama
		$this->IuranNama->AdvancedSearch->save();
		$this->buildDropDownFilter($this->Periode, $filter, $this->Periode->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field Periode
		$this->Periode->AdvancedSearch->save();

		// Field TahunAjaran
		LoadDropDownList($this->TahunAjaran->EditValue, $this->TahunAjaran->AdvancedSearch->SearchValue);

		// Field SekolahNama
		LoadDropDownList($this->SekolahNama->EditValue, $this->SekolahNama->AdvancedSearch->SearchValue);

		// Field KelasNama
		LoadDropDownList($this->KelasNama->EditValue, $this->KelasNama->AdvancedSearch->SearchValue);

		// Field NomorInduk
		LoadDropDownList($this->NomorInduk->EditValue, $this->NomorInduk->AdvancedSearch->SearchValue);

		// Field SiswaNama
		LoadDropDownList($this->SiswaNama->EditValue, $this->SiswaNama->AdvancedSearch->SearchValue);

		// Field IuranNama
		LoadDropDownList($this->IuranNama->EditValue, $this->IuranNama->AdvancedSearch->SearchValue);

		// Field Periode
		LoadDropDownList($this->Periode->EditValue, $this->Periode->AdvancedSearch->SearchValue);
		return $filter;
	}

	// Build dropdown filter
	protected function buildDropDownFilter(&$fld, &$filterClause, $fldOpr, $default = FALSE, $saveFilter = FALSE)
	{
		$fldVal = ($default) ? $fld->AdvancedSearch->SearchValueDefault : $fld->AdvancedSearch->SearchValue;
		$sql = "";
		if (is_array($fldVal)) {
			foreach ($fldVal as $val) {
				$wrk = $this->getDropDownFilter($fld, $val, $fldOpr);

				// Call Page Filtering event
				if (!StartsString("@@", $val))
					$this->Page_Filtering($fld, $wrk, "dropdown", $fldOpr, $val);
				if ($wrk != "") {
					if ($sql != "")
						$sql .= " OR " . $wrk;
					else
						$sql = $wrk;
				}
			}
		} else {
			$sql = $this->getDropDownFilter($fld, $fldVal, $fldOpr);

			// Call Page Filtering event
			if (!StartsString("@@", $fldVal))
				$this->Page_Filtering($fld, $sql, "dropdown", $fldOpr, $fldVal);
		}
		if ($sql != "") {
			AddFilter($filterClause, $sql);
			if ($saveFilter) $fld->CurrentFilter = $sql;
		}
	}

	// Get dropdown filter
	protected function getDropDownFilter(&$fld, $fldVal, $fldOpr)
	{
		$fldName = $fld->Name;
		$fldExpression = $fld->Expression;
		$fldDataType = $fld->DataType;
		$isMultiple = $fld->HtmlTag == "CHECKBOX" || $fld->HtmlTag == "SELECT" && $fld->SelectMultiple;
		$fldVal = strval($fldVal);
		if ($fldOpr == "") $fldOpr = "=";
		$wrk = "";
		if (SameString($fldVal, Config("NULL_VALUE"))) {
			$wrk = $fldExpression . " IS NULL";
		} elseif (SameString($fldVal, Config("NOT_NULL_VALUE"))) {
			$wrk = $fldExpression . " IS NOT NULL";
		} elseif (SameString($fldVal, EMPTY_VALUE)) {
			$wrk = $fldExpression . " = ''";
		} elseif (SameString($fldVal, ALL_VALUE)) {
			$wrk = "1 = 1";
		} else {
			if ($fld->GroupSql != "") // Use grouping SQL for search if exists
				$fldExpression = str_replace("%s", $fldExpression, $fld->GroupSql);
			if (StartsString("@@", $fldVal)) {
				$wrk = $this->getCustomFilter($fld, $fldVal, $this->Dbid);
			} elseif ($isMultiple && IsMultiSearchOperator($fldOpr) && trim($fldVal) != "" && $fldVal != INIT_VALUE && ($fldDataType == DATATYPE_STRING || $fldDataType == DATATYPE_MEMO)) {
				$wrk = GetMultiSearchSql($fld, $fldOpr, trim($fldVal), $this->Dbid);
			} else {
				if ($fldVal != "" && $fldVal != INIT_VALUE) {
					if ($fldDataType == DATATYPE_DATE && $fld->GroupSql == "" && $fldOpr != "") {
						$wrk = GetDateFilterSql($fldExpression, $fldOpr, $fldVal, $fldDataType, $this->Dbid);
					} else {
						$wrk = GetFilterSql($fldOpr, $fldVal, $fldDataType, $this->Dbid);
						if ($wrk != "") $wrk = $fldExpression . $wrk;
					}
				}
			}
		}
		return $wrk;
	}

	// Get custom filter
	protected function getCustomFilter(&$fld, $fldVal, $dbid = 0)
	{
		$wrk = "";
		if (is_array($fld->AdvancedFilters)) {
			foreach ($fld->AdvancedFilters as $filter) {
				if ($filter->ID == $fldVal && $filter->Enabled) {
					$fldExpr = $fld->Expression;
					$fn = $filter->FunctionName;
					$wrkid = StartsString("@@", $filter->ID) ? substr($filter->ID, 2) : $filter->ID;
					if ($fn != "") {
						$fn = PROJECT_NAMESPACE . $fn;
						$wrk = $fn($fldExpr, $dbid);
					} else
						$wrk = "";
					$this->Page_Filtering($fld, $wrk, "custom", $wrkid);
					break;
				}
			}
		}
		return $wrk;
	}

	// Build extended filter
	protected function buildExtendedFilter(&$fld, &$filterClause, $default = FALSE, $saveFilter = FALSE)
	{
		$wrk = GetExtendedFilter($fld, $default, $this->Dbid);
		if (!$default)
			$this->Page_Filtering($fld, $wrk, "extended", $fld->AdvancedSearch->SearchOperator, $fld->AdvancedSearch->SearchValue, $fld->AdvancedSearch->SearchCondition, $fld->AdvancedSearch->SearchOperator2, $fld->AdvancedSearch->SearchValue2);
		if ($wrk != "") {
			AddFilter($filterClause, $wrk);
			if ($saveFilter) $fld->CurrentFilter = $wrk;
		}
	}

	// Get drop down value from querystring
	protected function getDropDownValue(&$fld)
	{
		$parm = $fld->Param;
		if (IsPost())
			return FALSE; // Skip post back
		$opr = Get("z_$parm");
		if ($opr !== NULL)
			$fld->AdvancedSearch->SearchOperator = $opr;
		$val = Get("x_$parm");
		if ($val !== NULL) {
			if (is_array($val))
				$val = implode(Config("MULTIPLE_OPTION_SEPARATOR"), $val); 
			$fld->AdvancedSearch->setSearchValue($val);
			return TRUE;
		}
		return FALSE;
	}

	// Dropdown filter exist
	protected function dropDownFilterExist(&$fld, $fldOpr)
	{
		$wrk = "";
		$this->buildDropDownFilter($fld, $wrk, $fldOpr);
		return ($wrk != "");
	}

	// Extended filter exist
	protected function extendedFilterExist(&$fld)
	{
		$extWrk = "";
		$this->buildExtendedFilter($fld, $extWrk);
		return ($extWrk != "");
	}

	// Validate form
	protected function validateForm()
	{
		global $Language, $FormError;

		// Initialize form error message
		$FormError = "";

		// Check if validation required
		if (!Config("SERVER_VALIDATE"))
			return ($FormError == "");

		// Return validate result
		$validateForm = ($FormError == "");

		// Call Form_CustomValidate event
		$formCustomError = "";
		$validateForm = $validateForm && $this->Form_CustomValidate($formCustomError);
		if ($formCustomError != "") {
			$FormError .= ($FormError != "") ? "<p>&nbsp;</p>" : "";
			$FormError .= $formCustomError;
		}
		return $validateForm;
	}

	// Load default value for filters
	protected function loadDefaultFilters()
	{

		/**
		* Set up default values for extended filters
		*/
		// Field TahunAjaran

		$this->TahunAjaran->AdvancedSearch->loadDefault();

		// Field SekolahNama
		$this->SekolahNama->AdvancedSearch->loadDefault();

		// Field KelasNama
		$this->KelasNama->AdvancedSearch->loadDefault();

		// Field NomorInduk
		$this->NomorInduk->AdvancedSearch->loadDefault();

		// Field SiswaNama
		$this->SiswaNama->AdvancedSearch->loadDefault();

		// Field IuranNama
		$this->IuranNama->AdvancedSearch->loadDefault();

		// Field Periode
		$this->Periode->AdvancedSearch->loadDefault();
	}

	// Show list of filters
	public function showFilterList()
	{
		global $Language;

		// Initialize
		$filterList = "";
		$captionClass = $this->isExport("email") ? "ew-filter-caption-email" : "ew-filter-caption";
		$captionSuffix = $this->isExport("email") ? ": " : "";

		// Field TahunAjaran
		$extWrk = "";
		$this->buildDropDownFilter($this->TahunAjaran, $extWrk, $this->TahunAjaran->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->TahunAjaran->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field SekolahNama
		$extWrk = "";
		$this->buildDropDownFilter($this->SekolahNama, $extWrk, $this->SekolahNama->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->SekolahNama->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field KelasNama
		$extWrk = "";
		$this->buildDropDownFilter($this->KelasNama, $extWrk, $this->KelasNama->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->KelasNama->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field NomorInduk
		$extWrk = "";
		$this->buildDropDownFilter($this->NomorInduk, $extWrk, $this->NomorInduk->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->NomorInduk->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field SiswaNama
		$extWrk = "";
		$this->buildDropDownFilter($this->SiswaNama, $extWrk, $this->SiswaNama->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->SiswaNama->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field IuranNama
		$extWrk = "";
		$this->buildDropDownFilter($this->IuranNama, $extWrk, $this->IuranNama->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->IuranNama->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field Periode
		$extWrk = "";
		$this->buildDropDownFilter($this->Periode, $extWrk, $this->Periode->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->Periode->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Show Filters
		if ($filterList != "") {
			$message = "<div id=\"ew-filter-list\" class=\"alert alert-info d-table\"><div id=\"ew-current-filters\">" .
				$Language->phrase("CurrentFilters") . "</div>" . $filterList . "</div>";
			$this->Message_Showing($message, "");
			Write($message);
		}
	}

	// Get list of filters
	public function getFilterList()
	{

		// Initialize
		$filterList = "";

		// Field TahunAjaran
		$wrk = "";
		$wrk = ($this->TahunAjaran->AdvancedSearch->SearchValue != INIT_VALUE) ? $this->TahunAjaran->AdvancedSearch->SearchValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk != "")
			$wrk = "\"x_TahunAjaran\":\"" . JsEncode($wrk) . "\"";
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field SekolahNama
		$wrk = "";
		$wrk = ($this->SekolahNama->AdvancedSearch->SearchValue != INIT_VALUE) ? $this->SekolahNama->AdvancedSearch->SearchValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk != "")
			$wrk = "\"x_SekolahNama\":\"" . JsEncode($wrk) . "\"";
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field KelasNama
		$wrk = "";
		$wrk = ($this->KelasNama->AdvancedSearch->SearchValue != INIT_VALUE) ? $this->KelasNama->AdvancedSearch->SearchValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk != "")
			$wrk = "\"x_KelasNama\":\"" . JsEncode($wrk) . "\"";
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field NomorInduk
		$wrk = "";
		$wrk = ($this->NomorInduk->AdvancedSearch->SearchValue != INIT_VALUE) ? $this->NomorInduk->AdvancedSearch->SearchValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk != "")
			$wrk = "\"x_NomorInduk\":\"" . JsEncode($wrk) . "\"";
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field SiswaNama
		$wrk = "";
		$wrk = ($this->SiswaNama->AdvancedSearch->SearchValue != INIT_VALUE) ? $this->SiswaNama->AdvancedSearch->SearchValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk != "")
			$wrk = "\"x_SiswaNama\":\"" . JsEncode($wrk) . "\"";
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field IuranNama
		$wrk = "";
		$wrk = ($this->IuranNama->AdvancedSearch->SearchValue != INIT_VALUE) ? $this->IuranNama->AdvancedSearch->SearchValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk != "")
			$wrk = "\"x_IuranNama\":\"" . JsEncode($wrk) . "\"";
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field Periode
		$wrk = "";
		$wrk = ($this->Periode->AdvancedSearch->SearchValue != INIT_VALUE) ? $this->Periode->AdvancedSearch->SearchValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk != "")
			$wrk = "\"x_Periode\":\"" . JsEncode($wrk) . "\"";
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Return filter list in json
		if ($filterList != "")
			return "{\"data\":{" . $filterList . "}}";
		else
			return "null";
	}

	// Restore list of filters
	protected function restoreFilterList()
	{

		// Return if not reset filter
		if (Post("cmd", "") != "resetfilter")
			return FALSE;
		$filter = json_decode(Post("filter", ""), TRUE);
		return $this->setupFilterList($filter);
	}

	// Setup list of filters
	protected function setupFilterList($filter)
	{
		if (!is_array($filter))
			return FALSE;

		// Field TahunAjaran
		if (!$this->TahunAjaran->AdvancedSearch->getFromArray($filter))
			$this->TahunAjaran->AdvancedSearch->loadDefault(); // Clear filter
		$this->TahunAjaran->AdvancedSearch->save();

		// Field SekolahNama
		if (!$this->SekolahNama->AdvancedSearch->getFromArray($filter))
			$this->SekolahNama->AdvancedSearch->loadDefault(); // Clear filter
		$this->SekolahNama->AdvancedSearch->save();

		// Field KelasNama
		if (!$this->KelasNama->AdvancedSearch->getFromArray($filter))
			$this->KelasNama->AdvancedSearch->loadDefault(); // Clear filter
		$this->KelasNama->AdvancedSearch->save();

		// Field NomorInduk
		if (!$this->NomorInduk->AdvancedSearch->getFromArray($filter))
			$this->NomorInduk->AdvancedSearch->loadDefault(); // Clear filter
		$this->NomorInduk->AdvancedSearch->save();

		// Field SiswaNama
		if (!$this->SiswaNama->AdvancedSearch->getFromArray($filter))
			$this->SiswaNama->AdvancedSearch->loadDefault(); // Clear filter
		$this->SiswaNama->AdvancedSearch->save();

		// Field IuranNama
		if (!$this->IuranNama->AdvancedSearch->getFromArray($filter))
			$this->IuranNama->AdvancedSearch->loadDefault(); // Clear filter
		$this->IuranNama->AdvancedSearch->save();

		// Field Periode
		if (!$this->Periode->AdvancedSearch->getFromArray($filter))
			$this->Periode->AdvancedSearch->loadDefault(); // Clear filter
		$this->Periode->AdvancedSearch->save();
		return TRUE;
	}

	// Page Load event
	function Page_Load() {

		//echo "Page Load";
		// sembunyikan kolom saat menampilkan hasil search

		if (isset($_GET['cmd']) and $_GET['cmd'] == 'search') {
			$this->TahunAjaran->Visible = false;
			$this->SekolahNama->Visible = false;
			$this->KelasNama->Visible = false;
			$this->NomorInduk->Visible = false;
			$this->SiswaNama->Visible = false;
			$this->IuranNama->Visible = false;
		}
	}

	// Page Unload event
	function Page_Unload() {

		//echo "Page Unload";
	}

	// Page Redirecting event
	function Page_Redirecting(&$url) {

		// Example:
		//$url = "your URL";

	}

	// Message Showing event
	// $type = ''|'success'|'failure'|'warning'
	function Message_Showing(&$msg, $type) {
		if ($type == 'success') {

			//$msg = "your success message";
		} elseif ($type == 'failure') {

			//$msg = "your failure message";
		} elseif ($type == 'warning') {

			//$msg = "your warning message";
		} else {

			//$msg = "your message";
		}
	}

	// Page Render event
	function Page_Render() {

		//echo "Page Render";
	}

	// Page Data Rendering event
	function Page_DataRendering(&$header) {

		// Example:
		//$header = "your header";

	}

	// Page Data Rendered event
	function Page_DataRendered(&$footer) {

		// Example:
		//$footer = "your footer";

	}

	// Page Breaking event
	function Page_Breaking(&$break, &$content) {

		// Example:
		//$break = FALSE; // Skip page break, or
		//$content = "<div style=\"page-break-after:always;\">&nbsp;</div>"; // Modify page break content

	}

	// Load Filters event
	function Page_FilterLoad() {

		// Enter your code here
		// Example: Register/Unregister Custom Extended Filter
		//RegisterFilter($this-><Field>, 'StartsWithA', 'Starts With A', PROJECT_NAMESPACE . 'GetStartsWithAFilter'); // With function, or
		//RegisterFilter($this-><Field>, 'StartsWithA', 'Starts With A'); // No function, use Page_Filtering event
		//UnregisterFilter($this-><Field>, 'StartsWithA');

	}

	// Page Selecting event
	function Page_Selecting(&$filter) {

		// Enter your code here
		// hanya menampilkan data tunggakan hingga bulan ini

		AddFilter($filter, 'Periode < PeriodeNow');
	}

	// Page Filter Validated event
	function Page_FilterValidated() {

		// Example:
		//$this->MyField1->AdvancedSearch->SearchValue = "your search criteria"; // Search value

	}

	// Page Filtering event
	function Page_Filtering(&$fld, &$filter, $typ, $opr = "", $val = "", $cond = "", $opr2 = "", $val2 = "") {

		// Note: ALWAYS CHECK THE FILTER TYPE ($typ)! Example:
		//if ($typ == "dropdown" && $fld->Name == "MyField") // Dropdown filter
		//	$filter = "..."; // Modify the filter
		//if ($typ == "extended" && $fld->Name == "MyField") // Extended filter
		//	$filter = "..."; // Modify the filter
		//if ($typ == "popup" && $fld->Name == "MyField") // Popup filter
		//	$filter = "..."; // Modify the filter
		//if ($typ == "custom" && $opr == "..." && $fld->Name == "MyField") // Custom filter, $opr is the custom filter ID
		//	$filter = "..."; // Modify the filter

	}

	// Cell Rendered event
	function Cell_Rendered(&$Field, $CurrentValue, &$ViewValue, &$ViewAttrs, &$CellAttrs, &$HrefValue, &$LinkAttrs) {

		//$ViewValue = "xxx";
		//$ViewAttrs["class"] = "xxx";

	}

	// Form Custom Validate event
	function Form_CustomValidate(&$customError) {

		// Return error message in CustomError
		return TRUE;
	}
} // End class
?>