<!DOCTYPE html>
<?php
require_once 'sql/Sql.php';
$sql = new Sql;
$band = $sql->band();
?>

<html>

<head>
    <link rel="icon" type="image/jpeg" href="assets/img/<?php echo $band['logo']; ?>" />
    <title><?php echo $band['name']; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <header>

        <!-- ArrowUp -->
        <div id="arrowup">
            <a href="#" title="Haut de Page"><img src="assets/img/neon/ArrowUp.png"></img></a>
        </div>
        <div id="wrapper">
            <div class="overlay"></div>

            <!-- Sidebar -->
            <nav class="navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
                <div class="responsive-cross">
                    <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                        <span class="hamb-top"></span>
                        <span class="hamb-middle"></span>
                        <span class="hamb-bottom"></span>
                    </button>
                </div>
                <ul class="nav sidebar-nav">
                    <div class="sidebar-header">
                        <div class="sidebar-brand">
                            <a href="#">
                                <div class="menu">
                                    <img src="assets/img/<?php echo $band['logo']; ?>" style="width: 100px;">
                                </div>
                            </a>
                        </div>
                    </div>
                    <li><a href="#recordings">NOTRE SON</a></li>
                    <li><a href="#news">NOTRE ACTU</a></li>
                    <li><a href="#videos">NOS VIDEOS</a></li>
                    <li><a href="#concerts">NOS CONCERTS</a></li>
                    <li><a href="#contact">CONTACTEZ-NOUS</a></li>
                    <li><a href="admin/login-form.php">SE CONNECTER</a></li>
                </ul>
            </nav>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div>
                <button type="button" class="hamburger animated fadeInLeft is-closed desktop-cross" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
    </header>
    <main>
        <!-- section "title" -->
        <section class="hero">

            <div class="container">
                <div class="theater-sign ">
                    <div class="sign-top">
                        <div class="sign-lines">
                            <div class="sign-line"></div>
                            <div class="sign-line"></div>
                            <div class="sign-line"></div>
                        </div>
                        <div class="sign-title">NIWEE</div>
                        <div class="sign-title">Prod.</div>
                        <div class="sign-lines">
                            <div class="sign-line"></div>
                            <div class="sign-line"></div>
                            <div class="sign-line"></div>
                        </div>
                    </div>
                    <div class="grid-container">
                        <div class="grid">
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                            <div class="grid-cells"></div>
                        </div>
                    </div>
                    <div class="show-details">pr??sente<br>
                        <span style="color: #000000;"><?php echo $band['name']; ?></span>
                    </div>
                </div>
            </div>
        </section>
        <!-- section "Notre Son" -->
        <div class="section bg-white" id="recordings">
            <div class="container">
                <h2 class="section-title">Notre Son</h2>
                <div>
                    <figure class="photo col-md-12">
                        <img src="assets/img/shawn-sim-9lfubBqLbRc-unsplash.jpg" alt="batterie" />
                        <figcaption>
                            <h3>Cliquez ICI pour MUSIQUE</h3>
                        </figcaption>
                    </figure>
                </div>
                <div class="lecteur">                    
                    <iframe style="border: 0; width: 350px; height: 470px;" src="https://bandcamp.com/EmbeddedPlayer/album=57336617/size=large/bgcol=333333/linkcol=e99708/tracklist=false/transparent=true/" seamless><a href="https://peaceville.bandcamp.com/album/the-roundhouse-tapes">The Roundhouse Tapes by Opeth</a></iframe>
                
                    <iframe style="border: 0; width: 350px; height: 470px;" src="https://bandcamp.com/EmbeddedPlayer/album=117944312/size=large/bgcol=333333/linkcol=e99708/tracklist=false/transparent=true/" seamless><a href="https://seasonofmistcatalogue.bandcamp.com/album/xiii">XIII by Trepalium</a></iframe>
                
                    <iframe rel="preload" style="border: 0; width: 350px; height: 470px;" src="https://bandcamp.com/EmbeddedPlayer/album=1949509316/size=large/bgcol=333333/linkcol=e99708/tracklist=false/transparent=true/" seamless><a href="https://detorn.bandcamp.com/album/the-dark-passenger">The Dark Passenger by Detorn</a></iframe>                
                </div>
            </div>
        </div>
        <!-- section "Notre Actu" -->
        <div class="section bg-black" id="actus">
            <div class="container">
                <h2 id="news" class="section-title">Notre Actu</h2>
                <!-- sous-section "Groupe" -->
                <div id="groupe">
                    <div>
                        <figure class="photo col-md-12">
                            <img src="assets/img/gros-plan-guitare-acoustique-beau-fond-colore_169016-3530.jpg" alt="guitare" />
                            <figcaption>
                                <h3>GROUPE</h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="textGroupe">
                        <p><?php echo $band['qui']; ?></p>
                    </div>
                </div>
                <hr>
                <!-- sous-section "Infos" -->
                <div id="infos">
                    <div>
                        <figure class="photo col-md-12">
                            <img src="assets/img/jared-berg-HNxKoXrGgco-unsplash.jpg" alt="cymbale" />
                            <figcaption>
                                <h3>INFOS</h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="textInfo">
                        <p>Les musiciens d'Opeth sont reconnus pour leur grande ma??trise de la technique musicale. Sur une base metal progressif et rock progressif marqu??e beaucoup par des passages de guitare acoustique, de chants clairs, mais ??galement par certaines influences jazz et blues, Opeth ajoute ?? sa musique tous les ??l??ments du death metal. L'int??gration de parties calmes et acoustiques et des m??lodies parfois seventies et progressif font souvent classer le groupe comme death metal progressif. Finalement, on pourrait classer Opeth comme ??tant du metal progressif ?? tendance death metal. Les textes se distinguent ??galement des autres groupes death metal, par des paroles beaucoup moins violentes et impliquent souvent un th??me po??tique. Les th??mes abord??s tournent souvent autour de la beaut?? et de la souffrance.</p>
                    </div>
                </div>
                <hr>
                <!-- sous-section "Albums" -->
                <div id="albums">
                    <div>
                        <figure class="photo col-md-12">
                            <img src="assets/img/kelsey-powers-abOAIvrD5_k-unsplash.jpg" alt="mur d'albums" />
                            <figcaption>
                                <h3>Cliquez ICI pour ALBUMS</h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="textAlbum">
                        <p>Albums studio
                            <br>
                            1995 : Orchid
                            1996 : Morningrise
                            1998 : My Arms, Your Hearse
                            1999 : Still Life
                            2001 : Blackwater Park
                            2002 : Deliverance
                            2003 : Damnation
                            2005 : Ghost Reveries
                            2008 : Watershed
                            2011 : Heritage
                            2014 : Pale Communion
                            2016 : Sorceress
                            2019 : In Cauda Venenum
                            <br>                            
                            Albums Live
                            <br>
                            2003 : Lamentations: Live at Shepherd's Bush Empire
                            2007 : The Roundhouse Tapes
                            2010 : In Live Concert at the Royal Albert Hall
                            2018 : Gardens of the Titans: Live at Red Rocks Amphitheatre</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- section videos -->

        <div class="section bg-white" id="videos">
            <div class="container">
                <div class="row">
                    <h2 class="section-title text-dark">Nos Vid??os</h2>
                    <div class="col-md-6">
                        <iframe src="https://www.youtube.com/embed/mYKLvYGqaC0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                        <iframe src="https://www.youtube.com/embed/77EeUimiOro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>                    
                </div>
            </div>
        </div>

        <!-- section live dates & towns -->
        <div class="section bg-black" id="concerts">
            <div class="container">
                <div>
                    <h2 class="section-title text-light">Nos Concerts</h2>
                    <figure class="photo col-md-12"><img src="/assets/img/arton106880.png" alt="fosse en d??lire">
                        <figcaption>
                            <h3>Cliquez ICI pour Dates & Villes</h3>
                        </figcaption>
                    </figure>
                </div>
                <div class="textConcert">
                    <p>Paris-22/07/2022-Le Trianon
                        <br>
                        Clermont-Ferrand-30/07/2022-La Coop??rative de Mai
                        <br>
                        Marseille-20/08/2022-Le D??me
                    </p>
                </div>
            </div>
        </div>

        <!-- contact form -->
        <div class="section bg-white" id="contact">
            <h2 class="section-title">Contactez-nous !</h2>

            <div class="container">
                <div class="row">
                    <div>
                        <?php require_once 'form/contact-form.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <?php require_once 'template/footer-basic.php'; ?>

</body>

</html>