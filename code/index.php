<?php
    define('VERSION', '1.2.1');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/assets/images/favicon.png" rel="shortcut icon">
    <title>Haticons | Free Premium Font Icons</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A set of free premium font icons and svg icons to use on your digital products.">
    <meta name="keywords" content="haticons, haticon, font icons, icon fonts, web fonts, font awesome alternative, svg icons, responsive fonts"/>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119943796-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-119943796-1');
    </script>
    <link rel="stylesheet" type="text/css" media="all" href="/assets/css/style.css?<?php echo VERSION;?>" />
</head>

<body>
    <a class="logo hi-haticons" href="/"></a>
    <h1 class="welcome">Welcome !</h1>
    <div class="front-text">
        <h2>Haticons is a set of beautifully crafted Free Premium Font Icons</h2>
        <h3>Best fit to use in Web, iOS, Android, and Desktop apps.</h3>
        <a href="/download/haticons.zip" class="download">Download Haticons</a>
        <button class="cheatsheet">Cheatsheet</button>
        <h2 class="tac">CDN</h2>
        <div class="cdn">https://cdn.haticons.com/css/haticons.css</div>
        <p class="version">Version - <?php echo VERSION;?></p>
    </div>
    <div class="modal cheatsheet-modal">
        <button class="close"></button>
        <input type="text" name="search-haticon" placeholder="Search Haticons here..." onkeyup="searchHaticons()">
        <div class="haticons-set">
            <?php
                $haticons = array(
                    array(
                        'class' => 'hi-add-circle',
                        'content' => "\\e900"
                    ),
                    array(
                        'class' => 'hi-add-file',
                        'content' => "\\e901"
                    ),
                    array(
                        'class' => 'hi-add-folder',
                        'content' => "\\e902"
                    ),
                    array(
                        'class' => 'hi-alarm1',
                        'content' => "\\e903"
                    ),
                    array(
                        'class' => 'hi-align-center',
                        'content' => "\\e904"
                    ),
                    array(
                        'class' => 'hi-align-justify',
                        'content' => "\\e905"
                    ),
                    array(
                        'class' => 'hi-align-left',
                        'content' => "\\e906"
                    ),
                    array(
                        'class' => 'hi-align-right',
                        'content' => "\\e907"
                    ),
                    array(
                        'class' => 'hi-arrow-bottom',
                        'content' => "\\e908"
                    ),
                    array(
                        'class' => 'hi-arrow-circle-bottom',
                        'content' => "\\e909"
                    ),
                    array(
                        'class' => 'hi-arrow-circle-left',
                        'content' => "\\e90a"
                    ),
                    array(
                        'class' => 'hi-arrow-circle-right',
                        'content' => "\\e90b"
                    ),
                    array(
                        'class' => 'hi-arrow-circle-top',
                        'content' => "\\e90c"
                    ),
                    array(
                        'class' => 'hi-arrow-left1',
                        'content' => "\\e90d"
                    ),
                    array(
                        'class' => 'hi-arrow-right1',
                        'content' => "\\e90e"
                    ),
                    array(
                        'class' => 'hi-arrow-top',
                        'content' => "\\e90f"
                    ),
                    array(
                        'class' => 'hi-attachment1',
                        'content' => "\\e910"
                    ),
                    array(
                        'class' => 'hi-ban',
                        'content' => "\\e911"
                    ),
                    array(
                        'class' => 'hi-bell-outline',
                        'content' => "\\e912"
                    ),
                    array(
                        'class' => 'hi-briefcase-outline',
                        'content' => "\\e913"
                    ),
                    array(
                        'class' => 'hi-broken-link',
                        'content' => "\\e914"
                    ),
                    array(
                        'class' => 'hi-bullet-list',
                        'content' => "\\e915"
                    ),
                    array(
                        'class' => 'hi-calendar1',
                        'content' => "\\e916"
                    ),
                    array(
                        'class' => 'hi-camera1',
                        'content' => "\\e917"
                    ),
                    array(
                        'class' => 'hi-cart1',
                        'content' => "\\e918"
                    ),
                    array(
                        'class' => 'hi-chart',
                        'content' => "\\e919"
                    ),
                    array(
                        'class' => 'hi-chat',
                        'content' => "\\e91a"
                    ),
                    array(
                        'class' => 'hi-check-circle',
                        'content' => "\\e91b"
                    ),
                    array(
                        'class' => 'hi-check',
                        'content' => "\\e91c"
                    ),
                    array(
                        'class' => 'hi-checkbox',
                        'content' => "\\e91d"
                    ),
                    array(
                        'class' => 'hi-chevron-bottom',
                        'content' => "\\e91e"
                    ),
                    array(
                        'class' => 'hi-chevron-left',
                        'content' => "\\e91f"
                    ),
                    array(
                        'class' => 'hi-chevron-right',
                        'content' => "\\e920"
                    ),
                    array(
                        'class' => 'hi-chevron-top',
                        'content' => "\\e921"
                    ),
                    array(
                        'class' => 'hi-circle',
                        'content' => "\\e922"
                    ),
                    array(
                        'class' => 'hi-clock1',
                        'content' => "\\e923"
                    ),
                    array(
                        'class' => 'hi-cog-outline',
                        'content' => "\\e924"
                    ),
                    array(
                        'class' => 'hi-credit-card1',
                        'content' => "\\e925"
                    ),
                    array(
                        'class' => 'hi-cross-circle',
                        'content' => "\\e926"
                    ),
                    array(
                        'class' => 'hi-cross1',
                        'content' => "\\e927"
                    ),
                    array(
                        'class' => 'hi-date',
                        'content' => "\\e928"
                    ),
                    array(
                        'class' => 'hi-delete-file',
                        'content' => "\\e929"
                    ),
                    array(
                        'class' => 'hi-dislike',
                        'content' => "\\e92a"
                    ),
                    array(
                        'class' => 'hi-document',
                        'content' => "\\e92b"
                    ),
                    array(
                        'class' => 'hi-download-box',
                        'content' => "\\e92c"
                    ),
                    array(
                        'class' => 'hi-download-cloud',
                        'content' => "\\e92d"
                    ),
                    array(
                        'class' => 'hi-download1',
                        'content' => "\\e92e"
                    ),
                    array(
                        'class' => 'hi-empty-bag',
                        'content' => "\\e92f"
                    ),
                    array(
                        'class' => 'hi-envelope',
                        'content' => "\\e930"
                    ),
                    array(
                        'class' => 'hi-export',
                        'content' => "\\e931"
                    ),
                    array(
                        'class' => 'hi-eye1',
                        'content' => "\\e932"
                    ),
                    array(
                        'class' => 'hi-fat-bag',
                        'content' => "\\e933"
                    ),
                    array(
                        'class' => 'hi-file',
                        'content' => "\\e934"
                    ),
                    array(
                        'class' => 'hi-fill-bag',
                        'content' => "\\e935"
                    ),
                    array(
                        'class' => 'hi-fit-horizontal',
                        'content' => "\\e936"
                    ),
                    array(
                        'class' => 'hi-fit-to-screen',
                        'content' => "\\e937"
                    ),
                    array(
                        'class' => 'hi-fit-vertical',
                        'content' => "\\e938"
                    ),
                    array(
                        'class' => 'hi-flag1',
                        'content' => "\\e939"
                    ),
                    array(
                        'class' => 'hi-folder1',
                        'content' => "\\e93a"
                    ),
                    array(
                        'class' => 'hi-funnel',
                        'content' => "\\e93b"
                    ),
                    array(
                        'class' => 'hi-game',
                        'content' => "\\e93c"
                    ),
                    array(
                        'class' => 'hi-hand-index',
                        'content' => "\\e93d"
                    ),
                    array(
                        'class' => 'hi-happy1',
                        'content' => "\\e93e"
                    ),
                    array(
                        'class' => 'hi-heart-o',
                        'content' => "\\e93f"
                    ),
                    array(
                        'class' => 'hi-hide',
                        'content' => "\\e940"
                    ),
                    array(
                        'class' => 'hi-id-card-vertical',
                        'content' => "\\e941"
                    ),
                    array(
                        'class' => 'hi-id-card',
                        'content' => "\\e942"
                    ),
                    array(
                        'class' => 'hi-image1',
                        'content' => "\\e943"
                    ),
                    array(
                        'class' => 'hi-info-square',
                        'content' => "\\e944"
                    ),
                    array(
                        'class' => 'hi-info1',
                        'content' => "\\e945"
                    ),
                    array(
                        'class' => 'hi-like',
                        'content' => "\\e946"
                    ),
                    array(
                        'class' => 'hi-link1',
                        'content' => "\\e947"
                    ),
                    array(
                        'class' => 'hi-lock1',
                        'content' => "\\e948"
                    ),
                    array(
                        'class' => 'hi-logout',
                        'content' => "\\e949"
                    ),
                    array(
                        'class' => 'hi-marker-o',
                        'content' => "\\e94a"
                    ),
                    array(
                        'class' => 'hi-maximize',
                        'content' => "\\e94b"
                    ),
                    array(
                        'class' => 'hi-media-file',
                        'content' => "\\e94c"
                    ),
                    array(
                        'class' => 'hi-menu1',
                        'content' => "\\e94d"
                    ),
                    array(
                        'class' => 'hi-mic1',
                        'content' => "\\e94e"
                    ),
                    array(
                        'class' => 'hi-minimize',
                        'content' => "\\e94f"
                    ),
                    array(
                        'class' => 'hi-minus-circle',
                        'content' => "\\e950"
                    ),
                    array(
                        'class' => 'hi-monitor',
                        'content' => "\\e951"
                    ),
                    array(
                        'class' => 'hi-mute',
                        'content' => "\\e952"
                    ),
                    array(
                        'class' => 'hi-neutral1',
                        'content' => "\\e953"
                    ),
                    array(
                        'class' => 'hi-next1',
                        'content' => "\\e954"
                    ),
                    array(
                        'class' => 'hi-numbered-list',
                        'content' => "\\e955"
                    ),
                    array(
                        'class' => 'hi-paint-bucket',
                        'content' => "\\e956"
                    ),
                    array(
                        'class' => 'hi-paper-plane',
                        'content' => "\\e957"
                    ),
                    array(
                        'class' => 'hi-paper-tag',
                        'content' => "\\e958"
                    ),
                    array(
                        'class' => 'hi-paste1',
                        'content' => "\\e959"
                    ),
                    array(
                        'class' => 'hi-pencil1',
                        'content' => "\\e95a"
                    ),
                    array(
                        'class' => 'hi-pie-chart1',
                        'content' => "\\e95b"
                    ),
                    array(
                        'class' => 'hi-pin',
                        'content' => "\\e95c"
                    ),
                    array(
                        'class' => 'hi-pinned',
                        'content' => "\\e95d"
                    ),
                    array(
                        'class' => 'hi-power1',
                        'content' => "\\e95e"
                    ),
                    array(
                        'class' => 'hi-presentation',
                        'content' => "\\e95f"
                    ),
                    array(
                        'class' => 'hi-previous1',
                        'content' => "\\e960"
                    ),
                    array(
                        'class' => 'hi-print',
                        'content' => "\\e961"
                    ),
                    array(
                        'class' => 'hi-question-circle-big',
                        'content' => "\\e962"
                    ),
                    array(
                        'class' => 'hi-question-circle',
                        'content' => "\\e963"
                    ),
                    array(
                        'class' => 'hi-quotes',
                        'content' => "\\e964"
                    ),
                    array(
                        'class' => 'hi-redo1',
                        'content' => "\\e965"
                    ),
                    array(
                        'class' => 'hi-refresh',
                        'content' => "\\e966"
                    ),
                    array(
                        'class' => 'hi-reply1',
                        'content' => "\\e967"
                    ),
                    array(
                        'class' => 'hi-sad1',
                        'content' => "\\e968"
                    ),
                    array(
                        'class' => 'hi-save-file',
                        'content' => "\\e969"
                    ),
                    array(
                        'class' => 'hi-search1',
                        'content' => "\\e96a"
                    ),
                    array(
                        'class' => 'hi-settings',
                        'content' => "\\e96b"
                    ),
                    array(
                        'class' => 'hi-share1',
                        'content' => "\\e96c"
                    ),
                    array(
                        'class' => 'hi-speaker',
                        'content' => "\\e96d"
                    ),
                    array(
                        'class' => 'hi-speech-bubble',
                        'content' => "\\e96e"
                    ),
                    array(
                        'class' => 'hi-stack1',
                        'content' => "\\e96f"
                    ),
                    array(
                        'class' => 'hi-star-o',
                        'content' => "\\e970"
                    ),
                    array(
                        'class' => 'hi-star',
                        'content' => "\\e971"
                    ),
                    array(
                        'class' => 'hi-sun1',
                        'content' => "\\e972"
                    ),
                    array(
                        'class' => 'hi-switch-off',
                        'content' => "\\e973"
                    ),
                    array(
                        'class' => 'hi-switch-on',
                        'content' => "\\e974"
                    ),
                    array(
                        'class' => 'hi-tag-o',
                        'content' => "\\e975"
                    ),
                    array(
                        'class' => 'hi-time',
                        'content' => "\\e976"
                    ),
                    array(
                        'class' => 'hi-trash',
                        'content' => "\\e977"
                    ),
                    array(
                        'class' => 'hi-turn-left',
                        'content' => "\\e978"
                    ),
                    array(
                        'class' => 'hi-turn-right',
                        'content' => "\\e979"
                    ),
                    array(
                        'class' => 'hi-undo1',
                        'content' => "\\e97a"
                    ),
                    array(
                        'class' => 'hi-upload-cloud',
                        'content' => "\\e97b"
                    ),
                    array(
                        'class' => 'hi-upload1',
                        'content' => "\\e97c"
                    ),
                    array(
                        'class' => 'hi-user1',
                        'content' => "\\e97d"
                    ),
                    array(
                        'class' => 'hi-users1',
                        'content' => "\\e97e"
                    ),
                    array(
                        'class' => 'hi-video-camera1',
                        'content' => "\\e97f"
                    ),
                    array(
                        'class' => 'hi-volume-down',
                        'content' => "\\e980"
                    ),
                    array(
                        'class' => 'hi-volume-up',
                        'content' => "\\e981"
                    ),
                    array(
                        'class' => 'hi-warning-o',
                        'content' => "\\e982"
                    ),
                    array(
                        'class' => 'hi-warning1',
                        'content' => "\\e983"
                    ),
                    array(
                        'class' => 'hi-zoom-in1',
                        'content' => "\\e984"
                    ),
                    array(
                        'class' => 'hi-zoom-out1',
                        'content' => "\\e985"
                    ),
                    array(
                        'class' => 'hi-network',
                        'content' => "\\e9aa"
                    ),
                    array(
                        'class' => 'hi-haticons',
                        'content' => "\\f000"
                    ),
                    array(
                        'class' => 'hi-launchpad',
                        'content' => "\\f004"
                    ),
                    array(
                        'class' => 'hi-ubuntu',
                        'content' => "\\f005"
                    ),
                    array(
                        'class' => 'hi-filezilla',
                        'content' => "\\f006"
                    ),
                    array(
                        'class' => 'hi-apple',
                        'content' => "\\f008"
                    ),
                    array(
                        'class' => 'hi-blackberry',
                        'content' => "\\f009"
                    ),
                    array(
                        'class' => 'hi-aws',
                        'content' => "\\f00a"
                    ),
                    array(
                        'class' => 'hi-amd',
                        'content' => "\\f00b"
                    ),
                    array(
                        'class' => 'hi-angellist',
                        'content' => "\\f00c"
                    ),
                    array(
                        'class' => 'hi-applemusic',
                        'content' => "\\f00d"
                    ),
                    array(
                        'class' => 'hi-applepay',
                        'content' => "\\f00e"
                    ),
                    array(
                        'class' => 'hi-archlinux',
                        'content' => "\\f00f"
                    ),
                    array(
                        'class' => 'hi-blob',
                        'content' => "\\f010"
                    ),
                    array(
                        'class' => 'hi-cat-paw',
                        'content' => "\\f012"
                    ),
                    array(
                        'class' => 'hi-coop',
                        'content' => "\\f014"
                    ),
                    array(
                        'class' => 'hi-credit-card11',
                        'content' => "\\f015"
                    ),
                    array(
                        'class' => 'hi-doctor',
                        'content' => "\\f016"
                    ),
                    array(
                        'class' => 'hi-dog-paw',
                        'content' => "\\f017"
                    ),
                    array(
                        'class' => 'hi-drive1',
                        'content' => "\\f018"
                    ),
                    array(
                        'class' => 'hi-artstation',
                        'content' => "\\f01a"
                    ),
                    array(
                        'class' => 'hi-asana',
                        'content' => "\\f01b"
                    ),
                    array(
                        'class' => 'hi-at-and-t',
                        'content' => "\\f01c"
                    ),
                    array(
                        'class' => 'hi-atlassian',
                        'content' => "\\f01d"
                    ),
                    array(
                        'class' => 'hi-atom',
                        'content' => "\\f01e"
                    ),
                    array(
                        'class' => 'hi-aurelia',
                        'content' => "\\f01f"
                    ),
                    array(
                        'class' => 'hi-facebook1',
                        'content' => "\\f021"
                    ),
                    array(
                        'class' => 'hi-folder11',
                        'content' => "\\f023"
                    ),
                    array(
                        'class' => 'hi-google-assistant',
                        'content' => "\\f024"
                    ),
                    array(
                        'class' => 'hi-hangout',
                        'content' => "\\f027"
                    ),
                    array(
                        'class' => 'hi-hard-disk',
                        'content' => "\\f028"
                    ),
                    array(
                        'class' => 'hi-automatic',
                        'content' => "\\f02a"
                    ),
                    array(
                        'class' => 'hi-autotask',
                        'content' => "\\f02b"
                    ),
                    array(
                        'class' => 'hi-azurepipelines',
                        'content' => "\\f02c"
                    ),
                    array(
                        'class' => 'hi-bing',
                        'content' => "\\f02f"
                    ),
                    array(
                        'class' => 'hi-hut',
                        'content' => "\\f031"
                    ),
                    array(
                        'class' => 'hi-landline',
                        'content' => "\\f033"
                    ),
                    array(
                        'class' => 'hi-linkedin1',
                        'content' => "\\f034"
                    ),
                    array(
                        'class' => 'hi-message',
                        'content' => "\\f036"
                    ),
                    array(
                        'class' => 'hi-bitbucket',
                        'content' => "\\f03a"
                    ),
                    array(
                        'class' => 'hi-bitly',
                        'content' => "\\f03b"
                    ),
                    array(
                        'class' => 'hi-blender',
                        'content' => "\\f03c"
                    ),
                    array(
                        'class' => 'hi-bootstrap',
                        'content' => "\\f03d"
                    ),
                    array(
                        'class' => 'hi-bower',
                        'content' => "\\f03e"
                    ),
                    array(
                        'class' => 'hi-cakephp',
                        'content' => "\\f03f"
                    ),
                    array(
                        'class' => 'hi-phone1',
                        'content' => "\\f041"
                    ),
                    array(
                        'class' => 'hi-picasa',
                        'content' => "\\f042"
                    ),
                    array(
                        'class' => 'hi-reddit1',
                        'content' => "\\f043"
                    ),
                    array(
                        'class' => 'hi-spanchat',
                        'content' => "\\f045"
                    ),
                    array(
                        'class' => 'hi-star1',
                        'content' => "\\f046"
                    ),
                    array(
                        'class' => 'hi-trophy1',
                        'content' => "\\f048"
                    ),
                    array(
                        'class' => 'hi-twitter-font',
                        'content' => "\\f049"
                    ),
                    array(
                        'class' => 'hi-campaignmonitor',
                        'content' => "\\f04a"
                    ),
                    array(
                        'class' => 'hi-dailymotion',
                        'content' => "\\f04b"
                    ),
                    array(
                        'class' => 'hi-coffeescript',
                        'content' => "\\f04c"
                    ),
                    array(
                        'class' => 'hi-conda-forge',
                        'content' => "\\f04d"
                    ),
                    array(
                        'class' => 'hi-css3-shield',
                        'content' => "\\f04e"
                    ),
                    array(
                        'class' => 'hi-csswizardry',
                        'content' => "\\f04f"
                    ),
                    array(
                        'class' => 'hi-wholensole',
                        'content' => "\\f051"
                    ),
                    array(
                        'class' => 'hi-windows1',
                        'content' => "\\f052"
                    ),
                    array(
                        'class' => 'hi-redo11',
                        'content' => "\\f055"
                    ),
                    array(
                        'class' => 'hi-undo11',
                        'content' => "\\f056"
                    ),
                    array(
                        'class' => 'hi-profile1',
                        'content' => "\\f057"
                    ),
                    array(
                        'class' => 'hi-sim_card',
                        'content' => "\\f05c"
                    ),
                    array(
                        'class' => 'hi-trash1',
                        'content' => "\\f05d"
                    ),
                    array(
                        'class' => 'hi-attachment11',
                        'content' => "\\f05e"
                    ),
                    array(
                        'class' => 'hi-thumbs-down',
                        'content' => "\\f05f"
                    ),
                    array(
                        'class' => 'hi-thumbs-up',
                        'content' => "\\f060"
                    ),
                    array(
                        'class' => 'hi-to-do',
                        'content' => "\\f061"
                    ),
                    array(
                        'class' => 'hi-dream11',
                        'content' => "\\f062"
                    ),
                    array(
                        'class' => 'hi-suru',
                        'content' => "\\f063"
                    ),
                    array(
                        'class' => 'hi-slack',
                        'content' => "\\f064"
                    ),
                    array(
                        'class' => 'hi-microblog',
                        'content' => "\\f065"
                    ),
                    array(
                        'class' => 'hi-microgenetics',
                        'content' => "\\f066"
                    ),
                    array(
                        'class' => 'hi-microsoft',
                        'content' => "\\f067"
                    ),
                    array(
                        'class' => 'hi-microsoft-access',
                        'content' => "\\f068"
                    ),
                    array(
                        'class' => 'hi-microsoftexcel',
                        'content' => "\\f069"
                    ),
                    array(
                        'class' => 'hi-microsoft-one-note',
                        'content' => "\\f06a"
                    ),
                    array(
                        'class' => 'hi-microsoft-outlook',
                        'content' => "\\f06b"
                    ),
                    array(
                        'class' => 'hi-microsoft-power-point',
                        'content' => "\\f06c"
                    ),
                    array(
                        'class' => 'hi-microsoft-word',
                        'content' => "\\f06d"
                    ),
                    array(
                        'class' => 'hi-prismic',
                        'content' => "\\f06e"
                    ),
                    array(
                        'class' => 'hi-statamic',
                        'content' => "\\f06f"
                    ),
                    array(
                        'class' => 'hi-archive',
                        'content' => "\\f070"
                    ),
                    array(
                        'class' => 'hi-zoom-out11',
                        'content' => "\\f072"
                    ),
                    array(
                        'class' => 'hi-bell-ringing',
                        'content' => "\\f073"
                    ),
                    array(
                        'class' => 'hi-location1',
                        'content' => "\\f074"
                    ),
                    array(
                        'class' => 'hi-allo',
                        'content' => "\\f075"
                    ),
                    array(
                        'class' => 'hi-block',
                        'content' => "\\f076"
                    ),
                    array(
                        'class' => 'hi-book-my-show',
                        'content' => "\\f077"
                    ),
                    array(
                        'class' => 'hi-duo',
                        'content' => "\\f078"
                    ),
                    array(
                        'class' => 'hi-electric',
                        'content' => "\\f079"
                    ),
                    array(
                        'class' => 'hi-gaming-console',
                        'content' => "\\f07a"
                    ),
                    array(
                        'class' => 'hi-lego-face',
                        'content' => "\\f07b"
                    ),
                    array(
                        'class' => 'hi-maestro',
                        'content' => "\\f07c"
                    ),
                    array(
                        'class' => 'hi-master-card',
                        'content' => "\\f07d"
                    ),
                    array(
                        'class' => 'hi-medium',
                        'content' => "\\f07e"
                    ),
                    array(
                        'class' => 'hi-paytm',
                        'content' => "\\f07f"
                    ),
                    array(
                        'class' => 'hi-play-station',
                        'content' => "\\f080"
                    ),
                    array(
                        'class' => 'hi-plugin',
                        'content' => "\\f081"
                    ),
                    array(
                        'class' => 'hi-pocket',
                        'content' => "\\f082"
                    ),
                    array(
                        'class' => 'hi-programmerindia',
                        'content' => "\\f083"
                    ),
                    array(
                        'class' => 'hi-search11',
                        'content' => "\\f084"
                    ),
                    array(
                        'class' => 'hi-ad-block-plus',
                        'content' => "\\f085"
                    ),
                    array(
                        'class' => 'hi-swiggy',
                        'content' => "\\f086"
                    ),
                    array(
                        'class' => 'hi-uber-driver',
                        'content' => "\\f088"
                    ),
                    array(
                        'class' => 'hi-uber-freight',
                        'content' => "\\f089"
                    ),
                    array(
                        'class' => 'hi-uber',
                        'content' => "\\f08a"
                    ),
                    array(
                        'class' => 'hi-visa',
                        'content' => "\\f08b"
                    ),
                    array(
                        'class' => 'hi-yash-raj',
                        'content' => "\\f08c"
                    ),
                    array(
                        'class' => 'hi-zomato',
                        'content' => "\\f08d"
                    ),
                    array(
                        'class' => 'hi-zoom-in11',
                        'content' => "\\f08e"
                    ),
                    array(
                        'class' => 'hi-washing-machine',
                        'content' => "\\f090"
                    ),
                    array(
                        'class' => 'hi-tags',
                        'content' => "\\f091"
                    ),
                    array(
                        'class' => 'hi-tag',
                        'content' => "\\f092"
                    ),
                    array(
                        'class' => 'hi-more',
                        'content' => "\\f093"
                    ),
                    array(
                        'class' => 'hi-nav',
                        'content' => "\\f094"
                    ),
                    array(
                        'class' => 'hi-help',
                        'content' => "\\f095"
                    ),
                    array(
                        'class' => 'hi-gmail',
                        'content' => "\\f096"
                    ),
                    array(
                        'class' => 'hi-mailchimp',
                        'content' => "\\f098"
                    ),
                    array(
                        'class' => 'hi-mailru',
                        'content' => "\\f099"
                    ),
                    array(
                        'class' => 'hi-protonmail',
                        'content' => "\\f09a"
                    ),
                    array(
                        'class' => 'hi-envelope1',
                        'content' => "\\f09b"
                    ),
                    array(
                        'class' => 'hi-envelope-open',
                        'content' => "\\f09c"
                    ),
                    array(
                        'class' => 'hi-paper-plane1',
                        'content' => "\\f09d"
                    ),
                    array(
                        'class' => 'hi-unity',
                        'content' => "\\f0a0"
                    ),
                    array(
                        'class' => 'hi-upwork',
                        'content' => "\\f0a1"
                    ),
                    array(
                        'class' => 'hi-viadeo',
                        'content' => "\\f0a2"
                    ),
                    array(
                        'class' => 'hi-vim',
                        'content' => "\\f0a3"
                    ),
                    array(
                        'class' => 'hi-visualstudiocode',
                        'content' => "\\f0a6"
                    ),
                    array(
                        'class' => 'hi-vk',
                        'content' => "\\f0a7"
                    ),
                    array(
                        'class' => 'hi-vlcmediaplayer',
                        'content' => "\\f0a8"
                    ),
                    array(
                        'class' => 'hi-vue-js',
                        'content' => "\\f0a9"
                    ),
                    array(
                        'class' => 'hi-webstorm',
                        'content' => "\\f0aa"
                    ),
                    array(
                        'class' => 'hi-wechat',
                        'content' => "\\f0ab"
                    ),
                    array(
                        'class' => 'hi-wheniwork',
                        'content' => "\\f0ac"
                    ),
                    array(
                        'class' => 'hi-wix',
                        'content' => "\\f0ae"
                    ),
                    array(
                        'class' => 'hi-wordpress1',
                        'content' => "\\f0af"
                    ),
                    array(
                        'class' => 'hi-xbox',
                        'content' => "\\f0b0"
                    ),
                    array(
                        'class' => 'hi-xcode',
                        'content' => "\\f0b1"
                    ),
                    array(
                        'class' => 'hi-xing',
                        'content' => "\\f0b2"
                    ),
                    array(
                        'class' => 'hi-yammer',
                        'content' => "\\f0b3"
                    ),
                    array(
                        'class' => 'hi-yandex',
                        'content' => "\\f0b4"
                    ),
                    array(
                        'class' => 'hi-yarn',
                        'content' => "\\f0b5"
                    ),
                    array(
                        'class' => 'hi-ycombinator',
                        'content' => "\\f0b6"
                    ),
                    array(
                        'class' => 'hi-zendesk',
                        'content' => "\\f0b7"
                    ),
                    array(
                        'class' => 'hi-zerply',
                        'content' => "\\f0b8"
                    ),
                    array(
                        'class' => 'hi-zillow',
                        'content' => "\\f0b9"
                    ),
                    array(
                        'class' => 'hi-zorin',
                        'content' => "\\f0ba"
                    ),
                    array(
                        'class' => 'hi-tic-tac-toe',
                        'content' => "\\f0bb"
                    ),
                    array(
                        'class' => 'hi-pakpak',
                        'content' => "\\f0bc"
                    ),
                    array(
                        'class' => 'hi-gravatar',
                        'content' => "\\f0f3"
                    ),
                    array(
                        'class' => 'hi-superuser',
                        'content' => "\\f0f4"
                    ),
                    array(
                        'class' => 'hi-key1',
                        'content' => "\\f0f5"
                    ),
                    array(
                        'class' => 'hi-angular',
                        'content' => "\\f0f6"
                    ),
                    array(
                        'class' => 'hi-ola-cabs',
                        'content' => "\\f0f7"
                    ),
                    array(
                        'class' => 'hi-bitcoin',
                        'content' => "\\f0f8"
                    ),
                    array(
                        'class' => 'hi-viber-icon',
                        'content' => "\\f0fa"
                    ),
                    array(
                        'class' => 'hi-check1',
                        'content' => "\\f101"
                    ),
                    array(
                        'class' => 'hi-close',
                        'content' => "\\f102"
                    ),
                    array(
                        'class' => 'hi-adobe',
                        'content' => "\\f103"
                    ),
                    array(
                        'class' => 'hi-appboxlab',
                        'content' => "\\f104"
                    ),
                    array(
                        'class' => 'hi-bean-bag',
                        'content' => "\\f105"
                    ),
                    array(
                        'class' => 'hi-bulb',
                        'content' => "\\f106"
                    ),
                    array(
                        'class' => 'hi-bus',
                        'content' => "\\f107"
                    ),
                    array(
                        'class' => 'hi-camera11',
                        'content' => "\\f108"
                    ),
                    array(
                        'class' => 'hi-car',
                        'content' => "\\f109"
                    ),
                    array(
                        'class' => 'hi-checkbox-unchecked1',
                        'content' => "\\f10b"
                    ),
                    array(
                        'class' => 'hi-checked',
                        'content' => "\\f10c"
                    ),
                    array(
                        'class' => 'hi-cookie',
                        'content' => "\\f10f"
                    ),
                    array(
                        'class' => 'hi-creative-cloud',
                        'content' => "\\f110"
                    ),
                    array(
                        'class' => 'hi-dihadiwala',
                        'content' => "\\f111"
                    ),
                    array(
                        'class' => 'hi-edit',
                        'content' => "\\f112"
                    ),
                    array(
                        'class' => 'hi-flag11',
                        'content' => "\\f113"
                    ),
                    array(
                        'class' => 'hi-grofers',
                        'content' => "\\f114"
                    ),
                    array(
                        'class' => 'hi-images1',
                        'content' => "\\f115"
                    ),
                    array(
                        'class' => 'hi-incognito',
                        'content' => "\\f116"
                    ),
                    array(
                        'class' => 'hi-indane',
                        'content' => "\\f117"
                    ),
                    array(
                        'class' => 'hi-info11',
                        'content' => "\\f118"
                    ),
                    array(
                        'class' => 'hi-kadam',
                        'content' => "\\f119"
                    ),
                    array(
                        'class' => 'hi-lock11',
                        'content' => "\\f11a"
                    ),
                    array(
                        'class' => 'hi-lucifer',
                        'content' => "\\f11b"
                    ),
                    array(
                        'class' => 'hi-messenger',
                        'content' => "\\f11c"
                    ),
                    array(
                        'class' => 'hi-meteor',
                        'content' => "\\f11d"
                    ),
                    array(
                        'class' => 'hi-ojook',
                        'content' => "\\f11e"
                    ),
                    array(
                        'class' => 'hi-orchid',
                        'content' => "\\f11f"
                    ),
                    array(
                        'class' => 'hi-paintbox',
                        'content' => "\\f120"
                    ),
                    array(
                        'class' => 'hi-radio-checked1',
                        'content' => "\\f121"
                    ),
                    array(
                        'class' => 'hi-robot',
                        'content' => "\\f123"
                    ),
                    array(
                        'class' => 'hi-support',
                        'content' => "\\f124"
                    ),
                    array(
                        'class' => 'hi-tooth',
                        'content' => "\\f125"
                    ),
                    array(
                        'class' => 'hi-unlock',
                        'content' => "\\f126"
                    ),
                    array(
                        'class' => 'hi-wallet',
                        'content' => "\\f127"
                    ),
                    array(
                        'class' => 'hi-calendar11',
                        'content' => "\\f128"
                    ),
                    array(
                        'class' => 'hi-elastic-cloud',
                        'content' => "\\f12b"
                    ),
                    array(
                        'class' => 'hi-icloud',
                        'content' => "\\f12c"
                    ),
                    array(
                        'class' => 'hi-cloudflare',
                        'content' => "\\f12d"
                    ),
                    array(
                        'class' => 'hi-ionic',
                        'content' => "\\f12f"
                    ),
                    array(
                        'class' => 'hi-mail1',
                        'content' => "\\f130"
                    ),
                    array(
                        'class' => 'hi-time1',
                        'content' => "\\f131"
                    ),
                    array(
                        'class' => 'hi-bookmark-o',
                        'content' => "\\f132"
                    ),
                    array(
                        'class' => 'hi-bookmark1',
                        'content' => "\\f133"
                    ),
                    array(
                        'class' => 'hi-star-o1',
                        'content' => "\\f134"
                    ),
                    array(
                        'class' => 'hi-star-half1',
                        'content' => "\\f135"
                    ),
                    array(
                        'class' => 'hi-debian',
                        'content' => "\\f136"
                    ),
                    array(
                        'class' => 'hi-dell',
                        'content' => "\\f137"
                    ),
                    array(
                        'class' => 'hi-deno',
                        'content' => "\\f138"
                    ),
                    array(
                        'class' => 'hi-dependabot',
                        'content' => "\\f139"
                    ),
                    array(
                        'class' => 'hi-digg',
                        'content' => "\\f13a"
                    ),
                    array(
                        'class' => 'hi-digitalocean',
                        'content' => "\\f13b"
                    ),
                    array(
                        'class' => 'hi-ebay',
                        'content' => "\\f13d"
                    ),
                    array(
                        'class' => 'hi-eclipseide',
                        'content' => "\\f13e"
                    ),
                    array(
                        'class' => 'hi-eventbrite',
                        'content' => "\\f13f"
                    ),
                    array(
                        'class' => 'hi-evernote',
                        'content' => "\\f140"
                    ),
                    array(
                        'class' => 'hi-everplaces',
                        'content' => "\\f141"
                    ),
                    array(
                        'class' => 'hi-f-secure',
                        'content' => "\\f142"
                    ),
                    array(
                        'class' => 'hi-favro',
                        'content' => "\\f143"
                    ),
                    array(
                        'class' => 'hi-fedora',
                        'content' => "\\f144"
                    ),
                    array(
                        'class' => 'hi-flutter',
                        'content' => "\\f145"
                    ),
                    array(
                        'class' => 'hi-gitlab',
                        'content' => "\\f146"
                    ),
                    array(
                        'class' => 'hi-gnu',
                        'content' => "\\f147"
                    ),
                    array(
                        'class' => 'hi-gnusocial',
                        'content' => "\\f148"
                    ),
                    array(
                        'class' => 'hi-googlehangoutschat',
                        'content' => "\\f149"
                    ),
                    array(
                        'class' => 'hi-googlepay',
                        'content' => "\\f14a"
                    ),
                    array(
                        'class' => 'hi-grafana',
                        'content' => "\\f14b"
                    ),
                    array(
                        'class' => 'hi-hackaday',
                        'content' => "\\f14c"
                    ),
                    array(
                        'class' => 'hi-hackster',
                        'content' => "\\f14d"
                    ),
                    array(
                        'class' => 'hi-hootsuite',
                        'content' => "\\f14e"
                    ),
                    array(
                        'class' => 'hi-hubspot',
                        'content' => "\\f14f"
                    ),
                    array(
                        'class' => 'hi-iconjar',
                        'content' => "\\f150"
                    ),
                    array(
                        'class' => 'hi-inkscape',
                        'content' => "\\f151"
                    ),
                    array(
                        'class' => 'hi-intel',
                        'content' => "\\f152"
                    ),
                    array(
                        'class' => 'hi-internetexplorer',
                        'content' => "\\f153"
                    ),
                    array(
                        'class' => 'hi-invision',
                        'content' => "\\f154"
                    ),
                    array(
                        'class' => 'hi-jabber',
                        'content' => "\\f155"
                    ),
                    array(
                        'class' => 'hi-javascript',
                        'content' => "\\f156"
                    ),
                    array(
                        'class' => 'hi-jenkins',
                        'content' => "\\f157"
                    ),
                    array(
                        'class' => 'hi-kaios',
                        'content' => "\\f158"
                    ),
                    array(
                        'class' => 'hi-keybase',
                        'content' => "\\f159"
                    ),
                    array(
                        'class' => 'hi-kibana',
                        'content' => "\\f15a"
                    ),
                    array(
                        'class' => 'hi-klout',
                        'content' => "\\f15b"
                    ),
                    array(
                        'class' => 'hi-kotlin',
                        'content' => "\\f15c"
                    ),
                    array(
                        'class' => 'hi-laravel',
                        'content' => "\\f15d"
                    ),
                    array(
                        'class' => 'hi-laravelhorizon',
                        'content' => "\\f15e"
                    ),
                    array(
                        'class' => 'hi-letterboxd',
                        'content' => "\\f15f"
                    ),
                    array(
                        'class' => 'hi-line',
                        'content' => "\\f160"
                    ),
                    array(
                        'class' => 'hi-linewebtoon',
                        'content' => "\\f161"
                    ),
                    array(
                        'class' => 'hi-linuxmint',
                        'content' => "\\f162"
                    ),
                    array(
                        'class' => 'hi-magento',
                        'content' => "\\f163"
                    ),
                    array(
                        'class' => 'hi-magisk',
                        'content' => "\\f164"
                    ),
                    array(
                        'class' => 'hi-mastodon',
                        'content' => "\\f165"
                    ),
                    array(
                        'class' => 'hi-mathworks',
                        'content' => "\\f166"
                    ),
                    array(
                        'class' => 'hi-mediafire',
                        'content' => "\\f167"
                    ),
                    array(
                        'class' => 'hi-mixcloud',
                        'content' => "\\f168"
                    ),
                    array(
                        'class' => 'hi-monogram',
                        'content' => "\\f169"
                    ),
                    array(
                        'class' => 'hi-mysql',
                        'content' => "\\f16a"
                    ),
                    array(
                        'class' => 'hi-netflix',
                        'content' => "\\f16b"
                    ),
                    array(
                        'class' => 'hi-odnoklassniki',
                        'content' => "\\f16c"
                    ),
                    array(
                        'class' => 'hi-opensuse',
                        'content' => "\\f16d"
                    ),
                    array(
                        'class' => 'hi-periscope',
                        'content' => "\\f16e"
                    ),
                    array(
                        'class' => 'hi-php',
                        'content' => "\\f16f"
                    ),
                    array(
                        'class' => 'hi-plangrid',
                        'content' => "\\f170"
                    ),
                    array(
                        'class' => 'hi-player-dot-me',
                        'content' => "\\f171"
                    ),
                    array(
                        'class' => 'hi-plurk',
                        'content' => "\\f172"
                    ),
                    array(
                        'class' => 'hi-powershell',
                        'content' => "\\f173"
                    ),
                    array(
                        'class' => 'hi-probot',
                        'content' => "\\f174"
                    ),
                    array(
                        'class' => 'hi-processwire',
                        'content' => "\\f175"
                    ),
                    array(
                        'class' => 'hi-producthunt',
                        'content' => "\\f176"
                    ),
                    array(
                        'class' => 'hi-python',
                        'content' => "\\f177"
                    ),
                    array(
                        'class' => 'hi-reason',
                        'content' => "\\f178"
                    ),
                    array(
                        'class' => 'hi-redbubble',
                        'content' => "\\f179"
                    ),
                    array(
                        'class' => 'hi-redhat',
                        'content' => "\\f17a"
                    ),
                    array(
                        'class' => 'hi-redux',
                        'content' => "\\f17b"
                    ),
                    array(
                        'class' => 'hi-riot',
                        'content' => "\\f17c"
                    ),
                    array(
                        'class' => 'hi-ruby',
                        'content' => "\\f17d"
                    ),
                    array(
                        'class' => 'hi-runkeeper',
                        'content' => "\\f17e"
                    ),
                    array(
                        'class' => 'hi-rust',
                        'content' => "\\f17f"
                    ),
                    array(
                        'class' => 'hi-salesforce',
                        'content' => "\\f180"
                    ),
                    array(
                        'class' => 'hi-samsung',
                        'content' => "\\f181"
                    ),
                    array(
                        'class' => 'hi-samsungpay',
                        'content' => "\\f182"
                    ),
                    array(
                        'class' => 'hi-sass',
                        'content' => "\\f183"
                    ),
                    array(
                        'class' => 'hi-sega',
                        'content' => "\\f184"
                    ),
                    array(
                        'class' => 'hi-shazam',
                        'content' => "\\f185"
                    ),
                    array(
                        'class' => 'hi-shopify',
                        'content' => "\\f186"
                    ),
                    array(
                        'class' => 'hi-skyliner',
                        'content' => "\\f188"
                    ),
                    array(
                        'class' => 'hi-sourceforge',
                        'content' => "\\f189"
                    ),
                    array(
                        'class' => 'hi-staticman',
                        'content' => "\\f18b"
                    ),
                    array(
                        'class' => 'hi-steemit',
                        'content' => "\\f18c"
                    ),
                    array(
                        'class' => 'hi-stylus',
                        'content' => "\\f18d"
                    ),
                    array(
                        'class' => 'hi-swarm',
                        'content' => "\\f18e"
                    ),
                    array(
                        'class' => 'hi-swift',
                        'content' => "\\f18f"
                    ),
                    array(
                        'class' => 'hi-symfony',
                        'content' => "\\f190"
                    ),
                    array(
                        'class' => 'hi-teamviewer',
                        'content' => "\\f191"
                    ),
                    array(
                        'class' => 'hi-ted',
                        'content' => "\\f192"
                    ),
                    array(
                        'class' => 'hi-teespring',
                        'content' => "\\f193"
                    ),
                    array(
                        'class' => 'hi-tencentqq',
                        'content' => "\\f194"
                    ),
                    array(
                        'class' => 'hi-tiktok',
                        'content' => "\\f195"
                    ),
                    array(
                        'class' => 'hi-todoist',
                        'content' => "\\f196"
                    ),
                    array(
                        'class' => 'hi-toggl',
                        'content' => "\\f197"
                    ),
                    array(
                        'class' => 'hi-tor',
                        'content' => "\\f198"
                    ),
                    array(
                        'class' => 'hi-treehouse',
                        'content' => "\\f199"
                    ),
                    array(
                        'class' => 'hi-twilio',
                        'content' => "\\f19a"
                    ),
                    array(
                        'class' => 'hi-twitch',
                        'content' => "\\f19b"
                    ),
                    array(
                        'class' => 'hi-typescript',
                        'content' => "\\f19c"
                    ),
                    array(
                        'class' => 'hi-typo3',
                        'content' => "\\f19d"
                    ),
                    array(
                        'class' => 'hi-udacity',
                        'content' => "\\f19e"
                    ),
                    array(
                        'class' => 'hi-udemy',
                        'content' => "\\f19f"
                    ),
                    array(
                        'class' => 'hi-1password',
                        'content' => "\\e986"
                    ),
                    array(
                        'class' => 'hi-500px',
                        'content' => "\\e987"
                    ),
                    array(
                        'class' => 'hi-abbrobotstudio',
                        'content' => "\\e988"
                    ),
                    array(
                        'class' => 'hi-about-dot-me',
                        'content' => "\\e989"
                    ),
                    array(
                        'class' => 'hi-abstract',
                        'content' => "\\e98a"
                    ),
                    array(
                        'class' => 'hi-academia',
                        'content' => "\\e98b"
                    ),
                    array(
                        'class' => 'hi-accusoft',
                        'content' => "\\e98c"
                    ),
                    array(
                        'class' => 'hi-acm',
                        'content' => "\\e98d"
                    ),
                    array(
                        'class' => 'hi-addthis',
                        'content' => "\\e98e"
                    ),
                    array(
                        'class' => 'hi-adguard',
                        'content' => "\\e98f"
                    ),
                    array(
                        'class' => 'hi-adobeacrobatreader',
                        'content' => "\\e991"
                    ),
                    array(
                        'class' => 'hi-adobeaftereffects',
                        'content' => "\\e992"
                    ),
                    array(
                        'class' => 'hi-adobeaudition',
                        'content' => "\\e993"
                    ),
                    array(
                        'class' => 'hi-adobecreativecloud',
                        'content' => "\\e994"
                    ),
                    array(
                        'class' => 'hi-adobedreamweaver',
                        'content' => "\\e995"
                    ),
                    array(
                        'class' => 'hi-adobeillustrator',
                        'content' => "\\e996"
                    ),
                    array(
                        'class' => 'hi-adobeindesign',
                        'content' => "\\e997"
                    ),
                    array(
                        'class' => 'hi-adobelightroomcc',
                        'content' => "\\e998"
                    ),
                    array(
                        'class' => 'hi-adobelightroomclassic',
                        'content' => "\\e999"
                    ),
                    array(
                        'class' => 'hi-adobephotoshop',
                        'content' => "\\e99a"
                    ),
                    array(
                        'class' => 'hi-adobepremiere',
                        'content' => "\\e99b"
                    ),
                    array(
                        'class' => 'hi-adobetypekit',
                        'content' => "\\e99c"
                    ),
                    array(
                        'class' => 'hi-adobexd',
                        'content' => "\\e99d"
                    ),
                    array(
                        'class' => 'hi-airbnb',
                        'content' => "\\e99e"
                    ),
                    array(
                        'class' => 'hi-airplayaudio',
                        'content' => "\\e99f"
                    ),
                    array(
                        'class' => 'hi-airplayvideo',
                        'content' => "\\e9a0"
                    ),
                    array(
                        'class' => 'hi-algolia',
                        'content' => "\\e9a1"
                    ),
                    array(
                        'class' => 'hi-alliedmodders',
                        'content' => "\\e9a2"
                    ),
                    array(
                        'class' => 'hi-amazonalexa',
                        'content' => "\\e9a4"
                    ),
                    array(
                        'class' => 'hi-amazonaws',
                        'content' => "\\e9a5"
                    ),
                    array(
                        'class' => 'hi-americanexpress',
                        'content' => "\\e9a7"
                    ),
                    array(
                        'class' => 'hi-anaconda',
                        'content' => "\\e9a8"
                    ),
                    array(
                        'class' => 'hi-analogue',
                        'content' => "\\e9a9"
                    ),
                    array(
                        'class' => 'hi-anchor',
                        'content' => "\\e9ab"
                    ),
                    array(
                        'class' => 'hi-android-head',
                        'content' => "\\e9ac"
                    ),
                    array(
                        'class' => 'hi-angularuniversal',
                        'content' => "\\e9af"
                    ),
                    array(
                        'class' => 'hi-ansible',
                        'content' => "\\e9b0"
                    ),
                    array(
                        'class' => 'hi-apache',
                        'content' => "\\e9b1"
                    ),
                    array(
                        'class' => 'hi-apacheairflow',
                        'content' => "\\e9b2"
                    ),
                    array(
                        'class' => 'hi-apachecordova',
                        'content' => "\\e9b3"
                    ),
                    array(
                        'class' => 'hi-apacheflink',
                        'content' => "\\e9b4"
                    ),
                    array(
                        'class' => 'hi-apachekafka',
                        'content' => "\\e9b5"
                    ),
                    array(
                        'class' => 'hi-apachenetbeanside',
                        'content' => "\\e9b6"
                    ),
                    array(
                        'class' => 'hi-apacheopenoffice',
                        'content' => "\\e9b7"
                    ),
                    array(
                        'class' => 'hi-apacherocketmq',
                        'content' => "\\e9b8"
                    ),
                    array(
                        'class' => 'hi-apachespark',
                        'content' => "\\e9b9"
                    ),
                    array(
                        'class' => 'hi-applepodcasts',
                        'content' => "\\e9bd"
                    ),
                    array(
                        'class' => 'hi-appveyor',
                        'content' => "\\e9be"
                    ),
                    array(
                        'class' => 'hi-aral',
                        'content' => "\\e9bf"
                    ),
                    array(
                        'class' => 'hi-archiveofourown',
                        'content' => "\\e9c0"
                    ),
                    array(
                        'class' => 'hi-arduino',
                        'content' => "\\e9c2"
                    ),
                    array(
                        'class' => 'hi-arxiv',
                        'content' => "\\e9c4"
                    ),
                    array(
                        'class' => 'hi-asciidoctor',
                        'content' => "\\e9c6"
                    ),
                    array(
                        'class' => 'hi-audi',
                        'content' => "\\e9ca"
                    ),
                    array(
                        'class' => 'hi-audible',
                        'content' => "\\e9cb"
                    ),
                    array(
                        'class' => 'hi-auth0',
                        'content' => "\\e9cd"
                    ),
                    array(
                        'class' => 'hi-aventrix',
                        'content' => "\\e9d0"
                    ),
                    array(
                        'class' => 'hi-awesomewm',
                        'content' => "\\e9d1"
                    ),
                    array(
                        'class' => 'hi-azureartifacts',
                        'content' => "\\e9d2"
                    ),
                    array(
                        'class' => 'hi-azuredevops',
                        'content' => "\\e9d3"
                    ),
                    array(
                        'class' => 'hi-babel',
                        'content' => "\\e9d5"
                    ),
                    array(
                        'class' => 'hi-baidu',
                        'content' => "\\e9d6"
                    ),
                    array(
                        'class' => 'hi-bamboo',
                        'content' => "\\e9d7"
                    ),
                    array(
                        'class' => 'hi-bancontact',
                        'content' => "\\e9d8"
                    ),
                    array(
                        'class' => 'hi-bandcamp',
                        'content' => "\\e9d9"
                    ),
                    array(
                        'class' => 'hi-bandlab',
                        'content' => "\\e9da"
                    ),
                    array(
                        'class' => 'hi-bathasu',
                        'content' => "\\e9dc"
                    ),
                    array(
                        'class' => 'hi-beats',
                        'content' => "\\e9dd"
                    ),
                    array(
                        'class' => 'hi-beatsbydre',
                        'content' => "\\e9de"
                    ),
                    array(
                        'class' => 'hi-bigcartel',
                        'content' => "\\e9e0"
                    ),
                    array(
                        'class' => 'hi-bit',
                        'content' => "\\e9e2"
                    ),
                    array(
                        'class' => 'hi-bitdefender',
                        'content' => "\\e9e5"
                    ),
                    array(
                        'class' => 'hi-bitrise',
                        'content' => "\\e9e7"
                    ),
                    array(
                        'class' => 'hi-bmcsoftware',
                        'content' => "\\e9eb"
                    ),
                    array(
                        'class' => 'hi-boeing',
                        'content' => "\\e9ec"
                    ),
                    array(
                        'class' => 'hi-boost',
                        'content' => "\\e9ed"
                    ),
                    array(
                        'class' => 'hi-box',
                        'content' => "\\e9f0"
                    ),
                    array(
                        'class' => 'hi-brand-dot-ai',
                        'content' => "\\e9f1"
                    ),
                    array(
                        'class' => 'hi-brandfolder',
                        'content' => "\\e9f2"
                    ),
                    array(
                        'class' => 'hi-brave',
                        'content' => "\\e9f3"
                    ),
                    array(
                        'class' => 'hi-breaker',
                        'content' => "\\e9f4"
                    ),
                    array(
                        'class' => 'hi-broadcom',
                        'content' => "\\e9f5"
                    ),
                    array(
                        'class' => 'hi-buddy',
                        'content' => "\\e9f6"
                    ),
                    array(
                        'class' => 'hi-buffer',
                        'content' => "\\e9f7"
                    ),
                    array(
                        'class' => 'hi-buymeacoffee',
                        'content' => "\\e9f8"
                    ),
                    array(
                        'class' => 'hi-buzzfeed',
                        'content' => "\\e9f9"
                    ),
                    array(
                        'class' => 'hi-c',
                        'content' => "\\e9fa"
                    ),
                    array(
                        'class' => 'hi-canva',
                        'content' => "\\e9fd"
                    ),
                    array(
                        'class' => 'hi-cashapp',
                        'content' => "\\e9fe"
                    ),
                    array(
                        'class' => 'hi-cassandra',
                        'content' => "\\e9ff"
                    ),
                    array(
                        'class' => 'hi-castorama',
                        'content' => "\\ea00"
                    ),
                    array(
                        'class' => 'hi-castro',
                        'content' => "\\ea01"
                    ),
                    array(
                        'class' => 'hi-centos',
                        'content' => "\\ea02"
                    ),
                    array(
                        'class' => 'hi-cevo',
                        'content' => "\\ea03"
                    ),
                    array(
                        'class' => 'hi-chase',
                        'content' => "\\ea04"
                    ),
                    array(
                        'class' => 'hi-chef',
                        'content' => "\\ea05"
                    ),
                    array(
                        'class' => 'hi-circle1',
                        'content' => "\\ea06"
                    ),
                    array(
                        'class' => 'hi-circleci',
                        'content' => "\\ea07"
                    ),
                    array(
                        'class' => 'hi-cirrusci',
                        'content' => "\\ea08"
                    ),
                    array(
                        'class' => 'hi-cisco',
                        'content' => "\\ea09"
                    ),
                    array(
                        'class' => 'hi-civicrm',
                        'content' => "\\ea0a"
                    ),
                    array(
                        'class' => 'hi-clockify',
                        'content' => "\\ea0b"
                    ),
                    array(
                        'class' => 'hi-clojure',
                        'content' => "\\ea0c"
                    ),
                    array(
                        'class' => 'hi-cloudbees',
                        'content' => "\\ea0d"
                    ),
                    array(
                        'class' => 'hi-cmake',
                        'content' => "\\ea0f"
                    ),
                    array(
                        'class' => 'hi-co-op',
                        'content' => "\\ea10"
                    ),
                    array(
                        'class' => 'hi-codacy',
                        'content' => "\\ea11"
                    ),
                    array(
                        'class' => 'hi-codecademy',
                        'content' => "\\ea12"
                    ),
                    array(
                        'class' => 'hi-codechef',
                        'content' => "\\ea13"
                    ),
                    array(
                        'class' => 'hi-codeclimate',
                        'content' => "\\ea14"
                    ),
                    array(
                        'class' => 'hi-codecov',
                        'content' => "\\ea15"
                    ),
                    array(
                        'class' => 'hi-codefactor',
                        'content' => "\\ea16"
                    ),
                    array(
                        'class' => 'hi-codeforces',
                        'content' => "\\ea17"
                    ),
                    array(
                        'class' => 'hi-codeigniter',
                        'content' => "\\ea18"
                    ),
                    array(
                        'class' => 'hi-coderwall',
                        'content' => "\\ea1a"
                    ),
                    array(
                        'class' => 'hi-codesandbox',
                        'content' => "\\ea1b"
                    ),
                    array(
                        'class' => 'hi-codeship',
                        'content' => "\\ea1c"
                    ),
                    array(
                        'class' => 'hi-codewars',
                        'content' => "\\ea1d"
                    ),
                    array(
                        'class' => 'hi-codio',
                        'content' => "\\ea1e"
                    ),
                    array(
                        'class' => 'hi-coinbase',
                        'content' => "\\ea20"
                    ),
                    array(
                        'class' => 'hi-commonworkflowlanguage',
                        'content' => "\\ea21"
                    ),
                    array(
                        'class' => 'hi-composer',
                        'content' => "\\ea22"
                    ),
                    array(
                        'class' => 'hi-compropago',
                        'content' => "\\ea23"
                    ),
                    array(
                        'class' => 'hi-conekta',
                        'content' => "\\ea25"
                    ),
                    array(
                        'class' => 'hi-confluence',
                        'content' => "\\ea26"
                    ),
                    array(
                        'class' => 'hi-coronarenderer',
                        'content' => "\\ea27"
                    ),
                    array(
                        'class' => 'hi-coursera',
                        'content' => "\\ea28"
                    ),
                    array(
                        'class' => 'hi-coveralls',
                        'content' => "\\ea29"
                    ),
                    array(
                        'class' => 'hi-cpanel',
                        'content' => "\\ea2a"
                    ),
                    array(
                        'class' => 'hi-cplusplus',
                        'content' => "\\ea2b"
                    ),
                    array(
                        'class' => 'hi-creativecommons',
                        'content' => "\\ea2c"
                    ),
                    array(
                        'class' => 'hi-crehana',
                        'content' => "\\ea2d"
                    ),
                    array(
                        'class' => 'hi-crunchbase',
                        'content' => "\\ea2e"
                    ),
                    array(
                        'class' => 'hi-crunchyroll',
                        'content' => "\\ea2f"
                    ),
                    array(
                        'class' => 'hi-cryengine',
                        'content' => "\\ea30"
                    ),
                    array(
                        'class' => 'hi-csharp',
                        'content' => "\\ea31"
                    ),
                    array(
                        'class' => 'hi-css32',
                        'content' => "\\ea32"
                    ),
                    array(
                        'class' => 'hi-curl',
                        'content' => "\\ea34"
                    ),
                    array(
                        'class' => 'hi-d3-dot-js',
                        'content' => "\\ea35"
                    ),
                    array(
                        'class' => 'hi-dart',
                        'content' => "\\ea37"
                    ),
                    array(
                        'class' => 'hi-dashlane',
                        'content' => "\\ea38"
                    ),
                    array(
                        'class' => 'hi-datacamp',
                        'content' => "\\ea39"
                    ),
                    array(
                        'class' => 'hi-dazn',
                        'content' => "\\ea3a"
                    ),
                    array(
                        'class' => 'hi-dblp',
                        'content' => "\\ea3b"
                    ),
                    array(
                        'class' => 'hi-deepin',
                        'content' => "\\ea3d"
                    ),
                    array(
                        'class' => 'hi-deezer',
                        'content' => "\\ea3e"
                    ),
                    array(
                        'class' => 'hi-delicious1',
                        'content' => "\\ea3f"
                    ),
                    array(
                        'class' => 'hi-deliveroo',
                        'content' => "\\ea40"
                    ),
                    array(
                        'class' => 'hi-designernews',
                        'content' => "\\ea44"
                    ),
                    array(
                        'class' => 'hi-dev-dot-to',
                        'content' => "\\ea45"
                    ),
                    array(
                        'class' => 'hi-deviantart1',
                        'content' => "\\ea46"
                    ),
                    array(
                        'class' => 'hi-devrant',
                        'content' => "\\ea47"
                    ),
                    array(
                        'class' => 'hi-diaspora',
                        'content' => "\\ea48"
                    ),
                    array(
                        'class' => 'hi-directus',
                        'content' => "\\ea4b"
                    ),
                    array(
                        'class' => 'hi-discord',
                        'content' => "\\ea4c"
                    ),
                    array(
                        'class' => 'hi-discourse',
                        'content' => "\\ea4d"
                    ),
                    array(
                        'class' => 'hi-discover',
                        'content' => "\\ea4e"
                    ),
                    array(
                        'class' => 'hi-disqus',
                        'content' => "\\ea4f"
                    ),
                    array(
                        'class' => 'hi-disroot',
                        'content' => "\\ea50"
                    ),
                    array(
                        'class' => 'hi-django',
                        'content' => "\\ea51"
                    ),
                    array(
                        'class' => 'hi-dlna',
                        'content' => "\\ea52"
                    ),
                    array(
                        'class' => 'hi-docker',
                        'content' => "\\ea53"
                    ),
                    array(
                        'class' => 'hi-docusign',
                        'content' => "\\ea54"
                    ),
                    array(
                        'class' => 'hi-dolby',
                        'content' => "\\ea55"
                    ),
                    array(
                        'class' => 'hi-dot-net',
                        'content' => "\\ea56"
                    ),
                    array(
                        'class' => 'hi-draugiem-dot-lv',
                        'content' => "\\ea57"
                    ),
                    array(
                        'class' => 'hi-drone',
                        'content' => "\\ea59"
                    ),
                    array(
                        'class' => 'hi-drupal',
                        'content' => "\\ea5b"
                    ),
                    array(
                        'class' => 'hi-dtube',
                        'content' => "\\ea5c"
                    ),
                    array(
                        'class' => 'hi-duckduckgo',
                        'content' => "\\ea5d"
                    ),
                    array(
                        'class' => 'hi-dunked',
                        'content' => "\\ea5e"
                    ),
                    array(
                        'class' => 'hi-duolingo',
                        'content' => "\\ea5f"
                    ),
                    array(
                        'class' => 'hi-dynatrace',
                        'content' => "\\ea60"
                    ),
                    array(
                        'class' => 'hi-elastic',
                        'content' => "\\ea63"
                    ),
                    array(
                        'class' => 'hi-elasticsearch',
                        'content' => "\\ea65"
                    ),
                    array(
                        'class' => 'hi-elasticstack',
                        'content' => "\\ea66"
                    ),
                    array(
                        'class' => 'hi-electron',
                        'content' => "\\ea67"
                    ),
                    array(
                        'class' => 'hi-elementary',
                        'content' => "\\ea68"
                    ),
                    array(
                        'class' => 'hi-eleventy',
                        'content' => "\\ea69"
                    ),
                    array(
                        'class' => 'hi-ello1',
                        'content' => "\\ea6a"
                    ),
                    array(
                        'class' => 'hi-elsevier',
                        'content' => "\\ea6b"
                    ),
                    array(
                        'class' => 'hi-ember-dot-js',
                        'content' => "\\ea6c"
                    ),
                    array(
                        'class' => 'hi-emlakjet',
                        'content' => "\\ea6d"
                    ),
                    array(
                        'class' => 'hi-empirekred',
                        'content' => "\\ea6e"
                    ),
                    array(
                        'class' => 'hi-envato',
                        'content' => "\\ea6f"
                    ),
                    array(
                        'class' => 'hi-epel',
                        'content' => "\\ea70"
                    ),
                    array(
                        'class' => 'hi-epicgames',
                        'content' => "\\ea71"
                    ),
                    array(
                        'class' => 'hi-epson',
                        'content' => "\\ea72"
                    ),
                    array(
                        'class' => 'hi-esea',
                        'content' => "\\ea73"
                    ),
                    array(
                        'class' => 'hi-eslint',
                        'content' => "\\ea74"
                    ),
                    array(
                        'class' => 'hi-ethereum',
                        'content' => "\\ea75"
                    ),
                    array(
                        'class' => 'hi-etsy',
                        'content' => "\\ea76"
                    ),
                    array(
                        'class' => 'hi-eventstore',
                        'content' => "\\ea78"
                    ),
                    array(
                        'class' => 'hi-evry',
                        'content' => "\\ea7b"
                    ),
                    array(
                        'class' => 'hi-exercism',
                        'content' => "\\ea7c"
                    ),
                    array(
                        'class' => 'hi-expertsexchange',
                        'content' => "\\ea7d"
                    ),
                    array(
                        'class' => 'hi-expo',
                        'content' => "\\ea7e"
                    ),
                    array(
                        'class' => 'hi-eyeem',
                        'content' => "\\ea7f"
                    ),
                    array(
                        'class' => 'hi-f-droid',
                        'content' => "\\ea80"
                    ),
                    array(
                        'class' => 'hi-facebook3',
                        'content' => "\\ea82"
                    ),
                    array(
                        'class' => 'hi-faceit',
                        'content' => "\\ea83"
                    ),
                    array(
                        'class' => 'hi-fandango',
                        'content' => "\\ea84"
                    ),
                    array(
                        'class' => 'hi-feathub',
                        'content' => "\\ea86"
                    ),
                    array(
                        'class' => 'hi-feedly',
                        'content' => "\\ea88"
                    ),
                    array(
                        'class' => 'hi-fidoalliance',
                        'content' => "\\ea89"
                    ),
                    array(
                        'class' => 'hi-figma',
                        'content' => "\\ea8a"
                    ),
                    array(
                        'class' => 'hi-firebase',
                        'content' => "\\ea8c"
                    ),
                    array(
                        'class' => 'hi-fitbit',
                        'content' => "\\ea8d"
                    ),
                    array(
                        'class' => 'hi-fiverr',
                        'content' => "\\ea8e"
                    ),
                    array(
                        'class' => 'hi-flask',
                        'content' => "\\ea8f"
                    ),
                    array(
                        'class' => 'hi-flattr1',
                        'content' => "\\ea90"
                    ),
                    array(
                        'class' => 'hi-flipboard',
                        'content' => "\\ea92"
                    ),
                    array(
                        'class' => 'hi-floatplane',
                        'content' => "\\ea93"
                    ),
                    array(
                        'class' => 'hi-fnac',
                        'content' => "\\ea95"
                    ),
                    array(
                        'class' => 'hi-formstack',
                        'content' => "\\ea96"
                    ),
                    array(
                        'class' => 'hi-fossa',
                        'content' => "\\ea97"
                    ),
                    array(
                        'class' => 'hi-fossilscm',
                        'content' => "\\ea98"
                    ),
                    array(
                        'class' => 'hi-framer',
                        'content' => "\\ea9a"
                    ),
                    array(
                        'class' => 'hi-freebsd',
                        'content' => "\\ea9b"
                    ),
                    array(
                        'class' => 'hi-freecodecamp',
                        'content' => "\\ea9c"
                    ),
                    array(
                        'class' => 'hi-fujifilm',
                        'content' => "\\ea9d"
                    ),
                    array(
                        'class' => 'hi-fujitsu',
                        'content' => "\\ea9e"
                    ),
                    array(
                        'class' => 'hi-furaffinity',
                        'content' => "\\ea9f"
                    ),
                    array(
                        'class' => 'hi-furrynetwork',
                        'content' => "\\eaa0"
                    ),
                    array(
                        'class' => 'hi-garmin',
                        'content' => "\\eaa1"
                    ),
                    array(
                        'class' => 'hi-gatsby',
                        'content' => "\\eaa2"
                    ),
                    array(
                        'class' => 'hi-gauges',
                        'content' => "\\eaa3"
                    ),
                    array(
                        'class' => 'hi-genius',
                        'content' => "\\eaa4"
                    ),
                    array(
                        'class' => 'hi-gentoo',
                        'content' => "\\eaa5"
                    ),
                    array(
                        'class' => 'hi-geocaching',
                        'content' => "\\eaa6"
                    ),
                    array(
                        'class' => 'hi-gerrit',
                        'content' => "\\eaa7"
                    ),
                    array(
                        'class' => 'hi-ghost',
                        'content' => "\\eaa8"
                    ),
                    array(
                        'class' => 'hi-gimp',
                        'content' => "\\eaa9"
                    ),
                    array(
                        'class' => 'hi-gitea',
                        'content' => "\\eaab"
                    ),
                    array(
                        'class' => 'hi-gitlab1',
                        'content' => "\\eaad"
                    ),
                    array(
                        'class' => 'hi-gitpod',
                        'content' => "\\eaae"
                    ),
                    array(
                        'class' => 'hi-gitter',
                        'content' => "\\eaaf"
                    ),
                    array(
                        'class' => 'hi-glassdoor',
                        'content' => "\\eab0"
                    ),
                    array(
                        'class' => 'hi-glitch',
                        'content' => "\\eab1"
                    ),
                    array(
                        'class' => 'hi-gnome',
                        'content' => "\\eab3"
                    ),
                    array(
                        'class' => 'hi-gnuicecat',
                        'content' => "\\eab5"
                    ),
                    array(
                        'class' => 'hi-gnuprivacyguard',
                        'content' => "\\eab6"
                    ),
                    array(
                        'class' => 'hi-go',
                        'content' => "\\eab8"
                    ),
                    array(
                        'class' => 'hi-godotengine',
                        'content' => "\\eab9"
                    ),
                    array(
                        'class' => 'hi-gog-dot-com',
                        'content' => "\\eaba"
                    ),
                    array(
                        'class' => 'hi-goldenline',
                        'content' => "\\eabb"
                    ),
                    array(
                        'class' => 'hi-goodreads',
                        'content' => "\\eabc"
                    ),
                    array(
                        'class' => 'hi-googleads',
                        'content' => "\\eabe"
                    ),
                    array(
                        'class' => 'hi-googleanalytics',
                        'content' => "\\eabf"
                    ),
                    array(
                        'class' => 'hi-googlechrome',
                        'content' => "\\eac0"
                    ),
                    array(
                        'class' => 'hi-googlecloud',
                        'content' => "\\eac1"
                    ),
                    array(
                        'class' => 'hi-googledrive',
                        'content' => "\\eac2"
                    ),
                    array(
                        'class' => 'hi-googlehangouts',
                        'content' => "\\eac3"
                    ),
                    array(
                        'class' => 'hi-googlekeep',
                        'content' => "\\eac5"
                    ),
                    array(
                        'class' => 'hi-googlepay1',
                        'content' => "\\eac6"
                    ),
                    array(
                        'class' => 'hi-googleplay',
                        'content' => "\\eac7"
                    ),
                    array(
                        'class' => 'hi-googlepodcasts',
                        'content' => "\\eac8"
                    ),
                    array(
                        'class' => 'hi-googlescholar',
                        'content' => "\\eac9"
                    ),
                    array(
                        'class' => 'hi-googlesearchconsole',
                        'content' => "\\eaca"
                    ),
                    array(
                        'class' => 'hi-gov-dot-uk',
                        'content' => "\\eacb"
                    ),
                    array(
                        'class' => 'hi-gradle',
                        'content' => "\\eacc"
                    ),
                    array(
                        'class' => 'hi-graphcool',
                        'content' => "\\eace"
                    ),
                    array(
                        'class' => 'hi-graphql',
                        'content' => "\\eacf"
                    ),
                    array(
                        'class' => 'hi-grav',
                        'content' => "\\ead0"
                    ),
                    array(
                        'class' => 'hi-greenkeeper',
                        'content' => "\\ead2"
                    ),
                    array(
                        'class' => 'hi-greensock',
                        'content' => "\\ead3"
                    ),
                    array(
                        'class' => 'hi-groovy',
                        'content' => "\\ead4"
                    ),
                    array(
                        'class' => 'hi-groupon',
                        'content' => "\\ead5"
                    ),
                    array(
                        'class' => 'hi-gulp',
                        'content' => "\\ead6"
                    ),
                    array(
                        'class' => 'hi-gumroad',
                        'content' => "\\ead7"
                    ),
                    array(
                        'class' => 'hi-gumtree',
                        'content' => "\\ead8"
                    ),
                    array(
                        'class' => 'hi-gutenberg',
                        'content' => "\\ead9"
                    ),
                    array(
                        'class' => 'hi-habr',
                        'content' => "\\eada"
                    ),
                    array(
                        'class' => 'hi-hackerearth',
                        'content' => "\\eadc"
                    ),
                    array(
                        'class' => 'hi-hackerone',
                        'content' => "\\eadd"
                    ),
                    array(
                        'class' => 'hi-hackerrank',
                        'content' => "\\eade"
                    ),
                    array(
                        'class' => 'hi-hackhands',
                        'content' => "\\eadf"
                    ),
                    array(
                        'class' => 'hi-happycow',
                        'content' => "\\eae1"
                    ),
                    array(
                        'class' => 'hi-hashnode',
                        'content' => "\\eae2"
                    ),
                    array(
                        'class' => 'hi-haskell',
                        'content' => "\\eae3"
                    ),
                    array(
                        'class' => 'hi-hatenabookmark',
                        'content' => "\\eae4"
                    ),
                    array(
                        'class' => 'hi-haxe',
                        'content' => "\\eae5"
                    ),
                    array(
                        'class' => 'hi-helm',
                        'content' => "\\eae6"
                    ),
                    array(
                        'class' => 'hi-here',
                        'content' => "\\eae7"
                    ),
                    array(
                        'class' => 'hi-heroku',
                        'content' => "\\eae8"
                    ),
                    array(
                        'class' => 'hi-hexo',
                        'content' => "\\eae9"
                    ),
                    array(
                        'class' => 'hi-highly',
                        'content' => "\\eaea"
                    ),
                    array(
                        'class' => 'hi-hipchat',
                        'content' => "\\eaeb"
                    ),
                    array(
                        'class' => 'hi-hitachi',
                        'content' => "\\eaec"
                    ),
                    array(
                        'class' => 'hi-hockeyapp',
                        'content' => "\\eaed"
                    ),
                    array(
                        'class' => 'hi-homeassistant',
                        'content' => "\\eaee"
                    ),
                    array(
                        'class' => 'hi-homify',
                        'content' => "\\eaef"
                    ),
                    array(
                        'class' => 'hi-houzz',
                        'content' => "\\eaf1"
                    ),
                    array(
                        'class' => 'hi-hp',
                        'content' => "\\eaf2"
                    ),
                    array(
                        'class' => 'hi-htmlacademy',
                        'content' => "\\eaf4"
                    ),
                    array(
                        'class' => 'hi-huawei',
                        'content' => "\\eaf5"
                    ),
                    array(
                        'class' => 'hi-hulu',
                        'content' => "\\eaf7"
                    ),
                    array(
                        'class' => 'hi-humblebundle',
                        'content' => "\\eaf8"
                    ),
                    array(
                        'class' => 'hi-hurriyetemlak',
                        'content' => "\\eaf9"
                    ),
                    array(
                        'class' => 'hi-hypothesis',
                        'content' => "\\eafa"
                    ),
                    array(
                        'class' => 'hi-iata',
                        'content' => "\\eafb"
                    ),
                    array(
                        'class' => 'hi-ibm',
                        'content' => "\\eafc"
                    ),
                    array(
                        'class' => 'hi-icomoon',
                        'content' => "\\eafe"
                    ),
                    array(
                        'class' => 'hi-icon',
                        'content' => "\\eaff"
                    ),
                    array(
                        'class' => 'hi-icq',
                        'content' => "\\eb01"
                    ),
                    array(
                        'class' => 'hi-ideal',
                        'content' => "\\eb02"
                    ),
                    array(
                        'class' => 'hi-ifixit',
                        'content' => "\\eb03"
                    ),
                    array(
                        'class' => 'hi-imdb',
                        'content' => "\\eb04"
                    ),
                    array(
                        'class' => 'hi-imgur',
                        'content' => "\\eb05"
                    ),
                    array(
                        'class' => 'hi-indeed',
                        'content' => "\\eb06"
                    ),
                    array(
                        'class' => 'hi-influxdb',
                        'content' => "\\eb07"
                    ),
                    array(
                        'class' => 'hi-instacart',
                        'content' => "\\eb09"
                    ),
                    array(
                        'class' => 'hi-instapaper',
                        'content' => "\\eb0b"
                    ),
                    array(
                        'class' => 'hi-intellijidea',
                        'content' => "\\eb0d"
                    ),
                    array(
                        'class' => 'hi-intercom',
                        'content' => "\\eb0e"
                    ),
                    array(
                        'class' => 'hi-internetarchive',
                        'content' => "\\eb0f"
                    ),
                    array(
                        'class' => 'hi-invoiceninja',
                        'content' => "\\eb12"
                    ),
                    array(
                        'class' => 'hi-ios',
                        'content' => "\\eb14"
                    ),
                    array(
                        'class' => 'hi-ipfs',
                        'content' => "\\eb15"
                    ),
                    array(
                        'class' => 'hi-issuu',
                        'content' => "\\eb16"
                    ),
                    array(
                        'class' => 'hi-itch-dot-io',
                        'content' => "\\eb17"
                    ),
                    array(
                        'class' => 'hi-itunes',
                        'content' => "\\eb18"
                    ),
                    array(
                        'class' => 'hi-java',
                        'content' => "\\eb1a"
                    ),
                    array(
                        'class' => 'hi-jekyll',
                        'content' => "\\eb1c"
                    ),
                    array(
                        'class' => 'hi-jest',
                        'content' => "\\eb1e"
                    ),
                    array(
                        'class' => 'hi-jet',
                        'content' => "\\eb1f"
                    ),
                    array(
                        'class' => 'hi-jetbrains',
                        'content' => "\\eb20"
                    ),
                    array(
                        'class' => 'hi-jinja',
                        'content' => "\\eb21"
                    ),
                    array(
                        'class' => 'hi-jira',
                        'content' => "\\eb22"
                    ),
                    array(
                        'class' => 'hi-jquery',
                        'content' => "\\eb24"
                    ),
                    array(
                        'class' => 'hi-jsdelivr',
                        'content' => "\\eb25"
                    ),
                    array(
                        'class' => 'hi-jsfiddle',
                        'content' => "\\eb26"
                    ),
                    array(
                        'class' => 'hi-json',
                        'content' => "\\eb27"
                    ),
                    array(
                        'class' => 'hi-jupyter',
                        'content' => "\\eb28"
                    ),
                    array(
                        'class' => 'hi-justgiving',
                        'content' => "\\eb29"
                    ),
                    array(
                        'class' => 'hi-kaggle',
                        'content' => "\\eb2a"
                    ),
                    array(
                        'class' => 'hi-kaspersky',
                        'content' => "\\eb2c"
                    ),
                    array(
                        'class' => 'hi-kentico',
                        'content' => "\\eb2d"
                    ),
                    array(
                        'class' => 'hi-keras',
                        'content' => "\\eb2e"
                    ),
                    array(
                        'class' => 'hi-keycdn',
                        'content' => "\\eb30"
                    ),
                    array(
                        'class' => 'hi-khanacademy',
                        'content' => "\\eb31"
                    ),
                    array(
                        'class' => 'hi-kickstarter',
                        'content' => "\\eb33"
                    ),
                    array(
                        'class' => 'hi-kik',
                        'content' => "\\eb34"
                    ),
                    array(
                        'class' => 'hi-kirby',
                        'content' => "\\eb35"
                    ),
                    array(
                        'class' => 'hi-known',
                        'content' => "\\eb37"
                    ),
                    array(
                        'class' => 'hi-ko-fi',
                        'content' => "\\eb38"
                    ),
                    array(
                        'class' => 'hi-kodi',
                        'content' => "\\eb39"
                    ),
                    array(
                        'class' => 'hi-koding',
                        'content' => "\\eb3a"
                    ),
                    array(
                        'class' => 'hi-krita',
                        'content' => "\\eb3c"
                    ),
                    array(
                        'class' => 'hi-kubernetes',
                        'content' => "\\eb3d"
                    ),
                    array(
                        'class' => 'hi-laravel1',
                        'content' => "\\eb3e"
                    ),
                    array(
                        'class' => 'hi-laravelnova',
                        'content' => "\\eb40"
                    ),
                    array(
                        'class' => 'hi-lastpass',
                        'content' => "\\eb42"
                    ),
                    array(
                        'class' => 'hi-latex',
                        'content' => "\\eb43"
                    ),
                    array(
                        'class' => 'hi-launchpad1',
                        'content' => "\\eb44"
                    ),
                    array(
                        'class' => 'hi-leetcode',
                        'content' => "\\eb45"
                    ),
                    array(
                        'class' => 'hi-lenovo',
                        'content' => "\\eb46"
                    ),
                    array(
                        'class' => 'hi-letsencrypt',
                        'content' => "\\eb47"
                    ),
                    array(
                        'class' => 'hi-lgtm',
                        'content' => "\\eb49"
                    ),
                    array(
                        'class' => 'hi-liberapay',
                        'content' => "\\eb4a"
                    ),
                    array(
                        'class' => 'hi-librarything',
                        'content' => "\\eb4b"
                    ),
                    array(
                        'class' => 'hi-linode',
                        'content' => "\\eb50"
                    ),
                    array(
                        'class' => 'hi-linux',
                        'content' => "\\eb51"
                    ),
                    array(
                        'class' => 'hi-linuxfoundation',
                        'content' => "\\eb52"
                    ),
                    array(
                        'class' => 'hi-livejournal',
                        'content' => "\\eb54"
                    ),
                    array(
                        'class' => 'hi-livestream',
                        'content' => "\\eb55"
                    ),
                    array(
                        'class' => 'hi-llvm',
                        'content' => "\\eb56"
                    ),
                    array(
                        'class' => 'hi-logstash',
                        'content' => "\\eb57"
                    ),
                    array(
                        'class' => 'hi-loop1',
                        'content' => "\\eb58"
                    ),
                    array(
                        'class' => 'hi-lua',
                        'content' => "\\eb59"
                    ),
                    array(
                        'class' => 'hi-lufthansa',
                        'content' => "\\eb5a"
                    ),
                    array(
                        'class' => 'hi-lumen',
                        'content' => "\\eb5b"
                    ),
                    array(
                        'class' => 'hi-lyft',
                        'content' => "\\eb5c"
                    ),
                    array(
                        'class' => 'hi-macys',
                        'content' => "\\eb5d"
                    ),
                    array(
                        'class' => 'hi-mail-dot-ru',
                        'content' => "\\eb60"
                    ),
                    array(
                        'class' => 'hi-makerbot',
                        'content' => "\\eb62"
                    ),
                    array(
                        'class' => 'hi-manageiq',
                        'content' => "\\eb63"
                    ),
                    array(
                        'class' => 'hi-manjaro',
                        'content' => "\\eb64"
                    ),
                    array(
                        'class' => 'hi-mapbox',
                        'content' => "\\eb65"
                    ),
                    array(
                        'class' => 'hi-markdown',
                        'content' => "\\eb66"
                    ),
                    array(
                        'class' => 'hi-marketo',
                        'content' => "\\eb67"
                    ),
                    array(
                        'class' => 'hi-materialdesign',
                        'content' => "\\eb6a"
                    ),
                    array(
                        'class' => 'hi-matrix',
                        'content' => "\\eb6c"
                    ),
                    array(
                        'class' => 'hi-mattermost',
                        'content' => "\\eb6d"
                    ),
                    array(
                        'class' => 'hi-matternet',
                        'content' => "\\eb6e"
                    ),
                    array(
                        'class' => 'hi-mcafee',
                        'content' => "\\eb6f"
                    ),
                    array(
                        'class' => 'hi-mdnwebdocs',
                        'content' => "\\eb70"
                    ),
                    array(
                        'class' => 'hi-mediatemple',
                        'content' => "\\eb72"
                    ),
                    array(
                        'class' => 'hi-medium1',
                        'content' => "\\eb73"
                    ),
                    array(
                        'class' => 'hi-meetup',
                        'content' => "\\eb74"
                    ),
                    array(
                        'class' => 'hi-mega',
                        'content' => "\\eb75"
                    ),
                    array(
                        'class' => 'hi-mendeley',
                        'content' => "\\eb76"
                    ),
                    array(
                        'class' => 'hi-mercedes',
                        'content' => "\\eb77"
                    ),
                    array(
                        'class' => 'hi-microsoftaccess',
                        'content' => "\\eb7d"
                    ),
                    array(
                        'class' => 'hi-microsoftazure',
                        'content' => "\\eb7e"
                    ),
                    array(
                        'class' => 'hi-microsoftedge',
                        'content' => "\\eb7f"
                    ),
                    array(
                        'class' => 'hi-microsoftoffice',
                        'content' => "\\eb81"
                    ),
                    array(
                        'class' => 'hi-microsoftonedrive',
                        'content' => "\\eb82"
                    ),
                    array(
                        'class' => 'hi-microsoftonenote',
                        'content' => "\\eb83"
                    ),
                    array(
                        'class' => 'hi-microsoftoutlook',
                        'content' => "\\eb84"
                    ),
                    array(
                        'class' => 'hi-microsoftpowerpoint',
                        'content' => "\\eb85"
                    ),
                    array(
                        'class' => 'hi-microsoftteams',
                        'content' => "\\eb86"
                    ),
                    array(
                        'class' => 'hi-microsoftword',
                        'content' => "\\eb87"
                    ),
                    array(
                        'class' => 'hi-microstrategy',
                        'content' => "\\eb88"
                    ),
                    array(
                        'class' => 'hi-minds',
                        'content' => "\\eb89"
                    ),
                    array(
                        'class' => 'hi-minetest',
                        'content' => "\\eb8a"
                    ),
                    array(
                        'class' => 'hi-minutemailer',
                        'content' => "\\eb8b"
                    ),
                    array(
                        'class' => 'hi-mix',
                        'content' => "\\eb8c"
                    ),
                    array(
                        'class' => 'hi-mixer',
                        'content' => "\\eb8e"
                    ),
                    array(
                        'class' => 'hi-mojang',
                        'content' => "\\eb8f"
                    ),
                    array(
                        'class' => 'hi-monero',
                        'content' => "\\eb90"
                    ),
                    array(
                        'class' => 'hi-mongodb',
                        'content' => "\\eb91"
                    ),
                    array(
                        'class' => 'hi-monkeytie',
                        'content' => "\\eb92"
                    ),
                    array(
                        'class' => 'hi-monster',
                        'content' => "\\eb94"
                    ),
                    array(
                        'class' => 'hi-monzo',
                        'content' => "\\eb95"
                    ),
                    array(
                        'class' => 'hi-moo',
                        'content' => "\\eb96"
                    ),
                    array(
                        'class' => 'hi-mozilla',
                        'content' => "\\eb97"
                    ),
                    array(
                        'class' => 'hi-mozillafirefox',
                        'content' => "\\eb98"
                    ),
                    array(
                        'class' => 'hi-musescore',
                        'content' => "\\eb99"
                    ),
                    array(
                        'class' => 'hi-mxlinux',
                        'content' => "\\eb9a"
                    ),
                    array(
                        'class' => 'hi-myspace',
                        'content' => "\\eb9b"
                    ),
                    array(
                        'class' => 'hi-nativescript',
                        'content' => "\\eb9d"
                    ),
                    array(
                        'class' => 'hi-nec',
                        'content' => "\\eb9e"
                    ),
                    array(
                        'class' => 'hi-neo4j',
                        'content' => "\\eb9f"
                    ),
                    array(
                        'class' => 'hi-netlify',
                        'content' => "\\eba1"
                    ),
                    array(
                        'class' => 'hi-next-dot-js',
                        'content' => "\\eba2"
                    ),
                    array(
                        'class' => 'hi-nextcloud',
                        'content' => "\\eba3"
                    ),
                    array(
                        'class' => 'hi-nextdoor',
                        'content' => "\\eba4"
                    ),
                    array(
                        'class' => 'hi-nginx',
                        'content' => "\\eba5"
                    ),
                    array(
                        'class' => 'hi-nim',
                        'content' => "\\eba6"
                    ),
                    array(
                        'class' => 'hi-nintendo',
                        'content' => "\\eba7"
                    ),
                    array(
                        'class' => 'hi-nintendo3ds',
                        'content' => "\\eba8"
                    ),
                    array(
                        'class' => 'hi-nintendogamecube',
                        'content' => "\\eba9"
                    ),
                    array(
                        'class' => 'hi-nintendoswitch',
                        'content' => "\\ebaa"
                    ),
                    array(
                        'class' => 'hi-node-js',
                        'content' => "\\ebab"
                    ),
                    array(
                        'class' => 'hi-node-red',
                        'content' => "\\ebac"
                    ),
                    array(
                        'class' => 'hi-nodemon',
                        'content' => "\\ebad"
                    ),
                    array(
                        'class' => 'hi-nokia',
                        'content' => "\\ebae"
                    ),
                    array(
                        'class' => 'hi-notion',
                        'content' => "\\ebaf"
                    ),
                    array(
                        'class' => 'hi-notist',
                        'content' => "\\ebb0"
                    ),
                    array(
                        'class' => 'hi-npm-logo',
                        'content' => "\\ebb1"
                    ),
                    array(
                        'class' => 'hi-nucleo',
                        'content' => "\\ebb2"
                    ),
                    array(
                        'class' => 'hi-nuget',
                        'content' => "\\ebb3"
                    ),
                    array(
                        'class' => 'hi-nutanix',
                        'content' => "\\ebb4"
                    ),
                    array(
                        'class' => 'hi-nuxt-dot-js',
                        'content' => "\\ebb5"
                    ),
                    array(
                        'class' => 'hi-nvidia',
                        'content' => "\\ebb6"
                    ),
                    array(
                        'class' => 'hi-obsstudio',
                        'content' => "\\ebb7"
                    ),
                    array(
                        'class' => 'hi-ocaml',
                        'content' => "\\ebb8"
                    ),
                    array(
                        'class' => 'hi-octave',
                        'content' => "\\ebb9"
                    ),
                    array(
                        'class' => 'hi-octopusdeploy',
                        'content' => "\\ebba"
                    ),
                    array(
                        'class' => 'hi-oculus',
                        'content' => "\\ebbb"
                    ),
                    array(
                        'class' => 'hi-openaccess',
                        'content' => "\\ebbd"
                    ),
                    array(
                        'class' => 'hi-openapiinitiative',
                        'content' => "\\ebbe"
                    ),
                    array(
                        'class' => 'hi-opencollective',
                        'content' => "\\ebbf"
                    ),
                    array(
                        'class' => 'hi-openid',
                        'content' => "\\ebc0"
                    ),
                    array(
                        'class' => 'hi-opensourceinitiative',
                        'content' => "\\ebc1"
                    ),
                    array(
                        'class' => 'hi-openssl',
                        'content' => "\\ebc2"
                    ),
                    array(
                        'class' => 'hi-openstreetmap',
                        'content' => "\\ebc3"
                    ),
                    array(
                        'class' => 'hi-openvpn',
                        'content' => "\\ebc5"
                    ),
                    array(
                        'class' => 'hi-opsgenie',
                        'content' => "\\ebc7"
                    ),
                    array(
                        'class' => 'hi-oracle',
                        'content' => "\\ebc8"
                    ),
                    array(
                        'class' => 'hi-orcid',
                        'content' => "\\ebc9"
                    ),
                    array(
                        'class' => 'hi-origin',
                        'content' => "\\ebca"
                    ),
                    array(
                        'class' => 'hi-osmc',
                        'content' => "\\ebcb"
                    ),
                    array(
                        'class' => 'hi-overcast',
                        'content' => "\\ebcc"
                    ),
                    array(
                        'class' => 'hi-overleaf',
                        'content' => "\\ebcd"
                    ),
                    array(
                        'class' => 'hi-ovh',
                        'content' => "\\ebce"
                    ),
                    array(
                        'class' => 'hi-pagekit',
                        'content' => "\\ebcf"
                    ),
                    array(
                        'class' => 'hi-palantir',
                        'content' => "\\ebd0"
                    ),
                    array(
                        'class' => 'hi-paloaltosoftware',
                        'content' => "\\ebd1"
                    ),
                    array(
                        'class' => 'hi-pandora',
                        'content' => "\\ebd2"
                    ),
                    array(
                        'class' => 'hi-pantheon',
                        'content' => "\\ebd3"
                    ),
                    array(
                        'class' => 'hi-parse-dot-ly',
                        'content' => "\\ebd4"
                    ),
                    array(
                        'class' => 'hi-pastebin',
                        'content' => "\\ebd5"
                    ),
                    array(
                        'class' => 'hi-patreon',
                        'content' => "\\ebd6"
                    ),
                    array(
                        'class' => 'hi-paypal',
                        'content' => "\\ebd7"
                    ),
                    array(
                        'class' => 'hi-peertube',
                        'content' => "\\ebd8"
                    ),
                    array(
                        'class' => 'hi-pi-hole',
                        'content' => "\\ebdb"
                    ),
                    array(
                        'class' => 'hi-picarto-tv',
                        'content' => "\\ebdc"
                    ),
                    array(
                        'class' => 'hi-pinboard',
                        'content' => "\\ebdd"
                    ),
                    array(
                        'class' => 'hi-pingdom',
                        'content' => "\\ebde"
                    ),
                    array(
                        'class' => 'hi-pingup',
                        'content' => "\\ebdf"
                    ),
                    array(
                        'class' => 'hi-pivotaltracker',
                        'content' => "\\ebe1"
                    ),
                    array(
                        'class' => 'hi-pjsip',
                        'content' => "\\ebe2"
                    ),
                    array(
                        'class' => 'hi-playerfm',
                        'content' => "\\ebe5"
                    ),
                    array(
                        'class' => 'hi-playstation',
                        'content' => "\\ebe6"
                    ),
                    array(
                        'class' => 'hi-playstation3',
                        'content' => "\\ebe7"
                    ),
                    array(
                        'class' => 'hi-playstation4',
                        'content' => "\\ebe8"
                    ),
                    array(
                        'class' => 'hi-plesk',
                        'content' => "\\ebe9"
                    ),
                    array(
                        'class' => 'hi-plex',
                        'content' => "\\ebea"
                    ),
                    array(
                        'class' => 'hi-pluralsight',
                        'content' => "\\ebeb"
                    ),
                    array(
                        'class' => 'hi-pocketcasts',
                        'content' => "\\ebee"
                    ),
                    array(
                        'class' => 'hi-postgresql',
                        'content' => "\\ebef"
                    ),
                    array(
                        'class' => 'hi-postman',
                        'content' => "\\ebf0"
                    ),
                    array(
                        'class' => 'hi-postwoman',
                        'content' => "\\ebf1"
                    ),
                    array(
                        'class' => 'hi-prestashop',
                        'content' => "\\ebf3"
                    ),
                    array(
                        'class' => 'hi-prettier',
                        'content' => "\\ebf4"
                    ),
                    array(
                        'class' => 'hi-prometheus',
                        'content' => "\\ebf9"
                    ),
                    array(
                        'class' => 'hi-proto-dot-io',
                        'content' => "\\ebfa"
                    ),
                    array(
                        'class' => 'hi-proxmox',
                        'content' => "\\ebfc"
                    ),
                    array(
                        'class' => 'hi-publons',
                        'content' => "\\ebfd"
                    ),
                    array(
                        'class' => 'hi-purescript',
                        'content' => "\\ebfe"
                    ),
                    array(
                        'class' => 'hi-pypi',
                        'content' => "\\ebff"
                    ),
                    array(
                        'class' => 'hi-pytorch',
                        'content' => "\\ec01"
                    ),
                    array(
                        'class' => 'hi-pyup',
                        'content' => "\\ec02"
                    ),
                    array(
                        'class' => 'hi-qemu',
                        'content' => "\\ec03"
                    ),
                    array(
                        'class' => 'hi-qgis',
                        'content' => "\\ec04"
                    ),
                    array(
                        'class' => 'hi-qiita',
                        'content' => "\\ec05"
                    ),
                    array(
                        'class' => 'hi-qualcomm',
                        'content' => "\\ec06"
                    ),
                    array(
                        'class' => 'hi-quantcast',
                        'content' => "\\ec07"
                    ),
                    array(
                        'class' => 'hi-quantopian',
                        'content' => "\\ec08"
                    ),
                    array(
                        'class' => 'hi-quarkus',
                        'content' => "\\ec09"
                    ),
                    array(
                        'class' => 'hi-quicktime',
                        'content' => "\\ec0a"
                    ),
                    array(
                        'class' => 'hi-quip',
                        'content' => "\\ec0b"
                    ),
                    array(
                        'class' => 'hi-quora',
                        'content' => "\\ec0c"
                    ),
                    array(
                        'class' => 'hi-qwiklabs',
                        'content' => "\\ec0d"
                    ),
                    array(
                        'class' => 'hi-qzone',
                        'content' => "\\ec0e"
                    ),
                    array(
                        'class' => 'hi-r',
                        'content' => "\\ec0f"
                    ),
                    array(
                        'class' => 'hi-rabbitmq',
                        'content' => "\\ec10"
                    ),
                    array(
                        'class' => 'hi-radiopublic',
                        'content' => "\\ec11"
                    ),
                    array(
                        'class' => 'hi-rails',
                        'content' => "\\ec12"
                    ),
                    array(
                        'class' => 'hi-raspberrypi',
                        'content' => "\\ec13"
                    ),
                    array(
                        'class' => 'hi-react',
                        'content' => "\\ec14"
                    ),
                    array(
                        'class' => 'hi-reactos',
                        'content' => "\\ec15"
                    ),
                    array(
                        'class' => 'hi-reactrouter',
                        'content' => "\\ec16"
                    ),
                    array(
                        'class' => 'hi-readthedocs',
                        'content' => "\\ec17"
                    ),
                    array(
                        'class' => 'hi-realm',
                        'content' => "\\ec18"
                    ),
                    array(
                        'class' => 'hi-reasonstudios',
                        'content' => "\\ec1a"
                    ),
                    array(
                        'class' => 'hi-redis',
                        'content' => "\\ec1e"
                    ),
                    array(
                        'class' => 'hi-renren1',
                        'content' => "\\ec20"
                    ),
                    array(
                        'class' => 'hi-repl-dot-it',
                        'content' => "\\ec21"
                    ),
                    array(
                        'class' => 'hi-researchgate',
                        'content' => "\\ec22"
                    ),
                    array(
                        'class' => 'hi-reverbnation',
                        'content' => "\\ec23"
                    ),
                    array(
                        'class' => 'hi-ripple',
                        'content' => "\\ec25"
                    ),
                    array(
                        'class' => 'hi-riseup',
                        'content' => "\\ec26"
                    ),
                    array(
                        'class' => 'hi-rollup-dot-js',
                        'content' => "\\ec27"
                    ),
                    array(
                        'class' => 'hi-roots',
                        'content' => "\\ec28"
                    ),
                    array(
                        'class' => 'hi-roundcube',
                        'content' => "\\ec29"
                    ),
                    array(
                        'class' => 'hi-rstudio',
                        'content' => "\\ec2b"
                    ),
                    array(
                        'class' => 'hi-rubygems',
                        'content' => "\\ec2d"
                    ),
                    array(
                        'class' => 'hi-safari1',
                        'content' => "\\ec30"
                    ),
                    array(
                        'class' => 'hi-sahibinden',
                        'content' => "\\ec31"
                    ),
                    array(
                        'class' => 'hi-saltstack',
                        'content' => "\\ec33"
                    ),
                    array(
                        'class' => 'hi-sap',
                        'content' => "\\ec36"
                    ),
                    array(
                        'class' => 'hi-saucelabs',
                        'content' => "\\ec38"
                    ),
                    array(
                        'class' => 'hi-scala',
                        'content' => "\\ec39"
                    ),
                    array(
                        'class' => 'hi-scaleway',
                        'content' => "\\ec3a"
                    ),
                    array(
                        'class' => 'hi-scribd',
                        'content' => "\\ec3b"
                    ),
                    array(
                        'class' => 'hi-scrutinizerci',
                        'content' => "\\ec3c"
                    ),
                    array(
                        'class' => 'hi-seagate',
                        'content' => "\\ec3d"
                    ),
                    array(
                        'class' => 'hi-sellfy',
                        'content' => "\\ec3f"
                    ),
                    array(
                        'class' => 'hi-semaphoreci',
                        'content' => "\\ec40"
                    ),
                    array(
                        'class' => 'hi-sensu',
                        'content' => "\\ec41"
                    ),
                    array(
                        'class' => 'hi-sentry',
                        'content' => "\\ec42"
                    ),
                    array(
                        'class' => 'hi-serverfault',
                        'content' => "\\ec43"
                    ),
                    array(
                        'class' => 'hi-shell',
                        'content' => "\\ec45"
                    ),
                    array(
                        'class' => 'hi-showpad',
                        'content' => "\\ec47"
                    ),
                    array(
                        'class' => 'hi-siemens',
                        'content' => "\\ec48"
                    ),
                    array(
                        'class' => 'hi-signal',
                        'content' => "\\ec49"
                    ),
                    array(
                        'class' => 'hi-simpleicons',
                        'content' => "\\ec4a"
                    ),
                    array(
                        'class' => 'hi-sitepoint',
                        'content' => "\\ec4c"
                    ),
                    array(
                        'class' => 'hi-sketch',
                        'content' => "\\ec4d"
                    ),
                    array(
                        'class' => 'hi-skillshare',
                        'content' => "\\ec4e"
                    ),
                    array(
                        'class' => 'hi-slashdot',
                        'content' => "\\ec52"
                    ),
                    array(
                        'class' => 'hi-slickpic',
                        'content' => "\\ec53"
                    ),
                    array(
                        'class' => 'hi-slides',
                        'content' => "\\ec54"
                    ),
                    array(
                        'class' => 'hi-smashingmagazine',
                        'content' => "\\ec55"
                    ),
                    array(
                        'class' => 'hi-smugmug',
                        'content' => "\\ec56"
                    ),
                    array(
                        'class' => 'hi-snapchat',
                        'content' => "\\ec57"
                    ),
                    array(
                        'class' => 'hi-snapcraft',
                        'content' => "\\ec58"
                    ),
                    array(
                        'class' => 'hi-snyk',
                        'content' => "\\ec59"
                    ),
                    array(
                        'class' => 'hi-society6',
                        'content' => "\\ec5a"
                    ),
                    array(
                        'class' => 'hi-socket-dot-io',
                        'content' => "\\ec5b"
                    ),
                    array(
                        'class' => 'hi-sogou',
                        'content' => "\\ec5c"
                    ),
                    array(
                        'class' => 'hi-solus',
                        'content' => "\\ec5d"
                    ),
                    array(
                        'class' => 'hi-sonarcloud',
                        'content' => "\\ec5e"
                    ),
                    array(
                        'class' => 'hi-sonarlint',
                        'content' => "\\ec5f"
                    ),
                    array(
                        'class' => 'hi-sonarqube',
                        'content' => "\\ec60"
                    ),
                    array(
                        'class' => 'hi-sonarsource',
                        'content' => "\\ec61"
                    ),
                    array(
                        'class' => 'hi-songkick',
                        'content' => "\\ec62"
                    ),
                    array(
                        'class' => 'hi-sonicwall',
                        'content' => "\\ec63"
                    ),
                    array(
                        'class' => 'hi-sonos',
                        'content' => "\\ec64"
                    ),
                    array(
                        'class' => 'hi-sourceengine',
                        'content' => "\\ec66"
                    ),
                    array(
                        'class' => 'hi-sourcegraph',
                        'content' => "\\ec68"
                    ),
                    array(
                        'class' => 'hi-spacemacs',
                        'content' => "\\ec69"
                    ),
                    array(
                        'class' => 'hi-spacex',
                        'content' => "\\ec6a"
                    ),
                    array(
                        'class' => 'hi-sparkfun',
                        'content' => "\\ec6b"
                    ),
                    array(
                        'class' => 'hi-sparkpost',
                        'content' => "\\ec6c"
                    ),
                    array(
                        'class' => 'hi-spdx',
                        'content' => "\\ec6d"
                    ),
                    array(
                        'class' => 'hi-speakerdeck',
                        'content' => "\\ec6e"
                    ),
                    array(
                        'class' => 'hi-spectrum',
                        'content' => "\\ec6f"
                    ),
                    array(
                        'class' => 'hi-spotlight',
                        'content' => "\\ec71"
                    ),
                    array(
                        'class' => 'hi-spreaker',
                        'content' => "\\ec72"
                    ),
                    array(
                        'class' => 'hi-spring',
                        'content' => "\\ec73"
                    ),
                    array(
                        'class' => 'hi-sprint',
                        'content' => "\\ec74"
                    ),
                    array(
                        'class' => 'hi-square',
                        'content' => "\\ec75"
                    ),
                    array(
                        'class' => 'hi-squarespace',
                        'content' => "\\ec76"
                    ),
                    array(
                        'class' => 'hi-stackbit',
                        'content' => "\\ec77"
                    ),
                    array(
                        'class' => 'hi-stackexchange',
                        'content' => "\\ec78"
                    ),
                    array(
                        'class' => 'hi-stackpath',
                        'content' => "\\ec7a"
                    ),
                    array(
                        'class' => 'hi-stackshare',
                        'content' => "\\ec7b"
                    ),
                    array(
                        'class' => 'hi-stadia',
                        'content' => "\\ec7c"
                    ),
                    array(
                        'class' => 'hi-statuspage',
                        'content' => "\\ec7f"
                    ),
                    array(
                        'class' => 'hi-steam3',
                        'content' => "\\ec80"
                    ),
                    array(
                        'class' => 'hi-steamworks',
                        'content' => "\\ec81"
                    ),
                    array(
                        'class' => 'hi-steem',
                        'content' => "\\ec82"
                    ),
                    array(
                        'class' => 'hi-steinberg',
                        'content' => "\\ec84"
                    ),
                    array(
                        'class' => 'hi-stencyl',
                        'content' => "\\ec85"
                    ),
                    array(
                        'class' => 'hi-stitcher',
                        'content' => "\\ec86"
                    ),
                    array(
                        'class' => 'hi-storify',
                        'content' => "\\ec87"
                    ),
                    array(
                        'class' => 'hi-storybook',
                        'content' => "\\ec88"
                    ),
                    array(
                        'class' => 'hi-strapi',
                        'content' => "\\ec89"
                    ),
                    array(
                        'class' => 'hi-strava',
                        'content' => "\\ec8a"
                    ),
                    array(
                        'class' => 'hi-stripe',
                        'content' => "\\ec8b"
                    ),
                    array(
                        'class' => 'hi-strongswan',
                        'content' => "\\ec8c"
                    ),
                    array(
                        'class' => 'hi-stubhub',
                        'content' => "\\ec8d"
                    ),
                    array(
                        'class' => 'hi-styled-components',
                        'content' => "\\ec8e"
                    ),
                    array(
                        'class' => 'hi-styleshare',
                        'content' => "\\ec8f"
                    ),
                    array(
                        'class' => 'hi-sublimetext',
                        'content' => "\\ec91"
                    ),
                    array(
                        'class' => 'hi-subversion',
                        'content' => "\\ec92"
                    ),
                    array(
                        'class' => 'hi-svelte',
                        'content' => "\\ec94"
                    ),
                    array(
                        'class' => 'hi-svgo',
                        'content' => "\\ec96"
                    ),
                    array(
                        'class' => 'hi-swagger',
                        'content' => "\\ec97"
                    ),
                    array(
                        'class' => 'hi-symantec',
                        'content' => "\\ec9a"
                    ),
                    array(
                        'class' => 'hi-synology',
                        'content' => "\\ec9c"
                    ),
                    array(
                        'class' => 'hi-t-mobile',
                        'content' => "\\ec9d"
                    ),
                    array(
                        'class' => 'hi-tableau',
                        'content' => "\\ec9e"
                    ),
                    array(
                        'class' => 'hi-tails',
                        'content' => "\\ec9f"
                    ),
                    array(
                        'class' => 'hi-tailwindcss',
                        'content' => "\\eca0"
                    ),
                    array(
                        'class' => 'hi-tapas',
                        'content' => "\\eca1"
                    ),
                    array(
                        'class' => 'hi-telegram1',
                        'content' => "\\eca5"
                    ),
                    array(
                        'class' => 'hi-tencentweibo',
                        'content' => "\\eca7"
                    ),
                    array(
                        'class' => 'hi-tensorflow',
                        'content' => "\\eca8"
                    ),
                    array(
                        'class' => 'hi-teradata',
                        'content' => "\\eca9"
                    ),
                    array(
                        'class' => 'hi-terraform',
                        'content' => "\\ecaa"
                    ),
                    array(
                        'class' => 'hi-tesla',
                        'content' => "\\ecab"
                    ),
                    array(
                        'class' => 'hi-themighty',
                        'content' => "\\ecac"
                    ),
                    array(
                        'class' => 'hi-themoviedatabase',
                        'content' => "\\ecad"
                    ),
                    array(
                        'class' => 'hi-tidal',
                        'content' => "\\ecae"
                    ),
                    array(
                        'class' => 'hi-timescale',
                        'content' => "\\ecb0"
                    ),
                    array(
                        'class' => 'hi-tinder',
                        'content' => "\\ecb1"
                    ),
                    array(
                        'class' => 'hi-topcoder',
                        'content' => "\\ecb4"
                    ),
                    array(
                        'class' => 'hi-toptal',
                        'content' => "\\ecb5"
                    ),
                    array(
                        'class' => 'hi-toshiba',
                        'content' => "\\ecb7"
                    ),
                    array(
                        'class' => 'hi-trainerroad',
                        'content' => "\\ecb8"
                    ),
                    array(
                        'class' => 'hi-trakt',
                        'content' => "\\ecb9"
                    ),
                    array(
                        'class' => 'hi-travisci',
                        'content' => "\\ecba"
                    ),
                    array(
                        'class' => 'hi-trendmicro',
                        'content' => "\\ecbd"
                    ),
                    array(
                        'class' => 'hi-tripadvisor',
                        'content' => "\\ecbe"
                    ),
                    array(
                        'class' => 'hi-trulia',
                        'content' => "\\ecbf"
                    ),
                    array(
                        'class' => 'hi-trustpilot',
                        'content' => "\\ecc0"
                    ),
                    array(
                        'class' => 'hi-turkishairlines',
                        'content' => "\\ecc2"
                    ),
                    array(
                        'class' => 'hi-twoo',
                        'content' => "\\ecc6"
                    ),
                    array(
                        'class' => 'hi-uber-logo',
                        'content' => "\\ecc9"
                    ),
                    array(
                        'class' => 'hi-ubereats',
                        'content' => "\\ecca"
                    ),
                    array(
                        'class' => 'hi-ubisoft',
                        'content' => "\\eccb"
                    ),
                    array(
                        'class' => 'hi-ublockorigin',
                        'content' => "\\eccc"
                    ),
                    array(
                        'class' => 'hi-ubuntu1',
                        'content' => "\\eccd"
                    ),
                    array(
                        'class' => 'hi-uikit',
                        'content' => "\\ecd0"
                    ),
                    array(
                        'class' => 'hi-umbraco',
                        'content' => "\\ecd1"
                    ),
                    array(
                        'class' => 'hi-unrealengine',
                        'content' => "\\ecd3"
                    ),
                    array(
                        'class' => 'hi-unsplash',
                        'content' => "\\ecd4"
                    ),
                    array(
                        'class' => 'hi-untappd',
                        'content' => "\\ecd5"
                    ),
                    array(
                        'class' => 'hi-v',
                        'content' => "\\ecd7"
                    ),
                    array(
                        'class' => 'hi-v8',
                        'content' => "\\ecd8"
                    ),
                    array(
                        'class' => 'hi-vagrant',
                        'content' => "\\ecd9"
                    ),
                    array(
                        'class' => 'hi-valve',
                        'content' => "\\ecda"
                    ),
                    array(
                        'class' => 'hi-veeam',
                        'content' => "\\ecdb"
                    ),
                    array(
                        'class' => 'hi-venmo',
                        'content' => "\\ecdc"
                    ),
                    array(
                        'class' => 'hi-verizon',
                        'content' => "\\ecdd"
                    ),
                    array(
                        'class' => 'hi-viber',
                        'content' => "\\ecdf"
                    ),
                    array(
                        'class' => 'hi-virb',
                        'content' => "\\ece3"
                    ),
                    array(
                        'class' => 'hi-visualstudio',
                        'content' => "\\ece5"
                    ),
                    array(
                        'class' => 'hi-vodafone',
                        'content' => "\\ece9"
                    ),
                    array(
                        'class' => 'hi-volkswagen',
                        'content' => "\\ecea"
                    ),
                    array(
                        'class' => 'hi-vsco',
                        'content' => "\\eceb"
                    ),
                    array(
                        'class' => 'hi-vue-dot-js',
                        'content' => "\\ecec"
                    ),
                    array(
                        'class' => 'hi-w3c',
                        'content' => "\\eced"
                    ),
                    array(
                        'class' => 'hi-wattpad',
                        'content' => "\\ecee"
                    ),
                    array(
                        'class' => 'hi-waze',
                        'content' => "\\ecef"
                    ),
                    array(
                        'class' => 'hi-weasyl',
                        'content' => "\\ecf0"
                    ),
                    array(
                        'class' => 'hi-webauthn',
                        'content' => "\\ecf1"
                    ),
                    array(
                        'class' => 'hi-webcomponents-dot-org',
                        'content' => "\\ecf2"
                    ),
                    array(
                        'class' => 'hi-webmin',
                        'content' => "\\ecf3"
                    ),
                    array(
                        'class' => 'hi-webpack',
                        'content' => "\\ecf4"
                    ),
                    array(
                        'class' => 'hi-webstorm1',
                        'content' => "\\ecf5"
                    ),
                    array(
                        'class' => 'hi-whitesource',
                        'content' => "\\ecf9"
                    ),
                    array(
                        'class' => 'hi-wii',
                        'content' => "\\ecfa"
                    ),
                    array(
                        'class' => 'hi-wiiu',
                        'content' => "\\ecfb"
                    ),
                    array(
                        'class' => 'hi-wire',
                        'content' => "\\ecfe"
                    ),
                    array(
                        'class' => 'hi-wireguard',
                        'content' => "\\ecff"
                    ),
                    array(
                        'class' => 'hi-wish',
                        'content' => "\\ed00"
                    ),
                    array(
                        'class' => 'hi-wolfram',
                        'content' => "\\ed02"
                    ),
                    array(
                        'class' => 'hi-wolframlanguage',
                        'content' => "\\ed03"
                    ),
                    array(
                        'class' => 'hi-wolframmathematica',
                        'content' => "\\ed04"
                    ),
                    array(
                        'class' => 'hi-workplace',
                        'content' => "\\ed06"
                    ),
                    array(
                        'class' => 'hi-wpengine',
                        'content' => "\\ed07"
                    ),
                    array(
                        'class' => 'hi-write-dot-as',
                        'content' => "\\ed08"
                    ),
                    array(
                        'class' => 'hi-x-dot-org',
                        'content' => "\\ed09"
                    ),
                    array(
                        'class' => 'hi-x-pack',
                        'content' => "\\ed0a"
                    ),
                    array(
                        'class' => 'hi-xamarin',
                        'content' => "\\ed0b"
                    ),
                    array(
                        'class' => 'hi-xdadevelopers',
                        'content' => "\\ed0e"
                    ),
                    array(
                        'class' => 'hi-xero',
                        'content' => "\\ed0f"
                    ),
                    array(
                        'class' => 'hi-xfce',
                        'content' => "\\ed10"
                    ),
                    array(
                        'class' => 'hi-xiaomi',
                        'content' => "\\ed11"
                    ),
                    array(
                        'class' => 'hi-xmpp',
                        'content' => "\\ed13"
                    ),
                    array(
                        'class' => 'hi-xrp',
                        'content' => "\\ed14"
                    ),
                    array(
                        'class' => 'hi-xsplit',
                        'content' => "\\ed15"
                    ),
                    array(
                        'class' => 'hi-yahoo1',
                        'content' => "\\ed16"
                    ),
                    array(
                        'class' => 'hi-yamahacorporation',
                        'content' => "\\ed17"
                    ),
                    array(
                        'class' => 'hi-yamahamotorcorporation',
                        'content' => "\\ed18"
                    ),
                    array(
                        'class' => 'hi-zalando',
                        'content' => "\\ed1f"
                    ),
                    array(
                        'class' => 'hi-zapier',
                        'content' => "\\ed20"
                    ),
                    array(
                        'class' => 'hi-zeit',
                        'content' => "\\ed21"
                    ),
                    array(
                        'class' => 'hi-zend',
                        'content' => "\\ed22"
                    ),
                    array(
                        'class' => 'hi-zendframework',
                        'content' => "\\ed24"
                    ),
                    array(
                        'class' => 'hi-zeromq',
                        'content' => "\\ed25"
                    ),
                    array(
                        'class' => 'hi-zhihu',
                        'content' => "\\ed27"
                    ),
                    array(
                        'class' => 'hi-zingat',
                        'content' => "\\ed29"
                    ),
                    array(
                        'class' => 'hi-zoom',
                        'content' => "\\ed2a"
                    ),
                    array(
                        'class' => 'hi-zulip',
                        'content' => "\\ed2c"
                    ),
                    array(
                        'class' => 'hi-error',
                        'content' => "\\ed2d"
                    ),
                    array(
                        'class' => 'hi-error_outline',
                        'content' => "\\ed2e"
                    ),
                    array(
                        'class' => 'hi-warning2',
                        'content' => "\\ed2f"
                    ),
                    array(
                        'class' => 'hi-add_alert',
                        'content' => "\\ed30"
                    ),
                    array(
                        'class' => 'hi-notification_important',
                        'content' => "\\ed31"
                    ),
                    array(
                        'class' => 'hi-album',
                        'content' => "\\ed32"
                    ),
                    array(
                        'class' => 'hi-av_timer',
                        'content' => "\\ed33"
                    ),
                    array(
                        'class' => 'hi-closed_caption',
                        'content' => "\\ed34"
                    ),
                    array(
                        'class' => 'hi-equalizer1',
                        'content' => "\\ed35"
                    ),
                    array(
                        'class' => 'hi-explicit',
                        'content' => "\\ed36"
                    ),
                    array(
                        'class' => 'hi-fast_forward',
                        'content' => "\\ed37"
                    ),
                    array(
                        'class' => 'hi-fast_rewind',
                        'content' => "\\ed38"
                    ),
                    array(
                        'class' => 'hi-games',
                        'content' => "\\ed39"
                    ),
                    array(
                        'class' => 'hi-hearing',
                        'content' => "\\ed3a"
                    ),
                    array(
                        'class' => 'hi-high_quality',
                        'content' => "\\ed3b"
                    ),
                    array(
                        'class' => 'hi-loop3',
                        'content' => "\\ed3c"
                    ),
                    array(
                        'class' => 'hi-mic2',
                        'content' => "\\ed3d"
                    ),
                    array(
                        'class' => 'hi-mic_none',
                        'content' => "\\ed3e"
                    ),
                    array(
                        'class' => 'hi-mic_off',
                        'content' => "\\ed3f"
                    ),
                    array(
                        'class' => 'hi-movie',
                        'content' => "\\ed40"
                    ),
                    array(
                        'class' => 'hi-library_add',
                        'content' => "\\ed41"
                    ),
                    array(
                        'class' => 'hi-library_books',
                        'content' => "\\ed42"
                    ),
                    array(
                        'class' => 'hi-library_music',
                        'content' => "\\ed43"
                    ),
                    array(
                        'class' => 'hi-new_releases',
                        'content' => "\\ed44"
                    ),
                    array(
                        'class' => 'hi-not_interested',
                        'content' => "\\ed45"
                    ),
                    array(
                        'class' => 'hi-pause1',
                        'content' => "\\ed46"
                    ),
                    array(
                        'class' => 'hi-pause_circle_filled',
                        'content' => "\\ed47"
                    ),
                    array(
                        'class' => 'hi-pause_circle_outline',
                        'content' => "\\ed48"
                    ),
                    array(
                        'class' => 'hi-play_arrow',
                        'content' => "\\ed49"
                    ),
                    array(
                        'class' => 'hi-play_circle_filled',
                        'content' => "\\ed4a"
                    ),
                    array(
                        'class' => 'hi-play_circle_outline',
                        'content' => "\\ed4b"
                    ),
                    array(
                        'class' => 'hi-playlist_add',
                        'content' => "\\ed4c"
                    ),
                    array(
                        'class' => 'hi-queue_music',
                        'content' => "\\ed4d"
                    ),
                    array(
                        'class' => 'hi-radio',
                        'content' => "\\ed4e"
                    ),
                    array(
                        'class' => 'hi-recent_actors',
                        'content' => "\\ed4f"
                    ),
                    array(
                        'class' => 'hi-repeat',
                        'content' => "\\ed50"
                    ),
                    array(
                        'class' => 'hi-repeat_one',
                        'content' => "\\ed51"
                    ),
                    array(
                        'class' => 'hi-replay',
                        'content' => "\\ed52"
                    ),
                    array(
                        'class' => 'hi-shuffle1',
                        'content' => "\\ed53"
                    ),
                    array(
                        'class' => 'hi-skip_next',
                        'content' => "\\ed54"
                    ),
                    array(
                        'class' => 'hi-skip_previous',
                        'content' => "\\ed55"
                    ),
                    array(
                        'class' => 'hi-snooze',
                        'content' => "\\ed56"
                    ),
                    array(
                        'class' => 'hi-stop1',
                        'content' => "\\ed57"
                    ),
                    array(
                        'class' => 'hi-subtitles',
                        'content' => "\\ed58"
                    ),
                    array(
                        'class' => 'hi-surround_sound',
                        'content' => "\\ed59"
                    ),
                    array(
                        'class' => 'hi-video_library',
                        'content' => "\\ed5a"
                    ),
                    array(
                        'class' => 'hi-videocam',
                        'content' => "\\ed5b"
                    ),
                    array(
                        'class' => 'hi-videocam_off',
                        'content' => "\\ed5c"
                    ),
                    array(
                        'class' => 'hi-volume_down',
                        'content' => "\\ed5d"
                    ),
                    array(
                        'class' => 'hi-volume_mute',
                        'content' => "\\ed5e"
                    ),
                    array(
                        'class' => 'hi-volume_off',
                        'content' => "\\ed5f"
                    ),
                    array(
                        'class' => 'hi-volume_up',
                        'content' => "\\ed60"
                    ),
                    array(
                        'class' => 'hi-web',
                        'content' => "\\ed61"
                    ),
                    array(
                        'class' => 'hi-hd',
                        'content' => "\\ed62"
                    ),
                    array(
                        'class' => 'hi-sort_by_alpha',
                        'content' => "\\ed63"
                    ),
                    array(
                        'class' => 'hi-airplay',
                        'content' => "\\ed64"
                    ),
                    array(
                        'class' => 'hi-forward_10',
                        'content' => "\\ed65"
                    ),
                    array(
                        'class' => 'hi-forward_30',
                        'content' => "\\ed66"
                    ),
                    array(
                        'class' => 'hi-forward_5',
                        'content' => "\\ed67"
                    ),
                    array(
                        'class' => 'hi-replay_10',
                        'content' => "\\ed68"
                    ),
                    array(
                        'class' => 'hi-replay_30',
                        'content' => "\\ed69"
                    ),
                    array(
                        'class' => 'hi-replay_5',
                        'content' => "\\ed6a"
                    ),
                    array(
                        'class' => 'hi-add_to_queue',
                        'content' => "\\ed6b"
                    ),
                    array(
                        'class' => 'hi-fiber_dvr',
                        'content' => "\\ed6c"
                    ),
                    array(
                        'class' => 'hi-fiber_new',
                        'content' => "\\ed6d"
                    ),
                    array(
                        'class' => 'hi-playlist_play',
                        'content' => "\\ed6e"
                    ),
                    array(
                        'class' => 'hi-art_track',
                        'content' => "\\ed6f"
                    ),
                    array(
                        'class' => 'hi-fiber_manual_record',
                        'content' => "\\ed70"
                    ),
                    array(
                        'class' => 'hi-fiber_smart_record',
                        'content' => "\\ed71"
                    ),
                    array(
                        'class' => 'hi-music_video',
                        'content' => "\\ed72"
                    ),
                    array(
                        'class' => 'hi-subscriptions',
                        'content' => "\\ed73"
                    ),
                    array(
                        'class' => 'hi-playlist_add_check',
                        'content' => "\\ed74"
                    ),
                    array(
                        'class' => 'hi-queue_play_next',
                        'content' => "\\ed75"
                    ),
                    array(
                        'class' => 'hi-remove_from_queue',
                        'content' => "\\ed76"
                    ),
                    array(
                        'class' => 'hi-slow_motion_video',
                        'content' => "\\ed77"
                    ),
                    array(
                        'class' => 'hi-web_asset',
                        'content' => "\\ed78"
                    ),
                    array(
                        'class' => 'hi-fiber_pin',
                        'content' => "\\ed79"
                    ),
                    array(
                        'class' => 'hi-branding_watermark',
                        'content' => "\\ed7a"
                    ),
                    array(
                        'class' => 'hi-call_to_action',
                        'content' => "\\ed7b"
                    ),
                    array(
                        'class' => 'hi-featured_play_list',
                        'content' => "\\ed7c"
                    ),
                    array(
                        'class' => 'hi-featured_video',
                        'content' => "\\ed7d"
                    ),
                    array(
                        'class' => 'hi-note',
                        'content' => "\\ed7e"
                    ),
                    array(
                        'class' => 'hi-video_call',
                        'content' => "\\ed7f"
                    ),
                    array(
                        'class' => 'hi-video_label',
                        'content' => "\\ed80"
                    ),
                    array(
                        'class' => 'hi-4k',
                        'content' => "\\ed81"
                    ),
                    array(
                        'class' => 'hi-missed_video_call',
                        'content' => "\\ed82"
                    ),
                    array(
                        'class' => 'hi-control_camera',
                        'content' => "\\ed83"
                    ),
                    array(
                        'class' => 'hi-business',
                        'content' => "\\ed84"
                    ),
                    array(
                        'class' => 'hi-call',
                        'content' => "\\ed85"
                    ),
                    array(
                        'class' => 'hi-call_end',
                        'content' => "\\ed86"
                    ),
                    array(
                        'class' => 'hi-call_made',
                        'content' => "\\ed87"
                    ),
                    array(
                        'class' => 'hi-call_merge',
                        'content' => "\\ed88"
                    ),
                    array(
                        'class' => 'hi-call_missed',
                        'content' => "\\ed89"
                    ),
                    array(
                        'class' => 'hi-call_received',
                        'content' => "\\ed8a"
                    ),
                    array(
                        'class' => 'hi-call_split',
                        'content' => "\\ed8b"
                    ),
                    array(
                        'class' => 'hi-chat1',
                        'content' => "\\ed8c"
                    ),
                    array(
                        'class' => 'hi-clear_all',
                        'content' => "\\ed8d"
                    ),
                    array(
                        'class' => 'hi-comment',
                        'content' => "\\ed8e"
                    ),
                    array(
                        'class' => 'hi-contacts',
                        'content' => "\\ed8f"
                    ),
                    array(
                        'class' => 'hi-dialer_sip',
                        'content' => "\\ed90"
                    ),
                    array(
                        'class' => 'hi-dialpad',
                        'content' => "\\ed91"
                    ),
                    array(
                        'class' => 'hi-email',
                        'content' => "\\ed92"
                    ),
                    array(
                        'class' => 'hi-forum',
                        'content' => "\\ed93"
                    ),
                    array(
                        'class' => 'hi-import_export',
                        'content' => "\\ed94"
                    ),
                    array(
                        'class' => 'hi-invert_colors_off',
                        'content' => "\\ed95"
                    ),
                    array(
                        'class' => 'hi-live_help',
                        'content' => "\\ed96"
                    ),
                    array(
                        'class' => 'hi-location_off',
                        'content' => "\\ed97"
                    ),
                    array(
                        'class' => 'hi-location_on',
                        'content' => "\\ed98"
                    ),
                    array(
                        'class' => 'hi-message1',
                        'content' => "\\ed99"
                    ),
                    array(
                        'class' => 'hi-chat_bubble',
                        'content' => "\\ed9a"
                    ),
                    array(
                        'class' => 'hi-chat_bubble_outline',
                        'content' => "\\ed9b"
                    ),
                    array(
                        'class' => 'hi-no_sim',
                        'content' => "\\ed9c"
                    ),
                    array(
                        'class' => 'hi-phone2',
                        'content' => "\\ed9d"
                    ),
                    array(
                        'class' => 'hi-portable_wifi_off',
                        'content' => "\\ed9e"
                    ),
                    array(
                        'class' => 'hi-contact_phone',
                        'content' => "\\ed9f"
                    ),
                    array(
                        'class' => 'hi-contact_mail',
                        'content' => "\\eda0"
                    ),
                    array(
                        'class' => 'hi-ring_volume',
                        'content' => "\\eda1"
                    ),
                    array(
                        'class' => 'hi-speaker_phone',
                        'content' => "\\eda2"
                    ),
                    array(
                        'class' => 'hi-stay_current_landscape',
                        'content' => "\\eda3"
                    ),
                    array(
                        'class' => 'hi-stay_current_portrait',
                        'content' => "\\eda4"
                    ),
                    array(
                        'class' => 'hi-swap_calls',
                        'content' => "\\eda5"
                    ),
                    array(
                        'class' => 'hi-textsms',
                        'content' => "\\eda6"
                    ),
                    array(
                        'class' => 'hi-voicemail',
                        'content' => "\\eda7"
                    ),
                    array(
                        'class' => 'hi-vpn_key',
                        'content' => "\\eda8"
                    ),
                    array(
                        'class' => 'hi-phonelink_erase',
                        'content' => "\\eda9"
                    ),
                    array(
                        'class' => 'hi-phonelink_lock',
                        'content' => "\\edaa"
                    ),
                    array(
                        'class' => 'hi-phonelink_ring',
                        'content' => "\\edab"
                    ),
                    array(
                        'class' => 'hi-phonelink_setup',
                        'content' => "\\edac"
                    ),
                    array(
                        'class' => 'hi-present_to_all',
                        'content' => "\\edad"
                    ),
                    array(
                        'class' => 'hi-import_contacts',
                        'content' => "\\edae"
                    ),
                    array(
                        'class' => 'hi-mail_outline',
                        'content' => "\\edaf"
                    ),
                    array(
                        'class' => 'hi-screen_share',
                        'content' => "\\edb0"
                    ),
                    array(
                        'class' => 'hi-stop_screen_share',
                        'content' => "\\edb1"
                    ),
                    array(
                        'class' => 'hi-call_missed_outgoing',
                        'content' => "\\edb2"
                    ),
                    array(
                        'class' => 'hi-alternate_email',
                        'content' => "\\edb4"
                    ),
                    array(
                        'class' => 'hi-mobile_screen_share',
                        'content' => "\\edb5"
                    ),
                    array(
                        'class' => 'hi-add_call',
                        'content' => "\\edb6"
                    ),
                    array(
                        'class' => 'hi-cancel_presentation',
                        'content' => "\\edb7"
                    ),
                    array(
                        'class' => 'hi-pause_presentation',
                        'content' => "\\edb8"
                    ),
                    array(
                        'class' => 'hi-unsubscribe',
                        'content' => "\\edb9"
                    ),
                    array(
                        'class' => 'hi-cell_wifi',
                        'content' => "\\edba"
                    ),
                    array(
                        'class' => 'hi-sentiment_satisfied_alt',
                        'content' => "\\edbb"
                    ),
                    array(
                        'class' => 'hi-list_alt',
                        'content' => "\\edbc"
                    ),
                    array(
                        'class' => 'hi-domain_disabled',
                        'content' => "\\edbd"
                    ),
                    array(
                        'class' => 'hi-lightbulb',
                        'content' => "\\edbe"
                    ),
                    array(
                        'class' => 'hi-add',
                        'content' => "\\edbf"
                    ),
                    array(
                        'class' => 'hi-add_box',
                        'content' => "\\edc0"
                    ),
                    array(
                        'class' => 'hi-add_circle',
                        'content' => "\\edc1"
                    ),
                    array(
                        'class' => 'hi-add_circle_outline',
                        'content' => "\\edc2"
                    ),
                    array(
                        'class' => 'hi-archive-box',
                        'content' => "\\edc3"
                    ),
                    array(
                        'class' => 'hi-backspace',
                        'content' => "\\edc4"
                    ),
                    array(
                        'class' => 'hi-clear',
                        'content' => "\\edc6"
                    ),
                    array(
                        'class' => 'hi-content_copy',
                        'content' => "\\edc7"
                    ),
                    array(
                        'class' => 'hi-content_cut',
                        'content' => "\\edc8"
                    ),
                    array(
                        'class' => 'hi-content_paste',
                        'content' => "\\edc9"
                    ),
                    array(
                        'class' => 'hi-create',
                        'content' => "\\edca"
                    ),
                    array(
                        'class' => 'hi-drafts',
                        'content' => "\\edcb"
                    ),
                    array(
                        'class' => 'hi-filter_list',
                        'content' => "\\edcc"
                    ),
                    array(
                        'class' => 'hi-flag2',
                        'content' => "\\edcd"
                    ),
                    array(
                        'class' => 'hi-forward1',
                        'content' => "\\edce"
                    ),
                    array(
                        'class' => 'hi-gesture',
                        'content' => "\\edcf"
                    ),
                    array(
                        'class' => 'hi-inbox',
                        'content' => "\\edd0"
                    ),
                    array(
                        'class' => 'hi-link2',
                        'content' => "\\edd1"
                    ),
                    array(
                        'class' => 'hi-redo3',
                        'content' => "\\edd2"
                    ),
                    array(
                        'class' => 'hi-remove',
                        'content' => "\\edd3"
                    ),
                    array(
                        'class' => 'hi-remove_circle',
                        'content' => "\\edd4"
                    ),
                    array(
                        'class' => 'hi-remove_circle_outline',
                        'content' => "\\edd5"
                    ),
                    array(
                        'class' => 'hi-reply2',
                        'content' => "\\edd6"
                    ),
                    array(
                        'class' => 'hi-reply_all',
                        'content' => "\\edd7"
                    ),
                    array(
                        'class' => 'hi-report',
                        'content' => "\\edd8"
                    ),
                    array(
                        'class' => 'hi-save',
                        'content' => "\\edd9"
                    ),
                    array(
                        'class' => 'hi-select_all',
                        'content' => "\\edda"
                    ),
                    array(
                        'class' => 'hi-send',
                        'content' => "\\eddb"
                    ),
                    array(
                        'class' => 'hi-sort',
                        'content' => "\\eddc"
                    ),
                    array(
                        'class' => 'hi-text_format',
                        'content' => "\\eddd"
                    ),
                    array(
                        'class' => 'hi-undo3',
                        'content' => "\\edde"
                    ),
                    array(
                        'class' => 'hi-font_download',
                        'content' => "\\eddf"
                    ),
                    array(
                        'class' => 'hi-move_to_inbox',
                        'content' => "\\ede0"
                    ),
                    array(
                        'class' => 'hi-unarchive',
                        'content' => "\\ede1"
                    ),
                    array(
                        'class' => 'hi-next_week',
                        'content' => "\\ede2"
                    ),
                    array(
                        'class' => 'hi-weekend',
                        'content' => "\\ede3"
                    ),
                    array(
                        'class' => 'hi-delete_sweep',
                        'content' => "\\ede4"
                    ),
                    array(
                        'class' => 'hi-low_priority',
                        'content' => "\\ede5"
                    ),
                    array(
                        'class' => 'hi-outlined_flag',
                        'content' => "\\ede6"
                    ),
                    array(
                        'class' => 'hi-link_off',
                        'content' => "\\ede7"
                    ),
                    array(
                        'class' => 'hi-report_off',
                        'content' => "\\ede8"
                    ),
                    array(
                        'class' => 'hi-save_alt',
                        'content' => "\\ede9"
                    ),
                    array(
                        'class' => 'hi-ballot',
                        'content' => "\\edea"
                    ),
                    array(
                        'class' => 'hi-file_copy',
                        'content' => "\\edeb"
                    ),
                    array(
                        'class' => 'hi-how_to_reg',
                        'content' => "\\edec"
                    ),
                    array(
                        'class' => 'hi-how_to_vote',
                        'content' => "\\eded"
                    ),
                    array(
                        'class' => 'hi-waves',
                        'content' => "\\edee"
                    ),
                    array(
                        'class' => 'hi-where_to_vote',
                        'content' => "\\edef"
                    ),
                    array(
                        'class' => 'hi-add_link',
                        'content' => "\\edf0"
                    ),
                    array(
                        'class' => 'hi-inventory',
                        'content' => "\\edf1"
                    ),
                    array(
                        'class' => 'hi-access_alarm',
                        'content' => "\\edf2"
                    ),
                    array(
                        'class' => 'hi-access_time',
                        'content' => "\\edf4"
                    ),
                    array(
                        'class' => 'hi-add_alarm',
                        'content' => "\\edf5"
                    ),
                    array(
                        'class' => 'hi-airplanemode_off',
                        'content' => "\\edf6"
                    ),
                    array(
                        'class' => 'hi-airplanemode_on',
                        'content' => "\\edf7"
                    ),
                    array(
                        'class' => 'hi-battery_alert',
                        'content' => "\\edf8"
                    ),
                    array(
                        'class' => 'hi-battery_charging_full',
                        'content' => "\\edf9"
                    ),
                    array(
                        'class' => 'hi-battery_full',
                        'content' => "\\edfa"
                    ),
                    array(
                        'class' => 'hi-battery_unknown',
                        'content' => "\\edfb"
                    ),
                    array(
                        'class' => 'hi-bluetooth',
                        'content' => "\\edfc"
                    ),
                    array(
                        'class' => 'hi-bluetooth_connected',
                        'content' => "\\edfd"
                    ),
                    array(
                        'class' => 'hi-bluetooth_disabled',
                        'content' => "\\edfe"
                    ),
                    array(
                        'class' => 'hi-bluetooth_searching',
                        'content' => "\\edff"
                    ),
                    array(
                        'class' => 'hi-brightness_auto',
                        'content' => "\\ee00"
                    ),
                    array(
                        'class' => 'hi-brightness_high',
                        'content' => "\\ee01"
                    ),
                    array(
                        'class' => 'hi-brightness_low',
                        'content' => "\\ee02"
                    ),
                    array(
                        'class' => 'hi-brightness_medium',
                        'content' => "\\ee03"
                    ),
                    array(
                        'class' => 'hi-data_usage',
                        'content' => "\\ee04"
                    ),
                    array(
                        'class' => 'hi-developer_mode',
                        'content' => "\\ee05"
                    ),
                    array(
                        'class' => 'hi-devices',
                        'content' => "\\ee06"
                    ),
                    array(
                        'class' => 'hi-dvr',
                        'content' => "\\ee07"
                    ),
                    array(
                        'class' => 'hi-gps_fixed',
                        'content' => "\\ee08"
                    ),
                    array(
                        'class' => 'hi-gps_not_fixed',
                        'content' => "\\ee09"
                    ),
                    array(
                        'class' => 'hi-gps_off',
                        'content' => "\\ee0a"
                    ),
                    array(
                        'class' => 'hi-graphic_eq',
                        'content' => "\\ee0b"
                    ),
                    array(
                        'class' => 'hi-network_cell',
                        'content' => "\\ee0c"
                    ),
                    array(
                        'class' => 'hi-network_wifi',
                        'content' => "\\ee0d"
                    ),
                    array(
                        'class' => 'hi-nfc',
                        'content' => "\\ee0e"
                    ),
                    array(
                        'class' => 'hi-now_wallpaper',
                        'content' => "\\ee0f"
                    ),
                    array(
                        'class' => 'hi-now_widgets',
                        'content' => "\\ee10"
                    ),
                    array(
                        'class' => 'hi-screen_lock_landscape',
                        'content' => "\\ee11"
                    ),
                    array(
                        'class' => 'hi-screen_lock_portrait',
                        'content' => "\\ee12"
                    ),
                    array(
                        'class' => 'hi-screen_lock_rotation',
                        'content' => "\\ee13"
                    ),
                    array(
                        'class' => 'hi-screen_rotation',
                        'content' => "\\ee14"
                    ),
                    array(
                        'class' => 'hi-sd_storage',
                        'content' => "\\ee15"
                    ),
                    array(
                        'class' => 'hi-settings_system_daydream',
                        'content' => "\\ee16"
                    ),
                    array(
                        'class' => 'hi-signal_cellular_4_bar',
                        'content' => "\\ee17"
                    ),
                    array(
                        'class' => 'hi-signal_cellular_connected_no_internet_4_bar',
                        'content' => "\\ee18"
                    ),
                    array(
                        'class' => 'hi-signal_cellular_null',
                        'content' => "\\ee19"
                    ),
                    array(
                        'class' => 'hi-signal_cellular_off',
                        'content' => "\\ee1a"
                    ),
                    array(
                        'class' => 'hi-signal_wifi_4_bar',
                        'content' => "\\ee1b"
                    ),
                    array(
                        'class' => 'hi-signal_wifi_4_bar_lock',
                        'content' => "\\ee1c"
                    ),
                    array(
                        'class' => 'hi-signal_wifi_off',
                        'content' => "\\ee1d"
                    ),
                    array(
                        'class' => 'hi-storage',
                        'content' => "\\ee1e"
                    ),
                    array(
                        'class' => 'hi-usb',
                        'content' => "\\ee1f"
                    ),
                    array(
                        'class' => 'hi-wifi_lock',
                        'content' => "\\ee20"
                    ),
                    array(
                        'class' => 'hi-wifi_tethering',
                        'content' => "\\ee21"
                    ),
                    array(
                        'class' => 'hi-add_to_home_screen',
                        'content' => "\\ee22"
                    ),
                    array(
                        'class' => 'hi-device_thermostat',
                        'content' => "\\ee23"
                    ),
                    array(
                        'class' => 'hi-mobile_friendly',
                        'content' => "\\ee24"
                    ),
                    array(
                        'class' => 'hi-mobile_off',
                        'content' => "\\ee25"
                    ),
                    array(
                        'class' => 'hi-signal_cellular_alt',
                        'content' => "\\ee26"
                    ),
                    array(
                        'class' => 'hi-attach_file',
                        'content' => "\\ee27"
                    ),
                    array(
                        'class' => 'hi-attach_money',
                        'content' => "\\ee28"
                    ),
                    array(
                        'class' => 'hi-border_all',
                        'content' => "\\ee29"
                    ),
                    array(
                        'class' => 'hi-border_bottom',
                        'content' => "\\ee2a"
                    ),
                    array(
                        'class' => 'hi-border_clear',
                        'content' => "\\ee2b"
                    ),
                    array(
                        'class' => 'hi-border_color',
                        'content' => "\\ee2c"
                    ),
                    array(
                        'class' => 'hi-border_horizontal',
                        'content' => "\\ee2d"
                    ),
                    array(
                        'class' => 'hi-border_inner',
                        'content' => "\\ee2e"
                    ),
                    array(
                        'class' => 'hi-border_left',
                        'content' => "\\ee2f"
                    ),
                    array(
                        'class' => 'hi-border_outer',
                        'content' => "\\ee30"
                    ),
                    array(
                        'class' => 'hi-border_right',
                        'content' => "\\ee31"
                    ),
                    array(
                        'class' => 'hi-border_style',
                        'content' => "\\ee32"
                    ),
                    array(
                        'class' => 'hi-border_top',
                        'content' => "\\ee33"
                    ),
                    array(
                        'class' => 'hi-border_vertical',
                        'content' => "\\ee34"
                    ),
                    array(
                        'class' => 'hi-format_align_center',
                        'content' => "\\ee35"
                    ),
                    array(
                        'class' => 'hi-format_align_justify',
                        'content' => "\\ee36"
                    ),
                    array(
                        'class' => 'hi-format_align_left',
                        'content' => "\\ee37"
                    ),
                    array(
                        'class' => 'hi-format_align_right',
                        'content' => "\\ee38"
                    ),
                    array(
                        'class' => 'hi-format_bold',
                        'content' => "\\ee39"
                    ),
                    array(
                        'class' => 'hi-format_clear',
                        'content' => "\\ee3a"
                    ),
                    array(
                        'class' => 'hi-format_color_fill',
                        'content' => "\\ee3b"
                    ),
                    array(
                        'class' => 'hi-format_color_reset',
                        'content' => "\\ee3c"
                    ),
                    array(
                        'class' => 'hi-format_color_text',
                        'content' => "\\ee3d"
                    ),
                    array(
                        'class' => 'hi-format_indent_decrease',
                        'content' => "\\ee3e"
                    ),
                    array(
                        'class' => 'hi-format_indent_increase',
                        'content' => "\\ee3f"
                    ),
                    array(
                        'class' => 'hi-format_italic',
                        'content' => "\\ee40"
                    ),
                    array(
                        'class' => 'hi-format_line_spacing',
                        'content' => "\\ee41"
                    ),
                    array(
                        'class' => 'hi-format_list_bulleted',
                        'content' => "\\ee42"
                    ),
                    array(
                        'class' => 'hi-format_list_numbered',
                        'content' => "\\ee43"
                    ),
                    array(
                        'class' => 'hi-format_paint',
                        'content' => "\\ee44"
                    ),
                    array(
                        'class' => 'hi-format_quote',
                        'content' => "\\ee45"
                    ),
                    array(
                        'class' => 'hi-format_size',
                        'content' => "\\ee46"
                    ),
                    array(
                        'class' => 'hi-format_strikethrough',
                        'content' => "\\ee47"
                    ),
                    array(
                        'class' => 'hi-format_textdirection_l_to_r',
                        'content' => "\\ee48"
                    ),
                    array(
                        'class' => 'hi-format_textdirection_r_to_l',
                        'content' => "\\ee49"
                    ),
                    array(
                        'class' => 'hi-format_underlined',
                        'content' => "\\ee4a"
                    ),
                    array(
                        'class' => 'hi-functions',
                        'content' => "\\ee4b"
                    ),
                    array(
                        'class' => 'hi-insert_chart',
                        'content' => "\\ee4c"
                    ),
                    array(
                        'class' => 'hi-insert_comment',
                        'content' => "\\ee4d"
                    ),
                    array(
                        'class' => 'hi-insert_drive_file',
                        'content' => "\\ee4e"
                    ),
                    array(
                        'class' => 'hi-insert_emoticon',
                        'content' => "\\ee4f"
                    ),
                    array(
                        'class' => 'hi-insert_invitation',
                        'content' => "\\ee50"
                    ),
                    array(
                        'class' => 'hi-insert_photo',
                        'content' => "\\ee51"
                    ),
                    array(
                        'class' => 'hi-mode_comment',
                        'content' => "\\ee52"
                    ),
                    array(
                        'class' => 'hi-publish',
                        'content' => "\\ee53"
                    ),
                    array(
                        'class' => 'hi-space_bar',
                        'content' => "\\ee54"
                    ),
                    array(
                        'class' => 'hi-vertical_align_bottom',
                        'content' => "\\ee56"
                    ),
                    array(
                        'class' => 'hi-vertical_align_center',
                        'content' => "\\ee57"
                    ),
                    array(
                        'class' => 'hi-vertical_align_top',
                        'content' => "\\ee58"
                    ),
                    array(
                        'class' => 'hi-wrap_text',
                        'content' => "\\ee59"
                    ),
                    array(
                        'class' => 'hi-money_off',
                        'content' => "\\ee5a"
                    ),
                    array(
                        'class' => 'hi-drag_handle',
                        'content' => "\\ee5b"
                    ),
                    array(
                        'class' => 'hi-format_shapes',
                        'content' => "\\ee5c"
                    ),
                    array(
                        'class' => 'hi-highlight',
                        'content' => "\\ee5d"
                    ),
                    array(
                        'class' => 'hi-linear_scale',
                        'content' => "\\ee5e"
                    ),
                    array(
                        'class' => 'hi-short_text',
                        'content' => "\\ee5f"
                    ),
                    array(
                        'class' => 'hi-text_fields',
                        'content' => "\\ee60"
                    ),
                    array(
                        'class' => 'hi-monetization_on',
                        'content' => "\\ee61"
                    ),
                    array(
                        'class' => 'hi-title',
                        'content' => "\\ee62"
                    ),
                    array(
                        'class' => 'hi-table_chart',
                        'content' => "\\ee63"
                    ),
                    array(
                        'class' => 'hi-add_comment',
                        'content' => "\\ee64"
                    ),
                    array(
                        'class' => 'hi-format_list_numbered_rtl',
                        'content' => "\\ee65"
                    ),
                    array(
                        'class' => 'hi-scatter_plot',
                        'content' => "\\ee66"
                    ),
                    array(
                        'class' => 'hi-score',
                        'content' => "\\ee67"
                    ),
                    array(
                        'class' => 'hi-insert_chart_outlined',
                        'content' => "\\ee68"
                    ),
                    array(
                        'class' => 'hi-bar_chart',
                        'content' => "\\ee69"
                    ),
                    array(
                        'class' => 'hi-notes',
                        'content' => "\\ee6a"
                    ),
                    array(
                        'class' => 'hi-attachment2',
                        'content' => "\\ee6b"
                    ),
                    array(
                        'class' => 'hi-cloud1',
                        'content' => "\\ee6c"
                    ),
                    array(
                        'class' => 'hi-cloud_circle',
                        'content' => "\\ee6d"
                    ),
                    array(
                        'class' => 'hi-cloud_done',
                        'content' => "\\ee6e"
                    ),
                    array(
                        'class' => 'hi-cloud_download',
                        'content' => "\\ee6f"
                    ),
                    array(
                        'class' => 'hi-cloud_off',
                        'content' => "\\ee70"
                    ),
                    array(
                        'class' => 'hi-cloud_queue',
                        'content' => "\\ee71"
                    ),
                    array(
                        'class' => 'hi-cloud_upload',
                        'content' => "\\ee72"
                    ),
                    array(
                        'class' => 'hi-file_download',
                        'content' => "\\ee73"
                    ),
                    array(
                        'class' => 'hi-file_upload',
                        'content' => "\\ee74"
                    ),
                    array(
                        'class' => 'hi-folder2',
                        'content' => "\\ee75"
                    ),
                    array(
                        'class' => 'hi-folder_open',
                        'content' => "\\ee76"
                    ),
                    array(
                        'class' => 'hi-folder_shared',
                        'content' => "\\ee77"
                    ),
                    array(
                        'class' => 'hi-create_new_folder',
                        'content' => "\\ee78"
                    ),
                    array(
                        'class' => 'hi-cast',
                        'content' => "\\ee79"
                    ),
                    array(
                        'class' => 'hi-cast_connected',
                        'content' => "\\ee7a"
                    ),
                    array(
                        'class' => 'hi-computer',
                        'content' => "\\ee7b"
                    ),
                    array(
                        'class' => 'hi-desktop_mac',
                        'content' => "\\ee7c"
                    ),
                    array(
                        'class' => 'hi-desktop_windows',
                        'content' => "\\ee7d"
                    ),
                    array(
                        'class' => 'hi-developer_board',
                        'content' => "\\ee7e"
                    ),
                    array(
                        'class' => 'hi-dock',
                        'content' => "\\ee7f"
                    ),
                    array(
                        'class' => 'hi-headset',
                        'content' => "\\ee80"
                    ),
                    array(
                        'class' => 'hi-headset_mic',
                        'content' => "\\ee81"
                    ),
                    array(
                        'class' => 'hi-keyboard1',
                        'content' => "\\ee82"
                    ),
                    array(
                        'class' => 'hi-keyboard_arrow_down',
                        'content' => "\\ee83"
                    ),
                    array(
                        'class' => 'hi-keyboard_arrow_left',
                        'content' => "\\ee84"
                    ),
                    array(
                        'class' => 'hi-keyboard_arrow_right',
                        'content' => "\\ee85"
                    ),
                    array(
                        'class' => 'hi-keyboard_arrow_up',
                        'content' => "\\ee86"
                    ),
                    array(
                        'class' => 'hi-keyboard_backspace',
                        'content' => "\\ee87"
                    ),
                    array(
                        'class' => 'hi-keyboard_capslock',
                        'content' => "\\ee88"
                    ),
                    array(
                        'class' => 'hi-keyboard_hide',
                        'content' => "\\ee89"
                    ),
                    array(
                        'class' => 'hi-keyboard_return',
                        'content' => "\\ee8a"
                    ),
                    array(
                        'class' => 'hi-keyboard_tab',
                        'content' => "\\ee8b"
                    ),
                    array(
                        'class' => 'hi-keyboard_voice',
                        'content' => "\\ee8c"
                    ),
                    array(
                        'class' => 'hi-laptop_chromebook',
                        'content' => "\\ee8d"
                    ),
                    array(
                        'class' => 'hi-laptop_mac',
                        'content' => "\\ee8e"
                    ),
                    array(
                        'class' => 'hi-laptop_windows',
                        'content' => "\\ee8f"
                    ),
                    array(
                        'class' => 'hi-memory',
                        'content' => "\\ee90"
                    ),
                    array(
                        'class' => 'hi-mouse',
                        'content' => "\\ee91"
                    ),
                    array(
                        'class' => 'hi-phone_android',
                        'content' => "\\ee92"
                    ),
                    array(
                        'class' => 'hi-phone_iphone',
                        'content' => "\\ee93"
                    ),
                    array(
                        'class' => 'hi-phonelink_off',
                        'content' => "\\ee94"
                    ),
                    array(
                        'class' => 'hi-router',
                        'content' => "\\ee95"
                    ),
                    array(
                        'class' => 'hi-scanner',
                        'content' => "\\ee96"
                    ),
                    array(
                        'class' => 'hi-security',
                        'content' => "\\ee97"
                    ),
                    array(
                        'class' => 'hi-speaker1',
                        'content' => "\\ee99"
                    ),
                    array(
                        'class' => 'hi-speaker_group',
                        'content' => "\\ee9a"
                    ),
                    array(
                        'class' => 'hi-tablet1',
                        'content' => "\\ee9b"
                    ),
                    array(
                        'class' => 'hi-tablet_android',
                        'content' => "\\ee9c"
                    ),
                    array(
                        'class' => 'hi-tablet_mac',
                        'content' => "\\ee9d"
                    ),
                    array(
                        'class' => 'hi-toys',
                        'content' => "\\ee9e"
                    ),
                    array(
                        'class' => 'hi-tv1',
                        'content' => "\\ee9f"
                    ),
                    array(
                        'class' => 'hi-watch',
                        'content' => "\\eea0"
                    ),
                    array(
                        'class' => 'hi-device_hub',
                        'content' => "\\eea1"
                    ),
                    array(
                        'class' => 'hi-power_input',
                        'content' => "\\eea2"
                    ),
                    array(
                        'class' => 'hi-devices_other',
                        'content' => "\\eea3"
                    ),
                    array(
                        'class' => 'hi-videogame_asset',
                        'content' => "\\eea4"
                    ),
                    array(
                        'class' => 'hi-device_unknown',
                        'content' => "\\eea5"
                    ),
                    array(
                        'class' => 'hi-headset_off',
                        'content' => "\\eea6"
                    ),
                    array(
                        'class' => 'hi-adjust',
                        'content' => "\\eea7"
                    ),
                    array(
                        'class' => 'hi-assistant',
                        'content' => "\\eea8"
                    ),
                    array(
                        'class' => 'hi-audiotrack',
                        'content' => "\\eea9"
                    ),
                    array(
                        'class' => 'hi-blur_circular',
                        'content' => "\\eeaa"
                    ),
                    array(
                        'class' => 'hi-blur_linear',
                        'content' => "\\eeab"
                    ),
                    array(
                        'class' => 'hi-blur_off',
                        'content' => "\\eeac"
                    ),
                    array(
                        'class' => 'hi-blur_on',
                        'content' => "\\eead"
                    ),
                    array(
                        'class' => 'hi-brightness_1',
                        'content' => "\\eeae"
                    ),
                    array(
                        'class' => 'hi-brightness_2',
                        'content' => "\\eeaf"
                    ),
                    array(
                        'class' => 'hi-brightness_3',
                        'content' => "\\eeb0"
                    ),
                    array(
                        'class' => 'hi-brightness_4',
                        'content' => "\\eeb1"
                    ),
                    array(
                        'class' => 'hi-broken_image',
                        'content' => "\\eeb2"
                    ),
                    array(
                        'class' => 'hi-brush',
                        'content' => "\\eeb3"
                    ),
                    array(
                        'class' => 'hi-camera2',
                        'content' => "\\eeb4"
                    ),
                    array(
                        'class' => 'hi-camera_alt',
                        'content' => "\\eeb5"
                    ),
                    array(
                        'class' => 'hi-camera_front',
                        'content' => "\\eeb6"
                    ),
                    array(
                        'class' => 'hi-camera_rear',
                        'content' => "\\eeb7"
                    ),
                    array(
                        'class' => 'hi-camera_roll',
                        'content' => "\\eeb8"
                    ),
                    array(
                        'class' => 'hi-center_focus_strong',
                        'content' => "\\eeb9"
                    ),
                    array(
                        'class' => 'hi-center_focus_weak',
                        'content' => "\\eeba"
                    ),
                    array(
                        'class' => 'hi-collections',
                        'content' => "\\eebb"
                    ),
                    array(
                        'class' => 'hi-color_lens',
                        'content' => "\\eebc"
                    ),
                    array(
                        'class' => 'hi-colorize',
                        'content' => "\\eebd"
                    ),
                    array(
                        'class' => 'hi-compare',
                        'content' => "\\eebe"
                    ),
                    array(
                        'class' => 'hi-control_point_duplicate',
                        'content' => "\\eebf"
                    ),
                    array(
                        'class' => 'hi-crop_16_9',
                        'content' => "\\eec0"
                    ),
                    array(
                        'class' => 'hi-crop_3_2',
                        'content' => "\\eec1"
                    ),
                    array(
                        'class' => 'hi-crop1',
                        'content' => "\\eec2"
                    ),
                    array(
                        'class' => 'hi-crop_5_4',
                        'content' => "\\eec3"
                    ),
                    array(
                        'class' => 'hi-crop_7_5',
                        'content' => "\\eec4"
                    ),
                    array(
                        'class' => 'hi-crop_din',
                        'content' => "\\eec5"
                    ),
                    array(
                        'class' => 'hi-crop_free',
                        'content' => "\\eec6"
                    ),
                    array(
                        'class' => 'hi-crop_original',
                        'content' => "\\eec7"
                    ),
                    array(
                        'class' => 'hi-crop_portrait',
                        'content' => "\\eec8"
                    ),
                    array(
                        'class' => 'hi-crop_square',
                        'content' => "\\eec9"
                    ),
                    array(
                        'class' => 'hi-dehaze',
                        'content' => "\\eeca"
                    ),
                    array(
                        'class' => 'hi-details',
                        'content' => "\\eecb"
                    ),
                    array(
                        'class' => 'hi-exposure',
                        'content' => "\\eecc"
                    ),
                    array(
                        'class' => 'hi-exposure_neg_1',
                        'content' => "\\eecd"
                    ),
                    array(
                        'class' => 'hi-exposure_neg_2',
                        'content' => "\\eece"
                    ),
                    array(
                        'class' => 'hi-exposure_plus_1',
                        'content' => "\\eecf"
                    ),
                    array(
                        'class' => 'hi-exposure_plus_2',
                        'content' => "\\eed0"
                    ),
                    array(
                        'class' => 'hi-exposure_zero',
                        'content' => "\\eed1"
                    ),
                    array(
                        'class' => 'hi-filter_1',
                        'content' => "\\eed2"
                    ),
                    array(
                        'class' => 'hi-filter_2',
                        'content' => "\\eed3"
                    ),
                    array(
                        'class' => 'hi-filter_3',
                        'content' => "\\eed4"
                    ),
                    array(
                        'class' => 'hi-filter1',
                        'content' => "\\eed5"
                    ),
                    array(
                        'class' => 'hi-filter_4',
                        'content' => "\\eed6"
                    ),
                    array(
                        'class' => 'hi-filter_5',
                        'content' => "\\eed7"
                    ),
                    array(
                        'class' => 'hi-filter_6',
                        'content' => "\\eed8"
                    ),
                    array(
                        'class' => 'hi-filter_7',
                        'content' => "\\eed9"
                    ),
                    array(
                        'class' => 'hi-filter_8',
                        'content' => "\\eeda"
                    ),
                    array(
                        'class' => 'hi-filter_9',
                        'content' => "\\eedb"
                    ),
                    array(
                        'class' => 'hi-filter_9_plus',
                        'content' => "\\eedc"
                    ),
                    array(
                        'class' => 'hi-filter_b_and_w',
                        'content' => "\\eedd"
                    ),
                    array(
                        'class' => 'hi-filter_center_focus',
                        'content' => "\\eede"
                    ),
                    array(
                        'class' => 'hi-filter_drama',
                        'content' => "\\eedf"
                    ),
                    array(
                        'class' => 'hi-filter_frames',
                        'content' => "\\eee0"
                    ),
                    array(
                        'class' => 'hi-filter_hdr',
                        'content' => "\\eee1"
                    ),
                    array(
                        'class' => 'hi-filter_none',
                        'content' => "\\eee2"
                    ),
                    array(
                        'class' => 'hi-filter_tilt_shift',
                        'content' => "\\eee3"
                    ),
                    array(
                        'class' => 'hi-filter_vintage',
                        'content' => "\\eee4"
                    ),
                    array(
                        'class' => 'hi-flare',
                        'content' => "\\eee5"
                    ),
                    array(
                        'class' => 'hi-flash_auto',
                        'content' => "\\eee6"
                    ),
                    array(
                        'class' => 'hi-flash_off',
                        'content' => "\\eee7"
                    ),
                    array(
                        'class' => 'hi-flash_on',
                        'content' => "\\eee8"
                    ),
                    array(
                        'class' => 'hi-flip',
                        'content' => "\\eee9"
                    ),
                    array(
                        'class' => 'hi-gradient',
                        'content' => "\\eeea"
                    ),
                    array(
                        'class' => 'hi-grain',
                        'content' => "\\eeeb"
                    ),
                    array(
                        'class' => 'hi-grid_off',
                        'content' => "\\eeec"
                    ),
                    array(
                        'class' => 'hi-grid_on',
                        'content' => "\\eeed"
                    ),
                    array(
                        'class' => 'hi-hdr_off',
                        'content' => "\\eeee"
                    ),
                    array(
                        'class' => 'hi-hdr_on',
                        'content' => "\\eeef"
                    ),
                    array(
                        'class' => 'hi-hdr_strong',
                        'content' => "\\eef0"
                    ),
                    array(
                        'class' => 'hi-hdr_weak',
                        'content' => "\\eef1"
                    ),
                    array(
                        'class' => 'hi-healing',
                        'content' => "\\eef2"
                    ),
                    array(
                        'class' => 'hi-image_aspect_ratio',
                        'content' => "\\eef3"
                    ),
                    array(
                        'class' => 'hi-iso',
                        'content' => "\\eef4"
                    ),
                    array(
                        'class' => 'hi-leak_add',
                        'content' => "\\eef5"
                    ),
                    array(
                        'class' => 'hi-leak_remove',
                        'content' => "\\eef6"
                    ),
                    array(
                        'class' => 'hi-lens',
                        'content' => "\\eef7"
                    ),
                    array(
                        'class' => 'hi-looks_3',
                        'content' => "\\eef8"
                    ),
                    array(
                        'class' => 'hi-looks',
                        'content' => "\\eef9"
                    ),
                    array(
                        'class' => 'hi-looks_4',
                        'content' => "\\eefa"
                    ),
                    array(
                        'class' => 'hi-looks_5',
                        'content' => "\\eefb"
                    ),
                    array(
                        'class' => 'hi-looks_6',
                        'content' => "\\eefc"
                    ),
                    array(
                        'class' => 'hi-looks_one',
                        'content' => "\\eefd"
                    ),
                    array(
                        'class' => 'hi-looks_two',
                        'content' => "\\eefe"
                    ),
                    array(
                        'class' => 'hi-loupe',
                        'content' => "\\eeff"
                    ),
                    array(
                        'class' => 'hi-monochrome_photos',
                        'content' => "\\ef00"
                    ),
                    array(
                        'class' => 'hi-music_note',
                        'content' => "\\ef01"
                    ),
                    array(
                        'class' => 'hi-nature',
                        'content' => "\\ef02"
                    ),
                    array(
                        'class' => 'hi-nature_people',
                        'content' => "\\ef03"
                    ),
                    array(
                        'class' => 'hi-navigate_before',
                        'content' => "\\ef04"
                    ),
                    array(
                        'class' => 'hi-navigate_next',
                        'content' => "\\ef05"
                    ),
                    array(
                        'class' => 'hi-panorama',
                        'content' => "\\ef06"
                    ),
                    array(
                        'class' => 'hi-panorama_fisheye',
                        'content' => "\\ef07"
                    ),
                    array(
                        'class' => 'hi-panorama_horizontal',
                        'content' => "\\ef08"
                    ),
                    array(
                        'class' => 'hi-panorama_vertical',
                        'content' => "\\ef09"
                    ),
                    array(
                        'class' => 'hi-panorama_wide_angle',
                        'content' => "\\ef0a"
                    ),
                    array(
                        'class' => 'hi-photo_album',
                        'content' => "\\ef0b"
                    ),
                    array(
                        'class' => 'hi-picture_as_pdf',
                        'content' => "\\ef0c"
                    ),
                    array(
                        'class' => 'hi-portrait',
                        'content' => "\\ef0d"
                    ),
                    array(
                        'class' => 'hi-remove_red_eye',
                        'content' => "\\ef0e"
                    ),
                    array(
                        'class' => 'hi-rotate_90_degrees_ccw',
                        'content' => "\\ef0f"
                    ),
                    array(
                        'class' => 'hi-rotate_left',
                        'content' => "\\ef10"
                    ),
                    array(
                        'class' => 'hi-rotate_right',
                        'content' => "\\ef11"
                    ),
                    array(
                        'class' => 'hi-slideshow',
                        'content' => "\\ef12"
                    ),
                    array(
                        'class' => 'hi-straighten',
                        'content' => "\\ef13"
                    ),
                    array(
                        'class' => 'hi-style',
                        'content' => "\\ef14"
                    ),
                    array(
                        'class' => 'hi-switch_camera',
                        'content' => "\\ef15"
                    ),
                    array(
                        'class' => 'hi-switch_video',
                        'content' => "\\ef16"
                    ),
                    array(
                        'class' => 'hi-texture',
                        'content' => "\\ef17"
                    ),
                    array(
                        'class' => 'hi-timelapse',
                        'content' => "\\ef18"
                    ),
                    array(
                        'class' => 'hi-timer_10',
                        'content' => "\\ef19"
                    ),
                    array(
                        'class' => 'hi-timer_3',
                        'content' => "\\ef1a"
                    ),
                    array(
                        'class' => 'hi-timer',
                        'content' => "\\ef1b"
                    ),
                    array(
                        'class' => 'hi-timer_off',
                        'content' => "\\ef1c"
                    ),
                    array(
                        'class' => 'hi-tonality',
                        'content' => "\\ef1d"
                    ),
                    array(
                        'class' => 'hi-transform',
                        'content' => "\\ef1e"
                    ),
                    array(
                        'class' => 'hi-tune',
                        'content' => "\\ef1f"
                    ),
                    array(
                        'class' => 'hi-view_comfy',
                        'content' => "\\ef20"
                    ),
                    array(
                        'class' => 'hi-view_compact',
                        'content' => "\\ef21"
                    ),
                    array(
                        'class' => 'hi-wb_auto',
                        'content' => "\\ef22"
                    ),
                    array(
                        'class' => 'hi-wb_cloudy',
                        'content' => "\\ef23"
                    ),
                    array(
                        'class' => 'hi-wb_incandescent',
                        'content' => "\\ef24"
                    ),
                    array(
                        'class' => 'hi-wb_sunny',
                        'content' => "\\ef25"
                    ),
                    array(
                        'class' => 'hi-collections_bookmark',
                        'content' => "\\ef26"
                    ),
                    array(
                        'class' => 'hi-photo_size_select_actual',
                        'content' => "\\ef27"
                    ),
                    array(
                        'class' => 'hi-photo_size_select_large',
                        'content' => "\\ef28"
                    ),
                    array(
                        'class' => 'hi-photo_size_select_small',
                        'content' => "\\ef29"
                    ),
                    array(
                        'class' => 'hi-vignette',
                        'content' => "\\ef2a"
                    ),
                    array(
                        'class' => 'hi-wb_iridescent',
                        'content' => "\\ef2b"
                    ),
                    array(
                        'class' => 'hi-crop_rotate',
                        'content' => "\\ef2c"
                    ),
                    array(
                        'class' => 'hi-linked_camera',
                        'content' => "\\ef2d"
                    ),
                    array(
                        'class' => 'hi-add_a_photo',
                        'content' => "\\ef2e"
                    ),
                    array(
                        'class' => 'hi-movie_filter',
                        'content' => "\\ef2f"
                    ),
                    array(
                        'class' => 'hi-photo_filter',
                        'content' => "\\ef30"
                    ),
                    array(
                        'class' => 'hi-burst_mode',
                        'content' => "\\ef31"
                    ),
                    array(
                        'class' => 'hi-shutter_speed',
                        'content' => "\\ef32"
                    ),
                    array(
                        'class' => 'hi-add_photo_alternate',
                        'content' => "\\ef33"
                    ),
                    array(
                        'class' => 'hi-image_search',
                        'content' => "\\ef34"
                    ),
                    array(
                        'class' => 'hi-music_off',
                        'content' => "\\ef35"
                    ),
                    array(
                        'class' => 'hi-beenhere',
                        'content' => "\\ef36"
                    ),
                    array(
                        'class' => 'hi-directions',
                        'content' => "\\ef37"
                    ),
                    array(
                        'class' => 'hi-directions_bike',
                        'content' => "\\ef38"
                    ),
                    array(
                        'class' => 'hi-directions_bus',
                        'content' => "\\ef39"
                    ),
                    array(
                        'class' => 'hi-directions_car',
                        'content' => "\\ef3a"
                    ),
                    array(
                        'class' => 'hi-directions_ferry',
                        'content' => "\\ef3b"
                    ),
                    array(
                        'class' => 'hi-directions_subway',
                        'content' => "\\ef3c"
                    ),
                    array(
                        'class' => 'hi-directions_train',
                        'content' => "\\ef3d"
                    ),
                    array(
                        'class' => 'hi-directions_walk',
                        'content' => "\\ef3e"
                    ),
                    array(
                        'class' => 'hi-hotel',
                        'content' => "\\ef3f"
                    ),
                    array(
                        'class' => 'hi-layers',
                        'content' => "\\ef40"
                    ),
                    array(
                        'class' => 'hi-layers_clear',
                        'content' => "\\ef41"
                    ),
                    array(
                        'class' => 'hi-local_atm',
                        'content' => "\\ef42"
                    ),
                    array(
                        'class' => 'hi-local_attraction',
                        'content' => "\\ef43"
                    ),
                    array(
                        'class' => 'hi-local_bar',
                        'content' => "\\ef44"
                    ),
                    array(
                        'class' => 'hi-local_cafe',
                        'content' => "\\ef45"
                    ),
                    array(
                        'class' => 'hi-local_car_wash',
                        'content' => "\\ef46"
                    ),
                    array(
                        'class' => 'hi-local_convenience_store',
                        'content' => "\\ef47"
                    ),
                    array(
                        'class' => 'hi-local_drink',
                        'content' => "\\ef48"
                    ),
                    array(
                        'class' => 'hi-local_florist',
                        'content' => "\\ef49"
                    ),
                    array(
                        'class' => 'hi-local_gas_station',
                        'content' => "\\ef4a"
                    ),
                    array(
                        'class' => 'hi-local_grocery_store',
                        'content' => "\\ef4b"
                    ),
                    array(
                        'class' => 'hi-local_hospital',
                        'content' => "\\ef4c"
                    ),
                    array(
                        'class' => 'hi-local_laundry_service',
                        'content' => "\\ef4d"
                    ),
                    array(
                        'class' => 'hi-local_library',
                        'content' => "\\ef4e"
                    ),
                    array(
                        'class' => 'hi-local_mall',
                        'content' => "\\ef4f"
                    ),
                    array(
                        'class' => 'hi-local_movies',
                        'content' => "\\ef50"
                    ),
                    array(
                        'class' => 'hi-local_offer',
                        'content' => "\\ef51"
                    ),
                    array(
                        'class' => 'hi-local_parking',
                        'content' => "\\ef52"
                    ),
                    array(
                        'class' => 'hi-local_pharmacy',
                        'content' => "\\ef53"
                    ),
                    array(
                        'class' => 'hi-local_pizza',
                        'content' => "\\ef54"
                    ),
                    array(
                        'class' => 'hi-local_printshop',
                        'content' => "\\ef55"
                    ),
                    array(
                        'class' => 'hi-local_restaurant',
                        'content' => "\\ef56"
                    ),
                    array(
                        'class' => 'hi-local_shipping',
                        'content' => "\\ef57"
                    ),
                    array(
                        'class' => 'hi-local_taxi',
                        'content' => "\\ef58"
                    ),
                    array(
                        'class' => 'hi-location_history',
                        'content' => "\\ef59"
                    ),
                    array(
                        'class' => 'hi-map3',
                        'content' => "\\ef5a"
                    ),
                    array(
                        'class' => 'hi-navigation',
                        'content' => "\\ef5b"
                    ),
                    array(
                        'class' => 'hi-pin_drop',
                        'content' => "\\ef5c"
                    ),
                    array(
                        'class' => 'hi-rate_review',
                        'content' => "\\ef5d"
                    ),
                    array(
                        'class' => 'hi-satellite',
                        'content' => "\\ef5e"
                    ),
                    array(
                        'class' => 'hi-store_mall_directory',
                        'content' => "\\ef5f"
                    ),
                    array(
                        'class' => 'hi-traffic',
                        'content' => "\\ef60"
                    ),
                    array(
                        'class' => 'hi-directions_run',
                        'content' => "\\ef61"
                    ),
                    array(
                        'class' => 'hi-add_location',
                        'content' => "\\ef62"
                    ),
                    array(
                        'class' => 'hi-edit_location',
                        'content' => "\\ef63"
                    ),
                    array(
                        'class' => 'hi-near_me',
                        'content' => "\\ef64"
                    ),
                    array(
                        'class' => 'hi-person_pin_circle',
                        'content' => "\\ef65"
                    ),
                    array(
                        'class' => 'hi-zoom_out_map',
                        'content' => "\\ef66"
                    ),
                    array(
                        'class' => 'hi-restaurant',
                        'content' => "\\ef67"
                    ),
                    array(
                        'class' => 'hi-ev_station',
                        'content' => "\\ef68"
                    ),
                    array(
                        'class' => 'hi-streetview',
                        'content' => "\\ef69"
                    ),
                    array(
                        'class' => 'hi-subway',
                        'content' => "\\ef6a"
                    ),
                    array(
                        'class' => 'hi-train',
                        'content' => "\\ef6b"
                    ),
                    array(
                        'class' => 'hi-tram',
                        'content' => "\\ef6c"
                    ),
                    array(
                        'class' => 'hi-transfer_within_a_station',
                        'content' => "\\ef6d"
                    ),
                    array(
                        'class' => 'hi-atm',
                        'content' => "\\ef6e"
                    ),
                    array(
                        'class' => 'hi-category',
                        'content' => "\\ef6f"
                    ),
                    array(
                        'class' => 'hi-not_listed_location',
                        'content' => "\\ef70"
                    ),
                    array(
                        'class' => 'hi-departure_board',
                        'content' => "\\ef71"
                    ),
                    array(
                        'class' => 'hi-360',
                        'content' => "\\ef72"
                    ),
                    array(
                        'class' => 'hi-edit_attributes',
                        'content' => "\\ef73"
                    ),
                    array(
                        'class' => 'hi-transit_enterexit',
                        'content' => "\\ef74"
                    ),
                    array(
                        'class' => 'hi-fastfood',
                        'content' => "\\ef75"
                    ),
                    array(
                        'class' => 'hi-trip_origin',
                        'content' => "\\ef76"
                    ),
                    array(
                        'class' => 'hi-compass_calibration',
                        'content' => "\\ef77"
                    ),
                    array(
                        'class' => 'hi-money',
                        'content' => "\\ef78"
                    ),
                    array(
                        'class' => 'hi-apps',
                        'content' => "\\ef79"
                    ),
                    array(
                        'class' => 'hi-arrow_back',
                        'content' => "\\ef7a"
                    ),
                    array(
                        'class' => 'hi-arrow_drop_down',
                        'content' => "\\ef7b"
                    ),
                    array(
                        'class' => 'hi-arrow_drop_down_circle',
                        'content' => "\\ef7c"
                    ),
                    array(
                        'class' => 'hi-arrow_drop_up',
                        'content' => "\\ef7d"
                    ),
                    array(
                        'class' => 'hi-arrow_forward',
                        'content' => "\\ef7e"
                    ),
                    array(
                        'class' => 'hi-cancel',
                        'content' => "\\ef7f"
                    ),
                    array(
                        'class' => 'hi-check2',
                        'content' => "\\ef80"
                    ),
                    array(
                        'class' => 'hi-expand_less',
                        'content' => "\\ef81"
                    ),
                    array(
                        'class' => 'hi-expand_more',
                        'content' => "\\ef82"
                    ),
                    array(
                        'class' => 'hi-fullscreen',
                        'content' => "\\ef83"
                    ),
                    array(
                        'class' => 'hi-fullscreen_exit',
                        'content' => "\\ef84"
                    ),
                    array(
                        'class' => 'hi-menu5',
                        'content' => "\\ef85"
                    ),
                    array(
                        'class' => 'hi-keyboard_control',
                        'content' => "\\ef86"
                    ),
                    array(
                        'class' => 'hi-more_vert',
                        'content' => "\\ef87"
                    ),
                    array(
                        'class' => 'hi-refresh1',
                        'content' => "\\ef88"
                    ),
                    array(
                        'class' => 'hi-unfold_less',
                        'content' => "\\ef89"
                    ),
                    array(
                        'class' => 'hi-unfold_more',
                        'content' => "\\ef8a"
                    ),
                    array(
                        'class' => 'hi-arrow_upward',
                        'content' => "\\ef8b"
                    ),
                    array(
                        'class' => 'hi-subdirectory_arrow_left',
                        'content' => "\\ef8c"
                    ),
                    array(
                        'class' => 'hi-subdirectory_arrow_right',
                        'content' => "\\ef8d"
                    ),
                    array(
                        'class' => 'hi-arrow_downward',
                        'content' => "\\ef8e"
                    ),
                    array(
                        'class' => 'hi-first_page',
                        'content' => "\\ef8f"
                    ),
                    array(
                        'class' => 'hi-last_page',
                        'content' => "\\ef90"
                    ),
                    array(
                        'class' => 'hi-arrow_left',
                        'content' => "\\ef91"
                    ),
                    array(
                        'class' => 'hi-arrow_right',
                        'content' => "\\ef92"
                    ),
                    array(
                        'class' => 'hi-arrow_back_ios',
                        'content' => "\\ef93"
                    ),
                    array(
                        'class' => 'hi-arrow_forward_ios',
                        'content' => "\\ef94"
                    ),
                    array(
                        'class' => 'hi-adb',
                        'content' => "\\ef95"
                    ),
                    array(
                        'class' => 'hi-disc_full',
                        'content' => "\\ef96"
                    ),
                    array(
                        'class' => 'hi-do_not_disturb_alt',
                        'content' => "\\ef97"
                    ),
                    array(
                        'class' => 'hi-drive_eta',
                        'content' => "\\ef98"
                    ),
                    array(
                        'class' => 'hi-event_available',
                        'content' => "\\ef99"
                    ),
                    array(
                        'class' => 'hi-event_busy',
                        'content' => "\\ef9a"
                    ),
                    array(
                        'class' => 'hi-event_note',
                        'content' => "\\ef9b"
                    ),
                    array(
                        'class' => 'hi-folder_special',
                        'content' => "\\ef9c"
                    ),
                    array(
                        'class' => 'hi-mms',
                        'content' => "\\ef9d"
                    ),
                    array(
                        'class' => 'hi-more1',
                        'content' => "\\ef9e"
                    ),
                    array(
                        'class' => 'hi-network_locked',
                        'content' => "\\ef9f"
                    ),
                    array(
                        'class' => 'hi-phone_bluetooth_speaker',
                        'content' => "\\efa0"
                    ),
                    array(
                        'class' => 'hi-phone_forwarded',
                        'content' => "\\efa1"
                    ),
                    array(
                        'class' => 'hi-phone_in_talk',
                        'content' => "\\efa2"
                    ),
                    array(
                        'class' => 'hi-phone_locked',
                        'content' => "\\efa3"
                    ),
                    array(
                        'class' => 'hi-phone_missed',
                        'content' => "\\efa4"
                    ),
                    array(
                        'class' => 'hi-phone_paused',
                        'content' => "\\efa5"
                    ),
                    array(
                        'class' => 'hi-sim_card_alert',
                        'content' => "\\efa6"
                    ),
                    array(
                        'class' => 'hi-sms_failed',
                        'content' => "\\efa7"
                    ),
                    array(
                        'class' => 'hi-sync_disabled',
                        'content' => "\\efa8"
                    ),
                    array(
                        'class' => 'hi-sync_problem',
                        'content' => "\\efa9"
                    ),
                    array(
                        'class' => 'hi-system_update',
                        'content' => "\\efaa"
                    ),
                    array(
                        'class' => 'hi-tap_and_play',
                        'content' => "\\efab"
                    ),
                    array(
                        'class' => 'hi-vibration',
                        'content' => "\\efac"
                    ),
                    array(
                        'class' => 'hi-voice_chat',
                        'content' => "\\efad"
                    ),
                    array(
                        'class' => 'hi-vpn_lock',
                        'content' => "\\efae"
                    ),
                    array(
                        'class' => 'hi-airline_seat_flat',
                        'content' => "\\efaf"
                    ),
                    array(
                        'class' => 'hi-airline_seat_flat_angled',
                        'content' => "\\efb0"
                    ),
                    array(
                        'class' => 'hi-airline_seat_individual_suite',
                        'content' => "\\efb1"
                    ),
                    array(
                        'class' => 'hi-airline_seat_legroom_extra',
                        'content' => "\\efb2"
                    ),
                    array(
                        'class' => 'hi-airline_seat_legroom_normal',
                        'content' => "\\efb3"
                    ),
                    array(
                        'class' => 'hi-airline_seat_legroom_reduced',
                        'content' => "\\efb4"
                    ),
                    array(
                        'class' => 'hi-airline_seat_recline_extra',
                        'content' => "\\efb5"
                    ),
                    array(
                        'class' => 'hi-airline_seat_recline_normal',
                        'content' => "\\efb6"
                    ),
                    array(
                        'class' => 'hi-confirmation_number',
                        'content' => "\\efb7"
                    ),
                    array(
                        'class' => 'hi-live_tv',
                        'content' => "\\efb8"
                    ),
                    array(
                        'class' => 'hi-ondemand_video',
                        'content' => "\\efb9"
                    ),
                    array(
                        'class' => 'hi-personal_video',
                        'content' => "\\efba"
                    ),
                    array(
                        'class' => 'hi-power2',
                        'content' => "\\efbb"
                    ),
                    array(
                        'class' => 'hi-wc',
                        'content' => "\\efbc"
                    ),
                    array(
                        'class' => 'hi-wifi',
                        'content' => "\\efbd"
                    ),
                    array(
                        'class' => 'hi-enhanced_encryption',
                        'content' => "\\efbe"
                    ),
                    array(
                        'class' => 'hi-network_check',
                        'content' => "\\efbf"
                    ),
                    array(
                        'class' => 'hi-no_encryption',
                        'content' => "\\efc0"
                    ),
                    array(
                        'class' => 'hi-rv_hookup',
                        'content' => "\\efc1"
                    ),
                    array(
                        'class' => 'hi-do_not_disturb_off',
                        'content' => "\\efc2"
                    ),
                    array(
                        'class' => 'hi-priority_high',
                        'content' => "\\efc3"
                    ),
                    array(
                        'class' => 'hi-power_off',
                        'content' => "\\efc4"
                    ),
                    array(
                        'class' => 'hi-tv_off',
                        'content' => "\\efc5"
                    ),
                    array(
                        'class' => 'hi-wifi_off',
                        'content' => "\\efc6"
                    ),
                    array(
                        'class' => 'hi-phone_callback',
                        'content' => "\\efc7"
                    ),
                    array(
                        'class' => 'hi-pie_chart',
                        'content' => "\\efc8"
                    ),
                    array(
                        'class' => 'hi-pie_chart_outlined',
                        'content' => "\\efc9"
                    ),
                    array(
                        'class' => 'hi-bubble_chart',
                        'content' => "\\efca"
                    ),
                    array(
                        'class' => 'hi-multiline_chart',
                        'content' => "\\efcb"
                    ),
                    array(
                        'class' => 'hi-show_chart',
                        'content' => "\\efcc"
                    ),
                    array(
                        'class' => 'hi-cake',
                        'content' => "\\efcd"
                    ),
                    array(
                        'class' => 'hi-group',
                        'content' => "\\efce"
                    ),
                    array(
                        'class' => 'hi-group_add',
                        'content' => "\\efcf"
                    ),
                    array(
                        'class' => 'hi-location_city',
                        'content' => "\\efd0"
                    ),
                    array(
                        'class' => 'hi-mood_bad',
                        'content' => "\\efd1"
                    ),
                    array(
                        'class' => 'hi-notifications',
                        'content' => "\\efd2"
                    ),
                    array(
                        'class' => 'hi-notifications_none',
                        'content' => "\\efd3"
                    ),
                    array(
                        'class' => 'hi-notifications_off',
                        'content' => "\\efd4"
                    ),
                    array(
                        'class' => 'hi-notifications_on',
                        'content' => "\\efd5"
                    ),
                    array(
                        'class' => 'hi-notifications_paused',
                        'content' => "\\efd6"
                    ),
                    array(
                        'class' => 'hi-pages',
                        'content' => "\\efd7"
                    ),
                    array(
                        'class' => 'hi-party_mode',
                        'content' => "\\efd8"
                    ),
                    array(
                        'class' => 'hi-people_outline',
                        'content' => "\\efd9"
                    ),
                    array(
                        'class' => 'hi-person',
                        'content' => "\\efda"
                    ),
                    array(
                        'class' => 'hi-person_add',
                        'content' => "\\efdb"
                    ),
                    array(
                        'class' => 'hi-person_outline',
                        'content' => "\\efdc"
                    ),
                    array(
                        'class' => 'hi-plus_one',
                        'content' => "\\efdd"
                    ),
                    array(
                        'class' => 'hi-public',
                        'content' => "\\efde"
                    ),
                    array(
                        'class' => 'hi-school',
                        'content' => "\\efdf"
                    ),
                    array(
                        'class' => 'hi-whatshot',
                        'content' => "\\efe1"
                    ),
                    array(
                        'class' => 'hi-sentiment_dissatisfied',
                        'content' => "\\efe2"
                    ),
                    array(
                        'class' => 'hi-sentiment_neutral',
                        'content' => "\\efe3"
                    ),
                    array(
                        'class' => 'hi-sentiment_satisfied',
                        'content' => "\\efe4"
                    ),
                    array(
                        'class' => 'hi-sentiment_very_dissatisfied',
                        'content' => "\\efe5"
                    ),
                    array(
                        'class' => 'hi-sentiment_very_satisfied',
                        'content' => "\\efe6"
                    ),
                    array(
                        'class' => 'hi-thumb_down_alt',
                        'content' => "\\efe7"
                    ),
                    array(
                        'class' => 'hi-thumb_up_alt',
                        'content' => "\\efe8"
                    ),
                    array(
                        'class' => 'hi-check_box',
                        'content' => "\\efe9"
                    ),
                    array(
                        'class' => 'hi-check_box_outline_blank',
                        'content' => "\\efea"
                    ),
                    array(
                        'class' => 'hi-radio_button_on',
                        'content' => "\\efeb"
                    ),
                    array(
                        'class' => 'hi-star2',
                        'content' => "\\efec"
                    ),
                    array(
                        'class' => 'hi-star_half',
                        'content' => "\\efed"
                    ),
                    array(
                        'class' => 'hi-star_outline',
                        'content' => "\\efee"
                    ),
                    array(
                        'class' => 'hi-3d_rotation',
                        'content' => "\\efef"
                    ),
                    array(
                        'class' => 'hi-accessibility_old',
                        'content' => "\\eff0"
                    ),
                    array(
                        'class' => 'hi-account_balance',
                        'content' => "\\eff1"
                    ),
                    array(
                        'class' => 'hi-account_balance_wallet',
                        'content' => "\\eff2"
                    ),
                    array(
                        'class' => 'hi-account_box',
                        'content' => "\\eff3"
                    ),
                    array(
                        'class' => 'hi-account_circle',
                        'content' => "\\eff4"
                    ),
                    array(
                        'class' => 'hi-add_shopping_cart',
                        'content' => "\\eff5"
                    ),
                    array(
                        'class' => 'hi-alarm_off',
                        'content' => "\\eff6"
                    ),
                    array(
                        'class' => 'hi-alarm_on',
                        'content' => "\\eff7"
                    ),
                    array(
                        'class' => 'hi-announcement',
                        'content' => "\\eff9"
                    ),
                    array(
                        'class' => 'hi-aspect_ratio',
                        'content' => "\\effa"
                    ),
                    array(
                        'class' => 'hi-assignment',
                        'content' => "\\effb"
                    ),
                    array(
                        'class' => 'hi-assignment_ind',
                        'content' => "\\effc"
                    ),
                    array(
                        'class' => 'hi-assignment_late',
                        'content' => "\\effd"
                    ),
                    array(
                        'class' => 'hi-assignment_return',
                        'content' => "\\effe"
                    ),
                    array(
                        'class' => 'hi-assignment_returned',
                        'content' => "\\efff"
                    ),
                    array(
                        'class' => 'hi-assignment_turned_in',
                        'content' => "\\f0bd"
                    ),
                    array(
                        'class' => 'hi-autorenew',
                        'content' => "\\f0be"
                    ),
                    array(
                        'class' => 'hi-book1',
                        'content' => "\\f0bf"
                    ),
                    array(
                        'class' => 'hi-bookmark2',
                        'content' => "\\f0c0"
                    ),
                    array(
                        'class' => 'hi-bookmark_outline',
                        'content' => "\\f0c1"
                    ),
                    array(
                        'class' => 'hi-bug_report',
                        'content' => "\\f0c2"
                    ),
                    array(
                        'class' => 'hi-build',
                        'content' => "\\f0c3"
                    ),
                    array(
                        'class' => 'hi-cached',
                        'content' => "\\f0c4"
                    ),
                    array(
                        'class' => 'hi-change_history',
                        'content' => "\\f0c5"
                    ),
                    array(
                        'class' => 'hi-check_circle',
                        'content' => "\\f0c6"
                    ),
                    array(
                        'class' => 'hi-chrome_reader_mode',
                        'content' => "\\f0c7"
                    ),
                    array(
                        'class' => 'hi-code',
                        'content' => "\\f0c8"
                    ),
                    array(
                        'class' => 'hi-credit_card',
                        'content' => "\\f0c9"
                    ),
                    array(
                        'class' => 'hi-dashboard',
                        'content' => "\\f0ca"
                    ),
                    array(
                        'class' => 'hi-delete',
                        'content' => "\\f0cb"
                    ),
                    array(
                        'class' => 'hi-description',
                        'content' => "\\f0cc"
                    ),
                    array(
                        'class' => 'hi-dns',
                        'content' => "\\f0cd"
                    ),
                    array(
                        'class' => 'hi-done',
                        'content' => "\\f0ce"
                    ),
                    array(
                        'class' => 'hi-done_all',
                        'content' => "\\f0cf"
                    ),
                    array(
                        'class' => 'hi-exit_to_app',
                        'content' => "\\f0d0"
                    ),
                    array(
                        'class' => 'hi-explore',
                        'content' => "\\f0d1"
                    ),
                    array(
                        'class' => 'hi-extension',
                        'content' => "\\f0d2"
                    ),
                    array(
                        'class' => 'hi-face',
                        'content' => "\\f0d3"
                    ),
                    array(
                        'class' => 'hi-favorite',
                        'content' => "\\f0d4"
                    ),
                    array(
                        'class' => 'hi-favorite_outline',
                        'content' => "\\f0d5"
                    ),
                    array(
                        'class' => 'hi-find_in_page',
                        'content' => "\\f0d6"
                    ),
                    array(
                        'class' => 'hi-find_replace',
                        'content' => "\\f0d7"
                    ),
                    array(
                        'class' => 'hi-flip_to_back',
                        'content' => "\\f0d8"
                    ),
                    array(
                        'class' => 'hi-flip_to_front',
                        'content' => "\\f0d9"
                    ),
                    array(
                        'class' => 'hi-group_work',
                        'content' => "\\f0da"
                    ),
                    array(
                        'class' => 'hi-help1',
                        'content' => "\\f0db"
                    ),
                    array(
                        'class' => 'hi-highlight_remove',
                        'content' => "\\f0dc"
                    ),
                    array(
                        'class' => 'hi-history1',
                        'content' => "\\f0dd"
                    ),
                    array(
                        'class' => 'hi-home4',
                        'content' => "\\f0de"
                    ),
                    array(
                        'class' => 'hi-hourglass_empty',
                        'content' => "\\f0df"
                    ),
                    array(
                        'class' => 'hi-hourglass_full',
                        'content' => "\\f0e0"
                    ),
                    array(
                        'class' => 'hi-https',
                        'content' => "\\f0e1"
                    ),
                    array(
                        'class' => 'hi-info2',
                        'content' => "\\f0e2"
                    ),
                    array(
                        'class' => 'hi-info_outline',
                        'content' => "\\f0e3"
                    ),
                    array(
                        'class' => 'hi-input',
                        'content' => "\\f0e4"
                    ),
                    array(
                        'class' => 'hi-invert_colors_on',
                        'content' => "\\f0e5"
                    ),
                    array(
                        'class' => 'hi-label',
                        'content' => "\\f0e6"
                    ),
                    array(
                        'class' => 'hi-label_outline',
                        'content' => "\\f0e7"
                    ),
                    array(
                        'class' => 'hi-language',
                        'content' => "\\f0e8"
                    ),
                    array(
                        'class' => 'hi-launch',
                        'content' => "\\f0e9"
                    ),
                    array(
                        'class' => 'hi-list1',
                        'content' => "\\f0ea"
                    ),
                    array(
                        'class' => 'hi-lock_open',
                        'content' => "\\f0eb"
                    ),
                    array(
                        'class' => 'hi-lock_outline',
                        'content' => "\\f0ec"
                    ),
                    array(
                        'class' => 'hi-loyalty',
                        'content' => "\\f0ed"
                    ),
                    array(
                        'class' => 'hi-markunread_mailbox',
                        'content' => "\\f0ee"
                    ),
                    array(
                        'class' => 'hi-note_add',
                        'content' => "\\f0ef"
                    ),
                    array(
                        'class' => 'hi-open_in_browser',
                        'content' => "\\f10a"
                    ),
                    array(
                        'class' => 'hi-open_with',
                        'content' => "\\f10d"
                    ),
                    array(
                        'class' => 'hi-pageview',
                        'content' => "\\f10e"
                    ),
                    array(
                        'class' => 'hi-perm_camera_mic',
                        'content' => "\\f122"
                    ),
                    array(
                        'class' => 'hi-perm_contact_calendar',
                        'content' => "\\f129"
                    ),
                    array(
                        'class' => 'hi-perm_data_setting',
                        'content' => "\\f12a"
                    ),
                    array(
                        'class' => 'hi-perm_device_information',
                        'content' => "\\f1a0"
                    ),
                    array(
                        'class' => 'hi-perm_media',
                        'content' => "\\f1a1"
                    ),
                    array(
                        'class' => 'hi-perm_phone_msg',
                        'content' => "\\f1a2"
                    ),
                    array(
                        'class' => 'hi-perm_scan_wifi',
                        'content' => "\\f1a3"
                    ),
                    array(
                        'class' => 'hi-picture_in_picture',
                        'content' => "\\f1a4"
                    ),
                    array(
                        'class' => 'hi-polymer',
                        'content' => "\\f1a5"
                    ),
                    array(
                        'class' => 'hi-power_settings_new',
                        'content' => "\\f1a6"
                    ),
                    array(
                        'class' => 'hi-receipt',
                        'content' => "\\f1a7"
                    ),
                    array(
                        'class' => 'hi-redeem',
                        'content' => "\\f1a8"
                    ),
                    array(
                        'class' => 'hi-search2',
                        'content' => "\\f1a9"
                    ),
                    array(
                        'class' => 'hi-settings1',
                        'content' => "\\f1aa"
                    ),
                    array(
                        'class' => 'hi-settings_applications',
                        'content' => "\\f1ab"
                    ),
                    array(
                        'class' => 'hi-settings_backup_restore',
                        'content' => "\\f1ac"
                    ),
                    array(
                        'class' => 'hi-settings_bluetooth',
                        'content' => "\\f1ad"
                    ),
                    array(
                        'class' => 'hi-settings_cell',
                        'content' => "\\f1ae"
                    ),
                    array(
                        'class' => 'hi-settings_display',
                        'content' => "\\f1af"
                    ),
                    array(
                        'class' => 'hi-settings_ethernet',
                        'content' => "\\f1b0"
                    ),
                    array(
                        'class' => 'hi-settings_input_antenna',
                        'content' => "\\f1b1"
                    ),
                    array(
                        'class' => 'hi-settings_input_component',
                        'content' => "\\f1b2"
                    ),
                    array(
                        'class' => 'hi-settings_input_hdmi',
                        'content' => "\\f1b3"
                    ),
                    array(
                        'class' => 'hi-settings_input_svideo',
                        'content' => "\\f1b4"
                    ),
                    array(
                        'class' => 'hi-settings_overscan',
                        'content' => "\\f1b5"
                    ),
                    array(
                        'class' => 'hi-settings_phone',
                        'content' => "\\f1b6"
                    ),
                    array(
                        'class' => 'hi-settings_power',
                        'content' => "\\f1b7"
                    ),
                    array(
                        'class' => 'hi-settings_remote',
                        'content' => "\\f1b8"
                    ),
                    array(
                        'class' => 'hi-settings_voice',
                        'content' => "\\f1b9"
                    ),
                    array(
                        'class' => 'hi-shop',
                        'content' => "\\f1ba"
                    ),
                    array(
                        'class' => 'hi-shop_two',
                        'content' => "\\f1bb"
                    ),
                    array(
                        'class' => 'hi-shopping_basket',
                        'content' => "\\f1bc"
                    ),
                    array(
                        'class' => 'hi-speaker_notes',
                        'content' => "\\f1bd"
                    ),
                    array(
                        'class' => 'hi-spellcheck',
                        'content' => "\\f1be"
                    ),
                    array(
                        'class' => 'hi-stars',
                        'content' => "\\f1bf"
                    ),
                    array(
                        'class' => 'hi-subject',
                        'content' => "\\f1c0"
                    ),
                    array(
                        'class' => 'hi-supervisor_account',
                        'content' => "\\f1c1"
                    ),
                    array(
                        'class' => 'hi-swap_horiz',
                        'content' => "\\f1c2"
                    ),
                    array(
                        'class' => 'hi-swap_vert',
                        'content' => "\\f1c3"
                    ),
                    array(
                        'class' => 'hi-swap_vertical_circle',
                        'content' => "\\f1c4"
                    ),
                    array(
                        'class' => 'hi-system_update_tv',
                        'content' => "\\f1c5"
                    ),
                    array(
                        'class' => 'hi-tab1',
                        'content' => "\\f1c6"
                    ),
                    array(
                        'class' => 'hi-tab_unselected',
                        'content' => "\\f1c7"
                    ),
                    array(
                        'class' => 'hi-thumb_down',
                        'content' => "\\f1c8"
                    ),
                    array(
                        'class' => 'hi-thumb_up',
                        'content' => "\\f1c9"
                    ),
                    array(
                        'class' => 'hi-thumbs_up_down',
                        'content' => "\\f1ca"
                    ),
                    array(
                        'class' => 'hi-toc',
                        'content' => "\\f1cb"
                    ),
                    array(
                        'class' => 'hi-today',
                        'content' => "\\f1cc"
                    ),
                    array(
                        'class' => 'hi-toll',
                        'content' => "\\f1cd"
                    ),
                    array(
                        'class' => 'hi-track_changes',
                        'content' => "\\f1ce"
                    ),
                    array(
                        'class' => 'hi-translate',
                        'content' => "\\f1cf"
                    ),
                    array(
                        'class' => 'hi-trending_down',
                        'content' => "\\f1d0"
                    ),
                    array(
                        'class' => 'hi-trending_neutral',
                        'content' => "\\f1d1"
                    ),
                    array(
                        'class' => 'hi-trending_up',
                        'content' => "\\f1d2"
                    ),
                    array(
                        'class' => 'hi-verified_user',
                        'content' => "\\f1d3"
                    ),
                    array(
                        'class' => 'hi-view_agenda',
                        'content' => "\\f1d4"
                    ),
                    array(
                        'class' => 'hi-view_array',
                        'content' => "\\f1d5"
                    ),
                    array(
                        'class' => 'hi-view_carousel',
                        'content' => "\\f1d6"
                    ),
                    array(
                        'class' => 'hi-view_column',
                        'content' => "\\f1d7"
                    ),
                    array(
                        'class' => 'hi-view_day',
                        'content' => "\\f1d8"
                    ),
                    array(
                        'class' => 'hi-view_headline',
                        'content' => "\\f1d9"
                    ),
                    array(
                        'class' => 'hi-view_list',
                        'content' => "\\f1da"
                    ),
                    array(
                        'class' => 'hi-view_module',
                        'content' => "\\f1db"
                    ),
                    array(
                        'class' => 'hi-view_quilt',
                        'content' => "\\f1dc"
                    ),
                    array(
                        'class' => 'hi-view_stream',
                        'content' => "\\f1dd"
                    ),
                    array(
                        'class' => 'hi-view_week',
                        'content' => "\\f1de"
                    ),
                    array(
                        'class' => 'hi-visibility_off',
                        'content' => "\\f1df"
                    ),
                    array(
                        'class' => 'hi-card_membership',
                        'content' => "\\f1e0"
                    ),
                    array(
                        'class' => 'hi-card_travel',
                        'content' => "\\f1e1"
                    ),
                    array(
                        'class' => 'hi-work',
                        'content' => "\\f1e2"
                    ),
                    array(
                        'class' => 'hi-youtube_searched_for',
                        'content' => "\\f1e3"
                    ),
                    array(
                        'class' => 'hi-eject1',
                        'content' => "\\f1e4"
                    ),
                    array(
                        'class' => 'hi-camera_enhance',
                        'content' => "\\f1e5"
                    ),
                    array(
                        'class' => 'hi-help_outline',
                        'content' => "\\f1e6"
                    ),
                    array(
                        'class' => 'hi-reorder',
                        'content' => "\\f1e7"
                    ),
                    array(
                        'class' => 'hi-zoom_in',
                        'content' => "\\f1e8"
                    ),
                    array(
                        'class' => 'hi-zoom_out',
                        'content' => "\\f1e9"
                    ),
                    array(
                        'class' => 'hi-http',
                        'content' => "\\f1ea"
                    ),
                    array(
                        'class' => 'hi-event_seat',
                        'content' => "\\f1eb"
                    ),
                    array(
                        'class' => 'hi-flight_land',
                        'content' => "\\f1ec"
                    ),
                    array(
                        'class' => 'hi-flight_takeoff',
                        'content' => "\\f1ed"
                    ),
                    array(
                        'class' => 'hi-play_for_work',
                        'content' => "\\f1ee"
                    ),
                    array(
                        'class' => 'hi-gif',
                        'content' => "\\f1ef"
                    ),
                    array(
                        'class' => 'hi-indeterminate_check_box',
                        'content' => "\\f1f0"
                    ),
                    array(
                        'class' => 'hi-offline_pin',
                        'content' => "\\f1f1"
                    ),
                    array(
                        'class' => 'hi-all_out',
                        'content' => "\\f1f2"
                    ),
                    array(
                        'class' => 'hi-copyright',
                        'content' => "\\f1f3"
                    ),
                    array(
                        'class' => 'hi-fingerprint',
                        'content' => "\\f1f4"
                    ),
                    array(
                        'class' => 'hi-gavel',
                        'content' => "\\f1f5"
                    ),
                    array(
                        'class' => 'hi-lightbulb_outline',
                        'content' => "\\f1f6"
                    ),
                    array(
                        'class' => 'hi-picture_in_picture_alt',
                        'content' => "\\f1f7"
                    ),
                    array(
                        'class' => 'hi-important_devices',
                        'content' => "\\f1f8"
                    ),
                    array(
                        'class' => 'hi-touch_app',
                        'content' => "\\f1f9"
                    ),
                    array(
                        'class' => 'hi-accessible',
                        'content' => "\\f1fa"
                    ),
                    array(
                        'class' => 'hi-compare_arrows',
                        'content' => "\\f1fb"
                    ),
                    array(
                        'class' => 'hi-date_range',
                        'content' => "\\f1fc"
                    ),
                    array(
                        'class' => 'hi-donut_large',
                        'content' => "\\f1fd"
                    ),
                    array(
                        'class' => 'hi-donut_small',
                        'content' => "\\f1fe"
                    ),
                    array(
                        'class' => 'hi-line_style',
                        'content' => "\\f1ff"
                    ),
                    array(
                        'class' => 'hi-line_weight',
                        'content' => "\\f200"
                    ),
                    array(
                        'class' => 'hi-motorcycle',
                        'content' => "\\f201"
                    ),
                    array(
                        'class' => 'hi-opacity',
                        'content' => "\\f202"
                    ),
                    array(
                        'class' => 'hi-pets',
                        'content' => "\\f203"
                    ),
                    array(
                        'class' => 'hi-pregnant_woman',
                        'content' => "\\f204"
                    ),
                    array(
                        'class' => 'hi-record_voice_over',
                        'content' => "\\f205"
                    ),
                    array(
                        'class' => 'hi-rounded_corner',
                        'content' => "\\f206"
                    ),
                    array(
                        'class' => 'hi-rowing',
                        'content' => "\\f207"
                    ),
                    array(
                        'class' => 'hi-timeline',
                        'content' => "\\f208"
                    ),
                    array(
                        'class' => 'hi-update',
                        'content' => "\\f209"
                    ),
                    array(
                        'class' => 'hi-watch_later',
                        'content' => "\\f20a"
                    ),
                    array(
                        'class' => 'hi-pan_tool',
                        'content' => "\\f20b"
                    ),
                    array(
                        'class' => 'hi-g_translate',
                        'content' => "\\f20d"
                    ),
                    array(
                        'class' => 'hi-remove_shopping_cart',
                        'content' => "\\f20e"
                    ),
                    array(
                        'class' => 'hi-restore_page',
                        'content' => "\\f20f"
                    ),
                    array(
                        'class' => 'hi-speaker_notes_off',
                        'content' => "\\f210"
                    ),
                    array(
                        'class' => 'hi-delete_forever',
                        'content' => "\\f211"
                    ),
                    array(
                        'class' => 'hi-accessibility_new',
                        'content' => "\\f212"
                    ),
                    array(
                        'class' => 'hi-check_circle_outline',
                        'content' => "\\f213"
                    ),
                    array(
                        'class' => 'hi-delete_outline',
                        'content' => "\\f214"
                    ),
                    array(
                        'class' => 'hi-done_outline',
                        'content' => "\\f215"
                    ),
                    array(
                        'class' => 'hi-maximize1',
                        'content' => "\\f216"
                    ),
                    array(
                        'class' => 'hi-minimize1',
                        'content' => "\\f217"
                    ),
                    array(
                        'class' => 'hi-offline_bolt',
                        'content' => "\\f218"
                    ),
                    array(
                        'class' => 'hi-swap_horizontal_circle',
                        'content' => "\\f219"
                    ),
                    array(
                        'class' => 'hi-accessible_forward',
                        'content' => "\\f21a"
                    ),
                    array(
                        'class' => 'hi-calendar_today',
                        'content' => "\\f21b"
                    ),
                    array(
                        'class' => 'hi-calendar_view_day',
                        'content' => "\\f21c"
                    ),
                    array(
                        'class' => 'hi-label_important',
                        'content' => "\\f21d"
                    ),
                    array(
                        'class' => 'hi-restore_from_trash',
                        'content' => "\\f21e"
                    ),
                    array(
                        'class' => 'hi-supervised_user_circle',
                        'content' => "\\f21f"
                    ),
                    array(
                        'class' => 'hi-text_rotate_up',
                        'content' => "\\f220"
                    ),
                    array(
                        'class' => 'hi-text_rotate_vertical',
                        'content' => "\\f221"
                    ),
                    array(
                        'class' => 'hi-text_rotation_angledown',
                        'content' => "\\f222"
                    ),
                    array(
                        'class' => 'hi-text_rotation_angleup',
                        'content' => "\\f223"
                    ),
                    array(
                        'class' => 'hi-text_rotation_down',
                        'content' => "\\f224"
                    ),
                    array(
                        'class' => 'hi-text_rotation_none',
                        'content' => "\\f225"
                    ),
                    array(
                        'class' => 'hi-commute',
                        'content' => "\\f226"
                    ),
                    array(
                        'class' => 'hi-arrow_right_alt',
                        'content' => "\\f227"
                    ),
                    array(
                        'class' => 'hi-work_off',
                        'content' => "\\f228"
                    ),
                    array(
                        'class' => 'hi-work_outline',
                        'content' => "\\f229"
                    ),
                    array(
                        'class' => 'hi-drag_indicator',
                        'content' => "\\f22a"
                    ),
                    array(
                        'class' => 'hi-horizontal_split',
                        'content' => "\\f22b"
                    ),
                    array(
                        'class' => 'hi-label_important_outline',
                        'content' => "\\f22c"
                    ),
                    array(
                        'class' => 'hi-vertical_split',
                        'content' => "\\f22d"
                    ),
                    array(
                        'class' => 'hi-voice_over_off',
                        'content' => "\\f22e"
                    ),
                    array(
                        'class' => 'hi-segment',
                        'content' => "\\f22f"
                    ),
                    array(
                        'class' => 'hi-contact_support',
                        'content' => "\\f230"
                    ),
                    array(
                        'class' => 'hi-compress',
                        'content' => "\\f231"
                    ),
                    array(
                        'class' => 'hi-filter_list_alt',
                        'content' => "\\f232"
                    ),
                    array(
                        'class' => 'hi-expand',
                        'content' => "\\f233"
                    ),
                    array(
                        'class' => 'hi-edit_off',
                        'content' => "\\f234"
                    ),
                    array(
                        'class' => 'hi-10k',
                        'content' => "\\f235"
                    ),
                    array(
                        'class' => 'hi-10mp',
                        'content' => "\\f236"
                    ),
                    array(
                        'class' => 'hi-11mp',
                        'content' => "\\f237"
                    ),
                    array(
                        'class' => 'hi-12mp',
                        'content' => "\\f238"
                    ),
                    array(
                        'class' => 'hi-13mp',
                        'content' => "\\f239"
                    ),
                    array(
                        'class' => 'hi-14mp',
                        'content' => "\\f23a"
                    ),
                    array(
                        'class' => 'hi-15mp',
                        'content' => "\\f23b"
                    ),
                    array(
                        'class' => 'hi-16mp',
                        'content' => "\\f23c"
                    ),
                    array(
                        'class' => 'hi-17mp',
                        'content' => "\\f23d"
                    ),
                    array(
                        'class' => 'hi-18mp',
                        'content' => "\\f23e"
                    ),
                    array(
                        'class' => 'hi-19mp',
                        'content' => "\\f23f"
                    ),
                    array(
                        'class' => 'hi-1k',
                        'content' => "\\f240"
                    ),
                    array(
                        'class' => 'hi-1k_plus',
                        'content' => "\\f241"
                    ),
                    array(
                        'class' => 'hi-20mp',
                        'content' => "\\f242"
                    ),
                    array(
                        'class' => 'hi-21mp',
                        'content' => "\\f243"
                    ),
                    array(
                        'class' => 'hi-22mp',
                        'content' => "\\f244"
                    ),
                    array(
                        'class' => 'hi-23mp',
                        'content' => "\\f245"
                    ),
                    array(
                        'class' => 'hi-24mp',
                        'content' => "\\f246"
                    ),
                    array(
                        'class' => 'hi-2k',
                        'content' => "\\f247"
                    ),
                    array(
                        'class' => 'hi-2k_plus',
                        'content' => "\\f248"
                    ),
                    array(
                        'class' => 'hi-2mp',
                        'content' => "\\f249"
                    ),
                    array(
                        'class' => 'hi-3k',
                        'content' => "\\f24a"
                    ),
                    array(
                        'class' => 'hi-3k_plus',
                        'content' => "\\f24b"
                    ),
                    array(
                        'class' => 'hi-3mp',
                        'content' => "\\f24c"
                    ),
                    array(
                        'class' => 'hi-4k_plus',
                        'content' => "\\f24d"
                    ),
                    array(
                        'class' => 'hi-4mp',
                        'content' => "\\f24e"
                    ),
                    array(
                        'class' => 'hi-5k',
                        'content' => "\\f24f"
                    ),
                    array(
                        'class' => 'hi-5k_plus',
                        'content' => "\\f250"
                    ),
                    array(
                        'class' => 'hi-5mp',
                        'content' => "\\f251"
                    ),
                    array(
                        'class' => 'hi-6k',
                        'content' => "\\f252"
                    ),
                    array(
                        'class' => 'hi-6k_plus',
                        'content' => "\\f253"
                    ),
                    array(
                        'class' => 'hi-6mp',
                        'content' => "\\f254"
                    ),
                    array(
                        'class' => 'hi-7k',
                        'content' => "\\f255"
                    ),
                    array(
                        'class' => 'hi-7k_plus',
                        'content' => "\\f256"
                    ),
                    array(
                        'class' => 'hi-7mp',
                        'content' => "\\f257"
                    ),
                    array(
                        'class' => 'hi-8k',
                        'content' => "\\f258"
                    ),
                    array(
                        'class' => 'hi-8k_plus',
                        'content' => "\\f259"
                    ),
                    array(
                        'class' => 'hi-8mp',
                        'content' => "\\f25a"
                    ),
                    array(
                        'class' => 'hi-9k',
                        'content' => "\\f25b"
                    ),
                    array(
                        'class' => 'hi-9k_plus',
                        'content' => "\\f25c"
                    ),
                    array(
                        'class' => 'hi-9mp',
                        'content' => "\\f25d"
                    ),
                    array(
                        'class' => 'hi-account_tree',
                        'content' => "\\f25e"
                    ),
                    array(
                        'class' => 'hi-add_chart',
                        'content' => "\\f25f"
                    ),
                    array(
                        'class' => 'hi-add_ic_call',
                        'content' => "\\f260"
                    ),
                    array(
                        'class' => 'hi-add_moderator',
                        'content' => "\\f261"
                    ),
                    array(
                        'class' => 'hi-all_inbox',
                        'content' => "\\f262"
                    ),
                    array(
                        'class' => 'hi-approval',
                        'content' => "\\f263"
                    ),
                    array(
                        'class' => 'hi-assistant_direction',
                        'content' => "\\f264"
                    ),
                    array(
                        'class' => 'hi-assistant_navigation',
                        'content' => "\\f265"
                    ),
                    array(
                        'class' => 'hi-bookmarks1',
                        'content' => "\\f266"
                    ),
                    array(
                        'class' => 'hi-bus_alert',
                        'content' => "\\f267"
                    ),
                    array(
                        'class' => 'hi-cases',
                        'content' => "\\f268"
                    ),
                    array(
                        'class' => 'hi-circle_notifications',
                        'content' => "\\f269"
                    ),
                    array(
                        'class' => 'hi-closed_caption_off',
                        'content' => "\\f26a"
                    ),
                    array(
                        'class' => 'hi-connected_tv',
                        'content' => "\\f26b"
                    ),
                    array(
                        'class' => 'hi-dangerous',
                        'content' => "\\f26c"
                    ),
                    array(
                        'class' => 'hi-dashboard_customize',
                        'content' => "\\f26d"
                    ),
                    array(
                        'class' => 'hi-desktop_access_disabled',
                        'content' => "\\f26e"
                    ),
                    array(
                        'class' => 'hi-drive_file_move_outline',
                        'content' => "\\f26f"
                    ),
                    array(
                        'class' => 'hi-drive_file_rename_outline',
                        'content' => "\\f270"
                    ),
                    array(
                        'class' => 'hi-drive_folder_upload',
                        'content' => "\\f271"
                    ),
                    array(
                        'class' => 'hi-explore_off',
                        'content' => "\\f273"
                    ),
                    array(
                        'class' => 'hi-file_download_done',
                        'content' => "\\f274"
                    ),
                    array(
                        'class' => 'hi-rtt',
                        'content' => "\\f275"
                    ),
                    array(
                        'class' => 'hi-grid_view',
                        'content' => "\\f276"
                    ),
                    array(
                        'class' => 'hi-hail',
                        'content' => "\\f277"
                    ),
                    array(
                        'class' => 'hi-home_filled',
                        'content' => "\\f278"
                    ),
                    array(
                        'class' => 'hi-imagesearch_roller',
                        'content' => "\\f279"
                    ),
                    array(
                        'class' => 'hi-label_off',
                        'content' => "\\f27a"
                    ),
                    array(
                        'class' => 'hi-library_add_check',
                        'content' => "\\f27b"
                    ),
                    array(
                        'class' => 'hi-logout1',
                        'content' => "\\f27c"
                    ),
                    array(
                        'class' => 'hi-margin',
                        'content' => "\\f27d"
                    ),
                    array(
                        'class' => 'hi-mark_as_unread',
                        'content' => "\\f27e"
                    ),
                    array(
                        'class' => 'hi-menu_open',
                        'content' => "\\f27f"
                    ),
                    array(
                        'class' => 'hi-mp',
                        'content' => "\\f280"
                    ),
                    array(
                        'class' => 'hi-offline_share',
                        'content' => "\\f281"
                    ),
                    array(
                        'class' => 'hi-padding',
                        'content' => "\\f282"
                    ),
                    array(
                        'class' => 'hi-panorama_photosphere',
                        'content' => "\\f283"
                    ),
                    array(
                        'class' => 'hi-panorama_photosphere_select',
                        'content' => "\\f284"
                    ),
                    array(
                        'class' => 'hi-person_add_disabled',
                        'content' => "\\f285"
                    ),
                    array(
                        'class' => 'hi-phone_disabled',
                        'content' => "\\f286"
                    ),
                    array(
                        'class' => 'hi-phone_enabled',
                        'content' => "\\f287"
                    ),
                    array(
                        'class' => 'hi-pivot_table_chart',
                        'content' => "\\f288"
                    ),
                    array(
                        'class' => 'hi-print_disabled',
                        'content' => "\\f289"
                    ),
                    array(
                        'class' => 'hi-railway_alert',
                        'content' => "\\f28a"
                    ),
                    array(
                        'class' => 'hi-recommend',
                        'content' => "\\f28b"
                    ),
                    array(
                        'class' => 'hi-remove_done',
                        'content' => "\\f28c"
                    ),
                    array(
                        'class' => 'hi-remove_moderator',
                        'content' => "\\f28d"
                    ),
                    array(
                        'class' => 'hi-repeat_on',
                        'content' => "\\f28e"
                    ),
                    array(
                        'class' => 'hi-repeat_one_on',
                        'content' => "\\f28f"
                    ),
                    array(
                        'class' => 'hi-replay_circle_filled',
                        'content' => "\\f290"
                    ),
                    array(
                        'class' => 'hi-reset_tv',
                        'content' => "\\f291"
                    ),
                    array(
                        'class' => 'hi-sd',
                        'content' => "\\f292"
                    ),
                    array(
                        'class' => 'hi-shield1',
                        'content' => "\\f293"
                    ),
                    array(
                        'class' => 'hi-shuffle_on',
                        'content' => "\\f294"
                    ),
                    array(
                        'class' => 'hi-speed',
                        'content' => "\\f295"
                    ),
                    array(
                        'class' => 'hi-stacked_bar_chart',
                        'content' => "\\f296"
                    ),
                    array(
                        'class' => 'hi-stream',
                        'content' => "\\f297"
                    ),
                    array(
                        'class' => 'hi-swipe',
                        'content' => "\\f298"
                    ),
                    array(
                        'class' => 'hi-switch_account',
                        'content' => "\\f299"
                    ),
                    array(
                        'class' => 'hi-tag1',
                        'content' => "\\f29a"
                    ),
                    array(
                        'class' => 'hi-thumb_down_off_alt',
                        'content' => "\\f29b"
                    ),
                    array(
                        'class' => 'hi-thumb_up_off_alt',
                        'content' => "\\f29c"
                    ),
                    array(
                        'class' => 'hi-toggle_off',
                        'content' => "\\f29d"
                    ),
                    array(
                        'class' => 'hi-toggle_on',
                        'content' => "\\f29e"
                    ),
                    array(
                        'class' => 'hi-two_wheeler',
                        'content' => "\\f29f"
                    ),
                    array(
                        'class' => 'hi-upload_file',
                        'content' => "\\f2a0"
                    ),
                    array(
                        'class' => 'hi-view_in_ar',
                        'content' => "\\f2a1"
                    ),
                    array(
                        'class' => 'hi-waterfall_chart',
                        'content' => "\\f2a2"
                    ),
                    array(
                        'class' => 'hi-wb_shade',
                        'content' => "\\f2a3"
                    ),
                    array(
                        'class' => 'hi-wb_twighlight',
                        'content' => "\\f2a4"
                    ),
                    array(
                        'class' => 'hi-home_work',
                        'content' => "\\f2a5"
                    ),
                    array(
                        'class' => 'hi-schedule_send',
                        'content' => "\\f2a6"
                    ),
                    array(
                        'class' => 'hi-bolt',
                        'content' => "\\f2a7"
                    ),
                    array(
                        'class' => 'hi-send_and_archive',
                        'content' => "\\f2a8"
                    ),
                    array(
                        'class' => 'hi-workspaces_filled',
                        'content' => "\\f2a9"
                    ),
                    array(
                        'class' => 'hi-file_present',
                        'content' => "\\f2aa"
                    ),
                    array(
                        'class' => 'hi-workspaces_outline',
                        'content' => "\\f2ab"
                    ),
                    array(
                        'class' => 'hi-fit_screen',
                        'content' => "\\f2ac"
                    ),
                    array(
                        'class' => 'hi-saved_search',
                        'content' => "\\f2ad"
                    ),
                    array(
                        'class' => 'hi-storefront',
                        'content' => "\\f2ae"
                    ),
                    array(
                        'class' => 'hi-amp_stories',
                        'content' => "\\f2af"
                    ),
                    array(
                        'class' => 'hi-dynamic_feed',
                        'content' => "\\f2b0"
                    ),
                    array(
                        'class' => 'hi-euro',
                        'content' => "\\f2b1"
                    ),
                    array(
                        'class' => 'hi-height',
                        'content' => "\\f2b2"
                    ),
                    array(
                        'class' => 'hi-policy',
                        'content' => "\\f2b3"
                    ),
                    array(
                        'class' => 'hi-sync_alt',
                        'content' => "\\f2b4"
                    ),
                    array(
                        'class' => 'hi-menu_book',
                        'content' => "\\f2b5"
                    ),
                    array(
                        'class' => 'hi-emoji_flags',
                        'content' => "\\f2b6"
                    ),
                    array(
                        'class' => 'hi-emoji_food_beverage',
                        'content' => "\\f2b7"
                    ),
                    array(
                        'class' => 'hi-emoji_nature',
                        'content' => "\\f2b8"
                    ),
                    array(
                        'class' => 'hi-emoji_people',
                        'content' => "\\f2b9"
                    ),
                    array(
                        'class' => 'hi-emoji_symbols',
                        'content' => "\\f2ba"
                    ),
                    array(
                        'class' => 'hi-emoji_transportation',
                        'content' => "\\f2bb"
                    ),
                    array(
                        'class' => 'hi-post_add',
                        'content' => "\\f2bc"
                    ),
                    array(
                        'class' => 'hi-people_alt',
                        'content' => "\\f2bd"
                    ),
                    array(
                        'class' => 'hi-emoji_emotions',
                        'content' => "\\f2be"
                    ),
                    array(
                        'class' => 'hi-emoji_events',
                        'content' => "\\f2bf"
                    ),
                    array(
                        'class' => 'hi-emoji_objects',
                        'content' => "\\f2c0"
                    ),
                    array(
                        'class' => 'hi-sports_basketball',
                        'content' => "\\f2c1"
                    ),
                    array(
                        'class' => 'hi-sports_cricket',
                        'content' => "\\f2c2"
                    ),
                    array(
                        'class' => 'hi-sports_esports',
                        'content' => "\\f2c3"
                    ),
                    array(
                        'class' => 'hi-sports_football',
                        'content' => "\\f2c4"
                    ),
                    array(
                        'class' => 'hi-sports_golf',
                        'content' => "\\f2c5"
                    ),
                    array(
                        'class' => 'hi-sports_hockey',
                        'content' => "\\f2c6"
                    ),
                    array(
                        'class' => 'hi-sports_mma',
                        'content' => "\\f2c7"
                    ),
                    array(
                        'class' => 'hi-sports_motorsports',
                        'content' => "\\f2c8"
                    ),
                    array(
                        'class' => 'hi-sports_rugby',
                        'content' => "\\f2c9"
                    ),
                    array(
                        'class' => 'hi-sports_soccer',
                        'content' => "\\f2ca"
                    ),
                    array(
                        'class' => 'hi-sports',
                        'content' => "\\f2cb"
                    ),
                    array(
                        'class' => 'hi-sports_volleyball',
                        'content' => "\\f2cc"
                    ),
                    array(
                        'class' => 'hi-sports_tennis',
                        'content' => "\\f2cd"
                    ),
                    array(
                        'class' => 'hi-sports_handball',
                        'content' => "\\f2ce"
                    ),
                    array(
                        'class' => 'hi-sports_kabaddi',
                        'content' => "\\f2cf"
                    ),
                    array(
                        'class' => 'hi-eco',
                        'content' => "\\f2d0"
                    ),
                    array(
                        'class' => 'hi-museum',
                        'content' => "\\f2d1"
                    ),
                    array(
                        'class' => 'hi-flip_camera_android',
                        'content' => "\\f2d2"
                    ),
                    array(
                        'class' => 'hi-flip_camera_ios',
                        'content' => "\\f2d3"
                    ),
                    array(
                        'class' => 'hi-cancel_schedule_send',
                        'content' => "\\f2d4"
                    ),
                    array(
                        'class' => 'hi-apartment',
                        'content' => "\\f2d5"
                    ),
                    array(
                        'class' => 'hi-bathtub',
                        'content' => "\\f2d6"
                    ),
                    array(
                        'class' => 'hi-deck',
                        'content' => "\\f2d7"
                    ),
                    array(
                        'class' => 'hi-fireplace',
                        'content' => "\\f2d8"
                    ),
                    array(
                        'class' => 'hi-house',
                        'content' => "\\f2d9"
                    ),
                    array(
                        'class' => 'hi-king_bed',
                        'content' => "\\f2da"
                    ),
                    array(
                        'class' => 'hi-nights_stay',
                        'content' => "\\f2db"
                    ),
                    array(
                        'class' => 'hi-outdoor_grill',
                        'content' => "\\f2dc"
                    ),
                    array(
                        'class' => 'hi-single_bed',
                        'content' => "\\f2dd"
                    ),
                    array(
                        'class' => 'hi-square_foot',
                        'content' => "\\f2de"
                    ),
                    array(
                        'class' => 'hi-double_arrow',
                        'content' => "\\f2df"
                    ),
                    array(
                        'class' => 'hi-sports_baseball',
                        'content' => "\\f2e0"
                    ),
                    array(
                        'class' => 'hi-attractions',
                        'content' => "\\f2e1"
                    ),
                    array(
                        'class' => 'hi-bakery_dining',
                        'content' => "\\f2e2"
                    ),
                    array(
                        'class' => 'hi-breakfast_dining',
                        'content' => "\\f2e3"
                    ),
                    array(
                        'class' => 'hi-car_rental',
                        'content' => "\\f2e4"
                    ),
                    array(
                        'class' => 'hi-car_repair',
                        'content' => "\\f2e5"
                    ),
                    array(
                        'class' => 'hi-dinner_dining',
                        'content' => "\\f2e6"
                    ),
                    array(
                        'class' => 'hi-dry_cleaning',
                        'content' => "\\f2e7"
                    ),
                    array(
                        'class' => 'hi-hardware',
                        'content' => "\\f2e8"
                    ),
                    array(
                        'class' => 'hi-liquor',
                        'content' => "\\f2e9"
                    ),
                    array(
                        'class' => 'hi-lunch_dining',
                        'content' => "\\f2ea"
                    ),
                    array(
                        'class' => 'hi-nightlife',
                        'content' => "\\f2eb"
                    ),
                    array(
                        'class' => 'hi-park',
                        'content' => "\\f2ec"
                    ),
                    array(
                        'class' => 'hi-ramen_dining',
                        'content' => "\\f2ed"
                    ),
                    array(
                        'class' => 'hi-celebration',
                        'content' => "\\f2ee"
                    ),
                    array(
                        'class' => 'hi-theater_comedy',
                        'content' => "\\f2ef"
                    ),
                    array(
                        'class' => 'hi-badge',
                        'content' => "\\f2f0"
                    ),
                    array(
                        'class' => 'hi-festival',
                        'content' => "\\f2f1"
                    ),
                    array(
                        'class' => 'hi-icecream',
                        'content' => "\\f2f2"
                    ),
                    array(
                        'class' => 'hi-volunteer_activism',
                        'content' => "\\f2f3"
                    ),
                    array(
                        'class' => 'hi-contactless',
                        'content' => "\\f2f4"
                    ),
                    array(
                        'class' => 'hi-delivery_dining',
                        'content' => "\\f2f5"
                    ),
                    array(
                        'class' => 'hi-brunch_dining',
                        'content' => "\\f2f6"
                    ),
                    array(
                        'class' => 'hi-takeout_dining',
                        'content' => "\\f2f7"
                    ),
                    array(
                        'class' => 'hi-ac_unit',
                        'content' => "\\f2f8"
                    ),
                    array(
                        'class' => 'hi-airport_shuttle',
                        'content' => "\\f2f9"
                    ),
                    array(
                        'class' => 'hi-all_inclusive',
                        'content' => "\\f2fa"
                    ),
                    array(
                        'class' => 'hi-beach_access',
                        'content' => "\\f2fb"
                    ),
                    array(
                        'class' => 'hi-business_center',
                        'content' => "\\f2fc"
                    ),
                    array(
                        'class' => 'hi-casino',
                        'content' => "\\f2fd"
                    ),
                    array(
                        'class' => 'hi-child_care',
                        'content' => "\\f2fe"
                    ),
                    array(
                        'class' => 'hi-child_friendly',
                        'content' => "\\f2ff"
                    ),
                    array(
                        'class' => 'hi-fitness_center',
                        'content' => "\\f300"
                    ),
                    array(
                        'class' => 'hi-golf_course',
                        'content' => "\\f301"
                    ),
                    array(
                        'class' => 'hi-hot_tub',
                        'content' => "\\f302"
                    ),
                    array(
                        'class' => 'hi-kitchen',
                        'content' => "\\f303"
                    ),
                    array(
                        'class' => 'hi-pool',
                        'content' => "\\f304"
                    ),
                    array(
                        'class' => 'hi-room_service',
                        'content' => "\\f305"
                    ),
                    array(
                        'class' => 'hi-smoke_free',
                        'content' => "\\f306"
                    ),
                    array(
                        'class' => 'hi-smoking_rooms',
                        'content' => "\\f307"
                    ),
                    array(
                        'class' => 'hi-spa',
                        'content' => "\\f308"
                    ),
                    array(
                        'class' => 'hi-no_meeting_room',
                        'content' => "\\f309"
                    ),
                    array(
                        'class' => 'hi-meeting_room',
                        'content' => "\\f30a"
                    ),
                    array(
                        'class' => 'hi-goat',
                        'content' => "\\f30b"
                    ),
                    array(
                        'class' => 'hi-5g',
                        'content' => "\\f30c"
                    ),
                    array(
                        'class' => 'hi-ad_units',
                        'content' => "\\f30d"
                    ),
                    array(
                        'class' => 'hi-add_business',
                        'content' => "\\f30e"
                    ),
                    array(
                        'class' => 'hi-add_location_alt',
                        'content' => "\\f30f"
                    ),
                    array(
                        'class' => 'hi-add_road',
                        'content' => "\\f310"
                    ),
                    array(
                        'class' => 'hi-add_to_drive',
                        'content' => "\\f311"
                    ),
                    array(
                        'class' => 'hi-addchart',
                        'content' => "\\f312"
                    ),
                    array(
                        'class' => 'hi-admin_panel_settings',
                        'content' => "\\f313"
                    ),
                    array(
                        'class' => 'hi-agriculture',
                        'content' => "\\f314"
                    ),
                    array(
                        'class' => 'hi-alt_route',
                        'content' => "\\f315"
                    ),
                    array(
                        'class' => 'hi-analytics',
                        'content' => "\\f316"
                    ),
                    array(
                        'class' => 'hi-anchor1',
                        'content' => "\\f317"
                    ),
                    array(
                        'class' => 'hi-animation',
                        'content' => "\\f318"
                    ),
                    array(
                        'class' => 'hi-api',
                        'content' => "\\f319"
                    ),
                    array(
                        'class' => 'hi-app_blocking',
                        'content' => "\\f31a"
                    ),
                    array(
                        'class' => 'hi-app_registration',
                        'content' => "\\f31b"
                    ),
                    array(
                        'class' => 'hi-app_settings_alt',
                        'content' => "\\f31c"
                    ),
                    array(
                        'class' => 'hi-architecture',
                        'content' => "\\f31d"
                    ),
                    array(
                        'class' => 'hi-arrow_circle_down',
                        'content' => "\\f31e"
                    ),
                    array(
                        'class' => 'hi-arrow_circle_up',
                        'content' => "\\f31f"
                    ),
                    array(
                        'class' => 'hi-article',
                        'content' => "\\f320"
                    ),
                    array(
                        'class' => 'hi-attach_email',
                        'content' => "\\f321"
                    ),
                    array(
                        'class' => 'hi-auto_awesome',
                        'content' => "\\f322"
                    ),
                    array(
                        'class' => 'hi-auto_awesome_mosaic',
                        'content' => "\\f323"
                    ),
                    array(
                        'class' => 'hi-auto_awesome_motion',
                        'content' => "\\f324"
                    ),
                    array(
                        'class' => 'hi-auto_delete',
                        'content' => "\\f325"
                    ),
                    array(
                        'class' => 'hi-auto_fix_high',
                        'content' => "\\f326"
                    ),
                    array(
                        'class' => 'hi-auto_fix_normal',
                        'content' => "\\f327"
                    ),
                    array(
                        'class' => 'hi-auto_fix_off',
                        'content' => "\\f328"
                    ),
                    array(
                        'class' => 'hi-auto_stories',
                        'content' => "\\f329"
                    ),
                    array(
                        'class' => 'hi-baby_changing_station',
                        'content' => "\\f32a"
                    ),
                    array(
                        'class' => 'hi-backpack',
                        'content' => "\\f32b"
                    ),
                    array(
                        'class' => 'hi-backup_table',
                        'content' => "\\f32c"
                    ),
                    array(
                        'class' => 'hi-batch_prediction',
                        'content' => "\\f32d"
                    ),
                    array(
                        'class' => 'hi-bedtime',
                        'content' => "\\f32e"
                    ),
                    array(
                        'class' => 'hi-bento',
                        'content' => "\\f32f"
                    ),
                    array(
                        'class' => 'hi-bike_scooter',
                        'content' => "\\f330"
                    ),
                    array(
                        'class' => 'hi-biotech',
                        'content' => "\\f331"
                    ),
                    array(
                        'class' => 'hi-block_flipped',
                        'content' => "\\f332"
                    ),
                    array(
                        'class' => 'hi-browser_not_supported',
                        'content' => "\\f333"
                    ),
                    array(
                        'class' => 'hi-build_circle',
                        'content' => "\\f334"
                    ),
                    array(
                        'class' => 'hi-calculate',
                        'content' => "\\f335"
                    ),
                    array(
                        'class' => 'hi-campaign',
                        'content' => "\\f336"
                    ),
                    array(
                        'class' => 'hi-carpenter',
                        'content' => "\\f337"
                    ),
                    array(
                        'class' => 'hi-cast_for_education',
                        'content' => "\\f338"
                    ),
                    array(
                        'class' => 'hi-charging_station',
                        'content' => "\\f339"
                    ),
                    array(
                        'class' => 'hi-checkroom',
                        'content' => "\\f33a"
                    ),
                    array(
                        'class' => 'hi-circle2',
                        'content' => "\\f33b"
                    ),
                    array(
                        'class' => 'hi-cleaning_services',
                        'content' => "\\f33c"
                    ),
                    array(
                        'class' => 'hi-close_fullscreen',
                        'content' => "\\f33d"
                    ),
                    array(
                        'class' => 'hi-closed_caption_disabled',
                        'content' => "\\f33e"
                    ),
                    array(
                        'class' => 'hi-comment_bank',
                        'content' => "\\f33f"
                    ),
                    array(
                        'class' => 'hi-construction',
                        'content' => "\\f340"
                    ),
                    array(
                        'class' => 'hi-corporate_fare',
                        'content' => "\\f341"
                    ),
                    array(
                        'class' => 'hi-countertops',
                        'content' => "\\f342"
                    ),
                    array(
                        'class' => 'hi-design_services',
                        'content' => "\\f343"
                    ),
                    array(
                        'class' => 'hi-directions_off',
                        'content' => "\\f344"
                    ),
                    array(
                        'class' => 'hi-dirty_lens',
                        'content' => "\\f345"
                    ),
                    array(
                        'class' => 'hi-do_not_step',
                        'content' => "\\f346"
                    ),
                    array(
                        'class' => 'hi-do_not_touch',
                        'content' => "\\f347"
                    ),
                    array(
                        'class' => 'hi-domain_verification',
                        'content' => "\\f348"
                    ),
                    array(
                        'class' => 'hi-drive_file_move',
                        'content' => "\\f349"
                    ),
                    array(
                        'class' => 'hi-dry',
                        'content' => "\\f34a"
                    ),
                    array(
                        'class' => 'hi-dynamic_form',
                        'content' => "\\f34b"
                    ),
                    array(
                        'class' => 'hi-east',
                        'content' => "\\f34c"
                    ),
                    array(
                        'class' => 'hi-edit_road',
                        'content' => "\\f34d"
                    ),
                    array(
                        'class' => 'hi-electric_bike',
                        'content' => "\\f34e"
                    ),
                    array(
                        'class' => 'hi-electric_car',
                        'content' => "\\f34f"
                    ),
                    array(
                        'class' => 'hi-electric_moped',
                        'content' => "\\f350"
                    ),
                    array(
                        'class' => 'hi-electric_rickshaw',
                        'content' => "\\f351"
                    ),
                    array(
                        'class' => 'hi-electric_scooter',
                        'content' => "\\f352"
                    ),
                    array(
                        'class' => 'hi-electrical_services',
                        'content' => "\\f353"
                    ),
                    array(
                        'class' => 'hi-elevator',
                        'content' => "\\f354"
                    ),
                    array(
                        'class' => 'hi-engineering',
                        'content' => "\\f355"
                    ),
                    array(
                        'class' => 'hi-escalator',
                        'content' => "\\f356"
                    ),
                    array(
                        'class' => 'hi-escalator_warning',
                        'content' => "\\f357"
                    ),
                    array(
                        'class' => 'hi-face_retouching_natural',
                        'content' => "\\f358"
                    ),
                    array(
                        'class' => 'hi-fact_check',
                        'content' => "\\f359"
                    ),
                    array(
                        'class' => 'hi-family_restroom',
                        'content' => "\\f35a"
                    ),
                    array(
                        'class' => 'hi-fence',
                        'content' => "\\f35b"
                    ),
                    array(
                        'class' => 'hi-filter_alt',
                        'content' => "\\f35c"
                    ),
                    array(
                        'class' => 'hi-fire_extinguisher',
                        'content' => "\\f35d"
                    ),
                    array(
                        'class' => 'hi-flaky',
                        'content' => "\\f35e"
                    ),
                    array(
                        'class' => 'hi-food_bank',
                        'content' => "\\f35f"
                    ),
                    array(
                        'class' => 'hi-forward_to_inbox',
                        'content' => "\\f360"
                    ),
                    array(
                        'class' => 'hi-foundation',
                        'content' => "\\f361"
                    ),
                    array(
                        'class' => 'hi-grading',
                        'content' => "\\f362"
                    ),
                    array(
                        'class' => 'hi-grass',
                        'content' => "\\f363"
                    ),
                    array(
                        'class' => 'hi-handyman',
                        'content' => "\\f364"
                    ),
                    array(
                        'class' => 'hi-hdr_enhanced_select',
                        'content' => "\\f365"
                    ),
                    array(
                        'class' => 'hi-hearing_disabled',
                        'content' => "\\f366"
                    ),
                    array(
                        'class' => 'hi-help_center',
                        'content' => "\\f367"
                    ),
                    array(
                        'class' => 'hi-highlight_alt',
                        'content' => "\\f368"
                    ),
                    array(
                        'class' => 'hi-history_edu',
                        'content' => "\\f369"
                    ),
                    array(
                        'class' => 'hi-history_toggle_off',
                        'content' => "\\f36a"
                    ),
                    array(
                        'class' => 'hi-home_repair_service',
                        'content' => "\\f36b"
                    ),
                    array(
                        'class' => 'hi-horizontal_rule',
                        'content' => "\\f36c"
                    ),
                    array(
                        'class' => 'hi-hourglass_bottom',
                        'content' => "\\f36d"
                    ),
                    array(
                        'class' => 'hi-hourglass_disabled',
                        'content' => "\\f36e"
                    ),
                    array(
                        'class' => 'hi-hourglass_top',
                        'content' => "\\f36f"
                    ),
                    array(
                        'class' => 'hi-house_siding',
                        'content' => "\\f370"
                    ),
                    array(
                        'class' => 'hi-hvac',
                        'content' => "\\f371"
                    ),
                    array(
                        'class' => 'hi-image_not_supported',
                        'content' => "\\f372"
                    ),
                    array(
                        'class' => 'hi-insights',
                        'content' => "\\f373"
                    ),
                    array(
                        'class' => 'hi-integration_instructions',
                        'content' => "\\f374"
                    ),
                    array(
                        'class' => 'hi-ios_share',
                        'content' => "\\f375"
                    ),
                    array(
                        'class' => 'hi-legend_toggle',
                        'content' => "\\f376"
                    ),
                    array(
                        'class' => 'hi-local_fire_department',
                        'content' => "\\f377"
                    ),
                    array(
                        'class' => 'hi-local_police',
                        'content' => "\\f378"
                    ),
                    array(
                        'class' => 'hi-location_pin',
                        'content' => "\\f379"
                    ),
                    array(
                        'class' => 'hi-lock_clock',
                        'content' => "\\f37a"
                    ),
                    array(
                        'class' => 'hi-login',
                        'content' => "\\f37b"
                    ),
                    array(
                        'class' => 'hi-maps_ugc',
                        'content' => "\\f37c"
                    ),
                    array(
                        'class' => 'hi-mark_chat_read',
                        'content' => "\\f37d"
                    ),
                    array(
                        'class' => 'hi-mark_chat_unread',
                        'content' => "\\f37e"
                    ),
                    array(
                        'class' => 'hi-mark_email_read',
                        'content' => "\\f37f"
                    ),
                    array(
                        'class' => 'hi-mark_email_unread',
                        'content' => "\\f380"
                    ),
                    array(
                        'class' => 'hi-mediation',
                        'content' => "\\f381"
                    ),
                    array(
                        'class' => 'hi-medical_services',
                        'content' => "\\f382"
                    ),
                    array(
                        'class' => 'hi-mic_external_off',
                        'content' => "\\f383"
                    ),
                    array(
                        'class' => 'hi-mic_external_on',
                        'content' => "\\f384"
                    ),
                    array(
                        'class' => 'hi-microwave',
                        'content' => "\\f385"
                    ),
                    array(
                        'class' => 'hi-military_tech',
                        'content' => "\\f386"
                    ),
                    array(
                        'class' => 'hi-miscellaneous_services',
                        'content' => "\\f387"
                    ),
                    array(
                        'class' => 'hi-model_training',
                        'content' => "\\f388"
                    ),
                    array(
                        'class' => 'hi-monitor1',
                        'content' => "\\f389"
                    ),
                    array(
                        'class' => 'hi-moped',
                        'content' => "\\f38a"
                    ),
                    array(
                        'class' => 'hi-more_time',
                        'content' => "\\f38b"
                    ),
                    array(
                        'class' => 'hi-motion_photos_off',
                        'content' => "\\f38c"
                    ),
                    array(
                        'class' => 'hi-motion_photos_on',
                        'content' => "\\f38d"
                    ),
                    array(
                        'class' => 'hi-motion_photos_paused',
                        'content' => "\\f38e"
                    ),
                    array(
                        'class' => 'hi-multiple_stop',
                        'content' => "\\f38f"
                    ),
                    array(
                        'class' => 'hi-nat',
                        'content' => "\\f390"
                    ),
                    array(
                        'class' => 'hi-near_me_disabled',
                        'content' => "\\f391"
                    ),
                    array(
                        'class' => 'hi-next_plan',
                        'content' => "\\f392"
                    ),
                    array(
                        'class' => 'hi-night_shelter',
                        'content' => "\\f393"
                    ),
                    array(
                        'class' => 'hi-nightlight_round',
                        'content' => "\\f394"
                    ),
                    array(
                        'class' => 'hi-no_cell',
                        'content' => "\\f395"
                    ),
                    array(
                        'class' => 'hi-no_drinks',
                        'content' => "\\f396"
                    ),
                    array(
                        'class' => 'hi-no_flash',
                        'content' => "\\f397"
                    ),
                    array(
                        'class' => 'hi-no_food',
                        'content' => "\\f398"
                    ),
                    array(
                        'class' => 'hi-no_meals',
                        'content' => "\\f399"
                    ),
                    array(
                        'class' => 'hi-no_photography',
                        'content' => "\\f39a"
                    ),
                    array(
                        'class' => 'hi-no_stroller',
                        'content' => "\\f39b"
                    ),
                    array(
                        'class' => 'hi-no_transfer',
                        'content' => "\\f39c"
                    ),
                    array(
                        'class' => 'hi-north',
                        'content' => "\\f39d"
                    ),
                    array(
                        'class' => 'hi-north_east',
                        'content' => "\\f39e"
                    ),
                    array(
                        'class' => 'hi-north_west',
                        'content' => "\\f39f"
                    ),
                    array(
                        'class' => 'hi-not_accessible',
                        'content' => "\\f3a0"
                    ),
                    array(
                        'class' => 'hi-not_started',
                        'content' => "\\f3a1"
                    ),
                    array(
                        'class' => 'hi-online_prediction',
                        'content' => "\\f3a2"
                    ),
                    array(
                        'class' => 'hi-open_in_full',
                        'content' => "\\f3a3"
                    ),
                    array(
                        'class' => 'hi-outbox',
                        'content' => "\\f3a4"
                    ),
                    array(
                        'class' => 'hi-outgoing_mail',
                        'content' => "\\f3a5"
                    ),
                    array(
                        'class' => 'hi-outlet',
                        'content' => "\\f3a6"
                    ),
                    array(
                        'class' => 'hi-panorama_horizontal_select',
                        'content' => "\\f3a7"
                    ),
                    array(
                        'class' => 'hi-panorama_vertical_select',
                        'content' => "\\f3a8"
                    ),
                    array(
                        'class' => 'hi-panorama_wide_angle_select',
                        'content' => "\\f3a9"
                    ),
                    array(
                        'class' => 'hi-payments',
                        'content' => "\\f3aa"
                    ),
                    array(
                        'class' => 'hi-pedal_bike',
                        'content' => "\\f3ab"
                    ),
                    array(
                        'class' => 'hi-pending',
                        'content' => "\\f3ac"
                    ),
                    array(
                        'class' => 'hi-pending_actions',
                        'content' => "\\f3ad"
                    ),
                    array(
                        'class' => 'hi-person_add_alt',
                        'content' => "\\f3ae"
                    ),
                    array(
                        'class' => 'hi-person_add_alt_1',
                        'content' => "\\f3af"
                    ),
                    array(
                        'class' => 'hi-person_remove',
                        'content' => "\\f3b0"
                    ),
                    array(
                        'class' => 'hi-person_search',
                        'content' => "\\f3b1"
                    ),
                    array(
                        'class' => 'hi-pest_control',
                        'content' => "\\f3b2"
                    ),
                    array(
                        'class' => 'hi-pest_control_rodent',
                        'content' => "\\f3b3"
                    ),
                    array(
                        'class' => 'hi-photo_camera_back',
                        'content' => "\\f3b4"
                    ),
                    array(
                        'class' => 'hi-photo_camera_front',
                        'content' => "\\f3b5"
                    ),
                    array(
                        'class' => 'hi-plagiarism',
                        'content' => "\\f3b6"
                    ),
                    array(
                        'class' => 'hi-play_disabled',
                        'content' => "\\f3b7"
                    ),
                    array(
                        'class' => 'hi-plumbing',
                        'content' => "\\f3b8"
                    ),
                    array(
                        'class' => 'hi-point_of_sale',
                        'content' => "\\f3b9"
                    ),
                    array(
                        'class' => 'hi-preview',
                        'content' => "\\f3ba"
                    ),
                    array(
                        'class' => 'hi-privacy_tip',
                        'content' => "\\f3bb"
                    ),
                    array(
                        'class' => 'hi-psychology',
                        'content' => "\\f3bc"
                    ),
                    array(
                        'class' => 'hi-public_off',
                        'content' => "\\f3bd"
                    ),
                    array(
                        'class' => 'hi-push_pin',
                        'content' => "\\f3be"
                    ),
                    array(
                        'class' => 'hi-qr_code',
                        'content' => "\\f3bf"
                    ),
                    array(
                        'class' => 'hi-qr_code_scanner',
                        'content' => "\\f3c0"
                    ),
                    array(
                        'class' => 'hi-quickreply',
                        'content' => "\\f3c1"
                    ),
                    array(
                        'class' => 'hi-read_more',
                        'content' => "\\f3c2"
                    ),
                    array(
                        'class' => 'hi-receipt_long',
                        'content' => "\\f3c3"
                    ),
                    array(
                        'class' => 'hi-request_quote',
                        'content' => "\\f3c4"
                    ),
                    array(
                        'class' => 'hi-rice_bowl',
                        'content' => "\\f3c5"
                    ),
                    array(
                        'class' => 'hi-roofing',
                        'content' => "\\f3c6"
                    ),
                    array(
                        'class' => 'hi-room_preferences',
                        'content' => "\\f3c7"
                    ),
                    array(
                        'class' => 'hi-rule',
                        'content' => "\\f3c8"
                    ),
                    array(
                        'class' => 'hi-rule_folder',
                        'content' => "\\f3c9"
                    ),
                    array(
                        'class' => 'hi-run_circle',
                        'content' => "\\f3ca"
                    ),
                    array(
                        'class' => 'hi-science',
                        'content' => "\\f3cb"
                    ),
                    array(
                        'class' => 'hi-screen_search_desktop',
                        'content' => "\\f3cc"
                    ),
                    array(
                        'class' => 'hi-search_off',
                        'content' => "\\f3cd"
                    ),
                    array(
                        'class' => 'hi-self_improvement',
                        'content' => "\\f3ce"
                    ),
                    array(
                        'class' => 'hi-sensor_door',
                        'content' => "\\f3cf"
                    ),
                    array(
                        'class' => 'hi-sensor_window',
                        'content' => "\\f3d0"
                    ),
                    array(
                        'class' => 'hi-set_meal',
                        'content' => "\\f3d1"
                    ),
                    array(
                        'class' => 'hi-shopping_bag',
                        'content' => "\\f3d2"
                    ),
                    array(
                        'class' => 'hi-signal_cellular_0_bar',
                        'content' => "\\f3d3"
                    ),
                    array(
                        'class' => 'hi-signal_wifi_0_bar',
                        'content' => "\\f3d4"
                    ),
                    array(
                        'class' => 'hi-smart_button',
                        'content' => "\\f3d5"
                    ),
                    array(
                        'class' => 'hi-snippet_folder',
                        'content' => "\\f3d6"
                    ),
                    array(
                        'class' => 'hi-soap',
                        'content' => "\\f3d7"
                    ),
                    array(
                        'class' => 'hi-source',
                        'content' => "\\f3d8"
                    ),
                    array(
                        'class' => 'hi-south',
                        'content' => "\\f3d9"
                    ),
                    array(
                        'class' => 'hi-south_east',
                        'content' => "\\f3da"
                    ),
                    array(
                        'class' => 'hi-south_west',
                        'content' => "\\f3db"
                    ),
                    array(
                        'class' => 'hi-sports_bar',
                        'content' => "\\f3dc"
                    ),
                    array(
                        'class' => 'hi-stairs',
                        'content' => "\\f3dd"
                    ),
                    array(
                        'class' => 'hi-star_rate',
                        'content' => "\\f3df"
                    ),
                    array(
                        'class' => 'hi-sticky_note_2',
                        'content' => "\\f3e0"
                    ),
                    array(
                        'class' => 'hi-stop_circle',
                        'content' => "\\f3e1"
                    ),
                    array(
                        'class' => 'hi-stroller',
                        'content' => "\\f3e2"
                    ),
                    array(
                        'class' => 'hi-subscript1',
                        'content' => "\\f3e3"
                    ),
                    array(
                        'class' => 'hi-subtitles_off',
                        'content' => "\\f3e4"
                    ),
                    array(
                        'class' => 'hi-superscript1',
                        'content' => "\\f3e5"
                    ),
                    array(
                        'class' => 'hi-support1',
                        'content' => "\\f3e6"
                    ),
                    array(
                        'class' => 'hi-support_agent',
                        'content' => "\\f3e7"
                    ),
                    array(
                        'class' => 'hi-switch_left',
                        'content' => "\\f3e8"
                    ),
                    array(
                        'class' => 'hi-switch_right',
                        'content' => "\\f3e9"
                    ),
                    array(
                        'class' => 'hi-table_rows',
                        'content' => "\\f3ea"
                    ),
                    array(
                        'class' => 'hi-table_view',
                        'content' => "\\f3eb"
                    ),
                    array(
                        'class' => 'hi-tapas1',
                        'content' => "\\f3ec"
                    ),
                    array(
                        'class' => 'hi-taxi_alert',
                        'content' => "\\f3ed"
                    ),
                    array(
                        'class' => 'hi-text_snippet',
                        'content' => "\\f3ee"
                    ),
                    array(
                        'class' => 'hi-tour',
                        'content' => "\\f3ef"
                    ),
                    array(
                        'class' => 'hi-tty',
                        'content' => "\\f3f0"
                    ),
                    array(
                        'class' => 'hi-umbrella',
                        'content' => "\\f3f1"
                    ),
                    array(
                        'class' => 'hi-upgrade',
                        'content' => "\\f3f2"
                    ),
                    array(
                        'class' => 'hi-verified',
                        'content' => "\\f3f3"
                    ),
                    array(
                        'class' => 'hi-video_settings',
                        'content' => "\\f3f4"
                    ),
                    array(
                        'class' => 'hi-view_sidebar',
                        'content' => "\\f3f5"
                    ),
                    array(
                        'class' => 'hi-wash',
                        'content' => "\\f3f6"
                    ),
                    array(
                        'class' => 'hi-water_damage',
                        'content' => "\\f3f7"
                    ),
                    array(
                        'class' => 'hi-west',
                        'content' => "\\f3f8"
                    ),
                    array(
                        'class' => 'hi-wheelchair_pickup',
                        'content' => "\\f3f9"
                    ),
                    array(
                        'class' => 'hi-wifi_calling',
                        'content' => "\\f3fa"
                    ),
                    array(
                        'class' => 'hi-wifi_protected_setup',
                        'content' => "\\f3fb"
                    ),
                    array(
                        'class' => 'hi-wine_bar',
                        'content' => "\\f3fc"
                    ),
                    array(
                        'class' => 'hi-wrong_location',
                        'content' => "\\f3fd"
                    ),
                    array(
                        'class' => 'hi-wysiwyg',
                        'content' => "\\f3fe"
                    ),
                    array(
                        'class' => 'hi-leaderboard',
                        'content' => "\\f3ff"
                    ),
                    array(
                        'class' => 'hi-6_ft_apart',
                        'content' => "\\f400"
                    ),
                    array(
                        'class' => 'hi-book_online',
                        'content' => "\\f401"
                    ),
                    array(
                        'class' => 'hi-clean_hands',
                        'content' => "\\f402"
                    ),
                    array(
                        'class' => 'hi-connect_without_contact',
                        'content' => "\\f403"
                    ),
                    array(
                        'class' => 'hi-coronavirus',
                        'content' => "\\f404"
                    ),
                    array(
                        'class' => 'hi-elderly',
                        'content' => "\\f405"
                    ),
                    array(
                        'class' => 'hi-follow_the_signs',
                        'content' => "\\f406"
                    ),
                    array(
                        'class' => 'hi-leave_bags_at_home',
                        'content' => "\\f407"
                    ),
                    array(
                        'class' => 'hi-masks',
                        'content' => "\\f408"
                    ),
                    array(
                        'class' => 'hi-reduce_capacity',
                        'content' => "\\f409"
                    ),
                    array(
                        'class' => 'hi-sanitizer',
                        'content' => "\\f40a"
                    ),
                    array(
                        'class' => 'hi-send_to_mobile',
                        'content' => "\\f40b"
                    ),
                    array(
                        'class' => 'hi-sick',
                        'content' => "\\f40c"
                    ),
                    array(
                        'class' => 'hi-add_task',
                        'content' => "\\f40d"
                    ),
                    array(
                        'class' => 'hi-contact_page',
                        'content' => "\\f40e"
                    ),
                    array(
                        'class' => 'hi-disabled_by_default',
                        'content' => "\\f40f"
                    ),
                    array(
                        'class' => 'hi-groups',
                        'content' => "\\f411"
                    ),
                    array(
                        'class' => 'hi-luggage',
                        'content' => "\\f412"
                    ),
                    array(
                        'class' => 'hi-no_backpack',
                        'content' => "\\f413"
                    ),
                    array(
                        'class' => 'hi-no_luggage',
                        'content' => "\\f414"
                    ),
                    array(
                        'class' => 'hi-outbond',
                        'content' => "\\f415"
                    ),
                    array(
                        'class' => 'hi-published_with_changes',
                        'content' => "\\f416"
                    ),
                    array(
                        'class' => 'hi-request_page',
                        'content' => "\\f417"
                    ),
                    array(
                        'class' => 'hi-stacked_line_chart',
                        'content' => "\\f418"
                    ),
                    array(
                        'class' => 'hi-unpublished',
                        'content' => "\\f419"
                    ),
                    array(
                        'class' => 'hi-align_horizontal_center',
                        'content' => "\\f41a"
                    ),
                    array(
                        'class' => 'hi-align_horizontal_left',
                        'content' => "\\f41b"
                    ),
                    array(
                        'class' => 'hi-align_horizontal_right',
                        'content' => "\\f41c"
                    ),
                    array(
                        'class' => 'hi-align_vertical_bottom',
                        'content' => "\\f41d"
                    ),
                    array(
                        'class' => 'hi-align_vertical_center',
                        'content' => "\\f41e"
                    ),
                    array(
                        'class' => 'hi-align_vertical_top',
                        'content' => "\\f41f"
                    ),
                    array(
                        'class' => 'hi-horizontal_distribute',
                        'content' => "\\f420"
                    ),
                    array(
                        'class' => 'hi-qr_code_2',
                        'content' => "\\f421"
                    ),
                    array(
                        'class' => 'hi-update_disabled',
                        'content' => "\\f422"
                    ),
                    array(
                        'class' => 'hi-vertical_distribute',
                        'content' => "\\f423"
                    ),
                    array(
                        'class' => 'hi-home',
                        'content' => "\\f424"
                    ),
                    array(
                        'class' => 'hi-home2',
                        'content' => "\\f425"
                    ),
                    array(
                        'class' => 'hi-home3',
                        'content' => "\\f426"
                    ),
                    array(
                        'class' => 'hi-office',
                        'content' => "\\f427"
                    ),
                    array(
                        'class' => 'hi-newspaper',
                        'content' => "\\f428"
                    ),
                    array(
                        'class' => 'hi-pencil',
                        'content' => "\\f429"
                    ),
                    array(
                        'class' => 'hi-pencil2',
                        'content' => "\\f42a"
                    ),
                    array(
                        'class' => 'hi-quill',
                        'content' => "\\f42b"
                    ),
                    array(
                        'class' => 'hi-pen',
                        'content' => "\\f42c"
                    ),
                    array(
                        'class' => 'hi-blog',
                        'content' => "\\f42d"
                    ),
                    array(
                        'class' => 'hi-eyedropper',
                        'content' => "\\f42e"
                    ),
                    array(
                        'class' => 'hi-droplet',
                        'content' => "\\f42f"
                    ),
                    array(
                        'class' => 'hi-paint-format',
                        'content' => "\\f430"
                    ),
                    array(
                        'class' => 'hi-image',
                        'content' => "\\f431"
                    ),
                    array(
                        'class' => 'hi-images',
                        'content' => "\\f432"
                    ),
                    array(
                        'class' => 'hi-camera',
                        'content' => "\\f433"
                    ),
                    array(
                        'class' => 'hi-headphones',
                        'content' => "\\f434"
                    ),
                    array(
                        'class' => 'hi-music',
                        'content' => "\\f435"
                    ),
                    array(
                        'class' => 'hi-play',
                        'content' => "\\f436"
                    ),
                    array(
                        'class' => 'hi-film',
                        'content' => "\\f437"
                    ),
                    array(
                        'class' => 'hi-video-camera',
                        'content' => "\\f438"
                    ),
                    array(
                        'class' => 'hi-dice',
                        'content' => "\\f439"
                    ),
                    array(
                        'class' => 'hi-pacman',
                        'content' => "\\f43a"
                    ),
                    array(
                        'class' => 'hi-spades',
                        'content' => "\\f43b"
                    ),
                    array(
                        'class' => 'hi-clubs',
                        'content' => "\\f43c"
                    ),
                    array(
                        'class' => 'hi-diamonds',
                        'content' => "\\f43d"
                    ),
                    array(
                        'class' => 'hi-bullhorn',
                        'content' => "\\f43e"
                    ),
                    array(
                        'class' => 'hi-connection',
                        'content' => "\\f43f"
                    ),
                    array(
                        'class' => 'hi-podcast',
                        'content' => "\\f440"
                    ),
                    array(
                        'class' => 'hi-feed',
                        'content' => "\\f441"
                    ),
                    array(
                        'class' => 'hi-mic',
                        'content' => "\\f442"
                    ),
                    array(
                        'class' => 'hi-book',
                        'content' => "\\f443"
                    ),
                    array(
                        'class' => 'hi-books',
                        'content' => "\\f444"
                    ),
                    array(
                        'class' => 'hi-library',
                        'content' => "\\f445"
                    ),
                    array(
                        'class' => 'hi-file-text',
                        'content' => "\\f446"
                    ),
                    array(
                        'class' => 'hi-profile',
                        'content' => "\\f447"
                    ),
                    array(
                        'class' => 'hi-file-empty',
                        'content' => "\\f448"
                    ),
                    array(
                        'class' => 'hi-files-empty',
                        'content' => "\\f449"
                    ),
                    array(
                        'class' => 'hi-file-text2',
                        'content' => "\\f44a"
                    ),
                    array(
                        'class' => 'hi-file-picture',
                        'content' => "\\f44b"
                    ),
                    array(
                        'class' => 'hi-file-music',
                        'content' => "\\f44c"
                    ),
                    array(
                        'class' => 'hi-file-play',
                        'content' => "\\f44d"
                    ),
                    array(
                        'class' => 'hi-file-video',
                        'content' => "\\f44e"
                    ),
                    array(
                        'class' => 'hi-file-zip',
                        'content' => "\\f44f"
                    ),
                    array(
                        'class' => 'hi-copy',
                        'content' => "\\f450"
                    ),
                    array(
                        'class' => 'hi-paste',
                        'content' => "\\f451"
                    ),
                    array(
                        'class' => 'hi-stack',
                        'content' => "\\f452"
                    ),
                    array(
                        'class' => 'hi-folder',
                        'content' => "\\f453"
                    ),
                    array(
                        'class' => 'hi-folder-open',
                        'content' => "\\f454"
                    ),
                    array(
                        'class' => 'hi-folder-plus',
                        'content' => "\\f455"
                    ),
                    array(
                        'class' => 'hi-folder-minus',
                        'content' => "\\f456"
                    ),
                    array(
                        'class' => 'hi-folder-download',
                        'content' => "\\f457"
                    ),
                    array(
                        'class' => 'hi-folder-upload',
                        'content' => "\\f458"
                    ),
                    array(
                        'class' => 'hi-price-tag',
                        'content' => "\\f459"
                    ),
                    array(
                        'class' => 'hi-price-tags',
                        'content' => "\\f45a"
                    ),
                    array(
                        'class' => 'hi-barcode',
                        'content' => "\\f45b"
                    ),
                    array(
                        'class' => 'hi-qrcode',
                        'content' => "\\f45c"
                    ),
                    array(
                        'class' => 'hi-ticket',
                        'content' => "\\f45d"
                    ),
                    array(
                        'class' => 'hi-cart',
                        'content' => "\\f45e"
                    ),
                    array(
                        'class' => 'hi-coin-dollar',
                        'content' => "\\f45f"
                    ),
                    array(
                        'class' => 'hi-coin-euro',
                        'content' => "\\f460"
                    ),
                    array(
                        'class' => 'hi-coin-pound',
                        'content' => "\\f461"
                    ),
                    array(
                        'class' => 'hi-coin-yen',
                        'content' => "\\f462"
                    ),
                    array(
                        'class' => 'hi-credit-card',
                        'content' => "\\f463"
                    ),
                    array(
                        'class' => 'hi-calculator',
                        'content' => "\\f464"
                    ),
                    array(
                        'class' => 'hi-lifebuoy',
                        'content' => "\\f465"
                    ),
                    array(
                        'class' => 'hi-phone',
                        'content' => "\\f466"
                    ),
                    array(
                        'class' => 'hi-phone-hang-up',
                        'content' => "\\f467"
                    ),
                    array(
                        'class' => 'hi-address-book',
                        'content' => "\\f468"
                    ),
                    array(
                        'class' => 'hi-envelop',
                        'content' => "\\f469"
                    ),
                    array(
                        'class' => 'hi-pushpin',
                        'content' => "\\f46a"
                    ),
                    array(
                        'class' => 'hi-location',
                        'content' => "\\f46b"
                    ),
                    array(
                        'class' => 'hi-location2',
                        'content' => "\\f46c"
                    ),
                    array(
                        'class' => 'hi-compass',
                        'content' => "\\f46d"
                    ),
                    array(
                        'class' => 'hi-compass2',
                        'content' => "\\f46e"
                    ),
                    array(
                        'class' => 'hi-map',
                        'content' => "\\f46f"
                    ),
                    array(
                        'class' => 'hi-map2',
                        'content' => "\\f470"
                    ),
                    array(
                        'class' => 'hi-history',
                        'content' => "\\f471"
                    ),
                    array(
                        'class' => 'hi-clock',
                        'content' => "\\f472"
                    ),
                    array(
                        'class' => 'hi-clock2',
                        'content' => "\\f473"
                    ),
                    array(
                        'class' => 'hi-alarm',
                        'content' => "\\f474"
                    ),
                    array(
                        'class' => 'hi-bell',
                        'content' => "\\f475"
                    ),
                    array(
                        'class' => 'hi-stopwatch',
                        'content' => "\\f476"
                    ),
                    array(
                        'class' => 'hi-calendar',
                        'content' => "\\f477"
                    ),
                    array(
                        'class' => 'hi-printer',
                        'content' => "\\f478"
                    ),
                    array(
                        'class' => 'hi-keyboard',
                        'content' => "\\f479"
                    ),
                    array(
                        'class' => 'hi-display',
                        'content' => "\\f47a"
                    ),
                    array(
                        'class' => 'hi-laptop',
                        'content' => "\\f47b"
                    ),
                    array(
                        'class' => 'hi-mobile',
                        'content' => "\\f47c"
                    ),
                    array(
                        'class' => 'hi-mobile2',
                        'content' => "\\f47d"
                    ),
                    array(
                        'class' => 'hi-tablet',
                        'content' => "\\f47e"
                    ),
                    array(
                        'class' => 'hi-tv',
                        'content' => "\\f47f"
                    ),
                    array(
                        'class' => 'hi-drawer',
                        'content' => "\\f480"
                    ),
                    array(
                        'class' => 'hi-drawer2',
                        'content' => "\\f481"
                    ),
                    array(
                        'class' => 'hi-box-add',
                        'content' => "\\f482"
                    ),
                    array(
                        'class' => 'hi-box-remove',
                        'content' => "\\f483"
                    ),
                    array(
                        'class' => 'hi-download',
                        'content' => "\\f484"
                    ),
                    array(
                        'class' => 'hi-upload',
                        'content' => "\\f485"
                    ),
                    array(
                        'class' => 'hi-floppy-disk',
                        'content' => "\\f486"
                    ),
                    array(
                        'class' => 'hi-drive',
                        'content' => "\\f487"
                    ),
                    array(
                        'class' => 'hi-database',
                        'content' => "\\f488"
                    ),
                    array(
                        'class' => 'hi-undo',
                        'content' => "\\f489"
                    ),
                    array(
                        'class' => 'hi-redo',
                        'content' => "\\f48a"
                    ),
                    array(
                        'class' => 'hi-undo2',
                        'content' => "\\f48b"
                    ),
                    array(
                        'class' => 'hi-redo2',
                        'content' => "\\f48c"
                    ),
                    array(
                        'class' => 'hi-forward',
                        'content' => "\\f48d"
                    ),
                    array(
                        'class' => 'hi-reply',
                        'content' => "\\f48e"
                    ),
                    array(
                        'class' => 'hi-bubble',
                        'content' => "\\f48f"
                    ),
                    array(
                        'class' => 'hi-bubbles',
                        'content' => "\\f490"
                    ),
                    array(
                        'class' => 'hi-bubbles2',
                        'content' => "\\f491"
                    ),
                    array(
                        'class' => 'hi-bubble2',
                        'content' => "\\f492"
                    ),
                    array(
                        'class' => 'hi-bubbles3',
                        'content' => "\\f493"
                    ),
                    array(
                        'class' => 'hi-bubbles4',
                        'content' => "\\f494"
                    ),
                    array(
                        'class' => 'hi-user',
                        'content' => "\\f495"
                    ),
                    array(
                        'class' => 'hi-users',
                        'content' => "\\f496"
                    ),
                    array(
                        'class' => 'hi-user-plus',
                        'content' => "\\f497"
                    ),
                    array(
                        'class' => 'hi-user-minus',
                        'content' => "\\f498"
                    ),
                    array(
                        'class' => 'hi-user-check',
                        'content' => "\\f499"
                    ),
                    array(
                        'class' => 'hi-user-tie',
                        'content' => "\\f49a"
                    ),
                    array(
                        'class' => 'hi-quotes-left',
                        'content' => "\\f49b"
                    ),
                    array(
                        'class' => 'hi-quotes-right',
                        'content' => "\\f49c"
                    ),
                    array(
                        'class' => 'hi-hour-glass',
                        'content' => "\\f49d"
                    ),
                    array(
                        'class' => 'hi-spinner',
                        'content' => "\\f49e"
                    ),
                    array(
                        'class' => 'hi-spinner2',
                        'content' => "\\f49f"
                    ),
                    array(
                        'class' => 'hi-spinner3',
                        'content' => "\\f4a0"
                    ),
                    array(
                        'class' => 'hi-spinner4',
                        'content' => "\\f4a1"
                    ),
                    array(
                        'class' => 'hi-spinner5',
                        'content' => "\\f4a2"
                    ),
                    array(
                        'class' => 'hi-spinner6',
                        'content' => "\\f4a3"
                    ),
                    array(
                        'class' => 'hi-spinner7',
                        'content' => "\\f4a4"
                    ),
                    array(
                        'class' => 'hi-spinner8',
                        'content' => "\\f4a5"
                    ),
                    array(
                        'class' => 'hi-spinner9',
                        'content' => "\\f4a6"
                    ),
                    array(
                        'class' => 'hi-spinner10',
                        'content' => "\\f4a7"
                    ),
                    array(
                        'class' => 'hi-spinner11',
                        'content' => "\\f4a8"
                    ),
                    array(
                        'class' => 'hi-binoculars',
                        'content' => "\\f4a9"
                    ),
                    array(
                        'class' => 'hi-search',
                        'content' => "\\f4aa"
                    ),
                    array(
                        'class' => 'hi-zoom-in',
                        'content' => "\\f4ab"
                    ),
                    array(
                        'class' => 'hi-zoom-out',
                        'content' => "\\f4ac"
                    ),
                    array(
                        'class' => 'hi-enlarge',
                        'content' => "\\f4ad"
                    ),
                    array(
                        'class' => 'hi-shrink',
                        'content' => "\\f4ae"
                    ),
                    array(
                        'class' => 'hi-enlarge2',
                        'content' => "\\f4af"
                    ),
                    array(
                        'class' => 'hi-shrink2',
                        'content' => "\\f4b0"
                    ),
                    array(
                        'class' => 'hi-key',
                        'content' => "\\f4b1"
                    ),
                    array(
                        'class' => 'hi-lock',
                        'content' => "\\f4b3"
                    ),
                    array(
                        'class' => 'hi-unlocked',
                        'content' => "\\f4b4"
                    ),
                    array(
                        'class' => 'hi-wrench',
                        'content' => "\\f4b5"
                    ),
                    array(
                        'class' => 'hi-equalizer',
                        'content' => "\\f4b6"
                    ),
                    array(
                        'class' => 'hi-equalizer2',
                        'content' => "\\f4b7"
                    ),
                    array(
                        'class' => 'hi-cog',
                        'content' => "\\f4b8"
                    ),
                    array(
                        'class' => 'hi-cogs',
                        'content' => "\\f4b9"
                    ),
                    array(
                        'class' => 'hi-hammer',
                        'content' => "\\f4ba"
                    ),
                    array(
                        'class' => 'hi-magic-wand',
                        'content' => "\\f4bb"
                    ),
                    array(
                        'class' => 'hi-aid-kit',
                        'content' => "\\f4bc"
                    ),
                    array(
                        'class' => 'hi-bug',
                        'content' => "\\f4bd"
                    ),
                    array(
                        'class' => 'hi-pie-chart',
                        'content' => "\\f4be"
                    ),
                    array(
                        'class' => 'hi-stats-dots',
                        'content' => "\\f4bf"
                    ),
                    array(
                        'class' => 'hi-stats-bars',
                        'content' => "\\f4c0"
                    ),
                    array(
                        'class' => 'hi-stats-bars2',
                        'content' => "\\f4c1"
                    ),
                    array(
                        'class' => 'hi-trophy',
                        'content' => "\\f4c2"
                    ),
                    array(
                        'class' => 'hi-gift',
                        'content' => "\\f4c3"
                    ),
                    array(
                        'class' => 'hi-glass',
                        'content' => "\\f4c4"
                    ),
                    array(
                        'class' => 'hi-glass2',
                        'content' => "\\f4c5"
                    ),
                    array(
                        'class' => 'hi-mug',
                        'content' => "\\f4c6"
                    ),
                    array(
                        'class' => 'hi-spoon-knife',
                        'content' => "\\f4c7"
                    ),
                    array(
                        'class' => 'hi-leaf',
                        'content' => "\\f4c8"
                    ),
                    array(
                        'class' => 'hi-rocket',
                        'content' => "\\f4c9"
                    ),
                    array(
                        'class' => 'hi-meter',
                        'content' => "\\f4ca"
                    ),
                    array(
                        'class' => 'hi-meter2',
                        'content' => "\\f4cb"
                    ),
                    array(
                        'class' => 'hi-hammer2',
                        'content' => "\\f4cc"
                    ),
                    array(
                        'class' => 'hi-fire',
                        'content' => "\\f4cd"
                    ),
                    array(
                        'class' => 'hi-lab',
                        'content' => "\\f4ce"
                    ),
                    array(
                        'class' => 'hi-magnet',
                        'content' => "\\f4cf"
                    ),
                    array(
                        'class' => 'hi-bin',
                        'content' => "\\f4d0"
                    ),
                    array(
                        'class' => 'hi-bin2',
                        'content' => "\\f4d1"
                    ),
                    array(
                        'class' => 'hi-briefcase',
                        'content' => "\\f4d2"
                    ),
                    array(
                        'class' => 'hi-airplane',
                        'content' => "\\f4d3"
                    ),
                    array(
                        'class' => 'hi-truck',
                        'content' => "\\f4d4"
                    ),
                    array(
                        'class' => 'hi-road',
                        'content' => "\\f4d5"
                    ),
                    array(
                        'class' => 'hi-accessibility',
                        'content' => "\\f4d6"
                    ),
                    array(
                        'class' => 'hi-target',
                        'content' => "\\f4d7"
                    ),
                    array(
                        'class' => 'hi-shield',
                        'content' => "\\f4d8"
                    ),
                    array(
                        'class' => 'hi-power',
                        'content' => "\\f4d9"
                    ),
                    array(
                        'class' => 'hi-switch',
                        'content' => "\\f4da"
                    ),
                    array(
                        'class' => 'hi-power-cord',
                        'content' => "\\f4db"
                    ),
                    array(
                        'class' => 'hi-clipboard',
                        'content' => "\\f4dc"
                    ),
                    array(
                        'class' => 'hi-list-numbered',
                        'content' => "\\f4dd"
                    ),
                    array(
                        'class' => 'hi-list',
                        'content' => "\\f4de"
                    ),
                    array(
                        'class' => 'hi-list2',
                        'content' => "\\f4df"
                    ),
                    array(
                        'class' => 'hi-tree',
                        'content' => "\\f4e0"
                    ),
                    array(
                        'class' => 'hi-menu',
                        'content' => "\\f4e1"
                    ),
                    array(
                        'class' => 'hi-menu2',
                        'content' => "\\f4e2"
                    ),
                    array(
                        'class' => 'hi-menu3',
                        'content' => "\\f4e3"
                    ),
                    array(
                        'class' => 'hi-menu4',
                        'content' => "\\f4e4"
                    ),
                    array(
                        'class' => 'hi-cloud',
                        'content' => "\\f4e5"
                    ),
                    array(
                        'class' => 'hi-cloud-download',
                        'content' => "\\f4e6"
                    ),
                    array(
                        'class' => 'hi-cloud-upload',
                        'content' => "\\f4e7"
                    ),
                    array(
                        'class' => 'hi-cloud-check',
                        'content' => "\\f4e8"
                    ),
                    array(
                        'class' => 'hi-download2',
                        'content' => "\\f4e9"
                    ),
                    array(
                        'class' => 'hi-upload2',
                        'content' => "\\f4ea"
                    ),
                    array(
                        'class' => 'hi-download3',
                        'content' => "\\f4eb"
                    ),
                    array(
                        'class' => 'hi-upload3',
                        'content' => "\\f4ec"
                    ),
                    array(
                        'class' => 'hi-sphere',
                        'content' => "\\f4ed"
                    ),
                    array(
                        'class' => 'hi-earth',
                        'content' => "\\f4ee"
                    ),
                    array(
                        'class' => 'hi-link',
                        'content' => "\\f4ef"
                    ),
                    array(
                        'class' => 'hi-flag',
                        'content' => "\\f4f0"
                    ),
                    array(
                        'class' => 'hi-attachment',
                        'content' => "\\f4f1"
                    ),
                    array(
                        'class' => 'hi-eye',
                        'content' => "\\f4f2"
                    ),
                    array(
                        'class' => 'hi-eye-plus',
                        'content' => "\\f4f3"
                    ),
                    array(
                        'class' => 'hi-eye-minus',
                        'content' => "\\f4f4"
                    ),
                    array(
                        'class' => 'hi-eye-blocked',
                        'content' => "\\f4f5"
                    ),
                    array(
                        'class' => 'hi-bookmark',
                        'content' => "\\f4f6"
                    ),
                    array(
                        'class' => 'hi-bookmarks',
                        'content' => "\\f4f7"
                    ),
                    array(
                        'class' => 'hi-sun',
                        'content' => "\\f4f8"
                    ),
                    array(
                        'class' => 'hi-contrast',
                        'content' => "\\f4f9"
                    ),
                    array(
                        'class' => 'hi-brightness-contrast',
                        'content' => "\\f4fa"
                    ),
                    array(
                        'class' => 'hi-star-empty',
                        'content' => "\\f4fb"
                    ),
                    array(
                        'class' => 'hi-star-half',
                        'content' => "\\f4fc"
                    ),
                    array(
                        'class' => 'hi-star-full',
                        'content' => "\\f4fd"
                    ),
                    array(
                        'class' => 'hi-heart',
                        'content' => "\\f4fe"
                    ),
                    array(
                        'class' => 'hi-heart-broken',
                        'content' => "\\f4ff"
                    ),
                    array(
                        'class' => 'hi-man',
                        'content' => "\\f500"
                    ),
                    array(
                        'class' => 'hi-woman',
                        'content' => "\\f501"
                    ),
                    array(
                        'class' => 'hi-man-woman',
                        'content' => "\\f502"
                    ),
                    array(
                        'class' => 'hi-happy',
                        'content' => "\\f503"
                    ),
                    array(
                        'class' => 'hi-happy2',
                        'content' => "\\f504"
                    ),
                    array(
                        'class' => 'hi-smile',
                        'content' => "\\f505"
                    ),
                    array(
                        'class' => 'hi-smile2',
                        'content' => "\\f506"
                    ),
                    array(
                        'class' => 'hi-tongue',
                        'content' => "\\f507"
                    ),
                    array(
                        'class' => 'hi-tongue2',
                        'content' => "\\f508"
                    ),
                    array(
                        'class' => 'hi-sad',
                        'content' => "\\f509"
                    ),
                    array(
                        'class' => 'hi-sad2',
                        'content' => "\\f50a"
                    ),
                    array(
                        'class' => 'hi-wink',
                        'content' => "\\f50b"
                    ),
                    array(
                        'class' => 'hi-wink2',
                        'content' => "\\f50c"
                    ),
                    array(
                        'class' => 'hi-grin',
                        'content' => "\\f50d"
                    ),
                    array(
                        'class' => 'hi-grin2',
                        'content' => "\\f50e"
                    ),
                    array(
                        'class' => 'hi-cool',
                        'content' => "\\f50f"
                    ),
                    array(
                        'class' => 'hi-cool2',
                        'content' => "\\f510"
                    ),
                    array(
                        'class' => 'hi-angry',
                        'content' => "\\f511"
                    ),
                    array(
                        'class' => 'hi-angry2',
                        'content' => "\\f512"
                    ),
                    array(
                        'class' => 'hi-evil',
                        'content' => "\\f513"
                    ),
                    array(
                        'class' => 'hi-evil2',
                        'content' => "\\f514"
                    ),
                    array(
                        'class' => 'hi-shocked',
                        'content' => "\\f515"
                    ),
                    array(
                        'class' => 'hi-shocked2',
                        'content' => "\\f516"
                    ),
                    array(
                        'class' => 'hi-baffled',
                        'content' => "\\f517"
                    ),
                    array(
                        'class' => 'hi-baffled2',
                        'content' => "\\f518"
                    ),
                    array(
                        'class' => 'hi-confused',
                        'content' => "\\f519"
                    ),
                    array(
                        'class' => 'hi-confused2',
                        'content' => "\\f51a"
                    ),
                    array(
                        'class' => 'hi-neutral',
                        'content' => "\\f51b"
                    ),
                    array(
                        'class' => 'hi-neutral2',
                        'content' => "\\f51c"
                    ),
                    array(
                        'class' => 'hi-hipster',
                        'content' => "\\f51d"
                    ),
                    array(
                        'class' => 'hi-hipster2',
                        'content' => "\\f51e"
                    ),
                    array(
                        'class' => 'hi-wondering',
                        'content' => "\\f51f"
                    ),
                    array(
                        'class' => 'hi-wondering2',
                        'content' => "\\f520"
                    ),
                    array(
                        'class' => 'hi-sleepy',
                        'content' => "\\f521"
                    ),
                    array(
                        'class' => 'hi-sleepy2',
                        'content' => "\\f522"
                    ),
                    array(
                        'class' => 'hi-frustrated',
                        'content' => "\\f523"
                    ),
                    array(
                        'class' => 'hi-frustrated2',
                        'content' => "\\f524"
                    ),
                    array(
                        'class' => 'hi-crying',
                        'content' => "\\f525"
                    ),
                    array(
                        'class' => 'hi-crying2',
                        'content' => "\\f526"
                    ),
                    array(
                        'class' => 'hi-point-up',
                        'content' => "\\f527"
                    ),
                    array(
                        'class' => 'hi-point-right',
                        'content' => "\\f528"
                    ),
                    array(
                        'class' => 'hi-point-down',
                        'content' => "\\f529"
                    ),
                    array(
                        'class' => 'hi-point-left',
                        'content' => "\\f52a"
                    ),
                    array(
                        'class' => 'hi-warning',
                        'content' => "\\f52b"
                    ),
                    array(
                        'class' => 'hi-notification',
                        'content' => "\\f52c"
                    ),
                    array(
                        'class' => 'hi-question',
                        'content' => "\\f52d"
                    ),
                    array(
                        'class' => 'hi-plus',
                        'content' => "\\f52e"
                    ),
                    array(
                        'class' => 'hi-minus',
                        'content' => "\\f52f"
                    ),
                    array(
                        'class' => 'hi-info',
                        'content' => "\\f530"
                    ),
                    array(
                        'class' => 'hi-cancel-circle',
                        'content' => "\\f531"
                    ),
                    array(
                        'class' => 'hi-blocked',
                        'content' => "\\f532"
                    ),
                    array(
                        'class' => 'hi-cross',
                        'content' => "\\f533"
                    ),
                    array(
                        'class' => 'hi-checkmark',
                        'content' => "\\f534"
                    ),
                    array(
                        'class' => 'hi-checkmark2',
                        'content' => "\\f535"
                    ),
                    array(
                        'class' => 'hi-spell-check',
                        'content' => "\\f536"
                    ),
                    array(
                        'class' => 'hi-enter',
                        'content' => "\\f537"
                    ),
                    array(
                        'class' => 'hi-exit',
                        'content' => "\\f538"
                    ),
                    array(
                        'class' => 'hi-play2',
                        'content' => "\\f539"
                    ),
                    array(
                        'class' => 'hi-pause',
                        'content' => "\\f53a"
                    ),
                    array(
                        'class' => 'hi-stop',
                        'content' => "\\f53b"
                    ),
                    array(
                        'class' => 'hi-previous',
                        'content' => "\\f53c"
                    ),
                    array(
                        'class' => 'hi-next',
                        'content' => "\\f53d"
                    ),
                    array(
                        'class' => 'hi-backward',
                        'content' => "\\f53e"
                    ),
                    array(
                        'class' => 'hi-forward2',
                        'content' => "\\f53f"
                    ),
                    array(
                        'class' => 'hi-play3',
                        'content' => "\\f540"
                    ),
                    array(
                        'class' => 'hi-pause2',
                        'content' => "\\f541"
                    ),
                    array(
                        'class' => 'hi-stop2',
                        'content' => "\\f542"
                    ),
                    array(
                        'class' => 'hi-backward2',
                        'content' => "\\f543"
                    ),
                    array(
                        'class' => 'hi-forward3',
                        'content' => "\\f544"
                    ),
                    array(
                        'class' => 'hi-first',
                        'content' => "\\f545"
                    ),
                    array(
                        'class' => 'hi-last',
                        'content' => "\\f546"
                    ),
                    array(
                        'class' => 'hi-previous2',
                        'content' => "\\f547"
                    ),
                    array(
                        'class' => 'hi-next2',
                        'content' => "\\f548"
                    ),
                    array(
                        'class' => 'hi-eject',
                        'content' => "\\f549"
                    ),
                    array(
                        'class' => 'hi-volume-high',
                        'content' => "\\f54a"
                    ),
                    array(
                        'class' => 'hi-volume-medium',
                        'content' => "\\f54b"
                    ),
                    array(
                        'class' => 'hi-volume-low',
                        'content' => "\\f54c"
                    ),
                    array(
                        'class' => 'hi-volume-mute',
                        'content' => "\\f54d"
                    ),
                    array(
                        'class' => 'hi-volume-mute2',
                        'content' => "\\f54e"
                    ),
                    array(
                        'class' => 'hi-volume-increase',
                        'content' => "\\f54f"
                    ),
                    array(
                        'class' => 'hi-volume-decrease',
                        'content' => "\\f550"
                    ),
                    array(
                        'class' => 'hi-loop',
                        'content' => "\\f551"
                    ),
                    array(
                        'class' => 'hi-loop2',
                        'content' => "\\f552"
                    ),
                    array(
                        'class' => 'hi-infinite',
                        'content' => "\\f553"
                    ),
                    array(
                        'class' => 'hi-shuffle',
                        'content' => "\\f554"
                    ),
                    array(
                        'class' => 'hi-arrow-up-left',
                        'content' => "\\f555"
                    ),
                    array(
                        'class' => 'hi-arrow-up',
                        'content' => "\\f556"
                    ),
                    array(
                        'class' => 'hi-arrow-up-right',
                        'content' => "\\f557"
                    ),
                    array(
                        'class' => 'hi-arrow-right',
                        'content' => "\\f558"
                    ),
                    array(
                        'class' => 'hi-arrow-down-right',
                        'content' => "\\f559"
                    ),
                    array(
                        'class' => 'hi-arrow-down',
                        'content' => "\\f55a"
                    ),
                    array(
                        'class' => 'hi-arrow-down-left',
                        'content' => "\\f55b"
                    ),
                    array(
                        'class' => 'hi-arrow-left',
                        'content' => "\\f55c"
                    ),
                    array(
                        'class' => 'hi-arrow-up-left2',
                        'content' => "\\f55d"
                    ),
                    array(
                        'class' => 'hi-arrow-up2',
                        'content' => "\\f55e"
                    ),
                    array(
                        'class' => 'hi-arrow-up-right2',
                        'content' => "\\f55f"
                    ),
                    array(
                        'class' => 'hi-arrow-right2',
                        'content' => "\\f560"
                    ),
                    array(
                        'class' => 'hi-arrow-down-right2',
                        'content' => "\\f561"
                    ),
                    array(
                        'class' => 'hi-arrow-down2',
                        'content' => "\\f562"
                    ),
                    array(
                        'class' => 'hi-arrow-down-left2',
                        'content' => "\\f563"
                    ),
                    array(
                        'class' => 'hi-arrow-left2',
                        'content' => "\\f564"
                    ),
                    array(
                        'class' => 'hi-circle-up',
                        'content' => "\\f565"
                    ),
                    array(
                        'class' => 'hi-circle-right',
                        'content' => "\\f566"
                    ),
                    array(
                        'class' => 'hi-circle-down',
                        'content' => "\\f567"
                    ),
                    array(
                        'class' => 'hi-circle-left',
                        'content' => "\\f568"
                    ),
                    array(
                        'class' => 'hi-tab',
                        'content' => "\\f569"
                    ),
                    array(
                        'class' => 'hi-move-up',
                        'content' => "\\f56a"
                    ),
                    array(
                        'class' => 'hi-move-down',
                        'content' => "\\f56b"
                    ),
                    array(
                        'class' => 'hi-sort-alpha-asc',
                        'content' => "\\f56c"
                    ),
                    array(
                        'class' => 'hi-sort-alpha-desc',
                        'content' => "\\f56d"
                    ),
                    array(
                        'class' => 'hi-sort-numeric-asc',
                        'content' => "\\f56e"
                    ),
                    array(
                        'class' => 'hi-sort-numberic-desc',
                        'content' => "\\f56f"
                    ),
                    array(
                        'class' => 'hi-sort-amount-asc',
                        'content' => "\\f570"
                    ),
                    array(
                        'class' => 'hi-sort-amount-desc',
                        'content' => "\\f571"
                    ),
                    array(
                        'class' => 'hi-command',
                        'content' => "\\f572"
                    ),
                    array(
                        'class' => 'hi-shift',
                        'content' => "\\f573"
                    ),
                    array(
                        'class' => 'hi-ctrl',
                        'content' => "\\f574"
                    ),
                    array(
                        'class' => 'hi-opt',
                        'content' => "\\f575"
                    ),
                    array(
                        'class' => 'hi-checkbox-checked',
                        'content' => "\\f576"
                    ),
                    array(
                        'class' => 'hi-checkbox-unchecked',
                        'content' => "\\f577"
                    ),
                    array(
                        'class' => 'hi-radio-checked',
                        'content' => "\\f578"
                    ),
                    array(
                        'class' => 'hi-radio-checked2',
                        'content' => "\\f579"
                    ),
                    array(
                        'class' => 'hi-radio-unchecked',
                        'content' => "\\f57a"
                    ),
                    array(
                        'class' => 'hi-crop',
                        'content' => "\\f57b"
                    ),
                    array(
                        'class' => 'hi-make-group',
                        'content' => "\\f57c"
                    ),
                    array(
                        'class' => 'hi-ungroup',
                        'content' => "\\f57d"
                    ),
                    array(
                        'class' => 'hi-scissors',
                        'content' => "\\f57e"
                    ),
                    array(
                        'class' => 'hi-filter',
                        'content' => "\\f57f"
                    ),
                    array(
                        'class' => 'hi-font',
                        'content' => "\\f580"
                    ),
                    array(
                        'class' => 'hi-ligature',
                        'content' => "\\f581"
                    ),
                    array(
                        'class' => 'hi-ligature2',
                        'content' => "\\f582"
                    ),
                    array(
                        'class' => 'hi-text-height',
                        'content' => "\\f583"
                    ),
                    array(
                        'class' => 'hi-text-width',
                        'content' => "\\f584"
                    ),
                    array(
                        'class' => 'hi-font-size',
                        'content' => "\\f585"
                    ),
                    array(
                        'class' => 'hi-bold',
                        'content' => "\\f586"
                    ),
                    array(
                        'class' => 'hi-underline',
                        'content' => "\\f587"
                    ),
                    array(
                        'class' => 'hi-italic',
                        'content' => "\\f588"
                    ),
                    array(
                        'class' => 'hi-strikethrough',
                        'content' => "\\f589"
                    ),
                    array(
                        'class' => 'hi-omega',
                        'content' => "\\f58a"
                    ),
                    array(
                        'class' => 'hi-sigma',
                        'content' => "\\f58b"
                    ),
                    array(
                        'class' => 'hi-page-break',
                        'content' => "\\f58c"
                    ),
                    array(
                        'class' => 'hi-superscript',
                        'content' => "\\f58d"
                    ),
                    array(
                        'class' => 'hi-subscript',
                        'content' => "\\f58e"
                    ),
                    array(
                        'class' => 'hi-superscript2',
                        'content' => "\\f58f"
                    ),
                    array(
                        'class' => 'hi-subscript2',
                        'content' => "\\f590"
                    ),
                    array(
                        'class' => 'hi-text-color',
                        'content' => "\\f591"
                    ),
                    array(
                        'class' => 'hi-pagebreak',
                        'content' => "\\f592"
                    ),
                    array(
                        'class' => 'hi-clear-formatting',
                        'content' => "\\f593"
                    ),
                    array(
                        'class' => 'hi-table',
                        'content' => "\\f594"
                    ),
                    array(
                        'class' => 'hi-table2',
                        'content' => "\\f595"
                    ),
                    array(
                        'class' => 'hi-insert-template',
                        'content' => "\\f596"
                    ),
                    array(
                        'class' => 'hi-pilcrow',
                        'content' => "\\f597"
                    ),
                    array(
                        'class' => 'hi-ltr',
                        'content' => "\\f598"
                    ),
                    array(
                        'class' => 'hi-rtl',
                        'content' => "\\f599"
                    ),
                    array(
                        'class' => 'hi-section',
                        'content' => "\\f59a"
                    ),
                    array(
                        'class' => 'hi-paragraph-left',
                        'content' => "\\f59b"
                    ),
                    array(
                        'class' => 'hi-paragraph-center',
                        'content' => "\\f59c"
                    ),
                    array(
                        'class' => 'hi-paragraph-right',
                        'content' => "\\f59d"
                    ),
                    array(
                        'class' => 'hi-paragraph-justify',
                        'content' => "\\f59e"
                    ),
                    array(
                        'class' => 'hi-indent-increase',
                        'content' => "\\f59f"
                    ),
                    array(
                        'class' => 'hi-indent-decrease',
                        'content' => "\\f5a0"
                    ),
                    array(
                        'class' => 'hi-share',
                        'content' => "\\f5a1"
                    ),
                    array(
                        'class' => 'hi-new-tab',
                        'content' => "\\f5a2"
                    ),
                    array(
                        'class' => 'hi-embed',
                        'content' => "\\f5a3"
                    ),
                    array(
                        'class' => 'hi-embed2',
                        'content' => "\\f5a4"
                    ),
                    array(
                        'class' => 'hi-terminal',
                        'content' => "\\f5a5"
                    ),
                    array(
                        'class' => 'hi-share2',
                        'content' => "\\f5a6"
                    ),
                    array(
                        'class' => 'hi-mail',
                        'content' => "\\f5a7"
                    ),
                    array(
                        'class' => 'hi-mail2',
                        'content' => "\\f5a8"
                    ),
                    array(
                        'class' => 'hi-mail3',
                        'content' => "\\f5a9"
                    ),
                    array(
                        'class' => 'hi-mail4',
                        'content' => "\\f5aa"
                    ),
                    array(
                        'class' => 'hi-amazon',
                        'content' => "\\f5ab"
                    ),
                    array(
                        'class' => 'hi-google',
                        'content' => "\\f5ac"
                    ),
                    array(
                        'class' => 'hi-google2',
                        'content' => "\\f5ad"
                    ),
                    array(
                        'class' => 'hi-google3',
                        'content' => "\\f5ae"
                    ),
                    array(
                        'class' => 'hi-google-plus',
                        'content' => "\\f5af"
                    ),
                    array(
                        'class' => 'hi-google-plus2',
                        'content' => "\\f5b0"
                    ),
                    array(
                        'class' => 'hi-google-plus3',
                        'content' => "\\f5b1"
                    ),
                    array(
                        'class' => 'hi-google-drive',
                        'content' => "\\f5b3"
                    ),
                    array(
                        'class' => 'hi-facebook2',
                        'content' => "\\f5b5"
                    ),
                    array(
                        'class' => 'hi-instagram',
                        'content' => "\\f5b6"
                    ),
                    array(
                        'class' => 'hi-whatsapp',
                        'content' => "\\f5b7"
                    ),
                    array(
                        'class' => 'hi-spotify',
                        'content' => "\\f5b8"
                    ),
                    array(
                        'class' => 'hi-telegram',
                        'content' => "\\f5b9"
                    ),
                    array(
                        'class' => 'hi-twitter',
                        'content' => "\\f5ba"
                    ),
                    array(
                        'class' => 'hi-vine',
                        'content' => "\\f5bb"
                    ),
                    array(
                        'class' => 'hi-vk-box',
                        'content' => "\\f5bc"
                    ),
                    array(
                        'class' => 'hi-renren',
                        'content' => "\\f5bd"
                    ),
                    array(
                        'class' => 'hi-sina-weibo',
                        'content' => "\\f5be"
                    ),
                    array(
                        'class' => 'hi-rss',
                        'content' => "\\f5bf"
                    ),
                    array(
                        'class' => 'hi-rss-box',
                        'content' => "\\f5c0"
                    ),
                    array(
                        'class' => 'hi-youtube',
                        'content' => "\\f5c1"
                    ),
                    array(
                        'class' => 'hi-youtube-logo',
                        'content' => "\\f5c2"
                    ),
                    array(
                        'class' => 'hi-vimeo',
                        'content' => "\\f5c4"
                    ),
                    array(
                        'class' => 'hi-vimeo-box',
                        'content' => "\\f5c5"
                    ),
                    array(
                        'class' => 'hi-lanyrd',
                        'content' => "\\f5c6"
                    ),
                    array(
                        'class' => 'hi-flickr2',
                        'content' => "\\f5c8"
                    ),
                    array(
                        'class' => 'hi-flickr3',
                        'content' => "\\f5c9"
                    ),
                    array(
                        'class' => 'hi-flickr4',
                        'content' => "\\f5ca"
                    ),
                    array(
                        'class' => 'hi-dribbble',
                        'content' => "\\f5cb"
                    ),
                    array(
                        'class' => 'hi-behance',
                        'content' => "\\f5cc"
                    ),
                    array(
                        'class' => 'hi-behance-box',
                        'content' => "\\f5cd"
                    ),
                    array(
                        'class' => 'hi-deviantart',
                        'content' => "\\f5ce"
                    ),
                    array(
                        'class' => 'hi-500px-old',
                        'content' => "\\f5cf"
                    ),
                    array(
                        'class' => 'hi-steam',
                        'content' => "\\f5d0"
                    ),
                    array(
                        'class' => 'hi-steam2',
                        'content' => "\\f5d1"
                    ),
                    array(
                        'class' => 'hi-dropbox',
                        'content' => "\\f5d2"
                    ),
                    array(
                        'class' => 'hi-onedrive',
                        'content' => "\\f5d3"
                    ),
                    array(
                        'class' => 'hi-github',
                        'content' => "\\f5d4"
                    ),
                    array(
                        'class' => 'hi-npm',
                        'content' => "\\f5d5"
                    ),
                    array(
                        'class' => 'hi-basecamp',
                        'content' => "\\f5d6"
                    ),
                    array(
                        'class' => 'hi-trello',
                        'content' => "\\f5d7"
                    ),
                    array(
                        'class' => 'hi-wordpress',
                        'content' => "\\f5d8"
                    ),
                    array(
                        'class' => 'hi-joomla',
                        'content' => "\\f5d9"
                    ),
                    array(
                        'class' => 'hi-ello',
                        'content' => "\\f5da"
                    ),
                    array(
                        'class' => 'hi-blogger',
                        'content' => "\\f5db"
                    ),
                    array(
                        'class' => 'hi-blogger-box',
                        'content' => "\\f5dc"
                    ),
                    array(
                        'class' => 'hi-tumblr',
                        'content' => "\\f5dd"
                    ),
                    array(
                        'class' => 'hi-tumblr2',
                        'content' => "\\f5de"
                    ),
                    array(
                        'class' => 'hi-yahoo',
                        'content' => "\\f5df"
                    ),
                    array(
                        'class' => 'hi-yahoo-box',
                        'content' => "\\f5e0"
                    ),
                    array(
                        'class' => 'hi-tux',
                        'content' => "\\f5e1"
                    ),
                    array(
                        'class' => 'hi-finder',
                        'content' => "\\f5e3"
                    ),
                    array(
                        'class' => 'hi-android',
                        'content' => "\\f5e4"
                    ),
                    array(
                        'class' => 'hi-windows',
                        'content' => "\\f5e5"
                    ),
                    array(
                        'class' => 'hi-windows8',
                        'content' => "\\f5e6"
                    ),
                    array(
                        'class' => 'hi-soundcloud',
                        'content' => "\\f5e7"
                    ),
                    array(
                        'class' => 'hi-soundcloud-box',
                        'content' => "\\f5e8"
                    ),
                    array(
                        'class' => 'hi-skype',
                        'content' => "\\f5e9"
                    ),
                    array(
                        'class' => 'hi-reddit',
                        'content' => "\\f5ea"
                    ),
                    array(
                        'class' => 'hi-hackernews',
                        'content' => "\\f5eb"
                    ),
                    array(
                        'class' => 'hi-wikipedia',
                        'content' => "\\f5ec"
                    ),
                    array(
                        'class' => 'hi-linkedin',
                        'content' => "\\f5ed"
                    ),
                    array(
                        'class' => 'hi-lastfm',
                        'content' => "\\f5ef"
                    ),
                    array(
                        'class' => 'hi-lastfm-box',
                        'content' => "\\f5f0"
                    ),
                    array(
                        'class' => 'hi-delicious',
                        'content' => "\\f5f1"
                    ),
                    array(
                        'class' => 'hi-stumbleupon',
                        'content' => "\\f5f2"
                    ),
                    array(
                        'class' => 'hi-stumbleupon2',
                        'content' => "\\f5f3"
                    ),
                    array(
                        'class' => 'hi-stackoverflow',
                        'content' => "\\f5f4"
                    ),
                    array(
                        'class' => 'hi-pinterest',
                        'content' => "\\f5f5"
                    ),
                    array(
                        'class' => 'hi-pinterest2',
                        'content' => "\\f5f6"
                    ),
                    array(
                        'class' => 'hi-xing-box',
                        'content' => "\\f5f7"
                    ),
                    array(
                        'class' => 'hi-flattr',
                        'content' => "\\f5f9"
                    ),
                    array(
                        'class' => 'hi-foursquare',
                        'content' => "\\f5fa"
                    ),
                    array(
                        'class' => 'hi-yelp',
                        'content' => "\\f5fb"
                    ),
                    array(
                        'class' => 'hi-chrome',
                        'content' => "\\f5fd"
                    ),
                    array(
                        'class' => 'hi-firefox',
                        'content' => "\\f5fe"
                    ),
                    array(
                        'class' => 'hi-IE',
                        'content' => "\\f5ff"
                    ),
                    array(
                        'class' => 'hi-edge',
                        'content' => "\\f600"
                    ),
                    array(
                        'class' => 'hi-safari',
                        'content' => "\\f601"
                    ),
                    array(
                        'class' => 'hi-opera',
                        'content' => "\\f602"
                    ),
                    array(
                        'class' => 'hi-file-pdf',
                        'content' => "\\f603"
                    ),
                    array(
                        'class' => 'hi-file-openoffice',
                        'content' => "\\f604"
                    ),
                    array(
                        'class' => 'hi-file-word',
                        'content' => "\\f605"
                    ),
                    array(
                        'class' => 'hi-file-excel',
                        'content' => "\\f606"
                    ),
                    array(
                        'class' => 'hi-libreoffice',
                        'content' => "\\f607"
                    ),
                    array(
                        'class' => 'hi-html-five',
                        'content' => "\\f608"
                    ),
                    array(
                        'class' => 'hi-html-five2',
                        'content' => "\\f609"
                    ),
                    array(
                        'class' => 'hi-css3',
                        'content' => "\\f60a"
                    ),
                    array(
                        'class' => 'hi-git',
                        'content' => "\\f60b"
                    ),
                    array(
                        'class' => 'hi-codepen',
                        'content' => "\\f60c"
                    ),
                    array(
                        'class' => 'hi-svg',
                        'content' => "\\f60d"
                    ),
                    array(
                        'class' => 'hi-IcoMoon',
                        'content' => "\\f60e"
                    )
                );
                foreach ($haticons as $key => $value) {
                    ?>
                    <div class="haticons-box" tags="<?php echo $value['class'];?>">
                        <i class="<?php echo $value['class'];?>"></i>
                        <p class="haticons-data">class = <span class="select-all"><?php echo $value['class'];?></span><br />css-content = <span class="select-all">"<?php echo $value['content'];?>"</span></p>
                    </div>
                <?php }
            ?>
        </div>
    </div>
    <script type="text/javascript" src="/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/assets/js/custom.js"></script>
</body>

</html>