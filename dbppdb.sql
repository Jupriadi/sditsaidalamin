-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: dbppdb
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `auth_activation_attempts`
--

DROP TABLE IF EXISTS `auth_activation_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_activation_attempts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_activation_attempts`
--

LOCK TABLES `auth_activation_attempts` WRITE;
/*!40000 ALTER TABLE `auth_activation_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_activation_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_groups`
--

DROP TABLE IF EXISTS `auth_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_groups` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_groups`
--

LOCK TABLES `auth_groups` WRITE;
/*!40000 ALTER TABLE `auth_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_groups_permissions`
--

DROP TABLE IF EXISTS `auth_groups_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_groups_permissions` (
  `group_id` int unsigned NOT NULL DEFAULT '0',
  `permission_id` int unsigned NOT NULL DEFAULT '0',
  KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  KEY `group_id_permission_id` (`group_id`,`permission_id`),
  CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_groups_permissions`
--

LOCK TABLES `auth_groups_permissions` WRITE;
/*!40000 ALTER TABLE `auth_groups_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_groups_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_groups_users`
--

DROP TABLE IF EXISTS `auth_groups_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_groups_users` (
  `group_id` int unsigned NOT NULL DEFAULT '0',
  `user_id` int unsigned NOT NULL DEFAULT '0',
  KEY `auth_groups_users_user_id_foreign` (`user_id`),
  KEY `group_id_user_id` (`group_id`,`user_id`),
  CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_groups_users`
--

LOCK TABLES `auth_groups_users` WRITE;
/*!40000 ALTER TABLE `auth_groups_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_groups_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_logins`
--

DROP TABLE IF EXISTS `auth_logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_logins` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_logins`
--

LOCK TABLES `auth_logins` WRITE;
/*!40000 ALTER TABLE `auth_logins` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_permissions`
--

DROP TABLE IF EXISTS `auth_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_permissions` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_permissions`
--

LOCK TABLES `auth_permissions` WRITE;
/*!40000 ALTER TABLE `auth_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_reset_attempts`
--

DROP TABLE IF EXISTS `auth_reset_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_reset_attempts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_reset_attempts`
--

LOCK TABLES `auth_reset_attempts` WRITE;
/*!40000 ALTER TABLE `auth_reset_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_reset_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_tokens`
--

DROP TABLE IF EXISTS `auth_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_tokens` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int unsigned NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auth_tokens_user_id_foreign` (`user_id`),
  KEY `selector` (`selector`),
  CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_tokens`
--

LOCK TABLES `auth_tokens` WRITE;
/*!40000 ALTER TABLE `auth_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_users_permissions`
--

DROP TABLE IF EXISTS `auth_users_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_users_permissions` (
  `user_id` int unsigned NOT NULL DEFAULT '0',
  `permission_id` int unsigned NOT NULL DEFAULT '0',
  KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  KEY `user_id_permission_id` (`user_id`,`permission_id`),
  CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_users_permissions`
--

LOCK TABLES `auth_users_permissions` WRITE;
/*!40000 ALTER TABLE `auth_users_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_users_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guru`
--

DROP TABLE IF EXISTS `guru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `guru` (
  `idGuru` int unsigned NOT NULL AUTO_INCREMENT,
  `niy` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `namaguru` varchar(100) DEFAULT NULL,
  `kelamin` varchar(10) NOT NULL,
  `alamat` text,
  `tgllahir` varchar(20) DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gelar` varchar(10) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT 'guru.png',
  `tgldaftarguru` datetime NOT NULL,
  `tglubahguru` datetime NOT NULL,
  PRIMARY KEY (`idGuru`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guru`
--

LOCK TABLES `guru` WRITE;
/*!40000 ALTER TABLE `guru` DISABLE KEYS */;
INSERT INTO `guru` VALUES (13,'-','GTY','Solatiah','Perempuan','Sembalun bumbung','1994-04-25','-','','S1','Tteknik Informatika','S.Kom','STMIK SZ NW anjani','guru.png','2021-07-27 20:20:58','2021-07-27 21:08:23'),(14,'-','GTY','Mihraj','Laki laki','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung','1995-08-15','-','','S1','Pendidikan Bhasa Inggris','S.Pd','Universitas Nahdlatul Wathan Mataram','guru.png','2021-07-27 20:23:31','2021-07-27 20:23:31'),(15,'-','GTY','Ilam Piyanti','Laki laki','Sembalun bumbung','2000-10-05','','','SLTA','-','','MA Darul Kamal NW Kembang Kerang','guru.png','2021-07-27 20:27:42','2021-07-27 20:27:42'),(16,'-','GTY','Abdul Robi','Laki laki','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung','1996-06-26','081909055789','abdulrobi862@gmail.com','SLTA','Bahasa','','MA Mu\'allimin NW Anjani','guru.png','2021-07-27 20:29:52','2021-07-27 20:29:52'),(17,'-','GTY','MISLAN','Laki laki','Sembalun bumbung','1991-12-31','-','','S1','Pendidikan Bhasa Inggris','S.Pd','Universitas Nahdlatul Wathan Mataram','guru.png','2021-07-27 20:39:38','2021-07-27 20:42:01'),(18,'-','GTY','Junaedi','Laki laki','Sembalun bumbung','1995-06-05','-','','S1','Ilmu Hukum','S.H','Universitas 45 Mataram','guru.png','2021-07-27 20:54:26','2021-07-27 20:54:26'),(19,'','GTY','Murnaji','Laki laki','Sembalun Bumbung Kec. Sembalun','1988-05-08','','','S1','program studi teknologi pendidikan','S.Pd','institut kegururan ilmu pendidikan mataram','guru.png','2021-07-27 21:00:21','2021-07-27 21:00:21'),(20,'','GTY','Ahna','Perempuan','Sembalun Bumbung Kec. Sembalun','1996-07-13','','','S1','program studi agroekoteknologi','S.P','','guru.png','2021-07-27 21:03:16','2021-07-27 21:03:16'),(21,'','GTY','Sri Ratnasari','Perempuan','Sembalun Bumbung Kec. Sembalun','1995-11-03','','','S1','Pendidikan Ekonomi','S.Pd','Universitas Hamzanwadi ','guru.png','2021-07-27 21:05:40','2021-07-27 23:11:40'),(22,'-','GTY','Jupriadi','Laki laki','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung','1995-12-31','082339513607','jupri@rinjani.net.id','S1','Teknik Informatika','S.Kom','STMIK SZ NW anjani','guru.png','2021-07-27 21:09:29','2021-07-27 21:09:29'),(23,'','GTY','Suniarto','Laki laki','Sembalun Bumbung Kec. Sembalun','1997-10-09','087864109870','suniarto67@gmail.com','S1','Sistem Informasi','S.Kom','STMIK SZ NW anjani','guru.png','2021-07-27 21:11:08','2021-07-27 23:12:16'),(24,'-','GTY','Arpaidi','Laki laki','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung','1997-06-24','085921481010','','SLTA','Ilmu Pengetahuan Sosial','-','MA TIA NW Wanasaba','guru.png','2021-07-27 23:10:32','2021-07-27 23:10:32');
/*!40000 ALTER TABLE `guru` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mapel`
--

DROP TABLE IF EXISTS `mapel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mapel` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `kodemapel` varchar(50) DEFAULT NULL,
  `mapel` varchar(100) DEFAULT NULL,
  `gurumapel` int NOT NULL,
  `tgluploadmapel` date NOT NULL,
  `tglubahmapel` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mapel`
--

LOCK TABLES `mapel` WRITE;
/*!40000 ALTER TABLE `mapel` DISABLE KEYS */;
INSERT INTO `mapel` VALUES (1,'k3','Pendidikan Agama Islam',10,'2021-05-01','2021-05-01'),(2,'k29','Bahasa Inggris',10,'2021-05-01','2021-05-01'),(3,'k26','Pendidikan Sejarah',10,'2021-05-01','2021-05-01'),(4,'k9','Pendidikan Bahasa Arab',10,'2021-05-01','2021-05-01'),(6,'k4','Bahasa Sasak',10,'2021-05-01','2021-05-02'),(8,'k0','Bahasa Sasak',12,'2021-05-04','2021-05-04');
/*!40000 ALTER TABLE `mapel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (5,'2021-04-26-094950','App\\Database\\Migrations\\Profsek','default','App',1619483604,1),(6,'2021-04-26-235420','App\\Database\\Migrations\\Guru','default','App',1619483605,1),(7,'2021-04-27-122004','App\\Database\\Migrations\\Siswa','default','App',1619526608,2),(8,'2017-11-20-223112','Myth\\Auth\\Database\\Migrations\\CreateAuthTables','default','Myth\\Auth',1619580424,3),(9,'2021-04-28-082841','App\\Database\\Migrations\\Slide','default','App',1619598645,4),(10,'2021-05-01-140940','App\\Database\\Migrations\\Mapel','default','App',1619878705,5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profsek`
--

DROP TABLE IF EXISTS `profsek`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profsek` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `namasekolah` varchar(100) NOT NULL,
  `npsn` varchar(50) NOT NULL,
  `nis` varchar(50) DEFAULT NULL,
  `nss` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `tgl_ubah` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profsek`
--

LOCK TABLES `profsek` WRITE;
/*!40000 ALTER TABLE `profsek` DISABLE KEYS */;
INSERT INTO `profsek` VALUES (1,'SDIT Nurul Alamin NW','-','-','-','08345343432','said@alamin.sch','www.saidalamin.sch','Nusa Tenggara Barat','Lombok Timur','sembalun','sembalun bumbung','1627708084_726f30ba5297adfe4ea9.png','2021-04-26 00:00:00','2021-07-31 00:08:04');
/*!40000 ALTER TABLE `profsek` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `siswa` (
  `idSiswa` int unsigned NOT NULL AUTO_INCREMENT,
  `nis` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `namasiswa` varchar(100) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `tmptlahir` varchar(70) NOT NULL,
  `tgllahir` varchar(20) NOT NULL,
  `kelas` int NOT NULL,
  `sekolahasal` varchar(100) DEFAULT NULL,
  `agamaIbu` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `agamaAyah` varchar(50) DEFAULT NULL,
  `pekIbu` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pekAyah` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pendIbu` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pendAyah` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `namaIbu` varchar(50) DEFAULT NULL,
  `namaAyah` varchar(50) DEFAULT NULL,
  `hpOrtu` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `alamatIbu` text,
  `alamatAyah` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `status` varchar(100) DEFAULT NULL,
  `photo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'siswa.png',
  `anakKe` int DEFAULT NULL,
  `jumSaudara` int DEFAULT NULL,
  `tgldaftarsiswa` datetime NOT NULL,
  `tglubahsiswa` datetime NOT NULL,
  `nik` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idSiswa`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` VALUES (10,'2115451','Zelki Anowar','Laki laki','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung','Sembalun Bumbung','2015-06-09',1,'-','islam','Islam','Ibu rumah tangga','petani','SD','SD','ermi','din','','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung',NULL,'siswa.png',1,0,'2021-07-23 00:00:00','2021-07-25 00:00:00','5203120906150002'),(11,'2115456','rafa','Laki laki','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung','Sembalun Bumbung','2015-05-24',1,'-','Islam','Islam','petani','petani','SD','SD','sar','jumahir','','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung',NULL,'siswa.png',3,2,'2021-07-23 00:00:00','2021-07-25 00:00:00','5203152405150001'),(12,'2115453','hana isa salma','Perempuan','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung','Sembalun Bumbung','2014-11-20',1,'-','islam','islam','petani','Petani','SLTP','SLTA','mustiah','mustilih','-','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung',NULL,'siswa.png',1,1,'2021-07-23 00:00:00','2021-07-25 20:20:43','5203156011140001'),(13,'2115454','reza mahendra','Laki laki','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung','selong','2015-05-19',1,'-','Islam','Islam','petani','petani','SLTP','SLTA','inaq etawati','amaq etawati','','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung',NULL,'siswa.png',3,2,'2021-07-23 00:00:00','2021-07-25 19:17:56','5203151905150001'),(14,'2115455','Muhammd Arsyat','Laki laki','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung','Sembalun Bumbung','2014-07-25',1,'-','Islam','Islam','Petani','','SD','','rumesah','-','','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung',NULL,'1627301750_a4c13a8e9317b0fc4f1c.jpg',2,1,'2021-07-23 00:00:00','2021-07-26 07:15:50','5203152507140004'),(15,'2115457','Muhammad Aldi','Laki laki','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung','suela','2015-12-31',1,'-','Islam','Islam','petani','wiraswasta','SD','SD','RUPNA','HAPDI','','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung',NULL,'siswa.png',4,3,'2021-07-23 00:00:00','2021-07-25 19:19:58','5203163112150001'),(16,'2115452','ana kirana sakira','Perempuan','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung','Sembalun Bumbung','2012-07-01',1,'-','Islam','Islam','petani/pekebun','petani/pekebun','SD','SD','murjiah','zaenudiin','','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung',NULL,'1627265346_20e81e045c9d30e9dfda.jpg',1,0,'2021-07-23 00:00:00','2021-07-26 06:29:23','5203154107120003'),(17,'2115582','Ayudi rahman','Laki laki','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung','Sembalun','2016-06-26',1,'-','Islam','Islam','wiraswasta','petani/pekebun','SLTP','SD','hamdiah','diraman','','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung',NULL,'1627265291_f8e25f7430dd19731468.jpg',5,4,'2021-07-23 00:00:00','2021-07-26 07:06:41','5203152606160001'),(18,'2115458','Rindu zahya septiana','Perempuan','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung','Sembalun Bumbung','2014-09-01',1,'-','Islam','Islam','petani/pekebun','petani/pekebun','SLTP','SLTP','nuraeni','Husnuwadi','','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung','Dusun, Lauk Rurung Timuk, desa Sembalun Bumbung',NULL,'1627265207_02a97333880de5b96d3c.jpg',3,2,'2021-07-23 00:00:00','2021-07-25 21:06:47','5203154109140001'),(19,'2115459','komala sari dewi','Perempuan','Dusun Bedurik, Desa Sembalun Bumbung','Sembalun Bumbung','2014-10-10',1,'-','Islam','Islam','petani/pekebun','petani/pekebun','SLTP','SD','supini','Simah','-','Dusun Bedurik, Desa Sembalun Bumbung','Dusun Bedurik, Desa Sembalun Bumbung',NULL,'siswa.png',2,1,'2021-07-23 00:00:00','2021-07-23 00:00:00','5203155011140002'),(20,'2115460','Susila Endang Fitriayuningsih','Perempuan','Dusun Lauk Rurung Rurung Barat, Desa Sembalun Bumbung','mekar sari','2015-02-08',1,'-','Islam','Islam','petani/pekebun','petani/pekebun','SD','SD','musnah','Gairi','-','Dusun Lauk Rurung Rurung Barat, Desa Sembalun Bumbung','Dusun Lauk Rurung Rurung Barat, Desa Sembalun Bumbung',NULL,'siswa.png',2,1,'2021-07-23 00:00:00','2021-07-25 00:00:00','5203164802150002'),(21,'2115461','rizky arrahman','Laki laki','Dusun Daya Rurung Timuk, Desa Sembalun Bumbung','sembalun','2015-03-14',1,'-','Islam','Islam','petani/pekebun','petani/pekebun','SD','SD','hartini','ronika rahman','-','Dusun Daya Rurung Timuk, Desa Sembalun Bumbung','Dusun Daya Rurung Timuk, Desa Sembalun Bumbung',NULL,'siswa.png',1,0,'2021-07-23 00:00:00','2021-07-25 00:00:00','5203151403150002'),(22,'2115462','pingka adelia','Perempuan','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung','Sembalun Bumbung','2016-01-22',1,'','Islam','Islam','petani/pekebun','petani/pekebun','SD','SLTP','rauhul','erpi','','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung','Dusun Lauk Rurung Barat, Desa Sembalun Bumbung',NULL,'siswa.png',2,1,'2021-07-23 00:00:00','2021-07-25 00:00:00','5203156201160001');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `slide` (
  `idSlide` int unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(100) DEFAULT NULL,
  `subdeskripsi` varchar(100) DEFAULT NULL,
  `file` varchar(100) DEFAULT 'guru.png',
  `tglupload` date NOT NULL,
  `tglubah` date NOT NULL,
  PRIMARY KEY (`idSlide`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slide`
--

LOCK TABLES `slide` WRITE;
/*!40000 ALTER TABLE `slide` DISABLE KEYS */;
/*!40000 ALTER TABLE `slide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-03  8:57:26
