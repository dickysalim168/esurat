<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapenerima = array();
	$tdatapenerima[".NumberOfChars"] = 80; 
	$tdatapenerima[".ShortName"] = "penerima";
	$tdatapenerima[".OwnerID"] = "";
	$tdatapenerima[".OriginalTable"] = "penerima";

//	field labels
$fieldLabelspenerima = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspenerima["English"] = array();
	$fieldToolTipspenerima["English"] = array();
	$fieldLabelspenerima["English"]["peid"] = "Peid";
	$fieldToolTipspenerima["English"]["peid"] = "";
	$fieldLabelspenerima["English"]["jenis"] = "Jenis";
	$fieldToolTipspenerima["English"]["jenis"] = "";
	$fieldLabelspenerima["English"]["bahagian"] = "Bahagian";
	$fieldToolTipspenerima["English"]["bahagian"] = "";
	$fieldLabelspenerima["English"]["jawatan"] = "Jawatan";
	$fieldToolTipspenerima["English"]["jawatan"] = "";
	$fieldLabelspenerima["English"]["individu"] = "Nama Individu";
	$fieldToolTipspenerima["English"]["individu"] = "";
	$fieldLabelspenerima["English"]["sid"] = "Sid";
	$fieldToolTipspenerima["English"]["sid"] = "";
	if (count($fieldToolTipspenerima["English"]))
		$tdatapenerima[".isUseToolTips"] = true;
}
	
	
	$tdatapenerima[".NCSearch"] = true;



$tdatapenerima[".shortTableName"] = "penerima";
$tdatapenerima[".nSecOptions"] = 0;
$tdatapenerima[".recsPerRowList"] = 1;
$tdatapenerima[".mainTableOwnerID"] = "";
$tdatapenerima[".moveNext"] = 1;
$tdatapenerima[".nType"] = 0;

$tdatapenerima[".strOriginalTableName"] = "penerima";




$tdatapenerima[".showAddInPopup"] = false;

$tdatapenerima[".showEditInPopup"] = false;

$tdatapenerima[".showViewInPopup"] = false;

$tdatapenerima[".fieldsForRegister"] = array();

$tdatapenerima[".listAjax"] = false;

	$tdatapenerima[".audit"] = false;

	$tdatapenerima[".locking"] = false;

$tdatapenerima[".listIcons"] = true;
$tdatapenerima[".edit"] = true;
$tdatapenerima[".inlineEdit"] = true;
$tdatapenerima[".inlineAdd"] = true;
$tdatapenerima[".view"] = true;

$tdatapenerima[".exportTo"] = true;

$tdatapenerima[".printFriendly"] = true;

$tdatapenerima[".delete"] = true;

$tdatapenerima[".showSimpleSearchOptions"] = false;

$tdatapenerima[".showSearchPanel"] = true;

if (isMobile())
	$tdatapenerima[".isUseAjaxSuggest"] = false;
else 
	$tdatapenerima[".isUseAjaxSuggest"] = true;

$tdatapenerima[".rowHighlite"] = true;

// button handlers file names

$tdatapenerima[".addPageEvents"] = false;

// use datepicker for search panel
$tdatapenerima[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatapenerima[".isUseTimeForSearch"] = false;




$tdatapenerima[".allSearchFields"] = array();

$tdatapenerima[".allSearchFields"][] = "jenis";
$tdatapenerima[".allSearchFields"][] = "bahagian";
$tdatapenerima[".allSearchFields"][] = "jawatan";
$tdatapenerima[".allSearchFields"][] = "individu";
$tdatapenerima[".allSearchFields"][] = "sid";

$tdatapenerima[".googleLikeFields"][] = "peid";
$tdatapenerima[".googleLikeFields"][] = "jenis";
$tdatapenerima[".googleLikeFields"][] = "bahagian";
$tdatapenerima[".googleLikeFields"][] = "jawatan";
$tdatapenerima[".googleLikeFields"][] = "individu";
$tdatapenerima[".googleLikeFields"][] = "sid";


$tdatapenerima[".advSearchFields"][] = "jenis";
$tdatapenerima[".advSearchFields"][] = "bahagian";
$tdatapenerima[".advSearchFields"][] = "jawatan";
$tdatapenerima[".advSearchFields"][] = "individu";
$tdatapenerima[".advSearchFields"][] = "sid";

$tdatapenerima[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatapenerima[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapenerima[".strOrderBy"] = $tstrOrderBy;

$tdatapenerima[".orderindexes"] = array();

$tdatapenerima[".sqlHead"] = "SELECT peid,   jenis,   bahagian,   jawatan,   individu,   sid";
$tdatapenerima[".sqlFrom"] = "FROM penerima";
$tdatapenerima[".sqlWhereExpr"] = "";
$tdatapenerima[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapenerima[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapenerima[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspenerima = array();
$tableKeyspenerima[] = "peid";
$tdatapenerima[".Keys"] = $tableKeyspenerima;

$tdatapenerima[".listFields"] = array();
$tdatapenerima[".listFields"][] = "jenis";
$tdatapenerima[".listFields"][] = "bahagian";
$tdatapenerima[".listFields"][] = "jawatan";
$tdatapenerima[".listFields"][] = "individu";
$tdatapenerima[".listFields"][] = "sid";

$tdatapenerima[".viewFields"] = array();
$tdatapenerima[".viewFields"][] = "jenis";
$tdatapenerima[".viewFields"][] = "bahagian";
$tdatapenerima[".viewFields"][] = "jawatan";
$tdatapenerima[".viewFields"][] = "individu";
$tdatapenerima[".viewFields"][] = "sid";

$tdatapenerima[".addFields"] = array();
$tdatapenerima[".addFields"][] = "jenis";
$tdatapenerima[".addFields"][] = "bahagian";
$tdatapenerima[".addFields"][] = "jawatan";
$tdatapenerima[".addFields"][] = "individu";
$tdatapenerima[".addFields"][] = "sid";

$tdatapenerima[".inlineAddFields"] = array();
$tdatapenerima[".inlineAddFields"][] = "jenis";
$tdatapenerima[".inlineAddFields"][] = "bahagian";
$tdatapenerima[".inlineAddFields"][] = "jawatan";
$tdatapenerima[".inlineAddFields"][] = "individu";
$tdatapenerima[".inlineAddFields"][] = "sid";

$tdatapenerima[".editFields"] = array();
$tdatapenerima[".editFields"][] = "jenis";
$tdatapenerima[".editFields"][] = "bahagian";
$tdatapenerima[".editFields"][] = "jawatan";
$tdatapenerima[".editFields"][] = "individu";
$tdatapenerima[".editFields"][] = "sid";

$tdatapenerima[".inlineEditFields"] = array();
$tdatapenerima[".inlineEditFields"][] = "jenis";
$tdatapenerima[".inlineEditFields"][] = "bahagian";
$tdatapenerima[".inlineEditFields"][] = "jawatan";
$tdatapenerima[".inlineEditFields"][] = "individu";
$tdatapenerima[".inlineEditFields"][] = "sid";

$tdatapenerima[".exportFields"] = array();
$tdatapenerima[".exportFields"][] = "jenis";
$tdatapenerima[".exportFields"][] = "bahagian";
$tdatapenerima[".exportFields"][] = "jawatan";
$tdatapenerima[".exportFields"][] = "individu";
$tdatapenerima[".exportFields"][] = "sid";

$tdatapenerima[".printFields"] = array();
$tdatapenerima[".printFields"][] = "jenis";
$tdatapenerima[".printFields"][] = "bahagian";
$tdatapenerima[".printFields"][] = "jawatan";
$tdatapenerima[".printFields"][] = "individu";
$tdatapenerima[".printFields"][] = "sid";

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
	
		
		
	$tdatapenerima["peid"] = $fdata;
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
	
		
		
	$tdatapenerima["jenis"] = $fdata;
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
	
		
		
	$tdatapenerima["bahagian"] = $fdata;
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
	
		
		
	$tdatapenerima["jawatan"] = $fdata;
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
	
		
		
	$tdatapenerima["individu"] = $fdata;
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
	
		
		
	$tdatapenerima["sid"] = $fdata;

	
$tables_data["penerima"]=&$tdatapenerima;
$field_labels["penerima"] = &$fieldLabelspenerima;
$fieldToolTips["penerima"] = &$fieldToolTipspenerima;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["penerima"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["penerima"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="surat";
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
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["penerima"][$mIndex] = $masterParams;	
		$masterTablesData["penerima"][$mIndex]["masterKeys"][]="sid";
		$masterTablesData["penerima"][$mIndex]["detailKeys"][]="sid";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_penerima()
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
$queryData_penerima = createSqlQuery_penerima();
						$tdatapenerima[".sqlquery"] = $queryData_penerima;
	
if(isset($tdatapenerima["field2"])){
	$tdatapenerima["field2"]["LookupTable"] = "carscars_view";
	$tdatapenerima["field2"]["LookupOrderBy"] = "name";
	$tdatapenerima["field2"]["LookupType"] = 4;
	$tdatapenerima["field2"]["LinkField"] = "email";
	$tdatapenerima["field2"]["DisplayField"] = "name";
	$tdatapenerima[".hasCustomViewField"] = true;
}

include_once(getabspath("include/penerima_events.php"));
$tableEvents["penerima"] = new eventclass_penerima;
$tdatapenerima[".hasEvents"] = true;

$cipherer = new RunnerCipherer("penerima");

?>