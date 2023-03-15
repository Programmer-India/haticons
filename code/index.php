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
    <link rel="stylesheet" type="text/css" media="all" href="/assets/css/style.css" />
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
        <p class="version">Version - 1.0.8</p>
    </div>
    <div class="modal cheatsheet-modal">
        <button class="close"></button>
        <input type="text" name="search-haticon" placeholder="Search Haticons here..." onkeyup="searchHaticons()">
        <div class="haticons-set">
            <?php
                $haticons = array(
                    array(
                        'class' => 'hi-aws',
                        'tags' =>'aws, Amazon Web Services',
                        'content'=> "\\f00a"
                    ),
                    array(
                        'class' => 'hi-network',
                        'tags' => 'network, web, net globe',
                        'content' => "\\e9aa"
                    ),
                    array(
                        'class' => 'hi-haticons',
                        'tags' => 'haticons, font-icons',
                        'content' => "\\f000"
                    ),
                    array(
                        'class' => 'hi-play',
                        'tags' => 'play',
                        'content' => "\\f001"
                    ),
                    array(
                        'class' => 'hi-paypal',
                        'tags' => 'paypal',
                        'content' => "\\f002"
                    ),
                    array(
                        'class' => 'hi-share1',
                        'tags' => 'share1',
                        'content' => "\\f003"
                    ),
                    array(
                        'class' => 'hi-launchpad',
                        'tags' => 'launchpad',
                        'content' => "\\f004"
                    ),
                    array(
                        'class' => 'hi-ubuntu',
                        'tags' => 'ubuntu',
                        'content' => "\\f005"
                    ),
                    array(
                        'class' => 'hi-filezilla',
                        'tags' => 'filezilla',
                        'content' => "\\f006"
                    ),
                    array(
                        'class' => 'hi-android',
                        'tags' => 'android',
                        'content' => "\\f007"
                    ),
                    array(
                        'class' => 'hi-apple',
                        'tags' => 'apple',
                        'content' => "\\f008"
                    ),
                    array(
                        'class' => 'hi-blackberry',
                        'tags' => 'blackberry',
                        'content' => "\\f009"
                    ),
                    array(
                        'class' => 'hi-aws',
                        'tags' => 'aws',
                        'content' => "\\f00a"
                    ),
                    array(
                        'class' => 'hi-amd',
                        'tags' => 'amd',
                        'content' => "\\f00b"
                    ),
                    array(
                        'class' => 'hi-angellist',
                        'tags' => 'angellist',
                        'content' => "\\f00c"
                    ),
                    array(
                        'class' => 'hi-applemusic',
                        'tags' => 'applemusic',
                        'content' => "\\f00d"
                    ),
                    array(
                        'class' => 'hi-applepay',
                        'tags' => 'applepay',
                        'content' => "\\f00e"
                    ),
                    array(
                        'class' => 'hi-archlinux',
                        'tags' => 'archlinux',
                        'content' => "\\f00f"
                    ),
                    array(
                        'class' => 'hi-blob',
                        'tags' => 'blob',
                        'content' => "\\f010"
                    ),
                    array(
                        'class' => 'hi-blog',
                        'tags' => 'blog',
                        'content' => "\\f011"
                    ),
                    array(
                        'class' => 'hi-cat-paw',
                        'tags' => 'cat-paw',
                        'content' => "\\f012"
                    ),
                    array(
                        'class' => 'hi-chrome',
                        'tags' => 'chrome',
                        'content' => "\\f013"
                    ),
                    array(
                        'class' => 'hi-coop',
                        'tags' => 'coop',
                        'content' => "\\f014"
                    ),
                    array(
                        'class' => 'hi-credit-card1',
                        'tags' => 'credit-card1',
                        'content' => "\\f015"
                    ),
                    array(
                        'class' => 'hi-doctor',
                        'tags' => 'doctor',
                        'content' => "\\f016"
                    ),
                    array(
                        'class' => 'hi-dog-paw',
                        'tags' => 'dog-paw',
                        'content' => "\\f017"
                    ),
                    array(
                        'class' => 'hi-drive',
                        'tags' => 'drive',
                        'content' => "\\f018"
                    ),
                    array(
                        'class' => 'hi-dropbox',
                        'tags' => 'dropbox',
                        'content' => "\\f019"
                    ),
                    array(
                        'class' => 'hi-artstation',
                        'tags' => 'artstation',
                        'content' => "\\f01a"
                    ),
                    array(
                        'class' => 'hi-asana',
                        'tags' => 'asana',
                        'content' => "\\f01b"
                    ),
                    array(
                        'class' => 'hi-at-and-t',
                        'tags' => 'at-and-t',
                        'content' => "\\f01c"
                    ),
                    array(
                        'class' => 'hi-atlassian',
                        'tags' => 'atlassian',
                        'content' => "\\f01d"
                    ),
                    array(
                        'class' => 'hi-atom',
                        'tags' => 'atom',
                        'content' => "\\f01e"
                    ),
                    array(
                        'class' => 'hi-aurelia',
                        'tags' => 'aurelia',
                        'content' => "\\f01f"
                    ),
                    array(
                        'class' => 'hi-edge',
                        'tags' => 'edge',
                        'content' => "\\f020"
                    ),
                    array(
                        'class' => 'hi-facebook',
                        'tags' => 'facebook',
                        'content' => "\\f021"
                    ),
                    array(
                        'class' => 'hi-fire',
                        'tags' => 'fire',
                        'content' => "\\f022"
                    ),
                    array(
                        'class' => 'hi-folder1',
                        'tags' => 'folder1',
                        'content' => "\\f023"
                    ),
                    array(
                        'class' => 'hi-google-assistant',
                        'tags' => 'google-assistant',
                        'content' => "\\f024"
                    ),
                    array(
                        'class' => 'hi-google-plus',
                        'tags' => 'google-plus',
                        'content' => "\\f025"
                    ),
                    array(
                        'class' => 'hi-google',
                        'tags' => 'google',
                        'content' => "\\f026"
                    ),
                    array(
                        'class' => 'hi-hangout',
                        'tags' => 'hangout',
                        'content' => "\\f027"
                    ),
                    array(
                        'class' => 'hi-hard-disk',
                        'tags' => 'hard-disk',
                        'content' => "\\f028"
                    ),
                    array(
                        'class' => 'hi-home',
                        'tags' => 'home',
                        'content' => "\\f029"
                    ),
                    array(
                        'class' => 'hi-automatic',
                        'tags' => 'automatic',
                        'content' => "\\f02a"
                    ),
                    array(
                        'class' => 'hi-autotask',
                        'tags' => 'autotask',
                        'content' => "\\f02b"
                    ),
                    array(
                        'class' => 'hi-azurepipelines',
                        'tags' => 'azurepipelines',
                        'content' => "\\f02c"
                    ),
                    array(
                        'class' => 'hi-basecamp',
                        'tags' => 'basecamp',
                        'content' => "\\f02d"
                    ),
                    array(
                        'class' => 'hi-behance',
                        'tags' => 'behance',
                        'content' => "\\f02e"
                    ),
                    array(
                        'class' => 'hi-bing',
                        'tags' => 'bing',
                        'content' => "\\f02f"
                    ),
                    array(
                        'class' => 'hi-html5',
                        'tags' => 'html5',
                        'content' => "\\f030"
                    ),
                    array(
                        'class' => 'hi-hut',
                        'tags' => 'hut',
                        'content' => "\\f031"
                    ),
                    array(
                        'class' => 'hi-instagram',
                        'tags' => 'instagram',
                        'content' => "\\f032"
                    ),
                    array(
                        'class' => 'hi-landline',
                        'tags' => 'landline',
                        'content' => "\\f033"
                    ),
                    array(
                        'class' => 'hi-linkedin',
                        'tags' => 'linkedin',
                        'content' => "\\f034"
                    ),
                    array(
                        'class' => 'hi-map',
                        'tags' => 'map',
                        'content' => "\\f035"
                    ),
                    array(
                        'class' => 'hi-message',
                        'tags' => 'message',
                        'content' => "\\f036"
                    ),
                    array(
                        'class' => 'hi-music',
                        'tags' => 'music',
                        'content' => "\\f037"
                    ),
                    array(
                        'class' => 'hi-npm',
                        'tags' => 'npm',
                        'content' => "\\f038"
                    ),
                    array(
                        'class' => 'hi-pacman',
                        'tags' => 'pacman',
                        'content' => "\\f039"
                    ),
                    array(
                        'class' => 'hi-bitbucket',
                        'tags' => 'bitbucket',
                        'content' => "\\f03a"
                    ),
                    array(
                        'class' => 'hi-bitly',
                        'tags' => 'bitly',
                        'content' => "\\f03b"
                    ),
                    array(
                        'class' => 'hi-blender',
                        'tags' => 'blender',
                        'content' => "\\f03c"
                    ),
                    array(
                        'class' => 'hi-bootstrap',
                        'tags' => 'bootstrap',
                        'content' => "\\f03d"
                    ),
                    array(
                        'class' => 'hi-bower',
                        'tags' => 'bower',
                        'content' => "\\f03e"
                    ),
                    array(
                        'class' => 'hi-cakephp',
                        'tags' => 'cakephp',
                        'content' => "\\f03f"
                    ),
                    array(
                        'class' => 'hi-pencil1',
                        'tags' => 'pencil1',
                        'content' => "\\f040"
                    ),
                    array(
                        'class' => 'hi-phone',
                        'tags' => 'phone',
                        'content' => "\\f041"
                    ),
                    array(
                        'class' => 'hi-picasa',
                        'tags' => 'picasa',
                        'content' => "\\f042"
                    ),
                    array(
                        'class' => 'hi-reddit',
                        'tags' => 'reddit',
                        'content' => "\\f043"
                    ),
                    array(
                        'class' => 'hi-skype',
                        'tags' => 'skype',
                        'content' => "\\f044"
                    ),
                    array(
                        'class' => 'hi-spanchat',
                        'tags' => 'spanchat',
                        'content' => "\\f045"
                    ),
                    array(
                        'class' => 'hi-star1',
                        'tags' => 'star1',
                        'content' => "\\f046"
                    ),
                    array(
                        'class' => 'hi-trello',
                        'tags' => 'trello',
                        'content' => "\\f047"
                    ),
                    array(
                        'class' => 'hi-trophy',
                        'tags' => 'trophy',
                        'content' => "\\f048"
                    ),
                    array(
                        'class' => 'hi-twitter-font',
                        'tags' => 'twitter-font',
                        'content' => "\\f049"
                    ),
                    array(
                        'class' => 'hi-campaignmonitor',
                        'tags' => 'campaignmonitor',
                        'content' => "\\f04a"
                    ),
                    array(
                        'class' => 'hi-dailymotion',
                        'tags' => 'dailymotion',
                        'content' => "\\f04b"
                    ),
                    array(
                        'class' => 'hi-coffeescript',
                        'tags' => 'coffeescript',
                        'content' => "\\f04c"
                    ),
                    array(
                        'class' => 'hi-conda-forge',
                        'tags' => 'conda-forge',
                        'content' => "\\f04d"
                    ),
                    array(
                        'class' => 'hi-css3',
                        'tags' => 'css3',
                        'content' => "\\f04e"
                    ),
                    array(
                        'class' => 'hi-csswizardry',
                        'tags' => 'csswizardry',
                        'content' => "\\f04f"
                    ),
                    array(
                        'class' => 'hi-twitter',
                        'tags' => 'twitter',
                        'content' => "\\f050"
                    ),
                    array(
                        'class' => 'hi-wholensole',
                        'tags' => 'wholensole',
                        'content' => "\\f051"
                    ),
                    array(
                        'class' => 'hi-windows',
                        'tags' => 'windows',
                        'content' => "\\f052"
                    ),
                    array(
                        'class' => 'hi-youtube-play',
                        'tags' => 'youtube-play',
                        'content' => "\\f053"
                    ),
                    array(
                        'class' => 'hi-amazon',
                        'tags' => 'amazon',
                        'content' => "\\f054"
                    ),
                    array(
                        'class' => 'hi-redo1',
                        'tags' => 'redo1',
                        'content' => "\\f055"
                    ),
                    array(
                        'class' => 'hi-undo1',
                        'tags' => 'undo1',
                        'content' => "\\f056"
                    ),
                    array(
                        'class' => 'hi-profile',
                        'tags' => 'profile',
                        'content' => "\\f057"
                    ),
                    array(
                        'class' => 'hi-clubs',
                        'tags' => 'clubs',
                        'content' => "\\f058"
                    ),
                    array(
                        'class' => 'hi-spades',
                        'tags' => 'spades',
                        'content' => "\\f059"
                    ),
                    array(
                        'class' => 'hi-diamonds',
                        'tags' => 'diamonds',
                        'content' => "\\f05a"
                    ),
                    array(
                        'class' => 'hi-heart',
                        'tags' => 'heart',
                        'content' => "\\f05b"
                    ),
                    array(
                        'class' => 'hi-sim_card',
                        'tags' => 'sim_card',
                        'content' => "\\f05c"
                    ),
                    array(
                        'class' => 'hi-trash1',
                        'tags' => 'trash1',
                        'content' => "\\f05d"
                    ),
                    array(
                        'class' => 'hi-attachment1',
                        'tags' => 'attachment1',
                        'content' => "\\f05e"
                    ),
                    array(
                        'class' => 'hi-thumbs-down',
                        'tags' => 'thumbs-down',
                        'content' => "\\f05f"
                    ),
                    array(
                        'class' => 'hi-thumbs-up',
                        'tags' => 'thumbs-up',
                        'content' => "\\f060"
                    ),
                    array(
                        'class' => 'hi-to-do',
                        'tags' => 'to-do',
                        'content' => "\\f061"
                    ),
                    array(
                        'class' => 'hi-dream11',
                        'tags' => 'dream11',
                        'content' => "\\f062"
                    ),
                    array(
                        'class' => 'hi-suru',
                        'tags' => 'suru',
                        'content' => "\\f063"
                    ),
                    array(
                        'class' => 'hi-slack',
                        'tags' => 'slack',
                        'content' => "\\f064"
                    ),
                    array(
                        'class' => 'hi-microblog',
                        'tags' => 'microblog',
                        'content' => "\\f065"
                    ),
                    array(
                        'class' => 'hi-microgenetics',
                        'tags' => 'microgenetics',
                        'content' => "\\f066"
                    ),
                    array(
                        'class' => 'hi-microsoft',
                        'tags' => 'microsoft',
                        'content' => "\\f067"
                    ),
                    array(
                        'class' => 'hi-microsoft-access',
                        'tags' => 'microsoft-access',
                        'content' => "\\f068"
                    ),
                    array(
                        'class' => 'hi-microsoftexcel',
                        'tags' => 'microsoftexcel',
                        'content' => "\\f069"
                    ),
                    array(
                        'class' => 'hi-microsoft-one-note',
                        'tags' => 'microsoft-one-note',
                        'content' => "\\f06a"
                    ),
                    array(
                        'class' => 'hi-microsoft-outlook',
                        'tags' => 'microsoft-outlook',
                        'content' => "\\f06b"
                    ),
                    array(
                        'class' => 'hi-microsoft-power-point',
                        'tags' => 'microsoft-power-point',
                        'content' => "\\f06c"
                    ),
                    array(
                        'class' => 'hi-microsoft-word',
                        'tags' => 'microsoft-word',
                        'content' => "\\f06d"
                    ),
                    array(
                        'class' => 'hi-prismic',
                        'tags' => 'prismic',
                        'content' => "\\f06e"
                    ),
                    array(
                        'class' => 'hi-statamic',
                        'tags' => 'statamic',
                        'content' => "\\f06f"
                    ),
                    array(
                        'class' => 'hi-archive',
                        'tags' => 'archive',
                        'content' => "\\f070"
                    ),
                    array(
                        'class' => 'hi-library',
                        'tags' => 'library',
                        'content' => "\\f071"
                    ),
                    array(
                        'class' => 'hi-zoom-out1',
                        'tags' => 'zoom-out1',
                        'content' => "\\f072"
                    ),
                    array(
                        'class' => 'hi-bell1',
                        'tags' => 'bell1',
                        'content' => "\\f073"
                    ),
                    array(
                        'class' => 'hi-location',
                        'tags' => 'location',
                        'content' => "\\f074"
                    ),
                    array(
                        'class' => 'hi-allo',
                        'tags' => 'allo',
                        'content' => "\\f075"
                    ),
                    array(
                        'class' => 'hi-block',
                        'tags' => 'block',
                        'content' => "\\f076"
                    ),
                    array(
                        'class' => 'hi-book-my-show',
                        'tags' => 'book-my-show',
                        'content' => "\\f077"
                    ),
                    array(
                        'class' => 'hi-duo',
                        'tags' => 'duo',
                        'content' => "\\f078"
                    ),
                    array(
                        'class' => 'hi-electric',
                        'tags' => 'electric',
                        'content' => "\\f079"
                    ),
                    array(
                        'class' => 'hi-gaming-console',
                        'tags' => 'gaming-console',
                        'content' => "\\f07a"
                    ),
                    array(
                        'class' => 'hi-lego-face',
                        'tags' => 'lego-face',
                        'content' => "\\f07b"
                    ),
                    array(
                        'class' => 'hi-maestro',
                        'tags' => 'maestro',
                        'content' => "\\f07c"
                    ),
                    array(
                        'class' => 'hi-master-card',
                        'tags' => 'master-card',
                        'content' => "\\f07d"
                    ),
                    array(
                        'class' => 'hi-medium',
                        'tags' => 'medium',
                        'content' => "\\f07e"
                    ),
                    array(
                        'class' => 'hi-paytm',
                        'tags' => 'paytm',
                        'content' => "\\f07f"
                    ),
                    array(
                        'class' => 'hi-play-station',
                        'tags' => 'play-station',
                        'content' => "\\f080"
                    ),
                    array(
                        'class' => 'hi-plugin',
                        'tags' => 'plugin',
                        'content' => "\\f081"
                    ),
                    array(
                        'class' => 'hi-pocket',
                        'tags' => 'pocket',
                        'content' => "\\f082"
                    ),
                    array(
                        'class' => 'hi-programmerindia',
                        'tags' => 'programmerindia',
                        'content' => "\\f083"
                    ),
                    array(
                        'class' => 'hi-search1',
                        'tags' => 'search1',
                        'content' => "\\f084"
                    ),
                    array(
                        'class' => 'hi-ad-block-plus',
                        'tags' => 'ad-block-plus',
                        'content' => "\\f085"
                    ),
                    array(
                        'class' => 'hi-swiggy',
                        'tags' => 'swiggy',
                        'content' => "\\f086"
                    ),
                    array(
                        'class' => 'hi-tumblr',
                        'tags' => 'tumblr',
                        'content' => "\\f087"
                    ),
                    array(
                        'class' => 'hi-uber-driver',
                        'tags' => 'uber-driver',
                        'content' => "\\f088"
                    ),
                    array(
                        'class' => 'hi-uber-freight',
                        'tags' => 'uber-freight',
                        'content' => "\\f089"
                    ),
                    array(
                        'class' => 'hi-uber',
                        'tags' => 'uber',
                        'content' => "\\f08a"
                    ),
                    array(
                        'class' => 'hi-visa',
                        'tags' => 'visa',
                        'content' => "\\f08b"
                    ),
                    array(
                        'class' => 'hi-yash-raj',
                        'tags' => 'yash-raj',
                        'content' => "\\f08c"
                    ),
                    array(
                        'class' => 'hi-zomato',
                        'tags' => 'zomato',
                        'content' => "\\f08d"
                    ),
                    array(
                        'class' => 'hi-zoom-in1',
                        'tags' => 'zoom-in1',
                        'content' => "\\f08e"
                    ),
                    array(
                        'class' => 'hi-finder',
                        'tags' => 'finder',
                        'content' => "\\f08f"
                    ),
                    array(
                        'class' => 'hi-washing-machine',
                        'tags' => 'washing-machine',
                        'content' => "\\f090"
                    ),
                    array(
                        'class' => 'hi-tags',
                        'tags' => 'tags',
                        'content' => "\\f091"
                    ),
                    array(
                        'class' => 'hi-tag',
                        'tags' => 'tag',
                        'content' => "\\f092"
                    ),
                    array(
                        'class' => 'hi-more',
                        'tags' => 'more',
                        'content' => "\\f093"
                    ),
                    array(
                        'class' => 'hi-nav',
                        'tags' => 'nav',
                        'content' => "\\f094"
                    ),
                    array(
                        'class' => 'hi-help',
                        'tags' => 'help',
                        'content' => "\\f095"
                    ),
                    array(
                        'class' => 'hi-gmail',
                        'tags' => 'gmail',
                        'content' => "\\f096"
                    ),
                    array(
                        'class' => 'hi-letterboxd1',
                        'tags' => 'letterboxd1',
                        'content' => "\\f097"
                    ),
                    array(
                        'class' => 'hi-mailchimp',
                        'tags' => 'mailchimp',
                        'content' => "\\f098"
                    ),
                    array(
                        'class' => 'hi-mailru',
                        'tags' => 'mailru',
                        'content' => "\\f099"
                    ),
                    array(
                        'class' => 'hi-protonmail',
                        'tags' => 'protonmail',
                        'content' => "\\f09a"
                    ),
                    array(
                        'class' => 'hi-envelope1',
                        'tags' => 'envelope1',
                        'content' => "\\f09b"
                    ),
                    array(
                        'class' => 'hi-envelope-open',
                        'tags' => 'envelope-open',
                        'content' => "\\f09c"
                    ),
                    array(
                        'class' => 'hi-paper-plane1',
                        'tags' => 'paper-plane1',
                        'content' => "\\f09d"
                    ),
                    array(
                        'class' => 'hi-user1',
                        'tags' => 'user1',
                        'content' => "\\f09e"
                    ),
                    array(
                        'class' => 'hi-user-plus',
                        'tags' => 'user-plus',
                        'content' => "\\f09f"
                    ),
                    array(
                        'class' => 'hi-unity',
                        'tags' => 'unity',
                        'content' => "\\f0a0"
                    ),
                    array(
                        'class' => 'hi-upwork',
                        'tags' => 'upwork',
                        'content' => "\\f0a1"
                    ),
                    array(
                        'class' => 'hi-viadeo',
                        'tags' => 'viadeo',
                        'content' => "\\f0a2"
                    ),
                    array(
                        'class' => 'hi-vim',
                        'tags' => 'vim',
                        'content' => "\\f0a3"
                    ),
                    array(
                        'class' => 'hi-vimeo',
                        'tags' => 'vimeo',
                        'content' => "\\f0a4"
                    ),
                    array(
                        'class' => 'hi-vine',
                        'tags' => 'vine',
                        'content' => "\\f0a5"
                    ),
                    array(
                        'class' => 'hi-visualstudiocode',
                        'tags' => 'visualstudiocode',
                        'content' => "\\f0a6"
                    ),
                    array(
                        'class' => 'hi-vk',
                        'tags' => 'vk',
                        'content' => "\\f0a7"
                    ),
                    array(
                        'class' => 'hi-vlcmediaplayer',
                        'tags' => 'vlcmediaplayer',
                        'content' => "\\f0a8"
                    ),
                    array(
                        'class' => 'hi-vue-js',
                        'tags' => 'vue-js',
                        'content' => "\\f0a9"
                    ),
                    array(
                        'class' => 'hi-webstorm',
                        'tags' => 'webstorm',
                        'content' => "\\f0aa"
                    ),
                    array(
                        'class' => 'hi-wechat',
                        'tags' => 'wechat',
                        'content' => "\\f0ab"
                    ),
                    array(
                        'class' => 'hi-wheniwork',
                        'tags' => 'wheniwork',
                        'content' => "\\f0ac"
                    ),
                    array(
                        'class' => 'hi-wikipedia',
                        'tags' => 'wikipedia',
                        'content' => "\\f0ad"
                    ),
                    array(
                        'class' => 'hi-wix',
                        'tags' => 'wix',
                        'content' => "\\f0ae"
                    ),
                    array(
                        'class' => 'hi-wordpress',
                        'tags' => 'wordpress',
                        'content' => "\\f0af"
                    ),
                    array(
                        'class' => 'hi-xbox',
                        'tags' => 'xbox',
                        'content' => "\\f0b0"
                    ),
                    array(
                        'class' => 'hi-xcode',
                        'tags' => 'xcode',
                        'content' => "\\f0b1"
                    ),
                    array(
                        'class' => 'hi-xing',
                        'tags' => 'xing',
                        'content' => "\\f0b2"
                    ),
                    array(
                        'class' => 'hi-yammer',
                        'tags' => 'yammer',
                        'content' => "\\f0b3"
                    ),
                    array(
                        'class' => 'hi-yandex',
                        'tags' => 'yandex',
                        'content' => "\\f0b4"
                    ),
                    array(
                        'class' => 'hi-yarn',
                        'tags' => 'yarn',
                        'content' => "\\f0b5"
                    ),
                    array(
                        'class' => 'hi-ycombinator',
                        'tags' => 'ycombinator',
                        'content' => "\\f0b6"
                    ),
                    array(
                        'class' => 'hi-zendesk',
                        'tags' => 'zendesk',
                        'content' => "\\f0b7"
                    ),
                    array(
                        'class' => 'hi-zerply',
                        'tags' => 'zerply',
                        'content' => "\\f0b8"
                    ),
                    array(
                        'class' => 'hi-zillow',
                        'tags' => 'zillow',
                        'content' => "\\f0b9"
                    ),
                    array(
                        'class' => 'hi-zorin',
                        'tags' => 'zorin',
                        'content' => "\\f0ba"
                    ),
                    array(
                        'class' => 'hi-tic-tac-toe',
                        'tags' => 'tic-tac-toe',
                        'content' => "\\f0bb"
                    ),
                    array(
                        'class' => 'hi-pakpak',
                        'tags' => 'pakpak',
                        'content' => "\\f0bc"
                    ),
                    array(
                        'class' => 'hi-user-minus',
                        'tags' => 'user-minus',
                        'content' => "\\f0f0"
                    ),
                    array(
                        'class' => 'hi-user-check',
                        'tags' => 'user-check',
                        'content' => "\\f0f1"
                    ),
                    array(
                        'class' => 'hi-users1',
                        'tags' => 'users1',
                        'content' => "\\f0f2"
                    ),
                    array(
                        'class' => 'hi-gravatar',
                        'tags' => 'gravatar',
                        'content' => "\\f0f3"
                    ),
                    array(
                        'class' => 'hi-superuser',
                        'tags' => 'superuser',
                        'content' => "\\f0f4"
                    ),
                    array(
                        'class' => 'hi-key',
                        'tags' => 'key',
                        'content' => "\\f0f5"
                    ),
                    array(
                        'class' => 'hi-angular',
                        'tags' => 'angular',
                        'content' => "\\f0f6"
                    ),
                    array(
                        'class' => 'hi-ola-cabs',
                        'tags' => 'ola-cabs',
                        'content' => "\\f0f7"
                    ),
                    array(
                        'class' => 'hi-bitcoin',
                        'tags' => 'bitcoin',
                        'content' => "\\f0f8"
                    ),
                    array(
                        'class' => 'hi-tinder-icon',
                        'tags' => 'tinder-icon',
                        'content' => "\\f0f9"
                    ),
                    array(
                        'class' => 'hi-viber-icon',
                        'tags' => 'viber-icon',
                        'content' => "\\f0fa"
                    ),
                    array(
                        'class' => 'hi-whatsapp',
                        'tags' => 'whatsapp',
                        'content' => "\\f0fb"
                    ),
                    array(
                        'class' => 'hi-steam',
                        'tags' => 'steam',
                        'content' => "\\f0fc"
                    ),
                    array(
                        'class' => 'hi-github',
                        'tags' => 'github',
                        'content' => "\\f0fd"
                    ),
                    array(
                        'class' => 'hi-tux',
                        'tags' => 'tux',
                        'content' => "\\f0fe"
                    ),
                    array(
                        'class' => 'hi-firefox',
                        'tags' => 'firefox',
                        'content' => "\\f0ff"
                    ),
                    array(
                        'class' => 'hi-git',
                        'tags' => 'git',
                        'content' => "\\f100"
                    ),
                    array(
                        'class' => 'hi-check1',
                        'tags' => 'check1',
                        'content' => "\\f101"
                    ),
                    array(
                        'class' => 'hi-close',
                        'tags' => 'close',
                        'content' => "\\f102"
                    ),
                    array(
                        'class' => 'hi-adobe',
                        'tags' => 'adobe',
                        'content' => "\\f103"
                    ),
                    array(
                        'class' => 'hi-appboxlab',
                        'tags' => 'appboxlab',
                        'content' => "\\f104"
                    ),
                    array(
                        'class' => 'hi-bean-bag',
                        'tags' => 'bean-bag',
                        'content' => "\\f105"
                    ),
                    array(
                        'class' => 'hi-bulb',
                        'tags' => 'bulb',
                        'content' => "\\f106"
                    ),
                    array(
                        'class' => 'hi-bus',
                        'tags' => 'bus',
                        'content' => "\\f107"
                    ),
                    array(
                        'class' => 'hi-camera1',
                        'tags' => 'camera1',
                        'content' => "\\f108"
                    ),
                    array(
                        'class' => 'hi-car',
                        'tags' => 'car',
                        'content' => "\\f109"
                    ),
                    array(
                        'class' => 'hi-checkbox-unchecked',
                        'tags' => 'checkbox-unchecked',
                        'content' => "\\f10b"
                    ),
                    array(
                        'class' => 'hi-checked',
                        'tags' => 'checked',
                        'content' => "\\f10c"
                    ),
                    array(
                        'class' => 'hi-cookie',
                        'tags' => 'cookie',
                        'content' => "\\f10f"
                    ),
                    array(
                        'class' => 'hi-creative-cloud',
                        'tags' => 'creative-cloud',
                        'content' => "\\f110"
                    ),
                    array(
                        'class' => 'hi-dihadiwala',
                        'tags' => 'dihadiwala',
                        'content' => "\\f111"
                    ),
                    array(
                        'class' => 'hi-edit',
                        'tags' => 'edit',
                        'content' => "\\f112"
                    ),
                    array(
                        'class' => 'hi-flag1',
                        'tags' => 'flag1',
                        'content' => "\\f113"
                    ),
                    array(
                        'class' => 'hi-grofers',
                        'tags' => 'grofers',
                        'content' => "\\f114"
                    ),
                    array(
                        'class' => 'hi-images',
                        'tags' => 'images',
                        'content' => "\\f115"
                    ),
                    array(
                        'class' => 'hi-incognito',
                        'tags' => 'incognito',
                        'content' => "\\f116"
                    ),
                    array(
                        'class' => 'hi-indane',
                        'tags' => 'indane',
                        'content' => "\\f117"
                    ),
                    array(
                        'class' => 'hi-info1',
                        'tags' => 'info1',
                        'content' => "\\f118"
                    ),
                    array(
                        'class' => 'hi-kadam',
                        'tags' => 'kadam',
                        'content' => "\\f119"
                    ),
                    array(
                        'class' => 'hi-lock1',
                        'tags' => 'lock1',
                        'content' => "\\f11a"
                    ),
                    array(
                        'class' => 'hi-lucifer',
                        'tags' => 'lucifer',
                        'content' => "\\f11b"
                    ),
                    array(
                        'class' => 'hi-messenger',
                        'tags' => 'messenger',
                        'content' => "\\f11c"
                    ),
                    array(
                        'class' => 'hi-meteor',
                        'tags' => 'meteor',
                        'content' => "\\f11d"
                    ),
                    array(
                        'class' => 'hi-ojook',
                        'tags' => 'ojook',
                        'content' => "\\f11e"
                    ),
                    array(
                        'class' => 'hi-orchid',
                        'tags' => 'orchid',
                        'content' => "\\f11f"
                    ),
                    array(
                        'class' => 'hi-paintbox',
                        'tags' => 'paintbox',
                        'content' => "\\f120"
                    ),
                    array(
                        'class' => 'hi-radio-checked',
                        'tags' => 'radio-checked',
                        'content' => "\\f121"
                    ),
                    array(
                        'class' => 'hi-robot',
                        'tags' => 'robot',
                        'content' => "\\f123"
                    ),
                    array(
                        'class' => 'hi-support',
                        'tags' => 'support',
                        'content' => "\\f124"
                    ),
                    array(
                        'class' => 'hi-tooth',
                        'tags' => 'tooth',
                        'content' => "\\f125"
                    ),
                    array(
                        'class' => 'hi-unlock',
                        'tags' => 'unlock',
                        'content' => "\\f126"
                    ),
                    array(
                        'class' => 'hi-wallet',
                        'tags' => 'wallet',
                        'content' => "\\f127"
                    ),
                    array(
                        'class' => 'hi-calendar1',
                        'tags' => 'calendar1',
                        'content' => "\\f128"
                    ),
                    array(
                        'class' => 'hi-elastic-cloud',
                        'tags' => 'elastic-cloud',
                        'content' => "\\f12b"
                    ),
                    array(
                        'class' => 'hi-icloud',
                        'tags' => 'icloud',
                        'content' => "\\f12c"
                    ),
                    array(
                        'class' => 'hi-cloudflare',
                        'tags' => 'cloudflare',
                        'content' => "\\f12d"
                    ),
                    array(
                        'class' => 'hi-soundcloud',
                        'tags' => 'soundcloud',
                        'content' => "\\f12e"
                    ),
                    array(
                        'class' => 'hi-ionic',
                        'tags' => 'ionic',
                        'content' => "\\f12f"
                    ),
                    array(
                        'class' => 'hi-mail',
                        'tags' => 'mail',
                        'content' => "\\f130"
                    ),
                    array(
                        'class' => 'hi-time1',
                        'tags' => 'time1',
                        'content' => "\\f131"
                    ),
                    array(
                        'class' => 'hi-bookmark-o',
                        'tags' => 'bookmark-o',
                        'content' => "\\f132"
                    ),
                    array(
                        'class' => 'hi-bookmark',
                        'tags' => 'bookmark',
                        'content' => "\\f133"
                    ),
                    array(
                        'class' => 'hi-star-o1',
                        'tags' => 'star-o1',
                        'content' => "\\f134"
                    ),
                    array(
                        'class' => 'hi-star-half',
                        'tags' => 'star-half',
                        'content' => "\\f135"
                    ),
                    array(
                        'class' => 'hi-debian',
                        'tags' => 'debian',
                        'content' => "\\f136"
                    ),
                    array(
                        'class' => 'hi-dell',
                        'tags' => 'dell',
                        'content' => "\\f137"
                    ),
                    array(
                        'class' => 'hi-deno',
                        'tags' => 'deno',
                        'content' => "\\f138"
                    ),
                    array(
                        'class' => 'hi-dependabot',
                        'tags' => 'dependabot',
                        'content' => "\\f139"
                    ),
                    array(
                        'class' => 'hi-digg',
                        'tags' => 'digg',
                        'content' => "\\f13a"
                    ),
                    array(
                        'class' => 'hi-digitalocean',
                        'tags' => 'digitalocean',
                        'content' => "\\f13b"
                    ),
                    array(
                        'class' => 'hi-dribbble',
                        'tags' => 'dribbble',
                        'content' => "\\f13c"
                    ),
                    array(
                        'class' => 'hi-ebay',
                        'tags' => 'ebay',
                        'content' => "\\f13d"
                    ),
                    array(
                        'class' => 'hi-eclipseide',
                        'tags' => 'eclipseide',
                        'content' => "\\f13e"
                    ),
                    array(
                        'class' => 'hi-eventbrite',
                        'tags' => 'eventbrite',
                        'content' => "\\f13f"
                    ),
                    array(
                        'class' => 'hi-evernote',
                        'tags' => 'evernote',
                        'content' => "\\f140"
                    ),
                    array(
                        'class' => 'hi-everplaces',
                        'tags' => 'everplaces',
                        'content' => "\\f141"
                    ),
                    array(
                        'class' => 'hi-f-secure',
                        'tags' => 'f-secure',
                        'content' => "\\f142"
                    ),
                    array(
                        'class' => 'hi-favro',
                        'tags' => 'favro',
                        'content' => "\\f143"
                    ),
                    array(
                        'class' => 'hi-fedora',
                        'tags' => 'fedora',
                        'content' => "\\f144"
                    ),
                    array(
                        'class' => 'hi-flutter',
                        'tags' => 'flutter',
                        'content' => "\\f145"
                    ),
                    array(
                        'class' => 'hi-gitlab',
                        'tags' => 'gitlab',
                        'content' => "\\f146"
                    ),
                    array(
                        'class' => 'hi-gnu',
                        'tags' => 'gnu',
                        'content' => "\\f147"
                    ),
                    array(
                        'class' => 'hi-gnusocial',
                        'tags' => 'gnusocial',
                        'content' => "\\f148"
                    ),
                    array(
                        'class' => 'hi-googlehangoutschat',
                        'tags' => 'googlehangoutschat',
                        'content' => "\\f149"
                    ),
                    array(
                        'class' => 'hi-googlepay',
                        'tags' => 'googlepay',
                        'content' => "\\f14a"
                    ),
                    array(
                        'class' => 'hi-grafana',
                        'tags' => 'grafana',
                        'content' => "\\f14b"
                    ),
                    array(
                        'class' => 'hi-hackaday',
                        'tags' => 'hackaday',
                        'content' => "\\f14c"
                    ),
                    array(
                        'class' => 'hi-hackster',
                        'tags' => 'hackster',
                        'content' => "\\f14d"
                    ),
                    array(
                        'class' => 'hi-hootsuite',
                        'tags' => 'hootsuite',
                        'content' => "\\f14e"
                    ),
                    array(
                        'class' => 'hi-hubspot',
                        'tags' => 'hubspot',
                        'content' => "\\f14f"
                    ),
                    array(
                        'class' => 'hi-iconjar',
                        'tags' => 'iconjar',
                        'content' => "\\f150"
                    ),
                    array(
                        'class' => 'hi-inkscape',
                        'tags' => 'inkscape',
                        'content' => "\\f151"
                    ),
                    array(
                        'class' => 'hi-intel',
                        'tags' => 'intel',
                        'content' => "\\f152"
                    ),
                    array(
                        'class' => 'hi-internetexplorer',
                        'tags' => 'internetexplorer',
                        'content' => "\\f153"
                    ),
                    array(
                        'class' => 'hi-invision',
                        'tags' => 'invision',
                        'content' => "\\f154"
                    ),
                    array(
                        'class' => 'hi-jabber',
                        'tags' => 'jabber',
                        'content' => "\\f155"
                    ),
                    array(
                        'class' => 'hi-javascript',
                        'tags' => 'javascript',
                        'content' => "\\f156"
                    ),
                    array(
                        'class' => 'hi-jenkins',
                        'tags' => 'jenkins',
                        'content' => "\\f157"
                    ),
                    array(
                        'class' => 'hi-kaios',
                        'tags' => 'kaios',
                        'content' => "\\f158"
                    ),
                    array(
                        'class' => 'hi-keybase',
                        'tags' => 'keybase',
                        'content' => "\\f159"
                    ),
                    array(
                        'class' => 'hi-kibana',
                        'tags' => 'kibana',
                        'content' => "\\f15a"
                    ),
                    array(
                        'class' => 'hi-klout',
                        'tags' => 'klout',
                        'content' => "\\f15b"
                    ),
                    array(
                        'class' => 'hi-kotlin',
                        'tags' => 'kotlin',
                        'content' => "\\f15c"
                    ),
                    array(
                        'class' => 'hi-laravel',
                        'tags' => 'laravel',
                        'content' => "\\f15d"
                    ),
                    array(
                        'class' => 'hi-laravelhorizon',
                        'tags' => 'laravelhorizon',
                        'content' => "\\f15e"
                    ),
                    array(
                        'class' => 'hi-letterboxd',
                        'tags' => 'letterboxd',
                        'content' => "\\f15f"
                    ),
                    array(
                        'class' => 'hi-line',
                        'tags' => 'line',
                        'content' => "\\f160"
                    ),
                    array(
                        'class' => 'hi-linewebtoon',
                        'tags' => 'linewebtoon',
                        'content' => "\\f161"
                    ),
                    array(
                        'class' => 'hi-linuxmint',
                        'tags' => 'linuxmint',
                        'content' => "\\f162"
                    ),
                    array(
                        'class' => 'hi-magento',
                        'tags' => 'magento',
                        'content' => "\\f163"
                    ),
                    array(
                        'class' => 'hi-magisk',
                        'tags' => 'magisk',
                        'content' => "\\f164"
                    ),
                    array(
                        'class' => 'hi-mastodon',
                        'tags' => 'mastodon',
                        'content' => "\\f165"
                    ),
                    array(
                        'class' => 'hi-mathworks',
                        'tags' => 'mathworks',
                        'content' => "\\f166"
                    ),
                    array(
                        'class' => 'hi-mediafire',
                        'tags' => 'mediafire',
                        'content' => "\\f167"
                    ),
                    array(
                        'class' => 'hi-mixcloud',
                        'tags' => 'mixcloud',
                        'content' => "\\f168"
                    ),
                    array(
                        'class' => 'hi-monogram',
                        'tags' => 'monogram',
                        'content' => "\\f169"
                    ),
                    array(
                        'class' => 'hi-mysql',
                        'tags' => 'mysql',
                        'content' => "\\f16a"
                    ),
                    array(
                        'class' => 'hi-netflix',
                        'tags' => 'netflix',
                        'content' => "\\f16b"
                    ),
                    array(
                        'class' => 'hi-odnoklassniki',
                        'tags' => 'odnoklassniki',
                        'content' => "\\f16c"
                    ),
                    array(
                        'class' => 'hi-opensuse',
                        'tags' => 'opensuse',
                        'content' => "\\f16d"
                    ),
                    array(
                        'class' => 'hi-periscope',
                        'tags' => 'periscope',
                        'content' => "\\f16e"
                    ),
                    array(
                        'class' => 'hi-php',
                        'tags' => 'php',
                        'content' => "\\f16f"
                    ),
                    array(
                        'class' => 'hi-plangrid',
                        'tags' => 'plangrid',
                        'content' => "\\f170"
                    ),
                    array(
                        'class' => 'hi-player-dot-me',
                        'tags' => 'player-dot-me',
                        'content' => "\\f171"
                    ),
                    array(
                        'class' => 'hi-plurk',
                        'tags' => 'plurk',
                        'content' => "\\f172"
                    ),
                    array(
                        'class' => 'hi-powershell',
                        'tags' => 'powershell',
                        'content' => "\\f173"
                    ),
                    array(
                        'class' => 'hi-probot',
                        'tags' => 'probot',
                        'content' => "\\f174"
                    ),
                    array(
                        'class' => 'hi-processwire',
                        'tags' => 'processwire',
                        'content' => "\\f175"
                    ),
                    array(
                        'class' => 'hi-producthunt',
                        'tags' => 'producthunt',
                        'content' => "\\f176"
                    ),
                    array(
                        'class' => 'hi-python',
                        'tags' => 'python',
                        'content' => "\\f177"
                    ),
                    array(
                        'class' => 'hi-reason',
                        'tags' => 'reason',
                        'content' => "\\f178"
                    ),
                    array(
                        'class' => 'hi-redbubble',
                        'tags' => 'redbubble',
                        'content' => "\\f179"
                    ),
                    array(
                        'class' => 'hi-redhat',
                        'tags' => 'redhat',
                        'content' => "\\f17a"
                    ),
                    array(
                        'class' => 'hi-redux',
                        'tags' => 'redux',
                        'content' => "\\f17b"
                    ),
                    array(
                        'class' => 'hi-riot',
                        'tags' => 'riot',
                        'content' => "\\f17c"
                    ),
                    array(
                        'class' => 'hi-ruby',
                        'tags' => 'ruby',
                        'content' => "\\f17d"
                    ),
                    array(
                        'class' => 'hi-runkeeper',
                        'tags' => 'runkeeper',
                        'content' => "\\f17e"
                    ),
                    array(
                        'class' => 'hi-rust',
                        'tags' => 'rust',
                        'content' => "\\f17f"
                    ),
                    array(
                        'class' => 'hi-salesforce',
                        'tags' => 'salesforce',
                        'content' => "\\f180"
                    ),
                    array(
                        'class' => 'hi-samsung',
                        'tags' => 'samsung',
                        'content' => "\\f181"
                    ),
                    array(
                        'class' => 'hi-samsungpay',
                        'tags' => 'samsungpay',
                        'content' => "\\f182"
                    ),
                    array(
                        'class' => 'hi-sass',
                        'tags' => 'sass',
                        'content' => "\\f183"
                    ),
                    array(
                        'class' => 'hi-sega',
                        'tags' => 'sega',
                        'content' => "\\f184"
                    ),
                    array(
                        'class' => 'hi-shazam',
                        'tags' => 'shazam',
                        'content' => "\\f185"
                    ),
                    array(
                        'class' => 'hi-shopify',
                        'tags' => 'shopify',
                        'content' => "\\f186"
                    ),
                    array(
                        'class' => 'hi-sinaweibo',
                        'tags' => 'sinaweibo',
                        'content' => "\\f187"
                    ),
                    array(
                        'class' => 'hi-skyliner',
                        'tags' => 'skyliner',
                        'content' => "\\f188"
                    ),
                    array(
                        'class' => 'hi-sourceforge',
                        'tags' => 'sourceforge',
                        'content' => "\\f189"
                    ),
                    array(
                        'class' => 'hi-spotify',
                        'tags' => 'spotify',
                        'content' => "\\f18a"
                    ),
                    array(
                        'class' => 'hi-staticman',
                        'tags' => 'staticman',
                        'content' => "\\f18b"
                    ),
                    array(
                        'class' => 'hi-steemit',
                        'tags' => 'steemit',
                        'content' => "\\f18c"
                    ),
                    array(
                        'class' => 'hi-stylus',
                        'tags' => 'stylus',
                        'content' => "\\f18d"
                    ),
                    array(
                        'class' => 'hi-swarm',
                        'tags' => 'swarm',
                        'content' => "\\f18e"
                    ),
                    array(
                        'class' => 'hi-swift',
                        'tags' => 'swift',
                        'content' => "\\f18f"
                    ),
                    array(
                        'class' => 'hi-symfony',
                        'tags' => 'symfony',
                        'content' => "\\f190"
                    ),
                    array(
                        'class' => 'hi-teamviewer',
                        'tags' => 'teamviewer',
                        'content' => "\\f191"
                    ),
                    array(
                        'class' => 'hi-ted',
                        'tags' => 'ted',
                        'content' => "\\f192"
                    ),
                    array(
                        'class' => 'hi-teespring',
                        'tags' => 'teespring',
                        'content' => "\\f193"
                    ),
                    array(
                        'class' => 'hi-tencentqq',
                        'tags' => 'tencentqq',
                        'content' => "\\f194"
                    ),
                    array(
                        'class' => 'hi-tiktok',
                        'tags' => 'tiktok',
                        'content' => "\\f195"
                    ),
                    array(
                        'class' => 'hi-todoist',
                        'tags' => 'todoist',
                        'content' => "\\f196"
                    ),
                    array(
                        'class' => 'hi-toggl',
                        'tags' => 'toggl',
                        'content' => "\\f197"
                    ),
                    array(
                        'class' => 'hi-tor',
                        'tags' => 'tor',
                        'content' => "\\f198"
                    ),
                    array(
                        'class' => 'hi-treehouse',
                        'tags' => 'treehouse',
                        'content' => "\\f199"
                    ),
                    array(
                        'class' => 'hi-twilio',
                        'tags' => 'twilio',
                        'content' => "\\f19a"
                    ),
                    array(
                        'class' => 'hi-twitch',
                        'tags' => 'twitch',
                        'content' => "\\f19b"
                    ),
                    array(
                        'class' => 'hi-typescript',
                        'tags' => 'typescript',
                        'content' => "\\f19c"
                    ),
                    array(
                        'class' => 'hi-typo3',
                        'tags' => 'typo3',
                        'content' => "\\f19d"
                    ),
                    array(
                        'class' => 'hi-udacity',
                        'tags' => 'udacity',
                        'content' => "\\f19e"
                    ),
                    array(
                        'class' => 'hi-udemy',
                        'tags' => 'udemy',
                        'content' => "\\f19f"
                    ),
                    array(
                        'class' => 'hi-add-circle',
                        'tags' => 'add-circle',
                        'content' => "\\e900"
                    ),
                    array(
                        'class' => 'hi-add-file',
                        'tags' => 'add-file',
                        'content' => "\\e901"
                    ),
                    array(
                        'class' => 'hi-add-folder',
                        'tags' => 'add-folder',
                        'content' => "\\e902"
                    ),
                    array(
                        'class' => 'hi-alarm',
                        'tags' => 'alarm',
                        'content' => "\\e903"
                    ),
                    array(
                        'class' => 'hi-align-center',
                        'tags' => 'align-center',
                        'content' => "\\e904"
                    ),
                    array(
                        'class' => 'hi-align-justify',
                        'tags' => 'align-justify',
                        'content' => "\\e905"
                    ),
                    array(
                        'class' => 'hi-align-left',
                        'tags' => 'align-left',
                        'content' => "\\e906"
                    ),
                    array(
                        'class' => 'hi-align-right',
                        'tags' => 'align-right',
                        'content' => "\\e907"
                    ),
                    array(
                        'class' => 'hi-arrow-bottom',
                        'tags' => 'arrow-bottom',
                        'content' => "\\e908"
                    ),
                    array(
                        'class' => 'hi-arrow-circle-bottom',
                        'tags' => 'arrow-circle-bottom',
                        'content' => "\\e909"
                    ),
                    array(
                        'class' => 'hi-arrow-circle-left',
                        'tags' => 'arrow-circle-left',
                        'content' => "\\e90a"
                    ),
                    array(
                        'class' => 'hi-arrow-circle-right',
                        'tags' => 'arrow-circle-right',
                        'content' => "\\e90b"
                    ),
                    array(
                        'class' => 'hi-arrow-circle-top',
                        'tags' => 'arrow-circle-top',
                        'content' => "\\e90c"
                    ),
                    array(
                        'class' => 'hi-arrow-left',
                        'tags' => 'arrow-left',
                        'content' => "\\e90d"
                    ),
                    array(
                        'class' => 'hi-arrow-right',
                        'tags' => 'arrow-right',
                        'content' => "\\e90e"
                    ),
                    array(
                        'class' => 'hi-arrow-top',
                        'tags' => 'arrow-top',
                        'content' => "\\e90f"
                    ),
                    array(
                        'class' => 'hi-attachment',
                        'tags' => 'attachment',
                        'content' => "\\e910"
                    ),
                    array(
                        'class' => 'hi-ban',
                        'tags' => 'ban',
                        'content' => "\\e911"
                    ),
                    array(
                        'class' => 'hi-bell',
                        'tags' => 'bell',
                        'content' => "\\e912"
                    ),
                    array(
                        'class' => 'hi-briefcase',
                        'tags' => 'briefcase',
                        'content' => "\\e913"
                    ),
                    array(
                        'class' => 'hi-broken-link',
                        'tags' => 'broken-link',
                        'content' => "\\e914"
                    ),
                    array(
                        'class' => 'hi-bullet-list',
                        'tags' => 'bullet-list',
                        'content' => "\\e915"
                    ),
                    array(
                        'class' => 'hi-calendar',
                        'tags' => 'calendar',
                        'content' => "\\e916"
                    ),
                    array(
                        'class' => 'hi-camera',
                        'tags' => 'camera',
                        'content' => "\\e917"
                    ),
                    array(
                        'class' => 'hi-cart',
                        'tags' => 'cart',
                        'content' => "\\e918"
                    ),
                    array(
                        'class' => 'hi-chart',
                        'tags' => 'chart',
                        'content' => "\\e919"
                    ),
                    array(
                        'class' => 'hi-chat',
                        'tags' => 'chat',
                        'content' => "\\e91a"
                    ),
                    array(
                        'class' => 'hi-check-circle',
                        'tags' => 'check-circle',
                        'content' => "\\e91b"
                    ),
                    array(
                        'class' => 'hi-check',
                        'tags' => 'check',
                        'content' => "\\e91c"
                    ),
                    array(
                        'class' => 'hi-checkbox',
                        'tags' => 'checkbox',
                        'content' => "\\e91d"
                    ),
                    array(
                        'class' => 'hi-chevron-bottom',
                        'tags' => 'chevron-bottom',
                        'content' => "\\e91e"
                    ),
                    array(
                        'class' => 'hi-chevron-left',
                        'tags' => 'chevron-left',
                        'content' => "\\e91f"
                    ),
                    array(
                        'class' => 'hi-chevron-right',
                        'tags' => 'chevron-right',
                        'content' => "\\e920"
                    ),
                    array(
                        'class' => 'hi-chevron-top',
                        'tags' => 'chevron-top',
                        'content' => "\\e921"
                    ),
                    array(
                        'class' => 'hi-circle',
                        'tags' => 'circle',
                        'content' => "\\e922"
                    ),
                    array(
                        'class' => 'hi-clock',
                        'tags' => 'clock',
                        'content' => "\\e923"
                    ),
                    array(
                        'class' => 'hi-cog',
                        'tags' => 'cog',
                        'content' => "\\e924"
                    ),
                    array(
                        'class' => 'hi-credit-card',
                        'tags' => 'credit-card',
                        'content' => "\\e925"
                    ),
                    array(
                        'class' => 'hi-cross-circle',
                        'tags' => 'cross-circle',
                        'content' => "\\e926"
                    ),
                    array(
                        'class' => 'hi-cross',
                        'tags' => 'cross',
                        'content' => "\\e927"
                    ),
                    array(
                        'class' => 'hi-date',
                        'tags' => 'date',
                        'content' => "\\e928"
                    ),
                    array(
                        'class' => 'hi-delete-file',
                        'tags' => 'delete-file',
                        'content' => "\\e929"
                    ),
                    array(
                        'class' => 'hi-dislike',
                        'tags' => 'dislike',
                        'content' => "\\e92a"
                    ),
                    array(
                        'class' => 'hi-document',
                        'tags' => 'document',
                        'content' => "\\e92b"
                    ),
                    array(
                        'class' => 'hi-download-box',
                        'tags' => 'download-box',
                        'content' => "\\e92c"
                    ),
                    array(
                        'class' => 'hi-download-cloud',
                        'tags' => 'download-cloud',
                        'content' => "\\e92d"
                    ),
                    array(
                        'class' => 'hi-download',
                        'tags' => 'download',
                        'content' => "\\e92e"
                    ),
                    array(
                        'class' => 'hi-empty-bag',
                        'tags' => 'empty-bag',
                        'content' => "\\e92f"
                    ),
                    array(
                        'class' => 'hi-envelope',
                        'tags' => 'envelope',
                        'content' => "\\e930"
                    ),
                    array(
                        'class' => 'hi-export',
                        'tags' => 'export',
                        'content' => "\\e931"
                    ),
                    array(
                        'class' => 'hi-eye',
                        'tags' => 'eye',
                        'content' => "\\e932"
                    ),
                    array(
                        'class' => 'hi-fat-bag',
                        'tags' => 'fat-bag',
                        'content' => "\\e933"
                    ),
                    array(
                        'class' => 'hi-file',
                        'tags' => 'file',
                        'content' => "\\e934"
                    ),
                    array(
                        'class' => 'hi-fill-bag',
                        'tags' => 'fill-bag',
                        'content' => "\\e935"
                    ),
                    array(
                        'class' => 'hi-fit-horizontal',
                        'tags' => 'fit-horizontal',
                        'content' => "\\e936"
                    ),
                    array(
                        'class' => 'hi-fit-to-screen',
                        'tags' => 'fit-to-screen',
                        'content' => "\\e937"
                    ),
                    array(
                        'class' => 'hi-fit-vertical',
                        'tags' => 'fit-vertical',
                        'content' => "\\e938"
                    ),
                    array(
                        'class' => 'hi-flag',
                        'tags' => 'flag',
                        'content' => "\\e939"
                    ),
                    array(
                        'class' => 'hi-folder',
                        'tags' => 'folder',
                        'content' => "\\e93a"
                    ),
                    array(
                        'class' => 'hi-funnel',
                        'tags' => 'funnel',
                        'content' => "\\e93b"
                    ),
                    array(
                        'class' => 'hi-game',
                        'tags' => 'game',
                        'content' => "\\e93c"
                    ),
                    array(
                        'class' => 'hi-hand-index',
                        'tags' => 'hand-index',
                        'content' => "\\e93d"
                    ),
                    array(
                        'class' => 'hi-happy',
                        'tags' => 'happy',
                        'content' => "\\e93e"
                    ),
                    array(
                        'class' => 'hi-heart-o',
                        'tags' => 'heart-o',
                        'content' => "\\e93f"
                    ),
                    array(
                        'class' => 'hi-hide',
                        'tags' => 'hide',
                        'content' => "\\e940"
                    ),
                    array(
                        'class' => 'hi-id-card-vertical',
                        'tags' => 'id-card-vertical',
                        'content' => "\\e941"
                    ),
                    array(
                        'class' => 'hi-id-card',
                        'tags' => 'id-card',
                        'content' => "\\e942"
                    ),
                    array(
                        'class' => 'hi-image',
                        'tags' => 'image',
                        'content' => "\\e943"
                    ),
                    array(
                        'class' => 'hi-info-square',
                        'tags' => 'info-square',
                        'content' => "\\e944"
                    ),
                    array(
                        'class' => 'hi-info',
                        'tags' => 'info',
                        'content' => "\\e945"
                    ),
                    array(
                        'class' => 'hi-like',
                        'tags' => 'like',
                        'content' => "\\e946"
                    ),
                    array(
                        'class' => 'hi-link',
                        'tags' => 'link',
                        'content' => "\\e947"
                    ),
                    array(
                        'class' => 'hi-lock',
                        'tags' => 'lock',
                        'content' => "\\e948"
                    ),
                    array(
                        'class' => 'hi-logout',
                        'tags' => 'logout',
                        'content' => "\\e949"
                    ),
                    array(
                        'class' => 'hi-marker-o',
                        'tags' => 'marker-o',
                        'content' => "\\e94a"
                    ),
                    array(
                        'class' => 'hi-maximize',
                        'tags' => 'maximize',
                        'content' => "\\e94b"
                    ),
                    array(
                        'class' => 'hi-media-file',
                        'tags' => 'media-file',
                        'content' => "\\e94c"
                    ),
                    array(
                        'class' => 'hi-menu',
                        'tags' => 'menu',
                        'content' => "\\e94d"
                    ),
                    array(
                        'class' => 'hi-mic',
                        'tags' => 'mic',
                        'content' => "\\e94e"
                    ),
                    array(
                        'class' => 'hi-minimize',
                        'tags' => 'minimize',
                        'content' => "\\e94f"
                    ),
                    array(
                        'class' => 'hi-minus-circle',
                        'tags' => 'minus-circle',
                        'content' => "\\e950"
                    ),
                    array(
                        'class' => 'hi-monitor',
                        'tags' => 'monitor',
                        'content' => "\\e951"
                    ),
                    array(
                        'class' => 'hi-mute',
                        'tags' => 'mute',
                        'content' => "\\e952"
                    ),
                    array(
                        'class' => 'hi-neutral',
                        'tags' => 'neutral',
                        'content' => "\\e953"
                    ),
                    array(
                        'class' => 'hi-next',
                        'tags' => 'next',
                        'content' => "\\e954"
                    ),
                    array(
                        'class' => 'hi-numbered-list',
                        'tags' => 'numbered-list',
                        'content' => "\\e955"
                    ),
                    array(
                        'class' => 'hi-paint-bucket',
                        'tags' => 'paint-bucket',
                        'content' => "\\e956"
                    ),
                    array(
                        'class' => 'hi-paper-plane',
                        'tags' => 'paper-plane',
                        'content' => "\\e957"
                    ),
                    array(
                        'class' => 'hi-paper-tag',
                        'tags' => 'paper-tag',
                        'content' => "\\e958"
                    ),
                    array(
                        'class' => 'hi-paste',
                        'tags' => 'paste',
                        'content' => "\\e959"
                    ),
                    array(
                        'class' => 'hi-pencil',
                        'tags' => 'pencil',
                        'content' => "\\e95a"
                    ),
                    array(
                        'class' => 'hi-pie-chart',
                        'tags' => 'pie-chart',
                        'content' => "\\e95b"
                    ),
                    array(
                        'class' => 'hi-pin',
                        'tags' => 'pin',
                        'content' => "\\e95c"
                    ),
                    array(
                        'class' => 'hi-pinned',
                        'tags' => 'pinned',
                        'content' => "\\e95d"
                    ),
                    array(
                        'class' => 'hi-power',
                        'tags' => 'power',
                        'content' => "\\e95e"
                    ),
                    array(
                        'class' => 'hi-presentation',
                        'tags' => 'presentation',
                        'content' => "\\e95f"
                    ),
                    array(
                        'class' => 'hi-previous',
                        'tags' => 'previous',
                        'content' => "\\e960"
                    ),
                    array(
                        'class' => 'hi-print',
                        'tags' => 'print',
                        'content' => "\\e961"
                    ),
                    array(
                        'class' => 'hi-question-circle-big',
                        'tags' => 'question-circle-big',
                        'content' => "\\e962"
                    ),
                    array(
                        'class' => 'hi-question-circle',
                        'tags' => 'question-circle',
                        'content' => "\\e963"
                    ),
                    array(
                        'class' => 'hi-quotes',
                        'tags' => 'quotes',
                        'content' => "\\e964"
                    ),
                    array(
                        'class' => 'hi-redo',
                        'tags' => 'redo',
                        'content' => "\\e965"
                    ),
                    array(
                        'class' => 'hi-refresh',
                        'tags' => 'refresh',
                        'content' => "\\e966"
                    ),
                    array(
                        'class' => 'hi-reply',
                        'tags' => 'reply',
                        'content' => "\\e967"
                    ),
                    array(
                        'class' => 'hi-sad',
                        'tags' => 'sad',
                        'content' => "\\e968"
                    ),
                    array(
                        'class' => 'hi-save-file',
                        'tags' => 'save-file',
                        'content' => "\\e969"
                    ),
                    array(
                        'class' => 'hi-search',
                        'tags' => 'search',
                        'content' => "\\e96a"
                    ),
                    array(
                        'class' => 'hi-settings',
                        'tags' => 'settings',
                        'content' => "\\e96b"
                    ),
                    array(
                        'class' => 'hi-share',
                        'tags' => 'share',
                        'content' => "\\e96c"
                    ),
                    array(
                        'class' => 'hi-speaker',
                        'tags' => 'speaker',
                        'content' => "\\e96d"
                    ),
                    array(
                        'class' => 'hi-speech-bubble',
                        'tags' => 'speech-bubble',
                        'content' => "\\e96e"
                    ),
                    array(
                        'class' => 'hi-stack',
                        'tags' => 'stack',
                        'content' => "\\e96f"
                    ),
                    array(
                        'class' => 'hi-star-o',
                        'tags' => 'star-o',
                        'content' => "\\e970"
                    ),
                    array(
                        'class' => 'hi-star',
                        'tags' => 'star',
                        'content' => "\\e971"
                    ),
                    array(
                        'class' => 'hi-sun',
                        'tags' => 'sun',
                        'content' => "\\e972"
                    ),
                    array(
                        'class' => 'hi-switch-off',
                        'tags' => 'switch-off',
                        'content' => "\\e973"
                    ),
                    array(
                        'class' => 'hi-switch-on',
                        'tags' => 'switch-on',
                        'content' => "\\e974"
                    ),
                    array(
                        'class' => 'hi-tag-o',
                        'tags' => 'tag-o',
                        'content' => "\\e975"
                    ),
                    array(
                        'class' => 'hi-time',
                        'tags' => 'time',
                        'content' => "\\e976"
                    ),
                    array(
                        'class' => 'hi-trash',
                        'tags' => 'trash',
                        'content' => "\\e977"
                    ),
                    array(
                        'class' => 'hi-turn-left',
                        'tags' => 'turn-left',
                        'content' => "\\e978"
                    ),
                    array(
                        'class' => 'hi-turn-right',
                        'tags' => 'turn-right',
                        'content' => "\\e979"
                    ),
                    array(
                        'class' => 'hi-undo',
                        'tags' => 'undo',
                        'content' => "\\e97a"
                    ),
                    array(
                        'class' => 'hi-upload-cloud',
                        'tags' => 'upload-cloud',
                        'content' => "\\e97b"
                    ),
                    array(
                        'class' => 'hi-upload',
                        'tags' => 'upload',
                        'content' => "\\e97c"
                    ),
                    array(
                        'class' => 'hi-user',
                        'tags' => 'user',
                        'content' => "\\e97d"
                    ),
                    array(
                        'class' => 'hi-users',
                        'tags' => 'users',
                        'content' => "\\e97e"
                    ),
                    array(
                        'class' => 'hi-video-camera',
                        'tags' => 'video-camera',
                        'content' => "\\e97f"
                    ),
                    array(
                        'class' => 'hi-volume-down',
                        'tags' => 'volume-down',
                        'content' => "\\e980"
                    ),
                    array(
                        'class' => 'hi-volume-up',
                        'tags' => 'volume-up',
                        'content' => "\\e981"
                    ),
                    array(
                        'class' => 'hi-warning-o',
                        'tags' => 'warning-o',
                        'content' => "\\e982"
                    ),
                    array(
                        'class' => 'hi-warning',
                        'tags' => 'warning',
                        'content' => "\\e983"
                    ),
                    array(
                        'class' => 'hi-zoom-in',
                        'tags' => 'zoom-in',
                        'content' => "\\e984"
                    ),
                    array(
                        'class' => 'hi-zoom-out',
                        'tags' => 'zoom-out',
                        'content' => "\\e985"
                    )
                );
                foreach ($haticons as $key => $value) {
                    ?>
                    <div class="haticons-box" tags="<?php echo $value['tags'];?>">
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