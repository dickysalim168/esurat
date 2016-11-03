<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasurat_Agensi = array();
	$tdatasurat_Agensi[".truncateText"] = true;
	$tdatasurat_Agensi[".NumberOfChars"] = 80;
	$tdatasurat_Agensi[".ShortName"] = "surat_Agensi";
	$tdatasurat_Agensi[".OwnerID"] = "";
	$tdatasurat_Agensi[".OriginalTable"] = "surat";

//	field labels
$fieldLabelssurat_Agensi = array();
$fieldToolTipssurat_Agensi = array();
$pageTitlessurat_Agensi = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelssurat_Agensi["Malay"] = array();
	$fieldToolTipssurat_Agensi["Malay"] = array();
	$pageTitlessurat_Agensi["Malay"] = array();
	$fieldLabelssurat_Agensi["Malay"]["sid"] = "Pilihan";
	$fieldToolTipssurat_Agensi["Malay"]["sid"] = "";
	$fieldLabelssurat_Agensi["Malay"]["tarikhTerima"] = "Tarikh Terima";
	$fieldToolTipssurat_Agensi["Malay"]["tarikhTerima"] = "";
	$fieldLabelssurat_Agensi["Malay"]["kategori"] = "Kategori";
	$fieldToolTipssurat_Agensi["Malay"]["kategori"] = "";
	$fieldLabelssurat_Agensi["Malay"]["rujukanSurat"] = "No Rujukan Surat";
	$fieldToolTipssurat_Agensi["Malay"]["rujukanSurat"] = "";
	$fieldLabelssurat_Agensi["Malay"]["tarikhSurat"] = "Tarikh Surat";
	$fieldToolTipssurat_Agensi["Malay"]["tarikhSurat"] = "";
	$fieldLabelssurat_Agensi["Malay"]["Jenis"] = "Jenis";
	$fieldToolTipssurat_Agensi["Malay"]["Jenis"] = "";
	$fieldLabelssurat_Agensi["Malay"]["awam"] = "Awam";
	$fieldToolTipssurat_Agensi["Malay"]["awam"] = "";
	$fieldLabelssurat_Agensi["Malay"]["agensi"] = "Agensi";
	$fieldToolTipssurat_Agensi["Malay"]["agensi"] = "";
	$fieldLabelssurat_Agensi["Malay"]["bahagian"] = "Bahagian";
	$fieldToolTipssurat_Agensi["Malay"]["bahagian"] = "";
	$fieldLabelssurat_Agensi["Malay"]["individu"] = "Individu";
	$fieldToolTipssurat_Agensi["Malay"]["individu"] = "";
	$fieldLabelssurat_Agensi["Malay"]["jawatan"] = "Jawatan";
	$fieldToolTipssurat_Agensi["Malay"]["jawatan"] = "";
	$fieldLabelssurat_Agensi["Malay"]["RingkasanKandungan"] = "Ringkasan Kandungan";
	$fieldToolTipssurat_Agensi["Malay"]["RingkasanKandungan"] = "";
	$fieldLabelssurat_Agensi["Malay"]["Imbas"] = "Imbas";
	$fieldToolTipssurat_Agensi["Malay"]["Imbas"] = "";
	$fieldLabelssurat_Agensi["Malay"]["pendaftar"] = "Pendaftar";
	$fieldToolTipssurat_Agensi["Malay"]["pendaftar"] = "";
	$pageTitlessurat_Agensi["Malay"]["edit"] = "Kemaskini Rekod";
	if (count($fieldToolTipssurat_Agensi["Malay"]))
		$tdatasurat_Agensi[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssurat_Agensi[""] = array();
	$fieldToolTipssurat_Agensi[""] = array();
	$pageTitlessurat_Agensi[""] = array();
	$fieldLabelssurat_Agensi[""]["sid"] = "Pilihan";
	$fieldToolTipssurat_Agensi[""]["sid"] = "";
	if (count($fieldToolTipssurat_Agensi[""]))
		$tdatasurat_Agensi[".isUseToolTips"] = true;
}


	$tdatasurat_Agensi[".NCSearch"] = true;



$tdatasurat_Agensi[".shortTableName"] = "surat_Agensi";
$tdatasurat_Agensi[".nSecOptions"] = 0;
$tdatasurat_Agensi[".recsPerRowList"] = 1;
$tdatasurat_Agensi[".recsPerRowPrint"] = 1;
$tdatasurat_Agensi[".mainTableOwnerID"] = "";
$tdatasurat_Agensi[".moveNext"] = 1;
$tdatasurat_Agensi[".entityType"] = 1;

$tdatasurat_Agensi[".strOriginalTableName"] = "surat";




$tdatasurat_Agensi[".showAddInPopup"] = false;

$tdatasurat_Agensi[".showEditInPopup"] = false;

$tdatasurat_Agensi[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasurat_Agensi[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasurat_Agensi[".fieldsForRegister"] = array();

$tdatasurat_Agensi[".listAjax"] = false;

	$tdatasurat_Agensi[".audit"] = false;

	$tdatasurat_Agensi[".locking"] = false;

$tdatasurat_Agensi[".edit"] = true;
$tdatasurat_Agensi[".afterEditAction"] = 1;
$tdatasurat_Agensi[".closePopupAfterEdit"] = 1;
$tdatasurat_Agensi[".afterEditActionDetTable"] = "";


$tdatasurat_Agensi[".list"] = true;






$tdatasurat_Agensi[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasurat_Agensi[".searchSaving"] = false;
//

$tdatasurat_Agensi[".showSearchPanel"] = true;
		$tdatasurat_Agensi[".flexibleSearch"] = true;

if (isMobile())
	$tdatasurat_Agensi[".isUseAjaxSuggest"] = false;
else
	$tdatasurat_Agensi[".isUseAjaxSuggest"] = true;

$tdatasurat_Agensi[".rowHighlite"] = true;


																																																																									
		$tdatasurat_Agensi[".isUsebuttonHandlers"] = true;

$tdatasurat_Agensi[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasurat_Agensi[".isUseTimeForSearch"] = false;





$tdatasurat_Agensi[".allSearchFields"] = array();
$tdatasurat_Agensi[".filterFields"] = array();
$tdatasurat_Agensi[".requiredSearchFields"] = array();



$tdatasurat_Agensi[".googleLikeFields"] = array();
$tdatasurat_Agensi[".googleLikeFields"][] = "tarikhTerima";
$tdatasurat_Agensi[".googleLikeFields"][] = "Jenis";
$tdatasurat_Agensi[".googleLikeFields"][] = "awam";
$tdatasurat_Agensi[".googleLikeFields"][] = "agensi";
$tdatasurat_Agensi[".googleLikeFields"][] = "bahagian";
$tdatasurat_Agensi[".googleLikeFields"][] = "individu";
$tdatasurat_Agensi[".googleLikeFields"][] = "jawatan";
$tdatasurat_Agensi[".googleLikeFields"][] = "kategori";
$tdatasurat_Agensi[".googleLikeFields"][] = "rujukanSurat";
$tdatasurat_Agensi[".googleLikeFields"][] = "RingkasanKandungan";
$tdatasurat_Agensi[".googleLikeFields"][] = "tarikhSurat";



$tdatasurat_Agensi[".tableType"] = "list";

$tdatasurat_Agensi[".printerPageOrientation"] = 0;
$tdatasurat_Agensi[".nPrinterPageScale"] = 100;

$tdatasurat_Agensi[".nPrinterSplitRecords"] = 40;

$tdatasurat_Agensi[".nPrinterPDFSplitRecords"] = 40;



$tdatasurat_Agensi[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasurat_Agensi[".pageSize"] = 20;

$tdatasurat_Agensi[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasurat_Agensi[".strOrderBy"] = $tstrOrderBy;

$tdatasurat_Agensi[".orderindexes"] = array();

$tdatasurat_Agensi[".sqlHead"] = "SELECT sid,  tarikhTerima,  Jenis,  awam,  agensi,  bahagian,  individu,  jawatan,  kategori,  rujukanSurat,  RingkasanKandungan,  tarikhSurat,  Imbas,  pendaftar";
$tdatasurat_Agensi[".sqlFrom"] = "FROM surat";
$tdatasurat_Agensi[".sqlWhereExpr"] = "";
$tdatasurat_Agensi[".sqlTail"] = "";



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
$tdatasurat_Agensi[".arrAddTabs"] = $arrAddTabs;

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
$tdatasurat_Agensi[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasurat_Agensi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasurat_Agensi[".arrGroupsPerPage"] = $arrGPP;


$tableKeyssurat_Agensi = array();
$tableKeyssurat_Agensi[] = "sid";
$tdatasurat_Agensi[".Keys"] = $tableKeyssurat_Agensi;

$tdatasurat_Agensi[".listFields"] = array();

$tdatasurat_Agensi[".hideMobileList"] = array();


$tdatasurat_Agensi[".viewFields"] = array();

$tdatasurat_Agensi[".addFields"] = array();

$tdatasurat_Agensi[".masterListFields"] = array();
$tdatasurat_Agensi[".masterListFields"][] = "tarikhSurat";
$tdatasurat_Agensi[".masterListFields"][] = "individu";
$tdatasurat_Agensi[".masterListFields"][] = "Imbas";
$tdatasurat_Agensi[".masterListFields"][] = "tarikhTerima";
$tdatasurat_Agensi[".masterListFields"][] = "bahagian";
$tdatasurat_Agensi[".masterListFields"][] = "jawatan";
$tdatasurat_Agensi[".masterListFields"][] = "rujukanSurat";
$tdatasurat_Agensi[".masterListFields"][] = "RingkasanKandungan";
$tdatasurat_Agensi[".masterListFields"][] = "kategori";
$tdatasurat_Agensi[".masterListFields"][] = "Jenis";
$tdatasurat_Agensi[".masterListFields"][] = "agensi";
$tdatasurat_Agensi[".masterListFields"][] = "awam";

$tdatasurat_Agensi[".inlineAddFields"] = array();

$tdatasurat_Agensi[".editFields"] = array();
$tdatasurat_Agensi[".editFields"][] = "agensi";

$tdatasurat_Agensi[".inlineEditFields"] = array();

$tdatasurat_Agensi[".exportFields"] = array();

$tdatasurat_Agensi[".importFields"] = array();
$tdatasurat_Agensi[".importFields"][] = "sid";
$tdatasurat_Agensi[".importFields"][] = "tarikhTerima";
$tdatasurat_Agensi[".importFields"][] = "Jenis";
$tdatasurat_Agensi[".importFields"][] = "awam";
$tdatasurat_Agensi[".importFields"][] = "agensi";
$tdatasurat_Agensi[".importFields"][] = "bahagian";
$tdatasurat_Agensi[".importFields"][] = "individu";
$tdatasurat_Agensi[".importFields"][] = "jawatan";
$tdatasurat_Agensi[".importFields"][] = "kategori";
$tdatasurat_Agensi[".importFields"][] = "rujukanSurat";
$tdatasurat_Agensi[".importFields"][] = "RingkasanKandungan";
$tdatasurat_Agensi[".importFields"][] = "tarikhSurat";
$tdatasurat_Agensi[".importFields"][] = "Imbas";
$tdatasurat_Agensi[".importFields"][] = "pendaftar";

$tdatasurat_Agensi[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_Agensi","sid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
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








	$tdatasurat_Agensi["sid"] = $fdata;
//	tarikhTerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tarikhTerima";
	$fdata["GoodName"] = "tarikhTerima";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_Agensi","tarikhTerima");
	$fdata["FieldType"] = 7;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "tarikhTerima";

		$fdata["isSQLExpression"] = true;
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








	$tdatasurat_Agensi["tarikhTerima"] = $fdata;
//	Jenis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Jenis";
	$fdata["GoodName"] = "Jenis";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_Agensi","Jenis");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "Jenis";

		$fdata["isSQLExpression"] = true;
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








	$tdatasurat_Agensi["Jenis"] = $fdata;
//	awam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "awam";
	$fdata["GoodName"] = "awam";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_Agensi","awam");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "awam";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "awam";

	
	
			
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








	$tdatasurat_Agensi["awam"] = $fdata;
//	agensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "agensi";
	$fdata["GoodName"] = "agensi";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_Agensi","agensi");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
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








	$tdatasurat_Agensi["agensi"] = $fdata;
//	bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "bahagian";
	$fdata["GoodName"] = "bahagian";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_Agensi","bahagian");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "bahagian";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bahagian";

	
	
			
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








	$tdatasurat_Agensi["bahagian"] = $fdata;
//	individu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "individu";
	$fdata["GoodName"] = "individu";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_Agensi","individu");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "individu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "individu";

	
	
			
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








	$tdatasurat_Agensi["individu"] = $fdata;
//	jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "jawatan";
	$fdata["GoodName"] = "jawatan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_Agensi","jawatan");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "jawatan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jawatan";

	
	
			
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








	$tdatasurat_Agensi["jawatan"] = $fdata;
//	kategori
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "kategori";
	$fdata["GoodName"] = "kategori";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_Agensi","kategori");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "kategori";

		$fdata["isSQLExpression"] = true;
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

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Biasa";
	$edata["LookupValues"][] = "Mesyuarat";
	$edata["LookupValues"][] = "Sulit";

	
	
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








	$tdatasurat_Agensi["kategori"] = $fdata;
//	rujukanSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rujukanSurat";
	$fdata["GoodName"] = "rujukanSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_Agensi","rujukanSurat");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "rujukanSurat";

		$fdata["isSQLExpression"] = true;
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








	$tdatasurat_Agensi["rujukanSurat"] = $fdata;
//	RingkasanKandungan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RingkasanKandungan";
	$fdata["GoodName"] = "RingkasanKandungan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_Agensi","RingkasanKandungan");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "RingkasanKandungan";

		$fdata["isSQLExpression"] = true;
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








	$tdatasurat_Agensi["RingkasanKandungan"] = $fdata;
//	tarikhSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "tarikhSurat";
	$fdata["GoodName"] = "tarikhSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_Agensi","tarikhSurat");
	$fdata["FieldType"] = 7;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "tarikhSurat";

		$fdata["isSQLExpression"] = true;
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








	$tdatasurat_Agensi["tarikhSurat"] = $fdata;
//	Imbas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Imbas";
	$fdata["GoodName"] = "Imbas";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_Agensi","Imbas");
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








	$tdatasurat_Agensi["Imbas"] = $fdata;
//	pendaftar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "pendaftar";
	$fdata["GoodName"] = "pendaftar";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_Agensi","pendaftar");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "pendaftar";

		$fdata["isSQLExpression"] = true;
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








	$tdatasurat_Agensi["pendaftar"] = $fdata;


$tables_data["surat_Agensi"]=&$tdatasurat_Agensi;
$field_labels["surat_Agensi"] = &$fieldLabelssurat_Agensi;
$fieldToolTips["surat_Agensi"] = &$fieldToolTipssurat_Agensi;
$page_titles["surat_Agensi"] = &$pageTitlessurat_Agensi;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["surat_Agensi"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["surat_Agensi"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_surat_Agensi()
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
	"m_srcTableName" => "surat_Agensi"
));

$proto5["m_sql"] = "sid";
$proto5["m_srcTableName"] = "surat_Agensi";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhTerima",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_Agensi"
));

$proto7["m_sql"] = "tarikhTerima";
$proto7["m_srcTableName"] = "surat_Agensi";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenis",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_Agensi"
));

$proto9["m_sql"] = "Jenis";
$proto9["m_srcTableName"] = "surat_Agensi";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "awam",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_Agensi"
));

$proto11["m_sql"] = "awam";
$proto11["m_srcTableName"] = "surat_Agensi";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "agensi",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_Agensi"
));

$proto13["m_sql"] = "agensi";
$proto13["m_srcTableName"] = "surat_Agensi";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "bahagian",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_Agensi"
));

$proto15["m_sql"] = "bahagian";
$proto15["m_srcTableName"] = "surat_Agensi";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "individu",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_Agensi"
));

$proto17["m_sql"] = "individu";
$proto17["m_srcTableName"] = "surat_Agensi";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "jawatan",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_Agensi"
));

$proto19["m_sql"] = "jawatan";
$proto19["m_srcTableName"] = "surat_Agensi";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "kategori",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_Agensi"
));

$proto21["m_sql"] = "kategori";
$proto21["m_srcTableName"] = "surat_Agensi";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "rujukanSurat",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_Agensi"
));

$proto23["m_sql"] = "rujukanSurat";
$proto23["m_srcTableName"] = "surat_Agensi";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "RingkasanKandungan",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_Agensi"
));

$proto25["m_sql"] = "RingkasanKandungan";
$proto25["m_srcTableName"] = "surat_Agensi";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhSurat",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_Agensi"
));

$proto27["m_sql"] = "tarikhSurat";
$proto27["m_srcTableName"] = "surat_Agensi";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Imbas",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_Agensi"
));

$proto29["m_sql"] = "Imbas";
$proto29["m_srcTableName"] = "surat_Agensi";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "pendaftar",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_Agensi"
));

$proto31["m_sql"] = "pendaftar";
$proto31["m_srcTableName"] = "surat_Agensi";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "surat";
$proto34["m_srcTableName"] = "surat_Agensi";
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
$proto34["m_columns"][] = "tarikhKemasukkan";
$proto34["m_columns"][] = "TindakanTotal";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "surat";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "surat_Agensi";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="surat_Agensi";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_surat_Agensi = createSqlQuery_surat_Agensi();



														

$tdatasurat_Agensi[".sqlquery"] = $queryData_surat_Agensi;

include_once(getabspath("include/surat_Agensi_events.php"));
$tableEvents["surat_Agensi"] = new eventclass_surat_Agensi;
$tdatasurat_Agensi[".hasEvents"] = true;

?>