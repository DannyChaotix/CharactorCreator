
CREATE TABLE IF NOT EXISTS `habiletes` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `ShortDesc` varchar(255) NOT NULL
);


CREATE TABLE IF NOT EXISTS `personnage` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `Nom` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Habiletes` int(11) NOT NULL,
  `Allies` int(11) NOT NULL,
  `Image` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
);


CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `title` varchar(191) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `rank` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
);


