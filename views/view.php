<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rss Scraper</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <style>
        @font-face {
            font-family: "mvtyper";
            src: url("/views/mvtyper.ttf");
        }

        @font-face {
            font-family: "Mvaamu";
            src: url("/views/mv-aammu-fk.ttf");
        }
    </style>
</head>


<body class="bg-gray-200">
    <div class="container mx-auto">

        <div class="flex justify-center">

            <div class="relative w-1/2 m-8">
                <div class="border-r-2 border-gray-200 border-dotted absolute h-full top-0 z-0" style="left: 7px"></div>


                <ul class="list-none m-0 p-0">
                    <h2 class="text-center text-3xl text-red-600" style="font-family: Mvaamu;">މިހާރު</h2>
                    <?php foreach ($feeds[0][0] as $mihaaru) : ?>
                        <li class="mb-4">
                            <div class="flex items-center mb-1">
                                <div class="bg-red-600 rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                                </div>
                                <a href="<?php echo $mihaaru['link'] ?>" class="hover:underline">
                                    <div class="flex-1 ml-4 font-medium" style="font-family: mvtyper; direction:rtl;"><?php echo $mihaaru['title'] ?></div>
                                </a>
                            </div>
                            <div class="ml-12">
                                Published on : <?php echo $mihaaru['pubDate'] ?>
                            </div>
                        </li>
                    <?php endforeach; ?>

                </ul>


                <ul class="list-none m-0 p-0 mt-10">
                    <h2 class="text-center text-3xl text-green-600" style="font-family: Mvaamu;">ތިލަދުން</h2>
                    <?php foreach ($feeds[0][1] as $thiladhun) : ?>
                        <li class="mb-4">
                            <div class="flex items-center mb-1">
                                <div class="bg-green-600 rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                                </div>
                                <a href="<?php echo $thiladhun['link'] ?>" class="hover:underline">
                                    <div class="flex-1 ml-4 font-medium" style="font-family: mvtyper; direction:rtl;"><?php echo $thiladhun['title'] ?></div>
                                </a>
                            </div>
                            <div class="ml-12">
                                Published on : <?php echo $thiladhun['pubDate'] ?>
                            </div>
                        </li>
                    <?php endforeach; ?>

                </ul>



                <ul class="list-none m-0 p-0 mt-10">
                    <h2 class="text-center text-3xl text-orange-600" style="font-family: Mvaamu;">އައްޑޫ ލައިވް</h2>
                    <?php foreach ($feeds[0][2] as $addulive) : ?>
                        <li class="mb-4">
                            <div class="flex items-center mb-1">
                                <div class="bg-orange-600 rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                                </div>
                                <a href="<?php echo $addulive['link'] ?>" class="hover:underline">
                                    <div class="flex-1 ml-4 font-medium" style="font-family: mvtyper; direction:rtl;"><?php echo $addulive['title'] ?></div>
                                </a>
                            </div>
                            <div class="ml-12">
                                Published on : <?php echo $addulive['pubDate'] ?>
                            </div>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>

    </div>


</body>

</html>