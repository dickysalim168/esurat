<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapergerakanbahagian = array();
	$tdatapergerakanbahagian[".NumberOfChars"] = 80; 
	$tdatapergerakanbahagian[".ShortName"] = "pergerakanbahagian";
	$tdatapergerakanbahagian[".OwnerID"] = "";
	$tdatapergerakanbahagian[".OriginalTable"] = "pergerakanbahagian";

//	field labels
$fieldLabelspergerakanbahagian = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelspergerakanbahagian["Malay"] = array();
	$fieldToolTipspergerakanbahagian["Malay"] = array();
	$fieldLabelspergerakanbahagian["Malay"]["pbid"] = "Pbid";
	$fieldToolTipspergerakanbahagian["Malay"]["pbid"] = "";
	$fieldLabelspergerakanbahagian["Malay"]["pid"] = "Pid";
	$fieldToolTipspergerakanbahagian["Malay"]["pid"] = "";
	$fieldLabelspergerakanbahagian["Malay"]["KepadaBahagian"] = "Kepada Bahagian";
	$fieldToolTipspergerakanbahagian["Malay"]["KepadaBahagian"] = "";
	if (count($fieldToolTipspergerakanbahagian["Malay"]))
		$tdatapergerakanbahagian[".isUseToolTips"] = true;
}
	
	
	$tdatapergerakanbahagian[".NCSearch"] = true;



$tdatapergerakanbahagian[".shortTableName"] = "pergerakanbahagian";
$tdatapergerakanbahagian[".nSecOptions"] = 0;
$tdatapergerakanbahagian[".recsPerRowList"] = 1;
$tdatapergerakanbahagian[".mainTableOwnerID"] = "";
$tdatapergerakanbahagian[".moveNext"] = 1;
$tdatapergerakanbahagian[".nType"] = 0;

$tdatapergerakanbahagian[".strOriginalTableName"] = "pergerakanbahagian";




$tdatapergerakanbahagian[".showAddInPopup"] = false;

$tdatapergerakanbahagian[".showEditInPopup"] = false;

$tdatapergerakanbahagian[".showViewInPopup"] = false;

$tdatapergerakanbahagian[".fieldsForRegister"] = array();
	
$tdatapergerakanbahagian[".listAjax"] = false;

	$tdatapergerakanbahagian[".audit"] = false;

	$tdatapergerakanbahagian[".locking"] = false;

$tdatapergerakanbahagian[".listIcons"] = true;
$tdatapergerakanbahagian[".edit"] = true;
$tdatapergerakanbahagian[".inlineEdit"] = true;
$tdatapergerakanbahagian[".inlineAdd"] = true;
$tdatapergerakanbahagian[".view"] = true;



$tdatapergerakanbahagian[".delete"] = true;

$tdatapergerakanbahagian[".showSimpleSearchOptions"] = false;

$tdatapergerakanbahagian[".showSearchPanel"] = true;

if (isMobile())
	$tdatapergerakanbahagian[".isUseAjaxSuggest"] = false;
else 
	$tdatapergerakanbahagian[".isUseAjaxSuggest"] = true;

$tdatapergerakanbahagian[".rowHighlite"] = true;

// button handlers file names
$tdatapergerakanbahagian[".isUsebuttonHandlers"] = true;
$tdatapergerakanbahagian[".isUsebuttonHandlers"] = true;

$tdatapergerakanbahagian[".addPageEvents"] = false;

// use datepicker for search panel
$tdatapergerakanbahagian[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatapergerakanbahagian[".isUseTimeForSearch"] = false;




$tdatapergerakanbahagian[".allSearchFields"] = array();

$tdatapergerakanbahagian[".allSearchFields"][] = "KepadaBahagian";

$tdatapergerakanbahagian[".googleLikeFields"][] = "pbid";
$tdatapergerakanbahagian[".googleLikeFields"][] = "pid";
$tdatapergerakanbahagian[".googleLikeFields"][] = "KepadaBahagian";


$tdatapergerakanbahagian[".advSearchFields"][] = "KepadaBahagian";

$tdatapergerakanbahagian[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatapergerakanbahagian[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapergerakanbahagian[".strOrderBy"] = $tstrOrderBy;

$tdatapergerakanbahagian[".orderindexes"] = array();

$tdatapergerakanbahagian[".sqlHead"] = "SELECT pbid,   pid,   KepadaBahagian";
$tdatapergerakanbahagian[".sqlFrom"] = "FROM pergerakanbahagian";
$tdatapergerakanbahagian[".sqlWhereExpr"] = "";
$tdatapergerakanbahagian[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapergerakanbahagian[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapergerakanbahagian[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspergerakanbahagian = array();
$tableKeyspergerakanbahagian[] = "pbid";
$tdatapergerakanbahagian[".Keys"] = $tableKeyspergerakanbahagian;

$tdatapergerakanbahagian[".listFields"] = array();
$tdatapergerakanbahagian[".listFields"][] = "KepadaBahagian";

$tdatapergerakanbahagian[".viewFields"] = array();
$tdatapergerakanbahagian[".viewFields"][] = "KepadaBahagian";

$tdatapergerakanbahagian[".addFields"] = array();
$tdatapergerakanbahagian[".addFields"][] = "KepadaBahagian";

$tdatapergerakanbahagian[".inlineAddFields"] = array();
$tdatapergerakanbahagian[".inlineAddFields"][] = "KepadaBahagian";

$tdatapergerakanbahagian[".editFields"] = array();
$tdatapergerakanbahagian[".editFields"][] = "KepadaBahagian";

$tdatapergerakanbahagian[".inlineEditFields"] = array();
$tdatapergerakanbahagian[".inlineEditFields"][] = "KepadaBahagian";

$tdatapergerakanbahagian[".exportFields"] = array();

$tdatapergerakanbahagian[".printFields"] = array();

//	pbid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pbid";
	$fdata["GoodName"] = "pbid";
	$fdata["ownerTable"] = "pergerakanbahagian";
	$fdata["Label"] = "Pbid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "pbid"; 
		$fdata["FullName"] = "pbid";
	
		
		
				
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
	
		
		
	$tdatapergerakanbahagian["pbid"] = $fdata;
//	pid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pid";
	$fdata["GoodName"] = "pid";
	$fdata["ownerTable"] = "pergerakanbahagian";
	$fdata["Label"] = "Pid"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
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
	
		
		
	$tdatapergerakanbahagian["pid"] = $fdata;
//	KepadaBahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "KepadaBahagian";
	$fdata["GoodName"] = "KepadaBahagian";
	$fdata["ownerTable"] = "pergerakanbahagian";
	$fdata["Label"] = "Kepada Bahagian"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "KepadaBahagian"; 
		$fdata["FullName"] = "KepadaBahagian";
	
		
		
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
				if(strpos(GetUserPermissions("pergerakanbahagian"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "staff_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "staff_id";
	
		
	$edata["LookupTable"] = "Copy of pejawatan_staffdetails";
	$edata["LookupOrderBy"] = "name";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapergerakanbahagian["KepadaBahagian"] = $fdata;

	
$tables_data["pergerakanbahagian"]=&$tdatapergerakanbahagian;
$field_labels["pergerakanbahagian"] = &$fieldLabelspergerakanbahagian;
$fieldToolTips["pergerakanbahagian"] = &$fieldToolTipspergerakanbahagian;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pergerakanbahagian"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["pergerakanbahagian"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="pergerakan";
	$masterParams["mDataSourceTable"]="pergerakan";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pergerakan";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["pergerakanbahagian"][$mIndex] = $masterParams;	
		$masterTablesData["pergerakanbahagian"][$mIndex]["masterKeys"][]="pid";
		$masterTablesData["pergerakanbahagian"][$mIndex]["detailKeys"][]="pid";

$mIndex = 2-1;
			$strOriginalDetailsTable="pergerakan";
	$masterParams["mDataSourceTable"]="PergerakanSurat";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "PergerakanSurat";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["pergerakanbahagian"][$mIndex] = $masterParams;	
		$masterTablesData["pergerakanbahagian"][$mIndex]["masterKeys"][]="pid";
		$masterTablesData["pergerakanbahagian"][$mIndex]["detailKeys"][]="pid";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pergerakanbahagian()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pbid,   pid,   KepadaBahagian";
$proto0["m_strFrom"] = "FROM pergerakanbahagian";
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
	"m_strName" => "pbid",
	"m_strTable" => "pergerakanbahagian"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "pid",
	"m_strTable" => "pergerakanbahagian"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "KepadaBahagian",
	"m_strTable" => "pergerakanbahagian"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "pergerakanbahagian";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "pbid";
$proto12["m_columns"][] = "pid";
$proto12["m_columns"][] = "KepadaBahagian";
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
$queryData_pergerakanbahagian = createSqlQuery_pergerakanbahagian();
			$tdatapergerakanbahagian[".sqlquery"] = $queryData_pergerakanbahagian;
	
if(isset($tdatapergerakanbahagian["field2"])){
	$tdatapergerakanbahagian["field2"]["LookupTable"] = "carscars_view";
	$tdatapergerakanbahagian["field2"]["LookupOrderBy"] = "name";
	$tdatapergerakanbahagian["field2"]["LookupType"] = 4;
	$tdatapergerakanbahagian["field2"]["LinkField"] = "email";
	$tdatapergerakanbahagian["field2"]["DisplayField"] = "name";
	$tdatapergerakanbahagian[".hasCustomViewField"] = true;
}

include_once(getabspath("include/pergerakanbahagian_events.php"));
$tableEvents["pergerakanbahagian"] = new eventclass_pergerakanbahagian;
$tdatapergerakanbahagian[".hasEvents"] = true;

$cipherer = new RunnerCipherer("pergerakanbahagian");

?>