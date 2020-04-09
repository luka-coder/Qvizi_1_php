<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="">
    <table class="table1" cellspacing = 0>
        <tr>
            <td>სახელი</td>
            <td><input type="text" name="first" ></td>
        </tr>
        <tr>
            <td>გვარი</td>
            <td><input type="text" name="last"></td>
        </tr>
        <tr>
            <td>დაბადების თარიღი</td>
            <td><input type="date" name="date" id=""></td>
        </tr>
        <tr>
            <td>პირადი ნომერი</td>
            <td><input type="number" name="id" id=""></td>
        </tr>
        <tr>
            <td>მისამართი</td>
            <td><input type="text" name="misamarti" id=""></td>
        </tr>
        <tr>
            <td>რეგისტრაციის თარიღი</td>
            <td><input type="date" name="regdate" id=""></td>
        </tr>
        <tr>
            <td>მობილური</td>
            <td><input type="number" name="phone" id=""></td>
        </tr>
        <tr>
            <td>დამატებითი ინფორმაცია</td>
            <td><input type="text" name="info"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="გაგზავნა" name="send"></td>
        </tr>
    </table>
    </form>
    <?php
        if(isset($_GET["send"])){
            include "action.php";
        }
    ?>
</body>
</html>