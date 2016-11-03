<?php
require_once(getabspath("classes/cipherer.php"));
$tdatainsert_penerima = array();
	$tdatainsert_penerima[".NumberOfChars"] = 80; 
	$tdatainsert_penerima[".ShortName"] = "insert_penerima";
	$tdatainsert_penerima[".OwnerID"] = "";
	$tdatainsert_penerima[".OriginalTable"] = "penerima";

//	field labels
$fieldLabelsinsert_penerima = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinsert_penerima["English"] = array();
	$fieldToolTipsinsert_penerima["English"] = array();
	$fieldLabelsinsert_penerima["English"]["peid"] = "Peid";
	$fieldToolTipsinsert_penerima["English"]["peid"] = "";
	$fieldLabelsinsert_penerima["English"]["jenis"] = "Jenis";
	$fieldToolTipsinsert_penerima["English"]["jenis"] = "";
	$fieldLabelsinsert_penerima["English"]["bahagian"] = "Bahagian";
	$fieldToolTipsinsert_penerima["English"]["bahagian"] = "";
	$fieldLabelsinsert_penerima["English"]["jawatan"] = "Jawatan";
	$fieldToolTipsinsert_penerima["English"]["jawatan"] = "";
	$fieldLabelsinsert_penerima["English"]["individu"] = "Nama Individu";
	$fieldToolTipsinsert_penerima["English"]["individu"] = "";
	$fieldLabelsinsert_penerima["English"]["sid"] = "Sid";
	$fieldToolTipsinsert_penerima["English"]["sid"] = "";
	if (count($fieldToolTipsinsert_penerima["English"]))
		$tdatainsert_penerima[".isUseToolTips"] = true;
}
	
	
	$tdatainsert_penerima[".NCSearch"] = true;



$tdatainsert_penerima[".shortTableName"] = "insert_penerima";
$tdatainsert_penerima[".nSecOptions"] = 0;
$tdatainsert_penerima[".recsPerRowList"] = 1;
$tdatainsert_penerima[".mainTableOwnerID"] = "";
$tdatainsert_penerima[".moveNext"] = 1;
$tdatainsert_penerima[".nType"] = 1;

$tdatainsert_penerima[".strOriginalTableName"] = "penerima";




$tdatainsert_penerima[".showAddInPopup"] = false;

$tdatainsert_penerima[".showEditInPopup"] = false;

$tdatainsert_penerima[".showViewInPopup"] = false;

$tdatainsert_penerima[".fieldsForRegister"] = array();

$tdatainsert_penerima[".listAjax"] = false;

	$tdatainsert_penerima[".audit"] = false;

	$tdatainsert_penerima[".locking"] = false;

$tdatainsert_penerima[".listIcons"] = true;
$tdatainsert_penerima[".inlineEdit"] = true;
$tdatainsert_penerima[".inlineAdd"] = true;
$tdatainsert_penerima[".view"] = true;




$tdatainsert_penerima[".showSimpleSearchOptions"] = false;

$tdatainsert_penerima[".showSearchPanel"] = true;

if (isMobile())
	$tdatainsert_penerima[".isUseAjaxSuggest"] = false;
else 
	$tdatainsert_penerima[".isUseAjaxSuggest"] = true;

$tdatainsert_penerima[".rowHighlite"] = true;

// button handlers file names
$tdatainsert_penerima[".isUsebuttonHandlers"] = true;
$tdatainsert_penerima[".isUsebuttonHandlers"] = true;

$tdatainsert_penerima[".addPageEvents"] = false;

// use datepicker for search panel
$tdatainsert_penerima[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatainsert_penerima[".isUseTimeForSearch"] = false;




$tdatainsert_penerima[".allSearchFields"] = array();

$tdatainsert_penerima[".allSearchFields"][] = "jenis";
$tdatainsert_penerima[".allSearchFields"][] = "bahagian";
$tdatainsert_penerima[".allSearchFields"][] = "jawatan";
$tdatainsert_penerima[".allSearchFields"][] = "individu";

$tdatainsert_penerima[".googleLikeFields"][] = "peid";
$tdatainsert_penerima[".googleLikeFields"][] = "jenis";
$tdatainsert_penerima[".googleLikeFields"][] = "bahagian";
$tdatainsert_penerima[".googleLikeFields"][] = "jawatan";
$tdatainsert_penerima[".googleLikeFields"][] = "individu";
$tdatainsert_penerima[".googleLikeFields"][] = "sid";


$tdatainsert_penerima[".advSearchFields"][] = "jenis";
$tdatainsert_penerima[".advSearchFields"][] = "bahagian";
$tdatainsert_penerima[".advSearchFields"][] = "jawatan";
$tdatainsert_penerima[".advSearchFields"][] = "individu";

$tdatainsert_penerima[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatainsert_penerima[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainsert_penerima[".strOrderBy"] = $tstrOrderBy;

$tdatainsert_penerima[".orderindexes"] = array();

$tdatainsert_penerima[".sqlHead"] = "SELECT peid,  jenis,  bahagian,  jawatan,  individu,  sid";
$tdatainsert_penerima[".sqlFrom"] = "FROM penerima";
$tdatainsert_penerima[".sqlWhereExpr"] = "";
$tdatainsert_penerima[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainsert_penerima[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainsert_penerima[".arrGroupsPerPage"] = $arrGPP;

$tableKeysinsert_penerima = array();
$tableKeysinsert_penerima[] = "peid";
$tdatainsert_penerima[".Keys"] = $tableKeysinsert_penerima;

$tdatainsert_penerima[".listFields"] = array();
$tdatainsert_penerima[".listFields"][] = "jenis";
$tdatainsert_penerima[".listFields"][] = "bahagian";
$tdatainsert_penerima[".listFields"][] = "jawatan";
$tdatainsert_penerima[".listFields"][] = "individu";

$tdatainsert_penerima[".viewFields"] = array();
$tdatainsert_penerima[".viewFields"][] = "jenis";
$tdatainsert_penerima[".viewFields"][] = "bahagian";
$tdatainsert_penerima[".viewFields"][] = "jawatan";
$tdatainsert_penerima[".viewFields"][] = "individu";

$tdatainsert_penerima[".addFields"] = array();

$tdatainsert_penerima[".inlineAddFields"] = array();

$tdatainsert_penerima[".editFields"] = array();

$tdatainsert_penerima[".inlineEditFields"] = array();

$tdatainsert_penerima[".exportFields"] = array();

$tdatainsert_penerima[".printFields"] = array();

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
	
		
		
	$tdatainsert_penerima["peid"] = $fdata;
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
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatainsert_penerima["jenis"] = $fdata;
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
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatainsert_penerima["bahagian"] = $fdata;
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
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatainsert_penerima["jawatan"] = $fdata;
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
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatainsert_penerima["individu"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "penerima";
	$fdata["Label"] = "Sid"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sid"; 
		$fdata["FullName"] = "sid";
	
		
		
				
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
	
		
		
	$tdatainsert_penerima["sid"] = $fdata;

	
$tables_data["insert penerima"]=&$tdatainsert_penerima;
$field_labels["insert_penerima"] = &$fieldLabelsinsert_penerima;
$fieldToolTips["insert penerima"] = &$fieldToolTipsinsert_penerima;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["insert penerima"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["insert penerima"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_insert_penerima()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "peid,  jenis,  bahagian,  jawatan,  individu,  sid";
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
$queryData_insert_penerima = createSqlQuery_insert_penerima();
						$tdatainsert_penerima[".sqlquery"] = $queryData_insert_penerima;
	
if(isset($tdatainsert_penerima["field2"])){
	$tdatainsert_penerima["field2"]["LookupTable"] = "carscars_view";
	$tdatainsert_penerima["field2"]["LookupOrderBy"] = "name";
	$tdatainsert_penerima["field2"]["LookupType"] = 4;
	$tdatainsert_penerima["field2"]["LinkField"] = "email";
	$tdatainsert_penerima["field2"]["DisplayField"] = "name";
	$tdatainsert_penerima[".hasCustomViewField"] = true;
}

include_once(getabspath("include/insert_penerima_events.php"));
$tableEvents["insert penerima"] = new eventclass_insert_penerima;
$tdatainsert_penerima[".hasEvents"] = true;

$cipherer = new RunnerCipherer("insert penerima");

?>