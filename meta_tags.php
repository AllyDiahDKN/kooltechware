<?php
$currentPage = basename($_SERVER['PHP_SELF']); // Get the current page file name

// Define meta tags for each page
switch ($currentPage) {
    case "index.php":
        $title = "Kool Techware | Home";
        $description = "Description for the home page.";
        $keywords = "keyword1, keyword2, keyword3";
        break;
    case "shop.php":
        $title = "About Us - Your Website";
        $description = "Description for the About Us page.";
        $keywords = "about, company, information";
        break;
    case "shop.php?brand_id=1":
        $title = "Lenovo";
        $description = "Description for the About Us page.";
        $keywords = "about, company, information";
        break;

        case "shop.php?brand_id=2":
            $title = "Hp";
            $description = "Description for the About Us page.";
            $keywords = "about, company, information";
            break;


        case "shop.php?category_id=1":
            $title = "all products";
            $description = "Description for the About Us page.";
            $keywords = "about, company, information";
            break;

            case "shop.php?category_id=2":
                $title = "Laptops";
                $description = "Description for the About Us page.";
                $keywords = "about, company, information";
                break;

                    case "shop.php?category_id=3":
                        $title = "Desktops";
                        $description = "Description for the About Us page.";
                        $keywords = "about, company, information";
                        break;

                            case "shop.php?category_id=4":
                                $title = "printers";
                                $description = "Description for the About Us page.";
                                $keywords = "about, company, information";
                                break;

                                case "shop.php?category_id=5":
                                    $title = "Toners & Catriges ";
                                    $description = "Description for the About Us page.";
                                    $keywords = "about, company, information";
                                    break;

                                    case "shop.php?category_id=6":
                                        $title = "Softwares";
                                        $description = "Description for the About Us page.";
                                        $keywords = "about, company, information";
                                        break;

                                        case "shop.php?category_id=7":
                                            $title = "Monitors ";
                                            $description = "Description for the About Us page.";
                                            $keywords = "about, company, information";
                                            break;

                                            case "shop.php?category_id=8":
                                                $title = "Accessories";
                                                $description = "Description for the About Us page.";
                                                $keywords = "about, company, information";

    // Add more cases for other pages as needed
    default:
        $title = "Default Title";
        $description = "Default Description";
        $keywords = "default, keywords";
}

// Echo out the meta tags
echo '<title>' . $title . '</title>' . PHP_EOL;
echo '<meta name="description" content="' . $description . '">' . PHP_EOL;
echo '<meta name="keywords" content="' . $keywords . '">' . PHP_EOL;
?>
