<?php
// song, band, mood
$title = "Clocks";
$artist = "Coldplay";
$mood = "Anxious";

// num variables
$verseCount = 4;
$repeatChorus = "1";  // type juggling example

// arrays of nouns and verbs from lyrics
$nouns = ["lights", "clocks", "disease", "cure", "tiger", "home", "head", "opportunities"];
$verbs = ["saved", "tamed", "ticking", "missed", "beg", "plead", "named", "stops"];

// song structure
$verse1 = [
    "The $nouns[0] go out and I can't be $verbs[0]",
    "Tides that I tried to swim against",
    "Have brought me down upon my knees",
    "Oh, I $verbs[4], I $verbs[4] and $verbs[5]",
    "Singing come out the things unsaid",
    "Shoot an apple off my $nouns[6]",
    "And a trouble that can't be $verbs[6]",
    "A $nouns[4] is waiting to be $verbs[1], singing"
];

$chorus = [
    "You are",
    "You are"
];

$verse2 = [
    "Confusion never $verbs[7]",
    "Closing walls and $verbs[2] $nouns[1]",
    "Gonna come back and take you $nouns[5]",
    "I could not stop and you now know",
    "Singing come out upon my seas",
    "Cursed $verbs[3] $nouns[7]",
    "Am I a part of the $nouns[3]",
    "Or am I part of the $nouns[2]? Singing"
];

$verse3 = [
    "And nothing else compares",
    "Oh, no, nothing else compares",
    "And nothing else compares"
];

$verse4 = [
    "Home, $nouns[5], where I wanted to go",
    "Home, $nouns[5], where I wanted to go",
    "Home, $nouns[5], where I wanted to go",
    "Home, $nouns[5], where I wanted to go"
];
?>
<!DOCTYPE html> <!-- CSS Code -->
<html>
<head>
    <title><?php echo "$title by $artist"; ?></title>
<style>
    body {
        background-color: #0f2027;
        background-image: linear-gradient(to right, #2c5364, #203a43, #0f2027);
        color: #f0f0f0;
        font-family: 'Helvetica Neue', sans-serif;
        padding: 40px;
        margin: 0;
    }

    h1 {
        font-size: 3em;
        color: #ffffff;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
        margin-bottom: 0.2em;
    }

    h3 {
        font-weight: 300;
        color: #dcdcdc;
        margin-top: 0;
        margin-bottom: 2em;
    }

    h4 {
        font-size: 1.5em;
        color: #66ccff;
        border-bottom: 1px solid #444;
        padding-bottom: 5px;
        margin-top: 2em;
    }

    p {
        margin: 6px 0;
        font-size: 1.1em;
        line-height: 1.6;
    }

    .chorus {
        font-style: italic;
        color: #ffcc70;
        margin-left: 10px;
    }

    .section {
        margin-bottom: 30px;
    }
</style>
</head>
<body> <!-- Organizing Verses and Chorus -->
    <h1><?php echo $title; ?></h1>
    <h3>By <?php echo $artist; ?></h3>
    <h3>Mood: <?php echo $mood; ?></h3>

    <h4>Verse 1</h4>
    <?php foreach ($verse1 as $line) echo "<p>$line</p>"; ?>

    <h4>Chorus </h4>
    <?php
    for ($i = 0; $i < $repeatChorus; $i++) {
        foreach ($chorus as $line) echo "<p>$line</p>";
    }
    ?>

    <h4>Verse 2</h4>
    <?php foreach ($verse2 as $line) echo "<p>$line</p>"; ?>

    <h4>Chorus </h4>
    <?php
    for ($i = 0; $i < $repeatChorus; $i++) {
        foreach ($chorus as $line) echo "<p>$line</p>";
    }
    ?>
        <?php
    for ($i = 0; $i < $repeatChorus; $i++) {
        foreach ($chorus as $line) echo "<p>$line</p>";
    }
    ?>
    <?php
    for ($i = 0; $i < $repeatChorus; $i++) {
        foreach ($chorus as $line) echo "<p>$line</p>";
    }
    ?>

    <h4>Bridge</h4>
    <?php foreach ($verse3 as $line) echo "<p>$line</p>"; ?>

    <h4>Chorus </h4>
    <?php
    for ($i = 0; $i < $repeatChorus; $i++) {
        foreach ($chorus as $line) echo "<p>$line</p>";
    }
    ?>

    <h4>Outro</h4>
    <?php foreach ($verse4 as $line) echo "<p>$line</p>"; ?>
</body>
</html>
