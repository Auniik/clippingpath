-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 03:24 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clippingpath`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `headline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `headline`, `description`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Photo editing service complex clipping path with Photoshop', '<p>Clipping path service is the best procedure by which you can knock out the background from any photograph. The whole procedure is done by pen tool. Above all, By creating an outline around an image by pen tool you will be able to get rid of a picture from its background so that it can be fixed into another background.<br><br>Moreover, Simply clipping path makes a path of a certain area in an image with Adobe Photoshop pen tool and then everything inside the path is included and everything outside the path is gone.<br><br>consequently, Click Art BD LTD is one of the largest Canada based Post Production Company. We offer entire Digital Image Editing services to E-commerce, Photographers, Production Companies, Online Store, Big-Branches, Digital Studios, and Agencies. Clipping Path, Multiple Clipping Path, Neck Joint, Drop Shadow, Image Masking, Retouching, Color Correction, and many more are including our services.<br><br><span style=\"font-size: 18px;\">Conclusion</span><br>Thanks for visiting my article. We Click Art BD LTD family is always for you to give the best solution for any type of complex photo editing like background remove or other photo editing services. Feel free to contact us<br></p>', 'uploads/images/blog/HUYi2uuV1ndAPcUrAoZlSwxtrytQ95oKIKfVDewM.png', 1, '2018-12-20 04:27:08', '2018-12-20 04:27:08'),
(2, 'Photoshop water color effect for photo editing', '<p><span style=\"font-size: 18px;\"><b>Watercolor effect</b></span><br>In this tutorial, you will learn how to generate an amazing watercolor effect. I will give details everything in so much detail that everyone can make it, even those who have just opened Photoshop for the first time.</p><p>The effect shown above is the one I will explain to you how to construct in this tutorial. If you would like to generate the even more advanced watercolor effects shown below. If you want to learn more Photoshop tutorials visit<br><br>Tutorial :<br><b><br>Step 1:</b><br>The Layers palette in Photoshop viewing the image on the Background layer.</p><p><b>Step 2:</b><br>Press “Ctrl+J” to three times to duplicate the Background layer two times.</p><p><b>Step 3:</b><br>Go to Filter &gt; Artistic &gt; Cut Out and alter the option circled in red above.</p><p><b>Step 4:</b><br>Click on “Layer 1” in the Layers palette to choose it.</p><p><b>Step 5:</b><br>Click on the visibility icon for “Layer 1 copy” to turn it back on, and then click anyplace else on the layer to select it.</p><p><b><span style=\"font-size: 18px;\">Conclusion</span></b><span style=\"font-size: 18px;\">﻿</span><br>Thanks for visiting my tutorial. We Click Art BD LTD family is always for you to give the best solution for any type of complex photo editing like background remove or other photo editing services. Feel free to contact us<br></p>', 'uploads/images/blog/G2PEZLE2XUr6JOSiz2fF5VBsjBtdiGaVjqobGX7i.png', 1, '2018-12-20 05:22:34', '2018-12-20 05:22:34'),
(3, 'Photoshop multiple clipping path service for photo editing', '<p>At first, we can define Multi Clipping Path is applying for those images whose parts need to be cut off. Multi clipping path has numerous clipping path layers. Multi clipping path applied to Clothes accessories, trend design, fashion catalogs book, brochure, magazine, newspaper, poster, and flyer. Web Design Company’s, publishing houses, add making agency, graphic design firm use multi clipping path for their photographs.</p><p>We Click Art BD LTD are dependable and accomplish clipping path service provider that offers brilliant background removal services. With us around, you don’t need to thrash about to edit or do the clipping of images by yourself. We can recommend you the best multi clipping path services you can find nowhere.<br><br>Consequently, We have an exclusive way of present your image because we make sure that we give clarity to your photography by the focus on the particular entity that you need to market.<br><br>Moreover, we offer various types of clipping path service and our team is dedicated to present handmade Clipping Path services with optimal accuracy at comparatively cost effective prices. We have an easy online multiple file upload application that will keep you loads of time and money as it naturally integrates into your production workflow. You can also download the very images with an appropriate clipping path made in agreement with your instructions.<br></p>', 'uploads/images/blog/UVnZDVdewnEhdoqJ3gl9EbNYunTKeu8JamGIger3.png', 1, '2018-12-20 05:44:11', '2018-12-20 05:44:11'),
(4, 'Professional color correction service with Photoshop for photo editing', '<p><span style=\"font-size: 18px;\">Color Separation</span><br>Color separation Service is one of the admired services in order to attain a consistent look and style in a professional photography workflow. We name it also as photo color correction or color balancing. It is the procedure of adjusting the overall intensity and color totally of an image. This is practical to dissimilar types of service such as fashion photography, model photography, natural photography etc.</p><p>Moreover, Color separation Service is needed for a customer when they feel that photo is lighting highly or outer environment does not hold up its color, then it is desirable to accurate as well as viewers can feel nice-looking, pleasant with their natural view. It is also preferred when camera settings the natural color of the product may be distorted then color correction is essential for that image. By apply different kind of Photoshop technique, such as filters of Photoshop correction, natural color may be retained or obtained. We achieve optimal color correction for an image by using a photographer’s color preference. Our color specialists review and fine-tune below for color correction of an image<br><br><span style=\"font-size: 18px;\">Quality of Color separation:</span><br><br>We Click Art BD LTD offer services which cover up entire feature of color correction. We are offering services like- Clipping Path, Photo Retouching, Photo Masking, Deep Etching, Neck Joint, Photo Enhancement, Logo Design, Photo Restoration and Photo Editing as well Color alteration.<br><br>If you are looking for a skilled professional photo editing service then Click Art Bd Ltd is should be your first priority that is always ready to support your photo editing needs. You can visit our portfolio to examine our quality of work. Hopefully, you will be satisfied.<br></p>', 'uploads/images/blog/AK8jKb9yL0AGlvo4gz7nC2KVftketxAGE5C0fOej.png', 1, '2018-12-20 05:46:10', '2018-12-20 05:46:10'),
(5, 'How to do color masking in Photoshop for color replacing', '<p>The color masking command in Photoshop allows you to exchange one set of colors for another. It builds a mask, using colors you choose and then replace the selected colors with others that you specify. You can bend hue, saturation, and lightness of the masked colors.<br><br>color mask before after<br><br>Let’s follow the tutorials-<br>Step 1:<br>Open image and set layers and path layer<br><br>color masking<br><br>Step 2:<br>Draw path with the pen tool to select the edge<br><br>color masking<br><br>Step 3:<br>Select the shadow with the pen tool to copy the original shadow<br><br>color masking<br><br>Step 4:<br>Select shoe path layer go to image  adjustment hue/saturation to adjust the shoe color<br><br>color masking<br><br>Step 5:<br>I choose red for the shoe with hue/saturation adjustment<br><br>color masking<br><br>Step 6:<br>Then if it did not blend well go to blending mode and change into “multiply”<br><br>color masking<br><br>Step 7:<br>Create a new layer and change the background into white<br><br>color masking<br><br>Step 8:<br>Select and change shoe ribbon by drawing a pen tool path<br><br>color masking<br><br>Step 9:<br>Hue/saturation need to adjust for the perfect tone of color<br><br>color masking<br><br>Step 10:<br>Same way, change another ribbon of the shoe<br><br>color masking<br><br>Step 11:<br>Ok now! Here is the final output after color masking<br><br>color masking<br><br>Conclusion<br>Thanks for visiting my tutorial. We Click Art BD LTD family is always for you to give the best solution for any type of complex photo editing like background remove or other photo editing services<br></p>', 'uploads/images/blog/JL1cUfpiCCZ6DjBfeHT4kxKalOf6mSuKtlbE7HuI.png', 1, '2018-12-20 05:48:28', '2018-12-20 05:48:28'),
(6, 'Click Art BD is a Name of Excellence', '<p><span style=\"font-size: 18px;\">Click Art BD is a Name of Excellence</span></p><p><span style=\"font-size: 0.875rem;\">creative design firm only for its’ creative art  in the Online Graphics Design, Web Design and Development and Internet Marketing Firms all over the world. As a Offshore firm Click Art BD, provides very high quality Clipping Path, Image Masking, Prepress Services, Image Manipulation and Desktop Publishing for the World class Newspapers, Magazines, Digital Photographers, Modeling Agencies, Online Shops, Advertising Agencies, Printing &amp; Publishing companies around the world.</span></p><p><br>We started our services Clipping Path, Image Masking, Photo Retouching, Photo Restoration, Color Correction, Raster to Vector, Logo Design, Image Manipulation and other Creative Design Services with the three Concepts that are “Reasonable Price on the Basis of Complexity” “100% Satisfaction for Quality” and “Just in Time Delivery“. With this concept we now continue our services and also will be those in future.<br><br>Click Art Bd always maintain those three concepts for its all valuable clients as World Class Jewelry Firms, Garments, Photographers and Graphics and Web Development Outsourcing Firms who are provided their images for Background Remove by using Clipping Paths, Jewelry and garments Images for Color Correction and Retouching by using tools of photoshop manually. Line art, Raster to Vector by using Illustrator tool Manually. We always focus clients 101% satisfaction.<br></p>', 'uploads/images/blog/UnsxdafEfLmPjcN2izWSj8dfhkSWzmG2ec8z31m9.png', 1, '2018-12-20 05:50:17', '2018-12-20 05:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_configs`
--

CREATE TABLE `contact_configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `location_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_two` text COLLATE utf8mb4_unicode_ci,
  `location_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_three` text COLLATE utf8mb4_unicode_ci,
  `google_maps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `headline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `headline`, `description`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Raster to Vector', '<p>Raster to Vector is the Photo Conversion with Illustrator Line Art Where Using the Shape and Color provide Stranded Structure.<br><br>For Logo Redesign, Line Art for Shape of Anything, Product actual Size and Color is presented with Raster to Vector by Illustrator. A T-shirt has different Color, Shape, Size. If any place of Size is not actual than full T-shirt Design Layout will be Destroy Time and Cost. Accurate Line art is Essential for exact Layout and Only for that Raster to Vector is very Popular in Garments Industries and Ad Design Agencies.<br></p>', 'uploads/images/features/DyJwQAEWWRjCSz1N1rE6rNFipyfeMbj9NO6Jt8q9.png', 1, '2018-12-20 05:53:19', '2018-12-20 05:53:19'),
(2, 'Jewelry Retouching', '<p>Jewelry Retouching Used a Jewelry product professional for Sell. Jewelry is a symbol of Status. Retouching make a Jewelry photo Lucrative.<br><br>Jewelry includes Diamond, Necklace, Ring, Earring, Bracelets. When take a photo with a Camera, the photo is not ready for presentable to the presenter or who is used to as Dust, Sharpness, Brightness and color Adjustment. With High End Photo Retouching process a Jewelry going to Final Output for the User Checking.<br></p>', 'uploads/images/features/6BZlV24dw5qK1UCD10ThDoHVKsmehrILzBJompmG.png', 1, '2018-12-20 05:54:22', '2018-12-20 05:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_11_042213_create_site_configurations_table', 1),
(4, '2018_12_11_062516_create_features_table', 1),
(5, '2018_12_11_110005_create_blogs_table', 1),
(6, '2018_12_11_114812_create_contacts_table', 1),
(7, '2018_12_11_130250_create_contact_configs_table', 1),
(8, '2018_12_12_164530_create_portfolios_table', 1),
(9, '2018_12_12_194900_create_testimonials_table', 1),
(10, '2018_12_13_045300_create_sliders_table', 1),
(11, '2018_12_15_092034_create_newsletters_table', 1),
(12, '2018_12_17_065745_create_socials_table', 1),
(13, '2018_12_17_121534_create_menus_table', 1),
(14, '2018_12_19_184401_create_submenus_table', 1),
(15, '2018_12_22_193527_create_pages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `submenu_id` int(10) UNSIGNED NOT NULL,
  `before_thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `after_thumbnail` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `before_thumbnail` text COLLATE utf8mb4_unicode_ci,
  `after_thumbnail` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `before_thumbnail`, `after_thumbnail`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/images/portfolio/gY6GpiL1UFlHFsBzHh1XSv5FosZrNDYAxVA8ZD8z.png', 'uploads/images/portfolio/uF1BfzHPqBemLHXTka1w6rJLRSAlV8CVRzXStIvc.png', 'Photoshop Clipping Path', '<p>Our Photoshop Clipping Path specialists professionally use Photoshop Pen Tool and In-design to ensure the highest level of quality output as per client’s requirement within the fast turnaround time. We handle whole tasks of image Clipping Path services by Photoshop for precise processing of each image you want us to edit. We have been in the Photo Editing industry for so long because of our care to each image clipping services and the expertise on processing, retouching and polishing images at utmost level with 100% proficiency. Brilliancy on all Clipping Path services named Regular Clipping Path, Multiple Clipping Path, Overlapping Clipping Path and perfect image cut out made us the best in the industry purposing to serve for Photo Studios, Publishers, Design Agencies, Brands, Chain Stores and Manufacturing Companies.<br></p>', 1, '2018-12-20 06:13:29', '2018-12-20 06:13:29'),
(2, 'uploads/images/portfolio/EiPaN2iegIzfEHGrzGwNj50kGXpRDnXVk8tX1ixz.png', 'uploads/images/portfolio/uMWjYCCPqaKXaGWHAeHRPtWTl3kUnwEXO4WN1Mck.png', 'Photoshop Clipping', '<p>Our Photoshop Clipping Path specialists professionally use Photoshop Pen Tool and In-design to ensure the highest level of quality output as per client’s requirement within the fast turnaround time. We handle whole tasks of image Clipping Path services by Photoshop for precise processing of each image you want us to edit. We have been in the Photo Editing industry for so long because of our care to each image clipping services and the expertise on processing, retouching and polishing images at utmost level with 100% proficiency. Brilliancy on all Clipping Path services named Regular Clipping Path, Multiple Clipping Path, Overlapping Clipping Path and perfect image cut out made us the best in the industry purposing to serve for Photo Studios, Publishers, Design Agencies, Brands, Chain Stores and Manufacturing Companies.<br></p>', 1, '2018-12-20 06:34:19', '2018-12-20 06:34:19'),
(3, 'uploads/images/portfolio/LNmsBveZLcltRcRaeGMb0LndzaGMqUKIie9U1kBk.png', 'uploads/images/portfolio/rvGMqxio1kjeRcv86Sd7HaVn5Nwvvr3bKgHoWkl0.png', 'Color masking', '<p>Our Photoshop Color Masking experts use the photo masking technology to allow you to showcase the different colors and styles of your furniture, textiles and other industrial product images in your expected colors and textures. Your asked or required color may represent your Website Theme or the Brand Color that you own and we use our utmost professionalism to color your thinking in reality.<br><br>This is a brilliant technology where the protected image content is isolated from the unprotected content which is graphically modified so the photographic image of the products simply look better in other colors. Existing color is masked with totally different colors that make it to look brighter, shiner and more focused. It’s just not good look or feels but an extremely effective process to showcase your advertised goods in different media.<br></p>', 1, '2018-12-20 06:37:15', '2018-12-20 06:37:15'),
(4, 'uploads/images/portfolio/SDBLBF9uqVuZBjo760n3LqjO63DxkVdRrKvml0S0.png', 'uploads/images/portfolio/dw8Kz8hHaEBooGOBFTdkmk8SInd5IQyLZlVoB0KJ.png', 'Photoshop Clipping Mask', '<p>Our Photoshop Clipping Path specialists professionally use Photoshop Pen Tool and In-design to ensure the highest level of quality output as per client’s requirement within the fast turnaround time. We handle whole tasks of image Clipping Path services by Photoshop for precise processing of each image you want us to edit. We have been in the Photo Editing industry for so long because of our care to each image clipping services and the expertise on processing, retouching and polishing images at utmost level with 100% proficiency. Brilliancy on all Clipping Path services named Regular Clipping Path, Multiple Clipping Path, Overlapping Clipping Path and perfect image cut out made us the best in the industry purposing to serve for Photo Studios, Publishers, Design Agencies, Brands, Chain Stores and Manufacturing Companies.<br></p>', 1, '2018-12-20 06:38:51', '2018-12-20 06:38:51');

-- --------------------------------------------------------

--
-- Table structure for table `site_configurations`
--

CREATE TABLE `site_configurations` (
  `id` int(10) UNSIGNED NOT NULL,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `licence_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `thumbnail_wide` text COLLATE utf8mb4_unicode_ci,
  `thumbnail_wide_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_square` text COLLATE utf8mb4_unicode_ci,
  `thumbnail_square_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_text` text COLLATE utf8mb4_unicode_ci,
  `background_thumbnail` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `thumbnail_wide`, `thumbnail_wide_title`, `thumbnail_square`, `thumbnail_square_title`, `background_color`, `background_text`, `background_thumbnail`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/images/slider/20kQ73KPDv2zL88I8Uw9NGHWsUrud5YQdwi42Hj5.png', 'SERVICE ONE', 'uploads/images/slider/8Iv9aQDDZbnwWHxH18Zv0KFroMx3shBLJJ2kIZVt.png', 'SERVICE TWO', '#86bf8e', '<p><span style=\"font-size: 24px;\">PHOTOGRAPHER\'S CHOICE.</span></p><table class=\"table table-bordered\"><tbody><tr><td><i style=\"background-color: rgb(247, 247, 247);\">nested hope for 100 + Photographers<br>around the globe</i><br></td></tr></tbody></table><p><br></p>', NULL, 1, '2018-12-20 06:50:49', '2018-12-20 07:10:00'),
(2, NULL, NULL, NULL, NULL, NULL, '<p><span style=\"font-size: 24px;\">PERFECT CLIPPING</span><br><span style=\"font-size: 18px; font-family: Tahoma;\">At Low Price</span><br><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\"><b>Starts From $0.20</b></span><br></p>', 'uploads/images/slider/7YZcy3AIjU9bRK0PmwGIV8o5PkXbQrF21RgvtU7K.png', 1, '2018-12-20 07:11:43', '2018-12-20 07:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `icon`, `profile_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fa fa-facebook', 'faacebook.com/username', 1, '2018-12-20 07:23:21', '2018-12-20 07:23:21'),
(2, 'fa fa-twitter', 'twitter.com', 1, '2018-12-20 07:23:32', '2018-12-20 07:23:32'),
(3, 'fa fa-skype', 'skype.com/username', 1, '2018-12-20 07:23:48', '2018-12-20 07:23:48'),
(5, 'fa fa-instagram', 'fgjyfjhh', 1, '2018-12-20 07:27:48', '2018-12-20 07:27:48'),
(6, 'fa fa-linkedin', 'fgjyfjhh', 1, '2018-12-20 07:28:07', '2018-12-20 07:28:07'),
(7, 'fa fa-pinterest', 'wdqdq', 1, '2018-12-20 07:28:17', '2018-12-20 07:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `thumbnail`, `feedback`, `status`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'Photographer', 'uploads/images/testimonial/P9Vmu8vIGYcv8bYVd6DUBWxseOoyOdQ14me8plYv.png', 'You guys are dependable!! All these images within such short turnaround time is really impressive!! I will have more jobs for you soon.', 1, '2018-12-20 06:42:33', '2018-12-20 06:42:33'),
(2, 'JANE', 'E-commerce content creator', 'uploads/images/testimonial/XdJJGy1MBISeaXDY81kJ0IDNfQ1VgTUp8Fe4p8ec.png', 'My company has been working with Clipping path family for last two years and I am really happy with their services. I always deal with quality service and clipping path family team is something I can rely on.', 1, '2018-12-20 06:43:14', '2018-12-20 06:43:14'),
(3, 'Micael', 'Marketing Consultant', 'uploads/images/testimonial/N20QVGXRc47Z3q1515one1X5YYcfXzgPnLjxkyNP.png', 'I am a fan of your work. Your designs are simple, target oriented and meaningful. Looking forward to work with you on another app design job. Cheers!!', 1, '2018-12-20 06:44:02', '2018-12-20 06:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anik Datta', 'aunik.t2@gmail.com', NULL, '$2y$10$L1Ll9X0OCSeX5RGR5IBBKumUXXiyhexIBFMwqOdcALIZSMNhCn0tW', NULL, '2018-12-18 06:02:19', '2018-12-18 06:02:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_configs`
--
ALTER TABLE `contact_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_submenu_id_foreign` (`submenu_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_configurations`
--
ALTER TABLE `site_configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submenus_menu_id_foreign` (`menu_id`),
  ADD KEY `submenus_slug_index` (`slug`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_configs`
--
ALTER TABLE `contact_configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_configurations`
--
ALTER TABLE `site_configurations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_submenu_id_foreign` FOREIGN KEY (`submenu_id`) REFERENCES `submenus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submenus`
--
ALTER TABLE `submenus`
  ADD CONSTRAINT `submenus_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
