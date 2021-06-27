-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 09:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `litcheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `literature`
--

CREATE TABLE `literature` (
  `id` int(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `title` text,
  `category` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `link` text,
  `view` int(200) NOT NULL,
  `abstract` longtext NOT NULL,
  `date` date NOT NULL,
  `download` int(200) NOT NULL,
  `author_1` varchar(100) NOT NULL,
  `author_2` varchar(100) NOT NULL,
  `author_3` varchar(100) NOT NULL,
  `author_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `literature`
--

INSERT INTO `literature` (`id`, `owner`, `title`, `category`, `type`, `link`, `view`, `abstract`, `date`, `download`, `author_1`, `author_2`, `author_3`, `author_4`) VALUES
(1, 'lorem', 'Windows 7', 'Computer Engineering', '1', 'https://en.wikipedia.org/wiki/Windows_7', 1, 'Windows 7 is a major release of the Windows NT operating system developed by Microsoft. It was released to manufacturing on July 22, 2009, and became generally available on October 22, 2009. It is the successor to Windows Vista, released nearly three years earlier. ', '2021-06-27', 0, 'Ace', 'Bravo', 'Charlie', 'Delta'),
(2, 'lorem', 'Windows 8', 'Computer Engineering', '2', 'https://en.wikipedia.org/wiki/Windows_8', 0, 'Windows 8 is a major release of the Windows NT operating system developed by Microsoft. The product was released to manufacturing on August 1, 2012, and generally to retail on October 26, 2012.[6] Windows 8 was made available for download via MSDN and TechNet and available as a replacement to all Windows 7 users via Windows Update.\r\n\r\nWindows 8 introduced major changes to the operating system\'s platform and user interface to improve its user experience on tablets, where Windows was now competing with mobile operating systems, including Android and iOS.[7] In particular, these changes included a touch-optimized Windows shell based on Microsoft\'s \"Metro\" design language and the Start screen (which displays programs and dynamically updated content on a grid of tiles), a new platform for developing \"apps\" with an emphasis on touchscreen input, integration with online services (including the ability to synchronize apps and settings between devices), and Windows Store, an online distribution for downloading and purchasing new software. Many of these features were adoptions from Windows Phone. Windows 8 added support for USB 3.0, Advanced Format hard drives, near field communications, and cloud computing. Additional security features were introduced, such as built-in antivirus software, integration with Microsoft SmartScreen phishing filtering service and support for UEFI Secure Boot on supported devices with UEFI firmware, to prevent malware from infecting the boot process.\r\n', '2021-06-27', 0, 'Delta', 'Echo', 'Foxtrot', 'Golf'),
(3, 'lorem', 'Windows 10', 'Computer Engineering', '2', 'https://en.wikipedia.org/wiki/Windows_10', 1, 'Windows 10 is a major release of the Windows NT operating system developed by Microsoft. It is the successor to Windows 8.1, released nearly two years earlier, and was released to manufacturing on July 15, 2015, and broadly released for the general public on July 29, 2015.[20] Windows 10 was made available for download via MSDN and Technet, as a free upgrade for retail copies of Windows 8 and Windows 8.1 users via the Windows Store, and to Windows 7 users via Windows Update. Windows 10 receives new builds on an ongoing basis, which are available at no additional cost to users, in addition to additional test builds of Windows 10, which are available to Windows Insiders. Devices in enterprise environments can receive these updates at a slower pace, or use long-term support milestones that only receive critical updates, such as security patches, over their ten-year lifespan of extended support', '2021-06-27', 3, 'Golf', 'Hotel', 'India', 'Juliet'),
(4, 'lorem', 'What is Arduino?', 'Electronics & Communication Engineering', '2', 'https://www.arduino.cc/en/guide/introduction', 0, 'What is Arduino chuchu?\r\nArduino is an open-source electronics platform based on easy-to-use hardware and software. Arduino boards are able to read inputs - light on a sensor, a finger on a button, or a Twitter message - and turn it into an output - activating a motor, turning on an LED, publishing something online. You can tell your board what to do by sending a set of instructions to the microcontroller on the board. To do so you use the Arduino programming language (based on Wiring), and the Arduino Software (IDE), based on Processing.\r\n\r\nOver the years Arduino has been the brain of thousands of projects, from everyday objects to complex scientific instruments. A worldwide community of makers - students, hobbyists, artists, programmers, and professionals - has gathered around this open-source platform, their contributions have added up to an incredible amount of accessible knowledge that can be of great help to novices and experts alike.\r\n\r\n', '2021-06-28', 2, 'Juliet', 'Kilo', 'Mike', 'NOvember'),
(5, 'lorem', 'Why Arduino?', 'Electronics & Communication Engineering', '1', 'https://www.arduino.cc/en/guide/introduction', 1, 'Why Arduino?\r\nThanks to its simple and accessible user experience, Arduino has been used in thousands of different projects and applications. The Arduino software is easy-to-use for beginners, yet flexible enough for advanced users. It runs on Mac, Windows, and Linux. Teachers and students use it to build low cost scientific instruments, to prove chemistry and physics principles, or to get started with programming and robotics. Designers and architects build interactive prototypes, musicians and artists use it for installations and to experiment with new musical instruments. Makers, of course, use it to build many of the projects exhibited at the Maker Faire, for example. Arduino is a key tool to learn new things. Anyone - children, hobbyists, artists, programmers - can start tinkering just following the step by step instructions of a kit, or sharing ideas online with other members of the Arduino community.\r\n\r\nThere are many other microcontrollers and microcontroller platforms available for physical computing. Parallax Basic Stamp, Netmedia\'s BX-24, Phidgets, MIT\'s Handyboard, and many others offer similar functionality. All of these tools take the messy details of microcontroller programming and wrap it up in an easy-to-use package. Arduino also simplifies the process of working with microcontrollers, but it offers some advantage for teachers, students, and interested amateurs over other systems:\r\n\r\n', '2021-06-28', 1, 'NOvember', 'Oscar', 'Papa', 'Quebec'),
(6, 'lorem', 'How do I use Arduino?', 'Electrical Engineering', '0', 'https://www.arduino.cc/en/guide/introduction', 1, 'Thanks to its simple and accessible user experience, Arduino has been used in thousands of different projects and applications. The Arduino software is easy-to-use for beginners, yet flexible enough for advanced users. It runs on Mac, Windows, and Linux. Teachers and students use it to build low cost scientific instruments, to prove chemistry and physics principles, or to get started with programming and robotics. Designers and architects build interactive prototypes, musicians and artists use it for installations and to experiment with new musical instruments. Makers, of course, use it to build many of the projects exhibited at the Maker Faire, for example. Arduino is a key tool to learn new things. Anyone - children, hobbyists, artists, programmers - can start tinkering just following the step by step instructions of a kit, or sharing ideas online with other members of the Arduino community.\r\n\r\nThere are many other microcontrollers and microcontroller platforms available for physical computing. Parallax Basic Stamp, Netmedia\'s BX-24, Phidgets, MIT\'s Handyboard, and many others offer similar functionality. All of these tools take the messy details of microcontroller programming and wrap it up in an easy-to-use package. Arduino also simplifies the process of working with microcontrollers, but it offers some advantage for teachers, students, and interested amateurs over other systems:', '2021-06-29', 0, 'Quebec', 'Romeo', 'Sienna', 'Tango'),
(7, 'Staff A', 'What Is A Solar Panel?', 'Electrical Engineering', '3', 'https://www.mrsolar.com/what-is-a-solar-panel/', 2, 'What Is A Solar Panel?\r\n\r\n \r\nSolar energy begins with the sun. Solar panels (also known as \"PV panels\") are used to convert light from the sun, which is composed of particles of energy called \"photons\", into electricity that can be used to power electrical loads.\r\n\r\nSolar panels can be used for a wide variety of applications including remote power systems for cabins, telecommunications equipment, remote sensing, and of course for the production of electricity by residential and commercial solar electric systems.\r\n\r\nOn this page, we will discuss the history, technology, and benefits of solar panels. We will learn how solar panels work,  how they are made, how they create electricity, and where you can buy solar panels.', '2021-06-29', 1, 'Papa', 'Tango', 'Victor', 'Whiskey'),
(8, 'Staff A', 'A Short History of Solar Panels', 'Electrical Engineering', '2', 'https://www.mrsolar.com/what-is-a-solar-panel/', 2, 'The development of solar energy goes back more than 100 years. In the early days, solar energy was used primarily for the production of steam which could then be used to drive machinery. But it wasn\'t until the discovery of the \"photovoltaic effect\" by Edmond Becquerel that would allow the conversion of sunlight solar electric energy. Becquerel\'s discovery then led to the invention in 1893 by Charles Fritts of the first genuine solar cell which was formed by coating sheets of selenium with a thin layer of gold. And from this humble beginning would arise the device we know today as the solar panel.\r\n\r\nRussel Ohl, an American inventor on the payroll of Bell Laboratories, patented the world\'s first silicon solar cell in 1941. Ohl\'s invention led to the production of the first solar panel in 1954 by the same company. Solar panels found their first mainstream use in space satellites. For most people, the first solar panel in their life was probably embedded in their new calculator - circa the 1970s!\r\n\r\nToday, solar panels and complete solar panel systems are used to power a wide variety of applications. Yes, solar panels in the form of solar cells are still being used in calculators. However, they are also being used to provide solar power to entire homes and commercial buildings, such as Google\'s headquarters in California.', '2021-06-29', 2, 'Whiskey ', 'Xray', 'Yankee', 'Zulu'),
(9, 'Staff B', 'The History of Railroad Technology', 'Railway Engineering', '1', 'https://www.thoughtco.com/history-of-railroad-4059935#:~:text=From%20ancient%20Greece%20to%20modern-day%20America%2C%20railroads%20have,transport%20of%20boats%20across%20the%20Isthmus%20of%20Corinth.', 2, 'Since their invention, railroads have played a huge role in further developing civilizations around the world. From ancient Greece to modern-day America, railroads have changed the way humans travel and work.\r\n\r\n\r\nThe earliest form of rail transportation actually dates back to 600 B.C. The Greeks made grooves in paved limestone roads to use in conjunction with wheeled vehicles, easing the transport of boats across the Isthmus of Corinth. However, when Romans conquered the Greeks in 146 B.C., early railways fell into ruin and disappeared for more than 1,400 years.\r\n\r\nThe first modern rail transport system did not make a return until the 16th century. Even then, it would be another three hundred years before the invention of the steam locomotive would transform rail transportation on a global scale. \r\n\r\n', '2021-06-29', 2, 'ALpha', 'Delta', 'Xray', 'Victor'),
(10, 'Staff C', 'The First Modern Railways', 'Railway Engineering', '3', 'https://www.thoughtco.com/history-of-railroad-4059935#:~:text=From%20ancient%20Greece%20to%20modern-day%20America%2C%20railroads%20have,transport%20of%20boats%20across%20the%20Isthmus%20of%20Corinth.', 2, 'The precursors to modern trains debuted in the early 1550s in Germany with the introduction of wagonways. These primitive railed roads consisted of wooden rails over which horse-drawn wagons or carts were able to move with greater ease than over dirt roads. By the 1770s, wooden rails had been replaced with iron ones. These wagonways evolved into tramways that spread across Europe. In 1789, Englishman William Jessup designed the first wagons with flanged wheels that were grooved, allowing the wheels to better grip the rail. This important design feature was carried forward to later locomotives.\r\n\r\nUntil the 1800s, railways were constructed of cast-iron. Unfortunately, cast-iron was prone to rust and it was brittle, often causing it to fail under stress. In 1820, John Birkinshaw invented a more durable material called wrought-iron. This innovation, although an improvement over cast-iron was still flawed, however, it became the standard until the advent of the Bessemer process enabled the cheaper production of steel in the late 1860s, sparking the rapid expansion of railways not only across America but around the world. Eventually, the Bessemer process was replaced by the use of open-hearth furnaces, which further reduced the cost of steel production and allowed trains to connect most major cities in the United States by the end of the 19th century.', '2021-06-30', 1, 'Delta', 'Hotel', 'Juliet', 'Romeo'),
(11, 'lorem', 'How to make a website?', 'Information Technology', '1', 'www.google.com/?search-how-to-make-a-website', 2, 'Solar panels collect clean renewable energy in the form of sunlight and convert that light into electricity which can then be used to provide power for electrical loads. Solar panels are comprised of several individual solar cells which are themselves composed of layers of silicon, phosphorous (which provides the negative charge), and boron (which provides the positive charge). Solar panels absorb the photons and in doing so initiate an electric current. The resulting energy generated from photons striking the surface of the solar panel allows electrons to be knocked out of their atomic orbits and released into the electric field generated by the solar cells which then pull these free electrons into a directional current. This entire process is known as the Photovoltaic Effect. An average home has more than enough roof area for the necessary number of solar panels to produce enough solar electricrity to supply all of its power needs excess electricity generated goes onto the main power grid, paying off in electricity use at night.', '2021-07-01', 1, 'Charlie', 'Romeo', '', ''),
(12, 'lorem', 'The Book 1', 'IT', '1', 'https://en.wikipedia.org/wiki/Psychology', 0, 'Psychology is the science of mind and behavior. Psychology includes the study of conscious and unconscious phenomena, as well as feelings and thought. It is an academic discipline of immense scope. Psychologists also seek an understanding of the emergent properties of brains, linking the discipline to neuroscience. As a social science, psychologists aim to understand the behavior of individuals and groups.[1][2]\r\n\r\nA professional practitioner or researcher involved in the discipline is called a psychologist. Some psychologists can be classified as a social, behavioral, or cognitive scientists. Some psychologists attempt to understand the role of mental functions in individual and social behavior. Others explore the physiological and biological processes that underlie cognitive functions and behaviors.', '2021-06-29', 0, 'John Doe', '', '', ''),
(13, 'lorem', 'The Book 2', 'IT', '1', 'https://en.wikipedia.org/wiki/Psychology', 0, 'Psychology is the science of mind and behavior. Psychology includes the study of conscious and unconscious phenomena, as well as feelings and thought. It is an academic discipline of immense scope. Psychologists also seek an understanding of the emergent properties of brains, linking the discipline to neuroscience. As a social science, psychologists aim to understand the behavior of individuals and groups.[1][2]\r\nA professional practitioner or researcher involved in the discipline is called a psychologist. Some psychologists can be classified as a social, behavioral, or cognitive scientists. Some psychologists attempt to understand the role of mental functions in individual and social behavior. Others explore the physiological and biological processes that underlie cognitive functions and behaviors.', '2021-06-29', 0, 'John Doe', '', '', ''),
(14, 'lorem', 'Big Data Tutorial - Python', 'Computer Engineering', '2', 'https://en.wikipedia.org/wiki/Big_data', 0, '', '2021-06-08', 0, 'Wiki', 'Oscar', 'Lima', ''),
(15, 'lorem', 'Big Data Tutorial - Python 2', 'Computer Engineering', '1', 'https://en.wikipedia.org/wiki/Big_data', 0, '', '2021-06-08', 0, 'Wiki', 'Oscar', 'Lima', ''),
(16, 'lorem', 'Electrical Architecture', 'Electrical Engineering', '2', 'https://en.wikipedia.org/wiki/electric', 0, '', '2021-06-15', 0, 'John Doe', 'Foxtrot', 'Jane Doe', ''),
(17, 'lorem', 'Electrical Architecture', 'Electrical Engineering', '', 'https://en.wikipedia.org/wiki/electric', 0, '', '2021-06-15', 0, 'John Doe', 'Foxtrot', 'Jane Doe', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` text NOT NULL,
  `program` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `last_name`, `first_name`, `email`, `contact`, `program`) VALUES
(1, 'lorem', 'ipsum', 'Ipsum', 'Lorem', 'test@test.test', '09999999999', 'Master of Science in Economics '),
(4, 'Staff_A', 'staffa', 'Staff A', 'Staff A', 'astaff@email.com', '09454644654', 'Master of Science in Electronics Engineering'),
(16, 'local', 'host', 'Bagas', 'JC', 'sample@sample', '09123456789', 'Master of Arts in Filipino '),
(18, 'user', 'pass', 'Beguiras', 'Clint', 'test@test', '09645646546', 'Master of Science in Economics'),
(19, 'admin', 'admin', 'admins', 'admin', 'admin@admin.com', '1234567890', 'Master of Science in Civil Engineering (MSCE)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `literature`
--
ALTER TABLE `literature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `literature`
--
ALTER TABLE `literature`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
