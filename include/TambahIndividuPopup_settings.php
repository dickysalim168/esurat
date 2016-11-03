<?php
require_once(getabspath("classes/cipherer.php"));
$tdataTambahIndividuPopup = array();
	$tdataTambahIndividuPopup[".NumberOfChars"] = 80; 
	$tdataTambahIndividuPopup[".ShortName"] = "TambahIndividuPopup";
	$tdataTambahIndividuPopup[".OwnerID"] = "";
	$tdataTambahIndividuPopup[".OriginalTable"] = "individu";

//	field labels
$fieldLabelsTambahIndividuPopup = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsTambahIndividuPopup["Malay"] = array();
	$fieldToolTipsTambahIndividuPopup["Malay"] = array();
	$fieldLabelsTambahIndividuPopup["Malay"]["iid"] = "Iid";
	$fieldToolTipsTambahIndividuPopup["Malay"]["iid"] = "";
	$fieldLabelsTambahIndividuPopup["Malay"]["nama"] = "Nama";
	$fieldToolTipsTambahIndividuPopup["Malay"]["nama"] = "";
	$fieldLabelsTambahIndividuPopup["Malay"]["email"] = "Email";
	$fieldToolTipsTambahIndividuPopup["Malay"]["email"] = "";
	$fieldLabelsTambahIndividuPopup["Malay"]["baid"] = "Bahagian";
	$fieldToolTipsTambahIndividuPopup["Malay"]["baid"] = "";
	$fieldLabelsTambahIndividuPopup["Malay"]["jaid"] = "Jawatan";
	$fieldToolTipsTambahIndividuPopup["Malay"]["jaid"] = "";
	$fieldLabelsTambahIndividuPopup["Malay"]["Email"] = "Email";
	$fieldToolTipsTambahIndividuPopup["Malay"]["Email"] = "";
	$fieldLabelsTambahIndividuPopup["Malay"]["Jawatan"] = "Jawatan";
	$fieldToolTipsTambahIndividuPopup["Malay"]["Jawatan"] = "";
	$fieldLabelsTambahIndividuPopup["Malay"]["Bahagian"] = "Bahagian";
	$fieldToolTipsTambahIndividuPopup["Malay"]["Bahagian"] = "";
	$fieldLabelsTambahIndividuPopup["Malay"]["jawatan"] = "Jawatan";
	$fieldToolTipsTambahIndividuPopup["Malay"]["jawatan"] = "";
	$fieldLabelsTambahIndividuPopup["Malay"]["individu"] = "Individu";
	$fieldToolTipsTambahIndividuPopup["Malay"]["individu"] = "";
	$fieldLabelsTambahIndividuPopup["Malay"]["bahagian"] = "Bahagian";
	$fieldToolTipsTambahIndividuPopup["Malay"]["bahagian"] = "";
	if (count($fieldToolTipsTambahIndividuPopup["Malay"]))
		$tdataTambahIndividuPopup[".isUseToolTips"] = true;
}
	
	
	$tdataTambahIndividuPopup[".NCSearch"] = true;



$tdataTambahIndividuPopup[".shortTableName"] = "TambahIndividuPopup";
$tdataTambahIndividuPopup[".nSecOptions"] = 0;
$tdataTambahIndividuPopup[".recsPerRowList"] = 1;
$tdataTambahIndividuPopup[".mainTableOwnerID"] = "";
$tdataTambahIndividuPopup[".moveNext"] = 1;
$tdataTambahIndividuPopup[".nType"] = 1;

$tdataTambahIndividuPopup[".strOriginalTableName"] = "individu";




$tdataTambahIndividuPopup[".showAddInPopup"] = false;

$tdataTambahIndividuPopup[".showEditInPopup"] = false;

$tdataTambahIndividuPopup[".showViewInPopup"] = false;

$tdataTambahIndividuPopup[".fieldsForRegister"] = array();
	
$tdataTambahIndividuPopup[".listAjax"] = false;

	$tdataTambahIndividuPopup[".audit"] = false;

	$tdataTambahIndividuPopup[".locking"] = false;

$tdataTambahIndividuPopup[".listIcons"] = true;
$tdataTambahIndividuPopup[".edit"] = true;
$tdataTambahIndividuPopup[".inlineEdit"] = true;
$tdataTambahIndividuPopup[".inlineAdd"] = true;
$tdataTambahIndividuPopup[".view"] = true;

$tdataTambahIndividuPopup[".exportTo"] = true;

$tdataTambahIndividuPopup[".printFriendly"] = true;

$tdataTambahIndividuPopup[".delete"] = true;

$tdataTambahIndividuPopup[".showSimpleSearchOptions"] = false;

$tdataTambahIndividuPopup[".showSearchPanel"] = true;

if (isMobile())
	$tdataTambahIndividuPopup[".isUseAjaxSuggest"] = false;
else 
	$tdataTambahIndividuPopup[".isUseAjaxSuggest"] = true;

$tdataTambahIndividuPopup[".rowHighlite"] = true;

// button handlers file names
$tdataTambahIndividuPopup[".isUsebuttonHandlers"] = true;

$tdataTambahIndividuPopup[".addPageEvents"] = false;

// use datepicker for search panel
$tdataTambahIndividuPopup[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataTambahIndividuPopup[".isUseTimeForSearch"] = false;




$tdataTambahIndividuPopup[".allSearchFields"] = array();

$tdataTambahIndividuPopup[".allSearchFields"][] = "jawatan";
$tdataTambahIndividuPopup[".allSearchFields"][] = "nama";
$tdataTambahIndividuPopup[".allSearchFields"][] = "email";
$tdataTambahIndividuPopup[".allSearchFields"][] = "baid";
$tdataTambahIndividuPopup[".allSearchFields"][] = "jaid";

$tdataTambahIndividuPopup[".googleLikeFields"][] = "jawatan";
$tdataTambahIndividuPopup[".googleLikeFields"][] = "iid";
$tdataTambahIndividuPopup[".googleLikeFields"][] = "nama";
$tdataTambahIndividuPopup[".googleLikeFields"][] = "email";
$tdataTambahIndividuPopup[".googleLikeFields"][] = "baid";
$tdataTambahIndividuPopup[".googleLikeFields"][] = "jaid";


$tdataTambahIndividuPopup[".advSearchFields"][] = "jawatan";
$tdataTambahIndividuPopup[".advSearchFields"][] = "nama";
$tdataTambahIndividuPopup[".advSearchFields"][] = "email";
$tdataTambahIndividuPopup[".advSearchFields"][] = "baid";
$tdataTambahIndividuPopup[".advSearchFields"][] = "jaid";

$tdataTambahIndividuPopup[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataTambahIndividuPopup[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTambahIndividuPopup[".strOrderBy"] = $tstrOrderBy;

$tdataTambahIndividuPopup[".orderindexes"] = array();

$tdataTambahIndividuPopup[".sqlHead"] = "SELECT individu.iid,  individu.nama,  individu.email,  individu.baid,  individu.jaid,  jawatan.jawatan";
$tdataTambahIndividuPopup[".sqlFrom"] = "FROM individu  , jawatan";
$tdataTambahIndividuPopup[".sqlWhereExpr"] = "(individu.jaid = jawatan.jaid)";
$tdataTambahIndividuPopup[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTambahIndividuPopup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTambahIndividuPopup[".arrGroupsPerPage"] = $arrGPP;

$tableKeysTambahIndividuPopup = array();
$tableKeysTambahIndividuPopup[] = "iid";
$tdataTambahIndividuPopup[".Keys"] = $tableKeysTambahIndividuPopup;

$tdataTambahIndividuPopup[".listFields"] = array();
$tdataTambahIndividuPopup[".listFields"][] = "jawatan";
$tdataTambahIndividuPopup[".listFields"][] = "nama";
$tdataTambahIndividuPopup[".listFields"][] = "email";
$tdataTambahIndividuPopup[".listFields"][] = "baid";
$tdataTambahIndividuPopup[".listFields"][] = "jaid";

$tdataTambahIndividuPopup[".viewFields"] = array();
$tdataTambahIndividuPopup[".viewFields"][] = "jawatan";
$tdataTambahIndividuPopup[".viewFields"][] = "nama";
$tdataTambahIndividuPopup[".viewFields"][] = "email";
$tdataTambahIndividuPopup[".viewFields"][] = "baid";
$tdataTambahIndividuPopup[".viewFields"][] = "jaid";

$tdataTambahIndividuPopup[".addFields"] = array();
$tdataTambahIndividuPopup[".addFields"][] = "nama";
$tdataTambahIndividuPopup[".addFields"][] = "email";
$tdataTambahIndividuPopup[".addFields"][] = "baid";
$tdataTambahIndividuPopup[".addFields"][] = "jaid";

$tdataTambahIndividuPopup[".inlineAddFields"] = array();
$tdataTambahIndividuPopup[".inlineAddFields"][] = "jawatan";
$tdataTambahIndividuPopup[".inlineAddFields"][] = "nama";
$tdataTambahIndividuPopup[".inlineAddFields"][] = "email";
$tdataTambahIndividuPopup[".inlineAddFields"][] = "baid";
$tdataTambahIndividuPopup[".inlineAddFields"][] = "jaid";

$tdataTambahIndividuPopup[".editFields"] = array();
$tdataTambahIndividuPopup[".editFields"][] = "nama";
$tdataTambahIndividuPopup[".editFields"][] = "email";
$tdataTambahIndividuPopup[".editFields"][] = "baid";
$tdataTambahIndividuPopup[".editFields"][] = "jaid";

$tdataTambahIndividuPopup[".inlineEditFields"] = array();
$tdataTambahIndividuPopup[".inlineEditFields"][] = "jawatan";
$tdataTambahIndividuPopup[".inlineEditFields"][] = "nama";
$tdataTambahIndividuPopup[".inlineEditFields"][] = "email";
$tdataTambahIndividuPopup[".inlineEditFields"][] = "baid";
$tdataTambahIndividuPopup[".inlineEditFields"][] = "jaid";

$tdataTambahIndividuPopup[".exportFields"] = array();
$tdataTambahIndividuPopup[".exportFields"][] = "jawatan";
$tdataTambahIndividuPopup[".exportFields"][] = "baid";
$tdataTambahIndividuPopup[".exportFields"][] = "nama";
$tdataTambahIndividuPopup[".exportFields"][] = "email";
$tdataTambahIndividuPopup[".exportFields"][] = "jaid";

$tdataTambahIndividuPopup[".printFields"] = array();
$tdataTambahIndividuPopup[".printFields"][] = "jawatan";
$tdataTambahIndividuPopup[".printFields"][] = "baid";
$tdataTambahIndividuPopup[".printFields"][] = "nama";
$tdataTambahIndividuPopup[".printFields"][] = "email";
$tdataTambahIndividuPopup[".printFields"][] = "jaid";

//	iid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "iid";
	$fdata["GoodName"] = "iid";
	$fdata["ownerTable"] = "individu";
	$fdata["Label"] = "Iid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "iid"; 
		$fdata["FullName"] = "individu.iid";
	
		
		
				
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataTambahIndividuPopup["iid"] = $fdata;
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "individu";
	$fdata["Label"] = "Nama"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nama"; 
		$fdata["FullName"] = "individu.nama";
	
		
		
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";
	
		$edata["inputStyle"] = " width:234px;";
	$edata["controlWidth"] = 234;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataTambahIndividuPopup["nama"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "individu";
	$fdata["Label"] = "Email"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "email"; 
		$fdata["FullName"] = "individu.email";
	
		
		
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataTambahIndividuPopup["email"] = $fdata;
//	baid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "baid";
	$fdata["GoodName"] = "baid";
	$fdata["ownerTable"] = "individu";
	$fdata["Label"] = "Bahagian"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "baid"; 
		$fdata["FullName"] = "individu.baid";
	
		
		
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
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "baid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nama";
	
		
	$edata["LookupTable"] = "bahagian";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataTambahIndividuPopup["baid"] = $fdata;
//	jaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "jaid";
	$fdata["GoodName"] = "jaid";
	$fdata["ownerTable"] = "individu";
	$fdata["Label"] = "Jawatan"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jaid"; 
		$fdata["FullName"] = "individu.jaid";
	
		
		
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
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "jaid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "jawatan";
	
		
	$edata["LookupTable"] = "jawatan";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataTambahIndividuPopup["jaid"] = $fdata;
//	jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "jawatan";
	$fdata["GoodName"] = "jawatan";
	$fdata["ownerTable"] = "jawatan";
	$fdata["Label"] = "Jawatan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jawatan"; 
		$fdata["FullName"] = "jawatan.jawatan";
	
		
		
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataTambahIndividuPopup["jawatan"] = $fdata;

	
$tables_data["TambahIndividuPopup"]=&$tdataTambahIndividuPopup;
$field_labels["TambahIndividuPopup"] = &$fieldLabelsTambahIndividuPopup;
$fieldToolTips["TambahIndividuPopup"] = &$fieldToolTipsTambahIndividuPopup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TambahIndividuPopup"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["TambahIndividuPopup"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TambahIndividuPopup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "individu.iid,  individu.nama,  individu.email,  individu.baid,  individu.jaid,  jawatan.jawatan";
$proto0["m_strFrom"] = "FROM individu  , jawatan";
$proto0["m_strWhere"] = "(individu.jaid = jawatan.jaid)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "individu.jaid = jawatan.jaid";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jaid",
	"m_strTable" => "individu"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "= jawatan.jaid";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
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
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "iid",
	"m_strTable" => "individu"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "individu"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "individu"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "baid",
	"m_strTable" => "individu"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "jaid",
	"m_strTable" => "individu"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "jawatan",
	"m_strTable" => "jawatan"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "individu";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "iid";
$proto18["m_columns"][] = "nama";
$proto18["m_columns"][] = "email";
$proto18["m_columns"][] = "baid";
$proto18["m_columns"][] = "jaid";
$proto18["m_columns"][] = "pass";
$proto18["m_columns"][] = "lid";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
												$proto21=array();
$proto21["m_link"] = "SQLL_CROSSJOIN";
			$proto22=array();
$proto22["m_strName"] = "jawatan";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "jaid";
$proto22["m_columns"][] = "jawatan";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TambahIndividuPopup = createSqlQuery_TambahIndividuPopup();
						$tdataTambahIndividuPopup[".sqlquery"] = $queryData_TambahIndividuPopup;
	
if(isset($tdataTambahIndividuPopup["field2"])){
	$tdataTambahIndividuPopup["field2"]["LookupTable"] = "carscars_view";
	$tdataTambahIndividuPopup["field2"]["LookupOrderBy"] = "name";
	$tdataTambahIndividuPopup["field2"]["LookupType"] = 4;
	$tdataTambahIndividuPopup["field2"]["LinkField"] = "email";
	$tdataTambahIndividuPopup["field2"]["DisplayField"] = "name";
	$tdataTambahIndividuPopup[".hasCustomViewField"] = true;
}

include_once(getabspath("include/TambahIndividuPopup_events.php"));
$tableEvents["TambahIndividuPopup"] = new eventclass_TambahIndividuPopup;
$tdataTambahIndividuPopup[".hasEvents"] = true;

$cipherer = new RunnerCipherer("TambahIndividuPopup");

?>