<?php
require_once(getabspath("classes/cipherer.php"));
$tdataPergerakanSurat = array();
	$tdataPergerakanSurat[".NumberOfChars"] = 80; 
	$tdataPergerakanSurat[".ShortName"] = "PergerakanSurat";
	$tdataPergerakanSurat[".OwnerID"] = "";
	$tdataPergerakanSurat[".OriginalTable"] = "pergerakan";

//	field labels
$fieldLabelsPergerakanSurat = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsPergerakanSurat["Malay"] = array();
	$fieldToolTipsPergerakanSurat["Malay"] = array();
	$fieldLabelsPergerakanSurat["Malay"]["pid"] = "Pid";
	$fieldToolTipsPergerakanSurat["Malay"]["pid"] = "";
	$fieldLabelsPergerakanSurat["Malay"]["tarikh"] = "Tarikh";
	$fieldToolTipsPergerakanSurat["Malay"]["tarikh"] = "";
	$fieldLabelsPergerakanSurat["Malay"]["daripada_bahagian"] = "Daripada Bahagian";
	$fieldToolTipsPergerakanSurat["Malay"]["daripada_bahagian"] = "";
	$fieldLabelsPergerakanSurat["Malay"]["catatan"] = "Catatan";
	$fieldToolTipsPergerakanSurat["Malay"]["catatan"] = "";
	$fieldLabelsPergerakanSurat["Malay"]["sid"] = "Sid";
	$fieldToolTipsPergerakanSurat["Malay"]["sid"] = "";
	$fieldLabelsPergerakanSurat["Malay"]["kepada_bahagian"] = "Kepada Bahagian";
	$fieldToolTipsPergerakanSurat["Malay"]["kepada_bahagian"] = "";
	if (count($fieldToolTipsPergerakanSurat["Malay"]))
		$tdataPergerakanSurat[".isUseToolTips"] = true;
}
	
	
	$tdataPergerakanSurat[".NCSearch"] = true;



$tdataPergerakanSurat[".shortTableName"] = "PergerakanSurat";
$tdataPergerakanSurat[".nSecOptions"] = 0;
$tdataPergerakanSurat[".recsPerRowList"] = 1;
$tdataPergerakanSurat[".mainTableOwnerID"] = "";
$tdataPergerakanSurat[".moveNext"] = 1;
$tdataPergerakanSurat[".nType"] = 1;

$tdataPergerakanSurat[".strOriginalTableName"] = "pergerakan";




$tdataPergerakanSurat[".showAddInPopup"] = false;

$tdataPergerakanSurat[".showEditInPopup"] = false;

$tdataPergerakanSurat[".showViewInPopup"] = false;

$tdataPergerakanSurat[".fieldsForRegister"] = array();
	
$tdataPergerakanSurat[".listAjax"] = false;

	$tdataPergerakanSurat[".audit"] = false;

	$tdataPergerakanSurat[".locking"] = false;

$tdataPergerakanSurat[".listIcons"] = true;
$tdataPergerakanSurat[".edit"] = true;
$tdataPergerakanSurat[".inlineEdit"] = true;
$tdataPergerakanSurat[".inlineAdd"] = true;
$tdataPergerakanSurat[".view"] = true;

$tdataPergerakanSurat[".exportTo"] = true;

$tdataPergerakanSurat[".printFriendly"] = true;

$tdataPergerakanSurat[".delete"] = true;

$tdataPergerakanSurat[".showSimpleSearchOptions"] = false;

$tdataPergerakanSurat[".showSearchPanel"] = true;

if (isMobile())
	$tdataPergerakanSurat[".isUseAjaxSuggest"] = false;
else 
	$tdataPergerakanSurat[".isUseAjaxSuggest"] = true;

$tdataPergerakanSurat[".rowHighlite"] = true;

// button handlers file names

$tdataPergerakanSurat[".addPageEvents"] = false;

// use datepicker for search panel
$tdataPergerakanSurat[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataPergerakanSurat[".isUseTimeForSearch"] = false;




$tdataPergerakanSurat[".allSearchFields"] = array();

$tdataPergerakanSurat[".allSearchFields"][] = "tarikh";
$tdataPergerakanSurat[".allSearchFields"][] = "daripada_bahagian";
$tdataPergerakanSurat[".allSearchFields"][] = "catatan";

$tdataPergerakanSurat[".googleLikeFields"][] = "sid";
$tdataPergerakanSurat[".googleLikeFields"][] = "pid";
$tdataPergerakanSurat[".googleLikeFields"][] = "tarikh";
$tdataPergerakanSurat[".googleLikeFields"][] = "daripada_bahagian";
$tdataPergerakanSurat[".googleLikeFields"][] = "kepada_bahagian";
$tdataPergerakanSurat[".googleLikeFields"][] = "catatan";


$tdataPergerakanSurat[".advSearchFields"][] = "tarikh";
$tdataPergerakanSurat[".advSearchFields"][] = "daripada_bahagian";
$tdataPergerakanSurat[".advSearchFields"][] = "catatan";

$tdataPergerakanSurat[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdataPergerakanSurat[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPergerakanSurat[".strOrderBy"] = $tstrOrderBy;

$tdataPergerakanSurat[".orderindexes"] = array();

$tdataPergerakanSurat[".sqlHead"] = "SELECT pid,   tarikh,   daripada_bahagian,   kepada_bahagian,   catatan,   sid";
$tdataPergerakanSurat[".sqlFrom"] = "FROM pergerakan";
$tdataPergerakanSurat[".sqlWhereExpr"] = "";
$tdataPergerakanSurat[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPergerakanSurat[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPergerakanSurat[".arrGroupsPerPage"] = $arrGPP;

$tableKeysPergerakanSurat = array();
$tableKeysPergerakanSurat[] = "pid";
$tdataPergerakanSurat[".Keys"] = $tableKeysPergerakanSurat;

$tdataPergerakanSurat[".listFields"] = array();
$tdataPergerakanSurat[".listFields"][] = "tarikh";
$tdataPergerakanSurat[".listFields"][] = "daripada_bahagian";
$tdataPergerakanSurat[".listFields"][] = "kepada_bahagian";
$tdataPergerakanSurat[".listFields"][] = "catatan";

$tdataPergerakanSurat[".viewFields"] = array();
$tdataPergerakanSurat[".viewFields"][] = "tarikh";
$tdataPergerakanSurat[".viewFields"][] = "daripada_bahagian";
$tdataPergerakanSurat[".viewFields"][] = "catatan";

$tdataPergerakanSurat[".addFields"] = array();
$tdataPergerakanSurat[".addFields"][] = "tarikh";
$tdataPergerakanSurat[".addFields"][] = "catatan";

$tdataPergerakanSurat[".inlineAddFields"] = array();
$tdataPergerakanSurat[".inlineAddFields"][] = "tarikh";
$tdataPergerakanSurat[".inlineAddFields"][] = "catatan";

$tdataPergerakanSurat[".editFields"] = array();
$tdataPergerakanSurat[".editFields"][] = "tarikh";
$tdataPergerakanSurat[".editFields"][] = "daripada_bahagian";
$tdataPergerakanSurat[".editFields"][] = "catatan";

$tdataPergerakanSurat[".inlineEditFields"] = array();
$tdataPergerakanSurat[".inlineEditFields"][] = "tarikh";
$tdataPergerakanSurat[".inlineEditFields"][] = "daripada_bahagian";
$tdataPergerakanSurat[".inlineEditFields"][] = "catatan";

$tdataPergerakanSurat[".exportFields"] = array();
$tdataPergerakanSurat[".exportFields"][] = "tarikh";
$tdataPergerakanSurat[".exportFields"][] = "daripada_bahagian";
$tdataPergerakanSurat[".exportFields"][] = "catatan";

$tdataPergerakanSurat[".printFields"] = array();
$tdataPergerakanSurat[".printFields"][] = "tarikh";
$tdataPergerakanSurat[".printFields"][] = "daripada_bahagian";
$tdataPergerakanSurat[".printFields"][] = "catatan";

//	pid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pid";
	$fdata["GoodName"] = "pid";
	$fdata["ownerTable"] = "PergerakanSurat";
	$fdata["Label"] = "Pid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "pid"; 
		$fdata["FullName"] = "pid";
	
		
		
				
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataPergerakanSurat["pid"] = $fdata;
//	tarikh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tarikh";
	$fdata["GoodName"] = "tarikh";
	$fdata["ownerTable"] = "PergerakanSurat";
	$fdata["Label"] = "Tarikh"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tarikh"; 
		$fdata["FullName"] = "tarikh";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataPergerakanSurat["tarikh"] = $fdata;
//	daripada_bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "daripada_bahagian";
	$fdata["GoodName"] = "daripada_bahagian";
	$fdata["ownerTable"] = "PergerakanSurat";
	$fdata["Label"] = "Daripada Bahagian"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "daripada_bahagian"; 
		$fdata["FullName"] = "daripada_bahagian";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataPergerakanSurat["daripada_bahagian"] = $fdata;
//	kepada_bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "kepada_bahagian";
	$fdata["GoodName"] = "kepada_bahagian";
	$fdata["ownerTable"] = "PergerakanSurat";
	$fdata["Label"] = "Kepada Bahagian"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "kepada_bahagian"; 
		$fdata["FullName"] = "kepada_bahagian";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataPergerakanSurat["kepada_bahagian"] = $fdata;
//	catatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "catatan";
	$fdata["GoodName"] = "catatan";
	$fdata["ownerTable"] = "PergerakanSurat";
	$fdata["Label"] = "Catatan"; 
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
	
		$fdata["strField"] = "catatan"; 
		$fdata["FullName"] = "catatan";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 300;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataPergerakanSurat["catatan"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "PergerakanSurat";
	$fdata["Label"] = "Sid"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sid"; 
		$fdata["FullName"] = "sid";
	
		
		
				
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataPergerakanSurat["sid"] = $fdata;

	
$tables_data["PergerakanSurat"]=&$tdataPergerakanSurat;
$field_labels["PergerakanSurat"] = &$fieldLabelsPergerakanSurat;
$fieldToolTips["PergerakanSurat"] = &$fieldToolTipsPergerakanSurat;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PergerakanSurat"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="pergerakanbahagian";
	$detailsParam["dDataSourceTable"]="pergerakanbahagian";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="pergerakanbahagian";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 2;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 1;
	$detailsParam["previewOnView"]= 0;
	
	$detailsTablesData["PergerakanSurat"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["PergerakanSurat"][$dIndex]["masterKeys"][]="pid";
		$detailsTablesData["PergerakanSurat"][$dIndex]["detailKeys"][]="pid";

	
// tables which are master tables for current table (detail)
$masterTablesData["PergerakanSurat"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="surat";
	$masterParams["mDataSourceTable"]="suratview";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "suratview";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["PergerakanSurat"][$mIndex] = $masterParams;	
		$masterTablesData["PergerakanSurat"][$mIndex]["masterKeys"][]="sid";
		$masterTablesData["PergerakanSurat"][$mIndex]["detailKeys"][]="sid";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PergerakanSurat()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pid,   tarikh,   daripada_bahagian,   kepada_bahagian,   catatan,   sid";
$proto0["m_strFrom"] = "FROM pergerakan";
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
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
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
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "pid",
	"m_strTable" => "pergerakan"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikh",
	"m_strTable" => "pergerakan"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "daripada_bahagian",
	"m_strTable" => "pergerakan"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "kepada_bahagian",
	"m_strTable" => "pergerakan"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "catatan",
	"m_strTable" => "pergerakan"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "pergerakan"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "pergerakan";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "pid";
$proto18["m_columns"][] = "tarikh";
$proto18["m_columns"][] = "daripada_bahagian";
$proto18["m_columns"][] = "kepada_bahagian";
$proto18["m_columns"][] = "catatan";
$proto18["m_columns"][] = "sid";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PergerakanSurat = createSqlQuery_PergerakanSurat();
						$tdataPergerakanSurat[".sqlquery"] = $queryData_PergerakanSurat;
	
if(isset($tdataPergerakanSurat["field2"])){
	$tdataPergerakanSurat["field2"]["LookupTable"] = "carscars_view";
	$tdataPergerakanSurat["field2"]["LookupOrderBy"] = "name";
	$tdataPergerakanSurat["field2"]["LookupType"] = 4;
	$tdataPergerakanSurat["field2"]["LinkField"] = "email";
	$tdataPergerakanSurat["field2"]["DisplayField"] = "name";
	$tdataPergerakanSurat[".hasCustomViewField"] = true;
}

include_once(getabspath("include/PergerakanSurat_events.php"));
$tableEvents["PergerakanSurat"] = new eventclass_PergerakanSurat;
$tdataPergerakanSurat[".hasEvents"] = true;

$cipherer = new RunnerCipherer("PergerakanSurat");

?>