<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasuratview2 = array();
	$tdatasuratview2[".truncateText"] = true;
	$tdatasuratview2[".NumberOfChars"] = 80;
	$tdatasuratview2[".ShortName"] = "suratview2";
	$tdatasuratview2[".OwnerID"] = "";
	$tdatasuratview2[".OriginalTable"] = "surat";

//	field labels
$fieldLabelssuratview2 = array();
$fieldToolTipssuratview2 = array();
$pageTitlessuratview2 = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelssuratview2["Malay"] = array();
	$fieldToolTipssuratview2["Malay"] = array();
	$pageTitlessuratview2["Malay"] = array();
	$fieldLabelssuratview2["Malay"]["sid"] = "Pilihan";
	$fieldToolTipssuratview2["Malay"]["sid"] = "";
	$fieldLabelssuratview2["Malay"]["tarikhTerima"] = "Tarikh Terima";
	$fieldToolTipssuratview2["Malay"]["tarikhTerima"] = "";
	$fieldLabelssuratview2["Malay"]["kategori"] = "Kategori";
	$fieldToolTipssuratview2["Malay"]["kategori"] = "";
	$fieldLabelssuratview2["Malay"]["rujukanSurat"] = "No Rujukan Surat";
	$fieldToolTipssuratview2["Malay"]["rujukanSurat"] = "";
	$fieldLabelssuratview2["Malay"]["tarikhSurat"] = "Tarikh Surat";
	$fieldToolTipssuratview2["Malay"]["tarikhSurat"] = "";
	$fieldLabelssuratview2["Malay"]["Jenis"] = "Jenis";
	$fieldToolTipssuratview2["Malay"]["Jenis"] = "";
	$fieldLabelssuratview2["Malay"]["awam"] = "Awam";
	$fieldToolTipssuratview2["Malay"]["awam"] = "";
	$fieldLabelssuratview2["Malay"]["agensi"] = "Agensi";
	$fieldToolTipssuratview2["Malay"]["agensi"] = "";
	$fieldLabelssuratview2["Malay"]["bahagian"] = "Bahagian";
	$fieldToolTipssuratview2["Malay"]["bahagian"] = "";
	$fieldLabelssuratview2["Malay"]["individu"] = "Individu";
	$fieldToolTipssuratview2["Malay"]["individu"] = "";
	$fieldLabelssuratview2["Malay"]["jawatan"] = "Jawatan";
	$fieldToolTipssuratview2["Malay"]["jawatan"] = "";
	$fieldLabelssuratview2["Malay"]["RingkasanKandungan"] = "Ringkasan Kandungan";
	$fieldToolTipssuratview2["Malay"]["RingkasanKandungan"] = "";
	$fieldLabelssuratview2["Malay"]["Imbas"] = "Imbas";
	$fieldToolTipssuratview2["Malay"]["Imbas"] = "";
	$fieldLabelssuratview2["Malay"]["pendaftar"] = "Pendaftar";
	$fieldToolTipssuratview2["Malay"]["pendaftar"] = "";
	$fieldLabelssuratview2["Malay"]["status"] = "Status";
	$fieldToolTipssuratview2["Malay"]["status"] = "";
	$pageTitlessuratview2["Malay"]["edit"] = "Kemaskini";
	if (count($fieldToolTipssuratview2["Malay"]))
		$tdatasuratview2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssuratview2[""] = array();
	$fieldToolTipssuratview2[""] = array();
	$pageTitlessuratview2[""] = array();
	$fieldLabelssuratview2[""]["status"] = "Status";
	$fieldToolTipssuratview2[""]["status"] = "";
	$fieldLabelssuratview2[""]["sid"] = "Pilihan";
	$fieldToolTipssuratview2[""]["sid"] = "";
	if (count($fieldToolTipssuratview2[""]))
		$tdatasuratview2[".isUseToolTips"] = true;
}


	$tdatasuratview2[".NCSearch"] = true;



$tdatasuratview2[".shortTableName"] = "suratview2";
$tdatasuratview2[".nSecOptions"] = 0;
$tdatasuratview2[".recsPerRowList"] = 1;
$tdatasuratview2[".recsPerRowPrint"] = 1;
$tdatasuratview2[".mainTableOwnerID"] = "";
$tdatasuratview2[".moveNext"] = 1;
$tdatasuratview2[".entityType"] = 1;

$tdatasuratview2[".strOriginalTableName"] = "surat";




$tdatasuratview2[".showAddInPopup"] = false;

$tdatasuratview2[".showEditInPopup"] = false;

$tdatasuratview2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasuratview2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasuratview2[".fieldsForRegister"] = array();

$tdatasuratview2[".listAjax"] = false;

	$tdatasuratview2[".audit"] = false;

	$tdatasuratview2[".locking"] = false;

$tdatasuratview2[".edit"] = true;
$tdatasuratview2[".afterEditAction"] = 1;
$tdatasuratview2[".closePopupAfterEdit"] = 1;
$tdatasuratview2[".afterEditActionDetTable"] = "";


$tdatasuratview2[".list"] = true;






$tdatasuratview2[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasuratview2[".searchSaving"] = false;
//

$tdatasuratview2[".showSearchPanel"] = true;
		$tdatasuratview2[".flexibleSearch"] = true;

if (isMobile())
	$tdatasuratview2[".isUseAjaxSuggest"] = false;
else
	$tdatasuratview2[".isUseAjaxSuggest"] = true;

$tdatasuratview2[".rowHighlite"] = true;


																																																																							
				$tdatasuratview2[".isUsebuttonHandlers"] = true;

$tdatasuratview2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasuratview2[".isUseTimeForSearch"] = false;




$tdatasuratview2[".detailsLinksOnList"] = "1";

$tdatasuratview2[".allSearchFields"] = array();
$tdatasuratview2[".filterFields"] = array();
$tdatasuratview2[".requiredSearchFields"] = array();

$tdatasuratview2[".allSearchFields"][] = "status";
	$tdatasuratview2[".allSearchFields"][] = "tarikhSurat";
	$tdatasuratview2[".allSearchFields"][] = "tarikhTerima";
	$tdatasuratview2[".allSearchFields"][] = "rujukanSurat";
	$tdatasuratview2[".allSearchFields"][] = "RingkasanKandungan";
	$tdatasuratview2[".allSearchFields"][] = "Jenis";
	$tdatasuratview2[".allSearchFields"][] = "kategori";
	$tdatasuratview2[".allSearchFields"][] = "individu";
	$tdatasuratview2[".allSearchFields"][] = "bahagian";
	$tdatasuratview2[".allSearchFields"][] = "jawatan";
	$tdatasuratview2[".allSearchFields"][] = "agensi";
	$tdatasuratview2[".allSearchFields"][] = "awam";
	

$tdatasuratview2[".googleLikeFields"] = array();
$tdatasuratview2[".googleLikeFields"][] = "tarikhTerima";
$tdatasuratview2[".googleLikeFields"][] = "Jenis";
$tdatasuratview2[".googleLikeFields"][] = "awam";
$tdatasuratview2[".googleLikeFields"][] = "agensi";
$tdatasuratview2[".googleLikeFields"][] = "bahagian";
$tdatasuratview2[".googleLikeFields"][] = "individu";
$tdatasuratview2[".googleLikeFields"][] = "jawatan";
$tdatasuratview2[".googleLikeFields"][] = "kategori";
$tdatasuratview2[".googleLikeFields"][] = "rujukanSurat";
$tdatasuratview2[".googleLikeFields"][] = "RingkasanKandungan";
$tdatasuratview2[".googleLikeFields"][] = "tarikhSurat";
$tdatasuratview2[".googleLikeFields"][] = "status";


$tdatasuratview2[".advSearchFields"] = array();
$tdatasuratview2[".advSearchFields"][] = "status";
$tdatasuratview2[".advSearchFields"][] = "tarikhSurat";
$tdatasuratview2[".advSearchFields"][] = "tarikhTerima";
$tdatasuratview2[".advSearchFields"][] = "rujukanSurat";
$tdatasuratview2[".advSearchFields"][] = "RingkasanKandungan";
$tdatasuratview2[".advSearchFields"][] = "Jenis";
$tdatasuratview2[".advSearchFields"][] = "kategori";
$tdatasuratview2[".advSearchFields"][] = "individu";
$tdatasuratview2[".advSearchFields"][] = "bahagian";
$tdatasuratview2[".advSearchFields"][] = "jawatan";
$tdatasuratview2[".advSearchFields"][] = "agensi";
$tdatasuratview2[".advSearchFields"][] = "awam";

$tdatasuratview2[".tableType"] = "list";

$tdatasuratview2[".printerPageOrientation"] = 0;
$tdatasuratview2[".nPrinterPageScale"] = 100;

$tdatasuratview2[".nPrinterSplitRecords"] = 40;

$tdatasuratview2[".nPrinterPDFSplitRecords"] = 40;



$tdatasuratview2[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasuratview2[".pageSize"] = 20;

$tdatasuratview2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasuratview2[".strOrderBy"] = $tstrOrderBy;

$tdatasuratview2[".orderindexes"] = array();

$tdatasuratview2[".sqlHead"] = "SELECT sid,  tarikhTerima,  Jenis,  awam,  agensi,  bahagian,  individu,  jawatan,  kategori,  rujukanSurat,  RingkasanKandungan,  tarikhSurat,  Imbas,  pendaftar,  status";
$tdatasuratview2[".sqlFrom"] = "FROM surat";
$tdatasuratview2[".sqlWhereExpr"] = "";
$tdatasuratview2[".sqlTail"] = "";



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
$tdatasuratview2[".arrAddTabs"] = $arrAddTabs;

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
$tdatasuratview2[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasuratview2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasuratview2[".arrGroupsPerPage"] = $arrGPP;


$tableKeyssuratview2 = array();
$tableKeyssuratview2[] = "sid";
$tdatasuratview2[".Keys"] = $tableKeyssuratview2;

$tdatasuratview2[".listFields"] = array();
$tdatasuratview2[".listFields"][] = "status";
$tdatasuratview2[".listFields"][] = "sid";
$tdatasuratview2[".listFields"][] = "pendaftar";
$tdatasuratview2[".listFields"][] = "tarikhSurat";
$tdatasuratview2[".listFields"][] = "tarikhTerima";
$tdatasuratview2[".listFields"][] = "rujukanSurat";
$tdatasuratview2[".listFields"][] = "RingkasanKandungan";
$tdatasuratview2[".listFields"][] = "Jenis";
$tdatasuratview2[".listFields"][] = "kategori";
$tdatasuratview2[".listFields"][] = "individu";
$tdatasuratview2[".listFields"][] = "bahagian";
$tdatasuratview2[".listFields"][] = "jawatan";
$tdatasuratview2[".listFields"][] = "agensi";
$tdatasuratview2[".listFields"][] = "awam";

$tdatasuratview2[".hideMobileList"] = array();


$tdatasuratview2[".viewFields"] = array();

$tdatasuratview2[".addFields"] = array();

$tdatasuratview2[".masterListFields"] = array();
$tdatasuratview2[".masterListFields"][] = "Imbas";
$tdatasuratview2[".masterListFields"][] = "status";
$tdatasuratview2[".masterListFields"][] = "tarikhSurat";
$tdatasuratview2[".masterListFields"][] = "tarikhTerima";
$tdatasuratview2[".masterListFields"][] = "rujukanSurat";
$tdatasuratview2[".masterListFields"][] = "RingkasanKandungan";
$tdatasuratview2[".masterListFields"][] = "Jenis";
$tdatasuratview2[".masterListFields"][] = "kategori";
$tdatasuratview2[".masterListFields"][] = "individu";
$tdatasuratview2[".masterListFields"][] = "bahagian";
$tdatasuratview2[".masterListFields"][] = "jawatan";
$tdatasuratview2[".masterListFields"][] = "agensi";
$tdatasuratview2[".masterListFields"][] = "awam";

$tdatasuratview2[".inlineAddFields"] = array();

$tdatasuratview2[".editFields"] = array();
$tdatasuratview2[".editFields"][] = "tarikhSurat";
$tdatasuratview2[".editFields"][] = "tarikhTerima";
$tdatasuratview2[".editFields"][] = "rujukanSurat";
$tdatasuratview2[".editFields"][] = "RingkasanKandungan";
$tdatasuratview2[".editFields"][] = "kategori";

$tdatasuratview2[".inlineEditFields"] = array();

$tdatasuratview2[".exportFields"] = array();

$tdatasuratview2[".importFields"] = array();

$tdatasuratview2[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("suratview2","sid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
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

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

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








	$tdatasuratview2["sid"] = $fdata;
//	tarikhTerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tarikhTerima";
	$fdata["GoodName"] = "tarikhTerima";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("suratview2","tarikhTerima");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "tarikhTerima";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tarikhTerima";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasuratview2["tarikhTerima"] = $fdata;
//	Jenis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Jenis";
	$fdata["GoodName"] = "Jenis";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("suratview2","Jenis");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Jenis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Jenis";

	
	
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

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "surat_jenis";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "jid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "jenis";

	
	$edata["LookupOrderBy"] = "jenis";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasuratview2["Jenis"] = $fdata;
//	awam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "awam";
	$fdata["GoodName"] = "awam";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("suratview2","awam");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "awam";

		$fdata["isSQLExpression"] = true;
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

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "awam";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
	
	
		
	$edata["LinkField"] = "awid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nama";

	
	$edata["LookupOrderBy"] = "nama";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 400;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasuratview2["awam"] = $fdata;
//	agensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "agensi";
	$fdata["GoodName"] = "agensi";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("suratview2","agensi");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "agensi";

		$fdata["isSQLExpression"] = true;
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

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "agensi";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
	
	
		
	$edata["LinkField"] = "aid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nama";

	
	$edata["LookupOrderBy"] = "nama";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 400;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasuratview2["agensi"] = $fdata;
//	bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "bahagian";
	$fdata["GoodName"] = "bahagian";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("suratview2","bahagian");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "bahagian";

		$fdata["isSQLExpression"] = true;
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 400;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasuratview2["bahagian"] = $fdata;
//	individu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "individu";
	$fdata["GoodName"] = "individu";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("suratview2","individu");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "individu";

		$fdata["isSQLExpression"] = true;
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

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "surat_Kepada";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"bahagian", 'lookupF'=>"Bahagian");
	$edata["autoCompleteFields"][] = array('masterF'=>"jawatan", 'lookupF'=>"Jawatan");
	$edata["LCType"] = 2;
	
	
		
	$edata["LinkField"] = "staff_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 400;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasuratview2["individu"] = $fdata;
//	jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "jawatan";
	$fdata["GoodName"] = "jawatan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("suratview2","jawatan");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "jawatan";

		$fdata["isSQLExpression"] = true;
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 400;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasuratview2["jawatan"] = $fdata;
//	kategori
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "kategori";
	$fdata["GoodName"] = "kategori";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("suratview2","kategori");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "kategori";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kategori";

	
	
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

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "drop_kategori";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "Kategori";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Kategori";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasuratview2["kategori"] = $fdata;
//	rujukanSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rujukanSurat";
	$fdata["GoodName"] = "rujukanSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("suratview2","rujukanSurat");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "rujukanSurat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rujukanSurat";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 400;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasuratview2["rujukanSurat"] = $fdata;
//	RingkasanKandungan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RingkasanKandungan";
	$fdata["GoodName"] = "RingkasanKandungan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("suratview2","RingkasanKandungan");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "RingkasanKandungan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RingkasanKandungan";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 500;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasuratview2["RingkasanKandungan"] = $fdata;
//	tarikhSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "tarikhSurat";
	$fdata["GoodName"] = "tarikhSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("suratview2","tarikhSurat");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "tarikhSurat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tarikhSurat";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasuratview2["tarikhSurat"] = $fdata;
//	Imbas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Imbas";
	$fdata["GoodName"] = "Imbas";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("suratview2","Imbas");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "Imbas";

		$fdata["isSQLExpression"] = true;
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasuratview2["Imbas"] = $fdata;
//	pendaftar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "pendaftar";
	$fdata["GoodName"] = "pendaftar";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("suratview2","pendaftar");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "pendaftar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pendaftar";

	
	
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

	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "pejawatan_staffdetails";
	$edata["LookupConnId"] = "Tables";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "staff_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasuratview2["pendaftar"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("suratview2","status");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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
			$edata["EditParams"].= " maxlength=2";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatasuratview2["status"] = $fdata;


$tables_data["suratview2"]=&$tdatasuratview2;
$field_labels["suratview2"] = &$fieldLabelssuratview2;
$fieldToolTips["suratview2"] = &$fieldToolTipssuratview2;
$page_titles["suratview2"] = &$pageTitlessuratview2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["suratview2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["suratview2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_suratview2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  tarikhTerima,  Jenis,  awam,  agensi,  bahagian,  individu,  jawatan,  kategori,  rujukanSurat,  RingkasanKandungan,  tarikhSurat,  Imbas,  pendaftar,  status";
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
	"m_strName" => "sid",
	"m_strTable" => "surat",
	"m_srcTableName" => "suratview2"
));

$proto5["m_sql"] = "sid";
$proto5["m_srcTableName"] = "suratview2";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhTerima",
	"m_strTable" => "surat",
	"m_srcTableName" => "suratview2"
));

$proto7["m_sql"] = "tarikhTerima";
$proto7["m_srcTableName"] = "suratview2";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenis",
	"m_strTable" => "surat",
	"m_srcTableName" => "suratview2"
));

$proto9["m_sql"] = "Jenis";
$proto9["m_srcTableName"] = "suratview2";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "awam",
	"m_strTable" => "surat",
	"m_srcTableName" => "suratview2"
));

$proto11["m_sql"] = "awam";
$proto11["m_srcTableName"] = "suratview2";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "agensi",
	"m_strTable" => "surat",
	"m_srcTableName" => "suratview2"
));

$proto13["m_sql"] = "agensi";
$proto13["m_srcTableName"] = "suratview2";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "bahagian",
	"m_strTable" => "surat",
	"m_srcTableName" => "suratview2"
));

$proto15["m_sql"] = "bahagian";
$proto15["m_srcTableName"] = "suratview2";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "individu",
	"m_strTable" => "surat",
	"m_srcTableName" => "suratview2"
));

$proto17["m_sql"] = "individu";
$proto17["m_srcTableName"] = "suratview2";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "jawatan",
	"m_strTable" => "surat",
	"m_srcTableName" => "suratview2"
));

$proto19["m_sql"] = "jawatan";
$proto19["m_srcTableName"] = "suratview2";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "kategori",
	"m_strTable" => "surat",
	"m_srcTableName" => "suratview2"
));

$proto21["m_sql"] = "kategori";
$proto21["m_srcTableName"] = "suratview2";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "rujukanSurat",
	"m_strTable" => "surat",
	"m_srcTableName" => "suratview2"
));

$proto23["m_sql"] = "rujukanSurat";
$proto23["m_srcTableName"] = "suratview2";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "RingkasanKandungan",
	"m_strTable" => "surat",
	"m_srcTableName" => "suratview2"
));

$proto25["m_sql"] = "RingkasanKandungan";
$proto25["m_srcTableName"] = "suratview2";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhSurat",
	"m_strTable" => "surat",
	"m_srcTableName" => "suratview2"
));

$proto27["m_sql"] = "tarikhSurat";
$proto27["m_srcTableName"] = "suratview2";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Imbas",
	"m_strTable" => "surat",
	"m_srcTableName" => "suratview2"
));

$proto29["m_sql"] = "Imbas";
$proto29["m_srcTableName"] = "suratview2";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "pendaftar",
	"m_strTable" => "surat",
	"m_srcTableName" => "suratview2"
));

$proto31["m_sql"] = "pendaftar";
$proto31["m_srcTableName"] = "suratview2";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "surat",
	"m_srcTableName" => "suratview2"
));

$proto33["m_sql"] = "status";
$proto33["m_srcTableName"] = "suratview2";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "surat";
$proto36["m_srcTableName"] = "suratview2";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "sid";
$proto36["m_columns"][] = "tarikhTerima";
$proto36["m_columns"][] = "Jenis";
$proto36["m_columns"][] = "awam";
$proto36["m_columns"][] = "agensi";
$proto36["m_columns"][] = "bahagian";
$proto36["m_columns"][] = "individu";
$proto36["m_columns"][] = "jawatan";
$proto36["m_columns"][] = "kategori";
$proto36["m_columns"][] = "rujukanSurat";
$proto36["m_columns"][] = "RingkasanKandungan";
$proto36["m_columns"][] = "tarikhSurat";
$proto36["m_columns"][] = "status";
$proto36["m_columns"][] = "Imbas";
$proto36["m_columns"][] = "pendaftar";
$proto36["m_columns"][] = "tarikhKemasukkan";
$proto36["m_columns"][] = "TindakanTotal";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "surat";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "suratview2";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="suratview2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_suratview2 = createSqlQuery_suratview2();



															

$tdatasuratview2[".sqlquery"] = $queryData_suratview2;

include_once(getabspath("include/suratview2_events.php"));
$tableEvents["suratview2"] = new eventclass_suratview2;
$tdatasuratview2[".hasEvents"] = true;

?>