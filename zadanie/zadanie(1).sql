CREATE TABLE `druh_prace` (
  `id_typ` int(10) NOT NULL,
  `Skratka` varchar(2) NOT NULL,
  `cely_nazov` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `druh_prace` (`id_typ`, `Skratka`, `cely_nazov`) VALUES
(1, 'BP', 'Bakalarska praca'),
(2, 'DP', 'Diplomova praca'),
(3, 'DP', 'Dizertacna praca');


CREATE TABLE `odbor` (
  `id_odboru` int(11) NOT NULL,
  `nazovOdb` varchar(100) NOT NULL,
  `skratka` varchar(10) NOT NULL,
  `stupen` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `odbor` (`id_odboru`, `nazovOdb`, `skratka`, `stupen`) VALUES
(1, 'Aplikovaná informatika a automatizácia v priemysle', 'B-AIA', '1'),
(2, 'Integrovaná bezpečnosť', 'B-IBE', '1'),
(3, 'Kvalita produkcie', 'B-KPR', '1'),
(4, 'Materiálové inžinierstvo', 'B-MI', '1'),
(5, 'Mechatronika v technologických zariadeniach', 'B-MTTZ', '1'),
(6, 'Personálna práca v priemyselnom podniku', 'B-PPP', '1'),
(7, 'Počítačová podpora výrobných technológií', 'B-PPT', '1'),
(8, 'Priemyselné manažérstvo', 'B-PMA', '1'),
(9, 'Výrobné technológie', 'B-VTE', '1'),
(10, 'Výrobné technológie a výrobný manažment', 'B-VTVM', '1'),
(11, 'Výrobné zariadenia a systémy', 'B-VZS', '1'),
(12, 'Automatizácia a informatizácia procesov v priemysle', 'I-AIPP', '2'),
(13, 'Integrovaná bezpečnosť', 'I-IBE', '2'),
(14, 'Materiálové inžinierstvo', 'I-MI', '2'),
(15, 'Obrábanie a tvárnenie', 'I-OAT', '2'),
(16, 'Personálna práca v priemyselnom podniku', 'I-PPP', '2'),
(17, 'Počítačová podpora návrhu a výroby', 'I-PPN', '2'),
(18, 'Priemyselné manažérstvo', 'I-PMA', '2'),
(19, 'Výrobné technológie a výrobný manažment', 'I-VTVM', '2'),
(20, 'Výrobné zariadenia a systémy', 'I-VZS', '2'),
(21, 'Zváranie a spájanie materiálov', 'I-ZASM', '2'),
(22, 'Automatizácia a informatizácia procesov', 'D-AAIP', '3'),
(23, 'Automatizácia a informatizácia procesov', 'D-AIP', '3'),
(24, 'Automatizácia a informatizácia procesov (v anglickom jazyku)', 'D-AAIPxA', '3'),
(25, 'Integrovaná bezpečnosť', 'D-IBE', '3'),
(26, 'Integrovaná bezpečnosť', 'D-INBE', '3'),
(27, 'Integrovaná bezpečnosť (v anglickom jazyku)', 'D-INBExA', '3'),
(28, 'Materiálové inžinierstvo', 'D-MI', '3'),
(29, 'Modelovanie a simulácia procesov', 'D-MASP', '3'),
(30, 'Modelovanie a simulácia procesov (v anglickom jazyku)', 'D-MASPxA', '3'),
(31, 'Personálna práca v priemyselnom podniku', 'D-PPPP', '3'),
(32, 'Personálna práca v priemyselnom podniku (v anglickom jazyku)', 'D-PPPPxA', '3'),
(33, 'Priemyselné manažérstvo', 'D-PMA', '3'),
(34, 'Priemyselné manažérstvo', 'D-PMAN', '3'),
(35, 'Priemyselné manažérstvo (v anglickom jazyku)', 'D-PMANxA', '3'),
(36, 'Progresívne materiály a materiálový dizajn', 'D-PMMD', '3'),
(37, 'Progresívne materiály a materiálový dizajn (v anglickom jazyku)', 'D-PMMDxA', '3'),
(38, 'Strojárske technológie a materiály', 'D-STAM', '3'),
(39, 'Strojárske technológie a materiály', 'D-STM', '3'),
(40, 'Výrobné zariadenia a systémy', 'D-VZAS', '3'),
(41, 'Výrobné zariadenia a systémy (v anglickom jazyku)', 'D-VZASxA', '3');


CREATE TABLE `student` (
  `id` int(20) NOT NULL,
  `meno` varchar(50) NOT NULL,
  `priezvisko` varchar(150) NOT NULL,
  `odbor` int(30) NOT NULL,
  `id_prace` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `student` (`id`, `meno`, `priezvisko`, `odbor`, `id_prace`) VALUES
(4, 'Marcel', 'Kostolansky', 1, 2),
(5, 'Maros', 'Dete', 1, 6),
(6, 'Marcel', 'Kosty', 1, NULL),
(9, 'Marcel', 'KOsty', 3, NULL),
(11, 'marcel', 'Kostolansky', 6, NULL),
(12, 'marcel', 'Kostolansky', 6, NULL),
(25, 'Samuel', 'Domim', 1, NULL);


CREATE TABLE `zaverecna_praca` (
  `id_prace` int(50) NOT NULL,
  `Nazov` varchar(150) NOT NULL,
  `Autor` int(40) DEFAULT NULL,
  `Veduci` varchar(40) NOT NULL,
  `druh_prace` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `zaverecna_praca` (`id_prace`, `Nazov`, `Autor`, `Veduci`, `druh_prace`) VALUES
(1, 'MOTOR', 1, 'doc. Ing. Maximilian Stremy PhD.', 1),
(2, 'MOTOR', NULL, 'doc. Ing. Maximilian Stremy PhD.', 1),
(3, 'MOTOR', NULL, 'doc. Ing. Maximilian Stremy PhD.', 2),
(4, 'MOTOR', NULL, 'doc. Ing. Maximilian Stremy PhD.', 3),
(5, 'Motor', NULL, 'Ing. Dusan Horvath PhD.', 1),
(6, 'TRESKA', 5, 'doc. Ing. Maximilian Stremy PhD.', 1);


ALTER TABLE `druh_prace`
  ADD PRIMARY KEY (`id_typ`);


ALTER TABLE `odbor`
  ADD PRIMARY KEY (`id_odboru`);


ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `odbor` (`odbor`),
  ADD KEY `zav_praca` (`id_prace`);


ALTER TABLE `zaverecna_praca`
  ADD PRIMARY KEY (`id_prace`);


ALTER TABLE `druh_prace`
  MODIFY `id_typ` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


ALTER TABLE `odbor`
  MODIFY `id_odboru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;


ALTER TABLE `student`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;


ALTER TABLE `zaverecna_praca`
  MODIFY `id_prace` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


ALTER TABLE `student`
  ADD CONSTRAINT `odbor` FOREIGN KEY (`odbor`) REFERENCES `zaverecna_praca` (`id_prace`),
  ADD CONSTRAINT `zav_praca` FOREIGN KEY (`id_prace`) REFERENCES `zaverecna_praca` (`id_prace`);


ALTER TABLE `zaverecna_praca`
  ADD CONSTRAINT `praca` FOREIGN KEY (`druh_prace`) REFERENCES `druh_prace` (`id_typ`);
COMMIT;
