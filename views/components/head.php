<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attrapez les tous !</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
        }

        ul,
        ol {
            list-style: none;
        }

        body {
            display: grid;
            grid-template-rows: 50px 1fr 100px;
            min-height: 100vh;
            line-height: 1.5;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        header,
        footer {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: red;
            color: white;
        }

        .notfound section {
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-direction: column;
            height: 100%;
            width: 100%;

        }

        .notfound section h2 {
            font-size: 2rem;
        }

        .notfound section article {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
        }


        .btn {
            cursor: pointer;
            padding: 0.5em;
            border-radius: 8px;
            color: white;
            font-weight: 700;
            border: none;
            transition: filter 250ms, scale 250ms;
        }

        .btn:hover {
            filter: brightness(150%);
            scale: 1.05;
        }

        .btn.green {
            background-color: green;
        }

        .btn.red {
            background-color: red;
        }

        .homemain {
            display: flex;
        }

        nav {
            background-color: gray;
            height: 100%;
            padding: 0.5em;

        }

        nav h3 {
            width: max-content;
        }

        nav ul {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        nav ul li {
            width: 100%;
        }

        nav ul li form {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
            width: 100%;
        }

        nav ul li form button {
            width: max-content;
        }

        .pokeview {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .pokeview article {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .controllers {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .controllers button {
            width: 100%;
        }
    </style>
</head>