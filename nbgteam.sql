-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2017 at 09:12 AM
-- Server version: 5.5.55-0+deb8u1
-- PHP Version: 7.0.20-1~dotdeb+8.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nbgteam`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `image_path`, `image_name`, `post_id`) VALUES
(97, 'http://nbgteam/uploads/8f644a30c4fda0b592c071ab6dacd9ef.jpg', '/var/www/nbgteam/public/uploads/8f644a30c4fda0b592c071ab6dacd9ef.jpg', 38),
(98, 'http://nbgteam/uploads/copy-of-duck-with-glasses2.png', '/var/www/nbgteam/public/uploads/copy-of-duck-with-glasses2.png', 38),
(99, 'http://nbgteam/uploads/s-l300.jpg', '/var/www/nbgteam/public/uploads/s-l300.jpg', 38),
(100, 'http://nbgteam/uploads/Mr-Men-Little-Miss-Scary.jpg', '/var/www/nbgteam/public/uploads/Mr-Men-Little-Miss-Scary.jpg', 39),
(101, 'http://nbgteam/uploads/Mr_Small.jpg', '/var/www/nbgteam/public/uploads/Mr_Small.jpg', 39),
(102, 'http://nbgteam/uploads/tamp.jpg', '/var/www/nbgteam/public/uploads/tamp.jpg', 39),
(103, 'http://nbgteam/uploads/Baby-Duck-Standing-Coloring-Page.jpg', '/var/www/nbgteam/public/uploads/Baby-Duck-Standing-Coloring-Page.jpg', 40),
(104, 'http://nbgteam/uploads/can-stock-photo_csp16525402.jpg', '/var/www/nbgteam/public/uploads/can-stock-photo_csp16525402.jpg', 40),
(105, 'http://nbgteam/uploads/29720263-vector-illustration-of-cartoon-duck--coloring-book.jpg', '/var/www/nbgteam/public/uploads/29720263-vector-illustration-of-cartoon-duck--coloring-book.jpg', 41),
(106, 'http://nbgteam/uploads/stock-photo-hand-drawn-cartoon-duck-cute-duck-126233288.jpg', '/var/www/nbgteam/public/uploads/stock-photo-hand-drawn-cartoon-duck-cute-duck-126233288.jpg', 41),
(107, 'http://nbgteam/uploads/all-laptops-en.jpg', '/var/www/nbgteam/public/uploads/all-laptops-en.jpg', 42),
(108, 'http://nbgteam/uploads/budget__V279288877_.jpg', '/var/www/nbgteam/public/uploads/budget__V279288877_.jpg', 42),
(109, 'http://nbgteam/uploads/rrttyyys.jpg', '/var/www/nbgteam/public/uploads/rrttyyys.jpg', 42);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(150) NOT NULL,
  `post_text` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_text`, `post_date`) VALUES
(32, 'Lorem ipsum dolor ', '<p><span style=\"color: #666666; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet, per gubergren argumentum omittantur ne, pro quod verterem adversarium et. Id vidit audiam pro, te labore nostro vix. Eu mentitum persequeris dissentiunt nam, eam in vidit altera definitiones. Qui illud offendit vivendum et, has erroribus expetendis assueverit id. Dicta utamur splendide cu sea, dicta argumentum duo ei, cu vivendo minimum pro. Ne adipiscing persequeris est, dicat recteque et has. Mei cu sumo aeterno fabellas, omnesque periculis eu sed. Ei est nibh oratio, eu eos ignota primis.</span></p>', '2017-07-15 08:24:00'),
(33, 'Fugit delicatissimi ', '<p>Lorem ipsum dolor sit amet, ut cum perfecto consequuntur, et eum harum civibus ancillae. Pro justo affert ne. Sea iusto nusquam in, eu sit agam audiam facilisis. Ei has error putant, vim quis interpretaris ex. Ex vel error feugait intellegat, ex mea enim tibique.Fugit delicatissimi per in, mei te vocibus indoctum conclusionemque. Cu eum nisl scaevola, nec veri dicit everti in, suas phaedrum erroribus has no. Te quo velit ignota laoreet. Quas omnesque invidunt eam ex, mea dicam ridens vidisse te. Ex vim nostrum scaevola consulatu, quo te percipit omittantur interpretaris. An est doctus denique consetetur, eu erat liber audire eos, debitis signiferumque mea no.</p>', '2017-07-15 08:26:45'),
(34, 'Et habemus denique', '<p>Et habemus denique quaestio vix, vel altera reprimique et. Vim et iusto complectitur, at vim inimicus eloquentiam. Ius aliquip forensibus in, vero animal usu te, qui perpetua cotidieque necessitatibus no. Ea mea munere laoreet vituperata, ad has quis nisl nulla. Mei legere sensibus ne. Mea purto debet at.</p>\r\n<p>Ei eos etiam mediocrem molestiae, ius et iusto ubique aliquip. Nam dolor decore ei, eum delenit argumentum ad, elitr aperiam docendi id has. At probo mundi delicata qui, mei ex ullum quodsi, sea posse contentiones ut. Nonumes molestiae assentior te usu, id eius dicam quidam qui. Sint inermis sapientem in his, mea ea odio semper. Has purto vero wisi at, ea eius dolor qui.</p>', '2017-07-15 08:28:03'),
(35, 'Mei legere sensibu', '<p>Et habemus denique quaestio vix, vel altera reprimique et. Vim et iusto complectitur, at vim inimicus eloquentiam. Ius aliquip forensibus in, vero animal usu te, qui perpetua cotidieque necessitatibus no. Ea mea munere laoreet vituperata, ad has quis nisl nulla. Mei legere sensibus ne. Mea purto debet at.</p>\r\n<p>Ei eos etiam mediocrem molestiae, ius et iusto ubique aliquip. Nam dolor decore ei, eum delenit argumentum ad, elitr aperiam docendi id has. At probo mundi delicata qui, mei ex ullum quodsi, sea posse contentiones ut. Nonumes molestiae assentior te usu, id eius dicam quidam qui. Sint inermis sapientem in his, mea ea odio semper. Has purto vero wisi at, ea eius dolor qui.</p>', '2017-07-15 08:28:34'),
(36, 'vero animal usu te, qui perpet', '<p>Et habemus denique quaestio vix, vel altera reprimique et. Vim et iusto complectitur, at vim inimicus eloquentiam. Ius aliquip forensibus in, vero animal usu te, qui perpetua cotidieque necessitatibus no. Ea mea munere laoreet vituperata, ad has quis nisl nulla. Mei legere sensibus ne. Mea purto debet at.</p>\r\n<p>Ei eos etiam mediocrem molestiae, ius et iusto ubique aliquip. Nam dolor decore ei, eum delenit argumentum ad, elitr aperiam docendi id has. At probo mundi delicata qui, mei ex ullum quodsi, sea posse contentiones ut. Nonumes molestiae assentior te usu, id eius dicam quidam qui. Sint inermis sapientem in his, mea ea odio semper. Has purto vero wisi at, ea eius dolor qui.</p>', '2017-07-15 08:29:14'),
(37, 'Ea mea munere laoree', '<p>Et habemus denique quaestio vix, vel altera reprimique et. Vim et iusto complectitur, at vim inimicus eloquentiam. Ius aliquip forensibus in, vero animal usu te, qui perpetua cotidieque necessitatibus no. Ea mea munere laoreet vituperata, ad has quis nisl nulla. Mei legere sensibus ne. Mea purto debet at.</p>\r\n<p>Ei eos etiam mediocrem molestiae, ius et iusto ubique aliquip. Nam dolor decore ei, eum delenit argumentum ad, elitr aperiam docendi id has. At probo mundi delicata qui, mei ex ullum quodsi, sea posse contentiones ut. Nonumes molestiae assentior te usu, id eius dicam quidam qui. Sint inermis sapientem in his, mea ea odio semper. Has purto vero wisi at, ea eius dolor qui.</p>', '2017-07-15 08:29:56'),
(38, 'Mea purto debet a', '<p>Et habemus denique quaestio vix, vel altera reprimique et. Vim et iusto complectitur, at vim inimicus eloquentiam. Ius aliquip forensibus in, vero animal usu te, qui perpetua cotidieque necessitatibus no. Ea mea munere laoreet vituperata, ad has quis nisl nulla. Mei legere sensibus ne. Mea purto debet at.</p>\r\n<p>Ei eos etiam mediocrem molestiae, ius et iusto ubique aliquip. Nam dolor decore ei, eum delenit argumentum ad, elitr aperiam docendi id has. At probo mundi delicata qui, mei ex ullum quodsi, sea posse contentiones ut. Nonumes molestiae assentior te usu, id eius dicam quidam qui. Sint inermis sapientem in his, mea ea odio semper. Has purto vero wisi at, ea eius dolor qui.</p>', '2017-07-15 08:31:07'),
(39, ' Sint inermis sapientem in his', '<p>Et habemus denique quaestio vix, vel altera reprimique et. Vim et iusto complectitur, at vim inimicus eloquentiam. Ius aliquip forensibus in, vero animal usu te, qui perpetua cotidieque necessitatibus no. Ea mea munere laoreet vituperata, ad has quis nisl nulla. Mei legere sensibus ne. Mea purto debet at.</p>\r\n<p>Ei eos etiam mediocrem molestiae, ius et iusto ubique aliquip. Nam dolor decore ei, eum delenit argumentum ad, elitr aperiam docendi id has. At probo mundi delicata qui, mei ex ullum quodsi, sea posse contentiones ut. Nonumes molestiae assentior te usu, id eius dicam quidam qui. Sint inermis sapientem in his, mea ea odio semper. Has purto vero wisi at, ea eius dolor qui.</p>', '2017-07-15 08:31:54'),
(40, ' qui perpetua cotidieque necessitatibus', '<p>Et habemus denique quaestio vix, vel altera reprimique et. Vim et iusto complectitur, at vim inimicus eloquentiam. Ius aliquip forensibus in, vero animal usu te, qui perpetua cotidieque necessitatibus no. Ea mea munere laoreet vituperata, ad has quis nisl nulla. Mei legere sensibus ne. Mea purto debet at.</p>\r\n<p>Ei eos etiam mediocrem molestiae, ius et iusto ubique aliquip. Nam dolor decore ei, eum delenit argumentum ad, elitr aperiam docendi id has. At probo mundi delicata qui, mei ex ullum quodsi, sea posse contentiones ut. Nonumes molestiae assentior te usu, id eius dicam quidam qui. Sint inermis sapientem in his, mea ea odio semper. Has purto vero wisi at, ea eius dolor qui.</p>', '2017-07-15 08:33:22'),
(41, ' Has purto vero wisi at, ea', '<p>Et habemus denique quaestio vix, vel altera reprimique et. Vim et iusto complectitur, at vim inimicus eloquentiam. Ius aliquip forensibus in, vero animal usu te, qui perpetua cotidieque necessitatibus no. Ea mea munere laoreet vituperata, ad has quis nisl nulla. Mei legere sensibus ne. Mea purto debet at.</p>\r\n<p>Ei eos etiam mediocrem molestiae, ius et iusto ubique aliquip. Nam dolor decore ei, eum delenit argumentum ad, elitr aperiam docendi id has. At probo mundi delicata qui, mei ex ullum quodsi, sea posse contentiones ut. Nonumes molestiae assentior te usu, id eius dicam quidam qui. Sint inermis sapientem in his, mea ea odio semper. Has purto vero wisi at, ea eius dolor qui.</p>', '2017-07-15 08:34:08'),
(42, 'docendi id has. At probo ', '<p>Et habemus denique quaestio vix, vel altera reprimique et. Vim et iusto complectitur, at vim inimicus eloquentiam. Ius aliquip forensibus in, vero animal usu te, qui perpetua cotidieque necessitatibus no. Ea mea munere laoreet vituperata, ad has quis nisl nulla. Mei legere sensibus ne. Mea purto debet at.</p>\r\n<p>Ei eos etiam mediocrem molestiae, ius et iusto ubique aliquip. Nam dolor decore ei, eum delenit argumentum ad, elitr aperiam docendi id has. At probo mundi delicata qui, mei ex ullum quodsi, sea posse contentiones ut. Nonumes molestiae assentior te usu, id eius dicam quidam qui. Sint inermis sapientem in his, mea ea odio semper. Has purto vero wisi at, ea eius dolor qui.</p>', '2017-07-15 08:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'Petar Petrovic', 'admin@admin.com', '$2y$10$Y/Z0Uz.kPXCgbhbLVlAL1uSwgm1ILVWsRjmFhQBFWTkKW7i7BsZCu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
