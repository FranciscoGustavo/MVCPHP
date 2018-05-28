USE phpmvc;

CREATE TABLE products (
  product_id INT AUTO INCREMENT UNIQUE,
  title char(100) NOT NULL,
  unity char(10) NOt NULL,
  description TEXT,
  image char(50) NOT NULL,
  pricing FLOAT,
  existence FLOAT,
  last_time_update DATETIME NOT NULL,
  registration_date DATETIME NOT NULL,
  PRIMARY KEY(product_id)
);
