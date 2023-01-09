<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tryit</title>

    <style>
        .typingContainer{
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .inputCursor{
            display: inline-block;
            width: 2px;
            height: 42px;
            background-color: rgb(3, 2, 2);
            margin-left: 8px;
        }
        @keyframes blink{
            0% {opacity: 1;}
            40% {opacity: 1;}
            60% {opacity: 0;}
            100% {opacity: 0;}

        }
        /* input to .inputCursor */
        .inputCursor{
            animation: blink .6s linear infinite alternate;
        }
    </style>
</head>
<body>
    <div class="typingContainer">
        <span id="sentence" class="sentence"></span>
        <span class="inputCursor"></span>

    </div>

    <script>
        async function typeSentence(sentence,arraySentence,delay=100) {
            const letter= sentence.split("");
            let i=0;
            while (i<letter.length){
                await waitTime(delay);
                $(arraySentence).append(letter[i]);
                i++
            }
            return;
        }

        function waitTime(ms) {
            return new Promise(resolve, setTimeout(resolve,ms)) 
        }

        typeSentence("holla...!","#sentence")
    </script>
</body>
</html>