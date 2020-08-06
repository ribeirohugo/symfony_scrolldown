/*Tabela city*/
CREATE TABLE city (
	id INT NOT NULL,
	PRIMARY KEY(id),
	name VARCHAR(250),
	id_country INT,
	country VARCHAR(250)
);

/*Tabela location*/
CREATE TABLE location (
	id INT NOT NULL,
	PRIMARY KEY(id),
	city INT,
	region INT,

	CONSTRAINT fk_location_city FOREIGN KEY (city) REFERENCES city(id)
);

/*Tabela property */
CREATE TABLE property (
	id INT NOT NULL,
	PRIMARY KEY(id),
	name VARCHAR(250),
	isFeatured TINYINT(1),
	location INT,
	lowestPricePerNight FLOAT
);

/*Tabela ratings*/
CREATE TABLE overall_rating (
	id INT NOT NULL,
	PRIMARY KEY(id),
	overall FLOAT,
	numberOfRatings INT,

	CONSTRAINT fk_rating_property FOREIGN KEY (id) REFERENCES property(id)
);

/*Tabela price*/
/*CREATE TABLE lowestPricePerNight (
	id INT NOT NULL,
	PRIMARY KEY(id),
	value FLOAT,
	currency VARCHAR(3),

	CONSTRAINT fk_price_property FOREIGN KEY (id) REFERENCES property(id)
);*/


