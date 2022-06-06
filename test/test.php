<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="NOINDEX, NOFOLLOW">
    <meta name="robots" content="NONE">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
    <title>勤務の入力</title>
    <script type="text/javascript" charset="Shift_JIS">
        <!--
        var srw = srw || {}
        //
        -->
    </script>
    <script type="text/javascript" charset="Shift_JIS">
        <!--
        srw.loader = {
            list: [],
            handlers: []
        };
        var requirejs = {
            charset: 'Shift_JIS',
            urlArgs: '38991900'
        };
        //
        -->
    </script>
    <script language="JavaScript" type="text/javascript" charset="Shift_JIS">
        <!--
        var scrlx = 0;
        var scrly = 0;

        function Pop(aURL, aTitle, aWidth, aHeight, aNo, aWin) {
            var Param = 'width=' + aWidth + ',height=' + aHeight + ',scrollbars = 1,resizable=1';
            var localURL = aURL;
            if (!aWin || !check_poptype()) {
                var winname = aTitle + aNo;
                var pwin = window.open(localURL, winname, Param);
            } else {
                var pwin = window.open(localURL, '', Param);
            }
        }
        -->
    </script>
    <script language="JavaScript" src="../scripts/calendar.js" charset="Shift_JIS">
        <!--
        //
        -->
    </script>
    <script language="JavaScript" src="../scripts/srw_tooltip.js" charset="Shift_JIS">
        <!--
        //
        -->
    </script>
    <script language="JavaScript" src="../scripts/srw_clockpick.js" charset="Shift_JIS">
        <!--
        //
        -->
    </script>
    <script language="JavaScript" src="../scripts/srw_daily_data_display.js" charset="Shift_JIS">
        <!--
        //
        -->
    </script>
    <script language="JavaScript" src="../scripts/reauth/reauth.js" charset="Shift_JIS">
        <!--
        //
        -->
    </script>
    <script language="JavaScript" src="../scripts/jquery-1.3.2.js" charset="Shift_JIS">
        <!--
        //
        -->
    </script>
    <SCRIPT type="text/javascript" charset="Shift_JIS">
        jQuery.noConflict();
    </SCRIPT>
    <script language="JavaScript" src="../scripts/reauth/reauthBlockUI.js" charset="Shift_JIS">
        <!--
        //
        -->
    </script>
    <script language="JavaScript" src="../scripts/jquery.blockUI.js" charset="Shift_JIS">
        <!--
        //
        -->
    </script>
    <SCRIPT type='text/javascript' charset="Shift_JIS">
        jQuery.noConflict();
    </SCRIPT>
    <!--jQueryUI Dialog Modal Overlay Fix for Firefox-->
    <style type="text/css">
        @-moz-document url-prefix() {
            .ui-widget-overlay {
                position: fixed !important;
            }
        }
    </style>
    <!--jQueryUI Dialog Modal Overlay Fix for Firefox-->
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" href="../scripts/srw_jquery-ui-1.8.css?38991900" type="text/css" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" href="../scripts/srw_tooltip.css?38991900" type="text/css" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" href="../scripts/srw_daily_data_display.css?38991900" type="text/css" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" href="../scripts/srw_rttl_tracer.css?38991900" type="text/css" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" href="../scripts/srw_vc_window.css?38991900" type="text/css" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" href="../scripts/srw_extra_info.css?38991900" type="text/css" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" href="../scripts/srw_octave.css?38991900" type="text/css" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" href="../scripts/kinmu_input.css?38991900" type="text/css" />
    <script type="text/javascript" charset="Shift_JIS">
        <!--
        showLinkBox1 = false;
        showLinkBox2 = false;

        function omovLink1() {
            sp = document.getElementById('sp_link1');
            sp.style.backgroundColor = 'navy';
            sp.style.color = 'snow';
            sp.style.cursor = 'hand';
        }

        function omotLink1() {
            sp = document.getElementById('sp_link1');
            sp.style.backgroundColor = 'transparent';
            sp.style.color = 'navy';
        }

        function toggleShowLinkBox1() {
            showLinkBox1 = !showLinkBox1;
            var display;
            var mark;
            if (showLinkBox1) {
                if (showLinkBox2) {
                    toggleShowLinkBox2();
                }
                display = "block";
                mark = "▼";
            } else {
                display = "none";
                mark = "━";
            }
            div = document.getElementById('div_linkbox1');
            div.style.position = "absolute";
            div.style.backgroundColor = "white";
            div.style.display = display;
            partition_div1 = document.getElementById('link_box_partition_div1');
            partition_div1.style.height = div.clientHeight;
            partition_div1.style.width = div.clientWidth;
            partition_div1.style.display = display;
            partition_iframe1 = document.getElementById('link_box_partition_iframe1');
            partition_iframe1.style.height = div.clientHeight;
            partition_iframe1.style.width = div.clientWidth;
            partition_iframe1.style.display = display;
            document.getElementById('sp_mark_link1').innerHTML = mark;
        }

        function omovLink2() {
            sp = document.getElementById('sp_link2');
            sp.style.backgroundColor = 'navy';
            sp.style.color = 'snow';
            sp.style.cursor = 'hand';
        }

        function omotLink2() {
            sp = document.getElementById('sp_link2');
            sp.style.backgroundColor = 'transparent';
            sp.style.color = 'navy';
        }

        function toggleShowLinkBox2() {
            showLinkBox2 = !showLinkBox2;
            var display;
            var mark;
            if (showLinkBox2) {
                if (showLinkBox1) {
                    toggleShowLinkBox1();
                }
                display = "block";
                mark = "▼";
            } else {
                display = "none";
                mark = "━";
            }
            div = document.getElementById('div_linkbox2');
            div.style.position = "absolute";
            div.style.backgroundColor = "white";
            div.style.display = display;
            partition_div2 = document.getElementById('link_box_partition_div2');
            partition_div2.style.height = div.clientHeight;
            partition_div2.style.width = div.clientWidth;
            partition_div2.style.display = display;
            partition_iframe2 = document.getElementById('link_box_partition_iframe2');
            partition_iframe2.style.height = div.clientHeight;
            partition_iframe2.style.width = div.clientWidth;
            partition_iframe2.style.display = display;
            document.getElementById('sp_mark_link2').innerHTML = mark
        };
        //
        -->
    </script>
    <!-- NoticeBoxCss -->

    <style type="text/css">
        <!--
        .notice_box_area_class {
            vertical-align: top;
            boder-color: #000000
        }

        .001 {
            background-color: #ffffff;
            color: #FF0000;
            font-size: small;
            font-weight: normal;
            font-style: normal;
            text-align: left;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-top-color: #808080;
            border-right-color: #808080;
            border-bottom-color: #808080;
            border-left-color: #808080;
        }

        .002 {
            background-color: #FFFF00;
            color: #000000;
            font-size: medium;
            font-weight: normal;
            font-style: normal;
            text-align: left;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-top-color: #808080;
            border-right-color: #808080;
            border-bottom-color: #808080;
            border-left-color: #808080;
        }

        .003 {
            background-color: #FF80FF;
            color: #000000;
            font-size: medium;
            font-weight: normal;
            font-style: normal;
            text-align: left;
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
            border-top-color: #808080;
            border-right-color: #808080;
            border-bottom-color: #808080;
            border-left-color: #808080;
        }
        -->
        
    </style>

    <!-- NoticeBoxCss End-->

    <link rel="stylesheet" href="../navigation.css?38991900" type="text/css" />
    <link rel="stylesheet" href="../cssdir/cws30/style30.css?38991900" type="text/css" />
</head>

<body onLoad="moveScrolPos();" bgcolor="#FFFFFF" background="../images/bg3.gif" text="#000000" link="#000099" vlink="#000066" alink="#336633">
    <div id="cwsheader">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td>
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td width="205"><img src="../images/shuro_head_logo.gif" height="50" width="170"></td><!-- ヘッダ文字列（ログイン者情報等） -->
                                    <td>
                                    <td>
                                        <div class="srwheadtxt">
                                            <div class="syznm">就労所属：&nbsp;情報技術本部（開発部）</div>
                                            <div class="syain">
                                                <div>従業員コード：&nbsp;1210330</div>
                                                <div>従業員氏名：&nbsp;堀　開登</div>
                                            </div>
                                        </div>
                                    </td>
                    </td>
                </tr>
            </tbody>
        </table>
        </td>
        <td align="right"><img src="../images/cws30/head_logo2.gif" height="50" width="118"></td>
        </table><!-- グローバルメニュー -->
        <div class="globalnavi">
            <div><img src="../images/cws30/mark02.gif" height="12" width="12"><a href="cws?@SID=null&amp;@SUB=root.cws.shuro&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448" target="_parent">就労メインページ</a><img src="../images/cws30/head_parts02.gif" height="17" hspace="15" width="2"></div>
            <div><img src="../images/cws30/mark02.gif" height="12" width="12"><a href="cws?@SID=null&amp;@SUB=root.cws&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448" target="_parent">メインページ</a><img src="../images/cws30/head_parts02.gif" height="17" hspace="15" width="2"></div>
            <div><img src="../images/cws30/mark02.gif" height="12" width="12"><a href="cws?@SID=null&amp;@SUB=_service.logoff&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448" target="_parent">ログアウト</a><img src="../images/cws30/head_parts02.gif" height="17" hspace="15" width="2"></div>
        </div><!-- グローバルメニュー -->
    </div><!-- ヘッダー/ -->
    <table>
        <td vAlign=center align=center noWrap>
            <font color='navy'><span id="sp_link1" onMouseOver="omovLink1();" onMouseOut="omotLink1();" onClick="toggleShowLinkBox1();"><b>&nbsp;&nbsp;休日・マニュアル・FAQ&nbsp;&nbsp;<br /><span id="sp_mark_link1">━</span></b></span></font>
        </td>
    </table>
    <div id="div_linkbox1" style="display:none; z-index:11;">
        <table border="3" align="center" bordercolorlight="lightblue" bordercolordark="darkblue" rules="none" width="100%">
            <tr>
                <td><b> 休日・マニュアル・FAQ </b>
            </tr>
            </td>
            <tr>
                <td><a href="https://theasahishimbuncompany.sharepoint.com/sites/crp/00000053/006/公休・年次有給休暇・特別休暇・リフレッシュ休暇.aspx" target='_blank'>公休日数、休日休暇制度等について</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://theasahishimbuncompany.sharepoint.com/sites/crp/00000053/006/半日休制度.aspx" target='_blank'>半日休制度について</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://theasahishimbuncompany.sharepoint.com/sites/crp/00000053/006/リフレッシュ休暇取得による業務手当の扱い.aspx" target='_blank'>リフレッシュ休暇取得による業務手当の扱い</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://theasahishimbuncompany.sharepoint.com/sites/crp/00000053/006/勤務表Ｑ＆Ａ.aspx" target='_blank'>勤務制度Ｑ＆Ａ</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://theasahishimbuncompany.sharepoint.com/sites/crp/00000053/006/WEB勤務表の入力方法.aspx" target='_blank'>Web勤務表入力マニュアル</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://theasahishimbuncompany.sharepoint.com/sites/crp/00000053/006/WEB勤務表入力Ｑ＆Ａ.aspx" target='_blank'>ＦＡＱ（よくある質問集）</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
        </table>
    </div>
    <div id="div_linkbox2" style="display:none; z-index:10;"></div>
    <div id="link_box_partition_div1" style="z-index:6; display:none; position:absolute;"><iframe name="link_box_partition_iframe1" id="link_box_partition_iframe1" frameborder="0" width="100%" height="100%" scrolling="auto" src="javascript:false;"></iframe></div>
    <div id="link_box_partition_div2" style="z-index:6; display:none; position:absolute;"><iframe name="link_box_partition_iframe2" id="link_box_partition_iframe2" frameborder="0" width="100%" height="100%" scrolling="auto" src="javascript:false;"></iframe></div><!-- User ID/Section -->
    <!-- User ID/Section End -->
    <div id='ace_servlet_object' value='ace?@SQ=3'> </div><!-- NoticeBox -->

    <table name="notice_box_area_top" id="notice_box_area_top" border="0">
        <tr></tr>
    </table>
    <!-- NoticeBox End-->

    <div id="reauthentication" style="display:none; cursor: default"><input id="reauthCuid" type="hidden" value="1210330"><input id="reauthEmpid" type="hidden" value="1061298"><input id="reauthWsUrlPattern" type="hidden" value="./ws"><input id="reauthFormTop" type="hidden" value="-1"><input id="reauthFormLeft" type="hidden" value="-1">
        <table id="reauthFormTable">
            <tr>
                <td><img src="../images/reauth/titlebar.gif" width="100%" height="20"><br><br>
                    <div align="center" id="datainput">
                        <table>
                            <tr>
                                <td class="dl">&nbsp;ユーザーID</td>
                                <td><input id="reauthUid" type="text" name="userid" class="reauthInput" style="ime-mode:inactive" autocomplete="on"></td>
                            </tr>
                            <tr>
                                <td class="dl">&nbsp;パスワード</td>
                                <td><input id="reauthPwd" class="reauthInput" type="password" name="password"></td>
                            </tr>
                            <tr>
                                <td colspan=2 class="reauthCommentMsg">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="reauthErrorMsg" colspan=2>
                                    <div id="reauthErrorMsg" style="display:none">ユーザIDまたはパスワードが間違っています。</div>&nbsp;
                                    <td />
                            </tr>
                        </table>
                    </div>
                    <div id="reauthLoading" style="display:none;"><img src="../images/reauth/loading.gif"></div>
                    <div id="reauthButtons">
                        <table id="reauthButtonsTable">
                            <tr>
                                <td><input class="reauthButton" id="reauthSubmit" type="submit" name="reauthsubmit" size="80" onclick="executeReauth();" value="送 信"></td>
                                <td><input class="reauthButton" id="reauthCancel" type="button" name="reauthcancel" size="80" onclick="cancelReauth();" value="キャンセル"></td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </div><!-- Contents -->
    <br>
    <table border="0" cellspacing="0" cellpadding="1" summary="contents">
        <tr valign="top">
            <td rowspan="20" colspan="2">
                <table width="100%" border="0" cellspacing="2" cellpadding="3" summary="contents">
                    <tr>
                        <td rowspan="20" colspan="2" width="100%">
                            <b>
                                <font size="+1" color="#000000">勤務の入力</font>
                            </b>
                            <br>
                            <br>
                            <form method="POST" action="cws" name="FormListPersonalDetails">
                                <input type=hidden NAME="@SID" VALUE="">
                                <input type=hidden NAME="@SQ" VALUE="3">
                                <input type=hidden NAME="@SN" VALUE="root.cws.shuro.personal.term_kinmu_input">
                                <input type=hidden NAME="@FN" VALUE="508692448">
                                <input type=hidden NAME="@FS" VALUE="I">
                                <input type="hidden" name="@SRACT" id="@SRACT" value="NONE" /><input type="hidden" name="@SRSNDF" id="@SRSNDF" value="NONE" /><input type="hidden" name="@SRSNDC" id="@SRSNDC" value="NONE" /><input type="hidden" name="@SRCMD0" id="@SRCMD0" value="NONE" /><input type="hidden" name="@SRCMD1" id="@SRCMD1" value="NONE" /><input type="hidden" name="@SRCMD2" id="@SRCMD2" value="NONE" /><input type="hidden" name="@SRCMD3" id="@SRCMD3" value="NONE" /><input type="hidden" name="@SRCMD4" id="@SRCMD4" value="NONE" /><input type="hidden" name="posX" id="posX" value="0" /><input type="hidden" name="posY" id="posY" value="0" /><IFRAME src="javascript:false" scrolling="no" frameborder="0" id="octave_sheet" style="z-index: 10; position: absolute; visibility:hidden; "></iframe>
                                <DIV id="octave_substance" style="width: 300; height: 0; left: 0; top: 0; position:absolute; visibility:hidden; z-index : 100; cursor:pointer" onResize="octaveFnc.syncOctaveSheet();"><INPUT TYPE="HIDDEN" ID="OCT_PARAM" VALUE="">
                                    <TABLE ID='octave_substance' NAME='octave_substance' CLASS='oct_frm'>
                                        <TR ID='oct_header' NAME='oct_header' CLASS='oct_hdr'>
                                            <TD>
                                                <DIV ID='oct_cell_header' NAME='oct_cell_header'></DIV>
                                            </TD>
                                        </TR>
                                        <TR ID='oct_body' NAME='oct_body' CLASS='oct_bdy'>
                                            <TD>
                                                <DIV ID='oct_cell_body' NAME='oct_cell_body'></DIV>
                                            </TD>
                                        </TR>
                                        <TR ID='oct_console' NAME='oct_console' CLASS='oct_csl'>
                                            <TD>
                                                <DIV ID='oct_cell_console' NAME='oct_cell_console'></DIV>
                                            </TD>
                                        </TR>
                                    </TABLE>
                                    <DIV ID='octave_edi_key' NAME='octave_edi_key'></DIV>
                                </DIV>
                                <div id="vcwDlg"></div><strong>
                                    <font size=4>
                                        <font color=blue>５月の標準公休日数は<font color=red>９日</font>、６月の標準公休日数は<font color=red>８日</font>です。</font>
                                    </font>
                                </strong><br><br>
                                <font size=2>
                                    <font color=red>勤務表の入力・変更を行った場合は、該当の日付の左横のチェックボックスにチェックを入れ「一時保存」を押してください。<br>「勤務形態」を変更する場合、保存していない時間や報告事項がクリアされてしまいます。<br>「勤務形態」を変更する前に必ず上記手順のとおり一時保存処理をしてください。<br></font>
                                </font><BR />本日は2022年5月13日(金)です。<BR /><BR /><span class='sp_kintai_kikan'><img src="../images/bullet-blue.gif" width="8" height="14" />2022年5月&nbsp;&nbsp;&nbsp;&nbsp;<a id="TOPRVTM" href="cws?@SID=vJ8rHky23w&amp;@SUB=null&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=FormListPersonalDetails&@SRSNDSVC=TermKinmuInputService&@SRACT=ToPrevTermAction">＜＜</a>&nbsp;2022年5月1日(日)～2022年5月31日(火)&nbsp;<a id="TONXTTM" href="cws?@SID=vJ8rHky23w&amp;@SUB=null&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=FormListPersonalDetails&@SRSNDSVC=TermKinmuInputService&@SRACT=ToNextTermAction">＞＞</a></span><BR />この期間の勤務実績はまだ提出されていません。勤務を提出するには、「提出する」ボタンを押してください。<br />表示されている勤務期間から前月に戻る場合には「 ＜＜ 」を、翌月に進む場合には「 ＞＞ 」を押してください。<BR /><BR /><a id="PREVSTS" href="cws?@SID=vJ8rHky23w&amp;@SUB=null&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=FormListPersonalDetails&@SRSNDSVC=TermKinmuInputService&@SRACT=ToPrevTermAction">2022年4月1日(金)～2022年4月30日(土)</a>の勤務実績は、最終承認されています。<br /><br /><BR /><span class="error" id="DYERR_error0">2022/5/2 (月)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error1">2022/5/6 (金)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error2">2022/5/9 (月)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error3">2022/5/10 (火)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error4">2022/5/11 (水)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error5">2022/5/12 (木)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error6">2022/5/13 (金)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error7">2022/5/16 (月)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error8">2022/5/17 (火)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error9">2022/5/18 (水)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error10">2022/5/19 (木)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error11">2022/5/20 (金)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error12">2022/5/23 (月)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error13">2022/5/24 (火)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error14">2022/5/25 (水)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error15">2022/5/26 (木)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error16">2022/5/27 (金)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error17">2022/5/30 (月)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><span class="error" id="DYERR_error18">2022/5/31 (火)：エラー：出勤の日は通勤交通費を（未選択）以外に修正してください</span><BR /><BR /><input type="image" id="MLTSV0" name="MLTSV0" border="0" src="../images/buttons/multiSaveBtnDark.gif" onMouseOver="document.getElementById('MLTSV0').src='../images/buttons/multiSaveBtnBright.gif'; document.getElementById('MLTSV0').style.cursor='hand'; document.getElementById('MLTSV0').style.cursor='pointer'; " onMouseOut="document.getElementById('MLTSV0').src='../images/buttons/multiSaveBtnDark.gif';" onClick="getElementById('@SRACT').value='PrepareAndExecutePersonalMultiDailySaveAction';getElementById('@SRSNDF').value='FormListPersonalDetails';var el = getElementById('MLTSV0');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" name="btnPrint" id="btnPrint" value="印刷用表示" onClick="window.open('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=PersonalTermPrintPreviewAction&@SRSNDSVC=TermKinmuInputService&@NO_CNTUP=true','wnd_print','toolbar=no,location=no, directories=no, scrollbars=yes, menubar=yes, resizable=yes');" style="width:150px;" /><BR /><BR /><strong>保存したい日付の横にチェックを入れたうえで「一時保存」ボタンをクリックしてください！</strong><br>一時保存済みデータの背景色：[<span class='mg_saved'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>]&nbsp;&nbsp;&nbsp;&nbsp;差戻されたデータの背景色：[<span class='mg_rejected'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>]&nbsp;&nbsp;&nbsp;&nbsp;提出を取消したデータの背景色：[<span class='mg_canceled'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>]&nbsp;&nbsp;&nbsp;&nbsp;<BR /><input type="button" name="BTN_RELEASE_ALL_UPPER" id="BTN_RELEASE_ALL_UPPER" value="チェッククリア" onClick="attendanceUtilSpace.releaseAll('CHK');" />&nbsp;&nbsp;<table name="APPROVALGRD" id="APPROVALGRD" border="1" class="mg_outer">
                                    <tr>
                                        <td class="mg_header">日付</td>
                                        <td class="mg_header">-</td>
                                        <td class="mg_header">
                                            <font size=-3>[M5200]</font>
                                        </td>
                                        <td class="mg_header">勤務形態</td>
                                        <td class="mg_header">出退勤時間</td>
                                        <td class="mg_header">通勤交通費</td>
                                        <td class="mg_header">（参考値）<br>モバイル打刻時刻</td>
                                        <td class="mg_header">（参考値）<br>ログオン・ログオフ時刻</td>
                                        <td class="mg_header">報告事項</td>
                                        <td class="mg_header">措置基準時間</td>
                                        <td class="mg_header">法定深夜時間</td>
                                        <td class="mg_header">法定休日労働時間</td>
                                        <td class="mg_header">手当</td>
                                        <td class="mg_header" colspan="3">組合活動</td>
                                        <td class="mg_header" colspan="2">業務中断時間</td>
                                        <td class="mg_header">業務中断時間（食事・所用・会合・その他）</td>
                                        <td class="mg_header">子ども看護休暇（時間）</td>
                                        <td class="mg_header">家族看護休暇（時間）</td>
                                        <td class="mg_header">介護休暇（時間）</td>
                                        <td class="mg_header">実働日数</td>
                                    </tr>
                                    <tr>
                                        <td class="mg_dh_sun">
                                            <center><input type="checkbox" name="CHK2022_5_1" id="CHK2022_5_1" /><label for="CHK2022_5_1"><span id="MONTH">5</span>/<span id="DAY">1</span><BR />&nbsp;[<font color='FF0000'>公休</font>]&nbsp;</label></center>
                                        </td>
                                        <td class="mg_dh_sun"><span id="">日</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_10" name="BTNDTL2022_5_10" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_10').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_10').style.cursor='hand'; document.getElementById('BTNDTL2022_5_10').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_10').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_1';var el = getElementById('BTNDTL2022_5_10');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_10I" value="201" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_10B" id="KCD2022_5_10B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_1&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:FF0000">公休</span></td>
                                        <td class="mg_normal"><select name="K2022_5_10STD" id="K2022_5_10STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_10STH" id="K2022_5_10STH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_10STM" id="K2022_5_10STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_10ETD" id="K2022_5_10ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_10ETH" id="K2022_5_10ETH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_10ETM" id="K2022_5_10ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_10S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_10" id="JM2022_5_10" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_2" id="CHK2022_5_2" /><label for="CHK2022_5_2"><span id="MONTH">5</span>/<span id="DAY">2</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">月</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_20" name="BTNDTL2022_5_20" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_20').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_20').style.cursor='hand'; document.getElementById('BTNDTL2022_5_20').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_20').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_2';var el = getElementById('BTNDTL2022_5_20');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_20I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_20B" id="KCD2022_5_20B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_2&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_20STD" id="K2022_5_20STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_20STH" id="K2022_5_20STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_20STM" id="K2022_5_20STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_20ETD" id="K2022_5_20ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_20ETH" id="K2022_5_20ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_20ETM" id="K2022_5_20ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_20S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_20" id="JM2022_5_20" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_20">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_dh_holiday">
                                            <center><input type="checkbox" name="CHK2022_5_3" id="CHK2022_5_3" /><label for="CHK2022_5_3"><span id="MONTH">5</span>/<span id="DAY">3</span><BR />&nbsp;[<font color='FF0080'>祝日</font>]&nbsp;</label></center>
                                        </td>
                                        <td class="mg_dh_holiday"><span id="">火</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_30" name="BTNDTL2022_5_30" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_30').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_30').style.cursor='hand'; document.getElementById('BTNDTL2022_5_30').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_30').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_3';var el = getElementById('BTNDTL2022_5_30');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_30I" value="251" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_30B" id="KCD2022_5_30B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_3&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:0000FF">年次有給休暇</span></td>
                                        <td class="mg_normal"><select name="K2022_5_30STD" id="K2022_5_30STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_30STH" id="K2022_5_30STH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_30STM" id="K2022_5_30STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_30ETD" id="K2022_5_30ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_30ETH" id="K2022_5_30ETH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_30ETM" id="K2022_5_30ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_30S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_30" id="JM2022_5_30" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_dh_holiday">
                                            <center><input type="checkbox" name="CHK2022_5_4" id="CHK2022_5_4" /><label for="CHK2022_5_4"><span id="MONTH">5</span>/<span id="DAY">4</span><BR />&nbsp;[<font color='FF0080'>祝日</font>]&nbsp;</label></center>
                                        </td>
                                        <td class="mg_dh_holiday"><span id="">水</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_40" name="BTNDTL2022_5_40" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_40').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_40').style.cursor='hand'; document.getElementById('BTNDTL2022_5_40').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_40').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_4';var el = getElementById('BTNDTL2022_5_40');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_40I" value="251" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_40B" id="KCD2022_5_40B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_4&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:0000FF">年次有給休暇</span></td>
                                        <td class="mg_normal"><select name="K2022_5_40STD" id="K2022_5_40STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_40STH" id="K2022_5_40STH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_40STM" id="K2022_5_40STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_40ETD" id="K2022_5_40ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_40ETH" id="K2022_5_40ETH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_40ETM" id="K2022_5_40ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_40S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_40" id="JM2022_5_40" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_dh_holiday">
                                            <center><input type="checkbox" name="CHK2022_5_5" id="CHK2022_5_5" /><label for="CHK2022_5_5"><span id="MONTH">5</span>/<span id="DAY">5</span><BR />&nbsp;[<font color='FF0080'>祝日</font>]&nbsp;</label></center>
                                        </td>
                                        <td class="mg_dh_holiday"><span id="">木</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_50" name="BTNDTL2022_5_50" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_50').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_50').style.cursor='hand'; document.getElementById('BTNDTL2022_5_50').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_50').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_5';var el = getElementById('BTNDTL2022_5_50');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_50I" value="251" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_50B" id="KCD2022_5_50B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_5&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:0000FF">年次有給休暇</span></td>
                                        <td class="mg_normal"><select name="K2022_5_50STD" id="K2022_5_50STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_50STH" id="K2022_5_50STH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_50STM" id="K2022_5_50STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_50ETD" id="K2022_5_50ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_50ETH" id="K2022_5_50ETH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_50ETM" id="K2022_5_50ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_50S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_50" id="JM2022_5_50" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_6" id="CHK2022_5_6" /><label for="CHK2022_5_6"><span id="MONTH">5</span>/<span id="DAY">6</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">金</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_60" name="BTNDTL2022_5_60" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_60').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_60').style.cursor='hand'; document.getElementById('BTNDTL2022_5_60').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_60').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_6';var el = getElementById('BTNDTL2022_5_60');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_60I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_60B" id="KCD2022_5_60B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_6&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_60STD" id="K2022_5_60STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_60STH" id="K2022_5_60STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_60STM" id="K2022_5_60STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_60ETD" id="K2022_5_60ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_60ETH" id="K2022_5_60ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_60ETM" id="K2022_5_60ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_60S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_60" id="JM2022_5_60" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_60">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_dh_sat">
                                            <center><input type="checkbox" name="CHK2022_5_7" id="CHK2022_5_7" /><label for="CHK2022_5_7"><span id="MONTH">5</span>/<span id="DAY">7</span><BR />&nbsp;[<font color='0000FF'>公休</font>]&nbsp;</label></center>
                                        </td>
                                        <td class="mg_dh_sat"><span id="">土</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_70" name="BTNDTL2022_5_70" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_70').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_70').style.cursor='hand'; document.getElementById('BTNDTL2022_5_70').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_70').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_7';var el = getElementById('BTNDTL2022_5_70');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_70I" value="201" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_70B" id="KCD2022_5_70B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_7&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:FF0000">公休</span></td>
                                        <td class="mg_normal"><select name="K2022_5_70STD" id="K2022_5_70STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_70STH" id="K2022_5_70STH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_70STM" id="K2022_5_70STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_70ETD" id="K2022_5_70ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_70ETH" id="K2022_5_70ETH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_70ETM" id="K2022_5_70ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_70S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_70" id="JM2022_5_70" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_dh_sun">
                                            <center><input type="checkbox" name="CHK2022_5_8" id="CHK2022_5_8" /><label for="CHK2022_5_8"><span id="MONTH">5</span>/<span id="DAY">8</span><BR />&nbsp;[<font color='FF0000'>公休</font>]&nbsp;</label></center>
                                        </td>
                                        <td class="mg_dh_sun"><span id="">日</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_80" name="BTNDTL2022_5_80" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_80').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_80').style.cursor='hand'; document.getElementById('BTNDTL2022_5_80').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_80').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_8';var el = getElementById('BTNDTL2022_5_80');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_80I" value="201" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_80B" id="KCD2022_5_80B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_8&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:FF0000">公休</span></td>
                                        <td class="mg_normal"><select name="K2022_5_80STD" id="K2022_5_80STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_80STH" id="K2022_5_80STH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_80STM" id="K2022_5_80STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_80ETD" id="K2022_5_80ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_80ETH" id="K2022_5_80ETH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_80ETM" id="K2022_5_80ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_80S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_80" id="JM2022_5_80" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_9" id="CHK2022_5_9" /><label for="CHK2022_5_9"><span id="MONTH">5</span>/<span id="DAY">9</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">月</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_90" name="BTNDTL2022_5_90" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_90').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_90').style.cursor='hand'; document.getElementById('BTNDTL2022_5_90').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_90').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_9';var el = getElementById('BTNDTL2022_5_90');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_90I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_90B" id="KCD2022_5_90B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_9&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_90STD" id="K2022_5_90STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_90STH" id="K2022_5_90STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_90STM" id="K2022_5_90STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_90ETD" id="K2022_5_90ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_90ETH" id="K2022_5_90ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_90ETM" id="K2022_5_90ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_90S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_90" id="JM2022_5_90" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_90">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_10" id="CHK2022_5_10" /><label for="CHK2022_5_10"><span id="MONTH">5</span>/<span id="DAY">10</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">火</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_100" name="BTNDTL2022_5_100" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_100').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_100').style.cursor='hand'; document.getElementById('BTNDTL2022_5_100').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_100').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_10';var el = getElementById('BTNDTL2022_5_100');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_100I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_100B" id="KCD2022_5_100B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_10&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_100STD" id="K2022_5_100STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_100STH" id="K2022_5_100STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_100STM" id="K2022_5_100STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_100ETD" id="K2022_5_100ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_100ETH" id="K2022_5_100ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_100ETM" id="K2022_5_100ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_100S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_100" id="JM2022_5_100" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_100">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_11" id="CHK2022_5_11" /><label for="CHK2022_5_11"><span id="MONTH">5</span>/<span id="DAY">11</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">水</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_110" name="BTNDTL2022_5_110" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_110').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_110').style.cursor='hand'; document.getElementById('BTNDTL2022_5_110').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_110').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_11';var el = getElementById('BTNDTL2022_5_110');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_110I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_110B" id="KCD2022_5_110B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_11&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_110STD" id="K2022_5_110STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_110STH" id="K2022_5_110STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_110STM" id="K2022_5_110STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_110ETD" id="K2022_5_110ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_110ETH" id="K2022_5_110ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_110ETM" id="K2022_5_110ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_110S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_110" id="JM2022_5_110" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_110">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_12" id="CHK2022_5_12" /><label for="CHK2022_5_12"><span id="MONTH">5</span>/<span id="DAY">12</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">木</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_120" name="BTNDTL2022_5_120" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_120').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_120').style.cursor='hand'; document.getElementById('BTNDTL2022_5_120').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_120').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_12';var el = getElementById('BTNDTL2022_5_120');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_120I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_120B" id="KCD2022_5_120B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_12&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_120STD" id="K2022_5_120STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_120STH" id="K2022_5_120STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_120STM" id="K2022_5_120STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_120ETD" id="K2022_5_120ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_120ETH" id="K2022_5_120ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_120ETM" id="K2022_5_120ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_120S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_120" id="JM2022_5_120" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_120">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_13" id="CHK2022_5_13" /><label for="CHK2022_5_13"><span id="MONTH">5</span>/<span id="DAY">13</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">金</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_130" name="BTNDTL2022_5_130" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_130').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_130').style.cursor='hand'; document.getElementById('BTNDTL2022_5_130').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_130').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_13';var el = getElementById('BTNDTL2022_5_130');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_130I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_130B" id="KCD2022_5_130B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_13&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_130STD" id="K2022_5_130STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_130STH" id="K2022_5_130STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_130STM" id="K2022_5_130STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_130ETD" id="K2022_5_130ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_130ETH" id="K2022_5_130ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_130ETM" id="K2022_5_130ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_130S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_130" id="JM2022_5_130" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_130">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_dh_sat">
                                            <center><input type="checkbox" name="CHK2022_5_14" id="CHK2022_5_14" /><label for="CHK2022_5_14"><span id="MONTH">5</span>/<span id="DAY">14</span><BR />&nbsp;[<font color='0000FF'>公休</font>]&nbsp;</label></center>
                                        </td>
                                        <td class="mg_dh_sat"><span id="">土</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_140" name="BTNDTL2022_5_140" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_140').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_140').style.cursor='hand'; document.getElementById('BTNDTL2022_5_140').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_140').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_14';var el = getElementById('BTNDTL2022_5_140');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_140I" value="201" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_140B" id="KCD2022_5_140B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_14&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:FF0000">公休</span></td>
                                        <td class="mg_normal"><select name="K2022_5_140STD" id="K2022_5_140STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_140STH" id="K2022_5_140STH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_140STM" id="K2022_5_140STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_140ETD" id="K2022_5_140ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_140ETH" id="K2022_5_140ETH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_140ETM" id="K2022_5_140ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_140S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_140" id="JM2022_5_140" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_dh_sun">
                                            <center><input type="checkbox" name="CHK2022_5_15" id="CHK2022_5_15" /><label for="CHK2022_5_15"><span id="MONTH">5</span>/<span id="DAY">15</span><BR />&nbsp;[<font color='FF0000'>公休</font>]&nbsp;</label></center>
                                        </td>
                                        <td class="mg_dh_sun"><span id="">日</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_150" name="BTNDTL2022_5_150" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_150').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_150').style.cursor='hand'; document.getElementById('BTNDTL2022_5_150').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_150').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_15';var el = getElementById('BTNDTL2022_5_150');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_150I" value="201" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_150B" id="KCD2022_5_150B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_15&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:FF0000">公休</span></td>
                                        <td class="mg_normal"><select name="K2022_5_150STD" id="K2022_5_150STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_150STH" id="K2022_5_150STH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_150STM" id="K2022_5_150STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_150ETD" id="K2022_5_150ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_150ETH" id="K2022_5_150ETH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_150ETM" id="K2022_5_150ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_150S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_150" id="JM2022_5_150" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_16" id="CHK2022_5_16" /><label for="CHK2022_5_16"><span id="MONTH">5</span>/<span id="DAY">16</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">月</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_160" name="BTNDTL2022_5_160" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_160').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_160').style.cursor='hand'; document.getElementById('BTNDTL2022_5_160').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_160').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_16';var el = getElementById('BTNDTL2022_5_160');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_160I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_160B" id="KCD2022_5_160B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_16&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_160STD" id="K2022_5_160STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_160STH" id="K2022_5_160STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_160STM" id="K2022_5_160STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_160ETD" id="K2022_5_160ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_160ETH" id="K2022_5_160ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_160ETM" id="K2022_5_160ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_160S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_160" id="JM2022_5_160" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_160">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_17" id="CHK2022_5_17" /><label for="CHK2022_5_17"><span id="MONTH">5</span>/<span id="DAY">17</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">火</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_170" name="BTNDTL2022_5_170" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_170').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_170').style.cursor='hand'; document.getElementById('BTNDTL2022_5_170').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_170').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_17';var el = getElementById('BTNDTL2022_5_170');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_170I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_170B" id="KCD2022_5_170B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_17&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_170STD" id="K2022_5_170STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_170STH" id="K2022_5_170STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_170STM" id="K2022_5_170STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_170ETD" id="K2022_5_170ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_170ETH" id="K2022_5_170ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_170ETM" id="K2022_5_170ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_170S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_170" id="JM2022_5_170" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_170">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_18" id="CHK2022_5_18" /><label for="CHK2022_5_18"><span id="MONTH">5</span>/<span id="DAY">18</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">水</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_180" name="BTNDTL2022_5_180" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_180').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_180').style.cursor='hand'; document.getElementById('BTNDTL2022_5_180').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_180').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_18';var el = getElementById('BTNDTL2022_5_180');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_180I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_180B" id="KCD2022_5_180B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_18&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_180STD" id="K2022_5_180STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_180STH" id="K2022_5_180STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_180STM" id="K2022_5_180STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_180ETD" id="K2022_5_180ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_180ETH" id="K2022_5_180ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_180ETM" id="K2022_5_180ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_180S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_180" id="JM2022_5_180" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_180">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_19" id="CHK2022_5_19" /><label for="CHK2022_5_19"><span id="MONTH">5</span>/<span id="DAY">19</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">木</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_190" name="BTNDTL2022_5_190" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_190').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_190').style.cursor='hand'; document.getElementById('BTNDTL2022_5_190').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_190').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_19';var el = getElementById('BTNDTL2022_5_190');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_190I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_190B" id="KCD2022_5_190B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_19&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_190STD" id="K2022_5_190STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_190STH" id="K2022_5_190STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_190STM" id="K2022_5_190STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_190ETD" id="K2022_5_190ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_190ETH" id="K2022_5_190ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_190ETM" id="K2022_5_190ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_190S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_190" id="JM2022_5_190" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_190">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_20" id="CHK2022_5_20" /><label for="CHK2022_5_20"><span id="MONTH">5</span>/<span id="DAY">20</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">金</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_200" name="BTNDTL2022_5_200" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_200').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_200').style.cursor='hand'; document.getElementById('BTNDTL2022_5_200').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_200').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_20';var el = getElementById('BTNDTL2022_5_200');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_200I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_200B" id="KCD2022_5_200B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_20&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_200STD" id="K2022_5_200STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_200STH" id="K2022_5_200STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_200STM" id="K2022_5_200STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_200ETD" id="K2022_5_200ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_200ETH" id="K2022_5_200ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_200ETM" id="K2022_5_200ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_200S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_200" id="JM2022_5_200" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_200">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_dh_sat">
                                            <center><input type="checkbox" name="CHK2022_5_21" id="CHK2022_5_21" /><label for="CHK2022_5_21"><span id="MONTH">5</span>/<span id="DAY">21</span><BR />&nbsp;[<font color='0000FF'>公休</font>]&nbsp;</label></center>
                                        </td>
                                        <td class="mg_dh_sat"><span id="">土</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_210" name="BTNDTL2022_5_210" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_210').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_210').style.cursor='hand'; document.getElementById('BTNDTL2022_5_210').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_210').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_21';var el = getElementById('BTNDTL2022_5_210');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_210I" value="201" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_210B" id="KCD2022_5_210B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_21&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:FF0000">公休</span></td>
                                        <td class="mg_normal"><select name="K2022_5_210STD" id="K2022_5_210STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_210STH" id="K2022_5_210STH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_210STM" id="K2022_5_210STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_210ETD" id="K2022_5_210ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_210ETH" id="K2022_5_210ETH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_210ETM" id="K2022_5_210ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_210S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_210" id="JM2022_5_210" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_dh_sun">
                                            <center><input type="checkbox" name="CHK2022_5_22" id="CHK2022_5_22" /><label for="CHK2022_5_22"><span id="MONTH">5</span>/<span id="DAY">22</span><BR />&nbsp;[<font color='FF0000'>公休</font>]&nbsp;</label></center>
                                        </td>
                                        <td class="mg_dh_sun"><span id="">日</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_220" name="BTNDTL2022_5_220" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_220').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_220').style.cursor='hand'; document.getElementById('BTNDTL2022_5_220').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_220').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_22';var el = getElementById('BTNDTL2022_5_220');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_220I" value="201" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_220B" id="KCD2022_5_220B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_22&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:FF0000">公休</span></td>
                                        <td class="mg_normal"><select name="K2022_5_220STD" id="K2022_5_220STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_220STH" id="K2022_5_220STH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_220STM" id="K2022_5_220STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_220ETD" id="K2022_5_220ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_220ETH" id="K2022_5_220ETH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_220ETM" id="K2022_5_220ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_220S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_220" id="JM2022_5_220" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_23" id="CHK2022_5_23" /><label for="CHK2022_5_23"><span id="MONTH">5</span>/<span id="DAY">23</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">月</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_230" name="BTNDTL2022_5_230" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_230').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_230').style.cursor='hand'; document.getElementById('BTNDTL2022_5_230').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_230').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_23';var el = getElementById('BTNDTL2022_5_230');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_230I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_230B" id="KCD2022_5_230B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_23&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_230STD" id="K2022_5_230STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_230STH" id="K2022_5_230STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_230STM" id="K2022_5_230STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_230ETD" id="K2022_5_230ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_230ETH" id="K2022_5_230ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_230ETM" id="K2022_5_230ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_230S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_230" id="JM2022_5_230" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_230">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_24" id="CHK2022_5_24" /><label for="CHK2022_5_24"><span id="MONTH">5</span>/<span id="DAY">24</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">火</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_240" name="BTNDTL2022_5_240" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_240').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_240').style.cursor='hand'; document.getElementById('BTNDTL2022_5_240').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_240').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_24';var el = getElementById('BTNDTL2022_5_240');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_240I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_240B" id="KCD2022_5_240B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_24&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_240STD" id="K2022_5_240STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_240STH" id="K2022_5_240STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_240STM" id="K2022_5_240STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_240ETD" id="K2022_5_240ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_240ETH" id="K2022_5_240ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_240ETM" id="K2022_5_240ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_240S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_240" id="JM2022_5_240" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_240">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_25" id="CHK2022_5_25" /><label for="CHK2022_5_25"><span id="MONTH">5</span>/<span id="DAY">25</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">水</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_250" name="BTNDTL2022_5_250" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_250').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_250').style.cursor='hand'; document.getElementById('BTNDTL2022_5_250').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_250').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_25';var el = getElementById('BTNDTL2022_5_250');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_250I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_250B" id="KCD2022_5_250B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_25&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_250STD" id="K2022_5_250STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_250STH" id="K2022_5_250STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_250STM" id="K2022_5_250STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_250ETD" id="K2022_5_250ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_250ETH" id="K2022_5_250ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_250ETM" id="K2022_5_250ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_250S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_250" id="JM2022_5_250" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_250">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_26" id="CHK2022_5_26" /><label for="CHK2022_5_26"><span id="MONTH">5</span>/<span id="DAY">26</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">木</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_260" name="BTNDTL2022_5_260" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_260').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_260').style.cursor='hand'; document.getElementById('BTNDTL2022_5_260').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_260').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_26';var el = getElementById('BTNDTL2022_5_260');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_260I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_260B" id="KCD2022_5_260B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_26&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_260STD" id="K2022_5_260STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_260STH" id="K2022_5_260STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_260STM" id="K2022_5_260STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_260ETD" id="K2022_5_260ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_260ETH" id="K2022_5_260ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_260ETM" id="K2022_5_260ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_260S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_260" id="JM2022_5_260" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_260">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_27" id="CHK2022_5_27" /><label for="CHK2022_5_27"><span id="MONTH">5</span>/<span id="DAY">27</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">金</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_270" name="BTNDTL2022_5_270" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_270').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_270').style.cursor='hand'; document.getElementById('BTNDTL2022_5_270').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_270').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_27';var el = getElementById('BTNDTL2022_5_270');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_270I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_270B" id="KCD2022_5_270B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_27&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_270STD" id="K2022_5_270STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_270STH" id="K2022_5_270STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_270STM" id="K2022_5_270STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_270ETD" id="K2022_5_270ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_270ETH" id="K2022_5_270ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_270ETM" id="K2022_5_270ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_270S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_270" id="JM2022_5_270" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_270">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_dh_sat">
                                            <center><input type="checkbox" name="CHK2022_5_28" id="CHK2022_5_28" /><label for="CHK2022_5_28"><span id="MONTH">5</span>/<span id="DAY">28</span><BR />&nbsp;[<font color='0000FF'>公休</font>]&nbsp;</label></center>
                                        </td>
                                        <td class="mg_dh_sat"><span id="">土</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_280" name="BTNDTL2022_5_280" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_280').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_280').style.cursor='hand'; document.getElementById('BTNDTL2022_5_280').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_280').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_28';var el = getElementById('BTNDTL2022_5_280');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_280I" value="201" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_280B" id="KCD2022_5_280B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_28&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:FF0000">公休</span></td>
                                        <td class="mg_normal"><select name="K2022_5_280STD" id="K2022_5_280STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_280STH" id="K2022_5_280STH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_280STM" id="K2022_5_280STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_280ETD" id="K2022_5_280ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_280ETH" id="K2022_5_280ETH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_280ETM" id="K2022_5_280ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_280S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_280" id="JM2022_5_280" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_dh_sun">
                                            <center><input type="checkbox" name="CHK2022_5_29" id="CHK2022_5_29" /><label for="CHK2022_5_29"><span id="MONTH">5</span>/<span id="DAY">29</span><BR />&nbsp;[<font color='FF0000'>公休</font>]&nbsp;</label></center>
                                        </td>
                                        <td class="mg_dh_sun"><span id="">日</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_290" name="BTNDTL2022_5_290" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_290').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_290').style.cursor='hand'; document.getElementById('BTNDTL2022_5_290').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_290').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_29';var el = getElementById('BTNDTL2022_5_290');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_290I" value="201" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_290B" id="KCD2022_5_290B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_29&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:FF0000">公休</span></td>
                                        <td class="mg_normal"><select name="K2022_5_290STD" id="K2022_5_290STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_290STH" id="K2022_5_290STH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_290STM" id="K2022_5_290STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_290ETD" id="K2022_5_290ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_290ETH" id="K2022_5_290ETH" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_290ETM" id="K2022_5_290ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_290S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_290" id="JM2022_5_290" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_30" id="CHK2022_5_30" /><label for="CHK2022_5_30"><span id="MONTH">5</span>/<span id="DAY">30</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">月</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_300" name="BTNDTL2022_5_300" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_300').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_300').style.cursor='hand'; document.getElementById('BTNDTL2022_5_300').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_300').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_30';var el = getElementById('BTNDTL2022_5_300');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_300I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_300B" id="KCD2022_5_300B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_30&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_300STD" id="K2022_5_300STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_300STH" id="K2022_5_300STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_300STM" id="K2022_5_300STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_300ETD" id="K2022_5_300ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_300ETH" id="K2022_5_300ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_300ETM" id="K2022_5_300ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_300S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_300" id="JM2022_5_300" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_300">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_normal">
                                            <center><input type="checkbox" name="CHK2022_5_31" id="CHK2022_5_31" /><label for="CHK2022_5_31"><span id="MONTH">5</span>/<span id="DAY">31</span></label></center>
                                        </td>
                                        <td class="mg_normal"><span id="">火</span></td>
                                        <td class="mg_normal"><input type="image" id="BTNDTL2022_5_310" name="BTNDTL2022_5_310" border="0" src="../images/buttons/detailBtnDark.gif" onMouseOver="document.getElementById('BTNDTL2022_5_310').src='../images/buttons/detailBtnBright.gif'; document.getElementById('BTNDTL2022_5_310').style.cursor='hand'; document.getElementById('BTNDTL2022_5_310').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNDTL2022_5_310').src='../images/buttons/detailBtnDark.gif';" onClick="getElementById('@SRACT').value='BackUpAndShowSingleAttendanceAction';getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRCMD2').value='0';getElementById('@SRCMD1').value='2022_5_31';var el = getElementById('BTNDTL2022_5_310');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /></td>
                                        <td class="mg_normal"><input type="text" name="KCD2022_5_310I" value="1001" style="ime-mode:disabled" style="color:000000" size="10" maxlength="10" /><input type="button" name="KCD2022_5_310B" id="KCD2022_5_310B" onClick="getElementById('@SRSNDF').value='FormListPersonalDetails';getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';setScrollPosition();window.name='wnd_tki'; javascript:Pop('cws?@SID=&amp;@SUB=root.cws.shuro.personal.term_kinmu_input&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&@SRACT=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.actions.ListKinmuCDAction&@SRSNDSVC=jp.co.worksap.companyweb.service.shuro.term_kinmu_input.TermKinmuInputService&@SRSNDF=jp.co.worksap.companyweb.service.shuro.term_kinmu_input_commons.forms.FormListPersonalDetails&@SRCMD1=2022_5_31&@SRCMD2=0&@NO_CNTUP=true','',600,650,1);" style="width:21px;height:21px;background:url(../images/seek.gif);" /><BR /><span id="" style="color:000000">出勤</span></td>
                                        <td class="mg_normal"><select name="K2022_5_310STD" id="K2022_5_310STD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_310STH" id="K2022_5_310STH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000" selected>10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000">18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_310STM" id="K2022_5_310STM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分&nbsp;～&nbsp;<BR /><select name="K2022_5_310ETD" id="K2022_5_310ETD" style="color:000000">
                                                <option value="-1" style="color:000000">前日</option>
                                                <option value="0" style="color:000000" selected>当日</option>
                                                <option value="1" style="color:000000">翌日</option>
                                            </select><select name="K2022_5_310ETH" id="K2022_5_310ETH" style="color:000000">
                                                <option value="0" style="color:000000">00</option>
                                                <option value="1" style="color:000000">01</option>
                                                <option value="2" style="color:000000">02</option>
                                                <option value="3" style="color:000000">03</option>
                                                <option value="4" style="color:000000">04</option>
                                                <option value="5" style="color:000000">05</option>
                                                <option value="6" style="color:000000">06</option>
                                                <option value="7" style="color:000000">07</option>
                                                <option value="8" style="color:000000">08</option>
                                                <option value="9" style="color:000000">09</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="11" style="color:000000">11</option>
                                                <option value="12" style="color:000000">12</option>
                                                <option value="13" style="color:000000">13</option>
                                                <option value="14" style="color:000000">14</option>
                                                <option value="15" style="color:000000">15</option>
                                                <option value="16" style="color:000000">16</option>
                                                <option value="17" style="color:000000">17</option>
                                                <option value="18" style="color:000000" selected>18</option>
                                                <option value="19" style="color:000000">19</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="21" style="color:000000">21</option>
                                                <option value="22" style="color:000000">22</option>
                                                <option value="23" style="color:000000">23</option>
                                            </select>&nbsp;時&nbsp;<select name="K2022_5_310ETM" id="K2022_5_310ETM" style="color:000000">
                                                <option value="0" style="color:000000" selected>00</option>
                                                <option value="10" style="color:000000">10</option>
                                                <option value="20" style="color:000000">20</option>
                                                <option value="30" style="color:000000">30</option>
                                                <option value="40" style="color:000000">40</option>
                                                <option value="50" style="color:000000">50</option>
                                            </select>&nbsp;分</td>
                                        <td class="mg_normal"><select name="GI_COMBOBOX10@2022_5_310S" style="color:000000">
                                                <option value="1" style="color:000000" selected>（未選択）</option>
                                                <option value="2" style="color:FF0080">往復</option>
                                                <option value="3" style="color:FF00FF">片道</option>
                                                <option value="4" style="color:000000">なし</option>
                                            </select></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><span id="">　No Data</span></td>
                                        <td class="mg_normal"><textarea name="JM2022_5_310" id="JM2022_5_310" cols="40" rows="2" style="color:000000"></textarea></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal"></td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'></div>
                                        </td>
                                        <td class="mg_normal">
                                            <div align='right'><span id="RTTL246@2022_5_310">1.0</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mg_sum">-</td>
                                        <td class="mg_sum">-</td>
                                        <td class="mg_sum">-</td>
                                        <td class="mg_sum">&nbsp;<span id="" style="color:000000">出勤</span>： 19回&nbsp;<BR />&nbsp;<span id="" style="color:FF0000">公休</span>： 9回&nbsp;<BR />&nbsp;<span id="" style="color:0000FF">年次有給休暇</span>： 3回&nbsp;<BR /></td>
                                        <td class="mg_sum">-</td>
                                        <td class="mg_sum">-</td>
                                        <td class="mg_sum">-</td>
                                        <td class="mg_sum">-</td>
                                        <td class="mg_sum">-</td>
                                        <td class="mg_sum">
                                            <div align='right'><span id="H">0</span>:<span id="M">00</span></div>
                                        </td>
                                        <td class="mg_sum">
                                            <div align='right'><span id="H">0</span>:<span id="M">00</span></div>
                                        </td>
                                        <td class="mg_sum">
                                            <div align='right'><span id="H">0</span>:<span id="M">00</span></div>
                                        </td>
                                        <td class="mg_sum"></td>
                                        <td class="mg_sum"></td>
                                        <td class="mg_sum">-</td>
                                        <td class="mg_sum">
                                            <div align='right'><span id="H">0</span>:<span id="M">00</span></div>
                                        </td>
                                        <td class="mg_sum">-</td>
                                        <td class="mg_sum">-</td>
                                        <td class="mg_sum">
                                            <div align='right'><span id="H">0</span>:<span id="M">00</span></div>
                                        </td>
                                        <td class="mg_sum">
                                            <div align='right'><span id="H">0</span>:<span id="M">00</span></div>
                                        </td>
                                        <td class="mg_sum">
                                            <div align='right'><span id="H">0</span>:<span id="M">00</span></div>
                                        </td>
                                        <td class="mg_sum">
                                            <div align='right'><span id="H">0</span>:<span id="M">00</span></div>
                                        </td>
                                        <td class="mg_sum">
                                            <div align='right'><span id="">19.0</span></div>
                                        </td>
                                    </tr>
                                </table><input type="button" name="BTN_RELEASE_ALL_LOWER" id="BTN_RELEASE_ALL_LOWER" value="チェッククリア" onClick="attendanceUtilSpace.releaseAll('CHK');" /><BR /><BR /></span><BR /><BR /><input type="image" id="BTNCLC1" name="BTNCLC1" border="0" src="../images/buttons/calcBtnDark.gif" onMouseOver="document.getElementById('BTNCLC1').src='../images/buttons/calcBtnBright.gif'; document.getElementById('BTNCLC1').style.cursor='hand'; document.getElementById('BTNCLC1').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNCLC1').src='../images/buttons/calcBtnDark.gif';" onClick="getElementById('@SRACT').value='CalculateInPersonalDetailFormAction';getElementById('@SRSNDF').value='FormListPersonalDetails';var el = getElementById('BTNCLC1');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" />&nbsp;&nbsp;<input type="image" id="MLTSV1" name="MLTSV1" border="0" src="../images/buttons/multiSaveBtnDark.gif" onMouseOver="document.getElementById('MLTSV1').src='../images/buttons/multiSaveBtnBright.gif'; document.getElementById('MLTSV1').style.cursor='hand'; document.getElementById('MLTSV1').style.cursor='pointer'; " onMouseOut="document.getElementById('MLTSV1').src='../images/buttons/multiSaveBtnDark.gif';" onClick="getElementById('@SRACT').value='PrepareAndExecutePersonalMultiDailySaveAction';getElementById('@SRSNDF').value='FormListPersonalDetails';var el = getElementById('MLTSV1');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" />&nbsp;&nbsp;<input type="image" id="BTNSBMT1" name="BTNSBMT1" border="0" src="../images/buttons/sendBtnDark.gif" onMouseOver="document.getElementById('BTNSBMT1').src='../images/buttons/sendBtnBright.gif'; document.getElementById('BTNSBMT1').style.cursor='hand'; document.getElementById('BTNSBMT1').style.cursor='pointer'; " onMouseOut="document.getElementById('BTNSBMT1').src='../images/buttons/sendBtnDark.gif';" onClick="getElementById('@SRACT').value='PreparePersonalTermSubmissionAction';getElementById('@SRSNDF').value='FormListPersonalDetails';var el = getElementById('BTNSBMT1');if (el) {el.disabled=true;}FormListPersonalDetails.submit();" /><BR /><BR /><br><br><strong>
                                    <Font Color="#000000">「服喪休暇」を取得する場合には、取得区分を<a href="https://theasahishimbuncompany.sharepoint.com/sites/crp/00000053/006/公休・年次有給休暇・特別休暇・リフレッシュ休暇.aspx" target="_blank">こちら</a>でご確認ください。</Font><br>「計算する」ボタンは、時間数の計算を行う際に使用します。チェックボックスへのチェックは不要です。<font color=red><br>「一時保存」ボタンは、勤務形態を変更し、チェックボックスにチェックを入れた上で押してください。チェックがないと保存されません。<br>「提出する」ボタンは、毎月１回、承認者に勤務実績を提出する時のみ押してください。チェックボックスにすべてチェックを入れる必要はありません。
                                </strong></font><input type="text" name="dummy" style="position:absolute;visibility:hidden">
                            </form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- Contents End -->
    <!-- NoticeBox -->

    <table name="notice_box_area_bottom" id="notice_box_area_bottom" border="0">
        <tr></tr>
    </table>
    <!-- NoticeBox End-->

    <!-- Footer -->
    <table id="footer" width="80%" border="0" cellspacing="3" cellpadding="3" align="center" summary="footer">
        <tr>
            <td colspan="2">
                <div align="center">
                    <a href="cws?@SID=null&amp;@SUB=root.cws.shuro&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&amp;@ACTION_LOG_TXT=%E5%B0%B1%E5%8A%B4%E3%83%A1%E3%82%A4%E3%83%B3%E3%83%9A%E3%83%BC%E3%82%B8" target="_parent">就労メインページ</a>
                    - <a href="cws?@SID=null&amp;@SUB=root.cws&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&amp;@ACTION_LOG_TXT=%E3%83%A1%E3%82%A4%E3%83%B3%E3%83%9A%E3%83%BC%E3%82%B8" target="_parent">メインページ</a>
                    - <a href="cws?@SID=null&amp;@SUB=_service.logoff&amp;@SN=root.cws.shuro.personal.term_kinmu_input&amp;@FN=508692448&amp;@ACTION_LOG_TXT=%E3%83%AD%E3%82%B0%E3%82%A2%E3%82%A6%E3%83%88" target="_parent">ログアウト</a>
                </div>
            </td>
        </tr>
    </table>
    <table id="copyrights" height=34px width="100%" border="0" cellspacing="0" cellpadding="1" align="center" background="../images/cws30/foot_bg.gif" summary="copyright information">
        <tr>
            <td></td>
            <td colspan="2">
                <div align="center">
                    <font color='FFFFFF'>就労・プロジェクト管理 Version 3.899.19.00/ Copyright &copy; 2002 - 2018, WORKS APPLICATIONS Co.,Ltd.
                        All rights reserved.</font>
                </div>
            </td>
        </tr>
    </table>
    <!-- Footer-End -->
    <script type="text/javascript" src="../scripts/srw_require.js?38991900" charset="Shift_JIS" data-main="../scripts/srw_js3_loader"></script>
    <script type="text/javascript" src="../scripts/daily_input.js?38991900" charset="Shift_JIS">
        <!--
        //
        -->
    </script>
    <script type="text/javascript" src="../scripts/srw_attendance_util.js?38991900" charset="Shift_JIS">
        <!--
        //
        -->
    </script>
</body>

</html>