<?php
require_once(getabspath("classes/cipherer.php"));




$tdataagensi = array();
	$tdataagensi[".truncateText"] = true;
	$tdataagensi[".NumberOfChars"] = 80;
	$tdataagensi[".ShortName"] = "agensi";
	$tdataagensi[".OwnerID"] = "";
	$tdataagensi[".OriginalTable"] = "agensi";

//	field labels
$fieldLabelsagensi = array();
$fieldToolTipsagensi = array();
$pageTitlesagensi = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsagensi["Malay"] = array();
	$fieldToolTipsagensi["Malay"] = array();
	$pageTitlesagensi["Malay"] = array();
	$fieldLabelsagensi["Malay"]["aid"] = "Aid";
	$fieldToolTipsagensi["Malay"]["aid"] = "";
	$fieldLabelsagensi["Malay"]["nama"] = "Nama";
	$fieldToolTipsagensi["Malay"]["nama"] = "";
	$fieldLabelsagensi["Malay"]["penerangan"] = "Penerangan";
	$fieldToolTipsagensi["Malay"]["penerangan"] = "";
	if (count($fieldToolTipsagensi["Malay"]))
		$tdataagensi[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsagensi[""] = array();
	$fieldToolTipsagensi[""] = array();
	$pageTitlesagensi[""] = array();
	if (count($fieldToolTipsagensi[""]))
		$tdataagensi[".isUseToolTips"] = true;
}


	$tdataagensi[".NCSearch"] = true;



$tdataagensi[".shortTableName"] = "agensi";
$tdataagensi[".nSecOptions"] = 0;
$tdataagensi[".recsPerRowList"] = 1;
$tdataagensi[".recsPerRowPrint"] = 1;
$tdataagensi[".mainTableOwnerID"] = "";
$tdataagensi[".moveNext"] = 1;
$tdataagensi[".entityType"] = 0;

$tdataagensi[".strOriginalTableName"] = "agensi";




$tdataagensi[".showAddInPopup"] = false;

$tdataagensi[".showEditInPopup"] = false;

$tdataagensi[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataagensi[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataagensi[".fieldsForRegister"] = array();

$tdataagensi[".listAjax"] = false;

	$tdataagensi[".audit"] = false;

	$tdataagensi[".locking"] = false;

$tdataagensi[".edit"] = true;
$tdataagensi[".afterEditAction"] = 1;
$tdataagensi[".closePopupAfterEdit"] = 1;
$tdataagensi[".afterEditActionDetTable"] = "";

$tdataagensi[".add"] = true;
$tdataagensi[".afterAddAction"] = 1;
$tdataagensi[".closePopupAfterAdd"] = 1;
$tdataagensi[".afterAddActionDetTable"] = "";

$tdataagensi[".list"] = true;

$tdataagensi[".inlineEdit"] = true;
$tdataagensi[".inlineAdd"] = true;
$tdataagensi[".view"] = true;





$tdataagensi[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataagensi[".searchSaving"] = false;
//

$tdataagensi[".showSearchPanel"] = true;
		$tdataagensi[".flexibleSearch"] = true;

if (isMobile())
	$tdataagensi[".isUseAjaxSuggest"] = false;
else
	$tdataagensi[".isUseAjaxSuggest"] = true;

$tdataagensi[".rowHighlite"] = true;


																																																																									
$tdataagensi[".addPageEvents"] = false;

// use timepicker for search panel
$tdataagensi[".isUseTimeForSearch"] = false;





$tdataagensi[".allSearchFields"] = array();
$tdataagensi[".filterFields"] = array();
$tdataagensi[".requiredSearchFields"] = array();

$tdataagensi[".allSearchFields"][] = "aid";
	$tdataagensi[".allSearchFields"][] = "nama";
	$tdataagensi[".allSearchFields"][] = "penerangan";
	

$tdataagensi[".googleLikeFields"] = array();
$tdataagensi[".googleLikeFields"][] = "aid";
$tdataagensi[".googleLikeFields"][] = "nama";
$tdataagensi[".googleLikeFields"][] = "penerangan";


$tdataagensi[".advSearchFields"] = array();
$tdataagensi[".advSearchFields"][] = "nama";
$tdataagensi[".advSearchFields"][] = "penerangan";

$tdataagensi[".tableType"] = "list";

$tdataagensi[".printerPageOrientation"] = 0;
$tdataagensi[".nPrinterPageScale"] = 100;

$tdataagensi[".nPrinterSplitRecords"] = 40;

$tdataagensi[".nPrinterPDFSplitRecords"] = 40;



$tdataagensi[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataagensi[".pageSize"] = 10;

$tdataagensi[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataagensi[".strOrderBy"] = $tstrOrderBy;

$tdataagensi[".orderindexes"] = array();

$tdataagensi[".sqlHead"] = "SELECT aid,  	nama,  	penerangan";
$tdataagensi[".sqlFrom"] = "FROM agensi";
$tdataagensi[".sqlWhereExpr"] = "";
$tdataagensi[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataagensi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataagensi[".arrGroupsPerPage"] = $arrGPP;


$tableKeysagensi = array();
$tableKeysagensi[] = "aid";
$tdataagensi[".Keys"] = $tableKeysagensi;

$tdataagensi[".listFields"] = array();
$tdataagensi[".listFields"][] = "nama";
$tdataagensi[".listFields"][] = "penerangan";

$tdataagensi[".hideMobileList"] = array();


$tdataagensi[".viewFields"] = array();
$tdataagensi[".viewFields"][] = "nama";
$tdataagensi[".viewFields"][] = "penerangan";

$tdataagensi[".addFields"] = array();
$tdataagensi[".addFields"][] = "nama";
$tdataagensi[".addFields"][] = "penerangan";

$tdataagensi[".masterListFields"] = array();
$tdataagensi[".masterListFields"][] = "aid";
$tdataagensi[".masterListFields"][] = "nama";
$tdataagensi[".masterListFields"][] = "penerangan";

$tdataagensi[".inlineAddFields"] = array();
$tdataagensi[".inlineAddFields"][] = "nama";
$tdataagensi[".inlineAddFields"][] = "penerangan";

$tdataagensi[".editFields"] = array();
$tdataagensi[".editFields"][] = "nama";
$tdataagensi[".editFields"][] = "penerangan";

$tdataagensi[".inlineEditFields"] = array();
$tdataagensi[".inlineEditFields"][] = "nama";
$tdataagensi[".inlineEditFields"][] = "penerangan";

$tdataagensi[".exportFields"] = array();

$tdataagensi[".importFields"] = array();

$tdataagensi[".printFields"] = array();

//	aid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aid";
	$fdata["GoodName"] = "aid";
	$fdata["ownerTable"] = "agensi";
	$fdata["Label"] = GetFieldLabel("agensi","aid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "aid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aid";

	
	
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




	$tdataagensi["aid"] = $fdata;
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "agensi";
	$fdata["Label"] = GetFieldLabel("agensi","nama");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "nama";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nama";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdataagensi["nama"] = $fdata;
//	penerangan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "penerangan";
	$fdata["GoodName"] = "penerangan";
	$fdata["ownerTable"] = "agensi";
	$fdata["Label"] = GetFieldLabel("agensi","penerangan");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "penerangan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "penerangan";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdataagensi["penerangan"] = $fdata;


$tables_data["agensi"]=&$tdataagensi;
$field_labels["agensi"] = &$fieldLabelsagensi;
$fieldToolTips["agensi"] = &$fieldToolTipsagensi;
$page_titles["agensi"] = &$pageTitlesagensi;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["agensi"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["agensi"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_agensi()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "aid,  	nama,  	penerangan";
$proto0["m_strFrom"] = "FROM agensi";
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
	"m_strName" => "aid",
	"m_strTable" => "agensi",
	"m_srcTableName" => "agensi"
));

$proto5["m_sql"] = "aid";
$proto5["m_srcTableName"] = "agensi";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "agensi",
	"m_srcTableName" => "agensi"
));

$proto7["m_sql"] = "nama";
$proto7["m_srcTableName"] = "agensi";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "penerangan",
	"m_strTable" => "agensi",
	"m_srcTableName" => "agensi"
));

$proto9["m_sql"] = "penerangan";
$proto9["m_srcTableName"] = "agensi";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "agensi";
$proto12["m_srcTableName"] = "agensi";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "aid";
$proto12["m_columns"][] = "nama";
$proto12["m_columns"][] = "penerangan";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "agensi";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "agensi";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="agensi";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_agensi = createSqlQuery_agensi();



			

$tdataagensi[".sqlquery"] = $queryData_agensi;

$tableEvents["agensi"] = new eventsBase;
$tdataagensi[".hasEvents"] = false;

?>