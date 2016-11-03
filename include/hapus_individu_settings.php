<?php
require_once(getabspath("classes/cipherer.php"));
$tdatahapus_individu = array();
	$tdatahapus_individu[".NumberOfChars"] = 80; 
	$tdatahapus_individu[".ShortName"] = "hapus_individu";
	$tdatahapus_individu[".OwnerID"] = "";
	$tdatahapus_individu[".OriginalTable"] = "surat_individu";

//	field labels
$fieldLabelshapus_individu = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshapus_individu["English"] = array();
	$fieldToolTipshapus_individu["English"] = array();
	$fieldLabelshapus_individu["English"]["siid"] = "Siid";
	$fieldToolTipshapus_individu["English"]["siid"] = "";
	$fieldLabelshapus_individu["English"]["sid"] = "Sid";
	$fieldToolTipshapus_individu["English"]["sid"] = "";
	$fieldLabelshapus_individu["English"]["iid"] = "Iid";
	$fieldToolTipshapus_individu["English"]["iid"] = "";
	$fieldLabelshapus_individu["English"]["nama"] = "Nama";
	$fieldToolTipshapus_individu["English"]["nama"] = "";
	$fieldLabelshapus_individu["English"]["baid"] = "Bahagian";
	$fieldToolTipshapus_individu["English"]["baid"] = "";
	$fieldLabelshapus_individu["English"]["jaid"] = "Jawatan";
	$fieldToolTipshapus_individu["English"]["jaid"] = "";
	$fieldLabelshapus_individu["English"]["iid1"] = "Pilihan";
	$fieldToolTipshapus_individu["English"]["iid1"] = "";
	if (count($fieldToolTipshapus_individu["English"]))
		$tdatahapus_individu[".isUseToolTips"] = true;
}
	
	
	$tdatahapus_individu[".NCSearch"] = true;



$tdatahapus_individu[".shortTableName"] = "hapus_individu";
$tdatahapus_individu[".nSecOptions"] = 0;
$tdatahapus_individu[".recsPerRowList"] = 1;
$tdatahapus_individu[".mainTableOwnerID"] = "";
$tdatahapus_individu[".moveNext"] = 1;
$tdatahapus_individu[".nType"] = 1;

$tdatahapus_individu[".strOriginalTableName"] = "surat_individu";




$tdatahapus_individu[".showAddInPopup"] = false;

$tdatahapus_individu[".showEditInPopup"] = false;

$tdatahapus_individu[".showViewInPopup"] = false;

$tdatahapus_individu[".fieldsForRegister"] = array();

$tdatahapus_individu[".listAjax"] = false;

	$tdatahapus_individu[".audit"] = false;

	$tdatahapus_individu[".locking"] = false;

$tdatahapus_individu[".listIcons"] = true;
$tdatahapus_individu[".edit"] = true;
$tdatahapus_individu[".inlineEdit"] = true;
$tdatahapus_individu[".inlineAdd"] = true;
$tdatahapus_individu[".view"] = true;



$tdatahapus_individu[".delete"] = true;

$tdatahapus_individu[".showSimpleSearchOptions"] = false;

$tdatahapus_individu[".showSearchPanel"] = true;

if (isMobile())
	$tdatahapus_individu[".isUseAjaxSuggest"] = false;
else 
	$tdatahapus_individu[".isUseAjaxSuggest"] = true;

$tdatahapus_individu[".rowHighlite"] = true;

// button handlers file names
$tdatahapus_individu[".isUsebuttonHandlers"] = true;
$tdatahapus_individu[".isUsebuttonHandlers"] = true;

$tdatahapus_individu[".addPageEvents"] = false;

// use datepicker for search panel
$tdatahapus_individu[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatahapus_individu[".isUseTimeForSearch"] = false;




$tdatahapus_individu[".allSearchFields"] = array();

$tdatahapus_individu[".allSearchFields"][] = "siid";
$tdatahapus_individu[".allSearchFields"][] = "sid";
$tdatahapus_individu[".allSearchFields"][] = "iid";
$tdatahapus_individu[".allSearchFields"][] = "nama";
$tdatahapus_individu[".allSearchFields"][] = "baid";
$tdatahapus_individu[".allSearchFields"][] = "jaid";

$tdatahapus_individu[".googleLikeFields"][] = "siid";
$tdatahapus_individu[".googleLikeFields"][] = "sid";
$tdatahapus_individu[".googleLikeFields"][] = "iid";
$tdatahapus_individu[".googleLikeFields"][] = "nama";
$tdatahapus_individu[".googleLikeFields"][] = "baid";
$tdatahapus_individu[".googleLikeFields"][] = "jaid";
$tdatahapus_individu[".googleLikeFields"][] = "iid1";


$tdatahapus_individu[".advSearchFields"][] = "siid";
$tdatahapus_individu[".advSearchFields"][] = "sid";
$tdatahapus_individu[".advSearchFields"][] = "iid";
$tdatahapus_individu[".advSearchFields"][] = "nama";
$tdatahapus_individu[".advSearchFields"][] = "baid";
$tdatahapus_individu[".advSearchFields"][] = "jaid";

$tdatahapus_individu[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatahapus_individu[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahapus_individu[".strOrderBy"] = $tstrOrderBy;

$tdatahapus_individu[".orderindexes"] = array();

$tdatahapus_individu[".sqlHead"] = "SELECT surat_individu.siid,  surat_individu.sid,  surat_individu.iid,  individu.nama,  individu.baid,  individu.jaid,  individu.iid AS iid1";
$tdatahapus_individu[".sqlFrom"] = "FROM surat_individu  , individu";
$tdatahapus_individu[".sqlWhereExpr"] = "(individu.iid = surat_individu.iid)";
$tdatahapus_individu[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahapus_individu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahapus_individu[".arrGroupsPerPage"] = $arrGPP;

$tableKeyshapus_individu = array();
$tableKeyshapus_individu[] = "siid";
$tdatahapus_individu[".Keys"] = $tableKeyshapus_individu;

$tdatahapus_individu[".listFields"] = array();
$tdatahapus_individu[".listFields"][] = "nama";
$tdatahapus_individu[".listFields"][] = "baid";
$tdatahapus_individu[".listFields"][] = "jaid";

$tdatahapus_individu[".viewFields"] = array();
$tdatahapus_individu[".viewFields"][] = "siid";
$tdatahapus_individu[".viewFields"][] = "sid";
$tdatahapus_individu[".viewFields"][] = "iid";
$tdatahapus_individu[".viewFields"][] = "nama";
$tdatahapus_individu[".viewFields"][] = "baid";
$tdatahapus_individu[".viewFields"][] = "jaid";

$tdatahapus_individu[".addFields"] = array();
$tdatahapus_individu[".addFields"][] = "sid";
$tdatahapus_individu[".addFields"][] = "iid";

$tdatahapus_individu[".inlineAddFields"] = array();
$tdatahapus_individu[".inlineAddFields"][] = "nama";
$tdatahapus_individu[".inlineAddFields"][] = "baid";
$tdatahapus_individu[".inlineAddFields"][] = "jaid";

$tdatahapus_individu[".editFields"] = array();
$tdatahapus_individu[".editFields"][] = "sid";
$tdatahapus_individu[".editFields"][] = "iid";

$tdatahapus_individu[".inlineEditFields"] = array();
$tdatahapus_individu[".inlineEditFields"][] = "nama";
$tdatahapus_individu[".inlineEditFields"][] = "baid";
$tdatahapus_individu[".inlineEditFields"][] = "jaid";

$tdatahapus_individu[".exportFields"] = array();

$tdatahapus_individu[".printFields"] = array();

//	siid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "siid";
	$fdata["GoodName"] = "siid";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = "Siid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "siid"; 
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
	
		
		
	$tdatahapus_individu["siid"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = "Sid"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sid"; 
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
	
		
		
	$tdatahapus_individu["sid"] = $fdata;
//	iid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "iid";
	$fdata["GoodName"] = "iid";
	$fdata["ownerTable"] = "surat_individu";
	$fdata["Label"] = "Iid"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "iid"; 
		$fdata["FullName"] = "surat_individu.iid";
	
		
		
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
	
		
		
	$tdatahapus_individu["iid"] = $fdata;
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "individu";
	$fdata["Label"] = "Nama"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatahapus_individu["nama"] = $fdata;
//	baid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "baid";
	$fdata["GoodName"] = "baid";
	$fdata["ownerTable"] = "individu";
	$fdata["Label"] = "Bahagian"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
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
	
		
		
	$tdatahapus_individu["baid"] = $fdata;
//	jaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "jaid";
	$fdata["GoodName"] = "jaid";
	$fdata["ownerTable"] = "individu";
	$fdata["Label"] = "Jawatan"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
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
	
		
		
	$tdatahapus_individu["jaid"] = $fdata;
//	iid1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "iid1";
	$fdata["GoodName"] = "iid1";
	$fdata["ownerTable"] = "individu";
	$fdata["Label"] = "Pilihan"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "iid"; 
		$fdata["FullName"] = "individu.iid";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdatahapus_individu["iid1"] = $fdata;

	
$tables_data["hapus individu"]=&$tdatahapus_individu;
$field_labels["hapus_individu"] = &$fieldLabelshapus_individu;
$fieldToolTips["hapus individu"] = &$fieldToolTipshapus_individu;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hapus individu"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["hapus individu"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hapus_individu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "surat_individu.siid,  surat_individu.sid,  surat_individu.iid,  individu.nama,  individu.baid,  individu.jaid,  individu.iid AS iid1";
$proto0["m_strFrom"] = "FROM surat_individu  , individu";
$proto0["m_strWhere"] = "(individu.iid = surat_individu.iid)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "individu.iid = surat_individu.iid";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "iid",
	"m_strTable" => "individu"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "= surat_individu.iid";
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
	"m_strName" => "siid",
	"m_strTable" => "surat_individu"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "surat_individu"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "iid",
	"m_strTable" => "surat_individu"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "individu"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "baid",
	"m_strTable" => "individu"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "jaid",
	"m_strTable" => "individu"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "iid",
	"m_strTable" => "individu"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "iid1";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "surat_individu";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "siid";
$proto20["m_columns"][] = "sid";
$proto20["m_columns"][] = "iid";
$proto20["m_columns"][] = "Bahagian";
$proto20["m_columns"][] = "Jawatan";
$proto20["m_columns"][] = "Email";
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
												$proto23=array();
$proto23["m_link"] = "SQLL_CROSSJOIN";
			$proto24=array();
$proto24["m_strName"] = "individu";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "iid";
$proto24["m_columns"][] = "nama";
$proto24["m_columns"][] = "email";
$proto24["m_columns"][] = "baid";
$proto24["m_columns"][] = "jaid";
$proto24["m_columns"][] = "pass";
$proto24["m_columns"][] = "lid";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_alias"] = "";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = "0";
$proto25["m_inBrackets"] = "0";
$proto25["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hapus_individu = createSqlQuery_hapus_individu();
							$tdatahapus_individu[".sqlquery"] = $queryData_hapus_individu;
	
if(isset($tdatahapus_individu["field2"])){
	$tdatahapus_individu["field2"]["LookupTable"] = "carscars_view";
	$tdatahapus_individu["field2"]["LookupOrderBy"] = "name";
	$tdatahapus_individu["field2"]["LookupType"] = 4;
	$tdatahapus_individu["field2"]["LinkField"] = "email";
	$tdatahapus_individu["field2"]["DisplayField"] = "name";
	$tdatahapus_individu[".hasCustomViewField"] = true;
}

include_once(getabspath("include/hapus_individu_events.php"));
$tableEvents["hapus individu"] = new eventclass_hapus_individu;
$tdatahapus_individu[".hasEvents"] = true;

$cipherer = new RunnerCipherer("hapus individu");

?>