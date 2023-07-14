<html>
    <head>
        <title>Learn PHP</title>
        <style>
            .container {
                display: flex;
            }

            sidebar {
                width: 20%;
            }
        </style>
    </head>
    <body>
        <?php
            $pageName = '';

            if (!empty($_GET['categoryId'])) {
                switch($_GET['categoryId']) {
                    case 1:
                        $pageName = 'Mobile';
                        break;
                    case 2:
                        $pageName = 'Laptop';
                        break;
                    case 3:
                        $pageName = 'Printer';
                        break;
                }
            }
        ?>

        <div class='container'>
            <sidebar>
                <ul>
                    <li><a href="category.php?categoryId=1">Mobile</a></li>
                    <li><a href="category.php?categoryId=2">Laptop</a></li>
                    <li><a href="category.php?categoryId=3">Printer</a></li>
                    <li><a href="category.php?categoryId=4">HP</a></li>
                    <li><a href="category.php?categoryId=5">Dell</a></li>
                    <li><a href="category.php?categoryId=6">Macbook</a></li>
                </ul>
            </sidebar>
            <main>
                <?php if (!empty($pageName)): ?>
                <p>Bạn đang ở trang <?= $pageName ?></p>
                <form action="" method="post">
                    <input type="text" />
                    <button>Send</button>
                </form>
                <?php endif ?>
            </main>
        </div>
    </body>
</html>