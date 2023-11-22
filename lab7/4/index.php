<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oden teishoku</title>
    <style>
        body {
            background-color: antiquewhite;
        }

        .oden {
            column-count: 4;
            gap: 15px;
        }

        .oden img {
            width: 100%;
            height: auto;
            border-radius: 50px;
            margin-top: 15px;
        }

        h1{
            color: brown;
        }
    </style>
</head>
<body>
    <h1 align="center">&#x1F362; เมนูพื้นฐานของโอเด้ง &#x1F376;</h1>

    <div class="oden">
    <?php
        $ingredients = array('https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Hanpen_by_yoppy.jpg/330px-Hanpen_by_yoppy.jpg',
            'https://www.justonecookbook.com/wp-content/uploads/2020/05/satsumaage-4997.jpg',
            "https://i0.wp.com/japanese-products.blog/wp-content/uploads/2022/11/24521397_s.jpg?resize=520%2C347&ssl=1",
            "http://justhungry.com/files/images/jc101-fish3-iwashitsumire.jpg",
            "https://japanmcconnell.com/wp-content/uploads/2022/02/Whats-Gyusuji-Nikomi-Japanese-Beef-Tendon-Stew.jpg",
            "https://kibunthai.co.th/uploads/all/2uhiUK9tegCtPCFF751cas9JdkctjctT26xO6OwC.jpg",
            "https://monanomura.files.wordpress.com/2015/02/img_1108.jpg?w=768",
            "https://kibunthai.co.th/uploads/all/0u60QyvaWoNgrufjbZIc5BmOFihCuW4ZjoPmG7Cg.jpg",
            "https://www.wandercooks.com/wp-content/uploads/2022/04/ganmodoki-japanese-tofu-patties-4-768x1152.jpg",
            "https://www.thesushibarok.com/spillover/proto/thesushibarok/images/gallery/%20Food/Tako%20Gushi.jpg",
            "https://akaragroup.co.th/akara/wp/wp-content/uploads/2022/04/B.png",
            "https://cdn.foodadvisor.com.sg/3/300/ycqwu/vt-iw/Fhetksji/4530992.zfw/uzura-tamago.jpg",
            "https://i8b2m3d9.stackpathcdn.com/wp-content/uploads/2021/07/Simmered_BeefTofu_6268.jpg",
            "https://3.bp.blogspot.com/-uzWkYK2LJow/VlgJmZbYbdI/AAAAAAAADIE/yQRnNnbNfJ4/s320/Marked_IMG_8954.JPG",
            "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Konnyaku.jpg/330px-Konnyaku.jpg",
            "https://www.souschef.co.uk/cdn/shop/articles/shirataki-noodles_900x.jpg?v=1593593113",
            "https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Kombu.jpg/330px-Kombu.jpg",
            "https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Daikon_oden_and_Beer_by_shrkflickr_in_kyoto.jpg/360px-Daikon_oden_and_Beer_by_shrkflickr_in_kyoto.jpg",
            "https://j-simplerecipes.com/recipes_metric/meat/food/mein50b00.jpg",
            "https://i8b2m3d9.stackpathcdn.com/wp-content/uploads/2017/05/Shumai-22.jpg",
            "http://www.oksfood.com/image/jagaimononikorogashi.jpg"
        );

        foreach ($ingredients as $genza) {
            echo '<div><img src="' . $genza . '" alt=""></div>';
        }
        ?>
    </div>
</body>
</html>
