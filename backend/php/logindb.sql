-- MySQL dump 10.13  Distrib 8.0.41, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: logindb
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `published` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'Systemic Brochure','Brochure design for science festival','<p>This brochure design is part of a suite of advertising materials that promote the Systemic science festival. These materials feature the complex visual identity that is an abstract grid of pathways representing choice and decision-making in designing complex systems.</p>','2018-10-16 12:59:03',1,2,1,1),(2,'Polite Society Posters','Poster designs for fashion label','<p>These posters were designed to increase brand awareness in fashion districts as part of an international campaign ahead of the upcoming autumn-winter season. The client required something aesthetically modern that introduced the vibrant palette of the new collection.</p>','2018-10-16 13:11:52',1,1,2,1),(3,'Swimming pool','Architecture magazine photography','<p>This photograph is one of a series commissioned for an article in an architectural magazine featuring swimming pools in private residences. The variety of locations shared a similar mid-century modern aesthetic and were rendered using a grainy, black and white film stock.</p>','2018-10-16 13:13:46',4,1,3,1),(4,'Walking Birds','Artwork for music video','<p>The brief for this music video was to combine a psychedelic sixties vibe with a granola-brown seventies aesthetic and morph it into a Sesame Street-style animation. With over two million views online, the artwork successfully promoted the song across multiple social media channels.</p>','2018-10-16 13:17:08',3,3,4,1),(5,'Sisters','Editorial graphics for psychology article','<p>The article that these illustrations accompany highlights the changing landscape of family connections in the modern age as compared to fifty years ago. The brief was to visualize the interpersonal drift caused by increased dispersement of communities across the globe.</p>','2018-10-16 13:20:17',3,3,5,1),(6,'Micro-Dunes','Photography for scientific journal','<p>This photograph was commissioned to accompany a scientific article about micro-ecologies in the coastal environment. Due to the miniature scale of the subject matter, a macro lens was used to capture the fine detail. It was shot on location on the mid-north coast of Australia.</p>','2018-10-16 13:24:29',4,1,6,1),(7,'Milk Beach Website','Website for music series','<p>Using the imagery commissioned for the album artwork, this website aims to provide a simple channel for users to listen to the music digitally. Care was taken to ensure fans of the music could connect with the brand and keep updated on future offerings.</p>','2018-10-16 13:25:24',2,1,7,1),(8,'Wellness App','App for health facility','<p>The Wellness chain of health facilities required an app that allowed members to view and book classes. The existing brand style guide defined the overall look and feel of the site with the main goal of the design to be as minimalistic as possible.</p>','2018-10-16 13:26:15',2,2,8,1),(9,'Milk Beach Music','Photography for a music series','<p>The music label that released this series wanted to capture the beach that inspired its creation. A number of photographs (including panoramic views and close-ups) were shot on location at Milk Beach in Sydney, Australia. They were given a duotone appearance in post-production.</p>','2018-10-16 13:27:13',4,1,9,1),(10,'Polite Society Mural','Large-scale illustrations for fashion label','<p>This is one of several illustrations commissioned by fashion label, Polite Society, to decorate their new autumn-winter collection displays. Appearing in various forms (such as murals, digital projections, and in print) they represent the modern aesthetic of the latest range.</p>','2018-10-16 13:30:31',3,1,10,1),(11,'Stargazer Website and App','Website and app design for music festival','<p>The Stargazer music festival website uses a highly typographic treatment to communicate the high calbre performers who will be appearing. As well as allowing users to view the line-up and purchase tickets, the website also allows them to plan their itineraries and book food.</p>','2018-10-16 13:31:37',2,3,11,1),(12,'The Ice Palace','Book cover design','<p>This cover is for a Chimney Press reissue of the Norwegian classic novel, The Ice Palace. The design reflects the concise style of the writing and the sense of unease that appears throughout, almost as its own frozen character. The binding uses linen and a thick cover keeps its secrets close to its chest.</p>','2018-10-16 13:32:31',1,2,12,1),(13,'Chimney Press Website','Website for book publisher','<p>This design was based on extensive research into the perception of the Chimney Press brand across multiple channels. The insights gained showed that customers were very keen to keep informed on new and upcoming releases and also to share this information throughout their social networks.</p>','2018-10-16 13:33:20',2,2,13,1),(14,'Milk Beach Album Cover','Packaging for music series','<p>Having commissioned a number of photographs of the intertidal rocks that adorn the eponymous Milk Beach, this packaging creates a beautiful and serene context for the hugely successful music series. Natural, recycled cardstocks and gentle colorways were used throughout.</p>','2018-10-16 13:34:17',1,1,14,1),(15,'Seascape','Photograph for art exhibition','<p>This shot of tbe sea at Margate was included in a group show at the Turner Contemporary art gallery in Kent, England. Printed at a large scale, the serene viewpoint reveals a timeless beauty to the briny waters that have lured Londoners to it for centuries.</p>','2018-10-16 13:35:22',4,2,15,1),(16,'Polite Society Website','Website for fashion label','<p>The Polite Society website was rebuilt from the ground up with a complete evaluation of the old version and adjustments to the new user experience to respond to it. As well as working on multiple devices, a new back-end was built to encompass the expanding nature of the company.</p>','2018-10-16 13:36:18',2,1,16,1),(17,'Snow Search','Graphics for mobile game','<p>These illustrations of a young boy and his dog formed the basis for a highly successful animated game called Snow Search. The game, which was designed for mobile devices, received several awards for game design and mechanics. More illustration work is currently underway for a sequel.</p>','2018-10-16 13:40:01',3,3,17,1),(18,'Floral Website','Website for florist','<p>This florist in Brooklyn required an updated website to support the expanding scope of their business. Working in association with a stylist and a photographer, we created a pleasant and straightforward user experience. Since the relaunch, online enquiries have increased.</p>','2018-10-16 13:38:09',2,1,18,1),(19,'Forecast','Illustration for fashion magazine article','<p>This drawing was commissioned by a fashion magazine for an article about spotting future trends. This piece uses luxury handbags to mimic clouds in a kind of fashion-based weather forecast-style graphic. The use of repetition and pattern highlights the potential power of a single prediction.</p>','2018-10-16 13:37:18',3,2,19,1),(20,'Chimney Business Cards','Stationery design for publishing company','<p>Along with several other items of branded stationery, Chimney Press required new business cards for their expanding office staff. In keeping with their company mission of re-releasing older book titles, a clean and vintage-inspired aesthetic informed the otherwise modern design.</p>','2018-10-16 13:42:32',1,2,20,1),(21,'Abandoned Industry','Photograph for magazine feature','<p>This photograph of old industrial equipment on a disused dock appeared alongside an essay in a magazine about urban-planning and regeneration. The brief was to consider the visual beauty inherent in decay and inspire readers to embrace sustainable idealogies within the contemporary landscape.</p>','2018-10-16 13:39:06',4,2,21,1),(22,'Golden Brown','Photograph for interior design book','<p>This photograph is one of a range that appears in a book about interior design called Golden Brown. The interiors featured in the book show the current trend for looking back to the 1970\'s and the colour treatment of the photography reflects this warm, earthy palette.</p>','2018-10-16 13:41:42',4,3,22,1),(23,'Stargazer','Illustrations for music festival','<p>A series of illustrations were commissioned for the Stargazer music festivals range of promotional materials. A creative choice was made not to portray the night sky itself (as in previous years) but to focus on the beauty and wonder inherent in the patrons themselves.</p>','2018-10-16 13:43:28',3,3,23,1),(24,'Travel Guide','Book design for series of travel guides','<p>& The best-selling travel guide series, <b>Featherview</b>, required a refreshed look and feel for their latest series of books covering the Asian region. They were after a clean and concise solution - a versatile design that could accommodate both the coffee table and the backpack.</p>','2018-10-16 12:40:49',1,1,24,1);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `navigation` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Print','Inspiring graphic design and visual communication for print and packaging',1),(2,'Digital','Websites and apps that push digital design to its limits on all devices',1),(3,'Illustration','Visual storytellers specialising in hand drawn and vector illustrations',1),(4,'Photography','Capturing images that transport the viewer to the moment they were taken',1),(5,'Computer','                                    All Items stored in computer hard drive.',0),(9,'Paper','                        testing',0),(10,'test','           f ffsdgfsd',0);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `image` (
  `id` int(11) NOT NULL DEFAULT 0,
  `file` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'systemic-brochure.jpg','Brochure for Systemic science festival'),(2,'polite-society-posters.jpg','Posters for Polite Society'),(3,'swimming-pool.jpg','Photograph of swimming pool'),(4,'birds.jpg','Collage of two birds'),(5,'sisters.jpg','Illustration of two sisters'),(6,'micro-dunes.jpg','Photograph of tiny sand dunes'),(7,'milk-beach.jpg','Website for Milk Beach'),(8,'wellness.jpg','Yoga timetable for Wellness'),(9,'milk-beach-skyline.jpg','Photograph of Sydney Harbour from Milk Beach'),(10,'polite-society-mural.jpg','Mural for Polite Society'),(11,'stargazer.jpg','Line-up for Stargazer website'),(12,'the-ice-palace.jpg','The Ice Palace book cover'),(13,'chimney.jpg','Website for Chimney Press'),(14,'milk-beach-album.jpg','Vinyl LP cover for Milk Beach'),(15,'seascape.jpg','The sea taken at Margate Beach'),(16,'polite-society.jpg','Website for Polite Society'),(17,'snow-search.jpg','Illustration of boy in snow'),(18,'floral.jpg','Floral Website'),(19,'forecast.jpg','Illustration of handbags'),(20,'chimney-cards.jpg','Business cards for Chimney Press'),(21,'abandoned.jpg','Photograph of disused cranes'),(22,'golden-brown.jpg','Photograph of the interior of a cafe'),(23,'stargazer-mascot.jpg','Illustration of girl looking at the sky'),(24,'featherview.jpg','Internal pages from travel book');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `member` (
  `id` int(11) NOT NULL DEFAULT 0,
  `forename` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `joined` timestamp NOT NULL DEFAULT current_timestamp(),
  `picture` varchar(254) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'Hari','Manandhar','hsmanandhar@gmail.com','c63j-82ve-2sv9-qlb38','2018-02-01 16:03:01','hari.jpg'),(2,'Ivy','Stone','ivy@eg.link','c63j-82ve-2sv9-qlb38','2018-02-01 16:03:01','ivy.jpg'),(3,'Luke','Wood','luke@eg.link','saq8-2f2k-3nv7-fa4k','2018-02-01 16:03:25',NULL),(4,'Emiko','Ito','emi@eg.link','sk3r-vd92-3vn1-exm2','2018-02-01 16:03:54','emi.jpg');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_users` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `role` char(1) DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` VALUES (1,'dinesh','7c4a8d09ca3762af61e59520943dc26494f8941b','2025-03-02 02:31:24','0'),(4,'hari','b4d37c949644d80dbfe72881f4b8a36046d0a79d','2025-03-02 03:24:57','1'),(5,'ami','b4d37c949644d80dbfe72881f4b8a36046d0a79d','2025-03-02 03:54:46','0'),(6,'ramesh','7c4a8d09ca3762af61e59520943dc26494f8941b','2025-03-14 04:44:25','0');
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-19  7:37:39
