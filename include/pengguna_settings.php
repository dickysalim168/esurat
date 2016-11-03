<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapengguna = array();
	$tdatapengguna[".truncateText"] = true;
	$tdatapengguna[".NumberOfChars"] = 80;
	$tdatapengguna[".ShortName"] = "pengguna";
	$tdatapengguna[".OwnerID"] = "";
	$tdatapengguna[".OriginalTable"] = "pengguna";

//	field labels
$fieldLabelspengguna = array();
$fieldToolTipspengguna = array();
$pageTitlespengguna = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelspengguna["Malay"] = array();
	$fieldToolTipspengguna["Malay"] = array();
	$pageTitlespengguna["Malay"] = array();
	$fieldLabelspengguna["Malay"]["pid"] = "Pid";
	$fieldToolTipspengguna["Malay"]["pid"] = "";
	$fieldLabelspengguna["Malay"]["NoKP"] = "No KP";
	$fieldToolTipspengguna["Malay"]["NoKP"] = "";
	$fieldLabelspengguna["Malay"]["Password"] = "Password";
	$fieldToolTipspengguna["Malay"]["Password"] = "";
	$fieldLabelspengguna["Malay"]["Email"] = "Email";
	$fieldToolTipspengguna["Malay"]["Email"] = "";
	$fieldLabelspengguna["Malay"]["Nama"] = "Nama";
	$fieldToolTipspengguna["Malay"]["Nama"] = "";
	$fieldLabelspengguna["Malay"]["Bahagian"] = "Bahagian";
	$fieldToolTipspengguna["Malay"]["Bahagian"] = "";
	$fieldLabelspengguna["Malay"]["Jawatan"] = "Jawatan";
	$fieldToolTipspengguna["Malay"]["Jawatan"] = "";
	$fieldLabelspengguna["Malay"]["Level"] = "Level";
	$fieldToolTipspengguna["Malay"]["Level"] = "";
	$fieldLabelspengguna["Malay"]["iid"] = "Iid";
	$fieldToolTipspengguna["Malay"]["iid"] = "";
	$fieldLabelspengguna["Malay"]["Status"] = "Status";
	$fieldToolTipspengguna["Malay"]["Status"] = "";
	if (count($fieldToolTipspengguna["Malay"]))
		$tdatapengguna[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspengguna[""] = array();
	$fieldToolTipspengguna[""] = array();
	$pageTitlespengguna[""] = array();
	$fieldLabelspengguna[""]["pid"] = "Pid";
	$fieldToolTipspengguna[""]["pid"] = "";
	$fieldLabelspengguna[""]["Status"] = "Status";
	$fieldToolTipspengguna[""]["Status"] = "";
	if (count($fieldToolTipspengguna[""]))
		$tdatapengguna[".isUseToolTips"] = true;
}


	$tdatapengguna[".NCSearch"] = true;



$tdatapengguna[".shortTableName"] = "pengguna";
$tdatapengguna[".nSecOptions"] = 0;
$tdatapengguna[".recsPerRowList"] = 1;
$tdatapengguna[".recsPerRowPrint"] = 1;
$tdatapengguna[".mainTableOwnerID"] = "";
$tdatapengguna[".moveNext"] = 1;
$tdatapengguna[".entityType"] = 0;

$tdatapengguna[".strOriginalTableName"] = "pengguna";




$tdatapengguna[".showAddInPopup"] = false;

$tdatapengguna[".showEditInPopup"] = false;

$tdatapengguna[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapengguna[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapengguna[".fieldsForRegister"] = array();

$tdatapengguna[".listAjax"] = false;

	$tdatapengguna[".audit"] = false;

	$tdatapengguna[".locking"] = false;

$tdatapengguna[".edit"] = true;
$tdatapengguna[".afterEditAction"] = 1;
$tdatapengguna[".closePopupAfterEdit"] = 1;
$tdatapengguna[".afterEditActionDetTable"] = "";

$tdatapengguna[".add"] = true;
$tdatapengguna[".afterAddAction"] = 1;
$tdatapengguna[".closePopupAfterAdd"] = 1;
$tdatapengguna[".afterAddActionDetTable"] = "";

$tdatapengguna[".list"] = true;





$tdatapengguna[".delete"] = true;

$tdatapengguna[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapengguna[".searchSaving"] = false;
//

$tdatapengguna[".showSearchPanel"] = true;
		$tdatapengguna[".flexibleSearch"] = true;

if (isMobile())
	$tdatapengguna[".isUseAjaxSuggest"] = false;
else
	$tdatapengguna[".isUseAjaxSuggest"] = true;

$tdatapengguna[".rowHighlite"] = true;


																																																																									
$tdatapengguna[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapengguna[".isUseTimeForSearch"] = false;





$tdatapengguna[".allSearchFields"] = array();
$tdatapengguna[".filterFields"] = array();
$tdatapengguna[".requiredSearchFields"] = array();

$tdatapengguna[".allSearchFields"][] = "Nama";
	$tdatapengguna[".allSearchFields"][] = "NoKP";
	$tdatapengguna[".allSearchFields"][] = "Bahagian";
	$tdatapengguna[".allSearchFields"][] = "Jawatan";
	$tdatapengguna[".allSearchFields"][] = "Email";
	$tdatapengguna[".allSearchFields"][] = "Level";
	$tdatapengguna[".allSearchFields"][] = "Status";
	

$tdatapengguna[".googleLikeFields"] = array();
$tdatapengguna[".googleLikeFields"][] = "NoKP";
$tdatapengguna[".googleLikeFields"][] = "Password";
$tdatapengguna[".googleLikeFields"][] = "Email";
$tdatapengguna[".googleLikeFields"][] = "Nama";
$tdatapengguna[".googleLikeFields"][] = "Bahagian";
$tdatapengguna[".googleLikeFields"][] = "Jawatan";
$tdatapengguna[".googleLikeFields"][] = "Level";
$tdatapengguna[".googleLikeFields"][] = "iid";
$tdatapengguna[".googleLikeFields"][] = "Status";
$tdatapengguna[".googleLikeFields"][] = "pid";


$tdatapengguna[".advSearchFields"] = array();
$tdatapengguna[".advSearchFields"][] = "Nama";
$tdatapengguna[".advSearchFields"][] = "NoKP";
$tdatapengguna[".advSearchFields"][] = "Bahagian";
$tdatapengguna[".advSearchFields"][] = "Jawatan";
$tdatapengguna[".advSearchFields"][] = "Email";
$tdatapengguna[".advSearchFields"][] = "Level";
$tdatapengguna[".advSearchFields"][] = "Status";

$tdatapengguna[".tableType"] = "list";

$tdatapengguna[".printerPageOrientation"] = 0;
$tdatapengguna[".nPrinterPageScale"] = 100;

$tdatapengguna[".nPrinterSplitRecords"] = 40;

$tdatapengguna[".nPrinterPDFSplitRecords"] = 40;



$tdatapengguna[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatapengguna[".pageSize"] = 20;

$tdatapengguna[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapengguna[".strOrderBy"] = $tstrOrderBy;

$tdatapengguna[".orderindexes"] = array();

$tdatapengguna[".sqlHead"] = "SELECT NoKP,  Password,  Email,  Nama,  Bahagian,  Jawatan,  `Level`,  iid,  Status,  pid";
$tdatapengguna[".sqlFrom"] = "FROM pengguna";
$tdatapengguna[".sqlWhereExpr"] = "";
$tdatapengguna[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapengguna[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapengguna[".arrGroupsPerPage"] = $arrGPP;


$tableKeyspengguna = array();
$tableKeyspengguna[] = "pid";
$tdatapengguna[".Keys"] = $tableKeyspengguna;

$tdatapengguna[".listFields"] = array();
$tdatapengguna[".listFields"][] = "Nama";
$tdatapengguna[".listFields"][] = "Bahagian";
$tdatapengguna[".listFields"][] = "Jawatan";
$tdatapengguna[".listFields"][] = "Status";

$tdatapengguna[".hideMobileList"] = array();


$tdatapengguna[".viewFields"] = array();

$tdatapengguna[".addFields"] = array();
$tdatapengguna[".addFields"][] = "Nama";
$tdatapengguna[".addFields"][] = "NoKP";
$tdatapengguna[".addFields"][] = "Bahagian";
$tdatapengguna[".addFields"][] = "Jawatan";
$tdatapengguna[".addFields"][] = "Password";
$tdatapengguna[".addFields"][] = "Email";
$tdatapengguna[".addFields"][] = "Level";
$tdatapengguna[".addFields"][] = "Status";

$tdatapengguna[".masterListFields"] = array();
$tdatapengguna[".masterListFields"][] = "iid";
$tdatapengguna[".masterListFields"][] = "pid";
$tdatapengguna[".masterListFields"][] = "Nama";
$tdatapengguna[".masterListFields"][] = "NoKP";
$tdatapengguna[".masterListFields"][] = "Bahagian";
$tdatapengguna[".masterListFields"][] = "Jawatan";
$tdatapengguna[".masterListFields"][] = "Password";
$tdatapengguna[".masterListFields"][] = "Email";
$tdatapengguna[".masterListFields"][] = "Level";
$tdatapengguna[".masterListFields"][] = "Status";

$tdatapengguna[".inlineAddFields"] = array();

$tdatapengguna[".editFields"] = array();
$tdatapengguna[".editFields"][] = "Nama";
$tdatapengguna[".editFields"][] = "NoKP";
$tdatapengguna[".editFields"][] = "Bahagian";
$tdatapengguna[".editFields"][] = "Jawatan";
$tdatapengguna[".editFields"][] = "Password";
$tdatapengguna[".editFields"][] = "Email";
$tdatapengguna[".editFields"][] = "Level";
$tdatapengguna[".editFields"][] = "Status";

$tdatapengguna[".inlineEditFields"] = array();

$tdatapengguna[".exportFields"] = array();

$tdatapengguna[".importFields"] = array();

$tdatapengguna[".printFields"] = array();

//	NoKP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NoKP";
	$fdata["GoodName"] = "NoKP";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("pengguna","NoKP");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
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




	$tdatapengguna["NoKP"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("pengguna","Password");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "Password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";

	
	
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








	$tdatapengguna["Password"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("pengguna","Email");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
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




	$tdatapengguna["Email"] = $fdata;
//	Nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Nama";
	$fdata["GoodName"] = "Nama";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("pengguna","Nama");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
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




	$tdatapengguna["Nama"] = $fdata;
//	Bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Bahagian";
	$fdata["GoodName"] = "Bahagian";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("pengguna","Bahagian");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
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




	$tdatapengguna["Bahagian"] = $fdata;
//	Jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Jawatan";
	$fdata["GoodName"] = "Jawatan";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("pengguna","Jawatan");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
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




	$tdatapengguna["Jawatan"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("pengguna","Level");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
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




	$tdatapengguna["Level"] = $fdata;
//	iid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "iid";
	$fdata["GoodName"] = "iid";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("pengguna","iid");
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








	$tdatapengguna["iid"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("pengguna","Status");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
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




	$tdatapengguna["Status"] = $fdata;
//	pid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "pid";
	$fdata["GoodName"] = "pid";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("pengguna","pid");
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








	$tdatapengguna["pid"] = $fdata;


$tables_data["pengguna"]=&$tdatapengguna;
$field_labels["pengguna"] = &$fieldLabelspengguna;
$fieldToolTips["pengguna"] = &$fieldToolTipspengguna;
$page_titles["pengguna"] = &$pageTitlespengguna;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pengguna"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pengguna"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pengguna()
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
	"m_srcTableName" => "pengguna"
));

$proto5["m_sql"] = "NoKP";
$proto5["m_srcTableName"] = "pengguna";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "pengguna"
));

$proto7["m_sql"] = "Password";
$proto7["m_srcTableName"] = "pengguna";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "pengguna"
));

$proto9["m_sql"] = "Email";
$proto9["m_srcTableName"] = "pengguna";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Nama",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "pengguna"
));

$proto11["m_sql"] = "Nama";
$proto11["m_srcTableName"] = "pengguna";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Bahagian",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "pengguna"
));

$proto13["m_sql"] = "Bahagian";
$proto13["m_srcTableName"] = "pengguna";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Jawatan",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "pengguna"
));

$proto15["m_sql"] = "Jawatan";
$proto15["m_srcTableName"] = "pengguna";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "pengguna"
));

$proto17["m_sql"] = "`Level`";
$proto17["m_srcTableName"] = "pengguna";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "iid",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "pengguna"
));

$proto19["m_sql"] = "iid";
$proto19["m_srcTableName"] = "pengguna";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "pengguna"
));

$proto21["m_sql"] = "Status";
$proto21["m_srcTableName"] = "pengguna";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "pid",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "pengguna"
));

$proto23["m_sql"] = "pid";
$proto23["m_srcTableName"] = "pengguna";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "pengguna";
$proto26["m_srcTableName"] = "pengguna";
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
$proto25["m_srcTableName"] = "pengguna";
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
$proto0["m_srcTableName"]="pengguna";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pengguna = createSqlQuery_pengguna();



										

$tdatapengguna[".sqlquery"] = $queryData_pengguna;

$tableEvents["pengguna"] = new eventsBase;
$tdatapengguna[".hasEvents"] = false;

?>