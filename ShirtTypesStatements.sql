<<<<<<< HEAD
--Name: Samuel Olagoke
--Date: October 17, 2025
--Course: IT202-003
--Assignment: Phase02
--Email: sio6@njit.edu
-- Create the ShirtTypes table
CREATE TABLE ShirtTypes (
    ShirtTypeID       INT(11)        NOT NULL,
    ShirtTypeCode     VARCHAR(255)   NOT NULL UNIQUE,
    ShirtTypeName     VARCHAR(255)   NOT NULL,
    DateTimeCreated   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    DateTimeUpdated   TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (ShirtTypeID)
);

-- Insert initial data
INSERT INTO ShirtTypes (ShirtTypeID, ShirtTypeCode, ShirtTypeName)
VALUES
(100, 'Cotton', 'Oversized Cotton');

INSERT INTO ShirtTypes (ShirtTypeID, ShirtTypeCode, ShirtTypeName)
VALUES
(200, 'Polo', 'Classic Polo');

-- Add the new ShirtAisle column after ShirtTypeName
ALTER TABLE ShirtTypes
ADD COLUMN ShirtAisle INT(11) NOT NULL DEFAULT 0
AFTER ShirtTypeName;

-- Update existing rows with aisle numbers
UPDATE ShirtTypes
SET ShirtAisle = 5
WHERE ShirtTypeID = 100;

UPDATE ShirtTypes
SET ShirtAisle = 8
WHERE ShirtTypeID = 200;

-- View the final table
SELECT * FROM ShirtTypes;
=======

>>>>>>> c86cf1268849b26284b6e4749d7e1130b59bfd3d
