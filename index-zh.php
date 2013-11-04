<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>UP Studios 上游动漫</title>
    <meta name="keywords" content="UP Studios 上游动漫" />
    <meta name="description" content="UP Studios is a creative studio dedicated in creating extraordinary brands that bring joy to kids of all ages." />
    <link rel='stylesheet' href='css/main.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/cn.css' type='text/css' media='all' />
    <!--[if lt IE 9 ]>
    <script type="text/javascript">
        for(var a=['section','article','nav','header','footer','aside'],i=0,j=a.length;i<j;++i){document.createElement(a[i]);}
    </script>
    <![endif]-->
</head>
<body>
<img src="http://www.upstudios.cn/dev/img/bg.jpg" width="0" height="0" />
<img src="http://www.upstudios.cn/dev/img/whatup.png" width="0" height="0" />
<header>
    <div class="lang"><a href="index.php">English</a></div>
    <nav>
        <a class="active" href="#">公司简介</a>
        <a href="#">成功案例</a>
        <div class="logo"><img src="img/up.png" /></div>
        <a href="#">招聘信息</a>
        <a href="#">联系我们</a>
    </nav>
</header>
<div class="intro_video">
    <!--[if lt IE 10 ]>
    <script type="text/javascript" src="js/swfobject.js"></script>
    <script type="text/javascript">
        // JAVASCRIPT VARS
        var cacheBuster = "?t=" + Date.parse(new Date());
        // stage dimensions
        var stageW = '100%';
        var stageH = '100%';

        // PARAMS
        var params = {};
        params.bgcolor = "#006bcd";
        params.allowfullscreen = "true";
        params.allowScriptAccess = "always";
        params.scale = "noscale";
        //params.wmode = "transparent";

        // ATTRIBUTES
        var attributes = {};
        attributes.id = 'FlashContent';


        /* FLASH VARS */
        var flashvars = {};

        // PLAYER DIMENSIONS inside the SWF
        // if this are not defined then the player will take the stage dimensions defined in the "JAVASCRIPT VARS" section above
        flashvars.componentW = stageW;
        flashvars.componentH = stageH;	// if controller under is set to true then you must change this variable(substract the controller height)

        // if you don't define these then the one defined in the XML file will be taken in consideration
        flashvars.previewFilePath = "video.jpg";
        flashvars.videoFilePath = "img/opening.flv";

        // player settings(if not defined then the player will have the default settings defined in AS)
        flashvars.settingsXMLFile = "settings.xml";


        /** EMBED CODE **/
        swfobject.embedSWF("preview.swf"+cacheBuster, attributes.id, stageW, stageH, "9.0.124", "js/expressInstall.swf", flashvars, params, attributes);

    </script>
    <div id="FlashContent">
        <a href="http://www.adobe.com/go/getflashplayer">
            <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
        </a>
    </div>
    <![endif]-->
    <!--[if !IE]><-->
    <video autoplay="autoplay">
        <source src="img/opening.webm" type='video/webm' />
        <source src="img/opening.mp4" type='video/mp4' />
    </video>
    <!--<![endif]-->
</div>
    <section id="section1">
        <div class="about_wrap">
            <div id="about_cube_wrap">
            <div id="about_cube" class="cube-3d">
                <div id="about_cube_face1" class="about_up">
                    <h3>What's up?</h3>
                    <h4>致力于原创卡通形象、故事和品牌的上游动漫公司，立志为每一个孩子
                        和心怀童真的你带来欢乐与惊喜。</h4>
                    <p>
                        上游动漫由备受嘉奖的作家和企业家Trevor Lai所创立，主要产业包括畅
                        销故事书籍，玩具，收藏品，电子产品，以及围绕公司原创形象和故事
                        展开的动漫作品。上游动漫与多家世界著名企业合作，为它们设计了独
                        具风格的卡通形象大使，并策划多起宣传活动。
                    </p>
                </div>

                <div id="about_cube_face2" class="about_trevor">
                    <h5>Trevor Lai，行政执行总裁兼创意执行总监</h5>

                    <p>Trevor Lai 备受嘉奖的作家，插画家以及企业家，于17岁时发表了他的第一部作
                        品。Trevor Lai为年轻小读者们创作并绘制的作品多达10余部，由他原创的系列产
                        品，包括毛绒玩具，收藏品以及大型活动展览，取得了广泛好评。
                        在成立上游动漫之前，Trevor Lai是一家国际创意设计公司的副总裁，主要负责北
                        美洲与中国市场，曾在世界各地进行过多次精彩演讲，他的故事鼓舞了许多人。
                    </p>
                </div>
            </div>
            </div>

        </div>
        <footer>
            <ul class="friends">
                <li class="active"><a href="#"><img src="img/p_up.gif" /></a><div>UP</div></li>
                <li><a href="#"><img src="img/p_trevor.gif" /></a><div>Trevor Lai</div></li>
            </ul>
            <?php include('copyright.php');?>
        </footer>
    </section>

    <section id="section2">
        <div class="portfolio_wrap">
            <div class="star_animation"></div>
            <div class="protfolio_item" style="display: block;">
                <div class="left">
                    <img src="img/pb_boomi.png" height="80%" />
                </div>
                <div class="right">
                    <h3>超级 BOOMi</h3>
                    <div class="desc">
                        BOOMi用奇特的想象力为自己和宠物狗bibop带 来了一段又一段的冒险历程。BOOMi相信自己是 一位无所不能的超级英“熊”，既能变身为超人， 也可以成为赛车手或宇航员。可是，洪老师却一心 只想把他改造成一名听话的乖学生。目前BOOMi 和bibop的玩偶已经推出，一款相关手机app也在 全球90多个国家得到推广。BOOMi系列的CG电影， 由上游动漫出品，即将与您见面。
                    </div>
                    <div class="link">
                        更多BOOMi和bibop的最新消息，尽在 <br />
                        <a href="http://www.superboomi.com" target="_blank">www.SuperBOOMi.com</a>
                    </div>
                </div>
            </div style>
            <div class="protfolio_item">
                <div class="left">
                    <img src="img/pb_piggy.png" />
                </div>
                <div class="right">
                    <h3>猪猪追爱季 </h3>
                    <div class="desc">
                        猪猪追爱季系列图书充满了爱的正能量，深受读者 喜爱。文笔如《小王子》般清新动人，生动描述了 书中充满浪漫意境的插画。各个年龄层的读者们均 被猪猪探寻真爱的勇气深深打动。 由上游动漫为通信软件（微信、微博等）精心制作 的猪猪表情，目前仅在中国的下载量就已超过两千 万。更多新潮表情以及卡通服装正在陆续推出。 猪猪系列图书以中英双语出版，有意代理国际版权 者请与我们联系。
                    </div>
                    <div class="link">
                        更多猪猪的最新消息，尽在 <a href="http://www.piggyinlove.com" target="_blank">Piggyinlove.com</a>
                    </div>
                </div>
            </div>

            <div class="protfolio_item">
                <div class="left">
                    <img src="img/pb_kerry.png" />
                </div>
                <div class="right">
                    <h3>Kerry 袋鼠</h3>
                    <div class="desc">
                        Kerry袋鼠是著名综合发展项目——浦东嘉里城的官 方吉祥物。Kerry的原创者Trevor Lai与开发商携手 合作，开展了为期一年的活动，包括创意手工作坊 以及绘画竞赛，吸引了来自13个国际和当地学校的 小朋友们踊跃参加。 在这次活动中，Trevor为奔驰SMART品牌设计的全 世界首款彩绘小轿车也隆重登场。
                    </div>
                    <div class="gallery">
                        <a rel="kerry" href="pic/kerry1.jpg"><img src="pic/kerry1b.jpg" /></a>
                        <a rel="kerry" href="pic/kerry2.jpg"><img src="pic/kerry2b.jpg" /></a>
                        <a rel="kerry" href="pic/kerry3.jpg"><img src="pic/kerry3b.jpg" /></a>
                    </div>
                </div>
            </div>

            <div class="protfolio_item">
                <div class="left">
                    <img src="img/pb_peter.png" />
                </div>
                <div class="right">
                    <h3>半岛宝贝</h3>
                    <div class="desc">
                        半岛宝贝是半岛酒店的可爱形象大使。这是第一本入 驻知名酒店旗下精品店的儿童双语书籍，由Trevor Lai 编写，绘画插图，并全程监制。 Trevor Lai为半岛宝贝设计的纪念版毛绒玩具，自上 海半岛酒店发行后，一直居于销售最为火爆的儿童礼 品之列。
                    </div>
                </div>
            </div>

            <div class="protfolio_item">
                <div class="left">
                    <img src="img/pb_tomo.gif" />
                </div>
                <div class="right">
                    <h3>勇敢的 TOMO</h3>
                    <div class="desc">
                        勇敢的Tomo是面向年轻小读者们的一系列新作品， 主角Tomo是一位小探险家和发明家。这是一款互动 型故事书app，故事内容紧紧围绕着勇气，友谊和保 护自然的主题展开，深受广大家庭的欢迎。
                    </div>
                </div>
            </div>

            <div class="protfolio_item">
                <div class="left">
                    <img src="img/pb_yaoyao.png" height="80%" width="auto" />
                </div>
                <div class="right">
                    <h3>Yao Yao 耀中国际学校</h3>
                    <div class="desc">
                        耀中国际学校是一家权威教育机构，其新生欢迎礼 盒与互动书籍皆由上游动漫设计。为了让学校的吉 祥物Yao Yao融入学习生活，上游动漫精心创作了 一本包含游戏和益智活动的印刷读物，献给孩子和 家长们。
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <ul class="friends">
                <li class="active"><a href=""><img src="img/p_boomi.gif" /></a><div>BOOMi</div></li>
                <li><a href=""><img src="img/p_piggy.gif" /></a><div>PIGGY</div></li>
                <li><a href=""><img src="img/p_kerry.gif" /></a><div>KERRY KANGAROO</div></li>
                <li><a href=""><img src="img/p_petter.gif" /></a><div>PETER BEAR</div></li>
                <li><a href=""><img src="img/p_tomo.gif" /></a><div>TOMO</div></li>
                <li><a href=""><img src="img/p_yaoyao.gif" /></a><div>YAOYAO</div></li>
            </ul>
            <?php include('copyright.php');?>
        </footer>
    </section>


    <section id="section3">
        <div class="careers_wrap">
        <h3>加入我们的团队</h3>
        <p>在UP Studios，我们的团队由一群智慧创意的精英组成，包括二维设计师、三维设计剪接师还有
            多媒体制作人。虽然做着不同的工作却有着同样的内心渴望激发。激发我们的观众、我们的家
            庭、周边的人还有我们自己。我们每天都生活在太阳下，为什么不能把吸收到的光和热投入到自
            己热爱的工作中去呢？如果您是有创意的、有潜力的、自我激励的以及有热情从挑战中学习并一
            步步向上的志同道合者，请将您的简历还有个人文档发送到 <a href="maito:hr@upstudios.cn">hr@upstudios.cn</a></p>
        <div class="careers_list">
        <div class="careers_item">
            <div class="careers_header"><span>更多信息</span>市场营销主管</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>市场经理</h5>
                    <ul>
                        <li>作为市场经理，你将有机会和不同的设计师一起工作，并且将与不同的合作伙伴，包括媒体，出版社，电影制作商，艺术家，网站设计师、app开发商等合作推广公司各种品牌。</li>
                    </ul>
                    <h5>主要义务责任</h5>
                    <ul>
                        <li>与项目经理和设计师们沟通，推进工作，有效安排工作以及网络推广。</li>
                        <li>拥有很好的沟通能力，善于与工作团队，合作伙伴，供应商以及消费者交流。与供应商，合作商以及媒体建立友好的合作关系。 </li>
                    </ul>
                    <h5>最基本的条件要求</h5>
                    <ul>
                        <li>拥有流畅的中英文读，写，讲能力。</li>
                        <li>喜欢创作设计，动漫和启发不同年龄层的小孩子。</li>
                        <li>对图形和电子设计原理有中级的理解。</li>
                        <li>要有成熟的管理经验。</li>
                        <li>能够熟练运用办公软件如：Excel, Word, Powerpoint</li>
                        <li>对动漫和游戏产业要了解，如有同行业工作经验更好。</li>
                        <li>要懂新媒体，包括网站，电子商务，手机应用软件以及数字营销。</li>
                        <li>拥有自己主动积极解决问题的能力和充分的责任感。</li>
                        <li>有能力适应挑战快节奏工作环境。</li>
                        <li>拥有清晰的市场战略头脑，并且懂得市场管理的实用方法。</li>
                        <li>讲究细节，不停地要求自己进步。</li>
                        <li>喜欢跟有创意的人合作，并且直接跟管理层工作。</li>
                        <li>积极乐观，愿意在公司长期向上发展。</li>
                        <li>拥有较强的谈判能力。</li>
                        <li>愿意在上游动漫制定自己长期的职业生涯。</li>

                    </ul>
                    <h5>行业 </h5>
                    <ul>
                        <li>文化娱乐，动漫，市场</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>更多信息</span>专职英语翻译（文学性为主，剧本类）</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>职位描述</h5>
                    <ul>
                        <li>翻译、优化文字资料（中译英/英译中）。</li>
                        <li>翻译以及撰写各类故事剧本、脚本。 </li>
                    </ul>
                    <h5>主要义务责任</h5>
                    <ul>
                        <li>负责日常英语业务的校对任务。</li>
                        <li>接受主管分配的翻译任务。</li>
                        <li>保证校对质量和翻译质量。</li>
                        <li>翻译资料的整理收集、知识管理。</li>
                        <li>与翻译团队成员沟通协作。</li>
                        <li>参加部门内开展的专业培训与交流，提高翻译的专业水平。</li>

                    </ul>
                    <h5>最基本的条件要求</h5>
                    <ul>
                        <li>本科以上学历，英语专业八级或者八级相当，如有图书编辑、动画游戏类脚本翻译经验则可适当放宽专业要求。</li>
                        <li>良好的翻译与校对技能，优秀的理解力和表达能力，有动漫或设计行业经验者优先。</li>
                        <li>对主流动漫题材、动画制作运营常识有了解，知识广博者优先。</li>
                        <li>思维敏捷，逻辑性强，工作态度认真, 做事缜密细致。</li>
                        <li>熟练应用Microsoft Office软件。</li>

                    </ul>
                    <h5>行业 </h5>
                    <ul>
                        <li>文化娱乐，动漫，品牌</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>更多信息</span>漫画原画师</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>职位描述</h5>
                    <ul>
                        <li>负责原画作品创作。</li>
                    </ul>
                    <h5>主要义务责任</h5>
                    <ul>
                        <li>适应公司所定位的画风，及时按质按量的完成原创及绘制工作。 </li>
                    </ul>
                    <h5>最基本的条件要求</h5>
                    <ul>
                        <li>美术功底扎实，有一定的动漫相关创作的经验，特别是漫画创作经验。</li>
                        <li>理解力强，经过沟通交流能正确领会剧本分镜，画技完善，能够根据分镜头脚本独立完成作品。</li>
                        <li>擅长绘制与设计多细节的Q版动漫角色和道具。曾发表作品者优先。</li>
                        <li>美术或设计相关专业毕业。</li>
                        <li>能适应团队合作，服从管理，对自己的工作有高度责任感。</li>
                    </ul>
                    <p>指定个人作品内容：原创叙事性多格漫画，Ｑ版人物设计。 </p>
                    <h5>行业 </h5>
                    <ul>
                        <li>文化娱乐，动漫，品牌</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>更多信息</span>3D灯光渲染师</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>职位描述</h5>
                    <ul>
                        <li>对三维场景和动画进行灯光模拟，完成动画制作的渲染工作。 </li>
                    </ul>
                    <h5>主要义务责任</h5>
                    <ul>
                        <li>按主管要求完成动画制作的渲染工作。</li>
                    </ul>
                    <h5>最基本的条件要求</h5>
                    <ul>
                        <li>熟练掌握3DsMax、MAYA、等相关三维软件，以及最基本的PS等软件，熟练使用各种主流渲染器；具备较强的场景设计、材质灯光处理能力，对色彩，光影，气氛有很强的控制。</li>
                        <li>热爱绘画。有动画制作能力者优先。</li>
                        <li>在动画制作类公司（工作室）有一至三年以上工作经验。</li>
                        <li>工作积极性高，注重细节；能独到地运用灯光烘托情感，引起共鸣；学习能力强、善于沟通、吃苦耐劳、以长期服务公司为目标。</li>
                        <li>能对个人工作文件进行细致整理与命名，以提高工作效率。</li>

                    </ul>
                    <h5>行业 </h5>
                    <ul>
                        <li>文化娱乐，动漫，品牌</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>更多信息</span>动漫建模师</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>职位描述</h5>
                    <ul>
                        <li>负责为卡通人物，建筑及装饰物等制作模型、贴图。 </li>
                    </ul>
                    <h5>主要义务责任</h5>
                    <ul>
                        <li>按要求完成模型、贴图的制作</li>
                    </ul>
                    <h5>最基本的条件要求</h5>
                    <ul>
                        <li>大专及以上学历，了解并热爱动漫行业； </li>
                        <li>熟悉游戏行业美术设计及工作流程； </li>
                        <li>热爱绘画，具备较强的的美术功底； </li>
                        <li>擅长Q版人物，背景，建筑的3d建模设计； </li>
                        <li>熟练掌握3DsMax、MAYA、等相关三维软件，以及最基本的PS等软件；</li> 
                        <li>有团队合作精神、有学习能力，适应能力强、善于沟通、吃苦耐劳、以长期服务公司为目标。</li>

                    </ul>
                    <h5>行业 </h5>
                    <ul>
                        <li>文化娱乐，动漫，品牌</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>更多信息</span>动画编剧</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>职位描述</h5>
                    <ul>
                        <li>独立完成少儿动漫、动画剧本创作。</li>
                        <li>整理提纲，按照不同角色的性格设计戏剧性情节和精彩台词。</li>
                        <li>赋予生动语言以塑造典型人物和展现故事主题。 </li>
                    </ul>
                    <h5>主要义务责任</h5>
                    <ul>
                        <li>负责动画剧本的编写，包括为动画剧本搜集资料，撰写故事大纲、分场大纲及剧本、分镜头脚本等。</li>
                        <li>与原画、动画等各部门合作，沟通与修改剧本，使其在动画中有更好的表现力</li>
                    </ul>
                    <h5>最基本的条件要求</h5>
                    <ul>
                        <li>编剧、影视文学等相关专业本科以上学历。</li>
                        <li>对写少儿动画剧本创作感兴趣。</li>
                        <li>擅长故事编写，思维活跃、文字幽默、作品故事生动，能驾驭长短篇不同类型的故事编创，要求有动画片、漫画编剧等相关工作经验。</li>
                        <li>想象力丰富，对动画漫画镜头语言深度了解；能按照公司要求编写原创动画剧本，赋予生动语言以塑造典型人物和展现故事主题。</li>
                        <li>具备合作精神与很强的团队工作能力。</li>
                        <li>具备良好的对现代动画的艺术审美能力与学习能力。</li>
                        <li>有一定的英语会话能力，有国际动画制作经验者优先。</li>

                    </ul>
                    <h5>行业 </h5>
                    <ul>
                        <li>文化娱乐，动漫，品牌</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>更多信息</span>网站编辑</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>职位描述</h5>
                    <ul>
                        <li>负责网站相关栏目/频道的信息搜集、编辑、审校等工作。</li>
                        <li>对网站内容进行管理，并对网络访问者进行积极健康的引导，提高访问量。</li>
                        <li>负责网站内容的更新、编写和上传；编写网站宣传资料及相关产品资料。</li>
                        <li>收集、研究和处理网络读者的意见和反馈信息。</li>
                        <li>协助开展网络营销推广工作。</li>


                    </ul>
                    <h5>主要义务责任</h5>
                    <ul>
                        <li>负责网站、微博等线上活动的策划，并制定出可执行的方案计划，并严格执行。</li>
                        <li>负责公司网站内容、微博的选题方向，管理、维护、更新网站相关栏目的信息收集、编辑等工作。</li>
                        <li>达成公司对网站的各项指标，能对网站运营过程中出现的问题及时反馈并能独立解决此过程中出现的相关问题。</li>
                        <li>定期完成相关的数据分析和报告。 </li>
                        <li>要能够熟练运用相机以及拍摄工具，并且能够成熟进行视频后期制作。</li>
                        <li>要求能高效精确地收集整理图片、文字等工作资料。</li>
                    </ul>
                    <h5>最基本的条件要求</h5>
                    <ul>
                        <li>至少两年以上相关工作经验。
                        <li>较强的文字功底，良好的文字编辑、写作能力，基本的英语理解能力。</li>
                        <li>对互联网和网络推广有一定的认识，并有很强的学习能力。</li>
                        <li>热爱并专注于文案撰写/文字创意，企业策划工作。</li>
                        <li>熟练运用Premier、Photoshop、Ae或其他视频和图片编辑工具。</li>
                        <li>熟悉常规的办公软件，会简单的图文处理，会熟练使用Excel、PPT。</li>
                        <li>责任心强，能承受工作压力，具有较强的执行力。</li>
                        <li>有为公司产品或重大活动摄影经验者优先。</li>

                    </ul>
                    <h5>行业 </h5>
                    <ul>
                        <li>文化娱乐，动漫，品牌</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>更多信息</span>Flash 动画师</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>职位描述</h5>
                    <ul>
                        <li>负责Flash原动画设计、制作。</li>
                        <li>负责Flash动画的合成。</li>
                    </ul>
                    <h5>主要义务责任</h5>
                    <ul>
                        <li>负责Flash动画创意设计与制作。</li>
                        <li>独立完成Flash演示短片、Flash网站设计等制作。</li>
                        <li>能够与程序有效配合，将 Flash 动画与程序后台接口有效结合。</li>
                        <li>和平面设计师沟通协作，以确保设计的目标和结果都能够高品质的达成。</li>
                        <li>制定高标准的代码规范，控制质量。</li>
                    </ul>
                    <h5>最基本的条件要求</h5>
                    <ul>
                        <li>大专以上学历，美术、动画、计算机专业背景。</li>
                        <li>热爱动画，具备美术功底和优良的创新意识。</li>
                        <li>精通Flash动画制作技巧，能够熟练使用Flash、Illustrator或CorelDraw，会AfterEffects 和Premiere更好。</li>
                        <li>能够独立完成动画设计创意和美术设计工作，包括Flash片头、网络广告及Flash产品演示、Flash动画短片、多媒体界面设计等相关设计工作。</li>
                        <li>工作高效精益、条理清晰，具备较好的团队合作精神和较强的沟通能力。</li>
                        <li>两年以上相关工作经验。</li>
                        <li>能对个人工作文件进行细致整理与命名，以提高工作效率。</li>

                    </ul>
                    <h5>行业 </h5>
                    <ul>
                        <li>文化娱乐，动漫，品牌</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>更多信息</span>影视特效师</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>职位描述</h5>
                    <ul>
                        <li>动画后期制作。</li>
                    </ul>
                    <h5>主要义务责任</h5>
                    <ul>
                        <li>负责影视动画中的场景与角色后期特效制作。</li>
                    </ul>
                    <h5>最基本的条件要求</h5>
                    <ul>
                        <li>动漫、影视、美术、广告相关专业本科毕业。</li>
                        <li>对画面的合成与校色有扎实的技术基础, 精通抠像, 修图和2D、3D跟踪技术制作工作。</li>
                        <li>能熟练运用Adobe After Effect 、PS 、PR、 AI等Final CutPro、Smoke、Flame、Nuke、Shake和软件的其中一种以上的软件,有一定的特效合成工作经验等,并能简单运用Maya、ax等三维软件者优先。</li>
                        <li>具备良好的平面美术基础与良好的音乐感, 并在视觉表达方面提出自己的见解。</li>
                        <li>有比较强的特效制作能力与脚本执行能力。</li>
                        <li>诚信、有良好的团队合作意识及服务理念, 抗压能力强, 具有较强的责任感, 沟通能力学习能力, 能独立解决工作上的问题, 良好的职业道德及文化素养。</li>
                        <li>有三年以上视频剪辑工作制作经验, 精通苹果和PC非编系统。</li>
                        <li>能对个人工作文件进行细致整理与命名，以提高工作效率。</li>

                    </ul>
                    <h5>行业 </h5>
                    <ul>
                        <li>文化娱乐，动漫，品牌</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>更多信息</span>3D动画项目经理</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>职位描述</h5>
                    <ul>
                        <li>根据项目要求对负责项目进行全程监督与管理。 </li>
                        <li>负责优秀案例、技术及资源的整理。</li>
                    </ul>
                    <h5>主要义务责任</h5>
                    <ul>
                        <li>日常管理和监督动画项目（包括Flash和3D动画）的进行。</li>
                        <li>配合执行总监制定项目计划，为每一个动画项目制定时间表，确保设计团队高效率高质量地按照公司标准和进度完成工作。</li>
                        <li>分配项目工作并解决其他问题。</li>
                    </ul>
                    <h5>最基本的条件要求</h5>
                    <ul>
                        <li>熟练掌握3D动画制作流程，包括策划、剧本、造型、制作等全流程，并且有相当的操控能力。</li>
                        <li>负责团队的整合和3D动画项目的进程跟进。</li>
                        <li>美术相关专业，具备较深的艺术造诣，熟练应用3DMAXS、MAYA等相关软件。</li>
                        <li>三年以上3D动画渲染制作经验，一年以上3D动画主管或总监经验。</li>
                        <li>具备针对创意团队的管理经验。</li>
                        <li>出色的表达能力及与客户沟通技巧；擅长英语者优先。</li>


                    </ul>
                    <h5>行业 </h5>
                    <ul>
                        <li>文化娱乐，动漫，品牌</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>更多信息</span>市场营销专员</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>职位描述</h5>
                    <ul>
                        <li>作为市场专员/文案策划，你将进入市场团队，受到营销专业培训，与不同的合作伙伴，包括媒体，出版社，电影制
                            作商，艺术家，APP开发商等合作推广公司各种品牌。</li>
                    </ul>
                    <h5>主要义务责任</h5>
                    <ul>
                        <li>常规营销：拓展营销渠道；负责公司微博、微信等新媒体的维护和推广。</li>
                        <li>品牌拓展：策划并实施品牌以及相关产品的推广项目计划、撰写项目报告。</li>
                        <li>接洽营销商，通过多渠道促进公司产品销售，包括网上营销及实体店营销。</li>
                        <li>带领一至两个直属队员，进行策划推广和执行。</li>
                    </ul>
                    <h5>最基本的条件要求</h5>
                    <ul>
                        <li>大专以上学历，有一年以上的互联网方向市场经验，新闻传播、公共关系、中文、市场营销等相关专业优先。</li>
                        <li>具备中英文沟通能力，优秀的表达谈判能力，对新媒体营销有初步认知。</li>
                        <li>性格积极，学习能力强。具有良好的沟通能力和责任心，注重工作细节，团队意识及执行力强。</li>
                        <li>主动积极地维护与营销商的良好合作关系。</li>
                        <li>能对个人工作文件进行细致整理与命名，以提高工作效率。</li>

                    </ul>
                    <h5>行业 </h5>
                    <ul>
                        <li>文化娱乐，动漫，品牌</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>更多信息</span>Maya 绑定师</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>职位描述</h5>
                    <ul>
                        <li>使用Maya软件完成三维动画项目流程中角色、道具、场景的Rigging(绑定)工作。</li>
                    </ul>
                    <h5>主要义务责任</h5>
                    <ul>
                        <li>负责影视动画中的场景与人物角色的绑定工作。</li>
                    </ul>
                    <h5>最基本的条件要求</h5>
                    <ul>
                        <li>大专以上学历，绘画、及其它美术相关专业。</li>
                        <li>熟练使用MAYA软件两年以上，至少三年以上专案Rigging(绑定)经验。</li>
                        <li>熟练掌握Maya Animation模块，熟练掌握各Deformer的属性及使用方式，对mel、功能节点及表达式编写有一定的了解。</li>
                        <li>熟悉常规生物的骨骼架构、肌肉动态和运动方式，具有一定的联想、分析能力，能准确解读Storyboard所传递的信息。</li>
                        <li>能根据要求完成专案中Rigging(绑定)架构与规则的规划，擅长各种生物/角色的Rigging(绑定) ，具有一定的造型能力、良好的动态审视能力以及良好的艺术素养。</li>
                        <li>用Maya完成高质量的系统的Rigging(绑定)，高效地按时完成任务。</li>
                        <li>具三维或二维部门生产流程管理从业经验尤佳；懂英文者优先。</li>
                        <li>主动，负责，积极，善于沟通，有较强的团队协作能力，吃苦耐劳。</li>

                    </ul>
                    <h5>行业 </h5>
                    <ul>
                        <li>文化娱乐，动漫，品牌</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        </div>
        </div>

        <footer>
            <?php include('copyright.php');?>
        </footer>
    </section>

    <section id="section4">
        <div class="contact_wrap">
            <h3>如果您有意向代理我们任意一项产权, 或与上游动漫合作, 为
                您的品牌设计原创项目, 请与我们联系,并详细说明您的需求</h3>
            <div class="contact_form">
                <form id="contact_form" enctype="multipart/form-data" method="post" name="" action="data/wp-admin/admin-ajax.php?action=ninja_forms_ajax_submit">
                    <div class="form-body">
                        <input type="hidden" name="_ninja_forms_display_submit" value="1">
                        <input type="hidden" name="_form_id"  id="_form_id" value="1">
                        <div class="form_control">
                            <label for="ninja_forms_field_1">姓名:</label> <div class="form_item"><input type="text" name="ninja_forms_field_1" /></div>
                        </div>
                        <div class="form_control">
                            <label for="ninja_forms_field_2">邮箱:</label> <div class="form_item"><input type="text" name="ninja_forms_field_2" /></div>
                        </div>
                        <div class="form_control">
                            <label for="ninja_forms_field_3">留言:</label> <div class="form_item"><textarea name="ninja_forms_field_3"></textarea></div>
                        </div>
                        <div class="form_control form_submit">
                            <input class="submit" type="submit" value="发送" />
                        </div>
                    </div>
                    <div class="form-thanks">感谢您的留言!我们会尽快与您联系!</div>
                </form>
            </div>
        </div>

        <footer>
            <?php include('copyright.php');?>
        </footer>
    </section>

    <script src="js/modernizr.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/pos.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/jquery.queryloader22.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.motio.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/main.js"></script>
</body>
</html>