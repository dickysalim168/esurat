<?php
require_once(getabspath("classes/cipherer.php"));
$tdatajenis = array();
	$tdatajenis[".NumberOfChars"] = 80; 
	$tdatajenis[".ShortName"] = "jenis";
	$tdatajenis[".OwnerID"] = "";
	$tdatajenis[".OriginalTable"] = "jenis";

//	field labels
$fieldLabelsjenis = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsjenis["Malay"] = array();
	$fieldToolTipsjenis["Malay"] = array();
	$fieldLabelsjenis["Malay"]["jid"] = "Jid";
	$fieldToolTipsjenis["Malay"]["jid"] = "";
	$fieldLabelsjenis["Malay"]["jenis"] = "Jenis";
	$fieldToolTipsjenis["Malay"]["jenis"] = "";
	$fieldLabelsjenis["Malay"]["dariJenis"] = "Dari Jenis";
	$fieldToolTipsjenis["Malay"]["dariJenis"] = "";
	if (count($fieldToolTipsjenis["Malay"]))
		$tdatajenis[".isUseToolTips"] = true;
}
	
	
	$tdatajenis[".NCSearch"] = true;



$tdatajenis[".shortTableName"] = "jenis";
$tdatajenis[".nSecOptions"] = 0;
$tdatajenis[".recsPerRowList"] = 1;
$tdatajenis[".mainTableOwnerID"] = "";
$tdatajenis[".moveNext"] = 1;
$tdatajenis[".nType"] = 0;

$tdatajenis[".strOriginalTableName"] = "jenis";




$tdatajenis[".showAddInPopup"] = false;

$tdatajenis[".showEditInPopup"] = false;

$tdatajenis[".showViewInPopup"] = false;

$tdatajenis[".fieldsForRegister"] = array();

$tdatajenis[".listAjax"] = false;

	$tdatajenis[".audit"] = false;

	$tdatajenis[".locking"] = false;

$tdatajenis[".listIcons"] = true;
$tdatajenis[".edit"] = true;
$tdatajenis[".inlineEdit"] = true;
$tdatajenis[".inlineAdd"] = true;
$tdatajenis[".view"] = true;

$tdatajenis[".exportTo"] = true;

$tdatajenis[".printFriendly"] = true;

$tdatajenis[".delete"] = true;

$tdatajenis[".showSimpleSearchOptions"] = false;

$tdatajenis[".showSearchPanel"] = true;

if (isMobile())
	$tdatajenis[".isUseAjaxSuggest"] = false;
else 
	$tdatajenis[".isUseAjaxSuggest"] = true;

$tdatajenis[".rowHighlite"] = true;

// button handlers file names

$tdatajenis[".addPageEvents"] = false;

// use datepicker for search panel
$tdatajenis[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatajenis[".isUseTimeForSearch"] = false;




$tdatajenis[".allSearchFields"] = array();

$tdatajenis[".allSearchFields"][] = "jid";
$tdatajenis[".allSearchFields"][] = "jenis";

$tdatajenis[".googleLikeFields"][] = "jid";
$tdatajenis[".googleLikeFields"][] = "jenis";


$tdatajenis[".advSearchFields"][] = "jid";
$tdatajenis[".advSearchFields"][] = "jenis";

$tdatajenis[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatajenis[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajenis[".strOrderBy"] = $tstrOrderBy;

$tdatajenis[".orderindexes"] = array();

$tdatajenis[".sqlHead"] = "SELECT jid,   jenis";
$tdatajenis[".sqlFrom"] = "FROM jenis";
$tdatajenis[".sqlWhereExpr"] = "";
$tdatajenis[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajenis[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajenis[".arrGroupsPerPage"] = $arrGPP;

$tableKeysjenis = array();
$tableKeysjenis[] = "jid";
$tdatajenis[".Keys"] = $tableKeysjenis;

$tdatajenis[".listFields"] = array();
$tdatajenis[".listFields"][] = "jid";
$tdatajenis[".listFields"][] = "jenis";

$tdatajenis[".viewFields"] = array();
$tdatajenis[".viewFields"][] = "jid";
$tdatajenis[".viewFields"][] = "jenis";

$tdatajenis[".addFields"] = array();
$tdatajenis[".addFields"][] = "jenis";

$tdatajenis[".inlineAddFields"] = array();
$tdatajenis[".inlineAddFields"][] = "jenis";

$tdatajenis[".editFields"] = array();
$tdatajenis[".editFields"][] = "jenis";

$tdatajenis[".inlineEditFields"] = array();
$tdatajenis[".inlineEditFields"][] = "jenis";

$tdatajenis[".exportFields"] = array();
$tdatajenis[".exportFields"][] = "jid";
$tdatajenis[".exportFields"][] = "jenis";

$tdatajenis[".printFields"] = array();
$tdatajenis[".printFields"][] = "jid";
$tdatajenis[".printFields"][] = "jenis";

//	jid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "jid";
	$fdata["GoodName"] = "jid";
	$fdata["ownerTable"] = "jenis";
	$fdata["Label"] = "Jid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
		
		
	$tdatajenis["jid"] = $fdata;
//	jenis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "jenis";
	$fdata["GoodName"] = "jenis";
	$fdata["ownerTable"] = "jenis";
	$fdata["Label"] = "Jenis"; 
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
	
		$fdata["strField"] = "jenis"; 
		$fdata["FullName"] = "jenis";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatajenis["jenis"] = $fdata;

	
$tables_data["jenis"]=&$tdatajenis;
$field_labels["jenis"] = &$fieldLabelsjenis;
$fieldToolTips["jenis"] = &$fieldToolTipsjenis;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["jenis"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["jenis"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_jenis()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jid,   jenis";
$proto0["m_strFrom"] = "FROM jenis";
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
	"m_strName" => "jid",
	"m_strTable" => "jenis"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "jenis",
	"m_strTable" => "jenis"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "jenis";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "jid";
$proto10["m_columns"][] = "jenis";
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
$queryData_jenis = createSqlQuery_jenis();
		$tdatajenis[".sqlquery"] = $queryData_jenis;
	
if(isset($tdatajenis["field2"])){
	$tdatajenis["field2"]["LookupTable"] = "carscars_view";
	$tdatajenis["field2"]["LookupOrderBy"] = "name";
	$tdatajenis["field2"]["LookupType"] = 4;
	$tdatajenis["field2"]["LinkField"] = "email";
	$tdatajenis["field2"]["DisplayField"] = "name";
	$tdatajenis[".hasCustomViewField"] = true;
}

$tableEvents["jenis"] = new eventsBase;
$tdatajenis[".hasEvents"] = false;

$cipherer = new RunnerCipherer("jenis");

?>