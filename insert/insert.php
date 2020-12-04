<!-- Long Nguyen, 1001247753 -->
<!-- Renato Amado, 1001355338 -->
<!-- 11-30-2020 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Covid-19 Data</title>

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
                This is where we'll add a Covid-19 data entry. Please give us the:
            </p>

            <ul>
                <li>State Abbreviation</li>
                <li>County Name</li>
                <li>Population</li> 
            </ul>
        </article>

        <form action="insert.controller.php" method="POST">
            <fieldset class="ba b--transparent pa0 ma0">
                <legend class="f4 fw6 ph0 mh0">Covid-19 Data Input</legend>

                <fieldset class="ba b--transparent pa0 ma0 mv3">
                    <legend class="f5 fw6 ph0 mh0">Names</legend>

                    <div class="dib mv2 w3">
                        <label class="db lh-copy f6" for="state-ab">State Ab.</label>
                        <input class="w-100 pa2 input-reset ba" type="text" name="state-ab" id="state-ab">
                    </div>

                    <div class="dib mv2">
                        <label class="db lh-copy f6" for="county-name">County Name</label>
                        <input class="pa2 input-reset ba" type="text" name="county-name" id="county-name">
                    </div>
                </fieldset>

                <div class="mv2">
                    <label class="db fw6 lh-copy f6" for="population">Population</label>
                    <input class="pa2 input-reset ba" type="number" min="0" name="population" id="population">
                </div>

                <div class="">
                    <input class="b ph3 pv2 input-reset ba b--black bg-transparent grow pointer f6 dib" type="submit" value="Insert">
                </div>
            </fieldset>
        </form>
    </main>
</body>
</html>
