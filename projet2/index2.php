<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<html>
<head>

</head>

<body>
    <h1>SR03</h1>
    <p>Projet : AFFICHAGE GRAPHIQUE D'UN EMPLOI DU TEMPS D'UN ÉTUDIANT</p>
    <p>Étudiants : Luxin ZHANG, Jianghan LI</p>

        Url du webservice: https://webapplis.utc.fr/Edt_ent_rest/myedt/result?login=cmarti04

        <form action="/example/html/form_action.asp" method="get">
            <p>Login: <input type="text" name="login" /></p>
            <input type="submit" value="Submit" />
        </form>

        <p>请单击确认按钮，输入会发送到服务器上</p>
        <?php
            $url = "https://webapplis.utc.fr/Edt_ent_rest/myedt/result?login=cmarti04";
            $html = file_get_contents($url);
            echo $html;
        ?>
</body>
</html>
