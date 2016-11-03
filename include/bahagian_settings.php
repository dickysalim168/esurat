<?php
require_once(getabspath("classes/cipherer.php"));
$tdatabahagian = array();
	$tdatabahagian[".NumberOfChars"] = 80; 
	$tdatabahagian[".ShortName"] = "bahagian";
	$tdatabahagian[".OwnerID"] = "";
	$tdatabahagian[".OriginalTable"] = "bahagian";

//	field labels
$fieldLabelsbahagian = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsbahagian["Malay"] = array();
	$fieldToolTipsbahagian["Malay"] = array();
	$fieldLabelsbahagian["Malay"]["baid"] = "Baid";
	$fieldToolTipsbahagian["Malay"]["baid"] = "";
	$fieldLabelsbahagian["Malay"]["nama"] = "Nama";
	$fieldToolTipsbahagian["Malay"]["nama"] = "";
	$fieldLabelsbahagian["Malay"]["penerangan"] = "Penerangan";
	$fieldToolTipsbahagian["Malay"]["penerangan"] = "";
	$fieldLabelsbahagian["Malay"]["daripada_bahagian"] = "Daripada Bahagian";
	$fieldToolTipsbahagian["Malay"]["daripada_bahagian"] = "";
	$fieldLabelsbahagian["Malay"]["bahagian"] = "Bahagian";
	$fieldToolTipsbahagian["Malay"]["bahagian"] = "";
	if (count($fieldToolTipsbahagian["Malay"]))
		$tdatabahagian[".isUseToolTips"] = true;
}
	
	
	$tdatabahagian[".NCSearch"] = true;



$tdatabahagian[".shortTableName"] = "bahagian";
$tdatabahagian[".nSecOptions"] = 0;
$tdatabahagian[".recsPerRowList"] = 1;
$tdatabahagian[".mainTableOwnerID"] = "";
$tdatabahagian[".moveNext"] = 1;
$tdatabahagian[".nType"] = 0;

$tdatabahagian[".strOriginalTableName"] = "bahagian";




$tdatabahagian[".showAddInPopup"] = false;

$tdatabahagian[".showEditInPopup"] = false;

$tdatabahagian[".showViewInPopup"] = false;

$tdatabahagian[".fieldsForRegister"] = array();
	
$tdatabahagian[".listAjax"] = false;

	$tdatabahagian[".audit"] = false;

	$tdatabahagian[".locking"] = false;

$tdatabahagian[".listIcons"] = true;
$tdatabahagian[".edit"] = true;
$tdatabahagian[".view"] = true;



$tdatabahagian[".delete"] = true;

$tdatabahagian[".showSimpleSearchOptions"] = false;

$tdatabahagian[".showSearchPanel"] = true;

if (isMobile())
	$tdatabahagian[".isUseAjaxSuggest"] = false;
else 
	$tdatabahagian[".isUseAjaxSuggest"] = true;

$tdatabahagian[".rowHighlite"] = true;

// button handlers file names

$tdatabahagian[".addPageEvents"] = false;

// use datepicker for search panel
$tdatabahagian[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatabahagian[".isUseTimeForSearch"] = false;




$tdatabahagian[".allSearchFields"] = array();

$tdatabahagian[".allSearchFields"][] = "nama";
$tdatabahagian[".allSearchFields"][] = "penerangan";

$tdatabahagian[".googleLikeFields"][] = "baid";
$tdatabahagian[".googleLikeFields"][] = "nama";
$tdatabahagian[".googleLikeFields"][] = "penerangan";


$tdatabahagian[".advSearchFields"][] = "nama";
$tdatabahagian[".advSearchFields"][] = "penerangan";

$tdatabahagian[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatabahagian[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabahagian[".strOrderBy"] = $tstrOrderBy;

$tdatabahagian[".orderindexes"] = array();

$tdatabahagian[".sqlHead"] = "SELECT baid,   nama,   penerangan";
$tdatabahagian[".sqlFrom"] = "FROM bahagian";
$tdatabahagian[".sqlWhereExpr"] = "";
$tdatabahagian[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabahagian[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabahagian[".arrGroupsPerPage"] = $arrGPP;

$tableKeysbahagian = array();
$tableKeysbahagian[] = "baid";
$tdatabahagian[".Keys"] = $tableKeysbahagian;

$tdatabahagian[".listFields"] = array();
$tdatabahagian[".listFields"][] = "nama";
$tdatabahagian[".listFields"][] = "penerangan";

$tdatabahagian[".viewFields"] = array();
$tdatabahagian[".viewFields"][] = "nama";
$tdatabahagian[".viewFields"][] = "penerangan";

$tdatabahagian[".addFields"] = array();
$tdatabahagian[".addFields"][] = "nama";
$tdatabahagian[".addFields"][] = "penerangan";

$tdatabahagian[".inlineAddFields"] = array();
$tdatabahagian[".inlineAddFields"][] = "nama";
$tdatabahagian[".inlineAddFields"][] = "penerangan";

$tdatabahagian[".editFields"] = array();
$tdatabahagian[".editFields"][] = "nama";
$tdatabahagian[".editFields"][] = "penerangan";

$tdatabahagian[".inlineEditFields"] = array();
$tdatabahagian[".inlineEditFields"][] = "nama";
$tdatabahagian[".inlineEditFields"][] = "penerangan";

$tdatabahagian[".exportFields"] = array();
$tdatabahagian[".exportFields"][] = "nama";
$tdatabahagian[".exportFields"][] = "penerangan";

$tdatabahagian[".printFields"] = array();
$tdatabahagian[".printFields"][] = "nama";
$tdatabahagian[".printFields"][] = "penerangan";

//	baid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "baid";
	$fdata["GoodName"] = "baid";
	$fdata["ownerTable"] = "bahagian";
	$fdata["Label"] = "Baid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "baid"; 
		$fdata["FullName"] = "baid";
	
		
		
				
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
	
		
		
	$tdatabahagian["baid"] = $fdata;
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "bahagian";
	$fdata["Label"] = "Nama"; 
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabahagian["nama"] = $fdata;
//	penerangan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "penerangan";
	$fdata["GoodName"] = "penerangan";
	$fdata["ownerTable"] = "bahagian";
	$fdata["Label"] = "Penerangan"; 
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabahagian["penerangan"] = $fdata;

	
$tables_data["bahagian"]=&$tdatabahagian;
$field_labels["bahagian"] = &$fieldLabelsbahagian;
$fieldToolTips["bahagian"] = &$fieldToolTipsbahagian;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["bahagian"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["bahagian"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_bahagian()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "baid,   nama,   penerangan";
$proto0["m_strFrom"] = "FROM bahagian";
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
	"m_strTable" => "bahagian"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "bahagian"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "penerangan",
	"m_strTable" => "bahagian"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "bahagian";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "baid";
$proto12["m_columns"][] = "nama";
$proto12["m_columns"][] = "penerangan";
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
$queryData_bahagian = createSqlQuery_bahagian();
			$tdatabahagian[".sqlquery"] = $queryData_bahagian;
	
if(isset($tdatabahagian["field2"])){
	$tdatabahagian["field2"]["LookupTable"] = "carscars_view";
	$tdatabahagian["field2"]["LookupOrderBy"] = "name";
	$tdatabahagian["field2"]["LookupType"] = 4;
	$tdatabahagian["field2"]["LinkField"] = "email";
	$tdatabahagian["field2"]["DisplayField"] = "name";
	$tdatabahagian[".hasCustomViewField"] = true;
}

$tableEvents["bahagian"] = new eventsBase;
$tdatabahagian[".hasEvents"] = false;

$cipherer = new RunnerCipherer("bahagian");

?>