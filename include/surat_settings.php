<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasurat = array();
	$tdatasurat[".truncateText"] = true;
	$tdatasurat[".NumberOfChars"] = 80;
	$tdatasurat[".ShortName"] = "surat";
	$tdatasurat[".OwnerID"] = "";
	$tdatasurat[".OriginalTable"] = "surat";

//	field labels
$fieldLabelssurat = array();
$fieldToolTipssurat = array();
$pageTitlessurat = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelssurat["Malay"] = array();
	$fieldToolTipssurat["Malay"] = array();
	$pageTitlessurat["Malay"] = array();
	$fieldLabelssurat["Malay"]["sid"] = "Pilihan";
	$fieldToolTipssurat["Malay"]["sid"] = "";
	$fieldLabelssurat["Malay"]["tarikhTerima"] = "Tarikh Terima";
	$fieldToolTipssurat["Malay"]["tarikhTerima"] = "";
	$fieldLabelssurat["Malay"]["kategori"] = "Kategori";
	$fieldToolTipssurat["Malay"]["kategori"] = "";
	$fieldLabelssurat["Malay"]["rujukanSurat"] = "No Rujukan Surat";
	$fieldToolTipssurat["Malay"]["rujukanSurat"] = "";
	$fieldLabelssurat["Malay"]["tarikhSurat"] = "Tarikh Surat";
	$fieldToolTipssurat["Malay"]["tarikhSurat"] = "";
	$fieldLabelssurat["Malay"]["Jenis"] = "Jenis";
	$fieldToolTipssurat["Malay"]["Jenis"] = "";
	$fieldLabelssurat["Malay"]["agensi"] = "Agensi / Awam";
	$fieldToolTipssurat["Malay"]["agensi"] = "";
	$fieldLabelssurat["Malay"]["bahagian"] = "Bahagian";
	$fieldToolTipssurat["Malay"]["bahagian"] = "";
	$fieldLabelssurat["Malay"]["individu"] = "Individu";
	$fieldToolTipssurat["Malay"]["individu"] = "";
	$fieldLabelssurat["Malay"]["jawatan"] = "Jawatan";
	$fieldToolTipssurat["Malay"]["jawatan"] = "";
	$fieldLabelssurat["Malay"]["RingkasanKandungan"] = "Perkara";
	$fieldToolTipssurat["Malay"]["RingkasanKandungan"] = "";
	$fieldLabelssurat["Malay"]["Imbas"] = "Imbas";
	$fieldToolTipssurat["Malay"]["Imbas"] = "";
	$fieldLabelssurat["Malay"]["pendaftar"] = "Pendaftar";
	$fieldToolTipssurat["Malay"]["pendaftar"] = "";
	$fieldLabelssurat["Malay"]["tarikhKemasukkan"] = "Tarikh Kemasukkan";
	$fieldToolTipssurat["Malay"]["tarikhKemasukkan"] = "";
	$fieldLabelssurat["Malay"]["tindakan"] = "Tindakan";
	$fieldToolTipssurat["Malay"]["tindakan"] = "";
	$fieldLabelssurat["Malay"]["pilihan"] = "Pilihan";
	$fieldToolTipssurat["Malay"]["pilihan"] = "";
	$fieldLabelssurat["Malay"]["TindakanTotal"] = "Tindakan Surat";
	$fieldToolTipssurat["Malay"]["TindakanTotal"] = "";
	if (count($fieldToolTipssurat["Malay"]))
		$tdatasurat[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssurat[""] = array();
	$fieldToolTipssurat[""] = array();
	$pageTitlessurat[""] = array();
	$fieldLabelssurat[""]["sid"] = "Pilihan";
	$fieldToolTipssurat[""]["sid"] = "";
	$fieldLabelssurat[""]["tarikhKemasukkan"] = "Tarikh Kemasukkan";
	$fieldToolTipssurat[""]["tarikhKemasukkan"] = "";
	$fieldLabelssurat[""]["tindakan"] = "Tindakan";
	$fieldToolTipssurat[""]["tindakan"] = "";
	$fieldLabelssurat[""]["pilihan"] = "Pilihan";
	$fieldToolTipssurat[""]["pilihan"] = "";
	$fieldLabelssurat[""]["TindakanTotal"] = "Tindakan Total";
	$fieldToolTipssurat[""]["TindakanTotal"] = "";
	if (count($fieldToolTipssurat[""]))
		$tdatasurat[".isUseToolTips"] = true;
}


	$tdatasurat[".NCSearch"] = true;



$tdatasurat[".shortTableName"] = "surat";
$tdatasurat[".nSecOptions"] = 0;
$tdatasurat[".recsPerRowList"] = 1;
$tdatasurat[".recsPerRowPrint"] = 1;
$tdatasurat[".mainTableOwnerID"] = "";
$tdatasurat[".moveNext"] = 1;
$tdatasurat[".entityType"] = 0;

$tdatasurat[".strOriginalTableName"] = "surat";




$tdatasurat[".showAddInPopup"] = false;

$tdatasurat[".showEditInPopup"] = false;

$tdatasurat[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasurat[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasurat[".fieldsForRegister"] = array();

$tdatasurat[".listAjax"] = false;

	$tdatasurat[".audit"] = false;

	$tdatasurat[".locking"] = false;

$tdatasurat[".edit"] = true;
$tdatasurat[".afterEditAction"] = 1;
$tdatasurat[".closePopupAfterEdit"] = 1;
$tdatasurat[".afterEditActionDetTable"] = "";

$tdatasurat[".add"] = true;
$tdatasurat[".afterAddAction"] = 1;
$tdatasurat[".closePopupAfterAdd"] = 1;
$tdatasurat[".afterAddActionDetTable"] = "";

$tdatasurat[".list"] = true;

$tdatasurat[".view"] = true;




$tdatasurat[".delete"] = true;

$tdatasurat[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasurat[".searchSaving"] = false;
//

$tdatasurat[".showSearchPanel"] = true;
		$tdatasurat[".flexibleSearch"] = true;

if (isMobile())
	$tdatasurat[".isUseAjaxSuggest"] = false;
else
	$tdatasurat[".isUseAjaxSuggest"] = true;

$tdatasurat[".rowHighlite"] = true;


															
												
																																
																				$tdatasurat[".isUsebuttonHandlers"] = true;

$tdatasurat[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasurat[".isUseTimeForSearch"] = false;




$tdatasurat[".detailsLinksOnList"] = "1";

$tdatasurat[".allSearchFields"] = array();
$tdatasurat[".filterFields"] = array();
$tdatasurat[".requiredSearchFields"] = array();

$tdatasurat[".allSearchFields"][] = "tarikhKemasukkan";
	$tdatasurat[".allSearchFields"][] = "tarikhSurat";
	$tdatasurat[".allSearchFields"][] = "tarikhTerima";
	$tdatasurat[".allSearchFields"][] = "rujukanSurat";
	$tdatasurat[".allSearchFields"][] = "RingkasanKandungan";
	$tdatasurat[".allSearchFields"][] = "Jenis";
	$tdatasurat[".allSearchFields"][] = "kategori";
	$tdatasurat[".allSearchFields"][] = "individu";
	$tdatasurat[".allSearchFields"][] = "bahagian";
	$tdatasurat[".allSearchFields"][] = "jawatan";
	$tdatasurat[".allSearchFields"][] = "agensi";
	

$tdatasurat[".googleLikeFields"] = array();
$tdatasurat[".googleLikeFields"][] = "tarikhTerima";
$tdatasurat[".googleLikeFields"][] = "Jenis";
$tdatasurat[".googleLikeFields"][] = "agensi";
$tdatasurat[".googleLikeFields"][] = "bahagian";
$tdatasurat[".googleLikeFields"][] = "individu";
$tdatasurat[".googleLikeFields"][] = "jawatan";
$tdatasurat[".googleLikeFields"][] = "kategori";
$tdatasurat[".googleLikeFields"][] = "rujukanSurat";
$tdatasurat[".googleLikeFields"][] = "RingkasanKandungan";
$tdatasurat[".googleLikeFields"][] = "tarikhSurat";
$tdatasurat[".googleLikeFields"][] = "tarikhKemasukkan";
$tdatasurat[".googleLikeFields"][] = "tindakan";
$tdatasurat[".googleLikeFields"][] = "pilihan";
$tdatasurat[".googleLikeFields"][] = "TindakanTotal";


$tdatasurat[".advSearchFields"] = array();
$tdatasurat[".advSearchFields"][] = "tarikhKemasukkan";
$tdatasurat[".advSearchFields"][] = "tarikhSurat";
$tdatasurat[".advSearchFields"][] = "tarikhTerima";
$tdatasurat[".advSearchFields"][] = "rujukanSurat";
$tdatasurat[".advSearchFields"][] = "RingkasanKandungan";
$tdatasurat[".advSearchFields"][] = "Jenis";
$tdatasurat[".advSearchFields"][] = "kategori";
$tdatasurat[".advSearchFields"][] = "individu";
$tdatasurat[".advSearchFields"][] = "bahagian";
$tdatasurat[".advSearchFields"][] = "jawatan";
$tdatasurat[".advSearchFields"][] = "agensi";

$tdatasurat[".tableType"] = "list";

$tdatasurat[".printerPageOrientation"] = 0;
$tdatasurat[".nPrinterPageScale"] = 100;

$tdatasurat[".nPrinterSplitRecords"] = 40;

$tdatasurat[".nPrinterPDFSplitRecords"] = 40;



$tdatasurat[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasurat[".pageSize"] = 20;

$tdatasurat[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasurat[".strOrderBy"] = $tstrOrderBy;

$tdatasurat[".orderindexes"] = array();

$tdatasurat[".sqlHead"] = "SELECT sid,  tarikhTerima,  Jenis,  agensi,  bahagian,  individu,  jawatan,  kategori,  rujukanSurat,  RingkasanKandungan,  tarikhSurat,  Imbas,  pendaftar,  tarikhKemasukkan,  sid AS tindakan,  sid AS pilihan,  TindakanTotal";
$tdatasurat[".sqlFrom"] = "FROM surat";
$tdatasurat[".sqlWhereExpr"] = "";
$tdatasurat[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "individu";
	$tabFields[] = "bahagian";
	$tabFields[] = "jawatan";
$arrEditTabs[] = array('tabId'=>'PTG1',
					   'tabName'=>"Dalaman",
					   'nType'=>'1',
					   'nOrder'=>9,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "agensi";
$arrEditTabs[] = array('tabId'=>'Agensi1',
					   'tabName'=>"Agensi",
					   'nType'=>'1',
					   'nOrder'=>13,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatasurat[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "individu";
	$tabFields[] = "bahagian";
	$tabFields[] = "jawatan";
$arrAddTabs[] = array('tabId'=>'PTG1',
					  'tabName'=>"Dalaman",
					  'nType'=>'1',
					  'nOrder'=>8,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "agensi";
$arrAddTabs[] = array('tabId'=>'Agensi1',
					  'tabName'=>"Agensi / Awam",
					  'nType'=>'1',
					  'nOrder'=>12,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatasurat[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "individu";
	$tabFields[] = "bahagian";
	$tabFields[] = "jawatan";
$arrViewTabs[] = array('tabId'=>'PTG1',
					   'tabName'=>"Dalaman",
					   'nType'=>'1',
					   'nOrder'=>8,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "agensi";
$arrViewTabs[] = array('tabId'=>'Agensi1',
					   'tabName'=>"Agensi",
					   'nType'=>'1',
					   'nOrder'=>12,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Awam1',
					   'tabName'=>"Awam",
					   'nType'=>'1',
					   'nOrder'=>14,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatasurat[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasurat[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasurat[".arrGroupsPerPage"] = $arrGPP;


$tableKeyssurat = array();
$tableKeyssurat[] = "sid";
$tdatasurat[".Keys"] = $tableKeyssurat;

$tdatasurat[".listFields"] = array();
$tdatasurat[".listFields"][] = "TindakanTotal";
$tdatasurat[".listFields"][] = "tarikhKemasukkan";
$tdatasurat[".listFields"][] = "tarikhSurat";
$tdatasurat[".listFields"][] = "pendaftar";
$tdatasurat[".listFields"][] = "rujukanSurat";
$tdatasurat[".listFields"][] = "RingkasanKandungan";
$tdatasurat[".listFields"][] = "Jenis";
$tdatasurat[".listFields"][] = "kategori";
$tdatasurat[".listFields"][] = "tindakan";
$tdatasurat[".listFields"][] = "tarikhTerima";
$tdatasurat[".listFields"][] = "pilihan";

$tdatasurat[".hideMobileList"] = array();


$tdatasurat[".viewFields"] = array();
$tdatasurat[".viewFields"][] = "tarikhKemasukkan";
$tdatasurat[".viewFields"][] = "tarikhSurat";
$tdatasurat[".viewFields"][] = "tarikhTerima";
$tdatasurat[".viewFields"][] = "rujukanSurat";
$tdatasurat[".viewFields"][] = "RingkasanKandungan";
$tdatasurat[".viewFields"][] = "Jenis";
$tdatasurat[".viewFields"][] = "kategori";
$tdatasurat[".viewFields"][] = "individu";
$tdatasurat[".viewFields"][] = "bahagian";
$tdatasurat[".viewFields"][] = "jawatan";
$tdatasurat[".viewFields"][] = "agensi";

$tdatasurat[".addFields"] = array();
$tdatasurat[".addFields"][] = "tarikhKemasukkan";
$tdatasurat[".addFields"][] = "tarikhSurat";
$tdatasurat[".addFields"][] = "tarikhTerima";
$tdatasurat[".addFields"][] = "rujukanSurat";
$tdatasurat[".addFields"][] = "RingkasanKandungan";
$tdatasurat[".addFields"][] = "Jenis";
$tdatasurat[".addFields"][] = "kategori";
$tdatasurat[".addFields"][] = "individu";
$tdatasurat[".addFields"][] = "bahagian";
$tdatasurat[".addFields"][] = "jawatan";
$tdatasurat[".addFields"][] = "agensi";

$tdatasurat[".masterListFields"] = array();
$tdatasurat[".masterListFields"][] = "Imbas";
$tdatasurat[".masterListFields"][] = "tarikhKemasukkan";
$tdatasurat[".masterListFields"][] = "tarikhSurat";
$tdatasurat[".masterListFields"][] = "tarikhTerima";
$tdatasurat[".masterListFields"][] = "rujukanSurat";
$tdatasurat[".masterListFields"][] = "RingkasanKandungan";
$tdatasurat[".masterListFields"][] = "Jenis";
$tdatasurat[".masterListFields"][] = "kategori";
$tdatasurat[".masterListFields"][] = "individu";
$tdatasurat[".masterListFields"][] = "bahagian";
$tdatasurat[".masterListFields"][] = "jawatan";
$tdatasurat[".masterListFields"][] = "agensi";

$tdatasurat[".inlineAddFields"] = array();

$tdatasurat[".editFields"] = array();
$tdatasurat[".editFields"][] = "tarikhKemasukkan";
$tdatasurat[".editFields"][] = "Imbas";
$tdatasurat[".editFields"][] = "tarikhSurat";
$tdatasurat[".editFields"][] = "tarikhTerima";
$tdatasurat[".editFields"][] = "rujukanSurat";
$tdatasurat[".editFields"][] = "RingkasanKandungan";
$tdatasurat[".editFields"][] = "Jenis";
$tdatasurat[".editFields"][] = "kategori";
$tdatasurat[".editFields"][] = "individu";
$tdatasurat[".editFields"][] = "bahagian";
$tdatasurat[".editFields"][] = "jawatan";
$tdatasurat[".editFields"][] = "agensi";

$tdatasurat[".inlineEditFields"] = array();

$tdatasurat[".exportFields"] = array();

$tdatasurat[".importFields"] = array();

$tdatasurat[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","sid");
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








	$tdatasurat["sid"] = $fdata;
//	tarikhTerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tarikhTerima";
	$fdata["GoodName"] = "tarikhTerima";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","tarikhTerima");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdatasurat["tarikhTerima"] = $fdata;
//	Jenis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Jenis";
	$fdata["GoodName"] = "Jenis";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","Jenis");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

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

	
	$edata["LookupOrderBy"] = "jid";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "agensi";

	
	
	
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
	
	// the end of search options settings




	$tdatasurat["Jenis"] = $fdata;
//	agensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "agensi";
	$fdata["GoodName"] = "agensi";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","agensi");
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
	$edata["LookupTable"] = "agensi_awam";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
	
	
		
	$edata["LinkField"] = "aid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nama";

	
	$edata["LookupOrderBy"] = "nama";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Jenis", "lookup" => "jenis" );

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
	
	// the end of search options settings




	$tdatasurat["agensi"] = $fdata;
//	bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "bahagian";
	$fdata["GoodName"] = "bahagian";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","bahagian");
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




	$tdatasurat["bahagian"] = $fdata;
//	individu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "individu";
	$fdata["GoodName"] = "individu";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","individu");
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
	
	// the end of search options settings




	$tdatasurat["individu"] = $fdata;
//	jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "jawatan";
	$fdata["GoodName"] = "jawatan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","jawatan");
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




	$tdatasurat["jawatan"] = $fdata;
//	kategori
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "kategori";
	$fdata["GoodName"] = "kategori";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","kategori");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdatasurat["kategori"] = $fdata;
//	rujukanSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rujukanSurat";
	$fdata["GoodName"] = "rujukanSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","rujukanSurat");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "surat";
		$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
	
	
		
	$edata["LinkField"] = "rujukanSurat";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "rujukanSurat";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdatasurat["rujukanSurat"] = $fdata;
//	RingkasanKandungan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "RingkasanKandungan";
	$fdata["GoodName"] = "RingkasanKandungan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","RingkasanKandungan");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdatasurat["RingkasanKandungan"] = $fdata;
//	tarikhSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tarikhSurat";
	$fdata["GoodName"] = "tarikhSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","tarikhSurat");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdatasurat["tarikhSurat"] = $fdata;
//	Imbas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Imbas";
	$fdata["GoodName"] = "Imbas";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","Imbas");
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








	$tdatasurat["Imbas"] = $fdata;
//	pendaftar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "pendaftar";
	$fdata["GoodName"] = "pendaftar";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","pendaftar");
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








	$tdatasurat["pendaftar"] = $fdata;
//	tarikhKemasukkan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "tarikhKemasukkan";
	$fdata["GoodName"] = "tarikhKemasukkan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","tarikhKemasukkan");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "tarikhKemasukkan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tarikhKemasukkan";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatasurat["tarikhKemasukkan"] = $fdata;
//	tindakan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "tindakan";
	$fdata["GoodName"] = "tindakan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","tindakan");
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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








	$tdatasurat["tindakan"] = $fdata;
//	pilihan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "pilihan";
	$fdata["GoodName"] = "pilihan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","pilihan");
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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








	$tdatasurat["pilihan"] = $fdata;
//	TindakanTotal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "TindakanTotal";
	$fdata["GoodName"] = "TindakanTotal";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat","TindakanTotal");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "TindakanTotal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TindakanTotal";

	
	
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasurat["TindakanTotal"] = $fdata;


$tables_data["surat"]=&$tdatasurat;
$field_labels["surat"] = &$fieldLabelssurat;
$fieldToolTips["surat"] = &$fieldToolTipssurat;
$page_titles["surat"] = &$pageTitlessurat;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["surat"] = array();
//	surat_individu
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="surat_individu";
		$detailsParam["dOriginalTable"] = "surat_individu";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "surat_individu";
	$detailsParam["dCaptionTable"] = GetTableCaption("surat_individu");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 1;
	$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["surat"][$dIndex] = $detailsParam;

	
		$detailsTablesData["surat"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["surat"][$dIndex]["masterKeys"][]="sid";

				$detailsTablesData["surat"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["surat"][$dIndex]["detailKeys"][]="sid";

// tables which are master tables for current table (detail)
$masterTablesData["surat"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_surat()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  tarikhTerima,  Jenis,  agensi,  bahagian,  individu,  jawatan,  kategori,  rujukanSurat,  RingkasanKandungan,  tarikhSurat,  Imbas,  pendaftar,  tarikhKemasukkan,  sid AS tindakan,  sid AS pilihan,  TindakanTotal";
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
	"m_srcTableName" => "surat"
));

$proto5["m_sql"] = "sid";
$proto5["m_srcTableName"] = "surat";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhTerima",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto7["m_sql"] = "tarikhTerima";
$proto7["m_srcTableName"] = "surat";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenis",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto9["m_sql"] = "Jenis";
$proto9["m_srcTableName"] = "surat";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "agensi",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto11["m_sql"] = "agensi";
$proto11["m_srcTableName"] = "surat";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "bahagian",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto13["m_sql"] = "bahagian";
$proto13["m_srcTableName"] = "surat";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "individu",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto15["m_sql"] = "individu";
$proto15["m_srcTableName"] = "surat";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "jawatan",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto17["m_sql"] = "jawatan";
$proto17["m_srcTableName"] = "surat";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "kategori",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto19["m_sql"] = "kategori";
$proto19["m_srcTableName"] = "surat";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "rujukanSurat",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto21["m_sql"] = "rujukanSurat";
$proto21["m_srcTableName"] = "surat";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "RingkasanKandungan",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto23["m_sql"] = "RingkasanKandungan";
$proto23["m_srcTableName"] = "surat";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhSurat",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto25["m_sql"] = "tarikhSurat";
$proto25["m_srcTableName"] = "surat";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Imbas",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto27["m_sql"] = "Imbas";
$proto27["m_srcTableName"] = "surat";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "pendaftar",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto29["m_sql"] = "pendaftar";
$proto29["m_srcTableName"] = "surat";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhKemasukkan",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto31["m_sql"] = "tarikhKemasukkan";
$proto31["m_srcTableName"] = "surat";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto33["m_sql"] = "sid";
$proto33["m_srcTableName"] = "surat";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "tindakan";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto35["m_sql"] = "sid";
$proto35["m_srcTableName"] = "surat";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "pilihan";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "TindakanTotal",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat"
));

$proto37["m_sql"] = "TindakanTotal";
$proto37["m_srcTableName"] = "surat";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "surat";
$proto40["m_srcTableName"] = "surat";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "sid";
$proto40["m_columns"][] = "tarikhTerima";
$proto40["m_columns"][] = "Jenis";
$proto40["m_columns"][] = "awam";
$proto40["m_columns"][] = "agensi";
$proto40["m_columns"][] = "bahagian";
$proto40["m_columns"][] = "individu";
$proto40["m_columns"][] = "jawatan";
$proto40["m_columns"][] = "kategori";
$proto40["m_columns"][] = "rujukanSurat";
$proto40["m_columns"][] = "RingkasanKandungan";
$proto40["m_columns"][] = "tarikhSurat";
$proto40["m_columns"][] = "status";
$proto40["m_columns"][] = "Imbas";
$proto40["m_columns"][] = "pendaftar";
$proto40["m_columns"][] = "tarikhKemasukkan";
$proto40["m_columns"][] = "TindakanTotal";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "surat";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "surat";
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="surat";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_surat = createSqlQuery_surat();



																	

$tdatasurat[".sqlquery"] = $queryData_surat;

include_once(getabspath("include/surat_events.php"));
$tableEvents["surat"] = new eventclass_surat;
$tdatasurat[".hasEvents"] = true;

?>