<?php
require_once(getabspath("classes/cipherer.php"));
$tdataKepada1 = array();
	$tdataKepada1[".NumberOfChars"] = 80; 
	$tdataKepada1[".ShortName"] = "Kepada1";
	$tdataKepada1[".OwnerID"] = "";
	$tdataKepada1[".OriginalTable"] = "pejawatan_staffdetails";

//	field labels
$fieldLabelsKepada1 = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsKepada1["Malay"] = array();
	$fieldToolTipsKepada1["Malay"] = array();
	$fieldLabelsKepada1["Malay"]["staff_id"] = "Staff Id";
	$fieldToolTipsKepada1["Malay"]["staff_id"] = "";
	$fieldLabelsKepada1["Malay"]["name"] = "Name";
	$fieldToolTipsKepada1["Malay"]["name"] = "";
	$fieldLabelsKepada1["Malay"]["post_id"] = "Post Id";
	$fieldToolTipsKepada1["Malay"]["post_id"] = "";
	$fieldLabelsKepada1["Malay"]["dept_id"] = "Dept Id";
	$fieldToolTipsKepada1["Malay"]["dept_id"] = "";
	$fieldLabelsKepada1["Malay"]["Jawatan"] = "Jawatan";
	$fieldToolTipsKepada1["Malay"]["Jawatan"] = "";
	$fieldLabelsKepada1["Malay"]["Bahagian"] = "Bahagian";
	$fieldToolTipsKepada1["Malay"]["Bahagian"] = "";
	$fieldLabelsKepada1["Malay"]["id"] = "Id";
	$fieldToolTipsKepada1["Malay"]["id"] = "";
	$fieldLabelsKepada1["Malay"]["id1"] = "Id1";
	$fieldToolTipsKepada1["Malay"]["id1"] = "";
	$fieldLabelsKepada1["Malay"]["individu"] = "Individu";
	$fieldToolTipsKepada1["Malay"]["individu"] = "";
	if (count($fieldToolTipsKepada1["Malay"]))
		$tdataKepada1[".isUseToolTips"] = true;
}
	
	
	$tdataKepada1[".NCSearch"] = true;



$tdataKepada1[".shortTableName"] = "Kepada1";
$tdataKepada1[".nSecOptions"] = 0;
$tdataKepada1[".recsPerRowList"] = 1;
$tdataKepada1[".mainTableOwnerID"] = "";
$tdataKepada1[".moveNext"] = 1;
$tdataKepada1[".nType"] = 1;

$tdataKepada1[".strOriginalTableName"] = "pejawatan_staffdetails";




$tdataKepada1[".showAddInPopup"] = false;

$tdataKepada1[".showEditInPopup"] = false;

$tdataKepada1[".showViewInPopup"] = false;

$tdataKepada1[".fieldsForRegister"] = array();
	
$tdataKepada1[".listAjax"] = false;

	$tdataKepada1[".audit"] = false;

	$tdataKepada1[".locking"] = false;

$tdataKepada1[".listIcons"] = true;
$tdataKepada1[".inlineAdd"] = true;

$tdataKepada1[".exportTo"] = true;

$tdataKepada1[".printFriendly"] = true;


$tdataKepada1[".showSimpleSearchOptions"] = false;

$tdataKepada1[".showSearchPanel"] = true;

if (isMobile())
	$tdataKepada1[".isUseAjaxSuggest"] = false;
else 
	$tdataKepada1[".isUseAjaxSuggest"] = true;

$tdataKepada1[".rowHighlite"] = true;

// button handlers file names

$tdataKepada1[".addPageEvents"] = false;

// use datepicker for search panel
$tdataKepada1[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataKepada1[".isUseTimeForSearch"] = false;




$tdataKepada1[".allSearchFields"] = array();

$tdataKepada1[".allSearchFields"][] = "name";
$tdataKepada1[".allSearchFields"][] = "Jawatan";
$tdataKepada1[".allSearchFields"][] = "Bahagian";
$tdataKepada1[".allSearchFields"][] = "post_id";
$tdataKepada1[".allSearchFields"][] = "dept_id";
$tdataKepada1[".allSearchFields"][] = "id";
$tdataKepada1[".allSearchFields"][] = "id1";
$tdataKepada1[".allSearchFields"][] = "staff_id";

$tdataKepada1[".googleLikeFields"][] = "name";
$tdataKepada1[".googleLikeFields"][] = "Jawatan";
$tdataKepada1[".googleLikeFields"][] = "Bahagian";
$tdataKepada1[".googleLikeFields"][] = "post_id";
$tdataKepada1[".googleLikeFields"][] = "dept_id";
$tdataKepada1[".googleLikeFields"][] = "id";
$tdataKepada1[".googleLikeFields"][] = "id1";
$tdataKepada1[".googleLikeFields"][] = "staff_id";


$tdataKepada1[".advSearchFields"][] = "name";
$tdataKepada1[".advSearchFields"][] = "Jawatan";
$tdataKepada1[".advSearchFields"][] = "Bahagian";
$tdataKepada1[".advSearchFields"][] = "post_id";
$tdataKepada1[".advSearchFields"][] = "dept_id";
$tdataKepada1[".advSearchFields"][] = "staff_id";

$tdataKepada1[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataKepada1[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataKepada1[".strOrderBy"] = $tstrOrderBy;

$tdataKepada1[".orderindexes"] = array();

$tdataKepada1[".sqlHead"] = "SELECT pejawatan_staffdetails.name,  pejawatan_ref_position.name AS Jawatan,  pejawatan_ref_department.name AS Bahagian,  pejawatan_staffdetails.post_id,  pejawatan_staffdetails.dept_id,  pejawatan_ref_position.id,  pejawatan_ref_department.id AS id1,  pejawatan_staffdetails.staff_id";
$tdataKepada1[".sqlFrom"] = "FROM pejawatan_staffdetails  , pejawatan_ref_position  , pejawatan_ref_department";
$tdataKepada1[".sqlWhereExpr"] = "(pejawatan_staffdetails.post_id = pejawatan_ref_position.id) AND (pejawatan_staffdetails.dept_id = pejawatan_ref_department.id)";
$tdataKepada1[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataKepada1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataKepada1[".arrGroupsPerPage"] = $arrGPP;

$tableKeysKepada1 = array();
$tableKeysKepada1[] = "staff_id";
$tdataKepada1[".Keys"] = $tableKeysKepada1;

$tdataKepada1[".listFields"] = array();
$tdataKepada1[".listFields"][] = "name";
$tdataKepada1[".listFields"][] = "Jawatan";
$tdataKepada1[".listFields"][] = "Bahagian";

$tdataKepada1[".viewFields"] = array();

$tdataKepada1[".addFields"] = array();
$tdataKepada1[".addFields"][] = "name";
$tdataKepada1[".addFields"][] = "Jawatan";
$tdataKepada1[".addFields"][] = "Bahagian";

$tdataKepada1[".inlineAddFields"] = array();
$tdataKepada1[".inlineAddFields"][] = "name";
$tdataKepada1[".inlineAddFields"][] = "Jawatan";
$tdataKepada1[".inlineAddFields"][] = "Bahagian";

$tdataKepada1[".editFields"] = array();

$tdataKepada1[".inlineEditFields"] = array();

$tdataKepada1[".exportFields"] = array();
$tdataKepada1[".exportFields"][] = "name";
$tdataKepada1[".exportFields"][] = "Jawatan";
$tdataKepada1[".exportFields"][] = "Bahagian";

$tdataKepada1[".printFields"] = array();
$tdataKepada1[".printFields"][] = "name";
$tdataKepada1[".printFields"][] = "Jawatan";
$tdataKepada1[".printFields"][] = "Bahagian";

//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "name"; 
		$fdata["FullName"] = "pejawatan_staffdetails.name";
	
		
		
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
	
		
		
	$tdataKepada1["name"] = $fdata;
//	Jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Jawatan";
	$fdata["GoodName"] = "Jawatan";
	$fdata["ownerTable"] = "pejawatan_ref_position";
	$fdata["Label"] = "Jawatan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "name"; 
		$fdata["FullName"] = "pejawatan_ref_position.name";
	
		
		
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
	
		
		
	$tdataKepada1["Jawatan"] = $fdata;
//	Bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Bahagian";
	$fdata["GoodName"] = "Bahagian";
	$fdata["ownerTable"] = "pejawatan_ref_department";
	$fdata["Label"] = "Bahagian"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "name"; 
		$fdata["FullName"] = "pejawatan_ref_department.name";
	
		
		
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
	
		
		
	$tdataKepada1["Bahagian"] = $fdata;
//	post_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "post_id";
	$fdata["GoodName"] = "post_id";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Post Id"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "post_id"; 
		$fdata["FullName"] = "pejawatan_staffdetails.post_id";
	
		
		
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
	
		
		
	$tdataKepada1["post_id"] = $fdata;
//	dept_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dept_id";
	$fdata["GoodName"] = "dept_id";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Dept Id"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "dept_id"; 
		$fdata["FullName"] = "pejawatan_staffdetails.dept_id";
	
		
		
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
	
		
		
	$tdataKepada1["dept_id"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pejawatan_ref_position";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "pejawatan_ref_position.id";
	
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataKepada1["id"] = $fdata;
//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "pejawatan_ref_department";
	$fdata["Label"] = "Id1"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "pejawatan_ref_department.id";
	
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataKepada1["id1"] = $fdata;
//	staff_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "staff_id";
	$fdata["GoodName"] = "staff_id";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Staff Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "staff_id"; 
		$fdata["FullName"] = "pejawatan_staffdetails.staff_id";
	
		
		
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
	
		
		
	$tdataKepada1["staff_id"] = $fdata;

	
$tables_data["Kepada1"]=&$tdataKepada1;
$field_labels["Kepada1"] = &$fieldLabelsKepada1;
$fieldToolTips["Kepada1"] = &$fieldToolTipsKepada1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Kepada1"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Kepada1"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Kepada1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pejawatan_staffdetails.name,  pejawatan_ref_position.name AS Jawatan,  pejawatan_ref_department.name AS Bahagian,  pejawatan_staffdetails.post_id,  pejawatan_staffdetails.dept_id,  pejawatan_ref_position.id,  pejawatan_ref_department.id AS id1,  pejawatan_staffdetails.staff_id";
$proto0["m_strFrom"] = "FROM pejawatan_staffdetails  , pejawatan_ref_position  , pejawatan_ref_department";
$proto0["m_strWhere"] = "(pejawatan_staffdetails.post_id = pejawatan_ref_position.id) AND (pejawatan_staffdetails.dept_id = pejawatan_ref_department.id)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(pejawatan_staffdetails.post_id = pejawatan_ref_position.id) AND (pejawatan_staffdetails.dept_id = pejawatan_ref_department.id)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(pejawatan_staffdetails.post_id = pejawatan_ref_position.id) AND (pejawatan_staffdetails.dept_id = pejawatan_ref_department.id)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "pejawatan_staffdetails.post_id = pejawatan_ref_position.id";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "post_id",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "= pejawatan_ref_position.id";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "1";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "pejawatan_staffdetails.dept_id = pejawatan_ref_department.id";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "dept_id",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "= pejawatan_ref_department.id";
$proto5["m_havingmode"] = "0";
$proto5["m_inBrackets"] = "1";
$proto5["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = "0";
$proto7["m_inBrackets"] = "0";
$proto7["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto7);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "pejawatan_ref_position"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Jawatan";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "pejawatan_ref_department"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "Bahagian";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "post_id",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_id",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "pejawatan_ref_position"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "pejawatan_ref_department"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "id1";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "staff_id",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "pejawatan_staffdetails";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "staff_id";
$proto26["m_columns"][] = "lantikan_date";
$proto26["m_columns"][] = "sah_date";
$proto26["m_columns"][] = "pencen_date";
$proto26["m_columns"][] = "gaji_date";
$proto26["m_columns"][] = "skim_pencen";
$proto26["m_columns"][] = "tamatkontrak_date";
$proto26["m_columns"][] = "nofail";
$proto26["m_columns"][] = "name";
$proto26["m_columns"][] = "icno";
$proto26["m_columns"][] = "post_id";
$proto26["m_columns"][] = "dept_id";
$proto26["m_columns"][] = "grade_id";
$proto26["m_columns"][] = "start_date";
$proto26["m_columns"][] = "scheme_id";
$proto26["m_columns"][] = "username";
$proto26["m_columns"][] = "password";
$proto26["m_columns"][] = "type";
$proto26["m_columns"][] = "level";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
												$proto29=array();
$proto29["m_link"] = "SQLL_CROSSJOIN";
			$proto30=array();
$proto30["m_strName"] = "pejawatan_ref_position";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id";
$proto30["m_columns"][] = "name";
$proto30["m_columns"][] = "description";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_alias"] = "";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = "0";
$proto31["m_inBrackets"] = "0";
$proto31["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
												$proto33=array();
$proto33["m_link"] = "SQLL_CROSSJOIN";
			$proto34=array();
$proto34["m_strName"] = "pejawatan_ref_department";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "id";
$proto34["m_columns"][] = "name";
$proto34["m_columns"][] = "description";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_alias"] = "";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = "0";
$proto35["m_inBrackets"] = "0";
$proto35["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Kepada1 = createSqlQuery_Kepada1();
								$tdataKepada1[".sqlquery"] = $queryData_Kepada1;
	
if(isset($tdataKepada1["field2"])){
	$tdataKepada1["field2"]["LookupTable"] = "carscars_view";
	$tdataKepada1["field2"]["LookupOrderBy"] = "name";
	$tdataKepada1["field2"]["LookupType"] = 4;
	$tdataKepada1["field2"]["LinkField"] = "email";
	$tdataKepada1["field2"]["DisplayField"] = "name";
	$tdataKepada1[".hasCustomViewField"] = true;
}

$tableEvents["Kepada1"] = new eventsBase;
$tdataKepada1[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Kepada1");

?>