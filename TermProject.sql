-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: term_project
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `dg_corona_patient_information`
--

DROP TABLE IF EXISTS `dg_corona_patient_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dg_corona_patient_information` (
  `Pat_num` char(10) NOT NULL,
  `Pat_name` varchar(30) NOT NULL,
  `Register_date` date NOT NULL,
  `Discharg_date` date DEFAULT NULL,
  `Pat_ssn` char(15) NOT NULL,
  `Date_of_death` date DEFAULT NULL,
  `Pat_phone` varchar(15) NOT NULL,
  `Pat_address` varchar(40) NOT NULL,
  `side_effect` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Pat_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_corona_patient_information`
--

LOCK TABLES `dg_corona_patient_information` WRITE;
/*!40000 ALTER TABLE `dg_corona_patient_information` DISABLE KEYS */;
INSERT INTO `dg_corona_patient_information` VALUES ('DG_1','강선화','2020-03-01','2020-06-01','700524-1022018','2021-12-08','010-8524-1055','대구광역시','고열,메스꺼움'),('DG_2','강세원','2021-10-13','2021-11-06','890216-1841496','2021-12-02','010-1338-0622','대구광역시','두통'),('DG_3','강재은','2020-08-13','2021-10-11','060204-2151351',NULL,'010-7134-1404','대구광역시 달서구','근육통'),('DG_4','고영자','2020-06-01','2021-01-16','870928-1840761',NULL,'010-4062-3121','대구광역시 중구','피로감'),('DG_5','권도원','2021-01-11','2021-01-11','840920-2579955',NULL,'010-7480-4463','대구광역시 달성군','메스꺼움'),('DG_6','권영지','2020-09-21','2020-09-30','850923-1646134','2020-09-30','010-4145-8456','대구광역시 북구','심장 통증'),('DG_7','권윤식','2021-11-01','2021-11-01','030429-2757597','2021-11-01','010-4855-8360','대구광역시 북구','N'),('DG_8','김광수','2020-05-16','2020-08-25','110716-1249458','2020-08-25','010-6842-5712','대구광역시 수성구','N'),('DG_9','김선욱','2021-05-18','2021-10-22','091014-2974291','2021-10-22','010-4124-1631','대구광역시 서구','N');
/*!40000 ALTER TABLE `dg_corona_patient_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_corona_test_people`
--

DROP TABLE IF EXISTS `dg_corona_test_people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dg_corona_test_people` (
  `Cotest_name` varchar(30) NOT NULL,
  `Cotest_sex` char(5) NOT NULL,
  `Test_date` date NOT NULL,
  `Confirmation_Y_N` varchar(5) NOT NULL,
  `Cotest_ssn` char(15) NOT NULL,
  `Cotest_phone` varchar(15) NOT NULL,
  `Cotest_address` varchar(40) NOT NULL,
  PRIMARY KEY (`Cotest_ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_corona_test_people`
--

LOCK TABLES `dg_corona_test_people` WRITE;
/*!40000 ALTER TABLE `dg_corona_test_people` DISABLE KEYS */;
INSERT INTO `dg_corona_test_people` VALUES ('강재은','M','2020-03-01','Y','060204-2151351','010-7134-1405','대구광역시'),('강소원','F','2021-10-11','N','081213-2355697','010-8784-4184','경상북도 경산시'),('강선화','F','2020-08-13','Y','700524-1022018','010-8524-1055','대구광역시 남구'),('고연재','F','2020-06-01','N','710408-2096041','010-1018-3283','대구광역시 달서구'),('고기준','M','2021-01-11','N','781222-1638763','010-3684-5474','대구광역시 북구'),('고예준','M','2020-09-21','N','830218-2398757','010-7373-5530','대구광역시 중구'),('권도원','M','2021-11-01','Y','840920-2579955','010-7480-4463','대구광역시 달성군'),('고영자','F','2020-05-16','Y','870928-1840761','010-4062-3121','대구광역시 중구'),('강태준','M','2021-05-18','N','880331-1786887','010-2425-1746','경상북도 경산시'),('강세원','F','2020-03-01','Y','890216-1841491','010-1338-0647','대구광역시 서구');
/*!40000 ALTER TABLE `dg_corona_test_people` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dg_reservation_system`
--

DROP TABLE IF EXISTS `dg_reservation_system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dg_reservation_system` (
  `Myself_or_Agent` char(10) NOT NULL,
  `Client_name` varchar(30) NOT NULL,
  `Reservation_date` date NOT NULL,
  `Client_ssn` char(15) NOT NULL,
  `Client_age` varchar(4) NOT NULL,
  `Vaccine_type` char(10) NOT NULL,
  `Client_phone` varchar(15) NOT NULL,
  PRIMARY KEY (`Client_ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dg_reservation_system`
--

LOCK TABLES `dg_reservation_system` WRITE;
/*!40000 ALTER TABLE `dg_reservation_system` DISABLE KEYS */;
INSERT INTO `dg_reservation_system` VALUES ('본인','윤원우','2020-01-23','070707-1973211','15','모더나','010-4714-5525'),('대리','장기호','2020-03-30','720108-2517822','50','화이자','010-8572-7532'),('본인','이대일','2020-02-25','800330-2037626','42','모더나','010-5578-7406'),('본인','임인우','2020-05-09','800420-1938168','42','모더나','010-8602-8485'),('본인','이명자','2021-01-17','820820-1053340','40','모더나','010-8366-3118'),('본인','유희정','2020-06-29','830124-1001471','39','모더나','010-8584-0020'),('본인','임민우','2020-08-27','830530-2210828','39','모더나','010-8462-4506'),('대리','장도준','2020-11-18','861120-2855424','36','화이자','010-3653-7021'),('본인','이은성','2021-01-23','870518-2622367','35','모더나','010-5716-7544'),('본인','윤정현','2021-01-07','900917-1255910','32','모더나','010-3288-4825'),('대리','김륜형','2021-11-11','921612-1256161','24','화이자','010-1235-1515'),('본인','배승호','2021-11-30','980328-1111111','24','모더나','010-8014-2323');
/*!40000 ALTER TABLE `dg_reservation_system` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gov_confirmed_by_region`
--

DROP TABLE IF EXISTS `gov_confirmed_by_region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gov_confirmed_by_region` (
  `Region` char(10) NOT NULL,
  `Confirmed_case` int DEFAULT NULL,
  `Foreign_Inflow` int DEFAULT NULL,
  `Dead` int DEFAULT NULL,
  `Recovering` int DEFAULT NULL,
  `Recovered` int DEFAULT NULL,
  `Quarantine` int DEFAULT NULL,
  `Quarantine_released` int DEFAULT NULL,
  `Distance_step` int DEFAULT NULL,
  PRIMARY KEY (`Region`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gov_confirmed_by_region`
--

LOCK TABLES `gov_confirmed_by_region` WRITE;
/*!40000 ALTER TABLE `gov_confirmed_by_region` DISABLE KEYS */;
INSERT INTO `gov_confirmed_by_region` VALUES ('강원',7668,275,69,478,7396,1158,72983,2),('경기',121359,2107,1061,10199,112206,4030,487109,3),('경남',14037,189,47,725,13384,2032,203985,2),('경북',10393,146,100,425,10014,1859,135413,3),('광주',5521,270,29,256,5506,2121,100641,3),('대구',17876,325,296,621,17284,2302,344932,3),('대전',7830,256,56,354,7676,2177,82908,3),('부산',14933,298,177,892,14162,2439,219821,3),('서울',136130,3024,941,16299,121915,4421,512890,4),('세종',1343,102,2,61,1382,256,9827,3),('울산',5354,207,57,71,5433,1929,76829,3),('인천',21992,408,126,2067,20207,2416,158233,3),('전국',397029,8922,3244,34684,374383,35375,2880096,NULL),('전남',3946,165,25,338,3714,1051,77182,2),('전북',5682,226,70,472,5368,1331,69217,2),('제주',3262,170,9,222,3201,1265,85092,2),('충남',11477,461,74,745,11119,1325,79287,2),('충북',8226,293,89,1163,8172,1159,84463,2);
/*!40000 ALTER TABLE `gov_confirmed_by_region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gov_confirmed_case_identification`
--

DROP TABLE IF EXISTS `gov_confirmed_case_identification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gov_confirmed_case_identification` (
  `Hospital` varchar(10) NOT NULL,
  `pat_num` char(15) NOT NULL,
  `pat_name` varchar(30) NOT NULL,
  `ssn` char(15) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `P_Number` varchar(20) NOT NULL,
  PRIMARY KEY (`pat_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gov_confirmed_case_identification`
--

LOCK TABLES `gov_confirmed_case_identification` WRITE;
/*!40000 ALTER TABLE `gov_confirmed_case_identification` DISABLE KEYS */;
INSERT INTO `gov_confirmed_case_identification` VALUES ('대구병원','DG_1','강선화','980201-1844215','대구광역시','010-8465-6563'),('대구병원','DG_2','강세원','890216-1841491','대구광역시','010-2626-1245'),('대구병원','DG_3','강재은','060204-2151351','대구광역시','010-5625-8528'),('대구병원','DG_4','고영순','981212-7711345','대구광역시','010-2248-1800'),('대구병원','DG_5','권도원','840920-2579955','대구광역시','010-5162-1933'),('대구병원','DG_6','권영지','850923-1646134','대구광역시 북구','010-4145-8456'),('대구병원','DG_7','권윤식','030429-2757597','대구광역시 북구','010-4855-8360'),('대구병원','DG_8','김광수','110716-1249458','대구광역시 수성구','010-6842-5712'),('대구병원','DG_9','김선욱','091014-2974291','대구광역시 서구','010-4124-1631'),('경북대병원','KN_1','이보훈','890323-2484723','경상북도','010-8014-2233'),('경북대병원','KN_2','김정화','880823-2305367','경상북도 문경시','010-1601-0203'),('경북대병원','KN_3','김서아','840424-1150971','대구시 중구','010-1241-5677'),('경북대병원','KN_4','박하은','991026-2072046','경상북도 포항시','010-2358-0847'),('경북대병원','KN_5','한지안','891117-2297033','대구시 북구','010-7328-3116'),('경북대병원','KN_6','김광수','891104-1809090','경상북도 봉화군','010-1411-2602'),('경북대병원','KN_7','박경수','790331-2977759','대구시 동구','010-0186-6276'),('경북대병원','KN_8','김민수','760714-1202494','대구시 수성구','010-3883-5881'),('영남대병원','YU_1','김지호','	840731-2105101','대구시 중구','010-6552-8522'),('영남대병원','YU_2','박예준','000713-1036367','경상북도 경주시','010-7775-4265'),('영남대병원','YU_3','류지은','	860120-1721797','경상북도 포항시','010-1034-4005'),('영남대병원','YU_4','김성아','	860719-2566845','대구시 북구','010-4540-0114'),('영남대병원','YU_5','배지은','940206-2331329','경상북도 문경시','010-5046-8920');
/*!40000 ALTER TABLE `gov_confirmed_case_identification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gov_hospital`
--

DROP TABLE IF EXISTS `gov_hospital`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gov_hospital` (
  `Number` int NOT NULL,
  `City` char(50) NOT NULL,
  `Institution` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `P_Number` char(20) NOT NULL,
  `Number_of_corona_patient` int DEFAULT NULL,
  `Capacity` int DEFAULT NULL,
  PRIMARY KEY (`Institution`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gov_hospital`
--

LOCK TABLES `gov_hospital` WRITE;
/*!40000 ALTER TABLE `gov_hospital` DISABLE KEYS */;
INSERT INTO `gov_hospital` VALUES (1,'서울','H+양지병원','서울특별시','1877-8876',1220,200),(2,'서울','가톨릭대학교','서울특별시','02-2180-2999',1500,190),(55,'강원도','강릉아산병원','강원도 강릉시 사천면 방동길 38','033-610-4111',1580,200),(3,'서울','강북삼성병원','서울특별시','1599-8114',1650,231),(70,'경상남도','거붕백병원','거제시 계룡로 5길 14','055-733-0194',500,190),(71,'경상남도','거창적십자병원','거창군 거창읍 중앙로 91','055-944-3251',560,200),(19,'대구','경북대병원','중구 동덕로 130','053-200-4554',2800,200),(65,'경상북도','경산중앙병원','경산시 경안로 11','053-715-0119',1520,200),(72,'경상남도','경상대학교병원','경남 진주시 강남로 79','055-750-8939',1360,180),(4,'서울','경희의료원','서울특별시 동대문구 경희대로 23','02-958-8114',750,220),(73,'경상남도','경희의료원 교육협력 중앙병원','경상남도 김해시 분성로 94-8','055-330-.6007',950,190),(20,'대구','계명대학교 대구동산병원','대구광역시 중구 달성로 56','1577-6622',1102,200),(34,'광주','광주기독병원','광주광역시 남구 양림로 37','062-650-5272',1623,190),(5,'서울','국립중앙의료원','서울특별시','02-2260-7114',1520,210),(41,'경기도','국민건강보험 일산병원','경기도 고양시 일산동구 일산로 100','031-900-3060',980,220),(11,'부산','기장병원','부산광역시 기장군 기장읍 대청로72번길 6','051-723-0171',700,190),(42,'경기도','김포우리병원','경기도 김포시 감암로11','031-999-1000',532,210),(51,'충청남도','단국대병원','충남 천안시 동남구 망향로 201','1588-0063',1620,190),(22,'대구','대구 병원','대구광역시 서구 평리로 1575','053-560-757',752,200),(21,'대구','대구가톨릭학교칠곡가톨릭병원','대구광역시 북구 칠곡중앙대로 440(읍내동)','053-320-2071',300,180),(12,'부산','대동병원','동래구 충렬대로 187 (명륜동)','051-554-1233',350,190),(56,'전라북도','대자인병원','전라북도 전주시 덕진구 견훤로390','063-240-2000',820,180),(37,'대전','대전한국병원','대전광역시 동구 동서대로 1672','042-606-1000',560,200),(38,'울산','동강병원','중구 태화로 239','052-241-1114',900,170),(43,'경기도','동국대학교일산병원','경기도 고양시 일산동구 동국로 27','1577-7000',1002,200),(48,'충청북도','명지병원(제천)','충청북도 제천시 내토로 991','043-640-8114',1302,200),(61,'전라남도','목포중앙병원','전라남도 목포시 영산로 623번지','061-280-3000',1500,170),(66,'경상북도','문경제일병원','문경시 당교3길 25','054-550-7700',1600,190),(13,'부산','부산대학교병원','서구 구덕로 179','051-240-7000',1800,210),(14,'부산','부산성모병원','남구 용호로 232번길25-14 (용호동)','051-933-7114',1647,200),(25,'인천','부평세림병원','인천광역시 부평구 부평대로 175','1899-9555',1900,190),(6,'서울','삼육서울병원','서울시 동대문구 망우로 82','1577-3675',2000,220),(23,'대구','삼일병원','달서구 월배로 446','053-659-3100',1000,190),(67,'경상북도','상주성모병원','상주시 냉림서성길 7','054-532-5001',1520,190),(35,'광주','서광병원','광주광역시 서구 금화로 59번길 6','062-600-8161',1320,190),(7,'서울','서울아산병원','서울 송파구 올림픽로 43길88','1688-7575',1620,210),(15,'부산','세웅병원','금정구 서동로162','051-500-9700',1400,190),(62,'전라남도','순천성가롤로병원','전라남도 순천시 순광로 221','061-720-2000',1230,170),(8,'서울','순천향대학교 부속서울병원','서울특별시 용산구 대사관로 59','02-709-9114',1350,190),(44,'경기도','신천연합병원','경기도 시흥시 복지로 57','1811-0075',1624,200),(52,'충청남도','아산충무병원','충청남도 아산시 문화로 381','041-536-6666',1522,170),(63,'전라남도','여수전남병원','전라남도 여수시 좌수영로49','061-640-7575',1258,180),(64,'전라남도','여수한국병원','전라남도 여수시 여천체육공원길10','061-653-2000',1365,190),(24,'대구','영남대병원','대구광역시','053-620-4523',2520,210),(16,'부산','영도병원','부산광역시 영도구 태종로 85 (대교동 2가)','051-419-7555',1230,190),(74,'경상남도','영동병원','함안군 칠원읍 용산2길 45-13','055-586-2000',2562,180),(68,'경상북도','영주적십자병원','경상북도 영주시 대학로 327','054)630-0146',1255,190),(69,'경상북도','왜관병원','칠곡군 왜관읍 군청2길 10','054-971-1002',1235,170),(45,'경기도','용인세브란스병원','경기도 용인시 기흥구 동백죽전대로 363','1899-1004',1632,200),(39,'울산','울산대학교병원','동구 방어진순환도로 877','052-250-7944',2356,200),(40,'경기도','울산병원','남구 월평로 171번길 13','052-259-5127',1023,190),(26,'인천','의료법인 나사렛의료재단 나사렛 국제병원','인천시 연수구 먼우금로98 (동춘동)','032-899-9999',1222,170),(57,'전라북도','익산병원','전북 익산시 무왕로 969','063-840-9107',1234,180),(17,'부산','인제대 부산백병원','부산진구 복지로 75 (개금동)','051-890-8933',2152,220),(18,'부산','인제대 해운대백병원','해운대구 해운대로 875 (좌동)','051-797-0100',1223,220),(9,'서울','인제대학교 서울 백병원','서울특별시 중구 마른내로 9','02-2270-0114',2510,200),(27,'인천','인천광역시의료원','인천광역시 동구 방축로 217','032-580-6000',900,200),(28,'인천','인천국제공항 제1터미널 동편 이원공항의원','인천광역시 중구 공항로 271','1600-5110',875,210),(29,'인천','인천국제공항 제2공항의원','인천 중구 공항서로 513 478 지하1층','032-741-9000',652,200),(30,'인천','인천온누리병원','인천광역시 서구 왕길동 635-1','032-567-6207',700,200),(31,'인천','인하대병원','인천시 중구 인항로 27','032-890-2000',1532,220),(58,'전라북도','전주병원','전라북도 전주시 완산구 한두평3길13','063-220-7200',1652,190),(59,'전라북도','정읍아산병원','전북 정읍시 충정로 606-22','063-530-6114',1235,170),(77,'제주','제주대학교병원','제주시 아란13길 15','064-717-1114',1402,160),(78,'제주','제주한라병원','제주시 도령로 65','064-740-5000',1982,160),(36,'광주','조선대학교병원','광주광역시 동구 필문대로 365','062-230-3114',1756,190),(75,'경상남도','조은금강병원','경남 김해시 김해대로 1814-37 (삼계동392-1)','055-330-0428',1823,180),(10,'서울','중앙대학교병원','서울특별시 동작구 흑석로 102','1800-1114',1425,200),(79,'제주','중앙의료재단 중앙병원','제주특별자치도 제주시 월랑로 91 (이호이동 22)','064-786-7621',1632,170),(49,'충청북도','진천성모병원','충청북도 진천군 중앙북로 36','043-533-1711',1256,190),(76,'경상남도','창원파티마병원','창원시 의창구 창이대로 45','055-270-1020',1345,190),(53,'충청남도','천안충무병원','충남 천안시 서북구 다가말 3길 8','041-570-7555',1953,190),(46,'경기도','추병원','경기도 의정부시 평화로 650 추병원','031-823-8063',1652,190),(54,'충청남도','충청남도천안의료원','충청남도 천안시 동남구 충절로 537','041-570-7119',1025,180),(32,'인천','한림종합병원','인천광역시 계양구 장제로 722','032-540-9114',1326,190),(33,'인천','현대유비스병원','인천 미추홀구 독배로 503','032-890-5600',1325,180),(60,'전라북도','호성전주병원','전북 전주시 덕진구 동부대로 895','063-240-8800',1152,170),(47,'경기도','화성중앙종합병원','경기도 화성시 향남읍 발안로 5','031-352-8114',1599,200),(50,'충청북도','효성병원','충청북도 청주시 상당구 쇠내로 16','043-221-5000',1452,180);
/*!40000 ALTER TABLE `gov_hospital` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gov_vaccination_region`
--

DROP TABLE IF EXISTS `gov_vaccination_region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gov_vaccination_region` (
  `Region` char(15) NOT NULL,
  `Population` int DEFAULT NULL,
  `First_Shot` double DEFAULT NULL,
  `Percentage_of_First` double DEFAULT NULL,
  `Second_Shot` double DEFAULT NULL,
  `Percentage_of_Second` double DEFAULT NULL,
  `Booster_Shot` double DEFAULT NULL,
  `Percentage_of_Booster` double DEFAULT NULL,
  PRIMARY KEY (`Region`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gov_vaccination_region`
--

LOCK TABLES `gov_vaccination_region` WRITE;
/*!40000 ALTER TABLE `gov_vaccination_region` DISABLE KEYS */;
INSERT INTO `gov_vaccination_region` VALUES ('강원',615215,1025462,81.6,1199255,75,289004,18.8),('경기',13548577,10937308,80.7,10407484,78.5,2801771,20.7),('경남',3318161,2661693,8.02,2533111,76.3,630017,19),('경북',2627925,2121864,80.7,2019053,76.8,512812,19.5),('광주',1442454,1163420,80.7,1100610,76.9,268251,18.6),('대구',2390721,1863572,78,1771215,74.1,471845,19.7),('대전',1454228,1151103,79.2,1095418,75.3,258904,17.8),('부산',3356311,2678307,79.8,2554858,76.1,748091,22.3),('서울',9532428,7803662,81.9,8970547,94.1,2029587,21.3),('세종',368276,266279,72.3,252768,68.6,59402,16.1),('울산',1122566,893465,79.6,851238,75.8,205129,18.3),('인천',2945009,2380188,80.8,2265324,76.9,530075,18),('전국',51661290,41823166,81,41345393,80,10314426,20),('전남',1834653,1546069,84.3,1473732,80.3,340091,18.5),('전북',1789770,1484370,82.9,1412303,78.9,341261,19.1),('제주',676569,537483,79.1,508944,75.2,138237,20.4),('충남',2118977,1751799,82.7,1667398,78.7,409851,19.3),('충북',1596948,1327406,83.1,1262140,79,280098,17.5);
/*!40000 ALTER TABLE `gov_vaccination_region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gov_vaccination_region_detail`
--

DROP TABLE IF EXISTS `gov_vaccination_region_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gov_vaccination_region_detail` (
  `Region` char(15) NOT NULL,
  `Pfizer_First` double NOT NULL,
  `Percentage_P_first` double NOT NULL,
  `Pfizer_Second` double NOT NULL,
  `Percentage_P_second` double NOT NULL,
  `Moderna_First` double NOT NULL,
  `Percentage_M_first` double NOT NULL,
  `Moderna_Second` double NOT NULL,
  `Percentage_M_second` double NOT NULL,
  PRIMARY KEY (`Region`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gov_vaccination_region_detail`
--

LOCK TABLES `gov_vaccination_region_detail` WRITE;
/*!40000 ALTER TABLE `gov_vaccination_region_detail` DISABLE KEYS */;
INSERT INTO `gov_vaccination_region_detail` VALUES ('강원',666500,37.5,611620,46,193297,12.4,170294,12.4),('경기',5938958,43.6,5395250,40.5,1749969,16.3,1571230,11.6),('경남',1413359,34.5,1281887,38.6,417886,11.5,354636,10.5),('경북',1122466,37.5,1020660,38.8,331011,14.2,274591,11.4),('광주',641044,42.2,553418,33.8,178003,13.5,162890,11.5),('대구',1010056,43.5,913430,37.6,285127,11.9,256826,10.7),('대전',607782,41.8,556472,39.5,172665,16.2,157740,9.8),('부산',1416824,42.2,1300423,35.6,399068,11.9,350016,10),('서울',4295885,45.1,4646743,45.2,1368617,14.4,1417723,14.9),('세종',144057,39.6,130428,48.2,41806,13.2,37915,10.5),('울산',480684,38.6,436685,41.6,125979,15.4,109958,9.7),('인천',1280541,43.2,1173438,40.2,345127,11.5,321676,10.6),('전국',22587301,43.7,21251034,43.2,6631146,12.8,6092273,11.8),('전남',819417,40.2,754551,37.5,227272,10.5,204849,12.5),('전북',806013,36.5,721687,41.1,238984,12.7,209021,13.5),('제주',289703,42.6,261088,38.6,83310,10.6,72270,12.4),('충남',937212,39.4,847038,41.5,264622,11.2,235103,7.5),('충북',716799,35.6,646216,43.5,208403,15.2,185535,9.6);
/*!40000 ALTER TABLE `gov_vaccination_region_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gov_vaccination_status_ratio`
--

DROP TABLE IF EXISTS `gov_vaccination_status_ratio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gov_vaccination_status_ratio` (
  `Pharmacist` char(15) NOT NULL,
  `First_Shot` double DEFAULT NULL,
  `Percentage_of_First` double DEFAULT NULL,
  `Second_Shot` double DEFAULT NULL,
  `Percentage_of_Second` double DEFAULT NULL,
  `Booster_Shot` double DEFAULT NULL,
  `Percentage_of_Booster` double DEFAULT NULL,
  PRIMARY KEY (`Pharmacist`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gov_vaccination_status_ratio`
--

LOCK TABLES `gov_vaccination_status_ratio` WRITE;
/*!40000 ALTER TABLE `gov_vaccination_status_ratio` DISABLE KEYS */;
INSERT INTO `gov_vaccination_status_ratio` VALUES ('모더나',6631147,15.9,6092275,14.8,3981028,38.6),('화이자',22587300,54,21251034,51.4,5891092,57.1);
/*!40000 ALTER TABLE `gov_vaccination_status_ratio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gov_vaccination_status_y_n`
--

DROP TABLE IF EXISTS `gov_vaccination_status_y_n`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gov_vaccination_status_y_n` (
  `people_name` varchar(30) DEFAULT NULL,
  `ssn` char(30) NOT NULL,
  `Sex` char(5) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Vaccine_Name` char(30) DEFAULT NULL,
  `First_shot` char(5) DEFAULT NULL,
  `Second_shot` char(5) DEFAULT NULL,
  `2weeks_after` char(5) DEFAULT NULL,
  `Booster_Shot` char(5) DEFAULT NULL,
  PRIMARY KEY (`ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gov_vaccination_status_y_n`
--

LOCK TABLES `gov_vaccination_status_y_n` WRITE;
/*!40000 ALTER TABLE `gov_vaccination_status_y_n` DISABLE KEYS */;
INSERT INTO `gov_vaccination_status_y_n` VALUES ('권윤식','030429-2757597','M','대구광역시 북구','화이자','Y','N',NULL,'N'),('강재은','060204-2151351','M','대구광역시 달서구',NULL,'N','N',NULL,'N'),('김규선','070521-1030681','F','대구광역시 남구','모더나','Y','Y','N','N'),('강소원','081213-2355697','F','경상북도 경산시','화이자','Y','Y','Y','N'),('김선욱','091014-2974291','M','대구광역시 서구',NULL,'N','N',NULL,'N'),('김광수','110716-1249458','M','대구광역시 수성구',NULL,'N','N',NULL,'N'),('강선화','700524-1022018','F','대구광역시 남구','화이자','Y','N',NULL,'N'),('고연재','710408-2096041','F','대구광역시 달서구','화이자','Y','Y','N','N'),('김이숙','750630-2847917','M','대구시 동구','화이자','Y','Y','Y','N'),('김민수','760714-1202494','M','대구시 수성구',NULL,'N','N',NULL,'N'),('고기준','781222-1638763','M','대구광역시 북구','화이자','Y','Y','Y','N'),('구빈나','790426-2281898','F','대구시 중구','화이자','Y','Y','N','N'),('권지호','801115-1069151','M','대구시 수성구','화이자','Y','Y','Y','N'),('고예준','830218-2398757','M','대구광역시 중구','모더나','Y','Y','Y','Y'),('강정숙','830505-2307560','M','대구시 동구','화이자','Y','Y','Y','Y'),('구희승','831230-1236030','M','경상북도 경산시','화이자','Y','Y','N','N'),('구본길','840326-2901657','F','대구시 북구','모더나','Y','Y','Y','Y'),('김서아','840424-1150971','M','대구시 중구',NULL,'N','N',NULL,'N'),('김지호','840731-2105101','F','대구시 중구',NULL,'N','N',NULL,'N'),('권도원','840920-2579955','M','대구광역시 달성군','모더나','Y','N',NULL,'N'),('권영지','850923-1646134','F','대구광역시 북구','화이자','Y','N',NULL,'N'),('류지은','860120-1721797','M','경상북도 포항시','모더나','Y','N',NULL,'N'),('김성아','860719-2566845','M','대구시 북구',NULL,'N','N',NULL,'N'),('고영자','870928-1840761','F','대구광역시 중구',NULL,'N','N',NULL,'N'),('강태준','880331-1786887','M','경상북도 경산시','화이자','Y','Y','Y','N'),('김정화','880823-2305367','M','경상북도 문경시',NULL,'N','N',NULL,'N'),('강세원','890216-1841491','F','대구광역시 서구',NULL,'N','N',NULL,'N'),('김광수','891104-1809090','F','경상북도 봉화군',NULL,'N','N',NULL,'N'),('권지우','950609-1904207','M','경상북도 경산시','모더나','Y','Y','Y','Y');
/*!40000 ALTER TABLE `gov_vaccination_status_y_n` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goverment_vaccine_quantity`
--

DROP TABLE IF EXISTS `goverment_vaccine_quantity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `goverment_vaccine_quantity` (
  `Pharmacist` char(10) NOT NULL,
  `Vaccine_Name` char(20) NOT NULL,
  `Now_having` int DEFAULT NULL,
  `today_using` int DEFAULT NULL,
  `today_production` int DEFAULT NULL,
  `Estimated_need` int DEFAULT NULL,
  PRIMARY KEY (`Vaccine_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goverment_vaccine_quantity`
--

LOCK TABLES `goverment_vaccine_quantity` WRITE;
/*!40000 ALTER TABLE `goverment_vaccine_quantity` DISABLE KEYS */;
INSERT INTO `goverment_vaccine_quantity` VALUES ('화이자','Comirnaty_Injection',8100000,1526210,1000000,1300000),('모더나','mRNA COVID-19',6378000,200000,1000000,1800000);
/*!40000 ALTER TABLE `goverment_vaccine_quantity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kp_corona_patient_information`
--

DROP TABLE IF EXISTS `kp_corona_patient_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kp_corona_patient_information` (
  `Pat_num` char(10) NOT NULL,
  `Pat_name` varchar(30) NOT NULL,
  `Register_date` date NOT NULL,
  `Discharg_date` date DEFAULT NULL,
  `Pat_ssn` char(15) NOT NULL,
  `Date_of_death` date DEFAULT NULL,
  `Pat_phone` varchar(15) NOT NULL,
  `Pat_address` varchar(40) NOT NULL,
  `side_effect` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Pat_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kp_corona_patient_information`
--

LOCK TABLES `kp_corona_patient_information` WRITE;
/*!40000 ALTER TABLE `kp_corona_patient_information` DISABLE KEYS */;
INSERT INTO `kp_corona_patient_information` VALUES ('KN_1','이보훈','2020-08-19','2021-07-08','890323-2484721','2021-07-08','010-3326-6015','경상북도','고열,두통'),('KN_2','김정화','2021-01-08',NULL,'880823-2305367',NULL,'010-1601-0203','경상북도 문경시','고열,근육통'),('KN_3','김서은','2020-11-25','2021-03-25','840424-1150971','2021-03-25','010-1241-5677','대구광역시','고열, 메스꺼움'),('KN_4','박하은','2021-07-08','2021-10-15','991026-2072046',NULL,'010-2358-0847','경상북도 포항시','무증상'),('KN_5','한지안','2021-09-15','2021-11-22','891117-2297033',NULL,'010-7328-3116','대구시 북구','고열,두통'),('KN_6','김광수','2021-04-05','2021-08-15','891104-1809090',NULL,'010-1411-2602','경상북도 봉화군','고열,두통'),('KN_7','박경수','2021-06-16',NULL,'790331-2977759',NULL,'010-0186-6276','대구시','고열,근육통'),('KN_8','김민철','2021-06-13','2021-10-21','760714-1202494','2021-10-21','010-3883-5881','대구광역시','메스꺼움');
/*!40000 ALTER TABLE `kp_corona_patient_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kp_corona_test_people`
--

DROP TABLE IF EXISTS `kp_corona_test_people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kp_corona_test_people` (
  `Cotest_name` varchar(30) NOT NULL,
  `Cotest_sex` char(5) NOT NULL,
  `Test_date` date NOT NULL,
  `Confirmation_Y_N` char(5) NOT NULL,
  `Cotest_ssn` char(15) NOT NULL,
  `Cotest_phone` varchar(15) NOT NULL,
  `Cotest_address` varchar(255) NOT NULL,
  PRIMARY KEY (`Cotest_ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kp_corona_test_people`
--

LOCK TABLES `kp_corona_test_people` WRITE;
/*!40000 ALTER TABLE `kp_corona_test_people` DISABLE KEYS */;
INSERT INTO `kp_corona_test_people` VALUES ('배승호','M','2021-01-08','N','000923-1184173','010-7632-3758','경상북도'),('최하윤','M','2021-01-25','N','790317-1023411','010-8720-2557','대구시'),('구빈나','F','2020-05-09','N','790426-2281898','010-1861-7656','대구시 수성구'),('강정숙','M','2021-01-01','N','830505-2307560','010-8222-8013','대구시 동구'),('최영수','M','2020-06-29','N','840414-2151091','010-5556-3662','대구시 수성구'),('김서아','M','2021-01-01','Y','840424-1150971','010-1241-5677','대구시 중구'),('박우빈','F','2020-07-15','N','870910-2841230','010-8724-4760','경상북도 상주시'),('김정화','M','2021-08-11','Y','880823-2305367','010-1601-0203','경상북도'),('이보훈','F','2020-08-27','Y','890323-2484721','010-3326-6015','경상북도 경산시'),('김광수','F','2020-11-18','Y','891104-1809090','010-1411-2602','경상북도 봉화군'),('한지안','F','2021-01-07','Y','891117-2297033','010-7328-3116','대구시 북구'),('최희승','M','2021-02-23','N','901202-2348859','010-5153-1508','대구시 동구'),('권지우','M','2021-04-15','N','950609-1904207','010-4417-0823','경상북도 경산시'),('김륜형','M','2021-01-02','N','980811-1748156','010-5163-2028','대구광역시'),('박하은','F','2021-07-07','Y','991026-2072046','010-2358-0847','경상북도 포항시');
/*!40000 ALTER TABLE `kp_corona_test_people` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kp_reservation_system`
--

DROP TABLE IF EXISTS `kp_reservation_system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kp_reservation_system` (
  `Myself_or_Agent` char(10) NOT NULL,
  `Client_name` varchar(30) NOT NULL,
  `Reservation_date` date NOT NULL,
  `Client_ssn` char(15) NOT NULL,
  `Client_age` varchar(4) NOT NULL,
  `Vaccine_type` char(10) NOT NULL,
  `Client_phone` varchar(15) NOT NULL,
  PRIMARY KEY (`Client_ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kp_reservation_system`
--

LOCK TABLES `kp_reservation_system` WRITE;
/*!40000 ALTER TABLE `kp_reservation_system` DISABLE KEYS */;
INSERT INTO `kp_reservation_system` VALUES ('대리','장선희','2021-01-06','051105-2363201','19','모더나','010-1582-7180'),('본인','전보영','2020-07-15','110605-1400577','12','화이자','010-7574-7545'),('대리','전범준','2020-08-27','720608-2404422','50','화이자','010-3804-4332'),('본인','장원영','2020-01-04','751005-1427833','47','화이자','010-4481-3830'),('대리','전승환','2021-01-07','800329-2550218','43','화이자','010-8716-3541'),('대리','장도준','2021-02-23','861120-2855424','36','화이자','010-3653-7021'),('대리','전선욱','2021-01-04','960909-2690356','26','화이자','010-6433-3032'),('본인','김륜형','2020-04-10','980121-1133425','24','모더나','010-8014-1144');
/*!40000 ALTER TABLE `kp_reservation_system` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mod_company_quantity`
--

DROP TABLE IF EXISTS `mod_company_quantity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mod_company_quantity` (
  `Vaccine_name` char(20) NOT NULL,
  `having_amount` int DEFAULT NULL,
  `receive_amount` int DEFAULT NULL,
  `ordered_amount` int DEFAULT NULL,
  `production_plan` int DEFAULT NULL,
  PRIMARY KEY (`Vaccine_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mod_company_quantity`
--

LOCK TABLES `mod_company_quantity` WRITE;
/*!40000 ALTER TABLE `mod_company_quantity` DISABLE KEYS */;
INSERT INTO `mod_company_quantity` VALUES ('mRNA_COVID-19',210751,23700,17610,5371000),('임시백신',1233300,3115000,158000,11222300);
/*!40000 ALTER TABLE `mod_company_quantity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mod_factory_information`
--

DROP TABLE IF EXISTS `mod_factory_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mod_factory_information` (
  `production_manager` varchar(30) NOT NULL,
  `production_plant_name` varchar(30) NOT NULL,
  `plant_address` varchar(40) NOT NULL,
  `plant_num` varchar(30) NOT NULL,
  `today_sold` int DEFAULT NULL,
  `today_make` int DEFAULT NULL,
  `Future_production` int DEFAULT NULL,
  PRIMARY KEY (`production_manager`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mod_factory_information`
--

LOCK TABLES `mod_factory_information` WRITE;
/*!40000 ALTER TABLE `mod_factory_information` DISABLE KEYS */;
INSERT INTO `mod_factory_information` VALUES ('권채은','samsungbiologics','인천광역시','032-455-3115',2300,2355,720000),('김시은','hanmi','서울특별시 송파구','02-410-9114',2400,2485,690000),('김정우','Woojin B&G','서울특별시 강남구','02-823-7130',3400,3486,470000),('김지원','Recifam','서울특별시 영동구','02-568-6823',2700,2798,340000),('박예린','daewoong','경기도 수원시','031-217-2114',1500,1568,780000),('박유찬','celltrion','인천광역시 연수구','080-850-3611',700,731,340000),('박하린','SK Bio','대구광역시 동구','053-960-0078',700,764,290000),('손지안','Saint PNA','전라남도 화순군','061-379-3168',600,675,650000),('우승민','Ilyang','서울특별시 강남구','02-570-3700',3600,3684,570000),('이지환','COVAX','뉴질랜드','001-64-800-282',5800,5872,530000);
/*!40000 ALTER TABLE `mod_factory_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mod_vaccine_information`
--

DROP TABLE IF EXISTS `mod_vaccine_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mod_vaccine_information` (
  `lot_number` varchar(15) NOT NULL,
  `production_date` date NOT NULL,
  `expiration_date` date NOT NULL,
  `production_manager_name` varchar(20) NOT NULL,
  `number_of_vaccine` int DEFAULT NULL,
  PRIMARY KEY (`lot_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mod_vaccine_information`
--

LOCK TABLES `mod_vaccine_information` WRITE;
/*!40000 ALTER TABLE `mod_vaccine_information` DISABLE KEYS */;
INSERT INTO `mod_vaccine_information` VALUES ('45U65671','2021-08-18','2023-07-21','박예순',1569),('462F3079E','2021-03-07','2023-06-23','권채은',2300),('65R6Y130','2020-07-08','2022-06-22','우승민',3684),('70D640E0','2021-06-22','2023-04-01','김정우',6486),('70E70F63','2021-08-27','2023-07-17','박유찬',731),('7650E06F','2021-11-30','2023-12-09','이지환',5872),('7T1446U6','2020-01-04','2022-11-10','손지안',675),('980R06E0','2021-07-11','2023-04-15','김시은',2485),('H676R32','2020-12-10','2022-04-30','박하린',764),('I5674K52','2020-09-15','2022-06-27','김지원',2798);
/*!40000 ALTER TABLE `mod_vaccine_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pfi_company_quantity`
--

DROP TABLE IF EXISTS `pfi_company_quantity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pfi_company_quantity` (
  `Vaccine_name` char(20) NOT NULL,
  `having_amount` int DEFAULT NULL,
  `receive_amount` int DEFAULT NULL,
  `ordered_amount` int DEFAULT NULL,
  `production_plan` int DEFAULT NULL,
  PRIMARY KEY (`Vaccine_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pfi_company_quantity`
--

LOCK TABLES `pfi_company_quantity` WRITE;
/*!40000 ALTER TABLE `pfi_company_quantity` DISABLE KEYS */;
INSERT INTO `pfi_company_quantity` VALUES ('Comirnaty_Injection',173040,23420,54500,6970000);
/*!40000 ALTER TABLE `pfi_company_quantity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pfi_factory_information`
--

DROP TABLE IF EXISTS `pfi_factory_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pfi_factory_information` (
  `production_manager` varchar(30) NOT NULL,
  `production_plant_name` varchar(30) NOT NULL,
  `plant_address` varchar(40) NOT NULL,
  `plant_num` varchar(30) NOT NULL,
  `today_sold` int DEFAULT NULL,
  `today_make` int DEFAULT NULL,
  `Future_production` int DEFAULT NULL,
  PRIMARY KEY (`production_manager`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pfi_factory_information`
--

LOCK TABLES `pfi_factory_information` WRITE;
/*!40000 ALTER TABLE `pfi_factory_information` DISABLE KEYS */;
INSERT INTO `pfi_factory_information` VALUES ('강도윤','Novartis','스위스','02-768-9000',600,800,980000),('김륜형','ryunjiralma','서울','02-112-6975',1200,990,130000),('김서연','BioNTech','경기도 군포시','02-317-2114',4000,4046,650000),('김연우','Therapeutics','경기도 수원시','031-217-2115',400,410,990000),('김현준','Delpharm','프랑스 파리','001-33-5165-4851',900,944,930000),('박소율','Catalan','경기도 수원시','031-526-8463',1700,1750,750000),('서지훈','Hameln','독일 하멜른','001-49-2652-7645',3200,3206,670000),('이시은','Therapeutics','부산광역시 해운대구','051-941-5665',3800,3852,640000),('차민준','Allergopharma GmbH & Co.','서울특별시 영등포구','02-780-3928',1500,1548,680000),('최하윤','Sanofi-Aventis','서울특별시 서초구','02-2136-9000',2000,2057,340000),('하승우','biologics','서울특별시 강남구','02-8647-8610',5100,5107,350000);
/*!40000 ALTER TABLE `pfi_factory_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pfi_vaccine_information`
--

DROP TABLE IF EXISTS `pfi_vaccine_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pfi_vaccine_information` (
  `lot_number` varchar(15) NOT NULL,
  `production_date` date NOT NULL,
  `expiration_date` date NOT NULL,
  `production_manager_name` varchar(20) NOT NULL,
  `number_of_vaccine` int DEFAULT NULL,
  PRIMARY KEY (`lot_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pfi_vaccine_information`
--

LOCK TABLES `pfi_vaccine_information` WRITE;
/*!40000 ALTER TABLE `pfi_vaccine_information` DISABLE KEYS */;
INSERT INTO `pfi_vaccine_information` VALUES ('0065Q16F','2021-03-25','2023-05-10','하승구',5108),('1G6316E','2020-09-23','2022-11-21','강도윤',813),('2004D06','2019-09-30','2021-12-20','김연우',410),('555E1561','2020-01-25','2022-04-10','김현준',944),('5E14668F','2021-07-21','2023-05-25','차민준',1548),('6D51E62','2021-11-11','2023-09-30','김서연',4046),('761K130','2020-07-17','2022-09-24','박소율',1750),('C65961A3','2021-11-05','2023-12-27','이시은',3852),('C8E1342','2021-04-10','2023-07-10','최하윤',2057),('CD43162','2021-07-11','2023-12-22','서지훈',3206);
/*!40000 ALTER TABLE `pfi_vaccine_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `ID` varchar(45) NOT NULL,
  `PW` varchar(45) NOT NULL,
  `AREA` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('BSH','1234','ALL'),('KJY','1234','YU'),('KRH','1234','Pfizer'),('LSJ','1234','Moderna'),('SSJ','1234','DG'),('YIH','1234','KB');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yn_corona_patient_information`
--

DROP TABLE IF EXISTS `yn_corona_patient_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `yn_corona_patient_information` (
  `Pat_num` char(10) NOT NULL,
  `Pat_name` varchar(30) NOT NULL,
  `Register_date` date NOT NULL,
  `Discharg_date` date DEFAULT NULL,
  `Pat_ssn` char(15) NOT NULL,
  `Date_of_death` date DEFAULT NULL,
  `Pat_phone` varchar(15) NOT NULL,
  `Pat_address` varchar(40) NOT NULL,
  `side_effect` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Pat_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yn_corona_patient_information`
--

LOCK TABLES `yn_corona_patient_information` WRITE;
/*!40000 ALTER TABLE `yn_corona_patient_information` DISABLE KEYS */;
INSERT INTO `yn_corona_patient_information` VALUES ('YU_1','김지호','2021-03-19','2021-07-01','840731-2105101',NULL,'010-6552-8522','대구시','고열,두통'),('YU_2','박예준','2021-04-06','2021-08-15','000713-1036367','2021-08-15','010-7775-4265','경상북도 경주시','고열, 두통'),('YU_3','류지은','2021-04-12','2021-09-15','860120-1721797',NULL,'010-1034-4005','경상북도 포항시','고열, 피로감'),('YU_4','김성아','2021-01-03','2021-11-30','860719-2566845',NULL,'010-4540-0114','대구시 북구','고열, 통증'),('YU_5','배지은','2021-05-15','2021-06-11','940206-2331329','2021-06-11','010-5046-8920','경상북도','무증상');
/*!40000 ALTER TABLE `yn_corona_patient_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yn_corona_test_people`
--

DROP TABLE IF EXISTS `yn_corona_test_people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `yn_corona_test_people` (
  `Cotest_name` varchar(30) NOT NULL,
  `Cotest_sex` char(5) NOT NULL,
  `Test_date` date NOT NULL,
  `Confirmation_Y_N` varchar(5) NOT NULL,
  `Cotest_ssn` char(15) NOT NULL,
  `Cotest_phone` varchar(15) NOT NULL,
  `Cotest_address` varchar(40) NOT NULL,
  PRIMARY KEY (`Cotest_ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yn_corona_test_people`
--

LOCK TABLES `yn_corona_test_people` WRITE;
/*!40000 ALTER TABLE `yn_corona_test_people` DISABLE KEYS */;
INSERT INTO `yn_corona_test_people` VALUES ('박예준','M','2021-04-09','Y','000713-1036367','010-7775-4265','경상북도'),('김이숙','M','2021-01-23','N','750630-2847917','010-5441-8055','대구시 동구'),('박수아','F','2021-05-07','N','771215-1014719','010-6841-5523','경상북도 구미시'),('박희숙','F','2021-05-01','N','800707-2863245','010-6205-0512','경상북도 안동시'),('윤시아','F','2021-04-12','N','800904-2211569','010-6405-0576','대구시 남구'),('권지호','M','2021-04-12','N','801115-1069151','010-0124-0754','대구시 수성구'),('성하린','F','2021-03-27','N','820531-2137968','010-5484-4548','경상북도 칠곡군'),('구희승','M','2021-03-27','N','831230-1236030','010-6157-6123','경상북도 경산시'),('김지호','F','2021-06-11','Y','840731-2105101','010-6552-8522','대구시 중구'),('류지은','M','2021-07-01','Y','860120-1721797','010-1034-4005','경상북도 포항시'),('김성아','M','2021-01-03','Y','860719-2566845','010-4540-0114','대구시 북구'),('박도윤','M','2021-07-13','N','880524-2924510','010-5108-4568','대구시 서구'),('손예진','F','2021-08-07','N','900125-2586021','010-5610-0425','경상북도 경산시'),('배지은','F','2021-06-11','Y','940206-2331329','010-5046-8920','경상북도 문경시'),('배지우','F','2021-01-27','N','951206-1055015','010-4065-5100','경상북도 청도군'),('김륜형','M','2021-03-28','N','980328-1799999','010-8014-2323','경상북도 구미');
/*!40000 ALTER TABLE `yn_corona_test_people` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yn_reservation_system`
--

DROP TABLE IF EXISTS `yn_reservation_system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `yn_reservation_system` (
  `Myself_or_Agent` char(10) NOT NULL,
  `Client_name` varchar(30) NOT NULL,
  `Reservation_date` date NOT NULL,
  `Client_ssn` char(15) NOT NULL,
  `Client_age` varchar(4) NOT NULL,
  `Vaccine_type` char(10) NOT NULL,
  `Client_phone` varchar(15) NOT NULL,
  PRIMARY KEY (`Client_ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yn_reservation_system`
--

LOCK TABLES `yn_reservation_system` WRITE;
/*!40000 ALTER TABLE `yn_reservation_system` DISABLE KEYS */;
INSERT INTO `yn_reservation_system` VALUES ('본인','홍주리','2021-05-17','761115-2220678','46','화이자','010-5447-4587'),('본인','김제현','2021-01-06','770308-1795522','45','모더나','010-6550-0047'),('본인','김지안','2021-06-11','790127-1404367','43','화이자','010-9811-0122'),('본인','서시우','2021-07-01','820113-1201512','40','화이자','010-6994-5222'),('본인','김륜형','2021-11-18','825125-1555223','43','모더나','010-4485-2285'),('본인','박재익','2021-01-11','830822-1922835','39','화이자','010-5177-1952'),('본인','김홍석','2021-07-13','840808-1176498','38','모더나','010-5498-5756'),('대리','전서윤','2021-07-02','840823-1218204','38','화이자','010-0044-7604'),('본인','송서윤','2021-01-29','850119-1520371','37','화이자','010-4354-5786'),('본인','이재희','2021-01-20','870522-2759507','35','모더나','010-5598-6511'),('대리','김아름','2020-04-28','910621-2572183','31','모더나','010-5777-9733'),('본인','윤정아','2021-08-07','930328-2106272','29','화이자','010-7136-6816'),('본인','이하림','2021-06-01','940727-1547732','28','화이자','010-9987-7485'),('본인','배승호','2021-11-30','980328-1412342','24','모더나','010-8014-2323'),('대리','이상화','2020-12-28','990318-2338797','23','모더나','010-5569-8547');
/*!40000 ALTER TABLE `yn_reservation_system` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-01 23:02:24
