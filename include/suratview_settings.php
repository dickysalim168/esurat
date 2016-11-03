<?php
require_once(getabspath("classes/cipherer.php"));
$tdatasuratview = array();
	$tdatasuratview[".NumberOfChars"] = 80; 
	$tdatasuratview[".ShortName"] = "suratview";
	$tdatasuratview[".OwnerID"] = "iid";
	$tdatasuratview[".OriginalTable"] = "surat";

//	field labels
$fieldLabelssuratview = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelssuratview["Malay"] = array();
	$fieldToolTipssuratview["Malay"] = array();
	$fieldLabelssuratview["Malay"]["sid"] = "Pilihan";
	$fieldToolTipssuratview["Malay"]["sid"] = "";
	$fieldLabelssuratview["Malay"]["status"] = "Status";
	$fieldToolTipssuratview["Malay"]["status"] = "";
	$fieldLabelssuratview["Malay"]["TajukSurat"] = "Tajuk Surat";
	$fieldToolTipssuratview["Malay"]["TajukSurat"] = "";
	$fieldLabelssuratview["Malay"]["Penghantar"] = "Penghantar";
	$fieldToolTipssuratview["Malay"]["Penghantar"] = "";
	$fieldLabelssuratview["Malay"]["Penerima"] = "Penerima";
	$fieldToolTipssuratview["Malay"]["Penerima"] = "";
	$fieldLabelssuratview["Malay"]["siid"] = "Siid";
	$fieldToolTipssuratview["Malay"]["siid"] = "";
	$fieldLabelssuratview["Malay"]["Tarikh"] = "Tarikh";
	$fieldToolTipssuratview["Malay"]["Tarikh"] = "";
	$fieldLabelssuratview["Malay"]["Catatan"] = "Catatan";
	$fieldToolTipssuratview["Malay"]["Catatan"] = "";
	$fieldLabelssuratview["Malay"]["Email_Status"] = "Email Status";
	$fieldToolTipssuratview["Malay"]["Email_Status"] = "";
	$fieldLabelssuratview["Malay"]["Minit"] = "Minit";
	$fieldToolTipssuratview["Malay"]["Minit"] = "";
	if (count($fieldToolTipssuratview["Malay"]))
		$tdatasuratview[".isUseToolTips"] = true;
}
	
	
	$tdatasuratview[".NCSearch"] = true;



$tdatasuratview[".shortTableName"] = "suratview";
$tdatasuratview[".nSecOptions"] = 1;
$tdatasuratview[".recsPerRowList"] = 1;
$tdatasuratview[".mainTableOwnerID"] = "iid";
$tdatasuratview[".moveNext"] = 1;
$tdatasuratview[".nType"] = 1;

$tdatasuratview[".strOriginalTableName"] = "surat";




$tdatasuratview[".showAddInPopup"] = false;

$tdatasuratview[".showEditInPopup"] = false;

$tdatasuratview[".showViewInPopup"] = false;

$tdatasuratview[".fieldsForRegister"] = array();
	
$tdatasuratview[".listAjax"] = false;

	$tdatasuratview[".audit"] = false;

	$tdatasuratview[".locking"] = false;

$tdatasuratview[".listIcons"] = true;
$tdatasuratview[".edit"] = true;




$tdatasuratview[".showSimpleSearchOptions"] = false;

$tdatasuratview[".showSearchPanel"] = true;

if (isMobile())
	$tdatasuratview[".isUseAjaxSuggest"] = false;
else 
	$tdatasuratview[".isUseAjaxSuggest"] = true;

$tdatasuratview[".rowHighlite"] = true;

// button handlers file names
$tdatasuratview[".isUsebuttonHandlers"] = true;

$tdatasuratview[".addPageEvents"] = false;

// use datepicker for search panel
$tdatasuratview[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdatasuratview[".isUseTimeForSearch"] = false;




$tdatasuratview[".allSearchFields"] = array();

$tdatasuratview[".allSearchFields"][] = "Tarikh";
$tdatasuratview[".allSearchFields"][] = "Penghantar";
$tdatasuratview[".allSearchFields"][] = "Minit";
$tdatasuratview[".allSearchFields"][] = "Penerima";
$tdatasuratview[".allSearchFields"][] = "Catatan";
$tdatasuratview[".allSearchFields"][] = "Email_Status";
$tdatasuratview[".allSearchFields"][] = "siid";
$tdatasuratview[".allSearchFields"][] = "Status";

$tdatasuratview[".googleLikeFields"][] = "siid";
$tdatasuratview[".googleLikeFields"][] = "Tarikh";
$tdatasuratview[".googleLikeFields"][] = "Catatan";
$tdatasuratview[".googleLikeFields"][] = "Penghantar";
$tdatasuratview[".googleLikeFields"][] = "Minit";
$tdatasuratview[".googleLikeFields"][] = "Penerima";
$tdatasuratview[".googleLikeFields"][] = "Email_Status";
$tdatasuratview[".googleLikeFields"][] = "sid";
$tdatasuratview[".googleLikeFields"][] = "Status";


$tdatasuratview[".advSearchFields"][] = "Tarikh";
$tdatasuratview[".advSearchFields"][] = "Penghantar";
$tdatasuratview[".advSearchFields"][] = "Minit";
$tdatasuratview[".advSearchFields"][] = "Penerima";
$tdatasuratview[".advSearchFields"][] = "Catatan";
$tdatasuratview[".advSearchFields"][] = "Email_Status";
$tdatasuratview[".advSearchFields"][] = "siid";
$tdatasuratview[".advSearchFields"][] = "Status";

$tdatasuratview[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatasuratview[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasuratview[".strOrderBy"] = $tstrOrderBy;

$tdatasuratview[".orderindexes"] = array();

$tdatasuratview[".sqlHead"] = "SELECT *";
$tdatasuratview[".sqlFrom"] = "FROM surat_individu";
$tdatasuratview[".sqlWhereExpr"] = "";
$tdatasuratview[".sqlTail"] = "";


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'PTG1',
					  'tabName'=>"PTG",
					  'nType'=>'1',
					  'nOrder'=>7,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Agensi1',
					  'tabName'=>"Agensi",
					  'nType'=>'1',
					  'nOrder'=>11,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Awam1',
					  'tabName'=>"Awam",
					  'nType'=>'1',
					  'nOrder'=>13,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatasuratview[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'PTG1',
					   'tabName'=>"PTG",
					   'nType'=>'1',
					   'nOrder'=>9,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Agensi1',
					   'tabName'=>"Agensi",
					   'nType'=>'1',
					   'nOrder'=>13,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Awam1',
					   'tabName'=>"Awam",
					   'nType'=>'1',
					   'nOrder'=>15,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatasuratview[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasuratview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasuratview[".arrGroupsPerPage"] = $arrGPP;

$tableKeyssuratview = array();
$tableKeyssuratview[] = "sid";
$tdatasuratview[".Keys"] = $tableKeyssuratview;

$tdatasuratview[".listFields"] = array();
$tdatasuratview[".listFields"][] = "siid";
$tdatasuratview[".listFields"][] = "Tarikh";
$tdatasuratview[".listFields"][] = "Catatan";
$tdatasuratview[".listFields"][] = "Penghantar";
$tdatasuratview[".listFields"][] = "Minit";
$tdatasuratview[".listFields"][] = "Penerima";
$tdatasuratview[".listFields"][] = "Email_Status";
$tdatasuratview[".listFields"][] = "sid";
$tdatasuratview[".listFields"][] = "Status";

$tdatasuratview[".viewFields"] = array();
$tdatasuratview[".viewFields"][] = "siid";
$tdatasuratview[".viewFields"][] = "Tarikh";
$tdatasuratview[".viewFields"][] = "Penghantar";
$tdatasuratview[".viewFields"][] = "Minit";
$tdatasuratview[".viewFields"][] = "Penerima";
$tdatasuratview[".viewFields"][] = "Catatan";
$tdatasuratview[".viewFields"][] = "Email_Status";

$tdatasuratview[".addFields"] = array();

$tdatasuratview[".inlineAddFields"] = array();
$tdatasuratview[".inlineAddFields"][] = "siid";
$tdatasuratview[".inlineAddFields"][] = "Tarikh";
$tdatasuratview[".inlineAddFields"][] = "Penghantar";
$tdatasuratview[".inlineAddFields"][] = "Minit";
$tdatasuratview[".inlineAddFields"][] = "Penerima";
$tdatasuratview[".inlineAddFields"][] = "Catatan";
$tdatasuratview[".inlineAddFields"][] = "Email_Status";

$tdatasuratview[".editFields"] = array();

$tdatasuratview[".inlineEditFields"] = array();
$tdatasuratview[".inlineEditFields"][] = "siid";
$tdatasuratview[".inlineEditFields"][] = "Tarikh";
$tdatasuratview[".inlineEditFields"][] = "Penghantar";
$tdatasuratview[".inlineEditFields"][] = "Minit";
$tdatasuratview[".inlineEditFields"][] = "Penerima";
$tdatasuratview[".inlineEditFields"][] = "Catatan";
$tdatasuratview[".inlineEditFields"][] = "Email_Status";

$tdatasuratview[".exportFields"] = array();
$tdatasuratview[".exportFields"][] = "siid";
$tdatasuratview[".exportFields"][] = "Tarikh";
$tdatasuratview[".exportFields"][] = "Penghantar";
$tdatasuratview[".exportFields"][] = "Minit";
$tdatasuratview[".exportFields"][] = "Penerima";
$tdatasuratview[".exportFields"][] = "Catatan";
$tdatasuratview[".exportFields"][] = "Email_Status";

$tdatasuratview[".printFields"] = array();
$tdatasuratview[".printFields"][] = "siid";
$tdatasuratview[".printFields"][] = "Tarikh";
$tdatasuratview[".printFields"][] = "Penghantar";
$tdatasuratview[".printFields"][] = "Minit";
$tdatasuratview[".printFields"][] = "Penerima";
$tdatasuratview[".printFields"][] = "Catatan";
$tdatasuratview[".printFields"][] = "Email_Status";

//	siid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "siid";
	$fdata["GoodName"] = "siid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Siid"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "siid"; 
				$fdata["FullName"] = "`surat`.`siid`";
	
		
		
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
	
		
		
	$tdatasuratview["siid"] = $fdata;
//	Tarikh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tarikh";
	$fdata["GoodName"] = "Tarikh";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Tarikh"; 
	$fdata["FieldType"] = 135;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Tarikh"; 
				$fdata["FullName"] = "`surat`.`Tarikh`";
	
		
		
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
	
		
		
	$tdatasuratview["Tarikh"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Pilihan"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sid"; 
				$fdata["FullName"] = "`surat`.`sid`";
	
		
		
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
	
		
		
	$tdatasuratview["sid"] = $fdata;
//	Penghantar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Penghantar";
	$fdata["GoodName"] = "Penghantar";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Penghantar"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Penghantar"; 
				$fdata["FullName"] = "`surat`.`Penghantar`";
	
		
		
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
	
		
		
	$tdatasuratview["Penghantar"] = $fdata;
//	Minit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Minit";
	$fdata["GoodName"] = "Minit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Minit"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Minit"; 
				$fdata["FullName"] = "`surat`.`Minit`";
	
		
		
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
	
		
		
	$tdatasuratview["Minit"] = $fdata;
//	Penerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Penerima";
	$fdata["GoodName"] = "Penerima";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Penerima"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Penerima"; 
				$fdata["FullName"] = "`surat`.`Penerima`";
	
		
		
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
	
		
		
	$tdatasuratview["Penerima"] = $fdata;
//	Catatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Catatan";
	$fdata["GoodName"] = "Catatan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Catatan"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Catatan"; 
				$fdata["FullName"] = "`surat`.`Catatan`";
	
		
		
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
	
		
		
	$tdatasuratview["Catatan"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = ""; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "status"; 
				$fdata["FullName"] = "`surat`.`Status`";
	
		
		
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
	
		
		
	$tdatasuratview["Status"] = $fdata;
//	Email_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Email_Status";
	$fdata["GoodName"] = "Email_Status";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Email Status"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Email_Status"; 
				$fdata["FullName"] = "`surat`.`Email_Status`";
	
		
		
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
	
		
		
	$tdatasuratview["Email_Status"] = $fdata;

	
$tables_data["suratview"]=&$tdatasuratview;
$field_labels["suratview"] = &$fieldLabelssuratview;
$fieldToolTips["suratview"] = &$fieldToolTipssuratview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["suratview"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["suratview"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_suratview()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "*";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto7=array();
$proto7["m_link"] = "SQLL_MAIN";
			$proto8=array();
$proto8["m_strName"] = "surat_individu";
$proto8["m_columns"] = array();
$proto8["m_columns"][] = "siid";
$proto8["m_columns"][] = "Tarikh";
$proto8["m_columns"][] = "sid";
$proto8["m_columns"][] = "Penghantar";
$proto8["m_columns"][] = "Minit";
$proto8["m_columns"][] = "Penerima";
$proto8["m_columns"][] = "Catatan";
$proto8["m_columns"][] = "Status";
$proto8["m_columns"][] = "Email_Status";
$obj = new SQLTable($proto8);

$proto7["m_table"] = $obj;
$proto7["m_alias"] = "";
$proto9=array();
$proto9["m_sql"] = "";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "";
$proto9["m_havingmode"] = "0";
$proto9["m_inBrackets"] = "0";
$proto9["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto9);

$proto7["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto7);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_suratview = createSqlQuery_suratview();
									$tdatasuratview[".sqlquery"] = $queryData_suratview;
	
if(isset($tdatasuratview["field2"])){
	$tdatasuratview["field2"]["LookupTable"] = "carscars_view";
	$tdatasuratview["field2"]["LookupOrderBy"] = "name";
	$tdatasuratview["field2"]["LookupType"] = 4;
	$tdatasuratview["field2"]["LinkField"] = "email";
	$tdatasuratview["field2"]["DisplayField"] = "name";
	$tdatasuratview[".hasCustomViewField"] = true;
}

include_once(getabspath("include/suratview_events.php"));
$tableEvents["suratview"] = new eventclass_suratview;
$tdatasuratview[".hasEvents"] = true;

$cipherer = new RunnerCipherer("suratview");

?>