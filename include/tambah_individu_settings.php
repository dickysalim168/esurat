<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatambah_individu = array();
	$tdatatambah_individu[".NumberOfChars"] = 80; 
	$tdatatambah_individu[".ShortName"] = "tambah_individu";
	$tdatatambah_individu[".OwnerID"] = "";
	$tdatatambah_individu[".OriginalTable"] = "individu";

//	field labels
$fieldLabelstambah_individu = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstambah_individu["English"] = array();
	$fieldToolTipstambah_individu["English"] = array();
	$fieldLabelstambah_individu["English"]["iid"] = "Iid";
	$fieldToolTipstambah_individu["English"]["iid"] = "";
	$fieldLabelstambah_individu["English"]["nama"] = "Nama";
	$fieldToolTipstambah_individu["English"]["nama"] = "";
	$fieldLabelstambah_individu["English"]["baid"] = "Bahagian";
	$fieldToolTipstambah_individu["English"]["baid"] = "";
	$fieldLabelstambah_individu["English"]["jaid"] = "Jawatan";
	$fieldToolTipstambah_individu["English"]["jaid"] = "";
	$fieldLabelstambah_individu["English"]["dariIndividu"] = "Dari Individu";
	$fieldToolTipstambah_individu["English"]["dariIndividu"] = "";
	$fieldLabelstambah_individu["English"]["dariBahagian"] = "Dari Bahagian";
	$fieldToolTipstambah_individu["English"]["dariBahagian"] = "";
	$fieldLabelstambah_individu["English"]["dariJenis"] = "Dari Jenis";
	$fieldToolTipstambah_individu["English"]["dariJenis"] = "";
	$fieldLabelstambah_individu["English"]["dariJawatan"] = "Dari Jawatan";
	$fieldToolTipstambah_individu["English"]["dariJawatan"] = "";
	$fieldLabelstambah_individu["English"]["individu"] = "Individu";
	$fieldToolTipstambah_individu["English"]["individu"] = "";
	$fieldLabelstambah_individu["English"]["jawatan"] = "Jawatan";
	$fieldToolTipstambah_individu["English"]["jawatan"] = "";
	$fieldLabelstambah_individu["English"]["bahagian"] = "Bahagian";
	$fieldToolTipstambah_individu["English"]["bahagian"] = "";
	$fieldLabelstambah_individu["English"]["email"] = "Email";
	$fieldToolTipstambah_individu["English"]["email"] = "";
	$fieldLabelstambah_individu["English"]["pass"] = "Pass";
	$fieldToolTipstambah_individu["English"]["pass"] = "";
	$fieldLabelstambah_individu["English"]["lid"] = "Lid";
	$fieldToolTipstambah_individu["English"]["lid"] = "";
	if (count($fieldToolTipstambah_individu["English"]))
		$tdatatambah_individu[".isUseToolTips"] = true;
}
	
	
	$tdatatambah_individu[".NCSearch"] = true;



$tdatatambah_individu[".shortTableName"] = "tambah_individu";
$tdatatambah_individu[".nSecOptions"] = 0;
$tdatatambah_individu[".recsPerRowList"] = 1;
$tdatatambah_individu[".mainTableOwnerID"] = "";
$tdatatambah_individu[".moveNext"] = 1;
$tdatatambah_individu[".nType"] = 1;

$tdatatambah_individu[".strOriginalTableName"] = "individu";




$tdatatambah_individu[".showAddInPopup"] = false;

$tdatatambah_individu[".showEditInPopup"] = false;

$tdatatambah_individu[".showViewInPopup"] = false;

$tdatatambah_individu[".fieldsForRegister"] = array();

$tdatatambah_individu[".listAjax"] = false;

	$tdatatambah_individu[".audit"] = false;

	$tdatatambah_individu[".locking"] = false;

$tdatatambah_individu[".listIcons"] = true;
$tdatatambah_individu[".inlineEdit"] = true;
$tdatatambah_individu[".inlineAdd"] = true;




$tdatatambah_individu[".showSimpleSearchOptions"] = false;

$tdatatambah_individu[".showSearchPanel"] = true;

if (isMobile())
	$tdatatambah_individu[".isUseAjaxSuggest"] = false;
else 
	$tdatatambah_individu[".isUseAjaxSuggest"] = true;

$tdatatambah_individu[".rowHighlite"] = true;

// button handlers file names
$tdatatambah_individu[".isUsebuttonHandlers"] = true;
$tdatatambah_individu[".isUsebuttonHandlers"] = true;

$tdatatambah_individu[".addPageEvents"] = false;

// use datepicker for search panel
$tdatatambah_individu[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatatambah_individu[".isUseTimeForSearch"] = false;




$tdatatambah_individu[".allSearchFields"] = array();

$tdatatambah_individu[".allSearchFields"][] = "lid";
$tdatatambah_individu[".allSearchFields"][] = "pass";
$tdatatambah_individu[".allSearchFields"][] = "nama";
$tdatatambah_individu[".allSearchFields"][] = "email";
$tdatatambah_individu[".allSearchFields"][] = "baid";
$tdatatambah_individu[".allSearchFields"][] = "jaid";

$tdatatambah_individu[".googleLikeFields"][] = "pass";
$tdatatambah_individu[".googleLikeFields"][] = "lid";
$tdatatambah_individu[".googleLikeFields"][] = "iid";
$tdatatambah_individu[".googleLikeFields"][] = "nama";
$tdatatambah_individu[".googleLikeFields"][] = "email";
$tdatatambah_individu[".googleLikeFields"][] = "baid";
$tdatatambah_individu[".googleLikeFields"][] = "jaid";


$tdatatambah_individu[".advSearchFields"][] = "lid";
$tdatatambah_individu[".advSearchFields"][] = "pass";
$tdatatambah_individu[".advSearchFields"][] = "nama";
$tdatatambah_individu[".advSearchFields"][] = "email";
$tdatatambah_individu[".advSearchFields"][] = "baid";
$tdatatambah_individu[".advSearchFields"][] = "jaid";

$tdatatambah_individu[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatambah_individu[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatambah_individu[".strOrderBy"] = $tstrOrderBy;

$tdatatambah_individu[".orderindexes"] = array();

$tdatatambah_individu[".sqlHead"] = "SELECT iid,   nama,   email,   baid,   jaid,   pass,   lid";
$tdatatambah_individu[".sqlFrom"] = "FROM individu";
$tdatatambah_individu[".sqlWhereExpr"] = "";
$tdatatambah_individu[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatambah_individu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatambah_individu[".arrGroupsPerPage"] = $arrGPP;

$tableKeystambah_individu = array();
$tableKeystambah_individu[] = "iid";
$tdatatambah_individu[".Keys"] = $tableKeystambah_individu;

$tdatatambah_individu[".listFields"] = array();
$tdatatambah_individu[".listFields"][] = "lid";
$tdatatambah_individu[".listFields"][] = "pass";
$tdatatambah_individu[".listFields"][] = "nama";
$tdatatambah_individu[".listFields"][] = "email";
$tdatatambah_individu[".listFields"][] = "baid";
$tdatatambah_individu[".listFields"][] = "jaid";

$tdatatambah_individu[".viewFields"] = array();
$tdatatambah_individu[".viewFields"][] = "pass";
$tdatatambah_individu[".viewFields"][] = "lid";

$tdatatambah_individu[".addFields"] = array();
$tdatatambah_individu[".addFields"][] = "lid";
$tdatatambah_individu[".addFields"][] = "pass";
$tdatatambah_individu[".addFields"][] = "nama";
$tdatatambah_individu[".addFields"][] = "email";
$tdatatambah_individu[".addFields"][] = "baid";
$tdatatambah_individu[".addFields"][] = "jaid";

$tdatatambah_individu[".inlineAddFields"] = array();
$tdatatambah_individu[".inlineAddFields"][] = "lid";
$tdatatambah_individu[".inlineAddFields"][] = "pass";
$tdatatambah_individu[".inlineAddFields"][] = "nama";
$tdatatambah_individu[".inlineAddFields"][] = "email";
$tdatatambah_individu[".inlineAddFields"][] = "baid";
$tdatatambah_individu[".inlineAddFields"][] = "jaid";

$tdatatambah_individu[".editFields"] = array();
$tdatatambah_individu[".editFields"][] = "pass";
$tdatatambah_individu[".editFields"][] = "lid";

$tdatatambah_individu[".inlineEditFields"] = array();
$tdatatambah_individu[".inlineEditFields"][] = "pass";
$tdatatambah_individu[".inlineEditFields"][] = "lid";
$tdatatambah_individu[".inlineEditFields"][] = "email";

$tdatatambah_individu[".exportFields"] = array();
$tdatatambah_individu[".exportFields"][] = "pass";
$tdatatambah_individu[".exportFields"][] = "lid";

$tdatatambah_individu[".printFields"] = array();
$tdatatambah_individu[".printFields"][] = "pass";
$tdatatambah_individu[".printFields"][] = "lid";

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
	
		
		
	$tdatatambah_individu["iid"] = $fdata;
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
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "nama"; 
		$fdata["FullName"] = "nama";
	
		
		
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
	
		
		
	$tdatatambah_individu["nama"] = $fdata;
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
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "email"; 
		$fdata["FullName"] = "email";
	
		
		
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
	
		
		
	$tdatatambah_individu["email"] = $fdata;
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
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "baid"; 
		$fdata["FullName"] = "baid";
	
		
		
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
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "baid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "namaBahagian";
	
		
	$edata["LookupTable"] = "bahagian_agensi";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatambah_individu["baid"] = $fdata;
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
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "jaid"; 
		$fdata["FullName"] = "jaid";
	
		
		
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
	
		
		
	$tdatatambah_individu["jaid"] = $fdata;
//	pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pass";
	$fdata["GoodName"] = "pass";
	$fdata["ownerTable"] = "individu";
	$fdata["Label"] = "Pass"; 
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
	
		$fdata["strField"] = "pass"; 
		$fdata["FullName"] = "pass";
	
		
		
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
	
		
		
	$tdatatambah_individu["pass"] = $fdata;
//	lid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "lid";
	$fdata["GoodName"] = "lid";
	$fdata["ownerTable"] = "individu";
	$fdata["Label"] = "Lid"; 
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
	
		$fdata["strField"] = "lid"; 
		$fdata["FullName"] = "lid";
	
		
		
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
	
		
		
	$tdatatambah_individu["lid"] = $fdata;

	
$tables_data["tambah individu"]=&$tdatatambah_individu;
$field_labels["tambah_individu"] = &$fieldLabelstambah_individu;
$fieldToolTips["tambah individu"] = &$fieldToolTipstambah_individu;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tambah individu"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tambah individu"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tambah_individu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "iid,   nama,   email,   baid,   jaid,   pass,   lid";
$proto0["m_strFrom"] = "FROM individu";
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
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "individu";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "iid";
$proto20["m_columns"][] = "nama";
$proto20["m_columns"][] = "email";
$proto20["m_columns"][] = "baid";
$proto20["m_columns"][] = "jaid";
$proto20["m_columns"][] = "pass";
$proto20["m_columns"][] = "lid";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = "0";
$proto21["m_inBrackets"] = "0";
$proto21["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tambah_individu = createSqlQuery_tambah_individu();
							$tdatatambah_individu[".sqlquery"] = $queryData_tambah_individu;
	
if(isset($tdatatambah_individu["field2"])){
	$tdatatambah_individu["field2"]["LookupTable"] = "carscars_view";
	$tdatatambah_individu["field2"]["LookupOrderBy"] = "name";
	$tdatatambah_individu["field2"]["LookupType"] = 4;
	$tdatatambah_individu["field2"]["LinkField"] = "email";
	$tdatatambah_individu["field2"]["DisplayField"] = "name";
	$tdatatambah_individu[".hasCustomViewField"] = true;
}

include_once(getabspath("include/tambah_individu_events.php"));
$tableEvents["tambah individu"] = new eventclass_tambah_individu;
$tdatatambah_individu[".hasEvents"] = true;

$cipherer = new RunnerCipherer("tambah individu");

?>