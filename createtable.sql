
CREATE TABLE gamedb.player ( 
	id INT(11) PRIMARY KEY AUTO_INCREMENT, 
	name VARCHAR(50) NOT NULL, 
	score INT(11) NOT NULL
) ENGINE = InnoDB;

INSERT INTO gamedb.player (name, score) VALUES ('Andres', 1000);
INSERT INTO gamedb.player (name, score) VALUES ('Pepito', 500);
INSERT INTO gamedb.player (name, score) VALUES ('Manolo', 100);
INSERT INTO gamedb.player (name, score) VALUES ('Ana', 2000);
