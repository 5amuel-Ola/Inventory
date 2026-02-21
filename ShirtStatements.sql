<<<<<<< HEAD
--Name: Samuel Olagoke
--Date: October 17, 2025
--Course: IT202-003
--Assignment: Phase02
--Email: sio6@njit.edu
-- Create the Shirts table 
CREATE TABLE Shirts (
    ShirtID               INT(11)        NOT NULL,
    ShirtCode             VARCHAR(10)    NOT NULL UNIQUE,
    ShirtName             VARCHAR(255)   NOT NULL,
    ShirtDescription      TEXT           NOT NULL,
    ShirtSeason           VARCHAR(100)   NOT NULL,
    ShirtSize             VARCHAR(100)   NOT NULL,
    ShirtTypeID           INT(11)        NOT NULL,
    ShirtWholesalePrice   DECIMAL(10,2)  NOT NULL,
    ShirtListPrice        DECIMAL(10,2)  NOT NULL,
    DateTimeCreated       TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    DateTimeUpdated       TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (ShirtID)
);

-- ===============================
-- ShirtTypeID = 100 (Flannel / Cotton Type)
-- ===============================
INSERT INTO Shirts
(ShirtID, ShirtCode, ShirtName, ShirtDescription, ShirtSeason, ShirtSize, ShirtTypeID, ShirtWholesalePrice, ShirtListPrice)
VALUES
(1000, 'FL100', 'Cotton Flannel', 
 'The Cotton Flannel is designed for cold weather and layered comfort over T-shirts.', 'Fall', 'Large', 100, 39.99, 69.99);

INSERT INTO Shirts
(ShirtID, ShirtCode, ShirtName, ShirtDescription, ShirtSeason, ShirtSize, ShirtTypeID, ShirtWholesalePrice, ShirtListPrice)
VALUES
(1001, 'FL101', 'Plaid Flannel', 
 'A plaid-patterned flannel shirt offering warmth and timeless fall style.', 'Winter', 'Medium', 100, 37.50, 65.00);

INSERT INTO Shirts
(ShirtID, ShirtCode, ShirtName, ShirtDescription, ShirtSeason, ShirtSize, ShirtTypeID, ShirtWholesalePrice, ShirtListPrice)
VALUES
(1002, 'FL102', 'Heavy Flannel Jacket', 
 'A heavyweight flannel shirt-jacket hybrid designed for extra warmth.', 'Winter', 'Large', 100, 45.00, 79.99);

INSERT INTO Shirts
(ShirtID, ShirtCode, ShirtName, ShirtDescription, ShirtSeason, ShirtSize, ShirtTypeID, ShirtWholesalePrice, ShirtListPrice)
VALUES
(1003, 'FL103', 'Soft Brushed Flannel', 
 'Made from brushed cotton for a soft feel, perfect for cool evenings.', 'Fall', 'Small', 100, 35.00, 59.99);

INSERT INTO Shirts
(ShirtID, ShirtCode, ShirtName, ShirtDescription, ShirtSeason, ShirtSize, ShirtTypeID, ShirtWholesalePrice, ShirtListPrice)
VALUES
(1004, 'FL104', 'Classic Flannel Shirt', 
 'A traditional flannel shirt with a button-down design and cozy fabric.', 'All-Season', 'Medium', 100, 33.75, 54.99);


-- ===============================
-- ShirtTypeID = 200 (Crew Neck Type)
-- ===============================
INSERT INTO Shirts
(ShirtID, ShirtCode, ShirtName, ShirtDescription, ShirtSeason, ShirtSize, ShirtTypeID, ShirtWholesalePrice, ShirtListPrice)
VALUES
(2000, 'CR200', 'Long Sleeve Crew Neck', 
 'A timeless long sleeve crew neck for layering or casual wear.', 'All-Season', 'Medium', 200, 25.00, 28.00);

INSERT INTO Shirts
(ShirtID, ShirtCode, ShirtName, ShirtDescription, ShirtSeason, ShirtSize, ShirtTypeID, ShirtWholesalePrice, ShirtListPrice)
VALUES
(2001, 'CR201', 'Classic Crew Tee', 
 'A soft, breathable crew neck T-shirt ideal for daily comfort.', 'Summer', 'Large', 200, 15.00, 27.00);

INSERT INTO Shirts
(ShirtID, ShirtCode, ShirtName, ShirtDescription, ShirtSeason, ShirtSize, ShirtTypeID, ShirtWholesalePrice, ShirtListPrice)
VALUES
(2002, 'CR202', 'Fitted Crew Neck', 
 'A modern, fitted crew neck shirt made from premium stretch cotton.', 'Spring', 'Small', 200, 18.50, 32.99);

INSERT INTO Shirts
(ShirtID, ShirtCode, ShirtName, ShirtDescription, ShirtSeason, ShirtSize, ShirtTypeID, ShirtWholesalePrice, ShirtListPrice)
VALUES
(2003, 'CR203', 'Thermal Crew Shirt', 
 'A thermal-lined crew neck shirt designed for cold-weather comfort.', 'Winter', 'Large', 200, 22.00, 38.99);

INSERT INTO Shirts
(ShirtID, ShirtCode, ShirtName, ShirtDescription, ShirtSeason, ShirtSize, ShirtTypeID, ShirtWholesalePrice, ShirtListPrice)
VALUES
(2004, 'CR204', 'Relaxed Fit Crew', 
 'A relaxed-fit crew shirt offering comfort and breathable cotton fabric.', 'All-Season', 'Medium', 200, 17.25, 29.99);


-- ===============================
-- ShirtTypeID = 300 (Polo Type)
-- ===============================
INSERT INTO Shirts
(ShirtID, ShirtCode, ShirtName, ShirtDescription, ShirtSeason, ShirtSize, ShirtTypeID, ShirtWholesalePrice, ShirtListPrice)
VALUES
(3000, 'PO300', 'Short Sleeve Polo', 
 'A classic polo shirt with a collar and button placket for a smart casual look.', 'All-Season', 'Large', 300, 20.00, 22.00);

INSERT INTO Shirts
(ShirtID, ShirtCode, ShirtName, ShirtDescription, ShirtSeason, ShirtSize, ShirtTypeID, ShirtWholesalePrice, ShirtListPrice)
VALUES
(3001, 'PO301', 'Cotton Sport Polo', 
 'A lightweight sport polo made from breathable cotton fabric for active days.', 'Summer', 'Medium', 300, 21.50, 33.99);

INSERT INTO Shirts
(ShirtID, ShirtCode, ShirtName, ShirtDescription, ShirtSeason, ShirtSize, ShirtTypeID, ShirtWholesalePrice, ShirtListPrice)
VALUES
(3002, 'PO302', 'Premium Polo Shirt', 
 'This premium cotton polo features a tailored fit and moisture-wicking comfort.', 'Spring', 'Large', 300, 23.75, 39.99);

INSERT INTO Shirts
(ShirtID, ShirtCode, ShirtName, ShirtDescription, ShirtSeason, ShirtSize, ShirtTypeID, ShirtWholesalePrice, ShirtListPrice)
VALUES
(3003, 'PO303', 'Striped Polo', 
 'A stylish striped polo shirt ideal for business-casual or everyday wear.', 'All-Season', 'Small', 300, 19.99, 34.50);

INSERT INTO Shirts
(ShirtID, ShirtCode, ShirtName, ShirtDescription, ShirtSeason, ShirtSize, ShirtTypeID, ShirtWholesalePrice, ShirtListPrice)
VALUES
(3004, 'PO304', 'Performance Polo', 
 'A moisture-resistant polo designed for comfort and breathability during sports.', 'Summer', 'Medium', 300, 22.25, 36.99);


-- Final check
SELECT * FROM Shirts;
=======

>>>>>>> c86cf1268849b26284b6e4749d7e1130b59bfd3d
