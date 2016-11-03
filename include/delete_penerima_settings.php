<?php
require_once(getabspath("classes/cipherer.php"));
$tdatadelete_penerima = array();
	$tdatadelete_penerima[".NumberOfChars"] = 80; 
	$tdatadelete_penerima[".ShortName"] = "delete_penerima";
	$tdatadelete_penerima[".OwnerID"] = "";
	$tdatadelete_penerima[".OriginalTable"] = "penerima";

//	field labels
$fieldLabelsdelete_penerima = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdelete_penerima["English"] = array();
	$fieldToolTipsdelete_penerima["English"] = array();
	$fieldLabelsdelete_penerima["English"]["peid"] = "Peid";
	$fieldToolTipsdelete_penerima["English"]["peid"] = "";
	$fieldLabelsdelete_penerima["English"]["jenis"] = "Jenis";
	$fieldToolTipsdelete_penerima["English"]["jenis"] = "";
	$fieldLabelsdelete_penerima["English"]["bahagian"] = "Bahagian";
	$fieldToolTipsdelete_penerima["English"]["bahagian"] = "";
	$fieldLabelsdelete_penerima["English"]["jawatan"] = "Jawatan";
	$fieldToolTipsdelete_penerima["English"]["jawatan"] = "";
	$fieldLabelsdelete_penerima["English"]["individu"] = "Nama Individu";
	$fieldToolTipsdelete_penerima["English"]["individu"] = "";
	$fieldLabelsdelete_penerima["English"]["sid"] = "Sid";
	$fieldToolTipsdelete_penerima["English"]["sid"] = "";
	if (count($fieldToolTipsdelete_penerima["English"]))
		$tdatadelete_penerima[".isUseToolTips"] = true;
}
	
	
	$tdatadelete_penerima[".NCSearch"] = true;



$tdatadelete_penerima[".shortTableName"] = "delete_penerima";
$tdatadelete_penerima[".nSecOptions"] = 0;
$tdatadelete_penerima[".recsPerRowList"] = 1;
$tdatadelete_penerima[".mainTableOwnerID"] = "";
$tdatadelete_penerima[".moveNext"] = 1;
$tdatadelete_penerima[".nType"] = 1;

$tdatadelete_penerima[".strOriginalTableName"] = "penerima";




$tdatadelete_penerima[".showAddInPopup"] = false;

$tdatadelete_penerima[".showEditInPopup"] = false;

$tdatadelete_penerima[".showViewInPopup"] = false;

$tdatadelete_penerima[".fieldsForRegister"] = array();

$tdatadelete_penerima[".listAjax"] = false;

	$tdatadelete_penerima[".audit"] = false;

	$tdatadelete_penerima[".locking"] = false;

$tdatadelete_penerima[".listIcons"] = true;
$tdatadelete_penerima[".inlineEdit"] = true;
$tdatadelete_penerima[".view"] = true;




$tdatadelete_penerima[".showSimpleSearchOptions"] = false;

$tdatadelete_penerima[".showSearchPanel"] = true;

if (isMobile())
	$tdatadelete_penerima[".isUseAjaxSuggest"] = false;
else 
	$tdatadelete_penerima[".isUseAjaxSuggest"] = true;

$tdatadelete_penerima[".rowHighlite"] = true;

// button handlers file names

$tdatadelete_penerima[".addPageEvents"] = false;

// use datepicker for search panel
$tdatadelete_penerima[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatadelete_penerima[".isUseTimeForSearch"] = false;




$tdatadelete_penerima[".allSearchFields"] = array();

$tdatadelete_penerima[".allSearchFields"][] = "jenis";
$tdatadelete_penerima[".allSearchFields"][] = "bahagian";
$tdatadelete_penerima[".allSearchFields"][] = "jawatan";
$tdatadelete_penerima[".allSearchFields"][] = "individu";
$tdatadelete_penerima[".allSearchFields"][] = "sid";

$tdatadelete_penerima[".googleLikeFields"][] = "peid";
$tdatadelete_penerima[".googleLikeFields"][] = "jenis";
$tdatadelete_penerima[".googleLikeFields"][] = "bahagian";
$tdatadelete_penerima[".googleLikeFields"][] = "jawatan";
$tdatadelete_penerima[".googleLikeFields"][] = "individu";
$tdatadelete_penerima[".googleLikeFields"][] = "sid";


$tdatadelete_penerima[".advSearchFields"][] = "jenis";
$tdatadelete_penerima[".advSearchFields"][] = "bahagian";
$tdatadelete_penerima[".advSearchFields"][] = "jawatan";
$tdatadelete_penerima[".advSearchFields"][] = "individu";
$tdatadelete_penerima[".advSearchFields"][] = "sid";

$tdatadelete_penerima[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatadelete_penerima[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadelete_penerima[".strOrderBy"] = $tstrOrderBy;

$tdatadelete_penerima[".orderindexes"] = array();

$tdatadelete_penerima[".sqlHead"] = "SELECT peid,   jenis,   bahagian,   jawatan,   individu,   sid";
$tdatadelete_penerima[".sqlFrom"] = "FROM penerima";
$tdatadelete_penerima[".sqlWhereExpr"] = "";
$tdatadelete_penerima[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadelete_penerima[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadelete_penerima[".arrGroupsPerPage"] = $arrGPP;

$tableKeysdelete_penerima = array();
$tableKeysdelete_penerima[] = "peid";
$tdatadelete_penerima[".Keys"] = $tableKeysdelete_penerima;

$tdatadelete_penerima[".listFields"] = array();
$tdatadelete_penerima[".listFields"][] = "sid";
$tdatadelete_penerima[".listFields"][] = "jenis";
$tdatadelete_penerima[".listFields"][] = "bahagian";
$tdatadelete_penerima[".listFields"][] = "jawatan";
$tdatadelete_penerima[".listFields"][] = "individu";

$tdatadelete_penerima[".viewFields"] = array();
$tdatadelete_penerima[".viewFields"][] = "jenis";
$tdatadelete_penerima[".viewFields"][] = "bahagian";
$tdatadelete_penerima[".viewFields"][] = "jawatan";
$tdatadelete_penerima[".viewFields"][] = "individu";
$tdatadelete_penerima[".viewFields"][] = "sid";

$tdatadelete_penerima[".addFields"] = array();
$tdatadelete_penerima[".addFields"][] = "jenis";
$tdatadelete_penerima[".addFields"][] = "bahagian";
$tdatadelete_penerima[".addFields"][] = "jawatan";
$tdatadelete_penerima[".addFields"][] = "individu";
$tdatadelete_penerima[".addFields"][] = "sid";

$tdatadelete_penerima[".inlineAddFields"] = array();
$tdatadelete_penerima[".inlineAddFields"][] = "sid";
$tdatadelete_penerima[".inlineAddFields"][] = "jenis";
$tdatadelete_penerima[".inlineAddFields"][] = "bahagian";
$tdatadelete_penerima[".inlineAddFields"][] = "jawatan";
$tdatadelete_penerima[".inlineAddFields"][] = "individu";

$tdatadelete_penerima[".editFields"] = array();
$tdatadelete_penerima[".editFields"][] = "jenis";
$tdatadelete_penerima[".editFields"][] = "bahagian";
$tdatadelete_penerima[".editFields"][] = "jawatan";
$tdatadelete_penerima[".editFields"][] = "individu";
$tdatadelete_penerima[".editFields"][] = "sid";

$tdatadelete_penerima[".inlineEditFields"] = array();
$tdatadelete_penerima[".inlineEditFields"][] = "sid";
$tdatadelete_penerima[".inlineEditFields"][] = "jenis";
$tdatadelete_penerima[".inlineEditFields"][] = "bahagian";
$tdatadelete_penerima[".inlineEditFields"][] = "jawatan";
$tdatadelete_penerima[".inlineEditFields"][] = "individu";

$tdatadelete_penerima[".exportFields"] = array();
$tdatadelete_penerima[".exportFields"][] = "jenis";
$tdatadelete_penerima[".exportFields"][] = "bahagian";
$tdatadelete_penerima[".exportFields"][] = "jawatan";
$tdatadelete_penerima[".exportFields"][] = "individu";
$tdatadelete_penerima[".exportFields"][] = "sid";

$tdatadelete_penerima[".printFields"] = array();
$tdatadelete_penerima[".printFields"][] = "jenis";
$tdatadelete_penerima[".printFields"][] = "bahagian";
$tdatadelete_penerima[".printFields"][] = "jawatan";
$tdatadelete_penerima[".printFields"][] = "individu";
$tdatadelete_penerima[".printFields"][] = "sid";

//	peid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "peid";
	$fdata["GoodName"] = "peid";
	$fdata["ownerTable"] = "penerima";
	$fdata["Label"] = "Peid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "peid"; 
		$fdata["FullName"] = "peid";
	
		
		
				
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
	
		
		
	$tdatadelete_penerima["peid"] = $fdata;
//	jenis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "jenis";
	$fdata["GoodName"] = "jenis";
	$fdata["ownerTable"] = "penerima";
	$fdata["Label"] = "Jenis"; 
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
	
		$fdata["strField"] = "jenis"; 
		$fdata["FullName"] = "jenis";
	
		
		
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
				
		
			
	$edata["LinkField"] = "jid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "jenis";
	
		
	$edata["LookupTable"] = "jenis";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
			//	dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "bahagian";
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadelete_penerima["jenis"] = $fdata;
//	bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "bahagian";
	$fdata["GoodName"] = "bahagian";
	$fdata["ownerTable"] = "penerima";
	$fdata["Label"] = "Bahagian"; 
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
	
		$fdata["strField"] = "bahagian"; 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "baid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "namaBahagian";
	
		
	$edata["LookupTable"] = "bahagian_agensi";
	$edata["LookupOrderBy"] = "";
	
		
		
		$edata["UseCategory"] = true; 
	$edata["CategoryControl"] = "jenis"; 
	$edata["CategoryFilter"] = "jid"; 
	
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadelete_penerima["bahagian"] = $fdata;
//	jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "jawatan";
	$fdata["GoodName"] = "jawatan";
	$fdata["ownerTable"] = "penerima";
	$fdata["Label"] = "Jawatan"; 
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
	
		$fdata["strField"] = "jawatan"; 
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
	
		
		
		
		
		
				
			//	dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "individu";
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadelete_penerima["jawatan"] = $fdata;
//	individu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "individu";
	$fdata["GoodName"] = "individu";
	$fdata["ownerTable"] = "penerima";
	$fdata["Label"] = "Nama Individu"; 
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
	
		$fdata["strField"] = "individu"; 
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
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "iid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nama";
	
		
	$edata["LookupTable"] = "individu";
	$edata["LookupOrderBy"] = "";
	
		
		
		$edata["UseCategory"] = true; 
	$edata["CategoryControl"] = "jawatan"; 
	$edata["CategoryFilter"] = "jaid"; 
	
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadelete_penerima["individu"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "penerima";
	$fdata["Label"] = "Sid"; 
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
	
		$fdata["strField"] = "sid"; 
		$fdata["FullName"] = "sid";
	
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadelete_penerima["sid"] = $fdata;

	
$tables_data["delete penerima"]=&$tdatadelete_penerima;
$field_labels["delete_penerima"] = &$fieldLabelsdelete_penerima;
$fieldToolTips["delete penerima"] = &$fieldToolTipsdelete_penerima;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["delete penerima"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["delete penerima"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_delete_penerima()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "peid,   jenis,   bahagian,   jawatan,   individu,   sid";
$proto0["m_strFrom"] = "FROM penerima";
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
	"m_strName" => "peid",
	"m_strTable" => "penerima"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "jenis",
	"m_strTable" => "penerima"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "bahagian",
	"m_strTable" => "penerima"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "jawatan",
	"m_strTable" => "penerima"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "individu",
	"m_strTable" => "penerima"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "penerima"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "penerima";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "peid";
$proto18["m_columns"][] = "jenis";
$proto18["m_columns"][] = "bahagian";
$proto18["m_columns"][] = "jawatan";
$proto18["m_columns"][] = "individu";
$proto18["m_columns"][] = "sid";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_delete_penerima = createSqlQuery_delete_penerima();
						$tdatadelete_penerima[".sqlquery"] = $queryData_delete_penerima;
	
if(isset($tdatadelete_penerima["field2"])){
	$tdatadelete_penerima["field2"]["LookupTable"] = "carscars_view";
	$tdatadelete_penerima["field2"]["LookupOrderBy"] = "name";
	$tdatadelete_penerima["field2"]["LookupType"] = 4;
	$tdatadelete_penerima["field2"]["LinkField"] = "email";
	$tdatadelete_penerima["field2"]["DisplayField"] = "name";
	$tdatadelete_penerima[".hasCustomViewField"] = true;
}

$tableEvents["delete penerima"] = new eventsBase;
$tdatadelete_penerima[".hasEvents"] = false;

$cipherer = new RunnerCipherer("delete penerima");

?>