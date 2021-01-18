<?php
$conn = mysqli_connect(
    '13.209.8.36',
    'root',
    '',
    'study'
);

$sql = "select * from news";
$result = mysqli_query($conn, $sql);
?>
<html>
<head>
    <title>Corona News</title>
    <style>
        .list-container {
            display: flex;
            flex-direction: column;
            width: 50%;
            border-radius: 4px;
            border: 1px solid #eaeaea;
        }

        h1 {
            padding: 16px 24px;
            margin: 0;
            border-bottom: 1px solid #eaeaea;
        }

        #list {
            margin: 32px 0;
            list-style: none;
        }

        .list-item {
            border-bottom: 1px solid #eaeaea;
            margin-right: 32px;
            padding: 16px 0;
            font-size: 14px;
        }

        a {
            text-decoration: none;
        }

    </style>
</head>
<body>
<div class="list-container">
    <h1>코로나 뉴스 수정!!</h1>
    <ul id="list">
        <?php
            while($row = mysqli_fetch_array($result)) {
        ?>
        <li class="list-item"><a href="<?php echo $row['link'] ?>"><?php echo $row['title'] ?></a></li>
        <?php
         }
        ?>
    </ul>
</div>
</body>
</html>