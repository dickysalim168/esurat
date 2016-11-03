<?php
require_once(getabspath("classes/cipherer.php"));
$tdatasurat_editor2 = array();
	$tdatasurat_editor2[".NumberOfChars"] = 80; 
	$tdatasurat_editor2[".ShortName"] = "surat_editor2";
	$tdatasurat_editor2[".OwnerID"] = "pendaftar";
	$tdatasurat_editor2[".OriginalTable"] = "surat";

//	field labels
$fieldLabelssurat_editor2 = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelssurat_editor2["Malay"] = array();
	$fieldToolTipssurat_editor2["Malay"] = array();
	$fieldLabelssurat_editor2["Malay"]["sid"] = "Pilihan";
	$fieldToolTipssurat_editor2["Malay"]["sid"] = "";
	$fieldLabelssurat_editor2["Malay"]["rujukanSurat"] = "No Rujukan Surat";
	$fieldToolTipssurat_editor2["Malay"]["rujukanSurat"] = "";
	$fieldLabelssurat_editor2["Malay"]["TajukSurat"] = "Tajuk Surat";
	$fieldToolTipssurat_editor2["Malay"]["TajukSurat"] = "";
	$fieldLabelssurat_editor2["Malay"]["RingkasanKandungan"] = "Ringkasan Kandungan";
	$fieldToolTipssurat_editor2["Malay"]["RingkasanKandungan"] = "";
	$fieldLabelssurat_editor2["Malay"]["siid"] = "Siid";
	$fieldToolTipssurat_editor2["Malay"]["siid"] = "";
	$fieldLabelssurat_editor2["Malay"]["Tarikh"] = "Tarikh";
	$fieldToolTipssurat_editor2["Malay"]["Tarikh"] = "";
	$fieldLabelssurat_editor2["Malay"]["Catatan"] = "Catatan";
	$fieldToolTipssurat_editor2["Malay"]["Catatan"] = "";
	$fieldLabelssurat_editor2["Malay"]["Penghantar"] = "Penghantar";
	$fieldToolTipssurat_editor2["Malay"]["Penghantar"] = "";
	$fieldLabelssurat_editor2["Malay"]["Penerima"] = "Penerima";
	$fieldToolTipssurat_editor2["Malay"]["Penerima"] = "";
	$fieldLabelssurat_editor2["Malay"]["status"] = "Status";
	$fieldToolTipssurat_editor2["Malay"]["status"] = "";
	$fieldLabelssurat_editor2["Malay"]["Email_Status"] = "Email Status";
	$fieldToolTipssurat_editor2["Malay"]["Email_Status"] = "";
	$fieldLabelssurat_editor2["Malay"]["Status"] = "Status";
	$fieldToolTipssurat_editor2["Malay"]["Status"] = "";
	if (count($fieldToolTipssurat_editor2["Malay"]))
		$tdatasurat_editor2[".isUseToolTips"] = true;
}
	
	
	$tdatasurat_editor2[".NCSearch"] = true;



$tdatasurat_editor2[".shortTableName"] = "surat_editor2";
$tdatasurat_editor2[".nSecOptions"] = 1;
$tdatasurat_editor2[".recsPerRowList"] = 1;
$tdatasurat_editor2[".mainTableOwnerID"] = "pendaftar";
$tdatasurat_editor2[".moveNext"] = 1;
$tdatasurat_editor2[".nType"] = 1;

$tdatasurat_editor2[".strOriginalTableName"] = "surat";




$tdatasurat_editor2[".showAddInPopup"] = false;

$tdatasurat_editor2[".showEditInPopup"] = false;

$tdatasurat_editor2[".showViewInPopup"] = false;

$tdatasurat_editor2[".fieldsForRegister"] = array();
	
$tdatasurat_editor2[".listAjax"] = false;

	$tdatasurat_editor2[".audit"] = false;

	$tdatasurat_editor2[".locking"] = false;

$tdatasurat_editor2[".listIcons"] = true;
$tdatasurat_editor2[".edit"] = true;




$tdatasurat_editor2[".showSimpleSearchOptions"] = false;

$tdatasurat_editor2[".showSearchPanel"] = true;

if (isMobile())
	$tdatasurat_editor2[".isUseAjaxSuggest"] = false;
else 
	$tdatasurat_editor2[".isUseAjaxSuggest"] = true;

$tdatasurat_editor2[".rowHighlite"] = true;

// button handlers file names
$tdatasurat_editor2[".isUsebuttonHandlers"] = true;

$tdatasurat_editor2[".addPageEvents"] = false;

// use datepicker for search panel
$tdatasurat_editor2[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdatasurat_editor2[".isUseTimeForSearch"] = false;




$tdatasurat_editor2[".allSearchFields"] = array();

$tdatasurat_editor2[".allSearchFields"][] = "siid";
$tdatasurat_editor2[".allSearchFields"][] = "Tarikh";
$tdatasurat_editor2[".allSearchFields"][] = "Penghantar";
$tdatasurat_editor2[".allSearchFields"][] = "Penerima";
$tdatasurat_editor2[".allSearchFields"][] = "Catatan";
$tdatasurat_editor2[".allSearchFields"][] = "Status";
$tdatasurat_editor2[".allSearchFields"][] = "Email_Status";
$tdatasurat_editor2[".allSearchFields"][] = "rujukanSurat";
$tdatasurat_editor2[".allSearchFields"][] = "RingkasanKandungan";

$tdatasurat_editor2[".googleLikeFields"][] = "siid";
$tdatasurat_editor2[".googleLikeFields"][] = "Tarikh";
$tdatasurat_editor2[".googleLikeFields"][] = "Penghantar";
$tdatasurat_editor2[".googleLikeFields"][] = "Penerima";
$tdatasurat_editor2[".googleLikeFields"][] = "Catatan";
$tdatasurat_editor2[".googleLikeFields"][] = "Status";
$tdatasurat_editor2[".googleLikeFields"][] = "Email_Status";
$tdatasurat_editor2[".googleLikeFields"][] = "rujukanSurat";
$tdatasurat_editor2[".googleLikeFields"][] = "RingkasanKandungan";


$tdatasurat_editor2[".advSearchFields"][] = "siid";
$tdatasurat_editor2[".advSearchFields"][] = "Tarikh";
$tdatasurat_editor2[".advSearchFields"][] = "Penghantar";
$tdatasurat_editor2[".advSearchFields"][] = "Penerima";
$tdatasurat_editor2[".advSearchFields"][] = "Catatan";
$tdatasurat_editor2[".advSearchFields"][] = "Status";
$tdatasurat_editor2[".advSearchFields"][] = "Email_Status";
$tdatasurat_editor2[".advSearchFields"][] = "rujukanSurat";
$tdatasurat_editor2[".advSearchFields"][] = "RingkasanKandungan";

$tdatasurat_editor2[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatasurat_editor2[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY surat_individu.Tarikh DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasurat_editor2[".strOrderBy"] = $tstrOrderBy;

$tdatasurat_editor2[".orderindexes"] = array();
$tdatasurat_editor2[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "surat_individu.Tarikh");

$tdatasurat_editor2[".sqlHead"] = "SELECT surat_individu.siid,  surat_individu.Tarikh,  surat_individu.sid,  surat_individu.Penghantar,  surat_individu.Penerima,  surat_individu.Catatan,  surat_individu.Status,  surat_individu.Email_Status,  surat.rujukanSurat,  surat.RingkasanKandungan";
$tdatasurat_editor2[".sqlFrom"] = "FROM surat_individu  , surat";
$tdatasurat_editor2[".sqlWhereExpr"] = "(surat.sid = surat_individu.sid)";
$tdatasurat_editor2[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'PTG1',
					   'tabName'=>"PTG",
					   'nType'=>'1',
					   'nOrder'=>11,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Agensi1',
					   'tabName'=>"Agensi",
					   'nType'=>'1',
					   'nOrder'=>12,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Awam1',
					   'tabName'=>"Awam",
					   'nType'=>'1',
					   'nOrder'=>13,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatasurat_editor2[".arrEditTabs"] = $arrEditTabs;

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
$tdatasurat_editor2[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'PTG1',
					   'tabName'=>"PTG",
					   'nType'=>'1',
					   'nOrder'=>7,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Agensi1',
					   'tabName'=>"Agensi",
					   'nType'=>'1',
					   'nOrder'=>11,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Awam1',
					   'tabName'=>"Awam",
					   'nType'=>'1',
					   'nOrder'=>13,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatasurat_editor2[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasurat_editor2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasurat_editor2[".arrGroupsPerPage"] = $arrGPP;

$tableKeyssurat_editor2 = array();
$tableKeyssurat_editor2[] = "rujukanSurat";
$tdatasurat_editor2[".Keys"] = $tableKeyssurat_editor2;

$tdatasurat_editor2[".listFields"] = array();
$tdatasurat_editor2[".listFields"][] = "siid";
$tdatasurat_editor2[".listFields"][] = "Tarikh";
$tdatasurat_editor2[".listFields"][] = "Penghantar";
$tdatasurat_editor2[".listFields"][] = "Penerima";
$tdatasurat_editor2[".listFields"][] = "Catatan";
$tdatasurat_editor2[".listFields"][] = "Status";
$tdatasurat_editor2[".listFields"][] = "Email_Status";
$tdatasurat_editor2[".listFields"][] = "rujukanSurat";
$tdatasurat_editor2[".listFields"][] = "RingkasanKandungan";

$tdatasurat_editor2[".viewFields"] = array();

$tdatasurat_editor2[".addFields"] = array();
$tdatasurat_editor2[".addFields"][] = "Status";
$tdatasurat_editor2[".addFields"][] = "rujukanSurat";
$tdatasurat_editor2[".addFields"][] = "RingkasanKandungan";

$tdatasurat_editor2[".inlineAddFields"] = array();

$tdatasurat_editor2[".editFields"] = array();
$tdatasurat_editor2[".editFields"][] = "Tarikh";
$tdatasurat_editor2[".editFields"][] = "Penghantar";
$tdatasurat_editor2[".editFields"][] = "Penerima";
$tdatasurat_editor2[".editFields"][] = "Catatan";
$tdatasurat_editor2[".editFields"][] = "Status";
$tdatasurat_editor2[".editFields"][] = "Email_Status";
$tdatasurat_editor2[".editFields"][] = "siid";
$tdatasurat_editor2[".editFields"][] = "sid";
$tdatasurat_editor2[".editFields"][] = "rujukanSurat";
$tdatasurat_editor2[".editFields"][] = "RingkasanKandungan";

$tdatasurat_editor2[".inlineEditFields"] = array();

$tdatasurat_editor2[".exportFields"] = array();

$tdatasurat_editor2[".printFields"] = array();

//	siid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "siid";
	$fdata["GoodName"] = "siid";
	$fdata["ownerTable"] = "surat_editor2";
	$fdata["Label"] = "Siid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "siid"; 
		$fdata["FullName"] = "surat_individu.siid";
	
		
		
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
	
		
		
	$tdatasurat_editor2["siid"] = $fdata;
//	Tarikh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tarikh";
	$fdata["GoodName"] = "Tarikh";
	$fdata["ownerTable"] = "surat_editor2";
	$fdata["Label"] = "Tarikh"; 
	$fdata["FieldType"] = 135;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Tarikh"; 
		$fdata["FullName"] = "surat_individu.Tarikh";
	
		
		
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
	
		
		
	$tdatasurat_editor2["Tarikh"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "surat_editor2";
	$fdata["Label"] = "Pilihan"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "sid"; 
		$fdata["FullName"] = "surat_individu.sid";
	
		
		
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
	
		
		
	$tdatasurat_editor2["sid"] = $fdata;
//	Penghantar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Penghantar";
	$fdata["GoodName"] = "Penghantar";
	$fdata["ownerTable"] = "surat_editor2";
	$fdata["Label"] = "Penghantar"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Penghantar"; 
		$fdata["FullName"] = "surat_individu.Penghantar";
	
		
		
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
	
		
		
	$tdatasurat_editor2["Penghantar"] = $fdata;
//	Penerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Penerima";
	$fdata["GoodName"] = "Penerima";
	$fdata["ownerTable"] = "surat_editor2";
	$fdata["Label"] = "Penerima"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Penerima"; 
		$fdata["FullName"] = "surat_individu.Penerima";
	
		
		
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
	
		
		
	$tdatasurat_editor2["Penerima"] = $fdata;
//	Catatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Catatan";
	$fdata["GoodName"] = "Catatan";
	$fdata["ownerTable"] = "surat_editor2";
	$fdata["Label"] = "Catatan"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Catatan"; 
		$fdata["FullName"] = "surat_individu.Catatan";
	
		
		
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
	
		
		
	$tdatasurat_editor2["Catatan"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "surat_editor2";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Status"; 
		$fdata["FullName"] = "surat_individu.Status";
	
		
		
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
	
		
		
	$tdatasurat_editor2["Status"] = $fdata;
//	Email_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email_Status";
	$fdata["GoodName"] = "Email_Status";
	$fdata["ownerTable"] = "surat_editor2";
	$fdata["Label"] = "Email Status"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Email_Status"; 
		$fdata["FullName"] = "surat_individu.Email_Status";
	
		
		
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
	
		
		
	$tdatasurat_editor2["Email_Status"] = $fdata;
//	rujukanSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rujukanSurat";
	$fdata["GoodName"] = "rujukanSurat";
	$fdata["ownerTable"] = "surat_editor2";
	$fdata["Label"] = "No Rujukan Surat"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "rujukanSurat"; 
		$fdata["FullName"] = "surat.rujukanSurat";
	
		
		
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
			
		$edata["inputStyle"] = " width:400px;";
	$edata["controlWidth"] = 400;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasurat_editor2["rujukanSurat"] = $fdata;
//	RingkasanKandungan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "RingkasanKandungan";
	$fdata["GoodName"] = "RingkasanKandungan";
	$fdata["ownerTable"] = "surat_editor2";
	$fdata["Label"] = "Ringkasan Kandungan"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "RingkasanKandungan"; 
		$fdata["FullName"] = "surat.RingkasanKandungan";
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 500;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasurat_editor2["RingkasanKandungan"] = $fdata;

	
$tables_data["surat_editor2"]=&$tdatasurat_editor2;
$field_labels["surat_editor2"] = &$fieldLabelssurat_editor2;
$fieldToolTips["surat_editor2"] = &$fieldToolTipssurat_editor2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["surat_editor2"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["surat_editor2"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_surat_editor2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "surat_individu.siid,  surat_individu.Tarikh,  surat_individu.sid,  surat_individu.Penghantar,  surat_individu.Penerima,  surat_individu.Catatan,  surat_individu.Status,  surat_individu.Email_Status,  surat.rujukanSurat,  surat.RingkasanKandungan";
$proto0["m_strFrom"] = "FROM surat_individu  , surat";
$proto0["m_strWhere"] = "(surat.sid = surat_individu.sid)";
$proto0["m_strOrderBy"] = "ORDER BY surat_individu.Tarikh DESC";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "surat.sid = surat_individu.sid";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "surat"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "= surat_individu.sid";
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
	"m_strName" => "Penerima",
	"m_strTable" => "surat_individu"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Catatan",
	"m_strTable" => "surat_individu"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "surat_individu"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Email_Status",
	"m_strTable" => "surat_individu"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "rujukanSurat",
	"m_strTable" => "surat"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "RingkasanKandungan",
	"m_strTable" => "surat"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "surat_individu";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "siid";
$proto26["m_columns"][] = "Tarikh";
$proto26["m_columns"][] = "sid";
$proto26["m_columns"][] = "Penghantar";
$proto26["m_columns"][] = "Minit";
$proto26["m_columns"][] = "Penerima";
$proto26["m_columns"][] = "Catatan";
$proto26["m_columns"][] = "Status";
$proto26["m_columns"][] = "Email_Status";
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
$proto30["m_strName"] = "surat";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "sid";
$proto30["m_columns"][] = "tarikhTerima";
$proto30["m_columns"][] = "Jenis";
$proto30["m_columns"][] = "awam";
$proto30["m_columns"][] = "agensi";
$proto30["m_columns"][] = "bahagian";
$proto30["m_columns"][] = "individu";
$proto30["m_columns"][] = "jawatan";
$proto30["m_columns"][] = "kategori";
$proto30["m_columns"][] = "rujukanSurat";
$proto30["m_columns"][] = "RingkasanKandungan";
$proto30["m_columns"][] = "tarikhSurat";
$proto30["m_columns"][] = "status";
$proto30["m_columns"][] = "Imbas";
$proto30["m_columns"][] = "pendaftar";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "Tarikh",
	"m_strTable" => "surat_individu"
));

$proto33["m_column"]=$obj;
$proto33["m_bAsc"] = 0;
$proto33["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto33);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_surat_editor2 = createSqlQuery_surat_editor2();
										$tdatasurat_editor2[".sqlquery"] = $queryData_surat_editor2;
	
if(isset($tdatasurat_editor2["field2"])){
	$tdatasurat_editor2["field2"]["LookupTable"] = "carscars_view";
	$tdatasurat_editor2["field2"]["LookupOrderBy"] = "name";
	$tdatasurat_editor2["field2"]["LookupType"] = 4;
	$tdatasurat_editor2["field2"]["LinkField"] = "email";
	$tdatasurat_editor2["field2"]["DisplayField"] = "name";
	$tdatasurat_editor2[".hasCustomViewField"] = true;
}

include_once(getabspath("include/surat_editor2_events.php"));
$tableEvents["surat_editor2"] = new eventclass_surat_editor2;
$tdatasurat_editor2[".hasEvents"] = true;

$cipherer = new RunnerCipherer("surat_editor2");

?>