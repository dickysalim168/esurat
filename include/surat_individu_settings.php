<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasurat_individu = array();
	$tdatasurat_individu[".truncateText"] = true;
	$tdatasurat_individu[".NumberOfChars"] = 80;
	$tdatasurat_individu[".ShortName"] = "surat_individu";
	$tdatasurat_individu[".OwnerID"] = "";
	$tdatasurat_individu[".OriginalTable"] = "surat_individu";

//	field labels
$fieldLabelssurat_individu = array();
$fieldToolTipssurat_individu = array();
$pageTitlessurat_individu = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelssurat_individu["Malay"] = array();
	$fieldToolTipssurat_individu["Malay"] = array();
	$pageTitlessurat_individu["Malay"] = array();
	$fieldLabelssurat_individu["Malay"]["siid"] = "Siid";
	$fieldToolTipssurat_individu["Malay"]["siid"] = "";
	$fieldLabelssurat_individu["Malay"]["sid"] = "Sid";
	$fieldToolTipssurat_individu["Malay"]["sid"] = "";
	$fieldLabelssurat_individu["Malay"]["Status"] = "Status";
	$fieldToolTipssurat_individu["Malay"]["Status"] = "";
	$fieldLabelssurat_individu["Malay"]["Tarikh"] = "Tarikh";
	$fieldToolTipssurat_individu["Malay"]["Tarikh"] = "";
	$fieldLabelssurat_individu["Malay"]["Penghantar"] = "Penghantar";
	$fieldToolTipssurat_individu["Malay"]["Penghantar"] = "";
	$fieldLabelssurat_individu["Malay"]["Penerima"] = "Penerima";
	$fieldToolTipssurat_individu["Malay"]["Penerima"] = "";
	$fieldLabelssurat_individu["Malay"]["Catatan"] = "Catatan";
	$fieldToolTipssurat_individu["Malay"]["Catatan"] = "";
	$fieldLabelssurat_individu["Malay"]["Email_Status"] = "Email Status";
	$fieldToolTipssurat_individu["Malay"]["Email_Status"] = "";
	$fieldLabelssurat_individu["Malay"]["Minit"] = "Minit";
	$fieldToolTipssurat_individu["Malay"]["Minit"] = "";
	if (count($fieldToolTipssurat_individu["Malay"]))
		$tdatasurat_individu[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssurat_individu[""] = array();
	$fieldToolTipssurat_individu[""] = array();
	$pageTitlessurat_individu[""] = array();
	$fieldLabelssurat_individu[""]["siid"] = "Siid";
	$fieldToolTipssurat_individu[""]["siid"] = "";
	if (count($fieldToolTipssurat_individu[""]))
		$tdatasurat_individu[".isUseToolTips"] = true;
}


	$tdatasurat_individu[".NCSearch"] = true;



$tdatasurat_individu[".shortTableName"] = "surat_individu";
$tdatasurat_individu[".nSecOptions"] = 0;
$tdatasurat_individu[".recsPerRowList"] = 1;
$tdatasurat_individu[".recsPerRowPrint"] = 1;
$tdatasurat_individu[".mainTableOwnerID"] = "";
$tdatasurat_individu[".moveNext"] = 1;
$tdatasurat_individu[".entityType"] = 0;

$tdatasurat_individu[".strOriginalTableName"] = "surat_individu";




$tdatasurat_individu[".showAddInPopup"] = false;

$tdatasurat_individu[".showEditInPopup"] = false;

$tdatasurat_individu[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasurat_individu[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasurat_individu[".fieldsForRegister"] = array();

$tdatasurat_individu[".listAjax"] = false;

	$tdatasurat_individu[".audit"] = false;

	$tdatasurat_individu[".locking"] = false;

$tdatasurat_individu[".edit"] = true;
$tdatasurat_individu[".afterEditAction"] = 1;
$tdatasurat_individu[".closePopupAfterEdit"] = 1;
$tdatasurat_individu[".afterEditActionDetTable"] = "";

$tdatasurat_individu[".add"] = true;
$tdatasurat_individu[".afterAddAction"] = 1;
$tdatasurat_individu[".closePopupAfterAdd"] = 1;
$tdatasurat_individu[".afterAddActionDetTable"] = "";

$tdatasurat_individu[".list"] = true;

$tdatasurat_individu[".inlineEdit"] = true;
$tdatasurat_individu[".inlineAdd"] = true;
$tdatasurat_individu[".view"] = true;




$tdatasurat_individu[".delete"] = true;

$tdatasurat_individu[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasurat_individu[".searchSaving"] = false;
//

$tdatasurat_individu[".showSearchPanel"] = true;
		$tdatasurat_individu[".flexibleSearch"] = true;

if (isMobile())
	$tdatasurat_individu[".isUseAjaxSuggest"] = false;
else
	$tdatasurat_individu[".isUseAjaxSuggest"] = true;

$tdatasurat_individu[".rowHighlite"] = true;


																																																																			
																																																																																																																																																																																																																																$tdatasurat_individu[".isUsebuttonHandlers"] = true;

$tdatasurat_individu[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasurat_individu[".isUseTimeForSearch"] = false;





$tdatasurat_individu[".allSearchFields"] = array();
$tdatasurat_individu[".filterFields"] = array();
$tdatasurat_individu[".requiredSearchFields"] = array();

$tdatasurat_individu[".allSearchFields"][] = "Minit";
	$tdatasurat_individu[".allSearchFields"][] = "Tarikh";
	$tdatasurat_individu[".allSearchFields"][] = "Penghantar";
	$tdatasurat_individu[".allSearchFields"][] = "Penerima";
	$tdatasurat_individu[".allSearchFields"][] = "Catatan";
	

$tdatasurat_individu[".googleLikeFields"] = array();
$tdatasurat_individu[".googleLikeFields"][] = "siid";
$tdatasurat_individu[".googleLikeFields"][] = "Tarikh";
$tdatasurat_individu[".googleLikeFields"][] = "sid";
$tdatasurat_individu[".googleLikeFields"][] = "Penghantar";
$tdatasurat_individu[".googleLikeFields"][] = "Minit";
$tdatasurat_individu[".googleLikeFields"][] = "Penerima";
$tdatasurat_individu[".googleLikeFields"][] = "Catatan";
$tdatasurat_individu[".googleLikeFields"][] = "Status";
$tdatasurat_individu[".googleLikeFields"][] = "Email_Status";


$tdatasurat_individu[".advSearchFields"] = array();
$tdatasurat_individu[".advSearchFields"][] = "Minit";
$tdatasurat_individu[".advSearchFields"][] = "Tarikh";
$tdatasurat_individu[".advSearchFields"][] = "Penghantar";
$tdatasurat_individu[".advSearchFields"][] = "Penerima";
$tdatasurat_individu[".advSearchFields"][] = "Catatan";

$tdatasurat_individu[".tableType"] = "list";

$tdatasurat_individu[".printerPageOrientation"] = 0;
$tdatasurat_individu[".nPrinterPageScale"] = 100;

$tdatasurat_individu[".nPrinterSplitRecords"] = 40;

$tdatasurat_individu[".nPrinterPDFSplitRecords"] = 40;



$tdatasurat_individu[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasurat_individu[".pageSize"] = 20;

$tdatasurat_individu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasurat_individu[".strOrderBy"] = $tstrOrderBy;

$tdatasurat_individu[".orderindexes"] = array();

$tdatasurat_individu[".sqlHead"] = "SELECT siid,  	Tarikh,  	sid,  	Penghantar,  	Minit,  	Penerima,  	Catatan,  	Status,  	Email_Status";
$tdatasurat_individu[".sqlFrom"] = "FROM surat_individu";
$tdatasurat_individu[".sqlWhereExpr"] = "";
$tdatasurat_individu[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasurat_individu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasurat_individu[".arrGroupsPerPage"] = $arrGPP;


$tableKeyssurat_individu = array();
$tableKeyssurat_individu[] = "siid";
$tdatasurat_individu[".Keys"] = $tableKeyssurat_individu;

$tdatasurat_individu[".listFields"] = array();
$tdatasurat_individu[".listFields"][] = "Minit";
$tdatasurat_individu[".listFields"][] = "Tarikh";
$tdatasurat_individu[".listFields"][] = "Penghantar";
$tdatasurat_individu[".listFields"][] = "Penerima";
$tdatasurat_individu[".listFields"][] = "Catatan";
$tdatasurat_individu[".listFields"][] = "Status";

$tdatasurat_individu[".hideMobileList"] = array();


$tdatasurat_individu[".viewFields"] = array();
$tdatasurat_individu[".viewFields"][] = "Minit";
$tdatasurat_individu[".viewFields"][] = "Tarikh";
$tdatasurat_individu[".viewFields"][] = "Penghantar";
$tdatasurat_individu[".viewFields"][] = "Penerima";
$tdatasurat_individu[".viewFields"][] = "Catatan";
$tdatasurat_individu[".viewFields"][] = "Status";

$tdatasurat_individu[".addFields"] = array();
$tdatasurat_individu[".addFields"][] = "Minit";
$tdatasurat_individu[".addFields"][] = "Tarikh";
$tdatasurat_individu[".addFields"][] = "Penghantar";
$tdatasurat_individu[".addFields"][] = "Penerima";
$tdatasurat_individu[".addFields"][] = "Catatan";

$tdatasurat_individu[".masterListFields"] = array();
$tdatasurat_individu[".masterListFields"][] = "Minit";
$tdatasurat_individu[".masterListFields"][] = "Email_Status";
$tdatasurat_individu[".masterListFields"][] = "sid";
$tdatasurat_individu[".masterListFields"][] = "Tarikh";
$tdatasurat_individu[".masterListFields"][] = "Penghantar";
$tdatasurat_individu[".masterListFields"][] = "Penerima";
$tdatasurat_individu[".masterListFields"][] = "Catatan";
$tdatasurat_individu[".masterListFields"][] = "siid";
$tdatasurat_individu[".masterListFields"][] = "Status";

$tdatasurat_individu[".inlineAddFields"] = array();
$tdatasurat_individu[".inlineAddFields"][] = "Minit";
$tdatasurat_individu[".inlineAddFields"][] = "Tarikh";
$tdatasurat_individu[".inlineAddFields"][] = "Penghantar";
$tdatasurat_individu[".inlineAddFields"][] = "Penerima";
$tdatasurat_individu[".inlineAddFields"][] = "Catatan";

$tdatasurat_individu[".editFields"] = array();
$tdatasurat_individu[".editFields"][] = "Minit";
$tdatasurat_individu[".editFields"][] = "Tarikh";
$tdatasurat_individu[".editFields"][] = "Penghantar";
$tdatasurat_individu[".editFields"][] = "Penerima";
$tdatasurat_individu[".editFields"][] = "Catatan";

$tdatasurat_individu[".inlineEditFields"] = array();
$tdatasurat_individu[".inlineEditFields"][] = "Minit";
$tdatasurat_individu[".inlineEditFields"][] = "Tarikh";
$tdatasurat_individu[".inlineEditFields"][] = "Penghantar";
$tdatasurat_individu[".inlineEditFields"][] = "Penerima";
$tdatasurat_individu[".inlineEditFields"][] = "Catatan";

$tdatasurat_individu[".exportFields"] = array();

$tdatasurat_individu[".importFields"] = array();

$tdatasurat_individu[".printFields"] = array();

//	siid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "siid";
	$fdata["GoodName"] = "siid";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_individu","siid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "siid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "siid";

	
	
			
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








	$tdatasurat_individu["siid"] = $fdata;
//	Tarikh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tarikh";
	$fdata["GoodName"] = "Tarikh";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_individu","Tarikh");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasurat_individu["Tarikh"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_individu","sid");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sid";

	
	
			
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








	$tdatasurat_individu["sid"] = $fdata;
//	Penghantar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Penghantar";
	$fdata["GoodName"] = "Penghantar";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_individu","Penghantar");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Penghantar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Penghantar";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_individu["Penghantar"] = $fdata;
//	Minit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Minit";
	$fdata["GoodName"] = "Minit";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_individu","Minit");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasurat_individu["Minit"] = $fdata;
//	Penerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Penerima";
	$fdata["GoodName"] = "Penerima";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_individu","Penerima");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Penerima";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Penerima";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_individu["Penerima"] = $fdata;
//	Catatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Catatan";
	$fdata["GoodName"] = "Catatan";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_individu","Catatan");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Catatan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Catatan";

	
	
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




	$tdatasurat_individu["Catatan"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_individu","Status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
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








	$tdatasurat_individu["Status"] = $fdata;
//	Email_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Email_Status";
	$fdata["GoodName"] = "Email_Status";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = GetFieldLabel("surat_individu","Email_Status");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "Email_Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email_Status";

	
	
			
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








	$tdatasurat_individu["Email_Status"] = $fdata;


$tables_data["surat_individu"]=&$tdatasurat_individu;
$field_labels["surat_individu"] = &$fieldLabelssurat_individu;
$fieldToolTips["surat_individu"] = &$fieldToolTipssurat_individu;
$page_titles["surat_individu"] = &$pageTitlessurat_individu;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["surat_individu"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["surat_individu"] = array();


	
				$strOriginalDetailsTable="surat";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="surat";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "surat";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["surat_individu"][0] = $masterParams;
				$masterTablesData["surat_individu"][0]["masterKeys"] = array();
	$masterTablesData["surat_individu"][0]["masterKeys"][]="sid";
				$masterTablesData["surat_individu"][0]["detailKeys"] = array();
	$masterTablesData["surat_individu"][0]["detailKeys"][]="sid";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_surat_individu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "siid,  	Tarikh,  	sid,  	Penghantar,  	Minit,  	Penerima,  	Catatan,  	Status,  	Email_Status";
$proto0["m_strFrom"] = "FROM surat_individu";
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
	"m_strName" => "siid",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_individu"
));

$proto5["m_sql"] = "siid";
$proto5["m_srcTableName"] = "surat_individu";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Tarikh",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_individu"
));

$proto7["m_sql"] = "Tarikh";
$proto7["m_srcTableName"] = "surat_individu";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_individu"
));

$proto9["m_sql"] = "sid";
$proto9["m_srcTableName"] = "surat_individu";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Penghantar",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_individu"
));

$proto11["m_sql"] = "Penghantar";
$proto11["m_srcTableName"] = "surat_individu";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Minit",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_individu"
));

$proto13["m_sql"] = "Minit";
$proto13["m_srcTableName"] = "surat_individu";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Penerima",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_individu"
));

$proto15["m_sql"] = "Penerima";
$proto15["m_srcTableName"] = "surat_individu";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Catatan",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_individu"
));

$proto17["m_sql"] = "Catatan";
$proto17["m_srcTableName"] = "surat_individu";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_individu"
));

$proto19["m_sql"] = "Status";
$proto19["m_srcTableName"] = "surat_individu";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Email_Status",
	"m_strTable" => "surat_individu",
	"m_srcTableName" => "surat_individu"
));

$proto21["m_sql"] = "Email_Status";
$proto21["m_srcTableName"] = "surat_individu";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "surat_individu";
$proto24["m_srcTableName"] = "surat_individu";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "siid";
$proto24["m_columns"][] = "Tarikh";
$proto24["m_columns"][] = "sid";
$proto24["m_columns"][] = "Penghantar";
$proto24["m_columns"][] = "Minit";
$proto24["m_columns"][] = "Penerima";
$proto24["m_columns"][] = "Catatan";
$proto24["m_columns"][] = "Status";
$proto24["m_columns"][] = "Email_Status";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "surat_individu";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "surat_individu";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="surat_individu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_surat_individu = createSqlQuery_surat_individu();



									

$tdatasurat_individu[".sqlquery"] = $queryData_surat_individu;

include_once(getabspath("include/surat_individu_events.php"));
$tableEvents["surat_individu"] = new eventclass_surat_individu;
$tdatasurat_individu[".hasEvents"] = true;

?>