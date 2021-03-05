$stuff = array();
$counter = 0;
while(count($stuff) < 8){ $stuff[]=$counter; $counter +=2; } echo $stuff[$counter];

CREATE TABLE IF NOT EXIST `film` (
 `id` int NOT NULL,
 `title` int NOT NULL,
 `venueID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8

CREATE TABLE IF NOT EXIST `location` (
 `id` int NOT NULL AUTO_INCREMENT,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

CREATE TABLE IF NOT EXIST `user` (
 `id` int NOT NULL AUTO_INCREMENT,
 `firstName` varchar(30) NOT NULL,
 `lastName` varchar(30) NOT NULL,
 `email` varchar(50) NOT NULL,
 `dob` date NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

CREATE TABLE IF NOT EXIST `venue` (
 `id` int NOT NULL AUTO_INCREMENT,
 `name` int NOT NULL,
 `city` varchar(30) NOT NULL,
 `region` varchar(30) NOT NULL,
 `postalCode` varchar(10) NOT NULL,
 `streetAddress` varchar(100) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

CREATE TABLE IF NOT EXIST `venue_film` (
 `id` int NOT NULL,
 `filmID` int NOT NULL,
 `venueID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8
