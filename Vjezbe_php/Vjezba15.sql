CREATE TABLE RegistForm
    (
        id INT NOT NULL AUTO_INCREMENT,
        FirstName VARCHAR(255),
        LastName VARCHAR(255),
        email VARCHAR(100) NOT NULL UNIQUE,
        username VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        country_id INT NOT NULL,
        date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        FOREIGN KEY (country_id) REFERENCES countries(id)
        ON DELETE CASCADE
    );