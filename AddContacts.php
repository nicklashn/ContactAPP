<!doctype html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/AddContacts.css">
    <title> Contact APP </title>
</head>

<body>
    <h1> Contact APP</h1>
    <hr>
    <form name="myform" id="myform" method="post" action="mailto: Nicklashn@hotmail.com" autocomplete="on">
        <div>
            <div>
                <div id="name">
                    Name <input type="text" name="name" id="name" required size="60" maxlength="100">
                </div>
            </div>
            <div>
                <div id="surname">
                    Surname <input type="text" name="surname" id="surname" required size="60" maxlength="90">
                </div>
            </div>
            <div>
                <div id="description">
                    Description <textarea>Add Comments</textarea>
                </div>
            </div>
            <div>
                <div id="email">
                    Email <input type="text" name="email" id="email" required size="60" maxlength="100">
                </div>
            </div>
            <div>
                <div id="phone">
                    Phone <input type="text" name="phone" id="phone" required size="60" maxlength="100">
                </div>
            </div>
        </div>
        <div>
            <a href="AddContacts.php">Add</a>
        </div>
        <a href="Homepage.php">Back</a>
    </form>
</body>

</html>