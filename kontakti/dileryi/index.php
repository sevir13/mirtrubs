<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Дилеры группы заводов " . $arSite['NAME']);
$APPLICATION->SetPageProperty("description", "Дилеры группы заводов " . $arSite['NAME']);
$APPLICATION->SetTitle("Дилеры");
?>

<div itemscope="" itemtype="https://schema.org/Article">
	<div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
		<meta itemprop="name" content='<?=$arSite['NAME']; ?>'>
		<meta itemprop="telephone" content="8 800 555 28 29">
		<meta itemprop="address" content="420087, Россия, Республика Татарстан, Казань, Родины, 10">
		<link itemprop="url" href="<?=$APPLICATION->GetCurPage(); ?>">
	</div>
	
	<?$APPLICATION->IncludeComponent(
		"bitrix:news",
		"dileryi",
		Array(
			"ADD_ELEMENT_CHAIN" => "Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"BROWSER_TITLE" => "-",
			"CACHE_FILTER" => "Y",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "3600",
			"CACHE_TYPE" => "A",
			"CATEGORY_CODE" => "CATEGORY",
			"CATEGORY_IBLOCK" => array(),
			"CATEGORY_ITEMS_COUNT" => "5",
			"CHECK_DATES" => "Y",
			"DETAIL_ACTIVE_DATE_FORMAT" => "",
			"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
			"DETAIL_DISPLAY_TOP_PAGER" => "Y",
			"DETAIL_FIELD_CODE" => array("",""),
			"DETAIL_PAGER_SHOW_ALL" => "Y",
			"DETAIL_PAGER_TEMPLATE" => "",
			"DETAIL_PAGER_TITLE" => "Страница",
			"DETAIL_PROPERTY_CODE" => array("TITLE","DESCRIPTION","KEYWORDS"),
			"DETAIL_SET_CANONICAL_URL" => "Y",
			"DISPLAY_AS_RATING" => "rating",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FILE_404" => "",
			"FILTER_FIELD_CODE" => array("",""),
			"FILTER_NAME" => "",
			"FILTER_PROPERTY_CODE" => array("",""),
			"FORUM_ID" => "",
			"GROUP_PERMISSIONS" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
			"IBLOCK_ID" => getIblockID("content", "dileryi"),
			"IBLOCK_TYPE" => "content",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"LIST_ACTIVE_DATE_FORMAT" => "",
			"LIST_FIELD_CODE" => array("",""),
			"LIST_PROPERTY_CODE" => array("",""),
			"MAX_VOTE" => "5",
			"MESSAGES_PER_PAGE" => "10",
			"MESSAGE_404" => "",
			"META_DESCRIPTION" => "-",
			"META_KEYWORDS" => "-",
			"NEWS_COUNT" => "20",
			"NUM_DAYS" => "30",
			"NUM_NEWS" => "20",
			"PAGER_BASE_LINK" => "",
			"PAGER_BASE_LINK_ENABLE" => "Y",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_PARAMS_NAME" => "arrPager",
			"PAGER_SHOW_ALL" => "Y",
			"PAGER_SHOW_ALWAYS" => "Y",
			"PAGER_TEMPLATE" => "",
			"PAGER_TITLE" => "Новости",
			"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
			"POST_FIRST_MESSAGE" => "Y",
			"PREVIEW_TRUNCATE_LEN" => "",
			"REVIEW_AJAX_POST" => "Y",
			"SEF_FOLDER" => "/kontakti/dileryi/",
			"SEF_MODE" => "Y",
			"SEF_URL_TEMPLATES" => Array("detail"=>"#ELEMENT_CODE#/","news"=>"","rss"=>"rss/","rss_section"=>"#SECTION_ID#/rss/","search"=>"search/","section"=>""),
			"SET_LAST_MODIFIED" => "Y",
			"SET_STATUS_404" => "Y",
			"SET_TITLE" => "Y",
			"SHARE_HANDLERS" => "",
			"SHARE_HIDE" => "Y",
			"SHARE_SHORTEN_URL_KEY" => "",
			"SHARE_SHORTEN_URL_LOGIN" => "",
			"SHARE_TEMPLATE" => "",
			"SHOW_404" => "Y",
			"SHOW_LINK_TO_FORUM" => "Y",
			"SORT_BY1" => "ID",
			"SORT_BY2" => "ID",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "Y",
			"URL_TEMPLATES_READ" => "",
			"USE_CAPTCHA" => "Y",
			"USE_CATEGORIES" => "Y",
			"USE_FILTER" => "Y",
			"USE_PERMISSIONS" => "N",
			"USE_RATING" => "Y",
			"USE_REVIEW" => "Y",
			"USE_RSS" => "Y",
			"USE_SEARCH" => "Y",
			"USE_SHARE" => "Y",
			"VOTE_NAMES" => array("0","1","2","3","4",""),
			"YANDEX" => "Y"
		)
	);?>
	
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>