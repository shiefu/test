<html lang="en">
<head>
    <meta charset="utf-8">
    <title>id demo</title>
    <style>
        div {
            width: 90px;
            height: 90px;
            float: left;
            padding: 5px;
            margin: 5px;
            background-color: #eee;
        }
    </style>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

<div id="notMe"><p>id="notMe"</p></div>
<div id="myDiv">id="myDiv"</div>

<script>
    $( "#myDiv" ).css( "border", "3px solid red" );
    alert($("#myDiv").text());
</script>

</body>
</html>