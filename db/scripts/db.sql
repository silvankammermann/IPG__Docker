USE mysql;

-- Create table
CREATE TABLE important_cat_images (
    id INT NOT NULL AUTO_INCREMENT,
    description VARCHAR(511) NOT NULL,
    source VARCHAR(1023) NOT NULL,
    PRIMARY KEY (id)
);

-- Populate table
INSERT INTO important_cat_images (description, source) VALUES ('Angry as fuk', 'https://i.kym-cdn.com/photos/images/newsfeed/001/511/534/876.png');
INSERT INTO important_cat_images (description, source) VALUES ('oo', 'https://i.ytimg.com/vi/OIZqAOBJNOw/hqdefault.jpg'); 