<?php

	/**
	 * Elgg CSS
	 * The standard CSS file
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 * 
	 * @uses $vars['wwwroot'] The site URL
	 */

?>

/* ***************************************
	RESET BASE STYLES
*************************************** */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-weight: inherit;
	font-style: inherit;
	font-size: 100%;
	font-family: inherit;
	vertical-align: baseline;
}
/* remember to define focus styles! */
:focus {
	outline: 0;
}
ol, ul {
	list-style: none;
}
/* tables still need 'cellspacing="0"' in the markup */
table {
	border-collapse: separate;
	border-spacing: 0;
}
caption, th, td {
	text-align: left;
	font-weight: normal;
	vertical-align: top;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: "";
}
blockquote, q {
	quotes: "" "";
}
.clearfloat { 
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}

/* ***************************************
	DEFAULTS
*************************************** */
body {
	text-align:left;
	margin:0 auto;
	padding:0;
	background: #4690d6;
	font: 75%/1.5  "Lucida Grande", "Lucida Sans", Verdana, sans-serif;
	color: #333333;
	background: url(<?php echo $vars['url']; ?>_graphics/page_back_linen.gif) repeat left top;
}
a {
	color: #4690d6;
	text-decoration: none;
	-moz-outline-style: none;
	outline: none;
}
a:visited {
	color: #0054a7;
}
a:hover {
	color: #0054a7;
	text-decoration: underline;
}
p {
	margin: 0px 0px 15px 0;
}
img {
	border: none;
}
ul {
	margin: 5px 0px 15px;
	padding-left: 20px;
}
ul li {
	margin: 0px;
}
ol {
	margin: 5px 0px 15px;
	padding-left: 20px;
}
ul li {
	margin: 0px;
}
form {
	margin: 0px;
	padding: 0px;
}
small {
	font-size: 90%;
}
h1, h2, h3, h4, h5, h6 {
	font-weight: bold;
	line-height: normal;
}
h1 { font-size: 1.8em; }
h2 { font-size: 1.5em; }
h3 { font-size: 1.2em; }
h4 { font-size: 1.0em; }
h5 { font-size: 0.9em; }
h6 { font-size: 0.8em; }

/* ***************************************
    PAGE LAYOUT - MAIN STRUCTURE
*************************************** */
#page_container {
	margin:0;
	padding:0;
	background: url(<?php echo $vars['url']; ?>_graphics/page_back_linen_shadow.gif) repeat-y center top;
}
#page_wrapper {
	width:998px;
	margin:0 auto;
	min-height: 300px;
	background: #f4f4f4;
	border-right: 1px solid #333333;
	border-bottom: 1px solid #333333;
}

#layout_header {
	text-align:left;
	position:relative;
	width:100%;
	height:67px;
	border-bottom:1px solid #4690d6;
	background:white;
}
#wrapper_header {
	margin:0;
	padding:10px 20px 20px 20px;
}
#layout_sidebar_left {
	width: 160px;
	float: left;
}
#wrapper_sidebar_left {
	margin:0;
	padding:20px 0 0 20px;
}

#wrapper_sidebar_left p {
	margin:0;
}

#layout_canvas {
	margin:20px 20px 20px 160px;
	min-height: 360px;
}

#layout_sidebar_right {
	width:250px; /* 260-10*/
	min-height: 260px;
	float:right;
	padding:0px 0px 20px 10px;
}
#wrapper_sidebar_right {
	margin:0;
}
#layout_sidebar_right_narrow {
	width:160px;
	min-height: 260px;
	float:right;
	padding:0px 0px 20px 10px;
}

#layout_maincontent {
    padding:0px 10px 20px 20px;
}
#wrapper_maincontent {
	margin:0;
	/* width:785px;*/
}
/* subclass for layout_maincontent when showing rhs sidebar */
.has_sidebar_right {
    margin:0 260px 0 0 !important;
}
.has_narrow_sidebar_right {
    margin:0 190px 0 0 !important;
}
/* IE6 fix */
* html #layout_maincontent { 
	height:360px;
}
/* 
#wrapper_sidebar_right .collapsable_box_content {
	border-left: 1px solid #cccccc;
	border-right: 1px solid #cccccc;
	border-bottom: 1px solid #cccccc;
}
#wrapper_sidebar_right .collapsable_box_header {
	border: 1px solid #cccccc;
}
*/
#wrapper_maincontent .collapsable_box_content  {
	margin:0;
	/* padding:0; */
}

#layout_spotlight {
	padding:0;
}
#wrapper_spotlight {
	margin:0;
	padding:0;
	height:auto;
}
#wrapper_spotlight .collapsable_box_content  {
	margin:0;
	padding:20px 20px 10px 20px;
	background: url(<?php echo $vars['url']; ?>_graphics/spotlight_back.gif) repeat-x left bottom;
	min-height:60px;
	border:none;
}
#layout_spotlight .collapsable_box_content p {
	padding:0;
}
#wrapper_spotlight .collapsable_box_header  {
	border-left: none;
	border-right: none;
}
#layout_footer {
	background: url(<?php echo $vars['url']; ?>_graphics/footer_back.gif) repeat-x left top;
	height:80px;
}
#layout_footer table {
   margin:0 0 0 20px;
}
#layout_footer a, #layout_footer p {
   color:white;
   margin:0;
}
#layout_footer .footer_toolbar_links {
	text-align:right;
	padding:15px 0 0 0;
	font-size:1.2em;
}
#layout_footer .footer_legal_links {
	text-align:right;
}

/* ***************************************
  WIDGET PICKER (PROFILE & DASHBOARD)
*************************************** */
#customise_editpanel {
	display:none;
	margin: -20px 0 20px 20px;
	padding:20px;
	background: #dedede;
}

/* Top area - instructions */
.customise_editpanel_instructions {
	width:510px;
	padding:0 0 10px 0;
}
.customise_editpanel_instructions h2 {
	padding:0 0 10px 0;
}
.customise_editpanel_instructions p {
	margin:0 0 5px 0;
	line-height: 1.4em;
}

/* RHS (widget gallery area) */
#customise_editpanel_rhs {
	float:right;
	width:230px;
	background:white;
}
#customise_editpanel #customise_editpanel_rhs h2 {
	color:#333333;
	font-size: 1.4em;
	margin:0;
	padding:6px;
}
#widget_picker_gallery {
	/* float:right;*/
	border-top:1px solid #cccccc;
	background:white;
	width:210px;
	height:350px;
	padding:10px;
	overflow:scroll;
	overflow-x:hidden;
}

/* main page widget area */
#customise_page_view {
	width:490px;
	padding:10px;
	margin:0 0 10px 0;
	background:white;
}
#customise_page_view h2 {
	border-top:1px solid #cccccc;
	border-right:1px solid #cccccc;
	border-left:1px solid #cccccc;
	margin:0;
	padding:5px;
	color: #0054a7;
	background: #f5f5f5;
	font-size:1.25em;
	line-height: 1.2em;
}
#customise_page_view h2.mainwidgets {
	width:255px;
}

#main_widgets {
	width:255px;
	margin:0 10px 0 0;
	padding:5px 5px 40px 5px;
	min-height: 190px;
	border:1px solid #cccccc;
}
#rightsidebar_widgets {
	width:200px;
	padding:5px 5px 40px 5px;
	min-height: 190px;
	border:1px solid #cccccc;
}

/* IE6 fix */
* html #main_widgets { 
	height: 190px;
}
* html #rightsidebar_widgets { 
	height: 190px;
}

#customise_editpanel table.draggable_widget {
	width:200px;
	background: #cccccc;
	margin: 10px 0 0 0;
	vertical-align:text-top;
	border:1px solid #cccccc;
}

#widget_picker_gallery table.draggable_widget {
	width:200px;
	background: #cccccc;
	margin: 10px 0 0 0;
}

/* take care of long widget names */
#customise_editpanel table.draggable_widget h3 {
	word-wrap:break-word;/* safari, webkit, ie */
	width:140px;
	line-height: 1.1em;
	overflow: hidden;/* ff */
	padding:4px;
}
#widget_picker_gallery table.draggable_widget h3 {
	word-wrap:break-word;
	width:140px;
	line-height: 1.1em;
	overflow: hidden;
	padding:4px;
}
#customise_editpanel img.drag_handle {
	cursor:move;
	padding-top: 4px;
}
#customise_editpanel img.remove_me {
	padding-top: 4px;
}
#customise_editpanel img.more_info {
	padding-top: 4px;
}
#widget_moreinfo {
	position:absolute;
	border:1px solid #333333;
	background:#e4ecf5;
	color:#333333;
	padding:5px;
	display:none;
	width: 200px;
}
/* droppable area hover class  */
.droppable-hover {
	/* outline: 2px dotted red; */
	background:#fdffc3;
}
/* target drop area class */
.placeholder {
	border:2px dashed #AAA;
	width:196px !important;
	margin: 10px 0 10px 0;
}
/* class of widget while dragging */
.ui-sortable-helper {
	background: #4690d6;
	color:white;
	padding: 4px;
	margin: 10px 0 0 0;
}
/* IE6 fix */
* html .placeholder { 
	margin: 0;
}
/* IE7 */
*:first-child+html .placeholder {
	margin: 0;
}
/* IE6 fix */
* html .ui-sortable-helper h3 { 
	padding: 4px;
}
* html .ui-sortable-helper img.drag_handle, * html .ui-sortable-helper img.remove_me, * html .ui-sortable-helper img.more_info {
	padding-top: 4px;
}
/* IE7 */
*:first-child+html .ui-sortable-helper h3 {
	padding: 4px;
}
*:first-child+html .ui-sortable-helper img.drag_handle, *:first-child+html .ui-sortable-helper img.remove_me, *:first-child+html .ui-sortable-helper img.more_info {
	padding-top: 4px;
}



/* ***************************************
  TOPMENU (IN HEADER)
*************************************** */
#topmenu {
    position:absolute;
    top:10px;
    right:20px;
    width: 700px;
    height:47px;
    text-align: right;
}
#topmenu li {
    display:inline;
    list-style:none;
}
#topmenu li a {
    color:#4690d6;
    margin:0 10px 0 10px;
}
#topmenu li a:hover {
    color:#000000;
}
#topmenu .usericon {
	float:right;
}

/* ***************************************
  COLLAPSABLE BOXES
*************************************** */
/* open 'customise page' panel button */
a.toggle_customise_edit_panel { 
	float:right;
	color: #4690d6;
	background: #f5f5f5;
	border:1px solid #cccccc;
	padding: 5px 10px 5px 10px;
	margin:0 0 20px 0;
}
a.toggle_customise_edit_panel:hover { 
	color: #ffffff;
	background: #0054a7;
	text-decoration:none;
}

.collapsable_box {
	margin: 0 0 20px 0;
	background: white;
	height:auto;
}
/* IE6 fix */
* html .collapsable_box  { 
	height:10px;
}
.collapsable_box_header {
	color: #4690d6;
	background: #f5f5f5;
	border-top:2px solid #4690d6;
	padding: 5px 10px 5px 10px;
	margin:0;
	
	border-left: 1px solid #cccccc;
	border-right: 1px solid #cccccc;
	border-bottom: 1px solid #cccccc;
}
.collapsable_box_content {
	padding: 10px;
	margin:0;
	height:auto;
	/* border-left:2px solid white;
	border-right:2px solid white;
	border-bottom:2px solid white; */
	
	border-left: 1px solid #cccccc;
	border-right: 1px solid #cccccc;
	border-bottom: 1px solid #cccccc;
}
.collapsable_box_editpanel {
	display: none;
	background: #dedede;
	padding:5px 10px 5px 10px;
	font-size: 9px;
}
.collapsable_box_header a.toggle_box_contents {
	color: #4690d6;
	cursor:pointer;
	font-size:16px;
	font-weight: bold;
	text-decoration:none;
	float:right;
	margin: 0;
	margin-top: -4px;
}
.collapsable_box_header a.toggle_box_edit_panel {
	color: #4690d6;
	cursor:pointer;
	font-size:9px;
	text-transform: uppercase;
	text-decoration:none;
	font-weight: normal;
	float:right;
	margin: 3px 10px 0 0;
}
/* used for collapsing a content box */
.display_none {
	display:none;
}
/* used on spotlight box - to cancel default box margin */
.no_space_after {
	margin: 0 0 0 0;
}

/* ***************************************
  System messages
*************************************** */
.messages {
    border:1px solid #D3322A;
    background:#F7DAD8;
    color:#000000;
    padding:3px 10px 3px 10px;
    margin:20px 20px 0px 180px;
    z-index: 99999;
    position:absolute;
    width:776px;
}
/* IE6 fix */
* html .messages { 
	margin:20px 20px 0px 20px;
}
/* IE7 */
*:first-child+html .messages {
	margin:20px 20px 0px 20px;
}

/* ***************************************
	ELGG TOOLBAR
*************************************** */
.elggtoolbar .elggtoolbar_header {
	color: #4690d6;
	background: #f5f5f5;
	border-top:2px solid #333333;
	border-bottom:1px solid #999999;
	padding: 5px 10px 5px 10px;
	margin:0;
}

.elggtoolbar {
	border-left:2px solid #333333;
	border-right:2px solid #333333;
	border-bottom:2px solid #333333;
	margin: 0 0 20px 0;
}

.elggtoolbar ul.drawers {
	width: 136px;
	margin: 0;
	padding: 0;
	
}
.elggtoolbar li.drawer ul li {
	line-height: 1.2em;
	margin: 0;
	padding: 3px 0 3px 0;
}
.elggtoolbar ul {
	list-style: none;
	margin: 0;
	padding: 3px 3px 3px 10px;
}
.elggtoolbar li {
	background: #f4f4f4;
}
.elggtoolbar li a {
	text-decoration: none;
	color: #4690d6;
	line-height:0.5em;
	padding-left:5px;
}
.elggtoolbar li a:hover {
	text-decoration: underline;
	color: #0054a7;
}
.elggtoolbar h2.drawer-handle {
	margin: 0;
	padding: 1px 1px 1px 10px;
	background-color: white;
	border-top: 1px solid #999999;
	cursor: pointer;
	font-size: 100%;
	font-weight: normal;
	line-height: 2em;
}
.elggtoolbar h2.drawer-handle:hover {
	background-color: #cccccc;
}
.elggtoolbar h2.drawer-handle.open {
	color:#000000;
	font-weight: bold;
	background: #cccccc;
	border-bottom: none;
}

/* ***************************************
	GENERAL FORM ELEMENTS
*************************************** */
label {
	font-weight: bold;
	color:#333333;
	font-size: 140%;
}
input {
	font: 120% Arial, Helvetica, sans-serif;
	padding: 5px;
	border: 1px solid #cccccc;
	color:#666666;
}
textarea {
	font: 120% Arial, Helvetica, sans-serif;
	border: solid 1px #cccccc;
	padding: 5px;
	color:#666666;
}
textarea:focus, input[type="text"]:focus {
	border: solid 1px #4690d6;
	background: #e4ecf5;
	color:#333333;
}

.submit_button {
	font: 12px/100% Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #ffffff;
	background:#4690d6;
	border: 1px solid #4690d6;
	-webkit-border-radius: 3px; 
	-moz-border-radius: 3px;
	width: auto;
	height: 25px;
	padding: 2px 6px 2px 6px;
	margin:10px 0 10px 0;
	cursor: pointer;
}
.submit_button:hover, input[type="submit"]:hover {
	background: #0054a7;
}

input[type="submit"] {
	font: 12px/100% Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #ffffff;
	background:#4690d6;
	border: 1px solid #4690d6;
	-webkit-border-radius: 3px; 
	-moz-border-radius: 3px;
	width: auto;
	height: 25px;
	padding: 2px 6px 2px 6px;
	margin:10px 0 10px 0;
	cursor: pointer;
}

.cancel_button {
	font: 12px/100% Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #999999;
	background:#dddddd;
	border: 1px solid #999999;
	-webkit-border-radius: 3px; 
	-moz-border-radius: 3px;
	width: auto;
	height: 25px;
	padding: 2px 6px 2px 6px;
	margin:10px 0 10px 10px;
	cursor: pointer;
}
.cancel_button:hover {
	background: #cccccc;
}

.input-text,
.input-tags,
.input-url,
.input-textarea {
	width:100%;
}

.input-textarea {
	height: 200px;
}

/* ***************************************
	LOGIN / REGISTER
*************************************** */
#login-box {
    text-align:left;
    border:1px solid #ddd;
    width:300px;
    padding:10px;
    background: #ffffff;
    margin-left: 20px;
}

#register-box {
    text-align:left;
    border:1px solid #ddd;
    width:300px;
    padding:10px;
    background: #ffffff;
    margin-left: 40px;
}

/* ***************************************
	MAIN CONTENT ELEMENTS
*************************************** */
.elggtoolbar .elggtoolbar_header h1,
.collapsable_box_header h1 {
	/*color: #4690d6;*/
	color: #0054a7;
	font-size:1.25em;
	line-height: 1.2em;
}

.logo {
	margin-left:21px;
	margin-top:7px;
}
#header_search {
	margin-right:50px;
}
#searchform input.search_input {
	-webkit-border-radius: 3px; 
	-moz-border-radius: 3px;
	background-color:#FFFFFF;
	border:1px solid #BBBBBB;
	color:#999999;
	font-size:13px;
	font-weight:bold;
	margin:0pt;
	padding:2px;
	width:180px;
}
#searchform input.search_submit_button {
	-webkit-border-radius: 3px; 
	-moz-border-radius: 3px;
	color:#ffffff;
	background: #cccccc;
	border:none;
	font-size:12px;
	font-weight:bold;
	margin:0px;
	padding:0px;
	width:auto;
	height:20px;
	cursor:pointer;
}
#searchform input.search_submit_button:hover {
	color:#000000;
}
.widget_status_statusmessage {
	font-size:1.2em;
	line-height:1.2em;
	font-weight:bold;
	color:#666666;
	background:#fdffc3;
	padding:3px;
}

.widget_status_messagetimestamp {
	font-size:0.9em;
	color:#999999;
	margin:0;
}

/* ***************************************
	PROFILE
*************************************** */
#profile_info {
	margin:0 0 20px 0;
	padding:10px;
	border-bottom:1px solid #cccccc;
	border-right:1px solid #cccccc;
	background: white;
}
#profile_menu_wrapper {
	margin:10px 0 10px 0;
}
#profile_menu_wrapper p {
	border-bottom:1px solid #cccccc;
}
#profile_menu_wrapper p:first-child {
	border-top:1px solid #cccccc;
}
#profile_menu_wrapper a {
	display:block;
	padding:0 0 0 3px;
}
#profile_menu_wrapper a:hover {
	color:#ffffff;
	background:#4690d6;
	text-decoration:none;
}
p.user_menu_friends, p.user_menu_profile, 
p.user_menu_removefriend, 
p.user_menu_friends_of {
	margin:0;
}
#profile_info_column_left {
	float:left;
	width:200px;
	padding: 0 20px 0 0;
}
#profile_info_column_right {
	float:left;
	width:260px;
}
#profile_info_column_right p {
	margin:7px 0 7px 0;
	line-height:1.3em;
}
#profile_info_wide p {
	margin:7px 0 7px 0;
	line-height:1.4em;
}
#profile_info_wide .profile_info_edit_buttons {
	margin:0;
}


/* ***************************************
	RIVER
*************************************** */
.river_item p {
	margin:0;
	padding:0 0 0 20px;
}
.river_item {
	border-bottom:1px solid #dddddd;
	padding:2px 0 2px 0;
}
.river_item_time {
	font-size:smaller;
	color:#666666;
}
.river_user_login {
	background: url(<?php echo $vars['url']; ?>_graphics/dummy_river_icon.gif) no-repeat left top;
}
.river_user_update {
	background: url(<?php echo $vars['url']; ?>_graphics/dummy_river_icon.gif) no-repeat left top;
}
.river_annotate {
	background: url(<?php echo $vars['url']; ?>_graphics/dummy_river_icon.gif) no-repeat left top;
}
.river_create {
	background: url(<?php echo $vars['url']; ?>_graphics/dummy_river_icon.gif) no-repeat left top;
}


/* ***************************************
	COMMENTS
*************************************** */

.generic_comment {
	margin-bottom: 50px;
	padding-bottom: 10px;
}
.generic_comment_icon {
	position: absolute;
}
.generic_comment_details {
	margin-left: 60px;
	border: 0px;
	border-bottom: 1px;
	border-style: solid;
}
.generic_comment_owner {
	font-size: 80%;
	margin: 0px;
}


/* ***************************************
	SEARCH LISTINGS	
*************************************** */

.search_listing {
	display: block;
	background-color: #eee;
	padding: 5px;
	margin-bottom: 10px;
}

.search_listing_icon {
	position: absolute;
}

.search_listing_icon img {
	width: 40px;
}

.search_listing_icon .avatar_menu_button img {
	width: 15px;
}
	
.search_listing_info {
	margin-left: 50px;
	height: 40px;
}

.search_listing_info p {
	margin:0 0 3px 0;
	line-height:1.2em;
}

.search_gallery_item {
	border:1px dotted silver;
    background-color: white;
    width: 210px;
    height: 200px;
}

.search_gallery_item .search_listing {
	background: none;
	text-align: center;
}

.search_gallery_item .search_listing_icon {
	position: absolute;
	margin-bottom: 20px;
}

.search_gallery_item .search_listing_info {
	margin: 5px;
}

.search_gallery_item .search_listing_info p {
	margin: 5px;
	margin-bottom: 10px;
}
	

/* ***************************************
	STATUS
*************************************** */
.collapsable_box_editpanel .textarea-status {
	font-size: 1.6em;
	font-family:Arial,Helvetica,sans-serif;
	width:94%;
}
/* friends status on 'friends of' page */
.friends_status {
	float:right;
	width:500px;
	text-align:right;
	margin: 0 4px 0 0;
}
.status_timestamp {
	color:#666666;	
}

/* ***************************************
	SPOTLIGHT
*************************************** */
#wrapper_spotlight #spotlight_table h2 {
	color:#4690d6;
	font-size:1.25em;
	line-height:1.2em;
}
#wrapper_spotlight #spotlight_table li {
	list-style: square;
	line-height: 1.2em;
	margin:5px 20px 5px 0;
}

/* ***************************************
	END
*************************************** */

.page_title {
	padding:0px 10px 20px 0px;
}
	
#forums, #forum_topics, #topic_posts {
	background:white;
}	
	
	
	
	