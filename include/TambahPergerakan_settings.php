<?php
require_once(getabspath("classes/cipherer.php"));
$tdataTambahPergerakan = array();
	$tdataTambahPergerakan[".NumberOfChars"] = 80; 
	$tdataTambahPergerakan[".ShortName"] = "TambahPergerakan";
	$tdataTambahPergerakan[".OwnerID"] = "";
	$tdataTambahPergerakan[".OriginalTable"] = "pejawatan_staffdetails";

//	field labels
$fieldLabelsTambahPergerakan = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsTambahPergerakan["Malay"] = array();
	$fieldToolTipsTambahPergerakan["Malay"] = array();
	$fieldLabelsTambahPergerakan["Malay"]["staff_id"] = "Staff Id";
	$fieldToolTipsTambahPergerakan["Malay"]["staff_id"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["name"] = "Nama";
	$fieldToolTipsTambahPergerakan["Malay"]["name"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["icno"] = "Icno";
	$fieldToolTipsTambahPergerakan["Malay"]["icno"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["post_id"] = "Jawatan";
	$fieldToolTipsTambahPergerakan["Malay"]["post_id"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["dept_id"] = "Bahagian";
	$fieldToolTipsTambahPergerakan["Malay"]["dept_id"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["lantikan_date"] = "Lantikan Date";
	$fieldToolTipsTambahPergerakan["Malay"]["lantikan_date"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["sah_date"] = "Sah Date";
	$fieldToolTipsTambahPergerakan["Malay"]["sah_date"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["pencen_date"] = "Pencen Date";
	$fieldToolTipsTambahPergerakan["Malay"]["pencen_date"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["gaji_date"] = "Gaji Date";
	$fieldToolTipsTambahPergerakan["Malay"]["gaji_date"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["skim_pencen"] = "Skim Pencen";
	$fieldToolTipsTambahPergerakan["Malay"]["skim_pencen"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["tamatkontrak_date"] = "Tamatkontrak Date";
	$fieldToolTipsTambahPergerakan["Malay"]["tamatkontrak_date"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["nofail"] = "Nofail";
	$fieldToolTipsTambahPergerakan["Malay"]["nofail"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["grade_id"] = "Grade Id";
	$fieldToolTipsTambahPergerakan["Malay"]["grade_id"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["start_date"] = "Start Date";
	$fieldToolTipsTambahPergerakan["Malay"]["start_date"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["scheme_id"] = "Scheme Id";
	$fieldToolTipsTambahPergerakan["Malay"]["scheme_id"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["username"] = "Username";
	$fieldToolTipsTambahPergerakan["Malay"]["username"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["password"] = "Password";
	$fieldToolTipsTambahPergerakan["Malay"]["password"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["type"] = "Type";
	$fieldToolTipsTambahPergerakan["Malay"]["type"] = "";
	$fieldLabelsTambahPergerakan["Malay"]["level"] = "Level";
	$fieldToolTipsTambahPergerakan["Malay"]["level"] = "";
	if (count($fieldToolTipsTambahPergerakan["Malay"]))
		$tdataTambahPergerakan[".isUseToolTips"] = true;
}
	
	
	$tdataTambahPergerakan[".NCSearch"] = true;



$tdataTambahPergerakan[".shortTableName"] = "TambahPergerakan";
$tdataTambahPergerakan[".nSecOptions"] = 0;
$tdataTambahPergerakan[".recsPerRowList"] = 1;
$tdataTambahPergerakan[".mainTableOwnerID"] = "";
$tdataTambahPergerakan[".moveNext"] = 1;
$tdataTambahPergerakan[".nType"] = 1;

$tdataTambahPergerakan[".strOriginalTableName"] = "pejawatan_staffdetails";




$tdataTambahPergerakan[".showAddInPopup"] = false;

$tdataTambahPergerakan[".showEditInPopup"] = false;

$tdataTambahPergerakan[".showViewInPopup"] = false;

$tdataTambahPergerakan[".fieldsForRegister"] = array();
	
$tdataTambahPergerakan[".listAjax"] = false;

	$tdataTambahPergerakan[".audit"] = false;

	$tdataTambahPergerakan[".locking"] = false;

$tdataTambahPergerakan[".listIcons"] = true;
$tdataTambahPergerakan[".inlineEdit"] = true;
$tdataTambahPergerakan[".inlineAdd"] = true;
$tdataTambahPergerakan[".view"] = true;




$tdataTambahPergerakan[".showSimpleSearchOptions"] = false;

$tdataTambahPergerakan[".showSearchPanel"] = true;

if (isMobile())
	$tdataTambahPergerakan[".isUseAjaxSuggest"] = false;
else 
	$tdataTambahPergerakan[".isUseAjaxSuggest"] = true;

$tdataTambahPergerakan[".rowHighlite"] = true;

// button handlers file names
$tdataTambahPergerakan[".isUsebuttonHandlers"] = true;

$tdataTambahPergerakan[".addPageEvents"] = false;

// use datepicker for search panel
$tdataTambahPergerakan[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataTambahPergerakan[".isUseTimeForSearch"] = false;




$tdataTambahPergerakan[".allSearchFields"] = array();

$tdataTambahPergerakan[".allSearchFields"][] = "lantikan_date";
$tdataTambahPergerakan[".allSearchFields"][] = "sah_date";
$tdataTambahPergerakan[".allSearchFields"][] = "pencen_date";
$tdataTambahPergerakan[".allSearchFields"][] = "gaji_date";
$tdataTambahPergerakan[".allSearchFields"][] = "skim_pencen";
$tdataTambahPergerakan[".allSearchFields"][] = "tamatkontrak_date";
$tdataTambahPergerakan[".allSearchFields"][] = "nofail";
$tdataTambahPergerakan[".allSearchFields"][] = "name";
$tdataTambahPergerakan[".allSearchFields"][] = "post_id";
$tdataTambahPergerakan[".allSearchFields"][] = "dept_id";
$tdataTambahPergerakan[".allSearchFields"][] = "grade_id";
$tdataTambahPergerakan[".allSearchFields"][] = "start_date";
$tdataTambahPergerakan[".allSearchFields"][] = "scheme_id";
$tdataTambahPergerakan[".allSearchFields"][] = "username";
$tdataTambahPergerakan[".allSearchFields"][] = "password";
$tdataTambahPergerakan[".allSearchFields"][] = "type";
$tdataTambahPergerakan[".allSearchFields"][] = "level";

$tdataTambahPergerakan[".googleLikeFields"][] = "lantikan_date";
$tdataTambahPergerakan[".googleLikeFields"][] = "sah_date";
$tdataTambahPergerakan[".googleLikeFields"][] = "pencen_date";
$tdataTambahPergerakan[".googleLikeFields"][] = "gaji_date";
$tdataTambahPergerakan[".googleLikeFields"][] = "skim_pencen";
$tdataTambahPergerakan[".googleLikeFields"][] = "tamatkontrak_date";
$tdataTambahPergerakan[".googleLikeFields"][] = "nofail";
$tdataTambahPergerakan[".googleLikeFields"][] = "name";
$tdataTambahPergerakan[".googleLikeFields"][] = "grade_id";
$tdataTambahPergerakan[".googleLikeFields"][] = "start_date";
$tdataTambahPergerakan[".googleLikeFields"][] = "scheme_id";
$tdataTambahPergerakan[".googleLikeFields"][] = "username";
$tdataTambahPergerakan[".googleLikeFields"][] = "password";
$tdataTambahPergerakan[".googleLikeFields"][] = "type";
$tdataTambahPergerakan[".googleLikeFields"][] = "level";


$tdataTambahPergerakan[".advSearchFields"][] = "lantikan_date";
$tdataTambahPergerakan[".advSearchFields"][] = "sah_date";
$tdataTambahPergerakan[".advSearchFields"][] = "pencen_date";
$tdataTambahPergerakan[".advSearchFields"][] = "gaji_date";
$tdataTambahPergerakan[".advSearchFields"][] = "skim_pencen";
$tdataTambahPergerakan[".advSearchFields"][] = "tamatkontrak_date";
$tdataTambahPergerakan[".advSearchFields"][] = "nofail";
$tdataTambahPergerakan[".advSearchFields"][] = "name";
$tdataTambahPergerakan[".advSearchFields"][] = "post_id";
$tdataTambahPergerakan[".advSearchFields"][] = "dept_id";
$tdataTambahPergerakan[".advSearchFields"][] = "grade_id";
$tdataTambahPergerakan[".advSearchFields"][] = "start_date";
$tdataTambahPergerakan[".advSearchFields"][] = "scheme_id";
$tdataTambahPergerakan[".advSearchFields"][] = "username";
$tdataTambahPergerakan[".advSearchFields"][] = "password";
$tdataTambahPergerakan[".advSearchFields"][] = "type";
$tdataTambahPergerakan[".advSearchFields"][] = "level";

$tdataTambahPergerakan[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataTambahPergerakan[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTambahPergerakan[".strOrderBy"] = $tstrOrderBy;

$tdataTambahPergerakan[".orderindexes"] = array();

$tdataTambahPergerakan[".sqlHead"] = "SELECT staff_id,   lantikan_date,   sah_date,   pencen_date,   gaji_date,   skim_pencen,   tamatkontrak_date,   nofail,   name,   icno,   post_id,   dept_id,   grade_id,   start_date,   scheme_id,   username,   password,   `type`,   `level`";
$tdataTambahPergerakan[".sqlFrom"] = "FROM pejawatan_staffdetails";
$tdataTambahPergerakan[".sqlWhereExpr"] = "";
$tdataTambahPergerakan[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTambahPergerakan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTambahPergerakan[".arrGroupsPerPage"] = $arrGPP;

$tableKeysTambahPergerakan = array();
$tableKeysTambahPergerakan[] = "staff_id";
$tdataTambahPergerakan[".Keys"] = $tableKeysTambahPergerakan;

$tdataTambahPergerakan[".listFields"] = array();
$tdataTambahPergerakan[".listFields"][] = "lantikan_date";
$tdataTambahPergerakan[".listFields"][] = "sah_date";
$tdataTambahPergerakan[".listFields"][] = "pencen_date";
$tdataTambahPergerakan[".listFields"][] = "gaji_date";
$tdataTambahPergerakan[".listFields"][] = "skim_pencen";
$tdataTambahPergerakan[".listFields"][] = "tamatkontrak_date";
$tdataTambahPergerakan[".listFields"][] = "nofail";
$tdataTambahPergerakan[".listFields"][] = "type";
$tdataTambahPergerakan[".listFields"][] = "level";
$tdataTambahPergerakan[".listFields"][] = "password";
$tdataTambahPergerakan[".listFields"][] = "grade_id";
$tdataTambahPergerakan[".listFields"][] = "start_date";
$tdataTambahPergerakan[".listFields"][] = "scheme_id";
$tdataTambahPergerakan[".listFields"][] = "username";
$tdataTambahPergerakan[".listFields"][] = "name";
$tdataTambahPergerakan[".listFields"][] = "post_id";
$tdataTambahPergerakan[".listFields"][] = "dept_id";

$tdataTambahPergerakan[".viewFields"] = array();
$tdataTambahPergerakan[".viewFields"][] = "lantikan_date";
$tdataTambahPergerakan[".viewFields"][] = "sah_date";
$tdataTambahPergerakan[".viewFields"][] = "pencen_date";
$tdataTambahPergerakan[".viewFields"][] = "gaji_date";
$tdataTambahPergerakan[".viewFields"][] = "skim_pencen";
$tdataTambahPergerakan[".viewFields"][] = "tamatkontrak_date";
$tdataTambahPergerakan[".viewFields"][] = "nofail";
$tdataTambahPergerakan[".viewFields"][] = "name";
$tdataTambahPergerakan[".viewFields"][] = "post_id";
$tdataTambahPergerakan[".viewFields"][] = "dept_id";
$tdataTambahPergerakan[".viewFields"][] = "grade_id";
$tdataTambahPergerakan[".viewFields"][] = "start_date";
$tdataTambahPergerakan[".viewFields"][] = "scheme_id";
$tdataTambahPergerakan[".viewFields"][] = "username";
$tdataTambahPergerakan[".viewFields"][] = "password";
$tdataTambahPergerakan[".viewFields"][] = "type";
$tdataTambahPergerakan[".viewFields"][] = "level";

$tdataTambahPergerakan[".addFields"] = array();
$tdataTambahPergerakan[".addFields"][] = "lantikan_date";
$tdataTambahPergerakan[".addFields"][] = "sah_date";
$tdataTambahPergerakan[".addFields"][] = "pencen_date";
$tdataTambahPergerakan[".addFields"][] = "gaji_date";
$tdataTambahPergerakan[".addFields"][] = "skim_pencen";
$tdataTambahPergerakan[".addFields"][] = "tamatkontrak_date";
$tdataTambahPergerakan[".addFields"][] = "nofail";
$tdataTambahPergerakan[".addFields"][] = "grade_id";
$tdataTambahPergerakan[".addFields"][] = "start_date";
$tdataTambahPergerakan[".addFields"][] = "scheme_id";
$tdataTambahPergerakan[".addFields"][] = "username";
$tdataTambahPergerakan[".addFields"][] = "password";
$tdataTambahPergerakan[".addFields"][] = "type";
$tdataTambahPergerakan[".addFields"][] = "level";

$tdataTambahPergerakan[".inlineAddFields"] = array();
$tdataTambahPergerakan[".inlineAddFields"][] = "lantikan_date";
$tdataTambahPergerakan[".inlineAddFields"][] = "sah_date";
$tdataTambahPergerakan[".inlineAddFields"][] = "pencen_date";
$tdataTambahPergerakan[".inlineAddFields"][] = "gaji_date";
$tdataTambahPergerakan[".inlineAddFields"][] = "skim_pencen";
$tdataTambahPergerakan[".inlineAddFields"][] = "tamatkontrak_date";
$tdataTambahPergerakan[".inlineAddFields"][] = "nofail";
$tdataTambahPergerakan[".inlineAddFields"][] = "type";
$tdataTambahPergerakan[".inlineAddFields"][] = "level";
$tdataTambahPergerakan[".inlineAddFields"][] = "password";
$tdataTambahPergerakan[".inlineAddFields"][] = "grade_id";
$tdataTambahPergerakan[".inlineAddFields"][] = "start_date";
$tdataTambahPergerakan[".inlineAddFields"][] = "scheme_id";
$tdataTambahPergerakan[".inlineAddFields"][] = "username";
$tdataTambahPergerakan[".inlineAddFields"][] = "name";
$tdataTambahPergerakan[".inlineAddFields"][] = "post_id";
$tdataTambahPergerakan[".inlineAddFields"][] = "dept_id";

$tdataTambahPergerakan[".editFields"] = array();
$tdataTambahPergerakan[".editFields"][] = "lantikan_date";
$tdataTambahPergerakan[".editFields"][] = "sah_date";
$tdataTambahPergerakan[".editFields"][] = "pencen_date";
$tdataTambahPergerakan[".editFields"][] = "gaji_date";
$tdataTambahPergerakan[".editFields"][] = "skim_pencen";
$tdataTambahPergerakan[".editFields"][] = "tamatkontrak_date";
$tdataTambahPergerakan[".editFields"][] = "nofail";
$tdataTambahPergerakan[".editFields"][] = "grade_id";
$tdataTambahPergerakan[".editFields"][] = "start_date";
$tdataTambahPergerakan[".editFields"][] = "scheme_id";
$tdataTambahPergerakan[".editFields"][] = "username";
$tdataTambahPergerakan[".editFields"][] = "password";
$tdataTambahPergerakan[".editFields"][] = "type";
$tdataTambahPergerakan[".editFields"][] = "level";

$tdataTambahPergerakan[".inlineEditFields"] = array();
$tdataTambahPergerakan[".inlineEditFields"][] = "lantikan_date";
$tdataTambahPergerakan[".inlineEditFields"][] = "sah_date";
$tdataTambahPergerakan[".inlineEditFields"][] = "pencen_date";
$tdataTambahPergerakan[".inlineEditFields"][] = "gaji_date";
$tdataTambahPergerakan[".inlineEditFields"][] = "skim_pencen";
$tdataTambahPergerakan[".inlineEditFields"][] = "tamatkontrak_date";
$tdataTambahPergerakan[".inlineEditFields"][] = "nofail";
$tdataTambahPergerakan[".inlineEditFields"][] = "grade_id";
$tdataTambahPergerakan[".inlineEditFields"][] = "start_date";
$tdataTambahPergerakan[".inlineEditFields"][] = "scheme_id";
$tdataTambahPergerakan[".inlineEditFields"][] = "username";
$tdataTambahPergerakan[".inlineEditFields"][] = "password";
$tdataTambahPergerakan[".inlineEditFields"][] = "type";
$tdataTambahPergerakan[".inlineEditFields"][] = "level";

$tdataTambahPergerakan[".exportFields"] = array();
$tdataTambahPergerakan[".exportFields"][] = "lantikan_date";
$tdataTambahPergerakan[".exportFields"][] = "sah_date";
$tdataTambahPergerakan[".exportFields"][] = "pencen_date";
$tdataTambahPergerakan[".exportFields"][] = "gaji_date";
$tdataTambahPergerakan[".exportFields"][] = "skim_pencen";
$tdataTambahPergerakan[".exportFields"][] = "tamatkontrak_date";
$tdataTambahPergerakan[".exportFields"][] = "nofail";
$tdataTambahPergerakan[".exportFields"][] = "grade_id";
$tdataTambahPergerakan[".exportFields"][] = "start_date";
$tdataTambahPergerakan[".exportFields"][] = "scheme_id";
$tdataTambahPergerakan[".exportFields"][] = "username";
$tdataTambahPergerakan[".exportFields"][] = "password";
$tdataTambahPergerakan[".exportFields"][] = "type";
$tdataTambahPergerakan[".exportFields"][] = "level";

$tdataTambahPergerakan[".printFields"] = array();
$tdataTambahPergerakan[".printFields"][] = "lantikan_date";
$tdataTambahPergerakan[".printFields"][] = "sah_date";
$tdataTambahPergerakan[".printFields"][] = "pencen_date";
$tdataTambahPergerakan[".printFields"][] = "gaji_date";
$tdataTambahPergerakan[".printFields"][] = "skim_pencen";
$tdataTambahPergerakan[".printFields"][] = "tamatkontrak_date";
$tdataTambahPergerakan[".printFields"][] = "nofail";
$tdataTambahPergerakan[".printFields"][] = "grade_id";
$tdataTambahPergerakan[".printFields"][] = "start_date";
$tdataTambahPergerakan[".printFields"][] = "scheme_id";
$tdataTambahPergerakan[".printFields"][] = "username";
$tdataTambahPergerakan[".printFields"][] = "password";
$tdataTambahPergerakan[".printFields"][] = "type";
$tdataTambahPergerakan[".printFields"][] = "level";

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
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "staff_id"; 
		$fdata["FullName"] = "staff_id";
	
		
		
				
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
	
		
		
	$tdataTambahPergerakan["staff_id"] = $fdata;
//	lantikan_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lantikan_date";
	$fdata["GoodName"] = "lantikan_date";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Lantikan Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "lantikan_date"; 
		$fdata["FullName"] = "lantikan_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataTambahPergerakan["lantikan_date"] = $fdata;
//	sah_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sah_date";
	$fdata["GoodName"] = "sah_date";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Sah Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sah_date"; 
		$fdata["FullName"] = "sah_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataTambahPergerakan["sah_date"] = $fdata;
//	pencen_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pencen_date";
	$fdata["GoodName"] = "pencen_date";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Pencen Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pencen_date"; 
		$fdata["FullName"] = "pencen_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataTambahPergerakan["pencen_date"] = $fdata;
//	gaji_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "gaji_date";
	$fdata["GoodName"] = "gaji_date";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Gaji Date"; 
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
	
		$fdata["strField"] = "gaji_date"; 
		$fdata["FullName"] = "gaji_date";
	
		
		
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
	
		
		
	$tdataTambahPergerakan["gaji_date"] = $fdata;
//	skim_pencen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "skim_pencen";
	$fdata["GoodName"] = "skim_pencen";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Skim Pencen"; 
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
	
		$fdata["strField"] = "skim_pencen"; 
		$fdata["FullName"] = "skim_pencen";
	
		
		
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
	
		
		
	$tdataTambahPergerakan["skim_pencen"] = $fdata;
//	tamatkontrak_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tamatkontrak_date";
	$fdata["GoodName"] = "tamatkontrak_date";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Tamatkontrak Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tamatkontrak_date"; 
		$fdata["FullName"] = "tamatkontrak_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataTambahPergerakan["tamatkontrak_date"] = $fdata;
//	nofail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "nofail";
	$fdata["GoodName"] = "nofail";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Nofail"; 
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
	
		$fdata["strField"] = "nofail"; 
		$fdata["FullName"] = "nofail";
	
		
		
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
	
		
		
	$tdataTambahPergerakan["nofail"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Nama"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataTambahPergerakan["name"] = $fdata;
//	icno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "icno";
	$fdata["GoodName"] = "icno";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Icno"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "icno"; 
		$fdata["FullName"] = "icno";
	
		
		
				
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
	
		
		
	$tdataTambahPergerakan["icno"] = $fdata;
//	post_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "post_id";
	$fdata["GoodName"] = "post_id";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Jawatan"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";
	
		
	$edata["LookupTable"] = "pejawatan_ref_position";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataTambahPergerakan["post_id"] = $fdata;
//	dept_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "dept_id";
	$fdata["GoodName"] = "dept_id";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Bahagian"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";
	
		
	$edata["LookupTable"] = "pejawatan_ref_department";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataTambahPergerakan["dept_id"] = $fdata;
//	grade_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "grade_id";
	$fdata["GoodName"] = "grade_id";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Grade Id"; 
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
	
		$fdata["strField"] = "grade_id"; 
		$fdata["FullName"] = "grade_id";
	
		
		
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
	
		
		
	$tdataTambahPergerakan["grade_id"] = $fdata;
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Start Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "start_date"; 
		$fdata["FullName"] = "start_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataTambahPergerakan["start_date"] = $fdata;
//	scheme_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "scheme_id";
	$fdata["GoodName"] = "scheme_id";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Scheme Id"; 
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
	
		$fdata["strField"] = "scheme_id"; 
		$fdata["FullName"] = "scheme_id";
	
		
		
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
	
		
		
	$tdataTambahPergerakan["scheme_id"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Username"; 
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
	
		$fdata["strField"] = "username"; 
		$fdata["FullName"] = "username";
	
		
		
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
	
		
		
	$tdataTambahPergerakan["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Password"; 
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
	
		$fdata["strField"] = "password"; 
		$fdata["FullName"] = "password";
	
		
		
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
	
		
		
	$tdataTambahPergerakan["password"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Type"; 
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
	
		$fdata["strField"] = "type"; 
		$fdata["FullName"] = "`type`";
	
		
		
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
	
		
		
	$tdataTambahPergerakan["type"] = $fdata;
//	level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "level";
	$fdata["GoodName"] = "level";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = "Level"; 
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
	
		
		
	$tdataTambahPergerakan["level"] = $fdata;

	
$tables_data["TambahPergerakan"]=&$tdataTambahPergerakan;
$field_labels["TambahPergerakan"] = &$fieldLabelsTambahPergerakan;
$fieldToolTips["TambahPergerakan"] = &$fieldToolTipsTambahPergerakan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TambahPergerakan"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["TambahPergerakan"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TambahPergerakan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "staff_id,   lantikan_date,   sah_date,   pencen_date,   gaji_date,   skim_pencen,   tamatkontrak_date,   nofail,   name,   icno,   post_id,   dept_id,   grade_id,   start_date,   scheme_id,   username,   password,   `type`,   `level`";
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
	"m_strName" => "lantikan_date",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sah_date",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "pencen_date",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "gaji_date",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "skim_pencen",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "tamatkontrak_date",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "nofail",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "icno",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "post_id",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_id",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_id",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "scheme_id",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "pejawatan_staffdetails"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "pejawatan_staffdetails";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "staff_id";
$proto44["m_columns"][] = "lantikan_date";
$proto44["m_columns"][] = "sah_date";
$proto44["m_columns"][] = "pencen_date";
$proto44["m_columns"][] = "gaji_date";
$proto44["m_columns"][] = "skim_pencen";
$proto44["m_columns"][] = "tamatkontrak_date";
$proto44["m_columns"][] = "nofail";
$proto44["m_columns"][] = "name";
$proto44["m_columns"][] = "icno";
$proto44["m_columns"][] = "post_id";
$proto44["m_columns"][] = "dept_id";
$proto44["m_columns"][] = "grade_id";
$proto44["m_columns"][] = "start_date";
$proto44["m_columns"][] = "scheme_id";
$proto44["m_columns"][] = "username";
$proto44["m_columns"][] = "password";
$proto44["m_columns"][] = "type";
$proto44["m_columns"][] = "level";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_alias"] = "";
$proto45=array();
$proto45["m_sql"] = "";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "";
$proto45["m_havingmode"] = "0";
$proto45["m_inBrackets"] = "0";
$proto45["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TambahPergerakan = createSqlQuery_TambahPergerakan();
																			$tdataTambahPergerakan[".sqlquery"] = $queryData_TambahPergerakan;
	
if(isset($tdataTambahPergerakan["field2"])){
	$tdataTambahPergerakan["field2"]["LookupTable"] = "carscars_view";
	$tdataTambahPergerakan["field2"]["LookupOrderBy"] = "name";
	$tdataTambahPergerakan["field2"]["LookupType"] = 4;
	$tdataTambahPergerakan["field2"]["LinkField"] = "email";
	$tdataTambahPergerakan["field2"]["DisplayField"] = "name";
	$tdataTambahPergerakan[".hasCustomViewField"] = true;
}

include_once(getabspath("include/TambahPergerakan_events.php"));
$tableEvents["TambahPergerakan"] = new eventclass_TambahPergerakan;
$tdataTambahPergerakan[".hasEvents"] = true;

$cipherer = new RunnerCipherer("TambahPergerakan");

?>