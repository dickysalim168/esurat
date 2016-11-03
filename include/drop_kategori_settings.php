<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadrop_kategori = array();
	$tdatadrop_kategori[".truncateText"] = true;
	$tdatadrop_kategori[".NumberOfChars"] = 80;
	$tdatadrop_kategori[".ShortName"] = "drop_kategori";
	$tdatadrop_kategori[".OwnerID"] = "";
	$tdatadrop_kategori[".OriginalTable"] = "drop_kategori";

//	field labels
$fieldLabelsdrop_kategori = array();
$fieldToolTipsdrop_kategori = array();
$pageTitlesdrop_kategori = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsdrop_kategori["Malay"] = array();
	$fieldToolTipsdrop_kategori["Malay"] = array();
	$pageTitlesdrop_kategori["Malay"] = array();
	$fieldLabelsdrop_kategori["Malay"]["dkid"] = "Dkid";
	$fieldToolTipsdrop_kategori["Malay"]["dkid"] = "";
	$fieldLabelsdrop_kategori["Malay"]["Kategori"] = "Kategori";
	$fieldToolTipsdrop_kategori["Malay"]["Kategori"] = "";
	if (count($fieldToolTipsdrop_kategori["Malay"]))
		$tdatadrop_kategori[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdrop_kategori[""] = array();
	$fieldToolTipsdrop_kategori[""] = array();
	$pageTitlesdrop_kategori[""] = array();
	$fieldLabelsdrop_kategori[""]["dkid"] = "Dkid";
	$fieldToolTipsdrop_kategori[""]["dkid"] = "";
	$fieldLabelsdrop_kategori[""]["Kategori"] = "Kategori";
	$fieldToolTipsdrop_kategori[""]["Kategori"] = "";
	if (count($fieldToolTipsdrop_kategori[""]))
		$tdatadrop_kategori[".isUseToolTips"] = true;
}


	$tdatadrop_kategori[".NCSearch"] = true;



$tdatadrop_kategori[".shortTableName"] = "drop_kategori";
$tdatadrop_kategori[".nSecOptions"] = 0;
$tdatadrop_kategori[".recsPerRowList"] = 1;
$tdatadrop_kategori[".recsPerRowPrint"] = 1;
$tdatadrop_kategori[".mainTableOwnerID"] = "";
$tdatadrop_kategori[".moveNext"] = 1;
$tdatadrop_kategori[".entityType"] = 0;

$tdatadrop_kategori[".strOriginalTableName"] = "drop_kategori";




$tdatadrop_kategori[".showAddInPopup"] = false;

$tdatadrop_kategori[".showEditInPopup"] = false;

$tdatadrop_kategori[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadrop_kategori[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadrop_kategori[".fieldsForRegister"] = array();

$tdatadrop_kategori[".listAjax"] = false;

	$tdatadrop_kategori[".audit"] = false;

	$tdatadrop_kategori[".locking"] = false;

$tdatadrop_kategori[".edit"] = true;
$tdatadrop_kategori[".afterEditAction"] = 1;
$tdatadrop_kategori[".closePopupAfterEdit"] = 1;
$tdatadrop_kategori[".afterEditActionDetTable"] = "";

$tdatadrop_kategori[".add"] = true;
$tdatadrop_kategori[".afterAddAction"] = 1;
$tdatadrop_kategori[".closePopupAfterAdd"] = 1;
$tdatadrop_kategori[".afterAddActionDetTable"] = "";

$tdatadrop_kategori[".list"] = true;

$tdatadrop_kategori[".inlineEdit"] = true;
$tdatadrop_kategori[".inlineAdd"] = true;
$tdatadrop_kategori[".view"] = true;

$tdatadrop_kategori[".import"] = true;

$tdatadrop_kategori[".exportTo"] = true;

$tdatadrop_kategori[".printFriendly"] = true;

$tdatadrop_kategori[".delete"] = true;

$tdatadrop_kategori[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadrop_kategori[".searchSaving"] = false;
//

$tdatadrop_kategori[".showSearchPanel"] = true;
		$tdatadrop_kategori[".flexibleSearch"] = true;

if (isMobile())
	$tdatadrop_kategori[".isUseAjaxSuggest"] = false;
else
	$tdatadrop_kategori[".isUseAjaxSuggest"] = true;

$tdatadrop_kategori[".rowHighlite"] = true;


																																																																									
$tdatadrop_kategori[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadrop_kategori[".isUseTimeForSearch"] = false;





$tdatadrop_kategori[".allSearchFields"] = array();
$tdatadrop_kategori[".filterFields"] = array();
$tdatadrop_kategori[".requiredSearchFields"] = array();

$tdatadrop_kategori[".allSearchFields"][] = "dkid";
	$tdatadrop_kategori[".allSearchFields"][] = "Kategori";
	

$tdatadrop_kategori[".googleLikeFields"] = array();
$tdatadrop_kategori[".googleLikeFields"][] = "dkid";
$tdatadrop_kategori[".googleLikeFields"][] = "Kategori";


$tdatadrop_kategori[".advSearchFields"] = array();
$tdatadrop_kategori[".advSearchFields"][] = "dkid";
$tdatadrop_kategori[".advSearchFields"][] = "Kategori";

$tdatadrop_kategori[".tableType"] = "list";

$tdatadrop_kategori[".printerPageOrientation"] = 0;
$tdatadrop_kategori[".nPrinterPageScale"] = 100;

$tdatadrop_kategori[".nPrinterSplitRecords"] = 40;

$tdatadrop_kategori[".nPrinterPDFSplitRecords"] = 40;



$tdatadrop_kategori[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatadrop_kategori[".pageSize"] = 20;

$tdatadrop_kategori[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadrop_kategori[".strOrderBy"] = $tstrOrderBy;

$tdatadrop_kategori[".orderindexes"] = array();

$tdatadrop_kategori[".sqlHead"] = "SELECT dkid,  	Kategori";
$tdatadrop_kategori[".sqlFrom"] = "FROM drop_kategori";
$tdatadrop_kategori[".sqlWhereExpr"] = "";
$tdatadrop_kategori[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadrop_kategori[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadrop_kategori[".arrGroupsPerPage"] = $arrGPP;

$tdatadrop_kategori[".highlightSearchResults"] = true;

$tableKeysdrop_kategori = array();
$tableKeysdrop_kategori[] = "dkid";
$tdatadrop_kategori[".Keys"] = $tableKeysdrop_kategori;

$tdatadrop_kategori[".listFields"] = array();
$tdatadrop_kategori[".listFields"][] = "dkid";
$tdatadrop_kategori[".listFields"][] = "Kategori";

$tdatadrop_kategori[".hideMobileList"] = array();


$tdatadrop_kategori[".viewFields"] = array();
$tdatadrop_kategori[".viewFields"][] = "dkid";
$tdatadrop_kategori[".viewFields"][] = "Kategori";

$tdatadrop_kategori[".addFields"] = array();
$tdatadrop_kategori[".addFields"][] = "Kategori";

$tdatadrop_kategori[".masterListFields"] = array();
$tdatadrop_kategori[".masterListFields"][] = "dkid";
$tdatadrop_kategori[".masterListFields"][] = "Kategori";

$tdatadrop_kategori[".inlineAddFields"] = array();
$tdatadrop_kategori[".inlineAddFields"][] = "Kategori";

$tdatadrop_kategori[".editFields"] = array();
$tdatadrop_kategori[".editFields"][] = "Kategori";

$tdatadrop_kategori[".inlineEditFields"] = array();
$tdatadrop_kategori[".inlineEditFields"][] = "Kategori";

$tdatadrop_kategori[".exportFields"] = array();
$tdatadrop_kategori[".exportFields"][] = "dkid";
$tdatadrop_kategori[".exportFields"][] = "Kategori";

$tdatadrop_kategori[".importFields"] = array();
$tdatadrop_kategori[".importFields"][] = "dkid";
$tdatadrop_kategori[".importFields"][] = "Kategori";

$tdatadrop_kategori[".printFields"] = array();
$tdatadrop_kategori[".printFields"][] = "dkid";
$tdatadrop_kategori[".printFields"][] = "Kategori";

//	dkid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dkid";
	$fdata["GoodName"] = "dkid";
	$fdata["ownerTable"] = "drop_kategori";
	$fdata["Label"] = GetFieldLabel("drop_kategori","dkid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dkid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dkid";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatadrop_kategori["dkid"] = $fdata;
//	Kategori
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Kategori";
	$fdata["GoodName"] = "Kategori";
	$fdata["ownerTable"] = "drop_kategori";
	$fdata["Label"] = GetFieldLabel("drop_kategori","Kategori");
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

		$fdata["strField"] = "Kategori";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Kategori";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatadrop_kategori["Kategori"] = $fdata;


$tables_data["drop_kategori"]=&$tdatadrop_kategori;
$field_labels["drop_kategori"] = &$fieldLabelsdrop_kategori;
$fieldToolTips["drop_kategori"] = &$fieldToolTipsdrop_kategori;
$page_titles["drop_kategori"] = &$pageTitlesdrop_kategori;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["drop_kategori"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["drop_kategori"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_drop_kategori()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dkid,  	Kategori";
$proto0["m_strFrom"] = "FROM drop_kategori";
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
	"m_strName" => "dkid",
	"m_strTable" => "drop_kategori",
	"m_srcTableName" => "drop_kategori"
));

$proto5["m_sql"] = "dkid";
$proto5["m_srcTableName"] = "drop_kategori";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Kategori",
	"m_strTable" => "drop_kategori",
	"m_srcTableName" => "drop_kategori"
));

$proto7["m_sql"] = "Kategori";
$proto7["m_srcTableName"] = "drop_kategori";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "drop_kategori";
$proto10["m_srcTableName"] = "drop_kategori";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "dkid";
$proto10["m_columns"][] = "Kategori";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "drop_kategori";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "drop_kategori";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="drop_kategori";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_drop_kategori = createSqlQuery_drop_kategori();



		

$tdatadrop_kategori[".sqlquery"] = $queryData_drop_kategori;

$tableEvents["drop_kategori"] = new eventsBase;
$tdatadrop_kategori[".hasEvents"] = false;

?>