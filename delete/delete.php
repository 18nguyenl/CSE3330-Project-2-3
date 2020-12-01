
<!-- Long Nguyen, 1001247753 -->
<!-- Renato Amado, 1001355338 -->
<!-- 11-30-2020 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Covid-19 Data</title>

    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header class="center w-75">
        <h1 class="f-headline lh-solid">Covid-19 Data</h1>
    </header>
    <main class="center w-75">
        <article class="mv5">
            <h2 class="f1 lh-title">Start here</h2>
            <p>
                Remove a county here.
            </p>
        </article>

        <form action="delete.controller.php" method="POST">
                <legend class="f4 fw6 ph0 mh0">Remove County</legend>

                <div class="mv2">
                    <label class="db lh-copy f6" for="county-name">County Name</label>
                    <input class="pa2 input-reset ba" type="text" name="county-name" id="county-name">
                </div>

                <div class="">
                    <input class="b ph3 pv2 input-reset ba b--black bg-transparent grow pointer f6 dib" type="submit" value="Remove">
                </div>
        </form>
    </main>
</body>
</html>
