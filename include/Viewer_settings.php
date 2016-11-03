<?php
require_once(getabspath("classes/cipherer.php"));




$tdataViewer = array();
	$tdataViewer[".truncateText"] = true;
	$tdataViewer[".NumberOfChars"] = 80;
	$tdataViewer[".ShortName"] = "Viewer";
	$tdataViewer[".OwnerID"] = "Penerima";
	$tdataViewer[".OriginalTable"] = "surat_individu";

//	field labels
$fieldLabelsViewer = array();
$fieldToolTipsViewer = array();
$pageTitlesViewer = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsViewer["Malay"] = array();
	$fieldToolTipsViewer["Malay"] = array();
	$pageTitlesViewer["Malay"] = array();
	$fieldLabelsViewer["Malay"]["siid"] = "Siid";
	$fieldToolTipsViewer["Malay"]["siid"] = "";
	$fieldLabelsViewer["Malay"]["sid"] = "Sid";
	$fieldToolTipsViewer["Malay"]["sid"] = "";
	$fieldLabelsViewer["Malay"]["Status"] = "Status";
	$fieldToolTipsViewer["Malay"]["Status"] = "";
	$fieldLabelsViewer["Malay"]["Tarikh"] = "Tarikh";
	$fieldToolTipsViewer["Malay"]["Tarikh"] = "";
	$fieldLabelsViewer["Malay"]["Penghantar"] = "Penghantar";
	$fieldToolTipsViewer["Malay"]["Penghantar"] = "";
	$fieldLabelsViewer["Malay"]["Penerima"] = "Penerima";
	$fieldToolTipsViewer["Malay"]["Penerima"] = "";
	$fieldLabelsViewer["Malay"]["Catatan"] = "Catatan";
	$fieldToolTipsViewer["Malay"]["Catatan"] = "";
	$fieldLabelsViewer["Malay"]["Email_Status"] = "Email Status";
	$fieldToolTipsViewer["Malay"]["Email_Status"] = "";
	$fieldLabelsViewer["Malay"]["rujukanSurat"] = "Rujukan Surat";
	$fieldToolTipsViewer["Malay"]["rujukanSurat"] = "";
	$fieldLabelsViewer["Malay"]["RingkasanKandungan"] = "Ringkasan Kandungan";
	$fieldToolTipsViewer["Malay"]["RingkasanKandungan"] = "";
	if (count($fieldToolTipsViewer["Malay"]))
		$tdataViewer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsViewer[""] = array();
	$fieldToolTipsViewer[""] = array();
	$pageTitlesViewer[""] = array();
	if (count($fieldToolTipsViewer[""]))
		$tdataViewer[".isUseToolTips"] = true;
}


	$tdataViewer[".NCSearch"] = true;



$tdataViewer[".shortTableName"] = "Viewer";
$tdataViewer[".nSecOptions"] = 1;
$tdataViewer[".recsPerRowList"] = 1;
$tdataViewer[".recsPerRowPrint"] = 1;
$tdataViewer[".mainTableOwnerID"] = "Penerima";
$tdataViewer[".moveNext"] = 1;
$tdataViewer[".entityType"] = 1;

$tdataViewer[".strOriginalTableName"] = "surat_individu";




$tdataViewer[".showAddInPopup"] = false;

$tdataViewer[".showEditInPopup"] = false;

$tdataViewer[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataViewer[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataViewer[".fieldsForRegister"] = array();

$tdataViewer[".listAjax"] = false;

	$tdataViewer[".audit"] = false;

	$tdataViewer[".locking"] = false;

$tdataViewer[".edit"] = true;
$tdataViewer[".afterEditAction"] = 1;
$tdataViewer[".closePopupAfterEdit"] = 1;
$tdataViewer[".afterEditActionDetTable"] = "";


$tdataViewer[".list"] = true;






$tdataViewer[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataViewer[".searchSaving"] = false;
//

$tdataViewer[".showSearchPanel"] = true;
		$tdataViewer[".flexibleSearch"] = true;

if (isMobile())
	$tdataViewer[".isUseAjaxSuggest"] = false;
else
	$tdataViewer[".isUseAjaxSuggest"] = true;

$tdataViewer[".rowHighlite"] = true;


																																													
																														$tdataViewer[".isUsebuttonHandlers"] = true;

$tdataViewer[".addPageEvents"] = false;

// use timepicker for search panel
$tdataViewer[".isUseTimeForSearch"] = false;





$tdataViewer[".allSearchFields"] = array();
$tdataViewer[".filterFields"] = array();
$tdataViewer[".requiredSearchFields"] = array();

$tdataViewer[".allSearchFields"][] = "Catatan";
	$tdataViewer[".allSearchFields"][] = "Tarikh";
	$tdataViewer[".allSearchFields"][] = "sid";
	$tdataViewer[".allSearchFields"][] = "Penghantar";
	$tdataViewer[".allSearchFields"][] = "Penerima";
	$tdataViewer[".allSearchFields"][] = "RingkasanKandungan";
	$tdataViewer[".allSearchFields"][] = "rujukanSurat";
	$tdataViewer[".allSearchFields"][] = "Email_Status";
	$tdataViewer[".allSearchFields"][] = "Status";
	$tdataViewer[".allSearchFields"][] = "siid";
	

$tdataViewer[".googleLikeFields"] = array();
$tdataViewer[".googleLikeFields"][] = "siid";
$tdataViewer[".googleLikeFields"][] = "Tarikh";
$tdataViewer[".googleLikeFields"][] = "sid";
$tdataViewer[".googleLikeFields"][] = "Penghantar";
$tdataViewer[".googleLikeFields"][] = "Penerima";
$tdataViewer[".googleLikeFields"][] = "Catatan";
$tdataViewer[".googleLikeFields"][] = "Status";
$tdataViewer[".googleLikeFields"][] = "Email_Status";
$tdataViewer[".googleLikeFields"][] = "rujukanSurat";
$tdataViewer[".googleLikeFields"][] = "RingkasanKandungan";


$tdataViewer[".advSearchFields"] = array();
$tdataViewer[".advSearchFields"][] = "Catatan";
$tdataViewer[".advSearchFields"][] = "Tarikh";
$tdataViewer[".advSearchFields"][] = "sid";
$tdataViewer[".advSearchFields"][] = "Penghantar";
$tdataViewer[".advSearchFields"][] = "Penerima";
$tdataViewer[".advSearchFields"][] = "RingkasanKandungan";
$tdataViewer[".advSearchFields"][] = "rujukanSurat";
$tdataViewer[".advSearchFields"][] = "Email_Status";
$tdataViewer[".advSearchFields"][] = "Status";
$tdataViewer[".advSearchFields"][] = "siid";

$tdataViewer[".tableType"] = "list";

$tdataViewer[".printerPageOrientation"] = 0;
$tdataViewer[".nPrinterPageScale"] = 100;

$tdataViewer[".nPrinterSplitRecords"] = 40;

$tdataViewer[".nPrinterPDFSplitRecords"] = 40;



$tdataViewer[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataViewer[".pageSize"] = 20;

$tdataViewer[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY surat_individu.Tarikh DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataViewer[".strOrderBy"] = $tstrOrderBy;

$tdataViewer[".orderindexes"] = array();
$tdataViewer[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "surat_individu.Tarikh");

$tdataViewer[".sqlHead"] = "SELECT surat_individu.siid,  surat_individu.Tarikh,  surat_individu.sid,  surat_individu.Penghantar,  surat_individu.Penerima,  surat_individu.Catatan,  surat_individu.Status,  surat_individu.Email_Status,  surat.rujukanSurat,  surat.RingkasanKandungan";
$tdataViewer[".sqlFrom"] = "FROM surat_individu  , surat";
$tdataViewer[".sqlWhereExpr"] = "surat.sid = surat_individu.sid";
$tdataViewer[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataViewer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataViewer[".arrGroupsPerPage"] = $arrGPP;


$tableKeysViewer = array();
$tableKeysViewer[] = "siid";
$tdataViewer[".Keys"] = $tableKeysViewer;

$tdataViewer[".listFields"] = array();
$tdataViewer[".listFields"][] = "rujukanSurat";
$tdataViewer[".listFields"][] = "RingkasanKandungan";
$tdataViewer[".listFields"][] = "Tarikh";
$tdataViewer[".listFields"][] = "Penghantar";
$tdataViewer[".listFields"][] = "Penerima";

$tdataViewer[".hideMobileList"] = array();


$tdataViewer[".viewFields"] = array();

$tdataViewer[".addFields"] = array();

$tdataViewer[".masterListFields"] = array();
$tdataViewer[".masterListFields"][] = "Catatan";
$tdataViewer[".masterListFields"][] = "Tarikh";
$tdataViewer[".masterListFields"][] = "sid";
$tdataViewer[".masterListFields"][] = "Penghantar";
$tdataViewer[".masterListFields"][] = "Penerima";
$tdataViewer[".masterListFields"][] = "RingkasanKandungan";
$tdataViewer[".masterListFields"][] = "rujukanSurat";
$tdataViewer[".masterListFields"][] = "Email_Status";
$tdataViewer[".masterListFields"][] = "Status";
$tdataViewer[".masterListFields"][] = "siid";

$tdataViewer[".inlineAddFields"] = array();

$tdataViewer[".editFields"] = array();

$tdataViewer[".inlineEditFields"] = array();

$tdataViewer[".exportFields"] = array();

$tdataViewer[".importFields"] = array();

$tdataViewer[".printFields"] = array();

//	siid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "siid";
	$fdata["GoodName"] = "siid";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("Viewer","siid");
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




	$tdataViewer["siid"] = $fdata;
//	Tarikh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tarikh";
	$fdata["GoodName"] = "Tarikh";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("Viewer","Tarikh");
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




	$tdataViewer["Tarikh"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("Viewer","sid");
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




	$tdataViewer["sid"] = $fdata;
//	Penghantar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Penghantar";
	$fdata["GoodName"] = "Penghantar";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("Viewer","Penghantar");
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




	$tdataViewer["Penghantar"] = $fdata;
//	Penerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Penerima";
	$fdata["GoodName"] = "Penerima";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("Viewer","Penerima");
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




	$tdataViewer["Penerima"] = $fdata;
//	Catatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Catatan";
	$fdata["GoodName"] = "Catatan";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("Viewer","Catatan");
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




	$tdataViewer["Catatan"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("Viewer","Status");
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




	$tdataViewer["Status"] = $fdata;
//	Email_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email_Status";
	$fdata["GoodName"] = "Email_Status";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("Viewer","Email_Status");
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




	$tdataViewer["Email_Status"] = $fdata;
//	rujukanSurat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rujukanSurat";
	$fdata["GoodName"] = "rujukanSurat";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("Viewer","rujukanSurat");
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




	$tdataViewer["rujukanSurat"] = $fdata;
//	RingkasanKandungan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "RingkasanKandungan";
	$fdata["GoodName"] = "RingkasanKandungan";
	$fdata["ownerTable"] = "surat";
	$fdata["Label"] = GetFieldLabel("Viewer","RingkasanKandungan");
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




	$tdataViewer["RingkasanKandungan"] = $fdata;


$tables_data["Viewer"]=&$tdataViewer;
$field_labels["Viewer"] = &$fieldLabelsViewer;
$fieldToolTips["Viewer"] = &$fieldToolTipsViewer;
$page_titles["Viewer"] = &$pageTitlesViewer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Viewer"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Viewer"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Viewer()
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
	"m_srcTableName" => "Viewer"
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
	"m_srcTableName" => "Viewer"
));

$proto5["m_sql"] = "surat_individu.siid";
$proto5["m_srcTableName"] = "Viewer";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Tarikh",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "Viewer"
));

$proto7["m_sql"] = "surat_individu.Tarikh";
$proto7["m_srcTableName"] = "Viewer";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "Viewer"
));

$proto9["m_sql"] = "surat_individu.sid";
$proto9["m_srcTableName"] = "Viewer";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Penghantar",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "Viewer"
));

$proto11["m_sql"] = "surat_individu.Penghantar";
$proto11["m_srcTableName"] = "Viewer";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Penerima",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "Viewer"
));

$proto13["m_sql"] = "surat_individu.Penerima";
$proto13["m_srcTableName"] = "Viewer";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Catatan",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "Viewer"
));

$proto15["m_sql"] = "surat_individu.Catatan";
$proto15["m_srcTableName"] = "Viewer";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "Viewer"
));

$proto17["m_sql"] = "surat_individu.Status";
$proto17["m_srcTableName"] = "Viewer";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Email_Status",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "Viewer"
));

$proto19["m_sql"] = "surat_individu.Email_Status";
$proto19["m_srcTableName"] = "Viewer";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "rujukanSurat",
	"m_strTable" => "surat",
	"m_srcTableName" => "Viewer"
));

$proto21["m_sql"] = "surat.rujukanSurat";
$proto21["m_srcTableName"] = "Viewer";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "RingkasanKandungan",
	"m_strTable" => "surat",
	"m_srcTableName" => "Viewer"
));

$proto23["m_sql"] = "surat.RingkasanKandungan";
$proto23["m_srcTableName"] = "Viewer";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "surat_individu";
$proto26["m_srcTableName"] = "Viewer";
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
$proto25["m_srcTableName"] = "Viewer";
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
$proto30["m_srcTableName"] = "Viewer";
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
$proto29["m_srcTableName"] = "Viewer";
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
	"m_srcTableName" => "Viewer"
));

$proto33["m_column"]=$obj;
$proto33["m_bAsc"] = 0;
$proto33["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto33);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Viewer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Viewer = createSqlQuery_Viewer();



										

$tdataViewer[".sqlquery"] = $queryData_Viewer;

include_once(getabspath("include/Viewer_events.php"));
$tableEvents["Viewer"] = new eventclass_Viewer;
$tdataViewer[".hasEvents"] = true;

?>