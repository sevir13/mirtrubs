<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Полиэтиленовый сварочный аппарат для труб " . $arCity["UF_WHERE"]);
$APPLICATION->SetPageProperty("description", "Сварочный аппарат для сварки полиэтиленовых труб недорого. Сварочное оборудование для полиэтиленовых труб " . $arCity["UF_WHERE"]);
$APPLICATION->SetPageProperty("keywords", "полиэтиленовый сварочный аппарат, сварочные аппараты для полиэтиленовых труб, сварочный аппарат для сварки полиэтиленовых труб");
$APPLICATION->SetTitle("Сварочное оборудование");
?>


<?$APPLICATION->IncludeComponent("bitrix:news","welding",Array(
    "DISPLAY_DATE" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "SEF_MODE" => "Y",
    "AJAX_MODE" => "N",
    "IBLOCK_TYPE" => "products",
    "IBLOCK_ID" => getIblockID("products", "welding"),
    "NEWS_COUNT" => "20",
    "USE_SEARCH" => "Y",
    "USE_RSS" => "Y",
    "USE_RATING" => "Y",
    "USE_CATEGORIES" => "Y",
    "USE_REVIEW" => "Y",
    "USE_FILTER" => "Y",
    "SORT_BY1" => "ACTIVE_FROM",
    "SORT_ORDER1" => "ASC",
    "SORT_BY2" => "SORT",
    "SORT_ORDER2" => "ASC",
    "CHECK_DATES" => "Y",
    "PREVIEW_TRUNCATE_LEN" => "",
    "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
    "LIST_FIELD_CODE" => Array(),
    "LIST_PROPERTY_CODE" => Array("LONGTITLE"),
    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
    "DISPLAY_NAME" => "Y",
    "META_KEYWORDS" => "-",
    "META_DESCRIPTION" => "-",
    "BROWSER_TITLE" => "-",
    "DETAIL_SET_CANONICAL_URL" => "Y",
    "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
    "DETAIL_FIELD_CODE" => Array(),
    "DETAIL_PROPERTY_CODE" => Array("LONGTITLE"),
    "DETAIL_DISPLAY_TOP_PAGER" => "Y",
    "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
    "DETAIL_PAGER_TITLE" => "Страница",
    "DETAIL_PAGER_TEMPLATE" => "",
    "DETAIL_PAGER_SHOW_ALL" => "Y",
    "STRICT_SECTION_CHECK" => "Y",
    "SET_TITLE" => "Y",
    "ADD_SECTIONS_CHAIN" => "N",
    "ADD_ELEMENT_CHAIN" => "Y",
    "SET_LAST_MODIFIED" => "Y",
    "PAGER_BASE_LINK_ENABLE" => "Y",
    "SET_STATUS_404" => "Y",
    "SHOW_404" => "Y",
    "MESSAGE_404" => "",
    "PAGER_BASE_LINK" => "",
    "PAGER_PARAMS_NAME" => "arrPager",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "USE_PERMISSIONS" => "Y",
    "GROUP_PERMISSIONS" => Array("2"),
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "3600",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "DISPLAY_BOTTOM_PAGER" => "Y",
    "PAGER_TITLE" => "Новости",
    "PAGER_SHOW_ALWAYS" => "Y",
    "PAGER_TEMPLATE" => "news",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "Y",
    "FILTER_NAME" => "",
    "FILTER_FIELD_CODE" => Array(),
    "FILTER_PROPERTY_CODE" => Array(),
    "NUM_NEWS" => "20",
    "NUM_DAYS" => "30",
    "YANDEX" => "Y",
    "MAX_VOTE" => "5",
    "VOTE_NAMES" => Array("0", "1", "2", "3", "4"),
    "CATEGORY_IBLOCK" => Array(),
    "CATEGORY_CODE" => "CATEGORY",
    "CATEGORY_ITEMS_COUNT" => "5",
    "MESSAGES_PER_PAGE" => "10",
    "USE_CAPTCHA" => "Y",
    "REVIEW_AJAX_POST" => "Y",
    "PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
    "FORUM_ID" => "1",
    "URL_TEMPLATES_READ" => "",
    "SHOW_LINK_TO_FORUM" => "Y",
    "POST_FIRST_MESSAGE" => "Y",
    "SEF_FOLDER" => "/svarochnoe-oborudovanie/",
    "SEF_URL_TEMPLATES" => Array(
        "detail" => "#ELEMENT_CODE#/",
        "news" => "search/",
        "section" => "rss/",
    ),
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "AJAX_OPTION_HISTORY" => "N",
    "VARIABLE_ALIASES" => Array(
        "detail" => Array(),
        "news" => Array(),
        "section" => Array(),
    ),
    "USE_SHARE" => "Y",
    "SHARE_HIDE" => "Y",
    "SHARE_TEMPLATE" => "",
    "SHARE_HANDLERS" => array("delicious", "facebook", "lj", "twitter"),
    "SHARE_SHORTEN_URL_LOGIN" => "",
    "SHARE_SHORTEN_URL_KEY" => "",
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>