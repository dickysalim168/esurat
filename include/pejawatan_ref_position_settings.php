<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapejawatan_ref_position = array();
	$tdatapejawatan_ref_position[".truncateText"] = true;
	$tdatapejawatan_ref_position[".NumberOfChars"] = 80;
	$tdatapejawatan_ref_position[".ShortName"] = "pejawatan_ref_position";
	$tdatapejawatan_ref_position[".OwnerID"] = "";
	$tdatapejawatan_ref_position[".OriginalTable"] = "pejawatan_ref_position";

//	field labels
$fieldLabelspejawatan_ref_position = array();
$fieldToolTipspejawatan_ref_position = array();
$pageTitlespejawatan_ref_position = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelspejawatan_ref_position["Malay"] = array();
	$fieldToolTipspejawatan_ref_position["Malay"] = array();
	$pageTitlespejawatan_ref_position["Malay"] = array();
	$fieldLabelspejawatan_ref_position["Malay"]["id"] = "Id";
	$fieldToolTipspejawatan_ref_position["Malay"]["id"] = "";
	$fieldLabelspejawatan_ref_position["Malay"]["name"] = "Name";
	$fieldToolTipspejawatan_ref_position["Malay"]["name"] = "";
	$fieldLabelspejawatan_ref_position["Malay"]["description"] = "Description";
	$fieldToolTipspejawatan_ref_position["Malay"]["description"] = "";
	if (count($fieldToolTipspejawatan_ref_position["Malay"]))
		$tdatapejawatan_ref_position[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspejawatan_ref_position[""] = array();
	$fieldToolTipspejawatan_ref_position[""] = array();
	$pageTitlespejawatan_ref_position[""] = array();
	$fieldLabelspejawatan_ref_position[""]["id"] = "Id";
	$fieldToolTipspejawatan_ref_position[""]["id"] = "";
	$fieldLabelspejawatan_ref_position[""]["name"] = "Name";
	$fieldToolTipspejawatan_ref_position[""]["name"] = "";
	$fieldLabelspejawatan_ref_position[""]["description"] = "Description";
	$fieldToolTipspejawatan_ref_position[""]["description"] = "";
	if (count($fieldToolTipspejawatan_ref_position[""]))
		$tdatapejawatan_ref_position[".isUseToolTips"] = true;
}


	$tdatapejawatan_ref_position[".NCSearch"] = true;



$tdatapejawatan_ref_position[".shortTableName"] = "pejawatan_ref_position";
$tdatapejawatan_ref_position[".nSecOptions"] = 0;
$tdatapejawatan_ref_position[".recsPerRowList"] = 1;
$tdatapejawatan_ref_position[".recsPerRowPrint"] = 1;
$tdatapejawatan_ref_position[".mainTableOwnerID"] = "";
$tdatapejawatan_ref_position[".moveNext"] = 1;
$tdatapejawatan_ref_position[".entityType"] = 0;

$tdatapejawatan_ref_position[".strOriginalTableName"] = "pejawatan_ref_position";




$tdatapejawatan_ref_position[".showAddInPopup"] = false;

$tdatapejawatan_ref_position[".showEditInPopup"] = false;

$tdatapejawatan_ref_position[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapejawatan_ref_position[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapejawatan_ref_position[".fieldsForRegister"] = array();

$tdatapejawatan_ref_position[".listAjax"] = false;

	$tdatapejawatan_ref_position[".audit"] = false;

	$tdatapejawatan_ref_position[".locking"] = false;









$tdatapejawatan_ref_position[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapejawatan_ref_position[".searchSaving"] = false;
//

$tdatapejawatan_ref_position[".showSearchPanel"] = true;
		$tdatapejawatan_ref_position[".flexibleSearch"] = true;

if (isMobile())
	$tdatapejawatan_ref_position[".isUseAjaxSuggest"] = false;
else
	$tdatapejawatan_ref_position[".isUseAjaxSuggest"] = true;

$tdatapejawatan_ref_position[".rowHighlite"] = true;


																																																																									
$tdatapejawatan_ref_position[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapejawatan_ref_position[".isUseTimeForSearch"] = false;





$tdatapejawatan_ref_position[".allSearchFields"] = array();
$tdatapejawatan_ref_position[".filterFields"] = array();
$tdatapejawatan_ref_position[".requiredSearchFields"] = array();



$tdatapejawatan_ref_position[".googleLikeFields"] = array();
$tdatapejawatan_ref_position[".googleLikeFields"][] = "id";
$tdatapejawatan_ref_position[".googleLikeFields"][] = "name";
$tdatapejawatan_ref_position[".googleLikeFields"][] = "description";


$tdatapejawatan_ref_position[".advSearchFields"] = array();
$tdatapejawatan_ref_position[".advSearchFields"][] = "id";
$tdatapejawatan_ref_position[".advSearchFields"][] = "name";
$tdatapejawatan_ref_position[".advSearchFields"][] = "description";

$tdatapejawatan_ref_position[".tableType"] = "list";

$tdatapejawatan_ref_position[".printerPageOrientation"] = 0;
$tdatapejawatan_ref_position[".nPrinterPageScale"] = 100;

$tdatapejawatan_ref_position[".nPrinterSplitRecords"] = 40;

$tdatapejawatan_ref_position[".nPrinterPDFSplitRecords"] = 40;



$tdatapejawatan_ref_position[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatapejawatan_ref_position[".pageSize"] = 20;

$tdatapejawatan_ref_position[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapejawatan_ref_position[".strOrderBy"] = $tstrOrderBy;

$tdatapejawatan_ref_position[".orderindexes"] = array();

$tdatapejawatan_ref_position[".sqlHead"] = "SELECT id,  	name,  	description";
$tdatapejawatan_ref_position[".sqlFrom"] = "FROM pejawatan_ref_position";
$tdatapejawatan_ref_position[".sqlWhereExpr"] = "";
$tdatapejawatan_ref_position[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapejawatan_ref_position[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapejawatan_ref_position[".arrGroupsPerPage"] = $arrGPP;

$tdatapejawatan_ref_position[".highlightSearchResults"] = true;

$tableKeyspejawatan_ref_position = array();
$tableKeyspejawatan_ref_position[] = "id";
$tdatapejawatan_ref_position[".Keys"] = $tableKeyspejawatan_ref_position;

$tdatapejawatan_ref_position[".listFields"] = array();
$tdatapejawatan_ref_position[".listFields"][] = "id";
$tdatapejawatan_ref_position[".listFields"][] = "name";
$tdatapejawatan_ref_position[".listFields"][] = "description";

$tdatapejawatan_ref_position[".hideMobileList"] = array();


$tdatapejawatan_ref_position[".viewFields"] = array();
$tdatapejawatan_ref_position[".viewFields"][] = "id";
$tdatapejawatan_ref_position[".viewFields"][] = "name";
$tdatapejawatan_ref_position[".viewFields"][] = "description";

$tdatapejawatan_ref_position[".addFields"] = array();
$tdatapejawatan_ref_position[".addFields"][] = "name";
$tdatapejawatan_ref_position[".addFields"][] = "description";

$tdatapejawatan_ref_position[".masterListFields"] = array();
$tdatapejawatan_ref_position[".masterListFields"][] = "id";
$tdatapejawatan_ref_position[".masterListFields"][] = "name";
$tdatapejawatan_ref_position[".masterListFields"][] = "description";

$tdatapejawatan_ref_position[".inlineAddFields"] = array();
$tdatapejawatan_ref_position[".inlineAddFields"][] = "name";
$tdatapejawatan_ref_position[".inlineAddFields"][] = "description";

$tdatapejawatan_ref_position[".editFields"] = array();
$tdatapejawatan_ref_position[".editFields"][] = "name";
$tdatapejawatan_ref_position[".editFields"][] = "description";

$tdatapejawatan_ref_position[".inlineEditFields"] = array();
$tdatapejawatan_ref_position[".inlineEditFields"][] = "name";
$tdatapejawatan_ref_position[".inlineEditFields"][] = "description";

$tdatapejawatan_ref_position[".exportFields"] = array();
$tdatapejawatan_ref_position[".exportFields"][] = "id";
$tdatapejawatan_ref_position[".exportFields"][] = "name";
$tdatapejawatan_ref_position[".exportFields"][] = "description";

$tdatapejawatan_ref_position[".importFields"] = array();
$tdatapejawatan_ref_position[".importFields"][] = "id";
$tdatapejawatan_ref_position[".importFields"][] = "name";
$tdatapejawatan_ref_position[".importFields"][] = "description";

$tdatapejawatan_ref_position[".printFields"] = array();
$tdatapejawatan_ref_position[".printFields"][] = "id";
$tdatapejawatan_ref_position[".printFields"][] = "name";
$tdatapejawatan_ref_position[".printFields"][] = "description";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pejawatan_ref_position";
	$fdata["Label"] = GetFieldLabel("pejawatan_ref_position","id");
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








	$tdatapejawatan_ref_position["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "pejawatan_ref_position";
	$fdata["Label"] = GetFieldLabel("pejawatan_ref_position","name");
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapejawatan_ref_position["name"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "pejawatan_ref_position";
	$fdata["Label"] = GetFieldLabel("pejawatan_ref_position","description");
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








	$tdatapejawatan_ref_position["description"] = $fdata;


$tables_data["pejawatan_ref_position"]=&$tdatapejawatan_ref_position;
$field_labels["pejawatan_ref_position"] = &$fieldLabelspejawatan_ref_position;
$fieldToolTips["pejawatan_ref_position"] = &$fieldToolTipspejawatan_ref_position;
$page_titles["pejawatan_ref_position"] = &$pageTitlespejawatan_ref_position;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pejawatan_ref_position"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pejawatan_ref_position"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pejawatan_ref_position()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	description";
$proto0["m_strFrom"] = "FROM pejawatan_ref_position";
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
	"m_strTable" => "pejawatan_ref_position",
	"m_srcTableName" => "pejawatan_ref_position"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "pejawatan_ref_position";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "pejawatan_ref_position",
	"m_srcTableName" => "pejawatan_ref_position"
));

$proto7["m_sql"] = "name";
$proto7["m_srcTableName"] = "pejawatan_ref_position";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "pejawatan_ref_position",
	"m_srcTableName" => "pejawatan_ref_position"
));

$proto9["m_sql"] = "description";
$proto9["m_srcTableName"] = "pejawatan_ref_position";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "pejawatan_ref_position";
$proto12["m_srcTableName"] = "pejawatan_ref_position";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "name";
$proto12["m_columns"][] = "description";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "pejawatan_ref_position";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "pejawatan_ref_position";
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
$proto0["m_srcTableName"]="pejawatan_ref_position";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pejawatan_ref_position = createSqlQuery_pejawatan_ref_position();



			

$tdatapejawatan_ref_position[".sqlquery"] = $queryData_pejawatan_ref_position;

$tableEvents["pejawatan_ref_position"] = new eventsBase;
$tdatapejawatan_ref_position[".hasEvents"] = false;

?>