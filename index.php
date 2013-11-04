<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>UP Studios 上游动漫</title>
    <meta name="keywords" content="UP Studios 上游动漫" />
    <meta name="Descriptions" content="UP Studios is a creative studio dedicated in creating extraordinary brands that bring joy to kids of all ages." />
    <link rel='stylesheet' href='css/main.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/jquery.fancybox.css' type='text/css' media='all' />
    <!--[if IE]>
    <link rel='stylesheet' href='css/ie.css' type='text/css' media='all' />
    <![endif]-->
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
    <div class="lang"><a href="index-zh.php">中文</a></div>
    <nav>
        <a class="active" href="#">Our Story</a>
        <a href="#">PORTFOLIO</a>
        <div class="logo"><img src="img/up.png" /></div>
        <a href="#">CAREERS</a>
        <a href="#">CONTACT US</a>
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
                    <h4>UP Studios creates outstanding characters, stories and brands that bring joy to kids and kids-at-heart.</h4>
                    <p>Founded by award-winning creator and entrepreneur
                        Trevor Lai, UP Studios produces best-selling storybooks,
                        toys, collectible merchandise, digital media products
                        and animated content starring original characters and
                        stories developed entirely in-house. UP Studios has
                        helped create unique brand ambassadors and marketing
                        campaigns for world-renowned brands.</p>
                </div>

                <div id="about_cube_face2" class="about_trevor">
                    <h5>Trevor Lai, CEO and Chief Creative Officer</h5>

                    <p>Trevor Lai is an award-winning author, illustrator and entrepreneur
                        who published his first book at the age of 17. Lai has written and
                        illustrated more than 10 books for young readers, and produced a
                        wide range of products based on his creations, including plush toys,
                        vinyl collectibles and large-scale event displays. Prior to founding
                        UP Studios, Lai was also the Vice President of an international branding
                        and design firm overseeing projects from North America to China,
                        and is a featured speaker at many events around the world.
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
                    <h3>Super BOOMi</h3>
                    <div class="desc">
                        BOOMi uses his imagination to create adventures with his friends and his adorable puppy, Bibop. BOOMi believes he can be anything in the world - a superhero, a racecar driver, an astronaut - but his teacher, Mr. Hong, just wishes he would be a good student. BOOMi and Bibop have been transformed into popular designer toys, an app used by fans in 90 countries and will soon be starring in a CG-animated series produced by UP Studios.
                    </div>
                    <div class="link">
                        Visit BOOMi and Bibop online at<br />
                        <a href="http://www.superboomi.com" target="_blank">www.SuperBOOMi.com</a>
                    </div>
                </div>
            </div style>
            <div class="protfolio_item">
                <div class="left">
                    <img src="img/pb_piggy.gif" />
                </div>
                <div class="right">
                    <h3>Piggy in Love</h3>
                    <div class="desc">
                        Piggy in Love is a beloved book series about the power of love. Written in the charming spirit of stories like The Little Prince and brought to life vividly through expansive watercolour paintings, Piggy in Love's journey to discover if true love exists has touched the hearts of readers young and old. UP Studios also produced animated Piggy stickers for messaging services; to date, more than 20 million stickers have been downloaded by users in China alone, and we are now developing new stickers and apparel featuring Piggy and friends. The book series has been published in bilingual (Chinese and English) editions, and international rights are now available.
                        UP Studios.
                    </div>
                    <div class="link">
                        Visit Piggy online at <a href="http://www.piggyinlove.com" target="_blank">Piggyinlove.com</a>
                    </div>
                </div>
            </div>

            <div class="protfolio_item">
                <div class="left">
                    <img src="img/pb_kerry.png" />
                </div>
                <div class="right">
                    <h3>Kerry Kangaroo</h3>
                    <div class="desc">
                        Kerry Kangaroo is the official mascot for the acclaimed master-planned development, Kerry Parkside. Working in close collaboration with the developer, Kerry Properties, Trevor Lai led a year-long campaign that attracted thousands of schoolchildren from 13 international and local schools to participate in creative workshops and art contests. The launch event for Kerry Kangaroo featured the world’s first “colouring cars”, which Trevor designed for the Mercedes-Benz SMART brand.
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
                    <h3>Peter Bear</h3>
                    <div class="desc">
                        Peter Bear is the adorable ambassador of The Peninsula Hotel. Trevor Lai wrote, illustrated and oversaw all production aspects of the first bilingual children's book featured in the renowned hotel brand's boutique. He also designed a special edition plush toy for Peter Bear, which became the fastest-selling gift item for kids after it was launched in a series of events with the author at The Peninsula Shanghai. 
                    </div>
                </div>
            </div>

            <div class="protfolio_item">
                <div class="left">
                    <img src="img/pb_tomo.gif" />
                </div>
                <div class="right">
                    <h3>Tomo the Brave</h3>
                    <div class="desc">
                        Tomo the Brave is a new series for young readers starring the little explorer and inventor, Tomo. Launched as an interactive storybook app, Tomo the Brave has endeared families with its inspiring themes of courage, friendship and caring for nature. Tomo was created and written by Trevor Lai, featuring the beautiful illustrations of Matt Kaufenberg, while the enchanting storybook app was designed and produced by UP Studios.
                    </div>
                </div>
            </div>

            <div class="protfolio_item">
                <div class="left">
                    <img src="img/pb_yaoyao.png" height="80%" width="auto" />
                </div>
                <div class="right">
                    <h3>Yao Yao for Yew Chung International School</h3>
                    <div class="desc">
                        Yew Chung International School is one of the most prestigious grade school education institutions in China, and UP Studios was honoured to create a welcome package and activity book for their students. In addition to bringing the school's mascot Yao Yao to life, UP Studios also designed games and activities for a printed book distributed to thousands of kids and parents.
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
        <h3>UP Where We Belong</h3>
        <p>At UP Studios, our team is comprised of talented people with diverse skills,
            ranging from 2-D artists and 3-D experts to writers and multimedia producers.</p>
        <p>Each team member brings different skillsets, yet we share the same passion:
            The desire to inspire our audiences, our families, each other and ourselves.</p>
        <p>Make every day more meaningful by working on something you love. If you are
            creative, talented, self-motivated and eager to learn, step right up!</p>
        <p>Send us your CV and portfolio to <a href="maito:hr@upstudios.cn">hr@upstudios.cn</a></p>
        <div class="careers_list">
        <div class="careers_item">
            <div class="careers_header"><span>SEE COMPIETE<br />INFORMATION</span>Marketing & Sales Manager</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>Job Description</h5>
                    <ul>
                        <li>Work in marketing team, and accept professional training. Promote brand via cooperation with all kinds of partners, including medias, press, film producers, artists, and APP developers.</li>
                    </ul>
                    <h5>Main Responsibilities</h5>
                    <ul>
                        <li>Marketing: create and update all online and offline marketing channels; manage new media (Sina Weibo, WeChat etc.) maintenance and promotion.</li>
                        <li>Brand Promotion: plan and implement the promotion projects of brands and products, and deliver reports to senior management.</li>
                        <li>Identify, contact and manage sales partners to increase sales of company's products across multiple channels, including online retail and bricks-and-mortar retail.</li>
                        <li>Lead 1 - 2 direct reports to execute promotions according to plan and achieve targeted results.</li>
                    </ul>
                    <h5>Basic Qualifications</h5>
                    <ul>
                        <li>  College degree or above, majors in news broadcasting, public relations, Chinese, marketing are preferably considered, 1 year experience in internet marketing.</li>
                        <li>Skilled in Chinese and English communication, experienced in negotiating contracts and sales agreements with suppliers and partners; basic knowledge of new media marketing is a must.</li>
                        <li>Proactive, careful, and responsible. Excellent ability to learn and negotiate for win-win results. Teamwork spirit and ability to execute are essential.</li>
                        <li>Positively and profitably manage the relationship with retail partners.</li>
                        <li>Must organize and name files with complete accuracy to improve production efficiency.
                        </li>
                    </ul>
                    <h5>Industry </h5>
                    <ul>
                        <li>Entertainment, Animation, Marketing</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>SEE COMPIETE<br />INFORMATION</span>Translator (of mainly literature works or scripts)</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>Job Description</h5>
                    <ul>
                        <li>Translate and refine writing in English and Chinese.</li>
                        <li>Translate and write scripts.</li>
                    </ul>
                    <h5>Main Responsibilities</h5>
                    <ul>
                        <li>Proofread the writing for daily bilingual marketing materials.</li>
                        <li>Fulfill the tasks assigned by manager.</li>
                        <li>Ensure high-quality proofreading and translation.</li>
                        <li>Collect and arrange translation materials.</li>
                        <li>Negotiate and collaborate with team members.</li>
                        <li>Take part in professional training to improve skills.</li>

                    </ul>
                    <h5>Basic Qualifications</h5>
                    <ul>
                        <li>Bachelor degree or above, TEM-8 or equivalent skill; loosen requirements for those with editing or script
                            translating experience.</li>
                        <li>Skilled in translating and proofreading, quick in understanding and self-expression; experience in design or
                            animation industry is preferred.</li>
                        <li>Basic knowledge of popular animation themes and production workflow.</li>
                        <li>Quick and logical thinking, conscientious, strong eye for details.</li>
                        <li>Proficient in Microsoft Office.</li>

                    </ul>
                    <h5>Industry </h5>
                    <ul>
                        <li>Entertainment, Animation, Branding</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>SEE COMPIETE<br />INFORMATION</span>Key Animator</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>Job Description</h5>
                    <ul>
                        <li>Create key frames. </li>
                    </ul>
                    <h5>Main Responsibilities</h5>
                    <ul>
                        <li>Deliver high-quality creative ideas and drawings on time in the required style. </li>
                    </ul>
                    <h5>Basic Qualifications</h5>
                    <ul>
                        <li>Excellent art skills, related experience is required.</li>
                        <li>Able to accurately understand storyboards, and independently create key frames according to storyboards.</li>
                        <li>Able to draw cute and detailed characters and props. Your published portfolio is a plus.</li>
                        <li>Graduate of art or design-related school program.</li>
                        <li>Enjoy working with creative people under management, disciplined, responsible.</li>

                    </ul>
                    <p>Note: Your portfolio should include original comic strip showing narrative ability and cute character design. </p>
                    <h5>Industry </h5>
                    <ul>
                        <li>Entertainment, Animation, Marketing</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>SEE COMPIETE<br />INFORMATION</span>3D Lighter and Render</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>Job Description</h5>
                    <ul>
                        <li>Create evocative and believable lighting for 3D sets and animation and rendering.
                        </li>
                    </ul>
                    <h5>Main Responsibilities</h5>
                    <ul>
                        <li>Render the animation up to high quality and stylistic requirements.</li>
                    </ul>
                    <h5>Basic Qualifications</h5>
                    <ul>
                        <li>Proficiency in 3DsMax, MAYA, PS and prevailing rendering software; skilled in designing sets, dealing with
                            texture and lighting, and handling colors, shadows and ambience.</li>
                        <li>Drawing ability is required; animation production skillset is a plus.</li>
                        <li>At least 1 to 3 years working experience in animation company or studio is required.</li>
                        <li>Proactive problem-solver; strong eye for attention to detail, exceptional creative flair for using lighting  to
                            evoke emotions and create strong moods; enthusiastic to learn and negotiate; prepared to work hard and
                            develop a long-term career with UP studios.</li>
                        <li> Must organize and name files with complete accuracy to improve production efficiency.</li>

                    </ul>
                    <h5>Industry </h5>
                    <ul>
                        <li>Entertainment, Animation, Branding</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>SEE COMPIETE<br />INFORMATION</span>Animation Modeler</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>Job Description</h5>
                    <ul>
                        <li>Create CG models and apply textures to characters, buildings and props.</li>
                    </ul>
                    <h5>Main Responsibilities</h5>
                    <ul>
                        <li>Create CG models and apply textures up to high quality and style requirements.</li>
                    </ul>
                    <h5>Basic Qualifications</h5>
                    <ul>
                        <li>College degree or above, knowledge of and interest in animation industry.</li>
                        <li>Familiar with art design and workflow in animated television and film.</li>
                        <li>Good at designing and 3D modeling characters, sets and buildings. Must have discipline to create models with high accuracy, and organize and name files with complete accuracy to improve production efficiency.</li>
                        <li>Proficiency in 3DsMax, MAYA, PS and other related software.</li>
                        <li>Strong eye for attention to detail; enthusiastic to learn and negotiate; prepared to work hard and
                        <li>develop a long-term career with UP studios.</li>

                    </ul>
                    <h5>Industry </h5>
                    <ul>
                        <li>Entertainment, Animation, Branding</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>SEE COMPIETE<br />INFORMATION</span>Creative Writer (Chinese)</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>Job Description</h5>
                    <ul>
                        <li>Independently write and/or edit children’s animation scripts.</li>
                        <li>Write series synopsis, dramatic plots, and compelling dialogue that matches the character personalities.</li>
                        <li>Vividly describe characters and highlight themes of different kinds of stories.</li>
                    </ul>
                    <h5>Main Responsibilities</h5>
                    <ul>
                        <li>Responsible for script writing, including research, material collecting, outline and storyboard input.
                        <li>Revise script after collaboration and negotiation with animators and director.</li>
                    </ul>
                    <h5>Basic Qualifications</h5>
                    <ul>
                        <li>Bachelor degree or above in script, film literature or related field.</li>
                        <li>Interested in creating scripts for children animation.</li>
                        <li>Good at writing stories that are creative, humorous, vivid in detail; able to handle long or short story of
                            different style; experience in writing books and/or scripts for animation TV and film is a must.</li>
                        <li>Highly creative; deep understanding of animation shooting terms; able to create an original script up to high
                            quality requirements.</li>
                        <li>Collaborative spirit and strong teamwork ability are required.</li>
                        <li>Able to appreciate modern animation techniques and eager to learn.</li>
                        <li>Working command of spoken English; overseas working experience is an advantage.</li>

                    </ul>
                    <h5>Industry </h5>
                    <ul>
                        <li>Entertainment, Animation, Branding</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>SEE COMPIETE<br />INFORMATION</span>Digital Content Creator and Editor</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>Job Description</h5>
                    <ul>
                        <li>Responsible for collecting information and images, editing and proofreading the content on the websites.</li>
                        <li>Responsible for website management and growing traffic numbers for our company's various websites.</li>
                        <li>Edit and upload new content daily; edit copywriting and production information for websites.</li>
                        <li>Collect and deal with the feedback from website viewers.</li>
                        <li>Provide assistance for online promotion.</li>

                    </ul>
                    <h5>Main Responsibilities</h5>
                    <ul>
                        <li>Plan online activities on official websites, Sina Weibo and other social networks , make feasible plans and
                            ensure their implementation.</li>
                        <li>Pick topics for content on websites, Sina Weibo and WeChat; edit and update the information on websites.</li>
                        <li>Maintain websites to company’s requirements; feed back problems in time and solve problems independently.</li>
                        <li>Make regular data analysis and write reports.</li>
                        <li>Proficiency in using cameras, photography equipment and video postproduction.</li>
                        <li>Must be able to efficiently and accurately collect, sort and label images and documents compiled from research.</li>
                    </ul>
                    <h5>Basic Qualifications</h5>
                    <ul>
                        <li>At least 2 years working experience in a related position or industry.</li>
                        <li>Fluent in Chinese editing and writing. Basic English understanding is a must.</li>
                        <li>Ability to plan and implement specific topics; knowledge of Internet and network promotion.</li>
                        <li>Love creative writing and strategic planning.</li>
                        <li>Proficient knowledge of Premier, Photoshop, AE and other image and video editing tools.</li>
                        <li>Proficiency in Excel, Word, PPT.</li>
                        <li>Strong sense of responsibility; ability to execute and ability to work under pressure.</li>
                        <li>Experience in photographing products and events is preferred.</li>

                    </ul>
                    <h5>Industry </h5>
                    <ul>
                        <li>Entertainment, Animation, Branding</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>SEE COMPIETE<br />INFORMATION</span>Flash Animator</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>Job Description</h5>
                    <ul>
                        <li>Design and create Flash animation.</li>
                        <li>Composite Flash animation.</li>
                    </ul>
                    <h5>Main Responsibilities</h5>
                    <ul>
                        <li>Creatively design and develop Flash animation.</li>
                        <li>Able to make demo videos and design Flash websites.</li>
                        <li>Able to work in with programmer, making Flash animation compatible with multimedia.</li>
                        <li>Cooperate with layout artists to ensure a high-quality design.</li>
                        <li>Make code standard and ensure good quality.</li>
                    </ul>
                    <h5>Basic Qualifications</h5>
                    <ul>
                        <li>College degree or above in art, animation or computer field.</li>
                        <li>Love for animation industry, art skills, and creativeness.</li>
                        <li>Proficiency in Flash, Illustrator/CorelDraw, command of After Effects and Premiere an advantage.</li>
                        <li>Able to independently design animation and art, including Flash title sequences, online advertisements, flash
                            of product demonstrations, Flash videos and media interfaces.</li>
                        <li>Must be efficient, a good communicator, have strong teamwork spirit.</li>
                        <li>At least 2 years related working experience.</li>
                        <li>Must organize and name files with complete accuracy to improve production efficiency.</li>

                    </ul>
                    <h5>Industry </h5>
                    <ul>
                        <li>Entertainment, Animation, Branding</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>SEE COMPIETE<br />INFORMATION</span>Special Effects Designer (Adobe AE Specialist)</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>Job Description</h5>
                    <ul>
                        <li>Responsible for animation post-production.</li>
                    </ul>
                    <h5>Main Responsibilities</h5>
                    <ul>
                        <li>Create special effects for animation to enhance action, sets and characters.</li>
                    </ul>
                    <h5>Basic Qualifications</h5>
                    <ul>
                        <li>Bachelor degree in animation, broadcasting, art, advertising or related field.</li>
                        <li>Excellent skills in compositing and coloring, proficiency in keying, retouching, 2D and 3D tracing.</li>
                        <li>Proficient in Adobe After Effect, PS, PR, AI and at least 1 kind of software among Final Cut Pro, Smoke,
                            Flame, Nuke and Shake. Experience in special effects compositing and basic command of Maya, 3DMax
                            would be preferably considered.</li>
                        <li>Good command of graphics and music; deep understanding of visual effect.</li>
                        <li>Good at making special effect and executing script.</li>
                        <li>Reliability, ability to work under pressure, teamwork spirit, sense of responsibility, ability to learn, work
                            independently, good professional ethics.</li>
                        <li>At least 3 years experience of editing videos, proficiency in Mac OS X and PC nonlinear system.</li>
                        <li>Must organize and name files with complete accuracy to improve production efficiency.</li>

                    </ul>
                    <h5>Industry </h5>
                    <ul>
                        <li>Entertainment, Animation, Branding</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>SEE COMPIETE<br />INFORMATION</span>3D Animation Project Manager</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>Job Description</h5>
                    <ul>
                        <li>Supervise production and manage timeline and production workflow of an animation project from beginning
                            to completion.</li>
                        <li>Collect and arrange data of successful cases, techniques and resource materials.</li>
                    </ul>
                    <h5>Main Responsibilities</h5>
                    <ul>
                        <li>Manage and supervise animation projects including Flash and 3D animation.</li>
                        <li> Responsible for entire project’s scheduling, on-time delivery, high quality standards and managing approvals
                            process efficiently for the director.</li>
                        <li>Distribute tasks of project production and solve all related problems.</li>
                    </ul>
                    <h5>Basic Qualifications</h5>
                    <ul>
                        <li>Expert knowledge of 3D production workflow. Must be familiar with the entire workflow including plan,
                            script, design and production; able to establish and manage the workflow.</li>
                        <li>Manage team and supervise 3D animation production.</li>
                        <li>Art-related major, good art skills, proficiency in 3DMAXS, MAYA or related software.</li>
                        <li>At least 3 years experience in rendering and producing 3D animation, 1 year experience as director or senior
                            project manager.</li>
                        <li>Proficiency in creative team management.</li>
                        <li>Excellent Chinese communication skills. English communication skills is a plus.</li>

                    </ul>
                    <h5>Industry </h5>
                    <ul>
                        <li>Entertainment, Animation, Branding</li>
                    </ul>
                    <div class="close"></div>
                </div>
            </div>
        </div>
        <div class="careers_item">
            <div class="careers_header"><span>SEE COMPIETE<br />INFORMATION</span>Rigger (Maya specialist)</div>
            <div class="careers_body">
                <div class="careers_body_inner">
                    <h5>Job Description</h5>
                    <ul>
                        <li>Rig characters, sets and props with Maya.</li>
                    </ul>
                    <h5>Main Responsibilities</h5>
                    <ul>
                        <li>Rig characters, sets and props.</li>
                    </ul>
                    <h5>Basic Qualifications</h5>
                    <ul>
                        <li>College degree or above in art or related field.</li>
                        <li>At least 2 years working experience with Maya, 3 years rigging experience.</li>
                        <li>Proficiency in Maya Animation, good knowledge of attributes and usage mode of Deformer, as well as mel,
                            function node and expression programming.</li>
                        <li>Expert knowledge of skeletal structure and law of muscle movement; able to associate, analyze logically and
                            accurately understand storyboards.</li>
                        <li>Excellence in rigging; astute eye for fundamental anatomy and motion principles.</li>
                        <li>Deliver high-quality rigging work on time and up to high quality standards.</li>
                        <li>Management experience of 3D or 2D animation production is a plus; command of English is advantageous.</li>
                        <li>Proactive and responsible; strong teamwork spirit and willingness to work hard.</li>

                    </ul>
                    <h5>Industry </h5>
                    <ul>
                        <li>Entertainment, Animation, Branding</li>
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
            <h3>If you are interested in licensing one of our properties, or would like to
                partner with UP Studios to create an original franchise for your brand,
                please send us a message detailing your request:</h3>
            <div class="contact_form">
                <form id="contact_form" enctype="multipart/form-data" method="post" name="" action="data/wp-admin/admin-ajax.php?action=ninja_forms_ajax_submit">
                    <div class="form-body">
                        <input type="hidden" name="_ninja_forms_display_submit" value="1">
                        <input type="hidden" name="_form_id"  id="_form_id" value="1">
                        <div class="form_control">
                            <label for="ninja_forms_field_1">Your name:</label> <div class="form_item"><input type="text" name="ninja_forms_field_1" /></div>
                        </div>
                        <div class="form_control">
                            <label for="ninja_forms_field_2">Email Address:</label> <div class="form_item"><input type="text" name="ninja_forms_field_2" /></div>
                        </div>
                        <div class="form_control">
                            <label for="ninja_forms_field_3">Message:</label> <div class="form_item"><textarea name="ninja_forms_field_3"></textarea></div>
                        </div>
                        <div class="form_control form_submit">
                            <input class="submit" type="submit" value="Submit" />
                        </div>
                    </div>
                    <div class="form-thanks">Thanks! We will contact you soon!</div>
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