<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasurat_jenis = array();
	$tdatasurat_jenis[".truncateText"] = true;
	$tdatasurat_jenis[".NumberOfChars"] = 80;
	$tdatasurat_jenis[".ShortName"] = "surat_jenis";
	$tdatasurat_jenis[".OwnerID"] = "";
	$tdatasurat_jenis[".OriginalTable"] = "surat_jenis";

//	field labels
$fieldLabelssurat_jenis = array();
$fieldToolTipssurat_jenis = array();
$pageTitlessurat_jenis = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelssurat_jenis["Malay"] = array();
	$fieldToolTipssurat_jenis["Malay"] = array();
	$pageTitlessurat_jenis["Malay"] = array();
	$fieldLabelssurat_jenis["Malay"]["jid"] = "Jid";
	$fieldToolTipssurat_jenis["Malay"]["jid"] = "";
	$fieldLabelssurat_jenis["Malay"]["jenis"] = "Jenis";
	$fieldToolTipssurat_jenis["Malay"]["jenis"] = "";
	if (count($fieldToolTipssurat_jenis["Malay"]))
		$tdatasurat_jenis[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssurat_jenis[""] = array();
	$fieldToolTipssurat_jenis[""] = array();
	$pageTitlessurat_jenis[""] = array();
	if (count($fieldToolTipssurat_jenis[""]))
		$tdatasurat_jenis[".isUseToolTips"] = true;
}


	$tdatasurat_jenis[".NCSearch"] = true;



$tdatasurat_jenis[".shortTableName"] = "surat_jenis";
$tdatasurat_jenis[".nSecOptions"] = 0;
$tdatasurat_jenis[".recsPerRowList"] = 1;
$tdatasurat_jenis[".recsPerRowPrint"] = 1;
$tdatasurat_jenis[".mainTableOwnerID"] = "";
$tdatasurat_jenis[".moveNext"] = 1;
$tdatasurat_jenis[".entityType"] = 0;

$tdatasurat_jenis[".strOriginalTableName"] = "surat_jenis";




$tdatasurat_jenis[".showAddInPopup"] = false;

$tdatasurat_jenis[".showEditInPopup"] = false;

$tdatasurat_jenis[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasurat_jenis[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasurat_jenis[".fieldsForRegister"] = array();

$tdatasurat_jenis[".listAjax"] = false;

	$tdatasurat_jenis[".audit"] = false;

	$tdatasurat_jenis[".locking"] = false;

$tdatasurat_jenis[".edit"] = true;
$tdatasurat_jenis[".afterEditAction"] = 1;
$tdatasurat_jenis[".closePopupAfterEdit"] = 1;
$tdatasurat_jenis[".afterEditActionDetTable"] = "";

$tdatasurat_jenis[".add"] = true;
$tdatasurat_jenis[".afterAddAction"] = 1;
$tdatasurat_jenis[".closePopupAfterAdd"] = 1;
$tdatasurat_jenis[".afterAddActionDetTable"] = "";

$tdatasurat_jenis[".list"] = true;

$tdatasurat_jenis[".inlineEdit"] = true;
$tdatasurat_jenis[".inlineAdd"] = true;
$tdatasurat_jenis[".view"] = true;

$tdatasurat_jenis[".import"] = true;

$tdatasurat_jenis[".exportTo"] = true;

$tdatasurat_jenis[".printFriendly"] = true;

$tdatasurat_jenis[".delete"] = true;

$tdatasurat_jenis[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasurat_jenis[".searchSaving"] = false;
//

$tdatasurat_jenis[".showSearchPanel"] = true;
		$tdatasurat_jenis[".flexibleSearch"] = true;

if (isMobile())
	$tdatasurat_jenis[".isUseAjaxSuggest"] = false;
else
	$tdatasurat_jenis[".isUseAjaxSuggest"] = true;

$tdatasurat_jenis[".rowHighlite"] = true;


																																																																									
$tdatasurat_jenis[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasurat_jenis[".isUseTimeForSearch"] = false;





$tdatasurat_jenis[".allSearchFields"] = array();
$tdatasurat_jenis[".filterFields"] = array();
$tdatasurat_jenis[".requiredSearchFields"] = array();

$tdatasurat_jenis[".allSearchFields"][] = "jid";
	$tdatasurat_jenis[".allSearchFields"][] = "jenis";
	

$tdatasurat_jenis[".googleLikeFields"] = array();
$tdatasurat_jenis[".googleLikeFields"][] = "jid";
$tdatasurat_jenis[".googleLikeFields"][] = "jenis";


$tdatasurat_jenis[".advSearchFields"] = array();
$tdatasurat_jenis[".advSearchFields"][] = "jid";
$tdatasurat_jenis[".advSearchFields"][] = "jenis";

$tdatasurat_jenis[".tableType"] = "list";

$tdatasurat_jenis[".printerPageOrientation"] = 0;
$tdatasurat_jenis[".nPrinterPageScale"] = 100;

$tdatasurat_jenis[".nPrinterSplitRecords"] = 40;

$tdatasurat_jenis[".nPrinterPDFSplitRecords"] = 40;



$tdatasurat_jenis[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasurat_jenis[".pageSize"] = 20;

$tdatasurat_jenis[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasurat_jenis[".strOrderBy"] = $tstrOrderBy;

$tdatasurat_jenis[".orderindexes"] = array();

$tdatasurat_jenis[".sqlHead"] = "SELECT jid,  	jenis";
$tdatasurat_jenis[".sqlFrom"] = "FROM surat_jenis";
$tdatasurat_jenis[".sqlWhereExpr"] = "";
$tdatasurat_jenis[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasurat_jenis[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasurat_jenis[".arrGroupsPerPage"] = $arrGPP;


$tableKeyssurat_jenis = array();
$tableKeyssurat_jenis[] = "jid";
$tdatasurat_jenis[".Keys"] = $tableKeyssurat_jenis;

$tdatasurat_jenis[".listFields"] = array();
$tdatasurat_jenis[".listFields"][] = "jid";
$tdatasurat_jenis[".listFields"][] = "jenis";

$tdatasurat_jenis[".hideMobileList"] = array();


$tdatasurat_jenis[".viewFields"] = array();
$tdatasurat_jenis[".viewFields"][] = "jid";
$tdatasurat_jenis[".viewFields"][] = "jenis";

$tdatasurat_jenis[".addFields"] = array();
$tdatasurat_jenis[".addFields"][] = "jenis";

$tdatasurat_jenis[".masterListFields"] = array();
$tdatasurat_jenis[".masterListFields"][] = "jid";
$tdatasurat_jenis[".masterListFields"][] = "jenis";

$tdatasurat_jenis[".inlineAddFields"] = array();
$tdatasurat_jenis[".inlineAddFields"][] = "jenis";

$tdatasurat_jenis[".editFields"] = array();
$tdatasurat_jenis[".editFields"][] = "jenis";

$tdatasurat_jenis[".inlineEditFields"] = array();
$tdatasurat_jenis[".inlineEditFields"][] = "jenis";

$tdatasurat_jenis[".exportFields"] = array();
$tdatasurat_jenis[".exportFields"][] = "jid";
$tdatasurat_jenis[".exportFields"][] = "jenis";

$tdatasurat_jenis[".importFields"] = array();
$tdatasurat_jenis[".importFields"][] = "jid";
$tdatasurat_jenis[".importFields"][] = "jenis";

$tdatasurat_jenis[".printFields"] = array();
$tdatasurat_jenis[".printFields"][] = "jid";
$tdatasurat_jenis[".printFields"][] = "jenis";

//	jid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "jid";
	$fdata["GoodName"] = "jid";
	$fdata["ownerTable"] = "surat_jenis";
	$fdata["Label"] = GetFieldLabel("surat_jenis","jid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jid";

		$fdata["isSQLExpression"] = true;
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




	$tdatasurat_jenis["jid"] = $fdata;
//	jenis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "jenis";
	$fdata["GoodName"] = "jenis";
	$fdata["ownerTable"] = "surat_jenis";
	$fdata["Label"] = GetFieldLabel("surat_jenis","jenis");
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

		$fdata["isSQLExpression"] = true;
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




	$tdatasurat_jenis["jenis"] = $fdata;


$tables_data["surat_jenis"]=&$tdatasurat_jenis;
$field_labels["surat_jenis"] = &$fieldLabelssurat_jenis;
$fieldToolTips["surat_jenis"] = &$fieldToolTipssurat_jenis;
$page_titles["surat_jenis"] = &$pageTitlessurat_jenis;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["surat_jenis"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["surat_jenis"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_surat_jenis()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jid,  	jenis";
$proto0["m_strFrom"] = "FROM surat_jenis";
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
	"m_strName" => "jid",
	"m_strTable" => "surat_jenis",
	"m_srcTableName" => "surat_jenis"
));

$proto5["m_sql"] = "jid";
$proto5["m_srcTableName"] = "surat_jenis";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "jenis",
	"m_strTable" => "surat_jenis",
	"m_srcTableName" => "surat_jenis"
));

$proto7["m_sql"] = "jenis";
$proto7["m_srcTableName"] = "surat_jenis";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "surat_jenis";
$proto10["m_srcTableName"] = "surat_jenis";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "jid";
$proto10["m_columns"][] = "jenis";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "surat_jenis";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "surat_jenis";
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
$proto0["m_srcTableName"]="surat_jenis";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_surat_jenis = createSqlQuery_surat_jenis();



		

$tdatasurat_jenis[".sqlquery"] = $queryData_surat_jenis;

$tableEvents["surat_jenis"] = new eventsBase;
$tdatasurat_jenis[".hasEvents"] = false;

?>