<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Covid-19 Data</title>

    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header class="center w-75">
        <h1 class="f-headline lh-solid">Covid-19 Data</h1>
    </header>
    <main class="center w-75">
        <article class="mv5">
            <h2 class="f1 lh-title">Start here</h2>
            <p>Enter a <code>state name</code>, <code>county name</code>, and <code>date</code> to
                select some Covid-19 Data to be displayed.
            </p>
        </article>

        <form action="display.controller.php" method="get">
            <fieldset class="ba b--transparent pa0 ma0">
                <legend class="f4 fw6 ph0 mh0">Covid-19 Data Input</legend>

                <fieldset class="ba b--transparent pa0 ma0 mv3">
                    <legend class="f5 fw6 ph0 mh0">Names</legend>

                    <div class="dib mv2 mr2">
                        <label class="db lh-copy f6" for="state-name">State Name</label>
                        <input class="pa2 input-reset ba" type="text" name="state-name" id="state-name">
                    </div>

                    <div class="dib mv2">
                        <label class="db lh-copy f6" for="county-name">County Name</label>
                        <input class="pa2 input-reset ba" type="text" name="county-name" id="county-name">
                    </div>
                </fieldset>

                <div class="mv2">
                    <label class="db fw6 lh-copy f6" for="date">Date</label>
                    <input class="pa2 input-reset ba" type="date" name="date" id="date">
                </div>

                <div class="">
                    <input class="b ph3 pv2 input-reset ba b--black bg-transparent grow pointer f6 dib" type="submit" value="Search">
                </div>
            </fieldset>
        </form>
    </main>
</body>
</html>
