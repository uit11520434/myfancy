<?php
header('Content-type: text/css');
include("../../include/config.php");
$iurl = $config['adminurl']."/images";
?>
.nav-bar
{
    border-top:1px solid #2d444f;    border-bottom:1px solid #2d444f;    background:url(<?php echo $iurl;?>/nav1_bg.gif) repeat-x 0 100% #666e73; padding:0 30px
}
#nav
{
float:left
}
 #nav li
{
 list-style:none; position:relative; text-align:left
}
#nav li.over
{
z-index:99
}
#nav li.active
{
z-index:100
}
#nav a,#nav a:hover
{
 display:block; text-decoration:none
}
#nav span
{
display:block
}
#nav a
{
line-height:1.3em
}
#nav li
{
    float:left;    background:url(<?php echo $iurl;?>/nav1_sep.gif) no-repeat 100% 0
}
#nav li.active
{
    margin-left:-1px;    background:url(<?php echo $iurl;?>/nav1_active.gif) no-repeat;    color:#fff;    font-weight:bold
}
#nav li.active em
{
    display:block;    position:absolute;    top:0;    right:-1px;    width:3px;    height:27px;    background:url(<?php echo $iurl;?>/nav1_active.gif) no-repeat 100% 0
}
#nav a
{
 float:left; padding:0 14px; color:#fff; line-height:27px
}
#nav li.over a
{
color:#d6e2e5
}
#nav ul li,#nav ul li.active
{
 float:none; height:auto; background:none; margin:0
}
#nav ul a,#nav ul a:hover
{
 float:none; padding:0; background:none; line-height:1.3em
}
#nav ul li.over a,#nav ul li.over a:hover#nav ul a,#nav li.active li
{
font-weight:normal
}
#nav ul
{
 position:absolute; width:189px; top:34px; left:-10000px; margin-top:-7px; padding-bottom:3px; padding-top:1px; border-top:1px solid #2d444f
}
#nav ul ul 
{
 border-top:none
}
#nav li.over ul
{
left:-1px
}
#nav li.over ul ul
{
left:-10000px
}
#nav li.over ul li.over ul
{
left:100px
}
#nav ul li
{
    background:url(<?php echo $iurl;?>/nav2_li_bg.png) repeat-y;    padding:0 2px
}
#nav ul li a:hover
{
    background:#d0dfe2
}
#nav li.over ul a,#nav ul li.active a,#nav ul li a,#nav ul li a:hover
{
color:#2F2F2F
}
#nav ul span,#nav ul li.last li span
{
    padding:5px 15px;    background:url(<?php echo $iurl;?>/nav2_link_bg.gif) repeat-x 0 100%
}
#nav ul li.last span,#nav ul li.last li.last span
{
    background:none
}
#nav ul li.last
{
    background:url(<?php echo $iurl;?>/nav2_last_li_bg.png) no-repeat 0 100%;    padding-bottom:3px
}
#nav ul li.parent a,#nav ul ul li.parent a
{
    background-image:url(<?php echo $iurl;?>/nav2_parent_arrow.gif); background-position:right bottom; background-repeat:no-repeat
}
#nav li.parent a,#nav li.parent li.parent a,#nav li.parent li.parent li.parent a
{
cursor:default
}
#nav li.parent li a,#nav li.parent li.parent li a,#nav li.parent li.parent li.parent li a
{
cursor:pointer
}
#nav ul ul ul
{
left:-10000px
}
#nav li.over ul li.over ul ul
{
left:-10000px
}
#nav li.over ul li.over ul li.over ul
{
left:100px
}
#nav ul ul
{
    background:url(<?php echo $iurl;?>/nav3_bg.png) no-repeat;    padding-top:2px;    left:100px;    top:13px
}
#nav ul li.parent li a
{
    background-image:none
}
#nav ul li.parent li li a
{
    background-image:none
}
#nav ul ul li.parent a
{
    background-image:url(<?php echo $iurl;?>/nav2_parent_arrow.gif); background-position:right bottom; background-repeat:no-repeat
}
.nav-bar:after
{
 content:"."; display:block; clear:both; height:0; font-size:0; line-height:0em; overflow:hidden
}
#nav iframe
{
position:absolute;left:0px;top:-1px;z-index:-1;background:red;filter:progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)
}
