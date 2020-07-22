
<?php
get_header();
?>

  <main class="body-content js-body-content">

        <header class="home-header">
          <div class="home-header__text">
            <h5 class="home-header__kicker">The</h5>
            <h1 class="home-header__title" itemprop="name"><span>Home </span><span>of </span><span>Afro Beats</span></h1>
            <div class="home-header__block">
            
              <div class="home-header__description">
                <p class="home-header__description-text">Promoting Afrobeats and Curating Premium Afro-inspired contents to the world.</p>
                <a href="#mythologies" class="home-header__description-link">Explore<span class="home-header__description-arrow"></span></a>
              </div>
            </div>
          </div>
          <figure class="home-header__hero">
            <img alt="Home of Afro Beats"
                title="Home of Afro Beats"
                class="home-header__image"
                sizes="(min-width: 960px) 50vw, 100vw" src="<?php bloginfo('template_directory');?>/images/cover/afrobeat.png">
          </figure>
        </header>

    <section class="home-catalog">
              <div class="catalog-index">
                <ul class="catalog-index__list">
                      <li class="catalog-index__item">
                      <a href="aztec-mythology/index.html" class="catalog-index__link"> <span class="catalog-index__title"> AfroBeat </span> 
                    <span class="catalog-index__arrow"></span></a>        </li>
                <li class="catalog-index__item">
                      <a href="<?php echo get_home_url(); ?>" class="catalog-index__link"> <span class="catalog-index__title"> Afrobeats </span> 
                    <span class="catalog-index__arrow"></span></a>        </li>
                  <li class="catalog-index__item">
                       <a href="egyptian-mythology/index.html" class="catalog-index__link"> <span class="catalog-index__title"> Afrofusion </span> 
                        <span class="catalog-index__arrow"></span>
            </a>        </li>
                    <li class="catalog-index__item">
            <a href="celtic-mythology/index.html" class="catalog-index__link">            <span class="catalog-index__title">Afro Gospel</span>
                    <span class="catalog-index__arrow"></span></a>        </li>  
                    <li class="catalog-index__item">
            <a href="<?php echo get_tag_link(200); ?>" class="catalog-index__link">            <span class="catalog-index__title">Bongo Flava</span>
                        <span class="catalog-index__arrow"></span>
            </a>        </li>
                    <li class="catalog-index__item">
            <a href="roman-mythology/index.html" class="catalog-index__link"> <span class="catalog-index__title"> Highlife 
                        <span class="catalog-index__arrow"></span>
            </a>        </li>
            
                    <li class="catalog-index__item">
            <a href="norse-mythology/index.html" class="catalog-index__link"> <span class="catalog-index__title"> Juju Music 
                        <span class="catalog-index__arrow"></span>
            </a>        </li>
            
                  
                    <li class="catalog-index__item">
            <a href="japanese-mythology/index.html" class="catalog-index__link">            <span class="catalog-index__title">Nollywood</span>
                        <span class="catalog-index__arrow"></span>
            </a>        </li>
                </ul>
              </div>
              <div class="home-catalog__text">
                <h5 class="home-catalog__kicker">BEST NEW</h5>
                <h2 class="home-catalog__title" id="mythologies">Music</h2>
              </div>

              <div class="catalog-carousel js-catalog-carousel">
              <?php
                $args = array(
                    'posts_per_page' => 10, 
                    'tag' => 'music'
                );
                $q = new WP_Query( $args);

                if ( $q->have_posts() ) {
                    while ( $q->have_posts() ) {
                    $q->the_post();        
                        get_template_part( 'template-parts/content-music' );
                    }
                    wp_reset_postdata();
                } 
                ?>
                </div>



              <div class="catalog-carousel js-catalog-carousel">
                      <article class="card-mythology" data-mythology="greek" itemscope itemtype="<?php echo get_home_url(); ?>" style="">
                          <a href="greek-mythology/titans/atlas/index.html" class="card-mythology__link">    <div class="card-mythology__text">
                            <div class="card-mythology__header">
                              <h6 class="card-mythology__kicker">AFROBEATS</h6>
                                  </div>
                            <h3 class="card-mythology__title" itemprop="name">WIZKID</h3>
                            <p class="card-mythology__description" itemprop="description">Explore Wizkid latest genres, music and videos here </p>
                          </div>
                          <div class="card-mythology__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
                            <img src="<?php bloginfo('template_directory');?>/images/non/davido.png"
                                alt="Greek Mythology" border="0"
                                class="card-mythology__image"
                                title="Afro beats"
                                itemprop="url">    </div>
                          </a>
                      </article>
                            <article class="card-mythology" data-mythology="norse" itemscope itemtype="<?php echo get_home_url(); ?>" style="transform:translateY(3em)">
                      <a href="greek-mythology/titans/coeus/index.html" class="card-mythology__link">    <div class="card-mythology__text">
                            <div class="card-mythology__header">
                              <h6 class="card-mythology__kicker">Afrobeats</h6>
                          
                            </div>
                            <h3 class="card-mythology__title" itemprop="name">DAVIDO</h3>
                            <p class="card-mythology__description" itemprop="description">Explore Davido's latest genres, music and videos here </p>
                          </div>
                          <div class="card-mythology__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
                            <img src="<?php bloginfo('template_directory');?>/images/non/victor.png"
                                alt="High Life"
                                title="High Life"
                                class="card-mythology__image"
                                itemprop="url">
                          </div>
                      </a></article>
                            <article class="card-mythology" data-mythology="celtic" itemscope itemtype="<?php echo get_home_url(); ?>" style="">
                      <a href="norse-mythology/titans/atlas/index.html" class="card-mythology__link">    <div class="card-mythology__text">
                            <div class="card-mythology__header">
                              <h6 class="card-mythology__kicker">Juju music</h6>
                          
                            </div>
                            <h3 class="card-mythology__title" itemprop="name">Shina Peters</h3>
                            <p class="card-mythology__description" itemprop="description">Explore new Peter's Juju genres , music and videos here.</p>
                          </div>
                          <div class="card-mythology__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
                            <img src="<?php bloginfo('template_directory');?>/images/non/shina.png"
                                alt="Juju Music"
                                title="Juju music"
                                class="card-mythology__image"
                                itemprop="url">
                          </div>
                      </a></article>
                            <article class="card-mythology" data-mythology="roman" itemscope itemtype="<?php echo get_home_url(); ?>" style="">
                      <a href="chinese-mythology/titans/atlas/index.html" class="card-mythology__link">    <div class="card-mythology__text">
                            <div class="card-mythology__header">
                              <h6 class="card-mythology__kicker">Bongo Flavo</h6>
                          
                            </div>
                            <h3 class="card-mythology__title" itemprop="name">Collabo BongoFlava</h3>
                            <p class="card-mythology__description" itemprop="description">Explore Bongo flava's genres, music and videos.</p>
                          </div>
                          <div class="card-mythology__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
                            <img src="<?php bloginfo('template_directory');?>/images/non/onyeka.jpg"
                                alt="Afro Gospel"
                                title="Afro Gospel"
                                class="card-mythology__image"
                                itemprop="url">
                          </div>
                      </a></article>
                            <article class="card-mythology" data-mythology="chinese" itemscope itemtype="<?php echo get_home_url(); ?>" style="">
                      <a href="egyptian-mythology/titans/atlas/index.html" class="card-mythology__link">    <div class="card-mythology__text">
                            <div class="card-mythology__header">
                              <h6 class="card-mythology__kicker">AFro fusion</h6>
                                </div>
                            <h3 class="card-mythology__title" itemprop="name">Burna Boy</h3>
                            <p class="card-mythology__description" itemprop="description">Explore Burna Boys's genres , music and videos . </p>
                          </div>
                          <div class="card-mythology__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
                            <img src="<?php bloginfo('template_directory');?>/images/non/burna.jpg"
                                alt="Afrofusion"
                                title="Afro Fusion"
                                class="card-mythology__image"
                                itemprop="url">
                          </div>
                      </a></article>
                            <article class="card-mythology" data-mythology="japanese" itemscope itemtype="<?php echo get_home_url(); ?>" style="">
                      <a href="roman-mythology/titans/atlas/index.html" class="card-mythology__link">    <div class="card-mythology__text">
                            <div class="card-mythology__header">
                              <h6 class="card-mythology__kicker">Highlife</h6>
                                </div>
                            <h3 class="card-mythology__title" itemprop="name">Victor Olaiya</h3>
                            <p class="card-mythology__description" itemprop="description">Explore Victor Olaiya's genres, music and videos </p>
                          </div>
                          <div class="card-mythology__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
                            <img src="<?php bloginfo('template_directory');?>/images/non/collabo.jpg"
                                alt="Bongo Flava"
                                title="Bongo Flava"
                                class="card-mythology__image"
                                itemprop="url">
                          </div>
                      </a></article>
                            <article class="card-mythology" data-mythology="egyptian" itemscope itemtype="<?php echo get_home_url(); ?>" style="">
                      <a href="japanese-mythology/titans/atlas/index.html" class="card-mythology__link">    <div class="card-mythology__text">
                            <div class="card-mythology__header">
                              <h6 class="card-mythology__kicker">nollywood</h6>
                                </div>
                            <h3 class="card-mythology__title" itemprop="name">Nollywood Videos</h3>
                            <p class="card-mythology__description" itemprop="description">Explore Nollywood' genres , music and videos </p>
                          </div>
                          <div class="card-mythology__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
                            <img src="<?php bloginfo('template_directory');?>/images/non/nollywood.jpg"
                                alt="Egyptian Mythology"
                                title="Nollywood"
                                class="card-mythology__image"
                                itemprop="url">
                          </div>
                      </a></article>
                            <article class="card-mythology" data-mythology="aztec" itemscope itemtype="<?php echo get_home_url(); ?>" style="transform:translateY(3em)">
                      <a href="celtic-mythology/titans/atlas/index.html" class="card-mythology__link">    <div class="card-mythology__text">
                            <div class="card-mythology__header">
                              <h6 class="card-mythology__kicker">Afrogospel</h6>
                        
                            </div>
                            <h3 class="card-mythology__title" itemprop="name">Onyeka Onwenu</h3>
                            <p class="card-mythology__description" itemprop="description">Explore Onyeka Onwenu's latest music and videos </p>
                          </div>
                          <div class="card-mythology__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
                            <img src="<?php bloginfo('template_directory');?>/images/non/onyeka.jpg"
                                alt="Aztec Mythology"
                                title="Afrobeat"
                                class="card-mythology__image"
                                itemprop="url">
                          </div>
                      </a></article>
              </div> 
    </section>
      
    <section class="home-updates">
        <div class="home-updates__text">
          <h2 class="home-deities__title" id="latest">LATEST</h2>
        </div>
        <ul class="home-stories__list">
          <?php echo do_shortcode('[lastest-post]'); ?>
        </ul>
        
    </section>


    <section class="home-legends">
          <div class="home-deities__text">
            <h5 class="home-deities__kicker">the origin story:</h5>
            <h2 class="home-deities__title" id="pantheons">Features</h2>
          </div>
          <div class="home-deities__cards">
              <article class="card-pantheon" itemscope itemtype="<?php echo get_home_url(); ?>">
          <a href="greek-mythology/history/history1.html" class="card-pantheon__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
            <img alt="History"
                title="History"
                class="card-pantheon__image"
                sizes="(min-width: 640px) 50vw, 100vw" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatar.jpg">
            </a>
          <div class="card-pantheon__text">
            <h3 class="card-pantheon__title">
              <a href="greek-mythology/history/history1.html" class="card-pantheon__link" itemprop="url">History of Afro beats</a>
            </h3>
              <div class="card-pantheon__author" itemprop="author" itemscope itemtype="<?php echo get_home_url(); ?>">
        <a href="#" class="card-pantheon__author-name" itemprop="url">          <span itemprop="name">Aberdeen Wright</span>
        </a>          <span class="card-pantheon__reading-time">11</span>
              </div>
            <p class="card-pantheon__description" itemprop="description">Explore the profile, works and achievements of top Afro Beat artists in Nigeria and Africa at large.</p>
          </div>
          <div class="card-pantheon__deities">
            <h5 class="card-pantheon__subtitle">Top Afro Beat Artists</h5>
            <ul class="card-pantheon__list">
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="egyptian-mythology/titans/atlas/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                        alt="Baldur, Norse God of Light"
                        title="Baldur, Norse God of Light"
                        class="card-deity__image lazyload"
                        itemprop="url"
                        loading="lazy"
                        >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Wizkid</h4>
              <p class="card-deity__subtitle" itemprop="description">Money miss road</p>
            </div>
        </a></article>
                </li>
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="egyptian-mythology/titans/coeus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                        alt="Baldur, Norse God of Light"
                        title="Baldur, Norse God of Light"
                        class="card-deity__image lazyload"
                        itemprop="url"
                        loading="lazy"
                        >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Naira Marley</h4>
              <p class="card-deity__subtitle" itemprop="description">Vulgar  King</p>
            </div>
        </a></article>
                </li>
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="egyptian-mythology/titans/crius/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="The Morrigan, Celtic Phantom Queen"
                      title="The Morrigan, Celtic Phantom Queen"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Tekno</h4>
              <p class="card-deity__subtitle" itemprop="description">Real guyz</p>
            </div>
        </a></article>
                </li>
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="egyptian-mythology/titans/gaia/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Lugh, Celtic God of Nobility"
                      title="Lugh, Celtic God of Nobility"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Adekunle</h4>
              <p class="card-deity__subtitle" itemprop="description">The sane artist</p>
            </div>
        </a></article>
                </li>
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="egyptian-mythology/titans/hyperion/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Cernunnos, Celtic God of the Wild"
                      title="Cernunnos, Celtic God of the Wild"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Teni</h4>
              <p class="card-deity__subtitle" itemprop="description">Money matters</p>
            </div>
        </a></article>
                </li>
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="egyptian-mythology/titans/iapetus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Brigid, Celtic Goddess of Fertility"
                      title="Brigid, Celtic Goddess of Fertility"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Tiwa Savage</h4>
              <p class="card-deity__subtitle" itemprop="description">Queen always</p>
            </div>
        </a></article>
                </li>
            </ul>
            <a href="celtic-mythology/gods/index.html" class="card-pantheon__button">View Them All<span class="mythology-pantheon__arrow"></span></a>
          </div>
        </article>
              <article class="card-pantheon is-selected" itemscope itemtype="<?php echo get_home_url(); ?>">
        <a href="greek-mythology/history/history2.html" class="card-pantheon__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
            <img alt="History"
                title="History"
                class="card-pantheon__image"
                sizes="(min-width: 640px) 50vw, 100vw" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatar.jpg">
            </a>
          <div class="card-pantheon__text">
            <h3 class="card-pantheon__title">
              <a href="greek-mythology/history/history2.html" class="card-pantheon__link" itemprop="url">History of Juju music</a></h3>
              <div class="card-pantheon__author" itemprop="author" itemscope itemtype="<?php echo get_home_url(); ?>">
        <a href="#" class="card-pantheon__author-name" itemprop="url">&nbsp;Shina Peters
        </a>      </div>
            <p class="card-pantheon__description" itemprop="description">Explore the history of Juju music and rediscover how it all evolved and more.</p>
          </div>
          <div class="card-pantheon__deities">
            <h5 class="card-pantheon__subtitle">Top music ARTISTS</h5>
            <ul class="card-pantheon__list">
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="greek-mythology/titans/coeus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Artist"
                      title="Artist"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Wizkid</h4>
              <p class="card-deity__subtitle" itemprop="description">The wonder of music </p>
            </div>
        </a></article>
                </li>
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="greek-mythology/titans/crius/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Thor, Norse God of Thunder"
                      title="Thor, Norse God of Thunder"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Davido</h4>
              <p class="card-deity__subtitle" itemprop="description">King of hiphop</p>
            </div>
        </a></article>
                </li>
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="greek-mythology/titans/cronus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Freya, Norse Goddess of Fertility"
                      title="Freya, Norse Goddess of Fertility"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Falz</h4>
              <p class="card-deity__subtitle" itemprop="description">
                <he>
              The bad boy</p>
            </div>
        </a></article>
                </li>
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="greek-mythology/titans/gaia/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Loki, Norse Trickster God"
                      title="Loki, Norse Trickster God"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Teni</h4>
              <p class="card-deity__subtitle" itemprop="description">The reigning billionaire</p>
            </div>
        </a></article>
                </li>
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="greek-mythology/titans/hyperion/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Heimdall, Norse Guardian of Asgard"
                      title="Heimdall, Norse Guardian of Asgard"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Asa</h4>
              <p class="card-deity__subtitle" itemprop="description">Qyeen of the music jungle</p>
            </div>
        </a></article>
                </li>
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="greek-mythology/titans/iapetus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Baldur, Norse God of Light"
                      title="Baldur, Norse God of Light"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Olamide</h4>
              <p class="card-deity__subtitle" itemprop="description">King of street jamz</p>
            </div>
        </a></article>
                </li>
            </ul>
            <a href="<?php echo get_home_url(); ?>" class="card-pantheon__button">View Them All<span class="mythology-pantheon__arrow"></span></a>
          </div>
        </article>
              <article class="card-pantheon" itemscope itemtype="<?php echo get_home_url(); ?>">
          <a href="greek-mythology/history/history3.html" class="card-pantheon__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
            <img alt="History"
                title="History"
                class="card-pantheon__image"
                sizes="(min-width: 640px) 50vw, 100vw" src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatar.jpg">
            </a>
          </a>
          <div class="card-pantheon__text">
            <h3 class="card-pantheon__title">
              <a href="greek-mythology/history/history3.html" class="card-pantheon__link" itemprop="url">African artists </a>
            </h3>
              <div class="card-pantheon__author" itemprop="author" itemscope itemtype="<?php echo get_home_url(); ?>">
        <a href="#" class="card-pantheon__author-name" itemprop="url">          <span itemprop="name">Babatunde Kelani</span>
        </a>      </div>
            <p class="card-pantheon__description" itemprop="description">Explore the works of great African artists, including Davido, Olamide and 9ice, Tuface, Wizkid, King Sunny Ade, Ebenezer Obey and more.</p>
          </div>
          <div class="card-pantheon__deities">
            <h5 class="card-pantheon__subtitle">Top African Artists</h5>
            <ul class="card-pantheon__list">
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="norse-mythology/titans/atlas/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Jupiter, Roman King of the Gods"
                      title="Great Artists"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">KSA</h4>
              <p class="card-deity__subtitle" itemprop="description">King Sunny Ade</p>
            </div>
        </a></article>
                </li>
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="norse-mythology/titans/coeus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Juno, Roman Queen of the Gods"
                      title="KSA"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">BankyW</h4>
              <p class="card-deity__subtitle" itemprop="description">Banky Welton</p>
            </div>
        </a></article>
                </li>
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="norse-mythology/titans/crius/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Neptune, Roman God of the Sea"
                      title="Banky W"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">PHYNO</h4>
              <p class="card-deity__subtitle" itemprop="description">Top Artist</p>
            </div>
        </a></article>
                </li>
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="norse-mythology/titans/cronus/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Minerva, Roman Goddess of Wisdom"
                      title="Minerva, Roman Goddess of Wisdom"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Royce</h4>
              <p class="card-deity__subtitle" itemprop="description">Young Blood</p>
            </div>
        </a></article>
                </li>
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="norse-mythology/titans/gaia/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Apollo, Roman God of Music"
                      title="Royce Young Blood"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Fela</h4>
              <p class="card-deity__subtitle" itemprop="description">Anikulapo Ransom Kuti</p>
            </div>
        </a></article>
                </li>
                <li class="card-pantheon__item">
                  <article class="card-deity card-deity--small">
        <a href="norse-mythology/titans/hyperion/index.html" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Venus, Roman Goddess of Love"
                      title="Anikulapo Ransom Kuti"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Mr Eazi</h4>
              <p class="card-deity__subtitle" itemprop="description">Africa Artist</p>
            </div>
        </a></article>
                </li>
            </ul>
            <a href="roman-mythology/gods/index.html" class="card-pantheon__button">View Them All<span class="mythology-pantheon__arrow"></span></a>
          </div>
        </article>
          </div>
    </section>


    <section class="home-domains">
      <div class="home-domains__text">
        <h5 class="home-domains__kicker">OUR </h5>
        <h2 class="home-domains__title" id="domains">Videos</h2>
      </div>
            <div class="l-section l-section--dark">

              

              <div class="l-section__content">
                <div class="c-video-gallery" data-video-gallery="">

                  
              <div class="c-video-gallery__main">
                
            <article class="c-card c-card--video ">
              <div class="c-card__wrap">
                <figure class="c-card__image">

                  <div class="c-crop c-crop--video c-crop--ratio-video">
                    <div data-video-crop=""><iframe type="text/html" width="670" height="407" data-src="https://www.youtube.com/embed/bjzj0x2WFA8?version=3&amp;rel=1&amp;fs=1&amp;autohide=2&amp;showsearch=0&amp;showinfo=1&amp;iv_load_policy=1&amp;wmode=transparent" allowfullscreen="true" style="border:0;" src="https://www.youtube.com/embed/Z2rUZ1LDeq0?version=3&amp;rel=1&amp;fs=1&amp;autohide=2&amp;showsearch=0&amp;showinfo=1&amp;iv_load_policy=1&amp;wmode=transparent&amp;autoplay=1"></iframe></div>
                  <div class="jwplayer_container" hidden=""><div id="jwplayer_0_div" class="jwplayer jw-reset jw-state-idle jw-stretch-uniform jw-flag-aspect-mode jw-breakpoint--1 jw-flag-small-player jw-floating-dismissible jw-flag-user-inactive" tabindex="0" aria-label="Video Player" role="application" aria-describedby="jw-shortcuts-tooltip-explanation" style="width: 100%;"><div class="jw-aspect jw-reset" style="padding-top: 56.25%;"></div><div class="jw-wrapper jw-reset"><div style="opacity: 0; visibility: hidden; overflow: hidden; display: block; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"><div style="overflow: auto; display: block; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"><div style="height: 1px; width: 1px;"></div></div><div class="jw-contract-trigger" style="overflow: auto; display: block; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"></div></div><div class="jw-top jw-reset"></div><div class="jw-aspect jw-reset" style="padding-top: 56.25%;"></div><div class="jw-media jw-reset"><video class="jw-video jw-reset" tabindex="-1" disableremoteplayback="" webkit-playsinline="" playsinline=""></video></div><div class="jw-preview jw-reset" style="background-image: url(&quot;https://content.jwplatform.com/v2/media/QiQSuoWk/poster.jpg?width=720&quot;);"><div class="jw-video-thumbnail-generated jw-video-thumbnail-container"><video class="jw-reset jw-video-thumbnail" tabindex="-1" disableremoteplayback="" webkit-playsinline="" playsinline="" loop=""></video></div></div><div class="jw-controls-backdrop jw-reset"></div><div class="jw-captions jw-reset"></div><div class="jw-title jw-reset-text" dir="auto"><div class="jw-title-primary jw-reset-text">The First Time: Thomas Middleditch &amp; Ben Schwartz</div><div class="jw-title-secondary jw-reset-text"></div></div><div class="jw-overlays jw-reset"><div id="jwplayer_0_div_inference" class="jw-plugin jw-reset"></div><div id="jwplayer_0_div_jwpsrv" class="jw-plugin jw-reset"></div><div id="jwplayer_0_div_related" class="jw-plugin jw-reset jw-plugin-related"><div class="jw-reset jw-related jw-overlay"><div class="jw-reset jw-icon jw-icon-inline jw-related-close jw-button-color" role="button" tabindex="0" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-close" viewBox="0 0 240 240" focusable="false"><path d="M134.8,120l48.6-48.6c2-1.9,2.1-5.2,0.2-7.2c0,0-0.1-0.1-0.2-0.2l-7.4-7.4c-1.9-2-5.2-2.1-7.2-0.2c0,0-0.1,0.1-0.2,0.2L120,105.2L71.4,56.6c-1.9-2-5.2-2.1-7.2-0.2c0,0-0.1,0.1-0.2,0.2L56.6,64c-2,1.9-2.1,5.2-0.2,7.2c0,0,0.1,0.1,0.2,0.2l48.6,48.7l-48.6,48.6c-2,1.9-2.1,5.2-0.2,7.2c0,0,0.1,0.1,0.2,0.2l7.4,7.4c1.9,2,5.2,2.1,7.2,0.2c0,0,0.1-0.1,0.2-0.2l48.7-48.6l48.6,48.6c1.9,2,5.2,2.1,7.2,0.2c0,0,0.1-0.1,0.2-0.2l7.4-7.4c2-1.9,2.1-5.2,0.2-7.2c0,0-0.1-0.1-0.2-0.2L134.8,120z"></path></svg></div><div class="jw-reset jw-icon jw-icon-inline jw-related-page jw-related-page-left jw-button-color" role="button" tabindex="0" aria-label="Previous"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-arrow-left" viewBox="0 0 240 240" focusable="false"><path d="M55.4,104.4c-1.1,1.1-2.2,2.3-3.1,3.6c-6.9,9.9-4.4,23.5,5.5,30.4L159.7,240l33.9-33.9l-84.9-84.9l84.9-84.9L157.3,0L55.4,104.4L55.4,104.4z"></path></svg></div><div class="jw-related-title jw-reset-text" aria-label="More Videos" dir="auto">More Videos</div><div class="jw-reset jw-related-container"><div class="jw-reset jw-related-item-group"></div></div><div class="jw-reset jw-icon jw-icon-inline jw-related-page jw-related-page-right jw-button-color" role="button" tabindex="0" aria-label="Next"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-arrow-right" viewBox="0 0 240 240" focusable="false"><path d="M183.6,104.4L81.8,0L45.4,36.3l84.9,84.9l-84.9,84.9L79.3,240l101.9-101.7c9.9-6.9,12.4-20.4,5.5-30.4C185.8,106.7,184.8,105.4,183.6,104.4L183.6,104.4z"></path></svg></div></div></div></div><div class="jw-hidden-accessibility"><span class="jw-time-update" aria-live="assertive"></span><span class="jw-volume-update" aria-live="assertive">Volume 0%</span></div><div class="jw-shortcuts-tooltip jw-modal jw-reset" title="Keyboard Shortcuts"><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-shortcuts-close" role="button" tabindex="0" aria-label="Close" style=""><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-close" viewBox="0 0 240 240" focusable="false"><path d="M134.8,120l48.6-48.6c2-1.9,2.1-5.2,0.2-7.2c0,0-0.1-0.1-0.2-0.2l-7.4-7.4c-1.9-2-5.2-2.1-7.2-0.2c0,0-0.1,0.1-0.2,0.2L120,105.2L71.4,56.6c-1.9-2-5.2-2.1-7.2-0.2c0,0-0.1,0.1-0.2,0.2L56.6,64c-2,1.9-2.1,5.2-0.2,7.2c0,0,0.1,0.1,0.2,0.2l48.6,48.7l-48.6,48.6c-2,1.9-2.1,5.2-0.2,7.2c0,0,0.1,0.1,0.2,0.2l7.4,7.4c1.9,2,5.2,2.1,7.2,0.2c0,0,0.1-0.1,0.2-0.2l48.7-48.6l48.6,48.6c1.9,2,5.2,2.1,7.2,0.2c0,0,0.1-0.1,0.2-0.2l7.4-7.4c2-1.9,2.1-5.2,0.2-7.2c0,0-0.1-0.1-0.2-0.2L134.8,120z"></path></svg></div><span class="jw-hidden" id="jw-shortcuts-tooltip-explanation">Press shift question mark to access a list of keyboard shortcuts</span><div class="jw-reset jw-shortcuts-container"><div class="jw-reset jw-shortcuts-header"><span class="jw-reset jw-shortcuts-title">Keyboard Shortcuts</span><button role="switch" class="jw-reset jw-switch" data-jw-switch-enabled="Enabled" data-jw-switch-disabled="Disabled"><span class="jw-reset jw-switch-knob"></span></button></div><div class="jw-reset jw-shortcuts-tooltip-list"><div class="jw-shortcuts-tooltip-descriptions jw-reset"><div class="jw-shortcuts-row jw-reset"><span class="jw-shortcuts-description jw-reset">Play/Pause</span><span class="jw-shortcuts-key jw-reset">SPACE</span></div><div class="jw-shortcuts-row jw-reset"><span class="jw-shortcuts-description jw-reset">Increase Volume</span><span class="jw-shortcuts-key jw-reset">↑</span></div><div class="jw-shortcuts-row jw-reset"><span class="jw-shortcuts-description jw-reset">Decrease Volume</span><span class="jw-shortcuts-key jw-reset">↓</span></div><div class="jw-shortcuts-row jw-reset"><span class="jw-shortcuts-description jw-reset">Seek Forward</span><span class="jw-shortcuts-key jw-reset">→</span></div><div class="jw-shortcuts-row jw-reset"><span class="jw-shortcuts-description jw-reset">Seek Backward</span><span class="jw-shortcuts-key jw-reset">←</span></div><div class="jw-shortcuts-row jw-reset"><span class="jw-shortcuts-description jw-reset">Captions On/Off</span><span class="jw-shortcuts-key jw-reset">c</span></div><div class="jw-shortcuts-row jw-reset"><span class="jw-shortcuts-description jw-reset">Fullscreen/Exit Fullscreen</span><span class="jw-shortcuts-key jw-reset">f</span></div><div class="jw-shortcuts-row jw-reset"><span class="jw-shortcuts-description jw-reset">Mute/Unmute</span><span class="jw-shortcuts-key jw-reset">m</span></div><div class="jw-shortcuts-row jw-reset"><span class="jw-shortcuts-description jw-reset">Seek %</span><span class="jw-shortcuts-key jw-reset">0-9</span></div></div></div></div></div><div class="jw-controls jw-reset"><div class="jw-display jw-reset"><div class="jw-display-container jw-reset"><div class="jw-display-controls jw-reset"><div class="jw-display-icon-container jw-display-icon-rewind jw-reset"><div class="jw-icon jw-icon-rewind jw-button-color jw-reset" role="button" tabindex="0" aria-label="Rewind 10 Seconds"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-rewind" viewBox="0 0 240 240" focusable="false"><path d="M113.2,131.078a21.589,21.589,0,0,0-17.7-10.6,21.589,21.589,0,0,0-17.7,10.6,44.769,44.769,0,0,0,0,46.3,21.589,21.589,0,0,0,17.7,10.6,21.589,21.589,0,0,0,17.7-10.6,44.769,44.769,0,0,0,0-46.3Zm-17.7,47.2c-7.8,0-14.4-11-14.4-24.1s6.6-24.1,14.4-24.1,14.4,11,14.4,24.1S103.4,178.278,95.5,178.278Zm-43.4,9.7v-51l-4.8,4.8-6.8-6.8,13-13a4.8,4.8,0,0,1,8.2,3.4v62.7l-9.6-.1Zm162-130.2v125.3a4.867,4.867,0,0,1-4.8,4.8H146.6v-19.3h48.2v-96.4H79.1v19.3c0,5.3-3.6,7.2-8,4.3l-41.8-27.9a6.013,6.013,0,0,1-2.7-8,5.887,5.887,0,0,1,2.7-2.7l41.8-27.9c4.4-2.9,8-1,8,4.3v19.3H209.2A4.974,4.974,0,0,1,214.1,57.778Z"></path></svg></div></div><div class="jw-display-icon-container jw-display-icon-display jw-reset"><div class="jw-icon jw-icon-display jw-button-color jw-reset" role="button" tabindex="0" aria-label="Play"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-buffer" viewBox="0 0 240 240" focusable="false"><path d="M120,186.667a66.667,66.667,0,0,1,0-133.333V40a80,80,0,1,0,80,80H186.667A66.846,66.846,0,0,1,120,186.667Z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-replay" viewBox="0 0 240 240" focusable="false"><path d="M120,41.9v-20c0-5-4-8-8-4l-44,28a5.865,5.865,0,0,0-3.3,7.6A5.943,5.943,0,0,0,68,56.8l43,29c5,4,9,1,9-4v-20a60,60,0,1,1-60,60H40a80,80,0,1,0,80-79.9Z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-play" viewBox="0 0 240 240" focusable="false"><path d="M62.8,199.5c-1,0.8-2.4,0.6-3.3-0.4c-0.4-0.5-0.6-1.1-0.5-1.8V42.6c-0.2-1.3,0.7-2.4,1.9-2.6c0.7-0.1,1.3,0.1,1.9,0.4l154.7,77.7c2.1,1.1,2.1,2.8,0,3.8L62.8,199.5z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-pause" viewBox="0 0 240 240" focusable="false"><path d="M100,194.9c0.2,2.6-1.8,4.8-4.4,5c-0.2,0-0.4,0-0.6,0H65c-2.6,0.2-4.8-1.8-5-4.4c0-0.2,0-0.4,0-0.6V45c-0.2-2.6,1.8-4.8,4.4-5c0.2,0,0.4,0,0.6,0h30c2.6-0.2,4.8,1.8,5,4.4c0,0.2,0,0.4,0,0.6V194.9z M180,45.1c0.2-2.6-1.8-4.8-4.4-5c-0.2,0-0.4,0-0.6,0h-30c-2.6-0.2-4.8,1.8-5,4.4c0,0.2,0,0.4,0,0.6V195c-0.2,2.6,1.8,4.8,4.4,5c0.2,0,0.4,0,0.6,0h30c2.6,0.2,4.8-1.8,5-4.4c0-0.2,0-0.4,0-0.6V45.1z"></path></svg></div></div><div class="jw-display-icon-container jw-display-icon-next jw-reset" style=""><div class="jw-icon jw-icon-next jw-button-color jw-reset" role="button" tabindex="0" aria-label="Next"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-next" viewBox="0 0 240 240" focusable="false"><path d="M165,60v53.3L59.2,42.8C56.9,41.3,55,42.3,55,45v150c0,2.7,1.9,3.8,4.2,2.2L165,126.6v53.3h20v-120L165,60L165,60z"></path></svg></div></div></div></div></div><div class="jw-float-icon jw-icon jw-button-color jw-reset" aria-label="Close" tabindex="0"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-close" viewBox="0 0 240 240" focusable="false"><path d="M134.8,120l48.6-48.6c2-1.9,2.1-5.2,0.2-7.2c0,0-0.1-0.1-0.2-0.2l-7.4-7.4c-1.9-2-5.2-2.1-7.2-0.2c0,0-0.1,0.1-0.2,0.2L120,105.2L71.4,56.6c-1.9-2-5.2-2.1-7.2-0.2c0,0-0.1,0.1-0.2,0.2L56.6,64c-2,1.9-2.1,5.2-0.2,7.2c0,0,0.1,0.1,0.2,0.2l48.6,48.7l-48.6,48.6c-2,1.9-2.1,5.2-0.2,7.2c0,0,0.1,0.1,0.2,0.2l7.4,7.4c1.9,2,5.2,2.1,7.2,0.2c0,0,0.1-0.1,0.2-0.2l48.7-48.6l48.6,48.6c1.9,2,5.2,2.1,7.2,0.2c0,0,0.1-0.1,0.2-0.2l7.4-7.4c2-1.9,2.1-5.2,0.2-7.2c0,0-0.1-0.1-0.2-0.2L134.8,120z"></path></svg></div><div class="jw-nextup-container jw-reset"><div class="jw-nextup jw-background-color jw-reset jw-nextup-thumbnail-visible"><div class="jw-nextup-tooltip jw-reset"><div class="jw-nextup-thumbnail jw-reset" style="background-image: url(&quot;https://content.jwplatform.com/v2/media/ClIs25T5/poster.jpg?width=720&quot;);"></div><div class="jw-nextup-body jw-reset"><div class="jw-nextup-header jw-reset">Next Up</div><div class="jw-nextup-title jw-reset-text" dir="auto">The Killers: The First Time</div><div class="jw-nextup-duration jw-reset">06:13</div></div></div><button type="button" class="jw-icon jw-nextup-close jw-reset" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-close" viewBox="0 0 240 240" focusable="false"><path d="M134.8,120l48.6-48.6c2-1.9,2.1-5.2,0.2-7.2c0,0-0.1-0.1-0.2-0.2l-7.4-7.4c-1.9-2-5.2-2.1-7.2-0.2c0,0-0.1,0.1-0.2,0.2L120,105.2L71.4,56.6c-1.9-2-5.2-2.1-7.2-0.2c0,0-0.1,0.1-0.2,0.2L56.6,64c-2,1.9-2.1,5.2-0.2,7.2c0,0,0.1,0.1,0.2,0.2l48.6,48.7l-48.6,48.6c-2,1.9-2.1,5.2-0.2,7.2c0,0,0.1,0.1,0.2,0.2l7.4,7.4c1.9,2,5.2,2.1,7.2,0.2c0,0,0.1-0.1,0.2-0.2l48.7-48.6l48.6,48.6c1.9,2,5.2,2.1,7.2,0.2c0,0,0.1-0.1,0.2-0.2l7.4-7.4c2-1.9,2.1-5.2,0.2-7.2c0,0-0.1-0.1-0.2-0.2L134.8,120z"></path></svg></button></div></div><div id="jw-settings-menu" class="jw-reset jw-settings-menu" role="menu" aria-expanded="false"><div class="jw-reset jw-settings-topbar" role="menubar"><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-settings-back" role="button" tabindex="0" aria-label="Previous" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-arrow-left" viewBox="0 0 240 240" focusable="false"><path d="M55.4,104.4c-1.1,1.1-2.2,2.3-3.1,3.6c-6.9,9.9-4.4,23.5,5.5,30.4L159.7,240l33.9-33.9l-84.9-84.9l84.9-84.9L157.3,0L55.4,104.4L55.4,104.4z"></path></svg></div><div class="jw-reset jw-settings-topbar-text" tabindex="0"></div><div class="jw-reset jw-settings-topbar-buttons"><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-settings-captions jw-submenu-captions" role="menuitemradio" tabindex="0" aria-label="Closed Captions" name="captions" aria-expanded="false" aria-haspopup="true" aria-controls="jw-settings-submenu-captions" style=""><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-cc-off" viewBox="0 0 240 240" focusable="false"><path d="M99.4,97.8c-2.4-0.2-4.8,0.7-6.6,2.3c-1.7,1.7-2.5,4.1-2.4,6.5v25.6c0,9.6,11.6,11.4,17.7,5.5c0.7-0.7,1.5-1.5,2.4-2.3l6.6,7.8c-2.2,2.4-5,4.4-8,5.8c-8,3.5-17.3,2.4-24.3-2.9c-3.9-3.6-5.9-8.7-5.5-14v-25.6c0-2.7,0.5-5.3,1.5-7.8c0.9-2.2,2.4-4.3,4.2-5.9c5.7-4.5,13.2-6.2,20.3-4.6c3.3,0.5,6.3,2,8.7,4.3c1.3,1.3,2.5,2.6,3.5,4.2l-7.1,6.9C107.9,100,103.8,97.8,99.4,97.8z M144.1,97.8c-2.4-0.2-4.8,0.7-6.6,2.3c-1.7,1.7-2.5,4.1-2.4,6.5v25.6c0,9.6,11.6,11.4,17.7,5.5c0.7-0.7,1.5-1.5,2.4-2.3l6.6,7.8c-2.2,2.4-5,4.4-8,5.8c-8,3.5-17.3,2.4-24.3-2.9c-3.9-3.6-5.9-8.7-5.5-14v-25.6c0-2.7,0.5-5.3,1.5-7.8c0.9-2.2,2.4-4.3,4.2-5.9c5.7-4.5,13.2-6.2,20.3-4.6c3.3,0.5,6.3,2,8.7,4.3c1.3,1.3,2.5,2.6,3.5,4.2l-7.1,6.9C152.6,100,148.5,97.8,144.1,97.8L144.1,97.8z M200,60v120H40V60H200 M215,40H25c-2.7,0-5,2.2-5,5v150c0,2.7,2.2,5,5,5h190c2.7,0,5-2.2,5-5V45C220,42.2,217.8,40,215,40z"></path></svg><div class="jw-reset-text jw-tooltip jw-tooltip-captions" dir="auto"><div class="jw-text"></div></div></div><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-settings-playbackRates jw-submenu-playbackRates" role="menuitemradio" tabindex="0" aria-label="Playback Rates" name="playbackRates" aria-expanded="false" aria-haspopup="true" aria-controls="jw-settings-submenu-playbackRates" style=""><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-playback-rate" viewBox="0 0 240 240" focusable="false"><path d="M158.83,48.83A71.17,71.17,0,1,0,230,120,71.163,71.163,0,0,0,158.83,48.83Zm45.293,77.632H152.34V74.708h12.952v38.83h38.83ZM35.878,74.708h38.83V87.66H35.878ZM10,113.538H61.755V126.49H10Zm25.878,38.83h38.83V165.32H35.878Z"></path></svg><div class="jw-reset-text jw-tooltip jw-tooltip-playbackRates" dir="auto"><div class="jw-text"></div></div></div><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-settings-sharing jw-submenu-sharing" role="menuitemradio" tabindex="0" aria-label="Share" name="sharing" aria-expanded="false" aria-haspopup="true" aria-controls="jw-settings-submenu-sharing" style=""><svg class="jw-svg-icon jw-svg-icon-sharing" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240" focusable="false"><path d="M175,160c-6.9,0.2-13.6,2.6-19,7l-62-39c0.8-2.6,1.2-5.3,1-8c0.2-2.7-0.2-5.4-1-8l62-39c5.4,4.4,12.1,6.8,19,7c16.3,0.3,29.7-12.6,30-28.9c0-0.4,0-0.7,0-1.1c0-16.5-13.5-30-30-30s-30,13.5-30,30c-0.2,2.7,0.2,5.4,1,8L84,97c-5.4-4.4-12.1-6.8-19-7c-16.5,0-30,13.5-30,30s13.5,30,30,30c6.9-0.2,13.6-2.6,19-7l62,39c-0.8,2.6-1.2,5.3-1,8c0,16.5,13.5,30,30,30s30-13.5,30-30S191.6,160,175,160z"></path></svg><div class="jw-reset-text jw-tooltip jw-tooltip-sharing" dir="auto"><div class="jw-text"></div></div></div><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-settings-close" role="button" tabindex="0" aria-label="Close" style=""><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-close" viewBox="0 0 240 240" focusable="false"><path d="M134.8,120l48.6-48.6c2-1.9,2.1-5.2,0.2-7.2c0,0-0.1-0.1-0.2-0.2l-7.4-7.4c-1.9-2-5.2-2.1-7.2-0.2c0,0-0.1,0.1-0.2,0.2L120,105.2L71.4,56.6c-1.9-2-5.2-2.1-7.2-0.2c0,0-0.1,0.1-0.2,0.2L56.6,64c-2,1.9-2.1,5.2-0.2,7.2c0,0,0.1,0.1,0.2,0.2l48.6,48.7l-48.6,48.6c-2,1.9-2.1,5.2-0.2,7.2c0,0,0.1,0.1,0.2,0.2l7.4,7.4c1.9,2,5.2,2.1,7.2,0.2c0,0,0.1-0.1,0.2-0.2l48.7-48.6l48.6,48.6c1.9,2,5.2,2.1,7.2,0.2c0,0,0.1-0.1,0.2-0.2l7.4-7.4c2-1.9,2.1-5.2,0.2-7.2c0,0-0.1-0.1-0.2-0.2L134.8,120z"></path></svg></div></div></div><div id="jw-settings-submenu-captions" class="jw-reset jw-settings-submenu jw-settings-submenu-captions" role="menu" aria-expanded="false"><div class="jw-reset jw-submenu-topbar"><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Settings" dir="auto">Settings</button></div><div class="jw-reset jw-settings-submenu-items"><button type="button" class="jw-reset-text jw-settings-content-item jw-settings-item-active" aria-label="Off" role="menuitemradio" aria-checked="true" dir="auto">Off</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Automated Captions - en-US" role="menuitemradio" aria-checked="false" dir="auto">Automated Captions - en-US</button></div></div><div id="jw-settings-submenu-captionsSettings" class="jw-reset jw-settings-submenu jw-settings-submenu-captionsSettings" role="menu" aria-expanded="false"><div class="jw-reset jw-settings-submenu-items"><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Font Color" aria-controls="jw-settings-submenu-color" dir="auto" aria-haspopup="true">Font Color<div class="jw-reset jw-settings-value-wrapper"><div class="jw-reset-text jw-settings-content-item-value">White</div><div class="jw-reset-text jw-settings-content-item-arrow"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-arrow-right" viewBox="0 0 240 240" focusable="false"><path d="M183.6,104.4L81.8,0L45.4,36.3l84.9,84.9l-84.9,84.9L79.3,240l101.9-101.7c9.9-6.9,12.4-20.4,5.5-30.4C185.8,106.7,184.8,105.4,183.6,104.4L183.6,104.4z"></path></svg></div></div></button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Font Opacity" aria-controls="jw-settings-submenu-fontOpacity" dir="auto" aria-haspopup="true">Font Opacity<div class="jw-reset jw-settings-value-wrapper"><div class="jw-reset-text jw-settings-content-item-value">100%</div><div class="jw-reset-text jw-settings-content-item-arrow"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-arrow-right" viewBox="0 0 240 240" focusable="false"><path d="M183.6,104.4L81.8,0L45.4,36.3l84.9,84.9l-84.9,84.9L79.3,240l101.9-101.7c9.9-6.9,12.4-20.4,5.5-30.4C185.8,106.7,184.8,105.4,183.6,104.4L183.6,104.4z"></path></svg></div></div></button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Font Size" aria-controls="jw-settings-submenu-userFontScale" dir="auto" aria-haspopup="true">Font Size<div class="jw-reset jw-settings-value-wrapper"><div class="jw-reset-text jw-settings-content-item-value">100%</div><div class="jw-reset-text jw-settings-content-item-arrow"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-arrow-right" viewBox="0 0 240 240" focusable="false"><path d="M183.6,104.4L81.8,0L45.4,36.3l84.9,84.9l-84.9,84.9L79.3,240l101.9-101.7c9.9-6.9,12.4-20.4,5.5-30.4C185.8,106.7,184.8,105.4,183.6,104.4L183.6,104.4z"></path></svg></div></div></button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Font Family" aria-controls="jw-settings-submenu-fontFamily" dir="auto" aria-haspopup="true">Font Family<div class="jw-reset jw-settings-value-wrapper"><div class="jw-reset-text jw-settings-content-item-value">Arial</div><div class="jw-reset-text jw-settings-content-item-arrow"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-arrow-right" viewBox="0 0 240 240" focusable="false"><path d="M183.6,104.4L81.8,0L45.4,36.3l84.9,84.9l-84.9,84.9L79.3,240l101.9-101.7c9.9-6.9,12.4-20.4,5.5-30.4C185.8,106.7,184.8,105.4,183.6,104.4L183.6,104.4z"></path></svg></div></div></button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Character Edge" aria-controls="jw-settings-submenu-edgeStyle" dir="auto" aria-haspopup="true">Character Edge<div class="jw-reset jw-settings-value-wrapper"><div class="jw-reset-text jw-settings-content-item-value">None</div><div class="jw-reset-text jw-settings-content-item-arrow"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-arrow-right" viewBox="0 0 240 240" focusable="false"><path d="M183.6,104.4L81.8,0L45.4,36.3l84.9,84.9l-84.9,84.9L79.3,240l101.9-101.7c9.9-6.9,12.4-20.4,5.5-30.4C185.8,106.7,184.8,105.4,183.6,104.4L183.6,104.4z"></path></svg></div></div></button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Background Color" aria-controls="jw-settings-submenu-backgroundColor" dir="auto" aria-haspopup="true">Background Color<div class="jw-reset jw-settings-value-wrapper"><div class="jw-reset-text jw-settings-content-item-value">Black</div><div class="jw-reset-text jw-settings-content-item-arrow"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-arrow-right" viewBox="0 0 240 240" focusable="false"><path d="M183.6,104.4L81.8,0L45.4,36.3l84.9,84.9l-84.9,84.9L79.3,240l101.9-101.7c9.9-6.9,12.4-20.4,5.5-30.4C185.8,106.7,184.8,105.4,183.6,104.4L183.6,104.4z"></path></svg></div></div></button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Background Opacity" aria-controls="jw-settings-submenu-backgroundOpacity" dir="auto" aria-haspopup="true">Background Opacity<div class="jw-reset jw-settings-value-wrapper"><div class="jw-reset-text jw-settings-content-item-value">50%</div><div class="jw-reset-text jw-settings-content-item-arrow"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-arrow-right" viewBox="0 0 240 240" focusable="false"><path d="M183.6,104.4L81.8,0L45.4,36.3l84.9,84.9l-84.9,84.9L79.3,240l101.9-101.7c9.9-6.9,12.4-20.4,5.5-30.4C185.8,106.7,184.8,105.4,183.6,104.4L183.6,104.4z"></path></svg></div></div></button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Window Color" aria-controls="jw-settings-submenu-windowColor" dir="auto" aria-haspopup="true">Window Color<div class="jw-reset jw-settings-value-wrapper"><div class="jw-reset-text jw-settings-content-item-value">Black</div><div class="jw-reset-text jw-settings-content-item-arrow"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-arrow-right" viewBox="0 0 240 240" focusable="false"><path d="M183.6,104.4L81.8,0L45.4,36.3l84.9,84.9l-84.9,84.9L79.3,240l101.9-101.7c9.9-6.9,12.4-20.4,5.5-30.4C185.8,106.7,184.8,105.4,183.6,104.4L183.6,104.4z"></path></svg></div></div></button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Window Opacity" aria-controls="jw-settings-submenu-windowOpacity" dir="auto" aria-haspopup="true">Window Opacity<div class="jw-reset jw-settings-value-wrapper"><div class="jw-reset-text jw-settings-content-item-value">0%</div><div class="jw-reset-text jw-settings-content-item-arrow"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-arrow-right" viewBox="0 0 240 240" focusable="false"><path d="M183.6,104.4L81.8,0L45.4,36.3l84.9,84.9l-84.9,84.9L79.3,240l101.9-101.7c9.9-6.9,12.4-20.4,5.5-30.4C185.8,106.7,184.8,105.4,183.6,104.4L183.6,104.4z"></path></svg></div></div></button><button type="button" class="jw-reset-text jw-settings-content-item jw-settings-reset" aria-label="Reset" dir="auto">Reset</button></div></div><div id="jw-settings-submenu-color" class="jw-reset jw-settings-submenu jw-settings-submenu-color" role="menu" aria-expanded="false"><div class="jw-reset jw-settings-submenu-items"><button type="button" class="jw-reset-text jw-settings-content-item jw-settings-item-active" aria-label="White" role="menuitemradio" aria-checked="true" dir="auto">White</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Black" role="menuitemradio" aria-checked="false" dir="auto">Black</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Red" role="menuitemradio" aria-checked="false" dir="auto">Red</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Green" role="menuitemradio" aria-checked="false" dir="auto">Green</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Blue" role="menuitemradio" aria-checked="false" dir="auto">Blue</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Yellow" role="menuitemradio" aria-checked="false" dir="auto">Yellow</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Magenta" role="menuitemradio" aria-checked="false" dir="auto">Magenta</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Cyan" role="menuitemradio" aria-checked="false" dir="auto">Cyan</button></div></div><div id="jw-settings-submenu-fontOpacity" class="jw-reset jw-settings-submenu jw-settings-submenu-fontOpacity" role="menu" aria-expanded="false"><div class="jw-reset jw-settings-submenu-items"><button type="button" class="jw-reset-text jw-settings-content-item jw-settings-item-active" aria-label="100%" role="menuitemradio" aria-checked="true" dir="auto">100%</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="75%" role="menuitemradio" aria-checked="false" dir="auto">75%</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="25%" role="menuitemradio" aria-checked="false" dir="auto">25%</button></div></div><div id="jw-settings-submenu-userFontScale" class="jw-reset jw-settings-submenu jw-settings-submenu-userFontScale" role="menu" aria-expanded="false"><div class="jw-reset jw-settings-submenu-items"><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="200%" role="menuitemradio" aria-checked="false" dir="auto">200%</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="175%" role="menuitemradio" aria-checked="false" dir="auto">175%</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="150%" role="menuitemradio" aria-checked="false" dir="auto">150%</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="125%" role="menuitemradio" aria-checked="false" dir="auto">125%</button><button type="button" class="jw-reset-text jw-settings-content-item jw-settings-item-active" aria-label="100%" role="menuitemradio" aria-checked="true" dir="auto">100%</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="75%" role="menuitemradio" aria-checked="false" dir="auto">75%</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="50%" role="menuitemradio" aria-checked="false" dir="auto">50%</button></div></div><div id="jw-settings-submenu-fontFamily" class="jw-reset jw-settings-submenu jw-settings-submenu-fontFamily" role="menu" aria-expanded="false"><div class="jw-reset jw-settings-submenu-items"><button type="button" class="jw-reset-text jw-settings-content-item jw-settings-item-active" aria-label="Arial" role="menuitemradio" aria-checked="true" dir="auto">Arial</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Courier" role="menuitemradio" aria-checked="false" dir="auto">Courier</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Georgia" role="menuitemradio" aria-checked="false" dir="auto">Georgia</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Impact" role="menuitemradio" aria-checked="false" dir="auto">Impact</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Lucida Console" role="menuitemradio" aria-checked="false" dir="auto">Lucida Console</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Tahoma" role="menuitemradio" aria-checked="false" dir="auto">Tahoma</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Times New Roman" role="menuitemradio" aria-checked="false" dir="auto">Times New Roman</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Trebuchet MS" role="menuitemradio" aria-checked="false" dir="auto">Trebuchet MS</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Verdana" role="menuitemradio" aria-checked="false" dir="auto">Verdana</button></div></div><div id="jw-settings-submenu-edgeStyle" class="jw-reset jw-settings-submenu jw-settings-submenu-edgeStyle" role="menu" aria-expanded="false"><div class="jw-reset jw-settings-submenu-items"><button type="button" class="jw-reset-text jw-settings-content-item jw-settings-item-active" aria-label="None" role="menuitemradio" aria-checked="true" dir="auto">None</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Raised" role="menuitemradio" aria-checked="false" dir="auto">Raised</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Depressed" role="menuitemradio" aria-checked="false" dir="auto">Depressed</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Uniform" role="menuitemradio" aria-checked="false" dir="auto">Uniform</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Drop Shadow" role="menuitemradio" aria-checked="false" dir="auto">Drop Shadow</button></div></div><div id="jw-settings-submenu-backgroundColor" class="jw-reset jw-settings-submenu jw-settings-submenu-backgroundColor" role="menu" aria-expanded="false"><div class="jw-reset jw-settings-submenu-items"><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="White" role="menuitemradio" aria-checked="false" dir="auto">White</button><button type="button" class="jw-reset-text jw-settings-content-item jw-settings-item-active" aria-label="Black" role="menuitemradio" aria-checked="true" dir="auto">Black</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Red" role="menuitemradio" aria-checked="false" dir="auto">Red</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Green" role="menuitemradio" aria-checked="false" dir="auto">Green</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Blue" role="menuitemradio" aria-checked="false" dir="auto">Blue</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Yellow" role="menuitemradio" aria-checked="false" dir="auto">Yellow</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Magenta" role="menuitemradio" aria-checked="false" dir="auto">Magenta</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Cyan" role="menuitemradio" aria-checked="false" dir="auto">Cyan</button></div></div><div id="jw-settings-submenu-backgroundOpacity" class="jw-reset jw-settings-submenu jw-settings-submenu-backgroundOpacity" role="menu" aria-expanded="false"><div class="jw-reset jw-settings-submenu-items"><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="100%" role="menuitemradio" aria-checked="false" dir="auto">100%</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="75%" role="menuitemradio" aria-checked="false" dir="auto">75%</button><button type="button" class="jw-reset-text jw-settings-content-item jw-settings-item-active" aria-label="50%" role="menuitemradio" aria-checked="true" dir="auto">50%</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="25%" role="menuitemradio" aria-checked="false" dir="auto">25%</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="0%" role="menuitemradio" aria-checked="false" dir="auto">0%</button></div></div><div id="jw-settings-submenu-windowColor" class="jw-reset jw-settings-submenu jw-settings-submenu-windowColor" role="menu" aria-expanded="false"><div class="jw-reset jw-settings-submenu-items"><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="White" role="menuitemradio" aria-checked="false" dir="auto">White</button><button type="button" class="jw-reset-text jw-settings-content-item jw-settings-item-active" aria-label="Black" role="menuitemradio" aria-checked="true" dir="auto">Black</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Red" role="menuitemradio" aria-checked="false" dir="auto">Red</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Green" role="menuitemradio" aria-checked="false" dir="auto">Green</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Blue" role="menuitemradio" aria-checked="false" dir="auto">Blue</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Yellow" role="menuitemradio" aria-checked="false" dir="auto">Yellow</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Magenta" role="menuitemradio" aria-checked="false" dir="auto">Magenta</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="Cyan" role="menuitemradio" aria-checked="false" dir="auto">Cyan</button></div></div><div id="jw-settings-submenu-windowOpacity" class="jw-reset jw-settings-submenu jw-settings-submenu-windowOpacity" role="menu" aria-expanded="false"><div class="jw-reset jw-settings-submenu-items"><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="100%" role="menuitemradio" aria-checked="false" dir="auto">100%</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="75%" role="menuitemradio" aria-checked="false" dir="auto">75%</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="50%" role="menuitemradio" aria-checked="false" dir="auto">50%</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="25%" role="menuitemradio" aria-checked="false" dir="auto">25%</button><button type="button" class="jw-reset-text jw-settings-content-item jw-settings-item-active" aria-label="0%" role="menuitemradio" aria-checked="true" dir="auto">0%</button></div></div><div id="jw-settings-submenu-playbackRates" class="jw-reset jw-settings-submenu jw-settings-submenu-playbackRates" role="menu" aria-expanded="false"><div class="jw-reset jw-settings-submenu-items"><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="0.5x" role="menuitemradio" aria-checked="false" dir="auto">0.5x</button><button type="button" class="jw-reset-text jw-settings-content-item jw-settings-item-active" aria-label="1x" role="menuitemradio" aria-checked="true" dir="auto">1x</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="1.25x" role="menuitemradio" aria-checked="false" dir="auto">1.25x</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="1.5x" role="menuitemradio" aria-checked="false" dir="auto">1.5x</button><button type="button" class="jw-reset-text jw-settings-content-item" aria-label="2x" role="menuitemradio" aria-checked="false" dir="auto">2x</button></div></div><div id="jw-settings-submenu-sharing" class="jw-reset jw-settings-submenu jw-settings-submenu-sharing jw-sharing-menu" role="menu" aria-expanded="false"><div class="jw-reset jw-settings-submenu-items"><button class="jw-reset jw-settings-content-item jw-sharing-link" aria-checked="false" type="button" role="button" aria-label="facebook" tabindex="0"><svg class="jw-svg-icon jw-svg-icon-facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 160" focusable="false"><path d="M137.8,15H22.1A7.127,7.127,0,0,0,15,22.1V137.8a7.28,7.28,0,0,0,7.1,7.2H84.5V95H67.6V75.5H84.5v-15a23.637,23.637,0,0,1,21.3-25.9,28.08,28.08,0,0,1,4.1-.1c7.2,0,13.7.6,14.9.6V52.7H114.4c-8.5,0-9.7,3.9-9.7,9.7V74.7h19.5l-2.6,19.5H104.7v50.7h33.1a7.3,7.3,0,0,0,7.2-7.2V22A7.13,7.13,0,0,0,137.8,15Z"></path></svg> facebook</button><button class="jw-reset jw-settings-content-item jw-sharing-link" aria-checked="false" type="button" role="button" aria-label="twitter" tabindex="0"><svg class="jw-svg-icon jw-svg-icon-twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 160" focusable="false"><path d="M56.8,132.5a75.177,75.177,0,0,0,75.3-75.1V54A53.405,53.405,0,0,0,145,40.5a58.075,58.075,0,0,1-15.4,3.9,27.138,27.138,0,0,0,11.6-14.8A53.038,53.038,0,0,1,124.5,36a25.736,25.736,0,0,0-19.3-8.4A26.12,26.12,0,0,0,78.8,53.4V54a16.5,16.5,0,0,0,.7,5.8,71.966,71.966,0,0,1-54.1-27,23.9,23.9,0,0,0-3.9,13.5A26.043,26.043,0,0,0,33.1,68.2,27.018,27.018,0,0,1,20.9,65v.7A26.15,26.15,0,0,0,42.1,91.4a24.149,24.149,0,0,1-7.1.7,12.625,12.625,0,0,1-5.1-.7,25.657,25.657,0,0,0,24.5,18A53.519,53.519,0,0,1,21.6,121a19.683,19.683,0,0,1-6.4-.7,80.388,80.388,0,0,0,41.6,12.2"></path></svg> twitter</button><button class="jw-reset jw-settings-content-item jw-sharing-link" aria-checked="false" type="button" role="button" aria-label="email" tabindex="0"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-email" viewBox="0 0 160 160" focusable="false"><path d="M147.3,27.9H11.9L10,29.8v97a3.02,3.02,0,0,0,2.8,3.2H146.6a3.02,3.02,0,0,0,3.2-2.8V31C150.5,29.2,149.2,27.9,147.3,27.9ZM125.6,40.7,80.3,77.1,35,40.7Zm12.1,76.6H22.8V47.7l57.5,46,57.5-46-.1,69.6Z"></path></svg> Email</button><div class="jw-reset jw-settings-content-item jw-sharing-copy" aria-label="link" role="button" tabindex="0"><button class="jw-reset jw-sharing-link" aria-checked="false" type="button" role="button"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-link" viewBox="0 0 160 160" focusable="false"><path d="M79.4,99.6H92.5v2a33.6,33.6,0,0,1-9.8,24.2l-9.8,9.8a34.716,34.716,0,0,1-48.4,0,34.716,34.716,0,0,1,0-48.4l9.2-10.5a33.6,33.6,0,0,1,24.2-9.8h1.9V80H58.5a19.359,19.359,0,0,0-15.1,6.5l-9.8,9.8a20.976,20.976,0,0,0-.5,29.6l.5.5a20.976,20.976,0,0,0,29.6.5l.5-.5,9.8-9.8a20.905,20.905,0,0,0,6.5-15h0v-2ZM135,24.4h0a34.716,34.716,0,0,0-48.4,0L76.1,34.2a33.6,33.6,0,0,0-9.8,24.2v2H79.4v-2a19.359,19.359,0,0,1,6.5-15.1l9.8-9.8a20.976,20.976,0,0,1,29.6-.5l.5.5a20.976,20.976,0,0,1,.5,29.6l-.5.5-10.5,9.8a20.905,20.905,0,0,1-15,6.5H99V93h1.3a33.6,33.6,0,0,0,24.2-9.8l9.8-9.8A34.89,34.89,0,0,0,135,24.4ZM63,106.2l42.5-42.5-9.8-9.8L53.2,96.4Z"></path></svg> Link</button><textarea readonly="true" class="jw-reset jw-sharing-textarea"><?php bloginfo('template_directory');?>/?jwsource=cl</textarea><div class="jw-reset jw-tooltip jw-tooltip-sharing-Link"><div class="jw-text">Copied</div></div></div><div class="jw-reset jw-settings-content-item jw-sharing-copy" aria-label="embed" role="button" tabindex="0"><button class="jw-reset jw-sharing-link" aria-checked="false" type="button" role="button"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-embed" viewBox="0 0 160 160" focusable="false"><path d="M153.224,81.594,126.971,54.685,117.6,64.061l21.846,21.846L117.6,107.752l8.719,8.719L152.567,90.22a5.583,5.583,0,0,0,1.406-7.782,6.067,6.067,0,0,0-.75-.844ZM33.12,54.685,6.868,80.938A5.973,5.973,0,0,0,6.68,89.47l.188.188L33.12,117.128l9.376-9.376-22.5-21.846L42.5,64.061ZM53.747,134.1,94.437,21.5,106.345,25.9,65.654,138.5Z"></path></svg> Embed</button><textarea readonly="true" class="jw-reset jw-sharing-textarea">&lt;iframe src="//content.jwplatform.com/players/QiQSuoWk-zFOPDjEV.html" width="640" height="360" frameborder="0" scrolling="auto"&gt;&lt;/iframe&gt;</textarea><div class="jw-reset jw-tooltip jw-tooltip-sharing-Embed"><div class="jw-text">Copied</div></div></div></div></div></div><div class="jw-controlbar jw-reset"><div class="jw-slider-time jw-background-color jw-reset jw-slider-horizontal jw-reset" tabindex="0" role="slider" aria-label="Seek"><div class="jw-slider-container jw-reset"><div class="jw-rail jw-reset"></div><div class="jw-buffer jw-reset" style="width: 0%;"></div><div class="jw-progress jw-reset" style="width: 0%;"></div><div class="jw-knob jw-reset" style="left: 0%;"></div><div class="jw-icon jw-icon-tooltip jw-tooltip-time jw-button-color jw-reset"><div class="jw-overlay jw-reset"><div class="jw-time-tip jw-reset"><div class="jw-time-thumb jw-reset" style="width: 0px; height: 0px;"></div><span class="jw-text jw-reset"></span></div></div></div></div></div><div class="jw-reset jw-button-container"><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-icon-playback" role="button" tabindex="0" aria-label="Play" style=""><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-play" viewBox="0 0 240 240" focusable="false"><path d="M62.8,199.5c-1,0.8-2.4,0.6-3.3-0.4c-0.4-0.5-0.6-1.1-0.5-1.8V42.6c-0.2-1.3,0.7-2.4,1.9-2.6c0.7-0.1,1.3,0.1,1.9,0.4l154.7,77.7c2.1,1.1,2.1,2.8,0,3.8L62.8,199.5z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-pause" viewBox="0 0 240 240" focusable="false"><path d="M100,194.9c0.2,2.6-1.8,4.8-4.4,5c-0.2,0-0.4,0-0.6,0H65c-2.6,0.2-4.8-1.8-5-4.4c0-0.2,0-0.4,0-0.6V45c-0.2-2.6,1.8-4.8,4.4-5c0.2,0,0.4,0,0.6,0h30c2.6-0.2,4.8,1.8,5,4.4c0,0.2,0,0.4,0,0.6V194.9z M180,45.1c0.2-2.6-1.8-4.8-4.4-5c-0.2,0-0.4,0-0.6,0h-30c-2.6-0.2-4.8,1.8-5,4.4c0,0.2,0,0.4,0,0.6V195c-0.2,2.6,1.8,4.8,4.4,5c0.2,0,0.4,0,0.6,0h30c2.6,0.2,4.8-1.8,5-4.4c0-0.2,0-0.4,0-0.6V45.1z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-stop" viewBox="0 0 240 240" focusable="false"><path d="M190,185c0.2,2.6-1.8,4.8-4.4,5c-0.2,0-0.4,0-0.6,0H55c-2.6,0.2-4.8-1.8-5-4.4c0-0.2,0-0.4,0-0.6V55c-0.2-2.6,1.8-4.8,4.4-5c0.2,0,0.4,0,0.6,0h130c2.6-0.2,4.8,1.8,5,4.4c0,0.2,0,0.4,0,0.6V185z"></path></svg><div class="jw-reset-text jw-tooltip jw-tooltip-play" dir="auto"><div class="jw-text"></div></div></div><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-icon-rewind" role="button" tabindex="0" aria-label="Rewind 10 Seconds" style=""><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-rewind" viewBox="0 0 240 240" focusable="false"><path d="M113.2,131.078a21.589,21.589,0,0,0-17.7-10.6,21.589,21.589,0,0,0-17.7,10.6,44.769,44.769,0,0,0,0,46.3,21.589,21.589,0,0,0,17.7,10.6,21.589,21.589,0,0,0,17.7-10.6,44.769,44.769,0,0,0,0-46.3Zm-17.7,47.2c-7.8,0-14.4-11-14.4-24.1s6.6-24.1,14.4-24.1,14.4,11,14.4,24.1S103.4,178.278,95.5,178.278Zm-43.4,9.7v-51l-4.8,4.8-6.8-6.8,13-13a4.8,4.8,0,0,1,8.2,3.4v62.7l-9.6-.1Zm162-130.2v125.3a4.867,4.867,0,0,1-4.8,4.8H146.6v-19.3h48.2v-96.4H79.1v19.3c0,5.3-3.6,7.2-8,4.3l-41.8-27.9a6.013,6.013,0,0,1-2.7-8,5.887,5.887,0,0,1,2.7-2.7l41.8-27.9c4.4-2.9,8-1,8,4.3v19.3H209.2A4.974,4.974,0,0,1,214.1,57.778Z"></path></svg><div class="jw-reset-text jw-tooltip jw-tooltip-rewind" dir="auto"><div class="jw-text"></div></div></div><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-icon-next" role="button" tabindex="0" aria-label="Next" dir="auto" style=""><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-next" viewBox="0 0 240 240" focusable="false"><path d="M165,60v53.3L59.2,42.8C56.9,41.3,55,42.3,55,45v150c0,2.7,1.9,3.8,4.2,2.2L165,126.6v53.3h20v-120L165,60L165,60z"></path></svg><div class="jw-reset-text jw-tooltip jw-tooltip-next" dir="auto"><div class="jw-text"></div></div></div><div aria-label="Unmute" role="group" tabindex="0" class="jw-icon jw-icon-tooltip jw-icon-volume jw-button-color jw-reset jw-off"><div class="jw-overlay jw-reset" tabindex="0" aria-label="Volume" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" role="slider" aria-valuenow="0" aria-valuetext="Volume 0%"><div class="jw-slider-volume jw-volume-tip jw-reset jw-slider-vertical" aria-hidden="true"><div class="jw-slider-container jw-reset"><div class="jw-rail jw-reset"></div><div class="jw-buffer jw-reset"></div><div class="jw-progress jw-reset" style="height: 0%;"></div><div class="jw-knob jw-reset" style="bottom: 0%;"></div></div></div></div><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-volume-0" viewBox="0 0 240 240" focusable="false"><path d="M116.4,42.8v154.5c0,2.8-1.7,3.6-3.8,1.7l-54.1-48.1H28.9c-2.8,0-5.2-2.3-5.2-5.2V94.2c0-2.8,2.3-5.2,5.2-5.2h29.6l54.1-48.1C114.6,39.1,116.4,39.9,116.4,42.8z M212.3,96.4l-14.6-14.6l-23.6,23.6l-23.6-23.6l-14.6,14.6l23.6,23.6l-23.6,23.6l14.6,14.6l23.6-23.6l23.6,23.6l14.6-14.6L188.7,120L212.3,96.4z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-volume-50" viewBox="0 0 240 240" focusable="false"><path d="M116.4,42.8v154.5c0,2.8-1.7,3.6-3.8,1.7l-54.1-48.1H28.9c-2.8,0-5.2-2.3-5.2-5.2V94.2c0-2.8,2.3-5.2,5.2-5.2h29.6l54.1-48.1C114.7,39.1,116.4,39.9,116.4,42.8z M178.2,120c0-22.7-18.5-41.2-41.2-41.2v20.6c11.4,0,20.6,9.2,20.6,20.6c0,11.4-9.2,20.6-20.6,20.6v20.6C159.8,161.2,178.2,142.7,178.2,120z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-volume-100" viewBox="0 0 240 240" focusable="false"><path d="M116.5,42.8v154.4c0,2.8-1.7,3.6-3.8,1.7l-54.1-48H29c-2.8,0-5.2-2.3-5.2-5.2V94.3c0-2.8,2.3-5.2,5.2-5.2h29.6l54.1-48C114.8,39.2,116.5,39.9,116.5,42.8z"></path><path d="M136.2,160v-20c11.1,0,20-8.9,20-20s-8.9-20-20-20V80c22.1,0,40,17.9,40,40S158.3,160,136.2,160z"></path><path d="M216.2,120c0-44.2-35.8-80-80-80v20c33.1,0,60,26.9,60,60s-26.9,60-60,60v20C180.4,199.9,216.1,164.1,216.2,120z"></path></svg></div><div class="jw-horizontal-volume-container" tabindex="-1" aria-label="Volume" aria-orientation="horizontal" aria-valuemin="0" aria-valuemax="100" role="slider" aria-valuenow="0" aria-valuetext="Volume 0%"><div class="jw-slider-volume jw-reset jw-slider-horizontal" aria-hidden="true"><div class="jw-slider-container jw-reset"><div class="jw-rail jw-reset"></div><div class="jw-buffer jw-reset"></div><div class="jw-progress jw-reset" style="width: 0%;"></div><div class="jw-knob jw-reset" style="left: 0%;"></div></div></div></div><span class="jw-text jw-reset-text jw-text-alt" role="status" dir="auto"></span><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-text-live" role="button" tabindex="0" aria-label="Live" style="display: none;">Live</div><div class="jw-icon jw-icon-inline jw-text jw-reset jw-text-elapsed" role="timer">00:00</div><div class="jw-icon jw-icon-inline jw-text jw-reset jw-text-countdown" role="timer">10:39</div><div class="jw-icon jw-icon-inline jw-text jw-reset jw-text-duration" role="timer">10:39</div><div class="jw-reset jw-spacer"></div><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-icon-cast" role="button" tabindex="0" aria-label="Chromecast" style="display: none; cursor: pointer;"><google-cast-launcher tabindex="-1" class="jw-reset jw-off" style="display: none;"></google-cast-launcher><div class="jw-reset-text jw-tooltip jw-tooltip-chromecast" dir="auto"><div class="jw-text"></div></div></div><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-icon-cc jw-settings-submenu-button jw-off" role="button" tabindex="0" aria-label="Closed Captions" aria-haspopup="true" aria-controls="jw-settings-submenu-captions" style=""><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-cc-on" viewBox="0 0 240 240" focusable="false"><path d="M215,40H25c-2.7,0-5,2.2-5,5v150c0,2.7,2.2,5,5,5h190c2.7,0,5-2.2,5-5V45C220,42.2,217.8,40,215,40z M108.1,137.7c0.7-0.7,1.5-1.5,2.4-2.3l6.6,7.8c-2.2,2.4-5,4.4-8,5.8c-8,3.5-17.3,2.4-24.3-2.9c-3.9-3.6-5.9-8.7-5.5-14v-25.6c0-2.7,0.5-5.3,1.5-7.8c0.9-2.2,2.4-4.3,4.2-5.9c5.7-4.5,13.2-6.2,20.3-4.6c3.3,0.5,6.3,2,8.7,4.3c1.3,1.3,2.5,2.6,3.5,4.2l-7.1,6.9c-2.4-3.7-6.5-5.9-10.9-5.9c-2.4-0.2-4.8,0.7-6.6,2.3c-1.7,1.7-2.5,4.1-2.4,6.5v25.6C90.4,141.7,102,143.5,108.1,137.7z M152.9,137.7c0.7-0.7,1.5-1.5,2.4-2.3l6.6,7.8c-2.2,2.4-5,4.4-8,5.8c-8,3.5-17.3,2.4-24.3-2.9c-3.9-3.6-5.9-8.7-5.5-14v-25.6c0-2.7,0.5-5.3,1.5-7.8c0.9-2.2,2.4-4.3,4.2-5.9c5.7-4.5,13.2-6.2,20.3-4.6c3.3,0.5,6.3,2,8.7,4.3c1.3,1.3,2.5,2.6,3.5,4.2l-7.1,6.9c-2.4-3.7-6.5-5.9-10.9-5.9c-2.4-0.2-4.8,0.7-6.6,2.3c-1.7,1.7-2.5,4.1-2.4,6.5v25.6C135.2,141.7,146.8,143.5,152.9,137.7z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-cc-off" viewBox="0 0 240 240" focusable="false"><path d="M99.4,97.8c-2.4-0.2-4.8,0.7-6.6,2.3c-1.7,1.7-2.5,4.1-2.4,6.5v25.6c0,9.6,11.6,11.4,17.7,5.5c0.7-0.7,1.5-1.5,2.4-2.3l6.6,7.8c-2.2,2.4-5,4.4-8,5.8c-8,3.5-17.3,2.4-24.3-2.9c-3.9-3.6-5.9-8.7-5.5-14v-25.6c0-2.7,0.5-5.3,1.5-7.8c0.9-2.2,2.4-4.3,4.2-5.9c5.7-4.5,13.2-6.2,20.3-4.6c3.3,0.5,6.3,2,8.7,4.3c1.3,1.3,2.5,2.6,3.5,4.2l-7.1,6.9C107.9,100,103.8,97.8,99.4,97.8z M144.1,97.8c-2.4-0.2-4.8,0.7-6.6,2.3c-1.7,1.7-2.5,4.1-2.4,6.5v25.6c0,9.6,11.6,11.4,17.7,5.5c0.7-0.7,1.5-1.5,2.4-2.3l6.6,7.8c-2.2,2.4-5,4.4-8,5.8c-8,3.5-17.3,2.4-24.3-2.9c-3.9-3.6-5.9-8.7-5.5-14v-25.6c0-2.7,0.5-5.3,1.5-7.8c0.9-2.2,2.4-4.3,4.2-5.9c5.7-4.5,13.2-6.2,20.3-4.6c3.3,0.5,6.3,2,8.7,4.3c1.3,1.3,2.5,2.6,3.5,4.2l-7.1,6.9C152.6,100,148.5,97.8,144.1,97.8L144.1,97.8z M200,60v120H40V60H200 M215,40H25c-2.7,0-5,2.2-5,5v150c0,2.7,2.2,5,5,5h190c2.7,0,5-2.2,5-5V45C220,42.2,217.8,40,215,40z"></path></svg><div class="jw-reset-text jw-tooltip jw-tooltip-captions" dir="auto"><div class="jw-text"></div></div></div><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-settings-sharing" button="share" role="button" tabindex="0" aria-label="Share" aria-haspopup="true" aria-controls="jw-settings-submenu-sharing"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-sharing" viewBox="0 0 240 240" focusable="false"><path d="M175,160c-6.9,0.2-13.6,2.6-19,7l-62-39c0.8-2.6,1.2-5.3,1-8c0.2-2.7-0.2-5.4-1-8l62-39c5.4,4.4,12.1,6.8,19,7c16.3,0.3,29.7-12.6,30-28.9c0-0.4,0-0.7,0-1.1c0-16.5-13.5-30-30-30s-30,13.5-30,30c-0.2,2.7,0.2,5.4,1,8L84,97c-5.4-4.4-12.1-6.8-19-7c-16.5,0-30,13.5-30,30s13.5,30,30,30c6.9-0.2,13.6-2.6,19-7l62,39c-0.8,2.6-1.2,5.3-1,8c0,16.5,13.5,30,30,30s30-13.5,30-30S191.6,160,175,160z"></path></svg><div class="jw-reset-text jw-tooltip jw-tooltip-share" dir="auto"><div class="jw-text"></div></div></div><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-related-btn" button="related" role="button" tabindex="0" aria-label="More Videos"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-more-videos" viewBox="0 0 240 240" focusable="false"><path d="M0,30h60v75H0V30z M0,135h60v75H0V135z M90,135h60v75H90V135z M180,135h60v75h-60V135z M90,30h60v75H90V30z M180,30h60v75h-60V30z"></path></svg><div class="jw-reset-text jw-tooltip jw-tooltip-related" dir="auto"><div class="jw-text"></div></div></div><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-icon-settings jw-settings-submenu-button" role="button" tabindex="0" aria-label="Settings" aria-haspopup="true" aria-controls="jw-settings-menu" style=""><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-settings" viewBox="0 0 240 240" focusable="false"><path d="M204,145l-25-14c0.8-3.6,1.2-7.3,1-11c0.2-3.7-0.2-7.4-1-11l25-14c2.2-1.6,3.1-4.5,2-7l-16-26c-1.2-2.1-3.8-2.9-6-2l-25,14c-6-4.2-12.3-7.9-19-11V35c0.2-2.6-1.8-4.8-4.4-5c-0.2,0-0.4,0-0.6,0h-30c-2.6-0.2-4.8,1.8-5,4.4c0,0.2,0,0.4,0,0.6v28c-6.7,3.1-13,6.7-19,11L56,60c-2.2-0.9-4.8-0.1-6,2L35,88c-1.6,2.2-1.3,5.3,0.9,6.9c0,0,0.1,0,0.1,0.1l25,14c-0.8,3.6-1.2,7.3-1,11c-0.2,3.7,0.2,7.4,1,11l-25,14c-2.2,1.6-3.1,4.5-2,7l16,26c1.2,2.1,3.8,2.9,6,2l25-14c5.7,4.6,12.2,8.3,19,11v28c-0.2,2.6,1.8,4.8,4.4,5c0.2,0,0.4,0,0.6,0h30c2.6,0.2,4.8-1.8,5-4.4c0-0.2,0-0.4,0-0.6v-28c7-2.3,13.5-6,19-11l25,14c2.5,1.3,5.6,0.4,7-2l15-26C206.7,149.4,206,146.7,204,145z M120,149.9c-16.5,0-30-13.4-30-30s13.4-30,30-30s30,13.4,30,30c0.3,16.3-12.6,29.7-28.9,30C120.7,149.9,120.4,149.9,120,149.9z"></path></svg><div class="jw-reset-text jw-tooltip jw-tooltip-settings" dir="auto"><div class="jw-text"></div></div></div><div class="jw-icon jw-icon-inline jw-button-color jw-reset jw-icon-fullscreen" role="button" tabindex="0" aria-label="Fullscreen" style=""><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-fullscreen-off" viewBox="0 0 240 240" focusable="false"><path d="M109.2,134.9l-8.4,50.1c-0.4,2.7-2.4,3.3-4.4,1.4L82,172l-27.9,27.9l-14.2-14.2l27.9-27.9l-14.4-14.4c-1.9-1.9-1.3-3.9,1.4-4.4l50.1-8.4c1.8-0.5,3.6,0.6,4.1,2.4C109.4,133.7,109.4,134.3,109.2,134.9L109.2,134.9z M172.1,82.1L200,54.2L185.8,40l-27.9,27.9l-14.4-14.4c-1.9-1.9-3.9-1.3-4.4,1.4l-8.4,50.1c-0.5,1.8,0.6,3.6,2.4,4.1c0.5,0.2,1.2,0.2,1.7,0l50.1-8.4c2.7-0.4,3.3-2.4,1.4-4.4L172.1,82.1z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-fullscreen-on" viewBox="0 0 240 240" focusable="false"><path d="M96.3,186.1c1.9,1.9,1.3,4-1.4,4.4l-50.6,8.4c-1.8,0.5-3.7-0.6-4.2-2.4c-0.2-0.6-0.2-1.2,0-1.7l8.4-50.6c0.4-2.7,2.4-3.4,4.4-1.4l14.5,14.5l28.2-28.2l14.3,14.3l-28.2,28.2L96.3,186.1z M195.8,39.1l-50.6,8.4c-2.7,0.4-3.4,2.4-1.4,4.4l14.5,14.5l-28.2,28.2l14.3,14.3l28.2-28.2l14.5,14.5c1.9,1.9,4,1.3,4.4-1.4l8.4-50.6c0.5-1.8-0.6-3.6-2.4-4.2C197,39,196.4,39,195.8,39.1L195.8,39.1z"></path></svg><div class="jw-reset-text jw-tooltip jw-tooltip-fullscreen" dir="auto"><div class="jw-text"></div></div></div><div class="jw-related-shelf-container jw-reset"><div class="jw-reset jw-icon jw-icon-inline jw-related-more jw-hidden" role="button" tabindex="0"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-more-videos" viewBox="0 0 240 240" focusable="false"><path d="M0,30h60v75H0V30z M0,135h60v75H0V135z M90,135h60v75H90V135z M180,135h60v75h-60V135z M90,30h60v75H90V30z M180,30h60v75h-60V30z"></path></svg>More Videos</div><div class="jw-related-shelf-contents jw-reset"><div class="jw-reset jw-related-shelf"><div class="jw-reset jw-icon jw-related-control jw-related-control-left jw-off" role="button" aria-label="Previous" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-arrow-left" viewBox="0 0 240 240" focusable="false"><path d="M55.4,104.4c-1.1,1.1-2.2,2.3-3.1,3.6c-6.9,9.9-4.4,23.5,5.5,30.4L159.7,240l33.9-33.9l-84.9-84.9l84.9-84.9L157.3,0L55.4,104.4L55.4,104.4z"></path></svg></div><div class="jw-reset jw-related-shelf-list"><div class="jw-reset jw-related-shelf-items jw-related-shelf-start"></div></div><div class="jw-reset jw-icon jw-related-control jw-related-control-right" aria-label="Next" role="button" tabindex="0"><svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-arrow-right" viewBox="0 0 240 240" focusable="false"><path d="M183.6,104.4L81.8,0L45.4,36.3l84.9,84.9l-84.9,84.9L79.3,240l101.9-101.7c9.9-6.9,12.4-20.4,5.5-30.4C185.8,106.7,184.8,105.4,183.6,104.4L183.6,104.4z"></path></svg></div></div><div class="jw-reset jw-icon jw-icon-inline jw-related-close jw-related-more" role="button" tabindex="0" aria-label="Close">Close<svg xmlns="http://www.w3.org/2000/svg" class="jw-svg-icon jw-svg-icon-arrow-down" viewBox="0 0 240 240" focusable="false"><path d="M105.398,185.598c1.1,1.1,2.3,2.2,3.6,3.1c9.9,6.9,23.5,4.4,30.4-5.5l101.6-101.9l-33.9-33.9l-84.9,84.9l-84.9-84.9l-36.3,36.3L105.398,185.598L105.398,185.598z"></path></svg></div></div></div></div></div></div></div><div class="afs_ads" style="width: 1px; height: 1px; position: absolute; background: transparent;">&nbsp;</div></div></div></div><!-- .c-crop -->

                </figure><!-- .c-card__image -->

                <header class="c-card__header">

                  <h3 class="card-pantheon__description">

                    <a class="card-pantheon__button" href="<?php bloginfo('template_directory');?>/culture/culture-news/kadir-nelson-cover-artwork-july-2020-1014011/" data-video-gallery-card-heading="">
                      Kadir Nelson’s Inspiration for the July Cover of Gilox				</a>
                  </h3><!-- .c-card__heading -->

                  
                    <span class="c-card__tag t-semibold t-semibold--upper t-semibold--loose" data-video-gallery-card-tag="">

                      Gilox Videos
                    </span>

                  
                  <p class="c-card__lead t-copy" data-video-gallery-card-lead="">
                    "I want everyone in this painting — particularly the African American women and children — to know that they matter," artist says			</p><!-- /.c-card__lead t-copy -->

                  
                </header><!-- .c-card__header -->
              </div><!-- .c-card__wrap -->
            </article><!-- .c-card -->
              </div><!-- /.c-video-gallery__main -->


            <div class="c-video-gallery__slider c-slider " data-slider="" data-slider--centered="">

              
              <a href="" class="c-slider__nav c-slider__nav--left" data-slider-nav="prev">
                <svg class="c-slider__icon"><use xlink:href="#svg-icon-chevron"></use></svg>
              </a>
              <a href="" class="c-slider__nav c-slider__nav--right" data-slider-nav="next">
                <svg class="c-slider__icon"><use xlink:href="#svg-icon-chevron"></use></svg>
              </a>

              <div class="c-slider__track" data-slider-track="" style="transform: translateX(-124.363px);">
                
                <div class="c-video-gallery__item c-slider__item" data-slider-item="">
                  
            <article class="c-card c-card--video-thumb  t-semibold">
              <a href="<?php bloginfo('template_directory');?>/tv/tv-news/thomas-middleditch-ben-schwartz-comedy-990868/" class="c-card__wrap" data-video-gallery-thumb="" data-tag="TV" data-heading="‘The First Time’: Thomas Middleditch and Ben Schwartz" data-lead="The comedy duo have a new improv series on Netflix, 'Middleditch &amp; Schwartz'" data-permalink="<?php bloginfo('template_directory');?>/tv/tv-news/thomas-middleditch-ben-schwartz-comedy-990868/" data-tag-permalink="/tv/">

                <figure class="c-card__image" data-active-text="Now Playing">
                  <div hidden="">
                    <script type="text/javascript" src="https://content.jwplatform.com/libraries/zFOPDjEV.js"></script><div id="jwplayer_QiQSuoWk_div" data-videoid="QiQSuoWk" data-jsonfeed="https://content.jwplatform.com/feeds/QiQSuoWk.json" data-jwplayer-id="jwplayer_QiQSuoWk_div"></div>			</div>

                  
                  <div class="c-crop c-crop--ratio-7x4">
                    <img width="1260" height="720" src="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300" data-src="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300" class="c-crop__img wp-post-image visible" alt="thomas middleditch ben schwartz" data-srcset="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300 300w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=450 450w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=350 350w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=210 210w" sizes="(max-width: 480px) 210px, (max-width: 767px) 350px,(max-width: 959px) 450px, 300px" srcset="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300 300w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=450 450w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=350 350w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=210 210w">			</div><!-- .c-crop -->

                </figure><!-- .c-card__image -->

                <header class="c-card__header">

                  <h3 class="c-card__heading ">
                    ‘The First Time’: Thomas Middleditch and Ben Schwartz			</h3><!-- .c-card__heading -->

                </header><!-- .c-card__header -->
              </a><!-- .c-card__wrap -->
            </article><!-- .c-card -->
                </div><!-- /.c-video-gallery__item c-slider__item -->

                
                <div class="c-video-gallery__item c-slider__item" data-slider-item="">
                  
            <article class="c-card c-card--video-thumb  t-semibold">
              <a href="<?php bloginfo('template_directory');?>/music/music-news/sting-in-my-room-video-993023/" class="c-card__wrap" data-video-gallery-thumb="" data-tag="Music" data-heading="‘In My Room’ With Sting" data-lead="Sting performs &quot;Message in a Bottle,&quot; &quot;Fragile,&quot; &quot;Englishman in New York&quot; from his home studio" data-permalink="<?php bloginfo('template_directory');?>/music/music-news/sting-in-my-room-video-993023/" data-tag-permalink="/music/">

                <figure class="c-card__image" data-active-text="Now Playing">
                  <div hidden="">
                    <script type="text/javascript" src="https://content.jwplatform.com/libraries/CbSoxmhC.js"></script><div id="jwplayer_MCd0q6VB_div" data-videoid="MCd0q6VB" data-jsonfeed="https://content.jwplatform.com/feeds/MCd0q6VB.json" data-jwplayer-id="jwplayer_MCd0q6VB_div"></div>			</div>

                  
                  <div class="c-crop c-crop--ratio-7x4">
                    <img width="1260" height="720" src="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300" data-src="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300" class="c-crop__img wp-post-image visible" alt="sting in my room" data-srcset="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300 300w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=450 450w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=350 350w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=210 210w" sizes="(max-width: 480px) 210px, (max-width: 767px) 350px,(max-width: 959px) 450px, 300px" srcset="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300 300w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=450 450w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=350 350w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=210 210w">			</div><!-- .c-crop -->

                </figure><!-- .c-card__image -->

                <header class="c-card__header">

                  <h3 class="c-card__heading ">
                    ‘In My Room’ With Sting			</h3><!-- .c-card__heading -->

                </header><!-- .c-card__header -->
              </a><!-- .c-card__wrap -->
            </article><!-- .c-card -->
                </div><!-- /.c-video-gallery__item c-slider__item -->

                
                <div class="c-video-gallery__item c-slider__item" data-slider-item="">
                  
            <article class="c-card c-card--video-thumb  t-semibold">
              <a href="<?php bloginfo('template_directory');?>/culture/culture-news/kadir-nelson-cover-artwork-july-2020-1014011/" class="c-card__wrap is-active" data-video-gallery-thumb="" data-tag="Culture" data-heading="Kadir Nelson’s Inspiration for the July Cover of Gilox" data-lead="&quot;I want everyone in this painting — particularly the African American women and children — to know that they matter,&quot; artist says" data-permalink="<?php bloginfo('template_directory');?>/culture/culture-news/kadir-nelson-cover-artwork-july-2020-1014011/" data-tag-permalink="/culture/">

                <figure class="c-card__image" data-active-text="Now Playing">
                  <div hidden="">
                    <iframe type="text/html" width="670" height="407" data-src="https://www.youtube.com/embed/bjzj0x2WFA8?version=3&amp;rel=1&amp;fs=1&amp;autohide=2&amp;showsearch=0&amp;showinfo=1&amp;iv_load_policy=1&amp;wmode=transparent" allowfullscreen="true" style="border:0;"></iframe>			</div>

                  
                  <div class="c-crop c-crop--ratio-7x4">
                    <img width="1260" height="720" src="<?php bloginfo('template_directory');?>/images/video/sample.jpg" data-src="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300" class="c-crop__img wp-post-image visible" alt="Kadir - Gilox Cover" data-srcset="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300 300w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=450 450w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=350 350w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=210 210w" sizes="(max-width: 480px) 210px, (max-width: 767px) 350px,(max-width: 959px) 450px, 300px" srcset="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300 300w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=450 450w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=350 350w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=210 210w">			</div><!-- .c-crop -->

                </figure><!-- .c-card__image -->

                <header class="c-card__header">

                  <h3 class="c-card__heading ">
                    Kadir Nelson’s Inspiration for the July Cover of Gilox			</h3><!-- .c-card__heading -->

                </header><!-- .c-card__header -->
              </a><!-- .c-card__wrap -->
            </article><!-- .c-card -->
                </div><!-- /.c-video-gallery__item c-slider__item -->

                
                <div class="c-video-gallery__item c-slider__item" data-slider-item="">
                  
            <article class="c-card c-card--video-thumb  t-semibold">
              <a href="<?php bloginfo('template_directory');?>/politics/politics-news/senator-kamala-harris-interview-jamil-smith-988800/" class="c-card__wrap" data-video-gallery-thumb="" data-tag="Politics" data-heading="‘RS Interview: Special Edition’ With Sen. Kamala Harris" data-lead="The former presidential candidate speaks with senior writer Jamil Smith about her new effort to protect November’s election from the coronavirus" data-permalink="<?php bloginfo('template_directory');?>/politics/politics-news/senator-kamala-harris-interview-jamil-smith-988800/" data-tag-permalink="/politics/">

                <figure class="c-card__image" data-active-text="Now Playing">
                  <div hidden="">
                    <div id="jwplayer_zXyORl5f_div" data-videoid="zXyORl5f" data-jsonfeed="https://content.jwplatform.com/feeds/zXyORl5f.json" data-jwplayer-id="jwplayer_zXyORl5f_div"></div>			</div>

                  
                  <div class="c-crop c-crop--ratio-7x4">
                    <img width="1200" height="720" src="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300" class="c-crop__img wp-post-image visible" alt="Kamala Harris" data-srcset="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300 300w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=450 450w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=350 350w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=210 210w" sizes="(max-width: 480px) 210px, (max-width: 767px) 350px,(max-width: 959px) 450px, 300px" srcset="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300 300w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=450 450w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=350 350w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=210 210w">			</div><!-- .c-crop -->

                </figure><!-- .c-card__image -->

                <header class="c-card__header">

                  <h3 class="c-card__heading ">
                    ‘RS Interview: Special Edition’ With Sen. Kamala Harris			</h3><!-- .c-card__heading -->

                </header><!-- .c-card__header -->
              </a><!-- .c-card__wrap -->
            </article><!-- .c-card -->
                </div><!-- /.c-video-gallery__item c-slider__item -->

                
                <div class="c-video-gallery__item c-slider__item" data-slider-item="">
                  
            <article class="c-card c-card--video-thumb  t-semibold">
              <a href="<?php bloginfo('template_directory');?>/music/music-news/chronixx-first-time-video-991922/" class="c-card__wrap" data-video-gallery-thumb="" data-tag="Music" data-heading="The First Time: Chronixx" data-lead="Jamaican artist talks the origins of &quot;Smile Jamaica,&quot; performing to a crowd of thousands in Kenya" data-permalink="<?php bloginfo('template_directory');?>/music/music-news/chronixx-first-time-video-991922/" data-tag-permalink="/music/">

                <figure class="c-card__image" data-active-text="Now Playing">
                  <div hidden="">
                    <div id="jwplayer_8KSlzyTD_div" data-videoid="8KSlzyTD" data-jsonfeed="https://content.jwplatform.com/feeds/8KSlzyTD.json" data-jwplayer-id="jwplayer_8KSlzyTD_div"></div>			</div>

                  
                  <div class="c-crop c-crop--ratio-7x4">
                    <img width="1260" height="720" src="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300" data-src="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300" class="c-crop__img wp-post-image visible" alt="Chronixx" data-srcset="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300 300w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=450 450w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=350 350w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=210 210w" sizes="(max-width: 480px) 210px, (max-width: 767px) 350px,(max-width: 959px) 450px, 300px" srcset="<?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=300 300w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=450 450w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=350 350w, <?php bloginfo('template_directory');?>/images/video/sample.jpg?resize=1260,720&amp;w=210 210w">			</div><!-- .c-crop -->

                </figure><!-- .c-card__image -->

                <header class="c-card__header">

                  <h3 class="c-card__heading ">
                    The First Time: Chronixx			</h3><!-- .c-card__heading -->

                </header><!-- .c-card__header -->
              </a><!-- .c-card__wrap -->
            </article><!-- .c-card -->
                </div><!-- /.c-video-gallery__item c-slider__item -->

                  </div><!-- /.c-slider__track -->
            </div><!-- /.c-video-gallery__slider c-slider -->


                </div><!-- /.c-video-gallery -->
              </div><!-- /.l-section__content -->

            </div>


    </section>

    <section class="home-legends">
          <div class="home-legends__text">
            <h2 class="home-deities__title" id="legends">ALBUM REVIEWS</h2>
          </div>



          <ul class="home-legends__list">
           <?php
            $args = array(
                'posts_per_page' => 5, 
                'category_name' => 'review'
            );
            $q = new WP_Query( $args);

            if ( $q->have_posts() ) {
                while ( $q->have_posts() ) {
                $q->the_post();        
                    get_template_part( 'template-parts/content-review' );
                }
                wp_reset_postdata();
            } 
            ?>
          </ul>
          



          
        </section>
        
        <section class="home-domains">
          <div class="home-domains__text">
            <h5 class="home-domains__kicker">OUR </h5>
            <h2 class="home-domains__title" id="domains">New Discoveries</h2>
          </div>
          <div class="home-domains__groups">
            <div class="home-domains__group">
              <h4 class="home-domains__category">NIGERIA</h4>
              <ul class="home-domains__list">
                  <li class="home-domains__item">
                    <article class="card-deity card-deity--small">
        <a href="<?php echo get_home_url(); ?> class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format" >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Adekunle Productions</h4>
              <p class="card-deity__subtitle" itemprop="description">From Abeokuta</p>
            </div>
        </a></article>
                  </li>
                  <li class="home-domains__item">
                    <article class="card-deity card-deity--small">
        <a href="<?php echo get_home_url(); ?> class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Talent"
                      title="Talent"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Sola Ray Productions</h4>
              <p class="card-deity__subtitle" itemprop="description">From Ibadan</p>
            </div>
        </a></article>
                  </li>
                  <li class="home-domains__item">
                    <article class="card-deity card-deity--small">
        <a href="<?php echo get_home_url(); ?> class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Huitzilopochtli, Aztec God of War"
                      title="Huitzilopochtli, Aztec God of War"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name"> Kay Film Centre</h4>
              <p class="card-deity__subtitle" itemprop="description">From Badagry</p>
            </div>
        </a></article>
                  </li>
              </ul>
            </div>
            <div class="home-domains__group">
              <h4 class="home-domains__category">KENYA</h4>
              <ul class="home-domains__list">
                  <li class="home-domains__item">
                    <article class="card-deity card-deity--small">
        <a href="<?php echo get_home_url(); ?> class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Chang’e, Chinese Goddess of the Moon"
                      title="Chang’e, Chinese Goddess of the Moon"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Aduke Silencer</h4>
              <p class="card-deity__subtitle" itemprop="description">Best Director 2017 (AMVCA)</p>
            </div>
        </a></article>
                  </li>
                  <li class="home-domains__item">
                    <article class="card-deity card-deity--small">
        <a href="<?php echo get_home_url(); ?> class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Artemis, Greek Goddess of the Hunt"
                      title="Artemis, Greek Goddess of the Hunt"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Alani Adesola</h4>
              <p class="card-deity__subtitle" itemprop="description">Best Director 2019 (AMVCA)</p>
            </div>
        </a></article>
                  </li>
                  <li class="home-domains__item">
                    <article class="card-deity card-deity--small">
                  <a href="<?php echo get_home_url(); ?> class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                        alt="Baldur, Norse God of Light"
                        title="Baldur, Norse God of Light"
                        class="card-deity__image lazyload"
                        itemprop="url"
                        loading="lazy"
                        >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Sola Sobowale</h4>
              <p class="card-deity__subtitle" itemprop="description">Best Director 2020 (AMVCA)</p>
            </div>
        </a></article>
                  </li>
              </ul>
            </div>
            <div class="home-domains__group">
              <h4 class="home-domains__category">GHANA</h4>
              <ul class="home-domains__list">
                  <li class="home-domains__item">
                    <article class="card-deity card-deity--small">
                  <a href="<?php echo get_home_url(); ?> class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Loki, Norse Trickster God"
                      title="Loki, Norse Trickster God"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Kike Olakunle</h4>
              <p class="card-deity__subtitle" itemprop="description">Senior makeup Artisit</p>
            </div>
        </a></article>
                  </li>
                  <li class="home-domains__item">
                    <article class="card-deity card-deity--small">
        <a href="<?php echo get_home_url(); ?> class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Lugh, Celtic God of Nobility"
                      title="Lugh, Celtic God of Nobility"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Kunle Tomori</h4>
              <p class="card-deity__subtitle" itemprop="description">Director of makingup services</p>
            </div>
        </a></article>
                  </li>
                  <li class="home-domains__item">
                    <article class="card-deity card-deity--small">
        <a href="<?php echo get_home_url(); ?> class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Sun Wukong, the Monkey King"
                      title="Sun Wukong, the Monkey King"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Adediran Bode</h4>
              <p class="card-deity__subtitle" itemprop="description">Pepper Dem geng</p>
            </div>
        </a></article>
                  </li>
              </ul>
            </div>
            <div class="home-domains__group">
              <h4 class="home-domains__category">Senegal</h4>
              <ul class="home-domains__list">
                  <li class="home-domains__item">
                    <article class="card-deity card-deity--small">
        <a href="<?php echo get_home_url(); ?>" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Hades, Greek God of the Underworld"
                      title="Hades, Greek God of the Underworld"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Bimbo Jude</h4>
              <p class="card-deity__subtitle" itemprop="description">Chief bouncer</p>
            </div>
        </a></article>
                  </li>
                  <li class="home-domains__item">
                    <article class="card-deity card-deity--small">
        <a href="<?php echo get_home_url(); ?>" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Mictlantecuhtli, Aztec God of the Dead"
                      title="Mictlantecuhtli, Aztec God of the Dead"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Imisi Imole</h4>
              <p class="card-deity__subtitle" itemprop="description">Site Protocol Officer</p>
            </div>
        </a></article>
                  </li>
                  <li class="home-domains__item">
                    <article class="card-deity card-deity--small">
        <a href="<?php echo get_home_url(); ?>" class="card-deity__link" itemprop="url">    <div class="card-deity__icon" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
              <div class="card-deity__media">
                  <img data-src="<?php bloginfo('template_directory');?>/images/Avatars/1x/avatarf.jpg?q=75&amp;w=80&amp;auto=format"
                      alt="Osiris, Egyptian Lord of the Underworld"
                      title="Osiris, Egyptian Lord of the Underworld"
                      class="card-deity__image lazyload"
                      itemprop="url"
                      loading="lazy"
                      >
              </div>
            </div>
            <div class="card-deity__text">
              <h4 class="card-deity__title" itemprop="name">Itele </h4>
              <p class="card-deity__subtitle" itemprop="description">Undertaker specialist</p>
            </div>
        </a></article>
                  </li>
              </ul>
            </div>
          </div>
          
        </section>
        
        <section class="home-stories">
          <div class="home-stories__text">
            <h2 class="home-deities__title" id="stories">MOVIE REVIEWS</h2>
          </div>

          <ul class="home-legends__list">
           <?php
            $args = array(
                'posts_per_page' => 5, 
                'category_name' => 'movie'
            );
            $q = new WP_Query( $args);

            if ( $q->have_posts() ) {
                while ( $q->have_posts() ) {
                $q->the_post();        
                    get_template_part( 'template-parts/content-review' );
                }
                wp_reset_postdata();
            } 
            ?>
          </ul>

        </section>
        
        <section class="home-feature">
          <article class="card-feature" itemscope itemtype="<?php echo get_home_url(); ?>">
          <a href="<?php echo get_home_url(); ?>" class="card-feature__media" itemprop="image" itemscope itemtype="<?php echo get_home_url(); ?>">
            <img src="<?php bloginfo('template_directory');?>/images/non/wizkid.jpg" class="card-feature__image" alt="Afrobeats" />
          </a>
          <div class="card-feature__panel">
            <div class="card-feature__text">
              <h5 class="card-feature__kicker">Featured</h5>
              <h2 class="card-feature__title" itemprop="name">
                <a href="<?php echo get_home_url(); ?>" class="card-feature__link" itemprop="url">The Home of Afrobeats</a>
              </h2>
                <div class="card-feature__author" itemprop="author" itemscope itemtype="<?php echo get_home_url(); ?>">
                  <a href="authors/mythopedia-editors/index.html" class="card-feature__author-name" itemprop="url">
                    <span itemprop="name">Gilox Editors</span>
                  </a>
                </div>
              <p class="card-feature__description">Explore the works of great African artists, including Davido, Olamide and 9ice, Tuface, Wizkid, King Sunny Ade, Ebenezer Obey and more..</p>
              <a href="<?php echo get_home_url(); ?>" class="card-feature__button">Discover<span class"card-feature__arrow"></span></a>
          </div>
          </div>
        </article>
        <section class="home-stories">
          <div class="home-stories__text">
            <h2 class="home-deities__title" id="stories">Editors Pick</h2>
          </div>
            <ul class="home-stories__list">
              <?php
                $args = array(
                    'posts_per_page' => 5, 
                    'category_name' => 'movie'
                );
                $q = new WP_Query( $args);

                if ( $q->have_posts() ) {
                    while ( $q->have_posts() ) {
                    $q->the_post();        
                        get_template_part( 'template-parts/content-review' );
                    }
                    wp_reset_postdata();
                } 
                ?>
            </ul>
            <ul class="home-stories__list">
              
            </ul>
        </section>
    </section>
        
        
  </main>


<?php
get_footer();
?>

</body>