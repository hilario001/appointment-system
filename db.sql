CREATE TABLE user (
    id BIGINT unsigned PRIMARY KEY AUTO_INCREMENT,
    email varchar(64) UNIQUE NOT NULL,
    password varchar(64) NOT NULL
);

CREATE TABLE admin (
    id BIGINT unsigned PRIMARY KEY AUTO_INCREMENT,
    email varchar(64) UNIQUE NOT NULL,
    password varchar(64) NOT NULL
);

CREATE TABLE service (
    id BIGINT unsigned PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(64) UNIQUE NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(64) NOT NULL
);

CREATE TABLE pending_appointment (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    user_id BIGINT UNSIGNED NOT NULL,
    service_id BIGINT UNSIGNED NOT NULL,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL,

    FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE,
    FOREIGN KEY (service_id) REFERENCES service(id) ON DELETE CASCADE
);

CREATE TABLE upcoming_appointment (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    user_id BIGINT UNSIGNED NOT NULL,
    service_id BIGINT UNSIGNED NOT NULL,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL,
    -- confirmed_by BIGINT UNSIGNED NOT NULL,
    -- confirmed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE,
    FOREIGN KEY (service_id) REFERENCES service(id) ON DELETE CASCADE
    -- FOREIGN KEY (confirmed_by) REFERENCES admin(id) ON DELETE SET NULL
);

CREATE TABLE history (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    user_id BIGINT UNSIGNED NOT NULL,
    service_id BIGINT UNSIGNED NOT NULL,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL,
    -- confirmed_by BIGINT UNSIGNED NOT NULL,
    -- confirmed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE,
    FOREIGN KEY (service_id) REFERENCES service(id) ON DELETE CASCADE
    -- FOREIGN KEY (confirmed_by) REFERENCES admin(id) ON DELETE SET NULL
);

CREATE TABLE paypal_payment (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  service_id BIGINT UNSIGNED  NOT NULL,
  user_id BIGINT UNSIGNED NOT NULL,
  auth_id VARCHAR(128) NOT NULL,
  paypal_order_id VARCHAR(64),
  status VARCHAR(20) DEFAULT 'authorized',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

  FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE,
  FOREIGN KEY (service_id) REFERENCES service(id) ON DELETE CASCADE
);

INSERT INTO pending_appointment (user_id, service_id, appointment_date, appointment_time)
VALUES (1, 36, '2025-05-10', '10:00:00');

INSERT INTO pending_appointment (user_id, service_id, appointment_date, appointment_time)
VALUES (1, 36, '2025-05-11', '14:30:00');
