<?php get_header(); ?>

    <main class="section_about">
        <?php if( have_posts() ): ?>
            <?php while( have_posts() ):
                the_post();
            ?>
        <section class="page-about_header">
            <h3><?php the_title(); ?></h3>
            <?php get_template_part( 'template-parts/parts','scrolldown' ); ?>
        </section>
        <section class="page-about_main">
            <div class="parallax-bg parallax-bg1">
                <div class="parallax_wrapper parallax_wrapper1">
                    <h4>PROFILE</h4>
                    <div class="parallax_contents parallax_contents1">
                        <h5 class="profile_dt">名前</h5>
                        <p class="profile_dd">伊藤琢真</p>
                        <h5 class="profile_dt">性別</h5>
                        <p class="profile_dd">男</p>
                        <h5 class="profile_dt">生年月日</h5>
                        <p class="profile_dd">1992年4月4日</p>
                        <h5 class="profile_dt">年齢</h5>
                        <p class="profile_dd"><?php echo floor((date('Ymd') - 19920404) / 10000 ).'歳';?></p>
                        <h5 class="profile_dt">現住所</h5>
                        <p class="profile_dd">千葉県船橋市</p>
                        <h5 class="profile_dt">好きな言葉</h5>
                        <div class="plofile_dd">
                            <p class="profile_dd_p">私たちは、ホモ・ルーデンス<br class="br-res">（遊ぶ人）<br>
                            <small>（KOJIMA PRODUCTIONS様 Webページより）</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="parallax-bg parallax-bg2">
                <div class="parallax_wrapper parallax_wrapper2">
                    <h4>SKILL</h4>
                    <div class="chart_wrapper">
                        <canvas id="myRadarChart" width="350" height="350"></canvas>
                        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/skillChart.js"></script>
                    </div>
                    <h4>TOOLS</h4>
                    <div class="parallax_contents parallax_contents2">
                        <img class="usedTool_icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/zoom_icon.webp" alt="Zoom">
                        <p class="usedTool_paragraph">zoom</p>
                        <img class="usedTool_icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Teams_icon.webp" alt="Teams">
                        <p class="usedTool_paragraph">Microsoft Teams</p>
                        <img class="usedTool_icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/dreamweaver_icon.webp" alt="Dreamweaver">
                        <p class="usedTool_paragraph">Dreamweaver</p>
                        <img class="usedTool_icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/vscode_icon.webp" alt="VScode">
                        <p class="usedTool_paragraph">Visual Studio Code</p>
                        <img class="usedTool_icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/XD_icon.webp" alt="XD">
                        <p class="usedTool_paragraph">Adobe XD</p>
                        <img class="usedTool_icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/figma_icon.webp" alt="figma">
                        <p class="usedTool_paragraph">figma</p>
                        <img class="usedTool_icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/slack_icon.webp" alt="Slack">
                        <p class="usedTool_paragraph">slack</p>
                        <img class="usedTool_icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Trello_icon.webp" alt="Trello">
                        <p class="usedTool_paragraph">Trello</p>
                        <img class="usedTool_icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Sass_icon.svg" alt="Sass">
                        <p class="usedTool_paragraph">Sass</p>
                    </div>
                </div>
            </div>
            <div class="parallax-bg parallax-bg3">
                <div class="parallax_wrapper parallax_wrapper3">
                    <div class="parallax_wrapper3_container">
                        <h4>CAREER</h4>
                        <div class="parallax_contents parallax_contents3">
                            <p>
                                高校（普通科）卒業後、4年制大学（経済学部）へ進学するが、<br class="br-sp">
                                2年次で中退。
                            </p>
                            <div class="career_item">
                                <div class="career_item_title">
                                    <time>2013.12～2017.3</time>
                                    <h5>介護士（有料老人ホーム常駐）</h5>
                                </div>
                                <p>
                                    施設常駐介護士として勤務。<br>
                                    在職中に介護職員初任者研修（旧ヘルパー２級）修得。
                                </p>
                            </div>
                            <div class="career_item">
                                <div class="career_item_title">
                                    <time>2017.6～2020.2</time>
                                    <h5>施工管理技士の派遣技術者</h5>
                                </div>
                                <p>
                                    建設業の施工管理技術者として勤務。従事した現場は13か所。
                                </p>
                            </div>
                            <div class="career_item">
                                <div class="career_item_title">
                                    <time>2020.3～2021.3</time>
                                    <h5>外壁パネルの施工管理補助</h5>
                                </div>
                                <p>
                                    施工管理の補助として、いくつかの現場で施工検査、材料発注などの段取りに従事。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="parallax_wrapper3_container">
                        <h4>WHY DESIGNER</h4>
                        <div class="parallax_contents parallax_contents4">
                            <p>休職中に自分を見つめ直して見たところ、デザインやIT・Web業界の制作について、興味が有ることを自覚した。幼いころからPCを触ったことがあり、現在でも得意なため、制作と組み合わせられないかと思い、Webデザイナーを目指すようになりました。</p>
                        </div>
                    </div>
                    <div class="parallax_wrapper3_container">
                        <h4>HANDICAP</h4>
                        <div class="parallax_contents parallax_contents5">
                            <h5>ADHD（多動型）</h5>
                            <p>私は、あらゆる行動においては実行力がありますが、短期記憶が苦手です。<br>また、話の進み具合によっては追い付かず、聞き取れないことがあります。そのため、忘れ物が多く、少し前の記憶が飛んでしまうことがありますので、自分で聞いた話を文面化するようにし、都度確認するようにしています。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php endwhile; ?>
    <?php endif; ?>
    </main>
    
<?php get_footer(); ?>