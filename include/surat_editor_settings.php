<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasurat_editor = array();
	$tdatasurat_editor[".truncateText"] = true;
	$tdatasurat_editor[".NumberOfChars"] = 80;
	$tdatasurat_editor[".ShortName"] = "surat_editor";
	$tdatasurat_editor[".OwnerID"] = "Penerima";
	$tdatasurat_editor[".OriginalTable"] = "surat_individu";

//	field labels
$fieldLabelssurat_editor = array();
$fieldToolTipssurat_editor = array();
$pageTitlessurat_editor = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelssurat_editor["Malay"] = array();
	$fieldToolTipssurat_editor["Malay"] = array();
	$pageTitlessurat_editor["Malay"] = array();
	$fieldLabelssurat_editor["Malay"]["siid"] = "Siid";
	$fieldToolTipssurat_editor["Malay"]["siid"] = "";
	$fieldLabelssurat_editor["Malay"]["sid"] = "Sid";
	$fieldToolTipssurat_editor["Malay"]["sid"] = "";
	$fieldLabelssurat_editor["Malay"]["Status"] = "Status";
	$fieldToolTipssurat_editor["Malay"]["Status"] = "";
	$fieldLabelssurat_editor["Malay"]["Tarikh"] = "Tarikh";
	$fieldToolTipssurat_editor["Malay"]["Tarikh"] = "";
	$fieldLabelssurat_editor["Malay"]["Penghantar"] = "Penghantar";
	$fieldToolTipssurat_editor["Malay"]["Penghantar"] = "";
	$fieldLabelssurat_editor["Malay"]["Penerima"] = "Penerima";
	$fieldToolTipssurat_editor["Malay"]["Penerima"] = "";
	$fieldLabelssurat_editor["Malay"]["Catatan"] = "Catatan";
	$fieldToolTipssurat_editor["Malay"]["Catatan"] = "";
	$fieldLabelssurat_editor["Malay"]["Email_Status"] = "Email Status";
	$fieldToolTipssurat_editor["Malay"]["Email_Status"] = "";
	$fieldLabelssurat_editor["Malay"]["rujukanSurat"] = "Rujukan Surat";
	$fieldToolTipssurat_editor["Malay"]["rujukanSurat"] = "";
	$fieldLabelssurat_editor["Malay"]["RingkasanKandungan"] = "Ringkasan Kandungan";
	$fieldToolTipssurat_editor["Malay"]["RingkasanKandungan"] = "";
	if (count($fieldToolTipssurat_editor["Malay"]))
		$tdatasurat_editor[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssurat_editor[""] = array();
	$fieldToolTipssurat_editor[""] = array();
	$pageTitlessurat_editor[""] = array();
	if (count($fieldToolTipssurat_editor[""]))
		$tdatasurat_editor[".isUseToolTips"] = true;
}


	$tdatasurat_editor[".NCSearch"] = true;



$tdatasurat_editor[".shortTableName"] = "surat_editor";
$tdatasurat_editor[".nSecOptions"] = 1;
$tdatasurat_editor[".recsPerRowList"] = 1;
$tdatasurat_editor[".recsPerRowPrint"] = 1;
$tdatasurat_editor[".mainTableOwnerID"] = "Penerima";
$tdatasurat_editor[".moveNext"] = 1;
$tdatasurat_editor[".entityType"] = 1;

$tdatasurat_editor[".strOriginalTableName"] = "surat_individu";




$tdatasurat_editor[".showAddInPopup"] = false;

$tdatasurat_editor[".showEditInPopup"] = false;

$tdatasurat_editor[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasurat_editor[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasurat_editor[".fieldsForRegister"] = array();

$tdatasurat_editor[".listAjax"] = false;

	$tdatasurat_editor[".audit"] = false;

	$tdatasurat_editor[".locking"] = false;

$tdatasurat_editor[".edit"] = true;
$tdatasurat_editor[".afterEditAction"] = 1;
$tdatasurat_editor[".closePopupAfterEdit"] = 1;
$tdatasurat_editor[".afterEditActionDetTable"] = "";


$tdatasurat_editor[".list"] = true;






$tdatasurat_editor[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasurat_editor[".searchSaving"] = false;
//

$tdatasurat_editor[".showSearchPanel"] = true;
		$tdatasurat_editor[".flexibleSearch"] = true;

if (isMobile())
	$tdatasurat_editor[".isUseAjaxSuggest"] = false;
else
	$tdatasurat_editor[".isUseAjaxSuggest"] = true;

$tdatasurat_editor[".rowHighlite"] = true;


																																																								
				
				
															$tdatasurat_editor[".isUsebuttonHandlers"] = true;

$tdatasurat_editor[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasurat_editor[".isUseTimeForSearch"] = false;





$tdatasurat_editor[".allSearchFields"] = array();
$tdatasurat_editor[".filterFields"] = array();
$tdatasurat_editor[".requiredSearchFields"] = array();

$tdatasurat_editor[".allSearchFields"][] = "Catatan";
	$tdatasurat_editor[".allSearchFields"][] = "Tarikh";
	$tdatasurat_editor[".allSearchFields"][] = "sid";
	$tdatasurat_editor[".allSearchFields"][] = "Penghantar";
	$tdatasurat_editor[".allSearchFields"][] = "Penerima";
	$tdatasurat_editor[".allSearchFields"][] = "RingkasanKandungan";
	$tdatasurat_editor[".allSearchFields"][] = "rujukanSurat";
	$tdatasurat_editor[".allSearchFields"][] = "Email_Status";
	$tdatasurat_editor[".allSearchFields"][] = "Status";
	$tdatasurat_editor[".allSearchFields"][] = "siid";
	

$tdatasurat_editor[".googleLikeFields"] = array();
$tdatasurat_editor[".googleLikeFields"][] = "siid";
$tdatasurat_editor[".googleLikeFields"][] = "Tarikh";
$tdatasurat_editor[".googleLikeFields"][] = "sid";
$tdatasurat_editor[".googleLikeFields"][] = "Penghantar";
$tdatasurat_editor[".googleLikeFields"][] = "Penerima";
$tdatasurat_editor[".googleLikeFields"][] = "Catatan";
$tdatasurat_editor[".googleLikeFields"][] = "Status";
$tdatasurat_editor[".googleLikeFields"][] = "Email_Status";
$tdatasurat_editor[".googleLikeFields"][] = "rujukanSurat";
$tdatasurat_editor[".googleLikeFields"][] = "RingkasanKandungan";


$tdatasurat_editor[".advSearchFields"] = array();
$tdatasurat_editor[".advSearchFields"][] = "Catatan";
$tdatasurat_editor[".advSearchFields"][] = "Tarikh";
$tdatasurat_editor[".advSearchFields"][] = "sid";
$tdatasurat_editor[".advSearchFields"][] = "Penghantar";
$tdatasurat_editor[".advSearchFields"][] = "Penerima";
$tdatasurat_editor[".advSearchFields"][] = "RingkasanKandungan";
$tdatasurat_editor[".advSearchFields"][] = "rujukanSurat";
$tdatasurat_editor[".advSearchFields"][] = "Email_Status";
$tdatasurat_editor[".advSearchFields"][] = "Status";
$tdatasurat_editor[".advSearchFields"][] = "siid";

$tdatasurat_editor[".tableType"] = "list";

$tdatasurat_editor[".printerPageOrientation"] = 0;
$tdatasurat_editor[".nPrinterPageScale"] = 100;

$tdatasurat_editor[".nPrinterSplitRecords"] = 40;

$tdatasurat_editor[".nPrinterPDFSplitRecords"] = 40;



$tdatasurat_editor[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasurat_editor[".pageSize"] = 20;

$tdatasurat_editor[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY surat_individu.Tarikh DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasurat_editor[".strOrderBy"] = $tstrOrderBy;

$tdatasurat_editor[".orderindexes"] = array();
$tdatasurat_editor[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "surat_individu.Tarikh");

$tdatasurat_editor[".sqlHead"] = "SELECT surat_individu.siid,  surat_individu.Tarikh,  surat_individu.sid,  surat_individu.Penghantar,  surat_individu.Penerima,  surat_individu.Catatan,  surat_individu.Status,  surat_individu.Email_Status,  surat.rujukanSurat,  surat.RingkasanKandungan";
$tdatasurat_editor[".sqlFrom"] = "FROM surat_individu  , surat";
$tdatasurat_editor[".sqlWhereExpr"] = "surat.sid = surat_individu.sid";
$tdatasurat_editor[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasurat_editor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasurat_editor[".arrGroupsPerPage"] = $arrGPP;


$tableKeyssurat_editor = array();
$tableKeyssurat_editor[] = "siid";
$tdatasurat_editor[".Keys"] = $tableKeyssurat_editor;

$tdatasurat_editor[".listFields"] = array();
$tdatasurat_editor[".listFields"][] = "rujukanSurat";
$tdatasurat_editor[".listFields"][] = "RingkasanKandungan";
$tdatasurat_editor[".listFields"][] = "Tarikh";
$tdatasurat_editor[".listFields"][] = "Penghantar";
$tdatasurat_editor[".listFields"][] = "Penerima";

$tdatasurat_editor[".hideMobileList"] = array();


$tdatasurat_editor[".viewFields"] = array();

$tdatasurat_editor[".addFields"] = array();

$tdatasurat_editor[".masterListFields"] = array();
$tdatasurat_editor[".masterListFields"][] = "Catatan";
$tdatasurat_editor[".masterListFields"][] = "Tarikh";
$tdatasurat_editor[".masterListFields"][] = "sid";
$tdatasurat_editor[".masterListFields"][] = "Penghantar";
$tdatasurat_editor[".masterListFields"][] = "Penerima";
$tdatasurat_editor[".masterListFields"][] = "RingkasanKandungan";
$tdatasurat_editor[".masterListFields"][] = "rujukanSurat";
$tdatasurat_editor[".masterListFields"][] = "Email_Status";
$tdatasurat_editor[".masterListFields"][] = "Status";
$tdatasurat_editor[".masterListFields"][] = "siid";

$tdatasurat_editor[".inlineAddFields"] = array();

$tdatasurat_editor[".editFields"] = array();

$tdatasurat_editor[".inlineEditFields"] = array();

$tdatasurat_editor[".exportFields"] = array();

$tdatasurat_editor[".importFields"] = array();
$tdatasurat_editor[".importFields"][] = "siid";
$tdatasurat_editor[".importFields"][] = "Tarikh";
$tdatasurat_editor[".importFields"][] = "sid";
$tdatasurat_editor[".importFields"][] = "Penghantar";
$tdatasurat_editor[".importFields"][] = "Penerima";
$tdatasurat_editor[".importFields"][] = "Catatan";
$tdatasurat_editor[".importFields"][] = "Status";
$tdatasurat_editor[".importFields"][] = "Email_Status";
$tdatasurat_editor[".importFields"][] = "rujukanSurat";
$tdatasurat_editor[".importFields"][] = "RingkasanKandungan";

$tdatasurat_editor[".printFields"] = array();

//	siid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "siid";
	$fdata["GoodName"] = "siid";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_editor","siid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "siid";

		$fdata["isSQLExpression"] = true;
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_editor["siid"] = $fdata;
//	Tarikh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tarikh";
	$fdata["GoodName"] = "Tarikh";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_editor","Tarikh");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Tarikh";

		$fdata["isSQLExpression"] = true;
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




	$tdatasurat_editor["Tarikh"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_editor","sid");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "surat_individu.sid";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_editor["sid"] = $fdata;
//	Penghantar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Penghantar";
	$fdata["GoodName"] = "Penghantar";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_editor","Penghantar");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Penghantar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "surat_individu.Penghantar";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_editor["Penghantar"] = $fdata;
//	Penerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Penerima";
	$fdata["GoodName"] = "Penerima";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_editor","Penerima");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Penerima";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "surat_individu.Penerima";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_editor["Penerima"] = $fdata;
//	Catatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Catatan";
	$fdata["GoodName"] = "Catatan";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_editor","Catatan");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Catatan";

		$fdata["isSQLExpression"] = true;
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




	$tdatasurat_editor["Catatan"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_editor","Status");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Status";

		$fdata["isSQLExpression"] = true;
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




	$tdatasurat_editor["Status"] = $fdata;
//	Email_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email_Status";
	$fdata["GoodName"] = "Email_Status";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_editor","Email_Status");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Email_Status";

		$fdata["isSQLExpression"] = true;
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_editor["Email_Status"] = $fdata;
//	rujukanSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rujukanSurat";
	$fdata["GoodName"] = "rujukanSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_editor","rujukanSurat");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "rujukanSurat";

		$fdata["isSQLExpression"] = true;
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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




	$tdatasurat_editor["rujukanSurat"] = $fdata;
//	RingkasanKandungan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "RingkasanKandungan";
	$fdata["GoodName"] = "RingkasanKandungan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("surat_editor","RingkasanKandungan");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "RingkasanKandungan";

		$fdata["isSQLExpression"] = true;
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




	$tdatasurat_editor["RingkasanKandungan"] = $fdata;


$tables_data["surat_editor"]=&$tdatasurat_editor;
$field_labels["surat_editor"] = &$fieldLabelssurat_editor;
$fieldToolTips["surat_editor"] = &$fieldToolTipssurat_editor;
$page_titles["surat_editor"] = &$pageTitlessurat_editor;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["surat_editor"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["surat_editor"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_surat_editor()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "surat_individu.siid,  surat_individu.Tarikh,  surat_individu.sid,  surat_individu.Penghantar,  surat_individu.Penerima,  surat_individu.Catatan,  surat_individu.Status,  surat_individu.Email_Status,  surat.rujukanSurat,  surat.RingkasanKandungan";
$proto0["m_strFrom"] = "FROM surat_individu  , surat";
$proto0["m_strWhere"] = "surat.sid = surat_individu.sid";
$proto0["m_strOrderBy"] = "ORDER BY surat_individu.Tarikh DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "surat.sid = surat_individu.sid";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_editor"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "= surat_individu.sid";
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
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_editor"
));

$proto5["m_sql"] = "surat_individu.siid";
$proto5["m_srcTableName"] = "surat_editor";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Tarikh",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_editor"
));

$proto7["m_sql"] = "surat_individu.Tarikh";
$proto7["m_srcTableName"] = "surat_editor";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_editor"
));

$proto9["m_sql"] = "surat_individu.sid";
$proto9["m_srcTableName"] = "surat_editor";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Penghantar",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_editor"
));

$proto11["m_sql"] = "surat_individu.Penghantar";
$proto11["m_srcTableName"] = "surat_editor";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Penerima",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_editor"
));

$proto13["m_sql"] = "surat_individu.Penerima";
$proto13["m_srcTableName"] = "surat_editor";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Catatan",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_editor"
));

$proto15["m_sql"] = "surat_individu.Catatan";
$proto15["m_srcTableName"] = "surat_editor";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_editor"
));

$proto17["m_sql"] = "surat_individu.Status";
$proto17["m_srcTableName"] = "surat_editor";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Email_Status",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_editor"
));

$proto19["m_sql"] = "surat_individu.Email_Status";
$proto19["m_srcTableName"] = "surat_editor";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "rujukanSurat",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_editor"
));

$proto21["m_sql"] = "surat.rujukanSurat";
$proto21["m_srcTableName"] = "surat_editor";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "RingkasanKandungan",
	"m_strTable" => "surat",
	"m_srcTableName" => "surat_editor"
));

$proto23["m_sql"] = "surat.RingkasanKandungan";
$proto23["m_srcTableName"] = "surat_editor";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "surat_individu";
$proto26["m_srcTableName"] = "surat_editor";
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
$proto25["m_sql"] = "surat_individu";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "surat_editor";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
												$proto29=array();
$proto29["m_link"] = "SQLL_CROSSJOIN";
			$proto30=array();
$proto30["m_strName"] = "surat";
$proto30["m_srcTableName"] = "surat_editor";
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
$proto30["m_columns"][] = "tarikhKemasukkan";
$proto30["m_columns"][] = "TindakanTotal";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "surat";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "surat_editor";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "Tarikh",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_editor"
));

$proto33["m_column"]=$obj;
$proto33["m_bAsc"] = 0;
$proto33["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto33);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="surat_editor";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_surat_editor = createSqlQuery_surat_editor();



										

$tdatasurat_editor[".sqlquery"] = $queryData_surat_editor;

include_once(getabspath("include/surat_editor_events.php"));
$tableEvents["surat_editor"] = new eventclass_surat_editor;
$tdatasurat_editor[".hasEvents"] = true;

?>