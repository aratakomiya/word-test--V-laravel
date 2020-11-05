<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/word-test.css')}}">
    <title>top</title>
</head>

<body>
    <div class="imagesBox">
        <h1>単語テストを選択してください</h1>
        <form method="get" action="juniorSelect">
            <input type="image" src="images/junior_en.png" class="topImage">
        </form>
        <form method="get" action="search" >
            <input type="hidden" name="tableName" value="kanji">
            <input type="image" src="images/kanji.png" class="topImage">
        </form>
        <form method="get" action="search">
            <input type="hidden" name="tableName" value="target_5">
            <input type="image" src="images/target_5.jpeg" class="topImage">
        </form>
        <form method="get" action="search">
            <input type="hidden" name="tableName" value="target_6">
            <input type="image" src="images/target_6.jpeg" class="topImage">
        </form>
        <form method="get" action="search">
            <input type="hidden" name="tableName" value="system">
            <input type="image" src="images/system.jpg" class="topImage">
        </form>
        <form method="get" action="search">
            <input type="hidden" name="tableName" value="system_5">
            <input type="image" src="images/system_5jpeg.jpeg" class="topImage">
        </form>
        <form method="get" action="search">
            <input type="hidden" name="tableName" value="sokutan_low">
            <input type="image" src="images/sokudoku.jpg" class="topImage">
        </form>
        <form method="get" action="search">
            <input type="hidden" name="tableName" value="sokutan_high">
            <input type="image" src="images/senior.jpg" class="topImage">
        </form>
        <form method="get" action="search">
            <input type="hidden" name="tableName" value="sokujuku">
            <input type="image" src="images/sokujuku.jpeg" class="topImage">
        </form>
        <form method="get" action="search">
            <input type="hidden" name="tableName" value="duo">
            <input type="image" src="images/duo.jpeg" class="topImage">
        </form>
        <form method="get" action="search">
            <input type="hidden" name="tableName" value="toushin">
            <input type="image" src="images/toushin.jpeg" class="topImage">
        </form>
        <form method="get" action="search">
            <input type="hidden" name="tableName" value="toushin_i">
            <input type="image" src="images/toushin_i.jpeg" class="topImage">
        </form>
        <form method="get" action="search">
            <input type="hidden" name="tableName" value="kobun315">
            <input type="image" src="images/kobun315.jpeg" class="topImage">
        </form>
        <form method="get" action="search">
            <input type="hidden" name="tableName" value="madonna">
            <input type="image" src="images/madonna.jpg" class="topImage">
        </form>
        <form method="get" action="search">
            <input type="hidden" name="tableName" value="tunagaru">
            <input type="image" src="images/tunagaru.jpeg" class="topImage">
        </form>
        <form method="get" action="search">
            <input type="hidden" name="tableName" value="pass_s2">
            <input type="image" src="images/pass_s2.png" class="topImage">
        </form>
    </div>
</body>

</html>