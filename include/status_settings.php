<?php
require_once(getabspath("classes/cipherer.php"));




$tdatastatus = array();
	$tdatastatus[".truncateText"] = true;
	$tdatastatus[".NumberOfChars"] = 80;
	$tdatastatus[".ShortName"] = "status";
	$tdatastatus[".OwnerID"] = "";
	$tdatastatus[".OriginalTable"] = "status";

//	field labels
$fieldLabelsstatus = array();
$fieldToolTipsstatus = array();
$pageTitlesstatus = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsstatus["Malay"] = array();
	$fieldToolTipsstatus["Malay"] = array();
	$pageTitlesstatus["Malay"] = array();
	$fieldLabelsstatus["Malay"]["stid"] = "Stid";
	$fieldToolTipsstatus["Malay"]["stid"] = "";
	$fieldLabelsstatus["Malay"]["status"] = "Status";
	$fieldToolTipsstatus["Malay"]["status"] = "";
	if (count($fieldToolTipsstatus["Malay"]))
		$tdatastatus[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsstatus[""] = array();
	$fieldToolTipsstatus[""] = array();
	$pageTitlesstatus[""] = array();
	if (count($fieldToolTipsstatus[""]))
		$tdatastatus[".isUseToolTips"] = true;
}


	$tdatastatus[".NCSearch"] = true;



$tdatastatus[".shortTableName"] = "status";
$tdatastatus[".nSecOptions"] = 0;
$tdatastatus[".recsPerRowList"] = 1;
$tdatastatus[".recsPerRowPrint"] = 1;
$tdatastatus[".mainTableOwnerID"] = "";
$tdatastatus[".moveNext"] = 1;
$tdatastatus[".entityType"] = 0;

$tdatastatus[".strOriginalTableName"] = "status";




$tdatastatus[".showAddInPopup"] = false;

$tdatastatus[".showEditInPopup"] = false;

$tdatastatus[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastatus[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastatus[".fieldsForRegister"] = array();

$tdatastatus[".listAjax"] = false;

	$tdatastatus[".audit"] = false;

	$tdatastatus[".locking"] = false;

$tdatastatus[".edit"] = true;
$tdatastatus[".afterEditAction"] = 1;
$tdatastatus[".closePopupAfterEdit"] = 1;
$tdatastatus[".afterEditActionDetTable"] = "";

$tdatastatus[".add"] = true;
$tdatastatus[".afterAddAction"] = 1;
$tdatastatus[".closePopupAfterAdd"] = 1;
$tdatastatus[".afterAddActionDetTable"] = "";

$tdatastatus[".list"] = true;

$tdatastatus[".inlineEdit"] = true;
$tdatastatus[".inlineAdd"] = true;
$tdatastatus[".view"] = true;

$tdatastatus[".import"] = true;

$tdatastatus[".exportTo"] = true;

$tdatastatus[".printFriendly"] = true;

$tdatastatus[".delete"] = true;

$tdatastatus[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatastatus[".searchSaving"] = false;
//

$tdatastatus[".showSearchPanel"] = true;
		$tdatastatus[".flexibleSearch"] = true;

if (isMobile())
	$tdatastatus[".isUseAjaxSuggest"] = false;
else
	$tdatastatus[".isUseAjaxSuggest"] = true;

$tdatastatus[".rowHighlite"] = true;


																																																																									
$tdatastatus[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastatus[".isUseTimeForSearch"] = false;





$tdatastatus[".allSearchFields"] = array();
$tdatastatus[".filterFields"] = array();
$tdatastatus[".requiredSearchFields"] = array();

$tdatastatus[".allSearchFields"][] = "stid";
	$tdatastatus[".allSearchFields"][] = "status";
	

$tdatastatus[".googleLikeFields"] = array();
$tdatastatus[".googleLikeFields"][] = "stid";
$tdatastatus[".googleLikeFields"][] = "status";


$tdatastatus[".advSearchFields"] = array();
$tdatastatus[".advSearchFields"][] = "stid";
$tdatastatus[".advSearchFields"][] = "status";

$tdatastatus[".tableType"] = "list";

$tdatastatus[".printerPageOrientation"] = 0;
$tdatastatus[".nPrinterPageScale"] = 100;

$tdatastatus[".nPrinterSplitRecords"] = 40;

$tdatastatus[".nPrinterPDFSplitRecords"] = 40;



$tdatastatus[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatastatus[".pageSize"] = 20;

$tdatastatus[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastatus[".strOrderBy"] = $tstrOrderBy;

$tdatastatus[".orderindexes"] = array();

$tdatastatus[".sqlHead"] = "SELECT stid,  	status";
$tdatastatus[".sqlFrom"] = "FROM status";
$tdatastatus[".sqlWhereExpr"] = "";
$tdatastatus[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastatus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastatus[".arrGroupsPerPage"] = $arrGPP;


$tableKeysstatus = array();
$tableKeysstatus[] = "stid";
$tdatastatus[".Keys"] = $tableKeysstatus;

$tdatastatus[".listFields"] = array();
$tdatastatus[".listFields"][] = "stid";
$tdatastatus[".listFields"][] = "status";

$tdatastatus[".hideMobileList"] = array();


$tdatastatus[".viewFields"] = array();
$tdatastatus[".viewFields"][] = "stid";
$tdatastatus[".viewFields"][] = "status";

$tdatastatus[".addFields"] = array();
$tdatastatus[".addFields"][] = "status";

$tdatastatus[".masterListFields"] = array();
$tdatastatus[".masterListFields"][] = "stid";
$tdatastatus[".masterListFields"][] = "status";

$tdatastatus[".inlineAddFields"] = array();
$tdatastatus[".inlineAddFields"][] = "status";

$tdatastatus[".editFields"] = array();
$tdatastatus[".editFields"][] = "status";

$tdatastatus[".inlineEditFields"] = array();
$tdatastatus[".inlineEditFields"][] = "status";

$tdatastatus[".exportFields"] = array();
$tdatastatus[".exportFields"][] = "stid";
$tdatastatus[".exportFields"][] = "status";

$tdatastatus[".importFields"] = array();
$tdatastatus[".importFields"][] = "stid";
$tdatastatus[".importFields"][] = "status";

$tdatastatus[".printFields"] = array();
$tdatastatus[".printFields"][] = "stid";
$tdatastatus[".printFields"][] = "status";

//	stid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "stid";
	$fdata["GoodName"] = "stid";
	$fdata["ownerTable"] = "status";
	$fdata["Label"] = GetFieldLabel("status","stid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "stid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stid";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatastatus["stid"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "status";
	$fdata["Label"] = GetFieldLabel("status","status");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatastatus["status"] = $fdata;


$tables_data["status"]=&$tdatastatus;
$field_labels["status"] = &$fieldLabelsstatus;
$fieldToolTips["status"] = &$fieldToolTipsstatus;
$page_titles["status"] = &$pageTitlesstatus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["status"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["status"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "stid,  	status";
$proto0["m_strFrom"] = "FROM status";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "stid",
	"m_strTable" => "status",
	"m_srcTableName" => "status"
));

$proto5["m_sql"] = "stid";
$proto5["m_srcTableName"] = "status";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "status",
	"m_srcTableName" => "status"
));

$proto7["m_sql"] = "status";
$proto7["m_srcTableName"] = "status";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "status";
$proto10["m_srcTableName"] = "status";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "stid";
$proto10["m_columns"][] = "status";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "status";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "status";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_status = createSqlQuery_status();



		

$tdatastatus[".sqlquery"] = $queryData_status;

$tableEvents["status"] = new eventsBase;
$tdatastatus[".hasEvents"] = false;

?>