-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2023 at 10:38 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wsf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_intro_initiative`
--

DROP TABLE IF EXISTS `about_intro_initiative`;
CREATE TABLE IF NOT EXISTS `about_intro_initiative` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img1` varchar(255) NOT NULL,
  `heading1` text NOT NULL,
  `para11` text NOT NULL,
  `para12` text NOT NULL,
  `img2` varchar(255) NOT NULL,
  `heading2` text NOT NULL,
  `para21` text NOT NULL,
  `para22` text NOT NULL,
  `img3` varchar(255) NOT NULL,
  `heading3` text NOT NULL,
  `para31` text NOT NULL,
  `para32` text NOT NULL,
  `img4` varchar(255) NOT NULL,
  `heading4` text NOT NULL,
  `para41` text NOT NULL,
  `para42` text NOT NULL,
  `img5` varchar(255) NOT NULL,
  `heading5` text NOT NULL,
  `para51` text NOT NULL,
  `para52` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_intro_initiative`
--

INSERT INTO `about_intro_initiative` (`id`, `img1`, `heading1`, `para11`, `para12`, `img2`, `heading2`, `para21`, `para22`, `img3`, `heading3`, `para31`, `para32`, `img4`, `heading4`, `para41`, `para42`, `img5`, `heading5`, `para51`, `para52`) VALUES
(1, 'uploads/img/skill.jpg', 'Poverty Alleviation and Financial Inclusion (Key Initiatives):', 'Implement programs and initiatives that address the root causes of\r\n                                poverty and promote economic empowerment.', 'Provide skill training, entrepreneurship support, and access to\r\n                                microfinance for individuals and communities in need.', 'uploads/img/opportunities.jpeg', 'Community Development and Social Impact (Key Initiatives):', 'Collaborate with local communities to identify their needs and\r\n                                implement projects that enhance their well-being', 'Engage in community-driven initiatives focused on education,\r\n                                healthcare, infrastructure, and social welfare.', 'uploads/img/bookreview.jpg', 'Knowledge Sharing and Capacity Building (Key Initiatives)', 'Organize workshops, seminars,\r\n                                and conferences to disseminate knowledge and share best practices.', 'Facilitate capacity building programs to enhance skills,\r\n                                leadership, and entrepreneurial abilities.', 'uploads/img/empowermentactivities.jpg', 'Women Empowerment and Gender Equality (Key Initiatives)', 'Create opportunities and resources that empower women to achieve\r\n                                economic independence and leadership roles.', 'Foster gender equality by promoting equal access to education,\r\n                                training, and economic opportunities.', 'uploads/img/green.jpg', 'Green Technology and Mentorship (Key Initiatives)', 'Create opportunities and resources that empower women to\r\n                                achieve economic independence and leadership roles.', 'Foster gender equality by promoting equal access to education,\r\n                                training, and economic opportunities.');

-- --------------------------------------------------------

--
-- Table structure for table `about_intro_mission`
--

DROP TABLE IF EXISTS `about_intro_mission`;
CREATE TABLE IF NOT EXISTS `about_intro_mission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `heading1` text NOT NULL,
  `para1` text NOT NULL,
  `heading2` text NOT NULL,
  `para2` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_intro_mission`
--

INSERT INTO `about_intro_mission` (`id`, `img`, `heading1`, `para1`, `heading2`, `para2`) VALUES
(1, 'uploads/img/corevalue.jpg', 'MISSION', 'Wealth Space Foundation is driven by a mission to empower individuals and\r\n                        communities,\r\n                        promoting wealth creation, sustainable development, and social inclusion\r\n                        across Africa. We strive to provide access to opportunities, resources,\r\n                        and mentorship,\r\n                        enabling individuals to unlock their full potential and achieve economic\r\n                        prosperity.', 'Vision', 'Our vision is to create a wealthy and healthy community where every individual\r\n                        has equal opportunities to thrive, contribute, and succeed. We envision a future\r\n                        where poverty is significantly reduced,\r\n                        entrepreneurship is nurtured, and sustainable development practices are embraced.');

-- --------------------------------------------------------

--
-- Table structure for table `about_intro_table`
--

DROP TABLE IF EXISTS `about_intro_table`;
CREATE TABLE IF NOT EXISTS `about_intro_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `para1` text NOT NULL,
  `para2` text NOT NULL,
  `para3` text NOT NULL,
  `para4` text NOT NULL,
  `para5` text NOT NULL,
  `para6` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_intro_table`
--

INSERT INTO `about_intro_table` (`id`, `para1`, `para2`, `para3`, `para4`, `para5`, `para6`) VALUES
(1, 'Wealth Space Foundation is a non-profit organization founded\r\n                        in 2022 by Festus Babatunde Adefemi, a compassionate\r\n                        individual born in an ancient town in Ondo State, Nigeria.\r\n                        Festus has a deep passion for helping people and a strong\r\n                        desire to be a part of their success. He recognized the\r\n                        immense potential and talent that exists within the African\r\n                        population, but also observed that many individuals face\r\n                        significant financial constraints hindering their progress.', 'Motivated by the belief that every individual should have access to the\r\n                        resources needed to fulfill their potential, Festus embarked on a mission to\r\n                        bridge the gap between talent and opportunity. He understood that numerous\r\n                        Africans possess exceptional ideas and untapped potential, but due to limited\r\n                        financial means, their dreams often go unfulfilled. Additionally, there are\r\n                        individuals who possess the drive and energy to make a difference but lack\r\n                        the necessary guidance and support to transform their ideas into impactful\r\n                        initiative', 'Driven by his unwavering passion and the desire to create a platform for\r\n                        growth and empowerment, Festus established Wealth Space Foundation. In\r\n                        2022, he personally sponsored the skill training of 19 individuals, enabling\r\n                        them to pursue their chosen fields and expand their horizons. This act of\r\n                        generosity laid the foundation for the organization\'s commitment to unlocking\r\n                        the potential within individuals and communities.', 'To ensure the sustainable and effective operation of the foundation, Festus\r\n                        brought together like-minded individuals who shared his vision. The founding\r\n                        trustees of Wealth Space Foundation were carefully selected based on their\r\n                        alignment with the organization\'s goals and their dedication to driving positive\r\n                        change. Together, they have formed a strong team that is actively working\r\n                        towards the foundation\'s mission.', 'Since its inception, Wealth Space Foundation has embarked on a\r\n                        transformative journey to uplift individuals, promote sustainable\r\n                        development, and alleviate poverty across the country. Through skill\r\n                        sponsorship programs, mentorship, and a range of initiatives, the foundation\r\n                        aims to provide opportunities and resources that enable individuals to thrive\r\n                        and succeed', 'Wealth Space Foundation remains committed to empowering talented\r\n                        individuals, supporting their entrepreneurial endeavors, and fostering\r\n                        a culture of collaboration and innovation. By leveraging the collective\r\n                        efforts of passionate individuals, the foundation strives to create a\r\n                        future where everyone can unleash their full potential and contribute\r\n                        to the prosperity of their communities.');

-- --------------------------------------------------------

--
-- Table structure for table `about_intro_value`
--

DROP TABLE IF EXISTS `about_intro_value`;
CREATE TABLE IF NOT EXISTS `about_intro_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `heading1` text NOT NULL,
  `para1` text NOT NULL,
  `heading2` text NOT NULL,
  `para2` text NOT NULL,
  `heading3` text NOT NULL,
  `para3` text NOT NULL,
  `heading4` text NOT NULL,
  `para4` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_intro_value`
--

INSERT INTO `about_intro_value` (`id`, `img`, `heading1`, `para1`, `heading2`, `para2`, `heading3`, `para3`, `heading4`, `para4`) VALUES
(1, 'uploads/img/corevalue.jpg', 'Empowerment', 'We believe in empowering individuals through\r\n                        education, skills development, and access to resources, enabling them\r\n                        to become agents of change and self-sufficiency.', 'collaboration', 'We foster a culture of collaboration, promoting\r\n                        partnerships, and alliances with like-minded organizations,\r\n                        communities, and stakeholders. We believe that collective efforts lead\r\n                        to greater impact and sustainable development.', 'Integrity', 'We uphold the highest standards of integrity, transparency,\r\n                        and accountability in all our activities and interactions. We value\r\n                        honesty, ethical conduct, and responsible stewardship of the resources\r\n                        entrusted to us.', 'Inclusivity', 'We embrace diversity and promote inclusivity in all aspects\r\n                        of our work. We strive to create an environment that respects and\r\n                        values individuals regardless of their gender, age, ethnicity, or\r\n                        background.');

-- --------------------------------------------------------

--
-- Table structure for table `about_table`
--

DROP TABLE IF EXISTS `about_table`;
CREATE TABLE IF NOT EXISTS `about_table` (
  `heading2` text NOT NULL,
  `heading3` text NOT NULL,
  `content` text NOT NULL,
  `content1` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_table`
--

INSERT INTO `about_table` (`heading2`, `heading3`, `content`, `content1`, `img`) VALUES
('About Us', 'Introduction', 'Wealth Space Foundation is a non-profit organization founded\r\n                        in 2022 by Festus Babatunde Adefemi, a compassionate\r\n                        individual born in an ancient town in Ondo State, Nigeria.\r\n                        Festus has a deep passion for helping people and a strong\r\n                        desire to be a part of their success. He recognized the\r\n                        immense potential and talent that exists within the African\r\n                        population, but also observed that many individuals face\r\n                        significant financial constraints hindering their progress.', 'Wealth Space Foundation remains committed to empowering talented\r\n                        individuals, supporting their entrepreneurial endeavors, and fostering\r\n                        a culture of collaboration and innovation.', 'uploads/img/about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_table`
--

DROP TABLE IF EXISTS `home_table`;
CREATE TABLE IF NOT EXISTS `home_table` (
  `heading1` text NOT NULL,
  `heading2` text NOT NULL,
  `btn1` text NOT NULL,
  `btn2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_table`
--

INSERT INTO `home_table` (`heading1`, `heading2`, `btn1`, `btn2`) VALUES
('BUILDING A WEALTHY AND', 'HEALTHY COMMUNITY FOR ALL', 'Pls Log in', 'Wish To Join');

-- --------------------------------------------------------

--
-- Table structure for table `member_table`
--

DROP TABLE IF EXISTS `member_table`;
CREATE TABLE IF NOT EXISTS `member_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` int(255) NOT NULL,
  `department` text NOT NULL,
  `wits` int(255) NOT NULL,
  `value` varchar(2500) NOT NULL,
  `withdraw` varchar(2500) NOT NULL,
  `buy` varchar(2500) NOT NULL,
  `login_type` text NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_table`
--

INSERT INTO `member_table` (`id`, `image`, `name`, `username`, `department`, `wits`, `value`, `withdraw`, `buy`, `login_type`, `password`) VALUES
(1, 'uploads/img/team /papa.jpg', 'Festus Babafemi', 220801, 'President', 84, '#3,360.00', '#5000', '0.00', 'admin', 'password1'),
(2, 'uploads/img/team/peculiar.jpg', 'Adeleke Peculiar', 220601, 'Finacial Manager', 84, '#3,360.00', '0.00', '0.00', 'admin', 'password1'),
(3, 'uploads/img/team/mary.jpg', 'Mary Makinde', 220701, 'Executive Manager', 69, '#2,440.00', '0.00', '0.00', 'member', 'password1'),
(4, 'uploads/img/team/fola.jpg', 'Habeebat Lawal', 220403, 'planning Manager', 86, '#3,440000', '#25,000', '6789', 'member', 'password1'),
(5, 'uploads/img/team/seun.jpg', 'Adekunle Oluwaseun', 220202, 'Creativity Manager', 50, '#2,000', '0.00', '0.00', 'member', 'password1'),
(6, 'uploads/img/team/john.jpg', 'John Ayetelure', 220108, 'Operation Manager', 56, '#2,220', '0.00', '0.00', 'member', 'password1'),
(7, 'uploads/PASPORTNBG.jpg', 'Michael Olujide', 220102, 'Creativity Department', -11, '(440)', '0.00', '0.00', 'member', 'password1'),
(8, 'uploads/DSC_0024.jpg', 'Ben', 123456, 'cretivity', 67, '5678', '0.00', '0.00', 'member', 'password1');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_table`
--

DROP TABLE IF EXISTS `newsletter_table`;
CREATE TABLE IF NOT EXISTS `newsletter_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter_table`
--

INSERT INTO `newsletter_table` (`id`, `name`, `email`) VALUES
(1, 'michael', 'adegokeolujidemic@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `program_table`
--

DROP TABLE IF EXISTS `program_table`;
CREATE TABLE IF NOT EXISTS `program_table` (
  `heading1` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `paragraph11` varchar(2500) NOT NULL,
  `paragraph12` varchar(2500) NOT NULL,
  `paragraph13` varchar(2500) NOT NULL,
  `heading2` text NOT NULL,
  `image2` varchar(255) NOT NULL,
  `paragraph21` varchar(2500) NOT NULL,
  `paragraph22` varchar(2500) NOT NULL,
  `paragraph23` varchar(2500) NOT NULL,
  `heading3` text NOT NULL,
  `image3` varchar(255) NOT NULL,
  `paragraph31` varchar(2500) NOT NULL,
  `paragraph32` varchar(2500) NOT NULL,
  `paragraph33` varchar(2500) NOT NULL,
  `heading4` text NOT NULL,
  `image4` varchar(255) NOT NULL,
  `paragraph41` varchar(2500) NOT NULL,
  `paragraph42` varchar(2500) NOT NULL,
  `paragraph43` varchar(2500) NOT NULL,
  `heading5` text NOT NULL,
  `image5` varchar(255) NOT NULL,
  `paragraph51` varchar(2500) NOT NULL,
  `paragraph52` varchar(2500) NOT NULL,
  `paragraph53` varchar(2500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_table`
--

INSERT INTO `program_table` (`heading1`, `image`, `paragraph11`, `paragraph12`, `paragraph13`, `heading2`, `image2`, `paragraph21`, `paragraph22`, `paragraph23`, `heading3`, `image3`, `paragraph31`, `paragraph32`, `paragraph33`, `heading4`, `image4`, `paragraph41`, `paragraph42`, `paragraph43`, `heading5`, `image5`, `paragraph51`, `paragraph52`, `paragraph53`) VALUES
('Annual Skill Sponsorship Program:', 'uploads/img/skill.jpg', 'Description: An annual program that sponsors individuals from\r\n                                diverse\r\n                                backgrounds to acquire skills of their choice.', 'Highlights: The program aims to provide opportunities for personal\r\n                                and\r\n                                professional growth, promoting economic empowerment and self-sufficiency.', 'The 2022 Skill Sponsorship Program was a resounding\r\n                                success, empowering and uplifting participants through skill development.', 'Tuesday Misc Program:', 'uploads/img/mixir.jpg', 'Description: A regular program held fortnightly (Tuesday),\r\n                                featuring guest\r\n                                speakers and experts from various fields.', 'Highlights: The program offers valuable insights, educational sessions,\r\n                                and\r\n                                interactive discussions on diverse topics.', 'Achievements: Members gain exposure to different areas of expertise,\r\n                                expand\r\n                                their knowledge, and engage with industry professionals.', 'Weekly Book Review Meetings:', 'uploads/img/bookreview.jpg', 'Description: Engaging sessions where members gather to review books\r\n                                focused on wealth management and personal development.', 'Highlights: Participants read a selected book over a period,\r\n                                followed by indepth discussions and ref', 'Achievements: The book review sessions promote knowledge-sharing,\r\n                                critical\r\n                                thinking, and personal growth among members.', 'Women Empowerment Activities (Under Development)', 'uploads/img/empowermentactivities.jpg', 'Description: Future initiatives focused on empowering women and\r\n                                promoting\r\n                                gender equality.', 'Highlights: The foundation seeks to provide resources, mentorship, and\r\n                                opportunities to support women in achieving their aspirations.', 'Goals: Collaborate with partners and sponsors to implement women\r\n                                empowerment programs and initiatives.', 'Green Technology Mentorship (Under Development):', 'uploads/img/green.jpg', 'Description: Planned initiative to provide mentorship and support for\r\n                                individuals interested in green technology and sustainable practices.', 'Highlights: The program aims to foster innovation, knowledge-sharing,\r\n                                and\r\n                                the adoption of eco-friendly technologies.', 'Goals: Seek partners and sponsors to launch the Green Technology\r\n                                Mentorship program and create meaningful impact in this area.');

-- --------------------------------------------------------

--
-- Table structure for table `team_table`
--

DROP TABLE IF EXISTS `team_table`;
CREATE TABLE IF NOT EXISTS `team_table` (
  `sn` int(6) NOT NULL AUTO_INCREMENT,
  `image1` varchar(255) NOT NULL,
  `name1` text NOT NULL,
  `position1` text NOT NULL,
  `image2` varchar(255) NOT NULL,
  `name2` text NOT NULL,
  `position2` text NOT NULL,
  `image3` varchar(255) NOT NULL,
  `name3` text NOT NULL,
  `position3` text NOT NULL,
  `image4` varchar(255) NOT NULL,
  `name4` text NOT NULL,
  `position4` text NOT NULL,
  `image5` varchar(255) NOT NULL,
  `name5` text NOT NULL,
  `position5` text NOT NULL,
  `image6` varchar(255) NOT NULL,
  `name6` text NOT NULL,
  `position6` text NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_table`
--

INSERT INTO `team_table` (`sn`, `image1`, `name1`, `position1`, `image2`, `name2`, `position2`, `image3`, `name3`, `position3`, `image4`, `name4`, `position4`, `image5`, `name5`, `position5`, `image6`, `name6`, `position6`) VALUES
(1, 'uploads/img/team/papa.jpg', 'Festus Adefemi', 'President', 'uploads/img/team/mary.jpg', 'Mary Makinde', 'Executive Manager', 'uploads/img/team/fola.JPG', 'Habeebat Lawal', 'Planning & Evaluating Manager', 'uploads/img/team/peculiar.jpg', 'Peculiar Adeleke', 'Financial Director', 'uploads/img/team/seun.jpg', 'Adekunle Oluwaseun', 'Creativity Manager', 'uploads/img/team/john.jpg', 'John Ayetelure', 'Operation Manager');

-- --------------------------------------------------------

--
-- Table structure for table `testimony_table`
--

DROP TABLE IF EXISTS `testimony_table`;
CREATE TABLE IF NOT EXISTS `testimony_table` (
  `image1` varchar(255) NOT NULL,
  `name1` text NOT NULL,
  `position1` text NOT NULL,
  `content1` varchar(2500) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `name2` text NOT NULL,
  `position2` text NOT NULL,
  `content2` varchar(2500) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `name3` text NOT NULL,
  `position3` text NOT NULL,
  `content3` varchar(2500) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `name4` text NOT NULL,
  `position4` text NOT NULL,
  `content4` varchar(2500) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `name5` text NOT NULL,
  `postion5` text NOT NULL,
  `content5` varchar(2500) NOT NULL,
  `image6` varchar(255) NOT NULL,
  `position6` text NOT NULL,
  `name6` text NOT NULL,
  `content6` varchar(2500) NOT NULL,
  `image7` varchar(255) NOT NULL,
  `name7` text NOT NULL,
  `position7` text NOT NULL,
  `content7` varchar(2500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimony_table`
--

INSERT INTO `testimony_table` (`image1`, `name1`, `position1`, `content1`, `image2`, `name2`, `position2`, `content2`, `image3`, `name3`, `position3`, `content3`, `image4`, `name4`, `position4`, `content4`, `image5`, `name5`, `postion5`, `content5`, `image6`, `position6`, `name6`, `content6`, `image7`, `name7`, `position7`, `content7`) VALUES
('uploads/img/testimonial/peculiar.jpg', 'Adeleke Peculiar Abolanle', 'Operation Manager', 'Wealth Space Foundation is an incredible organization dedicated to fostering\r\n                                            financial freedom across Africa. Being a\r\n                                            part of this thriving community of like-minded individuals has brought me\r\n                                            immense happiness\r\n                                            and excitement.\r\n                                            n summary, WSF has contributed significantly to my personal growth and\r\n                                            financial development. I hold WSF in high regard and wish both the\r\n                                            organization and Africa a long and prosperous future.', 'uploads/img/testimonial/dare.jpeg', 'Olumide Joseph Damilare', 'Member', ' WSF has profoundly altered my perspective on life.', 'uploads/img/testimonial/fasoro.jpg', 'Fasoro Ekundayo', 'WSF Member', 'WSF has not only provided me with the valuable opportunity to learn\r\n                                            about cryptocurrency and forex trading at no cost but has also nurtured\r\n                                            my passion for reading through their engaging weekly book review sessions.\r\n                                            I am deeply thankful and wish for abundant grace upon the management.', 'uploads/img/testimonial/fola.jfif', 'Habeebat Lawal', 'Planning Manager', ' WSF has been instrumental in transforming my relationship with my finances.\r\n                                            Although I\'m not yet where I aspire to be financially, WSF\'s book reviews\r\n                                            have allowed me to take the vital first step on the path toward financial\r\n                                            knowledge and freedom.\r\n                                            I am grateful to be a member of the Wealth Space Foundation.\r\n                                        </p>', 'uploads/img/testimonial/grace.jpg', 'Grace', 'WSF Member', 'WSF has uncovered my potential in areas I never believed I could excel in.\r\n                                            I owe my newfound abilities and confidence to WSF!', 'uploads/img/testimonial/dayo.jpg', 'WSF Member', 'Adedayo Kehinde Adebola', 'WSF has been a transformative experience for me.\r\n                                            WSF has ignited a strong work ethic within me, contributing to my financial\r\n                                            growth.\r\n                                            The foundation introduced me to valuable online skills to enhance\r\n                                            my physical business. Thank you, WSF, for empowering me to achieve my goals', 'uploads/img/testimonial/eguma.png', 'Ekuma Uchechukwu', 'WSF Member', ' Thanks to Wealth Space Foundation, my life\r\n                                            has undergone remarkable transformation. I\'ve\r\n                                            acquired vital skills, newfound confidence, and\r\n                                            become part of a supportive community. This program\r\n                                            has empowered me to conquer challenges and pursue my dreams with unwavering\r\n                                            determination. Wealth Space Foundation is undeniably life-changing.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
