<html>

    <head>
        <meta charset="utf-8">
        <title>Pechckin's HTML</title>
        <link type="text/css" rel= "stylesheet" href="style.css"/>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

        <script type="text/javascript" src="script.js">
        </script>
        <style>
            p { background-color: #ececec; }
        </style>
    </head>
    <body>
        <table style="width:100%">
            <tr>
                <td style="width:20%">
                    <table>
                        <tr>
                            <td>Имя</td>
                            <td><input id="name-input"></td>
                        </tr>

                        <tr>
                            <td>Фамилия</td>
                            <td><input id="surname-input"></td>
                        </tr>

                        <tr>
                            <td>Телефон</td>
                            <td><input id="phone-input"></td>
                        </tr>
                    </table>
                </td>
                <td style="width:80%; height:100%">
                    <button id="submit-btn">экШН</button>
                </td>
            </tr>
        </table>
        <br>
        
        <button id="reload">Reload</button>
        <button id="del">Delete</button>
        <div id='phonebook'>
            <table id='phone-book'>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Surname</td>
                    <td>Phone</td>
                </tr>
            </thead>
            <tbody>
                </tbody>
            </table>
        </div>
        
        
        
    </body>
</html>
