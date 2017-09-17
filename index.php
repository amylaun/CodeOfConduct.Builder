<head>
    <meta name="description" content="A Template for generate Codes of Conduct">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
    <link rel="stylesheet" href="./node_modules/milligram/dist/milligram.min.css">
    <link rel="stylesheet" href="https://milligram.github.io/styles/main.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="icon" href="assets/images/signpost.png">
    <title>Code of Conduct Remixer</title>

    <style>
h1 {text-align:center;}
    </style>
</head>

<div id="title" class="container" text-align="center">
    <h1>Code of Conduct Builder</h1>
</div>

<section class="container">
    <div class="leftFrame" id="leftFrame" scrolling="no">
        <div class="container" id="code-generator">

            <h3>Getting Started</h3>
            <div id="your-info">
                <label>What is the name of your event?</label>
                <input type="text" name="event-name" id="event-name"> 
            </div>
            <div id="event-type-c">
                <label>What are you making a Code of Conduct for?</label>
                <select name="event_type" id="event-type">
                    <option value="1" label="Event (General)" selected="selected">Event (General)</option>
                    <option value="2" label="Event (Conference)">Event (Conference)</option>
                    <option value="3" label="Organisation (General)">Organisation (General)</option>
                    <option value="3" label="Organisation (Online">Organisation (Online)</option>
                </select>
            </div>
            <div id="cocPreset">
                <label>Choose a Code of Conduct to start remixing?</label>
                <select id="coc-base">
                    <option value=" " label="" selected="selected">Choose one</option>
                    <option value="geekfeminisminit" label="General (Geek Feminism Wiki)">General (Geek Feminism Wiki)</option>
                    <option value="ContributorCovenant" label="Contributor Covenant">Contributor Covenant</option>
                    <option value="MozSciLab" label="MozSciLab">Mozilla Science Lab</option>
                </select>
            </div>

            <h3>Confirmation</h3>
            <div id = "Acceptance Request">
                <p>Do you want to add an acceptance request at the end of the Code of Conduct?</p>
                <input type="checkbox" id="Yes-phys">
                <label class="label-inline" for="Yes-phys">Yes - leave space for a physical signative</label>
                </br>
                <input type="checkbox" id="Yes-elec">
                <label class="label-inline" for="Yes-elec">Yes - add a checkbox confirmation</label>
                </br>
                <input type="checkbox" id="No">
                <label class="label-inline" for="No">No</label>
            </div>
        </div>
    </div>

    <div class="rightFrame" id="rightFrame" contenteditable="true">
        <h2 id = your-title>Preview - Your Title Goes Here </h2> 
        <h4 id = "sub-title-pre" style="display: inline; font-weight:bold"> Based on:</h4> <h4 id = "sub-title" style="display: inline-block"> X </h4>
        <h3>Encouraged Behaviour</h3>
        <ul id="goodlist"></ul>
        <br>
        <h3>Unacceptable Behaviour</h3>
        <ul id="badlist"></ul>
        <h3>How can I report a violation of the Code of Conduct?</h3>
        <ul id="reporting"></ul>
    </div>
</section>

<script src='assets/js/jquery.js'></script>
<script src='assets/js/main.js'></script>
