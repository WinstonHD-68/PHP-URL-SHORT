-- Create the database
CREATE DATABASE urls;
-- Use the database
USE urls;
-- Create the table
CREATE TABLE urls_table (
    ID INT AUTO_INCREMENT PRIMARY KEY, -- Auto-incrementing ID
    url_long VARCHAR(255) NOT NULL,    -- Long URL
    url_short VARCHAR(255) NOT NULL    -- Short URL
);
