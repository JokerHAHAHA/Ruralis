<?php


get_header(); ?>

<body>

    <div class="ancre" name="valeurs" id="valeurs"></div>
    <section id="description">
        <p>Illustrant une ruralité vivante, riche de ses initiatives </br>locales et de ses capacités d’innovation sociale,<br>citoyenne et agricole, Ruralis Magazine ambitionne de donner à voir les transformations des territoires ruraux en participant de façon volontariste et délibérément optimiste à la réflexion du devenir des campagnes et de leur nouvelle gouvernance.</p>

    </section>

    <section id="territoire">
        <h4>TERRITOIRES EN DEVENIR</h4>
        <?php
        $queried_post = get_post(68);
        echo $queried_post->post_content;
        ?>
    </section>

    <div class="ancre" name="editoriale" id="editoriale"></div>

    <section id="editorial">
        <div class="edit">
            <h5>Un constat</h5>
            <p>Quand on parle des problématiques
                de l’aménagement des territoires
                ruraux, nous observons que
                les grands médias (l’audiovisuel et 
                la presse écrite) ne semblent s’y
                intéresser que de façon 
                épisodique et fragmentée au seul 
                ressort des éruptions sociales, des
                colères économiques ou de
                la détresse culturelle.</p>
            </div>
            <div class="edit">
                <h5>qui conforte</h5>
                <p>Ce constat nous conduit à croire
                    qu’une nouvelle aventure éditoriale
                    est possible. 
                    Nous nous inscrivons dans un
                    journalisme de profondeur et de
                    solutions. 
                    Cette démarche journalistique
                    promet de décrypter les enjeux à
                    venir et de diffuser l’envie d’agir.</p>
                </div>
                <div class="edit">
                    <h5>notre projet éditorial</h5>
                    <p>RURALIS Magazine,
                        un trimestriel de 96 pages
                        en quadrichromie
                        au format 19x27. 
                        Un travail d’enquête approfondie
                        de terrain, de rencontres,
                        d’échanges, de questionnement au
                        service de l’évolution des campagnes françaises.</p>
                    </div>
                </section>

                <section id="arpenteurs">
                    <img id="magazine" src="wp-content/themes/Ruralis/img/Couverture.png" alt="Couverture magazine" />

                    <div id="textarp">
                        <h5>Arpenteurs des territoires</h5>
                        <p>Photographie, dessins et infographie seront les principales clés de lecture des sujets. Ce parti pris d’une maquette visuelle renforce le pouvoir immersif des reportages au plus près de l’action et complète le travail pertinent d’un rédactionnel de terrain. Ce magazine papier, à diffusion nationale, veut explorer la géo-diversité des campagnes françaises en rendant vivante et immersive chaque part d’humanité sous forme d’histoires incarnées.</p></div>
                    </section>

                    <section id="objectifs">
                        <p id="para">Pour vous garantir, chers(ères) lecteur (trices),
                            le respect à la lettre de notre charte éditoriale,
                            nous avons fait le choix du statut associatif dans l’esprit novateur de
                            l’entreprise solidaire de presse d’information
                            qui permet d’encourager </br>l’émergence et la diversité de nouveaux médias.</p>
                            <a id="bilan" href="wp-content/themes/Ruralis/img/Business%20plan%20Ruralis%20Magazine.pdf" target="_blank"><p class="txtorange">Objectif : 5000 abonnées</p></a>
                            <p>Elus des territoires ruraux, acteurs du monde agricole, 
                                citoyens engagés sur le terrain, 
                                dans l’action associative ou simple amoureux des paysages
                                de la campagne française, 
                                le pouvoir de nous faire exister est désormais entre vos mains.</p>

                                <div class="ancre" name="abonnements" id="abonnements"></div>
                                <div id="flexabonnes">
                                    <div id="nbabonnes">
                                        <p>ACTUELLEMENT</p>
                                        <p><?php
                                            $queried_post = get_post(66);
                                            echo $queried_post->post_content;
                                            ?></p>
                                            <p>abonné(e)s</p>

                                        </div>

                                        <img src="wp-content/themes/Ruralis/img/fleche.png" alt="fleche" />

                                        <div id="txtobjectif">
                                            <p>OBJECTIF</p>
                                            <p id="nb">5000</p>
                                            <p> abonné(e)s</p>
                                        </div>

                                        <img src="wp-content/themes/Ruralis/img/fleche.png" alt="fleche" />

                                        <a id="savoir" href="wp-content/themes/Ruralis/img/Business%20plan%20Ruralis%20Magazine.pdf" target="_blank">en savoir plus</a>
                                    </div>
                                </section>


                                <section id="abonnement"> 
                                    <a href="/wordpress/wp-content/themes/Ruralis/img/formulaire48.pdf" target="_blank">
                                        <img class="logoabt" src="wp-content/themes/Ruralis/img/bouton-vert%20.png" alt="logo48"  />
                                    </a>
                                    <a href="/wordpress/wp-content/themes/Ruralis/img/formulaire150.pdf" target="_blank">
                                        <img class="logoabt" src="wp-content/themes/Ruralis/img/bouton-jaune%20.png" alt="logo150"  />
                                    </a>
                                    <a href="/wordpress/wp-content/themes/Ruralis/img/formulaire250.pdf" target="_blank">
                                        <img class="logoabt" src="wp-content/themes/Ruralis/img/bouton-orange%20.png" alt="logo250"  />
                                    </a>
                                </section>

                                <section id="citation">
                                    <img id="img1" src="wp-content/themes/Ruralis/img/logoarbre.png" alt="mini logo" />
                                    <div>
                                        <p>Dans une société en crise et en panne d'imagination, le monde rural ne pourrait-il pas être, pour une fois, un espace d'invention, d'innovation social ?</p>
                                        <p id="auteur">Préface <i>"Ils ont choisi la campagne"</i> de Bernard KAYSER</p>
                                    </div>
                                    <img id="img2" src="wp-content/themes/Ruralis/img/logoarbre.png" alt="mini logo" />

                                </section>


                                <div class="ance" name="notreequipe" id="equipe"></div>
                                <section id="trombi">
                                    <img src="wp-content/themes/Ruralis/img/trombi.png" alt="trombinoscope de l'équipe de rédaction, des journalistes, du magazine Ruralis">
                                    <div> 
                                    </br><h6>Sylvie BRAIBANT</h6></br>
                                    <p>Journaliste politique internationale, elle travaille dix ans pour la chaîne audiovisuelle TF1, écrit quelques livres puis intègre la rédaction de TV5 Monde où elle exerce ses talents de rédactrice en chef, et en particulier sur le site Terriennes, dédié à la condition des femmes dans le monde.  Elle collabore aussi régulièrement au Monde diplomatique.</p>
                                </div>
                                <div>
                                </br><h6>Françoise ROCHER</h6></br>
                                <p>Secrétaire Générale adjointe du Groupe Lagardère, elle exerce sa profession de juriste dans le domaine de la presse et de l’édition. </p>
                            </div>
                            <div>
                            </br><h6>Eric MANGEAT</h6></br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non fringilla dui, id tincidunt purus. Sed a odio eget nibh vehicula ultrices. Sed consectetur accumsan ex, ut molestie nisi consequat in. Donec posuere sapien tortor, at rutrum tortor tristique in. Nam ornare scelerisque erat, quis convallis arcu pretium sodales. Fusce semper, erat pharetra pulvinar suscipit, velit nibh hendrerit lacus, et varius nunc lorem nec turpis.</p>
                        </div>
                        <div>
                        </br><h6>Armelle GOUEROU</h6></br>
                        <p>Co-animatrice du projet magazine, elle est journaliste-formatrice et rebondit à l’idée originale du projet en proposant « d’avoir de la suite dans les idées ». Elle apporte son regard exigeant sur la ligne éditoriale et l’esprit qui en découle afin de tisser un canevas harmonieux et séduisant. Elle met aussi à disposition son expertise professionnelle des ressources humaines et ses connaissances administratives.</p>
                    </div>
                    <div>
                    </br><h6>Bruno MOLLIERE</h6></br>
                    <p>Dessiner, écrire, observer la nature et randonner est son activité professionnelle. Spécialisé dans l’enseignement du dessin au cours d’une randonnée, il se consacre à l’édition d’ouvrages sur les techniques de croquis, à l’encadrement de stages d’initiation à l’aquarelle et au dessin. Il est aussi le créateur des « Sentiers Randocroquis » en France et en Europe.</p>
                </div>
            </section>
            <footer>
                <a href="http://www.wildcodeschool.fr" target="_blank"><img id="logowcs" src="wp-content/themes/Ruralis/img/logowcs.png" alt="logo de la Wild Code School" /></a>
                <?php
                $queried_post = get_post(73);
                echo $queried_post->post_content;
                ?>
            </footer>

        </body>

        <script src="wp-content/themes/Ruralis/jquery-1.12.0.min.js"></script>
        <script>
            $(document).ready(function(){
                var offset2 = $(document).height();
                var lineHF = offset2 - $("#bottommark").position().top;
                $(window).scroll(function(){
                    var offset1 = $(document).height() - window.screen.availHeight;
                    var offset = $(window).scrollTop();
                    var lineH = offset1 - $("#bottommark").position().top - offset;
                    var lineHpart = lineHF/15;

                    $("span").html(lineH);
                    if (lineH > lineHpart*15) {
                        $("#animation").attr("src", "wp-content/themes/Ruralis/img/logoarbre1.png");
                    }
                    if ((lineH < lineHpart*14) && (lineH > lineHpart*13)) {
                        $("#animation").attr("src", "wp-content/themes/Ruralis/img/logoarbre2.png");
                    }
                    if ((lineH < lineHpart*13) && (lineH > lineHpart*12)) {
                        $("#animation").attr("src", "wp-content/themes/Ruralis/img/logoarbre3.png");
                    }
                    if ((lineH < lineHpart*12) && (lineH > lineHpart*11)) {
                        $("#animation").attr("src", "wp-content/themes/Ruralis/img/logoarbre4.png");
                    }
                    if ((lineH < lineHpart*11) && (lineH > lineHpart*10)) {
                        $("#animation").attr("src", "wp-content/themes/Ruralis/img/logoarbre5.png");
                    }
                    if ((lineH < lineHpart*10) && (lineH > lineHpart*9)) {
                        $("#animation").attr("src", "wp-content/themes/Ruralis/img/logoarbre6.png");
                    }
                    if ((lineH < lineHpart*9) && (lineH > lineHpart*8)) {
                        $("#animation").attr("src", "wp-content/themes/Ruralis/img/logoarbre7.png");
                    }
                    if ((lineH < lineHpart*8) && (lineH > lineHpart*7)) {
                        $("#animation").attr("src", "wp-content/themes/Ruralis/img/logoarbre8.png");
                    }
                    if ((lineH < lineHpart*7) && (lineH > lineHpart*6)) {
                        $("#animation").attr("src", "wp-content/themes/Ruralis/img/logoarbre9.png");
                    }
                    if ((lineH < lineHpart*6) && (lineH > lineHpart*5)) {
                        $("#animation").attr("src", "wp-content/themes/Ruralis/img/logoarbre10.png");
                    }
                    if ((lineH < lineHpart*5) && (lineH > lineHpart*4)) {
                        $("#animation").attr("src", "wp-content/themes/Ruralis/img/logoarbre11.png");
                    }
                    if ((lineH < lineHpart*4) && (lineH > lineHpart*3)) {
                        $("#animation").attr("src", "wp-content/themes/Ruralis/img/logoarbre12.png");
                    }
                    if ((lineH < lineHpart*3) && (lineH > lineHpart*2)) {
                        $("#animation").attr("src", "wp-content/themes/Ruralis/img/logoarbre13.png");
                    }
                    if ((lineH < lineHpart*2) && (lineH > lineHpart*1)) {
                        $("#animation").attr("src", "wp-content/themes/Ruralis/img/logoarbre14.png");
                    }
                    if (lineH < lineHpart) {
                        $("#animation").attr("src", "wp-content/themes/Ruralis/img/logoarbre15.png");
                    }
                });
            });
        </script>

