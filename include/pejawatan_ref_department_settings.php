<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapejawatan_ref_department = array();
	$tdatapejawatan_ref_department[".truncateText"] = true;
	$tdatapejawatan_ref_department[".NumberOfChars"] = 80;
	$tdatapejawatan_ref_department[".ShortName"] = "pejawatan_ref_department";
	$tdatapejawatan_ref_department[".OwnerID"] = "";
	$tdatapejawatan_ref_department[".OriginalTable"] = "pejawatan_ref_department";

//	field labels
$fieldLabelspejawatan_ref_department = array();
$fieldToolTipspejawatan_ref_department = array();
$pageTitlespejawatan_ref_department = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelspejawatan_ref_department["Malay"] = array();
	$fieldToolTipspejawatan_ref_department["Malay"] = array();
	$pageTitlespejawatan_ref_department["Malay"] = array();
	$fieldLabelspejawatan_ref_department["Malay"]["id"] = "Id";
	$fieldToolTipspejawatan_ref_department["Malay"]["id"] = "";
	$fieldLabelspejawatan_ref_department["Malay"]["name"] = "Name";
	$fieldToolTipspejawatan_ref_department["Malay"]["name"] = "";
	$fieldLabelspejawatan_ref_department["Malay"]["description"] = "Description";
	$fieldToolTipspejawatan_ref_department["Malay"]["description"] = "";
	if (count($fieldToolTipspejawatan_ref_department["Malay"]))
		$tdatapejawatan_ref_department[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspejawatan_ref_department[""] = array();
	$fieldToolTipspejawatan_ref_department[""] = array();
	$pageTitlespejawatan_ref_department[""] = array();
	$fieldLabelspejawatan_ref_department[""]["id"] = "Id";
	$fieldToolTipspejawatan_ref_department[""]["id"] = "";
	$fieldLabelspejawatan_ref_department[""]["name"] = "Name";
	$fieldToolTipspejawatan_ref_department[""]["name"] = "";
	$fieldLabelspejawatan_ref_department[""]["description"] = "Description";
	$fieldToolTipspejawatan_ref_department[""]["description"] = "";
	if (count($fieldToolTipspejawatan_ref_department[""]))
		$tdatapejawatan_ref_department[".isUseToolTips"] = true;
}


	$tdatapejawatan_ref_department[".NCSearch"] = true;



$tdatapejawatan_ref_department[".shortTableName"] = "pejawatan_ref_department";
$tdatapejawatan_ref_department[".nSecOptions"] = 0;
$tdatapejawatan_ref_department[".recsPerRowList"] = 1;
$tdatapejawatan_ref_department[".recsPerRowPrint"] = 1;
$tdatapejawatan_ref_department[".mainTableOwnerID"] = "";
$tdatapejawatan_ref_department[".moveNext"] = 1;
$tdatapejawatan_ref_department[".entityType"] = 0;

$tdatapejawatan_ref_department[".strOriginalTableName"] = "pejawatan_ref_department";




$tdatapejawatan_ref_department[".showAddInPopup"] = false;

$tdatapejawatan_ref_department[".showEditInPopup"] = false;

$tdatapejawatan_ref_department[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapejawatan_ref_department[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapejawatan_ref_department[".fieldsForRegister"] = array();

$tdatapejawatan_ref_department[".listAjax"] = false;

	$tdatapejawatan_ref_department[".audit"] = false;

	$tdatapejawatan_ref_department[".locking"] = false;


$tdatapejawatan_ref_department[".add"] = true;
$tdatapejawatan_ref_department[".afterAddAction"] = 1;
$tdatapejawatan_ref_department[".closePopupAfterAdd"] = 1;
$tdatapejawatan_ref_department[".afterAddActionDetTable"] = "";







$tdatapejawatan_ref_department[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapejawatan_ref_department[".searchSaving"] = false;
//

$tdatapejawatan_ref_department[".showSearchPanel"] = true;
		$tdatapejawatan_ref_department[".flexibleSearch"] = true;

if (isMobile())
	$tdatapejawatan_ref_department[".isUseAjaxSuggest"] = false;
else
	$tdatapejawatan_ref_department[".isUseAjaxSuggest"] = true;

$tdatapejawatan_ref_department[".rowHighlite"] = true;


																																																																									
$tdatapejawatan_ref_department[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapejawatan_ref_department[".isUseTimeForSearch"] = false;





$tdatapejawatan_ref_department[".allSearchFields"] = array();
$tdatapejawatan_ref_department[".filterFields"] = array();
$tdatapejawatan_ref_department[".requiredSearchFields"] = array();



$tdatapejawatan_ref_department[".googleLikeFields"] = array();
$tdatapejawatan_ref_department[".googleLikeFields"][] = "id";
$tdatapejawatan_ref_department[".googleLikeFields"][] = "name";
$tdatapejawatan_ref_department[".googleLikeFields"][] = "description";


$tdatapejawatan_ref_department[".advSearchFields"] = array();
$tdatapejawatan_ref_department[".advSearchFields"][] = "id";
$tdatapejawatan_ref_department[".advSearchFields"][] = "name";
$tdatapejawatan_ref_department[".advSearchFields"][] = "description";

$tdatapejawatan_ref_department[".tableType"] = "list";

$tdatapejawatan_ref_department[".printerPageOrientation"] = 0;
$tdatapejawatan_ref_department[".nPrinterPageScale"] = 100;

$tdatapejawatan_ref_department[".nPrinterSplitRecords"] = 40;

$tdatapejawatan_ref_department[".nPrinterPDFSplitRecords"] = 40;



$tdatapejawatan_ref_department[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatapejawatan_ref_department[".pageSize"] = 20;

$tdatapejawatan_ref_department[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapejawatan_ref_department[".strOrderBy"] = $tstrOrderBy;

$tdatapejawatan_ref_department[".orderindexes"] = array();

$tdatapejawatan_ref_department[".sqlHead"] = "SELECT id,  	name,  	description";
$tdatapejawatan_ref_department[".sqlFrom"] = "FROM pejawatan_ref_department";
$tdatapejawatan_ref_department[".sqlWhereExpr"] = "";
$tdatapejawatan_ref_department[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapejawatan_ref_department[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapejawatan_ref_department[".arrGroupsPerPage"] = $arrGPP;

$tdatapejawatan_ref_department[".highlightSearchResults"] = true;

$tableKeyspejawatan_ref_department = array();
$tableKeyspejawatan_ref_department[] = "id";
$tdatapejawatan_ref_department[".Keys"] = $tableKeyspejawatan_ref_department;

$tdatapejawatan_ref_department[".listFields"] = array();
$tdatapejawatan_ref_department[".listFields"][] = "id";
$tdatapejawatan_ref_department[".listFields"][] = "name";
$tdatapejawatan_ref_department[".listFields"][] = "description";

$tdatapejawatan_ref_department[".hideMobileList"] = array();


$tdatapejawatan_ref_department[".viewFields"] = array();
$tdatapejawatan_ref_department[".viewFields"][] = "id";
$tdatapejawatan_ref_department[".viewFields"][] = "name";
$tdatapejawatan_ref_department[".viewFields"][] = "description";

$tdatapejawatan_ref_department[".addFields"] = array();
$tdatapejawatan_ref_department[".addFields"][] = "name";
$tdatapejawatan_ref_department[".addFields"][] = "description";

$tdatapejawatan_ref_department[".masterListFields"] = array();
$tdatapejawatan_ref_department[".masterListFields"][] = "id";
$tdatapejawatan_ref_department[".masterListFields"][] = "name";
$tdatapejawatan_ref_department[".masterListFields"][] = "description";

$tdatapejawatan_ref_department[".inlineAddFields"] = array();
$tdatapejawatan_ref_department[".inlineAddFields"][] = "name";
$tdatapejawatan_ref_department[".inlineAddFields"][] = "description";

$tdatapejawatan_ref_department[".editFields"] = array();
$tdatapejawatan_ref_department[".editFields"][] = "name";
$tdatapejawatan_ref_department[".editFields"][] = "description";

$tdatapejawatan_ref_department[".inlineEditFields"] = array();
$tdatapejawatan_ref_department[".inlineEditFields"][] = "name";
$tdatapejawatan_ref_department[".inlineEditFields"][] = "description";

$tdatapejawatan_ref_department[".exportFields"] = array();
$tdatapejawatan_ref_department[".exportFields"][] = "id";
$tdatapejawatan_ref_department[".exportFields"][] = "name";
$tdatapejawatan_ref_department[".exportFields"][] = "description";

$tdatapejawatan_ref_department[".importFields"] = array();
$tdatapejawatan_ref_department[".importFields"][] = "id";
$tdatapejawatan_ref_department[".importFields"][] = "name";
$tdatapejawatan_ref_department[".importFields"][] = "description";

$tdatapejawatan_ref_department[".printFields"] = array();
$tdatapejawatan_ref_department[".printFields"][] = "id";
$tdatapejawatan_ref_department[".printFields"][] = "name";
$tdatapejawatan_ref_department[".printFields"][] = "description";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pejawatan_ref_department";
	$fdata["Label"] = GetFieldLabel("pejawatan_ref_department","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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








	$tdatapejawatan_ref_department["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "pejawatan_ref_department";
	$fdata["Label"] = GetFieldLabel("pejawatan_ref_department","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapejawatan_ref_department["name"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "pejawatan_ref_department";
	$fdata["Label"] = GetFieldLabel("pejawatan_ref_department","description");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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
			$edata["EditParams"].= " maxlength=225";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapejawatan_ref_department["description"] = $fdata;


$tables_data["pejawatan_ref_department"]=&$tdatapejawatan_ref_department;
$field_labels["pejawatan_ref_department"] = &$fieldLabelspejawatan_ref_department;
$fieldToolTips["pejawatan_ref_department"] = &$fieldToolTipspejawatan_ref_department;
$page_titles["pejawatan_ref_department"] = &$pageTitlespejawatan_ref_department;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pejawatan_ref_department"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pejawatan_ref_department"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pejawatan_ref_department()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	description";
$proto0["m_strFrom"] = "FROM pejawatan_ref_department";
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
	"m_strName" => "id",
	"m_strTable" => "pejawatan_ref_department",
	"m_srcTableName" => "pejawatan_ref_department"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "pejawatan_ref_department";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "pejawatan_ref_department",
	"m_srcTableName" => "pejawatan_ref_department"
));

$proto7["m_sql"] = "name";
$proto7["m_srcTableName"] = "pejawatan_ref_department";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "pejawatan_ref_department",
	"m_srcTableName" => "pejawatan_ref_department"
));

$proto9["m_sql"] = "description";
$proto9["m_srcTableName"] = "pejawatan_ref_department";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "pejawatan_ref_department";
$proto12["m_srcTableName"] = "pejawatan_ref_department";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "name";
$proto12["m_columns"][] = "description";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "pejawatan_ref_department";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "pejawatan_ref_department";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pejawatan_ref_department";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pejawatan_ref_department = createSqlQuery_pejawatan_ref_department();



			

$tdatapejawatan_ref_department[".sqlquery"] = $queryData_pejawatan_ref_department;

$tableEvents["pejawatan_ref_department"] = new eventsBase;
$tdatapejawatan_ref_department[".hasEvents"] = false;

?>