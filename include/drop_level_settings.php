<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadrop_level = array();
	$tdatadrop_level[".truncateText"] = true;
	$tdatadrop_level[".NumberOfChars"] = 80;
	$tdatadrop_level[".ShortName"] = "drop_level";
	$tdatadrop_level[".OwnerID"] = "";
	$tdatadrop_level[".OriginalTable"] = "drop_level";

//	field labels
$fieldLabelsdrop_level = array();
$fieldToolTipsdrop_level = array();
$pageTitlesdrop_level = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsdrop_level["Malay"] = array();
	$fieldToolTipsdrop_level["Malay"] = array();
	$pageTitlesdrop_level["Malay"] = array();
	$fieldLabelsdrop_level["Malay"]["lid"] = "Lid";
	$fieldToolTipsdrop_level["Malay"]["lid"] = "";
	$fieldLabelsdrop_level["Malay"]["level"] = "Level";
	$fieldToolTipsdrop_level["Malay"]["level"] = "";
	if (count($fieldToolTipsdrop_level["Malay"]))
		$tdatadrop_level[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdrop_level[""] = array();
	$fieldToolTipsdrop_level[""] = array();
	$pageTitlesdrop_level[""] = array();
	if (count($fieldToolTipsdrop_level[""]))
		$tdatadrop_level[".isUseToolTips"] = true;
}


	$tdatadrop_level[".NCSearch"] = true;



$tdatadrop_level[".shortTableName"] = "drop_level";
$tdatadrop_level[".nSecOptions"] = 0;
$tdatadrop_level[".recsPerRowList"] = 1;
$tdatadrop_level[".recsPerRowPrint"] = 1;
$tdatadrop_level[".mainTableOwnerID"] = "";
$tdatadrop_level[".moveNext"] = 1;
$tdatadrop_level[".entityType"] = 0;

$tdatadrop_level[".strOriginalTableName"] = "drop_level";




$tdatadrop_level[".showAddInPopup"] = false;

$tdatadrop_level[".showEditInPopup"] = false;

$tdatadrop_level[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadrop_level[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadrop_level[".fieldsForRegister"] = array();

$tdatadrop_level[".listAjax"] = false;

	$tdatadrop_level[".audit"] = false;

	$tdatadrop_level[".locking"] = false;

$tdatadrop_level[".edit"] = true;
$tdatadrop_level[".afterEditAction"] = 1;
$tdatadrop_level[".closePopupAfterEdit"] = 1;
$tdatadrop_level[".afterEditActionDetTable"] = "";

$tdatadrop_level[".add"] = true;
$tdatadrop_level[".afterAddAction"] = 1;
$tdatadrop_level[".closePopupAfterAdd"] = 1;
$tdatadrop_level[".afterAddActionDetTable"] = "";

$tdatadrop_level[".list"] = true;

$tdatadrop_level[".inlineEdit"] = true;
$tdatadrop_level[".inlineAdd"] = true;
$tdatadrop_level[".view"] = true;

$tdatadrop_level[".import"] = true;

$tdatadrop_level[".exportTo"] = true;

$tdatadrop_level[".printFriendly"] = true;

$tdatadrop_level[".delete"] = true;

$tdatadrop_level[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadrop_level[".searchSaving"] = false;
//

$tdatadrop_level[".showSearchPanel"] = true;
		$tdatadrop_level[".flexibleSearch"] = true;

if (isMobile())
	$tdatadrop_level[".isUseAjaxSuggest"] = false;
else
	$tdatadrop_level[".isUseAjaxSuggest"] = true;

$tdatadrop_level[".rowHighlite"] = true;


																																																																									
$tdatadrop_level[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadrop_level[".isUseTimeForSearch"] = false;





$tdatadrop_level[".allSearchFields"] = array();
$tdatadrop_level[".filterFields"] = array();
$tdatadrop_level[".requiredSearchFields"] = array();

$tdatadrop_level[".allSearchFields"][] = "lid";
	$tdatadrop_level[".allSearchFields"][] = "level";
	

$tdatadrop_level[".googleLikeFields"] = array();
$tdatadrop_level[".googleLikeFields"][] = "lid";
$tdatadrop_level[".googleLikeFields"][] = "level";


$tdatadrop_level[".advSearchFields"] = array();
$tdatadrop_level[".advSearchFields"][] = "lid";
$tdatadrop_level[".advSearchFields"][] = "level";

$tdatadrop_level[".tableType"] = "list";

$tdatadrop_level[".printerPageOrientation"] = 0;
$tdatadrop_level[".nPrinterPageScale"] = 100;

$tdatadrop_level[".nPrinterSplitRecords"] = 40;

$tdatadrop_level[".nPrinterPDFSplitRecords"] = 40;



$tdatadrop_level[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatadrop_level[".pageSize"] = 20;

$tdatadrop_level[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadrop_level[".strOrderBy"] = $tstrOrderBy;

$tdatadrop_level[".orderindexes"] = array();

$tdatadrop_level[".sqlHead"] = "SELECT lid,  	`level`";
$tdatadrop_level[".sqlFrom"] = "FROM drop_level";
$tdatadrop_level[".sqlWhereExpr"] = "";
$tdatadrop_level[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadrop_level[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadrop_level[".arrGroupsPerPage"] = $arrGPP;


$tableKeysdrop_level = array();
$tableKeysdrop_level[] = "lid";
$tdatadrop_level[".Keys"] = $tableKeysdrop_level;

$tdatadrop_level[".listFields"] = array();
$tdatadrop_level[".listFields"][] = "lid";
$tdatadrop_level[".listFields"][] = "level";

$tdatadrop_level[".hideMobileList"] = array();


$tdatadrop_level[".viewFields"] = array();
$tdatadrop_level[".viewFields"][] = "lid";
$tdatadrop_level[".viewFields"][] = "level";

$tdatadrop_level[".addFields"] = array();
$tdatadrop_level[".addFields"][] = "level";

$tdatadrop_level[".masterListFields"] = array();
$tdatadrop_level[".masterListFields"][] = "lid";
$tdatadrop_level[".masterListFields"][] = "level";

$tdatadrop_level[".inlineAddFields"] = array();
$tdatadrop_level[".inlineAddFields"][] = "level";

$tdatadrop_level[".editFields"] = array();
$tdatadrop_level[".editFields"][] = "level";

$tdatadrop_level[".inlineEditFields"] = array();
$tdatadrop_level[".inlineEditFields"][] = "level";

$tdatadrop_level[".exportFields"] = array();
$tdatadrop_level[".exportFields"][] = "lid";
$tdatadrop_level[".exportFields"][] = "level";

$tdatadrop_level[".importFields"] = array();
$tdatadrop_level[".importFields"][] = "lid";
$tdatadrop_level[".importFields"][] = "level";

$tdatadrop_level[".printFields"] = array();
$tdatadrop_level[".printFields"][] = "lid";
$tdatadrop_level[".printFields"][] = "level";

//	lid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "lid";
	$fdata["GoodName"] = "lid";
	$fdata["ownerTable"] = "drop_level";
	$fdata["Label"] = GetFieldLabel("drop_level","lid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lid";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

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
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatadrop_level["lid"] = $fdata;
//	level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "level";
	$fdata["GoodName"] = "level";
	$fdata["ownerTable"] = "drop_level";
	$fdata["Label"] = GetFieldLabel("drop_level","level");
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

		$fdata["strField"] = "level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`level`";

	
	
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

		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatadrop_level["level"] = $fdata;


$tables_data["drop_level"]=&$tdatadrop_level;
$field_labels["drop_level"] = &$fieldLabelsdrop_level;
$fieldToolTips["drop_level"] = &$fieldToolTipsdrop_level;
$page_titles["drop_level"] = &$pageTitlesdrop_level;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["drop_level"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["drop_level"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_drop_level()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "lid,  	`level`";
$proto0["m_strFrom"] = "FROM drop_level";
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
	"m_strName" => "lid",
	"m_strTable" => "drop_level",
	"m_srcTableName" => "drop_level"
));

$proto5["m_sql"] = "lid";
$proto5["m_srcTableName"] = "drop_level";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "drop_level",
	"m_srcTableName" => "drop_level"
));

$proto7["m_sql"] = "`level`";
$proto7["m_srcTableName"] = "drop_level";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "drop_level";
$proto10["m_srcTableName"] = "drop_level";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "lid";
$proto10["m_columns"][] = "level";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "drop_level";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "drop_level";
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
$proto0["m_srcTableName"]="drop_level";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_drop_level = createSqlQuery_drop_level();



		

$tdatadrop_level[".sqlquery"] = $queryData_drop_level;

$tableEvents["drop_level"] = new eventsBase;
$tdatadrop_level[".hasEvents"] = false;

?>