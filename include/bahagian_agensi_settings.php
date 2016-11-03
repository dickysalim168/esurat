<?php
require_once(getabspath("classes/cipherer.php"));
$tdatabahagian_agensi = array();
	$tdatabahagian_agensi[".NumberOfChars"] = 80; 
	$tdatabahagian_agensi[".ShortName"] = "bahagian_agensi";
	$tdatabahagian_agensi[".OwnerID"] = "";
	$tdatabahagian_agensi[".OriginalTable"] = "bahagian_agensi";

//	field labels
$fieldLabelsbahagian_agensi = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsbahagian_agensi["Malay"] = array();
	$fieldToolTipsbahagian_agensi["Malay"] = array();
	$fieldLabelsbahagian_agensi["Malay"]["baid"] = "Baid";
	$fieldToolTipsbahagian_agensi["Malay"]["baid"] = "";
	$fieldLabelsbahagian_agensi["Malay"]["jid"] = "Jenis";
	$fieldToolTipsbahagian_agensi["Malay"]["jid"] = "";
	$fieldLabelsbahagian_agensi["Malay"]["namaBahagian"] = "Nama Bahagian";
	$fieldToolTipsbahagian_agensi["Malay"]["namaBahagian"] = "";
	$fieldLabelsbahagian_agensi["Malay"]["Bahagian"] = "Bahagian";
	$fieldToolTipsbahagian_agensi["Malay"]["Bahagian"] = "";
	$fieldLabelsbahagian_agensi["Malay"]["dariBahagian"] = "Dari Bahagian";
	$fieldToolTipsbahagian_agensi["Malay"]["dariBahagian"] = "";
	if (count($fieldToolTipsbahagian_agensi["Malay"]))
		$tdatabahagian_agensi[".isUseToolTips"] = true;
}
	
	
	$tdatabahagian_agensi[".NCSearch"] = true;



$tdatabahagian_agensi[".shortTableName"] = "bahagian_agensi";
$tdatabahagian_agensi[".nSecOptions"] = 0;
$tdatabahagian_agensi[".recsPerRowList"] = 1;
$tdatabahagian_agensi[".mainTableOwnerID"] = "";
$tdatabahagian_agensi[".moveNext"] = 1;
$tdatabahagian_agensi[".nType"] = 0;

$tdatabahagian_agensi[".strOriginalTableName"] = "bahagian_agensi";




$tdatabahagian_agensi[".showAddInPopup"] = false;

$tdatabahagian_agensi[".showEditInPopup"] = false;

$tdatabahagian_agensi[".showViewInPopup"] = false;

$tdatabahagian_agensi[".fieldsForRegister"] = array();

$tdatabahagian_agensi[".listAjax"] = false;

	$tdatabahagian_agensi[".audit"] = false;

	$tdatabahagian_agensi[".locking"] = false;

$tdatabahagian_agensi[".listIcons"] = true;
$tdatabahagian_agensi[".edit"] = true;
$tdatabahagian_agensi[".inlineEdit"] = true;
$tdatabahagian_agensi[".inlineAdd"] = true;
$tdatabahagian_agensi[".view"] = true;

$tdatabahagian_agensi[".exportTo"] = true;

$tdatabahagian_agensi[".printFriendly"] = true;

$tdatabahagian_agensi[".delete"] = true;

$tdatabahagian_agensi[".showSimpleSearchOptions"] = false;

$tdatabahagian_agensi[".showSearchPanel"] = true;

if (isMobile())
	$tdatabahagian_agensi[".isUseAjaxSuggest"] = false;
else 
	$tdatabahagian_agensi[".isUseAjaxSuggest"] = true;

$tdatabahagian_agensi[".rowHighlite"] = true;

// button handlers file names
$tdatabahagian_agensi[".isUsebuttonHandlers"] = true;
$tdatabahagian_agensi[".isUsebuttonHandlers"] = true;

$tdatabahagian_agensi[".addPageEvents"] = false;

// use datepicker for search panel
$tdatabahagian_agensi[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatabahagian_agensi[".isUseTimeForSearch"] = false;




$tdatabahagian_agensi[".allSearchFields"] = array();

$tdatabahagian_agensi[".allSearchFields"][] = "baid";
$tdatabahagian_agensi[".allSearchFields"][] = "jid";
$tdatabahagian_agensi[".allSearchFields"][] = "namaBahagian";

$tdatabahagian_agensi[".googleLikeFields"][] = "baid";
$tdatabahagian_agensi[".googleLikeFields"][] = "jid";
$tdatabahagian_agensi[".googleLikeFields"][] = "namaBahagian";


$tdatabahagian_agensi[".advSearchFields"][] = "baid";
$tdatabahagian_agensi[".advSearchFields"][] = "jid";
$tdatabahagian_agensi[".advSearchFields"][] = "namaBahagian";

$tdatabahagian_agensi[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatabahagian_agensi[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabahagian_agensi[".strOrderBy"] = $tstrOrderBy;

$tdatabahagian_agensi[".orderindexes"] = array();

$tdatabahagian_agensi[".sqlHead"] = "SELECT baid,  jid,  namaBahagian";
$tdatabahagian_agensi[".sqlFrom"] = "FROM bahagian_agensi";
$tdatabahagian_agensi[".sqlWhereExpr"] = "";
$tdatabahagian_agensi[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabahagian_agensi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabahagian_agensi[".arrGroupsPerPage"] = $arrGPP;

$tableKeysbahagian_agensi = array();
$tableKeysbahagian_agensi[] = "baid";
$tdatabahagian_agensi[".Keys"] = $tableKeysbahagian_agensi;

$tdatabahagian_agensi[".listFields"] = array();
$tdatabahagian_agensi[".listFields"][] = "jid";
$tdatabahagian_agensi[".listFields"][] = "namaBahagian";

$tdatabahagian_agensi[".viewFields"] = array();
$tdatabahagian_agensi[".viewFields"][] = "jid";
$tdatabahagian_agensi[".viewFields"][] = "namaBahagian";

$tdatabahagian_agensi[".addFields"] = array();
$tdatabahagian_agensi[".addFields"][] = "jid";
$tdatabahagian_agensi[".addFields"][] = "namaBahagian";

$tdatabahagian_agensi[".inlineAddFields"] = array();
$tdatabahagian_agensi[".inlineAddFields"][] = "jid";
$tdatabahagian_agensi[".inlineAddFields"][] = "namaBahagian";

$tdatabahagian_agensi[".editFields"] = array();
$tdatabahagian_agensi[".editFields"][] = "jid";
$tdatabahagian_agensi[".editFields"][] = "namaBahagian";

$tdatabahagian_agensi[".inlineEditFields"] = array();
$tdatabahagian_agensi[".inlineEditFields"][] = "jid";
$tdatabahagian_agensi[".inlineEditFields"][] = "namaBahagian";

$tdatabahagian_agensi[".exportFields"] = array();
$tdatabahagian_agensi[".exportFields"][] = "jid";
$tdatabahagian_agensi[".exportFields"][] = "namaBahagian";

$tdatabahagian_agensi[".printFields"] = array();
$tdatabahagian_agensi[".printFields"][] = "jid";
$tdatabahagian_agensi[".printFields"][] = "namaBahagian";

//	baid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "baid";
	$fdata["GoodName"] = "baid";
	$fdata["ownerTable"] = "bahagian_agensi";
	$fdata["Label"] = "Baid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "baid"; 
		$fdata["FullName"] = "baid";
	
		
		
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
	
		
		
	$tdatabahagian_agensi["baid"] = $fdata;
//	jid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "jid";
	$fdata["GoodName"] = "jid";
	$fdata["ownerTable"] = "bahagian_agensi";
	$fdata["Label"] = "Jenis"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jid"; 
		$fdata["FullName"] = "jid";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "jid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "jenis";
	
		
	$edata["LookupTable"] = "jenis";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabahagian_agensi["jid"] = $fdata;
//	namaBahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "namaBahagian";
	$fdata["GoodName"] = "namaBahagian";
	$fdata["ownerTable"] = "bahagian_agensi";
	$fdata["Label"] = "Nama Bahagian"; 
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
	
		$fdata["strField"] = "namaBahagian"; 
		$fdata["FullName"] = "namaBahagian";
	
		
		
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["inputStyle"] = " width:250px;";
	$edata["controlWidth"] = 250;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabahagian_agensi["namaBahagian"] = $fdata;

	
$tables_data["bahagian_agensi"]=&$tdatabahagian_agensi;
$field_labels["bahagian_agensi"] = &$fieldLabelsbahagian_agensi;
$fieldToolTips["bahagian_agensi"] = &$fieldToolTipsbahagian_agensi;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["bahagian_agensi"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="individu";
	$detailsParam["dDataSourceTable"]="individu";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="individu";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 0;
	$detailsParam["previewOnAdd"]= 1;
	$detailsParam["previewOnEdit"]= 1;
	$detailsParam["previewOnView"]= 1;
	
	$detailsTablesData["bahagian_agensi"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["bahagian_agensi"][$dIndex]["masterKeys"][]="baid";
		$detailsTablesData["bahagian_agensi"][$dIndex]["detailKeys"][]="baid";

	
// tables which are master tables for current table (detail)
$masterTablesData["bahagian_agensi"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_bahagian_agensi()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "baid,  jid,  namaBahagian";
$proto0["m_strFrom"] = "FROM bahagian_agensi";
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
	"m_strName" => "baid",
	"m_strTable" => "bahagian_agensi"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "jid",
	"m_strTable" => "bahagian_agensi"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "namaBahagian",
	"m_strTable" => "bahagian_agensi"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "bahagian_agensi";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "baid";
$proto12["m_columns"][] = "jid";
$proto12["m_columns"][] = "namaBahagian";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bahagian_agensi = createSqlQuery_bahagian_agensi();
			$tdatabahagian_agensi[".sqlquery"] = $queryData_bahagian_agensi;
	
if(isset($tdatabahagian_agensi["field2"])){
	$tdatabahagian_agensi["field2"]["LookupTable"] = "carscars_view";
	$tdatabahagian_agensi["field2"]["LookupOrderBy"] = "name";
	$tdatabahagian_agensi["field2"]["LookupType"] = 4;
	$tdatabahagian_agensi["field2"]["LinkField"] = "email";
	$tdatabahagian_agensi["field2"]["DisplayField"] = "name";
	$tdatabahagian_agensi[".hasCustomViewField"] = true;
}

include_once(getabspath("include/bahagian_agensi_events.php"));
$tableEvents["bahagian_agensi"] = new eventclass_bahagian_agensi;
$tdatabahagian_agensi[".hasEvents"] = true;

$cipherer = new RunnerCipherer("bahagian_agensi");

?>