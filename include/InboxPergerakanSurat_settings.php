<?php
require_once(getabspath("classes/cipherer.php"));
$tdataInboxPergerakanSurat = array();
	$tdataInboxPergerakanSurat[".NumberOfChars"] = 80; 
	$tdataInboxPergerakanSurat[".ShortName"] = "InboxPergerakanSurat";
	$tdataInboxPergerakanSurat[".OwnerID"] = "iid";
	$tdataInboxPergerakanSurat[".OriginalTable"] = "surat";

//	field labels
$fieldLabelsInboxPergerakanSurat = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsInboxPergerakanSurat["Malay"] = array();
	$fieldToolTipsInboxPergerakanSurat["Malay"] = array();
	$fieldLabelsInboxPergerakanSurat["Malay"]["sid"] = "Pilihan";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["sid"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["tarikhTerima"] = "Tarikh Terima";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["tarikhTerima"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["kategori"] = "Kategori";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["kategori"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["rujukanSurat"] = "No Rujukan Surat";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["rujukanSurat"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["tarikhSurat"] = "Tarikh Surat";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["tarikhSurat"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["Jenis"] = "Jenis";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["Jenis"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["awam"] = "Awam";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["awam"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["agensi"] = "Agensi";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["agensi"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["bahagian"] = "Bahagian";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["bahagian"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["individu"] = "Individu";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["individu"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["jawatan"] = "Jawatan";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["jawatan"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["status"] = "Status";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["status"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["TajukSurat"] = "Tajuk Surat";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["TajukSurat"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["RingkasanKandungan"] = "Ringkasan Kandungan";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["RingkasanKandungan"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["Imbas"] = "Imbas";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["Imbas"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["iid"] = "Iid";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["iid"] = "";
	$fieldLabelsInboxPergerakanSurat["Malay"]["pid"] = "Pid";
	$fieldToolTipsInboxPergerakanSurat["Malay"]["pid"] = "";
	if (count($fieldToolTipsInboxPergerakanSurat["Malay"]))
		$tdataInboxPergerakanSurat[".isUseToolTips"] = true;
}
	
	
	$tdataInboxPergerakanSurat[".NCSearch"] = true;



$tdataInboxPergerakanSurat[".shortTableName"] = "InboxPergerakanSurat";
$tdataInboxPergerakanSurat[".nSecOptions"] = 2;
$tdataInboxPergerakanSurat[".recsPerRowList"] = 1;
$tdataInboxPergerakanSurat[".mainTableOwnerID"] = "iid";
$tdataInboxPergerakanSurat[".moveNext"] = 1;
$tdataInboxPergerakanSurat[".nType"] = 1;

$tdataInboxPergerakanSurat[".strOriginalTableName"] = "surat";




$tdataInboxPergerakanSurat[".showAddInPopup"] = false;

$tdataInboxPergerakanSurat[".showEditInPopup"] = false;

$tdataInboxPergerakanSurat[".showViewInPopup"] = false;

$tdataInboxPergerakanSurat[".fieldsForRegister"] = array();
	
$tdataInboxPergerakanSurat[".listAjax"] = false;

	$tdataInboxPergerakanSurat[".audit"] = false;

	$tdataInboxPergerakanSurat[".locking"] = false;

$tdataInboxPergerakanSurat[".listIcons"] = true;
$tdataInboxPergerakanSurat[".edit"] = true;
$tdataInboxPergerakanSurat[".view"] = true;



$tdataInboxPergerakanSurat[".delete"] = true;

$tdataInboxPergerakanSurat[".showSimpleSearchOptions"] = false;

$tdataInboxPergerakanSurat[".showSearchPanel"] = true;

if (isMobile())
	$tdataInboxPergerakanSurat[".isUseAjaxSuggest"] = false;
else 
	$tdataInboxPergerakanSurat[".isUseAjaxSuggest"] = true;

$tdataInboxPergerakanSurat[".rowHighlite"] = true;

// button handlers file names
$tdataInboxPergerakanSurat[".isUsebuttonHandlers"] = true;
$tdataInboxPergerakanSurat[".isUsebuttonHandlers"] = true;
$tdataInboxPergerakanSurat[".isUsebuttonHandlers"] = true;

$tdataInboxPergerakanSurat[".addPageEvents"] = false;

// use datepicker for search panel
$tdataInboxPergerakanSurat[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataInboxPergerakanSurat[".isUseTimeForSearch"] = false;




$tdataInboxPergerakanSurat[".allSearchFields"] = array();

$tdataInboxPergerakanSurat[".allSearchFields"][] = "tarikhSurat";
$tdataInboxPergerakanSurat[".allSearchFields"][] = "tarikhTerima";
$tdataInboxPergerakanSurat[".allSearchFields"][] = "rujukanSurat";
$tdataInboxPergerakanSurat[".allSearchFields"][] = "RingkasanKandungan";
$tdataInboxPergerakanSurat[".allSearchFields"][] = "Jenis";
$tdataInboxPergerakanSurat[".allSearchFields"][] = "kategori";
$tdataInboxPergerakanSurat[".allSearchFields"][] = "individu";
$tdataInboxPergerakanSurat[".allSearchFields"][] = "bahagian";
$tdataInboxPergerakanSurat[".allSearchFields"][] = "jawatan";
$tdataInboxPergerakanSurat[".allSearchFields"][] = "agensi";
$tdataInboxPergerakanSurat[".allSearchFields"][] = "awam";
$tdataInboxPergerakanSurat[".allSearchFields"][] = "status";

$tdataInboxPergerakanSurat[".googleLikeFields"][] = "iid";
$tdataInboxPergerakanSurat[".googleLikeFields"][] = "pid";
$tdataInboxPergerakanSurat[".googleLikeFields"][] = "tarikhSurat";
$tdataInboxPergerakanSurat[".googleLikeFields"][] = "tarikhTerima";
$tdataInboxPergerakanSurat[".googleLikeFields"][] = "rujukanSurat";
$tdataInboxPergerakanSurat[".googleLikeFields"][] = "RingkasanKandungan";
$tdataInboxPergerakanSurat[".googleLikeFields"][] = "Jenis";
$tdataInboxPergerakanSurat[".googleLikeFields"][] = "kategori";
$tdataInboxPergerakanSurat[".googleLikeFields"][] = "individu";
$tdataInboxPergerakanSurat[".googleLikeFields"][] = "bahagian";
$tdataInboxPergerakanSurat[".googleLikeFields"][] = "jawatan";
$tdataInboxPergerakanSurat[".googleLikeFields"][] = "agensi";
$tdataInboxPergerakanSurat[".googleLikeFields"][] = "awam";
$tdataInboxPergerakanSurat[".googleLikeFields"][] = "status";


$tdataInboxPergerakanSurat[".advSearchFields"][] = "tarikhSurat";
$tdataInboxPergerakanSurat[".advSearchFields"][] = "tarikhTerima";
$tdataInboxPergerakanSurat[".advSearchFields"][] = "rujukanSurat";
$tdataInboxPergerakanSurat[".advSearchFields"][] = "RingkasanKandungan";
$tdataInboxPergerakanSurat[".advSearchFields"][] = "Jenis";
$tdataInboxPergerakanSurat[".advSearchFields"][] = "kategori";
$tdataInboxPergerakanSurat[".advSearchFields"][] = "individu";
$tdataInboxPergerakanSurat[".advSearchFields"][] = "bahagian";
$tdataInboxPergerakanSurat[".advSearchFields"][] = "jawatan";
$tdataInboxPergerakanSurat[".advSearchFields"][] = "agensi";
$tdataInboxPergerakanSurat[".advSearchFields"][] = "awam";
$tdataInboxPergerakanSurat[".advSearchFields"][] = "status";

$tdataInboxPergerakanSurat[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataInboxPergerakanSurat[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataInboxPergerakanSurat[".strOrderBy"] = $tstrOrderBy;

$tdataInboxPergerakanSurat[".orderindexes"] = array();

$tdataInboxPergerakanSurat[".sqlHead"] = "SELECT surat.sid,  surat.tarikhTerima,  surat.Jenis,  surat.awam,  surat.agensi,  surat.bahagian,  surat.individu,  surat.jawatan,  surat.kategori,  surat.rujukanSurat,  surat.RingkasanKandungan,  surat.tarikhSurat,  surat.status,  surat_individu.iid,  pengguna.pid,  surat.Imbas";
$tdataInboxPergerakanSurat[".sqlFrom"] = "FROM surat_individu  , surat  , pengguna  , pergerakanbahagian";
$tdataInboxPergerakanSurat[".sqlWhereExpr"] = "(surat.sid = surat_individu.sid) AND (surat_individu.iid = pengguna.iid) AND (surat.sid = pergerakanbahagian.KepadaBahagian)";
$tdataInboxPergerakanSurat[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "individu";
	$tabFields[] = "bahagian";
	$tabFields[] = "jawatan";
$arrEditTabs[] = array('tabId'=>'PTG1',
					   'tabName'=>"PTG",
					   'nType'=>'1',
					   'nOrder'=>8,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "agensi";
$arrEditTabs[] = array('tabId'=>'Agensi1',
					   'tabName'=>"Agensi",
					   'nType'=>'1',
					   'nOrder'=>12,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "awam";
$arrEditTabs[] = array('tabId'=>'Awam1',
					   'tabName'=>"Awam",
					   'nType'=>'1',
					   'nOrder'=>14,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataInboxPergerakanSurat[".arrEditTabs"] = $arrEditTabs;

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
$tdataInboxPergerakanSurat[".arrAddTabs"] = $arrAddTabs;

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
$tdataInboxPergerakanSurat[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataInboxPergerakanSurat[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataInboxPergerakanSurat[".arrGroupsPerPage"] = $arrGPP;

$tableKeysInboxPergerakanSurat = array();
$tableKeysInboxPergerakanSurat[] = "sid";
$tdataInboxPergerakanSurat[".Keys"] = $tableKeysInboxPergerakanSurat;

$tdataInboxPergerakanSurat[".listFields"] = array();
$tdataInboxPergerakanSurat[".listFields"][] = "sid";
$tdataInboxPergerakanSurat[".listFields"][] = "tarikhTerima";
$tdataInboxPergerakanSurat[".listFields"][] = "tarikhSurat";
$tdataInboxPergerakanSurat[".listFields"][] = "rujukanSurat";
$tdataInboxPergerakanSurat[".listFields"][] = "RingkasanKandungan";
$tdataInboxPergerakanSurat[".listFields"][] = "Jenis";
$tdataInboxPergerakanSurat[".listFields"][] = "kategori";
$tdataInboxPergerakanSurat[".listFields"][] = "individu";
$tdataInboxPergerakanSurat[".listFields"][] = "status";
$tdataInboxPergerakanSurat[".listFields"][] = "bahagian";
$tdataInboxPergerakanSurat[".listFields"][] = "jawatan";
$tdataInboxPergerakanSurat[".listFields"][] = "agensi";
$tdataInboxPergerakanSurat[".listFields"][] = "awam";

$tdataInboxPergerakanSurat[".viewFields"] = array();

$tdataInboxPergerakanSurat[".addFields"] = array();

$tdataInboxPergerakanSurat[".inlineAddFields"] = array();

$tdataInboxPergerakanSurat[".editFields"] = array();

$tdataInboxPergerakanSurat[".inlineEditFields"] = array();

$tdataInboxPergerakanSurat[".exportFields"] = array();

$tdataInboxPergerakanSurat[".printFields"] = array();

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
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sid"; 
		$fdata["FullName"] = "surat.sid";
	
		
		
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
	
		
		
	$tdataInboxPergerakanSurat["sid"] = $fdata;
//	tarikhTerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tarikhTerima";
	$fdata["GoodName"] = "tarikhTerima";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Tarikh Terima"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "tarikhTerima"; 
		$fdata["FullName"] = "surat.tarikhTerima";
	
		
		
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
	
		
		
	$tdataInboxPergerakanSurat["tarikhTerima"] = $fdata;
//	Jenis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Jenis";
	$fdata["GoodName"] = "Jenis";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Jenis"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Jenis"; 
		$fdata["FullName"] = "surat.Jenis";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
		
		
	$tdataInboxPergerakanSurat["Jenis"] = $fdata;
//	awam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "awam";
	$fdata["GoodName"] = "awam";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Awam"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "awam"; 
		$fdata["FullName"] = "surat.awam";
	
		
		
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
				if(strpos(GetUserPermissions("InboxPergerakanSurat"), 'S') !== false)
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
	
		
		
	$tdataInboxPergerakanSurat["awam"] = $fdata;
//	agensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "agensi";
	$fdata["GoodName"] = "agensi";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Agensi"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "agensi"; 
		$fdata["FullName"] = "surat.agensi";
	
		
		
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
				if(strpos(GetUserPermissions("InboxPergerakanSurat"), 'S') !== false)
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
	
		
		
	$tdataInboxPergerakanSurat["agensi"] = $fdata;
//	bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "bahagian";
	$fdata["GoodName"] = "bahagian";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Bahagian"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "bahagian"; 
		$fdata["FullName"] = "surat.bahagian";
	
		
		
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
	
		
		
	$tdataInboxPergerakanSurat["bahagian"] = $fdata;
//	individu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "individu";
	$fdata["GoodName"] = "individu";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Individu"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "individu"; 
		$fdata["FullName"] = "surat.individu";
	
		
		
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
	$edata["autoCompleteFields"][] = array('masterF'=>"bahagian", 'lookupF'=>"Bahagian");
	$edata["autoCompleteFields"][] = array('masterF'=>"jawatan", 'lookupF'=>"Jawatan");
				if(strpos(GetUserPermissions("InboxPergerakanSurat"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "staff_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";
	
		
	$edata["LookupTable"] = "Kepada1";
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
	
		
		
	$tdataInboxPergerakanSurat["individu"] = $fdata;
//	jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "jawatan";
	$fdata["GoodName"] = "jawatan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Jawatan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "jawatan"; 
		$fdata["FullName"] = "surat.jawatan";
	
		
		
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
	
		
		
	$tdataInboxPergerakanSurat["jawatan"] = $fdata;
//	kategori
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "kategori";
	$fdata["GoodName"] = "kategori";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Kategori"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "kategori"; 
		$fdata["FullName"] = "surat.kategori";
	
		
		
				$fdata["FieldPermissions"] = true;
	
					
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
	
		
		
	$tdataInboxPergerakanSurat["kategori"] = $fdata;
//	rujukanSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rujukanSurat";
	$fdata["GoodName"] = "rujukanSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "No Rujukan Surat"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdataInboxPergerakanSurat["rujukanSurat"] = $fdata;
//	RingkasanKandungan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RingkasanKandungan";
	$fdata["GoodName"] = "RingkasanKandungan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Ringkasan Kandungan"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdataInboxPergerakanSurat["RingkasanKandungan"] = $fdata;
//	tarikhSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "tarikhSurat";
	$fdata["GoodName"] = "tarikhSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Tarikh Surat"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "tarikhSurat"; 
		$fdata["FullName"] = "surat.tarikhSurat";
	
		
		
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
	
		
		
	$tdataInboxPergerakanSurat["tarikhSurat"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "status"; 
		$fdata["FullName"] = "surat.status";
	
		
		
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
	
		
		
	$tdataInboxPergerakanSurat["status"] = $fdata;
//	iid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "iid";
	$fdata["GoodName"] = "iid";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = "Iid"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "iid"; 
		$fdata["FullName"] = "surat_individu.iid";
	
		
		
				
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
	
		
		
	$tdataInboxPergerakanSurat["iid"] = $fdata;
//	pid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "pid";
	$fdata["GoodName"] = "pid";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = "Pid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "pid"; 
		$fdata["FullName"] = "pengguna.pid";
	
		
		
				
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
	
		
		
	$tdataInboxPergerakanSurat["pid"] = $fdata;
//	Imbas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Imbas";
	$fdata["GoodName"] = "Imbas";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = "Imbas"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Imbas"; 
		$fdata["FullName"] = "surat.Imbas";
	
		
		
				
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
	
		
		
	$tdataInboxPergerakanSurat["Imbas"] = $fdata;

	
$tables_data["InboxPergerakanSurat"]=&$tdataInboxPergerakanSurat;
$field_labels["InboxPergerakanSurat"] = &$fieldLabelsInboxPergerakanSurat;
$fieldToolTips["InboxPergerakanSurat"] = &$fieldToolTipsInboxPergerakanSurat;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["InboxPergerakanSurat"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["InboxPergerakanSurat"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_InboxPergerakanSurat()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "surat.sid,  surat.tarikhTerima,  surat.Jenis,  surat.awam,  surat.agensi,  surat.bahagian,  surat.individu,  surat.jawatan,  surat.kategori,  surat.rujukanSurat,  surat.RingkasanKandungan,  surat.tarikhSurat,  surat.status,  surat_individu.iid,  pengguna.pid,  surat.Imbas";
$proto0["m_strFrom"] = "FROM surat_individu  , surat  , pengguna  , pergerakanbahagian";
$proto0["m_strWhere"] = "(surat.sid = surat_individu.sid) AND (surat_individu.iid = pengguna.iid) AND (surat.sid = pergerakanbahagian.KepadaBahagian)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(surat.sid = surat_individu.sid) AND (surat_individu.iid = pengguna.iid) AND (surat.sid = pergerakanbahagian.KepadaBahagian)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(surat.sid = surat_individu.sid) AND (surat_individu.iid = pengguna.iid) AND (surat.sid = pergerakanbahagian.KepadaBahagian)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "surat.sid = surat_individu.sid";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "surat"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "= surat_individu.sid";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "1";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "surat_individu.iid = pengguna.iid";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "iid",
	"m_strTable" => "surat_individu"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "= pengguna.iid";
$proto5["m_havingmode"] = "0";
$proto5["m_inBrackets"] = "1";
$proto5["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "surat.sid = pergerakanbahagian.KepadaBahagian";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "surat"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "= pergerakanbahagian.KepadaBahagian";
$proto7["m_havingmode"] = "0";
$proto7["m_inBrackets"] = "1";
$proto7["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto7);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
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

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "surat"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhTerima",
	"m_strTable" => "surat"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenis",
	"m_strTable" => "surat"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "awam",
	"m_strTable" => "surat"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "agensi",
	"m_strTable" => "surat"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "bahagian",
	"m_strTable" => "surat"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "individu",
	"m_strTable" => "surat"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "jawatan",
	"m_strTable" => "surat"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "kategori",
	"m_strTable" => "surat"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "rujukanSurat",
	"m_strTable" => "surat"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "RingkasanKandungan",
	"m_strTable" => "surat"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhSurat",
	"m_strTable" => "surat"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "surat"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "iid",
	"m_strTable" => "surat_individu"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "pid",
	"m_strTable" => "pengguna"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Imbas",
	"m_strTable" => "surat"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "surat_individu";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "siid";
$proto44["m_columns"][] = "sid";
$proto44["m_columns"][] = "iid";
$proto44["m_columns"][] = "Bahagian";
$proto44["m_columns"][] = "Jawatan";
$proto44["m_columns"][] = "Status";
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
												$proto47=array();
$proto47["m_link"] = "SQLL_CROSSJOIN";
			$proto48=array();
$proto48["m_strName"] = "surat";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "sid";
$proto48["m_columns"][] = "tarikhTerima";
$proto48["m_columns"][] = "Jenis";
$proto48["m_columns"][] = "awam";
$proto48["m_columns"][] = "agensi";
$proto48["m_columns"][] = "bahagian";
$proto48["m_columns"][] = "individu";
$proto48["m_columns"][] = "jawatan";
$proto48["m_columns"][] = "kategori";
$proto48["m_columns"][] = "rujukanSurat";
$proto48["m_columns"][] = "RingkasanKandungan";
$proto48["m_columns"][] = "tarikhSurat";
$proto48["m_columns"][] = "status";
$proto48["m_columns"][] = "Imbas";
$proto48["m_columns"][] = "pendaftar";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_alias"] = "";
$proto49=array();
$proto49["m_sql"] = "";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = "0";
$proto49["m_inBrackets"] = "0";
$proto49["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
												$proto51=array();
$proto51["m_link"] = "SQLL_CROSSJOIN";
			$proto52=array();
$proto52["m_strName"] = "pengguna";
$proto52["m_columns"] = array();
$proto52["m_columns"][] = "pid";
$proto52["m_columns"][] = "NoKP";
$proto52["m_columns"][] = "Password";
$proto52["m_columns"][] = "Email";
$proto52["m_columns"][] = "Nama";
$proto52["m_columns"][] = "Bahagian";
$proto52["m_columns"][] = "Jawatan";
$proto52["m_columns"][] = "Level";
$proto52["m_columns"][] = "iid";
$obj = new SQLTable($proto52);

$proto51["m_table"] = $obj;
$proto51["m_alias"] = "";
$proto53=array();
$proto53["m_sql"] = "";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "";
$proto53["m_havingmode"] = "0";
$proto53["m_inBrackets"] = "0";
$proto53["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto53);

$proto51["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto51);

$proto0["m_fromlist"][]=$obj;
												$proto55=array();
$proto55["m_link"] = "SQLL_CROSSJOIN";
			$proto56=array();
$proto56["m_strName"] = "pergerakanbahagian";
$proto56["m_columns"] = array();
$proto56["m_columns"][] = "pbid";
$proto56["m_columns"][] = "pid";
$proto56["m_columns"][] = "KepadaBahagian";
$obj = new SQLTable($proto56);

$proto55["m_table"] = $obj;
$proto55["m_alias"] = "";
$proto57=array();
$proto57["m_sql"] = "";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
$proto57["m_strCase"] = "";
$proto57["m_havingmode"] = "0";
$proto57["m_inBrackets"] = "0";
$proto57["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto57);

$proto55["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto55);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_InboxPergerakanSurat = createSqlQuery_InboxPergerakanSurat();
																$tdataInboxPergerakanSurat[".sqlquery"] = $queryData_InboxPergerakanSurat;
	
if(isset($tdataInboxPergerakanSurat["field2"])){
	$tdataInboxPergerakanSurat["field2"]["LookupTable"] = "carscars_view";
	$tdataInboxPergerakanSurat["field2"]["LookupOrderBy"] = "name";
	$tdataInboxPergerakanSurat["field2"]["LookupType"] = 4;
	$tdataInboxPergerakanSurat["field2"]["LinkField"] = "email";
	$tdataInboxPergerakanSurat["field2"]["DisplayField"] = "name";
	$tdataInboxPergerakanSurat[".hasCustomViewField"] = true;
}

include_once(getabspath("include/InboxPergerakanSurat_events.php"));
$tableEvents["InboxPergerakanSurat"] = new eventclass_InboxPergerakanSurat;
$tdataInboxPergerakanSurat[".hasEvents"] = true;

$cipherer = new RunnerCipherer("InboxPergerakanSurat");

?>