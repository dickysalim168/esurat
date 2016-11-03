<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasurat_view = array();
	$tdatasurat_view[".truncateText"] = true;
	$tdatasurat_view[".NumberOfChars"] = 80;
	$tdatasurat_view[".ShortName"] = "surat_view";
	$tdatasurat_view[".OwnerID"] = "Penerima";
	$tdatasurat_view[".OriginalTable"] = "surat_view";

//	field labels
$fieldLabelssurat_view = array();
$fieldToolTipssurat_view = array();
$pageTitlessurat_view = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelssurat_view["Malay"] = array();
	$fieldToolTipssurat_view["Malay"] = array();
	$pageTitlessurat_view["Malay"] = array();
	$fieldLabelssurat_view["Malay"]["Penghantar"] = "Penghantar";
	$fieldToolTipssurat_view["Malay"]["Penghantar"] = "";
	$fieldLabelssurat_view["Malay"]["Penerima"] = "Penerima";
	$fieldToolTipssurat_view["Malay"]["Penerima"] = "";
	$fieldLabelssurat_view["Malay"]["status"] = "Status";
	$fieldToolTipssurat_view["Malay"]["status"] = "";
	$fieldLabelssurat_view["Malay"]["sid"] = "Pilihan";
	$fieldToolTipssurat_view["Malay"]["sid"] = "";
	$fieldLabelssurat_view["Malay"]["tarikhTerima"] = "Tarikh Terima";
	$fieldToolTipssurat_view["Malay"]["tarikhTerima"] = "";
	$fieldLabelssurat_view["Malay"]["Jenis"] = "Jenis";
	$fieldToolTipssurat_view["Malay"]["Jenis"] = "";
	$fieldLabelssurat_view["Malay"]["awam"] = "Awam";
	$fieldToolTipssurat_view["Malay"]["awam"] = "";
	$fieldLabelssurat_view["Malay"]["agensi"] = "Agensi";
	$fieldToolTipssurat_view["Malay"]["agensi"] = "";
	$fieldLabelssurat_view["Malay"]["bahagian"] = "Bahagian";
	$fieldToolTipssurat_view["Malay"]["bahagian"] = "";
	$fieldLabelssurat_view["Malay"]["individu"] = "Individu";
	$fieldToolTipssurat_view["Malay"]["individu"] = "";
	$fieldLabelssurat_view["Malay"]["jawatan"] = "Jawatan";
	$fieldToolTipssurat_view["Malay"]["jawatan"] = "";
	$fieldLabelssurat_view["Malay"]["kategori"] = "Kategori";
	$fieldToolTipssurat_view["Malay"]["kategori"] = "";
	$fieldLabelssurat_view["Malay"]["rujukanSurat"] = "Rujukan Surat";
	$fieldToolTipssurat_view["Malay"]["rujukanSurat"] = "";
	$fieldLabelssurat_view["Malay"]["RingkasanKandungan"] = "Ringkasan Kandungan";
	$fieldToolTipssurat_view["Malay"]["RingkasanKandungan"] = "";
	$fieldLabelssurat_view["Malay"]["tarikhSurat"] = "Tarikh Surat";
	$fieldToolTipssurat_view["Malay"]["tarikhSurat"] = "";
	$fieldLabelssurat_view["Malay"]["Imbas"] = "Imbas";
	$fieldToolTipssurat_view["Malay"]["Imbas"] = "";
	$fieldLabelssurat_view["Malay"]["pendaftar"] = "Pendaftar";
	$fieldToolTipssurat_view["Malay"]["pendaftar"] = "";
	$fieldLabelssurat_view["Malay"]["Tarikh"] = "Tarikh";
	$fieldToolTipssurat_view["Malay"]["Tarikh"] = "";
	$fieldLabelssurat_view["Malay"]["Minit"] = "Minit";
	$fieldToolTipssurat_view["Malay"]["Minit"] = "";
	$fieldLabelssurat_view["Malay"]["Catatan"] = "Catatan";
	$fieldToolTipssurat_view["Malay"]["Catatan"] = "";
	$fieldLabelssurat_view["Malay"]["siid"] = "Siid";
	$fieldToolTipssurat_view["Malay"]["siid"] = "";
	if (count($fieldToolTipssurat_view["Malay"]))
		$tdatasurat_view[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssurat_view[""] = array();
	$fieldToolTipssurat_view[""] = array();
	$pageTitlessurat_view[""] = array();
	if (count($fieldToolTipssurat_view[""]))
		$tdatasurat_view[".isUseToolTips"] = true;
}


	$tdatasurat_view[".NCSearch"] = true;



$tdatasurat_view[".shortTableName"] = "surat_view";
$tdatasurat_view[".nSecOptions"] = 1;
$tdatasurat_view[".recsPerRowList"] = 1;
$tdatasurat_view[".recsPerRowPrint"] = 1;
$tdatasurat_view[".mainTableOwnerID"] = "Penerima";
$tdatasurat_view[".moveNext"] = 1;
$tdatasurat_view[".entityType"] = 0;

$tdatasurat_view[".strOriginalTableName"] = "surat_view";




$tdatasurat_view[".showAddInPopup"] = false;

$tdatasurat_view[".showEditInPopup"] = false;

$tdatasurat_view[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasurat_view[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasurat_view[".fieldsForRegister"] = array();

$tdatasurat_view[".listAjax"] = false;

	$tdatasurat_view[".audit"] = false;

	$tdatasurat_view[".locking"] = false;



$tdatasurat_view[".list"] = true;


$tdatasurat_view[".import"] = true;

$tdatasurat_view[".exportTo"] = true;

$tdatasurat_view[".printFriendly"] = true;


$tdatasurat_view[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasurat_view[".searchSaving"] = false;
//

$tdatasurat_view[".showSearchPanel"] = true;
		$tdatasurat_view[".flexibleSearch"] = true;

if (isMobile())
	$tdatasurat_view[".isUseAjaxSuggest"] = false;
else
	$tdatasurat_view[".isUseAjaxSuggest"] = true;

$tdatasurat_view[".rowHighlite"] = true;


																																																																									
$tdatasurat_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasurat_view[".isUseTimeForSearch"] = false;





$tdatasurat_view[".allSearchFields"] = array();
$tdatasurat_view[".filterFields"] = array();
$tdatasurat_view[".requiredSearchFields"] = array();

$tdatasurat_view[".allSearchFields"][] = "RingkasanKandungan";
	$tdatasurat_view[".allSearchFields"][] = "Tarikh";
	$tdatasurat_view[".allSearchFields"][] = "rujukanSurat";
	$tdatasurat_view[".allSearchFields"][] = "kategori";
	$tdatasurat_view[".allSearchFields"][] = "Minit";
	$tdatasurat_view[".allSearchFields"][] = "status";
	

$tdatasurat_view[".googleLikeFields"] = array();
$tdatasurat_view[".googleLikeFields"][] = "siid";
$tdatasurat_view[".googleLikeFields"][] = "Tarikh";
$tdatasurat_view[".googleLikeFields"][] = "Minit";
$tdatasurat_view[".googleLikeFields"][] = "Catatan";
$tdatasurat_view[".googleLikeFields"][] = "Penghantar";
$tdatasurat_view[".googleLikeFields"][] = "Penerima";
$tdatasurat_view[".googleLikeFields"][] = "status";
$tdatasurat_view[".googleLikeFields"][] = "sid";
$tdatasurat_view[".googleLikeFields"][] = "tarikhTerima";
$tdatasurat_view[".googleLikeFields"][] = "Jenis";
$tdatasurat_view[".googleLikeFields"][] = "awam";
$tdatasurat_view[".googleLikeFields"][] = "agensi";
$tdatasurat_view[".googleLikeFields"][] = "bahagian";
$tdatasurat_view[".googleLikeFields"][] = "individu";
$tdatasurat_view[".googleLikeFields"][] = "jawatan";
$tdatasurat_view[".googleLikeFields"][] = "kategori";
$tdatasurat_view[".googleLikeFields"][] = "rujukanSurat";
$tdatasurat_view[".googleLikeFields"][] = "RingkasanKandungan";
$tdatasurat_view[".googleLikeFields"][] = "tarikhSurat";
$tdatasurat_view[".googleLikeFields"][] = "Imbas";
$tdatasurat_view[".googleLikeFields"][] = "pendaftar";


$tdatasurat_view[".advSearchFields"] = array();
$tdatasurat_view[".advSearchFields"][] = "RingkasanKandungan";
$tdatasurat_view[".advSearchFields"][] = "Tarikh";
$tdatasurat_view[".advSearchFields"][] = "rujukanSurat";
$tdatasurat_view[".advSearchFields"][] = "kategori";
$tdatasurat_view[".advSearchFields"][] = "Minit";
$tdatasurat_view[".advSearchFields"][] = "status";

$tdatasurat_view[".tableType"] = "list";

$tdatasurat_view[".printerPageOrientation"] = 0;
$tdatasurat_view[".nPrinterPageScale"] = 100;

$tdatasurat_view[".nPrinterSplitRecords"] = 40;

$tdatasurat_view[".nPrinterPDFSplitRecords"] = 40;



$tdatasurat_view[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasurat_view[".pageSize"] = 20;

$tdatasurat_view[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Tarikh DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasurat_view[".strOrderBy"] = $tstrOrderBy;

$tdatasurat_view[".orderindexes"] = array();
$tdatasurat_view[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "Tarikh");

$tdatasurat_view[".sqlHead"] = "SELECT siid,  Tarikh,  Minit,  Catatan,  Penghantar,  Penerima,  status,  sid,  tarikhTerima,  Jenis,  awam,  agensi,  bahagian,  individu,  jawatan,  kategori,  rujukanSurat,  RingkasanKandungan,  tarikhSurat,  Imbas,  pendaftar";
$tdatasurat_view[".sqlFrom"] = "FROM surat_view";
$tdatasurat_view[".sqlWhereExpr"] = "";
$tdatasurat_view[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasurat_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasurat_view[".arrGroupsPerPage"] = $arrGPP;


$tableKeyssurat_view = array();
$tableKeyssurat_view[] = "siid";
$tdatasurat_view[".Keys"] = $tableKeyssurat_view;

$tdatasurat_view[".listFields"] = array();
$tdatasurat_view[".listFields"][] = "Tarikh";
$tdatasurat_view[".listFields"][] = "rujukanSurat";
$tdatasurat_view[".listFields"][] = "RingkasanKandungan";
$tdatasurat_view[".listFields"][] = "kategori";
$tdatasurat_view[".listFields"][] = "Penghantar";
$tdatasurat_view[".listFields"][] = "Minit";
$tdatasurat_view[".listFields"][] = "status";
$tdatasurat_view[".listFields"][] = "sid";

$tdatasurat_view[".hideMobileList"] = array();


$tdatasurat_view[".viewFields"] = array();

$tdatasurat_view[".addFields"] = array();

$tdatasurat_view[".masterListFields"] = array();
$tdatasurat_view[".masterListFields"][] = "siid";
$tdatasurat_view[".masterListFields"][] = "Imbas";
$tdatasurat_view[".masterListFields"][] = "tarikhSurat";
$tdatasurat_view[".masterListFields"][] = "RingkasanKandungan";
$tdatasurat_view[".masterListFields"][] = "jawatan";
$tdatasurat_view[".masterListFields"][] = "individu";
$tdatasurat_view[".masterListFields"][] = "bahagian";
$tdatasurat_view[".masterListFields"][] = "sid";
$tdatasurat_view[".masterListFields"][] = "tarikhTerima";
$tdatasurat_view[".masterListFields"][] = "Jenis";
$tdatasurat_view[".masterListFields"][] = "awam";
$tdatasurat_view[".masterListFields"][] = "agensi";
$tdatasurat_view[".masterListFields"][] = "pendaftar";
$tdatasurat_view[".masterListFields"][] = "Tarikh";
$tdatasurat_view[".masterListFields"][] = "rujukanSurat";
$tdatasurat_view[".masterListFields"][] = "Catatan";
$tdatasurat_view[".masterListFields"][] = "kategori";
$tdatasurat_view[".masterListFields"][] = "Penghantar";
$tdatasurat_view[".masterListFields"][] = "Penerima";
$tdatasurat_view[".masterListFields"][] = "Minit";
$tdatasurat_view[".masterListFields"][] = "status";

$tdatasurat_view[".inlineAddFields"] = array();

$tdatasurat_view[".editFields"] = array();

$tdatasurat_view[".inlineEditFields"] = array();

$tdatasurat_view[".exportFields"] = array();
$tdatasurat_view[".exportFields"][] = "RingkasanKandungan";
$tdatasurat_view[".exportFields"][] = "sid";
$tdatasurat_view[".exportFields"][] = "Tarikh";
$tdatasurat_view[".exportFields"][] = "rujukanSurat";
$tdatasurat_view[".exportFields"][] = "kategori";
$tdatasurat_view[".exportFields"][] = "Penghantar";
$tdatasurat_view[".exportFields"][] = "Minit";
$tdatasurat_view[".exportFields"][] = "status";

$tdatasurat_view[".importFields"] = array();
$tdatasurat_view[".importFields"][] = "siid";
$tdatasurat_view[".importFields"][] = "Tarikh";
$tdatasurat_view[".importFields"][] = "Minit";
$tdatasurat_view[".importFields"][] = "Catatan";
$tdatasurat_view[".importFields"][] = "Penghantar";
$tdatasurat_view[".importFields"][] = "Penerima";
$tdatasurat_view[".importFields"][] = "status";
$tdatasurat_view[".importFields"][] = "sid";
$tdatasurat_view[".importFields"][] = "tarikhTerima";
$tdatasurat_view[".importFields"][] = "Jenis";
$tdatasurat_view[".importFields"][] = "awam";
$tdatasurat_view[".importFields"][] = "agensi";
$tdatasurat_view[".importFields"][] = "bahagian";
$tdatasurat_view[".importFields"][] = "individu";
$tdatasurat_view[".importFields"][] = "jawatan";
$tdatasurat_view[".importFields"][] = "kategori";
$tdatasurat_view[".importFields"][] = "rujukanSurat";
$tdatasurat_view[".importFields"][] = "RingkasanKandungan";
$tdatasurat_view[".importFields"][] = "tarikhSurat";
$tdatasurat_view[".importFields"][] = "Imbas";
$tdatasurat_view[".importFields"][] = "pendaftar";

$tdatasurat_view[".printFields"] = array();
$tdatasurat_view[".printFields"][] = "RingkasanKandungan";
$tdatasurat_view[".printFields"][] = "sid";
$tdatasurat_view[".printFields"][] = "Tarikh";
$tdatasurat_view[".printFields"][] = "rujukanSurat";
$tdatasurat_view[".printFields"][] = "kategori";
$tdatasurat_view[".printFields"][] = "Penghantar";
$tdatasurat_view[".printFields"][] = "Minit";
$tdatasurat_view[".printFields"][] = "status";

//	siid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "siid";
	$fdata["GoodName"] = "siid";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","siid");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "siid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "siid";

	
	
			
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
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasurat_view["siid"] = $fdata;
//	Tarikh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tarikh";
	$fdata["GoodName"] = "Tarikh";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","Tarikh");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Tarikh";

		$fdata["isSQLExpression"] = true;
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_view["Tarikh"] = $fdata;
//	Minit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Minit";
	$fdata["GoodName"] = "Minit";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","Minit");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Minit";

		$fdata["isSQLExpression"] = true;
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_view["Minit"] = $fdata;
//	Catatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Catatan";
	$fdata["GoodName"] = "Catatan";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","Catatan");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "Catatan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Catatan";

	
	
			
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








	$tdatasurat_view["Catatan"] = $fdata;
//	Penghantar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Penghantar";
	$fdata["GoodName"] = "Penghantar";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","Penghantar");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Penghantar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Penghantar";

	
	
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








	$tdatasurat_view["Penghantar"] = $fdata;
//	Penerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Penerima";
	$fdata["GoodName"] = "Penerima";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","Penerima");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "Penerima";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Penerima";

	
	
			
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








	$tdatasurat_view["Penerima"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "status";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "stid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "status";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_view["status"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","sid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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








	$tdatasurat_view["sid"] = $fdata;
//	tarikhTerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tarikhTerima";
	$fdata["GoodName"] = "tarikhTerima";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","tarikhTerima");
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasurat_view["tarikhTerima"] = $fdata;
//	Jenis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Jenis";
	$fdata["GoodName"] = "Jenis";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","Jenis");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "Jenis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Jenis";

	
	
			
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
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasurat_view["Jenis"] = $fdata;
//	awam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "awam";
	$fdata["GoodName"] = "awam";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","awam");
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasurat_view["awam"] = $fdata;
//	agensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "agensi";
	$fdata["GoodName"] = "agensi";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","agensi");
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasurat_view["agensi"] = $fdata;
//	bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "bahagian";
	$fdata["GoodName"] = "bahagian";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","bahagian");
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasurat_view["bahagian"] = $fdata;
//	individu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "individu";
	$fdata["GoodName"] = "individu";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","individu");
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasurat_view["individu"] = $fdata;
//	jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "jawatan";
	$fdata["GoodName"] = "jawatan";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","jawatan");
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasurat_view["jawatan"] = $fdata;
//	kategori
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "kategori";
	$fdata["GoodName"] = "kategori";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","kategori");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kategori";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kategori";

	
	
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
	$edata["LookupTable"] = "surat_jenis";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "jid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "jenis";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_view["kategori"] = $fdata;
//	rujukanSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "rujukanSurat";
	$fdata["GoodName"] = "rujukanSurat";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","rujukanSurat");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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




	$tdatasurat_view["rujukanSurat"] = $fdata;
//	RingkasanKandungan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "RingkasanKandungan";
	$fdata["GoodName"] = "RingkasanKandungan";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","RingkasanKandungan");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_view["RingkasanKandungan"] = $fdata;
//	tarikhSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "tarikhSurat";
	$fdata["GoodName"] = "tarikhSurat";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","tarikhSurat");
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasurat_view["tarikhSurat"] = $fdata;
//	Imbas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Imbas";
	$fdata["GoodName"] = "Imbas";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","Imbas");
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








	$tdatasurat_view["Imbas"] = $fdata;
//	pendaftar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "pendaftar";
	$fdata["GoodName"] = "pendaftar";
	$fdata["ownerTable"] = "surat_view";
	$fdata["Label"] = GetFieldLabel("surat_view","pendaftar");
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasurat_view["pendaftar"] = $fdata;


$tables_data["surat_view"]=&$tdatasurat_view;
$field_labels["surat_view"] = &$fieldLabelssurat_view;
$fieldToolTips["surat_view"] = &$fieldToolTipssurat_view;
$page_titles["surat_view"] = &$pageTitlessurat_view;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["surat_view"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["surat_view"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_surat_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "siid,  Tarikh,  Minit,  Catatan,  Penghantar,  Penerima,  status,  sid,  tarikhTerima,  Jenis,  awam,  agensi,  bahagian,  individu,  jawatan,  kategori,  rujukanSurat,  RingkasanKandungan,  tarikhSurat,  Imbas,  pendaftar";
$proto0["m_strFrom"] = "FROM surat_view";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Tarikh DESC";
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
	"m_strName" => "siid",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto5["m_sql"] = "siid";
$proto5["m_srcTableName"] = "surat_view";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Tarikh",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto7["m_sql"] = "Tarikh";
$proto7["m_srcTableName"] = "surat_view";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Minit",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto9["m_sql"] = "Minit";
$proto9["m_srcTableName"] = "surat_view";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Catatan",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto11["m_sql"] = "Catatan";
$proto11["m_srcTableName"] = "surat_view";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Penghantar",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto13["m_sql"] = "Penghantar";
$proto13["m_srcTableName"] = "surat_view";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Penerima",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto15["m_sql"] = "Penerima";
$proto15["m_srcTableName"] = "surat_view";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto17["m_sql"] = "status";
$proto17["m_srcTableName"] = "surat_view";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto19["m_sql"] = "sid";
$proto19["m_srcTableName"] = "surat_view";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhTerima",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto21["m_sql"] = "tarikhTerima";
$proto21["m_srcTableName"] = "surat_view";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenis",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto23["m_sql"] = "Jenis";
$proto23["m_srcTableName"] = "surat_view";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "awam",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto25["m_sql"] = "awam";
$proto25["m_srcTableName"] = "surat_view";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "agensi",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto27["m_sql"] = "agensi";
$proto27["m_srcTableName"] = "surat_view";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "bahagian",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto29["m_sql"] = "bahagian";
$proto29["m_srcTableName"] = "surat_view";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "individu",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto31["m_sql"] = "individu";
$proto31["m_srcTableName"] = "surat_view";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "jawatan",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto33["m_sql"] = "jawatan";
$proto33["m_srcTableName"] = "surat_view";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "kategori",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto35["m_sql"] = "kategori";
$proto35["m_srcTableName"] = "surat_view";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "rujukanSurat",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto37["m_sql"] = "rujukanSurat";
$proto37["m_srcTableName"] = "surat_view";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "RingkasanKandungan",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto39["m_sql"] = "RingkasanKandungan";
$proto39["m_srcTableName"] = "surat_view";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "tarikhSurat",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto41["m_sql"] = "tarikhSurat";
$proto41["m_srcTableName"] = "surat_view";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Imbas",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto43["m_sql"] = "Imbas";
$proto43["m_srcTableName"] = "surat_view";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "pendaftar",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto45["m_sql"] = "pendaftar";
$proto45["m_srcTableName"] = "surat_view";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto47=array();
$proto47["m_link"] = "SQLL_MAIN";
			$proto48=array();
$proto48["m_strName"] = "surat_view";
$proto48["m_srcTableName"] = "surat_view";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "siid";
$proto48["m_columns"][] = "Tarikh";
$proto48["m_columns"][] = "Minit";
$proto48["m_columns"][] = "Catatan";
$proto48["m_columns"][] = "Penghantar";
$proto48["m_columns"][] = "Penerima";
$proto48["m_columns"][] = "status";
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
$proto48["m_columns"][] = "Imbas";
$proto48["m_columns"][] = "pendaftar";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_sql"] = "surat_view";
$proto47["m_alias"] = "";
$proto47["m_srcTableName"] = "surat_view";
$proto49=array();
$proto49["m_sql"] = "";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "Tarikh",
	"m_strTable" => "surat_view",
	"m_srcTableName" => "surat_view"
));

$proto51["m_column"]=$obj;
$proto51["m_bAsc"] = 0;
$proto51["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto51);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="surat_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_surat_view = createSqlQuery_surat_view();



																					

$tdatasurat_view[".sqlquery"] = $queryData_surat_view;

include_once(getabspath("include/surat_view_events.php"));
$tableEvents["surat_view"] = new eventclass_surat_view;
$tdatasurat_view[".hasEvents"] = true;

?>