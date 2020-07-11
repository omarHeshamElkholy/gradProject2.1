-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 02:22 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hafla_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Cat_id` int(11) NOT NULL,
  `Cat_Title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Cat_id`, `Cat_Title`) VALUES
(1, 'Textbooks'),
(2, 'Novels'),
(3, 'Lifestyle '),
(7, 'History'),
(10, 'Medical');

-- --------------------------------------------------------

--
-- Table structure for table `customeraccount`
--

CREATE TABLE `customeraccount` (
  `cid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customeraccount`
--

INSERT INTO `customeraccount` (`cid`, `username`, `email`, `password`) VALUES
(81, 'omar', 'omr.hesham@gmail.com', '123456'),
(82, 'Allaa Bayomi', 'allaamohaamed@gmail.com', '123456'),
(83, 'Farida Osama', 'faridaosama@gmail.com', '123456'),
(84, 'Mayar Mostafa', 'mayarmostafa@gmail.com', '123456'),
(85, 'Abdelraouf Ahmed', 'Abdelraouf@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_phone` int(12) NOT NULL,
  `cust_address` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cust_name`, `cust_email`, `cust_phone`, `cust_address`, `product`, `quantity`, `order_total`) VALUES
(121, 'OMAR HESHAM ELKHOLY', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'Harry Potter and the Philosophers Stone - Hufflepuff Edition 20th Anniversary House Editions - Paperback', 1, 600),
(122, 'OMAR HESHAM ELKHOLY', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'JavaScript And jQuery', 1, 600),
(123, 'OMAR HESHAM ELKHOLY', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'Harry Potter and the Philosophers Stone - Hufflepuff Edition 20th Anniversary House Editions - Paperback', 2, 120),
(124, 'Za3tar', 'za3tar@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'Rolza', 1, 100),
(125, 'OMAR HESHAM ELKHOLY', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'Jozor Magazine ', 3, 1050),
(126, 'Omar Hesham', 'omr.hesham@gmail.com', 1146359174, 'Omarat el fath', 'Harry Potter and the Philosophers Stone', 1, 60),
(127, 'OMAR HESHAM ELKHOLY', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'Harry Potter and the Half-Blood Prince', 1, 60),
(128, 'OMAR HESHAM ELKHOLY', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'The Bro Code', 1, 40),
(129, 'Omar Hesham', 'omr.hesham@gmail.com', 1146359174, 'Omarat el fath', 'Harry Potter and the Prisoner of Azkaban', 1, 60),
(130, 'OMAR HESHAM ELKHOLY', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'Harry Potter and the Goblet of Fire', 1, 60),
(131, 'OMAR HESHAM ELKHOLY', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'How to Speak With Confidence in Public', 1, 35),
(132, 'OMAR HESHAM ELKHOLY', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'Harry Potter and the Philosophers Stone', 1, 160),
(133, 'OMAR HESHAM ELKHOLY', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'فن الحرب', 1, 160),
(134, 'Omar Hesham', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'Harry Potter And The Order Of The Phoenix', 1, 60),
(135, 'OMAR HESHAM ELKHOLY', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'Harry Potter and the Half-Blood Prince', 1, 60),
(136, 'OMAR HESHAM ELKHOLY', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'Harry Potter and The Chamber of Secrets', 1, 60),
(137, 'OMAR HESHAM ELKHOLY', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'Harry Potter and The Chamber of Secrets', 1, 60),
(138, 'Allaa Allah Bayomi', 'allaamohaamed@gmail.com', 1121540761, 'Sudan Street,el muhandseen,giza', 'Harry Potter And The Order Of The Phoenix', 1, 60),
(139, 'za3tar', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'Rising Strong', 1, 70),
(140, 'Omar Hesham Elkholy', 'omr.hesham@gmail.com', 1146359174, 'ABBAS EL AKAD, EL FATH 64', 'Harry Potter And The Order Of The Phoenix', 1, 60);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_id` int(11) NOT NULL,
  `Product_title` varchar(255) NOT NULL,
  `Product_category_id` int(11) NOT NULL,
  `Product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `Product_description` text NOT NULL,
  `short_desc` text NOT NULL,
  `Product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_id`, `Product_title`, `Product_category_id`, `Product_price`, `product_quantity`, `Product_description`, `short_desc`, `Product_image`) VALUES
(63, 'Harry Potter and the Philosophers Stone', 2, 50, 10, 'Harry Potter and the Philosopher\\\\\\\'s Stone was J.K. Rowling\\\\\\\'s first novel, followed by the subsequent six titles in the Harry Potter series, as well as three books written for charity: Fantastic Beasts and Where to Find Them, Quidditch Through the Ages and The Tales of Beedle the Bard. The Harry Potter novels have now sold over 450 million copies worldwide and been translated into 78 languages.\\\\r\\\\n', '  Harry Potter and the Philosopher\\\\\\\'s Stone was J.K. Rowling\\\\\\\'s first novel, followed by the subsequent six titles in the Harry Potter series', 'HP1.jpg'),
(64, 'Harry Potter and The Chamber of Secrets', 2, 60, 10, 'Its story follows Harry Potter\'s second year at Hogwarts School of Witchcraft and Wizardry as the Heir of Salazar Slytherin opens the Chamber of Secrets, unleashing a monster that petrifies the school\'s denizens.\r\n', 'Its story follows Harry Potter\'s second year at Hogwarts School of Witchcraft and Wizardry', 'HP2.jpg'),
(65, 'Harry Potter and the Prisoner of Azkaban', 2, 60, 10, 'Harry Potter, along with his best friends, Ron and Hermione, is about to start his third year at Hogwarts School of Witchcraft and Wizardry. Harry can\'t wait to get back to school after the summer holidays (who wouldn\'t if they lived with the horrible Dursleys?) But when Harry gets to Hogwarts, the atmosphere is tense. There\'s an escaped mass murderer on the loose, and the sinister prison guards of Azkaban have been called in to guard the school . ', 'Harry Potter, along with his best friends, Ron and Hermione, is about to start his third year at Hogwarts School of Witchcraft and Wizardry.', 'HP3.jpg'),
(66, 'Harry Potter and the Goblet of Fire', 2, 60, 10, 'Harry Potter and the Goblet of Fire is the 4th edition to the Harry Potter series written by J. K. Rowling. The largest book in the series up to this point clocks in at 734 pages shared between 37 chapters. Harry is thrust into a competition that he did not sign up for that is deadly and he is under qualified for. Along the way new mysteries come to light that Harry and the gang must solve before it’s too late.\r\n\r\n', 'Harry is thrust into a competition that he did not sign up for that is deadly and he is under qualified for.', 'HP4.jpg'),
(67, 'Harry Potter And The Order Of The Phoenix', 2, 60, 10, 'The threat of Lord Voldemort has returned to the wizarding world. While the Ministry of Magic attempts to deny the return of this evil to the wizarding world, and band of wizards gather together in secret in order to foil the plans of the dark lord. In this Thrilling adventure, we see rebellion against society and the cause and effect that our companions we have been growing up with for years have on the world as a whole.\r\n\r\n', 'The threat of Lord Voldemort has returned to the wizarding world. While the Ministry of Magic attempts to deny the return of this evil to the wizarding world', 'HP5.jpg'),
(68, 'Harry Potter and the Half-Blood Prince', 2, 60, 10, 'It is Harry Potter \'s sixth year at Hogwarts School of Witchcraft and Wizardry. As Voldemort\'s sinister forces amass and a spirit of gloom and fear sweeps the land, it becomes more and more clear to Harry that he will soon have to confront his destiny. But is he up to the challenges ahead of him?', 'It is Harry Potter \'s sixth year at Hogwarts School of Witchcraft and Wizardry. As Voldemort\'s sinister forces amass and a spirit of gloom and fear sweeps the land.', 'HP6.jpg'),
(69, 'Harry Potter and the Deathly Hallows', 2, 60, 10, 'Harry Potter, together with his teenage companions and the members of the Order of the Phoenix, enter the final struggle with Voldemort and his Death Eaters, without the guidance of Dumbledore. They seek to uncover and destroy Voldemort\'s horcruxes and the secrets of the Deathly Hallows.\r\n', 'Harry with the help of his friends seek to uncover and destroy Voldemort\'s horcruxes and the secrets of the Deathly Hallows.\r\n', 'HP7.jpg'),
(70, 'The Art Of People: The 11 Simple People Skills That Will Get You Everything You Want ', 3, 50, 10, 'Some people think that in today’s hyper-competitive world, it’s the tough, take-no-prisoners type who comes out on top. But in reality, argues New York Times bestselling author Dave Kerpen, it’s actually those with the best people skills who win the day. Those who build the right relationships. Those who truly understand and connect with their colleagues, their customers, their partners. Those who can teach, lead, and inspire', 'it’s actually those with the best people skills who win the day. Those who build the right relationships.', 'artofP.jpg'),
(71, 'Rising Strong', 3, 70, 10, 'Dr. Brené Brown is a research professor at the University of Houston Graduate College of Social Work. She has spent the past twelve years studying vulnerability, courage, worthiness, and shame. Her groundbreaking research has been featured on PBS, NPR, CNN, The Washington Post, and The New York Times. Brené’s 2010 TEDxHouston talk, The Power of Vulnerability, is one of the top ten most viewed TED talks on TED, with approximately 6 million viewers. Additionally, Brené gave the closing talk at the 2012 TED conference where she talked about shame, courage, and innovation. Brené’s newest book is, Daring Greatly: How the Courage to Be Vulnerable Transforms the way we Live, Love, Parent, and Lead (Gotham, 2012). She is also the author of The Gifts of Imperfection (2010), and I Thought It Was Just Me (2007), and Connections (2009); a shame-resilience curriculum being facilitated by helping professionals across the globe. Brené lives in Houston with her husband, Steve, and their two children, Ellen and Charlie.\r\n', 'Dr. Brené Brown is a research professor at the University of Houston Graduate College of Social Work. She has spent the past twelve years studying vulnerability, courage, worthiness, and shame', 'RS.jpg'),
(72, 'The Playbook', 3, 50, 10, 'Matt Kuhn is a staff writer for the CBS hit show \\\\\\\\\\\\\\\"How I Met Your Mother\\\\\\\\\\\\\\\" and helps write Barney\\\\\\\\\\\\\\\'s Blog on the show\\\\\\\\\\\\\\\'s website. He lives in Los Angeles, California. Barney Stinson works at a corporation, and regularly \\\\\\\\\\\\\\\"suits up\\\\\\\\\\\\\\\" to help his lovelorn and altogether pathetic bro Ted Mosby. Basically the coolest dude ever, Barney Stinson has been compared to the Fonz-but Barney is much, much more awesome. Stinson lives in New York, New York-and appears weekly on the hit CBS show \\\\\\\\\\\\\\\"How I Met Your Mother\\\\\\\\\\\\\\\" with his friends Ted, Robin, Lily and Marshall.', '   Matt Kuhn is a staff writer for the CBS hit show \\\\\\\\\\\\\\\"How I Met Your Mother\\\\\\\\\\\\\\\" and helps write Barney\\\\\\\\\\\\\\\'s Blog on the show\\\\\\\\\\\\\\\'s website. Basically the coolest dude ever.', 'PB.jpg'),
(73, 'The Bro Code', 3, 40, 10, 'Barney Stinson is awesome. He works for a powerful bank in New York City but somehow finds time to “suit up” and help the less fortunate, in particular his lovelorn and all together pathetic bro Ted Mosby—seriously, that dude’s got probs. When Barney’s not staging private bikini calendar shoots, test-driving tanks, or elbow-deep in another legendary activity, like riding a tiger bareback or blowing up a guitar, he can be seen on the hit CBS show How I Met Your Mother with his friends Ted, Robin, Lily, and Marshall.\\r\\n', '  Like riding a tiger bareback or blowing up a guitar,he can be seen on the hit CBS show How I Met Your Mother with his friends Ted, Robin, Lily, and Marshall.\\r\\n', 'BC.jpg'),
(74, 'How to Speak With Confidence in Public', 3, 35, 10, 'Edie Lush studied Political Science at UCLA and International Relations at Yale, then joined Charlotte McDougall Associates as a communications coach. She is also a journalist who has worked for Bloomberg TV, the BBC, The Spectator, Prospect, The Week and Spectator Business magazines. Charlotte McDougall is a communication and leadership coach, the founder of Charlotte McDougall Associates, and an actress who has appeared on Downton Abbey, The Inbetweeners, Misfits, and The Paradise.\r\n', 'Edie Lush studied Political Science at UCLA and International Relations at Yale, then joined Charlotte McDougall Associates as a communications coach.', 'HOwTo.jpg'),
(75, 'فن الحرب', 7, 100, 5, 'The historical book of the art of war translated to arabic', ' The historical book of the art of war translated to arabic written by the legendary sun tzu the great Chinese general of the army', 'artofW.jpg'),
(76, 'Shakespeare - Hardcover Box ', 7, 200, 5, 'The complete collection of shakespeare\\\'s work\\\'s throughout the years', ' The complete collection of shakespeare\\\'s work\\\'s throughout the years', 'Shake.jpg'),
(77, 'Egyptian Myth: A Very Short Introduction', 7, 50, 5, 'Egyptian myths articulated the core values of one of the longest lasting civilizations in history, and myths of deities such as Isis and Osiris influenced contemporary cultures and became part of the Western cultural heritage', 'Egyptian myths articulated the core values of one of the longest lasting civilizations in history', 'regy.jpg'),
(78, 'The First World War', 7, 50, 5, 'Written by one of our generation\'s most respected historians, it charts the Great War from its inception with a rigorous attention to dates, facts and statistics but coloured in with human perspective and poetry BIG ISSUE IN THE NORTH', 'it charts the Great War from its inception with a rigorous attention to dates, facts and statistics', 'WW.jpg'),
(79, 'World War Two : A Short History', 7, 50, 5, 'Telling a story of the second world war which is the biggest war in the world so far with the most casualties.', 'Telling a story of the second world war which is the biggest war in the world so far with the most casualties.', 'WW2.jpg'),
(80, 'Beginning Javascript', 1, 50, 5, 'About the authors Jeremy McPeak is a professional programmer and analyst who works extensively with JavaScript and C#. He coauthored both of the previous editions of Beginning JavaScript, and authored the well-reviewed JavaScript 24-Hour Trainer. He contributes to the online, web-centric learning site Tuts+ Code, covering topics such as JavaScript, C#, and the .NET Framework. Paul Wilton owns his own company, providing online booking systems to vacation property owners, which is largely developed using JavaScript. Visit us at wrox.com where you have access to free code samples, Programmer to Programmer forums, and discussions on the latest happenings in the industry.\r\n', 'authored the well-reviewed JavaScript 24-Hour Trainer. He contributes to the online, web-centric learning site Tuts+ Code', 'JS.jpg'),
(81, 'Finance Basics', 1, 70, 3, 'Whether you need a crash course or a brief refresher, each book in the series is a concise, practical primer that will help you brush up on a key management topic. Advice you can quickly read and apply, for ambitious professionals and aspiring executives--from the most trusted source in business.', 'practical primer that will help you brush up on a key management topic.', 'FB.jpg'),
(82, 'AutoCAD 2018 for Beginners', 1, 100, 3, 'AutoCAD 2018 For Beginners makes it easy to to learn drafting in AutoCAD. Using easy, real-world examples, you will master the basics of this leading CAD software by following step by step instructions. Each topic starts with a brief explanation, and then launches into the example that gives you a direct experience and a good start. You\'ll learn the basics of drawing, editing, dimensioning, printing, and 3D modeling as you create the examples given in this book. Whether you are a beginner or trying to upgrade your skills, this step-by-step guide provides a solid base in design and drafting', 'AutoCAD 2018 For Beginners makes it easy to to learn drafting in AutoCAD', 'Aut.jpg'),
(83, 'The Algorithm Design Manual', 1, 100, 5, 'This expanded and updated second edition of a classic bestseller continues to take the `mystery` out of designing and analyzing algorithms and their efficacy and efficiency. Expanding on the highly successful formula of the first edition, the book now serves as the primary textbook of choice for any algorithm design course while maintaining its status as the premier practical reference guide to algorithms. NEW: (1) Incorporates twice the tutorial material and exercises. (2) Provides full online support for lecturers, and a completely updated and improved website component with lecture slides, audio and video. (3) Contains a highly unique catalog of the 75 most important algorithmic problems. (4) Includes new `war stories` and `interview problems`, relating experiences from real-world applications. Written by a well-known, IEEE Computer Science teaching-award winner, this new edition is an essential learning tool for students needing a solid grounding in algorithms, as well as a uniquely comprehensive text/reference for professionals.\r\n', 'This expanded and updated second edition of a classic bestseller', 'AD.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'omar', '123456', 'omr.hesham@gmail.com'),
(4, 'za3tar', 'asd', 'za3tar@gmail.com'),
(5, 'Hanhon', 'HanhonHanhon', 'Hanhon@gmail.com'),
(6, 'Farida Osama', '123456', 'faridaosama@gmail.com'),
(7, 'Allaa Bayomi', '123456', 'allaamohaamed@gmail.com'),
(8, 'Mayar Mostafa', '123456', 'mayarmostafa@gmail.com'),
(9, 'Abdelraouf Ahmed', '123456', 'Abdelraouf@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `customeraccount`
--
ALTER TABLE `customeraccount`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customeraccount`
--
ALTER TABLE `customeraccount`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
