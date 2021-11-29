-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2021 at 11:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polarlights`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(11) NOT NULL,
  `PackageID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `FromDate` date NOT NULL,
  `ToDate` date NOT NULL,
  `NumOfTravellers` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(2) NOT NULL,
  `Zip` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `CreditCard` varchar(20) NOT NULL,
  `ExpDate` varchar(5) NOT NULL,
  `CVVNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `PackageID`, `CustomerID`, `FromDate`, `ToDate`, `NumOfTravellers`, `FirstName`, `LastName`, `Address`, `City`, `State`, `Zip`, `Email`, `Phone`, `CreditCard`, `ExpDate`, `CVVNumber`) VALUES
(1, 1, 14, '2021-11-07', '2021-11-10', 2, 'Test', 'Dummy', '123 Main St', 'Madison', 'WI', 53718, 'test12@myemail.com', '555-555-5555', '1234567890123456', '05/99', 111),
(2, 4, 10, '2021-11-08', '2021-11-11', 3, 'Testing', 'Inserts', '321 Habberdasher Lane', 'Madison', 'WI', 53718, 'test10@myemail.com', '555-555-5550', '1234123412341234', '05/22', 0),
(5, 1, 10, '2021-06-10', '2021-06-26', 4, 'Test', 'Test', '1234 Main St', 'Madison', 'WI', 53562, 'test@gmail.com', '608-608-6089', '1212-1212-1212-1212', '1/22', 123),
(6, 4, 10, '2022-01-18', '2022-01-28', 2, 'Test', 'Test', '1234 Main St', 'Madison', 'WI', 53562, 'test@gmail.com', '608-608-6089', '1212-1212-1212-1212', '1/22', 132),
(7, 2, 10, '2021-07-07', '2021-11-10', 4, 'Test', 'Test', '1234 Main St', 'Madison', 'WI', 53562, 'test@gmail.com', '608-608-6089', '1212-1212-1212-1212', '1/22', 123);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `FirstName` varchar(60) NOT NULL,
  `LastName` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Email`, `Password`, `FirstName`, `LastName`) VALUES
(10, 'test10@myemail.com', '$2y$10$xMEEAycxLgiljonZvl/odO4NFn5l7cuLNdl3V.j70fE.CT/Jkk/62', 'Leo', 'Jackson'),
(11, 'Test', '$2y$10$1ppC7WWpY9ukbzM1XaTJH.ekYdupKJ.shP.IMEqA7n9JZMrHFrly6', 'John', 'Smith'),
(14, 'test12@myemail.com', '$2y$10$bLyro3KuHEgC1fST0hq/eOs3Y6EQ1PyRKo/9Rt2c4oXcAfupgUUmK', 'Jane', 'Smith'),
(15, 'jsmith@test.com', '$2y$10$cfwpf8pnmGkp9jpIfoQvmOt2kYCEZVyoH/0O4fuOBseQ8NizI.uXK', 'Jane', 'Smith');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `DestinationID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`DestinationID`, `Name`) VALUES
(1, 'Antarctica'),
(2, 'Argentina'),
(3, 'Australia'),
(4, 'Canada'),
(5, 'Iceland'),
(6, 'New Zealand'),
(7, 'Norway'),
(8, 'South Georgia Island'),
(9, 'The Falkland Islands'),
(10, 'United States of America');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `PackageID` int(11) NOT NULL,
  `DestinationID` int(11) NOT NULL,
  `ThemeID` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `CostPerPerson` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`PackageID`, `DestinationID`, `ThemeID`, `StartDate`, `EndDate`, `Description`, `CostPerPerson`) VALUES
(1, 2, 4, '2021-06-01', '2021-08-31', 'Southern Classic: Visit some of the most jaw-dropping locations of the Southern Hemisphere as you trek into the backcountry along the spine of Argentina\'s far south. Enjoy the “Paris of South America,” Buenos Aires, before flying over Patagonia to Ushuaia, the southernmost city in the world. Explore Patagonia for a range of outdoor activities and wildlife. Pick from a range of hikes with stunning views of Mt. Fitz Roy and Cerro Torre. Hikes in this region are challenging but rewarding and will test your body and lungs. Gear up for an ice trek on a famous glacier that is actually advancing. In between picturesque hikes and treks, you\'ll see exotic wildlife, and unique cultures located on the edge of the world. On the itinerary are two national parks : Tierra del Fuego and Los Glaciares - where you’ll discover the southern light show like no other - amid low plunging valleys, glacial lakes and flowing rivers, and panoramic views that are sure to forever be treasured memories.', 500),
(2, 2, 1, '2021-07-01', '2021-11-30', 'Southern Classic: Visit some of the most jaw-dropping locations of the Southern Hemisphere as you trek into the backcountry along the spine of Argentina\'s far south. Enjoy the “Paris of South America,” Buenos Aires, before flying over Patagonia to Ushuaia, the southernmost city in the world. Explore Patagonia for a range of outdoor activities and wildlife. Pick from a range of hikes with stunning views of Mt. Fitz Roy and Cerro Torre. Hikes in this region are challenging but rewarding and will test your body and lungs. Gear up for an ice trek on a famous glacier that is actually advancing. In between picturesque hikes and treks, you\'ll see exotic wildlife, and unique cultures located on the edge of the world. On the itinerary are two national parks : Tierra del Fuego and Los Glaciares - where you’ll discover the southern light show like no other - amid low plunging valleys, glacial lakes and flowing rivers, and panoramic views that are sure to forever be treasured memories.', 600),
(3, 2, 2, '2021-12-01', '2022-03-31', 'Southern Classic: Visit some of the most jaw-dropping locations of the Southern Hemisphere as you trek into the backcountry along the spine of Argentina\'s far south. Enjoy the “Paris of South America,” Buenos Aires, before flying over Patagonia to Ushuaia, the southernmost city in the world. Explore Patagonia for a range of outdoor activities and wildlife. Pick from a range of hikes with stunning views of Mt. Fitz Roy and Cerro Torre. Hikes in this region are challenging but rewarding and will test your body and lungs. Gear up for an ice trek on a famous glacier that is actually advancing. In between picturesque hikes and treks, you\'ll see exotic wildlife, and unique cultures located on the edge of the world. On the itinerary are two national parks : Tierra del Fuego and Los Glaciares - where you’ll discover the southern light show like no other - amid low plunging valleys, glacial lakes and flowing rivers, and panoramic views that are sure to forever be treasured memories.', 700),
(4, 1, 3, '2022-01-01', '2022-04-30', 'The Mystic Continent: Discover the magic and wonder of Buenos Aires, Ushuaia and the “White Continent” – Antarctica. Enjoy the “Paris of South America,” Buenos Aires, before flying over Patagonia to Ushuaia, the southernmost city in the world. Begin your Antarctic expedition aboard the fully equipped National Geographic Explorer by crossing the Drake Passage. Antarctica is the quintessential spot for viewing the aurora australis in all its brilliant glory, and the entire continent is privy to the splendor of the lights - as you do so, you can also explore vistas of blue-white glaciers and busy penguin rookeries. See breaching whales crashing and scenes of pure ice walls. Explore populations of penguins, seals, and humpback whales, and join a National Geographic photographer for photo tips during your close encounters with Gentoo penguins. Feel the glacial ice crunch as your expedition ship makes its way through a pack of ice with its hull strengthened to “ice class.” Return to Buenos Aires for an evening before departing home.', 1000),
(5, 1, 4, '2021-06-01', '2021-08-31', 'The Mystic Continent: Discover the magic and wonder of Buenos Aires, Ushuaia and the “White Continent” – Antarctica. Enjoy the “Paris of South America,” Buenos Aires, before flying over Patagonia to Ushuaia, the southernmost city in the world. Begin your Antarctic expedition aboard the fully equipped National Geographic Explorer by crossing the Drake Passage. Antarctica is the quintessential spot for viewing the aurora australis in all its brilliant glory, and the entire continent is privy to the splendor of the lights - as you do so, you can also explore vistas of blue-white glaciers and busy penguin rookeries. See breaching whales crashing and scenes of pure ice walls. Explore populations of penguins, seals, and humpback whales, and join a National Geographic photographer for photo tips during your close encounters with Gentoo penguins. Feel the glacial ice crunch as your expedition ship makes its way through a pack of ice with its hull strengthened to “ice class.” Return to Buenos Aires for an evening before departing home.', 1200),
(6, 1, 1, '2021-06-01', '2021-08-31', 'The Mystic Continent: Discover the magic and wonder of Buenos Aires, Ushuaia and the “White Continent” – Antarctica. Enjoy the “Paris of South America,” Buenos Aires, before flying over Patagonia to Ushuaia, the southernmost city in the world. Begin your Antarctic expedition aboard the fully equipped National Geographic Explorer by crossing the Drake Passage. Antarctica is the quintessential spot for viewing the aurora australis in all its brilliant glory, and the entire continent is privy to the splendor of the lights - as you do so, you can also explore vistas of blue-white glaciers and busy penguin rookeries. See breaching whales crashing and scenes of pure ice walls. Explore populations of penguins, seals, and humpback whales, and join a National Geographic photographer for photo tips during your close encounters with Gentoo penguins. Feel the glacial ice crunch as your expedition ship makes its way through a pack of ice with its hull strengthened to “ice class.” Return to Buenos Aires for an evening before departing home.', 1400),
(7, 3, 2, '2021-06-01', '2021-08-31', 'The Great Down Under: It’s easy to lose your train of thought on this all-encompassing tour through Australia -  especially when it includes world-class cities, extraordinary scenery, unique wildlife, and an incredible overnight rail journey on the legendary Ghan train - an exhilarating crossing through the heart of the Australian Outback to the tropical coast of the Northern Territory. This over-the-top Down Under trip also includes an outback barbecue in the Red Center, a jumping crocodile cruise in Darwin, and a snorkeling excursion at the Great Barrier Reef. Make your way to Bruny Island off the coast of Tasmania for the chance to witness Mother Nature cast her magical aurora australis across the night skies. Enjoy warm drinks and treats and learn how to take the perfect photograph of the lights dancing across the horizon. Spectacular!', 500),
(8, 3, 3, '2021-06-01', '2021-08-31', 'The Great Down Under: It’s easy to lose your train of thought on this all-encompassing tour through Australia -  especially when it includes world-class cities, extraordinary scenery, unique wildlife, and an incredible overnight rail journey on the legendary Ghan train - an exhilarating crossing through the heart of the Australian Outback to the tropical coast of the Northern Territory. This over-the-top Down Under trip also includes an outback barbecue in the Red Center, a jumping crocodile cruise in Darwin, and a snorkeling excursion at the Great Barrier Reef. Make your way to Bruny Island off the coast of Tasmania for the chance to witness Mother Nature cast her magical aurora australis across the night skies. Enjoy warm drinks and treats and learn how to take the perfect photograph of the lights dancing across the horizon. Spectacular!', 600),
(9, 3, 1, '2021-06-01', '2021-08-31', 'The Great Down Under: It’s easy to lose your train of thought on this all-encompassing tour through Australia -  especially when it includes world-class cities, extraordinary scenery, unique wildlife, and an incredible overnight rail journey on the legendary Ghan train - an exhilarating crossing through the heart of the Australian Outback to the tropical coast of the Northern Territory. This over-the-top Down Under trip also includes an outback barbecue in the Red Center, a jumping crocodile cruise in Darwin, and a snorkeling excursion at the Great Barrier Reef. Make your way to Bruny Island off the coast of Tasmania for the chance to witness Mother Nature cast her magical aurora australis across the night skies. Enjoy warm drinks and treats and learn how to take the perfect photograph of the lights dancing across the horizon. Spectacular!', 700),
(10, 4, 1, '2021-10-01', '2022-03-31', 'The Magnificent Northwest Passage: The icy and labyrinthine channels of the legendary Northwest Passage have enchanted explorers and adventurers for centuries. Get a glimpse into the world that captivated early explorers such as Franklin, Amundsen and Larsen by exploring the fabled Northwest Passage. Visit the final resting places of some of the explorers to have ventured here and experience the archipelago of islands and channels that form Canada’s High Arctic region. Along the way, meet local indigenous people who call this remote wilderness home, and encounter enigmatic Arctic wildlife - including walrus, beluga whale, polar bear, musk ox and the elusive narwhal. Pack ice always threatens to halt voyages through the passage, adding a compelling element of adventure that is integral to any genuine expedition. But at the Aurora Village on the Ingraham Trail is where you’ll see see why the place is wildly regarded to be the best in the world to see the Northern Lights. Watch in the warmth and the comfort of your teepee as the brilliantly beautiful Auroras dance across the northern sky!', 500),
(11, 4, 2, '2021-10-01', '2022-03-31', 'The Magnificent Northwest Passage: The icy and labyrinthine channels of the legendary Northwest Passage have enchanted explorers and adventurers for centuries. Get a glimpse into the world that captivated early explorers such as Franklin, Amundsen and Larsen by exploring the fabled Northwest Passage. Visit the final resting places of some of the explorers to have ventured here and experience the archipelago of islands and channels that form Canada’s High Arctic region. Along the way, meet local indigenous people who call this remote wilderness home, and encounter enigmatic Arctic wildlife - including walrus, beluga whale, polar bear, musk ox and the elusive narwhal. Pack ice always threatens to halt voyages through the passage, adding a compelling element of adventure that is integral to any genuine expedition. But at the Aurora Village on the Ingraham Trail is where you’ll see see why the place is wildly regarded to be the best in the world to see the Northern Lights. Watch in the warmth and the comfort of your teepee as the brilliantly beautiful Auroras dance across the northern sky!', 600),
(12, 4, 3, '2021-10-01', '2022-03-31', 'The Magnificent Northwest Passage: The icy and labyrinthine channels of the legendary Northwest Passage have enchanted explorers and adventurers for centuries. Get a glimpse into the world that captivated early explorers such as Franklin, Amundsen and Larsen by exploring the fabled Northwest Passage. Visit the final resting places of some of the explorers to have ventured here and experience the archipelago of islands and channels that form Canada’s High Arctic region. Along the way, meet local indigenous people who call this remote wilderness home, and encounter enigmatic Arctic wildlife - including walrus, beluga whale, polar bear, musk ox and the elusive narwhal. Pack ice always threatens to halt voyages through the passage, adding a compelling element of adventure that is integral to any genuine expedition. But at the Aurora Village on the Ingraham Trail is where you’ll see see why the place is wildly regarded to be the best in the world to see the Northern Lights. Watch in the warmth and the comfort of your teepee as the brilliantly beautiful Auroras dance across the northern sky!', 700),
(13, 4, 4, '2021-10-01', '2022-03-31', 'The Magnificent Northwest Passage: The icy and labyrinthine channels of the legendary Northwest Passage have enchanted explorers and adventurers for centuries. Get a glimpse into the world that captivated early explorers such as Franklin, Amundsen and Larsen by exploring the fabled Northwest Passage. Visit the final resting places of some of the explorers to have ventured here and experience the archipelago of islands and channels that form Canada’s High Arctic region. Along the way, meet local indigenous people who call this remote wilderness home, and encounter enigmatic Arctic wildlife - including walrus, beluga whale, polar bear, musk ox and the elusive narwhal. Pack ice always threatens to halt voyages through the passage, adding a compelling element of adventure that is integral to any genuine expedition. But at the Aurora Village on the Ingraham Trail is where you’ll see see why the place is wildly regarded to be the best in the world to see the Northern Lights. Watch in the warmth and the comfort of your teepee as the brilliantly beautiful Auroras dance across the northern sky!', 800),
(14, 5, 3, '2021-10-01', '2022-03-31', 'Land of Fire & Ice Treks: Isolated. Beautiful. Diverse. There are a lot of words to describe the rich nation of Iceland. From bubbling hot springs and snow-capped mountains to red-hot volcanoes and rushing waterfalls, it seems like everything in Iceland is constantly moving and flowing – it’s not called “the land of fire and ice” for nothing! The challenge of the intense, yet stunning Icelandic landscape allows for an exploration the streets of Reykjavik, the world’s most northerly capital, as it does for escaping city life and witnessing Mother Nature at work in the ever-changing Icelandic wilderness. Where you choose to climb Mount Hekla, an active volcano or tour floating icebergs and glaciers in Fjallsárlón, you’re totally immersed in Iceland’s spectacular backdrop. Travel to the serene Westfjords or North Iceland where longer hours of darkness and statistically less frequent cloud cover offer great opportunities to see the famed Northern lights of Iceland', 600),
(15, 5, 1, '2021-06-01', '2022-03-31', 'Land of Fire & Ice Treks: Isolated. Beautiful. Diverse. There are a lot of words to describe the rich nation of Iceland. From bubbling hot springs and snow-capped mountains to red-hot volcanoes and rushing waterfalls, it seems like everything in Iceland is constantly moving and flowing – it’s not called “the land of fire and ice” for nothing! The challenge of the intense, yet stunning Icelandic landscape allows for an exploration the streets of Reykjavik, the world’s most northerly capital, as it does for escaping city life and witnessing Mother Nature at work in the ever-changing Icelandic wilderness. Where you choose to climb Mount Hekla, an active volcano or tour floating icebergs and glaciers in Fjallsárlón, you’re totally immersed in Iceland’s spectacular backdrop. Travel to the serene Westfjords or North Iceland where longer hours of darkness and statistically less frequent cloud cover offer great opportunities to see the famed Northern lights of Iceland', 800),
(16, 6, 1, '2021-07-01', '2021-09-30', 'The Glows of the South: From geothermal springs and ice fields to stunning fjords and Maori culture, experience New Zealand at its finest best. Visit the “Home of Middle Earth”, with a visit to the Hobbiton Movie Set, featured in The Lord of the Rings and The Hobbit films. Discovering the sun-soaked Bay of Islands and stand in awe of the giant kauri tree. Admire the ice fields and glaciers surrounding Mt. Cook and stay in Dunedin, a little slice of Scotland in the South Pacific. Cruise Milford Sound in dramatic Fiordland and savor a captivating stay in Queenstown, the “Adventure Capital of the World” - the place that pioneered iconic experiences from bungy jumping and tandem skydiving, to river surfing, canyon swinging and speeding through our surrounds by jet boat. But that’s also where the winter skies blur from magenta pink to neon green here, with deep purples and enchanting glowy rays to exhibit the splendor of Aurora australis! The vibrant lifestyle of the these islands awaits you.', 700),
(17, 6, 2, '2021-06-01', '2021-09-30', 'The Glows of the South: From geothermal springs and ice fields to stunning fjords and Maori culture, experience New Zealand at its finest best. Visit the “Home of Middle Earth”, with a visit to the Hobbiton Movie Set, featured in The Lord of the Rings and The Hobbit films. Discovering the sun-soaked Bay of Islands and stand in awe of the giant kauri tree. Admire the ice fields and glaciers surrounding Mt. Cook and stay in Dunedin, a little slice of Scotland in the South Pacific. Cruise Milford Sound in dramatic Fiordland and savor a captivating stay in Queenstown, the “Adventure Capital of the World” - the place that pioneered iconic experiences from bungy jumping and tandem skydiving, to river surfing, canyon swinging and speeding through our surrounds by jet boat. But that’s also where the winter skies blur from magenta pink to neon green here, with deep purples and enchanting glowy rays to exhibit the splendor of Aurora australis! The vibrant lifestyle of the these islands awaits you.', 800),
(18, 6, 3, '2021-06-01', '2021-09-30', 'The Glows of the South: From geothermal springs and ice fields to stunning fjords and Maori culture, experience New Zealand at its finest best. Visit the “Home of Middle Earth”, with a visit to the Hobbiton Movie Set, featured in The Lord of the Rings and The Hobbit films. Discovering the sun-soaked Bay of Islands and stand in awe of the giant kauri tree. Admire the ice fields and glaciers surrounding Mt. Cook and stay in Dunedin, a little slice of Scotland in the South Pacific. Cruise Milford Sound in dramatic Fiordland and savor a captivating stay in Queenstown, the “Adventure Capital of the World” - the place that pioneered iconic experiences from bungy jumping and tandem skydiving, to river surfing, canyon swinging and speeding through our surrounds by jet boat. But that’s also where the winter skies blur from magenta pink to neon green here, with deep purples and enchanting glowy rays to exhibit the splendor of Aurora australis! The vibrant lifestyle of the these islands awaits you.', 900),
(19, 7, 1, '2021-09-01', '2022-03-31', 'The Coastline from Eutopia: Venture to a place where the crashing ocean meets craggy mountains, forging the awe-inspiring majesty of the Norwegian fjords. Start in Oslo, where ancient history greets you at the famous Fram Museum. Journey on one of the world’s steepest train rides, the legendary Flåm Railway, past rushing waterfalls, looming mountains, and picturesque valleys. Relax in the Norwegian countryside, where you’ll wake up amongst breathtaking mountain vistas and fjords. See the northern lights ripple across the sky and bounce off the water in the Lofoten Islands - a magical experience that will create memories that will live with you for the rest of your life. Go deep into the heart of the fjords to the Briksdal Glacier. Cruise the crystal waters of the Geirangerfjord. Walk the ancient streets of Bergen’s trading port. From Oslo to Bergen, you’ll be awestruck by the grandeur of Norway.', 500),
(20, 7, 2, '2021-09-01', '2022-03-31', 'The Coastline from Eutopia: Venture to a place where the crashing ocean meets craggy mountains, forging the awe-inspiring majesty of the Norwegian fjords. Start in Oslo, where ancient history greets you at the famous Fram Museum. Journey on one of the world’s steepest train rides, the legendary Flåm Railway, past rushing waterfalls, looming mountains, and picturesque valleys. Relax in the Norwegian countryside, where you’ll wake up amongst breathtaking mountain vistas and fjords. See the northern lights ripple across the sky and bounce off the water in the Lofoten Islands - a magical experience that will create memories that will live with you for the rest of your life. Go deep into the heart of the fjords to the Briksdal Glacier. Cruise the crystal waters of the Geirangerfjord. Walk the ancient streets of Bergen’s trading port. From Oslo to Bergen, you’ll be awestruck by the grandeur of Norway.', 600),
(21, 7, 3, '2021-10-01', '2022-03-31', 'The Coastline from Eutopia: Venture to a place where the crashing ocean meets craggy mountains, forging the awe-inspiring majesty of the Norwegian fjords. Start in Oslo, where ancient history greets you at the famous Fram Museum. Journey on one of the world’s steepest train rides, the legendary Flåm Railway, past rushing waterfalls, looming mountains, and picturesque valleys. Relax in the Norwegian countryside, where you’ll wake up amongst breathtaking mountain vistas and fjords. See the northern lights ripple across the sky and bounce off the water in the Lofoten Islands - a magical experience that will create memories that will live with you for the rest of your life. Go deep into the heart of the fjords to the Briksdal Glacier. Cruise the crystal waters of the Geirangerfjord. Walk the ancient streets of Bergen’s trading port. From Oslo to Bergen, you’ll be awestruck by the grandeur of Norway.', 700),
(22, 8, 3, '2021-06-01', '2021-09-30', 'The Austral Frontier: Few places compare to South Georgia in terms of exotic wildlife and jaw-dropping scenery. On this exploratory voyage you can enjoy both, possibly touring the world’s largest black-browed albatross colony while also seeing some of the biggest breeding spots for king penguins and elephant seals on Earth. Explore St. Andrews Bay where the birds huddle together under snow-dusted mountains encapsulating the bay, creating a sea of black and white, peppered with flashes of bright orange, as far as the eye can see - and night skies with brilliant swirls of the magnificent auras. You’ll have the chance to roam secluded beaches littered with basking elephant seal. Wonder at the size of wandering albatross and marvel at the strength of the mighty elephant seals. South Georgia is a photographer’s paradise, full of extraordinary wildlife experiences.', 500),
(23, 8, 4, '2021-06-01', '2021-09-30', 'The Austral Frontier: Few places compare to South Georgia in terms of exotic wildlife and jaw-dropping scenery. On this exploratory voyage you can enjoy both, possibly touring the world’s largest black-browed albatross colony while also seeing some of the biggest breeding spots for king penguins and elephant seals on Earth. Explore St. Andrews Bay where the birds huddle together under snow-dusted mountains encapsulating the bay, creating a sea of black and white, peppered with flashes of bright orange, as far as the eye can see - and night skies with brilliant swirls of the magnificent auras. You’ll have the chance to roam secluded beaches littered with basking elephant seal. Wonder at the size of wandering albatross and marvel at the strength of the mighty elephant seals. South Georgia is a photographer’s paradise, full of extraordinary wildlife experiences.', 700),
(24, 9, 4, '2021-06-01', '2021-09-30', 'End of the World, The Start of a Journey: This Falkland Islands tour is an animal-lover’s dream come true. The expedition explores one of the last untamed areas on Earth - a land of ruggedly beautiful landscapes and amazingly varied wildlife. Discover an otherworldly landscape of pristine white beaches of the East Falklands, where you’ll also be surrounded by snow-capped mountain peaks and turquoise blue waters that are home to a diverse range of polar wildlife. Of course, this off-the-beaten-path landscape also offers out-of-this-world views of the Southern lights! The Falkland Islands boast an impressive array of wildlife. Penguins, including the rockhopper and the macaroni roam the shorelines, as elephant seals and sea lions bask on sandy beaches. Head to Carcass Island to catch a glimpse of gentoo and magellanic penguin and perhaps a pod of inquisitive dolphin. For an adventure holiday that’s anything but ordinary, join a polar expedition to the Falkland Islands!', 800),
(25, 9, 3, '2021-06-01', '2021-09-30', 'End of the World, The Start of a Journey: This Falkland Islands tour is an animal-lover’s dream come true. The expedition explores one of the last untamed areas on Earth - a land of ruggedly beautiful landscapes and amazingly varied wildlife. Discover an otherworldly landscape of pristine white beaches of the East Falklands, where you’ll also be surrounded by snow-capped mountain peaks and turquoise blue waters that are home to a diverse range of polar wildlife. Of course, this off-the-beaten-path landscape also offers out-of-this-world views of the Southern lights! The Falkland Islands boast an impressive array of wildlife. Penguins, including the rockhopper and the macaroni roam the shorelines, as elephant seals and sea lions bask on sandy beaches. Head to Carcass Island to catch a glimpse of gentoo and magellanic penguin and perhaps a pod of inquisitive dolphin. For an adventure holiday that’s anything but ordinary, join a polar expedition to the Falkland Islands!', 1000),
(26, 9, 1, '2021-06-01', '2021-09-30', 'End of the World, The Start of a Journey: This Falkland Islands tour is an animal-lover’s dream come true. The expedition explores one of the last untamed areas on Earth - a land of ruggedly beautiful landscapes and amazingly varied wildlife. Discover an otherworldly landscape of pristine white beaches of the East Falklands, where you’ll also be surrounded by snow-capped mountain peaks and turquoise blue waters that are home to a diverse range of polar wildlife. Of course, this off-the-beaten-path landscape also offers out-of-this-world views of the Southern lights! The Falkland Islands boast an impressive array of wildlife. Penguins, including the rockhopper and the macaroni roam the shorelines, as elephant seals and sea lions bask on sandy beaches. Head to Carcass Island to catch a glimpse of gentoo and magellanic penguin and perhaps a pod of inquisitive dolphin. For an adventure holiday that’s anything but ordinary, join a polar expedition to the Falkland Islands!', 500),
(27, 10, 2, '2021-10-01', '2022-03-31', 'Lights of the Last Frontier: Alaska - the land without parallels. Experience a winter glacier tour among drifting icebergs and unparalleled views of Denali and the Alaskan Range. Step into another time at the Antique Auto Museum, where vintage cars sit between timely artifacts and fashionable designer dresses. Journey through America’s last great frontier to discover awe-inspiring beauty, inviting locals, and rich cultural heritage. Meet mushers and the dogs of the Trail Breaker Kennel. Travel the scenic Alaska Railroad from Fairbanks to Denali in a domed railcar. Head deep into Denali National Park on a full-day Tundra Wilderness Tour. Experience small-town Alaskan life in Talkeetna. Meet new furry friends at Musk Ox Farm. Visit the Alaska Native Heritage Center to delve into the region’s indigenous culture. Search for the northern lights in Fairbanks’ star-filled sky, where thanks to the region’s long hours of winter darkness and location under the so-called aurora oval - a zone known for its intense aurora activity - this this tour gives you better than average odds of spotting the northern lights. ', 500),
(28, 10, 3, '2021-10-01', '2022-03-31', 'Lights of the Last Frontier: Alaska - the land without parallels. Experience a winter glacier tour among drifting icebergs and unparalleled views of Denali and the Alaskan Range. Step into another time at the Antique Auto Museum, where vintage cars sit between timely artifacts and fashionable designer dresses. Journey through America’s last great frontier to discover awe-inspiring beauty, inviting locals, and rich cultural heritage. Meet mushers and the dogs of the Trail Breaker Kennel. Travel the scenic Alaska Railroad from Fairbanks to Denali in a domed railcar. Head deep into Denali National Park on a full-day Tundra Wilderness Tour. Experience small-town Alaskan life in Talkeetna. Meet new furry friends at Musk Ox Farm. Visit the Alaska Native Heritage Center to delve into the region’s indigenous culture. Search for the northern lights in Fairbanks’ star-filled sky, where thanks to the region’s long hours of winter darkness and location under the so-called aurora oval - a zone known for its intense aurora activity - this this tour gives you better than average odds of spotting the northern lights. ', 600),
(29, 10, 4, '2021-10-01', '2022-03-31', 'Lights of the Last Frontier: Alaska - the land without parallels. Experience a winter glacier tour among drifting icebergs and unparalleled views of Denali and the Alaskan Range. Step into another time at the Antique Auto Museum, where vintage cars sit between timely artifacts and fashionable designer dresses. Journey through America’s last great frontier to discover awe-inspiring beauty, inviting locals, and rich cultural heritage. Meet mushers and the dogs of the Trail Breaker Kennel. Travel the scenic Alaska Railroad from Fairbanks to Denali in a domed railcar. Head deep into Denali National Park on a full-day Tundra Wilderness Tour. Experience small-town Alaskan life in Talkeetna. Meet new furry friends at Musk Ox Farm. Visit the Alaska Native Heritage Center to delve into the region’s indigenous culture. Search for the northern lights in Fairbanks’ star-filled sky, where thanks to the region’s long hours of winter darkness and location under the so-called aurora oval - a zone known for its intense aurora activity - this this tour gives you better than average odds of spotting the northern lights. \r\n', 700);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ReviewID` int(11) NOT NULL,
  `BookingID` int(11) NOT NULL,
  `ReviewDate` datetime NOT NULL DEFAULT current_timestamp(),
  `Rating` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ReviewID`, `BookingID`, `ReviewDate`, `Rating`, `Title`, `Comments`) VALUES
(29, 2, '0000-00-00 00:00:00', 5, 'Our Trip To Iceland', 'This is what we thought about Iceland and the polar lights.'),
(30, 1, '0000-00-00 00:00:00', 5, 'Antartica is beautiful this time of year', 'We loved our trip to Antartica. Don\'t forget to pack several layers of clothing. It was a truly unforgettable experience.'),
(51, 5, '2021-11-13 00:00:00', 3, 'Testing review', 'This is a review for Argentina.'),
(52, 6, '2021-11-13 14:08:33', 5, 'Testing date', 'Testing date review');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `ThemeID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`ThemeID`, `Name`) VALUES
(1, 'Adventure & Outdoors'),
(2, 'Heritage & Culture'),
(3, 'Nature & Landscapes'),
(4, 'Wildlife & Safaris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `PackageID` (`PackageID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`DestinationID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`PackageID`),
  ADD KEY `DestinationID` (`DestinationID`),
  ADD KEY `ThemeID` (`ThemeID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ReviewID`),
  ADD KEY `BookingID` (`BookingID`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`ThemeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `DestinationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `PackageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `ThemeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`PackageID`) REFERENCES `package` (`PackageID`);

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`DestinationID`) REFERENCES `destination` (`DestinationID`),
  ADD CONSTRAINT `package_ibfk_2` FOREIGN KEY (`ThemeID`) REFERENCES `theme` (`ThemeID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`BookingID`) REFERENCES `booking` (`BookingID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
