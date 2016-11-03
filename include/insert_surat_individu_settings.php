<?php
require_once(getabspath("classes/cipherer.php"));
$tdatainsert_surat_individu = array();
	$tdatainsert_surat_individu[".NumberOfChars"] = 80; 
	$tdatainsert_surat_individu[".ShortName"] = "insert_surat_individu";
	$tdatainsert_surat_individu[".OwnerID"] = "";
	$tdatainsert_surat_individu[".OriginalTable"] = "surat_individu";

//	field labels
$fieldLabelsinsert_surat_individu = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinsert_surat_individu["English"] = array();
	$fieldToolTipsinsert_surat_individu["English"] = array();
	$fieldLabelsinsert_surat_individu["English"]["iid"] = "Iid";
	$fieldToolTipsinsert_surat_individu["English"]["iid"] = "";
	$fieldLabelsinsert_surat_individu["English"]["nama"] = "Nama";
	$fieldToolTipsinsert_surat_individu["English"]["nama"] = "";
	$fieldLabelsinsert_surat_individu["English"]["baid"] = "Bahagian";
	$fieldToolTipsinsert_surat_individu["English"]["baid"] = "";
	$fieldLabelsinsert_surat_individu["English"]["jaid"] = "Jawatan";
	$fieldToolTipsinsert_surat_individu["English"]["jaid"] = "";
	if (count($fieldToolTipsinsert_surat_individu["English"]))
		$tdatainsert_surat_individu[".isUseToolTips"] = true;
}
	
	
	$tdatainsert_surat_individu[".NCSearch"] = true;



$tdatainsert_surat_individu[".shortTableName"] = "insert_surat_individu";
$tdatainsert_surat_individu[".nSecOptions"] = 0;
$tdatainsert_surat_individu[".recsPerRowList"] = 1;
$tdatainsert_surat_individu[".mainTableOwnerID"] = "";
$tdatainsert_surat_individu[".moveNext"] = 1;
$tdatainsert_surat_individu[".nType"] = 1;

$tdatainsert_surat_individu[".strOriginalTableName"] = "surat_individu";




$tdatainsert_surat_individu[".showAddInPopup"] = false;

$tdatainsert_surat_individu[".showEditInPopup"] = false;

$tdatainsert_surat_individu[".showViewInPopup"] = false;

$tdatainsert_surat_individu[".fieldsForRegister"] = array();

$tdatainsert_surat_individu[".listAjax"] = false;

	$tdatainsert_surat_individu[".audit"] = false;

	$tdatainsert_surat_individu[".locking"] = false;

$tdatainsert_surat_individu[".listIcons"] = true;
$tdatainsert_surat_individu[".inlineAdd"] = true;




$tdatainsert_surat_individu[".showSimpleSearchOptions"] = false;

$tdatainsert_surat_individu[".showSearchPanel"] = true;

if (isMobile())
	$tdatainsert_surat_individu[".isUseAjaxSuggest"] = false;
else 
	$tdatainsert_surat_individu[".isUseAjaxSuggest"] = true;

$tdatainsert_surat_individu[".rowHighlite"] = true;

// button handlers file names
$tdatainsert_surat_individu[".isUsebuttonHandlers"] = true;
$tdatainsert_surat_individu[".isUsebuttonHandlers"] = true;

$tdatainsert_surat_individu[".addPageEvents"] = false;

// use datepicker for search panel
$tdatainsert_surat_individu[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatainsert_surat_individu[".isUseTimeForSearch"] = false;




$tdatainsert_surat_individu[".allSearchFields"] = array();

$tdatainsert_surat_individu[".allSearchFields"][] = "iid";
$tdatainsert_surat_individu[".allSearchFields"][] = "nama";
$tdatainsert_surat_individu[".allSearchFields"][] = "baid";
$tdatainsert_surat_individu[".allSearchFields"][] = "jaid";

$tdatainsert_surat_individu[".googleLikeFields"][] = "iid";
$tdatainsert_surat_individu[".googleLikeFields"][] = "nama";
$tdatainsert_surat_individu[".googleLikeFields"][] = "baid";
$tdatainsert_surat_individu[".googleLikeFields"][] = "jaid";


$tdatainsert_surat_individu[".advSearchFields"][] = "iid";
$tdatainsert_surat_individu[".advSearchFields"][] = "nama";
$tdatainsert_surat_individu[".advSearchFields"][] = "baid";
$tdatainsert_surat_individu[".advSearchFields"][] = "jaid";

$tdatainsert_surat_individu[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatainsert_surat_individu[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainsert_surat_individu[".strOrderBy"] = $tstrOrderBy;

$tdatainsert_surat_individu[".orderindexes"] = array();

$tdatainsert_surat_individu[".sqlHead"] = "SELECT iid,  nama,  baid,  jaid";
$tdatainsert_surat_individu[".sqlFrom"] = "FROM individu";
$tdatainsert_surat_individu[".sqlWhereExpr"] = "";
$tdatainsert_surat_individu[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainsert_surat_individu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainsert_surat_individu[".arrGroupsPerPage"] = $arrGPP;

$tableKeysinsert_surat_individu = array();
$tdatainsert_surat_individu[".Keys"] = $tableKeysinsert_surat_individu;

$tdatainsert_surat_individu[".listFields"] = array();
$tdatainsert_surat_individu[".listFields"][] = "nama";
$tdatainsert_surat_individu[".listFields"][] = "baid";
$tdatainsert_surat_individu[".listFields"][] = "jaid";
$tdatainsert_surat_individu[".listFields"][] = "iid";

$tdatainsert_surat_individu[".viewFields"] = array();

$tdatainsert_surat_individu[".addFields"] = array();

$tdatainsert_surat_individu[".inlineAddFields"] = array();
$tdatainsert_surat_individu[".inlineAddFields"][] = "nama";
$tdatainsert_surat_individu[".inlineAddFields"][] = "baid";
$tdatainsert_surat_individu[".inlineAddFields"][] = "jaid";
$tdatainsert_surat_individu[".inlineAddFields"][] = "iid";

$tdatainsert_surat_individu[".editFields"] = array();

$tdatainsert_surat_individu[".inlineEditFields"] = array();

$tdatainsert_surat_individu[".exportFields"] = array();

$tdatainsert_surat_individu[".printFields"] = array();

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
	
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "iid"; 
		$fdata["FullName"] = "iid";
	
		
		
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
	
		
		
	$tdatainsert_surat_individu["iid"] = $fdata;
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatainsert_surat_individu["nama"] = $fdata;
//	baid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "baid";
	$fdata["GoodName"] = "baid";
	$fdata["ownerTable"] = "individu";
	$fdata["Label"] = "Bahagian"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
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
	
		
		
	$tdatainsert_surat_individu["baid"] = $fdata;
//	jaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "jaid";
	$fdata["GoodName"] = "jaid";
	$fdata["ownerTable"] = "individu";
	$fdata["Label"] = "Jawatan"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
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
	
		
		
	$tdatainsert_surat_individu["jaid"] = $fdata;

	
$tables_data["insert surat_individu"]=&$tdatainsert_surat_individu;
$field_labels["insert_surat_individu"] = &$fieldLabelsinsert_surat_individu;
$fieldToolTips["insert surat_individu"] = &$fieldToolTipsinsert_surat_individu;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["insert surat_individu"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["insert surat_individu"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_insert_surat_individu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "iid,  nama,  baid,  jaid";
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
	"m_strName" => "baid",
	"m_strTable" => "individu"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "jaid",
	"m_strTable" => "individu"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "individu";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "iid";
$proto14["m_columns"][] = "nama";
$proto14["m_columns"][] = "baid";
$proto14["m_columns"][] = "jaid";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_alias"] = "";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = "0";
$proto15["m_inBrackets"] = "0";
$proto15["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_insert_surat_individu = createSqlQuery_insert_surat_individu();
				$tdatainsert_surat_individu[".sqlquery"] = $queryData_insert_surat_individu;
	
if(isset($tdatainsert_surat_individu["field2"])){
	$tdatainsert_surat_individu["field2"]["LookupTable"] = "carscars_view";
	$tdatainsert_surat_individu["field2"]["LookupOrderBy"] = "name";
	$tdatainsert_surat_individu["field2"]["LookupType"] = 4;
	$tdatainsert_surat_individu["field2"]["LinkField"] = "email";
	$tdatainsert_surat_individu["field2"]["DisplayField"] = "name";
	$tdatainsert_surat_individu[".hasCustomViewField"] = true;
}

include_once(getabspath("include/insert_surat_individu_events.php"));
$tableEvents["insert surat_individu"] = new eventclass_insert_surat_individu;
$tdatainsert_surat_individu[".hasEvents"] = true;

$cipherer = new RunnerCipherer("insert surat_individu");

?>