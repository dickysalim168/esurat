<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasurat_maklumatsurat = array();
	$tdatasurat_maklumatsurat[".truncateText"] = true;
	$tdatasurat_maklumatsurat[".NumberOfChars"] = 80;
	$tdatasurat_maklumatsurat[".ShortName"] = "surat_maklumatsurat";
	$tdatasurat_maklumatsurat[".OwnerID"] = "";
	$tdatasurat_maklumatsurat[".OriginalTable"] = "surat";

//	field labels
$fieldLabelssurat_maklumatsurat = array();
$fieldToolTipssurat_maklumatsurat = array();
$pageTitlessurat_maklumatsurat = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelssurat_maklumatsurat["Malay"] = array();
	$fieldToolTipssurat_maklumatsurat["Malay"] = array();
	$pageTitlessurat_maklumatsurat["Malay"] = array();
	$fieldLabelssurat_maklumatsurat["Malay"]["sid"] = "Pilihan";
	$fieldToolTipssurat_maklumatsurat["Malay"]["sid"] = "";
	$fieldLabelssurat_maklumatsurat["Malay"]["tarikhTerima"] = "Tarikh Terima";
	$fieldToolTipssurat_maklumatsurat["Malay"]["tarikhTerima"] = "";
	$fieldLabelssurat_maklumatsurat["Malay"]["kategori"] = "Kategori";
	$fieldToolTipssurat_maklumatsurat["Malay"]["kategori"] = "";
	$fieldLabelssurat_maklumatsurat["Malay"]["rujukanSurat"] = "No Rujukan Surat";
	$fieldToolTipssurat_maklumatsurat["Malay"]["rujukanSurat"] = "";
	$fieldLabelssurat_maklumatsurat["Malay"]["tarikhSurat"] = "Tarikh Surat";
	$fieldToolTipssurat_maklumatsurat["Malay"]["tarikhSurat"] = "";
	$fieldLabelssurat_maklumatsurat["Malay"]["Jenis"] = "Jenis";
	$fieldToolTipssurat_maklumatsurat["Malay"]["Jenis"] = "";
	$fieldLabelssurat_maklumatsurat["Malay"]["awam"] = "Awam";
	$fieldToolTipssurat_maklumatsurat["Malay"]["awam"] = "";
	$fieldLabelssurat_maklumatsurat["Malay"]["agensi"] = "Agensi";
	$fieldToolTipssurat_maklumatsurat["Malay"]["agensi"] = "";
	$fieldLabelssurat_maklumatsurat["Malay"]["bahagian"] = "Bahagian";
	$fieldToolTipssurat_maklumatsurat["Malay"]["bahagian"] = "";
	$fieldLabelssurat_maklumatsurat["Malay"]["individu"] = "Individu";
	$fieldToolTipssurat_maklumatsurat["Malay"]["individu"] = "";
	$fieldLabelssurat_maklumatsurat["Malay"]["jawatan"] = "Jawatan";
	$fieldToolTipssurat_maklumatsurat["Malay"]["jawatan"] = "";
	$fieldLabelssurat_maklumatsurat["Malay"]["RingkasanKandungan"] = "Ringkasan Kandungan";
	$fieldToolTipssurat_maklumatsurat["Malay"]["RingkasanKandungan"] = "";
	$fieldLabelssurat_maklumatsurat["Malay"]["Imbas"] = "Imbas";
	$fieldToolTipssurat_maklumatsurat["Malay"]["Imbas"] = "";
	$fieldLabelssurat_maklumatsurat["Malay"]["pendaftar"] = "Pendaftar";
	$fieldToolTipssurat_maklumatsurat["Malay"]["pendaftar"] = "";
	if (count($fieldToolTipssurat_maklumatsurat["Malay"]))
		$tdatasurat_maklumatsurat[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssurat_maklumatsurat[""] = array();
	$fieldToolTipssurat_maklumatsurat[""] = array();
	$pageTitlessurat_maklumatsurat[""] = array();
	if (count($fieldToolTipssurat_maklumatsurat[""]))
		$tdatasurat_maklumatsurat[".isUseToolTips"] = true;
}


	$tdatasurat_maklumatsurat[".NCSearch"] = true;



$tdatasurat_maklumatsurat[".shortTableName"] = "surat_maklumatsurat";
$tdatasurat_maklumatsurat[".nSecOptions"] = 0;
$tdatasurat_maklumatsurat[".recsPerRowList"] = 1;
$tdatasurat_maklumatsurat[".recsPerRowPrint"] = 1;
$tdatasurat_maklumatsurat[".mainTableOwnerID"] = "";
$tdatasurat_maklumatsurat[".moveNext"] = 1;
$tdatasurat_maklumatsurat[".entityType"] = 1;

$tdatasurat_maklumatsurat[".strOriginalTableName"] = "surat";




$tdatasurat_maklumatsurat[".showAddInPopup"] = false;

$tdatasurat_maklumatsurat[".showEditInPopup"] = false;

$tdatasurat_maklumatsurat[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasurat_maklumatsurat[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasurat_maklumatsurat[".fieldsForRegister"] = array();

$tdatasurat_maklumatsurat[".listAjax"] = false;

	$tdatasurat_maklumatsurat[".audit"] = false;

	$tdatasurat_maklumatsurat[".locking"] = false;

$tdatasurat_maklumatsurat[".edit"] = true;
$tdatasurat_maklumatsurat[".afterEditAction"] = 1;
$tdatasurat_maklumatsurat[".closePopupAfterEdit"] = 1;
$tdatasurat_maklumatsurat[".afterEditActionDetTable"] = "";


$tdatasurat_maklumatsurat[".list"] = true;






$tdatasurat_maklumatsurat[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasurat_maklumatsurat[".searchSaving"] = false;
//

$tdatasurat_maklumatsurat[".showSearchPanel"] = true;
		$tdatasurat_maklumatsurat[".flexibleSearch"] = true;

if (isMobile())
	$tdatasurat_maklumatsurat[".isUseAjaxSuggest"] = false;
else
	$tdatasurat_maklumatsurat[".isUseAjaxSuggest"] = true;

$tdatasurat_maklumatsurat[".rowHighlite"] = true;


																										
																																																	$tdatasurat_maklumatsurat[".isUsebuttonHandlers"] = true;

$tdatasurat_maklumatsurat[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasurat_maklumatsurat[".isUseTimeForSearch"] = false;





$tdatasurat_maklumatsurat[".allSearchFields"] = array();
$tdatasurat_maklumatsurat[".filterFields"] = array();
$tdatasurat_maklumatsurat[".requiredSearchFields"] = array();



$tdatasurat_maklumatsurat[".googleLikeFields"] = array();
$tdatasurat_maklumatsurat[".googleLikeFields"][] = "tarikhTerima";
$tdatasurat_maklumatsurat[".googleLikeFields"][] = "Jenis";
$tdatasurat_maklumatsurat[".googleLikeFields"][] = "awam";
$tdatasurat_maklumatsurat[".googleLikeFields"][] = "agensi";
$tdatasurat_maklumatsurat[".googleLikeFields"][] = "bahagian";
$tdatasurat_maklumatsurat[".googleLikeFields"][] = "individu";
$tdatasurat_maklumatsurat[".googleLikeFields"][] = "jawatan";
$tdatasurat_maklumatsurat[".googleLikeFields"][] = "kategori";
$tdatasurat_maklumatsurat[".googleLikeFields"][] = "rujukanSurat";
$tdatasurat_maklumatsurat[".googleLikeFields"][] = "RingkasanKandungan";
$tdatasurat_maklumatsurat[".googleLikeFields"][] = "tarikhSurat";



$tdatasurat_maklumatsurat[".tableType"] = "list";

$tdatasurat_maklumatsurat[".printerPageOrientation"] = 0;
$tdatasurat_maklumatsurat[".nPrinterPageScale"] = 100;

$tdatasurat_maklumatsurat[".nPrinterSplitRecords"] = 40;

$tdatasurat_maklumatsurat[".nPrinterPDFSplitRecords"] = 40;



$tdatasurat_maklumatsurat[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasurat_maklumatsurat[".pageSize"] = 20;

$tdatasurat_maklumatsurat[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasurat_maklumatsurat[".strOrderBy"] = $tstrOrderBy;

$tdatasurat_maklumatsurat[".orderindexes"] = array();

$tdatasurat_maklumatsurat[".sqlHead"] = "SELECT sid,  tarikhTerima,  Jenis,  awam,  agensi,  bahagian,  individu,  jawatan,  kategori,  rujukanSurat,  RingkasanKandungan,  tarikhSurat,  Imbas,  pendaftar";
$tdatasurat_maklumatsurat[".sqlFrom"] = "FROM surat";
$tdatasurat_maklumatsurat[".sqlWhereExpr"] = "";
$tdatasurat_maklumatsurat[".sqlTail"] = "";



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
$tdatasurat_maklumatsurat[".arrAddTabs"] = $arrAddTabs;

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
$tdatasurat_maklumatsurat[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasurat_maklumatsurat[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasurat_maklumatsurat[".arrGroupsPerPage"] = $arrGPP;


$tableKeyssurat_maklumatsurat = array();
$tableKeyssurat_maklumatsurat[] = "sid";
$tdatasurat_maklumatsurat[".Keys"] = $tableKeyssurat_maklumatsurat;

$tdatasurat_maklumatsurat[".listFields"] = array();

$tdatasurat_maklumatsurat[".hideMobileList"] = array();


$tdatasurat_maklumatsurat[".viewFields"] = array();

$tdatasurat_maklumatsurat[".addFields"] = array();

$tdatasurat_maklumatsurat[".masterListFields"] = array();
$tdatasurat_maklumatsurat[".masterListFields"][] = "tarikhSurat";
$tdatasurat_maklumatsurat[".masterListFields"][] = "Imbas";
$tdatasurat_maklumatsurat[".masterListFields"][] = "tarikhTerima";
$tdatasurat_maklumatsurat[".masterListFields"][] = "rujukanSurat";
$tdatasurat_maklumatsurat[".masterListFields"][] = "jawatan";
$tdatasurat_maklumatsurat[".masterListFields"][] = "RingkasanKandungan";
$tdatasurat_maklumatsurat[".masterListFields"][] = "kategori";
$tdatasurat_maklumatsurat[".masterListFields"][] = "Jenis";
$tdatasurat_maklumatsurat[".masterListFields"][] = "individu";
$tdatasurat_maklumatsurat[".masterListFields"][] = "bahagian";
$tdatasurat_maklumatsurat[".masterListFields"][] = "agensi";
$tdatasurat_maklumatsurat[".masterListFields"][] = "awam";

$tdatasurat_maklumatsurat[".inlineAddFields"] = array();

$tdatasurat_maklumatsurat[".editFields"] = array();
$tdatasurat_maklumatsurat[".editFields"][] = "tarikhSurat";
$tdatasurat_maklumatsurat[".editFields"][] = "tarikhTerima";
$tdatasurat_maklumatsurat[".editFields"][] = "rujukanSurat";
$tdatasurat_maklumatsurat[".editFields"][] = "RingkasanKandungan";
$tdatasurat_maklumatsurat[".editFields"][] = "kategori";

$tdatasurat_maklumatsurat[".inlineEditFields"] = array();

$tdatasurat_maklumatsurat[".exportFields"] = array();

$tdatasurat_maklumatsurat[".importFields"] = array();
$tdatasurat_maklumatsurat[".importFields"][] = "sid";
$tdatasurat_maklumatsurat[".importFields"][] = "tarikhTerima";
$tdatasurat_maklumatsurat[".importFields"][] = "Jenis";
$tdatasurat_maklumatsurat[".importFields"][] = "awam";
$tdatasurat_maklumatsurat[".importFields"][] = "agensi";
$tdatasurat_maklumatsurat[".importFields"][] = "bahagian";
$tdatasurat_maklumatsurat[".importFields"][] = "individu";
$tdatasurat_maklumatsurat[".importFields"][] = "jawatan";
$tdatasurat_maklumatsurat[".importFields"][] = "kategori";
$tdatasurat_maklumatsurat[".importFields"][] = "rujukanSurat";
$tdatasurat_maklumatsurat[".importFields"][] = "RingkasanKandungan";
$tdatasurat_maklumatsurat[".importFields"][] = "tarikhSurat";
$tdatasurat_maklumatsurat[".importFields"][] = "Imbas";
$tdatasurat_maklumatsurat[".importFields"][] = "pendaftar";

$tdatasurat_maklumatsurat[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_maklumatsurat","sid");
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








	$tdatasurat_maklumatsurat["sid"] = $fdata;
//	tarikhTerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tarikhTerima";
	$fdata["GoodName"] = "tarikhTerima";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_maklumatsurat","tarikhTerima");
	$fdata["FieldType"] = 7;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
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








	$tdatasurat_maklumatsurat["tarikhTerima"] = $fdata;
//	Jenis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Jenis";
	$fdata["GoodName"] = "Jenis";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_maklumatsurat","Jenis");
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








	$tdatasurat_maklumatsurat["Jenis"] = $fdata;
//	awam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "awam";
	$fdata["GoodName"] = "awam";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_maklumatsurat","awam");
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








	$tdatasurat_maklumatsurat["awam"] = $fdata;
//	agensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "agensi";
	$fdata["GoodName"] = "agensi";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_maklumatsurat","agensi");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "agensi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agensi";

	
	
			
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








	$tdatasurat_maklumatsurat["agensi"] = $fdata;
//	bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "bahagian";
	$fdata["GoodName"] = "bahagian";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_maklumatsurat","bahagian");
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








	$tdatasurat_maklumatsurat["bahagian"] = $fdata;
//	individu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "individu";
	$fdata["GoodName"] = "individu";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_maklumatsurat","individu");
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








	$tdatasurat_maklumatsurat["individu"] = $fdata;
//	jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "jawatan";
	$fdata["GoodName"] = "jawatan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_maklumatsurat","jawatan");
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








	$tdatasurat_maklumatsurat["jawatan"] = $fdata;
//	kategori
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "kategori";
	$fdata["GoodName"] = "kategori";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_maklumatsurat","kategori");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
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








	$tdatasurat_maklumatsurat["kategori"] = $fdata;
//	rujukanSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rujukanSurat";
	$fdata["GoodName"] = "rujukanSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_maklumatsurat","rujukanSurat");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
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








	$tdatasurat_maklumatsurat["rujukanSurat"] = $fdata;
//	RingkasanKandungan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RingkasanKandungan";
	$fdata["GoodName"] = "RingkasanKandungan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_maklumatsurat","RingkasanKandungan");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
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








	$tdatasurat_maklumatsurat["RingkasanKandungan"] = $fdata;
//	tarikhSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "tarikhSurat";
	$fdata["GoodName"] = "tarikhSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_maklumatsurat","tarikhSurat");
	$fdata["FieldType"] = 7;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
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








	$tdatasurat_maklumatsurat["tarikhSurat"] = $fdata;
//	Imbas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Imbas";
	$fdata["GoodName"] = "Imbas";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_maklumatsurat","Imbas");
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








	$tdatasurat_maklumatsurat["Imbas"] = $fdata;
//	pendaftar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "pendaftar";
	$fdata["GoodName"] = "pendaftar";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_maklumatsurat","pendaftar");
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








	$tdatasurat_maklumatsurat["pendaftar"] = $fdata;


$tables_data["surat_maklumatsurat"]=&$tdatasurat_maklumatsurat;
$field_labels["surat_maklumatsurat"] = &$fieldLabelssurat_maklumatsurat;
$fieldToolTips["surat_maklumatsurat"] = &$fieldToolTipssurat_maklumatsurat;
$page_titles["surat_maklumatsurat"] = &$pageTitlessurat_maklumatsurat;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["surat_maklumatsurat"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["surat_maklumatsurat"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_surat_maklumatsurat()
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
	"m_srcTableName" => "surat_maklumatsurat"
));

$proto5["m_sql"] = "sid";
$proto5["m_srcTableName"] = "surat_maklumatsurat";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhTerima",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_maklumatsurat"
));

$proto7["m_sql"] = "tarikhTerima";
$proto7["m_srcTableName"] = "surat_maklumatsurat";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenis",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_maklumatsurat"
));

$proto9["m_sql"] = "Jenis";
$proto9["m_srcTableName"] = "surat_maklumatsurat";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "awam",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_maklumatsurat"
));

$proto11["m_sql"] = "awam";
$proto11["m_srcTableName"] = "surat_maklumatsurat";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "agensi",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_maklumatsurat"
));

$proto13["m_sql"] = "agensi";
$proto13["m_srcTableName"] = "surat_maklumatsurat";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "bahagian",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_maklumatsurat"
));

$proto15["m_sql"] = "bahagian";
$proto15["m_srcTableName"] = "surat_maklumatsurat";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "individu",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_maklumatsurat"
));

$proto17["m_sql"] = "individu";
$proto17["m_srcTableName"] = "surat_maklumatsurat";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "jawatan",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_maklumatsurat"
));

$proto19["m_sql"] = "jawatan";
$proto19["m_srcTableName"] = "surat_maklumatsurat";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "kategori",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_maklumatsurat"
));

$proto21["m_sql"] = "kategori";
$proto21["m_srcTableName"] = "surat_maklumatsurat";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "rujukanSurat",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_maklumatsurat"
));

$proto23["m_sql"] = "rujukanSurat";
$proto23["m_srcTableName"] = "surat_maklumatsurat";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "RingkasanKandungan",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_maklumatsurat"
));

$proto25["m_sql"] = "RingkasanKandungan";
$proto25["m_srcTableName"] = "surat_maklumatsurat";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhSurat",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_maklumatsurat"
));

$proto27["m_sql"] = "tarikhSurat";
$proto27["m_srcTableName"] = "surat_maklumatsurat";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Imbas",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_maklumatsurat"
));

$proto29["m_sql"] = "Imbas";
$proto29["m_srcTableName"] = "surat_maklumatsurat";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "pendaftar",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_maklumatsurat"
));

$proto31["m_sql"] = "pendaftar";
$proto31["m_srcTableName"] = "surat_maklumatsurat";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "surat";
$proto34["m_srcTableName"] = "surat_maklumatsurat";
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
$proto33["m_srcTableName"] = "surat_maklumatsurat";
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
$proto0["m_srcTableName"]="surat_maklumatsurat";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_surat_maklumatsurat = createSqlQuery_surat_maklumatsurat();



														

$tdatasurat_maklumatsurat[".sqlquery"] = $queryData_surat_maklumatsurat;

include_once(getabspath("include/surat_maklumatsurat_events.php"));
$tableEvents["surat_maklumatsurat"] = new eventclass_surat_maklumatsurat;
$tdatasurat_maklumatsurat[".hasEvents"] = true;

?>