<html>
<head>
<!--    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(document).ready(function(){
            function solution(){
                var result = "";
                $("td").each(function () {
                    if($.trim($(this).text()) != '' && $(this).css("background-color") != $(this).css("color")){
                        result = result + $(this).text();
                    }
                });

                return result;
            }

            console.log(solution());
        });
    </script>
</head>

<body>

<table>

<table>
    <tbody>
    <tr>
        <td style="color: #ff00ff; background-color:#FFFFFF">Q</td>
        <td style="background-color: #442244; color: #442244">Y</td>
        <td style="color: #FFFF00; background-color:#442244">A</td>
    </tr>
    <tr>
        <td style="color: #FFEEFE; background-color:#990000">Q</td>
        <td style="color: #FFFF00; background-color:#FF0">M</td>
        <td style="color: #000000; background-color:#FF7777">O</td>
    </tr>
    </tbody>
</table>

</body>


</html>