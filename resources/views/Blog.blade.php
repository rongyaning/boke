<!DOCTYPE html>
<!-- saved from url=(0042)https://i.cnblogs.com/EditPosts.aspx?opt=1 -->
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        博客后台管理 - 博客园</title>

    <link rel="stylesheet" type="text/css" href="./博客发布 - 博客园_files/admin.css">
    <script src="./博客发布 - 博客园_files/jquery.js.下载" type="text/javascript"></script>
    <script src="./博客发布 - 博客园_files/json2.js.下载" type="text/javascript"></script>
    <script type="text/javascript" src="./博客发布 - 博客园_files/jquery.cnblogs.thickbox.js.下载"></script>
    <script type="text/javascript" src="./博客发布 - 博客园_files/admin.js.下载"></script>
</head>
<body id="Posts">
<form method="post" action="https://i.cnblogs.com/EditPosts.aspx?opt=1" id="frmMain">
    <div class="aspNetHidden">
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
               value="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">
    </div>

    <script type="text/javascript">window.onbeforeunload = function () {
        if (!canLeavePage()) return ('确认离开当前页面吗？未保存的数据将会丢失！');
    }</script>
    <script language="JavaScript" src="./博客发布 - 博客园_files/uicontrols.js.下载"></script>
    <div class="aspNetHidden">

        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="FE27D343">
    </div>
    <table id="BodyTable" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
        <tr>
            <td id="Header" colspan="2">
                <div id="SiteNav"><a href="http://home.cnblogs.com/set/account/" target="_blank">修改密码</a>&nbsp;|&nbsp;<a
                        href="https://i.cnblogs.com/BlogBackup.aspx">备份</a>&nbsp;|&nbsp;<a
                        href="http://www.cnblogs.com/Skins.aspx" target="_blank">模板</a></div>
                <div id="BlogTitle"><a id="BlogTitleLink" href="http://www.cnblogs.com/ryn521/">花沐</a>
                </div>
                <div id="SiteTitle">
                    <a id="TitleLink" href="http://www.cnblogs.com/"><img src="./博客发布 - 博客园_files/adminlogo.gif" alt=""></a>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="LeftNavHeader">操作</div>
            </td>
            <td class="NavHeaderRow">
                <ul id="TopNav">
                    <li>
                        <a href="https://i.cnblogs.com/EditPosts.aspx" id="TabPosts">随笔</a>
                    </li>
                    <li>
                        <a href="https://i.cnblogs.com/EditArticles.aspx" id="TabArticles">文章</a>
                    </li>

                   
                    <li>
                        <a href="https://i.cnblogs.com/Feedback.aspx" id="TabFeedback">评论</a>
                    </li>


                    <li>
                        <a href="https://i.cnblogs.com/Configure.aspx" id="TabConfigure">设置</a>
                    </li>
                    <li>
                        <a href="https://i.cnblogs.com/Preferences.aspx" id="TabPreferences">选项</a>
                    </li>


                </ul>
                <div id="SubNav">

                </div>
            </td>
        </tr>
        <tr>
            <td class="NavLeftCell">
                <div class="left_nav">
                    <ul id="LinksActions">
                        <li><a href="https://i.cnblogs.com/EditPosts.aspx?opt=1">» 添加新随笔</a></li>
                        <li><a href="https://i.cnblogs.com/EditPosts.aspx?IsDraft=1">» 草稿箱</a></li>
                       
                    </ul>
                </div>
                <div id="CategoriesHeader" class="LeftNavHeader">
                    分类
                </div>
                <div class="left_nav">
                    <ul id="LinksCategories">
                        <li><a href="https://i.cnblogs.com/EditCategories.aspx?catid=1">[编辑分类]</a></li>
                        <li><a href="https://i.cnblogs.com/EditPosts.aspx">[所有分类]</a></li>
                        <li><a href="https://i.cnblogs.com/EditPosts.aspx?catid=-2">[未分类]</a></li>
                    </ul>
                </div>
            </td>
            <td id="Body">
                <div id="Main">


                    <script type="text/javascript">
                        var isEdit = true;
                        var isNewPost = true;
                        var currentEditorId = 'Editor_Edit_EditorBody';
                        var currentUseEditor = 5;
                        var txbTitleId = 'Editor_Edit_txbTitle';
                    </script>
                    <div id="Editor_Messages">


                    </div>

                    <div id="Editor_Edit">
                        <div id="Editor_Edit_Header" class="CollapsibleTitle">
                            <span id="Editor_Edit_headerTitle">添加随笔</span>
                        </div>
                        <div id="Editor_Edit_Contents">

                            <div id="edit_container">
                                <div id="edit_title">
                                    <b>标题</b>
                                    <br>
                                    <input name="Editor$Edit$txbTitle" type="text" maxlength="200"
                                           id="Editor_Edit_txbTitle" onblur="localPreserver.saveDraftTitle();"
                                           onkeydown="title_keydown(event);" style="width:99%;">
                                </div>
                                <div id="edit_body">
                                    <div id="edit_body_tip">
                                        <b>内容</b>(Markdown编辑器，支持拖放/粘贴上传图片) <span id="write_hint"
                                                                                 style="color: green;"><a
                                            href="javascript:void(0);"
                                            onclick="localPreserver.showSaved();return false;">查看自动保存内容</a></span>
                                    </div>
                                    <img title="上传图片"
                                         onclick="markdown_image_upload(&#39;Editor_Edit_EditorBody&#39;);return false;"
                                         src="./博客发布 - 博客园_files/img.gif" alt="上传图片"><textarea
                                        name="Editor$Edit$EditorBody" rows="2" cols="20" id="Editor_Edit_EditorBody"
                                        onkeydown="insert_tab(this,event)"></textarea>
                                    <script src="./博客发布 - 博客园_files/paste-upload-image.js.下载"></script>
                                    <script>$('#Editor_Edit_EditorBody').pasteUploadImage('www.cnblogs.com');</script>
                                </div>
                                <div id="Editor_Edit_APOptions">
                                    <div id="Editor_Edit_APOptions_Header" class="CollapsibleTitle">
                                        <a id="Editor_Edit_APOptions_Link"
                                           onclick="ToggleVisible(&#39;Editor_Edit_APOptions_Contents&#39;,&#39;Editor_Edit_APOptions_LinkImage&#39;,&#39;/resources/toggle_gray_up.gif&#39;,&#39;/resources/toggle_gray_down.gif&#39;); return false;"
                                           href="https://i.cnblogs.com/UserControls/#"><img
                                                id="Editor_Edit_APOptions_LinkImage"
                                                src="./博客发布 - 博客园_files/toggle_gray_down.gif"></a><span
                                            id="Editor_Edit_APOptions_headerTitle" class="CollapsibleTitle">常用选项</span>
                                    </div>
                                    <div id="Editor_Edit_APOptions_Contents" class="Edit">

                                        <div class="edit_option">
                                            <div id="Editor_Edit_APOptions_Advancedpanel1">
                                                <div id="Editor_Edit_APOptions_Advancedpanel1_Header"
                                                     class="subCollapsibleTitle">
                                                    <a id="Editor_Edit_APOptions_Advancedpanel1_Link"
                                                       onclick="ToggleVisible(&#39;Editor_Edit_APOptions_Advancedpanel1_Contents&#39;,&#39;Editor_Edit_APOptions_Advancedpanel1_LinkImage&#39;,&#39;/resources/toggle_gray_up.gif&#39;,&#39;/resources/toggle_gray_down.gif&#39;); return false;"
                                                       href="https://i.cnblogs.com/UserControls/#"><img
                                                            id="Editor_Edit_APOptions_Advancedpanel1_LinkImage"
                                                            src="./博客发布 - 博客园_files/toggle_gray_down.gif"></a><span
                                                        id="Editor_Edit_APOptions_Advancedpanel1_headerTitle"
                                                        class="subCollapsibleTitleText">个人分类</span>
                                                </div>
                                                <div id="Editor_Edit_APOptions_Advancedpanel1_Contents" class="Edit">


                                                </div>
                                            </div>
                                            <div id="Editor_Edit_APOptions_APSiteHome">
                                                <div id="Editor_Edit_APOptions_APSiteHome_Header"
                                                     class="subCollapsibleTitle">
                                                    <a id="Editor_Edit_APOptions_APSiteHome_Link"
                                                       onclick="ToggleVisible(&#39;Editor_Edit_APOptions_APSiteHome_Contents&#39;,&#39;Editor_Edit_APOptions_APSiteHome_LinkImage&#39;,&#39;/resources/toggle_gray_up.gif&#39;,&#39;/resources/toggle_gray_down.gif&#39;); return false;"
                                                       href="https://i.cnblogs.com/UserControls/#"><img
                                                            id="Editor_Edit_APOptions_APSiteHome_LinkImage"
                                                            src="./博客发布 - 博客园_files/toggle_gray_down.gif"></a><span
                                                        id="Editor_Edit_APOptions_APSiteHome_headerTitle"
                                                        class="subCollapsibleTitleText">发布选项</span>
                                                </div>
                                                <div id="Editor_Edit_APOptions_APSiteHome_Contents" class="Edit">

                                                    <div id="Editor_Edit_APOptions_APSiteHome_panelHomeCandidate">

                                                        <input name="Editor$Edit$APOptions$APSiteHome$cbHomeCandidate"
                                                               type="checkbox"
                                                               id="Editor_Edit_APOptions_APSiteHome_cbHomeCandidate"
                                                               onclick="OnHomeCandidateChange(this)">发布至首页候选区
                                                        <br>

                                                    </div>
                                                    <input name="Editor$Edit$APOptions$APSiteHome$cbIsPublishToSiteHome"
                                                           type="checkbox"
                                                           id="Editor_Edit_APOptions_APSiteHome_cbIsPublishToSiteHome"
                                                           onclick="OnSiteHomeChange(this)">发布至博客园首页（原创、精品、知识分享）
                                                    <div style="font-size:12px;/*color:#1A64A2;*/padding:5px 5px 5px 5px;">
                                                        【发文说明】<br>
                                                        博客园是面向开发者的知识分享社区，不允许发布任何推广、广告、政治方面的内容。<br>
                                                        博客园首页（即网站首页）只能发布原创的、高质量的、能让读者从中学到东西的内容。<br>
                                                        如果博文质量不符合首页要求，会被工作人员移出首页，望理解。如有疑问，请联系contact@cnblogs.com。
                                                    </div>

                                                </div>
                                            </div>

                                            <div id="Editor_Edit_APOptions_APSiteCategory">
                                                <div id="Editor_Edit_APOptions_APSiteCategory_Header"
                                                     class="subCollapsibleTitle">
                                                    <a id="Editor_Edit_APOptions_APSiteCategory_Link"
                                                       onclick="ToggleVisible(&#39;Editor_Edit_APOptions_APSiteCategory_Contents&#39;,&#39;Editor_Edit_APOptions_APSiteCategory_LinkImage&#39;,&#39;/resources/toggle_gray_up.gif&#39;,&#39;/resources/toggle_gray_down.gif&#39;); return false;"
                                                       href="https://i.cnblogs.com/UserControls/#"><img
                                                            id="Editor_Edit_APOptions_APSiteCategory_LinkImage"
                                                            src="./博客发布 - 博客园_files/toggle_gray_down.gif"></a><span
                                                        id="Editor_Edit_APOptions_APSiteCategory_headerTitle"
                                                        class="subCollapsibleTitleText">网站分类</span>
                                                </div>
                                                <div id="Editor_Edit_APOptions_APSiteCategory_Contents" class="Edit"
                                                     style="display:none;">

                                                    注：请为您的随笔选择最合适的分类，请不要发布在不相关的分类中，否则您的帐户会被取消网站分类发布权限。

                                                    <div class="site_category">

                                                        .NET技术：

                                                        <input type="radio" id="site_categroy_18156"
                                                               name="name_site_categroy" value="18156">
                                                        <label for="site_categroy_18156">.NET新手区</label>

                                                        <input type="radio" id="site_categroy_108699"
                                                               name="name_site_categroy" value="108699">
                                                        <label for="site_categroy_108699">ASP.NET</label>

                                                        <input type="radio" id="site_categroy_108700"
                                                               name="name_site_categroy" value="108700">
                                                        <label for="site_categroy_108700">C#</label>

                                                        <input type="radio" id="site_categroy_108760"
                                                               name="name_site_categroy" value="108760">
                                                        <label for="site_categroy_108760">.NET Core</label>

                                                        <input type="radio" id="site_categroy_108716"
                                                               name="name_site_categroy" value="108716">
                                                        <label for="site_categroy_108716">WinForm</label>

                                                        <input type="radio" id="site_categroy_108717"
                                                               name="name_site_categroy" value="108717">
                                                        <label for="site_categroy_108717">Silverlight</label>

                                                        <input type="radio" id="site_categroy_108718"
                                                               name="name_site_categroy" value="108718">
                                                        <label for="site_categroy_108718">WCF</label>

                                                        <input type="radio" id="site_categroy_108719"
                                                               name="name_site_categroy" value="108719">
                                                        <label for="site_categroy_108719">CLR</label>

                                                        <input type="radio" id="site_categroy_108720"
                                                               name="name_site_categroy" value="108720">
                                                        <label for="site_categroy_108720">WPF</label>

                                                        <input type="radio" id="site_categroy_108728"
                                                               name="name_site_categroy" value="108728">
                                                        <label for="site_categroy_108728">XNA</label>

                                                        <input type="radio" id="site_categroy_108729"
                                                               name="name_site_categroy" value="108729">
                                                        <label for="site_categroy_108729">Visual Studio</label>

                                                        <input type="radio" id="site_categroy_108730"
                                                               name="name_site_categroy" value="108730">
                                                        <label for="site_categroy_108730">ASP.NET MVC</label>

                                                        <input type="radio" id="site_categroy_108738"
                                                               name="name_site_categroy" value="108738">
                                                        <label for="site_categroy_108738">控件开发</label>

                                                        <input type="radio" id="site_categroy_108739"
                                                               name="name_site_categroy" value="108739">
                                                        <label for="site_categroy_108739">Entity Framework</label>

                                                        <input type="radio" id="site_categroy_108758"
                                                               name="name_site_categroy" value="108758">
                                                        <label for="site_categroy_108758">NHibernate</label>

                                                        <input type="radio" id="site_categroy_108745"
                                                               name="name_site_categroy" value="108745">
                                                        <label for="site_categroy_108745">WinRT/Metro</label>

                                                        <br>

                                                        编程语言：

                                                        <input type="radio" id="site_categroy_106876"
                                                               name="name_site_categroy" value="106876">
                                                        <label for="site_categroy_106876">Java</label>

                                                        <input type="radio" id="site_categroy_106880"
                                                               name="name_site_categroy" value="106880">
                                                        <label for="site_categroy_106880">C++</label>

                                                        <input type="radio" id="site_categroy_106882"
                                                               name="name_site_categroy" value="106882">
                                                        <label for="site_categroy_106882">PHP</label>

                                                        <input type="radio" id="site_categroy_106877"
                                                               name="name_site_categroy" value="106877">
                                                        <label for="site_categroy_106877">Delphi</label>

                                                        <input type="radio" id="site_categroy_108696"
                                                               name="name_site_categroy" value="108696">
                                                        <label for="site_categroy_108696">Python</label>

                                                        <input type="radio" id="site_categroy_106894"
                                                               name="name_site_categroy" value="106894">
                                                        <label for="site_categroy_106894">Ruby</label>

                                                        <input type="radio" id="site_categroy_108735"
                                                               name="name_site_categroy" value="108735">
                                                        <label for="site_categroy_108735">C语言</label>

                                                        <input type="radio" id="site_categroy_108746"
                                                               name="name_site_categroy" value="108746">
                                                        <label for="site_categroy_108746">Erlang</label>

                                                        <input type="radio" id="site_categroy_108748"
                                                               name="name_site_categroy" value="108748">
                                                        <label for="site_categroy_108748">Go</label>

                                                        <input type="radio" id="site_categroy_108751"
                                                               name="name_site_categroy" value="108751">
                                                        <label for="site_categroy_108751">Swift</label>

                                                        <input type="radio" id="site_categroy_108752"
                                                               name="name_site_categroy" value="108752">
                                                        <label for="site_categroy_108752">Scala</label>

                                                        <input type="radio" id="site_categroy_108753"
                                                               name="name_site_categroy" value="108753">
                                                        <label for="site_categroy_108753">R语言</label>

                                                        <input type="radio" id="site_categroy_108742"
                                                               name="name_site_categroy" value="108742">
                                                        <label for="site_categroy_108742">Verilog</label>

                                                        <input type="radio" id="site_categroy_108754"
                                                               name="name_site_categroy" value="108754">
                                                        <label for="site_categroy_108754">其它语言</label>

                                                        <br>

                                                        软件设计：

                                                        <input type="radio" id="site_categroy_106892"
                                                               name="name_site_categroy" value="106892">
                                                        <label for="site_categroy_106892">架构设计</label>

                                                        <input type="radio" id="site_categroy_108702"
                                                               name="name_site_categroy" value="108702">
                                                        <label for="site_categroy_108702">面向对象</label>

                                                        <input type="radio" id="site_categroy_106884"
                                                               name="name_site_categroy" value="106884">
                                                        <label for="site_categroy_106884">设计模式</label>

                                                        <input type="radio" id="site_categroy_108750"
                                                               name="name_site_categroy" value="108750">
                                                        <label for="site_categroy_108750">领域驱动设计</label>

                                                        <br>

                                                        Web前端：

                                                        <input type="radio" id="site_categroy_106883"
                                                               name="name_site_categroy" value="106883">
                                                        <label for="site_categroy_106883">Html/Css</label>

                                                        <input type="radio" id="site_categroy_106893"
                                                               name="name_site_categroy" value="106893">
                                                        <label for="site_categroy_106893">JavaScript</label>

                                                        <input type="radio" id="site_categroy_108731"
                                                               name="name_site_categroy" value="108731">
                                                        <label for="site_categroy_108731">jQuery</label>

                                                        <input type="radio" id="site_categroy_108737"
                                                               name="name_site_categroy" value="108737">
                                                        <label for="site_categroy_108737">HTML5</label>

                                                        <br>

                                                        企业信息化：

                                                        <input type="radio" id="site_categroy_108761"
                                                               name="name_site_categroy" value="108761">
                                                        <label for="site_categroy_108761">BPM</label>

                                                        <input type="radio" id="site_categroy_78111"
                                                               name="name_site_categroy" value="78111">
                                                        <label for="site_categroy_78111">SharePoint</label>

                                                        <input type="radio" id="site_categroy_50349"
                                                               name="name_site_categroy" value="50349">
                                                        <label for="site_categroy_50349">GIS技术</label>

                                                        <input type="radio" id="site_categroy_106878"
                                                               name="name_site_categroy" value="106878">
                                                        <label for="site_categroy_106878">SAP</label>

                                                        <input type="radio" id="site_categroy_108732"
                                                               name="name_site_categroy" value="108732">
                                                        <label for="site_categroy_108732">Oracle ERP</label>

                                                        <input type="radio" id="site_categroy_108734"
                                                               name="name_site_categroy" value="108734">
                                                        <label for="site_categroy_108734">Dynamics CRM</label>

                                                        <input type="radio" id="site_categroy_108747"
                                                               name="name_site_categroy" value="108747">
                                                        <label for="site_categroy_108747">K2 BPM</label>

                                                        <input type="radio" id="site_categroy_108749"
                                                               name="name_site_categroy" value="108749">
                                                        <label for="site_categroy_108749">信息安全</label>

                                                        <input type="radio" id="site_categroy_3"
                                                               name="name_site_categroy" value="3">
                                                        <label for="site_categroy_3">企业信息化其他</label>

                                                        <br>

                                                        手机开发：

                                                        <input type="radio" id="site_categroy_108706"
                                                               name="name_site_categroy" value="108706">
                                                        <label for="site_categroy_108706">Android开发</label>

                                                        <input type="radio" id="site_categroy_108707"
                                                               name="name_site_categroy" value="108707">
                                                        <label for="site_categroy_108707">iOS开发</label>

                                                        <input type="radio" id="site_categroy_108736"
                                                               name="name_site_categroy" value="108736">
                                                        <label for="site_categroy_108736">Windows Phone</label>

                                                        <input type="radio" id="site_categroy_108708"
                                                               name="name_site_categroy" value="108708">
                                                        <label for="site_categroy_108708">Windows Mobile</label>

                                                        <input type="radio" id="site_categroy_106886"
                                                               name="name_site_categroy" value="106886">
                                                        <label for="site_categroy_106886">其他手机开发</label>

                                                        <br>

                                                        软件工程：

                                                        <input type="radio" id="site_categroy_108710"
                                                               name="name_site_categroy" value="108710">
                                                        <label for="site_categroy_108710">敏捷开发</label>

                                                        <input type="radio" id="site_categroy_106891"
                                                               name="name_site_categroy" value="106891">
                                                        <label for="site_categroy_106891">项目与团队管理</label>

                                                        <input type="radio" id="site_categroy_106889"
                                                               name="name_site_categroy" value="106889">
                                                        <label for="site_categroy_106889">软件工程其他</label>

                                                        <br>

                                                        数据库技术：

                                                        <input type="radio" id="site_categroy_108713"
                                                               name="name_site_categroy" value="108713">
                                                        <label for="site_categroy_108713">SQL Server</label>

                                                        <input type="radio" id="site_categroy_108714"
                                                               name="name_site_categroy" value="108714">
                                                        <label for="site_categroy_108714">Oracle</label>

                                                        <input type="radio" id="site_categroy_108715"
                                                               name="name_site_categroy" value="108715">
                                                        <label for="site_categroy_108715">MySQL</label>

                                                        <input type="radio" id="site_categroy_108743"
                                                               name="name_site_categroy" value="108743">
                                                        <label for="site_categroy_108743">NoSQL</label>

                                                        <input type="radio" id="site_categroy_108756"
                                                               name="name_site_categroy" value="108756">
                                                        <label for="site_categroy_108756">大数据</label>

                                                        <input type="radio" id="site_categroy_106881"
                                                               name="name_site_categroy" value="106881">
                                                        <label for="site_categroy_106881">其它数据库</label>

                                                        <br>

                                                        操作系统：

                                                        <input type="radio" id="site_categroy_108721"
                                                               name="name_site_categroy" value="108721">
                                                        <label for="site_categroy_108721">Windows</label>

                                                        <input type="radio" id="site_categroy_108725"
                                                               name="name_site_categroy" value="108725">
                                                        <label for="site_categroy_108725">Windows Server</label>

                                                        <input type="radio" id="site_categroy_108726"
                                                               name="name_site_categroy" value="108726">
                                                        <label for="site_categroy_108726">Linux</label>

                                                        <input type="radio" id="site_categroy_108755"
                                                               name="name_site_categroy" value="108755">
                                                        <label for="site_categroy_108755">OS X</label>

                                                        <input type="radio" id="site_categroy_108757"
                                                               name="name_site_categroy" value="108757">
                                                        <label for="site_categroy_108757">嵌入式</label>

                                                        <br>

                                                        其他分类：

                                                        <input type="radio" id="site_categroy_807"
                                                               name="name_site_categroy" value="807">
                                                        <label for="site_categroy_807">非技术区</label>

                                                        <input type="radio" id="site_categroy_106879"
                                                               name="name_site_categroy" value="106879">
                                                        <label for="site_categroy_106879">软件测试</label>

                                                        <input type="radio" id="site_categroy_33909"
                                                               name="name_site_categroy" value="33909">
                                                        <label for="site_categroy_33909">代码与软件发布</label>

                                                        <input type="radio" id="site_categroy_106885"
                                                               name="name_site_categroy" value="106885">
                                                        <label for="site_categroy_106885">计算机图形学</label>

                                                        <input type="radio" id="site_categroy_106895"
                                                               name="name_site_categroy" value="106895">
                                                        <label for="site_categroy_106895">Google开发</label>

                                                        <input type="radio" id="site_categroy_108759"
                                                               name="name_site_categroy" value="108759">
                                                        <label for="site_categroy_108759">游戏开发</label>

                                                        <input type="radio" id="site_categroy_106888"
                                                               name="name_site_categroy" value="106888">
                                                        <label for="site_categroy_106888">程序人生</label>

                                                        <input type="radio" id="site_categroy_106890"
                                                               name="name_site_categroy" value="106890">
                                                        <label for="site_categroy_106890">求职面试</label>

                                                        <input type="radio" id="site_categroy_5079"
                                                               name="name_site_categroy" value="5079">
                                                        <label for="site_categroy_5079">读书区</label>

                                                        <input type="radio" id="site_categroy_4347"
                                                               name="name_site_categroy" value="4347">
                                                        <label for="site_categroy_4347">转载区</label>

                                                        <input type="radio" id="site_categroy_108733"
                                                               name="name_site_categroy" value="108733">
                                                        <label for="site_categroy_108733">Windows CE</label>

                                                        <input type="radio" id="site_categroy_106875"
                                                               name="name_site_categroy" value="106875">
                                                        <label for="site_categroy_106875">翻译区</label>

                                                        <input type="radio" id="site_categroy_108722"
                                                               name="name_site_categroy" value="108722">
                                                        <label for="site_categroy_108722">开源研究</label>

                                                        <input type="radio" id="site_categroy_108723"
                                                               name="name_site_categroy" value="108723">
                                                        <label for="site_categroy_108723">Flex</label>

                                                        <input type="radio" id="site_categroy_108740"
                                                               name="name_site_categroy" value="108740">
                                                        <label for="site_categroy_108740">云计算</label>

                                                        <input type="radio" id="site_categroy_108741"
                                                               name="name_site_categroy" value="108741">
                                                        <label for="site_categroy_108741">算法与数据结构</label>

                                                        <input type="radio" id="site_categroy_7734"
                                                               name="name_site_categroy" value="7734">
                                                        <label for="site_categroy_7734">其他技术区</label>

                                                        <br>

                                                        <input type="radio" id="site_categroy_0"
                                                               name="name_site_categroy" value="0">
                                                        <label for="site_categroy_0">取消选择</label>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div id="Editor_Edit_Advanced">
                                    <div id="Editor_Edit_Advanced_Header" class="CollapsibleTitle">
                                        <a id="Editor_Edit_Advanced_Link"
                                           onclick="ToggleVisible(&#39;Editor_Edit_Advanced_Contents&#39;,&#39;Editor_Edit_Advanced_LinkImage&#39;,&#39;/resources/toggle_gray_up.gif&#39;,&#39;/resources/toggle_gray_down.gif&#39;); return false;"
                                           href="https://i.cnblogs.com/UserControls/#"><img
                                                id="Editor_Edit_Advanced_LinkImage"
                                                src="./博客发布 - 博客园_files/toggle_gray_down.gif"></a><span
                                            id="Editor_Edit_Advanced_headerTitle" class="CollapsibleTitle">高级选项</span>
                                    </div>
                                    <div id="Editor_Edit_Advanced_Contents" class="Edit">

                                        <div class="edit_option">
                                            <ul class="edit_option_ul">
                                                <li>
                                                    <label for="Editor_Edit_Advanced_ckbPublished">发布</label><input
                                                        id="Editor_Edit_Advanced_ckbPublished" type="checkbox"
                                                        name="Editor$Edit$Advanced$ckbPublished" checked="checked">
                                                </li>
                                                <li>
                                                    <label for="Editor_Edit_Advanced_chkDisplayHomePage">显示在我的博客首页</label><input
                                                        id="Editor_Edit_Advanced_chkDisplayHomePage" type="checkbox"
                                                        name="Editor$Edit$Advanced$chkDisplayHomePage"
                                                        checked="checked">
                                                </li>
                                                <li>
                                                    <label for="Editor_Edit_Advanced_chkComments">允许评论</label><input
                                                        id="Editor_Edit_Advanced_chkComments" type="checkbox"
                                                        name="Editor$Edit$Advanced$chkComments" checked="checked">
                                                </li>
                                                <li>

                                                </li>
                                                <li>
                                                    <label for="Editor_Edit_Advanced_chkMainSyndication">显示在RSS中</label><input
                                                        id="Editor_Edit_Advanced_chkMainSyndication" type="checkbox"
                                                        name="Editor$Edit$Advanced$chkMainSyndication"
                                                        checked="checked">
                                                </li>
                                                <li>

                                                </li>
                                                <li>
                                                    <label for="Editor_Edit_Advanced_chkPinned">置顶</label><input
                                                        id="Editor_Edit_Advanced_chkPinned" type="checkbox"
                                                        name="Editor$Edit$Advanced$chkPinned">
                                                </li>
                                                <li>
                                                    <label for="Editor_Edit_Advanced_chkIsOnlyForRegisterUser">只允许注册用户访问</label><input
                                                        id="Editor_Edit_Advanced_chkIsOnlyForRegisterUser"
                                                        type="checkbox"
                                                        name="Editor$Edit$Advanced$chkIsOnlyForRegisterUser">
                                                </li>
                                                <li>

                                                </li>
                                            </ul>
                                            <div>


                                            </div>
                                            <div>
                                                EntryName(友好地址名，只能使用字母、数字、-连字符、_下划线，不超过150个字符)<br>
                                                <input name="Editor$Edit$Advanced$txbEntryName" type="text"
                                                       maxlength="150" id="Editor_Edit_Advanced_txbEntryName"
                                                       onblur="checkEntryName()" style="width: 470px"><br>
                                                <span id="entryname_tip"></span>
                                            </div>
                                            <div>
                                                摘要:&nbsp;&nbsp;<a href="https://i.cnblogs.com/EditPosts.aspx?opt=1#"
                                                                  onclick="return insertDescImg()">插入摘要右侧图片</a><br>
                                                <textarea name="Editor$Edit$Advanced$txbExcerpt" rows="4" cols="20"
                                                          id="Editor_Edit_Advanced_txbExcerpt"
                                                          style="width:98%;"></textarea><br>

                                            </div>
                                            <div id="Editor_Edit_Advanced_divTrackBack">
                                                <div class="itemspace">
                                                    Tag标签:
                                                    <input name="Editor$Edit$Advanced$txbTag" type="text"
                                                           id="Editor_Edit_Advanced_txbTag"
                                                           style="width: 500px">&nbsp;<a
                                                        onclick="leftVal = (screen.width - 300) / 2;topVal = (screen.height - 500) / 2;window.open(&#39;/tags/list?id=20160213&#39;,&#39;_blank&#39;,&#39;width=300,height=500,toolbars=yes,resizable=yes,scrollbars=yes,left=&#39;+leftVal+&#39;,top=&#39;+topVal);return false;"
                                                        href="javascript:void(0);">插入已有标签</a>&nbsp;(多个关键字之间用“,”分隔，最多不超过10个)
                                                </div>

                                            </div>

                                            <div class="itemspace">
                                                密码保护:&nbsp;<input name="Editor$Edit$Advanced$tbEnryPassword" type="text"
                                                                  id="Editor_Edit_Advanced_tbEnryPassword"
                                                                  style="width: 200px">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="post_block">
                                    <input type="submit" name="Editor$Edit$lkbPost" value="发布"
                                           onclick="return CheckInput();" id="Editor_Edit_lkbPost" class="Button">
                                    <input type="submit" name="Editor$Edit$lkbDraft" value="存为草稿"
                                           onclick="return CheckInput();" id="Editor_Edit_lkbDraft" class="Button">

                                    <input type="submit" name="Editor$Edit$lkbCancel" value="取消"
                                           onclick="return CancelPost();" id="Editor_Edit_lkbCancel" class="Button">
                                </div>
                                <div style="clear:both;"></div>
                                <span id="tip_posging"
                                      style="padding-left:20px;color:red; vertical-align: middle;"></span>
                                <div style="padding-bottom:10px;margin-top:10px;">

                                </div>
                            </div>

                        </div>
                    </div>

                    <span id="currentPostId" style="display:none;"></span>


                    <script type="text/javascript">
                        $(function () {
                            if (isEdit) {
                                document.getElementById('Editor_Edit_txbTitle').focus();
                                if (currentUseEditor == 1) {
                                    var editor1 = document.getElementById(currentEditorId);
                                    if (editor1.IsReady) CuteEditor_OnInitialized(editor1);
                                }
                                setInterval(localPreserver.saveDraftBody, 10000);
                                localPreserver.showViewTip();
                            }

                        });
                    </script>


                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <div id="blog_top_nav_block">
        <div id="site_nav">
            «<a href="http://www.cnblogs.com/">网站首页</a><a href="http://home.cnblogs.com/">园子</a><a
                href="http://news.cnblogs.com/">新闻</a><a href="https://q.cnblogs.com/">博问</a><a
                href="https://ing.cnblogs.com/">闪存</a><a href="http://wz.cnblogs.com/">收藏</a><a
                href="http://zzk.cnblogs.com/my?app=Blogpost">搜索</a>
        </div>
        <div id="login_area">
            <span id="span_userinfo"><a id="lnkBlogUrl" href="http://home.cnblogs.com/u/ryn521/">花沐</a> · <a
                    href="http://msg.cnblogs.com/" target="_blank" id="lnk_site_msg">短消息</a> · <a
                    href="http://passport.cnblogs.com/logout.aspx?ReturnURL=http://www.cnblogs.com/ryn521/"
                    onclick="return confirm(&#39;确认要退出登录吗?&#39;)">退出</a></span>
        </div>
        <div class="clear"></div>
    </div>
    <table id="Footer" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
        <tr>
            <td colspan="2">
                <div>
                    <a href="http://www.cnblogs.com/ContactUs.aspx">联系我们</a> <a
                        href="http://space.cnblogs.com/forum/public">反馈问题</a> @2017&nbsp;<a id="lnkSite"
                                                                                            href="http://www.cnblogs.com/">博客园</a>
                    &nbsp;技术改变世界
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</form>
<script type="text/javascript">
    GetNewMsgCount();
</script>


</body>
</html>