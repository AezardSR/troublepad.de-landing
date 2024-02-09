<?php
/*
Template Name: Landing Page
*/
?>
<?php get_header(); ?>

<div class="content-area">
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
</div>

<?php if (have_rows('slider-top')) : ?>

    <div id="troublepad" class="slider-top anchor-target">

        <?php while (have_rows('slider-top')) : the_row(); ?>

            <?php if (have_rows('slide_1')) : ?>

                <?php while (have_rows('slide_1')) : the_row();
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                ?>

                    <div class="slide-top">
                        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <div class="slide-caption">
                            <h1>Störfälle in Fertigungsstraßen:</h1>
                            <h2>Optische Erfassung und Analyse der <span>Ursachen.</span></h2>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

            <?php if (have_rows('slide_2')) : ?>

                <?php while (have_rows('slide_2')) : the_row();
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                ?>

                    <div class="slide-top">
                        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <div class="slide-caption">
                            <h2>Prozesse in schnell taktenden Anlagen:</h2>
                            <h3>High-Speed-Videorecording und visuelle <span>Analyse.</span></h3>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

            <?php if (have_rows('slide_3')) : ?>

                <?php while (have_rows('slide_3')) : the_row();
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                ?>

                    <div class="slide-top">
                        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <div class="slide-caption">
                            <h2>Industrielle Wartung:</h2>
                            <h3>High-Speed-Kamerasystem zur optischen <span>Analyse.</span></h3>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>


            <?php if (have_rows('slide_4')) : ?>

                <?php while (have_rows('slide_4')) : the_row();
                            $image = get_sub_field('image');
                ?>

                    <div class="slide-top">
                        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

        <?php endwhile; ?>

    </div>

<?php endif; ?>

<div class="container-content">

    <div id="system" class="section-content anchor-target das-system">
        <h2 class="custom-h2 first-h2"><span>TroublePad.</span> Das System.</h2>
        <div class="das-system-panel1">
            <div class="panel1-content ">
                <ul class="features present-system">
                    <li>High-Speed-Kamerasystem</li>
                    <li>12" Tablet</li>
                    <li>Analysesoftware</li>
                </ul>
            </div>
            <div class="panel-img">
                <img src="https://troublepad.de/wp-content/uploads/2023/10/TP-System.png" alt="Tablet with software interface">
            </div>
        </div>
    </div>

    <div class="section-content das-system">
        <div>
            <h2 class="custom-h2 nd-title"><span>TroublePad.</span> Das System.</h2>

        </div>
        <div class="das-system-panel1 ">
            <div class="panel2-content present-system">
                <h3>Einsatzmöglichkeiten :</h3>
                <ul class="features">
                    <li><span>Störfälle in Fertigungsstraßen:</span></br> Mobile Systemlösung zur optischen Erfassung und Analyse von Störfallursachen.</li>
                    <li><span>Prozesse in schnell taktenden Anlagen:</span></br> High-Speed-Videorecording und visuelle Analyse.</li>
                    <li><span>Industrielle Wartung:</span></br> High-Speed-Kamerasystem für optische Analyse.</li>
                </ul>
            </div>
            <div class="panel-img">
                <img src="https://troublepad.de/wp-content/uploads/2023/10/TP-System.png" alt="Tablet with software interface" width="500">
            </div>
        </div>
    </div>

    <div class="section-content das-system">
        <h2 class="custom-h2"><span>TroublePad.</span> Das System.</h2>
        <div class="container">
            <div class=" panel-3">
                <div class="present-system">
                    <h3>Überblick</h3>
                    <ul class="features">
                        <li>CMOS 1.3 MP</li>
                        <li>12" Tablet</li>
                        <li>Video-Analysesoftware</li>
                        <li>Diverse Objektive zur Auswahl</li>
                        <li>Fernbedienung (manuell oder Funk)</li>
                        <li>Loop- oder Langzeitaufnahmen</li>
                        <li>AVI-Videoexport</li>
                    </ul>
                </div>
                <div>
                    <div class="present-system">
                        <ul class="features">
                            <li>Fernsteuerung über Triggerbox</li>
                            <li>Einsatz auch auf engstem Raum</li>
                            <li>Positionierung an oder in der Fertigungsstraße</li>
                            <li>Optional in IP68</li>
                            <li>Umfangreiches Zubehör</li>
                            <li>Lieferung im Hartschalenkoffer</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel-img">
                <img src="https://troublepad.de/wp-content/uploads/2023/10/TP-System.png" alt="TroublePad System" width="500">
            </div>
        </div>
    </div>

    <div id="software" class="section-content anchor-target">
        <h2 class="custom-h2"><span>TroublePad.</span> Die Software.</h2>
        <div class="desc-slider">
            <p>Mit dem High-Speed-Kamerasystem Trouble Pad nehmen Sie Ihre ersten Videos nach nur wenigen Minuten auf. Die Bildanalysesoftware des TroublePad besitzt eine intuitive, leicht zu bedienende Oberfläche.
            Die sofortige Zeitlupenwiedergabe Ihrer Videosequenzen hilft Ihnen Störfallursachen zu erkennen, zu analysieren und Abweichungen aufzuschlüsseln die dem menschlichen Auge verborgen bleiben.
            </p>
        </div>
        <div class="die-software">
            <?php

            if (have_rows('die_software')) :

                while (have_rows('die_software')) : the_row();
            ?>
                    <div class="side-die-software">
                        <div id="slide-mid-1">
                            <div class="present-system">
                                <?php echo get_sub_field('present-system'); ?>
                            </div>
                            <div>
                            </div>
                        </div>
                        <div id="slide-mid-2" class="present-system">
                            <?php echo get_sub_field('present-system_2'); ?>
                        </div>
                        <div id="slide-mid-3" class="present-system">
                            <?php echo get_sub_field('present-system_3'); ?>
                        </div>
                        <div id="slide-mid-4" class="present-system">
                            <?php echo get_sub_field('present-system_4'); ?>
                        </div>
                        <div>
                            <div class="blue-bg">
                                <a href="#Testen">Testen Sie TroublePad in Ihrem Unternehmen</a>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (have_rows('slider')) :
                        while (have_rows('slider')) : the_row();
                    ?>
                            <div id="slider-container">
                                <div id="slider_mid">
                                    <?php
                                    for ($i = 1; $i <= 4; $i++) {
                                        $image_field = "image_" . $i;
                                        $image = get_sub_field($image_field);
                                        if ($image) :
                                    ?>
                                            <img class="slide_mid" src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>">
                                    <?php
                                        endif;
                                    }
                                    ?>
                                </div>
                                <div class="slider-panel">
                                    <img id="prev-btn" src="<?php echo get_template_directory_uri() . '/landing/imgs/prev.svg'; ?>" alt="">
                                    <div id="slider-status">
                                    </div>
                                    <img id="next-btn" src="<?php echo get_template_directory_uri() . '/landing/imgs/next.svg'; ?>" alt="">
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>

            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>


    <div id="einsatzbereiche" class="section-content anchor-target">
        <h2 class="custom-h2"><span>TroublePad.</span> Industrielle Einsatzbereiche.</h2>

        <div class="grid-industrie">
            <div class="image-container">
                <img src="<?php echo get_template_directory_uri() . '/landing/imgs/Pharma.jpg'; ?>" alt="Pharma">
                <span>Pharma</span>
            </div>
            <div class="image-container">
                <img src="<?php echo get_template_directory_uri() . '/landing/imgs/Getränke.jpg'; ?>" alt="Getränke">
                <span>Getränke</span>
            </div>
            <div class="image-container">
                <img src="<?php echo get_template_directory_uri() . '/landing/imgs/Lebensmittel.jpg'; ?>" alt="Lebensmittel">
                <span>Lebensmittel</span>
            </div>
            <div class="image-container">
                <img src="<?php echo get_template_directory_uri() . '/landing/imgs/Papier, Druck.jpg'; ?>" alt="Papier, Druck">
                <span>Papier, Druck</span>
            </div>
            <div class="image-container">
                <img src="<?php echo get_template_directory_uri() . '/landing/imgs/Elektro.jpg'; ?>" alt="Elektro">
                <span>Elektro</span>
            </div>
            <div class="image-container">
                <img src="<?php echo get_template_directory_uri() . '/landing/imgs/Maschinenbau.jpg'; ?>" alt="Maschinenbau">
                <span>Maschinenbau</span>
            </div>
            <div class="image-container">
                <img src="<?php echo get_template_directory_uri() . '/landing/imgs/Automobil.jpg'; ?>" alt="Automobil">
                <span>Automobil</span>
            </div>
            <div class="image-container">
                <img src="<?php echo get_template_directory_uri() . '/landing/imgs/Verpackung.jpg'; ?>" alt="Verpackung">
                <span>Verpackung</span>
            </div>
            <div class="image-container">
                <img src="<?php echo get_template_directory_uri() . '/landing/imgs/Chemie.jpg'; ?>" alt="Chemie">
                <span>Chemie</span>
            </div>
            <div class="image-container">
                <img src="<?php echo get_template_directory_uri() . '/landing/imgs/Zellstoff.jpg'; ?>" alt="Zellstoffherstellung">
                <span>Zellstoffherstellung</span>
            </div>
        </div>
    </div>

    <div id="Testen" class="section-content anchor-target">
        <h2 class="custom-h2"><span>TroublePad.</span> Testen.</h2>
        <div class="Testen-container">
            <div>
                <h3>Testen Sie TroublePad in Ihrem Unternehmen.</h3>
                <p>Um unser High-Speed Kamerasystem auf Herz und Nieren zu prüfen, können Sie TroublePad während einer Woche (5&nbsp;Arbeitstage) in Ihrem Unternehmen testen.</p>
                <h3>Interessiert?</h3>
                <p>Schreiben Sie an:</br>
                    <a href="mailto:dach@claravision.fr">dach@claravision.fr</a>. (Stichwort Inhousetest) oder</br>
                    senden Sie uns Ihre Anfrage über das</br>
                    <a href="#kontakt">Anfrageformular.</a>
            </div>
            <div class="panel-img">
                <img src="https://troublepad.de/wp-content/uploads/2023/10/TP-System.png" alt="Tablet with software interface">
            </div>
        </div>
    </div>

    <div id="referenzen" class="section-content anchor-target">
        <h2 class="custom-h2"><span>TroublePad.</span> Referenzen (Auszug).</h2>
        <div>
            <img src="https://troublepad.de/wp-content/uploads/2023/10/Referenzen.png" alt="logo partenaire">
        </div>
    </div>

    <div id="video" class="section-content anchor-target">
        <h2 class="custom-h2"><span>TroublePad.</span> Anwendungsbeispiele.</h2>
        <?php $videos = get_field('videos');


            if ($videos) :
        ?>
            <div class="video-section">
                <div class="video-principale">
                    <?php
                    echo $videos['video_1']['iframe'];
                    ?>
                </div>
                <div class="video-side">
                    <?php

                    for ($i = 1; $i <= 7; $i++) :
                        $video_key = 'video_' . $i;

                        if (isset($videos[$video_key])) :
                            $iframe = $videos[$video_key]['iframe'];
                            $title = $videos[$video_key]['titre'];
                            $thumbnail = $videos[$video_key]['thumbnail'];
                            $id = $i;

                    ?>
                            <div class="thumbnail" onclick="changeVideo('<?php echo htmlspecialchars($iframe); ?>', '<?php echo htmlspecialchars($title); ?>', '<?php echo htmlspecialchars($id); ?>')" data-iframe-html="<?php echo esc_attr($iframe); ?>" data-video-title="<?php echo esc_attr($title); ?>" data-video-id="<?php echo esc_attr($id); ?>">
                                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>">
                                <h3><?php echo esc_html($title); ?></h3>
                            </div>
                    <?php
                        endif;
                    endfor;
                    ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div id="faq" class="section-content anchor-target">
        <h2 class="custom-h2"><span>TroublePad.</span> FAQ.</h2>
        <div class="faq-section">

            <?php
            $faq = get_field('faq');
            ?>

            <?php if ($faq) : ?>

                <?php for ($i = 1; $i <= 9; $i++) :
                ?>

                    <?php
                    $question_group_key = 'question_' . $i;

                    if (isset($faq[$question_group_key])) {

                        $question = isset($faq[$question_group_key]['question']) ? $faq[$question_group_key]['question'] : '';
                        $answer = isset($faq[$question_group_key]['answer']) ? $faq[$question_group_key]['answer'] : '';
                    ?>

                        <?php if ($question && $answer) : ?>

                            <div class="faq-item">
                                <h3 class="faq-question"><?php echo esc_html($question); ?></h3>
                                <div class="faq-answer"><?php echo $answer;
                                                        ?></div>
                            </div>

                        <?php endif; ?>

                    <?php
                    }
                    ?>

                <?php endfor; ?>

            <?php endif; ?>

        </div>
    </div>

    <div id="kontakt" class="anchor-target">
        <h2 class="custom-h2"><span>TroublePad.</span> Kontakt.</h2>
        <div id="anfrage">
            <?php echo do_shortcode('[contact-form-7 id="c6b6e24" title="Formulaire de contact 1"]'); ?>
        </div>
        <div class="contact-section">
            <div class="contact-group">
                <div class="contact-block">
                    <h3>Vertriebsniederlassung DACH:</h3>
                    <p>CLARA VISION SAS</p>
                    <p>Charlottenburger Allee 61</p>
                    <p>52068 Aachen</p>
                    <p>DEUTSCHLAND</p>
                </div>
                <div class="contact-block-side">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri() . '/landing/imgs/call.svg'; ?>" alt="picto téléphone"> T +49 (0) 2408.98197381</li>
                        <li><img src="<?php echo get_template_directory_uri() . '/landing/imgs/fax-machine.svg'; ?>" alt="picto fax"> F +49 (0) 2408.98197389</li>
                        <li><img src="<?php echo get_template_directory_uri() . '/landing/imgs/website.svg'; ?>" alt="picto internet"> <a href="http://www.claravision.com">www.claravision.com</a></li>
                        <li><img src="<?php echo get_template_directory_uri() . '/landing/imgs/email.svg'; ?>" alt="picto mail"> <a href="mailto:dach@claravision.fr">dach@claravision.fr</a></li>
                    </ul>
                </div>
            </div>
            <div class="contact-group">
                <div class="contact-block">
                    <h3>Hauptverwaltung:</h3>
                    <p>CLARA VISION SAS</p>
                    <p>2 Bis Route de Gisy</p>
                    <p>Parc Burospace - Bât 14 /</p>
                    <p>Bâtiment2 + BIS</p>
                    <p>91570 BIÈVRES</p>
                    <p>FRANCE</p>
                </div>
                <div class="contact-block-side contact-block-side-2">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri() . '/landing/imgs/call.svg'; ?>" alt="picto téléphone"> T +33 (0) 1.69.86.01.30</li>
                        <li><img src="<?php echo get_template_directory_uri() . '/landing/imgs/fax-machine.svg'; ?>" alt="picto fax"> F +33 (0)1.69.28.24.61</li>
                        <li><img src="<?php echo get_template_directory_uri() . '/landing/imgs/website.svg'; ?>" alt="picto internet"> <a href="http://www.claravision.com">www.claravision.com</a></li>
                        <li><img src="<?php echo get_template_directory_uri() . '/landing/imgs/email.svg'; ?>" alt="picto mail"> <a href="mailto:info@claravision.com">info@claravision.com</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


    <?php the_content(); ?>
<?php endwhile;
    endif; ?>
</div>
<footer class="footer-section">
    <div class="footer-content">
        © <a href="<?php echo home_url(); ?>">Claravision</a> 2023 -
        <a href="<?php echo get_permalink(get_page_by_path('Impressum')); ?>">Impressum</a>
    </div>
</footer>