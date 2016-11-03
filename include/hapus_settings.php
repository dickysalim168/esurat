<?php
require_once(getabspath("classes/cipherer.php"));
$tdatahapus = array();
	$tdatahapus[".NumberOfChars"] = 80; 
	$tdatahapus[".ShortName"] = "hapus";
	$tdatahapus[".OwnerID"] = "";
	$tdatahapus[".OriginalTable"] = "surat_individu";

//	field labels
$fieldLabelshapus = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshapus["English"] = array();
	$fieldToolTipshapus["English"] = array();
	$fieldLabelshapus["English"]["siid"] = "Siid";
	$fieldToolTipshapus["English"]["siid"] = "";
	$fieldLabelshapus["English"]["sid"] = "Sid";
	$fieldToolTipshapus["English"]["sid"] = "";
	$fieldLabelshapus["English"]["iid"] = "Iid";
	$fieldToolTipshapus["English"]["iid"] = "";
	$fieldLabelshapus["English"]["nama"] = "Nama";
	$fieldToolTipshapus["English"]["nama"] = "";
	$fieldLabelshapus["English"]["baid"] = "Bahagian";
	$fieldToolTipshapus["English"]["baid"] = "";
	$fieldLabelshapus["English"]["jaid"] = "Jawatan";
	$fieldToolTipshapus["English"]["jaid"] = "";
	$fieldLabelshapus["English"]["iid1"] = "Pilihan";
	$fieldToolTipshapus["English"]["iid1"] = "";
	if (count($fieldToolTipshapus["English"]))
		$tdatahapus[".isUseToolTips"] = true;
}
	
	
	$tdatahapus[".NCSearch"] = true;



$tdatahapus[".shortTableName"] = "hapus";
$tdatahapus[".nSecOptions"] = 0;
$tdatahapus[".recsPerRowList"] = 1;
$tdatahapus[".mainTableOwnerID"] = "";
$tdatahapus[".moveNext"] = 1;
$tdatahapus[".nType"] = 1;

$tdatahapus[".strOriginalTableName"] = "surat_individu";




$tdatahapus[".showAddInPopup"] = false;

$tdatahapus[".showEditInPopup"] = false;

$tdatahapus[".showViewInPopup"] = false;

$tdatahapus[".fieldsForRegister"] = array();

$tdatahapus[".listAjax"] = false;

	$tdatahapus[".audit"] = false;

	$tdatahapus[".locking"] = false;

$tdatahapus[".listIcons"] = true;
$tdatahapus[".edit"] = true;
$tdatahapus[".inlineEdit"] = true;
$tdatahapus[".inlineAdd"] = true;
$tdatahapus[".view"] = true;



$tdatahapus[".delete"] = true;

$tdatahapus[".showSimpleSearchOptions"] = false;

$tdatahapus[".showSearchPanel"] = true;

if (isMobile())
	$tdatahapus[".isUseAjaxSuggest"] = false;
else 
	$tdatahapus[".isUseAjaxSuggest"] = true;

$tdatahapus[".rowHighlite"] = true;

// button handlers file names
$tdatahapus[".isUsebuttonHandlers"] = true;
$tdatahapus[".isUsebuttonHandlers"] = true;

$tdatahapus[".addPageEvents"] = false;

// use datepicker for search panel
$tdatahapus[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatahapus[".isUseTimeForSearch"] = false;




$tdatahapus[".allSearchFields"] = array();

$tdatahapus[".allSearchFields"][] = "siid";
$tdatahapus[".allSearchFields"][] = "sid";
$tdatahapus[".allSearchFields"][] = "iid";
$tdatahapus[".allSearchFields"][] = "nama";
$tdatahapus[".allSearchFields"][] = "baid";
$tdatahapus[".allSearchFields"][] = "jaid";

$tdatahapus[".googleLikeFields"][] = "siid";
$tdatahapus[".googleLikeFields"][] = "sid";
$tdatahapus[".googleLikeFields"][] = "iid";
$tdatahapus[".googleLikeFields"][] = "nama";
$tdatahapus[".googleLikeFields"][] = "baid";
$tdatahapus[".googleLikeFields"][] = "jaid";
$tdatahapus[".googleLikeFields"][] = "iid1";


$tdatahapus[".advSearchFields"][] = "siid";
$tdatahapus[".advSearchFields"][] = "sid";
$tdatahapus[".advSearchFields"][] = "iid";
$tdatahapus[".advSearchFields"][] = "nama";
$tdatahapus[".advSearchFields"][] = "baid";
$tdatahapus[".advSearchFields"][] = "jaid";

$tdatahapus[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatahapus[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahapus[".strOrderBy"] = $tstrOrderBy;

$tdatahapus[".orderindexes"] = array();

$tdatahapus[".sqlHead"] = "SELECT surat_individu.siid,  surat_individu.sid,  surat_individu.iid,  individu.nama,  individu.baid,  individu.jaid,  individu.iid AS iid1";
$tdatahapus[".sqlFrom"] = "FROM surat_individu  , individu";
$tdatahapus[".sqlWhereExpr"] = "(individu.iid = surat_individu.iid)";
$tdatahapus[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahapus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahapus[".arrGroupsPerPage"] = $arrGPP;

$tableKeyshapus = array();
$tableKeyshapus[] = "siid";
$tdatahapus[".Keys"] = $tableKeyshapus;

$tdatahapus[".listFields"] = array();
$tdatahapus[".listFields"][] = "nama";
$tdatahapus[".listFields"][] = "baid";
$tdatahapus[".listFields"][] = "jaid";

$tdatahapus[".viewFields"] = array();
$tdatahapus[".viewFields"][] = "siid";
$tdatahapus[".viewFields"][] = "sid";
$tdatahapus[".viewFields"][] = "iid";
$tdatahapus[".viewFields"][] = "nama";
$tdatahapus[".viewFields"][] = "baid";
$tdatahapus[".viewFields"][] = "jaid";

$tdatahapus[".addFields"] = array();
$tdatahapus[".addFields"][] = "sid";
$tdatahapus[".addFields"][] = "iid";

$tdatahapus[".inlineAddFields"] = array();
$tdatahapus[".inlineAddFields"][] = "nama";
$tdatahapus[".inlineAddFields"][] = "baid";
$tdatahapus[".inlineAddFields"][] = "jaid";

$tdatahapus[".editFields"] = array();
$tdatahapus[".editFields"][] = "sid";
$tdatahapus[".editFields"][] = "iid";

$tdatahapus[".inlineEditFields"] = array();
$tdatahapus[".inlineEditFields"][] = "nama";
$tdatahapus[".inlineEditFields"][] = "baid";
$tdatahapus[".inlineEditFields"][] = "jaid";

$tdatahapus[".exportFields"] = array();

$tdatahapus[".printFields"] = array();

//	siid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "siid";
	$fdata["GoodName"] = "siid";
	$fdata["ownerTable"] = "hapus";
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
	
		
		
	$tdatahapus["siid"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "hapus";
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
	
		
		
	$tdatahapus["sid"] = $fdata;
//	iid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "iid";
	$fdata["GoodName"] = "iid";
	$fdata["ownerTable"] = "hapus";
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
	
		
		
	$tdatahapus["iid"] = $fdata;
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "hapus";
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
	
		
		
	$tdatahapus["nama"] = $fdata;
//	baid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "baid";
	$fdata["GoodName"] = "baid";
	$fdata["ownerTable"] = "hapus";
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
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "baid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "namaBahagian";
	
		
	$edata["LookupTable"] = "bahagian_agensi";
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
	
		
		
	$tdatahapus["baid"] = $fdata;
//	jaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "jaid";
	$fdata["GoodName"] = "jaid";
	$fdata["ownerTable"] = "hapus";
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
	
		
		
	$tdatahapus["jaid"] = $fdata;
//	iid1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "iid1";
	$fdata["GoodName"] = "iid1";
	$fdata["ownerTable"] = "hapus";
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
	
		
		
	$tdatahapus["iid1"] = $fdata;

	
$tables_data["hapus"]=&$tdatahapus;
$field_labels["hapus"] = &$fieldLabelshapus;
$fieldToolTips["hapus"] = &$fieldToolTipshapus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hapus"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["hapus"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hapus()
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
$proto20["m_columns"][] = "key2";
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
$proto24["m_columns"][] = "baid";
$proto24["m_columns"][] = "jaid";
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
$queryData_hapus = createSqlQuery_hapus();
							$tdatahapus[".sqlquery"] = $queryData_hapus;
	
if(isset($tdatahapus["field2"])){
	$tdatahapus["field2"]["LookupTable"] = "carscars_view";
	$tdatahapus["field2"]["LookupOrderBy"] = "name";
	$tdatahapus["field2"]["LookupType"] = 4;
	$tdatahapus["field2"]["LinkField"] = "email";
	$tdatahapus["field2"]["DisplayField"] = "name";
	$tdatahapus[".hasCustomViewField"] = true;
}

include_once(getabspath("include/hapus_events.php"));
$tableEvents["hapus"] = new eventclass_hapus;
$tdatahapus[".hasEvents"] = true;

$cipherer = new RunnerCipherer("hapus");

?>