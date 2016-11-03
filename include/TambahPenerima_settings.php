<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTambahPenerima = array();
	$tdataTambahPenerima[".truncateText"] = true;
	$tdataTambahPenerima[".NumberOfChars"] = 80;
	$tdataTambahPenerima[".ShortName"] = "TambahPenerima";
	$tdataTambahPenerima[".OwnerID"] = "";
	$tdataTambahPenerima[".OriginalTable"] = "pengguna";

//	field labels
$fieldLabelsTambahPenerima = array();
$fieldToolTipsTambahPenerima = array();
$pageTitlesTambahPenerima = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsTambahPenerima["Malay"] = array();
	$fieldToolTipsTambahPenerima["Malay"] = array();
	$pageTitlesTambahPenerima["Malay"] = array();
	$fieldLabelsTambahPenerima["Malay"]["pid"] = "Pid";
	$fieldToolTipsTambahPenerima["Malay"]["pid"] = "";
	$fieldLabelsTambahPenerima["Malay"]["NoKP"] = "No KP";
	$fieldToolTipsTambahPenerima["Malay"]["NoKP"] = "";
	$fieldLabelsTambahPenerima["Malay"]["Password"] = "Password";
	$fieldToolTipsTambahPenerima["Malay"]["Password"] = "";
	$fieldLabelsTambahPenerima["Malay"]["Email"] = "Email";
	$fieldToolTipsTambahPenerima["Malay"]["Email"] = "";
	$fieldLabelsTambahPenerima["Malay"]["Nama"] = "Nama";
	$fieldToolTipsTambahPenerima["Malay"]["Nama"] = "";
	$fieldLabelsTambahPenerima["Malay"]["Bahagian"] = "Bahagian";
	$fieldToolTipsTambahPenerima["Malay"]["Bahagian"] = "";
	$fieldLabelsTambahPenerima["Malay"]["Jawatan"] = "Jawatan";
	$fieldToolTipsTambahPenerima["Malay"]["Jawatan"] = "";
	$fieldLabelsTambahPenerima["Malay"]["Level"] = "Level";
	$fieldToolTipsTambahPenerima["Malay"]["Level"] = "";
	$fieldLabelsTambahPenerima["Malay"]["iid"] = "Iid";
	$fieldToolTipsTambahPenerima["Malay"]["iid"] = "";
	$fieldLabelsTambahPenerima["Malay"]["Status"] = "Status";
	$fieldToolTipsTambahPenerima["Malay"]["Status"] = "";
	if (count($fieldToolTipsTambahPenerima["Malay"]))
		$tdataTambahPenerima[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTambahPenerima[""] = array();
	$fieldToolTipsTambahPenerima[""] = array();
	$pageTitlesTambahPenerima[""] = array();
	$fieldLabelsTambahPenerima[""]["pid"] = "Pid";
	$fieldToolTipsTambahPenerima[""]["pid"] = "";
	$fieldLabelsTambahPenerima[""]["Status"] = "Status";
	$fieldToolTipsTambahPenerima[""]["Status"] = "";
	if (count($fieldToolTipsTambahPenerima[""]))
		$tdataTambahPenerima[".isUseToolTips"] = true;
}


	$tdataTambahPenerima[".NCSearch"] = true;



$tdataTambahPenerima[".shortTableName"] = "TambahPenerima";
$tdataTambahPenerima[".nSecOptions"] = 0;
$tdataTambahPenerima[".recsPerRowList"] = 1;
$tdataTambahPenerima[".recsPerRowPrint"] = 1;
$tdataTambahPenerima[".mainTableOwnerID"] = "";
$tdataTambahPenerima[".moveNext"] = 1;
$tdataTambahPenerima[".entityType"] = 1;

$tdataTambahPenerima[".strOriginalTableName"] = "pengguna";




$tdataTambahPenerima[".showAddInPopup"] = false;

$tdataTambahPenerima[".showEditInPopup"] = false;

$tdataTambahPenerima[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTambahPenerima[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTambahPenerima[".fieldsForRegister"] = array();

$tdataTambahPenerima[".listAjax"] = false;

	$tdataTambahPenerima[".audit"] = false;

	$tdataTambahPenerima[".locking"] = false;

$tdataTambahPenerima[".edit"] = true;
$tdataTambahPenerima[".afterEditAction"] = 1;
$tdataTambahPenerima[".closePopupAfterEdit"] = 1;
$tdataTambahPenerima[".afterEditActionDetTable"] = "";

$tdataTambahPenerima[".add"] = true;
$tdataTambahPenerima[".afterAddAction"] = 1;
$tdataTambahPenerima[".closePopupAfterAdd"] = 1;
$tdataTambahPenerima[".afterAddActionDetTable"] = "";

$tdataTambahPenerima[".list"] = true;

$tdataTambahPenerima[".inlineEdit"] = true;





$tdataTambahPenerima[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataTambahPenerima[".searchSaving"] = false;
//

$tdataTambahPenerima[".showSearchPanel"] = true;
		$tdataTambahPenerima[".flexibleSearch"] = true;

if (isMobile())
	$tdataTambahPenerima[".isUseAjaxSuggest"] = false;
else
	$tdataTambahPenerima[".isUseAjaxSuggest"] = true;

$tdataTambahPenerima[".rowHighlite"] = true;


																		
																																																									$tdataTambahPenerima[".isUsebuttonHandlers"] = true;

$tdataTambahPenerima[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTambahPenerima[".isUseTimeForSearch"] = false;





$tdataTambahPenerima[".allSearchFields"] = array();
$tdataTambahPenerima[".filterFields"] = array();
$tdataTambahPenerima[".requiredSearchFields"] = array();

$tdataTambahPenerima[".allSearchFields"][] = "Nama";
	$tdataTambahPenerima[".allSearchFields"][] = "NoKP";
	$tdataTambahPenerima[".allSearchFields"][] = "Bahagian";
	$tdataTambahPenerima[".allSearchFields"][] = "Jawatan";
	$tdataTambahPenerima[".allSearchFields"][] = "Email";
	$tdataTambahPenerima[".allSearchFields"][] = "Level";
	$tdataTambahPenerima[".allSearchFields"][] = "Status";
	

$tdataTambahPenerima[".googleLikeFields"] = array();
$tdataTambahPenerima[".googleLikeFields"][] = "NoKP";
$tdataTambahPenerima[".googleLikeFields"][] = "Password";
$tdataTambahPenerima[".googleLikeFields"][] = "Email";
$tdataTambahPenerima[".googleLikeFields"][] = "Nama";
$tdataTambahPenerima[".googleLikeFields"][] = "Bahagian";
$tdataTambahPenerima[".googleLikeFields"][] = "Jawatan";
$tdataTambahPenerima[".googleLikeFields"][] = "Level";
$tdataTambahPenerima[".googleLikeFields"][] = "iid";
$tdataTambahPenerima[".googleLikeFields"][] = "Status";
$tdataTambahPenerima[".googleLikeFields"][] = "pid";


$tdataTambahPenerima[".advSearchFields"] = array();
$tdataTambahPenerima[".advSearchFields"][] = "Nama";
$tdataTambahPenerima[".advSearchFields"][] = "NoKP";
$tdataTambahPenerima[".advSearchFields"][] = "Bahagian";
$tdataTambahPenerima[".advSearchFields"][] = "Jawatan";
$tdataTambahPenerima[".advSearchFields"][] = "Email";
$tdataTambahPenerima[".advSearchFields"][] = "Level";
$tdataTambahPenerima[".advSearchFields"][] = "Status";

$tdataTambahPenerima[".tableType"] = "list";

$tdataTambahPenerima[".printerPageOrientation"] = 0;
$tdataTambahPenerima[".nPrinterPageScale"] = 100;

$tdataTambahPenerima[".nPrinterSplitRecords"] = 40;

$tdataTambahPenerima[".nPrinterPDFSplitRecords"] = 40;



$tdataTambahPenerima[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataTambahPenerima[".pageSize"] = 40;

$tdataTambahPenerima[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTambahPenerima[".strOrderBy"] = $tstrOrderBy;

$tdataTambahPenerima[".orderindexes"] = array();

$tdataTambahPenerima[".sqlHead"] = "SELECT NoKP,  Password,  Email,  Nama,  Bahagian,  Jawatan,  `Level`,  iid,  Status,  pid";
$tdataTambahPenerima[".sqlFrom"] = "FROM pengguna";
$tdataTambahPenerima[".sqlWhereExpr"] = "";
$tdataTambahPenerima[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTambahPenerima[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTambahPenerima[".arrGroupsPerPage"] = $arrGPP;


$tableKeysTambahPenerima = array();
$tableKeysTambahPenerima[] = "pid";
$tdataTambahPenerima[".Keys"] = $tableKeysTambahPenerima;

$tdataTambahPenerima[".listFields"] = array();
$tdataTambahPenerima[".listFields"][] = "Nama";
$tdataTambahPenerima[".listFields"][] = "Bahagian";
$tdataTambahPenerima[".listFields"][] = "Jawatan";

$tdataTambahPenerima[".hideMobileList"] = array();


$tdataTambahPenerima[".viewFields"] = array();

$tdataTambahPenerima[".addFields"] = array();

$tdataTambahPenerima[".masterListFields"] = array();
$tdataTambahPenerima[".masterListFields"][] = "iid";
$tdataTambahPenerima[".masterListFields"][] = "pid";
$tdataTambahPenerima[".masterListFields"][] = "Nama";
$tdataTambahPenerima[".masterListFields"][] = "NoKP";
$tdataTambahPenerima[".masterListFields"][] = "Bahagian";
$tdataTambahPenerima[".masterListFields"][] = "Jawatan";
$tdataTambahPenerima[".masterListFields"][] = "Password";
$tdataTambahPenerima[".masterListFields"][] = "Email";
$tdataTambahPenerima[".masterListFields"][] = "Level";
$tdataTambahPenerima[".masterListFields"][] = "Status";

$tdataTambahPenerima[".inlineAddFields"] = array();

$tdataTambahPenerima[".editFields"] = array();

$tdataTambahPenerima[".inlineEditFields"] = array();

$tdataTambahPenerima[".exportFields"] = array();

$tdataTambahPenerima[".importFields"] = array();

$tdataTambahPenerima[".printFields"] = array();

//	NoKP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NoKP";
	$fdata["GoodName"] = "NoKP";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("TambahPenerima","NoKP");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "NoKP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoKP";

	
	
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
			$edata["EditParams"].= " maxlength=14";

		$edata["controlWidth"] = 300;

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




	$tdataTambahPenerima["NoKP"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("TambahPenerima","Password");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "Password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Password");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 300;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataTambahPenerima["Password"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("TambahPenerima","Email");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 300;

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




	$tdataTambahPenerima["Email"] = $fdata;
//	Nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Nama";
	$fdata["GoodName"] = "Nama";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("TambahPenerima","Nama");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Nama";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nama";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 300;

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




	$tdataTambahPenerima["Nama"] = $fdata;
//	Bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Bahagian";
	$fdata["GoodName"] = "Bahagian";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("TambahPenerima","Bahagian");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Bahagian";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bahagian";

	
	
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
	$edata["LookupTable"] = "pejawatan_ref_department";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 300;

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




	$tdataTambahPenerima["Bahagian"] = $fdata;
//	Jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Jawatan";
	$fdata["GoodName"] = "Jawatan";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("TambahPenerima","Jawatan");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Jawatan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Jawatan";

	
	
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
	$edata["LookupTable"] = "pejawatan_ref_position";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 300;

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




	$tdataTambahPenerima["Jawatan"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("TambahPenerima","Level");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Level`";

	
	
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
	$edata["LookupTable"] = "drop_level";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "lid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "level";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
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
	
	// the end of search options settings




	$tdataTambahPenerima["Level"] = $fdata;
//	iid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "iid";
	$fdata["GoodName"] = "iid";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("TambahPenerima","iid");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "iid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "iid";

	
	
			
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








	$tdataTambahPenerima["iid"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("TambahPenerima","Status");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Aktif";
	$edata["LookupValues"][] = "Tidak Aktif";

	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataTambahPenerima["Status"] = $fdata;
//	pid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "pid";
	$fdata["GoodName"] = "pid";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("TambahPenerima","pid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "pid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pid";

	
	
			
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








	$tdataTambahPenerima["pid"] = $fdata;


$tables_data["TambahPenerima"]=&$tdataTambahPenerima;
$field_labels["TambahPenerima"] = &$fieldLabelsTambahPenerima;
$fieldToolTips["TambahPenerima"] = &$fieldToolTipsTambahPenerima;
$page_titles["TambahPenerima"] = &$pageTitlesTambahPenerima;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TambahPenerima"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["TambahPenerima"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TambahPenerima()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NoKP,  Password,  Email,  Nama,  Bahagian,  Jawatan,  `Level`,  iid,  Status,  pid";
$proto0["m_strFrom"] = "FROM pengguna";
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
	"m_strName" => "NoKP",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "TambahPenerima"
));

$proto5["m_sql"] = "NoKP";
$proto5["m_srcTableName"] = "TambahPenerima";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "TambahPenerima"
));

$proto7["m_sql"] = "Password";
$proto7["m_srcTableName"] = "TambahPenerima";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "TambahPenerima"
));

$proto9["m_sql"] = "Email";
$proto9["m_srcTableName"] = "TambahPenerima";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Nama",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "TambahPenerima"
));

$proto11["m_sql"] = "Nama";
$proto11["m_srcTableName"] = "TambahPenerima";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Bahagian",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "TambahPenerima"
));

$proto13["m_sql"] = "Bahagian";
$proto13["m_srcTableName"] = "TambahPenerima";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Jawatan",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "TambahPenerima"
));

$proto15["m_sql"] = "Jawatan";
$proto15["m_srcTableName"] = "TambahPenerima";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "TambahPenerima"
));

$proto17["m_sql"] = "`Level`";
$proto17["m_srcTableName"] = "TambahPenerima";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "iid",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "TambahPenerima"
));

$proto19["m_sql"] = "iid";
$proto19["m_srcTableName"] = "TambahPenerima";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "TambahPenerima"
));

$proto21["m_sql"] = "Status";
$proto21["m_srcTableName"] = "TambahPenerima";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "pid",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "TambahPenerima"
));

$proto23["m_sql"] = "pid";
$proto23["m_srcTableName"] = "TambahPenerima";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "pengguna";
$proto26["m_srcTableName"] = "TambahPenerima";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "pid";
$proto26["m_columns"][] = "NoKP";
$proto26["m_columns"][] = "Password";
$proto26["m_columns"][] = "Email";
$proto26["m_columns"][] = "Nama";
$proto26["m_columns"][] = "Bahagian";
$proto26["m_columns"][] = "Jawatan";
$proto26["m_columns"][] = "Level";
$proto26["m_columns"][] = "iid";
$proto26["m_columns"][] = "Status";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "pengguna";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "TambahPenerima";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TambahPenerima";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TambahPenerima = createSqlQuery_TambahPenerima();



										

$tdataTambahPenerima[".sqlquery"] = $queryData_TambahPenerima;

include_once(getabspath("include/TambahPenerima_events.php"));
$tableEvents["TambahPenerima"] = new eventclass_TambahPenerima;
$tdataTambahPenerima[".hasEvents"] = true;

?>