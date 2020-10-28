<?php

declare(strict_types=1);

$authors =
    [
        ['id' => 1, 'author' => 'Charlie Kelly'],
        ['id' => 2, 'author' => 'Dennis Reynolds'],
        ['id' => 3, 'author' => 'Dee Reynolds'],
        ['id' => 4, 'author' => 'Frank Reynolds'],
        ['id' => 5, 'author' => 'Mac (Ronald McDonald)'],
    ];

$articles = [

    [
        'title' => 'You probably didn\'t know this about wine',
        'published_date' => '2019-07-15',
        'content' => "<p>A popular but unconfirmed theory claims that Malbec is named after a Hungarian peasant who first spread the grape variety throughout France. Women have a higher fat content than men. What does this have to do with wine? Because fat doesn't absorb alcohol, women get drunk faster. Wine is often served with dinner. At sea, brutes have raided wine barrels. Gulp.</p><p> Toasting was originally the practice of dropping toasted bread into wine to temper excessive acidity. Pursing your lips and inhaling some air while the wine is still on your palate is also a nice way to spread the more complex flavors through your sinuses. The first stage of wine tasting is looking over the appearance of the wine. Oak imparts vanilla, toast, caramel and coffee. Sauvignon blanc is light, grassy, and herbaceous.</p>",
        'id' => 1,
        'likes' => '62',
        'img' => 'img/wine.jpeg',
        'alt' => 'People cheering with wine glasses',
        'category' => 'drinks'
    ],

    [
        'title' => 'What your cat is really saying...',
        'published_date' => '2020-06-21',
        'content' => "<p>Meow to be let out meow go back to sleep owner brings food and water tries to pet on head, so scratch get sprayed by water because bad cat. Fart in owners food purr when being pet but so you're just gonna scroll by without saying meowdy? Make meme, make cute face. Oooo! Dangly balls! Jump swat swing flies so sweetly to the floor crash move on wash belly nap stretch destroy the blinds or where is it?</p><p> I saw that bird i need to bring it home to mommy squirrel! Yet claw at curtains stretch and yawn nibble on tuna ignore human bite human hand. Have secret plans wake up human for food at 4am but chase ball of string for ask to go outside and ask to come inside and ask to go outside and ask to come inside toy mouse squeak roll over find empty spot in cupboard and sleep all day. Knock over christmas tree scoot butt on the rug.</p><p>Do not try to mix old food with new one to fool me! Trip owner up in kitchen I want food open the door, let me out, let me out, let me-out, let me-aow, let meaow, meaow! And lick face hiss at owner, pee a lot, and meow repeatedly scratch at fence purrrrrr eat muffins and poutine until owner comes back so mew mew eat an easter feather as if it were a bird then burp victoriously, but tender destroy couch as revenge or claw drapes. Why use post when this sofa is here my cat stared at me he was sipping his tea, too. I show my fluffy belly but it's a trap!</p>",
        'id' => 1,
        'likes' => '198',
        'img' => 'img/cat.jpeg',
        'alt' => 'Cat meowing',
        'category' => 'lifestyle'
    ],

    [
        'title' => 'Breaking ramen news',
        'published_date' => '2020-10-20',
        'content' => "<p>Nagoya toasted sesame seeds curry Hakata mustard greens lard sesame oil miso Kagoshima nori Nagoya Kumamoto ground black pepper Hakata pork cubes yuzu pork cubes Hakata nori. Lard ground black pepper rice vinegar abura soba Tokyo seasoned egg Kagoshima chopped onions.</p><p>Tokushima Tokushima Yokohama abura soba Nagoya ginger scallions bean sprouts Asahikawa curry sesame oil Asahikawa Kumamoto pork cubes nori spicy bean paste corn Nissin instant cup ramen spinach. Miso salt wood ear mushroom yuzu fish broth pork bones pork cubes minced garlic pork cubes Tokyo soy sauce salt yuzu spinach. Flavoured oil Tokyo bean sprouts Yokohama bamboo slices seasoned egg Tokushima kamaboko flavoured oil rice Yokohama roasted pork slices rice miso roasted pork slices chilli. Spinach fish broth nori Asahikawa pork bones curry lard wood ear mushroom vinegar toasted sesame seeds rice Yokohama.</p>",
        'id' => 2,
        'likes' => '23',
        'img' => 'img/ramen.jpeg',
        'alt' => 'Bowl of ramen with a person holding chopsticks',
        'category' => 'food'
    ],

    [
        'title' => 'Say "Cheese"!',
        'published_date' => '2020-08-10',
        'content' => "<p>Everyone loves dolcelatte taleggio. Cheese and wine feta ricotta stilton cheese strings babybel say cheese cheese triangles. Danish fontina taleggio cut the cheese everyone loves stinking bishop brie camembert de normandie st. agur blue cheese.</p><p>Cheese slices jarlsberg port-salut squirty cheese taleggio cheese on toast. Everyone loves who moved my cheese emmental. Croque monsieur queso taleggio bocconcini cauliflower cheese emmental cheeseburger dolcelatte. Bocconcini halloumi paneer cheesecake cottage cheese stilton ricotta taleggio. Halloumi.</p>",
        'id' => 2,
        'likes' => '73',
        'img' => 'img/cheese.jpeg',
        'alt' => 'Assortment of cheeses',
        'category' => 'food'
    ],

    [
        'title' => 'The dark truth about your morning coffee',
        'published_date' => '2020-03-13',
        'content' => "<p>Cappuccino, breve cortado barista decaffeinated that lungo. Mazagran, qui filter grinder coffee macchiato grounds doppio variety. Fair trade, single shot barista pumpkin spice medium affogato mazagran mocha mug viennese. At, beans java chicory white a crema cappuccino lungo skinny robust. Steamed crema saucer mug cortado cup single shot trifecta sit beans.</p><p>Grounds chicory aftertaste rich coffee mug espresso arabica blue mountain. Plunger pot steamed seasonal grinder, aged sweet latte eu sweet. Carajillo grounds grinder, percolator, latte grounds irish aged so bar skinny. Affogato, pumpkin spice ut, aged trifecta mocha cup aroma lungo dark. Aftertaste black in ristretto, instant, irish arabica beans to go and wings carajillo.</p>",
        'id' => 3,
        'likes' => '12',
        'img' => 'img/coffee.jpeg',
        'alt' => 'Coffee grinds and a cappuccino',
        'category' => 'drinks'
    ],

    [
        'title' => 'A few wise words from Bob Ross',
        'published_date' => '2020-09-10',
        'content' => "<p>Clouds are free. They just float around the sky all day and have fun. Put it in, leave it alone. I'm going to mix up a little color. We'll use Van Dyke Brown, Permanent Red, and a little bit of Prussian Blue. I'm gonna start with a little Alizarin crimson and a touch of Prussian blue.</p><p>You can create beautiful things - but you have to see them in your mind first. Nice little fluffy clouds laying around in the sky being lazy. This is gonna be a happy little seascape. In your world you have total and absolute power. Trees grow in all kinds of ways. They're not all perfectly straight. Not every limb is perfect. Maybe there's a happy little bush that lives right there.</p>",
        'id' => 3,
        'likes' => '6',
        'img' => 'img/bob.jpeg',
        'alt' => 'Body of water surrounded by mountains',
        'category' => 'lifestyle'
    ],

    [
        'title' => 'The former president speaks out',
        'published_date' => '2020-04-12',
        'content' => "<p>We cannot ignore that we have a right and a duty to protect our borders. It is agonizing for America to lose our young men and women. For while Senator McCain was turning his sights to Iraq just days after 9/11, I stood up and opposed this war, knowing that it would distract us from the real threats we face. And it is that promise that forty five years ago today, brought Americans from every corner of this land to stand together on a Mall in Washington, before Lincoln's Memorial, and hear a young preacher from Georgia speak of his dream.</p><p>That is the true genius of America - a faith in simple dreams,, an insistence on small miracles. It's not consistent with our traditions of justice and fairness. They have fought in our wars, served in government, stood for civil rights, started businesses, taught at our Universities, excelled in our sports arenas, won Nobel Prizes, built our tallest building, and lit the Olympic Torch.</p><p>Thank you, and God bless America.</p>",
        'id' => 4,
        'likes' => '81',
        'img' => 'img/obama.jpeg',
        'alt' => 'Portrait of Barack Obama',
        'category' => 'lifestyle'
    ],

    [
        'title' => 'Are cupcakes better than regular cake?',
        'published_date' => '2020-01-01',
        'content' => "<p>Jelly-o marshmallow ice cream fruitcake. Chocolate cake sweet roll icing donut icing pastry dessert. Icing cupcake gummies cheesecake biscuit icing wafer. Macaroon jelly powder soufflé caramels sweet roll oat cake. Caramels marshmallow chocolate cake. Jelly beans sesame snaps ice cream lemon drops chupa chups muffin brownie fruitcake.</p><p>Topping donut wafer tootsie roll fruitcake toffee chupa chups liquorice danish. Lollipop cookie toffee muffin. Sugar plum pastry pudding jelly beans brownie tootsie roll. Croissant toffee liquorice toffee candy. Cookie chocolate cupcake. Candy dessert candy canes powder dessert cookie cotton candy dessert lollipop. Muffin pie cupcake liquorice. Carrot cake marzipan jelly-o pudding caramels. Lollipop tiramisu tart chocolate cake donut cookie. Cookie sweet roll croissant. Muffin powder caramels jelly beans pie jujubes.</p><p>Pastry cupcake gummi bears. Gingerbread danish sesame snaps tart liquorice lemon drops chocolate cake caramels cake. Cake topping jelly beans wafer marshmallow donut chocolate pastry. Tootsie roll cookie apple pie cookie jelly-o macaroon lemon drops chocolate cake. Liquorice chocolate bar tiramisu. Pastry caramels brownie sweet donut cake cotton candy topping tootsie roll. Pudding tiramisu danish muffin macaroon. Dessert jelly-o marzipan. Cupcake halvah chocolate cake caramels candy lemon drops dessert cake dragée.</p>",
        'id' => 4,
        'likes' => '36',
        'img' => 'img/cupcake.jpeg',
        'alt' => 'Cupcake with frosting and sprinkles',
        'category' => 'food'
    ],

    [
        'title' => 'Why is everyone obsessed with pizza?',
        'published_date' => '2020-02-28',
        'content' => "<p>Pizza roll steak thin crust, party chicken wing sauteed onions pepperoni banana peppers bacon philly steak spinach. Deep crust mushrooms ranch garlic parmesan bacon pizza roll garlic peppers. Sausage philly steak pesto NY style, garlic parmesan thin crust sausage green bell peppers beef banana peppers buffalo sauce chicken and bacon bianca.</p><p>Deep crust mushrooms lasagna, pan pizza pizza roll bbq steak parmesan black olives red onions. Chicken sausage white garlic, red onions pepperoni pizza roll stuffed extra cheese meatball thin crust bacon & tomato banana peppers pork. Chicken wing mozzarella hand tossed pizza, pepperoni chicken wing green bell peppers bbq rib ham mushrooms beef. Pizza garlic parmesan pepperoni string cheese sausage.</p>",
        'id' => 5,
        'likes' => '31',
        'img' => 'img/pizza.jpeg',
        'alt' => 'Pizza with a variety of toppings',
        'category' => 'food'
    ],

    [
        'title' => 'Don\'t drink and drive',
        'published_date' => '2020-05-21',
        'content' => "<p>Hennessey speyburn chocolate soldier jacquin, absolut aberlour house of lords. Gin pahit crown royal abhainn dearg aberlour tennessee cowboy. The amarosa cocktail moscow mule, bloody aztec french connection smoky martini ruby dutchess. Benromach, amaretto di saronno wolfschmitt screwdriver, drambuie gordon's brandy sour auchentoshan bijou kentucky tavern. Cointreau inchgower cosmopolitan piña colada greyhound, johnny walker black: gibbon; abhainn dearg: glentauchers, strega cointreau black & white man o'war.</p><p>Glenallachie, sake manhattan knockeen hills irish poteen bananarita remy martin; tequila sunrise canadian club--chupacabra myers brave bull. Stinger spritzer zombie irish mist aultmore agent orange paradise the amarosa cocktail creamsicle. Brass monkey tom and jerry the blenheim; godfather glen ord. Cointreau, strathisla bloody aztec, gordon's irish flag johnny walker black ramos gin fizz.</p>",
        'id' => 5,
        'likes' => '11',
        'img' => 'img/liquor.jpeg',
        'alt' => 'Glass of whisky and a Johnnie Walker whisky bottle',
        'category' => 'drinks'
    ],

];
