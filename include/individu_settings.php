<?php
require_once(getabspath("classes/cipherer.php"));
$tdataindividu = array();
	$tdataindividu[".NumberOfChars"] = 80; 
	$tdataindividu[".ShortName"] = "individu";
	$tdataindividu[".OwnerID"] = "";
	$tdataindividu[".OriginalTable"] = "individu";

//	field labels
$fieldLabelsindividu = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsindividu["Malay"] = array();
	$fieldToolTipsindividu["Malay"] = array();
	$fieldLabelsindividu["Malay"]["iid"] = "Iid";
	$fieldToolTipsindividu["Malay"]["iid"] = "";
	$fieldLabelsindividu["Malay"]["nama"] = "Nama";
	$fieldToolTipsindividu["Malay"]["nama"] = "";
	$fieldLabelsindividu["Malay"]["email"] = "Email";
	$fieldToolTipsindividu["Malay"]["email"] = "";
	$fieldLabelsindividu["Malay"]["baid"] = "Bahagian";
	$fieldToolTipsindividu["Malay"]["baid"] = "";
	$fieldLabelsindividu["Malay"]["jaid"] = "Jawatan";
	$fieldToolTipsindividu["Malay"]["jaid"] = "";
	$fieldLabelsindividu["Malay"]["Email"] = "Email";
	$fieldToolTipsindividu["Malay"]["Email"] = "";
	$fieldLabelsindividu["Malay"]["Jawatan"] = "Jawatan";
	$fieldToolTipsindividu["Malay"]["Jawatan"] = "";
	$fieldLabelsindividu["Malay"]["Bahagian"] = "Bahagian";
	$fieldToolTipsindividu["Malay"]["Bahagian"] = "";
	$fieldLabelsindividu["Malay"]["individu"] = "Individu";
	$fieldToolTipsindividu["Malay"]["individu"] = "";
	$fieldLabelsindividu["Malay"]["bahagian"] = "Bahagian";
	$fieldToolTipsindividu["Malay"]["bahagian"] = "";
	$fieldLabelsindividu["Malay"]["daripada_individu"] = "Daripada Individu";
	$fieldToolTipsindividu["Malay"]["daripada_individu"] = "";
	$fieldLabelsindividu["Malay"]["daripada_bahagian"] = "Daripada Bahagian";
	$fieldToolTipsindividu["Malay"]["daripada_bahagian"] = "";
	$fieldLabelsindividu["Malay"]["kepada_individu"] = "Kepada Individu";
	$fieldToolTipsindividu["Malay"]["kepada_individu"] = "";
	$fieldLabelsindividu["Malay"]["kepada_bahagian"] = "Kepada Bahagian";
	$fieldToolTipsindividu["Malay"]["kepada_bahagian"] = "";
	$fieldLabelsindividu["Malay"]["pass"] = "Pass";
	$fieldToolTipsindividu["Malay"]["pass"] = "";
	$fieldLabelsindividu["Malay"]["lid"] = "Level";
	$fieldToolTipsindividu["Malay"]["lid"] = "";
	$fieldLabelsindividu["Malay"]["jawatan"] = "Jawatan";
	$fieldToolTipsindividu["Malay"]["jawatan"] = "";
	if (count($fieldToolTipsindividu["Malay"]))
		$tdataindividu[".isUseToolTips"] = true;
}
	
	
	$tdataindividu[".NCSearch"] = true;



$tdataindividu[".shortTableName"] = "individu";
$tdataindividu[".nSecOptions"] = 0;
$tdataindividu[".recsPerRowList"] = 1;
$tdataindividu[".mainTableOwnerID"] = "";
$tdataindividu[".moveNext"] = 1;
$tdataindividu[".nType"] = 0;

$tdataindividu[".strOriginalTableName"] = "individu";




$tdataindividu[".showAddInPopup"] = false;

$tdataindividu[".showEditInPopup"] = false;

$tdataindividu[".showViewInPopup"] = false;

$tdataindividu[".fieldsForRegister"] = array();
	
$tdataindividu[".listAjax"] = false;

	$tdataindividu[".audit"] = false;

	$tdataindividu[".locking"] = false;

$tdataindividu[".listIcons"] = true;
$tdataindividu[".edit"] = true;
$tdataindividu[".view"] = true;



$tdataindividu[".delete"] = true;

$tdataindividu[".showSimpleSearchOptions"] = false;

$tdataindividu[".showSearchPanel"] = true;

if (isMobile())
	$tdataindividu[".isUseAjaxSuggest"] = false;
else 
	$tdataindividu[".isUseAjaxSuggest"] = true;

$tdataindividu[".rowHighlite"] = true;

// button handlers file names

$tdataindividu[".addPageEvents"] = false;

// use datepicker for search panel
$tdataindividu[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataindividu[".isUseTimeForSearch"] = false;




$tdataindividu[".allSearchFields"] = array();

$tdataindividu[".allSearchFields"][] = "jawatan";
$tdataindividu[".allSearchFields"][] = "nama";
$tdataindividu[".allSearchFields"][] = "email";
$tdataindividu[".allSearchFields"][] = "pass";
$tdataindividu[".allSearchFields"][] = "baid";
$tdataindividu[".allSearchFields"][] = "jaid";
$tdataindividu[".allSearchFields"][] = "lid";

$tdataindividu[".googleLikeFields"][] = "jawatan";
$tdataindividu[".googleLikeFields"][] = "iid";
$tdataindividu[".googleLikeFields"][] = "nama";
$tdataindividu[".googleLikeFields"][] = "email";
$tdataindividu[".googleLikeFields"][] = "pass";
$tdataindividu[".googleLikeFields"][] = "baid";
$tdataindividu[".googleLikeFields"][] = "jaid";
$tdataindividu[".googleLikeFields"][] = "lid";


$tdataindividu[".advSearchFields"][] = "jawatan";
$tdataindividu[".advSearchFields"][] = "nama";
$tdataindividu[".advSearchFields"][] = "email";
$tdataindividu[".advSearchFields"][] = "pass";
$tdataindividu[".advSearchFields"][] = "baid";
$tdataindividu[".advSearchFields"][] = "jaid";
$tdataindividu[".advSearchFields"][] = "lid";

$tdataindividu[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataindividu[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataindividu[".strOrderBy"] = $tstrOrderBy;

$tdataindividu[".orderindexes"] = array();

$tdataindividu[".sqlHead"] = "SELECT individu.iid,  individu.nama,  individu.email,  individu.baid,  individu.jaid,  individu.pass,  individu.lid,  jawatan.jawatan";
$tdataindividu[".sqlFrom"] = "FROM individu  INNER JOIN jawatan ON individu.jaid = jawatan.jaid";
$tdataindividu[".sqlWhereExpr"] = "";
$tdataindividu[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindividu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindividu[".arrGroupsPerPage"] = $arrGPP;

$tableKeysindividu = array();
$tableKeysindividu[] = "iid";
$tdataindividu[".Keys"] = $tableKeysindividu;

$tdataindividu[".listFields"] = array();
$tdataindividu[".listFields"][] = "nama";
$tdataindividu[".listFields"][] = "email";
$tdataindividu[".listFields"][] = "baid";
$tdataindividu[".listFields"][] = "jaid";
$tdataindividu[".listFields"][] = "lid";

$tdataindividu[".viewFields"] = array();
$tdataindividu[".viewFields"][] = "nama";
$tdataindividu[".viewFields"][] = "email";
$tdataindividu[".viewFields"][] = "baid";
$tdataindividu[".viewFields"][] = "jaid";
$tdataindividu[".viewFields"][] = "lid";

$tdataindividu[".addFields"] = array();
$tdataindividu[".addFields"][] = "nama";
$tdataindividu[".addFields"][] = "email";
$tdataindividu[".addFields"][] = "pass";
$tdataindividu[".addFields"][] = "baid";
$tdataindividu[".addFields"][] = "jaid";
$tdataindividu[".addFields"][] = "lid";

$tdataindividu[".inlineAddFields"] = array();

$tdataindividu[".editFields"] = array();
$tdataindividu[".editFields"][] = "nama";
$tdataindividu[".editFields"][] = "email";
$tdataindividu[".editFields"][] = "pass";
$tdataindividu[".editFields"][] = "baid";
$tdataindividu[".editFields"][] = "jaid";
$tdataindividu[".editFields"][] = "lid";

$tdataindividu[".inlineEditFields"] = array();

$tdataindividu[".exportFields"] = array();

$tdataindividu[".printFields"] = array();

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
	
		
		
	$tdataindividu["iid"] = $fdata;
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
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataindividu["nama"] = $fdata;
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
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataindividu["email"] = $fdata;
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
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataindividu["baid"] = $fdata;
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
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataindividu["jaid"] = $fdata;
//	pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pass";
	$fdata["GoodName"] = "pass";
	$fdata["ownerTable"] = "individu";
	$fdata["Label"] = "Pass"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "pass"; 
		$fdata["FullName"] = "individu.pass";
	
		
		
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
	
		
		
	$tdataindividu["pass"] = $fdata;
//	lid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "lid";
	$fdata["GoodName"] = "lid";
	$fdata["ownerTable"] = "individu";
	$fdata["Label"] = "Level"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "lid"; 
		$fdata["FullName"] = "individu.lid";
	
		
		
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
				
		
			
	$edata["LinkField"] = "lid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "level";
	
		
	$edata["LookupTable"] = "drop_level";
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
	
		
		
	$tdataindividu["lid"] = $fdata;
//	jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "jawatan";
	$fdata["GoodName"] = "jawatan";
	$fdata["ownerTable"] = "jawatan";
	$fdata["Label"] = "Jawatan"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataindividu["jawatan"] = $fdata;

	
$tables_data["individu"]=&$tdataindividu;
$field_labels["individu"] = &$fieldLabelsindividu;
$fieldToolTips["individu"] = &$fieldToolTipsindividu;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["individu"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["individu"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_individu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "individu.iid,  individu.nama,  individu.email,  individu.baid,  individu.jaid,  individu.pass,  individu.lid,  jawatan.jawatan";
$proto0["m_strFrom"] = "FROM individu  INNER JOIN jawatan ON individu.jaid = jawatan.jaid";
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
	"m_strName" => "pass",
	"m_strTable" => "individu"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "lid",
	"m_strTable" => "individu"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "jawatan",
	"m_strTable" => "jawatan"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "individu";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "iid";
$proto22["m_columns"][] = "nama";
$proto22["m_columns"][] = "email";
$proto22["m_columns"][] = "baid";
$proto22["m_columns"][] = "jaid";
$proto22["m_columns"][] = "pass";
$proto22["m_columns"][] = "lid";
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
												$proto25=array();
$proto25["m_link"] = "SQLL_INNERJOIN";
			$proto26=array();
$proto26["m_strName"] = "jawatan";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "jaid";
$proto26["m_columns"][] = "jawatan";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "individu.jaid = jawatan.jaid";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jaid",
	"m_strTable" => "individu"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "= jawatan.jaid";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_individu = createSqlQuery_individu();
								$tdataindividu[".sqlquery"] = $queryData_individu;
	
if(isset($tdataindividu["field2"])){
	$tdataindividu["field2"]["LookupTable"] = "carscars_view";
	$tdataindividu["field2"]["LookupOrderBy"] = "name";
	$tdataindividu["field2"]["LookupType"] = 4;
	$tdataindividu["field2"]["LinkField"] = "email";
	$tdataindividu["field2"]["DisplayField"] = "name";
	$tdataindividu[".hasCustomViewField"] = true;
}

include_once(getabspath("include/individu_events.php"));
$tableEvents["individu"] = new eventclass_individu;
$tdataindividu[".hasEvents"] = true;

$cipherer = new RunnerCipherer("individu");

?>