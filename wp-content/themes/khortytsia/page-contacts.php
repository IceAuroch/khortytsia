<?php
/*
Template Name: Contacts
Template Post Type: page
*/

get_header();
?>

    <section class="main_desk_section main_desk_full_section"
             style="background-image: url(<?php echo get_theme_file_uri('images/contacts_bg.jpg'); ?>)">

        <div class="desktop_gradient"></div>

        <div class="desktop_gradient desktop_gradient2"></div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="main_desk_other_wrap">
                        <div class="main_desk_breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Головна</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo the_title(); ?></li>
                                </ol>
                            </nav>
                        </div>

                        <div class="main_desk_other_title">
                            <h1>
                                <?php echo the_title(); ?>
                            </h1>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span>Замовлення екскурсій :</span>
                                </div>
                                <div class="contact_row__item">
                                    <a href="#">(096) 254-12-09,</a>
                                    <a href="#">(095) 914-77-06</a>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span>Приймальня :</span>
                                </div>
                                <div class="contact_row__item">
                                    <a href="#">(061) 707-34-86 (тел./факс)</a>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span>Музей міста за порогами :</span>
                                </div>
                                <div class="contact_row__item">
                                    <a href="#">(061) 236-05-36,</a>
                                    <a href="#">(061) 236-05-57</a>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span>Служба режиму :</span>
                                </div>
                                <div class="contact_row__item">
                                    <a href="#">(061) 286-54-51</a>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span>Вахта музею :</span>
                                </div>
                                <div class="contact_row__item">
                                    <a href="#">(061) 283-25-69</a>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span>E-mail :</span>
                                </div>
                                <div class="contact_row__item">
                                    <a href="#">zapovidnik@ukr.net (скринька для загальних питань),</a>
                                    <a href="#"> buh.hortica@ukr.net (бухгалтерія)</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span>Режим роботи :</span>
                                </div>
                                <div class="contact_row__item">
                                    <p>Листопад-березень: з 9:30 до 16:00 (каса працює до 15:00) Квітень-жовтень: з с 9:30 до 16:30 (птн,сб,нд з 9:30 до 18:30)</p>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span>Вихiдний :</span>
                                </div>
                                <div class="contact_row__item">
                                    <p>Понедiлок</p>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span>Юридична дреса :</span>
                                </div>
                                <div class="contact_row__item">
                                    <p>Національний заповідник "Хортиця" м. Запоріжжя, вул. Старого редуту 9, 69017.</p>
                                </div>
                            </div>
                            <div class="contact_row">
                                <div class="contact_row__item">
                                    <span>GPS координати :</span>
                                </div>
                                <div class="contact_row__item">
                                    <p>шир. - 47.86023062 , довг. - 35.07139945</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php
get_footer();
