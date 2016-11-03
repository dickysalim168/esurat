<?php
require_once(getabspath("classes/cipherer.php"));
$tdatasuratview3 = array();
	$tdatasuratview3[".NumberOfChars"] = 80; 
	$tdatasuratview3[".ShortName"] = "suratview3";
	$tdatasuratview3[".OwnerID"] = "";
	$tdatasuratview3[".OriginalTable"] = "surat";

//	field labels
$fieldLabelssuratview3 = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelssuratview3["Malay"] = array();
	$fieldToolTipssuratview3["Malay"] = array();
	$fieldLabelssuratview3["Malay"]["sid"] = "Pilihan";
	$fieldToolTipssuratview3["Malay"]["sid"] = "";
	$fieldLabelssuratview3["Malay"]["tarikhTerima"] = "Tarikh Terima";
	$fieldToolTipssuratview3["Malay"]["tarikhTerima"] = "";
	$fieldLabelssuratview3["Malay"]["kategori"] = "Kategori";
	$fieldToolTipssuratview3["Malay"]["kategori"] = "";
	$fieldLabelssuratview3["Malay"]["rujukanSurat"] = "No Rujukan Surat";
	$fieldToolTipssuratview3["Malay"]["rujukanSurat"] = "";
	$fieldLabelssuratview3["Malay"]["tarikhSurat"] = "Tarikh Surat";
	$fieldToolTipssuratview3["Malay"]["tarikhSurat"] = "";
	$fieldLabelssuratview3["Malay"]["Jenis"] = "Jenis";
	$fieldToolTipssuratview3["Malay"]["Jenis"] = "";
	$fieldLabelssuratview3["Malay"]["awam"] = "Awam";
	$fieldToolTipssuratview3["Malay"]["awam"] = "";
	$fieldLabelssuratview3["Malay"]["agensi"] = "Agensi";
	$fieldToolTipssuratview3["Malay"]["agensi"] = "";
	$fieldLabelssuratview3["Malay"]["bahagian"] = "Bahagian";
	$fieldToolTipssuratview3["Malay"]["bahagian"] = "";
	$fieldLabelssuratview3["Malay"]["individu"] = "Individu";
	$fieldToolTipssuratview3["Malay"]["individu"] = "";
	$fieldLabelssuratview3["Malay"]["jawatan"] = "Jawatan";
	$fieldToolTipssuratview3["Malay"]["jawatan"] = "";
	$fieldLabelssuratview3["Malay"]["TajukSurat"] = "Tajuk Surat";
	$fieldToolTipssuratview3["Malay"]["TajukSurat"] = "";
	$fieldLabelssuratview3["Malay"]["RingkasanKandungan"] = "Ringkasan Kandungan";
	$fieldToolTipssuratview3["Malay"]["RingkasanKandungan"] = "";
	$fieldLabelssuratview3["Malay"]["Imbas"] = "Imbas";
	$fieldToolTipssuratview3["Malay"]["Imbas"] = "";
	$fieldLabelssuratview3["Malay"]["pendaftar"] = "Pendaftar";
	$fieldToolTipssuratview3["Malay"]["pendaftar"] = "";
	if (count($fieldToolTipssuratview3["Malay"]))
		$tdatasuratview3[".isUseToolTips"] = true;
}
	
	
	$tdatasuratview3[".NCSearch"] = true;



$tdatasuratview3[".shortTableName"] = "suratview3";
$tdatasuratview3[".nSecOptions"] = 0;
$tdatasuratview3[".recsPerRowList"] = 1;
$tdatasuratview3[".mainTableOwnerID"] = "";
$tdatasuratview3[".moveNext"] = 1;
$tdatasuratview3[".nType"] = 1;

$tdatasuratview3[".strOriginalTableName"] = "surat";




$tdatasuratview3[".showAddInPopup"] = false;

$tdatasuratview3[".showEditInPopup"] = false;

$tdatasuratview3[".showViewInPopup"] = false;

$tdatasuratview3[".fieldsForRegister"] = array();
	
$tdatasuratview3[".listAjax"] = false;

	$tdatasuratview3[".audit"] = false;

	$tdatasuratview3[".locking"] = false;

$tdatasuratview3[".listIcons"] = true;
$tdatasuratview3[".edit"] = true;




$tdatasuratview3[".showSimpleSearchOptions"] = false;

$tdatasuratview3[".showSearchPanel"] = true;

if (isMobile())
	$tdatasuratview3[".isUseAjaxSuggest"] = false;
else 
	$tdatasuratview3[".isUseAjaxSuggest"] = true;

$tdatasuratview3[".rowHighlite"] = true;

// button handlers file names
$tdatasuratview3[".isUsebuttonHandlers"] = true;

$tdatasuratview3[".addPageEvents"] = false;

// use datepicker for search panel
$tdatasuratview3[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdatasuratview3[".isUseTimeForSearch"] = false;




$tdatasuratview3[".allSearchFields"] = array();


$tdatasuratview3[".googleLikeFields"][] = "tarikhSurat";
$tdatasuratview3[".googleLikeFields"][] = "tarikhTerima";
$tdatasuratview3[".googleLikeFields"][] = "rujukanSurat";
$tdatasuratview3[".googleLikeFields"][] = "RingkasanKandungan";
$tdatasuratview3[".googleLikeFields"][] = "Jenis";
$tdatasuratview3[".googleLikeFields"][] = "kategori";
$tdatasuratview3[".googleLikeFields"][] = "individu";
$tdatasuratview3[".googleLikeFields"][] = "bahagian";
$tdatasuratview3[".googleLikeFields"][] = "jawatan";
$tdatasuratview3[".googleLikeFields"][] = "agensi";
$tdatasuratview3[".googleLikeFields"][] = "awam";



$tdatasuratview3[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatasuratview3[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasuratview3[".strOrderBy"] = $tstrOrderBy;

$tdatasuratview3[".orderindexes"] = array();

$tdatasuratview3[".sqlHead"] = "SELECT sid,  tarikhTerima,  Jenis,  awam,  agensi,  bahagian,  individu,  jawatan,  kategori,  rujukanSurat,  RingkasanKandungan,  tarikhSurat,  Imbas,  pendaftar";
$tdatasuratview3[".sqlFrom"] = "FROM surat";
$tdatasuratview3[".sqlWhereExpr"] = "";
$tdatasuratview3[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "individu";
	$tabFields[] = "bahagian";
	$tabFields[] = "jawatan";
$arrEditTabs[] = array('tabId'=>'PTG1',
					   'tabName'=>"PTG",
					   'nType'=>'1',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "agensi";
$arrEditTabs[] = array('tabId'=>'Agensi1',
					   'tabName'=>"Agensi",
					   'nType'=>'1',
					   'nOrder'=>5,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "awam";
$arrEditTabs[] = array('tabId'=>'Awam1',
					   'tabName'=>"Awam",
					   'nType'=>'1',
					   'nOrder'=>7,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatasuratview3[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "individu";
	$tabFields[] = "bahagian";
	$tabFields[] = "jawatan";
$arrAddTabs[] = array('tabId'=>'PTG1',
					  'tabName'=>"PTG",
					  'nType'=>'1',
					  'nOrder'=>7,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "agensi";
$arrAddTabs[] = array('tabId'=>'Agensi1',
					  'tabName'=>"Agensi",
					  'nType'=>'1',
					  'nOrder'=>11,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "awam";
$arrAddTabs[] = array('tabId'=>'Awam1',
					  'tabName'=>"Awam",
					  'nType'=>'1',
					  'nOrder'=>13,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatasuratview3[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "individu";
	$tabFields[] = "bahagian";
	$tabFields[] = "jawatan";
$arrViewTabs[] = array('tabId'=>'PTG1',
					   'tabName'=>"PTG",
					   'nType'=>'1',
					   'nOrder'=>7,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "agensi";
$arrViewTabs[] = array('tabId'=>'Agensi1',
					   'tabName'=>"Agensi",
					   'nType'=>'1',
					   'nOrder'=>11,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "awam";
$arrViewTabs[] = array('tabId'=>'Awam1',
					   'tabName'=>"Awam",
					   'nType'=>'1',
					   'nOrder'=>13,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatasuratview3[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasuratview3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasuratview3[".arrGroupsPerPage"] = $arrGPP;

$tableKeyssuratview3 = array();
$tableKeyssuratview3[] = "sid";
$tdatasuratview3[".Keys"] = $tableKeyssuratview3;

$tdatasuratview3[".listFields"] = array();

$tdatasuratview3[".viewFields"] = array();

$tdatasuratview3[".addFields"] = array();

$tdatasuratview3[".inlineAddFields"] = array();

$tdatasuratview3[".editFields"] = array();
$tdatasuratview3[".editFields"][] = "individu";
$tdatasuratview3[".editFields"][] = "bahagian";
$tdatasuratview3[".editFields"][] = "jawatan";
$tdatasuratview3[".editFields"][] = "agensi";
$tdatasuratview3[".editFields"][] = "awam";

$tdatasuratview3[".inlineEditFields"] = array();

$tdatasuratview3[".exportFields"] = array();

$tdatasuratview3[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Pilihan"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sid"; 
		$fdata["FullName"] = "sid";
	
		
		
				
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
	
		
		
	$tdatasuratview3["sid"] = $fdata;
//	tarikhTerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tarikhTerima";
	$fdata["GoodName"] = "tarikhTerima";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Tarikh Terima"; 
	$fdata["FieldType"] = 7;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "tarikhTerima"; 
		$fdata["FullName"] = "tarikhTerima";
	
		
		
				
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasuratview3["tarikhTerima"] = $fdata;
//	Jenis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Jenis";
	$fdata["GoodName"] = "Jenis";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Jenis"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Jenis"; 
		$fdata["FullName"] = "Jenis";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "jid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "jenis";
	
		
	$edata["LookupTable"] = "surat_jenis";
	$edata["LookupOrderBy"] = "jenis";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasuratview3["Jenis"] = $fdata;
//	awam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "awam";
	$fdata["GoodName"] = "awam";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Awam"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "awam"; 
		$fdata["FullName"] = "awam";
	
		
		
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
				if(strpos(GetUserPermissions("suratview3"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "awid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nama";
	
		
	$edata["LookupTable"] = "awam";
	$edata["LookupOrderBy"] = "nama";
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:400px;";
	$edata["controlWidth"] = 400;
	
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasuratview3["awam"] = $fdata;
//	agensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "agensi";
	$fdata["GoodName"] = "agensi";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Agensi"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "agensi"; 
		$fdata["FullName"] = "agensi";
	
		
		
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
				if(strpos(GetUserPermissions("suratview3"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "aid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nama";
	
		
	$edata["LookupTable"] = "agensi";
	$edata["LookupOrderBy"] = "nama";
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:400px;";
	$edata["controlWidth"] = 400;
	
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasuratview3["agensi"] = $fdata;
//	bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "bahagian";
	$fdata["GoodName"] = "bahagian";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Bahagian"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "bahagian"; 
		$fdata["FullName"] = "bahagian";
	
		
		
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
			
		$edata["inputStyle"] = " width:400px;";
	$edata["controlWidth"] = 400;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasuratview3["bahagian"] = $fdata;
//	individu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "individu";
	$fdata["GoodName"] = "individu";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Individu"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "individu"; 
		$fdata["FullName"] = "individu";
	
		
		
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
				if(strpos(GetUserPermissions("suratview3"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "staff_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";
	
		
	$edata["LookupTable"] = "surat_Kepada";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:400px;";
	$edata["controlWidth"] = 400;
	
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasuratview3["individu"] = $fdata;
//	jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "jawatan";
	$fdata["GoodName"] = "jawatan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Jawatan"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "jawatan"; 
		$fdata["FullName"] = "jawatan";
	
		
		
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
			
		$edata["inputStyle"] = " width:400px;";
	$edata["controlWidth"] = 400;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasuratview3["jawatan"] = $fdata;
//	kategori
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "kategori";
	$fdata["GoodName"] = "kategori";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Kategori"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "kategori"; 
		$fdata["FullName"] = "kategori";
	
		
		
				
					
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
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Biasa";
	$edata["LookupValues"][] = "Mesyuarat";
	$edata["LookupValues"][] = "Sulit";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasuratview3["kategori"] = $fdata;
//	rujukanSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rujukanSurat";
	$fdata["GoodName"] = "rujukanSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "No Rujukan Surat"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "rujukanSurat"; 
		$fdata["FullName"] = "rujukanSurat";
	
		
		
				
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
	
		
		
	$tdatasuratview3["rujukanSurat"] = $fdata;
//	RingkasanKandungan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RingkasanKandungan";
	$fdata["GoodName"] = "RingkasanKandungan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Ringkasan Kandungan"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "RingkasanKandungan"; 
		$fdata["FullName"] = "RingkasanKandungan";
	
		
		
				
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
	
		
		
	$tdatasuratview3["RingkasanKandungan"] = $fdata;
//	tarikhSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "tarikhSurat";
	$fdata["GoodName"] = "tarikhSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Tarikh Surat"; 
	$fdata["FieldType"] = 7;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "tarikhSurat"; 
		$fdata["FullName"] = "tarikhSurat";
	
		
		
				
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasuratview3["tarikhSurat"] = $fdata;
//	Imbas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Imbas";
	$fdata["GoodName"] = "Imbas";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Imbas"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Imbas"; 
		$fdata["FullName"] = "Imbas";
	
		
		
				
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
	
		
		
	$tdatasuratview3["Imbas"] = $fdata;
//	pendaftar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "pendaftar";
	$fdata["GoodName"] = "pendaftar";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Pendaftar"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "pendaftar"; 
		$fdata["FullName"] = "pendaftar";
	
		
		
				
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
				
		
			
	$edata["LinkField"] = "staff_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";
	
		
	$edata["LookupTable"] = "pejawatan_staffdetails";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasuratview3["pendaftar"] = $fdata;

	
$tables_data["suratview3"]=&$tdatasuratview3;
$field_labels["suratview3"] = &$fieldLabelssuratview3;
$fieldToolTips["suratview3"] = &$fieldToolTipssuratview3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["suratview3"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["suratview3"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_suratview3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  tarikhTerima,  Jenis,  awam,  agensi,  bahagian,  individu,  jawatan,  kategori,  rujukanSurat,  RingkasanKandungan,  tarikhSurat,  Imbas,  pendaftar";
$proto0["m_strFrom"] = "FROM surat";
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
	"m_strName" => "sid",
	"m_strTable" => "surat"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhTerima",
	"m_strTable" => "surat"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenis",
	"m_strTable" => "surat"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "awam",
	"m_strTable" => "surat"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "agensi",
	"m_strTable" => "surat"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "bahagian",
	"m_strTable" => "surat"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "individu",
	"m_strTable" => "surat"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "jawatan",
	"m_strTable" => "surat"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "kategori",
	"m_strTable" => "surat"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "rujukanSurat",
	"m_strTable" => "surat"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "RingkasanKandungan",
	"m_strTable" => "surat"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhSurat",
	"m_strTable" => "surat"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Imbas",
	"m_strTable" => "surat"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "pendaftar",
	"m_strTable" => "surat"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "surat";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "sid";
$proto34["m_columns"][] = "tarikhTerima";
$proto34["m_columns"][] = "Jenis";
$proto34["m_columns"][] = "awam";
$proto34["m_columns"][] = "agensi";
$proto34["m_columns"][] = "bahagian";
$proto34["m_columns"][] = "individu";
$proto34["m_columns"][] = "jawatan";
$proto34["m_columns"][] = "kategori";
$proto34["m_columns"][] = "rujukanSurat";
$proto34["m_columns"][] = "RingkasanKandungan";
$proto34["m_columns"][] = "tarikhSurat";
$proto34["m_columns"][] = "status";
$proto34["m_columns"][] = "Imbas";
$proto34["m_columns"][] = "pendaftar";
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
$queryData_suratview3 = createSqlQuery_suratview3();
														$tdatasuratview3[".sqlquery"] = $queryData_suratview3;
	
if(isset($tdatasuratview3["field2"])){
	$tdatasuratview3["field2"]["LookupTable"] = "carscars_view";
	$tdatasuratview3["field2"]["LookupOrderBy"] = "name";
	$tdatasuratview3["field2"]["LookupType"] = 4;
	$tdatasuratview3["field2"]["LinkField"] = "email";
	$tdatasuratview3["field2"]["DisplayField"] = "name";
	$tdatasuratview3[".hasCustomViewField"] = true;
}

include_once(getabspath("include/suratview3_events.php"));
$tableEvents["suratview3"] = new eventclass_suratview3;
$tdatasuratview3[".hasEvents"] = true;

$cipherer = new RunnerCipherer("suratview3");

?>