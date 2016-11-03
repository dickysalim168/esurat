<?php
require_once(getabspath("classes/cipherer.php"));




$tdataawam = array();
	$tdataawam[".truncateText"] = true;
	$tdataawam[".NumberOfChars"] = 80;
	$tdataawam[".ShortName"] = "awam";
	$tdataawam[".OwnerID"] = "";
	$tdataawam[".OriginalTable"] = "awam";

//	field labels
$fieldLabelsawam = array();
$fieldToolTipsawam = array();
$pageTitlesawam = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsawam["Malay"] = array();
	$fieldToolTipsawam["Malay"] = array();
	$pageTitlesawam["Malay"] = array();
	$fieldLabelsawam["Malay"]["awid"] = "Awid";
	$fieldToolTipsawam["Malay"]["awid"] = "";
	$fieldLabelsawam["Malay"]["nama"] = "Nama";
	$fieldToolTipsawam["Malay"]["nama"] = "";
	$fieldLabelsawam["Malay"]["penerangan"] = "Penerangan";
	$fieldToolTipsawam["Malay"]["penerangan"] = "";
	if (count($fieldToolTipsawam["Malay"]))
		$tdataawam[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsawam[""] = array();
	$fieldToolTipsawam[""] = array();
	$pageTitlesawam[""] = array();
	if (count($fieldToolTipsawam[""]))
		$tdataawam[".isUseToolTips"] = true;
}


	$tdataawam[".NCSearch"] = true;



$tdataawam[".shortTableName"] = "awam";
$tdataawam[".nSecOptions"] = 0;
$tdataawam[".recsPerRowList"] = 1;
$tdataawam[".recsPerRowPrint"] = 1;
$tdataawam[".mainTableOwnerID"] = "";
$tdataawam[".moveNext"] = 1;
$tdataawam[".entityType"] = 0;

$tdataawam[".strOriginalTableName"] = "awam";




$tdataawam[".showAddInPopup"] = false;

$tdataawam[".showEditInPopup"] = false;

$tdataawam[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataawam[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataawam[".fieldsForRegister"] = array();

$tdataawam[".listAjax"] = false;

	$tdataawam[".audit"] = false;

	$tdataawam[".locking"] = false;

$tdataawam[".edit"] = true;
$tdataawam[".afterEditAction"] = 1;
$tdataawam[".closePopupAfterEdit"] = 1;
$tdataawam[".afterEditActionDetTable"] = "";

$tdataawam[".add"] = true;
$tdataawam[".afterAddAction"] = 1;
$tdataawam[".closePopupAfterAdd"] = 1;
$tdataawam[".afterAddActionDetTable"] = "";

$tdataawam[".list"] = true;

$tdataawam[".inlineEdit"] = true;
$tdataawam[".inlineAdd"] = true;
$tdataawam[".view"] = true;





$tdataawam[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataawam[".searchSaving"] = false;
//

$tdataawam[".showSearchPanel"] = true;
		$tdataawam[".flexibleSearch"] = true;

if (isMobile())
	$tdataawam[".isUseAjaxSuggest"] = false;
else
	$tdataawam[".isUseAjaxSuggest"] = true;

$tdataawam[".rowHighlite"] = true;


																																																																									
$tdataawam[".addPageEvents"] = false;

// use timepicker for search panel
$tdataawam[".isUseTimeForSearch"] = false;





$tdataawam[".allSearchFields"] = array();
$tdataawam[".filterFields"] = array();
$tdataawam[".requiredSearchFields"] = array();

$tdataawam[".allSearchFields"][] = "awid";
	$tdataawam[".allSearchFields"][] = "nama";
	$tdataawam[".allSearchFields"][] = "penerangan";
	

$tdataawam[".googleLikeFields"] = array();
$tdataawam[".googleLikeFields"][] = "awid";
$tdataawam[".googleLikeFields"][] = "nama";
$tdataawam[".googleLikeFields"][] = "penerangan";


$tdataawam[".advSearchFields"] = array();
$tdataawam[".advSearchFields"][] = "nama";
$tdataawam[".advSearchFields"][] = "penerangan";

$tdataawam[".tableType"] = "list";

$tdataawam[".printerPageOrientation"] = 0;
$tdataawam[".nPrinterPageScale"] = 100;

$tdataawam[".nPrinterSplitRecords"] = 40;

$tdataawam[".nPrinterPDFSplitRecords"] = 40;



$tdataawam[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataawam[".pageSize"] = 10;

$tdataawam[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataawam[".strOrderBy"] = $tstrOrderBy;

$tdataawam[".orderindexes"] = array();

$tdataawam[".sqlHead"] = "SELECT awid,  	nama,  	penerangan";
$tdataawam[".sqlFrom"] = "FROM awam";
$tdataawam[".sqlWhereExpr"] = "";
$tdataawam[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataawam[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataawam[".arrGroupsPerPage"] = $arrGPP;


$tableKeysawam = array();
$tableKeysawam[] = "awid";
$tdataawam[".Keys"] = $tableKeysawam;

$tdataawam[".listFields"] = array();
$tdataawam[".listFields"][] = "nama";
$tdataawam[".listFields"][] = "penerangan";

$tdataawam[".hideMobileList"] = array();


$tdataawam[".viewFields"] = array();
$tdataawam[".viewFields"][] = "nama";
$tdataawam[".viewFields"][] = "penerangan";

$tdataawam[".addFields"] = array();
$tdataawam[".addFields"][] = "nama";
$tdataawam[".addFields"][] = "penerangan";

$tdataawam[".masterListFields"] = array();
$tdataawam[".masterListFields"][] = "awid";
$tdataawam[".masterListFields"][] = "nama";
$tdataawam[".masterListFields"][] = "penerangan";

$tdataawam[".inlineAddFields"] = array();
$tdataawam[".inlineAddFields"][] = "nama";
$tdataawam[".inlineAddFields"][] = "penerangan";

$tdataawam[".editFields"] = array();
$tdataawam[".editFields"][] = "nama";
$tdataawam[".editFields"][] = "penerangan";

$tdataawam[".inlineEditFields"] = array();
$tdataawam[".inlineEditFields"][] = "nama";
$tdataawam[".inlineEditFields"][] = "penerangan";

$tdataawam[".exportFields"] = array();
$tdataawam[".exportFields"][] = "nama";
$tdataawam[".exportFields"][] = "penerangan";

$tdataawam[".importFields"] = array();
$tdataawam[".importFields"][] = "awid";
$tdataawam[".importFields"][] = "nama";
$tdataawam[".importFields"][] = "penerangan";

$tdataawam[".printFields"] = array();
$tdataawam[".printFields"][] = "nama";
$tdataawam[".printFields"][] = "penerangan";

//	awid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "awid";
	$fdata["GoodName"] = "awid";
	$fdata["ownerTable"] = "awam";
	$fdata["Label"] = GetFieldLabel("awam","awid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "awid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "awid";

	
	
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




	$tdataawam["awid"] = $fdata;
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "awam";
	$fdata["Label"] = GetFieldLabel("awam","nama");
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




	$tdataawam["nama"] = $fdata;
//	penerangan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "penerangan";
	$fdata["GoodName"] = "penerangan";
	$fdata["ownerTable"] = "awam";
	$fdata["Label"] = GetFieldLabel("awam","penerangan");
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




	$tdataawam["penerangan"] = $fdata;


$tables_data["awam"]=&$tdataawam;
$field_labels["awam"] = &$fieldLabelsawam;
$fieldToolTips["awam"] = &$fieldToolTipsawam;
$page_titles["awam"] = &$pageTitlesawam;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["awam"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["awam"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_awam()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "awid,  	nama,  	penerangan";
$proto0["m_strFrom"] = "FROM awam";
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
	"m_strName" => "awid",
	"m_strTable" => "awam",
	"m_srcTableName" => "awam"
));

$proto5["m_sql"] = "awid";
$proto5["m_srcTableName"] = "awam";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "awam",
	"m_srcTableName" => "awam"
));

$proto7["m_sql"] = "nama";
$proto7["m_srcTableName"] = "awam";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "penerangan",
	"m_strTable" => "awam",
	"m_srcTableName" => "awam"
));

$proto9["m_sql"] = "penerangan";
$proto9["m_srcTableName"] = "awam";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "awam";
$proto12["m_srcTableName"] = "awam";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "awid";
$proto12["m_columns"][] = "nama";
$proto12["m_columns"][] = "penerangan";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "awam";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "awam";
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
$proto0["m_srcTableName"]="awam";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_awam = createSqlQuery_awam();



			

$tdataawam[".sqlquery"] = $queryData_awam;

$tableEvents["awam"] = new eventsBase;
$tdataawam[".hasEvents"] = false;

?>