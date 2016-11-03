<?php
require_once(getabspath("classes/cipherer.php"));
$tdatamenu2 = array();
	$tdatamenu2[".NumberOfChars"] = 80; 
	$tdatamenu2[".ShortName"] = "menu2";
	$tdatamenu2[".OwnerID"] = "";
	$tdatamenu2[".OriginalTable"] = "menu2";

//	field labels
$fieldLabelsmenu2 = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsmenu2["Malay"] = array();
	$fieldToolTipsmenu2["Malay"] = array();
	$fieldLabelsmenu2["Malay"]["menu2"] = "Menu2";
	$fieldToolTipsmenu2["Malay"]["menu2"] = "";
	if (count($fieldToolTipsmenu2["Malay"]))
		$tdatamenu2[".isUseToolTips"] = true;
}
	
	
	$tdatamenu2[".NCSearch"] = true;



$tdatamenu2[".shortTableName"] = "menu2";
$tdatamenu2[".nSecOptions"] = 0;
$tdatamenu2[".recsPerRowList"] = 1;
$tdatamenu2[".mainTableOwnerID"] = "";
$tdatamenu2[".moveNext"] = 1;
$tdatamenu2[".nType"] = 0;

$tdatamenu2[".strOriginalTableName"] = "menu2";




$tdatamenu2[".showAddInPopup"] = false;

$tdatamenu2[".showEditInPopup"] = false;

$tdatamenu2[".showViewInPopup"] = false;

$tdatamenu2[".fieldsForRegister"] = array();
	
$tdatamenu2[".listAjax"] = false;

	$tdatamenu2[".audit"] = false;

	$tdatamenu2[".locking"] = false;

$tdatamenu2[".listIcons"] = true;




$tdatamenu2[".showSimpleSearchOptions"] = false;

$tdatamenu2[".showSearchPanel"] = true;

if (isMobile())
	$tdatamenu2[".isUseAjaxSuggest"] = false;
else 
	$tdatamenu2[".isUseAjaxSuggest"] = true;

$tdatamenu2[".rowHighlite"] = true;

// button handlers file names

$tdatamenu2[".addPageEvents"] = false;

// use datepicker for search panel
$tdatamenu2[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatamenu2[".isUseTimeForSearch"] = false;




$tdatamenu2[".allSearchFields"] = array();

$tdatamenu2[".allSearchFields"][] = "menu2";

$tdatamenu2[".googleLikeFields"][] = "menu2";


$tdatamenu2[".advSearchFields"][] = "menu2";

$tdatamenu2[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatamenu2[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamenu2[".strOrderBy"] = $tstrOrderBy;

$tdatamenu2[".orderindexes"] = array();

$tdatamenu2[".sqlHead"] = "SELECT menu2";
$tdatamenu2[".sqlFrom"] = "FROM menu2";
$tdatamenu2[".sqlWhereExpr"] = "";
$tdatamenu2[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamenu2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamenu2[".arrGroupsPerPage"] = $arrGPP;

$tableKeysmenu2 = array();
$tableKeysmenu2[] = "menu2";
$tdatamenu2[".Keys"] = $tableKeysmenu2;

$tdatamenu2[".listFields"] = array();

$tdatamenu2[".viewFields"] = array();

$tdatamenu2[".addFields"] = array();

$tdatamenu2[".inlineAddFields"] = array();

$tdatamenu2[".editFields"] = array();

$tdatamenu2[".inlineEditFields"] = array();

$tdatamenu2[".exportFields"] = array();

$tdatamenu2[".printFields"] = array();

//	menu2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "menu2";
	$fdata["GoodName"] = "menu2";
	$fdata["ownerTable"] = "menu2";
	$fdata["Label"] = "Menu2"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "menu2"; 
		$fdata["FullName"] = "menu2";
	
		
		
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
	
		
		
	$tdatamenu2["menu2"] = $fdata;

	
$tables_data["menu2"]=&$tdatamenu2;
$field_labels["menu2"] = &$fieldLabelsmenu2;
$fieldToolTips["menu2"] = &$fieldToolTipsmenu2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["menu2"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["menu2"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_menu2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "menu2";
$proto0["m_strFrom"] = "FROM menu2";
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
	"m_strName" => "menu2",
	"m_strTable" => "menu2"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto7=array();
$proto7["m_link"] = "SQLL_MAIN";
			$proto8=array();
$proto8["m_strName"] = "menu2";
$proto8["m_columns"] = array();
$proto8["m_columns"][] = "menu2";
$obj = new SQLTable($proto8);

$proto7["m_table"] = $obj;
$proto7["m_alias"] = "";
$proto9=array();
$proto9["m_sql"] = "";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "";
$proto9["m_havingmode"] = "0";
$proto9["m_inBrackets"] = "0";
$proto9["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto9);

$proto7["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto7);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_menu2 = createSqlQuery_menu2();
	$tdatamenu2[".sqlquery"] = $queryData_menu2;
	
if(isset($tdatamenu2["field2"])){
	$tdatamenu2["field2"]["LookupTable"] = "carscars_view";
	$tdatamenu2["field2"]["LookupOrderBy"] = "name";
	$tdatamenu2["field2"]["LookupType"] = 4;
	$tdatamenu2["field2"]["LinkField"] = "email";
	$tdatamenu2["field2"]["DisplayField"] = "name";
	$tdatamenu2[".hasCustomViewField"] = true;
}

include_once(getabspath("include/menu2_events.php"));
$tableEvents["menu2"] = new eventclass_menu2;
$tdatamenu2[".hasEvents"] = true;

$cipherer = new RunnerCipherer("menu2");

?>