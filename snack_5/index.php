<?php

// Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
$paragraph = "Lily was a young girl who lived in a small village nestled in the heart of a vast forest. One day, while wandering through the woods, she stumbled upon a hidden clearing. In the center of the clearing stood a magnificent tree, its branches reaching up towards the sky and its leaves shimmering with all the colors of the rainbow. Lily approached the tree with awe and wonder, and as she drew closer, she noticed a small door carved into the trunk. She hesitated for a moment, unsure if she should open it, but her curiosity got the better of her. To her surprise, the door led to a magical world filled with talking animals, enchanted forests, and sparkling streams. However, as she explored this new world, she realized that not everything was as it seemed. The talking animals were not always friendly, and the enchanted forests had a dark and sinister side. Despite these challenges, Lily was determined to uncover the secrets of this magical world and to make new friends along the way. She spent hours exploring, and as the sun began to set, she knew that she had to return to her own world. She said goodbye to her new friends and stepped back through the door, promising to return soon. From that day on, Lily visited the magical world every chance she got, always eager to discover new and exciting things, but also aware of the dangers that lurked in the shadows.";

$explodedParagraphs = explode('.', $paragraph);

var_dump($explodedParagraphs);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    <?php foreach ($explodedParagraphs as $paragraph) : ?> 

        <p> <?= $paragraph ?></p>

        <?php endforeach; ?>

</body>
</html>