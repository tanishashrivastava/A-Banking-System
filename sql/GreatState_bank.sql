
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- CREATE DATABASE GreatState_bank;
-- USE GreatState_bank;
-- CREATE TABLE transaction (
--   sno int(3) NOT NULL,
--   sender text NOT NULL,
--   receiver text NOT NULL,
--   balance int(8) NOT NULL,
--   datetime datetime NOT NULL DEFAULT current_timestamp()
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table 'transaction'
--

CREATE TABLE 'transaction' (
  'sno' int(3) NOT NULL,
  'sender' text NOT NULL,
  'receiver' text NOT NULL,
  'balance' int(8) NOT NULL,
  'datetime' datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table 'users'
--

CREATE TABLE 'users' (
  'id' int(3) NOT NULL,
  'name' text NOT NULL,
  'email' varchar(30) NOT NULL,
  'balance' int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table 'users'
--

INSERT INTO 'users' ('id', 'name', 'email', 'balance') VALUES
(1, 'Abhimanyu', 'kapoor@gmail.com', 50000),
(2, 'Bella', 'advani@gmail.com', 30000),
(3, 'Chisthjen', 'shah@gmail.com', 40000),
(4, 'Dino', 'james@gmail.com', 5000),
(5, 'Gaurang', 'kapoor@gmail.com', 80000),
(6, 'Hetvi', 'patel@gmail.com', 6000),
(7, 'Izabelle', 'princess@gmail.com', 70000),
(8, 'Kevin', 'jishan@gmail.com', 40000),
(9, 'Leonardo', 'football@gmail.com', 10000),
(10, 'Manasvi', 'pannu@gmail.com', 90000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table 'transaction'
--
ALTER TABLE 'transaction'
  ADD PRIMARY KEY ('sno');

--
-- Indexes for table 'users'
--
ALTER TABLE 'users'
  ADD PRIMARY KEY ('id');

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table 'transaction'
--
ALTER TABLE 'transaction'
  MODIFY 'sno' int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table 'users'
--
ALTER TABLE 'users'
  MODIFY 'id' int(3) NOT NULL AUTO_INCREMENT;
COMMIT;


