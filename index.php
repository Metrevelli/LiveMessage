<html>
    <head>
        <title>LiveMessage</title>
        <link rel="stylesheet" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet" type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Bad+Script|Indie+Flower" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="messageLink" hidden>
                <span class="linkLabel">Here you go!</span>
                <input type="text" id="link" spellcheck="false" readonly value=""/>
                <a href="./" class="action-button shadow animate red anotherMessage">Create another Message</a>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <textarea id="text" name="text" class="textarea" spellcheck="false" placeholder="Your text goes here : )"></textarea>
                <input class="action-button shadow animate yellow submit" type="submit" value="Create Message" name="submit">
                <input type="file" name='file'>
            </form>
        </div>
        <script src="js/script.js"></script>
    </body>
</html> 