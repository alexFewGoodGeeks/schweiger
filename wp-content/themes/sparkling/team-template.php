<?php /* Template Name: Team Template */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'homepage' );

            endwhile; // end of the loop.
            ?>

            <div class="team-wrapper">

<!--                <div class="row" id="gallery-one">-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="image-wrapper">-->
<!--                            <img src="/wp-content/uploads/images/team/team_1.png" />-->
<!--                        </div>-->
<!--                        <div class="image-wrapper">-->
<!--                            <img src="/wp-content/uploads/images/team/team_2.png" />-->
<!--                        </div>-->
<!--                        <div class="image-wrapper">-->
<!--                            <img src="/wp-content/uploads/images/team/team_3.png" />-->
<!--                        </div>-->
<!--                        <div class="image-wrapper">-->
<!--                            <img src="/wp-content/uploads/images/team/team_7.png" />-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="image-wrapper">-->
<!--                            <img src="/wp-content/uploads/images/team/team_4.png" />-->
<!--                        </div>-->
<!--                        <div class="image-wrapper">-->
<!--                            <img src="/wp-content/uploads/images/team/team_5.png" />-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="image-wrapper">-->
<!--                            <img src="/wp-content/uploads/images/team/team_6.png" />-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

                <table id="team-one">
                    <tbody>
                    <tr>
                        <td>
                            <div class="image-wrapper hover">
                                <img src="/wp-content/uploads/images/team/team_1.png" />
                                <div class="team-member text">
                                    <div class="details">
                                    <h6>Erich Schweiger</h6>
                                    <p>Geschäftsführer Technik & Technologie</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="image-wrapper">
                                <img src="/wp-content/uploads/images/team/team_2.png" />
                                <div class="team-member text">
                                    <div class="details">
                                        <h6>Siegfried Schweiger</h6>
                                        <p>Geschäftsführer Mälzerei & 1. Braumeister</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="image-wrapper">
                                <img src="/wp-content/uploads/images/team/team_3.png" />
                            </div>
                        </td>
                        <td rowspan="2">
                            <div class="image-wrapper">
                                <img src="/wp-content/uploads/images/team/team_7.png" class="img img-7"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="red-bg">
                            <div class="image-wrapper">
                                <img src="/wp-content/uploads/images/team/team_4.png" />
                            </div>
                            <div class="text-wrapper">
                                <h6>Helmut Schmid</h6>
                                <p>Gebietsverkaufsleiter
                                    für München (Stadt), Landkreis Erding</p>
                                <p>0176/23239406</p>
                                <p>helmut.schmid@
                                    schweiger-bier.de</p>
                            </div>
                        </td>
                        <td colspan="2">
                            <div class="image-wrapper">
                                <img src="/wp-content/uploads/images/team/team_5.png" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="image-wrapper">
                                <img src="/wp-content/uploads/images/team/team_6.png" />
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table id="team-two">
                    <tr>
                        <td>
                            <div class="image-wrapper">
                                <img src="/wp-content/uploads/images/team/team_10.png" class="image-left" />
                            </div>
                        </td>
                        <td colspan="2" class="middle">
                            <div class="christian-text">
                                <div class="left">
                                </div>
                                <div class="right">
                                    <div class="text-wrapper">
                                        <h6>Christian Seidl</h6>
                                        <p>Gebietsverkaufsleiter für München (Land), Landkreise Fürstenfeldbruck, Starnberg, Bad Tölz</p>
                                        <p>0176/23239407
                                            christian.seidl@
                                            schweiger-bier.de</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <img src="/wp-content/uploads/images/team/team_11.png" class="image-right"/>
                        </td>
                    </tr>
                </table>

                <table id="team-three">
                    <tbody>
                    <tr>
                        <td rowspan="2">
                            <div class="image-wrapper">
                                <img src="/wp-content/uploads/images/team/team_15.png" class="big-image" />
                            </div>
                        </td>
                        <td>
                            <div class="image-wrapper">
                                <img src="/wp-content/uploads/images/team/team_16.png" class="middle-top"/>
                            </div>
                        </td>
                        <td rowspan="2">
                            <div class="image-wrapper">
                                <img src="/wp-content/uploads/images/team/team_18.png" class="vertical"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="image-wrapper">
                                <img src="/wp-content/uploads/images/team/team_17.png" class="middle-bottom"/>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table id="team-four">
                    <tbody>
                    <tr>
                        <td rowspan="2">
                            <img src="/wp-content/uploads/images/team/team_40.png" class="vertical"/>
                        </td>
                        <td colspan="2">
                            <img src="/wp-content/uploads/images/team/team_41.png" class="horizontal"/>
                        </td>
                        <td class="empty-gray">&nbsp</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="/wp-content/uploads/images/team/team_42.png" />
                        </td>
                        <td>
                            <img src="/wp-content/uploads/images/team/team_43.png" />
                        </td>
                        <td class="content">
                            <div class="text-wrapper">
                                <h6>Klaus Stegmaier</h6>
                                <p>Gebietsverkaufsleiter für Landkreise Ebersberg, Rosenheim, Mühldorf, Miesbach</p>
                                <p>0176/23239408
                                    klaus.stegmaier@
                                    schweiger-bier.de</p>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();


?>
<script>
    // var macy = Macy({
    //     container: '#gallery-one',
    //     trueOrder: false,
    //     waitForImages: false,
    //     margin: 24,
    //     columns: 6,
    //     breakAt: {
    //         1200: 5,
    //         940: 3,
    //         520: 2,
    //         400: 1
    //     }
    // });
</script>
