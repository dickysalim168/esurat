<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapergerakan = array();
	$tdatapergerakan[".NumberOfChars"] = 80; 
	$tdatapergerakan[".ShortName"] = "pergerakan";
	$tdatapergerakan[".OwnerID"] = "";
	$tdatapergerakan[".OriginalTable"] = "pergerakan";

//	field labels
$fieldLabelspergerakan = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelspergerakan["Malay"] = array();
	$fieldToolTipspergerakan["Malay"] = array();
	$fieldLabelspergerakan["Malay"]["pid"] = "Pid";
	$fieldToolTipspergerakan["Malay"]["pid"] = "";
	$fieldLabelspergerakan["Malay"]["tarikh"] = "Tarikh";
	$fieldToolTipspergerakan["Malay"]["tarikh"] = "";
	$fieldLabelspergerakan["Malay"]["daripada_bahagian"] = "Daripada Bahagian";
	$fieldToolTipspergerakan["Malay"]["daripada_bahagian"] = "";
	$fieldLabelspergerakan["Malay"]["catatan"] = "Catatan";
	$fieldToolTipspergerakan["Malay"]["catatan"] = "";
	$fieldLabelspergerakan["Malay"]["sid"] = "Sid";
	$fieldToolTipspergerakan["Malay"]["sid"] = "";
	$fieldLabelspergerakan["Malay"]["kepada_bahagian"] = "Kepada Bahagian";
	$fieldToolTipspergerakan["Malay"]["kepada_bahagian"] = "";
	if (count($fieldToolTipspergerakan["Malay"]))
		$tdatapergerakan[".isUseToolTips"] = true;
}
	
	
	$tdatapergerakan[".NCSearch"] = true;



$tdatapergerakan[".shortTableName"] = "pergerakan";
$tdatapergerakan[".nSecOptions"] = 0;
$tdatapergerakan[".recsPerRowList"] = 1;
$tdatapergerakan[".mainTableOwnerID"] = "";
$tdatapergerakan[".moveNext"] = 1;
$tdatapergerakan[".nType"] = 0;

$tdatapergerakan[".strOriginalTableName"] = "pergerakan";




$tdatapergerakan[".showAddInPopup"] = false;

$tdatapergerakan[".showEditInPopup"] = false;

$tdatapergerakan[".showViewInPopup"] = false;

$tdatapergerakan[".fieldsForRegister"] = array();
	
$tdatapergerakan[".listAjax"] = false;

	$tdatapergerakan[".audit"] = false;

	$tdatapergerakan[".locking"] = false;

$tdatapergerakan[".listIcons"] = true;
$tdatapergerakan[".edit"] = true;
$tdatapergerakan[".inlineEdit"] = true;
$tdatapergerakan[".inlineAdd"] = true;
$tdatapergerakan[".view"] = true;



$tdatapergerakan[".delete"] = true;

$tdatapergerakan[".showSimpleSearchOptions"] = false;

$tdatapergerakan[".showSearchPanel"] = true;

if (isMobile())
	$tdatapergerakan[".isUseAjaxSuggest"] = false;
else 
	$tdatapergerakan[".isUseAjaxSuggest"] = true;

$tdatapergerakan[".rowHighlite"] = true;

// button handlers file names

$tdatapergerakan[".addPageEvents"] = false;

// use datepicker for search panel
$tdatapergerakan[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdatapergerakan[".isUseTimeForSearch"] = false;




$tdatapergerakan[".allSearchFields"] = array();

$tdatapergerakan[".allSearchFields"][] = "tarikh";
$tdatapergerakan[".allSearchFields"][] = "daripada_bahagian";
$tdatapergerakan[".allSearchFields"][] = "catatan";

$tdatapergerakan[".googleLikeFields"][] = "sid";
$tdatapergerakan[".googleLikeFields"][] = "pid";
$tdatapergerakan[".googleLikeFields"][] = "tarikh";
$tdatapergerakan[".googleLikeFields"][] = "daripada_bahagian";
$tdatapergerakan[".googleLikeFields"][] = "kepada_bahagian";
$tdatapergerakan[".googleLikeFields"][] = "catatan";


$tdatapergerakan[".advSearchFields"][] = "tarikh";
$tdatapergerakan[".advSearchFields"][] = "daripada_bahagian";
$tdatapergerakan[".advSearchFields"][] = "catatan";

$tdatapergerakan[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatapergerakan[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapergerakan[".strOrderBy"] = $tstrOrderBy;

$tdatapergerakan[".orderindexes"] = array();

$tdatapergerakan[".sqlHead"] = "SELECT pid,   tarikh,   daripada_bahagian,   kepada_bahagian,   catatan,   sid";
$tdatapergerakan[".sqlFrom"] = "FROM pergerakan";
$tdatapergerakan[".sqlWhereExpr"] = "";
$tdatapergerakan[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapergerakan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapergerakan[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspergerakan = array();
$tableKeyspergerakan[] = "pid";
$tdatapergerakan[".Keys"] = $tableKeyspergerakan;

$tdatapergerakan[".listFields"] = array();
$tdatapergerakan[".listFields"][] = "tarikh";
$tdatapergerakan[".listFields"][] = "daripada_bahagian";
$tdatapergerakan[".listFields"][] = "kepada_bahagian";
$tdatapergerakan[".listFields"][] = "catatan";

$tdatapergerakan[".viewFields"] = array();
$tdatapergerakan[".viewFields"][] = "tarikh";
$tdatapergerakan[".viewFields"][] = "daripada_bahagian";
$tdatapergerakan[".viewFields"][] = "catatan";

$tdatapergerakan[".addFields"] = array();
$tdatapergerakan[".addFields"][] = "tarikh";
$tdatapergerakan[".addFields"][] = "daripada_bahagian";
$tdatapergerakan[".addFields"][] = "catatan";

$tdatapergerakan[".inlineAddFields"] = array();
$tdatapergerakan[".inlineAddFields"][] = "tarikh";
$tdatapergerakan[".inlineAddFields"][] = "daripada_bahagian";
$tdatapergerakan[".inlineAddFields"][] = "catatan";

$tdatapergerakan[".editFields"] = array();
$tdatapergerakan[".editFields"][] = "tarikh";
$tdatapergerakan[".editFields"][] = "daripada_bahagian";
$tdatapergerakan[".editFields"][] = "catatan";

$tdatapergerakan[".inlineEditFields"] = array();
$tdatapergerakan[".inlineEditFields"][] = "tarikh";
$tdatapergerakan[".inlineEditFields"][] = "daripada_bahagian";
$tdatapergerakan[".inlineEditFields"][] = "catatan";

$tdatapergerakan[".exportFields"] = array();

$tdatapergerakan[".printFields"] = array();

//	pid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pid";
	$fdata["GoodName"] = "pid";
	$fdata["ownerTable"] = "pergerakan";
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
	
		
		
	$tdatapergerakan["pid"] = $fdata;
//	tarikh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tarikh";
	$fdata["GoodName"] = "tarikh";
	$fdata["ownerTable"] = "pergerakan";
	$fdata["Label"] = "Tarikh"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatapergerakan["tarikh"] = $fdata;
//	daripada_bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "daripada_bahagian";
	$fdata["GoodName"] = "daripada_bahagian";
	$fdata["ownerTable"] = "pergerakan";
	$fdata["Label"] = "Daripada Bahagian"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("pergerakan"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "staff_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";
	
		
	$edata["LookupTable"] = "Copy of pejawatan_staffdetails";
	$edata["LookupOrderBy"] = "name";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:300px;";
	$edata["controlWidth"] = 300;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapergerakan["daripada_bahagian"] = $fdata;
//	kepada_bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "kepada_bahagian";
	$fdata["GoodName"] = "kepada_bahagian";
	$fdata["ownerTable"] = "pergerakan";
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
	
		
		
	$tdatapergerakan["kepada_bahagian"] = $fdata;
//	catatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "catatan";
	$fdata["GoodName"] = "catatan";
	$fdata["ownerTable"] = "pergerakan";
	$fdata["Label"] = "Catatan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatapergerakan["catatan"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "pergerakan";
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
	
		
		
	$tdatapergerakan["sid"] = $fdata;

	
$tables_data["pergerakan"]=&$tdatapergerakan;
$field_labels["pergerakan"] = &$fieldLabelspergerakan;
$fieldToolTips["pergerakan"] = &$fieldToolTipspergerakan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pergerakan"] = array();
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
	
	$detailsTablesData["pergerakan"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pergerakan"][$dIndex]["masterKeys"][]="pid";
		$detailsTablesData["pergerakan"][$dIndex]["detailKeys"][]="pid";

	
// tables which are master tables for current table (detail)
$masterTablesData["pergerakan"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="surat";
	$masterParams["mDataSourceTable"]="surat";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "surat";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["pergerakan"][$mIndex] = $masterParams;	
		$masterTablesData["pergerakan"][$mIndex]["masterKeys"][]="sid";
		$masterTablesData["pergerakan"][$mIndex]["detailKeys"][]="sid";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pergerakan()
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
$queryData_pergerakan = createSqlQuery_pergerakan();
						$tdatapergerakan[".sqlquery"] = $queryData_pergerakan;
	
if(isset($tdatapergerakan["field2"])){
	$tdatapergerakan["field2"]["LookupTable"] = "carscars_view";
	$tdatapergerakan["field2"]["LookupOrderBy"] = "name";
	$tdatapergerakan["field2"]["LookupType"] = 4;
	$tdatapergerakan["field2"]["LinkField"] = "email";
	$tdatapergerakan["field2"]["DisplayField"] = "name";
	$tdatapergerakan[".hasCustomViewField"] = true;
}

include_once(getabspath("include/pergerakan_events.php"));
$tableEvents["pergerakan"] = new eventclass_pergerakan;
$tdatapergerakan[".hasEvents"] = true;

$cipherer = new RunnerCipherer("pergerakan");

?>