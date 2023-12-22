<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/ic_favicon.png">
    <title>संतवाणी  श्रंखला | आचार्य प्रशांत</title>

    <!-- Add Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
             line-height: normal;
        }
        .menu-label{
            color: black;
        }
        .menu-container {
            position: absolute;
            top: 100%;
            z-index: 10;
            margin-top: 2px;
        }
        .menu-card {
            display: flex;
            height: 60vh;
            min-width: 0;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .menu-section {
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            padding: 16px;
        }

        .menu-item {
            display: flex;
            justify-content: space-between;
            cursor: pointer;
            padding: 8px;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .menu-item:hover {
            background-color: #edf2f7;
            color: #1a202c;
        }

        .separator {
            width: 1px;
            background-color: #cbd5e0;
        }

        .text-brand {
            color: #4299e1;
        }

        .badge {
            height: 14px;
            width: 17px;
            margin-top: 4px;
        }
        .label-warning[href],
        .badge-warning[href] {
            background-color: #c67605;
        }
        #lblCartCount {
            font-size: 13px;
            background: #f5efef;
            color: #c56927;
            padding: 0 5px;
            vertical-align: top;
            margin-left: -12px; 
        }
        .red-circle {
            width: 16px;
            height: 16px;
            background-color: red;
            border-radius: 50%;
            display: inline-block;
            margin-right: 10px; 
            border: 1px solid white;

        }
        .video-series-nav {
            border-bottom: 1px solid #e9d7d7;
            background-color: #fff;
            color: #fff;
            padding: 2px 38px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .search-box {
            display: flex;
            align-items: center;
            width: 54%;
            margin-right: 263px;
        }
        .all-video-series {
            border-radius: 5px 0px 0px 0px;
            display: flex;
            width: 5%;
            padding: 7px;
            border: 1px solid #c1c8d9d6;
        }

        .search-input {
            width: 70%;
            padding: 7px;
            box-sizing: border-box;
            background-color: #fff; 
            color: #000; 
            border: 1px solid gray;
            transition: border-color 0.3s;
        }
         .search-input:focus {
            border-color: gray; 
          }

        .search-icon {
            border-radius: 0px 5px 5px 0px;
            padding: 10px;
            width: 38px;
            height: 40px;
            margin-left: -30px; /* Adjust as needed */
            background-color: #FFDDBB;
        }
        .my-video-series-button {
            padding: 3px 7px;
            background-color: #eb5b23;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 15px;
        }
        header {
            background-color: #cf430d;
            color: #fff;
            padding: 2px 13px 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav {
            overflow: hidden;
            text-align: left;
            margin-top: 5px;
            margin-left: -11px;
        }

        nav a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 3px 6px;
            text-decoration: none;
            transition: color 0.3s;
        }

        nav a:hover {
          background-color: #e35807;
          color: white;
        }

        .logo img {
          height: 2rem;
          width: 34px;
          border-radius: 50%;
          margin-right: 10px;
        }
        .language-dropdown {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }
        .language-dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 108px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 2; 
            border-radius: 5px;
            top: 122%; 
            left: -76px; 
        }

        .language-dropdown-content a {
            color: #000;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .session-dropdown {
            position: relative;
            display: inline-block;
        }
        .session-dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 108px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 2;
            border-radius: 5px;
            top: 8%;
            left: 150px;
        }

        .session-dropdown-content a {
            color: #000;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .invite-dropdown {
            position: relative;
            display: inline-block;
        }
        .invite-dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 108px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 2;
            border-radius: 5px;
            top: 8%;
            left: 550px;
        }

        .invite-dropdown-content a {
            color: #000;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .series-dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 108px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 2;
            border-radius: 5px;
            top: 27%;
            left: 71px;
        }

        .series-dropdown-content a {
            color: #000;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .series-dropdown-item {
            cursor: pointer;
            padding: 5px;
            color: black;
        }

        .sub-series {
            padding-left: 20px; 
        }
        .down-arrow {
            display: inline-block;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 6px 6px 0;
            border-color: #fff transparent transparent transparent;
            margin-left: 5px;   
            margin-top: 16px;
            transition: transform 0.3s ease;
        }

        .up-arrow {
            display: inline-block;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 6px 6px;
            border-color: transparent transparent #fff transparent;
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .down-arrow-session {
            display: inline-block;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 6px 6px 0;
            border-color: #fff transparent transparent transparent;
            margin-top: 16px;
            transition: transform 0.3s ease;
        }

        .up-arrow-session {
            display: inline-block;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 6px 6px;
            border-color: transparent transparent #fff transparent;
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .down-arrow-invite {
            display: inline-block;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 6px 6px 0;
            border-color: #fff transparent transparent transparent;
            margin-top: 16px;
            transition: transform 0.3s ease;
        }

        .up-arrow-invite {
            display: inline-block;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 6px 6px;
            border-color: transparent transparent #fff transparent;
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .down-arrow-series {
            display: inline-block;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 6px 6px 0;
            border-color: #605a5a  transparent transparent transparent;
            margin-top: 16px;
            transition: transform 0.3s ease;
        }

        .up-arrow-series {
            display: inline-block;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 6px 6px;
            border-color: transparent transparent #fff transparent;
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .language-dropdown-content a.english {
            color: #ef751e;
            font-weight: 600;

        }
        .receiver-sign, .cart-sign, .menu-sign {
            color: #fff;
            font-size: 24px;
            cursor: pointer;
        }
        .secondary-nav {
            background-color: #1f2538;
            color: #fff;
            padding: 1px 1px;
            text-align: center;
        }
        .cta-button {
            margin-top: 10px;
            display: inline-block;
            padding: 1px 7px;
            background-color: #221d34;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            border: 1px solid #fff; 
            margin-left: 20px;
            margin-top: 15px;
            font-weight: 100;
            font-size: smaller;
        }
        .cta-button:hover {
            background-color: #221d34; 
            color: #fff;
            text-decoration: none;
        }
        .custom-div {
            margin-left: 10px;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 5px;
            font-family: 'Arial', sans-serif;
        }

        .arrow-sign {
            margin: 0 10px;
            font-size: 18px;
            color: #333;
        }

        .hindi-text {
            font-size: 16px;
            color: #333;
        }
        .new-block{
            font-weight: 700;
            font-size: larger;
            margin-left: 19px;
        }
        .content-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 20px;
        }

        .text-container {
            max-width: 50%;
            padding: 20px;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        .hindi-text {
            font-size: 16px;
            color: #333;
            line-height: 1.5;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .image-container {
            max-width: 50%;
        }
        .share-container {
            display: flex;
            flex-direction: column; 
            align-items: flex-start; 
            margin: 20px;
        }

        .share-text {
            margin-bottom: 10px; 
            font-family: 'Arial', sans-serif;
        }

        .share-icons {
            display: flex;
            align-items: center;
        }

        .share-icon {
            margin-right: 10px; 
            font-size: 24px;
            color: #333;
            cursor: pointer;
        }
        .video-series{
            font-size: 22px;
            font-weight: 540;
            margin-left: 20px;
            margin-top: 50px;

            border-bottom: 1px solid gray; 
            padding-bottom: 5px; 
            font-family: 'Arial', sans-serif;
        }
        .text-video-series{
            font-size: 23px;
            font-family: serif;
            font-style: italic;
            font-weight: 600;
            color: #f16806;
            margin-right: 34px;    
            font-family: Brush Script MT, Brush Script Std, cursive;
        }
        .course-section {
            display: flex;
            justify-content: space-around;
        }

        .course-box {
            text-align: left;
            font-family: 'Arial', sans-serif;
            background-color: #fff;
            margin-bottom: 10px; 
            width: 400px; 
        }

        .gray-box {
            background-color: gray;
            color: white;
            text-align: center;
            margin-bottom: 15px;
            width: 14%;
            border-radius: 2px;
            position: relative;
        }
        .line-through {
            text-decoration: line-through;
        }

        .orange-button {
            background-color: #a2b8eb;
            color: white;
            border: none;
            cursor: pointer;
        }

        .course-box, .gray-box {
            border-bottom: 1px solid #ccc;
        }
        .faq-box-heading h2 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .faq-content p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .arrow {
            font-size: 20px;
        }
        .faq-section {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
            background-color: #f5fdfb;
        }
        .faq-box-heading {
            font-family: 'Arial', sans-serif;
            background-color: #fff;
            width: 265px;
            background-color: #f5fdfb;
        }

        .faq-box {
            border-bottom: 1px solid #ccc; 
            text-align: left;
            font-family: 'Arial', sans-serif;
            background-color: #f5fdfb;
            width: 800px;
            color: gray;
        }
        .faq-box-no-border-bottom { 
            text-align: left;
            font-family: 'Arial', sans-serif;
            background-color: #f5fdfb;
            width: 800px;
        }
        .arrow {
            cursor: pointer;
            font-size: 24px;
            margin-left: 5px;
            transform: rotate(90deg); 
            transition: transform 0.3s ease-in-out;
        }
        .hidden {
            display: none;
        }

        .faq-content {
            margin-top: 10px;
        }
        .faq-answer {
            display: none;
            color: gray;
        }
        .footer {
            background-color: #1f2538;
            color: #fff;
            text-align: left;    
            padding-top: 44px;

        }
        .footer-section {
            margin-bottom: 20px; 
        }
        .footer-section h3 {
            margin-bottom: 10px;
        }

        .footer-section a {
            color: #fff;
            text-decoration: none;
        }
        .footer-section a:hover {
            color: #dc3545;
        }
        .course-title{
            font-weight: bold;
            margin-bottom: 15px;
        }
        .mb-15{
            margin-bottom: 15px;
        }
        .font-weight-margin
        {
            font-weight: bold;
            margin-bottom: 15px;
        }
        .ml-34{
            margin-left: 37px;
            font-size: 15px;
        }
        .course-box:hover {
            background-color: #e0f7fa;
            transition: background-color 0.3s ease; 
        }
        .faq-item {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px; 
        }
        .faq-item.last-faq {
            border-bottom: none;
        }
        .ml-8{
            margin-left: 8px;
        }
        .en-style
        {
            padding: 5px;
            font-size: 13px;
            border: 1px solid;
            margin-top: 4px;
        }
        .text-white-opacity-90.svelte-ay56ew {
            color: #ffffffe6;
        }
        .faq-question{
            margin-bottom: 12px;
            margin-top: 14px;
        }
        #course_subtitle{
            color: #444040;
        }
        .font-color{
            color: #444040;
        }
        .mt-16{
            margin-top: 16px;
        }

    </style>
</head>
<body>

<header>
    <div class="logo" style="margin-left: 15px;">
      <img src="images/ic_favicon.png" alt="Logo"></div>
    <nav class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew">
        <a href="https://acharyaprashant.org/" style="text-decoration-line: none;" class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew">Home</a>
        <a href="#"  style="text-decoration-line: none;"  class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew">Live Sessions</a>
            <span class="down-arrow-session" onclick="toggleDropdownSession()" ></span>
            <span class="up-arrow-session" onclick="toggleDropdownSession()" style="display: none;"></span>

            <div class="session-dropdown-content" class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew">
                <a href="https://acharyaprashant.org/en/online-courses/gita"  style="text-align: left;">Bhagavad Gita</a>
                <a href="https://acharyaprashant.org/en/sant-sarita" style="text-align: left;" >Sant Sarita</a>
                <a href="https://acharyaprashant.org/en/vedant-samhita" style="text-align: left;">Vedant Samhita</a>
                <a href="https://acharyaprashant.org/en/bodh-pratyusha" style="text-align: left;">Bodh Pratyusha</a>
            </div>
        <a href="#" style="text-decoration-line: none;background-color: #e35807;"  class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew">Video Series</a>
        <a href="https://acharyaprashant.org/en/books" style="text-decoration-line: none;"  class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew">AP Books</a>
        <a href="https://acharyaprashant.org/en/articles" style="text-decoration-line: none;"  class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew">AP Articles</a>
        <a href="#" style="text-decoration-line: none;"  class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew">Invite</a>
            <span class="down-arrow-invite" onclick="toggleDropdownInvite()"></span>
            <span class="up-arrow-invite" onclick="toggleDropdownInvite()" style="display: none;"></span>

            <div class="invite-dropdown-content">
                <a href="#" style="text-align: left;">For a talk</a>
                <a href="#" style="text-align: left;" >For an interview</a>
            </div>
        <a href="https://acharyaprashant.org/en/media" style="text-decoration-line: none;"  class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew">In Media</a>
        <a href="https://acharyaprashant.org/en/hiring" style="text-decoration-line: none; "  class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew">Careers</a>
        <a href="https://acharyaprashant.org/en/contribute" style="text-decoration-line: none;"  class="text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew">Donate</a>
    </nav>
    <div class="language-dropdown">
        <div class="row" style="margin-left: 195px;">
        <span class="en-style">EN</span>
        <div class="language-dropdown">
            <span class="down-arrow" onclick="toggleDropdown()"></span>
            <span class="up-arrow" onclick="toggleDropdown()" style="display: none;"></span>
            <div class="language-dropdown-content md-1">
                <a href="#" style="font-weight: 600;font-size: 14px;">हिन्दी</a>
                <a href="#" class="english"><?php echo strtoupper("English"); ?></a>
            </div>
        </div>
        <div class="md-3">
            <img src="images/icons8-phone-48.png" style="width: 40%;margin-left: 13px;margin-top: 7px;"></div>
        <div>
            <i class="fa" style="font-size:17px;margin-top: 10px;">&#xf07a;</i>
            <span class='badge badge-warning' id='lblCartCount'> 3 </span>
        </div>
        <div class="menu-sign md-3" style="margin-right: 5px;margin-left: 10px;margin-right: 4px;">&#9776;</div> 
        <div class="md-2" style="font-size: 13px;margin-top: 9px;"> Menu </div>
    </div>
    </div>
    <div class="receiver-sign"></div>
    <div></div>
    <div</div>
</header>

<div class="secondary-nav text-white-opacity-90 flex cursor-pointer items-center space-x-1 whitespace-nowrap transition-opacity duration-300 ease-in-out hover:opacity-100 tab:px-1.5 laptop:px-2.5 desk:px-4 svelte-ay56ew" style="font-weight: bold;font-size: 18px;">
    <p>
      <span class="red-circle"></span>
      Get access to all 350+ video series at once!
      <a href="https://acharyaprashant.org/en/packs/all-video-series" class="cta-button" >Click Here</a>
    </p>
</div>

<div class="video-series-nav">
    <div class="text-video-series"  >Video Series</div>

    <?php
        $data = file_get_contents("https://api.acharyaprashant.org/v2/legacy/courses/tags");
        $tagsData = json_decode($data, true);
    ?>

    <div class="all-video-series" style="color: gray;">All
        <span class="down-arrow-series" onclick="toggleDropdownSeries()" style="margin-left: 10px; margin-top: 9px;"></span>
        <span class="up-arrow-series" onclick="toggleDropdownSeries()" style="display: none;"></span>
    </div>

    <div class="series-dropdown-content">
        <?php foreach ($tagsData as $level): ?>
            <?php foreach ($level as $item): ?>
                <div class="series-dropdown-item" onclick="handleSeriesSelection('<?php echo $item['name']['english']; ?>')">
                    <?php echo $item['name']['english']; ?>
                    <?php if ($item['hasChildren']): ?>
                        <div class="sub-series">
                            <?php foreach ($tagsData as $childLevel): ?>
                                <?php foreach ($childLevel as $child): ?>
                                    <?php if ($child['parent'] === $item['tagId'] && $child['level'] === 1): ?>
                                        <div class="series-dropdown-item" onclick="handleSeriesSelection('<?php echo $child['name']['english']; ?>')">
                                            <?php echo $child['name']['english']; ?>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>

    <div class="search-box">
        <input type="text" class="search-input" placeholder="Search for video series" style="border: 1px solid #c9d7d7;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="search-icon">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
    </div>

    <a href="#" class="my-video-series-button">My Video Series</a>
</div>

<?php

    $data = file_get_contents("https://api.acharyaprashant.org/v2/legacy/courses/series/optuser/course-series-eeb9d3");

    $apiData = json_decode($data, true);

    echo '<div class="custom-div" style="margin-left: 30px;">';
    echo '<div>Home</div>';
    echo '<div class="arrow-sign">&gt;</div>';
    echo '<div class="hindi-text">' . $apiData['details']['title'] . '</div></div>';
    echo '<div class="new-block" style="margin-left: 40px;">' . $apiData['details']['title'] . '</div>';
    echo '<div class="content-container" style="margin-left: 40px;">';
    echo '    <div class="row">';
    echo '        <div class="col-md-5">';
    $imageWidth = 520; 
    $imageHeight = $imageWidth / $apiData['details']['thumbnail']['aspectRatio'];
    echo '            <img src="images/' . $apiData['details']['thumbnail']['key'] . '" alt="Sant Image" class="img-fluid" width="' . $imageWidth . '" height="' . $imageHeight . '">';
    echo '        </div>';
    echo '        <div class="col-md-7">';
    echo '            <div >';
    echo '                <div class="hindi-text">';
    echo '                    <div id="subtitle"><b>';
    echo '                        ' . $apiData['details']['subtitle'];
    echo '                    </b></div>';
    echo '                    <br>';
    echo '                    <div id="description">';
    echo '                        ' . $apiData['details']['description'];
    echo '                    </div>';
    echo '                </div>';
    echo '            </div>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
?>

<div class="share-container" style="margin-left: 40px;">
    <div class="share-text">Share this series:</div>
    <div class="share-icons">
        <a href="https://www.facebook.com/v5.0/dialog/share?app_id=671373654631248&channel_url=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1badaa664710f%26domain%3Dacharyaprashant.org%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Facharyaprashant.org%252Ff29bbb1b9d537e%26relation%3Dopener&display=popup&e2e=%7B%7D&fallback_redirect_uri=https%3A%2F%2Facharyaprashant.org%2Fen%2Fcourses%2Fseries%2Fcourse-series-eeb9d3&hashtag=%23AcharyaPrashant&href=https%3A%2F%2Facharyaprashant.org%2Fen%2Fcourses%2Fseries%2Fcourse-series-eeb9d3&locale=en_US&next=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df195ad8bc49e5f4%26domain%3Dacharyaprashant.org%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Facharyaprashant.org%252Ff29bbb1b9d537e%26relation%3Dopener%26frame%3Df31d4eee28d6ce8%26result%3D%2522xxRESULTTOKENxx%2522&quote=&sdk=joey&version=v5.0" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="15" height="34" viewBox="0 0 19 34" class="h-7 w-7"><g fill="none" fill-rule="evenodd"><path d="M0 0h19v34H0z"></path><path fill="#3E6FA7" stroke="#3E6FA7" stroke-width="1.393" d="M12.074 33H6.23l-.133-14.297H1V13.13h5.102l-.005-4.52C6.096 4.02 9.3 1 14.16 1l3.84.23v5.296h-3.394c-1.892 0-2.532 1.342-2.532 2.81v3.795h5.666l-.765 5.572h-4.9V33Z"></path></g></svg>
        </a> 

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Facharyaprashant.org%2Fen%2Fcourses%2Fseries%2Fcourse-series-eeb9d3&text=%0A&hashtags=AcharyaPrashant,VideoSeries,wisdom,spirituality" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="34" viewBox="0 0 38 34" class="h-7 w-7" style="margin-left: 16px;"><g fill="none" fill-rule="evenodd"><path d="M0 0h38v34H0z"></path><path fill="#08BBEE" d="M5.213 20.363a7.251 7.251 0 0 0 3.634-.251c-3.548-.578-6.262-3.748-6.262-7.572 0-.06 0-.119.002-.178a7.22 7.22 0 0 0 3.551.995c-2.13-1.348-3.553-3.773-3.553-6.542a7.82 7.82 0 0 1 1.05-3.931c3.78 4.663 9.323 7.75 15.572 8.17a8.141 8.141 0 0 1-.175-1.683c0-4.347 3.415-7.871 7.629-7.871 2.201 0 4.184.962 5.577 2.5a11.8 11.8 0 0 0 4.735-1.898A7.398 7.398 0 0 1 33.728 6.4 12.523 12.523 0 0 0 38 5.19a12.884 12.884 0 0 1-3.712 4.008l.002.173-.004.896c0 12.279-9.647 22.233-21.549 22.233-4.329 0-8.36-1.317-11.737-3.584.6.072 1.21.109 1.83.109 3.585 0 6.89-1.24 9.532-3.326-3.384 0-6.193-2.242-7.149-5.336Z"></path></g></svg>
        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
        <a href="https://api.whatsapp.com/send/?text=%0Ahttps%3A%2F%2Facharyaprashant.org%2Fen%2Fcourses%2Fseries%2Fcourse-series-eeb9d3&type=custom_url&app_absent=0" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="34" viewBox="0 0 32 34" class="h-7 w-7" style="margin-left: 16px;"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v34H0z"></path><path fill="#06BA27" d="M15.218 1.019c9.364-.445 17.065 7.145 16.774 16.455-.271 8.685-7.533 15.584-16.24 15.452A15.96 15.96 0 0 1 9.4 31.509l-.524-.249L.208 33l1.534-8.787A15.865 15.865 0 0 1 0 17.013C-.026 8.503 6.698 1.423 15.218 1.02Zm.781 3.098a13.055 13.055 0 0 0-9.205 3.804 12.888 12.888 0 0 0-3.812 9.184c0 1.889.393 3.7 1.17 5.392l.245.504.576 1.125-1.084 5.248 5.147-1.217 1.17.58a12.903 12.903 0 0 0 5.793 1.355 12.94 12.94 0 0 0 9.204-3.804 12.996 12.996 0 0 0 3.813-9.183c0-3.47-1.354-6.731-3.812-9.184a12.947 12.947 0 0 0-9.205-3.804ZM9.985 9.543a1.158 1.158 0 0 1 1.729.269l.075.143 1.304 2.943c.147.331.128.709-.044 1.02l-.098.15-.662.854c-.279.36-.316.854-.09 1.249.788 1.368 3.872 4.104 5.338 4.696.37.15.788.088 1.1-.147l.128-.111.758-.77c.26-.265.628-.386.989-.334l.154.033 3.1.888a1.152 1.152 0 0 1 .654 1.727c-.606.955-1.568 2.12-2.771 2.41-2.121.514-5.38.013-9.447-3.775-3.522-3.28-4.453-6.01-4.233-8.177.125-1.23 1.15-2.338 2.016-3.068Z"></path></g></svg>

        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://www.linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Facharyaprashant.org%2Fen%2Fcourses%2Fseries%2Fcourse-series-eeb9d3" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="34" viewBox="0 0 35 34" class="h-7 w-7" style="margin-left: 16px;"><g fill="none" fill-rule="evenodd"><path d="M0 0h35v34H0z"></path><path fill="#0A66C2" fill-rule="nonzero" d="M3.99 8.956c2.172 0 3.99-1.812 3.99-3.978C7.98 2.812 6.161 1 3.99 1 1.817 1 0 2.812 0 4.978c0 2.166 1.817 3.978 3.99 3.978ZM.665 33h6.65V10.9H.664V33ZM25.71 10.282c-2.926 0-5.143 1.06-6.34 2.696V10.9h-6.649V33h6.65V20.934c0-3.138 1.684-4.553 4.122-4.553 2.128 0 3.857 1.282 3.857 4.022V33H34V19.43c0-5.966-3.812-9.148-8.29-9.148Z"></path></g></svg>
        </a>
    </div>
</div>

<?php
    
    echo '<div class="video-series" style="margin-left: 42px;"><b> Video Series (' . $apiData['details']['coursesCount'] . ')</b></div>';
?>

<div class="course-section">

    <?php

    $courseCount = $apiData['details']['coursesCount'];

    echo '<div class="row ml-8">';

    for ($courseIndex = 0; $courseIndex < $courseCount; $courseIndex++) {

        $hours = floor($apiData['courses'][$courseIndex]['courseHours']);
        $minutes = round(($apiData['courses'][$courseIndex]['courseHours'] - $hours) * 60);

        echo '<a href="https://acharyaprashant.org/en/courses/course/' . $apiData['courses'][$courseIndex]['id'] . '" style="text-decoration: none;"><div class="md-4 ml-34">';

        echo '<div class="course-box"><br/>';
        echo '<div class="gray-box" style="color: white;">भाग ' . ($courseIndex + 1) . '</div>';
        echo '<div id="course_title" style="color: #646668;"><b>' . $apiData['courses'][$courseIndex]['title'] . '</b></div>';
        echo '<div class="mb-15" id="course_subtitle" >' . $apiData['courses'][$courseIndex]['subtitle'] . '</div>';
        
        if ($hours > 0) {
            echo '<div class="mb-15 font-color" >' . $hours . ' Hours';
            
            if ($minutes > 0) {
                echo ' ' . $minutes . ' Minutes';
            }
            
            echo '</div>';
        } else {
            echo '<div class="mb-15 font-color" >' . $minutes . ' Minutes</div>';
        }

        echo '<div class="mb-15 font-color" id="course_amount" ">Contribution: ₹' . $apiData['courses'][$courseIndex]['amount'] . '<span class="line-through" id="original_amount" style="color: black;"> ₹' . $apiData['courses'][$courseIndex]['originalAmount'] . '</span></div>';
        echo '<div class="mb-15 "><button class="orange-button" id="course_language" style="color: black;">' . ucfirst($apiData['courses'][$courseIndex]['language']) . '</button></div>';

        echo '<div style="color: #cf430d;">Add to cart | Enroll</div><br/>';
        echo '</div>';
        echo '</div></a>';
    }

    echo '</div>';
?>

</div>
<?php

    $data = file_get_contents("https://api.acharyaprashant.org/v2/legacy/courses/faqs?language=english");

    $faqs  = json_decode($data, true);

?>

<div class="faq-section">
    <div class="faq-box-heading" style="margin-top: 20px;">
        <h2 style="font-size: 1.5rem;"><b>FAQs</b></h2>
        <p>Can’t find the answer you’re looking for? Reach out to our support team.</p>
    </div>  
    <div class="faq-box">
        <div class="faq-content" id="faqContent">
            <?php $totalFaqs = count($faqs); ?>
            <?php foreach ($faqs as $index => $faq): ?>
                <div class="faq-item <?php echo ($index === $totalFaqs - 1) ? 'last-faq' : ''; ?>">
                    <div class="faq-question" id="faq_question_<?php echo htmlspecialchars($faq['question']); ?>">
                        <b><?php echo $faq['question']; ?></b>
                        <span class="arrow" onclick="toggleAnswer(this)">&#x25BE;</span>
                    </div>
                    <div class="faq-answer" id="faq_answer_<?php echo htmlspecialchars($faq['question']); ?>" >
                        <?php echo $faq['answer']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<br/>
<br/>
  <div class=" footer">
    <div class="row">
        <div class="col-md-2 footer-section">
            <h6 style="padding-left: 32px;"><b>LIVE EVENTS</b></h6>
            <p class="mt-16" style="padding-left: 32px;"><a href="https://acharyaprashant.org/en/online-courses/gita">Bhagavad Gita</a></p>
            <p style="padding-left: 32px;"><a href="https://acharyaprashant.org/en/sant-sarita">Sant Sarita</a></p>
            <p style="padding-left: 32px;"><a href="https://acharyaprashant.org/en/vedant-samhita"> Vedant Samhita </a> </p>
            <p style="padding-left: 32px;"><a href="https://acharyaprashant.org/en/bodh-pratyusha">Bodh Pratyusha</a></p>
        </div>

        <div class="col-md-2 footer-section">
            <h6><b>WISDOM CONTENT</b></h6>
            <p class="mt-16"><a href="https://acharyaprashant.org/en/courses">Video Series</a></p>
            <p><a href="https://acharyaprashant.org/en/books">AP Books</a></p>
            <p><a href="https://acharyaprashant.org/en/articles">AP Articles</a></p>
            <p><a href="https://acharyaprashant.org/en/circle">AP Circle</a></p>
        </div>

        <div class="col-md-2 footer-section">
            <h6><b>MORE</b></h6>
            <p class="mt-16"><a href="https://acharyaprashant.org/en/about">About Acharya Prashant</a></p>
            <p><a href="https://acharyaprashant.org/en/invite?tIn=0">Invite Him</a></p>
            <p><a href="https://acharyaprashant.org/en/invite?tIn=1">Interview Him</a></p>
            <p><a href="https://acharyaprashant.org/en/vedant">Ghar Ghar Upanishad</a></p>
            <p><a href="https://acharyaprashant.org/en/media">Media and Public Interaction</a></p>
        </div>

        <div class="col-md-2 footer-section">
            <h6><b>SOCIAL MEDIA</b></h6>
            <p class="mt-16">For English</p>
            <a href="https://www.youtube.com/c/AcharyaPrashant" target="_blank"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="15" viewBox="0 0 21 15" class="fill-current"><path d="M10.54-.001h.047l.365.002c.696.004 2.1.02 3.548.072l.512.02c1.535.066 3.032.177 3.705.365.899.247 1.608.97 1.85 1.888.407 1.514.432 4.512.433 5.078v.255c-.007.706-.056 3.531-.432 4.992a2.658 2.658 0 0 1-1.851 1.888c-1.42.381-6.516.433-7.88.44l-.183.001h-.491c-1.36-.008-6.446-.062-7.88-.459a2.659 2.659 0 0 1-1.851-1.888C.069 11.262.01 8.579 0 7.75v-.5c.01-.825.068-3.498.43-4.904C.675 1.43 1.402.687 2.283.44c.71-.19 2.34-.299 3.961-.36l.51-.018C8.11.018 9.393.005 10.048 0l.364-.002h.049ZM8.467 4.844a.448.448 0 0 0-.062.227v4.857a.448.448 0 0 0 .676.387l4.133-2.429a.448.448 0 0 0 0-.773L9.082 4.684a.448.448 0 0 0-.614.16Z"></path></svg> 
            </a>
            <a href="https://twitter.com/Prashant_Advait" target="_blank"> 
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" class="fill-current"><path fill-rule="evenodd" d="M2.671 9.124a4.06 4.06 0 0 0 1.873-.118c-1.829-.274-3.227-1.774-3.227-3.583V5.34a3.974 3.974 0 0 0 1.83.47c-1.097-.637-1.83-1.785-1.83-3.094 0-.68.197-1.316.541-1.86C3.805 3.06 6.662 4.522 9.882 4.72a3.549 3.549 0 0 1-.09-.796C9.792 1.867 11.552.2 13.723.2c1.135 0 2.157.455 2.874 1.183a6.399 6.399 0 0 0 2.44-.898 3.55 3.55 0 0 1-1.672 2.033 6.898 6.898 0 0 0 2.202-.572 6.335 6.335 0 0 1-1.913 1.896v.082l-.001.424c0 5.81-4.972 10.519-11.105 10.519A11.5 11.5 0 0 1 .5 13.17c.31.034.624.051.943.051a8.35 8.35 0 0 0 4.912-1.573c-1.744 0-3.191-1.06-3.684-2.525Z"></path></svg>
            </a>
            <a href="https://www.facebook.com/AdvaitAcharyaPrashant" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15" class="fill-current"><path d="M2.365 14.939V7.828H0V5.269h2.365V3.382C2.365 1.193 3.797 0 5.888 0 6.889 0 7.75.07 8 .1v2.29H6.55c-1.137 0-1.356.505-1.356 1.246v1.633h2.712l-.353 2.559h-2.36V15"></path></svg>
            </a>
            <a href="https://www.instagram.com/acharya_prashant_paf/" target="_blank">
               <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="fill-current"><path fill-rule="evenodd" d="M7.993 0h.219l.56.002c.936.004 1.23.016 1.82.043.8.036 1.344.163 1.821.348.5.189.954.484 1.329.866.382.374.677.828.865 1.328.185.477.312 1.023.349 1.821.031.696.042.98.044 2.381v1.423a54.45 54.45 0 0 1-.021 1.825l-.007.176-.016.38c-.037.798-.163 1.343-.349 1.82a3.835 3.835 0 0 1-2.193 2.194c-.478.186-1.023.312-1.821.349l-.38.016-.265.01c-.386.012-.825.017-1.736.018H6.789a58.968 58.968 0 0 1-1.736-.018l-.265-.01-.38-.016c-.798-.037-1.344-.163-1.82-.349a3.675 3.675 0 0 1-1.33-.865 3.676 3.676 0 0 1-.864-1.328c-.186-.478-.312-1.023-.349-1.821a35.056 35.056 0 0 1-.043-1.82L0 8.211V6.789l.002-.56c.004-.936.016-1.23.043-1.821.036-.798.163-1.344.348-1.82.189-.501.484-.955.866-1.33A3.676 3.676 0 0 1 2.587.395C3.064.208 3.61.08 4.407.044 5 .019 5.294.007 6.23.003L6.789 0h.219ZM7.5 1.351h-.25l-.646.001a38.38 38.38 0 0 0-2.134.043c-.73.033-1.128.155-1.392.258-.326.12-.62.312-.863.561a2.32 2.32 0 0 0-.56.863c-.104.264-.226.661-.26 1.393-.029.653-.04.928-.042 2.134v1.793a38.33 38.33 0 0 0 .043 2.134c.033.732.155 1.129.258 1.393.12.326.312.62.561.863.242.249.537.44.863.56.264.103.661.226 1.392.259l.461.02.173.006c.32.01.674.014 1.318.016l.38.001H8.58a55.05 55.05 0 0 0 1.318-.017l.172-.006.461-.02c.732-.033 1.129-.156 1.393-.258a2.484 2.484 0 0 0 1.423-1.424c.103-.264.225-.661.259-1.393.03-.653.04-.928.043-2.134V6.603a51.957 51.957 0 0 0-.018-1.5l-.006-.172c-.005-.144-.012-.29-.02-.461-.033-.732-.155-1.129-.258-1.393a2.322 2.322 0 0 0-.56-.863 2.326 2.326 0 0 0-.863-.56c-.264-.103-.661-.226-1.393-.259-.653-.03-.929-.04-2.134-.043H7.5Zm0 2.298a3.852 3.852 0 1 1 0 7.703 3.852 3.852 0 0 1 0-7.703ZM7.5 5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Zm4.004-2.404a.9.9 0 1 1 0 1.8.9.9 0 0 1 0-1.8Z"></path></svg> 
            </a>
            <a href="https://en.wikipedia.org/wiki/Acharya_Prashant" target="_blank">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" class="fill-current"><path d="M20 .517a.221.221 0 0 1-.221.222h-.618a.554.554 0 0 0-.513.347L13.008 15l-2.84-6.411L7.13 15 1.314 1.08a.554.554 0 0 0-.51-.34H.22C.099.74 0 .64 0 .516V0h5.025L5.01.523a.221.221 0 0 1-.22.217h-.841a.446.446 0 0 0-.412.61l4.082 10.387 2.065-4.5-2.61-6.158A.554.554 0 0 0 6.565.74h-.406c-.122 0-.22-.1-.22-.222V0h3.773v.517a.221.221 0 0 1-.221.222.446.446 0 0 0-.408.622l1.542 3.612L12.2 1.364a.446.446 0 0 0-.406-.625h-.59a.222.222 0 0 1-.221-.222V0h3.952v.517a.221.221 0 0 1-.22.222h-.658a.554.554 0 0 0-.502.321l-2.433 5.232 2.271 5.367 3.974-10.315a.446.446 0 0 0-.414-.605h-.982a.222.222 0 0 1-.221-.222V0H20v.517Z"></path></svg>
            </a>
            <p></p>

            <p>For Hindi</p>

            <a href="https://www.youtube.com/c/ShriPrashant" target="_blank">
               
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="15" viewBox="0 0 21 15" class="fill-current"><path d="M10.54-.001h.047l.365.002c.696.004 2.1.02 3.548.072l.512.02c1.535.066 3.032.177 3.705.365.899.247 1.608.97 1.85 1.888.407 1.514.432 4.512.433 5.078v.255c-.007.706-.056 3.531-.432 4.992a2.658 2.658 0 0 1-1.851 1.888c-1.42.381-6.516.433-7.88.44l-.183.001h-.491c-1.36-.008-6.446-.062-7.88-.459a2.659 2.659 0 0 1-1.851-1.888C.069 11.262.01 8.579 0 7.75v-.5c.01-.825.068-3.498.43-4.904C.675 1.43 1.402.687 2.283.44c.71-.19 2.34-.299 3.961-.36l.51-.018C8.11.018 9.393.005 10.048 0l.364-.002h.049ZM8.467 4.844a.448.448 0 0 0-.062.227v4.857a.448.448 0 0 0 .676.387l4.133-2.429a.448.448 0 0 0 0-.773L9.082 4.684a.448.448 0 0 0-.614.16Z"></path></svg> 
            </a>
            <a href="https://twitter.com/Advait_Prashant" target="_blank">
                
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" class="fill-current"><path fill-rule="evenodd" d="M2.671 9.124a4.06 4.06 0 0 0 1.873-.118c-1.829-.274-3.227-1.774-3.227-3.583V5.34a3.974 3.974 0 0 0 1.83.47c-1.097-.637-1.83-1.785-1.83-3.094 0-.68.197-1.316.541-1.86C3.805 3.06 6.662 4.522 9.882 4.72a3.549 3.549 0 0 1-.09-.796C9.792 1.867 11.552.2 13.723.2c1.135 0 2.157.455 2.874 1.183a6.399 6.399 0 0 0 2.44-.898 3.55 3.55 0 0 1-1.672 2.033 6.898 6.898 0 0 0 2.202-.572 6.335 6.335 0 0 1-1.913 1.896v.082l-.001.424c0 5.81-4.972 10.519-11.105 10.519A11.5 11.5 0 0 1 .5 13.17c.31.034.624.051.943.051a8.35 8.35 0 0 0 4.912-1.573c-1.744 0-3.191-1.06-3.684-2.525Z"></path></svg>
            </a>
            <a href="https://www.threads.net/@acharya_prashant_ap" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="15" viewBox="0 0 13 15" class="fill-current"><path d="M10.11 6.953a4.68 4.68 0 0 0-.198-.089c-.116-2.134-1.29-3.355-3.26-3.371h-.027c-1.179 0-2.16.5-2.763 1.409l1.084.745c.451-.68 1.159-.824 1.68-.824h.017c.65.004 1.139.191 1.455.557.231.265.386.634.462 1.096a8.352 8.352 0 0 0-1.867-.09C4.823 6.49 3.62 7.58 3.7 9.086a2.323 2.323 0 0 0 1.08 1.855 3.36 3.36 0 0 0 2.008.5c.98-.053 1.748-.42 2.285-1.104.407-.515.664-1.184.778-2.022.443.25.795.633 1.004 1.095.325.753.345 1.99-.672 3-.89.882-1.96 1.263-3.578 1.276-1.794-.013-3.15-.584-4.033-1.698-.823-1.051-1.25-2.558-1.265-4.487.015-1.928.442-3.435 1.272-4.479.883-1.114 2.24-1.685 4.034-1.698 1.807.013 3.187.59 4.103 1.707.45.549.788 1.239 1.011 2.044L13 4.738a6.815 6.815 0 0 0-1.273-2.553C10.543.75 8.824.015 6.613 0h-.009C4.398.015 2.697.753 1.557 2.191.54 3.476.017 5.261 0 7.496v.01c.018 2.236.541 4.02 1.557 5.303 1.14 1.44 2.839 2.178 5.047 2.191h.009c1.963-.013 3.347-.524 4.487-1.655 1.492-1.481 1.443-3.336.955-4.476-.352-.814-1.025-1.477-1.945-1.916M6.72 10.12c-.82.046-1.673-.32-1.716-1.104-.031-.582.417-1.23 1.768-1.308.154-.009.306-.013.454-.013a6.49 6.49 0 0 1 1.367.138c-.156 1.93-1.068 2.243-1.872 2.287"></path></svg>
            </a>
            <a href="https://www.facebook.com/Acharya.Prashant.Advait" target="_blank">
               
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15" class="fill-current"><path d="M2.365 14.939V7.828H0V5.269h2.365V3.382C2.365 1.193 3.797 0 5.888 0 6.889 0 7.75.07 8 .1v2.29H6.55c-1.137 0-1.356.505-1.356 1.246v1.633h2.712l-.353 2.559h-2.36V15"></path></svg>
            </a>
            <a href="https://www.instagram.com/acharya_prashant_ap/" target="_blank">
                
               <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="fill-current"><path fill-rule="evenodd" d="M7.993 0h.219l.56.002c.936.004 1.23.016 1.82.043.8.036 1.344.163 1.821.348.5.189.954.484 1.329.866.382.374.677.828.865 1.328.185.477.312 1.023.349 1.821.031.696.042.98.044 2.381v1.423a54.45 54.45 0 0 1-.021 1.825l-.007.176-.016.38c-.037.798-.163 1.343-.349 1.82a3.835 3.835 0 0 1-2.193 2.194c-.478.186-1.023.312-1.821.349l-.38.016-.265.01c-.386.012-.825.017-1.736.018H6.789a58.968 58.968 0 0 1-1.736-.018l-.265-.01-.38-.016c-.798-.037-1.344-.163-1.82-.349a3.675 3.675 0 0 1-1.33-.865 3.676 3.676 0 0 1-.864-1.328c-.186-.478-.312-1.023-.349-1.821a35.056 35.056 0 0 1-.043-1.82L0 8.211V6.789l.002-.56c.004-.936.016-1.23.043-1.821.036-.798.163-1.344.348-1.82.189-.501.484-.955.866-1.33A3.676 3.676 0 0 1 2.587.395C3.064.208 3.61.08 4.407.044 5 .019 5.294.007 6.23.003L6.789 0h.219ZM7.5 1.351h-.25l-.646.001a38.38 38.38 0 0 0-2.134.043c-.73.033-1.128.155-1.392.258-.326.12-.62.312-.863.561a2.32 2.32 0 0 0-.56.863c-.104.264-.226.661-.26 1.393-.029.653-.04.928-.042 2.134v1.793a38.33 38.33 0 0 0 .043 2.134c.033.732.155 1.129.258 1.393.12.326.312.62.561.863.242.249.537.44.863.56.264.103.661.226 1.392.259l.461.02.173.006c.32.01.674.014 1.318.016l.38.001H8.58a55.05 55.05 0 0 0 1.318-.017l.172-.006.461-.02c.732-.033 1.129-.156 1.393-.258a2.484 2.484 0 0 0 1.423-1.424c.103-.264.225-.661.259-1.393.03-.653.04-.928.043-2.134V6.603a51.957 51.957 0 0 0-.018-1.5l-.006-.172c-.005-.144-.012-.29-.02-.461-.033-.732-.155-1.129-.258-1.393a2.322 2.322 0 0 0-.56-.863 2.326 2.326 0 0 0-.863-.56c-.264-.103-.661-.226-1.393-.259-.653-.03-.929-.04-2.134-.043H7.5Zm0 2.298a3.852 3.852 0 1 1 0 7.703 3.852 3.852 0 0 1 0-7.703ZM7.5 5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Zm4.004-2.404a.9.9 0 1 1 0 1.8.9.9 0 0 1 0-1.8Z"></path></svg> 
            </a>
        </div>

        <div class="col-md-2 footer-section">
            <h6><b>DOWNLOAD APP</b></h6>
            <img src="images/ic_favicon.png" alt="Acharya Prashant" style="width: 13%;"> <span class="mt-16">Acharya Prashant</span>
            <p></p>
            <p><a href="https://play.google.com/store/apps/details?id=org.acharyaprashant.apbooks&pli=1"><img src="images/ic_googleplay.png" alt="Google Play" style="width: 62%;"></a></p>
            <p><a href="https://apps.apple.com/in/app/acharya-prashant/id1603611866"><img src="images/ic_appstore.png" alt="App Store" style="width: 62%;"></a></p>
        </div>

        <div class="col-md-2 footer-section">
            <h6><b>CONTACT US</b></h6>
            <p class="mt-16">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" class="fill-current"><g fill="none" fill-rule="evenodd" stroke="#CBD5E1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m1 4 7.89 5.26a2 2 0 0 0 2.22 0L19 4"></path><path d="M3 15h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2Z"></path></g></svg>
                <a href="mailto:support@advait.org.in" > support@advait.org.in</a>
            </p>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" class="fill-current"><g fill="none"><path stroke="#CBD5E1" stroke-width="1.714" d="M8.609 1.51C4.349 1.711.987 5.25 1 9.506a7.932 7.932 0 0 0 .87 3.6L1.105 17.5l4.334-.87a7.977 7.977 0 0 0 3.438.833c4.354.066 7.984-3.383 8.12-7.726.145-4.655-3.705-8.45-8.387-8.228Z"></path><path fill="#CBD5E1" d="m12.883 11.213-1.55-.444a.578.578 0 0 0-.572.15l-.378.385a.565.565 0 0 1-.614.13C9.036 11.138 7.494 9.77 7.1 9.085a.562.562 0 0 1 .045-.624l.33-.427a.575.575 0 0 0 .072-.585l-.652-1.471a.579.579 0 0 0-.903-.207c-.432.365-.945.92-1.008 1.534-.11 1.084.356 2.45 2.117 4.089 2.034 1.894 3.663 2.144 4.724 1.888.601-.145 1.082-.728 1.385-1.205a.576.576 0 0 0-.327-.864Z"></path></g></svg>
                <a href="https://wa.me/+919643750710" target="_blank">+91 9650585100</a></p>
            <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" class="fill-current"><path fill="#CBD5E1" d="m15.697 11.323-2.976-.862a1.103 1.103 0 0 0-1.098.292l-.727.747a1.078 1.078 0 0 1-1.179.251c-1.408-.574-4.369-3.228-5.125-4.556a1.1 1.1 0 0 1 .086-1.21l.635-.83c.249-.324.301-.76.137-1.135L4.198 1.166a1.105 1.105 0 0 0-1.733-.4C1.635 1.474.649 2.55.529 3.742c-.211 2.101.683 4.75 4.064 7.932 3.907 3.675 7.035 4.16 9.072 3.663 1.155-.282 2.078-1.413 2.661-2.338a1.122 1.122 0 0 0-.63-1.676Z"></path></svg>
            <a href="tel:+919650585100">+91 9650585100</a></p>
        </div>
    </div>
    <div style="border-bottom: 1px solid gray"></div>
        <p></p>
        <div style="text-align: center; ">
            <p> Copyright © 2022 PrashantAdvait Foundation <span></span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Terms & Conditions  &nbsp;  | &nbsp; Privacy Policy  &nbsp; |   &nbsp;Undertaking   </p>
        </div>
        <br/>
    </div>
<script>

    function toggleDropdown() {
        var dropdownContent = document.querySelector('.language-dropdown-content');
        var downArrow = document.querySelector('.down-arrow');
        var upArrow = document.querySelector('.up-arrow');

        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        } else {
            dropdownContent.style.display = 'block';
            downArrow.style.transform = 'rotate(180deg)';
            upArrow.style.transform = 'rotate(0deg)';
        }
    }

    document.addEventListener('click', function (event) {
        var dropdownContent = document.querySelector('.language-dropdown-content');
        var downArrow = document.querySelector('.down-arrow');
        var upArrow = document.querySelector('.up-arrow');

        if (!event.target.matches('.down-arrow') && !event.target.matches('.up-arrow')) {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        }
    });

    function toggleDropdownSession() {
        var dropdownContent = document.querySelector('.session-dropdown-content');
        var downArrow = document.querySelector('.down-arrow-session');
        var upArrow = document.querySelector('.up-arrow-session');

        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        } else {
            dropdownContent.style.display = 'block';
            downArrow.style.transform = 'rotate(180deg)';
            upArrow.style.transform = 'rotate(0deg)';
        }
    }

    document.addEventListener('click', function (event) {
        var dropdownContent = document.querySelector('.session-dropdown-content');
        var downArrow = document.querySelector('.down-arrow-session');
        var upArrow = document.querySelector('.up-arrow-session');

        if (!event.target.matches('.down-arrow-session') && !event.target.matches('.up-arrow-session')) {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        }
    });

    function toggleDropdownInvite() {
        var dropdownContent = document.querySelector('.invite-dropdown-content');
        var downArrow = document.querySelector('.down-arrow-invite');
        var upArrow = document.querySelector('.up-arrow-invite');

        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        } else {
            dropdownContent.style.display = 'block';
            downArrow.style.transform = 'rotate(180deg)';
            upArrow.style.transform = 'rotate(0deg)';
        }
    }

    document.addEventListener('click', function (event) {
        var dropdownContent = document.querySelector('.invite-dropdown-content');
        var downArrow = document.querySelector('.down-arrow-invite');
        var upArrow = document.querySelector('.up-arrow-invite');

        if (!event.target.matches('.down-arrow-invite') && !event.target.matches('.up-arrow-invite')) {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        }
    });

    function toggleDropdownInvite() {
        var dropdownContent = document.querySelector('.invite-dropdown-content');
        var downArrow = document.querySelector('.down-arrow-invite');
        var upArrow = document.querySelector('.up-arrow-invite');

        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        } else {
            dropdownContent.style.display = 'block';
            downArrow.style.transform = 'rotate(180deg)';
            upArrow.style.transform = 'rotate(0deg)';
        }
    }

    document.addEventListener('click', function (event) {
        var dropdownContent = document.querySelector('.invite-dropdown-content');
        var downArrow = document.querySelector('.down-arrow-invite');
        var upArrow = document.querySelector('.up-arrow-invite');

        if (!event.target.matches('.down-arrow-invite') && !event.target.matches('.up-arrow-invite')) {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        }
    });

    function toggleDropdownSeries() {
        var dropdownContent = document.querySelector('.series-dropdown-content'); 
        var downArrow = document.querySelector('.down-arrow-series');
        var upArrow = document.querySelector('.up-arrow-series');

        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
            downArrow.style.transform = 'rotate(0deg)';
            upArrow.style.transform = 'rotate(180deg)';
        } else {
            dropdownContent.style.display = 'block';
            downArrow.style.transform = 'rotate(180deg)';
            upArrow.style.transform = 'rotate(0deg)';
        }
    }
    function handleSeriesSelection(tagName) {
        alert('Selected series: ' + tagName);
    }

    function toggleAnswer(arrow) {
        var faqItem = arrow.closest('.faq-item');
        var answer = faqItem.querySelector('.faq-answer');
        
        if (answer.style.display === 'block') {
            answer.style.display = 'none';
        } else {
            var allAnswers = document.querySelectorAll('.faq-answer');
            allAnswers.forEach(function (element) {
                element.style.display = 'none';
            });

            answer.style.display = 'block';
        }
    }
</script>

</body>
</html>
