<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapejawatan_staffdetails = array();
	$tdatapejawatan_staffdetails[".NumberOfChars"] = 80; 
	$tdatapejawatan_staffdetails[".ShortName"] = "pejawatan_staffdetails";
	$tdatapejawatan_staffdetails[".OwnerID"] = "";
	$tdatapejawatan_staffdetails[".OriginalTable"] = "pejawatan_staffdetails";

//	field labels
$fieldLabelspejawatan_staffdetails = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelspejawatan_staffdetails["Malay"] = array();
	$fieldToolTipspejawatan_staffdetails["Malay"] = array();
	$fieldLabelspejawatan_staffdetails["Malay"]["staff_id"] = "Staff Id";
	$fieldToolTipspejawatan_staffdetails["Malay"]["staff_id"] = "";
	$fieldLabelspejawatan_staffdetails["Malay"]["name"] = "Name";
	$fieldToolTipspejawatan_staffdetails["Malay"]["name"] = "";
	$fieldLabelspejawatan_staffdetails["Malay"]["icno"] = "Icno";
	$fieldToolTipspejawatan_staffdetails["Malay"]["icno"] = "";
	$fieldLabelspejawatan_staffdetails["Malay"]["post_id"] = "Post Id";
	$fieldToolTipspejawatan_staffdetails["Malay"]["post_id"] = "";
	$fieldLabelspejawatan_staffdetails["Malay"]["dept_id"] = "Dept Id";
	$fieldToolTipspejawatan_staffdetails["Malay"]["dept_id"] = "";
	if (count($fieldToolTipspejawatan_staffdetails["Malay"]))
		$tdatapejawatan_staffdetails[".isUseToolTips"] = true;
}
	
	
	$tdatapejawatan_staffdetails[".NCSearch"] = true;



$tdatapejawatan_staffdetails[".shortTableName"] = "pejawatan_staffdetails";
$tdatapejawatan_staffdetails[".nSecOptions"] = 0;
$tdatapejawatan_staffdetails[".recsPerRowList"] = 1;
$tdatapejawatan_staffdetails[".mainTableOwnerID"] = "";
$tdatapejawatan_staffdetails[".moveNext"] = 1;
$tdatapejawatan_staffdetails[".nType"] = 0;

$tdatapejawatan_staffdetails[".strOriginalTableName"] = "pejawatan_staffdetails";




$tdatapejawatan_staffdetails[".showAddInPopup"] = false;

$tdatapejawatan_staffdetails[".showEditInPopup"] = false;

$tdatapejawatan_staffdetails[".showViewInPopup"] = false;

$tdatapejawatan_staffdetails[".fieldsForRegister"] = array();
	
$tdatapejawatan_staffdetails[".listAjax"] = false;

	$tdatapejawatan_staffdetails[".audit"] = false;

	$tdatapejawatan_staffdetails[".locking"] = false;

$tdatapejawatan_staffdetails[".listIcons"] = true;
$tdatapejawatan_staffdetails[".edit"] = true;
$tdatapejawatan_staffdetails[".inlineEdit"] = true;
$tdatapejawatan_staffdetails[".inlineAdd"] = true;
$tdatapejawatan_staffdetails[".view"] = true;

$tdatapejawatan_staffdetails[".exportTo"] = true;

$tdatapejawatan_staffdetails[".printFriendly"] = true;

$tdatapejawatan_staffdetails[".delete"] = true;

$tdatapejawatan_staffdetails[".showSimpleSearchOptions"] = false;

$tdatapejawatan_staffdetails[".showSearchPanel"] = true;

if (isMobile())
	$tdatapejawatan_staffdetails[".isUseAjaxSuggest"] = false;
else 
	$tdatapejawatan_staffdetails[".isUseAjaxSuggest"] = true;

$tdatapejawatan_staffdetails[".rowHighlite"] = true;

// button handlers file names

$tdatapejawatan_staffdetails[".addPageEvents"] = false;

// use datepicker for search panel
$tdatapejawatan_staffdetails[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatapejawatan_staffdetails[".isUseTimeForSearch"] = false;




$tdatapejawatan_staffdetails[".allSearchFields"] = array();

$tdatapejawatan_staffdetails[".allSearchFields"][] = "staff_id";
$tdatapejawatan_staffdetails[".allSearchFields"][] = "name";
$tdatapejawatan_staffdetails[".allSearchFields"][] = "icno";
$tdatapejawatan_staffdetails[".allSearchFields"][] = "post_id";
$tdatapejawatan_staffdetails[".allSearchFields"][] = "dept_id";

$tdatapejawatan_staffdetails[".googleLikeFields"][] = "staff_id";
$tdatapejawatan_staffdetails[".googleLikeFields"][] = "name";
$tdatapejawatan_staffdetails[".googleLikeFields"][] = "icno";
$tdatapejawatan_staffdetails[".googleLikeFields"][] = "post_id";
$tdatapejawatan_staffdetails[".googleLikeFields"][] = "dept_id";


$tdatapejawatan_staffdetails[".advSearchFields"][] = "staff_id";
$tdatapejawatan_staffdetails[".advSearchFields"][] = "name";
$tdatapejawatan_staffdetails[".advSearchFields"][] = "icno";
$tdatapejawatan_staffdetails[".advSearchFields"][] = "post_id";
$tdatapejawatan_staffdetails[".advSearchFields"][] = "dept_id";

$tdatapejawatan_staffdetails[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatapejawatan_staffdetails[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapejawatan_staffdetails[".strOrderBy"] = $tstrOrderBy;

$tdatapejawatan_staffdetails[".orderindexes"] = array();

$tdatapejawatan_staffdetails[".sqlHead"] = "SELECT staff_id,  name,  icno,  post_id,  dept_id";
$tdatapejawatan_staffdetails[".sqlFrom"] = "FROM pejawatan_staffdetails";
$tdatapejawatan_staffdetails[".sqlWhereExpr"] = "";
$tdatapejawatan_staffdetails[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapejawatan_staffdetails[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapejawatan_staffdetails[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspejawatan_staffdetails = array();
$tableKeyspejawatan_staffdetails[] = "staff_id";
$tdatapejawatan_staffdetails[".Keys"] = $tableKeyspejawatan_staffdetails;

$tdatapejawatan_staffdetails[".listFields"] = array();
$tdatapejawatan_staffdetails[".listFields"][] = "staff_id";
$tdatapejawatan_staffdetails[".listFields"][] = "name";
$tdatapejawatan_staffdetails[".listFields"][] = "icno";
$tdatapejawatan_staffdetails[".listFields"][] = "post_id";
$tdatapejawatan_staffdetails[".listFields"][] = "dept_id";

$tdatapejawatan_staffdetails[".viewFields"] = array();
$tdatapejawatan_staffdetails[".viewFields"][] = "staff_id";
$tdatapejawatan_staffdetails[".viewFields"][] = "name";
$tdatapejawatan_staffdetails[".viewFields"][] = "icno";
$tdatapejawatan_staffdetails[".viewFields"][] = "post_id";
$tdatapejawatan_staffdetails[".viewFields"][] = "dept_id";

$tdatapejawatan_staffdetails[".addFields"] = array();
$tdatapejawatan_staffdetails[".addFields"][] = "name";
$tdatapejawatan_staffdetails[".addFields"][] = "icno";
$tdatapejawatan_staffdetails[".addFields"][] = "post_id";
$tdatapejawatan_staffdetails[".addFields"][] = "dept_id";

$tdatapejawatan_staffdetails[".inlineAddFields"] = array();
$tdatapejawatan_staffdetails[".inlineAddFields"][] = "name";
$tdatapejawatan_staffdetails[".inlineAddFields"][] = "icno";
$tdatapejawatan_staffdetails[".inlineAddFields"][] = "post_id";
$tdatapejawatan_staffdetails[".inlineAddFields"][] = "dept_id";

$tdatapejawatan_staffdetails[".editFields"] = array();
$tdatapejawatan_staffdetails[".editFields"][] = "name";
$tdatapejawatan_staffdetails[".editFields"][] = "icno";
$tdatapejawatan_staffdetails[".editFields"][] = "post_id";
$tdatapejawatan_staffdetails[".editFields"][] = "dept_id";

$tdatapejawatan_staffdetails[".inlineEditFields"] = array();
$tdatapejawatan_staffdetails[".inlineEditFields"][] = "name";
$tdatapejawatan_staffdetails[".inlineEditFields"][] = "icno";
$tdatapejawatan_staffdetails[".inlineEditFields"][] = "post_id";
$tdatapejawatan_staffdetails[".inlineEditFields"][] = "dept_id";

$tdatapejawatan_staffdetails[".exportFields"] = array();
$tdatapejawatan_staffdetails[".exportFields"][] = "staff_id";
$tdatapejawatan_staffdetails[".exportFields"][] = "name";
$tdatapejawatan_staffdetails[".exportFields"][] = "icno";
$tdatapejawatan_staffdetails[".exportFields"][] = "post_id";
$tdatapejawatan_staffdetails[".exportFields"][] = "dept_id";

$tdatapejawatan_staffdetails[".printFields"] = array();
$tdatapejawatan_staffdetails[".printFields"][] = "staff_id";
$tdatapejawatan_staffdetails[".printFields"][] = "name";
$tdatapejawatan_staffdetails[".printFields"][] = "icno";
$tdatapejawatan_staffdetails[".printFields"][] = "post_id";
$tdatapejawatan_staffdetails[".printFields"][] = "dept_id";

//	staff_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "staff_id";
	$fdata["GoodName"] = "staff_id";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Staff Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "staff_id"; 
		$fdata["FullName"] = "staff_id";
	
		
		
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
	
		
		
	$tdatapejawatan_staffdetails["staff_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Name"; 
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
	
		$fdata["strField"] = "name"; 
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=225";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapejawatan_staffdetails["name"] = $fdata;
//	icno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "icno";
	$fdata["GoodName"] = "icno";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Icno"; 
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
	
		$fdata["strField"] = "icno"; 
		$fdata["FullName"] = "icno";
	
		
		
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
			$edata["EditParams"].= " maxlength=16";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapejawatan_staffdetails["icno"] = $fdata;
//	post_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "post_id";
	$fdata["GoodName"] = "post_id";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Post Id"; 
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
	
		$fdata["strField"] = "post_id"; 
		$fdata["FullName"] = "post_id";
	
		
		
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
	
		
		
	$tdatapejawatan_staffdetails["post_id"] = $fdata;
//	dept_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dept_id";
	$fdata["GoodName"] = "dept_id";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Dept Id"; 
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
	
		$fdata["strField"] = "dept_id"; 
		$fdata["FullName"] = "dept_id";
	
		
		
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
	
		
		
	$tdatapejawatan_staffdetails["dept_id"] = $fdata;

	
$tables_data["pejawatan_staffdetails"]=&$tdatapejawatan_staffdetails;
$field_labels["pejawatan_staffdetails"] = &$fieldLabelspejawatan_staffdetails;
$fieldToolTips["pejawatan_staffdetails"] = &$fieldToolTipspejawatan_staffdetails;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pejawatan_staffdetails"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["pejawatan_staffdetails"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pejawatan_staffdetails()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "staff_id,  name,  icno,  post_id,  dept_id";
$proto0["m_strFrom"] = "FROM pejawatan_staffdetails";
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
	"m_strName" => "staff_id",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "icno",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "post_id",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_id",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "pejawatan_staffdetails";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "staff_id";
$proto16["m_columns"][] = "name";
$proto16["m_columns"][] = "icno";
$proto16["m_columns"][] = "post_id";
$proto16["m_columns"][] = "dept_id";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_alias"] = "";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = "0";
$proto17["m_inBrackets"] = "0";
$proto17["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pejawatan_staffdetails = createSqlQuery_pejawatan_staffdetails();
					$tdatapejawatan_staffdetails[".sqlquery"] = $queryData_pejawatan_staffdetails;
	
if(isset($tdatapejawatan_staffdetails["field2"])){
	$tdatapejawatan_staffdetails["field2"]["LookupTable"] = "carscars_view";
	$tdatapejawatan_staffdetails["field2"]["LookupOrderBy"] = "name";
	$tdatapejawatan_staffdetails["field2"]["LookupType"] = 4;
	$tdatapejawatan_staffdetails["field2"]["LinkField"] = "email";
	$tdatapejawatan_staffdetails["field2"]["DisplayField"] = "name";
	$tdatapejawatan_staffdetails[".hasCustomViewField"] = true;
}

$tableEvents["pejawatan_staffdetails"] = new eventsBase;
$tdatapejawatan_staffdetails[".hasEvents"] = false;

$cipherer = new RunnerCipherer("pejawatan_staffdetails");

?>