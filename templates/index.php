<html>
    <head>
    <meta charset="utf-8">
    <title> Task2 </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->    
    </head>
    <body>
        <div class="alert alert-info" role="alert" style="width:30%">
            <p> Calculator: 
                number first: <?php echo $arrayValues['numFirst']?>,
                number second: <?php echo $arrayValues['numSecond']?>    
            </p>
            <p style="color: red"><?php echo $message?></p>
        </div>

        <ul class="list-group" style="width:30%" <?php echo $hidTable?>>
            <li class="list-group-item">
                <span class="badge"><?php echo $arrayValues['plusResult'] ?></span>
                Addition
            </li>
            <li class="list-group-item">
                <span class="badge"><?php echo $arrayValues['minResult'] ?></span>
                Derogation
            </li>
            <li class="list-group-item">
               <span class="badge"><?php echo round($arrayValues['divResult'], 3) ?></span>
                Division
            </li>
            <li class="list-group-item">
               <span class="badge"><?php echo $arrayValues['mulResult'] ?></span>
                Multiplication
            </li>
            <li class="list-group-item">
               <span class="badge"><?php echo round($arrayValues['sqRootA'], 3) ?></span>
                Square root NumA
            </li>
            <li class="list-group-item">
               <span class="badge"><?php echo round($arrayValues['sqRootB'], 3) ?></span>
                Square root NumB
            </li>
            <li class="list-group-item">
               <span class="badge"><?php echo $arrayValues['mPlusA'] ?></span>
                Remember M+ NUM1
            </li>
            <li class="list-group-item">
               <span class="badge"><?php echo $arrayValues['mPlusB'] ?></span>
                Remember M+ NUM2
            </li>
            <li class="list-group-item">
               <span class="badge"><?php echo $arrayValues['mMinusA'] ?></span>
                Remember M- NUM1
            </li>
            <li class="list-group-item">
               <span class="badge"><?php echo $arrayValues['mMinusB'] ?></span>
                Remember M- NUM2
            </li>
            <li class="list-group-item">
               <span class="badge"><?php echo $arrayValues['percentA'] ?></span>
                Percent NUM1
            </li>
            <li class="list-group-item">
               <span class="badge"><?php echo $arrayValues['percentB'] ?></span>
                Percent NUM2
            </li>
        </ul>
    </body>
</html>
