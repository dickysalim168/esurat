<?php
require_once(getabspath("classes/cipherer.php"));
$tdataimbasan = array();
	$tdataimbasan[".NumberOfChars"] = 80; 
	$tdataimbasan[".ShortName"] = "imbasan";
	$tdataimbasan[".OwnerID"] = "";
	$tdataimbasan[".OriginalTable"] = "imbasan";

//	field labels
$fieldLabelsimbasan = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsimbasan["Malay"] = array();
	$fieldToolTipsimbasan["Malay"] = array();
	$fieldLabelsimbasan["Malay"]["imid"] = "Imid";
	$fieldToolTipsimbasan["Malay"]["imid"] = "";
	$fieldLabelsimbasan["Malay"]["sid"] = "Sid";
	$fieldToolTipsimbasan["Malay"]["sid"] = "";
	$fieldLabelsimbasan["Malay"]["Imbasan"] = "Imbasan";
	$fieldToolTipsimbasan["Malay"]["Imbasan"] = "";
	if (count($fieldToolTipsimbasan["Malay"]))
		$tdataimbasan[".isUseToolTips"] = true;
}
	
	
	$tdataimbasan[".NCSearch"] = true;



$tdataimbasan[".shortTableName"] = "imbasan";
$tdataimbasan[".nSecOptions"] = 0;
$tdataimbasan[".recsPerRowList"] = 1;
$tdataimbasan[".mainTableOwnerID"] = "";
$tdataimbasan[".moveNext"] = 1;
$tdataimbasan[".nType"] = 0;

$tdataimbasan[".strOriginalTableName"] = "imbasan";




$tdataimbasan[".showAddInPopup"] = false;

$tdataimbasan[".showEditInPopup"] = false;

$tdataimbasan[".showViewInPopup"] = false;

$tdataimbasan[".fieldsForRegister"] = array();
	
$tdataimbasan[".listAjax"] = false;

	$tdataimbasan[".audit"] = false;

	$tdataimbasan[".locking"] = false;

$tdataimbasan[".listIcons"] = true;
$tdataimbasan[".edit"] = true;
$tdataimbasan[".inlineEdit"] = true;
$tdataimbasan[".inlineAdd"] = true;
$tdataimbasan[".view"] = true;

$tdataimbasan[".exportTo"] = true;

$tdataimbasan[".printFriendly"] = true;

$tdataimbasan[".delete"] = true;

$tdataimbasan[".showSimpleSearchOptions"] = false;

$tdataimbasan[".showSearchPanel"] = true;

if (isMobile())
	$tdataimbasan[".isUseAjaxSuggest"] = false;
else 
	$tdataimbasan[".isUseAjaxSuggest"] = true;

$tdataimbasan[".rowHighlite"] = true;

// button handlers file names

$tdataimbasan[".addPageEvents"] = false;

// use datepicker for search panel
$tdataimbasan[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataimbasan[".isUseTimeForSearch"] = false;




$tdataimbasan[".allSearchFields"] = array();

$tdataimbasan[".allSearchFields"][] = "imid";
$tdataimbasan[".allSearchFields"][] = "sid";
$tdataimbasan[".allSearchFields"][] = "Imbasan";

$tdataimbasan[".googleLikeFields"][] = "imid";
$tdataimbasan[".googleLikeFields"][] = "sid";
$tdataimbasan[".googleLikeFields"][] = "Imbasan";


$tdataimbasan[".advSearchFields"][] = "imid";
$tdataimbasan[".advSearchFields"][] = "sid";
$tdataimbasan[".advSearchFields"][] = "Imbasan";

$tdataimbasan[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataimbasan[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataimbasan[".strOrderBy"] = $tstrOrderBy;

$tdataimbasan[".orderindexes"] = array();

$tdataimbasan[".sqlHead"] = "SELECT imid,   sid,   Imbasan";
$tdataimbasan[".sqlFrom"] = "FROM imbasan";
$tdataimbasan[".sqlWhereExpr"] = "";
$tdataimbasan[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataimbasan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataimbasan[".arrGroupsPerPage"] = $arrGPP;

$tableKeysimbasan = array();
$tableKeysimbasan[] = "imid";
$tdataimbasan[".Keys"] = $tableKeysimbasan;

$tdataimbasan[".listFields"] = array();
$tdataimbasan[".listFields"][] = "imid";
$tdataimbasan[".listFields"][] = "sid";
$tdataimbasan[".listFields"][] = "Imbasan";

$tdataimbasan[".viewFields"] = array();
$tdataimbasan[".viewFields"][] = "imid";
$tdataimbasan[".viewFields"][] = "sid";
$tdataimbasan[".viewFields"][] = "Imbasan";

$tdataimbasan[".addFields"] = array();
$tdataimbasan[".addFields"][] = "sid";
$tdataimbasan[".addFields"][] = "Imbasan";

$tdataimbasan[".inlineAddFields"] = array();
$tdataimbasan[".inlineAddFields"][] = "sid";
$tdataimbasan[".inlineAddFields"][] = "Imbasan";

$tdataimbasan[".editFields"] = array();
$tdataimbasan[".editFields"][] = "sid";
$tdataimbasan[".editFields"][] = "Imbasan";

$tdataimbasan[".inlineEditFields"] = array();
$tdataimbasan[".inlineEditFields"][] = "sid";
$tdataimbasan[".inlineEditFields"][] = "Imbasan";

$tdataimbasan[".exportFields"] = array();
$tdataimbasan[".exportFields"][] = "imid";
$tdataimbasan[".exportFields"][] = "sid";
$tdataimbasan[".exportFields"][] = "Imbasan";

$tdataimbasan[".printFields"] = array();
$tdataimbasan[".printFields"][] = "imid";
$tdataimbasan[".printFields"][] = "sid";
$tdataimbasan[".printFields"][] = "Imbasan";

//	imid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "imid";
	$fdata["GoodName"] = "imid";
	$fdata["ownerTable"] = "imbasan";
	$fdata["Label"] = "Imid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "imid"; 
		$fdata["FullName"] = "imid";
	
		
		
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
	
		
		
	$tdataimbasan["imid"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "imbasan";
	$fdata["Label"] = "Sid"; 
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
	
		$fdata["strField"] = "sid"; 
		$fdata["FullName"] = "sid";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataimbasan["sid"] = $fdata;
//	Imbasan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Imbasan";
	$fdata["GoodName"] = "Imbasan";
	$fdata["ownerTable"] = "imbasan";
	$fdata["Label"] = "Imbasan"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Imbasan"; 
		$fdata["FullName"] = "Imbasan";
	
		
		
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
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataimbasan["Imbasan"] = $fdata;

	
$tables_data["imbasan"]=&$tdataimbasan;
$field_labels["imbasan"] = &$fieldLabelsimbasan;
$fieldToolTips["imbasan"] = &$fieldToolTipsimbasan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["imbasan"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["imbasan"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_imbasan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "imid,   sid,   Imbasan";
$proto0["m_strFrom"] = "FROM imbasan";
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
	"m_strName" => "imid",
	"m_strTable" => "imbasan"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "imbasan"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Imbasan",
	"m_strTable" => "imbasan"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "imbasan";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "imid";
$proto12["m_columns"][] = "sid";
$proto12["m_columns"][] = "Imbasan";
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
$queryData_imbasan = createSqlQuery_imbasan();
			$tdataimbasan[".sqlquery"] = $queryData_imbasan;
	
if(isset($tdataimbasan["field2"])){
	$tdataimbasan["field2"]["LookupTable"] = "carscars_view";
	$tdataimbasan["field2"]["LookupOrderBy"] = "name";
	$tdataimbasan["field2"]["LookupType"] = 4;
	$tdataimbasan["field2"]["LinkField"] = "email";
	$tdataimbasan["field2"]["DisplayField"] = "name";
	$tdataimbasan[".hasCustomViewField"] = true;
}

$tableEvents["imbasan"] = new eventsBase;
$tdataimbasan[".hasEvents"] = false;

$cipherer = new RunnerCipherer("imbasan");

?>