<?php
require_once(getabspath("classes/cipherer.php"));
$tdatajawatan = array();
	$tdatajawatan[".NumberOfChars"] = 80; 
	$tdatajawatan[".ShortName"] = "jawatan";
	$tdatajawatan[".OwnerID"] = "";
	$tdatajawatan[".OriginalTable"] = "jawatan";

//	field labels
$fieldLabelsjawatan = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsjawatan["Malay"] = array();
	$fieldToolTipsjawatan["Malay"] = array();
	$fieldLabelsjawatan["Malay"]["jaid"] = "Jaid";
	$fieldToolTipsjawatan["Malay"]["jaid"] = "";
	$fieldLabelsjawatan["Malay"]["jawatan"] = "Jawatan";
	$fieldToolTipsjawatan["Malay"]["jawatan"] = "";
	$fieldLabelsjawatan["Malay"]["Jawatan"] = "Jawatan";
	$fieldToolTipsjawatan["Malay"]["Jawatan"] = "";
	$fieldLabelsjawatan["Malay"]["dariJawatan"] = "Dari Jawatan";
	$fieldToolTipsjawatan["Malay"]["dariJawatan"] = "";
	$fieldLabelsjawatan["Malay"]["dariBahagian"] = "Dari Bahagian";
	$fieldToolTipsjawatan["Malay"]["dariBahagian"] = "";
	$fieldLabelsjawatan["Malay"]["iid"] = "Iid";
	$fieldToolTipsjawatan["Malay"]["iid"] = "";
	$fieldLabelsjawatan["Malay"]["individu"] = "Individu";
	$fieldToolTipsjawatan["Malay"]["individu"] = "";
	if (count($fieldToolTipsjawatan["Malay"]))
		$tdatajawatan[".isUseToolTips"] = true;
}
	
	
	$tdatajawatan[".NCSearch"] = true;



$tdatajawatan[".shortTableName"] = "jawatan";
$tdatajawatan[".nSecOptions"] = 0;
$tdatajawatan[".recsPerRowList"] = 1;
$tdatajawatan[".mainTableOwnerID"] = "";
$tdatajawatan[".moveNext"] = 1;
$tdatajawatan[".nType"] = 0;

$tdatajawatan[".strOriginalTableName"] = "jawatan";




$tdatajawatan[".showAddInPopup"] = false;

$tdatajawatan[".showEditInPopup"] = false;

$tdatajawatan[".showViewInPopup"] = false;

$tdatajawatan[".fieldsForRegister"] = array();
	
$tdatajawatan[".listAjax"] = false;

	$tdatajawatan[".audit"] = false;

	$tdatajawatan[".locking"] = false;

$tdatajawatan[".listIcons"] = true;
$tdatajawatan[".edit"] = true;
$tdatajawatan[".inlineEdit"] = true;
$tdatajawatan[".inlineAdd"] = true;
$tdatajawatan[".view"] = true;

$tdatajawatan[".exportTo"] = true;

$tdatajawatan[".printFriendly"] = true;

$tdatajawatan[".delete"] = true;

$tdatajawatan[".showSimpleSearchOptions"] = false;

$tdatajawatan[".showSearchPanel"] = true;

if (isMobile())
	$tdatajawatan[".isUseAjaxSuggest"] = false;
else 
	$tdatajawatan[".isUseAjaxSuggest"] = true;

$tdatajawatan[".rowHighlite"] = true;

// button handlers file names

$tdatajawatan[".addPageEvents"] = false;

// use datepicker for search panel
$tdatajawatan[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatajawatan[".isUseTimeForSearch"] = false;




$tdatajawatan[".allSearchFields"] = array();

$tdatajawatan[".allSearchFields"][] = "jaid";
$tdatajawatan[".allSearchFields"][] = "jawatan";

$tdatajawatan[".googleLikeFields"][] = "jaid";
$tdatajawatan[".googleLikeFields"][] = "jawatan";


$tdatajawatan[".advSearchFields"][] = "jaid";
$tdatajawatan[".advSearchFields"][] = "jawatan";

$tdatajawatan[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatajawatan[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajawatan[".strOrderBy"] = $tstrOrderBy;

$tdatajawatan[".orderindexes"] = array();

$tdatajawatan[".sqlHead"] = "SELECT jaid,   jawatan";
$tdatajawatan[".sqlFrom"] = "FROM jawatan";
$tdatajawatan[".sqlWhereExpr"] = "";
$tdatajawatan[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajawatan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajawatan[".arrGroupsPerPage"] = $arrGPP;

$tableKeysjawatan = array();
$tableKeysjawatan[] = "jaid";
$tdatajawatan[".Keys"] = $tableKeysjawatan;

$tdatajawatan[".listFields"] = array();
$tdatajawatan[".listFields"][] = "jaid";
$tdatajawatan[".listFields"][] = "jawatan";

$tdatajawatan[".viewFields"] = array();
$tdatajawatan[".viewFields"][] = "jaid";
$tdatajawatan[".viewFields"][] = "jawatan";

$tdatajawatan[".addFields"] = array();
$tdatajawatan[".addFields"][] = "jawatan";

$tdatajawatan[".inlineAddFields"] = array();
$tdatajawatan[".inlineAddFields"][] = "jawatan";

$tdatajawatan[".editFields"] = array();
$tdatajawatan[".editFields"][] = "jawatan";

$tdatajawatan[".inlineEditFields"] = array();
$tdatajawatan[".inlineEditFields"][] = "jawatan";

$tdatajawatan[".exportFields"] = array();
$tdatajawatan[".exportFields"][] = "jaid";
$tdatajawatan[".exportFields"][] = "jawatan";

$tdatajawatan[".printFields"] = array();
$tdatajawatan[".printFields"][] = "jaid";
$tdatajawatan[".printFields"][] = "jawatan";

//	jaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "jaid";
	$fdata["GoodName"] = "jaid";
	$fdata["ownerTable"] = "jawatan";
	$fdata["Label"] = "Jaid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jaid"; 
		$fdata["FullName"] = "jaid";
	
		
		
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
	
		
		
	$tdatajawatan["jaid"] = $fdata;
//	jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "jawatan";
	$fdata["GoodName"] = "jawatan";
	$fdata["ownerTable"] = "jawatan";
	$fdata["Label"] = "Jawatan"; 
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
	
		$fdata["strField"] = "jawatan"; 
		$fdata["FullName"] = "jawatan";
	
		
		
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatajawatan["jawatan"] = $fdata;

	
$tables_data["jawatan"]=&$tdatajawatan;
$field_labels["jawatan"] = &$fieldLabelsjawatan;
$fieldToolTips["jawatan"] = &$fieldToolTipsjawatan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["jawatan"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["jawatan"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_jawatan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jaid,   jawatan";
$proto0["m_strFrom"] = "FROM jawatan";
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
	"m_strName" => "jaid",
	"m_strTable" => "jawatan"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "jawatan",
	"m_strTable" => "jawatan"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "jawatan";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "jaid";
$proto10["m_columns"][] = "jawatan";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_alias"] = "";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = "0";
$proto11["m_inBrackets"] = "0";
$proto11["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_jawatan = createSqlQuery_jawatan();
		$tdatajawatan[".sqlquery"] = $queryData_jawatan;
	
if(isset($tdatajawatan["field2"])){
	$tdatajawatan["field2"]["LookupTable"] = "carscars_view";
	$tdatajawatan["field2"]["LookupOrderBy"] = "name";
	$tdatajawatan["field2"]["LookupType"] = 4;
	$tdatajawatan["field2"]["LinkField"] = "email";
	$tdatajawatan["field2"]["DisplayField"] = "name";
	$tdatajawatan[".hasCustomViewField"] = true;
}

$tableEvents["jawatan"] = new eventsBase;
$tdatajawatan[".hasEvents"] = false;

$cipherer = new RunnerCipherer("jawatan");

?>