<?php
namespace PHPMaker2020\project1;

/**
 * Page class
 */
class t103_daf_kelas_siswa_iuran_grid extends t103_daf_kelas_siswa_iuran
{

	// Page ID
	public $PageID = "grid";

	// Project ID
	public $ProjectID = "{E35313A1-BDC4-466C-B9BC-088D7A329967}";

	// Table name
	public $TableName = 't103_daf_kelas_siswa_iuran';

	// Page object name
	public $PageObjName = "t103_daf_kelas_siswa_iuran_grid";

	// Grid form hidden field names
	public $FormName = "ft103_daf_kelas_siswa_iurangrid";
	public $FormActionName = "k_action";
	public $FormKeyName = "k_key";
	public $FormOldKeyName = "k_oldkey";
	public $FormBlankRowName = "k_blankrow";
	public $FormKeyCountName = "key_count";

	// Page URLs
	public $AddUrl;
	public $EditUrl;
	public $CopyUrl;
	public $DeleteUrl;
	public $ViewUrl;
	public $ListUrl;

	// Audit Trail
	public $AuditTrailOnAdd = TRUE;
	public $AuditTrailOnEdit = TRUE;
	public $AuditTrailOnDelete = TRUE;
	public $AuditTrailOnView = FALSE;
	public $AuditTrailOnViewData = FALSE;
	public $AuditTrailOnSearch = FALSE;

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
		if ($this->TableName)
			return $Language->phrase($this->PageID);
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
		if ($this->UseTokenInUrl)
			$url .= "t=" . $this->TableVar . "&"; // Add page token
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
		global $CurrentForm;
		if ($this->UseTokenInUrl) {
			if ($CurrentForm)
				return ($this->TableVar == $CurrentForm->getValue("t"));
			if (Get("t") !== NULL)
				return ($this->TableVar == Get("t"));
		}
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
		$this->FormActionName .= "_" . $this->FormName;
		$this->FormKeyName .= "_" . $this->FormName;
		$this->FormOldKeyName .= "_" . $this->FormName;
		$this->FormBlankRowName .= "_" . $this->FormName;
		$this->FormKeyCountName .= "_" . $this->FormName;
		$GLOBALS["Grid"] = &$this;
		$this->TokenTimeout = SessionTimeoutTime();

		// Language object
		if (!isset($Language))
			$Language = new Language();

		// Parent constuctor
		parent::__construct();

		// Table object (t103_daf_kelas_siswa_iuran)
		if (!isset($GLOBALS["t103_daf_kelas_siswa_iuran"]) || get_class($GLOBALS["t103_daf_kelas_siswa_iuran"]) == PROJECT_NAMESPACE . "t103_daf_kelas_siswa_iuran") {
			$GLOBALS["t103_daf_kelas_siswa_iuran"] = &$this;

			// $GLOBALS["MasterTable"] = &$GLOBALS["Table"];
			// if (!isset($GLOBALS["Table"]))
			// 	$GLOBALS["Table"] = &$GLOBALS["t103_daf_kelas_siswa_iuran"];

		}
		$this->AddUrl = "t103_daf_kelas_siswa_iuranadd.php";

		// Table object (t301_employees)
		if (!isset($GLOBALS['t301_employees']))
			$GLOBALS['t301_employees'] = new t301_employees();

		// Page ID (for backward compatibility only)
		if (!defined(PROJECT_NAMESPACE . "PAGE_ID"))
			define(PROJECT_NAMESPACE . "PAGE_ID", 'grid');

		// Table name (for backward compatibility only)
		if (!defined(PROJECT_NAMESPACE . "TABLE_NAME"))
			define(PROJECT_NAMESPACE . "TABLE_NAME", 't103_daf_kelas_siswa_iuran');

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

		// List options
		$this->ListOptions = new ListOptions();
		$this->ListOptions->TableVar = $this->TableVar;

		// Other options
		if (!$this->OtherOptions)
			$this->OtherOptions = new ListOptionsArray();
		$this->OtherOptions["addedit"] = new ListOptions("div");
		$this->OtherOptions["addedit"]->TagClassName = "ew-add-edit-option";
	}

	// Terminate page
	public function terminate($url = "")
	{
		global $ExportFileName, $TempImages, $DashboardReport;

		// Export
		global $t103_daf_kelas_siswa_iuran;
		if ($this->CustomExport && $this->CustomExport == $this->Export && array_key_exists($this->CustomExport, Config("EXPORT_CLASSES"))) {
				$content = ob_get_contents();
			if ($ExportFileName == "")
				$ExportFileName = $this->TableVar;
			$class = PROJECT_NAMESPACE . Config("EXPORT_CLASSES." . $this->CustomExport);
			if (class_exists($class)) {
				$doc = new $class($t103_daf_kelas_siswa_iuran);
				$doc->Text = @$content;
				if ($this->isExport("email"))
					echo $this->exportEmail($doc->Text);
				else
					$doc->export();
				DeleteTempImages(); // Delete temp images
				exit();
			}
		}

//		$GLOBALS["Table"] = &$GLOBALS["MasterTable"];
		unset($GLOBALS["Grid"]);
		if ($url === "")
			return;
		if (!IsApi())
			$this->Page_Redirecting($url);

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
		exit();
	}

	// Get records from recordset
	protected function getRecordsFromRecordset($rs, $current = FALSE)
	{
		$rows = [];
		if (is_object($rs)) { // Recordset
			while ($rs && !$rs->EOF) {
				$this->loadRowValues($rs); // Set up DbValue/CurrentValue
				$row = $this->getRecordFromArray($rs->fields);
				if ($current)
					return $row;
				else
					$rows[] = $row;
				$rs->moveNext();
			}
		} elseif (is_array($rs)) {
			foreach ($rs as $ar) {
				$row = $this->getRecordFromArray($ar);
				if ($current)
					return $row;
				else
					$rows[] = $row;
			}
		}
		return $rows;
	}

	// Get record from array
	protected function getRecordFromArray($ar)
	{
		$row = [];
		if (is_array($ar)) {
			foreach ($ar as $fldname => $val) {
				if (array_key_exists($fldname, $this->fields) && ($this->fields[$fldname]->Visible || $this->fields[$fldname]->IsPrimaryKey)) { // Primary key or Visible
					$fld = &$this->fields[$fldname];
					if ($fld->HtmlTag == "FILE") { // Upload field
						if (EmptyValue($val)) {
							$row[$fldname] = NULL;
						} else {
							if ($fld->DataType == DATATYPE_BLOB) {
								$url = FullUrl(GetApiUrl(Config("API_FILE_ACTION"),
									Config("API_OBJECT_NAME") . "=" . $fld->TableVar . "&" .
									Config("API_FIELD_NAME") . "=" . $fld->Param . "&" .
									Config("API_KEY_NAME") . "=" . rawurlencode($this->getRecordKeyValue($ar)))); //*** need to add this? API may not be in the same folder
								$row[$fldname] = ["mimeType" => ContentType($val), "url" => $url];
							} elseif (!$fld->UploadMultiple || !ContainsString($val, Config("MULTIPLE_UPLOAD_SEPARATOR"))) { // Single file
								$row[$fldname] = ["mimeType" => MimeContentType($val), "url" => FullUrl($fld->hrefPath() . $val)];
							} else { // Multiple files
								$files = explode(Config("MULTIPLE_UPLOAD_SEPARATOR"), $val);
								$ar = [];
								foreach ($files as $file) {
									if (!EmptyValue($file))
										$ar[] = ["type" => MimeContentType($file), "url" => FullUrl($fld->hrefPath() . $file)];
								}
								$row[$fldname] = $ar;
							}
						}
					} else {
						$row[$fldname] = $val;
					}
				}
			}
		}
		return $row;
	}

	// Get record key value from array
	protected function getRecordKeyValue($ar)
	{
		$key = "";
		if (is_array($ar)) {
			$key .= @$ar['id'];
		}
		return $key;
	}

	/**
	 * Hide fields for add/edit
	 *
	 * @return void
	 */
	protected function hideFieldsForAddEdit()
	{
		if ($this->isAdd() || $this->isCopy() || $this->isGridAdd())
			$this->id->Visible = FALSE;
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

	// Class variables
	public $ListOptions; // List options
	public $ExportOptions; // Export options
	public $SearchOptions; // Search options
	public $OtherOptions; // Other options
	public $FilterOptions; // Filter options
	public $ImportOptions; // Import options
	public $ListActions; // List actions
	public $SelectedCount = 0;
	public $SelectedIndex = 0;
	public $ShowOtherOptions = FALSE;
	public $DisplayRecords = 50;
	public $StartRecord;
	public $StopRecord;
	public $TotalRecords = 0;
	public $RecordRange = 10;
	public $PageSizes = "10,20,50,-1"; // Page sizes (comma separated)
	public $DefaultSearchWhere = ""; // Default search WHERE clause
	public $SearchWhere = ""; // Search WHERE clause
	public $SearchPanelClass = "ew-search-panel collapse show"; // Search Panel class
	public $SearchRowCount = 0; // For extended search
	public $SearchColumnCount = 0; // For extended search
	public $SearchFieldsPerRow = 1; // For extended search
	public $RecordCount = 0; // Record count
	public $EditRowCount;
	public $StartRowCount = 1;
	public $RowCount = 0;
	public $Attrs = []; // Row attributes and cell attributes
	public $RowIndex = 0; // Row index
	public $KeyCount = 0; // Key count
	public $RowAction = ""; // Row action
	public $RowOldKey = ""; // Row old key (for copy)
	public $MultiColumnClass = "col-sm";
	public $MultiColumnEditClass = "w-100";
	public $DbMasterFilter = ""; // Master filter
	public $DbDetailFilter = ""; // Detail filter
	public $MasterRecordExists;
	public $MultiSelectKey;
	public $Command;
	public $RestoreSearch = FALSE;
	public $DetailPages;
	public $OldRecordset;

	//
	// Page run
	//

	public function run()
	{
		global $ExportType, $CustomExportType, $ExportFileName, $UserProfile, $Language, $Security, $CurrentForm,
			$FormError, $SearchError;

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
			if (!$Security->canList()) {
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

		// Get grid add count
		$gridaddcnt = Get(Config("TABLE_GRID_ADD_ROW_COUNT"), "");
		if (is_numeric($gridaddcnt) && $gridaddcnt > 0)
			$this->GridAddRowCount = $gridaddcnt;

		// Set up list options
		$this->setupListOptions();
		$this->id->Visible = FALSE;
		$this->daf_kelas_siswa_id->Visible = FALSE;
		$this->iuran_id->setVisibility();
		$this->Jumlah->setVisibility();
		$this->byr01->setVisibility();
		$this->jml01->setVisibility();
		$this->tgl01->setVisibility();
		$this->byr02->setVisibility();
		$this->jml02->setVisibility();
		$this->tgl02->setVisibility();
		$this->byr03->setVisibility();
		$this->jml03->setVisibility();
		$this->tgl03->setVisibility();
		$this->byr04->setVisibility();
		$this->jml04->setVisibility();
		$this->tgl04->setVisibility();
		$this->byr05->setVisibility();
		$this->jml05->setVisibility();
		$this->tgl05->setVisibility();
		$this->byr06->setVisibility();
		$this->jml06->setVisibility();
		$this->tgl06->setVisibility();
		$this->byr07->setVisibility();
		$this->jml07->setVisibility();
		$this->tgl07->setVisibility();
		$this->byr08->setVisibility();
		$this->jml08->setVisibility();
		$this->tgl08->setVisibility();
		$this->byr09->setVisibility();
		$this->jml09->setVisibility();
		$this->tgl09->setVisibility();
		$this->byr10->setVisibility();
		$this->jml10->setVisibility();
		$this->tgl10->setVisibility();
		$this->byr11->setVisibility();
		$this->jml11->setVisibility();
		$this->tgl11->setVisibility();
		$this->byr12->setVisibility();
		$this->jml12->setVisibility();
		$this->tgl12->setVisibility();
		$this->hideFieldsForAddEdit();

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

		// Set up master detail parameters
		$this->setupMasterParms();

		// Setup other options
		$this->setupOtherOptions();

		// Set up lookup cache
		$this->setupLookupOptions($this->iuran_id);

		// Search filters
		$srchAdvanced = ""; // Advanced search filter
		$srchBasic = ""; // Basic search filter
		$filter = "";

		// Get command
		$this->Command = strtolower(Get("cmd"));
		if ($this->isPageRequest()) { // Validate request

			// Set up records per page
			$this->setupDisplayRecords();

			// Handle reset command
			$this->resetCmd();

			// Hide list options
			if ($this->isExport()) {
				$this->ListOptions->hideAllOptions(["sequence"]);
				$this->ListOptions->UseDropDownButton = FALSE; // Disable drop down button
				$this->ListOptions->UseButtonGroup = FALSE; // Disable button group
			} elseif ($this->isGridAdd() || $this->isGridEdit()) {
				$this->ListOptions->hideAllOptions();
				$this->ListOptions->UseDropDownButton = FALSE; // Disable drop down button
				$this->ListOptions->UseButtonGroup = FALSE; // Disable button group
			}

			// Show grid delete link for grid add / grid edit
			if ($this->AllowAddDeleteRow) {
				if ($this->isGridAdd() || $this->isGridEdit()) {
					$item = $this->ListOptions["griddelete"];
					if ($item)
						$item->Visible = TRUE;
				}
			}

			// Set up sorting order
			$this->setupSortOrder();
		}

		// Restore display records
		if ($this->Command != "json" && $this->getRecordsPerPage() != "") {
			$this->DisplayRecords = $this->getRecordsPerPage(); // Restore from Session
		} else {
			$this->DisplayRecords = 50; // Load default
			$this->setRecordsPerPage($this->DisplayRecords); // Save default to Session
		}

		// Load Sorting Order
		if ($this->Command != "json")
			$this->loadSortOrder();

		// Build filter
		$filter = "";
		if (!$Security->canList())
			$filter = "(0=1)"; // Filter all records

		// Restore master/detail filter
		$this->DbMasterFilter = $this->getMasterFilter(); // Restore master filter
		$this->DbDetailFilter = $this->getDetailFilter(); // Restore detail filter
		AddFilter($filter, $this->DbDetailFilter);
		AddFilter($filter, $this->SearchWhere);

		// Load master record
		if ($this->CurrentMode != "add" && $this->getMasterFilter() != "" && $this->getCurrentMasterTable() == "v102_daf_kelas_siswa") {
			global $v102_daf_kelas_siswa;
			$rsmaster = $v102_daf_kelas_siswa->loadRs($this->DbMasterFilter);
			$this->MasterRecordExists = ($rsmaster && !$rsmaster->EOF);
			if (!$this->MasterRecordExists) {
				$this->setFailureMessage($Language->phrase("NoRecord")); // Set no record found
				$this->terminate("v102_daf_kelas_siswalist.php"); // Return to master page
			} else {
				$v102_daf_kelas_siswa->loadListRowValues($rsmaster);
				$v102_daf_kelas_siswa->RowType = ROWTYPE_MASTER; // Master row
				$v102_daf_kelas_siswa->renderListRow();
				$rsmaster->close();
			}
		}

		// Set up filter
		if ($this->Command == "json") {
			$this->UseSessionForListSql = FALSE; // Do not use session for ListSQL
			$this->CurrentFilter = $filter;
		} else {
			$this->setSessionWhere($filter);
			$this->CurrentFilter = "";
		}
		if ($this->isGridAdd()) {
			if ($this->CurrentMode == "copy") {
				$selectLimit = $this->UseSelectLimit;
				if ($selectLimit) {
					$this->TotalRecords = $this->listRecordCount();
					$this->Recordset = $this->loadRecordset($this->StartRecord - 1, $this->DisplayRecords);
				} else {
					if ($this->Recordset = $this->loadRecordset())
						$this->TotalRecords = $this->Recordset->RecordCount();
				}
				$this->StartRecord = 1;
				$this->DisplayRecords = $this->TotalRecords;
			} else {
				$this->CurrentFilter = "0=1";
				$this->StartRecord = 1;
				$this->DisplayRecords = $this->GridAddRowCount;
			}
			$this->TotalRecords = $this->DisplayRecords;
			$this->StopRecord = $this->DisplayRecords;
		} else {
			$selectLimit = $this->UseSelectLimit;
			if ($selectLimit) {
				$this->TotalRecords = $this->listRecordCount();
			} else {
				if ($this->Recordset = $this->loadRecordset())
					$this->TotalRecords = $this->Recordset->RecordCount();
			}
			$this->StartRecord = 1;
			$this->DisplayRecords = $this->TotalRecords; // Display all records
			if ($selectLimit)
				$this->Recordset = $this->loadRecordset($this->StartRecord - 1, $this->DisplayRecords);
		}

		// Normal return
		if (IsApi()) {
			$rows = $this->getRecordsFromRecordset($this->Recordset);
			$this->Recordset->close();
			WriteJson(["success" => TRUE, $this->TableVar => $rows, "totalRecordCount" => $this->TotalRecords]);
			$this->terminate(TRUE);
		}

		// Set up pager
		$this->Pager = new PrevNextPager($this->StartRecord, $this->getRecordsPerPage(), $this->TotalRecords, $this->PageSizes, $this->RecordRange, $this->AutoHidePager, $this->AutoHidePageSizeSelector);
	}

	// Set up number of records displayed per page
	protected function setupDisplayRecords()
	{
		$wrk = Get(Config("TABLE_REC_PER_PAGE"), "");
		if ($wrk != "") {
			if (is_numeric($wrk)) {
				$this->DisplayRecords = (int)$wrk;
			} else {
				if (SameText($wrk, "all")) { // Display all records
					$this->DisplayRecords = -1;
				} else {
					$this->DisplayRecords = 50; // Non-numeric, load default
				}
			}
			$this->setRecordsPerPage($this->DisplayRecords); // Save to Session

			// Reset start position
			$this->StartRecord = 1;
			$this->setStartRecordNumber($this->StartRecord);
		}
	}

	// Exit inline mode
	protected function clearInlineMode()
	{
		$this->Jumlah->FormValue = ""; // Clear form value
		$this->jml01->FormValue = ""; // Clear form value
		$this->jml02->FormValue = ""; // Clear form value
		$this->jml03->FormValue = ""; // Clear form value
		$this->jml04->FormValue = ""; // Clear form value
		$this->jml05->FormValue = ""; // Clear form value
		$this->jml06->FormValue = ""; // Clear form value
		$this->jml07->FormValue = ""; // Clear form value
		$this->jml08->FormValue = ""; // Clear form value
		$this->jml09->FormValue = ""; // Clear form value
		$this->jml10->FormValue = ""; // Clear form value
		$this->jml11->FormValue = ""; // Clear form value
		$this->jml12->FormValue = ""; // Clear form value
		$this->LastAction = $this->CurrentAction; // Save last action
		$this->CurrentAction = ""; // Clear action
		$_SESSION[SESSION_INLINE_MODE] = ""; // Clear inline mode
	}

	// Switch to Grid Add mode
	protected function gridAddMode()
	{
		$this->CurrentAction = "gridadd";
		$_SESSION[SESSION_INLINE_MODE] = "gridadd";
		$this->hideFieldsForAddEdit();
	}

	// Switch to Grid Edit mode
	protected function gridEditMode()
	{
		$this->CurrentAction = "gridedit";
		$_SESSION[SESSION_INLINE_MODE] = "gridedit";
		$this->hideFieldsForAddEdit();
	}

	// Perform update to grid
	public function gridUpdate()
	{
		global $Language, $CurrentForm, $FormError;
		$gridUpdate = TRUE;

		// Get old recordset
		$this->CurrentFilter = $this->buildKeyFilter();
		if ($this->CurrentFilter == "")
			$this->CurrentFilter = "0=1";
		$sql = $this->getCurrentSql();
		$conn = $this->getConnection();
		if ($rs = $conn->execute($sql)) {
			$rsold = $rs->getRows();
			$rs->close();
		}

		// Call Grid Updating event
		if (!$this->Grid_Updating($rsold)) {
			if ($this->getFailureMessage() == "")
				$this->setFailureMessage($Language->phrase("GridEditCancelled")); // Set grid edit cancelled message
			return FALSE;
		}
		if ($this->AuditTrailOnEdit)
			$this->writeAuditTrailDummy($Language->phrase("BatchUpdateBegin")); // Batch update begin
		$key = "";

		// Update row index and get row key
		$CurrentForm->Index = -1;
		$rowcnt = strval($CurrentForm->getValue($this->FormKeyCountName));
		if ($rowcnt == "" || !is_numeric($rowcnt))
			$rowcnt = 0;

		// Update all rows based on key
		for ($rowindex = 1; $rowindex <= $rowcnt; $rowindex++) {
			$CurrentForm->Index = $rowindex;
			$rowkey = strval($CurrentForm->getValue($this->FormKeyName));
			$rowaction = strval($CurrentForm->getValue($this->FormActionName));

			// Load all values and keys
			if ($rowaction != "insertdelete") { // Skip insert then deleted rows
				$this->loadFormValues(); // Get form values
				if ($rowaction == "" || $rowaction == "edit" || $rowaction == "delete") {
					$gridUpdate = $this->setupKeyValues($rowkey); // Set up key values
				} else {
					$gridUpdate = TRUE;
				}

				// Skip empty row
				if ($rowaction == "insert" && $this->emptyRow()) {

					// No action required
				// Validate form and insert/update/delete record

				} elseif ($gridUpdate) {
					if ($rowaction == "delete") {
						$this->CurrentFilter = $this->getRecordFilter();
						$gridUpdate = $this->deleteRows(); // Delete this row
					} else if (!$this->validateForm()) {
						$gridUpdate = FALSE; // Form error, reset action
						$this->setFailureMessage($FormError);
					} else {
						if ($rowaction == "insert") {
							$gridUpdate = $this->addRow(); // Insert this row
						} else {
							if ($rowkey != "") {
								$this->SendEmail = FALSE; // Do not send email on update success
								$gridUpdate = $this->editRow(); // Update this row
							}
						} // End update
					}
				}
				if ($gridUpdate) {
					if ($key != "")
						$key .= ", ";
					$key .= $rowkey;
				} else {
					break;
				}
			}
		}
		if ($gridUpdate) {

			// Get new recordset
			if ($rs = $conn->execute($sql)) {
				$rsnew = $rs->getRows();
				$rs->close();
			}

			// Call Grid_Updated event
			$this->Grid_Updated($rsold, $rsnew);
			if ($this->AuditTrailOnEdit)
				$this->writeAuditTrailDummy($Language->phrase("BatchUpdateSuccess")); // Batch update success
			$this->clearInlineMode(); // Clear inline edit mode
		} else {
			if ($this->AuditTrailOnEdit)
				$this->writeAuditTrailDummy($Language->phrase("BatchUpdateRollback")); // Batch update rollback
			if ($this->getFailureMessage() == "")
				$this->setFailureMessage($Language->phrase("UpdateFailed")); // Set update failed message
		}
		return $gridUpdate;
	}

	// Build filter for all keys
	protected function buildKeyFilter()
	{
		global $CurrentForm;
		$wrkFilter = "";

		// Update row index and get row key
		$rowindex = 1;
		$CurrentForm->Index = $rowindex;
		$thisKey = strval($CurrentForm->getValue($this->FormKeyName));
		while ($thisKey != "") {
			if ($this->setupKeyValues($thisKey)) {
				$filter = $this->getRecordFilter();
				if ($wrkFilter != "")
					$wrkFilter .= " OR ";
				$wrkFilter .= $filter;
			} else {
				$wrkFilter = "0=1";
				break;
			}

			// Update row index and get row key
			$rowindex++; // Next row
			$CurrentForm->Index = $rowindex;
			$thisKey = strval($CurrentForm->getValue($this->FormKeyName));
		}
		return $wrkFilter;
	}

	// Set up key values
	protected function setupKeyValues($key)
	{
		$arKeyFlds = explode(Config("COMPOSITE_KEY_SEPARATOR"), $key);
		if (count($arKeyFlds) >= 1) {
			$this->id->setOldValue($arKeyFlds[0]);
			if (!is_numeric($this->id->OldValue))
				return FALSE;
		}
		return TRUE;
	}

	// Perform Grid Add
	public function gridInsert()
	{
		global $Language, $CurrentForm, $FormError;
		$rowindex = 1;
		$gridInsert = FALSE;
		$conn = $this->getConnection();

		// Call Grid Inserting event
		if (!$this->Grid_Inserting()) {
			if ($this->getFailureMessage() == "")
				$this->setFailureMessage($Language->phrase("GridAddCancelled")); // Set grid add cancelled message
			return FALSE;
		}

		// Init key filter
		$wrkfilter = "";
		$addcnt = 0;
		if ($this->AuditTrailOnAdd)
			$this->writeAuditTrailDummy($Language->phrase("BatchInsertBegin")); // Batch insert begin
		$key = "";

		// Get row count
		$CurrentForm->Index = -1;
		$rowcnt = strval($CurrentForm->getValue($this->FormKeyCountName));
		if ($rowcnt == "" || !is_numeric($rowcnt))
			$rowcnt = 0;

		// Insert all rows
		for ($rowindex = 1; $rowindex <= $rowcnt; $rowindex++) {

			// Load current row values
			$CurrentForm->Index = $rowindex;
			$rowaction = strval($CurrentForm->getValue($this->FormActionName));
			if ($rowaction != "" && $rowaction != "insert")
				continue; // Skip
			if ($rowaction == "insert") {
				$this->RowOldKey = strval($CurrentForm->getValue($this->FormOldKeyName));
				$this->loadOldRecord(); // Load old record
			}
			$this->loadFormValues(); // Get form values
			if (!$this->emptyRow()) {
				$addcnt++;
				$this->SendEmail = FALSE; // Do not send email on insert success

				// Validate form
				if (!$this->validateForm()) {
					$gridInsert = FALSE; // Form error, reset action
					$this->setFailureMessage($FormError);
				} else {
					$gridInsert = $this->addRow($this->OldRecordset); // Insert this row
				}
				if ($gridInsert) {
					if ($key != "")
						$key .= Config("COMPOSITE_KEY_SEPARATOR");
					$key .= $this->id->CurrentValue;

					// Add filter for this record
					$filter = $this->getRecordFilter();
					if ($wrkfilter != "")
						$wrkfilter .= " OR ";
					$wrkfilter .= $filter;
				} else {
					break;
				}
			}
		}
		if ($addcnt == 0) { // No record inserted
			$this->clearInlineMode(); // Clear grid add mode and return
			return TRUE;
		}
		if ($gridInsert) {

			// Get new recordset
			$this->CurrentFilter = $wrkfilter;
			$sql = $this->getCurrentSql();
			if ($rs = $conn->execute($sql)) {
				$rsnew = $rs->getRows();
				$rs->close();
			}

			// Call Grid_Inserted event
			$this->Grid_Inserted($rsnew);
			if ($this->AuditTrailOnAdd)
				$this->writeAuditTrailDummy($Language->phrase("BatchInsertSuccess")); // Batch insert success
			$this->clearInlineMode(); // Clear grid add mode
		} else {
			if ($this->AuditTrailOnAdd)
				$this->writeAuditTrailDummy($Language->phrase("BatchInsertRollback")); // Batch insert rollback
			if ($this->getFailureMessage() == "")
				$this->setFailureMessage($Language->phrase("InsertFailed")); // Set insert failed message
		}
		return $gridInsert;
	}

	// Check if empty row
	public function emptyRow()
	{
		global $CurrentForm;
		if ($CurrentForm->hasValue("x_iuran_id") && $CurrentForm->hasValue("o_iuran_id") && $this->iuran_id->CurrentValue != $this->iuran_id->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_Jumlah") && $CurrentForm->hasValue("o_Jumlah") && $this->Jumlah->CurrentValue != $this->Jumlah->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_byr01") && $CurrentForm->hasValue("o_byr01") && ConvertToBool($this->byr01->CurrentValue) != ConvertToBool($this->byr01->OldValue))
			return FALSE;
		if ($CurrentForm->hasValue("x_jml01") && $CurrentForm->hasValue("o_jml01") && $this->jml01->CurrentValue != $this->jml01->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_tgl01") && $CurrentForm->hasValue("o_tgl01") && $this->tgl01->CurrentValue != $this->tgl01->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_byr02") && $CurrentForm->hasValue("o_byr02") && ConvertToBool($this->byr02->CurrentValue) != ConvertToBool($this->byr02->OldValue))
			return FALSE;
		if ($CurrentForm->hasValue("x_jml02") && $CurrentForm->hasValue("o_jml02") && $this->jml02->CurrentValue != $this->jml02->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_tgl02") && $CurrentForm->hasValue("o_tgl02") && $this->tgl02->CurrentValue != $this->tgl02->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_byr03") && $CurrentForm->hasValue("o_byr03") && ConvertToBool($this->byr03->CurrentValue) != ConvertToBool($this->byr03->OldValue))
			return FALSE;
		if ($CurrentForm->hasValue("x_jml03") && $CurrentForm->hasValue("o_jml03") && $this->jml03->CurrentValue != $this->jml03->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_tgl03") && $CurrentForm->hasValue("o_tgl03") && $this->tgl03->CurrentValue != $this->tgl03->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_byr04") && $CurrentForm->hasValue("o_byr04") && ConvertToBool($this->byr04->CurrentValue) != ConvertToBool($this->byr04->OldValue))
			return FALSE;
		if ($CurrentForm->hasValue("x_jml04") && $CurrentForm->hasValue("o_jml04") && $this->jml04->CurrentValue != $this->jml04->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_tgl04") && $CurrentForm->hasValue("o_tgl04") && $this->tgl04->CurrentValue != $this->tgl04->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_byr05") && $CurrentForm->hasValue("o_byr05") && ConvertToBool($this->byr05->CurrentValue) != ConvertToBool($this->byr05->OldValue))
			return FALSE;
		if ($CurrentForm->hasValue("x_jml05") && $CurrentForm->hasValue("o_jml05") && $this->jml05->CurrentValue != $this->jml05->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_tgl05") && $CurrentForm->hasValue("o_tgl05") && $this->tgl05->CurrentValue != $this->tgl05->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_byr06") && $CurrentForm->hasValue("o_byr06") && ConvertToBool($this->byr06->CurrentValue) != ConvertToBool($this->byr06->OldValue))
			return FALSE;
		if ($CurrentForm->hasValue("x_jml06") && $CurrentForm->hasValue("o_jml06") && $this->jml06->CurrentValue != $this->jml06->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_tgl06") && $CurrentForm->hasValue("o_tgl06") && $this->tgl06->CurrentValue != $this->tgl06->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_byr07") && $CurrentForm->hasValue("o_byr07") && ConvertToBool($this->byr07->CurrentValue) != ConvertToBool($this->byr07->OldValue))
			return FALSE;
		if ($CurrentForm->hasValue("x_jml07") && $CurrentForm->hasValue("o_jml07") && $this->jml07->CurrentValue != $this->jml07->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_tgl07") && $CurrentForm->hasValue("o_tgl07") && $this->tgl07->CurrentValue != $this->tgl07->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_byr08") && $CurrentForm->hasValue("o_byr08") && ConvertToBool($this->byr08->CurrentValue) != ConvertToBool($this->byr08->OldValue))
			return FALSE;
		if ($CurrentForm->hasValue("x_jml08") && $CurrentForm->hasValue("o_jml08") && $this->jml08->CurrentValue != $this->jml08->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_tgl08") && $CurrentForm->hasValue("o_tgl08") && $this->tgl08->CurrentValue != $this->tgl08->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_byr09") && $CurrentForm->hasValue("o_byr09") && ConvertToBool($this->byr09->CurrentValue) != ConvertToBool($this->byr09->OldValue))
			return FALSE;
		if ($CurrentForm->hasValue("x_jml09") && $CurrentForm->hasValue("o_jml09") && $this->jml09->CurrentValue != $this->jml09->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_tgl09") && $CurrentForm->hasValue("o_tgl09") && $this->tgl09->CurrentValue != $this->tgl09->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_byr10") && $CurrentForm->hasValue("o_byr10") && ConvertToBool($this->byr10->CurrentValue) != ConvertToBool($this->byr10->OldValue))
			return FALSE;
		if ($CurrentForm->hasValue("x_jml10") && $CurrentForm->hasValue("o_jml10") && $this->jml10->CurrentValue != $this->jml10->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_tgl10") && $CurrentForm->hasValue("o_tgl10") && $this->tgl10->CurrentValue != $this->tgl10->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_byr11") && $CurrentForm->hasValue("o_byr11") && ConvertToBool($this->byr11->CurrentValue) != ConvertToBool($this->byr11->OldValue))
			return FALSE;
		if ($CurrentForm->hasValue("x_jml11") && $CurrentForm->hasValue("o_jml11") && $this->jml11->CurrentValue != $this->jml11->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_tgl11") && $CurrentForm->hasValue("o_tgl11") && $this->tgl11->CurrentValue != $this->tgl11->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_byr12") && $CurrentForm->hasValue("o_byr12") && ConvertToBool($this->byr12->CurrentValue) != ConvertToBool($this->byr12->OldValue))
			return FALSE;
		if ($CurrentForm->hasValue("x_jml12") && $CurrentForm->hasValue("o_jml12") && $this->jml12->CurrentValue != $this->jml12->OldValue)
			return FALSE;
		if ($CurrentForm->hasValue("x_tgl12") && $CurrentForm->hasValue("o_tgl12") && $this->tgl12->CurrentValue != $this->tgl12->OldValue)
			return FALSE;
		return TRUE;
	}

	// Validate grid form
	public function validateGridForm()
	{
		global $CurrentForm;

		// Get row count
		$CurrentForm->Index = -1;
		$rowcnt = strval($CurrentForm->getValue($this->FormKeyCountName));
		if ($rowcnt == "" || !is_numeric($rowcnt))
			$rowcnt = 0;

		// Validate all records
		for ($rowindex = 1; $rowindex <= $rowcnt; $rowindex++) {

			// Load current row values
			$CurrentForm->Index = $rowindex;
			$rowaction = strval($CurrentForm->getValue($this->FormActionName));
			if ($rowaction != "delete" && $rowaction != "insertdelete") {
				$this->loadFormValues(); // Get form values
				if ($rowaction == "insert" && $this->emptyRow()) {

					// Ignore
				} else if (!$this->validateForm()) {
					return FALSE;
				}
			}
		}
		return TRUE;
	}

	// Get all form values of the grid
	public function getGridFormValues()
	{
		global $CurrentForm;

		// Get row count
		$CurrentForm->Index = -1;
		$rowcnt = strval($CurrentForm->getValue($this->FormKeyCountName));
		if ($rowcnt == "" || !is_numeric($rowcnt))
			$rowcnt = 0;
		$rows = [];

		// Loop through all records
		for ($rowindex = 1; $rowindex <= $rowcnt; $rowindex++) {

			// Load current row values
			$CurrentForm->Index = $rowindex;
			$rowaction = strval($CurrentForm->getValue($this->FormActionName));
			if ($rowaction != "delete" && $rowaction != "insertdelete") {
				$this->loadFormValues(); // Get form values
				if ($rowaction == "insert" && $this->emptyRow()) {

					// Ignore
				} else {
					$rows[] = $this->getFieldValues("FormValue"); // Return row as array
				}
			}
		}
		return $rows; // Return as array of array
	}

	// Restore form values for current row
	public function restoreCurrentRowFormValues($idx)
	{
		global $CurrentForm;

		// Get row based on current index
		$CurrentForm->Index = $idx;
		$this->loadFormValues(); // Load form values
	}

	// Set up sort parameters
	protected function setupSortOrder()
	{

		// Check for "order" parameter
		if (Get("order") !== NULL) {
			$this->CurrentOrder = Get("order");
			$this->CurrentOrderType = Get("ordertype", "");
			$this->setStartRecordNumber(1); // Reset start position
		}
	}

	// Load sort order parameters
	protected function loadSortOrder()
	{
		$orderBy = $this->getSessionOrderBy(); // Get ORDER BY from Session
		if ($orderBy == "") {
			if ($this->getSqlOrderBy() != "") {
				$orderBy = $this->getSqlOrderBy();
				$this->setSessionOrderBy($orderBy);
			}
		}
	}

	// Reset command
	// - cmd=reset (Reset search parameters)
	// - cmd=resetall (Reset search and master/detail parameters)
	// - cmd=resetsort (Reset sort parameters)

	protected function resetCmd()
	{

		// Check if reset command
		if (StartsString("reset", $this->Command)) {

			// Reset master/detail keys
			if ($this->Command == "resetall") {
				$this->setCurrentMasterTable(""); // Clear master table
				$this->DbMasterFilter = "";
				$this->DbDetailFilter = "";
				$this->daf_kelas_siswa_id->setSessionValue("");
			}

			// Reset sorting order
			if ($this->Command == "resetsort") {
				$orderBy = "";
				$this->setSessionOrderBy($orderBy);
			}

			// Reset start position
			$this->StartRecord = 1;
			$this->setStartRecordNumber($this->StartRecord);
		}
	}

	// Set up list options
	protected function setupListOptions()
	{
		global $Security, $Language;

		// "griddelete"
		if ($this->AllowAddDeleteRow) {
			$item = &$this->ListOptions->add("griddelete");
			$item->CssClass = "text-nowrap";
			$item->OnLeft = TRUE;
			$item->Visible = FALSE; // Default hidden
		}

		// Add group option item
		$item = &$this->ListOptions->add($this->ListOptions->GroupOptionName);
		$item->Body = "";
		$item->OnLeft = TRUE;
		$item->Visible = FALSE;

		// "edit"
		$item = &$this->ListOptions->add("edit");
		$item->CssClass = "text-nowrap";
		$item->Visible = $Security->canEdit();
		$item->OnLeft = TRUE;

		// "delete"
		$item = &$this->ListOptions->add("delete");
		$item->CssClass = "text-nowrap";
		$item->Visible = $Security->canDelete();
		$item->OnLeft = TRUE;

		// "sequence"
		$item = &$this->ListOptions->add("sequence");
		$item->CssClass = "text-nowrap";
		$item->Visible = TRUE;
		$item->OnLeft = TRUE; // Always on left
		$item->ShowInDropDown = FALSE;
		$item->ShowInButtonGroup = FALSE;

		// Drop down button for ListOptions
		$this->ListOptions->UseDropDownButton = FALSE;
		$this->ListOptions->DropDownButtonPhrase = $Language->phrase("ButtonListOptions");
		$this->ListOptions->UseButtonGroup = FALSE;
		if ($this->ListOptions->UseButtonGroup && IsMobile())
			$this->ListOptions->UseDropDownButton = TRUE;

		//$this->ListOptions->ButtonClass = ""; // Class for button group
		// Call ListOptions_Load event

		$this->ListOptions_Load();
		$item = $this->ListOptions[$this->ListOptions->GroupOptionName];
		$item->Visible = $this->ListOptions->groupOptionVisible();
	}

	// Render list options
	public function renderListOptions()
	{
		global $Security, $Language, $CurrentForm;
		$this->ListOptions->loadDefault();

		// Call ListOptions_Rendering event
		$this->ListOptions_Rendering();

		// Set up row action and key
		if (is_numeric($this->RowIndex) && $this->CurrentMode != "view") {
			$CurrentForm->Index = $this->RowIndex;
			$actionName = str_replace("k_", "k" . $this->RowIndex . "_", $this->FormActionName);
			$oldKeyName = str_replace("k_", "k" . $this->RowIndex . "_", $this->FormOldKeyName);
			$keyName = str_replace("k_", "k" . $this->RowIndex . "_", $this->FormKeyName);
			$blankRowName = str_replace("k_", "k" . $this->RowIndex . "_", $this->FormBlankRowName);
			if ($this->RowAction != "")
				$this->MultiSelectKey .= "<input type=\"hidden\" name=\"" . $actionName . "\" id=\"" . $actionName . "\" value=\"" . $this->RowAction . "\">";
			if ($CurrentForm->hasValue($this->FormOldKeyName))
				$this->RowOldKey = strval($CurrentForm->getValue($this->FormOldKeyName));
			if ($this->RowOldKey != "")
				$this->MultiSelectKey .= "<input type=\"hidden\" name=\"" . $oldKeyName . "\" id=\"" . $oldKeyName . "\" value=\"" . HtmlEncode($this->RowOldKey) . "\">";
			if ($this->RowAction == "delete") {
				$rowkey = $CurrentForm->getValue($this->FormKeyName);
				$this->setupKeyValues($rowkey);

				// Reload hidden key for delete
				$this->MultiSelectKey .= "<input type=\"hidden\" name=\"" . $keyName . "\" id=\"" . $keyName . "\" value=\"" . HtmlEncode($rowkey) . "\">";
			}
			if ($this->RowAction == "insert" && $this->isConfirm() && $this->emptyRow())
				$this->MultiSelectKey .= "<input type=\"hidden\" name=\"" . $blankRowName . "\" id=\"" . $blankRowName . "\" value=\"1\">";
		}

		// "delete"
		if ($this->AllowAddDeleteRow) {
			if ($this->CurrentMode == "add" || $this->CurrentMode == "copy" || $this->CurrentMode == "edit") {
				$options = &$this->ListOptions;
				$options->UseButtonGroup = TRUE; // Use button group for grid delete button
				$opt = $options["griddelete"];
				if (!$Security->canDelete() && is_numeric($this->RowIndex) && ($this->RowAction == "" || $this->RowAction == "edit")) { // Do not allow delete existing record
					$opt->Body = "&nbsp;";
				} else {
					$opt->Body = "<a class=\"ew-grid-link ew-grid-delete\" title=\"" . HtmlTitle($Language->phrase("DeleteLink")) . "\" data-caption=\"" . HtmlTitle($Language->phrase("DeleteLink")) . "\" onclick=\"return ew.deleteGridRow(this, " . $this->RowIndex . ");\">" . $Language->phrase("DeleteLink") . "</a>";
				}
			}
		}

		// "sequence"
		$opt = $this->ListOptions["sequence"];
		$opt->Body = FormatSequenceNumber($this->RecordCount);
		if ($this->CurrentMode == "view") { // View mode

		// "edit"
		$opt = $this->ListOptions["edit"];
		$editcaption = HtmlTitle($Language->phrase("EditLink"));
		if ($Security->canEdit()) {
			$opt->Body = "<a class=\"ew-row-link ew-edit\" title=\"" . HtmlTitle($Language->phrase("EditLink")) . "\" data-caption=\"" . HtmlTitle($Language->phrase("EditLink")) . "\" href=\"" . HtmlEncode($this->EditUrl) . "\">" . $Language->phrase("EditLink") . "</a>";
		} else {
			$opt->Body = "";
		}

		// "delete"
		$opt = $this->ListOptions["delete"];
		if ($Security->canDelete())
			$opt->Body = "<a class=\"ew-row-link ew-delete\"" . "" . " title=\"" . HtmlTitle($Language->phrase("DeleteLink")) . "\" data-caption=\"" . HtmlTitle($Language->phrase("DeleteLink")) . "\" href=\"" . HtmlEncode($this->DeleteUrl) . "\">" . $Language->phrase("DeleteLink") . "</a>";
		else
			$opt->Body = "";
		} // End View mode
		if ($this->CurrentMode == "edit" && is_numeric($this->RowIndex) && $this->RowAction != "delete") {
			$this->MultiSelectKey .= "<input type=\"hidden\" name=\"" . $keyName . "\" id=\"" . $keyName . "\" value=\"" . $this->id->CurrentValue . "\">";
		}
		$this->renderListOptionsExt();

		// Call ListOptions_Rendered event
		$this->ListOptions_Rendered();
	}

	// Set record key
	public function setRecordKey(&$key, $rs)
	{
		$key = "";
		if ($key != "")
			$key .= Config("COMPOSITE_KEY_SEPARATOR");
		$key .= $rs->fields('id');
	}

	// Set up other options
	protected function setupOtherOptions()
	{
		global $Language, $Security;
		$option = $this->OtherOptions["addedit"];
		$option->UseDropDownButton = FALSE;
		$option->DropDownButtonPhrase = $Language->phrase("ButtonAddEdit");
		$option->UseButtonGroup = TRUE;

		//$option->ButtonClass = ""; // Class for button group
		$item = &$option->add($option->GroupOptionName);
		$item->Body = "";
		$item->Visible = FALSE;

		// Add
		if ($this->CurrentMode == "view") { // Check view mode
			$item = &$option->add("add");
			$addcaption = HtmlTitle($Language->phrase("AddLink"));
			$this->AddUrl = $this->getAddUrl();
			$item->Body = "<a class=\"ew-add-edit ew-add\" title=\"" . $addcaption . "\" data-caption=\"" . $addcaption . "\" href=\"" . HtmlEncode($this->AddUrl) . "\">" . $Language->phrase("AddLink") . "</a>";
			$item->Visible = $this->AddUrl != "" && $Security->canAdd();
		}
	}

	// Render other options
	public function renderOtherOptions()
	{
		global $Language, $Security;
		$options = &$this->OtherOptions;
		if (($this->CurrentMode == "add" || $this->CurrentMode == "copy" || $this->CurrentMode == "edit") && !$this->isConfirm()) { // Check add/copy/edit mode
			if ($this->AllowAddDeleteRow) {
				$option = $options["addedit"];
				$option->UseDropDownButton = FALSE;
				$item = &$option->add("addblankrow");
				$item->Body = "<a class=\"ew-add-edit ew-add-blank-row\" title=\"" . HtmlTitle($Language->phrase("AddBlankRow")) . "\" data-caption=\"" . HtmlTitle($Language->phrase("AddBlankRow")) . "\" href=\"#\" onclick=\"return ew.addGridRow(this);\">" . $Language->phrase("AddBlankRow") . "</a>";
				$item->Visible = $Security->canAdd();
				$this->ShowOtherOptions = $item->Visible;
			}
		}
		if ($this->CurrentMode == "view") { // Check view mode
			$option = $options["addedit"];
			$item = $option["add"];
			$this->ShowOtherOptions = $item && $item->Visible;
		}
	}

	// Set up list options (extended codes)
	protected function setupListOptionsExt()
	{
	}

	// Render list options (extended codes)
	protected function renderListOptionsExt()
	{
	}

	// Get upload files
	protected function getUploadFiles()
	{
		global $CurrentForm, $Language;
	}

	// Load default values
	protected function loadDefaultValues()
	{
		$this->id->CurrentValue = NULL;
		$this->id->OldValue = $this->id->CurrentValue;
		$this->daf_kelas_siswa_id->CurrentValue = NULL;
		$this->daf_kelas_siswa_id->OldValue = $this->daf_kelas_siswa_id->CurrentValue;
		$this->iuran_id->CurrentValue = NULL;
		$this->iuran_id->OldValue = $this->iuran_id->CurrentValue;
		$this->Jumlah->CurrentValue = NULL;
		$this->Jumlah->OldValue = $this->Jumlah->CurrentValue;
		$this->byr01->CurrentValue = "0";
		$this->byr01->OldValue = $this->byr01->CurrentValue;
		$this->jml01->CurrentValue = 0.00;
		$this->jml01->OldValue = $this->jml01->CurrentValue;
		$this->tgl01->CurrentValue = NULL;
		$this->tgl01->OldValue = $this->tgl01->CurrentValue;
		$this->byr02->CurrentValue = "0";
		$this->byr02->OldValue = $this->byr02->CurrentValue;
		$this->jml02->CurrentValue = 0.00;
		$this->jml02->OldValue = $this->jml02->CurrentValue;
		$this->tgl02->CurrentValue = NULL;
		$this->tgl02->OldValue = $this->tgl02->CurrentValue;
		$this->byr03->CurrentValue = "0";
		$this->byr03->OldValue = $this->byr03->CurrentValue;
		$this->jml03->CurrentValue = 0.00;
		$this->jml03->OldValue = $this->jml03->CurrentValue;
		$this->tgl03->CurrentValue = NULL;
		$this->tgl03->OldValue = $this->tgl03->CurrentValue;
		$this->byr04->CurrentValue = "0";
		$this->byr04->OldValue = $this->byr04->CurrentValue;
		$this->jml04->CurrentValue = 0.00;
		$this->jml04->OldValue = $this->jml04->CurrentValue;
		$this->tgl04->CurrentValue = NULL;
		$this->tgl04->OldValue = $this->tgl04->CurrentValue;
		$this->byr05->CurrentValue = "0";
		$this->byr05->OldValue = $this->byr05->CurrentValue;
		$this->jml05->CurrentValue = 0.00;
		$this->jml05->OldValue = $this->jml05->CurrentValue;
		$this->tgl05->CurrentValue = NULL;
		$this->tgl05->OldValue = $this->tgl05->CurrentValue;
		$this->byr06->CurrentValue = "0";
		$this->byr06->OldValue = $this->byr06->CurrentValue;
		$this->jml06->CurrentValue = 0.00;
		$this->jml06->OldValue = $this->jml06->CurrentValue;
		$this->tgl06->CurrentValue = NULL;
		$this->tgl06->OldValue = $this->tgl06->CurrentValue;
		$this->byr07->CurrentValue = "0";
		$this->byr07->OldValue = $this->byr07->CurrentValue;
		$this->jml07->CurrentValue = 0.00;
		$this->jml07->OldValue = $this->jml07->CurrentValue;
		$this->tgl07->CurrentValue = NULL;
		$this->tgl07->OldValue = $this->tgl07->CurrentValue;
		$this->byr08->CurrentValue = "0";
		$this->byr08->OldValue = $this->byr08->CurrentValue;
		$this->jml08->CurrentValue = 0.00;
		$this->jml08->OldValue = $this->jml08->CurrentValue;
		$this->tgl08->CurrentValue = NULL;
		$this->tgl08->OldValue = $this->tgl08->CurrentValue;
		$this->byr09->CurrentValue = "0";
		$this->byr09->OldValue = $this->byr09->CurrentValue;
		$this->jml09->CurrentValue = 0.00;
		$this->jml09->OldValue = $this->jml09->CurrentValue;
		$this->tgl09->CurrentValue = NULL;
		$this->tgl09->OldValue = $this->tgl09->CurrentValue;
		$this->byr10->CurrentValue = "0";
		$this->byr10->OldValue = $this->byr10->CurrentValue;
		$this->jml10->CurrentValue = 0.00;
		$this->jml10->OldValue = $this->jml10->CurrentValue;
		$this->tgl10->CurrentValue = NULL;
		$this->tgl10->OldValue = $this->tgl10->CurrentValue;
		$this->byr11->CurrentValue = "0";
		$this->byr11->OldValue = $this->byr11->CurrentValue;
		$this->jml11->CurrentValue = 0.00;
		$this->jml11->OldValue = $this->jml11->CurrentValue;
		$this->tgl11->CurrentValue = NULL;
		$this->tgl11->OldValue = $this->tgl11->CurrentValue;
		$this->byr12->CurrentValue = "0";
		$this->byr12->OldValue = $this->byr12->CurrentValue;
		$this->jml12->CurrentValue = 0.00;
		$this->jml12->OldValue = $this->jml12->CurrentValue;
		$this->tgl12->CurrentValue = NULL;
		$this->tgl12->OldValue = $this->tgl12->CurrentValue;
	}

	// Load form values
	protected function loadFormValues()
	{

		// Load from form
		global $CurrentForm;
		$CurrentForm->FormName = $this->FormName;

		// Check field name 'iuran_id' first before field var 'x_iuran_id'
		$val = $CurrentForm->hasValue("iuran_id") ? $CurrentForm->getValue("iuran_id") : $CurrentForm->getValue("x_iuran_id");
		if (!$this->iuran_id->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->iuran_id->Visible = FALSE; // Disable update for API request
			else
				$this->iuran_id->setFormValue($val);
		}
		$this->iuran_id->setOldValue($CurrentForm->getValue("o_iuran_id"));

		// Check field name 'Jumlah' first before field var 'x_Jumlah'
		$val = $CurrentForm->hasValue("Jumlah") ? $CurrentForm->getValue("Jumlah") : $CurrentForm->getValue("x_Jumlah");
		if (!$this->Jumlah->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->Jumlah->Visible = FALSE; // Disable update for API request
			else
				$this->Jumlah->setFormValue($val);
		}
		$this->Jumlah->setOldValue($CurrentForm->getValue("o_Jumlah"));

		// Check field name 'byr01' first before field var 'x_byr01'
		$val = $CurrentForm->hasValue("byr01") ? $CurrentForm->getValue("byr01") : $CurrentForm->getValue("x_byr01");
		if (!$this->byr01->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr01->Visible = FALSE; // Disable update for API request
			else
				$this->byr01->setFormValue($val);
		}
		$this->byr01->setOldValue($CurrentForm->getValue("o_byr01"));

		// Check field name 'jml01' first before field var 'x_jml01'
		$val = $CurrentForm->hasValue("jml01") ? $CurrentForm->getValue("jml01") : $CurrentForm->getValue("x_jml01");
		if (!$this->jml01->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml01->Visible = FALSE; // Disable update for API request
			else
				$this->jml01->setFormValue($val);
		}
		$this->jml01->setOldValue($CurrentForm->getValue("o_jml01"));

		// Check field name 'tgl01' first before field var 'x_tgl01'
		$val = $CurrentForm->hasValue("tgl01") ? $CurrentForm->getValue("tgl01") : $CurrentForm->getValue("x_tgl01");
		if (!$this->tgl01->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl01->Visible = FALSE; // Disable update for API request
			else
				$this->tgl01->setFormValue($val);
			$this->tgl01->CurrentValue = UnFormatDateTime($this->tgl01->CurrentValue, 7);
		}
		$this->tgl01->setOldValue($CurrentForm->getValue("o_tgl01"));

		// Check field name 'byr02' first before field var 'x_byr02'
		$val = $CurrentForm->hasValue("byr02") ? $CurrentForm->getValue("byr02") : $CurrentForm->getValue("x_byr02");
		if (!$this->byr02->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr02->Visible = FALSE; // Disable update for API request
			else
				$this->byr02->setFormValue($val);
		}
		$this->byr02->setOldValue($CurrentForm->getValue("o_byr02"));

		// Check field name 'jml02' first before field var 'x_jml02'
		$val = $CurrentForm->hasValue("jml02") ? $CurrentForm->getValue("jml02") : $CurrentForm->getValue("x_jml02");
		if (!$this->jml02->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml02->Visible = FALSE; // Disable update for API request
			else
				$this->jml02->setFormValue($val);
		}
		$this->jml02->setOldValue($CurrentForm->getValue("o_jml02"));

		// Check field name 'tgl02' first before field var 'x_tgl02'
		$val = $CurrentForm->hasValue("tgl02") ? $CurrentForm->getValue("tgl02") : $CurrentForm->getValue("x_tgl02");
		if (!$this->tgl02->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl02->Visible = FALSE; // Disable update for API request
			else
				$this->tgl02->setFormValue($val);
			$this->tgl02->CurrentValue = UnFormatDateTime($this->tgl02->CurrentValue, 7);
		}
		$this->tgl02->setOldValue($CurrentForm->getValue("o_tgl02"));

		// Check field name 'byr03' first before field var 'x_byr03'
		$val = $CurrentForm->hasValue("byr03") ? $CurrentForm->getValue("byr03") : $CurrentForm->getValue("x_byr03");
		if (!$this->byr03->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr03->Visible = FALSE; // Disable update for API request
			else
				$this->byr03->setFormValue($val);
		}
		$this->byr03->setOldValue($CurrentForm->getValue("o_byr03"));

		// Check field name 'jml03' first before field var 'x_jml03'
		$val = $CurrentForm->hasValue("jml03") ? $CurrentForm->getValue("jml03") : $CurrentForm->getValue("x_jml03");
		if (!$this->jml03->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml03->Visible = FALSE; // Disable update for API request
			else
				$this->jml03->setFormValue($val);
		}
		$this->jml03->setOldValue($CurrentForm->getValue("o_jml03"));

		// Check field name 'tgl03' first before field var 'x_tgl03'
		$val = $CurrentForm->hasValue("tgl03") ? $CurrentForm->getValue("tgl03") : $CurrentForm->getValue("x_tgl03");
		if (!$this->tgl03->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl03->Visible = FALSE; // Disable update for API request
			else
				$this->tgl03->setFormValue($val);
			$this->tgl03->CurrentValue = UnFormatDateTime($this->tgl03->CurrentValue, 7);
		}
		$this->tgl03->setOldValue($CurrentForm->getValue("o_tgl03"));

		// Check field name 'byr04' first before field var 'x_byr04'
		$val = $CurrentForm->hasValue("byr04") ? $CurrentForm->getValue("byr04") : $CurrentForm->getValue("x_byr04");
		if (!$this->byr04->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr04->Visible = FALSE; // Disable update for API request
			else
				$this->byr04->setFormValue($val);
		}
		$this->byr04->setOldValue($CurrentForm->getValue("o_byr04"));

		// Check field name 'jml04' first before field var 'x_jml04'
		$val = $CurrentForm->hasValue("jml04") ? $CurrentForm->getValue("jml04") : $CurrentForm->getValue("x_jml04");
		if (!$this->jml04->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml04->Visible = FALSE; // Disable update for API request
			else
				$this->jml04->setFormValue($val);
		}
		$this->jml04->setOldValue($CurrentForm->getValue("o_jml04"));

		// Check field name 'tgl04' first before field var 'x_tgl04'
		$val = $CurrentForm->hasValue("tgl04") ? $CurrentForm->getValue("tgl04") : $CurrentForm->getValue("x_tgl04");
		if (!$this->tgl04->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl04->Visible = FALSE; // Disable update for API request
			else
				$this->tgl04->setFormValue($val);
			$this->tgl04->CurrentValue = UnFormatDateTime($this->tgl04->CurrentValue, 7);
		}
		$this->tgl04->setOldValue($CurrentForm->getValue("o_tgl04"));

		// Check field name 'byr05' first before field var 'x_byr05'
		$val = $CurrentForm->hasValue("byr05") ? $CurrentForm->getValue("byr05") : $CurrentForm->getValue("x_byr05");
		if (!$this->byr05->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr05->Visible = FALSE; // Disable update for API request
			else
				$this->byr05->setFormValue($val);
		}
		$this->byr05->setOldValue($CurrentForm->getValue("o_byr05"));

		// Check field name 'jml05' first before field var 'x_jml05'
		$val = $CurrentForm->hasValue("jml05") ? $CurrentForm->getValue("jml05") : $CurrentForm->getValue("x_jml05");
		if (!$this->jml05->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml05->Visible = FALSE; // Disable update for API request
			else
				$this->jml05->setFormValue($val);
		}
		$this->jml05->setOldValue($CurrentForm->getValue("o_jml05"));

		// Check field name 'tgl05' first before field var 'x_tgl05'
		$val = $CurrentForm->hasValue("tgl05") ? $CurrentForm->getValue("tgl05") : $CurrentForm->getValue("x_tgl05");
		if (!$this->tgl05->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl05->Visible = FALSE; // Disable update for API request
			else
				$this->tgl05->setFormValue($val);
			$this->tgl05->CurrentValue = UnFormatDateTime($this->tgl05->CurrentValue, 7);
		}
		$this->tgl05->setOldValue($CurrentForm->getValue("o_tgl05"));

		// Check field name 'byr06' first before field var 'x_byr06'
		$val = $CurrentForm->hasValue("byr06") ? $CurrentForm->getValue("byr06") : $CurrentForm->getValue("x_byr06");
		if (!$this->byr06->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr06->Visible = FALSE; // Disable update for API request
			else
				$this->byr06->setFormValue($val);
		}
		$this->byr06->setOldValue($CurrentForm->getValue("o_byr06"));

		// Check field name 'jml06' first before field var 'x_jml06'
		$val = $CurrentForm->hasValue("jml06") ? $CurrentForm->getValue("jml06") : $CurrentForm->getValue("x_jml06");
		if (!$this->jml06->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml06->Visible = FALSE; // Disable update for API request
			else
				$this->jml06->setFormValue($val);
		}
		$this->jml06->setOldValue($CurrentForm->getValue("o_jml06"));

		// Check field name 'tgl06' first before field var 'x_tgl06'
		$val = $CurrentForm->hasValue("tgl06") ? $CurrentForm->getValue("tgl06") : $CurrentForm->getValue("x_tgl06");
		if (!$this->tgl06->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl06->Visible = FALSE; // Disable update for API request
			else
				$this->tgl06->setFormValue($val);
			$this->tgl06->CurrentValue = UnFormatDateTime($this->tgl06->CurrentValue, 7);
		}
		$this->tgl06->setOldValue($CurrentForm->getValue("o_tgl06"));

		// Check field name 'byr07' first before field var 'x_byr07'
		$val = $CurrentForm->hasValue("byr07") ? $CurrentForm->getValue("byr07") : $CurrentForm->getValue("x_byr07");
		if (!$this->byr07->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr07->Visible = FALSE; // Disable update for API request
			else
				$this->byr07->setFormValue($val);
		}
		$this->byr07->setOldValue($CurrentForm->getValue("o_byr07"));

		// Check field name 'jml07' first before field var 'x_jml07'
		$val = $CurrentForm->hasValue("jml07") ? $CurrentForm->getValue("jml07") : $CurrentForm->getValue("x_jml07");
		if (!$this->jml07->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml07->Visible = FALSE; // Disable update for API request
			else
				$this->jml07->setFormValue($val);
		}
		$this->jml07->setOldValue($CurrentForm->getValue("o_jml07"));

		// Check field name 'tgl07' first before field var 'x_tgl07'
		$val = $CurrentForm->hasValue("tgl07") ? $CurrentForm->getValue("tgl07") : $CurrentForm->getValue("x_tgl07");
		if (!$this->tgl07->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl07->Visible = FALSE; // Disable update for API request
			else
				$this->tgl07->setFormValue($val);
			$this->tgl07->CurrentValue = UnFormatDateTime($this->tgl07->CurrentValue, 7);
		}
		$this->tgl07->setOldValue($CurrentForm->getValue("o_tgl07"));

		// Check field name 'byr08' first before field var 'x_byr08'
		$val = $CurrentForm->hasValue("byr08") ? $CurrentForm->getValue("byr08") : $CurrentForm->getValue("x_byr08");
		if (!$this->byr08->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr08->Visible = FALSE; // Disable update for API request
			else
				$this->byr08->setFormValue($val);
		}
		$this->byr08->setOldValue($CurrentForm->getValue("o_byr08"));

		// Check field name 'jml08' first before field var 'x_jml08'
		$val = $CurrentForm->hasValue("jml08") ? $CurrentForm->getValue("jml08") : $CurrentForm->getValue("x_jml08");
		if (!$this->jml08->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml08->Visible = FALSE; // Disable update for API request
			else
				$this->jml08->setFormValue($val);
		}
		$this->jml08->setOldValue($CurrentForm->getValue("o_jml08"));

		// Check field name 'tgl08' first before field var 'x_tgl08'
		$val = $CurrentForm->hasValue("tgl08") ? $CurrentForm->getValue("tgl08") : $CurrentForm->getValue("x_tgl08");
		if (!$this->tgl08->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl08->Visible = FALSE; // Disable update for API request
			else
				$this->tgl08->setFormValue($val);
			$this->tgl08->CurrentValue = UnFormatDateTime($this->tgl08->CurrentValue, 7);
		}
		$this->tgl08->setOldValue($CurrentForm->getValue("o_tgl08"));

		// Check field name 'byr09' first before field var 'x_byr09'
		$val = $CurrentForm->hasValue("byr09") ? $CurrentForm->getValue("byr09") : $CurrentForm->getValue("x_byr09");
		if (!$this->byr09->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr09->Visible = FALSE; // Disable update for API request
			else
				$this->byr09->setFormValue($val);
		}
		$this->byr09->setOldValue($CurrentForm->getValue("o_byr09"));

		// Check field name 'jml09' first before field var 'x_jml09'
		$val = $CurrentForm->hasValue("jml09") ? $CurrentForm->getValue("jml09") : $CurrentForm->getValue("x_jml09");
		if (!$this->jml09->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml09->Visible = FALSE; // Disable update for API request
			else
				$this->jml09->setFormValue($val);
		}
		$this->jml09->setOldValue($CurrentForm->getValue("o_jml09"));

		// Check field name 'tgl09' first before field var 'x_tgl09'
		$val = $CurrentForm->hasValue("tgl09") ? $CurrentForm->getValue("tgl09") : $CurrentForm->getValue("x_tgl09");
		if (!$this->tgl09->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl09->Visible = FALSE; // Disable update for API request
			else
				$this->tgl09->setFormValue($val);
			$this->tgl09->CurrentValue = UnFormatDateTime($this->tgl09->CurrentValue, 7);
		}
		$this->tgl09->setOldValue($CurrentForm->getValue("o_tgl09"));

		// Check field name 'byr10' first before field var 'x_byr10'
		$val = $CurrentForm->hasValue("byr10") ? $CurrentForm->getValue("byr10") : $CurrentForm->getValue("x_byr10");
		if (!$this->byr10->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr10->Visible = FALSE; // Disable update for API request
			else
				$this->byr10->setFormValue($val);
		}
		$this->byr10->setOldValue($CurrentForm->getValue("o_byr10"));

		// Check field name 'jml10' first before field var 'x_jml10'
		$val = $CurrentForm->hasValue("jml10") ? $CurrentForm->getValue("jml10") : $CurrentForm->getValue("x_jml10");
		if (!$this->jml10->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml10->Visible = FALSE; // Disable update for API request
			else
				$this->jml10->setFormValue($val);
		}
		$this->jml10->setOldValue($CurrentForm->getValue("o_jml10"));

		// Check field name 'tgl10' first before field var 'x_tgl10'
		$val = $CurrentForm->hasValue("tgl10") ? $CurrentForm->getValue("tgl10") : $CurrentForm->getValue("x_tgl10");
		if (!$this->tgl10->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl10->Visible = FALSE; // Disable update for API request
			else
				$this->tgl10->setFormValue($val);
			$this->tgl10->CurrentValue = UnFormatDateTime($this->tgl10->CurrentValue, 7);
		}
		$this->tgl10->setOldValue($CurrentForm->getValue("o_tgl10"));

		// Check field name 'byr11' first before field var 'x_byr11'
		$val = $CurrentForm->hasValue("byr11") ? $CurrentForm->getValue("byr11") : $CurrentForm->getValue("x_byr11");
		if (!$this->byr11->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr11->Visible = FALSE; // Disable update for API request
			else
				$this->byr11->setFormValue($val);
		}
		$this->byr11->setOldValue($CurrentForm->getValue("o_byr11"));

		// Check field name 'jml11' first before field var 'x_jml11'
		$val = $CurrentForm->hasValue("jml11") ? $CurrentForm->getValue("jml11") : $CurrentForm->getValue("x_jml11");
		if (!$this->jml11->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml11->Visible = FALSE; // Disable update for API request
			else
				$this->jml11->setFormValue($val);
		}
		$this->jml11->setOldValue($CurrentForm->getValue("o_jml11"));

		// Check field name 'tgl11' first before field var 'x_tgl11'
		$val = $CurrentForm->hasValue("tgl11") ? $CurrentForm->getValue("tgl11") : $CurrentForm->getValue("x_tgl11");
		if (!$this->tgl11->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl11->Visible = FALSE; // Disable update for API request
			else
				$this->tgl11->setFormValue($val);
			$this->tgl11->CurrentValue = UnFormatDateTime($this->tgl11->CurrentValue, 7);
		}
		$this->tgl11->setOldValue($CurrentForm->getValue("o_tgl11"));

		// Check field name 'byr12' first before field var 'x_byr12'
		$val = $CurrentForm->hasValue("byr12") ? $CurrentForm->getValue("byr12") : $CurrentForm->getValue("x_byr12");
		if (!$this->byr12->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr12->Visible = FALSE; // Disable update for API request
			else
				$this->byr12->setFormValue($val);
		}
		$this->byr12->setOldValue($CurrentForm->getValue("o_byr12"));

		// Check field name 'jml12' first before field var 'x_jml12'
		$val = $CurrentForm->hasValue("jml12") ? $CurrentForm->getValue("jml12") : $CurrentForm->getValue("x_jml12");
		if (!$this->jml12->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml12->Visible = FALSE; // Disable update for API request
			else
				$this->jml12->setFormValue($val);
		}
		$this->jml12->setOldValue($CurrentForm->getValue("o_jml12"));

		// Check field name 'tgl12' first before field var 'x_tgl12'
		$val = $CurrentForm->hasValue("tgl12") ? $CurrentForm->getValue("tgl12") : $CurrentForm->getValue("x_tgl12");
		if (!$this->tgl12->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl12->Visible = FALSE; // Disable update for API request
			else
				$this->tgl12->setFormValue($val);
			$this->tgl12->CurrentValue = UnFormatDateTime($this->tgl12->CurrentValue, 7);
		}
		$this->tgl12->setOldValue($CurrentForm->getValue("o_tgl12"));

		// Check field name 'id' first before field var 'x_id'
		$val = $CurrentForm->hasValue("id") ? $CurrentForm->getValue("id") : $CurrentForm->getValue("x_id");
		if (!$this->id->IsDetailKey && !$this->isGridAdd() && !$this->isAdd())
			$this->id->setFormValue($val);
	}

	// Restore form values
	public function restoreFormValues()
	{
		global $CurrentForm;
		if (!$this->isGridAdd() && !$this->isAdd())
			$this->id->CurrentValue = $this->id->FormValue;
		$this->iuran_id->CurrentValue = $this->iuran_id->FormValue;
		$this->Jumlah->CurrentValue = $this->Jumlah->FormValue;
		$this->byr01->CurrentValue = $this->byr01->FormValue;
		$this->jml01->CurrentValue = $this->jml01->FormValue;
		$this->tgl01->CurrentValue = $this->tgl01->FormValue;
		$this->tgl01->CurrentValue = UnFormatDateTime($this->tgl01->CurrentValue, 7);
		$this->byr02->CurrentValue = $this->byr02->FormValue;
		$this->jml02->CurrentValue = $this->jml02->FormValue;
		$this->tgl02->CurrentValue = $this->tgl02->FormValue;
		$this->tgl02->CurrentValue = UnFormatDateTime($this->tgl02->CurrentValue, 7);
		$this->byr03->CurrentValue = $this->byr03->FormValue;
		$this->jml03->CurrentValue = $this->jml03->FormValue;
		$this->tgl03->CurrentValue = $this->tgl03->FormValue;
		$this->tgl03->CurrentValue = UnFormatDateTime($this->tgl03->CurrentValue, 7);
		$this->byr04->CurrentValue = $this->byr04->FormValue;
		$this->jml04->CurrentValue = $this->jml04->FormValue;
		$this->tgl04->CurrentValue = $this->tgl04->FormValue;
		$this->tgl04->CurrentValue = UnFormatDateTime($this->tgl04->CurrentValue, 7);
		$this->byr05->CurrentValue = $this->byr05->FormValue;
		$this->jml05->CurrentValue = $this->jml05->FormValue;
		$this->tgl05->CurrentValue = $this->tgl05->FormValue;
		$this->tgl05->CurrentValue = UnFormatDateTime($this->tgl05->CurrentValue, 7);
		$this->byr06->CurrentValue = $this->byr06->FormValue;
		$this->jml06->CurrentValue = $this->jml06->FormValue;
		$this->tgl06->CurrentValue = $this->tgl06->FormValue;
		$this->tgl06->CurrentValue = UnFormatDateTime($this->tgl06->CurrentValue, 7);
		$this->byr07->CurrentValue = $this->byr07->FormValue;
		$this->jml07->CurrentValue = $this->jml07->FormValue;
		$this->tgl07->CurrentValue = $this->tgl07->FormValue;
		$this->tgl07->CurrentValue = UnFormatDateTime($this->tgl07->CurrentValue, 7);
		$this->byr08->CurrentValue = $this->byr08->FormValue;
		$this->jml08->CurrentValue = $this->jml08->FormValue;
		$this->tgl08->CurrentValue = $this->tgl08->FormValue;
		$this->tgl08->CurrentValue = UnFormatDateTime($this->tgl08->CurrentValue, 7);
		$this->byr09->CurrentValue = $this->byr09->FormValue;
		$this->jml09->CurrentValue = $this->jml09->FormValue;
		$this->tgl09->CurrentValue = $this->tgl09->FormValue;
		$this->tgl09->CurrentValue = UnFormatDateTime($this->tgl09->CurrentValue, 7);
		$this->byr10->CurrentValue = $this->byr10->FormValue;
		$this->jml10->CurrentValue = $this->jml10->FormValue;
		$this->tgl10->CurrentValue = $this->tgl10->FormValue;
		$this->tgl10->CurrentValue = UnFormatDateTime($this->tgl10->CurrentValue, 7);
		$this->byr11->CurrentValue = $this->byr11->FormValue;
		$this->jml11->CurrentValue = $this->jml11->FormValue;
		$this->tgl11->CurrentValue = $this->tgl11->FormValue;
		$this->tgl11->CurrentValue = UnFormatDateTime($this->tgl11->CurrentValue, 7);
		$this->byr12->CurrentValue = $this->byr12->FormValue;
		$this->jml12->CurrentValue = $this->jml12->FormValue;
		$this->tgl12->CurrentValue = $this->tgl12->FormValue;
		$this->tgl12->CurrentValue = UnFormatDateTime($this->tgl12->CurrentValue, 7);
	}

	// Load recordset
	public function loadRecordset($offset = -1, $rowcnt = -1)
	{

		// Load List page SQL
		$sql = $this->getListSql();
		$conn = $this->getConnection();

		// Load recordset
		$dbtype = GetConnectionType($this->Dbid);
		if ($this->UseSelectLimit) {
			$conn->raiseErrorFn = Config("ERROR_FUNC");
			if ($dbtype == "MSSQL") {
				$rs = $conn->selectLimit($sql, $rowcnt, $offset, ["_hasOrderBy" => trim($this->getOrderBy()) || trim($this->getSessionOrderBy())]);
			} else {
				$rs = $conn->selectLimit($sql, $rowcnt, $offset);
			}
			$conn->raiseErrorFn = "";
		} else {
			$rs = LoadRecordset($sql, $conn);
		}

		// Call Recordset Selected event
		$this->Recordset_Selected($rs);
		return $rs;
	}

	// Load row based on key values
	public function loadRow()
	{
		global $Security, $Language;
		$filter = $this->getRecordFilter();

		// Call Row Selecting event
		$this->Row_Selecting($filter);

		// Load SQL based on filter
		$this->CurrentFilter = $filter;
		$sql = $this->getCurrentSql();
		$conn = $this->getConnection();
		$res = FALSE;
		$rs = LoadRecordset($sql, $conn);
		if ($rs && !$rs->EOF) {
			$res = TRUE;
			$this->loadRowValues($rs); // Load row values
			$rs->close();
		}
		return $res;
	}

	// Load row values from recordset
	public function loadRowValues($rs = NULL)
	{
		if ($rs && !$rs->EOF)
			$row = $rs->fields;
		else
			$row = $this->newRow();

		// Call Row Selected event
		$this->Row_Selected($row);
		if (!$rs || $rs->EOF)
			return;
		$this->id->setDbValue($row['id']);
		$this->daf_kelas_siswa_id->setDbValue($row['daf_kelas_siswa_id']);
		$this->iuran_id->setDbValue($row['iuran_id']);
		$this->Jumlah->setDbValue($row['Jumlah']);
		$this->byr01->setDbValue($row['byr01']);
		$this->jml01->setDbValue($row['jml01']);
		$this->tgl01->setDbValue($row['tgl01']);
		$this->byr02->setDbValue($row['byr02']);
		$this->jml02->setDbValue($row['jml02']);
		$this->tgl02->setDbValue($row['tgl02']);
		$this->byr03->setDbValue($row['byr03']);
		$this->jml03->setDbValue($row['jml03']);
		$this->tgl03->setDbValue($row['tgl03']);
		$this->byr04->setDbValue($row['byr04']);
		$this->jml04->setDbValue($row['jml04']);
		$this->tgl04->setDbValue($row['tgl04']);
		$this->byr05->setDbValue($row['byr05']);
		$this->jml05->setDbValue($row['jml05']);
		$this->tgl05->setDbValue($row['tgl05']);
		$this->byr06->setDbValue($row['byr06']);
		$this->jml06->setDbValue($row['jml06']);
		$this->tgl06->setDbValue($row['tgl06']);
		$this->byr07->setDbValue($row['byr07']);
		$this->jml07->setDbValue($row['jml07']);
		$this->tgl07->setDbValue($row['tgl07']);
		$this->byr08->setDbValue($row['byr08']);
		$this->jml08->setDbValue($row['jml08']);
		$this->tgl08->setDbValue($row['tgl08']);
		$this->byr09->setDbValue($row['byr09']);
		$this->jml09->setDbValue($row['jml09']);
		$this->tgl09->setDbValue($row['tgl09']);
		$this->byr10->setDbValue($row['byr10']);
		$this->jml10->setDbValue($row['jml10']);
		$this->tgl10->setDbValue($row['tgl10']);
		$this->byr11->setDbValue($row['byr11']);
		$this->jml11->setDbValue($row['jml11']);
		$this->tgl11->setDbValue($row['tgl11']);
		$this->byr12->setDbValue($row['byr12']);
		$this->jml12->setDbValue($row['jml12']);
		$this->tgl12->setDbValue($row['tgl12']);
	}

	// Return a row with default values
	protected function newRow()
	{
		$this->loadDefaultValues();
		$row = [];
		$row['id'] = $this->id->CurrentValue;
		$row['daf_kelas_siswa_id'] = $this->daf_kelas_siswa_id->CurrentValue;
		$row['iuran_id'] = $this->iuran_id->CurrentValue;
		$row['Jumlah'] = $this->Jumlah->CurrentValue;
		$row['byr01'] = $this->byr01->CurrentValue;
		$row['jml01'] = $this->jml01->CurrentValue;
		$row['tgl01'] = $this->tgl01->CurrentValue;
		$row['byr02'] = $this->byr02->CurrentValue;
		$row['jml02'] = $this->jml02->CurrentValue;
		$row['tgl02'] = $this->tgl02->CurrentValue;
		$row['byr03'] = $this->byr03->CurrentValue;
		$row['jml03'] = $this->jml03->CurrentValue;
		$row['tgl03'] = $this->tgl03->CurrentValue;
		$row['byr04'] = $this->byr04->CurrentValue;
		$row['jml04'] = $this->jml04->CurrentValue;
		$row['tgl04'] = $this->tgl04->CurrentValue;
		$row['byr05'] = $this->byr05->CurrentValue;
		$row['jml05'] = $this->jml05->CurrentValue;
		$row['tgl05'] = $this->tgl05->CurrentValue;
		$row['byr06'] = $this->byr06->CurrentValue;
		$row['jml06'] = $this->jml06->CurrentValue;
		$row['tgl06'] = $this->tgl06->CurrentValue;
		$row['byr07'] = $this->byr07->CurrentValue;
		$row['jml07'] = $this->jml07->CurrentValue;
		$row['tgl07'] = $this->tgl07->CurrentValue;
		$row['byr08'] = $this->byr08->CurrentValue;
		$row['jml08'] = $this->jml08->CurrentValue;
		$row['tgl08'] = $this->tgl08->CurrentValue;
		$row['byr09'] = $this->byr09->CurrentValue;
		$row['jml09'] = $this->jml09->CurrentValue;
		$row['tgl09'] = $this->tgl09->CurrentValue;
		$row['byr10'] = $this->byr10->CurrentValue;
		$row['jml10'] = $this->jml10->CurrentValue;
		$row['tgl10'] = $this->tgl10->CurrentValue;
		$row['byr11'] = $this->byr11->CurrentValue;
		$row['jml11'] = $this->jml11->CurrentValue;
		$row['tgl11'] = $this->tgl11->CurrentValue;
		$row['byr12'] = $this->byr12->CurrentValue;
		$row['jml12'] = $this->jml12->CurrentValue;
		$row['tgl12'] = $this->tgl12->CurrentValue;
		return $row;
	}

	// Load old record
	protected function loadOldRecord()
	{

		// Load key values from Session
		$validKey = TRUE;
		$keys = [$this->RowOldKey];
		$cnt = count($keys);
		if ($cnt >= 1) {
			if (strval($keys[0]) != "")
				$this->id->OldValue = strval($keys[0]); // id
			else
				$validKey = FALSE;
		} else {
			$validKey = FALSE;
		}

		// Load old record
		$this->OldRecordset = NULL;
		if ($validKey) {
			$this->CurrentFilter = $this->getRecordFilter();
			$sql = $this->getCurrentSql();
			$conn = $this->getConnection();
			$this->OldRecordset = LoadRecordset($sql, $conn);
		}
		$this->loadRowValues($this->OldRecordset); // Load row values
		return $validKey;
	}

	// Render row values based on field settings
	public function renderRow()
	{
		global $Security, $Language, $CurrentLanguage;

		// Initialize URLs
		$this->ViewUrl = $this->getViewUrl();
		$this->EditUrl = $this->getEditUrl();
		$this->CopyUrl = $this->getCopyUrl();
		$this->DeleteUrl = $this->getDeleteUrl();

		// Convert decimal values if posted back
		if ($this->Jumlah->FormValue == $this->Jumlah->CurrentValue && is_numeric(ConvertToFloatString($this->Jumlah->CurrentValue)))
			$this->Jumlah->CurrentValue = ConvertToFloatString($this->Jumlah->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml01->FormValue == $this->jml01->CurrentValue && is_numeric(ConvertToFloatString($this->jml01->CurrentValue)))
			$this->jml01->CurrentValue = ConvertToFloatString($this->jml01->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml02->FormValue == $this->jml02->CurrentValue && is_numeric(ConvertToFloatString($this->jml02->CurrentValue)))
			$this->jml02->CurrentValue = ConvertToFloatString($this->jml02->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml03->FormValue == $this->jml03->CurrentValue && is_numeric(ConvertToFloatString($this->jml03->CurrentValue)))
			$this->jml03->CurrentValue = ConvertToFloatString($this->jml03->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml04->FormValue == $this->jml04->CurrentValue && is_numeric(ConvertToFloatString($this->jml04->CurrentValue)))
			$this->jml04->CurrentValue = ConvertToFloatString($this->jml04->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml05->FormValue == $this->jml05->CurrentValue && is_numeric(ConvertToFloatString($this->jml05->CurrentValue)))
			$this->jml05->CurrentValue = ConvertToFloatString($this->jml05->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml06->FormValue == $this->jml06->CurrentValue && is_numeric(ConvertToFloatString($this->jml06->CurrentValue)))
			$this->jml06->CurrentValue = ConvertToFloatString($this->jml06->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml07->FormValue == $this->jml07->CurrentValue && is_numeric(ConvertToFloatString($this->jml07->CurrentValue)))
			$this->jml07->CurrentValue = ConvertToFloatString($this->jml07->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml08->FormValue == $this->jml08->CurrentValue && is_numeric(ConvertToFloatString($this->jml08->CurrentValue)))
			$this->jml08->CurrentValue = ConvertToFloatString($this->jml08->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml09->FormValue == $this->jml09->CurrentValue && is_numeric(ConvertToFloatString($this->jml09->CurrentValue)))
			$this->jml09->CurrentValue = ConvertToFloatString($this->jml09->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml10->FormValue == $this->jml10->CurrentValue && is_numeric(ConvertToFloatString($this->jml10->CurrentValue)))
			$this->jml10->CurrentValue = ConvertToFloatString($this->jml10->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml11->FormValue == $this->jml11->CurrentValue && is_numeric(ConvertToFloatString($this->jml11->CurrentValue)))
			$this->jml11->CurrentValue = ConvertToFloatString($this->jml11->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml12->FormValue == $this->jml12->CurrentValue && is_numeric(ConvertToFloatString($this->jml12->CurrentValue)))
			$this->jml12->CurrentValue = ConvertToFloatString($this->jml12->CurrentValue);

		// Call Row_Rendering event
		$this->Row_Rendering();

		// Common render codes for all row types
		// id
		// daf_kelas_siswa_id
		// iuran_id
		// Jumlah
		// byr01
		// jml01
		// tgl01
		// byr02
		// jml02
		// tgl02
		// byr03
		// jml03
		// tgl03
		// byr04
		// jml04
		// tgl04
		// byr05
		// jml05
		// tgl05
		// byr06
		// jml06
		// tgl06
		// byr07
		// jml07
		// tgl07
		// byr08
		// jml08
		// tgl08
		// byr09
		// jml09
		// tgl09
		// byr10
		// jml10
		// tgl10
		// byr11
		// jml11
		// tgl11
		// byr12
		// jml12
		// tgl12

		if ($this->RowType == ROWTYPE_VIEW) { // View row

			// id
			$this->id->ViewValue = $this->id->CurrentValue;
			$this->id->ViewCustomAttributes = "";

			// daf_kelas_siswa_id
			$this->daf_kelas_siswa_id->ViewValue = $this->daf_kelas_siswa_id->CurrentValue;
			$this->daf_kelas_siswa_id->ViewValue = FormatNumber($this->daf_kelas_siswa_id->ViewValue, 0, -2, -2, -2);
			$this->daf_kelas_siswa_id->ViewCustomAttributes = "";

			// iuran_id
			$curVal = strval($this->iuran_id->CurrentValue);
			if ($curVal != "") {
				$this->iuran_id->ViewValue = $this->iuran_id->lookupCacheOption($curVal);
				if ($this->iuran_id->ViewValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->iuran_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = $rswrk->fields('df');
						$this->iuran_id->ViewValue = $this->iuran_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->iuran_id->ViewValue = $this->iuran_id->CurrentValue;
					}
				}
			} else {
				$this->iuran_id->ViewValue = NULL;
			}
			$this->iuran_id->ViewCustomAttributes = "";

			// Jumlah
			$this->Jumlah->ViewValue = $this->Jumlah->CurrentValue;
			$this->Jumlah->ViewValue = FormatNumber($this->Jumlah->ViewValue, 0, -2, -2, -2);
			$this->Jumlah->CellCssStyle .= "text-align: right;";
			$this->Jumlah->ViewCustomAttributes = "";

			// byr01
			if (ConvertToBool($this->byr01->CurrentValue)) {
				$this->byr01->ViewValue = $this->byr01->tagCaption(2) != "" ? $this->byr01->tagCaption(2) : "1";
			} else {
				$this->byr01->ViewValue = $this->byr01->tagCaption(1) != "" ? $this->byr01->tagCaption(1) : "0";
			}
			$this->byr01->ViewCustomAttributes = "";

			// jml01
			$this->jml01->ViewValue = $this->jml01->CurrentValue;
			$this->jml01->ViewValue = FormatNumber($this->jml01->ViewValue, 0, -2, -2, -2);
			$this->jml01->CellCssStyle .= "text-align: right;";
			$this->jml01->ViewCustomAttributes = "";

			// tgl01
			$this->tgl01->ViewValue = $this->tgl01->CurrentValue;
			$this->tgl01->ViewValue = FormatDateTime($this->tgl01->ViewValue, 7);
			$this->tgl01->ViewCustomAttributes = "";

			// byr02
			if (ConvertToBool($this->byr02->CurrentValue)) {
				$this->byr02->ViewValue = $this->byr02->tagCaption(2) != "" ? $this->byr02->tagCaption(2) : "1";
			} else {
				$this->byr02->ViewValue = $this->byr02->tagCaption(1) != "" ? $this->byr02->tagCaption(1) : "0";
			}
			$this->byr02->ViewCustomAttributes = "";

			// jml02
			$this->jml02->ViewValue = $this->jml02->CurrentValue;
			$this->jml02->ViewValue = FormatNumber($this->jml02->ViewValue, 0, -2, -2, -2);
			$this->jml02->CellCssStyle .= "text-align: right;";
			$this->jml02->ViewCustomAttributes = "";

			// tgl02
			$this->tgl02->ViewValue = $this->tgl02->CurrentValue;
			$this->tgl02->ViewValue = FormatDateTime($this->tgl02->ViewValue, 7);
			$this->tgl02->ViewCustomAttributes = "";

			// byr03
			if (ConvertToBool($this->byr03->CurrentValue)) {
				$this->byr03->ViewValue = $this->byr03->tagCaption(2) != "" ? $this->byr03->tagCaption(2) : "1";
			} else {
				$this->byr03->ViewValue = $this->byr03->tagCaption(1) != "" ? $this->byr03->tagCaption(1) : "0";
			}
			$this->byr03->ViewCustomAttributes = "";

			// jml03
			$this->jml03->ViewValue = $this->jml03->CurrentValue;
			$this->jml03->ViewValue = FormatNumber($this->jml03->ViewValue, 0, -2, -2, -2);
			$this->jml03->CellCssStyle .= "text-align: right;";
			$this->jml03->ViewCustomAttributes = "";

			// tgl03
			$this->tgl03->ViewValue = $this->tgl03->CurrentValue;
			$this->tgl03->ViewValue = FormatDateTime($this->tgl03->ViewValue, 7);
			$this->tgl03->ViewCustomAttributes = "";

			// byr04
			if (ConvertToBool($this->byr04->CurrentValue)) {
				$this->byr04->ViewValue = $this->byr04->tagCaption(2) != "" ? $this->byr04->tagCaption(2) : "1";
			} else {
				$this->byr04->ViewValue = $this->byr04->tagCaption(1) != "" ? $this->byr04->tagCaption(1) : "0";
			}
			$this->byr04->ViewCustomAttributes = "";

			// jml04
			$this->jml04->ViewValue = $this->jml04->CurrentValue;
			$this->jml04->ViewValue = FormatNumber($this->jml04->ViewValue, 0, -2, -2, -2);
			$this->jml04->CellCssStyle .= "text-align: right;";
			$this->jml04->ViewCustomAttributes = "";

			// tgl04
			$this->tgl04->ViewValue = $this->tgl04->CurrentValue;
			$this->tgl04->ViewValue = FormatDateTime($this->tgl04->ViewValue, 7);
			$this->tgl04->ViewCustomAttributes = "";

			// byr05
			if (ConvertToBool($this->byr05->CurrentValue)) {
				$this->byr05->ViewValue = $this->byr05->tagCaption(2) != "" ? $this->byr05->tagCaption(2) : "1";
			} else {
				$this->byr05->ViewValue = $this->byr05->tagCaption(1) != "" ? $this->byr05->tagCaption(1) : "0";
			}
			$this->byr05->ViewCustomAttributes = "";

			// jml05
			$this->jml05->ViewValue = $this->jml05->CurrentValue;
			$this->jml05->ViewValue = FormatNumber($this->jml05->ViewValue, 0, -2, -2, -2);
			$this->jml05->CellCssStyle .= "text-align: right;";
			$this->jml05->ViewCustomAttributes = "";

			// tgl05
			$this->tgl05->ViewValue = $this->tgl05->CurrentValue;
			$this->tgl05->ViewValue = FormatDateTime($this->tgl05->ViewValue, 7);
			$this->tgl05->ViewCustomAttributes = "";

			// byr06
			if (ConvertToBool($this->byr06->CurrentValue)) {
				$this->byr06->ViewValue = $this->byr06->tagCaption(2) != "" ? $this->byr06->tagCaption(2) : "1";
			} else {
				$this->byr06->ViewValue = $this->byr06->tagCaption(1) != "" ? $this->byr06->tagCaption(1) : "0";
			}
			$this->byr06->ViewCustomAttributes = "";

			// jml06
			$this->jml06->ViewValue = $this->jml06->CurrentValue;
			$this->jml06->ViewValue = FormatNumber($this->jml06->ViewValue, 0, -2, -2, -2);
			$this->jml06->CellCssStyle .= "text-align: right;";
			$this->jml06->ViewCustomAttributes = "";

			// tgl06
			$this->tgl06->ViewValue = $this->tgl06->CurrentValue;
			$this->tgl06->ViewValue = FormatDateTime($this->tgl06->ViewValue, 7);
			$this->tgl06->ViewCustomAttributes = "";

			// byr07
			if (ConvertToBool($this->byr07->CurrentValue)) {
				$this->byr07->ViewValue = $this->byr07->tagCaption(2) != "" ? $this->byr07->tagCaption(2) : "1";
			} else {
				$this->byr07->ViewValue = $this->byr07->tagCaption(1) != "" ? $this->byr07->tagCaption(1) : "0";
			}
			$this->byr07->ViewCustomAttributes = "";

			// jml07
			$this->jml07->ViewValue = $this->jml07->CurrentValue;
			$this->jml07->ViewValue = FormatNumber($this->jml07->ViewValue, 0, -2, -2, -2);
			$this->jml07->CellCssStyle .= "text-align: right;";
			$this->jml07->ViewCustomAttributes = "";

			// tgl07
			$this->tgl07->ViewValue = $this->tgl07->CurrentValue;
			$this->tgl07->ViewValue = FormatDateTime($this->tgl07->ViewValue, 7);
			$this->tgl07->ViewCustomAttributes = "";

			// byr08
			if (ConvertToBool($this->byr08->CurrentValue)) {
				$this->byr08->ViewValue = $this->byr08->tagCaption(2) != "" ? $this->byr08->tagCaption(2) : "1";
			} else {
				$this->byr08->ViewValue = $this->byr08->tagCaption(1) != "" ? $this->byr08->tagCaption(1) : "0";
			}
			$this->byr08->ViewCustomAttributes = "";

			// jml08
			$this->jml08->ViewValue = $this->jml08->CurrentValue;
			$this->jml08->ViewValue = FormatNumber($this->jml08->ViewValue, 0, -2, -2, -2);
			$this->jml08->CellCssStyle .= "text-align: right;";
			$this->jml08->ViewCustomAttributes = "";

			// tgl08
			$this->tgl08->ViewValue = $this->tgl08->CurrentValue;
			$this->tgl08->ViewValue = FormatDateTime($this->tgl08->ViewValue, 7);
			$this->tgl08->ViewCustomAttributes = "";

			// byr09
			if (ConvertToBool($this->byr09->CurrentValue)) {
				$this->byr09->ViewValue = $this->byr09->tagCaption(2) != "" ? $this->byr09->tagCaption(2) : "1";
			} else {
				$this->byr09->ViewValue = $this->byr09->tagCaption(1) != "" ? $this->byr09->tagCaption(1) : "0";
			}
			$this->byr09->ViewCustomAttributes = "";

			// jml09
			$this->jml09->ViewValue = $this->jml09->CurrentValue;
			$this->jml09->ViewValue = FormatNumber($this->jml09->ViewValue, 0, -2, -2, -2);
			$this->jml09->CellCssStyle .= "text-align: right;";
			$this->jml09->ViewCustomAttributes = "";

			// tgl09
			$this->tgl09->ViewValue = $this->tgl09->CurrentValue;
			$this->tgl09->ViewValue = FormatDateTime($this->tgl09->ViewValue, 7);
			$this->tgl09->ViewCustomAttributes = "";

			// byr10
			if (ConvertToBool($this->byr10->CurrentValue)) {
				$this->byr10->ViewValue = $this->byr10->tagCaption(2) != "" ? $this->byr10->tagCaption(2) : "1";
			} else {
				$this->byr10->ViewValue = $this->byr10->tagCaption(1) != "" ? $this->byr10->tagCaption(1) : "0";
			}
			$this->byr10->ViewCustomAttributes = "";

			// jml10
			$this->jml10->ViewValue = $this->jml10->CurrentValue;
			$this->jml10->ViewValue = FormatNumber($this->jml10->ViewValue, 0, -2, -2, -2);
			$this->jml10->CellCssStyle .= "text-align: right;";
			$this->jml10->ViewCustomAttributes = "";

			// tgl10
			$this->tgl10->ViewValue = $this->tgl10->CurrentValue;
			$this->tgl10->ViewValue = FormatDateTime($this->tgl10->ViewValue, 7);
			$this->tgl10->ViewCustomAttributes = "";

			// byr11
			if (ConvertToBool($this->byr11->CurrentValue)) {
				$this->byr11->ViewValue = $this->byr11->tagCaption(2) != "" ? $this->byr11->tagCaption(2) : "1";
			} else {
				$this->byr11->ViewValue = $this->byr11->tagCaption(1) != "" ? $this->byr11->tagCaption(1) : "0";
			}
			$this->byr11->ViewCustomAttributes = "";

			// jml11
			$this->jml11->ViewValue = $this->jml11->CurrentValue;
			$this->jml11->ViewValue = FormatNumber($this->jml11->ViewValue, 0, -2, -2, -2);
			$this->jml11->CellCssStyle .= "text-align: right;";
			$this->jml11->ViewCustomAttributes = "";

			// tgl11
			$this->tgl11->ViewValue = $this->tgl11->CurrentValue;
			$this->tgl11->ViewValue = FormatDateTime($this->tgl11->ViewValue, 7);
			$this->tgl11->ViewCustomAttributes = "";

			// byr12
			if (ConvertToBool($this->byr12->CurrentValue)) {
				$this->byr12->ViewValue = $this->byr12->tagCaption(2) != "" ? $this->byr12->tagCaption(2) : "1";
			} else {
				$this->byr12->ViewValue = $this->byr12->tagCaption(1) != "" ? $this->byr12->tagCaption(1) : "0";
			}
			$this->byr12->ViewCustomAttributes = "";

			// jml12
			$this->jml12->ViewValue = $this->jml12->CurrentValue;
			$this->jml12->ViewValue = FormatNumber($this->jml12->ViewValue, 0, -2, -2, -2);
			$this->jml12->CellCssStyle .= "text-align: right;";
			$this->jml12->ViewCustomAttributes = "";

			// tgl12
			$this->tgl12->ViewValue = $this->tgl12->CurrentValue;
			$this->tgl12->ViewValue = FormatDateTime($this->tgl12->ViewValue, 7);
			$this->tgl12->ViewCustomAttributes = "";

			// iuran_id
			$this->iuran_id->LinkCustomAttributes = "";
			$this->iuran_id->HrefValue = "";
			$this->iuran_id->TooltipValue = "";

			// Jumlah
			$this->Jumlah->LinkCustomAttributes = "";
			$this->Jumlah->HrefValue = "";
			$this->Jumlah->TooltipValue = "";

			// byr01
			$this->byr01->LinkCustomAttributes = "";
			$this->byr01->HrefValue = "";
			$this->byr01->TooltipValue = "";

			// jml01
			$this->jml01->LinkCustomAttributes = "";
			$this->jml01->HrefValue = "";
			$this->jml01->TooltipValue = "";

			// tgl01
			$this->tgl01->LinkCustomAttributes = "";
			$this->tgl01->HrefValue = "";
			$this->tgl01->TooltipValue = "";

			// byr02
			$this->byr02->LinkCustomAttributes = "";
			$this->byr02->HrefValue = "";
			$this->byr02->TooltipValue = "";

			// jml02
			$this->jml02->LinkCustomAttributes = "";
			$this->jml02->HrefValue = "";
			$this->jml02->TooltipValue = "";

			// tgl02
			$this->tgl02->LinkCustomAttributes = "";
			$this->tgl02->HrefValue = "";
			$this->tgl02->TooltipValue = "";

			// byr03
			$this->byr03->LinkCustomAttributes = "";
			$this->byr03->HrefValue = "";
			$this->byr03->TooltipValue = "";

			// jml03
			$this->jml03->LinkCustomAttributes = "";
			$this->jml03->HrefValue = "";
			$this->jml03->TooltipValue = "";

			// tgl03
			$this->tgl03->LinkCustomAttributes = "";
			$this->tgl03->HrefValue = "";
			$this->tgl03->TooltipValue = "";

			// byr04
			$this->byr04->LinkCustomAttributes = "";
			$this->byr04->HrefValue = "";
			$this->byr04->TooltipValue = "";

			// jml04
			$this->jml04->LinkCustomAttributes = "";
			$this->jml04->HrefValue = "";
			$this->jml04->TooltipValue = "";

			// tgl04
			$this->tgl04->LinkCustomAttributes = "";
			$this->tgl04->HrefValue = "";
			$this->tgl04->TooltipValue = "";

			// byr05
			$this->byr05->LinkCustomAttributes = "";
			$this->byr05->HrefValue = "";
			$this->byr05->TooltipValue = "";

			// jml05
			$this->jml05->LinkCustomAttributes = "";
			$this->jml05->HrefValue = "";
			$this->jml05->TooltipValue = "";

			// tgl05
			$this->tgl05->LinkCustomAttributes = "";
			$this->tgl05->HrefValue = "";
			$this->tgl05->TooltipValue = "";

			// byr06
			$this->byr06->LinkCustomAttributes = "";
			$this->byr06->HrefValue = "";
			$this->byr06->TooltipValue = "";

			// jml06
			$this->jml06->LinkCustomAttributes = "";
			$this->jml06->HrefValue = "";
			$this->jml06->TooltipValue = "";

			// tgl06
			$this->tgl06->LinkCustomAttributes = "";
			$this->tgl06->HrefValue = "";
			$this->tgl06->TooltipValue = "";

			// byr07
			$this->byr07->LinkCustomAttributes = "";
			$this->byr07->HrefValue = "";
			$this->byr07->TooltipValue = "";

			// jml07
			$this->jml07->LinkCustomAttributes = "";
			$this->jml07->HrefValue = "";
			$this->jml07->TooltipValue = "";

			// tgl07
			$this->tgl07->LinkCustomAttributes = "";
			$this->tgl07->HrefValue = "";
			$this->tgl07->TooltipValue = "";

			// byr08
			$this->byr08->LinkCustomAttributes = "";
			$this->byr08->HrefValue = "";
			$this->byr08->TooltipValue = "";

			// jml08
			$this->jml08->LinkCustomAttributes = "";
			$this->jml08->HrefValue = "";
			$this->jml08->TooltipValue = "";

			// tgl08
			$this->tgl08->LinkCustomAttributes = "";
			$this->tgl08->HrefValue = "";
			$this->tgl08->TooltipValue = "";

			// byr09
			$this->byr09->LinkCustomAttributes = "";
			$this->byr09->HrefValue = "";
			$this->byr09->TooltipValue = "";

			// jml09
			$this->jml09->LinkCustomAttributes = "";
			$this->jml09->HrefValue = "";
			$this->jml09->TooltipValue = "";

			// tgl09
			$this->tgl09->LinkCustomAttributes = "";
			$this->tgl09->HrefValue = "";
			$this->tgl09->TooltipValue = "";

			// byr10
			$this->byr10->LinkCustomAttributes = "";
			$this->byr10->HrefValue = "";
			$this->byr10->TooltipValue = "";

			// jml10
			$this->jml10->LinkCustomAttributes = "";
			$this->jml10->HrefValue = "";
			$this->jml10->TooltipValue = "";

			// tgl10
			$this->tgl10->LinkCustomAttributes = "";
			$this->tgl10->HrefValue = "";
			$this->tgl10->TooltipValue = "";

			// byr11
			$this->byr11->LinkCustomAttributes = "";
			$this->byr11->HrefValue = "";
			$this->byr11->TooltipValue = "";

			// jml11
			$this->jml11->LinkCustomAttributes = "";
			$this->jml11->HrefValue = "";
			$this->jml11->TooltipValue = "";

			// tgl11
			$this->tgl11->LinkCustomAttributes = "";
			$this->tgl11->HrefValue = "";
			$this->tgl11->TooltipValue = "";

			// byr12
			$this->byr12->LinkCustomAttributes = "";
			$this->byr12->HrefValue = "";
			$this->byr12->TooltipValue = "";

			// jml12
			$this->jml12->LinkCustomAttributes = "";
			$this->jml12->HrefValue = "";
			$this->jml12->TooltipValue = "";

			// tgl12
			$this->tgl12->LinkCustomAttributes = "";
			$this->tgl12->HrefValue = "";
			$this->tgl12->TooltipValue = "";
		} elseif ($this->RowType == ROWTYPE_ADD) { // Add row

			// iuran_id
			$this->iuran_id->EditCustomAttributes = "";
			$curVal = trim(strval($this->iuran_id->CurrentValue));
			if ($curVal != "")
				$this->iuran_id->ViewValue = $this->iuran_id->lookupCacheOption($curVal);
			else
				$this->iuran_id->ViewValue = $this->iuran_id->Lookup !== NULL && is_array($this->iuran_id->Lookup->Options) ? $curVal : NULL;
			if ($this->iuran_id->ViewValue !== NULL) { // Load from cache
				$this->iuran_id->EditValue = array_values($this->iuran_id->Lookup->Options);
				if ($this->iuran_id->ViewValue == "")
					$this->iuran_id->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`id`" . SearchString("=", $this->iuran_id->CurrentValue, DATATYPE_NUMBER, "");
				}
				$sqlWrk = $this->iuran_id->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = HtmlEncode($rswrk->fields('df'));
					$this->iuran_id->ViewValue = $this->iuran_id->displayValue($arwrk);
				} else {
					$this->iuran_id->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$this->iuran_id->EditValue = $arwrk;
			}

			// Jumlah
			$this->Jumlah->EditAttrs["class"] = "form-control";
			$this->Jumlah->EditCustomAttributes = "";
			$this->Jumlah->EditValue = HtmlEncode($this->Jumlah->CurrentValue);
			$this->Jumlah->PlaceHolder = RemoveHtml($this->Jumlah->caption());
			if (strval($this->Jumlah->EditValue) != "" && is_numeric($this->Jumlah->EditValue)) {
				$this->Jumlah->EditValue = FormatNumber($this->Jumlah->EditValue, -2, -2, -2, -2);
				$this->Jumlah->OldValue = $this->Jumlah->EditValue;
			}
			

			// byr01
			$this->byr01->EditCustomAttributes = "";
			$this->byr01->EditValue = $this->byr01->options(FALSE);

			// jml01
			$this->jml01->EditAttrs["class"] = "form-control";
			$this->jml01->EditCustomAttributes = "";
			$this->jml01->EditValue = HtmlEncode($this->jml01->CurrentValue);
			$this->jml01->PlaceHolder = RemoveHtml($this->jml01->caption());
			if (strval($this->jml01->EditValue) != "" && is_numeric($this->jml01->EditValue)) {
				$this->jml01->EditValue = FormatNumber($this->jml01->EditValue, -2, -2, -2, -2);
				$this->jml01->OldValue = $this->jml01->EditValue;
			}
			

			// tgl01
			$this->tgl01->EditAttrs["class"] = "form-control";
			$this->tgl01->EditCustomAttributes = "";
			$this->tgl01->EditValue = HtmlEncode(FormatDateTime($this->tgl01->CurrentValue, 7));
			$this->tgl01->PlaceHolder = RemoveHtml($this->tgl01->caption());

			// byr02
			$this->byr02->EditCustomAttributes = "";
			$this->byr02->EditValue = $this->byr02->options(FALSE);

			// jml02
			$this->jml02->EditAttrs["class"] = "form-control";
			$this->jml02->EditCustomAttributes = "";
			$this->jml02->EditValue = HtmlEncode($this->jml02->CurrentValue);
			$this->jml02->PlaceHolder = RemoveHtml($this->jml02->caption());
			if (strval($this->jml02->EditValue) != "" && is_numeric($this->jml02->EditValue)) {
				$this->jml02->EditValue = FormatNumber($this->jml02->EditValue, -2, -2, -2, -2);
				$this->jml02->OldValue = $this->jml02->EditValue;
			}
			

			// tgl02
			$this->tgl02->EditAttrs["class"] = "form-control";
			$this->tgl02->EditCustomAttributes = "";
			$this->tgl02->EditValue = HtmlEncode(FormatDateTime($this->tgl02->CurrentValue, 7));
			$this->tgl02->PlaceHolder = RemoveHtml($this->tgl02->caption());

			// byr03
			$this->byr03->EditCustomAttributes = "";
			$this->byr03->EditValue = $this->byr03->options(FALSE);

			// jml03
			$this->jml03->EditAttrs["class"] = "form-control";
			$this->jml03->EditCustomAttributes = "";
			$this->jml03->EditValue = HtmlEncode($this->jml03->CurrentValue);
			$this->jml03->PlaceHolder = RemoveHtml($this->jml03->caption());
			if (strval($this->jml03->EditValue) != "" && is_numeric($this->jml03->EditValue)) {
				$this->jml03->EditValue = FormatNumber($this->jml03->EditValue, -2, -2, -2, -2);
				$this->jml03->OldValue = $this->jml03->EditValue;
			}
			

			// tgl03
			$this->tgl03->EditAttrs["class"] = "form-control";
			$this->tgl03->EditCustomAttributes = "";
			$this->tgl03->EditValue = HtmlEncode(FormatDateTime($this->tgl03->CurrentValue, 7));
			$this->tgl03->PlaceHolder = RemoveHtml($this->tgl03->caption());

			// byr04
			$this->byr04->EditCustomAttributes = "";
			$this->byr04->EditValue = $this->byr04->options(FALSE);

			// jml04
			$this->jml04->EditAttrs["class"] = "form-control";
			$this->jml04->EditCustomAttributes = "";
			$this->jml04->EditValue = HtmlEncode($this->jml04->CurrentValue);
			$this->jml04->PlaceHolder = RemoveHtml($this->jml04->caption());
			if (strval($this->jml04->EditValue) != "" && is_numeric($this->jml04->EditValue)) {
				$this->jml04->EditValue = FormatNumber($this->jml04->EditValue, -2, -2, -2, -2);
				$this->jml04->OldValue = $this->jml04->EditValue;
			}
			

			// tgl04
			$this->tgl04->EditAttrs["class"] = "form-control";
			$this->tgl04->EditCustomAttributes = "";
			$this->tgl04->EditValue = HtmlEncode(FormatDateTime($this->tgl04->CurrentValue, 7));
			$this->tgl04->PlaceHolder = RemoveHtml($this->tgl04->caption());

			// byr05
			$this->byr05->EditCustomAttributes = "";
			$this->byr05->EditValue = $this->byr05->options(FALSE);

			// jml05
			$this->jml05->EditAttrs["class"] = "form-control";
			$this->jml05->EditCustomAttributes = "";
			$this->jml05->EditValue = HtmlEncode($this->jml05->CurrentValue);
			$this->jml05->PlaceHolder = RemoveHtml($this->jml05->caption());
			if (strval($this->jml05->EditValue) != "" && is_numeric($this->jml05->EditValue)) {
				$this->jml05->EditValue = FormatNumber($this->jml05->EditValue, -2, -2, -2, -2);
				$this->jml05->OldValue = $this->jml05->EditValue;
			}
			

			// tgl05
			$this->tgl05->EditAttrs["class"] = "form-control";
			$this->tgl05->EditCustomAttributes = "";
			$this->tgl05->EditValue = HtmlEncode(FormatDateTime($this->tgl05->CurrentValue, 7));
			$this->tgl05->PlaceHolder = RemoveHtml($this->tgl05->caption());

			// byr06
			$this->byr06->EditCustomAttributes = "";
			$this->byr06->EditValue = $this->byr06->options(FALSE);

			// jml06
			$this->jml06->EditAttrs["class"] = "form-control";
			$this->jml06->EditCustomAttributes = "";
			$this->jml06->EditValue = HtmlEncode($this->jml06->CurrentValue);
			$this->jml06->PlaceHolder = RemoveHtml($this->jml06->caption());
			if (strval($this->jml06->EditValue) != "" && is_numeric($this->jml06->EditValue)) {
				$this->jml06->EditValue = FormatNumber($this->jml06->EditValue, -2, -2, -2, -2);
				$this->jml06->OldValue = $this->jml06->EditValue;
			}
			

			// tgl06
			$this->tgl06->EditAttrs["class"] = "form-control";
			$this->tgl06->EditCustomAttributes = "";
			$this->tgl06->EditValue = HtmlEncode(FormatDateTime($this->tgl06->CurrentValue, 7));
			$this->tgl06->PlaceHolder = RemoveHtml($this->tgl06->caption());

			// byr07
			$this->byr07->EditCustomAttributes = "";
			$this->byr07->EditValue = $this->byr07->options(FALSE);

			// jml07
			$this->jml07->EditAttrs["class"] = "form-control";
			$this->jml07->EditCustomAttributes = "";
			$this->jml07->EditValue = HtmlEncode($this->jml07->CurrentValue);
			$this->jml07->PlaceHolder = RemoveHtml($this->jml07->caption());
			if (strval($this->jml07->EditValue) != "" && is_numeric($this->jml07->EditValue)) {
				$this->jml07->EditValue = FormatNumber($this->jml07->EditValue, -2, -2, -2, -2);
				$this->jml07->OldValue = $this->jml07->EditValue;
			}
			

			// tgl07
			$this->tgl07->EditAttrs["class"] = "form-control";
			$this->tgl07->EditCustomAttributes = "";
			$this->tgl07->EditValue = HtmlEncode(FormatDateTime($this->tgl07->CurrentValue, 7));
			$this->tgl07->PlaceHolder = RemoveHtml($this->tgl07->caption());

			// byr08
			$this->byr08->EditCustomAttributes = "";
			$this->byr08->EditValue = $this->byr08->options(FALSE);

			// jml08
			$this->jml08->EditAttrs["class"] = "form-control";
			$this->jml08->EditCustomAttributes = "";
			$this->jml08->EditValue = HtmlEncode($this->jml08->CurrentValue);
			$this->jml08->PlaceHolder = RemoveHtml($this->jml08->caption());
			if (strval($this->jml08->EditValue) != "" && is_numeric($this->jml08->EditValue)) {
				$this->jml08->EditValue = FormatNumber($this->jml08->EditValue, -2, -2, -2, -2);
				$this->jml08->OldValue = $this->jml08->EditValue;
			}
			

			// tgl08
			$this->tgl08->EditAttrs["class"] = "form-control";
			$this->tgl08->EditCustomAttributes = "";
			$this->tgl08->EditValue = HtmlEncode(FormatDateTime($this->tgl08->CurrentValue, 7));
			$this->tgl08->PlaceHolder = RemoveHtml($this->tgl08->caption());

			// byr09
			$this->byr09->EditCustomAttributes = "";
			$this->byr09->EditValue = $this->byr09->options(FALSE);

			// jml09
			$this->jml09->EditAttrs["class"] = "form-control";
			$this->jml09->EditCustomAttributes = "";
			$this->jml09->EditValue = HtmlEncode($this->jml09->CurrentValue);
			$this->jml09->PlaceHolder = RemoveHtml($this->jml09->caption());
			if (strval($this->jml09->EditValue) != "" && is_numeric($this->jml09->EditValue)) {
				$this->jml09->EditValue = FormatNumber($this->jml09->EditValue, -2, -2, -2, -2);
				$this->jml09->OldValue = $this->jml09->EditValue;
			}
			

			// tgl09
			$this->tgl09->EditAttrs["class"] = "form-control";
			$this->tgl09->EditCustomAttributes = "";
			$this->tgl09->EditValue = HtmlEncode(FormatDateTime($this->tgl09->CurrentValue, 7));
			$this->tgl09->PlaceHolder = RemoveHtml($this->tgl09->caption());

			// byr10
			$this->byr10->EditCustomAttributes = "";
			$this->byr10->EditValue = $this->byr10->options(FALSE);

			// jml10
			$this->jml10->EditAttrs["class"] = "form-control";
			$this->jml10->EditCustomAttributes = "";
			$this->jml10->EditValue = HtmlEncode($this->jml10->CurrentValue);
			$this->jml10->PlaceHolder = RemoveHtml($this->jml10->caption());
			if (strval($this->jml10->EditValue) != "" && is_numeric($this->jml10->EditValue)) {
				$this->jml10->EditValue = FormatNumber($this->jml10->EditValue, -2, -2, -2, -2);
				$this->jml10->OldValue = $this->jml10->EditValue;
			}
			

			// tgl10
			$this->tgl10->EditAttrs["class"] = "form-control";
			$this->tgl10->EditCustomAttributes = "";
			$this->tgl10->EditValue = HtmlEncode(FormatDateTime($this->tgl10->CurrentValue, 7));
			$this->tgl10->PlaceHolder = RemoveHtml($this->tgl10->caption());

			// byr11
			$this->byr11->EditCustomAttributes = "";
			$this->byr11->EditValue = $this->byr11->options(FALSE);

			// jml11
			$this->jml11->EditAttrs["class"] = "form-control";
			$this->jml11->EditCustomAttributes = "";
			$this->jml11->EditValue = HtmlEncode($this->jml11->CurrentValue);
			$this->jml11->PlaceHolder = RemoveHtml($this->jml11->caption());
			if (strval($this->jml11->EditValue) != "" && is_numeric($this->jml11->EditValue)) {
				$this->jml11->EditValue = FormatNumber($this->jml11->EditValue, -2, -2, -2, -2);
				$this->jml11->OldValue = $this->jml11->EditValue;
			}
			

			// tgl11
			$this->tgl11->EditAttrs["class"] = "form-control";
			$this->tgl11->EditCustomAttributes = "";
			$this->tgl11->EditValue = HtmlEncode(FormatDateTime($this->tgl11->CurrentValue, 7));
			$this->tgl11->PlaceHolder = RemoveHtml($this->tgl11->caption());

			// byr12
			$this->byr12->EditCustomAttributes = "";
			$this->byr12->EditValue = $this->byr12->options(FALSE);

			// jml12
			$this->jml12->EditAttrs["class"] = "form-control";
			$this->jml12->EditCustomAttributes = "";
			$this->jml12->EditValue = HtmlEncode($this->jml12->CurrentValue);
			$this->jml12->PlaceHolder = RemoveHtml($this->jml12->caption());
			if (strval($this->jml12->EditValue) != "" && is_numeric($this->jml12->EditValue)) {
				$this->jml12->EditValue = FormatNumber($this->jml12->EditValue, -2, -2, -2, -2);
				$this->jml12->OldValue = $this->jml12->EditValue;
			}
			

			// tgl12
			$this->tgl12->EditAttrs["class"] = "form-control";
			$this->tgl12->EditCustomAttributes = "";
			$this->tgl12->EditValue = HtmlEncode(FormatDateTime($this->tgl12->CurrentValue, 7));
			$this->tgl12->PlaceHolder = RemoveHtml($this->tgl12->caption());

			// Add refer script
			// iuran_id

			$this->iuran_id->LinkCustomAttributes = "";
			$this->iuran_id->HrefValue = "";

			// Jumlah
			$this->Jumlah->LinkCustomAttributes = "";
			$this->Jumlah->HrefValue = "";

			// byr01
			$this->byr01->LinkCustomAttributes = "";
			$this->byr01->HrefValue = "";

			// jml01
			$this->jml01->LinkCustomAttributes = "";
			$this->jml01->HrefValue = "";

			// tgl01
			$this->tgl01->LinkCustomAttributes = "";
			$this->tgl01->HrefValue = "";

			// byr02
			$this->byr02->LinkCustomAttributes = "";
			$this->byr02->HrefValue = "";

			// jml02
			$this->jml02->LinkCustomAttributes = "";
			$this->jml02->HrefValue = "";

			// tgl02
			$this->tgl02->LinkCustomAttributes = "";
			$this->tgl02->HrefValue = "";

			// byr03
			$this->byr03->LinkCustomAttributes = "";
			$this->byr03->HrefValue = "";

			// jml03
			$this->jml03->LinkCustomAttributes = "";
			$this->jml03->HrefValue = "";

			// tgl03
			$this->tgl03->LinkCustomAttributes = "";
			$this->tgl03->HrefValue = "";

			// byr04
			$this->byr04->LinkCustomAttributes = "";
			$this->byr04->HrefValue = "";

			// jml04
			$this->jml04->LinkCustomAttributes = "";
			$this->jml04->HrefValue = "";

			// tgl04
			$this->tgl04->LinkCustomAttributes = "";
			$this->tgl04->HrefValue = "";

			// byr05
			$this->byr05->LinkCustomAttributes = "";
			$this->byr05->HrefValue = "";

			// jml05
			$this->jml05->LinkCustomAttributes = "";
			$this->jml05->HrefValue = "";

			// tgl05
			$this->tgl05->LinkCustomAttributes = "";
			$this->tgl05->HrefValue = "";

			// byr06
			$this->byr06->LinkCustomAttributes = "";
			$this->byr06->HrefValue = "";

			// jml06
			$this->jml06->LinkCustomAttributes = "";
			$this->jml06->HrefValue = "";

			// tgl06
			$this->tgl06->LinkCustomAttributes = "";
			$this->tgl06->HrefValue = "";

			// byr07
			$this->byr07->LinkCustomAttributes = "";
			$this->byr07->HrefValue = "";

			// jml07
			$this->jml07->LinkCustomAttributes = "";
			$this->jml07->HrefValue = "";

			// tgl07
			$this->tgl07->LinkCustomAttributes = "";
			$this->tgl07->HrefValue = "";

			// byr08
			$this->byr08->LinkCustomAttributes = "";
			$this->byr08->HrefValue = "";

			// jml08
			$this->jml08->LinkCustomAttributes = "";
			$this->jml08->HrefValue = "";

			// tgl08
			$this->tgl08->LinkCustomAttributes = "";
			$this->tgl08->HrefValue = "";

			// byr09
			$this->byr09->LinkCustomAttributes = "";
			$this->byr09->HrefValue = "";

			// jml09
			$this->jml09->LinkCustomAttributes = "";
			$this->jml09->HrefValue = "";

			// tgl09
			$this->tgl09->LinkCustomAttributes = "";
			$this->tgl09->HrefValue = "";

			// byr10
			$this->byr10->LinkCustomAttributes = "";
			$this->byr10->HrefValue = "";

			// jml10
			$this->jml10->LinkCustomAttributes = "";
			$this->jml10->HrefValue = "";

			// tgl10
			$this->tgl10->LinkCustomAttributes = "";
			$this->tgl10->HrefValue = "";

			// byr11
			$this->byr11->LinkCustomAttributes = "";
			$this->byr11->HrefValue = "";

			// jml11
			$this->jml11->LinkCustomAttributes = "";
			$this->jml11->HrefValue = "";

			// tgl11
			$this->tgl11->LinkCustomAttributes = "";
			$this->tgl11->HrefValue = "";

			// byr12
			$this->byr12->LinkCustomAttributes = "";
			$this->byr12->HrefValue = "";

			// jml12
			$this->jml12->LinkCustomAttributes = "";
			$this->jml12->HrefValue = "";

			// tgl12
			$this->tgl12->LinkCustomAttributes = "";
			$this->tgl12->HrefValue = "";
		} elseif ($this->RowType == ROWTYPE_EDIT) { // Edit row

			// iuran_id
			$this->iuran_id->EditCustomAttributes = "";
			$curVal = trim(strval($this->iuran_id->CurrentValue));
			if ($curVal != "")
				$this->iuran_id->ViewValue = $this->iuran_id->lookupCacheOption($curVal);
			else
				$this->iuran_id->ViewValue = $this->iuran_id->Lookup !== NULL && is_array($this->iuran_id->Lookup->Options) ? $curVal : NULL;
			if ($this->iuran_id->ViewValue !== NULL) { // Load from cache
				$this->iuran_id->EditValue = array_values($this->iuran_id->Lookup->Options);
				if ($this->iuran_id->ViewValue == "")
					$this->iuran_id->ViewValue = $Language->phrase("PleaseSelect");
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`id`" . SearchString("=", $this->iuran_id->CurrentValue, DATATYPE_NUMBER, "");
				}
				$sqlWrk = $this->iuran_id->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = HtmlEncode($rswrk->fields('df'));
					$this->iuran_id->ViewValue = $this->iuran_id->displayValue($arwrk);
				} else {
					$this->iuran_id->ViewValue = $Language->phrase("PleaseSelect");
				}
				$arwrk = $rswrk ? $rswrk->getRows() : [];
				if ($rswrk)
					$rswrk->close();
				$this->iuran_id->EditValue = $arwrk;
			}

			// Jumlah
			$this->Jumlah->EditAttrs["class"] = "form-control";
			$this->Jumlah->EditCustomAttributes = "";
			$this->Jumlah->EditValue = HtmlEncode($this->Jumlah->CurrentValue);
			$this->Jumlah->PlaceHolder = RemoveHtml($this->Jumlah->caption());
			if (strval($this->Jumlah->EditValue) != "" && is_numeric($this->Jumlah->EditValue)) {
				$this->Jumlah->EditValue = FormatNumber($this->Jumlah->EditValue, -2, -2, -2, -2);
				$this->Jumlah->OldValue = $this->Jumlah->EditValue;
			}
			

			// byr01
			$this->byr01->EditCustomAttributes = "";
			$this->byr01->EditValue = $this->byr01->options(FALSE);

			// jml01
			$this->jml01->EditAttrs["class"] = "form-control";
			$this->jml01->EditCustomAttributes = "";
			$this->jml01->EditValue = HtmlEncode($this->jml01->CurrentValue);
			$this->jml01->PlaceHolder = RemoveHtml($this->jml01->caption());
			if (strval($this->jml01->EditValue) != "" && is_numeric($this->jml01->EditValue)) {
				$this->jml01->EditValue = FormatNumber($this->jml01->EditValue, -2, -2, -2, -2);
				$this->jml01->OldValue = $this->jml01->EditValue;
			}
			

			// tgl01
			$this->tgl01->EditAttrs["class"] = "form-control";
			$this->tgl01->EditCustomAttributes = "";
			$this->tgl01->EditValue = HtmlEncode(FormatDateTime($this->tgl01->CurrentValue, 7));
			$this->tgl01->PlaceHolder = RemoveHtml($this->tgl01->caption());

			// byr02
			$this->byr02->EditCustomAttributes = "";
			$this->byr02->EditValue = $this->byr02->options(FALSE);

			// jml02
			$this->jml02->EditAttrs["class"] = "form-control";
			$this->jml02->EditCustomAttributes = "";
			$this->jml02->EditValue = HtmlEncode($this->jml02->CurrentValue);
			$this->jml02->PlaceHolder = RemoveHtml($this->jml02->caption());
			if (strval($this->jml02->EditValue) != "" && is_numeric($this->jml02->EditValue)) {
				$this->jml02->EditValue = FormatNumber($this->jml02->EditValue, -2, -2, -2, -2);
				$this->jml02->OldValue = $this->jml02->EditValue;
			}
			

			// tgl02
			$this->tgl02->EditAttrs["class"] = "form-control";
			$this->tgl02->EditCustomAttributes = "";
			$this->tgl02->EditValue = HtmlEncode(FormatDateTime($this->tgl02->CurrentValue, 7));
			$this->tgl02->PlaceHolder = RemoveHtml($this->tgl02->caption());

			// byr03
			$this->byr03->EditCustomAttributes = "";
			$this->byr03->EditValue = $this->byr03->options(FALSE);

			// jml03
			$this->jml03->EditAttrs["class"] = "form-control";
			$this->jml03->EditCustomAttributes = "";
			$this->jml03->EditValue = HtmlEncode($this->jml03->CurrentValue);
			$this->jml03->PlaceHolder = RemoveHtml($this->jml03->caption());
			if (strval($this->jml03->EditValue) != "" && is_numeric($this->jml03->EditValue)) {
				$this->jml03->EditValue = FormatNumber($this->jml03->EditValue, -2, -2, -2, -2);
				$this->jml03->OldValue = $this->jml03->EditValue;
			}
			

			// tgl03
			$this->tgl03->EditAttrs["class"] = "form-control";
			$this->tgl03->EditCustomAttributes = "";
			$this->tgl03->EditValue = HtmlEncode(FormatDateTime($this->tgl03->CurrentValue, 7));
			$this->tgl03->PlaceHolder = RemoveHtml($this->tgl03->caption());

			// byr04
			$this->byr04->EditCustomAttributes = "";
			$this->byr04->EditValue = $this->byr04->options(FALSE);

			// jml04
			$this->jml04->EditAttrs["class"] = "form-control";
			$this->jml04->EditCustomAttributes = "";
			$this->jml04->EditValue = HtmlEncode($this->jml04->CurrentValue);
			$this->jml04->PlaceHolder = RemoveHtml($this->jml04->caption());
			if (strval($this->jml04->EditValue) != "" && is_numeric($this->jml04->EditValue)) {
				$this->jml04->EditValue = FormatNumber($this->jml04->EditValue, -2, -2, -2, -2);
				$this->jml04->OldValue = $this->jml04->EditValue;
			}
			

			// tgl04
			$this->tgl04->EditAttrs["class"] = "form-control";
			$this->tgl04->EditCustomAttributes = "";
			$this->tgl04->EditValue = HtmlEncode(FormatDateTime($this->tgl04->CurrentValue, 7));
			$this->tgl04->PlaceHolder = RemoveHtml($this->tgl04->caption());

			// byr05
			$this->byr05->EditCustomAttributes = "";
			$this->byr05->EditValue = $this->byr05->options(FALSE);

			// jml05
			$this->jml05->EditAttrs["class"] = "form-control";
			$this->jml05->EditCustomAttributes = "";
			$this->jml05->EditValue = HtmlEncode($this->jml05->CurrentValue);
			$this->jml05->PlaceHolder = RemoveHtml($this->jml05->caption());
			if (strval($this->jml05->EditValue) != "" && is_numeric($this->jml05->EditValue)) {
				$this->jml05->EditValue = FormatNumber($this->jml05->EditValue, -2, -2, -2, -2);
				$this->jml05->OldValue = $this->jml05->EditValue;
			}
			

			// tgl05
			$this->tgl05->EditAttrs["class"] = "form-control";
			$this->tgl05->EditCustomAttributes = "";
			$this->tgl05->EditValue = HtmlEncode(FormatDateTime($this->tgl05->CurrentValue, 7));
			$this->tgl05->PlaceHolder = RemoveHtml($this->tgl05->caption());

			// byr06
			$this->byr06->EditCustomAttributes = "";
			$this->byr06->EditValue = $this->byr06->options(FALSE);

			// jml06
			$this->jml06->EditAttrs["class"] = "form-control";
			$this->jml06->EditCustomAttributes = "";
			$this->jml06->EditValue = HtmlEncode($this->jml06->CurrentValue);
			$this->jml06->PlaceHolder = RemoveHtml($this->jml06->caption());
			if (strval($this->jml06->EditValue) != "" && is_numeric($this->jml06->EditValue)) {
				$this->jml06->EditValue = FormatNumber($this->jml06->EditValue, -2, -2, -2, -2);
				$this->jml06->OldValue = $this->jml06->EditValue;
			}
			

			// tgl06
			$this->tgl06->EditAttrs["class"] = "form-control";
			$this->tgl06->EditCustomAttributes = "";
			$this->tgl06->EditValue = HtmlEncode(FormatDateTime($this->tgl06->CurrentValue, 7));
			$this->tgl06->PlaceHolder = RemoveHtml($this->tgl06->caption());

			// byr07
			$this->byr07->EditCustomAttributes = "";
			$this->byr07->EditValue = $this->byr07->options(FALSE);

			// jml07
			$this->jml07->EditAttrs["class"] = "form-control";
			$this->jml07->EditCustomAttributes = "";
			$this->jml07->EditValue = HtmlEncode($this->jml07->CurrentValue);
			$this->jml07->PlaceHolder = RemoveHtml($this->jml07->caption());
			if (strval($this->jml07->EditValue) != "" && is_numeric($this->jml07->EditValue)) {
				$this->jml07->EditValue = FormatNumber($this->jml07->EditValue, -2, -2, -2, -2);
				$this->jml07->OldValue = $this->jml07->EditValue;
			}
			

			// tgl07
			$this->tgl07->EditAttrs["class"] = "form-control";
			$this->tgl07->EditCustomAttributes = "";
			$this->tgl07->EditValue = HtmlEncode(FormatDateTime($this->tgl07->CurrentValue, 7));
			$this->tgl07->PlaceHolder = RemoveHtml($this->tgl07->caption());

			// byr08
			$this->byr08->EditCustomAttributes = "";
			$this->byr08->EditValue = $this->byr08->options(FALSE);

			// jml08
			$this->jml08->EditAttrs["class"] = "form-control";
			$this->jml08->EditCustomAttributes = "";
			$this->jml08->EditValue = HtmlEncode($this->jml08->CurrentValue);
			$this->jml08->PlaceHolder = RemoveHtml($this->jml08->caption());
			if (strval($this->jml08->EditValue) != "" && is_numeric($this->jml08->EditValue)) {
				$this->jml08->EditValue = FormatNumber($this->jml08->EditValue, -2, -2, -2, -2);
				$this->jml08->OldValue = $this->jml08->EditValue;
			}
			

			// tgl08
			$this->tgl08->EditAttrs["class"] = "form-control";
			$this->tgl08->EditCustomAttributes = "";
			$this->tgl08->EditValue = HtmlEncode(FormatDateTime($this->tgl08->CurrentValue, 7));
			$this->tgl08->PlaceHolder = RemoveHtml($this->tgl08->caption());

			// byr09
			$this->byr09->EditCustomAttributes = "";
			$this->byr09->EditValue = $this->byr09->options(FALSE);

			// jml09
			$this->jml09->EditAttrs["class"] = "form-control";
			$this->jml09->EditCustomAttributes = "";
			$this->jml09->EditValue = HtmlEncode($this->jml09->CurrentValue);
			$this->jml09->PlaceHolder = RemoveHtml($this->jml09->caption());
			if (strval($this->jml09->EditValue) != "" && is_numeric($this->jml09->EditValue)) {
				$this->jml09->EditValue = FormatNumber($this->jml09->EditValue, -2, -2, -2, -2);
				$this->jml09->OldValue = $this->jml09->EditValue;
			}
			

			// tgl09
			$this->tgl09->EditAttrs["class"] = "form-control";
			$this->tgl09->EditCustomAttributes = "";
			$this->tgl09->EditValue = HtmlEncode(FormatDateTime($this->tgl09->CurrentValue, 7));
			$this->tgl09->PlaceHolder = RemoveHtml($this->tgl09->caption());

			// byr10
			$this->byr10->EditCustomAttributes = "";
			$this->byr10->EditValue = $this->byr10->options(FALSE);

			// jml10
			$this->jml10->EditAttrs["class"] = "form-control";
			$this->jml10->EditCustomAttributes = "";
			$this->jml10->EditValue = HtmlEncode($this->jml10->CurrentValue);
			$this->jml10->PlaceHolder = RemoveHtml($this->jml10->caption());
			if (strval($this->jml10->EditValue) != "" && is_numeric($this->jml10->EditValue)) {
				$this->jml10->EditValue = FormatNumber($this->jml10->EditValue, -2, -2, -2, -2);
				$this->jml10->OldValue = $this->jml10->EditValue;
			}
			

			// tgl10
			$this->tgl10->EditAttrs["class"] = "form-control";
			$this->tgl10->EditCustomAttributes = "";
			$this->tgl10->EditValue = HtmlEncode(FormatDateTime($this->tgl10->CurrentValue, 7));
			$this->tgl10->PlaceHolder = RemoveHtml($this->tgl10->caption());

			// byr11
			$this->byr11->EditCustomAttributes = "";
			$this->byr11->EditValue = $this->byr11->options(FALSE);

			// jml11
			$this->jml11->EditAttrs["class"] = "form-control";
			$this->jml11->EditCustomAttributes = "";
			$this->jml11->EditValue = HtmlEncode($this->jml11->CurrentValue);
			$this->jml11->PlaceHolder = RemoveHtml($this->jml11->caption());
			if (strval($this->jml11->EditValue) != "" && is_numeric($this->jml11->EditValue)) {
				$this->jml11->EditValue = FormatNumber($this->jml11->EditValue, -2, -2, -2, -2);
				$this->jml11->OldValue = $this->jml11->EditValue;
			}
			

			// tgl11
			$this->tgl11->EditAttrs["class"] = "form-control";
			$this->tgl11->EditCustomAttributes = "";
			$this->tgl11->EditValue = HtmlEncode(FormatDateTime($this->tgl11->CurrentValue, 7));
			$this->tgl11->PlaceHolder = RemoveHtml($this->tgl11->caption());

			// byr12
			$this->byr12->EditCustomAttributes = "";
			$this->byr12->EditValue = $this->byr12->options(FALSE);

			// jml12
			$this->jml12->EditAttrs["class"] = "form-control";
			$this->jml12->EditCustomAttributes = "";
			$this->jml12->EditValue = HtmlEncode($this->jml12->CurrentValue);
			$this->jml12->PlaceHolder = RemoveHtml($this->jml12->caption());
			if (strval($this->jml12->EditValue) != "" && is_numeric($this->jml12->EditValue)) {
				$this->jml12->EditValue = FormatNumber($this->jml12->EditValue, -2, -2, -2, -2);
				$this->jml12->OldValue = $this->jml12->EditValue;
			}
			

			// tgl12
			$this->tgl12->EditAttrs["class"] = "form-control";
			$this->tgl12->EditCustomAttributes = "";
			$this->tgl12->EditValue = HtmlEncode(FormatDateTime($this->tgl12->CurrentValue, 7));
			$this->tgl12->PlaceHolder = RemoveHtml($this->tgl12->caption());

			// Edit refer script
			// iuran_id

			$this->iuran_id->LinkCustomAttributes = "";
			$this->iuran_id->HrefValue = "";

			// Jumlah
			$this->Jumlah->LinkCustomAttributes = "";
			$this->Jumlah->HrefValue = "";

			// byr01
			$this->byr01->LinkCustomAttributes = "";
			$this->byr01->HrefValue = "";

			// jml01
			$this->jml01->LinkCustomAttributes = "";
			$this->jml01->HrefValue = "";

			// tgl01
			$this->tgl01->LinkCustomAttributes = "";
			$this->tgl01->HrefValue = "";

			// byr02
			$this->byr02->LinkCustomAttributes = "";
			$this->byr02->HrefValue = "";

			// jml02
			$this->jml02->LinkCustomAttributes = "";
			$this->jml02->HrefValue = "";

			// tgl02
			$this->tgl02->LinkCustomAttributes = "";
			$this->tgl02->HrefValue = "";

			// byr03
			$this->byr03->LinkCustomAttributes = "";
			$this->byr03->HrefValue = "";

			// jml03
			$this->jml03->LinkCustomAttributes = "";
			$this->jml03->HrefValue = "";

			// tgl03
			$this->tgl03->LinkCustomAttributes = "";
			$this->tgl03->HrefValue = "";

			// byr04
			$this->byr04->LinkCustomAttributes = "";
			$this->byr04->HrefValue = "";

			// jml04
			$this->jml04->LinkCustomAttributes = "";
			$this->jml04->HrefValue = "";

			// tgl04
			$this->tgl04->LinkCustomAttributes = "";
			$this->tgl04->HrefValue = "";

			// byr05
			$this->byr05->LinkCustomAttributes = "";
			$this->byr05->HrefValue = "";

			// jml05
			$this->jml05->LinkCustomAttributes = "";
			$this->jml05->HrefValue = "";

			// tgl05
			$this->tgl05->LinkCustomAttributes = "";
			$this->tgl05->HrefValue = "";

			// byr06
			$this->byr06->LinkCustomAttributes = "";
			$this->byr06->HrefValue = "";

			// jml06
			$this->jml06->LinkCustomAttributes = "";
			$this->jml06->HrefValue = "";

			// tgl06
			$this->tgl06->LinkCustomAttributes = "";
			$this->tgl06->HrefValue = "";

			// byr07
			$this->byr07->LinkCustomAttributes = "";
			$this->byr07->HrefValue = "";

			// jml07
			$this->jml07->LinkCustomAttributes = "";
			$this->jml07->HrefValue = "";

			// tgl07
			$this->tgl07->LinkCustomAttributes = "";
			$this->tgl07->HrefValue = "";

			// byr08
			$this->byr08->LinkCustomAttributes = "";
			$this->byr08->HrefValue = "";

			// jml08
			$this->jml08->LinkCustomAttributes = "";
			$this->jml08->HrefValue = "";

			// tgl08
			$this->tgl08->LinkCustomAttributes = "";
			$this->tgl08->HrefValue = "";

			// byr09
			$this->byr09->LinkCustomAttributes = "";
			$this->byr09->HrefValue = "";

			// jml09
			$this->jml09->LinkCustomAttributes = "";
			$this->jml09->HrefValue = "";

			// tgl09
			$this->tgl09->LinkCustomAttributes = "";
			$this->tgl09->HrefValue = "";

			// byr10
			$this->byr10->LinkCustomAttributes = "";
			$this->byr10->HrefValue = "";

			// jml10
			$this->jml10->LinkCustomAttributes = "";
			$this->jml10->HrefValue = "";

			// tgl10
			$this->tgl10->LinkCustomAttributes = "";
			$this->tgl10->HrefValue = "";

			// byr11
			$this->byr11->LinkCustomAttributes = "";
			$this->byr11->HrefValue = "";

			// jml11
			$this->jml11->LinkCustomAttributes = "";
			$this->jml11->HrefValue = "";

			// tgl11
			$this->tgl11->LinkCustomAttributes = "";
			$this->tgl11->HrefValue = "";

			// byr12
			$this->byr12->LinkCustomAttributes = "";
			$this->byr12->HrefValue = "";

			// jml12
			$this->jml12->LinkCustomAttributes = "";
			$this->jml12->HrefValue = "";

			// tgl12
			$this->tgl12->LinkCustomAttributes = "";
			$this->tgl12->HrefValue = "";
		}
		if ($this->RowType == ROWTYPE_ADD || $this->RowType == ROWTYPE_EDIT || $this->RowType == ROWTYPE_SEARCH) // Add/Edit/Search row
			$this->setupFieldTitles();

		// Call Row Rendered event
		if ($this->RowType != ROWTYPE_AGGREGATEINIT)
			$this->Row_Rendered();
	}

	// Validate form
	protected function validateForm()
	{
		global $Language, $FormError;

		// Check if validation required
		if (!Config("SERVER_VALIDATE"))
			return ($FormError == "");
		if ($this->iuran_id->Required) {
			if (!$this->iuran_id->IsDetailKey && $this->iuran_id->FormValue != NULL && $this->iuran_id->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->iuran_id->caption(), $this->iuran_id->RequiredErrorMessage));
			}
		}
		if ($this->Jumlah->Required) {
			if (!$this->Jumlah->IsDetailKey && $this->Jumlah->FormValue != NULL && $this->Jumlah->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->Jumlah->caption(), $this->Jumlah->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->Jumlah->FormValue)) {
			AddMessage($FormError, $this->Jumlah->errorMessage());
		}
		if ($this->byr01->Required) {
			if ($this->byr01->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr01->caption(), $this->byr01->RequiredErrorMessage));
			}
		}
		if ($this->jml01->Required) {
			if (!$this->jml01->IsDetailKey && $this->jml01->FormValue != NULL && $this->jml01->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml01->caption(), $this->jml01->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml01->FormValue)) {
			AddMessage($FormError, $this->jml01->errorMessage());
		}
		if ($this->tgl01->Required) {
			if (!$this->tgl01->IsDetailKey && $this->tgl01->FormValue != NULL && $this->tgl01->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl01->caption(), $this->tgl01->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl01->FormValue)) {
			AddMessage($FormError, $this->tgl01->errorMessage());
		}
		if ($this->byr02->Required) {
			if ($this->byr02->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr02->caption(), $this->byr02->RequiredErrorMessage));
			}
		}
		if ($this->jml02->Required) {
			if (!$this->jml02->IsDetailKey && $this->jml02->FormValue != NULL && $this->jml02->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml02->caption(), $this->jml02->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml02->FormValue)) {
			AddMessage($FormError, $this->jml02->errorMessage());
		}
		if ($this->tgl02->Required) {
			if (!$this->tgl02->IsDetailKey && $this->tgl02->FormValue != NULL && $this->tgl02->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl02->caption(), $this->tgl02->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl02->FormValue)) {
			AddMessage($FormError, $this->tgl02->errorMessage());
		}
		if ($this->byr03->Required) {
			if ($this->byr03->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr03->caption(), $this->byr03->RequiredErrorMessage));
			}
		}
		if ($this->jml03->Required) {
			if (!$this->jml03->IsDetailKey && $this->jml03->FormValue != NULL && $this->jml03->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml03->caption(), $this->jml03->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml03->FormValue)) {
			AddMessage($FormError, $this->jml03->errorMessage());
		}
		if ($this->tgl03->Required) {
			if (!$this->tgl03->IsDetailKey && $this->tgl03->FormValue != NULL && $this->tgl03->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl03->caption(), $this->tgl03->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl03->FormValue)) {
			AddMessage($FormError, $this->tgl03->errorMessage());
		}
		if ($this->byr04->Required) {
			if ($this->byr04->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr04->caption(), $this->byr04->RequiredErrorMessage));
			}
		}
		if ($this->jml04->Required) {
			if (!$this->jml04->IsDetailKey && $this->jml04->FormValue != NULL && $this->jml04->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml04->caption(), $this->jml04->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml04->FormValue)) {
			AddMessage($FormError, $this->jml04->errorMessage());
		}
		if ($this->tgl04->Required) {
			if (!$this->tgl04->IsDetailKey && $this->tgl04->FormValue != NULL && $this->tgl04->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl04->caption(), $this->tgl04->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl04->FormValue)) {
			AddMessage($FormError, $this->tgl04->errorMessage());
		}
		if ($this->byr05->Required) {
			if ($this->byr05->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr05->caption(), $this->byr05->RequiredErrorMessage));
			}
		}
		if ($this->jml05->Required) {
			if (!$this->jml05->IsDetailKey && $this->jml05->FormValue != NULL && $this->jml05->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml05->caption(), $this->jml05->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml05->FormValue)) {
			AddMessage($FormError, $this->jml05->errorMessage());
		}
		if ($this->tgl05->Required) {
			if (!$this->tgl05->IsDetailKey && $this->tgl05->FormValue != NULL && $this->tgl05->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl05->caption(), $this->tgl05->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl05->FormValue)) {
			AddMessage($FormError, $this->tgl05->errorMessage());
		}
		if ($this->byr06->Required) {
			if ($this->byr06->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr06->caption(), $this->byr06->RequiredErrorMessage));
			}
		}
		if ($this->jml06->Required) {
			if (!$this->jml06->IsDetailKey && $this->jml06->FormValue != NULL && $this->jml06->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml06->caption(), $this->jml06->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml06->FormValue)) {
			AddMessage($FormError, $this->jml06->errorMessage());
		}
		if ($this->tgl06->Required) {
			if (!$this->tgl06->IsDetailKey && $this->tgl06->FormValue != NULL && $this->tgl06->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl06->caption(), $this->tgl06->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl06->FormValue)) {
			AddMessage($FormError, $this->tgl06->errorMessage());
		}
		if ($this->byr07->Required) {
			if ($this->byr07->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr07->caption(), $this->byr07->RequiredErrorMessage));
			}
		}
		if ($this->jml07->Required) {
			if (!$this->jml07->IsDetailKey && $this->jml07->FormValue != NULL && $this->jml07->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml07->caption(), $this->jml07->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml07->FormValue)) {
			AddMessage($FormError, $this->jml07->errorMessage());
		}
		if ($this->tgl07->Required) {
			if (!$this->tgl07->IsDetailKey && $this->tgl07->FormValue != NULL && $this->tgl07->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl07->caption(), $this->tgl07->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl07->FormValue)) {
			AddMessage($FormError, $this->tgl07->errorMessage());
		}
		if ($this->byr08->Required) {
			if ($this->byr08->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr08->caption(), $this->byr08->RequiredErrorMessage));
			}
		}
		if ($this->jml08->Required) {
			if (!$this->jml08->IsDetailKey && $this->jml08->FormValue != NULL && $this->jml08->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml08->caption(), $this->jml08->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml08->FormValue)) {
			AddMessage($FormError, $this->jml08->errorMessage());
		}
		if ($this->tgl08->Required) {
			if (!$this->tgl08->IsDetailKey && $this->tgl08->FormValue != NULL && $this->tgl08->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl08->caption(), $this->tgl08->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl08->FormValue)) {
			AddMessage($FormError, $this->tgl08->errorMessage());
		}
		if ($this->byr09->Required) {
			if ($this->byr09->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr09->caption(), $this->byr09->RequiredErrorMessage));
			}
		}
		if ($this->jml09->Required) {
			if (!$this->jml09->IsDetailKey && $this->jml09->FormValue != NULL && $this->jml09->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml09->caption(), $this->jml09->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml09->FormValue)) {
			AddMessage($FormError, $this->jml09->errorMessage());
		}
		if ($this->tgl09->Required) {
			if (!$this->tgl09->IsDetailKey && $this->tgl09->FormValue != NULL && $this->tgl09->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl09->caption(), $this->tgl09->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl09->FormValue)) {
			AddMessage($FormError, $this->tgl09->errorMessage());
		}
		if ($this->byr10->Required) {
			if ($this->byr10->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr10->caption(), $this->byr10->RequiredErrorMessage));
			}
		}
		if ($this->jml10->Required) {
			if (!$this->jml10->IsDetailKey && $this->jml10->FormValue != NULL && $this->jml10->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml10->caption(), $this->jml10->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml10->FormValue)) {
			AddMessage($FormError, $this->jml10->errorMessage());
		}
		if ($this->tgl10->Required) {
			if (!$this->tgl10->IsDetailKey && $this->tgl10->FormValue != NULL && $this->tgl10->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl10->caption(), $this->tgl10->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl10->FormValue)) {
			AddMessage($FormError, $this->tgl10->errorMessage());
		}
		if ($this->byr11->Required) {
			if ($this->byr11->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr11->caption(), $this->byr11->RequiredErrorMessage));
			}
		}
		if ($this->jml11->Required) {
			if (!$this->jml11->IsDetailKey && $this->jml11->FormValue != NULL && $this->jml11->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml11->caption(), $this->jml11->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml11->FormValue)) {
			AddMessage($FormError, $this->jml11->errorMessage());
		}
		if ($this->tgl11->Required) {
			if (!$this->tgl11->IsDetailKey && $this->tgl11->FormValue != NULL && $this->tgl11->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl11->caption(), $this->tgl11->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl11->FormValue)) {
			AddMessage($FormError, $this->tgl11->errorMessage());
		}
		if ($this->byr12->Required) {
			if ($this->byr12->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr12->caption(), $this->byr12->RequiredErrorMessage));
			}
		}
		if ($this->jml12->Required) {
			if (!$this->jml12->IsDetailKey && $this->jml12->FormValue != NULL && $this->jml12->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml12->caption(), $this->jml12->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml12->FormValue)) {
			AddMessage($FormError, $this->jml12->errorMessage());
		}
		if ($this->tgl12->Required) {
			if (!$this->tgl12->IsDetailKey && $this->tgl12->FormValue != NULL && $this->tgl12->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl12->caption(), $this->tgl12->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl12->FormValue)) {
			AddMessage($FormError, $this->tgl12->errorMessage());
		}

		// Return validate result
		$validateForm = ($FormError == "");

		// Call Form_CustomValidate event
		$formCustomError = "";
		$validateForm = $validateForm && $this->Form_CustomValidate($formCustomError);
		if ($formCustomError != "") {
			AddMessage($FormError, $formCustomError);
		}
		return $validateForm;
	}

	// Delete records based on current filter
	protected function deleteRows()
	{
		global $Language, $Security;
		if (!$Security->canDelete()) {
			$this->setFailureMessage($Language->phrase("NoDeletePermission")); // No delete permission
			return FALSE;
		}
		$deleteRows = TRUE;
		$sql = $this->getCurrentSql();
		$conn = $this->getConnection();
		$conn->raiseErrorFn = Config("ERROR_FUNC");
		$rs = $conn->execute($sql);
		$conn->raiseErrorFn = "";
		if ($rs === FALSE) {
			return FALSE;
		} elseif ($rs->EOF) {
			$this->setFailureMessage($Language->phrase("NoRecord")); // No record found
			$rs->close();
			return FALSE;
		}
		$rows = ($rs) ? $rs->getRows() : [];
		if ($this->AuditTrailOnDelete)
			$this->writeAuditTrailDummy($Language->phrase("BatchDeleteBegin")); // Batch delete begin

		// Clone old rows
		$rsold = $rows;
		if ($rs)
			$rs->close();

		// Call row deleting event
		if ($deleteRows) {
			foreach ($rsold as $row) {
				$deleteRows = $this->Row_Deleting($row);
				if (!$deleteRows)
					break;
			}
		}
		if ($deleteRows) {
			$key = "";
			foreach ($rsold as $row) {
				$thisKey = "";
				if ($thisKey != "")
					$thisKey .= Config("COMPOSITE_KEY_SEPARATOR");
				$thisKey .= $row['id'];
				if (Config("DELETE_UPLOADED_FILES")) // Delete old files
					$this->deleteUploadedFiles($row);
				$conn->raiseErrorFn = Config("ERROR_FUNC");
				$deleteRows = $this->delete($row); // Delete
				$conn->raiseErrorFn = "";
				if ($deleteRows === FALSE)
					break;
				if ($key != "")
					$key .= ", ";
				$key .= $thisKey;
			}
		}
		if (!$deleteRows) {

			// Set up error message
			if ($this->getSuccessMessage() != "" || $this->getFailureMessage() != "") {

				// Use the message, do nothing
			} elseif ($this->CancelMessage != "") {
				$this->setFailureMessage($this->CancelMessage);
				$this->CancelMessage = "";
			} else {
				$this->setFailureMessage($Language->phrase("DeleteCancelled"));
			}
		}

		// Call Row Deleted event
		if ($deleteRows) {
			foreach ($rsold as $row) {
				$this->Row_Deleted($row);
			}
		}

		// Write JSON for API request (Support single row only)
		if (IsApi() && $deleteRows) {
			$row = $this->getRecordsFromRecordset($rsold, TRUE);
			WriteJson(["success" => TRUE, $this->TableVar => $row]);
		}
		return $deleteRows;
	}

	// Update record based on key values
	protected function editRow()
	{
		global $Security, $Language;
		$oldKeyFilter = $this->getRecordFilter();
		$filter = $this->applyUserIDFilters($oldKeyFilter);
		$conn = $this->getConnection();
		$this->CurrentFilter = $filter;
		$sql = $this->getCurrentSql();
		$conn->raiseErrorFn = Config("ERROR_FUNC");
		$rs = $conn->execute($sql);
		$conn->raiseErrorFn = "";
		if ($rs === FALSE)
			return FALSE;
		if ($rs->EOF) {
			$this->setFailureMessage($Language->phrase("NoRecord")); // Set no record message
			$editRow = FALSE; // Update Failed
		} else {

			// Save old values
			$rsold = &$rs->fields;
			$this->loadDbValues($rsold);
			$rsnew = [];

			// iuran_id
			$this->iuran_id->setDbValueDef($rsnew, $this->iuran_id->CurrentValue, 0, $this->iuran_id->ReadOnly);

			// Jumlah
			$this->Jumlah->setDbValueDef($rsnew, $this->Jumlah->CurrentValue, 0, $this->Jumlah->ReadOnly);

			// byr01
			$tmpBool = $this->byr01->CurrentValue;
			if ($tmpBool != "1" && $tmpBool != "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr01->setDbValueDef($rsnew, $tmpBool, 0, $this->byr01->ReadOnly);

			// jml01
			$this->jml01->setDbValueDef($rsnew, $this->jml01->CurrentValue, 0, $this->jml01->ReadOnly);

			// tgl01
			$this->tgl01->setDbValueDef($rsnew, UnFormatDateTime($this->tgl01->CurrentValue, 7), NULL, $this->tgl01->ReadOnly);

			// byr02
			$tmpBool = $this->byr02->CurrentValue;
			if ($tmpBool != "1" && $tmpBool != "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr02->setDbValueDef($rsnew, $tmpBool, 0, $this->byr02->ReadOnly);

			// jml02
			$this->jml02->setDbValueDef($rsnew, $this->jml02->CurrentValue, 0, $this->jml02->ReadOnly);

			// tgl02
			$this->tgl02->setDbValueDef($rsnew, UnFormatDateTime($this->tgl02->CurrentValue, 7), NULL, $this->tgl02->ReadOnly);

			// byr03
			$tmpBool = $this->byr03->CurrentValue;
			if ($tmpBool != "1" && $tmpBool != "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr03->setDbValueDef($rsnew, $tmpBool, 0, $this->byr03->ReadOnly);

			// jml03
			$this->jml03->setDbValueDef($rsnew, $this->jml03->CurrentValue, 0, $this->jml03->ReadOnly);

			// tgl03
			$this->tgl03->setDbValueDef($rsnew, UnFormatDateTime($this->tgl03->CurrentValue, 7), NULL, $this->tgl03->ReadOnly);

			// byr04
			$tmpBool = $this->byr04->CurrentValue;
			if ($tmpBool != "1" && $tmpBool != "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr04->setDbValueDef($rsnew, $tmpBool, 0, $this->byr04->ReadOnly);

			// jml04
			$this->jml04->setDbValueDef($rsnew, $this->jml04->CurrentValue, 0, $this->jml04->ReadOnly);

			// tgl04
			$this->tgl04->setDbValueDef($rsnew, UnFormatDateTime($this->tgl04->CurrentValue, 7), NULL, $this->tgl04->ReadOnly);

			// byr05
			$tmpBool = $this->byr05->CurrentValue;
			if ($tmpBool != "1" && $tmpBool != "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr05->setDbValueDef($rsnew, $tmpBool, 0, $this->byr05->ReadOnly);

			// jml05
			$this->jml05->setDbValueDef($rsnew, $this->jml05->CurrentValue, 0, $this->jml05->ReadOnly);

			// tgl05
			$this->tgl05->setDbValueDef($rsnew, UnFormatDateTime($this->tgl05->CurrentValue, 7), NULL, $this->tgl05->ReadOnly);

			// byr06
			$tmpBool = $this->byr06->CurrentValue;
			if ($tmpBool != "1" && $tmpBool != "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr06->setDbValueDef($rsnew, $tmpBool, 0, $this->byr06->ReadOnly);

			// jml06
			$this->jml06->setDbValueDef($rsnew, $this->jml06->CurrentValue, 0, $this->jml06->ReadOnly);

			// tgl06
			$this->tgl06->setDbValueDef($rsnew, UnFormatDateTime($this->tgl06->CurrentValue, 7), NULL, $this->tgl06->ReadOnly);

			// byr07
			$tmpBool = $this->byr07->CurrentValue;
			if ($tmpBool != "1" && $tmpBool != "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr07->setDbValueDef($rsnew, $tmpBool, 0, $this->byr07->ReadOnly);

			// jml07
			$this->jml07->setDbValueDef($rsnew, $this->jml07->CurrentValue, 0, $this->jml07->ReadOnly);

			// tgl07
			$this->tgl07->setDbValueDef($rsnew, UnFormatDateTime($this->tgl07->CurrentValue, 7), NULL, $this->tgl07->ReadOnly);

			// byr08
			$tmpBool = $this->byr08->CurrentValue;
			if ($tmpBool != "1" && $tmpBool != "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr08->setDbValueDef($rsnew, $tmpBool, 0, $this->byr08->ReadOnly);

			// jml08
			$this->jml08->setDbValueDef($rsnew, $this->jml08->CurrentValue, 0, $this->jml08->ReadOnly);

			// tgl08
			$this->tgl08->setDbValueDef($rsnew, UnFormatDateTime($this->tgl08->CurrentValue, 7), NULL, $this->tgl08->ReadOnly);

			// byr09
			$tmpBool = $this->byr09->CurrentValue;
			if ($tmpBool != "1" && $tmpBool != "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr09->setDbValueDef($rsnew, $tmpBool, 0, $this->byr09->ReadOnly);

			// jml09
			$this->jml09->setDbValueDef($rsnew, $this->jml09->CurrentValue, 0, $this->jml09->ReadOnly);

			// tgl09
			$this->tgl09->setDbValueDef($rsnew, UnFormatDateTime($this->tgl09->CurrentValue, 7), NULL, $this->tgl09->ReadOnly);

			// byr10
			$tmpBool = $this->byr10->CurrentValue;
			if ($tmpBool != "1" && $tmpBool != "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr10->setDbValueDef($rsnew, $tmpBool, 0, $this->byr10->ReadOnly);

			// jml10
			$this->jml10->setDbValueDef($rsnew, $this->jml10->CurrentValue, 0, $this->jml10->ReadOnly);

			// tgl10
			$this->tgl10->setDbValueDef($rsnew, UnFormatDateTime($this->tgl10->CurrentValue, 7), NULL, $this->tgl10->ReadOnly);

			// byr11
			$tmpBool = $this->byr11->CurrentValue;
			if ($tmpBool != "1" && $tmpBool != "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr11->setDbValueDef($rsnew, $tmpBool, 0, $this->byr11->ReadOnly);

			// jml11
			$this->jml11->setDbValueDef($rsnew, $this->jml11->CurrentValue, 0, $this->jml11->ReadOnly);

			// tgl11
			$this->tgl11->setDbValueDef($rsnew, UnFormatDateTime($this->tgl11->CurrentValue, 7), NULL, $this->tgl11->ReadOnly);

			// byr12
			$tmpBool = $this->byr12->CurrentValue;
			if ($tmpBool != "1" && $tmpBool != "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr12->setDbValueDef($rsnew, $tmpBool, 0, $this->byr12->ReadOnly);

			// jml12
			$this->jml12->setDbValueDef($rsnew, $this->jml12->CurrentValue, 0, $this->jml12->ReadOnly);

			// tgl12
			$this->tgl12->setDbValueDef($rsnew, UnFormatDateTime($this->tgl12->CurrentValue, 7), NULL, $this->tgl12->ReadOnly);

			// Check referential integrity for master table 'v102_daf_kelas_siswa'
			$validMasterRecord = TRUE;
			$masterFilter = $this->sqlMasterFilter_v102_daf_kelas_siswa();
			$keyValue = isset($rsnew['daf_kelas_siswa_id']) ? $rsnew['daf_kelas_siswa_id'] : $rsold['daf_kelas_siswa_id'];
			if (strval($keyValue) != "") {
				$masterFilter = str_replace("@id@", AdjustSql($keyValue), $masterFilter);
			} else {
				$validMasterRecord = FALSE;
			}
			if ($validMasterRecord) {
				if (!isset($GLOBALS["v102_daf_kelas_siswa"]))
					$GLOBALS["v102_daf_kelas_siswa"] = new v102_daf_kelas_siswa();
				$rsmaster = $GLOBALS["v102_daf_kelas_siswa"]->loadRs($masterFilter);
				$validMasterRecord = ($rsmaster && !$rsmaster->EOF);
				$rsmaster->close();
			}
			if (!$validMasterRecord) {
				$relatedRecordMsg = str_replace("%t", "v102_daf_kelas_siswa", $Language->phrase("RelatedRecordRequired"));
				$this->setFailureMessage($relatedRecordMsg);
				$rs->close();
				return FALSE;
			}

			// Call Row Updating event
			$updateRow = $this->Row_Updating($rsold, $rsnew);

			// Check for duplicate key when key changed
			if ($updateRow) {
				$newKeyFilter = $this->getRecordFilter($rsnew); 
				if ($newKeyFilter != $oldKeyFilter) {
					$rsChk = $this->loadRs($newKeyFilter);
					if ($rsChk && !$rsChk->EOF) {
						$keyErrMsg = str_replace("%f", $newKeyFilter, $Language->phrase("DupKey"));
						$this->setFailureMessage($keyErrMsg);
						$rsChk->close();
						$updateRow = FALSE;
					}
				}
			}
			if ($updateRow) {
				$conn->raiseErrorFn = Config("ERROR_FUNC");
				if (count($rsnew) > 0)
					$editRow = $this->update($rsnew, "", $rsold);
				else
					$editRow = TRUE; // No field to update
				$conn->raiseErrorFn = "";
				if ($editRow) {
				}
			} else {
				if ($this->getSuccessMessage() != "" || $this->getFailureMessage() != "") {

					// Use the message, do nothing
				} elseif ($this->CancelMessage != "") {
					$this->setFailureMessage($this->CancelMessage);
					$this->CancelMessage = "";
				} else {
					$this->setFailureMessage($Language->phrase("UpdateCancelled"));
				}
				$editRow = FALSE;
			}
		}

		// Call Row_Updated event
		if ($editRow)
			$this->Row_Updated($rsold, $rsnew);
		$rs->close();

		// Write JSON for API request
		if (IsApi() && $editRow) {
			$row = $this->getRecordsFromRecordset([$rsnew], TRUE);
			WriteJson(["success" => TRUE, $this->TableVar => $row]);
		}
		return $editRow;
	}

	// Add record
	protected function addRow($rsold = NULL)
	{
		global $Language, $Security;

		// Set up foreign key field value from Session
			if ($this->getCurrentMasterTable() == "v102_daf_kelas_siswa") {
				$this->daf_kelas_siswa_id->CurrentValue = $this->daf_kelas_siswa_id->getSessionValue();
			}

		// Check referential integrity for master table 't103_daf_kelas_siswa_iuran'
		$validMasterRecord = TRUE;
		$masterFilter = $this->sqlMasterFilter_v102_daf_kelas_siswa();
		if ($this->daf_kelas_siswa_id->getSessionValue() != "") {
			$masterFilter = str_replace("@id@", AdjustSql($this->daf_kelas_siswa_id->getSessionValue(), "DB"), $masterFilter);
		} else {
			$validMasterRecord = FALSE;
		}
		if ($validMasterRecord) {
			if (!isset($GLOBALS["v102_daf_kelas_siswa"]))
				$GLOBALS["v102_daf_kelas_siswa"] = new v102_daf_kelas_siswa();
			$rsmaster = $GLOBALS["v102_daf_kelas_siswa"]->loadRs($masterFilter);
			$validMasterRecord = ($rsmaster && !$rsmaster->EOF);
			$rsmaster->close();
		}
		if (!$validMasterRecord) {
			$relatedRecordMsg = str_replace("%t", "v102_daf_kelas_siswa", $Language->phrase("RelatedRecordRequired"));
			$this->setFailureMessage($relatedRecordMsg);
			return FALSE;
		}
		$conn = $this->getConnection();

		// Load db values from rsold
		$this->loadDbValues($rsold);
		if ($rsold) {
		}
		$rsnew = [];

		// iuran_id
		$this->iuran_id->setDbValueDef($rsnew, $this->iuran_id->CurrentValue, 0, FALSE);

		// Jumlah
		$this->Jumlah->setDbValueDef($rsnew, $this->Jumlah->CurrentValue, 0, FALSE);

		// byr01
		$tmpBool = $this->byr01->CurrentValue;
		if ($tmpBool != "1" && $tmpBool != "0")
			$tmpBool = !empty($tmpBool) ? "1" : "0";
		$this->byr01->setDbValueDef($rsnew, $tmpBool, 0, strval($this->byr01->CurrentValue) == "");

		// jml01
		$this->jml01->setDbValueDef($rsnew, $this->jml01->CurrentValue, 0, strval($this->jml01->CurrentValue) == "");

		// tgl01
		$this->tgl01->setDbValueDef($rsnew, UnFormatDateTime($this->tgl01->CurrentValue, 7), NULL, FALSE);

		// byr02
		$tmpBool = $this->byr02->CurrentValue;
		if ($tmpBool != "1" && $tmpBool != "0")
			$tmpBool = !empty($tmpBool) ? "1" : "0";
		$this->byr02->setDbValueDef($rsnew, $tmpBool, 0, strval($this->byr02->CurrentValue) == "");

		// jml02
		$this->jml02->setDbValueDef($rsnew, $this->jml02->CurrentValue, 0, strval($this->jml02->CurrentValue) == "");

		// tgl02
		$this->tgl02->setDbValueDef($rsnew, UnFormatDateTime($this->tgl02->CurrentValue, 7), NULL, FALSE);

		// byr03
		$tmpBool = $this->byr03->CurrentValue;
		if ($tmpBool != "1" && $tmpBool != "0")
			$tmpBool = !empty($tmpBool) ? "1" : "0";
		$this->byr03->setDbValueDef($rsnew, $tmpBool, 0, strval($this->byr03->CurrentValue) == "");

		// jml03
		$this->jml03->setDbValueDef($rsnew, $this->jml03->CurrentValue, 0, strval($this->jml03->CurrentValue) == "");

		// tgl03
		$this->tgl03->setDbValueDef($rsnew, UnFormatDateTime($this->tgl03->CurrentValue, 7), NULL, FALSE);

		// byr04
		$tmpBool = $this->byr04->CurrentValue;
		if ($tmpBool != "1" && $tmpBool != "0")
			$tmpBool = !empty($tmpBool) ? "1" : "0";
		$this->byr04->setDbValueDef($rsnew, $tmpBool, 0, strval($this->byr04->CurrentValue) == "");

		// jml04
		$this->jml04->setDbValueDef($rsnew, $this->jml04->CurrentValue, 0, strval($this->jml04->CurrentValue) == "");

		// tgl04
		$this->tgl04->setDbValueDef($rsnew, UnFormatDateTime($this->tgl04->CurrentValue, 7), NULL, FALSE);

		// byr05
		$tmpBool = $this->byr05->CurrentValue;
		if ($tmpBool != "1" && $tmpBool != "0")
			$tmpBool = !empty($tmpBool) ? "1" : "0";
		$this->byr05->setDbValueDef($rsnew, $tmpBool, 0, strval($this->byr05->CurrentValue) == "");

		// jml05
		$this->jml05->setDbValueDef($rsnew, $this->jml05->CurrentValue, 0, strval($this->jml05->CurrentValue) == "");

		// tgl05
		$this->tgl05->setDbValueDef($rsnew, UnFormatDateTime($this->tgl05->CurrentValue, 7), NULL, FALSE);

		// byr06
		$tmpBool = $this->byr06->CurrentValue;
		if ($tmpBool != "1" && $tmpBool != "0")
			$tmpBool = !empty($tmpBool) ? "1" : "0";
		$this->byr06->setDbValueDef($rsnew, $tmpBool, 0, strval($this->byr06->CurrentValue) == "");

		// jml06
		$this->jml06->setDbValueDef($rsnew, $this->jml06->CurrentValue, 0, strval($this->jml06->CurrentValue) == "");

		// tgl06
		$this->tgl06->setDbValueDef($rsnew, UnFormatDateTime($this->tgl06->CurrentValue, 7), NULL, FALSE);

		// byr07
		$tmpBool = $this->byr07->CurrentValue;
		if ($tmpBool != "1" && $tmpBool != "0")
			$tmpBool = !empty($tmpBool) ? "1" : "0";
		$this->byr07->setDbValueDef($rsnew, $tmpBool, 0, strval($this->byr07->CurrentValue) == "");

		// jml07
		$this->jml07->setDbValueDef($rsnew, $this->jml07->CurrentValue, 0, strval($this->jml07->CurrentValue) == "");

		// tgl07
		$this->tgl07->setDbValueDef($rsnew, UnFormatDateTime($this->tgl07->CurrentValue, 7), NULL, FALSE);

		// byr08
		$tmpBool = $this->byr08->CurrentValue;
		if ($tmpBool != "1" && $tmpBool != "0")
			$tmpBool = !empty($tmpBool) ? "1" : "0";
		$this->byr08->setDbValueDef($rsnew, $tmpBool, 0, strval($this->byr08->CurrentValue) == "");

		// jml08
		$this->jml08->setDbValueDef($rsnew, $this->jml08->CurrentValue, 0, strval($this->jml08->CurrentValue) == "");

		// tgl08
		$this->tgl08->setDbValueDef($rsnew, UnFormatDateTime($this->tgl08->CurrentValue, 7), NULL, FALSE);

		// byr09
		$tmpBool = $this->byr09->CurrentValue;
		if ($tmpBool != "1" && $tmpBool != "0")
			$tmpBool = !empty($tmpBool) ? "1" : "0";
		$this->byr09->setDbValueDef($rsnew, $tmpBool, 0, strval($this->byr09->CurrentValue) == "");

		// jml09
		$this->jml09->setDbValueDef($rsnew, $this->jml09->CurrentValue, 0, strval($this->jml09->CurrentValue) == "");

		// tgl09
		$this->tgl09->setDbValueDef($rsnew, UnFormatDateTime($this->tgl09->CurrentValue, 7), NULL, FALSE);

		// byr10
		$tmpBool = $this->byr10->CurrentValue;
		if ($tmpBool != "1" && $tmpBool != "0")
			$tmpBool = !empty($tmpBool) ? "1" : "0";
		$this->byr10->setDbValueDef($rsnew, $tmpBool, 0, strval($this->byr10->CurrentValue) == "");

		// jml10
		$this->jml10->setDbValueDef($rsnew, $this->jml10->CurrentValue, 0, strval($this->jml10->CurrentValue) == "");

		// tgl10
		$this->tgl10->setDbValueDef($rsnew, UnFormatDateTime($this->tgl10->CurrentValue, 7), NULL, FALSE);

		// byr11
		$tmpBool = $this->byr11->CurrentValue;
		if ($tmpBool != "1" && $tmpBool != "0")
			$tmpBool = !empty($tmpBool) ? "1" : "0";
		$this->byr11->setDbValueDef($rsnew, $tmpBool, 0, strval($this->byr11->CurrentValue) == "");

		// jml11
		$this->jml11->setDbValueDef($rsnew, $this->jml11->CurrentValue, 0, strval($this->jml11->CurrentValue) == "");

		// tgl11
		$this->tgl11->setDbValueDef($rsnew, UnFormatDateTime($this->tgl11->CurrentValue, 7), NULL, FALSE);

		// byr12
		$tmpBool = $this->byr12->CurrentValue;
		if ($tmpBool != "1" && $tmpBool != "0")
			$tmpBool = !empty($tmpBool) ? "1" : "0";
		$this->byr12->setDbValueDef($rsnew, $tmpBool, 0, strval($this->byr12->CurrentValue) == "");

		// jml12
		$this->jml12->setDbValueDef($rsnew, $this->jml12->CurrentValue, 0, strval($this->jml12->CurrentValue) == "");

		// tgl12
		$this->tgl12->setDbValueDef($rsnew, UnFormatDateTime($this->tgl12->CurrentValue, 7), NULL, FALSE);

		// daf_kelas_siswa_id
		if ($this->daf_kelas_siswa_id->getSessionValue() != "") {
			$rsnew['daf_kelas_siswa_id'] = $this->daf_kelas_siswa_id->getSessionValue();
		}

		// Call Row Inserting event
		$rs = ($rsold) ? $rsold->fields : NULL;
		$insertRow = $this->Row_Inserting($rs, $rsnew);
		if ($insertRow) {
			$conn->raiseErrorFn = Config("ERROR_FUNC");
			$addRow = $this->insert($rsnew);
			$conn->raiseErrorFn = "";
			if ($addRow) {
			}
		} else {
			if ($this->getSuccessMessage() != "" || $this->getFailureMessage() != "") {

				// Use the message, do nothing
			} elseif ($this->CancelMessage != "") {
				$this->setFailureMessage($this->CancelMessage);
				$this->CancelMessage = "";
			} else {
				$this->setFailureMessage($Language->phrase("InsertCancelled"));
			}
			$addRow = FALSE;
		}
		if ($addRow) {

			// Call Row Inserted event
			$rs = ($rsold) ? $rsold->fields : NULL;
			$this->Row_Inserted($rs, $rsnew);
		}

		// Write JSON for API request
		if (IsApi() && $addRow) {
			$row = $this->getRecordsFromRecordset([$rsnew], TRUE);
			WriteJson(["success" => TRUE, $this->TableVar => $row]);
		}
		return $addRow;
	}

	// Set up master/detail based on QueryString
	protected function setupMasterParms()
	{

		// Hide foreign keys
		$masterTblVar = $this->getCurrentMasterTable();
		if ($masterTblVar == "v102_daf_kelas_siswa") {
			$this->daf_kelas_siswa_id->Visible = FALSE;
			if ($GLOBALS["v102_daf_kelas_siswa"]->EventCancelled)
				$this->EventCancelled = TRUE;
		}
		$this->DbMasterFilter = $this->getMasterFilter(); // Get master filter
		$this->DbDetailFilter = $this->getDetailFilter(); // Get detail filter
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
				case "x_iuran_id":
					$conn = Conn("");
					break;
				case "x_byr01":
					$conn = Conn("");
					break;
				case "x_byr02":
					$conn = Conn("");
					break;
				case "x_byr03":
					$conn = Conn("");
					break;
				case "x_byr04":
					$conn = Conn("");
					break;
				case "x_byr05":
					$conn = Conn("");
					break;
				case "x_byr06":
					$conn = Conn("");
					break;
				case "x_byr07":
					$conn = Conn("");
					break;
				case "x_byr08":
					$conn = Conn("");
					break;
				case "x_byr09":
					$conn = Conn("");
					break;
				case "x_byr10":
					$conn = Conn("");
					break;
				case "x_byr11":
					$conn = Conn("");
					break;
				case "x_byr12":
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
						case "x_iuran_id":
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

	// Form Custom Validate event
	function Form_CustomValidate(&$customError) {

		// Return error message in CustomError
		return TRUE;
	}

	// ListOptions Load event
	function ListOptions_Load() {

		// Example:
		//$opt = &$this->ListOptions->Add("new");
		//$opt->Header = "xxx";
		//$opt->OnLeft = TRUE; // Link on left
		//$opt->MoveTo(0); // Move to first column

	}

	// ListOptions Rendering event
	function ListOptions_Rendering() {

		//$GLOBALS["xxx_grid"]->DetailAdd = (...condition...); // Set to TRUE or FALSE conditionally
		//$GLOBALS["xxx_grid"]->DetailEdit = (...condition...); // Set to TRUE or FALSE conditionally
		//$GLOBALS["xxx_grid"]->DetailView = (...condition...); // Set to TRUE or FALSE conditionally

	}

	// ListOptions Rendered event
	function ListOptions_Rendered() {

		// Example:
		//$this->ListOptions["new"]->Body = "xxx";

	}
} // End class
?>