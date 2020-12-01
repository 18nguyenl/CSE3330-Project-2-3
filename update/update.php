
<!-- Long Nguyen, 1001247753 -->
<!-- Renato Amado, 1001355338 -->
<!-- 11-30-2020 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Covid-19 Data</title>

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
                Update the name of a county here.
            </p>
        </article>

        <form action="update.controller.php" method="POST">
            <fieldset class="ba b--transparent pa0 ma0">
                <legend class="f4 fw6 ph0 mh0">Covid-19 Data Input</legend>

                <fieldset class="ba b--transparent pa0 ma0 mv3">
                    <legend class="f5 fw6 ph0 mh0">County Names</legend>

                    <div class="mv2">
                        <label class="db lh-copy f6" for="old-county-name">Old County Name</label>
                        <input class="pa2 input-reset ba" type="text" name="old-county-name" id="old-county-name">
                    </div>

                    <div class="mv2">
                        <label class="db lh-copy f6" for="new-county-name">New County Name</label>
                        <input class="pa2 input-reset ba" type="text" name="new-county-name" id="new-county-name">
                    </div>
                </fieldset>

                <div class="">
                    <input class="b ph3 pv2 input-reset ba b--black bg-transparent grow pointer f6 dib" type="submit" value="Update">
                </div>
            </fieldset>
        </form>
    </main>
</body>
</html>
