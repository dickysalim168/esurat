<?php
require_once(getabspath("classes/cipherer.php"));
$tdataUserView = array();
	$tdataUserView[".NumberOfChars"] = 80; 
	$tdataUserView[".ShortName"] = "UserView";
	$tdataUserView[".OwnerID"] = "pid";
	$tdataUserView[".OriginalTable"] = "surat_individu";

//	field labels
$fieldLabelsUserView = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsUserView["Malay"] = array();
	$fieldToolTipsUserView["Malay"] = array();
	$fieldLabelsUserView["Malay"]["sid"] = "Pilihan";
	$fieldToolTipsUserView["Malay"]["sid"] = "";
	$fieldLabelsUserView["Malay"]["email"] = "Email";
	$fieldToolTipsUserView["Malay"]["email"] = "";
	$fieldLabelsUserView["Malay"]["Bahagian"] = "Bahagian";
	$fieldToolTipsUserView["Malay"]["Bahagian"] = "";
	$fieldLabelsUserView["Malay"]["Jawatan"] = "Jawatan";
	$fieldToolTipsUserView["Malay"]["Jawatan"] = "";
	$fieldLabelsUserView["Malay"]["status"] = "Status";
	$fieldToolTipsUserView["Malay"]["status"] = "";
	$fieldLabelsUserView["Malay"]["siid"] = "Siid";
	$fieldToolTipsUserView["Malay"]["siid"] = "";
	$fieldLabelsUserView["Malay"]["Tarikh"] = "Tarikh";
	$fieldToolTipsUserView["Malay"]["Tarikh"] = "";
	$fieldLabelsUserView["Malay"]["Penghantar"] = "Penghantar";
	$fieldToolTipsUserView["Malay"]["Penghantar"] = "";
	$fieldLabelsUserView["Malay"]["Penerima"] = "Penerima";
	$fieldToolTipsUserView["Malay"]["Penerima"] = "";
	$fieldLabelsUserView["Malay"]["Catatan"] = "Catatan";
	$fieldToolTipsUserView["Malay"]["Catatan"] = "";
	$fieldLabelsUserView["Malay"]["Email_Status"] = "Email Status";
	$fieldToolTipsUserView["Malay"]["Email_Status"] = "";
	$fieldLabelsUserView["Malay"]["Minit"] = "Minit";
	$fieldToolTipsUserView["Malay"]["Minit"] = "";
	if (count($fieldToolTipsUserView["Malay"]))
		$tdataUserView[".isUseToolTips"] = true;
}
	
	
	$tdataUserView[".NCSearch"] = true;



$tdataUserView[".shortTableName"] = "UserView";
$tdataUserView[".nSecOptions"] = 1;
$tdataUserView[".recsPerRowList"] = 1;
$tdataUserView[".mainTableOwnerID"] = "pid";
$tdataUserView[".moveNext"] = 1;
$tdataUserView[".nType"] = 1;

$tdataUserView[".strOriginalTableName"] = "surat_individu";




$tdataUserView[".showAddInPopup"] = false;

$tdataUserView[".showEditInPopup"] = false;

$tdataUserView[".showViewInPopup"] = false;

$tdataUserView[".fieldsForRegister"] = array();
	
$tdataUserView[".listAjax"] = false;

	$tdataUserView[".audit"] = false;

	$tdataUserView[".locking"] = false;

$tdataUserView[".listIcons"] = true;




$tdataUserView[".showSimpleSearchOptions"] = false;

$tdataUserView[".showSearchPanel"] = true;

if (isMobile())
	$tdataUserView[".isUseAjaxSuggest"] = false;
else 
	$tdataUserView[".isUseAjaxSuggest"] = true;

$tdataUserView[".rowHighlite"] = true;

// button handlers file names

$tdataUserView[".addPageEvents"] = false;

// use datepicker for search panel
$tdataUserView[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataUserView[".isUseTimeForSearch"] = false;




$tdataUserView[".allSearchFields"] = array();

$tdataUserView[".allSearchFields"][] = "Tarikh";
$tdataUserView[".allSearchFields"][] = "Penghantar";
$tdataUserView[".allSearchFields"][] = "Minit";
$tdataUserView[".allSearchFields"][] = "Penerima";
$tdataUserView[".allSearchFields"][] = "Catatan";
$tdataUserView[".allSearchFields"][] = "Email_Status";
$tdataUserView[".allSearchFields"][] = "siid";
$tdataUserView[".allSearchFields"][] = "Status";

$tdataUserView[".googleLikeFields"][] = "siid";
$tdataUserView[".googleLikeFields"][] = "Tarikh";
$tdataUserView[".googleLikeFields"][] = "sid";
$tdataUserView[".googleLikeFields"][] = "Penghantar";
$tdataUserView[".googleLikeFields"][] = "Minit";
$tdataUserView[".googleLikeFields"][] = "Penerima";
$tdataUserView[".googleLikeFields"][] = "Catatan";
$tdataUserView[".googleLikeFields"][] = "Email_Status";
$tdataUserView[".googleLikeFields"][] = "Status";


$tdataUserView[".advSearchFields"][] = "Tarikh";
$tdataUserView[".advSearchFields"][] = "Penghantar";
$tdataUserView[".advSearchFields"][] = "Minit";
$tdataUserView[".advSearchFields"][] = "Penerima";
$tdataUserView[".advSearchFields"][] = "Catatan";
$tdataUserView[".advSearchFields"][] = "Email_Status";
$tdataUserView[".advSearchFields"][] = "siid";
$tdataUserView[".advSearchFields"][] = "Status";

$tdataUserView[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataUserView[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataUserView[".strOrderBy"] = $tstrOrderBy;

$tdataUserView[".orderindexes"] = array();

$tdataUserView[".sqlHead"] = "SELECT siid,   Tarikh,   sid,   Penghantar,   Minit,   Penerima,   Catatan,   Status,   Email_Status";
$tdataUserView[".sqlFrom"] = "FROM surat_individu";
$tdataUserView[".sqlWhereExpr"] = "";
$tdataUserView[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataUserView[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataUserView[".arrGroupsPerPage"] = $arrGPP;

$tableKeysUserView = array();
$tdataUserView[".Keys"] = $tableKeysUserView;

$tdataUserView[".listFields"] = array();
$tdataUserView[".listFields"][] = "siid";
$tdataUserView[".listFields"][] = "Tarikh";
$tdataUserView[".listFields"][] = "Catatan";
$tdataUserView[".listFields"][] = "Penghantar";
$tdataUserView[".listFields"][] = "Minit";
$tdataUserView[".listFields"][] = "Penerima";
$tdataUserView[".listFields"][] = "Email_Status";
$tdataUserView[".listFields"][] = "sid";
$tdataUserView[".listFields"][] = "Status";

$tdataUserView[".viewFields"] = array();
$tdataUserView[".viewFields"][] = "siid";
$tdataUserView[".viewFields"][] = "Tarikh";
$tdataUserView[".viewFields"][] = "Penghantar";
$tdataUserView[".viewFields"][] = "Minit";
$tdataUserView[".viewFields"][] = "Penerima";
$tdataUserView[".viewFields"][] = "Catatan";
$tdataUserView[".viewFields"][] = "Email_Status";

$tdataUserView[".addFields"] = array();
$tdataUserView[".addFields"][] = "siid";
$tdataUserView[".addFields"][] = "Tarikh";
$tdataUserView[".addFields"][] = "Penghantar";
$tdataUserView[".addFields"][] = "Minit";
$tdataUserView[".addFields"][] = "Penerima";
$tdataUserView[".addFields"][] = "Catatan";
$tdataUserView[".addFields"][] = "Email_Status";

$tdataUserView[".inlineAddFields"] = array();
$tdataUserView[".inlineAddFields"][] = "siid";
$tdataUserView[".inlineAddFields"][] = "Tarikh";
$tdataUserView[".inlineAddFields"][] = "Penghantar";
$tdataUserView[".inlineAddFields"][] = "Minit";
$tdataUserView[".inlineAddFields"][] = "Penerima";
$tdataUserView[".inlineAddFields"][] = "Catatan";
$tdataUserView[".inlineAddFields"][] = "Email_Status";

$tdataUserView[".editFields"] = array();
$tdataUserView[".editFields"][] = "siid";
$tdataUserView[".editFields"][] = "Tarikh";
$tdataUserView[".editFields"][] = "Penghantar";
$tdataUserView[".editFields"][] = "Minit";
$tdataUserView[".editFields"][] = "Penerima";
$tdataUserView[".editFields"][] = "Catatan";
$tdataUserView[".editFields"][] = "Email_Status";

$tdataUserView[".inlineEditFields"] = array();
$tdataUserView[".inlineEditFields"][] = "siid";
$tdataUserView[".inlineEditFields"][] = "Tarikh";
$tdataUserView[".inlineEditFields"][] = "Penghantar";
$tdataUserView[".inlineEditFields"][] = "Minit";
$tdataUserView[".inlineEditFields"][] = "Penerima";
$tdataUserView[".inlineEditFields"][] = "Catatan";
$tdataUserView[".inlineEditFields"][] = "Email_Status";

$tdataUserView[".exportFields"] = array();
$tdataUserView[".exportFields"][] = "siid";
$tdataUserView[".exportFields"][] = "Tarikh";
$tdataUserView[".exportFields"][] = "Penghantar";
$tdataUserView[".exportFields"][] = "Minit";
$tdataUserView[".exportFields"][] = "Penerima";
$tdataUserView[".exportFields"][] = "Catatan";
$tdataUserView[".exportFields"][] = "Email_Status";

$tdataUserView[".printFields"] = array();
$tdataUserView[".printFields"][] = "siid";
$tdataUserView[".printFields"][] = "Tarikh";
$tdataUserView[".printFields"][] = "Penghantar";
$tdataUserView[".printFields"][] = "Minit";
$tdataUserView[".printFields"][] = "Penerima";
$tdataUserView[".printFields"][] = "Catatan";
$tdataUserView[".printFields"][] = "Email_Status";

//	siid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "siid";
	$fdata["GoodName"] = "siid";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = "Siid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "siid"; 
		$fdata["FullName"] = "siid";
	
		
		
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
	
		
		
	$tdataUserView["siid"] = $fdata;
//	Tarikh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tarikh";
	$fdata["GoodName"] = "Tarikh";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = "Tarikh"; 
	$fdata["FieldType"] = 135;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Tarikh"; 
		$fdata["FullName"] = "Tarikh";
	
		
		
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
	
		
		
	$tdataUserView["Tarikh"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = "Pilihan"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sid"; 
		$fdata["FullName"] = "sid";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataUserView["sid"] = $fdata;
//	Penghantar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Penghantar";
	$fdata["GoodName"] = "Penghantar";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = "Penghantar"; 
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
	
		$fdata["strField"] = "Penghantar"; 
		$fdata["FullName"] = "Penghantar";
	
		
		
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
	
		
		
	$tdataUserView["Penghantar"] = $fdata;
//	Minit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Minit";
	$fdata["GoodName"] = "Minit";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = "Minit"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Minit"; 
		$fdata["FullName"] = "Minit";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataUserView["Minit"] = $fdata;
//	Penerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Penerima";
	$fdata["GoodName"] = "Penerima";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = "Penerima"; 
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
	
		$fdata["strField"] = "Penerima"; 
		$fdata["FullName"] = "Penerima";
	
		
		
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
	
		
		
	$tdataUserView["Penerima"] = $fdata;
//	Catatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Catatan";
	$fdata["GoodName"] = "Catatan";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = "Catatan"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Catatan"; 
		$fdata["FullName"] = "Catatan";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataUserView["Catatan"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = ""; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Status"; 
		$fdata["FullName"] = "Status";
	
		
		
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
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "stid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "status";
	
		
	$edata["LookupTable"] = "status";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataUserView["Status"] = $fdata;
//	Email_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Email_Status";
	$fdata["GoodName"] = "Email_Status";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = "Email Status"; 
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
	
		$fdata["strField"] = "Email_Status"; 
		$fdata["FullName"] = "Email_Status";
	
		
		
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
	
		
		
	$tdataUserView["Email_Status"] = $fdata;

	
$tables_data["UserView"]=&$tdataUserView;
$field_labels["UserView"] = &$fieldLabelsUserView;
$fieldToolTips["UserView"] = &$fieldToolTipsUserView;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["UserView"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["UserView"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_UserView()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "siid,   Tarikh,   sid,   Penghantar,   Minit,   Penerima,   Catatan,   Status,   Email_Status";
$proto0["m_strFrom"] = "FROM surat_individu";
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
	"m_strName" => "siid",
	"m_strTable" => "surat_individu"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Tarikh",
	"m_strTable" => "surat_individu"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "surat_individu"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Penghantar",
	"m_strTable" => "surat_individu"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Minit",
	"m_strTable" => "surat_individu"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Penerima",
	"m_strTable" => "surat_individu"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Catatan",
	"m_strTable" => "surat_individu"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "surat_individu"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Email_Status",
	"m_strTable" => "surat_individu"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "surat_individu";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "siid";
$proto24["m_columns"][] = "Tarikh";
$proto24["m_columns"][] = "sid";
$proto24["m_columns"][] = "Penghantar";
$proto24["m_columns"][] = "Minit";
$proto24["m_columns"][] = "Penerima";
$proto24["m_columns"][] = "Catatan";
$proto24["m_columns"][] = "Status";
$proto24["m_columns"][] = "Email_Status";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_alias"] = "";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = "0";
$proto25["m_inBrackets"] = "0";
$proto25["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_UserView = createSqlQuery_UserView();
									$tdataUserView[".sqlquery"] = $queryData_UserView;
	
if(isset($tdataUserView["field2"])){
	$tdataUserView["field2"]["LookupTable"] = "carscars_view";
	$tdataUserView["field2"]["LookupOrderBy"] = "name";
	$tdataUserView["field2"]["LookupType"] = 4;
	$tdataUserView["field2"]["LinkField"] = "email";
	$tdataUserView["field2"]["DisplayField"] = "name";
	$tdataUserView[".hasCustomViewField"] = true;
}

include_once(getabspath("include/UserView_events.php"));
$tableEvents["UserView"] = new eventclass_UserView;
$tdataUserView[".hasEvents"] = true;

$cipherer = new RunnerCipherer("UserView");

?>