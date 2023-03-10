<?php
    session_start();

    /* ********* database ********* */
    /* ***** HOME **** */
    $outputHome = array(1 => 'Learn To Drive With Confidence', 2 => 'Safe Driving Is Our Top Priority');
    $inputHome = array(1 => 'titleBannerOne', 2 => 'titleBannerTwo');

    /* ***** ABOUT ***** */
    $outputAbout = array(1 => 'We Help Students To Pass Test & Get A License On The First Try', 2 => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', 3 => '+012 345 6789');
    $inputAbout = array(1 => 'titleAbout', 2 => 'textAbout1', 3 => 'textAbout2', 4 => 'phoneNumber');

    /* ***** COURSES ***** */
    $outputCourses = array(1 => '99', 2 => 'Beginner', 3 => '3');
    $inputCourses = array(1 => 'priceCourseOne', 2 => 'levelCourseOne', 3 => 'durationCourseOne', 4 => 'priceCourseTwo', 5 => 'levelCourseTwo', 6 => 'durationCourseTwo', 7 => 'priceCourseThree', 8 => 'levelCourseThree', 9 => 'durationCourseThree');

    /* ***** FEATURE ***** */
    $outputFeature = array(1 => 'Why Choose Us!', 2 => 'Best Driving Training Agency In Your City', 3 => 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos');
    $inputFeature = array(1 => 'titleFeature', 2 => 'subtitleFeature', 3 => 'descriptionFeatureOne', 4 => 'descriptionFeatureTwo', 5 => 'descriptionFeatureThree', 6 => 'descriptionFeatureFour');

    /* ***** TEAM ***** */
    $outputTeam = array(1 => 'Full Name', 2 => 'Trainer', 3 => 'img/team-1.jpg', 4 => 'img/team-2.jpg', 5 => 'img/team-3.jpg', 6 => 'img/team-4.jpg', 7 => '');
    $inputTeam = array(1 => 'nameTeamOne', 2 => 'functionTeamOne', 3 => 'urlPictureOne', 4 => 'urlFacebookOne', 5 => 'urlTwitterOne', 6 => 'urlInstagramOne', 7 => 'nameTeamTwo', 8 => 'functionTeamTwo', 9 => 'urlPictureTwo', 10 => 'urlFacebookTwo', 11 => 'urlTwitterTwo', 12 => 'urlInstagramTwo', 13 => 'nameTeamThree', 14 => 'functionTeamThree', 15 => 'urlPictureThree', 16 => 'urlFacebookThree', 17 => 'urlTwitterThree', 18 => 'urlInstagramThree', 19 => 'nameTeamFour', 20 => 'functionTeamFour', 21 => 'urlPictureFour', 22 => 'urlFacebookFour', 23 => 'urlTwitterFour', 24 => 'urlInstagramFour');

    /* ***** TESTIMONIAL ***** */
    if (empty($_SESSION['testimonialList'])) {
        $user1 = array('testimonialName' => 'Client Name', 'testimonialProfession' => 'Profession', 'testimonialComment' => 'Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.', 'testimonialPicture' => 'img/testimonial-1.jpg');
        $user2 = array('testimonialName' => 'Client Name', 'testimonialProfession' => 'Profession', 'testimonialComment' => 'Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.', 'testimonialPicture' => 'img/testimonial-2.jpg');
        $user3 = array('testimonialName' => 'Client Name', 'testimonialProfession' => 'Profession', 'testimonialComment' => 'Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.', 'testimonialPicture' => 'img/testimonial-3.jpg');
        $_SESSION['testimonialList'] = array($user1, $user2, $user3);
    }


    /* ********* functions ********* */
    /* ***** HOME ***** */
    function changeHome($value) {
        global $inputHome, $outputHome;

        return (!empty($_SESSION[$inputHome[$value]])) ? $_SESSION[$inputHome[$value]] : $outputHome[$value];
    }

    /* ***** ABOUT ***** */
    function changeAbout($in, $out) {
        global $inputAbout, $outputAbout;

        return (!empty($_SESSION[$inputAbout[$in]])) ? $_SESSION[$inputAbout[$in]] : $outputAbout[$out];
    }

    /* ***** COURSES ***** */
    function changeCourses($in, $out) {
        global $inputCourses, $outputCourses;

        return (!empty($_SESSION[$inputCourses[$in]])) ? $_SESSION[$inputCourses[$in]] : $outputCourses[$out];
    }

    /* ***** FEATURE ***** */
    function changeFeature($in, $out) {
        global $inputFeature, $outputFeature;

        return (!empty($_SESSION[$inputFeature[$in]])) ? $_SESSION[$inputFeature[$in]] : $outputFeature[$out];
    }

    /* ***** TEAM ***** */
    function changeTeam($in, $out) {
        global $inputTeam, $outputTeam;

        return (!empty($_SESSION[$inputTeam[$in]])) ? $_SESSION[$inputTeam[$in]] : $outputTeam[$out];
    }
