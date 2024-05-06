    </main>
    <footer>
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer--container">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-4">
                                    <p class="text-uppercase">
                                        <strong>Agende sua consulta</strong>
                                    </p>
                                    <h6 class="h4">Marque um horário com a Dra. Michelle Piekarski</h6>
                                    <p>Garanta seu atendimento personalizado com a Dra. Michelle e inicie sua jornada de cuidado e bem-estar.</p>
                                    <p>
                                        <a href="#" class="btn btn-primary text-uppercase">Marcar consulta</a>
                                    </p>
                                </div>
                                <div class="col-xl-4">
                                    <dl>
                                        <dt><i class="fa fa-2x fa-map-marker" aria-hidden="true"></i></dt>
                                        <dd>
                                            Rua Adolfo Bastos, 598<br />
                                            Sala 124 Vila Bastos, Santo André - SP<br />
                                            CEP: 09041-000
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt><i class="fa fa-2x fa-envelope" aria-hidden="true"></i></dt>
                                        <dd><a href="mailto:dramichellepiekarski@gmail.com">dramichellepiekarski@gmail.com</a></dd>
                                    </dl>
                                    <dl>
                                        <dt><i class="fa fa-2x fa-phone" aria-hidden="true"></i></dt>
                                        <dd><a href="tel:+5511934500356">(11) 93450-0356</a></dd>
                                    </dl>
                                    <dl>
                                        <dt><i class="fa fa-2x fa-clock-o" aria-hidden="true"></i></dt>
                                        <dd>
                                            Segunda a Sexta, das 08hrs até as 18hrs<br />
                                            Sábados, das 08hrs até as 12hrs
                                        </dd>
                                    </dl>
                                </div>
                                <div class="col-xl-4">                                    
                                    <nav>
                                        <p>
                                            <strong>Menu</strong>
                                        </p>
                                        <?php
                                            wp_nav_menu(
                                                array(
                                                'theme_location' => 'footer-1',
                                                'container' => 'ul',
                                                )
                                            );
                                        ?>
                                    </nav>
                                    <ul class="soclal-list">
                                        <li><a href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-12">      
                    <div class="copyright">
                        <p>Todos os direitos reservados - Responsável técnico: Dra. Michelle Piekarski | Dermatologista | CRMSP 130749 / RQE 95942</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <!--build:js assets/js/main.min.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.min.js"></script>
    <!-- endbuild -->
    <script src="https://use.fontawesome.com/e5f5aeb998.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js" data-autoinit="true"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3(html5shiv.min.js+html5shiv-printshiv.min.js),respond@1.4.2"></script>
    <![endif]-->
    <!-- Meta Pixel Code -->
    <!-- End Meta Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
</body>
</html>