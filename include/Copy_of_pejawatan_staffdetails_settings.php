<?php
require_once(getabspath("classes/cipherer.php"));
$tdataCopy_of_pejawatan_staffdetails = array();
	$tdataCopy_of_pejawatan_staffdetails[".NumberOfChars"] = 80; 
	$tdataCopy_of_pejawatan_staffdetails[".ShortName"] = "Copy_of_pejawatan_staffdetails";
	$tdataCopy_of_pejawatan_staffdetails[".OwnerID"] = "";
	$tdataCopy_of_pejawatan_staffdetails[".OriginalTable"] = "pejawatan_staffdetails";

//	field labels
$fieldLabelsCopy_of_pejawatan_staffdetails = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsCopy_of_pejawatan_staffdetails["Malay"] = array();
	$fieldToolTipsCopy_of_pejawatan_staffdetails["Malay"] = array();
	$fieldLabelsCopy_of_pejawatan_staffdetails["Malay"]["name"] = "Name";
	$fieldToolTipsCopy_of_pejawatan_staffdetails["Malay"]["name"] = "";
	$fieldLabelsCopy_of_pejawatan_staffdetails["Malay"]["Jawatan"] = "Jawatan";
	$fieldToolTipsCopy_of_pejawatan_staffdetails["Malay"]["Jawatan"] = "";
	$fieldLabelsCopy_of_pejawatan_staffdetails["Malay"]["Bahagian"] = "Bahagian";
	$fieldToolTipsCopy_of_pejawatan_staffdetails["Malay"]["Bahagian"] = "";
	$fieldLabelsCopy_of_pejawatan_staffdetails["Malay"]["daripada_bahagian"] = "Daripada Bahagian";
	$fieldToolTipsCopy_of_pejawatan_staffdetails["Malay"]["daripada_bahagian"] = "";
	$fieldLabelsCopy_of_pejawatan_staffdetails["Malay"]["kepada_bahagian"] = "Kepada Bahagian";
	$fieldToolTipsCopy_of_pejawatan_staffdetails["Malay"]["kepada_bahagian"] = "";
	$fieldLabelsCopy_of_pejawatan_staffdetails["Malay"]["post_id"] = "Post Id";
	$fieldToolTipsCopy_of_pejawatan_staffdetails["Malay"]["post_id"] = "";
	$fieldLabelsCopy_of_pejawatan_staffdetails["Malay"]["dept_id"] = "Dept Id";
	$fieldToolTipsCopy_of_pejawatan_staffdetails["Malay"]["dept_id"] = "";
	$fieldLabelsCopy_of_pejawatan_staffdetails["Malay"]["id"] = "Id";
	$fieldToolTipsCopy_of_pejawatan_staffdetails["Malay"]["id"] = "";
	$fieldLabelsCopy_of_pejawatan_staffdetails["Malay"]["id1"] = "Id1";
	$fieldToolTipsCopy_of_pejawatan_staffdetails["Malay"]["id1"] = "";
	$fieldLabelsCopy_of_pejawatan_staffdetails["Malay"]["staff_id"] = "Staff Id";
	$fieldToolTipsCopy_of_pejawatan_staffdetails["Malay"]["staff_id"] = "";
	$fieldLabelsCopy_of_pejawatan_staffdetails["Malay"]["KepadaBahagian"] = "Kepada Bahagian";
	$fieldToolTipsCopy_of_pejawatan_staffdetails["Malay"]["KepadaBahagian"] = "";
	if (count($fieldToolTipsCopy_of_pejawatan_staffdetails["Malay"]))
		$tdataCopy_of_pejawatan_staffdetails[".isUseToolTips"] = true;
}
	
	
	$tdataCopy_of_pejawatan_staffdetails[".NCSearch"] = true;



$tdataCopy_of_pejawatan_staffdetails[".shortTableName"] = "Copy_of_pejawatan_staffdetails";
$tdataCopy_of_pejawatan_staffdetails[".nSecOptions"] = 0;
$tdataCopy_of_pejawatan_staffdetails[".recsPerRowList"] = 1;
$tdataCopy_of_pejawatan_staffdetails[".mainTableOwnerID"] = "";
$tdataCopy_of_pejawatan_staffdetails[".moveNext"] = 1;
$tdataCopy_of_pejawatan_staffdetails[".nType"] = 1;

$tdataCopy_of_pejawatan_staffdetails[".strOriginalTableName"] = "pejawatan_staffdetails";




$tdataCopy_of_pejawatan_staffdetails[".showAddInPopup"] = false;

$tdataCopy_of_pejawatan_staffdetails[".showEditInPopup"] = false;

$tdataCopy_of_pejawatan_staffdetails[".showViewInPopup"] = false;

$tdataCopy_of_pejawatan_staffdetails[".fieldsForRegister"] = array();
	
$tdataCopy_of_pejawatan_staffdetails[".listAjax"] = false;

	$tdataCopy_of_pejawatan_staffdetails[".audit"] = false;

	$tdataCopy_of_pejawatan_staffdetails[".locking"] = false;

$tdataCopy_of_pejawatan_staffdetails[".listIcons"] = true;
$tdataCopy_of_pejawatan_staffdetails[".edit"] = true;
$tdataCopy_of_pejawatan_staffdetails[".inlineEdit"] = true;
$tdataCopy_of_pejawatan_staffdetails[".inlineAdd"] = true;
$tdataCopy_of_pejawatan_staffdetails[".view"] = true;

$tdataCopy_of_pejawatan_staffdetails[".exportTo"] = true;

$tdataCopy_of_pejawatan_staffdetails[".printFriendly"] = true;

$tdataCopy_of_pejawatan_staffdetails[".delete"] = true;

$tdataCopy_of_pejawatan_staffdetails[".showSimpleSearchOptions"] = false;

$tdataCopy_of_pejawatan_staffdetails[".showSearchPanel"] = true;

if (isMobile())
	$tdataCopy_of_pejawatan_staffdetails[".isUseAjaxSuggest"] = false;
else 
	$tdataCopy_of_pejawatan_staffdetails[".isUseAjaxSuggest"] = true;

$tdataCopy_of_pejawatan_staffdetails[".rowHighlite"] = true;

// button handlers file names

$tdataCopy_of_pejawatan_staffdetails[".addPageEvents"] = false;

// use datepicker for search panel
$tdataCopy_of_pejawatan_staffdetails[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataCopy_of_pejawatan_staffdetails[".isUseTimeForSearch"] = false;




$tdataCopy_of_pejawatan_staffdetails[".allSearchFields"] = array();

$tdataCopy_of_pejawatan_staffdetails[".allSearchFields"][] = "name";
$tdataCopy_of_pejawatan_staffdetails[".allSearchFields"][] = "Jawatan";
$tdataCopy_of_pejawatan_staffdetails[".allSearchFields"][] = "Bahagian";
$tdataCopy_of_pejawatan_staffdetails[".allSearchFields"][] = "post_id";
$tdataCopy_of_pejawatan_staffdetails[".allSearchFields"][] = "dept_id";
$tdataCopy_of_pejawatan_staffdetails[".allSearchFields"][] = "id";
$tdataCopy_of_pejawatan_staffdetails[".allSearchFields"][] = "id1";
$tdataCopy_of_pejawatan_staffdetails[".allSearchFields"][] = "staff_id";

$tdataCopy_of_pejawatan_staffdetails[".googleLikeFields"][] = "name";
$tdataCopy_of_pejawatan_staffdetails[".googleLikeFields"][] = "Jawatan";
$tdataCopy_of_pejawatan_staffdetails[".googleLikeFields"][] = "Bahagian";
$tdataCopy_of_pejawatan_staffdetails[".googleLikeFields"][] = "post_id";
$tdataCopy_of_pejawatan_staffdetails[".googleLikeFields"][] = "dept_id";
$tdataCopy_of_pejawatan_staffdetails[".googleLikeFields"][] = "id";
$tdataCopy_of_pejawatan_staffdetails[".googleLikeFields"][] = "id1";
$tdataCopy_of_pejawatan_staffdetails[".googleLikeFields"][] = "staff_id";


$tdataCopy_of_pejawatan_staffdetails[".advSearchFields"][] = "name";
$tdataCopy_of_pejawatan_staffdetails[".advSearchFields"][] = "Jawatan";
$tdataCopy_of_pejawatan_staffdetails[".advSearchFields"][] = "Bahagian";
$tdataCopy_of_pejawatan_staffdetails[".advSearchFields"][] = "post_id";
$tdataCopy_of_pejawatan_staffdetails[".advSearchFields"][] = "dept_id";
$tdataCopy_of_pejawatan_staffdetails[".advSearchFields"][] = "id";
$tdataCopy_of_pejawatan_staffdetails[".advSearchFields"][] = "id1";

$tdataCopy_of_pejawatan_staffdetails[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataCopy_of_pejawatan_staffdetails[".pageSize"] = 5;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCopy_of_pejawatan_staffdetails[".strOrderBy"] = $tstrOrderBy;

$tdataCopy_of_pejawatan_staffdetails[".orderindexes"] = array();

$tdataCopy_of_pejawatan_staffdetails[".sqlHead"] = "SELECT pejawatan_staffdetails.name,  pejawatan_ref_position.name AS Jawatan,  pejawatan_ref_department.name AS Bahagian,  pejawatan_staffdetails.post_id,  pejawatan_staffdetails.dept_id,  pejawatan_ref_position.id,  pejawatan_ref_department.id AS id1,  pejawatan_staffdetails.staff_id";
$tdataCopy_of_pejawatan_staffdetails[".sqlFrom"] = "FROM pejawatan_staffdetails  , pejawatan_ref_position  , pejawatan_ref_department";
$tdataCopy_of_pejawatan_staffdetails[".sqlWhereExpr"] = "(pejawatan_staffdetails.post_id = pejawatan_ref_position.id) AND (pejawatan_staffdetails.dept_id = pejawatan_ref_department.id)";
$tdataCopy_of_pejawatan_staffdetails[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCopy_of_pejawatan_staffdetails[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCopy_of_pejawatan_staffdetails[".arrGroupsPerPage"] = $arrGPP;

$tableKeysCopy_of_pejawatan_staffdetails = array();
$tdataCopy_of_pejawatan_staffdetails[".Keys"] = $tableKeysCopy_of_pejawatan_staffdetails;

$tdataCopy_of_pejawatan_staffdetails[".listFields"] = array();
$tdataCopy_of_pejawatan_staffdetails[".listFields"][] = "name";
$tdataCopy_of_pejawatan_staffdetails[".listFields"][] = "Jawatan";
$tdataCopy_of_pejawatan_staffdetails[".listFields"][] = "Bahagian";

$tdataCopy_of_pejawatan_staffdetails[".viewFields"] = array();
$tdataCopy_of_pejawatan_staffdetails[".viewFields"][] = "name";
$tdataCopy_of_pejawatan_staffdetails[".viewFields"][] = "Jawatan";
$tdataCopy_of_pejawatan_staffdetails[".viewFields"][] = "Bahagian";

$tdataCopy_of_pejawatan_staffdetails[".addFields"] = array();
$tdataCopy_of_pejawatan_staffdetails[".addFields"][] = "name";
$tdataCopy_of_pejawatan_staffdetails[".addFields"][] = "Jawatan";
$tdataCopy_of_pejawatan_staffdetails[".addFields"][] = "Bahagian";

$tdataCopy_of_pejawatan_staffdetails[".inlineAddFields"] = array();
$tdataCopy_of_pejawatan_staffdetails[".inlineAddFields"][] = "name";
$tdataCopy_of_pejawatan_staffdetails[".inlineAddFields"][] = "Jawatan";
$tdataCopy_of_pejawatan_staffdetails[".inlineAddFields"][] = "Bahagian";

$tdataCopy_of_pejawatan_staffdetails[".editFields"] = array();
$tdataCopy_of_pejawatan_staffdetails[".editFields"][] = "name";
$tdataCopy_of_pejawatan_staffdetails[".editFields"][] = "Jawatan";
$tdataCopy_of_pejawatan_staffdetails[".editFields"][] = "Bahagian";

$tdataCopy_of_pejawatan_staffdetails[".inlineEditFields"] = array();
$tdataCopy_of_pejawatan_staffdetails[".inlineEditFields"][] = "name";
$tdataCopy_of_pejawatan_staffdetails[".inlineEditFields"][] = "Jawatan";
$tdataCopy_of_pejawatan_staffdetails[".inlineEditFields"][] = "Bahagian";

$tdataCopy_of_pejawatan_staffdetails[".exportFields"] = array();
$tdataCopy_of_pejawatan_staffdetails[".exportFields"][] = "name";
$tdataCopy_of_pejawatan_staffdetails[".exportFields"][] = "Jawatan";
$tdataCopy_of_pejawatan_staffdetails[".exportFields"][] = "Bahagian";

$tdataCopy_of_pejawatan_staffdetails[".printFields"] = array();
$tdataCopy_of_pejawatan_staffdetails[".printFields"][] = "name";
$tdataCopy_of_pejawatan_staffdetails[".printFields"][] = "Jawatan";
$tdataCopy_of_pejawatan_staffdetails[".printFields"][] = "Bahagian";

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
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
		
		
	$tdataCopy_of_pejawatan_staffdetails["name"] = $fdata;
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
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
		
		
	$tdataCopy_of_pejawatan_staffdetails["Jawatan"] = $fdata;
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
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
		
		
	$tdataCopy_of_pejawatan_staffdetails["Bahagian"] = $fdata;
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
	
		
		
	$tdataCopy_of_pejawatan_staffdetails["post_id"] = $fdata;
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
	
		
		
	$tdataCopy_of_pejawatan_staffdetails["dept_id"] = $fdata;
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
	
		
		
	$tdataCopy_of_pejawatan_staffdetails["id"] = $fdata;
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
	
		
		
	$tdataCopy_of_pejawatan_staffdetails["id1"] = $fdata;
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
	
		
		
	$tdataCopy_of_pejawatan_staffdetails["staff_id"] = $fdata;

	
$tables_data["Copy of pejawatan_staffdetails"]=&$tdataCopy_of_pejawatan_staffdetails;
$field_labels["Copy_of_pejawatan_staffdetails"] = &$fieldLabelsCopy_of_pejawatan_staffdetails;
$fieldToolTips["Copy of pejawatan_staffdetails"] = &$fieldToolTipsCopy_of_pejawatan_staffdetails;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Copy of pejawatan_staffdetails"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Copy of pejawatan_staffdetails"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Copy_of_pejawatan_staffdetails()
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
$queryData_Copy_of_pejawatan_staffdetails = createSqlQuery_Copy_of_pejawatan_staffdetails();
								$tdataCopy_of_pejawatan_staffdetails[".sqlquery"] = $queryData_Copy_of_pejawatan_staffdetails;
	
if(isset($tdataCopy_of_pejawatan_staffdetails["field2"])){
	$tdataCopy_of_pejawatan_staffdetails["field2"]["LookupTable"] = "carscars_view";
	$tdataCopy_of_pejawatan_staffdetails["field2"]["LookupOrderBy"] = "name";
	$tdataCopy_of_pejawatan_staffdetails["field2"]["LookupType"] = 4;
	$tdataCopy_of_pejawatan_staffdetails["field2"]["LinkField"] = "email";
	$tdataCopy_of_pejawatan_staffdetails["field2"]["DisplayField"] = "name";
	$tdataCopy_of_pejawatan_staffdetails[".hasCustomViewField"] = true;
}

$tableEvents["Copy of pejawatan_staffdetails"] = new eventsBase;
$tdataCopy_of_pejawatan_staffdetails[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Copy of pejawatan_staffdetails");

?>