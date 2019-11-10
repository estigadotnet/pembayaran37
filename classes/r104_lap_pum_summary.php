<?php
namespace PHPMaker2020\project1;

/**
 * Page class
 */
class r104_lap_pum_summary extends r104_lap_pum
{

	// Page ID
	public $PageID = "summary";

	// Project ID
	public $ProjectID = "{E35313A1-BDC4-466C-B9BC-088D7A329967}";

	// Table name
	public $TableName = 'r104_lap_pum';

	// Page object name
	public $PageObjName = "r104_lap_pum_summary";

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

		// Table object (r104_lap_pum)
		if (!isset($GLOBALS["r104_lap_pum"]) || get_class($GLOBALS["r104_lap_pum"]) == PROJECT_NAMESPACE . "r104_lap_pum") {
			$GLOBALS["r104_lap_pum"] = &$this;
			$GLOBALS["Table"] = &$GLOBALS["r104_lap_pum"];
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
			define(PROJECT_NAMESPACE . "TABLE_NAME", 'r104_lap_pum');

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
		$this->tahunajaran->setVisibility();
		$this->sekolahnama->setVisibility();
		$this->kelasnama->setVisibility();
		$this->nomorinduk->setVisibility();
		$this->siswanama->setVisibility();
		$this->iurannama->setVisibility();
		$this->periode->setVisibility();
		$this->jumlah_total->setVisibility();

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

		// Get total count
		$sql = BuildReportSql($this->getSqlSelect(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), "", $this->Filter, "");
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

		// Get current page records
		if ($this->TotalGroups > 0) {
			$sql = BuildReportSql($this->getSqlSelect(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), "", $this->Filter, $this->Sort);
			$rs = $this->getRecordset($sql, $this->DisplayGroups, $this->StartGroup - 1);
			$this->DetailRecords = $rs->getRows(); // Get records
			$this->GroupCount = 1;
		}
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
		$this->setGroupCount($this->StopGroup - $this->StartGroup + 1, 1);

		// Set up pager
		$this->Pager = new PrevNextPager($this->StartGroup, $this->DisplayGroups, $this->TotalGroups, $this->PageSizes, $this->GroupRange, $this->AutoHidePager, $this->AutoHidePageSizeSelector);
	}

	// Load row values
	public function loadRowValues($record)
	{
		if ($this->RecordIndex == 1) { // Load first row data
			$data = [];
			$data["tahunajaran"] = $record['tahunajaran'];
			$data["sekolahnama"] = $record['sekolahnama'];
			$data["kelasnama"] = $record['kelasnama'];
			$data["nomorinduk"] = $record['nomorinduk'];
			$data["siswanama"] = $record['siswanama'];
			$data["iurannama"] = $record['iurannama'];
			$data["periode"] = $record['periode'];
			$data["jumlah_total"] = $record['jumlah_total'];
			$data["iuran_id"] = $record['iuran_id'];
			$this->Rows[] = $data;
		}
		$this->tahunajaran->setDbValue($record['tahunajaran']);
		$this->sekolahnama->setDbValue($record['sekolahnama']);
		$this->kelasnama->setDbValue($record['kelasnama']);
		$this->nomorinduk->setDbValue($record['nomorinduk']);
		$this->siswanama->setDbValue($record['siswanama']);
		$this->iurannama->setDbValue($record['iurannama']);
		$this->periode->setDbValue($record['periode']);
		$this->jumlah_total->setDbValue($record['jumlah_total']);
		$this->iuran_id->setDbValue($record['iuran_id']);
	}

	// Render row
	public function renderRow()
	{
		global $Security, $Language, $Language;
		$conn = $this->getConnection();
		if ($this->RowType == ROWTYPE_TOTAL && $this->RowTotalSubType == ROWTOTAL_FOOTER && $this->RowTotalType == ROWTOTAL_PAGE) { // Get Page total
			$records = &$this->DetailRecords;
			$this->jumlah_total->getSum($records);
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
				$this->tahunajaran->Count = $this->TotalCount;
				$this->sekolahnama->Count = $this->TotalCount;
				$this->kelasnama->Count = $this->TotalCount;
				$this->nomorinduk->Count = $this->TotalCount;
				$this->siswanama->Count = $this->TotalCount;
				$this->iurannama->Count = $this->TotalCount;
				$this->periode->Count = $this->TotalCount;
				$this->jumlah_total->Count = $this->TotalCount;
				$this->jumlah_total->SumValue = $rsagg->fields("sum_jumlah_total");
				$rsagg->close();
				$hasSummary = TRUE;
			}

			// Accumulate grand summary from detail records
			if (!$hasCount || !$hasSummary) {
				$sql = BuildReportSql($this->getSqlSelect(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), "", $this->Filter, "");
				$rs = $this->getRecordset($sql);
				$this->DetailRecords = $rs ? $rs->getRows() : [];
			$this->jumlah_total->getSum($this->DetailRecords);
			}
		}

		// Call Row_Rendering event
		$this->Row_Rendering();

		// tahunajaran
		// sekolahnama
		// kelasnama
		// nomorinduk
		// siswanama
		// iurannama
		// periode
		// jumlah_total

		if ($this->RowType == ROWTYPE_SEARCH) { // Search row

			// tahunajaran
			$this->tahunajaran->EditCustomAttributes = "";
			$curVal = trim(strval($this->tahunajaran->AdvancedSearch->SearchValue));
			if ($curVal != "")
				$this->tahunajaran->AdvancedSearch->ViewValue = $this->tahunajaran->lookupCacheOption($curVal);
			else
				$this->tahunajaran->AdvancedSearch->ViewValue = $this->tahunajaran->Lookup !== NULL && is_array($this->tahunajaran->Lookup->Options) ? $curVal : NULL;
			if ($this->tahunajaran->AdvancedSearch->ViewValue !== NULL) { // Load from cache
				$this->tahunajaran->EditValue = array_values($this->tahunajaran->Lookup->Options);
				if ($this->tahunajaran->AdvancedSearch->ViewValue == "")
					$this->tahunajaran->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`tahunajaran`" . SearchString("=", $this->tahunajaran->AdvancedSearch->SearchValue, DATATYPE_STRING, "");
				}
				$sqlWrk = $this->tahunajaran->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = HtmlEncode($rswrk->fields('df'));
					$this->tahunajaran->AdvancedSearch->ViewValue = $this->tahunajaran->displayValue($arwrk);
				} else {
					$this->tahunajaran->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$this->tahunajaran->EditValue = $arwrk;
			}

			// sekolahnama
			$this->sekolahnama->EditCustomAttributes = "";
			$curVal = trim(strval($this->sekolahnama->AdvancedSearch->SearchValue));
			if ($curVal != "")
				$this->sekolahnama->AdvancedSearch->ViewValue = $this->sekolahnama->lookupCacheOption($curVal);
			else
				$this->sekolahnama->AdvancedSearch->ViewValue = $this->sekolahnama->Lookup !== NULL && is_array($this->sekolahnama->Lookup->Options) ? $curVal : NULL;
			if ($this->sekolahnama->AdvancedSearch->ViewValue !== NULL) { // Load from cache
				$this->sekolahnama->EditValue = array_values($this->sekolahnama->Lookup->Options);
				if ($this->sekolahnama->AdvancedSearch->ViewValue == "")
					$this->sekolahnama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`sekolahnama`" . SearchString("=", $this->sekolahnama->AdvancedSearch->SearchValue, DATATYPE_STRING, "");
				}
				$sqlWrk = $this->sekolahnama->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = HtmlEncode($rswrk->fields('df'));
					$this->sekolahnama->AdvancedSearch->ViewValue = $this->sekolahnama->displayValue($arwrk);
				} else {
					$this->sekolahnama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$this->sekolahnama->EditValue = $arwrk;
			}

			// kelasnama
			$this->kelasnama->EditCustomAttributes = "";
			$curVal = trim(strval($this->kelasnama->AdvancedSearch->SearchValue));
			if ($curVal != "")
				$this->kelasnama->AdvancedSearch->ViewValue = $this->kelasnama->lookupCacheOption($curVal);
			else
				$this->kelasnama->AdvancedSearch->ViewValue = $this->kelasnama->Lookup !== NULL && is_array($this->kelasnama->Lookup->Options) ? $curVal : NULL;
			if ($this->kelasnama->AdvancedSearch->ViewValue !== NULL) { // Load from cache
				$this->kelasnama->EditValue = array_values($this->kelasnama->Lookup->Options);
				if ($this->kelasnama->AdvancedSearch->ViewValue == "")
					$this->kelasnama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`kelasnama`" . SearchString("=", $this->kelasnama->AdvancedSearch->SearchValue, DATATYPE_STRING, "");
				}
				$sqlWrk = $this->kelasnama->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = HtmlEncode($rswrk->fields('df'));
					$this->kelasnama->AdvancedSearch->ViewValue = $this->kelasnama->displayValue($arwrk);
				} else {
					$this->kelasnama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$this->kelasnama->EditValue = $arwrk;
			}

			// nomorinduk
			$this->nomorinduk->EditCustomAttributes = "";
			$curVal = trim(strval($this->nomorinduk->AdvancedSearch->SearchValue));
			if ($curVal != "")
				$this->nomorinduk->AdvancedSearch->ViewValue = $this->nomorinduk->lookupCacheOption($curVal);
			else
				$this->nomorinduk->AdvancedSearch->ViewValue = $this->nomorinduk->Lookup !== NULL && is_array($this->nomorinduk->Lookup->Options) ? $curVal : NULL;
			if ($this->nomorinduk->AdvancedSearch->ViewValue !== NULL) { // Load from cache
				$this->nomorinduk->EditValue = array_values($this->nomorinduk->Lookup->Options);
				if ($this->nomorinduk->AdvancedSearch->ViewValue == "")
					$this->nomorinduk->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`nomorinduk`" . SearchString("=", $this->nomorinduk->AdvancedSearch->SearchValue, DATATYPE_STRING, "");
				}
				$sqlWrk = $this->nomorinduk->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = HtmlEncode($rswrk->fields('df'));
					$this->nomorinduk->AdvancedSearch->ViewValue = $this->nomorinduk->displayValue($arwrk);
				} else {
					$this->nomorinduk->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$this->nomorinduk->EditValue = $arwrk;
			}

			// siswanama
			$this->siswanama->EditCustomAttributes = "";
			$curVal = trim(strval($this->siswanama->AdvancedSearch->SearchValue));
			if ($curVal != "")
				$this->siswanama->AdvancedSearch->ViewValue = $this->siswanama->lookupCacheOption($curVal);
			else
				$this->siswanama->AdvancedSearch->ViewValue = $this->siswanama->Lookup !== NULL && is_array($this->siswanama->Lookup->Options) ? $curVal : NULL;
			if ($this->siswanama->AdvancedSearch->ViewValue !== NULL) { // Load from cache
				$this->siswanama->EditValue = array_values($this->siswanama->Lookup->Options);
				if ($this->siswanama->AdvancedSearch->ViewValue == "")
					$this->siswanama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`siswanama`" . SearchString("=", $this->siswanama->AdvancedSearch->SearchValue, DATATYPE_STRING, "");
				}
				$sqlWrk = $this->siswanama->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = HtmlEncode($rswrk->fields('df'));
					$this->siswanama->AdvancedSearch->ViewValue = $this->siswanama->displayValue($arwrk);
				} else {
					$this->siswanama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$this->siswanama->EditValue = $arwrk;
			}

			// iurannama
			$this->iurannama->EditCustomAttributes = "";
			$curVal = trim(strval($this->iurannama->AdvancedSearch->SearchValue));
			if ($curVal != "")
				$this->iurannama->AdvancedSearch->ViewValue = $this->iurannama->lookupCacheOption($curVal);
			else
				$this->iurannama->AdvancedSearch->ViewValue = $this->iurannama->Lookup !== NULL && is_array($this->iurannama->Lookup->Options) ? $curVal : NULL;
			if ($this->iurannama->AdvancedSearch->ViewValue !== NULL) { // Load from cache
				$this->iurannama->EditValue = array_values($this->iurannama->Lookup->Options);
				if ($this->iurannama->AdvancedSearch->ViewValue == "")
					$this->iurannama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`iurannama`" . SearchString("=", $this->iurannama->AdvancedSearch->SearchValue, DATATYPE_STRING, "");
				}
				$sqlWrk = $this->iurannama->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = HtmlEncode($rswrk->fields('df'));
					$this->iurannama->AdvancedSearch->ViewValue = $this->iurannama->displayValue($arwrk);
				} else {
					$this->iurannama->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$this->iurannama->EditValue = $arwrk;
			}

			// periode
			$this->periode->EditCustomAttributes = "";
			$curVal = trim(strval($this->periode->AdvancedSearch->SearchValue));
			if ($curVal != "")
				$this->periode->AdvancedSearch->ViewValue = $this->periode->lookupCacheOption($curVal);
			else
				$this->periode->AdvancedSearch->ViewValue = $this->periode->Lookup !== NULL && is_array($this->periode->Lookup->Options) ? $curVal : NULL;
			if ($this->periode->AdvancedSearch->ViewValue !== NULL) { // Load from cache
				$this->periode->EditValue = array_values($this->periode->Lookup->Options);
				if ($this->periode->AdvancedSearch->ViewValue == "")
					$this->periode->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`periode`" . SearchString("=", $this->periode->AdvancedSearch->SearchValue, DATATYPE_NUMBER, "");
				}
				$sqlWrk = $this->periode->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = HtmlEncode(FormatNumber($rswrk->fields('df'), 0, -2, -2, -2));
					$this->periode->AdvancedSearch->ViewValue = $this->periode->displayValue($arwrk);
				} else {
					$this->periode->AdvancedSearch->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$rowcnt = count($arwrk);
				for ($i = 0; $i < $rowcnt; $i++) {
					$arwrk[$i][1] = FormatNumber($arwrk[$i][1], 0, -2, -2, -2);
				}
				$this->periode->EditValue = $arwrk;
			}
		} elseif ($this->RowType == ROWTYPE_TOTAL && !($this->RowTotalType == ROWTOTAL_GROUP && $this->RowTotalSubType == ROWTOTAL_HEADER)) { // Summary row
			$this->RowAttrs->prependClass(($this->RowTotalType == ROWTOTAL_PAGE || $this->RowTotalType == ROWTOTAL_GRAND) ? "ew-rpt-grp-aggregate" : ""); // Set up row class

			// jumlah_total
			$this->jumlah_total->SumViewValue = $this->jumlah_total->SumValue;
			$this->jumlah_total->SumViewValue = FormatNumber($this->jumlah_total->SumViewValue, 0, -2, -2, -2);
			$this->jumlah_total->CellCssStyle .= "text-align: right;";
			$this->jumlah_total->ViewCustomAttributes = "";
			$this->jumlah_total->CellAttrs["class"] = ($this->RowTotalType == ROWTOTAL_PAGE || $this->RowTotalType == ROWTOTAL_GRAND) ? "ew-rpt-grp-aggregate" : "ew-rpt-grp-summary-" . $this->RowGroupLevel;

			// tahunajaran
			$this->tahunajaran->HrefValue = "";

			// sekolahnama
			$this->sekolahnama->HrefValue = "";

			// kelasnama
			$this->kelasnama->HrefValue = "";

			// nomorinduk
			$this->nomorinduk->HrefValue = "";

			// siswanama
			$this->siswanama->HrefValue = "";

			// iurannama
			$this->iurannama->HrefValue = "";

			// periode
			$this->periode->HrefValue = "";

			// jumlah_total
			$this->jumlah_total->HrefValue = "";
		} else {
			if ($this->RowTotalType == ROWTOTAL_GROUP && $this->RowTotalSubType == ROWTOTAL_HEADER) {
			} else {
			}

			// tahunajaran
			$arwrk = [];
			$arwrk[1] = $this->tahunajaran->CurrentValue;
			$this->tahunajaran->ViewValue = $this->tahunajaran->displayValue($arwrk);
			$this->tahunajaran->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->tahunajaran->ViewCustomAttributes = "";

			// sekolahnama
			$arwrk = [];
			$arwrk[1] = $this->sekolahnama->CurrentValue;
			$this->sekolahnama->ViewValue = $this->sekolahnama->displayValue($arwrk);
			$this->sekolahnama->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->sekolahnama->ViewCustomAttributes = "";

			// kelasnama
			$arwrk = [];
			$arwrk[1] = $this->kelasnama->CurrentValue;
			$this->kelasnama->ViewValue = $this->kelasnama->displayValue($arwrk);
			$this->kelasnama->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->kelasnama->ViewCustomAttributes = "";

			// nomorinduk
			$arwrk = [];
			$arwrk[1] = $this->nomorinduk->CurrentValue;
			$this->nomorinduk->ViewValue = $this->nomorinduk->displayValue($arwrk);
			$this->nomorinduk->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->nomorinduk->ViewCustomAttributes = "";

			// siswanama
			$arwrk = [];
			$arwrk[1] = $this->siswanama->CurrentValue;
			$this->siswanama->ViewValue = $this->siswanama->displayValue($arwrk);
			$this->siswanama->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->siswanama->ViewCustomAttributes = "";

			// iurannama
			$arwrk = [];
			$arwrk[1] = $this->iurannama->CurrentValue;
			$this->iurannama->ViewValue = $this->iurannama->displayValue($arwrk);
			$this->iurannama->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->iurannama->ViewCustomAttributes = "";

			// periode
			$arwrk = [];
			$arwrk[1] = FormatNumber($this->periode->CurrentValue, 0, -2, -2, -2);
			$this->periode->ViewValue = $this->periode->displayValue($arwrk);
			$this->periode->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->periode->ViewCustomAttributes = "";

			// jumlah_total
			$this->jumlah_total->ViewValue = $this->jumlah_total->CurrentValue;
			$this->jumlah_total->ViewValue = FormatNumber($this->jumlah_total->ViewValue, 0, -2, -2, -2);
			$this->jumlah_total->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->jumlah_total->CellCssStyle .= "text-align: right;";
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

			// nomorinduk
			$this->nomorinduk->LinkCustomAttributes = "";
			$this->nomorinduk->HrefValue = "";
			$this->nomorinduk->TooltipValue = "";

			// siswanama
			$this->siswanama->LinkCustomAttributes = "";
			$this->siswanama->HrefValue = "";
			$this->siswanama->TooltipValue = "";

			// iurannama
			$this->iurannama->LinkCustomAttributes = "";
			$this->iurannama->HrefValue = "";
			$this->iurannama->TooltipValue = "";

			// periode
			$this->periode->LinkCustomAttributes = "";
			$this->periode->HrefValue = "";
			$this->periode->TooltipValue = "";

			// jumlah_total
			$this->jumlah_total->LinkCustomAttributes = "";
			$this->jumlah_total->HrefValue = "";
			$this->jumlah_total->TooltipValue = "";
		}

		// Call Cell_Rendered event
		if ($this->RowType == ROWTYPE_TOTAL) { // Summary row

			// jumlah_total
			$currentValue = $this->jumlah_total->SumValue;
			$viewValue = &$this->jumlah_total->SumViewValue;
			$viewAttrs = &$this->jumlah_total->ViewAttrs;
			$cellAttrs = &$this->jumlah_total->CellAttrs;
			$hrefValue = &$this->jumlah_total->HrefValue;
			$linkAttrs = &$this->jumlah_total->LinkAttrs;
			$this->Cell_Rendered($this->jumlah_total, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);
		} else {

			// tahunajaran
			$currentValue = $this->tahunajaran->groupValue();
			$viewValue = &$this->tahunajaran->GroupViewValue;
			$viewAttrs = &$this->tahunajaran->ViewAttrs;
			$cellAttrs = &$this->tahunajaran->CellAttrs;
			$hrefValue = &$this->tahunajaran->HrefValue;
			$linkAttrs = &$this->tahunajaran->LinkAttrs;
			$this->Cell_Rendered($this->tahunajaran, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// sekolahnama
			$currentValue = $this->sekolahnama->groupValue();
			$viewValue = &$this->sekolahnama->GroupViewValue;
			$viewAttrs = &$this->sekolahnama->ViewAttrs;
			$cellAttrs = &$this->sekolahnama->CellAttrs;
			$hrefValue = &$this->sekolahnama->HrefValue;
			$linkAttrs = &$this->sekolahnama->LinkAttrs;
			$this->Cell_Rendered($this->sekolahnama, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// kelasnama
			$currentValue = $this->kelasnama->groupValue();
			$viewValue = &$this->kelasnama->GroupViewValue;
			$viewAttrs = &$this->kelasnama->ViewAttrs;
			$cellAttrs = &$this->kelasnama->CellAttrs;
			$hrefValue = &$this->kelasnama->HrefValue;
			$linkAttrs = &$this->kelasnama->LinkAttrs;
			$this->Cell_Rendered($this->kelasnama, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// nomorinduk
			$currentValue = $this->nomorinduk->groupValue();
			$viewValue = &$this->nomorinduk->GroupViewValue;
			$viewAttrs = &$this->nomorinduk->ViewAttrs;
			$cellAttrs = &$this->nomorinduk->CellAttrs;
			$hrefValue = &$this->nomorinduk->HrefValue;
			$linkAttrs = &$this->nomorinduk->LinkAttrs;
			$this->Cell_Rendered($this->nomorinduk, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// siswanama
			$currentValue = $this->siswanama->groupValue();
			$viewValue = &$this->siswanama->GroupViewValue;
			$viewAttrs = &$this->siswanama->ViewAttrs;
			$cellAttrs = &$this->siswanama->CellAttrs;
			$hrefValue = &$this->siswanama->HrefValue;
			$linkAttrs = &$this->siswanama->LinkAttrs;
			$this->Cell_Rendered($this->siswanama, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// iurannama
			$currentValue = $this->iurannama->groupValue();
			$viewValue = &$this->iurannama->GroupViewValue;
			$viewAttrs = &$this->iurannama->ViewAttrs;
			$cellAttrs = &$this->iurannama->CellAttrs;
			$hrefValue = &$this->iurannama->HrefValue;
			$linkAttrs = &$this->iurannama->LinkAttrs;
			$this->Cell_Rendered($this->iurannama, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// periode
			$currentValue = $this->periode->groupValue();
			$viewValue = &$this->periode->GroupViewValue;
			$viewAttrs = &$this->periode->ViewAttrs;
			$cellAttrs = &$this->periode->CellAttrs;
			$hrefValue = &$this->periode->HrefValue;
			$linkAttrs = &$this->periode->LinkAttrs;
			$this->Cell_Rendered($this->periode, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// jumlah_total
			$currentValue = $this->jumlah_total->groupValue();
			$viewValue = &$this->jumlah_total->GroupViewValue;
			$viewAttrs = &$this->jumlah_total->ViewAttrs;
			$cellAttrs = &$this->jumlah_total->CellAttrs;
			$hrefValue = &$this->jumlah_total->HrefValue;
			$linkAttrs = &$this->jumlah_total->LinkAttrs;
			$this->Cell_Rendered($this->jumlah_total, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);
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
		if ($this->tahunajaran->Visible)
			$this->DetailColumnCount += 1;
		if ($this->sekolahnama->Visible)
			$this->DetailColumnCount += 1;
		if ($this->kelasnama->Visible)
			$this->DetailColumnCount += 1;
		if ($this->nomorinduk->Visible)
			$this->DetailColumnCount += 1;
		if ($this->siswanama->Visible)
			$this->DetailColumnCount += 1;
		if ($this->iurannama->Visible)
			$this->DetailColumnCount += 1;
		if ($this->periode->Visible)
			$this->DetailColumnCount += 1;
		if ($this->jumlah_total->Visible)
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
			return '<a class="ew-export-link ew-email" title="' . HtmlEncode($Language->phrase("ExportToEmail", TRUE)) . '" data-caption="' . HtmlEncode($Language->phrase("ExportToEmail", TRUE)) . '" id="emf_r104_lap_pum" href="#" onclick="return ew.emailDialogShow({ lnk: \'emf_r104_lap_pum\', hdr: ew.language.phrase(\'ExportToEmailText\'), url: \'' . $this->pageUrl() . 'export=email\', exportid: \'' . session_id() . '\', el: this });">' . $Language->phrase("ExportToEmail") . '</a>';
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
				case "x_tahunajaran":
					$conn = Conn("");
					break;
				case "x_sekolahnama":
					$conn = Conn("");
					break;
				case "x_kelasnama":
					$conn = Conn("");
					break;
				case "x_nomorinduk":
					$conn = Conn("");
					break;
				case "x_siswanama":
					$conn = Conn("");
					break;
				case "x_iurannama":
					$conn = Conn("");
					break;
				case "x_periode":
					$conn = Conn("");
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
						case "x_tahunajaran":
							break;
						case "x_sekolahnama":
							break;
						case "x_kelasnama":
							break;
						case "x_nomorinduk":
							break;
						case "x_siswanama":
							break;
						case "x_iurannama":
							break;
						case "x_periode":
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
			return "`kelasnama` ASC,`iurannama` ASC,`periode` ASC";
		$resetSort = Param("cmd") === "resetsort";
		$orderBy = Param("order", "");
		$orderType = Param("ordertype", "");

		// Check for Ctrl pressed
		$ctrl = (Param("ctrl") !== NULL);

		// Check for a resetsort command
		if ($resetSort) {
			$this->setOrderBy("");
			$this->setStartGroup(1);
			$this->tahunajaran->setSort("");
			$this->sekolahnama->setSort("");
			$this->kelasnama->setSort("");
			$this->nomorinduk->setSort("");
			$this->siswanama->setSort("");
			$this->iurannama->setSort("");
			$this->periode->setSort("");
			$this->jumlah_total->setSort("");

		// Check for an Order parameter
		} elseif ($orderBy != "") {
			$this->CurrentOrder = $orderBy;
			$this->CurrentOrderType = $orderType;
			$this->updateSort($this->tahunajaran, $ctrl); // tahunajaran
			$this->updateSort($this->sekolahnama, $ctrl); // sekolahnama
			$this->updateSort($this->kelasnama, $ctrl); // kelasnama
			$this->updateSort($this->nomorinduk, $ctrl); // nomorinduk
			$this->updateSort($this->siswanama, $ctrl); // siswanama
			$this->updateSort($this->iurannama, $ctrl); // iurannama
			$this->updateSort($this->periode, $ctrl); // periode
			$this->updateSort($this->jumlah_total, $ctrl); // jumlah_total
			$sortSql = $this->sortSql();
			$this->setOrderBy($sortSql);
			$this->setStartGroup(1);
		}

		// Set up default sort
		if ($this->getOrderBy() == "") {
			$this->setOrderBy("`kelasnama` ASC,`iurannama` ASC,`periode` ASC");
			$this->kelasnama->setSort("ASC");
			$this->iurannama->setSort("ASC");
			$this->periode->setSort("ASC");
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
			$this->tahunajaran->AdvancedSearch->unsetSession();
			$this->sekolahnama->AdvancedSearch->unsetSession();
			$this->kelasnama->AdvancedSearch->unsetSession();
			$this->nomorinduk->AdvancedSearch->unsetSession();
			$this->siswanama->AdvancedSearch->unsetSession();
			$this->iurannama->AdvancedSearch->unsetSession();
			$this->periode->AdvancedSearch->unsetSession();
			$restoreDefault = TRUE;
		} else {
			$restoreSession = !$this->SearchCommand;

			// Field tahunajaran
			$this->getDropDownValue($this->tahunajaran);

			// Field sekolahnama
			$this->getDropDownValue($this->sekolahnama);

			// Field kelasnama
			$this->getDropDownValue($this->kelasnama);

			// Field nomorinduk
			$this->getDropDownValue($this->nomorinduk);

			// Field siswanama
			$this->getDropDownValue($this->siswanama);

			// Field iurannama
			$this->getDropDownValue($this->iurannama);

			// Field periode
			$this->getDropDownValue($this->periode);
			if (!$this->validateForm()) {
				$this->setFailureMessage($FormError);
				return $filter;
			}
		}

		// Restore session
		if ($restoreSession) {
			$restoreDefault = TRUE;
			if ($this->tahunajaran->AdvancedSearch->issetSession()) { // Field tahunajaran
				$this->tahunajaran->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->sekolahnama->AdvancedSearch->issetSession()) { // Field sekolahnama
				$this->sekolahnama->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->kelasnama->AdvancedSearch->issetSession()) { // Field kelasnama
				$this->kelasnama->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->nomorinduk->AdvancedSearch->issetSession()) { // Field nomorinduk
				$this->nomorinduk->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->siswanama->AdvancedSearch->issetSession()) { // Field siswanama
				$this->siswanama->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->iurannama->AdvancedSearch->issetSession()) { // Field iurannama
				$this->iurannama->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->periode->AdvancedSearch->issetSession()) { // Field periode
				$this->periode->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
		}

		// Restore default
		if ($restoreDefault)
			$this->loadDefaultFilters();

		// Call page filter validated event
		$this->Page_FilterValidated();

		// Build SQL and save to session
		$this->buildDropDownFilter($this->tahunajaran, $filter, $this->tahunajaran->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field tahunajaran
		$this->tahunajaran->AdvancedSearch->save();
		$this->buildDropDownFilter($this->sekolahnama, $filter, $this->sekolahnama->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field sekolahnama
		$this->sekolahnama->AdvancedSearch->save();
		$this->buildDropDownFilter($this->kelasnama, $filter, $this->kelasnama->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field kelasnama
		$this->kelasnama->AdvancedSearch->save();
		$this->buildDropDownFilter($this->nomorinduk, $filter, $this->nomorinduk->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field nomorinduk
		$this->nomorinduk->AdvancedSearch->save();
		$this->buildDropDownFilter($this->siswanama, $filter, $this->siswanama->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field siswanama
		$this->siswanama->AdvancedSearch->save();
		$this->buildDropDownFilter($this->iurannama, $filter, $this->iurannama->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field iurannama
		$this->iurannama->AdvancedSearch->save();
		$this->buildDropDownFilter($this->periode, $filter, $this->periode->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field periode
		$this->periode->AdvancedSearch->save();

		// Field tahunajaran
		LoadDropDownList($this->tahunajaran->EditValue, $this->tahunajaran->AdvancedSearch->SearchValue);

		// Field sekolahnama
		LoadDropDownList($this->sekolahnama->EditValue, $this->sekolahnama->AdvancedSearch->SearchValue);

		// Field kelasnama
		LoadDropDownList($this->kelasnama->EditValue, $this->kelasnama->AdvancedSearch->SearchValue);

		// Field nomorinduk
		LoadDropDownList($this->nomorinduk->EditValue, $this->nomorinduk->AdvancedSearch->SearchValue);

		// Field siswanama
		LoadDropDownList($this->siswanama->EditValue, $this->siswanama->AdvancedSearch->SearchValue);

		// Field iurannama
		LoadDropDownList($this->iurannama->EditValue, $this->iurannama->AdvancedSearch->SearchValue);

		// Field periode
		LoadDropDownList($this->periode->EditValue, $this->periode->AdvancedSearch->SearchValue);
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
		// Field tahunajaran

		$this->tahunajaran->AdvancedSearch->loadDefault();

		// Field sekolahnama
		$this->sekolahnama->AdvancedSearch->loadDefault();

		// Field kelasnama
		$this->kelasnama->AdvancedSearch->loadDefault();

		// Field nomorinduk
		$this->nomorinduk->AdvancedSearch->loadDefault();

		// Field siswanama
		$this->siswanama->AdvancedSearch->loadDefault();

		// Field iurannama
		$this->iurannama->AdvancedSearch->loadDefault();

		// Field periode
		$this->periode->AdvancedSearch->loadDefault();
	}

	// Show list of filters
	public function showFilterList()
	{
		global $Language;

		// Initialize
		$filterList = "";
		$captionClass = $this->isExport("email") ? "ew-filter-caption-email" : "ew-filter-caption";
		$captionSuffix = $this->isExport("email") ? ": " : "";

		// Field tahunajaran
		$extWrk = "";
		$this->buildDropDownFilter($this->tahunajaran, $extWrk, $this->tahunajaran->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->tahunajaran->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field sekolahnama
		$extWrk = "";
		$this->buildDropDownFilter($this->sekolahnama, $extWrk, $this->sekolahnama->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->sekolahnama->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field kelasnama
		$extWrk = "";
		$this->buildDropDownFilter($this->kelasnama, $extWrk, $this->kelasnama->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->kelasnama->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field nomorinduk
		$extWrk = "";
		$this->buildDropDownFilter($this->nomorinduk, $extWrk, $this->nomorinduk->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->nomorinduk->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field siswanama
		$extWrk = "";
		$this->buildDropDownFilter($this->siswanama, $extWrk, $this->siswanama->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->siswanama->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field iurannama
		$extWrk = "";
		$this->buildDropDownFilter($this->iurannama, $extWrk, $this->iurannama->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->iurannama->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field periode
		$extWrk = "";
		$this->buildDropDownFilter($this->periode, $extWrk, $this->periode->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->periode->caption() . "</span>" . $captionSuffix . $filter . "</div>";

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

		// Field tahunajaran
		$wrk = "";
		$wrk = ($this->tahunajaran->AdvancedSearch->SearchValue != INIT_VALUE) ? $this->tahunajaran->AdvancedSearch->SearchValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk != "")
			$wrk = "\"x_tahunajaran\":\"" . JsEncode($wrk) . "\"";
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field sekolahnama
		$wrk = "";
		$wrk = ($this->sekolahnama->AdvancedSearch->SearchValue != INIT_VALUE) ? $this->sekolahnama->AdvancedSearch->SearchValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk != "")
			$wrk = "\"x_sekolahnama\":\"" . JsEncode($wrk) . "\"";
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field kelasnama
		$wrk = "";
		$wrk = ($this->kelasnama->AdvancedSearch->SearchValue != INIT_VALUE) ? $this->kelasnama->AdvancedSearch->SearchValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk != "")
			$wrk = "\"x_kelasnama\":\"" . JsEncode($wrk) . "\"";
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field nomorinduk
		$wrk = "";
		$wrk = ($this->nomorinduk->AdvancedSearch->SearchValue != INIT_VALUE) ? $this->nomorinduk->AdvancedSearch->SearchValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk != "")
			$wrk = "\"x_nomorinduk\":\"" . JsEncode($wrk) . "\"";
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field siswanama
		$wrk = "";
		$wrk = ($this->siswanama->AdvancedSearch->SearchValue != INIT_VALUE) ? $this->siswanama->AdvancedSearch->SearchValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk != "")
			$wrk = "\"x_siswanama\":\"" . JsEncode($wrk) . "\"";
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field iurannama
		$wrk = "";
		$wrk = ($this->iurannama->AdvancedSearch->SearchValue != INIT_VALUE) ? $this->iurannama->AdvancedSearch->SearchValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk != "")
			$wrk = "\"x_iurannama\":\"" . JsEncode($wrk) . "\"";
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field periode
		$wrk = "";
		$wrk = ($this->periode->AdvancedSearch->SearchValue != INIT_VALUE) ? $this->periode->AdvancedSearch->SearchValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk != "")
			$wrk = "\"x_periode\":\"" . JsEncode($wrk) . "\"";
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

		// Field tahunajaran
		if (!$this->tahunajaran->AdvancedSearch->getFromArray($filter))
			$this->tahunajaran->AdvancedSearch->loadDefault(); // Clear filter
		$this->tahunajaran->AdvancedSearch->save();

		// Field sekolahnama
		if (!$this->sekolahnama->AdvancedSearch->getFromArray($filter))
			$this->sekolahnama->AdvancedSearch->loadDefault(); // Clear filter
		$this->sekolahnama->AdvancedSearch->save();

		// Field kelasnama
		if (!$this->kelasnama->AdvancedSearch->getFromArray($filter))
			$this->kelasnama->AdvancedSearch->loadDefault(); // Clear filter
		$this->kelasnama->AdvancedSearch->save();

		// Field nomorinduk
		if (!$this->nomorinduk->AdvancedSearch->getFromArray($filter))
			$this->nomorinduk->AdvancedSearch->loadDefault(); // Clear filter
		$this->nomorinduk->AdvancedSearch->save();

		// Field siswanama
		if (!$this->siswanama->AdvancedSearch->getFromArray($filter))
			$this->siswanama->AdvancedSearch->loadDefault(); // Clear filter
		$this->siswanama->AdvancedSearch->save();

		// Field iurannama
		if (!$this->iurannama->AdvancedSearch->getFromArray($filter))
			$this->iurannama->AdvancedSearch->loadDefault(); // Clear filter
		$this->iurannama->AdvancedSearch->save();

		// Field periode
		if (!$this->periode->AdvancedSearch->getFromArray($filter))
			$this->periode->AdvancedSearch->loadDefault(); // Clear filter
		$this->periode->AdvancedSearch->save();
		return TRUE;
	}

	// Page Load event
	function Page_Load() {

		//echo "Page Load";
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