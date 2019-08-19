<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
    <!-- production version, optimized for size and speed -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>
    <p>Hello World!</p>
    <div id="app">
        <span v-bind:title="message">
            Hover your mouse over me for a few seconds
            to see my dynamically bound title!
        </span>
    </div>
    <script src="js/main.js"></script>
</body>

</html>