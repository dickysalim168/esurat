<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamenuview = array();
	$tdatamenuview[".truncateText"] = true;
	$tdatamenuview[".NumberOfChars"] = 80;
	$tdatamenuview[".ShortName"] = "menuview";
	$tdatamenuview[".OwnerID"] = "";
	$tdatamenuview[".OriginalTable"] = "surat";

//	field labels
$fieldLabelsmenuview = array();
$fieldToolTipsmenuview = array();
$pageTitlesmenuview = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsmenuview["Malay"] = array();
	$fieldToolTipsmenuview["Malay"] = array();
	$pageTitlesmenuview["Malay"] = array();
	$fieldLabelsmenuview["Malay"]["sid"] = "Pilihan";
	$fieldToolTipsmenuview["Malay"]["sid"] = "";
	$fieldLabelsmenuview["Malay"]["tarikhTerima"] = "Tarikh Terima";
	$fieldToolTipsmenuview["Malay"]["tarikhTerima"] = "";
	$fieldLabelsmenuview["Malay"]["kategori"] = "Kategori";
	$fieldToolTipsmenuview["Malay"]["kategori"] = "";
	$fieldLabelsmenuview["Malay"]["rujukanSurat"] = "No Rujukan Surat";
	$fieldToolTipsmenuview["Malay"]["rujukanSurat"] = "";
	$fieldLabelsmenuview["Malay"]["tarikhSurat"] = "Tarikh Surat";
	$fieldToolTipsmenuview["Malay"]["tarikhSurat"] = "";
	$fieldLabelsmenuview["Malay"]["Jenis"] = "Jenis";
	$fieldToolTipsmenuview["Malay"]["Jenis"] = "";
	$fieldLabelsmenuview["Malay"]["awam"] = "Awam";
	$fieldToolTipsmenuview["Malay"]["awam"] = "";
	$fieldLabelsmenuview["Malay"]["agensi"] = "Agensi";
	$fieldToolTipsmenuview["Malay"]["agensi"] = "";
	$fieldLabelsmenuview["Malay"]["bahagian"] = "Bahagian";
	$fieldToolTipsmenuview["Malay"]["bahagian"] = "";
	$fieldLabelsmenuview["Malay"]["individu"] = "Individu";
	$fieldToolTipsmenuview["Malay"]["individu"] = "";
	$fieldLabelsmenuview["Malay"]["jawatan"] = "Jawatan";
	$fieldToolTipsmenuview["Malay"]["jawatan"] = "";
	$fieldLabelsmenuview["Malay"]["RingkasanKandungan"] = "Ringkasan Kandungan";
	$fieldToolTipsmenuview["Malay"]["RingkasanKandungan"] = "";
	$fieldLabelsmenuview["Malay"]["Imbas"] = "Imbas";
	$fieldToolTipsmenuview["Malay"]["Imbas"] = "";
	$fieldLabelsmenuview["Malay"]["pendaftar"] = "Pendaftar";
	$fieldToolTipsmenuview["Malay"]["pendaftar"] = "";
	if (count($fieldToolTipsmenuview["Malay"]))
		$tdatamenuview[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmenuview[""] = array();
	$fieldToolTipsmenuview[""] = array();
	$pageTitlesmenuview[""] = array();
	$fieldLabelsmenuview[""]["sid"] = "Pilihan";
	$fieldToolTipsmenuview[""]["sid"] = "";
	if (count($fieldToolTipsmenuview[""]))
		$tdatamenuview[".isUseToolTips"] = true;
}


	$tdatamenuview[".NCSearch"] = true;



$tdatamenuview[".shortTableName"] = "menuview";
$tdatamenuview[".nSecOptions"] = 0;
$tdatamenuview[".recsPerRowList"] = 1;
$tdatamenuview[".recsPerRowPrint"] = 1;
$tdatamenuview[".mainTableOwnerID"] = "";
$tdatamenuview[".moveNext"] = 1;
$tdatamenuview[".entityType"] = 1;

$tdatamenuview[".strOriginalTableName"] = "surat";




$tdatamenuview[".showAddInPopup"] = false;

$tdatamenuview[".showEditInPopup"] = false;

$tdatamenuview[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamenuview[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamenuview[".fieldsForRegister"] = array();

$tdatamenuview[".listAjax"] = false;

	$tdatamenuview[".audit"] = false;

	$tdatamenuview[".locking"] = false;

$tdatamenuview[".edit"] = true;
$tdatamenuview[".afterEditAction"] = 1;
$tdatamenuview[".closePopupAfterEdit"] = 1;
$tdatamenuview[".afterEditActionDetTable"] = "";

$tdatamenuview[".add"] = true;
$tdatamenuview[".afterAddAction"] = 1;
$tdatamenuview[".closePopupAfterAdd"] = 1;
$tdatamenuview[".afterAddActionDetTable"] = "";

$tdatamenuview[".list"] = true;

$tdatamenuview[".view"] = true;




$tdatamenuview[".delete"] = true;

$tdatamenuview[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamenuview[".searchSaving"] = false;
//

$tdatamenuview[".showSearchPanel"] = true;
		$tdatamenuview[".flexibleSearch"] = true;

if (isMobile())
	$tdatamenuview[".isUseAjaxSuggest"] = false;
else
	$tdatamenuview[".isUseAjaxSuggest"] = true;

$tdatamenuview[".rowHighlite"] = true;


																																															
			
			
			
																									$tdatamenuview[".isUsebuttonHandlers"] = true;

$tdatamenuview[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamenuview[".isUseTimeForSearch"] = false;





$tdatamenuview[".allSearchFields"] = array();
$tdatamenuview[".filterFields"] = array();
$tdatamenuview[".requiredSearchFields"] = array();

$tdatamenuview[".allSearchFields"][] = "tarikhTerima";
	$tdatamenuview[".allSearchFields"][] = "tarikhSurat";
	$tdatamenuview[".allSearchFields"][] = "rujukanSurat";
	$tdatamenuview[".allSearchFields"][] = "RingkasanKandungan";
	$tdatamenuview[".allSearchFields"][] = "Jenis";
	$tdatamenuview[".allSearchFields"][] = "kategori";
	$tdatamenuview[".allSearchFields"][] = "individu";
	$tdatamenuview[".allSearchFields"][] = "bahagian";
	$tdatamenuview[".allSearchFields"][] = "jawatan";
	$tdatamenuview[".allSearchFields"][] = "agensi";
	$tdatamenuview[".allSearchFields"][] = "awam";
	

$tdatamenuview[".googleLikeFields"] = array();
$tdatamenuview[".googleLikeFields"][] = "tarikhTerima";
$tdatamenuview[".googleLikeFields"][] = "Jenis";
$tdatamenuview[".googleLikeFields"][] = "awam";
$tdatamenuview[".googleLikeFields"][] = "agensi";
$tdatamenuview[".googleLikeFields"][] = "bahagian";
$tdatamenuview[".googleLikeFields"][] = "individu";
$tdatamenuview[".googleLikeFields"][] = "jawatan";
$tdatamenuview[".googleLikeFields"][] = "kategori";
$tdatamenuview[".googleLikeFields"][] = "rujukanSurat";
$tdatamenuview[".googleLikeFields"][] = "RingkasanKandungan";
$tdatamenuview[".googleLikeFields"][] = "tarikhSurat";


$tdatamenuview[".advSearchFields"] = array();
$tdatamenuview[".advSearchFields"][] = "tarikhTerima";
$tdatamenuview[".advSearchFields"][] = "tarikhSurat";
$tdatamenuview[".advSearchFields"][] = "rujukanSurat";
$tdatamenuview[".advSearchFields"][] = "RingkasanKandungan";
$tdatamenuview[".advSearchFields"][] = "Jenis";
$tdatamenuview[".advSearchFields"][] = "kategori";
$tdatamenuview[".advSearchFields"][] = "individu";
$tdatamenuview[".advSearchFields"][] = "bahagian";
$tdatamenuview[".advSearchFields"][] = "jawatan";
$tdatamenuview[".advSearchFields"][] = "agensi";
$tdatamenuview[".advSearchFields"][] = "awam";

$tdatamenuview[".tableType"] = "list";

$tdatamenuview[".printerPageOrientation"] = 0;
$tdatamenuview[".nPrinterPageScale"] = 100;

$tdatamenuview[".nPrinterSplitRecords"] = 40;

$tdatamenuview[".nPrinterPDFSplitRecords"] = 40;



$tdatamenuview[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatamenuview[".pageSize"] = 20;

$tdatamenuview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamenuview[".strOrderBy"] = $tstrOrderBy;

$tdatamenuview[".orderindexes"] = array();

$tdatamenuview[".sqlHead"] = "SELECT sid,  tarikhTerima,  Jenis,  awam,  agensi,  bahagian,  individu,  jawatan,  kategori,  rujukanSurat,  RingkasanKandungan,  tarikhSurat,  Imbas,  pendaftar";
$tdatamenuview[".sqlFrom"] = "FROM surat";
$tdatamenuview[".sqlWhereExpr"] = "";
$tdatamenuview[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "individu";
	$tabFields[] = "bahagian";
	$tabFields[] = "jawatan";
$arrEditTabs[] = array('tabId'=>'PTG1',
					   'tabName'=>"Dalaman",
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
$tdatamenuview[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "individu";
	$tabFields[] = "bahagian";
	$tabFields[] = "jawatan";
$arrAddTabs[] = array('tabId'=>'PTG1',
					  'tabName'=>"Dalaman",
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
$tdatamenuview[".arrAddTabs"] = $arrAddTabs;

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
$tdatamenuview[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamenuview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamenuview[".arrGroupsPerPage"] = $arrGPP;


$tableKeysmenuview = array();
$tableKeysmenuview[] = "sid";
$tdatamenuview[".Keys"] = $tableKeysmenuview;

$tdatamenuview[".listFields"] = array();

$tdatamenuview[".hideMobileList"] = array();


$tdatamenuview[".viewFields"] = array();
$tdatamenuview[".viewFields"][] = "tarikhSurat";
$tdatamenuview[".viewFields"][] = "tarikhTerima";
$tdatamenuview[".viewFields"][] = "rujukanSurat";
$tdatamenuview[".viewFields"][] = "RingkasanKandungan";
$tdatamenuview[".viewFields"][] = "Jenis";
$tdatamenuview[".viewFields"][] = "kategori";
$tdatamenuview[".viewFields"][] = "individu";
$tdatamenuview[".viewFields"][] = "bahagian";
$tdatamenuview[".viewFields"][] = "jawatan";
$tdatamenuview[".viewFields"][] = "agensi";
$tdatamenuview[".viewFields"][] = "awam";

$tdatamenuview[".addFields"] = array();
$tdatamenuview[".addFields"][] = "tarikhSurat";
$tdatamenuview[".addFields"][] = "tarikhTerima";
$tdatamenuview[".addFields"][] = "rujukanSurat";
$tdatamenuview[".addFields"][] = "RingkasanKandungan";
$tdatamenuview[".addFields"][] = "Jenis";
$tdatamenuview[".addFields"][] = "kategori";
$tdatamenuview[".addFields"][] = "individu";
$tdatamenuview[".addFields"][] = "bahagian";
$tdatamenuview[".addFields"][] = "jawatan";
$tdatamenuview[".addFields"][] = "agensi";
$tdatamenuview[".addFields"][] = "awam";

$tdatamenuview[".masterListFields"] = array();
$tdatamenuview[".masterListFields"][] = "Imbas";
$tdatamenuview[".masterListFields"][] = "tarikhTerima";
$tdatamenuview[".masterListFields"][] = "tarikhSurat";
$tdatamenuview[".masterListFields"][] = "rujukanSurat";
$tdatamenuview[".masterListFields"][] = "RingkasanKandungan";
$tdatamenuview[".masterListFields"][] = "Jenis";
$tdatamenuview[".masterListFields"][] = "kategori";
$tdatamenuview[".masterListFields"][] = "individu";
$tdatamenuview[".masterListFields"][] = "bahagian";
$tdatamenuview[".masterListFields"][] = "jawatan";
$tdatamenuview[".masterListFields"][] = "agensi";
$tdatamenuview[".masterListFields"][] = "awam";

$tdatamenuview[".inlineAddFields"] = array();

$tdatamenuview[".editFields"] = array();
$tdatamenuview[".editFields"][] = "Imbas";
$tdatamenuview[".editFields"][] = "tarikhSurat";
$tdatamenuview[".editFields"][] = "tarikhTerima";
$tdatamenuview[".editFields"][] = "rujukanSurat";
$tdatamenuview[".editFields"][] = "RingkasanKandungan";
$tdatamenuview[".editFields"][] = "Jenis";
$tdatamenuview[".editFields"][] = "kategori";
$tdatamenuview[".editFields"][] = "individu";
$tdatamenuview[".editFields"][] = "bahagian";
$tdatamenuview[".editFields"][] = "jawatan";
$tdatamenuview[".editFields"][] = "agensi";
$tdatamenuview[".editFields"][] = "awam";

$tdatamenuview[".inlineEditFields"] = array();

$tdatamenuview[".exportFields"] = array();

$tdatamenuview[".importFields"] = array();

$tdatamenuview[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("menuview","sid");
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








	$tdatamenuview["sid"] = $fdata;
//	tarikhTerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tarikhTerima";
	$fdata["GoodName"] = "tarikhTerima";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("menuview","tarikhTerima");
	$fdata["FieldType"] = 7;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

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




	$tdatamenuview["tarikhTerima"] = $fdata;
//	Jenis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Jenis";
	$fdata["GoodName"] = "Jenis";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("menuview","Jenis");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

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




	$tdatamenuview["Jenis"] = $fdata;
//	awam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "awam";
	$fdata["GoodName"] = "awam";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("menuview","awam");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

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




	$tdatamenuview["awam"] = $fdata;
//	agensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "agensi";
	$fdata["GoodName"] = "agensi";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("menuview","agensi");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

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




	$tdatamenuview["agensi"] = $fdata;
//	bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "bahagian";
	$fdata["GoodName"] = "bahagian";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("menuview","bahagian");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

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




	$tdatamenuview["bahagian"] = $fdata;
//	individu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "individu";
	$fdata["GoodName"] = "individu";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("menuview","individu");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

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
	$edata["LookupTable"] = "SuratKepada";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"bahagian", 'lookupF'=>"BahagianName");
	$edata["autoCompleteFields"][] = array('masterF'=>"jawatan", 'lookupF'=>"JawatanName");
	$edata["LCType"] = 2;
	
	
		
	$edata["LinkField"] = "pid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Nama";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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
	
	// the end of search options settings




	$tdatamenuview["individu"] = $fdata;
//	jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "jawatan";
	$fdata["GoodName"] = "jawatan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("menuview","jawatan");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

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




	$tdatamenuview["jawatan"] = $fdata;
//	kategori
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "kategori";
	$fdata["GoodName"] = "kategori";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("menuview","kategori");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Surat";
	$edata["LookupValues"][] = "Mesyuarat";

	
	
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




	$tdatamenuview["kategori"] = $fdata;
//	rujukanSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rujukanSurat";
	$fdata["GoodName"] = "rujukanSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("menuview","rujukanSurat");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

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




	$tdatamenuview["rujukanSurat"] = $fdata;
//	RingkasanKandungan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RingkasanKandungan";
	$fdata["GoodName"] = "RingkasanKandungan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("menuview","RingkasanKandungan");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

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




	$tdatamenuview["RingkasanKandungan"] = $fdata;
//	tarikhSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "tarikhSurat";
	$fdata["GoodName"] = "tarikhSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("menuview","tarikhSurat");
	$fdata["FieldType"] = 7;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

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




	$tdatamenuview["tarikhSurat"] = $fdata;
//	Imbas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Imbas";
	$fdata["GoodName"] = "Imbas";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("menuview","Imbas");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "Imbas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Imbas";

	
	
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








	$tdatamenuview["Imbas"] = $fdata;
//	pendaftar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "pendaftar";
	$fdata["GoodName"] = "pendaftar";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("menuview","pendaftar");
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








	$tdatamenuview["pendaftar"] = $fdata;


$tables_data["menuview"]=&$tdatamenuview;
$field_labels["menuview"] = &$fieldLabelsmenuview;
$fieldToolTips["menuview"] = &$fieldToolTipsmenuview;
$page_titles["menuview"] = &$pageTitlesmenuview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["menuview"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["menuview"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_menuview()
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
	"m_srcTableName" => "menuview"
));

$proto5["m_sql"] = "sid";
$proto5["m_srcTableName"] = "menuview";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhTerima",
	"m_strTable" => "surat",
	"m_srcTableName" => "menuview"
));

$proto7["m_sql"] = "tarikhTerima";
$proto7["m_srcTableName"] = "menuview";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenis",
	"m_strTable" => "surat",
	"m_srcTableName" => "menuview"
));

$proto9["m_sql"] = "Jenis";
$proto9["m_srcTableName"] = "menuview";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "awam",
	"m_strTable" => "surat",
	"m_srcTableName" => "menuview"
));

$proto11["m_sql"] = "awam";
$proto11["m_srcTableName"] = "menuview";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "agensi",
	"m_strTable" => "surat",
	"m_srcTableName" => "menuview"
));

$proto13["m_sql"] = "agensi";
$proto13["m_srcTableName"] = "menuview";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "bahagian",
	"m_strTable" => "surat",
	"m_srcTableName" => "menuview"
));

$proto15["m_sql"] = "bahagian";
$proto15["m_srcTableName"] = "menuview";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "individu",
	"m_strTable" => "surat",
	"m_srcTableName" => "menuview"
));

$proto17["m_sql"] = "individu";
$proto17["m_srcTableName"] = "menuview";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "jawatan",
	"m_strTable" => "surat",
	"m_srcTableName" => "menuview"
));

$proto19["m_sql"] = "jawatan";
$proto19["m_srcTableName"] = "menuview";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "kategori",
	"m_strTable" => "surat",
	"m_srcTableName" => "menuview"
));

$proto21["m_sql"] = "kategori";
$proto21["m_srcTableName"] = "menuview";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "rujukanSurat",
	"m_strTable" => "surat",
	"m_srcTableName" => "menuview"
));

$proto23["m_sql"] = "rujukanSurat";
$proto23["m_srcTableName"] = "menuview";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "RingkasanKandungan",
	"m_strTable" => "surat",
	"m_srcTableName" => "menuview"
));

$proto25["m_sql"] = "RingkasanKandungan";
$proto25["m_srcTableName"] = "menuview";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhSurat",
	"m_strTable" => "surat",
	"m_srcTableName" => "menuview"
));

$proto27["m_sql"] = "tarikhSurat";
$proto27["m_srcTableName"] = "menuview";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Imbas",
	"m_strTable" => "surat",
	"m_srcTableName" => "menuview"
));

$proto29["m_sql"] = "Imbas";
$proto29["m_srcTableName"] = "menuview";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "pendaftar",
	"m_strTable" => "surat",
	"m_srcTableName" => "menuview"
));

$proto31["m_sql"] = "pendaftar";
$proto31["m_srcTableName"] = "menuview";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "surat";
$proto34["m_srcTableName"] = "menuview";
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
$proto33["m_srcTableName"] = "menuview";
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
$proto0["m_srcTableName"]="menuview";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_menuview = createSqlQuery_menuview();



														

$tdatamenuview[".sqlquery"] = $queryData_menuview;

include_once(getabspath("include/menuview_events.php"));
$tableEvents["menuview"] = new eventclass_menuview;
$tdatamenuview[".hasEvents"] = true;

?>